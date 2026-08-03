(function () {
    var calculatorSection = document.getElementById("calculator");
    var appCurrency = calculatorSection ? calculatorSection.dataset.currency : "USD";

    var amountSlider = document.getElementById("calc-amount-slider");
    var daysSlider = document.getElementById("calc-days-slider");

    var amountValueEl = document.getElementById("calc-amount-value");
    var daysValueEl = document.getElementById("calc-days-value");
    var minAmountEl = document.getElementById("calc-min-amount");
    var maxAmountEl = document.getElementById("calc-max-amount");

    var profitValueEl = document.getElementById("calc-profit-value");
    var totalValueEl = document.getElementById("calc-total-value");

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

    var updateTrack = function (slider) {
        var min = parseFloat(slider.min);
        var max = parseFloat(slider.max);
        var val = parseFloat(slider.value);
        var pct = ((val - min) / (max - min)) * 100;
        slider.style.background = "linear-gradient(to right, #ccff00 0%, #ccff00 " + pct + "%, rgba(255, 255, 255, 0.15) " + pct + "%, rgba(255, 255, 255, 0.15) 100%)";
    };

    var calculate = function () {
        var amount = parseFloat(amountSlider.value);
        var days = parseInt(daysSlider.value, 10);

        amountValueEl.textContent = formatCurrency(amount);
        daysValueEl.textContent = days === 1 ? "1 Day" : days + " Days";

        // Base daily rate scaled by duration + 1.15 multiplier requested by user
        var yieldMultiplier = 1 + (days / 100) * 0.12;
        var dailyRate = 1.5 * yieldMultiplier * 1.15;

        var profit = amount * (dailyRate / 100) * days;
        var total = amount + profit;

        profitValueEl.textContent = "+" + formatCurrency(profit);
        totalValueEl.textContent = formatCurrency(total);

        updateTrack(amountSlider);
        updateTrack(daysSlider);
    };

    if (amountSlider && daysSlider) {
        // Dynamic Range Calculation based on Min Deposit
        var minAmount = parseFloat(amountSlider.min) || 250;
        // Max amount scales proportionally (e.g. 60x min deposit, but at least 15,000)
        var maxAmount = Math.max(15000, minAmount * 60);
        var stepAmount = Math.max(50, Math.round(minAmount / 5));

        amountSlider.max = maxAmount;
        amountSlider.step = stepAmount;

        if (minAmountEl) minAmountEl.textContent = formatCurrency(minAmount);
        if (maxAmountEl) maxAmountEl.textContent = formatCurrency(maxAmount);

        amountSlider.addEventListener("input", calculate);
        daysSlider.addEventListener("input", calculate);

        calculate();
    }
})();
