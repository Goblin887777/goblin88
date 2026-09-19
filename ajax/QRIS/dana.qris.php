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
    if (!$un) { die("Sesi Habis!"); }

    $method = $_POST['method'] ?? '9';
    $raw_amount = $_POST['deposite_amount'] ?? '0';
    $amount = (int)preg_replace('/[^0-9]/', '', $raw_amount); 
    $promo_id = $_POST['promo_event'] ?? 'Tanpa Bonus';

    if ($amount < 50000) {
        echo "<script>alert('Minimal Rp 50.000'); window.history.back();</script>";
        exit();
    }

    // --- JALUR QRIS (METHOD 9) ---
    if ($method == "9") {
        $merchant_info = "00020101021126570011ID.DANA.WWW011893600915328612593902092861259390303UMI51440014ID.CO.QRIS.WWW0215ID10221889368200303UMI";
        $qris_build = $merchant_info . "520448145303360"; 
        $val_nom = (string)$amount;
        $qris_build .= "54" . sprintf("%02d", strlen($val_nom)) . $val_nom;
        
        // UPDATE NAMA: TOKOBONEKA88 (12 Karakter)
        $qris_build .= "5802ID5912TOKOBONEKA886005BOGOR6105161106304";
        
        $qris_final = $qris_build . crc16_custom($qris_build);

        $dataDepo = [
            "username" => $un,
            "nominal" => $amount,
            "bonus" => $promo_id,
            "status" => "pending",
            "tipe" => "QRIS",
            "waktu" => date("Y-m-d H:i:s"),
            "qris_raw" => $qris_final
        ];

        if (fb_request("deposit_pending_situs1", "POST", $dataDepo)) {
            $_SESSION['checkout_qris'] = $qris_final;
            $_SESSION['checkout_nom'] = $amount;
            header("Location: bayar_qris.php");
            exit();
        }
    } 
    // --- JALUR MANUAL (BANK/OVO) ---
    else {
        $tipe = ($method == "5") ? "BANK TRANSFER" : "E-WALLET";
        $dataDepo = [
            "username" => $un,
            "nominal" => $amount,
            "bonus" => $promo_id,
            "status" => "pending",
            "tipe" => $tipe,
            "waktu" => date("Y-m-d H:i:s")
        ];

        if (fb_request("deposit_pending_situs1", "POST", $dataDepo)) {
            echo "
            <!DOCTYPE html>
            <html>
            <head>
                <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                <style>
                    body { background-color: #1a1a1a; font-family: sans-serif; }
                </style>
            </head>
            <body>
                <script>
                    Swal.fire({
                        title: 'BERHASIL!',
                        text: 'Permintaan Deposit " . $tipe . " Berhasil Dikirim. Silakan transfer dan tunggu proses admin.',
                        icon: 'success',
                        confirmButtonColor: '#f39c12',
                        confirmButtonText: 'OKE BOS!',
                        background: '#2c2c2c',
                        color: '#fff'
                    }).then((result) => {
                        window.location.href = 'history.php';
                    });
                </script>
            </body>
            </html>";
            exit();
        }
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