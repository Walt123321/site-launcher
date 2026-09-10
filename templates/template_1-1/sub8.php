<?php
// ============================================================
// Remote-updatable aff_sub8 value.
// The generator's Google Sheet has a column ("Де знайдений") that gets
// filled in by hand AFTER a site is already live — so aff_sub8 can't be
// baked in at generation time. Instead this endpoint lets the generator
// push the value here whenever the sheet changes; integration/config.php
// reads it back (see getSub8Value()) when a lead is submitted to the CRM.
// ============================================================

$key = 'ceb40c906f0688611bf27ff4cea5712a';

header('Content-Type: application/json');

$providedKey = (string)($_GET['key'] ?? $_POST['key'] ?? '');

if (!hash_equals($key, $providedKey)) {
    http_response_code(403);
    echo json_encode(['ok' => false, 'error' => 'Invalid key']);
    exit;
}

$storedFile = __DIR__ . '/aff_sub8.txt';

if (isset($_GET['check'])) {
    $current = file_exists($storedFile) ? trim(file_get_contents($storedFile)) : null;
    echo json_encode(['ok' => true, 'value' => $current]);
    exit;
}

$value = trim((string)($_GET['value'] ?? $_POST['value'] ?? ''));

if ($value === '') {
    http_response_code(400);
    echo json_encode(['ok' => false, 'error' => 'Missing value']);
    exit;
}

file_put_contents($storedFile, $value, LOCK_EX);

echo json_encode(['ok' => true, 'value' => $value]);
