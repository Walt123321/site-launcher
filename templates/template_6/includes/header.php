    <header class="header">
        <div class="container">
            <a href="<?= $site_url ?>" class="logo" aria-label="<?= $site_name ?> homepage">
                <div class="logo-icon" style="display: flex; align-items: center; justify-content: center;">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" style="width: 60%; height: 60%;" aria-hidden="true">
                        <path d="M14 46 L26 32 L38 38 L50 16" stroke="#FFFFFF" stroke-width="5.5" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                        <circle cx="26" cy="32" r="4.5" fill="#FFFFFF"/>
                        <circle cx="38" cy="38" r="4.5" fill="#FFFFFF"/>
                        <circle cx="50" cy="16" r="6.5" fill="#0B0F19"/>
                        <circle cx="50" cy="16" r="3.5" fill="#FFFFFF"/>
                    </svg>
                </div>
                <span><?= $site_name ?></span>
            </a>

            <nav class="nav" id="mainNav" aria-label="<?= $header_nav_aria_label ?>">
                <a href="<?= $site_url ?>/#platform" class="nav-link"><?= $nav_platform ?></a>
                <a href="<?= $site_url ?>/#features" class="nav-link"><?= $nav_features ?></a>
                <a href="<?= $site_url ?>/#markets" class="nav-link"><?= $nav_markets ?></a>
                <a href="<?= $site_url ?>/#onboarding" class="nav-link"><?= $nav_process ?></a>
                <a href="<?= $site_url ?>/#security" class="nav-link"><?= $nav_security ?></a>
                <a href="<?= $site_url ?>/#reviews" class="nav-link"><?= $nav_reviews ?></a>
                <a href="<?= $site_url ?>/#faq" class="nav-link"><?= $nav_faq ?></a>
                <a href="about-us.php" class="nav-link"><?= $nav_about ?></a>
                <a href="contact.php" class="nav-link"><?= $nav_contact ?></a>
            </nav>

            <div style="display: flex; gap: 14px; align-items: center;">
                <button class="theme-toggle" id="themeToggle" type="button" aria-label="<?= $theme_toggle_aria_label ?>">
                   🌙  <?= $theme_toggle_text ?>
                </button>

                <a href="<?= $site_url ?>/#signup" class="btn btn-primary" style="padding: 12px 24px; font-size: 14px; border-radius: 10px;">
                    <?= $header_cta_button ?>
                </a>

                <button class="burger" id="burgerBtn" type="button" aria-label="<?= $burger_menu_aria_label ?>">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
    </header>
