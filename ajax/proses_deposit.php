<?php
// 1. KONEKSI KE DATABASE (Sesuaikan dengan data DB kamu)
$host = "localhost";
$user = "username_db_kamu"; 
$pass = "password_db_kamu";
$db   = "nama_database_kamu";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Memulai session untuk mengambil username pemain yang login
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // 2. TANGKAP DATA DARI FORM HTML
    $amount     = mysqli_real_escape_string($conn, $_POST['amount']);
    $keterangan = mysqli_real_escape_string($conn, $_POST['ref']);
    
    // Ambil Username dari session login (Pastikan index 'username' sesuai dengan sistem loginmu)
    $username   = isset($_SESSION['username']) ? $_SESSION['username'] : 'GUEST';

    // 3. INSERT KE TABEL DEPOSIT
    // Sesuaikan nama tabel 'deposit' dan kolom-kolomnya (username, amount, keterangan, status, dll)
    $sql = "INSERT INTO deposit (username, amount, keterangan, status, date_created) 
            VALUES ('$username', '$amount', '$keterangan', 'pending', NOW())";

    if (mysqli_query($conn, $sql)) {
        echo "success"; // Pesan ini akan dibaca oleh JavaScript untuk memunculkan notif BERHASIL
    } else {
        echo "error";
    }
}

mysqli_close($conn);
?>