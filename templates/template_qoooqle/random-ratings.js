/**
 * Random Star Ratings Generator
 * Generates random rating scores and counts for each result
 */
(function() {
    'use strict';
    
    // List of possible ratings and review counts
    const ratingConfigs = [
        { stars: 5, score: 4.9, count: 2847 },
        { stars: 5, score: 4.8, count: 1523 },
        { stars: 5, score: 4.7, count: 3421 },
        { stars: 5, score: 4.6, count: 892 },
        { stars: 4, score: 4.5, count: 1456 },
        { stars: 4, score: 4.4, count: 2103 },
        { stars: 4, score: 4.3, count: 765 },
        { stars: 4, score: 4.2, count: 3245 },
        { stars: 5, score: 4.9, count: 5234 },
        { stars: 5, score: 4.8, count: 1842 },
        { stars: 4, score: 4.1, count: 2567 },
        { stars: 4, score: 4.0, count: 1234 },
    ];
    
    function getRandomRating() {
        return ratingConfigs[Math.floor(Math.random() * ratingConfigs.length)];
    }
    
    function generateStars(count) {
        return '★'.repeat(count) + '☆'.repeat(5 - count);
    }
    
    function formatCount(count) {
        if (count >= 1000) {
            return (count / 1000).toFixed(1).replace(/\.0$/, '') + 'K';
        }
        return count.toString();
    }
    
    // Wait for DOM to be ready
    document.addEventListener('DOMContentLoaded', function() {
        const starRatings = document.querySelectorAll('.star-rating');
        
        starRatings.forEach(function(ratingElement) {
            const config = getRandomRating();
            
            const starsSpan = ratingElement.querySelector('.stars');
            const scoreSpan = ratingElement.querySelector('.rating-score');
            const countSpan = ratingElement.querySelector('.rating-count');
            
            if (starsSpan) {
                starsSpan.textContent = generateStars(config.stars);
            }
            
            if (scoreSpan) {
                scoreSpan.textContent = config.score.toFixed(1);
            }
            
            if (countSpan) {
                countSpan.textContent = '(' + formatCount(config.count) + ')';
            }
        });
    });
})();
