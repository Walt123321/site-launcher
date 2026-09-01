<?php
require __DIR__ . '/../lang.php';
$site_lang = 'sk-SK';
$form_language = 'sk'; // matches this page's own language, not the offer's global default

// ============================================================
// SK TRANSLATION OVERRIDES
// Identity/config vars ($site_name, $site_slug, $site_domain, $site_url, $app_price, $app_currency, $site_lang, $country_name, $country_flag_code, $privacy_last_update, $rating_value, $rating_count, $review_count, $form_country, $form_language, $form_phone_country, $form_only_countries, $review_1_author, $review_2_author, $review_3_author, $review_4_author, $quiz_consultant_name) are
// intentionally NOT overridden -- they stay exactly as inherited from the
// root lang.php.
// ============================================================

// Brand / Platform Variables

// Geo-language stats bar fallback content (used by the language-folder pages'
// own "stats" section; the fr/de/it/nl folders override these with native
// translations, the other 19 folders inherit this English fallback)
$stat_1_value = "4M+";
$stat_1_label = "Registrovaní Používatelia";
$stat_2_value = "98+";
$stat_2_label = "Podporovaných Krajín";
$stat_3_value = "65+";
$stat_3_label = "Dostupných Mien";
$stat_4_value = "24/7";
$stat_4_label = "Prístup k Transakciám";
$stat_5_value = "256-bit";
$stat_5_label = "Šifrovací Štandard";
$stat_6_value = "$500M+";
$stat_6_label = "Celkové Vklady Klientov";

// Keitaro Form Integration Variables (defaults -- overwritten per-launch by
// generate_lang_files(); must stay valid on their own since nothing else in
// this file replaces them for a page that's ever served un-generated)

// 4 Verified Reviews (TZ Item 8)
$review_1_role = "Francúzsko";
$review_1_text = "Začal som s 500 € len aby som videl, ako platforma funguje. Po približne troch týždňoch môj zostatok narástol na približne 1120 €. Rozhranie je jednoduché na použitie a trhové prehľady mi pomohli robiť lepšie rozhodnutia.";
$review_1_badge = "Nahlásený Výnos +18,4 %";

$review_2_role = "Nemecko";
$review_2_text = "Predtým som vyskúšal niekoľko obchodných platforiem, ale táto je zatiaľ moja obľúbená. Je jednoduché sa v nej orientovať, nástroje sú naozaj užitočné a celkovo mám veľmi pozitívnu skúsenosť.";
$review_2_badge = "Nahlásený Výnos +19,1 %";

$review_3_role = "Taliansko";
$review_3_text = "Najviac ma zaujalo, aké intuitívne všetko pôsobí. Registrácia bola rýchla, ovládací panel je dobre usporiadaný a platforma mi obchodovanie výrazne uľahčila.";
$review_3_badge = "Nahlásený Výnos +16,8 %";

$review_4_role = "Holandsko";
$review_4_text = "Nemal som žiadne predchádzajúce skúsenosti s obchodovaním, takže som začal so 750 €. Do mesiaca som dosiahol niečo cez 1765 € vďaka sledovaniu nástrojov a vzdelávacích materiálov. Bol to skvelý spôsob, ako si vybudovať dôveru.";
$review_4_badge = "Nahlásený Výnos +18,0 %";

$review_verified_label = "Overený Používateľ";
$reviews_section_title = "Recenzie o $site_name";
$reviews_badge_trustworthy = "Dôveryhodné";
$reviews_summary_rating = "4,7";
$reviews_summary_count = "189";
$reviews_summary_desc = "Výkonná a intuitívna obchodná platforma s robustnými automatizovanými nástrojmi, analýzami v reálnom čase a komplexnými vzdelávacími zdrojmi.";

// CONSULTANT / CHAT QUIZ (TZ Item 13)
$quiz_consultant_role = "Obchodný Konzultant";
$quiz_text_welcome = "Ahoj! Som váš osobný obchodný asistent. Absolvujte 30-sekundový kvíz, aby ste zistili, ako by pre vás mohlo fungovať automatizované obchodovanie s AI.";
$quiz_text_q1 = "Obchodovali ste už niekedy s kryptomenami alebo na finančných trhoch?";
$quiz_text_a1_yes = "Áno, mám nejaké skúsenosti";
$quiz_text_a1_no = "Nie, som úplný začiatočník";
$quiz_text_q2 = "Aký je váš hlavný finančný cieľ pri online obchodovaní?";
$quiz_text_q3 = "Preferujete, aby AI vykonávala obchody automaticky, alebo chcete obchodovať manuálne?";
$quiz_text_a3_yes = "Automatizované Obchodovanie s AI (Odporúčané)";
$quiz_text_a3_no = "Manuálne Obchodovanie so Signálmi AI";
$quiz_text_q4 = "Aký je váš počiatočný rozpočet na obchodovanie?";
$quiz_text_a4_1 = "250 $ - 500 $";
$quiz_text_a4_2 = "500 $ - 1 500 $";
$quiz_text_a4_3 = "1 500 $+";
$quiz_text_q5 = "Ste pripravení vytvoriť si účet a získať plný prístup k platforme?";
$quiz_text_a5_yes = "Áno, poďme na to!";
$quiz_text_a5_no = "Rád by som mal viac informácií";
$quiz_text_loader = "Analyzujeme vaše odpovede a pripravujeme optimálne obchodné parametre...";
$quiz_text_final_ttl = "Nastavenie Vášho Účtu Je Pripravené!";
$quiz_text_processing = "Konfigurujeme váš prístup k platforme...";
$quiz_text_typing = "píše...";
$quiz_placeholder_fname = "Meno";
$quiz_placeholder_lname = "Priezvisko";
$quiz_placeholder_email = "E-mailová Adresa";
$quiz_placeholder_phone = "Telefónne Číslo";
$quiz_btn_submit = "Dokončiť Registráciu";

// METADATA (TZ Item 10)
$home_meta_title = "$site_name — Obchodná Platforma | Oficiálna Stránka";
$home_meta_description = "Oficiálna webová stránka $site_name ponúka bezpečnú platformu na obchodovanie s kryptomenami s pokročilými obchodnými nástrojmi, trhovými prehľadmi v reálnom čase a používateľsky prívetivým prostredím pre obchodníkov.";

// NAVIGATION & HEADER (TZ Item 3, 12)
$nav_about = "O Nás";
$nav_how = "Ako To Funguje";
$nav_why = "Prečo Obchodovať";
$nav_faq = "Časté Otázky";
$nav_contacts = "Kontaktujte Nás";
$nav_signin = "Prihlásiť Sa";
$nav_signup = "Zaregistrovať Sa";

$mobnav_home = "Domov";
$mobnav_product = "Produkt";
$mobnav_offer = "Ponuka";
$mobnav_contact = "Kontaktujte Nás";
$mobnav_faq = "Časté Otázky";
$mobnav_signup = "Zaregistrovať Sa";

// HERO SECTION
$hero_h1 = "Platforma <mark>$site_name</mark>";
$hero_text = "Oficiálna obchodná platforma pre kryptomeny $site_name";

// LEAD FORM
$form_fname_placeholder = "Meno";
$form_lname_placeholder = "Priezvisko";
$form_email_placeholder = "E-mail";
$form_phone_placeholder = "Telefónne Číslo";
$form_btn_submit = "Zaregistrovať Sa";
$form_disclaimer_text = "Zadaním svojich osobných údajov a kliknutím na tlačidlo súhlasíte so <a class='link link-primary' href='privacy.php'>Zásadami Ochrany Osobných Údajov</a> a <a class='link link-primary' href='conditions.php'>Podmienkami Používania</a> tejto webovej stránky.";

// SECURITY BADGES
$badge_ssl = "256-bit SSL";
$badge_payments = "Bezpečné Platby";
$badge_2fa = "2FA";
$badge_cold_storage = "98% Cold Storage";
$badge_regulated = "Regulované";
$badge_traders_trust = "Viac ako 4M Obchodníkov Dôveruje";

// SAFE SECTION (Vos fonds sont en sécurité)
$safe_title = "<mark>Vaše Prostriedky Sú v Bezpečí</mark> s $site_name";
$safe_desc = "Šifrovanie na bankovej úrovni, overení spracovatelia platieb a 98% cold storage — vaše peniaze sú chránené v každom kroku.";

$safe_item1_title = "Overení Poskytovatelia Platieb";
$safe_item1_desc = "Platby sú spracovávané výhradne prostredníctvom certifikovaných poskytovateľov, ktorí dodržiavajú medzinárodné bezpečnostné štandardy. Informácie o vašej karte nie sú nikdy uložené na našej platforme.";
$safe_item1_badge = "Bezpečné Platby";

$safe_item2_title = "Dvojfaktorové Overenie (2FA)";
$safe_item2_desc = "Pridajte svojmu účtu ďalšiu vrstvu ochrany pomocou časovo obmedzených jednorazových hesiel cez SMS alebo Google Authenticator.";
$safe_item2_badge = "2FA";

$safe_item3_title = "98% Cold Storage";
$safe_item3_desc = "Veľká väčšina digitálnych aktív je uchovávaná v geograficky rozptýlených offline cold storage trezoroch chránených protokolmi s viacnásobným podpisom.";
$safe_item3_badge = "98% Cold Storage";

$safe_item4_title = "Regulované Vykonávanie";
$safe_item4_desc = "Spolupracujeme s regulovanými maklérskymi spoločnosťami a poskytovateľmi likvidity po celom svete, aby sme zachovali súlad s predpismi, transparentnosť a vykonávanie na najvyššej úrovni.";
$safe_item4_badge = "Regulované";

$safe_item5_title = "256-bit SSL Šifrovanie";
$safe_item5_desc = "Všetky prenosy dát medzi vaším prehliadačom a našimi servermi sú šifrované kryptografickými protokolmi vojenskej úrovne TLS 1.3.";
$safe_item5_badge = "256-bit SSL";

// FREE GUIDE CTA BANNER (CTA 2)
$guide_cta_title = "Získajte Bezplatného Sprievodcu";
$guide_cta_subtitle = "«10 Chýb, Ktorým Sa Vyhnúť pri Obchodovaní s Kryptomenami»";
$guide_cta_btn = "Získať Bezplatného Sprievodcu";

// TRUST SECTION (Pourquoi les investisseurs font confiance à Ciel Cryptance)
$trust_title = "Prečo Obchodníci Dôverujú <mark>$site_name</mark>";
$trust_desc = "Viac ako 4 000 000 používateľov na celom svete si vyberá $site_name pre jeho spoľahlivosť, výkonnú automatizáciu a transparentné prostredie.";
$trust_subtitle = "Popredné Výhody pre Moderného Obchodníka:";

$trust_item1_title = "Prístup na Globálne Trhy";
$trust_item1_desc = "Obchodujte s viac ako 100 kryptomenami, Forex pármi, akciami a komoditami z jedného zjednoteného obchodného panela.";

$trust_item2_title = "Robustná Ochrana Prostriedkov";
$trust_item2_desc = "Oddelené účty, priebežné biometrické kontroly a najmodernejšia kybernetická bezpečnosť chránia váš kapitál 24/7.";

$trust_item3_title = "Žiadne Skryté Poplatky";
$trust_item3_desc = "Užite si absolútne transparentné ceny. Bezplatná registrácia, bezplatné vklady, žiadne poplatky za správu platformy a okamžité žiadosti o výber.";

$trust_item4_title = "Ústretová Podpora";
$trust_item4_desc = "Náš oddaný tím podpory je k dispozícii cez živý chat, telefón alebo e-mail, aby vám pomohol s akýmikoľvek otázkami alebo technickými požiadavkami.";

$trust_market_info_text = "Ďalšie informácie o trhových podmienkach v roku 2026";
$trust_market_info_btn = "Prečo Obchodovať";

// START TRADING CTA (CTA 3)
$start_cta_title = "Začnite Obchodovať s <span data-local-currency='$app_price'>$app_price $app_currency</span>!";
$start_cta_desc = "Ste pripravení vyskúšať $site_name? Zaregistrujte sa teraz a pripojte sa k rastúcej komunite kryptoinvestorov a obchodníkov.";
$start_cta_btn = "Zaregistrovať Sa";

// FAQ SECTION
$faq_title = "$site_name Často Kladené Otázky <mark>(FAQ)</mark>";
$faq_q1 = "Čo je $site_name a ako to funguje?";
$faq_a1 = "Je to obchodná platforma poháňaná AI, ktorá pre vás pracuje 24 hodín denne. Systém analyzuje trhy, identifikuje príležitosti a automaticky vykonáva obchody. Môžete nechať AI, aby sa postarala o všetko, alebo prepnúť do manuálneho režimu, aby ste mohli obchodovať podľa vlastných podmienok kedykoľvek.";

$faq_q2 = "Ako bezpečné sú moje peniaze a údaje na $site_name?";
$faq_a2 = "Bezpečnosť je zabudovaná do každej vrstvy platformy. Osobné údaje sú chránené pomocou medzinárodne uznávaných šifrovacích štandardov a pokročilého overovania účtu. Všetky finančné transakcie sú spracovávané výhradne prostredníctvom dôveryhodných a overených poskytovateľov platieb. Všetka vaša obchodná aktivita je viditeľná v reálnom čase, takže vždy presne viete, čo sa deje s vašimi prostriedkami.";

$faq_q3 = "Môžem si vybrať svoje zisky kedykoľvek?";
$faq_a3 = "Áno. Neexistujú žiadne obmedzenia, kedy alebo ako často si môžete vybrať svoje prostriedky z $site_name. Zostatok vášho účtu zostáva vždy pod vašou plnou kontrolou. Výbery sú spracovávané prostredníctvom rovnakých dôveryhodných poskytovateľov platieb, ktoré sa používajú na vklady, čo zaručuje rýchle a bezpečné prevody.";

$faq_q4 = "Existujú nejaké skryté poplatky alebo dodatočné náklady?";
$faq_a4 = "Žiadne. $site_name neúčtuje žiadne predplatné, registračné poplatky ani skryté náklady. Jediná suma potrebná na začatie je minimálny vklad <span data-local-currency='$app_price'>$app_price $app_currency</span>, ktorý je pripísaný priamo na váš obchodný účet. Akceptované sú všetky hlavné spôsoby platby vrátane kreditných kariet, bankových prevodov a PayPal.";

$faq_q5 = "Je pre začiatok potrebná predchádzajúca skúsenosť s obchodovaním?";
$faq_a5 = "Vôbec nie. $site_name je navrhnutá pre úplných začiatočníkov aj skúsených obchodníkov. V plne automatizovanom režime sa AI postará o všetko za vás, vrátane analýzy trhu, generovania signálov a vykonávania objednávok. Ak chcete radšej zostať pri kontrole, môžete kedykoľvek prepnúť do manuálneho režimu.";

$faq_cta_text = "Máte otázky? Pozrite si naše časté otázky alebo kontaktujte náš tím podpory.";
$faq_cta_faq_btn = "Časté Otázky";
$faq_cta_contact_btn = "Kontaktujte Nás";

// NEW TRADER LEAD SECTION (Bottom form)
$lead_title = "Nový v Obchodovaní?";
$lead_p1 = "Po registrácii dostanete náš bezplatný sprievodca <mark class='text-on-surface-tertiary-accent'>«10 Chýb, Ktorým Sa Vyhnúť pri Obchodovaní s Kryptomenami»</mark>. Obsahuje jednoduché rady od našich najskúsenejších analytikov, ktoré vám pomôžu vyhnúť sa bežným nástrahám.";
$lead_p2 = "Jednoducho zadajte svoje údaje do registračného formulára a my vám ho pošleme priamo do vašej schránky. Mnohí obchodníci začali s týmto sprievodcom a považovali ho za neoceniteľný pri budovaní dôvery v ich prvých obchodoch.";
$lead_form_heading = "Trh nečaká — začnite ešte dnes!";

// FEATURES TABLE (Fonctionnalités principales)
$features_title = "<mark>Kľúčové Funkcie</mark> Obchodnej Platformy $site_name";
$feature_1_title = "🤖 Technológia Platformy";
$feature_1_val = "Pokročilý obchodný nástroj poháňaný AI";
$feature_2_title = "💳 Metódy Financovania";
$feature_2_val = "Hlavné kreditné karty, bankové prevody, PayPal";
$feature_3_title = "📱 Prístup k Platforme";
$feature_3_val = "Kompatibilita s viacerými zariadeniami (Počítač, Tablet, Mobil)";
$feature_4_title = "🚀 Miera Úspešnosti";
$feature_4_val = "85% analytická presnosť";
$feature_5_title = "📊 Obchodné Nástroje";
$feature_5_val = "Kryptomeny, Forex, Akcie, Komodity, Drahé Kovy, CFD a ďalšie…";
$feature_6_title = "✍️ Nastavenie Účtu";
$feature_6_val = "Rýchla a jednoduchá registrácia";
$feature_7_title = "📞 Zákaznícka Podpora";
$feature_7_val = "24/7 profesionálna oddaná podpora";

// FOOTER DISCLAIMER (TZ Item 21)
$footer_disclaimer_p1 = "$site_name poskytuje vzdelávací obsah a všeobecné informácie o finančných trhoch, online obchodovaní a digitálnych aktívach. Všetky materiály zverejnené na tejto webovej stránke, vrátane článkov, grafov, cenových údajov, trhových prehľadov a analýz, sú určené len na informačné účely a nemali by byť považované za finančné, investičné alebo právne poradenstvo. Aj keď sa snažíme udržiavať náš obsah presný a aktuálny, nezaručujeme jeho úplnosť ani spoľahlivosť a nepreberáme žiadnu zodpovednosť za akékoľvek straty vyplývajúce z používania tejto webovej stránky.";
$footer_disclaimer_p2 = "Obchodovanie s kryptomenami, Forexom, CFD, akciami a inými finančnými nástrojmi zahŕňa značné riziko a nemusí byť vhodné pre každého investora. Trhové podmienky sa môžu rýchlo meniť a minulá výkonnosť nezaručuje budúce výsledky. Pred akýmkoľvek investičným rozhodnutím starostlivo zhodnoťte svoju finančnú situáciu a toleranciu rizika a v prípade potreby vyhľadajte nezávislé odborné poradenstvo. Investujte len peniaze, o ktorých stratu si môžete dovoliť prísť.";
$footer_copyright = "© " . date('Y') . " $site_name. All rights reserved.";

// FOOTER NAV LINKS
$footnav_about = "O Nás";
$footnav_how = "Ako To Funguje";
$footnav_why = "Prečo Obchodovať";
$footnav_faq = "Časté Otázky";
$footnav_contacts = "Kontaktujte Nás";
$footnav_privacy = "Zásady Ochrany Osobných Údajov";
$footnav_risk = "Upozornenie na Riziko";
$footnav_terms = "Podmienky Používania";
$footnav_product = "Produkt";
$footnav_offer = "Ponuka";

// ABOUT PAGE VARIABLES
$about_meta_title = "O Nás | Oficiálna Stránka $site_name";
$about_meta_description = "Zistite viac o $site_name, našom poslaní demokratizovať finančné trhy prostredníctvom AI automatizácie a našom bezpečnostnom rámci na inštitucionálnej úrovni.";
$about_h1 = "O <mark>$site_name</mark>";
$about_lead = "Posilňujeme obchodníkov na celom svete prostredníctvom umelej inteligencie, algoritmického vykonávania a bezpečnosti na podnikovej úrovni.";
$about_mission_title = "Naše Poslanie";
$about_mission_text = "V $site_name veríme, že sofistikované obchodné technológie by mali byť dostupné pre každého, nielen pre inštitucionálne fondy. Naša platforma prekonáva priepasť medzi bežnými retailovými investormi a najmodernejšími výpočtovými obchodnými algoritmami.";
$about_tech_title = "Špičková Technológia";
$about_tech_text = "Naše systémy vyhodnocujú viac ako 100 000 dátových bodov každú sekundu na globálnych kryptomenových, Forex a akciových trhoch. Kombinovaním prediktívnych modelov strojového učenia s vykonávaním v submilisekundách poskytujeme extrémne nízky skĺz a spoľahlivý výkon.";
$about_sec_title = "Bezpečnosť a Súlad s Predpismi";
$about_sec_text = "Dôvera zákazníkov je základným pilierom nášho ekosystému. Implementujeme 256-bitové TLS šifrovanie, prísne biometrické a 2FA protokoly a uchovávame 98% všetkých digitálnych rezerv v cold storage trezoroch.";

// PRODUCT PAGE VARIABLES
$product_meta_title = "Obchodné Nástroje a Produkt | $site_name";
$product_meta_description = "Preskúmajte obchodný nástroj a AI schopnosti, ktoré poháňajú $site_name. Automatizované vykonávanie objednávok, prediktívna analytika a intuitívne ovládanie.";
$product_h1 = "<mark>Produkt a Funkcie</mark> Platformy";
$product_lead = "Objavte inteligentné nástroje navrhnuté tak, aby vám poskytli konkurenčnú výhodu na moderných kryptomenových a finančných trhoch.";
$product_f1_title = "Automatizovaný Obchodný Nástroj s AI";
$product_f1_text = "Nechajte neurónové algoritmy analyzovať trhové trendy a vykonávať optimálne obchody nepretržite bez emócií.";
$product_f2_title = "Analýzy Trhu v Reálnom Čase";
$product_f2_text = "Hĺbka knihy objednávok naživo, automatizované rozpoznávanie vzorov a sledovanie inštitucionálneho sentimentu na dosah ruky.";
$product_f3_title = "Sada na Riadenie Rizika";
$product_f3_text = "Granulárne stop-loss a take-profit limity, kontroly maximálnej dennej expozície a automatizované zabezpečovacie schopnosti.";
$product_f4_title = "Dostupnosť Naprieč Platformami";
$product_f4_text = "Obchodujte bezproblémovo naprieč desktopovými prehliadačmi, tabletmi a smartfónmi s nulovou latenciou a plnou synchronizáciou v cloude.";

// OFFER PAGE VARIABLES
$offer_meta_title = "Špeciálna Ponuka a Podmienky | $site_name";
$offer_meta_description = "Objavte exkluzívnu registračnú ponuku s $site_name. Začnite s počiatočným vkladom $app_price $app_currency a získajte oddanú podporu.";
$offer_h1 = "Exkluzívna <mark>Obchodná Ponuka</mark>";
$offer_lead = "Začnite svoju obchodnú cestu ešte dnes s konkurenčnými výhodami a oddaným individuálnym zavedením do účtu.";
$offer_step1_title = "1. Rýchla Registrácia";
$offer_step1_text = "Vyplňte náš stručný registračný formulár, aby ste si zabezpečili prístup k svojmu osobnému účtu za menej ako 2 minúty.";
$offer_step2_title = "2. Financujte Svoj Obchodný Zostatok";
$offer_step2_text = "Vložte štandardné minimum $app_price $app_currency pomocou kreditnej karty, bankového prevodu alebo elektronických peňaženiek. 100% vašich prostriedkov ide priamo do vášho obchodného zostatku.";
$offer_step3_title = "3. Aktivujte Obchodovanie s AI";
$offer_step3_text = "Vyberte si automatizovaný alebo asistovaný režim, vyberte si preferované páry aktív a začnite obchodovať s plnými schopnosťami platformy.";

// CONTACTS PAGE VARIABLES
$contacts_meta_title = "Kontaktujte Podporu | $site_name";
$contacts_meta_description = "Spojte sa s tímom $site_name. 24/7 zákaznícka podpora, technická pomoc a otázky týkajúce sa účtu.";
$contacts_h1 = "Kontaktujte <mark>Zákaznícku Podporu</mark>";
$contacts_lead = "Náš oddaný medzinárodný tím podpory je pripravený vám pomôcť 24 hodín denne, 7 dní v týždni.";
$contacts_info_title = "Oficiálne Otázky";
$contacts_info_text = "Pre všeobecné otázky, overenie účtu alebo technickú podporu nás kontaktujte prostredníctvom našich overených komunikačných kanálov.";
$contacts_support_hours = "24/7 Podpora Prostredníctvom Živého Chatu a E-mailu";

// FAQ PAGE VARIABLES
$faq_meta_title = "Časté Otázky a Databáza Vedomostí | $site_name";
$faq_meta_description = "Nájdite odpovede na časté otázky o účtoch $site_name, vkladoch, výberoch a automatizovanom obchodovaní s AI.";
$faq_h1 = "$site_name <mark>Časté Otázky</mark>";
$faq_lead = "Jasné odpovede na najčastejšie otázky týkajúce sa bezpečnosti platformy, výberov a automatizovaného obchodovania.";

// PRIVACY POLICY PAGE VARIABLES
$privacy_meta_title = "Zásady Ochrany Osobných Údajov | $site_name";
$privacy_meta_description = "Prečítajte si naše komplexné Zásady Ochrany Osobných Údajov, aby ste pochopili, ako $site_name zhromažďuje, chráni a spravuje vaše osobné údaje.";
$privacy_h1 = "Zásady Ochrany Osobných Údajov";
$privacy_p1 = "Tieto Zásady Ochrany Osobných Údajov popisujú, ako $site_name zhromažďuje, používa a zverejňuje informácie, keď navštívite našu webovú stránku, zaregistrujete si účet alebo používate náš obchodný softvér.";
$privacy_sec1_title = "1. Zhromažďovanie a Používanie Údajov";
$privacy_sec1_text = "Zhromažďujeme potrebné kontaktné údaje (meno, e-mailová adresa, telefónne číslo) na založenie vášho účtu, prepojenie s overenými maklérskymi partnermi a overenie identity v súlade s medzinárodnými štandardmi KYC a AML.";
$privacy_sec2_title = "2. Súbory Cookie a Sledovacie Technológie";
$privacy_sec2_text = "Používame nevyhnutné a analytické súbory cookie na zlepšenie výkonu webovej stránky, personalizáciu používateľského zážitku a monitorovanie vzorcov návštevnosti. Nastavenia súborov cookie vo vašom prehliadači môžete kedykoľvek upraviť.";
$privacy_sec3_title = "3. Bezpečnosť Údajov a Práva GDPR";
$privacy_sec3_text = "Všetky údaje používateľov sú šifrované počas prenosu aj v pokoji pomocou kryptografických protokolov na bankovej úrovni. Podľa Všeobecného Nariadenia o Ochrane Údajov (GDPR) majú používatelia právo požiadať o prístup, opravu alebo vymazanie svojich osobných záznamov.";

// TERMS OF USE PAGE VARIABLES
$terms_meta_title = "Podmienky Používania | $site_name";
$terms_meta_description = "Prečítajte si oficiálne Podmienky a Ustanovenia, ktoré upravujú používanie platformy $site_name a súvisiacich služieb.";
$terms_h1 = "Podmienky Používania";
$terms_p1 = "Pred prístupom k $site_name alebo jej používaním si prosím pozorne prečítajte tieto Podmienky Používania. Registráciou účtu súhlasíte s tým, že budete viazaní týmito ustanoveniami.";
$terms_sec1_title = "1. Spôsobilosť Používateľa";
$terms_sec1_text = "Musíte mať aspoň 18 rokov a bydlisko v jurisdikcii, kde je online obchodovanie a interakcie s kryptomenami legálne povolené. Ste zodpovední za zabezpečenie súladu s vašimi miestnymi zákonmi.";
$terms_sec2_title = "2. Registrácia Účtu a Bezpečnosť";
$terms_sec2_text = "Súhlasíte s poskytnutím pravdivých, presných a úplných informácií počas registrácie. Ste výhradne zodpovední za zachovanie dôvernosti svojich prihlasovacích údajov.";
$terms_sec3_title = "3. Obmedzenie Zodpovednosti";
$terms_sec3_text = "$site_name poskytuje informačné a softvérové smerovacie služby. Neposkytujeme personalizované finančné poradenstvo ani nezaručujeme ziskovosť obchodovania. Obchodovanie na finančných trhoch nesie inherentné kapitálové riziko.";

// RISK WARNING PAGE VARIABLES (TZ Item 19: Exact 4 sections)
$risk_meta_title = "Upozornenie na Riziko a Právne Oznámenie | $site_name";
$risk_meta_description = "Dôležité zverejnenie rizika týkajúce sa obchodovania s CFD, Forexom a kryptomenami na $site_name. Pred investovaním si prečítajte pozorne.";
$risk_h1 = "Upozornenie na Riziko";
$risk_sec1_title = "1. Upozornenie na Vysoko Rizikovú Investíciu a Volatilitu";
$risk_sec1_text = "Obchodovanie s kryptomenami, zmluvami o vyrovnaní rozdielu (CFD), cudzou menou (Forex) a inými finančnými aktívami zahŕňa značné riziko straty a nie je vhodné pre všetkých investorov. Trhy s kryptomenami sú mimoriadne volatilné, pričom ceny podliehajú prudkým výkyvom v reakcii na regulačné oznámenia, makroekonomické zmeny alebo trhový sentiment. Nikdy by ste nemali investovať peniaze, o ktorých stratu v plnej výške si nemôžete dovoliť prísť.";
$risk_sec2_title = "2. Nezávislé Finančné Poradenstvo";
$risk_sec2_text = "Všetky materiály, nástroje, algoritmické signály a komentáre poskytované na $site_name sú určené výhradne na informačné, vzdelávacie a marketingové účely. Žiadny obsah na tejto webovej stránke nepredstavuje personalizované investičné, právne alebo finančné poradenstvo. Pred vykonaním akýchkoľvek obchodov by ste mali vykonať nezávislý prieskum alebo sa poradiť s licencovaným finančným poradcom.";
$risk_sec3_title = "3. Regulačné a Geografické Obmedzenia";
$risk_sec3_text = "Určité jurisdikcie obmedzujú alebo zakazujú retailové obchodovanie s CFD a kryptomenami. Je výhradnou zodpovednosťou používateľa overiť, či je prístup k $site_name a používanie partnerských maklérskych spoločností zákonné podľa ich miestneho právneho rámca.";
$risk_sec4_title = "4. Technológia Platformy a Trhové Vykonávanie";
$risk_sec4_text = "Automatizované obchodné nástroje, algoritmy umelej inteligencie a trhové ukazovatele nezaručujú zisky ani neeliminujú trhové riziká. Technické poruchy, sieťová latencia, výpadky systému a nedostatok trhovej likvidity môžu viesť k oneskoreniam pri vykonávaní obchodov alebo skĺzu.";

// SIGN UP / LOGIN PAGE VARIABLES
$sign_meta_title = "Registrácia / Prihlásenie | $site_name";
$sign_meta_description = "Vytvorte si bezplatný účet na $site_name, aby ste získali prístup k inteligentným automatizovaným obchodným nástrojom, trhovým signálom a bezpečným možnostiam financovania.";
$sign_h1 = "Zaregistrujte sa na <mark>$site_name</mark>";
$sign_lead = "Pripojte sa k tisíckam obchodníkov a získajte okamžitý prístup k nášmu obchodnému nástroju s AI.";

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
$hero_form_heading = "Vytvorte si bezplatný účet";
$hero_form_button = "Zaregistrovať Sa";
$form_name_placeholder = "Zadajte svoje meno";
$form_surname_placeholder = "Zadajte svoje priezvisko";
$form_disclaimer_prefix = "Zadaním svojich osobných údajov a kliknutím na tlačidlo súhlasíte s";
$form_privacy_link_label = "Zásadami Ochrany Osobných Údajov";
$form_disclaimer_and = "a";
$form_terms_link_label = "Podmienkami Používania";
$form_disclaimer_of_site = "tejto webovej stránky.";

// -- partners strip --
$partners_label = "Dôverujú nám poprední partneri";

// -- "what is" section --
$whatis_label = "O Platforme";
$whatis_title = "Čo je $site_name?";
$whatis_intro = "$site_name je oficiálna online obchodná platforma navrhnutá tak, aby bolo kryptomena rovnako jednoduchá ako každodenné online bankovníctvo.";
$whatis_icon_1_title = "Analýza Poháňaná AI";
$whatis_icon_1_text = "Pokročilé algoritmy riešia zložitosť trhov za vás.";
$whatis_icon_2_title = "Okamžité Vykonanie";
$whatis_icon_2_text = "Tisíce dátových bodov spracovaných každú sekundu — obchody bez oneskorenia.";
$whatis_icon_3_title = "Jednoduchý, Intuitívny Ovládací Panel";
$whatis_icon_3_text = "Skontrolujte svoj zostatok a otvorené pozície jedným pohľadom, kedykoľvek.";
$whatis_icon_4_title = "Jednoduchý Prístup, Bez Prekážok";
$whatis_icon_4_text = "Začnite s minimálnym vkladom len $app_price $app_currency — žiadne skryté poplatky.";
$whatis_cta_text = "Chcete sa dozvedieť viac o našom tíme a našom produkte?";
$whatis_cta_link = "O Nás";

// -- stats section heading (per-stat label/value already set above) --
$stats_label = "$site_name v Číslach";
$stats_title = "Čísla, Ktoré Hovoria Hlasnejšie Ako Sľuby";

// -- key benefits section --
$benefits_label = "Kľúčové Výhody";
$benefits_title = "Hlavné Výhody $site_name";
$benefit_1_title = "Platforma Priateľská pre Začiatočníkov";
$benefit_1_text = "Intuitívne grafy a sprievodcovia krok za krokom vám pomôžu začať bez pocitu preťaženia. Kryptomeny môžete obchodovať s dôverou od prvého dňa.";
$benefit_2_title = "Oficiálna a Regulovaná";
$benefit_2_text = "$site_name má licenciu a dodržiava platné finančné predpisy. Na ochranu každého účtu používame SSL šifrovanie a dvojfaktorové overenie.";
$benefit_3_title = "Jednoduchý Prístup, Bez Prekážok";
$benefit_3_text = "S minimálnym vkladom len $app_price $app_currency môže začať ktokoľvek. Nie je potrebná žiadna veľká počiatočná investícia — začnite v malom a zvyšujte svoju stávku, keď rastie vaša dôvera.";
$benefit_4_title = "Transparentné Poplatky";
$benefit_4_text = "Nikdy neuvidíte skryté poplatky. Uplatňujeme len minimálne transakčné alebo výberové poplatky tam, kde je to relevantné, takže vždy presne viete, čo platíte.";
$benefit_5_title = "24/7 Prístup k Obchodovaniu";
$benefit_5_text = "Obchodujte podľa vlastného rozvrhu, vo dne či v noci. $site_name funguje rovnako dobre na počítači ako na mobile, takže môžete zostať pripojení k trhu, kdekoľvek sa nachádzate.";
$benefit_6_title = "Miestna Zákaznícka Podpora";
$benefit_6_text = "Náš tím podpory je k dispozícii cez chat, telefón alebo e-mail. Skutoční ľudia sú tu, aby vám pomohli vo vašom jazyku, kedykoľvek to potrebujete.";
$benefits_trust_title = "Dôverujú Nám Používatelia Po Celom Svete";
$benefits_trust_text = "Preto toľko používateľov kryptomien dôveruje $site_name. Tisíce obchodníkov už používajú $site_name a nové účty sa pridávajú každý deň.";
$benefits_cta = "Zaregistrovať Sa";
$benefits_badge_1 = "256-bit SSL";
$benefits_badge_2 = "Bezpečné Platby";
$benefits_badge_3 = "2FA";

// -- security section --
$security_label = "Bezpečnosť";
$security_title = "Vaše Prostriedky Sú v Bezpečí s $site_name";
$security_subtitle = "Šifrovanie na bankovej úrovni, overené platby a 98% cold storage — vaše peniaze sú chránené v každom kroku.";
$security_1_title = "Overení Poskytovatelia Platieb";
$security_1_text = "Platby sú spracovávané výhradne certifikovanými poskytovateľmi, ktorí spĺňajú medzinárodné bezpečnostné štandardy. Vaše platobné údaje nie sú nikdy uložené na našich serveroch.";
$security_2_title = "256-bit SSL Šifrovanie";
$security_2_text = "Všetky dáta vymieňané medzi vaším zariadením a našou platformou sú šifrované 256-bit TLS. Žiadna tretia strana ich nemôže zachytiť ani prečítať.";
$security_3_title = "98% Cold Storage";
$security_3_text = "98% aktív je uchovávaných v offline peňaženkách bez internetového pripojenia. Nikto k nim nemôže vzdialene pristupovať.";
$security_4_title = "Viacfaktorové Overenie";
$security_4_text = "Iba vy môžete pristupovať k svojmu účtu. Každé prihlásenie je overené druhým krokom, ktorý ovládate len vy.";
$security_5_title = "Monitorovanie Účtu";
$security_5_text = "Každé prihlásenie, transakcia alebo zmena nastavení spustí okamžité upozornenie, takže vždy viete, čo sa deje na vašom účte.";
$security_6_title = "Ochrana Hesla";
$security_6_text = "Heslá sú uložené v nečitateľnej, nezvratnej forme. Technicky nemáme spôsob, ako vidieť vaše heslo.";
$security_cta_title = "Získajte Bezplatného Sprievodcu!";
$security_cta_text = "Získajte nášho bezplatného sprievodcu pre začiatočníkov a začnite obchodovať ešte dnes.";
$security_cta_button = "Zaregistrovať Sa";
$security_badge_1 = "98% Cold Storage";
$security_badge_2 = "Overené Platby";
$security_badge_3 = "Šifrované";

// -- how it works section --
$how_label = "Ako To Funguje";
$how_title = "Ako To Funguje";
$how_1_title = "Zaregistrujte Sa";
$how_1_text = "Kliknite na tlačidlo „Otvoriť Účet“ a vyplňte registračný formulár svojimi údajmi (meno, e-mail a telefónne číslo). Trvá to len minútu.";
$how_2_title = "Vložte Prostriedky";
$how_2_text = "Potom financujte svoj účet. Minimálny vklad je len $app_price $app_currency. Môžete použiť kreditnú/debetnú kartu, miestny bankový prevod alebo populárne elektronické peňaženky. (Tip: začnite so sumou, s ktorou sa cítite pohodlne.)";
$how_3_title = "Začnite Obchodovať";
$how_3_text = "Keď sú vaše prostriedky na vašom účte, ste pripravení obchodovať. Vyberte si aktívum, ktoré chcete (napríklad BTC, SOL alebo USDT), a rozhodnite sa pre svoju stratégiu.";
$how_cta_label = "Ako To Funguje";
$how_cta_text = "Potrebujete viac informácií o tom, ako služba funguje?";
$how_cta_link = "Ako To Funguje";

// -- trust reasons section --
$trust_label = "Prečo Obchodovať s Nami";
$trust_intro = "Pripojte sa k tisíckam používateľov, ktorí už obchodujú s $site_name. Na našej stránke je dokonca zobrazený živý počítadlo, ktoré ukazuje, koľko ľudí práve teraz obchoduje.";
$trust_1_title = "Plne Regulovaná";
$trust_1_text = "$site_name je riadne registrovaná a dodržiava platné finančné predpisy. Fungujeme podľa prísnych pravidiel, aby sme zaistili vašu bezpečnosť.";
$trust_2_title = "Pokročilá Bezpečnosť";
$trust_2_text = "Všetky vaše údaje a prostriedky sú šifrované a zabezpečené. Presadzujeme prísnu ochranu účtu prostredníctvom SSL šifrovania a dvojfaktorového overenia.";
$trust_3_title = "Transparentné Operácie";
$trust_3_text = "Nikdy neskrývame naše poplatky a nikdy nepridávame prekvapivé pravidlá. Pred každou transakciou vidíte presne, aké poplatky sa uplatňujú.";
$trust_4_title = "Ústretová Podpora";
$trust_4_text = "Náš tím podpory je k dispozícii cez chat, telefón alebo e-mail, aby zodpovedal vaše otázky alebo vyriešil akýkoľvek problém.";
$trust_cta_text = "Ďalšie informácie o trhových podmienkach";
$trust_cta_link = "Prečo Obchodovať";

// -- testimonials section heading (individual reviews already set above) --
$testimonials_label = "Referencie";
$testimonials_title = "Dôveruje Nám Viac ako 4M Obchodníkov";

// -- FAQ section heading --
$faq_label = "Časté Otázky";

// -- lead magnet CTA block --
$leadmagnet_title = "Nový v Obchodovaní?";
$leadmagnet_text1 = "Po registrácii dostanete náš bezplatný sprievodca,";
$leadmagnet_quote = "„10 Chýb, Ktorým Sa Vyhnúť pri Obchodovaní s Kryptomenami“";
$leadmagnet_text2 = "plný jednoduchých tipov od našich najskúsenejších analytikov, ktoré vám pomôžu vyhnúť sa najčastejším chybám.";
$leadmagnet_text3 = "Jednoducho zadajte svoje údaje počas";
$leadmagnet_link = "registrácie";
$leadmagnet_text4 = "a my vám ho pošleme priamo do vašej schránky. Mnohí investori začali s týmto sprievodcom a hovoria, že to spravilo skutočný rozdiel.";
$leadmagnet_text5 = "Trh nečaká — začnite ešte dnes!";

// -- pre-about CTA band --
$pre_about_title = "Ste Pripravení Prevziať Kontrolu nad Svojím Obchodovaním?";
$pre_about_text = "Pripojte sa k $site_name ešte dnes a objavte platformu vybudovanú pre jasnosť, bezpečnosť a výsledky.";
$pre_about_button = "Zaregistrovať Sa";

// -- pretest (quiz teaser) badges/CTA --
$pretest_title = "Začnite Obchodovať s $app_price $app_currency!";
$pretest_text = "Ste pripravení vyskúšať $site_name? Zaregistrujte sa teraz a pripojte sa k rastúcej komunite kryptoinvestorov a obchodníkov.";
$pretest_button = "Zaregistrovať Sa";
$pretest_badge_1 = "Bezpečné";
$pretest_badge_2 = "Regulované";
$pretest_badge_3 = "Dôveruje Nám Viac ako 4M Obchodníkov";

// -- about page --
$about_label = "O Nás";
$about_title = "O $site_name";
$about_intro = "$site_name vám nedáva len obchodnú platformu — pomáhame vám obchodovať s jasnosťou a dôverou.";
$about_text_1 = "$site_name je oficiálna online obchodná platforma navrhnutá tak, aby bolo obchodovanie s kryptomenami dostupné pre začiatočníkov aj skúsených obchodníkov.";
$about_text_2 = "Kombinujeme trhovú analýzu poháňanú AI s jednoduchým, transparentným ovládacím panelom, takže vždy presne viete, na čom ste.";
$about_text_3 = "Každá časť platformy je postavená okolo jasnosti: žiadne skryté poplatky, žiadny mätúci žargón, len jasné informácie, na základe ktorých môžete konať.";
$about_text_4 = "Naša platforma vám šetrí hodiny hádania a chráni vás pred nejasnými alternatívami nízkej kvality. Veríme, že obchodovanie by malo byť postavené na presnosti, nie na šťastí.";

// -- contact page --
$contact_label = "Kontaktujte Nás";
$contact_title = "Kontaktujte $site_name";
$contact_subtitle = "Máte otázku alebo potrebujete pomoc? Sme tu, aby sme vám poradili a viedli vás.";
$contact_text = "V $site_name veríme, že úspech v obchodovaní nemá nič spoločné so šťastím — spolieha sa na presnosť, predvídavosť a správne nástroje.";
$contact_form_text = "Jednoducho vyplňte formulár nižšie a člen nášho tímu sa vám čoskoro ozve.";
$contact_form_button = "Odoslať Správu";

// -- footer navigation labels (geo-page footer, TZ items 12/16/18) --
$footnav_col_pages = "Stránky";
$footnav_col_support = "Podpora";
$footnav_col_legal = "Právne";
$footnav_col_company = "Spoločnosť";
$footnav_home = "Domov";
$footnav_sitemap = "Mapa Stránky";
$footnav_conditions = "Podmienky Používania";
$footnav_contact = "Kontaktujte Nás";
$footnav_signup = "Zaregistrovať Sa";
$footer_risk_warning = "Upozornenie na Riziko";

// -- geo-page footer legal disclaimer (single-paragraph variant used by
// the geo template's own footer layout; the two-paragraph TZ item 21
// text above -- $footer_disclaimer_p1/$footer_disclaimer_p2 -- covers
// the root pages) --
$footer_disclaimer = "$site_name poskytuje vzdelávací obsah a všeobecné informácie o finančných trhoch, online obchodovaní a digitálnych aktívach. Všetky materiály zverejnené na tejto webovej stránke sú určené len na informačné účely a nemali by byť považované za finančné, investičné alebo právne poradenstvo. Obchodovanie zahŕňa značné riziko a nemusí byť vhodné pre každého investora. Investujte len peniaze, o ktorých stratu si môžete dovoliť prísť.";

// ============================================================
// Geo-language SUBPAGE fallback content (TZ item 16 cont.). Same
// rationale as the block above: conditions/contacts/faq/offer/
// privacy/product/risk-warning/sign.php share templates across the
// bg/cs/da/... stub folders and reference these vars directly.
// English fallback so every geo folder's subpages render complete.
// ============================================================

// -- shared form aliases (service-page forms reuse the hero disclaimer) --
$form_disclaimer_risk_note = "Prečítajte si tiež naše";
$form_text = $form_disclaimer_prefix;
$form_text_privacy = $form_privacy_link_label;
$form_text_privacy_and = $form_disclaimer_and;
$form_text_conditions = $form_terms_link_label;
$form_text_conditions_of = $form_disclaimer_of_site;
$form_text_risk_warning_note = $form_disclaimer_risk_note;
$form_submit = "Zaregistrovať Sa";

// -- generic breadcrumbs (sign-up / product pages) --
$breadcrumb_home = "Domov";
$breadcrumb_current = "Registrácia / Prihlásenie";
$breadcrumb_product = "Produkt";

// -- sign-up page official heading --
$official_heading = "Zaregistrujte sa na Oficiálnej Platforme $site_name™";
$official_description = "Vytvorte si bezplatný účet, aby ste mohli začať obchodovať s kryptomenami na bezpečnej, transparentnej platforme.";

// -- product page: analytics banner --
$analytics_heading = "Obchodujte Inteligentnejšie s $site_name";
$analytics_description = "Získajte jasné trhové údaje v reálnom čase a prehľady poháňané AI. Robte informované obchodné rozhodnutia s dôverou.";

// -- product page: dashboard preview --
$app_main_heading = "Váš Obchodný Ovládací Panel";
$app_feature_1_title = "Živé Trhové Údaje";
$app_feature_1_text = "Ceny a grafy v reálnom čase priamo na dosah";
$app_feature_2_title = "Sledovanie Portfólia";
$app_feature_2_text = "Komplexné metriky o vašom zostatku a výkonnosti";
$app_feature_3_title = "Mobilné Zobrazenie";
$app_feature_3_text = "Optimalizované pre mobilné prehliadače";
$app_feature_4_title = "Sledovacie Zoznamy";
$app_feature_4_text = "Sledujte aktíva, ktoré sledujete";

// -- product page: capabilities --
$capabilities_main_title = "Čo Očakávať";
$capabilities_feature_1_title = "Signály Poháňané AI";
$capabilities_feature_1_text = "Pokročilé algoritmy analyzujú trhové signály a odhaľujú príležitosti nepretržite.";
$capabilities_feature_2_title = "Rýchla Registrácia";
$capabilities_feature_2_text = "Zaregistrujte sa za pár minút s bezpečným, jednoduchým registračným procesom.";
$capabilities_feature_3_title = "Overená Bezpečnosť";
$capabilities_feature_3_text = "256-bit SSL šifrovanie, 2FA a 98% cold storage chránia vaše prostriedky v každom kroku.";
$capabilities_feature_4_title = "Nepretržitá Podpora";
$capabilities_feature_4_text = "Získajte podporu od nášho tímu v každom kroku — od registrácie po váš prvý obchod.";

// -- product page: stats strip --
$products_stats_currencies_v = "65+";
$products_stats_currencies_l = "Dostupných Mien";
$products_stats_users_v = "4M+";
$products_stats_users_l = "Registrovaní Používatelia";
$products_stats_volume_v = "98+";
$products_stats_volume_l = "Podporovaných Krajín";
$products_stats_countries_v = "24/7";
$products_stats_countries_l = "Prístup k Transakciám";

// -- product page: 3-step strip --
$step_1 = "Vytvorte si účet";
$step_2 = "Vložte prostriedky";
$step_3 = "Začnite obchodovať so stratégiou, ktorá vám vyhovuje";

// -- shared "last update" label (privacy page) --
$last_update = "Posledná aktualizácia";

// -- FAQ page --
$faq_page_meta_title = "Časté Otázky | Podpora $site_name";
$faq_page_meta_description = "Odpovede na časté otázky o tom, ako $site_name funguje, cenách a začatí.";
$faq_page_title = "Časté Otázky";
$faq_page_breadcrumb_home = "Domov";
$faq_page_breadcrumb_current = "Časté Otázky";
$faq_page_help_title = "Ako vám môžeme pomôcť?";
$faq_1_q = "Ako začnem?";
$faq_1_a = "Vytvorte si účet, overte svoju e-mailovú adresu a vykonajte svoj prvý vklad — plány začínajú už od $app_price $app_currency.";
$faq_2_q = "Sú moje peniaze a údaje v bezpečí? Je $site_name spoľahlivá?";
$faq_2_a = "Áno. Vaše údaje sú chránené priemyselným štandardom 256-bit šifrovania a vaše prostriedky sú zabezpečené dvojfaktorovým overením a 98% cold storage.";
$faq_3_q = "Môžem zavrieť svoj účet alebo vybrať prostriedky kedykoľvek?";
$faq_3_a = "Áno. Neexistujú žiadne obmedzenia na výbery. Kontaktujte náš tím podpory kedykoľvek — pomôžeme vám s vaším účtom alebo rýchlo spracujeme váš výber.";
$faq_4_q = "Ako viem, či je táto platforma pre mňa vhodná?";
$faq_4_a = "$site_name bola vytvorená pre úplných začiatočníkov aj skúsených obchodníkov, ktorí chcú obchodovať efektívnejšie — každý nástroj na platforme je navrhnutý tak, aby vás udržal informovaných a pod kontrolou.";
$faq_5_q = "Potrebujem obchodné skúsenosti na začatie?";
$faq_5_a = "Žiadne predchádzajúce skúsenosti nie sú potrebné. Náš režim poháňaný AI za vás rieši analýzu a vy môžete kedykoľvek prepnúť do manuálneho režimu, ak chcete väčšiu kontrolu.";

// -- contacts page --
$contacts_h3 = "Pre technické otázky alebo otázky týkajúce sa vášho účtu nás prosím kontaktujte e-mailom";

// -- offer page (meta title/description already defined above) --
$offer_breadcrumb_home = "Domov";
$offer_breadcrumb_current = "Ponuka";
$offer_cta_h1 = "Začnite Obchodovať Ešte Dnes";
$offer_cta_text = "Pripravené za pár minút: zaregistrujte sa, financujte svoj účet a začnite obchodovať s kryptomenami na bezpečnej, regulovanej platforme.";
$offer_how_it_works_title = "Ako To Funguje";
$offer_official_platform_title = "Toto Je Oficiálna Obchodná Platforma $site_name™";
$offer_official_platform_text = "Dôveryhodný, transparentný spôsob obchodovania s kryptomenami — s prehľadmi v reálnom čase a plnou kontrolou.";

// -- conditions of use page --
$conditions_meta_title = "Podmienky Používania | $site_name";
$conditions_meta_description = "Prečítajte si oficiálne Podmienky Používania pre webovú stránku a obchodnú platformu $site_name.";
$conditions_breadcrumb_home = "Domov";
$conditions_breadcrumb_current = "Podmienky Používania";
$conditions_h1 = "Podmienky Používania";
$conditions_s1_title = "1. Všeobecné";
$conditions_s1_text = "Táto webová stránka poskytuje prístup k online obchodnej platforme s kryptomenami. Používanie platformy predstavuje úplné prijatie týchto podmienok a našich Zásad Ochrany Osobných Údajov.";
$conditions_s2_title = "2. Spôsobilosť";
$conditions_s2_text = "Používatelia musia mať aspoň 18 rokov a plnú právnu spôsobilosť vo svojej príslušnej jurisdikcii.";
$conditions_s3_title = "3. Obmedzený Prístup";
$conditions_s3_text = "Prístup môže byť obmedzený v jurisdikciách, kde miestne predpisy zakazujú typ obchodnej služby, ktorú ponúkame.";
$conditions_s4_title = "4. Zakázané Použitie";
$conditions_s4_text = "Používatelia nesmú zneužívať systém, pokúšať sa o neoprávnený prístup do našich systémov ani spätne analyzovať náš softvér.";
$conditions_s5_title = "5. Duševné Vlastníctvo";
$conditions_s5_text = "Všetok zdrojový kód, používateľské rozhrania a značkové aktíva zostávajú výhradným vlastníctvom prevádzkujúcej spoločnosti.";
$conditions_s6_title = "6. Zodpovednosť";
$conditions_s6_text = "Nástroje platformy sú poskytované „tak, ako sú“. Nenesieme žiadnu zodpovednosť za výsledky vyplývajúce z vlastných obchodných rozhodnutí používateľa.";
$conditions_s7_title = "7. Služby Tretích Strán";
$conditions_s7_text = "Integrácie s poskytovateľmi platieb tretích strán prebiehajú prostredníctvom bezpečných pripojení. Pre vklady a výbery používatelia rokujú priamo so zvoleným poskytovateľom.";
$conditions_s8_title = "8. Externé Odkazy";
$conditions_s8_text = "Odkazy na externé zdroje sú poskytované len z dôvodu pohodlia. Neschvaľujeme ani nezaručujeme žiadny externý softvér.";
$conditions_s9_title = "9. Rôzne";
$conditions_s9_text = "Vyhradzujeme si právo kedykoľvek zmeniť tieto podmienky alebo službu, pričom zmeny budú zverejnené na webovej stránke.";

// -- privacy policy page (meta title/description already defined above) --
$privacy_breadcrumb_home = "Domov";
$privacy_breadcrumb_current = "Zásady Ochrany Osobných Údajov";
$privacy_page_h1 = "Zásady Ochrany Osobných Údajov";
$privacy_intro = "Rešpektujeme vaše súkromie a spracovávame osobné údaje v plnom súlade s medzinárodnými štandardmi a európskym GDPR.";
$privacy_transparency_title = "Transparentnosť";
$privacy_transparency_text = "Jasne zverejňujeme, ako sa spracovávajú prevádzkové telemetrické údaje. Pre ďalšie podrobnosti kontaktujte podporu.";
$privacy_usage_title = "Používanie Údajov";
$privacy_usage_text = "Údaje sa používajú výhradne na poskytovanie prístupu, zabezpečenie relácií a plnenie povinností súladu.";
$privacy_rights_short_title = "Vaše Práva";
$privacy_rights_short_text = "Zachovávate si plné práva na zobrazenie, aktualizáciu alebo požiadanie o vymazanie svojich osobných údajov.";
$privacy_security_title = "Bezpečnosť";
$privacy_security_text = "Používame AES-256 šifrovanie a izoláciu databázy na ochranu prevádzkových telemetrických údajov.";
$privacy_s1_title = "1. Zhromažďovanie Údajov";
$privacy_s1_text = "Zhromažďujeme telemetriu používania (IP adresa, systémové parametre, typ prehliadača), ako aj overovacie údaje predložené používateľmi.";
$privacy_s2_title = "2. Právny Základ";
$privacy_s2_text = "Spracovanie sa opiera o výslovný súhlas používateľov, požiadavky na súlad s predpismi a poskytovanie služby.";
$privacy_s3_title = "3. Zdieľanie Údajov";
$privacy_s3_text = "Údaje nie sú nikdy komercializované. Zverejnenia sú obmedzené na oprávnené zúčtovacie subjekty a technických partnerov na základe dohody o mlčanlivosti (NDA).";
$privacy_s4_title = "4. Súbory Cookie";
$privacy_s4_text = "Nevyhnutné súbory cookie sa používajú na overenie relácie a optimalizáciu rozhrania.";
$privacy_google_choices = 'Spravujte svoje preferencie sledovania prostredníctvom <a href="http://www.google.com/settings/ads" target="_blank" rel="noopener">Nastavení Reklám Google</a> alebo použite <a href="https://tools.google.com/dlpage/gaoptout" target="_blank" rel="noopener">Doplnok pre Odhlásenie Google Analytics</a>. Môžete si tiež pozrieť vlastné dátové praktiky spoločnosti Google v jej <a href="https://www.google.com/intl/en/policies/privacy/" target="_blank" rel="noopener">Zásadách Ochrany Osobných Údajov</a>.';
$privacy_s5_title = "5. Uchovávanie Údajov";
$privacy_s5_text = "Osobné údaje sú uchovávané len tak dlho, ako je potrebné na splnenie požiadaviek na prístup k systému.";
$privacy_s6_title = "6. Medzinárodné Prevody";
$privacy_s6_text = "Cezhraničné prevody údajov prebiehajú výhradne prostredníctvom šifrovaných kanálov a prostredníctvom štandardných zmluvných doložiek.";
$privacy_s7_title = "7. Odkazy Tretích Strán";
$privacy_s7_text = "Nenesieme zodpovednosť za praktiky ochrany osobných údajov externých služieb tretích strán prepojených z našej webovej stránky.";
$privacy_s8_title = "8. Aktualizácie";
$privacy_s8_text = "Tieto zásady môžu byť pravidelne revidované, aby odrážali systémové alebo právne zmeny.";
$privacy_rights_title = "Vaše Práva";
$privacy_rights_text = "Používatelia majú právo požiadať o prístup, opravu, obmedzené spracovanie alebo úplné vymazanie svojich uložených údajov.";

// -- risk warning page --
$page_title_risk_warning = "Upozornenie na Riziko | $site_name";
$page_description_risk_warning = "Pochopte riziká obchodovania a to, ako vám $site_name pomáha ich bezpečne riadiť.";
$risk_warning_breadcrumb_home = "Domov";
$risk_warning_breadcrumb_current = "Upozornenie na Riziko";
$risk_warning_title = "Upozornenie na Riziko";
$risk_warning_intro = "Pochopenie rizík je prvým krokom k obchodovaniu s dôverou.";
$risk_warning_ai_heading = "Ako náš AI systém pomáha pri riadení rizika:";
$risk_warning_ai_1 = "<strong>Algoritmická Efektívnosť a Obchodovanie Bez Emócií:</strong> Pokročilé algoritmy analyzujú trhové signály, aby objektívne vykonávali obchody v optimálnom čase.";
$risk_warning_ai_2 = "<strong>Stratégie Založené na Údajoch:</strong> Stratégie sú založené na overených trhových vzoroch a analýze v reálnom čase, nie na hádaní.";
$risk_warning_ai_3 = "<strong>Flexibilné Nastavenia a Plná Kontrola:</strong> Kedykoľvek upravte svoje parametre rizika. Sledujte všetky zostatky a obchody transparentne na svojom ovládacom paneli — bez skrytých poplatkov a bez obmedzení na výbery.";
$risk_warning_disclaimer = "<strong>Vyhlásenie o Odmietnutí Zodpovednosti:</strong> Obchodovanie vždy nesie riziko. Automatizované systémy (vrátane AI) nezaručujú zisk, môžu zlyhať v dôsledku softvérových chýb alebo neočakávaných trhových udalostí a vyžadujú monitorovanie zo strany používateľa. Minulá výkonnosť nie je ukazovateľom budúcich výsledkov. Táto platforma slúži výhradne na informačné a marketingové účely a nepredstavuje finančné poradenstvo.";
$risk_warning_s1_heading = "1. Všeobecné Riziká a Riziká Trhu s Kryptomenami";
$risk_warning_s1_1 = "Kryptomeny sú vysoko volatilné, špekulatívne aktíva, ktoré sa obchodujú nepretržite a podliehajú len minimálnemu regulačnému dohľadu vo väčšine jurisdikcií.";
$risk_warning_s1_2 = "Hodnoty môžu drasticky kolísať v krátkych obdobiach, čo môže potenciálne viesť k úplnej strate investovaného kapitálu.";
$risk_warning_s1_3 = "Trhové hodnoty môžu byť výrazne ovplyvnené regulačnými zmenami, technickým vývojom, bezpečnostnými únikmi alebo širšími makroekonomickými udalosťami.";
$risk_warning_s1_4 = "Niektoré aktíva môžu úplne stratiť svoju hodnotu. Investujte len peniaze, o ktorých stratu si môžete dovoliť prísť.";
$risk_warning_s2_heading = "2. Riziká Vykonávania, Likvidity a Pákového Efektu";
$risk_warning_s2_1 = "<strong>Trhová Volatilita a Likvidita:</strong> Extrémne cenové pohyby (10-20%+ denne) alebo nízka likvidita (najmä pri menších minciach) môžu viesť k oneskoreniam, výpadkom platformy a výraznému skĺzu pri vykonávaní. Stop-loss príkazy nemusia zaručiť obmedzenie strát v extrémnych podmienkach.";
$risk_warning_s2_2 = "<strong>Riziko Pákového Efektu a Marže:</strong> Produkty s pákovým efektom zosilňujú zisky aj straty, čo znamená, že môžete stratiť viac ako váš pôvodný vklad. Približne 70-80% účtov retailových investorov stráca peniaze pri obchodovaní s produktmi s pákovým efektom.";
$risk_warning_s3_heading = "3. Technické, Kybernetické a Riziká Tretích Strán";
$risk_warning_s3_1 = "<strong>Technické Faktory:</strong> Online obchodovanie prirodzene nesie riziká, ako sú prerušenia internetového pripojenia, poruchy hardvéru/softvéru a nedostupnosť služby.";
$risk_warning_s3_2 = "<strong>Kybernetická Bezpečnosť:</strong> Účty s kryptomenami sú častým cieľom phishingu, malvéru a pokusov o hackovanie. Transakcie sú nezvratné; kompromitácia vašich prihlasovacích údajov môže viesť k trvalej strate.";
$risk_warning_s3_3 = "<strong>Platformy Tretích Strán:</strong> Táto webová stránka môže prepájať používateľov s platformami tretích strán. Nekontrolujeme, neschvaľujeme ani nezaručujeme ich bezpečnosť, prevádzku alebo solventnosť. Pred vložením prostriedkov na externé platformy vždy vykonajte vlastnú dôkladnú due diligence.";
$risk_warning_s4_heading = "4. Regulačné, Daňové a Záverečné Ustanovenia";
$risk_warning_s4_1 = "<strong>Právny Súlad a Dane:</strong> Regulačné rámce sa značne líšia a rýchlo menia. Používatelia sú výhradne zodpovední za zabezpečenie toho, aby ich obchodné aktivity boli v súlade s miestnym zákonom, ako aj za plnenie svojich vlastných daňových povinností.";
$risk_warning_s4_2 = "<strong>Žiadne Záruky Zisku:</strong> Neexistuje žiadne „bezpečné“ alebo bezrizikové obchodovanie s kryptomenami. Akékoľvek uvedené čísla výnosov alebo príklady výkonnosti sú čisto hypotetické.";
$risk_warning_s4_3 = "<strong>Vhodnosť:</strong> Ak plne nerozumiete rizikám, ste závislí od nevyhnutných finančných zdrojov alebo obchodujete s požičanými peniazmi, obchodovanie s kryptomenami pre vás nie je vhodné. V prípade pochybností sa poraďte s nezávislým, licencovaným finančným poradcom.";
$risk_warning_contact = "<strong>Kontakt:</strong> Ak máte otázky týkajúce sa tohto vyhlásenia alebo chcete odoslať otázku, kontaktujte prosím náš oficiálny tím zákazníckej podpory prostredníctvom kontaktného formulára na našej webovej stránke.";

