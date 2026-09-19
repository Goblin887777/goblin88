<?php
session_start();
error_reporting(0);
date_default_timezone_set('Asia/Jakarta');

define('FIREBASE_URL', 'https://firequeen-2986c-default-rtdb.asia-southeast1.firebasedatabase.app/');

function fb_request($path, $method = "GET", $data = null) {
    $url = FIREBASE_URL . $path . ".json";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    if ($data !== null) curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    $result = curl_exec($ch);
    curl_close($ch);
    return json_decode($result, true);
}

function crc16_custom($data) {
    $crc = 0xFFFF;
    for ($i = 0; $i < strlen($data); $i++) {
        $x = (($crc >> 8) ^ ord($data[$i])) & 0xFF;
        $x ^= $x >> 4;
        $crc = (($crc << 8) ^ ($x << 12) ^ ($x << 5) ^ $x) & 0xFFFF;
    }
    return strtoupper(str_pad(dechex($crc), 4, '0', STR_PAD_LEFT));
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $un = $_SESSION['username'] ?? '';
    if (!$un) { 
        echo "<script>alert('Sesi Habis! Silahkan login ulang.'); window.top.location.href='index.php';</script>"; 
        exit();
    }

    $raw_amount = $_POST['deposite_amount'] ?? '0';
    $amount = (int)preg_replace('/[^0-9]/', '', $raw_amount); 
    $promo_id = $_POST['promo_event'] ?? 'Tanpa Bonus';

    if ($amount < 50000) {
        echo "<script>alert('Minimal Rp 50.000'); window.history.back();</script>";
        exit();
    }

    $config = fb_request("settings/qris_config");
    $m_info = $config['merchant_info']; 
    
    // BACKUP JIKA FIREBASE KOSONG (INFO DARI BOS TADI)
    if (empty($m_info)) {
        $m_info = "00020101021126610014COM.GO-JEK.WWW01189360091437245554470210G7245554470303UMI51440014ID.CO.QRIS.WWW0215ID10265124572620303UMI5204564153033605802ID5913Bonekababybos6005BOGOR61051633062070703A016304";
    }

    // --- LOGIKA SUNTIK NOMINAL (ANTI GAGAL SCAN) ---
    
    // 1. Bersihkan dulu string dari nominal lama (Tag 54) dan CRC lama (Tag 63)
    // Kita potong sebelum Tag 58 (Country Code), karena di Gopay Tag 54 biasanya nempel di sana
    $qris_parts = explode("5802ID", $m_info);
    $qris_head = $qris_parts[0]; // Bagian Merchant ID dkk
    $qris_tail = "5802ID" . $qris_parts[1]; // Bagian Nama Merchant, Lokasi dkk
    
    // Bersihkan Tail dari CRC lama (6304XXXX)
    $qris_tail = explode("6304", $qris_tail)[0];

    // 2. Buat Tag Nominal (Tag 54)
    $val_nom = (string)$amount;
    $tag_54 = "54" . sprintf("%02d", strlen($val_nom)) . $val_nom;

    // 3. Gabungkan: Head + Nominal + Tail + Penutup CRC
    $qris_build = $qris_head . $tag_54 . $qris_tail . "6304";
    
    // 4. Hitung Checksum baru
    $qris_final = $qris_build . crc16_custom($qris_build);

    // Simpan ke Firebase
    $dataDepo = [
        "username" => $un,
        "nominal"  => $amount,
        "bonus"    => $promo_id,
        "status"   => "pending",
        "tipe"     => "QRIS GOPAY",
        "waktu"    => date("Y-m-d H:i:s"),
        "qris_raw" => $qris_final
    ];

    if (fb_request("deposit_pending_situs1", "POST", $dataDepo)) {
        $_SESSION['checkout_qris'] = $qris_final;
        $_SESSION['checkout_nom']  = $amount;
        echo "<script>window.top.location.href = 'bayar_qris.php';</script>";
        exit();
    } else {
        echo "<script>alert('Gagal Simpan Data!'); window.history.back();</script>";
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