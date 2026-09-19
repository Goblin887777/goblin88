<?php
session_start();
error_reporting(0);

if (!isset($_SESSION['username'])) {
    die("Akses ditolak.");
}

define('FIREBASE_URL', 'https://firequeen-2986c-default-rtdb.asia-southeast1.firebasedatabase.app/');

$username_admin = $_SESSION['username'];
$daterange = $_POST['daterange'] ?? '';

// Ambil tanggal dari filter (format: YYYY-MM-DD)
$dates = explode(' - ', $daterange);
$start_filter = $dates[0];
$end_filter = $dates[1];

function get_all_users() {
    $url = FIREBASE_URL . "users_situs6.json";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $res = curl_exec($ch);
    curl_close($ch);
    return json_decode($res, true);
}

$all_users = get_all_users();
$downline_data = [];

if ($all_users) {
    foreach ($all_users as $uname => $data) {
        // 1. Cek apakah u_reff cocok
        if (isset($data['u_reff']) && strtoupper($data['u_reff']) == strtoupper($username_admin)) {
            
            // 2. Konversi reg_date (dd/mm/yyyy) ke format filter (yyyy-mm-dd)
            // reg_date format asli: "10/04/2026, 22:55:05"
            $raw_date = $data['reg_date'] ?? ''; 
            $just_date = explode(',', $raw_date)[0]; // Ambil "10/04/2026"
            $parts = explode('/', $just_date);
            
            if(count($parts) == 3) {
                // Susun jadi 2026-04-10
                $formatted_user_date = $parts[2] . "-" . $parts[1] . "-" . $parts[0];
                
                // 3. Bandingkan dengan rentang tanggal yang dipilih user
                if ($formatted_user_date >= $start_filter && $formatted_user_date <= $end_filter) {
                    $downline_data[] = [
                        'username' => $uname,
                        'nama' => $data['acc_name'] ?? '-',
                        'tanggal' => $just_date,
                        'status' => $data['status'] ?? 'Active'
                    ];
                }
            }
        }
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

<div class="table-responsive">
    <table id="tableDownline" class="display nowrap" style="width:100%; color: #ccc; background: #111;">
        <thead>
            <tr style="color: #ffca28;">
                <th>Username</th>
                <th>Nama Rekening</th>
                <th>Tgl Daftar</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php if (count($downline_data) > 0): ?>
                <?php foreach ($downline_data as $row): ?>
                <tr>
                    <td><?php echo strtoupper($row['username']); ?></td>
                    <td><?php echo $row['nama']; ?></td>
                    <td><?php echo $row['tanggal']; ?></td>
                    <td><span style="color: #00ff00;"><?php echo $row['status']; ?></span></td>
                </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="4" class="text-center" style="padding: 20px;">Tidak ada downline ditemukan untuk periode ini.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<script>
    if ( $.fn.DataTable.isDataTable('#tableDownline') ) {
        $('#tableDownline').DataTable().destroy();
    }
    $('#tableDownline').DataTable({
        "paging": true,
        "searching": true,
        "info": false,
        "language": { "search": "Cari Member:" }
    });
</script>