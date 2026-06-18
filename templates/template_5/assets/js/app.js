// =========================
// MOBILE MENU + ANCHOR SCROLL
// =========================

const burgerBtn = document.getElementById('burgerBtn');
const mobileMenu = document.getElementById('mobileMenu');

function closeMobileMenu() {
    if (burgerBtn) {
        burgerBtn.classList.remove('active');
    }

    if (mobileMenu) {
        mobileMenu.classList.remove('active');
    }

    document.body.classList.remove('menu-open');
}

if (burgerBtn && mobileMenu) {
    burgerBtn.addEventListener('click', () => {
        const isOpen = mobileMenu.classList.toggle('active');

        burgerBtn.classList.toggle('active', isOpen);
        document.body.classList.toggle('menu-open', isOpen);
    });
}

const SCROLL_SECTION_GAP = 16;

function getHeaderScrollOffset() {
    const headerEl = document.getElementById('header');
    return (headerEl ? headerEl.offsetHeight : 80) + SCROLL_SECTION_GAP;
}

function scrollToSection(target, behavior = 'smooth') {
    if (!target) return;

    const top =
        target.getBoundingClientRect().top +
        window.pageYOffset -
        getHeaderScrollOffset();

    window.scrollTo({
        top: Math.max(0, top),
        behavior
    });
}

function getLinkHash(href) {
    if (!href || !href.includes('#')) return null;

    const hash = href.startsWith('#') ? href : href.slice(href.indexOf('#'));
    return hash.length > 1 ? hash : null;
}

function isSamePageAnchor(href) {
    if (!href || href.startsWith('#')) return true;

    try {
        const url = new URL(href, window.location.href);
        return url.pathname === window.location.pathname;
    } catch {
        return false;
    }
}

function scrollToHashFromUrl(behavior = 'smooth') {
    const hash = window.location.hash;
    if (!hash || hash === '#') return;

    const target = document.querySelector(hash);
    if (!target) return;

    requestAnimationFrame(() => {
        setTimeout(() => scrollToSection(target, behavior), behavior === 'auto' ? 0 : 120);
    });
}

document.querySelectorAll('a[href*="#"]').forEach((link) => {
    link.addEventListener('click', (e) => {
        const href = link.getAttribute('href');
        const hash = getLinkHash(href);

        if (!hash) {
            if (href === '#') e.preventDefault();
            closeMobileMenu();
            return;
        }

        const target = document.querySelector(hash);

        if (!target || !isSamePageAnchor(href)) {
            closeMobileMenu();
            return;
        }

        e.preventDefault();
        closeMobileMenu();

        history.pushState(null, '', hash);

        requestAnimationFrame(() => {
            scrollToSection(target);
        });
    });
});

window.addEventListener('load', () => {
    if (window.location.hash) {
        scrollToHashFromUrl('smooth');
    }
});

window.addEventListener('hashchange', () => {
    scrollToHashFromUrl('smooth');
});


document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') {
        closeMobileMenu();
    }
});

document.addEventListener('click', (e) => {
    if (!mobileMenu || !burgerBtn) return;

    const clickedInsideMenu = mobileMenu.contains(e.target);
    const clickedBurger = burgerBtn.contains(e.target);

    if (
        mobileMenu.classList.contains('active') &&
        !clickedInsideMenu &&
        !clickedBurger
    ) {
        closeMobileMenu();
    }
});
// =========================
// HEADER SCROLL EFFECT
// =========================

const header = document.getElementById('header');

function updateHeaderOnScroll() {
    if (!header) return;

    header.classList.toggle('is-scrolled', window.scrollY > 40);
}

window.addEventListener('scroll', updateHeaderOnScroll, { passive: true });
updateHeaderOnScroll();

// =========================
// LIVE SIGNALS UPDATE
// =========================

const signalCards = document.querySelectorAll('.signal-card');

const LANG = window.MAXIMA_LANG || {};

const signalStates = [
    (LANG.signals && LANG.signals.long) || 'LONG',
    (LANG.signals && LANG.signals.short) || 'SHORT',
    (LANG.signals && LANG.signals.watch) || 'WATCH'
];

const confidenceValues = [
    78,
    81,
    84,
    88,
    91,
    94,
    96,
    92,
    90,
    87,
    98,
    77,
];

function randomItem(array) {

    return array[
        Math.floor(Math.random() * array.length)
    ];

}

function setSignalState(card, state) {
    const badge = card.querySelector('.signal-badge');
    const icon = card.querySelector('.signal-icon');
    const confidence = card.querySelectorAll('.signal-row strong')[0];
    const updated = card.querySelectorAll('.signal-row strong')[3];

    const confidenceValue = Math.floor(Math.random() * 18) + 78;

    badge.textContent = state;
    confidence.textContent = `${confidenceValue}%`;
    const secAgoSuffix = LANG.secAgo || 'sec ago';
    updated.textContent = `${Math.floor(Math.random() * 12) + 1} ${secAgoSuffix}`;

    badge.className = 'signal-badge';
    icon.className = 'signal-icon';

    if (state === 'LONG') {
        badge.classList.add('buy');
        icon.classList.add('up');
        icon.innerHTML = `
            <svg viewBox="0 0 24 24" fill="none">
                <path d="M7 17L17 7" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"/>
                <path d="M8 7H17V16" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        `;
    }

    if (state === 'SHORT') {
        badge.classList.add('sell');
        icon.classList.add('down');
        icon.innerHTML = `
            <svg viewBox="0 0 24 24" fill="none">
                <path d="M7 7L17 17" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"/>
                <path d="M17 8V17H8" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        `;
    }

    if (state === 'WATCH') {
        badge.classList.add('neutral');
        icon.classList.add('neutral-icon');
        icon.innerHTML = `
            <svg viewBox="0 0 24 24" fill="none">
                <path d="M5 12H19" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"/>
            </svg>
        `;
    }
}

const trendPaths = {
    LONG: [
        'M0 72 C60 58 105 45 155 46 C215 48 260 24 320 18',
        'M0 76 C55 68 115 44 165 38 C220 32 255 30 320 16',
        'M0 68 C70 62 110 54 160 36 C215 18 260 30 320 14'
    ],
    SHORT: [
        'M0 18 C60 26 105 38 155 44 C215 52 260 68 320 76',
        'M0 14 C55 24 105 28 165 48 C230 68 270 66 320 80',
        'M0 22 C70 30 120 52 175 56 C230 60 260 72 320 78'
    ],
    WATCH: [
        'M0 46 C55 42 110 50 160 46 C215 42 260 50 320 46',
        'M0 50 C70 48 115 42 165 46 C220 50 260 44 320 48',
        'M0 44 C65 50 120 46 170 48 C225 50 270 42 320 46'
    ]
};

function getSignalCopy(state) {
    const copy = LANG.signalCopy && LANG.signalCopy[state];

    if (state === 'LONG') {
        return {
            badgeClass: 'buy',
            iconClass: 'up',
            cardClass: 'signal-buy',
            textClass: 'positive',
            direction: copy ? copy.direction : 'Uptrend probability increasing',
            market: copy ? copy.market : 'Controlled Expansion',
            pressureLabel: copy ? copy.pressureLabel : 'Liquidity Pressure',
            pressure: copy ? copy.pressure : 'Bullish'
        };
    }

    if (state === 'SHORT') {
        return {
            badgeClass: 'sell',
            iconClass: 'down',
            cardClass: 'signal-sell',
            textClass: 'negative',
            direction: copy ? copy.direction : 'Downside pressure increasing',
            market: copy ? copy.market : 'High Instability',
            pressureLabel: copy ? copy.pressureLabel : 'Risk Pressure',
            pressure: copy ? copy.pressure : 'Bearish'
        };
    }

    return {
        badgeClass: 'neutral',
        iconClass: 'neutral-icon',
        cardClass: 'signal-neutral',
        textClass: 'neutral-text',
        direction: copy ? copy.direction : 'Consolidation zone detected',
        market: copy ? copy.market : 'Neutral Consolidation',
        pressureLabel: copy ? copy.pressureLabel : 'Institutional Flow',
        pressure: copy ? copy.pressure : 'Stable'
    };
}

function getIconSvg(state) {
    if (state === 'LONG') {
        return `
            <svg viewBox="0 0 24 24" fill="none">
                <path d="M7 17L17 7" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"/>
                <path d="M8 7H17V16" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        `;
    }

    if (state === 'SHORT') {
        return `
            <svg viewBox="0 0 24 24" fill="none">
                <path d="M7 7L17 17" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"/>
                <path d="M17 8V17H8" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        `;
    }

    return `
        <svg viewBox="0 0 24 24" fill="none">
            <path d="M5 12H19" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"/>
        </svg>
    `;
}

function updateSignalCard(card, state) {
    const copy = getSignalCopy(state);

    const badge = card.querySelector('.signal-badge');
    const icon = card.querySelector('.signal-icon');
    const direction = card.querySelector('.signal-direction-text');
    const rows = card.querySelectorAll('.signal-row');
    const sparkline = card.querySelector('.signal-sparkline-path');

    const confidence = Math.floor(Math.random() * 14) + 82;
    const randomPath = trendPaths[state][Math.floor(Math.random() * trendPaths[state].length)];

    card.classList.remove('signal-buy', 'signal-sell', 'signal-neutral');
    card.classList.add(copy.cardClass, 'is-updating');

    badge.className = `signal-badge ${copy.badgeClass}`;
    badge.textContent = state;

    icon.className = `signal-icon ${copy.iconClass}`;
    icon.innerHTML = getIconSvg(state);

    direction.className = `signal-direction-text ${copy.textClass}`;
    direction.textContent = copy.direction;

    rows[0].querySelector('strong').textContent = `${confidence}%`;
    rows[1].querySelector('strong').textContent = copy.market;
    rows[2].querySelector('span').textContent = copy.pressureLabel;
    rows[2].querySelector('strong').textContent = copy.pressure;
    const secAgoSuffix = LANG.secAgo || 'sec ago';
    rows[3].querySelector('strong').textContent = `${Math.floor(Math.random() * 10) + 3} ${secAgoSuffix}`;

    if (sparkline) {
        sparkline.setAttribute('d', randomPath);
    }

    setTimeout(() => {
        card.classList.remove('is-updating');
    }, 700);
}

function updateSignals() {
    const states = signalStates;

    signalCards.forEach((card) => {
        const state = states[Math.floor(Math.random() * states.length)];
        updateSignalCard(card, state);
    });
}

setInterval(updateSignals, 4500);


// =========================
// COUNTER ANIMATION
// =========================

const counters =
    document.querySelectorAll('[data-counter]');

function animateCounter(counter) {

    const target =
        parseInt(counter.dataset.counter);

    let current = 0;

    const increment =
        Math.ceil(target / 120);

    const timer = setInterval(() => {

        current += increment;

        if (current >= target) {

            current = target;
            clearInterval(timer);

        }

        counter.innerText =
            current.toLocaleString();

    }, 20);

}

const counterObserver =
    new IntersectionObserver((entries) => {

        entries.forEach((entry) => {

            if (entry.isIntersecting) {

                animateCounter(entry.target);

                counterObserver.unobserve(
                    entry.target
                );

            }

        });

    });

counters.forEach((counter) => {

    counterObserver.observe(counter);

});

// =========================
// SCROLL REVEAL
// =========================

const revealElements =
    document.querySelectorAll(
        '.signal-card, .dashboard-card, .flow-box, .trust-strip-item, .contact-form'
    );

revealElements.forEach((element) => {

    element.style.opacity = '0';
    element.style.transform =
        'translateY(40px)';
    element.style.transition =
        'opacity .8s ease, transform .8s ease';

});

const revealObserver =
    new IntersectionObserver((entries) => {

        entries.forEach((entry) => {

            if (entry.isIntersecting) {

                entry.target.style.opacity = '1';

                entry.target.style.transform =
                    'translateY(0px)';

                revealObserver.unobserve(entry.target);


            }

        });

    }, {
        threshold: 0.15
    });

revealElements.forEach((element) => {

    revealObserver.observe(element);

});

// =========================
// PARALLAX EFFECT
// =========================

const blur1 = document.querySelector('.blur-1');
const blur2 = document.querySelector('.blur-2');

if (window.innerWidth > 768) {
    window.addEventListener('mousemove', (e) => {
        const x = e.clientX / window.innerWidth;
        const y = e.clientY / window.innerHeight;

        if (blur1) {
            blur1.style.transform = `translate(${x * 40}px, ${y * 40}px)`;
        }

        if (blur2) {
            blur2.style.transform = `translate(-${x * 40}px, -${y * 40}px)`;
        }
    });
}

// =========================
// RANDOM GLOW EFFECTS
// =========================

setInterval(() => {

    const cards =
        document.querySelectorAll(
            '.signal-card'
        );

    if (!cards.length) return;

    const randomCard =
        randomItem(cards);

    randomCard.classList.add('is-random-glow');

    setTimeout(() => {

        randomCard.classList.remove('is-random-glow');

    }, 1200);

}, 2500);

// =========================
// FAKE LIVE USERS
// =========================

const liveUserNames = [
    'Michael', 'Daniel', 'Alexander', 'David', 'James', 
    'Robert', 'Oliver', 'Thomas', 'Martin', 'Lucas', 
    'Henry', 'Victor', 'Samuel', 'Noah', 'Ethan', 
    'Liam', 'Mark', 'George', 'Christian', 'Julian', 
    'Sebastian', 'Maximilian', 'Gabriel', 'Adrian', 'Vincent', 
    'Arthur', 'Louis', 'Benjamin', 'Mattheo', 'Leon', 
    'Finn', 'Jonas', 'Elias', 'Filip', 'Stefan', 
    'Anton', 'Emil', 'Marco', 'Luca', 'Alessandro', 
    'Diego', 'Carlos', 'Matthias', 'Paul', 'Simon', 
    'Patrick', 'Marcus', 'Emma', 'Olivia', 'Ava', 
    'Sophia', 'Isabella', 'Mia', 'Charlotte', 'Amelia', 
    'Harper', 'Evelyn', 'Abigail', 'Emily', 'Elizabeth', 
    'Sofia', 'Aria', 'Chloe', 'Anna', 'Maya', 
    'Elena', 'Laura', 'Nina', 'Mila', 'Clara', 
    'Sarah', 'Julia', 'Maria', 'Lisa', 'Hannah', 
    'Lea', 'Lara', 'Zoe', 'Ines', 'Camila'
];

const liveUserCountries = [
    'Germany', 'Netherlands', 'Switzerland', 'United Kingdom', 
    'Sweden', 'Norway', 'Denmark', 'Finland', 'Ireland', 'Austria',
    'France', 'Italy', 'Spain', 'Belgium', 'Luxembourg',
    'Portugal', 'Poland', 'Czech Republic', 'Slovakia', 'Slovenia',
    'Hungary', 'Estonia', 'Lithuania', 'Latvia', 'Iceland',
    'Cyprus', 'Malta', 'Monaco', 'Canada', 'Singapore', 
    'Australia', 'New Zealand'
];

const liveUserActions = (LANG.liveUserActions && LANG.liveUserActions.length)
    ? LANG.liveUserActions
    : [
        `joined ${LANG.siteName || 'the platform'} from`,
        'requested platform access from',
        'started AI signal monitoring from',
        'activated market analysis from',
        'opened the institutional dashboard from',
        `connected to ${LANG.siteName || 'the platform'} from`
    ];

function createLiveUserPopup() {
    const popup = document.createElement('div');

    popup.className = 'live-user-popup';

    popup.innerHTML = `
        <button class="live-popup-close" aria-label="${LANG.closeNotification || 'Close notification'}">
            ×
        </button>

        <div class="live-popup-content">
            <strong>${randomItem(liveUserNames)}</strong>
            ${randomItem(liveUserActions)}
            <span>${randomItem(liveUserCountries)}</span>
        </div>
    `;

    document.body.appendChild(popup);

    const closeButton = popup.querySelector('.live-popup-close');

    closeButton.addEventListener('click', () => {
        popup.classList.remove('active');

        setTimeout(() => {
            popup.remove();
        }, 350);
    });

    setTimeout(() => {
        popup.classList.add('active');
    }, 100);

    setTimeout(() => {
        if (!popup.classList.contains('active')) return;

        popup.classList.remove('active');

        setTimeout(() => {
            popup.remove();
        }, 350);
    }, 6500);
}

// було 12000, стало вдвічі рідше
setInterval(createLiveUserPopup, 24000);


const seoToggleBtn = document.getElementById('seoToggleBtn');
const seoExpandContent = document.getElementById('seoExpandContent');

if (seoToggleBtn && seoExpandContent) {

    seoToggleBtn.addEventListener('click', () => {

        seoToggleBtn.classList.toggle('active');

        if (seoExpandContent.classList.contains('active')) {

            seoExpandContent.style.maxHeight = null;
            seoExpandContent.classList.remove('active');

        } else {

            seoExpandContent.classList.add('active');
            seoExpandContent.style.maxHeight =
                seoExpandContent.scrollHeight + 'px';

        }

    });

}



const faqItems = document.querySelectorAll('.faq-item');

faqItems.forEach((item) => {
    const button = item.querySelector('.faq-question');

    button.addEventListener('click', () => {
        faqItems.forEach((otherItem) => {
            if (otherItem !== item) {
                otherItem.classList.remove('active');
            }
        });

        item.classList.toggle('active');
    });
});

// =========================
// FLOATING TICKER VISIBILITY
// =========================

const floatingTicker =
    document.querySelector(
        '.floating-ticker'
    );

function handleTickerVisibility() {

    if (!floatingTicker) return;

    if (window.scrollY > 150) {

        floatingTicker.classList.add(
            'visible'
        );

    } else {

        floatingTicker.classList.remove(
            'visible'
        );

    }

}

window.addEventListener(
    'scroll',
    handleTickerVisibility
);

handleTickerVisibility();

// HERO TERMINAL LIVE SIMULATION

const heroChartPath = document.getElementById('heroChartPath');
const heroChartArea = document.getElementById('heroChartArea');
const heroConfidence = document.getElementById('heroConfidence');
const heroExecution = document.getElementById('heroExecution');
const heroRegime = document.getElementById('heroRegime');
const heroSignalPair = document.getElementById('heroSignalPair');
const heroSignalBadge = document.getElementById('heroSignalBadge');

const heroPathData = {
    long: {
        line: 'M0 215 C120 180 220 205 340 135 C460 65 560 92 720 42',
        area: 'M0 215 C120 180 220 205 340 135 C460 65 560 92 720 42 L720 260 L0 260 Z'
    },
    watch: {
        line: 'M0 145 C110 130 210 158 330 142 C450 126 560 150 720 136',
        area: 'M0 145 C110 130 210 158 330 142 C450 126 560 150 720 136 L720 260 L0 260 Z'
    },
    short: {
        line: 'M0 62 C110 78 220 96 340 130 C460 168 560 184 720 218',
        area: 'M0 62 C110 78 220 96 340 130 C460 168 560 184 720 218 L720 260 L0 260 Z'
    }
};

function buildHeroStates() {
    const hero = LANG.hero;

    if (!hero) {
        return [];
    }

    return [
        {
            state: 'long',
            pair: hero.long.pair,
            badge: hero.long.badge,
            confidence: '94%',
            execution: '11ms',
            regime: hero.long.regime,
            feeds: hero.long.feeds,
            ...heroPathData.long
        },
        {
            state: 'watch',
            pair: hero.watch.pair,
            badge: hero.watch.badge,
            confidence: '86%',
            execution: '13ms',
            regime: hero.watch.regime,
            feeds: hero.watch.feeds,
            ...heroPathData.watch
        },
        {
            state: 'short',
            pair: hero.short.pair,
            badge: hero.short.badge,
            confidence: '89%',
            execution: '10ms',
            regime: hero.short.regime,
            feeds: hero.short.feeds,
            ...heroPathData.short
        }
    ];
}

const heroStates = buildHeroStates();

let heroStateIndex = 0;

function updateHeroTerminal() {
    const terminal = document.querySelector('.terminal-preview');

    if (!heroChartPath || !heroChartArea || !terminal) return;

    heroStateIndex = (heroStateIndex + 1) % heroStates.length;

    const state = heroStates[heroStateIndex];

    terminal.classList.remove('state-long', 'state-short', 'state-watch');
    terminal.classList.add(`state-${state.state}`);

    heroChartPath.setAttribute('d', state.line);
    heroChartArea.setAttribute('d', state.area);

    heroSignalPair.textContent = state.pair;
    heroSignalBadge.textContent = state.badge;

    heroSignalBadge.className = `hero-signal-badge ${state.state}`;

    heroConfidence.textContent = state.confidence;
    heroExecution.textContent = state.execution;
    heroRegime.textContent = state.regime;

    const feedItems = document.querySelectorAll('.terminal-feed-item');

    feedItems.forEach((item, index) => {
        item.classList.add('flash');

        setTimeout(() => {
            item.textContent = state.feeds[index];
            item.classList.remove('flash');
        }, 180);
    });
}

setInterval(updateHeroTerminal, 3600);

