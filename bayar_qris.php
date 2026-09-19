<?php
session_start();
error_reporting(0);

// Ambil data dari session hasil proses_depo.php
$nominal = $_SESSION['checkout_nom'] ?? 0;
$qris = $_SESSION['checkout_qris'] ?? '';

// Jika tidak ada data deposit, kembalikan ke halaman deposit
if(!$qris || $nominal == 0) {
    header("Location: deposit.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran - GOBLIN$88</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
   <style>
    :root { --gold: #eeff00; --dark: #050B14; --card: #0c1829; }
    body { background: var(--dark); color: #F0F8FF; font-family: 'Inter', sans-serif; padding: 15px; }
    
    .main-container { max-width: 450px; margin: auto; }
    
    .card-pay { 
        background: var(--card); 
        border-radius: 25px; 
        padding: 20px; 
        border: 1px solid #e6c400;
        box-shadow: 0 0 20px rgba(0,0,0,0.8);
        position: relative;
        overflow: hidden;
    }

    .card-pay::before {
        content: ''; position: absolute; top: 0; left: 0; width: 100%; height: 5px;
        background: linear-gradient(90deg, transparent, var(--gold), transparent);
    }

    .header-logo { width: 100px; margin-bottom: 15px; filter: drop-shadow(0 0 5px rgba(0,179,255,0.3)); }

    .nominal-wrapper {
        background: #050B14;
        border-radius: 15px;
        padding: 15px;
        margin-bottom: 20px;
        border-left: 4px solid var(--gold);
    }

    .qr-container {
        background: #fff;
        padding: 15px;
        border-radius: 20px;
        box-shadow: 0 0 25px rgba(0, 179, 255, 0.2);
        display: inline-block;
        width: 100%;
    }
    .qr-container img { width: 100%; height: auto; border-radius: 10px; }

    .timer-box { margin: 20px 0; }
    .progress { height: 8px; background: #e6c400; border-radius: 10px; margin-top: 10px; }
    .progress-bar { background: var(--gold); box-shadow: 0 0 10px var(--gold); transition: none; }

    /* Tombol Konfirmasi */
    .btn-status {
        background: linear-gradient(45deg, #e6c400, #eeff00);
        color: #F0F8FF; border: none; width: 100%; padding: 14px;
        font-weight: bold; border-radius: 12px; text-transform: uppercase;
        box-shadow: 0 5px 15px rgba(251, 255, 0, 0.3);
        transition: 0.3s;
        cursor: pointer;
    }
    .btn-status:hover { transform: scale(1.02); color: #F0F8FF; }

    /* Tombol Batal (Lock Breaker) */
    .btn-batal {
        background: transparent;
        color: #ff4757;
        border: 1px solid #ff4757;
        width: 100%;
        padding: 10px;
        border-radius: 12px;
        font-size: 0.85rem;
        margin-top: 10px;
        transition: 0.3s;
    }
    .btn-batal:hover { background: rgba(255, 71, 87, 0.1); color: #ff4757; text-decoration: none; }

    .merchant-info { background: #050B14; border-radius: 12px; padding: 10px; margin-top: 20px; font-size: 0.85rem; }
    .scan-icons img { width: 35px; margin: 0 5px; opacity: 0.8; }
    
    .info-text { font-size: 0.75rem; color: #888; margin-top: 10px; line-height: 1.4; }

    /* Style Input Bukti TF */
    .upload-wrapper {
        background: #050B14;
        padding: 15px;
        border-radius: 15px;
        margin-bottom: 20px;
        border: 1px dashed var(--gold);
    }
    .upload-wrapper label {
        display: block;
        font-size: 0.85rem;
        color: var(--gold);
        margin-bottom: 10px;
        font-weight: bold;
    }
    .input-file-custom {
        width: 100%;
        color: #888;
        font-size: 0.8rem;
    }
</style>
</head>
<body>

<div class="main-container">
    <div class="card-pay text-center">
        <img src="https://upload.wikimedia.org/wikipedia/commons/a/a2/Logo_QRIS.svg" class="header-logo">
        
        <div class="nominal-wrapper text-left">
            <span class="small text-muted">Total Tagihan:</span>
            <h3 class="m-0 font-weight-bold" style="color: var(--gold);">Rp <?php echo number_format($nominal,0,',','.'); ?></h3>
        </div>

        <div class="qr-container">
            <img src="https://api.qrserver.com/v1/create-qr-code/?data=<?php echo urlencode($qris); ?>&size=350x350" alt="QRIS BABYBOS 88">
        </div>

        <div class="info-text">
            <i class="fas fa-info-circle mr-1 text-warning"></i> Screen shoot QR di atas, lalu buka aplikasi e-wallet Anda (DANA, OVO, GOPAY) untuk melakukan pembayaran.
        </div>

        <div class="timer-box">
            <div class="d-flex justify-content-between small">
                <span>Berlaku Hingga</span>
                <span id="timer_text" class="text-warning font-weight-bold">05:00</span>
            </div>
            <div class="progress">
                <div id="timer_bar" class="progress-bar" style="width: 100%"></div>
            </div>
        </div>

        <form id="formDepo" action="upload_bukti.php" method="POST" enctype="multipart/form-data">
            <div class="upload-wrapper">
                <label><i class="fas fa-camera mr-1"></i> UNGGAH BUKTI TRANSFER</label>
                <input type="file" name="bukti_tf" id="bukti_tf" class="input-file-custom" accept="image/*" required>
            </div>

            <button type="button" onclick="cekStatus()" class="btn-status">
                <i class="fas fa-check-circle mr-2"></i> Konfirmasi Sudah Bayar
            </button>
        </form>

        <button onclick="batalkanDepo()" class="btn-batal">
            <i class="fas fa-times-circle mr-1"></i> Batalkan & Ganti Nominal
        </button>

        <div class="merchant-info">
            <div class="mb-2 text-muted">Merchant: <b>GOBLIN$88 OFFICIAL</b></div>
            <div class="scan-icons">
                <img src="https://i.ibb.co/vXm6pYm/dana.png" alt="dana">
                <img src="https://i.ibb.co/B2vG0fV/ovo.png" alt="ovo">
                <img src="https://i.ibb.co/L9Y0Yp0/gopay.png" alt="gopay">
                <img src="https://i.ibb.co/vXyZ6X9/shopeepay.png" alt="shopeepay">
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    // Fungsi Konfirmasi dengan Validasi File
    function cekStatus() {
        const fileInput = document.getElementById('bukti_tf');
        
        if (!fileInput.files.length) {
            Swal.fire({
                icon: 'error',
                title: 'Bukti Belum Ada',
                text: 'Harap unggah foto bukti transfer Anda lebih dulu!',
                background: '#1a1a1a',
                color: '#fff'
            });
            return;
        }

        Swal.fire({
            title: 'Sedang Memverifikasi',
            html: 'Sistem sedang mengecek mutasi & bukti Anda.<br>Mohon tunggu 1-3 menit.',
            allowOutsideClick: false,
            showConfirmButton: false,
            willOpen: () => { Swal.showLoading(); },
            background: '#1a1a1a',
            color: '#fff'
        });
        
        // Kirim Form secara otomatis setelah 2 detik
        setTimeout(() => {
            document.getElementById('formDepo').submit();
        }, 2000);
    }

    // Fungsi Batal Deposit (Penting untuk Lock System)
    function batalkanDepo() {
        Swal.fire({
            title: 'Batalkan Deposit?',
            text: "Tiket deposit ini akan dihapus dan Anda bisa membuat deposit baru.",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Ya, Batalkan!',
            cancelButtonText: 'Kembali',
            background: '#1a1a1a',
            color: '#fff'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = 'batal_depo.php';
            }
        })
    }

    // Timer Logic
    let totalTime = 300; // 5 Menit
    let currentTime = 300;
    const timerText = document.getElementById('timer_text');
    const timerBar = document.getElementById('timer_bar');

    const countdown = setInterval(() => {
        currentTime--;
        let m = Math.floor(currentTime / 60);
        let s = currentTime % 60;
        
        timerText.innerHTML = (m < 10 ? '0'+m : m) + ":" + (s < 10 ? '0'+s : s);
        
        let percent = (currentTime / totalTime) * 100;
        timerBar.style.width = percent + "%";

        if (currentTime <= 0) {
            clearInterval(countdown);
            Swal.fire({
                icon: 'error',
                title: 'Waktu Habis',
                text: 'Silakan buat ulang pesanan deposit.',
                background: '#1a1a1a',
                color: '#fff'
            }).then(() => { 
                window.location.href = 'batal_depo.php'; 
            });
        }
    }, 1000);
</script>

</body>
</html>