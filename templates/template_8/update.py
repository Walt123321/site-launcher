import re

def update_thanks():
    path = '/Users/ripper/Documents/site-launcher-test/templates/template_4/Thanks.php'
    with open(path, 'r', encoding='utf-8') as f:
        content = f.read()

    # Add missing translations
    translations = {
        'hr': "{ title: 'Čestitamo na uspješnoj registraciji u sustavu.', text: 'Primiti ćete poziv u roku od 24 sata - nemojte ga propustiti!' }",
        'nl': "{ title: 'Gefeliciteerd met uw succesvolle registratie in het systeem.', text: 'U ontvangt binnen 24 uur een oproep - mis deze niet!' }",
        'fr': "{ title: 'Félicitations pour votre inscription réussie dans le système.', text: 'Vous recevrez un appel dans les 24 heures - ne le manquez pas!' }",
        'no': "{ title: 'Gratulerer med vellykket registrering i systemet.', text: 'Du vil motta en samtale innen 24 timer - ikke gå glipp av den!' }",
        'da': "{ title: 'Tillykke med din vellykkede registrering i systemet.', text: 'Du vil modtage et opkald inden for 24 timer - gå ikke glip af det!' }",
        'sv': "{ title: 'Grattis till din framgångsrika registrering i systemet.', text: 'Du kommer att få ett samtal inom 24 timmar - missa det inte!' }",
        'fi': "{ title: 'Onnittelut onnistuneesta rekisteröitymisestä järjestelmään.', text: 'Saat puhelun 24 tunnin sisällä - älä mätää sitä!' }",
        'sk': "{ title: 'Blahoželáme k úspešnej registrácii v systéme.', text: 'Do 24 hodín dostanete hovor - nenechajte si ho ujsť!' }",
        'bg': "{ title: 'Поздравяваме за успешната ви регистрация в системата.', text: 'Ще получите обаждане в рамките на 24 часа - не го пропускайте!' }",
        'ms': "{ title: 'Tahniah atas pendaftaran anda yang berjaya dalam sistem.', text: 'Anda akan menerima panggilan dalam masa 24 jam - jangan lepaskan!' }",
        'nb': "{ title: 'Gratulerer med vellykket registrering i systemet.', text: 'Du vil motta en samtale innen 24 timer - ikke gå glipp av den!' }",
        'el': "{ title: 'Συγχαρητήρια για την επιτυχή εγγραφή σας στο σύστημα.', text: 'Θα λάβετε κλήση εντός 24 ωρών - μην την χάσετε!' }",
        'ja': "{ title: 'システムへのご登録おめでとうございます。', text: '24時間以内にお電話いたします。お見逃しなく！' }"
    }

    # Find the translations block
    for lang, val in translations.items():
        if f"            {lang}: {{" not in content:
            # insert before "        };" at the end of the translations object
            val_formatted = val.replace("{ title: ", "{\n                title: ").replace(", text: ", ",\n                text: ")
            replacement = f"            {lang}: {val_formatted},\n        }};"
            content = content.replace("        };", replacement, 1)

    # Missing hreflang links
    # the target languages are: hr, ro, nl, en, no, pt, cs, pl, tr, da, sv, fi, hu, sk, bg, ms, ru, nb, el, ja, de, fr, es, it
    langs = ['da', 'fi', 'hu', 'sk', 'bg', 'ms', 'ru', 'nb', 'el', 'ja']
    for lang in langs:
        link_str = f'<link rel="alternate" hreflang="{lang}" href="<?= $site_url ?>/lander/<?= $site_domain ?>/{lang}/Thanks.php" />'
        if link_str not in content:
            # insert before </head>
            content = content.replace("</head>", f"{link_str}\n</head>")

    with open(path, 'w', encoding='utf-8') as f:
        f.write(content)

def update_sitemap():
    path = '/Users/ripper/Documents/site-launcher-test/templates/template_4/sitemap.xml'
    with open(path, 'r', encoding='utf-8') as f:
        content = f.read()

    langs = ['da', 'fi', 'hu', 'sk', 'bg', 'ms', 'ru', 'nb', 'el', 'ja']
    
    # Sitemap has <url> blocks
    # We will inject the missing xhtml:link elements before </url>
    import xml.etree.ElementTree as ET
    # actually easier with string replace since structure is predictable
    # find all </url> and before it inject missing ones if not present
    
    urls = [
        "", "sign.php", "product.php", "privacy.php", "offer.php", "faq.php", "contacts.php", "conditions.php"
    ]
    
    for url in urls:
        # Construct what we expect to find
        # We need to inject lines like: <xhtml:link rel="alternate" hreflang="da" href="https://{{DOMAIN}}/lander/{{DOMAIN}}/da/PAGENAME" />
        for lang in langs:
            suffix = f"{lang}/" if url == "" else f"{lang}/{url}"
            link_str = f'        <xhtml:link rel="alternate" hreflang="{lang}" href="https://{{{{DOMAIN}}}}/lander/{{{{DOMAIN}}}}/{suffix}" />'
            if f'hreflang="{lang}"' not in content:
                # wait, this logic is flawed because we need to insert it in the correct <url> block.
                pass
    
    # Let's just do regex replacement for each <url> block
    # We match the <loc> inside the block to know which page it is
    def replacer(match):
        block = match.group(0)
        loc = match.group(1)
        # loc could be https://{{DOMAIN}}/ or https://{{DOMAIN}}/lander/{{DOMAIN}}/sign.php
        
        is_root = (loc == 'https://{{DOMAIN}}/')
        page = '' if is_root else loc.split('/')[-1]
        
        for lang in langs:
            if f'hreflang="{lang}"' not in block:
                suffix = f"{lang}/" if is_root else f"{lang}/{page}"
                link_str = f'        <xhtml:link rel="alternate" hreflang="{lang}" href="https://{{{{DOMAIN}}}}/lander/{{{{DOMAIN}}}}/{suffix}" />\n'
                block = block.replace('    </url>', link_str + '    </url>')
        return block

    new_content = re.sub(r'<url>\s*<loc>(.*?)</loc>.*?</url>', replacer, content, flags=re.DOTALL)
    
    with open(path, 'w', encoding='utf-8') as f:
        f.write(new_content)

update_thanks()
update_sitemap()
print("Thanks and sitemap updated.")
