<?php
if (empty($lang_loaded)) {
    include __DIR__ . '/../lang.php';
}

include_once __DIR__ . '/../indexnow.php';

$host = $_SERVER['HTTP_HOST'];
$uri = strtok($_SERVER['REQUEST_URI'], '?');

if ($uri === '/index.php') {
    $canonical = 'https://' . $host . '/';
} else {
    $canonical = 'https://' . $host . $uri;
}

?>

<!DOCTYPE html>
<html lang="<?= $site_lang; ?>">
<head>
    <link rel="canonical" href="<?= $canonical; ?>">

    <link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="./favicon.svg" />
    <link rel="shortcut icon" href="/favicon.ico" />

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">