<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

// 1. KEAMANAN LOGIN
if (!isset($_SESSION['admin_login'])) { header("Location: index_admin.php"); exit(); }
if (isset($_GET['logout'])) { session_destroy(); header("Location: index_admin.php"); exit(); }

// 2. CONFIG DATABASE
$firebaseURL = "https://firequeen-2986c-default-rtdb.asia-southeast1.firebasedatabase.app/";

function fb_request($path, $method = 'GET', $data = null) {
    global $firebaseURL;
    $ch = curl_init($firebaseURL . $path . ".json");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
    if ($data) curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    $res = curl_exec($ch);
    curl_close($ch);
    return json_decode($res, true);
}

function findUserPath($username) {
    $check1 = fb_request("users_situs1/$username");
    if ($check1) return "users_situs1/$username";
    $check2 = fb_request("users/$username");
    if ($check2) return "users/$username";
    return null;
}

$menu = $_GET['m'] ?? 'dash';
$search = $_GET['q'] ?? '';

// --- ACTION ACC/REJECT ---
if (isset($_GET['action_trx'])) {
    $id = $_GET['id'];
    $type = $_GET['type']; 
    $act = $_GET['action_trx'];
    $pathTrx = ($type == 'depo') ? "deposit_pending_situs1/$id" : "withdraw_requests_situs1/$id";
    
    $trx = fb_request($pathTrx);
    if ($trx) {
        $user = $trx['username'];
        $nom = (int)($trx['nominal'] ?? $trx['amount'] ?? 0);
        
        if ($act == 'acc') {
            $userPath = findUserPath($user);
            if ($userPath) {
                $uData = fb_request($userPath);
                $newSaldo = ($type == 'depo') ? ($uData['saldo'] + $nom) : ($uData['saldo'] - $nom);
                fb_request($userPath, "PATCH", ["saldo" => $newSaldo]);
                fb_request("history/$user/$id", "PATCH", array_merge($trx, ["status" => "Success", "waktu" => date("d/m/Y, H.i.s")]));
            }
        }
        fb_request($pathTrx, "DELETE");
    }
    header("Location: admin_panel.php?m=$type"); exit();
}

// --- LOGIKA UPDATE SALDO ---
if (isset($_POST['update_saldo_btn'])) {
    $path = $_POST['user_path'];
    $nom = (int)$_POST['nominal'];
    $act = $_POST['act'];
    $uData = fb_request($path);
    if($uData) {
        $final = ($act == 'plus') ? ($uData['saldo'] + $nom) : ($uData['saldo'] - $nom);
        fb_request($path, "PATCH", ["saldo" => $final]);
    }
    header("Location: admin_panel.php?m=users"); exit();
}

$depo_pending = fb_request("deposit_pending_situs1") ?? [];
$wd_pending = fb_request("withdraw_requests_situs1") ?? [];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>BABY BOS - PINK WHITE PANEL</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap');
        :root { --pink: #ff007f; --soft-pink: #ffe6f2; --white: #ffffff; --text: #333; }
        * { margin:0; padding:0; box-sizing:border-box; font-family: 'Poppins', sans-serif; }
        body { background: #fdfdfd; color: var(--text); overflow-x: hidden; }
        
        /* Sidebar Putih Pink */
        .sidebar { position: fixed; left: -280px; width: 280px; height: 100%; background: var(--white); border-right: 3px solid var(--pink); transition: 0.4s; z-index: 1100; }
        .sidebar.active { left: 0; box-shadow: 5px 0 20px rgba(0,0,0,0.1); }
        .sidebar-header { background: var(--pink); color: #fff; padding: 30px 20px; text-align: center; }
        .sidebar a { display: flex; align-items: center; padding: 15px 25px; color: var(--text); text-decoration: none; border-bottom: 1px solid #eee; transition: 0.3s; }
        .sidebar a i { width: 30px; color: var(--pink); }
        .sidebar a.active { background: var(--soft-pink); color: var(--pink); font-weight: bold; }
        
        /* Header */
        .header { background: var(--white); height: 65px; display: flex; align-items: center; padding: 0 20px; position: sticky; top: 0; border-bottom: 2px solid var(--soft-pink); z-index: 1000; justify-content: space-between; }
        .menu-btn { font-size: 24px; color: var(--pink); cursor: pointer; }

        .container { padding: 15px; }
        .card { background: var(--white); border-radius: 12px; padding: 15px; margin-bottom: 15px; border: 1px solid var(--soft-pink); box-shadow: 0 4px 6px rgba(0,0,0,0.02); }
        .btn { padding: 12px; border-radius: 8px; border: none; font-weight: bold; cursor: pointer; text-decoration: none; display: inline-block; text-align: center; font-size: 13px; }
        .search-box { width: 100%; padding: 12px 15px; background: #fff; border: 1px solid var(--soft-pink); border-radius: 10px; margin-bottom: 15px; outline: none; font-size: 14px; }
        .search-box:focus { border-color: var(--pink); box-shadow: 0 0 5px rgba(255,0,127,0.1); }
        
        .overlay { position: fixed; inset: 0; background: rgba(0,0,0,0.4); display: none; z-index: 1050; }
        .overlay.active { display: block; }
        
        .badge { background: var(--pink); color: #fff; padding: 2px 8px; border-radius: 10px; font-size: 11px; margin-left: 5px; }
    </style>
</head>
<body>

<div class="sidebar" id="sidebar">
    <div class="sidebar-header">
        <h2 style="letter-spacing:1px;">BABY BOS</h2>
        <small>WHITE & PINK EDITION</small>
    </div>
    <a href="?m=dash" class="<?= $menu=='dash'?'active':'' ?>"><i class="fa fa-home"></i> Dashboard</a>
    <a href="?m=depo" class="<?= $menu=='depo'?'active':'' ?>"><i class="fa fa-arrow-down"></i> Deposit <span class="badge"><?= count($depo_pending) ?></span></a>
    <a href="?m=wd" class="<?= $menu=='wd'?'active':'' ?>"><i class="fa fa-arrow-up"></i> Withdraw <span class="badge"><?= count($wd_pending) ?></span></a>
    <a href="?m=users" class="<?= $menu=='users'?'active':'' ?>"><i class="fa fa-users"></i> Data Pemain</a>
    <a href="?logout=1" style="color:#ff4d4d; margin-top:30px;"><i class="fa fa-power-off"></i> Logout</a>
</div>

<div class="overlay" id="overlay" onclick="toggleMenu()"></div>

<div class="header">
    <div class="menu-btn" onclick="toggleMenu()"><i class="fa fa-bars"></i></div>
    <div style="font-weight:bold; color:var(--pink);">BABY BOS PORTAL</div>
    <div style="width:24px;"></div>
</div>

<div class="container">

    <?php if($menu != 'dash' && $menu != 'edit_user'): ?>
    <form method="GET">
        <input type="hidden" name="m" value="<?= $menu ?>">
        <input type="text" name="q" class="search-box" placeholder="Cari di halaman ini..." value="<?= $search ?>">
    </form>
    <?php endif; ?>

    <?php if($menu == 'dash'): ?>
        <div class="card" style="background: var(--soft-pink); border:none;">
            <h3 style="color:var(--pink);">Halo, Bos!</h3>
            <p style="font-size:13px; color:#888;">Kelola transaksi dengan cepat dan akurat.</p>
        </div>
        <div style="display:grid; grid-template-columns: 1fr 1fr; gap:10px;">
            <div class="card" style="text-align:center;">
                <small style="color:#aaa;">Depo Pending</small><br>
                <b style="font-size:20px; color:var(--pink);"><?= count($depo_pending) ?></b>
            </div>
            <div class="card" style="text-align:center;">
                <small style="color:#aaa;">WD Pending</small><br>
                <b style="font-size:20px; color:var(--pink);"><?= count($wd_pending) ?></b>
            </div>
        </div>

    <?php elseif($menu == 'depo'): ?>
        <h3 style="margin-bottom:15px; font-size:16px; color:var(--pink);">LIST DEPOSIT PENDING</h3>
        <?php foreach($depo_pending as $id => $d): 
            if($search && strpos(strtolower($d['username']), strtolower($search)) === false) continue; ?>
        <div class="card">
            <div style="display:flex; justify-content:space-between; margin-bottom:5px;">
                <b><?= strtoupper($d['username']) ?></b>
                <span style="color:var(--pink); font-weight:bold;">Rp <?= number_format($d['nominal']) ?></span>
            </div>
            <small style="color:#999;"><?= $d['waktu'] ?></small>
            <div style="display:flex; gap:8px; margin-top:12px;">
                <a href="?action_trx=acc&type=depo&id=<?= $id ?>" class="btn" style="background:var(--pink); flex:1; color:#fff;">SETUJUI</a>
                <a href="?action_trx=rej&type=depo&id=<?= $id ?>" class="btn" style="background:#eee; flex:1; color:#333;">TOLAK</a>
            </div>
        </div>
        <?php endforeach; ?>

    <?php elseif($menu == 'wd'): ?>
        <h3 style="margin-bottom:15px; font-size:16px; color:var(--pink);">LIST WITHDRAW PENDING</h3>
        <?php foreach($wd_pending as $id => $w): 
            if($search && strpos(strtolower($w['username']), strtolower($search)) === false) continue; ?>
        <div class="card">
            <div style="display:flex; justify-content:space-between; margin-bottom:5px;">
                <b><?= strtoupper($w['username']) ?></b>
                <span style="color:#ff4d4d; font-weight:bold;">Rp <?= number_format($w['amount'] ?? $w['nominal']) ?></span>
            </div>
            <div style="background:var(--soft-pink); padding:8px; border-radius:8px; margin:5px 0; font-size:12px;">
                <b><?= $w['bank_name'] ?></b>: <?= $w['bank_acc'] ?? $w['acc_no'] ?>
            </div>
            <div style="display:flex; gap:8px; margin-top:12px;">
                <a href="?action_trx=acc&type=wd&id=<?= $id ?>" class="btn" style="background:var(--pink); flex:1; color:#fff;">SETUJUI WD</a>
                <a href="?action_trx=rej&type=wd&id=<?= $id ?>" class="btn" style="background:#eee; flex:1; color:#333;">TOLAK</a>
            </div>
        </div>
        <?php endforeach; ?>

    <?php elseif($menu == 'users'): ?>
        <?php 
        $u1 = fb_request("users") ?? []; $u2 = fb_request("users_situs6") ?? [];
        $allUsers = array_merge($u1, $u2);
        foreach($allUsers as $uKey => $u): 
            if($search && strpos(strtolower($uKey), strtolower($search)) === false) continue; ?>
        <div class="card">
            <div style="display:flex; justify-content:space-between; align-items:center;">
                <div><b><?= strtoupper($uKey) ?></b><br><small style="color:#aaa;"><?= $u['bank_name'] ?? 'Wallet' ?></small></div>
                <div style="text-align:right;">
                    <b style="color:var(--pink);">Rp <?= number_format($u['saldo'] ?? 0) ?></b><br>
                    <a href="?m=edit_user&id=<?= $uKey ?>" style="color:var(--pink); font-size:12px; font-weight:bold;">KELOLA >></a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>

    <?php elseif($menu == 'edit_user'): 
        $id = $_GET['id']; $path = findUserPath($id); $u = fb_request($path); ?>
        <div style="display:flex; align-items:center; margin-bottom:15px; gap:10px;">
            <a href="?m=users" style="color:var(--pink);"><i class="fa fa-arrow-left"></i> Kembali</a>
        </div>
        <div class="card">
            <form method="POST">
                <input type="hidden" name="user_path" value="<?= $path ?>">
                <label style="font-size:12px; color:#aaa;">SUNTIK / KURANG SALDO</label>
                <input type="number" name="nominal" class="search-box" placeholder="0" required>
                <div style="display:flex; gap:10px;">
                    <button name="act" value="plus" type="submit" name="update_saldo_btn" class="btn" style="background:var(--pink); flex:1; color:#fff;">TAMBAH (+)</button>
                    <button name="act" value="minus" type="submit" name="update_saldo_btn" class="btn" style="background:#333; flex:1; color:#fff;">KURANG (-)</button>
                    <input type="hidden" name="update_saldo_btn" value="1">
                </div>
            </form>
        </div>
        <div class="card">
            <h4 style="font-size:14px; margin-bottom:15px; color:var(--pink);">DETAIL PROFIL</h4>
            <label style="font-size:12px;">Password</label><input type="text" class="search-box" value="<?= $u['password'] ?? '' ?>">
            <label style="font-size:12px;">Nama Rek</label><input type="text" class="search-box" value="<?= $u['bank_info']['nama_rek'] ?? $u['acc_name'] ?? '' ?>">
            <label style="font-size:12px;">No Rek</label><input type="text" class="search-box" value="<?= $u['bank_info']['no_rek'] ?? $u['acc_no'] ?? '' ?>">
            <button class="btn" style="background:var(--pink); width:100%; color:#fff;">SIMPAN PERUBAHAN</button>
        </div>
    <?php endif; ?>

</div>

<script>
    function toggleMenu() {
        document.getElementById('sidebar').classList.toggle('active');
        document.getElementById('overlay').classList.toggle('active');
    }
</script>
</body>
</html>