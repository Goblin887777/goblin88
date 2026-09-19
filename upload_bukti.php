<?php
session_start();
error_reporting(E_ALL); 

// 1. PROTEKSI LOGIN
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}

// 2. CONFIGURATION FIREBASE
$firebase_url = "https://firequeen-2986c-default-rtdb.asia-southeast1.firebasedatabase.app/deposit_pending_situs1";

// 3. AMBIL DATA USER & NOMINAL
$u = $_SESSION['username'];

// Cek nominal dari POST (input form) dulu, kalau kosong baru cek Session
$nominal_input = $_POST['deposite_amount'] ?? $_SESSION['checkout_nom'] ?? 0;

// Bersihkan format ribuan (koma atau titik) supaya jadi angka murni
$nominal = (int)preg_replace('/[^0-9]/', '', $nominal_input);

// Validasi nominal jangan sampai 0
if ($nominal <= 0) {
    echo "<script>alert('Nominal deposit tidak ditemukan atau tidak valid!'); window.location.href = 'deposit.php';</script>";
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['bukti_tf'])) {
    
    $file = $_FILES['bukti_tf'];
    $file_ext = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
    
    // Validasi ekstensi file
    $allowed = ['jpg', 'jpeg', 'png'];
    if (!in_array($file_ext, $allowed)) {
        echo "<script>alert('Hanya foto (JPG/PNG) yang diperbolehkan!'); window.history.back();</script>";
        exit;
    }

    // Penamaan file: Waktu_Username.jpg
    $file_name = date('Ymd_His') . '_' . $u . '.' . $file_ext;
    
    // Folder penyimpanan
    $upload_dir = 'bukti_transfer/'; 
    if (!is_dir($upload_dir)) {
        mkdir($upload_dir, 0777, true);
    }
    
    $target_file = $upload_dir . $file_name;

    if (move_uploaded_file($file['tmp_name'], $target_file)) {
        
        $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://";
        $bukti_url = $protocol . $_SERVER['HTTP_HOST'] . "/" . $target_file;
        $waktu_skrg = date('Y-m-d H:i:s');
        
        // =========================================================================
        // LOGIKA PERBAIKAN: CARI DATA TIKET LAMA -> LALU GABUNGKAN BUKTI (PATCH)
        // =========================================================================
        
        // A. Ambil data dari Firebase untuk mencari ID Transaksi user ini
        $ch_get = curl_init($firebase_url . ".json");
        curl_setopt($ch_get, CURLOPT_RETURNTRANSFER, true);
        $response_get = curl_exec($ch_get);
        curl_close($ch_get);
        
        $firebase_key = null; 
        
        if ($response_get) {
            $data_db = json_decode($response_get, true);
            if (is_array($data_db)) {
                // Looping untuk mencari data milik user ini yang statusnya masih 'pending'
                foreach ($data_db as $key => $val) {
                    if (isset($val['username']) && $val['username'] == $u && 
                        isset($val['nominal']) && $val['nominal'] == $nominal && 
                        isset($val['status']) && $val['status'] == 'pending') {
                        
                        $firebase_key = $key; // Ketemu ID-nya!
                        break; 
                    }
                }
            }
        }
        
        // B. Jika ketemu ID-nya, kita UPDATE (PATCH). Jika tidak, bikin BARU (POST).
        if ($firebase_key != null) {
            // HANYA TAMBAHKAN URL BUKTI KE DATA YANG SUDAH ADA
            $data_update = [
                'bukti_url' => $bukti_url
            ];
            
            $json_data = json_encode($data_update);
            $ch = curl_init($firebase_url . "/" . $firebase_key . ".json");
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PATCH"); // PENTING: Gunakan PATCH
            
        } else {
            // JIKA TIKET TIDAK DITEMUKAN, BUAT BARU SEBAGAI CADANGAN
            $data_baru = [
                'username'  => $u,
                'nominal'   => $nominal,
                'waktu'     => $waktu_skrg,
                'bukti_url' => $bukti_url,
                'status'    => 'pending'
            ];
            
            $json_data = json_encode($data_baru);
            $ch = curl_init($firebase_url . ".json");
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST"); // Gunakan POST
        }
        
        // C. Eksekusi pengiriman ke Database
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
        $response = curl_exec($ch);
        curl_close($ch);

        // =========================================================================

        if ($response) {
            // Bersihkan session checkout saja
            unset($_SESSION['checkout_nom']);
            unset($_SESSION['checkout_qris']);
            
            echo "<script>
                alert('Bukti Berhasil Terkirim! Mohon tunggu admin memproses deposit Anda.');
                window.location.href = 'deposit.php'; 
            </script>";
        }
    } else {
        echo "Gagal mengunggah file. Pastikan folder 'bukti_transfer' sudah ada dan izinnya CHMOD 777.";
    }
} else {
    header("Location: deposit.php");
}

// Ambil data Live Chat secara real-time dari Firebase
$linkLiveChat = "https://direct.lc.chat/19926541/"; // Default jika belum di-set

$url_firebase_chat = FIREBASE_URL . "settings.json";
$ch_chat = curl_init();
curl_setopt($ch_chat, CURLOPT_URL, $url_firebase_chat);
curl_setopt($ch_chat, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch_chat, CURLOPT_SSL_VERIFYPEER, false);
$result_chat = curl_exec($ch_chat);
curl_close($ch_chat);

$dataSettings = json_decode($result_chat, true);
if (!empty($dataSettings['livechat'])) {
    $valLiveChat = trim($dataSettings['livechat']);
    $linkLiveChat = (strpos($valLiveChat, 'http') === 0) ? $valLiveChat : "https://direct.lc.chat/" . $valLiveChat . "/";
}
?>