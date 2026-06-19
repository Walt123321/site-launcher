<?php
if (empty($lang_loaded)) {
    include __DIR__ . '/../lang.php';
}

include_once __DIR__ . '/../indexnow.php';

$host = $_SERVER['HTTP_HOST'];
$uri = strtok($_SERVER['REQUEST_URI'], '?'); 

if ($uri === "/lander/{$host}/index.php") {
    $canonical = 'https://' . $host . '/';
} else {
    $canonical = 'https://' . $host . $uri;
}
?>

<!DOCTYPE html>
<html lang="<?= $site_lang; ?>">
<head>
    <link rel="canonical" href="<?= $canonical; ?>">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">