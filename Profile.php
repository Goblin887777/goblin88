<?php
session_start();
error_reporting(0);

// 1. Proteksi Login
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}

// 2. Setting Firebase
define('FIREBASE_URL', 'https://firequeen-2986c-default-rtdb.asia-southeast1.firebasedatabase.app/');

function firebase_get_data($path) {
    $url = FIREBASE_URL . $path . ".json";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $res = curl_exec($ch);
    curl_close($ch);
    return json_decode($res, true);
}

// 3. Ambil Data Lengkap User dari Firebase (users_situs6)
$u = $_SESSION['username'];
$userData = firebase_get_data("users_situs1/" . $u);

// Jika data gak ketemu di Firebase, logout paksa
if (!$userData) {
    session_destroy();
    header("Location: index.php");
    exit();
}

// Persiapan Variabel untuk HTML (Format 0,00 sesuai script lo)
$un         = $u;
$nama       = $userData['acc_name'] ?? 'BELUM DIISI';
$email      = $userData['email'] ?? '-';
$acc_no     = (string)($userData['acc_no'] ?? '-');
$saldo_game = number_format($userData['saldo'] ?? 0, 2, ',', '.'); 
$saldo_ref  = number_format($userData['referral_balance'] ?? 0, 2, ',', '.');
?>

<div class="container-wrapper profile-head">
  <div class="container container-box noSidePadding">
    <div class="title fs-lg clearfix">
      <button class="btn btn-link" onclick="$('#r-side-bar').removeClass('open');"> X </button>&nbsp;&nbsp;
      <span class="skew"><span>Profil saya</span></span>
      <a href="javascript:void(0);" onclick="window.onLogOut();" class="btn-logout"><i class="icon-logout"></i></a>
    </div>

    <div class="head-content">
      <div class="row no-gutters">
        <div class="col-xs-12">
          <div class="acc_safety_info">
            <div class="flex-row text-center icon_menu">
              <div class="icon-single"><a href="/profile/referral-downline"><i class="icon-user1"></i><div>Referral</div></a></div>
              <div class="icon-single"><a href="/memo" class="mail_link"><i class="icon-envelope"></i><div>Memo</div></a></div>
              <div class="icon-single"><a href="/member-level" class="mail_link"><i class="icon-users"></i><div>Member Level</div></a></div>
              <div class="icon-single"><a href="/security" class="mail_link"><i class="icon-users"></i><div>Keamanan</div></a></div>
            </div>
          </div>
        </div>

        <div class="col-xs-12" id="wallet-slider" style="height: fit-content; overflow:hidden;">
          <div class="swiper-wrapper">
            <div class="bal-box swiper-slide">
              <button class="btn btn-clear">
                <div class="row no-gutters">
                  <div class="col-xs-12">
                    <div class="d-flex" style="align-items:center">
                      <span class="bal-txt fs-lg">IDR <?php echo $saldo_game; ?></span>&nbsp;<i class="col-xs-6 noSidePadding i-refresh"></i>
                    </div>
                    <div class="bal-title">Dompet Permainan</div>
                  </div>
                </div>
              </button>
            </div>
            <div class="bal-box swiper-slide">
              <button class="btn btn-clear">
                <div class="row no-gutters">
                  <div class="col-xs-12">
                    <div class="d-flex" style="align-items:center">
                      <span class="bal-ref-txt fs-lg">IDR <?php echo $saldo_ref; ?></span>&nbsp;<i class="col-xs-6 noSidePadding i-refresh"></i>
                    </div>
                    <div class="bal-title">Dompet Referral</div>
                  </div>
                </div>
              </button>
            </div>
          </div>
          <div class="swiper-button-prev"><span><svg width="34" height="34" viewBox="0 0 34 34" fill="currentColor"><path d="M20.1587 23.9614C20.4207 23.6994 20.4207 23.2745 20.1587 23.0124L14.1464 17.0001L20.1587 10.9877C20.4207 10.7256 20.4207 10.3008 20.1587 10.0387C19.8966 9.77668 19.4717 9.77668 19.2097 10.0387L12.7229 16.5256C12.4608 16.7877 12.4608 17.2125 12.7229 17.4745L19.2097 23.9614C19.4717 24.2235 19.8966 24.2235 20.1587 23.9614Z"/></svg></span></div>
          <div class="swiper-button-next"><span><svg width="34" height="34" viewBox="0 0 34 34" fill="currentColor"><path d="M13.8413 10.0386C13.5792 10.3006 13.5792 10.7255 13.8413 10.9876L19.8536 16.9999L13.8413 23.0123C13.5792 23.2744 13.5792 23.6992 13.8413 23.9613C14.1033 24.2233 14.5282 24.2233 14.7903 23.9613L21.2771 17.4744C21.5392 17.2123 21.5392 16.7875 21.2771 16.5255L14.7903 10.0386C14.5282 9.77653 14.1033 9.77653 13.8413 10.0386Z"></path></svg></span></div>
        </div>

        <div class="col-xs-12 mt-3 ">
          <div class="mdc-tab-bar" role="tablist">
            <div class="mdc-tab-scroller">
              <div class="mdc-tab-scroller__scroll-area mdc-tab-scroller__scroll-area--scroll" style="margin-bottom: 0px; overflow-x: scroll;">
                <div class="mdc-tab-scroller__scroll-content">
                  <a role="tab" href="/profile/edit" class="mdc-tab active"><span class="mdc-tab__content"><span class="mdc-tab__text-label">Detail</span></span><span class="mdc-tab-indicator active"><span class="mdc-tab-indicator__content mdc-tab-indicator__content--underline"></span></span></a>
                  <a role="tab" href="javascript:void(0);" class="mdc-tab"><span class="mdc-tab__content"><span class="mdc-tab__text-label">Tukar kata sandi</span></span><span class="mdc-tab-indicator"><span class="mdc-tab-indicator__content mdc-tab-indicator__content--underline"></span></span></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="outlet tab-content">
        <div class="tab-pane active" id="home" role="tabpanel">
          <div class="container-b3" style="padding-top: 15px;">
            <div class="row profile-edit" style="background: rgba(0,179,255,0.03); border: 1px solid rgba(0,179,255,0.2); border-radius: 8px; padding: 10px;">
              <div class="col-xs-12">
                <div class="row" style="display: flex; align-items: center; margin-bottom: 12px; border-bottom: 1px solid #0c1829; padding-bottom: 5px;">
                  <div class="col-xs-5 noSidePadding"><p class="_label" style="color: #fffb00; margin-bottom:0; font-size: 12px;">Username</p></div>
                  <div class="col-xs-7 noSidePadding"><p style="margin-bottom:0; font-weight: bold; color: #F0F8FF; text-align: right;"><?php echo strtoupper($un); ?></p></div>
                </div>
                <div class="row" style="display: flex; align-items: center; margin-bottom: 12px; border-bottom: 1px solid #0c1829; padding-bottom: 5px;">
                  <div class="col-xs-5 noSidePadding"><p class="_label" style="color: #fffb00; margin-bottom:0; font-size: 12px;">Nama Rekening</p></div>
                  <div class="col-xs-7 noSidePadding"><p style="margin-bottom:0; font-weight: normal; color: #fffb00; text-align: right;"><?php echo strtoupper($nama); ?></p></div>
                </div>
                <div class="row" style="display: flex; align-items: center; margin-bottom: 12px; border-bottom: 1px solid #0c1829; padding-bottom: 5px;">
                  <div class="col-xs-5 noSidePadding"><p class="_label" style="color: #fffb00; margin-bottom:0; font-size: 12px;">Email</p></div>
                  <div class="col-xs-7 noSidePadding"><p style="margin-bottom:0; font-weight: normal; color: #fffb00; font-size: 11px; text-align: right;"><?php echo $email; ?></p></div>
                </div>
                <div class="row" style="display: flex; align-items: center; margin-bottom: 5px;">
                  <div class="col-xs-5 noSidePadding"><p class="_label" style="color: #fffb00; margin-bottom:0; font-size: 12px;">Nomor Rekening</p></div>
                  <div class="col-xs-7 noSidePadding"><p style="margin-bottom:0; font-weight: bold; color: #F0F8FF; text-align: right;"><?php echo $acc_no; ?></p></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://semangatMERCUSUAR77.site/js/ugsports/swiper.min.js"></script>
<script>
$(document).ready(function () {
    // 1. Jalankan Swiper (Supaya kotak tetap lurus/rapi)
    if (typeof Swiper !== 'undefined') {
        new Swiper('#wallet-slider', {
            speed: 320, 
            slidesPerView: 'auto', 
            centeredSlides: true,
            navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev' },
        });
    }

    // 2. Fungsi Format Rupiah (250.000,00)
    function formatIDR(angka) {
        var n = parseFloat(angka);
        if (isNaN(n)) return "0,00";
        return n.toLocaleString('id-ID', {
            minimumFractionDigits: 2,
            maximumFractionDigits: 2
        });
    }

    // 3. Fungsi Refresh Saldo
    $(document).off("click", ".i-refresh").on("click", ".i-refresh", function(e) {
        e.preventDefault();
        
        var $icon = $(this);
        var $txtGame = $(".bal-txt");
        var $txtRef = $(".bal-ref-txt");

        // Animasi putar & loading
        $icon.css('transition', 'all 0.5s').css('transform', 'rotate(360deg)');
        $txtGame.text("IDR ...");
        $txtRef.text("IDR ...");

        $.ajax({
            url: 'get_balance.php?t=' + Math.random(),
            type: 'GET',
            dataType: 'text', // Karena get_balance kirim teks biasa
            success: function(response) {
                // response isinya: "250000|0"
                if (response && response.indexOf('|') !== -1) {
                    var hasil = response.split('|');
                    var saldoUtama = hasil[0]; // Ambil kiri pipa
                    var saldoRef = hasil[1];   // Ambil kanan pipa

                    // Tampilkan dengan format 250.000,00
                    $txtGame.text("IDR " + formatIDR(saldoUtama));
                    $txtRef.text("IDR " + formatIDR(saldoRef));
                } else {
                    $txtGame.text("Error Data");
                }
            },
            error: function() {
                $txtGame.text("Koneksi Down");
            },
            complete: function() {
                setTimeout(function() {
                    $icon.css('transform', 'rotate(0deg)');
                }, 500);
            }
        });
    });
});
</script>