<?php
// ============================================================
// Back-button press counter + daily Telegram summary.
// Bundled into every offer site alongside backfix.js (via the
// same qoooqle-infrastructure auto-include in build_domain_site_zip).
// Hit once per back-button press via navigator.sendBeacon().
// ============================================================

date_default_timezone_set('Europe/Kiev');

$dataFile = __DIR__ . '/backcount_data.php';
$today = date('Y-m-d');

$data = ['date' => $today, 'count' => 0, 'sent' => false];
if (file_exists($dataFile)) {
    $decoded = json_decode(file_get_contents($dataFile), true);
    if (is_array($decoded)) {
        $data = $decoded;
    }
}

// New day: reset counter and the "already sent" flag
if ($data['date'] !== $today) {
    $data = ['date' => $today, 'count' => 0, 'sent' => false];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' || isset($_GET['hit'])) {
    $data['count']++;
}

file_put_contents($dataFile, json_encode($data), LOCK_EX);

// Opportunistically send the daily summary once real traffic hits this
// endpoint past 10:35 Kyiv time — no external cron needed per site.
$targetMinutes = 10 * 60 + 35;
$nowMinutes = (int)date('H') * 60 + (int)date('i');

$integrationConfig = __DIR__ . '/integration/config.php';
$integrationHelpers = __DIR__ . '/integration/helpers.php';

if (!$data['sent'] && $nowMinutes >= $targetMinutes
    && file_exists($integrationConfig) && file_exists($integrationHelpers)) {

    require_once $integrationConfig;
    require_once $integrationHelpers;

    if (defined('TGBOT_TECHLOG_CHATID')) {
        sendTGMessage("\xF0\x9F\x94\x99 Back-button presses today ($today): {$data['count']}", TGBOT_TECHLOG_CHATID);

        $data['sent'] = true;
        file_put_contents($dataFile, json_encode($data), LOCK_EX);
    }
}

header('Content-Type: application/json');
echo json_encode(['ok' => true]);
