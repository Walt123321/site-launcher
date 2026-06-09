<!-- ========================= -->
<!-- FOOTER -->
<!-- ========================= -->

<footer class="footer">

    <div class="footer-top">

        <div class="container">

            <div class="footer-grid">

                <!-- BRAND -->
                <div class="footer-brand">

                    <a href="<?= $site_url ?>" class="footer-logo">

                        <div class="footer-logo-icon">

                            <img
                                src="./favicon.svg"
                                alt="<?= $site_name ?>"
                                class="footer-logo-image"
                            >

                        </div>

                        <div class="footer-logo-text">

                            <span class="footer-logo-title">
                                <?= $site_name ?>
                            </span>

                            <span class="footer-logo-subtitle">
                                <?= $logo_subtitle ?>
                            </span>

                        </div>

                    </a>

                    <p class="footer-description">
                        <?= $footer_description ?>
                    </p>

                    <div class="footer-socials">

                        <a href="#" aria-label="Twitter">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none">
                                <path d="M22 5.8c-.7.3-1.5.5-2.3.6.8-.5 1.4-1.2 1.7-2.1-.8.5-1.7.8-2.6 1-1.5-1.6-4.2-1.7-5.8-.1-1 1-1.4 2.4-1.1 3.7-3.2-.2-6.1-1.7-8-4.2-1 1.8-.5 4.1 1.2 5.2-.6 0-1.2-.2-1.7-.5 0 2 1.4 3.8 3.4 4.2-.6.2-1.2.2-1.8.1.5 1.7 2.1 2.9 3.9 2.9A7.8 7.8 0 0 1 2 19.5a11 11 0 0 0 6 1.7c7.2 0 11.1-6 11.1-11.1v-.5c.8-.5 1.5-1.2 2-1.9z" fill="currentColor"/>
                            </svg>
                        </a>

                        <a href="#" aria-label="LinkedIn">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none">
                                <path d="M4.98 3.5C4.98 4.88 3.87 6 2.49 6S0 4.88 0 3.5 1.11 1 2.49 1s2.49 1.12 2.49 2.5zM.5 8h4V24h-4V8zm7.5 0h3.8v2.2h.1c.5-1 1.9-2.2 4-2.2 4.2 0 5 2.8 5 6.4V24h-4v-7.1c0-1.7 0-3.8-2.3-3.8s-2.7 1.8-2.7 3.7V24h-4V8z" fill="currentColor"/>
                            </svg>
                        </a>

                        <a href="#" aria-label="Telegram">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none">
                                <path d="M22 2L11 13" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                <path d="M22 2L15 22L11 13L2 9L22 2Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>
                            </svg>
                        </a>

                    </div>

                </div>

                <!-- PLATFORM -->
                <div class="footer-column">

                    <h3 class="footer-title">
                        <?= $footer_platform ?>
                    </h3>

                    <ul class="footer-links">
                        <li><a href="<?= $site_url ?>/#signals"><?= $footer_ai_signals ?></a></li>
                        <li><a href="<?= $site_url ?>/#reviews"><?= $nav_reviews ?></a></li>
                        <li><a href="<?= $site_url ?>/#faq"><?= $nav_faq ?></a></li>
                        <li><a href="about.php"><?= $footer_about_link ?></a></li>
                        <li><a href="contact.php"><?= $nav_contact ?></a></li>
                    </ul>

                </div>

                <!-- RESOURCES -->
                <div class="footer-column">

                    <h3 class="footer-title">
                        <?= $footer_resources ?>
                    </h3>

                    <ul class="footer-links">
                        <li><a href="supported-exchanges.php"><?= $nav_exchanges_full ?></a></li>
                        <li><a href="risk-disclosure.php"><?= $nav_risk_full ?></a></li>
                        <li><a href="aml-policy.php"><?= $nav_aml ?></a></li>
                        <li><a href="cookies.php"><?= $nav_cookies ?></a></li>
                        <li><a href="privacy.php"><?= $nav_privacy ?></a></li>
                    </ul>

                </div>

                <!-- CONTACT -->
                <div class="footer-column">

                    <h3 class="footer-title">
                        <?= $footer_contact_title ?>
                    </h3>

                    <ul class="footer-contact">
                        <li><?= $support_email ?></li>
                        <li><?= $footer_monitoring ?></li>
                        <li><?= $footer_global_markets ?></li>
                    </ul>

                </div>

            </div>

        </div>

    </div>

    <!-- DISCLAIMER -->
    <div class="footer-disclaimer">

        <div class="container">

            <h3>
                <?= $footer_disclaimer_title ?>
            </h3>

            <p>
                <?= $footer_disclaimer_p1 ?>
            </p>

            <p>
                <?= $footer_disclaimer_p2 ?>
            </p>

            <p>
                <?= $footer_disclaimer_p3 ?>
            </p>

        </div>

    </div>

    <!-- BOTTOM -->
    <div class="footer-bottom">

        <div class="container footer-bottom-wrapper">

            <div class="footer-copy">
                © <?= date('Y'); ?> <?= $site_name ?>. <?= $footer_rights ?>
            </div>

            <div class="footer-bottom-links">
                <a href="privacy.php"><?= $nav_privacy ?></a>
                <a href="terms.php"><?= $nav_terms ?></a>
                <a href="risk-disclosure.php"><?= $nav_risk_full ?></a>
                <a href="aml-policy.php"><?= $nav_aml ?></a>
                <a href="cookies.php"><?= $nav_cookies_short ?></a>
            </div>

        </div>

    </div>

</footer>

<script>
window.MAXIMA_LANG = {
    siteName: <?= json_encode($site_name) ?>,
    secAgo: <?= json_encode($js_sec_ago) ?>,
    closeNotification: <?= json_encode($js_close_notification) ?>,
    signals: {
        long: "LONG",
        short: "SHORT",
        watch: "WATCH"
    },
    signalCopy: {
        LONG: {
            direction: <?= json_encode($js_signal_long_direction) ?>,
            market: <?= json_encode($js_signal_long_market) ?>,
            pressureLabel: <?= json_encode($js_signal_long_pressure_label) ?>,
            pressure: <?= json_encode($js_signal_long_pressure) ?>
        },
        SHORT: {
            direction: <?= json_encode($js_signal_short_direction) ?>,
            market: <?= json_encode($js_signal_short_market) ?>,
            pressureLabel: <?= json_encode($js_signal_short_pressure_label) ?>,
            pressure: <?= json_encode($js_signal_short_pressure) ?>
        },
        WATCH: {
            direction: <?= json_encode($js_signal_watch_direction) ?>,
            market: <?= json_encode($js_signal_watch_market) ?>,
            pressureLabel: <?= json_encode($js_signal_watch_pressure_label) ?>,
            pressure: <?= json_encode($js_signal_watch_pressure) ?>
        }
    },
    liveUserActions: <?= json_encode([
        $js_live_action_1,
        $js_live_action_2,
        $js_live_action_3,
        $js_live_action_4,
        $js_live_action_5,
        $js_live_action_6
    ]) ?>,
    hero: {
        long: {
            pair: <?= json_encode($js_hero_long_pair) ?>,
            badge: "LONG",
            regime: <?= json_encode($js_hero_long_regime) ?>,
            feeds: <?= json_encode([$js_hero_long_feed_1, $js_hero_long_feed_2, $js_hero_long_feed_3]) ?>
        },
        watch: {
            pair: <?= json_encode($js_hero_watch_pair) ?>,
            badge: "WATCH",
            regime: <?= json_encode($js_hero_watch_regime) ?>,
            feeds: <?= json_encode([$js_hero_watch_feed_1, $js_hero_watch_feed_2, $js_hero_watch_feed_3]) ?>
        },
        short: {
            pair: <?= json_encode($js_hero_short_pair) ?>,
            badge: "SHORT",
            regime: <?= json_encode($js_hero_short_regime) ?>,
            feeds: <?= json_encode([$js_hero_short_feed_1, $js_hero_short_feed_2, $js_hero_short_feed_3]) ?>
        }
    }
};
</script>
<script src="./assets/js/app.js"></script>

</body>
</html>
