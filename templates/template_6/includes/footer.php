<?php if (!isset($asset_url)) { $asset_url = (PHP_SAPI === 'cli-server') ? '' : ($site_url . '/lander/' . $site_domain); } ?>
        <footer class="site-footer">
            <div class="container">
                <div class="footer-top">
                    <div class="footer-grid">
        
                        <div class="footer-brand">
                            <a href="index.php" class="logo">
                                <div class="logo-icon" style="display: flex; align-items: center; justify-content: center;">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" style="width: 60%; height: 60%;">
                                        <path d="M14 46 L26 32 L38 38 L50 16" stroke="#FFFFFF" stroke-width="5.5" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                                        <circle cx="26" cy="32" r="4.5" fill="#FFFFFF"/>
                                        <circle cx="38" cy="38" r="4.5" fill="#FFFFFF"/>
                                        <circle cx="50" cy="16" r="6.5" fill="#0B0F19"/>
                                        <circle cx="50" cy="16" r="3.5" fill="#FFFFFF"/>
                                    </svg>
                                </div>
        
                                <span><?= $site_name ?></span>
                            </a>
        
                            <p><?= $footer_brand_description ?></p>
                        </div>
        
                        <div class="footer-links-col">
                            <h4><?= $footer_platform_title ?></h4>
        
                            <ul>
                                <li><a href="index.php#platform"><?= $footer_platform_interface ?></a></li>
                                <li><a href="index.php#features"><?= $nav_features ?></a></li>
                                <li><a href="index.php#markets"><?= $footer_platform_markets ?></a></li>
                            </ul>
                        </div>
        
                        <div class="footer-links-col">
                            <h4><?= $footer_pages_title ?></h4>
        
                            <ul>
                                <li><a href="about-us.php"><?= $footer_page_about ?></a></li>
                                <li><a href="contact.php"><?= $footer_page_contact ?></a></li>
                                <li><a href="faq.php"><?= $nav_faq ?></a></li>
                                <li><a href="sign.php"><?= $footer_page_signin ?></a></li>
                            </ul>
                        </div>
        
                        <div class="footer-links-col">
                            <h4><?= $footer_legal_title ?></h4>

                            <ul>
                                <li><a href="conditions.php"><?= $footer_terms ?></a></li>
                                <li><a href="risk-warning.php"><?= $footer_risk_warning ?></a></li>
                                <li><a href="privacy.php"><?= $footer_privacy ?></a></li>
                            </ul>
                        </div>
        
                    </div>
                </div>
        
                <div class="footer-bottom">
                    <p class="disclaimer">
                        <strong><?= $footer_disclaimer_title ?></strong>
                        <?= $footer_disclaimer_text ?>
                    </p>

                    <?php
                    $current_lang_code = strtolower(substr((string) ($site_lang ?? 'en'), 0, 2));
                    // REQUEST_URI, not SCRIPT_NAME/SCRIPT_FILENAME: on Keitaro's bare-root-proxied
                    // campaign URL those server-path variables can reflect Keitaro's own internal
                    // routing instead of the real requested path (same class of bug already fixed
                    // in offer_seo.php's regional-page detection and google.php's redirect target).
                    // basename() on a path ending in "/" (bare offer root
                    // "/lander/{domain}/" or a regional page "/lander/{domain}/de/")
                    // returns the last FOLDER name, not an empty string --
                    // basename('/lander/foo/') is "foo", not "". That silently broke
                    // the switcher on exactly this bare-root form (linked to
                    // ".../de/foo" instead of ".../de/"), so the empty-path check
                    // below never caught it. Treat any path ending in "/" the same
                    // as an empty path: both mean "the index page".
                    $_qq_uri_path_for_page = parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH) ?: '';
                    $current_page = ($_qq_uri_path_for_page === '' || substr($_qq_uri_path_for_page, -1) === '/')
                        ? 'index.php'
                        : basename($_qq_uri_path_for_page);
                    // Language-switcher links drop the "index.php" filename for the home
                    // page (.../de/ instead of .../de/index.php, per explicit request --
                    // nginx's try_files already serves index.php as the default document
                    // either way) but keep it for every other page type, where it's needed
                    // to stay on the same page across languages.
                    $_qq_switcher_page = ($current_page === 'index.php') ? '' : $current_page;
                    ?>
                    <nav class="lang-switcher" aria-label="Language switcher">
                        <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/<?= $_qq_switcher_page ?>" hreflang="en" lang="en"<?= $current_lang_code === 'en' ? ' class="is-active" aria-current="true"' : '' ?>>🇬🇧 English</a>
                        <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/de/<?= $_qq_switcher_page ?>" hreflang="de" lang="de"<?= $current_lang_code === 'de' ? ' class="is-active" aria-current="true"' : '' ?>>🇩🇪 Deutsch</a>
                        <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/fr/<?= $_qq_switcher_page ?>" hreflang="fr" lang="fr"<?= $current_lang_code === 'fr' ? ' class="is-active" aria-current="true"' : '' ?>>🇫🇷 Français</a>
                        <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/es/<?= $_qq_switcher_page ?>" hreflang="es" lang="es"<?= $current_lang_code === 'es' ? ' class="is-active" aria-current="true"' : '' ?>>🇪🇸 Español</a>
                        <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/it/<?= $_qq_switcher_page ?>" hreflang="it" lang="it"<?= $current_lang_code === 'it' ? ' class="is-active" aria-current="true"' : '' ?>>🇮🇹 Italiano</a>
                        <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/hr/<?= $_qq_switcher_page ?>" hreflang="hr" lang="hr"<?= $current_lang_code === 'hr' ? ' class="is-active" aria-current="true"' : '' ?>>🇭🇷 Hrvatski</a>
                        <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/ro/<?= $_qq_switcher_page ?>" hreflang="ro" lang="ro"<?= $current_lang_code === 'ro' ? ' class="is-active" aria-current="true"' : '' ?>>🇷🇴 Română</a>
                        <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/nl/<?= $_qq_switcher_page ?>" hreflang="nl" lang="nl"<?= $current_lang_code === 'nl' ? ' class="is-active" aria-current="true"' : '' ?>>🇳🇱 Nederlands</a>
                        <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/no/<?= $_qq_switcher_page ?>" hreflang="no" lang="no"<?= $current_lang_code === 'no' ? ' class="is-active" aria-current="true"' : '' ?>>🇳🇴 Norsk</a>
                        <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/pt/<?= $_qq_switcher_page ?>" hreflang="pt" lang="pt"<?= $current_lang_code === 'pt' ? ' class="is-active" aria-current="true"' : '' ?>>🇵🇹 Português</a>
                        <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/cs/<?= $_qq_switcher_page ?>" hreflang="cs" lang="cs"<?= $current_lang_code === 'cs' ? ' class="is-active" aria-current="true"' : '' ?>>🇨🇿 Čeština</a>
                        <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/pl/<?= $_qq_switcher_page ?>" hreflang="pl" lang="pl"<?= $current_lang_code === 'pl' ? ' class="is-active" aria-current="true"' : '' ?>>🇵🇱 Polski</a>
                        <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/tr/<?= $_qq_switcher_page ?>" hreflang="tr" lang="tr"<?= $current_lang_code === 'tr' ? ' class="is-active" aria-current="true"' : '' ?>>🇹🇷 Türkçe</a>
                        <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/da/<?= $_qq_switcher_page ?>" hreflang="da" lang="da"<?= $current_lang_code === 'da' ? ' class="is-active" aria-current="true"' : '' ?>>🇩🇰 Dansk</a>
                        <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/sv/<?= $_qq_switcher_page ?>" hreflang="sv" lang="sv"<?= $current_lang_code === 'sv' ? ' class="is-active" aria-current="true"' : '' ?>>🇸🇪 Svenska</a>
                        <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/fi/<?= $_qq_switcher_page ?>" hreflang="fi" lang="fi"<?= $current_lang_code === 'fi' ? ' class="is-active" aria-current="true"' : '' ?>>🇫🇮 Suomi</a>
                        <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/hu/<?= $_qq_switcher_page ?>" hreflang="hu" lang="hu"<?= $current_lang_code === 'hu' ? ' class="is-active" aria-current="true"' : '' ?>>🇭🇺 Magyar</a>
                        <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/sk/<?= $_qq_switcher_page ?>" hreflang="sk" lang="sk"<?= $current_lang_code === 'sk' ? ' class="is-active" aria-current="true"' : '' ?>>🇸🇰 Slovenčina</a>
                        <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/bg/<?= $_qq_switcher_page ?>" hreflang="bg" lang="bg"<?= $current_lang_code === 'bg' ? ' class="is-active" aria-current="true"' : '' ?>>🇧🇬 Български</a>
                        <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/ms/<?= $_qq_switcher_page ?>" hreflang="ms" lang="ms"<?= $current_lang_code === 'ms' ? ' class="is-active" aria-current="true"' : '' ?>>🇲🇾 Bahasa Melayu</a>
                        <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/nb/<?= $_qq_switcher_page ?>" hreflang="nb" lang="nb"<?= $current_lang_code === 'nb' ? ' class="is-active" aria-current="true"' : '' ?>>🇳🇴 Norsk Bokmål</a>
                        <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/el/<?= $_qq_switcher_page ?>" hreflang="el" lang="el"<?= $current_lang_code === 'el' ? ' class="is-active" aria-current="true"' : '' ?>>🇬🇷 Ελληνικά</a>
                        <a href="<?= $site_url ?>/lander/<?= $site_domain ?>/ja/<?= $_qq_switcher_page ?>" hreflang="ja" lang="ja"<?= $current_lang_code === 'ja' ? ' class="is-active" aria-current="true"' : '' ?>>🇯🇵 日本語</a>
                    </nav>

                    <div class="footer-meta-links">
                        <span style="text-align:center; width: 100%;">
                            &copy; 2026 <?= $site_name ?>. <?= $footer_copyright ?>
                        </span>
                    </div>
                </div>
            </div>
        </footer>
    </section>
<div id="cq-form-card" hidden aria-hidden="true" style="display: none !important;">
  <form id="cq-isolated-form" class="leadform js-cq-chat-form rf-form js-rf-form cq-pure-custom-form" method="post" action="<?= $site_url ?>/integration/send.php">
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
<script src="<?= $asset_url ?>/integration/validation.js"></script>

<div id="chat-quiz-root" style="position: fixed !important; bottom: 24px !important; right: 24px !important; z-index: 999999 !important; font-family: 'Inter', system-ui,   -apple-system, sans-serif !important; box-sizing: border-box !important;">
        
        <link rel="stylesheet" href="<?= $asset_url ?>/assets/css/chat-quiz.css?v=<?= @filemtime(__DIR__ . '/../assets/css/chat-quiz.css') ?: time() ?>">
            
    <button id="chat-toggle-btn" class="cq-pulse-button" style="position: relative !important; width: 60px !important; height: 60px !important; border-radius: 50% !important; background: linear-gradient(135deg, var(--color-accent-hover) 0%, var(--color-accent) 100%) !important; color: #ffffff !important; border: none !important; outline: none !important; cursor: pointer !important; box-shadow: 0 8px 30px rgba(5, 150, 105, 0.3) !important; display: flex !important; align-items: center !important;    justify-content: center !important; transition: var(--transition-smooth) !important;">
        <span id="chat-noti-dot" style="position: absolute !important; top: -1px !important; right: -1px !important; width: 18px !important; height: 18px !important; background-color: var(--color-warning) !important; border-radius: 50% !important; border: 2px solid var(--color-bg-soft) !important; color: white !important; font-size: 10px !important; font-weight: bold !important; display: flex !important; align-items: center !important; justify-content: center !important; transform:  scale(0); transition: transform 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275) !important; z-index: 10 !important;">1</span>
            <svg style="width: 26px !important; height: 26px !important; transition: transform 0.3s;" fill="none" stroke="currentColor" viewBox="0 0 24 24" id="cq-chat-icon">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3   20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
            </svg>
        </button>
        
    <div id="chat-window" style="display: none; position: absolute !important; bottom: 0 !important; right: 0 !important; background-color: var(--color-card) !important; border: 1px solid var(--color-border) !important; border-radius: 24px !important; box-shadow: var(--shadow-premium) !important; backdrop-filter: blur(20px) !important; flex-direction: column !important; overflow: hidden !important; width: 360px !important; max-height: 85vh !important; transition: var(--transition-smooth) !important;    opacity: 0 !important; transform: translateY(20px) !important;">
                
        <div style="background-color: rgba(255, 255, 255, 0.03) !important; border-bottom: 1px solid var(--color-border) !important; padding: 16px 20px !important; display:    flex !important; align-items: center !important; justify-content: space-between !important; flex-direction: row !important;">
                <div style="display: flex !important; align-items: center !important; gap: 12px !important; flex-direction: row !important;">
                <div style="position: relative !important; width: 42px !important; height: 42px !important; border-radius: 50% !important; border: 2px solid var(--color-accent) !important; background-color: var(--color-bg-muted) !important; display: flex !important; align-items: center !important;  justify-content: center !important; overflow: hidden !important; flex-shrink: 0 !important;">
                    <img src="<?= $asset_url ?>/consultant.webp" alt="<?= htmlspecialchars($quiz_consultant_name) ?>" onerror="this.style.display='none';    this.nextElementSibling.style.display='block';" style="width: 100% !important; height: 100% !important; object-fit: cover !important; display: block;">
                    <svg style="display: none; width: 22px; height: 22px; color: var(--color-text-muted);" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path  stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                    <span style="position: absolute !important; bottom: 0 !important; right: 0 !important; width: 10px !important; height: 10px !important; background-color:   var(--color-success) !important; border: 2px solid var(--color-card) !important; border-radius: 50% !important;"></span>
                    </div>
                    <div style="text-align: left !important;">
                    <h4 style="color: var(--color-text-main) !important; font-size: 15px !important; font-weight: 700 !important; margin: 0 !important; padding: 0  !important; line-height: 1.2 !important; letter-spacing: -0.01em !important;"><?= $quiz_consultant_name ?></h4>
                    <p style="color: var(--color-text-secondary) !important; font-size: 12px !important; margin: 2px 0 0 0 !important; padding: 0 !important; font-weight:  500 !important; opacity: 0.9;"><?= $quiz_consultant_role ?></p>
                    </div>
                </div>
            <button id="chat-close-btn" style="color: var(--color-text-muted) !important; background: transparent !important; border: none !important; cursor: pointer  !important; padding: 6px !important; display: flex !important; align-items: center !important; transition: color 0.2s;">
                    <svg style="width: 20px !important; height: 20px !important;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        
        <div id="chat-messages" style="flex: 1 !important; overflow-y: auto !important; padding: 20px !important; display: flex !important; flex-direction: column  !important; gap: 14px !important; scroll-behavior: smooth !important; max-height: 400px !important;">
            </div>
        
        <div id="typing-indicator" style="display: none; padding: 10px 20px !important; font-size: 13px !important; color: var(--color-text-muted) !important; font-style:  italic !important; background-color: transparent !important; text-align: left !important;">
                <?= $quiz_consultant_name ?> <?= $quiz_text_typing ?>
            </div>
        
        <div id="chat-controls" style="padding: 14px 20px !important; background-color: rgba(255, 255, 255, 0.02) !important; border-top: 1px solid var(--color-border)     !important; min-height: 60px !important; display: flex !important; align-items: center !important; justify-content: center !important; gap: 10px !important;">
            </div>
        </div>
    </div>
    
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
