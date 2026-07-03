/**
 * Favicon Fetcher from Offer Domain
 * Dynamically attempts to fetch favicon from the offer domain
 */
(function() {
    'use strict';
    
    // Extract offer domain from current URL or use data attribute
    function getOfferDomain() {
        // First try to get from data attribute if present
        var branded = document.querySelector('[data-offer-domain]');
        if (branded) {
            return branded.getAttribute('data-offer-domain');
        }
        
        // Otherwise extract from config - look for hidden config element
        var configEl = document.getElementById('qoooqle-config');
        if (configEl && configEl.getAttribute('data-offer-domain')) {
            return configEl.getAttribute('data-offer-domain');
        }
        
        return null;
    }
    
    function fetchFavicon(domain) {
        if (!domain) return;
        
        // Common favicon URLs to try
        var faviconUrls = [
            'https://' + domain + '/favicon.ico',
            'https://' + domain + '/favicon.png',
            'https://www.favicon-grabber.com/' + domain,
        ];
        
        // Try each URL
        faviconUrls.forEach(function(url) {
            var img = new Image();
            img.onload = function() {
                // Successfully loaded, update favicon in page
                var linkEl = document.querySelector("link[rel='icon']");
                if (linkEl) {
                    linkEl.href = url;
                } else {
                    // Create new link element if doesn't exist
                    var newLink = document.createElement('link');
                    newLink.rel = 'icon';
                    newLink.href = url;
                    document.head.appendChild(newLink);
                }
            };
            img.onerror = function() {
                // Silent fail, try next URL
            };
            img.src = url;
        });
    }
    
    // Wait for DOM ready or execute immediately
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', function() {
            var domain = getOfferDomain();
            if (domain) {
                setTimeout(function() {
                    fetchFavicon(domain);
                }, 500);
            }
        });
    } else {
        var domain = getOfferDomain();
        if (domain) {
            setTimeout(function() {
                fetchFavicon(domain);
            }, 500);
        }
    }
})();
