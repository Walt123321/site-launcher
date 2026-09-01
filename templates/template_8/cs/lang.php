<?php
require __DIR__ . '/../lang.php';
$site_lang = 'cs-CZ';
$form_language = 'cs'; // matches this page's own language, not the offer's global default

// ============================================================
// CS TRANSLATION OVERRIDES
// Identity/config vars ($site_name, $site_slug, $site_domain, $site_url, $app_price, $app_currency, $site_lang, $country_name, $country_flag_code, $privacy_last_update, $rating_value, $rating_count, $review_count, $form_country, $form_language, $form_phone_country, $form_only_countries, $review_1_author, $review_2_author, $review_3_author, $review_4_author, $quiz_consultant_name) are
// intentionally NOT overridden -- they stay exactly as inherited from the
// root lang.php.
// ============================================================

// Brand / Platform Variables

// Geo-language stats bar fallback content (used by the language-folder pages'
// own "stats" section; the fr/de/it/nl folders override these with native
// translations, the other 19 folders inherit this English fallback)
$stat_1_value = "4M+";
$stat_1_label = "Registrovaní Uživatelé";
$stat_2_value = "98+";
$stat_2_label = "Podporovaných Zemí";
$stat_3_value = "65+";
$stat_3_label = "Dostupných Měn";
$stat_4_value = "24/7";
$stat_4_label = "Přístup k Transakcím";
$stat_5_value = "256bitové";
$stat_5_label = "Standard Šifrování";
$stat_6_value = "$500M+";
$stat_6_label = "Celkové Vklady Klientů";

// Keitaro Form Integration Variables (defaults -- overwritten per-launch by
// generate_lang_files(); must stay valid on their own since nothing else in
// this file replaces them for a page that's ever served un-generated)

// 4 Verified Reviews (TZ Item 8)
$review_1_role = "Francie";
$review_1_text = "Začal jsem s 500 € jen abych viděl, jak platforma funguje. Po asi třech týdnech se můj zůstatek zvýšil na přibližně 1120 €. Rozhraní je snadno použitelné a tržní přehledy mi pomohly činit lepší rozhodnutí.";
$review_1_badge = "Vykázaný Výnos +18,4 %";

$review_2_role = "Německo";
$review_2_text = "Vyzkoušel jsem už několik obchodních platforem, ale tato je zatím moje oblíbená. Snadno se v ní orientuje, nástroje jsou skutečně užitečné a celkově mám velmi pozitivní zkušenost.";
$review_2_badge = "Vykázaný Výnos +19,1 %";

$review_3_role = "Itálie";
$review_3_text = "Nejvíce mě zaujalo, jak intuitivně vše působí. Registrace byla rychlá, dashboard je dobře uspořádaný a platforma pro mě obchodování mnohem usnadnila.";
$review_3_badge = "Vykázaný Výnos +16,8 %";

$review_4_role = "Nizozemsko";
$review_4_text = "Neměl jsem žádné předchozí zkušenosti s obchodováním, takže jsem začal s 750 €. Během měsíce jsem díky nástrojům a výukovým materiálům dosáhl něco přes 1765 €. Byl to skvělý způsob, jak si vybudovat důvěru.";
$review_4_badge = "Vykázaný Výnos +18,0 %";

$review_verified_label = "Ověřený Uživatel";
$reviews_section_title = "Recenze na $site_name";
$reviews_badge_trustworthy = "Důvěryhodné";
$reviews_summary_rating = "4,7";
$reviews_summary_count = "189";
$reviews_summary_desc = "Výkonná a intuitivní obchodní platforma s robustními automatizovanými nástroji, analýzami v reálném čase a rozsáhlými výukovými zdroji.";

// CONSULTANT / CHAT QUIZ (TZ Item 13)
$quiz_consultant_role = "Obchodní Konzultant";
$quiz_text_welcome = "Ahoj! Jsem váš osobní obchodní asistent. Vyplňte 30sekundový kvíz a zjistěte, jak by pro vás mohlo fungovat automatizované obchodování s AI.";
$quiz_text_q1 = "Obchodovali jste už někdy s kryptoměnami nebo na finančních trzích?";
$quiz_text_a1_yes = "Ano, mám nějaké zkušenosti";
$quiz_text_a1_no = "Ne, jsem úplný začátečník";
$quiz_text_q2 = "Jaký je váš hlavní finanční cíl s online obchodováním?";
$quiz_text_q3 = "Preferujete, aby AI prováděla obchody automaticky, nebo obchodovat ručně?";
$quiz_text_a3_yes = "Automatizované Obchodování s AI (Doporučeno)";
$quiz_text_a3_no = "Ruční Obchodování se Signály AI";
$quiz_text_q4 = "Jaký je váš počáteční rozpočet na obchodování?";
$quiz_text_a4_1 = "250 $ - 500 $";
$quiz_text_a4_2 = "500 $ - 1500 $";
$quiz_text_a4_3 = "1500 $+";
$quiz_text_q5 = "Jste připraveni vytvořit si účet a získat plný přístup k platformě?";
$quiz_text_a5_yes = "Ano, pojďme na to!";
$quiz_text_a5_no = "Rád bych více informací";
$quiz_text_loader = "Analyzujeme vaše odpovědi a připravujeme optimální obchodní parametry...";
$quiz_text_final_ttl = "Nastavení Vašeho Účtu Je Připraveno!";
$quiz_text_processing = "Konfigurace vašeho přístupu k platformě...";
$quiz_text_typing = "píše...";
$quiz_placeholder_fname = "Jméno";
$quiz_placeholder_lname = "Příjmení";
$quiz_placeholder_email = "E-mailová Adresa";
$quiz_placeholder_phone = "Telefonní Číslo";
$quiz_btn_submit = "Dokončit Registraci";

// METADATA (TZ Item 10)
$home_meta_title = "$site_name — Obchodní Platforma | Oficiální Stránka";
$home_meta_description = "Oficiální web $site_name nabízí bezpečnou platformu pro obchodování s kryptoměnami s pokročilými obchodními nástroji, tržními přehledy v reálném čase a uživatelsky přívětivým prostředím pro obchodníky.";

// NAVIGATION & HEADER (TZ Item 3, 12)
$nav_about = "O Nás";
$nav_how = "Jak To Funguje";
$nav_why = "Proč Obchodovat";
$nav_faq = "FAQ";
$nav_contacts = "Kontaktujte Nás";
$nav_signin = "Přihlásit se";
$nav_signup = "Registrovat se";

$mobnav_home = "Domů";
$mobnav_product = "Produkt";
$mobnav_offer = "Nabídka";
$mobnav_contact = "Kontaktujte Nás";
$mobnav_faq = "FAQ";
$mobnav_signup = "Registrovat se";

// HERO SECTION
$hero_h1 = "Platforma <mark>$site_name</mark>";
$hero_text = "Oficiální obchodní platforma pro kryptoměny $site_name";

// LEAD FORM
$form_fname_placeholder = "Jméno";
$form_lname_placeholder = "Příjmení";
$form_email_placeholder = "E-mail";
$form_phone_placeholder = "Telefonní Číslo";
$form_btn_submit = "Registrovat se";
$form_disclaimer_text = "Zadáním svých osobních údajů a kliknutím na tlačítko přijímáte <a class='link link-primary' href='privacy.php'>Zásady Ochrany Osobních Údajů</a> a <a class='link link-primary' href='conditions.php'>Podmínky Používání</a> tohoto webu.";

// SECURITY BADGES
$badge_ssl = "256bitové SSL";
$badge_payments = "Bezpečné Platby";
$badge_2fa = "2FA";
$badge_cold_storage = "98% Cold Storage";
$badge_regulated = "Regulováno";
$badge_traders_trust = "Přes 4M Obchodníků Důvěřuje";

// SAFE SECTION (Vos fonds sont en sécurité)
$safe_title = "<mark>Vaše Prostředky Jsou v Bezpečí</mark> s $site_name";
$safe_desc = "Šifrování na bankovní úrovni, ověření zpracovatelé plateb a 98% cold storage — vaše peníze jsou chráněny v každém kroku.";

$safe_item1_title = "Ověření Poskytovatelé Plateb";
$safe_item1_desc = "Platby jsou zpracovávány výhradně prostřednictvím certifikovaných poskytovatelů dodržujících mezinárodní bezpečnostní standardy. Údaje o vaší kartě nejsou nikdy uloženy na naší platformě.";
$safe_item1_badge = "Bezpečné Platby";

$safe_item2_title = "Dvoufaktorové Ověřování (2FA)";
$safe_item2_desc = "Přidejte svému účtu další vrstvu ochrany pomocí časově omezených jednorázových hesel přes SMS nebo Google Authenticator.";
$safe_item2_badge = "2FA";

$safe_item3_title = "98% Cold Storage";
$safe_item3_desc = "Naprostá většina digitálních aktiv je uchovávána v geograficky rozptýlených offline trezorech cold storage chráněných protokoly s více podpisy.";
$safe_item3_badge = "98% Cold Storage";

$safe_item4_title = "Regulovaná Realizace";
$safe_item4_desc = "Spolupracujeme s regulovanými makléřskými společnostmi a poskytovateli likvidity po celém světě, abychom udrželi soulad s předpisy, transparentnost a realizaci nejvyšší úrovně.";
$safe_item4_badge = "Regulováno";

$safe_item5_title = "256bitové SSL Šifrování";
$safe_item5_desc = "Veškeré přenosy dat mezi vaším prohlížečem a našimi servery jsou šifrovány kryptografickými protokoly vojenské úrovně TLS 1.3.";
$safe_item5_badge = "256bitové SSL";

// FREE GUIDE CTA BANNER (CTA 2)
$guide_cta_title = "Získejte Bezplatného Průvodce";
$guide_cta_subtitle = "«10 Chyb, Kterým Se Vyhnout při Obchodování s Kryptoměnami»";
$guide_cta_btn = "Získat Bezplatného Průvodce";

// TRUST SECTION (Pourquoi les investisseurs font confiance à Ciel Cryptance)
$trust_title = "Proč Obchodníci Důvěřují <mark>$site_name</mark>";
$trust_desc = "Přes 4 000 000 uživatelů po celém světě si vybírá $site_name pro její spolehlivost, výkonnou automatizaci a transparentní prostředí.";
$trust_subtitle = "Přední Výhody pro Moderního Obchodníka:";

$trust_item1_title = "Přístup ke Globálním Trhům";
$trust_item1_desc = "Obchodujte s více než 100 kryptoměnami, Forex páry, akciemi a komoditami z jednoho sjednoceného obchodního panelu.";

$trust_item2_title = "Robustní Ochrana Prostředků";
$trust_item2_desc = "Oddělené účty, nepřetržité biometrické kontroly a špičková kybernetická bezpečnost chrání váš kapitál 24 hodin denně, 7 dní v týdnu.";

$trust_item3_title = "Žádné Skryté Poplatky";
$trust_item3_desc = "Užijte si naprosto transparentní ceny. Bezplatná registrace, bezplatné vklady, žádné poplatky za správu platformy a okamžité žádosti o výběr.";

$trust_item4_title = "Vstřícná Podpora";
$trust_item4_desc = "Náš oddaný tým podpory je k dispozici prostřednictvím živého chatu, telefonu nebo e-mailu, aby vám pomohl s jakýmikoli otázkami nebo technickými dotazy.";

$trust_market_info_text = "Více informací o tržních podmínkách v roce 2026";
$trust_market_info_btn = "Proč Obchodovat";

// START TRADING CTA (CTA 3)
$start_cta_title = "Začněte Obchodovat s <span data-local-currency='$app_price'>$app_price $app_currency</span>!";
$start_cta_desc = "Připraveni vyzkoušet $site_name? Zaregistrujte se nyní a připojte se k rostoucí komunitě kryptoinvestorů a obchodníků.";
$start_cta_btn = "Registrovat se";

// FAQ SECTION
$faq_title = "Často Kladené Otázky $site_name <mark>(FAQ)</mark>";
$faq_q1 = "Co je $site_name a jak to funguje?";
$faq_a1 = "Jedná se o obchodní platformu poháněnou AI, která pro vás pracuje 24 hodin denně. Systém analyzuje trhy, vyhledává příležitosti a automaticky provádí obchody. Můžete nechat AI, aby se postarala o vše, nebo přepnout do ručního režimu a obchodovat podle vlastních podmínek kdykoli.";

$faq_q2 = "Jak bezpečné jsou moje peníze a údaje na $site_name?";
$faq_a2 = "Bezpečnost je zabudována do každé vrstvy platformy. Osobní údaje jsou chráněny pomocí mezinárodně uznávaných šifrovacích standardů a pokročilého ověřování účtu. Všechny finanční transakce jsou zpracovávány výhradně prostřednictvím důvěryhodných a ověřených poskytovatelů plateb. Veškerá vaše obchodní aktivita je viditelná v reálném čase, takže vždy přesně víte, co se děje s vašimi prostředky.";

$faq_q3 = "Mohu si kdykoli vybrat své zisky?";
$faq_a3 = "Ano. Neexistují žádná omezení, kdy nebo jak často můžete vybírat své prostředky z $site_name. Zůstatek vašeho účtu zůstává vždy pod vaší plnou kontrolou. Výběry jsou zpracovávány prostřednictvím stejných spolehlivých poskytovatelů plateb, které se používají pro vklady, což zaručuje rychlé a bezpečné převody.";

$faq_q4 = "Existují nějaké skryté poplatky nebo dodatečné náklady?";
$faq_a4 = "Žádné. $site_name neúčtuje žádné předplatné, registrační poplatky ani skryté náklady. Jedinou částkou potřebnou k zahájení je minimální vklad <span data-local-currency='$app_price'>$app_price $app_currency</span>, který je připsán přímo na váš obchodní účet. Přijímány jsou všechny hlavní platební metody, včetně kreditních karet, bankovních převodů a PayPal.";

$faq_q5 = "Je pro začátek potřeba nějaká předchozí obchodní zkušenost?";
$faq_a5 = "Vůbec ne. $site_name je navržena jak pro úplné začátečníky, tak pro zkušené obchodníky. V plně automatizovaném režimu se AI postará o vše za vás, včetně analýzy trhu, generování signálů a provádění příkazů. Pokud dáváte přednost tomu zůstat u kontroly, můžete kdykoli přepnout do ručního režimu.";

$faq_cta_text = "Máte otázky? Podívejte se na naše FAQ nebo kontaktujte náš tým podpory.";
$faq_cta_faq_btn = "FAQ";
$faq_cta_contact_btn = "Kontaktujte Nás";

// NEW TRADER LEAD SECTION (Bottom form)
$lead_title = "Nový v Obchodování?";
$lead_p1 = "Po registraci obdržíte našeho bezplatného průvodce <mark class='text-on-surface-tertiary-accent'>«10 Chyb, Kterým Se Vyhnout při Obchodování s Kryptoměnami»</mark>. Obsahuje přímočaré rady od našich nejzkušenějších analytiků, které vám pomohou vyhnout se běžným nástrahám.";
$lead_p2 = "Stačí zadat své údaje do registračního formuláře a my vám ho pošleme přímo do vaší schránky. Mnoho obchodníků začalo s tímto průvodcem a shledali ho neocenitelným pro budování důvěry při prvních obchodech.";
$lead_form_heading = "Trh nečeká — začněte ještě dnes!";

// FEATURES TABLE (Fonctionnalités principales)
$features_title = "<mark>Klíčové Funkce</mark> Obchodní Platformy $site_name";
$feature_1_title = "🤖 Technologie Platformy";
$feature_1_val = "Pokročilý obchodní motor poháněný AI";
$feature_2_title = "💳 Metody Financování";
$feature_2_val = "Hlavní kreditní karty, bankovní převody, PayPal";
$feature_3_title = "📱 Přístup k Platformě";
$feature_3_val = "Kompatibilita s více zařízeními (Počítač, Tablet, Mobil)";
$feature_4_title = "🚀 Míra Úspěšnosti";
$feature_4_val = "85% analytická přesnost";
$feature_5_title = "📊 Obchodní Nástroje";
$feature_5_val = "Kryptoměny, Forex, Akcie, Komodity, Drahé Kovy, CFD a další…";
$feature_6_title = "✍️ Nastavení Účtu";
$feature_6_val = "Rychlá a přímočará registrace";
$feature_7_title = "📞 Zákaznická Podpora";
$feature_7_val = "24/7 profesionální dedikovaná podpora";

// FOOTER DISCLAIMER (TZ Item 21)
$footer_disclaimer_p1 = "$site_name poskytuje vzdělávací obsah a obecné informace o finančních trzích, online obchodování a digitálních aktivech. Veškeré materiály zveřejněné na tomto webu, včetně článků, grafů, cenových údajů, tržních přehledů a analýz, slouží pouze pro informační účely a neměly by být považovány za finanční, investiční nebo právní poradenství. Ačkoli se snažíme udržovat náš obsah přesný a aktuální, nezaručujeme jeho úplnost ani spolehlivost a nepřijímáme žádnou odpovědnost za jakékoli ztráty vyplývající z používání tohoto webu.";
$footer_disclaimer_p2 = "Obchodování s kryptoměnami, Forexem, CFD, akciemi a dalšími finančními nástroji zahrnuje značné riziko a nemusí být vhodné pro každého investora. Tržní podmínky se mohou rychle měnit a minulá výkonnost nezaručuje budoucí výsledky. Před jakýmkoli investičním rozhodnutím pečlivě zhodnoťte svou finanční situaci a toleranci k riziku a v případě potřeby vyhledejte nezávislou odbornou radu. Investujte pouze peníze, o jejichž ztrátu si můžete dovolit přijít.";
$footer_copyright = "© " . date('Y') . " $site_name. All rights reserved.";

// FOOTER NAV LINKS
$footnav_about = "O Nás";
$footnav_how = "Jak To Funguje";
$footnav_why = "Proč Obchodovat";
$footnav_faq = "FAQ";
$footnav_contacts = "Kontaktujte Nás";
$footnav_privacy = "Zásady Ochrany Osobních Údajů";
$footnav_risk = "Upozornění na Riziko";
$footnav_terms = "Podmínky Používání";
$footnav_product = "Produkt";
$footnav_offer = "Nabídka";

// ABOUT PAGE VARIABLES
$about_meta_title = "O Nás | Oficiální Stránka $site_name";
$about_meta_description = "Zjistěte více o $site_name, naší misi demokratizovat finanční trhy prostřednictvím automatizace AI a našem bezpečnostním rámci na institucionální úrovni.";
$about_h1 = "O <mark>$site_name</mark>";
$about_lead = "Posilujeme obchodníky po celém světě prostřednictvím umělé inteligence, algoritmického provádění a podnikové bezpečnosti.";
$about_mission_title = "Naše Poslání";
$about_mission_text = "V $site_name věříme, že sofistikované obchodní technologie by měly být dostupné pro každého, nejen pro institucionální fondy. Naše platforma překlenuje propast mezi běžnými retailovými investory a nejmodernějšími výpočetními obchodními algoritmy.";
$about_tech_title = "Špičková Technologie";
$about_tech_text = "Naše systémy vyhodnocují každou sekundu přes 100 000 datových bodů na globálních trzích kryptoměn, Forexu a akcií. Kombinací prediktivních modelů strojového učení s exekucí v submilisekundách nabízíme extrémně nízký skluz a spolehlivý výkon.";
$about_sec_title = "Bezpečnost a Regulační Soulad";
$about_sec_text = "Důvěra klientů je hlavním základem našeho ekosystému. Implementujeme 256bitové TLS šifrování, přísné biometrické a 2FA protokoly a ukládáme 98 % všech digitálních rezerv do trezorů cold storage.";

// PRODUCT PAGE VARIABLES
$product_meta_title = "Obchodní Nástroje a Produkt | $site_name";
$product_meta_description = "Prozkoumejte obchodní motor a schopnosti AI, které pohánějí $site_name. Automatizované provádění příkazů, prediktivní analytika a intuitivní ovládání.";
$product_h1 = "<mark>Produkt a Funkce</mark> Platformy";
$product_lead = "Objevte inteligentní nástroje navržené tak, aby vám poskytly konkurenční výhodu na moderních kryptoměnových a finančních trzích.";
$product_f1_title = "Automatizovaný Obchodní Motor s AI";
$product_f1_text = "Nechte neuronové algoritmy analyzovat tržní trendy a provádět optimální obchody nepřetržitě bez emocí.";
$product_f2_title = "Analýzy Trhu v Reálném Čase";
$product_f2_text = "Hloubka knihy objednávek naživo, automatizované rozpoznávání vzorů a sledování institucionálního sentimentu na dosah ruky.";
$product_f3_title = "Sada pro Řízení Rizika";
$product_f3_text = "Granulární limity stop-loss a take-profit, kontrola maximální denní expozice a automatizované zajišťovací možnosti.";
$product_f4_title = "Přístupnost Napříč Platformami";
$product_f4_text = "Obchodujte bezproblémově napříč desktopovými prohlížeči, tablety a chytrými telefony s nulovou latencí a plnou synchronizací v cloudu.";

// OFFER PAGE VARIABLES
$offer_meta_title = "Speciální Nabídka a Podmínky | $site_name";
$offer_meta_description = "Objevte exkluzivní registrační nabídku $site_name. Začněte s počátečním vkladem $app_price $app_currency a získejte dedikovanou podporu.";
$offer_h1 = "Exkluzivní <mark>Obchodní Nabídka</mark>";
$offer_lead = "Začněte svou obchodní cestu ještě dnes s konkurenčními výhodami a dedikovaným individuálním zaškolením účtu.";
$offer_step1_title = "1. Rychlá Registrace";
$offer_step1_text = "Vyplňte náš stručný registrační formulář a zabezpečte si přístup ke svému osobnímu účtu za méně než 2 minuty.";
$offer_step2_title = "2. Financujte Svůj Obchodní Zůstatek";
$offer_step2_text = "Vložte standardní minimum $app_price $app_currency pomocí kreditní karty, bankovního převodu nebo elektronických peněženek. 100 % vašich prostředků jde přímo do vašeho obchodního zůstatku.";
$offer_step3_title = "3. Aktivujte Obchodování s AI";
$offer_step3_text = "Zvolte automatizovaný nebo asistovaný režim, vyberte si preferované páry aktiv a začněte obchodovat s plnými schopnostmi platformy.";

// CONTACTS PAGE VARIABLES
$contacts_meta_title = "Kontaktujte Podporu | $site_name";
$contacts_meta_description = "Spojte se s týmem $site_name. 24/7 podpora klientů, technická pomoc a dotazy k účtu.";
$contacts_h1 = "Kontaktujte <mark>Zákaznickou Podporu</mark>";
$contacts_lead = "Náš dedikovaný mezinárodní tým podpory je připraven vám pomoci 24 hodin denně, 7 dní v týdnu.";
$contacts_info_title = "Oficiální Dotazy";
$contacts_info_text = "S obecnými dotazy, ověřením účtu nebo technickou podporou nás kontaktujte prostřednictvím našich ověřených komunikačních kanálů.";
$contacts_support_hours = "24/7 Podpora prostřednictvím Živého Chatu a E-mailu";

// FAQ PAGE VARIABLES
$faq_meta_title = "FAQ a Znalostní Báze | $site_name";
$faq_meta_description = "Najděte odpovědi na často kladené otázky o účtech $site_name, vkladech, výběrech a automatizovaném obchodování s AI.";
$faq_h1 = "<mark>FAQ</mark> $site_name";
$faq_lead = "Jasné odpovědi na nejběžnější otázky týkající se bezpečnosti platformy, výběrů a automatizovaného obchodování.";

// PRIVACY POLICY PAGE VARIABLES
$privacy_meta_title = "Zásady Ochrany Osobních Údajů | $site_name";
$privacy_meta_description = "Přečtěte si naše komplexní Zásady Ochrany Osobních Údajů a pochopte, jak $site_name shromažďuje, chrání a spravuje vaše osobní údaje.";
$privacy_h1 = "Zásady Ochrany Osobních Údajů";
$privacy_p1 = "Tyto Zásady Ochrany Osobních Údajů popisují, jak $site_name shromažďuje, používá a zveřejňuje informace, když navštívíte náš web, zaregistrujete účet nebo používáte náš obchodní software.";
$privacy_sec1_title = "1. Sběr a Použití Dat";
$privacy_sec1_text = "Shromažďujeme nezbytné kontaktní údaje (jméno, e-mailová adresa, telefonní číslo) k založení vašeho účtu, propojení s ověřenými makléřskými partnery a ověření totožnosti v souladu s mezinárodními standardy KYC a AML.";
$privacy_sec2_title = "2. Cookies a Technologie Sledování";
$privacy_sec2_text = "Používáme nezbytné a analytické cookies ke zlepšení výkonu webu, personalizaci uživatelské zkušenosti a monitorování vzorců provozu. Nastavení cookies ve vašem prohlížeči můžete kdykoli upravit.";
$privacy_sec3_title = "3. Zabezpečení Dat a Práva GDPR";
$privacy_sec3_text = "Veškerá uživatelská data jsou šifrována při přenosu i v klidu pomocí kryptografických protokolů na bankovní úrovni. Podle Obecného Nařízení o Ochraně Osobních Údajů (GDPR) mají uživatelé právo požádat o přístup, opravu nebo výmaz svých osobních záznamů.";

// TERMS OF USE PAGE VARIABLES
$terms_meta_title = "Podmínky Používání | $site_name";
$terms_meta_description = "Prostudujte si oficiální Podmínky a Ustanovení upravující používání platformy $site_name a souvisejících služeb.";
$terms_h1 = "Podmínky Používání";
$terms_p1 = "Než začnete přistupovat k $site_name nebo ji používat, přečtěte si prosím pečlivě tyto Podmínky Používání. Registrací účtu souhlasíte s tím, že jste vázáni těmito ustanoveními.";
$terms_sec1_title = "1. Způsobilost Uživatele";
$terms_sec1_text = "Musíte mít alespoň 18 let a bydliště v jurisdikci, kde je online obchodování a interakce s kryptoměnami legálně povoleno. Jste odpovědní za zajištění souladu s místními zákony.";
$terms_sec2_title = "2. Registrace Účtu a Bezpečnost";
$terms_sec2_text = "Souhlasíte s poskytnutím pravdivých, přesných a úplných informací během registrace. Jste výhradně odpovědní za zachování důvěrnosti svých přihlašovacích údajů.";
$terms_sec3_title = "3. Omezení Odpovědnosti";
$terms_sec3_text = "$site_name poskytuje informační a softwarové zprostředkovatelské služby. Neposkytujeme personalizované finanční poradenství ani nezaručujeme ziskovost obchodování. Obchodování na finančních trzích s sebou nese neodmyslitelné kapitálové riziko.";

// RISK WARNING PAGE VARIABLES (TZ Item 19: Exact 4 sections)
$risk_meta_title = "Upozornění na Riziko a Právní Oznámení | $site_name";
$risk_meta_description = "Důležité upozornění na rizika týkající se obchodování s CFD, Forexem a kryptoměnami na $site_name. Před investováním si pečlivě přečtěte.";
$risk_h1 = "Upozornění na Riziko";
$risk_sec1_title = "1. Oznámení o Vysoce Rizikové Investici a Volatilitě";
$risk_sec1_text = "Obchodování s kryptoměnami, rozdílovými smlouvami (CFD), zahraniční měnou (Forex) a dalšími finančními aktivy zahrnuje značné riziko ztráty a nemusí být vhodné pro všechny investory. Trhy s kryptoměnami jsou výjimečně volatilní, přičemž ceny podléhají prudkým výkyvům v reakci na regulační oznámení, makroekonomické změny nebo tržní náladu. Nikdy byste neměli investovat peníze, o jejichž úplnou ztrátu si nemůžete dovolit přijít.";
$risk_sec2_title = "2. Nezávislé Finanční Poradenství";
$risk_sec2_text = "Veškeré materiály, nástroje, algoritmické signály a komentáře poskytované na $site_name slouží výhradně pro informační, vzdělávací a marketingové účely. Žádný z obsahů tohoto webu nepředstavuje personalizované investiční, právní nebo finanční poradenství. Před provedením jakýchkoli obchodů byste měli provést nezávislý výzkum nebo se poradit s licencovaným finančním poradcem.";
$risk_sec3_title = "3. Regulační a Geografická Omezení";
$risk_sec3_text = "Určité jurisdikce omezují nebo zakazují retailové obchodování s CFD a kryptoměnami. Je výhradní odpovědností uživatele ověřit, zda je přístup k $site_name a využívání partnerských makléřských společností v souladu s jeho místním právním rámcem.";
$risk_sec4_title = "4. Technologie Platformy a Provádění na Trhu";
$risk_sec4_text = "Automatizované obchodní nástroje, algoritmy umělé inteligence a tržní indikátory nezaručují zisky ani neeliminují tržní rizika. Technické poruchy, síťová latence, výpadky systému a nedostatek likvidity mohou vést ke zpoždění provádění obchodů nebo skluzu.";

// SIGN UP / LOGIN PAGE VARIABLES
$sign_meta_title = "Registrace / Přihlášení | $site_name";
$sign_meta_description = "Vytvořte si svůj bezplatný účet na $site_name a získejte přístup k inteligentním automatizovaným obchodním nástrojům, tržním signálům a bezpečným možnostem financování.";
$sign_h1 = "Zaregistrujte se do <mark>$site_name</mark>";
$sign_lead = "Připojte se k tisícům obchodníků a získejte okamžitý přístup k našemu obchodnímu motoru s AI.";

// ============================================================
// Geo-language template fallback content (TZ item 16). The
// language-folder pages (bg/cs/da/.../tr — everything except
// fr/de/it/nl, which have their own full native translations in
// their own lang.php) share ONE index.php body that pulls these
// vars. Without them defined here, those 19 folders render with
// entire sections blank. This is the English fallback so every
// geo folder renders a complete page even without a dedicated
// translator pass.
// ============================================================

// -- hero form / basic form labels --
$hero_form_heading = "Vytvořte si bezplatný účet";
$hero_form_button = "Registrovat se";
$form_name_placeholder = "Zadejte své jméno";
$form_surname_placeholder = "Zadejte své příjmení";
$form_disclaimer_prefix = "Zadáním svých osobních údajů a kliknutím na tlačítko souhlasíte se";
$form_privacy_link_label = "Zásadami Ochrany Osobních Údajů";
$form_disclaimer_and = "a";
$form_terms_link_label = "Podmínkami Používání";
$form_disclaimer_of_site = "tohoto webu.";

// -- partners strip --
$partners_label = "Důvěřují nám přední partneři";

// -- "what is" section --
$whatis_label = "O Platformě";
$whatis_title = "Co je $site_name?";
$whatis_intro = "$site_name je oficiální online obchodní platforma navržená tak, aby bylo krypto stejně jednoduché jako každodenní online bankovnictví.";
$whatis_icon_1_title = "Analýza Poháněná AI";
$whatis_icon_1_text = "Pokročilé algoritmy za vás zvládají složitost trhů.";
$whatis_icon_2_title = "Okamžité Provádění";
$whatis_icon_2_text = "Tisíce datových bodů zpracovaných každou sekundu — obchody bez zpoždění.";
$whatis_icon_3_title = "Jednoduchý, Intuitivní Dashboard";
$whatis_icon_3_text = "Zkontrolujte svůj zůstatek a otevřené pozice na první pohled, kdykoli.";
$whatis_icon_4_title = "Snadný Přístup, Bez Bariér";
$whatis_icon_4_text = "Začněte s minimálním vkladem pouhých $app_price $app_currency — bez skrytých poplatků.";
$whatis_cta_text = "Chcete se dozvědět více o našem týmu a našem produktu?";
$whatis_cta_link = "O Nás";

// -- stats section heading (per-stat label/value already set above) --
$stats_label = "$site_name v Číslech";
$stats_title = "Čísla, Která Mluví Hlasitěji než Sliby";

// -- key benefits section --
$benefits_label = "Klíčové Výhody";
$benefits_title = "Hlavní Výhody $site_name";
$benefit_1_title = "Platforma Přátelská pro Začátečníky";
$benefit_1_text = "Intuitivní grafy a průvodci krok za krokem vám pomohou začít, aniž byste se cítili přehlceni. Můžete obchodovat s kryptoměnami s důvěrou od prvního dne.";
$benefit_2_title = "Oficiální a Regulovaná";
$benefit_2_text = "$site_name je licencovaná a dodržuje platné finanční předpisy. Ke ochraně každého účtu používáme SSL šifrování a dvoufaktorové ověřování.";
$benefit_3_title = "Snadný Přístup, Bez Bariér";
$benefit_3_text = "S minimálním vkladem pouhých $app_price $app_currency může začít kdokoli. Není vyžadována žádná velká počáteční investice — začněte v malém a zvyšujte svou sázku s rostoucí důvěrou.";
$benefit_4_title = "Transparentní Poplatky";
$benefit_4_text = "Nikdy neuvidíte skryté poplatky. Uplatňujeme pouze minimální transakční nebo výběrové poplatky tam, kde je to relevantní, takže vždy přesně víte, co platíte.";
$benefit_5_title = "24/7 Přístup k Obchodování";
$benefit_5_text = "Obchodujte podle vlastního rozvrhu, ve dne i v noci. $site_name funguje stejně dobře na počítači jako na mobilu, takže zůstanete propojeni s trhem, ať jste kdekoli.";
$benefit_6_title = "Místní Zákaznická Podpora";
$benefit_6_text = "Náš tým podpory je k dispozici prostřednictvím chatu, telefonu nebo e-mailu. Skuteční lidé jsou zde, aby vám pomohli ve vašem jazyce, kdykoli to potřebujete.";
$benefits_trust_title = "Důvěřují Uživatelé po Celém Světě";
$benefits_trust_text = "Proto tolik uživatelů kryptoměn důvěřuje $site_name. Tisíce obchodníků již $site_name používají a každý den se připojují nové účty.";
$benefits_cta = "Registrovat se";
$benefits_badge_1 = "256bitové SSL";
$benefits_badge_2 = "Bezpečné Platby";
$benefits_badge_3 = "2FA";

// -- security section --
$security_label = "Bezpečnost";
$security_title = "Vaše Prostředky Jsou v Bezpečí s $site_name";
$security_subtitle = "Šifrování na bankovní úrovni, ověřené platby a 98% cold storage — vaše peníze jsou chráněny v každém kroku.";
$security_1_title = "Ověření Poskytovatelé Plateb";
$security_1_text = "Platby jsou zpracovávány výhradně certifikovanými poskytovateli, kteří splňují mezinárodní bezpečnostní standardy. Vaše platební údaje nejsou nikdy ukládány na našich serverech.";
$security_2_title = "256bitové SSL Šifrování";
$security_2_text = "Veškerá data vyměňovaná mezi vaším zařízením a naší platformou jsou šifrována 256bitovým TLS. Žádná třetí strana je nemůže zachytit ani přečíst.";
$security_3_title = "98% Cold Storage";
$security_3_text = "98 % aktiv je uchováváno v offline peněženkách bez připojení k internetu. Nikdo k nim nemůže vzdáleně přistupovat.";
$security_4_title = "Vícefaktorové Ověřování";
$security_4_text = "Pouze vy máte přístup ke svému účtu. Každé přihlášení je ověřeno druhým krokem, který ovládáte pouze vy.";
$security_5_title = "Monitorování Účtu";
$security_5_text = "Každé přihlášení, transakce nebo změna nastavení spouští okamžité oznámení, takže vždy víte, co se na vašem účtu děje.";
$security_6_title = "Ochrana Hesla";
$security_6_text = "Hesla jsou uložena v nečitelné, nevratné formě. Technicky nemáme způsob, jak vaše heslo vidět.";
$security_cta_title = "Získejte Bezplatného Průvodce!";
$security_cta_text = "Získejte našeho bezplatného průvodce pro začátečníky a začněte obchodovat ještě dnes.";
$security_cta_button = "Registrovat se";
$security_badge_1 = "98% Cold Storage";
$security_badge_2 = "Ověřené Platby";
$security_badge_3 = "Šifrováno";

// -- how it works section --
$how_label = "Jak To Funguje";
$how_title = "Jak To Funguje";
$how_1_title = "Zaregistrujte se";
$how_1_text = "Klikněte na tlačítko „Otevřít Účet“ a vyplňte registrační formulář svými údaji (jméno, e-mail a telefonní číslo). Trvá to jen minutu.";
$how_2_title = "Vložte Prostředky";
$how_2_text = "Dále financujte svůj účet. Minimální vklad je pouhých $app_price $app_currency. Můžete použít kreditní/debetní kartu, místní bankovní převod nebo oblíbené elektronické peněženky. (Tip: začněte s částkou, se kterou se cítíte pohodlně.)";
$how_3_title = "Začněte Obchodovat";
$how_3_text = "Jakmile jsou vaše prostředky na účtu, jste připraveni obchodovat. Vyberte si aktivum, které chcete (například BTC, SOL nebo USDT), a rozhodněte se pro svou strategii.";
$how_cta_label = "Jak To Funguje";
$how_cta_text = "Potřebujete více informací o tom, jak služba funguje?";
$how_cta_link = "Jak To Funguje";

// -- trust reasons section --
$trust_label = "Proč Obchodovat s Námi";
$trust_intro = "Připojte se k tisícům uživatelů, kteří již obchodují s $site_name. Na našem webu je dokonce zobrazeno živé počítadlo, které ukazuje, kolik lidí právě teď obchoduje.";
$trust_1_title = "Plně Regulovaná";
$trust_1_text = "$site_name je řádně registrovaná a dodržuje platné finanční předpisy. Působíme podle přísných pravidel, abychom zajistili vaši bezpečnost.";
$trust_2_title = "Pokročilá Bezpečnost";
$trust_2_text = "Veškerá vaše data a prostředky jsou šifrovány a zabezpečeny. Prosazujeme přísnou ochranu účtu prostřednictvím SSL šifrování a dvoufaktorového ověřování.";
$trust_3_title = "Transparentní Operace";
$trust_3_text = "Nikdy neskrýváme naše poplatky a nikdy nepřidáváme překvapivá pravidla. Před každou transakcí vidíte přesně, jaké poplatky platí.";
$trust_4_title = "Vstřícná Podpora";
$trust_4_text = "Náš tým podpory je k dispozici prostřednictvím chatu, telefonu nebo e-mailu, aby zodpověděl vaše otázky nebo vyřešil jakýkoli problém.";
$trust_cta_text = "Více informací o tržních podmínkách";
$trust_cta_link = "Proč Obchodovat";

// -- testimonials section heading (individual reviews already set above) --
$testimonials_label = "Reference";
$testimonials_title = "Důvěřuje Nám Přes 4M Obchodníků";

// -- FAQ section heading --
$faq_label = "FAQ";

// -- lead magnet CTA block --
$leadmagnet_title = "Nový v Obchodování?";
$leadmagnet_text1 = "Po registraci obdržíte našeho bezplatného průvodce,";
$leadmagnet_quote = "„10 Chyb, Kterým Se Vyhnout při Obchodování s Kryptoměnami“";
$leadmagnet_text2 = "plného jednoduchých tipů od našich nejzkušenějších analytiků, které vám pomohou vyhnout se nejčastějším chybám.";
$leadmagnet_text3 = "Stačí zadat své údaje během";
$leadmagnet_link = "registrace";
$leadmagnet_text4 = "a my vám ho pošleme přímo do vaší schránky. Mnoho investorů začalo s tímto průvodcem a říkají, že v tom byl skutečný rozdíl.";
$leadmagnet_text5 = "Trh nečeká — začněte ještě dnes!";

// -- pre-about CTA band --
$pre_about_title = "Připraveni Převzít Kontrolu nad Svým Obchodováním?";
$pre_about_text = "Připojte se k $site_name ještě dnes a objevte platformu postavenou na přehlednosti, bezpečnosti a výsledcích.";
$pre_about_button = "Registrovat se";

// -- pretest (quiz teaser) badges/CTA --
$pretest_title = "Začněte Obchodovat s $app_price $app_currency!";
$pretest_text = "Připraveni vyzkoušet $site_name? Zaregistrujte se nyní a připojte se k rostoucí komunitě kryptoinvestorů a obchodníků.";
$pretest_button = "Registrovat se";
$pretest_badge_1 = "Bezpečné";
$pretest_badge_2 = "Regulováno";
$pretest_badge_3 = "Důvěřuje Nám Přes 4M Obchodníků";

// -- about page --
$about_label = "O Nás";
$about_title = "O $site_name";
$about_intro = "$site_name vám nedává jen obchodní platformu — pomáháme vám obchodovat s jasností a důvěrou.";
$about_text_1 = "$site_name je oficiální online obchodní platforma navržená tak, aby bylo obchodování s kryptoměnami dostupné jak pro začátečníky, tak pro zkušené obchodníky.";
$about_text_2 = "Kombinujeme tržní analýzu poháněnou AI s jednoduchým, transparentním dashboardem, takže vždy přesně víte, na čem jste.";
$about_text_3 = "Každá část platformy je postavena kolem přehlednosti: žádné skryté poplatky, žádný matoucí žargon, jen jasné informace, na základě kterých můžete jednat.";
$about_text_4 = "Naše platforma vám ušetří hodiny hádání a chrání vás před neprůhlednými alternativami nízké kvality. Věříme, že obchodování by mělo být postaveno na přesnosti, ne na štěstí.";

// -- contact page --
$contact_label = "Kontaktujte Nás";
$contact_title = "Kontaktujte $site_name";
$contact_subtitle = "Máte otázku nebo potřebujete pomoc? Jsme zde, abychom vám poradili a provedli vás.";
$contact_text = "V $site_name věříme, že úspěch v obchodování nemá nic společného se štěstím — spoléhá na přesnost, předvídavost a správné nástroje.";
$contact_form_text = "Stačí vyplnit formulář níže a člen našeho týmu se vám brzy ozve.";
$contact_form_button = "Odeslat Zprávu";

// -- footer navigation labels (geo-page footer, TZ items 12/16/18) --
$footnav_col_pages = "Stránky";
$footnav_col_support = "Podpora";
$footnav_col_legal = "Právní Informace";
$footnav_col_company = "Společnost";
$footnav_home = "Domů";
$footnav_sitemap = "Mapa Webu";
$footnav_conditions = "Podmínky Používání";
$footnav_contact = "Kontaktujte Nás";
$footnav_signup = "Registrovat se";
$footer_risk_warning = "Upozornění na Riziko";

// -- geo-page footer legal disclaimer (single-paragraph variant used by
// the geo template's own footer layout; the two-paragraph TZ item 21
// text above -- $footer_disclaimer_p1/$footer_disclaimer_p2 -- covers
// the root pages) --
$footer_disclaimer = "$site_name poskytuje vzdělávací obsah a obecné informace o finančních trzích, online obchodování a digitálních aktivech. Veškeré materiály zveřejněné na tomto webu slouží pouze pro informační účely a neměly by být považovány za finanční, investiční nebo právní poradenství. Obchodování zahrnuje značné riziko a nemusí být vhodné pro každého investora. Investujte pouze peníze, o jejichž ztrátu si můžete dovolit přijít.";

// ============================================================
// Geo-language SUBPAGE fallback content (TZ item 16 cont.). Same
// rationale as the block above: conditions/contacts/faq/offer/
// privacy/product/risk-warning/sign.php share templates across the
// bg/cs/da/... stub folders and reference these vars directly.
// English fallback so every geo folder's subpages render complete.
// ============================================================

// -- shared form aliases (service-page forms reuse the hero disclaimer) --
$form_disclaimer_risk_note = "Přečtěte si také naše";
$form_text = $form_disclaimer_prefix;
$form_text_privacy = $form_privacy_link_label;
$form_text_privacy_and = $form_disclaimer_and;
$form_text_conditions = $form_terms_link_label;
$form_text_conditions_of = $form_disclaimer_of_site;
$form_text_risk_warning_note = $form_disclaimer_risk_note;
$form_submit = "Registrovat se";

// -- generic breadcrumbs (sign-up / product pages) --
$breadcrumb_home = "Domů";
$breadcrumb_current = "Registrace / Přihlášení";
$breadcrumb_product = "Produkt";

// -- sign-up page official heading --
$official_heading = "Zaregistrujte se na Oficiální Platformě $site_name™";
$official_description = "Vytvořte si bezplatný účet a začněte obchodovat s kryptoměnami na bezpečné, transparentní platformě.";

// -- product page: analytics banner --
$analytics_heading = "Obchodujte Chytřeji s $site_name";
$analytics_description = "Získejte jasná tržní data v reálném čase a přehledy poháněné AI. Čiňte informovaná obchodní rozhodnutí s důvěrou.";

// -- product page: dashboard preview --
$app_main_heading = "Váš Obchodní Dashboard";
$app_feature_1_title = "Živá Tržní Data";
$app_feature_1_text = "Ceny a grafy v reálném čase přímo na dosah";
$app_feature_2_title = "Sledování Portfolia";
$app_feature_2_text = "Komplexní metriky o vašem zůstatku a výkonu";
$app_feature_3_title = "Mobilní Zobrazení";
$app_feature_3_text = "Optimalizováno pro mobilní prohlížeče";
$app_feature_4_title = "Watchlisty";
$app_feature_4_text = "Sledujte aktiva, která sledujete";

// -- product page: capabilities --
$capabilities_main_title = "Co Očekávat";
$capabilities_feature_1_title = "Signály Poháněné AI";
$capabilities_feature_1_text = "Pokročilé algoritmy analyzují tržní signály a odhalují příležitosti nepřetržitě.";
$capabilities_feature_2_title = "Rychlá Registrace";
$capabilities_feature_2_text = "Zaregistrujte se během minut s bezpečným, přímočarým registračním procesem.";
$capabilities_feature_3_title = "Ověřená Bezpečnost";
$capabilities_feature_3_text = "256bitové SSL šifrování, 2FA a 98% cold storage chrání vaše prostředky v každém kroku.";
$capabilities_feature_4_title = "Nepřetržitá Podpora";
$capabilities_feature_4_text = "Získejte podporu od našeho týmu v každém kroku — od registrace až po váš první obchod.";

// -- product page: stats strip --
$products_stats_currencies_v = "65+";
$products_stats_currencies_l = "Dostupných Měn";
$products_stats_users_v = "4M+";
$products_stats_users_l = "Registrovaní Uživatelé";
$products_stats_volume_v = "98+";
$products_stats_volume_l = "Podporovaných Zemí";
$products_stats_countries_v = "24/7";
$products_stats_countries_l = "Přístup k Transakcím";

// -- product page: 3-step strip --
$step_1 = "Vytvořte si účet";
$step_2 = "Vložte prostředky";
$step_3 = "Začněte obchodovat se strategií, která vám vyhovuje";

// -- shared "last update" label (privacy page) --
$last_update = "Poslední aktualizace";

// -- FAQ page --
$faq_page_meta_title = "FAQ | Podpora $site_name";
$faq_page_meta_description = "Odpovědi na často kladené otázky o tom, jak $site_name funguje, o cenách a jak začít.";
$faq_page_title = "FAQ";
$faq_page_breadcrumb_home = "Domů";
$faq_page_breadcrumb_current = "FAQ";
$faq_page_help_title = "Jak vám můžeme pomoci?";
$faq_1_q = "Jak mám začít?";
$faq_1_a = "Vytvořte si účet, ověřte svou e-mailovou adresu a proveďte svůj první vklad — plány začínají již od $app_price $app_currency.";
$faq_2_q = "Jsou moje peníze a údaje v bezpečí? Je $site_name spolehlivá?";
$faq_2_a = "Ano. Vaše data jsou chráněna standardním 256bitovým šifrováním v odvětví a vaše prostředky jsou zabezpečeny dvoufaktorovým ověřováním a 98% cold storage.";
$faq_3_q = "Mohu kdykoli zrušit svůj účet nebo vybrat prostředky?";
$faq_3_a = "Ano. Neexistují žádná omezení výběrů. Kontaktujte náš tým podpory kdykoli — pomůžeme vám s vaším účtem nebo rychle zpracujeme váš výběr.";
$faq_4_q = "Jak zjistím, zda je tato platforma pro mě vhodná?";
$faq_4_a = "$site_name byla vytvořena jak pro naprosté začátečníky, tak pro zkušené obchodníky, kteří chtějí obchodovat efektivněji — každý nástroj na platformě je navržen tak, aby vás informoval a udržel vás pod kontrolou.";
$faq_5_q = "Potřebuji pro začátek obchodní zkušenosti?";
$faq_5_a = "Předchozí zkušenosti nejsou vyžadovány. Náš režim poháněný AI provede analýzu za vás a kdykoli můžete přepnout do ručního režimu, pokud chcete více kontroly.";

// -- contacts page --
$contacts_h3 = "S technickými dotazy nebo dotazy ohledně vašeho účtu nás prosím kontaktujte e-mailem";

// -- offer page (meta title/description already defined above) --
$offer_breadcrumb_home = "Domů";
$offer_breadcrumb_current = "Nabídka";
$offer_cta_h1 = "Začněte Obchodovat Ještě Dnes";
$offer_cta_text = "Připraveno během minut: zaregistrujte se, financujte svůj účet a začněte obchodovat s kryptoměnami na bezpečné, regulované platformě.";
$offer_how_it_works_title = "Jak To Funguje";
$offer_official_platform_title = "Toto Je Oficiální Obchodní Platforma $site_name™";
$offer_official_platform_text = "Důvěryhodný, transparentní způsob obchodování s kryptoměnami — s přehledy v reálném čase a plnou kontrolou.";

// -- conditions of use page --
$conditions_meta_title = "Podmínky Používání | $site_name";
$conditions_meta_description = "Přečtěte si oficiální Podmínky Používání webu a obchodní platformy $site_name.";
$conditions_breadcrumb_home = "Domů";
$conditions_breadcrumb_current = "Podmínky Používání";
$conditions_h1 = "Podmínky Používání";
$conditions_s1_title = "1. Obecná Ustanovení";
$conditions_s1_text = "Tento web poskytuje přístup k online obchodní platformě s kryptoměnami. Používání platformy představuje úplné přijetí těchto podmínek a našich Zásad Ochrany Osobních Údajů.";
$conditions_s2_title = "2. Způsobilost";
$conditions_s2_text = "Uživatelé musí mít alespoň 18 let a mít plnou právní způsobilost ve své příslušné jurisdikci.";
$conditions_s3_title = "3. Omezený Přístup";
$conditions_s3_text = "Přístup může být omezen v jurisdikcích, kde místní předpisy zakazují typ obchodní služby, kterou nabízíme.";
$conditions_s4_title = "4. Zakázané Použití";
$conditions_s4_text = "Uživatelé nesmí systém zneužívat, pokoušet se o neoprávněný přístup do našich systémů ani provádět reverzní inženýrství našeho softwaru.";
$conditions_s5_title = "5. Duševní Vlastnictví";
$conditions_s5_text = "Veškerý zdrojový kód, uživatelská rozhraní a značková aktiva zůstávají výhradním vlastnictvím provozující společnosti.";
$conditions_s6_title = "6. Odpovědnost";
$conditions_s6_text = "Nástroje platformy jsou poskytovány „tak jak jsou“. Nepřijímáme žádnou odpovědnost za výsledky vyplývající z vlastních obchodních rozhodnutí uživatele.";
$conditions_s7_title = "7. Služby Třetích Stran";
$conditions_s7_text = "Integrace s poskytovateli plateb třetích stran probíhají prostřednictvím zabezpečených připojení. Pro vklady a výběry uživatelé jednají přímo se svým zvoleným poskytovatelem.";
$conditions_s8_title = "8. Externí Odkazy";
$conditions_s8_text = "Odkazy na externí zdroje jsou poskytovány pouze pro pohodlí. Neschvalujeme ani nezaručujeme žádný externí software.";
$conditions_s9_title = "9. Různé";
$conditions_s9_text = "Vyhrazujeme si právo kdykoli upravit tyto podmínky nebo službu, přičemž změny budou zveřejněny na webu.";

// -- privacy policy page (meta title/description already defined above) --
$privacy_breadcrumb_home = "Domů";
$privacy_breadcrumb_current = "Zásady Ochrany Osobních Údajů";
$privacy_page_h1 = "Zásady Ochrany Osobních Údajů";
$privacy_intro = "Respektujeme vaše soukromí a zpracováváme osobní údaje v plném souladu s mezinárodními standardy a evropským GDPR.";
$privacy_transparency_title = "Transparentnost";
$privacy_transparency_text = "Jasně zveřejňujeme, jak jsou zpracovávána provozní telemetrická data. Pro další podrobnosti kontaktujte podporu.";
$privacy_usage_title = "Použití Dat";
$privacy_usage_text = "Data jsou používána výhradně k poskytování přístupu, zabezpečení relací a splnění povinností v souladu s předpisy.";
$privacy_rights_short_title = "Vaše Práva";
$privacy_rights_short_text = "Zachováváte si plná práva na prohlížení, aktualizaci nebo požádání o výmaz svých osobních údajů.";
$privacy_security_title = "Bezpečnost";
$privacy_security_text = "Používáme šifrování AES-256 a izolaci databází k ochraně provozních telemetrických dat.";
$privacy_s1_title = "1. Sběr Dat";
$privacy_s1_text = "Shromažďujeme telemetrii používání (IP adresa, systémové parametry, typ prohlížeče) a také ověřovací údaje předložené uživateli.";
$privacy_s2_title = "2. Právní Základ";
$privacy_s2_text = "Zpracování se opírá o výslovný souhlas uživatelů, požadavky na regulační soulad a poskytování služby.";
$privacy_s3_title = "3. Sdílení Dat";
$privacy_s3_text = "Data nejsou nikdy komerčně využívána. Zveřejnění jsou omezena na autorizované clearingové subjekty a technické partnery na základě dohody o mlčenlivosti (NDA).";
$privacy_s4_title = "4. Cookies";
$privacy_s4_text = "Nezbytné cookies se používají pro ověřování relace a optimalizaci rozhraní.";
$privacy_google_choices = 'Spravujte své preference sledování prostřednictvím <a href="http://www.google.com/settings/ads" target="_blank" rel="noopener">Nastavení Reklam Google</a> nebo použijte <a href="https://tools.google.com/dlpage/gaoptout" target="_blank" rel="noopener">Doplněk pro Odhlášení Google Analytics</a>. Můžete si také prohlédnout vlastní postupy Google ohledně dat v jeho <a href="https://www.google.com/intl/en/policies/privacy/" target="_blank" rel="noopener">Zásadách Ochrany Osobních Údajů</a>.';
$privacy_s5_title = "5. Uchovávání Dat";
$privacy_s5_text = "Osobní údaje jsou uchovávány pouze po dobu nezbytnou ke splnění požadavků na přístup k systému.";
$privacy_s6_title = "6. Mezinárodní Přenosy";
$privacy_s6_text = "Přeshraniční přenosy dat probíhají výhradně prostřednictvím šifrovaných kanálů a prostřednictvím standardních smluvních doložek.";
$privacy_s7_title = "7. Odkazy Třetích Stran";
$privacy_s7_text = "Nejsme odpovědní za postupy ochrany osobních údajů externích služeb třetích stran propojených z našeho webu.";
$privacy_s8_title = "8. Aktualizace";
$privacy_s8_text = "Tyto zásady mohou být pravidelně revidovány tak, aby odrážely systémové nebo právní změny.";
$privacy_rights_title = "Vaše Práva";
$privacy_rights_text = "Uživatelé mají právo požádat o přístup, opravu, omezené zpracování nebo úplný výmaz svých uložených dat.";

// -- risk warning page --
$page_title_risk_warning = "Upozornění na Riziko | $site_name";
$page_description_risk_warning = "Pochopte rizika obchodování a jak vám $site_name pomáhá je bezpečně řídit.";
$risk_warning_breadcrumb_home = "Domů";
$risk_warning_breadcrumb_current = "Upozornění na Riziko";
$risk_warning_title = "Upozornění na Riziko";
$risk_warning_intro = "Pochopení rizik je prvním krokem k sebejistému obchodování.";
$risk_warning_ai_heading = "Jak náš AI systém pomáhá s řízením rizik:";
$risk_warning_ai_1 = "<strong>Algoritmická Efektivita a Obchodování bez Emocí:</strong> Pokročilé algoritmy analyzují tržní signály, aby objektivně prováděly obchody v optimálním okamžiku.";
$risk_warning_ai_2 = "<strong>Strategie Založené na Datech:</strong> Strategie jsou založeny na ověřených tržních vzorech a analýze v reálném čase, nikoli na hádání.";
$risk_warning_ai_3 = "<strong>Flexibilní Nastavení a Plná Kontrola:</strong> Kdykoli upravte své rizikové parametry. Sledujte všechny zůstatky a obchody transparentně na svém dashboardu — bez skrytých poplatků a bez omezení výběrů.";
$risk_warning_disclaimer = "<strong>Prohlášení o vyloučení odpovědnosti:</strong> Obchodování vždy nese riziko. Automatizované systémy (včetně AI) nezaručují zisk, mohou selhat kvůli softwarovým chybám nebo neočekávaným tržním událostem a vyžadují dohled uživatele. Minulá výkonnost není ukazatelem budoucích výsledků. Tato platforma slouží výhradně pro informační a marketingové účely a nepředstavuje finanční poradenství.";
$risk_warning_s1_heading = "1. Obecná Rizika a Rizika Trhu s Kryptoměnami";
$risk_warning_s1_1 = "Kryptoměny jsou vysoce volatilní, spekulativní aktiva, se kterými se obchoduje nepřetržitě a která podléhají pouze minimálnímu regulačnímu dohledu ve většině jurisdikcí.";
$risk_warning_s1_2 = "Hodnoty se mohou v krátkých obdobích drasticky kolísat, což může potenciálně vést k úplné ztrátě investovaného kapitálu.";
$risk_warning_s1_3 = "Tržní hodnoty mohou být významně ovlivněny regulačními změnami, technickým vývojem, bezpečnostními narušeními nebo širšími makroekonomickými událostmi.";
$risk_warning_s1_4 = "Některá aktiva mohou zcela ztratit svou hodnotu. Investujte pouze peníze, o jejichž ztrátu si můžete dovolit přijít.";
$risk_warning_s2_heading = "2. Riziko Provádění, Likvidity a Pákového Efektu";
$risk_warning_s2_1 = "<strong>Tržní Volatilita a Likvidita:</strong> Extrémní cenové pohyby (10-20 %+ denně) nebo nízká likvidita (zejména u menších mincí) mohou vést ke zpožděním, výpadkům platformy a významnému skluzu při provádění. Stop-loss příkazy nemohou zaručit omezení ztrát za extrémních podmínek.";
$risk_warning_s2_2 = "<strong>Riziko Pákového Efektu a Marže:</strong> Produkty s pákovým efektem zesilují jak zisky, tak ztráty, což znamená, že můžete ztratit více než svůj původní vklad. Přibližně 70-80 % účtů retailových investorů ztrácí peníze při obchodování s produkty s pákovým efektem.";
$risk_warning_s3_heading = "3. Technická, Kybernetická a Rizika Třetích Stran";
$risk_warning_s3_1 = "<strong>Technické Faktory:</strong> Online obchodování s sebou přirozeně nese rizika jako výpadky internetového připojení, poruchy hardwaru/softwaru a nedostupnost služby.";
$risk_warning_s3_2 = "<strong>Kybernetická Bezpečnost:</strong> Účty s kryptoměnami jsou častým cílem phishingu, malwaru a pokusů o hackování. Transakce jsou nevratné; kompromitace vašich přihlašovacích údajů může vést k trvalé ztrátě.";
$risk_warning_s3_3 = "<strong>Platformy Třetích Stran:</strong> Tento web může spojovat uživatele s platformami třetích stran. Nekontrolujeme, neschvalujeme ani nezaručujeme jejich bezpečnost, provoz nebo solventnost. Před vložením prostředků na externí platformy vždy proveďte vlastní důkladnou due diligence.";
$risk_warning_s4_heading = "4. Regulační, Daňová a Závěrečná Ustanovení";
$risk_warning_s4_1 = "<strong>Právní Soulad a Daně:</strong> Regulační rámce se značně liší a rychle se mění. Uživatelé jsou výhradně odpovědní za zajištění toho, aby jejich obchodní aktivita byla v souladu s místními zákony, a za plnění svých vlastních daňových povinností.";
$risk_warning_s4_2 = "<strong>Žádné Záruky Zisku:</strong> Neexistuje žádné „bezpečné“ nebo bezrizikové obchodování s kryptoměnami. Jakékoli uvedené výnosové číslice nebo příklady výkonnosti jsou čistě hypotetické.";
$risk_warning_s4_3 = "<strong>Vhodnost:</strong> Pokud plně nerozumíte rizikům, jste závislí na nezbytných finančních prostředcích nebo obchodujete s vypůjčenými penězi, obchodování s kryptoměnami pro vás není vhodné. V případě pochybností se poraďte s nezávislým, licencovaným finančním poradcem.";
$risk_warning_contact = "<strong>Kontakt:</strong> Máte-li dotazy ohledně tohoto prohlášení nebo si přejete podat dotaz, obraťte se prosím na náš oficiální tým zákaznické podpory prostřednictvím kontaktního formuláře na našem webu.";

