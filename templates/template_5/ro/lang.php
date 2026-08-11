<?php
require __DIR__ . '/../lang.php';

// Identity / config variables are intentionally NOT overridden here — they are inherited
// as-is from the root lang.php so brand/pricing swaps still work correctly at deploy time:
// $site_name, $site_url, $site_domain, $app_price, $app_currency, $rating_value,
// $rating_count, $review_count, $country_name, $support_email, $institutional_email.

$site_lang = 'ro-RO';
$form_language = 'ro';

// Reviews
$review_1_author = "Investitor Privat";
$review_2_author = "Trader Independent";
$review_3_author = "Trader de Active Digitale";
$review_4_author = "Căutător de Venit Pasiv";

// META TITLE / DESCRIPTION (per page)
$home_meta_title = "$site_name — Site Oficial | Platformă de Tranzacționare";
$home_meta_description = "$site_name ⭐ — platformă inteligentă de tranzacționare AI pentru analize de piață în timp real și semnale clare de tranzacționare ⚡ Încercați instrumentele și analizele noastre inteligente cu un tur ghidat.";

$quiz_consultant_name = 'Mia';
$quiz_consultant_role = 'Asistent de Înregistrare';

$quiz_text_welcome   = "Bună! Sunt $quiz_consultant_name, asistentul tău personal de înregistrare la $site_name. Vești excelente! Accesul tău este oficial aprobat în prealabil. Te rog să ne permiți să îți configurăm profilul profesional acum!";
$quiz_text_q1 = "Pentru a asigura conformitatea completă cu reglementările legale, te rugăm să confirmi țara actuală de reședință: $country_name";
$quiz_text_a1_yes    = "Da, aceasta este reședința mea actuală";
$quiz_text_a1_no     = "Nu";

$quiz_text_q2 = "Perfect. Te rugăm să selectezi categoria de vârstă corespunzătoare pentru a găsi cele mai potrivite instrumente financiare:";

$quiz_text_q3        = "Există un cont bancar activ sau un card de credit disponibil pentru a primi plăți regulate din dividende zilnice?";
$quiz_text_a3_yes    = "Da, un cont activ este disponibil";
$quiz_text_a3_no     = "Nu este disponibil încă";

$quiz_text_q4        = "Te rugăm să specifici sursa principală de venit personal. (Acest parametru ajută la personalizarea setărilor de management al riscului din sistem).";
$quiz_text_a4_1      = "Angajat / Persoană Fizică Autorizată";
$quiz_text_a4_2      = "Venit Pasiv / Economii Personale";
$quiz_text_a4_3      = "Alte surse";

$quiz_text_q5 = "Grozav! Ultimul pas este o scurtă verificare telefonică din partea managerului nostru pentru a-ți confirma înregistrarea. Apelurile se fac între 11:00 și 20:00. Vei putea prelua apelul?";
$quiz_text_a5_yes    = "Da, această oră este convenabilă pentru apel";
$quiz_text_a5_no     = "Vă rog să inițiați apelul imediat";

$quiz_text_loader    = "Se analizează opțiunile solicitate și se inițializează parametrii siguri de configurare a contului...";
$quiz_text_final_ttl = "Cont Autorizat cu Succes! 🎉 Spațiul de lucru digital securizat este complet configurat. Te rugăm să finalizezi pașii finali de verificare de mai jos pentru a garanta plățile zilnice:";

$quiz_placeholder_fname = "Prenume";
$quiz_placeholder_lname = "Nume";
$quiz_placeholder_email = "Adresă de Email";
$quiz_placeholder_phone = "Număr de Telefon";
$quiz_btn_submit = "Activează Tranzacționarea";
$quiz_text_typing       = "scrie un mesaj...";
$quiz_text_processing   = "Se procesează cererea...";

$about_meta_title = "Despre $site_name | Infrastructură de Tranzacționare Cripto Bazată pe AI";
$about_meta_description = "Află mai multe despre $site_name, o infrastructură avansată de tranzacționare cripto bazată pe AI, concentrată pe analize predictive, informații de piață, monitorizarea volatilității și cercetarea activelor digitale.";

$contact_meta_title = "Contactează $site_name | Solicită Acces la Platforma de Tranzacționare AI";
$contact_meta_description = "Contactează $site_name pentru a solicita acces, a întreba despre infrastructura de tranzacționare cripto bazată pe AI, piețele acceptate, informații despre active digitale sau înregistrarea pe platformă.";

$terms_meta_title = "Termeni și Condiții | Termenii Site-ului și Platformei $site_name";
$terms_meta_description = "Citește Termenii și Condițiile $site_name referitoare la utilizarea site-ului, conținutul informațional, infrastructura de tranzacționare AI, responsabilitatea utilizatorului, serviciile terților și limitările de risc.";

$privacy_meta_title = "Politica de Confidențialitate | Protecția Datelor și Confidențialitatea Utilizatorului $site_name";
$privacy_meta_description = "Citește Politica de Confidențialitate $site_name pentru a înțelege cum colectăm, folosim, protejăm, stocăm și gestionăm informațiile personale trimise prin site-ul nostru de infrastructură de tranzacționare cripto AI.";

$cookies_meta_title = "Politica privind Cookie-urile | Cookie-uri și Urmărire Site $site_name";
$cookies_meta_description = "Află cum utilizează $site_name cookie-urile, tehnologiile de analiză, instrumentele de urmărire a performanței și serviciile de funcționalitate a site-ului pentru a îmbunătăți experiența utilizatorului și performanța platformei.";

$aml_meta_title = "Politica AML | Standarde de Prevenire a Spălării Banilor $site_name";
$aml_meta_description = "Revizuiește Politica AML $site_name, inclusiv utilizarea responsabilă a activelor digitale, conștientizarea privind spălarea banilor, activitățile interzise, principiile de monitorizare și așteptările privind conformitatea.";

$risk_meta_title = "Dezvăluirea Riscurilor | Declarația de Risc pentru Tranzacționare Cripto $site_name";
$risk_meta_description = "Revizuiește Dezvăluirea Riscurilor $site_name pentru a înțelege volatilitatea criptomonedelor, incertitudinea tranzacționării, limitările semnalelor AI, riscul de piață, riscul de lichiditate și responsabilitatea utilizatorului.";

$exchanges_meta_title = "Schimburi Suportate | Acoperirea Informațiilor de Piață $site_name";
$exchanges_meta_description = "Explorează tipurile de schimburi de criptomonede, platformele de lichiditate și piețele de active digitale monitorizate de infrastructura de informații de piață bazată pe AI a $site_name.";


$about_breadcrumb_name = "Despre $site_name";
$contact_breadcrumb_name = "Contactează $site_name";
$terms_breadcrumb_name = "Termeni și Condiții";
$privacy_breadcrumb_name = "Politica de Confidențialitate";
$cookies_breadcrumb_name = "Politica de Cookie";
$aml_breadcrumb_name = "Politica AML";
$risk_breadcrumb_name = "Dezvăluirea Riscurilor";
$exchanges_breadcrumb_name = "Schimburi Suportate";

$hero_text = "Experimentează o nouă eră a tranzacționării cu platforma noastră avansată de tranzacționare cripto. Cu tehnologia AI a $site_name, îți poți optimiza randamentele și poți lua decizii de investiții informate.";

// HEADER / NAV / FOOTER
$logo_subtitle = "Infrastructură de Tranzacționare AI";
$nav_signals = "Semnale";
$nav_reviews = "Recenzii";
$nav_about = "Despre";
$nav_exchanges = "Schimburi";
$nav_exchanges_full = "Schimburi Suportate";
$nav_risk = "Risc";
$nav_risk_full = "Dezvăluirea Riscurilor";
$nav_faq = "Întrebări Frecvente";
$nav_privacy = "Politica de Confidențialitate";
$nav_terms = "Termeni și Condiții";
$nav_cookies = "Politica de Cookie";
$nav_cookies_short = "Cookie-uri";
$nav_aml = "Politica AML";
$nav_contact_us = "Contactează-ne";
$nav_contact = "Contact";
$nav_get_started = "Începe Acum";
$header_ai_status = "Nucleu AI Operațional";
$header_menu_aria = "Meniu";
$footer_platform = "Platformă";
$footer_resources = "Resurse";
$footer_contact_title = "Contact";
$footer_ai_signals = "Semnale AI";
$footer_about_link = "Despre $site_name";
$footer_description = "$site_name este o infrastructură avansată de tranzacționare cripto bazată pe AI, concentrată pe analize predictive, informații de piață la nivel instituțional, modelarea volatilității, sisteme de execuție neuronale și managementul automatizat al riscului.";
$footer_monitoring = "Monitorizare 24/7 a Infrastructurii AI";
$footer_global_markets = "Piețe Globale de Active Digitale";
$footer_disclaimer_title = "Dezvăluirea Riscurilor";
$footer_disclaimer_p1 = "Tranzacționarea criptomonedelor și investițiile în active digitale implică riscuri financiare substanțiale și s-ar putea să nu fie potrivite pentru toți investitorii. Volatilitatea pieței, perturbările de lichiditate, defecțiunile tehnologice, modificările de reglementare și condițiile macroeconomice pot avea un impact semnificativ asupra performanței activelor.";
$footer_disclaimer_p2 = "$site_name oferă infrastructură analitică bazată pe AI, informații de piață predictive și tehnologii de tranzacționare automatizate. Nimic din conținutul acestui site nu constituie sfaturi financiare, de investiții, juridice sau fiscale.";
$footer_disclaimer_p3 = "Performanța trecută nu garantează rezultatele viitoare. Utilizatorii trebuie să evalueze independent riscurile înainte de a se angaja pe piețele de criptomonede sau de a folosi sisteme de tranzacționare automatizate.";
$footer_rights = "Toate Drepturile Rezervate.";
$footer_lang_label = "Limbă";

// HOME FORM
$home_form_fname = "Prenume";
$home_form_lname = "Nume";
$home_form_email = "Email";
$home_form_submit_access = "Obține Acces";
$home_form_submit_platform = "Solicită Acces la Platformă";

// CONTACT FORM
$contact_form_fname = "Prenume";
$contact_form_lname = "Nume";
$contact_form_email = "Email";
$contact_form_submit = "Solicită Acces";

// HOME LABELS
$home_label_ai_confidence = "Încredere AI";
$home_label_update_speed = "Viteza de Actualizare";
$home_label_market_mode = "Mod de Piață";
$home_label_market_condition = "Condiția Pieței";
$home_label_buyer_activity = "Activitate Cumpărători";
$home_label_market_activity = "Activitate Piață";
$home_label_risk_level = "Nivel de Risc";
$home_label_updated = "Actualizat";
$home_label_live_analysis = "ANALIZĂ LIVE";

// JS
$home_js_sec_ago = "sec în urmă";
$js_sec_ago = "sec în urmă";
$js_close_notification = "Închide notificarea";

$js_signal_long_direction = "Probabilitate de tendință ascendentă în creștere";
$js_signal_long_market = "Expansiune Controlată";
$js_signal_long_pressure_label = "Presiunea Lichidității";
$js_signal_long_pressure = "Bullish";

$js_signal_short_direction = "Presiune de scădere în creștere";
$js_signal_short_market = "Instabilitate Ridicată";
$js_signal_short_pressure_label = "Presiunea Riscului";
$js_signal_short_pressure = "Bearish";

$js_signal_watch_direction = "Zonă de consolidare detectată";
$js_signal_watch_market = "Consolidare Neutră";
$js_signal_watch_pressure_label = "Flux Instituțional";
$js_signal_watch_pressure = "Stabil";

$js_hero_long_pair = "Expansiunea Momentului BTC/USD";
$js_hero_long_regime = "Bullish";
$js_hero_long_feed_1 = "Expansiunea lichidității BTC detectată";
$js_hero_long_feed_2 = "Presiunea fluxului de comenzi devine pozitivă";
$js_hero_long_feed_3 = "Modelul AI confirmă continuarea ascendentă";

$js_hero_watch_pair = "Compresia Volatilității ETH/USD";
$js_hero_watch_regime = "Neutru";
$js_hero_watch_feed_1 = "Zonă de compresie ETH detectată";
$js_hero_watch_feed_2 = "AI așteaptă o confirmare mai puternică";
$js_hero_watch_feed_3 = "Lichiditatea rămâne stabilă";

$js_hero_short_pair = "Expansiunea Riscului SOL/USD";
$js_hero_short_regime = "Risk-Off";
$js_hero_short_feed_1 = "Presiune de scădere SOL detectată";
$js_hero_short_feed_2 = "Modelul de risc indică expansiunea volatilității";
$js_hero_short_feed_3 = "AI reduce expunerea ascendentă";

// JS — live user popup actions
$js_live_action_1 = "s-a alăturat $site_name din";
$js_live_action_2 = "a solicitat acces la platformă din";
$js_live_action_3 = "a pornit monitorizarea semnalelor AI din";
$js_live_action_4 = "a activat analiza de piață din";
$js_live_action_5 = "a deschis panoul instituțional din";
$js_live_action_6 = "s-a conectat la $site_name din";

// HOME PAGE
$home_hero_label = "Platformă Cripto AI Pentru Orice Nivel de Experiență";
$home_hero_title = "Platforma $site_name";
$home_hero_desc = "$site_name ajută începătorii și traderii experimentați să exploreze piețele cripto cu analize bazate pe AI, monitorizare a pieței în timp real, instrumente de conștientizare a riscurilor și suport ghidat.";
$home_hero_feat_1 = "Informații simple de piață AI pentru utilizatorii noi";
$home_hero_feat_2 = "Monitorizare cripto și semnale în timp real";
$home_hero_feat_3 = "Instrumente de conștientizare a riscurilor pentru decizii mai bune";
$home_hero_feat_4 = "Analize avansate pentru traderii experimentați";
$home_btn_request_access = "Obține Acces la Platformă";
$home_btn_view_signals = "Vezi Semnalele AI";
$home_trust_data_label = "Puncte de Date de Piață Analizate";
$home_trust_confidence_label = "Încrederea Medie a Semnalului";
$home_trust_monitoring_label = "Monitorizare de Piață AI";
$home_terminal_title = "Vedere de Piață AI Ghidată $site_name";
$home_terminal_insight_label = "Analiza Actuală a Pieței AI";
$home_terminal_feed_1 = "Activitatea pieței BTC prezintă un momentum mai puternic";
$home_terminal_feed_2 = "Mișcarea ETH este monitorizată pentru confirmare";
$home_terminal_feed_3 = "Asistentul AI evidențiază o posibilă zonă de oportunitate";
$home_trust_strip_1 = "Analize AI Pentru Începători și Traderi Experimentați";
$home_trust_strip_2 = "Monitorizare 24/7 a Pieței de Criptomonede";
$home_trust_strip_3 = "Analiza Riscurilor și Oportunităților în Timp Real";
$home_trust_strip_4 = "Acces Ghidat la Instrumente Avansate de Tranzacționare";
$home_signals_eyebrow = "NUCLEU AI LIVE $site_name";
$home_signals_title = "Semnale de Piață AI în Timp Real Pentru Decizii Cripto Mai Inteligente";
$home_signals_desc = "$site_name monitorizează continuu activitatea pieței criptomonedelor, volatilitatea, condițiile de lichiditate, tendințele sentimentului și datele blockchain pentru a genera informații și semnale de piață în timp real, atât pentru începători cât și pentru traderii experimentați.";
$home_signals_terminal_title = "Motorul de Semnale AI $site_name";
$home_signal_btc_sub = "Momentum Pozitiv Detectat";
$home_signal_btc_dir = "Probabilitate de tendință ascendentă în creștere";
$home_signal_btc_market = "Momentum Pozitiv";
$home_signal_btc_activity = "Puternică";
$home_signal_eth_sub = "Așteptare Confirmare de Piață";
$home_signal_eth_dir = "Mișcare laterală detectată";
$home_signal_eth_market = "Tendință Neutră";
$home_signal_eth_activity = "Stabilă";
$home_signal_sol_sub = "Risc Crescut de Piață Detectat";
$home_signal_sol_dir = "Presiune de scădere în creștere";
$home_signal_sol_market = "Volatilitate Ridicată";
$home_signal_sol_risk = "Crescut";
$home_why_eyebrow = "DE CE $site_name?";
$home_why_title = "Instrumente Cripto AI Create Pentru Orice Nivel de Experiență";
$home_why_desc_1 = "$site_name ajută utilizatorii să înțeleagă mai bine piețele de criptomonede prin intermediul inteligenței artificiale, monitorizării în timp real, informațiilor de piață și instrumentelor de conștientizare a riscurilor. Fie că explorezi cripto pentru prima dată sau ai deja experiență în tranzacționare, platforma este concepută pentru a face analiza pieței mai accesibilă și mai ușor de înțeles.";
$home_why_desc_2 = "Infrastructura $site_name evaluează continuu activitatea pieței, mișcările prețurilor, condițiile de lichiditate, tendințele sentimentului și datele blockchain pentru a identifica oportunitățile emergente și schimbările condițiilor de piață. Utilizatorii noi pot beneficia de suport ghidat, în timp ce traderii experimentați pot explora instrumente avansate de analiză și informații de piață bazate pe AI.";
$home_flow_1 = "Monitorizarea Pieței";
$home_flow_2 = "Analiză AI";
$home_flow_3 = "Detectarea Oportunităților";
$home_flow_4 = "Evaluarea Riscurilor";
$home_flow_5 = "Informații Acționabile";
$home_reviews_eyebrow = "COMUNITATEA $site_name";
$home_reviews_title = "Ce Spun Utilizatorii Despre $site_name";
$home_reviews_desc = "De la utilizatori cripto aflați la început până la traderi experimentați, oamenii folosesbc $site_name pentru a înțelege mai bine condițiile pieței, a explora informații bazate pe AI și a lua decizii în criptomonede cu mai multă claritate.";
$home_review_1_text = "Înainte de a descoperi $site_name, m-am simțit copleșit de cantitatea de informații din spațiul criptomonedelor. Fiecare platformă părea complicată și mereu mă temeam că voi face greșeli. Ceea ce apreciez cel mai mult la $site_name este cât de accesibil pare totul. Informațiile AI m-au ajutat să înțeleg condițiile pieței fără să mă simt pierdut, iar platforma mi-a dat încrederea să încep să învăț în propriul ritm.";
$home_review_1_tag = "Început Sigur și Simplu";
$home_review_badge = "UTILIZATOR VERIFICAT";
$home_review_2_text = "Am petrecut luni de zile uitându-mă la platformele cripto fără să mă simt niciodată suficient de confortabil pentru a face primul pas. $site_name a schimbat complet această experiență. Platforma a făcut informațiile de piață mai ușor de înțeles și nu am simțit niciodată că aș avea nevoie de ani de experiență pentru a utiliza instrumentele. Cel mai mult m-a impresionat echilibrul dintre simplitate și analiza AI puternică.";
$home_review_2_tag = "Experiență de învățare mai ușoară";
$home_review_3_text = "Am testat multe platforme de analiză a pieței, iar $site_name se remarcă deoarece echilibrează accesibilitatea cu o profunzime analitică serioasă. Utilizatorii noi pot înțelege rapid platforma, în timp ce traderii experimentați primesc încă semnale utile de piață, monitorizarea riscurilor și informații cripto în timp real. Acest echilibru este greu de găsit.";
$home_review_3_tag = "Instrumente avansate ușor de utilizat";
$home_review_span_1 = "Utilizator Cripto Nou";
$home_review_span_2 = "Utilizator la Prima Platformă";
$home_review_span_3 = "Trader Cripto Profesionist";
$home_review_1_avatar_alt = "Andrei Popescu, utilizator $site_name";
$home_review_2_avatar_alt = "Mihai Ionescu, utilizator $site_name";
$home_review_3_avatar_alt = "Alexandru Radu, utilizator $site_name";
$home_hero_visual_alt = "Panou de analiză a pieței bazat pe AI pe $site_name";
$home_signal_visual_alt = "Semnal de tranzacționare în timp real generat de AI $site_name";
$home_device_visual_alt = "Analize cripto afișate pe un dispozitiv conectat prin $site_name";
$home_security_visual_alt = "Scut de securitate reprezentând protecția contului $site_name";
$home_contact_eyebrow = "ÎNCEPE CU $site_name";
$home_contact_title = "Explorează Platforma cu Încredere";
$home_contact_section_title = "Explorează Platforma cu Încredere";
$home_contact_desc_1 = "Fie că ești complet nou pe piețele de criptomonede sau ai deja experiență în tranzacționare, $site_name oferă acces la informații de piață bazate pe AI, instrumente de monitorizare în timp real și analize inteligente.";
$home_contact_desc_2 = "Trimite detaliile tale pentru a afla mai multe despre platformă, pentru a explora funcțiile disponibile și pentru a descoperi cum te poate ajuta $site_name să navighezi pe piețele criptomonedelor.";
$home_seo_toggle = "Află Mai Multe Despre Platforma AI $site_name";
$home_seo_h2 = "Platforma AI $site_name Pentru Decizii Mai Inteligente pe Piața Cripto";
$home_seo_p1 = "$site_name este o platformă de criptomonede bazată pe AI, concepută atât pentru începători, cât și pentru traderii experimentați. Platforma combină inteligența artificială, monitorizarea în timp real a pieței și instrumente de analiză avansate.";
$home_seo_p2 = "Spre deosebire de multe platforme de tranzacționare tradiționale care necesită cunoștințe extinse de piață, $site_name este construit pentru a face informațiile complexe de piață mai ușor de înțeles.";
$home_seo_p3 = "Fie că explorezi piețele criptomonedelor pentru prima dată sau ai deja experiență în tranzacționarea activelor digitale, $site_name oferă instrumente inteligente concepute pentru a sprijini o luare de decizii mai informată.";
$home_seo_h3_1 = "Analiză de Piață AI Făcută Accesibilă";
$home_seo_h3_1_p1 = "$site_name folosește inteligența artificială pentru a evalua o gamă largă de indicatori de piață, inclusiv activitatea de tranzacționare, modelele de volatilitate, condițiile de lichiditate, evenimentele blockchain și sentimentul pieței.";
$home_seo_h3_1_p2 = "Modelele AI sunt concepute pentru a se adapta mediilor în schimbare în loc să se bazeze pe presupuneri statice.";
$home_seo_h3_1_p3 = "Deși suficient de avansată pentru traderii experimentați, platforma este de asemenea structurată pentru a rămâne abordabilă pentru noii utilizatori.";
$home_seo_h3_2 = "Semnale de Piață AI în Timp Real";
$home_seo_h3_2_p1 = "$site_name monitorizează continuu piețele de criptomonede și generează informații bazate pe AI privind schimbările din activitatea pieței.";
$home_seo_h3_2_p2 = "Bitcoin, Ethereum, Solana, XRP, Avalanche și alte active digitale majore sunt monitorizate prin modele analitice adaptabile.";
$home_seo_h3_2_p3 = "În loc să se bazeze pe un singur indicator sau pe o valoare izolată, $site_name combină mai multe surse de informații într-un cadru analitic mai larg.";
$home_seo_h3_3 = "Instrumente Inteligente de Conștientizare a Riscurilor";
$home_seo_h3_3_p1 = "Piețele criptomonedelor se pot schimba rapid. $site_name include sisteme de monitorizare bazate pe AI concepute pentru a identifica volatilitatea neobișnuită, condițiile de lichiditate în schimbare și riscurile de piață emergente.";
$home_seo_h3_3_p2 = "Platforma evaluează continuu comportamentul pieței și factorii de risc potențiali, ajutând utilizatorii să înțeleagă mai bine condițiile în schimbare și să ia decizii mai informate.";
$home_seo_h3_3_p3 = "Prin combinarea mai multor niveluri de analiză, $site_name încearcă să îmbunătățească conștientizarea pieței și să ajute utilizatorii să navigheze prin perioadele de incertitudine crescută.";
$home_seo_h3_4 = "Conceput Pentru Piețele Moderne de Criptomonede";
$home_seo_h3_4_p1 = "$site_name combină inteligența artificială, tehnologiile de monitorizare în timp real și instrumentele de analiză avansate într-o singură platformă.";
$home_seo_h3_4_p2 = "Infrastructura evaluează continuu activitatea pieței, evoluțiile blockchain, schimbările de sentiment și tendințele de lichiditate.";
$home_seo_h3_4_p3 = "Pe măsură ce piețele de active digitale continuă să evolueze, instrumentele bazate pe AI pot ajuta utilizatorii să proceseze informațiile mai eficient.";
$home_seo_side_1_label = "Informații AI";
$home_seo_side_1_title = "Analiză de Piață Ușor de Înțeles";
$home_seo_side_1_desc = "Informații bazate pe AI concepute atât pentru noii utilizatori cripto, cât și pentru cei experimentați.";
$home_seo_side_2_label = "Monitorizarea Pieței";
$home_seo_side_2_title = "Urmărire Cripto în Timp Real";
$home_seo_side_2_desc = "Monitorizare continuă a piețelor cripto majore și a condițiilor în schimbare.";
$home_seo_side_3_label = "Conștientizarea Riscurilor";
$home_seo_side_3_title = "Detectare Inteligentă a Riscurilor";
$home_seo_side_3_desc = "Instrumente avansate de monitorizare pentru a evidenția dinamicile în schimbare și volatilitatea.";
$home_seo_side_4_label = "Tehnologie AI";
$home_seo_side_4_title = "Modele Analitice Adaptabile";
$home_seo_side_4_desc = "Sisteme de învățare automată care evaluează continuu datele și tendințele emergente.";
$home_faq_eyebrow = "BAZA DE CUNOȘTINȚE $site_name";
$home_faq_title = "Întrebări Frecvente Despre $site_name";
$home_faq_desc = "Află mai multe despre modul în care funcționează platforma, pentru cine este concepută și cum ajută inteligența artificială utilizatorii.";
$home_faq_q1 = "Am nevoie de experiență în tranzacționare pentru a utiliza $site_name?";
$home_faq_a1 = "Nu. $site_name este concepută pentru utilizatori cu diferite niveluri de experiență, inclusiv pentru cei complet noi. Platforma folosește informații AI și instrumente de monitorizare a pieței pentru a face informațiile complexe mai ușor de înțeles.";
$home_faq_q2 = "Ce face de fapt $site_name?";
$home_faq_a2 = "$site_name analizează continuu piețele criptomonedelor folosind inteligența artificială. Platforma evaluează activitatea, volatilitatea, tendințele de sentiment, lichiditatea și datele blockchain pentru a genera informații și semnale analitice în timp real.";
$home_faq_q3 = "Pot traderii experimentați să folosească $site_name?";
$home_faq_a3 = "Da. Deși platforma este prietenoasă pentru începători, ea oferă de asemenea instrumente de analiză avansată, informații de piață bazate pe AI și monitorizare în timp real care pot fi valoroase pentru participanții experimentați.";
$home_faq_q4 = "Ce criptomonede monitorizează $site_name?";
$home_faq_a4 = "Platforma poate analiza active digitale majore, cum ar fi Bitcoin, Ethereum, Solana, XRP, Avalanche și alte criptomonede tranzacționate pe scară largă.";
$home_faq_q5 = "Cum sunt generate semnalele AI?";
$home_faq_a5 = "$site_name evaluează simultan mai mulți factori de piață, inclusiv volatilitatea, activitatea de tranzacționare, lichiditatea, sentimentul și comportamentul istoric. Modelele AI combină aceste date pentru a identifica schimbările condițiilor și oportunitățile.";
$home_faq_q6 = "Oferă $site_name orientare educațională?";
$home_faq_a6 = "Platforma este concepută pentru a ajuta utilizatorii să înțeleagă mai bine piețele prin analize AI, informații simplificate și acces ghidat. Noii utilizatori pot explora piețele cripto fără cunoștințe tehnice avansate.";
$home_cta_label = "Platformă AI Pregătită";
$home_cta_title = "Începe Să Explorezi $site_name Astăzi";
$home_cta_desc = "Descoperă informații de piață bazate pe AI, monitorizare a criptomonedelor în timp real, instrumente inteligente de conștientizare a riscurilor și analize avansate.";
$home_ticker_text = "Monitorizare Piață AI Activă • Analiză Criptomonede în Timp Real • Momentum Bitcoin în Consolidare • Consolidare Ethereum Detectată • Noi Oportunități Identificate • Sisteme de Monitorizare Risc Online • Informații AI Actualizate Continuu • Creat Pentru Începători și Experimentați";

// ABOUT PAGE
$about_h1 = "Despre $site_name";
$about_p1 = "$site_name este o infrastructură de inteligență artificială de nouă generație, concepută pentru a ajuta participanții de pe piață să înțeleagă mai bine ecosistemul de criptomonede, aflat în rapidă evoluție. Prin combinarea tehnologiilor de machine learning, analiză predictivă, sisteme de informații de piață și procesare a datelor în timp real, $site_name oferă un mediu cuprinzător pentru monitorizarea activității activelor digitale și identificarea evoluțiilor semnificative ale pieței.";
$about_p2 = "Piața de criptomonede operează continuu în multiple schimburi, jurisdicții și furnizori de lichiditate. În fiecare secundă, mii de variabile influențează prețurile, volatilitatea, condițiile de lichiditate și sentimentul investitorilor. $site_name a fost dezvoltat cu obiectivul de a procesa aceste fluxuri complexe de date într-un mod structurat și scalabil.";
$about_h2_vision = "Viziunea din spatele $site_name";
$about_p_vision_1 = "Piețele financiare au devenit din ce în ce mai dependente de date. Metodele tradiționale de analiză se luptă adesea să țină pasul cu volumul de informații generat în ecosistemele moderne de active digitale. $site_name caută să elimine acest decalaj prin aplicarea inteligenței computaționale avansate, sistemelor de monitorizare automatizate și modelelor analitice adaptative.";
$about_p_vision_2 = "Viziunea pe termen lung a $site_name este de a oferi instrumente transparente de informații de piață capabile să ajute utilizatorii să înțeleagă mai bine structura pieței de criptomonede, condițiile de risc și tendințele emergente.";
$about_h2_ai = "Infrastructură de Inteligență Artificială";
$about_p_ai_1 = "La baza $site_name se află un cadru de inteligență artificială multistrat conceput pentru a procesa informații de la numeroase surse de piață simultan.";
$about_p_ai_2 = "Aceste surse pot include:";
$about_li_1 = "Feed-uri de prețuri ale criptomonedelor";
$about_li_2 = "Activitatea registrului de comenzi (Order book)";
$about_li_3 = "Date privind mișcarea lichidității";
$about_li_4 = "Indicatori de volatilitate";
$about_li_5 = "Metrici ale tranzacțiilor blockchain";
$about_li_6 = "Semnale privind sentimentul pieței";
$about_li_7 = "Evoluții macroeconomice";
$about_li_8 = "Activitate de piață instituțională";
$about_p_ai_3 = "Evaluând continuu relațiile dintre aceste variabile, $site_name încearcă să identifice tipare care pot oferi un context valoros asupra pieței.";
$about_h2_risk = "Filosofia Conștientizării Riscului";
$about_p_risk_1 = "Participarea responsabilă pe piețele de criptomonede necesită o înțelegere clară a riscului. $site_name pune accent pe conștientizarea riscului ca o componentă fundamentală a analizei activelor digitale.";
$about_p_risk_2 = "Volatilitatea pieței, fluctuațiile de lichiditate, evenimentele specifice schimbului, evoluțiile de reglementare și condițiile macroeconomice mai ample pot afecta rezultatele pieței. Ca atare, utilizatorii nu ar trebui să se bazeze exclusiv pe o singură sursă de informații atunci când iau decizii.";
$about_h2_global = "Piețe Globale de Active Digitale";
$about_p_global_1 = "Piețele de criptomonede funcționează la nivel global și implică participanți din diverse regiuni, industrii și medii economice. Infrastructura $site_name este concepută pentru a monitoriza multiple segmente de piață simultan, permițând utilizatorilor să observe evoluțiile care apar în diferite părți ale ecosistemului de active digitale.";
$about_p_global_2 = "Această perspectivă mai largă poate contribui la îmbunătățirea conștientizării modificării condițiilor de piață și a tendințelor emergente.";
$about_h2_why = "De Ce Utilizatorii Explorează $site_name";
$about_why_li_1 = "Informații de piață avansate bazate pe AI";
$about_why_li_2 = "Monitorizare cripto în timp real";
$about_why_li_3 = "Infrastructură analitică în stil instituțional";
$about_why_li_4 = "Evaluare multi-factor a pieței";
$about_why_li_5 = "Monitorizarea volatilității și lichidității";
$about_why_li_6 = "Instrumente scalabile de cercetare a activelor digitale";
$about_why_li_7 = "Metodologie analitică conștientă de risc";
$about_h2_forward = "Privind Înainte";
$about_p_forward_1 = "Pe măsură ce piețele de active digitale continuă să se maturizeze, importanța unei infrastructuri analitice avansate este de așteptat să crească. $site_name rămâne concentrat pe dezvoltarea tehnologiilor care susțin o înțelegere mai profundă a pieței, o mai mare transparență și o participare mai informată în cadrul ecosistemului criptomonedelor.";
$about_p_forward_2 = "Prin inovație continuă și cercetare permanentă, $site_name își propune să contribuie la un viitor mai inteligent și mai bazat pe date pentru analiza activelor digitale.";

// CONTACT PAGE
$contact_h1 = "Contactează $site_name";
$contact_intro_1 = "Contactați echipa $site_name pentru a solicita acces la platformă, a întreba despre infrastructura noastră de tranzacționare AI cripto sau a afla mai multe despre mediul nostru de informații de piață privind activele digitale.";
$contact_intro_2 = "Indiferent dacă explorați analize cripto automate, infrastructură de semnal în stil instituțional, monitorizarea volatilității sau informații de piață cu mai multe schimburi, echipa noastră vă poate ajuta să direcționați cererea către departamentul corespunzător.";
$contact_h2_help = "Cum Vă Putem Ajuta";
$contact_li_1 = "Cereri de acces la platformă";
$contact_li_2 = "Întrebări generale despre produs";
$contact_li_3 = "Informații despre infrastructura de tranzacționare AI";
$contact_li_4 = "Întrebări referitoare la informațiile despre activele digitale";
$contact_li_5 = "Întrebări referitoare la declarațiile de risc și conformitate";
$contact_li_6 = "Asistență tehnică sau de înregistrare";
$contact_h2_send = "Trimite o Cerere";
$contact_p_send = "Completați formularul de mai jos și un reprezentant $site_name vă poate contacta cu informații suplimentare.";
$contact_h2_info = "Informații de Contact";
$contact_support_label = "Suport general:";
$contact_institutional_label = "Întrebări instituționale:";
$contact_disclaimer = "Vă rugăm să rețineți că $site_name nu oferă sfaturi financiare, de investiții, fiscale sau juridice personalizate. Toate informațiile sunt furnizate exclusiv în scop tehnologic și informativ.";

// TERMS PAGE
$terms_h1 = "Termeni și Condiții";
$terms_intro_1 = "Acești Termeni și Condiții guvernează accesul la și utilizarea site-ului $site_name, a conținutului, a descrierilor platformei, a formularelor, a comunicărilor și a materialelor informaționale aferente.";
$terms_intro_2 = "Prin accesarea acestui site, utilizatorii recunosc că au citit, au înțeles și sunt de acord cu acești Termeni și Condiții. Dacă un utilizator nu este de acord cu acești termeni, ar trebui să înceteze utilizarea site-ului.";
$terms_h2_informational = "Scop Informativ";
$terms_p_info_1 = "$site_name oferă informații despre infrastructura de tranzacționare cripto bazată pe AI, informații despre piața activelor digitale, monitorizarea volatilității, analiza lichidității și tehnologii conexe.";
$terms_p_info_2 = "Conținutul site-ului este furnizat doar în scopuri informaționale generale și de prezentare tehnologică. Nimic de pe acest site nu trebuie interpretat drept consiliere financiară, de investiții, juridică, fiscală sau ca o garanție a rezultatelor de tranzacționare.";
$terms_h2_no_advice = "Fără Consultanță Financiară";
$terms_p_no_advice_1 = "$site_name nu oferă recomandări personalizate privind cumpărarea, vânzarea, deținerea, tranzacționarea, staking-ul, transferul sau orice altă interacțiune cu orice criptomonedă, token, produs financiar sau activ digital.";
$terms_p_no_advice_2 = "Utilizatorii ar trebui să evalueze independent toate informațiile și să solicite consiliere de la profesioniști calificați înainte de a lua decizii financiare.";
$terms_h2_user_responsibility = "Responsabilitatea Utilizatorului";
$terms_p_user_1 = "Utilizatorii sunt responsabili de propriile decizii, evaluări ale riscurilor, activitatea contului, acțiunile de tranzacționare, conformitatea legală și utilizarea oricăror servicii ale terților.";
$terms_p_user_2 = "Utilizatorii trebuie să se asigure că activitatea privind activele digitale este permisă în jurisdicția lor și că înțeleg toate riscurile aplicabile înainte de a interacționa cu piețele cripto.";
$terms_h2_ai = "AI și Sisteme Analitice";
$terms_p_ai_1 = "$site_name poate descrie sisteme de inteligență artificială, modele predictive, semnale de piață, analize automate sau tehnologii legate de execuție.";
$terms_p_ai_2 = "Aceste sisteme se pot baza pe date de piață, modele statistice, procese de machine learning și surse de informații ale terților. Astfel de sisteme pot fi inexacte, întârziate, incomplete, indisponibile sau inadecvate pentru obiectivele specifice ale unui utilizator.";
$terms_h2_availability = "Fără Garanție de Disponibilitate";
$terms_p_avail_1 = "$site_name nu garantează accesul neîntrerupt la site, disponibilitatea continuă a platformei, funcționarea fără erori, informații exacte despre piață sau disponibilitatea oricărei funcții specifice.";
$terms_p_avail_2 = "Serviciile, conținutul, paginile, formularele, integrările sau descrierile platformei pot fi modificate, suspendate sau întrerupte în orice moment.";
$terms_h2_third_party = "Servicii Terțe";
$terms_p_tp_1 = "Site-ul poate face referire la schimburi de la terți, platforme de lichiditate, furnizori de analiză, instrumente de comunicare, servicii de găzduire sau furnizori de infrastructură tehnică.";
$terms_p_tp_2 = "$site_name nu controlează platformele terțe și nu este responsabil pentru disponibilitatea acestora, comisioane, politici, restricții ale contului, proceduri de conformitate, defecțiuni tehnice sau pierderile utilizatorilor.";
$terms_h2_prohibited = "Utilizare Interzisă";
$terms_p_prohibited = "Utilizatorii nu trebuie să utilizeze acest site sau orice tehnologie aferentă pentru scopuri ilegale, abuzive, frauduloase, manipulatoare sau dăunătoare.";
$terms_li_1 = "Încercarea de acces neautorizat";
$terms_li_2 = "Trimiterea de informații false sau înșelătoare";
$terms_li_3 = "Utilizarea site-ului pentru activități financiare ilegale";
$terms_li_4 = "Interferarea cu securitatea sau funcționalitatea site-ului";
$terms_li_5 = "Copierea sau utilizarea greșită a conținutului site-ului fără permisiune";
$terms_li_6 = "Încercarea de a ocoli conformitatea sau controalele tehnice";
$terms_h2_ip = "Proprietate Intelectuală";
$terms_p_ip_1 = "Designul site-ului, textul, branding-ul, elementele de interfață, grafica, structura și materialele aferente sunt deținute de sau licențiate către $site_name, cu excepția cazului în care se specifică altfel.";
$terms_p_ip_2 = "Utilizatorii nu pot reproduce, distribui, modifica sau exploata comercial materialele site-ului fără autorizația corespunzătoare.";
$terms_h2_liability = "Limitarea Răspunderii";
$terms_p_liab_1 = "În măsura maximă permisă de legea aplicabilă, $site_name nu va fi responsabil pentru pierderile rezultate din tranzacționarea cu active digitale, volatilitatea pieței, problemele tehnice, defecțiunile platformelor terțe, datele inexacte, deciziile utilizatorului sau încrederea în conținutul site-ului.";
$terms_p_liab_2 = "Utilizatorii accesează și utilizează acest site pe propriul lor risc.";
$terms_h2_changes = "Modificări Ale Acestor Termeni";
$terms_p_changes_1 = "$site_name poate actualiza acești Termeni și Condiții în orice moment. Termenii actualizați pot fi publicați pe această pagină.";
$terms_p_changes_2 = "Utilizarea continuă a site-ului după modificări înseamnă că utilizatorii recunosc și acceptă termenii actualizați.";

// PRIVACY PAGE
$privacy_h1 = "Politica de Confidențialitate";
$privacy_intro_1 = "$site_name respectă confidențialitatea utilizatorilor și se angajează să trateze informațiile personale în mod responsabil, transparent și sigur.";
$privacy_intro_2 = "Această Politică de Confidențialitate explică ce informații pot fi colectate atunci când utilizatorii vizitează acest site, trimit formulare de contact, solicită acces sau interacționează cu conținutul și comunicările referitoare la platforma $site_name.";
$privacy_h2_collect = "Informații pe Care Le Putem Colecta";
$privacy_p_collect_1 = "$site_name poate colecta informații transmise voluntar de utilizatori prin formularele de pe site sau canalele de comunicare.";
$privacy_li_fname = "Prenume";
$privacy_li_lname = "Nume";
$privacy_li_email = "Adresa de email";
$privacy_li_phone = "Număr de telefon";
$privacy_li_inquiry = "Detalii ale cererii trimise";
$privacy_li_technical = "Date tehnice de bază privind utilizarea site-ului";
$privacy_h2_use = "Cum Folosim Informațiile";
$privacy_p_use_1 = "Informațiile pot fi folosite pentru a răspunde solicitărilor utilizatorilor, a furniza informații despre accesul la platformă, a îmbunătăți funcționalitatea site-ului, a menține securitatea și a comunica actualizări relevante despre $site_name.";
$privacy_p_use_2 = "De asemenea, putem utiliza date agregate sau neidentificabile pentru a analiza performanța site-ului, a îmbunătăți structura conținutului și a înțelege mai bine cum interacționează vizitatorii cu paginile noastre.";
$privacy_h2_comm = "Scopuri de Comunicare";
$privacy_p_comm_1 = "Dacă un utilizator trimite informații de contact, $site_name poate utiliza aceste informații pentru a răspunde solicitării, pentru a oferi detalii de înregistrare, pentru a clarifica cererile de acces la platformă sau pentru a partaja informații relevante despre servicii.";
$privacy_p_comm_2 = "Utilizatorii pot solicita întreruperea comunicării atunci când acest lucru este aplicabil.";
$privacy_h2_cookies = "Cookie-uri și Date Tehnice";
$privacy_p_cookies_1 = "Acest site poate utiliza cookie-uri, instrumente analitice și tehnologii similare pentru a îmbunătăți experiența de navigare, a monitoriza performanța și a susține securitatea site-ului.";
$privacy_p_cookies_2 = "Datele tehnice pot include tipul dispozitivului, tipul browserului, sistemul de operare, interacțiunile de pe pagină, informațiile de trimitere și statistici generale de utilizare.";
$privacy_h2_protection = "Măsuri de Protecție a Datelor";
$privacy_p_prot_1 = "$site_name aplică garanții rezonabile administrative, tehnice și organizatorice pentru a proteja informațiile transmise împotriva accesului neautorizat, a utilizării incorecte, pierderii sau divulgării.";
$privacy_p_prot_2 = "Cu toate acestea, niciun sistem online nu poate garanta securitate absolută. Utilizatorii ar trebui să evite transmiterea de informații financiare sensibile, chei private de portofel, parole, credențiale de schimb sau detalii confidențiale de acces la cont prin intermediul formularelor de pe site-ul public.";
$privacy_h2_third = "Furnizori de Servicii Terțe";
$privacy_p_third_1 = "$site_name poate utiliza furnizori terți de hosting, analiză, comunicare, securitate, livrare de e-mailuri, procesare CRM sau infrastructură tehnică.";
$privacy_p_third_2 = "Acești furnizori pot procesa informații limitate doar în măsura necesară pentru a susține funcționalitatea site-ului și serviciile aferente.";
$privacy_google_choices = 'Puteți gestiona modul în care Google utilizează informațiile din vizitele dvs. prin intermediul <a href="http://www.google.com/settings/ads" target="_blank" rel="noopener">Setărilor Anunțurilor Google</a>, puteți renunța la publicitatea bazată pe interese folosind <a href="https://tools.google.com/dlpage/gaoptout" target="_blank" rel="noopener">Google Analytics Opt-out Browser Add-on</a> sau consultați <a href="https://www.google.com/intl/ro/policies/privacy/" target="_blank" rel="noopener">Politica de Confidențialitate Google</a> pentru mai multe detalii.';
$privacy_h2_sale = "Nu Vindem Informațiile Personale";
$privacy_p_sale_1 = "$site_name nu are intenția de a vinde informațiile personale trimise prin intermediul acestui site.";
$privacy_p_sale_2 = "Informațiile pot fi partajate doar atunci când este necesar pentru scopuri operaționale, respectarea obligațiilor legale, comunicarea cu utilizatorul, prevenirea fraudelor sau procesarea aferentă serviciilor.";
$privacy_h2_retention = "Păstrarea Datelor";
$privacy_p_retention = "Informațiile personale pot fi păstrate atât timp cât este necesar pentru a răspunde la întrebări, a menține înregistrările comerciale, a se conforma obligațiilor legale, a îmbunătăți comunicările platformei sau a sprijini securitatea și prevenirea fraudei.";
$privacy_h2_rights = "Drepturile Utilizatorilor";
$privacy_p_rights = "În funcție de legea aplicabilă, utilizatorii pot avea drepturi referitoare la accesul, corectarea, ștergerea, obiecția, restricționarea sau portabilitatea informațiilor personale.";
$privacy_h2_intl = "Utilizare Internațională";
$privacy_p_intl_1 = "$site_name poate fi accesat de utilizatori din diverse jurisdicții. Regulile de confidențialitate pot varia în funcție de locație.";
$privacy_p_intl_2 = "Prin utilizarea acestui site, utilizatorii recunosc că informațiile pot fi procesate în conformitate cu această Politică de Confidențialitate și cu cerințele operaționale aplicabile.";
$privacy_h2_policy_updates = "Actualizări ale Politicii";
$privacy_p_updates_1 = "$site_name poate actualiza periodic această Politică de Confidențialitate pentru a reflecta schimbările din legislație, tehnologie, proceduri interne sau funcționalitatea site-ului.";
$privacy_p_updates_2 = "Utilizarea continuă a site-ului web după modificări înseamnă că utilizatorii acceptă Politica de Confidențialitate actualizată.";

// COOKIES PAGE
$cookies_h1 = "Politica de Cookie-uri";
$cookies_intro_1 = "Această Politică de Cookie-uri explică modul în care $site_name utilizează cookie-urile, tehnologiile analitice și alte instrumente de urmărire similare atunci când utilizatorii accesează sau interacționează cu acest site.";
$cookies_intro_2 = "Cookie-urile ajută la îmbunătățirea funcționalității site-ului web, la îmbunătățirea experienței utilizatorului, la analizarea performanței și la susținerea proceselor legate de securitate.";
$cookies_intro_3 = "Continuând să utilizeze acest site, utilizatorii recunosc că anumite cookie-uri și tehnologii similare pot fi utilizate în conformitate cu această politică.";
$cookies_h2_what = "Ce Sunt Cookie-urile?";
$cookies_p_what_1 = "Cookie-urile sunt mici fișiere text stocate pe dispozitivul unui utilizator atunci când acesta vizitează un site web.";
$cookies_p_what_2 = "Aceste fișiere pot conține informații care ajută site-urile web să recunoască vizitatorii frecvenți, să-și amintească preferințele, să îmbunătățească navigarea și să măsoare performanța site-ului.";
$cookies_h2_why = "De Ce Utilizăm Cookie-uri";
$cookies_p_why_1 = "$site_name poate utiliza cookie-uri și tehnologii similare în mai multe scopuri.";
$cookies_li_1 = "Menținerea funcționalității site-ului";
$cookies_li_2 = "Îmbunătățirea experienței utilizatorului";
$cookies_li_3 = "Amintirea preferințelor utilizatorului";
$cookies_li_4 = "Înțelegerea comportamentului vizitatorilor";
$cookies_li_5 = "Măsurarea performanței site-ului";
$cookies_li_6 = "Identificarea problemelor tehnice";
$cookies_li_7 = "Susținerea securității site-ului web";
$cookies_li_8 = "Prevenirea abuzurilor și a utilizării greșite";
$cookies_h2_essential = "Cookie-uri Esențiale";
$cookies_p_ess_1 = "Anumite cookie-uri sunt necesare pentru buna funcționare a site-ului.";
$cookies_p_ess_2 = "Aceste cookie-uri contribuie la menținerea securității, a funcționalității de navigare, a gestionării sesiunilor și a altor operațiuni esențiale ale site-ului.";
$cookies_p_ess_3 = "Fără cookie-urile esențiale, unele părți ale site-ului pot să nu funcționeze corect.";
$cookies_h2_analytics = "Cookie-uri de Analiză";
$cookies_p_an_1 = "Cookie-urile analitice ne ajută să înțelegem modul în care vizitatorii interacționează cu conținutul site-ului web.";
$cookies_p_an_2 = "Aceste tehnologii pot colecta informații despre vizitarea paginilor, modelele de navigare, tipurile de dispozitive, configurațiile browserului și statisticile generale de utilizare a site-ului.";
$cookies_p_an_3 = "Informațiile de analiză sunt de obicei agregate și utilizate pentru a îmbunătăți performanța site-ului și experiența utilizatorilor.";
$cookies_h2_functional = "Cookie-uri Funcționale";
$cookies_p_fun_1 = "Cookie-urile funcționale pot fi utilizate pentru a memora setările și preferințele selectate de utilizatori.";
$cookies_p_fun_2 = "Exemple pot include preferințele de limbă, setările interfeței, opțiunile de afișare sau alte caracteristici de personalizare.";
$cookies_h2_third = "Tehnologii Terțe";
$cookies_p_third_1 = "$site_name poate utiliza furnizori de servicii, platforme de analiză, tehnologii de publicitate sau instrumente de monitorizare a performanței deținute de terți.";
$cookies_p_third_2 = "Aceste terțe părți pot plasa propriile cookie-uri sau tehnologii de urmărire sub rezerva propriilor politici individuale de confidențialitate.";
$cookies_p_third_3 = "$site_name nu controlează practicile de cookie-uri ale terților și recomandă consultarea documentației privind confidențialitatea a furnizorilor externi, acolo unde se aplică.";
$cookies_h2_manage = "Gestionarea Cookie-urilor";
$cookies_p_manage_1 = "Majoritatea browserelor moderne permit utilizatorilor să gestioneze, să restricționeze sau să șteargă cookie-urile prin intermediul setărilor browserului.";
$cookies_p_manage_2 = "Utilizatorii pot alege să dezactiveze complet cookie-urile, deși după aceasta anumite funcții ale site-ului s-ar putea să nu mai funcționeze conform intenției.";
$cookies_p_manage_3 = "Setările browserelor oferă de obicei opțiuni pentru a:";
$cookies_li_manage_1 = "Bloca toate cookie-urile";
$cookies_li_manage_2 = "Șterge cookie-urile existente";
$cookies_li_manage_3 = "Primi notificări privind cookie-urile";
$cookies_li_manage_4 = "Restricționa anumite categorii de cookie-uri";
$cookies_h2_data = "Protecția Datelor";
$cookies_p_data = "Informațiile referitoare la cookie-uri pot fi procesate în conformitate cu Politica noastră de Confidențialitate și cu legile aplicabile privind protecția datelor.";
$cookies_h2_policy_updates = "Actualizări ale Politicii";
$cookies_p_updates_1 = "$site_name poate actualiza periodic această Politică de Cookie-uri pentru a reflecta schimbările tehnologice, cerințele legale sau îmbunătățirile operaționale.";
$cookies_p_updates_2 = "Utilizarea continuă a site-ului web în urma actualizărilor reprezintă recunoașterea politicii revizuite.";

// AML PAGE
$aml_h1 = "Politica AML (Prevenirea Spălării Banilor)";
$aml_intro_1 = "$site_name recunoaște importanța conștientizării măsurilor de prevenire a spălării banilor, a integrității financiare și a participării responsabile pe piețele de active digitale.";
$aml_intro_2 = "Această politică AML explică principiile generale aplicate de $site_name pentru a descuraja utilizarea ilegală a tehnologiilor cripto, a activităților financiare suspecte, a fraudelor, a evaziunii, a finanțării terorismului și a altor comportamente interzise.";
$aml_h2_purpose = "Scopul Acestei Politici";
$aml_p_purpose_1 = "Scopul acestei politici este de a stabili un cadru responsabil pentru modul în care $site_name abordează gradul de conștientizare privind spălarea banilor în cadrul ecosistemului activelor digitale.";
$aml_p_purpose_2 = "Piețele de criptomonede pot implica activități transfrontaliere, infrastructură descentralizată, burse terțe și sisteme complexe de portofele. Din acest motiv, utilizatorii ar trebui să înțeleagă că obligațiile de conformitate pot varia în funcție de jurisdicția lor, de tipul contului, de furnizorul de servicii și de mediul de reglementare local.";
$aml_h2_responsible = "Utilizarea Responsabilă A Tehnologiei Activelor Digitale";
$aml_p_resp_1 = "Se așteaptă ca utilizatorii să interacționeze cu $site_name și cu orice servicii de active digitale afiliate în mod responsabil, legal și în conformitate cu regulile aplicabile.";
$aml_p_resp_2 = "$site_name nu susține și nu încurajează utilizarea piețelor cripto, a sistemelor de tranzacționare, a tehnologiilor automate sau a instrumentelor analitice în scopuri ilegale.";
$aml_li_1 = "Spălarea banilor";
$aml_li_2 = "Finanțarea terorismului";
$aml_li_3 = "Fraudă sau înșelăciune financiară";
$aml_li_4 = "Ocolirea sancțiunilor";
$aml_li_5 = "Manipularea pieței";
$aml_li_6 = "Utilizarea de fonduri furate sau conturi compromise";
$aml_li_7 = "Orice activitate interzisă de legislația în vigoare";
$aml_h2_exchange = "Conformitatea Platformelor Terțe";
$aml_p_ex_1 = "$site_name se poate raporta, interacționa cu sau oferi infrastructură analitică pentru platforme terțe de active digitale.";
$aml_p_ex_2 = "Exchange-urile terțe, custozii, procesatorii de plăți și furnizorii de servicii pot aplica propriile proceduri de conformitate, incluzând verificarea identității, monitorizarea tranzacțiilor, controlul sancțiunilor, restricțiile conturilor, verificările fondurilor sau alte cerințe adiționale de securitate.";
$aml_h2_user_responsibility = "Responsabilitatea Utilizatorului";
$aml_p_user_1 = "Utilizatorii sunt responsabili să se asigure că activitatea lor este legală în locația lor și compatibilă cu obligațiile impuse de autoritățile de reglementare relevante, platformele de exchange, instituțiile financiare sau furnizorii de servicii.";
$aml_p_user_2 = "Utilizatorii nu trebuie să încerce să ascundă proprietatea, să mascheze originea tranzacțiilor, să furnizeze informații false, să ocolească procesele de verificare sau să utilizeze infrastructura de active digitale într-un mod care ar putea fi considerat suspect sau ilegal.";
$aml_h2_suspicious = "Activitate Suspectă";
$aml_p_suspicious = "Activitatea suspectă poate include un comportament incompatibil cu utilizarea normală, tentative de utilizare greșită a sistemelor, transmiterea repetată de informații false, implicarea în jurisdicții restricționate, sau activitatea legată de fonduri ilicite ori de servicii interzise.";
$aml_h2_evasion = "Fără Evaziune sau Eludare";
$aml_p_evasion = "Utilizatorii nu trebuie să încerce să evite controalele de conformitate, limitările tehnice, sistemele de verificare a identității, limitele geografice sau procedurile de monitorizare a riscurilor.";
$aml_h2_policy_updates = "Actualizări Ale Politicii";
$aml_p_updates_1 = "$site_name poate actualiza această Politică AML periodic pentru a reflecta schimbările din așteptările autorităților de reglementare, procedurile interne, sau practicile din industria activelor digitale.";
$aml_p_updates_2 = "Utilizarea continuă a platformei după actualizări înseamnă recunoașterea și acceptarea noii politici AML de către utilizatori.";

// RISK PAGE
$risk_h1 = "Dezvăluirea Riscurilor";
$risk_intro_1 = "Tranzacționarea criptomonedelor și implicarea în activele digitale prezintă un risc semnificativ. Prețurile se pot mișca rapid, lichiditatea se poate schimba neașteptat, iar condițiile pieței pot deveni foarte instabile într-o perioadă scurtă de timp.";
$risk_intro_2 = "Această secțiune de Dezvăluire a Riscurilor explică elementele importante pe care utilizatorii ar trebui să le examineze înainte de a interacționa cu piețele digitale, tehnologiile de tranzacționare automată, semnalele bazate pe AI sau cu infrastructura cripto analitică.";
$risk_h2_no_guarantee = "Rezultatele Nu Sunt Garantate";
$risk_p_no_guarantee_1 = "$site_name nu garantează obținerea de profituri, randamentul investițiilor, rezultatele tranzacțiilor, acuratețea semnalelor, accesul neîntrerupt, sau alte rezultate financiare favorabile.";
$risk_p_no_guarantee_2 = "Orice exemple, statistici, elemente de interfață, indici de performanță, sau simulări ale pieței afișate pe acest site sunt furnizate exclusiv cu scop informativ și demonstrativ.";
$risk_h2_volatility = "Volatilitatea Pieței Criptomonedelor";
$risk_p_vol_1 = "Piețele de active digitale sunt foarte volatile. Prețurile pot fi afectate de lipsa lichidității, noutăți macroeconomice, măsuri de reglementare, întreruperi ale platformelor de exchange, evenimente pe blockchain, starea de spirit a investitorilor, utilizarea efectului de levier sau manipularea piețelor.";
$risk_p_vol_2 = "Volatilitatea poate genera pierderi rapide, decalaje bruște de prețuri, slippage (derapaje de preț), proceduri de lichidare forțată sau imposibilitatea executării ordinelor la prețurile dorite.";
$risk_h2_ai = "Limitările Semnalelor AI";
$risk_p_ai_1 = "Sistemele bazate pe inteligență artificială pot procesa o cantitate masivă de date ale pieței, însă nu pot elimina riscul sau incertitudinea.";
$risk_p_ai_2 = "Indicatorii bazați pe AI, semnalele de tranzacționare, clasificările piețelor, sau modelele predictive pot fi inexacte, incomplete, întârziate sau nerecomandate situației financiare personale a fiecărui utilizator.";
$risk_p_ai_3 = "Utilizatorii nu trebuie să se bazeze doar pe un semnal AI atunci când iau o decizie financiară sau investițională.";
$risk_h2_tech = "Riscuri Tehnologice și de Execuție";
$risk_p_tech_1 = "Tehnologia de tranzacționare poate fi afectată de probleme privind conexiunea la internet, întreruperi de servere, latență, erori software, defecțiuni de tip API, nefuncționarea platformelor exchange, ori alte limite ale furnizorilor de infrastructură terți.";
$risk_p_tech_2 = "$site_name nu garantează accesul neîntrerupt la date, semnale, sau la sistemele funcționale oferite de parteneri.";
$risk_h2_liquidity = "Riscul de Lichiditate și Exchange";
$risk_p_liq_1 = "Lichiditatea poate diferi radical în funcție de diversele platforme și criptomonede. Unele piețe pot experimenta adâncimi minime în carnetele de ordine, o diferență mare de tip spread, executări întârziate, sau modificări agresive ale prețurilor în intervalele de instabilitate.";
$risk_p_liq_2 = "Platformele de exchange afiliate pot percepe propriile taxe, restricții, suspendări de activitate, revizuiri de conturi, ori pot impune interdicții pe anumite arii geografice.";
$risk_h2_regulatory = "Riscul de Reglementare";
$risk_p_reg_1 = "Liniile directoare și legile referitoare la monedele digitale se pot schimba constant și diferă în funcție de state, regiuni, sau guverne.";
$risk_p_reg_2 = "Orice reglementare de acest fel poate restrânge accesul pe piață, folosirea activelor, tranzacțiile transfrontaliere, taxele obligatorii sau însăși utilizarea diverselor platforme.";
$risk_h2_user_responsibility = "Responsabilitatea Utilizatorului";
$risk_p_user_1 = "Utilizatorii au responsabilitatea singulară de a analiza riscurile, a cunoaște și adopta legislația corespunzătoare, a fi la curent cu statusul lor financiar și de a lua singuri deciziile potrivite.";
$risk_p_user_2 = "$site_name nu oferă consultanță financiară, recomandări personalizate pentru investiții sau sfaturi legale ori de contabilitate.";
$risk_h2_advice = "Căutați Sfaturi Profesionale";
$risk_p_advice_1 = "Utilizatorii ar trebui să ceară o opinie avizată înainte de a face investiții, de a alege sisteme de tranzacționare automată sau a adopta instrumente digitale pentru administrarea portofoliului de criptomonede.";
$risk_p_advice_2 = "Prin intermediul utilizării acestui portal web, recunoașteți și admiteți orice risc care derivă din operațiunile vizând activele digitale și acordați un nivel adecvat de importanță deciziilor pe care vi le asumați.";

// EXCHANGES PAGE
$exchanges_h1 = "Platforme Acceptate";
$exchanges_intro_1 = "$site_name este configurat în funcție de un model de informații extins, ce apreciază operațiunile cu criptomonede desfășurate pe o gamă complexă de sisteme digitale de tranzacționare.";
$exchanges_intro_2 = "Piețele inovatoare de criptomonede folosesc mai multe tipuri de exchange-uri, de furnizori pentru instrumente de lichiditate și derivate, precum și multe alte ecosisteme destinate tranzacționării. Este o cerință majoră ca fiecare investitor să dețină cunostințe minime referitoare la dinamica acestor informații vitale ale pieței de profil.";
$exchanges_h2_philosophy = "Filosofia Vizând Acoperirea Pieței";
$exchanges_p_phil_1 = "În mod contrar principiului abordării unui sistem singular, $site_name integrează o perspectivă complexă capabilă să radiografieze aspectele variate din interiorul platformelor multiple de tranzacționare.";
$exchanges_p_phil_2 = "Cotele pentru criptomonede, caracteristicile de lichiditate, atitudinile vizând volatilitatea precum și procedeele instituționale variază între exchange-uri distincte. Monitorizarea factorilor multipli cu privire la piața vizată conferă o valoare analitică importantă și poate surprinde din timp modificările din sistem, semnalizând orice comportament contrar normelor statuate.";
$exchanges_h2_spot = "Monitorizarea Pieței Spot";
$exchanges_p_spot_1 = "Platformele care utilizează procedurile pieței spot dețin un rol important în sfera globală de activitate destinată operațiunilor cu monedă electronică.";
$exchanges_p_spot_2 = "Astfel de modele destinate prelucrării datelor au rolul de a filtra indicatori cheie prezenți pe piața spot precum:";
$exchanges_li_spot_1 = "Evoluția prețului";
$exchanges_li_spot_2 = "Adâncimea lichidității";
$exchanges_li_spot_3 = "Structura carnetului de comenzi (Order book)";
$exchanges_li_spot_4 = "Volumul tranzacționat";
$exchanges_li_spot_5 = "Comportamentul spread-ului de tip Ask/Bid";
$exchanges_li_spot_6 = "Situațiile de dezechilibru manifestate în piață";
$exchanges_h2_deriv = "Piețele de Derivate";
$exchanges_p_deriv_1 = "Instrumentele financiare de tip derivate dedicate criptomonedelor își adjudecă o relevanță tot mai acută la nivelul universului specific activelor bazate pe medii pur digitale.";
$exchanges_p_deriv_2 = "O serie de produse specifice sferei derivatelor din domeniu – ca și tranzacționarea marjelor, a contractelor ce utilizează efect de levier, a fondurilor futures și de alt tip similar – exercită presiune și direcționează semnificativ piața de criptomonede.";
$exchanges_p_deriv_3 = "Organizarea tehnică ce dispune de factori analitici are o valoare considerabilă și contribuie sistematic la aprecierea caracteristicilor referitoare la piețele extinse asociate cu derivate.";
$exchanges_h2_liquidity = "Analiza de Lichiditate";
$exchanges_p_liq_1 = "Lichiditatea reprezintă cu siguranță unul dintre factorii primordiali ce pot influența modul calitativ al operațiunilor efectuate dar și pragul minimal garantat de viabilitate în piață.";
$exchanges_p_liq_2 = "$site_name asigură scanarea și analiza de lichiditate pentru o gamă vastă de portale specializate cu privire la procedeele de tranzacționare în interesul identificării:";
$exchanges_li_liq_1 = "Gradului specific concentrării lichidității";
$exchanges_li_liq_2 = "Cazurile retragerilor abrupte și substanțiale";
$exchanges_li_liq_3 = "Factorilor ce determină presiunea în interiorul agendei de ordine specifice (order books)";
$exchanges_li_liq_4 = "Indicatorii referitori la orice posibilă anomalie la adresa pieței reglementate";
$exchanges_li_liq_5 = "Tipurile de reacție anormale vizând procesele de tranzacționare obișnuită";
$exchanges_h2_availability = "Disponibilitatea Exchange-urilor";
$exchanges_p_avail_1 = "Disponibilitatea de interacțiune referitoare la un anumit operator tip exchange diferă destul de mult, pe baza limitărilor sistemice ori tipului legislativ din regiunile din care acționează clientul (și a altor condiții suplimentare pentru aprobarea contului).";
$exchanges_p_avail_2 = "Anumiți operatori și platformele care asigură proceduri derivate impun restricții, tarife și o serie de limitări sau norme distincte privind verificarea suplimentară. Toate acestea trebuie să fie atent examinate și corelate cu interesele personale vizate.";
$exchanges_h2_third = "Platforme Terțe";
$exchanges_p_third_1 = "Asocierile de orice gen ori trimiterile legate de platforme, organizații cu regim special de brokeraj ori alte firme tip custode sau destinate distribuției de lichidități din interiorul $site_name sunt utilizate strict din rațiuni procedurale de identificare.";
$exchanges_p_third_2 = "$site_name nu are sub coordonare, control, patronaj sau răspundere nici un tip de servicii garantate sau livrate sub formă partenerială de oricare operator (exchange) din piață care activează terțiar.";
$exchanges_p_third_3 = "Investitorul/Cumpărătorul are întreaga responsabilitate pentru cercetarea riguroasă premergătoare oricărei abordări, alături de o conștientizare generalizată înainte de a folosi funcții specifice, exchange-uri cu vizibilitate în $site_name și aplicații terțe adiacente.";
$exchanges_h2_monitoring = "Monitorizare Permanentă A Pieței";
$exchanges_p_mon_1 = "O particularitate excepțională și destul de solicitantă a activității pe platformele cu criptomonede derivă din orarul de tranzacționare specific, asigurat de tiparele care facilitează procedee operaționale continue pentru 24 de ore în decursul întregii săptămâni (7 zile din 7).";
$exchanges_p_mon_2 = "Ecosistemul tinde într-un ritm amețitor la maturizare constantă, fiind martor lansărilor de exchange-uri inedite cu moduri total diferite din zona furnizării și asigurării fluxurilor lichide și a preferințelor din rândul aderenților (cumpărător/vânzător).";
$exchanges_p_mon_3 = "$site_name este devotat idealului preluării corecte și imediate de noutăți vizând regimul evolutiv sau involutiv, obținute cu precădere din sfera informațională garantată de prelucrările datelor ce se obțin neîntrerupt datorită metodelor procedurale analitice care scanează întregul regim ecologic asociat monedelor de interes (criptomonedelor).";

// ==========================================
// RISK WARNING PAGE
// ==========================================
$page_title_risk_warning = "Avertisment de Risc | $site_name";
$page_description_risk_warning = "Înțelege riscurile tranzacționării automate cripto cu $site_name, inclusiv volatilitatea pieței, riscul de execuție și considerațiile de reglementare.";
$risk_warning_breadcrumb_name = "Avertisment de Risc";
$risk_warning_title = "Avertisment de Risc";
$risk_warning_intro = "Înțelegerea riscurilor este primul pas către o tranzacționare sigură.";

$risk_warning_ai_heading = "Cum Ajută Sistemul Nostru AI la Gestionarea Riscului:";
$risk_warning_ai_1 = "<strong>Eficiență Algoritmică și Tranzacționare Fără Emoții:</strong> Algoritmii avansați analizează semnalele pieței pentru a executa tranzacții în mod obiectiv la momentele optime.";
$risk_warning_ai_2 = "<strong>Strategii Bazate pe Date:</strong> Strategiile se bazează pe tipare de piață verificate și pe analize în timp real, mai degrabă decât pe presupuneri.";
$risk_warning_ai_3 = "<strong>Setări Flexibile și Control Total:</strong> Ajustați-vă parametrii de risc oricând. Urmăriți toate soldurile și tranzacțiile în mod transparent pe tabloul de bord, fără taxe ascunse și cu retrageri fără restricții.";

$risk_warning_disclaimer = "<strong>Declinare a responsabilității:</strong> Tranzacționarea implică întotdeauna riscuri. Sistemele automate (inclusiv AI) nu garantează profitul, pot eșua din cauza erorilor software sau a evenimentelor neașteptate ale pieței și necesită monitorizarea utilizatorului. Performanța trecută nu este un indicator al rezultatelor viitoare. Această platformă servește pur în scopuri informaționale și de marketing și nu oferă sfaturi financiare.";

$risk_warning_s1_heading = "1. Riscuri Generale și Ale Pieței Criptomonedelor";
$risk_warning_s1_intro = "Criptomonedele sunt active foarte volatile, speculative, care funcționează 24/7 cu o supraveghere minimă de reglementare în majoritatea jurisdicțiilor.";
$risk_warning_s1_1 = "Valorile pot fluctua dramatic în perioade scurte, putând duce la pierderea totală a capitalului investit.";
$risk_warning_s1_2 = "Valorile de piață pot fi puternic afectate de actualizările de reglementare, de evoluțiile tehnice, de breșele de securitate sau de evenimente macroeconomice mai ample.";
$risk_warning_s1_3 = "Anumite active își pot pierde complet valoarea. Investiți doar fondurile pe care vă permiteți să le pierdeți.";

$risk_warning_s2_heading = "2. Riscuri de Execuție, Lichiditate și Levier";
$risk_warning_s2_1 = "<strong>Volatilitatea Pieței și Lichiditatea:</strong> Mișcările extreme ale prețurilor (10–20%+ zilnic) sau lichiditatea scăzută (în special la monedele mai mici) pot duce la întârzieri, întreruperi ale platformei și la alunecări (slippage) severe în execuție. Ordinele stop-loss nu pot garanta limitele de pierdere în condiții extreme.";
$risk_warning_s2_2 = "<strong>Levier și Riscuri de Marjă:</strong> Produsele cu efect de levier amplifică atât câștigurile, cât și pierderile, însemnând că puteți pierde mai mult decât depozitul inițial. Aproximativ 70–80% dintre conturile investitorilor de retail pierd bani atunci când tranzacționează produse cu efect de levier.";

$risk_warning_s3_heading = "3. Riscuri Tehnice, de Securitate Cibernetică și ale Terților";
$risk_warning_s3_1 = "<strong>Factori Tehnici:</strong> Tranzacționarea online implică riscuri inerente de deconectare a internetului, de erori de hardware/software și de indisponibilitate a serviciilor.";
$risk_warning_s3_2 = "<strong>Securitate Cibernetică:</strong> Conturile de criptomonede sunt frecvent ținte pentru phishing, malware și hacking. Tranzacțiile sunt ireversibile; compromiterea credențialelor dvs. poate duce la o pierdere permanentă.";
$risk_warning_s3_3 = "<strong>Platforme Terțe:</strong> Acest site poate conecta utilizatorii la platforme terțe. Nu controlăm, nu susținem și nu le garantăm securitatea, operațiunile sau solvabilitatea. Efectuați-vă întotdeauna propria analiză (due diligence) înainte de a depune fonduri pe platforme externe.";

$risk_warning_s4_heading = "4. Reglementare, Taxe și Dispoziții Finale";
$risk_warning_s4_1 = "<strong>Conformitate Legală și Taxe:</strong> Cadrele de reglementare variază pe scară largă și se schimbă rapid. Utilizatorii sunt singurii responsabili pentru asigurarea faptului că activitatea lor de tranzacționare respectă legile locale și pentru îndeplinirea propriilor obligații fiscale.";
$risk_warning_s4_2 = "<strong>Fără Garanții de Profit:</strong> Nu există tranzacționare cripto „sigură” sau lipsită de riscuri. Orice cifre referitoare la randament sau exemple de performanță sunt pur ipotetice.";
$risk_warning_s4_3 = "<strong>Adecvare:</strong> Dacă nu înțelegeți pe deplin riscurile, dacă vă bazați pe fonduri esențiale sau dacă tranzacționați cu bani împrumutați, tranzacționarea cripto nu vi se potrivește. Consultați un consilier financiar independent și licențiat dacă aveți îndoieli.";

$risk_warning_contact = "<strong>Contact:</strong> Pentru orice întrebări referitoare la această declarație sau pentru a trimite o solicitare, vă rugăm să contactați echipa noastră oficială de asistență pentru clienți prin intermediul formularului de contact de pe site-ul nostru.";
$footer_risk_warning = "Avertisment de Risc";

$lang_loaded = true;
?>
