<?php
// ============================================================
// Back-button press counter.
// Bundled into every offer site alongside backfix.js (via the
// same qoooqle-infrastructure auto-include in build_domain_site_zip).
// Hit once per back-button press via navigator.sendBeacon().
//
// The bot server pulls this once a day (?report=1&secret=...&date=...)
// to fold it into the morning leads report — this endpoint never talks
// to Telegram itself, so nothing needs an inbound port opened anywhere.
//
// Keeps today's and yesterday's counters side by side: the cron pull
// runs at 10:35 Kyiv time, and by then a domain may have already taken
// its first hit of the new day, which would otherwise wipe out
// yesterday's final count before the bot gets a chance to read it.
// ============================================================

date_default_timezone_set('Europe/Kiev');

$dataFile = __DIR__ . '/backcount_data.php';
$today = date('Y-m-d');

$data = ['today' => ['date' => $today, 'count' => 0], 'yesterday' => ['date' => '', 'count' => 0]];
if (file_exists($dataFile)) {
    $decoded = json_decode(file_get_contents($dataFile), true);
    if (is_array($decoded) && isset($decoded['today']['date'])) {
        $data = $decoded;
    }
}

// New day: roll today's totals into yesterday before resetting
if ($data['today']['date'] !== $today) {
    $data['yesterday'] = $data['today'];
    $data['today'] = ['date' => $today, 'count' => 0];
}

if (isset($_GET['report'])) {
    $integrationConfig = __DIR__ . '/integration/config.php';
    $secretOk = false;

    if (file_exists($integrationConfig)) {
        require_once $integrationConfig;
        $secretOk = defined('BACKCOUNT_REPORT_SECRET')
            && BACKCOUNT_REPORT_SECRET !== ''
            && hash_equals(BACKCOUNT_REPORT_SECRET, (string)($_GET['secret'] ?? ''));
    }

    header('Content-Type: application/json');
    if (!$secretOk) {
        http_response_code(403);
        echo json_encode(['ok' => false]);
        exit;
    }

    $wantDate = $_GET['date'] ?? $data['yesterday']['date'];
    if ($data['today']['date'] === $wantDate) {
        $count = $data['today']['count'];
    } elseif ($data['yesterday']['date'] === $wantDate) {
        $count = $data['yesterday']['count'];
    } else {
        $count = 0;
    }

    echo json_encode(['ok' => true, 'date' => $wantDate, 'count' => $count]);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' || isset($_GET['hit'])) {
    $data['today']['count']++;
    file_put_contents($dataFile, json_encode($data), LOCK_EX);
}

header('Content-Type: application/json');
echo json_encode(['ok' => true]);
