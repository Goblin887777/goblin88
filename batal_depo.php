<?php
session_start();
error_reporting(0);
define('FIREBASE_URL', 'https://firequeen-2986c-default-rtdb.asia-southeast1.firebasedatabase.app/');

function fb_request($path, $method = "GET") {
    $url = FIREBASE_URL . $path . ".json";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $res = curl_exec($ch);
    curl_close($ch);
    return json_decode($res, true);
}

$un = $_SESSION['username'] ?? '';
if ($un) {
    $data = fb_request("deposit_pending_situs1");
    if ($data) {
        foreach ($data as $id => $item) {
            // Hapus hanya milik user ini yang masih pending
            if ($item['username'] === $un && $item['status'] === 'pending') {
                fb_request("deposit_pending_situs1/$id", "DELETE");
            }
        }
    }
}

// Bersihkan Session
unset($_SESSION['checkout_qris']);
unset($_SESSION['checkout_nom']);

header("Location: deposit.php");
exit();