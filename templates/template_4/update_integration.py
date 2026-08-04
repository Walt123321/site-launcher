import os

def update_integration_thanks():
    path = '/Users/ripper/Documents/site-launcher-test/templates/template_4/integration/Thanks.php'
    if not os.path.exists(path):
        return
        
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

    with open(path, 'w', encoding='utf-8') as f:
        f.write(content)

update_integration_thanks()
print("integration/Thanks.php updated.")
