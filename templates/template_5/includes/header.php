
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet"
    >

    <link rel="stylesheet" href="./assets/css/style.css">

    <link rel="icon" type="image/png" href="./assets/img/favicon.png">

    <meta property="og:type" content="website">
    
<link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96" />
<link rel="icon" type="image/svg+xml" href="./favicon.svg" />
<link rel="shortcut icon" href="/favicon.ico" />

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

                <div class="logo-icon"> <img src="./favicon.svg" alt="<?= $site_name ?>" class="logo-image"></div>

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
