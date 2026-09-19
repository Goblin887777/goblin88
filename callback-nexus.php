<?php
// Set header respons agar selalu mengembalikan JSON bersih
header('Content-Type: application/json');

// 1. Ambil data JSON dari NexusGGR
$rawInput = file_get_contents('php://input');
$inputData = json_decode($rawInput, true);

if (!$inputData) {
    echo json_encode([
        'status'  => 'INVALID_PARAMETER',
        'message' => 'Permintaan tidak valid atau data kosong.'
    ]);
    exit;
}

// 2. Ekstrak data utama dari Nexus
$method      = $inputData['method'] ?? '';      // 'money_info', 'debit', 'credit'
$agentCode   = $inputData['agent_code'] ?? '';  // 'Mercusuar77'
$agentToken  = $inputData['agent_token'] ?? ''; 
$username    = $inputData['username'] ?? '';
$amount      = floatval($inputData['amount'] ?? 0);
$ticketId    = $inputData['ticket_id'] ?? '';   // ID Transaksi Unik dari game

// 3. VALIDASI KEAMANAN AGEN
$myAgentCode  = 'Rumahtua101';
$myAgentToken = '739741e705f6b250fd3897f440b848e8';

if ($agentCode !== $myAgentCode || $agentToken !== $myAgentToken) {
    echo json_encode([
        'status'  => 'INVALID_AGENT',
        'message' => 'Token agen atau kode agen salah.'
    ]);
    exit;
}

// 4. KONEKSI DATABASE (Ganti sesuai detail database VPS kamu)
$db_host = 'localhost';
$db_user = 'root';          // Ganti dengan user DB kamu
$db_pass = 'password_kamu';  // Ganti dengan pass DB kamu
$db_name = 'nama_db_kamu';  // Ganti dengan nama DB kamu

try {
    $pdo = new PDO("mysql:host=$db_host;dbname=$db_name;charset=utf8", $db_user, $db_pass, [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::CLASS_TEMPLATE          => false
    ]);
} catch (PDOException $e) {
    echo json_encode([
        'status'  => 'INTERNAL_ERROR',
        'message' => 'Gagal koneksi ke database server.'
    ]);
    exit;
}

// 5. EKSEKUSI BERDASARKAN METODE NEXUS
switch ($method) {
    
    // ==========================================
    // CASE A: CEK SALDO MEMBER
    // ==========================================
    case 'money_info':
        $stmt = $pdo->prepare("SELECT balance FROM users WHERE username = :username LIMIT 1");
        $stmt->execute([':username' => $username]);
        $user = $stmt->fetch();

        if (!$user) {
            echo json_encode(['status' => 'USER_NOT_FOUND', 'message' => 'Member tidak ditemukan.']);
            exit;
        }

        echo json_encode([
            'status'  => 'SUCCESS',
            'balance' => floatval($user['balance'])
        ]);
        exit;

    // ==========================================
    // CASE B: PASANG TARUHAN / BET (POTONG SALDO)
    // ==========================================
    case 'debit':
        try {
            // Mulai database transaction untuk mengunci saldo aman
            $pdo->beginTransaction();

            // Proteksi Ganda: Cek apakah ticket_id ini sudah pernah diproses sebelumnya?
            $chk = $pdo->prepare("SELECT balance_after FROM game_logs WHERE ticket_id = :ticket_id AND action = 'debit' LIMIT 1");
            $chk->execute([':ticket_id' => $ticketId]);
            $alreadyProcessed = $chk->fetch();

            if ($alreadyProcessed) {
                // Jika sudah pernah sukses, langsung kembalikan saldo saat itu (anti-double potong)
                $pdo->rollBack();
                echo json_encode([
                    'status'  => 'SUCCESS',
                    'balance' => floatval($alreadyProcessed['balance_after'])
                ]);
                exit;
            }

            // Ambil saldo terakhir dan kunci datanya (FOR UPDATE)
            $stmt = $pdo->prepare("SELECT id, balance FROM users WHERE username = :username FOR UPDATE");
            $stmt->execute([':username' => $username]);
            $user = $stmt->fetch();

            if (!$user) {
                $pdo->rollBack();
                echo json_encode(['status' => 'USER_NOT_FOUND']);
                exit;
            }

            $currentBalance = floatval($user['balance']);

            // Validasi apakah saldo member cukup?
            if ($currentBalance < $amount) {
                $pdo->rollBack();
                echo json_encode([
                    'status'  => 'INSUFFICIENT_BALANCE',
                    'message' => 'Saldo bosku tidak mencukupi.'
                ]);
                exit;
            }

            // Hitung saldo baru
            $newBalance = $currentBalance - $amount;

            // Update Saldo Member di tabel users
            $up = $pdo->prepare("UPDATE users SET balance = :new_balance WHERE id = :id");
            $up->execute([':new_balance' => $newBalance, ':id' => $user['id']]);

            // Catat log transaksi game biar pembukuan rapi
            $log = $pdo->prepare("INSERT INTO game_logs (username, ticket_id, action, amount, balance_before, balance_after, created_at) VALUES (:username, :ticket_id, 'debit', :amount, :before, :after, NOW())");
            $log->execute([
                ':username'  => $username,
                ':ticket_id' => $ticketId,
                ':amount'    => $amount,
                ':before'    => $currentBalance,
                ':after'     => $newBalance
            ]);

            // Commit perubahan ke database jika semua lancar
            $pdo->commit();

            echo json_encode([
                'status'  => 'SUCCESS',
                'balance' => $newBalance
            ]);

        } catch (Exception $e) {
            $pdo->rollBack();
            echo json_encode(['status' => 'INTERNAL_ERROR', 'message' => $e->getMessage()]);
        }
        exit;

    // ==========================================
    // CASE C: KEMENANGAN / REFUND (TAMBAH SALDO)
    // ==========================================
    case 'credit':
        try {
            $pdo->beginTransaction();

            // Proteksi Ganda: Cek apakah ticket_id credit ini sudah pernah masuk?
            $chk = $pdo->prepare("SELECT balance_after FROM game_logs WHERE ticket_id = :ticket_id AND action = 'credit' LIMIT 1");
            $chk->execute([':ticket_id' => $ticketId]);
            $alreadyProcessed = $chk->fetch();

            if ($alreadyProcessed) {
                $pdo->rollBack();
                echo json_encode([
                    'status'  => 'SUCCESS',
                    'balance' => floatval($alreadyProcessed['balance_after'])
                ]);
                exit;
            }

            // Ambil data user
            $stmt = $pdo->prepare("SELECT id, balance FROM users WHERE username = :username FOR UPDATE");
            $stmt->execute([':username' => $username]);
            $user = $stmt->fetch();

            if (!$user) {
                $pdo->rollBack();
                echo json_encode(['status' => 'USER_NOT_FOUND']);
                exit;
            }

            $currentBalance = floatval($user['balance']);
            $newBalance     = $currentBalance + $amount;

            // Update Tambah Saldo Member
            $up = $pdo->prepare("UPDATE users SET balance = :new_balance WHERE id = :id");
            $up->execute([':new_balance' => $newBalance, ':id' => $user['id']]);

            // Catat log credit
            $log = $pdo->prepare("INSERT INTO game_logs (username, ticket_id, action, amount, balance_before, balance_after, created_at) VALUES (:username, :ticket_id, 'credit', :amount, :before, :after, NOW())");
            $log->execute([
                ':username'  => $username,
                ':ticket_id' => $ticketId,
                ':amount'    => $amount,
                ':before'    => $currentBalance,
                ':after'     => $newBalance
            ]);

            $pdo->commit();

            echo json_encode([
                'status'  => 'SUCCESS',
                'balance' => $newBalance
            ]);

        } catch (Exception $e) {
            $pdo->rollBack();
            echo json_encode(['status' => 'INTERNAL_ERROR', 'message' => $e->getMessage()]);
        }
        exit;

    // Metode antrean lainnya dari Nexus yang tidak dikenali
    default:
        echo json_encode([
            'status'  => 'INVALID_METHOD',
            'message' => 'Metode tidak dikenali.'
        ]);
        exit;
}