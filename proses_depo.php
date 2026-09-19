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
        echo "<script>alert('Sesi Habis!'); window.top.location.href='index.php';</script>"; 
        exit(); 
    }

    $method = $_POST['method'] ?? '9';
    $raw_amount = $_POST['deposite_amount'] ?? '0';
    $amount = (int)preg_replace('/[^0-9]/', '', $raw_amount); 
    $promo_id = $_POST['promo_event'] ?? 'Tanpa Bonus';

    if ($amount < 50000) {
        echo "<script>alert('Minimal Rp 50.000'); window.history.back();</script>";
        exit();
    }

    if ($method == "9") {
        $config = fb_request("settings/qris_config");
        
        // M_INFO BASE (Tag 00 sampai 51 dari QRIS baru)
        $m_info = "00020101021126570011ID.DANA.WWW011893600915302407002002090240700200303UMI51440014ID.CO.QRIS.WWW0215ID10265059623930303UMI";
        
        // --- BUILD QRIS ---
        $qris_build = $m_info;
        
        // Tag 52: Category Code
        $qris_build .= "52046540";
        
        // Tag 53: IDR Currency
        $qris_build .= "5303360";  
        
        // Tag 54: Nominal (Dinamis)
        $val_nom = (string)$amount;
        $qris_build .= "54" . sprintf("%02d", strlen($val_nom)) . $val_nom;
        
        // Tag 58: Negara
        $qris_build .= "5802ID";   
        
        // Tag 59: NAMA MERCHANT
        $qris_build .= "5905MM999";
        
        // Tag 60: KOTA
        $qris_build .= "6012Kab. Tabanan";
        
        // Tag 61: KODE POS
        $qris_build .= "610582191";
        
        // Checksum Marker
        $qris_build .= "6304";
        
        // Hitung Checksum akhir (CRC16)
        $qris_final = $qris_build . crc16_custom($qris_build);


        $dataDepo = [
            "username" => $un,
            "nominal" => $amount,
            "bonus" => $promo_id,
            "status" => "pending",
            "tipe" => "QRIS DANA",
            "waktu" => date("Y-m-d H:i:s"),
            "qris_raw" => $qris_final
        ];

        if (fb_request("deposit_pending_situs1", "POST", $dataDepo)) {
            $_SESSION['checkout_qris'] = $qris_final;
            $_SESSION['checkout_nom'] = $amount;
            echo "<script>window.top.location.href = 'bayar_qris.php';</script>";
            exit();
        }
    }
    else {
        echo "<script>window.top.location.href = 'upload_bukti.php';</script>";
        exit();
    }
}
?>