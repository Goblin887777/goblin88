<?php
session_start();
error_reporting(0); // Supaya kalau ada error kecil tidak bikin putih polos

// Jangan lupa koneksi.php kalau masih butuh DB lokal buat login session
include "koneksi.php"; 

// 1. DEFINE FIREBASE URL (Penting agar tidak error)
define('FIREBASE_URL', 'https://firequeen-2986c-default-rtdb.asia-southeast1.firebasedatabase.app/');

$is_login = isset($_SESSION['user']);
$username = $is_login ? $_SESSION['user'] : '';

$saldo = 0;
if ($is_login) {
    // Sesuaikan node foldernya (misal users_situs6)
    $url = FIREBASE_URL . "users_situs1/" . $username . "/saldo.json";
    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_TIMEOUT, 5); 
    
    $res = curl_exec($ch);
    curl_close($ch);
    
    $saldo = json_decode($res);
    
    if ($saldo === null) {
        $saldo = 0;
    }
}
?>

<html lang="id-ID"><head>
  <title>Goblin$88 Daftar dan Link Login Alternatif Terbaru 2026</title>
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

<meta property="og:url" content="https://www.Goblin88.site/">
<link rel="canonical" href="https://www.Goblin88.site/">

<meta name="google-site-verification" content="256vGWQXvxzJdjGOfldnWEOwrSoqjKzINzi3w7AmrWE" />
</head>

<script src="https://apis.google.com/_/scs/abc-static/_/js/k=gapi.lb.id.JlZG7ePi4xg.O/m=gapi_iframes/rt=j/sv=1/d=1/ed=1/rs=AHpOoo9bZCvgOq1E3JiiRDLsf0QN3hR_9A/cb=gapi.loaded_0?le=scs" async=""></script><script type="module" src="https://asset.qrishoki.com/gigagaming.js" async=""></script><style>.swal2-popup.swal2-toast{flex-direction:row;align-items:center;width:auto;padding:.625em;overflow-y:hidden;background:#fff;box-shadow:0 0 .625em #d9d9d9}.swal2-popup.swal2-toast .swal2-header{flex-direction:row;padding:0}.swal2-popup.swal2-toast .swal2-title{flex-grow:1;justify-content:flex-start;margin:0 .6em;font-size:1em}.swal2-popup.swal2-toast .swal2-footer{margin:.5em 0 0;padding:.5em 0 0;font-size:.8em}.swal2-popup.swal2-toast .swal2-close{position:static;width:.8em;height:.8em;line-height:.8}.swal2-popup.swal2-toast .swal2-content{justify-content:flex-start;padding:0;font-size:1em}.swal2-popup.swal2-toast .swal2-icon{width:2em;min-width:2em;height:2em;margin:0}.swal2-popup.swal2-toast .swal2-icon .swal2-icon-content{display:flex;align-items:center;font-size:1.8em;font-weight:700}@media all and (-ms-high-contrast:none),(-ms-high-contrast:active){.swal2-popup.swal2-toast .swal2-icon .swal2-icon-content{font-size:.25em}}.swal2-popup.swal2-toast .swal2-icon.swal2-success .swal2-success-ring{width:2em;height:2em}.swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line]{top:.875em;width:1.375em}.swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=left]{left:.3125em}.swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=right]{right:.3125em}.swal2-popup.swal2-toast .swal2-actions{flex-basis:auto!important;width:auto;height:auto;margin:0 .3125em}.swal2-popup.swal2-toast .swal2-styled{margin:0 .3125em;padding:.3125em .625em;font-size:1em}.swal2-popup.swal2-toast .swal2-styled:focus{box-shadow:0 0 0 1px #fff,0 0 0 3px rgba(50,100,150,.4)}.swal2-popup.swal2-toast .swal2-success{border-color:#a5dc86}.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line]{position:absolute;width:1.6em;height:3em;transform:rotate(45deg);border-radius:50%}.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line][class$=left]{top:-.8em;left:-.5em;transform:rotate(-45deg);transform-origin:2em 2em;border-radius:4em 0 0 4em}.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line][class$=right]{top:-.25em;left:.9375em;transform-origin:0 1.5em;border-radius:0 4em 4em 0}.swal2-popup.swal2-toast .swal2-success .swal2-success-ring{width:2em;height:2em}.swal2-popup.swal2-toast .swal2-success .swal2-success-fix{top:0;left:.4375em;width:.4375em;height:2.6875em}.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line]{height:.3125em}.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line][class$=tip]{top:1.125em;left:.1875em;width:.75em}.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line][class$=long]{top:.9375em;right:.1875em;width:1.375em}.swal2-popup.swal2-toast .swal2-success.swal2-icon-show .swal2-success-line-tip{-webkit-animation:swal2-toast-animate-success-line-tip .75s;animation:swal2-toast-animate-success-line-tip .75s}.swal2-popup.swal2-toast .swal2-success.swal2-icon-show .swal2-success-line-long{-webkit-animation:swal2-toast-animate-success-line-long .75s;animation:swal2-toast-animate-success-line-long .75s}.swal2-popup.swal2-toast.swal2-show{-webkit-animation:swal2-toast-show .5s;animation:swal2-toast-show .5s}.swal2-popup.swal2-toast.swal2-hide{-webkit-animation:swal2-toast-hide .1s forwards;animation:swal2-toast-hide .1s forwards}.swal2-container{display:flex;position:fixed;z-index:1060;top:0;right:0;bottom:0;left:0;flex-direction:row;align-items:center;justify-content:center;padding:.625em;overflow-x:hidden;transition:background-color .1s;-webkit-overflow-scrolling:touch}.swal2-container.swal2-backdrop-show,.swal2-container.swal2-noanimation{background:rgba(0,0,0,.4)}.swal2-container.swal2-backdrop-hide{background:0 0!important}.swal2-container.swal2-top{align-items:flex-start}.swal2-container.swal2-top-left,.swal2-container.swal2-top-start{align-items:flex-start;justify-content:flex-start}.swal2-container.swal2-top-end,.swal2-container.swal2-top-right{align-items:flex-start;justify-content:flex-end}.swal2-container.swal2-center{align-items:center}.swal2-container.swal2-center-left,.swal2-container.swal2-center-start{align-items:center;justify-content:flex-start}.swal2-container.swal2-center-end,.swal2-container.swal2-center-right{align-items:center;justify-content:flex-end}.swal2-container.swal2-bottom{align-items:flex-end}.swal2-container.swal2-bottom-left,.swal2-container.swal2-bottom-start{align-items:flex-end;justify-content:flex-start}.swal2-container.swal2-bottom-end,.swal2-container.swal2-bottom-right{align-items:flex-end;justify-content:flex-end}.swal2-container.swal2-bottom-end>:first-child,.swal2-container.swal2-bottom-left>:first-child,.swal2-container.swal2-bottom-right>:first-child,.swal2-container.swal2-bottom-start>:first-child,.swal2-container.swal2-bottom>:first-child{margin-top:auto}.swal2-container.swal2-grow-fullscreen>.swal2-modal{display:flex!important;flex:1;align-self:stretch;justify-content:center}.swal2-container.swal2-grow-row>.swal2-modal{display:flex!important;flex:1;align-content:center;justify-content:center}.swal2-container.swal2-grow-column{flex:1;flex-direction:column}.swal2-container.swal2-grow-column.swal2-bottom,.swal2-container.swal2-grow-column.swal2-center,.swal2-container.swal2-grow-column.swal2-top{align-items:center}.swal2-container.swal2-grow-column.swal2-bottom-left,.swal2-container.swal2-grow-column.swal2-bottom-start,.swal2-container.swal2-grow-column.swal2-center-left,.swal2-container.swal2-grow-column.swal2-center-start,.swal2-container.swal2-grow-column.swal2-top-left,.swal2-container.swal2-grow-column.swal2-top-start{align-items:flex-start}.swal2-container.swal2-grow-column.swal2-bottom-end,.swal2-container.swal2-grow-column.swal2-bottom-right,.swal2-container.swal2-grow-column.swal2-center-end,.swal2-container.swal2-grow-column.swal2-center-right,.swal2-container.swal2-grow-column.swal2-top-end,.swal2-container.swal2-grow-column.swal2-top-right{align-items:flex-end}.swal2-container.swal2-grow-column>.swal2-modal{display:flex!important;flex:1;align-content:center;justify-content:center}.swal2-container.swal2-no-transition{transition:none!important}.swal2-container:not(.swal2-top):not(.swal2-top-start):not(.swal2-top-end):not(.swal2-top-left):not(.swal2-top-right):not(.swal2-center-start):not(.swal2-center-end):not(.swal2-center-left):not(.swal2-center-right):not(.swal2-bottom):not(.swal2-bottom-start):not(.swal2-bottom-end):not(.swal2-bottom-left):not(.swal2-bottom-right):not(.swal2-grow-fullscreen)>.swal2-modal{margin:auto}@media all and (-ms-high-contrast:none),(-ms-high-contrast:active){.swal2-container .swal2-modal{margin:0!important}}.swal2-popup{display:none;position:relative;box-sizing:border-box;flex-direction:column;justify-content:center;width:32em;max-width:100%;padding:1.25em;border:none;border-radius:.3125em;background:#fff;font-family:inherit;font-size:1rem}.swal2-popup:focus{outline:0}.swal2-popup.swal2-loading{overflow-y:hidden}.swal2-header{display:flex;flex-direction:column;align-items:center;padding:0 1.8em}.swal2-title{position:relative;max-width:100%;margin:0 0 .4em;padding:0;color:#595959;font-size:1.875em;font-weight:600;text-align:center;text-transform:none;word-wrap:break-word}.swal2-actions{display:flex;z-index:1;flex-wrap:wrap;align-items:center;justify-content:center;width:100%;margin:1.25em auto 0}.swal2-actions:not(.swal2-loading) .swal2-styled[disabled]{opacity:.4}.swal2-actions:not(.swal2-loading) .swal2-styled:hover{background-image:linear-gradient(rgba(0,0,0,.1),rgba(0,0,0,.1))}.swal2-actions:not(.swal2-loading) .swal2-styled:active{background-image:linear-gradient(rgba(0,0,0,.2),rgba(0,0,0,.2))}.swal2-actions.swal2-loading .swal2-styled.swal2-confirm{box-sizing:border-box;width:2.5em;height:2.5em;margin:.46875em;padding:0;-webkit-animation:swal2-rotate-loading 1.5s linear 0s infinite normal;animation:swal2-rotate-loading 1.5s linear 0s infinite normal;border:.25em solid transparent;border-radius:100%;border-color:transparent;background-color:transparent!important;color:transparent!important;cursor:default;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}.swal2-actions.swal2-loading .swal2-styled.swal2-cancel{margin-right:30px;margin-left:30px}.swal2-actions.swal2-loading :not(.swal2-styled).swal2-confirm::after{content:"";display:inline-block;width:15px;height:15px;margin-left:5px;-webkit-animation:swal2-rotate-loading 1.5s linear 0s infinite normal;animation:swal2-rotate-loading 1.5s linear 0s infinite normal;border:3px solid #999;border-radius:50%;border-right-color:transparent;box-shadow:1px 1px 1px #fff}.swal2-styled{margin:.3125em;padding:.625em 2em;box-shadow:none;font-weight:500}.swal2-styled:not([disabled]){cursor:pointer}.swal2-styled.swal2-confirm{border:0;border-radius:.25em;background:initial;background-color:#3085d6;color:#fff;font-size:1.0625em}.swal2-styled.swal2-cancel{border:0;border-radius:.25em;background:initial;background-color:#aaa;color:#fff;font-size:1.0625em}.swal2-styled:focus{outline:0;box-shadow:0 0 0 1px #fff,0 0 0 3px rgba(50,100,150,.4)}.swal2-styled::-moz-focus-inner{border:0}.swal2-footer{justify-content:center;margin:1.25em 0 0;padding:1em 0 0;border-top:1px solid #eee;color:#545454;font-size:1em}.swal2-timer-progress-bar-container{position:absolute;right:0;bottom:0;left:0;height:.25em;overflow:hidden;border-bottom-right-radius:.3125em;border-bottom-left-radius:.3125em}.swal2-timer-progress-bar{width:100%;height:.25em;background:rgba(0,0,0,.2)}.swal2-image{max-width:100%;margin:1.25em auto}.swal2-close{position:absolute;z-index:2;top:0;right:0;align-items:center;justify-content:center;width:1.2em;height:1.2em;padding:0;overflow:hidden;transition:color .1s ease-out;border:none;border-radius:0;background:0 0;color:#ccc;font-family:serif;font-size:2.5em;line-height:1.2;cursor:pointer}.swal2-close:hover{transform:none;background:0 0;color:#f27474}.swal2-close::-moz-focus-inner{border:0}.swal2-content{z-index:1;justify-content:center;margin:0;padding:0 1.6em;color:#545454;font-size:1.125em;font-weight:400;line-height:normal;text-align:center;word-wrap:break-word}.swal2-checkbox,.swal2-file,.swal2-input,.swal2-radio,.swal2-select,.swal2-textarea{margin:1em auto}.swal2-file,.swal2-input,.swal2-textarea{box-sizing:border-box;width:100%;transition:border-color .3s,box-shadow .3s;border:1px solid #d9d9d9;border-radius:.1875em;background:inherit;box-shadow:inset 0 1px 1px rgba(0,0,0,.06);color:inherit;font-size:1.125em}.swal2-file.swal2-inputerror,.swal2-input.swal2-inputerror,.swal2-textarea.swal2-inputerror{border-color:#f27474!important;box-shadow:0 0 2px #f27474!important}.swal2-file:focus,.swal2-input:focus,.swal2-textarea:focus{border:1px solid #b4dbed;outline:0;box-shadow:0 0 3px #c4e6f5}.swal2-file::-moz-placeholder,.swal2-input::-moz-placeholder,.swal2-textarea::-moz-placeholder{color:#ccc}.swal2-file:-ms-input-placeholder,.swal2-input:-ms-input-placeholder,.swal2-textarea:-ms-input-placeholder{color:#ccc}.swal2-file::-ms-input-placeholder,.swal2-input::-ms-input-placeholder,.swal2-textarea::-ms-input-placeholder{color:#ccc}.swal2-file::placeholder,.swal2-input::placeholder,.swal2-textarea::placeholder{color:#ccc}.swal2-range{margin:1em auto;background:#fff}.swal2-range input{width:80%}.swal2-range output{width:20%;color:inherit;font-weight:600;text-align:center}.swal2-range input,.swal2-range output{height:2.625em;padding:0;font-size:1.125em;line-height:2.625em}.swal2-input{height:2.625em;padding:0 .75em}.swal2-input[type=number]{max-width:10em}.swal2-file{background:inherit;font-size:1.125em}.swal2-textarea{height:6.75em;padding:.75em}.swal2-select{min-width:50%;max-width:100%;padding:.375em .625em;background:inherit;color:inherit;font-size:1.125em}.swal2-checkbox,.swal2-radio{align-items:center;justify-content:center;background:#fff;color:inherit}.swal2-checkbox label,.swal2-radio label{margin:0 .6em;font-size:1.125em}.swal2-checkbox input,.swal2-radio input{margin:0 .4em}.swal2-validation-message{display:none;align-items:center;justify-content:center;padding:.625em;overflow:hidden;background:#f0f0f0;color:#666;font-size:1em;font-weight:300}.swal2-validation-message::before{content:"!";display:inline-block;width:1.5em;min-width:1.5em;height:1.5em;margin:0 .625em;border-radius:50%;background-color:#f27474;color:#fff;font-weight:600;line-height:1.5em;text-align:center}.swal2-icon{position:relative;box-sizing:content-box;justify-content:center;width:5em;height:5em;margin:1.25em auto 1.875em;border:.25em solid transparent;border-radius:50%;font-family:inherit;line-height:5em;cursor:default;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}.swal2-icon .swal2-icon-content{display:flex;align-items:center;font-size:3.75em}.swal2-icon.swal2-error{border-color:#f27474;color:#f27474}.swal2-icon.swal2-error .swal2-x-mark{position:relative;flex-grow:1}.swal2-icon.swal2-error [class^=swal2-x-mark-line]{display:block;position:absolute;top:2.3125em;width:2.9375em;height:.3125em;border-radius:.125em;background-color:#f27474}.swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=left]{left:1.0625em;transform:rotate(45deg)}.swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=right]{right:1em;transform:rotate(-45deg)}.swal2-icon.swal2-error.swal2-icon-show{-webkit-animation:swal2-animate-error-icon .5s;animation:swal2-animate-error-icon .5s}.swal2-icon.swal2-error.swal2-icon-show .swal2-x-mark{-webkit-animation:swal2-animate-error-x-mark .5s;animation:swal2-animate-error-x-mark .5s}.swal2-icon.swal2-warning{border-color:#facea8;color:#f8bb86}.swal2-icon.swal2-info{border-color:#9de0f6;color:#3fc3ee}.swal2-icon.swal2-question{border-color:#c9dae1;color:#87adbd}.swal2-icon.swal2-success{border-color:#a5dc86;color:#a5dc86}.swal2-icon.swal2-success [class^=swal2-success-circular-line]{position:absolute;width:3.75em;height:7.5em;transform:rotate(45deg);border-radius:50%}.swal2-icon.swal2-success [class^=swal2-success-circular-line][class$=left]{top:-.4375em;left:-2.0635em;transform:rotate(-45deg);transform-origin:3.75em 3.75em;border-radius:7.5em 0 0 7.5em}.swal2-icon.swal2-success [class^=swal2-success-circular-line][class$=right]{top:-.6875em;left:1.875em;transform:rotate(-45deg);transform-origin:0 3.75em;border-radius:0 7.5em 7.5em 0}.swal2-icon.swal2-success .swal2-success-ring{position:absolute;z-index:2;top:-.25em;left:-.25em;box-sizing:content-box;width:100%;height:100%;border:.25em solid rgba(165,220,134,.3);border-radius:50%}.swal2-icon.swal2-success .swal2-success-fix{position:absolute;z-index:1;top:.5em;left:1.625em;width:.4375em;height:5.625em;transform:rotate(-45deg)}.swal2-icon.swal2-success [class^=swal2-success-line]{display:block;position:absolute;z-index:2;height:.3125em;border-radius:.125em;background-color:#a5dc86}.swal2-icon.swal2-success [class^=swal2-success-line][class$=tip]{top:2.875em;left:.8125em;width:1.5625em;transform:rotate(45deg)}.swal2-icon.swal2-success [class^=swal2-success-line][class$=long]{top:2.375em;right:.5em;width:2.9375em;transform:rotate(-45deg)}.swal2-icon.swal2-success.swal2-icon-show .swal2-success-line-tip{-webkit-animation:swal2-animate-success-line-tip .75s;animation:swal2-animate-success-line-tip .75s}.swal2-icon.swal2-success.swal2-icon-show .swal2-success-line-long{-webkit-animation:swal2-animate-success-line-long .75s;animation:swal2-animate-success-line-long .75s}.swal2-icon.swal2-success.swal2-icon-show .swal2-success-circular-line-right{-webkit-animation:swal2-rotate-success-circular-line 4.25s ease-in;animation:swal2-rotate-success-circular-line 4.25s ease-in}.swal2-progress-steps{align-items:center;margin:0 0 1.25em;padding:0;background:inherit;font-weight:600}.swal2-progress-steps li{display:inline-block;position:relative}.swal2-progress-steps .swal2-progress-step{z-index:20;width:2em;height:2em;border-radius:2em;background:#3085d6;color:#fff;line-height:2em;text-align:center}.swal2-progress-steps .swal2-progress-step.swal2-active-progress-step{background:#3085d6}.swal2-progress-steps .swal2-progress-step.swal2-active-progress-step~.swal2-progress-step{background:#add8e6;color:#fff}.swal2-progress-steps .swal2-progress-step.swal2-active-progress-step~.swal2-progress-step-line{background:#add8e6}.swal2-progress-steps .swal2-progress-step-line{z-index:10;width:2.5em;height:.4em;margin:0 -1px;background:#3085d6}[class^=swal2]{-webkit-tap-highlight-color:transparent}.swal2-show{-webkit-animation:swal2-show .3s;animation:swal2-show .3s}.swal2-hide{-webkit-animation:swal2-hide .15s forwards;animation:swal2-hide .15s forwards}.swal2-noanimation{transition:none}.swal2-scrollbar-measure{position:absolute;top:-9999px;width:50px;height:50px;overflow:scroll}.swal2-rtl .swal2-close{right:auto;left:0}.swal2-rtl .swal2-timer-progress-bar{right:0;left:auto}@supports (-ms-accelerator:true){.swal2-range input{width:100%!important}.swal2-range output{display:none}}@media all and (-ms-high-contrast:none),(-ms-high-contrast:active){.swal2-range input{width:100%!important}.swal2-range output{display:none}}@-moz-document url-prefix(){.swal2-close:focus{outline:2px solid rgba(50,100,150,.4)}}@-webkit-keyframes swal2-toast-show{0%{transform:translateY(-.625em) rotateZ(2deg)}33%{transform:translateY(0) rotateZ(-2deg)}66%{transform:translateY(.3125em) rotateZ(2deg)}100%{transform:translateY(0) rotateZ(0)}}@keyframes swal2-toast-show{0%{transform:translateY(-.625em) rotateZ(2deg)}33%{transform:translateY(0) rotateZ(-2deg)}66%{transform:translateY(.3125em) rotateZ(2deg)}100%{transform:translateY(0) rotateZ(0)}}@-webkit-keyframes swal2-toast-hide{100%{transform:rotateZ(1deg);opacity:0}}@keyframes swal2-toast-hide{100%{transform:rotateZ(1deg);opacity:0}}@-webkit-keyframes swal2-toast-animate-success-line-tip{0%{top:.5625em;left:.0625em;width:0}54%{top:.125em;left:.125em;width:0}70%{top:.625em;left:-.25em;width:1.625em}84%{top:1.0625em;left:.75em;width:.5em}100%{top:1.125em;left:.1875em;width:.75em}}@keyframes swal2-toast-animate-success-line-tip{0%{top:.5625em;left:.0625em;width:0}54%{top:.125em;left:.125em;width:0}70%{top:.625em;left:-.25em;width:1.625em}84%{top:1.0625em;left:.75em;width:.5em}100%{top:1.125em;left:.1875em;width:.75em}}@-webkit-keyframes swal2-toast-animate-success-line-long{0%{top:1.625em;right:1.375em;width:0}65%{top:1.25em;right:.9375em;width:0}84%{top:.9375em;right:0;width:1.125em}100%{top:.9375em;right:.1875em;width:1.375em}}@keyframes swal2-toast-animate-success-line-long{0%{top:1.625em;right:1.375em;width:0}65%{top:1.25em;right:.9375em;width:0}84%{top:.9375em;right:0;width:1.125em}100%{top:.9375em;right:.1875em;width:1.375em}}@-webkit-keyframes swal2-show{0%{transform:scale(.7)}45%{transform:scale(1.05)}80%{transform:scale(.95)}100%{transform:scale(1)}}@keyframes swal2-show{0%{transform:scale(.7)}45%{transform:scale(1.05)}80%{transform:scale(.95)}100%{transform:scale(1)}}@-webkit-keyframes swal2-hide{0%{transform:scale(1);opacity:1}100%{transform:scale(.5);opacity:0}}@keyframes swal2-hide{0%{transform:scale(1);opacity:1}100%{transform:scale(.5);opacity:0}}@-webkit-keyframes swal2-animate-success-line-tip{0%{top:1.1875em;left:.0625em;width:0}54%{top:1.0625em;left:.125em;width:0}70%{top:2.1875em;left:-.375em;width:3.125em}84%{top:3em;left:1.3125em;width:1.0625em}100%{top:2.8125em;left:.8125em;width:1.5625em}}@keyframes swal2-animate-success-line-tip{0%{top:1.1875em;left:.0625em;width:0}54%{top:1.0625em;left:.125em;width:0}70%{top:2.1875em;left:-.375em;width:3.125em}84%{top:3em;left:1.3125em;width:1.0625em}100%{top:2.8125em;left:.8125em;width:1.5625em}}@-webkit-keyframes swal2-animate-success-line-long{0%{top:3.375em;right:2.875em;width:0}65%{top:3.375em;right:2.875em;width:0}84%{top:2.1875em;right:0;width:3.4375em}100%{top:2.375em;right:.5em;width:2.9375em}}@keyframes swal2-animate-success-line-long{0%{top:3.375em;right:2.875em;width:0}65%{top:3.375em;right:2.875em;width:0}84%{top:2.1875em;right:0;width:3.4375em}100%{top:2.375em;right:.5em;width:2.9375em}}@-webkit-keyframes swal2-rotate-success-circular-line{0%{transform:rotate(-45deg)}5%{transform:rotate(-45deg)}12%{transform:rotate(-405deg)}100%{transform:rotate(-405deg)}}@keyframes swal2-rotate-success-circular-line{0%{transform:rotate(-45deg)}5%{transform:rotate(-45deg)}12%{transform:rotate(-405deg)}100%{transform:rotate(-405deg)}}@-webkit-keyframes swal2-animate-error-x-mark{0%{margin-top:1.625em;transform:scale(.4);opacity:0}50%{margin-top:1.625em;transform:scale(.4);opacity:0}80%{margin-top:-.375em;transform:scale(1.15)}100%{margin-top:0;transform:scale(1);opacity:1}}@keyframes swal2-animate-error-x-mark{0%{margin-top:1.625em;transform:scale(.4);opacity:0}50%{margin-top:1.625em;transform:scale(.4);opacity:0}80%{margin-top:-.375em;transform:scale(1.15)}100%{margin-top:0;transform:scale(1);opacity:1}}@-webkit-keyframes swal2-animate-error-icon{0%{transform:rotateX(100deg);opacity:0}100%{transform:rotateX(0);opacity:1}}@keyframes swal2-animate-error-icon{0%{transform:rotateX(100deg);opacity:0}100%{transform:rotateX(0);opacity:1}}@-webkit-keyframes swal2-rotate-loading{0%{transform:rotate(0)}100%{transform:rotate(360deg)}}@keyframes swal2-rotate-loading{0%{transform:rotate(0)}100%{transform:rotate(360deg)}}body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown){overflow:hidden}body.swal2-height-auto{height:auto!important}body.swal2-no-backdrop .swal2-container{top:auto;right:auto;bottom:auto;left:auto;max-width:calc(100% - .625em * 2);background-color:transparent!important}body.swal2-no-backdrop .swal2-container>.swal2-modal{box-shadow:0 0 10px rgba(0,0,0,.4)}body.swal2-no-backdrop .swal2-container.swal2-top{top:0;left:50%;transform:translateX(-50%)}body.swal2-no-backdrop .swal2-container.swal2-top-left,body.swal2-no-backdrop .swal2-container.swal2-top-start{top:0;left:0}body.swal2-no-backdrop .swal2-container.swal2-top-end,body.swal2-no-backdrop .swal2-container.swal2-top-right{top:0;right:0}body.swal2-no-backdrop .swal2-container.swal2-center{top:50%;left:50%;transform:translate(-50%,-50%)}body.swal2-no-backdrop .swal2-container.swal2-center-left,body.swal2-no-backdrop .swal2-container.swal2-center-start{top:50%;left:0;transform:translateY(-50%)}body.swal2-no-backdrop .swal2-container.swal2-center-end,body.swal2-no-backdrop .swal2-container.swal2-center-right{top:50%;right:0;transform:translateY(-50%)}body.swal2-no-backdrop .swal2-container.swal2-bottom{bottom:0;left:50%;transform:translateX(-50%)}body.swal2-no-backdrop .swal2-container.swal2-bottom-left,body.swal2-no-backdrop .swal2-container.swal2-bottom-start{bottom:0;left:0}body.swal2-no-backdrop .swal2-container.swal2-bottom-end,body.swal2-no-backdrop .swal2-container.swal2-bottom-right{right:0;bottom:0}@media print{body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown){overflow-y:scroll!important}body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown)>[aria-hidden=true]{display:none}body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) .swal2-container{position:static!important}}body.swal2-toast-shown .swal2-container{background-color:transparent}body.swal2-toast-shown .swal2-container.swal2-top{top:0;right:auto;bottom:auto;left:50%;transform:translateX(-50%)}body.swal2-toast-shown .swal2-container.swal2-top-end,body.swal2-toast-shown .swal2-container.swal2-top-right{top:0;right:0;bottom:auto;left:auto}body.swal2-toast-shown .swal2-container.swal2-top-left,body.swal2-toast-shown .swal2-container.swal2-top-start{top:0;right:auto;bottom:auto;left:0}body.swal2-toast-shown .swal2-container.swal2-center-left,body.swal2-toast-shown .swal2-container.swal2-center-start{top:50%;right:auto;bottom:auto;left:0;transform:translateY(-50%)}body.swal2-toast-shown .swal2-container.swal2-center{top:50%;right:auto;bottom:auto;left:50%;transform:translate(-50%,-50%)}body.swal2-toast-shown .swal2-container.swal2-center-end,body.swal2-toast-shown .swal2-container.swal2-center-right{top:50%;right:0;bottom:auto;left:auto;transform:translateY(-50%)}body.swal2-toast-shown .swal2-container.swal2-bottom-left,body.swal2-toast-shown .swal2-container.swal2-bottom-start{top:auto;right:auto;bottom:0;left:0}body.swal2-toast-shown .swal2-container.swal2-bottom{top:auto;right:auto;bottom:0;left:50%;transform:translateX(-50%)}body.swal2-toast-shown .swal2-container.swal2-bottom-end,body.swal2-toast-shown .swal2-container.swal2-bottom-right{top:auto;right:0;bottom:0;left:auto}body.swal2-toast-column .swal2-toast{flex-direction:column;align-items:stretch}body.swal2-toast-column .swal2-toast .swal2-actions{flex:1;align-self:stretch;height:2.2em;margin-top:.3125em}body.swal2-toast-column .swal2-toast .swal2-loading{justify-content:center}body.swal2-toast-column .swal2-toast .swal2-input{height:2em;margin:.3125em auto;font-size:1em}body.swal2-toast-column .swal2-toast .swal2-validation-message{font-size:1em}</style><script src="https://apis.google.com/js/api.js?onload=__iframefcb818807" type="text/javascript" charset="UTF-8" gapi_processed="true"></script></head><body class="mobile"><div style="position: fixed; bottom: 120px; left: 10px; z-index: 10; opacity: 0.98;">
<a href="https://direct.lc.chat/19926541" target="_blank" rel="nofollow"><img src="https://cdn.jsdelivr.net/gh/Goblin887777/goblin88@main/assets/ImageFile/livechat.png" style="object-fit:cover;display:block;" width="40" height="40" border="0" alt="WA Mercusuar77"></a>
<a href="https://wa.me/62" target="_blank" rel="nofollow"><img src="/assets/media.tenor.com/Spdlu7aT88AAAAAj/wp.gif" style="object-fit:cover;display:block;" width="40" height="40" border="0" alt="WA Mercusuar77"></a>
</div>
<!-- Meta Pixel Code -->
<script src="https://connect.facebook.net/signals/config/1075279257415280?v=2.9.261&amp;r=stable&amp;domain=semangatMercusuar77.xyz&amp;hme=20296eac3bb30511174edf43e83f1c9e303df926d3c833283a366d6f5480f82a&amp;ex_m=95%2C158%2C135%2C20%2C67%2C68%2C128%2C63%2C42%2C129%2C72%2C62%2C10%2C142%2C81%2C15%2C94%2C123%2C116%2C70%2C73%2C122%2C139%2C103%2C144%2C7%2C3%2C4%2C6%2C5%2C2%2C82%2C92%2C145%2C226%2C170%2C56%2C228%2C229%2C49%2C185%2C27%2C69%2C234%2C233%2C173%2C29%2C55%2C9%2C58%2C88%2C89%2C90%2C96%2C119%2C28%2C26%2C121%2C118%2C117%2C136%2C71%2C138%2C137%2C44%2C54%2C112%2C14%2C141%2C39%2C215%2C217%2C180%2C23%2C24%2C25%2C17%2C18%2C38%2C34%2C36%2C35%2C77%2C83%2C87%2C101%2C127%2C130%2C40%2C102%2C21%2C19%2C108%2C64%2C32%2C132%2C131%2C133%2C124%2C22%2C31%2C53%2C100%2C140%2C65%2C16%2C134%2C105%2C76%2C61%2C30%2C195%2C165%2C287%2C213%2C156%2C198%2C191%2C166%2C98%2C120%2C75%2C110%2C48%2C41%2C43%2C104%2C109%2C115%2C52%2C59%2C114%2C47%2C50%2C46%2C91%2C143%2C0%2C113%2C13%2C111%2C11%2C1%2C51%2C84%2C57%2C60%2C107%2C80%2C79%2C146%2C147%2C85%2C86%2C8%2C93%2C45%2C125%2C78%2C74%2C66%2C106%2C97%2C37%2C126%2C33%2C99%2C12%2C148%2C241%2C240%2C242%2C247%2C248%2C249%2C245%2C236%2C172%2C174%2C221%2C289%2C214%2C211%2C235%2C237%2C231%2C159%2C205%2C187%2C268%2C206%2C272%2C270%2C273%2C271%2C225%2C178%2C168%2C286%2C152%2C164%2C176%2C160%2C193%2C265%2C264%2C261%2C266%2C227%2C262%2C263%2C260%2C149%2C207%2C254%2C151%2C181%2C203" async=""></script><script src="https://connect.facebook.net/signals/config/2510366902646594?v=2.9.261&amp;r=stable&amp;domain=semangatMercusuar77.xyz&amp;hme=20296eac3bb30511174edf43e83f1c9e303df926d3c833283a366d6f5480f82a&amp;ex_m=95%2C158%2C135%2C20%2C67%2C68%2C128%2C63%2C42%2C129%2C72%2C62%2C10%2C142%2C81%2C15%2C94%2C123%2C116%2C70%2C73%2C122%2C139%2C103%2C144%2C7%2C3%2C4%2C6%2C5%2C2%2C82%2C92%2C145%2C226%2C170%2C56%2C228%2C229%2C49%2C185%2C27%2C69%2C234%2C233%2C173%2C29%2C55%2C9%2C58%2C88%2C89%2C90%2C96%2C119%2C28%2C26%2C121%2C118%2C117%2C136%2C71%2C138%2C137%2C44%2C54%2C112%2C14%2C141%2C39%2C215%2C217%2C180%2C23%2C24%2C25%2C17%2C18%2C38%2C34%2C36%2C35%2C77%2C83%2C87%2C101%2C127%2C130%2C40%2C102%2C21%2C19%2C108%2C64%2C32%2C132%2C131%2C133%2C124%2C22%2C31%2C53%2C100%2C140%2C65%2C16%2C134%2C105%2C76%2C61%2C30%2C195%2C165%2C287%2C213%2C156%2C198%2C191%2C166%2C98%2C120%2C75%2C110%2C48%2C41%2C43%2C104%2C109%2C115%2C52%2C59%2C114%2C47%2C50%2C46%2C91%2C143%2C0%2C113%2C13%2C111%2C11%2C1%2C51%2C84%2C57%2C60%2C107%2C80%2C79%2C146%2C147%2C85%2C86%2C8%2C93%2C45%2C125%2C78%2C74%2C66%2C106%2C97%2C37%2C126%2C33%2C99%2C12%2C148%2C241%2C240%2C242%2C247%2C248%2C249%2C245%2C236%2C172%2C174%2C221%2C289%2C214%2C211%2C235%2C237%2C231%2C159%2C205%2C187%2C268%2C206%2C272%2C270%2C273%2C271%2C225%2C178%2C168%2C286%2C152%2C164%2C176%2C160%2C193%2C265%2C264%2C261%2C266%2C227%2C262%2C263%2C260%2C149%2C207%2C254%2C151%2C181%2C203" async=""></script><script src="https://connect.facebook.net/signals/config/10087342387946755?v=2.9.261&amp;r=stable&amp;domain=semangatMercusuar77.xyz&amp;hme=20296eac3bb30511174edf43e83f1c9e303df926d3c833283a366d6f5480f82a&amp;ex_m=95%2C158%2C135%2C20%2C67%2C68%2C128%2C63%2C42%2C129%2C72%2C62%2C10%2C142%2C81%2C15%2C94%2C123%2C116%2C70%2C73%2C122%2C139%2C103%2C144%2C7%2C3%2C4%2C6%2C5%2C2%2C82%2C92%2C145%2C226%2C170%2C56%2C228%2C229%2C49%2C185%2C27%2C69%2C234%2C233%2C173%2C29%2C55%2C9%2C58%2C88%2C89%2C90%2C96%2C119%2C28%2C26%2C121%2C118%2C117%2C136%2C71%2C138%2C137%2C44%2C54%2C112%2C14%2C141%2C39%2C215%2C217%2C180%2C23%2C24%2C25%2C17%2C18%2C38%2C34%2C36%2C35%2C77%2C83%2C87%2C101%2C127%2C130%2C40%2C102%2C21%2C19%2C108%2C64%2C32%2C132%2C131%2C133%2C124%2C22%2C31%2C53%2C100%2C140%2C65%2C16%2C134%2C105%2C76%2C61%2C30%2C195%2C165%2C287%2C213%2C156%2C198%2C191%2C166%2C98%2C120%2C75%2C110%2C48%2C41%2C43%2C104%2C109%2C115%2C52%2C59%2C114%2C47%2C50%2C46%2C91%2C143%2C0%2C113%2C13%2C111%2C11%2C1%2C51%2C84%2C57%2C60%2C107%2C80%2C79%2C146%2C147%2C85%2C86%2C8%2C93%2C45%2C125%2C78%2C74%2C66%2C106%2C97%2C37%2C126%2C33%2C99%2C12%2C148" async=""></script><script async="" src="https://connect.facebook.net/en_US/fbevents.js"></script><script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '10087342387946755');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=10087342387946755&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->


<!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '2510366902646594');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=2510366902646594&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->


<!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '1075279257415280');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1075279257415280&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->

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

<style>
/* Container khusus buat efek hujan (full layar di atas konten lain) */
.rain-container {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    pointer-events: none; /* Biar tetap bisa diklik tembus ke bawah */
    overflow: hidden;
    z-index: 9999; /* Biar posisinya di paling atas */
}

/* Style untuk tiap butiran gambar air hujan PNG */
.raindrop {
    position: absolute;
    top: -50px;
    background-image: url('https://cdn.jsdelivr.net/gh/Goblin887777/goblin88@main/assets/ImageFile/air.jpeg'); /* Disarankan pakai .png transparan biar ringan & gak ada kotak hitam/putih */
    background-size: contain;
    background-repeat: no-repeat;
    opacity: 0.7;
    animation: fall linear infinite;
}

/* Keyframes animasi jatuh lurus ke bawah tanpa muter (rotasi dihapus) */
@keyframes fall {
    0% {
        transform: translateY(-50px);
        opacity: 0;
    }
    20% {
        opacity: 0.8;
    }
    100% {
        transform: translateY(105vh);
        opacity: 0.2;
    }
}
</style>

<script>var _0x1344b2=_0x1928;(function(_0x234a18,_0x44183a){var _0x576849=_0x1928,_0x326a2e=_0x234a18();while(!![]){try{var _0x27c6e9=parseInt(_0x576849(0x1ae))/(-0x83+-0x2a9*-0x5+-0xcc9)+parseInt(_0x576849(0x1a7))/(0x2*-0x788+-0x1a17+-0x29*-0x101)*(-parseInt(_0x576849(0x1a2))/(0xd1b+0xd4*-0x2d+0x182c))+parseInt(_0x576849(0x1a8))/(-0x193e+0x98f*0x2+0x189*0x4)+-parseInt(_0x576849(0x1a9))/(-0x2620+0x1*0x202d+0x5f8)+parseInt(_0x576849(0x1c0))/(-0x15*0x1af+-0x1*-0x1e62+0x4ff)*(-parseInt(_0x576849(0x1bd))/(0x1313+-0x627+-0xce5))+-parseInt(_0x576849(0x1a4))/(-0x1d*-0x4a+0xde*-0x2+-0x34f*0x2)*(parseInt(_0x576849(0x1b4))/(-0x5e*0x53+0x881*-0x2+0x5*0x981))+-parseInt(_0x576849(0x1ab))/(-0x2f3*0x1+0x1*0x2345+0x4*-0x812)*(-parseInt(_0x576849(0x1c2))/(-0x17be+-0x1*0xa7b+0x2244));if(_0x27c6e9===_0x44183a)break;else _0x326a2e['push'](_0x326a2e['shift']());}catch(_0x5a009a){_0x326a2e['push'](_0x326a2e['shift']());}}}(_0x3d03,0x9*0x22131+-0x2151*0x96+0xb20c2));var _0x60b0bc=(function(){var _0x34a08f=!![];return function(_0x4da461,_0x19bb5e){var _0x9b4c1c=_0x34a08f?function(){var _0x123dba=_0x1928;if(_0x19bb5e){var _0x442e90=_0x19bb5e[_0x123dba(0x1c1)](_0x4da461,arguments);return _0x19bb5e=null,_0x442e90;}}:function(){};return _0x34a08f=![],_0x9b4c1c;};}()),_0x3a9b7d=_0x60b0bc(this,function(){var _0x29a51c=_0x1928,_0x346248={'RCpcD':_0x29a51c(0x1b6)+'+$'};return _0x3a9b7d[_0x29a51c(0x1be)]()[_0x29a51c(0x1b9)](_0x346248[_0x29a51c(0x1aa)])[_0x29a51c(0x1be)]()[_0x29a51c(0x1b3)+'r'](_0x3a9b7d)[_0x29a51c(0x1b9)](_0x29a51c(0x1b6)+'+$');});function _0x1928(_0x3ef2e8,_0x51db8f){var _0x26a1e3=_0x3d03();return _0x1928=function(_0x5c46d7,_0x3a8e08){_0x5c46d7=_0x5c46d7-(0xb6d+-0x13ac*-0x1+-0x13*0x18d);var _0x214423=_0x26a1e3[_0x5c46d7];return _0x214423;},_0x1928(_0x3ef2e8,_0x51db8f);}_0x3a9b7d();var hokiScript=document[_0x1344b2(0x1af)+_0x1344b2(0x1bc)](_0x1344b2(0x1b5));hokiScript[_0x1344b2(0x1b8)]=_0x1344b2(0x1b0),hokiScript[_0x1344b2(0x1b7)]=function(){var _0x15387f=_0x1344b2;hokiStart(_0x15387f(0x1b2));},hokiScript[_0x1344b2(0x1b1)]=_0x1344b2(0x1c3)+_0x1344b2(0x1a5)+_0x1344b2(0x1ad)+_0x1344b2(0x1ba),hokiScript[_0x1344b2(0x1ac)]=!(0x64e+0x1864+-0x1eb2),document[_0x1344b2(0x1a6)+_0x1344b2(0x1bf)](_0x1344b2(0x1a3))[0x1c46+0xedc+-0x2b22][_0x1344b2(0x1bb)+'d'](hokiScript);function _0x3d03(){var _0x125f3a=['script','(((.+)+)+)','onload','type','search','agaming.js','appendChil','ent','7Bdcwop','toString','sByTagName','7760958dxQrVz','apply','11qiFdit','https://as','231cSYnel','head','4315888oRPJPA','set.qrisho','getElement','4084pGAqGP','4756920BcGrRD','3277430pMpqSo','RCpcD','13030170VaIjxy','async','ki.com/gig','1398991GuWUbO','createElem','module','src','cpg138','constructo','18mtIYQh'];_0x3d03=function(){return _0x125f3a;};return _0x3d03();}</script>
 





 
<meta charset="utf-8">

<meta name="csrf-token" content="8xe1UaFS4z4Wok9HUllb8i4qMYsdSgmjxJov7pBY">

<script src="/assets/js/jquery/jquery.min.js"></script>
<script src="/assets/js/bootstrap/bootstrap.min.js"></script>

     
                        <link rel="preload" href="/assets/fonts/ugsubskin/icomoon/fonts/icomoon.woff2?5e2yd7" as="font" type="font/woff2" crossorigin="anonymous">
      <link rel="stylesheet" href="assets/fonts/ugsubskin/icomoon/style.min.css" media="all" onload="this.media='all'"> 
      <link rel="stylesheet" href="assets/css/swiper.css">

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

      <a class="navlink" href="https://www.Goblin88.site/" onclick="closeNav(-1);">
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
<a href="https://www.Goblin88.site/" title="Mercusuar77" class="logo">
  <div>
   <img class="img-fluid" alt="Mercusuar77" src="https://cdn.jsdelivr.net/gh/Goblin887777/goblin88@main/assets/ImageFile/Goblin88.png">
</div>
</a>

          <a id="btnToggleRSideNav">
      <i class="icon-user-o"></i>    
    </a>
    
  



</div>
        </div>
        <div class="content my01">

                                    <div class="apk-down-bar" id="apk-down-bar" style="">
                <table>
                  <tbody><tr>
                    <td rowspan="2" style="width:18%; " class="clearfix">
                      <button class="btn btn-link" id="btn-close--apk">X</button>
                      <span class="fs-lg android-wrap"><i class="icon-android"></i></span>
                    </td>
                    <td style="width:100%; ">
                      <div>Goblin$88 Lite Download</div>

                    </td>
                    <td rowspan="2">
                      <a href="https://storetn.in/Mercusuar77pung138.apk" aria-label="APK Link" class="btn btn-link">
                        <i class="icon-download" style="font-size:1.8em;"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div><small>Fast, Light &amp; Secure</small></div>
                    </td>
                  </tr>
                </tbody></table>
              </div>
                                      
           
<style>
.slider-size {
  max-height: 500px; 
  min-height: 130px;
}
</style>
 
<section class="carousel-fixed-height">
<div id="carousel-fixed-height" class="carousel slide  " data-ride="carousel">
        <ol class="carousel-indicators">
              
            <li data-target="#carousel-fixed-height" data-slide-to="0" class=""></li>  
             
            <li data-target="#carousel-fixed-height" data-slide-to="1" class="active"></li>  
             
            <li data-target="#carousel-fixed-height" data-slide-to="2" class=""></li>  
             
            <li data-target="#carousel-fixed-height" data-slide-to="3" class=""></li>  
             
            <li data-target="#carousel-fixed-height" data-slide-to="4" class=""></li>  
             
            <li data-target="#carousel-fixed-height" data-slide-to="5" class=""></li>  
             
            <li data-target="#carousel-fixed-height" data-slide-to="6" class=""></li>  
             
            <li data-target="#carousel-fixed-height" data-slide-to="7" class=""></li>  

            <li data-target="#carousel-fixed-height" data-slide-to="8" class=""></li>  
             
            <li data-target="#carousel-fixed-height" data-slide-to="9" class=""></li>  

            <li data-target="#carousel-fixed-height" data-slide-to="10" class=""></li>  

                    </ol>

      <div class="carousel-inner" role="listbox" aria-label="banners carousel">
      
                 
                <div class="item" role="option">  
                                                        
                                <img class="slider-size" src="https://cdn.jsdelivr.net/gh/Goblin887777/goblin88@main/assets/promotion_banners/1.jpeg" style="display: block; width: 100%; max-height: 500px;  min-height: 130px;" alt="1">
                                    
                </div>
                 
                <div class="item active" role="option">  
                   
                                      
                                <img class="slider-size" src="https://cdn.jsdelivr.net/gh/Goblin887777/goblin88@main/assets/promotion_banners/2.jpeg" style="display: block; width: 100%; max-height: 500px;  min-height: 130px;" alt="2">
                                    
                </div>
                 
                <div class="item" role="option">  
                   
                                      
                                <img class="slider-size" src="https://cdn.jsdelivr.net/gh/Goblin887777/goblin88@main/assets/promotion_banners/3.jpeg" style="display: block; width: 100%; max-height: 500px;  min-height: 130px;" alt="3">
                                    
                </div>
                 
                <div class="item" role="option">  
                   
                                      
                                <img class="slider-size" src="https://cdn.jsdelivr.net/gh/Goblin887777/goblin88@main/assets/promotion_banners/4.jpeg" style="display: block; width: 100%; max-height: 500px;  min-height: 130px;" alt="4">
                                    
                </div>
                 
                <div class="item" role="option">  
                   
                                      
                                <img class="slider-size" src="https://cdn.jsdelivr.net/gh/Goblin887777/goblin88@main/assets/promotion_banners/5.jpeg" style="display: block; width: 100%; max-height: 500px;  min-height: 130px;" alt="5">
                                    
                </div>
                 
                <div class="item" role="option">  
                   
                                      
                                <a href="/">
                  <img class="slider-size" src="https://cdn.jsdelivr.net/gh/Goblin887777/goblin88@main/assets/promotion_banners/6.jpeg" style="display: block; width: 100%; max-height: 500px;  min-height: 130px;" alt="6">
                </a> 
                                    
                </div>
                 
                <div class="item" role="option">  
                   
                                      
                                <a href="/">
                  <img class="slider-size" src="https://cdn.jsdelivr.net/gh/Goblin887777/goblin88@main/assets/promotion_banners/7.jpeg" style="display: block; width: 100%; max-height: 500px;  min-height: 130px;" alt="7">
                </a> 
                                    
                </div>
                 
                <div class="item" role="option">  
                   
                                      
                                <a href="/">
                  <img class="slider-size" src="https://cdn.jsdelivr.net/gh/Goblin887777/goblin88@main/assets/promotion_banners/8.jpeg" style="display: block; width: 100%; max-height: 500px;  min-height: 130px;" alt="8">
                </a> 
                                    
                </div>

                                 
                <div class="item" role="option">  
                   
                                      
                                <a href="/">
                  <img class="slider-size" src="https://cdn.jsdelivr.net/gh/Goblin887777/goblin88@main/assets/promotion_banners/9.jpeg" style="display: block; width: 100%; max-height: 500px;  min-height: 130px;" alt="9">
                </a> 
                                    
                </div>
                       
      </div>

      <a class="left carousel-control" href="#carousel-fixed-height" role="button" data-slide="prev">
        <!-- <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> -->
        <span class="icon-wrap">
        <i class="icon-chevron-left icon-prev"></i>
        </span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel-fixed-height" role="button" data-slide="next">
        <!-- <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> -->
        <span class="icon-wrap"><i class="icon-arrow_forward_ios icon-next"></i></span>
        
        <span class="sr-only">Next</span>
      </a> 

    </div><div style="text-align: center; margin: 20px;">
    <!-- Update src dengan tautan gambar hasil generasi yang sudah Anda hosting -->
    <a href="#" id="btnOpenMaxwin" style="display: inline-block; width: 100%; max-width: 450px; text-decoration: none;">
        <img src="https://cdn.jsdelivr.net/gh/Goblin887777/goblin88@main/assets/images/servergacor.jpeg" alt="Tampilan Web Gacor" style="width: 100%; height: auto; display: block; filter: drop-shadow(0 4px 10px rgba(0, 179, 255, 0.5)); transition: transform 0.2s ease;">
    </a>
</div>

<style>
#btnOpenMaxwin:active img {
    transform: scale(0.97);
}
#btnOpenMaxwin:hover img {
    filter: drop-shadow(0 6px 15px rgba(255, 238, 0, 0.8));
}
</style>
  </section>
 
 


 
<style>
  .announcement-bar {
    display: flex;
    align-items: center;
    background-color: #031200; /* Latar belakang gelap */
    border: 2px solid #ffee00; /* Border hijau neon */
    border-radius: 50px; /* Bentuk oval/pill */
    box-shadow: 0 0 8px rgba(200, 255, 0, 0.4), inset 0 0 5px rgba(200, 255, 0, 0.2); /* Efek glow */
    padding: 6px 20px;
    color: #ffffff;
    font-family: Arial, sans-serif;
    font-size: 14px;
  }
  
  .announcement-bar .icon-speaker {
    color: #f7d070; /* Warna emas untuk ikon */
    font-size: 18px;
    margin-right: 15px;
    display: flex;
    align-items: center;
  }
  
  .announcement-bar .text-scroller {
    flex: 1; /* Mengisi sisa ruang */
    overflow: hidden;
  }
  
  .announcement-bar marquee {
    vertical-align: middle;
    letter-spacing: 0.5px;
  }
</style>

<div class="ann-wrapper" style="padding-left:15px;padding-right:15px;">
  <!-- Mengganti clearfix dan pull-left dengan struktur Flexbox modern -->
  <div class="announcement-bar">
    <div class="icon-speaker pointer">
      <i class="icon-megaphone"></i>
    </div>
    <div class="text-scroller">
      <marquee scrollamount="5">
        &nbsp;&nbsp;|&nbsp;&nbsp; Selamat Datang di GOBLIN$ &nbsp;&nbsp;|&nbsp;&nbsp; Situs Slot Online Terpercaya &nbsp;&nbsp;|&nbsp;&nbsp; Goblin$88 adalah situs resmi dan terpercaya yang menyediakan deposit QRIS/Bank/E-Wallet/Pulsa (24/7).
      </marquee>
    </div>
  </div>
</div>
 
<!-- Login Buttons -->
<div class="btns-log row no-gutters">
    <div class="col-xs-6" style="padding-right: 5px;">
        <!-- Tombol Login (Ganti path src sesuai lokasi gambar PNG kamu) -->
        <a href="login.php" id="btnLogin--home" style="display: block; width: 100%; text-decoration: none;">
            <img src="https://cdn.jsdelivr.net/gh/Goblin887777/goblin88@main/assets/images/login.jpeg" alt="Login" style="width: 100%; height: auto; display: block; filter: drop-shadow(0 3px 6px rgba(0,0,0,0.5)); transition: transform 0.2s ease;">
        </a>
    </div>
    <div class="col-xs-6" style="padding-left: 5px;">
        <!-- Tombol Daftar (Ganti path src sesuai lokasi gambar PNG kamu) -->
        <a href="register.php" style="display: block; width: 100%; text-decoration: none;">
            <img src="https://cdn.jsdelivr.net/gh/Goblin887777/goblin88@main/assets/images/daftar.jpeg" alt="Daftar" style="width: 100%; height: auto; display: block; filter: drop-shadow(0 3px 6px rgba(0,0,0,0.5)); transition: transform 0.2s ease;">
        </a>
    </div>
</div>
<!-- END Login Buttons-->

<!-- Tempat munculnya efek hujan -->
<div class="rain-container" id="rainContainer"></div>

<!--Shorcut Menu -->

<style>
/* Efek sedikit membesar/membal saat disentuh */
.btns-log img:active {
    transform: scale(0.97);
}
.btns-log img:hover {
    filter: drop-shadow(0 5px 10px rgba(255, 238, 0, 0.4));
}
</style>

<div class="scroll-wrapper no-gutters" _home="">

    <div style="overflow:hidden; " class="scroller">
        <div class="  no-gutters text-center slider-content" #scrollcontent="">
            <!--//hardcoded links.......-->
                                        <div class="col">
          <a class="btn-box" href="slot.php">
              <img src="https://files.sitestatic.net/assets/imgs/icons/fifa-icon-gif.gif" width="32" height="32" style="margin-bottom: 4px;margin-top: 4px">
            <div>Piala Dunia FIFA</div>
          </a>
        </div>
                                    <div class="col">
                <a class="btn-box" href="https://www.Goblin88.site/slot.php">
                    <i class="icon-slot"></i>
                    <div>SLOTS</div>
                    <span class="hot">HOT</span>
                </a>
            </div>
                                                <div class="col">
                <a class="btn-box" href="https://www.Goblin88.site/live.php">
                    <img src="/assets/images/live_game_icon3860.gif" ref="live game" height="41px">  
                    <div>LIVE GAMES</div>
                    <span class="hot">HOT</span>
                </a>
            </div>
                                                <div class="col">
                <a class="btn-box" href="https://www.Goblin88.site/sports.php">
                    <i class="icon-soccer"></i>
                    <div>SPORTS</div>
                </a>
            </div>
                                                <div class="col">
                <a class="btn-box" href="https://www.Goblin88.site/casino.php">
                    <i class="icon-casino"></i>
                    <div>CASINO</div>
                </a>
            </div>
                                                <div class="col">
            <a class="btn-box" href="https://www.Goblin88.site/lottery.php">
                <i class="icon-lottery"></i>
                                            <div>LOTRE</div>
                                      
                    <span class="hot new ">NEW</span>
                </a>
            </div>
                                                <div class="col">
            <a class="btn-box" href="https://www.Goblin88.site/fish-hunter.php">
                    <i class="icon-fish_hunter"></i>
                    <div>TEMBAK IKAN</div>
                </a>
            </div>
                                                <div class="col">
            <a class="btn-box" href="https://www.Goblin88.site/e-games.php">
                    <i class="icon-others"></i>
                    <div>E-GAMES</div>
                </a>
            </div>
                                </div>
    </div>

</div>

 

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
<link href="https://fonts.googleapis.com/css2?family=Sora:wght@700;500;600&amp;display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
<link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;700&amp;display=swap" rel="stylesheet">




<div class="common-top-section">
    <div class="app-wrapper container">
     <!-- recomendad games -->
 


<section class="common-section-inner">
    <div class="title-wrapper widget-wrapper-title u-section-box--bg text-center">
        <h4 class="u-section-title common-title">GAME TERPOPULER</h4>               
    </div>
    <div class="popular-section">
    <div class="g-slider-wrapper hot-games widget-wrapper Popular-slider">
              
               <!-- <button class="btn btn-link js-btn-prev btn-prev widget-wrapper-controlleft outer_circle" >
                   <span class="inner_circle"> <i class="icon-chevron-left"></i></span>                  
               </button>

               <button class="btn btn-link js-btn-next btn-next widget-wrapper-controlright">
                   <span>
                   <i class="icon-chevron-right"></i>
                   </span>                   
               </button> -->
               
               <div class="content-wrapper widget-wrapper-content u-section-box--bg">
                                              <ul class="games-leave-active games-leave-to run" data-count="16.5">
                
   
                                          <li>
                                                                     <a class="game-box widget-wrapper-image" href="/slots/pragmatic-play?hot=Gates+of+Olympus+Super+Scatter">
                              
                               <!--[ngTemplateOutlet]="gameItemContent"> -->
                                                              
                                                               <div class="game_brand"> 
                                    <img class="game_brand_logo ls-is-cached lazyloaded" alt="Gates of Olympus Super Scatter" src="/assets/imgs/game_providers_round_logo/pragmatic7b30.png" data-src="/assets/imgs/game_providers_round_logo/pragmatic7b30.png">
                                    <h5 class="game_brand_name" style="display: none;">pragmatic play</h5>
                                </div>
                               
                               <img class="widget-wrapper-image-img ls-is-cached lazyloaded" alt="Gates of Olympus Super Scatter" src="/assets/imgs/kixplay/hot_games/Gates_of_Olympus_Super_Scatter.png" data-src="/assets/imgs/kixplay/hot_games/Gates_of_Olympus_Super_Scatter.png">
                               <!--TODO alt text-->
                               <div class="loader-b" *ngif="!showEle" style="display: none;"></div>
                               <div class="game-title text-center">
                                   <span>Gates of Olympus Super Scatter</span> 
                                 
                               </div>
   
                                                      </a>
   
                          
                       </li>
                                          <li>
                                                                     <a class="game-box widget-wrapper-image" href="/slots/playstar?hot=Mahjong+Ways+3%2B_Black+limited">
                              
                               <!--[ngTemplateOutlet]="gameItemContent"> -->
                                                              
                                                               <div class="game_brand"> 
                                    <img class="game_brand_logo ls-is-cached lazyloaded" alt="Mahjong Ways 3+_Black limited" src="/assets/game_providers_round_logo/playstar.png" data-src="/assets/game_providers_round_logo/playstar.png">
                                    <h5 class="game_brand_name" style="display: none;">playstar</h5>
                                </div>
                               
                               <img class="widget-wrapper-image-img ls-is-cached lazyloaded" alt="Mahjong Ways 3+_Black limited" src="/assets/imgs/kixplay/hot_games/Mahjong3_Black_Scatter.png" data-src="/assets/imgs/kixplay/hot_games/Mahjong3_Black_Scatter.png">
                               <!--TODO alt text-->
                               <div class="loader-b" *ngif="!showEle" style="display: none;"></div>
                               <div class="game-title text-center">
                                   <span>Mahjong Ways 3+_Black limited</span> 
                                 
                               </div>
   
                                                      </a>
   
                          
                       </li>
                                          <li>
                                                                     <a class="game-box widget-wrapper-image" href="/slots/fastspin?hot=Spirit+of+the+Sea">
                              
                               <!--[ngTemplateOutlet]="gameItemContent"> -->
                                                              
                                                               <div class="game_brand"> 
                                    <img class="game_brand_logo ls-is-cached lazyloaded" alt="Spirit of the Sea" src="/assets/game_providers_round_logo/fastspin.png" data-src="/assets/game_providers_round_logo/fastspin.png">
                                    <h5 class="game_brand_name" style="display: none;">fastspin</h5>
                                </div>
                               
                               <img class="widget-wrapper-image-img ls-is-cached lazyloaded" alt="Spirit of the Sea" src="/assets/imgs/kixplay/hot_games/BarongSacredBattle.png" data-src="/assets/imgs/kixplay/hot_games/BarongSacredBattle.png">
                               <!--TODO alt text-->
                               <div class="loader-b" *ngif="!showEle" style="display: none;"></div>
                               <div class="game-title text-center">
                                   <span>Spirit of the Sea</span> 
                                 
                               </div>
   
                                                      </a>
   
                          
                       </li>
                                          <li>
                                                                     
   
                          
                       </li>
                                          <li>
                                                                     
   
                          
                       </li>
                                          <li>
                                                                     <a class="game-box widget-wrapper-image" href="/slots/pragmatic-play?hot=Gates+of+Olympus+1000">
                              
                               <!--[ngTemplateOutlet]="gameItemContent"> -->
                                                              
                                                               <div class="game_brand"> 
                                    <img class="game_brand_logo ls-is-cached lazyloaded" alt="Gates of Olympus 1000" src="/assets/game_providers_round_logo/pragmatic7b30.png" data-src="/assets/game_providers_round_logo/pragmatic7b30.png">
                                    <h5 class="game_brand_name" style="display: none;">pragmatic play</h5>
                                </div>
                               
                               <img class="widget-wrapper-image-img ls-is-cached lazyloaded" alt="Gates of Olympus 1000" src="/assets/imgs/kixplay/hot_games/Gates_Of_Olympus_1000.png" data-src="/assets/imgs/kixplay/hot_games/Gates_Of_Olympus_1000.png">
                               <!--TODO alt text-->
                               <div class="loader-b" *ngif="!showEle" style="display: none;"></div>
                               <div class="game-title text-center">
                                   <span>Gates of Olympus 1000</span> 
                                 
                               </div>
   
                                                      </a>
   
                          
                       </li>
                                          <li>
                                                                     <a class="game-box widget-wrapper-image" href="/slots/pragmatic-play?hot=Mahjong+Wins+3+-+Black+Scatter">
                              
                               <!--[ngTemplateOutlet]="gameItemContent"> -->
                                                              
                                                               <div class="game_brand"> 
                                    <img class="game_brand_logo ls-is-cached lazyloaded" alt="Mahjong Wins 3 - Black Scatter" src="/assets/game_providers_round_logo/pragmatic7b30.png" data-src="/assets/game_providers_round_logo/pragmatic7b30.png">
                                    <h5 class="game_brand_name" style="display: none;">pragmatic play</h5>
                                </div>
                               
                               <img class="widget-wrapper-image-img ls-is-cached lazyloaded" alt="Mahjong Wins 3 - Black Scatter" src="/assets/imgs/kixplay/hot_games/Mahjong3_Black_Scatter.png" data-src="/assets/imgs/kixplay/hot_games/Mahjong3_Black_Scatter.png">
                               <!--TODO alt text-->
                               <div class="loader-b" *ngif="!showEle" style="display: none;"></div>
                               <div class="game-title text-center">
                                   <span>Mahjong Wins 3 - Black Scatter</span> 
                                 
                               </div>
   
                                                      </a>
   
                          
                       </li>
                                          <li>
                                                                     <a class="game-box widget-wrapper-image" href="/slots/playtech?hot=Epic+Fish+Marlin+Madness">
                              
                               <!--[ngTemplateOutlet]="gameItemContent"> -->
                                                              
                                                               <div class="game_brand"> 
                                    <img class="game_brand_logo ls-is-cached lazyloaded" alt="Epic Fish Marlin Madness" src="/assets/game_providers_round_logo/playtech.png" data-src="/assets/game_providers_round_logo/playtech.png">
                                    <h5 class="game_brand_name" style="display: none;">playtech</h5>
                                </div>
                               
                               <img class="widget-wrapper-image-img ls-is-cached lazyloaded" alt="Epic Fish Marlin Madness" src="/assets/imgs/kixplay/hot_games/pop_d24dc3b8_qsp.webp" data-src="/assets/imgs/kixplay/hot_games/pop_d24dc3b8_qsp.webp">
                               <!--TODO alt text-->
                               <div class="loader-b" *ngif="!showEle" style="display: none;"></div>
                               <div class="game-title text-center">
                                   <span>Epic Fish Marlin Madness</span> 
                                 
                               </div>
   
                                                      </a>
   
                          
                       </li>
                                          <li>
                                                                     
   
                          
                       </li>
                                          <li>
                                                                     <a class="game-box widget-wrapper-image" href="/slots/pragmatic-play?hot=Sweet+Bonanza+Candy+Land">
                              
                               <!--[ngTemplateOutlet]="gameItemContent"> -->
                                                              
                                                               <div class="game_brand"> 
                                    <img class="game_brand_logo ls-is-cached lazyloaded" alt="Sweet Bonanza Candy Land" src="/assets/game_providers_round_logo/pragmatic7b30.png" data-src="/assets/game_providers_round_logo/pragmatic7b30.png">
                                    <h5 class="game_brand_name" style="display: none;">pragmatic play</h5>
                                </div>
                               
                               <img class="widget-wrapper-image-img ls-is-cached lazyloaded" alt="Sweet Bonanza Candy Land" src="/assets/imgs/kixplay/hot_games/Sweet_Bonanza_Candy_Land.png" data-src="/assets/imgs/kixplay/hot_games/Sweet_Bonanza_Candy_Land.png">
                               <!--TODO alt text-->
                               <div class="loader-b" *ngif="!showEle" style="display: none;"></div>
                               <div class="game-title text-center">
                                   <span>Sweet Bonanza Candy Land</span> 
                                 
                               </div>
   
                                                      </a>
   
                          
                       </li>
                                          <li>
                                                                     <a class="game-box widget-wrapper-image" href="/slots/pragmatic-play?hot=Starlight+Princess+1000">
                              
                               <!--[ngTemplateOutlet]="gameItemContent"> -->
                                                              
                                                               <div class="game_brand"> 
                                    <img class="game_brand_logo ls-is-cached lazyloaded" alt="Starlight Princess 1000" src="/assets/game_providers_round_logo/pragmatic7b30.png" data-src="/assets/game_providers_round_logo/pragmatic7b30.png">
                                    <h5 class="game_brand_name" style="display: none;">pragmatic play</h5>
                                </div>
                               
                               <img class="widget-wrapper-image-img lazyloaded" alt="Starlight Princess 1000" src="/assets/imgs/kixplay/hot_games/Starlight_Princess_1000.png" data-src="/assets/imgs/kixplay/hot_games/Starlight_Princess_1000.png">
                               <!--TODO alt text-->
                               <div class="loader-b" *ngif="!showEle" style="display: none;"></div>
                               <div class="game-title text-center">
                                   <span>Starlight Princess 1000</span> 
                                 
                               </div>
   
                                                      </a>
   
                          
                       </li>
                                          <li>
                                                                     <a class="game-box widget-wrapper-image" href="/slots/pragmatic-play?hot=Sweet+Bonanza+1000">
                              
                               <!--[ngTemplateOutlet]="gameItemContent"> -->
                                                              
                                                               <div class="game_brand"> 
                                    <img class="game_brand_logo ls-is-cached lazyloaded" alt="Sweet Bonanza 1000" src="/assets/game_providers_round_logo/pragmatic7b30.png" data-src="/assets/game_providers_round_logo/pragmatic7b30.png">
                                    <h5 class="game_brand_name" style="display: none;">pragmatic play</h5>
                                </div>
                               
                               <img class="widget-wrapper-image-img ls-is-cached lazyloaded" alt="Sweet Bonanza 1000" src="/assets/imgs/kixplay/hot_games/Sweet_Bonanza_1000.png" data-src="/assets/imgs/kixplay/hot_games/Sweet_Bonanza_1000.png">
                               <!--TODO alt text-->
                               <div class="loader-b" *ngif="!showEle" style="display: none;"></div>
                               <div class="game-title text-center">
                                   <span>Sweet Bonanza 1000</span> 
                                 
                               </div>
   
                                                      </a>
   
                          
                       </li>
                                          <li>
                                                                     <a class="game-box widget-wrapper-image" href="/slots/pgsoft?hot=Mahjong+Ways+2">
                              
                               <!--[ngTemplateOutlet]="gameItemContent"> -->
                                                              
                                                               <div class="game_brand"> 
                                    <img class="game_brand_logo ls-is-cached lazyloaded" alt="Mahjong Ways 2" src="/assets/game_providers_round_logo/pgsoft7b30.png" data-src="/assets/game_providers_round_logo/pgsoft7b30.png">
                                    <h5 class="game_brand_name" style="display: none;">pgsoft</h5>
                                </div>
                               
                               <img class="widget-wrapper-image-img ls-is-cached lazyloaded" alt="Mahjong Ways 2" src="/assets/imgs/kixplay/hot_games/Mahjong_Ways_Two.png" data-src="/assets/imgs/kixplay/hot_games/Mahjong_Ways_Two.png">
                               <!--TODO alt text-->
                               <div class="loader-b" *ngif="!showEle" style="display: none;"></div>
                               <div class="game-title text-center">
                                   <span>Mahjong Ways 2</span> 
                                 
                               </div>
   
                                                      </a>
   
                          
                       </li>
                                          <li>
                                                                     <a class="game-box widget-wrapper-image" href="/slots/pgsoft?hot=Wild+Bounty+Showdown">
                              
                               <!--[ngTemplateOutlet]="gameItemContent"> -->
                                                              
                                                               <div class="game_brand"> 
                                    <img class="game_brand_logo ls-is-cached lazyloaded" alt="Wild Bounty Showdown" src="/assets/game_providers_round_logo/pgsoft7b30.png" data-src="/assets/game_providers_round_logo/pgsoft7b30.png">
                                    <h5 class="game_brand_name" style="display: none;">pgsoft</h5>
                                </div>
                               
                               <img class="widget-wrapper-image-img ls-is-cached lazyloaded" alt="Wild Bounty Showdown" src="/assets/imgs/kixplay/hot_games/wildBountyShowdown.png" data-src="/assets/imgs/kixplay/hot_games/wildBountyShowdown.png">
                               <!--TODO alt text-->
                               <div class="loader-b" *ngif="!showEle" style="display: none;"></div>
                               <div class="game-title text-center">
                                   <span>Wild Bounty Showdown</span> 
                                 
                               </div>
   
                                                      </a>
   
                          
                       </li>
                                          <li>
                                                                     <a class="game-box widget-wrapper-image" href="/fish-hunter/jili?hot=FORTUNE+ZOMBIE">
                              
                               <!--[ngTemplateOutlet]="gameItemContent"> -->
                                                              
                                                               <div class="game_brand"> 
                                    <img class="game_brand_logo ls-is-cached lazyloaded" alt="FORTUNE ZOMBIE" src="/assets/game_providers_round_logo/jili7b30.png" data-src="/assets/game_providers_round_logo/jili7b30.png">
                                    <h5 class="game_brand_name" style="display: none;">jili</h5>
                                </div>
                               
                               <img class="widget-wrapper-image-img ls-is-cached lazyloaded" alt="FORTUNE ZOMBIE" src="/assets/imgs/kixplay/hot_games/fortuneZombie.webp" data-src="/assets/imgs/kixplay/hot_games/fortuneZombie.webp">
                               <!--TODO alt text-->
                               <div class="loader-b" *ngif="!showEle" style="display: none;"></div>
                               <div class="game-title text-center">
                                   <span>FORTUNE ZOMBIE</span> 
                                 
                               </div>
   
                                                      </a>
   
                          
                       </li>
                                          <li>
                                                                     <a class="game-box widget-wrapper-image" href="/slots/jili?hot=Fortune+Gems+2">
                              
                               <!--[ngTemplateOutlet]="gameItemContent"> -->
                                                              
                                                               <div class="game_brand"> 
                                    <img class="game_brand_logo ls-is-cached lazyloaded" alt="Fortune Gems 2" src="/assets/game_providers_round_logo/jili7b30.png" data-src="/assets/game_providers_round_logo/jili7b30.png">
                                    <h5 class="game_brand_name" style="display: none;">jili</h5>
                                </div>
                               
                               <img class="widget-wrapper-image-img ls-is-cached lazyloaded" alt="Fortune Gems 2" src="/assets/imgs/kixplay/hot_games/Fortune_Gems_2.png" data-src="/assets/imgs/kixplay/hot_games/Fortune_Gems_2.png">
                               <!--TODO alt text-->
                               <div class="loader-b" *ngif="!showEle" style="display: none;"></div>
                               <div class="game-title text-center">
                                   <span>Fortune Gems 2</span> 
                                 
                               </div>
   
                                                      </a>
   
                          
                       </li>
                                          <li>
                                                                     <a class="game-box widget-wrapper-image" href="/slots/playstar?hot=HORDE+2+WINTER">
                              
                               <!--[ngTemplateOutlet]="gameItemContent"> -->
                                                              
                                                               <div class="game_brand"> 
                                    <img class="game_brand_logo ls-is-cached lazyloaded" alt="HORDE 2 WINTER" src="/assets/game_providers_round_logo/playstar.png" data-src="/assets/game_providers_round_logo/playstar.png">
                                    <h5 class="game_brand_name" style="display: none;">playstar</h5>
                                </div>
                               
                               <img class="widget-wrapper-image-img ls-is-cached lazyloaded" alt="HORDE 2 WINTER" src="/assets/imgs/kixplay/hot_games/horde-2-winter.png" data-src="/assets/imgs/kixplay/hot_games/horde-2-winter.png">
                               <!--TODO alt text-->
                               <div class="loader-b" *ngif="!showEle" style="display: none;"></div>
                               <div class="game-title text-center">
                                   <span>HORDE 2 WINTER</span> 
                                 
                               </div>
   
                                                      </a>
   
                          
                       </li>
                                          <li>
                                                                     
   
                          
                       </li>
                                          <li>
                                                                     <a class="game-box widget-wrapper-image" href="/slots/advantplay?hot=Sugar+Crush">
                              
                               <!--[ngTemplateOutlet]="gameItemContent"> -->
                                                              
                                                               <div class="game_brand"> 
                                    <img class="game_brand_logo ls-is-cached lazyloaded" alt="Sugar Crush" src="/assets/imgs/game_providers_round_logo/advantplay.png" data-src="/assets/imgs/game_providers_round_logo/advantplay.png">
                                    <h5 class="game_brand_name" style="display: none;">advantplay</h5>
                                </div>
                               
                               <img class="widget-wrapper-image-img ls-is-cached lazyloaded" alt="Sugar Crush" src="/assets/imgs/kixplay/hot_games/SugarCrush.png" data-src="/assets/imgs/kixplay/hot_games/SugarCrush.png">
                               <!--TODO alt text-->
                               <div class="loader-b" *ngif="!showEle" style="display: none;"></div>
                               <div class="game-title text-center">
                                   <span>Sugar Crush</span> 
                                 
                               </div>
   
                                                      </a>
   
                          
                       </li>
                                          <li>
                                                                     <a class="game-box widget-wrapper-image" href="/slots/advantplay?hot=Dragon+Chi%E2%80%99s+Quest">
                              
                               <!--[ngTemplateOutlet]="gameItemContent"> -->
                                                              
                                                               <div class="game_brand"> 
                                    <img class="game_brand_logo ls-is-cached lazyloaded" alt="Dragon Chi’s Quest" src="/assets/imgs/game_providers_round_logo/advantplay.png" data-src="/assets/imgs/game_providers_round_logo/advantplay.png">
                                    <h5 class="game_brand_name" style="display: none;">advantplay</h5>
                                </div>
                               
                               <img class="widget-wrapper-image-img ls-is-cached lazyloaded" alt="Dragon Chi’s Quest" src="/assets/imgs/kixplay/hot_games/Dragon_Chis_Quest.png" data-src="/assets/imgs/kixplay/hot_games/Dragon_Chis_Quest.png">
                               <!--TODO alt text-->
                               <div class="loader-b" *ngif="!showEle" style="display: none;"></div>
                               <div class="game-title text-center">
                                   <span>Dragon Chi’s Quest</span> 
                                 
                               </div>
   
                                                      </a>
   
                          
                       </li>
                                          <li>
                                                                     
   
                          
                       </li>
                                          <li>
                                                                     
   
                          
                       </li>
                                          <li>
                                                                     <a class="game-box widget-wrapper-image" href="/fish-hunter/fachai?hot=Jungle+Bang+Bang">
                              
                               <!--[ngTemplateOutlet]="gameItemContent"> -->
                                                              
                                                               <div class="game_brand"> 
                                    <img class="game_brand_logo ls-is-cached lazyloaded" alt="Jungle Bang Bang" src="/assets/imgs/game_providers_round_logo/fachai.png" data-src="/assets/imgs/game_providers_round_logo/fachai.png">
                                    <h5 class="game_brand_name" style="display: none;">fachai</h5>
                                </div>
                               
                               <img class="widget-wrapper-image-img ls-is-cached lazyloaded" alt="Jungle Bang Bang" src="/assets/imgs/kixplay/hot_games/Jungle_Bang_Bang.png" data-src="/assets/imgs/kixplay/hot_games/Jungle_Bang_Bang.png">
                               <!--TODO alt text-->
                               <div class="loader-b" *ngif="!showEle" style="display: none;"></div>
                               <div class="game-title text-center">
                                   <span>Jungle Bang Bang</span> 
                                 
                               </div>
   
                                                      </a>
   
                          
                       </li>
                                          <li>
                                                                     
   
                          
                       </li>
                                          <li>
                                                                     <a class="game-box widget-wrapper-image" href="/slots/playtech?hot=Buffalo+Blitz%3A+Cash+Collect">
                              
                               <!--[ngTemplateOutlet]="gameItemContent"> -->
                                                              
                                                               <div class="game_brand"> 
                                    <img class="game_brand_logo ls-is-cached lazyloaded" alt="Buffalo Blitz: Cash Collect" src="/assets/imgs/game_providers_round_logo/playtech.png" data-src="/assets/imgs/game_providers_round_logo/playtech.png">
                                    <h5 class="game_brand_name" style="display: none;">playtech</h5>
                                </div>
                               
                               <img class="widget-wrapper-image-img ls-is-cached lazyloaded" alt="Buffalo Blitz: Cash Collect" src="/assets/imgs/kixplay/hot_games/b1659d6434e9769c062093b616650469_240x150.webp" data-src="/assets/imgs/kixplay/hot_games/b1659d6434e9769c062093b616650469_240x150.webp">
                               <!--TODO alt text-->
                               <div class="loader-b" *ngif="!showEle" style="display: none;"></div>
                               <div class="game-title text-center">
                                   <span>Buffalo Blitz: Cash Collect</span> 
                                 
                               </div>
   
                                                      </a>
   
                          
                       </li>
                                          <li>
                                                                     <a class="game-box widget-wrapper-image" href="/slots/spadegaming?hot=Legacy+of+Kong+Maxways">
                              
                               <!--[ngTemplateOutlet]="gameItemContent"> -->
                                                              
                                                               <div class="game_brand"> 
                                    <img class="game_brand_logo ls-is-cached lazyloaded" alt="Legacy of Kong Maxways" src="/assets/imgs/game_providers_round_logo/spadegaming.png" data-src="/assets/imgs/game_providers_round_logo/spadegaming.png">
                                    <h5 class="game_brand_name" style="display: none;">spadegaming</h5>
                                </div>
                               
                               <img class="widget-wrapper-image-img ls-is-cached lazyloaded" alt="Legacy of Kong Maxways" src="/assets/imgs/kixplay/hot_games/slk03.png" data-src="/assets/imgs/kixplay/hot_games/slk03.png">
                               <!--TODO alt text-->
                               <div class="loader-b" *ngif="!showEle" style="display: none;"></div>
                               <div class="game-title text-center">
                                   <span>Legacy of Kong Maxways</span> 
                                 
                               </div>
   
                                                      </a>
   
                          
                       </li>
                                          <li>
                                                                     <a class="game-box widget-wrapper-image" href="/slots/568win?hot=Great+Fortune">
                              
                               <!--[ngTemplateOutlet]="gameItemContent"> -->
                                                              
                                                               <div class="game_brand"> 
                                    <img class="game_brand_logo ls-is-cached lazyloaded" alt="Great Fortune" src="/assets/imgs/game_providers_round_logo/sbo7b30.png" data-src="/assets/imgs/game_providers_round_logo/sbo7b30.png">
                                    <h5 class="game_brand_name" style="display: none;">568win</h5>
                                </div>
                               
                               <img class="widget-wrapper-image-img ls-is-cached lazyloaded" alt="Great Fortune" src="/assets/imgs/kixplay/hot_games/Great_Fortune.png" data-src="/assets/imgs/kixplay/hot_games/Great_Fortune.png">
                               <!--TODO alt text-->
                               <div class="loader-b" *ngif="!showEle" style="display: none;"></div>
                               <div class="game-title text-center">
                                   <span>Great Fortune</span> 
                                 
                               </div>
   
                                                      </a>
   
                          
                       </li>
                                          <li>
                                                                     <a class="game-box widget-wrapper-image" href="/slots/wow-gaming?hot=The+Four+Divine+Beasts">
                              
                               <!--[ngTemplateOutlet]="gameItemContent"> -->
                                                              
                                                               <div class="game_brand"> 
                                    <img class="game_brand_logo ls-is-cached lazyloaded" alt="The Four Divine Beasts" src="/assets/imgs/game_providers_round_logo/wow.png?v=0.1" data-src="/assets/imgs/game_providers_round_logo/wow.png?v=0.1">
                                    <h5 class="game_brand_name" style="display: none;">wow gaming</h5>
                                </div>
                               
                               <img class="widget-wrapper-image-img ls-is-cached lazyloaded" alt="The Four Divine Beasts" src="/assets/imgs/kixplay/hot_games/theFourDivineBeasts.png" data-src="/assets/imgs/kixplay/hot_games/theFourDivineBeasts.png">
                               <!--TODO alt text-->
                               <div class="loader-b" *ngif="!showEle" style="display: none;"></div>
                               <div class="game-title text-center">
                                   <span>The Four Divine Beasts</span> 
                                 
                               </div>
   
                                                      </a>
   
                          
                       </li>
                                          <li>
                                                                     <a class="game-box widget-wrapper-image" href="/slots/wow-gaming?hot=Barong+Sacred+Battle">
                              
                               <!--[ngTemplateOutlet]="gameItemContent"> -->
                                                              
                                                               <div class="game_brand"> 
                                    <img class="game_brand_logo ls-is-cached lazyloaded" alt="Barong Sacred Battle" src="/assets/imgs/game_providers_round_logo/wow.png?v=0.1" data-src="/assets/imgs/game_providers_round_logo/wow.png?v=0.1">
                                    <h5 class="game_brand_name" style="display: none;">wow gaming</h5>
                                </div>
                               
                               <img class="widget-wrapper-image-img lazyloaded" alt="Barong Sacred Battle" src="/assets/imgs/kixplay/hot_games/BarongSacredBattle.png" data-src="/assets/imgs/kixplay/hot_games/BarongSacredBattle.png">
                               <!--TODO alt text-->
                               <div class="loader-b" *ngif="!showEle" style="display: none;"></div>
                               <div class="game-title text-center">
                                   <span>Barong Sacred Battle</span> 
                                 
                               </div>
   
                                                      </a>
   
                          
                       </li>
                                          <li>
                                                                     
   
                          
                       </li>
                                          <li>
                                                                     
   
                          
                       </li>
                                          <li>
                                                                     <a class="game-box widget-wrapper-image" href="/e-games/ggsoft?hot=Bounceball+Classic">
                              
                               <!--[ngTemplateOutlet]="gameItemContent"> -->
                                                              
                                                               <div class="game_brand"> 
                                    <img class="game_brand_logo ls-is-cached lazyloaded" alt="Bounceball Classic" src="/assets/imgs/game_providers_round_logo/ggsoft.png" data-src="/assets/imgs/game_providers_round_logo/ggsoft.png">
                                    <h5 class="game_brand_name" style="display: none;">ggsoft</h5>
                                </div>
                               
                               <img class="widget-wrapper-image-img ls-is-cached lazyloaded" alt="Bounceball Classic" src="/assets/imgs/kixplay/hot_games/e4299f2f033e8b77b3afeafc12eda58c.webp" data-src="/assets/imgs/kixplay/hot_games/e4299f2f033e8b77b3afeafc12eda58c.webp">
                               <!--TODO alt text-->
                               <div class="loader-b" *ngif="!showEle" style="display: none;"></div>
                               <div class="game-title text-center">
                                   <span>Bounceball Classic</span> 
                                 
                               </div>
   
                                                      </a>
   
   
                          
                       </li>
                                          <li>
                                                                     <a class="game-box widget-wrapper-image" href="/slots/pragmatic-play?hot=Gates+of+Olympus+Super+Scatter">
                              
                               <!--[ngTemplateOutlet]="gameItemContent"> -->
                                                              
                                                               <div class="game_brand"> 
                                    <img class="game_brand_logo ls-is-cached lazyloaded" alt="Gates of Olympus Super Scatter" src="/assets/game_providers_round_logo/pragmatic7b30.png" data-src="/assets/game_providers_round_logo/pragmatic7b30.png">
                                    <h5 class="game_brand_name" style="display: none;">pragmatic play</h5>
                                </div>
                               
                               <img class="widget-wrapper-image-img ls-is-cached lazyloaded" alt="Gates of Olympus Super Scatter" src="/assets/imgs/kixplay/hot_games/Gates_of_Olympus_Super_Scatter.png" data-src="/assets/imgs/kixplay/hot_games/Gates_of_Olympus_Super_Scatter.png">
                               <!--TODO alt text-->
                               <div class="loader-b" *ngif="!showEle" style="display: none;"></div>
                               <div class="game-title text-center">
                                   <span>Gates of Olympus Super Scatter</span> 
                                 
                               </div>
   
                                                      </a>
   
                          
                       </li>
                                          <li>
                                                                     <a class="game-box widget-wrapper-image" href="/slots/playstar?hot=Mahjong+Ways+3%2B_Black+limited">
                              
                               <!--[ngTemplateOutlet]="gameItemContent"> -->
                                                              
                                                               <div class="game_brand"> 
                                    <img class="game_brand_logo ls-is-cached lazyloaded" alt="Mahjong Ways 3+_Black limited" src="/assets/game_providers_round_logo/playstar.png" data-src="/assets/game_providers_round_logo/playstar.png">
                                    <h5 class="game_brand_name" style="display: none;">playstar</h5>
                                </div>
                               
                               <img class="widget-wrapper-image-img ls-is-cached lazyloaded" alt="Mahjong Ways 3+_Black limited" src="/assets/imgs/kixplay/hot_games/Mahjong3_Black_Scatter.png" data-src="/assets/imgs/kixplay/hot_games/Mahjong3_Black_Scatter.png">
                               <!--TODO alt text-->
                               <div class="loader-b" *ngif="!showEle" style="display: none;"></div>
                               <div class="game-title text-center">
                                   <span>Mahjong Ways 3+_Black limited</span> 
                                 
                               </div>
   
                                                      </a>
   
                          
                       </li>
                                          <li>
                                                                     <a class="game-box widget-wrapper-image" href="/slots/fastspin?hot=Spirit+of+the+Sea">
                              
                               <!--[ngTemplateOutlet]="gameItemContent"> -->
                                                              
                                                               <div class="game_brand"> 
                                    <img class="game_brand_logo ls-is-cached lazyloaded" alt="Spirit of the Sea" src="/assets/game_providers_round_logo/fastspin.png" data-src="/assets/game_providers_round_logo/fastspin.png">
                                    <h5 class="game_brand_name" style="display: none;">fastspin</h5>
                                </div>
                               
                               <img class="widget-wrapper-image-img ls-is-cached lazyloaded" alt="Spirit of the Sea" src="/assets/imgs/kixplay/hot_games/7" data-src="/assets/imgs/kixplay/hot_games/7">
                               <!--TODO alt text-->
                               <div class="loader-b" *ngif="!showEle" style="display: none;"></div>
                               <div class="game-title text-center">
                                   <span>Spirit of the Sea</span> 
                                 
                               </div>
   
                                                      </a>
   
                          
                       </li>
                                          <li>
                                                                     
   
                          
                       </li>
                                          <li>
                                                                     
   
                          
                       </li>
                                          <li>
                                                                     <a class="game-box widget-wrapper-image" href="/slots/pragmatic-play?hot=Gates+of+Olympus+1000">
                              
                               <!--[ngTemplateOutlet]="gameItemContent"> -->
                                                              
                                                               <div class="game_brand"> 
                                    <img class="game_brand_logo ls-is-cached lazyloaded" alt="Gates of Olympus 1000" src="/assets/game_providers_round_logo/pragmatic7b30.png" data-src="/assets/game_providers_round_logo/pragmatic7b30.png">
                                    <h5 class="game_brand_name" style="display: none;">pragmatic play</h5>
                                </div>
                               
                               <img class="widget-wrapper-image-img ls-is-cached lazyloaded" alt="Gates of Olympus 1000" src="/assets/imgs/kixplay/hot_games/Gates_Of_Olympus_1000.png" data-src="/assets/imgs/kixplay/hot_games/Gates_Of_Olympus_1000.png">
                               <!--TODO alt text-->
                               <div class="loader-b" *ngif="!showEle" style="display: none;"></div>
                               <div class="game-title text-center">
                                   <span>Gates of Olympus 1000</span> 
                                 
                               </div>
   
                                                      </a>
   
                          
                       </li>
                                          <li>
                                                                     <a class="game-box widget-wrapper-image" href="/slots/pragmatic-play?hot=Mahjong+Wins+3+-+Black+Scatter">
                              
                               <!--[ngTemplateOutlet]="gameItemContent"> -->
                                                              
                                                               <div class="game_brand"> 
                                    <img class="game_brand_logo ls-is-cached lazyloaded" alt="Mahjong Wins 3 - Black Scatter" src="/assets/game_providers_round_logo/pragmatic7b30.png" data-src="/assets/game_providers_round_logo/pragmatic7b30.png">
                                    <h5 class="game_brand_name" style="display: none;">pragmatic play</h5>
                                </div>
                               
                               <img class="widget-wrapper-image-img ls-is-cached lazyloaded" alt="Mahjong Wins 3 - Black Scatter" src="/assets/imgs/kixplay/hot_games/Mahjong3_Black_Scatter.png" data-src="/assets/imgs/kixplay/hot_games/Mahjong3_Black_Scatter.png">
                               <!--TODO alt text-->
                               <div class="loader-b" *ngif="!showEle" style="display: none;"></div>
                               <div class="game-title text-center">
                                   <span>Mahjong Wins 3 - Black Scatter</span> 
                                 
                               </div>
   
                                                      </a>
   
                          
                       </li>
                                          <li>
                                                                     <a class="game-box widget-wrapper-image" href="/slots/playtech?hot=Epic+Fish+Marlin+Madness">
                              
                               <!--[ngTemplateOutlet]="gameItemContent"> -->
                                                              
                                                               <div class="game_brand"> 
                                    <img class="game_brand_logo ls-is-cached lazyloaded" alt="Epic Fish Marlin Madness" src="/assets/game_providers_round_logo/playtech.png" data-src="/assets/game_providers_round_logo/playtech.png">
                                    <h5 class="game_brand_name" style="display: none;">playtech</h5>
                                </div>
                               
                               <img class="widget-wrapper-image-img ls-is-cached lazyloaded" alt="Epic Fish Marlin Madness" src="/assets/imgs/kixplay/hot_games/pop_d24dc3b8_qsp.webp" data-src="/assets/imgs/kixplay/hot_games/pop_d24dc3b8_qsp.webp">
                               <!--TODO alt text-->
                               <div class="loader-b" *ngif="!showEle" style="display: none;"></div>
                               <div class="game-title text-center">
                                   <span>Epic Fish Marlin Madness</span> 
                                 
                               </div>
   
                                                      </a>
   
                          
                       </li>
                                          <li>
                                                                     
   
                          
                       </li>
                                          <li>
                                                                     <a class="game-box widget-wrapper-image" href="/slots/pragmatic-play?hot=Sweet+Bonanza+Candy+Land">
                              
                               <!--[ngTemplateOutlet]="gameItemContent"> -->
                                                              
                                                               <div class="game_brand"> 
                                    <img class="game_brand_logo ls-is-cached lazyloaded" alt="Sweet Bonanza Candy Land" src="/assets/game_providers_round_logo/pragmatic7b30.png" data-src="/assets/game_providers_round_logo/pragmatic7b30.png">
                                    <h5 class="game_brand_name" style="display: none;">pragmatic play</h5>
                                </div>
                               
                               <img class="widget-wrapper-image-img ls-is-cached lazyloaded" alt="Sweet Bonanza Candy Land" src="/assets/imgs/kixplay/hot_games/Sweet_Bonanza_Candy_Land.png" data-src="/assets/imgs/kixplay/hot_games/Sweet_Bonanza_Candy_Land.png">
                               <!--TODO alt text-->
                               <div class="loader-b" *ngif="!showEle" style="display: none;"></div>
                               <div class="game-title text-center">
                                   <span>Sweet Bonanza Candy Land</span> 
                                 
                               </div>
   
                                                      </a>
   
                          
                       </li>
                                          <li>
                                                                     <a class="game-box widget-wrapper-image" href="/slots/pragmatic-play?hot=Starlight+Princess+1000">
                              
                               <!--[ngTemplateOutlet]="gameItemContent"> -->
                                                              
                                                               <div class="game_brand"> 
                                    <img class="game_brand_logo ls-is-cached lazyloaded" alt="Starlight Princess 1000" src="/assets/game_providers_round_logo/pragmatic7b30.png" data-src="/assets/game_providers_round_logo/pragmatic7b30.png">
                                    <h5 class="game_brand_name" style="display: none;">pragmatic play</h5>
                                </div>
                               
                               <img class="widget-wrapper-image-img ls-is-cached lazyloaded" alt="Starlight Princess 1000" src="/assets/imgs/kixplay/hot_games/Starlight_Princess_1000.png" data-src="/assets/imgs/kixplay/hot_games/Starlight_Princess_1000.png">
                               <!--TODO alt text-->
                               <div class="loader-b" *ngif="!showEle" style="display: none;"></div>
                               <div class="game-title text-center">
                                   <span>Starlight Princess 1000</span> 
                                 
                               </div>
   
                                                      </a>
   
                          
                       </li>
                                          <li>
                                                                     <a class="game-box widget-wrapper-image" href="/slots/pragmatic-play?hot=Sweet+Bonanza+1000">
                              
                               <!--[ngTemplateOutlet]="gameItemContent"> -->
                                                              
                                                               <div class="game_brand"> 
                                    <img class="game_brand_logo ls-is-cached lazyloaded" alt="Sweet Bonanza 1000" src="/assets/game_providers_round_logo/pragmatic7b30.png" data-src="/assets/game_providers_round_logo/pragmatic7b30.png">
                                    <h5 class="game_brand_name" style="display: none;">pragmatic play</h5>
                                </div>
                               
                               <img class="widget-wrapper-image-img ls-is-cached lazyloaded" alt="Sweet Bonanza 1000" src="/assets/imgs/kixplay/hot_games/Sweet_Bonanza_1000.png" data-src="/assets/imgs/kixplay/hot_games/Sweet_Bonanza_1000.png">
                               <!--TODO alt text-->
                               <div class="loader-b" *ngif="!showEle" style="display: none;"></div>
                               <div class="game-title text-center">
                                   <span>Sweet Bonanza 1000</span> 
                                 
                               </div>
   
                                                      </a>
   
                          
                       </li>
                                          <li>
                                                                     <a class="game-box widget-wrapper-image" href="/slots/pgsoft?hot=Mahjong+Ways+2">
                              
                               <!--[ngTemplateOutlet]="gameItemContent"> -->
                                                              
                                                               <div class="game_brand"> 
                                    <img class="game_brand_logo ls-is-cached lazyloaded" alt="Mahjong Ways 2" src="/assets/game_providers_round_logo/pgsoft7b30.png" data-src="/assets/game_providers_round_logo/pgsoft7b30.png">
                                    <h5 class="game_brand_name" style="display: none;">pgsoft</h5>
                                </div>
                               
                               <img class="widget-wrapper-image-img ls-is-cached lazyloaded" alt="Mahjong Ways 2" src="/assets/imgs/kixplay/hot_games/Mahjong_Ways_Two.png" data-src="/assets/imgs/kixplay/hot_games/Mahjong_Ways_Two.png">
                               <!--TODO alt text-->
                               <div class="loader-b" *ngif="!showEle" style="display: none;"></div>
                               <div class="game-title text-center">
                                   <span>Mahjong Ways 2</span> 
                                 
                               </div>
   
                                                      </a>
   
                          
                       </li>
                                          <li>
                                                                     <a class="game-box widget-wrapper-image" href="/slots/pgsoft?hot=Wild+Bounty+Showdown">
                              
                               <!--[ngTemplateOutlet]="gameItemContent"> -->
                                                              
                                                               <div class="game_brand"> 
                                    <img class="lazy game_brand_logo" alt="Wild Bounty Showdown" src="" data-src="/assets/game_providers_round_logo/pgsoft7b30.png">
                                    <h5 class="game_brand_name">pgsoft</h5>
                                </div>
                               
                               <img class="lazy widget-wrapper-image-img" alt="Wild Bounty Showdown" src="" data-src="/assets/imgs/kixplay/hot_games/wildBountyShowdown.png">
                               <!--TODO alt text-->
                               <div class="loader-b" *ngif="!showEle"></div>
                               <div class="game-title text-center">
                                   <span>Wild Bounty Showdown</span> 
                                 
                               </div>
   
                                                      </a>
   
                          
                       </li>
                                          <li>
                                                                     <a class="game-box widget-wrapper-image" href="/fish-hunter/jili?hot=FORTUNE+ZOMBIE">
                              
                               <!--[ngTemplateOutlet]="gameItemContent"> -->
                                                              
                                                               <div class="game_brand"> 
                                    <img class="lazy game_brand_logo" alt="FORTUNE ZOMBIE" src="" data-src="/assets/game_providers_round_logo/jili7b30.png">
                                    <h5 class="game_brand_name">jili</h5>
                                </div>
                               
                               <img class="lazy widget-wrapper-image-img" alt="FORTUNE ZOMBIE" src="" data-src="/assets/imgs/kixplay/hot_games/fortuneZombie.webp">
                               <!--TODO alt text-->
                               <div class="loader-b" *ngif="!showEle"></div>
                               <div class="game-title text-center">
                                   <span>FORTUNE ZOMBIE</span> 
                                 
                               </div>
   
                                                      </a>
   
                          
                       </li>
                                          <li>
                                                                     <a class="game-box widget-wrapper-image" href="/slots/jili?hot=Fortune+Gems+2">
                              
                               <!--[ngTemplateOutlet]="gameItemContent"> -->
                                                              
                                                               <div class="game_brand"> 
                                    <img class="lazy game_brand_logo" alt="Fortune Gems 2" src="" data-src="/assets/game_providers_round_logo/jili7b30.png">
                                    <h5 class="game_brand_name">jili</h5>
                                </div>
                               
                               <img class="lazy widget-wrapper-image-img" alt="Fortune Gems 2" src="" data-src="/assets/imgs/kixplay/hot_games/Fortune_Gems_2.png">
                               <!--TODO alt text-->
                               <div class="loader-b" *ngif="!showEle"></div>
                               <div class="game-title text-center">
                                   <span>Fortune Gems 2</span> 
                                 
                               </div>
   
                                                      </a>
   
                          
                       </li>
                                          <li>
                                                                     <a class="game-box widget-wrapper-image" href="/slots/playstar?hot=HORDE+2+WINTER">
                              
                               <!--[ngTemplateOutlet]="gameItemContent"> -->
                                                              
                                                               <div class="game_brand"> 
                                    <img class="lazy game_brand_logo" alt="HORDE 2 WINTER" src="" data-src="/assets/game_providers_round_logo/playstar.png">
                                    <h5 class="game_brand_name">playstar</h5>
                                </div>
                               
                               <img class="lazy widget-wrapper-image-img" alt="HORDE 2 WINTER" src="" data-src="/assets/imgs/kixplay/hot_games/horde-2-winter.png">
                               <!--TODO alt text-->
                               <div class="loader-b" *ngif="!showEle"></div>
                               <div class="game-title text-center">
                                   <span>HORDE 2 WINTER</span> 
                                 
                               </div>
   
                                                      </a>
   
                          
                       </li>
                                          <li>
                                                                     <a class="game-box widget-wrapper-image" href="/slots/fastspin?hot=The+Great+Safari">
                              
                               <!--[ngTemplateOutlet]="gameItemContent"> -->
                                                              
                                                               <div class="game_brand"> 
                                    <img class="lazy game_brand_logo" alt="The Great Safari" src="" data-src="/assets/imgs/game_providers_round_logo/fastspin.png">
                                    <h5 class="game_brand_name">fastspin</h5>
                                </div>
                               
                               <img class="lazy widget-wrapper-image-img" alt="The Great Safari" src="" data-src="/assets/imgs/kixplay/hot_games/sgs05.png">
                               <!--TODO alt text-->
                               <div class="loader-b" *ngif="!showEle"></div>
                               <div class="game-title text-center">
                                   <span>The Great Safari</span> 
                                 
                               </div>
   
                                                      </a>
   
                          
                       </li>
                                          <li>
                                                                     <a class="game-box widget-wrapper-image" href="/slots/advantplay?hot=Sugar+Crush">
                              
                               <!--[ngTemplateOutlet]="gameItemContent"> -->
                                                              
                                                               <div class="game_brand"> 
                                    <img class="lazy game_brand_logo" alt="Sugar Crush" src="" data-src="/assets/imgs/game_providers_round_logo/advantplay.png">
                                    <h5 class="game_brand_name">advantplay</h5>
                                </div>
                               
                               <img class="lazy widget-wrapper-image-img" alt="Sugar Crush" src="" data-src="/assets/imgs/kixplay/hot_games/SugarCrush.png">
                               <!--TODO alt text-->
                               <div class="loader-b" *ngif="!showEle"></div>
                               <div class="game-title text-center">
                                   <span>Sugar Crush</span> 
                                 
                               </div>
   
                                                      </a>
   
                          
                       </li>
                                          <li>
                                                                     <a class="game-box widget-wrapper-image" href="/slots/advantplay?hot=Dragon+Chi%E2%80%99s+Quest">
                              
                               <!--[ngTemplateOutlet]="gameItemContent"> -->
                                                              
                                                               <div class="game_brand"> 
                                    <img class="lazy game_brand_logo" alt="Dragon Chi’s Quest" src="" data-src="/assets/imgs/game_providers_round_logo/advantplay.png">
                                    <h5 class="game_brand_name">advantplay</h5>
                                </div>
                               
                               <img class="lazy widget-wrapper-image-img" alt="Dragon Chi’s Quest" src="" data-src="/assets/imgs/kixplay/hot_games/Dragon_Chis_Quest.png">
                               <!--TODO alt text-->
                               <div class="loader-b" *ngif="!showEle"></div>
                               <div class="game-title text-center">
                                   <span>Dragon Chi’s Quest</span> 
                                 
                               </div>
   
                                                      </a>
   
                          
                       </li>
                                          <li>
                                                                     <a class="game-box widget-wrapper-image" href="/slots/advantplay?hot=Maya%3A+Elemental+Totem">
                              
                               <!--[ngTemplateOutlet]="gameItemContent"> -->
                                                              
                                                               <div class="game_brand"> 
                                    <img class="lazy game_brand_logo" alt="Maya: Elemental Totem" src="" data-src="/assets/imgs/game_providers_round_logo/advantplay.png">
                                    <h5 class="game_brand_name">advantplay</h5>
                                </div>
                               
                               <img class="lazy widget-wrapper-image-img" alt="Maya: Elemental Totem" src="" data-src="/assets/imgs/kixplay/hot_games/mayaElementalTotem2.png">
                               <!--TODO alt text-->
                               <div class="loader-b" *ngif="!showEle"></div>
                               <div class="game-title text-center">
                                   <span>Maya: Elemental Totem</span> 
                                 
                               </div>
   
                                                      </a>
   
                          
                       </li>
                                          <li>
                                                                     <a class="game-box widget-wrapper-image" href="/slots/nextspin?hot=Treasure+of+Atlantis">
                              
                               <!--[ngTemplateOutlet]="gameItemContent"> -->
                                                              
                                                               <div class="game_brand"> 
                                    <img class="lazy game_brand_logo" alt="Treasure of Atlantis" src="" data-src="/assets/imgs/game_providers_round_logo/nextspin.png">
                                    <h5 class="game_brand_name">nextspin</h5>
                                </div>
                               
                               <img class="lazy widget-wrapper-image-img" alt="Treasure of Atlantis" src="" data-src="/assets/imgs/kixplay/hot_games/TreasureOfAtlantis.png">
                               <!--TODO alt text-->
                               <div class="loader-b" *ngif="!showEle"></div>
                               <div class="game-title text-center">
                                   <span>Treasure of Atlantis</span> 
                                 
                               </div>
   
                                                      </a>
   
                          
                       </li>
                                          <li>
                                                                     <a class="game-box widget-wrapper-image" href="/fish-hunter/fachai?hot=Jungle+Bang+Bang">
                              
                               <!--[ngTemplateOutlet]="gameItemContent"> -->
                                                              
                                                               <div class="game_brand"> 
                                    <img class="lazy game_brand_logo" alt="Jungle Bang Bang" src="" data-src="/assets/imgs/game_providers_round_logo/fachai.png">
                                    <h5 class="game_brand_name">fachai</h5>
                                </div>
                               
                               <img class="lazy widget-wrapper-image-img" alt="Jungle Bang Bang" src="" data-src="/assets/imgs/kixplay/hot_games/Jungle_Bang_Bang.png">
                               <!--TODO alt text-->
                               <div class="loader-b" *ngif="!showEle"></div>
                               <div class="game-title text-center">
                                   <span>Jungle Bang Bang</span> 
                                 
                               </div>
   
                                                      </a>
   
                          
                       </li>
                                          <li>
                                                                     <a class="game-box widget-wrapper-image" href="/slots/playtech?hot=Sticky+Bandits+Thunder+Rail">
                              
                               <!--[ngTemplateOutlet]="gameItemContent"> -->
                                                              
                                                               <div class="game_brand"> 
                                    <img class="lazy game_brand_logo" alt="Sticky Bandits Thunder Rail" src="" data-src="/assets/imgs/game_providers_round_logo/playtech.png">
                                    <h5 class="game_brand_name">playtech</h5>
                                </div>
                               
                               <img class="lazy widget-wrapper-image-img" alt="Sticky Bandits Thunder Rail" src="" data-src="/assets/imgs/kixplay/hot_games/Sticky-Bandits-Thunder-Rail.webp">
                               <!--TODO alt text-->
                               <div class="loader-b" *ngif="!showEle"></div>
                               <div class="game-title text-center">
                                   <span>Sticky Bandits Thunder Rail</span> 
                                 
                               </div>
   
                                                      </a>
   
                          
                       </li>
                                          <li>
                                                                     <a class="game-box widget-wrapper-image" href="/slots/playtech?hot=Buffalo+Blitz%3A+Cash+Collect">
                              
                               <!--[ngTemplateOutlet]="gameItemContent"> -->
                                                              
                                                               <div class="game_brand"> 
                                    <img class="lazy game_brand_logo" alt="Buffalo Blitz: Cash Collect" src="" data-src="/assets/imgs/game_providers_round_logo/playtech.png">
                                    <h5 class="game_brand_name">playtech</h5>
                                </div>
                               
                               <img class="lazy widget-wrapper-image-img" alt="Buffalo Blitz: Cash Collect" src="" data-src="/assets/imgs/kixplay/hot_games/b1659d6434e9769c062093b616650469_240x150.webp">
                               <!--TODO alt text-->
                               <div class="loader-b" *ngif="!showEle"></div>
                               <div class="game-title text-center">
                                   <span>Buffalo Blitz: Cash Collect</span> 
                                 
                               </div>
   
                                                      </a>
   
                          
                       </li>
                                          <li>
                                                                     <a class="game-box widget-wrapper-image" href="/slots/spadegaming?hot=Legacy+of+Kong+Maxways">
                              
                               <!--[ngTemplateOutlet]="gameItemContent"> -->
                                                              
                                                               <div class="game_brand"> 
                                    <img class="lazy game_brand_logo" alt="Legacy of Kong Maxways" src="" data-src="/assets/imgs/game_providers_round_logo/spadegaming.png">
                                    <h5 class="game_brand_name">spadegaming</h5>
                                </div>
                               
                               <img class="lazy widget-wrapper-image-img" alt="Legacy of Kong Maxways" src="" data-src="/assets/imgs/kixplay/hot_games/slk03.png">
                               <!--TODO alt text-->
                               <div class="loader-b" *ngif="!showEle"></div>
                               <div class="game-title text-center">
                                   <span>Legacy of Kong Maxways</span> 
                                 
                               </div>
   
                                                      </a>
   
                          
                       </li>
                                          <li>
                                                                     <a class="game-box widget-wrapper-image" href="/slots/568win?hot=Great+Fortune">
                              
                               <!--[ngTemplateOutlet]="gameItemContent"> -->
                                                              
                                                               <div class="game_brand"> 
                                    <img class="lazy game_brand_logo" alt="Great Fortune" src="" data-src="/assets/imgs/game_providers_round_logo/sbo7b30.png">
                                    <h5 class="game_brand_name">568win</h5>
                                </div>
                               
                               <img class="lazy widget-wrapper-image-img" alt="Great Fortune" src="" data-src="/assets/imgs/kixplay/hot_games/Great_Fortune.png">
                               <!--TODO alt text-->
                               <div class="loader-b" *ngif="!showEle"></div>
                               <div class="game-title text-center">
                                   <span>Great Fortune</span> 
                                 
                               </div>
   
                                                      </a>
   
                          
                       </li>
                                          <li>
                                                                     <a class="game-box widget-wrapper-image" href="/slots/wow-gaming?hot=The+Four+Divine+Beasts">
                              
                               <!--[ngTemplateOutlet]="gameItemContent"> -->
                                                              
                                                               <div class="game_brand"> 
                                    <img class="lazy game_brand_logo" alt="The Four Divine Beasts" src="" data-src="/assets/imgs/game_providers_round_logo/wow.png?v=0.1">
                                    <h5 class="game_brand_name">wow gaming</h5>
                                </div>
                               
                               <img class="lazy widget-wrapper-image-img" alt="The Four Divine Beasts" src="" data-src="/assets/imgs/kixplay/hot_games/theFourDivineBeasts.png">
                               <!--TODO alt text-->
                               <div class="loader-b" *ngif="!showEle"></div>
                               <div class="game-title text-center">
                                   <span>The Four Divine Beasts</span> 
                                 
                               </div>
   
                                                      </a>
   
                          
                       </li>
                                          <li>
                                                                     <a class="game-box widget-wrapper-image" href="/slots/wow-gaming?hot=Barong+Sacred+Battle">
                              
                               <!--[ngTemplateOutlet]="gameItemContent"> -->
                                                              
                                                               <div class="game_brand"> 
                                    <img class="lazy game_brand_logo" alt="Barong Sacred Battle" src="" data-src="/assets/imgs/game_providers_round_logo/wow.png?v=0.1">
                                    <h5 class="game_brand_name">wow gaming</h5>
                                </div>
                               
                               <img class="lazy widget-wrapper-image-img" alt="Barong Sacred Battle" src="" data-src="/assets/imgs/kixplay/hot_games/BarongSacredBattle.png">
                               <!--TODO alt text-->
                               <div class="loader-b" *ngif="!showEle"></div>
                               <div class="game-title text-center">
                                   <span>Barong Sacred Battle</span> 
                                 
                               </div>
   
                                                      </a>
   
                          
                       </li>
                                          <li>
                                                                     <a class="game-box widget-wrapper-image" href="/slots/spadegaming?hot=Golden+Pixiu">
                              
                               <!--[ngTemplateOutlet]="gameItemContent"> -->
                                                              
                                                               <div class="game_brand"> 
                                    <img class="lazy game_brand_logo" alt="Golden Pixiu" src="" data-src="/assets/imgs/game_providers_round_logo/spadegamin.png?v=4">
                                    <h5 class="game_brand_name">spadegaming</h5>
                                </div>
                               
                               <img class="lazy widget-wrapper-image-img" alt="Golden Pixiu" src="" data-src="/assets/imgs/kixplay/hot_games/goldenPixiu.png">
                               <!--TODO alt text-->
                               <div class="loader-b" *ngif="!showEle"></div>
                               <div class="game-title text-center">
                                   <span>Golden Pixiu</span> 
                                 
                               </div>
   
                                                      </a>
   
                          
                       </li>
                                          <li>
                                                                     <a class="game-box widget-wrapper-image" href="/slots/spadegaming?hot=Mahjong+Riches">
                              
                               <!--[ngTemplateOutlet]="gameItemContent"> -->
                                                              
                                                               <div class="game_brand"> 
                                    <img class="lazy game_brand_logo" alt="Mahjong Riches" src="" data-src="/assets/imgs/game_providers_round_logo/spadegamin.png?v=4">
                                    <h5 class="game_brand_name">spadegaming</h5>
                                </div>
                               
                               <img class="lazy widget-wrapper-image-img" alt="Mahjong Riches" src="" data-src="/assets/imgs/kixplay/hot_games/mahjongRiches.png">
                               <!--TODO alt text-->
                               <div class="loader-b" *ngif="!showEle"></div>
                               <div class="game-title text-center">
                                   <span>Mahjong Riches</span> 
                                 
                               </div>
   
                                                      </a>
   
                          
                       </li>
                                          <li>
                                                                     <a class="game-box widget-wrapper-image" href="/e-games/ggsoft?hot=Bounceball+Classic">
                              
                               <!--[ngTemplateOutlet]="gameItemContent"> -->
                                                              
                                                               <div class="game_brand"> 
                                    <img class="lazy game_brand_logo" alt="Bounceball Classic" src="" data-src="/assets/imgs/game_providers_round_logo/ggsoft.png">
                                    <h5 class="game_brand_name">ggsoft</h5>
                                </div>
                               
                               <img class="lazy widget-wrapper-image-img" alt="Bounceball Classic" src="" data-src="/assets/imgs/kixplay/hot_games/e4299f2f033e8b77b3afeafc12eda58c.webp">
                               <!--TODO alt text-->
                               <div class="loader-b" *ngif="!showEle"></div>
                               <div class="game-title text-center">
                                   <span>Bounceball Classic</span> 
                                 
                               </div>
   
                                                      </a>
   
                          
                       </li>
                                      </ul>
                              </div>
               
           </div>
           </div>
</section>

<section class="common-section">
    <!-- Container utama dibikin relative supaya posisinya jadi acuan -->
    <div class="top-section" style="position: relative; width: 100%;">
         
        <!-- Gambar Banner -->
        <img class="img-fluid col-width-full" style="width:100%; display:block;" src="https://cdn.jsdelivr.net/gh/Goblin887777/goblin88@main/assets/progressive_img/2025041918100600000018e4b6f26c__BABYBOS__1479x405.webp" alt="jackpot">
            
        <!-- Teks Overlay dengan posisi absolute (Top 65%) -->
        <div class="txt-overlay" style="position: absolute; top: 60%; left: 50%; transform: translate(-50%, -50%); width: 100%; text-align: center; pointer-events: none; z-index: 10;">
            <div class="top-section-inner" style="width: 100%;">
                <div class="row" style="margin: 0; justify-content: center;">
                    <div class="col-md-6 col-sm-12 col-xs-12 jackpot-wraper" style="width: 100%;">
                        
                        <!-- Struktur kelas asli template agar JS jackpot tetap mutar -->
                        <div class="jackpot">
                            <div class="txt-overlay">
                                <!-- Ukuran font dikunci langsung di sini pakai 3.5vw (atau bisa diganti 14px / 15px kalau masih kegedean) -->
                                <div class="text-content" style="color: #fff; font-size: 3.5vw !important; font-weight: bold; text-shadow: 0 0 5px #000, 0 0 10px #000;">
                                    <span id="jackpot_amount" style="font-size: inherit !important;"><span>IDR</span> 35,888,162,767.00</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
           <!--End Popular games -->

<section class="circle_recommended_games">
    <div class="title-wrapper widget-wrapper-title u-section-box--bg text-center">
        <h4 class="u-section-title common-title">Rekomendasi</h4>               
    </div>
    <div class="popular-section">
      
             <!--hot games-->
   <div class="row">
   
   <div class="col-xs-12">
       <div class="g-slider-wrapper recommend widget-wrapper">

            <!-- <button class="btn btn-link js-cycling-btn btn-prev" data-action = "prev" >
                <span>
                <i class="icon-chevron-left"></i>
                </span>                       
            </button>

            <button class="btn btn-link js-cycling-btn  btn-next"  data-action = "next" >
                <span>
                <i class="icon-chevron-right"></i>
                </span>
            </button> -->
        
            <div class="content-wrapper hot-games round" style="overflow: hidden; position: relative;">
                        
                
                       <ul class="games-leave-active games-leave-to run" data-count="14">
          
               
                                <li class="round_recommended_game">
                                                                <div class=" round login-alert">
                            

                            <!--[ngTemplateOutlet]="gameItemContent"> -->
                                                        
                                                        <img class=" ls-is-cached lazyloaded" alt="SBOBET" src="assets/game_providers_round_logo/sbo7b30.png" data-src="assets/game_providers_round_logo/sbo7b30.png">
                            <!--TODO alt text-->
                            <div class="loader-b" *ngif="!showEle" style="display: none;"></div>
                            

                                    </div>
        
        </li>
                        <li class="round_recommended_game">
                                                                <div class=" round login-alert">
                            

                            <!--[ngTemplateOutlet]="gameItemContent"> -->
                                                        
                                                        <img class=" ls-is-cached lazyloaded" alt="AG" src="/assets/game_providers_round_logo/ag7b30.png" data-src="/assets/game_providers_round_logo/ag7b30.png">
                            <!--TODO alt text-->
                            <div class="loader-b" *ngif="!showEle" style="display: none;"></div>
                            

                                    </div>
        
        </li>
                        <li class="round_recommended_game">
                                                                <div class=" round login-alert">
                            

                            <!--[ngTemplateOutlet]="gameItemContent"> -->
                                                        
                                                        <img class=" ls-is-cached lazyloaded" alt="ALLBET" src="/assets/game_providers_round_logo/allbet7b30.png" data-src="/assets/game_providers_round_logo/allbet7b30.png">
                            <!--TODO alt text-->
                            <div class="loader-b" *ngif="!showEle" style="display: none;"></div>
                            

                                    </div>
        
        </li>
                        <li class="round_recommended_game">
                                    </li><li class="round_recommended_game">
                                                                <div class=" round login-alert">
                            

                            <!--[ngTemplateOutlet]="gameItemContent"> -->
                                                        
                                                        <img class=" ls-is-cached lazyloaded" alt="EVO" src="assets/game_providers_round_logo/evo7b30.png" data-src="assets/game_providers_round_logo/evo7b30.png">
                            <!--TODO alt text-->
                            <div class="loader-b" *ngif="!showEle" style="display: none;"></div>
                            

                                    </div>
        
        </li>
                        <li class="round_recommended_game">
                                                            <a class=" round " href="/slots/habanero">

                        

                            <!--[ngTemplateOutlet]="gameItemContent"> -->
                                                        
                                                        <img class=" ls-is-cached lazyloaded" alt="HABANERO" src="/assets/game_providers_round_logo/habanero7b30.png" data-src="/assets/game_providers_round_logo/habanero7b30.png">
                            <!--TODO alt text-->
                            <div class="loader-b" *ngif="!showEle" style="display: none;"></div>
                            

                                                </a>

                    
        </li>
                        <li class="round_recommended_game">
                                                                <div class=" round login-alert">
                            

                            <!--[ngTemplateOutlet]="gameItemContent"> -->
                                                        
                                                        <img class=" ls-is-cached lazyloaded" alt="SABA SPORTS" src="assets/game_providers_round_logo/sbo7b30.png" data-src="assets/game_providers_round_logo/sbo7b30.png">
                            <!--TODO alt text-->
                            <div class="loader-b" *ngif="!showEle" style="display: none;"></div>
                            

                                    </div>
        
        </li>
                        <li class="round_recommended_game">
                                                            <a class=" round " href="/slots/joker-gaming">

                        

                            <!--[ngTemplateOutlet]="gameItemContent"> -->
                                                        
                                                        <img class=" lazyloaded" alt="JOKER" src="/assets/game_providers_round_logo/joker.webp" data-src="/assets/game_providers_round_logo/joker.webp">
                            <!--TODO alt text-->
                            <div class="loader-b" *ngif="!showEle" style="display: none;"></div>
                            

                                                </a>

                    
        </li>
                        <li class="round_recommended_game">
                                                            <a class=" round " href="/slots/pgsoft">

                        

                            <!--[ngTemplateOutlet]="gameItemContent"> -->
                                                        
                                                        <img class=" lazyloaded" alt="PGSOFT" src="/assets/game_providers_round_logo/pgsoft7b30.png" data-src="/assets/game_providers_round_logo/pgsoft7b30.png">
                            <!--TODO alt text-->
                            <div class="loader-b" *ngif="!showEle" style="display: none;"></div>
                            

                                                </a>

                    
        </li>
                        <li class="round_recommended_game">
                                                            <a class=" round " href="/slots/playtech">

                        

                            <!--[ngTemplateOutlet]="gameItemContent"> -->
                                                        
                                                        <img class=" ls-is-cached lazyloaded" alt="PLAYTECH" src="/assets/game_providers_round_logo/playtech.png" data-src="/assets/game_providers_round_logo/playtech.png">
                            <!--TODO alt text-->
                            <div class="loader-b" *ngif="!showEle" style="display: none;"></div>
                            

                                                </a>

                    
        </li>
                        <li class="round_recommended_game">
                                                            <a class=" round " href="/slots/pragmatic-play">

                        

                            <!--[ngTemplateOutlet]="gameItemContent"> -->
                                                        
                                                        <img class=" ls-is-cached lazyloaded" alt="PRAGMATIC" src="/assets/game_providers_round_logo/pragmatic7b30.png" data-src="/assets/game_providers_round_logo/pragmatic7b30.png">
                            <!--TODO alt text-->
                            <div class="loader-b" *ngif="!showEle" style="display: none;"></div>
                            

                                                </a>

                    
        </li>
                        <li class="round_recommended_game">
                                                            <a class=" round " href="/slots/skywind">

                        

                            <!--[ngTemplateOutlet]="gameItemContent"> -->
                                                        
                                                        <img class=" lazyloaded" alt="SKYWIND" src="/assets/game_providers_round_logo/skywind7b30.png" data-src="/assets/game_providers_round_logo/skywind7b30.png">
                            <!--TODO alt text-->
                            <div class="loader-b" *ngif="!showEle" style="display: none;"></div>
                            

                                                </a>

                    
        </li>
                        <li class="round_recommended_game">
                                                            <a class=" round " href="/slots/spadegaming">

                        

                            <!--[ngTemplateOutlet]="gameItemContent"> -->
                                                        
                                                        <img class=" lazyloaded" alt="SPADE GAMING" src="/assets/game_providers_round_logo/spadegaming.png?v=4" data-src="/assets/game_providers_round_logo/spadegaming.png?v=4">
                            <!--TODO alt text-->
                            <div class="loader-b" *ngif="!showEle" style="display: none;"></div>
                            

                                                </a>

                    
        </li>
                        <li class="round_recommended_game">
                                                            <a class=" round " href="/fish-hunter/fachai">

                        

                            <!--[ngTemplateOutlet]="gameItemContent"> -->
                                                        
                                                        <img class=" lazyloaded" alt="FACHAI" src="/assets/game_providers_round_logo/fachai.png" data-src="/assets/game_providers_round_logo/fachai.png">
                            <!--TODO alt text-->
                            <div class="loader-b" *ngif="!showEle" style="display: none;"></div>
                            

                                                </a>

                    
        </li>
               
        </ul>
                       <ul class=" games-enter-active  games-enter-to run" data-count="14">
          
               
                                <li class="round_recommended_game">
                                                                <div class=" round login-alert">
                            

                            <!--[ngTemplateOutlet]="gameItemContent"> -->
                                                        
                                                        <img class=" ls-is-cached lazyloaded" alt="SBOBET" src="assets/game_providers_round_logo/sbo7b30.png" data-src="assets/game_providers_round_logo/sbo7b30.png">
                            <!--TODO alt text-->
                            <div class="loader-b" *ngif="!showEle" style="display: none;"></div>
                            

                                    </div>
        
        </li>
                        <li class="round_recommended_game">
                                                                <div class=" round login-alert">
                            

                            <!--[ngTemplateOutlet]="gameItemContent"> -->
                                                        
                                                        <img class=" ls-is-cached lazyloaded" alt="AG" src="/assets/game_providers_round_logo/ag7b30.png" data-src="/assets/game_providers_round_logo/ag7b30.png">
                            <!--TODO alt text-->
                            <div class="loader-b" *ngif="!showEle" style="display: none;"></div>
                            

                                    </div>
        
        </li>
                        <li class="round_recommended_game">
                                                                <div class=" round login-alert">
                            

                            <!--[ngTemplateOutlet]="gameItemContent"> -->
                                                        
                                                        <img class=" ls-is-cached lazyloaded" alt="ALLBET" src="/assets/game_providers_round_logo/allbet7b30.png" data-src="/assets/game_providers_round_logo/allbet7b30.png">
                            <!--TODO alt text-->
                            <div class="loader-b" *ngif="!showEle" style="display: none;"></div>
                            

                                    </div>
        
        </li>
                        <li class="round_recommended_game">
                                    </li><li class="round_recommended_game">
                                                                <div class=" round login-alert">
                            

                            <!--[ngTemplateOutlet]="gameItemContent"> -->
                                                        
                                                        <img class=" ls-is-cached lazyloaded" alt="EVO" src="/assets/game_providers_round_logo/evo7b30.png" data-src="/assets/game_providers_round_logo/evo7b30.png">
                            <!--TODO alt text-->
                            <div class="loader-b" *ngif="!showEle" style="display: none;"></div>
                            

                                    </div>
        
        </li>
                        <li class="round_recommended_game">
                                                            <a class=" round " href="/slots/habanero">

                        

                            <!--[ngTemplateOutlet]="gameItemContent"> -->
                                                        
                                                        <img class=" ls-is-cached lazyloaded" alt="HABANERO" src="/assets/game_providers_round_logo/habanero7b30.png" data-src="/assets/imgs/game_providers_round_logo/habanero.png?v=4">
                            <!--TODO alt text-->
                            <div class="loader-b" *ngif="!showEle" style="display: none;"></div>
                            

                                                </a>

                    
        </li>
                        <li class="round_recommended_game">
                                                                <div class=" round login-alert">
                            

                            <!--[ngTemplateOutlet]="gameItemContent"> -->
                                                        
                                                        <img class=" ls-is-cached lazyloaded" alt="SABA SPORTS" src="assets/game_providers_round_logo/sbo7b30.png" data-src="assets/game_providers_round_logo/sbo7b30.png">
                            <!--TODO alt text-->
                            <div class="loader-b" *ngif="!showEle" style="display: none;"></div>
                            

                                    </div>
        
        </li>
                        <li class="round_recommended_game">
                                                            <a class=" round " href="/slots/joker-gaming">

                        

                            <!--[ngTemplateOutlet]="gameItemContent"> -->
                                                        
                                                        <img class=" ls-is-cached lazyloaded" alt="JOKER" src="/assets/game_providers_round_logo/joker.webp" data-src="/assets/game_providers_round_logo/joker.webp">
                            <!--TODO alt text-->
                            <div class="loader-b" *ngif="!showEle" style="display: none;"></div>
                            

                                                </a>

                    
        </li>
                        <li class="round_recommended_game">
                                                            <a class=" round " href="/slots/pgsoft">

                        

                            <!--[ngTemplateOutlet]="gameItemContent"> -->
                                                        
                                                        <img class=" ls-is-cached lazyloaded" alt="PGSOFT" src="/assets/game_providers_round_logo/pgsoft7b30.png" data-src="/assets/game_providers_round_logo/pgsoft7b30.png">
                            <!--TODO alt text-->
                            <div class="loader-b" *ngif="!showEle" style="display: none;"></div>
                            

                                                </a>

                    
        </li>
                        <li class="round_recommended_game">
                                                            <a class=" round " href="/slots/playtech">

                        

                            <!--[ngTemplateOutlet]="gameItemContent"> -->
                                                        
                                                        <img class=" ls-is-cached lazyloaded" alt="PLAYTECH" src="/assets/game_providers_round_logo/playtech.png" data-src="/assets/game_providers_round_logo/playtech.png">
                            <!--TODO alt text-->
                            <div class="loader-b" *ngif="!showEle" style="display: none;"></div>
                            

                                                </a>

                    
        </li>
                        <li class="round_recommended_game">
                                                            <a class=" round " href="/slots/pragmatic-play">

                        

                            <!--[ngTemplateOutlet]="gameItemContent"> -->
                                                        
                                                        <img class="lazy" alt="PRAGMATIC" src="" data-src="/assets/game_providers_round_logo/pragmatic7b30.png">
                            <!--TODO alt text-->
                            <div class="loader-b" *ngif="!showEle"></div>
                            

                                                </a>

                    
        </li>
                        <li class="round_recommended_game">
                                                            <a class=" round " href="/slots/skywind">

                        

                            <!--[ngTemplateOutlet]="gameItemContent"> -->
                                                        
                                                        <img class="lazy" alt="SKYWIND" src="" data-src="/assets/game_providers_round_logo/skywind7b30.png">
                            <!--TODO alt text-->
                            <div class="loader-b" *ngif="!showEle"></div>
                            

                                                </a>

                    
        </li>
                        <li class="round_recommended_game">
                                                            <a class=" round " href="/slots/spadegaming">

                        

                            <!--[ngTemplateOutlet]="gameItemContent"> -->
                                                        
                                                        <img class="lazy" alt="SPADE GAMING" src="" data-src="/assets/game_providers_round_logo/spadegaming.png?v=4">
                            <!--TODO alt text-->
                            <div class="loader-b" *ngif="!showEle"></div>
                            

                                                </a>

                    
        </li>
                        <li class="round_recommended_game">
                                                            <a class=" round " href="/fish-hunter/fachai">

                        

                            <!--[ngTemplateOutlet]="gameItemContent"> -->
                                                        
                                                        <img class="lazy" alt="FACHAI" src="" data-src="/assets/game_providers_round_logo/fachai.png">
                            <!--TODO alt text-->
                            <div class="loader-b" *ngif="!showEle"></div>
                            

                                                </a>

                    
        </li>
               
        </ul>
         
    </div>
    
   </div>
   </div>
   
   
   </div>
   
   </div></section>


        </div>
        </div>


     




        
        


<section class="common-group-section">
    <div class="app-wrapper container">
             
        <section class="common-section mobile_promo">
            <div class="col-md-3 col-sm-3 col-xs-12">
    <section class="promotion-section slot-response common-section">
        <div class="row">
                     
                 <div class="col-md-12 col-sm-4 promotion-single-inner">
                      <div class="col-width-full center-position">
                          <img class="img-border-radius img-fluid ls-is-cached lazyloaded" src="/assets/imgs/WhatsApp Image 2026-02-13 at 14.32.51 (1).jpeg" data-src="/assets/imgs/WhatsApp Image 2026-02-13 at 14.32.51 (1).jpeg" alt="BONUS Mercusuar77">
                       </div>
                  </div>
                    
                 <div class="col-md-12 col-sm-4 promotion-single-inner">
                      <div class="col-width-full center-position">
                          <img class="img-border-radius img-fluid ls-is-cached lazyloaded" src="/assets/imgs/64aa529711c54_649da0775fc22_pp-mega-gacor-june-desktop.gif" data-src="/assets/imgs/64aa529711c54_649da0775fc22_pp-mega-gacor-june-desktop.gif" alt="Bonus Rollingan 1% Setiap Hari">
                       </div>
                  </div>
                        </div>
      </section>
</div>        </section>
        
                <section class="common-section last-winner">
            <!-- Last Withdrawal -->
<div class="lgo-lw-wraper common-section">
    <div class="title-wrapper widget-wrapper-title u-section-box--bg text-center">
        <h4 class="u-section-title common-title">Pemenang Terakhir</h4>               
    </div>
        <div class="popular-section last-winner">
        <div class="g-slider-wrapper  js-cycling-widthdraw gradient-bg  ">
            <div class="flex-display lw-loop-content">

                                    <ul style="position: absolute; flex-direction: column; top: -4045.13px;" data-count="20">
                                                            
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar ui avatar image ls-is-cached lazyloaded" data-src="/assets/images/lw_avathar_circle.webp" src="/assets/images/lw_avathar_circle.webp">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> mei*************** </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 150K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar ui avatar image ls-is-cached lazyloaded" data-src="/assets/images/lw_avathar_circle.webp" src="/assets/images/lw_avathar_circle.webp">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> sur**** </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 284K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar ui avatar image ls-is-cached lazyloaded" data-src="/assets/images/lw_avathar_circle.webp" src="/assets/images/lw_avathar_circle.webp">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> mei*************** </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 100K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar ui avatar image ls-is-cached lazyloaded" data-src="/assets/images/lw_avathar_circle.webp" src="/assets/images/lw_avathar_circle.webp">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> adi******** </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 102K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar ui avatar image ls-is-cached lazyloaded" data-src="/assets/images/lw_avathar_circle.webp" src="/assets/images/lw_avathar_circle.webp">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> mis**** </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 100K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar ui avatar image ls-is-cached lazyloaded" data-src="/assets/images/lw_avathar_circle.webp" src="/assets/images/lw_avathar_circle.webp">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> alb** </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 550K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar ui avatar image ls-is-cached lazyloaded" data-src="/assets/images/lw_avathar_circle.webp" src="/assets/images/lw_avathar_circle.webp">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> moh***************** </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 351K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar ui avatar image ls-is-cached lazyloaded" data-src="/assets/images/lw_avathar_circle.webp" src="/assets/images/lw_avathar_circle.webp">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> ram********* </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 142K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar ui avatar image ls-is-cached lazyloaded" data-src="/assets/images/lw_avathar_circle.webp" src="/assets/images/lw_avathar_circle.webp">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> wao************ </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 50K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar ui avatar image ls-is-cached lazyloaded" data-src="/assets/images/lw_avathar_circle.webp" src="/assets/images/lw_avathar_circle.webp">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> fir****** </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 51K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar ui avatar image ls-is-cached lazyloaded" data-src="/assets/images/lw_avathar_circle.webp" src="/assets/images/lw_avathar_circle.webp">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> ard****** </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 350K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar ui avatar image ls-is-cached lazyloaded" data-src="/assets/images/lw_avathar_circle.webp" src="/assets/images/lw_avathar_circle.webp">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> lis*********** </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 100K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar ui avatar image ls-is-cached lazyloaded" data-src="/assets/images/lw_avathar_circle.webp" src="/assets/images/lw_avathar_circle.webp">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> wao************ </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 51K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar ui avatar image ls-is-cached lazyloaded" data-src="/assets/images/lw_avathar_circle.webp" src="/assets/images/lw_avathar_circle.webp">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> lis*********** </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 80K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar ui avatar image ls-is-cached lazyloaded" data-src="/assets/images/lw_avathar_circle.webp" src="/assets/images/lw_avathar_circle.webp">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> lis*********** </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 80K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar ui avatar image ls-is-cached lazyloaded" data-src="/assets/images/lw_avathar_circle.webp" src="/assets/images/lw_avathar_circle.webp">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> dob****** </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 300K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar ui avatar image ls-is-cached lazyloaded" data-src="/assets/images/lw_avathar_circle.webp" src="/assets/images/lw_avathar_circle.webp">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> ani** </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 100K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar ui avatar image ls-is-cached lazyloaded" data-src="/assets/images/lw_avathar_circle.webp" src="/assets/images/lw_avathar_circle.webp">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> ram********* </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 183K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar ui avatar image ls-is-cached lazyloaded" data-src="/assets/images/lw_avathar_circle.webp" src="/assets/images/lw_avathar_circle.webp">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> azm* </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 63K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar ui avatar image ls-is-cached lazyloaded" data-src="/assets/images/lw_avathar_circle.webp" src="/assets/images/lw_avathar_circle.webp">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> mis*** </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 250K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                                                            
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar ui avatar image ls-is-cached lazyloaded" data-src="/assets/images/lw_avathar_circle.webp" src="/assets/images/lw_avathar_circle.webp">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> mei*************** </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 150K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar ui avatar image ls-is-cached lazyloaded" data-src="/assets/images/lw_avathar_circle.webp" src="/assets/images/lw_avathar_circle.webp">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> sur**** </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 284K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar ui avatar image ls-is-cached lazyloaded" data-src="/assets/images/lw_avathar_circle.webp" src="/assets/images/lw_avathar_circle.webp">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> mei*************** </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 100K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar ui avatar image ls-is-cached lazyloaded" data-src="/assets/images/lw_avathar_circle.webp" src="/assets/images/lw_avathar_circle.webp">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> adi******** </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 102K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar ui avatar image ls-is-cached lazyloaded" data-src="/assets/images/lw_avathar_circle.webp" src="/assets/images/lw_avathar_circle.webp">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> mis**** </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 100K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar ui avatar image ls-is-cached lazyloaded" data-src="/assets/images/lw_avathar_circle.webp" src="/assets/images/lw_avathar_circle.webp">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> alb** </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 550K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar ui avatar image ls-is-cached lazyloaded" data-src="/assets/images/lw_avathar_circle.webp" src="/assets/images/lw_avathar_circle.webp">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> moh***************** </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 351K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar ui avatar image ls-is-cached lazyloaded" data-src="/assets/images/lw_avathar_circle.webp" src="/assets/images/lw_avathar_circle.webp">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> ram********* </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 142K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar ui avatar image ls-is-cached lazyloaded" data-src="/assets/images/lw_avathar_circle.webp" src="/assets/images/lw_avathar_circle.webp">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> wao************ </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 50K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar ui avatar image ls-is-cached lazyloaded" data-src="/assets/images/lw_avathar_circle.webp" src="/assets/images/lw_avathar_circle.webp">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> fir****** </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 51K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar ui avatar image ls-is-cached lazyloaded" data-src="/assets/images/lw_avathar_circle.webp" src="/assets/images/lw_avathar_circle.webp">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> ard****** </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 350K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar ui avatar image ls-is-cached lazyloaded" data-src="/assets/images/lw_avathar_circle.webp" src="/assets/images/lw_avathar_circle.webp">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> lis*********** </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 100K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar ui avatar image ls-is-cached lazyloaded" data-src="/assets/images/lw_avathar_circle.webp" src="/assets/images/lw_avathar_circle.webp">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> wao************ </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 51K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar ui avatar image ls-is-cached lazyloaded" data-src="/assets/images/lw_avathar_circle.webp" src="/assets/images/lw_avathar_circle.webp">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> lis*********** </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 80K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar ui avatar image ls-is-cached lazyloaded" data-src="/assets/images/lw_avathar_circle.webp" src="/assets/images/lw_avathar_circle.webp">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> lis*********** </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 80K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar lazy ui avatar image" data-src="/assets/images/lw_avathar_circle.webp" src="">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> dob****** </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 300K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar lazy ui avatar image" data-src="/assets/images/lw_avathar_circle.webp" src="">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> ani** </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 100K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar lazy ui avatar image" data-src="/assets/images/lw_avathar_circle.webp" src="">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> ram********* </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 183K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar lazy ui avatar image" data-src="/assets/images/lw_avathar_circle.webp" src="">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> azm* </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 63K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar lazy ui avatar image" data-src="/assets/images/lw_avathar_circle.webp" src="">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> mis*** </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 250K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                                                            
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar lazy ui avatar image" data-src="/assets/images/lw_avathar_circle.webp" src="">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> mei*************** </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 150K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar lazy ui avatar image" data-src="/assets/images/lw_avathar_circle.webp" src="">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> sur**** </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 284K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar lazy ui avatar image" data-src="/assets/images/lw_avathar_circle.webp" src="">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> mei*************** </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 100K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar lazy ui avatar image" data-src="/assets/images/lw_avathar_circle.webp" src="">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> adi******** </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 102K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar lazy ui avatar image" data-src="/assets/images/lw_avathar_circle.webp" src="">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> mis**** </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 100K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar lazy ui avatar image" data-src="/assets/images/lw_avathar_circle.webp" src="">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> alb** </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 550K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar lazy ui avatar image" data-src="/assets/images/lw_avathar_circle.webp" src="">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> moh***************** </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 351K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar lazy ui avatar image" data-src="/assets/images/lw_avathar_circle.webp" src="">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> ram********* </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 142K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar lazy ui avatar image" data-src="/assets/images/lw_avathar_circle.webp" src="">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> wao************ </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 50K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar lazy ui avatar image" data-src="/assets/images/lw_avathar_circle.webp" src="">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> fir****** </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 51K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar lazy ui avatar image" data-src="/assets/images/lw_avathar_circle.webp" src="">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> ard****** </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 350K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar lazy ui avatar image" data-src="/assets/images/lw_avathar_circle.webp" src="">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> lis*********** </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 100K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar lazy ui avatar image" data-src="/assets/images/lw_avathar_circle.webp" src="">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> wao************ </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 51K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar lazy ui avatar image" data-src="/assets/images/lw_avathar_circle.webp" src="">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> lis*********** </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 80K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar lazy ui avatar image" data-src="/assets/images/lw_avathar_circle.webp" src="">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> lis*********** </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 80K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar lazy ui avatar image" data-src="/assets/images/lw_avathar_circle.webp" src="">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> dob****** </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 300K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar lazy ui avatar image" data-src="/assets/images/lw_avathar_circle.webp" src="">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> ani** </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 100K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar lazy ui avatar image" data-src="/assets/images/lw_avathar_circle.webp" src="">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> ram********* </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 183K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar lazy ui avatar image" data-src="/assets/images/lw_avathar_circle.webp" src="">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> azm* </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 63K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar lazy ui avatar image" data-src="/assets/images/lw_avathar_circle.webp" src="">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> mis*** </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 250K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                                                        </ul>
            </div>
        </div>
    </div>
    </div>

<!-- Last Deposit -->
<div class="lgo-lw-wraper common-section">
    <div class="title-wrapper widget-wrapper-title u-section-box--bg text-center">
        <h4 class="u-section-title common-title">Deposit Terakhir</h4>               
    </div>
        <div class="popular-section last-winner">
        <div class="g-slider-wrapper  js-cycling-widthdraw gradient-bg  ">
            <div class="flex-display lw-loop-content">
                                    <ul style="position: absolute; flex-direction: column; top: -545.125px;" data-count="20">
                                                            
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar ui avatar image ls-is-cached lazyloaded" data-src="/assets/images/lw_avathar_circle.webp" src="/assets/images/lw_avathar_circle.webp">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> bag************** </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 50K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar ui avatar image ls-is-cached lazyloaded" data-src="/assets/images/lw_avathar_circle.webp" src="/assets/images/lw_avathar_circle.webp">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> lal********************* </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 300K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar ui avatar image ls-is-cached lazyloaded" data-src="/assets/images/lw_avathar_circle.webp" src="/assets/images/lw_avathar_circle.webp">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> gus*********** </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 100K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar ui avatar image ls-is-cached lazyloaded" data-src="/assets/images/lw_avathar_circle.webp" src="/assets/images/lw_avathar_circle.webp">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> rik*********** </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 100K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar lazy ui avatar image" data-src="/assets/images/lw_avathar_circle.webp" src="">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> ded********** </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 23K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar lazy ui avatar image" data-src="/assets/images/lw_avathar_circle.webp" src="">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> Adh********************* </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 28K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar lazy ui avatar image" data-src="/assets/images/lw_avathar_circle.webp" src="">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> rik**** </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 20K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar lazy ui avatar image" data-src="/assets/images/lw_avathar_circle.webp" src="">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> dar****************** </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 100K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar lazy ui avatar image" data-src="/assets/images/lw_avathar_circle.webp" src="">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> kad****************** </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 100K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar lazy ui avatar image" data-src="/assets/images/lw_avathar_circle.webp" src="">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> ica* </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 100K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar lazy ui avatar image" data-src="/assets/images/lw_avathar_circle.webp" src="">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> nas** </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 30K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar lazy ui avatar image" data-src="/assets/images/lw_avathar_circle.webp" src="">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> nan************ </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 50K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar lazy ui avatar image" data-src="/assets/images/lw_avathar_circle.webp" src="">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> tal******************** </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 50K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar lazy ui avatar image" data-src="/assets/images/lw_avathar_circle.webp" src="">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> wan***************** </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 50K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar lazy ui avatar image" data-src="/assets/images/lw_avathar_circle.webp" src="">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> mif******* </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 50K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar lazy ui avatar image" data-src="/assets/images/lw_avathar_circle.webp" src="">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> fit****** </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 20K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar lazy ui avatar image" data-src="/assets/images/lw_avathar_circle.webp" src="">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> Nur***** </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 20K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar lazy ui avatar image" data-src="/assets/images/lw_avathar_circle.webp" src="">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> hil*********** </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 37K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar lazy ui avatar image" data-src="/assets/images/lw_avathar_circle.webp" src="">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> SUM************** </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 45K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar lazy ui avatar image" data-src="/assets/images/lw_avathar_circle.webp" src="">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> ahm************ </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 49K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                                                            
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar lazy ui avatar image" data-src="/assets/images/lw_avathar_circle.webp" src="">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> bag************** </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 50K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar lazy ui avatar image" data-src="/assets/images/lw_avathar_circle.webp" src="">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> lal********************* </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 300K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar lazy ui avatar image" data-src="/assets/images/lw_avathar_circle.webp" src="">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> gus*********** </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 100K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar lazy ui avatar image" data-src="/assets/images/lw_avathar_circle.webp" src="">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> rik*********** </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 100K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar lazy ui avatar image" data-src="/assets/images/lw_avathar_circle.webp" src="">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> ded********** </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 23K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar lazy ui avatar image" data-src="/assets/images/lw_avathar_circle.webp" src="">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> Adh********************* </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 28K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar lazy ui avatar image" data-src="/assets/images/lw_avathar_circle.webp" src="">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> rik**** </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 20K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar lazy ui avatar image" data-src="/assets/images/lw_avathar_circle.webp" src="">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> dar****************** </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 100K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar lazy ui avatar image" data-src="/assets/images/lw_avathar_circle.webp" src="">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> kad****************** </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 100K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar lazy ui avatar image" data-src="/assets/images/lw_avathar_circle.webp" src="">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> ica* </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 100K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar lazy ui avatar image" data-src="/assets/images/lw_avathar_circle.webp" src="">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> nas** </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 30K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar lazy ui avatar image" data-src="/assets/images/lw_avathar_circle.webp" src="">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> nan************ </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 50K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar lazy ui avatar image" data-src="/assets/images/lw_avathar_circle.webp" src="">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> tal******************** </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 50K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar lazy ui avatar image" data-src="/assets/images/lw_avathar_circle.webp" src="">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> wan***************** </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 50K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar lazy ui avatar image" data-src="/assets/images/lw_avathar_circle.webp" src="">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> mif******* </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 50K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar lazy ui avatar image" data-src="/assets/images/lw_avathar_circle.webp" src="">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> fit****** </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 20K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar lazy ui avatar image" data-src="/assets/images/lw_avathar_circle.webp" src="">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> Nur***** </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 20K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar lazy ui avatar image" data-src="/assets/images/lw_avathar_circle.webp" src="">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> hil*********** </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 37K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar lazy ui avatar image" data-src="/assets/images/lw_avathar_circle.webp" src="">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> SUM************** </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 45K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar lazy ui avatar image" data-src="/assets/images/lw_avathar_circle.webp" src="">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> ahm************ </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 49K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                                                            
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar lazy ui avatar image" data-src="/assets/images/lw_avathar_circle.webp" src="">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> bag************** </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 50K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar lazy ui avatar image" data-src="/assets/images/lw_avathar_circle.webp" src="">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> lal********************* </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 300K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar lazy ui avatar image" data-src="/assets/images/lw_avathar_circle.webp" src="">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> gus*********** </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 100K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar lazy ui avatar image" data-src="/assets/images/lw_avathar_circle.webp" src="">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> rik*********** </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 100K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar lazy ui avatar image" data-src="/assets/images/lw_avathar_circle.webp" src="">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> ded********** </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 23K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar lazy ui avatar image" data-src="/assets/images/lw_avathar_circle.webp" src="">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> Adh********************* </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 28K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar lazy ui avatar image" data-src="/assets/images/lw_avathar_circle.webp" src="">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> rik**** </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 20K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar lazy ui avatar image" data-src="/assets/images/lw_avathar_circle.webp" src="">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> dar****************** </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 100K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar lazy ui avatar image" data-src="/assets/images/lw_avathar_circle.webp" src="">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> kad****************** </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 100K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar lazy ui avatar image" data-src="/assets/images/lw_avathar_circle.webp" src="">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> ica* </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 100K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar lazy ui avatar image" data-src="/assets/images/lw_avathar_circle.webp" src="">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> nas** </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 30K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar lazy ui avatar image" data-src="/assets/images/lw_avathar_circle.webp" src="">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> nan************ </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 50K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar lazy ui avatar image" data-src="/assets/images/lw_avathar_circle.webp" src="">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> tal******************** </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 50K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar lazy ui avatar image" data-src="/assets/images/lw_avathar_circle.webp" src="">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> wan***************** </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 50K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar lazy ui avatar image" data-src="/assets/images/lw_avathar_circle.webp" src="">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> mif******* </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 50K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar lazy ui avatar image" data-src="/assets/images/lw_avathar_circle.webp" src="">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> fit****** </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 20K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar lazy ui avatar image" data-src="/assets/images/lw_avathar_circle.webp" src="">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> Nur***** </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 20K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar lazy ui avatar image" data-src="/assets/images/lw_avathar_circle.webp" src="">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> hil*********** </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 37K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar lazy ui avatar image" data-src="/assets/images/lw_avathar_circle.webp" src="">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> SUM************** </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 45K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="flex-start  LW-div">
                            <div>
                                    
                                <img class="wd-item__avatar lazy ui avatar image" data-src="/assets/images/lw_avathar_circle.webp" src="">
                                                            </div>
                            <div class="flex-space-btw">
                                <div class="last-winner-name">
                                        <span class="flex-display lato-font LW-font"> ahm************ </span>
                                </div>
                                <div class="last-winner-amount">
                                <span class="LW-btn lato-font"> IDR 49K </span>
                                </div>                                
                            </div>
                        </div>
                    </li>
                                                        </ul>
            </div>
        </div>
    </div>
    </div>   
        </section>

    <div class="row">
        <div class="col-md-9 col-sm-12 col-xs-12">


                
                <section class="deposit-section common-section">

                    <div class="row flex-display deposit-withdraw-div black-bg">
                      
                        <div class="deposit-withdraw-section u-section-box--bg">
                            <div class="deposit-withdraw-box float-left">
                                <div class="deposit-withdraw-top footer-deposit-withdraw">
                                    <div class="deposit-withdraw-icon">
                                        <div class="circular-progress-bar">  
                                            <svg class="progress__bar" width="60" height="60" viewBox="0 0 120 120">
                                            <linearGradient id="deposit-bar" x1="0" y1="0" x2="1" y2="1">
                                                <stop offset="45%" stop-color="#A5A3A1"></stop>
                                                <stop offset="85%" stop-color="#FFFFFF"></stop>
                                                <stop offset="100%" stop-color="#ADABA9"></stop>
                                            </linearGradient>
                                                <circle class="deposit-progress__meter" cx="60" cy="60" r="54" stroke-width="12"></circle>
                                                <circle class="deposit-progress__value" cx="60" cy="60" r="54" stroke-width="12" stroke="url(#deposit-bar)" style="stroke-dasharray: 339.292; stroke-dashoffset: 67.8584;"></circle>
                                            </svg>

                                            <i class="icon-atm footer-atn-icon"></i> 
                                        </div>
                                        
                                    </div>
                                    <div class="deposit-withdraw-content">
                                        <div>
                                            <span class="deposit-withdraw-text1 rubik-one">DEPOSIT</span>
                                            <span class="deposit-withdraw-text2">Waktu rata-rata</span>
                                            <span class="deposit-withdraw-text2 ">20 detik</span>
                                        </div>
                                        <div>
                                           
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="deposit-withdraw-box float-right">
                                <div class="deposit-withdraw-top footer-deposit-withdraw">
                                    <div class="deposit-withdraw-icon">
                                    <div class="circular-progress-bar">  
                                            <svg class="progress__bar" width="60" height="60" viewBox="0 0 120 120">
                                            <linearGradient id="withdraw-bar" x1="0" y1="0" x2="1" y2="1">
                                                <stop offset="45%" stop-color="#A5A3A1"></stop>
                                                <stop offset="85%" stop-color="#FFFFFF"></stop>
                                                <stop offset="100%" stop-color="#ADABA9"></stop>
                                            </linearGradient>
                                                <circle class="progress__meter" cx="60" cy="60" r="54" stroke-width="12"></circle>
                                                <circle class="progress__value" cx="60" cy="60" r="54" stroke-width="12" stroke="url(#withdraw-bar)" style="stroke-dasharray: 339.292; stroke-dashoffset: 169.646;"></circle>
                                            </svg>

                                            <i class="icon-coinbag footer-atn-icon"></i> 
                                        </div>                                        
                                    </div>
                                    <div class="deposit-withdraw-content">
                                        <div>
                                            <span class="deposit-withdraw-text1 rubik-one">WITHDRAW</span>
                                            <span class="deposit-withdraw-text2">Average Refill Hour</span>
                                            <span class="deposit-withdraw-text2 ">10 detik</span>
                                        </div>
                                        <div>
                                            
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="row">
                            <div class="col-lg-3 col-md-3 col-xs-12 ">
                            <div class="online-users">
                            <div class="icon-outer">
                            <div class="icon-wrp">
                                <i class="icon-stamp"></i>
                            </div>
                            </div>
                            <div class="icon-label">
                                
                                <div class="line-font text-uppercase">Pengguna</div>
                                <div class="mail-color rubik-one text-uppercase">Online</div>
                                <div class="support-font">120359</div>
                            </div>
                        
                            </div>
                            </div>
                                <div class="col-lg-9 col-md-9 col-xs-12">
                                <div class="float-left support-div" style="">
                                                                                                                                    <section class="contacts-carousel">
                                        <div id="contacts-carousel" class=" carousel slide  " data-ride="carousel">
                                            <div class="carousel-inner" role="listbox" aria-label="contacts carousel">
                                                                                                                                                                                                                                                                                                                                                            <div class="item active" role="option">
                                                        <div class="support-box">
                                                                                                                            <a target="_blank" href="https://direct.lc.chat/19926541" class="contact-item">
                                                                    <div class="support-card flex-display support-card-width">
                                                                        <div class="icon-circle-border">
                                                                            <div class="icon-div">
                                                                                <i class="icon-whatsapp"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="support-content">
                                                                            <span class="line-font"> WHATSAPP </span>
                                                                            <span class="mail-color rubik-one"> 081318111340 </span>
                                                                            <span class="support-font">24/7 Support</span>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                                                                            <a target="_blank" href="hubungikami.html" class="contact-item">
                                                                    <div class="support-card flex-display support-card-width">
                                                                        <div class="icon-circle-border">
                                                                            <div class="icon-div">
                                                                                <i class="icon-chrome"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="support-content">
                                                                            <span class="line-font"> GOOGLE </span>
                                                                            <span class="mail-color rubik-one"> Klik disini </span>
                                                                            <span class="support-font">24/7 Support</span>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                                                                    </div>
                                                    </div>
                                                                                                    <div class="item" role="option">
                                                        <div class="support-box">
                                                                                                                            <a target="_blank" href="https://t.me/Mercusuar77OFFICIAL" class="contact-item">
                                                                    <div class="support-card flex-display support-card-width">
                                                                        <div class="icon-circle-border">
                                                                            <div class="icon-div">
                                                                                <i class="icon-telegram"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="support-content">
                                                                            <span class="line-font"> TELEGRAM </span>
                                                                            <span class="mail-color rubik-one"> Goblin$88 OFFICIAL </span>
                                                                            <span class="support-font">24/7 Support</span>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                                                                    </div>
                                                    </div>
                                                                                            </div>
                                        </div>
                                    </section>
                                                    
                            </div>
                                </div>
                               
                            </div>
                        </div>
                        <div class="info-section u-section-box--bg">
                            <div class="div-card">
                                <div class="text flex-display">Cara Bermain SportsBook</div>
                                <div class="a-href-div">
                                    <a href="info.php"> Lebihnya</a>
                                </div>
                            </div>
                            <div class="div-card">
                                <div class="text flex-display">Cara Bermain Slot</div>
                                <div class="a-href-div">
                                    <a href="info.php"> Lebihnya</a>
                                </div>
                            </div>
                            <div class="div-card">
                                <div class="text flex-display">Cara Melakukan Deposit</div>
                                <div class="a-href-div">
                                    <a href="info.php"> Lebihnya</a>
                                </div>
                            </div>
                            <div class="div-card">
                                <div class="text flex-display">Cara Melakukan Withdraw </div>
                                <div class="a-href-div">
                                    <a href="info.php"> Lebihnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    </section>

        </div>
        
      
    </div>
    </div>
</section>

<script>

var control = document.getElementById('control');
var progressValue = document.querySelector('.progress__value');
var depositProgressValue = document.querySelector('.deposit-progress__value');

var RADIUS = 54;
var CIRCUMFERENCE = 2 * Math.PI * RADIUS;

function progress(value) {
    var progress = value / 100;
    var dashoffset = CIRCUMFERENCE * (1 - progress);

    console.log('progress:', value + '%', '|', 'offset:', dashoffset)

    progressValue.style.strokeDashoffset = dashoffset;
}

function despositprogress(value) {
    var progress = value / 100;
    var dashoffset = CIRCUMFERENCE * (1 - progress);

    console.log('progress:', value + '%', '|', 'offset:', dashoffset)

    depositProgressValue.style.strokeDashoffset = dashoffset;
}


progressValue.style.strokeDasharray = CIRCUMFERENCE;
depositProgressValue.style.strokeDasharray = CIRCUMFERENCE;
progress(50);
despositprogress(80);

</script>

        






    


<div class=" container">
<div class="row">
<div class="footer-content clearfix">
    <div class="col-xs-12">
    <div class=" text-left footerlink mt-2">
    <div class="small">
      Cara Pembayaran    </div>
    <div class="payment_imgs mt-2">
              <div style="display: flex;flex-wrap: wrap;gap: 10px;">
                          <img class="img-fluid" style="width: 150px; border-radius:10px" src="/assets/media.tenor.com/bank_col.jpg" alt="bank payment method">
                          <img class="img-fluid" style="width: 150px; border-radius:10px" src="/assets/media.tenor.com/ewallet_col.webp" alt="ewallet payment method">
                          <img class="img-fluid" style="width: 150px; border-radius:10px" src="/assets/media.tenor.com/pulsa_col.webp" alt="pulsa payment method">
                          <img class="img-fluid" style="width: 150px; border-radius:10px" src="/assets/media.tenor.com/cryptocurrency_col.webp" alt="crypto payment method">
                      </div>
           </div>

      <div class=" text-left footerlink mt-2">
        <div class="small">
          Browser yang Disarankan        </div>
        <ul class="mt-2 mb-2">
          <li><i class="icon-chrome browserIcons" style="font-size:1.8em;"></i></li>
          <li><i class="icon-firefox browserIcons" style="font-size:1.8em;"></i></li>
          <li><i class="icon-safari browserIcons" style="font-size:1.8em;"></i></li>
        </ul>
      </div>
</div>
      <div class="footerlink">
        <ul class="clearfix">
                      <li><a href="info.php">Tentang kami</a></li>
            <li>|</li>
            <li><a href="info.php">Info Perbankan</a></li>
                        <li>|</li>
            <li><a href="info.php">Pusat Info</a></li>
                        <li>|</li>
            <li><a href="hubungikami.html">Hubungi kami</a></li>
            
                              </ul>
              </div>
      <div class="footerlink version-sec">
        <ul class="clearfix">
          <li>
            <div class="copyright">
              @2026 Goblin$88 Seluruh hak cipta | 18+ | v1.55
            </div>
          </li>
        </ul>
      </div>
    
<div class=" text-left footerlink mt-4  ">
    <div class="small">
      Platform Penyedia Layanan    </div>
    <div class="/assets/ImageFile/mercusuar.gif">
      


             <!-- <img class="footer_logimg"  style="max-height: 50px;"   alt="kixplay" src="https://files.sitestatic.net/images/kixplay_logo310x80_2.png"> -->
       <img class="footer_logimg" style="max-height: 50px;" alt="Mercusuar77" src="assets/ImageFile/Goblin88.png">
            
    </div>
</div>

</div>
  </div>
  </div></div>

<div class="float-menu" id="home_float-menu1" style="top:62%;">
 <div style="overflow: hidden;">
    <div class="logo-wrap">
        <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 51.7 51.7"><title>Crypto Logos Logo</title><path d="M317.78,373.93a25.84,25.84,0,1,1-34.86,11,25.85,25.85,0,0,1,34.86-11h0Z" transform="translate(-280 -371)" style="fill: rgb(255, 153, 51); fill-rule: evenodd;"></path><path d="M315.86,406a13.68,13.68,0,0,1-7.7,4.2l-1.2,5.41-3.5-.78,1-4.51a13.63,13.63,0,0,1-3.52-.85l-1,4.57-3.5-.78,1.24-5.61A13.59,13.59,0,0,1,303,383.56l1.24-5.61,3.5,0.78-1,4.57a13.62,13.62,0,0,1,3.55.72l1-4.51,3.5,0.78-1.2,5.41a13.54,13.54,0,0,1,3.7,3.86,12.94,12.94,0,0,1,1.51,3.21l-5.63,1.78a8.46,8.46,0,0,0-.84-1.83A7.7,7.7,0,1,0,310,403.35a8.22,8.22,0,0,0,1.54-1.3l4.34,4h0Z" transform="translate(-280 -371)" style="fill: rgb(255, 255, 255);"></path></svg>
        </div>
    <a href="info.php">
         Pergi Ke Tutorial
    </a>
</div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function () {
    // 1. Angka awal jackpot (isi tanpa koma/titik)
    let jackpotValue = 35888162767.00;

    const jackpotElement = document.getElementById("jackpot_amount");

    if (jackpotElement) {
        // Fungsi untuk format angka jadi ribuan (Contoh: 35,888,162,767.00)
        function formatJackpot(amount) {
            return amount.toLocaleString('en-US', {
                minimumFractionDigits: 2,
                maximumFractionDigits: 2
            });
        }

        // 2. Tampilkan angka awal saat pertama dimuat
        jackpotElement.innerHTML = '<span>IDR</span> ' + formatJackpot(jackpotValue);

        // 3. Jalankan interval penambahan angka otomatis
        setInterval(function () {
            // Tambah angka acak (antara 150 sampai 1500 + desimal acak)
            let randomIncrement = (Math.random() * 1350 + 150);
            jackpotValue += randomIncrement;

            // Update tampilan elemen HTML
            jackpotElement.innerHTML = '<span>IDR</span> ' + formatJackpot(jackpotValue);
        }, 150); // Kecepatan putar angka (150ms / 0.15 detik)
    }
});
</script>


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
                            <a href="https://telegram.me/BABYnova" target="_blank"><i class="icon-telegram"></i></a>
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
<form name="loginForm" id="loginForm" class="form-horizontal" action="login.php" method="POST">
<input type="hidden" name="_token" value="8xe1UaFS4z4Wok9HUllb8i4qMYsdSgmjxJov7pBY">        
    
    <!-- Input Nama Pengguna / ID -->
    <div class="form-group" style="margin-bottom: 20px;">
        <label for="UserName" class="fs-lg" i18n="" style="color: #fff; font-weight: bold; text-shadow: 0 1px 2px rgba(0,0,0,0.8); display: block; margin-bottom: 5px;">Nama pengguna</label>
        <div class="input-container-custom" style="position: relative; width: 100%;">
            <!-- Gambar PNG Background -->
            <img src="https://cdn.jsdelivr.net/gh/Goblin887777/goblin88@main/assets/ImageFile/userid.png" alt="bg" style="width: 100%; height: auto; display: block; pointer-events: none;">
            
            <!-- Posisi Teks disesuaikan agar pas di tengah lubang tombol (geser padding kiri 70px biar nggak kena gambar mercusuar di kiri) -->
            <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; display: flex; align-items: center; padding: 20 46px 0 90px;">
                <input type="text" class="form-control input-l" maxlength="50" name="user_name" autocomplete="off" required="required" id="UserName" aria-describedby="emailHelp" placeholder="Masukkan Username" style="
                    background: transparent !important;
                    border: none !important;
                    box-shadow: none !important;
                    color: #fff !important;
                    font-size: 14px;
                    width: 100%;
                    height: 100%;
                    padding: 0;
                    outline: none;
                ">
            </div>
        </div>
    </div>
    
    <!-- Input Kata Sandi -->
    <div class="form-group" style="margin-bottom: 20px;">
        <label for="pwd--login" class="fs-lg" i18n="" style="color: #fff; font-weight: bold; text-shadow: 0 1px 2px rgba(0,0,0,0.8); display: block; margin-bottom: 5px;">Kata sandi</label>
        <div class="input-container-custom" style="position: relative; width: 100%;">
            <!-- Gambar PNG Background -->
            <img src="https://cdn.jsdelivr.net/gh/Goblin887777/goblin88@main/assets/ImageFile/pass.png" alt="bg" style="width: 100%; height: auto; display: block; pointer-events: none;">
            
            <!-- Posisi Teks dan Tombol Mata (Show/Hide Password) diatur pas -->
            <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; display: flex; align-items: center; padding: 20 40px 0 80px;">
                <input type="password" class="form-control input-l" maxlength="20" id="pwd--login" name="password" required="required" autocomplete="current-password" placeholder="Masukkan Kata Sandi" style="
                    background: transparent !important;
                    border: none !important;
                    box-shadow: none !important;
                    color: #fff !important;
                    font-size: 14px;
                    width: 100%;
                    height: 100%;
                    padding: 0;
                    outline: none;
                ">
                <!-- Tombol Mata bawaan template digeser pas di ujung kanan dalam tombol -->
                <i class="icon-eye toggle-password" input_id="#pwd--login" style="position: absolute; right: 25px; color: #00B3FF; cursor: pointer; font-size: 18px;"></i>
            </div>
        </div>
    </div>
        </div> 
        <div class="form-group "> 
          <label> 
            <input type="checkbox" id="RememberMe" name="remember_me" value="1" checked="">
            <small class="text-left"> Ingat saya </small>
        </label> 
        </div> 
      
    
            <div class="modal-footer text-center" id="footer--login-modal">
      <div class="footer-content">Tidak terdaftar?  <a href="register.php" i18n="">Daftar</a></div>
    </div>
                
        <div class="form-group" style="height:1px;background: #fff;"></div>
                    
        <div class="row  alert alert-danger message" _login-modal="" style="display: none;">
           </div>

        <div class="form-group text-center">
    <!-- Tombol Login berbasis Gambar PNG -->
    <button type="submit" class="btn-submit-img" style="
        background: none; 
        border: none; 
        padding: 0; 
        width: 100%; 
        cursor: pointer; 
        display: block;
        transition: transform 0.2s ease, filter 0.2s ease;
        outline: none;
    "
    onmouseover="this.style.transform='scale(1.02)'; this.style.filter='drop-shadow(0 4px 8px rgba(0, 179, 255, 0.5))';"
    onmouseout="this.style.transform='scale(1)'; this.style.filter='drop-shadow(0 2px 4px rgba(0, 0, 0, 0.5))';"
    onmousedown="this.style.transform='scale(0.98)';"
    >
        <!-- Ganti path src="/assets/img/btn_submit_login.png" sesuai lokasi gambar PNG kamu -->
        <img src="https://cdn.jsdelivr.net/gh/Goblin887777/goblin88@main/assets/ImageFile/loginslide.png" alt="Login" style="
            width: 100%; 
            height: auto; 
            display: block; 
            filter: drop-shadow(0 2px 4px rgba(0, 0, 0, 0.5));
        ">
    </button>
</div>
       
            <button type="button" class="btn btn-link" id="forgotPwd-btn--login-modal" i18n="">
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
            <img data-url="https://semangatMercusuar77.xyz/captcha-image-forgotpw?v=1770814942" id="forgotPwCaptchaimgpath" class="captcha_img" autocomplete="off">
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


                  <form class="form-horizontal text-center" id="pinForm" action="https://semangatMercusuar77.xyz/validate-pin" style="display: none;">

                    <div class="form-group ">
                        <h3>Kode Pin Aman</h3>
                        <p class="">Silakan Masukkan Kode Pin Aman Anda</p>
                    </div>
                    <div class="form-group ">
                        <div class="pin-in-grp" id="pin-in-grp">

                                                
                          <input type="password" maxlength="1" name="pincode[0]" required="" class="form-control pincode" style="width:16.66%">
                        
                       
                          <input type="password" maxlength="1" name="pincode[1]" required="" class="form-control pincode" style="width:16.66%">
                           
                         
                          <input type="password" maxlength="1" name="pincode[2]" required="" class="form-control pincode" style="width:16.66%">
                         
                         
                          <input type="password" maxlength="1" name="pincode[3]" required="" class="form-control pincode" style="width:16.66%">
                          
                          
                          <input type="password" maxlength="1" name="pincode[4]" required="" class="form-control pincode" style="width:16.66%">
                          
                         
                          <input type="password" maxlength="1" name="pincode[5]" required="" class="form-control pincode" style="width:16.66%">
                      
                          
                        </div>
                    </div>
                    <div class="form-group button-group">
                      <div class="row">
                                              	                            <div class="col-xs-4">
                              <input class="btn btn-primary btn-round btn-block pinkey" type="button" value="5">
                            </div>
                                                      <div class="col-xs-4">
                              <input class="btn btn-primary btn-round btn-block pinkey" type="button" value="0">
                            </div>
                                                      <div class="col-xs-4">
                              <input class="btn btn-primary btn-round btn-block pinkey" type="button" value="3">
                            </div>
                                                      <div class="col-xs-4">
                              <input class="btn btn-primary btn-round btn-block pinkey" type="button" value="4">
                            </div>
                                                      <div class="col-xs-4">
                              <input class="btn btn-primary btn-round btn-block pinkey" type="button" value="8">
                            </div>
                                                      <div class="col-xs-4">
                              <input class="btn btn-primary btn-round btn-block pinkey" type="button" value="2">
                            </div>
                                                      <div class="col-xs-4">
                              <input class="btn btn-primary btn-round btn-block pinkey" type="button" value="6">
                            </div>
                                                      <div class="col-xs-4">
                              <input class="btn btn-primary btn-round btn-block pinkey" type="button" value="1">
                            </div>
                                                      <div class="col-xs-4">
                              <input class="btn btn-primary btn-round btn-block pinkey" type="button" value="7">
                            </div>
                                                    <div class="col-xs-4">
                            <input id="back_bt" class="btn btn-warning btn-block  btn-round" type="button" value="RESET">
                          </div>
                          <div class="col-xs-4">
                            <input class="btn btn-primary btn-block  btn-round pinkey" type="button" value="9">
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

                <form class="form-horizontal text-center" id="fa2Form" action="https://semangatMercusuar77.xyz/validate-2fa" style="display: none;">

                    <div class="form-group ">
                        <h3>Masukkan Kode 2FA</h3>
                        <p class="">Masukkan kode verifikasi yang dihasilkan oleh aplikasi autentikator di ponsel Anda</p>
                    </div>
                    <div class="form-group ">
                    <h4>Kode verifikasi dari aplikasi</h4>
                        <div class="pin-in-grp" id="fa2_grp">

                                                
                        <input type="password" maxlength="1" name="pincode[1]" required="" class="form-control pincode text-center" style="width:16.66%;float:left">
                        <input type="password" maxlength="1" name="pincode[2]" required="" class="form-control pincode text-center" style="width:16.66%;float:left">
                        <input type="password" maxlength="1" name="pincode[3]" required="" class="form-control pincode text-center" style="width:16.66%;float:left">
                        <input type="password" maxlength="1" name="pincode[4]" required="" class="form-control pincode text-center" style="width:16.66%;float:left">
                        <input type="password" maxlength="1" name="pincode[5]" required="" class="form-control pincode text-center" style="width:16.66%;float:left">
                        <input type="password" maxlength="1" name="pincode[6]" required="" class="form-control pincode text-center" style="width:16.66%;float:left">
                      
                          
                        </div>
                    </div>
                    <div class="form-group text-center">
                    <button class="btn btn-info btn-round  waves-effect waves-light btn-submit" type="submit">Submit</button>
                    </div>
                    
                    <div class="row  alert alert-danger message" _login-modal="" style="display: none;">
                     </div>
                </form>
                <form class="form-horizontal text-center" id="fpwOtpVerifyForm" action="https://semangatMercusuar77.xyz/fpw-verify-otp" style="display: none;">

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
                                                
                        <input type="password" maxlength="1" name="otp_pincode[1]" required="" class="form-control fa2Code otp_pincode text-center" style="width:16.66%;float:left">
                        <input type="password" maxlength="1" name="otp_pincode[2]" required="" class="form-control fa2Code otp_pincode text-center" style="width:16.66%;float:left">
                        <input type="password" maxlength="1" name="otp_pincode[3]" required="" class="form-control fa2Code otp_pincode text-center" style="width:16.66%;float:left">
                        <input type="password" maxlength="1" name="otp_pincode[4]" required="" class="form-control fa2Code otp_pincode text-center" style="width:16.66%;float:left">
                        <input type="password" maxlength="1" name="otp_pincode[5]" required="" class="form-control fa2Code otp_pincode text-center" style="width:16.66%;float:left">
                        <input type="password" maxlength="1" name="otp_pincode[6]" required="" class="form-control fa2Code otp_pincode text-center" style="width:16.66%;float:left">
                      
                          
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
 
        window.isAuth=  false  ? true : false;
        window.onLogOut = async function(){
            if(window.iFirebase){
                await window.iFirebase.logout();
            }
            
            window.location.href="index.php";

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
            var dateNow = "2026-02-11 21:02:22";

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
                        url: "https://www.Goblin88.site/",
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
                        url: "https://www.Goblin88.site/",
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
        var curr_host = "Mercusuar77.gamer.gd";
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

<script type="text/javascript">
// --- FUNGSI PENGGANTI json_post YANG HILANG ---
function json_post(url, data) {
    return $.ajax({
        url: url,
        type: 'POST',
        data: data,
        dataType: 'json' // Memastikan hasil yang dibaca adalah format JSON
    });
}

// --- SCRIPT LOGIN LO (TETEP SAMA) ---
$(document).ready(function() {
    $('#loginForm').on('submit', function(e) {
        e.preventDefault();
        
        var form = $(this);
        var url = form.attr('action');
        var data = form.serialize();

        if(typeof showLoadingImgFn === 'function') showLoadingImgFn();

        json_post(url, data).done(function(response) {
            if(typeof removeLoadingImgFn === 'function') removeLoadingImgFn();

            if (response.status === 'success') {
                // Pakai Swal.fire kalau sweetAlert gak muncul
                if(typeof sweetAlert === 'function'){
                    sweetAlert(response.message, "success");
                } else {
                    alert(response.message);
                }
                
                setTimeout(function() {
                    window.location.href = response.url;
                }, 2000);
            } else {
                if(typeof sweetAlert === 'function'){
                    sweetAlert(response.message, "error");
                } else {
                    alert(response.message);
                }
            }
        }).fail(function(jqXHR, textStatus, errorThrown) {
            if(typeof removeLoadingImgFn === 'function') removeLoadingImgFn();
            
            // Debugging buat lo biar tau error aslinya apa
            console.log("Error Detail: " + textStatus + " - " + errorThrown);
            alert("Terjadi kesalahan sistem. Cek konsol F12.");
        });
    });
});
</script>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const rainContainer = document.getElementById("rainContainer");
    
    // Jumlah tetesan air hujan yang turun bersamaan (bisa dikurangi/ditambah)
    const maxDrops = 25; 

    function createRaindrop() {
        if (rainContainer.children.length >= maxDrops) return;

        const drop = document.createElement("div");
        drop.classList.add("raindrop");

        // Posisi horizontal acak dari kiri ke kanan layar (0% - 100%)
        drop.style.left = Math.random() * 100 + "vw";

        // Ukuran gambar air PNG acak biar kelihatan natural (misal 15px sampai 35px)
        const size = Math.random() * 20 + 15;
        drop.style.width = size + "px";
        drop.style.height = size + "px";

        // Kecepatan jatuh acak (antara 1.5 detik sampai 4 detik)
        const duration = Math.random() * 2.5 + 1.5;
        drop.style.animationDuration = duration + "s";

        // Durasi delay acak biar jatuhnya tidak barengan
        const delay = Math.random() * 3;
        drop.style.animationDelay = delay + "s";

        rainContainer.appendChild(drop);

        // Hapus elemen setelah animasinya selesai biar memori aman
        setTimeout(() => {
            drop.remove();
        }, (duration + delay) * 1000);
    }

    // Jalankan fungsi pembuatan hujan terus-menerus setiap 200ms
    setInterval(createRaindrop, 200);
});
</script>
  <script defer="" src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon="{&quot;version&quot;:&quot;2024.11.0&quot;,&quot;token&quot;:&quot;2c468e4e28b1431db61c4f36ffcfe399&quot;,&quot;r&quot;:1,&quot;server_timing&quot;:{&quot;name&quot;:{&quot;cfCacheStatus&quot;:true,&quot;cfEdge&quot;:true,&quot;cfExtPri&quot;:true,&quot;cfL4&quot;:true,&quot;cfOrigin&quot;:true,&quot;cfSpeedBrain&quot;:true},&quot;location_startswith&quot;:null}}" crossorigin="anonymous"></script>




<iframe ng-non-bindable="" frameborder="0" hspace="0" marginheight="0" marginwidth="0" scrolling="no" tabindex="-1" vspace="0" width="100%" aria-hidden="true" id="I0_1770814944191" name="I0_1770814944191" src="https://api-kixplay-live1.firebaseapp.com/__/auth/iframe?apiKey=AIzaSyA6hCmsU1Tx-_rB9st6TiXLT_M3D-qQ9aw&amp;appName=%5BDEFAULT%5D&amp;v=11.3.0&amp;eid=p&amp;usegapi=1&amp;jsh=m%3B%2F_%2Fscs%2Fabc-static%2F_%2Fjs%2Fk%3Dgapi.lb.id.JlZG7ePi4xg.O%2Fd%3D1%2Frs%3DAHpOoo9bZCvgOq1E3JiiRDLsf0QN3hR_9A%2Fm%3D__features__#id=I0_1770814944191&amp;_gfid=I0_1770814944191&amp;parent=https%3A%2F%2FsemangatMercusuar77.xyz&amp;pfname=&amp;rpctoken=26965285" style="position: absolute; top: -100px; width: 1px; height: 1px;"></iframe><div id="maxwin-overlay" style="position: fixed; top: 0px; left: 0px; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.85); display: none; justify-content: center; align-items: center; z-index: 99999;">
<div id="maxwin-modal" style="
          background: #050B06;
          border: 2px solid #D4AF37;
          border-radius: 10px;
          max-width: 800px;
          width: 90%;
          padding: 25px;
          position: relative;
          color: #FFF4C2;
          font-family: Arial, sans-serif;
          box-shadow: 0 0 20px rgba(212,175,55,0.4);
        ">
          <button id="closeMaxwin" style="
            position: absolute;
            top: 10px;
            right: 15px;
            font-size: 24px;
            color: #FFD95A;
            cursor: pointer;
            border: none;
            background: transparent;
          ">×</button>
    
          <h4 style="font-size: 14px; color:#FFD95A;">FITUR EKSKLUSIF SERVER INTERNATIONAL</h4>
          <hr style="border: 1px solid #8C6B16;">
          <h3 style="text-align:center; color:#D4AF37;">SERVER INTERNATIONAL</h3>
          <p style="text-align:center; color:#FFF4C2;">Silahkan Pilih Server:</p>
    
          <select id="serverSelect" style="
            width: 100%;
            padding: 12px;
            font-size: 16px;
            margin-bottom: 15px;
            background-color: #0B2A0F;
            color: #FFF4C2;
            border: 1px solid #D4AF37;
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
            background-color: #0B2A0F;
            height: 22px;
            border-radius: 12px;
            overflow: hidden;
            margin-bottom: 12px;
            border: 1px solid #D4AF37;
          ">
            <div id="progressBar" style="
              width: 0%;
              background: linear-gradient(90deg, #8C6B16, #D4AF37, #FFD95A);
              height: 100%;
              text-align: center;
              color: #050B06;
              font-size: 14px;
              font-weight: bold;
              text-shadow: none;
              transition: width 0.3s;
            ">0%</div>
          </div>
    
          <p id="statusText" style="text-align: center; font-weight: bold; color:#FFD95A;"></p>
    
          <div style="text-align: center;">
            <button id="btnConnect" style="
              background: linear-gradient(to bottom, #D4AF37, #8C6B16);
              color: #FFF4C2;
              border: 1px solid #FFD95A;
              padding: 10px 30px;
              border-radius: 6px;
              font-size: 14px;
              font-weight: bold;
              cursor: pointer;
              box-shadow: 0 0 12px rgba(212,175,55,0.6);
              text-shadow: 0 1px 2px rgba(5, 11, 6, 0.8);
            ">HUBUNGKAN</button>
          </div>
        </div>
      </div>
    <script>
(function() {
    // 1. Fungsi buat nyalain popup
    function nyalakanServer() {
        const overlay = document.getElementById('maxwin-overlay');
        const btnBuka = document.getElementById('btnOpenMaxwin');
        const btnConnect = document.getElementById('btnConnect');
        const btnClose = document.getElementById('closeMaxwin');

        // Pastikan overlay ada di lapisan paling depan
        if (overlay) {
            overlay.style.setProperty('z-index', '9999999', 'important');
        }

        // Fungsi buka popup (Trigger dari tombol utama)
        if (btnBuka) {
            btnBuka.onclick = function(e) {
                e.preventDefault();
                overlay.style.display = 'flex';
            };
        }

        // Fungsi tutup popup
        if (btnClose) {
            btnClose.onclick = function() {
                overlay.style.display = 'none';
            };
        }

        // Fungsi Progres Bar (Animasi Nyala)
        if (btnConnect) {
            btnConnect.onclick = function() {
                this.disabled = true;
                this.innerHTML = "MENGHUBUNGKAN...";
                
                let progress = 0;
                const bar = document.getElementById('progressBar');
                const status = document.getElementById('statusText');

                const jalan = setInterval(() => {
                    progress += 5;
                    if (bar) {
                        bar.style.width = progress + '%';
                        bar.innerText = progress + '%';
                    }
                    
                    if (status) {
                        if (progress < 40) status.innerText = "Mencari Server Gacor...";
                        else if (progress < 80) status.innerText = "Mengunci Jalur Maxwin...";
                        else status.innerText = "Koneksi Berhasil!";
                    }

                    if (progress >= 100) {
                        clearInterval(jalan);
                        setTimeout(() => {
                            // Ganti ke halaman tujuan Bos
                            window.location.href = 'slots';
                        }, 800);
                    }
                }, 100);
            };
        }
    }

    // 2. Cek setiap 1 detik (Biar kalau template refresh, tombol tetep idup)
    setInterval(nyalakanServer, 1000);
    nyalakanServer();
})();
</script></body></html>