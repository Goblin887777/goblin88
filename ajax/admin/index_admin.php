<?php
if (session_status() === PHP_SESSION_NONE) { session_start(); }

// 1. DATA LOGIN (TANAM LANGSUNG)
$fixed_user = "admin_bos"; 
$fixed_pass = "password_bos";

$error = "";

if (isset($_POST['login_admin'])) {
    $user_input = $_POST['user'];
    $pass_input = $_POST['pass'];

    // 2. LOGIKA LOGIN PINTAR
    if ($user_input === $fixed_user && $pass_input === $fixed_pass) {
        $_SESSION['admin_login'] = true;
        $_SESSION['username'] = $fixed_user;
        $_SESSION['role'] = 'superadmin';

        // Langsung lempar ke panel utama
        header("Location: admin_panel.php");
        exit();
    } else {
        $error = "AKSES DITOLAK! ID ATAU PASSWORD SALAH.";
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
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>BABYBOS STAFF PORTAL</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Monoton&family=Rajdhani:wght@600&display=swap');
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body, html { height: 100%; background: #000; overflow: hidden; font-family: 'Rajdhani', sans-serif; }

        .bg-wrapper { position: fixed; top: 0; left: 0; width: 100%; height: 100%; z-index: 1; }
        .bg-content { 
            width: 100%; height: 100%; object-fit: cover; 
            filter: blur(8px) brightness(0.3) contrast(1.2);
            background-image: url('/last.gif');
            background-size: cover; background-position: center;
        }

        .login-card {
            position: relative; width: 85%; max-width: 350px; margin: auto; top: 50%; transform: translateY(-50%);
            padding: 40px 25px; background: rgba(255, 255, 255, 0.03); backdrop-filter: blur(15px);
            border: 1px solid rgba(255, 255, 255, 0.85); border-radius: 20px; z-index: 10; text-align: center;
            box-shadow: 0 0 30px rgba(255, 0, 127, 0.1);
        }

        h2 {
            font-family: 'Monoton', cursive; color: #ff007f; font-size: 34px;
            text-shadow: 0 0 10px #ff007f; animation: neonPulse 1.5s infinite alternate; margin-bottom: 30px;
        }
        @keyframes neonPulse { from { opacity: 0.8; } to { opacity: 1; text-shadow: 0 0 20px #ff007f; } }

        input {
            width: 100%; padding: 14px; margin-bottom: 15px; background: rgba(0,0,0,0.7);
            border: 1px solid rgba(255,0,127,0.4); border-radius: 12px; color: #fff; text-align: center; outline: none;
        }
        input:focus { border-color: #ff007f; box-shadow: 0 0 10px rgba(255,0,127,0.3); }

        button {
            width: 100%; padding: 15px; background: rgb(255, 0, 127); border: none; border-radius: 12px; color: #fff;
            font-weight: bold; font-size: 16px; cursor: pointer; text-transform: uppercase; transition: 0.3s;
        }
        button:hover { transform: scale(1.02); box-shadow: 0 0 20px rgba(255, 255, 255, 0.5); }
        .error { color: #ffffff; font-size: 13px; margin-bottom: 15px; background: rgba(255,0,127,0.1); padding: 10px; border-radius: 5px; }
    </style>
</head>
<body>
    <div class="bg-wrapper"><div class="bg-content"></div></div>
    <canvas id="rainCanvas" style="position: absolute; top:0; z-index:2; pointer-events:none;"></canvas>

    <div class="login-card">
        <p style="color:#aaa; font-size:10px; letter-spacing:3px;">RUANGAN BEBAS</p>
        <h2>BABYBOS</h2>
        <?php if($error) echo "<div class='error'>$error</div>"; ?>
        <form method="POST">
            <input type="text" name="user" placeholder="USERNAME" required>
            <input type="password" name="pass" placeholder="PASSWORD" required>
            <button type="submit" name="login_admin">GAS LOGIN</button>
        </form>
    </div>

    <script>
        const canvas = document.getElementById('rainCanvas');
        const ctx = canvas.getContext('2d');
        canvas.width = window.innerWidth; canvas.height = window.innerHeight;
        let p = [];
        for(let i=0; i<50; i++) p.push({x:Math.random()*canvas.width, y:Math.random()*canvas.height, l:Math.random()*20, v:Math.random()*5+2});
        function draw() {
            ctx.clearRect(0,0,canvas.width,canvas.height); ctx.strokeStyle='rgba(255,255,255,0.1)';
            p.forEach(m => { ctx.beginPath(); ctx.moveTo(m.x, m.y); ctx.lineTo(m.x, m.y+m.l); ctx.stroke(); m.y+=m.v; if(m.y>canvas.height) m.y=-20; });
            requestAnimationFrame(draw);
        } draw();
    </script>
</body>
</html>