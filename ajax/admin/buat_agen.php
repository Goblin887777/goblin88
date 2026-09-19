<?php
// KONEKSI DB
$host = "sql103.byetcluster.com";
$user = "if0_41138399";
$pass = "Mercusuar77A1";
$db   = "if0_41138399_site_db";
$conn = mysqli_connect($host, $user, $pass, $db);

// --- SETTING AKUN AGEN BARU DI SINI ---
$user_agen = "admin2";      // Username buat login agen
$pass_agen = "agen123";       // Password buat login agen
$nama_agen = "Bawahan Bos 01"; // Nama lengkap
$role_agen = "agen";           // Role WAJIB 'agen'

// Cek apakah kolom role sudah support tulisan 'agen'
// Kita paksa ubah struktur tabelnya biar nerima tulisan apa saja
mysqli_query($conn, "ALTER TABLE admin MODIFY COLUMN role VARCHAR(50)");

// Proses Input
$cek = mysqli_query($conn, "SELECT * FROM admin WHERE username='$user_agen'");
if(mysqli_num_rows($cek) > 0) {
    echo "Username $user_agen sudah ada, Bos! Ganti yang lain.";
} else {
    $sql = "INSERT INTO admin (username, password, nama_lengkap, role) 
            VALUES ('$user_agen', '$pass_agen', '$nama_agen', '$role_agen')";
    
    if(mysqli_query($conn, $sql)) {
        echo "<h2>MANTAP BOS!</h2>";
        echo "Akun Agen Berhasil Dibuat.<br>";
        echo "Username: <b>$user_agen</b><br>";
        echo "Password: <b>$pass_agen</b><br>";
        echo "<br><a href='index_admin.php'>Coba Login Sekarang</a>";
    } else {
        echo "Gagal buat agen: " . mysqli_error($conn);
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