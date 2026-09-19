<?php
include "koneksi.php"; // Pastikan file koneksi lo bener

// SETTING AKUN ADMIN LO DI SINI
$userAdmin = "BOSBESAR"; // Username buat login panel
$passAdmin = "admin123";  // Password buat login panel
$hashPass  = password_hash($passAdmin, PASSWORD_DEFAULT);

// Eksekusi Suntik ke Database
$query = "INSERT INTO users (username, password, balance, role, status) 
          VALUES ('$userAdmin', '$hashPass', 999999999, 'superadmin', 'active')";

if (mysqli_query($conn, $query)) {
    echo "<h3>SUNTIK ADMIN BERHASIL!</h3>";
    echo "Username: <b>$userAdmin</b><br>";
    echo "Password: <b>$passAdmin</b><br>";
    echo "<br><a href='portal_login.php'>Klik di sini buat Login</a>";
} else {
    echo "Gagal Suntik! Mungkin username sudah ada. Error: " . mysqli_error($conn);
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