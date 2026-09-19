<?php
session_start();
header('Content-Type: application/json');

$host = "sql103.byetcluster.com";
$user = "if0_41138399";
$pass = "Mercusuar77A1";
$db   = "if0_41138399_site_db";
$conn = mysqli_connect($host, $user, $pass, $db);

$username_session = $_SESSION['username'] ?? '';

if ($username_session) {
    $q = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username_session' LIMIT 1");
    $row = mysqli_fetch_assoc($q);
    echo json_encode($row); // Ini yang dibaca sama AJAX
} else {
    echo json_encode(['username' => '--']);
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