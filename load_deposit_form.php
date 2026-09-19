<?php
// Paksa session agar bisa dibaca lintas file di hosting baru
ini_set('session.cookie_httponly', 1);
ini_set('session.use_only_cookies', 1);
ini_set('session.cookie_path', '/'); 

session_start();
error_reporting(0);

// JANGAN PAKAI HEADER LOCATION DI SINI (Bikin Mirror/Inception)
if (!isset($_SESSION['username']) || empty($_SESSION['username'])) {
    echo "<div class='alert alert-warning'>Sesi Habis (Error 401). Silahkan Refresh Halaman Utama.</div>";
    echo "<script>window.top.location.href = 'index.php';</script>"; // Force keluar dari box
    exit();
}

define('FIREBASE_URL', 'https://firequeen-2986c-default-rtdb.asia-southeast1.firebasedatabase.app/');

function firebase_get_target($path) {
    $url = FIREBASE_URL . $path . ".json";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 5); 
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $result = curl_exec($ch);
    curl_close($ch);
    return json_decode($result, true);
}

// 1. TARIK LOGIKA ROUTING DARI FIREBASE (BUAT REDIRECT OTOMATIS)
$routing_data = firebase_get_target("settings/routing");
$file_tujuan_otomatis = $routing_data['action_file']; 

// 2. AMBIL DATA USER
$u = $_SESSION['username'];
$row = firebase_get_target("users_situs1/" . $u);

if (!$row) {
    echo "<div class='alert alert-danger'>Data user tidak ditemukan di sistem.</div>";
    exit();
}

$gateway = $_GET['isgateway'] ?? 'flypay';
$method  = $_GET['method'] ?? '9';

$title_display = "Deposit via " . strtoupper($gateway);
$norek_tujuan = "";
$atas_nama = "Oculus";
$atas_namaovo = "SAPUTRI";
$atas_namadana = "HAYACINTHIA";
$atas_namabri = "NxxxxNI";
$atas_namagopay = "SAPUTRI";

if($method == "7") { $atas_nama = $atas_namaovo; }
if($method == "5") { $atas_nama = $atas_namadana; }
if($method == "6") { $atas_nama = $atas_namadana; }
if($method == "10") { $atas_nama = $atas_namabri; }

if($method == "9") { 
    $title_display = "Deposit via QRIS (Otomatis)";
    $norek_tujuan = "QRIS (SCAN SETELAH KLIK)";
} else if($method == "5") { 
    $title_display = "Deposit via Transfer Bank";
    $norek_tujuan = "DANA: 0831-9303-3492"; 
} else if($method == "7") { 
    $title_display = "Deposit via E-Wallet";
    $norek_tujuan = "OVO: 0882-0003-64175"; 
} else if($method == "6") { 
    $title_display = "Deposit via E-Wallet";
    $norek_tujuan = "0881-0801-23446"; 
} else if($method == "10") { 
    $title_display = "Deposit via Transfer Bank";
    $norek_tujuan = "4363-01035-715-539"; 
}
?>

<script type="text/javascript" src="https://cdn.sitestatic.net/assets/jquery/jquery.price_format.min.js?v=2"></script>

<style>
    /* Input Nominal Style */
    #deposite_amount {
        background-color: #050B14 !important;
        color: #F0F8FF !important;
        -webkit-text-fill-color: #F0F8FF !important;
        opacity: 1 !important;
        font-weight: bold !important;
        font-size: 1.2rem;
        height: 45px;
        border-radius: 8px;
    }
    #deposite_amount:focus {
        border: 2px solid #ffee00 !important;
        box-shadow: 0 0 10px rgba(229, 255, 0, 0.5);
    }
    .btn-depo-group {
        width: 140px;
        font-weight: bold;
        padding: 10px 0;
        border-radius: 30px;
        text-transform: uppercase;
        letter-spacing: 1px;
    }
    /* QRIS & Rekening Box Premium */
    .dest-box {
        background: linear-gradient(145deg, #050B14, #0c1829);
        border: 2px solid #ffee00;
        padding: 20px;
        border-radius: 15px;
        margin-top: 15px;
        position: relative;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0,0,0,0.5);
    }
    .dest-box::after {
        content: "";
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: radial-gradient(circle, rgba(0,179,255,0.1) 0%, transparent 70%);
        pointer-events: none;
    }
    .upload-section {
        background: rgba(0, 179, 255, 0.05);
        border: 2px dashed #ffee00;
        padding: 20px;
        border-radius: 12px;
        margin-top: 20px;
        transition: 0.3s;
    }
    .copy-btn {
        background: #ffee00;
        color: #050B14;
        border: none;
        padding: 2px 10px;
        border-radius: 5px;
        font-size: 10px;
        font-weight: bold;
        margin-left: 10px;
        cursor: pointer;
    }
</style>

<div class="box-wrapper plr-15">
    <form id="depositForm" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="gateway_method" value="<?php echo htmlspecialchars($gateway); ?>">
        <input type="hidden" name="method" value="<?php echo htmlspecialchars($method); ?>">
        
        <h2 class="filter-title text-white" style="border-left: 4px solid #ffee00; padding-left: 10px; margin-bottom: 20px;"><?php echo $title_display; ?></h2>

        <div class="form-group row d-flex align-items-center">
            <div class="col-md-3 col-xs-4">
                <div class="font-weight-bold text-white">Bank Penerima<span class="text-danger">*</span></div>
            </div>
            <div class="col-md-9 col-xs-8">
                <div class="dest-box" style="background: #050B14; padding: 10px; border-radius: 4px; border: 1px solid #003B99;">
                    <?php if($gateway == "flypay" || $method == "9"): ?>
                        <span style="font-size: 14px; color: #ffee00; font-weight: bold;">QRIS HOKI Mercusuar77</span>
                    <?php else: ?>
                        <div id="target_copy" style="font-size: 16px; color: #fff; font-weight: 700;">
                            <?php echo $norek_tujuan; ?> 
                            <button type="button" class="btn btn-link btn-xs" style="color: #ffee00; padding: 0 5px;" onclick="copyToClipboard('<?php echo $norek_tujuan; ?>')">Salin</button>
                        </div>
                        <div style="font-size: 12px; color: #ccc;">A/N: <strong><?php echo $atas_nama; ?></strong></div>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <div class="form-group row d-flex align-items-center">
            <div class="col-md-3 col-xs-4">
                <label class="col-form-label font-weight-bold text-white">Jumlah Deposit<span class="text-danger">*</span></label>
            </div>
            <div class="col-md-9 col-xs-8">
                <input type="tel" class="form-control" placeholder="0.00" id="deposite_amount" name="deposite_amount" style="background: #050B14; border: 1px solid #003B99; color: #fff;" autocomplete="off" required>
                <small id="lable_note" style="display:block; margin-top:5px; color: #ffee00;">Min: 50,000 ~ Max: 10,000,000</small>
            </div>
        </div>

        <div class="form-group row d-flex align-items-center">
            <div class="col-md-3 col-xs-4">
                <div class="font-weight-bold text-white">Bonus</div>
            </div>
            <div class="col-md-9 col-xs-8">
                <select class="form-control" name="promo_event" id="promo_event" style="background: #050B14; color: #fff; border: 1px solid #003B99;">
                    <option value="0">Pilih promo tersedia</option>
                    <option value="Mercusuar77_NEW100">BONUS NEW MEMBER 100%</option>
                    <option value="0">HAPUS TOTAL TOURNOVER</option>
                    <option value="Mercusuar77_XTRA">BONUS HARIAN 10%</option>
                    <option value="Mercusuar77_GARANSI">GARANSI SALDO 100% TANPA T.O</option>
                </select>
                <div class="fs-sm mt-1" style="color: #ccc; font-size: 12px;">Ada kode promosi? <button type="button" class="btn btn-link" style="color: #ffee00; padding: 0; font-size: 12px;">Tambah disini</button></div>
            </div>
        </div>

        <?php if($method == "5" || $method == "7" || $method == "0"|| $method == "6" || $method == "10"): ?>
        <div class="form-group row d-flex align-items-center">
            <div class="col-md-3 col-xs-4">
                <label class="font-weight-bold text-white">Bukti TF</label>
            </div>
            <div class="col-md-9 col-xs-8">
                <input type="file" name="bukti_tf" id="bukti_tf" class="form-control-file text-white" accept="image/*" required>
            </div>
        </div>
        <?php endif; ?>

        <div class="form-group row">
            <div class="col-md-12">
                <label style="color: #fff; font-weight: normal; font-size: 13px;">
                    <input type="checkbox" name="termcondition" required> Saya telah membaca dan menyetujui Syarat dan Ketentuan.
                </label>
            </div>
        </div>

        <div class="form-group row mt-3">
            <div class="col-md-3 col-xs-4"></div>
            <div class="col-md-9 col-xs-8">
                <button type="button" class="btn btn-secondary" style="background: #0c1829; border: none;" onclick="location.reload()">Back</button>
                <button type="submit" class="btn" style="background: linear-gradient(to bottom, #ffee00, #54e600); border: none; color: #F0F8FF; font-weight: bold;">Kirim</button>
            </div>
        </div>
    </form>
</div>

<script>
    function copyToClipboard(text) {
        var dummy = document.createElement("textarea");
        document.body.appendChild(dummy);
        dummy.value = text;
        dummy.select();
        document.execCommand("copy");
        document.body.removeChild(dummy);
        
        Swal.fire({
            icon: 'success',
            title: 'BERHASIL',
            text: 'Nomor Tujuan Berhasil Disalin!',
            timer: 1500,
            showConfirmButton: false
        });
    }

    $(document).ready(function() {
        $('#deposite_amount').on('input', function() {
            var val = $(this).val().replace(/[^0-9]/g, '');
            if(val !== "") {
                $(this).val(Number(val).toLocaleString('en-US'));
            }
            autoCalc();
        });

        function autoCalc() {
            var raw = $('#deposite_amount').val();
            var nominal = parseInt(raw.replace(/[^0-9]/g, '')) || 0;
            var promo = $('#promo_event').val();
            var $note = $('#lable_note');

            if (nominal >= 50000) {
                var bonus = 0;
                var promoName = "";

                if (promo === "Mercusuar77_NEW100") { bonus = nominal; promoName = "NEW MEMBER 100%"; } 
                else if (promo === "Mercusuar77_XTRA") { bonus = nominal * 0.1; promoName = "BONUS HARIAN 10%"; } 
                else if (promo === "Mercusuar77_GARANSI") { bonus = nominal; promoName = "GARANSI SALDO 100% TANPA T.O"; }
                
                var total = nominal + bonus;

                if (promo !== "0") {
                    $note.html(
                        '<div style="border: 1px dashed #ffc107; padding: 10px; background: rgba(255, 193, 7, 0.1); color: #fff; margin-top: 10px; border-radius: 8px; font-size: 13px;">' +
                        'Promo: <b style="color:#ffc107;">' + promoName + '</b><br>' +
                        'Total Saldo: <b style="color:#2ecc71; font-size:16px;">Rp ' + total.toLocaleString('id-ID') + '</b>' +
                        '</div>'
                    );
                } else {
                    $note.html('<span style="color: #ffc107;">Min: 50,000 ~ Max: 10,000,000</span>');
                }
            } else {
                $note.html('<span style="color: #ffc107;">Min: 50,000 ~ Max: 10,000,000</span>');
            }
        }

        $('#promo_event').on('change', autoCalc);

        $("#depositForm").on('submit', function(e) {
            var form = this; 
            var raw = $('#deposite_amount').val();
            var nominal = parseInt(raw.replace(/[^0-9]/g, '')) || 0;
            var method = '<?php echo $method; ?>';
            var targetFile = "<?php echo $file_tujuan_otomatis; ?>";

            if (nominal < 50000) {
                Swal.fire("Opps!", "Minimal deposit adalah Rp 50.000", "error");
                return false;
            }

            if (method == "5" || method == "7" || method == "0" || method == "6" || method == "10") {
                var fileInput = document.getElementById('bukti_tf');
                if (!fileInput || !fileInput.files.length) {
                    Swal.fire("WAJIB!", "Harap lampirkan foto bukti transfer Anda!", "warning");
                    return false;
                }

                e.preventDefault(); 
                Swal.fire({
                    title: 'KONFIRMASI KIRIM',
                    text: "Pastikan nominal sudah sesuai bukti transfer!",
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonColor: '#ffc107',
                    cancelButtonColor: '#444',
                    confirmButtonText: 'KIRIM SEKARANG',
                    cancelButtonText: 'CEK LAGI'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $('#btnSubmit').html('<i class="fa fa-spinner fa-spin"></i> MEMPROSES...').prop('disabled', true);
                        form.action = "upload_bukti.php"; 
                        form.submit();
                    }
                });

            } else {
                // JALUR OTOMATIS (IKUT LOGIKA FIREBASE)
                $('#btnSubmit').html('<i class="fa fa-spinner fa-spin"></i> GENERATE QRIS...').prop('disabled', true);
                form.action = (targetFile != "" && targetFile != null) ? targetFile : "proses_depo.php";
                return true; 
            }
        });
    });
</script>