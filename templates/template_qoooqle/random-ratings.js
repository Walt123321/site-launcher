/**
 * Random Star Ratings Generator
 * Generates random rating scores and counts for each result
 */
(function() {
    'use strict';
    
    function getRandomRating() {
        const scores = [4.7, 4.8, 4.9, 5.0];
        const score = scores[Math.floor(Math.random() * scores.length)];
        const count = Math.floor(Math.random() * (4500 - 300 + 1)) + 300;
        return {
            stars: 5,
            score: score,
            count: count
        };
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
