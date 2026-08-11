
<?php
// Same-page browser-loaded resources (CSS/JS/img) need to resolve to where
// the files are actually reachable. Under Keitaro's cloaked "local offer"
// hosting (see keitaro_cloaked_lander_hosting memory), the real file tree
// lives at $site_url/lander/$site_domain/... regardless of whether this
// page is being served via the bare-root proxy (which injects its own
// <base> tag, but that only helps *relative* URLs) or accessed directly
// at its real /lander/{domain}/xx/ path. A plain $site_url-absolute path
// (no /lander/ infix) 404s on the bare-root proxy; a bare relative path
// 404s on direct /xx/ access one level deep. This is the one URL form
// that works from both entry points.
// php -S's built-in dev server has no way to serve /lander/{domain}/ as a
// separate mirror of the docroot, and $site_domain is still the {{DOMAIN}}
// placeholder locally anyway (not a resolvable host) — fall back to plain
// domain-root-relative paths there so local previews render styled.
$asset_url = (PHP_SAPI === 'cli-server') ? (rtrim(dirname($_SERVER['SCRIPT_NAME'] ?? ''), '/\\')) : ($site_url . '/lander/' . $site_domain);
?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet"
    >

    <link rel="stylesheet" href="<?= $asset_url ?>/assets/css/style.css?v=<?= @filemtime(__DIR__ . '/../assets/css/style.css') ?: time() ?>">

    <link rel="icon" type="image/png" href="<?= $asset_url ?>/assets/img/favicon.png">

    <meta property="og:type" content="website">

<link rel="icon" type="image/png" href="<?= $asset_url ?>/favicon-96x96.png" sizes="96x96" />
<link rel="icon" type="image/svg+xml" href="<?= $asset_url ?>/favicon.svg" />
<link rel="shortcut icon" href="<?= $asset_url ?>/favicon.ico" />

<link rel="canonical" href="<?= $canonical ?>">


<meta property="og:site_name" content="<?= $site_name ?>">



</head>

<body>

<div class="bg-blur blur-1"></div>
<div class="bg-blur blur-2"></div>
<div class="bg-grid"></div>

<header class="header" id="header">

    <div class="container-header">

        <div class="header-wrapper">

            <a href="<?= $site_url ?>" class="logo">

                <div class="logo-icon"> <img src="<?= $asset_url ?>/favicon.svg" alt="<?= $site_name ?>" class="logo-image"></div>

                <div class="logo-text">
                    <span class="logo-title"><?= $site_name ?></span>
                    <span class="logo-subtitle"><?= $logo_subtitle ?></span>
                </div>

            </a>

            <nav class="nav">

                <a href="<?= $site_url ?>/#signals"><?= $nav_signals ?></a>
                <a href="<?= $site_url ?>/#reviews"><?= $nav_reviews ?></a>
                <a href="about.php"><?= $nav_about ?></a>
                <a href="supported-exchanges.php"><?= $nav_exchanges ?></a>
                <a href="risk-disclosure.php"><?= $nav_risk ?></a>
                <a href="<?= $site_url ?>/#faq"><?= $nav_faq ?></a>

            </nav>

            <div class="header-right">

                <div class="ai-status">
                    <span class="status-dot"></span>
                    <span><?= $header_ai_status ?></span>
                </div>

                <a href="contact.php" class="header-btn">
                    <?= $nav_contact_us ?>
                </a>

                <a href="<?= $site_url ?>/#lead-form" class="header-btn get-started-btn-custom"><?= $nav_get_started ?></a>

                <button class="burger" id="burgerBtn" aria-label="<?= $header_menu_aria ?>">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>

            </div>

        </div>

    </div>

</header>

<div class="mobile-menu" id="mobileMenu">

    <a href="<?= $site_url ?>/#signals"><?= $nav_signals ?></a>
    <a href="<?= $site_url ?>/#reviews"><?= $nav_reviews ?></a>
    <a href="about.php"><?= $nav_about ?></a>
    <a href="supported-exchanges.php"><?= $nav_exchanges_full ?></a>
    <a href="risk-disclosure.php"><?= $nav_risk_full ?></a>
    <a href="privacy.php"><?= $nav_privacy ?></a>
    <a href="terms.php"><?= $nav_terms ?></a>
    <a href="cookies.php"><?= $nav_cookies ?></a>
    <a href="aml-policy.php"><?= $nav_aml ?></a>

    <a href="contact.php" class="mobile-menu-btn">
        <?= $nav_contact_us ?>
    </a>
    <a href="<?= $site_url ?>/#lead-form" class="mobile-menu-btn get-started-btn-custom"><?= $nav_get_started ?></a>

</div>
