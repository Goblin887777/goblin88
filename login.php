<?php
session_start();
error_reporting(0);
ob_clean();
header('Content-Type: application/json');

define('FIREBASE_URL', 'https://firequeen-2986c-default-rtdb.asia-southeast1.firebasedatabase.app/');

function firebase_request($path) {
    $url = FIREBASE_URL . $path . ".json";
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // SSL
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);

    // Timeout
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);

    $result = curl_exec($ch);
    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    // Jika cURL gagal total
    if ($result === false) {
        return "network_error";
    }

    return json_decode($result, true);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // 1. Ambil inputan user
    $username = trim($_POST['user_name'] ?? '');
    $password = trim($_POST['password'] ?? '');

    if (empty($username) || empty($password)) {
        echo json_encode([
            'status' => 'error',
            'message' => 'Username atau Password tidak boleh kosong!'
        ]);
        exit();
    }

    // Username tetap menggunakan sistem database lama
    // $username = strtolower($username);

    // 2. Path database lama
    $safe_username = urlencode($username);
    $path = "users_situs1/" . $safe_username;

    // 3. Ambil data user dari database lama
    $userData = firebase_request($path);

    // 4. Cek koneksi Firebase
    if ($userData === "network_error") {
        echo json_encode([
            'status' => 'error',
            'message' => 'Gangguan koneksi ke server database. Coba lagi!'
        ]);
        exit();
    }

    // 5. Cek apakah user ada
    if ($userData === null) {
        echo json_encode([
            'status' => 'error',
            'message' => 'Username tidak ditemukan!'
        ]);
        exit();
    }

    // 6. Verifikasi Password
    if (trim((string)($userData['password'] ?? '')) === $password) {

        // ==========================================
        // 🚫 CEK STATUS BLOKIR
        // ==========================================

        $statusBlokir = trim(
            (string)($userData['status_blokir'] ?? '')
        );

        // Status 1-5 = akun diblokir
        if (in_array($statusBlokir, ['1', '2', '3', '4', '5'], true)) {

            // Alasan dari database
            $alasanBlokir = trim(
                (string)($userData['alasan_blokir'] ?? '')
            );

            // Kalau alasan_blokir kosong, gunakan alasan berdasarkan tipe
            if ($alasanBlokir === '') {

                $daftarAlasan = [
                    '1' => 'TERDETEKSI KECURANGAN',
                    '2' => 'SILAHKAN HUBUNGI LIVECHAT',
                    '3' => 'AKUN DIBATASI',
                    '4' => 'AKTIVITAS MENCURIGAKAN',
                    '5' => 'PELANGGARAN KETENTUAN'
                ];

                $alasanBlokir =
                    $daftarAlasan[$statusBlokir] ??
                    'AKUN DIBLOKIR';
            }

            // Pastikan session lama tidak bisa dipakai
            unset($_SESSION['username']);
            unset($_SESSION['user']);

            // Kirim alasan langsung sebagai message
            echo json_encode([
                'status' => 'blocked',
                'message' => $alasanBlokir,
                'reason' => $alasanBlokir
            ]);
            exit();
        }

        // ==========================================
        // LOGIN NORMAL
        // ==========================================

        // Session lama tetap sama
        $_SESSION['username'] = $username;
        $_SESSION['user'] = $username;

        echo json_encode([
            'status' => 'success',
            'message' => 'Login Berhasil!',
            'url' => 'home.php'
        ]);
        exit();

    } else {

        echo json_encode([
            'status' => 'error',
            'message' => 'Password salah!'
        ]);
        exit();
    }

} else {

    // Jika akses langsung ke login.php tanpa POST
    echo json_encode([
        'status' => 'error',
        'message' => 'Invalid Request Method!'
    ]);
    exit();
}
?>