<?php
// Output minification: strips leading-line indentation and HTML comments
// from the rendered page (never touches same-line/inline whitespace, or
// anything inside <script>/<style>/<pre>/<textarea>) to help the ТЗ's
// text-to-code ratio requirement (11-13%) without a visual change. Hooked
// here since offer_seo.php is require_once'd by every real page (root +
// all language folders) before any HTML output starts, and nowhere else
// (integration/send.php etc. don't include it, so JSON/API responses are
// never touched).
if (!function_exists('t3_minify_segment')) {
    function t3_minify_segment(string $segment): string {
        $segment = preg_replace('/<!--.*?-->/s', '', $segment);
        $segment = preg_replace('/[ \t]+\n/', "\n", $segment);
        $segment = preg_replace('/\n[ \t]+/', "\n", $segment);
        $segment = preg_replace('/\n{2,}/', "\n", $segment);
        return $segment;
    }

    function t3_minify_html(string $html): string {
        $pattern = '/<(script|style|pre|textarea)\b[^>]*>.*?<\/\1>/is';
        $result = '';
        $lastEnd = 0;
        if (preg_match_all($pattern, $html, $matches, PREG_OFFSET_CAPTURE)) {
            foreach ($matches[0] as $m) {
                [$matchedText, $offset] = $m;
                $result .= t3_minify_segment(substr($html, $lastEnd, $offset - $lastEnd));
                $result .= $matchedText;
                $lastEnd = $offset + strlen($matchedText);
            }
        }
        $result .= t3_minify_segment(substr($html, $lastEnd));
        return $result;
    }

    ob_start('t3_minify_html');
}

// ========================================
// 1) ДАННЫЕ ОФФЕРА (НАСТРОЙКИ БАЙЕРА)
// ========================================
// ВНИМАНИЕ: Настройки для конкретного оффера
// МЕНЯТЬ: При настройке для нового оффера

// Основные параметры оффера
$source = "Rivolixio";                    // Название оффера
$form_country = 'it';                              // Страна по умолчанию
$form_language = 'it';                             // Язык по умолчанию
$form_phone_country = 'it';                      // Страна телефона (auto = автоопределение)
$form_is_autologin = false;                        // Автологин (true/false)
$form_only_countries = json_encode(['it']);        // Разрешенные страны

// ========================================
// АВТООПРЕДЕЛЕНИЕ ГЕО ПО IP (только когда сайт запущен с гео "Unknown")
// ========================================
// При запуске с гео "Невідомо / Unknown" сюда прилетают маркеры
// $form_country = '' и $form_phone_country = 'auto' вместо конкретной страны
// (см. app.py). Определяем реальную страну посетителя на сервере — без
// стороннего API и без похода из браузера (клиентский ipapi.co слишком
// быстро упирался в лимит запросов):
//   1) заголовок CF-IPCountry — если домен проксируется через Cloudflare;
//   2) ?geo= / ?country= в URL — если Keitaro передаёт гео своим макросом.
// Если ни то, ни другое не сработало — маркеры остаются как есть, и дальше
// отрабатывает штатный клиентский фолбэк (validation.js).
$_qq_geo_guess = strtolower((string) ($_SERVER['HTTP_CF_IPCOUNTRY'] ?? ''));
if (!preg_match('/^[a-z]{2}$/', $_qq_geo_guess)) {
    $_qq_geo_guess = preg_replace('/[^a-z]/', '', strtolower((string) ($_GET['geo'] ?? $_GET['country'] ?? '')));
}
if (preg_match('/^[a-z]{2}$/', $_qq_geo_guess)) {
    if ($form_country === '') {
        $form_country = $_qq_geo_guess;
    }
    if ($form_phone_country === 'auto') {
        $form_phone_country = $_qq_geo_guess;
    }
}
// Если гео так и не определилось (ни CF-IPCountry, ни макрос Keitaro) --
// не отдаём буквальный 'auto' в разметку: intl-tel-input's built-in
// geoIP-фолбэк (client-side ipapi.co) ненадёжен и иногда роняет виджет
// с JS-ошибкой, оставляя поле телефона без флага/кода страны вообще.
// Безопасный статический дефолт лучше, чем сломанный виджет.
if ($form_phone_country === 'auto') {
    $form_phone_country = 'us';
}

// На регіональних (мовних) сторінках /xx/... телефонний код форми завжди
// підтягуємо по реальному IP відвідувача, навіть якщо для кампанії
// налаштована конкретна країна за замовчуванням -- ці сторінки обслуговують
// відвідувачів з різних країн незалежно від мови самої сторінки. Кореневі
// сторінки й далі показують налаштовану країну кампанії без змін.
$_qq_script_dir = isset($_SERVER['SCRIPT_FILENAME']) ? dirname($_SERVER['SCRIPT_FILENAME']) : __DIR__;
if (preg_match('/^[a-z]{2}$/', $_qq_geo_guess) && $_qq_script_dir !== __DIR__) {
    $form_country = $_qq_geo_guess;
    $form_phone_country = $_qq_geo_guess;
    // only_countries -- це allow-list, з яким звірявся initialCountry на клієнті
    // (isOnlyCountries() в validation.js блокує сабміт, якщо номер відвізитора
    // резолвиться не в ту країну, що в списку). Список був зафіксований під
    // країну запуску кампанії -- якщо не скинути його тут, реальний $_qq_geo_guess
    // майже напевно опиниться поза списком, і форма зламається так само,
    // як зламалась зі старим 'auto'-багом. На регіональних сторінках заздалегідь
    // невідомо, з яких країн прийдуть відвідувачі, тож знімаємо обмеження повністю.
    $form_only_countries = json_encode([]);
}



// ========================================
// 2) ДАННЫЕ ДЛЯ CRM (ЛИЧНЫЙ СЕТАП БАЙЕРА)
// ========================================
// ВНИМАНИЕ: Личные данные байера для API
// МЕНЯТЬ: При настройке для конкретного байера

$_SESSION['buyer_teamlead_chatid'] = '-1003243124891';    // ID чата тимлида
$_SESSION['buyer_affid'] = 'TNA';                   // Аффилиат ID байера
$_SESSION['buyer_chatid'] = '5935076163';                // ID чата байера
$_SESSION['buyer_token'] = '86dbmrlhbhjv8cjkx771h97cr7kaydpfg'; // API токен
$_SESSION['offer_id'] = 'OFFER_ID';                         // ID оффера в системе
$_SESSION['affiliate_id'] = 'AFFILIATE_ID';             // ID аффилиата в системе

// ========================================
// 3) ТЕХНИЧЕСКИЕ НАСТРОЙКИ (НЕ ТРОГАТЬ)
// ========================================
// ВНИМАНИЕ: Техническая конфигурация системы
// НЕ МЕНЯТЬ: Байеру не изменять!


// Домен для отслеживания
$domain = $_SERVER['HTTP_HOST'];

// Сохранение настроек оффера в сессию
$_SESSION['form_is_autologin'] = $form_is_autologin;
$_SESSION['source'] = $source;
$_SESSION['form_domain'] = $domain;

// Безопасность сессии
if (!isset($_SESSION['security_token'])) {
    $_SESSION['security_token'] = 'SECURE_SESSION_AUTHENTICATION_TOKEN';
}

?>
