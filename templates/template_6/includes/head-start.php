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

// Same branded inline-SVG favicon as index.php, shared here so every page
// (not just the homepage) shows the correct icon instead of falling back to
// the generic static favicon.ico/favicon.svg files.
$global_svg_logo = "
<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 64 64' class='fintech-logo-svg'>
    <path d='M14 46 L26 32 L38 38 L50 16' stroke='%2310B981' stroke-width='4.5' stroke-linecap='round' stroke-linejoin='round' fill='none'/>
    <circle cx='26' cy='32' r='4' fill='%2310B981'/>
    <circle cx='38' cy='38' r='4' fill='%2310B981'/>
    <circle cx='50' cy='16' r='6' fill='%23FFF'/>
    <circle cx='50' cy='16' r='3' fill='%2310B981'/>
</svg>";

$favicon_encoded = str_replace(["\r", "\n", " ", "#"], ["", "", "%20", "%23"], $global_svg_logo);
?>

<!DOCTYPE html>
<html lang="<?= $site_lang; ?>">
<head>
    <link rel="canonical" href="<?= $canonical; ?>">

    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml;utf8,<?= $favicon_encoded ?>">
    <link rel="icon" type="image/svg+xml" sizes="64x64" href="data:image/svg+xml;utf8,<?= $favicon_encoded ?>">
    <link rel="apple-touch-icon" href="data:image/svg+xml;utf8,<?= $favicon_encoded ?>">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">