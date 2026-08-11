<?php
require __DIR__ . '/../lang.php';

// Identity / config variables are intentionally NOT overridden here — they are inherited
// as-is from the root lang.php so brand/pricing swaps still work correctly at deploy time:
// $site_name, $site_url, $site_domain, $app_price, $app_currency, $rating_value,
// $rating_count, $review_count, $country_name, $support_email, $institutional_email.

$site_lang = 'sk-SK';
$form_language = 'sk'; 

// Reviews
$review_1_author = "Súkromný investor";
$review_2_author = "Nezávislý obchodník";
$review_3_author = "Obchodník s digitálnymi aktívami";
$review_4_author = "Hľadač pasívneho príjmu";


// META TITLE / DESCRIPTION (per page)
$home_meta_title = "$site_name — Oficiálna webstránka | Obchodná platforma";
$home_meta_description = "$site_name ⭐ — inteligentná obchodná platforma s umelou inteligenciou pre analýzu trhu v reálnom čase a jasné obchodné signály ⚡ Vyskúšajte inteligentné nástroje a prehľady pomocou sprievodcu.";



$quiz_consultant_name = 'Mia';
$quiz_consultant_role = 'Asistentka onboardingu';

$quiz_text_welcome   = "Dobrý deň! Tu je $quiz_consultant_name, vaša osobná asistentka onboardingu na platforme $site_name. Výborná správa! Váš prístup je oficiálne predbežne schválený. Dovoľte nám teraz nakonfigurovať váš profesionálny profil!";
$quiz_text_q1 = "Na zabezpečenie plného dodržiavania regulačných a právnych predpisov potvrďte, prosím, krajinu vášho súčasného pobytu: $country_name";
$quiz_text_a1_yes    = "Áno, toto je môj súčasný pobyt";
$quiz_text_a1_no     = "Nie";

$quiz_text_q2 = "Perfektné. Vyberte vhodnú vekovú kategóriu, aby sme našli najvhodnejšie finančné nástroje:";

$quiz_text_q3        = "Máte k dispozícii aktívny bankový účet alebo kreditnú kartu na prijímanie pravidelných denných výplat dividend?";
$quiz_text_a3_yes    = "Áno, mám aktívny účet";
$quiz_text_a3_no     = "Zatiaľ nie";

$quiz_text_q4        = "Uveďte primárny zdroj osobného príjmu. (Tento parameter pomáha prispôsobiť systémové nastavenia riadenia rizík).";
$quiz_text_a4_1      = "Oficiálne zamestnanie / Živnostník";
$quiz_text_a4_2      = "Pasívny príjem / Osobné úspory";
$quiz_text_a4_3      = "Iné zdroje";

$quiz_text_q5 = "Skvelé! Posledným krokom je krátke telefonické overenie od nášho manažéra na potvrdenie vašej registrácie. Hovory sa uskutočňujú od 11:00 do 20:00. Budete môcť prijať hovor?";
$quiz_text_a5_yes    = "Áno, tento čas mi na hovor vyhovuje";
$quiz_text_a5_no     = "Prosím, zavolajte ihneď";

$quiz_text_loader    = "Analyzujú sa požadované možnosti a inicializujú sa parametre bezpečnej konfigurácie účtu...";
$quiz_text_final_ttl = "Účet bol úspešne autorizovaný! 🎉 Bezpečný digitálny pracovný priestor je plne nakonfigurovaný. Ak chcete zaručiť denné platby, dokončite nasledujúce záverečné kroky overenia:";

$quiz_placeholder_fname = "Meno";
$quiz_placeholder_lname = "Priezvisko";
$quiz_placeholder_email = "E-mailová adresa";
$quiz_placeholder_phone = "Telefónne číslo";
$quiz_btn_submit = "Aktivovať obchodovanie";
$quiz_text_typing       = "píše správu...";
$quiz_text_processing   = "Spracováva sa požiadavka...";


$about_meta_title = "O $site_name | Infraštruktúra obchodovania s kryptomenami s podporou AI";
$about_meta_description = "Prečítajte si viac o $site_name, pokročilej infraštruktúre obchodovania s kryptomenami poháňanej umelou inteligenciou zameranej na prediktívnu analytiku, inteligenciu trhu, monitorovanie volatility a výskum digitálnych aktív.";

$contact_meta_title = "Kontaktovať $site_name | Požiadať o prístup k platforme obchodovania s AI";
$contact_meta_description = "Kontaktujte $site_name a požiadajte o prístup, opýtajte sa na infraštruktúru obchodovania s kryptomenami pomocou AI, podporované trhy, inteligenciu digitálnych aktív alebo onboarding platformy.";

$terms_meta_title = "Podmienky používania | $site_name Podmienky pre webové stránky a platformu";
$terms_meta_description = "Prečítajte si Podmienky používania $site_name, ktoré pokrývajú používanie webovej stránky, informačný obsah, infraštruktúru obchodovania s AI, zodpovednosť používateľov, služby tretích strán a obmedzenia rizík.";

$privacy_meta_title = "Zásady ochrany osobných údajov | $site_name Ochrana údajov a súkromie používateľov";
$privacy_meta_description = "Prečítajte si Zásady ochrany osobných údajov $site_name, aby ste pochopili, ako zhromažďujeme, používame, chránime, uchovávame a spravujeme osobné informácie odoslané prostredníctvom našej webovej stránky o infraštruktúre obchodovania s kryptomenami pomocou AI.";

$cookies_meta_title = "Zásady používania súborov cookie | $site_name Cookies webovej stránky a sledovanie";
$cookies_meta_description = "Zistite, ako $site_name používa cookies, analytické technológie, nástroje na sledovanie výkonu a služby funkcií webových stránok na zlepšenie používateľského zážitku a výkonu platformy.";

$aml_meta_title = "Zásady AML | $site_name Štandardy proti praniu špinavých peňazí";
$aml_meta_description = "Prezrite si Zásady AML $site_name vrátane zodpovedného používania digitálnych aktív, informovanosti o praniu špinavých peňazí, zakázaných aktivít, princípov monitorovania a očakávaní týkajúcich sa dodržiavania pravidiel.";

$risk_meta_title = "Zverejnenie rizík | $site_name Vyhlásenie o riziku obchodovania s kryptomenami";
$risk_meta_description = "Prečítajte si Zverejnenie rizík $site_name, aby ste pochopili volatilitu kryptomien, neistotu v obchodovaní, obmedzenia AI signálov, trhové riziko, riziko likvidity a zodpovednosť používateľa.";

$exchanges_meta_title = "Podporované burzy | $site_name Pokrytie trhového spravodajstva";
$exchanges_meta_description = "Preskúmajte typy kryptomenových búrz, likviditných miest a trhov digitálnych aktív monitorovaných infraštruktúrou spravodajstva o trhu $site_name s umelou inteligenciou.";


$about_breadcrumb_name = "O $site_name";
$contact_breadcrumb_name = "Kontaktovať $site_name";
$terms_breadcrumb_name = "Podmienky používania";
$privacy_breadcrumb_name = "Zásady ochrany osobných údajov";
$cookies_breadcrumb_name = "Zásady používania súborov cookie";
$aml_breadcrumb_name = "Zásady AML";
$risk_breadcrumb_name = "Zverejnenie rizík";
$exchanges_breadcrumb_name = "Podporované burzy";

$hero_text = "Zažite novú éru obchodovania s našou pokročilou krypto obchodnou platformou. S AI technológiou $site_name môžete optimalizovať svoje výnosy a prijímať informované investičné rozhodnutia.";


// HEADER / NAV / FOOTER
$logo_subtitle = "Infraštruktúra obchodovania s AI";
$nav_signals = "Signály";
$nav_reviews = "Recenzie";
$nav_about = "O nás";
$nav_exchanges = "Burzy";
$nav_exchanges_full = "Podporované burzy";
$nav_risk = "Riziko";
$nav_risk_full = "Zverejnenie rizík";
$nav_faq = "Časté otázky";
$nav_privacy = "Zásady ochrany osobných údajov";
$nav_terms = "Podmienky používania";
$nav_cookies = "Zásady používania súborov cookie";
$nav_cookies_short = "Cookies";
$nav_aml = "Zásady AML";
$nav_contact_us = "Kontaktujte nás";
$nav_contact = "Kontakt";
$nav_get_started = "Začať";
$header_ai_status = "AI Jadro Funkčné";
$header_menu_aria = "Menu";
$footer_platform = "Platforma";
$footer_resources = "Zdroje";
$footer_contact_title = "Kontakt";
$footer_ai_signals = "AI Signály";
$footer_about_link = "O $site_name";
$footer_description = "$site_name je pokročilá infraštruktúra na obchodovanie s kryptomenami na báze AI zameraná na prediktívnu analytiku, inteligenciu trhu na inštitucionálnej úrovni, modelovanie volatility, systémy neurónového vykonávania a automatizované riadenie rizík.";
$footer_monitoring = "Monitorovanie AI infraštruktúry 24/7";
$footer_global_markets = "Globálne trhy s digitálnymi aktívami";
$footer_disclaimer_title = "Zverejnenie rizík";
$footer_disclaimer_p1 = "Obchodovanie s kryptomenami a investovanie do digitálnych aktív zahŕňajú podstatné finančné riziko a nemusia byť vhodné pre všetkých investorov. Volatilita trhu, narušenia likvidity, technologické zlyhania, regulačné zmeny a makroekonomické podmienky môžu výrazne ovplyvniť výkonnosť aktív.";
$footer_disclaimer_p2 = "$site_name poskytuje analytickú infraštruktúru s umelou inteligenciou, prediktívnu inteligenciu trhu a technológie automatizovaného obchodovania. Nič uvedené na tejto webovej stránke nepredstavuje finančné, investičné, právne alebo daňové poradenstvo.";
$footer_disclaimer_p3 = "Minulá výkonnosť nezaručuje budúce výsledky. Pred interakciou s trhmi kryptomien alebo automatizovanými obchodnými systémami by mali používatelia nezávisle zhodnotiť riziká.";
$footer_rights = "Všetky práva vyhradené.";
$footer_lang_label = "Jazyk";



// HOME FORM
$home_form_fname = "Meno";
$home_form_lname = "Priezvisko";
$home_form_email = "E-mail";
$home_form_submit_access = "Získať prístup";
$home_form_submit_platform = "Požiadať o prístup k platforme";

// CONTACT FORM
$contact_form_fname = "Meno";
$contact_form_lname = "Priezvisko";
$contact_form_email = "E-mail";
$contact_form_submit = "Požiadať o prístup";


// HOME LABELS
$home_label_ai_confidence = "AI Spoľahlivosť";
$home_label_update_speed = "Rýchlosť aktualizácie";
$home_label_market_mode = "Trhový režim";
$home_label_market_condition = "Stav trhu";
$home_label_buyer_activity = "Aktivita kupujúcich";
$home_label_market_activity = "Aktivita na trhu";
$home_label_risk_level = "Úroveň rizika";
$home_label_updated = "Aktualizované";
$home_label_live_analysis = "LIVE ANALÝZA";

// JS
$home_js_sec_ago = "sek.";
$js_sec_ago = "sek.";
$js_close_notification = "Zatvoriť upozornenie";

$js_signal_long_direction = "Pravdepodobnosť rastúceho trendu sa zvyšuje";
$js_signal_long_market = "Kontrolovaná expanzia";
$js_signal_long_pressure_label = "Likviditný tlak";
$js_signal_long_pressure = "Býčí";

$js_signal_short_direction = "Riziko poklesu narastá";
$js_signal_short_market = "Vysoká nestabilita";
$js_signal_short_pressure_label = "Rizikový tlak";
$js_signal_short_pressure = "Medvedí";

$js_signal_watch_direction = "Zistená konsolidačná zóna";
$js_signal_watch_market = "Neutrálna konsolidácia";
$js_signal_watch_pressure_label = "Inštitucionálny tok";
$js_signal_watch_pressure = "Stabilný";

$js_hero_long_pair = "Rozšírenie momenta BTC/USD";
$js_hero_long_regime = "Býčí";
$js_hero_long_feed_1 = "Bola zistená expanzia likvidity BTC";
$js_hero_long_feed_2 = "Tlak na tok objednávok sa mení na pozitívny";
$js_hero_long_feed_3 = "Model AI potvrdzuje pokračovanie býčieho rastu";

$js_hero_watch_pair = "Kompresia volatility ETH/USD";
$js_hero_watch_regime = "Neutrálny";
$js_hero_watch_feed_1 = "Zistená zóna kompresie ETH";
$js_hero_watch_feed_2 = "Umela inteligencia čaká na silnejšie potvrdenie";
$js_hero_watch_feed_3 = "Likvidita zostáva stabilná";

$js_hero_short_pair = "Expanzia rizika SOL/USD";
$js_hero_short_regime = "Risk-Off (odklon od rizika)";
$js_hero_short_feed_1 = "Zistený tlak na pokles SOL";
$js_hero_short_feed_2 = "Rizikový model signalizuje rozšírenie volatility";
$js_hero_short_feed_3 = "Umela inteligencia znižuje expozíciu býčieho trhu";

// JS — live user popup actions
$js_live_action_1 = "sa pripojil/a k $site_name z";
$js_live_action_2 = "požiadal/a o prístup na platformu z";
$js_live_action_3 = "spustil/a monitorovanie AI signálov z";
$js_live_action_4 = "aktivoval/a analýzu trhu z";
$js_live_action_5 = "otvoril/a inštitucionálny riadiaci panel z";
$js_live_action_6 = "sa pripojil/a k $site_name z";


// HOME PAGE
$home_hero_label = "Krypto platforma s AI pre každú úroveň skúseností";
$home_hero_title = "Platforma $site_name";
$home_hero_desc = "$site_name pomáha začiatočníkom a skúseným obchodníkom objavovať kryptotrhy pomocou postrehov poháňaných umelou inteligenciou, monitorovania trhu v reálnom čase, nástrojov na zistenie rizika a podpory riadenej platformy.";
$home_hero_feat_1 = "Jednoduché analýzy trhu prostredníctvom AI pre nových používateľov";
$home_hero_feat_2 = "Monitorovanie kryptomien a aktualizácie signálov v reálnom čase";
$home_hero_feat_3 = "Nástroje upozorňujúce na riziká pre inteligentnejšie rozhodnutia";
$home_hero_feat_4 = "Pokročilá analytika pre skúsených obchodníkov";
$home_btn_request_access = "Získať prístup na platformu";
$home_btn_view_signals = "Zobraziť AI signály";
$home_trust_data_label = "Analyzované body trhových dát";
$home_trust_confidence_label = "Priemerná spoľahlivosť signálu";
$home_trust_monitoring_label = "AI monitorovanie trhu";
$home_terminal_title = "Sprievodca $site_name k zobrazeniu AI na trhu";
$home_terminal_insight_label = "Súčasný trhový náhľad pomocou AI";
$home_terminal_feed_1 = "Aktivita na trhu s BTC vykazuje silnejšiu dynamiku";
$home_terminal_feed_2 = "Prebieha sledovanie pohybu ETH za účelom potvrdenia";
$home_terminal_feed_3 = "AI asistent zvýrazňuje možnú zónu príležitosti";
$home_trust_strip_1 = "Postrehy z umelej inteligencie pre začiatočníkov a skúsených obchodníkov";
$home_trust_strip_2 = "Monitorovanie trhu s kryptomenami nepretržite 24/7";
$home_trust_strip_3 = "Analýza rizík a príležitostí v reálnom čase";
$home_trust_strip_4 = "Riadený prístup k pokročilým obchodným nástrojom";
$home_signals_eyebrow = "$site_name LIVE AI JADRO";
$home_signals_title = "AI trhové signály v reálnom čase na lepšie rozhodovanie o kryptomenách";
$home_signals_desc = "$site_name neustále sleduje aktivitu na trhu kryptomien, volatilitu, podmienky likvidity, trendy sentimentu a údaje blockchainu, aby vytvorilo nástroje poháňané umelou inteligenciou a signály v reálnom čase pre začiatočníkov aj skúsených obchodníkov.";
$home_signals_terminal_title = "$site_name Signalizačný modul pre AI";
$home_signal_btc_sub = "Zistená pozitívna dynamika";
$home_signal_btc_dir = "Pravdepodobnosť rastúceho trendu sa zvyšuje";
$home_signal_btc_market = "Pozitívna dynamika";
$home_signal_btc_activity = "Silná";
$home_signal_eth_sub = "Čaká sa na potvrdenie trhu";
$home_signal_eth_dir = "Bol zistený bočný pohyb";
$home_signal_eth_market = "Neutrálny trend";
$home_signal_eth_activity = "Stabilná";
$home_signal_sol_sub = "Bolo zistené zvýšené trhové riziko";
$home_signal_sol_dir = "Riziko poklesu narastá";
$home_signal_sol_market = "Vysoká volatilita";
$home_signal_sol_risk = "Zvýšené";
$home_why_eyebrow = "PREČO $site_name?";
$home_why_title = "Krypto nástroje poháňané umelou inteligenciou pre všetky úrovne skúseností";
$home_why_desc_1 = "$site_name pomáha používateľom lepšie porozumieť trhom s kryptomenami prostredníctvom umelej inteligencie, monitorovania v reálnom čase, pohľadov do trhu a nástrojov na rozoznávanie rizík. Nezáleží na tom, či prvýkrát spoznávate kryptomeny, alebo už máte s obchodovaním skúsenosti, platforma je navrhnutá tak, aby robila analýzu trhu dostupnejšou a ľahšie pochopiteľnou.";
$home_why_desc_2 = "Infraštruktúra $site_name neustále hodnotí aktivitu na trhu, zmeny v cenách, podmienky na likviditu, trendy nálad a údaje blockchainu na identifikáciu nových príležitostí a meniacich sa trhových podmienok. Noví používatelia môžu využiť prístup sprevádzanej podpory, zatiaľ čo skúsení obchodníci môžu preskúmať pokročilé analytické nástroje a umelú inteligenciu pre trhy.";
$home_flow_1 = "Sledovanie trhu";
$home_flow_2 = "AI Analýza";
$home_flow_3 = "Identifikácia príležitostí";
$home_flow_4 = "Hodnotenie rizík";
$home_flow_5 = "Praktické poznatky";
$home_reviews_eyebrow = "KOMUNITA $site_name";
$home_reviews_title = "Čo hovoria používatelia o $site_name";
$home_reviews_desc = "Od začiatočníkov s kryptomenami po skúsených obchodníkov – ľudia využívajú $site_name na lepšie porozumenie podmienok na trhu, oboznámenie sa s prehľadmi vďaka umelej inteligencii a k dosiahnutiu väčšej jasnosti pri rozhodovaní v oblasti kryptomien.";
$home_review_1_text = "Predtým, ako som objavil $site_name, bol som zasypaný množstvom informácií o kryptomenách. Každá platforma sa zdala byť zložitá a neustále som mal obavy, že urobím chybu. Čo najviac oceňujem na $site_name, je to, ako prístupne všetko pôsobí. Vhľady od AI mi pomohli pochopiť podmienky na trhu bez pocitu stratenia a platforma mi dala istotu učiť sa vlastným tempom. Som skutočne vďačný za to, aké to bolo jednoduché oproti mojim pôvodným predstavám.";
$home_review_1_tag = "Bezpečný a jednoduchý štart";
$home_review_badge = "OVERENÝ POUŽÍVATEĽ";
$home_review_2_text = "Strávil som mesiace hľadaním platforiem na kryptomeny a nikdy som nemal dostatok istoty urobiť prvý krok. $site_name túto skúsenosť úplne zmenil. Platforma zjednodušila pochopenie trhových informácií a nikdy som nemal pocit, že na používanie týchto nástrojov potrebujem roky skúseností z obchodovania. Najviac ma zaujal kompromis medzi jednoduchosťou a silnou AI analýzou. Cítim to, akoby som mal návod k dispozícii vždy, keď ho potrebujem. Som rád, že som našiel platformu, ktorá mi pomohla naučiť sa to bez pocitu preťaženia.";
$home_review_2_tag = "Jednoduchšia skúsenosť so vzdelávaním";
$home_review_3_text = "Testoval som veľa platforiem na analýzu trhu, a $site_name vyniká vďaka tomu, že vyvažuje prístupnosť s dôkladnou analytickou hĺbkou. Noví používatelia dokážu rýchlo pochopiť platformu, pričom skúsení obchodníci stále získavajú užitočné trhové signály na báze umelej inteligencie, dohľad nad rizikom a real-time inteligenciu o kryptomenách. Takáto vyváženosť je ťažko nájditeľná. Platforma dodáva zmysluplný trhový kontext bez toho, aby používateľov preťažila, čo sa len máloktorému kryptonástroju darí dosiahnuť.";
$home_review_3_tag = "Pokročilé nástroje s jednoduchým použitím";
$home_review_span_1 = "Nový používateľ kryptomien";
$home_review_span_2 = "Používateľ platformy na prvýkrát";
$home_review_span_3 = "Profesionálny obchodník s kryptomenami";
$home_review_1_avatar_alt = "Milan Kováč, používateľ $site_name";
$home_review_2_avatar_alt = "Jozef Varga, používateľ $site_name";
$home_review_3_avatar_alt = "Martin Tóth, používateľ $site_name";
$home_hero_visual_alt = "AI poháňaný panel pre trhovú analýzu na $site_name";
$home_signal_visual_alt = "Signál pre obchodovanie v reálnom čase vygenerovaný umelou inteligenciou $site_name";
$home_device_visual_alt = "Krypto analýzy zobrazené na prepojenom zariadení pomocou $site_name";
$home_security_visual_alt = "Bezpečnostný štít predstavujúci ochranu účtu na $site_name";
$home_contact_eyebrow = "ZAČNITE SO $site_name";
$home_contact_title = "Preskúmajte platformu s istotou";
$home_contact_section_title = "Preskúmajte platformu s istotou";
$home_contact_desc_1 = "Nezáleží na tom, či ste v oblasti kryptomien úplný nováčik, alebo už máte obchodné skúsenosti – $site_name ponúka prístup k prehľadom o trhu vďaka umelej inteligencii, k nástrojom na monitorovanie v reálnom čase a inteligentným analytickým údajom, ktoré sú navrhnuté na to, aby pomohli používateľom lepšie spoznať príležitosti na poli digitálnych aktív.";
$home_contact_desc_2 = "Zadajte svoje informácie pre ďalšie zistenia o platforme, zistite o dostupných funkciách a objavte, ako $site_name vám pomôže lepšie sa zorientovať na trhoch s kryptomenami vďaka pokročilým technológiám a vedenej podpore platformy.";
$home_seo_toggle = "Ďalšie informácie o AI platforme $site_name";
$home_seo_h2 = "AI platforma $site_name pre rozumnejšie rozhodovanie o kryptomenách";
$home_seo_p1 = "$site_name je platforma pre kryptomeny poháňaná umelou inteligenciou, určená pre začiatočníkov aj skúsených obchodníkov. Systém využíva kombináciu umelej inteligencie, nepretržitého monitorovania trhu a pokročilých nástrojov na analýzu, ktoré pomáhajú používateľom získať jasnejší pohľad na digitálne aktíva a odhaliť tak potenciálne príležitosti.";
$home_seo_p2 = "Zatiaľ čo mnohé tradičné platformy vyžadujú hlboké znalosti o trhoch, $site_name vznikol s cieľom zjednodušiť pochopenie aj najzložitejších informácií. Naša platforma nepretržite skúma, čo sa deje s kryptomenami, sleduje zmeny cien, nálady na trhoch, likviditu a údaje priamo z blockchainu, pričom tieto informácie prekladá do praktických postrehov.";
$home_seo_p3 = "Či už objavujete trhy s kryptomenami prvýkrát, alebo máte s obchodovaním s digitálnymi aktívami bohaté skúsenosti, $site_name vám ponúka inteligentné nástroje, ktoré vás podporia vo väčšine rozhodnutí a vedia flexibilne reagovať na meniace sa trhové podmienky v reálnom čase.";
$home_seo_h3_1 = "Dostupná analýza trhu pomocou AI";
$home_seo_h3_1_p1 = "$site_name využíva umelú inteligenciu na vyhodnotenie viacerých ukazovateľov trhu vrátane objemu obchodovania, cenových výkyvov, stavu likvidity, situácií na blockchaine a nálady investorov. Vďaka neustálemu prehodnocovaniu informácií uľahčuje používateľom lepší pohľad na aktuálny stav trhu.";
$home_seo_h3_1_p2 = "Modely umelej inteligencie sú vytvorené tak, aby flexibilne reagovali na zmeny a nespoliehali sa na pevne dané pravidlá. To umožňuje platforme rázne reagovať na zmeny trendov kryptomien a hľadať nové trhové šance.";
$home_seo_h3_1_p3 = "Zároveň, hoci je platforma prispôsobená pre pokročilých obchodníkov, je štruktúrovaná dostatočne zrozumiteľne aj pre nových používateľov hľadajúcich umelou inteligenciou poháňané informácie o trhoch, a to aj bez potreby technických odborností.";
$home_seo_h3_2 = "Trhové signály AI v reálnom čase";
$home_seo_h3_2_p1 = "$site_name neustále analyzuje dianie na trhoch s kryptomenami a poskytuje aktuálne informácie na základe zmien, ktoré sa dejú pomocou umelej inteligencie. Systém skúma vývoj dynamiky, kolísanie cien, stav likvidity a všeobecné správanie trhu s cieľom poskytnúť signály pre analýzu v reálnom čase.";
$home_seo_h3_2_p2 = "Vďaka prepracovaným analytickým modelom sa neustále sledujú hlavné digitálne aktíva ako Bitcoin, Ethereum, Solana, XRP, Avalanche a ďalšie, ktoré sú schopné rýchlo sa prispôsobiť meniacemu sa správaniu trhu.";
$home_seo_h3_2_p3 = "Zamiesto orientovania sa na jeden indikátor alebo ojedinelú metriku spája $site_name viacero zdrojov z analytického prostredia do jedného, aby bolo možné získať širší obraz trhových podmienok.";
$home_seo_h3_3 = "Inteligentné nástroje na uvedomovanie si rizík";
$home_seo_h3_3_p1 = "Kryptomeny menia svoju hodnotu rýchlo. V $site_name máme inteligentné monitorovacie mechanizmy s umelou inteligenciou, ktoré sa zameriavajú na odhalenie zvláštnych výkyvov trhu, zmien v likvidite alebo iných nových trhových hrozieb.";
$home_seo_h3_3_p2 = "S platformou si neustále obohacujete svoje povedomie o vývoji na trhu a potenciálnych hrozbách, vďaka čomu lepšie rozoznáte meniace sa situácie a môžete prijímať rozhodnutia so skutočným poznatkom o veci.";
$home_seo_h3_3_p3 = "Využitím rôznych úrovní analýzy platforma $site_name pomáha zlepšiť vašu schopnosť vnímať trh, čím vás pripravuje na zvládnutie nestálych situácií s výrazne väčšou dôverou v to, čo robíte.";
$home_seo_h3_4 = "Vytvorené pre moderné trhy s kryptomenami";
$home_seo_h3_4_p1 = "$site_name spája do jedného nástroja výhody umelej inteligencie, nepretržité sledovanie a modernú analýzu v reálnom čase, určenú priamo na moderný predaj digitálnych aktív.";
$home_seo_h3_4_p2 = "Systém ustavične hodnotí činnosť trhu, nové výdobytky blockchainu, posuny nálad a smery v likvidite tak, aby mal čo najrozsiahlejší pohľad na správanie kryptomien na trhu.";
$home_seo_h3_4_p3 = "Postupom času, ako sa vyvíjajú trhy s digitálnymi menami, umožňujú inovatívne nástroje s umelou inteligenciou lepšie a rýchlejšie narábať so zložitými situáciami na trhoch a porozumieť im. Preto bola platforma $site_name zostavená, aby to umožnila ľuďom všetkých kategórií z hľadiska záujmu o oblasť finančných trhov.";
$home_seo_side_1_label = "Poznatky AI";
$home_seo_side_1_title = "Analýza trhu, ktorej porozumiete";
$home_seo_side_1_desc = "Informácie o trhu s pomocou umelej inteligencie určené nielen pre začiatočníkov, ale aj pre pokročilých z oblasti kryptomien.";
$home_seo_side_2_label = "Monitorovanie trhu";
$home_seo_side_2_title = "Nepretržité sledovanie kryptomien v reálnom čase";
$home_seo_side_2_desc = "Sledovanie vývoja dôležitých mien a podmienok trhu počas ich zmeny v nepretržitej prevádzke.";
$home_seo_side_3_label = "Uvedomenie si rizika";
$home_seo_side_3_title = "Inteligentné rozpoznávanie hrozieb";
$home_seo_side_3_desc = "Špeciálne postupy a pomôcky v boji s rizikom navrhnuté na vyčíslenie trhových udalostí a výkyvov trhu.";
$home_seo_side_4_label = "Technológia AI";
$home_seo_side_4_title = "Prispôsobiteľné analytické modely";
$home_seo_side_4_desc = "Inteligentné riešenia využívajúce strojové učenie schopné posúdiť dáta z trhu s vyvíjajúcimi sa trhovými smermi.";
$home_faq_eyebrow = "$site_name ZNALOSTNÁ DATABÁZA";
$home_faq_title = "Časté otázky o $site_name";
$home_faq_desc = "Spoznajte bližšie platformu a zistite, pre koho bola vytvorená a na akom princípe funguje umelá inteligencia s cieľom lepšieho poznania podmienok s kryptomenami.";
$home_faq_q1 = "Musím mať s obchodovaním skúsenosti pred využitím $site_name?";
$home_faq_a1 = "Nie, $site_name je navrhnutá tak pre nováčikov v oblasti kryptomien, ako aj pre jednotlivcov s najrozličnejšími úrovňami trhovej praxe. Vďaka nástrojom umelej inteligencie na spracovávanie podrobných náhľadov a zobrazení analýz je pochopenie faktov o trhu pre každého hračkou.";
$home_faq_q2 = "Čo naozaj $site_name robí?";
$home_faq_a2 = "$site_name hodnotí činnosti spojené s výkyvmi mien pomocou umelej inteligencie počas nepretržitej prevádzky. K zobrazeniu reálnych ukazovateľov trhov analyzuje trendy sentimentu a plynulosť podmienok, údaje z blockchainov, celkovú aktivitu na trhoch a vývojové situácie v danej chvíli.";
$home_faq_q3 = "Oplatí sa používať $site_name aj skúseným obchodníkom?";
$home_faq_a3 = "Samozrejme, okrem toho, že ide o systém pre laikov, disponuje tiež komplexnou analytikou riadenou umelou inteligenciou a prehľadnými údajmi so záznamami v danom okamihu, z ktorého dokážu čerpať benefity aj dlhoroční hráči v odbore s investovaním.";
$home_faq_q4 = "Na ktoré kryptomeny sa venuje $site_name najviac?";
$home_faq_a4 = "Sústredenie je zamerané v prevažnej väčšine na preverovanie ústredných digitálnych aktív ako Bitcoin, Ethereum, Solana, XRP, Avalanche a niektoré ďalšie bežne obchodovateľné v kombinácii s aktuálnou ponukou z dostupných prostriedkov v praxi.";
$home_faq_q5 = "Z akých zdrojov sa rodia signály umelej inteligencie (AI)?";
$home_faq_a5 = "$site_name spracováva kombináciu prúdov ako oboznamovanie sa s volatilitou menových situácií, vyhodnotením zmien v náladách, sledovaním správania obchodov a prešetrenia pôvodu jednotlivých výstupov v histórii, o ktoré sa model AI následne v čase opiera z dôvodu rozoznania prípadných príležitostných vstupov počas rastúcej ceny meny.";
$home_faq_q6 = "Prispieva $site_name svojím obsahom aj do edukačnej sféry vzdelávania klientskej základe?";
$home_faq_a6 = "V záujme zachovania zistení informovanosti ohľadne správania sa v súvislostiach prislúchajúcim danému odboru sa aplikácia stará o jednoduché poznatky so začlenením spravovania prvotnej fázy vedomostného rozvoja pre tých, ktorí nevlastnia dostatočné technické vzdelanie.";
$home_cta_label = "Platforma s umelou inteligenciou (AI) je pripravená na využitie";
$home_cta_title = "Okúste využívanie $site_name naplno ešte dnes";
$home_cta_desc = "Vysnívajte si skutočné poznanie trhu plného digitálnej analýzy a informácií o situáciách ohľadne vnímania zisku a možného zlyhania, vyhotoveného prispôsobivou technológiou obsluhy od základov pre začiatočníka po profíka.";
$home_ticker_text = "Sledovanie zohľadňovania umelej inteligencie • Neustále zaznamenávanie analyzovania kryptomien • Bitcoin v pohybe narastá • Nastáva zisťovanie prienikov mien Etherea • Spoznanie voľných trhových možností príjmu • Siete zoznamujúce riziko on-line prevádzky • Spätne oboznámenie s informáciami z AI • Postavené pred začiatočníkov ale aj na trvalé využitie za účelom profesionálnej činnosti";





// ABOUT PAGE
$about_h1 = "O stránke $site_name";
$about_p1 = "$site_name je jedinečná, novo formovaná platforma s funkciami umelej inteligencie poskytujúca užitočný odrazový mostík ako návod orientovať sa v situáciách z prostredia mien s ustavične meniacim sa cyklom prežitia zohľadňujúcich ich skutočné hodnoty, čo znižuje zdržovanie spojené z trhovej orientácie k zisťovaniu údajov z prostredia investovania z kryptomien, uľahčujúca posúdenie predpovednej analýzy a inteligentných predností pri hľadaní skutočného obchodu z dostupných záznamov obohacujúcich spoznanie informácii na trhu s tržným obchodovaním.";
$about_p2 = "Fungovanie je rozprestreté celosvetovým pokrývaním predajných trás prostredníctvom odlíšiteľných platobných postupov, priamo na ktorých pôsobenie zapadá obohacovanie priepustných vrstiev do procesov príznačne vracajúcich menových systémov s dosahom nečakaných udalostí pri predaji za pomoci $site_name fungujúcej formou zaznamenania údajov, ich triedenia do meradiel presného určenia na mieste pre lepšiu stabilitu spracovania na prenechanie poznatkov na zhodnotenie užívateľskej báze.";
$about_h2_vision = "Účel platformy za zrodom prevádzky $site_name";
$about_p_vision_1 = "Značne ovplyvňujúcimi krokmi do prevádzky v odbore investícií sú moderné možnosti so zoskupením informačných postupov s orientáciou pri rozlíšeniach správania obchodu príznačne nepredvídaných pre obavy obrovského návalu, ktorý vzišiel vďaka predídeniu problémov pri modernizovaní v $site_name o nasadenie inovácií z okolia počítačovej vedy v sprievode kontrolovanej sféry modelovaných odrazov pri spracovávaní informácií.";
$about_p_vision_2 = "Perspektíva vízií na uváženie využívania v priebehu vnímania postupností v $site_name zostáva prenášať presvedčivý dohľad, zviditeľňovať informácie a chápať smerovania vo vrstvách obchodu spojených okrem hľadaného rizika i nástrah pri prechode trhovej prevádzky v sektore voľných predajov mien z prostredia internetového výmenníkového odboru spojeného s riadením peňazí predaných odoslaním prostriedkov smerom dopredu k dosiahnutiu ich ziskov na reálnych číslach z výpočtov.";
$about_h2_ai = "AI štruktúra aplikovanej prevádzky";
$about_p_ai_1 = "Primárny zdroj obsahu vo fungovaní vnútornej funkcie s názvom $site_name zastáva prekrývanie rôznych smerov prístupnosti v získavaní dátových správ prekladaných bez rozdielu k vyhodnoteniu na jednoznačnú stranu do cieľových uzlov a postupnosti ich odoslania o zaznamenanej trhovej ponuke zo zdrojových lokalít.";
$about_p_ai_2 = "Na vyhodnotenie prevádzky patria záchytné sféry obsahu spojeného s ich výskytom:";
$about_li_1 = "Aktuálne ponuky vo forme cenového posunu priamych hodnôt digitálnych mien v predaji.";
$about_li_2 = "Vystavovanie správania zadaných príkazov na sprievodné objednávky so zaznamenaním v účtovníctve zadaných príkazov na predaj, alebo obstaranie.";
$about_li_3 = "Uskutočnené predaje pre posúdenie aktivity po predložení a presune reálnej meny k odoslaniu ku klientovi z účasti pri obchode s reálnou likviditou v pohybe na vkladoch.";
$about_li_4 = "Odborná sféra o pohyboch hodnôt posudzujúcich ich správanie pri dosahovaní vrcholu počas priamej závislosti mien k danému vývoju v čase obchodu a s postupne sprievodnou odchýlkou sprostredkujúcou zisky či prehry k priamej trhovej premenlivosti aktív podľa tržnej ponuky od sprostredkovateľa obchodu v pohyboch na trhu mien.";
$about_li_5 = "Hodnotenie reálnych stavov vo vrstve v ktorej fungujú kryptomeny s údajmi pochádzajúcich k oboznámeniu na základe plných hodnotení výpočtov od predchádzajúcich období s celým prúdom o prijatí a odoslaní s prepočtami o vykonávaní sprostredkovania v činnosti prevodových záznamov pri reťazcovej technológii digitálnych výpočtových prevodov, čo pomáha v poznaní k smeru obchodovania a reálne k odoslaniu od klienta.";
$about_li_6 = "Uchovanie prehľadného zoznamu zo záznamov v čase informácií so snahou zanechať poznatky vo voľnom hľadaní mien vo voľnom zmysle trhovej premenlivosti u investoroch so zachovaným spoznaním správania nálad pred trhovými udalosťami na strane investora a pocitoch na nálade obchodu po jeho skončení na celkovom vnímaní.";
$about_li_7 = "Skúsenosti zohľadňujúce stav štátu s informáciami pri poznaní ekonomických skutočností k fungovaniu v predajných obdobiach a makroekonomických výstupoch sprevádzajúcich nákupy voči inflácií pri zachovaní stavov počas hodnotiacich periód pred pretrvávaním krízových udalostí na odpredaj zásob.";
$about_li_8 = "Správanie zastrešených investorov pôsobiacich s tržnými zámernými presunmi vo forme prechodu na väčšie objemové presuny investujúcimi podnikateľmi z odvetvia predpokladaných skutočností so vstupmi pre odovzdávanie do investovania pre dosiahnutie vysokého odrazu na spravovanie prinesúc odmenu vo väčšej kapacite v priebehu obchodu v korporátnom raste.";
$about_p_ai_3 = "Zaznamenaním zmien, ktoré sa opierajú k zachovávaniu presností so získavanými ohodnoteniami prítomných smerov sledujúcim vyhodnotenie vzťahov do $site_name z pokusov pred dosiahnutím zistení slúžiacich ku rozoznávaniu prítomností podávania a informovania o reálnom odhaľovaní možných priaznivých udalosti pri vkladoch pre záujem investície z prijatých správ k trhu s kryptomenou.";
$about_h2_risk = "Dôsledné spoznávanie nástrah zo sledovaní trhu na uváženie situácie pri zachovaní rizika obchodu";
$about_p_risk_1 = "K dosiahnutiu cieľa obchodu k odvetviu reálnej digitálnej meny sa za prísneho dodržania pokladá potreba zaobchádzania k nástrahe v uvedomovaní dôležitosti situácie do podvedomia pred podstúpením v riziku k uskutočňovaniu obchodu z vkladmi s cieľovým zámerom pre $site_name a orientáciou uplatnených stratégií od základných vedomostí k zachovaniu postupu pred obchodovaním ohodnocovaným a reálnym preukazom pred začatím nákupu peňazí o hrozbe sprevádzanú stratami i zhodnotení obchodu na prevody digitálnych investícií.";
$about_p_risk_2 = "Prehľadné zobrazenie mien pred uskutočňovaním predchádzajúcich chýb v hodnote mien ku premenám v kolísavých intervaloch v pohyboch trhu ohrozujúcim stabilitu s odosielaním s narušením likvidných záruk s udalosťami o nákupoch na tržnej podpore v postupných výmenách podliehajúcim spracovaným povoleniam s úpravami obmedzení pre reálnu stranu prístupu ku pravidlám krajiny k štátom v rámci makroekonomickej roviny môžu priniesť riziká vo výstupoch pre ohrozenie situácie s možnosťami ku prehre a záujemcovia tak nesmú stopercentne dôverovať ponukám ohľadne poznania o reálnych zdrojoch i odhadov po informácií od jediného zdroja na obchod pri samotnom konaní ku kroku odoslania príkazu vo výmennom podaní a na prenechanie rozhodnutia u informácie pre vyhodnotení s rizikom.";
$about_h2_global = "Prevádzka trhu orientujúceho digitálnych aktív prostredníctvom viacerých miest a štátov do prenosov s prevádzkou z globálnej sféry prístupu i predajov obchodného styku.";
$about_p_global_1 = "Správanie trhov odvetví pre kryptomeny zaznamenáva priebeh obchodu z plných rozmerov prevádzkovaných formou reálne predpokladaných transakcií na medzinárodnej vrstve prebiehajúc na predaji s účastníkmi obchodu z prístupových a rozdielnych územií do zúčastnenia s prihliadaním odborov pre fungovanie o vedomosti k výmenám predajov v trhových obdobiach s prevádzkovou koncepciou určenou pre fungovanie na viacerých frontoch. Postupy pre odvetvie obchodu ku prístupom z vrstvy v prevádzke $site_name spočíva v prepracovanej koncepcii k hodnoteniam pri trhoch za plnej účasti fungovania v priebehu prístupov od sledovania pre užívateľa pri spoznávaní zmien uskutočňovaných v priebehu udalostí uskutočňovaných na rôznych zúčastnených formách orientácie vo sfére obchodu spojených s menovým ekosystémom zo sektoru pre prevody z odvetvia aktív a hodnotenia peňažných náhrad s predchádzajúcim obstarávaním k obchodovaniu.";
$about_p_global_2 = "Zostavené možnosti k zohľadneniu rozsahu pri posúdeniach pre prísun zúčastnených prehľadov spracovania umožní o napomáhaniu ku zisteniu ohľadne zvyšovania sa zmien smerujúcich ku vzrastu o uvažovaní na zhodnotenie oboznamovania vo veci za presunu udalosti so zasiahnutými možnosťami v dôsledku pôsobenia podmienok pri trhoch na uskutočňujúcich formách v novovzniknutých formáciách odzrkadlených podľa informácií príznačných na obchod s tendenciami vývoja s predchodom na prispôsobovanie udalostí s určením pre prevádzkové zámery trhov.";
$about_h2_why = "Prednosti odovzdania dôvery od používateľov s prihliadnutím i orientácie v ponuke pre obsluhu k $site_name v presunoch poznania z hľadania od zistení k investícií a dôvody prevádzky k zisteniu účasti pri vklade po ich obzretiu k možnostiam vyhľadania pred podaním ohľadne využívania služieb s presnosťou zameranou na spoznanie informácií k preskúmaniu možností z investícií v prevádzkovaní služieb s poskytovaním nástrojov.";
$about_why_li_1 = "Vyvinutý systém inteligencie so zdrojmi poháňanými k posúdeniam pre potrebu sledovaní prispôsobovaním prevádzky u trhových sprostredkovaní po hodnoteniach k informáciám o pokročilejších zhodnoteniach a analýze pre správanie trhov pred rozhodovaním na trhu so silnou vrstvou spracovania na získanie vedomostí.";
$about_why_li_2 = "Prevádzka hodnotení pre informácie o zmene situácie na uskutočňujúcom dohľade o fungovaní i trhu kryptomien z presných podaní počas záznamu vo voľnom čase z priamych zistení aktuálnych udalostí pre sledovanie bez obmedzení k prevádzke o zhodnotení pre sprostredkovanie prístupu s údajmi na spravovanie po čase pre zachovanie v reálnych termínoch ku vyhodnocovaniu po sledovanom procese.";
$about_why_li_3 = "Vytvorená sféra po vzore od analytických sfér podobná štandardným zhodnoteniam od preukazných spravovaní ku analytickému podaniu infraštruktúr od investičných a obchodných skupín určených so zabezpečením pre inštitúcie k podaniam so zaznamenávaním o vedomosti pre prácu pre uskutočňovaním obchodu z prístupových riešení príznačne vracajúcim orientáciu i profesionálom a pre prenechávaní rozhodnutia ku zmenám od reálnej sféry príznačnej s podobami pred profesionálnych prevádzkovateľov systémových vrstiev do obchodu.";
$about_why_li_4 = "Účasť o presun pre prehodnocovanie do sprostredkovaných zistení so zhromažďovaním faktov s využitím z viacúrovňových trhových sledovaní pri priamom podaní so zahrnutím orientovaných údajov od posúdenia po hodnotení situácie prislúchajúc k uskutočňovaní na voľných vrstvách od trhových riešení v posúdeniach pre presnejšie možnosti so záznamom údajov do kategórií u trhovej správy informácií od zložitejších prístupov so záznamom rozdelení i preukázaných skutočností po zisťovaniach ku podaniam ohodnocujúc i samotnú sprievodnú presnosť s prihliadnutím podľa informácií s priamym cieľom ku trhovým rozhodnutiam v postupoch k analýze.";
$about_why_li_5 = "Postupy pre sprostredkovanie do prispôsobených vkladov so sledovaním o priebehoch príznačne vracajúcich hodnotení likvidít sprevádzajúc z podaní pre obsluhu hodnotení s oboznámeniami po výkyvoch do oboznámenia v trhu v rámci nestabilnej výkyvnosti po sprievodných trhových pohyboch so zohľadnením podmienok pre podania prevádzkových riešení na uskutočňovanie k presunom od zachytávaní a hľadaní informácií o rizikách sprevádzajúcich likvidných vkladových rezerv i pre priepustnosti u nestálosti na trhu menových prevodov od poskytnutí informácií za priebeh pri zisteniach k prístupovým situáciám so zápisom ku zisteniu na možnosti pri orientácií s podaním trhovej činnosti pre podstúpenia trhových obmedzení z dohľadu nad preukázateľnosťou trhu v obchode.";
$about_why_li_6 = "Správa i prispôsobovanie riešení s ponukou o prístupoch s výberom k prehodnoteniu a preskúmania so získanými vedomosťami k prispôsobivým rozhraniam do zisťovaní z prieskumov určených k obstarávaniu do vrstiev digitálnych voľných obnosov pre prevody určené na zachovanie výskumných odvetví k rozširovaniu určenému s úmernosťou k záznamom príznačne prevádzkujúc v procesoch pre zistenia s prístupmi po vyhodnocovaniach vo forme použiteľných tržných možností prispôsobených na zoznam i hľadanie digitálnych i trhových možností z prístupov od zoznamov u vyhľadávaných možností i potrieb od zhromaždených možností i potrieb pre preskúmanie ponuky od investícií so sprievodným zohľadňovaním informácií o aktívach od ponukových listín pre prístup k zohľadňovaniu na podklady k vyhľadávaniu možností na zachytenie ponuky.";
$about_why_li_7 = "Prevádzka a hodnotenia riešení k prispôsobovaniu s dodržiavaním pravidiel pre metodiku zohľadňujúcu v zameraniach pre správanie prístupových riadení i posúdení na orientácie s hodnotením prislúchajúcim hrozbám z podmienok pri zachovaniach o obozretnosti s posudzovaním príznačne spojených v hrozbách po ohodnoteniach sprevádzaných so zoznamom ku trhovým metodikám prispôsobivým v zisteniach k riziku pri podaní prislúchajúc k uvedomeniu si ohrozenia obchodu k prevodovým stratégiám v uvažovaní zo situácie a jej zachovaní pre postupy a pravidlá so zabezpečeniami o obozretných posúdeniach do zistených metodických riešení z posudzovanej vrstvy od obmedzení u zachytávania o vyhodnoteniach a ponuke so zameraním pri zisťovaní vedomostí o strate pre informovania z uvažovania od straty podľa prezenčných podaní trhovej analýzy pre uvedomenie od správy v zohľadneniach k postúpeniu o investíciách od postupoch k orientovaní o možností na podanie do spracovania podľa informácií o postúpeniu pre podania ohľadne posúdení o strate pre prístup k riziku k preukazovaniu o situácii od príznačných postupov z hrozieb.";
$about_h2_forward = "Pohľad do budúcnosti s očakávaním o vyhliadkach pre možnosti i postupy s vyvíjaním u orientovaní s budúcimi zameraniami";
$about_p_forward_1 = "Očakávania s postupom pre úspešný a vyrovnaný priebeh o dosiahnutí zoznamov príznačne určených k prehodnoteniu trhu pre rozvoj z vyvíjajúcich možností od digitálnych obnosov príznačných a prevádzkovaných ku trhovým možnostiam u aktív na vyspelosti po zmenách u premeny a vyvíjaní trhov sprevádzaného vo formách nárastu, kedy dochádza o záujmy s prevádzkou pre preukazovanie ohľadne narastajúceho preukazovania oboznamovaní ohľadne významov vo využívaní ku spracovaniam od orientovania o možnosti v prevádzkach u preukaznej vrstvy od systémov určených a postúpených s prehodnoteniami a prezenčnými odôvodneniami z analýzy určených so zabezpečujúcimi podaniami z hľadísk o pokročilosti so zoznamom a prístupových podaniach pri pokročilom posúdení z podaní o rozrastení k informáciám o riešeniach i u riešení k trhom. Udržanie pre rozvoj z posúdení i pre postup i u zameraní na zohľadnenia so záznamom i účasťou od ponuky u $site_name zastáva preukázateľnosť u vyvíjania so sprievodným ohľadom pre sledovania u vytvorených technológií k spravovaniam i možnosti na vývoj so záujmom spojeného na udržaní pred posúdeniami sprevádzajúc k získaniu postupov a prístupu o vylepšených ohodnoteniach k uvedomeniu o rozvíjaní možností i vnímania k zachytávaniu na prístupy a zhodnoteniam u udalosti so zhromaždením k zisteniu v poznaní na prevádzku trhu o preukázanie prehľadnosti s preskúmaním ohľadne podaní i informovania i na orientáciu so zhodnotením pred priehľadnosťou na obstarávaní i rozhodovaní so zámerom o zameraniach o vedomosti od preukazov pre možnosť o účasť od ponuky pre presun do ekosystému s informáciami pre digitálne spracovanie k obnosom pre vyhľadávaní u vkladových úprav k prevádzke o mene od trhov s prístupom s presnejším vyhľadávaním u rozhodnutí a informovaní o trhu v prevádzke o obchode s priepustnosťou vo forme trhovej účasti.";
$about_p_forward_2 = "Pomocou nepretržitých vylepšovaní pre zistenia z podaní a pokračujúceho zohľadnenia pre priebeh a uvážení od prebiehajúceho výskumu od posúdení z orientácie sa s prístupom na zamerania ohľadne podaní k presunu z výskumných a posudzovaných situácií o možnosti s cieľovým zámerom s preukázaním $site_name a snahou v spracovaniach pre dosiahnutie o informácie pre zohľadnenia zo zmien u možnosti prispieť na získavaní a rozvoji o preskúmaní o zabezpečeniach s inteligentnými riešeniami a informovaním i spravovaním v prístupe o možnosti u získaní a orientovaní u prispôsobených i udržaní a prístupe s presunom ohľadne dát k podaniam so zameraním na pokročilé informovania z riadenia podľa informácií o hľadaní u vyhliadok pre zmeny s preukázaním ohľadne spoznávaní k obstaraniu od budúcich situácií pre trh s možnosťami o riadenie u prevodov o analyzovanie s digitálnymi investíciami i prispôsobovaním riešení i výmenou za získané postupy k preukázaniu z investovaní i digitálnych spracovaní k ohodnoteniu so zabezpečujúcim preskúmaním o získaných zohľadnení z uváženia od vyhľadávaní za informáciami po prístupovej sféry od obnosov k možnosti v systéme od riešení od analytických prevádzok i posúdeniam i orientovaní o uvážení.";


// CONTACT PAGE
$contact_h1 = "Kontaktovať $site_name";
$contact_intro_1 = "Obráťte sa na tím spoločnosti $site_name pre odoslanie požiadaviek u podaní na prístup za zámerom ku podaniam u platformy i s ohodnotením u zoznamu od prevádzky i prístupu u preukázaní so spravovaním o informácie ohľadne otázok k možnostiam s prevádzkou od uváženia o riešeniach z infraštruktúr od podaní u vyhľadávaní s orientáciou pre zabezpečujúce ohodnotenia z obchodu o trhoch so zámerom o riešeniach k obchodovaniam u kryptomien i prístupu po vyhodnocovaniach s poháňaním v správe pre systém z uváženia o využití i ohodnotení s podaním i umelou inteligenciou so zabezpečeniami o oboznamovaní i možnosti z uváženia a zisťovaní pre vzdelávania so sledovaním u prístupu od spoznaní i ohodnotení pre prostredie so zoznamami od poznatkov i informovaní o inteligenciách v trhu u preskúmaniach pri vyhľadávaní k uváženiam za prevádzkami od obnosov k možnostiam o prístupoch s prístupom i zohľadneniami z digitálnych zistení pre výmenné možnosti o obchode k prístupovým úpravám od obstarávaní i ohodnocovaniach a pre posudzovaných a orientačných zisťovaní s ponukou po informáciách.";
$contact_intro_2 = "Bez ohľadu na zistenia so zameraním u prístupoch a oboznamovaniach i zámeroch od zistení pri preukázaní ohľadne hľadaní z úprav a orientáciách o uvažovaní z ponuky o prehľadných zisťovaniach i prispôsobení u vyhľadávaní od prieskumných a orientačných a podaní i zoznamov u možnostiach pre riešenia i obstarávaní pre presuny o získaných posúdeniach pre preskúmavania u kryptografických informovaní z prístupu k prevádzkam a vyhľadávaniu z úprav i analýz od zoznamov so spravovaním k obnosom pre prístup k automatizovaných zisteniach pre riešenia so záznamom i ohodnotením pre podania u orientáciách od infraštruktúry i riešení so sledovaním o uvažovaní z podaní za systémom i spravovaní u inštitucionálnych vyhľadávaní z posúdení so zámerom i podaní s orientáciami u vyhliadkach i posúdeniam z prístupových a signálnych ohodnocovaní s možnosťami z riešení so sledovaním a oboznamovaní od podmienok u vyhliadkach o správaní v spracovaní a prístupových informovaní za vyhodnotení s prístupových riešení u posudzovaných i prístupovým ohodnoteniam o likvidite i ponuke so zisťovaním a uváženiach o možnosti z hľadaní u obnosov a prístupu pre trhy i zhodnotení pre spoznaní od podaní pri úpravách z možností a oboznamovaní za spravovaniam i prístupu u informovaní o inteligenciách z orientovaní i posúdeniach so zoznamom a preukázaní o zisťovaniach od riešení u búrz i úprav s preskúmaniach za presunmi k prístupoch pre možnostiach od podaní s orientáciami i podaniam so spravovaním pre tím i odoslaní s prístupom pre úpravy u orientácii i záznamoch s posúdeniami pre oddelenia a prístupu od orientačných uvážení za príslušnými oddeleniami so zoznamami u odosielaní o ohodnotených i úprav i riešení na spoznanie pre prístupy u podaní.";
$contact_h2_help = "S čím vám vieme pomôcť";
$contact_li_1 = "Žiadosti o prístup k platforme";
$contact_li_2 = "Všeobecné otázky k produktu";
$contact_li_3 = "Informácie o infraštruktúre obchodovania s AI";
$contact_li_4 = "Otázky týkajúce sa trhového spravodajstva o digitálnych aktívach";
$contact_li_5 = "Otázky týkajúce sa zverejňovania rizík a dodržiavania predpisov";
$contact_li_6 = "Technická pomoc alebo pomoc s onboardingom";
$contact_h2_send = "Odoslať žiadosť";
$contact_p_send = "Vyplňte nižšie uvedený formulár a zástupca $site_name vás môže kontaktovať s ďalšími informáciami.";
$contact_h2_info = "Kontaktné informácie";
$contact_support_label = "Všeobecná podpora:";
$contact_institutional_label = "Inštitucionálne otázky:";
$contact_disclaimer = "Upozorňujeme, že $site_name neposkytuje personalizované finančné, investičné, daňové ani právne poradenstvo. Všetky informácie sú poskytované výhradne na technologické a informačné účely.";

// TERMS PAGE
$terms_h1 = "Podmienky používania";
$terms_intro_1 = "Tieto podmienky používania upravujú prístup a používanie webovej lokality $site_name, obsahu, popisov platforiem, formulárov, komunikácie a súvisiacich informačných materiálov.";
$terms_intro_2 = "Prístupom na túto webovú lokalitu používatelia potvrdzujú, že si prečítali tieto Podmienky používania, porozumeli im a súhlasia s nimi. Ak používateľ s týmito podmienkami nesúhlasí, mal by prestať používať webovú lokalitu.";
$terms_h2_informational = "Informačný účel";
$terms_p_info_1 = "$site_name poskytuje informácie o infraštruktúre obchodovania s kryptomenami poháňanej umelou inteligenciou, trhovom spravodajstve o digitálnych aktívach, monitorovaní volatility, analýze likvidity a súvisiacich technológiách.";
$terms_p_info_2 = "Obsah webových stránok je poskytovaný len na všeobecné informačné a technologické prezentačné účely. Nič na tejto webovej stránke by sa nemalo interpretovať ako finančné poradenstvo, investičné poradenstvo, právne poradenstvo, daňové poradenstvo alebo záruka obchodných výsledkov.";
$terms_h2_no_advice = "Žiadne finančné poradenstvo";
$terms_p_no_advice_1 = "$site_name neposkytuje personalizované odporúčania týkajúce sa toho, či by používatelia mali kupovať, predávať, držať, obchodovať, stakovať, prevádzať alebo inak interagovať s akoukoľvek kryptomenou, tokenom, finančným produktom alebo digitálnym aktívom.";
$terms_p_no_advice_2 = "Používatelia by mali nezávisle vyhodnotiť všetky informácie a pred prijatím finančných rozhodnutí vyhľadať radu od kvalifikovaných odborníkov.";
$terms_h2_user_responsibility = "Zodpovednosť používateľa";
$terms_p_user_1 = "Používatelia sú zodpovední za svoje vlastné rozhodnutia, hodnotenia rizík, aktivitu na účte, obchodné akcie, dodržiavanie právnych predpisov a používanie akýchkoľvek služieb tretích strán.";
$terms_p_user_2 = "Používatelia by sa mali uistiť, že aktivita s digitálnymi aktívami je v ich jurisdikcii povolená a že rozumejú všetkým príslušným rizikám pred interakciou s kryptotrhmi.";
$terms_h2_ai = "AI a analytické systémy";
$terms_p_ai_1 = "$site_name môže opisovať systémy umelej inteligencie, prediktívne modely, trhové signály, automatizovanú analytiku alebo technológie súvisiace s vykonávaním obchodov.";
$terms_p_ai_2 = "Tieto systémy sa môžu spoliehať na trhové údaje, štatistické modely, procesy strojového učenia a informačné zdroje tretích strán. Takéto systémy môžu byť nepresné, oneskorené, neúplné, nedostupné alebo nevhodné pre konkrétne ciele používateľa.";
$terms_h2_availability = "Žiadna záruka dostupnosti";
$terms_p_avail_1 = "$site_name nezaručuje neprerušovaný prístup na webovú stránku, nepretržitú dostupnosť platformy, bezchybnú prevádzku, presné trhové informácie alebo dostupnosť akejkoľvek konkrétnej funkcie.";
$terms_p_avail_2 = "Služby, obsah, stránky, formuláre, integrácie alebo popisy platforiem môžu byť kedykoľvek upravené, pozastavené alebo ukončené.";
$terms_h2_third_party = "Služby tretích strán";
$terms_p_tp_1 = "Webová stránka môže odkazovať na burzy tretích strán, miesta likvidity, poskytovateľov analytiky, komunikačné nástroje, hostingové služby alebo poskytovateľov technickej infraštruktúry.";
$terms_p_tp_2 = "$site_name nekontroluje platformy tretích strán a nezodpovedá za ich dostupnosť, poplatky, zásady, obmedzenia účtov, postupy dodržiavania predpisov, technické poruchy alebo straty používateľov.";
$terms_h2_prohibited = "Zakázané použitie";
$terms_p_prohibited = "Používatelia nesmú používať túto webovú stránku ani žiadnu súvisiacu technológiu na nezákonné, zneužívajúce, podvodné, manipulatívne alebo škodlivé účely.";
$terms_li_1 = "Pokus o neoprávnený prístup";
$terms_li_2 = "Poskytnutie nepravdivých alebo zavádzajúcich informácií";
$terms_li_3 = "Používanie webovej stránky na nezákonnú finančnú činnosť";
$terms_li_4 = "Zasahovanie do bezpečnosti alebo funkčnosti webovej stránky";
$terms_li_5 = "Kopírovanie alebo zneužitie obsahu webovej stránky bez povolenia";
$terms_li_6 = "Pokus o obídenie súladu alebo technických kontrol";
$terms_h2_ip = "Duševné vlastníctvo";
$terms_p_ip_1 = "Dizajn webovej stránky, text, budovanie značky, prvky rozhrania, grafika, štruktúra a súvisiace materiály sú vo vlastníctve alebo licencované spoločnosti $site_name, pokiaľ nie je uvedené inak.";
$terms_p_ip_2 = "Používatelia nesmú reprodukovať, distribuovať, upravovať ani komerčne využívať materiály webových stránok bez príslušného povolenia.";
$terms_h2_liability = "Obmedzenie zodpovednosti";
$terms_p_liab_1 = "V maximálnom rozsahu povolenom platnými zákonmi nebude spoločnosť $site_name zodpovedná za straty vyplývajúce z obchodovania s digitálnymi aktívami, volatility trhu, technických problémov, zlyhaní platforiem tretích strán, nepresných údajov, rozhodnutí používateľov alebo spoliehania sa na obsah webových stránok.";
$terms_p_liab_2 = "Používatelia pristupujú na túto webovú lokalitu a používajú ju na vlastné riziko.";
$terms_h2_changes = "Zmeny týchto podmienok";
$terms_p_changes_1 = "$site_name môže kedykoľvek aktualizovať tieto podmienky. Aktualizované podmienky môžu byť zverejnené na tejto stránke.";
$terms_p_changes_2 = "Pokračujúce používanie webovej stránky po zmenách znamená, že používatelia berú na vedomie a prijímajú aktualizované podmienky.";

// PRIVACY PAGE
$privacy_h1 = "Zásady ochrany osobných údajov";
$privacy_intro_1 = "$site_name rešpektuje súkromie používateľov a zaväzuje sa nakladať s osobnými údajmi zodpovedne, transparentne a bezpečne.";
$privacy_intro_2 = "Tieto Zásady ochrany osobných údajov vysvetľujú, aké informácie sa môžu zhromažďovať, keď používatelia navštívia túto webovú lokalitu, odošlú kontaktné formuláre, požiadajú o prístup alebo interagujú s obsahom $site_name a komunikáciou súvisiacou s platformou.";
$privacy_h2_collect = "Informácie, ktoré môžeme zhromažďovať";
$privacy_p_collect_1 = "$site_name môže zhromažďovať informácie dobrovoľne poskytnuté používateľmi prostredníctvom formulárov webových stránok alebo komunikačných kanálov.";
$privacy_li_fname = "Meno";
$privacy_li_lname = "Priezvisko";
$privacy_li_email = "E-mailová adresa";
$privacy_li_phone = "Telefónne číslo";
$privacy_li_inquiry = "Podrobnosti o odoslanej požiadavke";
$privacy_li_technical = "Základné technické údaje o používaní webovej stránky";
$privacy_h2_use = "Ako používame informácie";
$privacy_p_use_1 = "Informácie môžu byť použité na reakciu na požiadavky používateľov, na poskytnutie informácií o prístupe k platforme, na zlepšenie funkčnosti webovej stránky, na udržanie bezpečnosti a na komunikáciu relevantných aktualizácií o $site_name.";
$privacy_p_use_2 = "Môžeme tiež použiť agregované alebo neidentifikujúce údaje na analýzu výkonnosti webových stránok, zlepšenie štruktúry obsahu a na lepšie pochopenie toho, ako návštevníci interagujú s našimi stránkami.";
$privacy_h2_comm = "Komunikačné účely";
$privacy_p_comm_1 = "Ak používateľ odošle kontaktné informácie, $site_name môže tieto informácie použiť na odpoveď na požiadavku, poskytnutie podrobností o pripojení, objasnenie požiadaviek na prístup k platforme alebo zdieľanie relevantných servisných informácií.";
$privacy_p_comm_2 = "Používatelia môžu v prípade potreby požiadať o ukončenie komunikácie.";
$privacy_h2_cookies = "Súbory cookie a technické údaje";
$privacy_p_cookies_1 = "Táto webová lokalita môže používať súbory cookie, analytické nástroje a podobné technológie na zlepšenie zážitku z prehliadania, sledovanie výkonnosti a podporu zabezpečenia webovej lokality.";
$privacy_p_cookies_2 = "Technické údaje môžu zahŕňať typ zariadenia, typ prehliadača, operačný systém, interakcie na stránke, informácie o sprostredkovaní a všeobecné štatistiky používania.";
$privacy_h2_protection = "Opatrenia na ochranu údajov";
$privacy_p_prot_1 = "$site_name uplatňuje primerané administratívne, technické a organizačné bezpečnostné opatrenia na ochranu predložených informácií pred neoprávneným prístupom, zneužitím, stratou alebo zverejnením.";
$privacy_p_prot_2 = "Žiadny online systém však nemôže zaručiť absolútnu bezpečnosť. Používatelia by sa mali vyhnúť odosielaniu citlivých finančných informácií, súkromných kľúčov peňaženky, hesiel, prihlasovacích údajov burzy alebo podrobností o prístupe k dôvernému účtu prostredníctvom verejných formulárov webových stránok.";
$privacy_h2_third = "Poskytovatelia služieb tretích strán";
$privacy_p_third_1 = "$site_name môže využívať poskytovateľov tretích strán pre hosting, analytiku, komunikáciu, bezpečnosť, doručovanie e-mailov, spracovanie CRM alebo technickú infraštruktúru.";
$privacy_p_third_2 = "Títo poskytovatelia môžu spracovávať obmedzené informácie len v rozsahu nevyhnutnom na podporu funkčnosti webových stránok a súvisiacich služieb.";
$privacy_google_choices = 'To, ako spoločnosť Google využíva informácie z vašich návštev, môžete spravovať prostredníctvom <a href="http://www.google.com/settings/ads" target="_blank" rel="noopener">nastavení reklám Google</a>, môžete sa odhlásiť z inzerovania na základe záujmov pomocou <a href="https://tools.google.com/dlpage/gaoptout" target="_blank" rel="noopener">doplnku prehliadača na zrušenie služby Google Analytics</a>, alebo si pre ďalšie podrobnosti prečítajte <a href="https://www.google.com/intl/en/policies/privacy/" target="_blank" rel="noopener">Zásady ochrany osobných údajov spoločnosti Google</a>.';
$privacy_h2_sale = "Žiadny predaj osobných údajov";
$privacy_p_sale_1 = "$site_name nemá v úmysle predávať osobné informácie odoslané prostredníctvom tejto webovej stránky.";
$privacy_p_sale_2 = "Informácie môžu byť zdieľané len vtedy, ak je to potrebné na prevádzkové účely, dodržiavanie právnych predpisov, komunikáciu s používateľmi, predchádzanie podvodom alebo spracovanie súvisiace so službami.";
$privacy_h2_retention = "Uchovávanie údajov";
$privacy_p_retention = "Osobné údaje môžu byť uchovávané tak dlho, ako je to potrebné na zodpovedanie otázok, udržiavanie obchodných záznamov, dodržiavanie zákonných povinností, zlepšenie komunikácie platformy alebo podporu bezpečnosti a prevencie podvodov.";
$privacy_h2_rights = "Práva používateľov";
$privacy_p_rights = "V závislosti od platných zákonov môžu mať používatelia práva týkajúce sa prístupu, opravy, vymazania, námietky, obmedzenia alebo prenosnosti osobných údajov.";
$privacy_h2_intl = "Medzinárodné použitie";
$privacy_p_intl_1 = "K $site_name môžu pristupovať používatelia z rôznych jurisdikcií. Pravidlá ochrany osobných údajov sa môžu líšiť v závislosti od miesta.";
$privacy_p_intl_2 = "Používaním tejto webovej lokality používatelia berú na vedomie, že informácie môžu byť spracované v súlade s týmito Zásadami ochrany osobných údajov a platnými prevádzkovými požiadavavkami.";
$privacy_h2_policy_updates = "Aktualizácie zásad";
$privacy_p_updates_1 = "$site_name môže tieto Zásady ochrany osobných údajov pravidelne aktualizovať, aby odrážali zmeny v zákonoch, technológiách, interných postupoch alebo funkčnosti webových stránok.";
$privacy_p_updates_2 = "Pokračujúce používanie webovej stránky po aktualizáciách znamená, že používatelia berú na vedomie revidované Zásady ochrany osobných údajov.";
// COOKIES PAGE
$cookies_h1 = "Zásady používania súborov cookie";
$cookies_intro_1 = "Tieto Zásady používania súborov cookie vysvetľujú, ako $site_name využíva súbory cookie, analytické technológie a podobné nástroje na sledovanie, keď používatelia pristupujú na túto webovú lokalitu alebo s ňou interagujú.";
$cookies_intro_2 = "Súbory cookie pomáhajú zlepšiť funkčnosť webovej stránky, zlepšujú používateľskú skúsenosť, analyzujú výkon a podporujú procesy súvisiace s bezpečnosťou.";
$cookies_intro_3 = "Pokračovaním v používaní tejto webovej lokality používatelia berú na vedomie, že určité súbory cookie a súvisiace technológie sa môžu používať v súlade s týmito zásadami.";
$cookies_h2_what = "Čo sú to cookies?";
$cookies_p_what_1 = "Súbory cookie sú malé textové súbory uložené v zariadení používateľa pri návšteve webovej stránky.";
$cookies_p_what_2 = "Tieto súbory môžu obsahovať informácie, ktoré pomáhajú webovým stránkam rozpoznať vracajúcich sa návštevníkov, zapamätať si preferencie, zlepšiť navigáciu a merať výkonnosť webových stránok.";
$cookies_h2_why = "Prečo používame súbory cookie";
$cookies_p_why_1 = "$site_name môže na viaceré účely používať súbory cookie a podobné technológie.";
$cookies_li_1 = "Udržiavanie funkčnosti webových stránok";
$cookies_li_2 = "Zlepšenie používateľského zážitku";
$cookies_li_3 = "Zapamätanie si predvolieb používateľa";
$cookies_li_4 = "Pochopenie správania návštevníkov";
$cookies_li_5 = "Meranie výkonnosti webových stránok";
$cookies_li_6 = "Identifikácia technických problémov";
$cookies_li_7 = "Podpora zabezpečenia webových stránok";
$cookies_li_8 = "Zabránenie zneužitiu a nesprávnemu použitiu";
$cookies_h2_essential = "Nevyhnutné súbory cookie";
$cookies_p_ess_1 = "Pre správne fungovanie webovej stránky sú nevyhnutné určité súbory cookie.";
$cookies_p_ess_2 = "Tieto súbory cookie pomáhajú udržiavať bezpečnosť, funkcie navigácie, správu relácií a ďalšie kľúčové operácie webových stránok.";
$cookies_p_ess_3 = "Bez nevyhnutných súborov cookie nemusia časti webovej lokality fungovať správne.";
$cookies_h2_analytics = "Analytické súbory cookie";
$cookies_p_an_1 = "Analytické súbory cookie nám pomáhajú pochopiť, ako návštevníci interagujú s obsahom webových stránok.";
$cookies_p_an_2 = "Tieto technológie môžu zhromažďovať informácie týkajúce sa návštev stránok, navigačných vzorov, typov zariadení, konfigurácií prehliadača a všeobecných metrík používania webových stránok.";
$cookies_p_an_3 = "Analytické informácie sa zvyčajne agregujú a používajú sa na zlepšenie výkonu webových stránok a používateľskej skúsenosti.";
$cookies_h2_functional = "Funkčné súbory cookie";
$cookies_p_fun_1 = "Na zapamätanie nastavení a preferencií vybraných používateľmi sa môžu použiť funkčné súbory cookie.";
$cookies_p_fun_2 = "Príklady môžu zahŕňať predvoľby jazyka, nastavenia rozhrania, možnosti zobrazenia alebo iné funkcie prispôsobenia.";
$cookies_h2_third = "Technológie tretích strán";
$cookies_p_third_1 = "$site_name môže využívať poskytovateľov služieb tretích strán, analytické platformy, reklamné technológie alebo nástroje na monitorovanie výkonu.";
$cookies_p_third_2 = "Tieto tretie strany môžu umiestniť svoje vlastné súbory cookie alebo sledovacie technológie, ktoré podliehajú ich individuálnym zásadám ochrany osobných údajov.";
$cookies_p_third_3 = "$site_name nemá kontrolu nad postupmi tretích strán v oblasti súborov cookie a v prípade potreby odporúča prečítať si dokumentáciu ochrany osobných údajov externých poskytovateľov.";
$cookies_h2_manage = "Správa súborov cookie";
$cookies_p_manage_1 = "Väčšina moderných prehliadačov umožňuje používateľom spravovať, obmedzovať alebo mazať súbory cookie prostredníctvom nastavení prehliadača.";
$cookies_p_manage_2 = "Používatelia sa môžu rozhodnúť úplne zakázať súbory cookie, hoci niektoré funkcie webovej stránky potom nemusia fungovať tak, ako by mali.";
$cookies_p_manage_3 = "Nastavenia prehliadača zvyčajne poskytujú možnosti na:";
$cookies_li_manage_1 = "Zablokovanie všetkých súborov cookie";
$cookies_li_manage_2 = "Vymazanie existujúcich súborov cookie";
$cookies_li_manage_3 = "Prijímanie upozornení na súbory cookie";
$cookies_li_manage_4 = "Obmedzenie konkrétnych kategórií súborov cookie";
$cookies_h2_data = "Ochrana údajov";
$cookies_p_data = "Informácie súvisiace s cookies môžu byť spracované v súlade s našimi Zásadami ochrany osobných údajov a platnými zákonmi na ochranu údajov.";
$cookies_h2_policy_updates = "Aktualizácie zásad";
$cookies_p_updates_1 = "$site_name môže tieto Zásady používania súborov cookie pravidelne aktualizovať, aby odrážali technologické zmeny, právne požiadavky alebo prevádzkové vylepšenia.";
$cookies_p_updates_2 = "Pokračujúce používanie webovej stránky po aktualizáciách predstavuje potvrdenie revidovaných zásad.";
// AML PAGE
$aml_h1 = "Zásady AML (proti praniu špinavých peňazí)";
$aml_intro_1 = "$site_name uznáva dôležitosť informovanosti o boji proti praniu špinavých peňazí, finančnej integrity a zodpovednej účasti na trhoch s digitálnymi aktívami.";
$aml_intro_2 = "Tieto Zásady AML vysvetľujú všeobecné zásady, ktoré spoločnosť $site_name uplatňuje na zabránenie nezákonnému používaniu technológií súvisiacich s kryptomenami, podozrivej finančnej aktivite, podvodom, vyhýbaniu sa sankciám, financovaniu terorizmu a inému zakázanému správaniu.";
$aml_h2_purpose = "Účel týchto zásad";
$aml_p_purpose_1 = "Účelom týchto zásad je vytvoriť zodpovedný rámec pre to, ako $site_name pristupuje k povedomiu o boji proti praniu špinavých peňazí v rámci ekosystému digitálnych aktív.";
$aml_p_purpose_2 = "Trhy s kryptomenami môžu zahŕňať cezhraničnú aktivitu, decentralizovanú infraštruktúru, burzy tretích strán a systémy externých peňaženiek. Z tohto dôvodu by používatelia mali pochopiť, že povinnosti dodržiavať predpisy sa môžu líšiť v závislosti od ich jurisdikcie, typu účtu, poskytovateľa burzy a miestneho regulačného prostredia.";
$aml_h2_responsible = "Zodpovedné používanie technológie digitálnych aktív";
$aml_p_resp_1 = "Od používateľov sa očakáva, že budú interagovať s webom $site_name a akýmikoľvek súvisiacimi službami digitálnych aktív zodpovedne, zákonne a v súlade s platnými pravidlami.";
$aml_p_resp_2 = "$site_name nepodporuje ani nepodporuje používanie kryptotrhov, obchodných systémov, automatizovaných technológií alebo analytických nástrojov na nezákonné účely.";
$aml_li_1 = "Pranie špinavých peňazí";
$aml_li_2 = "Financovanie terorizmu";
$aml_li_3 = "Podvod alebo finančný klam";
$aml_li_4 = "Obchádzanie sankcií";
$aml_li_5 = "Manipulácia s trhom";
$aml_li_6 = "Používanie ukradnutých prostriedkov alebo kompromitovaných účtov";
$aml_li_7 = "Akákoľvek činnosť zakázaná platnými zákonmi";
$aml_h2_exchange = "Dodržiavanie burzy tretích strán";
$aml_p_ex_1 = "$site_name môže odkazovať na, interagovať s analytickou infraštruktúrou tretej strany v oblasti digitálnych aktív alebo miest s likviditou, alebo ich môže poskytovať.";
$aml_p_ex_2 = "Burzy, správcovia, spracovatelia platieb a poskytovatelia služieb tretích strán môžu uplatňovať svoje vlastné postupy dodržiavania predpisov vrátane overovania totožnosti, monitorovania transakcií, detekčného preverovania sankcií, obmedzení účtov, kontrol zdroja finančných prostriedkov alebo dodatočných požiadaviek na overenie.";
$aml_h2_user_responsibility = "Zodpovednosť používateľa";
$aml_p_user_1 = "Používatelia sú zodpovední za to, aby ich činnosť bola v ich lokalite v súlade so zákonom a bola v súlade s akýmikoľvek záväzkami uloženými príslušnými regulačnými orgánmi, burzami, finančnými inštitúciami alebo poskytovateľmi služieb.";
$aml_p_user_2 = "Používatelia by sa nemali pokúšať skrývať vlastníctvo, maskovať pôvod transakcií, poskytovať nepravdivé informácie, obchádzať procesy overovania alebo využívať infraštruktúru digitálnych aktív spôsobom, ktorý by sa mohol považovať za podozrivý alebo nezákonný.";
$aml_h2_suspicious = "Podozrivá aktivita";
$aml_p_suspicious = "Podozrivá aktivita môže zahŕňať správanie, ktoré sa zdá byť v rozpore s bežným používaním, pokusy o zneužitie obchodných systémov, opakované predkladanie zavádzajúcich informácií, zapojenie do zakázaných jurisdikcií alebo činnosť spojenú s podvodom, nelegálnymi prostriedkami alebo zakázanými službami.";
$aml_h2_evasion = "Žiadne vyhýbanie sa alebo obchádzanie";
$aml_p_evasion = "Používatelia sa nesmú pokúšať obchádzať kontroly dodržiavania pravidiel, technické obmedzenia, systémy overovania totožnosti, geografické obmedzenia alebo procesy monitorovania rizík.";
$aml_h2_policy_updates = "Aktualizácie zásad";
$aml_p_updates_1 = "$site_name môže z času na čas aktualizovať tieto Zásady AML, aby odrážali zmeny v regulačných očakávaniach, trhových štandardoch, interných postupoch alebo postupoch v odvetví digitálnych aktív.";
$aml_p_updates_2 = "Pokračujúce používanie webovej stránky po aktualizáciách znamená, že používatelia berú na vedomie revidované pravidlá.";
// RISK PAGE
$risk_h1 = "Zverejnenie rizík";
$risk_intro_1 = "Obchodovanie s kryptomenami a participácia na digitálnych aktívach zahŕňajú značné riziko. Ceny sa môžu rýchlo meniť, likvidita sa môže nečakane zmeniť a trhové podmienky sa môžu v krátkom čase stať vysoko nestabilnými.";
$risk_intro_2 = "Toto Zverejnenie rizík vysvetľuje dôležité úvahy, ktoré by si mali používatelia preštudovať pred interakciou s trhmi digitálnych aktív, automatizovanými obchodnými technológiami, trhovými signálmi generovanými umelou inteligenciou alebo analytickou infraštruktúrou súvisiacou s kryptomenami.";
$risk_h2_no_guarantee = "Žiadne zaručené výsledky";
$risk_p_no_guarantee_1 = "$site_name nezaručuje zisky, návratnosť investícií, úspech v obchodovaní, presnosť signálov, neprerušovaný prístup alebo pozitívne finančné výsledky.";
$risk_p_no_guarantee_2 = "Akékoľvek príklady, štatistiky, prvky rozhrania, výkonnostné metriky, indikátory signálov alebo trhové simulácie zobrazené na tejto webovej lokalite slúžia len na informačné a ilustračné účely.";
$risk_h2_volatility = "Volatilita kryptomenového trhu";
$risk_p_vol_1 = "Trhy s digitálnymi aktívami sú vysoko nestabilné. Ceny môžu byť ovplyvnené nedostatkom likvidity, makroekonomickými správami, regulačným vývojom, výpadkami búrz, udalosťami blockchainu, sentimentom investorov, aktivitou pákového efektu alebo manipuláciou s trhom.";
$risk_p_vol_2 = "Volatilita môže viesť k rýchlym stratám, náhlym cenovým medzerám, sklzom, likvidačným udalostiam alebo nemožnosti realizovať transakcie za očakávané ceny.";
$risk_h2_ai = "Obmedzenia signálov AI";
$risk_p_ai_1 = "Systémy umelej inteligencie môžu analyzovať veľké množstvo trhových údajov, no nedokážu eliminovať neistotu.";
$risk_p_ai_2 = "Ukazovatele na báze umelej inteligencie, obchodné signály, klasifikácie trhu a prediktívne modely môžu byť neúplné, oneskorené, nesprávne alebo nevhodné pre osobnú finančnú situáciu používateľa.";
$risk_p_ai_3 = "Používatelia by sa pri obchodovaní, investovaní alebo finančných rozhodnutiach nemali spoliehať výlučne na žiadny signál AI.";
$risk_h2_tech = "Riziko v súvislosti s technológiami a spravovaním obchodu";
$risk_p_tech_1 = "Obchodná technológia môže byť ovplyvnená problémami s pripojením na internet, prerušením servera, latenciou, chybami softvéru, zlyhaním rozhrania API, prestojmi na burze, nesprávnymi dátovými kanálmi alebo obmedzeniami infraštruktúry tretích strán.";
$risk_p_tech_2 = "$site_name nezaručuje neprerušovaný prístup k dátam, signálom, funkciám platformy, systémom tretích strán alebo prostrediam vykonávania obchodov.";
$risk_h2_liquidity = "Riziko likvidity a burzy";
$risk_p_liq_1 = "Likvidita sa môže na rôznych burzách a digitálnych aktívach výrazne líšiť. Na niektorých trhoch môže dôjsť k nízkej hĺbke knihy objednávok, veľkým spreadom, oneskorenému vykonávaniu obchodu alebo k prudkému pohybu cien počas obdobia napätia.";
$risk_p_liq_2 = "Burzy tretích strán môžu ukladať poplatky, limity, obmedzenia, kontroly účtov, zdržania výberov, pozastavenie obchodovania alebo geografické obmedzenia.";
$risk_h2_regulatory = "Regulačné riziko";
$risk_p_reg_1 = "Predpisy týkajúce sa digitálnych aktív sa môžu rýchlo meniť a môžu sa líšiť v rôznych krajinách, regiónoch a jurisdikciách.";
$risk_p_reg_2 = "Regulačné zmeny môžu ovplyvniť prístup na trh, dostupnosť aktív, operácie na burze, oznamovacie povinnosti, dane, obchodné obmedzenia alebo funkčnosť platformy.";
$risk_h2_user_responsibility = "Zodpovednosť používateľa";
$risk_p_user_1 = "Používatelia sú výhradne zodpovední za hodnotenie rizík, pochopenie platných zákonov, preskúmanie svojich finančných okolností a nezávislé rozhodovanie.";
$risk_p_user_2 = "$site_name neposkytuje personalizované finančné, investičné, právne, účtovné ani daňové poradenstvo.";
$risk_h2_advice = "Vyhľadajte odbornú pomoc";
$risk_p_advice_1 = "Používatelia by sa mali poradiť s kvalifikovanými odborníkmi predtým, ako urobia významné finančné rozhodnutia týkajúce sa kryptomien, obchodných systémov, automatizovaných technológií alebo investícií do digitálnych aktív.";
$risk_p_advice_2 = "Používaním tejto webovej lokality používatelia berú na vedomie, že rozumejú rizikám spojeným s trhmi digitálnych aktív a prijímajú zodpovednosť za svoje vlastné rozhodnutia.";
// EXCHANGES PAGE
$exchanges_h1 = "Podporované burzy";
$exchanges_intro_1 = "$site_name je navrhnutý na základe prístupu trhovej inteligencie pre viaceré trhy, ktorý vyhodnocuje aktivitu digitálnych aktív v širokej škále prostredí na obchodovanie s kryptomenami.";
$exchanges_intro_2 = "Moderné kryptotrhy fungujú prostredníctvom mnohých búrz, poskytovateľov likvidity, derivátových miest a obchodných ekosystémov. Pochopenie aktivity v týchto prostrediach je nevyhnutné na budovanie komplexného trhového spravodajstva.";
$exchanges_h2_philosophy = "Filozofia pokrytia trhu";
$exchanges_p_phil_1 = "Namiesto spoliehania sa na jediné miesto je $site_name postavená na koncepte celotrhovej analýzy.";
$exchanges_p_phil_2 = "Cena kryptomien, podmienky likvidity, správanie volatility a inštitucionálna aktivita sa medzi burzami často líšia. Pozorovaním širších trhových podmienok môžu analytické modely získať dodatočný kontext týkajúci sa vznikajúcich trendov a potenciálnych anomálií.";
$exchanges_h2_spot = "Sledovanie spotového trhu";
$exchanges_p_spot_1 = "Spotové burzy predstavujú významnú časť globálnej aktivity v oblasti digitálnych aktív.";
$exchanges_p_spot_2 = "Systémy trhového spravodajstva môžu vyhodnocovať údaje na spotovom trhu, vrátane:";
$exchanges_li_spot_1 = "Cenová aktivita";
$exchanges_li_spot_2 = "Hĺbka likvidity";
$exchanges_li_spot_3 = "Štruktúra knihy objednávok";
$exchanges_li_spot_4 = "Objem obchodu";
$exchanges_li_spot_5 = "Správanie Bid-ask spreadu";
$exchanges_li_spot_6 = "Podmienky nerovnováhy trhu";
$exchanges_h2_deriv = "Trhy derivátov";
$exchanges_p_deriv_1 = "Kryptomenové deriváty zohrávajú čoraz dôležitejšiu úlohu v rámci širšieho ekosystému digitálnych aktív.";
$exchanges_p_deriv_2 = "Futures, perpetuálne kontrakty, opcie a obchodovanie s pákovým efektom môžu ovplyvniť náladu na trhu, podmienky volatility a smerovú dynamiku.";
$exchanges_p_deriv_3 = "Analytická infraštruktúra môže pri hodnotení širších trhových podmienok vyhodnocovať informácie súvisiace s derivátmi.";
$exchanges_h2_liquidity = "Analýza likvidity";
$exchanges_p_liq_1 = "Likvidita zostáva jedným z najdôležitejších faktorov ovplyvňujúcich stabilitu trhu a kvalitu vykonávania obchodu.";
$exchanges_p_liq_2 = "$site_name môže analyzovať podmienky likvidity na viacerých miestach obchodovania s cieľom identifikovať:";
$exchanges_li_liq_1 = "Koncentrácia likvidity";
$exchanges_li_liq_2 = "Náhle stiahnutia likvidity";
$exchanges_li_liq_3 = "Tlak knihy objednávok";
$exchanges_li_liq_4 = "Udalosti nerovnováhy trhu";
$exchanges_li_liq_5 = "Nenormálne obchodné správanie";
$exchanges_h2_availability = "Dostupnosť burzy";
$exchanges_p_avail_1 = "Dostupnosť na burze sa môže líšiť v závislosti od geografickej polohy, jurisdikcie, oprávnenosti účtu, regulačných požiadaviek a technických obmedzení.";
$exchanges_p_avail_2 = "Niektoré burzy alebo služby nemusia byť dostupné pre všetkých používateľov a môžu ukladať svoje vlastné obmedzenia, požiadavky na overenie, poplatky a prevádzkové zásady.";
$exchanges_h2_third = "Platformy tretích strán";
$exchanges_p_third_1 = "Akékoľvek odkazy na burzy, miesta s likviditou, maklérov, depozitárov alebo poskytovateľov trhu slúžia výlučne na informačné účely.";
$exchanges_p_third_2 = "$site_name nevlastní, neprevádzkuje, nekontroluje ani nezaručuje služby tretích strán na burze.";
$exchanges_p_third_3 = "Používatelia zostávajú zodpovední za zhodnotenie akejkoľvek burzy, miesta obchodovania alebo služby digitálnych aktív pred ich použitím.";
$exchanges_h2_monitoring = "Nepretržité monitorovanie trhu";
$exchanges_p_mon_1 = "Trhy s kryptomenami fungujú nepretržite, často dvadsaťštyri hodín denne, sedem dní v týždni.";
$exchanges_p_mon_2 = "Keď sa štruktúra trhu vyvíja, objavujú sa nové burzy, likvidita migruuje a obchodná aktivita sa mení.";
$exchanges_p_mon_3 = "$site_name sa neustále snaží udržiavať si povedomie o meniacich sa podmienkach na trhu prostredníctvom širokého analytického pokrytia ekosystému digitálnych aktív.";

// ==========================================
// RISK WARNING PAGE
// ==========================================
$page_title_risk_warning = "Upozornenie na riziká | $site_name";
$page_description_risk_warning = "Pochopte riziká automatizovaného obchodovania s kryptomenami pomocou $site_name, vrátane volatility trhu, rizika pri obchodovaní a regulačných aspektov.";
$risk_warning_breadcrumb_name = "Upozornenie na riziká";
$risk_warning_title = "Upozornenie na riziká";
$risk_warning_intro = "Pochopenie rizík je prvým krokom k sebavedomému obchodovaniu.";

$risk_warning_ai_heading = "Ako náš AI systém pomáha riadiť riziká:";
$risk_warning_ai_1 = "<strong>Algoritmická efektivita a obchodovanie bez emócií:</strong> Pokročilé algoritmy analyzujú trhové signály a vykonávajú obchody objektívne v optimálnych momentoch.";
$risk_warning_ai_2 = "<strong>Stratégie založené na údajoch:</strong> Stratégie sú založené skôr na overených trhových vzorcoch a analýze v reálnom čase než na dohadoch.";
$risk_warning_ai_3 = "<strong>Flexibilné nastavenia a úplná kontrola:</strong> Kedykoľvek môžete upraviť svoje parametre rizika. Sledujte všetky zostatky a obchody transparentne na svojom riadiacom paneli bez skrytých poplatkov a výberov bez obmedzení.";

$risk_warning_disclaimer = "<strong>Vyhlásenie o odmietnutí zodpovednosti:</strong> Obchodovanie vždy nesie riziko. Automatizované systémy (vrátane AI) nezaručujú zisk, môžu zlyhať v dôsledku softvérových chýb alebo neočakávaných udalostí na trhu a vyžadujú monitorovanie používateľom. Minulá výkonnosť nie je indikátorom budúcich výsledkov. Táto platforma slúži čisto na informačné a marketingové účely a neposkytuje finančné poradenstvo.";

$risk_warning_s1_heading = "1. Všeobecné riziká a riziká trhu s kryptomenami";
$risk_warning_s1_intro = "Kryptomeny sú vysoko volatilné špekulatívne aktíva, ktoré fungujú nepretržite 24 hodín denne, 7 dní v týždni s minimálnym regulačným dohľadom vo väčšine jurisdikcií.";
$risk_warning_s1_1 = "Hodnoty môžu v krátkom čase dramaticky kolísať, čo môže viesť k úplnej strate investovaného kapitálu.";
$risk_warning_s1_2 = "Trhové hodnoty môžu byť výrazne ovplyvnené regulačnými aktualizáciami, technickým vývojom, narušeniami bezpečnosti alebo širšími makroekonomickými udalosťami.";
$risk_warning_s1_3 = "Niektoré aktíva môžu úplne stratiť všetku svoju hodnotu. Investujte len také prostriedky, o ktoré si môžete dovoliť prísť.";

$risk_warning_s2_heading = "2. Vykonanie obchodu, likvidita a riziká spojené s pákou";
$risk_warning_s2_1 = "<strong>Volatilita a likvidita na trhu:</strong> Extrémne cenové pohyby (10 – 20 % a viac denne) alebo nízka likvidita (najmä pri menších minciach) môžu viesť k oneskoreniam, výpadkom platformy a k závažným oneskoreniam (tzv. sklzom). Príkazy stop-loss nemôžu zaručiť obmedzenia strát v extrémnych podmienkach.";
$risk_warning_s2_2 = "<strong>Pákový efekt a riziká marže:</strong> Produkty využívajúce pákový efekt zväčšujú zisky aj straty, čo znamená, že môžete stratiť viac ako je váš počiatočný vklad. Približne 70 – 80 % účtov retailových investorov prichádza o peniaze pri obchodovaní s produktmi s pákovým efektom.";

$risk_warning_s3_heading = "3. Technické problémy, kybernetická bezpečnosť a riziká tretích strán";
$risk_warning_s3_1 = "<strong>Technické faktory:</strong> Online obchodovanie vo svojej podstate zahŕňa riziká odpojenia internetu, chýb hardvéru/softvéru a nedostupnosti služieb.";
$risk_warning_s3_2 = "<strong>Kybernetická bezpečnosť:</strong> Účty kryptomien sú častými cieľmi phishingu, malvéru a hackerov. Transakcie sú nezvratné; prezradenie vašich poverení môže mať za následok trvalú stratu.";
$risk_warning_s3_3 = "<strong>Platformy tretích strán:</strong> Táto webová stránka môže spájať používateľov s platformami tretích strán. Nekontrolujeme, neschvaľujeme ani neručíme za ich bezpečnosť, fungovanie alebo solventnosť. Pred vložením finančných prostriedkov na externé platformy vždy vykonajte vlastnú hĺbkovú previerku.";

$risk_warning_s4_heading = "4. Regulačné, daňové a záverečné ustanovenia";
$risk_warning_s4_1 = "<strong>Súlad s právnymi predpismi a dane:</strong> Regulačné rámce sa značne líšia a rýchlo sa menia. Používatelia sú výhradne zodpovední za zabezpečenie toho, že ich obchodná činnosť je v súlade s miestnymi zákonmi, ako aj za plnenie vlastných daňových povinností.";
$risk_warning_s4_2 = "<strong>Žiadne záruky zisku:</strong> Neexistuje žiadne „bezpečné“ obchodovanie s kryptomenami, alebo obchodovanie bez rizika. Akékoľvek údaje o výnosoch alebo príklady výkonnosti sú čisto hypotetické.";
$risk_warning_s4_3 = "<strong>Vhodnosť:</strong> Ak plne nerozumiete rizikám, spoliehate sa na nevyhnutné finančné prostriedky, alebo obchodujete s požičanými peniazmi, obchodovanie s kryptomenami pre vás nie je vhodné. V prípade neistoty sa obráťte na nezávislého licencovaného finančného poradcu.";

$risk_warning_contact = "<strong>Kontakt:</strong> V prípade akýchkoľvek otázok týkajúcich sa tohto vyhlásenia alebo odoslania žiadosti, obráťte sa, prosím, na náš oficiálny tím zákazníckej podpory prostredníctvom kontaktného formulára na našej webovej stránke.";
$footer_risk_warning = "Upozornenie na riziká";

$lang_loaded = true;

?>
