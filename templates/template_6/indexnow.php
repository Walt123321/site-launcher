<?php
$key = 'd9e0bfff82ed4689bc346c2fdd91ca09';
$domain = '{{DOMAIN}}';

$flag_file = __DIR__ . '/indexnow_sent.flag';

if (file_exists($flag_file)) {
    return;
}

$endpoint = 'https://api.indexnow.org/IndexNow';
$keyLocation = "https://{$domain}/{$key}.txt";

$data = [
    'host' => $domain,
    'key' => $key,
    'keyLocation' => $keyLocation,
    'urlList' => [
        "https://{$domain}/index.php",
        "https://{$domain}/about-us.php",
        "https://{$domain}/contact.php",
        "https://{$domain}/faq.php",
        "https://{$domain}/sign.php",
        "https://{$domain}/conditions.php",
        "https://{$domain}/privacy.php"
    ]
];

$ch = curl_init($endpoint);

curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => json_encode($data, JSON_UNESCAPED_SLASHES),
    CURLOPT_HTTPHEADER => ['Content-Type: application/json; charset=utf-8'],
    CURLOPT_TIMEOUT => 10,
]);

$response = curl_exec($ch);
$code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$error = curl_error($ch);

$log_message = date('Y-m-d H:i:s') . " | IndexNow Response Code: {$code}";

if (!empty($error)) {
    $log_message .= " | cURL Error: {$error}";
}

$log_message .= "\n";

file_put_contents(__DIR__ . '/indexnow_log.txt', $log_message, FILE_APPEND);

if ($code == 202 || $code == 200) {
    file_put_contents($flag_file, 'done');
}
?>