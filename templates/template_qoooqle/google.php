<?php
// ============================================================
// QOOOQLE — Google SERP Simulator (main entry page)
// ============================================================

require_once __DIR__ . '/config.php';
require_once __DIR__ . '/translations.php';

// --- Resolve active language ---
$lang_param = isset($_GET['lang']) ? $_GET['lang'] : null;
$lang = get_active_lang($offer_lang, $lang_param);
$t = isset($translations[$lang]) ? $translations[$lang] : $translations['en'];

// --- HTML lang attribute (cz -> cs) ---
$html_lang = ($lang === 'cz') ? 'cs' : $lang;

// --- Replace {{BRAND}} placeholder helper ---
function q_rpl($val, $brand) {
    if (is_array($val)) {
        return array_map(function ($v) use ($brand) { return q_rpl($v, $brand); }, $val);
    }
    return str_replace('{{BRAND}}', $brand, $val);
}
$t = q_rpl($t, $brand_name);

// --- Dynamic Headquarters Override based on resolved active language ---
$geo_headquarters = [
    'es' => 'Madrid, España',
    'it' => 'Roma, Italia',
    'fr' => 'París, Francia',
    'de' => 'Berlín, Alemania',
    'pt' => 'Lisboa, Portugal',
    'nl' => 'Ámsterdam, Países Bajos',
    'tr' => 'Estambul, Turquía',
    'cz' => 'Praga, República Checa',
    'pl' => 'Varsovia, Polonia',
    'ro' => 'Bucarest, Rumanía',
    'no' => 'Oslo, Noruega',
    'sv' => 'Estocolmo, Suecia',
    'gb' => 'Londres, Reino Unido',
    'en' => 'London, United Kingdom',
];
$t['headquarters_val'] = isset($geo_headquarters[$lang]) ? $geo_headquarters[$lang] : 'London, United Kingdom';

// --- Extra tabs translations ---
$tab_ai_map = [
    'en' => 'AI Mode', 'es' => 'Modo IA', 'it' => 'Modalità IA', 'fr' => 'Mode IA',
    'de' => 'KI-Modus', 'pt' => 'Modo IA', 'nl' => 'AI-modus', 'tr' => 'Yapay Zeka',
    'cz' => 'Režim AI', 'pl' => 'Tryb AI', 'ro' => 'Mod AI', 'no' => 'AI-modus', 'sv' => 'AI-läge'
];
$tab_shopping_map = [
    'en' => 'Shopping', 'es' => 'Compras', 'it' => 'Shopping', 'fr' => 'Shopping',
    'de' => 'Shopping', 'pt' => 'Compras', 'nl' => 'Winkelen', 'tr' => 'Alışveriş',
    'cz' => 'Nákupy', 'pl' => 'Zakupy', 'ro' => 'Cumpărături', 'no' => 'Shopping', 'sv' => 'Shopping'
];
$tab_short_videos_map = [
    'en' => 'Short videos', 'es' => 'Vídeos cortos', 'it' => 'Video brevi', 'fr' => 'Vidéos courtes',
    'de' => 'Kurzvideos', 'pt' => 'Vídeos curtos', 'nl' => "Korte video's", 'tr' => 'Kısa videolar',
    'cz' => 'Krátká videa', 'pl' => 'Krótkie wideo', 'ro' => 'Videoclipuri scurte', 'no' => 'Korte videoer', 'sv' => 'Kortvideor'
];
$t['tab_ai'] = isset($tab_ai_map[$lang]) ? $tab_ai_map[$lang] : 'AI Mode';
$t['tab_shopping'] = isset($tab_shopping_map[$lang]) ? $tab_shopping_map[$lang] : 'Shopping';
$t['tab_short_videos'] = isset($tab_short_videos_map[$lang]) ? $tab_short_videos_map[$lang] : 'Short videos';

// --- Brand initials for favicon placeholder ---
$brand_initials_src = preg_split('/\s+/', trim($brand_name));
$brand_initials = '';
foreach (array_slice($brand_initials_src, 0, 2) as $word) {
    $brand_initials .= mb_strtoupper(mb_substr($word, 0, 1));
}
if ($brand_initials === '') $brand_initials = '?';

// --- Result definitions (source domain, target URL, avatar color) ---
function q_lang_qs($lang, $brand) {
    return '?lang=' . urlencode($lang) . '&brand=' . urlencode($brand);
}

function q_get_favicon($domain, $brand_initials, $offer_favicon) {
    global $offer_domain;
    if ($domain === $offer_domain) {
        if (!empty($offer_favicon) && file_exists(__DIR__ . '/' . ltrim($offer_favicon, '/'))) {
            return '<img src="' . htmlspecialchars($offer_favicon) . '" style="width:100%; height:100%; border-radius:50%; object-fit:cover;">';
        }
        // Brand fallback: Golden star/crest
        return '<svg viewBox="0 0 24 24" width="16" height="16" fill="#fbbc05" style="display:block;"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>';
    }

    // Determine consistent icon based on domain name hash
    $hash = md5($domain);
    $idx = hexdec(substr($hash, 0, 2)) % 4;

    if ($idx === 0) {
        // Newspaper (Media/News)
        return '<svg viewBox="0 0 24 24" width="16" height="16" fill="#4285f4" style="display:block;"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z"/></svg>';
    } elseif ($idx === 1) {
        // Globe (Portal/Global)
        return '<svg viewBox="0 0 24 24" width="16" height="16" fill="#34a853" style="display:block;"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/></svg>';
    } elseif ($idx === 2) {
        // Shield (Security/Reviews)
        return '<svg viewBox="0 0 24 24" width="16" height="16" fill="#ea4335" style="display:block;"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 15l-4-4 1.41-1.41L10 13.17l5.59-5.59L17 9l-7 7z"/></svg>';
    } else {
        // Trend/Finance
        return '<svg viewBox="0 0 24 24" width="16" height="16" fill="#ab47bc" style="display:block;"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-2 10h-4v4h-2v-4H7v-2h4V7h2v4h4v2z"/></svg>';
    }
}

$results = [
    [
        'domain'  => $offer_domain,
        'url'     => $offer_url,
        'path'    => $offer_domain,
        'color'   => '#4285f4',
        'title'   => $t['r1_title'],
        'snippet' => $t['r1_snippet'],
        'rating'  => false,
    ],
    [
        'domain'  => $offer_domain,
        'url'     => $offer_register_url,
        'path'    => $offer_domain . ' › register',
        'color'   => '#34a853',
        'title'   => $t['r2_title'],
        'snippet' => $t['r2_snippet'],
        'rating'  => false,
    ],
    [
        'domain'  => $newsnik1_domain,
        'url'     => $newsnik1_url . q_lang_qs($lang, $brand_name),
        'path'    => $newsnik1_domain . ' › reviews',
        'color'   => '#ea4335',
        'title'   => $t['r3_title'],
        'snippet' => $t['r3_snippet'],
        'rating'  => true,
    ],
    [
        'domain'  => $newsnik2_domain,
        'url'     => $newsnik2_url . q_lang_qs($lang, $brand_name),
        'path'    => $newsnik2_domain . ' › review',
        'color'   => '#fbbc05',
        'title'   => $t['r4_title'],
        'snippet' => $t['r4_snippet'],
        'rating'  => true,
    ],
    [
        'domain'  => $newsnik3_domain,
        'url'     => $newsnik3_url . q_lang_qs($lang, $brand_name),
        'path'    => $newsnik3_domain . ' › trading-bot',
        'color'   => '#8ab4f8',
        'title'   => $t['r5_title'],
        'snippet' => $t['r5_snippet'],
        'rating'  => true,
    ],
    [
        'domain'  => $offer_domain,
        'url'     => $offer_about_url,
        'path'    => $offer_domain . ' › about',
        'color'   => '#a142f4',
        'title'   => $t['r6_title'],
        'snippet' => $t['r6_snippet'],
        'rating'  => false,
    ],
];

$related = [$t['related_1'], $t['related_2'], $t['related_3'], $t['related_4'], $t['related_5'], $t['related_6'], $t['related_7'], $t['related_8']];
?>
<!DOCTYPE html>
<html lang="<?php echo htmlspecialchars($html_lang); ?>">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo htmlspecialchars($brand_name . $t['search_title']); ?></title>
<meta name="robots" content="noindex, nofollow">
<link rel="stylesheet" href="style.css">
</head>
<body>

<header class="google-header">
    <div class="header-top">
        <div class="google-logo">
            <svg aria-hidden="true" height="30" viewBox="0 0 92 30" width="92" xmlns="http://www.w3.org/2000/svg">
                <path fill="#4285F4" d="M10.35 23.1c5.89.06 9.9-3.9 9.9-9.98q0-.75-.14-1.7h-9.8v2.93h6.87c-.36 3.83-3.06 5.82-6.76 5.82-4.15 0-7.33-3.12-7.33-7.66 0-4.47 3.03-7.6 7.33-7.6 2.16 0 3.76.67 5.35 2.3l2.05-2.14c-1.8-2.1-4.4-3.1-7.44-3.1-5.9 0-10.49 4.43-10.49 10.5 0 5.8 4.43 10.58 10.46 10.64"/>
                <path fill="#EA4335" d="M29.33 23.1c4.41 0 7.6-3.23 7.6-7.72 0-4.4-3.12-7.67-7.6-7.67-4.23 0-7.57 3-7.57 7.67 0 4.45 3.15 7.73 7.57 7.73zm0-2.68c-2.68 0-4.56-2.2-4.56-5.04s1.98-4.99 4.56-4.99c2.73 0 4.57 2.2 4.57 5 0 2.87-1.88 5.03-4.57 5.03"/>
                <path fill="#FBBC05" d="M46.77 23.1c4.44 0 7.6-3.24 7.6-7.72 0-4.4-3.12-7.67-7.6-7.67-4.24 0-7.57 3-7.57 7.67 0 4.45 3.15 7.73 7.57 7.73zm0-2.68c-2.68 0-4.56-2.2-4.56-5.04s1.98-4.99 4.56-4.99c2.73 0 4.57 2.2 4.57 5 0 2.87-1.88 5.03-4.57 5.03"/>
                <path fill="#4285F4" d="M61.77 29.2q7.18 0 7.17-8.22V8.23h-2.93v1.8h-.06c-.92-1.43-2.66-2.23-4.62-2.23-4.24 0-6.82 3.23-6.82 7.54 0 4.3 2.51 7.46 6.93 7.46a5.5 5.5 0 0 0 4.47-2.26h.1v1.31c0 2.9-1.5 4.6-4.29 4.6-1.82 0-3.03-1-3.92-2.68l-2.66 1.17c1.4 2.96 3.4 4.26 6.63 4.26m0-9.2c-2.59 0-4.24-1.9-4.24-4.75 0-2.74 1.64-4.71 4.25-4.71s4.23 1.83 4.23 4.7c0 2.9-1.7 4.76-4.24 4.76"/>
                <path fill="#34A853" d="M74.3 2.41h-3.08v20.23h3.08z"/>
                <path fill="#EA4335" d="M83.4 23.08a7.4 7.4 0 0 0 6.34-3.52l-2.3-1.5a4.8 4.8 0 0 1-3.9 2.2 4.6 4.6 0 0 1-3.99-2.4l10.33-4.39a7 7 0 0 0-.28-1.07c-1.23-3.16-3.38-4.6-6.28-4.6-4.42 0-7.43 3.22-7.43 7.68 0 4.56 3.17 7.6 7.5 7.6zm-4.51-7.61v-.17c0-2.93 1.68-4.9 4.32-4.9 1.26 0 2.39.57 3.15 1.9z"/>
            </svg>
        </div>
        <div class="search-bar-wrapper">
            <div class="search-bar">
                <span class="search-text"><?php echo htmlspecialchars($brand_name); ?></span>
                <div class="search-icons">
                    <div class="icon-btn" title="keyboard">
                        <svg viewBox="0 0 24 24" width="20" height="20"><path fill="#9aa0a6" d="M19 4H5c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 14H5V6h14v12zm-3-2h2v-2h-2v2zm-4 0h2v-2h-2v2zm-4 0h2v-2H8v2zm-3 0h2v-2H5v2zm4-4h8v-2H9v2zm5-4h2V6h-2v2zm-4 0h2V6h-2v2zm-4 0h2V6H6v2z"></path></svg>
                    </div>
                    <div class="icon-btn" title="voice search">
                        <svg viewBox="0 0 24 24" width="20" height="20">
                            <path fill="#4285f4" d="M12 14c1.66 0 3-1.34 3-3V5c0-1.66-1.34-3-3-3S9 3.34 9 5v6c0 1.66 1.34 3 3 3z"/>
                            <path fill="#34a853" d="M11 18.92h2V22h-2z"/>
                            <path fill="#fbbc05" d="M7.05 16.87c-1.27-1.33-2.05-2.83-2.05-4.87h2c0 1.45.56 2.42 1.47 3.38v.32l-1.15 1.18z"/>
                            <path fill="#ea4335" d="M12 16.93a4.97 5.25 0 0 1-3.54-1.55l-1.41 1.49c1.26 1.34 3.02 2.13 4.95 2.13 3.87 0 6.99-2.92 6.99-7h-1.99c0 2.92-2.24 4.93-5 4.93z"/>
                        </svg>
                    </div>
                    <div class="search-divider"></div>
                    <div class="icon-btn" title="search by image">
                        <svg class="Gdd5U" focusable="false" viewBox="0 0 192 192" width="20" height="20" xmlns="http://www.w3.org/2000/svg">
                          <rect fill="none" height="192" width="192"></rect>
                          <g>
                            <path d="M141.2,36H116c-3.3,0-6,2.7-6,6v10c0,3.3,2.7,6,6,6h18c4.4,0,8,3.6,8,8v18c0,3.3,2.7,6,6,6h10c3.3,0,6-2.7,6-6V56.8 C164,45.3,152.7,36,141.2,36z" fill="#EA4335"></path>
                            <path d="M50.8,36c-11.5,0-20.8,9.3-20.8,20.8V82c0,3.3,2.7,6,6,6h10c3.3,0,6-2.7,6-6V64c0-4.4,3.6-8,8-8h18c3.3,0,6-2.7,6-6V42 c0-3.3-2.7-6-6-6H50.8z" fill="#4285F4"></path>
                            <path d="M50.8,156H76c3.3,0,6-2.7,6-6v-10c0-3.3-2.7-6-6-6H58c-4.4,0-8-3.6-8-8v-18c0-3.3-2.7-6-6-6H34c-3.3,0-6,2.7-6,6v25.2 C28,146.7,39.3,156,50.8,156z" fill="#FBBC05"></path>
                            <path d="M141.2,156c11.5,0,20.8-9.3,20.8-20.8V110c0-3.3-2.7-6-6-6h-10c-3.3,0-6,2.7-6,6v18c0,4.4-3.6,8-8,8h-18 c-3.3,0-6,2.7-6,6v10c0,3.3,2.7,6,6,6H141.2z" fill="#34A853"></path>
                            <path d="M96,62c-18.8,0-34,15.2-34,34s15.2,34,34,34s34-15.2,34-34S114.8,62,96,62z M96,114c-9.9,0-18-8.1-18-18 s8.1-18,18-18s18,8.1,18,18S105.9,114,96,114z" fill="#4285F4"></path>
                            <circle cx="132" cy="132" fill="#34A853" r="10"></circle>
                          </g>
                        </svg>
                    </div>
                </div>
                <div class="search-btn">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2"><circle cx="11" cy="11" r="7"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
                </div>
            </div>
        </div>
        <div class="header-right">
            <div class="icon-btn" title="apps">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="#9aa0a6"><circle cx="5" cy="5" r="2"/><circle cx="12" cy="5" r="2"/><circle cx="19" cy="5" r="2"/><circle cx="5" cy="12" r="2"/><circle cx="12" cy="12" r="2"/><circle cx="19" cy="12" r="2"/><circle cx="5" cy="19" r="2"/><circle cx="12" cy="19" r="2"/><circle cx="19" cy="19" r="2"/></svg>
            </div>
            <div class="avatar-circle"><?php echo htmlspecialchars(mb_substr($brand_initials, 0, 1)); ?></div>
        </div>
    </div>
    <div class="search-tabs-wrapper">
        <div class="search-tabs">
            <div class="search-tab">
                <svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor" style="margin-right: 5px;"><path d="M12 2L14.85 8.85L22 12L14.85 15.15L12 22L9.15 15.15L2 12L9.15 8.85L12 2Z"/></svg>
                <?php echo htmlspecialchars($t['tab_ai']); ?>
            </div>
            <div class="search-tab active">
                <?php echo htmlspecialchars($t['tab_all']); ?>
            </div>
            <div class="search-tab">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><rect x="3" y="3" width="18" height="18" rx="2"/><circle cx="8.5" cy="8.5" r="1.5"/><path d="M21 15l-5-5L5 21"/></svg>
                <?php echo htmlspecialchars($t['tab_images']); ?>
            </div>
            <div class="search-tab">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><rect x="2" y="4" width="15" height="16" rx="2"/><polygon points="20 8 20 16 22 16 22 8" fill="currentColor" stroke="none"/></svg>
                <?php echo htmlspecialchars($t['tab_videos']); ?>
            </div>
            <div class="search-tab">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><rect x="3" y="4" width="18" height="16" rx="2"/><path d="M3 9h18M8 4v16"/></svg>
                <?php echo htmlspecialchars($t['tab_news']); ?>
            </div>
            <div class="search-tab">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82zM7 7h.01"/></svg>
                <?php echo htmlspecialchars($t['tab_shopping']); ?>
            </div>
            <div class="search-tab">
                <svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor" style="margin-right: 5px;"><path d="M19 12a1 1 0 0 0-1 1v4.38l-4.5-2.25V9.87l4.5-2.25V11a1 1 0 0 0 2 0V6a1 1 0 0 0-1.5-.87l-14 7a1 1 0 0 0 0 1.74l14 7A1 1 0 0 0 19 20v-7a1 1 0 0 0-1-1zm-8 1.62l-4.5-2.25v-2.74l4.5 2.25v2.74z"/></svg>
                <?php echo htmlspecialchars($t['tab_short_videos']); ?>
            </div>
            <div class="search-tab tab-more">
                <?php echo htmlspecialchars($t['tab_more']); ?> ▾
            </div>
            <div class="search-tab">
                <?php echo htmlspecialchars($t['tab_tools']); ?> ▾
            </div>
        </div>
    </div>
</header>

<div class="page-content">
    <div class="stats-bar"><?php echo htmlspecialchars($t['stats_text']); ?></div>

    <div class="serp-layout">
        <div class="left-column">
            <?php foreach ($results as $r): ?>
            <div class="result-item">
                <a class="result-link" href="<?php echo htmlspecialchars($r['url']); ?>" target="_blank" rel="noopener">
                    <div class="result-source">
                        <div class="icon-circle" style="background:#303134; display:flex; align-items:center; justify-content:center; flex-shrink:0;">
                            <?php echo q_get_favicon($r['domain'], $brand_initials, $offer_favicon); ?>
                        </div>
                        <div class="source-info">
                            <span class="source-name"><?php echo htmlspecialchars($r['domain']); ?></span>
                            <span class="source-url">
                                <?php echo htmlspecialchars($r['path']); ?>
                                <span class="translate-link"><?php echo htmlspecialchars($t['translate']); ?></span>
                            </span>
                        </div>
                        <div class="three-dots">⋮</div>
                    </div>
                    <span class="result-title"><?php echo htmlspecialchars($r['title']); ?></span>
                    <div class="result-snippet"><?php echo htmlspecialchars($r['snippet']); ?></div>
                    <?php if ($r['rating']): ?>
                    <div class="star-rating">
                        <span class="stars">★★★★★</span>
                        <span class="rating-score">4.9</span>
                        <span class="rating-count">(2,847)</span>
                    </div>
                    <?php endif; ?>
                </a>
            </div>
            <?php endforeach; ?>

            <div class="related-searches">
                <h3><?php echo htmlspecialchars($t['related_title']); ?></h3>
                <div class="related-pills">
                    <?php foreach ($related as $rel): ?>
                    <div class="related-pill">
                        <svg viewBox="0 0 24 24"><path d="M15.5 14h-.79l-.28-.27a6.5 6.5 0 1 0-.7.7l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0A4.5 4.5 0 1 1 14 9.5 4.5 4.5 0 0 1 9.5 14z"/></svg>
                        <span><?php echo htmlspecialchars($rel); ?></span>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <div class="right-column">
            <div class="knowledge-panel">
                <div class="panel-header-image">
                    <div class="panel-brand-logo">
                        <?php if (!empty($offer_favicon) && file_exists(__DIR__ . '/' . ltrim($offer_favicon, '/'))): ?>
                        <img src="<?php echo htmlspecialchars($offer_favicon); ?>" alt="<?php echo htmlspecialchars($brand_name); ?>" style="width:44px;height:44px;border-radius:8px;">
                        <?php else: ?>
                        <div class="panel-brand-icon"><?php echo htmlspecialchars($brand_initials); ?></div>
                        <?php endif; ?>
                        <div class="panel-brand-name"><?php echo htmlspecialchars($brand_name); ?></div>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="panel-official">
                        <svg viewBox="0 0 16 16" fill-rule="evenodd" clip-rule="evenodd"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM6.97 11.03a.75.75 0 0 0 1.07 0l3.992-3.992a.75.75 0 0 0-1.071-1.071L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.071 1.071L6.97 11.03z"/></svg>
                        <?php echo htmlspecialchars($t['official_badge']); ?>
                    </div>
                    <div class="panel-title"><?php echo htmlspecialchars($brand_name); ?></div>
                    <div class="panel-subtitle"><?php echo htmlspecialchars($t['panel_subtitle']); ?></div>
                    <div class="panel-desc"><?php echo htmlspecialchars($brand_name . $t['panel_desc']); ?></div>
                    <div class="panel-info">
                        <div class="panel-info-row">
                            <span class="panel-info-label"><?php echo htmlspecialchars($t['founded_label']); ?></span>
                            <span class="panel-info-value"><?php echo htmlspecialchars($founded_year); ?></span>
                        </div>
                        <div class="panel-info-row">
                            <span class="panel-info-label"><?php echo htmlspecialchars($t['headquarters_label']); ?></span>
                            <span class="panel-info-value"><?php echo htmlspecialchars($t['headquarters_val']); ?></span>
                        </div>
                        <div class="panel-info-row">
                            <span class="panel-info-label"><?php echo htmlspecialchars($t['type_label']); ?></span>
                            <span class="panel-info-value"><?php echo htmlspecialchars($t['type_val']); ?></span>
                        </div>
                        <div class="panel-info-row">
                            <span class="panel-info-label"><?php echo htmlspecialchars($t['focus_label']); ?></span>
                            <span class="panel-info-value"><?php echo htmlspecialchars($t['focus_val']); ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="google-footer">
        <div class="footer-country"><?php echo htmlspecialchars($t['footer_country']); ?></div>
        <div class="footer-links">
            <a href="#"><?php echo htmlspecialchars($t['footer_privacy']); ?></a>
            <a href="#"><?php echo htmlspecialchars($t['footer_terms']); ?></a>
            <a href="#"><?php echo htmlspecialchars($t['footer_settings']); ?></a>
        </div>
    </footer>
</div>

</body>
</html>
