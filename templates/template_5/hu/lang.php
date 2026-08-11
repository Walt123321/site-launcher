<?php
require __DIR__ . '/../lang.php';

// Identity / config variables are intentionally NOT overridden here — they are inherited
// as-is from the root lang.php so brand/pricing swaps still work correctly at deploy time:
// $site_name, $site_url, $site_domain, $app_price, $app_currency, $rating_value,
// $rating_count, $review_count, $country_name, $support_email, $institutional_email.

$site_lang = 'hu-HU';
$form_language = 'hu';

// Reviews
$review_1_author = "Magánbefektető";
$review_2_author = "Független kereskedő";
$review_3_author = "Digitális eszköz kereskedő";
$review_4_author = "Passzív jövedelmet kereső";

// META TITLE / DESCRIPTION (per page)
$home_meta_title = "$site_name — Hivatalos weboldal | Kereskedési platform";
$home_meta_description = "$site_name ⭐ — intelligens mesterséges intelligencia kereskedési platform valós idejű piacelemzéshez és világos kereskedési jelzésekhez ⚡ Próbáld ki az intelligens eszközöket vezetett bemutatóval.";

$quiz_consultant_name = 'Mia';
$quiz_consultant_role = 'Beüzemelési asszisztens';

$quiz_text_welcome   = "Üdvözlöm! Itt $quiz_consultant_name, a személyes beüzemelési asszisztense a $site_name-nál. Nagyszerű hír! A hozzáférését hivatalosan előzetesen jóváhagyták. Engedje meg, hogy most beállítsuk professzionális profilját!";
$quiz_text_q1 = "A teljes szabályozási és jogi megfelelés biztosítása érdekében kérjük, erősítse meg jelenlegi lakóhelyének országát: $country_name";
$quiz_text_a1_yes    = "Igen, ez a jelenlegi lakóhelyem";
$quiz_text_a1_no     = "Nem";

$quiz_text_q2 = "Tökéletes. Kérjük, válassza ki a megfelelő korkategóriát, hogy megtaláljuk a legmegfelelőbb pénzügyi eszközöket:";

$quiz_text_q3        = "Rendelkezik aktív bankszámlával vagy hitelkártyával a rendszeres napi osztalékfizetések fogadásához?";
$quiz_text_a3_yes    = "Igen, aktív számla áll rendelkezésre";
$quiz_text_a3_no     = "Még nem áll rendelkezésre";

$quiz_text_q4        = "Kérjük, adja meg személyes jövedelmének elsődleges forrását. (Ez a paraméter segít testreszabni a rendszer kockázatkezelési beállításait).";
$quiz_text_a4_1      = "Hivatalos munkaviszony / önfoglalkoztatás";
$quiz_text_a4_2      = "Passzív jövedelem / személyes megtakarítás";
$quiz_text_a4_3      = "Egyéb források";

$quiz_text_q5 = "Nagyszerű! Az utolsó lépés egy rövid telefonos ellenőrzés a menedzserünktől a regisztrációja megerősítésére. A hívásokat 11:00 és 20:00 között bonyolítjuk. Tudja fogadni a hívást?";
$quiz_text_a5_yes    = "Igen, ez az időpont megfelelő a hívásra";
$quiz_text_a5_no     = "Kérjük, azonnal indítsa el a hívást";

$quiz_text_loader    = "Elemezzük a kért lehetőségeket és inicializáljuk a biztonságos fiókkonfigurációs paramétereket...";
$quiz_text_final_ttl = "A fiók sikeresen jóváhagyva! 🎉 A biztonságos digitális munkaterülete teljesen konfigurálva van. Kérjük, fejezze be az alábbi végső ellenőrzési lépéseket a napi kifizetések garantálásához:";

$quiz_placeholder_fname = "Keresztnév";
$quiz_placeholder_lname = "Vezetéknév";
$quiz_placeholder_email = "E-mail cím";
$quiz_placeholder_phone = "Telefonszám";
$quiz_btn_submit = "Kereskedés aktiválása";
$quiz_text_typing       = "üzenetet ír...";
$quiz_text_processing   = "Kérés feldolgozása...";


$about_meta_title = "A $site_name-ról | Mesterséges intelligencia alapú kriptokereskedési infrastruktúra";
$about_meta_description = "Tudjon meg többet a $site_name-ról, a fejlett mesterséges intelligencia alapú kriptokereskedési infrastruktúráról, amely a prediktív elemzésre, piaci intelligenciára, volatilitás-figyelésre és digitális eszközök kutatására összpontosít.";

$contact_meta_title = "Kapcsolat $site_name | Kérjen hozzáférést a mesterséges intelligencia platformhoz";
$contact_meta_description = "Vegye fel a kapcsolatot a $site_name-mal hozzáférés kéréséhez, kérdéseket tehet fel a mesterséges intelligencia alapú kriptokereskedési infrastruktúráról, a támogatott piacokról, a digitális eszközök intelligenciájáról vagy a platform beüzemeléséről.";

$terms_meta_title = "Felhasználási feltételek | $site_name weboldal és platform feltételei";
$terms_meta_description = "Olvassa el a $site_name felhasználási feltételeit, amelyek a weboldal használatára, az informatív tartalomra, a mesterséges intelligencia kereskedési infrastruktúrára, a felhasználói felelősségre, a harmadik felek szolgáltatásaira és a kockázati korlátozásokra vonatkoznak.";

$privacy_meta_title = "Adatvédelmi irányelvek | $site_name adatvédelem és felhasználói magánélet";
$privacy_meta_description = "Olvassa el a $site_name adatvédelmi irányelveit, hogy megértse, hogyan gyűjtjük, használjuk, védjük, tároljuk és kezeljük a mesterséges intelligencia alapú kriptokereskedési infrastruktúránk weboldalán keresztül benyújtott személyes adatokat.";

$cookies_meta_title = "Cookie-szabályzat | $site_name weboldal cookie-k és nyomon követés";
$cookies_meta_description = "Tudja meg, hogyan használja a $site_name a cookie-kat, az elemzési technológiákat, a teljesítménykövető eszközöket és a weboldal funkcionalitási szolgáltatásait a felhasználói élmény és a platform teljesítményének javítása érdekében.";

$aml_meta_title = "AML-szabályzat | $site_name pénzmosás elleni szabványok";
$aml_meta_description = "Tekintse át a $site_name AML-szabályzatát, beleértve a digitális eszközök felelős használatát, a pénzmosás elleni tudatosságot, a tiltott tevékenységeket, a monitorozási elveket és a megfelelőségi elvárásokat.";

$risk_meta_title = "Kockázati nyilatkozat | $site_name kriptokereskedési kockázati nyilatkozat";
$risk_meta_description = "Tekintse át a $site_name kockázati nyilatkozatát, hogy megértse a kriptovaluta volatilitását, a kereskedési bizonytalanságot, a mesterséges intelligencia jelzéseinek korlátait, a piaci kockázatot, a likviditási kockázatot és a felhasználói felelősséget.";

$exchanges_meta_title = "Támogatott tőzsdék | $site_name piaci intelligencia lefedettsége";
$exchanges_meta_description = "Fedezze fel a kriptovaluta tőzsdék, likviditási helyszínek és digitális eszközpiacok típusait, amelyeket a $site_name mesterséges intelligencia alapú piaci intelligencia infrastruktúrája figyel.";


$about_breadcrumb_name = "A $site_name-ról";
$contact_breadcrumb_name = "Kapcsolat $site_name";
$terms_breadcrumb_name = "Felhasználási feltételek";
$privacy_breadcrumb_name = "Adatvédelmi irányelvek";
$cookies_breadcrumb_name = "Cookie-szabályzat";
$aml_breadcrumb_name = "AML-szabályzat";
$risk_breadcrumb_name = "Kockázati nyilatkozat";
$exchanges_breadcrumb_name = "Támogatott tőzsdék";

$hero_text = "Tapasztalja meg a kereskedés új korszakát fejlett kriptokereskedési platformunkkal. A $site_name mesterséges intelligencia technológiájával optimalizálhatja hozamait és megalapozott befektetési döntéseket hozhat.";


// HEADER / NAV / FOOTER
$logo_subtitle = "Mesterséges intelligencia kereskedési infrastruktúra";
$nav_signals = "Jelzések";
$nav_reviews = "Vélemények";
$nav_about = "Rólunk";
$nav_exchanges = "Tőzsdék";
$nav_exchanges_full = "Támogatott tőzsdék";
$nav_risk = "Kockázat";
$nav_risk_full = "Kockázati nyilatkozat";
$nav_faq = "GYIK";
$nav_privacy = "Adatvédelmi irányelvek";
$nav_terms = "Felhasználási feltételek";
$nav_cookies = "Cookie-szabályzat";
$nav_cookies_short = "Cookie-k";
$nav_aml = "AML-szabályzat";
$nav_contact_us = "Lépjen kapcsolatba velünk";
$nav_contact = "Kapcsolat";
$nav_get_started = "Kezdje el";
$header_ai_status = "AI mag üzemel";
$header_menu_aria = "Menü";
$footer_platform = "Platform";
$footer_resources = "Erőforrások";
$footer_contact_title = "Kapcsolat";
$footer_ai_signals = "AI jelzések";
$footer_about_link = "A $site_name-ról";
$footer_description = "A $site_name fejlett, mesterséges intelligencia alapú kriptokereskedési infrastruktúra, amely a prediktív elemzésre, intézményi szintű piaci intelligenciára, volatilitás-modellezésre, neurális végrehajtási rendszerekre és automatizált kockázatkezelésre összpontosít.";
$footer_monitoring = "24/7 AI infrastruktúra-felügyelet";
$footer_global_markets = "Globális digitális eszközpiacok";
$footer_disclaimer_title = "Kockázati nyilatkozat";
$footer_disclaimer_p1 = "A kriptovaluta-kereskedés és a digitális eszközökbe történő befektetés jelentős pénzügyi kockázattal jár, és nem biztos, hogy minden befektető számára megfelelő. A piaci volatilitás, a likviditási zavarok, a technológiai hibák, a szabályozási változások és a makrogazdasági feltételek jelentősen befolyásolhatják az eszközök teljesítményét.";
$footer_disclaimer_p2 = "A $site_name mesterséges intelligencia alapú elemzési infrastruktúrát, prediktív piaci intelligenciát és automatizált kereskedési technológiákat biztosít. Semmi, ami ezen a weboldalon található, nem minősül pénzügyi, befektetési, jogi vagy adótanácsadásnak.";
$footer_disclaimer_p3 = "A múltbeli teljesítmény nem garantálja a jövőbeli eredményeket. A felhasználóknak önállóan kell értékelniük a kockázatokat, mielőtt kriptovaluta-piacokkal vagy automatizált kereskedési rendszerekkel foglalkoznának.";
$footer_rights = "Minden jog fenntartva.";
$footer_lang_label = "Nyelv";


// HOME FORM
$home_form_fname = "Keresztnév";
$home_form_lname = "Vezetéknév";
$home_form_email = "E-mail";
$home_form_submit_access = "Hozzáférés igénylése";
$home_form_submit_platform = "Platform hozzáférés kérése";

// CONTACT FORM
$contact_form_fname = "Keresztnév";
$contact_form_lname = "Vezetéknév";
$contact_form_email = "E-mail";
$contact_form_submit = "Hozzáférés kérése";


// HOME LABELS
$home_label_ai_confidence = "AI megbízhatóság";
$home_label_update_speed = "Frissítési sebesség";
$home_label_market_mode = "Piaci mód";
$home_label_market_condition = "Piaci állapot";
$home_label_buyer_activity = "Vásárlói aktivitás";
$home_label_market_activity = "Piaci aktivitás";
$home_label_risk_level = "Kockázati szint";
$home_label_updated = "Frissítve";
$home_label_live_analysis = "ÉLŐ ELEMZÉS";

// JS
$home_js_sec_ago = "mp ezelőtt";
$js_sec_ago = "mp ezelőtt";
$js_close_notification = "Értesítés bezárása";

$js_signal_long_direction = "Emelkedő trend valószínűsége nő";
$js_signal_long_market = "Kontrollált terjeszkedés";
$js_signal_long_pressure_label = "Likviditási nyomás";
$js_signal_long_pressure = "Emelkedő";

$js_signal_short_direction = "Csökkenő nyomás nő";
$js_signal_short_market = "Magas instabilitás";
$js_signal_short_pressure_label = "Kockázati nyomás";
$js_signal_short_pressure = "Csökkenő";

$js_signal_watch_direction = "Konszolidációs zóna észlelve";
$js_signal_watch_market = "Semleges konszolidáció";
$js_signal_watch_pressure_label = "Intézményi áramlás";
$js_signal_watch_pressure = "Stabil";

$js_hero_long_pair = "BTC/USD momentum-bővülés";
$js_hero_long_regime = "Emelkedő";
$js_hero_long_feed_1 = "BTC likviditás-bővülés észlelve";
$js_hero_long_feed_2 = "A megbízásáramlási nyomás pozitívra fordul";
$js_hero_long_feed_3 = "Az AI modell megerősíti az emelkedő folytatódást";

$js_hero_watch_pair = "ETH/USD volatilitás-kompresszió";
$js_hero_watch_regime = "Semleges";
$js_hero_watch_feed_1 = "ETH kompressziós zóna észlelve";
$js_hero_watch_feed_2 = "Az AI erősebb megerősítésre vár";
$js_hero_watch_feed_3 = "A likviditás stabil marad";

$js_hero_short_pair = "SOL/USD kockázat-bővülés";
$js_hero_short_regime = "Kockázatkerülő";
$js_hero_short_feed_1 = "SOL csökkenő nyomás észlelve";
$js_hero_short_feed_2 = "A kockázati modell volatilitás-bővülést jelez";
$js_hero_short_feed_3 = "Az AI csökkenti az emelkedő kitettséget";

// JS — live user popup actions
$js_live_action_1 = "csatlakozott a $site_name-hoz innen:";
$js_live_action_2 = "platform hozzáférést kért innen:";
$js_live_action_3 = "AI jelfigyelést indított innen:";
$js_live_action_4 = "piacelemzést aktivált innen:";
$js_live_action_5 = "megnyitotta az intézményi irányítópultot innen:";
$js_live_action_6 = "csatlakozott a $site_name-hoz innen:";


// HOME PAGE
$home_hero_label = "AI kriptoplatform minden tapasztalati szinthez";
$home_hero_title = "$site_name platform";
$home_hero_desc = "A $site_name segít a kezdőknek és a tapasztalt kereskedőknek felfedezni a kriptopiacokat mesterséges intelligencia alapú betekintésekkel, valós idejű piaci felügyelettel, kockázattudatossági eszközökkel és vezetett platformtámogatással.";
$home_hero_feat_1 = "Egyszerű AI piaci betekintések új felhasználóknak";
$home_hero_feat_2 = "Valós idejű kriptofigyelés és jelfrissítések";
$home_hero_feat_3 = "Kockázattudatos eszközök az okosabb döntésekhez";
$home_hero_feat_4 = "Fejlett elemzés tapasztalt kereskedőknek";
$home_btn_request_access = "Platform hozzáférés igénylése";
$home_btn_view_signals = "AI jelzések megtekintése";
$home_trust_data_label = "Elemzett piaci adatpontok";
$home_trust_confidence_label = "Átlagos jelmegbízhatóság";
$home_trust_monitoring_label = "AI piacfelügyelet";
$home_terminal_title = "$site_name vezetett AI piaci nézet";
$home_terminal_insight_label = "Jelenlegi AI piaci betekintés";
$home_terminal_feed_1 = "A BTC piaci aktivitása erősebb momentumot mutat";
$home_terminal_feed_2 = "Az ETH mozgását megerősítés céljából figyelik";
$home_terminal_feed_3 = "Az AI asszisztens lehetséges lehetőségi zónát jelez";
$home_trust_strip_1 = "AI betekintések kezdőknek és tapasztalt kereskedőknek";
$home_trust_strip_2 = "24/7 kriptovaluta piacfigyelés";
$home_trust_strip_3 = "Valós idejű kockázat- és lehetőségelemzés";
$home_trust_strip_4 = "Vezetett hozzáférés fejlett kereskedési eszközökhöz";
$home_signals_eyebrow = "$site_name ÉLŐ AI MAG";
$home_signals_title = "Valós idejű AI piaci jelzések okosabb kriptodöntésekhez";
$home_signals_desc = "A $site_name folyamatosan figyeli a kriptovaluta piaci aktivitást, a volatilitást, a likviditási feltételeket, a hangulati trendeket és a blokklánc-adatokat, hogy mesterséges intelligencia alapú betekintéseket és valós idejű piaci jelzéseket generáljon kezdők és tapasztalt kereskedők számára egyaránt.";
$home_signals_terminal_title = "$site_name AI jelzőmotor";
$home_signal_btc_sub = "Pozitív momentum észlelve";
$home_signal_btc_dir = "Emelkedő trend valószínűsége nő";
$home_signal_btc_market = "Pozitív momentum";
$home_signal_btc_activity = "Erős";
$home_signal_eth_sub = "Piaci megerősítésre vár";
$home_signal_eth_dir = "Oldalazó mozgás észlelve";
$home_signal_eth_market = "Semleges trend";
$home_signal_eth_activity = "Stabil";
$home_signal_sol_sub = "Fokozott piaci kockázat észlelve";
$home_signal_sol_dir = "Csökkenő nyomás nő";
$home_signal_sol_market = "Magas volatilitás";
$home_signal_sol_risk = "Emelkedett";
$home_why_eyebrow = "MIÉRT A $site_name?";
$home_why_title = "AI alapú kriptoeszközök minden tapasztalati szinthez";
$home_why_desc_1 = "A $site_name segít a felhasználóknak jobban megérteni a kriptovaluta piacokat mesterséges intelligencia, valós idejű figyelés, piaci betekintések és kockázattudatossági eszközök révén. Akár most fedezi fel a kriptovalutát először, akár már van kereskedési tapasztalata, a platformot úgy tervezték, hogy a piacelemzés hozzáférhetőbb és érthetőbb legyen.";
$home_why_desc_2 = "A $site_name infrastruktúra folyamatosan értékeli a piaci aktivitást, az árváltozásokat, a likviditási feltételeket, a hangulati trendeket és a blokklánc-adatokat, hogy azonosítsa az új lehetőségeket és a változó piaci feltételeket. Az új felhasználók vezetett platformtámogatásból profitálhatnak, míg a tapasztalt kereskedők fejlett elemzési eszközöket és mesterséges intelligencia alapú piaci intelligenciát fedezhetnek fel.";
$home_flow_1 = "Piacfigyelés";
$home_flow_2 = "AI elemzés";
$home_flow_3 = "Lehetőségfelismerés";
$home_flow_4 = "Kockázatértékelés";
$home_flow_5 = "Cselekvésre alkalmas betekintések";
$home_reviews_eyebrow = "$site_name KÖZÖSSÉG";
$home_reviews_title = "Mit mondanak a felhasználók a $site_name-ról";
$home_reviews_desc = "Az első alkalommal kriptovalutát használóktól a tapasztalt kereskedőkig — az emberek a $site_name-t használják a piaci feltételek jobb megértésére, a mesterséges intelligencia alapú betekintések felfedezésére és a kriptovaluta-döntések nagyobb tisztasággal történő megközelítésére.";
$home_review_1_text = "Mielőtt felfedeztem a $site_name-t, túlterheltnek éreztem magam a kriptovaluta térben lévő információmennyiség miatt. Minden platform bonyolultnak tűnt, és folyamatosan aggódtam, hogy hibázok. Amit a leginkább értékelek a $site_name-ban, az az, hogy mennyire megközelíthetőnek tűnik minden. Az AI betekintések segítettek megérteni a piaci feltételeket anélkül, hogy elveszettnek éreztem volna magam, és a platform megadta a bizalmat, hogy a saját tempómban tanulhassak. Igazán hálás vagyok, hogy a tapasztalat ennyivel könnyebbé vált, mint amire számítottam.";
$home_review_1_tag = "Biztonságos és könnyű kezdés";
$home_review_badge = "ELLENŐRZÖTT FELHASZNÁLÓ";
$home_review_2_text = "Hónapokat töltöttem kriptoplatformok böngészésével anélkül, hogy valaha is elég kényelmesen éreztem volna magam ahhoz, hogy megtegyem az első lépést. A $site_name teljesen megváltoztatta ezt a tapasztalatot. A platform könnyebben érthetővé tette a piaci információkat, és soha nem éreztem, hogy évek kereskedési tapasztalatára lenne szükségem az eszközök használatához. Ami a leginkább lenyűgözött, az az egyszerűség és a hatékony AI elemzés közötti egyensúly volt. Olyan érzés, mintha mindig rendelkezésre állna útmutatás, amikor szükség van rá. Hálás vagyok, hogy találtam egy platformot, amely segített tanulni anélkül, hogy megfélemlítve éreztem volna magam.";
$home_review_2_tag = "Könnyebb tanulási élmény";
$home_review_3_text = "Sok piacelemzési platformot teszteltem, és a $site_name kitűnik, mert egyensúlyt teremt a hozzáférhetőség és a komoly elemzési mélység között. Az új felhasználók gyorsan megértik a platformot, míg a tapasztalt kereskedők továbbra is hasznos, mesterséges intelligencia által vezérelt piaci jelzéseket, kockázatfigyelést és valós idejű kriptointelligenciát kapnak. Ezt az egyensúlyt nehéz megtalálni. A platform jelentős piaci kontextust nyújt anélkül, hogy túlterhelné a felhasználókat, ami nagyon kevés kriptoeszköznek sikerül elérnie.";
$home_review_3_tag = "Fejlett eszközök egyszerű használhatósággal";
$home_review_span_1 = "Új kriptofelhasználó";
$home_review_span_2 = "Első alkalommal platformhasználó";
$home_review_span_3 = "Professzionális kriptokereskedő";
$home_review_1_avatar_alt = "Kovács Péter, $site_name felhasználó";
$home_review_2_avatar_alt = "Szabó Zoltán, $site_name felhasználó";
$home_review_3_avatar_alt = "Horváth István, $site_name felhasználó";
$home_hero_visual_alt = "AI alapú piacelemzési irányítópult a $site_name-on";
$home_signal_visual_alt = "A $site_name AI által generált valós idejű kereskedési jelzés";
$home_device_visual_alt = "Kriptoelemzés megjelenítve egy csatlakoztatott eszközön a $site_name-en keresztül";
$home_security_visual_alt = "Biztonsági pajzs, amely a $site_name fiókvédelmét jelképezi";
$home_contact_eyebrow = "KEZDJE EL A $site_name-MAL";
$home_contact_title = "Fedezze fel a platformot magabiztosan";
$home_contact_section_title = "Fedezze fel a platformot magabiztosan";
$home_contact_desc_1 = "Akár teljesen új a kriptovaluta piacokon, akár már van kereskedési tapasztalata, a $site_name hozzáférést biztosít a mesterséges intelligencia alapú piaci betekintésekhez, valós idejű figyelőeszközökhöz és intelligens elemzéshez, amelyeket úgy terveztek, hogy segítsék a felhasználókat a digitális eszközök lehetőségeinek jobb megértésében.";
$home_contact_desc_2 = "Küldje el adatait, hogy többet megtudjon a platformról, felfedezze az elérhető funkciókat, és megtudja, hogyan segíthet a $site_name eligazodni a kriptovaluta piacokon fejlett technológia és vezetett platformtámogatás révén.";
$home_seo_toggle = "Tudjon meg többet a $site_name AI platformról";
$home_seo_h2 = "$site_name AI platform okosabb kriptopiaci döntésekhez";
$home_seo_p1 = "A $site_name egy mesterséges intelligencia alapú kriptovaluta platform, amelyet kezdőknek és tapasztalt kereskedőknek egyaránt terveztek. A platform ötvözi a mesterséges intelligenciát, a valós idejű piacfigyelést és a fejlett elemzési eszközöket, hogy segítse a felhasználókat a digitális eszközpiacok jobb megértésében és a lehetséges lehetőségek azonosításában.";
$home_seo_p2 = "Ellentétben sok hagyományos kereskedési platformmal, amelyek kiterjedt piaci ismereteket igényelnek, a $site_name úgy épült fel, hogy a komplex piaci információkat könnyebben érthetővé tegye. A platform folyamatosan elemzi a kriptovaluta-aktivitást, az árváltozásokat, a hangulati trendeket, a likviditási feltételeket és a blokklánc-adatokat, nagy mennyiségű információt gyakorlati betekintésekké alakítva.";
$home_seo_p3 = "Akár most fedezi fel a kriptovaluta piacokat először, akár már van tapasztalata a digitális eszközök kereskedésében, a $site_name intelligens eszközöket biztosít, amelyeket úgy terveztek, hogy támogassák a megalapozottabb döntéshozatalt, miközben alkalmazkodnak a valós időben változó piaci feltételekhez.";
$home_seo_h3_1 = "Az AI piacelemzés hozzáférhetővé tétele";
$home_seo_h3_1_p1 = "A $site_name mesterséges intelligenciát használ a piaci mutatók széles skálájának értékelésére, beleértve a kereskedési aktivitást, a volatilitási mintákat, a likviditási feltételeket, a blokklánc-eseményeket és a piaci hangulatot. Az információk folyamatos feldolgozásával a platform segít a felhasználóknak tisztábban megérteni a jelenlegi piaci viselkedést.";
$home_seo_h3_1_p2 = "Az AI modelleket úgy tervezték, hogy alkalmazkodjanak a változó környezetekhez, ahelyett hogy statikus feltételezésekre támaszkodnának. Ez lehetővé teszi a platform számára, hogy dinamikusan reagáljon a fejlődő kriptovaluta trendekre és az újonnan megjelenő piaci lehetőségekre.";
$home_seo_h3_1_p3 = "Bár elég fejlett a tapasztalt kereskedők számára, a platform úgy is fel van építve, hogy megközelíthető maradjon az új felhasználók számára, akik hozzá szeretnének férni az AI-vezérelt piaci intelligenciához mély technikai szakértelem nélkül.";
$home_seo_h3_2 = "Valós idejű AI piaci jelzések";
$home_seo_h3_2_p1 = "A $site_name folyamatosan figyeli a kriptovaluta piacokat, és mesterséges intelligencia alapú betekintéseket generál a változó piaci aktivitás alapján. A platform értékeli a momentumot, a volatilitást, a likviditási feltételeket és a szélesebb piaci viselkedést, hogy valós idejű analitikai jelzéseket biztosítson.";
$home_seo_h3_2_p2 = "A Bitcoint, Ethereumot, Solanát, XRP-t, Avalanche-t és más jelentős digitális eszközöket adaptív analitikai modellek segítségével figyelik, amelyek automatikusan alkalmazkodnak a változó piaci feltételekhez.";
$home_seo_h3_2_p3 = "Ahelyett, hogy egyetlen mutatóra vagy elszigetelt metrikára támaszkodna, a $site_name több információforrást kombinál egy szélesebb elemzési keretbe, amelyet úgy terveztek, hogy teljesebb képet nyújtson a piaci feltételekről.";
$home_seo_h3_3 = "Intelligens kockázattudatossági eszközök";
$home_seo_h3_3_p1 = "A kriptovaluta piacok gyorsan változhatnak. A $site_name mesterséges intelligencia alapú figyelőrendszereket tartalmaz, amelyeket úgy terveztek, hogy azonosítsák a szokatlan volatilitást, a változó likviditási feltételeket és az újonnan megjelenő piaci kockázatokat.";
$home_seo_h3_3_p2 = "A platform folyamatosan értékeli a piaci viselkedést és a lehetséges kockázati tényezőket, segítve a felhasználókat a változó feltételek jobb megértésében és a megalapozottabb döntéshozatalban.";
$home_seo_h3_3_p3 = "Az elemzés több rétegének kombinálásával a $site_name arra törekszik, hogy javítsa a piaci tudatosságot, és segítse a felhasználókat a fokozott bizonytalanság időszakainak nagyobb magabiztossággal történő átvészelésében.";
$home_seo_h3_4 = "A modern kriptovaluta piacokhoz tervezve";
$home_seo_h3_4_p1 = "A $site_name egyetlen platformban egyesíti a mesterséges intelligenciát, a valós idejű figyelőtechnológiákat és a fejlett elemzési eszközöket, amelyet a modern digitális eszközpiacokhoz terveztek.";
$home_seo_h3_4_p2 = "Az infrastruktúra folyamatosan értékeli a piaci aktivitást, a blokklánc-fejlesztéseket, a hangulatváltozásokat és a likviditási trendeket, hogy átfogó képet nyújtson a kriptovaluta piac viselkedéséről.";
$home_seo_h3_4_p3 = "Ahogy a digitális eszközpiacok folyamatosan fejlődnek, a mesterséges intelligencia alapú eszközök segíthetnek a felhasználóknak hatékonyabban feldolgozni az információkat és jobban megérteni az egyre összetettebb piaci környezeteket. A $site_name célja, hogy ezeket a képességeket a piaci szereplők szélesebb köre számára is elérhetővé tegye.";
$home_seo_side_1_label = "AI betekintések";
$home_seo_side_1_title = "Könnyen érthető piacelemzés";
$home_seo_side_1_desc = "Mesterséges intelligencia alapú betekintések, amelyeket új és tapasztalt kriptovaluta-felhasználók számára egyaránt terveztek.";
$home_seo_side_2_label = "Piacfigyelés";
$home_seo_side_2_title = "Valós idejű kriptokövetés";
$home_seo_side_2_desc = "A főbb kriptovaluta piacok és a változó piaci feltételek folyamatos figyelése.";
$home_seo_side_3_label = "Kockázattudatosság";
$home_seo_side_3_title = "Intelligens kockázatfelismerés";
$home_seo_side_3_desc = "Fejlett figyelőeszközök, amelyeket úgy terveztek, hogy kiemeljék a változó piaci dinamikát és volatilitást.";
$home_seo_side_4_label = "AI technológia";
$home_seo_side_4_title = "Adaptív elemzési modellek";
$home_seo_side_4_desc = "Gépi tanulási rendszerek, amelyek folyamatosan értékelik a piaci adatokat és az újonnan megjelenő trendeket.";
$home_faq_eyebrow = "$site_name TUDÁSBÁZIS";
$home_faq_title = "Gyakran ismételt kérdések a $site_name-ról";
$home_faq_desc = "Tudjon meg többet arról, hogyan működik a platform, kinek szánták, és hogyan segíti a mesterséges intelligencia a felhasználókat a kriptovaluta piaci feltételek jobb megértésében.";
$home_faq_q1 = "Szükségem van kereskedési tapasztalatra a $site_name használatához?";
$home_faq_a1 = "Nem. A $site_name-t különböző tapasztalati szintű felhasználók számára tervezték, beleértve azokat is, akik teljesen újak a kriptovaluta piacokon. A platform mesterséges intelligencia alapú betekintéseket és piacfigyelő eszközöket használ a komplex információk könnyebbé tételéhez.";
$home_faq_q2 = "Mit csinál pontosan a $site_name?";
$home_faq_a2 = "A $site_name folyamatosan elemzi a kriptovaluta piacokat mesterséges intelligencia segítségével. A platform értékeli a piaci aktivitást, a volatilitást, a hangulati trendeket, a likviditási feltételeket és a blokklánc-adatokat, hogy valós idejű betekintéseket és analitikai jelzéseket generáljon.";
$home_faq_q3 = "Használhatják a tapasztalt kereskedők a $site_name-t?";
$home_faq_a3 = "Igen. Bár a platform kezdőbarát, fejlett elemzési eszközöket, mesterséges intelligencia által vezérelt piaci intelligenciát és valós idejű figyelő funkciókat is kínál, amelyek értékesek lehetnek a tapasztalt piaci szereplők számára.";
$home_faq_q4 = "Mely kriptovalutákat figyeli a $site_name?";
$home_faq_a4 = "A platform elemezheti a jelentős digitális eszközöket, mint például a Bitcoin, Ethereum, Solana, XRP, Avalanche és más széles körben kereskedett kriptovalutákat, a piaci feltételektől és az elérhető adatforrásoktól függően.";
$home_faq_q5 = "Hogyan generálódnak az AI jelzések?";
$home_faq_a5 = "A $site_name egyidejűleg több piaci tényezőt értékel, beleértve a volatilitást, a kereskedési aktivitást, a likviditási feltételeket, a hangulati trendeket és a történelmi piaci viselkedést. Az AI modellek kombinálják ezeket a bemeneteket a változó piaci feltételek és a lehetséges lehetőségek azonosítására.";
$home_faq_q6 = "Nyújt-e a $site_name oktatási útmutatást?";
$home_faq_a6 = "A platformot úgy tervezték, hogy segítse a felhasználókat a piaci feltételek jobb megértésében mesterséges intelligencia alapú elemzés, egyszerűsített betekintések és a platform funkcióihoz való vezetett hozzáférés révén. Az új felhasználók fejlett technikai ismeretek nélkül is felfedezhetik a kriptovaluta piacokat.";
$home_cta_label = "AI platform készen áll";
$home_cta_title = "Kezdje el felfedezni a $site_name-t még ma";
$home_cta_desc = "Fedezze fel a mesterséges intelligencia alapú piaci betekintéseket, a valós idejű kriptovaluta-figyelést, az intelligens kockázattudatossági eszközöket és a fejlett elemzést, amelyeket kezdőknek és tapasztalt kereskedőknek egyaránt terveztek.";
$home_ticker_text = "AI piacfigyelés aktív • Valós idejű kriptovaluta-elemzés • A Bitcoin momentuma erősödik • Ethereum konszolidáció észlelve • Új piaci lehetőségek azonosítva • Kockázatfigyelő rendszerek online • AI betekintések folyamatosan frissülnek • Kezdőknek és tapasztalt kereskedőknek tervezve";


// ABOUT PAGE
$about_h1 = "A $site_name-ról";
$about_p1 = "A $site_name egy következő generációs mesterséges intelligencia infrastruktúra, amelyet úgy terveztek, hogy segítse a piaci szereplőket a gyorsan fejlődő kriptovaluta ökoszisztéma jobb megértésében. A gépi tanulási technológiák, a prediktív elemzés, a piaci intelligencia rendszerek és a valós idejű adatfeldolgozás kombinálásával a $site_name átfogó környezetet biztosít a digitális eszközök tevékenységének figyelésére és a jelentős piaci fejlemények azonosítására.";
$about_p2 = "A kriptovaluta piac folyamatosan működik számos tőzsdén, joghatóságon és likviditási szolgáltatón keresztül. Minden másodpercben több ezer változó befolyásolja az árazást, a volatilitást, a likviditási feltételeket és a befektetői hangulatot. A $site_name-t azzal a céllal fejlesztették ki, hogy ezeket a komplex adatfolyamokat strukturált és skálázható módon dolgozza fel.";
$about_h2_vision = "A $site_name mögötti jövőkép";
$about_p_vision_1 = "A pénzügyi piacok egyre inkább adatvezérelté válnak. A hagyományos elemzési módszerek gyakran nehezen tartanak lépést a modern digitális eszköz-ökoszisztémákban generált információmennyiséggel. A $site_name arra törekszik, hogy áthidalja ezt a szakadékot a fejlett számítási intelligencia, az automatizált figyelőrendszerek és az adaptív elemzési modellek alkalmazásával.";
$about_p_vision_2 = "A $site_name hosszú távú jövőképe az, hogy átlátható piaci intelligencia eszközöket biztosítson, amelyek segíthetik a felhasználókat a kriptovaluta piaci struktúra, a kockázati feltételek és az újonnan megjelenő trendek jobb megértésében.";
$about_h2_ai = "Mesterséges intelligencia infrastruktúra";
$about_p_ai_1 = "A $site_name magját egy többrétegű mesterséges intelligencia keretrendszer alkotja, amelyet úgy terveztek, hogy egyidejűleg dolgozza fel az információkat számos piaci forrásból.";
$about_p_ai_2 = "Ezek a források a következőket tartalmazhatják:";
$about_li_1 = "Kriptovaluta árfolyamadatok";
$about_li_2 = "Megbízáskönyv aktivitás";
$about_li_3 = "Likviditásmozgási adatok";
$about_li_4 = "Volatilitási mutatók";
$about_li_5 = "Blokklánc-tranzakciós mérőszámok";
$about_li_6 = "Piaci hangulati jelzések";
$about_li_7 = "Makrogazdasági fejlemények";
$about_li_8 = "Intézményi piaci aktivitás";
$about_p_ai_3 = "E változók közötti kapcsolatok folyamatos értékelésével a $site_name igyekszik olyan mintákat azonosítani, amelyek értékes piaci kontextust biztosíthatnak.";
$about_h2_risk = "Kockázattudatossági filozófia";
$about_p_risk_1 = "A kriptovaluta piacokban való felelős részvétel megköveteli a kockázatok tiszta megértését. A $site_name a kockázattudatosságot a digitális eszközök elemzésének alapvető elemeként hangsúlyozza.";
$about_p_risk_2 = "A piaci volatilitás, a likviditási ingadozások, a tőzsdespecifikus események, a szabályozási fejlemények és a szélesebb makrogazdasági feltételek mind befolyásolhatják a piaci eredményeket. Ennek eredményeként a felhasználóknak soha nem szabad kizárólag egyetlen információforrásra hagyatkozniuk a döntéshozatal során.";
$about_h2_global = "Globális digitális eszközpiacok";
$about_p_global_1 = "A kriptovaluta piacok globális léptékben működnek, és különböző régiókból, iparágakból és gazdasági környezetekből származó résztvevőket vonnak be. A $site_name infrastruktúrát úgy tervezték, hogy egyidejűleg figyeljen több piaci szegmenst, lehetővé téve a felhasználók számára, hogy megfigyeljék a digitális eszköz-ökoszisztéma különböző részein zajló fejleményeket.";
$about_p_global_2 = "Ez a szélesebb perspektíva segíthet javítani a változó piaci feltételek és az újonnan megjelenő trendek iránti tudatosságot.";
$about_h2_why = "Miért fedezik fel a felhasználók a $site_name-t";
$about_why_li_1 = "Fejlett, mesterséges intelligencia alapú piaci intelligencia";
$about_why_li_2 = "Valós idejű kriptovaluta-figyelés";
$about_why_li_3 = "Intézményi stílusú elemzési infrastruktúra";
$about_why_li_4 = "Többtényezős piacértékelés";
$about_why_li_5 = "Volatilitás- és likviditásfigyelés";
$about_why_li_6 = "Skálázható digitális eszközkutatási eszközök";
$about_why_li_7 = "Kockázattudatos elemzési módszertan";
$about_h2_forward = "Előretekintve";
$about_p_forward_1 = "Ahogy a digitális eszközpiacok tovább érnek, a fejlett elemzési infrastruktúra jelentősége várhatóan növekedni fog. A $site_name továbbra is azokra a technológiákra összpontosít, amelyek mélyebb piaci megértést, nagyobb átláthatóságot és megalapozottabb részvételt tesznek lehetővé a kriptovaluta ökoszisztémában.";
$about_p_forward_2 = "A folyamatos innováció és a folyamatban lévő kutatás révén a $site_name célja, hogy hozzájáruljon egy intelligensebb és adatvezéreltebb jövőhöz a digitális eszközök elemzésében.";


// CONTACT PAGE
$contact_h1 = "Vegye fel a kapcsolatot a $site_name-mal";
$contact_intro_1 = "Vegye fel a kapcsolatot a $site_name csapatával platform hozzáférés kéréséhez, kérdéseket tehet fel a mesterséges intelligencia alapú kriptokereskedési infrastruktúráról, vagy tudjon meg többet digitális eszközök piaci intelligenciájának környezetéről.";
$contact_intro_2 = "Akár automatizált kriptoanalitikát, intézményi stílusú jelinfrastruktúrát, volatilitásfigyelést vagy több tőzsdére kiterjedő piaci intelligenciát fedez fel, csapatunk segíthet a kérését a megfelelő osztályhoz irányítani.";
$contact_h2_help = "Miben segíthetünk";
$contact_li_1 = "Platform hozzáférési kérelmek";
$contact_li_2 = "Általános termékkérdések";
$contact_li_3 = "AI kereskedési infrastruktúra információk";
$contact_li_4 = "Digitális eszközök piaci intelligencia kérdései";
$contact_li_5 = "Kockázati nyilatkozat és megfelelőségi kérdések";
$contact_li_6 = "Technikai vagy beüzemelési segítség";
$contact_h2_send = "Kérés küldése";
$contact_p_send = "Töltse ki az alábbi űrlapot, és egy $site_name képviselő felveheti Önnel a kapcsolatot további információkkal.";
$contact_h2_info = "Elérhetőségek";
$contact_support_label = "Általános támogatás:";
$contact_institutional_label = "Intézményi kérdések:";
$contact_disclaimer = "Kérjük, vegye figyelembe, hogy a $site_name nem nyújt személyre szabott pénzügyi, befektetési, adó- vagy jogi tanácsadást. Minden információ kizárólag technológiai és tájékoztatási célokat szolgál.";

// TERMS PAGE
$terms_h1 = "Felhasználási feltételek";
$terms_intro_1 = "Ezek a felhasználási feltételek szabályozzák a $site_name weboldalhoz, tartalomhoz, platformleírásokhoz, űrlapokhoz, kommunikációhoz és kapcsolódó tájékoztató anyagokhoz való hozzáférést és azok használatát.";
$terms_intro_2 = "A weboldal elérésével a felhasználók elismerik, hogy elolvasták, megértették és elfogadják ezeket a felhasználási feltételeket. Ha egy felhasználó nem ért egyet ezekkel a feltételekkel, abba kell hagynia a weboldal használatát.";
$terms_h2_informational = "Tájékoztató jelleg";
$terms_p_info_1 = "A $site_name információkat nyújt a mesterséges intelligencia alapú kriptokereskedési infrastruktúráról, a digitális eszközök piaci intelligenciájáról, a volatilitásfigyelésről, a likviditáselemzésről és a kapcsolódó technológiákról.";
$terms_p_info_2 = "A weboldal tartalma kizárólag általános tájékoztatási és technológiai bemutatási célokat szolgál. Semmi, ami ezen a weboldalon található, nem értelmezhető pénzügyi tanácsadásként, befektetési tanácsadásként, jogi tanácsadásként, adótanácsadásként vagy a kereskedési eredmények garanciájaként.";
$terms_h2_no_advice = "Nincs pénzügyi tanácsadás";
$terms_p_no_advice_1 = "A $site_name nem nyújt személyre szabott ajánlásokat arra vonatkozóan, hogy a felhasználóknak vásárolniuk, eladniuk, tartaniuk, kereskedniük, staking-elniük, átutalniuk vagy más módon kapcsolatba kell-e lépniük bármilyen kriptovalutával, tokennel, pénzügyi termékkel vagy digitális eszközzel.";
$terms_p_no_advice_2 = "A felhasználóknak önállóan kell értékelniük minden információt, és pénzügyi döntések meghozatala előtt szakképzett szakemberektől kell tanácsot kérniük.";
$terms_h2_user_responsibility = "Felhasználói felelősség";
$terms_p_user_1 = "A felhasználók felelősek saját döntéseikért, kockázatértékeléseikért, fiókjuk tevékenységéért, kereskedési intézkedéseikért, jogi megfelelésükért és bármely harmadik fél szolgáltatásainak használatáért.";
$terms_p_user_2 = "A felhasználóknak biztosítaniuk kell, hogy a digitális eszközökkel kapcsolatos tevékenység engedélyezett a joghatóságukban, és hogy megértik az összes vonatkozó kockázatot, mielőtt kapcsolatba lépnének a kriptopiacokkal.";
$terms_h2_ai = "AI és elemzési rendszerek";
$terms_p_ai_1 = "A $site_name mesterséges intelligencia rendszereket, prediktív modelleket, piaci jelzéseket, automatizált elemzést vagy végrehajtással kapcsolatos technológiákat írhat le.";
$terms_p_ai_2 = "Ezek a rendszerek piaci adatokra, statisztikai modellekre, gépi tanulási folyamatokra és harmadik féltől származó információforrásokra támaszkodhatnak. Az ilyen rendszerek pontatlanok, késleltetettek, hiányosak, elérhetetlenek vagy alkalmatlanok lehetnek az adott felhasználói célokra.";
$terms_h2_availability = "Nincs garancia a rendelkezésre állásra";
$terms_p_avail_1 = "A $site_name nem garantálja a megszakítás nélküli weboldal-hozzáférést, a folyamatos platform-rendelkezésre állást, a hibamentes működést, a pontos piaci információkat vagy bármely konkrét funkció elérhetőségét.";
$terms_p_avail_2 = "A szolgáltatások, tartalmak, oldalak, űrlapok, integrációk vagy platformleírások bármikor módosíthatók, felfüggeszthetők vagy megszüntethetők.";
$terms_h2_third_party = "Harmadik felek szolgáltatásai";
$terms_p_tp_1 = "A weboldal harmadik felek tőzsdéire, likviditási helyszíneire, elemzési szolgáltatókra, kommunikációs eszközökre, hosztolási szolgáltatásokra vagy technikai infrastruktúra-szolgáltatókra hivatkozhat.";
$terms_p_tp_2 = "A $site_name nem ellenőrzi a harmadik fél platformokat, és nem felelős azok rendelkezésre állásáért, díjaiért, szabályzataiért, fiókkorlátozásaiért, megfelelőségi eljárásaiért, technikai hibáiért vagy a felhasználók veszteségeiért.";
$terms_h2_prohibited = "Tiltott használat";
$terms_p_prohibited = "A felhasználók nem használhatják ezt a weboldalt vagy bármely kapcsolódó technológiát jogellenes, visszaélésszerű, csalárd, manipulatív vagy káros célokra.";
$terms_li_1 = "Jogosulatlan hozzáférés megkísérlése";
$terms_li_2 = "Hamis vagy félrevezető információk benyújtása";
$terms_li_3 = "A weboldal jogellenes pénzügyi tevékenységre való használata";
$terms_li_4 = "A weboldal biztonságának vagy funkcionalitásának megzavarása";
$terms_li_5 = "A weboldal tartalmának engedély nélküli másolása vagy visszaélésszerű használata";
$terms_li_6 = "A megfelelőségi vagy technikai ellenőrzések megkerülésének megkísérlése";
$terms_h2_ip = "Szellemi tulajdon";
$terms_p_ip_1 = "A weboldal tervezése, szövege, márkajelzése, felhasználói felület elemei, grafikái, struktúrája és kapcsolódó anyagai a $site_name tulajdonát képezik vagy annak licencelt, hacsak másképp nincs jelezve.";
$terms_p_ip_2 = "A felhasználók nem sokszorosíthatják, terjeszthetik, módosíthatják vagy kereskedelmi célra használhatják a weboldal anyagait megfelelő engedély nélkül.";
$terms_h2_liability = "Felelősségkorlátozás";
$terms_p_liab_1 = "Az alkalmazandó jog által megengedett legnagyobb mértékben a $site_name nem vállal felelősséget a digitális eszközök kereskedéséből, piaci volatilitásból, technikai problémákból, harmadik fél platform hibáiból, pontatlan adatokból, felhasználói döntésekből vagy a weboldal tartalmára való hagyatkozásból eredő veszteségekért.";
$terms_p_liab_2 = "A felhasználók saját felelősségükre férnek hozzá és használják ezt a weboldalt.";
$terms_h2_changes = "Változások e feltételekben";
$terms_p_changes_1 = "A $site_name bármikor frissítheti ezeket a felhasználási feltételeket. A frissített feltételek közzétehetők ezen az oldalon.";
$terms_p_changes_2 = "A weboldal folyamatos használata a változtatások után azt jelenti, hogy a felhasználók elismerik és elfogadják a frissített feltételeket.";

// PRIVACY PAGE
$privacy_h1 = "Adatvédelmi irányelvek";
$privacy_intro_1 = "A $site_name tiszteletben tartja a felhasználók magánéletét, és elkötelezett a személyes adatok felelősségteljes, átlátható és biztonságos kezelése mellett.";
$privacy_intro_2 = "Ez az adatvédelmi irányelv elmagyarázza, hogy milyen információkat gyűjthetünk, amikor a felhasználók meglátogatják ezt a weboldalt, kapcsolatfelvételi űrlapokat nyújtanak be, hozzáférést kérnek, vagy kapcsolatba lépnek a $site_name tartalmával és a platformmal kapcsolatos kommunikációval.";
$privacy_h2_collect = "Az általunk gyűjthető információk";
$privacy_p_collect_1 = "A $site_name olyan információkat gyűjthet, amelyeket a felhasználók önkéntesen nyújtanak be weboldal-űrlapokon vagy kommunikációs csatornákon keresztül.";
$privacy_li_fname = "Keresztnév";
$privacy_li_lname = "Vezetéknév";
$privacy_li_email = "E-mail cím";
$privacy_li_phone = "Telefonszám";
$privacy_li_inquiry = "Benyújtott kérdés részletei";
$privacy_li_technical = "Alapvető technikai weboldal-használati adatok";
$privacy_h2_use = "Hogyan használjuk az információkat";
$privacy_p_use_1 = "Az információkat felhasználhatjuk a felhasználói kérések megválaszolására, a platform hozzáférési információinak biztosítására, a weboldal funkcionalitásának javítására, a biztonság fenntartására és a $site_name-mal kapcsolatos releváns frissítések közlésére.";
$privacy_p_use_2 = "Aggregált vagy nem azonosító adatokat is felhasználhatunk a weboldal teljesítményének elemzésére, a tartalomstruktúra javítására és annak jobb megértésére, hogy a látogatók hogyan lépnek kapcsolatba oldalainkkal.";
$privacy_h2_comm = "Kommunikációs célok";
$privacy_p_comm_1 = "Ha egy felhasználó kapcsolatfelvételi információkat nyújt be, a $site_name felhasználhatja ezeket az információkat a kérdés megválaszolására, a beüzemelési részletek megadására, a platform hozzáférési kérelmek tisztázására vagy releváns szolgáltatási információk megosztására.";
$privacy_p_comm_2 = "A felhasználók kérhetik a kommunikáció megszüntetését, ahol alkalmazható.";
$privacy_h2_cookies = "Cookie-k és technikai adatok";
$privacy_p_cookies_1 = "Ez a weboldal cookie-kat, elemzési eszközöket és hasonló technológiákat használhat a böngészési élmény javítására, a teljesítmény figyelésére és a weboldal biztonságának támogatására.";
$privacy_p_cookies_2 = "A technikai adatok tartalmazhatják az eszköztípust, a böngésző típusát, az operációs rendszert, az oldalinterakciókat, a hivatkozási információkat és az általános használati statisztikákat.";
$privacy_h2_protection = "Adatvédelmi intézkedések";
$privacy_p_prot_1 = "A $site_name ésszerű adminisztratív, technikai és szervezeti biztosítékokat alkalmaz a benyújtott információk jogosulatlan hozzáféréstől, visszaéléstől, elvesztéstől vagy nyilvánosságra hozataltól való védelme érdekében.";
$privacy_p_prot_2 = "Azonban egyetlen online rendszer sem garantálhat abszolút biztonságot. A felhasználóknak kerülniük kell érzékeny pénzügyi információk, privát tárcakulcsok, jelszavak, tőzsdei hitelesítő adatok vagy bizalmas fiókhozzáférési adatok benyújtását nyilvános weboldal-űrlapokon keresztül.";
$privacy_h2_third = "Harmadik fél szolgáltatók";
$privacy_p_third_1 = "A $site_name harmadik fél szolgáltatókat használhat hosztolásra, elemzésre, kommunikációra, biztonságra, e-mail kézbesítésre, CRM feldolgozásra vagy technikai infrastruktúrára.";
$privacy_p_third_2 = "Ezek a szolgáltatók korlátozott információkat dolgozhatnak fel, csak amennyire szükséges a weboldal funkcionalitásának és a kapcsolódó szolgáltatások támogatásához.";
$privacy_google_choices = 'Kezelheti, hogy a Google hogyan használja fel a látogatásaiból származó információkat a <a href="http://www.google.com/settings/ads" target="_blank" rel="noopener">Google Hirdetési Beállításokon</a> keresztül, lemondhat az érdeklődés alapú hirdetésekről a <a href="https://tools.google.com/dlpage/gaoptout" target="_blank" rel="noopener">Google Analytics leiratkozási böngészőbővítmény</a> segítségével, vagy áttekintheti a <a href="https://www.google.com/intl/en/policies/privacy/" target="_blank" rel="noopener">Google adatvédelmi irányelveit</a> további részletekért.';
$privacy_h2_sale = "Nincs személyes adatok értékesítése";
$privacy_p_sale_1 = "A $site_name nem szándékozik eladni az ezen a weboldalon keresztül benyújtott személyes adatokat.";
$privacy_p_sale_2 = "Az információkat csak akkor osztjuk meg, ha ez szükséges operatív célokra, jogi megfelelésre, felhasználói kommunikációra, csalás megelőzésére vagy szolgáltatással kapcsolatos feldolgozásra.";
$privacy_h2_retention = "Adatmegőrzés";
$privacy_p_retention = "A személyes adatokat mindaddig megőrizhetjük, amíg szükséges a kérdések megválaszolásához, az üzleti nyilvántartások fenntartásához, a jogi kötelezettségek betartásához, a platform kommunikációjának javításához vagy a biztonság és a csalás megelőzésének támogatásához.";
$privacy_h2_rights = "Felhasználói jogok";
$privacy_p_rights = "Az alkalmazandó jogtól függően a felhasználóknak jogaik lehetnek a személyes adatokhoz való hozzáféréssel, javítással, törléssel, tiltakozással, korlátozással vagy hordozhatósággal kapcsolatban.";
$privacy_h2_intl = "Nemzetközi használat";
$privacy_p_intl_1 = "A $site_name-hoz különböző joghatóságokból származó felhasználók férhetnek hozzá. Az adatvédelmi szabályok a helytől függően eltérhetnek.";
$privacy_p_intl_2 = "A weboldal használatával a felhasználók elismerik, hogy az információkat ezen adatvédelmi irányelv és az alkalmazandó operatív követelmények szerint dolgozhatjuk fel.";
$privacy_h2_policy_updates = "Irányelvfrissítések";
$privacy_p_updates_1 = "A $site_name időszakonként frissítheti ezt az adatvédelmi irányelvet, hogy tükrözze a jogszabályi, technológiai, belső eljárási vagy weboldal-funkcionalitási változásokat.";
$privacy_p_updates_2 = "A weboldal folyamatos használata a frissítések után azt jelenti, hogy a felhasználók elismerik a felülvizsgált adatvédelmi irányelvet.";
// COOKIES PAGE
$cookies_h1 = "Cookie-szabályzat";
$cookies_intro_1 = "Ez a cookie-szabályzat elmagyarázza, hogyan használja a $site_name a cookie-kat, elemzési technológiákat és hasonló nyomon követő eszközöket, amikor a felhasználók elérik ezt a weboldalt vagy kapcsolatba lépnek vele.";
$cookies_intro_2 = "A cookie-k segítenek javítani a weboldal funkcionalitását, javítani a felhasználói élményt, elemezni a teljesítményt és támogatni a biztonsággal kapcsolatos folyamatokat.";
$cookies_intro_3 = "A weboldal további használatával a felhasználók elismerik, hogy bizonyos cookie-k és kapcsolódó technológiák ennek a szabályzatnak megfelelően használhatók.";
$cookies_h2_what = "Mik azok a cookie-k?";
$cookies_p_what_1 = "A cookie-k kis szöveges fájlok, amelyeket a felhasználó eszközén tárolnak a weboldal meglátogatásakor.";
$cookies_p_what_2 = "Ezek a fájlok olyan információkat tartalmazhatnak, amelyek segítenek a weboldalaknak felismerni a visszatérő látogatókat, megjegyezni a preferenciákat, javítani a navigációt és mérni a weboldal teljesítményét.";
$cookies_h2_why = "Miért használunk cookie-kat";
$cookies_p_why_1 = "A $site_name cookie-kat és hasonló technológiákat használhat több célra.";
$cookies_li_1 = "A weboldal funkcionalitásának fenntartása";
$cookies_li_2 = "A felhasználói élmény javítása";
$cookies_li_3 = "A felhasználói preferenciák megjegyzése";
$cookies_li_4 = "A látogatói viselkedés megértése";
$cookies_li_5 = "A weboldal teljesítményének mérése";
$cookies_li_6 = "Technikai problémák azonosítása";
$cookies_li_7 = "A weboldal biztonságának támogatása";
$cookies_li_8 = "Visszaélések és félrehasználás megelőzése";
$cookies_h2_essential = "Alapvető cookie-k";
$cookies_p_ess_1 = "Bizonyos cookie-k szükségesek a weboldal megfelelő működéséhez.";
$cookies_p_ess_2 = "Ezek a cookie-k segítenek fenntartani a biztonságot, a navigációs funkcionalitást, a munkamenet-kezelést és a weboldal egyéb alapvető működését.";
$cookies_p_ess_3 = "Alapvető cookie-k nélkül a weboldal egyes részei nem feltétlenül működnek megfelelően.";
$cookies_h2_analytics = "Elemzési cookie-k";
$cookies_p_an_1 = "Az elemzési cookie-k segítenek megérteni, hogyan lépnek kapcsolatba a látogatók a weboldal tartalmával.";
$cookies_p_an_2 = "Ezek a technológiák információkat gyűjthetnek az oldal-látogatásokról, a navigációs mintákról, az eszköztípusokról, a böngészőkonfigurációkról és az általános weboldal-használati mérőszámokról.";
$cookies_p_an_3 = "Az elemzési információkat általában aggregálják, és a weboldal teljesítményének és a felhasználói élmény javítására használják.";
$cookies_h2_functional = "Funkcionális cookie-k";
$cookies_p_fun_1 = "A funkcionális cookie-kat a felhasználók által kiválasztott beállítások és preferenciák megjegyzésére használhatjuk.";
$cookies_p_fun_2 = "Példák lehetnek a nyelvi preferenciák, a felületi beállítások, a megjelenítési lehetőségek vagy más testreszabási funkciók.";
$cookies_h2_third = "Harmadik fél technológiák";
$cookies_p_third_1 = "A $site_name harmadik fél szolgáltatókat, elemzési platformokat, hirdetési technológiákat vagy teljesítményfigyelő eszközöket használhat.";
$cookies_p_third_2 = "Ezek a harmadik felek saját cookie-kat vagy nyomon követési technológiákat helyezhetnek el saját adatvédelmi irányelveiknek megfelelően.";
$cookies_p_third_3 = "A $site_name nem ellenőrzi a harmadik fél cookie-gyakorlatokat, és ajánlott áttekinteni a külső szolgáltatók adatvédelmi dokumentációját, ahol alkalmazható.";
$cookies_h2_manage = "Cookie-k kezelése";
$cookies_p_manage_1 = "A legtöbb modern böngésző lehetővé teszi a felhasználók számára a cookie-k kezelését, korlátozását vagy törlését a böngésző beállításain keresztül.";
$cookies_p_manage_2 = "A felhasználók dönthetnek úgy, hogy teljesen letiltják a cookie-kat, bár ezután bizonyos weboldal-funkciók nem feltétlenül működnek a tervezett módon.";
$cookies_p_manage_3 = "A böngészőbeállítások általában a következő lehetőségeket kínálják:";
$cookies_li_manage_1 = "Az összes cookie letiltása";
$cookies_li_manage_2 = "A meglévő cookie-k törlése";
$cookies_li_manage_3 = "Cookie-értesítések fogadása";
$cookies_li_manage_4 = "Bizonyos cookie-kategóriák korlátozása";
$cookies_h2_data = "Adatvédelem";
$cookies_p_data = "A cookie-kkal kapcsolatos információkat adatvédelmi irányelveinknek és az alkalmazandó adatvédelmi törvényeknek megfelelően dolgozhatjuk fel.";
$cookies_h2_policy_updates = "Irányelvfrissítések";
$cookies_p_updates_1 = "A $site_name időszakonként frissítheti ezt a cookie-szabályzatot, hogy tükrözze a technológiai változásokat, jogi követelményeket vagy operatív fejlesztéseket.";
$cookies_p_updates_2 = "A weboldal folyamatos használata a frissítések után a felülvizsgált szabályzat elfogadását jelenti.";
// AML PAGE
$aml_h1 = "AML-szabályzat";
$aml_intro_1 = "A $site_name elismeri a pénzmosás elleni tudatosság, a pénzügyi integritás és a digitális eszközök piacain való felelős részvétel fontosságát.";
$aml_intro_2 = "Ez az AML-szabályzat elmagyarázza azokat az általános elveket, amelyeket a $site_name alkalmaz a kriptovalutával kapcsolatos technológiák jogellenes felhasználásának, a gyanús pénzügyi tevékenységnek, a csalásnak, a szankciók megkerülésének, a terrorizmus finanszírozásának és más tiltott magatartásoknak a visszaszorítására.";
$aml_h2_purpose = "E szabályzat célja";
$aml_p_purpose_1 = "E szabályzat célja, hogy felelős keretet biztosítson ahhoz, ahogyan a $site_name megközelíti a pénzmosás elleni tudatosságot a digitális eszközök ökoszisztémájában.";
$aml_p_purpose_2 = "A kriptovaluta piacok határon átnyúló tevékenységet, decentralizált infrastruktúrát, harmadik fél tőzsdéket és külső tárcarendszereket foglalhatnak magukban. Ennek eredményeként a felhasználóknak meg kell érteniük, hogy a megfelelőségi kötelezettségek eltérhetnek a joghatóságuktól, a fiók típusától, a tőzsde szolgáltatójától és a helyi szabályozási környezettől függően.";
$aml_h2_responsible = "A digitális eszköz technológia felelős használata";
$aml_p_resp_1 = "A felhasználóktól elvárt, hogy felelősségteljesen, jogszerűen és az alkalmazandó szabályoknak megfelelően lépjenek kapcsolatba a $site_name-mal és bármely kapcsolódó digitális eszköz szolgáltatással.";
$aml_p_resp_2 = "A $site_name nem támogatja és nem ösztönzi a kriptopiacok, kereskedési rendszerek, automatizált technológiák vagy elemzési eszközök jogellenes célokra történő használatát.";
$aml_li_1 = "Pénzmosás";
$aml_li_2 = "Terrorizmus finanszírozása";
$aml_li_3 = "Csalás vagy pénzügyi megtévesztés";
$aml_li_4 = "Szankciók megkerülése";
$aml_li_5 = "Piaci manipuláció";
$aml_li_6 = "Lopott pénzeszközök vagy feltört fiókok használata";
$aml_li_7 = "Bármilyen, az alkalmazandó jog által tiltott tevékenység";
$aml_h2_exchange = "Harmadik fél tőzsdék megfelelése";
$aml_p_ex_1 = "A $site_name hivatkozhat, kapcsolatba léphet vagy elemzési infrastruktúrát biztosíthat harmadik fél digitális eszköz helyszínekkel vagy likviditási környezetekkel kapcsolatban.";
$aml_p_ex_2 = "A harmadik fél tőzsdék, letétkezelők, fizetésfeldolgozók és szolgáltatók saját megfelelőségi eljárásokat alkalmazhatnak, beleértve a személyazonosság-ellenőrzést, a tranzakciófigyelést, a szankciószűrést, a fiókkorlátozásokat, a pénzeszközök eredetének ellenőrzését vagy további ellenőrzési követelményeket.";
$aml_h2_user_responsibility = "Felhasználói felelősség";
$aml_p_user_1 = "A felhasználók felelősek annak biztosításáért, hogy tevékenységük jogszerű a helyükön, és összhangban van a releváns szabályozók, tőzsdék, pénzügyi intézmények vagy szolgáltatók által előírt kötelezettségekkel.";
$aml_p_user_2 = "A felhasználóknak nem szabad megkísérelniük elrejteni a tulajdonjogot, elfedni a tranzakciók eredetét, hamis információkat adni, megkerülni az ellenőrzési folyamatokat, vagy olyan módon használni a digitális eszköz infrastruktúrát, amely gyanúsnak vagy jogellenesnek tekinthető.";
$aml_h2_suspicious = "Gyanús tevékenység";
$aml_p_suspicious = "A gyanús tevékenység magában foglalhat olyan viselkedést, amely nem tűnik összhangban a normál használattal, kísérleteket a kereskedési rendszerek visszaélésszerű használatára, félrevezető információk ismételt benyújtását, korlátozott joghatóságokban való részvételt, vagy csaláshoz, jogellenes pénzeszközökhöz vagy tiltott szolgáltatásokhoz kapcsolódó tevékenységet.";
$aml_h2_evasion = "Nincs kikerülés vagy megkerülés";
$aml_p_evasion = "A felhasználók nem kísérelhetik meg megkerülni a megfelelőségi ellenőrzéseket, technikai korlátozásokat, személyazonosság-ellenőrzési rendszereket, földrajzi korlátozásokat vagy kockázatfigyelési folyamatokat.";
$aml_h2_policy_updates = "Irányelvfrissítések";
$aml_p_updates_1 = "A $site_name időszakonként frissítheti ezt az AML-szabályzatot, hogy tükrözze a szabályozási elvárások, piaci szabványok, belső eljárások vagy digitális eszköz iparági gyakorlatok változásait.";
$aml_p_updates_2 = "A weboldal folyamatos használata a frissítések után azt jelenti, hogy a felhasználók elismerik a felülvizsgált szabályzatot.";
// RISK PAGE
$risk_h1 = "Kockázati nyilatkozat";
$risk_intro_1 = "A kriptovaluta-kereskedés és a digitális eszközökben való részvétel jelentős kockázattal jár. Az árak gyorsan mozoghatnak, a likviditás váratlanul megváltozhat, és a piaci feltételek rövid időn belül rendkívül instabillá válhatnak.";
$risk_intro_2 = "Ez a kockázati nyilatkozat fontos megfontolásokat magyaráz el, amelyeket a felhasználóknak át kell tekinteniük, mielőtt kapcsolatba lépnének a digitális eszközök piacaival, automatizált kereskedési technológiákkal, mesterséges intelligencia által generált piaci jelzésekkel vagy kriptovalutával kapcsolatos elemzési infrastruktúrával.";
$risk_h2_no_guarantee = "Nincs garantált eredmény";
$risk_p_no_guarantee_1 = "A $site_name nem garantál nyereséget, befektetési hozamot, kereskedési sikert, jelpontosságot, megszakítás nélküli hozzáférést vagy pozitív pénzügyi eredményeket.";
$risk_p_no_guarantee_2 = "Az ezen a weboldalon megjelenített példák, statisztikák, felületi elemek, teljesítménymutatók, jelzőindikátorok vagy piaci szimulációk kizárólag tájékoztató és illusztrációs célokat szolgálnak.";
$risk_h2_volatility = "Kriptovaluta piaci volatilitás";
$risk_p_vol_1 = "A digitális eszközök piacai rendkívül volatilisek. Az árakat befolyásolhatja a likviditáshiány, a makrogazdasági hírek, a szabályozási fejlemények, a tőzsdei leállások, a blokklánc-események, a befektetői hangulat, a tőkeáttételi tevékenység vagy a piaci manipuláció.";
$risk_p_vol_2 = "A volatilitás gyors veszteségeket, hirtelen ártávolságokat, csúszást, likvidálási eseményeket vagy a tranzakciók várt árakon történő végrehajtásának képtelenségét eredményezheti.";
$risk_h2_ai = "AI jelzések korlátai";
$risk_p_ai_1 = "A mesterséges intelligencia rendszerek nagy mennyiségű piaci adatot elemezhetnek, de nem tudják kiküszöbölni a bizonytalanságot.";
$risk_p_ai_2 = "Az AI alapú mutatók, kereskedési jelzések, piaci osztályozások és prediktív modellek hiányosak, késleltetettek, helytelenek vagy alkalmatlanok lehetnek a felhasználó személyes pénzügyi helyzetéhez.";
$risk_p_ai_3 = "A felhasználóknak nem szabad kizárólag bármely AI jelzésre hagyatkozniuk kereskedési, befektetési vagy pénzügyi döntések meghozatalakor.";
$risk_h2_tech = "Technológiai és végrehajtási kockázat";
$risk_p_tech_1 = "A kereskedési technológiát befolyásolhatják internetkapcsolati problémák, szerverleállások, késleltetés, szoftverhibák, API-hibák, tőzsdei üzemszünetek, hibás adatfolyamok vagy harmadik fél infrastruktúra-korlátozásai.";
$risk_p_tech_2 = "A $site_name nem garantálja a megszakítás nélküli hozzáférést az adatokhoz, jelzésekhez, platformfunkciókhoz, harmadik fél rendszerekhez vagy végrehajtási környezetekhez.";
$risk_h2_liquidity = "Likviditási és tőzsdei kockázat";
$risk_p_liq_1 = "A likviditás jelentősen eltérhet a tőzsdék és a digitális eszközök között. Egyes piacokon alacsony megbízáskönyv-mélység, széles spreadek, késleltetett végrehajtás vagy éles árváltozások fordulhatnak elő stresszes időszakokban.";
$risk_p_liq_2 = "A harmadik fél tőzsdék díjakat, korlátokat, korlátozásokat, fiókfelülvizsgálatokat, kifizetési késedelmeket, kereskedési felfüggesztéseket vagy földrajzi korlátozásokat vezethetnek be.";
$risk_h2_regulatory = "Szabályozási kockázat";
$risk_p_reg_1 = "A digitális eszközökre vonatkozó szabályozás gyorsan változhat, és országonként, régiónként és joghatóságonként eltérhet.";
$risk_p_reg_2 = "A szabályozási változások befolyásolhatják a piaci hozzáférést, az eszközök rendelkezésre állását, a tőzsdei működést, a jelentési kötelezettségeket, az adózást, a kereskedési korlátozásokat vagy a platform funkcionalitását.";
$risk_h2_user_responsibility = "Felhasználói felelősség";
$risk_p_user_1 = "A felhasználók kizárólagosan felelősek a kockázatok értékeléséért, az alkalmazandó törvények megértéséért, pénzügyi körülményeik felülvizsgálatáért és önálló döntések meghozataláért.";
$risk_p_user_2 = "A $site_name nem nyújt személyre szabott pénzügyi, befektetési, jogi, könyvelési vagy adótanácsadást.";
$risk_h2_advice = "Kérjen szakmai tanácsot";
$risk_p_advice_1 = "A felhasználóknak konzultálniuk kell szakképzett szakemberekkel, mielőtt jelentős pénzügyi döntéseket hoznak kriptovalutával, kereskedési rendszerekkel, automatizált technológiákkal vagy digitális eszközbefektetésekkel kapcsolatban.";
$risk_p_advice_2 = "A weboldal használatával a felhasználók elismerik, hogy megértik a digitális eszközök piacaival kapcsolatos kockázatokat, és felelősséget vállalnak saját döntéseikért.";
// EXCHANGES PAGE
$exchanges_h1 = "Támogatott tőzsdék";
$exchanges_intro_1 = "A $site_name-t egy több piacra kiterjedő intelligencia-megközelítés köré tervezték, amely a digitális eszközök tevékenységét a kriptovaluta-kereskedési környezetek széles skálájában értékeli.";
$exchanges_intro_2 = "A modern kriptopiacok számos tőzsdén, likviditási szolgáltatón, derivatíva-helyszínen és kereskedési ökoszisztémán keresztül működnek. A tevékenység megértése ezekben a környezetekben elengedhetetlen az átfogó piaci intelligencia felépítéséhez.";
$exchanges_h2_philosophy = "Piaci lefedettségi filozófia";
$exchanges_p_phil_1 = "Ahelyett, hogy egyetlen helyszínre támaszkodna, a $site_name a piac egészére kiterjedő elemzés koncepciója köré épült.";
$exchanges_p_phil_2 = "A kriptovaluta árazása, a likviditási feltételek, a volatilitási viselkedés és az intézményi tevékenység gyakran eltér a tőzsdék között. A szélesebb piaci feltételek megfigyelésével az elemzési modellek további kontextust nyerhetnek az újonnan megjelenő trendekről és a lehetséges anomáliákról.";
$exchanges_h2_spot = "Azonnali piaci figyelés";
$exchanges_p_spot_1 = "Az azonnali tőzsdék a globális digitális eszköz-tevékenység jelentős részét képviselik.";
$exchanges_p_spot_2 = "A piaci intelligencia rendszerek értékelhetik az azonnali piaci adatokat, beleértve:";
$exchanges_li_spot_1 = "Ártevékenység";
$exchanges_li_spot_2 = "Likviditásmélység";
$exchanges_li_spot_3 = "Megbízáskönyv-struktúra";
$exchanges_li_spot_4 = "Kereskedési volumen";
$exchanges_li_spot_5 = "Vételi-eladási spread viselkedés";
$exchanges_li_spot_6 = "Piaci egyensúlyhiány-feltételek";
$exchanges_h2_deriv = "Derivatíva piacok";
$exchanges_p_deriv_1 = "A kriptovaluta derivatívák egyre fontosabb szerepet játszanak a szélesebb digitális eszköz-ökoszisztémában.";
$exchanges_p_deriv_2 = "A határidős ügyletek, az örökös szerződések, az opciók és a tőkeáttételes kereskedési tevékenység befolyásolhatja a piaci hangulatot, a volatilitási feltételeket és az irányított momentumot.";
$exchanges_p_deriv_3 = "Az elemzési infrastruktúra a derivatívákkal kapcsolatos információkat is értékelheti a szélesebb piaci feltételek felmérésekor.";
$exchanges_h2_liquidity = "Likviditáselemzés";
$exchanges_p_liq_1 = "A likviditás továbbra is a piaci stabilitást és a végrehajtás minőségét befolyásoló egyik legfontosabb tényező.";
$exchanges_p_liq_2 = "A $site_name elemezheti a likviditási feltételeket több kereskedési helyszínen a következők azonosítására:";
$exchanges_li_liq_1 = "Likviditás-koncentráció";
$exchanges_li_liq_2 = "Hirtelen likviditáskivonás";
$exchanges_li_liq_3 = "Megbízáskönyv-nyomás";
$exchanges_li_liq_4 = "Piaci egyensúlyhiány-események";
$exchanges_li_liq_5 = "Szokatlan kereskedési viselkedés";
$exchanges_h2_availability = "Tőzsde rendelkezésre állása";
$exchanges_p_avail_1 = "A tőzsde rendelkezésre állása a földrajzi elhelyezkedéstől, a joghatóságtól, a fiók jogosultságától, a szabályozási követelményektől és a technikai korlátozásoktól függően változhat.";
$exchanges_p_avail_2 = "Bizonyos tőzsdék vagy szolgáltatások nem feltétlenül állnak rendelkezésre minden felhasználó számára, és saját korlátozásokat, ellenőrzési követelményeket, díjakat és üzemeltetési szabályzatokat vezethetnek be.";
$exchanges_h2_third = "Harmadik fél platformok";
$exchanges_p_third_1 = "A tőzsdékre, likviditási helyszínekre, brókerekre, letétkezelőkre vagy piaci szolgáltatókra való bármilyen hivatkozás kizárólag tájékoztató célokat szolgál.";
$exchanges_p_third_2 = "A $site_name nem tulajdonosa, nem üzemelteti, nem ellenőrzi és nem garantálja a harmadik fél tőzsdék szolgáltatásait.";
$exchanges_p_third_3 = "A felhasználók továbbra is felelősek bármely tőzsde, kereskedési helyszín vagy digitális eszköz szolgáltatás felhasználás előtti értékeléséért.";
$exchanges_h2_monitoring = "Folyamatos piacfigyelés";
$exchanges_p_mon_1 = "A kriptovaluta piacok folyamatosan működnek, gyakran napi huszonnégy órában, hetente hét napon.";
$exchanges_p_mon_2 = "Ahogy a piaci struktúra fejlődik, új tőzsdék jelennek meg, a likviditás vándorol, és a kereskedési tevékenység változik.";
$exchanges_p_mon_3 = "A $site_name folyamatosan törekszik a változó piaci feltételek iránti tudatosság fenntartására a digitális eszköz-ökoszisztéma széles körű elemzési lefedettsége révén.";

// ==========================================
// RISK WARNING PAGE
// ==========================================
$page_title_risk_warning = "Kockázati figyelmeztetés | $site_name";
$page_description_risk_warning = "Ismerje meg az automatizált kriptokereskedés kockázatait a $site_name-mal, beleértve a piaci volatilitást, a végrehajtási kockázatot és a szabályozási szempontokat.";
$risk_warning_breadcrumb_name = "Kockázati figyelmeztetés";
$risk_warning_title = "Kockázati figyelmeztetés";
$risk_warning_intro = "A kockázatok megértése az első lépés a magabiztos kereskedés felé.";

$risk_warning_ai_heading = "Hogyan segít az AI rendszerünk a kockázatkezelésben:";
$risk_warning_ai_1 = "<strong>Algoritmikus hatékonyság és érzelemmentes kereskedés:</strong> Fejlett algoritmusok elemzik a piaci jelzéseket, hogy objektíven, optimális pillanatokban hajtsanak végre kereskedéseket.";
$risk_warning_ai_2 = "<strong>Adatvezérelt stratégiák:</strong> A stratégiák ellenőrzött piaci mintákon és valós idejű elemzésen alapulnak, nem találgatáson.";
$risk_warning_ai_3 = "<strong>Rugalmas beállítások és teljes kontroll:</strong> Bármikor módosíthatja kockázati paramétereit. Kövesse nyomon az összes egyenleget és kereskedést átláthatóan irányítópultján, rejtett díjak nélkül és korlátozásmentes kifizetésekkel.";

$risk_warning_disclaimer = "<strong>Jognyilatkozat:</strong> A kereskedés mindig kockázattal jár. Az automatizált rendszerek (beleértve az AI-t) nem garantálnak nyereséget, meghibásodhatnak szoftverhibák vagy váratlan piaci események miatt, és felhasználói felügyeletet igényelnek. A múltbeli teljesítmény nem jelzi a jövőbeli eredményeket. Ez a platform kizárólag tájékoztatási és marketing célokat szolgál, és nem nyújt pénzügyi tanácsadást.";

$risk_warning_s1_heading = "1. Általános és kriptovaluta piaci kockázatok";
$risk_warning_s1_intro = "A kriptovaluták rendkívül volatilis, spekulatív eszközök, amelyek 24/7 működnek minimális szabályozási felügyelet mellett a legtöbb joghatóságban.";
$risk_warning_s1_1 = "Az értékek drámaian ingadozhatnak rövid időn belül, ami a befektetett tőke teljes elvesztéséhez vezethet.";
$risk_warning_s1_2 = "A piaci értékeket erősen befolyásolhatják a szabályozási frissítések, a technikai fejlesztések, a biztonsági incidensek vagy a szélesebb makrogazdasági események.";
$risk_warning_s1_3 = "Bizonyos eszközök teljesen elveszíthetik értéküket. Csak olyan pénzeszközöket fektessen be, amelyek elvesztését megengedheti magának.";

$risk_warning_s2_heading = "2. Végrehajtási, likviditási és tőkeáttételi kockázatok";
$risk_warning_s2_1 = "<strong>Piaci volatilitás és likviditás:</strong> A szélsőséges árváltozások (napi 10–20%+) vagy az alacsony likviditás (különösen a kisebb érméknél) késedelmekhez, platformüzemszünetekhez és súlyos végrehajtási csúszáshoz vezethetnek. A stop-loss megbízások nem garantálhatják a veszteséghatárokat szélsőséges körülmények között.";
$risk_warning_s2_2 = "<strong>Tőkeáttételi és fedezeti kockázatok:</strong> A tőkeáttételes termékek felerősítik mind a nyereséget, mind a veszteséget, ami azt jelenti, hogy több pénzt veszíthet, mint kezdeti befizetése. A lakossági befektetői számlák megközelítőleg 70–80%-a veszít pénzt tőkeáttételes termékek kereskedésekor.";

$risk_warning_s3_heading = "3. Technikai, kiberbiztonsági és harmadik féllel kapcsolatos kockázatok";
$risk_warning_s3_1 = "<strong>Technikai tényezők:</strong> Az online kereskedés eredendően magában foglalja az internetkapcsolat megszakadásának, a hardver-/szoftverhibáknak és a szolgáltatás elérhetetlenségének kockázatait.";
$risk_warning_s3_2 = "<strong>Kiberbiztonság:</strong> A kriptovaluta-fiókok gyakori célpontjai az adathalászatnak, a rosszindulatú programoknak és a hackertámadásoknak. A tranzakciók visszavonhatatlanok; a hitelesítő adatai kompromittálása állandó veszteséghez vezethet.";
$risk_warning_s3_3 = "<strong>Harmadik fél platformok:</strong> Ez a weboldal harmadik fél platformokhoz kapcsolhatja a felhasználókat. Nem ellenőrizzük, nem támogatjuk és nem garantáljuk azok biztonságát, működését vagy fizetőképességét. Mindig végezze el saját alapos vizsgálatát, mielőtt pénzeszközöket helyezne el külső platformokon.";

$risk_warning_s4_heading = "4. Szabályozási, adózási és záró rendelkezések";
$risk_warning_s4_1 = "<strong>Jogi megfelelés és adók:</strong> A szabályozási keretek nagymértékben eltérnek és gyorsan változnak. A felhasználók kizárólagosan felelősek azért, hogy kereskedési tevékenységük megfeleljen a helyi törvényeknek, és teljesítsék saját adókötelezettségeiket.";
$risk_warning_s4_2 = "<strong>Nincs nyereséggarancia:</strong> Nem létezik \"biztonságos\" vagy kockázatmentes kriptokereskedés. Bármilyen hozamérték vagy teljesítménypélda tisztán hipotetikus.";
$risk_warning_s4_3 = "<strong>Alkalmasság:</strong> Ha nem érti teljesen a kockázatokat, alapvető pénzeszközökre támaszkodik, vagy kölcsönpénzzel kereskedik, a kriptokereskedés nem alkalmas Önnek. Bizonytalanság esetén forduljon független, engedéllyel rendelkező pénzügyi tanácsadóhoz.";

$risk_warning_contact = "<strong>Kapcsolat:</strong> Ha bármilyen kérdése van ezzel a nyilatkozattal kapcsolatban, vagy kérdést szeretne feltenni, kérjük, forduljon hivatalos ügyfélszolgálati csapatunkhoz weboldalunk kapcsolatfelvételi űrlapján keresztül.";
$footer_risk_warning = "Kockázati figyelmeztetés";

$lang_loaded = true;
