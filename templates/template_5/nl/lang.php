<?php
require __DIR__ . '/../lang.php';

// Identity / config variables are intentionally NOT overridden here — they are inherited
// as-is from the root lang.php so brand/pricing swaps still work correctly at deploy time:
// $site_name, $site_url, $site_domain, $app_price, $app_currency, $rating_value,
// $rating_count, $review_count, $country_name, $support_email, $institutional_email.

$site_lang = 'nl-NL';
$form_language = 'nl'; // matches this page's own language, not the offer's global default

// Reviews
$review_1_author = "Particuliere belegger";
$review_2_author = "Onafhankelijke handelaar";
$review_3_author = "Handelaar in digitale activa";
$review_4_author = "Zoeker naar passief inkomen";


// META TITLE / DESCRIPTION (per page)
$home_meta_title = "$site_name — Officiële Website | Handelsplatform";
$home_meta_description = "$site_name ⭐ — intelligent AI-handelsplatform voor realtime marktanalyse en duidelijke handelssignalen ⚡ Probeer slimme tools en inzichten met een rondleiding.";



$quiz_consultant_name = 'Mia';
$quiz_consultant_role = 'Onboarding-assistent';

$quiz_text_welcome   = "Hallo! Dit is $quiz_consultant_name, uw persoonlijke onboarding-assistent bij $site_name. Goed nieuws! Uw toegang is officieel vooraf goedgekeurd. Laten we nu uw professionele profiel instellen!";
$quiz_text_q1 = "Om volledige wettelijke naleving te garanderen, verzoeken wij u uw huidige land van verblijf te bevestigen: $country_name";
$quiz_text_a1_yes    = "Ja, dit is mijn huidige verblijfplaats";
$quiz_text_a1_no     = "Nee";

$quiz_text_q2 = "Perfect. Selecteer de juiste leeftijdscategorie om de meest geschikte financiële instrumenten te vinden:";

$quiz_text_q3        = "Is er een actieve bankrekening of creditcard beschikbaar om regelmatig dagelijkse dividenduitkeringen te ontvangen?";
$quiz_text_a3_yes    = "Ja, er is een actieve rekening beschikbaar";
$quiz_text_a3_no     = "Nog niet beschikbaar";

$quiz_text_q4        = "Geef alstublieft uw voornaamste bron van persoonlijk inkomen aan. (Deze parameter helpt bij het aanpassen van de risicobeheerinstellingen van het systeem).";
$quiz_text_a4_1      = "Loondienst / Zelfstandig ondernemer";
$quiz_text_a4_2      = "Passief inkomen / Persoonlijk spaargeld";
$quiz_text_a4_3      = "Andere bronnen";

$quiz_text_q5 = "Geweldig! De laatste stap is een korte telefonische verificatie door onze manager om uw registratie te bevestigen. Er wordt gebeld tussen 11:00 en 20:00 uur. Kunt u de oproep aannemen?";
$quiz_text_a5_yes    = "Ja, deze tijd komt goed uit voor de oproep";
$quiz_text_a5_no     = "Start de oproep onmiddellijk alstublieft";

$quiz_text_loader    = "De gevraagde opties worden geanalyseerd en veilige accountconfiguratieparameters worden geïnitialiseerd...";
$quiz_text_final_ttl = "Account succesvol geautoriseerd! 🎉 Uw beveiligde digitale werkruimte is volledig geconfigureerd. Voltooi de onderstaande laatste verificatiestappen om dagelijkse uitbetalingen te garanderen:";

$quiz_placeholder_fname = "Voornaam";
$quiz_placeholder_lname = "Achternaam";
$quiz_placeholder_email = "E-mailadres";
$quiz_placeholder_phone = "Telefoonnummer";
$quiz_btn_submit = "Handel activeren";
$quiz_text_typing       = "is een bericht aan het typen...";
$quiz_text_processing   = "Aanvraag verwerken...";


$about_meta_title = "Over $site_name | AI-aangedreven crypto-handelsinfrastructuur";
$about_meta_description = "Lees meer over $site_name, een geavanceerde AI-aangedreven crypto-handelsinfrastructuur gericht op voorspellende analyses, marktintelligentie, volatiliteitsbewaking en onderzoek naar digitale activa.";

$contact_meta_title = "Contact $site_name | Toegang tot AI-handelsplatform aanvragen";
$contact_meta_description = "Neem contact op met $site_name om toegang aan te vragen, of stel vragen over onze AI-aangedreven crypto-handelsinfrastructuur, ondersteunde markten, informatie over digitale activa of platform-onboarding.";

$terms_meta_title = "Algemene voorwaarden | $site_name Website- en platformvoorwaarden";
$terms_meta_description = "Lees de algemene voorwaarden van $site_name, waaronder het gebruik van de website, informatieve inhoud, AI-handelsinfrastructuur, verantwoordelijkheid van de gebruiker, diensten van derden en risicobeperkingen.";

$privacy_meta_title = "Privacybeleid | $site_name Gegevensbescherming en privacy van gebruikers";
$privacy_meta_description = "Lees het privacybeleid van $site_name om te begrijpen hoe we persoonlijke informatie die via onze AI-crypto-handelsinfrastructuurwebsite wordt ingediend, verzamelen, gebruiken, beschermen, opslaan en beheren.";

$cookies_meta_title = "Cookiebeleid | $site_name Websitecookies en tracking";
$cookies_meta_description = "Ontdek hoe $site_name cookies, analysetechnologieën, prestatietrackingtools en websitefunctionaliteitsdiensten gebruikt om de gebruikerservaring en platformprestaties te verbeteren.";

$aml_meta_title = "AML-beleid | $site_name Normen ter bestrijding van witwassen";
$aml_meta_description = "Bekijk het AML-beleid van $site_name, met inbegrip van het verantwoorde gebruik van digitale activa, bewustwording inzake het tegengaan van witwassen, verboden activiteiten, bewakingsprincipes en nalevingsverwachtingen.";

$risk_meta_title = "Risicoverklaring | $site_name Verklaring over crypto-handelsrisico's";
$risk_meta_description = "Lees de risicoverklaring van $site_name om de volatiliteit van cryptocurrencies, handelsrisico's, beperkingen van AI-signalen, marktrisico, liquiditeitsrisico en verantwoordelijkheid van de gebruiker te begrijpen.";

$exchanges_meta_title = "Ondersteunde beurzen | $site_name Dekking marktintelligentie";
$exchanges_meta_description = "Ontdek de soorten cryptocurrency-beurzen, liquiditeitsplatformen en markten voor digitale activa die worden bewaakt door de AI-aangedreven marktintelligentie-infrastructuur van $site_name.";


$about_breadcrumb_name = "Over $site_name";
$contact_breadcrumb_name = "Contact $site_name";
$terms_breadcrumb_name = "Algemene voorwaarden";
$privacy_breadcrumb_name = "Privacybeleid";
$cookies_breadcrumb_name = "Cookiebeleid";
$aml_breadcrumb_name = "AML-beleid";
$risk_breadcrumb_name = "Risicoverklaring";
$exchanges_breadcrumb_name = "Ondersteunde beurzen";

$hero_text = "Ervaar een nieuw tijdperk van handel met ons geavanceerde crypto-handelsplatform. Met $site_name AI-technologie kunt u uw rendement optimaliseren en weloverwogen investeringsbeslissingen nemen.";


// HEADER / NAV / FOOTER
$logo_subtitle = "AI Handelsinfrastructuur";
$nav_signals = "Signalen";
$nav_reviews = "Beoordelingen";
$nav_about = "Over";
$nav_exchanges = "Beurzen";
$nav_exchanges_full = "Ondersteunde beurzen";
$nav_risk = "Risico";
$nav_risk_full = "Risicoverklaring";
$nav_faq = "FAQ";
$nav_privacy = "Privacybeleid";
$nav_terms = "Algemene voorwaarden";
$nav_cookies = "Cookiebeleid";
$nav_cookies_short = "Cookies";
$nav_aml = "AML-beleid";
$nav_contact_us = "Neem contact op";
$nav_contact = "Contact";
$nav_get_started = "Aan de slag";
$header_ai_status = "AI-kern operationeel";
$header_menu_aria = "Menu";
$footer_platform = "Platform";
$footer_resources = "Bronnen";
$footer_contact_title = "Contact";
$footer_ai_signals = "AI-signalen";
$footer_about_link = "Over $site_name";
$footer_description = "$site_name is een geavanceerde AI-aangedreven crypto-handelsinfrastructuur gericht op voorspellende analyses, institutionele marktintelligentie, volatiliteitsmodellering, neurale uitvoeringssystemen en geautomatiseerd risicobeheer.";
$footer_monitoring = "24/7 AI-infrastructuur monitoring";
$footer_global_markets = "Wereldwijde markten voor digitale activa";
$footer_disclaimer_title = "Risicoverklaring";
$footer_disclaimer_p1 = "De handel in cryptocurrencies en investeren in digitale activa brengen aanzienlijke financiële risico's met zich mee en zijn mogelijk niet geschikt voor alle beleggers. Marktvolatiliteit, liquiditeitsproblemen, technologische storingen, wijzigingen in de regelgeving en macro-economische omstandigheden kunnen de prestaties van activa aanzienlijk beïnvloeden.";
$footer_disclaimer_p2 = "$site_name biedt een AI-gestuurde analytische infrastructuur, voorspellende marktintelligentie en geautomatiseerde handelstechnologieën. Niets op deze website vormt financieel, fiscaal, juridisch of investeringsadvies.";
$footer_disclaimer_p3 = "In het verleden behaalde resultaten bieden geen garantie voor de toekomst. Gebruikers dienen de risico's onafhankelijk te evalueren alvorens zich bezig te houden met cryptocurrency-markten of geautomatiseerde handelssystemen.";
$footer_rights = "Alle rechten voorbehouden.";
$footer_lang_label = "Taal";



// HOME FORM
$home_form_fname = "Voornaam";
$home_form_lname = "Achternaam";
$home_form_email = "E-mailadres";
$home_form_submit_access = "Toegang krijgen";
$home_form_submit_platform = "Platformtoegang aanvragen";

// CONTACT FORM
$contact_form_fname = "Voornaam";
$contact_form_lname = "Achternaam";
$contact_form_email = "E-mailadres";
$contact_form_submit = "Toegang aanvragen";


// HOME LABELS
$home_label_ai_confidence = "AI-zekerheid";
$home_label_update_speed = "Updatesnelheid";
$home_label_market_mode = "Marktmodus";
$home_label_market_condition = "Marktconditie";
$home_label_buyer_activity = "Kopersactiviteit";
$home_label_market_activity = "Marktactiviteit";
$home_label_risk_level = "Risiconiveau";
$home_label_updated = "Bijgewerkt";
$home_label_live_analysis = "LIVE ANALYSE";

// JS
$home_js_sec_ago = "sec geleden";
$js_sec_ago = "sec geleden";
$js_close_notification = "Melding sluiten";

$js_signal_long_direction = "Kans op opwaartse trend neemt toe";
$js_signal_long_market = "Gecontroleerde expansie";
$js_signal_long_pressure_label = "Liquiditeitsdruk";
$js_signal_long_pressure = "Bullish";

$js_signal_short_direction = "Neerwaartse druk neemt toe";
$js_signal_short_market = "Hoge instabiliteit";
$js_signal_short_pressure_label = "Risicodruk";
$js_signal_short_pressure = "Bearish";

$js_signal_watch_direction = "Consolidatiezone gedetecteerd";
$js_signal_watch_market = "Neutrale consolidatie";
$js_signal_watch_pressure_label = "Institutionele stroom";
$js_signal_watch_pressure = "Stabiel";

$js_hero_long_pair = "BTC/USD Momentum expansie";
$js_hero_long_regime = "Bullish";
$js_hero_long_feed_1 = "BTC liquiditeitsexpansie gedetecteerd";
$js_hero_long_feed_2 = "Orderflowdruk wordt positief";
$js_hero_long_feed_3 = "AI-model bevestigt opwaartse voortzetting";

$js_hero_watch_pair = "ETH/USD Volatiliteitscompressie";
$js_hero_watch_regime = "Neutraal";
$js_hero_watch_feed_1 = "ETH compressiezone gedetecteerd";
$js_hero_watch_feed_2 = "AI wacht op sterkere bevestiging";
$js_hero_watch_feed_3 = "Liquiditeit blijft stabiel";

$js_hero_short_pair = "SOL/USD Risico-expansie";
$js_hero_short_regime = "Risk-Off";
$js_hero_short_feed_1 = "SOL neerwaartse druk gedetecteerd";
$js_hero_short_feed_2 = "Risicomodel signaleert volatiliteitsexpansie";
$js_hero_short_feed_3 = "AI vermindert bullish exposure";

// JS — live user popup actions
$js_live_action_1 = "is lid geworden van $site_name vanuit";
$js_live_action_2 = "vroeg platformtoegang aan vanuit";
$js_live_action_3 = "startte AI-signaalmonitoring vanuit";
$js_live_action_4 = "activeerde marktanalyse vanuit";
$js_live_action_5 = "opende het institutionele dashboard vanuit";
$js_live_action_6 = "maakte verbinding met $site_name vanuit";


// HOME PAGE
$home_hero_label = "AI Crypto Platform Voor Elk Ervaringsniveau";
$home_hero_title = "$site_name Platform";
$home_hero_desc = "$site_name helpt beginners en ervaren handelaren de cryptomarkten te verkennen met AI-aangedreven inzichten, realtime marktmonitoring, risicobewustzijnstools en begeleide platformondersteuning.";
$home_hero_feat_1 = "Eenvoudige AI-marktinzichten voor nieuwe gebruikers";
$home_hero_feat_2 = "Realtime cryptomonitoring en signaalupdates";
$home_hero_feat_3 = "Risicobewuste tools voor slimmere beslissingen";
$home_hero_feat_4 = "Geavanceerde analyses voor ervaren handelaren";
$home_btn_request_access = "Krijg platformtoegang";
$home_btn_view_signals = "Bekijk AI-signalen";
$home_trust_data_label = "Marktdatapunten Geanalyseerd";
$home_trust_confidence_label = "Gemiddelde Signaal Zekerheid";
$home_trust_monitoring_label = "AI Marktmonitoring";
$home_terminal_title = "$site_name Begeleide AI Marktkijk";
$home_terminal_insight_label = "Huidig AI Marktinzicht";
$home_terminal_feed_1 = "BTC marktactiviteit toont sterker momentum";
$home_terminal_feed_2 = "ETH beweging wordt gecontroleerd op bevestiging";
$home_terminal_feed_3 = "AI-assistent benadrukt een mogelijke kansenzone";
$home_trust_strip_1 = "AI-inzichten voor beginners en ervaren handelaren";
$home_trust_strip_2 = "24/7 Monitoring van cryptomarkten";
$home_trust_strip_3 = "Realtime Risico- en Kansenanalyse";
$home_trust_strip_4 = "Begeleide Toegang Tot Geavanceerde Handelstools";
$home_signals_eyebrow = "$site_name LIVE AI KERN";
$home_signals_title = "Realtime AI Marktsignalen Voor Slimmere Crypto Beslissingen";
$home_signals_desc = "$site_name monitort continu de marktactiviteit van cryptocurrencies, volatiliteit, liquiditeitsomstandigheden, sentimenttrends en blockchain-data om AI-aangedreven inzichten en realtime marktsignalen te genereren voor zowel beginners als ervaren handelaren.";
$home_signals_terminal_title = "$site_name AI Signaal Engine";
$home_signal_btc_sub = "Positief Momentum Gedetecteerd";
$home_signal_btc_dir = "Kans op opwaartse trend neemt toe";
$home_signal_btc_market = "Positief Momentum";
$home_signal_btc_activity = "Sterk";
$home_signal_eth_sub = "Wachten Op Marktbevestiging";
$home_signal_eth_dir = "Zijwaartse beweging gedetecteerd";
$home_signal_eth_market = "Neutrale Trend";
$home_signal_eth_activity = "Stabiel";
$home_signal_sol_sub = "Verhoogd Marktrisico Gedetecteerd";
$home_signal_sol_dir = "Neerwaartse druk neemt toe";
$home_signal_sol_market = "Hoge Volatiliteit";
$home_signal_sol_risk = "Verhoogd";
$home_why_eyebrow = "WAAROM $site_name?";
$home_why_title = "AI-Aangedreven Crypto Tools Gebouwd Voor Elk Ervaringsniveau";
$home_why_desc_1 = "$site_name helpt gebruikers de cryptocurrency-markten beter te begrijpen door middel van kunstmatige intelligentie, realtime monitoring, marktinzichten en risicobewustzijnstools. Of u nu voor het eerst crypto verkent of al handelservaring heeft, het platform is ontworpen om marktanalyse toegankelijker en begrijpelijker te maken.";
$home_why_desc_2 = "De infrastructuur van $site_name evalueert voortdurend marktactiviteit, prijsbewegingen, liquiditeitsomstandigheden, sentimenttrends en blockchain-data om nieuwe kansen en veranderende marktomstandigheden te identificeren. Nieuwe gebruikers kunnen profiteren van begeleide platformondersteuning, terwijl ervaren handelaren geavanceerde analysetools en AI-gestuurde marktintelligentie kunnen verkennen.";
$home_flow_1 = "Marktmonitoring";
$home_flow_2 = "AI Analyse";
$home_flow_3 = "Kansendetectie";
$home_flow_4 = "Risico-evaluatie";
$home_flow_5 = "Bruikbare Inzichten";
$home_reviews_eyebrow = "$site_name GEMEENSCHAP";
$home_reviews_title = "Wat Gebruikers Zeggen Over $site_name";
$home_reviews_desc = "Van beginnende cryptogebruikers tot ervaren handelaren, mensen gebruiken $site_name om marktomstandigheden beter te begrijpen, AI-aangedreven inzichten te verkennen en cryptobeslissingen met meer duidelijkheid te benaderen.";
$home_review_1_text = "Voordat ik $site_name ontdekte, voelde ik me overweldigd door de hoeveelheid informatie in de cryptoruimte. Elk platform leek ingewikkeld en ik was constant bang om fouten te maken. Wat ik het meest waardeer aan $site_name, is hoe toegankelijk alles aanvoelt. De AI-inzichten hielpen me de marktomstandigheden te begrijpen zonder me verloren te voelen, en het platform gaf me het vertrouwen om in mijn eigen tempo te leren. Ik ben echt dankbaar voor hoe veel gemakkelijker de ervaring werd vergeleken met wat ik had verwacht.";
$home_review_1_tag = "Veilige & Makkelijke Start";
$home_review_badge = "GEVERIFIEERDE GEBRUIKER";
$home_review_2_text = "Ik heb maandenlang naar cryptoplatformen gekeken zonder me ooit comfortabel genoeg te voelen om de eerste stap te zetten. $site_name heeft die ervaring volledig veranderd. Het platform maakte marktinformatie gemakkelijker te begrijpen en ik had nooit het gevoel dat ik jaren aan handelservaring nodig had om de tools te gebruiken. Wat me het meest opviel was de balans tussen eenvoud en krachtige AI-analyse. Het voelt alsof je begeleiding hebt wanneer je het nodig hebt. Ik ben blij dat ik een platform heb gevonden dat me hielp leren zonder geïntimideerd te raken.";
$home_review_2_tag = "Gemakkelijkere leerervaring";
$home_review_3_text = "Ik heb veel marktanalyseplatformen getest, en $site_name valt op omdat het toegankelijkheid balanceert met serieuze analytische diepgang. Nieuwe gebruikers begrijpen het platform snel, terwijl ervaren handelaren nog steeds nuttige AI-gestuurde marktsignalen, risicomonitoring en realtime crypto-intelligentie krijgen. Die balans is moeilijk te vinden. Het platform levert zinvolle marktcontext zonder gebruikers te overweldigen, iets wat maar weinig cryptotools bereiken.";
$home_review_3_tag = "Geavanceerde tools met eenvoudige bruikbaarheid";
$home_review_span_1 = "Nieuwe Crypto Gebruiker";
$home_review_span_2 = "Eerste Keer Platformgebruiker";
$home_review_span_3 = "Professionele Crypto Handelaar";
$home_review_1_avatar_alt = "Lars de Boer, $site_name gebruiker";
$home_review_2_avatar_alt = "Bram Visser, $site_name gebruiker";
$home_review_3_avatar_alt = "Daan Jansen, $site_name gebruiker";
$home_hero_visual_alt = "AI-aangedreven marktanalysedashboard op $site_name";
$home_signal_visual_alt = "Realtime handelssignaal gegenereerd door $site_name AI";
$home_device_visual_alt = "Crypto-analyses weergegeven op een aangesloten apparaat via $site_name";
$home_security_visual_alt = "Beveiligingsschild dat $site_name accountbeveiliging vertegenwoordigt";
$home_contact_eyebrow = "GA AAN DE SLAG MET $site_name";
$home_contact_title = "Verken Het Platform Met Vertrouwen";
$home_contact_desc_1 = "Of u nu helemaal nieuw bent in de cryptomarkten of al handelservaring heeft, $site_name biedt toegang tot AI-aangedreven marktinzichten, realtime monitoringtools en intelligente analyses ontworpen om gebruikers te helpen de kansen in digitale activa beter te begrijpen.";
$home_contact_desc_2 = "Dien uw gegevens in om meer te weten te komen over het platform, beschikbare functies te verkennen en te ontdekken hoe $site_name u kan helpen navigeren op de cryptocurrency-markten via geavanceerde technologie en begeleide platformondersteuning.";
$home_seo_toggle = "Lees Meer Over Het $site_name AI Platform";
$home_seo_h2 = "$site_name AI Platform Voor Slimmere Crypto Marktbeslissingen";
$home_seo_p1 = "$site_name is een AI-aangedreven cryptocurrency-platform ontworpen voor zowel beginners als ervaren handelaren. Het platform combineert kunstmatige intelligentie, realtime marktmonitoring en geavanceerde analytische tools om gebruikers te helpen de markten voor digitale activa beter te begrijpen en potentiële kansen te identificeren.";
$home_seo_p2 = "In tegenstelling tot veel traditionele handelsplatforms die uitgebreide marktkennis vereisen, is $site_name gebouwd om complexe marktinformatie gemakkelijker te begrijpen. Het platform analyseert continu crypto-activiteit, prijsbewegingen, sentimenttrends, liquiditeitsomstandigheden en blockchain-data, en transformeert grote hoeveelheden informatie in praktische inzichten.";
$home_seo_p3 = "Of u nu voor de eerste keer cryptocurrency-markten verkent of al ervaring heeft met de handel in digitale activa, $site_name biedt intelligente tools die slimmere besluitvorming ondersteunen, terwijl het zich in realtime aanpast aan veranderende marktomstandigheden.";
$home_seo_h3_1 = "AI Marktanalyse Toegankelijk Gemaakt";
$home_seo_h3_1_p1 = "$site_name gebruikt kunstmatige intelligentie om een breed scala aan marktindicatoren te evalueren, waaronder handelsactiviteit, volatiliteitspatronen, liquiditeitsomstandigheden, blockchain-evenementen en marktsentiment. Door continu informatie te verwerken, helpt het platform gebruikers een beter begrip te krijgen van actueel marktgedrag.";
$home_seo_h3_1_p2 = "De AI-modellen zijn ontworpen om zich aan te passen aan veranderende omgevingen in plaats van te vertrouwen op statische aannames. Hierdoor kan het platform dynamisch reageren op veranderende cryptotrends en opkomende marktkansen.";
$home_seo_h3_1_p3 = "Hoewel geavanceerd genoeg voor ervaren handelaren, is het platform ook zo gestructureerd dat het toegankelijk blijft voor nieuwe gebruikers die AI-gestuurde marktintelligentie willen zonder diepgaande technische expertise nodig te hebben.";
$home_seo_h3_2 = "Realtime AI Marktsignalen";
$home_seo_h3_2_p1 = "$site_name monitort voortdurend de cryptocurrency-markten en genereert AI-aangedreven inzichten op basis van veranderende marktactiviteit. Het platform evalueert momentum, volatiliteit, liquiditeitsomstandigheden en breder marktgedrag om realtime analytische signalen te leveren.";
$home_seo_h3_2_p2 = "Bitcoin, Ethereum, Solana, XRP, Avalanche en andere belangrijke digitale activa worden gemonitord via adaptieve analytische modellen die zich automatisch aanpassen aan veranderende marktomstandigheden.";
$home_seo_h3_2_p3 = "In plaats van te vertrouwen op één enkele indicator of geïsoleerde metriek, combineert $site_name meerdere informatiebronnen in een breder analytisch kader dat ontworpen is om een completer beeld van de marktomstandigheden te bieden.";
$home_seo_h3_3 = "Intelligente Risicobewustzijn Tools";
$home_seo_h3_3_p1 = "Cryptocurrency-markten kunnen snel veranderen. $site_name bevat AI-aangedreven monitoringsystemen ontworpen om ongebruikelijke volatiliteit, veranderende liquiditeitsomstandigheden en opkomende marktrisico's te identificeren.";
$home_seo_h3_3_p2 = "Het platform evalueert continu marktgedrag en potentiële risicofactoren, waardoor gebruikers veranderende omstandigheden beter kunnen begrijpen en beter geïnformeerde beslissingen kunnen nemen.";
$home_seo_h3_3_p3 = "Door meerdere analyselagen te combineren, streeft $site_name ernaar het marktbewustzijn te verbeteren en gebruikers te helpen periodes van verhoogde onzekerheid met meer vertrouwen te navigeren.";
$home_seo_h3_4 = "Ontworpen Voor Moderne Cryptocurrency Markten";
$home_seo_h3_4_p1 = "$site_name combineert kunstmatige intelligentie, realtime monitoringtechnologieën en geavanceerde analytische tools in één enkel platform, ontworpen voor de moderne markten van digitale activa.";
$home_seo_h3_4_p2 = "De infrastructuur evalueert voortdurend marktactiviteit, blockchain-ontwikkelingen, stemmingswisselingen en liquiditeitstrends om een uitgebreid overzicht van het crypto-marktgedrag te bieden.";
$home_seo_h3_4_p3 = "Naarmate de markten voor digitale activa blijven evolueren, kunnen AI-aangedreven tools gebruikers helpen informatie efficiënter te verwerken en steeds complexere marktomgevingen beter te begrijpen. $site_name is ontworpen om deze mogelijkheden toegankelijk te maken voor een bredere groep marktdeelnemers.";
$home_seo_side_1_label = "AI Inzichten";
$home_seo_side_1_title = "Makkelijk Te Begrijpen Marktanalyse";
$home_seo_side_1_desc = "AI-aangedreven inzichten ontworpen voor zowel nieuwe als ervaren crypto-gebruikers.";
$home_seo_side_2_label = "Marktmonitoring";
$home_seo_side_2_title = "Realtime Crypto Tracking";
$home_seo_side_2_desc = "Continue monitoring van de belangrijkste cryptocurrency-markten en veranderende marktomstandigheden.";
$home_seo_side_3_label = "Risicobewustzijn";
$home_seo_side_3_title = "Intelligente Risicodetectie";
$home_seo_side_3_desc = "Geavanceerde monitoringtools ontworpen om veranderende marktdynamiek en volatiliteit te benadrukken.";
$home_seo_side_4_label = "AI Technologie";
$home_seo_side_4_title = "Adaptieve Analytische Modellen";
$home_seo_side_4_desc = "Machine learning systemen die voortdurend marktgegevens en opkomende trends evalueren.";
$home_faq_eyebrow = "$site_name KENNISBANK";
$home_faq_title = "Veelgestelde Vragen Over $site_name";
$home_faq_desc = "Leer meer over hoe het platform werkt, voor wie het is ontworpen en hoe kunstmatige intelligentie gebruikers helpt de omstandigheden op de cryptocurrency-markt beter te begrijpen.";
$home_faq_q1 = "Heb ik handelservaring nodig om $site_name te gebruiken?";
$home_faq_a1 = "Nee. $site_name is ontworpen voor gebruikers met verschillende ervaringsniveaus, inclusief mensen die volledig nieuw zijn in de cryptomarkten. Het platform gebruikt AI-aangedreven inzichten en marktmonitoringtools om complexe informatie makkelijker te begrijpen.";
$home_faq_q2 = "Wat doet $site_name precies?";
$home_faq_a2 = "$site_name analyseert continu cryptocurrency-markten met behulp van kunstmatige intelligentie. Het platform evalueert marktactiviteit, volatiliteit, sentimenttrends, liquiditeitsomstandigheden en blockchain-data om realtime inzichten en analytische signalen te genereren.";
$home_faq_q3 = "Kunnen ervaren handelaren $site_name gebruiken?";
$home_faq_a3 = "Ja. Hoewel het platform beginnersvriendelijk is, biedt het ook geavanceerde analytische tools, AI-gestuurde marktintelligentie en realtime monitoringfuncties die waardevol kunnen zijn voor ervaren marktdeelnemers.";
$home_faq_q4 = "Welke cryptocurrencies monitort $site_name?";
$home_faq_a4 = "Het platform kan belangrijke digitale activa analyseren, zoals Bitcoin, Ethereum, Solana, XRP, Avalanche en andere veelverhandelde cryptocurrencies, afhankelijk van marktomstandigheden en beschikbare gegevensbronnen.";
$home_faq_q5 = "Hoe worden AI-signalen gegenereerd?";
$home_faq_a5 = "$site_name evalueert meerdere marktfactoren tegelijk, waaronder volatiliteit, handelsactiviteit, liquiditeitsomstandigheden, sentimenttrends en historisch marktgedrag. AI-modellen combineren deze invoer om veranderende marktomstandigheden en potentiële kansen te identificeren.";
$home_faq_q6 = "Biedt $site_name educatieve begeleiding?";
$home_faq_a6 = "Het platform is ontworpen om gebruikers de marktomstandigheden beter te laten begrijpen door AI-gestuurde analyses, vereenvoudigde inzichten en begeleide toegang tot platformfuncties. Nieuwe gebruikers kunnen cryptomarkten verkennen zonder geavanceerde technische kennis nodig te hebben.";
$home_cta_label = "AI Platform Gereed";
$home_cta_title = "Begin Vandaag Nog Met Het Verkennen Van $site_name";
$home_cta_desc = "Ontdek AI-aangedreven marktinzichten, realtime cryptomonitoring, intelligente risicobewustzijnstools en geavanceerde analyses ontworpen voor zowel beginners als ervaren handelaren.";
$home_ticker_text = "AI Marktmonitoring Actief • Realtime Cryptocurrency Analyse • Bitcoin Momentum Neemt Toe • Ethereum Consolidatie Gedetecteerd • Nieuwe Marktkansen Geïdentificeerd • Risicomonitoringsystemen Online • AI Inzichten Worden Continu Bijgewerkt • Ontworpen Voor Beginners & Ervaren Handelaren";





// ABOUT PAGE
$about_h1 = "Over $site_name";
$about_p1 = "$site_name is een kunstmatige intelligentie-infrastructuur van de volgende generatie die is ontworpen om marktdeelnemers te helpen het snel evoluerende cryptocurrency-ecosysteem beter te begrijpen. Door machine learning-technologieën, voorspellende analyses, marktintelligentiesystemen en realtime gegevensverwerking te combineren, biedt $site_name een uitgebreide omgeving voor het monitoren van activiteiten met digitale activa en het identificeren van zinvolle marktonwikkelingen.";
$about_p2 = "De cryptocurrency-markt opereert continu over meerdere beurzen, jurisdicties en liquiditeitsverschaffers. Elke seconde beïnvloeden duizenden variabelen de prijzen, volatiliteit, liquiditeitsomstandigheden en het sentiment van beleggers. $site_name is ontwikkeld met als doel deze complexe datastromen op een gestructureerde en schaalbare manier te verwerken.";
$about_h2_vision = "De Visie Achter $site_name";
$about_p_vision_1 = "Financiële markten zijn in toenemende mate datagedreven geworden. Traditionele analysemethoden worstelen vaak om gelijke tred te houden met de hoeveelheid informatie die wordt gegenereerd binnen moderne ecosystemen voor digitale activa. $site_name probeert deze kloof te overbruggen door de toepassing van geavanceerde computationele intelligentie, geautomatiseerde bewakingssystemen en adaptieve analytische modellen.";
$about_p_vision_2 = "De langetermijnvisie van $site_name is om transparante marktintelligentietools te bieden die gebruikers kunnen helpen de structuur van de cryptomarkt, risico-omstandigheden en opkomende trends beter te begrijpen.";
$about_h2_ai = "Kunstmatige Intelligentie Infrastructuur";
$about_p_ai_1 = "De kern van $site_name is een gelaagd kunstmatige intelligentiekader dat is ontworpen om informatie van talrijke marktbronnen tegelijkertijd te verwerken.";
$about_p_ai_2 = "Deze bronnen kunnen zijn:";
$about_li_1 = "Cryptocurrency prijsfeeds";
$about_li_2 = "Orderboekactiviteit";
$about_li_3 = "Gegevens over liquiditeitsbewegingen";
$about_li_4 = "Volatiliteitsindicatoren";
$about_li_5 = "Blockchain-transactiestatistieken";
$about_li_6 = "Marktsentimentsignalen";
$about_li_7 = "Macro-economische ontwikkelingen";
$about_li_8 = "Institutionele marktactiviteit";
$about_p_ai_3 = "Door continu relaties tussen deze variabelen te evalueren, probeert $site_name patronen te identificeren die waardevolle marktcontext kunnen bieden.";
$about_h2_risk = "Filosofie van Risicobewustzijn";
$about_p_risk_1 = "Verantwoorde deelname aan cryptomarkten vereist een duidelijk begrip van risico. $site_name benadrukt risicobewustzijn als een fundamenteel onderdeel van de analyse van digitale activa.";
$about_p_risk_2 = "Marktvolatiliteit, liquiditeitsschommelingen, beursspecifieke evenementen, regelgevende ontwikkelingen en bredere macro-economische omstandigheden kunnen allemaal de marktresultaten beïnvloeden. Gebruikers moeten daarom nooit uitsluitend vertrouwen op één enkele informatiebron bij het nemen van beslissingen.";
$about_h2_global = "Wereldwijde Markten voor Digitale Activa";
$about_p_global_1 = "Cryptomarkten opereren op wereldschaal en betrekken deelnemers uit diverse regio's, industrieën en economische omgevingen. De $site_name infrastructuur is ontworpen om meerdere marktsegmenten tegelijkertijd te monitoren, zodat gebruikers ontwikkelingen kunnen observeren in verschillende delen van het crypto-ecosysteem.";
$about_p_global_2 = "Dit bredere perspectief kan helpen het bewustzijn van veranderende marktomstandigheden en opkomende trends te verbeteren.";
$about_h2_why = "Waarom Gebruikers $site_name Verkennen";
$about_why_li_1 = "Geavanceerde AI-aangedreven marktintelligentie";
$about_why_li_2 = "Realtime cryptomonitoring";
$about_why_li_3 = "Analytische infrastructuur in institutionele stijl";
$about_why_li_4 = "Multi-factor marktevaluatie";
$about_why_li_5 = "Volatiliteits- en liquiditeitsmonitoring";
$about_why_li_6 = "Schaalbare onderzoekstools voor digitale activa";
$about_why_li_7 = "Risicobewuste analytische methodologie";
$about_h2_forward = "Vooruitkijken";
$about_p_forward_1 = "Naarmate de markten voor digitale activa volwassener worden, zal het belang van geavanceerde analytische infrastructuur naar verwachting toenemen. $site_name blijft zich richten op het ontwikkelen van technologieën die een dieper marktbegrip, grotere transparantie en beter geïnformeerde deelname binnen het cryptocurrency-ecosysteem ondersteunen.";
$about_p_forward_2 = "Door continue innovatie en doorlopend onderzoek, wil $site_name bijdragen aan een intelligentere en meer datagedreven toekomst voor de analyse van digitale activa.";


// CONTACT PAGE
$contact_h1 = "Contact $site_name";
$contact_intro_1 = "Neem contact op met het $site_name team om platformtoegang aan te vragen, informatie over onze AI-aangedreven cryptohandelsinfrastructuur op te vragen, of meer te leren over onze marktintelligentie-omgeving voor digitale activa.";
$contact_intro_2 = "Of u nu geautomatiseerde crypto-analyses, een institutionele signaalinfrastructuur, volatiliteitsmonitoring of multi-exchange marktintelligentie verkent, ons team kan helpen uw verzoek door te sturen naar de juiste afdeling.";
$contact_h2_help = "Hoe We Kunnen Helpen";
$contact_li_1 = "Verzoeken om platformtoegang";
$contact_li_2 = "Algemene productvragen";
$contact_li_3 = "Informatie over AI-handelsinfrastructuur";
$contact_li_4 = "Onderzoeken naar marktintelligentie voor digitale activa";
$contact_li_5 = "Vragen over risicoverklaring en naleving";
$contact_li_6 = "Technische of onboarding assistentie";
$contact_h2_send = "Een Aanvraag Indienen";
$contact_p_send = "Vul onderstaand formulier in en een vertegenwoordiger van $site_name kan contact met u opnemen met aanvullende informatie.";
$contact_h2_info = "Contactgegevens";
$contact_support_label = "Algemene ondersteuning:";
$contact_institutional_label = "Institutionele aanvragen:";
$contact_disclaimer = "Let op: $site_name biedt geen gepersonaliseerd financieel, investerings-, fiscaal of juridisch advies. Alle informatie wordt uitsluitend voor technologische en informatieve doeleinden verstrekt.";

// TERMS PAGE
$terms_h1 = "Algemene Voorwaarden";
$terms_intro_1 = "Deze Algemene Voorwaarden regelen de toegang tot en het gebruik van de $site_name website, inhoud, platformbeschrijvingen, formulieren, communicatie en gerelateerde informatieve materialen.";
$terms_intro_2 = "Door deze website te openen, erkennen gebruikers dat ze deze Algemene Voorwaarden hebben gelezen, begrepen en ermee akkoord gaan. Als een gebruiker niet akkoord gaat met deze voorwaarden, dient hij het gebruik van de website te staken.";
$terms_h2_informational = "Informatief Doel";
$terms_p_info_1 = "$site_name biedt informatie over AI-aangedreven cryptohandelsinfrastructuur, marktintelligentie voor digitale activa, volatiliteitsmonitoring, liquiditeitsanalyse en gerelateerde technologieën.";
$terms_p_info_2 = "De inhoud van de website wordt uitsluitend ter informatie en technologische presentatie verstrekt. Niets op deze website mag worden geïnterpreteerd als financieel advies, investeringsadvies, juridisch advies, fiscaal advies of een garantie voor handelsresultaten.";
$terms_h2_no_advice = "Geen Financieel Advies";
$terms_p_no_advice_1 = "$site_name geeft geen gepersonaliseerde aanbevelingen met betrekking tot de vraag of gebruikers cryptovaluta, tokens, financiële producten of digitale activa moeten kopen, verkopen, aanhouden, verhandelen, staken, overdragen of er anderszins interactie mee moeten hebben.";
$terms_p_no_advice_2 = "Gebruikers dienen zelf alle informatie te evalueren en advies in te winnen van gekwalificeerde professionals voordat ze financiële beslissingen nemen.";
$terms_h2_user_responsibility = "Verantwoordelijkheid van de Gebruiker";
$terms_p_user_1 = "Gebruikers zijn verantwoordelijk voor hun eigen beslissingen, risicobeoordelingen, accountactiviteit, handelsacties, wettelijke naleving en het gebruik van diensten van derden.";
$terms_p_user_2 = "Gebruikers moeten ervoor zorgen dat activiteiten met digitale activa in hun rechtsgebied zijn toegestaan en dat zij alle toepasselijke risico's begrijpen voordat zij interageren met cryptomarkten.";
$terms_h2_ai = "AI En Analytische Systemen";
$terms_p_ai_1 = "$site_name kan kunstmatige intelligentiesystemen, voorspellende modellen, marktsignalen, geautomatiseerde analyses of uitvoeringsgerelateerde technologieën beschrijven.";
$terms_p_ai_2 = "Deze systemen kunnen steunen op marktgegevens, statistische modellen, machine learning-processen en informatiebronnen van derden. Dergelijke systemen kunnen onnauwkeurig, vertraagd, onvolledig, niet beschikbaar of ongeschikt zijn voor bepaalde gebruikersdoelstellingen.";
$terms_h2_availability = "Geen Garantie van Beschikbaarheid";
$terms_p_avail_1 = "$site_name garandeert geen ononderbroken toegang tot de website, continue beschikbaarheid van het platform, foutloze werking, accurate marktinformatie of beschikbaarheid van specifieke functies.";
$terms_p_avail_2 = "Diensten, inhoud, pagina's, formulieren, integraties of platformbeschrijvingen kunnen te allen tijde worden gewijzigd, opgeschort of stopgezet.";
$terms_h2_third_party = "Diensten van Derden";
$terms_p_tp_1 = "De website kan verwijzen naar externe beurzen, liquiditeitsplatformen, analyseaanbieders, communicatietools, hostingdiensten of aanbieders van technische infrastructuur.";
$terms_p_tp_2 = "$site_name controleert geen platformen van derden en is niet verantwoordelijk voor hun beschikbaarheid, vergoedingen, beleid, accountbeperkingen, nalevingsprocedures, technische storingen of gebruikersverliezen.";
$terms_h2_prohibited = "Verboden Gebruik";
$terms_p_prohibited = "Gebruikers mogen deze website of gerelateerde technologie niet gebruiken voor onwettige, misbruikende, frauduleuze, manipulatieve of schadelijke doeleinden.";
$terms_li_1 = "Pogingen tot ongeautoriseerde toegang";
$terms_li_2 = "Het indienen van onjuiste of misleidende informatie";
$terms_li_3 = "De website gebruiken voor illegale financiële activiteiten";
$terms_li_4 = "Verstoring van de veiligheid of functionaliteit van de website";
$terms_li_5 = "Het zonder toestemming kopiëren of misbruiken van website-inhoud";
$terms_li_6 = "Pogingen om nalevings- of technische controles te omzeilen";
$terms_h2_ip = "Intellectueel Eigendom";
$terms_p_ip_1 = "Websitedesign, tekst, branding, interface-elementen, grafische elementen, structuur en gerelateerde materialen zijn eigendom van of in licentie gegeven aan $site_name tenzij anders vermeld.";
$terms_p_ip_2 = "Gebruikers mogen websitematerialen niet reproduceren, distribueren, wijzigen of commercieel exploiteren zonder de juiste toestemming.";
$terms_h2_liability = "Beperking Van Aansprakelijkheid";
$terms_p_liab_1 = "Voor zover maximaal is toegestaan door de toepasselijke wetgeving, is $site_name niet aansprakelijk voor verliezen die voortvloeien uit de handel in digitale activa, marktvolatiliteit, technische problemen, storingen op platformen van derden, onnauwkeurige gegevens, gebruikersbeslissingen of het vertrouwen op website-inhoud.";
$terms_p_liab_2 = "Gebruikers bezoeken en gebruiken deze website op eigen risico.";
$terms_h2_changes = "Wijzigingen In Deze Voorwaarden";
$terms_p_changes_1 = "$site_name kan deze Algemene Voorwaarden te allen tijde bijwerken. Bijgewerkte voorwaarden kunnen op deze pagina worden geplaatst.";
$terms_p_changes_2 = "Voortgezet gebruik van de website na wijzigingen betekent dat gebruikers de bijgewerkte voorwaarden erkennen en accepteren.";

// PRIVACY PAGE
$privacy_h1 = "Privacybeleid";
$privacy_intro_1 = "$site_name respecteert de privacy van gebruikers en zet zich in om persoonlijke informatie op een verantwoorde, transparante en veilige manier te verwerken.";
$privacy_intro_2 = "Dit Privacybeleid legt uit welke informatie kan worden verzameld wanneer gebruikers deze website bezoeken, contactformulieren indienen, toegang aanvragen of interageren met de inhoud van $site_name en platformgerelateerde communicatie.";
$privacy_h2_collect = "Informatie Die We Kunnen Verzamelen";
$privacy_p_collect_1 = "$site_name kan informatie verzamelen die vrijwillig door gebruikers is ingediend via websiteformulieren of communicatiekanalen.";
$privacy_li_fname = "Voornaam";
$privacy_li_lname = "Achternaam";
$privacy_li_email = "E-mailadres";
$privacy_li_phone = "Telefoonnummer";
$privacy_li_inquiry = "Ingezonden aanvraagdetails";
$privacy_li_technical = "Basis technische website-gebruiksgegevens";
$privacy_h2_use = "Hoe We Informatie Gebruiken";
$privacy_p_use_1 = "Informatie kan worden gebruikt om te reageren op verzoeken van gebruikers, platformtoegangsinformatie te verstrekken, websitefunctionaliteit te verbeteren, veiligheid te handhaven en relevante updates over $site_name te communiceren.";
$privacy_p_use_2 = "We kunnen ook geaggregeerde of niet-identificerende gegevens gebruiken om de websiteprestaties te analyseren, de inhoudsstructuur te verbeteren en beter te begrijpen hoe bezoekers met onze pagina's omgaan.";
$privacy_h2_comm = "Communicatiedoeleinden";
$privacy_p_comm_1 = "Als een gebruiker contactgegevens indient, kan $site_name die informatie gebruiken om op de aanvraag te reageren, onboarding-details te verstrekken, platformtoegangsaanvragen te verduidelijken of relevante service-informatie te delen.";
$privacy_p_comm_2 = "Gebruikers kunnen verzoeken dat de communicatie wordt stopgezet waar van toepassing.";
$privacy_h2_cookies = "Cookies En Technische Gegevens";
$privacy_p_cookies_1 = "Deze website kan cookies, analysetools en vergelijkbare technologieën gebruiken om de browse-ervaring te verbeteren, de prestaties te bewaken en de veiligheid van de website te ondersteunen.";
$privacy_p_cookies_2 = "Technische gegevens kunnen omvatten: apparaattype, browsertype, besturingssysteem, pagina-interacties, verwijzingsinformatie en algemene gebruiksstatistieken.";
$privacy_h2_protection = "Maatregelen Gegevensbescherming";
$privacy_p_prot_1 = "$site_name past redelijke administratieve, technische en organisatorische maatregelen toe om ingediende informatie te beschermen tegen ongeautoriseerde toegang, misbruik, verlies of openbaarmaking.";
$privacy_p_prot_2 = "Geen enkel online systeem kan echter absolute veiligheid garanderen. Gebruikers moeten vermijden gevoelige financiële informatie, privé portemonneesleutels, wachtwoorden, beursgegevens of vertrouwelijke accounttoegangsdetails te verzenden via openbare websiteformulieren.";
$privacy_h2_third = "Externe Dienstverleners";
$privacy_p_third_1 = "$site_name kan externe leveranciers gebruiken voor hosting, analyse, communicatie, beveiliging, e-maillevering, CRM-verwerking of technische infrastructuur.";
$privacy_p_third_2 = "Deze aanbieders kunnen beperkte informatie alleen verwerken voor zover nodig is om de websitefunctionaliteit en gerelateerde diensten te ondersteunen.";
$privacy_google_choices = 'U kunt beheren hoe Google informatie uit uw bezoeken gebruikt via <a href="http://www.google.com/settings/ads" target="_blank" rel="noopener">Google Advertentie-instellingen</a>, u afmelden voor op interesses gebaseerde advertenties met de <a href="https://tools.google.com/dlpage/gaoptout" target="_blank" rel="noopener">Google Analytics Opt-out Browser Add-on</a>, of <a href="https://www.google.com/intl/en/policies/privacy/" target="_blank" rel="noopener">Google\'s Privacybeleid</a> raadplegen voor meer details.';
$privacy_h2_sale = "Geen Verkoop Van Persoonlijke Informatie";
$privacy_p_sale_1 = "$site_name is niet van plan persoonlijke informatie die via deze website is ingediend te verkopen.";
$privacy_p_sale_2 = "Informatie mag alleen worden gedeeld wanneer dat nodig is voor operationele doeleinden, wettelijke naleving, gebruikerscommunicatie, fraudepreventie of servicegerelateerde verwerking.";
$privacy_h2_retention = "Bewaartermijn";
$privacy_p_retention = "Persoonlijke informatie kan worden bewaard zolang als nodig is om vragen te beantwoorden, zakelijke gegevens bij te houden, te voldoen aan wettelijke verplichtingen, platformcommunicatie te verbeteren of de veiligheid en fraudepreventie te ondersteunen.";
$privacy_h2_rights = "Rechten Van De Gebruiker";
$privacy_p_rights = "Afhankelijk van de toepasselijke wetgeving, kunnen gebruikers rechten hebben met betrekking tot de toegang, correctie, verwijdering, bezwaar, beperking of overdraagbaarheid van persoonlijke informatie.";
$privacy_h2_intl = "Internationaal Gebruik";
$privacy_p_intl_1 = "$site_name kan worden benaderd door gebruikers uit verschillende rechtsgebieden. Privacyregels kunnen variëren per locatie.";
$privacy_p_intl_2 = "Door deze website te gebruiken, erkennen gebruikers dat informatie kan worden verwerkt in overeenstemming met dit Privacybeleid en de toepasselijke operationele vereisten.";
$privacy_h2_policy_updates = "Beleidsupdates";
$privacy_p_updates_1 = "$site_name kan dit Privacybeleid regelmatig bijwerken om wijzigingen in de wetgeving, technologie, interne procedures of websitefunctionaliteit weer te geven.";
$privacy_p_updates_2 = "Voortgezet gebruik van de website na updates betekent dat gebruikers het herziene Privacybeleid erkennen.";
// COOKIES PAGE
$cookies_h1 = "Cookiebeleid";
$cookies_intro_1 = "Dit Cookiebeleid legt uit hoe $site_name cookies, analysetechnologieën en vergelijkbare trackingtools gebruikt wanneer gebruikers toegang krijgen tot of interactie hebben met deze website.";
$cookies_intro_2 = "Cookies helpen de functionaliteit van de website te verbeteren, de gebruikerservaring te verbeteren, prestaties te analyseren en veiligheidsgerelateerde processen te ondersteunen.";
$cookies_intro_3 = "Door door te gaan met het gebruik van deze website, erkennen gebruikers dat bepaalde cookies en gerelateerde technologieën kunnen worden gebruikt in overeenstemming met dit beleid.";
$cookies_h2_what = "Wat Zijn Cookies?";
$cookies_p_what_1 = "Cookies zijn kleine tekstbestanden die op het apparaat van een gebruiker worden opgeslagen bij een bezoek aan een website.";
$cookies_p_what_2 = "Deze bestanden kunnen informatie bevatten die websites helpt terugkerende bezoekers te herkennen, voorkeuren te onthouden, navigatie te verbeteren en websiteprestaties te meten.";
$cookies_h2_why = "Waarom We Cookies Gebruiken";
$cookies_p_why_1 = "$site_name kan cookies en soortgelijke technologieën gebruiken voor verschillende doeleinden.";
$cookies_li_1 = "Handhaving van websitefunctionaliteit";
$cookies_li_2 = "Verbeteren van de gebruikerservaring";
$cookies_li_3 = "Onthouden van gebruikersvoorkeuren";
$cookies_li_4 = "Begrijpen van bezoekersgedrag";
$cookies_li_5 = "Meten van websiteprestaties";
$cookies_li_6 = "Identificeren van technische problemen";
$cookies_li_7 = "Ondersteuning van websiteveiligheid";
$cookies_li_8 = "Voorkomen van misbruik";
$cookies_h2_essential = "Essentiële Cookies";
$cookies_p_ess_1 = "Bepaalde cookies zijn noodzakelijk voor de goede werking van de website.";
$cookies_p_ess_2 = "Deze cookies helpen de beveiliging, navigatiefunctionaliteit, sessiebeheer en andere kernactiviteiten van de website in stand te houden.";
$cookies_p_ess_3 = "Zonder essentiële cookies zullen delen van de website mogelijk niet correct functioneren.";
$cookies_h2_analytics = "Analytische Cookies";
$cookies_p_an_1 = "Analytische cookies helpen ons te begrijpen hoe bezoekers omgaan met de inhoud van de website.";
$cookies_p_an_2 = "Deze technologieën kunnen informatie verzamelen over paginabezoeken, navigatiepatronen, apparaattypen, browserconfiguraties en algemene websitegebruiksstatistieken.";
$cookies_p_an_3 = "Analytische informatie wordt doorgaans geaggregeerd en gebruikt om de prestaties van de website en de gebruikerservaring te verbeteren.";
$cookies_h2_functional = "Functionele Cookies";
$cookies_p_fun_1 = "Functionele cookies kunnen worden gebruikt om de door de gebruiker gekozen instellingen en voorkeuren te onthouden.";
$cookies_p_fun_2 = "Voorbeelden hiervan kunnen zijn: taalvoorkeuren, interface-instellingen, weergave-opties of andere aanpassingsfuncties.";
$cookies_h2_third = "Technologieën van Derden";
$cookies_p_third_1 = "$site_name kan externe dienstverleners, analyseplatforms, reclametechnologieën of tools voor prestatiemonitoring inzetten.";
$cookies_p_third_2 = "Deze derde partijen kunnen hun eigen cookies of trackingtechnologieën plaatsen met inachtneming van hun individuele privacybeleid.";
$cookies_p_third_3 = "$site_name heeft geen controle over het cookiebeleid van derden en raadt aan de privacydocumentatie van externe leveranciers te bekijken waar van toepassing.";
$cookies_h2_manage = "Cookies Beheren";
$cookies_p_manage_1 = "De meeste moderne browsers staan gebruikers toe om cookies te beheren, te beperken of te verwijderen via browserinstellingen.";
$cookies_p_manage_2 = "Gebruikers kunnen ervoor kiezen cookies volledig uit te schakelen, hoewel bepaalde websitefuncties na het uitschakelen mogelijk niet meer werken zoals bedoeld.";
$cookies_p_manage_3 = "Browserinstellingen bieden doorgaans opties om:";
$cookies_li_manage_1 = "Alle cookies te blokkeren";
$cookies_li_manage_2 = "Bestaande cookies te verwijderen";
$cookies_li_manage_3 = "Cookiemeldingen te ontvangen";
$cookies_li_manage_4 = "Specifieke cookiecategorieën te beperken";
$cookies_h2_data = "Gegevensbescherming";
$cookies_p_data = "Cookiegerelateerde informatie kan worden verwerkt in overeenstemming met ons Privacybeleid en toepasselijke wetgeving op het gebied van gegevensbescherming.";
$cookies_h2_policy_updates = "Beleidsupdates";
$cookies_p_updates_1 = "$site_name kan dit Cookiebeleid regelmatig bijwerken om technologische veranderingen, wettelijke vereisten of operationele verbeteringen weer te geven.";
$cookies_p_updates_2 = "Voortgezet gebruik van de website na updates geldt als erkenning van het herziene beleid.";
// AML PAGE
$aml_h1 = "AML-beleid";
$aml_intro_1 = "$site_name erkent het belang van bewustwording inzake het tegengaan van witwassen (AML), financiële integriteit en verantwoorde deelname aan markten voor digitale activa.";
$aml_intro_2 = "Dit AML-beleid legt de algemene principes uit die $site_name toepast om onwettig gebruik van crypto-gerelateerde technologieën, verdachte financiële activiteiten, fraude, ontduiking van sancties, terrorismefinanciering en ander verboden gedrag te ontmoedigen.";
$aml_h2_purpose = "Doel Van Dit Beleid";
$aml_p_purpose_1 = "Het doel van dit beleid is om een verantwoord kader te creëren voor de manier waarop $site_name omgaat met AML-bewustzijn binnen het ecosysteem van digitale activa.";
$aml_p_purpose_2 = "Cryptocurrency-markten kunnen grensoverschrijdende activiteiten, gedecentraliseerde infrastructuur, externe beurzen en externe portemonneesystemen met zich meebrengen. Daarom moeten gebruikers begrijpen dat nalevingsverplichtingen kunnen variëren afhankelijk van hun jurisdictie, accounttype, uitwisselingsaanbieder en lokale regelgeving.";
$aml_h2_responsible = "Verantwoord Gebruik Van Digitale Activa Technologie";
$aml_p_resp_1 = "Van gebruikers wordt verwacht dat ze verantwoord, wettig en in overeenstemming met toepasselijke regels omgaan met $site_name en eventuele gerelateerde diensten voor digitale activa.";
$aml_p_resp_2 = "$site_name ondersteunt of moedigt het gebruik van cryptomarkten, handelssystemen, geautomatiseerde technologieën of analytische tools voor onwettige doeleinden niet aan.";
$aml_li_1 = "Witwassen";
$aml_li_2 = "Financiering van terrorisme";
$aml_li_3 = "Fraude of financieel bedrog";
$aml_li_4 = "Sanctie-ontwijking";
$aml_li_5 = "Marktmanipulatie";
$aml_li_6 = "Gebruik van gestolen fondsen of gehackte accounts";
$aml_li_7 = "Elke activiteit die verboden is door de toepasselijke wetgeving";
$aml_h2_exchange = "Naleving Externe Beurzen";
$aml_p_ex_1 = "$site_name kan verwijzen naar, interageren met, of analytische infrastructuur bieden die verband houdt met externe platforms voor digitale activa of liquiditeitsomgevingen.";
$aml_p_ex_2 = "Externe beurzen, bewaarders, betalingsverwerkers en dienstverleners kunnen hun eigen nalevingsprocedures toepassen, waaronder identiteitsverificatie, transactiemonitoring, sanctiescreening, accountbeperkingen, controles van de herkomst van fondsen of aanvullende verificatievereisten.";
$aml_h2_user_responsibility = "Verantwoordelijkheid Van De Gebruiker";
$aml_p_user_1 = "Gebruikers zijn ervoor verantwoordelijk dat hun activiteit wettig is in hun locatie en in overeenstemming is met eventuele verplichtingen opgelegd door relevante toezichthouders, beurzen, financiële instellingen of dienstverleners.";
$aml_p_user_2 = "Gebruikers mogen niet proberen om eigendom te verbergen, de oorsprong van transacties te verhullen, valse informatie te verstrekken, verificatieprocessen te omzeilen of infrastructuur voor digitale activa te gebruiken op een manier die als verdacht of onwettig kan worden beschouwd.";
$aml_h2_suspicious = "Verdachte Activiteit";
$aml_p_suspicious = "Verdachte activiteit kan gedrag omvatten dat niet consistent lijkt met normaal gebruik, pogingen om handelssystemen te misbruiken, herhaalde indiening van misleidende informatie, betrokkenheid bij beperkte jurisdicties of activiteit die verband houdt met fraude, illegale fondsen of verboden diensten.";
$aml_h2_evasion = "Geen Ontduiking Of Omzeiling";
$aml_p_evasion = "Gebruikers mogen niet proberen om compliance-controles, technische restricties, identiteitsverificatiesystemen, geografische beperkingen of processen voor risicomonitoring te omzeilen.";
$aml_h2_policy_updates = "Beleidsupdates";
$aml_p_updates_1 = "$site_name kan dit AML-beleid van tijd tot tijd bijwerken om wijzigingen in verwachtingen van de regelgever, marktstandaarden, interne procedures of praktijken in de sector van digitale activa weer te geven.";
$aml_p_updates_2 = "Voortgezet gebruik van de website na updates betekent dat gebruikers het herziene beleid erkennen.";
// RISK PAGE
$risk_h1 = "Risicoverklaring";
$risk_intro_1 = "De handel in cryptocurrency en deelname aan digitale activa brengt aanzienlijke risico's met zich mee. Prijzen kunnen snel veranderen, liquiditeit kan onverwachts veranderen en de marktomstandigheden kunnen binnen een korte periode zeer instabiel worden.";
$risk_intro_2 = "Deze risicoverklaring legt belangrijke overwegingen uit die gebruikers moeten doornemen voordat ze interageren met de markten voor digitale activa, geautomatiseerde handelstechnologieën, AI-gegenereerde marktsignalen of crypto-gerelateerde analytische infrastructuur.";
$risk_h2_no_guarantee = "Geen Gegarandeerde Resultaten";
$risk_p_no_guarantee_1 = "$site_name garandeert geen winsten, beleggingsrendementen, handelssucces, nauwkeurigheid van de signalen, ononderbroken toegang of positieve financiële resultaten.";
$risk_p_no_guarantee_2 = "Alle voorbeelden, statistieken, interface-elementen, prestatiemetrics, signaalindicatoren of marktsimulaties die op deze website worden weergegeven, zijn uitsluitend bedoeld voor informatieve en illustratieve doeleinden.";
$risk_h2_volatility = "Volatiliteit Van De Cryptocurrency Markt";
$risk_p_vol_1 = "Markten voor digitale activa zijn zeer volatiel. Prijzen kunnen worden beïnvloed door liquiditeitstekorten, macro-economisch nieuws, ontwikkelingen op het gebied van regelgeving, storingen bij beurzen, blockchain-gebeurtenissen, het sentiment van beleggers, leverage-activiteiten of marktmanipulatie.";
$risk_p_vol_2 = "Volatiliteit kan leiden tot snelle verliezen, plotselinge prijsgaten, slippage, liquidatie-evenementen of het onvermogen om transacties uit te voeren tegen verwachte prijzen.";
$risk_h2_ai = "Beperkingen Van AI-signalen";
$risk_p_ai_1 = "Kunstmatige intelligentiesystemen kunnen grote hoeveelheden marktgegevens analyseren, maar ze kunnen onzekerheid niet uitsluiten.";
$risk_p_ai_2 = "Door AI aangedreven indicatoren, handelssignalen, marktclassificaties en voorspellende modellen kunnen onvolledig, vertraagd, onjuist of ongeschikt zijn voor de persoonlijke financiële situatie van een gebruiker.";
$risk_p_ai_3 = "Gebruikers mogen bij het nemen van handels-, investerings- of financiële beslissingen niet uitsluitend vertrouwen op enig AI-signaal.";
$risk_h2_tech = "Technologie- En Uitvoeringsrisico";
$risk_p_tech_1 = "Handelstechnologie kan worden beïnvloed door problemen met internetconnectiviteit, serveronderbrekingen, latentie, softwarefouten, API-storingen, uitval van beurzen, onjuiste datafeeds of beperkingen van de infrastructuur van derden.";
$risk_p_tech_2 = "$site_name garandeert geen ononderbroken toegang tot gegevens, signalen, platformfuncties, systemen van derden of uitvoeringsomgevingen.";
$risk_h2_liquidity = "Liquiditeits- En Beursrisico";
$risk_p_liq_1 = "Liquiditeit kan aanzienlijk variëren tussen beurzen en digitale activa. Sommige markten kunnen lage orderboekdiepte, brede spreads, vertraagde uitvoering of sterke prijsbewegingen ervaren in tijden van stress.";
$risk_p_liq_2 = "Externe beurzen kunnen vergoedingen, limieten, beperkingen, accountbeoordelingen, vertragingen bij opnames, handelsopschortingen of geografische beperkingen opleggen.";
$risk_h2_regulatory = "Regelgevend Risico";
$risk_p_reg_1 = "Regelgeving voor digitale activa kan snel veranderen en kan verschillen per land, regio en jurisdictie.";
$risk_p_reg_2 = "Wijzigingen in de regelgeving kunnen van invloed zijn op markttoegang, beschikbaarheid van activa, beursactiviteiten, rapportageverplichtingen, belastingen, handelsbeperkingen of de functionaliteit van het platform.";
$risk_h2_user_responsibility = "Verantwoordelijkheid Van De Gebruiker";
$risk_p_user_1 = "Gebruikers zijn als enige verantwoordelijk voor het beoordelen van risico's, het begrijpen van de toepasselijke wetgeving, het controleren van hun financiële omstandigheden en het nemen van onafhankelijke beslissingen.";
$risk_p_user_2 = "$site_name biedt geen gepersonaliseerd financieel, investerings-, juridisch, boekhoudkundig of fiscaal advies.";
$risk_h2_advice = "Win Professioneel Advies In";
$risk_p_advice_1 = "Gebruikers moeten overleggen met gekwalificeerde professionals voordat ze belangrijke financiële beslissingen nemen met betrekking tot cryptocurrencies, handelssystemen, geautomatiseerde technologieën of investeringen in digitale activa.";
$risk_p_advice_2 = "Door deze website te gebruiken, erkennen gebruikers dat zij de risico's verbonden aan de markten voor digitale activa begrijpen en de verantwoordelijkheid voor hun eigen beslissingen accepteren.";
// EXCHANGES PAGE
$exchanges_h1 = "Ondersteunde Beurzen";
$exchanges_intro_1 = "$site_name is ontworpen rond een multi-markt intelligente aanpak die activiteiten met digitale activa over een breed scala van cryptocurrency handelsomgevingen evalueert.";
$exchanges_intro_2 = "Moderne cryptomarkten opereren via talrijke beurzen, liquiditeitsverschaffers, derivatenplatforms en handelsecosystemen. Begrijpen van activiteit in deze omgevingen is essentieel voor het opbouwen van een alomvattende marktintelligentie.";
$exchanges_h2_philosophy = "Filosofie Van Marktdekking";
$exchanges_p_phil_1 = "In plaats van te vertrouwen op één enkel platform, is $site_name gebouwd rond het concept van marktbrede analyse.";
$exchanges_p_phil_2 = "Cryptocurrency-prijzen, liquiditeitsomstandigheden, volatiliteitsgedrag en institutionele activiteit verschillen vaak per beurs. Door bredere marktomstandigheden te observeren, kunnen analytische modellen extra context krijgen met betrekking tot opkomende trends en mogelijke afwijkingen.";
$exchanges_h2_spot = "Spotmarkt Monitoring";
$exchanges_p_spot_1 = "Spotbeurzen vertegenwoordigen een aanzienlijk deel van de wereldwijde activiteit op het gebied van digitale activa.";
$exchanges_p_spot_2 = "Marktintelligentiesystemen kunnen gegevens van de spotmarkt evalueren, waaronder:";
$exchanges_li_spot_1 = "Prijsactiviteit";
$exchanges_li_spot_2 = "Liquiditeitsdiepte";
$exchanges_li_spot_3 = "Orderboekstructuur";
$exchanges_li_spot_4 = "Handelsvolume";
$exchanges_li_spot_5 = "Gedrag bid-ask spread";
$exchanges_li_spot_6 = "Marktonbalans condities";
$exchanges_h2_deriv = "Derivatenmarkten";
$exchanges_p_deriv_1 = "Cryptocurrency-derivaten spelen een steeds belangrijkere rol binnen het bredere ecosysteem voor digitale activa.";
$exchanges_p_deriv_2 = "Futures, perpetual contracten, opties en handel met hefboomwerking kunnen marktsentiment, volatiliteitsomstandigheden en directioneel momentum beïnvloeden.";
$exchanges_p_deriv_3 = "De analytische infrastructuur kan gegevensgerelateerde informatie evalueren bij de beoordeling van de bredere marktomstandigheden.";
$exchanges_h2_liquidity = "Liquiditeitsanalyse";
$exchanges_p_liq_1 = "Liquiditeit blijft een van de belangrijkste factoren die marktstabiliteit en uitvoeringskwaliteit beïnvloeden.";
$exchanges_p_liq_2 = "$site_name kan de liquiditeitsomstandigheden op meerdere handelsplatforms analyseren om het volgende te identificeren:";
$exchanges_li_liq_1 = "Liquiditeitsconcentratie";
$exchanges_li_liq_2 = "Plotselinge opnames van liquiditeit";
$exchanges_li_liq_3 = "Druk op het orderboek";
$exchanges_li_liq_4 = "Evenementen met marktonbalans";
$exchanges_li_liq_5 = "Abnormaal handelsgedrag";
$exchanges_h2_availability = "Beschikbaarheid Van Beurzen";
$exchanges_p_avail_1 = "De beschikbaarheid van een beurs kan variëren afhankelijk van geografische locatie, jurisdictie, accountvoorwaarden, regelgevingseisen en technische beperkingen.";
$exchanges_p_avail_2 = "Bepaalde beurzen of diensten zijn mogelijk niet voor alle gebruikers beschikbaar en kunnen hun eigen beperkingen, verificatievereisten, vergoedingen en bedrijfsbeleid opleggen.";
$exchanges_h2_third = "Platforms Van Derden";
$exchanges_p_third_1 = "Eventuele verwijzingen naar beurzen, liquiditeitsplatformen, makelaars, beheerders of marktaanbieders zijn uitsluitend bedoeld ter informatie.";
$exchanges_p_third_2 = "$site_name bezit, beheert, controleert of garandeert de diensten van externe beurzen niet.";
$exchanges_p_third_3 = "Gebruikers blijven verantwoordelijk voor het evalueren van enige beurs, handelsplatform of dienst voor digitale activa voor gebruik.";
$exchanges_h2_monitoring = "Continue Marktmonitoring";
$exchanges_p_mon_1 = "Cryptocurrency-markten opereren continu, vaak vierentwintig uur per dag, zeven dagen per week.";
$exchanges_p_mon_2 = "Naarmate de marktstructuur zich ontwikkelt, verschijnen er nieuwe beurzen, migreert de liquiditeit en verandert de handelsactiviteit.";
$exchanges_p_mon_3 = "$site_name probeert continu op de hoogte te blijven van veranderende marktomstandigheden door middel van brede analytische dekking van het ecosysteem van digitale activa.";

// ==========================================
// RISK WARNING PAGE
// ==========================================
$page_title_risk_warning = "Risicowaarschuwing | $site_name";
$page_description_risk_warning = "Begrijp de risico's van geautomatiseerde cryptohandel met $site_name, waaronder marktvolatiliteit, uitvoeringsrisico en regelgeving.";
$risk_warning_breadcrumb_name = "Risicowaarschuwing";
$risk_warning_title = "Risicowaarschuwing";
$risk_warning_intro = "Het begrijpen van de risico's is de eerste stap naar vertrouwd handelen.";

$risk_warning_ai_heading = "Hoe Ons AI-systeem Helpt Het Risico Te Beheren:";
$risk_warning_ai_1 = "<strong>Algoritmische Efficiëntie & Emotieloos Handelen:</strong> Geavanceerde algoritmen analyseren marktsignalen om transacties objectief en op het optimale moment uit te voeren.";
$risk_warning_ai_2 = "<strong>Data-Gedreven Strategieën:</strong> Strategieën zijn gebaseerd op geverifieerde marktpatronen en realtime analyse in plaats van giswerk.";
$risk_warning_ai_3 = "<strong>Flexibele Instellingen & Volledige Controle:</strong> Pas uw risicoparameters op elk moment aan. Volg alle saldi en transacties transparant op uw dashboard zonder verborgen kosten en zonder opnamebeperkingen.";

$risk_warning_disclaimer = "<strong>Disclaimer:</strong> Handelen brengt altijd risico's met zich mee. Geautomatiseerde systemen (inclusief AI) garanderen geen winst, kunnen mislukken door softwarefouten of onverwachte marktevenementen en vereisen toezicht door de gebruiker. In het verleden behaalde resultaten bieden geen garantie voor de toekomst. Dit platform dient louter informatieve en marketingdoeleinden en geeft geen financieel advies.";

$risk_warning_s1_heading = "1. Algemene & Cryptocurrency Marktrisico's";
$risk_warning_s1_intro = "Cryptocurrencies zijn zeer volatiele, speculatieve activa die 24/7 werken met minimaal toezicht door regelgevende instanties in de meeste rechtsgebieden.";
$risk_warning_s1_1 = "Waarden kunnen drastisch fluctueren binnen korte perioden, wat potentieel leidt tot een totaal verlies van het geïnvesteerde kapitaal.";
$risk_warning_s1_2 = "Marktwaarden kunnen sterk worden beïnvloed door regelgevende updates, technische ontwikkelingen, beveiligingsinbreuken of bredere macro-economische gebeurtenissen.";
$risk_warning_s1_3 = "Sommige activa kunnen al hun waarde volledig verliezen. Investeer alleen geld dat u zich kunt veroorloven te verliezen.";

$risk_warning_s2_heading = "2. Uitvoerings-, Liquiditeits- & Hefboomrisico's";
$risk_warning_s2_1 = "<strong>Marktvolatiliteit & Liquiditeit:</strong> Extreme prijsbewegingen (10–20%+ dagelijks) of lage liquiditeit (vooral in kleinere munten) kunnen leiden tot vertragingen, platformuitval en ernstige slippage bij de uitvoering. Stop-loss orders kunnen verliezen onder extreme omstandigheden niet garanderen.";
$risk_warning_s2_2 = "<strong>Hefboom- & Marge-Risico's:</strong> Producten met hefboomwerking versterken zowel winsten als verliezen, wat betekent dat u meer kunt verliezen dan uw aanvankelijke inleg. Ongeveer 70–80% van de retailbeleggers verliest geld bij het handelen in producten met een hefboomwerking.";

$risk_warning_s3_heading = "3. Technische, Cybersecurity- & Derdenrisico's";
$risk_warning_s3_1 = "<strong>Technische Factoren:</strong> Online handelen brengt inherent risico's met zich mee zoals verbroken internetverbindingen, hardware-/softwarefouten en het niet beschikbaar zijn van de dienst.";
$risk_warning_s3_2 = "<strong>Cybersecurity:</strong> Cryptocurrency-accounts zijn frequente doelen voor phishing, malware en hacks. Transacties zijn onomkeerbaar; het in gevaar brengen van uw inloggegevens kan leiden tot blijvend verlies.";
$risk_warning_s3_3 = "<strong>Externe Platformen:</strong> Deze website kan gebruikers verbinden met platforms van derden. Wij beheren, onderschrijven of garanderen de veiligheid, de werking of de solvabiliteit daarvan niet. Doe altijd uw eigen due diligence voordat u geld stort op externe platforms.";

$risk_warning_s4_heading = "4. Regelgeving, Belasting & Slotbepalingen";
$risk_warning_s4_1 = "<strong>Naleving van Wetgeving & Belastingen:</strong> Wettelijke kaders variëren sterk en veranderen snel. Gebruikers zijn uitsluitend zelf verantwoordelijk om ervoor te zorgen dat hun handelsactiviteit voldoet aan de lokale wetgeving en voor het nakomen van hun eigen belastingverplichtingen.";
$risk_warning_s4_2 = "<strong>Geen Winstgaranties:</strong> Er is geen \"veilige\" of risicovrije cryptohandel. Alle opbrengstcijfers of prestatievoorbeelden zijn puur hypothetisch.";
$risk_warning_s4_3 = "<strong>Geschiktheid:</strong> Als u de risico's niet volledig begrijpt, afhankelijk bent van essentieel geld, of handelt met geleend geld, dan is cryptohandel niet geschikt voor u. Raadpleeg bij twijfel een onafhankelijke, gelicentieerde financieel adviseur.";

$risk_warning_contact = "<strong>Contact:</strong> Voor vragen met betrekking tot deze verklaring of om een verzoek in te dienen, kunt u contact opnemen met ons officiële klantenserviceteam via het contactformulier op onze website.";
$footer_risk_warning = "Risicowaarschuwing";

$lang_loaded = true;

?>
