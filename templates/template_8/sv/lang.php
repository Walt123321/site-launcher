<?php
require __DIR__ . '/../lang.php';
$site_lang = 'sv-SE';
$form_language = 'sv'; // matches this page's own language, not the offer's global default

// ============================================================
// SV TRANSLATION OVERRIDES
// Identity/config vars ($site_name, $site_slug, $site_domain, $site_url, $app_price, $app_currency, $site_lang, $country_name, $country_flag_code, $privacy_last_update, $rating_value, $rating_count, $review_count, $form_country, $form_language, $form_phone_country, $form_only_countries, $review_1_author, $review_2_author, $review_3_author, $review_4_author, $quiz_consultant_name) are
// intentionally NOT overridden -- they stay exactly as inherited from the
// root lang.php.
// ============================================================

// Brand / Platform Variables

// Geo-language stats bar fallback content (used by the language-folder pages'
// own "stats" section; the fr/de/it/nl folders override these with native
// translations, the other 19 folders inherit this English fallback)
$stat_1_value = "4M+";
$stat_1_label = "Registrerade Användare";
$stat_2_value = "98+";
$stat_2_label = "Länder som Stöds";
$stat_3_value = "65+";
$stat_3_label = "Tillgängliga Valutor";
$stat_4_value = "24/7";
$stat_4_label = "Transaktionsåtkomst";
$stat_5_value = "256-bitars";
$stat_5_label = "Krypteringsstandard";
$stat_6_value = "$500M+";
$stat_6_label = "Totala Kundinsättningar";

// Keitaro Form Integration Variables (defaults -- overwritten per-launch by
// generate_lang_files(); must stay valid on their own since nothing else in
// this file replaces them for a page that's ever served un-generated)

// 4 Verified Reviews (TZ Item 8)
$review_1_role = "Frankrike";
$review_1_text = "Jag började med 500 € bara för att se hur plattformen fungerade. Efter cirka tre veckor hade mitt saldo vuxit till cirka 1120 €. Gränssnittet är lätt att använda, och marknadsinsikterna hjälpte mig att fatta bättre beslut.";
$review_1_badge = "Rapporterad Avkastning +18,4%";

$review_2_role = "Tyskland";
$review_2_text = "Jag har provat några handelsplattformar tidigare, men den här har varit min favorit hittills. Den är lätt att navigera i, verktygen är verkligen användbara, och jag har haft en mycket positiv upplevelse totalt sett.";
$review_2_badge = "Rapporterad Avkastning +19,1%";

$review_3_role = "Italien";
$review_3_text = "Det som imponerade mig mest var hur intuitivt allt känns. Registreringen gick snabbt, instrumentpanelen är väl organiserad, och plattformen har gjort handel mycket bekvämare för mig.";
$review_3_badge = "Rapporterad Avkastning +16,8%";

$review_4_role = "Nederländerna";
$review_4_text = "Jag hade ingen tidigare handelserfarenhet, så jag började med 750 €. Inom en månad nådde jag lite över 1765 € genom att följa verktygen och läromedlen. Det har varit ett bra sätt att bygga självförtroende.";
$review_4_badge = "Rapporterad Avkastning +18,0%";

$review_verified_label = "Verifierad Användare";
$reviews_section_title = "Recensioner om $site_name";
$reviews_badge_trustworthy = "Pålitlig";
$reviews_summary_rating = "4,7";
$reviews_summary_count = "189";
$reviews_summary_desc = "En kraftfull och intuitiv handelsplattform med robusta automatiserade verktyg, realtidsanalyser och omfattande läromedel.";

// CONSULTANT / CHAT QUIZ (TZ Item 13)
$quiz_consultant_role = "Handelskonsult";
$quiz_text_welcome = "Hej! Jag är din personliga handelsassistent. Gör ett 30-sekunders quiz för att upptäcka hur automatiserad AI-handel kan fungera för dig.";
$quiz_text_q1 = "Har du någonsin handlat med kryptovalutor eller finansmarknader tidigare?";
$quiz_text_a1_yes = "Ja, jag har viss erfarenhet";
$quiz_text_a1_no = "Nej, jag är helt nybörjare";
$quiz_text_q2 = "Vad är ditt primära ekonomiska mål med onlinehandel?";
$quiz_text_q3 = "Föredrar du att AI utför affärer automatiskt, eller vill du handla manuellt?";
$quiz_text_a3_yes = "Automatiserad AI-Handel (Rekommenderas)";
$quiz_text_a3_no = "Manuell Handel med AI-Signaler";
$quiz_text_q4 = "Vad är din initiala budget att avsätta för handel?";
$quiz_text_a4_1 = "250 $ - 500 $";
$quiz_text_a4_2 = "500 $ - 1 500 $";
$quiz_text_a4_3 = "1 500 $+";
$quiz_text_q5 = "Är du redo att skapa ditt konto och få full tillgång till plattformen?";
$quiz_text_a5_yes = "Ja, låt oss börja!";
$quiz_text_a5_no = "Jag skulle vilja ha mer information";
$quiz_text_loader = "Analyserar dina svar och förbereder optimala handelsparametrar...";
$quiz_text_final_ttl = "Din Kontoinställning Är Klar!";
$quiz_text_processing = "Konfigurerar din plattformsåtkomst...";
$quiz_text_typing = "skriver...";
$quiz_placeholder_fname = "Förnamn";
$quiz_placeholder_lname = "Efternamn";
$quiz_placeholder_email = "E-postadress";
$quiz_placeholder_phone = "Telefonnummer";
$quiz_btn_submit = "Slutför Registrering";

// METADATA (TZ Item 10)
$home_meta_title = "$site_name — Handelsplattform | Officiell Webbplats";
$home_meta_description = "Den officiella $site_name-webbplatsen erbjuder en säker handelsplattform för kryptovaluta med avancerade handelsverktyg, realtids marknadsinsikter och en användarvänlig upplevelse för handlare.";

// NAVIGATION & HEADER (TZ Item 3, 12)
$nav_about = "Om Oss";
$nav_how = "Så Fungerar Det";
$nav_why = "Varför Handla";
$nav_faq = "Vanliga Frågor";
$nav_contacts = "Kontakta Oss";
$nav_signin = "Logga In";
$nav_signup = "Registrera Dig";

$mobnav_home = "Hem";
$mobnav_product = "Produkt";
$mobnav_offer = "Erbjudande";
$mobnav_contact = "Kontakta Oss";
$mobnav_faq = "Vanliga Frågor";
$mobnav_signup = "Registrera Dig";

// HERO SECTION
$hero_h1 = "<mark>$site_name</mark>-plattformen";
$hero_text = "Officiell $site_name kryptovaluta-handelsplattform";

// LEAD FORM
$form_fname_placeholder = "Förnamn";
$form_lname_placeholder = "Efternamn";
$form_email_placeholder = "E-post";
$form_phone_placeholder = "Telefonnummer";
$form_btn_submit = "Registrera Dig";
$form_disclaimer_text = "Genom att ange dina personuppgifter och klicka på knappen godkänner du <a class='link link-primary' href='privacy.php'>Integritetspolicyn</a> och <a class='link link-primary' href='conditions.php'>Användarvillkoren</a> för denna webbplats.";

// SECURITY BADGES
$badge_ssl = "256-bitars SSL";
$badge_payments = "Säkra Betalningar";
$badge_2fa = "2FA";
$badge_cold_storage = "98% Cold Storage";
$badge_regulated = "Reglerad";
$badge_traders_trust = "Över 4M Handlare Litar På";

// SAFE SECTION (Vos fonds sont en sécurité)
$safe_title = "<mark>Dina Medel Är Säkra</mark> hos $site_name";
$safe_desc = "Kryptering på banknivå, verifierade betalningsprocessorer och 98% cold storage — dina pengar är skyddade i varje steg.";

$safe_item1_title = "Verifierade Betalningsleverantörer";
$safe_item1_desc = "Betalningar behandlas uteslutande genom certifierade leverantörer som följer internationella säkerhetsstandarder. Din kortinformation lagras aldrig på vår plattform.";
$safe_item1_badge = "Säkra Betalningar";

$safe_item2_title = "Tvåfaktorsautentisering (2FA)";
$safe_item2_desc = "Lägg till ett extra skyddslager till ditt konto med tidsbaserade engångslösenord via SMS eller Google Authenticator.";
$safe_item2_badge = "2FA";

$safe_item3_title = "98% Cold Storage";
$safe_item3_desc = "Den stora majoriteten av digitala tillgångar förvaras i geografiskt spridda offline cold storage-valv skyddade av multi-signaturprotokoll.";
$safe_item3_badge = "98% Cold Storage";

$safe_item4_title = "Reglerat Utförande";
$safe_item4_desc = "Vi samarbetar med reglerade mäklarfirmor och likviditetsleverantörer världen över för att upprätthålla efterlevnad, transparens och utförande i toppklass.";
$safe_item4_badge = "Reglerad";

$safe_item5_title = "256-bitars SSL-Kryptering";
$safe_item5_desc = "Alla dataöverföringar mellan din webbläsare och våra servrar är krypterade med militärklassade kryptografiska TLS 1.3-protokoll.";
$safe_item5_badge = "256-bitars SSL";

// FREE GUIDE CTA BANNER (CTA 2)
$guide_cta_title = "Få Den Kostnadsfria Guiden";
$guide_cta_subtitle = "«10 Misstag att Undvika i Kryptohandel»";
$guide_cta_btn = "Begär Kostnadsfri Guide";

// TRUST SECTION (Pourquoi les investisseurs font confiance à Ciel Cryptance)
$trust_title = "Varför Handlare Litar På <mark>$site_name</mark>";
$trust_desc = "Över 4 000 000 användare världen över väljer $site_name för dess tillförlitlighet, kraftfulla automatisering och transparenta miljö.";
$trust_subtitle = "Ledande Fördelar för Den Moderna Handlaren:";

$trust_item1_title = "Global Marknadsåtkomst";
$trust_item1_desc = "Handla med över 100 kryptovalutor, Forex-par, aktier och råvaror från en enda enhetlig handelspanel.";

$trust_item2_title = "Robust Skydd av Medel";
$trust_item2_desc = "Separata konton, kontinuerliga biometriska kontroller och toppmodern cybersäkerhet skyddar ditt kapital 24/7.";

$trust_item3_title = "Inga Dolda Avgifter";
$trust_item3_desc = "Njut av kristallklar prissättning. Gratis registrering, gratis insättningar, inga plattformsavgifter för hantering och omedelbara uttagsförfrågningar.";

$trust_item4_title = "Lyhörd Support";
$trust_item4_desc = "Vårt dedikerade supportteam finns tillgängligt via livechatt, telefon eller e-post för att hjälpa till med eventuella frågor eller tekniska förfrågningar.";

$trust_market_info_text = "Mer information om marknadsförhållanden under 2026";
$trust_market_info_btn = "Varför Handla";

// START TRADING CTA (CTA 3)
$start_cta_title = "Börja Handla med <span data-local-currency='$app_price'>$app_price $app_currency</span>!";
$start_cta_desc = "Redo att prova $site_name? Registrera dig nu och gå med i det växande samhället av kryptoinvesterare och handlare.";
$start_cta_btn = "Registrera Dig";

// FAQ SECTION
$faq_title = "$site_name Vanliga Frågor <mark>(FAQ)</mark>";
$faq_q1 = "Vad är $site_name, och hur fungerar det?";
$faq_a1 = "Det är en AI-driven handelsplattform som arbetar för dig 24 timmar om dygnet. Systemet analyserar marknader, upptäcker möjligheter och utför affärer automatiskt. Du kan låta AI:n sköta allt eller växla till manuellt läge för att handla på dina egna villkor när som helst.";

$faq_q2 = "Hur säkra är mina pengar och data på $site_name?";
$faq_a2 = "Säkerhet är inbyggt i varje lager av plattformen. Personuppgifter skyddas med internationellt erkända krypteringsstandarder och avancerad kontoautentisering. Alla finansiella transaktioner behandlas uteslutande genom pålitliga och verifierade betalningsleverantörer. All din handelsaktivitet är synlig i realtid, så du vet alltid exakt vad som händer med dina medel.";

$faq_q3 = "Kan jag ta ut mina vinster när som helst?";
$faq_a3 = "Ja. Det finns inga begränsningar för när eller hur ofta du kan ta ut dina medel från $site_name. Ditt kontosaldo förblir alltid under din fulla kontroll. Uttag behandlas genom samma pålitliga betalningsleverantörer som används för insättningar, vilket garanterar snabba och säkra överföringar.";

$faq_q4 = "Finns det några dolda avgifter eller extra kostnader?";
$faq_a4 = "Inga. $site_name tar inte ut några prenumerationsavgifter, registreringsavgifter eller dolda kostnader. Det enda beloppet som krävs för att komma igång är minsta insättningen på <span data-local-currency='$app_price'>$app_price $app_currency</span>, som krediteras direkt till ditt handelskonto. Alla större betalningsmetoder accepteras, inklusive kreditkort, banköverföringar och PayPal.";

$faq_q5 = "Krävs tidigare handelserfarenhet för att komma igång?";
$faq_a5 = "Inte alls. $site_name är designad för både helt nybörjare och erfarna handlare. I helt automatiserat läge tar AI:n hand om allt åt dig, inklusive marknadsanalys, signalgenerering och orderutförande. Om du föredrar att behålla kontrollen kan du växla till manuellt läge när som helst.";

$faq_cta_text = "Har du frågor? Kolla vår FAQ eller kontakta vårt supportteam.";
$faq_cta_faq_btn = "Vanliga Frågor";
$faq_cta_contact_btn = "Kontakta Oss";

// NEW TRADER LEAD SECTION (Bottom form)
$lead_title = "Ny inom Handel?";
$lead_p1 = "Efter registrering får du vår kostnadsfria guide <mark class='text-on-surface-tertiary-accent'>«10 Misstag att Undvika i Kryptovalutahandel»</mark>. Den innehåller enkla råd från våra mest erfarna analytiker för att hjälpa dig undvika vanliga fallgropar.";
$lead_p2 = "Ange bara dina uppgifter i registreringsformuläret så skickar vi det direkt till din inkorg. Många handlare har börjat med den här guiden och funnit den ovärderlig för att bygga förtroende i sina första affärer.";
$lead_form_heading = "Marknaden väntar inte — kom igång idag!";

// FEATURES TABLE (Fonctionnalités principales)
$features_title = "<mark>Viktiga Funktioner</mark> hos $site_name Handelsplattform";
$feature_1_title = "🤖 Plattformsteknik";
$feature_1_val = "Avancerad AI-driven handelsmotor";
$feature_2_title = "💳 Finansieringsmetoder";
$feature_2_val = "Stora kreditkort, banköverföringar, PayPal";
$feature_3_title = "📱 Plattformsåtkomst";
$feature_3_val = "Kompatibilitet med flera enheter (Dator, Surfplatta, Mobil)";
$feature_4_title = "🚀 Framgångsgrad";
$feature_4_val = "85% analytisk precision";
$feature_5_title = "📊 Handelsinstrument";
$feature_5_val = "Kryptovalutor, Forex, Aktier, Råvaror, Ädelmetaller, CFD:er och mer…";
$feature_6_title = "✍️ Kontoinställning";
$feature_6_val = "Snabb och enkel registrering";
$feature_7_title = "📞 Kundsupport";
$feature_7_val = "24/7 professionell dedikerad support";

// FOOTER DISCLAIMER (TZ Item 21)
$footer_disclaimer_p1 = "$site_name tillhandahåller utbildningsinnehåll och allmän information om finansmarknader, onlinehandel och digitala tillgångar. Allt material publicerat på denna webbplats, inklusive artiklar, diagram, prisdata, marknadsinsikter och analyser, är endast avsett för informationsändamål och bör inte betraktas som finansiell, investerings- eller juridisk rådgivning. Även om vi strävar efter att hålla vårt innehåll korrekt och uppdaterat, garanterar vi inte dess fullständighet eller tillförlitlighet och accepterar inget ansvar för eventuella förluster som uppstår från användningen av denna webbplats.";
$footer_disclaimer_p2 = "Handel med kryptovalutor, Forex, CFD:er, aktier och andra finansiella instrument innebär betydande risk och kanske inte är lämpligt för alla investerare. Marknadsförhållanden kan förändras snabbt, och tidigare resultat garanterar inte framtida resultat. Innan du fattar några investeringsbeslut, bedöm noggrant din ekonomiska situation och risktolerans, och sök oberoende professionell rådgivning om det behövs. Investera endast pengar du har råd att förlora.";
$footer_copyright = "© " . date('Y') . " $site_name. All rights reserved.";

// FOOTER NAV LINKS
$footnav_about = "Om Oss";
$footnav_how = "Så Fungerar Det";
$footnav_why = "Varför Handla";
$footnav_faq = "Vanliga Frågor";
$footnav_contacts = "Kontakta Oss";
$footnav_privacy = "Integritetspolicy";
$footnav_risk = "Riskvarning";
$footnav_terms = "Användarvillkor";
$footnav_product = "Produkt";
$footnav_offer = "Erbjudande";

// ABOUT PAGE VARIABLES
$about_meta_title = "Om Oss | $site_name Officiell Webbplats";
$about_meta_description = "Läs mer om $site_name, vårt uppdrag att demokratisera finansmarknaderna genom AI-automatisering, och vårt säkerhetsramverk på institutionell nivå.";
$about_h1 = "Om <mark>$site_name</mark>";
$about_lead = "Vi stärker handlare världen över genom artificiell intelligens, algoritmisk exekvering och företagssäkerhet.";
$about_mission_title = "Vårt Uppdrag";
$about_mission_text = "På $site_name tror vi att sofistikerad handelsteknik bör vara tillgänglig för alla, inte bara institutionella fonder. Vår plattform överbryggar klyftan mellan vardagliga privatinvesterare och de mest avancerade beräkningsmässiga handelsalgoritmerna.";
$about_tech_title = "Banbrytande Teknik";
$about_tech_text = "Våra system utvärderar över 100 000 datapunkter varje sekund över globala krypto-, Forex- och aktiemarknader. Genom att kombinera prediktiva maskininlärningsmodeller med exekvering i submillisekunder levererar vi extremt låg slippage och pålitlig prestanda.";
$about_sec_title = "Säkerhet och Regelefterlevnad";
$about_sec_text = "Kundförtroende är kärnan i vårt ekosystem. Vi implementerar 256-bitars TLS-kryptering, strikta biometriska och 2FA-protokoll, och lagrar 98% av alla digitala reserver i cold storage-valv.";

// PRODUCT PAGE VARIABLES
$product_meta_title = "Handelsverktyg och Produkt | $site_name";
$product_meta_description = "Utforska handelsmotorn och AI-funktionerna som driver $site_name. Automatiserat orderutförande, prediktiv analys och intuitiva kontroller.";
$product_h1 = "<mark>Produkt och Funktioner</mark> för Plattformen";
$product_lead = "Upptäck de smarta verktygen designade för att ge dig en konkurrensfördel på moderna kryptovaluta- och finansmarknader.";
$product_f1_title = "Automatiserad AI-Handelsmotor";
$product_f1_text = "Låt neurala algoritmer analysera marknadstrender och utföra optimala affärer dygnet runt utan känslor.";
$product_f2_title = "Realtids Marknadsanalyser";
$product_f2_text = "Live orderboksdjup, automatiserad mönsterigenkänning och institutionell sentimentspårning direkt till hands.";
$product_f3_title = "Riskhanteringspaket";
$product_f3_text = "Detaljerade stop-loss- och take-profit-gränser, kontroller av maximal daglig exponering och automatiserade säkringsfunktioner.";
$product_f4_title = "Tillgänglighet Över Plattformar";
$product_f4_text = "Handla sömlöst över desktop-webbläsare, surfplattor och smartphones med noll latens och full molnsynkronisering.";

// OFFER PAGE VARIABLES
$offer_meta_title = "Specialerbjudande och Villkor | $site_name";
$offer_meta_description = "Upptäck det exklusiva registreringserbjudandet hos $site_name. Kom igång med en initial insättning på $app_price $app_currency och få dedikerad support.";
$offer_h1 = "Exklusivt <mark>Handelserbjudande</mark>";
$offer_lead = "Starta din handelsresa idag med konkurrenskraftiga fördelar och dedikerad en-till-en kontointroduktion.";
$offer_step1_title = "1. Snabb Registrering";
$offer_step1_text = "Fyll i vårt korta registreringsformulär för att säkra åtkomst till ditt personliga konto på under 2 minuter.";
$offer_step2_title = "2. Finansiera Ditt Handelssaldo";
$offer_step2_text = "Sätt in standardminimumet på $app_price $app_currency med kreditkort, banköverföring eller e-plånböcker. 100% av dina medel går direkt in i ditt handelssaldo.";
$offer_step3_title = "3. Aktivera AI-Handel";
$offer_step3_text = "Välj automatiserat eller assisterat läge, välj dina föredragna tillgångspar, och börja handla med fulla plattformsfunktioner.";

// CONTACTS PAGE VARIABLES
$contacts_meta_title = "Kontakta Support | $site_name";
$contacts_meta_description = "Kom i kontakt med $site_name-teamet. 24/7 kundsupport, teknisk assistans och kontoförfrågningar.";
$contacts_h1 = "Kontakta <mark>Kundsupport</mark>";
$contacts_lead = "Vårt dedikerade internationella supportteam är redo att hjälpa dig 24 timmar om dygnet, 7 dagar i veckan.";
$contacts_info_title = "Officiella Förfrågningar";
$contacts_info_text = "För allmänna förfrågningar, kontoverifiering eller teknisk support, kontakta oss via våra verifierade kommunikationskanaler.";
$contacts_support_hours = "24/7 Livechatt och E-postsupport";

// FAQ PAGE VARIABLES
$faq_meta_title = "Vanliga Frågor och Kunskapsbas | $site_name";
$faq_meta_description = "Hitta svar på vanliga frågor om $site_name-konton, insättningar, uttag och automatiserad AI-handel.";
$faq_h1 = "$site_name <mark>Vanliga Frågor</mark>";
$faq_lead = "Tydliga svar på de vanligaste frågorna om plattformssäkerhet, uttag och automatiserad handel.";

// PRIVACY POLICY PAGE VARIABLES
$privacy_meta_title = "Integritetspolicy | $site_name";
$privacy_meta_description = "Läs vår omfattande Integritetspolicy för att förstå hur $site_name samlar in, skyddar och hanterar dina personuppgifter.";
$privacy_h1 = "Integritetspolicy";
$privacy_p1 = "Denna Integritetspolicy beskriver hur $site_name samlar in, använder och avslöjar information när du besöker vår webbplats, registrerar ett konto eller använder vår handelsprogramvara.";
$privacy_sec1_title = "1. Datainsamling och Användning";
$privacy_sec1_text = "Vi samlar in nödvändig kontaktinformation (namn, e-postadress, telefonnummer) för att etablera ditt konto, koppla dig till verifierade mäklarpartners, och verifiera identitet i enlighet med internationella KYC- och AML-standarder.";
$privacy_sec2_title = "2. Cookies och Spårningsteknik";
$privacy_sec2_text = "Vi använder viktiga och analytiska cookies för att förbättra webbplatsens prestanda, personifiera användarupplevelsen och övervaka trafikmönster. Du kan justera dina webbläsarinställningar för cookies när som helst.";
$privacy_sec3_title = "3. Datasäkerhet och GDPR-Rättigheter";
$privacy_sec3_text = "All användardata krypteras under överföring och i vila med hjälp av kryptografiska protokoll på banknivå. Enligt Allmänna Dataskyddsförordningen (GDPR) har användare rätt att begära tillgång till, rättelse av eller radering av sina personuppgifter.";

// TERMS OF USE PAGE VARIABLES
$terms_meta_title = "Användarvillkor | $site_name";
$terms_meta_description = "Granska de officiella Villkoren och Bestämmelserna som styr användningen av $site_name-plattformen och tillhörande tjänster.";
$terms_h1 = "Användarvillkor";
$terms_p1 = "Läs dessa Användarvillkor noggrant innan du får tillgång till eller använder $site_name. Genom att registrera ett konto godkänner du att vara bunden av dessa bestämmelser.";
$terms_sec1_title = "1. Användarbehörighet";
$terms_sec1_text = "Du måste vara minst 18 år gammal och bo i en jurisdiktion där onlinehandel och kryptovalutainteraktioner är juridiskt tillåtna. Du är ansvarig för att säkerställa efterlevnad av dina lokala lagar.";
$terms_sec2_title = "2. Kontoregistrering och Säkerhet";
$terms_sec2_text = "Du godkänner att lämna sanna, korrekta och fullständiga uppgifter under registreringen. Du är ensam ansvarig för att upprätthålla sekretessen för dina inloggningsuppgifter.";
$terms_sec3_title = "3. Ansvarsbegränsning";
$terms_sec3_text = "$site_name tillhandahåller informations- och mjukvaruroutingstjänster. Vi ger inte personlig finansiell rådgivning eller garanterar handelslönsamhet. Handel på finansmarknader medför inneboende kapitalrisk.";

// RISK WARNING PAGE VARIABLES (TZ Item 19: Exact 4 sections)
$risk_meta_title = "Riskvarning och Juridiskt Meddelande | $site_name";
$risk_meta_description = "Viktig riskupplysning angående CFD-, Forex- och kryptovalutahandel på $site_name. Läs noggrant innan du investerar.";
$risk_h1 = "Riskvarning";
$risk_sec1_title = "1. Meddelande om Högriskinvestering och Volatilitet";
$risk_sec1_text = "Handel med kryptovalutor, differenskontrakt (CFD:er), utländsk valuta (Forex) och andra finansiella tillgångar innebär betydande risk för förlust och är inte lämpligt för alla investerare. Kryptovalutamarknader är exceptionellt volatila, med priser som är föremål för kraftiga svängningar som svar på regulatoriska tillkännagivanden, makroekonomiska förändringar eller marknadssentiment. Du bör aldrig investera pengar du inte har råd att förlora helt.";
$risk_sec2_title = "2. Oberoende Finansiell Rådgivning";
$risk_sec2_text = "Allt material, verktyg, algoritmiska signaler och kommentarer som tillhandahålls på $site_name är endast avsedda för informations-, utbildnings- och marknadsföringssyften. Inget av innehållet på denna webbplats utgör personlig investerings-, juridisk eller finansiell rådgivning. Innan du utför några affärer bör du göra oberoende research eller konsultera en licensierad finansiell rådgivare.";
$risk_sec3_title = "3. Regulatoriska och Geografiska Begränsningar";
$risk_sec3_text = "Vissa jurisdiktioner begränsar eller förbjuder detaljhandel med CFD:er och kryptovaluta. Det är användarens ensamma ansvar att verifiera om åtkomst till $site_name och användning av partnerhandelsmäklare är laglig enligt deras lokala juridiska ramverk.";
$risk_sec4_title = "4. Plattformsteknik och Marknadsutförande";
$risk_sec4_text = "Automatiserade handelsverktyg, artificiella intelligensalgoritmer och marknadsindikatorer garanterar inte vinster eller eliminerar marknadsrisker. Tekniska störningar, nätverkslatens, systemavbrott och brist på marknadslikviditet kan resultera i förseningar i handelsutförandet eller slippage.";

// SIGN UP / LOGIN PAGE VARIABLES
$sign_meta_title = "Registrering / Logga In | $site_name";
$sign_meta_description = "Skapa ditt gratis konto på $site_name för att få tillgång till smarta automatiserade handelsverktyg, marknadssignaler och säkra finansieringsalternativ.";
$sign_h1 = "Registrera dig på <mark>$site_name</mark>";
$sign_lead = "Gå med tusentals handlare och få omedelbar tillgång till vår AI-handelsmotor.";

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
$hero_form_heading = "Skapa ditt gratis konto";
$hero_form_button = "Registrera Dig";
$form_name_placeholder = "Ange ditt förnamn";
$form_surname_placeholder = "Ange ditt efternamn";
$form_disclaimer_prefix = "Genom att ange dina personuppgifter och klicka på knappen godkänner du";
$form_privacy_link_label = "Integritetspolicyn";
$form_disclaimer_and = "och";
$form_terms_link_label = "Användarvillkoren";
$form_disclaimer_of_site = "för denna webbplats.";

// -- partners strip --
$partners_label = "Betrodd av ledande partners";

// -- "what is" section --
$whatis_label = "Om Plattformen";
$whatis_title = "Vad är $site_name?";
$whatis_intro = "$site_name är den officiella onlinehandelsplattformen, designad för att göra krypto lika enkelt som daglig internetbank.";
$whatis_icon_1_title = "AI-Driven Analys";
$whatis_icon_1_text = "Avancerade algoritmer hanterar marknadernas komplexitet åt dig.";
$whatis_icon_2_title = "Omedelbar Exekvering";
$whatis_icon_2_text = "Tusentals datapunkter bearbetas varje sekund — affärer utan fördröjning.";
$whatis_icon_3_title = "Enkel, Intuitiv Instrumentpanel";
$whatis_icon_3_text = "Kolla ditt saldo och öppna positioner med en snabb överblick, när som helst.";
$whatis_icon_4_title = "Enkel Åtkomst, Inga Hinder";
$whatis_icon_4_text = "Börja med en minsta insättning på endast $app_price $app_currency — inga dolda avgifter.";
$whatis_cta_text = "Vill du veta mer om vårt team och vår produkt?";
$whatis_cta_link = "Om Oss";

// -- stats section heading (per-stat label/value already set above) --
$stats_label = "$site_name i Siffror";
$stats_title = "Siffror som Talar Högre än Löften";

// -- key benefits section --
$benefits_label = "Viktiga Fördelar";
$benefits_title = "Huvudfördelar med $site_name";
$benefit_1_title = "Nybörjarvänlig Plattform";
$benefit_1_text = "Intuitiva diagram och steg-för-steg-guider hjälper dig att komma igång utan att känna dig överväldigad. Du kan handla krypto med förtroende från dag ett.";
$benefit_2_title = "Officiell och Reglerad";
$benefit_2_text = "$site_name är licensierad och följer tillämpliga finansiella regler. Vi använder SSL-kryptering och tvåfaktorsautentisering för att skydda varje konto.";
$benefit_3_title = "Enkel Åtkomst, Inga Hinder";
$benefit_3_text = "Med en minsta insättning på endast $app_price $app_currency kan vem som helst komma igång. Ingen stor initial investering krävs — börja litet och öka din insats när ditt förtroende växer.";
$benefit_4_title = "Transparenta Avgifter";
$benefit_4_text = "Du kommer aldrig att se dolda kostnader. Vi tillämpar endast minimala transaktions- eller uttagsavgifter där det är tillämpligt, så du vet alltid exakt vad du betalar.";
$benefit_5_title = "24/7 Handelsåtkomst";
$benefit_5_text = "Handla enligt ditt eget schema, dag eller natt. $site_name fungerar lika bra på desktop som på mobil, så du kan hålla kontakten med marknaden var du än är.";
$benefit_6_title = "Lokal Kundsupport";
$benefit_6_text = "Vårt supportteam finns tillgängligt via chatt, telefon eller e-post. Riktiga människor finns här för att hjälpa dig på ditt språk, när du än behöver det.";
$benefits_trust_title = "Betrodd av Användare Världen Över";
$benefits_trust_text = "Det är därför så många kryptoanvändare litar på $site_name. Tusentals handlare använder redan $site_name, och nya konton ansluter varje dag.";
$benefits_cta = "Registrera Dig";
$benefits_badge_1 = "256-bitars SSL";
$benefits_badge_2 = "Säkra Betalningar";
$benefits_badge_3 = "2FA";

// -- security section --
$security_label = "Säkerhet";
$security_title = "Dina Medel Är Säkra hos $site_name";
$security_subtitle = "Kryptering på banknivå, verifierade betalningar och 98% cold storage — dina pengar är skyddade i varje steg.";
$security_1_title = "Verifierade Betalningsleverantörer";
$security_1_text = "Betalningar behandlas uteslutande av certifierade leverantörer som uppfyller internationella säkerhetsstandarder. Dina betalningsuppgifter lagras aldrig på våra servrar.";
$security_2_title = "256-bitars SSL-Kryptering";
$security_2_text = "All data som utbyts mellan din enhet och vår plattform krypteras med 256-bitars TLS. Ingen tredje part kan avlyssna eller läsa det.";
$security_3_title = "98% Cold Storage";
$security_3_text = "98% av tillgångarna förvaras i offline-plånböcker, utan internetanslutning. Ingen kan komma åt dem på distans.";
$security_4_title = "Multifaktorautentisering";
$security_4_text = "Endast du kan komma åt ditt konto. Varje inloggning verifieras av ett andra steg som endast du kontrollerar.";
$security_5_title = "Kontoövervakning";
$security_5_text = "Varje inloggning, transaktion eller inställningsändring utlöser en omedelbar avisering, så du vet alltid vad som händer på ditt konto.";
$security_6_title = "Lösenordsskydd";
$security_6_text = "Lösenord lagras i en oläsbar, oåterkallelig form. Vi har tekniskt sett inget sätt att se ditt lösenord.";
$security_cta_title = "Skaffa en Kostnadsfri Guide!";
$security_cta_text = "Skaffa vår kostnadsfria nybörjarguide och börja handla idag.";
$security_cta_button = "Registrera Dig";
$security_badge_1 = "98% Cold Storage";
$security_badge_2 = "Verifierade Betalningar";
$security_badge_3 = "Krypterad";

// -- how it works section --
$how_label = "Så Fungerar Det";
$how_title = "Så Fungerar Det";
$how_1_title = "Registrera Dig";
$how_1_text = "Klicka på knappen \"Öppna Konto\" och fyll i registreringsformuläret med dina uppgifter (namn, e-post och telefonnummer). Det tar bara en minut.";
$how_2_title = "Sätt In Medel";
$how_2_text = "Finansiera sedan ditt konto. Minsta insättningen är endast $app_price $app_currency. Du kan använda ett kredit-/betalkort, lokal banköverföring eller populära e-plånböcker. (Tips: börja med ett belopp du känner dig bekväm med.)";
$how_3_title = "Börja Handla";
$how_3_text = "När dina medel finns på ditt konto är du redo att handla. Välj tillgången du vill ha (som BTC, SOL eller USDT) och bestäm din strategi.";
$how_cta_label = "Så Fungerar Det";
$how_cta_text = "Behöver du mer information om hur tjänsten fungerar?";
$how_cta_link = "Så Fungerar Det";

// -- trust reasons section --
$trust_label = "Varför Handla Med Oss";
$trust_intro = "Gå med tusentals användare som redan handlar med $site_name.";
$trust_1_title = "Fullt Reglerad";
$trust_1_text = "$site_name är vederbörligen registrerad och följer tillämpliga finansiella regler. Vi verkar under strikta regler för att säkerställa din säkerhet.";
$trust_2_title = "Avancerad Säkerhet";
$trust_2_text = "All din data och alla dina medel är krypterade och säkrade. Vi upprätthåller strikt kontoskydd genom SSL-kryptering och tvåfaktorsautentisering.";
$trust_3_title = "Transparenta Operationer";
$trust_3_text = "Vi döljer aldrig våra avgifter och lägger aldrig till överraskande regler. Före varje transaktion ser du exakt vilka avgifter som gäller.";
$trust_4_title = "Lyhörd Support";
$trust_4_text = "Vårt supportteam finns tillgängligt via chatt, telefon eller e-post för att svara på dina frågor eller lösa alla problem.";
$trust_cta_text = "Mer information om marknadsförhållanden";
$trust_cta_link = "Varför Handla";

// -- testimonials section heading (individual reviews already set above) --
$testimonials_label = "Vittnesmål";
$testimonials_title = "Betrodd av Över 4M Handlare";

// -- FAQ section heading --
$faq_label = "Vanliga Frågor";

// -- lead magnet CTA block --
$leadmagnet_title = "Ny inom Handel?";
$leadmagnet_text1 = "Efter att du registrerar dig får du vår kostnadsfria guide,";
$leadmagnet_quote = "”10 Misstag att Undvika När Du Handlar med Krypto”";
$leadmagnet_text2 = "fylld med enkla tips från våra mest erfarna analytiker för att hjälpa dig undvika de vanligaste misstagen.";
$leadmagnet_text3 = "Ange bara dina uppgifter under";
$leadmagnet_link = "registreringen";
$leadmagnet_text4 = "så skickar vi det direkt till din inkorg. Många investerare började med den här guiden och säger att den gjorde en verklig skillnad.";
$leadmagnet_text5 = "Marknaden väntar inte — kom igång idag!";

// -- pre-about CTA band --
$pre_about_title = "Redo att Ta Kontroll Över Din Handel?";
$pre_about_text = "Gå med i $site_name idag och upptäck en plattform byggd för klarhet, säkerhet och resultat.";
$pre_about_button = "Registrera Dig";

// -- pretest (quiz teaser) badges/CTA --
$pretest_title = "Börja Handla med $app_price $app_currency!";
$pretest_text = "Redo att prova $site_name? Registrera dig nu och gå med i det växande samhället av kryptoinvesterare och handlare.";
$pretest_button = "Registrera Dig";
$pretest_badge_1 = "Säker";
$pretest_badge_2 = "Reglerad";
$pretest_badge_3 = "Betrodd av Över 4M Handlare";

// -- about page --
$about_label = "Om Oss";
$about_title = "Om $site_name";
$about_intro = "$site_name ger dig inte bara en handelsplattform — vi hjälper dig att handla med klarhet och förtroende.";
$about_text_1 = "$site_name är den officiella onlinehandelsplattformen, designad för att göra kryptohandel tillgänglig för både nybörjare och erfarna handlare.";
$about_text_2 = "Vi kombinerar AI-driven marknadsanalys med en enkel, transparent instrumentpanel, så du alltid vet exakt var du står.";
$about_text_3 = "Varje del av plattformen är byggd kring klarhet: inga dolda avgifter, ingen förvirrande jargong, bara tydlig information som du kan agera på.";
$about_text_4 = "Vår plattform sparar dig timmar av gissningar och skyddar dig mot ogenomskinliga alternativ av låg kvalitet. Vi tror att handel bör byggas på precision, inte tur.";

// -- contact page --
$contact_label = "Kontakta Oss";
$contact_title = "Kontakta $site_name";
$contact_subtitle = "Har du en fråga eller behöver du hjälp? Vi är här för att ge dig råd och vägledning.";
$contact_text = "På $site_name tror vi att framgång i handel inte har något med tur att göra — det bygger på precision, förutseende och rätt verktyg.";
$contact_form_text = "Fyll bara i formuläret nedan, så kontaktar en medlem av vårt team dig inom kort.";
$contact_form_button = "Skicka Meddelande";

// -- footer navigation labels (geo-page footer, TZ items 12/16/18) --
$footnav_col_pages = "Sidor";
$footnav_col_support = "Support";
$footnav_col_legal = "Juridiskt";
$footnav_col_company = "Företag";
$footnav_home = "Hem";
$footnav_sitemap = "Webbplatskarta";
$footnav_conditions = "Användarvillkor";
$footnav_contact = "Kontakta Oss";
$footnav_signup = "Registrera Dig";
$footer_risk_warning = "Riskvarning";

// -- geo-page footer legal disclaimer (single-paragraph variant used by
// the geo template's own footer layout; the two-paragraph TZ item 21
// text above -- $footer_disclaimer_p1/$footer_disclaimer_p2 -- covers
// the root pages) --
$footer_disclaimer = "$site_name tillhandahåller utbildningsinnehåll och allmän information om finansmarknader, onlinehandel och digitala tillgångar. Allt material publicerat på denna webbplats är endast avsett för informationsändamål och bör inte betraktas som finansiell, investerings- eller juridisk rådgivning. Handel innebär betydande risk och kanske inte är lämpligt för alla investerare. Investera endast pengar du har råd att förlora.";

// ============================================================
// Geo-language SUBPAGE fallback content (TZ item 16 cont.). Same
// rationale as the block above: conditions/contacts/faq/offer/
// privacy/product/risk-warning/sign.php share templates across the
// bg/cs/da/... stub folders and reference these vars directly.
// English fallback so every geo folder's subpages render complete.
// ============================================================

// -- shared form aliases (service-page forms reuse the hero disclaimer) --
$form_disclaimer_risk_note = "Läs även vår";
$form_text = $form_disclaimer_prefix;
$form_text_privacy = $form_privacy_link_label;
$form_text_privacy_and = $form_disclaimer_and;
$form_text_conditions = $form_terms_link_label;
$form_text_conditions_of = $form_disclaimer_of_site;
$form_text_risk_warning_note = $form_disclaimer_risk_note;
$form_submit = "Registrera Dig";

// -- generic breadcrumbs (sign-up / product pages) --
$breadcrumb_home = "Hem";
$breadcrumb_current = "Registrering / Logga In";
$breadcrumb_product = "Produkt";

// -- sign-up page official heading --
$official_heading = "Registrera Dig på den Officiella {$site_name}™-Plattformen";
$official_description = "Skapa ditt gratis konto för att börja handla med kryptovaluta på en säker, transparent plattform.";

// -- product page: analytics banner --
$analytics_heading = "Handla Smartare med $site_name";
$analytics_description = "Få tydlig realtids marknadsdata och AI-driven insikt. Fatta informerade handelsbeslut med förtroende.";

// -- product page: dashboard preview --
$app_main_heading = "Din Handelsinstrumentpanel";
$app_feature_1_title = "Live Marknadsdata";
$app_feature_1_text = "Realtidspriser och diagram direkt till hands";
$app_feature_2_title = "Portföljspårning";
$app_feature_2_text = "Omfattande mätvärden om ditt saldo och prestanda";
$app_feature_3_title = "Mobilvy";
$app_feature_3_text = "Optimerad för mobila webbläsare";
$app_feature_4_title = "Bevakningslistor";
$app_feature_4_text = "Håll koll på tillgångarna du bevakar";

// -- product page: capabilities --
$capabilities_main_title = "Vad Du Kan Förvänta Dig";
$capabilities_feature_1_title = "AI-Drivna Signaler";
$capabilities_feature_1_text = "Avancerade algoritmer analyserar marknadssignaler och avslöjar möjligheter dygnet runt.";
$capabilities_feature_2_title = "Snabb Registrering";
$capabilities_feature_2_text = "Registrera dig på minuter med en säker, enkel registreringsprocess.";
$capabilities_feature_3_title = "Verifierad Säkerhet";
$capabilities_feature_3_text = "256-bitars SSL-kryptering, 2FA och 98% cold storage skyddar dina medel i varje steg.";
$capabilities_feature_4_title = "Pågående Support";
$capabilities_feature_4_text = "Få support från vårt team i varje steg — från registrering till din första affär.";

// -- product page: stats strip --
$products_stats_currencies_v = "65+";
$products_stats_currencies_l = "Tillgängliga Valutor";
$products_stats_users_v = "4M+";
$products_stats_users_l = "Registrerade Användare";
$products_stats_volume_v = "98+";
$products_stats_volume_l = "Länder som Stöds";
$products_stats_countries_v = "24/7";
$products_stats_countries_l = "Transaktionsåtkomst";

// -- product page: 3-step strip --
$step_1 = "Skapa ett konto";
$step_2 = "Sätt in medel";
$step_3 = "Börja handla med den strategi som passar dig";

// -- shared "last update" label (privacy page) --
$last_update = "Senaste uppdatering";

// -- FAQ page --
$faq_page_meta_title = "Vanliga Frågor | $site_name Support";
$faq_page_meta_description = "Svar på vanliga frågor om hur $site_name fungerar, prissättning och att komma igång.";
$faq_page_title = "Vanliga Frågor";
$faq_page_breadcrumb_home = "Hem";
$faq_page_breadcrumb_current = "Vanliga Frågor";
$faq_page_help_title = "Hur kan vi hjälpa dig?";
$faq_1_q = "Hur kommer jag igång?";
$faq_1_a = "Skapa ditt konto, verifiera din e-postadress, och gör din första insättning — planer börjar från endast $app_price $app_currency.";
$faq_2_q = "Är mina pengar och data säkra? Är $site_name pålitlig?";
$faq_2_a = "Ja. Din data skyddas av branschstandard 256-bitars kryptering, och dina medel är säkrade med tvåfaktorsautentisering och 98% cold storage.";
$faq_3_q = "Kan jag stänga mitt konto eller ta ut medel när som helst?";
$faq_3_a = "Ja. Det finns inga begränsningar för uttag. Kontakta vårt supportteam när som helst — vi hjälper dig med ditt konto eller behandlar ditt uttag omgående.";
$faq_4_q = "Hur vet jag om den här plattformen passar mig?";
$faq_4_a = "$site_name byggdes för både absoluta nybörjare och erfarna handlare som vill handla mer effektivt — varje verktyg på plattformen är designat för att hålla dig informerad och i kontroll.";
$faq_5_q = "Behöver jag handelserfarenhet för att komma igång?";
$faq_5_a = "Ingen tidigare erfarenhet krävs. Vårt AI-drivna läge hanterar analysen åt dig, och du kan växla till manuellt läge när som helst om du vill ha mer kontroll.";

// -- contacts page --
$contacts_h3 = "För tekniska frågor eller frågor om ditt konto, vänligen kontakta oss via e-post";

// -- offer page (meta title/description already defined above) --
$offer_breadcrumb_home = "Hem";
$offer_breadcrumb_current = "Erbjudande";
$offer_cta_h1 = "Börja Handla Idag";
$offer_cta_text = "Klart på minuter: registrera dig, finansiera ditt konto och börja handla med kryptovaluta på en säker, reglerad plattform.";
$offer_how_it_works_title = "Så Fungerar Det";
$offer_official_platform_title = "Detta Är den Officiella {$site_name}™ Handelsplattformen";
$offer_official_platform_text = "Ett pålitligt, transparent sätt att handla kryptovaluta — med realtidsinsikter och full kontroll.";

// -- conditions of use page --
$conditions_meta_title = "Användarvillkor | $site_name";
$conditions_meta_description = "Läs de officiella Användarvillkoren för $site_name-webbplatsen och handelsplattformen.";
$conditions_breadcrumb_home = "Hem";
$conditions_breadcrumb_current = "Användarvillkor";
$conditions_h1 = "Användarvillkor";
$conditions_s1_title = "1. Allmänt";
$conditions_s1_text = "Denna webbplats ger tillgång till en online kryptovaluta-handelsplattform. Användning av plattformen innebär fullständigt godkännande av dessa villkor och vår Integritetspolicy.";
$conditions_s2_title = "2. Behörighet";
$conditions_s2_text = "Användare måste vara minst 18 år gamla och ha full juridisk kapacitet i sin respektive jurisdiktion.";
$conditions_s3_title = "3. Begränsad Åtkomst";
$conditions_s3_text = "Åtkomst kan vara begränsad i jurisdiktioner där lokala regler förbjuder den typ av handelstjänst vi erbjuder.";
$conditions_s4_title = "4. Förbjuden Användning";
$conditions_s4_text = "Användare får inte missbruka systemet, försöka obehörig åtkomst till våra system eller baklängesutveckla vår programvara.";
$conditions_s5_title = "5. Immateriella Rättigheter";
$conditions_s5_text = "All källkod, användargränssnitt och varumärkestillgångar förblir det driftande företagets exklusiva egendom.";
$conditions_s6_title = "6. Ansvar";
$conditions_s6_text = "Plattformens verktyg tillhandahålls \"i befintligt skick\". Vi tar inget ansvar för resultat som uppstår från användarens egna handelsbeslut.";
$conditions_s7_title = "7. Tredjepartstjänster";
$conditions_s7_text = "Integrationer med tredjeparts betalningsleverantörer sker via säkra anslutningar. För insättningar och uttag hanterar användare direkt med sin valda leverantör.";
$conditions_s8_title = "8. Externa Länkar";
$conditions_s8_text = "Länkar till externa resurser tillhandahålls endast för bekvämlighet. Vi stödjer eller garanterar inte någon extern programvara.";
$conditions_s9_title = "9. Övrigt";
$conditions_s9_text = "Vi förbehåller oss rätten att när som helst ändra dessa villkor eller tjänsten, med ändringar publicerade på webbplatsen.";

// -- privacy policy page (meta title/description already defined above) --
$privacy_breadcrumb_home = "Hem";
$privacy_breadcrumb_current = "Integritetspolicy";
$privacy_page_h1 = "Integritetspolicy";
$privacy_intro = "Vi respekterar din integritet och behandlar personuppgifter i full överensstämmelse med internationella standarder och den europeiska GDPR:n.";
$privacy_transparency_title = "Transparens";
$privacy_transparency_text = "Vi avslöjar tydligt hur operativa telemetridata behandlas. Kontakta support för ytterligare detaljer.";
$privacy_usage_title = "Dataanvändning";
$privacy_usage_text = "Data används endast för att tillhandahålla åtkomst, säkra sessioner och uppfylla efterlevnadsskyldigheter.";
$privacy_rights_short_title = "Dina Rättigheter";
$privacy_rights_short_text = "Du behåller fulla rättigheter att se, uppdatera eller begära radering av dina personuppgifter.";
$privacy_security_title = "Säkerhet";
$privacy_security_text = "Vi använder AES-256-kryptering och databasisolering för att skydda operativa telemetridata.";
$privacy_s1_title = "1. Datainsamling";
$privacy_s1_text = "Vi samlar in användningstelemetri (IP-adress, systemparametrar, webbläsartyp) samt verifieringsdata som skickas in av användare.";
$privacy_s2_title = "2. Rättslig Grund";
$privacy_s2_text = "Behandlingen bygger på användarnas uttryckliga samtycke, regelefterlevnadskrav och leverans av tjänsten.";
$privacy_s3_title = "3. Datadelning";
$privacy_s3_text = "Data kommersialiseras aldrig. Utlämnanden är begränsade till auktoriserade clearingenheter och tekniska partners under ett sekretessavtal (NDA).";
$privacy_s4_title = "4. Cookies";
$privacy_s4_text = "Väsentliga cookies används för sessionsautentisering och gränssnittsoptimering.";
$privacy_google_choices = 'Hantera dina spårningsinställningar via <a href="http://www.google.com/settings/ads" target="_blank" rel="noopener">Googles Annonsinställningar</a> eller använd <a href="https://tools.google.com/dlpage/gaoptout" target="_blank" rel="noopener">Google Analytics Opt-out-tillägg</a>. Du kan också granska Googles egna datapraxis i deras <a href="https://www.google.com/intl/en/policies/privacy/" target="_blank" rel="noopener">Integritetspolicy</a>.';
$privacy_s5_title = "5. Datalagring";
$privacy_s5_text = "Personuppgifter behålls endast så länge det är nödvändigt för att uppfylla systemåtkomstkrav.";
$privacy_s6_title = "6. Internationella Överföringar";
$privacy_s6_text = "Gränsöverskridande dataöverföringar sker uteslutande via krypterade kanaler och via standardavtalsklausuler.";
$privacy_s7_title = "7. Tredjepartslänkar";
$privacy_s7_text = "Vi ansvarar inte för sekretesspraxis hos externa tredjepartstjänster länkade från vår webbplats.";
$privacy_s8_title = "8. Uppdateringar";
$privacy_s8_text = "Denna policy kan revideras periodiskt för att återspegla system- eller juridiska förändringar.";
$privacy_rights_title = "Dina Rättigheter";
$privacy_rights_text = "Användare har rätt att begära åtkomst till, rättelse av, begränsad behandling av eller fullständig radering av sina lagrade data.";

// -- risk warning page --
$page_title_risk_warning = "Riskvarning | $site_name";
$page_description_risk_warning = "Förstå riskerna med handel och hur $site_name hjälper dig att hantera dem säkert.";
$risk_warning_breadcrumb_home = "Hem";
$risk_warning_breadcrumb_current = "Riskvarning";
$risk_warning_title = "Riskvarning";
$risk_warning_intro = "Att förstå risker är det första steget mot att handla med förtroende.";
$risk_warning_ai_heading = "Hur vårt AI-system hjälper till med riskhantering:";
$risk_warning_ai_1 = "<strong>Algoritmisk Effektivitet och Känslolös Handel:</strong> Avancerade algoritmer analyserar marknadssignaler för att objektivt utföra affärer vid optimal tidpunkt.";
$risk_warning_ai_2 = "<strong>Datadrivna Strategier:</strong> Strategier baseras på verifierade marknadsmönster och realtidsanalys istället för gissningar.";
$risk_warning_ai_3 = "<strong>Flexibla Inställningar och Full Kontroll:</strong> Justera dina riskparametrar när som helst. Följ alla saldon och affärer transparent på din instrumentpanel — utan dolda avgifter och utan begränsningar på uttag.";
$risk_warning_disclaimer = "<strong>Ansvarsfriskrivning:</strong> Handel innebär alltid risk. Automatiserade system (inklusive AI) garanterar inte vinst, kan misslyckas på grund av programvarufel eller oväntade marknadshändelser, och kräver övervakning av användaren. Tidigare resultat är inte en indikator på framtida resultat. Denna plattform tjänar endast informations- och marknadsföringssyften och utgör inte finansiell rådgivning.";
$risk_warning_s1_heading = "1. Allmän Risk och Kryptovalutamarknadsrisk";
$risk_warning_s1_1 = "Kryptovalutor är mycket volatila, spekulativa tillgångar som handlas dygnet runt och endast är föremål för minimal regulatorisk tillsyn i de flesta jurisdiktioner.";
$risk_warning_s1_2 = "Värden kan fluktuera dramatiskt inom korta perioder, vilket potentiellt kan leda till en total förlust av investerat kapital.";
$risk_warning_s1_3 = "Marknadsvärden kan påverkas starkt av regulatoriska förändringar, tekniska utvecklingar, säkerhetsintrång eller bredare makroekonomiska händelser.";
$risk_warning_s1_4 = "Vissa tillgångar kan förlora hela sitt värde. Investera endast pengar du har råd att förlora.";
$risk_warning_s2_heading = "2. Exekverings-, Likviditets- och Hävstångsrisk";
$risk_warning_s2_1 = "<strong>Marknadsvolatilitet och Likviditet:</strong> Extrema prisrörelser (10-20%+ dagligen) eller låg likviditet (särskilt för mindre mynt) kan leda till förseningar, plattformsavbrott och betydande exekveringsslippage. Stop-loss-order kan inte garantera förlustbegränsning under extrema förhållanden.";
$risk_warning_s2_2 = "<strong>Hävstångs- och Marginalrisk:</strong> Hävstångsprodukter förstärker både vinster och förluster, vilket innebär att du kan förlora mer än din ursprungliga insättning. Ungefär 70-80% av detaljhandelsinvesterares konton förlorar pengar när de handlar med hävstångsprodukter.";
$risk_warning_s3_heading = "3. Teknisk, Cybersäkerhets- och Tredjepartsrisk";
$risk_warning_s3_1 = "<strong>Tekniska Faktorer:</strong> Onlinehandel medför inneboende risker som internetanslutningsavbrott, hårdvaru-/programvarufel och otillgänglighet av tjänsten.";
$risk_warning_s3_2 = "<strong>Cybersäkerhet:</strong> Kryptovalutakonton är vanliga mål för nätfiske, skadlig programvara och hackningsförsök. Transaktioner är oåterkalleliga; en kompromettering av dina inloggningsuppgifter kan resultera i permanent förlust.";
$risk_warning_s3_3 = "<strong>Tredjepartsplattformar:</strong> Denna webbplats kan koppla samman användare med tredjepartsplattformar. Vi kontrollerar, stödjer eller garanterar inte deras säkerhet, verksamhet eller solvens. Utför alltid din egen grundliga due diligence innan du sätter in medel på externa plattformar.";
$risk_warning_s4_heading = "4. Regulatoriska, Skatte- och Slutbestämmelser";
$risk_warning_s4_1 = "<strong>Juridisk Efterlevnad och Skatter:</strong> Regelverk varierar kraftigt och förändras snabbt. Användare är ensamma ansvariga för att säkerställa att deras handelsaktiviteter följer lokal lag, samt för att uppfylla sina egna skatteförpliktelser.";
$risk_warning_s4_2 = "<strong>Inga Vinstgarantier:</strong> Det finns ingen \"säker\" eller riskfri kryptovalutahandel. Eventuella angivna avkastningssiffror eller resultatexempel är rent hypotetiska.";
$risk_warning_s4_3 = "<strong>Lämplighet:</strong> Om du inte fullt ut förstår riskerna, är beroende av nödvändiga ekonomiska resurser, eller handlar med lånade pengar, är kryptovalutahandel inte lämplig för dig. Vid tveksamhet, konsultera en oberoende, licensierad finansiell rådgivare.";
$risk_warning_contact = "<strong>Kontakt:</strong> Om du har frågor om detta uttalande, eller vill skicka en förfrågan, vänligen kontakta vårt officiella kundtjänstteam via kontaktformuläret på vår webbplats.";

