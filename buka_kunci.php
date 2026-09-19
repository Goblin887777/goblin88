<?php
include "koneksi.php";

$user = mysqli_real_escape_string($conn, $_GET['user']);
$key = $_GET['key'];

// Cek Key Keamanan
if ($key == "Mercusuar77_HOKI") {
    // Update status di MySQL agar variabel $is_locked di deposit.php jadi FALSE
    $sql = "UPDATE transaksi SET status='success' WHERE username='$user' AND status='pending' AND tipe='depo'";
    mysqli_query($conn, $sql);
    echo "BERHASIL_BUKA_KUNCI";
} else {
    echo "AKSES_DITOLAK";
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