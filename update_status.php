<?php
include "koneksi.php"; // Pastikan koneksi db benar

// Gunakan Key rahasia supaya tidak sembarang orang bisa buka kunci
$key_akses = "Mercusuar77_HOKI"; 

if(isset($_GET['user']) && $_GET['key'] == $key_akses) {
    $user = mysqli_real_escape_string($conn, $_GET['user']);
    
    // Update status di MySQL agar kunci terbuka
    $query = "UPDATE transaksi SET status='success' WHERE username='$user' AND status='pending' AND tipe='depo'";
    $exec = mysqli_query($conn, $query);
    
    if($exec) {
        echo "OK_TERBUKA";
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