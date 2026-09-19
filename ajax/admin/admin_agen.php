<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

// 1. KEAMANAN LOGIN AGEN
if (!isset($_SESSION['admin_login']) || $_SESSION['role'] !== 'agen') { 
    header("Location: index_admin.php"); 
    exit(); 
}
if (isset($_GET['logout'])) { session_destroy(); header("Location: index_admin.php"); exit(); }

// 2. KONEKSI DATABASE
$host = "sql103.byetcluster.com";
$user = "if0_41138399";
$pass = "Mercusuar77A1";
$db   = "if0_41138399_site_db";
$conn = mysqli_connect($host, $user, $pass, $db);
if (!$conn) { die("Koneksi gagal: " . mysqli_connect_error()); }

// --- VARIABEL GLOBAL ---
$menu = $_GET['m'] ?? 'dash';
$search = $_REQUEST['q'] ?? '';
$sk = mysqli_real_escape_string($conn, $search);

// --- FUNGSI SENSOR (KEAMANAN AGEN) ---
function sensor($str) {
    if(empty($str) || strlen($str) < 4) return (string)$str;
    $str = (string)$str;
    $awal = substr($str, 0, 2); 
    $akhir = substr($str, -2);
    return $awal . "xxxxx" . $akhir;
}

// 3. LOGIKA ENGINE (ACC TRX, INJECT, EDIT)

// --- APPROVE / REJECT TRANSAKSI ---
if (isset($_GET['action_trx'])) {
    $id_t = mysqli_real_escape_string($conn, $_GET['id']);
    $act = $_GET['action_trx'];
    $q_trx = mysqli_query($conn, "SELECT * FROM transaksi WHERE id='$id_t'");
    $d = mysqli_fetch_assoc($q_trx);
    if ($d) {
        $u = $d['username']; $n = (int)$d['nominal'];
        $b = (isset($d['bonus']) && is_numeric($d['bonus'])) ? (int)$d['bonus'] : 0; 
        if ($act == 'acc') {
            if ($d['tipe'] == 'depo') { 
                $total_masuk = $n + $b;
                mysqli_query($conn, "UPDATE users SET saldo = saldo + $total_masuk WHERE username = '$u'"); 
            }
            mysqli_query($conn, "UPDATE transaksi SET status = 'success' WHERE id = '$id_t'");
        } else {
            if ($d['tipe'] == 'wd') { mysqli_query($conn, "UPDATE users SET saldo = saldo + $n WHERE username = '$u'"); }
            mysqli_query($conn, "UPDATE transaksi SET status = 'reject' WHERE id = '$id_t'");
        }
    }
    header("Location: admin_agen.php?m=trx"); exit();
}

// --- INJECT SALDO ---
if (isset($_POST['do_inject'])) {
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $tipe = $_POST['tipe_inject'];
    $amt = (int)$_POST['nominal'];
    $sql = ($tipe == 'minus') ? "UPDATE users SET saldo = saldo - $amt WHERE id='$id'" : "UPDATE users SET saldo = saldo + $amt WHERE id='$id'";
    mysqli_query($conn, $sql);
    header("Location: admin_agen.php?m=inject_list"); exit();
}

// --- UPDATE USER (DENGAN LOGIKA SENSOR) ---
if (isset($_POST['do_save_profil'])) {
    $id = $_POST['id']; 
    $nama = mysqli_real_escape_string($conn, $_POST['acc_name']); 
    $bank = mysqli_real_escape_string($conn, $_POST['bank_name']); 
    $norek = mysqli_real_escape_string($conn, $_POST['acc_no']); 
    $wa = mysqli_real_escape_string($conn, $_POST['mobile_no']); 
    $psw = mysqli_real_escape_string($conn, $_POST['password']);

    // Logika: Jangan update kolom jika masih mengandung 'xxxxx' (berarti agen tidak mengubah data asli)
    $updates = "acc_name='$nama', bank_name='$bank', password='$psw'";
    if (strpos($norek, 'xxxxx') === false && !empty($norek)) { $updates .= ", acc_no='$norek'"; }
    if (strpos($wa, 'xxxxx') === false && !empty($wa)) { $updates .= ", mobile_no='$wa'"; }

    mysqli_query($conn, "UPDATE users SET $updates WHERE id='$id'");
    header("Location: admin_agen.php?m=edit_list"); exit();
}

// 4. DATA STATISTIK DASHBOARD
$count_p = mysqli_num_rows(mysqli_query($conn, "SELECT id FROM transaksi WHERE status='pending'"));
$res_in = mysqli_fetch_assoc(mysqli_query($conn, "SELECT SUM(nominal) as total FROM transaksi WHERE tipe='depo' AND status='success'"))['total'] ?? 0;
$res_out = mysqli_fetch_assoc(mysqli_query($conn, "SELECT SUM(nominal) as total FROM transaksi WHERE tipe='wd' AND status='success'"))['total'] ?? 0;
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BABY BOS - AGEN PANEL</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&family=Rajdhani:wght@500;700&display=swap');
        :root { --pink: #ff007f; --cyan: #00d4ff; --dark: #08080a; --gold: #f1d900; --green: #00ff88; }
        * { margin:0; padding:0; box-sizing:border-box; font-family: 'Rajdhani', sans-serif; }
        body { background: var(--dark); color: #fff; overflow-x: hidden; }
        .header { background: #000; padding: 10px 20px; border-bottom: 2px solid var(--gold); display: flex; align-items: center; justify-content: space-between; position: sticky; top:0; z-index: 100; height: 70px; }
        .sidebar { position: fixed; top: 0; left: -260px; width: 260px; height: 100%; background: #000; border-right: 1px solid var(--gold); transition: 0.3s; z-index: 200; }
        .sidebar.active { left: 0; }
        .sidebar a { display: block; padding: 15px 20px; color: #888; text-decoration: none; border-bottom: 1px solid #111; font-weight: bold; }
        .sidebar a.active { color: #fff; background: rgba(241, 217, 0, 0.1); border-left: 4px solid var(--gold); }
        .overlay { position: fixed; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.8); display:none; z-index:150; }
        .container { padding: 20px; max-width: 1100px; margin: auto; }
        .card { background: #111; border-radius: 12px; padding: 20px; border: 1px solid #222; margin-bottom: 20px; }
        .card-header { border-bottom: 1px solid #222; padding-bottom: 10px; margin-bottom: 15px; color: var(--gold); font-family: 'Orbitron'; font-size: 14px; }
        table { width: 100%; border-collapse: collapse; }
        th { text-align: left; padding: 12px; color: var(--gold); border-bottom: 2px solid #222; }
        td { padding: 12px; border-bottom: 1px solid #222; }
        .btn-act { padding: 8px 15px; border-radius: 5px; font-weight: bold; text-decoration: none; color: #000; font-size: 12px; cursor: pointer; border: none; display: inline-block; }
        .input-box { width:100%; padding:10px; background:#000; border:1px solid #333; color:#fff; border-radius:8px; margin-bottom:15px; }
        .img-preview { width: 100px; height: 100px; object-fit: cover; border: 2px solid var(--gold); border-radius: 8px; }
    </style>
</head>
<body onload="startTime()">

<div class="sidebar" id="sidebar">
    <div style="padding:40px 20px; text-align:center; font-family:'Orbitron'; color:var(--gold); font-size:20px;">BABY BOS <br><small style="font-size:10px; color:#fff;">AGEN PANEL</small></div>
    <a href="?m=dash" class="<?= $menu=='dash'?'active':'' ?>"><i class="fa fa-th-large"></i> DASHBOARD</a>
    <a href="?m=trx" class="<?= $menu=='trx'?'active':'' ?>"><i class="fa fa-wallet"></i> PENDING TRX (<?= $count_p ?>)</a>
    <a href="?m=inject_list" class="<?= $menu=='inject_list'?'active':'' ?>"><i class="fa fa-coins"></i> INJECT SALDO</a>
    <a href="?m=edit_list" class="<?= $menu=='edit_list'?'active':'' ?>"><i class="fa fa-users-cog"></i> MANAGE USERS</a>
    <a href="?logout=1" style="color:#ff4d4d; margin-top:50px;"><i class="fa fa-sign-out-alt"></i> LOGOUT</a>
</div>
<div class="overlay" id="overlay" onclick="toggleMenu()"></div>

<div class="header">
    <i class="fa fa-bars" onclick="toggleMenu()" style="cursor:pointer; color:var(--gold); font-size:24px;"></i>
    <form method="GET">
        <input type="hidden" name="m" value="<?= $menu ?>">
        <input type="text" name="q" placeholder="Cari Member..." value="<?= $search ?>" style="padding: 8px 15px; border-radius: 20px; background: #111; border: 1px solid var(--gold); color: #fff;">
    </form>
    <div id="clock" style="font-family:'Orbitron'; color:var(--gold);">00:00:00</div>
</div>

<div class="container">

    <?php if($menu == 'dash'): ?>
        <div style="display:grid; grid-template-columns: repeat(3, 1fr); gap:15px; margin-bottom:20px;">
            <div class="card" style="text-align:center;"><small>DEPOSIT</small><br><b style="color:var(--green);">Rp <?= number_format($res_in) ?></b></div>
            <div class="card" style="text-align:center;"><small>WITHDRAW</small><br><b style="color:#ff4d4d;">Rp <?= number_format($res_out) ?></b></div>
            <div class="card" style="text-align:center;"><small>PROFIT</small><br><b style="color:var(--cyan);">Rp <?= number_format($res_in - $res_out) ?></b></div>
        </div>
        <div class="card">
            <div class="card-header">10 USER TERBARU (SENSORS ON)</div>
            <table>
                <thead><tr><th>USER</th><th>SALDO</th><th>BANK</th></tr></thead>
                <tbody>
                    <?php $q = mysqli_query($conn, "SELECT * FROM users ORDER BY id DESC LIMIT 10"); while($r = mysqli_fetch_assoc($q)): ?>
                    <tr>
                        <td><b style="color:var(--cyan);"><?= strtoupper($r['username']) ?></b></td>
                        <td style="color:var(--green);">Rp <?= number_format($r['saldo']) ?></td>
                        <td><?= $r['bank_name'] ?> (<?= sensor($r['acc_no']) ?>)</td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>

    <?php elseif($menu == 'trx'): ?>
        <h2 style="color:var(--gold); margin-bottom:15px;">PENDING TRANSAKSI (AGEN)</h2>
        <?php $q_trx = mysqli_query($conn, "SELECT t.*, u.acc_no, u.bank_name FROM transaksi t JOIN users u ON t.username = u.username WHERE t.status='pending' ORDER BY t.id DESC");
        while($t = mysqli_fetch_assoc($q_trx)): ?>
        <div class="card">
            <div style="display:flex; justify-content:space-between; align-items:center;">
                <div style="flex:1;">
                    <b style="font-size:18px;"><?= strtoupper($t['username']) ?></b> <span style="color:var(--cyan); border:1px solid; padding:2px 5px; font-size:10px;"><?= strtoupper($t['tipe']) ?></span><br>
                    <small style="color:#666;"><?= $t['waktu'] ?></small><br>
                    <div style="margin-top:5px; color:var(--gold); font-size:12px;"><b>Rek:</b> <?= $t['bank_name'] ?> - <?= sensor($t['acc_no']) ?></div>
                </div>
                <div style="flex:1; text-align:center;">
                    <?php if(!empty($t['bukti_foto'])): ?>
                        <a href="../upload/<?= $t['bukti_foto'] ?>" target="_blank"><img src="../upload/<?= $t['bukti_foto'] ?>" class="img-preview"></a>
                    <?php endif; ?>
                </div>
                <div style="flex:1; text-align:right;">
                    <b style="color:var(--green); font-size:22px;">Rp <?= number_format($t['nominal']) ?></b>
                </div>
            </div>
            <div style="margin-top:15px; display:flex; gap:10px;">
                <a href="?action_trx=acc&id=<?= $t['id'] ?>" class="btn-act" style="background:var(--green); flex:1; text-align:center;">APPROVE</a>
                <a href="?action_trx=rej&id=<?= $t['id'] ?>" class="btn-act" style="background:#ff4d4d; color:#fff; flex:1; text-align:center;">REJECT</a>
            </div>
        </div>
        <?php endwhile; ?>

    <?php elseif($menu == 'inject_list'): ?>
        <h2 style="color:var(--green); margin-bottom:15px;">INJECT SALDO</h2>
        <div class="card">
            <table>
                <thead><tr><th>USER</th><th>SALDO</th><th>AKSI</th></tr></thead>
                <tbody>
                    <?php $q_u = mysqli_query($conn, "SELECT * FROM users WHERE username LIKE '%$sk%' ORDER BY id DESC");
                    while($u = mysqli_fetch_assoc($q_u)): ?>
                    <tr><td><?= strtoupper($u['username']) ?></td><td style="color:var(--green);">Rp <?= number_format($u['saldo']) ?></td><td><a href="?m=go_inject&id=<?= $u['id'] ?>" class="btn-act" style="background:var(--cyan);">INJECT</a></td></tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>

    <?php elseif($menu == 'go_inject'): 
        $u_data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM users WHERE id='".(int)$_GET['id']."'")); ?>
        <div class="card" style="max-width:400px; margin:auto;">
            <div class="card-header">INJECT: <?= $u_data['username'] ?></div>
            <form method="POST"><input type="hidden" name="id" value="<?= $u_data['id'] ?>">
                <select name="tipe_inject" class="input-box"><option value="plus">TAMBAH (+)</option><option value="minus">POTONG (-)</option></select>
                <input type="number" name="nominal" class="input-box" placeholder="Nominal" required>
                <button type="submit" name="do_inject" class="btn-act" style="background:var(--green); width:100%;">PROSES</button>
            </form>
        </div>

    <?php elseif($menu == 'edit_list'): ?>
        <h2 style="color:var(--cyan); margin-bottom:15px;">MANAGE USERS (SENSORS ON)</h2>
        <div class="card">
            <table>
                <thead><tr><th>USER/PASS</th><th>BANK</th><th>AKSI</th></tr></thead>
                <tbody>
                    <?php $q_user = mysqli_query($conn, "SELECT * FROM users WHERE username LIKE '%$sk%' ORDER BY id DESC");
                    while($r = mysqli_fetch_assoc($q_user)): ?>
                    <tr>
                        <td><b><?= $r['username'] ?></b><br><small><?= $r['password'] ?></small></td>
                        <td><?= $r['bank_name'] ?><br><small><?= sensor($r['acc_no']) ?></small></td>
                        <td><a href="?m=go_edit&id=<?= $r['id'] ?>" style="color:var(--cyan);"><i class="fa fa-edit"></i> EDIT</a></td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>

    <?php elseif($menu == 'go_edit'): 
        $data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM users WHERE id='".(int)$_GET['id']."'")); ?>
        <div class="card" style="max-width:500px; margin:auto;">
            <div class="card-header">EDIT USER: <?= $data['username'] ?></div>
            <form method="POST"><input type="hidden" name="id" value="<?= $data['id'] ?>">
                <label style="font-size:10px;">NAMA REK</label>
                <input type="text" name="acc_name" class="input-box" value="<?= $data['acc_name'] ?>">
                <label style="font-size:10px;">BANK</label>
                <input type="text" name="bank_name" class="input-box" value="<?= $data['bank_name'] ?>">
                <label style="font-size:10px;">NO REK (SAMPEL)</label>
                <input type="text" name="acc_no" class="input-box" value="<?= sensor($data['acc_no']) ?>" onfocus="if(this.value.includes('xxxxx'))this.value=''">
                <label style="font-size:10px;">WA (SAMPEL)</label>
                <input type="text" name="mobile_no" class="input-box" value="<?= sensor($data['mobile_no']) ?>" onfocus="if(this.value.includes('xxxxx'))this.value=''">
                <label style="font-size:10px;">PASSWORD</label>
                <input type="text" name="password" class="input-box" value="<?= $data['password'] ?>">
                <button type="submit" name="do_save_profil" class="btn-act" style="background:var(--gold); width:100%;">SIMPAN PERUBAHAN</button>
            </form>
        </div>
    <?php endif; ?>

</div>

<script>
    function startTime() {
        const today = new Date();
        let h = today.getHours(); let m = today.getMinutes(); let s = today.getSeconds();
        h = h < 10 ? "0"+h : h; m = m < 10 ? "0"+m : m; s = s < 10 ? "0"+s : s;
        document.getElementById('clock').innerHTML = h + ":" + m + ":" + s;
        setTimeout(startTime, 1000);
    }
    function toggleMenu() {
        document.getElementById('sidebar').classList.toggle('active');
        document.getElementById('overlay').style.display = (document.getElementById('overlay').style.display == 'block') ? 'none' : 'block';
    }
</script>
</body>
</html>