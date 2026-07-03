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
            <svg viewBox="0 0 272 92" xmlns="http://www.w3.org/2000/svg">
                <path fill="#4285F4" d="M115.75 47.18c0 12.77-9.99 22.18-22.25 22.18s-22.25-9.41-22.25-22.18C71.25 34.32 81.24 25 93.5 25s22.25 9.32 22.25 22.18zm-9.74 0c0-7.98-5.79-13.44-12.51-13.44S80.99 39.2 80.99 47.18c0 7.9 5.79 13.44 12.51 13.44s12.51-5.55 12.51-13.44z"/>
                <path fill="#EA4335" d="M163.75 47.18c0 12.77-9.99 22.18-22.25 22.18s-22.25-9.41-22.25-22.18c0-12.85 9.99-22.18 22.25-22.18s22.25 9.32 22.25 22.18zm-9.74 0c0-7.98-5.79-13.44-12.51-13.44s-12.51 5.46-12.51 13.44c0 7.9 5.79 13.44 12.51 13.44s12.51-5.55 12.51-13.44z"/>
                <path fill="#FBBC05" d="M209.75 26.34v39.82c0 16.38-9.66 23.07-21.08 23.07-10.75 0-17.22-7.19-19.66-13.07l8.48-3.53c1.51 3.61 5.21 7.87 11.17 7.87 7.31 0 11.84-4.51 11.84-13v-3.19h-.34c-2.18 2.69-6.38 5.04-11.68 5.04-11.09 0-21.25-9.66-21.25-22.09 0-12.52 10.16-22.26 21.25-22.26 5.29 0 9.49 2.35 11.68 4.96h.34v-3.61h9.25zm-8.56 20.92c0-7.81-5.21-13.52-11.84-13.52-6.72 0-12.35 5.71-12.35 13.52 0 7.73 5.63 13.36 12.35 13.36 6.63 0 11.84-5.63 11.84-13.36z"/>
                <path fill="#4285F4" d="M225 3v65h-9.5V3h9.5z"/>
                <path fill="#EA4335" d="M262.02 54.48l7.56 5.04c-2.44 3.61-8.32 9.83-18.48 9.83-12.6 0-22.01-9.74-22.01-22.18 0-13.19 9.49-22.18 20.92-22.18 11.51 0 17.14 9.16 18.98 14.11l1.01 2.52-29.65 12.28c2.27 4.45 5.8 6.72 10.75 6.72 4.96 0 8.4-2.44 10.92-6.14zm-23.28-7.98l19.82-8.23c-1.09-2.77-4.36-4.7-8.23-4.7-4.95 0-11.84 4.37-11.59 12.93z"/>
                <path fill="#4285F4" d="M35.29 41.41V32H67c.31 1.64.47 3.58.47 5.68 0 7.06-1.93 15.79-8.15 22.01-6.05 6.3-13.78 9.66-24.02 9.66C16.32 69.35.36 53.89.36 34.91.36 15.93 16.32.47 35.3.47c10.5 0 17.98 4.12 23.6 9.49l-6.64 6.64c-4.03-3.78-9.49-6.72-16.97-6.72-13.86 0-24.7 11.17-24.7 25.03 0 13.86 10.84 25.03 24.7 25.03 8.99 0 14.11-3.61 17.39-6.89 2.66-2.66 4.41-6.46 5.1-11.65l-22.49.01z"/>
            </svg>
        </div>
        <div class="search-bar-wrapper">
            <div class="search-bar">
                <span class="search-text"><?php echo htmlspecialchars($brand_name); ?></span>
                <div class="search-icons">
                    <div class="icon-btn" title="keyboard">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#9aa0a6" stroke-width="1.6"><rect x="2" y="6" width="20" height="12" rx="2"/><path d="M6 10h.01M10 10h.01M14 10h.01M18 10h.01M6 14h12"/></svg>
                    </div>
                    <div class="icon-btn" title="voice search">
                        <svg width="20" height="20" viewBox="0 0 24 24"><path fill="#4285f4" d="M12 15a3 3 0 0 0 3-3V6a3 3 0 0 0-6 0v6a3 3 0 0 0 3 3z"/><path fill="#34a853" d="M19 11a1 1 0 0 0-2 0 5 5 0 0 1-10 0 1 1 0 0 0-2 0 7 7 0 0 0 6 6.92V20H9a1 1 0 0 0 0 2h6a1 1 0 0 0 0-2h-2v-2.08A7 7 0 0 0 19 11z"/></svg>
                    </div>
                    <div class="search-divider"></div>
                    <div class="icon-btn" title="search by image">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#4285f4" stroke-width="1.6"><path d="M4 8V6a2 2 0 0 1 2-2h2M4 16v2a2 2 0 0 0 2 2h2M20 8V6a2 2 0 0 0-2-2h-2M20 16v2a2 2 0 0 1-2 2h-2"/><circle cx="12" cy="12" r="3"/></svg>
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
            <div class="search-tab active"><?php echo htmlspecialchars($t['tab_all']); ?></div>
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
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M9 20l-6-3V4l6 3 6-3 6 3v13l-6-3-6 3z"/></svg>
                <?php echo htmlspecialchars($t['tab_maps']); ?>
            </div>
            <div class="search-tab tab-more">
                <?php echo htmlspecialchars($t['tab_more']); ?>
            </div>
            <div class="search-tab">
                <?php echo htmlspecialchars($t['tab_tools']); ?>
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
                        <div class="icon-circle" style="background:<?php echo htmlspecialchars($r['color']); ?>">
                            <?php echo htmlspecialchars(mb_strtoupper(mb_substr($r['domain'], 0, 1))); ?>
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
                        <svg viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM6.97 11.03a.75.75 0 0 0 1.07 0l3.992-3.992a.75.75 0 0 0-1.071-1.071L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.071 1.071L6.97 11.03z"/></svg>
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
