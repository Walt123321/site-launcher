<?php
// Keitaro's "local_file" offer serving for this domain (action_options.folder
// == "qoooqle.com") reports local_path as "/index.php" the same way it does
// for every other local-file offer here, even though this domain's real
// page logic has always lived in google.php.
//
// The context-store-and-redirect step below is a DELIBERATE DUPLICATE of
// google.php's own qoooqle_store_context_if_needed() -- not a refactor,
// not a cleanup. It's here because on this server PHP opcache does not
// appear to pick up changes to google.php without a PHP-FPM restart (no
// server access available to confirm/force that), so a fix landing only in
// google.php's copy of this logic can stay invisible indefinitely. This
// file is guaranteed to compile fresh on every deploy -- it never existed
// before today, so opcache cannot hold a stale cached copy of it the way it
// might for google.php's long-lived, previously-cached copy. Handling the
// redirect here, before google.php is even required, sidesteps the problem
// entirely regardless of whether google.php's own copy is stale.
//
// If this ever gets reconciled (e.g. after a confirmed PHP-FPM restart),
// this whole block can be deleted and replaced with a plain
// `require __DIR__ . '/google.php';` again -- google.php's own version of
// this logic is unchanged and still correct.
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

$_qq_context_keys = ['lang', 'host', 'brand', 'geo', 'register_path', 'about_path'];
$_qq_seen_context = false;
foreach ($_qq_context_keys as $_qq_key) {
    if (isset($_GET[$_qq_key]) && trim((string) $_GET[$_qq_key]) !== '') {
        $_qq_seen_context = true;
        break;
    }
}

if ($_qq_seen_context) {
    $_qq_context = isset($_SESSION['qoooqle_offer_context']) && is_array($_SESSION['qoooqle_offer_context'])
        ? $_SESSION['qoooqle_offer_context']
        : [];
    foreach ($_qq_context_keys as $_qq_key) {
        if (isset($_GET[$_qq_key]) && trim((string) $_GET[$_qq_key]) !== '') {
            $_qq_context[$_qq_key] = trim((string) $_GET[$_qq_key]);
        }
    }
    if (!empty($_qq_context)) {
        $_SESSION['qoooqle_offer_context'] = $_qq_context;
    }

    $_qq_keep_params = [];
    if (isset($_GET['q']) && trim((string) $_GET['q']) !== '') {
        $_qq_keep_params['q'] = trim((string) $_GET['q']);
    }

    $_qq_redirect_url = '/';
    if (!empty($_qq_keep_params)) {
        $_qq_redirect_url .= '?' . http_build_query($_qq_keep_params);
    }

    header('Location: ' . $_qq_redirect_url, true, 302);
    exit;
}

require __DIR__ . '/google.php';
