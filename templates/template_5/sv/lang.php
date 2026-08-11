<?php
require __DIR__ . '/../lang.php';

// Identity / config variables are intentionally NOT overridden here — they are inherited
// as-is from the root lang.php so brand/pricing swaps still work correctly at deploy time:
// $site_name, $site_url, $site_domain, $app_price, $app_currency, $rating_value,
// $rating_count, $review_count, $country_name, $support_email, $institutional_email.

$site_lang = 'sv-SE';
$form_language = 'sv'; 

// Reviews
$review_1_author = "Privatinvesterare";
$review_2_author = "Oberoende handlare";
$review_3_author = "Digital tillgångshandlare";
$review_4_author = "Söker passiv inkomst";


// META TITLE / DESCRIPTION (per page)
$home_meta_title = "$site_name — Officiell webbplats | Handelsplattform";
$home_meta_description = "$site_name ⭐ — intelligent AI-handelsplattform för marknadsanalyser i realtid och tydliga handelssignaler ⚡ Prova smarta verktyg & insikter med en guidad tur.";



$quiz_consultant_name = 'Elin';
$quiz_consultant_role = 'Onboarding-assistent';

$quiz_text_welcome   = "Hej! Det här är $quiz_consultant_name, din personliga onboarding-assistent på $site_name. Fantastiska nyheter! Din åtkomst är officiellt förgodkänd. Låt oss ställa in din professionella profil nu!";
$quiz_text_q1 = "För att säkerställa fullständig regelefterlevnad och juridisk efterlevnad, vänligen bekräfta ditt nuvarande bosättningsland: $country_name";
$quiz_text_a1_yes    = "Ja, det här är min nuvarande bostadsort";
$quiz_text_a1_no     = "Nej";

$quiz_text_q2 = "Perfekt. Välj lämplig ålderskategori för att hitta de mest passande finansiella instrumenten:";

$quiz_text_q3        = "Finns det ett aktivt bankkonto eller ett kreditkort tillgängligt för att ta emot regelbundna dagliga utdelningar?";
$quiz_text_a3_yes    = "Ja, ett aktivt konto finns tillgängligt";
$quiz_text_a3_no     = "Inte tillgängligt ännu";

$quiz_text_q4        = "Ange din primära inkomstkälla. (Denna parameter hjälper till att anpassa systemets inställningar för riskhantering).";
$quiz_text_a4_1      = "Anställd / Egenföretagare";
$quiz_text_a4_2      = "Passiv inkomst / Personligt sparande";
$quiz_text_a4_3      = "Andra källor";

$quiz_text_q5 = "Fantastiskt! Det sista steget är en kort telefonverifiering från vår chef för att bekräfta din registrering. Samtal görs mellan 11:00 och 20:00. Kommer du att kunna ta emot samtalet?";
$quiz_text_a5_yes    = "Ja, denna tid passar för ett samtal";
$quiz_text_a5_no     = "Vänligen påbörja samtalet omedelbart";

$quiz_text_loader    = "Analyserar de begärda alternativen och initierar säkra konfigurationsparametrar för kontot...";
$quiz_text_final_ttl = "Kontot har auktoriserats framgångsrikt! 🎉 Din säkra digitala arbetsyta är färdigkonfigurerad. Vänligen slutför de sista verifieringsstegen nedan för att garantera dagliga betalningar:";

$quiz_placeholder_fname = "Förnamn";
$quiz_placeholder_lname = "Efternamn";
$quiz_placeholder_email = "E-postadress";
$quiz_placeholder_phone = "Telefonnummer";
$quiz_btn_submit = "Aktivera handel";
$quiz_text_typing       = "skriver ett meddelande...";
$quiz_text_processing   = "Behandlar förfrågan...";


$about_meta_title = "Om $site_name | AI-driven infrastruktur för kryptohandel";
$about_meta_description = "Läs mer om $site_name, en avancerad AI-driven infrastruktur för kryptohandel med fokus på prediktiv analys, marknadsintelligens, volatilitetsövervakning och forskning kring digitala tillgångar.";

$contact_meta_title = "Kontakt $site_name | Begär åtkomst till AI-handelsplattformen";
$contact_meta_description = "Kontakta $site_name för att begära åtkomst, fråga om AI-driven infrastruktur för kryptohandel, stödda marknader, intelligens för digitala tillgångar eller plattformens onboarding.";

$terms_meta_title = "Allmänna villkor | $site_name Webbplats- & plattformsvillkor";
$terms_meta_description = "Läs $site_name allmänna villkor som täcker webbplatsens användning, informationsinnehåll, AI-handelsinfrastruktur, användarens ansvar, tredjepartstjänster och riskbegränsningar.";

$privacy_meta_title = "Integritetspolicy | $site_name Dataskydd & Användarintegritet";
$privacy_meta_description = "Läs $site_name integritetspolicy för att förstå hur vi samlar in, använder, skyddar, lagrar och hanterar personlig information som skickats via vår webbplats för AI-kryptohandelsinfrastruktur.";

$cookies_meta_title = "Cookiepolicy | $site_name Webbplatscookies & Spårning";
$cookies_meta_description = "Lär dig hur $site_name använder cookies, analysteknologier, prestandaspårningsverktyg och webbplatsfunktionstjänster för att förbättra användarupplevelsen och plattformens prestanda.";

$aml_meta_title = "AML-policy | $site_name Standarder mot penningtvätt";
$aml_meta_description = "Granska $site_name AML-policy, inklusive ansvarsfull användning av digitala tillgångar, medvetenhet om penningtvätt, förbjuden aktivitet, övervakningsprinciper och efterlevnadsförväntningar.";

$risk_meta_title = "Riskavslöjande | $site_name Riskdeklaration för kryptohandel";
$risk_meta_description = "Granska $site_name riskavslöjande för att förstå kryptovalutans volatilitet, handelsosäkerhet, begränsningar i AI-signaler, marknadsrisk, likviditetsrisk och användarens ansvar.";

$exchanges_meta_title = "Stödda börser | $site_name Täckning av marknadsintelligens";
$exchanges_meta_description = "Utforska vilka typer av kryptovalutabörser, likviditetsplatser och marknader för digitala tillgångar som övervakas av $site_name AI-drivna infrastruktur för marknadsintelligens.";


$about_breadcrumb_name = "Om $site_name";
$contact_breadcrumb_name = "Kontakt $site_name";
$terms_breadcrumb_name = "Allmänna villkor";
$privacy_breadcrumb_name = "Integritetspolicy";
$cookies_breadcrumb_name = "Cookiepolicy";
$aml_breadcrumb_name = "AML-policy";
$risk_breadcrumb_name = "Riskavslöjande";
$exchanges_breadcrumb_name = "Stödda börser";

$hero_text = "Upplev en ny era av handel med vår avancerade plattform för kryptohandel. Med $site_name AI-teknologi kan du optimera din avkastning och fatta välgrundade investeringsbeslut.";


// HEADER / NAV / FOOTER
$logo_subtitle = "AI Handelsinfrastruktur";
$nav_signals = "Signaler";
$nav_reviews = "Recensioner";
$nav_about = "Om";
$nav_exchanges = "Börser";
$nav_exchanges_full = "Stödda börser";
$nav_risk = "Risk";
$nav_risk_full = "Riskavslöjande";
$nav_faq = "Vanliga frågor";
$nav_privacy = "Integritetspolicy";
$nav_terms = "Allmänna villkor";
$nav_cookies = "Cookiepolicy";
$nav_cookies_short = "Cookies";
$nav_aml = "AML-policy";
$nav_contact_us = "Kontakta oss";
$nav_contact = "Kontakt";
$nav_get_started = "Kom igång";
$header_ai_status = "AI-kärna operativ";
$header_menu_aria = "Meny";
$footer_platform = "Plattform";
$footer_resources = "Resurser";
$footer_contact_title = "Kontakt";
$footer_ai_signals = "AI-signaler";
$footer_about_link = "Om $site_name";
$footer_description = "$site_name är en avancerad AI-driven kryptohandelsinfrastruktur med fokus på prediktiv analys, marknadsintelligens av institutionell klass, volatilitetsmodellering, neurala exekveringssystem och automatiserad riskhantering.";
$footer_monitoring = "24/7 Övervakning av AI-infrastruktur";
$footer_global_markets = "Globala marknader för digitala tillgångar";
$footer_disclaimer_title = "Riskavslöjande";
$footer_disclaimer_p1 = "Kryptovalutahandel och investeringar i digitala tillgångar innebär betydande ekonomisk risk och är kanske inte lämpliga för alla investerare. Marknadsvolatilitet, likviditetsstörningar, tekniska fel, regeländringar och makroekonomiska förhållanden kan avsevärt påverka tillgångarnas prestanda.";
$footer_disclaimer_p2 = "$site_name tillhandahåller AI-driven analytisk infrastruktur, prediktiv marknadsintelligens och automatiserade handelsteknologier. Ingenting på denna webbplats utgör finansiell, investeringsmässig, juridisk eller skattemässig rådgivning.";
$footer_disclaimer_p3 = "Tidigare resultat garanterar inte framtida utfall. Användare bör självständigt utvärdera risker innan de engagerar sig i kryptovalutamarknader eller automatiserade handelssystem.";
$footer_rights = "Alla rättigheter förbehållna.";
$footer_lang_label = "Språk";



// HOME FORM
$home_form_fname = "Förnamn";
$home_form_lname = "Efternamn";
$home_form_email = "E-post";
$home_form_submit_access = "Få tillgång";
$home_form_submit_platform = "Begär plattformsåtkomst";

// CONTACT FORM
$contact_form_fname = "Förnamn";
$contact_form_lname = "Efternamn";
$contact_form_email = "E-post";
$contact_form_submit = "Begär tillgång";


// HOME LABELS
$home_label_ai_confidence = "AI-förtroende";
$home_label_update_speed = "Uppdateringshastighet";
$home_label_market_mode = "Marknadsläge";
$home_label_market_condition = "Marknadstillstånd";
$home_label_buyer_activity = "Köparaktivitet";
$home_label_market_activity = "Marknadsaktivitet";
$home_label_risk_level = "Risknivå";
$home_label_updated = "Uppdaterad";
$home_label_live_analysis = "LIVEANALYS";

// JS
$home_js_sec_ago = "sek sedan";
$js_sec_ago = "sek sedan";
$js_close_notification = "Stäng notis";

$js_signal_long_direction = "Sannolikheten för uppåtgående trend ökar";
$js_signal_long_market = "Kontrollerad expansion";
$js_signal_long_pressure_label = "Likviditetstryck";
$js_signal_long_pressure = "Stigande (Bullish)";

$js_signal_short_direction = "Nedåttrycket ökar";
$js_signal_short_market = "Hög instabilitet";
$js_signal_short_pressure_label = "Risktryck";
$js_signal_short_pressure = "Fallande (Bearish)";

$js_signal_watch_direction = "Konsolideringszon upptäckt";
$js_signal_watch_market = "Neutral konsolidering";
$js_signal_watch_pressure_label = "Institutionellt flöde";
$js_signal_watch_pressure = "Stabilt";

$js_hero_long_pair = "BTC/USD Momentum-expansion";
$js_hero_long_regime = "Stigande (Bullish)";
$js_hero_long_feed_1 = "BTC-likviditetsexpansion upptäckt";
$js_hero_long_feed_2 = "Orderflödestrycket blir positivt";
$js_hero_long_feed_3 = "AI-modellen bekräftar en stigande fortsättning";

$js_hero_watch_pair = "ETH/USD Volatilitetskompression";
$js_hero_watch_regime = "Neutral";
$js_hero_watch_feed_1 = "ETH-kompressionszon upptäckt";
$js_hero_watch_feed_2 = "AI väntar på starkare bekräftelse";
$js_hero_watch_feed_3 = "Likviditeten förblir stabil";

$js_hero_short_pair = "SOL/USD Riskexpansion";
$js_hero_short_regime = "Risk av";
$js_hero_short_feed_1 = "SOL nedåttryck upptäckt";
$js_hero_short_feed_2 = "Riskmodellen signalerar volatilitetsexpansion";
$js_hero_short_feed_3 = "AI minskar den stigande exponeringen";

// JS — live user popup actions
$js_live_action_1 = "gick med i $site_name från";
$js_live_action_2 = "begärde plattformsåtkomst från";
$js_live_action_3 = "startade AI-signalövervakning från";
$js_live_action_4 = "aktiverade marknadsanalys från";
$js_live_action_5 = "öppnade den institutionella instrumentpanelen från";
$js_live_action_6 = "anslöt till $site_name från";


// HOME PAGE
$home_hero_label = "AI-kryptoplattform för alla erfarenhetsnivåer";
$home_hero_title = "$site_name Plattform";
$home_hero_desc = "$site_name hjälper nybörjare och erfarna handlare att utforska kryptomarknader med AI-drivna insikter, marknadsövervakning i realtid, riskmedvetna verktyg och guidad plattformssupport.";
$home_hero_feat_1 = "Enkla AI-marknadsinsikter för nya användare";
$home_hero_feat_2 = "Realtidsövervakning av krypto och signaluppdateringar";
$home_hero_feat_3 = "Riskmedvetna verktyg för smartare beslut";
$home_hero_feat_4 = "Avancerad analys för erfarna handlare";
$home_btn_request_access = "Få plattformsåtkomst";
$home_btn_view_signals = "Visa AI-signaler";
$home_trust_data_label = "Marknadsdatapunkter analyserade";
$home_trust_confidence_label = "Genomsnittligt signalförtroende";
$home_trust_monitoring_label = "AI Marknadsövervakning";
$home_terminal_title = "$site_name Guidad AI-marknadsvy";
$home_terminal_insight_label = "Nuvarande AI-marknadsinsikt";
$home_terminal_feed_1 = "BTC-marknadsaktiviteten visar starkare momentum";
$home_terminal_feed_2 = "ETH-rörelsen övervakas för bekräftelse";
$home_terminal_feed_3 = "AI-assistenten belyser en möjlig möjlighetszon";
$home_trust_strip_1 = "AI-insikter för nybörjare och erfarna handlare";
$home_trust_strip_2 = "24/7 Övervakning av kryptovalutamarknaden";
$home_trust_strip_3 = "Risker och möjlighetsanalys i realtid";
$home_trust_strip_4 = "Guidad tillgång till avancerade handelsverktyg";
$home_signals_eyebrow = "$site_name LIVE AI-KÄRNA";
$home_signals_title = "Realtids AI-marknadssignaler för smartare kryptobeslut";
$home_signals_desc = "$site_name övervakar kontinuerligt kryptovalutans marknadsaktivitet, volatilitet, likviditetsförhållanden, sentimenttrender och blockkedjedata för att generera AI-drivna insikter och marknadssignaler i realtid för både nybörjare och erfarna handlare.";
$home_signals_terminal_title = "$site_name AI Signal-motor";
$home_signal_btc_sub = "Positivt momentum upptäckt";
$home_signal_btc_dir = "Sannolikheten för uppåtgående trend ökar";
$home_signal_btc_market = "Positivt momentum";
$home_signal_btc_activity = "Stark";
$home_signal_eth_sub = "Väntar på marknadsbekräftelse";
$home_signal_eth_dir = "Sidledes rörelse upptäckt";
$home_signal_eth_market = "Neutral trend";
$home_signal_eth_activity = "Stabil";
$home_signal_sol_sub = "Ökad marknadsrisk upptäckt";
$home_signal_sol_dir = "Nedåttrycket ökar";
$home_signal_sol_market = "Hög volatilitet";
$home_signal_sol_risk = "Förhöjd";
$home_why_eyebrow = "VARFÖR $site_name?";
$home_why_title = "AI-drivna kryptoverktyg byggda för varje erfarenhetsnivå";
$home_why_desc_1 = "$site_name hjälper användare att bättre förstå kryptovalutamarknaderna genom artificiell intelligens, realtidsövervakning, marknadsinsikter och riskmedvetna verktyg. Oavsett om du utforskar krypto för första gången eller redan har handelserfarenhet, är plattformen designad för att göra marknadsanalyser mer tillgängliga och lättare att förstå.";
$home_why_desc_2 = "$site_name-infrastrukturen utvärderar kontinuerligt marknadsaktivitet, prisrörelser, likviditetsförhållanden, sentimenttrender och blockkedjedata för att identifiera nya möjligheter och förändrade marknadsförhållanden. Nya användare kan dra nytta av guidad plattformssupport, medan erfarna handlare kan utforska avancerade analysverktyg och AI-driven marknadsintelligens.";
$home_flow_1 = "Marknadsövervakning";
$home_flow_2 = "AI-analys";
$home_flow_3 = "Upptäckt av möjligheter";
$home_flow_4 = "Riskutvärdering";
$home_flow_5 = "Praktiska insikter";
$home_reviews_eyebrow = "$site_name COMMUNITY";
$home_reviews_title = "Vad användare säger om $site_name";
$home_reviews_desc = "Från förstagångsanvändare av krypto till erfarna handlare använder människor $site_name för att bättre förstå marknadsförhållandena, utforska AI-drivna insikter och närma sig kryptovalutabeslut med större tydlighet.";
$home_review_1_text = "Innan jag upptäckte $site_name kände jag mig överväldigad av mängden information i kryptorymden. Varje plattform verkade komplicerad och jag var ständigt orolig för att göra misstag. Det jag uppskattar mest med $site_name är hur lättillgängligt allt känns. AI-insikterna hjälpte mig att förstå marknadsförhållandena utan att känna mig vilsen, och plattformen gav mig självförtroendet att börja lära mig i min egen takt. Jag är uppriktigt tacksam över hur mycket enklare upplevelsen blev jämfört med vad jag förväntade mig.";
$home_review_1_tag = "Säker & enkel start";
$home_review_badge = "VERIFIERAD ANVÄNDARE";
$home_review_2_text = "Jag spenderade månader med att titta på kryptoplattformar utan att någonsin känna mig bekväm nog att ta det första steget. $site_name förändrade den upplevelsen helt. Plattformen gjorde marknadsinformationen lättare att förstå, och jag kände aldrig att jag behövde flera års handelserfarenhet bara för att använda verktygen. Det som imponerade mest på mig var balansen mellan enkelhet och kraftfull AI-analys. Det känns som att ha vägledning tillgänglig närhelst du behöver det. Jag är tacksam över att jag hittade en plattform som hjälpte mig att lära mig utan att känna mig intimiderad.";
$home_review_2_tag = "Enklare inlärningsupplevelse";
$home_review_3_text = "Jag har testat många marknadsanalysplattformar, och $site_name sticker ut eftersom det balanserar tillgänglighet med allvarligt analytiskt djup. Nya användare kan förstå plattformen snabbt, medan erfarna handlare fortfarande får användbara AI-drivna marknadssignaler, riskövervakning och krypto-intelligens i realtid. Den balansen är svår att hitta. Plattformen levererar meningsfull marknadskontext utan att överväldiga användarna, vilket är något väldigt få kryptoverktyg lyckas uppnå.";
$home_review_3_tag = "Avancerade verktyg med enkel användbarhet";
$home_review_span_1 = "Ny kryptoanvändare";
$home_review_span_2 = "Förstagångsanvändare av plattformen";
$home_review_span_3 = "Professionell kryptohandlare";
$home_review_1_avatar_alt = "Lars Andersson, $site_name-användare";
$home_review_2_avatar_alt = "Johan Nilsson, $site_name-användare";
$home_review_3_avatar_alt = "Erik Lindström, $site_name-användare";


$home_hero_visual_alt = "AI-driven instrumentpanel för marknadsanalys på $site_name";
$home_signal_visual_alt = "Realtidshandelssignal genererad av $site_name AI";
$home_device_visual_alt = "Kryptoanalys visas på en ansluten enhet via $site_name";
$home_security_visual_alt = "Säkerhetssköld som representerar $site_name kontoskydd";
$home_contact_eyebrow = "KOM IGÅNG MED $site_name";
$home_contact_title = "Utforska plattformen med självförtroende";
$home_contact_section_title = "Utforska plattformen med självförtroende";
$home_contact_desc_1 = "Oavsett om du är helt ny inom kryptovalutamarknader eller redan har handelserfarenhet, ger $site_name tillgång till AI-drivna marknadsinsikter, övervakningsverktyg i realtid och intelligenta analyser utformade för att hjälpa användare att bättre förstå möjligheter med digitala tillgångar.";
$home_contact_desc_2 = "Skicka in dina uppgifter för att lära dig mer om plattformen, utforska tillgängliga funktioner och upptäck hur $site_name kan hjälpa dig att navigera i kryptovalutamarknader genom avancerad teknologi och guidad plattformssupport.";
$home_seo_toggle = "Lär dig mer om $site_name AI-plattform";
$home_seo_h2 = "$site_name AI-plattform för smartare beslut på kryptomarknaden";
$home_seo_p1 = "$site_name är en AI-driven kryptovalutaplattform designad för både nybörjare och erfarna handlare. Plattformen kombinerar artificiell intelligens, marknadsövervakning i realtid och avancerade analysverktyg för att hjälpa användare att bättre förstå marknaderna för digitala tillgångar och identifiera potentiella möjligheter.";
$home_seo_p2 = "Till skillnad från många traditionella handelsplattformar som kräver omfattande marknadskunskap är $site_name byggt för att göra komplex marknadsinformation lättare att förstå. Plattformen analyserar kontinuerligt kryptoaktivitet, prisrörelser, sentimenttrender, likviditetsförhållanden och blockkedjedata, och omvandlar stora mängder information till praktiska insikter.";
$home_seo_p3 = "Oavsett om du utforskar kryptovalutamarknaderna för första gången eller redan har erfarenhet av att handla med digitala tillgångar, tillhandahåller $site_name intelligenta verktyg utformade för att stödja mer välgrundat beslutsfattande samtidigt som du anpassar dig till föränderliga marknadsförhållanden i realtid.";
$home_seo_h3_1 = "AI-marknadsanalys gjord tillgänglig";
$home_seo_h3_1_p1 = "$site_name använder artificiell intelligens för att utvärdera ett brett spektrum av marknadsindikatorer, inklusive handelsaktivitet, volatilitetsmönster, likviditetsförhållanden, blockkedjehändelser och marknadssentiment. Genom att behandla information kontinuerligt hjälper plattformen användare att få en tydligare förståelse för aktuellt marknadsbeteende.";
$home_seo_h3_1_p2 = "AI-modellerna är utformade för att anpassa sig till föränderliga miljöer snarare än att förlita sig på statiska antaganden. Detta gör att plattformen dynamiskt kan svara på förändrade kryptovalutatrender och nya marknadsmöjligheter.";
$home_seo_h3_1_p3 = "Medan plattformen är tillräckligt avancerad för erfarna handlare, är den också strukturerad för att förbli lättillgänglig för nya användare som vill ha tillgång till AI-driven marknadsintelligens utan att behöva djup teknisk expertis.";
$home_seo_h3_2 = "AI-marknadssignaler i realtid";
$home_seo_h3_2_p1 = "$site_name övervakar kontinuerligt kryptovalutamarknaderna och genererar AI-drivna insikter baserat på förändrad marknadsaktivitet. Plattformen utvärderar momentum, volatilitet, likviditetsförhållanden och bredare marknadsbeteende för att ge analytiska signaler i realtid.";
$home_seo_h3_2_p2 = "Bitcoin, Ethereum, Solana, XRP, Avalanche och andra viktiga digitala tillgångar övervakas genom adaptiva analytiska modeller som automatiskt anpassar sig till förändrade marknadsförhållanden.";
$home_seo_h3_2_p3 = "Istället för att förlita sig på en enda indikator eller ett isolerat mått, kombinerar $site_name flera informationskällor till en bredare analytisk ram designad för att ge en mer komplett bild av marknadsförhållandena.";
$home_seo_h3_3 = "Intelligenta riskmedvetenhetsverktyg";
$home_seo_h3_3_p1 = "Kryptovalutamarknaderna kan förändras snabbt. $site_name inkluderar AI-drivna övervakningssystem utformade för att identifiera ovanlig volatilitet, förändrade likviditetsförhållanden och nya marknadsrisker.";
$home_seo_h3_3_p2 = "Plattformen utvärderar kontinuerligt marknadsbeteende och potentiella riskfaktorer, och hjälper användarna att bättre förstå förändrade förhållanden och fatta mer välgrundade beslut.";
$home_seo_h3_3_p3 = "Genom att kombinera flera analyslager strävar $site_name efter att öka marknadsmedvetenheten och hjälpa användare att navigera i perioder med ökad osäkerhet med större självförtroende.";
$home_seo_h3_4 = "Designad för moderna kryptovalutamarknader";
$home_seo_h3_4_p1 = "$site_name kombinerar artificiell intelligens, övervakningsteknik i realtid och avancerade analysverktyg till en enda plattform designad för moderna marknader för digitala tillgångar.";
$home_seo_h3_4_p2 = "Infrastrukturen utvärderar kontinuerligt marknadsaktivitet, blockkedjeutveckling, sentimentförändringar och likviditetstrender för att ge en heltäckande bild av kryptovalutamarknadens beteende.";
$home_seo_h3_4_p3 = "Eftersom marknaderna för digitala tillgångar fortsätter att utvecklas kan AI-drivna verktyg hjälpa användare att bearbeta information mer effektivt och bättre förstå allt mer komplexa marknadsmiljöer. $site_name är utformad för att göra dessa funktioner tillgängliga för ett bredare spektrum av marknadsaktörer.";
$home_seo_side_1_label = "AI-insikter";
$home_seo_side_1_title = "Lättförståelig marknadsanalys";
$home_seo_side_1_desc = "AI-drivna insikter designade för både nya och erfarna användare av kryptovaluta.";
$home_seo_side_2_label = "Marknadsövervakning";
$home_seo_side_2_title = "Kryptospårning i realtid";
$home_seo_side_2_desc = "Kontinuerlig övervakning av större kryptovalutamarknader och förändrade marknadsförhållanden.";
$home_seo_side_3_label = "Riskmedvetenhet";
$home_seo_side_3_title = "Intelligent riskupptäckt";
$home_seo_side_3_desc = "Avancerade övervakningsverktyg utformade för att belysa förändrad marknadsdynamik och volatilitet.";
$home_seo_side_4_label = "AI-teknologi";
$home_seo_side_4_title = "Adaptiva analytiska modeller";
$home_seo_side_4_desc = "Maskininlärningssystem som kontinuerligt utvärderar marknadsdata och nya trender.";
$home_faq_eyebrow = "$site_name KUNSKAPSBAS";
$home_faq_title = "Vanliga frågor om $site_name";
$home_faq_desc = "Läs mer om hur plattformen fungerar, vem den är designad för och hur artificiell intelligens hjälper användare att bättre förstå villkoren på kryptovalutamarknaden.";
$home_faq_q1 = "Behöver jag handelserfarenhet för att använda $site_name?";
$home_faq_a1 = "Nej. $site_name är utformad för användare med olika erfarenhetsnivåer, inklusive personer som är helt nya på kryptovalutamarknaderna. Plattformen använder AI-drivna insikter och marknadsövervakningsverktyg för att göra komplex information lättare att förstå.";
$home_faq_q2 = "Vad gör $site_name egentligen?";
$home_faq_a2 = "$site_name analyserar kontinuerligt kryptovalutamarknaderna med hjälp av artificiell intelligens. Plattformen utvärderar marknadsaktivitet, volatilitet, sentimenttrender, likviditetsförhållanden och blockkedjedata för att generera realtidsinsikter och analytiska signaler.";
$home_faq_q3 = "Kan erfarna handlare använda $site_name?";
$home_faq_a3 = "Ja. Även om plattformen är nybörjarvänlig, erbjuder den också avancerade analysverktyg, AI-driven marknadsintelligens och realtidsövervakningsfunktioner som kan vara värdefulla för erfarna marknadsaktörer.";
$home_faq_q4 = "Vilka kryptovalutor övervakar $site_name?";
$home_faq_a4 = "Plattformen kan analysera stora digitala tillgångar som Bitcoin, Ethereum, Solana, XRP, Avalanche och andra brett handlade kryptovalutor beroende på marknadsförhållanden och tillgängliga datakällor.";
$home_faq_q5 = "Hur genereras AI-signaler?";
$home_faq_a5 = "$site_name utvärderar flera marknadsfaktorer samtidigt, inklusive volatilitet, handelsaktivitet, likviditetsförhållanden, sentimenttrender och historiskt marknadsbeteende. AI-modeller kombinerar dessa indata för att identifiera förändrade marknadsförhållanden och potentiella möjligheter.";
$home_faq_q6 = "Erbjuder $site_name utbildningsvägledning?";
$home_faq_a6 = "Plattformen är utformad för att hjälpa användare att bättre förstå marknadsförhållanden genom AI-driven analys, förenklade insikter och guidad åtkomst till plattformsfunktioner. Nya användare kan utforska kryptovalutamarknader utan att behöva avancerad teknisk kunskap.";
$home_cta_label = "AI-plattform redo";
$home_cta_title = "Börja utforska $site_name idag";
$home_cta_desc = "Upptäck AI-drivna marknadsinsikter, kryptovalutaövervakning i realtid, intelligenta riskmedvetenhetsverktyg och avancerad analys designad för både nybörjare och erfarna handlare.";
$home_ticker_text = "AI Marknadsövervakning aktiv • Realtids kryptoanalys • Bitcoin-momentum förstärks • Ethereum-konsolidering upptäckt • Nya marknadsmöjligheter identifierade • Riskövervakningssystem online • AI-insikter uppdateras kontinuerligt • Designad för nybörjare & erfarna handlare";





// ABOUT PAGE
$about_h1 = "Om $site_name";
$about_p1 = "$site_name är en nästa generations artificiell intelligensinfrastruktur designad för att hjälpa marknadsaktörer att bättre förstå det snabbt utvecklande kryptovalutaekosystemet. Genom att kombinera maskininlärningsteknik, prediktiv analys, system för marknadsintelligens och databehandling i realtid erbjuder $site_name en omfattande miljö för att övervaka kryptoaktivitet och identifiera meningsfulla marknadsutvecklingar.";
$about_p2 = "Kryptovalutamarknaden fungerar dygnet runt över flera börser, jurisdiktioner och likviditetsleverantörer. Varje sekund påverkar tusentals variabler prissättning, volatilitet, likviditetsförhållanden och investerarsentiment. $site_name utvecklades med målet att bearbeta dessa komplexa dataströmmar på ett strukturerat och skalbart sätt.";
$about_h2_vision = "Visionen bakom $site_name";
$about_p_vision_1 = "De finansiella marknaderna har blivit allt mer datadrivna. Traditionella analysmetoder har ofta svårt att hålla jämna steg med mängden information som genereras över moderna digitala tillgångsekosystem. $site_name strävar efter att överbrygga denna klyfta genom att tillämpa avancerad beräkningsintelligens, automatiserade övervakningssystem och adaptiva analysmodeller.";
$about_p_vision_2 = "Den långsiktiga visionen för $site_name är att tillhandahålla transparenta marknadsintelligensverktyg som kan hjälpa användare att bättre förstå kryptovalutans marknadsstruktur, riskförhållanden och nya trender.";
$about_h2_ai = "Artificiell intelligensinfrastruktur";
$about_p_ai_1 = "I kärnan av $site_name finns ett flerlagers ramverk för artificiell intelligens utformat för att bearbeta information från många marknadskällor samtidigt.";
$about_p_ai_2 = "Dessa källor kan inkludera:";
$about_li_1 = "Kryptovalutaprisflöden";
$about_li_2 = "Orderboksaktivitet";
$about_li_3 = "Data för likviditetsrörelser";
$about_li_4 = "Volatilitetsindikatorer";
$about_li_5 = "Blockkedjetransaktionsmått";
$about_li_6 = "Marknadssentimentsignaler";
$about_li_7 = "Makroekonomiska utvecklingar";
$about_li_8 = "Institutionell marknadsaktivitet";
$about_p_ai_3 = "Genom att kontinuerligt utvärdera relationer mellan dessa variabler försöker $site_name identifiera mönster som kan ge värdefull marknadskontext.";
$about_h2_risk = "Filosofi för riskmedvetenhet";
$about_p_risk_1 = "Ansvarsfullt deltagande på kryptovalutamarknader kräver en tydlig förståelse av risker. $site_name betonar riskmedvetenhet som en grundläggande komponent i analys av digitala tillgångar.";
$about_p_risk_2 = "Marknadsvolatilitet, likviditetsfluktuationer, börsspecifika händelser, regelutveckling och bredare makroekonomiska förhållanden kan alla påverka marknadens utfall. Som ett resultat bör användare aldrig uteslutande förlita sig på en enskild informationskälla när de fattar beslut.";
$about_h2_global = "Globala marknader för digitala tillgångar";
$about_p_global_1 = "Kryptovalutamarknaderna verkar i global skala och involverar deltagare från olika regioner, branscher och ekonomiska miljöer. $site_name-infrastrukturen är utformad för att övervaka flera marknadssegment samtidigt, vilket gör att användare kan observera utvecklingen som sker i olika delar av det digitala tillgångsekosystemet.";
$about_p_global_2 = "Detta bredare perspektiv kan hjälpa till att förbättra medvetenheten om förändrade marknadsförhållanden och nya trender.";
$about_h2_why = "Varför användare utforskar $site_name";
$about_why_li_1 = "Avancerad AI-driven marknadsintelligens";
$about_why_li_2 = "Kryptoövervakning i realtid";
$about_why_li_3 = "Analytisk infrastruktur i institutionell stil";
$about_why_li_4 = "Utvärdering av multifaktormarknad";
$about_why_li_5 = "Övervakning av volatilitet och likviditet";
$about_why_li_6 = "Skalbara forskningsverktyg för digitala tillgångar";
$about_why_li_7 = "Riskmedveten analytisk metodik";
$about_h2_forward = "Blickar framåt";
$about_p_forward_1 = "I takt med att marknaderna för digitala tillgångar fortsätter att mogna, förväntas vikten av en avancerad analysinfrastruktur att öka. $site_name förblir fokuserat på att utveckla teknologier som stöder djupare marknadsförståelse, större transparens och mer informerat deltagande inom kryptovalutaekosystemet.";
$about_p_forward_2 = "Genom kontinuerlig innovation och pågående forskning strävar $site_name efter att bidra till en smartare och mer datadriven framtid för analys av digitala tillgångar.";



// CONTACT PAGE
$contact_h1 = "Kontakt $site_name";
$contact_intro_1 = "Kontakta $site_name-teamet för att begära plattformsåtkomst, fråga om AI-driven infrastruktur för kryptohandel eller lära dig mer om vår miljö för marknadsintelligens för digitala tillgångar.";
$contact_intro_2 = "Oavsett om du utforskar automatiserad kryptoanalys, signallinfrastruktur av institutionell klass, volatilitetsövervakning eller marknadsintelligens över flera börser, kan vårt team hjälpa till att styra din begäran till rätt avdelning.";
$contact_h2_help = "Hur vi kan hjälpa";
$contact_li_1 = "Begäran om plattformsåtkomst";
$contact_li_2 = "Allmänna produktfrågor";
$contact_li_3 = "Information om AI-handelsinfrastruktur";
$contact_li_4 = "Förfrågningar om marknadsintelligens för digitala tillgångar";
$contact_li_5 = "Frågor om riskdeklaration och efterlevnad";
$contact_li_6 = "Teknisk assistans eller hjälp med onboarding";
$contact_h2_send = "Skicka en förfrågan";
$contact_p_send = "Fyll i formuläret nedan och en representant för $site_name kan komma att kontakta dig med ytterligare information.";
$contact_h2_info = "Kontaktinformation";
$contact_support_label = "Allmän support:";
$contact_institutional_label = "Institutionella förfrågningar:";
$contact_disclaimer = "Observera att $site_name inte tillhandahåller personlig finansiell, investeringsmässig, skattemässig eller juridisk rådgivning. All information tillhandahålls endast för teknologiska och informationssyften.";

// TERMS PAGE
$terms_h1 = "Allmänna villkor";
$terms_intro_1 = "Dessa Allmänna villkor styr åtkomst till och användning av $site_name:s webbplats, innehåll, plattformsbeskrivningar, formulär, kommunikation och relaterat informationsmaterial.";
$terms_intro_2 = "Genom att besöka denna webbplats bekräftar användarna att de har läst, förstått och samtyckt till dessa Allmänna villkor. Om en användare inte godkänner dessa villkor ska de sluta använda webbplatsen.";
$terms_h2_informational = "Informativt syfte";
$terms_p_info_1 = "$site_name tillhandahåller information om AI-driven infrastruktur för kryptohandel, marknadsintelligens för digitala tillgångar, volatilitetsövervakning, likviditetsanalys och relaterad teknologi.";
$terms_p_info_2 = "Webbplatsens innehåll tillhandahålls endast för allmän information och teknisk presentation. Ingenting på denna webbplats ska tolkas som finansiell rådgivning, investeringsrådgivning, juridisk rådgivning, skatterådgivning eller en garanti för handelsresultat.";
$terms_h2_no_advice = "Ingen ekonomisk rådgivning";
$terms_p_no_advice_1 = "$site_name ger inga personliga rekommendationer angående huruvida användare ska köpa, sälja, inneha, handla, satsa, överföra eller på annat sätt interagera med någon kryptovaluta, token, finansiell produkt eller digital tillgång.";
$terms_p_no_advice_2 = "Användare bör självständigt utvärdera all information och söka råd från kvalificerade yrkesverksamma innan de fattar ekonomiska beslut.";
$terms_h2_user_responsibility = "Användarens ansvar";
$terms_p_user_1 = "Användare ansvarar för sina egna beslut, riskbedömningar, kontoaktiviteter, handelsåtgärder, laglig efterlevnad och användning av tredjepartstjänster.";
$terms_p_user_2 = "Användare bör säkerställa att aktivitet med digitala tillgångar är tillåten i deras jurisdiktion och att de förstår alla tillämpliga risker innan de interagerar med kryptomarknader.";
$terms_h2_ai = "AI och analytiska system";
$terms_p_ai_1 = "$site_name kan beskriva artificiella intelligenssystem, prediktiva modeller, marknadssignaler, automatiserade analyser eller exekveringsrelaterade teknologier.";
$terms_p_ai_2 = "Dessa system kan förlita sig på marknadsdata, statistiska modeller, maskininlärningsprocesser och tredjepartsinformationskällor. Sådana system kan vara felaktiga, försenade, ofullständiga, otillgängliga eller olämpliga för särskilda användarmål.";
$terms_h2_availability = "Ingen garanti för tillgänglighet";
$terms_p_avail_1 = "$site_name garanterar inte oavbruten tillgång till webbplatsen, kontinuerlig plattformstillgänglighet, felfri drift, exakt marknadsinformation eller tillgänglighet av någon specifik funktion.";
$terms_p_avail_2 = "Tjänster, innehåll, sidor, formulär, integrationer eller plattformsbeskrivningar kan ändras, avbrytas eller upphöra när som helst.";
$terms_h2_third_party = "Tredjepartstjänster";
$terms_p_tp_1 = "Webbplatsen kan referera till tredjepartsbörser, likviditetsplatser, analysleverantörer, kommunikationsverktyg, hostintjänster eller leverantörer av teknisk infrastruktur.";
$terms_p_tp_2 = "$site_name kontrollerar inte tredjepartsplattformar och ansvarar inte för deras tillgänglighet, avgifter, policyer, kontorestriktioner, efterlevnadsförfaranden, tekniska fel eller användarförluster.";
$terms_h2_prohibited = "Förbjuden användning";
$terms_p_prohibited = "Användare får inte använda denna webbplats eller någon relaterad teknik för olagliga, kränkande, bedrägliga, manipulativa eller skadliga syften.";
$terms_li_1 = "Försöka få obehörig åtkomst";
$terms_li_2 = "Lämna falsk eller vilseledande information";
$terms_li_3 = "Använda webbplatsen för olaglig finansiell aktivitet";
$terms_li_4 = "Störa webbplatsens säkerhet eller funktionalitet";
$terms_li_5 = "Kopiera eller missbruka webbplatsinnehåll utan tillstånd";
$terms_li_6 = "Försöka kringgå efterlevnad eller tekniska kontroller";
$terms_h2_ip = "Immateriella rättigheter";
$terms_p_ip_1 = "Webbplatsens design, text, varumärke, gränssnittselement, grafik, struktur och relaterat material ägs av eller licensieras till $site_name om inte annat anges.";
$terms_p_ip_2 = "Användare får inte reproducera, distribuera, modifiera eller kommersiellt utnyttja webbplatsmaterial utan lämpligt tillstånd.";
$terms_h2_liability = "Ansvarsbegränsning";
$terms_p_liab_1 = "I den utsträckning som tillåts av tillämplig lag ska $site_name inte hållas ansvarigt för förluster som uppstår till följd av handel med digitala tillgångar, marknadsvolatilitet, tekniska problem, fel på tredjepartsplattformar, felaktig data, användarbeslut eller tillit till webbplatsinnehåll.";
$terms_p_liab_2 = "Användare besöker och använder denna webbplats på egen risk.";
$terms_h2_changes = "Ändringar av dessa villkor";
$terms_p_changes_1 = "$site_name kan när som helst uppdatera dessa Allmänna villkor. Uppdaterade villkor kan komma att publiceras på den här sidan.";
$terms_p_changes_2 = "Fortsatt användning av webbplatsen efter ändringar innebär att användarna erkänner och accepterar de uppdaterade villkoren.";

// PRIVACY PAGE
$privacy_h1 = "Integritetspolicy";
$privacy_intro_1 = "$site_name respekterar användarnas integritet och har åtagit sig att hantera personlig information ansvarsfullt, transparent och säkert.";
$privacy_intro_2 = "Denna integritetspolicy förklarar vilken information som kan samlas in när användare besöker den här webbplatsen, skickar in kontaktformulär, begär åtkomst eller interagerar med $site_name innehåll och plattformsrelaterad kommunikation.";
$privacy_h2_collect = "Information vi kan samla in";
$privacy_p_collect_1 = "$site_name kan samla in information som frivilligt lämnats av användare via webbplatsformulär eller kommunikationskanaler.";
$privacy_li_fname = "Förnamn";
$privacy_li_lname = "Efternamn";
$privacy_li_email = "E-postadress";
$privacy_li_phone = "Telefonnummer";
$privacy_li_inquiry = "Inskickade förfrågningsdetaljer";
$privacy_li_technical = "Grundläggande teknisk användningsdata för webbplatsen";
$privacy_h2_use = "Hur vi använder information";
$privacy_p_use_1 = "Information kan användas för att svara på användarförfrågningar, tillhandahålla information om plattformsåtkomst, förbättra webbplatsens funktionalitet, upprätthålla säkerhet och kommunicera relevanta uppdateringar om $site_name.";
$privacy_p_use_2 = "Vi kan också använda aggregerad eller icke-identifierande data för att analysera webbplatsens prestanda, förbättra innehållsstrukturen och bättre förstå hur besökare interagerar med våra sidor.";
$privacy_h2_comm = "Kommunikationssyften";
$privacy_p_comm_1 = "Om en användare skickar in kontaktinformation kan $site_name använda den informationen för att svara på förfrågan, tillhandahålla onboarding-information, förtydliga förfrågningar om plattformsåtkomst eller dela relevant tjänstinformation.";
$privacy_p_comm_2 = "Användare kan begära att kommunikationen avbryts i tillämpliga fall.";
$privacy_h2_cookies = "Cookies och teknisk data";
$privacy_p_cookies_1 = "Denna webbplats kan använda cookies, analysverktyg och liknande teknologier för att förbättra surfupplevelsen, övervaka prestanda och stödja webbplatsens säkerhet.";
$privacy_p_cookies_2 = "Teknisk data kan inkludera enhetstyp, webbläsartyp, operativsystem, sidinteraktioner, hänvisningsinformation och allmän användningsstatistik.";
$privacy_h2_protection = "Dataskyddsåtgärder";
$privacy_p_prot_1 = "$site_name tillämpar rimliga administrativa, tekniska och organisatoriska skyddsåtgärder för att skydda inlämnad information från obehörig åtkomst, missbruk, förlust eller avslöjande.";
$privacy_p_prot_2 = "Inget onlinesystem kan dock garantera absolut säkerhet. Användare bör undvika att skicka in känslig finansiell information, privata plånboksnycklar, lösenord, börsautentiseringsuppgifter eller konfidentiella kontouppgifter via offentliga webbplatsformulär.";
$privacy_h2_third = "Tredjepartsleverantörer";
$privacy_p_third_1 = "$site_name kan använda tredjepartsleverantörer för hosting, analys, kommunikation, säkerhet, e-postleverans, CRM-bearbetning eller teknisk infrastruktur.";
$privacy_p_third_2 = "Dessa leverantörer får behandla begränsad information endast när det är nödvändigt för att stödja webbplatsens funktion och relaterade tjänster.";
$privacy_google_choices = 'Du kan hantera hur Google använder information från dina besök via <a href="http://www.google.com/settings/ads" target="_blank" rel="noopener">Googles annonsinställningar</a>, välja bort intressebaserad annonsering med <a href="https://tools.google.com/dlpage/gaoptout" target="_blank" rel="noopener">Googles webbläsartillägg för bortval</a>, eller läsa <a href="https://www.google.com/intl/sv/policies/privacy/" target="_blank" rel="noopener">Googles integritetspolicy</a> för mer information.';
$privacy_h2_sale = "Ingen försäljning av personlig information";
$privacy_p_sale_1 = "$site_name har inte för avsikt att sälja personlig information som skickats via denna webbplats.";
$privacy_p_sale_2 = "Information kan delas endast när det är nödvändigt för operativa ändamål, lagstiftning, användarkommunikation, bedrägeriförebyggande eller tjänstrelaterad bearbetning.";
$privacy_h2_retention = "Datalagring";
$privacy_p_retention = "Personlig information kan bevaras så länge det är nödvändigt för att svara på förfrågningar, underhålla affärsregister, uppfylla juridiska skyldigheter, förbättra plattformskommunikation eller stödja säkerhet och bedrägeriförebyggande.";
$privacy_h2_rights = "Användarrättigheter";
$privacy_p_rights = "Beroende på tillämplig lagstiftning kan användare ha rättigheter relaterade till åtkomst, korrigering, radering, invändning, begränsning eller portabilitet av personlig information.";
$privacy_h2_intl = "Internationell användning";
$privacy_p_intl_1 = "$site_name kan nås av användare från olika jurisdiktioner. Integritetsregler kan variera beroende på plats.";
$privacy_p_intl_2 = "Genom att använda denna webbplats bekräftar användarna att information kan behandlas i enlighet med denna integritetspolicy och tillämpliga driftskrav.";
$privacy_h2_policy_updates = "Policyuppdateringar";
$privacy_p_updates_1 = "$site_name kan uppdatera denna integritetspolicy regelbundet för att återspegla ändringar i lagar, teknik, interna procedurer eller webbplatsens funktionalitet.";
$privacy_p_updates_2 = "Fortsatt användning av webbplatsen efter uppdateringar innebär att användarna godkänner den reviderade integritetspolicyn.";

// COOKIES PAGE
$cookies_h1 = "Cookiepolicy";
$cookies_intro_1 = "Denna cookiepolicy förklarar hur $site_name använder cookies, analystekniker och liknande spårningsverktyg när användare öppnar eller interagerar med den här webbplatsen.";
$cookies_intro_2 = "Cookies hjälper till att förbättra webbplatsens funktionalitet, förbättra användarupplevelsen, analysera prestanda och stödja säkerhetsrelaterade processer.";
$cookies_intro_3 = "Genom att fortsätta använda den här webbplatsen bekräftar användarna att vissa cookies och liknande teknik kan användas i enlighet med denna policy.";
$cookies_h2_what = "Vad är cookies?";
$cookies_p_what_1 = "Cookies är små textfiler som lagras på en användares enhet när de besöker en webbplats.";
$cookies_p_what_2 = "Dessa filer kan innehålla information som hjälper webbplatser att känna igen återkommande besökare, komma ihåg preferenser, förbättra navigeringen och mäta webbplatsens prestanda.";
$cookies_h2_why = "Varför vi använder cookies";
$cookies_p_why_1 = "$site_name kan använda cookies och liknande teknologier för flera ändamål.";
$cookies_li_1 = "Upprätthålla webbplatsens funktionalitet";
$cookies_li_2 = "Förbättra användarupplevelsen";
$cookies_li_3 = "Komma ihåg användarpreferenser";
$cookies_li_4 = "Förstå besökarnas beteende";
$cookies_li_5 = "Mäta webbplatsens prestanda";
$cookies_li_6 = "Identifiera tekniska problem";
$cookies_li_7 = "Stödja webbplatsens säkerhet";
$cookies_li_8 = "Förhindra missbruk och otillåten användning";
$cookies_h2_essential = "Nödvändiga cookies";
$cookies_p_ess_1 = "Vissa cookies är nödvändiga för att webbplatsen ska fungera korrekt.";
$cookies_p_ess_2 = "Dessa cookies hjälper till att upprätthålla säkerhet, navigeringsfunktioner, sessionshantering och andra grundläggande webbplatsfunktioner.";
$cookies_p_ess_3 = "Utan nödvändiga cookies kan delar av webbplatsen eventuellt inte fungera korrekt.";
$cookies_h2_analytics = "Analyscookies";
$cookies_p_an_1 = "Analyscookies hjälper oss att förstå hur besökare interagerar med webbplatsens innehåll.";
$cookies_p_an_2 = "Dessa tekniker kan samla in information om sidbesök, navigeringsmönster, enhetstyper, webbläsarkonfigurationer och allmänna mätvärden för webbplatsanvändning.";
$cookies_p_an_3 = "Analysinformation aggregeras vanligtvis och används för att förbättra webbplatsens prestanda och användarupplevelse.";
$cookies_h2_functional = "Funktionella cookies";
$cookies_p_fun_1 = "Funktionella cookies kan användas för att komma ihåg inställningar och preferenser som valts av användare.";
$cookies_p_fun_2 = "Exempel kan vara språkinställningar, gränssnittsinställningar, visningsalternativ eller andra anpassningsfunktioner.";
$cookies_h2_third = "Tredjepartsteknologi";
$cookies_p_third_1 = "$site_name kan använda tredjepartsleverantörer, analysplattformar, annonsteknik eller verktyg för prestandaövervakning.";
$cookies_p_third_2 = "Dessa tredje parter kan placera sina egna cookies eller spårningstekniker med förbehåll för deras individuella integritetspolicyer.";
$cookies_p_third_3 = "$site_name kontrollerar inte tredjeparts cookiepraxis och rekommenderar att du granskar sekretessdokumentationen för externa leverantörer där det är tillämpligt.";
$cookies_h2_manage = "Hantera cookies";
$cookies_p_manage_1 = "De flesta moderna webbläsare tillåter användare att hantera, begränssa eller radera cookies via webbläsarinställningar.";
$cookies_p_manage_2 = "Användare kan välja att inaktivera cookies helt, även om vissa webbplatsfunktioner eventuellt inte fungerar som avsett efter att ha gjort det.";
$cookies_p_manage_3 = "Webbläsarinställningar ger vanligtvis alternativ för att:";
$cookies_li_manage_1 = "Blockera alla cookies";
$cookies_li_manage_2 = "Radera befintliga cookies";
$cookies_li_manage_3 = "Få cookiemeddelanden";
$cookies_li_manage_4 = "Begränsa specifika cookiekategorier";
$cookies_h2_data = "Dataskydd";
$cookies_p_data = "Cookierelaterad information kan behandlas i enlighet med vår integritetspolicy och gällande dataskyddslagar.";
$cookies_h2_policy_updates = "Policyuppdateringar";
$cookies_p_updates_1 = "$site_name kan uppdatera denna cookiepolicy regelbundet för att återspegla tekniska förändringar, lagkrav eller operativa förbättringar.";
$cookies_p_updates_2 = "Fortsatt användning av webbplatsen efter uppdateringar utgör bekräftelse på den reviderade policyn.";
// AML PAGE
$aml_h1 = "AML-policy (Policy mot penningtvätt)";
$aml_intro_1 = "$site_name erkänner vikten av medvetenhet om penningtvätt, finansiell integritet och ansvarsfullt deltagande på marknaderna för digitala tillgångar.";
$aml_intro_2 = "Denna AML-policy förklarar de allmänna principer som $site_name tillämpar för att motverka olaglig användning av kryptorelaterad teknik, misstänkt finansiell aktivitet, bedrägeri, undandragande av sanktioner, finansiering av terrorism och annat förbjudet beteende.";
$aml_h2_purpose = "Syftet med denna policy";
$aml_p_purpose_1 = "Syftet med denna policy är att etablera ett ansvarsfullt ramverk för hur $site_name hanterar medvetenhet om penningtvätt inom det digitala tillgångsekosystemet.";
$aml_p_purpose_2 = "Kryptovalutamarknader kan involvera gränsöverskridande aktivitet, decentraliserad infrastruktur, tredjepartsbörser och externa plånbokssystem. På grund av detta bör användare förstå att efterlevnadsskyldigheter kan variera beroende på deras jurisdiktion, kontotyp, utbytesleverantör och lokala regleringsmiljö.";
$aml_h2_responsible = "Ansvarsfull användning av teknik för digitala tillgångar";
$aml_p_resp_1 = "Användare förväntas interagera med $site_name och alla relaterade tjänster för digitala tillgångar på ett ansvarsfullt, lagligt och i enlighet med tillämpliga regler.";
$aml_p_resp_2 = "$site_name stödjer eller uppmuntrar inte användningen av kryptomarknader, handelssystem, automatiserad teknik eller analysverktyg för olagliga syften.";
$aml_li_1 = "Penningtvätt";
$aml_li_2 = "Finansiering av terrorism";
$aml_li_3 = "Bedrägeri eller ekonomiskt bedrägeri";
$aml_li_4 = "Undandragande av sanktioner";
$aml_li_5 = "Marknadsmanipulation";
$aml_li_6 = "Användning av stulna medel eller komprometterade konton";
$aml_li_7 = "Varje aktivitet som är förbjuden enligt tillämplig lag";
$aml_h2_exchange = "Efterlevnad för tredjepartsbörser";
$aml_p_ex_1 = "$site_name kan referera till, interagera med eller tillhandahålla analytisk infrastruktur relaterad till tredjeparts digitala tillgångsplatser eller likviditetsmiljöer.";
$aml_p_ex_2 = "Tredjepartsbörser, förvaringsinstitut, betalningsbehandlare och tjänsteleverantörer kan tillämpa sina egna efterlevnadsrutiner, inklusive identitetsverifiering, transaktionsövervakning, sanktionskontroll, kontobegränsningar, kontroller av medlens ursprung eller ytterligare verifieringskrav.";
$aml_h2_user_responsibility = "Användarens ansvar";
$aml_p_user_1 = "Användarna är ansvariga för att se till att deras aktivitet är laglig på deras plats och överensstämmer med eventuella skyldigheter som åläggs av relevanta tillsynsmyndigheter, börser, finansiella institutioner eller tjänsteleverantörer.";
$aml_p_user_2 = "Användare bör inte försöka dölja ägande, dölja transaktionsursprung, tillhandahålla falsk information, kringgå verifieringsprocesser eller använda infrastruktur för digitala tillgångar på ett sätt som kan anses misstänkt eller olagligt.";
$aml_h2_suspicious = "Misstänkt aktivitet";
$aml_p_suspicious = "Misstänkt aktivitet kan inkludera beteende som verkar oförenligt med normal användning, försök att missbruka handelssystem, upprepad inlämning av vilseledande information, engagemang i begränsade jurisdiktioner eller aktivitet kopplad till bedrägeri, olagliga medel eller förbjudna tjänster.";
$aml_h2_evasion = "Inget undandragande eller kringgående";
$aml_p_evasion = "Användare får inte försöka kringgå efterlevnadskontroller, tekniska begränsningar, system för identitetsverifiering, geografiska begränsningar eller processer för riskövervakning.";
$aml_h2_policy_updates = "Policyuppdateringar";
$aml_p_updates_1 = "$site_name kan komma att uppdatera denna AML-policy från tid till annan för att återspegla förändringar i regulatoriska förväntningar, marknadsstandarder, interna procedurer eller branschpraxis för digitala tillgångar.";
$aml_p_updates_2 = "Fortsatt användning av webbplatsen efter uppdateringar innebär att användarna erkänner den reviderade policyn.";
// RISK PAGE
$risk_h1 = "Riskavslöjande";
$risk_intro_1 = "Handel med kryptovalutor och deltagande i digitala tillgångar innebär en betydande risk. Priserna kan röra sig snabbt, likviditeten kan förändras oväntat och marknadsförhållandena kan bli mycket instabila på kort tid.";
$risk_intro_2 = "Denna riskdeklaration förklarar viktiga överväganden som användare bör granska innan de interagerar med digitala tillgångsmarknader, automatiserad handelsteknik, AI-genererade marknadssignaler eller kryptorelaterad analysinfrastruktur.";
$risk_h2_no_guarantee = "Inga garanterade resultat";
$risk_p_no_guarantee_1 = "$site_name garanterar inte vinster, investeringsavkastning, framgångsrik handel, signallägesnoggrannhet, oavbruten åtkomst eller positiva finansiella resultat.";
$risk_p_no_guarantee_2 = "Eventuella exempel, statistik, gränssnittselement, prestandamått, signalindikatorer eller marknadssimuleringar som visas på denna webbplats tillhandahålls endast i informations- och illustrativa syften.";
$risk_h2_volatility = "Volatilitet på kryptovalutamarknaden";
$risk_p_vol_1 = "Marknader för digitala tillgångar är mycket volatila. Priserna kan påverkas av likviditetsbrist, makroekonomiska nyheter, regulatorisk utveckling, avbrott på börser, blockkedjehändelser, investerares sentiment, hävstångsaktivitet eller marknadsmanipulation.";
$risk_p_vol_2 = "Volatilitet kan leda till snabba förluster, plötsliga prisgap, glidning, likvidationshändelser eller oförmåga att genomföra transaktioner till förväntade priser.";
$risk_h2_ai = "AI-signalbegränsningar";
$risk_p_ai_1 = "Artificiella intelligenssystem kan analysera stora mängder marknadsdata, men de kan inte eliminera osäkerheten.";
$risk_p_ai_2 = "AI-drivna indikatorer, handelssignaler, marknadsklassificeringar och prediktiva modeller kan vara ofullständiga, försenade, felaktiga eller olämpliga för en användares personliga ekonomiska situation.";
$risk_p_ai_3 = "Användare bör inte enbart förlita sig på någon AI-signal när de fattar handels-, investerings- eller ekonomiska beslut.";
$risk_h2_tech = "Teknik- och utföranderisk";
$risk_p_tech_1 = "Handelsteknik kan påverkas av problem med internetanslutning, serveravbrott, latens, programvarufel, API-fel, stilleståndstid för utbyte, felaktiga dataflöden eller tredjepartsinfrastrukturbegränsningar.";
$risk_p_tech_2 = "$site_name garanterar inte oavbruten tillgång till data, signaler, plattformsfunktioner, tredjepartssystem eller exekveringsmiljöer.";
$risk_h2_liquidity = "Likviditets- och växlingsrisk";
$risk_p_liq_1 = "Likviditet kan variera avsevärt mellan börser och digitala tillgångar. Vissa marknader kan uppleva lågt orderboksdjup, breda spreadar, försenad exekvering eller kraftiga prisrörelser under perioder av stress.";
$risk_p_liq_2 = "Tredjepartsbörser kan införa avgifter, begränsningar, kontogranskningar, försenade uttag, handelsstopp eller geografiska begränsningar.";
$risk_h2_regulatory = "Regleringsrisk";
$risk_p_reg_1 = "Regler för digitala tillgångar kan ändras snabbt och kan skilja sig åt mellan länder, regioner och jurisdiktioner.";
$risk_p_reg_2 = "Regleringsförändringar kan påverka marknadstillträde, tillgångstillgänglighet, börsverksamhet, rapporteringsskyldigheter, beskattning, handelsrestriktioner eller plattformsfunktion.";
$risk_h2_user_responsibility = "Användarens ansvar";
$risk_p_user_1 = "Användarna är ensamma ansvariga för att utvärdera risker, förstå tillämpliga lagar, granska sina ekonomiska omständigheter och fatta oberoende beslut.";
$risk_p_user_2 = "$site_name tillhandahåller ingen personlig finansiell, investeringsmässig, juridisk, redovisningsmässig eller skattemässig rådgivning.";
$risk_h2_advice = "Sök professionell rådgivning";
$risk_p_advice_1 = "Användare bör rådfråga kvalificerad personal innan de fattar betydande finansiella beslut som rör kryptovaluta, handelssystem, automatiserad teknik eller investeringar i digitala tillgångar.";
$risk_p_advice_2 = "Genom att använda denna webbplats bekräftar användarna att de förstår riskerna förknippade med digitala tillgångsmarknader och accepterar ansvaret för sina egna beslut.";
// EXCHANGES PAGE
$exchanges_h1 = "Stödda börser";
$exchanges_intro_1 = "$site_name är utformad kring en multimarknadsintelligensstrategi som utvärderar digital tillgångsaktivitet över ett brett spektrum av kryptohandelsmiljöer.";
$exchanges_intro_2 = "Moderna kryptomarknader verkar genom ett flertal börser, likviditetsleverantörer, derivatplattformar och handelsekosystem. Att förstå aktivitet i dessa miljöer är avgörande för att bygga en heltäckande marknadsintelligens.";
$exchanges_h2_philosophy = "Filosofi för marknadstäckning";
$exchanges_p_phil_1 = "I stället för att förlita sig på en enda plats, är $site_name byggd kring konceptet marknadsövergripande analys.";
$exchanges_p_phil_2 = "Kryptovalutapriser, likviditetsförhållanden, volatilitetsbeteende och institutionell aktivitet skiljer sig ofta mellan börser. Genom att observera bredare marknadsförhållanden kan analysmodeller få ytterligare kontext angående framväxande trender och potentiella anomalier.";
$exchanges_h2_spot = "Spotmarknadsövervakning";
$exchanges_p_spot_1 = "Spotbörser utgör en betydande del av den globala aktiviteten för digitala tillgångar.";
$exchanges_p_spot_2 = "System för marknadsintelligens kan utvärdera spotmarknadsdata, inklusive:";
$exchanges_li_spot_1 = "Prisaktivitet";
$exchanges_li_spot_2 = "Likviditetsdjup";
$exchanges_li_spot_3 = "Orderboksstruktur";
$exchanges_li_spot_4 = "Handelsvolym";
$exchanges_li_spot_5 = "Beteende hos köp/sälj-spread";
$exchanges_li_spot_6 = "Tillstånd av obalans på marknaden";
$exchanges_h2_deriv = "Derivatmarknader";
$exchanges_p_deriv_1 = "Kryptovalutaderivat spelar en allt viktigare roll inom det bredare digitala tillgångsekosystemet.";
$exchanges_p_deriv_2 = "Terminer, eviga kontrakt, optioner och hävstångshandel kan påverka marknadssentiment, volatilitetsförhållanden och riktningsmomentum.";
$exchanges_p_deriv_3 = "Den analytiska infrastrukturen kan utvärdera derivatrelaterad information vid bedömning av bredare marknadsförhållanden.";
$exchanges_h2_liquidity = "Likviditetsanalys";
$exchanges_p_liq_1 = "Likviditet är fortfarande en av de viktigaste faktorerna som påverkar marknadens stabilitet och exekveringskvalitet.";
$exchanges_p_liq_2 = "$site_name kan analysera likviditetsförhållanden på flera handelsplatser för att identifiera:";
$exchanges_li_liq_1 = "Likviditetskoncentration";
$exchanges_li_liq_2 = "Plötsliga likviditetsuttag";
$exchanges_li_liq_3 = "Orderbokstryck";
$exchanges_li_liq_4 = "Händelser av marknadsobalans";
$exchanges_li_liq_5 = "Onormalt handelsbeteende";
$exchanges_h2_availability = "Börstillgänglighet";
$exchanges_p_avail_1 = "Börsens tillgänglighet kan variera beroende på geografisk plats, jurisdiktion, kontobehörighet, regulatoriska krav och tekniska begränsningar.";
$exchanges_p_avail_2 = "Vissa börser eller tjänster kanske inte är tillgängliga för alla användare och kan ålägga sina egna restriktioner, verifieringskrav, avgifter och driftsprinciper.";
$exchanges_h2_third = "Tredjepartsplattformar";
$exchanges_p_third_1 = "Alla hänvisningar till börser, likviditetsplatser, mäklare, förvaringsinstitut eller marknadsleverantörer görs uteslutande i informationssyfte.";
$exchanges_p_third_2 = "$site_name äger, driver, kontrollerar eller garanterar inte tjänsterna från tredjepartsbörser.";
$exchanges_p_third_3 = "Användare är fortfarande ansvariga för att utvärdera alla börser, handelsplatser eller tjänster för digitala tillgångar före användning.";
$exchanges_h2_monitoring = "Kontinuerlig marknadsövervakning";
$exchanges_p_mon_1 = "Kryptovalutamarknader fungerar kontinuerligt, ofta 24 timmar om dygnet, sju dagar i veckan.";
$exchanges_p_mon_2 = "När marknadsstrukturen utvecklas uppstår nya börser, likviditet migrerar och handelsaktiviteten förändras.";
$exchanges_p_mon_3 = "$site_name strävar kontinuerligt efter att upprätthålla medvetenhet om förändrade marknadsförhållanden genom bred analytisk täckning av det digitala tillgångsekosystemet.";

// ==========================================
// RISK WARNING PAGE
// ==========================================
$page_title_risk_warning = "Riskvarning | $site_name";
$page_description_risk_warning = "Förstå riskerna med automatiserad kryptohandel med $site_name, inklusive marknadsvolatilitet, utföranderisk och regelmässiga överväganden.";
$risk_warning_breadcrumb_name = "Riskvarning";
$risk_warning_title = "Riskvarning";
$risk_warning_intro = "Att förstå riskerna är det första steget mot säker handel.";

$risk_warning_ai_heading = "Hur vårt AI-system hjälper till att hantera risker:";
$risk_warning_ai_1 = "<strong>Algoritmisk effektivitet & känslolös handel:</strong> Avancerade algoritmer analyserar marknadssignaler för att utföra affärer objektivt vid optimala tidpunkter.";
$risk_warning_ai_2 = "<strong>Datadrivna strategier:</strong> Strategier baseras på verifierade marknadsmönster och realtidsanalyser snarare än gissningar.";
$risk_warning_ai_3 = "<strong>Flexibla inställningar & full kontroll:</strong> Justera dina riskparametrar när som helst. Spåra alla saldon och affärer transparent på din instrumentpanel utan dolda avgifter och begränsningsfria uttag.";

$risk_warning_disclaimer = "<strong>Ansvarsfriskrivning:</strong> Handel medför alltid en risk. Automatiserade system (inklusive AI) garanterar inte vinst, kan misslyckas på grund av mjukvarufel eller oväntade marknadshändelser och kräver användarövervakning. Tidigare resultat är ingen indikation på framtida resultat. Denna plattform tjänar enbart informations- och marknadsföringssyften och tillhandahåller inte ekonomisk rådgivning.";

$risk_warning_s1_heading = "1. Allmänna & kryptovalutamarknadsrisker";
$risk_warning_s1_intro = "Kryptovalutor är mycket volatila, spekulativa tillgångar som fungerar 24/7 med minimal tillsyn i de flesta jurisdiktioner.";
$risk_warning_s1_1 = "Värden kan fluktuera dramatiskt under korta perioder, vilket kan leda till en total förlust av investerat kapital.";
$risk_warning_s1_2 = "Marknadsvärden kan påverkas kraftigt av regulatoriska uppdateringar, teknisk utveckling, säkerhetsöverträdelser eller bredare makroekonomiska händelser.";
$risk_warning_s1_3 = "Vissa tillgångar kan helt förlora sitt värde. Investera endast medel som du har råd att förlora.";

$risk_warning_s2_heading = "2. Exekverings-, likviditets- & hävstångsrisker";
$risk_warning_s2_1 = "<strong>Marknadsvolatilitet & likviditet:</strong> Extrema prisrörelser (10–20%+ dagligen) eller låg likviditet (särskilt i mindre mynt) kan leda till förseningar, plattformsavbrott och kraftiga exekveringsglidningar. Stop-loss-order kan inte garantera förlustgränser under extrema förhållanden.";
$risk_warning_s2_2 = "<strong>Hävstångs- & marginalrisker:</strong> Produkter med hävstångsförstärkning förstärker både vinster och förluster, vilket innebär att du kan förlora mer än din ursprungliga insättning. Ungefär 70–80 % av detaljhandelsinvesterarkonton förlorar pengar vid handel med hävstångsprodukter.";

$risk_warning_s3_heading = "3. Tekniska, cybersäkerhets- & tredjepartsrisker";
$risk_warning_s3_1 = "<strong>Tekniska faktorer:</strong> Onlinehandel innebär i sig risker för internetavbrott, hårdvaru-/mjukvarufel och otillgänglighet av tjänster.";
$risk_warning_s3_2 = "<strong>Cybersäkerhet:</strong> Kryptovalutakonton är frekventa mål för nätfiske, skadlig kod och hackningar. Transaktioner är oåterkalleliga; att kompromettera dina referenser kan resultera i permanent förlust.";
$risk_warning_s3_3 = "<strong>Tredjepartsplattformar:</strong> Denna webbplats kan ansluta användare till tredjepartsplattformar. Vi kontrollerar, stödjer eller garanterar inte deras säkerhet, verksamhet eller solvens. Genomför alltid din egen due diligence innan du sätter in pengar på externa plattformar.";

$risk_warning_s4_heading = "4. Lagstadgade, skattemässiga & slutgiltiga bestämmelser";
$risk_warning_s4_1 = "<strong>Lagstiftningsefterlevnad & skatter:</strong> Regulatoriska ramverk varierar kraftigt och ändras snabbt. Användare är ensamma ansvariga för att se till att deras handelsaktivitet följer lokala lagar och för att uppfylla sina egna skatteplikter.";
$risk_warning_s4_2 = "<strong>Inga vinstgarantier:</strong> Det finns ingen \"säker\" eller riskfri kryptohandel. Alla avkastningssiffror eller prestandaexempel är rent hypotetiska.";
$risk_warning_s4_3 = "<strong>Lämplighet:</strong> Om du inte till fullo förstår riskerna, förlitar dig på viktiga medel eller handlar med lånade pengar, är kryptohandel inte lämplig för dig. Rådfråga en oberoende licensierad finansiell rådgivare om du är osäker.";

$risk_warning_contact = "<strong>Kontakt:</strong> För alla frågor angående detta uttalande eller för att skicka in en förfrågan, vänligen kontakta vår officiella kundtjänst via kontaktformuläret på vår webbplats.";
$footer_risk_warning = "Riskvarning";

$lang_loaded = true;

?>

