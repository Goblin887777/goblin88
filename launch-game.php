<?php
session_start();
header('Content-Type: application/json');
$external_ip = file_get_contents('https://api.ipify.org');
file_put_contents('debug_ip.txt', "IP SERVER SAAT INI: " . $external_ip);

// 1. Proteksi Akses Member
if (!isset($_SESSION['username'])) { 
    echo json_encode(['success' => false, 'message' => 'Silahkan login terlebih dahulu.']);
    exit;
}

$username_member = $_SESSION['username'];

// 2. Menerima data dari Front-End
$rawInput = file_get_contents('php://input');
$requestData = json_decode($rawInput, true);

if (!$requestData || empty($requestData['provider']) || empty($requestData['gameCode'])) {
    echo json_encode(['success' => false, 'message' => 'Parameter tidak valid.']);
    exit;
}

// ========================================================
// 🎯 KAMUS PENERJEMAH KODE PROVIDER UTK API NEXUS
// ========================================================
$provider_raw = strtolower($requestData['provider']);

$provider_mapping = [
    // PRAGMATIC
    'pp'                => 'PRAGMATIC',
    'pp_slots'          => 'PRAGMATIC',
    'pragmatic'         => 'PRAGMATIC',
    'pragmaticplay'     => 'PRAGMATIC',

    // PGSOFT
    'pg'                => 'PGSOFT',
    'pg_slots'          => 'PGSOFT',
    'pgsoft'            => 'PGSOFT',
    'pocketgames'       => 'PGSOFT',

    // JOKER (Gunakan JOKERGAMING jika error, tapi coba JOKER dulu)
    'jk'                => 'JOKER',
    'jk_slot'           => 'JOKER',
    'jk_slots'          => 'JOKER',
    'joker'             => 'JOKER',
    'jokergaming'       => 'JOKER',
    'joker_gaming'      => 'JOKER',
    'joker_slot'        => 'JOKER',
    'joker_slots'       => 'JOKER',

    // HABANERO
    'habanero'          => 'HABANERO',
    'habanero_slots'    => 'HABANERO',
    'habanero_gaming'   => 'HABANERO',

    // SPADEGAMING
    'spade'             => 'SPADEGAMING',
    'spadegaming'       => 'SPADEGAMING',
    'spadegaming_slots' => 'SPADEGAMING',

    // CQ9
    'cq9'               => 'CQ9',
    'cq9_slots'         => 'CQ9',
    'cq9gaming'         => 'CQ9',

    // TAMBAHAN PROVIDER UMUM LAINNYA (Jaga-jaga jika ada)
    'slot88'            => 'SLOT88',
    'microgaming'       => 'MICROGAMING',
    'mgs'               => 'MICROGAMING',
    'playtech'          => 'PLAYTECH',
    'pt'                => 'PLAYTECH'
];

// Cari di kamus, kalau ada pakai hasil pemetaan, kalau tidak ada lakukan clean otomatis
if (array_key_exists($provider_raw, $provider_mapping)) {
    $provider_clean = $provider_mapping[$provider_raw];
} else {
    // Fallback aman: bersihkan kata _slots atau _slot, lalu buat huruf besar
    $provider_clean = strtoupper(str_replace(['_slots', '_slot'], '', $provider_raw));
}
// ========================================================

$gameCode = $requestData['gameCode'];

// 3. Kredensial NexusGGR Resmi
$base_url    = 'https://api.nexusggr.com';
$agent_code  = 'Rumahtua101';
$agent_token = '739741e705f6b250fd3897f440b848e8';

// 4. Susun Payload Tembakan
$payload = [
    'method'        => 'game_launch', 
    'agent_code'    => $agent_code,
    'agent_token'   => $agent_token,
    'user_code'     => $username_member, 
    'provider_code' => $provider_clean,
    'game_code'     => $gameCode,
    'lang'          => 'id'
];

// 5. Proses Tembak API via cURL
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $base_url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($payload));
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 15); 
curl_setopt($ch, CURLOPT_TIMEOUT, 30);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 

// TAMBAHKAN BARIS INI:
curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4); 

$execute = curl_exec($ch);

// 6. Penanganan Respon Balik
if ($execute === false) {
    echo json_encode(['success' => false, 'message' => 'CURL Error: ' . $curl_error]);
} else {
    $resData = json_decode($execute, true);
    
    if (json_last_error() !== JSON_ERROR_NONE) {
        echo json_encode(['success' => false, 'message' => 'Respon server bukan JSON: ' . substr($execute, 0, 100)]);
    } else {
        // Deteksi link peluncuran game dari Nexus
        if (isset($resData['launch_url']) && !empty($resData['launch_url'])) {
            echo json_encode(['success' => true, 'launchUrl' => $resData['launch_url']]);
        } elseif (isset($resData['status']) && ($resData['status'] == 1 || $resData['status'] == 'success')) {
            echo json_encode(['success' => true, 'launchUrl' => $resData['launch_url']]);
        } else {
            $msg = json_encode($resData); 
            echo json_encode(['success' => false, 'message' => "Nexus berkata: " . $msg]);
        }
    }
}
?>