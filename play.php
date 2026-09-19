<?php
session_start();
error_reporting(0);

// 1. WAJIB CEK LOGIN: Jika belum login, tendang balik ke portal
if (!isset($_SESSION['user'])) {
    header("Location: slot.php");
    exit();
}

// 2. TANGKAP PARAMETER DARI JAVASCRIPT
$game_code   = isset($_GET['id']) ? trim($_GET['id']) : '';
$provider_id = isset($_GET['provider']) ? strtoupper(trim($_GET['provider'])) : '';
$sub_code    = isset($_GET['sub']) ? trim($_GET['sub']) : '';

// 3. SETTING URL DEFAULT (Jika provider tidak terdaftar, lari ke sini)
$url_tujuan = "https://demogamesfree.pragmaticplay.net/gs2c/openGame.do?gameSymbol=vs20olympus&lang=id&cur=IDR";

// 4. LOGIKA MENEMBAK KE PROVIDER DEMO YANG LENGKAP
switch ($provider_id) {
    
    // === PRAGMATIC PLAY ===
    case 'PRAGMATIC':
    case 'PP':
        // Jika kodenya kosong atau tidak spesifik, kasih Olympus default, kalau ada kodenya otomatis ngikut
        $symbol = (!empty($game_code)) ? $game_code : "vs20olympus";
        $url_tujuan = "https://demogamesfree.pragmaticplay.net/gs2c/openGame.do?gameSymbol=" . $symbol . "&lang=id&cur=IDR";
        break;

    // === PG SOFT ===
    case 'PGSOFT':
    case 'PG':
        // Mengarahkan ke server demo global PG Soft resmi
        $symbol = (!empty($game_code)) ? $game_code : "mahjong-ways2";
        $url_tujuan = "https://demo.pgsoft-games.com/" . $symbol . "/index.html?language=id-id";
        break;

    // === HABANERO ===
    case 'HABANERO':
    case 'HB':
        $url_tujuan = "https://www.habanerosystems.com/id/games";
        break;

    // === JOKER GAMING ===
    case 'JOKER':
    case 'JKR':
        $url_tujuan = "https://www.jokerapp678.com/";
        break;

    // === SPADEGAMING ===
    case 'SPADE':
    case 'SG':
        $url_tujuan = "https://www.spadegaming.com/games/";
        break;

    // === MICROGAMING ===
    case 'MICRO':
    case 'MG':
        $url_tujuan = "https://www.microgaming.co.uk/games";
        break;

    // === CQ9 ===
    case 'CQ9':
        $url_tujuan = "https://www.cq9gaming.com/slots";
        break;
}

// 5. EKSEKUSI PENEMBAKAN LANGSUNG KE PROVIDER ASLI
header("HTTP/1.1 302 Found");
header("Location: " . $url_tujuan);
exit();
?>