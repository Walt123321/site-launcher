<!-- ========================= -->
<!-- FOOTER -->
<!-- ========================= -->
<?php if (!isset($asset_url)) { $asset_url = (PHP_SAPI === 'cli-server') ? (rtrim(dirname($_SERVER['SCRIPT_NAME'] ?? ''), '/\\')) : ($site_url . '/lander/' . $site_domain); } ?>
<link rel="stylesheet" href="<?= $asset_url ?>/integration/default-integration.css?v=<?= @filemtime(__DIR__ . '/../integration/default-integration.css') ?: time() ?>">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.12/build/css/intlTelInput.css">
<?php
// Current page filename (e.g. "about.php"), used to build language-switcher links that
// stay on the same page regardless of whether we're rendering a root page or a /xx/ page.
// REQUEST_URI, not SCRIPT_NAME/SCRIPT_FILENAME: on Keitaro's bare-root-proxied campaign
// URL, those server-path variables can reflect Keitaro's own internal routing instead of
// the real requested path (same class of bug already fixed in offer_seo.php's regional-page
// detection and google.php's redirect target) -- REQUEST_URI reflects what's actually in the
// browser's address bar regardless of that internal routing.
// basename() on a path ending in "/" (e.g. the bare offer root
// "/lander/{domain}/" or a regional page "/lander/{domain}/pt/") returns
// the last FOLDER name, not an empty string -- basename('/lander/foo/')
// is "foo", not "". That silently broke the language switcher on exactly
// this bare-root form (it linked to ".../pt/foo" instead of ".../pt/"),
// so the empty-path check below never caught it. Treat any path ending in
// "/" the same as an empty path: both mean "the index page".
$_qq_uri_path_for_page = parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH) ?: '';
$current_page = ($_qq_uri_path_for_page === '' || substr($_qq_uri_path_for_page, -1) === '/')
    ? 'index.php'
    : basename($_qq_uri_path_for_page);
// Language-switcher links drop the "index.php" filename for the home page
// (.../pt/ instead of .../pt/index.php, per explicit request -- nginx's
// try_files already serves index.php as the default document either way)
// but keep it for every other page type, where it's needed to stay on the
// same page across languages.
$_qq_switcher_page = ($current_page === 'index.php') ? '' : $current_page;
?>


<footer class="footer">

    <div class="footer-top">

        <div class="container">

            <div class="footer-grid">

                <!-- BRAND -->
                <div class="footer-brand">

                    <a href="<?= $site_url ?>" class="footer-logo">

                        <div class="footer-logo-icon">

                            <img
                                src="<?= $asset_url ?>/favicon.svg"
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
                        <li><a href="risk-warning.php"><?= $footer_risk_warning ?></a></li>
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

    <!-- LANGUAGE SWITCHER -->
    <div class="footer-lang">

        <div class="container footer-lang-wrapper">

            <span class="footer-lang-label"><?= $footer_lang_label ?></span>

            <div class="lang-switcher">
                <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/hr/<?= $_qq_switcher_page ?>" hreflang="hr" title="Hrvatski">🇭🇷 <span>Hrvatski</span></a>
                <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/ro/<?= $_qq_switcher_page ?>" hreflang="ro" title="Română">🇷🇴 <span>Română</span></a>
                <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/nl/<?= $_qq_switcher_page ?>" hreflang="nl" title="Nederlands">🇳🇱 <span>Nederlands</span></a>
                <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/<?= $_qq_switcher_page ?>" hreflang="en" title="English">🇬🇧 <span>English</span></a>
                <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/no/<?= $_qq_switcher_page ?>" hreflang="no" title="Norsk">🇳🇴 <span>Norsk</span></a>
                <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/pt/<?= $_qq_switcher_page ?>" hreflang="pt" title="Português">🇵🇹 <span>Português</span></a>
                <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/cs/<?= $_qq_switcher_page ?>" hreflang="cs" title="Čeština">🇨🇿 <span>Čeština</span></a>
                <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/pl/<?= $_qq_switcher_page ?>" hreflang="pl" title="Polski">🇵🇱 <span>Polski</span></a>
                <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/tr/<?= $_qq_switcher_page ?>" hreflang="tr" title="Türkçe">🇹🇷 <span>Türkçe</span></a>
                <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/da/<?= $_qq_switcher_page ?>" hreflang="da" title="Dansk">🇩🇰 <span>Dansk</span></a>
                <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/sv/<?= $_qq_switcher_page ?>" hreflang="sv" title="Svenska">🇸🇪 <span>Svenska</span></a>
                <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/fi/<?= $_qq_switcher_page ?>" hreflang="fi" title="Suomi">🇫🇮 <span>Suomi</span></a>
                <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/hu/<?= $_qq_switcher_page ?>" hreflang="hu" title="Magyar">🇭🇺 <span>Magyar</span></a>
                <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/sk/<?= $_qq_switcher_page ?>" hreflang="sk" title="Slovenčina">🇸🇰 <span>Slovenčina</span></a>
                <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/bg/<?= $_qq_switcher_page ?>" hreflang="bg" title="Български">🇧🇬 <span>Български</span></a>
                <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/ms/<?= $_qq_switcher_page ?>" hreflang="ms" title="Bahasa Melayu">🇲🇾 <span>Bahasa Melayu</span></a>
                <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/nb/<?= $_qq_switcher_page ?>" hreflang="nb" title="Norsk Bokmål">🇳🇴 <span>Norsk Bokmål</span></a>
                <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/el/<?= $_qq_switcher_page ?>" hreflang="el" title="Ελληνικά">🇬🇷 <span>Ελληνικά</span></a>
                <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/ja/<?= $_qq_switcher_page ?>" hreflang="ja" title="日本語">🇯🇵 <span>日本語</span></a>
                <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/de/<?= $_qq_switcher_page ?>" hreflang="de" title="Deutsch">🇩🇪 <span>Deutsch</span></a>
                <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/fr/<?= $_qq_switcher_page ?>" hreflang="fr" title="Français">🇫🇷 <span>Français</span></a>
                <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/es/<?= $_qq_switcher_page ?>" hreflang="es" title="Español">🇪🇸 <span>Español</span></a>
                <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/it/<?= $_qq_switcher_page ?>" hreflang="it" title="Italiano">🇮🇹 <span>Italiano</span></a>
            </div>

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
                <a href="risk-warning.php"><?= $footer_risk_warning ?></a>
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
<script src="<?= $asset_url ?>/assets/js/app.js?v=<?= @filemtime(__DIR__ . '/../assets/js/app.js') ?: time() ?>"></script>


<div id="cq-form-card" hidden aria-hidden="true" style="display: none !important;">
  <form id="cq-isolated-form" class="leadform js-cq-chat-form rf-form js-rf-form cq-pure-custom-form" method="post" action="/integration/send.php">
    <input type="hidden" name="js_token" value="<?= $jsToken; ?>">
    <div style="position:absolute; left:-9999px; opacity:0; height:0; overflow:hidden;">
      <input type="text" name="website" tabindex="-1" autocomplete="off">
      <input type="text" name="company" style="position:absolute; left:-9999px;">
    </div>
    <input type="hidden" name="country" value="<?= $form_country; ?>">
    <input type="hidden" name="language" value="<?= $form_language; ?>">
    <input type="hidden" name="phone_country" value="<?= $form_phone_country; ?>">
    <input type="hidden" name="only_countries" value='<?= $form_only_countries; ?>'>
    <div class="form-preloader hidden">
      <svg width="50" height="50" class="spinner" viewBox="0 0 50 50">
        <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
      </svg>
    </div>
    <div class="absolute inset-0 z-20 hidden items-center justify-center bg-white/50 group-data-loading:flex">
      <svg class="text-primary animate-spin" width="76" height="75" viewBox="0 0 76 75" fill="none">
        <circle cx="38" cy="37.195" r="28" stroke="#E5E7EB" stroke-width="8" />
        <path d="M49.808 62.585a27.998 27.998 0 0 0 7.13-46.014 28 28 0 0 0-30.746-4.763" stroke="currentColor"
          stroke-width="8" stroke-linecap="round" />
      </svg>
    </div>
    <div class="cq-field-group">
      <input type="text" name="fname" id="cq-field-fname" placeholder="<?= htmlspecialchars($quiz_placeholder_fname) ?>" required>
    </div>
    <div class="cq-field-group">
      <input type="text" name="lname" id="cq-field-lname" placeholder="<?= htmlspecialchars($quiz_placeholder_lname) ?>" required>
    </div>
    <div class="cq-field-group">
      <input type="email" name="email" id="cq-field-email" placeholder="<?= htmlspecialchars($quiz_placeholder_email) ?>" required>
    </div>
    <div class="cq-field-group">
      <input type="tel" name="fullphone" id="cq-field-phone" placeholder="" required>
      <span class="error-msg hide"></span>
    </div>
    <button type="submit" class="submit" id="cq-custom-submit-btn"><?= $quiz_btn_submit ?></button>
  </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.12/build/js/intlTelInput.min.js"></script>
<script src="<?= $asset_url ?>/integration/validation.js?v=<?= @filemtime(__DIR__ . '/../integration/validation.js') ?: time() ?>"></script>

<div id="chat-quiz-root" style="position: fixed !important; bottom: 20px !important; right: 20px !important; z-index: 999999 !important; font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif !important; box-sizing: border-box !important;">
    
    <button id="chat-toggle-btn" class="cq-pulse-button" style="position: relative !important; width: 62px !important; height: 62px !important; border-radius: 50% !important; background: linear-gradient(135deg, #8175be, #10b981) !important; color: #ffffff !important; border: none !important; outline: none !important; cursor: pointer !important; box-shadow: 0 8px 24px rgba(107, 95, 167, 0.5) !important; display: flex !important; align-items: center !important; justify-content: center !important; transition: transform 0.25s cubic-bezier(0.175, 0.885, 0.32, 1.275) !important;">
        <span id="chat-noti-dot" style="position: absolute !important; top: -1px !important; right: -1px !important; width: 18px !important; height: 18px !important; background-color: #10b981 !important; border-radius: 50% !important; border: 2px solid #121214 !important; color: white !important; font-size: 10px !important; font-weight: bold !important; display: flex !important; align-items: center !important; justify-content: center !important; transform: scale(0); transition: transform 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275) !important; z-index: 10 !important;">1</span>
        <svg style="width: 26px !important; height: 26px !important; transition: transform 0.3s;" fill="none" stroke="currentColor" viewBox="0 0 24 24" id="cq-chat-icon">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
        </svg>
    </button>

    <div id="chat-window" style="display: none; position: absolute !important; bottom: 0 !important; right: 0 !important; background-color: #121214 !important; border: 1px solid #27272a !important; border-radius: 20px !important; box-shadow: 0 25px 60px -10px rgba(0, 0, 0, 0.8) !important; flex-direction: column !important; overflow: hidden !important; transition: all 0.35s cubic-bezier(0.165, 0.84, 0.44, 1) !important; opacity: 0 !important; transform: translateY(20px) !important;">
        
        <div style="background-color: #1a1a1e !important; border-bottom: 1px solid #27272a !important; padding: 14px 18px !important; display: flex !important; align-items: center !important; justify-content: space-between !important; flex-direction: row !important;">
            <div style="display: flex !important; align-items: center !important; gap: 12px !important; flex-direction: row !important;">
                <div style="position: relative !important; width: 40px !important; height: 40px !important; border-radius: 50% !important; border: 2px solid #10b981 !important; background-color: #27272a !important; display: flex !important; align-items: center !important; justify-content: center !important; overflow: hidden !important; flex-shrink: 0 !important;">
                    <img src="<?= $asset_url ?>/consultant.webp" alt="<?= htmlspecialchars($quiz_consultant_name) ?>" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';" style="width: 100% !important; height: 100% !important; object-fit: cover !important; display: block;">
                    <svg style="display: none; width: 22px; height: 22px; color: #a1a1aa;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                    <span style="position: absolute !important; bottom: 0 !important; right: 0 !important; width: 9px !important; height: 9px !important; background-color: #10b981 !important; border: 1.5px solid #121214 !important; border-radius: 50% !important;"></span>
                </div>
                <div style="text-align: left !important;">
                    <h4 style="color: #ffffff !important; font-size: 14px !important; font-weight: 600 !important; margin: 0 !important; padding: 0 !important; line-height: 1.2 !important; letter-spacing: 0.3px !important;"><?= $quiz_consultant_name ?></h4>
                    <p style="color: #a1a1aa !important; font-size: 11px !important; margin: 0 !important; padding: 0 !important; opacity: 0.85;"><?= $quiz_consultant_role ?></p>
                </div>
            </div>
            <button id="chat-close-btn" style="color: #a1a1aa !important; background: transparent !important; border: none !important; cursor: pointer !important; padding: 6px !important; display: flex !important; align-items: center !important; transition: color 0.2s;">
                <svg style="width: 20px !important; height: 20px !important;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>

        <div id="chat-messages" style="flex: 1 !important; overflow-y: auto !important; padding: 18px !important; display: flex !important; flex-direction: column !important; gap: 14px !important; scroll-behavior: smooth !important;">
            </div>

        <div id="typing-indicator" style="display: none; padding: 10px 18px !important; font-size: 12px !important; color: #71717a !important; font-style: italic !important; background-color: #121214 !important; text-align: left !important;">
            <?= $quiz_consultant_name ?> <?= $quiz_text_typing ?>
        </div>

        <div id="chat-controls" style="padding: 10px 18px !important; background-color: rgba(26, 26, 30, 0.5) !important; border-top: 1px solid #27272a !important; min-height: 20px !important; display: flex !important; align-items: center !important; justify-content: center !important;">
            </div>
    </div>
</div>

<link rel="stylesheet" href="<?= $asset_url ?>/assets/css/chat-quiz.css?v=<?= @filemtime(__DIR__ . '/../assets/css/chat-quiz.css') ?: time() ?>">
<script>
window.CQ_DATA = {
    lang: {
        welcome: `<?= addslashes($quiz_text_welcome) ?>`,
        q1: `<?= addslashes($quiz_text_q1) ?>`,
        a1_yes: `<?= addslashes($quiz_text_a1_yes) ?>`,
        a1_no: `<?= addslashes($quiz_text_a1_no) ?>`,
        q2: `<?= addslashes($quiz_text_q2) ?>`,
        q3: `<?= addslashes($quiz_text_q3) ?>`,
        a3_yes: `<?= addslashes($quiz_text_a3_yes) ?>`,
        a3_no: `<?= addslashes($quiz_text_a3_no) ?>`,
        q4: `<?= addslashes($quiz_text_q4) ?>`,
        a4_1: `<?= addslashes($quiz_text_a4_1) ?>`,
        a4_2: `<?= addslashes($quiz_text_a4_2) ?>`,
        a4_3: `<?= addslashes($quiz_text_a4_3) ?>`,
        q5: `<?= addslashes($quiz_text_q5) ?>`,
        a5_yes: `<?= addslashes($quiz_text_a5_yes) ?>`,
        a5_no: `<?= addslashes($quiz_text_a5_no) ?>`,
        loaderText: `<?= addslashes($quiz_text_loader) ?>`,
        finalTitle: `<?= addslashes($quiz_text_final_ttl) ?>`,
        processing: `<?= addslashes($quiz_text_processing) ?>`
    },
    siteUrl: `<?= addslashes($asset_url) ?>`
};
</script>
<script src="<?= $asset_url ?>/assets/js/chat-quiz.js?v=<?= @filemtime(__DIR__ . '/../assets/js/chat-quiz.js') ?: time() ?>" defer></script>
</body>
</html>
