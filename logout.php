<?php
// Panggil koneksi dan session
include 'koneksi.php';

// Hapus semua data session
$_SESSION = array();

// Hancurkan session total
session_destroy();

// Tutup koneksi ke database
mysqli_close($conn);

// Tendang balik ke index
header("Location: index.php");
exit();
?>