<?php
// 1. Tampilkan error biar kelihatan kalau ada yang salah
error_reporting(E_ALL);
ini_set('display_errors', 1);

// 2. Koneksi Database
$host = "sql103.byetcluster.com";
$user = "if0_41138399";
$pass = "Mercusuar77A1";
$db   = "if0_41138399_site_db";
$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// 3. Ambil data game
$query = mysqli_query($conn, "SELECT * FROM daftar_game_demo ORDER BY id DESC");

// CEK APAKAH DATA ADA (Untuk Debug)
if (mysqli_num_rows($query) == 0) {
    echo "<h1 style='color:white; text-align:center;'>Waduh Bos, Tabel 'daftar_game_demo' Ternyata Kosong!</h1>";
    echo "<p style='color:white; text-align:center;'>Silakan isi data game dulu di phpMyAdmin.</p>";
    exit;
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
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Game Demo Gacor</title>
    <style>
        body { background: #1a1a1a; color: white; font-family: sans-serif; margin: 0; padding: 20px; }
        .container { display: flex; flex-wrap: wrap; gap: 20px; justify-content: center; }
        .game-card { 
            background: #2a2a2a; border: 2px solid #444; border-radius: 15px; 
            padding: 15px; text-align: center; width: 180px; transition: 0.3s;
        }
        .game-card:hover { border-color: #ffc107; transform: translateY(-5px); }
        .game-card img { width: 100%; border-radius: 10px; margin-bottom: 10px; }
        .game-name { font-weight: bold; font-size: 14px; margin-bottom: 15px; height: 35px; display: block; }
        .btn-main { 
            background: linear-gradient(to bottom, #ffeb3b, #ffc107); 
            color: black; border: none; padding: 10px; border-radius: 8px; 
            cursor: pointer; font-weight: bold; width: 100%; text-decoration: none; display: block;
        }
    </style>
</head>
<body>

    <h2 style="text-align: center; color: #ffc107;">PILIH GAME DEMO BOS</h2>
    <p style="text-align: center;">Total Game: <?php echo mysqli_num_rows($query); ?> Unit</p>

    <div class="container">
        <?php while($data = mysqli_fetch_assoc($query)): ?>
            <div class="game-card">
                <img src="<?php echo $data['image_url']; ?>" onerror="this.src='https://via.placeholder.com/150x150?text=No+Image'">
                
                <span class="game-name"><?php echo htmlspecialchars($data['nama_game']); ?></span>
                
                <a href="play.php?id=<?php echo $data['id']; ?>" class="btn-main">MAIN DEMO</a>
            </div>
        <?php endwhile; ?>
    </div>

</body>
</html>