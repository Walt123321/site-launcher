<?php
require __DIR__ . '/../lang.php';

// Identity / config variables are intentionally NOT overridden here — they are inherited
// as-is from the root lang.php so brand/pricing swaps still work correctly at deploy time:
// $site_name, $site_url, $site_domain, $app_price, $app_currency, $rating_value,
// $rating_count, $review_count, $country_name, $support_email, $institutional_email.

$site_lang = 'da-DK';
$form_language = 'da'; // matches this page's own language, not the offer's global default

// Reviews
$review_1_author = "Privat investor";
$review_2_author = "Uafhængig trader";
$review_3_author = "Digital asset-trader";
$review_4_author = "Søger passiv indkomst";


// META TITLE / DESCRIPTION (per page)
$home_meta_title = "$site_name — Officiel hjemmeside | Handelsplatform";
$home_meta_description = "$site_name ⭐ — intelligent AI-handelsplatform til markedsanalyser i realtid og klare handelssignaler ⚡ Prøv smarte værktøjer og indsigter med en guidet tur.";



$quiz_consultant_name = 'Mia';
$quiz_consultant_role = 'Onboarding-assistent';

$quiz_text_welcome   = "Hej! Dette er $quiz_consultant_name, din personlige onboarding-assistent hos $site_name. Gode nyheder! Din adgang er officielt forhåndsgodkendt. Lad os konfigurere din professionelle profil nu!";
$quiz_text_q1 = "For at sikre fuld lovgivningsmæssig overholdelse bedes du bekræfte dit nuværende bopælsland: $country_name";
$quiz_text_a1_yes    = "Ja, dette er min nuværende bopæl";
$quiz_text_a1_no     = "Nej";

$quiz_text_q2 = "Perfekt. Vælg venligst den passende alderskategori for at finde de bedst egnede finansielle instrumenter:";

$quiz_text_q3        = "Er der en aktiv bankkonto eller et kreditkort tilgængeligt for at modtage regelmæssige daglige udbyttebetalinger?";
$quiz_text_a3_yes    = "Ja, en aktiv konto er tilgængelig";
$quiz_text_a3_no     = "Ikke tilgængelig endnu";

$quiz_text_q4        = "Angiv venligst den primære kilde til personlig indkomst. (Denne parameter hjælper med at tilpasse systemets risikostyringsindstillinger).";
$quiz_text_a4_1      = "Lønmodtager / Selvstændig";
$quiz_text_a4_2      = "Passiv indkomst / Personlig opsparing";
$quiz_text_a4_3      = "Andre kilder";

$quiz_text_q5 = "Fremragende! Det sidste trin er en kort telefonisk bekræftelse fra vores manager for at verificere din registrering. Opkald foretages fra kl. 11:00 til 20:00. Vil du have mulighed for at besvare opkaldet?";
$quiz_text_a5_yes    = "Ja, dette tidspunkt passer mig godt";
$quiz_text_a5_no     = "Vær venlig at ringe med det samme";

$quiz_text_loader    = "Analyserer de anmodede muligheder og initialiserer sikre kontokonfigurationsparametre...";
$quiz_text_final_ttl = "Konto godkendt med succes! 🎉 Dit sikre digitale arbejdsområde er nu fuldt konfigureret. Gennemfør de sidste bekræftelsestrin nedenfor for at garantere daglige udbetalinger:";

$quiz_placeholder_fname = "Fornavn";
$quiz_placeholder_lname = "Efternavn";
$quiz_placeholder_email = "E-mailadresse";
$quiz_placeholder_phone = "Telefonnummer";
$quiz_btn_submit = "Aktivér handel";
$quiz_text_typing       = "skriver en besked...";
$quiz_text_processing   = "Behandler anmodning...";


$about_meta_title = "Om $site_name | AI-drevet kryptohandelsinfrastruktur";
$about_meta_description = "Lær mere om $site_name, en avanceret AI-drevet kryptohandelsinfrastruktur med fokus på prædiktiv analyse, markedsindsigt, volatilitetsovervågning og forskning i digitale aktiver.";

$contact_meta_title = "Kontakt $site_name | Anmod om adgang til AI-handelsplatform";
$contact_meta_description = "Kontakt $site_name for at anmode om adgang, spørge om AI-drevet kryptohandelsinfrastruktur, understøttede markeder, indsigt i digitale aktiver eller platform-onboarding.";

$terms_meta_title = "Vilkår & Betingelser | $site_name Hjemmeside- og platformsvilkår";
$terms_meta_description = "Læs $site_name Vilkår & Betingelser vedrørende brug af hjemmesiden, informationsindhold, AI-handelsinfrastruktur, brugeransvar, tredjepartstjenester og risikobegrænsninger.";

$privacy_meta_title = "Privatlivspolitik | $site_name Databeskyttelse & brugerprivatliv";
$privacy_meta_description = "Læs $site_name Privatlivspolitik for at forstå, hvordan vi indsamler, bruger, beskytter, gemmer og håndterer personlige oplysninger, der indsendes via vores hjemmeside for AI-kryptohandelsinfrastruktur.";

$cookies_meta_title = "Cookiepolitik | $site_name Hjemmesidecookies & sporing";
$cookies_meta_description = "Lær hvordan $site_name bruger cookies, analyseteknologier, præstationssporing og hjemmesidefunktionalitet for at forbedre brugeroplevelsen og platformens ydeevne.";

$aml_meta_title = "AML-politik | $site_name Standarder for bekæmpelse af hvidvask";
$aml_meta_description = "Gennemgå $site_name AML-politik, herunder ansvarlig brug af digitale aktiver, bevidsthed om bekæmpelse af hvidvask, forbudt aktivitet, overvågningsprincipper og forventninger til overholdelse.";

$risk_meta_title = "Risikooplysning | $site_name Erklæring om kryptohandelsrisici";
$risk_meta_description = "Gennemgå $site_name Risikooplysning for at forstå kryptovalutavolatilitet, handelsusikkerhed, begrænsninger for AI-signaler, markedsrisiko, likviditetsrisiko og brugeransvar.";

$exchanges_meta_title = "Understøttede børser | $site_name Markedsdækning";
$exchanges_meta_description = "Udforsk typerne af kryptovalutabørser, likviditetssteder og markeder for digitale aktiver, som overvåges af $site_name AI-drevet markedsovervågning.";


$about_breadcrumb_name = "Om $site_name";
$contact_breadcrumb_name = "Kontakt $site_name";
$terms_breadcrumb_name = "Vilkår & Betingelser";
$privacy_breadcrumb_name = "Privatlivspolitik";
$cookies_breadcrumb_name = "Cookiepolitik";
$aml_breadcrumb_name = "AML-politik";
$risk_breadcrumb_name = "Risikooplysning";
$exchanges_breadcrumb_name = "Understøttede børser";

$hero_text = "Oplev en ny æra inden for handel med vores avancerede kryptohandelsplatform. Med $site_name AI-teknologi kan du optimere dine afkast og træffe informerede investeringsbeslutninger.";


// HEADER / NAV / FOOTER
$logo_subtitle = "AI-handelsinfrastruktur";
$nav_signals = "Signaler";
$nav_reviews = "Anmeldelser";
$nav_about = "Om os";
$nav_exchanges = "Børser";
$nav_exchanges_full = "Understøttede børser";
$nav_risk = "Risiko";
$nav_risk_full = "Risikooplysning";
$nav_faq = "FAQ";
$nav_privacy = "Privatlivspolitik";
$nav_terms = "Vilkår & Betingelser";
$nav_cookies = "Cookiepolitik";
$nav_cookies_short = "Cookies";
$nav_aml = "AML-politik";
$nav_contact_us = "Kontakt os";
$nav_contact = "Kontakt";
$nav_get_started = "Kom i gang";
$header_ai_status = "AI-kerne aktiv";
$header_menu_aria = "Menu";
$footer_platform = "Platform";
$footer_resources = "Ressourcer";
$footer_contact_title = "Kontakt";
$footer_ai_signals = "AI-signaler";
$footer_about_link = "Om $site_name";
$footer_description = "$site_name er en avanceret AI-drevet kryptohandelsinfrastruktur med fokus på prædiktiv analyse, institutionel markedsindsigt, volatilitetsmodellering, neurale eksekveringssystemer og automatiseret risikostyring.";
$footer_monitoring = "24/7 AI-infrastrukturovervågning";
$footer_global_markets = "Globale markeder for digitale aktiver";
$footer_disclaimer_title = "Risikooplysning";
$footer_disclaimer_p1 = "Handel med kryptovaluta og investering i digitale aktiver indebærer betydelige finansielle risici og er muligvis ikke egnet for alle investorer. Markedsvolatilitet, likviditetsforstyrrelser, tekniske fejl, lovgivningsmæssige ændringer og makroøkonomiske forhold kan påvirke aktivets ydeevne betydeligt.";
$footer_disclaimer_p2 = "$site_name leverer AI-drevet analytisk infrastruktur, prædiktiv markedsindsigt og automatiserede handelsteknologier. Intet på denne hjemmeside udgør finansiel, investeringsmæssig, juridisk eller skattemæssig rådgivning.";
$footer_disclaimer_p3 = "Tidligere resultater garanterer ikke fremtidige afkast. Brugere bør uafhængigt vurdere risici, før de interagerer med kryptovalutamarkeder eller automatiserede handelssystemer.";
$footer_rights = "Alle rettigheder forbeholdes.";
$footer_lang_label = "Sprog";



// HOME FORM
$home_form_fname = "Fornavn";
$home_form_lname = "Efternavn";
$home_form_email = "E-mail";
$home_form_submit_access = "Få adgang";
$home_form_submit_platform = "Anmod om platformadgang";

// CONTACT FORM
$contact_form_fname = "Fornavn";
$contact_form_lname = "Efternavn";
$contact_form_email = "E-mail";
$contact_form_submit = "Anmod om adgang";


// HOME LABELS
$home_label_ai_confidence = "AI-sikkerhed";
$home_label_update_speed = "Opdateringshastighed";
$home_label_market_mode = "Markedstilstand";
$home_label_market_condition = "Markedsforhold";
$home_label_buyer_activity = "Køberaktivitet";
$home_label_market_activity = "Markedsaktivitet";
$home_label_risk_level = "Risikoniveau";
$home_label_updated = "Opdateret";
$home_label_live_analysis = "LIVE ANALYSE";

// JS
$home_js_sec_ago = "sek. siden";
$js_sec_ago = "sek. siden";
$js_close_notification = "Luk meddelelse";

$js_signal_long_direction = "Sandsynlighed for optrend stigende";
$js_signal_long_market = "Kontrolleret udvidelse";
$js_signal_long_pressure_label = "Likviditetspres";
$js_signal_long_pressure = "Bullish";

$js_signal_short_direction = "Nedsidepres stigende";
$js_signal_short_market = "Høj ustabilitet";
$js_signal_short_pressure_label = "Risikopres";
$js_signal_short_pressure = "Bearish";

$js_signal_watch_direction = "Konsolideringszone registreret";
$js_signal_watch_market = "Neutral konsolidering";
$js_signal_watch_pressure_label = "Institutionelt flow";
$js_signal_watch_pressure = "Stabil";

$js_hero_long_pair = "BTC/USD Momentum-udvidelse";
$js_hero_long_regime = "Bullish";
$js_hero_long_feed_1 = "BTC-likviditetsudvidelse registreret";
$js_hero_long_feed_2 = "Ordreflow-pres bliver positivt";
$js_hero_long_feed_3 = "AI-model bekræfter bullish fortsættelse";

$js_hero_watch_pair = "ETH/USD Volatilitetskompression";
$js_hero_watch_regime = "Neutral";
$js_hero_watch_feed_1 = "ETH-kompressionszone registreret";
$js_hero_watch_feed_2 = "AI venter på stærkere bekræftelse";
$js_hero_watch_feed_3 = "Likviditet forbliver stabil";

$js_hero_short_pair = "SOL/USD Risiko-udvidelse";
$js_hero_short_regime = "Risk-Off";
$js_hero_short_feed_1 = "SOL-nedsidepres registreret";
$js_hero_short_feed_2 = "Risikomodel flagrer volatilitetsudvidelse";
$js_hero_short_feed_3 = "AI reducerer bullish eksponering";

// JS — live user popup actions
$js_live_action_1 = "tilsluttede sig $site_name fra";
$js_live_action_2 = "anmodede om platformadgang fra";
$js_live_action_3 = "startede AI-signalovervågning fra";
$js_live_action_4 = "aktiverede markedsanalyse fra";
$js_live_action_5 = "åbnede det institutionelle dashboard fra";
$js_live_action_6 = "forbandt til $site_name fra";


// HOME PAGE
$home_hero_label = "AI Krypto-platform til alle erfaringsniveauer";
$home_hero_title = "$site_name Platform";
$home_hero_desc = "$site_name hjælper begyndere og erfarne tradere med at udforske kryptomarkeder med AI-drevet indsigt, markedsmonitorering i realtid, risikobevidsthedsværktøjer og guidet platformsupport.";
$home_hero_feat_1 = "Enkel AI-markedsindsigt for nye brugere";
$home_hero_feat_2 = "Krypto-overvågning og signalopdateringer i realtid";
$home_hero_feat_3 = "Risikobevidste værktøjer til klogere beslutninger";
$home_hero_feat_4 = "Avancerede analyser til erfarne tradere";
$home_btn_request_access = "Få platformadgang";
$home_btn_view_signals = "Se AI-signaler";
$home_trust_data_label = "Markedsdatapunkter analyseret";
$home_trust_confidence_label = "Gennemsnitlig signalsikkerhed";
$home_trust_monitoring_label = "AI-markedsovervågning";
$home_terminal_title = "$site_name Guidet AI-markedsvisning";
$home_terminal_insight_label = "Aktuel AI-markedsindsigt";
$home_terminal_feed_1 = "BTC-markedsaktivitet viser stærkere momentum";
$home_terminal_feed_2 = "ETH-bevægelse overvåges for bekræftelse";
$home_terminal_feed_3 = "AI-assistent fremhæver en mulig mulighedszone";
$home_trust_strip_1 = "AI-indsigt til begyndere og erfarne tradere";
$home_trust_strip_2 = "24/7 Overvågning af kryptovalutamarkeder";
$home_trust_strip_3 = "Realtids risiko- og mulighedsanalyse";
$home_trust_strip_4 = "Guidet adgang til avancerede handelsværktøjer";
$home_signals_eyebrow = "$site_name LIVE AI KERNE";
$home_signals_title = "AI-markedssignaler i realtid for klogere kryptobeslutninger";
$home_signals_desc = "$site_name overvåger løbende kryptovalutamarkedets aktivitet, volatilitet, likviditetsforhold, stemningstrends og blockchain-data for at generere AI-drevne indsigter og markedssignaler i realtid for både begyndere og erfarne tradere.";
$home_signals_terminal_title = "$site_name AI Signal Engine";
$home_signal_btc_sub = "Positivt momentum registreret";
$home_signal_btc_dir = "Sandsynlighed for optrend stigende";
$home_signal_btc_market = "Positivt momentum";
$home_signal_btc_activity = "Stærk";
$home_signal_eth_sub = "Venter på markedsbekræftelse";
$home_signal_eth_dir = "Sidelæns bevægelse registreret";
$home_signal_eth_market = "Neutral trend";
$home_signal_eth_activity = "Stabil";
$home_signal_sol_sub = "Øget markedsrisiko registreret";
$home_signal_sol_dir = "Nedsidepres stigende";
$home_signal_sol_market = "Høj volatilitet";
$home_signal_sol_risk = "Forhøjet";
$home_why_eyebrow = "HVORFOR $site_name?";
$home_why_title = "AI-drevne kryptoværktøjer bygget til alle erfaringsniveauer";
$home_why_desc_1 = "$site_name hjælper brugere med at forstå kryptovalutamarkederne bedre gennem kunstig intelligens, overvågning i realtid, markedsindsigt og risikobevidsthedsværktøjer. Uanset om du udforsker krypto for første gang eller allerede har handelserfaring, er platformen designet til at gøre markedsanalyser mere tilgængelige og lettere at forstå.";
$home_why_desc_2 = "$site_name-infrastrukturen evaluerer løbende markedsaktivitet, prisbevægelser, likviditetsforhold, stemningstrends og blockchain-data for at identificere nye muligheder og skiftende markedsforhold. Nye brugere kan drage fordel af guidet platformsupport, mens erfarne tradere kan udforske avancerede analytiske værktøjer og AI-drevet markedsintelligens.";
$home_flow_1 = "Markedsovervågning";
$home_flow_2 = "AI Analyse";
$home_flow_3 = "Opdagelse af muligheder";
$home_flow_4 = "Risikovurdering";
$home_flow_5 = "Handlingsorienteret indsigt";
$home_reviews_eyebrow = "$site_name FÆLLESSKAB";
$home_reviews_title = "Hvad brugere siger om $site_name";
$home_reviews_desc = "Fra førstegangs kryptobrugere til erfarne tradere bruger folk $site_name til bedre at forstå markedsforholdene, udforske AI-drevet indsigt og nærme sig beslutninger om kryptovaluta med mere klarhed.";
$home_review_1_text = "Før jeg opdagede $site_name, følte jeg mig overvældet af mængden af information i kryptovalutaområdet. Hver platform virkede kompliceret, og jeg bekymrede mig konstant om at begå fejl. Det, jeg sætter mest pris på ved $site_name, er, hvor tilgængeligt alt føles. AI-indsigterne hjalp mig med at forstå markedsforholdene uden at føle mig fortabt, og platformen gav mig selvtillid til at begynde at lære i mit eget tempo. Jeg er oprigtigt taknemmelig for, hvor meget nemmere oplevelsen blev sammenlignet med, hvad jeg havde forventet.";
$home_review_1_tag = "Sikker & nem start";
$home_review_badge = "VERIFICERET BRUGER";
$home_review_2_text = "Jeg brugte måneder på at kigge på kryptoplatforme uden nogensinde at føle mig tryg nok til at tage det første skridt. $site_name ændrede den oplevelse fuldstændigt. Platformen gjorde markedsinformation nemmere at forstå, og jeg følte aldrig, at jeg havde brug for mange års handelserfaring bare for at bruge værktøjerne. Det, der imponerede mig mest, var balancen mellem enkelhed og kraftfuld AI-analyse. Det føles som at have vejledning tilgængelig, når man har brug for det. Jeg er taknemmelig for, at jeg fandt en platform, der hjalp mig med at lære uden at føle mig intimideret.";
$home_review_2_tag = "Nemmere læringsoplevelse";
$home_review_3_text = "Jeg har testet mange markedsanalyseplatforme, og $site_name skiller sig ud, fordi den balancerer tilgængelighed med seriøs analytisk dybde. Nye brugere kan forstå platformen hurtigt, mens erfarne tradere stadig får nyttige AI-drevne markedssignaler, risikoovervågning og krypto-intelligens i realtid. Den balance er svær at finde. Platformen leverer meningsfuld markedskontekst uden at overvælde brugerne, hvilket er noget, meget få kryptoværktøjer formår at opnå.";
$home_review_3_tag = "Avancerede værktøjer med simpel brugervenlighed";
$home_review_span_1 = "Ny kryptobruger";
$home_review_span_2 = "Førstegangs platformbruger";
$home_review_span_3 = "Professionel kryptotrader";
$home_review_1_avatar_alt = "Christian Møller, $site_name-bruger";
$home_review_2_avatar_alt = "Mikkel Hansen, $site_name-bruger";
$home_review_3_avatar_alt = "Rasmus Nielsen, $site_name-bruger";
$home_hero_visual_alt = "AI-drevet markedsanalysedashboard på $site_name";
$home_signal_visual_alt = "Realtid handelssignal genereret af $site_name AI";
$home_device_visual_alt = "Kryptoanalyse vist på en tilsluttet enhed via $site_name";
$home_security_visual_alt = "Sikkerhedsskjold, der repræsenterer $site_name kontobeskyttelse";
$home_contact_eyebrow = "KOM I GANG MED $site_name";
$home_contact_title = "Udforsk platformen med selvtillid";
$home_contact_section_title = "Udforsk platformen med selvtillid";
$home_contact_desc_1 = "Uanset om du er helt ny inden for kryptovalutamarkeder eller allerede har handelserfaring, giver $site_name adgang til AI-drevet markedsindsigt, overvågningsværktøjer i realtid og intelligente analyser designet til at hjælpe brugere med bedre at forstå mulighederne inden for digitale aktiver.";
$home_contact_desc_2 = "Indsend dine oplysninger for at lære mere om platformen, udforske tilgængelige funktioner og opdage, hvordan $site_name kan hjælpe dig med at navigere i kryptovalutamarkederne gennem avanceret teknologi og guidet platformsupport.";
$home_seo_toggle = "Lær mere om $site_name AI Platform";
$home_seo_h2 = "$site_name AI Platform til klogere kryptomarkedsbeslutninger";
$home_seo_p1 = "$site_name er en AI-drevet kryptovalutaplatform designet til både begyndere og erfarne tradere. Platformen kombinerer kunstig intelligens, markedsovervågning i realtid og avancerede analytiske værktøjer til at hjælpe brugere med bedre at forstå markeder for digitale aktiver og identificere potentielle muligheder.";
$home_seo_p2 = "I modsætning til mange traditionelle handelsplatforme, der kræver omfattende markedsviden, er $site_name bygget til at gøre kompleks markedsinformation nemmere at forstå. Platformen analyserer løbende kryptoaktivitet, prisbevægelser, stemningstrends, likviditetsforhold og blockchain-data, og forvandler store mængder information til praktisk indsigt.";
$home_seo_p3 = "Uanset om du udforsker kryptovalutamarkeder for første gang eller allerede har erfaring med at handle digitale aktiver, leverer $site_name intelligente værktøjer designet til at understøtte mere informeret beslutningstagning, samtidig med at den tilpasser sig ændrede markedsforhold i realtid.";
$home_seo_h3_1 = "AI Markedsanalyse gjort tilgængelig";
$home_seo_h3_1_p1 = "$site_name bruger kunstig intelligens til at evaluere en lang række markedsindikatorer, herunder handelsaktivitet, volatilitetsmønstre, likviditetsforhold, blockchain-begivenheder og markedsstemning. Ved at behandle information kontinuerligt hjælper platformen brugere med at få en klarere forståelse af den aktuelle markedsadfærd.";
$home_seo_h3_1_p2 = "AI-modellerne er designet til at tilpasse sig skiftende miljøer i stedet for at stole på statiske antagelser. Dette giver platformen mulighed for at reagere dynamisk på udviklingen af kryptotrends og nye markedsmuligheder.";
$home_seo_h3_1_p3 = "Mens den er avanceret nok til erfarne tradere, er platformen også struktureret til at forblive imødekommende for nye brugere, der ønsker adgang til AI-drevet markedsintelligens uden at kræve dyb teknisk ekspertise.";
$home_seo_h3_2 = "AI Markedssignaler i realtid";
$home_seo_h3_2_p1 = "$site_name overvåger løbende kryptovalutamarkederne og genererer AI-drevne indsigter baseret på ændret markedsaktivitet. Platformen evaluerer momentum, volatilitet, likviditetsforhold og bredere markedsadfærd for at give analytiske signaler i realtid.";
$home_seo_h3_2_p2 = "Bitcoin, Ethereum, Solana, XRP, Avalanche og andre store digitale aktiver overvåges gennem adaptive analytiske modeller, der automatisk justeres til ændrede markedsforhold.";
$home_seo_h3_2_p3 = "I stedet for at stole på en enkelt indikator eller isoleret måling kombinerer $site_name flere informationskilder i en bredere analytisk ramme designet til at give et mere komplet billede af markedsforholdene.";
$home_seo_h3_3 = "Intelligente værktøjer til risikobevidsthed";
$home_seo_h3_3_p1 = "Kryptovalutamarkeder kan ændre sig hurtigt. $site_name inkluderer AI-drevne overvågningssystemer designet til at identificere usædvanlig volatilitet, skiftende likviditetsforhold og nye markedsrisici.";
$home_seo_h3_3_p2 = "Platformen evaluerer løbende markedsadfærd og potentielle risikofaktorer og hjælper brugere med bedre at forstå skiftende forhold og træffe mere informerede beslutninger.";
$home_seo_h3_3_p3 = "Ved at kombinere flere lag af analyse søger $site_name at forbedre markedsbevidstheden og hjælpe brugere med at navigere i perioder med øget usikkerhed med større tillid.";
$home_seo_h3_4 = "Designet til moderne kryptovalutamarkeder";
$home_seo_h3_4_p1 = "$site_name kombinerer kunstig intelligens, overvågningsteknologier i realtid og avancerede analytiske værktøjer i en enkelt platform designet til moderne markeder for digitale aktiver.";
$home_seo_h3_4_p2 = "Infrastrukturen evaluerer løbende markedsaktivitet, blockchain-udviklinger, stemningsændringer og likviditetstrends for at give et omfattende billede af kryptovalutamarkedets adfærd.";
$home_seo_h3_4_p3 = "Efterhånden som markeder for digitale aktiver fortsætter med at udvikle sig, kan AI-drevne værktøjer hjælpe brugere med at behandle information mere effektivt og bedre forstå de stadig mere komplekse markedsmiljøer. $site_name er designet til at gøre disse funktioner tilgængelige for en bredere vifte af markedsdeltagere.";
$home_seo_side_1_label = "AI-indsigt";
$home_seo_side_1_title = "Letforståelig markedsanalyse";
$home_seo_side_1_desc = "AI-drevet indsigt designet til både nye og erfarne kryptovalutabrugere.";
$home_seo_side_2_label = "Markedsovervågning";
$home_seo_side_2_title = "Kryptosporing i realtid";
$home_seo_side_2_desc = "Kontinuerlig overvågning af store kryptovalutamarkeder og skiftende markedsforhold.";
$home_seo_side_3_label = "Risikobevidsthed";
$home_seo_side_3_title = "Intelligent risikoregistrering";
$home_seo_side_3_desc = "Avancerede overvågningsværktøjer designet til at fremhæve skiftende markedsdynamik og volatilitet.";
$home_seo_side_4_label = "AI Teknologi";
$home_seo_side_4_title = "Adaptive analytiske modeller";
$home_seo_side_4_desc = "Maskinlæringssystemer, der løbende evaluerer markedsdata og nye tendenser.";
$home_faq_eyebrow = "$site_name VIDENSBASE";
$home_faq_title = "Ofte stillede spørgsmål om $site_name";
$home_faq_desc = "Lær mere om, hvordan platformen fungerer, hvem den er designet til, og hvordan kunstig intelligens hjælper brugere med bedre at forstå kryptovalutamarkedsforhold.";
$home_faq_q1 = "Behøver jeg handelserfaring for at bruge $site_name?";
$home_faq_a1 = "Nej. $site_name er designet til brugere med forskellige erfaringsniveauer, herunder folk, der er helt nye inden for kryptovalutamarkeder. Platformen bruger AI-drevet indsigt og markedsovervågningsværktøjer for at gøre kompleks information nemmere at forstå.";
$home_faq_q2 = "Hvad gør $site_name egentlig?";
$home_faq_a2 = "$site_name analyserer løbende kryptovalutamarkeder ved hjælp af kunstig intelligens. Platformen evaluerer markedsaktivitet, volatilitet, stemningstrends, likviditetsforhold og blockchain-data for at generere indsigter og analytiske signaler i realtid.";
$home_faq_q3 = "Kan erfarne tradere bruge $site_name?";
$home_faq_a3 = "Ja. Mens platformen er begyndervenlig, tilbyder den også avancerede analytiske værktøjer, AI-drevet markedsintelligens og overvågningsfunktioner i realtid, der kan være værdifulde for erfarne markedsdeltagere.";
$home_faq_q4 = "Hvilke kryptovalutaer overvåger $site_name?";
$home_faq_a4 = "Platformen kan analysere store digitale aktiver såsom Bitcoin, Ethereum, Solana, XRP, Avalanche og andre bredt handlede kryptovalutaer afhængigt af markedsforhold og tilgængelige datakilder.";
$home_faq_q5 = "Hvordan genereres AI-signaler?";
$home_faq_a5 = "$site_name evaluerer flere markedsfaktorer samtidigt, herunder volatilitet, handelsaktivitet, likviditetsforhold, stemningstrends og historisk markedsadfærd. AI-modeller kombinerer disse input for at identificere skiftende markedsforhold og potentielle muligheder.";
$home_faq_q6 = "Giver $site_name pædagogisk vejledning?";
$home_faq_a6 = "Platformen er designet til at hjælpe brugere med bedre at forstå markedsforhold gennem AI-drevet analyse, forenklede indsigter og guidet adgang til platformsfunktioner. Nye brugere kan udforske kryptovalutamarkeder uden at have brug for avanceret teknisk viden.";
$home_cta_label = "AI Platform Klar";
$home_cta_title = "Begynd at udforske $site_name i dag";
$home_cta_desc = "Opdag AI-drevet markedsindsigt, kryptovalutaovervågning i realtid, intelligente risikobevidsthedsværktøjer og avancerede analyser designet til både begyndere og erfarne tradere.";
$home_ticker_text = "AI Markedsovervågning Aktiv • Kryptovalutaanalyse i realtid • Bitcoin Momentum Styrkes • Ethereum Konsolidering Registreret • Nye Markedsmuligheder Identificeret • Risikoovervågningssystemer Online • AI Indsigt Opdateres Løbende • Designet Til Begyndere & Erfarne Tradere";





// ABOUT PAGE
$about_h1 = "Om $site_name";
$about_p1 = "$site_name er en næstegenerations kunstig intelligens-infrastruktur designet til at hjælpe markedsdeltagere med at forstå det hastigt udviklende økosystem for kryptovaluta bedre. Ved at kombinere maskinlæringsteknologier, prædiktiv analyse, markedsintelligenssystemer og databehandling i realtid giver $site_name et omfattende miljø til overvågning af aktivitet af digitale aktiver og identifikation af meningsfuld markedsudvikling.";
$about_p2 = "Kryptovalutamarkedet fungerer kontinuerligt på tværs af flere børser, jurisdiktioner og likviditetsudbydere. Hvert sekund påvirker tusindvis af variabler priser, volatilitet, likviditetsforhold og investorsentiment. $site_name blev udviklet med det formål at behandle disse komplekse datastrømme på en struktureret og skalerbar måde.";
$about_h2_vision = "Visionen bag $site_name";
$about_p_vision_1 = "De finansielle markeder er i stigende grad blevet datadrevne. Traditionelle analysemetoder kæmper ofte for at holde trit med mængden af information, der genereres på tværs af moderne digitale aktiv-økosystemer. $site_name søger at bygge bro over dette hul gennem anvendelse af avanceret beregningsmæssig intelligens, automatiserede overvågningssystemer og adaptive analytiske modeller.";
$about_p_vision_2 = "Den langsigtede vision for $site_name er at levere gennemsigtige markedsintelligensværktøjer, der er i stand til at hjælpe brugerne med at få en bedre forståelse af kryptovalutaens markedsstruktur, risikoforhold og nye tendenser.";
$about_h2_ai = "Infrastruktur for kunstig intelligens";
$about_p_ai_1 = "Kernen i $site_name er en flerlaget ramme for kunstig intelligens designet til at behandle information fra adskillige markedskilder samtidigt.";
$about_p_ai_2 = "Disse kilder kan omfatte:";
$about_li_1 = "Kryptovaluta prisfeeds";
$about_li_2 = "Ordrebogsaktivitet";
$about_li_3 = "Data om likviditetsbevægelser";
$about_li_4 = "Volatilitetsindikatorer";
$about_li_5 = "Blockchain-transaktionsmetrikker";
$about_li_6 = "Signaler om markedsstemning";
$about_li_7 = "Makroøkonomisk udvikling";
$about_li_8 = "Institutionel markedsaktivitet";
$about_p_ai_3 = "Ved løbende at vurdere forholdet mellem disse variabler forsøger $site_name at identificere mønstre, der kan give værdifuld markedskontekst.";
$about_h2_risk = "Filosofi for risikobevidsthed";
$about_p_risk_1 = "Ansvarlig deltagelse på kryptovalutamarkeder kræver en klar forståelse af risiko. $site_name lægger vægt på risikobevidsthed som en grundlæggende komponent i analysen af digitale aktiver.";
$about_p_risk_2 = "Markedsvolatilitet, likviditetsudsving, børsspecifikke begivenheder, regulatoriske udviklinger og bredere makroøkonomiske forhold kan alle påvirke markedsresultaterne. Som følge heraf bør brugere aldrig udelukkende stole på en enkelt informationskilde, når de træffer beslutninger.";
$about_h2_global = "Globale markeder for digitale aktiver";
$about_p_global_1 = "Kryptovalutamarkeder opererer i global skala og involverer deltagere fra forskellige regioner, industrier og økonomiske miljøer. $site_name infrastrukturen er designet til at overvåge flere markedssegmenter samtidigt, så brugere kan observere udviklingen, der finder sted på tværs af forskellige dele af det digitale aktiv-økosystem.";
$about_p_global_2 = "Dette bredere perspektiv kan hjælpe med at forbedre bevidstheden om ændrede markedsforhold og nye tendenser.";
$about_h2_why = "Hvorfor brugere udforsker $site_name";
$about_why_li_1 = "Avanceret AI-drevet markedsintelligens";
$about_why_li_2 = "Krypto-overvågning i realtid";
$about_why_li_3 = "Institutionel analytisk infrastruktur";
$about_why_li_4 = "Multi-faktor markedsevaluering";
$about_why_li_5 = "Volatilitets- og likviditetsovervågning";
$about_why_li_6 = "Skalerbare forskningsværktøjer til digitale aktiver";
$about_why_li_7 = "Risikobevidst analytisk metode";
$about_h2_forward = "Ser fremad";
$about_p_forward_1 = "Efterhånden som markeder for digitale aktiver fortsætter med at modnes, forventes vigtigheden af avanceret analytisk infrastruktur at stige. $site_name forbliver fokuseret på at udvikle teknologier, der understøtter dybere markedsforståelse, større gennemsigtighed og mere informeret deltagelse i kryptovaluta-økosystemet.";
$about_p_forward_2 = "Gennem kontinuerlig innovation og løbende forskning sigter $site_name på at bidrage til en mere intelligent og datadrevet fremtid for analyse af digitale aktiver.";


// CONTACT PAGE
$contact_h1 = "Kontakt $site_name";
$contact_intro_1 = "Kontakt $site_name-teamet for at anmode om adgang til platformen, spørge om AI-drevet kryptohandelsinfrastruktur eller lære mere om vores markedsintelligensmiljø for digitale aktiver.";
$contact_intro_2 = "Uanset om du udforsker automatiserede kryptoanalyser, institutionel signalinfrastruktur, volatilitetsovervågning eller multibørs-markedsintelligens, kan vores team hjælpe med at dirigere din anmodning til den rette afdeling.";
$contact_h2_help = "Hvordan vi kan hjælpe";
$contact_li_1 = "Anmodninger om platformsadgang";
$contact_li_2 = "Generelle produktspørgsmål";
$contact_li_3 = "Information om AI-handelsinfrastruktur";
$contact_li_4 = "Forespørgsler om digital aktiv markedsintelligens";
$contact_li_5 = "Risikooplysninger og compliance-spørgsmål";
$contact_li_6 = "Teknisk eller onboarding assistance";
$contact_h2_send = "Send en anmodning";
$contact_p_send = "Udfyld formularen nedenfor, og en $site_name repræsentant vil kontakte dig med yderligere information, hvis det er relevant.";
$contact_h2_info = "Kontaktoplysninger";
$contact_support_label = "Generel support:";
$contact_institutional_label = "Institutionelle forespørgsler:";
$contact_disclaimer = "Bemærk venligst at $site_name ikke tilbyder personlig finansiel, investeringsmæssig, skattemæssig eller juridisk rådgivning. Alle oplysninger gives udelukkende til teknologiske og informative formål.";

// TERMS PAGE
$terms_h1 = "Vilkår & Betingelser";
$terms_intro_1 = "Disse Vilkår & Betingelser regulerer adgangen til og brugen af $site_name hjemmesiden, indhold, platformsbeskrivelser, formularer, kommunikation og relaterede informationsmaterialer.";
$terms_intro_2 = "Ved at besøge denne hjemmeside anerkender brugere, at de har læst, forstået og accepteret disse Vilkår & Betingelser. Hvis en bruger ikke er enig i disse vilkår, bør de stoppe med at bruge hjemmesiden.";
$terms_h2_informational = "Informativt formål";
$terms_p_info_1 = "$site_name giver information om AI-drevet kryptohandelsinfrastruktur, markedsintelligens for digitale aktiver, volatilitetsovervågning, likviditetsanalyse og relaterede teknologier.";
$terms_p_info_2 = "Hjemmesidens indhold leveres udelukkende til generelle informative og teknologiske præsentationsformål. Intet på denne hjemmeside skal fortolkes som finansiel rådgivning, investeringsrådgivning, juridisk rådgivning, skatterådgivning eller en garanti for handelsresultater.";
$terms_h2_no_advice = "Ingen finansiel rådgivning";
$terms_p_no_advice_1 = "$site_name giver ikke personlige anbefalinger vedrørende, om brugere skal købe, sælge, holde, handle, stake, overføre eller på anden måde interagere med enhver kryptovaluta, token, finansielt produkt eller digitalt aktiv.";
$terms_p_no_advice_2 = "Brugere bør uafhængigt vurdere alle oplysninger og søge rådgivning fra kvalificerede fagfolk, før de træffer økonomiske beslutninger.";
$terms_h2_user_responsibility = "Brugeransvar";
$terms_p_user_1 = "Brugere er ansvarlige for deres egne beslutninger, risikovurderinger, kontoaktivitet, handelshandlinger, lovmæssig overholdelse og brug af tredjepartstjenester.";
$terms_p_user_2 = "Brugere bør sikre, at aktivitet med digitale aktiver er tilladt i deres jurisdiktion, og at de forstår alle gældende risici, før de interagerer med kryptomarkeder.";
$terms_h2_ai = "AI og analytiske systemer";
$terms_p_ai_1 = "$site_name kan beskrive kunstig intelligens-systemer, prædiktive modeller, markedssignaler, automatiserede analyser eller udførelsesrelaterede teknologier.";
$terms_p_ai_2 = "Disse systemer kan stole på markedsdata, statistiske modeller, maskinlæringsprocesser og informationskilder fra tredjeparter. Sådanne systemer kan være unøjagtige, forsinkede, ufuldstændige, utilgængelige eller uegnede til bestemte brugeres mål.";
$terms_h2_availability = "Ingen garanti for tilgængelighed";
$terms_p_avail_1 = "$site_name garanterer ikke uafbrudt adgang til hjemmesiden, kontinuerlig platformstilgængelighed, fejlfri drift, nøjagtige markedsinformationer eller tilgængelighed af specifikke funktioner.";
$terms_p_avail_2 = "Tjenester, indhold, sider, formularer, integrationer eller platformbeskrivelser kan til enhver tid ændres, suspenderes eller afbrydes.";
$terms_h2_third_party = "Tredjepartstjenester";
$terms_p_tp_1 = "Hjemmesiden kan referere til tredjeparts børser, likviditetssteder, analyseudbydere, kommunikationsværktøjer, hostingtjenester eller tekniske infrastrukturudbydere.";
$terms_p_tp_2 = "$site_name kontrollerer ikke tredjepartsplatforme og er ikke ansvarlig for deres tilgængelighed, gebyrer, politikker, kontobegrænsninger, compliance-procedurer, tekniske fejl eller brugertab.";
$terms_h2_prohibited = "Forbudt brug";
$terms_p_prohibited = "Brugere må ikke bruge denne hjemmeside eller relateret teknologi til ulovlige, fornærmende, svigagtige, manipulerende eller skadelige formål.";
$terms_li_1 = "Forsøg på uautoriseret adgang";
$terms_li_2 = "Indsendelse af falske eller vildledende oplysninger";
$terms_li_3 = "Brug af hjemmesiden til ulovlig finansiel aktivitet";
$terms_li_4 = "Forstyrrelse af hjemmesidens sikkerhed eller funktionalitet";
$terms_li_5 = "Kopiering eller misbrug af hjemmesideindhold uden tilladelse";
$terms_li_6 = "Forsøg på at omgå compliance eller tekniske kontroller";
$terms_h2_ip = "Intellektuel ejendomsret";
$terms_p_ip_1 = "Hjemmesidedesign, tekst, branding, grænsefladeelementer, grafik, struktur og relaterede materialer ejes af eller licenseres til $site_name medmindre andet er angivet.";
$terms_p_ip_2 = "Brugere må ikke reproducere, distribuere, ændre eller kommercielt udnytte hjemmesidens materialer uden passende autorisation.";
$terms_h2_liability = "Ansvarsbegrænsning";
$terms_p_liab_1 = "I det maksimale omfang, der er tilladt i henhold til gældende lov, er $site_name ikke ansvarlig for tab, der opstår fra handel med digitale aktiver, markedsvolatilitet, tekniske problemer, tredjepartsplatformsfejl, unøjagtige data, brugerbeslutninger eller tillid til hjemmesidens indhold.";
$terms_p_liab_2 = "Brugere tilgår og bruger denne hjemmeside på egen risiko.";
$terms_h2_changes = "Ændringer til disse vilkår";
$terms_p_changes_1 = "$site_name kan til enhver tid opdatere disse Vilkår & Betingelser. Opdaterede vilkår kan blive offentliggjort på denne side.";
$terms_p_changes_2 = "Fortsat brug af hjemmesiden efter ændringer betyder, at brugere anerkender og accepterer de opdaterede vilkår.";

// PRIVACY PAGE
$privacy_h1 = "Privatlivspolitik";
$privacy_intro_1 = "$site_name respekterer brugernes privatliv og er forpligtet til at håndtere personlige oplysninger ansvarligt, gennemsigtigt og sikkert.";
$privacy_intro_2 = "Denne privatlivspolitik forklarer, hvilke oplysninger der kan indsamles, når brugere besøger denne hjemmeside, indsender kontaktformularer, anmoder om adgang eller interagerer med $site_name indhold og platformrelateret kommunikation.";
$privacy_h2_collect = "Information vi kan indsamle";
$privacy_p_collect_1 = "$site_name kan indsamle information, der frivilligt indsendes af brugere via hjemmesideformularer eller kommunikationskanaler.";
$privacy_li_fname = "Fornavn";
$privacy_li_lname = "Efternavn";
$privacy_li_email = "E-mailadresse";
$privacy_li_phone = "Telefonnummer";
$privacy_li_inquiry = "Indsendte forespørgselsdetaljer";
$privacy_li_technical = "Grundlæggende tekniske hjemmesidebrugsdata";
$privacy_h2_use = "Hvordan vi bruger information";
$privacy_p_use_1 = "Information kan bruges til at besvare brugeranmodninger, give information om platformadgang, forbedre hjemmesidens funktionalitet, opretholde sikkerheden og kommunikere relevante opdateringer om $site_name.";
$privacy_p_use_2 = "Vi kan også bruge aggregerede eller ikke-identificerende data til at analysere hjemmesidens ydeevne, forbedre indholdsstrukturen og bedre forstå, hvordan besøgende interagerer med vores sider.";
$privacy_h2_comm = "Kommunikationsformål";
$privacy_p_comm_1 = "Hvis en bruger indsender kontaktoplysninger, kan $site_name bruge disse oplysninger til at svare på forespørgslen, give onboarding-detaljer, afklare platformadgangsanmodninger eller dele relevant serviceinformation.";
$privacy_p_comm_2 = "Brugere kan anmode om at få afbrudt kommunikationen, hvor det er relevant.";
$privacy_h2_cookies = "Cookies og tekniske data";
$privacy_p_cookies_1 = "Denne hjemmeside kan bruge cookies, analyseværktøjer og lignende teknologier for at forbedre browseroplevelsen, overvåge ydeevnen og understøtte hjemmesidens sikkerhed.";
$privacy_p_cookies_2 = "Tekniske data kan omfatte enhedstype, browsertype, operativsystem, sideinteraktioner, henvisningsoplysninger og generel brugsstatistik.";
$privacy_h2_protection = "Databeskyttelsesforanstaltninger";
$privacy_p_prot_1 = "$site_name anvender rimelige administrative, tekniske og organisatoriske sikkerhedsforanstaltninger til at beskytte indsendt information mod uautoriseret adgang, misbrug, tab eller offentliggørelse.";
$privacy_p_prot_2 = "Men intet onlinesystem kan garantere absolut sikkerhed. Brugere bør undgå at indsende følsomme finansielle oplysninger, private wallet-nøgler, adgangskoder, børslegitimationsoplysninger eller fortrolige kontoadgangsoplysninger via offentlige hjemmesideformularer.";
$privacy_h2_third = "Tredjepartstjenesteudbydere";
$privacy_p_third_1 = "$site_name kan bruge tredjepartsudbydere til hosting, analyse, kommunikation, sikkerhed, e-maillevering, CRM-behandling eller teknisk infrastruktur.";
$privacy_p_third_2 = "Disse udbydere kan behandle begrænsede oplysninger kun som nødvendigt for at understøtte hjemmesidens funktionalitet og relaterede tjenester.";
$privacy_google_choices = 'Du kan administrere, hvordan Google bruger oplysninger fra dine besøg via <a href="http://www.google.com/settings/ads" target="_blank" rel="noopener">Google Ads-indstillinger</a>, framelde dig interessebaseret annoncering ved hjælp af <a href="https://tools.google.com/dlpage/gaoptout" target="_blank" rel="noopener">Google Analytics Opt-out Browser Add-on</a>, eller gennemgå <a href="https://www.google.com/intl/en/policies/privacy/" target="_blank" rel="noopener">Googles privatlivspolitik</a> for flere detaljer.';
$privacy_h2_sale = "Intet salg af personlige oplysninger";
$privacy_p_sale_1 = "$site_name har ikke til hensigt at sælge personlige oplysninger, der er indsendt via denne hjemmeside.";
$privacy_p_sale_2 = "Information må kun deles, når det er nødvendigt til operationelle formål, overholdelse af lovgivning, brugerkommunikation, forebyggelse af svindel eller servicerelateret behandling.";
$privacy_h2_retention = "Dataopbevaring";
$privacy_p_retention = "Personlige oplysninger kan gemmes så længe det er nødvendigt for at besvare henvendelser, vedligeholde forretningsoptegnelser, overholde juridiske forpligtelser, forbedre platformkommunikation eller understøtte sikkerhed og forebyggelse af svindel.";
$privacy_h2_rights = "Brugerrettigheder";
$privacy_p_rights = "Afhængigt af gældende lovgivning kan brugere have rettigheder i forbindelse med adgang, rettelse, sletning, indsigelse, begrænsning eller portabilitet af personlige oplysninger.";
$privacy_h2_intl = "International brug";
$privacy_p_intl_1 = "$site_name kan tilgås af brugere fra forskellige jurisdiktioner. Privatlivsregler kan variere afhængigt af placering.";
$privacy_p_intl_2 = "Ved at bruge denne hjemmeside anerkender brugere, at oplysninger kan behandles i overensstemmelse med denne privatlivspolitik og gældende operationelle krav.";
$privacy_h2_policy_updates = "Politikopdateringer";
$privacy_p_updates_1 = "$site_name kan opdatere denne privatlivspolitik med jævne mellemrum for at afspejle ændringer i lovgivning, teknologi, interne procedurer eller hjemmesidens funktionalitet.";
$privacy_p_updates_2 = "Fortsat brug af hjemmesiden efter opdateringer betyder, at brugere anerkender den reviderede privatlivspolitik.";

// COOKIES PAGE
$cookies_h1 = "Cookiepolitik";
$cookies_intro_1 = "Denne cookiepolitik forklarer, hvordan $site_name bruger cookies, analyseteknologier og lignende sporingsværktøjer, når brugere tilgår eller interagerer med denne hjemmeside.";
$cookies_intro_2 = "Cookies hjælper med at forbedre hjemmesidens funktionalitet, forbedre brugeroplevelsen, analysere ydeevnen og understøtte sikkerhedsrelaterede processer.";
$cookies_intro_3 = "Ved at fortsætte med at bruge denne hjemmeside anerkender brugerne, at visse cookies og relaterede teknologier kan blive brugt i overensstemmelse med denne politik.";
$cookies_h2_what = "Hvad er cookies?";
$cookies_p_what_1 = "Cookies er små tekstfiler, der gemmes på en brugers enhed, når vedkommende besøger en hjemmeside.";
$cookies_p_what_2 = "Disse filer kan indeholde oplysninger, der hjælper hjemmesider med at genkende tilbagevendende besøgende, huske præferencer, forbedre navigationen og måle hjemmesidens ydeevne.";
$cookies_h2_why = "Hvorfor vi bruger cookies";
$cookies_p_why_1 = "$site_name kan bruge cookies og lignende teknologier til flere formål.";
$cookies_li_1 = "Vedligeholdelse af hjemmesidens funktionalitet";
$cookies_li_2 = "Forbedring af brugeroplevelsen";
$cookies_li_3 = "Huskning af brugerpræferencer";
$cookies_li_4 = "Forståelse af besøgendes adfærd";
$cookies_li_5 = "Måling af hjemmesidens ydeevne";
$cookies_li_6 = "Identifikation af tekniske problemer";
$cookies_li_7 = "Understøttelse af hjemmesidens sikkerhed";
$cookies_li_8 = "Forebyggelse af misbrug";
$cookies_h2_essential = "Nødvendige cookies";
$cookies_p_ess_1 = "Visse cookies er nødvendige for, at hjemmesiden fungerer korrekt.";
$cookies_p_ess_2 = "Disse cookies hjælper med at opretholde sikkerhed, navigationsfunktionalitet, sessionsstyring og andre kerneoperationer på hjemmesiden.";
$cookies_p_ess_3 = "Uden nødvendige cookies vil dele af hjemmesiden muligvis ikke fungere korrekt.";
$cookies_h2_analytics = "Analyse-cookies";
$cookies_p_an_1 = "Analyse-cookies hjælper os med at forstå, hvordan besøgende interagerer med hjemmesidens indhold.";
$cookies_p_an_2 = "Disse teknologier kan indsamle oplysninger om sidebesøg, navigationsmønstre, enhedstyper, browserkonfigurationer og generelle parametre for brug af hjemmesiden.";
$cookies_p_an_3 = "Analyseinformation aggregeres typisk og bruges til at forbedre hjemmesidens ydeevne og brugeroplevelsen.";
$cookies_h2_functional = "Funktionelle cookies";
$cookies_p_fun_1 = "Funktionelle cookies kan bruges til at huske indstillinger og præferencer, der er valgt af brugere.";
$cookies_p_fun_2 = "Eksempler kan omfatte sprogpræferencer, grænsefladeindstillinger, visningsmuligheder eller andre tilpasningsfunktioner.";
$cookies_h2_third = "Tredjepartsteknologier";
$cookies_p_third_1 = "$site_name kan gøre brug af tredjepartstjenesteudbydere, analyseplatforme, annonceringsteknologier eller værktøjer til overvågning af ydeevne.";
$cookies_p_third_2 = "Disse tredjeparter kan placere deres egne cookies eller sporingsteknologier underlagt deres individuelle privatlivspolitikker.";
$cookies_p_third_3 = "$site_name kontrollerer ikke tredjeparts cookie-praksis og anbefaler at gennemgå fortrolighedsdokumentationen fra eksterne udbydere, hvor det er relevant.";
$cookies_h2_manage = "Administration af cookies";
$cookies_p_manage_1 = "De fleste moderne browsere giver brugerne mulighed for at administrere, begrænse eller slette cookies gennem browserindstillinger.";
$cookies_p_manage_2 = "Brugere kan vælge at deaktivere cookies helt, selvom visse hjemmesidefunktioner muligvis ikke fungerer som tilsigtet efter at have gjort det.";
$cookies_p_manage_3 = "Browserindstillinger giver typisk muligheder for at:";
$cookies_li_manage_1 = "Bloker alle cookies";
$cookies_li_manage_2 = "Slet eksisterende cookies";
$cookies_li_manage_3 = "Modtag cookie-notifikationer";
$cookies_li_manage_4 = "Begræns specifikke cookie-kategorier";
$cookies_h2_data = "Databeskyttelse";
$cookies_p_data = "Cookie-relaterede oplysninger kan behandles i overensstemmelse med vores privatlivspolitik og gældende databeskyttelseslove.";
$cookies_h2_policy_updates = "Politikopdateringer";
$cookies_p_updates_1 = "$site_name kan opdatere denne cookiepolitik med jævne mellemrum for at afspejle teknologiske ændringer, lovkrav eller driftsforbedringer.";
$cookies_p_updates_2 = "Fortsat brug af hjemmesiden efter opdateringer udgør en anerkendelse af den reviderede politik.";

// AML PAGE
$aml_h1 = "AML-politik";
$aml_intro_1 = "$site_name anerkender vigtigheden af bevidsthed om bekæmpelse af hvidvaskning af penge, finansiel integritet og ansvarlig deltagelse i markeder for digitale aktiver.";
$aml_intro_2 = "Denne AML-politik forklarer de generelle principper, $site_name anvender til at modvirke ulovlig brug af krypto-relaterede teknologier, mistænkelig finansiel aktivitet, svindel, omgåelse af sanktioner, finansiering af terrorisme og anden forbudt adfærd.";
$aml_h2_purpose = "Formålet med denne politik";
$aml_p_purpose_1 = "Formålet med denne politik er at etablere en ansvarlig ramme for, hvordan $site_name forholder sig til hvidvaskbekæmpelse inden for økosystemet for digitale aktiver.";
$aml_p_purpose_2 = "Kryptovalutamarkeder kan involvere grænseoverskridende aktivitet, decentraliseret infrastruktur, tredjepartsbørser og eksterne wallet-systemer. På grund af dette bør brugere forstå, at compliance-forpligtelser kan variere afhængigt af deres jurisdiktion, kontotype, udbyder af børs og det lokale reguleringsmiljø.";
$aml_h2_responsible = "Ansvarlig brug af digital aktivteknologi";
$aml_p_resp_1 = "Brugere forventes at interagere med $site_name og eventuelle relaterede digitale aktivtjenester ansvarligt, lovligt og i overensstemmelse med gældende regler.";
$aml_p_resp_2 = "$site_name understøtter eller opfordrer ikke til brugen af kryptomarkeder, handelssystemer, automatiserede teknologier eller analytiske værktøjer til ulovlige formål.";
$aml_li_1 = "Hvidvaskning af penge";
$aml_li_2 = "Finansiering af terrorisme";
$aml_li_3 = "Svindel eller økonomisk bedrag";
$aml_li_4 = "Omgåelse af sanktioner";
$aml_li_5 = "Markedsmanipulation";
$aml_li_6 = "Brug af stjålne midler eller kompromitterede konti";
$aml_li_7 = "Enhver aktivitet forbudt ved gældende lov";
$aml_h2_exchange = "Tredjeparts Exchange Compliance";
$aml_p_ex_1 = "$site_name kan referere til, interagere med eller levere analytisk infrastruktur relateret til tredjeparts digitale aktivsteder eller likviditetsmiljøer.";
$aml_p_ex_2 = "Tredjepartsbørser, depoter, betalingsbehandlere og tjenesteudbydere kan anvende deres egne compliance-procedurer, herunder identitetsbekræftelse, transaktionsovervågning, sanktionsscreening, kontobegrænsninger, kilde-til-midler kontrol eller yderligere verifikationskrav.";
$aml_h2_user_responsibility = "Brugeransvar";
$aml_p_user_1 = "Brugere er ansvarlige for at sikre, at deres aktivitet er lovlig på deres placering og i overensstemmelse med alle forpligtelser pålagt af relevante regulatorer, børser, finansielle institutioner eller tjenesteudbydere.";
$aml_p_user_2 = "Brugere bør ikke forsøge at skjule ejerskab, skjule transaktionsoprindelser, give falske oplysninger, omgå bekræftelsesprocesser eller bruge digital aktivinfrastruktur på en måde, der kan betragtes som mistænkelig eller ulovlig.";
$aml_h2_suspicious = "Mistænkelig aktivitet";
$aml_p_suspicious = "Mistænkelig aktivitet kan omfatte adfærd, der synes inkonsistent med normal brug, forsøg på at misbruge handelssystemer, gentagen indsendelse af vildledende information, involvering i begrænsede jurisdiktioner eller aktivitet relateret til svindel, ulovlige midler eller forbudte tjenester.";
$aml_h2_evasion = "Ingen omgåelse eller omgåelse";
$aml_p_evasion = "Brugere må ikke forsøge at omgå compliance-kontroller, tekniske begrænsninger, identitetsbekræftelsessystemer, geografiske begrænsninger eller risikoovervågningsprocesser.";
$aml_h2_policy_updates = "Politikopdateringer";
$aml_p_updates_1 = "$site_name kan opdatere denne AML-politik fra tid til anden for at afspejle ændringer i lovmæssige forventninger, markedsstandarder, interne procedurer eller digital aktivindustripraksis.";
$aml_p_updates_2 = "Fortsat brug af hjemmesiden efter opdateringer betyder, at brugerne anerkender den reviderede politik.";

// RISK PAGE
$risk_h1 = "Risikooplysning";
$risk_intro_1 = "Handel med kryptovaluta og deltagelse i digitale aktiver indebærer en betydelig risiko. Priser kan bevæge sig hurtigt, likviditet kan ændre sig uventet, og markedsforhold kan blive meget ustabile inden for en kort periode.";
$risk_intro_2 = "Denne risikooplysning forklarer vigtige overvejelser, brugerne bør gennemgå, før de interagerer med markeder for digitale aktiver, automatiserede handelsteknologier, AI-genererede markedssignaler eller krypto-relateret analytisk infrastruktur.";
$risk_h2_no_guarantee = "Ingen garanterede resultater";
$risk_p_no_guarantee_1 = "$site_name garanterer ikke overskud, investeringsafkast, handelssucces, signalnøjagtighed, uafbrudt adgang eller positive økonomiske resultater.";
$risk_p_no_guarantee_2 = "Alle eksempler, statistikker, grænsefladeelementer, præstationsmålinger, signalindikatorer eller markedssimuleringer vist på denne hjemmeside leveres udelukkende til informations- og illustrationsformål.";
$risk_h2_volatility = "Kryptovalutamarkedets volatilitet";
$risk_p_vol_1 = "Markeder for digitale aktiver er meget volatile. Priser kan påvirkes af likviditetsmangel, makroøkonomiske nyheder, regulatoriske udviklinger, børsaftbrydelser, blockchain-begivenheder, investorernes stemning, gearingsaktivitet eller markedsmanipulation.";
$risk_p_vol_2 = "Volatilitet kan resultere i hurtige tab, pludselige prisfald, slippage, likvidationshændelser eller manglende evne til at udføre transaktioner til forventede priser.";
$risk_h2_ai = "Begrænsninger for AI-signaler";
$risk_p_ai_1 = "Systemer med kunstig intelligens kan analysere store mængder markedsdata, men de kan ikke eliminere usikkerhed.";
$risk_p_ai_2 = "AI-drevne indikatorer, handelssignaler, markedsklassifikationer og prædiktive modeller kan være ufuldstændige, forsinkede, forkerte eller uegnede til en brugers personlige økonomiske situation.";
$risk_p_ai_3 = "Brugere bør ikke udelukkende stole på noget AI-signal, når de træffer handels-, investerings- eller økonomiske beslutninger.";
$risk_h2_tech = "Teknologi- og eksekveringsrisiko";
$risk_p_tech_1 = "Handelsteknologi kan blive påvirket af internetforbindelsesproblemer, serverafbrydelser, latenstid, softwarefejl, API-fejl, nedetid for børsen, forkerte datafeeds eller begrænsninger i tredjeparts infrastruktur.";
$risk_p_tech_2 = "$site_name garanterer ikke uafbrudt adgang til data, signaler, platformsfunktioner, tredjepartssystemer eller eksekveringsmiljøer.";
$risk_h2_liquidity = "Likviditets- og udvekslingsrisiko";
$risk_p_liq_1 = "Likviditet kan variere betydeligt på tværs af børser og digitale aktiver. Nogle markeder kan opleve lav ordrebogsdybde, brede spreads, forsinket eksekvering eller skarpe prisbevægelser i perioder med stress.";
$risk_p_liq_2 = "Tredjepartsbørser kan pålægge gebyrer, begrænsninger, restriktioner, kontogennemgange, forsinkelser ved tilbagetrækninger, handelssuspensioner eller geografiske begrænsninger.";
$risk_h2_regulatory = "Regulatorisk risiko";
$risk_p_reg_1 = "Regler for digitale aktiver kan ændre sig hurtigt og kan variere på tværs af lande, regioner og jurisdiktioner.";
$risk_p_reg_2 = "Lovmæssige ændringer kan påvirke markedsadgang, tilgængelighed af aktiver, børsdrift, rapporteringsforpligtelser, beskatning, handelsrestriktioner eller platformsfunktionalitet.";
$risk_h2_user_responsibility = "Brugeransvar";
$risk_p_user_1 = "Brugere er eneansvarlige for at evaluere risici, forstå gældende love, gennemgå deres økonomiske forhold og træffe uafhængige beslutninger.";
$risk_p_user_2 = "$site_name tilbyder ikke personlig økonomisk, investeringsmæssig, juridisk, regnskabsmæssig eller skattemæssig rådgivning.";
$risk_h2_advice = "Søg professionel rådgivning";
$risk_p_advice_1 = "Brugere bør konsultere kvalificerede fagfolk, før de træffer væsentlige økonomiske beslutninger, der involverer kryptovaluta, handelssystemer, automatiserede teknologier eller investeringer i digitale aktiver.";
$risk_p_advice_2 = "Ved at bruge denne hjemmeside anerkender brugere, at de forstår risiciene forbundet med markeder for digitale aktiver og accepterer ansvaret for deres egne beslutninger.";

// EXCHANGES PAGE
$exchanges_h1 = "Understøttede børser";
$exchanges_intro_1 = "$site_name er designet omkring en multi-marked intelligence-tilgang, der evaluerer aktiviteten af digitale aktiver på tværs af en bred vifte af kryptovaluta-handelsmiljøer.";
$exchanges_intro_2 = "Moderne kryptomarkeder fungerer gennem adskillige børser, likviditetsudbydere, derivatsteder og handelsøkosystemer. At forstå aktivitet på tværs af disse miljøer er afgørende for at opbygge omfattende markedsindsigt.";
$exchanges_h2_philosophy = "Filosofi for markedsdækning";
$exchanges_p_phil_1 = "I stedet for at stole på et enkelt sted er $site_name bygget op omkring begrebet markedsdækkende analyse.";
$exchanges_p_phil_2 = "Prisfastsættelse for kryptovaluta, likviditetsforhold, volatilitetsadfærd og institutionel aktivitet varierer ofte mellem børserne. Ved at observere bredere markedsforhold kan analytiske modeller få yderligere kontekst med hensyn til nye tendenser og potentielle uregelmæssigheder.";
$exchanges_h2_spot = "Spotmarkedsovervågning";
$exchanges_p_spot_1 = "Spotbørser repræsenterer en betydelig del af den globale aktivitet af digitale aktiver.";
$exchanges_p_spot_2 = "Markedsintelligenssystemer kan evaluere spotmarkedsdata, herunder:";
$exchanges_li_spot_1 = "Prisaktivitet";
$exchanges_li_spot_2 = "Likviditetsdybde";
$exchanges_li_spot_3 = "Ordrebogsstruktur";
$exchanges_li_spot_4 = "Handelsvolumen";
$exchanges_li_spot_5 = "Adfærd mellem købs- og salgspris";
$exchanges_li_spot_6 = "Markedsubalanceforhold";
$exchanges_h2_deriv = "Derivatmarkeder";
$exchanges_p_deriv_1 = "Kryptovalutaderivater spiller en stadig vigtigere rolle i det bredere digitale aktiv-økosystem.";
$exchanges_p_deriv_2 = "Futures, evighedskontrakter, optioner og gearet handelsaktivitet kan påvirke markedsstemning, volatilitetsforhold og retningsbestemt momentum.";
$exchanges_p_deriv_3 = "Analytisk infrastruktur kan evaluere derivatrelaterede oplysninger, når bredere markedsforhold vurderes.";
$exchanges_h2_liquidity = "Likviditetsanalyse";
$exchanges_p_liq_1 = "Likviditet er fortsat en af de vigtigste faktorer, der påvirker markedsstabilitet og eksekveringskvalitet.";
$exchanges_p_liq_2 = "$site_name kan analysere likviditetsforhold på tværs af flere handelspladser for at identificere:";
$exchanges_li_liq_1 = "Likviditetskoncentration";
$exchanges_li_liq_2 = "Pludselige tilbagetrækninger af likviditet";
$exchanges_li_liq_3 = "Ordrebogspres";
$exchanges_li_liq_4 = "Hændelser med markedsubalance";
$exchanges_li_liq_5 = "Unormal handelsadfærd";
$exchanges_h2_availability = "Udveksling Tilgængelighed";
$exchanges_p_avail_1 = "Tilgængelighed af børs kan variere afhængigt af geografisk placering, jurisdiktion, kontoberettigelse, regulatoriske krav og tekniske begrænsninger.";
$exchanges_p_avail_2 = "Visse børser eller tjenester er muligvis ikke tilgængelige for alle brugere og kan pålægge deres egne begrænsninger, verifikationskrav, gebyrer og driftspolitikker.";
$exchanges_h2_third = "Tredjeparts platforme";
$exchanges_p_third_1 = "Eventuelle referencer til børser, likviditetssteder, mæglere, depoter eller markedsudbydere er udelukkende til informationsformål.";
$exchanges_p_third_2 = "$site_name ejer, driver, kontrollerer eller garanterer ikke tjenesterne fra tredjepartsbørser.";
$exchanges_p_third_3 = "Brugere er fortsat ansvarlige for at evaluere enhver børs, handelssted eller digital aktivtjeneste før brug.";
$exchanges_h2_monitoring = "Løbende markedsovervågning";
$exchanges_p_mon_1 = "Kryptovalutamarkeder fungerer uafbrudt, ofte 24 timer i døgnet, syv dage om ugen.";
$exchanges_p_mon_2 = "Efterhånden som markedsstrukturen udvikler sig, dukker nye børser op, likviditet migrerer, og handelsaktiviteten ændres.";
$exchanges_p_mon_3 = "$site_name søger løbende at opretholde bevidsthed om ændrede markedsforhold gennem bred analytisk dækning af det digitale aktiv-økosystem.";

// ==========================================
// RISK WARNING PAGE
// ==========================================
$page_title_risk_warning = "Risikoadvarsel | $site_name";
$page_description_risk_warning = "Forstå risiciene ved automatiseret kryptohandel med $site_name, herunder markedsvolatilitet, eksekveringsrisiko og lovmæssige overvejelser.";
$risk_warning_breadcrumb_name = "Risikoadvarsel";
$risk_warning_title = "Risikoadvarsel";
$risk_warning_intro = "At forstå risici er det første skridt mod tillidsfuld handel.";

$risk_warning_ai_heading = "Hvordan vores AI-system hjælper med at styre risiko:";
$risk_warning_ai_1 = "<strong>Algoritmisk effektivitet & følelsesløs handel:</strong> Avancerede algoritmer analyserer markedssignaler for at udføre handler objektivt på optimale tidspunkter.";
$risk_warning_ai_2 = "<strong>Datadrevne strategier:</strong> Strategier er baseret på verificerede markedsmønstre og realtidsanalyse i stedet for gætværk.";
$risk_warning_ai_3 = "<strong>Fleksible indstillinger & fuld kontrol:</strong> Juster dine risikoparametre til enhver tid. Spor alle saldi og handler gennemsigtigt på dit dashboard uden skjulte gebyrer og restriktionsfrie udbetalinger.";

$risk_warning_disclaimer = "<strong>Ansvarsfraskrivelse:</strong> Handel indebærer altid en risiko. Automatiserede systemer (inklusive AI) garanterer ikke profit, kan fejle på grund af softwarefejl eller uventede markedsbegivenheder og kræver brugerovervågning. Tidligere resultater er ikke vejledende for fremtidige resultater. Denne platform tjener udelukkende til informations- og markedsføringsformål og yder ikke finansiel rådgivning.";

$risk_warning_s1_heading = "1. Generelle & kryptovalutamarkedsrisici";
$risk_warning_s1_intro = "Kryptovalutaer er stærkt volatile, spekulative aktiver, der opererer 24/7 med minimalt regulativt tilsyn i de fleste jurisdiktioner.";
$risk_warning_s1_1 = "Værdier kan svinge dramatisk inden for korte perioder, hvilket potentielt kan føre til et totalt tab af den investerede kapital.";
$risk_warning_s1_2 = "Markedsværdier kan blive stærkt påvirket af lovmæssige opdateringer, tekniske udviklinger, sikkerhedsbrud eller bredere makroøkonomiske begivenheder.";
$risk_warning_s1_3 = "Nogle aktiver kan miste al værdi fuldstændigt. Invester kun midler, som du har råd til at miste.";

$risk_warning_s2_heading = "2. Eksekverings-, likviditets- & gearingsrisici";
$risk_warning_s2_1 = "<strong>Markedsvolatilitet & likviditet:</strong> Ekstreme prisbevægelser (10-20 %+ dagligt) eller lav likviditet (især i mindre mønter) kan føre til forsinkelser, platformsafbrydelser og alvorlig eksekveringsglidning. Stop-loss ordrer kan ikke garantere tabsbegrænsninger under ekstreme forhold.";
$risk_warning_s2_2 = "<strong>Gearings- & margingrisici:</strong> Gearede produkter forstærker både gevinster og tab, hvilket betyder, at du kan miste mere end din oprindelige indbetaling. Omkring 70-80 % af private investorkonti taber penge ved handel med gearede produkter.";

$risk_warning_s3_heading = "3. Tekniske, cybersikkerheds- & tredjepartsrisici";
$risk_warning_s3_1 = "<strong>Tekniske faktorer:</strong> Onlinehandel involverer i sig selv risici for internetforbindelsesafbrydelser, hardware-/softwarefejl og manglende tilgængelighed af tjenester.";
$risk_warning_s3_2 = "<strong>Cybersikkerhed:</strong> Kryptovalutakonti er hyppige mål for phishing, malware og hacks. Transaktioner er irreversible; kompromittering af dine legitimationsoplysninger kan resultere i permanent tab.";
$risk_warning_s3_3 = "<strong>Tredjepartsplatforme:</strong> Denne hjemmeside kan forbinde brugere til tredjepartsplatforme. Vi kontrollerer, godkender eller garanterer ikke deres sikkerhed, drift eller solvens. Udfør altid din egen due diligence, før du indsætter penge på eksterne platforme.";

$risk_warning_s4_heading = "4. Lovgivningsmæssige, skattemæssige & afsluttende bestemmelser";
$risk_warning_s4_1 = "<strong>Overholdelse af lovgivning & skatter:</strong> Lovgivningsmæssige rammer varierer meget og ændrer sig hurtigt. Brugere er eneansvarlige for at sikre, at deres handelsaktivitet overholder lokale love og for at opfylde deres egne skattemæssige forpligtelser.";
$risk_warning_s4_2 = "<strong>Ingen profitgarantier:</strong> Der er ingen \"sikker\" eller risikofri kryptohandel. Enhver afkastfigur eller præstationseksempel er rent hypotetisk.";
$risk_warning_s4_3 = "<strong>Egnethed:</strong> Hvis du ikke fuldt ud forstår risiciene, er afhængig af vigtige midler eller handler med lånte penge, er kryptohandel ikke egnet for dig. Konsulter en uafhængig licenseret finansiel rådgiver, hvis du er usikker.";

$risk_warning_contact = "<strong>Kontakt:</strong> For eventuelle spørgsmål vedrørende denne erklæring eller for at indsende en forespørgsel, bedes du kontakte vores officielle kundesupportteam via kontaktformularen på vores hjemmeside.";
$footer_risk_warning = "Risikoadvarsel";


$lang_loaded = true;

?>
