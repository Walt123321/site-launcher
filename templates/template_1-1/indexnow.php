<?php
$key = 'd9e0bfff82ed4689bc346c2fdd91ca09'; 
$domain = '{{DOMAIN}}'; 

$endpoint = 'https://api.indexnow.org/IndexNow';
$keyLocation = "https://{$domain}/lander/{$domain}/{$key}.txt";

$data = [
    'host' => $domain,
    'key' => $key,
    'keyLocation' => $keyLocation,
    'urlList' => [
        "https://{$domain}/lander/{$domain}/index.php",
        "https://{$domain}/lander/{$domain}/register.php",
        "https://{$domain}/lander/{$domain}/private-policy.php",
        "https://{$domain}/lander/{$domain}/faq.php",
        "https://{$domain}/lander/{$domain}/contact.php",
        "https://{$domain}/lander/{$domain}/conditions.php",
        "https://{$domain}/lander/{$domain}/about.php"
    ]
];

$ch = curl_init($endpoint);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json; charset=utf-8']);
curl_exec($ch);
$code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

$log_message = date('Y-m-d H:i:s') . " | IndexNow Response Code: {$code}\n";
file_put_contents(__DIR__ . '/indexnow_log.txt', $log_message, FILE_APPEND);
?>