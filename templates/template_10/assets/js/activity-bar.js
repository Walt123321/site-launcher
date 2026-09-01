/**
 * "Live" activity ticker: slider -- leftmost slot slides out, a new visitor
 * slides in from the right (one shared shift). Ported from the reference
 * site's own activity-bar.js, adapted for this repo: English name pool
 * (source shipped Spanish names), avatar path resolved directly against
 * this template's own asset layout (source derived it from its own script
 * tag's src, which assumed a different folder structure than this repo
 * uses), and the "just joined"-style suffix text is read from the
 * lang.php-driven markup already on the page instead of being hardcoded,
 * so translations/relaunches keep working without touching this file.
 */
(function () {
    var SCROLL_DIM_THRESHOLD = 8;
    var VISITOR_STORAGE_KEY = 'activityBarVisitorName';

    function activityBarAvatarUrl(filename) {
        return './assets/img/' + filename;
    }

    function setItemIcon(iconEl, user) {
        iconEl.className = 'activity-bar__item-icon activity-bar__item-icon--avatar';
        iconEl.setAttribute('aria-hidden', 'true');
        iconEl.innerHTML = '';

        if (!user.avatar) {
            var avatars = user.g === 'f'
                ? ['a1.webp', 'a3.webp']
                : ['a2.webp', 'a4.webp'];

            user.avatar = avatars[Math.floor(Math.random() * avatars.length)];
        }

        var img = document.createElement('img');
        img.className = 'activity-bar__item-icon-img';
        img.src = activityBarAvatarUrl(user.avatar);
        img.alt = '';

        iconEl.appendChild(img);
    }

    var ALL_USERS = [
        { name: 'James', g: 'm' },
        { name: 'Oliver', g: 'm' },
        { name: 'Paul', g: 'm' },
        { name: 'Hugo', g: 'm' },
        { name: 'Alex', g: 'm' },
        { name: 'Daniel', g: 'm' },
        { name: 'Michael', g: 'm' },
        { name: 'Thomas', g: 'm' },
        { name: 'Ryan', g: 'm' },
        { name: 'Jack', g: 'm' },
        { name: 'Adam', g: 'm' },
        { name: 'Henry', g: 'm' },
        { name: 'Ethan', g: 'm' },
        { name: 'Nathan', g: 'm' },
        { name: 'Aaron', g: 'm' },
        { name: 'Ben', g: 'm' },
        { name: 'Simon', g: 'm' },
        { name: 'Sam', g: 'm' },
        { name: 'Leo', g: 'm' },
        { name: 'Owen', g: 'm' },
        { name: 'Mark', g: 'm' },
        { name: 'Natalie', g: 'f' },
        { name: 'Irene', g: 'f' },
        { name: 'Ellen', g: 'f' },
        { name: 'Sophie', g: 'f' },
        { name: 'Emma', g: 'f' },
        { name: 'Grace', g: 'f' },
        { name: 'Chloe', g: 'f' },
        { name: 'Olivia', g: 'f' },
        { name: 'Amelia', g: 'f' },
        { name: 'Laura', g: 'f' },
        { name: 'Hannah', g: 'f' },
        { name: 'Rachel', g: 'f' },
        { name: 'Megan', g: 'f' },
        { name: 'Zoe', g: 'f' },
        { name: 'Ava', g: 'f' },
        { name: 'Ruby', g: 'f' },
        { name: 'Ella', g: 'f' },
        { name: 'Lucy', g: 'f' },
        { name: 'Mia', g: 'f' },
        { name: 'Isla', g: 'f' }
    ];

    var visitorSuffixText = 'Just joined';

    function readSuffixFromDom() {
        var el = document.querySelector('.activity-bar__suffix');
        if (el && el.textContent) visitorSuffixText = el.textContent;
    }

    function poolLimit() {
        if (window.matchMedia('(max-width: 575px)').matches) return 20;
        if (window.matchMedia('(max-width: 991px)').matches) return 34;
        return 50;
    }

    function visibleSlots() {
        if (window.matchMedia('(max-width: 575px)').matches) return 2;
        if (window.matchMedia('(max-width: 991px)').matches) return 5;
        return 8;
    }

    function shuffleArray(arr) {
        var a = arr.slice();
        for (var i = a.length - 1; i > 0; i--) {
            var j = Math.floor(Math.random() * (i + 1));
            var t = a[i];
            a[i] = a[j];
            a[j] = t;
        }
        return a;
    }

    function getPool(ordered) {
        var n = Math.min(poolLimit(), ordered.length);
        return ordered.slice(0, n);
    }

    function pickUniqueFromPool(pool, count) {
        var shuffled = shuffleArray(pool);
        var out = [];
        var seen = {};
        for (var i = 0; i < shuffled.length && out.length < count; i++) {
            var u = shuffled[i];
            if (!seen[u.name]) {
                seen[u.name] = true;
                out.push(u);
            }
        }
        return out;
    }

    function nextDelayMs() {
        return 3000 + Math.floor(Math.random() * 3000);
    }

    function syncIndexHeaderStack() {
        if (!document.body.classList.contains('index-page')) return;
        var wrap = document.querySelector('.header-activity-sticky');
        if (!wrap) return;
        document.documentElement.style.setProperty('--index-header-stack', wrap.offsetHeight + 'px');
    }

    function createItemEl(user) {
        var item = document.createElement('div');
        item.className = 'activity-bar__item';
        item.setAttribute('role', 'listitem');

        var icon = document.createElement('span');
        icon.className = 'activity-bar__item-icon';
        icon.setAttribute('aria-hidden', 'true');
        setItemIcon(icon, user);

        var text = document.createElement('span');
        text.className = 'activity-bar__item-text';

        var name = document.createElement('span');
        name.className = 'activity-bar__name';
        name.textContent = user.name;

        var suffix = document.createElement('span');
        suffix.className = 'activity-bar__suffix';
        suffix.textContent = visitorSuffixText;

        text.appendChild(name);
        text.appendChild(suffix);
        item.appendChild(icon);
        item.appendChild(text);

        return item;
    }

    function itemUserName(item) {
        var n = item.querySelector('.activity-bar__name');
        return n ? n.textContent : '';
    }

    function normalizeVisitorName(raw) {
        var s = String(raw || '').trim().replace(/\s+/g, ' ');
        if (!s) return '';
        return s.length > 60 ? s.slice(0, 60) : s;
    }

    function applyVisitorToRightmostItem(firstName) {
        var track = document.getElementById('activityBarTrack');
        if (!track || !firstName) return;
        var item = track.lastElementChild;
        if (!item || !item.classList.contains('activity-bar__item')) return;
        var nameEl = item.querySelector('.activity-bar__name');
        if (nameEl) nameEl.textContent = firstName;
        item.classList.add('activity-bar__item--you');
    }

    function readStoredVisitorName() {
        try {
            var s = sessionStorage.getItem(VISITOR_STORAGE_KEY);
            if (s) return s;
            return localStorage.getItem(VISITOR_STORAGE_KEY) || '';
        } catch (e) {
            return '';
        }
    }

    function applyStoredVisitorToTrack() {
        var s = normalizeVisitorName(readStoredVisitorName());
        if (s) applyVisitorToRightmostItem(s);
    }

    function saveVisitorNameToStorage(normalizedName) {
        if (!normalizedName) return;
        try {
            sessionStorage.setItem(VISITOR_STORAGE_KEY, normalizedName);
            localStorage.setItem(VISITOR_STORAGE_KEY, normalizedName);
        } catch (e) {}
    }

    window.persistActivityBarVisitorName = function (raw) {
        saveVisitorNameToStorage(normalizeVisitorName(raw));
    };

    function init() {
        readSuffixFromDom();
        syncIndexHeaderStack();
        var bar = document.getElementById('activityBar');
        var rail = document.getElementById('activityBarRail');
        var track = document.getElementById('activityBarTrack');
        if (!bar || !rail || !track) return;

        var ordered = shuffleArray(ALL_USERS);
        var slotCount = visibleSlots();
        var sliding = false;

        function slotPixelWidth() {
            var rw = rail.getBoundingClientRect().width;
            var n = slotCount;
            return Math.max(72, Math.floor(rw / n));
        }

        function applySlotWidths(list, fixedW) {
            var w = fixedW != null ? fixedW : slotPixelWidth();
            for (var i = 0; i < list.length; i++) {
                list[i].style.flex = '0 0 ' + w + 'px';
                list[i].style.maxWidth = w + 'px';
            }
        }

        function layoutSlotWidths(fixedW) {
            var items = track.querySelectorAll('.activity-bar__item');
            applySlotWidths(items, fixedW);
        }

        function buildRail() {
            slotCount = visibleSlots();
            sliding = false;
            track.classList.remove('activity-bar__track--animating');
            track.style.transition = 'none';
            track.style.transform = 'translateX(0)';
            track.style.willChange = '';

            var pool = getPool(ordered);
            var users = pickUniqueFromPool(pool, slotCount);
            track.innerHTML = '';
            for (var i = 0; i < users.length; i++) {
                track.appendChild(createItemEl(users[i]));
            }

            applyStoredVisitorToTrack();

            window.requestAnimationFrame(function () {
                layoutSlotWidths();
                applyStoredVisitorToTrack();
            });
        }

        function pickIncomingUser(pool, items) {
            var used = {};
            for (var i = 1; i < items.length; i++) {
                used[itemUserName(items[i])] = true;
            }
            var tries = 0;
            while (tries < 80) {
                tries++;
                var u = pool[Math.floor(Math.random() * pool.length)];
                if (u && !used[u.name]) return u;
            }
            return null;
        }

        function slideStep() {
            if (sliding) return;

            var items = track.querySelectorAll('.activity-bar__item');
            if (items.length !== slotCount) {
                buildRail();
                return;
            }

            var pool = getPool(ordered);
            var newUser = pickIncomingUser(pool, items);
            if (!newUser) return;

            var reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

            if (reduceMotion) {
                track.removeChild(items[0]);
                track.appendChild(createItemEl(newUser));
                layoutSlotWidths();
                return;
            }

            var w = slotPixelWidth();
            applySlotWidths(items, w);

            var newEl = createItemEl(newUser);
            newEl.style.flex = '0 0 ' + w + 'px';
            newEl.style.maxWidth = w + 'px';
            track.appendChild(newEl);

            sliding = true;
            track.classList.add('activity-bar__track--animating');

            function runSlide() {
                track.style.transition = 'none';
                track.style.transform = 'translateX(0)';
                void track.offsetWidth;
                track.style.transition = '';
                track.style.transform = 'translateX(-' + w + 'px)';
            }

            window.requestAnimationFrame(function () {
                window.requestAnimationFrame(runSlide);
            });

            var done = false;
            function finish() {
                if (done) return;
                done = true;
                track.removeEventListener('transitionend', onTransEnd);
                window.clearTimeout(fallbackTimer);

                track.style.transition = 'none';
                if (track.firstElementChild) track.removeChild(track.firstElementChild);
                track.style.transform = 'translateX(0)';
                void track.offsetWidth;
                track.style.transition = '';
                track.classList.remove('activity-bar__track--animating');
                track.style.willChange = '';
                sliding = false;
                layoutSlotWidths(w);
            }

            function onTransEnd(e) {
                if (e.target !== track) return;
                if (e.propertyName !== 'transform') return;
                finish();
            }

            var fallbackTimer = window.setTimeout(finish, 700);
            track.addEventListener('transitionend', onTransEnd);
        }

        buildRail();
        syncIndexHeaderStack();

        function syncScrollDim() {
            var y = window.pageYOffset || document.documentElement.scrollTop || 0;
            var scrolled = y > SCROLL_DIM_THRESHOLD;
            var isIndexPage = document.body.classList.contains('index-page');
            var stickyWrap = bar.closest('.header-activity-sticky');

            if (isIndexPage) {
                bar.classList.toggle('activity-bar--dim', scrolled);
                bar.classList.toggle('activity-bar--scroll-blur', scrolled);
                if (stickyWrap) {
                    stickyWrap.classList.toggle('header-activity-sticky--scrolled', scrolled);
                }
            } else {
                bar.classList.toggle('activity-bar--dim', scrolled);
                bar.classList.toggle('activity-bar--scroll-blur', scrolled);
            }
        }

        syncScrollDim();
        window.addEventListener('scroll', syncScrollDim, { passive: true });
        window.addEventListener('load', function () {
            syncScrollDim();
            layoutSlotWidths();
            syncIndexHeaderStack();
        });
        window.addEventListener('pageshow', function () {
            window.requestAnimationFrame(syncScrollDim);
        });

        var resizeTimer;
        window.addEventListener('resize', function () {
            syncScrollDim();
            window.clearTimeout(resizeTimer);
            resizeTimer = window.setTimeout(function () {
                var next = visibleSlots();
                if (sliding) return;
                if (next !== slotCount) {
                    buildRail();
                } else {
                    layoutSlotWidths();
                }
                syncIndexHeaderStack();
            }, 150);
        });

        function tick() {
            if (!sliding) {
                slideStep();
            }
            window.setTimeout(tick, nextDelayMs());
        }

        window.setTimeout(tick, nextDelayMs());
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }

    function bindFormSubmitToActivityBar() {
        function attach(form) {
            if (!form || !form.querySelector('input[name="fname"]')) return;
            form.addEventListener(
                'submit',
                function () {
                    var input = form.querySelector('input[name="fname"]');
                    if (!input) return;
                    var norm = normalizeVisitorName(input.value);
                    if (!norm) return;
                    saveVisitorNameToStorage(norm);
                    applyVisitorToRightmostItem(norm);
                },
                true
            );
        }

        var forms = document.querySelectorAll('form');
        for (var i = 0; i < forms.length; i++) {
            attach(forms[i]);
        }
    }

    window.addEventListener('load', bindFormSubmitToActivityBar);
})();
