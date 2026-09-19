<?php
session_start();
error_reporting(0);

if (!isset($_SESSION['username'])) {
    echo "0|0";
    exit();
}

define('FIREBASE_URL', 'https://firequeen-2986c-default-rtdb.asia-southeast1.firebasedatabase.app/');

$u = $_SESSION['username'];
$url = FIREBASE_URL . "users_situs1/" . $u . ".json";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$res = curl_exec($ch);
curl_close($ch);

$data = json_decode($res, true);

if ($data) {
    $game = $data['saldo'] ?? 0;
    $ref  = $data['referral_balance'] ?? 0;
    // Format kirim: saldoUtama|saldoRef (Sesuai script AJAX lo)
    echo $game . "|" . $ref;
} else {
    echo "0|0";
}