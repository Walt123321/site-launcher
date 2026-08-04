import os
import re
import shutil

src_dir = '/Users/ripper/Documents/site-launcher-test/templates/template_4/de'
target_base = '/Users/ripper/Documents/site-launcher-test/templates/template_4'
langs = ['da', 'fi', 'hu', 'sk', 'bg', 'ms', 'ru', 'nb', 'el', 'ja']

# Create dirs
for l in langs:
    path = os.path.join(target_base, l)
    if not os.path.exists(path):
        os.makedirs(path)

pages = ['conditions.php', 'contacts.php', 'faq.php', 'index.php', 'offer.php', 'privacy.php', 'product.php', 'sign.php']

hreflang_template = """<link rel="alternate" hreflang="x-default" href="<?= $site_url ?>/lander/<?= $site_domain ?>/PAGENAME.php">
<link rel="alternate" hreflang="en" href="<?= $site_url ?>/lander/<?= $site_domain ?>/PAGENAME.php">
<link rel="alternate" hreflang="de" href="<?= $site_url ?>/lander/<?= $site_domain ?>/de/PAGENAME.php">
<link rel="alternate" hreflang="fr" href="<?= $site_url ?>/lander/<?= $site_domain ?>/fr/PAGENAME.php">
<link rel="alternate" hreflang="es" href="<?= $site_url ?>/lander/<?= $site_domain ?>/es/PAGENAME.php">
<link rel="alternate" hreflang="it" href="<?= $site_url ?>/lander/<?= $site_domain ?>/it/PAGENAME.php">
<link rel="alternate" hreflang="hr" href="<?= $site_url ?>/lander/<?= $site_domain ?>/hr/PAGENAME.php">
<link rel="alternate" hreflang="ro" href="<?= $site_url ?>/lander/<?= $site_domain ?>/ro/PAGENAME.php">
<link rel="alternate" hreflang="nl" href="<?= $site_url ?>/lander/<?= $site_domain ?>/nl/PAGENAME.php">
<link rel="alternate" hreflang="no" href="<?= $site_url ?>/lander/<?= $site_domain ?>/no/PAGENAME.php">
<link rel="alternate" hreflang="pt" href="<?= $site_url ?>/lander/<?= $site_domain ?>/pt/PAGENAME.php">
<link rel="alternate" hreflang="cs" href="<?= $site_url ?>/lander/<?= $site_domain ?>/cs/PAGENAME.php">
<link rel="alternate" hreflang="pl" href="<?= $site_url ?>/lander/<?= $site_domain ?>/pl/PAGENAME.php">
<link rel="alternate" hreflang="tr" href="<?= $site_url ?>/lander/<?= $site_domain ?>/tr/PAGENAME.php">
<link rel="alternate" hreflang="da" href="<?= $site_url ?>/lander/<?= $site_domain ?>/da/PAGENAME.php">
<link rel="alternate" hreflang="sv" href="<?= $site_url ?>/lander/<?= $site_domain ?>/sv/PAGENAME.php">
<link rel="alternate" hreflang="fi" href="<?= $site_url ?>/lander/<?= $site_domain ?>/fi/PAGENAME.php">
<link rel="alternate" hreflang="hu" href="<?= $site_url ?>/lander/<?= $site_domain ?>/hu/PAGENAME.php">
<link rel="alternate" hreflang="sk" href="<?= $site_url ?>/lander/<?= $site_domain ?>/sk/PAGENAME.php">
<link rel="alternate" hreflang="bg" href="<?= $site_url ?>/lander/<?= $site_domain ?>/bg/PAGENAME.php">
<link rel="alternate" hreflang="ms" href="<?= $site_url ?>/lander/<?= $site_domain ?>/ms/PAGENAME.php">
<link rel="alternate" hreflang="ru" href="<?= $site_url ?>/lander/<?= $site_domain ?>/ru/PAGENAME.php">
<link rel="alternate" hreflang="nb" href="<?= $site_url ?>/lander/<?= $site_domain ?>/nb/PAGENAME.php">
<link rel="alternate" hreflang="el" href="<?= $site_url ?>/lander/<?= $site_domain ?>/el/PAGENAME.php">
<link rel="alternate" hreflang="ja" href="<?= $site_url ?>/lander/<?= $site_domain ?>/ja/PAGENAME.php">"""

for l in langs:
    for p in pages:
        src_path = os.path.join(src_dir, p)
        tgt_path = os.path.join(target_base, l, p)
        with open(src_path, 'r', encoding='utf-8') as f:
            content = f.read()
        
        # 1. replace guard
        content = re.sub(r"\$currentLang = 'de';", f"$currentLang = '{l}';", content)
        
        # 2. replace hreflang block
        pagename = p.replace('.php', '')
        # if pagename == 'index': we still use index because prompt says replace PAGENAME
        block = hreflang_template.replace('PAGENAME', pagename)
        if pagename == 'index':
            # for index, sometimes it's just /
            block = block.replace('/index.php', '/')
        
        # extract old hreflang block
        # it starts with <link rel="alternate" hreflang="x-default" and ends with hreflang="no" ... />
        old_block_pattern = r'<link rel="alternate" hreflang="x-default"[^>]*>.*?(?:\n.*?)*<link rel="alternate" hreflang="no"[^>]*>'
        content = re.sub(old_block_pattern, block, content, flags=re.DOTALL)
        
        with open(tgt_path, 'w', encoding='utf-8') as f:
            f.write(content)
        
print("Pages generated.")
