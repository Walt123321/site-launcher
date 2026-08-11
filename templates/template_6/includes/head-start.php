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

// Same-page browser-loaded resources need to resolve to where the files
// are actually reachable. Under Keitaro's cloaked "local offer" hosting
// (see keitaro_cloaked_lander_hosting memory), that's $site_url/lander/
// $site_domain/... regardless of entry point (bare-root proxy or direct
// /lander/{domain}/xx/ access) — a bare $site_url path 404s on the former.
// php -S's built-in dev server has no way to serve /lander/{domain}/ as a
// separate mirror of the docroot, and $site_domain is still the {{DOMAIN}}
// placeholder locally anyway (not a resolvable host) — fall back to plain
// domain-root-relative paths there so local previews render styled.
$asset_url = (PHP_SAPI === 'cli-server') ? '' : ($site_url . '/lander/' . $site_domain);
?>

<!DOCTYPE html>
<html lang="<?= $site_lang; ?>">
<head>
    <link rel="canonical" href="<?= $canonical; ?>">

    <link rel="icon" type="image/png" href="<?= $asset_url ?>/favicon-96x96.png" sizes="96x96" />
    <link rel="shortcut icon" href="<?= $asset_url ?>/favicon.ico" />
    <link rel="apple-touch-icon" href="<?= $asset_url ?>/favicon-96x96.png" />

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">