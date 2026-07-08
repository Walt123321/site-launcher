        // Перемикач світлої/темної теми. За замовчуванням увімкнена світла тема.
        const themeToggleDarkText = window.APP_LANG.themeToggleDarkText;
        const themeToggleLightText = window.APP_LANG.themeToggleLightText;

        const themeToggleDarkAria = window.APP_LANG.themeToggleDarkAria;
        const themeToggleLightAria = window.APP_LANG.themeToggleLightAria;

        const themeToggle = document.getElementById('themeToggle');
        
        const applyTheme = (theme) => {
            document.body.dataset.theme = theme;
        
            if (themeToggle) {
                if (theme === 'light') {
                    themeToggle.textContent = themeToggleDarkText;
                    themeToggle.setAttribute('aria-label', themeToggleDarkAria);
                } else {
                    themeToggle.textContent = themeToggleLightText;
                    themeToggle.setAttribute('aria-label', themeToggleLightAria);
                }
            }
        };
        
        applyTheme(localStorage.getItem('brandTheme') || 'light');
        
        if (themeToggle) {
            themeToggle.addEventListener('click', () => {
                const nextTheme =
                    document.body.dataset.theme === 'light'
                        ? 'dark'
                        : 'light';
        
                localStorage.setItem('brandTheme', nextTheme);
                applyTheme(nextTheme);
            });
        }

        // Mobile Navigation Toggle
        const burgerBtn = document.getElementById('burgerBtn');
        const mainNav = document.getElementById('mainNav');
        
        burgerBtn.addEventListener('click', () => {
            mainNav.classList.toggle('mobile-active');
        });

        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', () => {
                mainNav.classList.remove('mobile-active');
            });
        });

        // FAQ Accordion Logics
        const faqItems = document.querySelectorAll('.faq-item');
        faqItems.forEach(item => {
            const trigger = item.querySelector('.faq-trigger');
            const content = item.querySelector('.faq-content');
            
            trigger.addEventListener('click', () => {
                const isOpen = item.classList.contains('active');
                
                faqItems.forEach(i => {
                    i.classList.remove('active');
                    i.querySelector('.faq-content').style.maxHeight = null;
                });
                
                if (!isOpen) {
                    item.classList.add('active');
                    content.style.maxHeight = content.scrollHeight + "px";
                }
            });
        });

        // Скролл-анімація для блоку кроків (Onboarding Cards Fade-in-up)
        const stepCards = document.querySelectorAll('.step-card');
        const revealCards = () => {
            stepCards.forEach((card, index) => {
                const cardTop = card.getBoundingClientRect().top;
                if(cardTop < window.innerHeight - 100) {
                    setTimeout(() => {
                        card.classList.add('revealed');
                    }, index * 150); // Легка затримка появи для кожного наступного кроку
                }
            });
        };
        window.addEventListener('scroll', revealCards);
        window.addEventListener('load', revealCards);

        // Логіка інтерактивного Мокапу (Конверсійний Скляний Морфізм)
        function handleMockClick(type) {
            const overlay = document.getElementById('mockupOverlay');
            const headline = document.getElementById('overlayHeadline');
            
            headline.innerText = `⚡ ${type} Order Pending Allocation`;
            overlay.classList.add('show');
        }

        function redirectToForm() {
            // Закриваємо оверлей
            document.getElementById('mockupOverlay').classList.remove('show');
            
            // Плавний перехід до головної форми
            const target = document.getElementById('signup');
            target.scrollIntoView({ behavior: 'smooth' });
            
            // Візуальний імпульс-підсвітка для картки форми через 600мс
            setTimeout(() => {
                const formCard = document.getElementById('mainSignupCard');
                formCard.classList.add('highlight-flash');
                setTimeout(() => {
                    formCard.classList.remove('highlight-flash');
                }, 2500);
            }, 600);
        }

        // Реалістичний live-ефект для цін з випадковим мікро-підсвічуванням
        let prices = {
            btc: 67420.50, eth: 3450.25, sol: 184.80, bnb: 582.40, xrp: 0.5920, ada: 0.4850, dot: 6.75
        };

        function simulateMarketTicker() {
            // Мокап-графік працює як біржова стрічка: вся історія плавно їде вліво,
            // а новий стовпчик заходить справа. Так логіка руху читається краще, ніж при
            // одночасній зміні висоти всіх колонок.
            const chartTrack = document.getElementById('mockupChartTrack');
            const chartBars = chartTrack ? Array.from(chartTrack.querySelectorAll('.chart-bar')) : [];
            if (chartTrack && chartBars.length) {
                const previousLast = parseInt(chartBars[chartBars.length - 1].style.height || 60, 10);
                let nextLast = previousLast + (Math.random() > 0.54 ? 1 : -1) * (Math.floor(Math.random() * 14) + 4);
                nextLast = Math.max(25, Math.min(95, nextLast));
                const isMockUp = nextLast >= previousLast;
                const btcDrift = isMockUp ? Math.abs(nextLast - previousLast) * 1.85 : -Math.abs(nextLast - previousLast) * 1.85;
                prices.btc += btcDrift;

                const newBar = document.createElement('div');
                newBar.className = `chart-bar ${isMockUp ? '' : 'down'} new-point`;
                newBar.style.height = `${nextLast}%`;
                chartTrack.appendChild(newBar);

                const firstBar = chartBars[0];
                const gap = parseFloat(getComputedStyle(chartTrack).gap) || 10;
                const shift = firstBar.getBoundingClientRect().width + gap;
                chartTrack.classList.add('is-sliding');
                chartTrack.style.transform = `translateX(-${shift}px)`;

                window.setTimeout(() => {
                    chartTrack.classList.remove('is-sliding');
                    chartTrack.style.transform = 'translateX(0)';
                    firstBar.remove();
                    newBar.classList.remove('new-point');
                }, 920);

                const mockupPrice = document.getElementById('mockupPrice');
                const mockupChange = document.getElementById('mockupChange');
                if (mockupPrice) {
                    mockupPrice.innerText = `$${prices.btc.toLocaleString('en-US', {minimumFractionDigits: 2, maximumFractionDigits: 2})}`;
                    mockupPrice.style.color = isMockUp ? "var(--color-success)" : "var(--color-danger)";
                    setTimeout(() => mockupPrice.style.color = "var(--color-text-main)", 800);
                }
                if (mockupChange) {
                    const pct = isMockUp ? 0.15 + Math.abs(nextLast - previousLast) / 120 : -(0.08 + Math.abs(nextLast - previousLast) / 140);
                    mockupChange.innerText = `${pct >= 0 ? '+' : ''}${pct.toFixed(2)}% ${window.APP_LANG.mockupToday}`;
                    mockupChange.style.color = pct >= 0 ? "var(--color-success)" : "var(--color-danger)";
                }
            }

            // Рандомний вибір одного з 7 активів для зміни у таблиці
            const tickers = ['btc', 'eth', 'sol', 'bnb', 'xrp', 'ada', 'dot'];
            const chosen = tickers[Math.floor(Math.random() * tickers.length)];
            const driftPercent = (Math.random() * 0.1 - 0.05);
            prices[chosen] += prices[chosen] * (driftPercent / 100);

            const rowPrice = document.getElementById(`t-${chosen}-p`);
            const rowChange = document.getElementById(`t-${chosen}-c`);
            
            if(rowPrice && rowChange) {
                rowPrice.innerText = chosen === 'xrp' || chosen === 'ada' 
                    ? `$${prices[chosen].toFixed(4)}` 
                    : `$${prices[chosen].toLocaleString('en-US', {minimumFractionDigits: 2, maximumFractionDigits: 2})}`;

                const isUp = driftPercent >= 0;
                const flashColor = isUp ? "var(--color-success)" : "var(--color-danger)";
                const rowEl = rowPrice.closest('.market-row');

                // Ціна та відсоток підсвічуються разом, в одному кольорі
                rowPrice.style.color = flashColor;
                rowChange.style.color = flashColor;

                // Короткий спалах-тінь для всього рядка
                if (rowEl) {
                    rowEl.classList.remove('row-pulse-up', 'row-pulse-down');
                    void rowEl.offsetWidth; // форсуємо reflow, щоб анімація перезапускалась щоразу
                    rowEl.classList.add(isUp ? 'row-pulse-up' : 'row-pulse-down');
                }

                const activeChange = parseFloat(rowChange.innerText) + driftPercent;
                rowChange.innerText = `${activeChange >= 0 ? '+' : ''}${activeChange.toFixed(2)}%`;

                setTimeout(() => {
                    rowPrice.style.color = "var(--color-text-main)";
                    // Повертаємо постійний колір відсотка відповідно до накопиченої зміни
                    rowChange.style.color = "";
                    rowChange.className = `asset-change ${activeChange >= 0 ? 'trend-up' : 'trend-down'}`;
                    if (rowEl) rowEl.classList.remove('row-pulse-up', 'row-pulse-down');
                }, 600);
            }

        }

        setInterval(simulateMarketTicker, 3000);
