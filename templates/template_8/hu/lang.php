<?php
require __DIR__ . '/../lang.php';
$site_lang = 'hu-HU';
$form_language = 'hu'; // matches this page's own language, not the offer's global default

// ============================================================
// HU TRANSLATION OVERRIDES
// Identity/config vars ($site_name, $site_slug, $site_domain, $site_url, $app_price, $app_currency, $site_lang, $country_name, $country_flag_code, $privacy_last_update, $rating_value, $rating_count, $review_count, $form_country, $form_language, $form_phone_country, $form_only_countries, $review_1_author, $review_2_author, $review_3_author, $review_4_author, $quiz_consultant_name) are
// intentionally NOT overridden -- they stay exactly as inherited from the
// root lang.php.
// ============================================================

// Brand / Platform Variables

// Geo-language stats bar fallback content (used by the language-folder pages'
// own "stats" section; the fr/de/it/nl folders override these with native
// translations, the other 19 folders inherit this English fallback)
$stat_1_value = "4M+";
$stat_1_label = "Regisztrált Felhasználók";
$stat_2_value = "98+";
$stat_2_label = "Támogatott Országok";
$stat_3_value = "65+";
$stat_3_label = "Elérhető Pénznemek";
$stat_4_value = "24/7";
$stat_4_label = "Tranzakciós Hozzáférés";
$stat_5_value = "256 bites";
$stat_5_label = "Titkosítási Szabvány";
$stat_6_value = "$500M+";
$stat_6_label = "Összes Ügyfélbefizetés";

// Keitaro Form Integration Variables (defaults -- overwritten per-launch by
// generate_lang_files(); must stay valid on their own since nothing else in
// this file replaces them for a page that's ever served un-generated)

// 4 Verified Reviews (TZ Item 8)
$review_1_role = "Franciaország";
$review_1_text = "500 €-val kezdtem, csak hogy lássam, hogyan működik a platform. Körülbelül három hét után az egyenlegem körülbelül 1120 €-ra nőtt. A felület könnyen kezelhető, és a piaci elemzések segítettek jobb döntéseket hozni.";
$review_1_badge = "Bejelentett Hozam +18,4%";

$review_2_role = "Németország";
$review_2_text = "Korábban már kipróbáltam néhány kereskedési platformot, de ez a mai napig a kedvencem. Könnyen navigálható, az eszközök valóban hasznosak, és összességében nagyon pozitív tapasztalatom volt.";
$review_2_badge = "Bejelentett Hozam +19,1%";

$review_3_role = "Olaszország";
$review_3_text = "Ami a leginkább lenyűgözött, az az volt, hogy mennyire intuitívnak érződik minden. A regisztráció gyors volt, az irányítópult jól szervezett, és a platform sokkal kényelmesebbé tette számomra a kereskedést.";
$review_3_badge = "Bejelentett Hozam +16,8%";

$review_4_role = "Hollandia";
$review_4_text = "Nem volt korábbi kereskedési tapasztalatom, ezért 750 €-val kezdtem. Egy hónapon belül valamivel több mint 1765 €-t értem el az eszközök és tanulási források követésével. Ez remek módja volt az önbizalom felépítésének.";
$review_4_badge = "Bejelentett Hozam +18,0%";

$review_verified_label = "Ellenőrzött Felhasználó";
$reviews_section_title = "Vélemények a $site_name-ról";
$reviews_badge_trustworthy = "Megbízható";
$reviews_summary_rating = "4,7";
$reviews_summary_count = "189";
$reviews_summary_desc = "Erőteljes és intuitív kereskedési platform robusztus automatizált eszközökkel, valós idejű elemzésekkel és átfogó tanulási forrásokkal.";

// CONSULTANT / CHAT QUIZ (TZ Item 13)
$quiz_consultant_role = "Kereskedési Tanácsadó";
$quiz_text_welcome = "Üdvözlöm! Az Ön személyes kereskedési asszisztense vagyok. Töltsön ki egy 30 másodperces kvízt, hogy megtudja, hogyan működhet Önnek az automatizált AI kereskedés.";
$quiz_text_q1 = "Kereskedett már korábban kriptovalutákkal vagy pénzügyi piacokon?";
$quiz_text_a1_yes = "Igen, van némi tapasztalatom";
$quiz_text_a1_no = "Nem, teljesen kezdő vagyok";
$quiz_text_q2 = "Mi az elsődleges pénzügyi célja az online kereskedéssel?";
$quiz_text_q3 = "Inkább szeretné, ha az AI automatikusan hajtaná végre a kereskedéseket, vagy manuálisan kereskedne?";
$quiz_text_a3_yes = "Automatizált AI Kereskedés (Ajánlott)";
$quiz_text_a3_no = "Manuális Kereskedés AI Jelekkel";
$quiz_text_q4 = "Mennyi a kezdeti kereskedési költségvetése?";
$quiz_text_a4_1 = "250 $ - 500 $";
$quiz_text_a4_2 = "500 $ - 1500 $";
$quiz_text_a4_3 = "1500 $+";
$quiz_text_q5 = "Készen áll a fiókja létrehozására és a platform teljes hozzáférésének megszerzésére?";
$quiz_text_a5_yes = "Igen, kezdjük el!";
$quiz_text_a5_no = "Több információt szeretnék";
$quiz_text_loader = "Elemezzük a válaszait és előkészítjük az optimális kereskedési paramétereket...";
$quiz_text_final_ttl = "A Fiókbeállítás Elkészült!";
$quiz_text_processing = "A platform-hozzáférés konfigurálása...";
$quiz_text_typing = "gépel...";
$quiz_placeholder_fname = "Keresztnév";
$quiz_placeholder_lname = "Vezetéknév";
$quiz_placeholder_email = "E-mail Cím";
$quiz_placeholder_phone = "Telefonszám";
$quiz_btn_submit = "Regisztráció Befejezése";

// METADATA (TZ Item 10)
$home_meta_title = "$site_name — Kereskedési Platform | Hivatalos Weboldal";
$home_meta_description = "A hivatalos $site_name weboldal biztonságos kriptovaluta-kereskedési platformot kínál fejlett kereskedési eszközökkel, valós idejű piaci elemzésekkel és felhasználóbarát élménnyel a kereskedők számára.";

// NAVIGATION & HEADER (TZ Item 3, 12)
$nav_about = "Rólunk";
$nav_how = "Hogyan Működik";
$nav_why = "Miért Kereskedjen";
$nav_faq = "GYIK";
$nav_contacts = "Kapcsolat";
$nav_signin = "Bejelentkezés";
$nav_signup = "Regisztráció";

$mobnav_home = "Kezdőlap";
$mobnav_product = "Termék";
$mobnav_offer = "Ajánlat";
$mobnav_contact = "Kapcsolat";
$mobnav_faq = "GYIK";
$mobnav_signup = "Regisztráció";

// HERO SECTION
$hero_h1 = "<mark>$site_name</mark> Platform";
$hero_text = "Hivatalos $site_name kriptovaluta-kereskedési platform";

// LEAD FORM
$form_fname_placeholder = "Keresztnév";
$form_lname_placeholder = "Vezetéknév";
$form_email_placeholder = "E-mail";
$form_phone_placeholder = "Telefonszám";
$form_btn_submit = "Regisztráció";
$form_disclaimer_text = "Személyes adatai megadásával és a gombra kattintva elfogadja ennek a weboldalnak az <a class='link link-primary' href='privacy.php'>Adatvédelmi Szabályzatát</a> és <a class='link link-primary' href='conditions.php'>Felhasználási Feltételeit</a>.";

// SECURITY BADGES
$badge_ssl = "256 bites SSL";
$badge_payments = "Biztonságos Fizetések";
$badge_2fa = "2FA";
$badge_cold_storage = "98% Cold Storage";
$badge_regulated = "Szabályozott";
$badge_traders_trust = "Több mint 4M Kereskedő Bízik Bennünk";

// SAFE SECTION (Vos fonds sont en sécurité)
$safe_title = "<mark>Pénze Biztonságban Van</mark> a $site_name-nál";
$safe_desc = "Banki szintű titkosítás, ellenőrzött fizetésfeldolgozók és 98% cold storage — pénze minden lépésnél védve van.";

$safe_item1_title = "Ellenőrzött Fizetési Szolgáltatók";
$safe_item1_desc = "A fizetéseket kizárólag hitelesített szolgáltatók dolgozzák fel, amelyek megfelelnek a nemzetközi biztonsági szabványoknak. Kártyaadatai soha nincsenek tárolva platformunkon.";
$safe_item1_badge = "Biztonságos Fizetések";

$safe_item2_title = "Kétfaktoros Hitelesítés (2FA)";
$safe_item2_desc = "Adjon hozzá egy extra védelmi réteget fiókjához időalapú egyszeri jelszavakkal SMS-en vagy Google Authenticatoron keresztül.";
$safe_item2_badge = "2FA";

$safe_item3_title = "98% Cold Storage";
$safe_item3_desc = "A digitális eszközök túlnyomó többségét földrajzilag szétosztott offline cold storage trezorokban tárolják, amelyeket többaláírásos protokollok védenek.";
$safe_item3_badge = "98% Cold Storage";

$safe_item4_title = "Szabályozott Végrehajtás";
$safe_item4_desc = "Világszerte szabályozott brókercégekkel és likviditási szolgáltatókkal működünk együtt a megfelelőség, átláthatóság és csúcsminőségű végrehajtás fenntartása érdekében.";
$safe_item4_badge = "Szabályozott";

$safe_item5_title = "256 bites SSL Titkosítás";
$safe_item5_desc = "A böngészője és szervereink közötti összes adatátvitel katonai szintű TLS 1.3 kriptográfiai protokollokkal van titkosítva.";
$safe_item5_badge = "256 bites SSL";

// FREE GUIDE CTA BANNER (CTA 2)
$guide_cta_title = "Kérje az Ingyenes Útmutatót";
$guide_cta_subtitle = "«10 Elkerülendő Hiba a Kriptokereskedésben»";
$guide_cta_btn = "Ingyenes Útmutató Igénylése";

// TRUST SECTION (Pourquoi les investisseurs font confiance à Ciel Cryptance)
$trust_title = "Miért Bíznak a Kereskedők a <mark>$site_name</mark>-ban";
$trust_desc = "Világszerte több mint 4 000 000 felhasználó választja a $site_name-t megbízhatósága, erőteljes automatizálása és átlátható környezete miatt.";
$trust_subtitle = "Vezető Előnyök a Modern Kereskedő Számára:";

$trust_item1_title = "Globális Piaci Hozzáférés";
$trust_item1_desc = "Kereskedjen több mint 100 kriptovalutával, Forex párral, részvénnyel és nyersanyaggal egyetlen egységes kereskedési irányítópultból.";

$trust_item2_title = "Erős Pénzvédelem";
$trust_item2_desc = "Elkülönített számlák, folyamatos biometrikus ellenőrzések és korszerű kiberbiztonság védi tőkéjét 24/7.";

$trust_item3_title = "Nulla Rejtett Díj";
$trust_item3_desc = "Élvezze a kristálytiszta árazást. Ingyenes regisztráció, ingyenes befizetések, nincs platformkezelési díj, és azonnali kifizetési kérelmek.";

$trust_item4_title = "Reagáló Támogatás";
$trust_item4_desc = "Elkötelezett támogatói csapatunk élő chaten, telefonon vagy e-mailben elérhető, hogy segítsen bármilyen kérdésben vagy technikai problémában.";

$trust_market_info_text = "További információ a 2026-os piaci feltételekről";
$trust_market_info_btn = "Miért Kereskedjen";

// START TRADING CTA (CTA 3)
$start_cta_title = "Kezdjen Kereskedni <span data-local-currency='$app_price'>$app_price $app_currency</span> Összeggel!";
$start_cta_desc = "Készen áll kipróbálni a $site_name-t? Regisztráljon most, és csatlakozzon a kriptobefektetők és kereskedők egyre bővülő közösségéhez.";
$start_cta_btn = "Regisztráció";

// FAQ SECTION
$faq_title = "$site_name Gyakran Ismételt Kérdések <mark>(GYIK)</mark>";
$faq_q1 = "Mi a $site_name, és hogyan működik?";
$faq_a1 = "Ez egy AI-alapú kereskedési platform, amely 24 órán át dolgozik Önnek. A rendszer elemzi a piacokat, felismeri a lehetőségeket, és automatikusan végrehajtja a kereskedéseket. Hagyhatja, hogy az AI mindent kezeljen, vagy bármikor átválthat manuális módra, hogy saját feltételei szerint kereskedjen.";

$faq_q2 = "Mennyire biztonságos a pénzem és az adataim a $site_name-nál?";
$faq_a2 = "A biztonság a platform minden rétegébe be van építve. A személyes adatokat nemzetközileg elismert titkosítási szabványok és fejlett fiókhitelesítés védi. Minden pénzügyi tranzakciót kizárólag megbízható és ellenőrzött fizetési szolgáltatókon keresztül dolgoznak fel. Minden kereskedési tevékenysége valós időben látható, így mindig pontosan tudja, mi történik pénzeszközeivel.";

$faq_q3 = "Bármikor kivehetem a nyereségemet?";
$faq_a3 = "Igen. Nincsenek korlátozások arra vonatkozóan, hogy mikor vagy milyen gyakran veheti ki pénzeszközeit a $site_name-től. Fiókegyenlege mindig teljes egészében az Ön ellenőrzése alatt marad. A kifizetéseket ugyanazokon a megbízható fizetési szolgáltatókon keresztül dolgozzák fel, amelyeket a befizetésekhez is használnak, garantálva a gyors és biztonságos átutalásokat.";

$faq_q4 = "Vannak rejtett díjak vagy extra költségek?";
$faq_a4 = "Nincsenek. A $site_name nem számít fel előfizetési díjat, regisztrációs díjat vagy rejtett költségeket. Az egyetlen szükséges összeg a kezdéshez a <span data-local-currency='$app_price'>$app_price $app_currency</span> minimum befizetés, amelyet közvetlenül kereskedési számlájára írnak jóvá. Minden fő fizetési módot elfogadunk, beleértve a hitelkártyákat, banki átutalásokat és a PayPal-t.";

$faq_q5 = "Szükséges korábbi kereskedési tapasztalat a kezdéshez?";
$faq_a5 = "Egyáltalán nem. A $site_name-t úgy tervezték, hogy megfeleljen mind a teljesen kezdőknek, mind a tapasztalt kereskedőknek. Teljesen automatizált módban az AI mindent elvégez Ön helyett, beleértve a piaci elemzést, a jelgenerálást és a rendelések végrehajtását. Ha inkább megtartaná az irányítást, bármikor átválthat manuális módra.";

$faq_cta_text = "Kérdései vannak? Nézze meg GYIK-jeinket, vagy vegye fel a kapcsolatot támogatói csapatunkkal.";
$faq_cta_faq_btn = "GYIK";
$faq_cta_contact_btn = "Kapcsolat";

// NEW TRADER LEAD SECTION (Bottom form)
$lead_title = "Új a Kereskedésben?";
$lead_p1 = "A regisztráció után megkapja ingyenes útmutatónkat: <mark class='text-on-surface-tertiary-accent'>«10 Elkerülendő Hiba a Kriptovaluta-kereskedésben»</mark>. Ez egyenes tanácsokat tartalmaz legtapasztaltabb elemzőinktől, hogy segítsen elkerülni a gyakori buktatókat.";
$lead_p2 = "Egyszerűen adja meg adatait a regisztrációs űrlapon, és közvetlenül a postafiókjába küldjük. Sok kereskedő ezzel az útmutatóval kezdte, és felbecsülhetetlen értékűnek találta az önbizalom felépítéséhez az első kereskedéseik során.";
$lead_form_heading = "A piac nem vár — kezdje el ma!";

// FEATURES TABLE (Fonctionnalités principales)
$features_title = "A $site_name Kereskedési Platform <mark>Legfontosabb Jellemzői</mark>";
$feature_1_title = "🤖 Platform Technológia";
$feature_1_val = "Fejlett, AI-alapú kereskedési motor";
$feature_2_title = "💳 Finanszírozási Módok";
$feature_2_val = "Fő hitelkártyák, banki átutalások, PayPal";
$feature_3_title = "📱 Platform Hozzáférés";
$feature_3_val = "Több eszközzel való kompatibilitás (Asztali, Táblagép, Mobil)";
$feature_4_title = "🚀 Sikerarány";
$feature_4_val = "85%-os elemzési pontosság";
$feature_5_title = "📊 Kereskedési Eszközök";
$feature_5_val = "Kriptovaluták, Forex, Részvények, Nyersanyagok, Nemesfémek, CFD-k és még sok más…";
$feature_6_title = "✍️ Fiókbeállítás";
$feature_6_val = "Gyors és egyszerű regisztráció";
$feature_7_title = "📞 Ügyfélszolgálat";
$feature_7_val = "24/7 professzionális, dedikált támogatás";

// FOOTER DISCLAIMER (TZ Item 21)
$footer_disclaimer_p1 = "A $site_name oktatási tartalmat és általános információt nyújt a pénzügyi piacokról, az online kereskedésről és a digitális eszközökről. Az ezen a weboldalon közzétett összes anyag, beleértve a cikkeket, grafikonokat, árfolyamadatokat, piaci elemzéseket és véleményeket, kizárólag tájékoztatási célokat szolgál, és nem tekinthető pénzügyi, befektetési vagy jogi tanácsnak. Bár törekszünk arra, hogy tartalmunk pontos és naprakész maradjon, nem garantáljuk annak teljességét vagy megbízhatóságát, és nem vállalunk felelősséget az ezen weboldal használatából eredő veszteségekért.";
$footer_disclaimer_p2 = "A kriptovalutákkal, Forexszel, CFD-kkel, részvényekkel és egyéb pénzügyi eszközökkel folytatott kereskedés jelentős kockázattal jár, és nem biztos, hogy minden befektető számára megfelelő. A piaci feltételek gyorsan változhatnak, és a múltbeli teljesítmény nem garantálja a jövőbeli eredményeket. Bármilyen befektetési döntés meghozatala előtt gondosan mérje fel pénzügyi helyzetét és kockázattűrő képességét, és szükség esetén kérjen független szakértői tanácsot. Csak olyan pénzt fektessen be, amelynek elvesztését megengedheti magának.";
$footer_copyright = "© " . date('Y') . " $site_name. All rights reserved.";

// FOOTER NAV LINKS
$footnav_about = "Rólunk";
$footnav_how = "Hogyan Működik";
$footnav_why = "Miért Kereskedjen";
$footnav_faq = "GYIK";
$footnav_contacts = "Kapcsolat";
$footnav_privacy = "Adatvédelmi Szabályzat";
$footnav_risk = "Kockázati Figyelmeztetés";
$footnav_terms = "Felhasználási Feltételek";
$footnav_product = "Termék";
$footnav_offer = "Ajánlat";

// ABOUT PAGE VARIABLES
$about_meta_title = "Rólunk | $site_name Hivatalos Weboldal";
$about_meta_description = "Tudjon meg többet a $site_name-ról, a pénzügyi piacok AI-automatizáláson keresztüli demokratizálásának küldetéséről, és intézményi szintű biztonsági keretrendszerünkről.";
$about_h1 = "A <mark>$site_name</mark>-ról";
$about_lead = "Világszerte erősítjük a kereskedőket mesterséges intelligencia, algoritmikus végrehajtás és vállalati biztonság révén.";
$about_mission_title = "Küldetésünk";
$about_mission_text = "A $site_name-nál úgy hisszük, hogy a kifinomult kereskedési technológiáknak mindenki számára elérhetőnek kell lenniük, nem csak az intézményi alapok számára. Platformunk hidat épít a hétköznapi lakossági befektetők és a legkorszerűbb számítási kereskedési algoritmusok között.";
$about_tech_title = "Élvonalbeli Technológia";
$about_tech_text = "Rendszereink másodpercenként több mint 100 000 adatpontot értékelnek a globális kripto-, Forex- és részvénypiacokon. A prediktív gépi tanulási modellek és a szub-milliszekundumos végrehajtás kombinálásával rendkívül alacsony csúszást és megbízható teljesítményt nyújtunk.";
$about_sec_title = "Biztonság és Szabályozási Megfelelés";
$about_sec_text = "Az ügyfélbizalom ökoszisztémánk alapköve. 256 bites TLS titkosítást, szigorú biometrikus és 2FA protokollokat alkalmazunk, és az összes digitális tartalék 98%-át cold storage trezorokban tároljuk.";

// PRODUCT PAGE VARIABLES
$product_meta_title = "Kereskedési Eszközök és Termék | $site_name";
$product_meta_description = "Fedezze fel a $site_name-t hajtó kereskedési motort és AI-képességeket. Automatizált rendelésvégrehajtás, prediktív analitika és intuitív vezérlők.";
$product_h1 = "A Platform <mark>Terméke és Funkciói</mark>";
$product_lead = "Fedezze fel az intelligens eszközöket, amelyeket úgy terveztek, hogy versenyelőnyt biztosítsanak a modern kriptovaluta- és pénzügyi piacokon.";
$product_f1_title = "Automatizált AI Kereskedési Motor";
$product_f1_text = "Hagyja, hogy a neurális algoritmusok elemezzék a piaci trendeket, és éjjel-nappal érzelmek nélkül hajtsák végre az optimális kereskedéseket.";
$product_f2_title = "Valós Idejű Piacelemzés";
$product_f2_text = "Élő rendeléskönyv-mélység, automatizált mintafelismerés és intézményi hangulatkövetés a keze ügyében.";
$product_f3_title = "Kockázatkezelési Csomag";
$product_f3_text = "Részletes stop-loss és take-profit limitek, maximális napi kitettség szabályozás és automatizált fedezeti lehetőségek.";
$product_f4_title = "Platformok Közötti Hozzáférhetőség";
$product_f4_text = "Kereskedjen zökkenőmentesen asztali böngészőkön, táblagépeken és okostelefonokon nulla késleltetéssel és teljes felhő-szinkronizálással.";

// OFFER PAGE VARIABLES
$offer_meta_title = "Speciális Ajánlat és Feltételek | $site_name";
$offer_meta_description = "Fedezze fel a $site_name exkluzív regisztrációs ajánlatát. Kezdje $app_price $app_currency kezdeti befizetéssel, és kapjon dedikált támogatást.";
$offer_h1 = "Exkluzív <mark>Kereskedési Ajánlat</mark>";
$offer_lead = "Kezdje el kereskedési útját ma versenyképes előnyökkel és dedikált, egyéni fiókbevezetéssel.";
$offer_step1_title = "1. Gyors Regisztráció";
$offer_step1_text = "Töltse ki rövid regisztrációs űrlapunkat, hogy 2 percen belül biztosítsa a hozzáférést személyes fiókjához.";
$offer_step2_title = "2. Töltse Fel Kereskedési Egyenlegét";
$offer_step2_text = "Fizesse be a standard minimumot, $app_price $app_currency összeget hitelkártyával, banki átutalással vagy e-pénztárcákkal. Pénzeszközeinek 100%-a közvetlenül kereskedési egyenlegébe kerül.";
$offer_step3_title = "3. Aktiválja az AI Kereskedést";
$offer_step3_text = "Válasszon automatizált vagy támogatott módot, válassza ki preferált eszközpárjait, és kezdjen kereskedni a platform teljes képességeivel.";

// CONTACTS PAGE VARIABLES
$contacts_meta_title = "Vegye Fel a Kapcsolatot a Támogatással | $site_name";
$contacts_meta_description = "Vegye fel a kapcsolatot a $site_name csapatával. 24/7 ügyfélszolgálat, technikai segítségnyújtás és fiókkal kapcsolatos kérdések.";
$contacts_h1 = "Vegye Fel a Kapcsolatot az <mark>Ügyfélszolgálattal</mark>";
$contacts_lead = "Elkötelezett nemzetközi támogatói csapatunk készen áll, hogy segítsen Önnek napi 24 órában, heti 7 napon át.";
$contacts_info_title = "Hivatalos Kérdések";
$contacts_info_text = "Általános kérdésekkel, fiók ellenőrzésével vagy technikai támogatással kapcsolatban vegye fel velünk a kapcsolatot ellenőrzött kommunikációs csatornáinkon keresztül.";
$contacts_support_hours = "24/7 Élő Chat és E-mail Támogatás";

// FAQ PAGE VARIABLES
$faq_meta_title = "GYIK és Tudásbázis | $site_name";
$faq_meta_description = "Találjon válaszokat a $site_name fiókokkal, befizetésekkel, kifizetésekkel és automatizált AI kereskedéssel kapcsolatos gyakran ismételt kérdésekre.";
$faq_h1 = "$site_name <mark>GYIK</mark>";
$faq_lead = "Egyértelmű válaszok a platform biztonságával, a kifizetésekkel és az automatizált kereskedéssel kapcsolatos leggyakoribb kérdésekre.";

// PRIVACY POLICY PAGE VARIABLES
$privacy_meta_title = "Adatvédelmi Szabályzat | $site_name";
$privacy_meta_description = "Olvassa el átfogó Adatvédelmi Szabályzatunkat, hogy megértse, hogyan gyűjti, védi és kezeli a $site_name személyes adatait.";
$privacy_h1 = "Adatvédelmi Szabályzat";
$privacy_p1 = "Ez az Adatvédelmi Szabályzat leírja, hogyan gyűjti, használja és teszi közzé a $site_name az információkat, amikor Ön meglátogatja weboldalunkat, regisztrál egy fiókot, vagy használja kereskedési szoftverünket.";
$privacy_sec1_title = "1. Adatgyűjtés és Felhasználás";
$privacy_sec1_text = "Szükséges kapcsolattartási adatokat gyűjtünk (név, e-mail cím, telefonszám) fiókjának létrehozásához, ellenőrzött brókerpartnerekkel való összekapcsolásához, és az identitás ellenőrzéséhez a nemzetközi KYC és AML szabványoknak megfelelően.";
$privacy_sec2_title = "2. Sütik és Nyomkövetési Technológiák";
$privacy_sec2_text = "Alapvető és analitikai sütiket használunk a weboldal teljesítményének javítására, a felhasználói élmény személyre szabására és a forgalmi minták nyomon követésére. Bármikor módosíthatja böngészője sütibeállításait.";
$privacy_sec3_title = "3. Adatbiztonság és GDPR Jogok";
$privacy_sec3_text = "Minden felhasználói adat titkosítva van átvitel közben és nyugalmi állapotban banki szintű kriptográfiai protokollokkal. Az Általános Adatvédelmi Rendelet (GDPR) értelmében a felhasználóknak joguk van kérni személyes adataik hozzáférését, javítását vagy törlését.";

// TERMS OF USE PAGE VARIABLES
$terms_meta_title = "Felhasználási Feltételek | $site_name";
$terms_meta_description = "Tekintse át a $site_name platform és a kapcsolódó szolgáltatások használatát szabályozó hivatalos Feltételeket és Kikötéseket.";
$terms_h1 = "Felhasználási Feltételek";
$terms_p1 = "Kérjük, alaposan olvassa el ezeket a Felhasználási Feltételeket, mielőtt hozzáférne a $site_name-hoz vagy használná azt. Fiók regisztrálásával elfogadja, hogy kötelezi Önt e rendelkezések.";
$terms_sec1_title = "1. Felhasználói Jogosultság";
$terms_sec1_text = "Legalább 18 évesnek kell lennie, és olyan joghatóságban kell tartózkodnia, ahol az online kereskedés és a kriptovaluta-interakciók jogilag megengedettek. Ön felelős a helyi törvényeknek való megfelelés biztosításáért.";
$terms_sec2_title = "2. Fiókregisztráció és Biztonság";
$terms_sec2_text = "Ön vállalja, hogy igaz, pontos és teljes körű információkat ad meg a regisztráció során. Ön kizárólagosan felelős bejelentkezési adatainak titkosságának megőrzéséért.";
$terms_sec3_title = "3. Felelősségkorlátozás";
$terms_sec3_text = "A $site_name informatikai és szoftverirányítási szolgáltatásokat nyújt. Nem nyújtunk személyre szabott pénzügyi tanácsot, és nem garantáljuk a kereskedés jövedelmezőségét. A pénzügyi piacokon való kereskedés eredendő tőkekockázattal jár.";

// RISK WARNING PAGE VARIABLES (TZ Item 19: Exact 4 sections)
$risk_meta_title = "Kockázati Figyelmeztetés és Jogi Közlemény | $site_name";
$risk_meta_description = "Fontos kockázati közzététel a CFD, Forex és kriptovaluta-kereskedésről a $site_name-nál. Olvassa el figyelmesen a befektetés előtt.";
$risk_h1 = "Kockázati Figyelmeztetés";
$risk_sec1_title = "1. Magas Kockázatú Befektetési Figyelmeztetés és Volatilitás";
$risk_sec1_text = "A kriptovalutákkal, különbözeti szerződésekkel (CFD-k), devizával (Forex) és egyéb pénzügyi eszközökkel folytatott kereskedés jelentős veszteségkockázattal jár, és nem minden befektető számára megfelelő. A kriptovaluta-piacok rendkívül volatilisek, az árak élesen ingadozhatnak a szabályozási bejelentésekre, makrogazdasági változásokra vagy piaci hangulatra reagálva. Soha ne fektessen be olyan pénzt, amelynek teljes elvesztését nem engedheti meg magának.";
$risk_sec2_title = "2. Független Pénzügyi Tanácsadás";
$risk_sec2_text = "A $site_name-on nyújtott összes anyag, eszköz, algoritmikus jel és kommentár kizárólag tájékoztatási, oktatási és marketing célokat szolgál. A weboldal tartalma nem minősül személyre szabott befektetési, jogi vagy pénzügyi tanácsnak. Bármilyen kereskedés végrehajtása előtt független kutatást kell végeznie, vagy engedéllyel rendelkező pénzügyi tanácsadóhoz kell fordulnia.";
$risk_sec3_title = "3. Szabályozási és Földrajzi Korlátozások";
$risk_sec3_text = "Bizonyos joghatóságok korlátozzák vagy tiltják a lakossági CFD- és kriptovaluta-kereskedést. Kizárólag a felhasználó felelőssége ellenőrizni, hogy a $site_name-hoz való hozzáférés és a partner kereskedési brókercégek használata jogszerű-e a helyi jogi keretei szerint.";
$risk_sec4_title = "4. Platform Technológia és Piaci Végrehajtás";
$risk_sec4_text = "Az automatizált kereskedési eszközök, a mesterséges intelligencia algoritmusai és a piaci mutatók nem garantálnak nyereséget, és nem küszöbölik ki a piaci kockázatokat. Technikai zavarok, hálózati késleltetés, rendszerleállások és piaci likviditáshiány a kereskedés végrehajtásának késedelméhez vagy csúszáshoz vezethet.";

// SIGN UP / LOGIN PAGE VARIABLES
$sign_meta_title = "Regisztráció / Bejelentkezés | $site_name";
$sign_meta_description = "Hozza létre ingyenes fiókját a $site_name-nál, hogy hozzáférjen az intelligens automatizált kereskedési eszközökhöz, piaci jelekhez és biztonságos finanszírozási lehetőségekhez.";
$sign_h1 = "Regisztráljon a <mark>$site_name</mark>-nál";
$sign_lead = "Csatlakozzon több ezer kereskedőhöz, és jusson azonnali hozzáféréshez AI kereskedési motorunkhoz.";

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
$hero_form_heading = "Hozza létre ingyenes fiókját";
$hero_form_button = "Regisztráció";
$form_name_placeholder = "Adja meg keresztnevét";
$form_surname_placeholder = "Adja meg vezetéknevét";
$form_disclaimer_prefix = "Személyes adatai megadásával és a gombra kattintva elfogadja";
$form_privacy_link_label = "az Adatvédelmi Szabályzatot";
$form_disclaimer_and = "és";
$form_terms_link_label = "a Felhasználási Feltételeket";
$form_disclaimer_of_site = "ezen a weboldalon.";

// -- partners strip --
$partners_label = "Vezető partnerek bizalma";

// -- "what is" section --
$whatis_label = "A Platformról";
$whatis_title = "Mi a $site_name?";
$whatis_intro = "A $site_name a hivatalos online kereskedési platform, amelyet úgy terveztek, hogy a kriptót olyan egyszerűvé tegye, mint a mindennapi online banki tevékenységet.";
$whatis_icon_1_title = "AI-Alapú Elemzés";
$whatis_icon_1_text = "Fejlett algoritmusok kezelik Ön helyett a piacok összetettségét.";
$whatis_icon_2_title = "Azonnali Végrehajtás";
$whatis_icon_2_text = "Ezernyi adatpont dolgozódik fel másodpercenként — kereskedések késedelem nélkül.";
$whatis_icon_3_title = "Egyszerű, Intuitív Irányítópult";
$whatis_icon_3_text = "Ellenőrizze egyenlegét és nyitott pozícióit egyetlen pillantással, bármikor.";
$whatis_icon_4_title = "Könnyű Hozzáférés, Nincs Akadály";
$whatis_icon_4_text = "Kezdje mindössze $app_price $app_currency minimum befizetéssel — rejtett díjak nélkül.";
$whatis_cta_text = "Szeretne többet megtudni csapatunkról és termékünkről?";
$whatis_cta_link = "Rólunk";

// -- stats section heading (per-stat label/value already set above) --
$stats_label = "$site_name Számokban";
$stats_title = "Számok, Amelyek Hangosabban Beszélnek, Mint az Ígéretek";

// -- key benefits section --
$benefits_label = "Legfontosabb Előnyök";
$benefits_title = "A $site_name Fő Előnyei";
$benefit_1_title = "Kezdőbarát Platform";
$benefit_1_text = "Intuitív grafikonok és lépésről lépésre útmutatók segítenek a kezdésben anélkül, hogy elárasztva érezné magát. Már az első naptól magabiztosan kereskedhet kriptóval.";
$benefit_2_title = "Hivatalos és Szabályozott";
$benefit_2_text = "A $site_name engedélyezett, és megfelel az alkalmazandó pénzügyi szabályozásoknak. SSL titkosítást és kétfaktoros hitelesítést használunk minden fiók védelmére.";
$benefit_3_title = "Könnyű Hozzáférés, Nincs Akadály";
$benefit_3_text = "Mindössze $app_price $app_currency minimum befizetéssel bárki kezdheti. Nincs szükség nagy kezdeti befektetésre — kezdje kicsiben, és növelje tétjét, ahogy nő az önbizalma.";
$benefit_4_title = "Átlátható Díjak";
$benefit_4_text = "Soha nem fog rejtett díjakat látni. Csak minimális tranzakciós vagy kifizetési díjakat alkalmazunk, ahol alkalmazható, így mindig pontosan tudja, mit fizet.";
$benefit_5_title = "24/7 Kereskedési Hozzáférés";
$benefit_5_text = "Kereskedjen saját ütemezése szerint, nappal vagy éjjel. A $site_name ugyanolyan jól működik asztali számítógépen, mint mobilon, így bárhol is van, kapcsolatban maradhat a piaccal.";
$benefit_6_title = "Helyi Ügyfélszolgálat";
$benefit_6_text = "Támogatói csapatunk elérhető chaten, telefonon vagy e-mailben. Valódi emberek vannak itt, hogy segítsenek Önnek a saját nyelvén, amikor csak szüksége van rá.";
$benefits_trust_title = "Felhasználók Bizalma Világszerte";
$benefits_trust_text = "Ezért bíznak annyian a kriptofelhasználók közül a $site_name-ban. Több ezer kereskedő már használja a $site_name-t, és minden nap új fiókok csatlakoznak.";
$benefits_cta = "Regisztráció";
$benefits_badge_1 = "256 bites SSL";
$benefits_badge_2 = "Biztonságos Fizetések";
$benefits_badge_3 = "2FA";

// -- security section --
$security_label = "Biztonság";
$security_title = "Pénze Biztonságban Van a $site_name-nál";
$security_subtitle = "Banki szintű titkosítás, ellenőrzött fizetések és 98% cold storage — pénze minden lépésnél védve van.";
$security_1_title = "Ellenőrzött Fizetési Szolgáltatók";
$security_1_text = "A fizetéseket kizárólag hitelesített szolgáltatók dolgozzák fel, amelyek megfelelnek a nemzetközi biztonsági szabványoknak. Fizetési adatai soha nincsenek tárolva szervereinken.";
$security_2_title = "256 bites SSL Titkosítás";
$security_2_text = "Az eszköze és platformunk közötti összes adatcsere 256 bites TLS-sel van titkosítva. Harmadik fél nem tudja elfogni vagy elolvasni azokat.";
$security_3_title = "98% Cold Storage";
$security_3_text = "Az eszközök 98%-át offline pénztárcákban tárolják, internetkapcsolat nélkül. Senki sem tud távolról hozzáférni ezekhez.";
$security_4_title = "Többfaktoros Hitelesítés";
$security_4_text = "Csak Ön férhet hozzá fiókjához. Minden bejelentkezést egy második lépés ellenőriz, amelyet csak Ön irányít.";
$security_5_title = "Fiókfigyelés";
$security_5_text = "Minden bejelentkezés, tranzakció vagy beállításváltozás azonnali értesítést vált ki, így mindig tudja, mi történik fiókjában.";
$security_6_title = "Jelszóvédelem";
$security_6_text = "A jelszavakat olvashatatlan, visszafordíthatatlan formában tárolják. Technikailag nincs módunk látni a jelszavát.";
$security_cta_title = "Kérjen Ingyenes Útmutatót!";
$security_cta_text = "Szerezze meg ingyenes kezdő útmutatónkat, és kezdjen kereskedni még ma.";
$security_cta_button = "Regisztráció";
$security_badge_1 = "98% Cold Storage";
$security_badge_2 = "Ellenőrzött Fizetések";
$security_badge_3 = "Titkosítva";

// -- how it works section --
$how_label = "Hogyan Működik";
$how_title = "Hogyan Működik";
$how_1_title = "Regisztráljon";
$how_1_text = "Kattintson a „Fiók Megnyitása” gombra, és töltse ki a regisztrációs űrlapot adataival (név, e-mail és telefonszám). Mindössze egy percet vesz igénybe.";
$how_2_title = "Fizessen Be Pénzeszközöket";
$how_2_text = "Ezután finanszírozza fiókját. A minimum befizetés mindössze $app_price $app_currency. Használhat hitel-/betéti kártyát, helyi banki átutalást vagy népszerű e-pénztárcákat. (Tipp: kezdje egy olyan összeggel, amellyel kényelmesen érzi magát.)";
$how_3_title = "Kezdjen Kereskedni";
$how_3_text = "Amint pénzeszközei a fiókjában vannak, készen áll a kereskedésre. Válassza ki a kívánt eszközt (mint pl. BTC, SOL vagy USDT), és döntsön stratégiájáról.";
$how_cta_label = "Hogyan Működik";
$how_cta_text = "Több információra van szüksége arról, hogyan működik a szolgáltatás?";
$how_cta_link = "Hogyan Működik";

// -- trust reasons section --
$trust_label = "Miért Kereskedjen Velünk";
$trust_intro = "Csatlakozzon több ezer felhasználóhoz, akik már kereskednek a $site_name-nál. Weboldalunkon még egy élő számláló is megjelenik, amely megmutatja, hányan kereskednek éppen.";
$trust_1_title = "Teljesen Szabályozott";
$trust_1_text = "A $site_name megfelelően regisztrált, és megfelel az alkalmazandó pénzügyi szabályozásoknak. Szigorú szabályok szerint működünk, hogy biztosítsuk az Ön biztonságát.";
$trust_2_title = "Fejlett Biztonság";
$trust_2_text = "Az összes adata és pénzeszköze titkosítva és biztonságban van. Szigorú fiókvédelmet érvényesítünk SSL titkosítás és kétfaktoros hitelesítés révén.";
$trust_3_title = "Átlátható Műveletek";
$trust_3_text = "Soha nem rejtjük el díjainkat, és soha nem adunk hozzá meglepetésszerű szabályokat. Minden tranzakció előtt pontosan látja, milyen díjak érvényesek.";
$trust_4_title = "Reagáló Támogatás";
$trust_4_text = "Támogatói csapatunk elérhető chaten, telefonon vagy e-mailben, hogy megválaszolja kérdéseit vagy megoldja bármilyen problémáját.";
$trust_cta_text = "További információ a piaci feltételekről";
$trust_cta_link = "Miért Kereskedjen";

// -- testimonials section heading (individual reviews already set above) --
$testimonials_label = "Vélemények";
$testimonials_title = "Több mint 4M Kereskedő Bizalma";

// -- FAQ section heading --
$faq_label = "GYIK";

// -- lead magnet CTA block --
$leadmagnet_title = "Új a Kereskedésben?";
$leadmagnet_text1 = "A regisztráció után megkapja ingyenes útmutatónkat,";
$leadmagnet_quote = "„10 Elkerülendő Hiba a Kriptovaluta-kereskedés Során”";
$leadmagnet_text2 = "amely tele van egyszerű tanácsokkal legtapasztaltabb elemzőinktől, hogy segítsen elkerülni a leggyakoribb hibákat.";
$leadmagnet_text3 = "Egyszerűen adja meg adatait a";
$leadmagnet_link = "regisztráció";
$leadmagnet_text4 = "során, és közvetlenül a postafiókjába küldjük. Sok befektető ezzel az útmutatóval kezdte, és azt mondják, hogy valódi különbséget jelentett.";
$leadmagnet_text5 = "A piac nem vár — kezdje el még ma!";

// -- pre-about CTA band --
$pre_about_title = "Készen Áll Átvenni az Irányítást Kereskedése Felett?";
$pre_about_text = "Csatlakozzon a $site_name-hoz még ma, és fedezze fel az egyértelműségre, biztonságra és eredményekre épített platformot.";
$pre_about_button = "Regisztráció";

// -- pretest (quiz teaser) badges/CTA --
$pretest_title = "Kezdjen Kereskedni $app_price $app_currency Összeggel!";
$pretest_text = "Készen áll kipróbálni a $site_name-t? Regisztráljon most, és csatlakozzon a kriptobefektetők és kereskedők egyre bővülő közösségéhez.";
$pretest_button = "Regisztráció";
$pretest_badge_1 = "Biztonságos";
$pretest_badge_2 = "Szabályozott";
$pretest_badge_3 = "Több mint 4M Kereskedő Bizalma";

// -- about page --
$about_label = "Rólunk";
$about_title = "A $site_name-ról";
$about_intro = "A $site_name nem csupán egy kereskedési platformot ad Önnek — segítünk egyértelműen és magabiztosan kereskedni.";
$about_text_1 = "A $site_name a hivatalos online kereskedési platform, amelyet úgy terveztek, hogy a kriptovaluta-kereskedést elérhetővé tegye mind a kezdők, mind a tapasztalt kereskedők számára.";
$about_text_2 = "Az AI-alapú piacelemzést egy egyszerű, átlátható irányítópulttal kombináljuk, így mindig pontosan tudja, hol áll.";
$about_text_3 = "A platform minden része az átláthatóság köré épül: nincsenek rejtett díjak, nincs zavaros szakzsargon, csak világos információk, amelyek alapján cselekedhet.";
$about_text_4 = "Platformunk órányi találgatástól kíméli meg Önt, és megvédi a homályos, alacsony minőségű alternatíváktól. Hiszünk abban, hogy a kereskedésnek precizitásra, nem pedig szerencsére kell épülnie.";

// -- contact page --
$contact_label = "Kapcsolat";
$contact_title = "Vegye Fel a Kapcsolatot a $site_name-mel";
$contact_subtitle = "Van kérdése, vagy segítségre van szüksége? Itt vagyunk, hogy tanácsot adjunk és irányítsuk Önt.";
$contact_text = "A $site_name-nál hisszük, hogy a kereskedési siker semmi köze a szerencséhez — precizitáson, előrelátáson és a megfelelő eszközökön alapul.";
$contact_form_text = "Egyszerűen töltse ki az alábbi űrlapot, és csapatunk egyik tagja hamarosan felveszi Önnel a kapcsolatot.";
$contact_form_button = "Üzenet Küldése";

// -- footer navigation labels (geo-page footer, TZ items 12/16/18) --
$footnav_col_pages = "Oldalak";
$footnav_col_support = "Támogatás";
$footnav_col_legal = "Jogi";
$footnav_col_company = "Vállalat";
$footnav_home = "Kezdőlap";
$footnav_sitemap = "Oldaltérkép";
$footnav_conditions = "Felhasználási Feltételek";
$footnav_contact = "Kapcsolat";
$footnav_signup = "Regisztráció";
$footer_risk_warning = "Kockázati Figyelmeztetés";

// -- geo-page footer legal disclaimer (single-paragraph variant used by
// the geo template's own footer layout; the two-paragraph TZ item 21
// text above -- $footer_disclaimer_p1/$footer_disclaimer_p2 -- covers
// the root pages) --
$footer_disclaimer = "A $site_name oktatási tartalmat és általános információt nyújt a pénzügyi piacokról, az online kereskedésről és a digitális eszközökről. Az ezen a weboldalon közzétett összes anyag kizárólag tájékoztatási célokat szolgál, és nem tekinthető pénzügyi, befektetési vagy jogi tanácsnak. A kereskedés jelentős kockázattal jár, és nem biztos, hogy minden befektető számára megfelelő. Csak olyan pénzt fektessen be, amelynek elvesztését megengedheti magának.";

// ============================================================
// Geo-language SUBPAGE fallback content (TZ item 16 cont.). Same
// rationale as the block above: conditions/contacts/faq/offer/
// privacy/product/risk-warning/sign.php share templates across the
// bg/cs/da/... stub folders and reference these vars directly.
// English fallback so every geo folder's subpages render complete.
// ============================================================

// -- shared form aliases (service-page forms reuse the hero disclaimer) --
$form_disclaimer_risk_note = "Olvassa el a következőt is:";
$form_text = $form_disclaimer_prefix;
$form_text_privacy = $form_privacy_link_label;
$form_text_privacy_and = $form_disclaimer_and;
$form_text_conditions = $form_terms_link_label;
$form_text_conditions_of = $form_disclaimer_of_site;
$form_text_risk_warning_note = $form_disclaimer_risk_note;
$form_submit = "Regisztráció";

// -- generic breadcrumbs (sign-up / product pages) --
$breadcrumb_home = "Kezdőlap";
$breadcrumb_current = "Regisztráció / Bejelentkezés";
$breadcrumb_product = "Termék";

// -- sign-up page official heading --
$official_heading = "Regisztráljon a Hivatalos $site_name™ Platformon";
$official_description = "Hozza létre ingyenes fiókját, hogy elkezdjen kereskedni kriptovalutával egy biztonságos, átlátható platformon.";

// -- product page: analytics banner --
$analytics_heading = "Kereskedjen Okosabban a $site_name-mel";
$analytics_description = "Kapjon tiszta, valós idejű piaci adatokat és AI-alapú betekintéseket. Hozzon megalapozott kereskedési döntéseket magabiztosan.";

// -- product page: dashboard preview --
$app_main_heading = "Az Ön Kereskedési Irányítópultja";
$app_feature_1_title = "Élő Piaci Adatok";
$app_feature_1_text = "Valós idejű árak és grafikonok a keze ügyében";
$app_feature_2_title = "Portfólió Követés";
$app_feature_2_text = "Átfogó mutatók egyenlegéről és teljesítményéről";
$app_feature_3_title = "Mobil Nézet";
$app_feature_3_text = "Optimalizálva mobilböngészőkhöz";
$app_feature_4_title = "Figyelőlisták";
$app_feature_4_text = "Kövesse nyomon a figyelt eszközöket";

// -- product page: capabilities --
$capabilities_main_title = "Mire Számíthat";
$capabilities_feature_1_title = "AI-Alapú Jelek";
$capabilities_feature_1_text = "Fejlett algoritmusok elemzik a piaci jeleket, és éjjel-nappal felszínre hozzák a lehetőségeket.";
$capabilities_feature_2_title = "Gyors Regisztráció";
$capabilities_feature_2_text = "Regisztráljon percek alatt biztonságos, egyszerű regisztrációs folyamattal.";
$capabilities_feature_3_title = "Ellenőrzött Biztonság";
$capabilities_feature_3_text = "256 bites SSL titkosítás, 2FA és 98% cold storage védi pénzeszközeit minden lépésnél.";
$capabilities_feature_4_title = "Folyamatos Támogatás";
$capabilities_feature_4_text = "Kapjon támogatást csapatunktól minden lépésnél — a regisztrációtól az első kereskedéséig.";

// -- product page: stats strip --
$products_stats_currencies_v = "65+";
$products_stats_currencies_l = "Elérhető Pénznemek";
$products_stats_users_v = "4M+";
$products_stats_users_l = "Regisztrált Felhasználók";
$products_stats_volume_v = "98+";
$products_stats_volume_l = "Támogatott Országok";
$products_stats_countries_v = "24/7";
$products_stats_countries_l = "Tranzakciós Hozzáférés";

// -- product page: 3-step strip --
$step_1 = "Hozzon létre egy fiókot";
$step_2 = "Fizessen be pénzeszközöket";
$step_3 = "Kezdjen kereskedni az Önnek megfelelő stratégiával";

// -- shared "last update" label (privacy page) --
$last_update = "Utolsó frissítés";

// -- FAQ page --
$faq_page_meta_title = "GYIK | $site_name Támogatás";
$faq_page_meta_description = "Válaszok a gyakran ismételt kérdésekre a $site_name működéséről, az árakról és a kezdésről.";
$faq_page_title = "GYIK";
$faq_page_breadcrumb_home = "Kezdőlap";
$faq_page_breadcrumb_current = "GYIK";
$faq_page_help_title = "Hogyan segíthetünk?";
$faq_1_q = "Hogyan kezdjem?";
$faq_1_a = "Hozza létre fiókját, ellenőrizze e-mail címét, és tegye meg első befizetését — a tervek mindössze $app_price $app_currency-tól kezdődnek.";
$faq_2_q = "Biztonságban van a pénzem és az adataim? Megbízható a $site_name?";
$faq_2_a = "Igen. Adatait iparági szabvány szerinti 256 bites titkosítás védi, pénzeszközeit pedig kétfaktoros hitelesítés és 98% cold storage biztosítja.";
$faq_3_q = "Bármikor bezárhatom fiókomat vagy kivehetem pénzeszközeimet?";
$faq_3_a = "Igen. Nincsenek korlátozások a kifizetésekre. Vegye fel a kapcsolatot támogatói csapatunkkal bármikor — segítünk fiókjával kapcsolatban, vagy azonnal feldolgozzuk kifizetését.";
$faq_4_q = "Honnan tudom, hogy ez a platform megfelelő számomra?";
$faq_4_a = "A $site_name-t mind teljesen kezdők, mind tapasztalt kereskedők számára építették, akik hatékonyabban szeretnének kereskedni — a platform minden eszközét úgy tervezték, hogy tájékoztassa és irányításban tartsa Önt.";
$faq_5_q = "Szükségem van kereskedési tapasztalatra a kezdéshez?";
$faq_5_a = "Nincs szükség korábbi tapasztalatra. AI-alapú módunk elvégzi az elemzést Ön helyett, és bármikor átválthat manuális módra, ha nagyobb irányítást szeretne.";

// -- contacts page --
$contacts_h3 = "Technikai kérdésekkel vagy fiókjával kapcsolatos kérdésekkel kapcsolatban kérjük, vegye fel velünk a kapcsolatot e-mailben";

// -- offer page (meta title/description already defined above) --
$offer_breadcrumb_home = "Kezdőlap";
$offer_breadcrumb_current = "Ajánlat";
$offer_cta_h1 = "Kezdjen Kereskedni Ma";
$offer_cta_text = "Percek alatt kész: regisztráljon, finanszírozza fiókját, és kezdjen kereskedni kriptovalutával egy biztonságos, szabályozott platformon.";
$offer_how_it_works_title = "Hogyan Működik";
$offer_official_platform_title = "Ez a Hivatalos $site_name™ Kereskedési Platform";
$offer_official_platform_text = "Megbízható, átlátható módja a kriptovaluta-kereskedésnek — valós idejű betekintésekkel és teljes irányítással.";

// -- conditions of use page --
$conditions_meta_title = "Felhasználási Feltételek | $site_name";
$conditions_meta_description = "Olvassa el a $site_name weboldal és kereskedési platform hivatalos Felhasználási Feltételeit.";
$conditions_breadcrumb_home = "Kezdőlap";
$conditions_breadcrumb_current = "Felhasználási Feltételek";
$conditions_h1 = "Felhasználási Feltételek";
$conditions_s1_title = "1. Általános";
$conditions_s1_text = "Ez a weboldal hozzáférést biztosít egy online kriptovaluta-kereskedési platformhoz. A platform használata e feltételek és Adatvédelmi Szabályzatunk teljes elfogadását jelenti.";
$conditions_s2_title = "2. Jogosultság";
$conditions_s2_text = "A felhasználóknak legalább 18 évesnek kell lenniük, és teljes jogi cselekvőképességgel kell rendelkezniük saját joghatóságukban.";
$conditions_s3_title = "3. Korlátozott Hozzáférés";
$conditions_s3_text = "A hozzáférés korlátozott lehet olyan joghatóságokban, ahol a helyi szabályozások tiltják az általunk kínált kereskedési szolgáltatás típusát.";
$conditions_s4_title = "4. Tiltott Használat";
$conditions_s4_text = "A felhasználók nem élhetnek vissza a rendszerrel, nem kísérelhetnek meg jogosulatlan hozzáférést rendszereinkhez, és nem fejthetik vissza szoftverünket.";
$conditions_s5_title = "5. Szellemi Tulajdon";
$conditions_s5_text = "Minden forráskód, felhasználói felület és márkaeszköz kizárólagosan az üzemeltető társaság tulajdonát képezi.";
$conditions_s6_title = "6. Felelősség";
$conditions_s6_text = "A platform eszközeit „ahogy vannak” alapon biztosítjuk. Nem vállalunk felelősséget a felhasználó saját kereskedési döntéseiből eredő eredményekért.";
$conditions_s7_title = "7. Harmadik Fél Szolgáltatások";
$conditions_s7_text = "A harmadik féltől származó fizetési szolgáltatókkal való integrációk biztonságos kapcsolatokon keresztül történnek. Befizetések és kifizetések esetén a felhasználók közvetlenül a választott szolgáltatóval üzletelnek.";
$conditions_s8_title = "8. Külső Linkek";
$conditions_s8_text = "A külső forrásokra mutató linkeket csak kényelmi célból biztosítjuk. Nem hagyunk jóvá és nem garantálunk semmilyen külső szoftvert.";
$conditions_s9_title = "9. Egyéb";
$conditions_s9_text = "Fenntartjuk a jogot, hogy bármikor módosítsuk ezeket a feltételeket vagy a szolgáltatást, a változásokat a weboldalon tesszük közzé.";

// -- privacy policy page (meta title/description already defined above) --
$privacy_breadcrumb_home = "Kezdőlap";
$privacy_breadcrumb_current = "Adatvédelmi Szabályzat";
$privacy_page_h1 = "Adatvédelmi Szabályzat";
$privacy_intro = "Tiszteletben tartjuk az Ön magánéletét, és a nemzetközi szabványoknak és az európai GDPR-nak teljes mértékben megfelelően kezeljük a személyes adatokat.";
$privacy_transparency_title = "Átláthatóság";
$privacy_transparency_text = "Egyértelműen közzétesszük, hogyan kezeljük az üzemeltetési telemetriai adatokat. További részletekért forduljon az ügyfélszolgálathoz.";
$privacy_usage_title = "Adatfelhasználás";
$privacy_usage_text = "Az adatokat kizárólag hozzáférés biztosítására, munkamenetek biztosítására és megfelelőségi kötelezettségek teljesítésére használjuk.";
$privacy_rights_short_title = "Az Ön Jogai";
$privacy_rights_short_text = "Ön megtartja a teljes jogot személyes adatai megtekintésére, frissítésére vagy törlésének kérésére.";
$privacy_security_title = "Biztonság";
$privacy_security_text = "AES-256 titkosítást és adatbázis-elkülönítést használunk az üzemeltetési telemetriai adatok védelmére.";
$privacy_s1_title = "1. Adatgyűjtés";
$privacy_s1_text = "Használati telemetriát (IP-cím, rendszerparaméterek, böngészőtípus), valamint a felhasználók által benyújtott ellenőrzési adatokat gyűjtünk.";
$privacy_s2_title = "2. Jogalap";
$privacy_s2_text = "A feldolgozás a felhasználók kifejezett hozzájárulásán, a szabályozási megfelelőségi követelményeken és a szolgáltatás nyújtásán alapul.";
$privacy_s3_title = "3. Adatmegosztás";
$privacy_s3_text = "Az adatokat soha nem kereskedelmi célra hasznosítjuk. A közzétételek engedélyezett elszámolási szervezetekre és technikai partnerekre korlátozódnak titoktartási megállapodás (NDA) alapján.";
$privacy_s4_title = "4. Sütik";
$privacy_s4_text = "Alapvető sütiket használunk munkamenet-hitelesítéshez és felület-optimalizáláshoz.";
$privacy_google_choices = 'Kezelje nyomkövetési beállításait a <a href="http://www.google.com/settings/ads" target="_blank" rel="noopener">Google Hirdetési Beállításokon</a> keresztül, vagy használja a <a href="https://tools.google.com/dlpage/gaoptout" target="_blank" rel="noopener">Google Analytics Leiratkozási Kiegészítőt</a>. Áttekintheti a Google saját adatkezelési gyakorlatait is annak <a href="https://www.google.com/intl/en/policies/privacy/" target="_blank" rel="noopener">Adatvédelmi Szabályzatában</a>.';
$privacy_s5_title = "5. Adatmegőrzés";
$privacy_s5_text = "A személyes adatokat csak addig őrizzük meg, amíg szükséges a rendszerhozzáférési követelmények teljesítéséhez.";
$privacy_s6_title = "6. Nemzetközi Adatátvitel";
$privacy_s6_text = "A határokon átnyúló adatátvitel kizárólag titkosított csatornákon és szabványos szerződéses záradékokon keresztül történik.";
$privacy_s7_title = "7. Harmadik Fél Linkjei";
$privacy_s7_text = "Nem vagyunk felelősek a weboldalunkról hivatkozott külső harmadik fél szolgáltatásainak adatvédelmi gyakorlatáért.";
$privacy_s8_title = "8. Frissítések";
$privacy_s8_text = "Ezt a szabályzatot időszakonként felülvizsgálhatjuk, hogy tükrözze a rendszer- vagy jogi változásokat.";
$privacy_rights_title = "Az Ön Jogai";
$privacy_rights_text = "A felhasználóknak joguk van kérni a tárolt adataikhoz való hozzáférést, azok javítását, korlátozott feldolgozását vagy teljes törlését.";

// -- risk warning page --
$page_title_risk_warning = "Kockázati Figyelmeztetés | $site_name";
$page_description_risk_warning = "Ismerje meg a kereskedés kockázatait, és hogyan segít a $site_name biztonságosan kezelni azokat.";
$risk_warning_breadcrumb_home = "Kezdőlap";
$risk_warning_breadcrumb_current = "Kockázati Figyelmeztetés";
$risk_warning_title = "Kockázati Figyelmeztetés";
$risk_warning_intro = "A kockázatok megértése az első lépés a magabiztos kereskedés felé.";
$risk_warning_ai_heading = "Hogyan segít AI rendszerünk a kockázatkezelésben:";
$risk_warning_ai_1 = "<strong>Algoritmikus Hatékonyság és Érzelemmentes Kereskedés:</strong> Fejlett algoritmusok elemzik a piaci jeleket, hogy objektíven, optimális időpontban hajtsák végre a kereskedéseket.";
$risk_warning_ai_2 = "<strong>Adatvezérelt Stratégiák:</strong> A stratégiák ellenőrzött piaci mintákon és valós idejű elemzésen alapulnak, nem találgatáson.";
$risk_warning_ai_3 = "<strong>Rugalmas Beállítások és Teljes Irányítás:</strong> Bármikor módosíthatja kockázati paramétereit. Kövesse nyomon minden egyenlegét és kereskedését átláthatóan irányítópultján — rejtett díjak és kifizetési korlátozások nélkül.";
$risk_warning_disclaimer = "<strong>Felelősségkizárás:</strong> A kereskedés mindig kockázattal jár. Az automatizált rendszerek (beleértve az AI-t is) nem garantálnak nyereséget, meghibásodhatnak szoftverhibák vagy váratlan piaci események miatt, és felhasználói felügyeletet igényelnek. A múltbeli teljesítmény nem jelzi a jövőbeli eredményeket. Ez a platform kizárólag tájékoztatási és marketingcélokat szolgál, és nem minősül pénzügyi tanácsnak.";
$risk_warning_s1_heading = "1. Általános Kockázatok és Kriptovaluta-Piaci Kockázatok";
$risk_warning_s1_1 = "A kriptovaluták rendkívül volatilis, spekulatív eszközök, amelyekkel éjjel-nappal kereskednek, és a legtöbb joghatóságban csak minimális szabályozási felügyelet alatt állnak.";
$risk_warning_s1_2 = "Az értékek rövid időn belül drasztikusan ingadozhatnak, ami potenciálisan a befektetett tőke teljes elvesztéséhez vezethet.";
$risk_warning_s1_3 = "A piaci értékeket jelentősen befolyásolhatják a szabályozási változások, technikai fejlemények, biztonsági rések vagy szélesebb körű makrogazdasági események.";
$risk_warning_s1_4 = "Néhány eszköz teljesen elveszítheti értékét. Csak olyan pénzt fektessen be, amelynek elvesztését megengedheti magának.";
$risk_warning_s2_heading = "2. Végrehajtási, Likviditási és Tőkeáttételi Kockázatok";
$risk_warning_s2_1 = "<strong>Piaci Volatilitás és Likviditás:</strong> Extrém árelmozdulások (napi 10-20%+) vagy alacsony likviditás (különösen a kisebb érméknél) késedelmekhez, platformkiesésekhez és jelentős végrehajtási csúszáshoz vezethetnek. A stop-loss megbízások nem garantálhatják a veszteségkorlátozást extrém körülmények között.";
$risk_warning_s2_2 = "<strong>Tőkeáttételi és Fedezeti Kockázat:</strong> A tőkeáttételes termékek egyaránt felerősítik a nyereségeket és a veszteségeket, ami azt jelenti, hogy többet veszíthet, mint az eredeti befizetése. A lakossági befektetői számlák körülbelül 70-80%-a veszít pénzt a tőkeáttételes termékekkel folytatott kereskedés során.";
$risk_warning_s3_heading = "3. Technikai, Kiberbiztonsági és Harmadik Fél Kockázatok";
$risk_warning_s3_1 = "<strong>Technikai Tényezők:</strong> Az online kereskedés eredendően kockázatokkal jár, mint például internetkapcsolat-megszakadás, hardver-/szoftverhibák és a szolgáltatás elérhetetlensége.";
$risk_warning_s3_2 = "<strong>Kiberbiztonság:</strong> A kriptovaluta-számlák gyakori célpontjai az adathalászatnak, rosszindulatú szoftvereknek és hackelési kísérleteknek. A tranzakciók visszafordíthatatlanok; bejelentkezési adatai kompromittálódása tartós veszteséghez vezethet.";
$risk_warning_s3_3 = "<strong>Harmadik Fél Platformjai:</strong> Ez a weboldal összekapcsolhatja a felhasználókat harmadik fél platformjaival. Nem ellenőrizzük, nem hagyjuk jóvá, és nem garantáljuk azok biztonságát, működését vagy fizetőképességét. Mindig végezze el saját alapos átvilágítását, mielőtt pénzeszközöket helyezne el külső platformokon.";
$risk_warning_s4_heading = "4. Szabályozási, Adózási és Záró Rendelkezések";
$risk_warning_s4_1 = "<strong>Jogi Megfelelés és Adók:</strong> A szabályozási keretek jelentősen eltérnek és gyorsan változnak. A felhasználók kizárólagosan felelősek annak biztosításáért, hogy kereskedési tevékenységük megfeleljen a helyi jogszabályoknak, valamint saját adókötelezettségeik teljesítéséért.";
$risk_warning_s4_2 = "<strong>Nincs Nyereséggarancia:</strong> Nincs „biztonságos” vagy kockázatmentes kriptovaluta-kereskedés. Bármilyen megadott hozamszám vagy teljesítménypélda tisztán feltételezett.";
$risk_warning_s4_3 = "<strong>Alkalmasság:</strong> Ha nem érti teljesen a kockázatokat, szükséges pénzügyi forrásoktól függ, vagy kölcsönpénzzel kereskedik, a kriptovaluta-kereskedés nem alkalmas Önnek. Kétség esetén forduljon független, engedéllyel rendelkező pénzügyi tanácsadóhoz.";
$risk_warning_contact = "<strong>Kapcsolat:</strong> Ha kérdése van ezzel a nyilatkozattal kapcsolatban, vagy kérdést szeretne benyújtani, kérjük, vegye fel a kapcsolatot hivatalos ügyfélszolgálati csapatunkkal weboldalunk kapcsolatfelvételi űrlapján keresztül.";

