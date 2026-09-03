<?php
require __DIR__ . '/../lang.php';
$site_lang = 'nl-NL';
$form_language = 'nl'; // matches this page's own language, not the offer's global default

// ============================================================
// NL TRANSLATION OVERRIDES
// Identity/config vars ($site_name, $site_slug, $site_domain, $site_url, $app_price, $app_currency, $site_lang, $country_name, $country_flag_code, $privacy_last_update, $rating_value, $rating_count, $review_count, $form_country, $form_language, $form_phone_country, $form_only_countries, $review_1_author, $review_2_author, $review_3_author, $review_4_author, $quiz_consultant_name) are
// intentionally NOT overridden -- they stay exactly as inherited from the
// root lang.php.
// ============================================================

// Brand / Platform Variables

// Geo-language stats bar fallback content (used by the language-folder pages'
// own "stats" section; the fr/de/it/nl folders override these with native
// translations, the other 19 folders inherit this English fallback)
$stat_1_value = "4M+";
$stat_1_label = "Geregistreerde gebruikers";
$stat_2_value = "98+";
$stat_2_label = "Ondersteunde landen";
$stat_3_value = "65+";
$stat_3_label = "Beschikbare valuta";
$stat_4_value = "24/7";
$stat_4_label = "Toegang tot transacties";
$stat_5_value = "256-bit";
$stat_5_label = "Versleutelingsstandaard";
$stat_6_value = "$500M+";
$stat_6_label = "Totale stortingen van klanten";

// Keitaro Form Integration Variables (defaults -- overwritten per-launch by
// generate_lang_files(); must stay valid on their own since nothing else in
// this file replaces them for a page that's ever served un-generated)

// 4 Verified Reviews (TZ Item 8)
$review_1_role = "Frankrijk";
$review_1_text = "Ik begon met €500, gewoon om te zien hoe het platform werkte. Na ongeveer drie weken was mijn saldo gegroeid tot rond de €1120. De interface is eenvoudig te gebruiken, en de marktinzichten hielpen mij betere beslissingen te nemen.";
$review_1_badge = "Gerapporteerd Rendement +18,4%";

$review_2_role = "Duitsland";
$review_2_text = "Ik heb eerder een paar handelsplatforms geprobeerd, maar dit is tot nu toe mijn favoriet. Het is gemakkelijk te navigeren, de tools zijn echt nuttig, en ik heb over het geheel genomen een zeer positieve ervaring gehad.";
$review_2_badge = "Gerapporteerd Rendement +19,1%";

$review_3_role = "Italië";
$review_3_text = "Wat mij het meest imponeerde, was hoe intuïtief alles aanvoelt. De registratie ging snel, het dashboard is overzichtelijk, en het platform heeft handelen voor mij veel gemakkelijker gemaakt.";
$review_3_badge = "Gerapporteerd Rendement +16,8%";

$review_4_role = "Nederland";
$review_4_text = "Ik had geen eerdere handelservaring, dus ik begon met €750. Binnen een maand kwam ik op iets meer dan €1,765 uit door de tools en leermiddelen te volgen. Het was een geweldige manier om vertrouwen op te bouwen.";
$review_4_badge = "Gerapporteerd Rendement +18,0%";

$review_verified_label = "Geverifieerde Gebruiker";
$reviews_section_title = "Beoordelingen over $site_name";
$reviews_badge_trustworthy = "Betrouwbaar";
$reviews_summary_rating = "4,7";
$reviews_summary_count = "189";
$reviews_summary_desc = "Een krachtig en intuïtief handelsplatform met robuuste geautomatiseerde tools, realtime analyses en uitgebreide leermiddelen.";

// CONSULTANT / CHAT QUIZ (TZ Item 13)
$quiz_consultant_role = "Onboardingmedewerker";
$quiz_text_welcome = "Hallo! Ik ben $quiz_consultant_name van $site_name. Goed nieuws — u bent al vooraf gekwalificeerd. Laten we uw account instellen zodat u kunt beginnen met handelen.";
$quiz_text_q1 = "Om de handelsvoorwaarden in uw regio te bevestigen, verzoeken wij u uw land te bevestigen: $country_name";
$quiz_text_a1_yes = "Ja, dit is mijn huidige locatie";
$quiz_text_a1_no = "Nee";
$quiz_text_q2 = "Selecteer uw leeftijdscategorie zodat wij uw accountinstellingen kunnen afstemmen:";
$quiz_text_q3 = "Beschikt u over een actieve bankrekening of kaart om uw handelsaccount te financieren?";
$quiz_text_a3_yes = "Ja, actieve rekening beschikbaar";
$quiz_text_a3_no = "Op dit moment niet beschikbaar";
$quiz_text_q4 = "Vertel ons uw belangrijkste inkomstenbron zodat wij een stortingsplan kunnen voorstellen dat bij uw budget past:";
$quiz_text_a4_1 = "Loondienst / Zelfstandige";
$quiz_text_a4_2 = "Spaargeld / Persoonlijke investeringen";
$quiz_text_a4_3 = "Andere bronnen";
$quiz_text_q5 = "Laatste stap: een van onze adviseurs belt u tussen 11:00 en 20:00 uur om uw accountinstelling door te nemen. Komt dit tijdstip u uit?";
$quiz_text_a5_yes = "Ja, dit tijdstip komt goed uit";
$quiz_text_a5_no = "Onmiddellijk prioritair contact aanvragen";
$quiz_text_loader = "Uw handelsprofiel wordt ingesteld...";
$quiz_text_final_ttl = "Helemaal klaar! 🎉 Voltooi hieronder uw registratie om uw account te activeren:";
$quiz_text_processing = "Invoer valideren...";
$quiz_text_typing = "bereidt een antwoord voor...";
$quiz_placeholder_fname = "Voornaam";
$quiz_placeholder_lname = "Achternaam";
$quiz_placeholder_email = "E-mailadres";
$quiz_placeholder_phone = "Telefoonnummer";
$quiz_btn_submit = "Mijn account aanmaken";

// METADATA (TZ Item 10)
$home_meta_title = "$site_name — Handelsplatform | Officiële Website";
$home_meta_description = "De officiële website van $site_name biedt een veilig cryptocurrency-handelsplatform met geavanceerde handelstools, realtime marktinzichten en een gebruiksvriendelijke ervaring voor traders.";

// NAVIGATION & HEADER (TZ Item 3, 12)
$nav_about = "Over Ons";
$nav_how = "Hoe Het Werkt";
$nav_why = "Waarom Handelen";
$nav_faq = "FAQ";
$nav_contacts = "Contact";
$nav_signin = "Inloggen";
$nav_signup = "Registreren";

$mobnav_home = "Home";
$mobnav_product = "Product";
$mobnav_offer = "Aanbod";
$mobnav_contact = "Contact";
$mobnav_faq = "FAQ";
$mobnav_signup = "Aanmelden";

// HERO SECTION
$hero_h1 = "$site_name Platform";
$hero_text = "Het officiële cryptocurrency-handelsplatform van $site_name — ontworpen om crypto net zo eenvoudig te maken als uw dagelijkse online bankieren, of u nu voor het eerst handelt of al jarenlang belegt.";

// LEAD FORM
$form_fname_placeholder = "Voornaam";
$form_lname_placeholder = "Achternaam";
$form_email_placeholder = "Voer uw e-mailadres in";
$form_phone_placeholder = "Telefoonnummer";
$form_btn_submit = "Registreren";
$form_disclaimer_text = "Door uw persoonlijke gegevens in te voeren en op de knop te klikken, accepteert u het <a class='link link-primary' href='privacy.php'>Privacybeleid</a> en de <a class='link link-primary' href='conditions.php'>Gebruiksvoorwaarden</a> van deze website.";

// SECURITY BADGES
$badge_ssl = "256-bit SSL";
$badge_payments = "Veilige Betalingen";
$badge_2fa = "2FA";
$badge_cold_storage = "98% Cold Storage";
$badge_regulated = "Gereguleerd";
$badge_traders_trust = "Meer dan 4M Traders Vertrouwen Erop";

// SAFE SECTION (Vos fonds sont en sécurité)
$safe_title = "<mark>Uw Geld Is Veilig</mark> bij $site_name";
$safe_desc = "Encryptie op bankniveau, geverifieerde betalingsverwerkers en 98% cold storage — uw geld is bij elke stap beschermd.";

$safe_item1_title = "Geverifieerde Betalingsproviders";
$safe_item1_desc = "Betalingen worden uitsluitend verwerkt via gecertificeerde providers die voldoen aan internationale veiligheidsnormen. Uw kaartgegevens worden nooit opgeslagen op ons platform.";
$safe_item1_badge = "Veilige Betalingen";

$safe_item2_title = "Tweefactorauthenticatie (2FA)";
$safe_item2_desc = "Voeg een extra beschermingslaag toe aan uw account met tijdgebonden eenmalige wachtwoorden via SMS of Google Authenticator.";
$safe_item2_badge = "2FA";

$safe_item3_title = "98% Cold Storage";
$safe_item3_desc = "Het overgrote deel van de digitale activa wordt bewaard in geografisch verspreide offline cold storage-kluizen die worden beschermd door multi-signature-protocollen.";
$safe_item3_badge = "98% Cold Storage";

$safe_item4_title = "Gereguleerde Uitvoering";
$safe_item4_desc = "Wij werken wereldwijd samen met gereguleerde brokers en liquiditeitsverschaffers om compliance, transparantie en uitvoering van topniveau te waarborgen.";
$safe_item4_badge = "Gereguleerd";

$safe_item5_title = "256-bit SSL-Encryptie";
$safe_item5_desc = "Alle gegevensoverdrachten tussen uw browser en onze servers zijn versleuteld met militaire TLS 1.3-cryptografische protocollen.";
$safe_item5_badge = "256-bit SSL";

// FREE GUIDE CTA BANNER (CTA 2)
$guide_cta_title = "Ontvang de Gratis Gids";
$guide_cta_subtitle = "«10 Fouten om te Vermijden bij Crypto-handel»";
$guide_cta_btn = "Gratis Gids Aanvragen";

// TRUST SECTION (Pourquoi les investisseurs font confiance à Ciel Cryptance)
$trust_title = "Wereldwijd vertrouwd door traders";
$trust_desc = "Meer dan 4.000.000 gebruikers wereldwijd kiezen voor $site_name vanwege de betrouwbaarheid, krachtige automatisering en transparante omgeving.";
$trust_subtitle = "Dit is waarom traders $site_name vertrouwen:";

$trust_item1_title = "Wereldwijde Markttoegang";
$trust_item1_desc = "Handel in meer dan 100 cryptovaluta's, Forex-paren, aandelen en grondstoffen vanuit één uniform handelsdashboard.";

$trust_item2_title = "Robuuste Fondsbescherming";
$trust_item2_desc = "Gescheiden rekeningen, continue biometrische controles en geavanceerde cyberbeveiliging beschermen uw kapitaal 24/7.";

$trust_item3_title = "Geen Verborgen Kosten";
$trust_item3_desc = "Geniet van glasheldere prijzen. Gratis registratie, gratis stortingen, geen platformbeheerkosten en directe opnameverzoeken.";

$trust_item4_title = "Responsieve Ondersteuning";
$trust_item4_desc = "Ons toegewijde ondersteuningsteam is beschikbaar via livechat, telefoon of e-mail om te helpen met vragen of technische zaken.";

$trust_market_info_text = "Meer informatie over de marktomstandigheden in 2026";
$trust_market_info_btn = "Waarom Handelen";

// START TRADING CTA (CTA 3)
$start_cta_title = "Begin met Handelen vanaf <span data-local-currency='$app_price'>$app_price $app_currency</span>!";
$start_cta_desc = "Klaar om $site_name te proberen? Registreer nu en word onderdeel van de groeiende community van crypto-investeerders en handelaren.";
$start_cta_btn = "Registreren";

// FAQ SECTION
$faq_title = "Veelgestelde vragen (FAQ) over $site_name";
$faq_q1 = "Wat is $site_name en hoe werkt het?";
$faq_a1 = "Het is een AI-gestuurd handelsplatform dat dag en nacht voor u werkt. Het systeem analyseert de markten, spoort kansen op en voert trades automatisch uit. U kunt de AI alles laten regelen, of op elk moment overschakelen naar de handmatige modus om op uw eigen voorwaarden te handelen.";

$faq_q2 = "Hoe veilig zijn mijn geld en gegevens bij $site_name?";
$faq_a2 = "Beveiliging is verweven in elke laag van het platform. Persoonsgegevens worden beschermd met internationaal erkende versleutelingsnormen en geavanceerde accountauthenticatie. Alle financiële transacties worden uitsluitend verwerkt via vertrouwde, geverifieerde betalingsproviders. Uw volledige handelsactiviteit — elke trade, elk signaal en elke saldowijziging — is in realtime zichtbaar, zodat u altijd precies weet wat er met uw tegoeden gebeurt.";

$faq_q3 = "Kan ik mijn winst op elk moment opnemen?";
$faq_a3 = "Ja. Er zijn geen beperkingen op wanneer of hoe vaak u geld opneemt bij $site_name. Uw accountsaldo blijft te allen tijde onder uw eigen controle. Opnames worden verwerkt via dezelfde vertrouwde betalingsproviders die ook voor stortingen worden gebruikt, wat zorgt voor snelle en veilige transacties.";

$faq_q4 = "Zijn er verborgen kosten of extra kosten?";
$faq_a4 = "Nee. $site_name rekent geen abonnementskosten, geen registratiekosten en geen verborgen kosten. Het enige bedrag dat u nodig heeft om te beginnen, is een minimale storting van $app_price $app_currency, rechtstreeks op uw handelsaccount. Alle belangrijke betaalmethoden worden geaccepteerd, waaronder creditcards, bankoverschrijvingen en PayPal.";

$faq_q5 = "Heb ik ervaring nodig om te beginnen?";
$faq_a5 = "Helemaal niet. $site_name is ontworpen voor zowel complete beginners als ervaren traders. In de volledig geautomatiseerde modus regelt de AI alles voor u, inclusief marktanalyse, het genereren van signalen en het uitvoeren van trades. Wilt u liever zelf de controle houden? Dan kunt u op elk moment overschakelen naar de handmatige modus.";

$faq_cta_text = "Heeft u vragen? Bekijk onze FAQ of neem contact met ons op.";
$faq_cta_faq_btn = "FAQ";
$faq_cta_contact_btn = "Contact";

// NEW TRADER LEAD SECTION (Bottom form)
$lead_title = "Nieuw in Handelen?";
$lead_p1 = "Na registratie ontvangt u onze gratis gids <mark class='text-on-surface-tertiary-accent'>«10 Fouten om te Vermijden bij Cryptohandel»</mark>. Deze bevat eenvoudige adviezen van onze meest ervaren analisten om u te helpen veelvoorkomende valkuilen te vermijden.";
$lead_p2 = "Vul eenvoudig uw gegevens in het registratieformulier in en wij sturen deze rechtstreeks naar uw inbox. Veel handelaren zijn begonnen met deze gids en vonden deze van onschatbare waarde bij het opbouwen van vertrouwen in hun eerste trades.";
$lead_form_heading = "De markt wacht niet — begin vandaag nog!";

// FEATURES TABLE (Fonctionnalités principales)
$features_title = "<mark>Belangrijkste Kenmerken</mark> van het $site_name Handelsplatform";
$feature_1_title = "🤖 Platformtechnologie";
$feature_1_val = "Geavanceerde AI-gestuurde handelsengine";
$feature_2_title = "💳 Financieringsmethoden";
$feature_2_val = "Belangrijkste creditcards, bankoverschrijvingen, PayPal";
$feature_3_title = "📱 Platformtoegang";
$feature_3_val = "Compatibel met meerdere apparaten (Desktop, Tablet, Mobiel)";
$feature_4_title = "🚀 Slagingspercentage";
$feature_4_val = "85% analytische precisie";
$feature_5_title = "📊 Handelsinstrumenten";
$feature_5_val = "Cryptovaluta's, Forex, Aandelen, Grondstoffen, Edelmetalen, CFD's en meer…";
$feature_6_title = "✍️ Accountinstelling";
$feature_6_val = "Snelle en eenvoudige registratie";
$feature_7_title = "📞 Klantenondersteuning";
$feature_7_val = "24/7 professionele toegewijde ondersteuning";

// FOOTER DISCLAIMER (TZ Item 21)
$footer_disclaimer_p1 = "$site_name biedt educatieve content en algemene informatie over financiële markten, online handel en digitale activa. Alle materialen die op deze website worden gepubliceerd, waaronder artikelen, grafieken, prijsgegevens, marktinzichten en analyses, zijn uitsluitend bedoeld voor informatieve doeleinden en mogen niet worden beschouwd als financieel, beleggings- of juridisch advies. Hoewel wij ernaar streven onze content accuraat en actueel te houden, garanderen wij niet de volledigheid of betrouwbaarheid ervan en aanvaarden wij geen aansprakelijkheid voor verliezen die voortvloeien uit het gebruik van deze website.";
$footer_disclaimer_p2 = "Het handelen in cryptovaluta's, Forex, CFD's, aandelen en andere financiële instrumenten brengt aanzienlijke risico's met zich mee en is mogelijk niet geschikt voor elke belegger. Marktomstandigheden kunnen snel veranderen en resultaten uit het verleden bieden geen garantie voor de toekomst. Beoordeel voordat u beleggingsbeslissingen neemt zorgvuldig uw financiële situatie en risicotolerantie, en zoek indien nodig onafhankelijk professioneel advies. Investeer alleen geld dat u zich kunt veroorloven te verliezen.";
$footer_copyright = "© 2026 $site_name. Alle rechten voorbehouden." . date('Y') . " $site_name. All rights reserved.";

// FOOTER NAV LINKS
$footnav_about = "Over ons";
$footnav_how = "Hoe Het Werkt";
$footnav_why = "Waarom Handelen";
$footnav_faq = "FAQ";
$footnav_contacts = "Contact";
$footnav_privacy = "Privacybeleid";
$footnav_risk = "Risicowaarschuwing";
$footnav_terms = "Gebruiksvoorwaarden";
$footnav_product = "Product";
$footnav_offer = "Aanbod";

// ABOUT PAGE VARIABLES
$about_meta_title = "Over Ons | $site_name Officiële Website";
$about_meta_description = "Lees meer over $site_name, onze missie om financiële markten te democratiseren door middel van AI-automatisering, en ons beveiligingskader op institutioneel niveau.";
$about_h1 = "Over <mark>$site_name</mark>";
$about_lead = "Wij geven handelaren wereldwijd meer kracht door middel van kunstmatige intelligentie, algoritmische uitvoering en zakelijke beveiliging.";
$about_mission_title = "Onze Missie";
$about_mission_text = "Bij $site_name geloven wij dat geavanceerde handelstechnologieën voor iedereen toegankelijk moeten zijn, niet alleen voor institutionele fondsen. Ons platform overbrugt de kloof tussen alledaagse particuliere beleggers en geavanceerde computationele handelsalgoritmen.";
$about_tech_title = "Baanbrekende Technologie";
$about_tech_text = "Onze systemen evalueren elke seconde meer dan 100.000 datapunten op wereldwijde crypto-, Forex- en aandelenmarkten. Door voorspellende machine-learningmodellen te combineren met uitvoering in sub-milliseconden, leveren wij ultralage slippage en betrouwbare prestaties.";
$about_sec_title = "Beveiliging & Regelgevende Naleving";
$about_sec_text = "Klantvertrouwen is de kernbasis van ons ecosysteem. Wij implementeren 256-bit TLS-encryptie, strikte biometrische en 2FA-protocollen, en bewaren 98% van alle digitale reserves in cold storage-kluizen.";

// PRODUCT PAGE VARIABLES
$product_meta_title = "Ons Platform | $site_name";
$product_meta_description = "Ontdek hoe $site_name AI-gestuurde analyse, realtime marktgegevens en een transparant dashboard combineert om u met vertrouwen te laten handelen.";
$product_h1 = "<mark>Product & Functies</mark> van het Platform";
$product_lead = "Ontdek de intelligente tools die zijn ontworpen om u een concurrentievoordeel te geven op moderne cryptovaluta- en financiële markten.";
$product_f1_title = "Geautomatiseerde AI-Handelsengine";
$product_f1_text = "Laat neurale algoritmen markttrends analyseren en dag en nacht optimale trades uitvoeren zonder emotie.";
$product_f2_title = "Realtime Marktanalyses";
$product_f2_text = "Live orderboekdiepte, geautomatiseerde patroonherkenning en institutionele sentimenttracking binnen handbereik.";
$product_f3_title = "Risicobeheersuite";
$product_f3_text = "Gedetailleerde stop-loss- en take-profitlimieten, controles voor maximale dagelijkse blootstelling en geautomatiseerde afdekmogelijkheden.";
$product_f4_title = "Platformoverstijgende Toegankelijkheid";
$product_f4_text = "Handel naadloos via desktopbrowsers, tablets en smartphones met nul latentie en volledige cloudsynchronisatie.";

// OFFER PAGE VARIABLES
$offer_meta_title = "Aan de Slag | $site_name";
$offer_meta_description = "Meld u aan, stort geld op uw account en begin binnen enkele minuten met het verhandelen van cryptocurrency bij $site_name.";
$offer_h1 = "Exclusief <mark>Handelsaanbod</mark>";
$offer_lead = "Begin vandaag nog aan uw handelsreis met concurrerende voordelen en toegewijde persoonlijke accountonboarding.";
$offer_step1_title = "1. Snelle Registratie";
$offer_step1_text = "Vul ons korte registratieformulier in om binnen 2 minuten toegang tot uw persoonlijke account veilig te stellen.";
$offer_step2_title = "2. Vul Uw Handelssaldo Aan";
$offer_step2_text = "Stort het standaard minimum van $app_price $app_currency via creditcard, bankoverschrijving of e-wallets. 100% van uw geld gaat rechtstreeks naar uw handelssaldo.";
$offer_step3_title = "3. Activeer AI-Handel";
$offer_step3_text = "Kies de geautomatiseerde of geassisteerde modus, selecteer uw voorkeurs-assetparen en begin te handelen met volledige platformmogelijkheden.";

// CONTACTS PAGE VARIABLES
$contacts_meta_title = "Contact & Ondersteuning | $site_name";
$contacts_meta_description = "Neem contact op met het team van $site_name voor hulp bij uw account of vragen over het handelen.";
$contacts_h1 = "Contact";
$contacts_lead = "Ons toegewijde internationale ondersteuningsteam staat klaar om u 24 uur per dag, 7 dagen per week te helpen.";
$contacts_info_title = "Officiële Vragen";
$contacts_info_text = "Voor algemene vragen, accountverificatie of technische ondersteuning, neem contact met ons op via onze geverifieerde communicatiekanalen.";
$contacts_support_hours = "24/7 Livechat- & E-mailondersteuning";

// FAQ PAGE VARIABLES
$faq_meta_title = "FAQ & Kennisbank | $site_name";
$faq_meta_description = "Vind antwoorden op veelgestelde vragen over $site_name-accounts, stortingen, opnames en geautomatiseerde AI-handel.";
$faq_h1 = "$site_name <mark>FAQ</mark>";
$faq_lead = "Duidelijke antwoorden op de meest voorkomende vragen over platformbeveiliging, opnames en geautomatiseerd handelen.";

// PRIVACY POLICY PAGE VARIABLES
$privacy_meta_title = "Privacybeleid | Gegevensbeveiliging $site_name";
$privacy_meta_description = "Ontdek hoe $site_name de privacy van gebruikers beschermt volgens strenge internationale versleutelingsnormen.";
$privacy_h1 = "Privacybeleid";
$privacy_p1 = "Dit Privacybeleid beschrijft hoe $site_name informatie verzamelt, gebruikt en openbaar maakt wanneer u onze website bezoekt, een account registreert of onze handelssoftware gebruikt.";
$privacy_sec1_title = "1. Gegevensverzameling & Gebruik";
$privacy_sec1_text = "Wij verzamelen noodzakelijke contactgegevens (naam, e-mailadres, telefoonnummer) om uw account aan te maken, u te verbinden met geverifieerde brokerpartners en identiteit te verifiëren in overeenstemming met internationale KYC- en AML-normen.";
$privacy_sec2_title = "2. Cookies & Trackingtechnologieën";
$privacy_sec2_text = "Wij gebruiken essentiële en analytische cookies om de websiteprestaties te verbeteren, de gebruikerservaring te personaliseren en verkeerspatronen te monitoren. U kunt uw browsercookie-instellingen op elk moment aanpassen.";
$privacy_sec3_title = "3. Gegevensbeveiliging & AVG-Rechten";
$privacy_sec3_text = "Alle gebruikersgegevens worden tijdens verzending en in rust versleuteld met cryptografische protocollen op bankniveau. Onder de Algemene Verordening Gegevensbescherming (AVG) hebben gebruikers het recht om toegang tot, correctie van of verwijdering van hun persoonlijke gegevens te verzoeken.";

// TERMS OF USE PAGE VARIABLES
$terms_meta_title = "Gebruiksvoorwaarden | $site_name";
$terms_meta_description = "Bekijk de officiële Algemene Voorwaarden die het gebruik van het $site_name-platform en bijbehorende diensten regelen.";
$terms_h1 = "Gebruiksvoorwaarden";
$terms_p1 = "Lees deze Gebruiksvoorwaarden zorgvuldig door voordat u $site_name gebruikt of er toegang toe krijgt. Door een account te registreren, gaat u ermee akkoord gebonden te zijn aan deze bepalingen.";
$terms_sec1_title = "1. Gebruikersgeschiktheid";
$terms_sec1_text = "U moet ten minste 18 jaar oud zijn en woonachtig zijn in een rechtsgebied waar online handel en cryptovalutatransacties wettelijk zijn toegestaan. U bent zelf verantwoordelijk voor het waarborgen van naleving van uw lokale wetten.";
$terms_sec2_title = "2. Accountregistratie & Beveiliging";
$terms_sec2_text = "U gaat ermee akkoord waarheidsgetrouwe, nauwkeurige en volledige informatie te verstrekken tijdens de registratie. U bent zelf verantwoordelijk voor het geheimhouden van uw inloggegevens.";
$terms_sec3_title = "3. Beperking van Aansprakelijkheid";
$terms_sec3_text = "$site_name biedt informatieve en softwaregestuurde bemiddelingsdiensten. Wij bieden geen gepersonaliseerd financieel advies en garanderen geen handelswinstgevendheid. Handelen op financiële markten brengt een inherent kapitaalrisico met zich mee.";

// RISK WARNING PAGE VARIABLES (TZ Item 19: Exact 4 sections)
$risk_meta_title = "Risicowaarschuwing & Juridische Kennisgeving | $site_name";
$risk_meta_description = "Belangrijke risico-informatie over CFD-, Forex- en cryptovalutahandel op $site_name. Lees zorgvuldig voordat u investeert.";
$risk_h1 = "Risicowaarschuwing";
$risk_sec1_title = "1. Kennisgeving Hoog-Risico Belegging & Volatiliteit";
$risk_sec1_text = "Het handelen in cryptovaluta's, contracten voor verschil (CFD's), buitenlandse valuta (Forex) en andere financiële activa brengt een aanzienlijk risico op verlies met zich mee en is niet geschikt voor alle beleggers. Cryptovalutamarkten zijn uitzonderlijk volatiel, waarbij prijzen onderhevig zijn aan scherpe schommelingen als reactie op regelgevende aankondigingen, macro-economische verschuivingen of marktsentiment. U mag nooit geld investeren dat u zich niet kunt veroorloven volledig te verliezen.";
$risk_sec2_title = "2. Onafhankelijk Financieel Advies";
$risk_sec2_text = "Alle materialen, tools, algoritmische signalen en commentaren die op $site_name worden verstrekt, zijn uitsluitend bedoeld voor informatieve, educatieve en marketingdoeleinden. Geen van de inhoud op deze website vormt gepersonaliseerd beleggings-, juridisch of financieel advies. Voordat u handelt, dient u onafhankelijk onderzoek te doen of een erkende financieel adviseur te raadplegen.";
$risk_sec3_title = "3. Regelgevende & Geografische Beperkingen";
$risk_sec3_text = "Bepaalde rechtsgebieden beperken of verbieden retailhandel in CFD's en cryptovaluta's. Het is de exclusieve verantwoordelijkheid van de gebruiker om te verifiëren of toegang tot $site_name en het gebruik van aangesloten handelsbrokers wettig zijn onder hun lokale wettelijke kader.";
$risk_sec4_title = "4. Platformtechnologie & Marktuitvoering";
$risk_sec4_text = "Geautomatiseerde handelstools, kunstmatige-intelligentiealgoritmen en marktindicatoren garanderen geen winst en elimineren marktrisico's niet. Technische storingen, netwerklatentie, systeemstoringen en liquiditeitstekorten kunnen leiden tot vertragingen in de handelsuitvoering of slippage.";

// SIGN UP / LOGIN PAGE VARIABLES
$sign_meta_title = "Aanmelden | $site_name";
$sign_meta_description = "Maak uw gratis $site_name-account aan en begin met het verhandelen van cryptocurrency op een veilig, gereguleerd platform.";
$sign_h1 = "Registreer bij <mark>$site_name</mark>";
$sign_lead = "Sluit u aan bij duizenden handelaren en krijg onmiddellijk toegang tot onze AI-handelsengine.";

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
$hero_form_heading = "Maak uw gratis account aan";
$hero_form_button = "Aanmelden";
$form_name_placeholder = "Voer uw voornaam in";
$form_surname_placeholder = "Voer uw achternaam in";
$form_disclaimer_prefix = "Door uw persoonlijke gegevens in te voeren en op de knop te klikken, gaat u akkoord met het";
$form_privacy_link_label = "Privacybeleid";
$form_disclaimer_and = "en de";
$form_terms_link_label = "Gebruiksvoorwaarden";
$form_disclaimer_of_site = "van deze website.";

// -- partners strip --
$partners_label = "Vertrouwd door toonaangevende partners";

// -- "what is" section --
$whatis_label = "Over het platform";
$whatis_title = "Wat is $site_name?";
$whatis_intro = "$site_name is het officiële online handelsplatform, ontwikkeld om cryptocurrency net zo eenvoudig te maken als uw dagelijkse online bankieren — of u nu een complete beginner bent of een ervaren belegger.";
$whatis_icon_1_title = "AI-gestuurde analyse";
$whatis_icon_1_text = "Geavanceerde algoritmen nemen alle complexiteit van de markten voor u uit handen.";
$whatis_icon_2_title = "Directe uitvoering";
$whatis_icon_2_text = "Duizenden datapunten worden elke seconde verwerkt — trades zonder vertraging.";
$whatis_icon_3_title = "Eenvoudig, intuïtief dashboard";
$whatis_icon_3_text = "Bekijk uw saldo en open posities in één oogopslag, wanneer u maar wilt.";
$whatis_icon_4_title = "Lage instapdrempel";
$whatis_icon_4_text = "Begin met een minimale storting van slechts $app_price $app_currency — geen verborgen kosten.";
$whatis_cta_text = "Wilt u meer weten over ons team en ons product?";
$whatis_cta_link = "Over ons";

// -- stats section heading (per-stat label/value already set above) --
$stats_label = "$site_name in cijfers";
$stats_title = "Cijfers die luider spreken dan beloftes";

// -- key benefits section --
$benefits_label = "Belangrijkste voordelen";
$benefits_title = "De belangrijkste voordelen van $site_name";
$benefit_1_title = "Beginnersvriendelijk platform";
$benefit_1_text = "Intuïtieve grafieken en stapsgewijze handleidingen helpen u op weg zonder dat het overweldigend aanvoelt. U kunt cryptocurrency verhandelen, zelfs als het uw eerste keer is — wij begeleiden u bij elke stap.";
$benefit_2_title = "Officieel en gereguleerd";
$benefit_2_text = "$site_name is gelicentieerd en voldoet aan de geldende financiële regelgeving. Wij gebruiken SSL-versleuteling en tweefactorauthenticatie om uw account en tegoeden te beschermen. Geen loze beloftes — alleen eerlijke, betrouwbare ondersteuning bij het handelen.";
$benefit_3_title = "Lage instapdrempel";
$benefit_3_text = "Met een minimale storting van slechts $app_price $app_currency kan iedereen beginnen. Er is geen grote investering vooraf nodig — begin klein en verhoog uw inzet naarmate uw vertrouwen groeit.";
$benefit_4_title = "Transparante kosten";
$benefit_4_text = "U krijgt nooit te maken met verborgen kosten. Wij rekenen alleen minimale transactie- of opnamekosten, waar van toepassing, zodat u meer overhoudt van wat van u is.";
$benefit_5_title = "24/7 toegang tot transacties";
$benefit_5_text = "Handel op uw eigen tijdstip, dag of nacht. $site_name werkt even goed op desktop als op mobiel, zodat u overal kunt reageren op marktbewegingen. Ons platform is snel en betrouwbaar — prijzen worden in realtime bijgewerkt, zodat u kansen snel kunt benutten.";
$benefit_6_title = "Lokale klantenondersteuning";
$benefit_6_text = "Ons supportteam is bereikbaar via chat, telefoon of e-mail. Echte mensen staan klaar om u in uw eigen taal te helpen, wanneer u dat maar nodig heeft.";
$benefits_trust_title = "Wereldwijd vertrouwd door gebruikers";
$benefits_trust_text = "Daarom vertrouwen zoveel cryptocurrency-gebruikers op $site_name. Duizenden traders handelen al met $site_name, en onze community blijft elke dag groeien, met veel aandacht voor elke nieuwe gebruiker.";
$benefits_cta = "Aanmelden";
$benefits_badge_1 = "256-bit SSL";
$benefits_badge_2 = "Veilige betalingen";
$benefits_badge_3 = "2FA";

// -- security section --
$security_label = "Beveiliging";
$security_title = "Uw tegoeden zijn veilig bij $site_name";
$security_subtitle = "Versleuteling op bankniveau, geverifieerde betalingen en 98% cold storage — uw geld is bij elke stap beschermd.";
$security_1_title = "Geverifieerde betalingsproviders";
$security_1_text = "Betalingen worden uitsluitend verwerkt via gecertificeerde providers die voldoen aan internationale beveiligingsnormen. Uw kaartgegevens worden nooit opgeslagen op ons platform.";
$security_2_title = "256-bit SSL-versleuteling";
$security_2_text = "Alle gegevens die tussen uw apparaat en ons platform worden uitgewisseld, worden versleuteld met 256-bit TLS. Geen enkele derde partij kan uw informatie onderscheppen of lezen.";
$security_3_title = "98% cold storage";
$security_3_text = "98% van de activa wordt bewaard in offline wallets zonder internetverbinding. Niemand kan hier op afstand bij, zelfs niet in geval van een aanval.";
$security_4_title = "Multifactorauthenticatie";
$security_4_text = "Alleen u heeft toegang tot uw account. Elke login wordt geverifieerd met een tweede stap die alleen u onder controle heeft.";
$security_5_title = "Accountmonitoring";
$security_5_text = "Elke login, transactie en wijziging in instellingen activeert een directe melding, zodat u altijd weet wanneer er iets gebeurt op uw account.";
$security_6_title = "Wachtwoordbeveiliging";
$security_6_text = "Wachtwoorden worden opgeslagen in een onleesbare, onomkeerbare vorm. Wij hebben geen technische manier om uw wachtwoord in te zien.";
$security_cta_title = "Ontvang een gratis gids!";
$security_cta_text = "Ontvang onze gratis startgids en begin vandaag nog met handelen.";
$security_cta_button = "Aanmelden";
$security_badge_1 = "98% cold storage";
$security_badge_2 = "Geverifieerde betalingen";
$security_badge_3 = "Versleuteld";

// -- how it works section --
$how_label = "Hoe het werkt";
$how_title = "Hoe het werkt";
$how_1_title = "Aanmelden";
$how_1_text = "Klik op de knop \"Account openen\" en vul het registratieformulier in met uw gegevens (naam, e-mailadres en telefoonnummer). Het is gratis en duurt slechts een paar minuten. Wij vragen u om uw e-mailadres te verifiëren en een wachtwoord aan te maken. Voor uw veiligheid schakelt u tweefactorauthenticatie (2FA) in, wat helpt uw tegoeden beter te beschermen.";
$how_2_title = "Stort geld";
$how_2_text = "Stort vervolgens geld op uw account. De minimale storting bedraagt slechts $app_price $app_currency. U kunt een credit-/betaalkaart, een lokale bankoverschrijving of populaire e-wallets gebruiken. Uw storting verschijnt doorgaans snel op uw account. (Tip: begin met een bedrag waar u zich comfortabel bij voelt.) Bij uw eerste storting kan worden gevraagd om een korte identiteitscontrole uit te voeren — een standaardprocedure die slechts enkele minuten in beslag neemt.";
$how_3_title = "Begin met handelen";
$how_3_text = "Zodra uw tegoeden op uw account staan, bent u klaar om te handelen. Kies het gewenste actief (zoals BTC, SOL of USDT) en bepaal hoeveel u wilt investeren. $site_name geeft u de tools om uw eigen strategie te bepalen, inclusief stop-loss-limieten en streefprijzen. Wij bieden ook een optie voor geautomatiseerd handelen, die marktsignalen voor u volgt op basis van het risiconiveau dat u kiest. Volg live grafieken op uw dashboard — wanneer een trade winstgevend is, wordt uw saldo dienovereenkomstig bijgewerkt.";
$how_cta_label = "Hoe Het Werkt";
$how_cta_text = "Heeft u meer informatie nodig over hoe de dienst werkt?";
$how_cta_link = "Hoe het werkt";

// -- trust reasons section --
$trust_label = "Waarom bij ons handelen";
$trust_intro = "Sluit u aan bij duizenden gebruikers die al handelen met $site_name.";
$trust_1_title = "Volledig gereguleerd";
$trust_1_text = "$site_name is naar behoren geregistreerd en voldoet aan de geldende financiële regelgeving. Wij opereren volgens strikte regels om uw bescherming te waarborgen.";
$trust_2_title = "Geavanceerde beveiliging";
$trust_2_text = "Al uw gegevens en tegoeden zijn versleuteld en beveiligd. Wij hanteren strikte accountbeveiliging met SSL-versleuteling en tweefactorauthenticatie, zodat u met vertrouwen kunt handelen, wetende dat wij beveiliging serieus nemen.";
$trust_3_title = "Transparante werkwijze";
$trust_3_text = "Wij verbergen onze kosten nooit en voegen nooit verrassende regels toe. Voor elke trade ziet u precies welke kosten van toepassing zijn. Ook communiceren wij duidelijk over de risico's die aan handelen verbonden zijn — die transparantie is wat vertrouwen opbouwt binnen onze community.";
$trust_4_title = "Snel bereikbare ondersteuning";
$trust_4_text = "Ons supportteam is bereikbaar via chat, telefoon of e-mail om al uw vragen te beantwoorden of eventuele problemen op te lossen.";
$trust_cta_text = "Meer informatie over de stand van de markt";
$trust_cta_link = "Waarom handelen";

// -- testimonials section heading (individual reviews already set above) --
$testimonials_label = "Ervaringen";
$testimonials_title = "Vertrouwd door meer dan 4 miljoen traders";

// -- FAQ section heading --
$faq_label = "FAQ";

// -- lead magnet CTA block --
$leadmagnet_title = "Nieuw in het handelen?";
$leadmagnet_text1 = "Na uw aanmelding ontvangt u onze gratis gids,";
$leadmagnet_quote = "\"10 fouten die u moet vermijden bij het handelen in cryptocurrency\"";
$leadmagnet_text2 = "boordevol heldere tips van onze meest ervaren analisten om de meest voorkomende fouten te vermijden.";
$leadmagnet_text3 = "Vul gewoon uw gegevens in wanneer u zich";
$leadmagnet_link = "aanmeldt";
$leadmagnet_text4 = "en wij sturen hem rechtstreeks naar uw inbox. Veel beleggers zijn met deze gids begonnen en zeggen dat die hen echt vertrouwen gaf voor hun eerste trades.";
$leadmagnet_text5 = "De markt wacht niet — begin vandaag nog!";

// -- pre-about CTA band --
$pre_about_title = "Klaar om de controle over uw handelen te nemen?";
$pre_about_text = "Sluit u vandaag nog aan bij $site_name en ervaar een platform dat is gebouwd voor duidelijkheid, veiligheid en resultaat.";
$pre_about_button = "Aanmelden";

// -- pretest (quiz teaser) badges/CTA --
$pretest_title = "Begin met handelen vanaf $app_price $app_currency!";
$pretest_text = "Klaar om $site_name te proberen? Meld u nu aan en sluit u aan bij de groeiende community van crypto-investeerders en -traders.";
$pretest_button = "Aanmelden";
$pretest_badge_1 = "Veilig";
$pretest_badge_2 = "Gereguleerd";
$pretest_badge_3 = "Vertrouwd door meer dan 4 miljoen traders";

// -- about page --
$about_label = "Over ons";
$about_title = "Over $site_name";
$about_intro = "$site_name geeft u niet alleen een handelsplatform — wij helpen u met vertrouwen en duidelijkheid te handelen.";
$about_text_1 = "$site_name is het officiële online handelsplatform, ontwikkeld om cryptohandel toegankelijk te maken voor zowel beginners als ervaren traders.";
$about_text_2 = "Wij combineren AI-gestuurde marktanalyse met een eenvoudig, transparant dashboard, zodat u altijd precies weet waar u staat. Of u nu net begint of uw aanpak verfijnt, $site_name geeft u de tools om op uw eigen voorwaarden te handelen.";
$about_text_3 = "Elk onderdeel van het platform is ontworpen met duidelijkheid als uitgangspunt: geen verborgen kosten, geen verwarrend jargon, alleen heldere informatie die u helpt betere beslissingen te nemen, met meer vertrouwen te handelen en de controle over uw risico te behouden.";
$about_text_4 = "Ons platform bespaart u uren aan giswerk en beschermt u tegen ondoorzichtige alternatieven van lage kwaliteit. Wij geloven dat goede tools en eerlijke informatie traders in staat stellen strategisch te handelen en duurzaam te groeien.";

// -- contact page --
$contact_label = "Neem contact op";
$contact_title = "Contact met $site_name";
$contact_subtitle = "Heeft u een vraag of heeft u ondersteuning nodig? Wij staan klaar om u te adviseren en te begeleiden.";
$contact_text = "Bij $site_name geloven wij dat succes in het handelen niets met geluk te maken heeft — het komt voort uit precisie, vooruitziendheid en een goede planning.";
$contact_form_text = "Vul eenvoudig het onderstaande formulier in, en een lid van ons team neemt spoedig contact met u op.";
$contact_form_button = "Bericht versturen";

// -- footer navigation labels (geo-page footer, TZ items 12/16/18) --
$footnav_col_pages = "Pagina's";
$footnav_col_support = "Ondersteuning";
$footnav_col_legal = "Juridisch";
$footnav_col_company = "Bedrijf";
$footnav_home = "Home";
$footnav_sitemap = "Sitemap";
$footnav_conditions = "Gebruiksvoorwaarden";
$footnav_contact = "Contact";
$footnav_signup = "Aanmelden";
$footer_risk_warning = "Risicowaarschuwing";

// -- geo-page footer legal disclaimer (single-paragraph variant used by
// the geo template's own footer layout; the two-paragraph TZ item 21
// text above -- $footer_disclaimer_p1/$footer_disclaimer_p2 -- covers
// the root pages) --
$footer_disclaimer = "$site_name aanvaardt geen enkele verantwoordelijkheid voor verlies of schade die voortvloeit uit het vertrouwen op de informatie die op deze website wordt aangeboden, waaronder educatief materiaal, prijsnoteringen, grafieken en analyses. Handelen op financiële markten brengt aanzienlijke risico's met zich mee; raadpleeg voordat u investeert een professionele adviseur. Investeer nooit meer dan u zich kunt veroorloven te verliezen. De risico's die verbonden zijn aan FX, CFD's en cryptocurrencies zijn mogelijk niet geschikt voor alle beleggers. $site_name is niet verantwoordelijk voor handelsverliezen die u kunt oplopen door het gebruik van of vertrouwen op de gegevens of informatie die op deze website beschikbaar zijn.";

// ============================================================
// Geo-language SUBPAGE fallback content (TZ item 16 cont.). Same
// rationale as the block above: conditions/contacts/faq/offer/
// privacy/product/risk-warning/sign.php share templates across the
// bg/cs/da/... stub folders and reference these vars directly.
// English fallback so every geo folder's subpages render complete.
// ============================================================

// -- shared form aliases (service-page forms reuse the hero disclaimer) --
$form_disclaimer_risk_note = "Lees ook onze";
$form_text = $form_disclaimer_prefix;
$form_text_privacy = $form_privacy_link_label;
$form_text_privacy_and = $form_disclaimer_and;
$form_text_conditions = $form_terms_link_label;
$form_text_conditions_of = $form_disclaimer_of_site;
$form_text_risk_warning_note = $form_disclaimer_risk_note;
$form_submit = "Aanmelden";

// -- generic breadcrumbs (sign-up / product pages) --
$breadcrumb_home = "Home";
$breadcrumb_current = "Inloggen/Registreren";
$breadcrumb_product = "Product";

// -- sign-up page official heading --
$official_heading = "Meld u aan bij het officiële platform™ van $site_name";
$official_description = "Maak uw gratis account aan om te beginnen met het verhandelen van cryptocurrency op een veilig, transparant platform.";

// -- product page: analytics banner --
$analytics_heading = "Handel slimmer met $site_name";
$analytics_description = "Bekijk heldere, realtime marktgegevens en AI-gestuurde inzichten. Neem met vertrouwen weloverwogen handelsbeslissingen.";

// -- product page: dashboard preview --
$app_main_heading = "Uw Handelsdashboard";
$app_feature_1_title = "Live Marktgegevens";
$app_feature_1_text = "Realtime prijzen en grafieken binnen handbereik";
$app_feature_2_title = "Portefeuille Bijhouden";
$app_feature_2_text = "Uitgebreide saldo- en prestatiestatistieken";
$app_feature_3_title = "Mobiele Weergave";
$app_feature_3_text = "Geoptimaliseerd voor mobiele browsers";
$app_feature_4_title = "Watchlists";
$app_feature_4_text = "Houd de activa bij die u volgt";

// -- product page: capabilities --
$capabilities_main_title = "Dit Krijgt U";
$capabilities_feature_1_title = "AI-gestuurde Signalen";
$capabilities_feature_1_text = "Geavanceerde algoritmen analyseren marktsignalen en signaleren dag en nacht kansen.";
$capabilities_feature_2_title = "Snelle Inschrijving";
$capabilities_feature_2_text = "Meld u binnen enkele minuten aan met een veilig, eenvoudig registratieproces.";
$capabilities_feature_3_title = "Geverifieerde Beveiliging";
$capabilities_feature_3_text = "256-bit SSL-versleuteling, 2FA en 98% cold storage beschermen uw tegoeden bij elke stap.";
$capabilities_feature_4_title = "Doorlopende Ondersteuning";
$capabilities_feature_4_text = "Krijg begeleiding van ons team bij elke stap, van aanmelding tot uw eerste trade.";

// -- product page: stats strip --
$products_stats_currencies_v = "65+";
$products_stats_currencies_l = "Beschikbare valuta";
$products_stats_users_v = "4M+";
$products_stats_users_l = "Geregistreerde gebruikers";
$products_stats_volume_v = "98+";
$products_stats_volume_l = "Ondersteunde landen";
$products_stats_countries_v = "24/7";
$products_stats_countries_l = "Toegang tot transacties";

// -- product page: 3-step strip --
$step_1 = "Maak een account aan";
$step_2 = "Stort geld";
$step_3 = "Begin met handelen met uw passende strategie";

// -- shared "last update" label (privacy page) --
$last_update = "Laatst bijgewerkt";

// -- FAQ page --
$faq_page_meta_title = "FAQ | Ondersteuning $site_name";
$faq_page_meta_description = "Antwoorden op veelgestelde vragen over hoe $site_name werkt, de kosten en hoe u kunt beginnen.";
$faq_page_title = "FAQ";
$faq_page_breadcrumb_home = "Home";
$faq_page_breadcrumb_current = "FAQ";
$faq_page_help_title = "Hoe kunnen wij u helpen?";
$faq_1_q = "Hoe kom ik aan de slag?";
$faq_1_a = "Maak uw account aan, verifieer uw e-mailadres en doe uw eerste storting — plannen beginnen vanaf $app_price $app_currency.";
$faq_2_q = "Zijn mijn geld en gegevens veilig? Is $site_name betrouwbaar?";
$faq_2_a = "Ja. Uw gegevens zijn beveiligd met 256-bit-versleuteling volgens de industriestandaard, en uw tegoeden worden beschermd met tweefactorauthenticatie en 98% cold storage.";
$faq_3_q = "Kan ik mijn account op elk moment sluiten of geld opnemen?";
$faq_3_a = "Ja. Er zijn geen beperkingen op opnames. Neem op elk moment contact op met ons supportteam en wij helpen u met uw account of verwerken uw opname direct.";
$faq_4_q = "Hoe weet ik of dit platform bij mij past?";
$faq_4_a = "$site_name is gemaakt voor zowel complete beginners als ervaren traders die efficiënter willen handelen — elke tool op het platform is ontworpen om u geïnformeerd te houden en in controle te laten.";
$faq_5_q = "Heb ik handelservaring nodig om te beginnen?";
$faq_5_a = "Voorafgaande ervaring is niet vereist. Onze AI-ondersteunde modus verzorgt de analyse voor u, en u kunt op elk moment overschakelen naar de handmatige modus wanneer u meer controle wilt.";

// -- contacts page --
$contacts_h3 = "Heeft u technische vragen of vragen over uw account? Neem dan contact op via e-mail";

// -- offer page (meta title/description already defined above) --
$offer_breadcrumb_home = "Home";
$offer_breadcrumb_current = "Aanbod";
$offer_cta_h1 = "Begin Vandaag met Handelen";
$offer_cta_text = "Begin binnen enkele minuten: meld u aan, stort geld op uw account en begin met het verhandelen van cryptocurrency op een veilig, gereguleerd platform.";
$offer_how_it_works_title = "Hoe Het Werkt";
$offer_official_platform_title = "Dit is het officiële handelsplatform™ van $site_name";
$offer_official_platform_text = "Een betrouwbare, transparante manier om cryptocurrency te verhandelen met realtime inzichten en volledige controle.";

// -- conditions of use page --
$conditions_meta_title = "Gebruiksvoorwaarden | $site_name";
$conditions_meta_description = "Bekijk de officiële voorwaarden voor het gebruik van de website en het handelsplatform van $site_name.";
$conditions_breadcrumb_home = "Home";
$conditions_breadcrumb_current = "Gebruiksvoorwaarden";
$conditions_h1 = "Gebruiksvoorwaarden";
$conditions_s1_title = "1. Algemeen";
$conditions_s1_text = "Deze website biedt toegang tot een online handelsplatform voor cryptocurrency. Gebruik van het platform houdt volledige aanvaarding in van deze Voorwaarden en ons Privacybeleid.";
$conditions_s2_title = "2. Geschiktheid";
$conditions_s2_text = "Gebruikers moeten ten minste 18 jaar oud zijn en volledig handelingsbekwaam zijn binnen hun rechtsgebied.";
$conditions_s3_title = "3. Beperkte toegang";
$conditions_s3_text = "Toegang kan beperkt zijn in rechtsgebieden waar lokale regelgeving dit soort handelsdienst verbiedt.";
$conditions_s4_title = "4. Verboden gebruik";
$conditions_s4_text = "Gebruikers mogen het systeem niet misbruiken, geen ongeautoriseerde toegang tot onze systemen proberen te verkrijgen en geen reverse-engineering toepassen op onze software.";
$conditions_s5_title = "5. Intellectueel eigendom";
$conditions_s5_text = "Alle broncode, gebruikersinterfaces en merkelementen blijven het exclusieve eigendom van de exploiterende onderneming.";
$conditions_s6_title = "6. Aansprakelijkheid";
$conditions_s6_text = "Platformtools worden aangeboden op 'as is'-basis. Wij aanvaarden geen aansprakelijkheid voor resultaten die voortvloeien uit de eigen handelsbeslissingen van de gebruiker.";
$conditions_s7_title = "7. Diensten van derden";
$conditions_s7_text = "Integraties met betalingsproviders van derden werken via beveiligde verbindingen. Voor stortingen en opnames hebben gebruikers rechtstreeks contact met de door hen gekozen provider.";
$conditions_s8_title = "8. Externe links";
$conditions_s8_text = "Links naar externe bronnen worden uitsluitend voor het gemak aangeboden. Wij onderschrijven of garanderen externe software niet.";
$conditions_s9_title = "9. Overige bepalingen";
$conditions_s9_text = "Wij behouden ons het recht voor om deze voorwaarden of de dienst op elk moment te wijzigen na publicatie op de website.";

// -- privacy policy page (meta title/description already defined above) --
$privacy_breadcrumb_home = "Home";
$privacy_breadcrumb_current = "Privacybeleid";
$privacy_page_h1 = "Privacybeleid";
$privacy_intro = "Wij respecteren uw privacy en verwerken persoonsgegevens volledig in overeenstemming met internationale normen en de Europese AVG-verordening (GDPR).";
$privacy_transparency_title = "Transparantie";
$privacy_transparency_text = "Wij geven duidelijk aan hoe operationele telemetrie wordt verwerkt. Neem voor meer informatie contact op met onze ondersteuning.";
$privacy_usage_title = "Gebruik van gegevens";
$privacy_usage_text = "Gegevens worden uitsluitend gebruikt om toegang te verlenen, sessies te beveiligen en te voldoen aan wettelijke verplichtingen.";
$privacy_rights_short_title = "Uw rechten";
$privacy_rights_short_text = "U behoudt het volledige recht om uw persoonsgegevens in te zien, te laten bijwerken of verwijdering ervan aan te vragen.";
$privacy_security_title = "Beveiliging";
$privacy_security_text = "Wij passen AES-256-encryptie en gescheiden databases toe om operationele telemetrie te beschermen.";
$privacy_s1_title = "1. Gegevensverzameling";
$privacy_s1_text = "Wij verzamelen gebruikstelemetrie (IP-adres, systeemparameters, browsertype) en door de gebruiker verstrekte verificatiegegevens.";
$privacy_s2_title = "2. Rechtsgrondslag";
$privacy_s2_text = "De verwerking is gebaseerd op uitdrukkelijke toestemming van de gebruiker, wettelijke verplichtingen en de uitvoering van de dienstverlening.";
$privacy_s3_title = "3. Delen van gegevens";
$privacy_s3_text = "Gegevens worden nooit commercieel geëxploiteerd. Verstrekking is beperkt tot geautoriseerde clearinginstellingen en technische partners die gebonden zijn aan een geheimhoudingsovereenkomst (NDA).";
$privacy_s4_title = "4. Cookies";
$privacy_s4_text = "Essentiële cookies worden gebruikt voor sessieauthenticatie en optimalisatie van de interface.";
$privacy_google_choices = 'Beheer uw trackingvoorkeuren via <a href="http://www.google.com/settings/ads" target="_blank" rel="noopener">Google Ads-instellingen</a> of gebruik de <a href="https://tools.google.com/dlpage/gaoptout" target="_blank" rel="noopener">Google Analytics-opt-out-invoegtoepassing</a>. U kunt ook Google\'s eigen gegevenspraktijken raadplegen in het <a href="https://www.google.com/intl/en/policies/privacy/" target="_blank" rel="noopener">Privacybeleid</a>.';
$privacy_s5_title = "5. Bewaartermijn van gegevens";
$privacy_s5_text = "Persoonsgegevens worden uitsluitend bewaard zolang dit noodzakelijk is om te voldoen aan de vereisten voor systeemtoegang.";
$privacy_s6_title = "6. Internationale gegevensoverdracht";
$privacy_s6_text = "Grensoverschrijdende gegevensoverdracht vindt uitsluitend plaats via versleutelde kanalen en standaard contractuele clausules.";
$privacy_s7_title = "7. Links naar derden";
$privacy_s7_text = "Wij zijn niet verantwoordelijk voor het privacybeleid van externe diensten van derden waarnaar op onze website wordt gelinkt.";
$privacy_s8_title = "8. Wijzigingen";
$privacy_s8_text = "Dit beleid kan periodiek worden gewijzigd om systeem- of wetswijzigingen te weerspiegelen.";
$privacy_rights_title = "Uw rechten";
$privacy_rights_text = "Gebruikers hebben het recht om inzage, rectificatie, beperking van de verwerking of volledige verwijdering van hun opgeslagen gegevens aan te vragen.";

// -- risk warning page --
$page_title_risk_warning = "Risicowaarschuwing | $site_name";
$page_description_risk_warning = "Begrijp de risico's van handelen en hoe $site_name u helpt deze met vertrouwen te beheren.";
$risk_warning_breadcrumb_home = "Home";
$risk_warning_breadcrumb_current = "Risicowaarschuwing";
$risk_warning_title = "Risicowaarschuwing";
$risk_warning_intro = "Inzicht in risico's is de eerste stap naar zelfverzekerd handelen.";
$risk_warning_ai_heading = "Hoe ons AI-systeem helpt bij risicobeheer:";
$risk_warning_ai_1 = "<strong>Algoritmische efficiëntie &amp; emotieloos handelen:</strong> Geavanceerde algoritmen analyseren marktsignalen om trades objectief uit te voeren op de optimale momenten.";
$risk_warning_ai_2 = "<strong>Datagedreven strategieën:</strong> Strategieën zijn gebaseerd op geverifieerde marktpatronen en realtime analyse, in plaats van giswerk.";
$risk_warning_ai_3 = "<strong>Flexibele instellingen &amp; volledige controle:</strong> Pas uw risicoparameters op elk moment aan. Volg al uw saldi en trades transparant op uw dashboard, zonder verborgen kosten en met opnames zonder beperkingen.";
$risk_warning_disclaimer = "<strong>Disclaimer:</strong> Handelen brengt altijd risico met zich mee. Geautomatiseerde systemen (inclusief AI) garanderen geen winst, kunnen falen door softwarefouten of onverwachte marktgebeurtenissen, en vereisen monitoring door de gebruiker. Resultaten uit het verleden bieden geen garantie voor de toekomst. Dit platform dient uitsluitend informatieve en marketingdoeleinden en biedt geen financieel advies.";
$risk_warning_s1_heading = "1. Algemene &amp; cryptocurrency-marktrisico's";
$risk_warning_s1_1 = "Cryptocurrencies zijn zeer volatiele, speculatieve activa die 24/7 worden verhandeld met minimaal regelgevend toezicht in de meeste rechtsgebieden.";
$risk_warning_s1_2 = "Waarden kunnen binnen korte tijd drastisch schommelen, wat kan leiden tot een volledig verlies van het geïnvesteerde kapitaal.";
$risk_warning_s1_3 = "Marktwaarden kunnen sterk worden beïnvloed door wijzigingen in regelgeving, technische ontwikkelingen, beveiligingsincidenten of bredere macro-economische gebeurtenissen.";
$risk_warning_s1_4 = "Sommige activa kunnen hun volledige waarde verliezen. Investeer alleen geld dat u zich kunt veroorloven te verliezen.";
$risk_warning_s2_heading = "2. Risico's op het gebied van uitvoering, liquiditeit &amp; hefboomwerking";
$risk_warning_s2_1 = "<strong>Marktvolatiliteit &amp; liquiditeit:</strong> Extreme prijsschommelingen (10–20%+ per dag) of lage liquiditeit (vooral bij kleinere coins) kunnen leiden tot vertragingen, platformstoringen en ernstige slippage bij uitvoering. Stop-loss-orders kunnen onder extreme omstandigheden geen verlieslimieten garanderen.";
$risk_warning_s2_2 = "<strong>Hefboom- &amp; margerisico's:</strong> Producten met hefboomwerking vergroten zowel winsten als verliezen, wat betekent dat u meer kunt verliezen dan uw initiële inleg. Ongeveer 70–80% van de particuliere beleggersrekeningen verliest geld bij het handelen in producten met hefboomwerking.";
$risk_warning_s3_heading = "3. Technische risico's, cybersecurity &amp; risico's van derden";
$risk_warning_s3_1 = "<strong>Technische factoren:</strong> Online handelen brengt inherent risico's met zich mee, zoals internetverbindingsstoringen, hardware- of softwarefouten en het niet beschikbaar zijn van de dienst.";
$risk_warning_s3_2 = "<strong>Cybersecurity:</strong> Cryptocurrency-accounts zijn een veelvoorkomend doelwit voor phishing, malware en hacks. Transacties zijn onomkeerbaar; het compromitteren van uw inloggegevens kan leiden tot permanent verlies.";
$risk_warning_s3_3 = "<strong>Platforms van derden:</strong> Deze website kan gebruikers verbinden met platforms van derden. Wij hebben geen controle over, en onderschrijven of garanderen niet, hun beveiliging, werking of solvabiliteit. Voer altijd uw eigen due diligence uit voordat u geld stort op externe platforms.";
$risk_warning_s4_heading = "4. Regelgeving, belastingen &amp; slotbepalingen";
$risk_warning_s4_1 = "<strong>Wettelijke naleving &amp; belastingen:</strong> Regelgevende kaders verschillen sterk en veranderen snel. Gebruikers zijn zelf volledig verantwoordelijk voor het naleven van lokale wetgeving bij hun handelsactiviteiten en voor het voldoen aan hun eigen belastingverplichtingen.";
$risk_warning_s4_2 = "<strong>Geen winstgaranties:</strong> Er bestaat geen \"veilige\" of risicovrije manier van handelen in crypto. Eventuele rendementscijfers of prestatievoorbeelden zijn puur hypothetisch.";
$risk_warning_s4_3 = "<strong>Geschiktheid:</strong> Als u de risico's niet volledig begrijpt, afhankelijk bent van essentiële financiële middelen, of handelt met geleend geld, is handelen in crypto niet geschikt voor u. Raadpleeg bij twijfel een onafhankelijke, erkende financieel adviseur.";
$risk_warning_contact = "<strong>Contact:</strong> Neem voor vragen over deze verklaring of om een verzoek in te dienen contact op met ons officiële klantenserviceteam via het contactformulier op onze website.";

