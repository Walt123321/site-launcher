<?php
require __DIR__ . '/../lang.php';
$site_lang = 'ro-RO';
$form_language = 'ro'; // matches this page's own language, not the offer's global default

// ============================================================
// RO TRANSLATION OVERRIDES
// Identity/config vars ($site_name, $site_slug, $site_domain, $site_url, $app_price, $app_currency, $site_lang, $country_name, $country_flag_code, $privacy_last_update, $rating_value, $rating_count, $review_count, $form_country, $form_language, $form_phone_country, $form_only_countries, $review_1_author, $review_2_author, $review_3_author, $review_4_author, $quiz_consultant_name) are
// intentionally NOT overridden -- they stay exactly as inherited from the
// root lang.php.
// ============================================================

// Brand / Platform Variables

// Geo-language stats bar fallback content (used by the language-folder pages'
// own "stats" section; the fr/de/it/nl folders override these with native
// translations, the other 19 folders inherit this English fallback)
$stat_1_value = "4M+";
$stat_1_label = "Utilizatori Înregistrați";
$stat_2_value = "98+";
$stat_2_label = "Țări Susținute";
$stat_3_value = "65+";
$stat_3_label = "Monede Disponibile";
$stat_4_value = "24/7";
$stat_4_label = "Acces la Tranzacții";
$stat_5_value = "256-bit";
$stat_5_label = "Standard de Criptare";
$stat_6_value = "$500M+";
$stat_6_label = "Depozite Totale ale Clienților";

// Keitaro Form Integration Variables (defaults -- overwritten per-launch by
// generate_lang_files(); must stay valid on their own since nothing else in
// this file replaces them for a page that's ever served un-generated)

// 4 Verified Reviews (TZ Item 8)
$review_1_role = "Franța";
$review_1_text = "Am început cu 500 € doar pentru a vedea cum funcționează platforma. După aproximativ trei săptămâni, soldul meu crescuse la aproximativ 1120 €. Interfața este ușor de utilizat, iar informațiile despre piață m-au ajutat să iau decizii mai bune.";
$review_1_badge = "Randament Raportat +18,4%";

$review_2_role = "Germania";
$review_2_text = "Am încercat câteva platforme de tranzacționare înainte, dar aceasta a fost preferata mea până acum. Este ușor de navigat, instrumentele sunt cu adevărat utile și am avut o experiență foarte pozitivă în general.";
$review_2_badge = "Randament Raportat +19,1%";

$review_3_role = "Italia";
$review_3_text = "Ce m-a impresionat cel mai mult a fost cât de intuitiv se simte totul. Înregistrarea a fost rapidă, tabloul de bord este bine organizat, iar platforma mi-a făcut tranzacționarea mult mai convenabilă.";
$review_3_badge = "Randament Raportat +16,8%";

$review_4_role = "Țările de Jos";
$review_4_text = "Nu am avut nicio experiență anterioară de tranzacționare, așa că am început cu 750 €. În decurs de o lună, am ajuns la puțin peste 1765 € urmând instrumentele și resursele educaționale. A fost un mod excelent de a-mi construi încrederea.";
$review_4_badge = "Randament Raportat +18,0%";

$review_verified_label = "Utilizator Verificat";
$reviews_section_title = "Recenzii despre $site_name";
$reviews_badge_trustworthy = "De Încredere";
$reviews_summary_rating = "4,7";
$reviews_summary_count = "189";
$reviews_summary_desc = "O platformă de tranzacționare puternică și intuitivă, cu instrumente automatizate robuste, analize în timp real și resurse educaționale complete.";

// CONSULTANT / CHAT QUIZ (TZ Item 13)
$quiz_consultant_role = "Consultant de Tranzacționare";
$quiz_text_welcome = "Bună! Sunt asistentul dvs. personal de tranzacționare. Faceți un test de 30 de secunde pentru a descoperi cum poate funcționa pentru dvs. tranzacționarea automatizată cu IA.";
$quiz_text_q1 = "Ați tranzacționat vreodată criptomonede sau piețe financiare înainte?";
$quiz_text_a1_yes = "Da, am ceva experiență";
$quiz_text_a1_no = "Nu, sunt complet începător";
$quiz_text_q2 = "Care este obiectivul dvs. financiar principal cu tranzacționarea online?";
$quiz_text_q3 = "Ați prefera ca IA să execute tranzacțiile automat sau să tranzacționați manual?";
$quiz_text_a3_yes = "Tranzacționare Automatizată cu IA (Recomandat)";
$quiz_text_a3_no = "Tranzacționare Manuală cu Semnale IA";
$quiz_text_q4 = "Care este bugetul dvs. inițial pentru alocare în tranzacționare?";
$quiz_text_a4_1 = "250 $ - 500 $";
$quiz_text_a4_2 = "500 $ - 1.500 $";
$quiz_text_a4_3 = "1.500 $+";
$quiz_text_q5 = "Sunteți gata să vă creați contul și să primiți acces complet la platformă?";
$quiz_text_a5_yes = "Da, să începem!";
$quiz_text_a5_no = "Aș dori mai multe informații";
$quiz_text_loader = "Vă analizăm răspunsurile și pregătim parametrii optimi de tranzacționare...";
$quiz_text_final_ttl = "Configurarea Contului Dvs. Este Gata!";
$quiz_text_processing = "Configurăm accesul dvs. la platformă...";
$quiz_text_typing = "scrie...";
$quiz_placeholder_fname = "Prenume";
$quiz_placeholder_lname = "Nume de familie";
$quiz_placeholder_email = "Adresă de e-mail";
$quiz_placeholder_phone = "Număr de telefon";
$quiz_btn_submit = "Finalizați Înregistrarea";

// METADATA (TZ Item 10)
$home_meta_title = "$site_name — Platformă de Tranzacționare | Site Oficial";
$home_meta_description = "Site-ul oficial $site_name oferă o platformă sigură de tranzacționare a criptomonedelor cu instrumente avansate de tranzacționare, informații de piață în timp real și o experiență ușor de utilizat pentru traderi.";

// NAVIGATION & HEADER (TZ Item 3, 12)
$nav_about = "Despre Noi";
$nav_how = "Cum Funcționează";
$nav_why = "De Ce Să Tranzacționați";
$nav_faq = "Întrebări Frecvente";
$nav_contacts = "Contactați-ne";
$nav_signin = "Autentificare";
$nav_signup = "Înregistrare";

$mobnav_home = "Acasă";
$mobnav_product = "Produs";
$mobnav_offer = "Ofertă";
$mobnav_contact = "Contactați-ne";
$mobnav_faq = "Întrebări Frecvente";
$mobnav_signup = "Înregistrare";

// HERO SECTION
$hero_h1 = "Platforma <mark>$site_name</mark>";
$hero_text = "Platformă oficială de tranzacționare a criptomonedelor $site_name";

// LEAD FORM
$form_fname_placeholder = "Prenume";
$form_lname_placeholder = "Nume de familie";
$form_email_placeholder = "E-mail";
$form_phone_placeholder = "Număr de telefon";
$form_btn_submit = "Înregistrare";
$form_disclaimer_text = "Prin introducerea datelor dvs. personale și apăsarea butonului, acceptați <a class='link link-primary' href='privacy.php'>Politica de Confidențialitate</a> și <a class='link link-primary' href='conditions.php'>Termenii de Utilizare</a> ai acestui site.";

// SECURITY BADGES
$badge_ssl = "SSL 256-bit";
$badge_payments = "Plăți Securizate";
$badge_2fa = "2FA";
$badge_cold_storage = "98% Cold Storage";
$badge_regulated = "Reglementat";
$badge_traders_trust = "Peste 4M de Traderi au Încredere";

// SAFE SECTION (Vos fonds sont en sécurité)
$safe_title = "<mark>Fondurile Dvs. Sunt în Siguranță</mark> cu $site_name";
$safe_desc = "Criptare de nivel bancar, procesatori de plăți verificați și 98% cold storage — banii dvs. sunt protejați la fiecare pas.";

$safe_item1_title = "Furnizori de Plăți Verificați";
$safe_item1_desc = "Plățile sunt procesate exclusiv prin furnizori certificați care respectă standardele internaționale de securitate. Datele cardului dvs. nu sunt niciodată stocate pe platforma noastră.";
$safe_item1_badge = "Plăți Securizate";

$safe_item2_title = "Autentificare cu Doi Factori (2FA)";
$safe_item2_desc = "Adăugați un nivel suplimentar de protecție contului dvs. cu parole unice bazate pe timp prin SMS sau Google Authenticator.";
$safe_item2_badge = "2FA";

$safe_item3_title = "98% Cold Storage";
$safe_item3_desc = "Marea majoritate a activelor digitale este păstrată în seifuri cold storage offline, distribuite geografic, protejate de protocoale cu semnătură multiplă.";
$safe_item3_badge = "98% Cold Storage";

$safe_item4_title = "Execuție Reglementată";
$safe_item4_desc = "Colaborăm cu firme de brokeraj și furnizori de lichiditate reglementați din întreaga lume pentru a menține conformitatea, transparența și execuția de top.";
$safe_item4_badge = "Reglementat";

$safe_item5_title = "Criptare SSL 256-bit";
$safe_item5_desc = "Toate transmisiile de date dintre browserul dvs. și serverele noastre sunt criptate cu protocoale criptografice de nivel militar TLS 1.3.";
$safe_item5_badge = "SSL 256-bit";

// FREE GUIDE CTA BANNER (CTA 2)
$guide_cta_title = "Obțineți Ghidul Gratuit";
$guide_cta_subtitle = "«10 Greșeli de Evitat în Tranzacționarea Criptomonedelor»";
$guide_cta_btn = "Solicitați Ghidul Gratuit";

// TRUST SECTION (Pourquoi les investisseurs font confiance à Ciel Cryptance)
$trust_title = "De Ce Traderii Au Încredere în <mark>$site_name</mark>";
$trust_desc = "Peste 4.000.000 de utilizatori din întreaga lume aleg $site_name pentru fiabilitatea sa, automatizarea puternică și mediul transparent.";
$trust_subtitle = "Beneficii Principale pentru Traderul Modern:";

$trust_item1_title = "Acces la Piețe Globale";
$trust_item1_desc = "Tranzacționați peste 100 de criptomonede, perechi Forex, acțiuni și mărfuri de pe un singur panou de tranzacționare unificat.";

$trust_item2_title = "Protecție Solidă a Fondurilor";
$trust_item2_desc = "Conturi separate, verificări biometrice continue și securitate cibernetică de ultimă generație vă protejează capitalul 24/7.";

$trust_item3_title = "Zero Comisioane Ascunse";
$trust_item3_desc = "Bucurați-vă de prețuri complet transparente. Înregistrare gratuită, depozite gratuite, fără comisioane de gestionare a platformei și cereri de retragere instantanee.";

$trust_item4_title = "Suport Receptiv";
$trust_item4_desc = "Echipa noastră de suport dedicată este disponibilă prin chat live, telefon sau e-mail pentru a ajuta cu orice întrebări sau solicitări tehnice.";

$trust_market_info_text = "Mai multe informații despre condițiile de piață în 2026";
$trust_market_info_btn = "De Ce Să Tranzacționați";

// START TRADING CTA (CTA 3)
$start_cta_title = "Începeți Tranzacționarea cu <span data-local-currency='$app_price'>$app_price $app_currency</span>!";
$start_cta_desc = "Sunteți gata să încercați $site_name? Înregistrați-vă acum și alăturați-vă comunității în creștere de investitori și traderi de criptomonede.";
$start_cta_btn = "Înregistrare";

// FAQ SECTION
$faq_title = "Întrebări Frecvente $site_name <mark>(FAQ)</mark>";
$faq_q1 = "Ce este $site_name și cum funcționează?";
$faq_a1 = "Este o platformă de tranzacționare alimentată de IA care lucrează pentru dvs. 24 de ore pe zi. Sistemul analizează piețele, identifică oportunitățile și execută tranzacții automat. Puteți lăsa IA să se ocupe de toate sau puteți comuta în modul manual pentru a tranzacționa după propriile condiții, oricând.";

$faq_q2 = "Cât de sigure sunt banii și datele mele pe $site_name?";
$faq_a2 = "Securitatea este integrată în fiecare nivel al platformei. Datele personale sunt protejate folosind standarde de criptare recunoscute internațional și autentificare avansată a contului. Toate tranzacțiile financiare sunt procesate exclusiv prin furnizori de plăți de încredere și verificați. Toată activitatea dvs. de tranzacționare este vizibilă în timp real, așa că știți întotdeauna exact ce se întâmplă cu fondurile dvs.";

$faq_q3 = "Pot să-mi retrag profiturile oricând?";
$faq_a3 = "Da. Nu există restricții privind momentul sau frecvența cu care puteți retrage fondurile de pe $site_name. Soldul contului dvs. rămâne întotdeauna sub controlul dvs. complet. Retragerile sunt procesate prin aceiași furnizori de plăți de încredere folosiți pentru depozite, garantând transferuri rapide și sigure.";

$faq_q4 = "Există comisioane ascunse sau taxe suplimentare?";
$faq_a4 = "Niciunul. $site_name nu percepe taxe de abonament, taxe de înregistrare sau costuri ascunse. Singura sumă necesară pentru a începe este depozitul minim de <span data-local-currency='$app_price'>$app_price $app_currency</span>, creditat direct în contul dvs. de tranzacționare. Sunt acceptate toate metodele majore de plată, inclusiv carduri de credit, transferuri bancare și PayPal.";

$faq_q5 = "Este necesară experiență anterioară de tranzacționare pentru a începe?";
$faq_a5 = "Deloc. $site_name este conceput atât pentru începători absoluți, cât și pentru traderi experimentați. În modul complet automatizat, IA se ocupă de tot pentru dvs., inclusiv analiza pieței, generarea semnalelor și execuția ordinelor. Dacă preferați să păstrați controlul, puteți comuta în modul manual oricând.";

$faq_cta_text = "Aveți întrebări? Consultați Întrebările noastre Frecvente sau contactați echipa noastră de suport.";
$faq_cta_faq_btn = "Întrebări Frecvente";
$faq_cta_contact_btn = "Contactați-ne";

// NEW TRADER LEAD SECTION (Bottom form)
$lead_title = "Nou în Tranzacționare?";
$lead_p1 = "După înregistrare, veți primi ghidul nostru gratuit <mark class='text-on-surface-tertiary-accent'>«10 Greșeli de Evitat în Tranzacționarea Criptomonedelor»</mark>. Acesta conține sfaturi simple de la analiștii noștri cei mai experimentați pentru a vă ajuta să evitați capcanele comune.";
$lead_p2 = "Introduceți pur și simplu datele dvs. în formularul de înregistrare și îl vom trimite direct în căsuța dvs. de e-mail. Mulți traderi au început cu acest ghid și l-au considerat de neprețuit pentru a-și construi încrederea în primele lor tranzacții.";
$lead_form_heading = "Piața nu așteaptă — începeți astăzi!";

// FEATURES TABLE (Fonctionnalités principales)
$features_title = "<mark>Caracteristici Cheie</mark> ale Platformei de Tranzacționare $site_name";
$feature_1_title = "🤖 Tehnologia Platformei";
$feature_1_val = "Motor de tranzacționare avansat, alimentat de IA";
$feature_2_title = "💳 Metode de Finanțare";
$feature_2_val = "Carduri de credit majore, transferuri bancare, PayPal";
$feature_3_title = "📱 Acces la Platformă";
$feature_3_val = "Compatibilitate cu mai multe dispozitive (Desktop, Tabletă, Mobil)";
$feature_4_title = "🚀 Rata de Succes";
$feature_4_val = "85% precizie analitică";
$feature_5_title = "📊 Instrumente de Tranzacționare";
$feature_5_val = "Criptomonede, Forex, Acțiuni, Mărfuri, Metale Prețioase, CFD-uri și multe altele…";
$feature_6_title = "✍️ Configurarea Contului";
$feature_6_val = "Înregistrare rapidă și simplă";
$feature_7_title = "📞 Asistență pentru Clienți";
$feature_7_val = "Suport profesional dedicat 24/7";

// FOOTER DISCLAIMER (TZ Item 21)
$footer_disclaimer_p1 = "$site_name oferă conținut educațional și informații generale despre piețele financiare, tranzacționarea online și activele digitale. Toate materialele publicate pe acest site, inclusiv articole, grafice, date privind prețurile, informații de piață și analize, sunt destinate exclusiv scopurilor informative și nu ar trebui considerate consiliere financiară, de investiții sau juridică. Deși ne străduim să menținem conținutul nostru precis și actualizat, nu garantăm completitudinea sau fiabilitatea acestuia și nu ne asumăm nicio răspundere pentru pierderile rezultate din utilizarea acestui site.";
$footer_disclaimer_p2 = "Tranzacționarea criptomonedelor, Forex, CFD-urilor, acțiunilor și altor instrumente financiare implică un risc semnificativ și poate să nu fie potrivită pentru fiecare investitor. Condițiile de piață se pot schimba rapid, iar performanța trecută nu garantează rezultate viitoare. Înainte de a lua orice decizie de investiție, evaluați cu atenție situația dvs. financiară și toleranța la risc și căutați consiliere profesională independentă dacă este necesar. Investiți doar bani pe care vă puteți permite să îi pierdeți.";
$footer_copyright = "© " . date('Y') . " $site_name. All rights reserved.";

// FOOTER NAV LINKS
$footnav_about = "Despre Noi";
$footnav_how = "Cum Funcționează";
$footnav_why = "De Ce Să Tranzacționați";
$footnav_faq = "Întrebări Frecvente";
$footnav_contacts = "Contactați-ne";
$footnav_privacy = "Politica de Confidențialitate";
$footnav_risk = "Avertisment de Risc";
$footnav_terms = "Termenii de Utilizare";
$footnav_product = "Produs";
$footnav_offer = "Ofertă";

// ABOUT PAGE VARIABLES
$about_meta_title = "Despre Noi | Site Oficial $site_name";
$about_meta_description = "Aflați mai multe despre $site_name, misiunea noastră de a democratiza piețele financiare prin automatizarea IA și cadrul nostru de securitate de nivel instituțional.";
$about_h1 = "Despre <mark>$site_name</mark>";
$about_lead = "Susținem traderii din întreaga lume prin inteligență artificială, execuție algoritmică și securitate de nivel corporativ.";
$about_mission_title = "Misiunea Noastră";
$about_mission_text = "La $site_name, credem că tehnologiile sofisticate de tranzacționare ar trebui să fie accesibile tuturor, nu doar fondurilor instituționale. Platforma noastră reduce decalajul dintre investitorii de retail obișnuiți și cei mai avansați algoritmi de tranzacționare computațională.";
$about_tech_title = "Tehnologie de Ultimă Generație";
$about_tech_text = "Sistemele noastre evaluează peste 100.000 de puncte de date în fiecare secundă pe piețele globale de criptomonede, Forex și acțiuni. Combinând modele predictive de învățare automată cu execuția în sub-milisecunde, oferim un alunecare extrem de mică și o performanță de încredere.";
$about_sec_title = "Securitate și Conformitate Regulatorie";
$about_sec_text = "Încrederea clienților este fundamentul de bază al ecosistemului nostru. Implementăm criptare TLS 256-bit, protocoale biometrice și 2FA stricte și stocăm 98% din toate rezervele digitale în seifuri cold storage.";

// PRODUCT PAGE VARIABLES
$product_meta_title = "Instrumente de Tranzacționare și Produs | $site_name";
$product_meta_description = "Explorați motorul de tranzacționare și capacitățile IA care alimentează $site_name. Execuție automatizată a ordinelor, analiză predictivă și controale intuitive.";
$product_h1 = "<mark>Produsul și Caracteristicile</mark> Platformei";
$product_lead = "Descoperiți instrumentele inteligente concepute pentru a vă oferi un avantaj competitiv pe piețele moderne de criptomonede și financiare.";
$product_f1_title = "Motor de Tranzacționare Automatizat cu IA";
$product_f1_text = "Lăsați algoritmii neuronali să analizeze tendințele pieței și să execute tranzacții optime non-stop, fără emoții.";
$product_f2_title = "Analize de Piață în Timp Real";
$product_f2_text = "Adâncimea registrului de ordine în direct, recunoașterea automată a tiparelor și urmărirea sentimentului instituțional la îndemâna dvs.";
$product_f3_title = "Suită de Gestionare a Riscului";
$product_f3_text = "Limite granulare de stop-loss și take-profit, controale ale expunerii zilnice maxime și capacități automatizate de acoperire a riscului.";
$product_f4_title = "Accesibilitate Multi-Platformă";
$product_f4_text = "Tranzacționați fără probleme pe browsere desktop, tablete și smartphone-uri cu latență zero și sincronizare completă în cloud.";

// OFFER PAGE VARIABLES
$offer_meta_title = "Ofertă Specială și Condiții | $site_name";
$offer_meta_description = "Descoperiți oferta exclusivă de înregistrare cu $site_name. Începeți cu un depozit inițial de $app_price $app_currency și primiți suport dedicat.";
$offer_h1 = "Ofertă de Tranzacționare <mark>Exclusivă</mark>";
$offer_lead = "Începeți-vă călătoria de tranzacționare astăzi cu avantaje competitive și integrare dedicată a contului 1-la-1.";
$offer_step1_title = "1. Înregistrare Rapidă";
$offer_step1_text = "Completați formularul nostru scurt de înregistrare pentru a vă asigura accesul la contul personal în mai puțin de 2 minute.";
$offer_step2_title = "2. Finanțați-vă Soldul de Tranzacționare";
$offer_step2_text = "Depuneți minimul standard de $app_price $app_currency folosind cardul de credit, transferul bancar sau portofelele electronice. 100% din fondurile dvs. merg direct în soldul dvs. de tranzacționare.";
$offer_step3_title = "3. Activați Tranzacționarea cu IA";
$offer_step3_text = "Alegeți modul automatizat sau asistat, selectați perechile de active preferate și începeți să tranzacționați cu toate capacitățile platformei.";

// CONTACTS PAGE VARIABLES
$contacts_meta_title = "Contactați Suportul | $site_name";
$contacts_meta_description = "Luați legătura cu echipa $site_name. Suport pentru clienți 24/7, asistență tehnică și întrebări legate de cont.";
$contacts_h1 = "Contactați <mark>Asistența pentru Clienți</mark>";
$contacts_lead = "Echipa noastră de suport internațională dedicată este gata să vă ajute 24 de ore din 24, 7 zile din 7.";
$contacts_info_title = "Solicitări Oficiale";
$contacts_info_text = "Pentru întrebări generale, verificarea contului sau suport tehnic, contactați-ne prin canalele noastre de comunicare verificate.";
$contacts_support_hours = "Suport 24/7 prin Chat Live și E-mail";

// FAQ PAGE VARIABLES
$faq_meta_title = "Întrebări Frecvente și Bază de Cunoștințe | $site_name";
$faq_meta_description = "Găsiți răspunsuri la întrebările frecvente despre conturile $site_name, depozite, retrageri și tranzacționarea automatizată cu IA.";
$faq_h1 = "<mark>Întrebări Frecvente</mark> $site_name";
$faq_lead = "Răspunsuri clare la cele mai comune întrebări privind securitatea platformei, retragerile și tranzacționarea automatizată.";

// PRIVACY POLICY PAGE VARIABLES
$privacy_meta_title = "Politica de Confidențialitate | $site_name";
$privacy_meta_description = "Citiți Politica noastră de Confidențialitate completă pentru a înțelege cum $site_name colectează, protejează și gestionează datele dvs. personale.";
$privacy_h1 = "Politica de Confidențialitate";
$privacy_p1 = "Această Politică de Confidențialitate descrie modul în care $site_name colectează, utilizează și divulgă informații atunci când vizitați site-ul nostru, vă înregistrați un cont sau utilizați software-ul nostru de tranzacționare.";
$privacy_sec1_title = "1. Colectarea și Utilizarea Datelor";
$privacy_sec1_text = "Colectăm informațiile de contact necesare (nume, adresă de e-mail, număr de telefon) pentru a vă stabili contul, pentru a vă conecta cu parteneri de brokeraj verificați și pentru a verifica identitatea în conformitate cu standardele internaționale KYC și AML.";
$privacy_sec2_title = "2. Cookie-uri și Tehnologii de Urmărire";
$privacy_sec2_text = "Utilizăm cookie-uri esențiale și analitice pentru a îmbunătăți performanța site-ului, a personaliza experiența utilizatorului și a monitoriza tiparele de trafic. Puteți ajusta setările cookie-urilor browserului dvs. oricând.";
$privacy_sec3_title = "3. Securitatea Datelor și Drepturile GDPR";
$privacy_sec3_text = "Toate datele utilizatorilor sunt criptate în tranzit și în repaus folosind protocoale criptografice de nivel bancar. Conform Regulamentului General privind Protecția Datelor (GDPR), utilizatorii au dreptul de a solicita accesul, corectarea sau ștergerea înregistrărilor lor personale.";

// TERMS OF USE PAGE VARIABLES
$terms_meta_title = "Termenii de Utilizare | $site_name";
$terms_meta_description = "Consultați Termenii și Condițiile oficiale care guvernează utilizarea platformei $site_name și a serviciilor asociate.";
$terms_h1 = "Termenii de Utilizare";
$terms_p1 = "Vă rugăm să citiți cu atenție acești Termeni de Utilizare înainte de a accesa sau utiliza $site_name. Prin înregistrarea unui cont, sunteți de acord să respectați aceste prevederi.";
$terms_sec1_title = "1. Eligibilitatea Utilizatorului";
$terms_sec1_text = "Trebuie să aveți cel puțin 18 ani și să locuiți într-o jurisdicție în care tranzacționarea online și interacțiunile cu criptomonede sunt permise legal. Sunteți responsabil pentru asigurarea conformității cu legile dvs. locale.";
$terms_sec2_title = "2. Înregistrarea Contului și Securitate";
$terms_sec2_text = "Sunteți de acord să furnizați informații adevărate, exacte și complete în timpul înregistrării. Sunteți singurul responsabil pentru menținerea confidențialității datelor dvs. de autentificare.";
$terms_sec3_title = "3. Limitarea Răspunderii";
$terms_sec3_text = "$site_name oferă servicii informative și de direcționare software. Nu oferim consiliere financiară personalizată și nu garantăm profitabilitatea tranzacționării. Tranzacționarea pe piețele financiare comportă un risc de capital inerent.";

// RISK WARNING PAGE VARIABLES (TZ Item 19: Exact 4 sections)
$risk_meta_title = "Avertisment de Risc și Notificare Legală | $site_name";
$risk_meta_description = "Divulgare importantă a riscurilor privind tranzacționarea CFD, Forex și criptomonede pe $site_name. Citiți cu atenție înainte de a investi.";
$risk_h1 = "Avertisment de Risc";
$risk_sec1_title = "1. Aviz privind Investiția de Risc Ridicat și Volatilitatea";
$risk_sec1_text = "Tranzacționarea criptomonedelor, contractelor pentru diferență (CFD-uri), valutei străine (Forex) și altor active financiare implică un risc substanțial de pierdere și nu este potrivită pentru toți investitorii. Piețele de criptomonede sunt excepțional de volatile, prețurile fiind supuse unor fluctuații bruște ca răspuns la anunțuri de reglementare, schimbări macroeconomice sau sentimentul pieței. Nu ar trebui niciodată să investiți bani pe care nu vă puteți permite să îi pierdeți complet.";
$risk_sec2_title = "2. Consiliere Financiară Independentă";
$risk_sec2_text = "Toate materialele, instrumentele, semnalele algoritmice și comentariile furnizate pe $site_name sunt destinate exclusiv scopurilor informative, educaționale și de marketing. Niciun conținut de pe acest site nu constituie consiliere de investiții, juridică sau financiară personalizată. Înainte de a executa orice tranzacții, ar trebui să efectuați o cercetare independentă sau să consultați un consultant financiar licențiat.";
$risk_sec3_title = "3. Restricții Regulatorii și Geografice";
$risk_sec3_text = "Anumite jurisdicții restricționează sau interzic tranzacționarea de retail cu CFD-uri și criptomonede. Este responsabilitatea exclusivă a utilizatorului să verifice dacă accesul la $site_name și utilizarea firmelor de brokeraj partenere este legală în conformitate cu cadrul lor juridic local.";
$risk_sec4_title = "4. Tehnologia Platformei și Execuția pe Piață";
$risk_sec4_text = "Instrumentele de tranzacționare automatizate, algoritmii de inteligență artificială și indicatorii de piață nu garantează profituri și nu elimină riscurile de piață. Întreruperile tehnice, latența rețelei, întreruperile sistemului și lipsa de lichiditate a pieței pot duce la întârzieri în execuția tranzacțiilor sau alunecare.";

// SIGN UP / LOGIN PAGE VARIABLES
$sign_meta_title = "Înregistrare / Autentificare | $site_name";
$sign_meta_description = "Creați-vă contul gratuit pe $site_name pentru a accesa instrumente inteligente de tranzacționare automatizată, semnale de piață și opțiuni sigure de finanțare.";
$sign_h1 = "Înregistrați-vă la <mark>$site_name</mark>";
$sign_lead = "Alăturați-vă miilor de traderi și obțineți acces imediat la motorul nostru de tranzacționare cu IA.";

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
$hero_form_heading = "Creați-vă contul gratuit";
$hero_form_button = "Înregistrare";
$form_name_placeholder = "Introduceți-vă prenumele";
$form_surname_placeholder = "Introduceți-vă numele de familie";
$form_disclaimer_prefix = "Prin introducerea datelor dvs. personale și apăsarea butonului, sunteți de acord cu";
$form_privacy_link_label = "Politica de Confidențialitate";
$form_disclaimer_and = "și cu";
$form_terms_link_label = "Termenii de Utilizare";
$form_disclaimer_of_site = "ai acestui site.";

// -- partners strip --
$partners_label = "De încredere pentru parteneri de top";

// -- "what is" section --
$whatis_label = "Despre Platformă";
$whatis_title = "Ce este $site_name?";
$whatis_intro = "$site_name este platforma oficială de tranzacționare online, concepută pentru a face criptomonedele la fel de simple ca și serviciile bancare online zilnice.";
$whatis_icon_1_title = "Analiză Bazată pe IA";
$whatis_icon_1_text = "Algoritmi avansați gestionează complexitatea piețelor pentru dvs.";
$whatis_icon_2_title = "Execuție Instantanee";
$whatis_icon_2_text = "Mii de puncte de date procesate în fiecare secundă — tranzacții fără întârziere.";
$whatis_icon_3_title = "Tablou de Bord Simplu și Intuitiv";
$whatis_icon_3_text = "Verificați-vă soldul și pozițiile deschise dintr-o privire, oricând.";
$whatis_icon_4_title = "Acces Ușor, Fără Bariere";
$whatis_icon_4_text = "Începeți cu un depozit minim de doar $app_price $app_currency — fără comisioane ascunse.";
$whatis_cta_text = "Doriți să aflați mai multe despre echipa și produsul nostru?";
$whatis_cta_link = "Despre Noi";

// -- stats section heading (per-stat label/value already set above) --
$stats_label = "$site_name în Cifre";
$stats_title = "Cifre Care Vorbesc Mai Tare decât Promisiunile";

// -- key benefits section --
$benefits_label = "Beneficii Cheie";
$benefits_title = "Principalele Beneficii ale $site_name";
$benefit_1_title = "Platformă Prietenoasă pentru Începători";
$benefit_1_text = "Graficele intuitive și ghidurile pas cu pas vă ajută să începeți fără să vă simțiți copleșiți. Puteți tranzacționa criptomonede cu încredere din prima zi.";
$benefit_2_title = "Oficial și Reglementat";
$benefit_2_text = "$site_name este licențiată și respectă reglementările financiare aplicabile. Folosim criptare SSL și autentificare cu doi factori pentru a proteja fiecare cont.";
$benefit_3_title = "Acces Ușor, Fără Bariere";
$benefit_3_text = "Cu un depozit minim de doar $app_price $app_currency, oricine poate începe. Nu este necesară o investiție inițială mare — începeți mic și creșteți-vă miza pe măsură ce încrederea dvs. crește.";
$benefit_4_title = "Comisioane Transparente";
$benefit_4_text = "Nu veți vedea niciodată taxe ascunse. Aplicăm doar comisioane minime de tranzacție sau retragere, acolo unde este cazul, astfel încât să știți întotdeauna exact ce plătiți.";
$benefit_5_title = "Acces la Tranzacționare 24/7";
$benefit_5_text = "Tranzacționați după propriul program, zi sau noapte. $site_name funcționează la fel de bine pe desktop ca și pe mobil, astfel încât să puteți rămâne conectat la piață oriunde v-ați afla.";
$benefit_6_title = "Asistență Locală pentru Clienți";
$benefit_6_text = "Echipa noastră de suport este disponibilă prin chat, telefon sau e-mail. Persoane reale sunt aici pentru a vă ajuta în limba dvs., oricând aveți nevoie.";
$benefits_trust_title = "De Încredere pentru Utilizatori din Întreaga Lume";
$benefits_trust_text = "De aceea atât de mulți utilizatori de criptomonede au încredere în $site_name. Mii de traderi folosesc deja $site_name, iar conturi noi se alătură în fiecare zi.";
$benefits_cta = "Înregistrare";
$benefits_badge_1 = "SSL 256-bit";
$benefits_badge_2 = "Plăți Securizate";
$benefits_badge_3 = "2FA";

// -- security section --
$security_label = "Securitate";
$security_title = "Fondurile Dvs. Sunt în Siguranță cu $site_name";
$security_subtitle = "Criptare de nivel bancar, plăți verificate și 98% cold storage — banii dvs. sunt protejați la fiecare pas.";
$security_1_title = "Furnizori de Plăți Verificați";
$security_1_text = "Plățile sunt procesate exclusiv de furnizori certificați care îndeplinesc standardele internaționale de securitate. Datele dvs. de plată nu sunt niciodată stocate pe serverele noastre.";
$security_2_title = "Criptare SSL 256-bit";
$security_2_text = "Toate datele schimbate între dispozitivul dvs. și platforma noastră sunt criptate cu TLS 256-bit. Niciun terț nu le poate intercepta sau citi.";
$security_3_title = "98% Cold Storage";
$security_3_text = "98% din active sunt păstrate în portofele offline, fără conexiune la internet. Nimeni nu le poate accesa de la distanță.";
$security_4_title = "Autentificare Multi-Factor";
$security_4_text = "Doar dvs. puteți accesa contul dvs. Fiecare autentificare este verificată printr-un al doilea pas pe care doar dvs. îl controlați.";
$security_5_title = "Monitorizarea Contului";
$security_5_text = "Fiecare autentificare, tranzacție sau modificare a setărilor declanșează o notificare instantanee, astfel încât să știți întotdeauna ce se întâmplă în contul dvs.";
$security_6_title = "Protecția Parolei";
$security_6_text = "Parolele sunt stocate într-o formă ilizibilă, ireversibilă. Nu avem tehnic nicio modalitate de a vă vedea parola.";
$security_cta_title = "Obțineți un Ghid Gratuit!";
$security_cta_text = "Obțineți ghidul nostru gratuit pentru începători și începeți să tranzacționați astăzi.";
$security_cta_button = "Înregistrare";
$security_badge_1 = "98% Cold Storage";
$security_badge_2 = "Plăți Verificate";
$security_badge_3 = "Criptat";

// -- how it works section --
$how_label = "Cum Funcționează";
$how_title = "Cum Funcționează";
$how_1_title = "Înregistrați-vă";
$how_1_text = "Apăsați butonul „Deschideți Cont” și completați formularul de înregistrare cu datele dvs. (nume, e-mail și număr de telefon). Durează doar un minut.";
$how_2_title = "Depuneți Fonduri";
$how_2_text = "Apoi, finanțați-vă contul. Depozitul minim este de doar $app_price $app_currency. Puteți folosi un card de credit/debit, un transfer bancar local sau portofele electronice populare. (Sfat: începeți cu o sumă cu care vă simțiți confortabil.)";
$how_3_title = "Începeți Tranzacționarea";
$how_3_text = "Odată ce fondurile dvs. sunt în cont, sunteți gata să tranzacționați. Alegeți activul pe care îl doriți (cum ar fi BTC, SOL sau USDT) și decideți-vă strategia.";
$how_cta_label = "Cum Funcționează";
$how_cta_text = "Aveți nevoie de mai multe informații despre modul în care funcționează serviciul?";
$how_cta_link = "Cum Funcționează";

// -- trust reasons section --
$trust_label = "De Ce Să Tranzacționați cu Noi";
$trust_intro = "Alăturați-vă miilor de utilizatori care tranzacționează deja cu $site_name.";
$trust_1_title = "Complet Reglementat";
$trust_1_text = "$site_name este înregistrată în mod corespunzător și respectă reglementările financiare aplicabile. Operăm sub reguli stricte pentru a vă asigura siguranța.";
$trust_2_title = "Securitate Avansată";
$trust_2_text = "Toate datele și fondurile dvs. sunt criptate și securizate. Aplicăm o protecție strictă a contului prin criptare SSL și autentificare cu doi factori.";
$trust_3_title = "Operațiuni Transparente";
$trust_3_text = "Nu ne ascundem niciodată comisioanele și nu adăugăm niciodată reguli surpriză. Înainte de fiecare tranzacție, vedeți exact ce comisioane se aplică.";
$trust_4_title = "Suport Receptiv";
$trust_4_text = "Echipa noastră de suport este disponibilă prin chat, telefon sau e-mail pentru a vă răspunde la întrebări sau a rezolva orice problemă.";
$trust_cta_text = "Mai multe informații despre condițiile de piață";
$trust_cta_link = "De Ce Să Tranzacționați";

// -- testimonials section heading (individual reviews already set above) --
$testimonials_label = "Testimoniale";
$testimonials_title = "De Încredere pentru Peste 4M de Traderi";

// -- FAQ section heading --
$faq_label = "Întrebări Frecvente";

// -- lead magnet CTA block --
$leadmagnet_title = "Nou în Tranzacționare?";
$leadmagnet_text1 = "După ce vă înregistrați, veți primi ghidul nostru gratuit,";
$leadmagnet_quote = "„10 Greșeli de Evitat Când Tranzacționați Criptomonede”";
$leadmagnet_text2 = "plin de sfaturi simple de la analiștii noștri cei mai experimentați pentru a vă ajuta să evitați cele mai frecvente greșeli.";
$leadmagnet_text3 = "Introduceți pur și simplu datele dvs. în timpul";
$leadmagnet_link = "înregistrării";
$leadmagnet_text4 = "și îl vom trimite direct în căsuța dvs. de e-mail. Mulți investitori au început cu acest ghid și spun că a făcut o diferență reală.";
$leadmagnet_text5 = "Piața nu așteaptă — începeți astăzi!";

// -- pre-about CTA band --
$pre_about_title = "Sunteți Gata Să Preluați Controlul Tranzacționării Dvs.?";
$pre_about_text = "Alăturați-vă $site_name astăzi și descoperiți o platformă construită pentru claritate, siguranță și rezultate.";
$pre_about_button = "Înregistrare";

// -- pretest (quiz teaser) badges/CTA --
$pretest_title = "Începeți Tranzacționarea cu $app_price $app_currency!";
$pretest_text = "Sunteți gata să încercați $site_name? Înregistrați-vă acum și alăturați-vă comunității în creștere de investitori și traderi de criptomonede.";
$pretest_button = "Înregistrare";
$pretest_badge_1 = "Sigur";
$pretest_badge_2 = "Reglementat";
$pretest_badge_3 = "De Încredere pentru Peste 4M de Traderi";

// -- about page --
$about_label = "Despre Noi";
$about_title = "Despre $site_name";
$about_intro = "$site_name nu vă oferă doar o platformă de tranzacționare — vă ajutăm să tranzacționați cu claritate și încredere.";
$about_text_1 = "$site_name este platforma oficială de tranzacționare online, concepută pentru a face tranzacționarea criptomonedelor accesibilă atât pentru începători, cât și pentru traderii experimentați.";
$about_text_2 = "Combinăm analiza de piață bazată pe IA cu un tablou de bord simplu și transparent, astfel încât să știți întotdeauna exact unde vă aflați.";
$about_text_3 = "Fiecare parte a platformei este construită în jurul clarității: fără comisioane ascunse, fără jargon confuz, doar informații clare pe baza cărora puteți acționa.";
$about_text_4 = "Platforma noastră vă economisește ore de presupuneri și vă protejează de alternative opace, de calitate scăzută. Credem că tranzacționarea ar trebui să se bazeze pe precizie, nu pe noroc.";

// -- contact page --
$contact_label = "Contactați-ne";
$contact_title = "Contactați $site_name";
$contact_subtitle = "Aveți o întrebare sau aveți nevoie de asistență? Suntem aici pentru a vă sfătui și a vă ghida.";
$contact_text = "La $site_name, credem că succesul în tranzacționare nu are nimic de-a face cu norocul — se bazează pe precizie, anticipare și instrumentele potrivite.";
$contact_form_text = "Completați pur și simplu formularul de mai jos, iar un membru al echipei noastre vă va contacta în curând.";
$contact_form_button = "Trimiteți Mesaj";

// -- footer navigation labels (geo-page footer, TZ items 12/16/18) --
$footnav_col_pages = "Pagini";
$footnav_col_support = "Suport";
$footnav_col_legal = "Legal";
$footnav_col_company = "Companie";
$footnav_home = "Acasă";
$footnav_sitemap = "Harta Site-ului";
$footnav_conditions = "Termenii de Utilizare";
$footnav_contact = "Contactați-ne";
$footnav_signup = "Înregistrare";
$footer_risk_warning = "Avertisment de Risc";

// -- geo-page footer legal disclaimer (single-paragraph variant used by
// the geo template's own footer layout; the two-paragraph TZ item 21
// text above -- $footer_disclaimer_p1/$footer_disclaimer_p2 -- covers
// the root pages) --
$footer_disclaimer = "$site_name oferă conținut educațional și informații generale despre piețele financiare, tranzacționarea online și activele digitale. Toate materialele publicate pe acest site sunt destinate exclusiv scopurilor informative și nu ar trebui considerate consiliere financiară, de investiții sau juridică. Tranzacționarea implică un risc semnificativ și poate să nu fie potrivită pentru fiecare investitor. Investiți doar bani pe care vă puteți permite să îi pierdeți.";

// ============================================================
// Geo-language SUBPAGE fallback content (TZ item 16 cont.). Same
// rationale as the block above: conditions/contacts/faq/offer/
// privacy/product/risk-warning/sign.php share templates across the
// bg/cs/da/... stub folders and reference these vars directly.
// English fallback so every geo folder's subpages render complete.
// ============================================================

// -- shared form aliases (service-page forms reuse the hero disclaimer) --
$form_disclaimer_risk_note = "Citiți de asemenea";
$form_text = $form_disclaimer_prefix;
$form_text_privacy = $form_privacy_link_label;
$form_text_privacy_and = $form_disclaimer_and;
$form_text_conditions = $form_terms_link_label;
$form_text_conditions_of = $form_disclaimer_of_site;
$form_text_risk_warning_note = $form_disclaimer_risk_note;
$form_submit = "Înregistrare";

// -- generic breadcrumbs (sign-up / product pages) --
$breadcrumb_home = "Acasă";
$breadcrumb_current = "Înregistrare / Autentificare";
$breadcrumb_product = "Produs";

// -- sign-up page official heading --
$official_heading = "Înregistrați-vă pe Platforma Oficială {$site_name}™";
$official_description = "Creați-vă contul gratuit pentru a începe să tranzacționați criptomonede pe o platformă sigură și transparentă.";

// -- product page: analytics banner --
$analytics_heading = "Tranzacționați Mai Inteligent cu $site_name";
$analytics_description = "Obțineți date de piață clare, în timp real, și perspective bazate pe IA. Luați decizii de tranzacționare informate, cu încredere.";

// -- product page: dashboard preview --
$app_main_heading = "Tabloul Dvs. de Bord de Tranzacționare";
$app_feature_1_title = "Date de Piață în Direct";
$app_feature_1_text = "Prețuri și grafice în timp real la îndemâna dvs.";
$app_feature_2_title = "Urmărirea Portofoliului";
$app_feature_2_text = "Metrici complete despre soldul și performanța dvs.";
$app_feature_3_title = "Vizualizare Mobilă";
$app_feature_3_text = "Optimizat pentru browsere mobile";
$app_feature_4_title = "Liste de Urmărire";
$app_feature_4_text = "Țineți evidența activelor pe care le urmăriți";

// -- product page: capabilities --
$capabilities_main_title = "La Ce Să Vă Așteptați";
$capabilities_feature_1_title = "Semnale Bazate pe IA";
$capabilities_feature_1_text = "Algoritmi avansați analizează semnalele pieței și scot la iveală oportunități non-stop.";
$capabilities_feature_2_title = "Înregistrare Rapidă";
$capabilities_feature_2_text = "Înregistrați-vă în câteva minute printr-un proces de înregistrare sigur și simplu.";
$capabilities_feature_3_title = "Securitate Verificată";
$capabilities_feature_3_text = "Criptarea SSL 256-bit, 2FA și 98% cold storage vă protejează fondurile la fiecare pas.";
$capabilities_feature_4_title = "Suport Continuu";
$capabilities_feature_4_text = "Obțineți suport de la echipa noastră la fiecare pas — de la înregistrare până la prima dvs. tranzacție.";

// -- product page: stats strip --
$products_stats_currencies_v = "65+";
$products_stats_currencies_l = "Monede Disponibile";
$products_stats_users_v = "4M+";
$products_stats_users_l = "Utilizatori Înregistrați";
$products_stats_volume_v = "98+";
$products_stats_volume_l = "Țări Susținute";
$products_stats_countries_v = "24/7";
$products_stats_countries_l = "Acces la Tranzacții";

// -- product page: 3-step strip --
$step_1 = "Creați un cont";
$step_2 = "Depuneți fonduri";
$step_3 = "Începeți să tranzacționați cu strategia care vi se potrivește";

// -- shared "last update" label (privacy page) --
$last_update = "Ultima actualizare";

// -- FAQ page --
$faq_page_meta_title = "Întrebări Frecvente | Suport $site_name";
$faq_page_meta_description = "Răspunsuri la întrebările frecvente despre modul în care funcționează $site_name, prețuri și cum să începeți.";
$faq_page_title = "Întrebări Frecvente";
$faq_page_breadcrumb_home = "Acasă";
$faq_page_breadcrumb_current = "Întrebări Frecvente";
$faq_page_help_title = "Cum vă putem ajuta?";
$faq_1_q = "Cum încep?";
$faq_1_a = "Creați-vă contul, verificați-vă adresa de e-mail și faceți primul dvs. depozit — planurile încep de la doar $app_price $app_currency.";
$faq_2_q = "Sunt banii și datele mele în siguranță? Este $site_name de încredere?";
$faq_2_a = "Da. Datele dvs. sunt protejate prin criptare standard 256-bit din industrie, iar fondurile dvs. sunt securizate cu autentificare cu doi factori și 98% cold storage.";
$faq_3_q = "Pot să-mi închid contul sau să retrag fonduri oricând?";
$faq_3_a = "Da. Nu există restricții privind retragerile. Contactați echipa noastră de suport oricând — vă vom ajuta cu contul dvs. sau vă vom procesa retragerea prompt.";
$faq_4_q = "Cum știu dacă această platformă este potrivită pentru mine?";
$faq_4_a = "$site_name a fost creată atât pentru începători absoluți, cât și pentru traderi experimentați care doresc să tranzacționeze mai eficient — fiecare instrument de pe platformă este conceput pentru a vă menține informat și în control.";
$faq_5_q = "Am nevoie de experiență de tranzacționare pentru a începe?";
$faq_5_a = "Nu este necesară nicio experiență anterioară. Modul nostru bazat pe IA se ocupă de analiză pentru dvs., iar dvs. puteți comuta în modul manual oricând, dacă doriți mai mult control.";

// -- contacts page --
$contacts_h3 = "Pentru întrebări tehnice sau întrebări despre contul dvs., vă rugăm să ne contactați prin e-mail";

// -- offer page (meta title/description already defined above) --
$offer_breadcrumb_home = "Acasă";
$offer_breadcrumb_current = "Ofertă";
$offer_cta_h1 = "Începeți Tranzacționarea Astăzi";
$offer_cta_text = "Gata în câteva minute: înregistrați-vă, finanțați-vă contul și începeți să tranzacționați criptomonede pe o platformă sigură și reglementată.";
$offer_how_it_works_title = "Cum Funcționează";
$offer_official_platform_title = "Aceasta Este Platforma Oficială de Tranzacționare {$site_name}™";
$offer_official_platform_text = "O modalitate de încredere și transparentă de a tranzacționa criptomonede — cu perspective în timp real și control total.";

// -- conditions of use page --
$conditions_meta_title = "Termenii de Utilizare | $site_name";
$conditions_meta_description = "Citiți Termenii de Utilizare oficiali pentru site-ul și platforma de tranzacționare $site_name.";
$conditions_breadcrumb_home = "Acasă";
$conditions_breadcrumb_current = "Termenii de Utilizare";
$conditions_h1 = "Termenii de Utilizare";
$conditions_s1_title = "1. Generalități";
$conditions_s1_text = "Acest site oferă acces la o platformă online de tranzacționare a criptomonedelor. Utilizarea platformei constituie acceptarea integrală a acestor termeni și a Politicii noastre de Confidențialitate.";
$conditions_s2_title = "2. Eligibilitate";
$conditions_s2_text = "Utilizatorii trebuie să aibă cel puțin 18 ani și să dețină capacitate juridică deplină în jurisdicția lor respectivă.";
$conditions_s3_title = "3. Acces Restricționat";
$conditions_s3_text = "Accesul poate fi restricționat în jurisdicțiile în care reglementările locale interzic tipul de serviciu de tranzacționare pe care îl oferim.";
$conditions_s4_title = "4. Utilizare Interzisă";
$conditions_s4_text = "Utilizatorii nu pot abuza de sistem, nu pot încerca accesul neautorizat la sistemele noastre și nu pot face inginerie inversă asupra software-ului nostru.";
$conditions_s5_title = "5. Proprietate Intelectuală";
$conditions_s5_text = "Tot codul sursă, interfețele de utilizator și activele de brand rămân proprietatea exclusivă a companiei care operează.";
$conditions_s6_title = "6. Răspundere";
$conditions_s6_text = "Instrumentele platformei sunt furnizate „ca atare”. Nu ne asumăm nicio răspundere pentru rezultatele care rezultă din deciziile proprii de tranzacționare ale utilizatorului.";
$conditions_s7_title = "7. Servicii Terțe";
$conditions_s7_text = "Integrările cu furnizorii de plăți terți au loc prin conexiuni sigure. Pentru depozite și retrageri, utilizatorii interacționează direct cu furnizorul ales de ei.";
$conditions_s8_title = "8. Link-uri Externe";
$conditions_s8_text = "Link-urile către resurse externe sunt furnizate doar pentru comoditate. Nu susținem și nu garantăm niciun software extern.";
$conditions_s9_title = "9. Diverse";
$conditions_s9_text = "Ne rezervăm dreptul de a modifica acești termeni sau serviciul în orice moment, cu modificări publicate pe site.";

// -- privacy policy page (meta title/description already defined above) --
$privacy_breadcrumb_home = "Acasă";
$privacy_breadcrumb_current = "Politica de Confidențialitate";
$privacy_page_h1 = "Politica de Confidențialitate";
$privacy_intro = "Respectăm confidențialitatea dvs. și procesăm datele personale în deplină conformitate cu standardele internaționale și GDPR-ul european.";
$privacy_transparency_title = "Transparență";
$privacy_transparency_text = "Dezvăluim clar modul în care sunt procesate datele de telemetrie operațională. Contactați suportul pentru mai multe detalii.";
$privacy_usage_title = "Utilizarea Datelor";
$privacy_usage_text = "Datele sunt utilizate exclusiv pentru a oferi acces, a securiza sesiunile și a îndeplini obligațiile de conformitate.";
$privacy_rights_short_title = "Drepturile Dvs.";
$privacy_rights_short_text = "Vă păstrați drepturile depline de a vizualiza, actualiza sau solicita ștergerea datelor dvs. personale.";
$privacy_security_title = "Securitate";
$privacy_security_text = "Folosim criptare AES-256 și izolarea bazei de date pentru a proteja datele de telemetrie operațională.";
$privacy_s1_title = "1. Colectarea Datelor";
$privacy_s1_text = "Colectăm telemetrie de utilizare (adresă IP, parametri de sistem, tip de browser), precum și date de verificare trimise de utilizatori.";
$privacy_s2_title = "2. Bază Legală";
$privacy_s2_text = "Procesarea se bazează pe consimțământul explicit al utilizatorilor, cerințele de conformitate regulatorie și furnizarea serviciului.";
$privacy_s3_title = "3. Partajarea Datelor";
$privacy_s3_text = "Datele nu sunt niciodată comercializate. Divulgările sunt limitate la entități de compensare autorizate și parteneri tehnici în baza unui acord de confidențialitate (NDA).";
$privacy_s4_title = "4. Cookie-uri";
$privacy_s4_text = "Cookie-urile esențiale sunt utilizate pentru autentificarea sesiunii și optimizarea interfeței.";
$privacy_google_choices = 'Gestionați-vă preferințele de urmărire prin <a href="http://www.google.com/settings/ads" target="_blank" rel="noopener">Setările Google Ads</a> sau folosiți <a href="https://tools.google.com/dlpage/gaoptout" target="_blank" rel="noopener">Add-on-ul de Renunțare Google Analytics</a>. De asemenea, puteți examina practicile proprii de date ale Google în <a href="https://www.google.com/intl/en/policies/privacy/" target="_blank" rel="noopener">Politica sa de Confidențialitate</a>.';
$privacy_s5_title = "5. Păstrarea Datelor";
$privacy_s5_text = "Datele personale sunt păstrate doar atât timp cât este necesar pentru a îndeplini cerințele de acces la sistem.";
$privacy_s6_title = "6. Transferuri Internaționale";
$privacy_s6_text = "Transferurile de date transfrontaliere au loc exclusiv prin canale criptate și prin clauze contractuale standard.";
$privacy_s7_title = "7. Link-uri Terțe";
$privacy_s7_text = "Nu suntem responsabili pentru practicile de confidențialitate ale serviciilor terțe externe conectate de pe site-ul nostru.";
$privacy_s8_title = "8. Actualizări";
$privacy_s8_text = "Această politică poate fi revizuită periodic pentru a reflecta schimbări de sistem sau legale.";
$privacy_rights_title = "Drepturile Dvs.";
$privacy_rights_text = "Utilizatorii au dreptul de a solicita accesul, corectarea, procesarea restricționată sau ștergerea completă a datelor lor stocate.";

// -- risk warning page --
$page_title_risk_warning = "Avertisment de Risc | $site_name";
$page_description_risk_warning = "Înțelegeți riscurile tranzacționării și modul în care $site_name vă ajută să le gestionați în siguranță.";
$risk_warning_breadcrumb_home = "Acasă";
$risk_warning_breadcrumb_current = "Avertisment de Risc";
$risk_warning_title = "Avertisment de Risc";
$risk_warning_intro = "Înțelegerea riscurilor este primul pas către tranzacționarea cu încredere.";
$risk_warning_ai_heading = "Cum vă ajută sistemul nostru IA în gestionarea riscului:";
$risk_warning_ai_1 = "<strong>Eficiență Algoritmică și Tranzacționare Fără Emoții:</strong> Algoritmi avansați analizează semnalele pieței pentru a executa tranzacții obiectiv la momentul optim.";
$risk_warning_ai_2 = "<strong>Strategii Bazate pe Date:</strong> Strategiile se bazează pe tipare de piață verificate și analize în timp real, nu pe presupuneri.";
$risk_warning_ai_3 = "<strong>Setări Flexibile și Control Deplin:</strong> Ajustați-vă parametrii de risc oricând. Urmăriți toate soldurile și tranzacțiile în mod transparent pe tabloul dvs. de bord — fără comisioane ascunse și fără restricții privind retragerile.";
$risk_warning_disclaimer = "<strong>Declinarea Responsabilității:</strong> Tranzacționarea implică întotdeauna risc. Sistemele automatizate (inclusiv IA) nu garantează profit, pot eșua din cauza erorilor software sau a evenimentelor neașteptate de piață și necesită supravegherea utilizatorului. Performanța trecută nu este un indicator al rezultatelor viitoare. Această platformă servește exclusiv scopurilor informative și de marketing și nu constituie consiliere financiară.";
$risk_warning_s1_heading = "1. Riscuri Generale și Riscurile Pieței de Criptomonede";
$risk_warning_s1_1 = "Criptomonedele sunt active extrem de volatile și speculative care se tranzacționează non-stop și sunt supuse doar unei supravegheri regulatorii minime în majoritatea jurisdicțiilor.";
$risk_warning_s1_2 = "Valorile pot fluctua drastic în perioade scurte de timp, putând duce la o pierdere completă a capitalului investit.";
$risk_warning_s1_3 = "Valorile de piață pot fi afectate semnificativ de schimbări regulatorii, dezvoltări tehnice, breșe de securitate sau evenimente macroeconomice mai ample.";
$risk_warning_s1_4 = "Unele active își pot pierde întreaga valoare. Investiți doar bani pe care vă puteți permite să îi pierdeți.";
$risk_warning_s2_heading = "2. Riscuri de Execuție, Lichiditate și Efect de Levier";
$risk_warning_s2_1 = "<strong>Volatilitatea Pieței și Lichiditatea:</strong> Mișcările extreme de preț (10-20%+ zilnic) sau lichiditatea scăzută (în special pentru monede mai mici) pot duce la întârzieri, întreruperi ale platformei și alunecare semnificativă a execuției. Ordinele stop-loss nu pot garanta limitarea pierderilor în condiții extreme.";
$risk_warning_s2_2 = "<strong>Riscul de Efect de Levier și Marjă:</strong> Produsele cu efect de levier amplifică atât câștigurile, cât și pierderile, ceea ce înseamnă că puteți pierde mai mult decât depozitul dvs. inițial. Aproximativ 70-80% din conturile investitorilor de retail pierd bani atunci când tranzacționează produse cu efect de levier.";
$risk_warning_s3_heading = "3. Riscuri Tehnice, de Securitate Cibernetică și Terțe";
$risk_warning_s3_1 = "<strong>Factori Tehnici:</strong> Tranzacționarea online implică riscuri inerente, cum ar fi întreruperile conexiunii la internet, defecțiunile hardware/software și indisponibilitatea serviciului.";
$risk_warning_s3_2 = "<strong>Securitate Cibernetică:</strong> Conturile de criptomonede sunt ținte frecvente ale phishingului, malware-ului și tentativelor de hacking. Tranzacțiile sunt ireversibile; compromiterea datelor dvs. de autentificare poate duce la o pierdere permanentă.";
$risk_warning_s3_3 = "<strong>Platforme Terțe:</strong> Acest site poate conecta utilizatorii la platforme terțe. Nu controlăm, nu susținem și nu garantăm securitatea, operațiunile sau solvabilitatea acestora. Efectuați întotdeauna propria dvs. verificare amănunțită înainte de a depune fonduri pe platforme externe.";
$risk_warning_s4_heading = "4. Prevederi Regulatorii, Fiscale și Finale";
$risk_warning_s4_1 = "<strong>Conformitate Legală și Taxe:</strong> Cadrele regulatorii variază foarte mult și se schimbă rapid. Utilizatorii sunt singurii responsabili pentru a se asigura că activitățile lor de tranzacționare respectă legile locale, precum și pentru a-și îndeplini propriile obligații fiscale.";
$risk_warning_s4_2 = "<strong>Fără Garanții de Profit:</strong> Nu există tranzacționare „sigură” sau lipsită de riscuri cu criptomonede. Orice cifre de randament sau exemple de performanță furnizate sunt pur ipotetice.";
$risk_warning_s4_3 = "<strong>Adecvare:</strong> Dacă nu înțelegeți pe deplin riscurile, depindeți de resurse financiare necesare sau tranzacționați cu bani împrumutați, tranzacționarea cu criptomonede nu este potrivită pentru dvs. În caz de îndoială, consultați un consultant financiar independent și licențiat.";
$risk_warning_contact = "<strong>Contact:</strong> Dacă aveți întrebări despre această declarație sau doriți să trimiteți o solicitare, vă rugăm să contactați echipa noastră oficială de asistență pentru clienți prin formularul de contact de pe site-ul nostru.";

