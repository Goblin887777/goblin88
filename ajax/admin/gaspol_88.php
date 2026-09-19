<?php
// Matikan error reporting agar tidak mengganggu output
error_reporting(0);

// 1. KONEKSI DATABASE
$host = "sql103.byetcluster.com";
$user = "if0_41138399";
$pass = "Mercusuar77A1";
$db   = "if0_41138399_site_db";
$conn = mysqli_connect($host, $user, $pass, $db);

// 2. TANGKAP DATA
$pesan  = $_REQUEST['message'] ?? '';
$sender = str_replace(['@s.whatsapp.net', '@c.us'], '', $_REQUEST['sender'] ?? '');
$token  = "GUudftDnJRoZrRe1iqST"; 
$password_rahasia = "GASPOL88"; 
$target_reply = $_REQUEST['group_id'] ?? $sender;

if (stripos($pesan, '!inject') === 0 || stripos($pesan, '!topup') === 0) {
    // Pecah pesan berdasarkan spasi
    $pecah = explode(' ', preg_replace('/\s+/', ' ', trim($pesan)));
    
    if (count($pecah) >= 4) {
        $user_input = mysqli_real_escape_string($conn, str_replace(['[', ']'], '', $pecah[1]));
        
        // FIX NOMINAL: Hapus titik atau karakter non-angka agar nominal murni angka
        $nominal_raw = str_replace(['.', ','], '', $pecah[2]);
        $nominal = (int)$nominal_raw;
        
        $input_pass = $pecah[3];

        if ($input_pass === $password_rahasia && $nominal > 0) {
            // CARI USER
            $sql_cek = "SELECT id, username FROM users WHERE username = '$user_input' OR mobile_no = '$user_input' LIMIT 1";
            $cek = mysqli_query($conn, $sql_cek);
            
            if (mysqli_num_rows($cek) > 0) {
                $u = mysqli_fetch_assoc($cek);
                $fix_user = $u['username'];
                $user_id  = $u['id'];

                // UPDATE SALDO
                $update = mysqli_query($conn, "UPDATE users SET saldo = saldo + $nominal WHERE id = '$user_id'");
                
                if (mysqli_affected_rows($conn) > 0) {
                    // Ambil Saldo Akhir
                    $res_new = mysqli_query($conn, "SELECT saldo FROM users WHERE id = '$user_id'");
                    $u_new = mysqli_fetch_assoc($res_new);
                    $saldo_akhir = number_format($u_new['saldo'], 0, ',', '.');

                    $sukses_msg = "✅ *TOPUP BERHASIL*\n" .
                                  "══════════════════\n" .
                                  "👤 *User:* $fix_user\n" .
                                  "💰 *Jumlah:* Rp " . number_format($nominal, 0, ',', '.') . "\n" .
                                  "📟 *Saldo Akhir:* Rp $saldo_akhir\n" .
                                  "══════════════════\n" .
                                  "Silahkan Login dan Refresh Halaman..";
                    
                    // JURUS TERAKHIR KIRIM WA: Pakai file_get_contents dengan timeout
                    $url = "https://api.fonnte.com/send?target=$target_reply&message=" . urlencode($sukses_msg) . "&token=$token";
                    file_get_contents($url);
                }
            }
        }
    }
}

// Fitur Cek Saldo
if (stripos($pesan, '!ceksaldo') === 0) {
    $pecah = explode(' ', trim($pesan));
    if (count($pecah) >= 3) {
        $user_input = mysqli_real_escape_string($conn, str_replace(['[', ']'], '', $pecah[1]));
        if ($pecah[2] === $password_rahasia) {
            $sql_cek = "SELECT username, saldo FROM users WHERE username = '$user_input' OR mobile_no = '$user_input'";
            $res = mysqli_query($conn, $sql_cek);
            if ($u = mysqli_fetch_assoc($res)) {
                $msg = "💰 *DATA SALDO*\n══════════════════\n👤 User: *" . $u['username'] . "*\n💵 Saldo: *Rp " . number_format($u['saldo'], 0, ',', '.') . "*\n══════════════════";
                file_get_contents("https://api.fonnte.com/send?target=$target_reply&message=" . urlencode($msg) . "&token=$token");
            }
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