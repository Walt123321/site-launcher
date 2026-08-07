<?php
$current_page = basename($_SERVER['SCRIPT_NAME'] ?? 'index.php');
if ($current_page === '') {
    $current_page = 'index.php';
}
$canonical = "{{SITE_URL}}/whitepage/" . $current_page;
$wp_domain = "{{DOMAIN}}";
$wp_initial = $wp_domain !== '' ? strtoupper(substr($wp_domain, 0, 1)) : '?';

function wp_nav_class($file, $current) {
    return $file === $current ? ' class="active"' : '';
}
?><!DOCTYPE html>
<html lang="{{LANG}}">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= $page_title ?? $wp_domain ?></title>
<meta name="description" content="<?= $meta_description ?? '' ?>">
<link rel="canonical" href="<?= $canonical ?>">
<link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>

<header class="site-header">
    <div class="container">
        <a href="./index.php" class="brand">
            <span class="brand-mark"><?= $wp_initial ?></span>
            <span><?= $wp_domain ?></span>
        </a>
        <nav class="main-nav">
            <a href="./index.php"<?= wp_nav_class('index.php', $current_page) ?>>Home</a>
            <a href="./about.php"<?= wp_nav_class('about.php', $current_page) ?>>About</a>
            <a href="./services.php"<?= wp_nav_class('services.php', $current_page) ?>>Services</a>
            <a href="./contact.php"<?= wp_nav_class('contact.php', $current_page) ?>>Contact</a>
        </nav>
    </div>
</header>
