(function () {
    var calculatorSection = document.getElementById("calculator");
    var appCurrency = calculatorSection ? calculatorSection.dataset.currency : "USD";

    var volumeSlider = document.getElementById("calc-volume-slider");
    var tradesSlider = document.getElementById("calc-trades-slider");

    var volumeValueEl = document.getElementById("calc-volume-value");
    var tradesValueEl = document.getElementById("calc-trades-value");
    var minVolumeEl = document.getElementById("calc-min-volume");
    var maxVolumeEl = document.getElementById("calc-max-volume");

    var timeValueEl = document.getElementById("calc-time-value");
    var boostValueEl = document.getElementById("calc-boost-value");

    var formatCurrency = function (val) {
        try {
            return new Intl.NumberFormat("en-US", {
                style: "currency",
                currency: appCurrency,
                maximumFractionDigits: 0
            }).format(val);
        } catch (e) {
            return appCurrency + " " + Math.round(val);
        }
    };

    var getPrimaryColor = function () {
        return getComputedStyle(document.documentElement).getPropertyValue('--color-primary').trim() || '#6b52d1';
    };

    var updateTrack = function (slider) {
        var min = parseFloat(slider.min);
        var max = parseFloat(slider.max);
        var val = parseFloat(slider.value);
        var pct = ((val - min) / (max - min)) * 100;
        var primaryColor = getPrimaryColor();
        slider.style.background = "linear-gradient(to right, " + primaryColor + " 0%, " + primaryColor + " " + pct + "%, #e2e8f0 " + pct + "%, #e2e8f0 100%)";
    };

    var calculate = function () {
        var volume = parseFloat(volumeSlider.value);
        var trades = parseInt(tradesSlider.value, 10);

        volumeValueEl.textContent = formatCurrency(volume);
        tradesValueEl.textContent = trades + " trades/wk";

        // Hours saved calculation
        var hoursSavedPerMonth = Math.round((trades * 4) * 0.65);

        // Dynamic volume execution optimization with 1.15 multiplier
        var yieldMultiplier = 1.15;
        var optimizationBoost = volume * (0.045 + (trades / 1000)) * yieldMultiplier;

        timeValueEl.textContent = "~" + hoursSavedPerMonth + " hrs / mo";
        boostValueEl.textContent = "+" + formatCurrency(optimizationBoost);

        updateTrack(volumeSlider);
        updateTrack(tradesSlider);
    };

    if (volumeSlider && tradesSlider) {
        var minVolume = parseFloat(volumeSlider.min) || 250;
        var maxVolume = Math.max(15000, minVolume * 60);
        var stepVolume = Math.max(50, Math.round(minVolume / 5));

        volumeSlider.max = maxVolume;
        volumeSlider.step = stepVolume;

        if (minVolumeEl) minVolumeEl.textContent = formatCurrency(minVolume);
        if (maxVolumeEl) maxVolumeEl.textContent = formatCurrency(maxVolume);

        volumeSlider.addEventListener("input", calculate);
        tradesSlider.addEventListener("input", calculate);

        calculate();
    }
})();
