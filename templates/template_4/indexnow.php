<?php
$key = '8f36616428754b52b21c57e6c412e697'; 
$domain = '{{DOMAIN}}'; 

$endpoint = 'https://api.indexnow.org/IndexNow';
$keyLocation = "https://{$domain}/lander/{$domain}/{$key}.txt";

$data_lander = [
    'host' => $domain,
    'key' => $key,
    'keyLocation' => $keyLocation,
    'urlList' => [
        "https://{$domain}/lander/{$domain}/sign.php",
        "https://{$domain}/lander/{$domain}/product.php",
        "https://{$domain}/lander/{$domain}/privacy.php",
        "https://{$domain}/lander/{$domain}/offer.php",
        "https://{$domain}/lander/{$domain}/faq.php",
        "https://{$domain}/lander/{$domain}/contacts.php",
        "https://{$domain}/lander/{$domain}/conditions.php"
    ]
];

$ch1 = curl_init($endpoint);
curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch1, CURLOPT_POST, true);
curl_setopt($ch1, CURLOPT_POSTFIELDS, json_encode($data_lander));
curl_setopt($ch1, CURLOPT_HTTPHEADER, ['Content-Type: application/json; charset=utf-8']);
curl_exec($ch1);
$code_lander = curl_getinfo($ch1, CURLINFO_HTTP_CODE);
curl_close($ch1);

$data_main = [
    'host' => $domain,
    'key' => $key,
    'keyLocation' => $keyLocation,
    'urlList' => [
        "https://{$domain}/" 
    ]
];

$ch2 = curl_init($endpoint);
curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch2, CURLOPT_POST, true);
curl_setopt($ch2, CURLOPT_POSTFIELDS, json_encode($data_main));
curl_setopt($ch2, CURLOPT_HTTPHEADER, ['Content-Type: application/json; charset=utf-8']);
curl_exec($ch2);
$code_main = curl_getinfo($ch2, CURLINFO_HTTP_CODE);
curl_close($ch2);

$log_message = date('Y-m-d H:i:s') . " | Main URL Code: {$code_main} | Lander URLs Code: {$code_lander}\n";
file_put_contents(__DIR__ . '/indexnow_log.txt', $log_message, FILE_APPEND);
?>