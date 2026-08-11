<?php
require __DIR__ . '/../lang.php';

// Identity / config variables are intentionally NOT overridden here — they are inherited
// as-is from the root lang.php so brand/pricing swaps still work correctly at deploy time:
// $site_name, $site_url, $site_domain, $app_price, $app_currency, $rating_value,
// $rating_count, $review_count, $country_name, $support_email, $institutional_email.

$site_lang = 'hr-HR';
$form_language = 'hr';

// Reviews
$review_1_author = "Privatni investitor";
$review_2_author = "Nezavisni trgovac";
$review_3_author = "Trgovac digitalnom imovinom";
$review_4_author = "Tražitelj pasivnog prihoda";


// META TITLE / DESCRIPTION (per page)
$home_meta_title = "$site_name — Službena web stranica | Platforma za trgovanje";
$home_meta_description = "$site_name ⭐ — inteligentna AI platforma za trgovanje za analizu tržišta u stvarnom vremenu i jasne signale za trgovanje ⚡ Isprobajte pametne alate i uvide uz vođeni obilazak.";



$quiz_consultant_name = 'Mia';
$quiz_consultant_role = 'Asistentica za integraciju';

$quiz_text_welcome   = "Pozdrav! Ja sam $quiz_consultant_name, vaša osobna asistentica za integraciju na platformi $site_name. Odlične vijesti! Vaš pristup je službeno unaprijed odobren. Dopustite nam da sada konfiguriramo vaš profesionalni profil!";
$quiz_text_q1 = "Kako bismo osigurali potpunu regulatornu i pravnu usklađenost, molimo potvrdite svoju trenutnu državu prebivališta: $country_name";
$quiz_text_a1_yes    = "Da, ovo je moje trenutno prebivalište";
$quiz_text_a1_no     = "Ne";

$quiz_text_q2 = "Savršeno. Molimo odaberite odgovarajuću dobnu kategoriju kako bismo pronašli najprikladnije financijske instrumente:";

$quiz_text_q3        = "Imate li aktivan bankovni račun ili kreditnu karticu za primanje redovitih dnevnih isplata dividendi?";
$quiz_text_a3_yes    = "Da, dostupan je aktivan račun";
$quiz_text_a3_no     = "Još nije dostupno";

$quiz_text_q4        = "Molimo navedite primarni izvor osobnog prihoda. (Ovaj parametar pomaže u prilagođavanju postavki upravljanja rizikom sustava).";
$quiz_text_a4_1      = "Službeno zaposlenje / Samozapošljavanje";
$quiz_text_a4_2      = "Pasivni prihod / Osobna ušteđevina";
$quiz_text_a4_3      = "Ostali izvori";

$quiz_text_q5 = "Odlično! Posljednji korak je kratka telefonska provjera od strane našeg menadžera kako bi se potvrdila vaša registracija. Pozivi se obavljaju od 11:00 do 20:00 sati. Hoćete li moći prihvatiti poziv?";
$quiz_text_a5_yes    = "Da, ovo vrijeme mi odgovara za poziv";
$quiz_text_a5_no     = "Molimo odmah započnite poziv";

$quiz_text_loader    = "Analiziranje zatraženih opcija i inicijalizacija parametara konfiguracije sigurnog računa...";
$quiz_text_final_ttl = "Račun uspješno autoriziran! 🎉 Siguran digitalni radni prostor je u potpunosti konfiguriran. Molimo dovršite posljednje korake provjere u nastavku kako biste osigurali dnevne isplate:";

$quiz_placeholder_fname = "Ime";
$quiz_placeholder_lname = "Prezime";
$quiz_placeholder_email = "Adresa e-pošte";
$quiz_placeholder_phone = "Broj telefona";
$quiz_btn_submit = "Aktiviraj trgovanje";
$quiz_text_typing       = "piše poruku...";
$quiz_text_processing   = "Obrada zahtjeva...";


$about_meta_title = "O nama | $site_name | AI infrastruktura za kripto trgovanje";
$about_meta_description = "Saznajte više o platformi $site_name, naprednoj AI infrastrukturi za kripto trgovanje fokusiranoj na prediktivnu analitiku, tržišnu inteligenciju, praćenje volatilnosti i istraživanje digitalne imovine.";

$contact_meta_title = "Kontaktirajte $site_name | Zatražite pristup AI platformi za trgovanje";
$contact_meta_description = "Kontaktirajte $site_name kako biste zatražili pristup, pitali o AI infrastrukturi za kripto trgovanje, podržanim tržištima, inteligenciji digitalne imovine ili integraciji na platformu.";

$terms_meta_title = "Uvjeti i odredbe | $site_name Uvjeti korištenja web stranice i platforme";
$terms_meta_description = "Pročitajte Uvjeti i odredbe platforme $site_name koji pokrivaju korištenje web stranice, informativni sadržaj, AI infrastrukturu za trgovanje, odgovornost korisnika, usluge trećih strana i ograničenja rizika.";

$privacy_meta_title = "Politika privatnosti | $site_name Zaštita podataka i privatnost korisnika";
$privacy_meta_description = "Pročitajte Politiku privatnosti platforme $site_name kako biste razumjeli kako prikupljamo, koristimo, štitimo, pohranjujemo i upravljamo osobnim podacima podnesenima putem naše AI infrastrukture za kripto trgovanje.";

$cookies_meta_title = "Politika kolačića | $site_name Kolačići i praćenje na web stranici";
$cookies_meta_description = "Saznajte kako $site_name koristi kolačiće, analitičke tehnologije, alate za praćenje performansi i usluge funkcionalnosti web stranice kako bi poboljšao korisničko iskustvo i performanse platforme.";

$aml_meta_title = "AML Politika | $site_name Standardi protiv pranja novca";
$aml_meta_description = "Pregledajte AML Politiku platforme $site_name, uključujući odgovorno korištenje digitalne imovine, svijest o sprječavanju pranja novca, zabranjene aktivnosti, principe praćenja i očekivanja o usklađenosti.";

$risk_meta_title = "Otkrivanje rizika | $site_name Izjava o riziku kripto trgovanja";
$risk_meta_description = "Pregledajte Otkrivanje rizika platforme $site_name kako biste razumjeli volatilnost kriptovaluta, nesigurnost trgovanja, ograničenja AI signala, tržišni rizik, rizik likvidnosti i odgovornost korisnika.";

$exchanges_meta_title = "Podržane burze | $site_name Pokrivenost tržišne inteligencije";
$exchanges_meta_description = "Istražite vrste burzi kriptovaluta, mjesta likvidnosti i tržišta digitalne imovine koje prati AI infrastruktura za tržišnu inteligenciju platforme $site_name.";


$about_breadcrumb_name = "O $site_name";
$contact_breadcrumb_name = "Kontakt $site_name";
$terms_breadcrumb_name = "Uvjeti i odredbe";
$privacy_breadcrumb_name = "Politika privatnosti";
$cookies_breadcrumb_name = "Politika kolačića";
$aml_breadcrumb_name = "AML Politika";
$risk_breadcrumb_name = "Otkrivanje rizika";
$exchanges_breadcrumb_name = "Podržane burze";

$hero_text = "Doživite novu eru trgovanja s našom naprednom platformom za kripto trgovanje. Uz AI tehnologiju $site_name, možete optimizirati svoje povrate i donositi informirane investicijske odluke.";


// EMAIL
// $support_email = "support@" . $site_domain;
// $institutional_email = "institutional@" . $site_domain;


// HEADER / NAV / FOOTER
$logo_subtitle = "AI Infrastruktura za trgovanje";
$nav_signals = "Signali";
$nav_reviews = "Recenzije";
$nav_about = "O nama";
$nav_exchanges = "Burze";
$nav_exchanges_full = "Podržane burze";
$nav_risk = "Rizik";
$nav_risk_full = "Otkrivanje rizika";
$nav_faq = "Česta pitanja";
$nav_privacy = "Politika privatnosti";
$nav_terms = "Uvjeti i odredbe";
$nav_cookies = "Politika kolačića";
$nav_cookies_short = "Kolačići";
$nav_aml = "AML Politika";
$nav_contact_us = "Kontaktirajte nas";
$nav_contact = "Kontakt";
$nav_get_started = "Započnite";
$header_ai_status = "AI jezgra operativna";
$header_menu_aria = "Izbornik";
$footer_platform = "Platforma";
$footer_resources = "Resursi";
$footer_contact_title = "Kontakt";
$footer_ai_signals = "AI Signali";
$footer_about_link = "O $site_name";
$footer_description = "$site_name je napredna AI infrastruktura za kripto trgovanje fokusirana na prediktivnu analitiku, institucionalnu tržišnu inteligenciju, modeliranje volatilnosti, sustave neuronske egzekucije i automatizirano upravljanje rizikom.";
$footer_monitoring = "24/7 AI Praćenje infrastrukture";
$footer_global_markets = "Globalna tržišta digitalne imovine";
$footer_disclaimer_title = "Otkrivanje rizika";
$footer_disclaimer_p1 = "Trgovanje kriptovalutama i ulaganje u digitalnu imovinu uključuju značajan financijski rizik i možda nisu prikladni za sve ulagače. Volatilnost tržišta, poremećaji likvidnosti, tehnološki kvarovi, regulatorne promjene i makroekonomski uvjeti mogu značajno utjecati na performanse imovine.";
$footer_disclaimer_p2 = "$site_name pruža analitičku infrastrukturu pokretanu umjetnom inteligencijom, prediktivnu tržišnu inteligenciju i automatizirane tehnologije trgovanja. Ništa što se nalazi na ovoj web stranici ne predstavlja financijski, investicijski, pravni ili porezni savjet.";
$footer_disclaimer_p3 = "Prošli rezultati ne jamče buduće rezultate. Korisnici bi trebali samostalno procijeniti rizike prije uključivanja u tržišta kriptovaluta ili automatizirane sustave trgovanja.";
$footer_rights = "Sva prava pridržana.";
$footer_lang_label = "Jezik";



// HOME FORM
$home_form_fname = "Ime";
$home_form_lname = "Prezime";
$home_form_email = "E-pošta";
$home_form_submit_access = "Ostvari pristup";
$home_form_submit_platform = "Zatraži pristup platformi";

// CONTACT FORM
$contact_form_fname = "Ime";
$contact_form_lname = "Prezime";
$contact_form_email = "E-pošta";
$contact_form_submit = "Zatraži pristup";


// HOME LABELS
$home_label_ai_confidence = "AI Pouzdanost";
$home_label_update_speed = "Brzina ažuriranja";
$home_label_market_mode = "Način rada tržišta";
$home_label_market_condition = "Stanje na tržištu";
$home_label_buyer_activity = "Aktivnost kupaca";
$home_label_market_activity = "Tržišna aktivnost";
$home_label_risk_level = "Razina rizika";
$home_label_updated = "Ažurirano";
$home_label_live_analysis = "ANALIZA UŽIVO";

// JS
$home_js_sec_ago = "sekundi prije";
$js_sec_ago = "sekundi prije";
$js_close_notification = "Zatvori obavijest";

$js_signal_long_direction = "Vjerojatnost uzlaznog trenda raste";
$js_signal_long_market = "Kontrolirano širenje";
$js_signal_long_pressure_label = "Pritisak likvidnosti";
$js_signal_long_pressure = "Bikovsko";

$js_signal_short_direction = "Pritisak prema dolje raste";
$js_signal_short_market = "Visoka nestabilnost";
$js_signal_short_pressure_label = "Pritisak rizika";
$js_signal_short_pressure = "Medvjeđe";

$js_signal_watch_direction = "Otkrivena zona konsolidacije";
$js_signal_watch_market = "Neutralna konsolidacija";
$js_signal_watch_pressure_label = "Institucionalni protok";
$js_signal_watch_pressure = "Stabilno";

$js_hero_long_pair = "BTC/USD Ekspanzija momenta";
$js_hero_long_regime = "Bikovsko";
$js_hero_long_feed_1 = "Otkrivena ekspanzija BTC likvidnosti";
$js_hero_long_feed_2 = "Pritisak protoka narudžbi postaje pozitivan";
$js_hero_long_feed_3 = "AI model potvrđuje bikovski nastavak";

$js_hero_watch_pair = "ETH/USD Kompresija volatilnosti";
$js_hero_watch_regime = "Neutralno";
$js_hero_watch_feed_1 = "Otkrivena ETH zona kompresije";
$js_hero_watch_feed_2 = "AI čeka snažniju potvrdu";
$js_hero_watch_feed_3 = "Likvidnost ostaje stabilna";

$js_hero_short_pair = "SOL/USD Ekspanzija rizika";
$js_hero_short_regime = "Smanjenje rizika";
$js_hero_short_feed_1 = "Otkriven pritisak pada na SOL";
$js_hero_short_feed_2 = "Model rizika označava ekspanziju volatilnosti";
$js_hero_short_feed_3 = "AI smanjuje bikovsku izloženost";

// JS — live user popup actions
$js_live_action_1 = "pridružio se platformi $site_name iz";
$js_live_action_2 = "zatražio pristup platformi iz";
$js_live_action_3 = "započeo praćenje AI signala iz";
$js_live_action_4 = "aktivirao analizu tržišta iz";
$js_live_action_5 = "otvorio institucionalnu nadzornu ploču iz";
$js_live_action_6 = "spojio se na $site_name iz";


// HOME PAGE
$home_hero_label = "AI Kripto Platforma Za Svaku Razinu Iskustva";
$home_hero_title = "$site_name Platforma";
$home_hero_desc = "$site_name pomaže početnicima i iskusnim trgovcima da istraže kripto tržišta pomoću AI uvida, praćenja tržišta u stvarnom vremenu, alata za svjesnost o riziku i vođene podrške platforme.";
$home_hero_feat_1 = "Jednostavni AI uvidi u tržište za nove korisnike";
$home_hero_feat_2 = "Praćenje kriptovaluta u stvarnom vremenu i ažuriranje signala";
$home_hero_feat_3 = "Alati svjesni rizika za pametnije odluke";
$home_hero_feat_4 = "Napredna analitika za iskusne trgovce";
$home_btn_request_access = "Ostvari pristup platformi";
$home_btn_view_signals = "Pogledaj AI Signale";
$home_trust_data_label = "Analizirane točke tržišnih podataka";
$home_trust_confidence_label = "Prosječna pouzdanost signala";
$home_trust_monitoring_label = "AI Praćenje tržišta";
$home_terminal_title = "$site_name Vođeni pogled na AI tržište";
$home_terminal_insight_label = "Trenutni uvid u AI tržište";
$home_terminal_feed_1 = "Tržišna aktivnost BTC-a pokazuje jači zamah";
$home_terminal_feed_2 = "Kretanje ETH-a prati se radi potvrde";
$home_terminal_feed_3 = "AI asistent ističe moguću zonu prilika";
$home_trust_strip_1 = "AI Uvidi za početnike i iskusne trgovce";
$home_trust_strip_2 = "24/7 Praćenje tržišta kriptovaluta";
$home_trust_strip_3 = "Analiza rizika i prilika u stvarnom vremenu";
$home_trust_strip_4 = "Vođeni pristup naprednim alatima za trgovanje";
$home_signals_eyebrow = "$site_name UŽIVO AI JEZGRA";
$home_signals_title = "AI tržišni signali u stvarnom vremenu za pametnije kripto odluke";
$home_signals_desc = "$site_name kontinuirano prati aktivnost na tržištu kriptovaluta, volatilnost, uvjete likvidnosti, trendove raspoloženja i blockchain podatke kako bi generirao AI uvide i tržišne signale u stvarnom vremenu za početnike i iskusne trgovce.";
$home_signals_terminal_title = "$site_name AI Signalni Motor";
$home_signal_btc_sub = "Otkriven pozitivan zamah";
$home_signal_btc_dir = "Vjerojatnost uzlaznog trenda raste";
$home_signal_btc_market = "Pozitivan zamah";
$home_signal_btc_activity = "Snažno";
$home_signal_eth_sub = "Čeka se potvrda tržišta";
$home_signal_eth_dir = "Otkriveno bočno kretanje";
$home_signal_eth_market = "Neutralni trend";
$home_signal_eth_activity = "Stabilno";
$home_signal_sol_sub = "Otkriven povećan tržišni rizik";
$home_signal_sol_dir = "Pritisak prema dolje raste";
$home_signal_sol_market = "Visoka volatilnost";
$home_signal_sol_risk = "Povišeno";
$home_why_eyebrow = "ZAŠTO $site_name?";
$home_why_title = "Kripto alati pokretani umjetnom inteligencijom izgrađeni za svaku razinu iskustva";
$home_why_desc_1 = "$site_name pomaže korisnicima da bolje razumiju tržišta kriptovaluta putem umjetne inteligencije, praćenja u stvarnom vremenu, uvida u tržište i alata za osvještavanje rizika. Bilo da prvi put istražujete kriptovalute ili već imate iskustva u trgovanju, platforma je dizajnirana da analizu tržišta učini pristupačnijom i lakšom za razumijevanje.";
$home_why_desc_2 = "Infrastruktura $site_name kontinuirano procjenjuje tržišnu aktivnost, kretanje cijena, uvjete likvidnosti, trendove raspoloženja i blockchain podatke kako bi identificirala nove prilike i promjenjive tržišne uvjete. Novi korisnici mogu imati koristi od vođene podrške platforme, dok iskusni trgovci mogu istraživati napredne analitičke alate i tržišnu inteligenciju pokretanu umjetnom inteligencijom.";
$home_flow_1 = "Praćenje tržišta";
$home_flow_2 = "AI Analiza";
$home_flow_3 = "Otkrivanje prilika";
$home_flow_4 = "Procjena rizika";
$home_flow_5 = "Praktični uvidi";
$home_reviews_eyebrow = "$site_name ZAJEDNICA";
$home_reviews_title = "Što korisnici kažu o platformi $site_name";
$home_reviews_desc = "Od korisnika kriptovaluta po prvi put do iskusnih trgovaca, ljudi koriste $site_name kako bi bolje razumjeli tržišne uvjete, istražili uvide vođene umjetnom inteligencijom i pristupili odlukama o kriptovalutama s više jasnoće.";
$home_review_1_text = "Prije nego što sam otkrio $site_name, osjećao sam se preplavljenim količinom informacija u svijetu kriptovaluta. Svaka platforma činila se kompliciranom i stalno sam se brinuo hoću li pogriješiti. Ono što najviše cijenim kod platforme $site_name jest koliko sve izgleda pristupačno. AI uvidi pomogli su mi razumjeti tržišne uvjete bez osjećaja izgubljenosti, a platforma mi je dala samopouzdanje da počnem učiti vlastitim tempom. Iskreno sam zahvalan koliko je iskustvo postalo lakše u usporedbi s onim što sam očekivao.";
$home_review_1_tag = "Siguran i lak početak";
$home_review_badge = "POTVRĐENI KORISNIK";
$home_review_2_text = "Proveo sam mjesece gledajući kripto platforme, a da se nikada nisam osjećao dovoljno ugodno napraviti prvi korak. $site_name je potpuno promijenio to iskustvo. Platforma je informacije o tržištu učinila lakšim za razumijevanje i nikada se nisam osjećao kao da mi trebaju godine iskustva u trgovanju samo da bih koristio alate. Ono što me se najviše dojmilo bila je ravnoteža između jednostavnosti i snažne AI analize. Čini se kao da su vam smjernice dostupne kad god zatrebaju. Zahvalan sam što sam pronašao platformu koja mi je pomogla učiti, a da me nije zastrašila.";
$home_review_2_tag = "Lakše iskustvo učenja";
$home_review_3_text = "Testirao sam mnoge platforme za analizu tržišta, a $site_name se ističe jer uravnotežuje pristupačnost s ozbiljnom analitičkom dubinom. Novi korisnici mogu brzo razumjeti platformu, dok iskusni trgovci i dalje dobivaju korisne tržišne signale vođene umjetnom inteligencijom, praćenje rizika i obavještajne podatke o kriptovalutama u stvarnom vremenu. Tu ravnotežu je teško pronaći. Platforma pruža smislen tržišni kontekst bez preopterećenja korisnika, što je nešto što vrlo malo kripto alata uspijeva postići.";
$home_review_3_tag = "Napredni alati uz jednostavnu upotrebu";
$home_review_span_1 = "Novi korisnik kriptovaluta";
$home_review_span_2 = "Korisnik po prvi put";
$home_review_span_3 = "Profesionalni kripto trgovac";
$home_review_1_avatar_alt = "Marko Horvat, korisnik $site_name";
$home_review_2_avatar_alt = "Ivan Kovačević, korisnik $site_name";
$home_review_3_avatar_alt = "Luka Novak, korisnik $site_name";
$home_hero_visual_alt = "Nadzorna ploča s tržišnom analitikom pokretana umjetnom inteligencijom na $site_name";
$home_signal_visual_alt = "Signal za trgovanje u stvarnom vremenu kojeg generira AI $site_name";
$home_device_visual_alt = "Kripto analitika prikazana na povezanom uređaju putem $site_name";
$home_security_visual_alt = "Sigurnosni štit predstavlja zaštitu računa na platformi $site_name";
$home_contact_eyebrow = "ZAPOČNITE S PLATFORMOM $site_name";
$home_contact_title = "Istražite platformu s povjerenjem";
$home_contact_section_title = "Istražite platformu s povjerenjem";
$home_contact_desc_1 = "Bilo da ste potpuno novi na tržištima kriptovaluta ili već imate iskustva u trgovanju, $site_name pruža pristup AI uvidima u tržište, alatima za praćenje u stvarnom vremenu i inteligentnoj analitici dizajniranoj da pomogne korisnicima u boljem razumijevanju prilika za digitalnu imovinu.";
$home_contact_desc_2 = "Pošaljite svoje podatke kako biste saznali više o platformi, istražili dostupne značajke i otkrili kako vam $site_name može pomoći u navigaciji tržištima kriptovaluta kroz naprednu tehnologiju i vođenu podršku platforme.";
$home_seo_toggle = "Saznajte više o AI platformi $site_name";
$home_seo_h2 = "$site_name AI platforma za pametnije odluke na kripto tržištu";
$home_seo_p1 = "$site_name je platforma za kriptovalute pokretana umjetnom inteligencijom osmišljena kako za početnike tako i za iskusne trgovce. Platforma kombinira umjetnu inteligenciju, praćenje tržišta u stvarnom vremenu i napredne analitičke alate kako bi korisnicima pomogla da bolje razumiju tržišta digitalne imovine i prepoznaju potencijalne prilike.";
$home_seo_p2 = "Za razliku od mnogih tradicionalnih platformi za trgovanje koje zahtijevaju opsežno znanje o tržištu, $site_name je izgrađena kako bi složene tržišne informacije učinila lakšima za razumijevanje. Platforma kontinuirano analizira aktivnosti kriptovaluta, kretanja cijena, trendove raspoloženja, uvjete likvidnosti i blockchain podatke, pretvarajući velike količine informacija u praktične uvide.";
$home_seo_p3 = "Bilo da prvi put istražujete tržišta kriptovaluta ili već imate iskustva u trgovanju digitalnom imovinom, $site_name pruža inteligentne alate osmišljene kako bi podržali informiranije donošenje odluka, istodobno se prilagođavajući promjenjivim tržišnim uvjetima u stvarnom vremenu.";
$home_seo_h3_1 = "AI analiza tržišta postala pristupačna";
$home_seo_h3_1_p1 = "$site_name koristi umjetnu inteligenciju za procjenu širokog raspona tržišnih indikatora, uključujući aktivnost trgovanja, obrasce volatilnosti, uvjete likvidnosti, blockchain događaje i tržišno raspoloženje. Kontinuiranom obradom informacija, platforma pomaže korisnicima da jasnije razumiju trenutno ponašanje tržišta.";
$home_seo_h3_1_p2 = "AI modeli dizajnirani su da se prilagode promjenjivom okruženju umjesto da se oslanjaju na statične pretpostavke. To omogućuje platformi dinamično reagiranje na promjenjive trendove kriptovaluta i nove prilike na tržištu.";
$home_seo_h3_1_p3 = "Iako je dovoljno napredna za iskusne trgovce, platforma je također strukturirana tako da ostane pristupačna novim korisnicima koji žele pristup tržišnoj inteligenciji vođenoj umjetnom inteligencijom bez potrebe za dubokim tehničkim znanjem.";
$home_seo_h3_2 = "AI tržišni signali u stvarnom vremenu";
$home_seo_h3_2_p1 = "$site_name kontinuirano prati tržišta kriptovaluta i generira uvide pokretane umjetnom inteligencijom na temelju promjena u tržišnoj aktivnosti. Platforma procjenjuje zamah, volatilnost, uvjete likvidnosti i šire tržišno ponašanje kako bi pružila analitičke signale u stvarnom vremenu.";
$home_seo_h3_2_p2 = "Bitcoin, Ethereum, Solana, XRP, Avalanche i druga glavna digitalna imovina prate se kroz adaptivne analitičke modele koji se automatski prilagođavaju promjenjivim tržišnim uvjetima.";
$home_seo_h3_2_p3 = "Umjesto oslanjanja na jedan indikator ili izoliranu metriku, $site_name kombinira više izvora informacija u širi analitički okvir osmišljen kako bi pružio potpuniji uvid u stanje na tržištu.";
$home_seo_h3_3 = "Inteligentni alati za svijest o riziku";
$home_seo_h3_3_p1 = "Tržišta kriptovaluta mogu se brzo promijeniti. $site_name uključuje sustave za praćenje temeljene na umjetnoj inteligenciji dizajnirane za prepoznavanje neobične volatilnosti, promjenjivih uvjeta likvidnosti i novih tržišnih rizika.";
$home_seo_h3_3_p2 = "Platforma kontinuirano procjenjuje ponašanje tržišta i potencijalne čimbenike rizika, pomažući korisnicima da bolje razumiju promjenjive uvjete i donesu informiranije odluke.";
$home_seo_h3_3_p3 = "Kombiniranjem više slojeva analize, $site_name nastoji poboljšati svijest o tržištu i pomoći korisnicima da s većim samopouzdanjem upravljaju razdobljima povećane nesigurnosti.";
$home_seo_h3_4 = "Dizajnirano za moderna tržišta kriptovaluta";
$home_seo_h3_4_p1 = "$site_name objedinjuje umjetnu inteligenciju, tehnologije za praćenje u stvarnom vremenu i napredne analitičke alate u jedinstvenu platformu dizajniranu za moderna tržišta digitalne imovine.";
$home_seo_h3_4_p2 = "Infrastruktura kontinuirano procjenjuje tržišne aktivnosti, razvoj blockchaina, promjene raspoloženja i trendove likvidnosti kako bi pružila sveobuhvatan prikaz ponašanja kriptovalutnog tržišta.";
$home_seo_h3_4_p3 = "Kako se tržišta digitalne imovine nastavljaju razvijati, AI alati mogu pomoći korisnicima da učinkovitije obrađuju informacije i bolje razumiju sve složenija tržišna okruženja. $site_name je dizajniran kako bi te mogućnosti učinio dostupnima širem krugu sudionika na tržištu.";
$home_seo_side_1_label = "AI Uvidi";
$home_seo_side_1_title = "Lako razumljiva analiza tržišta";
$home_seo_side_1_desc = "Uvidi temeljeni na umjetnoj inteligenciji osmišljeni za nove i iskusne korisnike kriptovaluta.";
$home_seo_side_2_label = "Praćenje tržišta";
$home_seo_side_2_title = "Kripto praćenje u stvarnom vremenu";
$home_seo_side_2_desc = "Kontinuirano praćenje glavnih tržišta kriptovaluta i promjenjivih tržišnih uvjeta.";
$home_seo_side_3_label = "Svijest o riziku";
$home_seo_side_3_title = "Inteligentno otkrivanje rizika";
$home_seo_side_3_desc = "Napredni alati za praćenje osmišljeni kako bi naglasili promjenjivu dinamiku tržišta i volatilnost.";
$home_seo_side_4_label = "AI Tehnologija";
$home_seo_side_4_title = "Prilagodljivi analitički modeli";
$home_seo_side_4_desc = "Sustavi strojnog učenja koji kontinuirano procjenjuju tržišne podatke i nove trendove.";
$home_faq_eyebrow = "$site_name BAZA ZNANJA";
$home_faq_title = "Često postavljana pitanja o $site_name";
$home_faq_desc = "Saznajte više o tome kako platforma radi, za koga je dizajnirana i kako umjetna inteligencija pomaže korisnicima da bolje razumiju uvjete kripto tržišta.";
$home_faq_q1 = "Trebam li iskustvo u trgovanju za korištenje platforme $site_name?";
$home_faq_a1 = "Ne. $site_name je osmišljena za korisnike različitih razina iskustva, uključujući osobe koje su potpuno nove na kripto tržištima. Platforma koristi AI uvide i alate za praćenje tržišta kako bi složene informacije bile lakše razumljive.";
$home_faq_q2 = "Što zapravo radi $site_name?";
$home_faq_a2 = "$site_name kontinuirano analizira tržišta kriptovaluta koristeći umjetnu inteligenciju. Platforma procjenjuje tržišnu aktivnost, volatilnost, trendove raspoloženja, uvjete likvidnosti i blockchain podatke za generiranje uvida i analitičkih signala u stvarnom vremenu.";
$home_faq_q3 = "Mogu li iskusni trgovci koristiti $site_name?";
$home_faq_a3 = "Da. Iako je platforma prilagođena početnicima, ona također pruža napredne analitičke alate, tržišnu inteligenciju vođenu umjetnom inteligencijom i značajke praćenja u stvarnom vremenu koje mogu biti dragocjene iskusnim sudionicima na tržištu.";
$home_faq_q4 = "Koje kriptovalute prati $site_name?";
$home_faq_a4 = "Platforma može analizirati glavnu digitalnu imovinu kao što su Bitcoin, Ethereum, Solana, XRP, Avalanche i druge široko trgovane kriptovalute ovisno o tržišnim uvjetima i dostupnim izvorima podataka.";
$home_faq_q5 = "Kako se generiraju AI signali?";
$home_faq_a5 = "$site_name istovremeno procjenjuje više tržišnih čimbenika, uključujući volatilnost, aktivnost trgovanja, uvjete likvidnosti, trendove raspoloženja i povijesno ponašanje tržišta. AI modeli kombiniraju te podatke kako bi identificirali promjene na tržištu i potencijalne prilike.";
$home_faq_q6 = "Pruža li $site_name obrazovne smjernice?";
$home_faq_a6 = "Platforma je dizajnirana kako bi pomogla korisnicima u boljem razumijevanju tržišnih uvjeta putem analize vođene umjetnom inteligencijom, pojednostavljenih uvida i vođenog pristupa značajkama platforme. Novi korisnici mogu istraživati tržišta kriptovaluta bez potrebe za naprednim tehničkim znanjem.";
$home_cta_label = "AI platforma spremna";
$home_cta_title = "Počnite istraživati $site_name već danas";
$home_cta_desc = "Otkrijte tržišne uvide pokretane umjetnom inteligencijom, praćenje kriptovaluta u stvarnom vremenu, inteligentne alate za svijest o riziku i naprednu analitiku dizajniranu za početnike i iskusne trgovce.";
$home_ticker_text = "Aktivno AI praćenje tržišta • Analiza kriptovaluta u stvarnom vremenu • Bitcoin zamah jača • Otkrivena konsolidacija Ethereuma • Identificirane nove tržišne prilike • Sustavi za praćenje rizika su na mreži • AI uvidi se kontinuirano ažuriraju • Dizajnirano za početnike i iskusne trgovce";





// ABOUT PAGE
$about_h1 = "O $site_name";
$about_p1 = "$site_name je infrastruktura umjetne inteligencije sljedeće generacije osmišljena kako bi pomogla sudionicima na tržištu da bolje razumiju ekosustav kriptovaluta koji se brzo razvija. Kombinirajući tehnologije strojnog učenja, prediktivnu analitiku, sustave tržišne inteligencije i obradu podataka u stvarnom vremenu, $site_name pruža sveobuhvatno okruženje za praćenje aktivnosti digitalne imovine i prepoznavanje značajnih kretanja na tržištu.";
$about_p2 = "Tržište kriptovaluta neprestano djeluje na više burzi, u više nadležnosti i kod brojnih pružatelja likvidnosti. Svake sekunde tisuće varijabli utječu na cijene, volatilnost, uvjete likvidnosti i raspoloženje ulagača. $site_name je razvijena s ciljem strukturirane i skalabilne obrade ovih složenih tokova podataka.";
$about_h2_vision = "Vizija iza platforme $site_name";
$about_p_vision_1 = "Financijska tržišta postaju sve više vođena podacima. Tradicionalne metode analize često se bore pratiti količinu informacija generiranih u modernim ekosustavima digitalne imovine. $site_name nastoji premostiti ovaj jaz primjenom napredne računalne inteligencije, automatiziranih sustava praćenja i prilagodljivih analitičkih modela.";
$about_p_vision_2 = "Dugoročna vizija $site_name je pružanje transparentnih alata za tržišnu inteligenciju koji mogu pomoći korisnicima da bolje razumiju strukturu kripto tržišta, uvjete rizika i nove trendove.";
$about_h2_ai = "Infrastruktura umjetne inteligencije";
$about_p_ai_1 = "U središtu $site_name nalazi se višeslojni okvir umjetne inteligencije dizajniran za istovremenu obradu informacija iz brojnih tržišnih izvora.";
$about_p_ai_2 = "Ovi izvori mogu uključivati:";
$about_li_1 = "Promjene cijena kriptovaluta";
$about_li_2 = "Aktivnosti u knjizi narudžbi";
$about_li_3 = "Podatke o kretanju likvidnosti";
$about_li_4 = "Pokazatelje volatilnosti";
$about_li_5 = "Metriku blockchain transakcija";
$about_li_6 = "Signale tržišnog raspoloženja";
$about_li_7 = "Makroekonomska kretanja";
$about_li_8 = "Institucionalnu tržišnu aktivnost";
$about_p_ai_3 = "Kontinuiranim procjenjivanjem odnosa između ovih varijabli, $site_name pokušava prepoznati obrasce koji mogu pružiti vrijedan tržišni kontekst.";
$about_h2_risk = "Filozofija svijesti o riziku";
$about_p_risk_1 = "Odgovorno sudjelovanje na tržištima kriptovaluta zahtijeva jasno razumijevanje rizika. $site_name naglašava svijest o riziku kao temeljnu komponentu analize digitalne imovine.";
$about_p_risk_2 = "Volatilnost tržišta, fluktuacije likvidnosti, događaji specifični za burze, regulatorna kretanja i širi makroekonomski uvjeti mogu utjecati na ishode na tržištu. Kao rezultat toga, korisnici se nikada ne bi smjeli oslanjati isključivo na bilo koji pojedinačni izvor informacija prilikom donošenja odluka.";
$about_h2_global = "Globalna tržišta digitalne imovine";
$about_p_global_1 = "Tržišta kriptovaluta djeluju na globalnoj razini i uključuju sudionike iz različitih regija, industrija i gospodarskih okruženja. Infrastruktura $site_name osmišljena je za istovremeno praćenje više tržišnih segmenata, omogućujući korisnicima promatranje događaja na različitim dijelovima ekosustava digitalne imovine.";
$about_p_global_2 = "Ova šira perspektiva može pomoći u poboljšanju svijesti o promjenjivim tržišnim uvjetima i novim trendovima.";
$about_h2_why = "Zašto korisnici istražuju $site_name";
$about_why_li_1 = "Napredna tržišna inteligencija vođena umjetnom inteligencijom";
$about_why_li_2 = "Praćenje kriptovaluta u stvarnom vremenu";
$about_why_li_3 = "Analitička infrastruktura u institucionalnom stilu";
$about_why_li_4 = "Višefaktorska procjena tržišta";
$about_why_li_5 = "Praćenje volatilnosti i likvidnosti";
$about_why_li_6 = "Skalabilni alati za istraživanje digitalne imovine";
$about_why_li_7 = "Analitička metodologija svjesna rizika";
$about_h2_forward = "Pogled u budućnost";
$about_p_forward_1 = "Kako se tržišta digitalne imovine nastavljaju razvijati, očekuje se da će se važnost napredne analitičke infrastrukture povećati. $site_name ostaje usredotočen na razvoj tehnologija koje podržavaju dublje razumijevanje tržišta, veću transparentnost i informiranije sudjelovanje u kriptovalutnom ekosustavu.";
$about_p_forward_2 = "Kroz stalne inovacije i kontinuirano istraživanje, $site_name ima za cilj doprinijeti inteligentnijoj i na podacima utemeljenoj budućnosti za analizu digitalne imovine.";


// CONTACT PAGE
$contact_h1 = "Kontaktirajte $site_name";
$contact_intro_1 = "Kontaktirajte tim platforme $site_name kako biste zatražili pristup platformi, pitali o AI infrastrukturi za kripto trgovanje ili saznali više o našem okruženju tržišne inteligencije za digitalnu imovinu.";
$contact_intro_2 = "Bez obzira istražujete li automatiziranu kripto analitiku, institucionalnu signalnu infrastrukturu, praćenje volatilnosti ili obavještajne podatke na više burzi, naš tim vam može pomoći usmjeriti vaš zahtjev na odgovarajući odjel.";
$contact_h2_help = "Kako Vam možemo pomoći";
$contact_li_1 = "Zahtjevi za pristup platformi";
$contact_li_2 = "Općenita pitanja o proizvodima";
$contact_li_3 = "Informacije o AI infrastrukturi trgovanja";
$contact_li_4 = "Upiti o tržišnoj inteligenciji digitalne imovine";
$contact_li_5 = "Pitanja o otkrivanju rizika i usklađenosti";
$contact_li_6 = "Tehnička ili pomoć pri uključivanju";
$contact_h2_send = "Pošaljite zahtjev";
$contact_p_send = "Ispunite obrazac u nastavku i predstavnik platforme $site_name će Vas možda kontaktirati s dodatnim informacijama.";
$contact_h2_info = "Podaci za kontakt";
$contact_support_label = "Opća podrška:";
$contact_institutional_label = "Institucionalni upiti:";
$contact_disclaimer = "Imajte na umu da $site_name ne pruža personalizirane financijske, investicijske, porezne ili pravne savjete. Sve informacije služe isključivo u tehnološke i informativne svrhe.";

// TERMS PAGE
$terms_h1 = "Uvjeti i odredbe";
$terms_intro_1 = "Ovi Uvjeti i odredbe reguliraju pristup i korištenje web stranice $site_name, sadržaja, opisa platforme, obrazaca, komunikacija i povezanih informativnih materijala.";
$terms_intro_2 = "Pristupom ovoj web stranici korisnici potvrđuju da su pročitali, razumjeli i složili se s ovim Uvjetima i odredbama. Ako se korisnik ne slaže s ovim uvjetima, trebao bi prestati koristiti web stranicu.";
$terms_h2_informational = "Informativna svrha";
$terms_p_info_1 = "$site_name pruža informacije o AI kripto trgovačkoj infrastrukturi, tržišnoj inteligenciji digitalne imovine, praćenju volatilnosti, analizi likvidnosti i povezanim tehnologijama.";
$terms_p_info_2 = "Sadržaj web stranice namijenjen je isključivo u opće informativne i tehnološke prezentacijske svrhe. Ništa na ovoj web stranici ne bi se trebalo tumačiti kao financijski savjet, investicijski savjet, pravni savjet, porezni savjet ili jamstvo rezultata trgovanja.";
$terms_h2_no_advice = "Nema financijskog savjeta";
$terms_p_no_advice_1 = "$site_name ne pruža personalizirane preporuke u vezi s tim trebaju li korisnici kupovati, prodavati, držati, trgovati, obavljati prijenose ili na drugi način stupati u interakciju s bilo kojom kriptovalutom, tokenom, financijskim proizvodom ili digitalnom imovinom.";
$terms_p_no_advice_2 = "Korisnici bi trebali neovisno procijeniti sve informacije i potražiti savjet od kvalificiranih stručnjaka prije donošenja financijkih odluka.";
$terms_h2_user_responsibility = "Odgovornost korisnika";
$terms_p_user_1 = "Korisnici su odgovorni za vlastite odluke, procjenu rizika, aktivnosti na računu, radnje trgovanja, pravnu usklađenost i korištenje usluga trećih strana.";
$terms_p_user_2 = "Korisnici bi trebali osigurati da su aktivnosti digitalne imovine dopuštene u njihovoj nadležnosti te da razumiju sve primjenjive rizike prije interakcije s kripto tržištima.";
$terms_h2_ai = "AI i analitički sustavi";
$terms_p_ai_1 = "$site_name može opisati sustave umjetne inteligencije, prediktivne modele, tržišne signale, automatiziranu analitiku ili tehnologije vezane uz izvođenje.";
$terms_p_ai_2 = "Ti se sustavi mogu oslanjati na tržišne podatke, statističke modele, procese strojnog učenja i izvore informacija trećih strana. Takvi sustavi mogu biti netočni, odgođeni, nepotpuni, nedostupni ili neprikladni za određene ciljeve korisnika.";
$terms_h2_availability = "Nema jamstva dostupnosti";
$terms_p_avail_1 = "$site_name ne jamči neprekidan pristup web stranici, kontinuiranu dostupnost platforme, rad bez grešaka, točne informacije o tržištu ili dostupnost bilo koje određene značajke.";
$terms_p_avail_2 = "Usluge, sadržaj, stranice, obrasci, integracije ili opisi platforme mogu se mijenjati, obustaviti ili prekinuti u bilo kojem trenutku.";
$terms_h2_third_party = "Usluge trećih strana";
$terms_p_tp_1 = "Web stranica može upućivati na burze trećih strana, mjesta za likvidnost, pružatelje analitike, komunikacijske alate, usluge hostinga ili pružatelje tehničke infrastrukture.";
$terms_p_tp_2 = "$site_name ne kontrolira platforme trećih strana i nije odgovorna za njihovu dostupnost, naknade, pravila, ograničenja računa, postupke usklađenosti, tehničke kvarove ili gubitke korisnika.";
$terms_h2_prohibited = "Zabranjena upotreba";
$terms_p_prohibited = "Korisnici ne smiju koristiti ovu web stranicu niti bilo koju srodnu tehnologiju u nezakonite, uvredljive, lažne, manipulativne ili štetne svrhe.";
$terms_li_1 = "Pokušaj neovlaštenog pristupa";
$terms_li_2 = "Dostavljanje lažnih ili obmanjujućih informacija";
$terms_li_3 = "Korištenje web stranice za nezakonite financijske aktivnosti";
$terms_li_4 = "Ometanje sigurnosti ili funkcionalnosti web stranice";
$terms_li_5 = "Kopiranje ili zlouporaba sadržaja web stranice bez dopuštenja";
$terms_li_6 = "Pokušaj zaobilaženja usklađenosti ili tehničkih kontrola";
$terms_h2_ip = "Intelektualno vlasništvo";
$terms_p_ip_1 = "Dizajn web stranice, tekst, brendiranje, elementi sučelja, grafika, struktura i srodni materijali vlasništvo su platforme $site_name ili su licencirani od strane $site_name, osim ako nije drugačije navedeno.";
$terms_p_ip_2 = "Korisnici ne smiju reproducirati, distribuirati, mijenjati ili komercijalno iskorištavati materijale web stranice bez odgovarajućeg ovlaštenja.";
$terms_h2_liability = "Ograničenje odgovornosti";
$terms_p_liab_1 = "U najvećoj mjeri dopuštenoj važećim zakonom, $site_name neće biti odgovorna za gubitke koji proizlaze iz trgovanja digitalnom imovinom, volatilnosti tržišta, tehničkih problema, kvarova na platformama trećih strana, netočnih podataka, odluka korisnika ili oslanjanja na sadržaj web stranice.";
$terms_p_liab_2 = "Korisnici pristupaju ovoj web stranici i koriste je na vlastitu odgovornost.";
$terms_h2_changes = "Promjene ovih Uvjeta";
$terms_p_changes_1 = "$site_name može ažurirati ove Uvjete i odredbe u bilo kojem trenutku. Ažurirani uvjeti mogu biti objavljeni na ovoj stranici.";
$terms_p_changes_2 = "Nastavak korištenja web stranice nakon promjena znači da korisnici priznaju i prihvaćaju ažurirane uvjete.";

// PRIVACY PAGE
$privacy_h1 = "Politika privatnosti";
$privacy_intro_1 = "$site_name poštuje privatnost korisnika i predana je odgovornom, transparentnom i sigurnom rukovanju osobnim podacima.";
$privacy_intro_2 = "Ova Politika privatnosti objašnjava koje se informacije mogu prikupljati kada korisnici posjećuju ovu web stranicu, ispunjavaju obrasce za kontakt, zahtijevaju pristup ili komuniciraju sa sadržajem $site_name i komunikacijama vezanim uz platformu.";
$privacy_h2_collect = "Informacije koje možemo prikupljati";
$privacy_p_collect_1 = "$site_name može prikupljati informacije koje korisnici dobrovoljno dostave putem obrazaca na web stranici ili komunikacijskih kanala.";
$privacy_li_fname = "Ime";
$privacy_li_lname = "Prezime";
$privacy_li_email = "Adresa e-pošte";
$privacy_li_phone = "Broj telefona";
$privacy_li_inquiry = "Pojedinosti poslanog upita";
$privacy_li_technical = "Osnovni tehnički podaci o korištenju web stranice";
$privacy_h2_use = "Kako koristimo informacije";
$privacy_p_use_1 = "Informacije se mogu koristiti za odgovaranje na zahtjeve korisnika, pružanje informacija o pristupu platformi, poboljšanje funkcionalnosti web stranice, održavanje sigurnosti i priopćavanje relevantnih ažuriranja o platformi $site_name.";
$privacy_p_use_2 = "Također možemo koristiti zbirne podatke ili podatke koji ne služe za identifikaciju kako bismo analizirali izvedbu web stranice, poboljšali strukturu sadržaja i bolje razumjeli kako posjetitelji stupaju u interakciju s našim stranicama.";
$privacy_h2_comm = "Svrhe komunikacije";
$privacy_p_comm_1 = "Ako korisnik pošalje kontakt podatke, $site_name može koristiti te podatke kako bi odgovorio na upit, pružio detalje o uključivanju, pojasnio zahtjeve za pristup platformi ili podijelio relevantne informacije o uslugama.";
$privacy_p_comm_2 = "Korisnici mogu zatražiti da se komunikacija prekine tamo gdje je to primjenjivo.";
$privacy_h2_cookies = "Kolačići i tehnički podaci";
$privacy_p_cookies_1 = "Ova web stranica može koristiti kolačiće, analitičke alate i slične tehnologije za poboljšanje iskustva pregledavanja, praćenje izvedbe i podršku sigurnosti web stranice.";
$privacy_p_cookies_2 = "Tehnički podaci mogu uključivati vrstu uređaja, vrstu preglednika, operativni sustav, interakcije stranica, podatke o upućivanju i opću statistiku korištenja.";
$privacy_h2_protection = "Mjere zaštite podataka";
$privacy_p_prot_1 = "$site_name primjenjuje razumne administrativne, tehničke i organizacijske mjere zaštite kako bi se prikupljeni podaci zaštitili od neovlaštenog pristupa, zlouporabe, gubitka ili otkrivanja.";
$privacy_p_prot_2 = "Međutim, nijedan mrežni sustav ne može jamčiti apsolutnu sigurnost. Korisnici bi trebali izbjegavati slanje osjetljivih financijskih podataka, privatnih ključeva novčanika, lozinki, vjerodajnica za razmjenu ili povjerljivih detalja o pristupu računu putem javnih obrazaca web stranice.";
$privacy_h2_third = "Pružatelji usluga trećih strana";
$privacy_p_third_1 = "$site_name može koristiti dobavljače trećih strana za hosting, analitiku, komunikaciju, sigurnost, dostavu e-pošte, CRM obradu ili tehničku infrastrukturu.";
$privacy_p_third_2 = "Ovi davatelji mogu obrađivati ograničene informacije samo prema potrebi za podršku funkcionalnosti web stranice i srodnih usluga.";
$privacy_google_choices = 'Možete upravljati načinom na koji Google koristi podatke prikupljene vašim posjetima putem <a href="http://www.google.com/settings/ads" target="_blank" rel="noopener">Postavki Google oglasa</a>, isključiti oglašavanje na temelju interesa koristeći <a href="https://tools.google.com/dlpage/gaoptout" target="_blank" rel="noopener">Google Analytics dodatak pregledniku za isključivanje</a> ili pregledati <a href="https://www.google.com/intl/en/policies/privacy/" target="_blank" rel="noopener">Googleovu politiku privatnosti</a> za više detalja.';
$privacy_h2_sale = "Nema prodaje osobnih podataka";
$privacy_p_sale_1 = "$site_name ne namjerava prodavati osobne podatke podnesene putem ove web stranice.";
$privacy_p_sale_2 = "Podaci se mogu dijeliti samo kada je to neophodno u operativne svrhe, u svrhu usklađivanja sa zakonima, komunikacije s korisnicima, prevencije prijevara ili obrade vezane uz usluge.";
$privacy_h2_retention = "Zadržavanje podataka";
$privacy_p_retention = "Osobni podaci mogu se zadržati onoliko dugo koliko je potrebno da bi se odgovorilo na upite, održala poslovna evidencija, ispunile zakonske obveze, poboljšala komunikacija platforme ili podržala sigurnost i spriječile prijevare.";
$privacy_h2_rights = "Prava korisnika";
$privacy_p_rights = "Ovisno o primjenjivom zakonu, korisnici mogu imati prava na pristup, ispravak, brisanje, prigovor, ograničenje ili prenosivost osobnih podataka.";
$privacy_h2_intl = "Međunarodna upotreba";
$privacy_p_intl_1 = "Platformi $site_name mogu pristupiti korisnici iz različitih jurisdikcija. Pravila privatnosti mogu varirati ovisno o lokaciji.";
$privacy_p_intl_2 = "Korištenjem ove web stranice, korisnici prihvaćaju da se podaci mogu obrađivati u skladu s ovom Politikom privatnosti i primjenjivim operativnim zahtjevima.";
$privacy_h2_policy_updates = "Ažuriranja Pravila";
$privacy_p_updates_1 = "$site_name može povremeno ažurirati ovu Politiku privatnosti kako bi odražavala promjene u zakonu, tehnologiji, internim postupcima ili funkcionalnosti web stranice.";
$privacy_p_updates_2 = "Nastavak korištenja web stranice nakon ažuriranja znači da korisnici prihvaćaju revidiranu Politiku privatnosti.";
// COOKIES PAGE
$cookies_h1 = "Politika kolačića";
$cookies_intro_1 = "Ova Politika kolačića objašnjava kako $site_name koristi kolačiće, analitičke tehnologije i slične alate za praćenje kada korisnici pristupaju ovoj web stranici ili stupaju u interakciju s njom.";
$cookies_intro_2 = "Kolačići pomažu poboljšati funkcionalnost web stranice, unaprijediti korisničko iskustvo, analizirati izvedbu i podržati procese vezane uz sigurnost.";
$cookies_intro_3 = "Nastavkom korištenja ove web stranice, korisnici prihvaćaju da se određeni kolačići i povezane tehnologije mogu koristiti u skladu s ovim pravilima.";
$cookies_h2_what = "Što su kolačići?";
$cookies_p_what_1 = "Kolačići su male tekstualne datoteke koje se pohranjuju na uređaju korisnika prilikom posjeta web stranici.";
$cookies_p_what_2 = "Ove datoteke mogu sadržavati informacije koje pomažu web stranicama prepoznati posjetitelje koji se vraćaju, zapamtiti postavke, poboljšati navigaciju i mjeriti performanse web stranice.";
$cookies_h2_why = "Zašto koristimo kolačiće";
$cookies_p_why_1 = "$site_name može koristiti kolačiće i slične tehnologije u nekoliko svrha.";
$cookies_li_1 = "Održavanje funkcionalnosti web stranice";
$cookies_li_2 = "Poboljšanje korisničkog iskustva";
$cookies_li_3 = "Pamćenje korisničkih preferencija";
$cookies_li_4 = "Razumijevanje ponašanja posjetitelja";
$cookies_li_5 = "Mjerenje performansi web stranice";
$cookies_li_6 = "Identificiranje tehničkih problema";
$cookies_li_7 = "Podrška sigurnosti web stranice";
$cookies_li_8 = "Sprečavanje zlouporabe";
$cookies_h2_essential = "Neophodni kolačići";
$cookies_p_ess_1 = "Određeni kolačići neophodni su za pravilan rad web stranice.";
$cookies_p_ess_2 = "Ovi kolačići pomažu u održavanju sigurnosti, funkcionalnosti navigacije, upravljanja sesijom i drugih osnovnih operacija web stranice.";
$cookies_p_ess_3 = "Bez bitnih kolačića dijelovi web stranice možda neće ispravno funkcionirati.";
$cookies_h2_analytics = "Kolačići analitike";
$cookies_p_an_1 = "Kolačići za analitiku pomažu nam razumjeti kako posjetitelji stupaju u interakciju sa sadržajem web stranice.";
$cookies_p_an_2 = "Ove tehnologije mogu prikupljati informacije o posjetima stranicama, obrascima navigacije, vrstama uređaja, konfiguracijama preglednika i općim mjernim podacima o upotrebi web stranice.";
$cookies_p_an_3 = "Analitički se podaci obično agregiraju i koriste za poboljšanje izvedbe web mjesta i korisničkog iskustva.";
$cookies_h2_functional = "Funkcionalni kolačići";
$cookies_p_fun_1 = "Funkcionalni kolačići mogu se koristiti za pamćenje postavki i preferencija koje su odabrali korisnici.";
$cookies_p_fun_2 = "Primjeri mogu uključivati jezične postavke, postavke sučelja, opcije prikaza ili druge značajke prilagodbe.";
$cookies_h2_third = "Tehnologije trećih strana";
$cookies_p_third_1 = "$site_name može koristiti usluge trećih strana, analitičke platforme, tehnologije oglašavanja ili alate za praćenje izvedbe.";
$cookies_p_third_2 = "Ove treće strane mogu postaviti vlastite kolačiće ili tehnologije praćenja podložne njihovim individualnim politikama privatnosti.";
$cookies_p_third_3 = "$site_name ne kontrolira praksu kolačića trećih strana i preporučuje pregled dokumentacije o privatnosti vanjskih pružatelja usluga gdje je to primjenjivo.";
$cookies_h2_manage = "Upravljanje kolačićima";
$cookies_p_manage_1 = "Većina modernih preglednika korisnicima omogućuje upravljanje, ograničavanje ili brisanje kolačića putem postavki preglednika.";
$cookies_p_manage_2 = "Korisnici mogu u potpunosti onemogućiti kolačiće, iako određene značajke web mjesta nakon toga možda neće raditi kako je predviđeno.";
$cookies_p_manage_3 = "Postavke preglednika obično nude opcije za:";
$cookies_li_manage_1 = "Blokiranje svih kolačića";
$cookies_li_manage_2 = "Brisanje postojećih kolačića";
$cookies_li_manage_3 = "Primanje obavijesti o kolačićima";
$cookies_li_manage_4 = "Ograničavanje određenih kategorija kolačića";
$cookies_h2_data = "Zaštita podataka";
$cookies_p_data = "Podaci povezani s kolačićima mogu se obrađivati u skladu s našim Pravilima privatnosti i važećim zakonima o zaštiti podataka.";
$cookies_h2_policy_updates = "Ažuriranja Pravila";
$cookies_p_updates_1 = "$site_name može povremeno ažurirati ovu Politiku kolačića kako bi odražavala tehnološke promjene, zakonske zahtjeve ili operativna poboljšanja.";
$cookies_p_updates_2 = "Nastavak korištenja web stranice nakon ažuriranja predstavlja prihvaćanje revidirane politike.";
// AML PAGE
$aml_h1 = "AML Politika (Sprječavanje pranja novca)";
$aml_intro_1 = "$site_name prepoznaje važnost svijesti protiv pranja novca, financijskog integriteta i odgovornog sudjelovanja na tržištima digitalne imovine.";
$aml_intro_2 = "Ova AML Politika objašnjava opća načela koja $site_name primjenjuje u sprječavanju nezakonitog korištenja tehnologija povezanih s kriptoimovinom, sumnjivih financijskih aktivnosti, prijevara, izbjegavanja sankcija, financiranja terorizma i drugog zabranjenog ponašanja.";
$aml_h2_purpose = "Svrha ove politike";
$aml_p_purpose_1 = "Svrha ove politike je uspostaviti odgovoran okvir za način na koji $site_name pristupa svijesti o sprječavanju pranja novca unutar ekosustava digitalne imovine.";
$aml_p_purpose_2 = "Tržišta kriptovaluta mogu uključivati prekogranične aktivnosti, decentraliziranu infrastrukturu, razmjene trećih strana i eksterne sustave novčanika. Zbog toga bi korisnici trebali razumjeti da se obveze usklađenosti mogu razlikovati ovisno o njihovoj nadležnosti, vrsti računa, davatelju mjenjačnice i lokalnom regulatornom okruženju.";
$aml_h2_responsible = "Odgovorno korištenje tehnologije digitalne imovine";
$aml_p_resp_1 = "Od korisnika se očekuje da komuniciraju s $site_name i svim povezanim uslugama digitalne imovine odgovorno, u skladu sa zakonom i važećim pravilima.";
$aml_p_resp_2 = "$site_name ne podržava niti potiče korištenje kripto tržišta, trgovinskih sustava, automatiziranih tehnologija ili analitičkih alata u nezakonite svrhe.";
$aml_li_1 = "Pranje novca";
$aml_li_2 = "Financiranje terorizma";
$aml_li_3 = "Prijevara ili financijska obmana";
$aml_li_4 = "Izbjegavanje sankcija";
$aml_li_5 = "Manipulacija tržištem";
$aml_li_6 = "Korištenje ukradenih sredstava ili kompromitiranih računa";
$aml_li_7 = "Bilo koja aktivnost zabranjena važećim zakonom";
$aml_h2_exchange = "Usklađenost burzi trećih strana";
$aml_p_ex_1 = "$site_name se može referirati na analitičku infrastrukturu, stupati u interakciju s njom ili je osigurati, a koja je povezana s mjestima ili okruženjima likvidnosti digitalne imovine trećih strana.";
$aml_p_ex_2 = "Mjenjačnice trećih strana, skrbnici, procesori plaćanja i pružatelji usluga mogu primijeniti vlastite postupke usklađivanja, uključujući provjeru identiteta, praćenje transakcija, provjeru sankcija, ograničenja računa, provjeru izvora sredstava ili dodatne zahtjeve provjere.";
$aml_h2_user_responsibility = "Odgovornost korisnika";
$aml_p_user_1 = "Korisnici su odgovorni osigurati da su njihove aktivnosti u skladu sa zakonom na njihovoj lokaciji i sa svim obvezama koje nametnu relevantni regulatori, burze, financijske institucije ili pružatelji usluga.";
$aml_p_user_2 = "Korisnici ne bi trebali pokušavati sakriti vlasništvo, prikriti podrijetlo transakcije, davati lažne informacije, zaobići procese provjere ili koristiti infrastrukturu digitalne imovine na način koji se može smatrati sumnjivim ili nezakonitim.";
$aml_h2_suspicious = "Sumnjiva aktivnost";
$aml_p_suspicious = "Sumnjiva aktivnost može uključivati ponašanje koje se čini neusklađenim s normalnom upotrebom, pokušaje zlouporabe sustava trgovanja, opetovano podnošenje obmanjujućih informacija, umiješanost u ograničene jurisdikcije ili aktivnosti povezane s prijevarom, nedopuštenim sredstvima ili zabranjenim uslugama.";
$aml_h2_evasion = "Nema izbjegavanja ili zaobilaženja";
$aml_p_evasion = "Korisnici ne smiju pokušavati zaobići kontrole usklađenosti, tehnička ograničenja, sustave provjere identiteta, zemljopisna ograničenja ili procese praćenja rizika.";
$aml_h2_policy_updates = "Ažuriranja politike";
$aml_p_updates_1 = "$site_name može s vremena na vrijeme ažurirati ovu Politiku AML-a kako bi odražavala promjene u regulatornim očekivanjima, tržišnim standardima, internim postupcima ili praksama industrije digitalne imovine.";
$aml_p_updates_2 = "Nastavak korištenja web stranice nakon ažuriranja znači da korisnici prihvaćaju revidiranu politiku.";
// RISK PAGE
$risk_h1 = "Upozorenje o rizicima";
$risk_intro_1 = "Trgovanje kriptovalutama i sudjelovanje u digitalnoj imovini uključuje značajan rizik. Cijene se mogu brzo kretati, likvidnost se može neočekivano promijeniti, a tržišni uvjeti mogu postati vrlo nestabilni u kratkom vremenskom razdoblju.";
$risk_intro_2 = "Ovo Upozorenje o rizicima objašnjava važna razmatranja koja korisnici trebaju pregledati prije interakcije s tržištima digitalne imovine, tehnologijama automatiziranog trgovanja, tržišnim signalima generiranim umjetnom inteligencijom ili analitičkom infrastrukturom povezanom s kripto valutama.";
$risk_h2_no_guarantee = "Nema zajamčenih rezultata";
$risk_p_no_guarantee_1 = "$site_name ne jamči dobit, povrat ulaganja, uspjeh u trgovanju, točnost signala, nesmetan pristup ili pozitivne financijske ishode.";
$risk_p_no_guarantee_2 = "Svi primjeri, statistike, elementi sučelja, metrika izvedbe, pokazatelji signala ili tržišne simulacije prikazane na ovoj web stranici služe samo u informativne i ilustrativne svrhe.";
$risk_h2_volatility = "Volatilnost tržišta kriptovaluta";
$risk_p_vol_1 = "Tržišta digitalne imovine vrlo su nestabilna. Na cijene mogu utjecati manjkovi likvidnosti, makroekonomske vijesti, regulatorna zbivanja, ispadi na burzama, događaji na blockchainu, raspoloženje ulagača, financijska poluga ili manipulacija tržištem.";
$risk_p_vol_2 = "Volatilnost može dovesti do brzih gubitaka, naglih praznina u cijenama, klizanja, događaja likvidacije ili nemogućnosti obavljanja transakcija po očekivanim cijenama.";
$risk_h2_ai = "Ograničenja AI signala";
$risk_p_ai_1 = "Sustavi umjetne inteligencije mogu analizirati velike količine tržišnih podataka, ali ne mogu eliminirati nesigurnost.";
$risk_p_ai_2 = "Pokazatelji temeljeni na umjetnoj inteligenciji, signali za trgovanje, klasifikacije na tržištu i prediktivni modeli mogu biti nepotpuni, odgođeni, netočni ili neprikladni za osobnu financijsku situaciju korisnika.";
$risk_p_ai_3 = "Korisnici se ne bi trebali oslanjati isključivo na bilo koji AI signal prilikom donošenja odluka o trgovanju, ulaganju ili financijama.";
$risk_h2_tech = "Tehnologija i rizik izvođenja";
$risk_p_tech_1 = "Na tehnologiju trgovanja mogu utjecati problemi s internetskom vezom, prekidi na poslužitelju, kašnjenja, softverske pogreške, kvarovi API-ja, zastoji na burzi, netočni izvori podataka ili ograničenja infrastrukture treće strane.";
$risk_p_tech_2 = "$site_name ne jamči nesmetan pristup podacima, signalima, značajkama platforme, sustavima trećih strana ili okruženjima izvršavanja.";
$risk_h2_liquidity = "Likvidnost i devizni rizik";
$risk_p_liq_1 = "Likvidnost može značajno varirati na burzama i digitalnoj imovini. Neka tržišta mogu iskusiti slabu dubinu knjige narudžbi, velike raspone, odgođeno izvršenje ili nagla kretanja cijena tijekom razdoblja stresa.";
$risk_p_liq_2 = "Razmjene trećih strana mogu nametnuti naknade, ograničenja, zabrane, preglede računa, odgode povlačenja, obustave trgovanja ili geografska ograničenja.";
$risk_h2_regulatory = "Regulatorni rizik";
$risk_p_reg_1 = "Propisi o digitalnoj imovini mogu se brzo mijenjati i razlikovati se u različitim zemljama, regijama i jurisdikcijama.";
$risk_p_reg_2 = "Regulatorne promjene mogu utjecati na pristup tržištu, dostupnost imovine, operacije burze, obveze izvješćivanja, oporezivanje, ograničenja trgovanja ili funkcionalnost platforme.";
$risk_h2_user_responsibility = "Odgovornost korisnika";
$risk_p_user_1 = "Korisnici su isključivo odgovorni za procjenu rizika, razumijevanje primjenjivih zakona, pregled svojih financijskih okolnosti i donošenje neovisnih odluka.";
$risk_p_user_2 = "$site_name ne pruža personalizirane financijske, investicijske, pravne, računovodstvene ili porezne savjete.";
$risk_h2_advice = "Tražite stručni savjet";
$risk_p_advice_1 = "Korisnici bi se trebali posavjetovati s kvalificiranim stručnjacima prije donošenja značajnih financijskih odluka koje uključuju kriptovalute, sustave trgovanja, automatizirane tehnologije ili ulaganja u digitalnu imovinu.";
$risk_p_advice_2 = "Korištenjem ove web stranice, korisnici prihvaćaju da razumiju rizike povezane s tržištima digitalne imovine i preuzimaju odgovornost za vlastite odluke.";
// EXCHANGES PAGE
$exchanges_h1 = "Podržane burze";
$exchanges_intro_1 = "$site_name je dizajniran oko pristupa inteligencije na više tržišta koji procjenjuje aktivnost digitalne imovine u širokom rasponu okruženja za trgovanje kriptovalutama.";
$exchanges_intro_2 = "Moderna kripto tržišta djeluju preko brojnih burzi, pružatelja likvidnosti, mjesta za izvedenice i trgovačkih ekosustava. Razumijevanje aktivnosti u tim okruženjima ključno je za izgradnju sveobuhvatne tržišne inteligencije.";
$exchanges_h2_philosophy = "Filozofija pokrivenosti tržišta";
$exchanges_p_phil_1 = "Umjesto da se oslanja na jedno mjesto, $site_name se gradi oko koncepta analize na razini cijelog tržišta.";
$exchanges_p_phil_2 = "Određivanje cijena kriptovaluta, uvjeti likvidnosti, ponašanje pri volatilnosti i institucionalna aktivnost često se razlikuju na različitim burzama. Promatrajući šire tržišne uvjete, analitički modeli mogu dobiti dodatni kontekst o novim trendovima i potencijalnim anomalijama.";
$exchanges_h2_spot = "Praćenje spot tržišta";
$exchanges_p_spot_1 = "Spot burze predstavljaju značajan dio globalne aktivnosti vezane za digitalnu imovinu.";
$exchanges_p_spot_2 = "Sustavi tržišne inteligencije mogu procijeniti tržišne podatke, uključujući:";
$exchanges_li_spot_1 = "Kretanja cijena";
$exchanges_li_spot_2 = "Dubinu likvidnosti";
$exchanges_li_spot_3 = "Strukturu knjige narudžbi";
$exchanges_li_spot_4 = "Volumen trgovanja";
$exchanges_li_spot_5 = "Ponašanje razlike između ponude i potražnje";
$exchanges_li_spot_6 = "Stanja tržišne neravnoteže";
$exchanges_h2_deriv = "Tržište izvedenica";
$exchanges_p_deriv_1 = "Kriptovalutne izvedenice igraju sve važniju ulogu u širem ekosustavu digitalne imovine.";
$exchanges_p_deriv_2 = "Ročnice (futures), trajni ugovori, opcije i trgovanje s financijskom polugom mogu utjecati na tržišno raspoloženje, uvjete volatilnosti i usmjereni zamah.";
$exchanges_p_deriv_3 = "Analitička infrastruktura može procijeniti informacije povezane s izvedenicama prilikom procjene širih tržišnih uvjeta.";
$exchanges_h2_liquidity = "Analiza likvidnosti";
$exchanges_p_liq_1 = "Likvidnost ostaje jedan od najvažnijih čimbenika koji utječu na stabilnost tržišta i kvalitetu izvršenja.";
$exchanges_p_liq_2 = "$site_name može analizirati uvjete likvidnosti na višestrukim mjestima za trgovanje kako bi identificirao:";
$exchanges_li_liq_1 = "Koncentraciju likvidnosti";
$exchanges_li_liq_2 = "Nagle promjene likvidnosti";
$exchanges_li_liq_3 = "Pritisak u knjizi narudžbi";
$exchanges_li_liq_4 = "Događaje neravnoteže na tržištu";
$exchanges_li_liq_5 = "Nenormalno ponašanje pri trgovanju";
$exchanges_h2_availability = "Dostupnost burzi";
$exchanges_p_avail_1 = "Dostupnost mjenjačnica može varirati ovisno o zemljopisnom položaju, jurisdikciji, podobnosti računa, regulatornim zahtjevima i tehničkim ograničenjima.";
$exchanges_p_avail_2 = "Određene burze ili usluge možda neće biti dostupne svim korisnicima i mogu nametnuti vlastita ograničenja, uvjete verifikacije, naknade i radna pravila.";
$exchanges_h2_third = "Platforme trećih strana";
$exchanges_p_third_1 = "Bilo kakve reference na burze, mjesta likvidnosti, brokere, skrbnike ili davatelje na tržištu daju se isključivo u informativne svrhe.";
$exchanges_p_third_2 = "$site_name ne posjeduje, ne upravlja, ne kontrolira i ne jamči za usluge razmjene trećih strana.";
$exchanges_p_third_3 = "Korisnici ostaju odgovorni za procjenu bilo koje burze, mjesta trgovanja ili usluge digitalne imovine prije uporabe.";
$exchanges_h2_monitoring = "Kontinuirano praćenje tržišta";
$exchanges_p_mon_1 = "Tržišta kriptovaluta rade neprekidno, često dvadeset četiri sata dnevno, sedam dana u tjednu.";
$exchanges_p_mon_2 = "Kako se struktura tržišta razvija, pojavljuju se nove burze, seli se likvidnost, a aktivnost trgovanja se mijenja.";
$exchanges_p_mon_3 = "$site_name neprekidno nastoji održati svijest o promjenjivim tržišnim uvjetima kroz široku analitičku pokrivenost ekosustava digitalne imovine.";

// ==========================================
// RISK WARNING PAGE
// ==========================================
$page_title_risk_warning = "Upozorenje o rizicima | $site_name";
$page_description_risk_warning = "Razumite rizike automatiziranog kripto trgovanja s $site_name, uključujući nestabilnost tržišta, rizik izvršenja i regulatorna pitanja.";
$risk_warning_breadcrumb_name = "Upozorenje o rizicima";
$risk_warning_title = "Upozorenje o rizicima";
$risk_warning_intro = "Razumijevanje rizika prvi je korak prema samopouzdanom trgovanju.";

$risk_warning_ai_heading = "Kako nam naš AI sustav pomaže u upravljanju rizikom:";
$risk_warning_ai_1 = "<strong>Algoritamska učinkovitost i trgovanje bez emocija:</strong> Napredni algoritmi analiziraju tržišne signale kako bi objektivno izvršili poslove u optimalnim trenucima.";
$risk_warning_ai_2 = "<strong>Strategije temeljene na podacima:</strong> Strategije se temelje na provjerenim tržišnim obrascima i analizi u stvarnom vremenu, a ne na nagađanju.";
$risk_warning_ai_3 = "<strong>Fleksibilne postavke i potpuna kontrola:</strong> Prilagodite parametre rizika u bilo kojem trenutku. Pratite sva stanja i trgovine transparentno na svojoj nadzornoj ploči bez skrivenih naknada i ograničenja povlačenja sredstava.";

$risk_warning_disclaimer = "<strong>Izjava o odricanju odgovornosti:</strong> Trgovanje uvijek nosi rizik. Automatizirani sustavi (uključujući umjetnu inteligenciju) ne jamče profit, mogu otkazati zbog softverskih grešaka ili neočekivanih događaja na tržištu i zahtijevaju praćenje korisnika. Prošli učinak nije pokazatelj budućih rezultata. Ova platforma služi isključivo u informativne i marketinške svrhe i ne pruža financijske savjete.";

$risk_warning_s1_heading = "1. Općenito i rizici tržišta kriptovaluta";
$risk_warning_s1_intro = "Kriptovalute su visoko nestabilna, špekulativna imovina koja radi 24/7 uz minimalan regulatorni nadzor u većini jurisdikcija.";
$risk_warning_s1_1 = "Vrijednosti mogu dramatično oscilirati u kratkim razdobljima, što može dovesti do potpunog gubitka uloženog kapitala.";
$risk_warning_s1_2 = "Na tržišne vrijednosti mogu snažno utjecati regulatorna ažuriranja, tehnička kretanja, povrede sigurnosti ili širi makroekonomski događaji.";
$risk_warning_s1_3 = "Neka sredstva mogu potpuno izgubiti na vrijednosti. Investirajte samo ona sredstva koja si možete priuštiti izgubiti.";

$risk_warning_s2_heading = "2. Izvršenje, likvidnost i rizici poluge";
$risk_warning_s2_1 = "<strong>Nestabilnost tržišta i likvidnost:</strong> Ekstremna kretanja cijena (10-20%+ dnevno) ili niska likvidnost (osobito kod manjih kovanica) mogu dovesti do kašnjenja, prekida rada platforme i ozbiljnih propusta u izvršenju. Stop-loss nalozi ne mogu jamčiti ograničenje gubitaka u ekstremnim uvjetima.";
$risk_warning_s2_2 = "<strong>Poluga i rizici marže:</strong> Proizvodi s polugom povećavaju dobitak i gubitak, što znači da možete izgubiti više od početnog depozita. Približno 70–80% računa malih ulagatelja gubi novac pri trgovanju proizvodima s polugom.";

$risk_warning_s3_heading = "3. Tehnički, kibernetički sigurnosni rizici i rizici trećih strana";
$risk_warning_s3_1 = "<strong>Tehnički čimbenici:</strong> Mrežno trgovanje inherentno uključuje rizike prekida internetske veze, hardverskih/softverskih pogrešaka i nedostupnosti usluge.";
$risk_warning_s3_2 = "<strong>Kibernetička sigurnost:</strong> Računi kriptovaluta česte su mete krađe identiteta, zlonamjernog softvera i hakiranja. Transakcije su nepovratne; kompromitiranje Vaših vjerodajnica može rezultirati trajnim gubitkom.";
$risk_warning_s3_3 = "<strong>Platforme trećih strana:</strong> Ova web stranica može povezivati korisnike na platforme trećih strana. Ne kontroliramo, ne podržavamo i ne jamčimo njihovu sigurnost, operacije ili solventnost. Uvijek provedite vlastitu analizu prije polaganja sredstava na vanjske platforme.";

$risk_warning_s4_heading = "4. Propisi, porezi i završne odredbe";
$risk_warning_s4_1 = "<strong>Pravna usklađenost i porezi:</strong> Regulatorni okviri se uvelike razlikuju i brzo mijenjaju. Korisnici su isključivo odgovorni osigurati da su njihove aktivnosti trgovanja u skladu s lokalnim zakonima i za ispunjavanje vlastitih poreznih obveza.";
$risk_warning_s4_2 = "<strong>Bez jamstva dobiti:</strong> Ne postoji \"sigurno\" trgovanje kriptovalutama ili trgovanje bez rizika. Sve brojke o prinosima ili primjeri izvedbe čisto su hipotetski.";
$risk_warning_s4_3 = "<strong>Prikladnost:</strong> Ako ne razumijete u potpunosti rizike, oslanjate se na bitna sredstva ili trgujete posuđenim novcem, trgovanje kriptovalutama nije prikladno za Vas. Obratite se neovisnom licenciranom financijskom savjetniku ako niste sigurni.";

$risk_warning_contact = "<strong>Kontakt:</strong> Za bilo kakva pitanja u vezi ove izjave ili za postavljanje upita, obratite se našem službenom timu korisničke podrške putem kontakt obrasca na našoj web stranici.";
$footer_risk_warning = "Upozorenje o rizicima";

$lang_loaded = true;

?>
