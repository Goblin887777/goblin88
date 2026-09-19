<?php
session_start(); // 1. WAJIB di paling atas biar bisa otomatis login
include "koneksi.php";
error_reporting(0); // Sembunyikan error PHP agar respon AJAX tidak rusak

// --- CONFIGURATION FIREBASE ---
define('FIREBASE_URL', 'https://firequeen-2986c-default-rtdb.asia-southeast1.firebasedatabase.app/');

/**
 * Fungsi pembantu untuk komunikasi ke Firebase
 */
function firebase_request($path, $method = 'GET', $data = null) {
    $url = FIREBASE_URL . $path . ".json";
    $ch = curl_init();
    
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
    
    // Keamanan koneksi & Timeout (sama seperti di login)
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    
    if ($data) {
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    }
    
    $result = curl_exec($ch);
    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    
    if ($result === false) {
        return "network_error"; // Handle error jaringan
    }
    
    return json_decode($result, true);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // 1. TANGKAP DATA POST & PAKSA JADI HURUF KECIL (strtolower)
    // Trim untuk hapus spasi nyangkut di awal/akhir
    $username   = strtolower(trim($_POST['user_name'] ?? ''));
    $password   = strtolower(trim($_POST['password'] ?? '')); 
    $confirm_pw = strtolower(trim($_POST['confirm_password'] ?? '')); 
    
    // Nama input acak dari HTML
    $acc_name   = $_POST['NyWnsMxYrB'] ?? ''; 
    $mobile_no  = $_POST['dXbWSsrHRhMjYGqQCV'] ?? ''; 
    $bank_name  = $_POST['yACSxZCqzdYrB'] ?? ''; 
    $acc_no     = $_POST['acc_no'] ?? ''; 
    $ref_code   = $_POST['ref_code'] ?? '';
    $method     = $_POST['method'] ?? 'Bank';

    // 2. VALIDASI
    if (!preg_match('/^[a-z0-9]{6,12}$/', $username)) { // Regex ikut diubah ke a-z
        echo "Nama pengguna harus 6-12 karakter & tanpa simbol!";
        exit();
    }
    if (strlen($password) < 8) {
        echo "Kata sandi minimal harus 8 karakter!";
        exit();
    }
    if ($password !== $confirm_pw) {
        echo "Konfirmasi sandi tidak cocok!";
        exit();
    }
    if (substr($mobile_no, 0, 1) === '0') {
        echo "Isi nomor telepon TANPA angka 0 di depan!";
        exit();
    }

    // Gunakan urlencode untuk path amannya
    $safe_username = urlencode($username);

    // 3. CEK DUPLIKAT DI FIREBASE
    $existingUser = firebase_request("users_situs1/" . $safe_username, "GET");
    
    if ($existingUser === "network_error") {
        echo "Gangguan koneksi ke server. Coba lagi!";
        exit();
    }
    
    if ($existingUser !== null) {
        echo "Username sudah terdaftar!";
        exit();
    }

    // 4. STRUKTUR DATA UNTUK FIREBASE
    $dataUser = [
        "password"  => $password, 
        "acc_name"  => $acc_name,
        "mobile_no" => "62" . $mobile_no,
        "bank_name" => $bank_name,
        "acc_no"    => $acc_no,
        "method"    => $method,
        "ref_code"  => $ref_code,
        "saldo"     => 0,
        "status"    => "active",
        "reg_date"  => date("d/m/Y, H:i:s")
    ];

    // 5. SIMPAN KE FIREBASE
    $save = firebase_request("users_situs1/" . $safe_username, "PUT", $dataUser);

    if ($save && $save !== "network_error") {
        // --- FITUR AUTO LOGIN ---
        // Daftarkan session persis seperti di login.php
        $_SESSION['username'] = $username;
        $_SESSION['user'] = $username;
        
        echo "BERHASIL"; // Pastikan Javascript (SweetAlert) me-redirect ke home.php jika responsenya ini
    } else {
        echo "Gagal mendaftar ke server Firebase.";
    }
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