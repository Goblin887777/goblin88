<?php
session_start();
error_reporting(0);
header('Content-Type: application/json'); // PENTING: Mengunci agar hanya kirim data JSON

// 1. KONEKSI DATABASE
$host = "sql103.byetcluster.com";
$user = "if0_41138399";
$pass = "Mercusuar77A1"; 
$db   = "if0_41138399_site_db";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    echo json_encode(['status' => 'error', 'pesan' => 'Koneksi Database Gagal!']);
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // TANGKAP DATA
    $username   = mysqli_real_escape_string($conn, trim($_POST['user_name'] ?? ''));
    $password   = $_POST['password'] ?? '';
    $acc_name   = mysqli_real_escape_string($conn, trim($_POST['acc_name'] ?? ''));
    $mobile_no  = mysqli_real_escape_string($conn, trim($_POST['mobile_no'] ?? ''));
    $bank_name  = mysqli_real_escape_string($conn, trim($_POST['bank_name'] ?? ''));
    $acc_no     = mysqli_real_escape_string($conn, trim($_POST['acc_no'] ?? '')); 
    $ref_code   = mysqli_real_escape_string($conn, trim($_POST['ref_code'] ?? ''));
    $method     = mysqli_real_escape_string($conn, trim($_POST['method'] ?? '')); 

    // VALIDASI USERNAME (Penyebab error di foto Bos)
    if (!preg_match('/^[a-zA-Z0-9]{6,12}$/', $username)) {
        echo json_encode(['status' => 'error', 'pesan' => 'Username harus 6-12 karakter tanpa simbol!']);
        exit();
    }

    // CEK DUPLIKAT
    $cek = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username' OR acc_no = '$acc_no' LIMIT 1");
    if (mysqli_num_rows($cek) > 0) {
        echo json_encode(['status' => 'error', 'pesan' => 'Username atau Nomor Rekening sudah terdaftar!']);
        exit();
    }

    // PROSES INSERT
    $sql = "INSERT INTO users (username, password, acc_name, mobile_no, ref_code, method, bank_name, acc_no, saldo) 
            VALUES ('$username', '$password', '$acc_name', '$mobile_no', '$ref_code', '$method', '$bank_name', '$acc_no', 0)";

    if (mysqli_query($conn, $sql)) { 
        echo json_encode(['status' => 'success', 'pesan' => 'Berhasil! Akun Anda sudah aktif.']);
    } else {
        echo json_encode(['status' => 'error', 'pesan' => 'Gagal menyimpan ke database.']);
    }
    exit();
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