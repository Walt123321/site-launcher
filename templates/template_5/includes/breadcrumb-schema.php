<?php
// Перевірка базових змінних, без яких схема зламається
if (empty($site_name) || empty($site_url)) {
    return;
}

// Починаємо будувати граф розмітки
$schemaGraph = [
    '@context' => 'https://schema.org',
    '@graph' => [
        // 1. Розмітка сутності Організації (Бренду)
        [
            '@type' => 'Organization',
            '@id' => $site_url . '#organization',
            'name' => $site_name,
            'url' => $site_url,
            // Якщо у шаблонах є змінна з логотипом (наприклад, $logo_url або favicon), можна розкоментувати рядок нижче:
            // 'logo' => $site_url . '/favicon.svg', 
        ],
        
        // 2. Розмітка сутності Веб-сайту
        [
            '@type' => 'WebSite',
            '@id' => $site_url . '#website',
            'url' => $site_url,
            'name' => $site_name,
            'publisher' => [
                '@id' => $site_url . '#organization'
            ],
        ]
    ]
];

// 3. Розмітка Хлібних крихт (додається лише якщо задані відповідні змінні для внутрішньої сторінки)
if (!empty($breadcrumb_name) && !empty($breadcrumb_url)) {
    $schemaGraph['@graph'][] = [
        '@type' => 'BreadcrumbList',
        '@id' => $breadcrumb_url . '#breadcrumb',
        'itemListElement' => [
            [
                '@type' => 'ListItem',
                'position' => 1,
                'name' => $site_name,
                'item' => $site_url,
            ],
            [
                '@type' => 'ListItem',
                'position' => 2,
                'name' => $breadcrumb_name,
                'item' => $breadcrumb_url,
            ],
        ],
    ];
}
?>
<script type="application/ld+json"><?= json_encode($schemaGraph, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) ?></script>
