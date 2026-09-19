<?php
// 1. KONEKSI DATABASE (ByetHost Lo)
$host = "sql103.byetcluster.com";
$user = "if0_41138399";
$pass = "Mercusuar77A1";
$db   = "if0_41138399_site_db";
$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) { die("Koneksi Gagal: " . mysqli_connect_error()); }

// --- SETTING AKUN GOD MODE ---
$god_user = "BOSGOD";      // Username buat login ke admin_god.php
$god_pass = "god123";       // Password-nya
$god_role = "god";          // Role harus 'god' sesuai logika login

// Proses Suntik ke Tabel Admin
$sql = "INSERT INTO admin (username, password, role) 
        VALUES ('$god_user', '$god_pass', '$god_role')
        ON DUPLICATE KEY UPDATE password='$god_pass', role='$god_role'";

echo "<body style='background:#000; color:#ff007f; font-family:monospace; padding:40px; text-align:center; border: 5px solid #ff007f;'>";
echo "<h1>[!] GOD MODE ACTIVATOR [!]</h1>";
echo "<hr color='#ff007f'>";

if (mysqli_query($conn, $sql)) {
    echo "<h2 style='color:#0f0;'>AKUN GOD BERHASIL DITANAM!</h2>";
    echo "<div style='background:#111; padding:20px; display:inline-block; border-radius:10px; border:1px solid #333;'>";
    echo "USER : <b style='color:#fff;'>$god_user</b><br>";
    echo "PASS : <b style='color:#fff;'>$god_pass</b><br>";
    echo "ROLE : <b style='color:#ffde00;'>$god_role</b>";
    echo "</div>";
    echo "<p style='color:#888;'>Sekarang akun ini bisa tembus ke <b>admin_god.php</b></p>";
} else {
    echo "<h2 style='color:red;'>GAGAL SUNTIK: " . mysqli_error($conn) . "</h2>";
}

echo "<br><br><a href='portal_login.php' style='color:#ff007f; text-decoration:none; font-weight:bold;'>[ LOGIN SEKARANG ]</a>";
echo "<p style='color:red; font-size:10px;'>HAPUS FILE INI SEGERA!</p>";
echo "</body>";
?>