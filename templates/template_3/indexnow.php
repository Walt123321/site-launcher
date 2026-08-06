<?php
$key = 'd9e0bfff82ed4689bc346c2fdd91ca09'; 
$domain = '{{DOMAIN}}'; 

$flag_file = __DIR__ . '/indexnow_sent.flag';

if (file_exists($flag_file)) {
    return;
}

$endpoint = 'https://api.indexnow.org/IndexNow';
$keyLocation = "https://{$domain}/lander/{$domain}/{$key}.txt";

$data = [
    'host' => $domain,
    'key' => $key,
    'keyLocation' => $keyLocation,
    'urlList' => [
        "https://{$domain}/lander/{$domain}/index.php",
        "https://{$domain}/lander/{$domain}/sign-up.php",
        "https://{$domain}/lander/{$domain}/private-policy.php",
        "https://{$domain}/lander/{$domain}/contact.php",
        "https://{$domain}/lander/{$domain}/conditions.php",
        "https://{$domain}/lander/{$domain}/about-us.php"
    ]
];

function indexnow_send_ping($endpoint, $data, $flag_file) {
    $ch = curl_init($endpoint);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json; charset=utf-8']);
    // Bounded aggressively short: this may run synchronously (no FPM to
    // defer via fastcgi_finish_request) inside the same execution budget
    // Keitaro allows the landing page itself, so it must leave headroom.
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT_MS, 300);
    curl_setopt($ch, CURLOPT_TIMEOUT_MS, 500);
    curl_exec($ch);
    $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    $log_message = date('Y-m-d H:i:s') . " | IndexNow Response Code: {$code}\n";
    file_put_contents(__DIR__ . '/indexnow_log.txt', $log_message, FILE_APPEND);

    if ($code == 202) {
        file_put_contents($flag_file, 'done');
    }
}

if (function_exists('fastcgi_finish_request')) {
    // Finish and flush the response to the visitor first, then run the
    // (possibly slow) IndexNow ping afterwards so it never delays page render.
    register_shutdown_function(function () use ($endpoint, $data, $flag_file) {
        fastcgi_finish_request();
        indexnow_send_ping($endpoint, $data, $flag_file);
    });
} else {
    // No FPM available to defer the request — keep it synchronous but bounded
    // so a slow/unreachable endpoint can never blow past the request budget.
    indexnow_send_ping($endpoint, $data, $flag_file);
}
?>
