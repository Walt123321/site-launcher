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

    <!-- Real, fetchable favicon file (not a data: URI) — Google's own
         favicon-fetch service (used by the SERP decoy page's knowledge
         panel) can only discover an icon this way, not via inline data URIs. -->
    <link rel="icon" type="image/svg+xml" href="./favicon.svg">
    <link rel="apple-touch-icon" href="./favicon.svg">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">