<?php
// 1. Hubungkan ke database kamu
// Ganti sesuaikan dengan config database kamu bos
$host = "localhost";
$user = "root";
$pass = "";
$db   = "nama_database_kamu"; 

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi Gagal: " . mysqli_connect_error());
}

// 2. Tangkap data dari form deposit
if (isset($_POST['submit_deposit'])) {
    $username = mysqli_real_escape_with_string($conn, $_POST['username']);
    $method   = mysqli_real_escape_with_string($conn, $_POST['payment_method']);
    $amount   = mysqli_real_escape_with_string($conn, $_POST['amount']);
    
    // Status default adalah 'pending' agar muncul di panel admin untuk di-approve
    $status   = "pending";
    $tanggal  = date("Y-m-d H:i:s");

    // 3. Masukkan data ke tabel deposit
    // Sesuaikan 'nama_tabel_deposit' dengan nama tabel di database kamu
    $query = "INSERT INTO nama_tabel_deposit (username, method, amount, status, created_at) 
              VALUES ('$username', '$method', '$amount', '$status', '$tanggal')";

    if (mysqli_query($conn, $query)) {
        // Jika berhasil, tampilkan notifikasi sukses dan balik ke halaman deposit
        echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>";
        echo "<body></body>"; // Supaya SweetAlert punya tempat render
        echo "<script>
            Swal.fire({
                title: 'BERHASIL!',
                text: 'Permintaan deposit sedang diproses admin.',
                icon: 'success',
                confirmButtonText: 'OK'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = 'halaman_deposit.php'; 
                }
            });
        </script>";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>