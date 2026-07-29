<?php
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