<?php
if (empty($breadcrumb_name) || empty($breadcrumb_url)) {
    return;
}

$breadcrumbSchema = [
    '@context' => 'https://schema.org/',
    '@type' => 'BreadcrumbList',
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
?>
<script type="application/ld+json"><?= json_encode($breadcrumbSchema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) ?></script>
