<?php
require __DIR__ . '/../lang.php';
$site_lang = 'da-DK';
$form_language = 'da'; // matches this page's own language, not the offer's global default

// ============================================================
// DA TRANSLATION OVERRIDES
// Identity/config vars ($site_name, $site_slug, $site_domain, $site_url, $app_price, $app_currency, $site_lang, $country_name, $country_flag_code, $privacy_last_update, $rating_value, $rating_count, $review_count, $form_country, $form_language, $form_phone_country, $form_only_countries, $review_1_author, $review_2_author, $review_3_author, $review_4_author, $quiz_consultant_name) are
// intentionally NOT overridden -- they stay exactly as inherited from the
// root lang.php.
// ============================================================

// Brand / Platform Variables

// Geo-language stats bar fallback content (used by the language-folder pages'
// own "stats" section; the fr/de/it/nl folders override these with native
// translations, the other 19 folders inherit this English fallback)
$stat_1_value = "4M+";
$stat_1_label = "Registrerede Brugere";
$stat_2_value = "98+";
$stat_2_label = "Understøttede Lande";
$stat_3_value = "65+";
$stat_3_label = "Tilgængelige Valutaer";
$stat_4_value = "24/7";
$stat_4_label = "Transaktionsadgang";
$stat_5_value = "256-bit";
$stat_5_label = "Krypteringsstandard";
$stat_6_value = "$500M+";
$stat_6_label = "Samlede Kundeindskud";

// Keitaro Form Integration Variables (defaults -- overwritten per-launch by
// generate_lang_files(); must stay valid on their own since nothing else in
// this file replaces them for a page that's ever served un-generated)

// 4 Verified Reviews (TZ Item 8)
$review_1_role = "Frankrig";
$review_1_text = "Jeg startede med 500 € bare for at se, hvordan platformen fungerede. Efter cirka tre uger var min saldo vokset til omkring 1120 €. Grænsefladen er nem at bruge, og markedsindsigterne hjalp mig med at træffe bedre beslutninger.";
$review_1_badge = "Rapporteret Afkast +18,4%";

$review_2_role = "Tyskland";
$review_2_text = "Jeg har prøvet et par handelsplatforme før, men denne har været min favorit indtil videre. Den er let at navigere i, værktøjerne er virkelig nyttige, og jeg har haft en meget positiv oplevelse generelt.";
$review_2_badge = "Rapporteret Afkast +19,1%";

$review_3_role = "Italien";
$review_3_text = "Det, der imponerede mig mest, var hvor intuitivt alt føles. Registreringen var hurtig, dashboardet er velorganiseret, og platformen har gjort handel meget mere bekvemt for mig.";
$review_3_badge = "Rapporteret Afkast +16,8%";

$review_4_role = "Holland";
$review_4_text = "Jeg havde ingen tidligere handelserfaring, så jeg startede med 750 €. Inden for en måned nåede jeg lige over 1765 € ved at følge værktøjerne og læringsressourcerne. Det har været en god måde at opbygge selvtillid på.";
$review_4_badge = "Rapporteret Afkast +18,0%";

$review_verified_label = "Verificeret Bruger";
$reviews_section_title = "Anmeldelser af $site_name";
$reviews_badge_trustworthy = "Troværdig";
$reviews_summary_rating = "4,7";
$reviews_summary_count = "189";
$reviews_summary_desc = "En kraftfuld og intuitiv handelsplatform med robuste automatiserede værktøjer, realtidsanalyser og omfattende læringsressourcer.";

// CONSULTANT / CHAT QUIZ (TZ Item 13)
$quiz_consultant_role = "Handelskonsulent";
$quiz_text_welcome = "Hej! Jeg er din personlige handelsassistent. Tag en 30-sekunders quiz for at finde ud af, hvordan automatiseret AI-handel kan fungere for dig.";
$quiz_text_q1 = "Har du nogensinde handlet med kryptovalutaer eller finansielle markeder før?";
$quiz_text_a1_yes = "Ja, jeg har noget erfaring";
$quiz_text_a1_no = "Nej, jeg er helt nybegynder";
$quiz_text_q2 = "Hvad er dit primære finansielle mål med online handel?";
$quiz_text_q3 = "Foretrækker du, at AI'en udfører handler automatisk, eller vil du handle manuelt?";
$quiz_text_a3_yes = "Automatiseret AI-Handel (Anbefalet)";
$quiz_text_a3_no = "Manuel Handel med AI-Signaler";
$quiz_text_q4 = "Hvad er dit indledende budget til handel?";
$quiz_text_a4_1 = "250 $ - 500 $";
$quiz_text_a4_2 = "500 $ - 1.500 $";
$quiz_text_a4_3 = "1.500 $+";
$quiz_text_q5 = "Er du klar til at oprette din konto og få fuld adgang til platformen?";
$quiz_text_a5_yes = "Ja, lad os komme i gang!";
$quiz_text_a5_no = "Jeg vil gerne have mere information";
$quiz_text_loader = "Analyserer dine svar og forbereder optimale handelsparametre...";
$quiz_text_final_ttl = "Din Kontoopsætning Er Klar!";
$quiz_text_processing = "Konfigurerer din platformsadgang...";
$quiz_text_typing = "skriver...";
$quiz_placeholder_fname = "Fornavn";
$quiz_placeholder_lname = "Efternavn";
$quiz_placeholder_email = "E-mailadresse";
$quiz_placeholder_phone = "Telefonnummer";
$quiz_btn_submit = "Fuldfør Registrering";

// METADATA (TZ Item 10)
$home_meta_title = "$site_name — Handelsplatform | Officiel Side";
$home_meta_description = "Den officielle $site_name-hjemmeside tilbyder en sikker platform til handel med kryptovaluta med avancerede handelsværktøjer, realtids markedsindsigt og en brugervenlig oplevelse for handlende.";

// NAVIGATION & HEADER (TZ Item 3, 12)
$nav_about = "Om Os";
$nav_how = "Sådan Virker Det";
$nav_why = "Hvorfor Handle";
$nav_faq = "FAQ";
$nav_contacts = "Kontakt Os";
$nav_signin = "Log Ind";
$nav_signup = "Tilmeld Dig";

$mobnav_home = "Hjem";
$mobnav_product = "Produkt";
$mobnav_offer = "Tilbud";
$mobnav_contact = "Kontakt Os";
$mobnav_faq = "FAQ";
$mobnav_signup = "Tilmeld Dig";

// HERO SECTION
$hero_h1 = "<mark>$site_name</mark> Platform";
$hero_text = "Officiel $site_name kryptovaluta-handelsplatform";

// LEAD FORM
$form_fname_placeholder = "Fornavn";
$form_lname_placeholder = "Efternavn";
$form_email_placeholder = "E-mail";
$form_phone_placeholder = "Telefonnummer";
$form_btn_submit = "Tilmeld Dig";
$form_disclaimer_text = "Ved at indtaste dine personlige oplysninger og klikke på knappen accepterer du <a class='link link-primary' href='privacy.php'>Privatlivspolitikken</a> og <a class='link link-primary' href='conditions.php'>Brugsvilkårene</a> for denne hjemmeside.";

// SECURITY BADGES
$badge_ssl = "256-bit SSL";
$badge_payments = "Sikre Betalinger";
$badge_2fa = "2FA";
$badge_cold_storage = "98% Cold Storage";
$badge_regulated = "Reguleret";
$badge_traders_trust = "Over 4M Handlende Stoler På Os";

// SAFE SECTION (Vos fonds sont en sécurité)
$safe_title = "<mark>Dine Midler Er Sikre</mark> hos $site_name";
$safe_desc = "Kryptering på bankniveau, verificerede betalingsprocessorer og 98% cold storage — dine penge er beskyttet ved hvert trin.";

$safe_item1_title = "Verificerede Betalingsudbydere";
$safe_item1_desc = "Betalinger behandles udelukkende gennem certificerede udbydere, der overholder internationale sikkerhedsstandarder. Dine kortoplysninger gemmes aldrig på vores platform.";
$safe_item1_badge = "Sikre Betalinger";

$safe_item2_title = "Tofaktorgodkendelse (2FA)";
$safe_item2_desc = "Tilføj et ekstra lag beskyttelse til din konto med tidsbaserede engangskoder via SMS eller Google Authenticator.";
$safe_item2_badge = "2FA";

$safe_item3_title = "98% Cold Storage";
$safe_item3_desc = "Langt størstedelen af digitale aktiver opbevares i geografisk fordelte offline cold storage-hvælvinger beskyttet af multi-signatur-protokoller.";
$safe_item3_badge = "98% Cold Storage";

$safe_item4_title = "Reguleret Udførelse";
$safe_item4_desc = "Vi samarbejder med regulerede mæglerfirmaer og likviditetsudbydere verden over for at opretholde compliance, gennemsigtighed og udførelse i topklasse.";
$safe_item4_badge = "Reguleret";

$safe_item5_title = "256-bit SSL-Kryptering";
$safe_item5_desc = "Alle dataoverførsler mellem din browser og vores servere er krypteret med militærgrade kryptografiske TLS 1.3-protokoller.";
$safe_item5_badge = "256-bit SSL";

// FREE GUIDE CTA BANNER (CTA 2)
$guide_cta_title = "Få Den Gratis Guide";
$guide_cta_subtitle = "«10 Fejl at Undgå i Krypto-Handel»";
$guide_cta_btn = "Få Gratis Guide";

// TRUST SECTION (Pourquoi les investisseurs font confiance à Ciel Cryptance)
$trust_title = "Hvorfor Handlende Stoler På <mark>$site_name</mark>";
$trust_desc = "Over 4.000.000 brugere verden over vælger $site_name for dens pålidelighed, kraftfulde automatisering og gennemsigtige miljø.";
$trust_subtitle = "Førende Fordele for Den Moderne Handlende:";

$trust_item1_title = "Global Markedsadgang";
$trust_item1_desc = "Handl med over 100 kryptovalutaer, Forex-par, aktier og råvarer fra ét samlet handelspanel.";

$trust_item2_title = "Robust Beskyttelse af Midler";
$trust_item2_desc = "Adskilte konti, kontinuerlige biometriske kontroller og topmoderne cybersikkerhed beskytter din kapital 24/7.";

$trust_item3_title = "Ingen Skjulte Gebyrer";
$trust_item3_desc = "Nyd krystalklar prissætning. Gratis registrering, gratis indskud, ingen platformsforvaltningsgebyrer og øjeblikkelige udbetalingsanmodninger.";

$trust_item4_title = "Lydhør Support";
$trust_item4_desc = "Vores dedikerede supportteam er tilgængeligt via live chat, telefon eller e-mail for at hjælpe med spørgsmål eller tekniske forespørgsler.";

$trust_market_info_text = "Mere information om markedsforholdene i 2026";
$trust_market_info_btn = "Hvorfor Handle";

// START TRADING CTA (CTA 3)
$start_cta_title = "Begynd at Handle med <span data-local-currency='$app_price'>$app_price $app_currency</span>!";
$start_cta_desc = "Klar til at prøve $site_name? Registrer dig nu og bliv en del af det voksende fællesskab af krypto-investorer og handlende.";
$start_cta_btn = "Tilmeld Dig";

// FAQ SECTION
$faq_title = "$site_name Ofte Stillede Spørgsmål <mark>(FAQ)</mark>";
$faq_q1 = "Hvad er $site_name, og hvordan fungerer det?";
$faq_a1 = "Det er en AI-drevet handelsplatform, der arbejder for dig 24 timer i døgnet. Systemet analyserer markeder, spotter muligheder og udfører handler automatisk. Du kan lade AI'en klare det hele eller skifte til manuel tilstand for at handle på dine egne betingelser når som helst.";

$faq_q2 = "Hvor sikre er mine penge og data på $site_name?";
$faq_a2 = "Sikkerhed er indbygget i hvert lag af platformen. Personlige data er beskyttet ved hjælp af internationalt anerkendte krypteringsstandarder og avanceret kontogodkendelse. Alle finansielle transaktioner behandles udelukkende gennem betroede og verificerede betalingsudbydere. Al din handelsaktivitet er synlig i realtid, så du altid ved præcis, hvad der sker med dine midler.";

$faq_q3 = "Kan jeg hæve mit overskud når som helst?";
$faq_a3 = "Ja. Der er ingen begrænsninger for, hvornår eller hvor ofte du kan hæve dine midler fra $site_name. Din kontosaldo forbliver under din fulde kontrol til enhver tid. Udbetalinger behandles gennem de samme pålidelige betalingsudbydere, der bruges til indskud, hvilket garanterer hurtige og sikre overførsler.";

$faq_q4 = "Er der skjulte gebyrer eller ekstra omkostninger?";
$faq_a4 = "Ingen. $site_name opkræver ingen abonnementsgebyrer, ingen registreringsgebyrer og ingen skjulte omkostninger. Det eneste beløb, der kræves for at komme i gang, er minimumsindskuddet på <span data-local-currency='$app_price'>$app_price $app_currency</span>, som krediteres direkte til din handelskonto. Alle større betalingsmetoder accepteres, inklusive kreditkort, bankoverførsler og PayPal.";

$faq_q5 = "Kræves der forudgående handelserfaring for at komme i gang?";
$faq_a5 = "Slet ikke. $site_name er designet til både komplette begyndere og erfarne handlende. I fuldautomatiseret tilstand tager AI'en sig af alt for dig, herunder markedsanalyse, signalgenerering og ordreudførelse. Hvis du foretrækker at bevare kontrollen, kan du skifte til manuel tilstand når som helst.";

$faq_cta_text = "Har du spørgsmål? Tjek vores FAQ, eller kontakt vores supportteam.";
$faq_cta_faq_btn = "FAQ";
$faq_cta_contact_btn = "Kontakt Os";

// NEW TRADER LEAD SECTION (Bottom form)
$lead_title = "Ny til Handel?";
$lead_p1 = "Efter registrering modtager du vores gratis guide <mark class='text-on-surface-tertiary-accent'>«10 Fejl at Undgå i Kryptovaluta-Handel»</mark>. Den indeholder ligetil råd fra vores mest erfarne analytikere for at hjælpe dig med at undgå almindelige faldgruber.";
$lead_p2 = "Indtast blot dine oplysninger i registreringsformularen, så sender vi den direkte til din indbakke. Mange handlende er startet med denne guide og har fundet den uvurderlig til at opbygge selvtillid i deres første handler.";
$lead_form_heading = "Markedet venter ikke — start i dag!";

// FEATURES TABLE (Fonctionnalités principales)
$features_title = "<mark>Vigtige Funktioner</mark> ved $site_name Handelsplatform";
$feature_1_title = "🤖 Platformsteknologi";
$feature_1_val = "Avanceret AI-drevet handelsmotor";
$feature_2_title = "💳 Finansieringsmetoder";
$feature_2_val = "Store kreditkort, bankoverførsler, PayPal";
$feature_3_title = "📱 Platformsadgang";
$feature_3_val = "Kompatibilitet på tværs af enheder (Desktop, Tablet, Mobil)";
$feature_4_title = "🚀 Succesrate";
$feature_4_val = "85% analytisk præcision";
$feature_5_title = "📊 Handelsinstrumenter";
$feature_5_val = "Kryptovaluta, Forex, Aktier, Råvarer, Ædelmetaller, CFD'er og mere…";
$feature_6_title = "✍️ Kontoopsætning";
$feature_6_val = "Hurtig og ligetil registrering";
$feature_7_title = "📞 Kundesupport";
$feature_7_val = "24/7 professionel dedikeret support";

// FOOTER DISCLAIMER (TZ Item 21)
$footer_disclaimer_p1 = "$site_name leverer uddannelsesindhold og generel information om finansielle markeder, online handel og digitale aktiver. Alt materiale offentliggjort på denne hjemmeside, herunder artikler, diagrammer, prisdata, markedsindsigt og analyser, er kun beregnet til informationsformål og bør ikke betragtes som finansiel, investerings- eller juridisk rådgivning. Selvom vi bestræber os på at holde vores indhold nøjagtigt og opdateret, garanterer vi ikke dets fuldstændighed eller pålidelighed og påtager os intet ansvar for tab, der opstår som følge af brugen af denne hjemmeside.";
$footer_disclaimer_p2 = "Handel med kryptovaluta, Forex, CFD'er, aktier og andre finansielle instrumenter indebærer betydelig risiko og er muligvis ikke egnet for enhver investor. Markedsforholdene kan ændre sig hurtigt, og tidligere resultater garanterer ikke fremtidige resultater. Før du træffer investeringsbeslutninger, bør du nøje vurdere din økonomiske situation og risikotolerance og søge uafhængig professionel rådgivning, hvis det er nødvendigt. Investér kun penge, du har råd til at tabe.";
$footer_copyright = "© " . date('Y') . " $site_name. All rights reserved.";

// FOOTER NAV LINKS
$footnav_about = "Om Os";
$footnav_how = "Sådan Virker Det";
$footnav_why = "Hvorfor Handle";
$footnav_faq = "FAQ";
$footnav_contacts = "Kontakt Os";
$footnav_privacy = "Privatlivspolitik";
$footnav_risk = "Risikoadvarsel";
$footnav_terms = "Brugsvilkår";
$footnav_product = "Produkt";
$footnav_offer = "Tilbud";

// ABOUT PAGE VARIABLES
$about_meta_title = "Om Os | $site_name Officiel Side";
$about_meta_description = "Lær mere om $site_name, vores mission om at demokratisere de finansielle markeder gennem AI-automatisering, og vores sikkerhedsramme på institutionelt niveau.";
$about_h1 = "Om <mark>$site_name</mark>";
$about_lead = "Vi styrker handlende verden over gennem kunstig intelligens, algoritmisk udførelse og virksomhedssikkerhed.";
$about_mission_title = "Vores Mission";
$about_mission_text = "Hos $site_name mener vi, at sofistikerede handelsteknologier bør være tilgængelige for alle, ikke kun institutionelle fonde. Vores platform bygger bro mellem almindelige detailinvestorer og topmoderne beregningsmæssige handelsalgoritmer.";
$about_tech_title = "Banebrydende Teknologi";
$about_tech_text = "Vores systemer evaluerer over 100.000 datapunkter hvert sekund på tværs af globale krypto-, Forex- og aktiemarkeder. Ved at kombinere prædiktive maskinlæringsmodeller med udførelse i sub-millisekunder leverer vi ultralav slippage og pålidelig ydeevne.";
$about_sec_title = "Sikkerhed & Regulatorisk Overholdelse";
$about_sec_text = "Kundetillid er kernefundamentet i vores økosystem. Vi implementerer 256-bit TLS-kryptering, strenge biometriske og 2FA-protokoller og opbevarer 98% af alle digitale reserver i cold storage-hvælvinger.";

// PRODUCT PAGE VARIABLES
$product_meta_title = "Handelsværktøjer & Produkt | $site_name";
$product_meta_description = "Udforsk handelsmotoren og AI-funktionerne, der driver $site_name. Automatiseret ordreudførelse, prædiktiv analyse og intuitive kontroller.";
$product_h1 = "<mark>Produkt & Funktioner</mark> for Platformen";
$product_lead = "Opdag de intelligente værktøjer designet til at give dig en konkurrencefordel på moderne kryptovaluta- og finansielle markeder.";
$product_f1_title = "Automatiseret AI-Handelsmotor";
$product_f1_text = "Lad neurale algoritmer analysere markedstendenser og udføre optimale handler døgnet rundt uden følelser.";
$product_f2_title = "Realtids Markedsanalyser";
$product_f2_text = "Live ordrebogsdybde, automatiseret mønstergenkendelse og institutionel sentimentsporing lige ved hånden.";
$product_f3_title = "Risikostyringspakke";
$product_f3_text = "Detaljerede stop-loss- og take-profit-grænser, kontrol af maksimal daglig eksponering og automatiserede afdækningsmuligheder.";
$product_f4_title = "Tilgængelighed på Tværs af Platforme";
$product_f4_text = "Handl problemfrit på tværs af desktop-browsere, tablets og smartphones med nul latenstid og fuld cloud-synkronisering.";

// OFFER PAGE VARIABLES
$offer_meta_title = "Særtilbud & Betingelser | $site_name";
$offer_meta_description = "Opdag det eksklusive registreringstilbud hos $site_name. Kom i gang med et indledende indskud på $app_price $app_currency og modtag dedikeret support.";
$offer_h1 = "Eksklusivt <mark>Handelstilbud</mark>";
$offer_lead = "Start din handelsrejse i dag med konkurrencedygtige fordele og dedikeret 1-til-1 kontoonboarding.";
$offer_step1_title = "1. Hurtig Registrering";
$offer_step1_text = "Udfyld vores korte registreringsformular for at sikre adgang til din personlige konto på under 2 minutter.";
$offer_step2_title = "2. Finansiér Din Handelssaldo";
$offer_step2_text = "Indbetal standardminimummet på $app_price $app_currency med kreditkort, bankoverførsel eller e-punge. 100% af dine midler går direkte ind i din handelssaldo.";
$offer_step3_title = "3. Aktivér AI-Handel";
$offer_step3_text = "Vælg automatiseret eller assisteret tilstand, vælg dine foretrukne aktivpar, og begynd at handle med fulde platformsmuligheder.";

// CONTACTS PAGE VARIABLES
$contacts_meta_title = "Kontakt Support | $site_name";
$contacts_meta_description = "Kom i kontakt med $site_name-teamet. 24/7 kundesupport, teknisk assistance og kontoforespørgsler.";
$contacts_h1 = "Kontakt <mark>Kundesupport</mark>";
$contacts_lead = "Vores dedikerede internationale supportteam er klar til at hjælpe dig 24 timer i døgnet, 7 dage om ugen.";
$contacts_info_title = "Officielle Forespørgsler";
$contacts_info_text = "For generelle forespørgsler, kontoverificering eller teknisk support, kontakt os gennem vores verificerede kommunikationskanaler.";
$contacts_support_hours = "24/7 Live Chat & E-mail Support";

// FAQ PAGE VARIABLES
$faq_meta_title = "FAQ & Videnbase | $site_name";
$faq_meta_description = "Find svar på ofte stillede spørgsmål om $site_name-konti, indskud, udbetalinger og automatiseret AI-handel.";
$faq_h1 = "$site_name <mark>FAQ</mark>";
$faq_lead = "Klare svar på de mest almindelige spørgsmål vedrørende platformssikkerhed, udbetalinger og automatiseret handel.";

// PRIVACY POLICY PAGE VARIABLES
$privacy_meta_title = "Privatlivspolitik | $site_name";
$privacy_meta_description = "Læs vores omfattende Privatlivspolitik for at forstå, hvordan $site_name indsamler, beskytter og administrerer dine personlige data.";
$privacy_h1 = "Privatlivspolitik";
$privacy_p1 = "Denne Privatlivspolitik beskriver, hvordan $site_name indsamler, bruger og videregiver information, når du besøger vores hjemmeside, registrerer en konto eller bruger vores handelssoftware.";
$privacy_sec1_title = "1. Dataindsamling & Brug";
$privacy_sec1_text = "Vi indsamler nødvendige kontaktoplysninger (navn, e-mailadresse, telefonnummer) for at oprette din konto, forbinde dig med verificerede mæglerpartnere og verificere identitet i overensstemmelse med internationale KYC- og AML-standarder.";
$privacy_sec2_title = "2. Cookies & Sporingsteknologier";
$privacy_sec2_text = "Vi bruger essentielle og analytiske cookies til at forbedre hjemmesidens ydeevne, personliggøre brugeroplevelsen og overvåge trafikmønstre. Du kan justere dine browsercookie-indstillinger når som helst.";
$privacy_sec3_title = "3. Datasikkerhed & GDPR-Rettigheder";
$privacy_sec3_text = "Alle brugerdata er krypteret under overførsel og i hvile ved hjælp af kryptografiske protokoller på bankniveau. Under den Generelle Forordning om Databeskyttelse (GDPR) har brugere ret til at anmode om adgang til, rettelse af eller sletning af deres personlige data.";

// TERMS OF USE PAGE VARIABLES
$terms_meta_title = "Brugsvilkår | $site_name";
$terms_meta_description = "Gennemgå de officielle Vilkår og Betingelser, der regulerer brugen af $site_name-platformen og tilknyttede tjenester.";
$terms_h1 = "Brugsvilkår";
$terms_p1 = "Læs venligst disse Brugsvilkår omhyggeligt, før du tilgår eller bruger $site_name. Ved at registrere en konto accepterer du at være bundet af disse bestemmelser.";
$terms_sec1_title = "1. Brugerberettigelse";
$terms_sec1_text = "Du skal være mindst 18 år og bosiddende i en jurisdiktion, hvor online handel og kryptovaluta-interaktioner er lovligt tilladt. Du er ansvarlig for at sikre overholdelse af dine lokale love.";
$terms_sec2_title = "2. Kontoregistrering & Sikkerhed";
$terms_sec2_text = "Du accepterer at give sande, nøjagtige og fuldstændige oplysninger under registreringen. Du er eneansvarlig for at opretholde fortroligheden af dine loginoplysninger.";
$terms_sec3_title = "3. Ansvarsbegrænsning";
$terms_sec3_text = "$site_name leverer informations- og softwareformidlingstjenester. Vi leverer ikke personlig finansiel rådgivning eller garanterer handelsrentabilitet. Handel med finansielle markeder indebærer iboende kapitalrisiko.";

// RISK WARNING PAGE VARIABLES (TZ Item 19: Exact 4 sections)
$risk_meta_title = "Risikoadvarsel & Juridisk Meddelelse | $site_name";
$risk_meta_description = "Vigtig risikooplysning vedrørende CFD-, Forex- og kryptovalutahandel på $site_name. Læs omhyggeligt før investering.";
$risk_h1 = "Risikoadvarsel";
$risk_sec1_title = "1. Meddelelse om Højrisikoinvestering & Volatilitet";
$risk_sec1_text = "Handel med kryptovaluta, kontrakter for forskel (CFD'er), udenlandsk valuta (Forex) og andre finansielle aktiver indebærer betydelig risiko for tab og er ikke egnet for alle investorer. Kryptovalutamarkeder er usædvanligt volatile, med priser der er udsat for kraftige udsving som reaktion på regulatoriske meddelelser, makroøkonomiske ændringer eller markedsstemning. Du bør aldrig investere penge, du ikke har råd til at tabe fuldstændigt.";
$risk_sec2_title = "2. Uafhængig Finansiel Rådgivning";
$risk_sec2_text = "Alt materiale, værktøjer, algoritmiske signaler og kommentarer, der leveres på $site_name, er udelukkende beregnet til informations-, uddannelses- og markedsføringsformål. Intet af indholdet på denne hjemmeside udgør personlig investerings-, juridisk eller finansiel rådgivning. Før du udfører nogen handler, bør du foretage uafhængig research eller konsultere en licenseret finansiel rådgiver.";
$risk_sec3_title = "3. Regulatoriske & Geografiske Restriktioner";
$risk_sec3_text = "Visse jurisdiktioner begrænser eller forbyder detailhandel med CFD'er og kryptovaluta. Det er brugerens eneansvar at verificere, om adgang til $site_name og brug af partnerhandelsmæglere er lovligt i henhold til deres lokale juridiske rammer.";
$risk_sec4_title = "4. Platformsteknologi & Markedsudførelse";
$risk_sec4_text = "Automatiserede handelsværktøjer, kunstig intelligens-algoritmer og markedsindikatorer garanterer ikke overskud eller eliminerer markedsrisici. Tekniske forstyrrelser, netværkslatens, systemnedbrud og mangel på markedslikviditet kan resultere i forsinkelser i handelsudførelsen eller slippage.";

// SIGN UP / LOGIN PAGE VARIABLES
$sign_meta_title = "Registrering / Log Ind | $site_name";
$sign_meta_description = "Opret din gratis konto på $site_name for at få adgang til intelligente automatiserede handelsværktøjer, markedssignaler og sikre finansieringsmuligheder.";
$sign_h1 = "Tilmeld dig <mark>$site_name</mark>";
$sign_lead = "Bliv en del af tusindvis af handlende og få øjeblikkelig adgang til vores AI-handelsmotor.";

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
$hero_form_heading = "Opret din gratis konto";
$hero_form_button = "Tilmeld Dig";
$form_name_placeholder = "Indtast dit fornavn";
$form_surname_placeholder = "Indtast dit efternavn";
$form_disclaimer_prefix = "Ved at indtaste dine personlige oplysninger og klikke på knappen accepterer du";
$form_privacy_link_label = "Privatlivspolitikken";
$form_disclaimer_and = "og";
$form_terms_link_label = "Brugsvilkårene";
$form_disclaimer_of_site = "for denne hjemmeside.";

// -- partners strip --
$partners_label = "Betroet af førende partnere";

// -- "what is" section --
$whatis_label = "Om Platformen";
$whatis_title = "Hvad er $site_name?";
$whatis_intro = "$site_name er den officielle online handelsplatform, designet til at gøre krypto lige så enkelt som daglig online bankvirksomhed.";
$whatis_icon_1_title = "AI-Drevet Analyse";
$whatis_icon_1_text = "Avancerede algoritmer håndterer markedernes kompleksitet for dig.";
$whatis_icon_2_title = "Øjeblikkelig Udførelse";
$whatis_icon_2_text = "Tusindvis af datapunkter behandlet hvert sekund — handler uden forsinkelse.";
$whatis_icon_3_title = "Simpelt, Intuitivt Dashboard";
$whatis_icon_3_text = "Tjek din saldo og åbne positioner med et blik, når som helst.";
$whatis_icon_4_title = "Nem Adgang, Ingen Barrierer";
$whatis_icon_4_text = "Start med et minimumsindskud på kun $app_price $app_currency — ingen skjulte gebyrer.";
$whatis_cta_text = "Vil du vide mere om vores team og vores produkt?";
$whatis_cta_link = "Om Os";

// -- stats section heading (per-stat label/value already set above) --
$stats_label = "$site_name i Tal";
$stats_title = "Tal Der Taler Højere End Løfter";

// -- key benefits section --
$benefits_label = "Vigtige Fordele";
$benefits_title = "Hovedfordele ved $site_name";
$benefit_1_title = "Begyndervenlig Platform";
$benefit_1_text = "Intuitive diagrammer og trin-for-trin guider hjælper dig med at komme i gang uden at føle dig overvældet. Du kan handle krypto med selvtillid fra dag ét.";
$benefit_2_title = "Officiel og Reguleret";
$benefit_2_text = "$site_name er licenseret og overholder gældende finansielle bestemmelser. Vi bruger SSL-kryptering og tofaktorgodkendelse for at beskytte hver konto.";
$benefit_3_title = "Nem Adgang, Ingen Barrierer";
$benefit_3_text = "Med et minimumsindskud på kun $app_price $app_currency kan alle komme i gang. Der kræves ingen stor forudgående investering — start småt, og øg din indsats, efterhånden som din selvtillid vokser.";
$benefit_4_title = "Gennemsigtige Gebyrer";
$benefit_4_text = "Du vil aldrig se skjulte gebyrer. Vi anvender kun minimale transaktions- eller udbetalingsgebyrer, hvor det er relevant, så du altid ved præcis, hvad du betaler.";
$benefit_5_title = "24/7 Handelsadgang";
$benefit_5_text = "Handl på din egen tidsplan, dag eller nat. $site_name fungerer lige så godt på desktop som på mobil, så du kan forblive forbundet til markedet, uanset hvor du er.";
$benefit_6_title = "Lokal Kundesupport";
$benefit_6_text = "Vores supportteam er tilgængeligt via chat, telefon eller e-mail. Rigtige mennesker er her for at hjælpe dig på dit sprog, når du har brug for det.";
$benefits_trust_title = "Betroet af Brugere Verden Over";
$benefits_trust_text = "Det er derfor, så mange kryptobrugere stoler på $site_name. Tusindvis af handlende bruger allerede $site_name, og nye konti tilslutter sig hver dag.";
$benefits_cta = "Tilmeld Dig";
$benefits_badge_1 = "256-bit SSL";
$benefits_badge_2 = "Sikre Betalinger";
$benefits_badge_3 = "2FA";

// -- security section --
$security_label = "Sikkerhed";
$security_title = "Dine Midler Er Sikre hos $site_name";
$security_subtitle = "Kryptering på bankniveau, verificerede betalinger og 98% cold storage — dine penge er beskyttet ved hvert trin.";
$security_1_title = "Verificerede Betalingsudbydere";
$security_1_text = "Betalinger behandles udelukkende af certificerede udbydere, der opfylder internationale sikkerhedsstandarder. Dine betalingsdata gemmes aldrig på vores servere.";
$security_2_title = "256-bit SSL-Kryptering";
$security_2_text = "Alle data, der udveksles mellem din enhed og vores platform, er krypteret med 256-bit TLS. Ingen tredjepart kan opfange eller læse det.";
$security_3_title = "98% Cold Storage";
$security_3_text = "98% af aktiverne opbevares i offline tegnebøger uden internetforbindelse. Ingen kan tilgå dem eksternt.";
$security_4_title = "Multifaktorgodkendelse";
$security_4_text = "Kun du kan tilgå din konto. Hvert login verificeres af et andet trin, som kun du kontrollerer.";
$security_5_title = "Kontoovervågning";
$security_5_text = "Hvert login, hver transaktion eller indstillingsændring udløser en øjeblikkelig notifikation, så du altid ved, hvad der sker på din konto.";
$security_6_title = "Adgangskodebeskyttelse";
$security_6_text = "Adgangskoder gemmes i en ulæselig, irreversibel form. Vi har teknisk ingen mulighed for at se din adgangskode.";
$security_cta_title = "Få En Gratis Guide!";
$security_cta_text = "Få vores gratis begynderguide, og begynd at handle i dag.";
$security_cta_button = "Tilmeld Dig";
$security_badge_1 = "98% Cold Storage";
$security_badge_2 = "Verificerede Betalinger";
$security_badge_3 = "Krypteret";

// -- how it works section --
$how_label = "Sådan Virker Det";
$how_title = "Sådan Virker Det";
$how_1_title = "Tilmeld Dig";
$how_1_text = "Klik på knappen \"Åbn Konto\", og udfyld registreringsformularen med dine oplysninger (navn, e-mail og telefonnummer). Det tager kun et minut.";
$how_2_title = "Indbetal Midler";
$how_2_text = "Finansiér derefter din konto. Minimumsindskuddet er kun $app_price $app_currency. Du kan bruge et kredit-/betalingskort, lokal bankoverførsel eller populære e-punge. (Tip: start med et beløb, du er komfortabel med.)";
$how_3_title = "Begynd at Handle";
$how_3_text = "Når dine midler er på din konto, er du klar til at handle. Vælg det aktiv, du ønsker (som BTC, SOL eller USDT), og beslut din strategi.";
$how_cta_label = "Sådan Virker Det";
$how_cta_text = "Har du brug for mere information om, hvordan tjenesten fungerer?";
$how_cta_link = "Sådan Virker Det";

// -- trust reasons section --
$trust_label = "Hvorfor Handle Med Os";
$trust_intro = "Bliv en del af tusindvis af brugere, der allerede handler med $site_name. En live tæller vises endda på vores side og viser, hvor mange mennesker der handler lige nu.";
$trust_1_title = "Fuldt Reguleret";
$trust_1_text = "$site_name er behørigt registreret og overholder gældende finansielle bestemmelser. Vi opererer under strenge regler for at sikre din sikkerhed.";
$trust_2_title = "Avanceret Sikkerhed";
$trust_2_text = "Alle dine data og midler er krypteret og sikret. Vi håndhæver streng kontobeskyttelse gennem SSL-kryptering og tofaktorgodkendelse.";
$trust_3_title = "Gennemsigtige Operationer";
$trust_3_text = "Vi skjuler aldrig vores gebyrer og tilføjer aldrig overraskende regler. Før hver transaktion ser du præcis, hvilke gebyrer der gælder.";
$trust_4_title = "Lydhør Support";
$trust_4_text = "Vores supportteam er tilgængeligt via chat, telefon eller e-mail for at besvare dine spørgsmål eller løse ethvert problem.";
$trust_cta_text = "Mere information om markedsforhold";
$trust_cta_link = "Hvorfor Handle";

// -- testimonials section heading (individual reviews already set above) --
$testimonials_label = "Udtalelser";
$testimonials_title = "Betroet af Over 4M Handlende";

// -- FAQ section heading --
$faq_label = "FAQ";

// -- lead magnet CTA block --
$leadmagnet_title = "Ny til Handel?";
$leadmagnet_text1 = "Efter du tilmelder dig, modtager du vores gratis guide,";
$leadmagnet_quote = "“10 Fejl at Undgå Når Du Handler med Krypto”";
$leadmagnet_text2 = "pakket med simple tips fra vores mest erfarne analytikere for at hjælpe dig med at undgå de mest almindelige fejl.";
$leadmagnet_text3 = "Indtast blot dine oplysninger under";
$leadmagnet_link = "tilmelding";
$leadmagnet_text4 = "så sender vi den direkte til din indbakke. Mange investorer startede med denne guide og siger, at den gjorde en reel forskel.";
$leadmagnet_text5 = "Markedet venter ikke — kom i gang i dag!";

// -- pre-about CTA band --
$pre_about_title = "Klar til at Tage Kontrol Over Din Handel?";
$pre_about_text = "Bliv en del af $site_name i dag, og opdag en platform bygget til klarhed, sikkerhed og resultater.";
$pre_about_button = "Tilmeld Dig";

// -- pretest (quiz teaser) badges/CTA --
$pretest_title = "Begynd at Handle med $app_price $app_currency!";
$pretest_text = "Klar til at prøve $site_name? Tilmeld dig nu, og bliv en del af det voksende fællesskab af krypto-investorer og handlende.";
$pretest_button = "Tilmeld Dig";
$pretest_badge_1 = "Sikker";
$pretest_badge_2 = "Reguleret";
$pretest_badge_3 = "Betroet af Over 4M Handlende";

// -- about page --
$about_label = "Om Os";
$about_title = "Om $site_name";
$about_intro = "$site_name giver dig ikke bare en handelsplatform — vi hjælper dig med at handle med klarhed og selvtillid.";
$about_text_1 = "$site_name er den officielle online handelsplatform, designet til at gøre kryptohandel tilgængelig for både begyndere og erfarne handlende.";
$about_text_2 = "Vi kombinerer AI-drevet markedsanalyse med et simpelt, gennemsigtigt dashboard, så du altid ved præcis, hvor du står.";
$about_text_3 = "Hver del af platformen er bygget omkring klarhed: ingen skjulte gebyrer, ingen forvirrende jargon, kun klar information, du kan handle på.";
$about_text_4 = "Vores platform sparer dig timer med gætterier og beskytter dig mod uigennemsigtige alternativer af lav kvalitet. Vi tror på, at handel bør bygges på præcision, ikke held.";

// -- contact page --
$contact_label = "Kontakt Os";
$contact_title = "Kontakt $site_name";
$contact_subtitle = "Har du et spørgsmål eller brug for hjælp? Vi er her for at rådgive og vejlede dig.";
$contact_text = "Hos $site_name mener vi, at succes i handel intet har at gøre med held — det afhænger af præcision, forudseenhed og de rigtige værktøjer.";
$contact_form_text = "Udfyld blot formularen nedenfor, så vil et medlem af vores team kontakte dig snarest.";
$contact_form_button = "Send Besked";

// -- footer navigation labels (geo-page footer, TZ items 12/16/18) --
$footnav_col_pages = "Sider";
$footnav_col_support = "Support";
$footnav_col_legal = "Juridisk";
$footnav_col_company = "Virksomhed";
$footnav_home = "Hjem";
$footnav_sitemap = "Sitemap";
$footnav_conditions = "Brugsvilkår";
$footnav_contact = "Kontakt Os";
$footnav_signup = "Tilmeld Dig";
$footer_risk_warning = "Risikoadvarsel";

// -- geo-page footer legal disclaimer (single-paragraph variant used by
// the geo template's own footer layout; the two-paragraph TZ item 21
// text above -- $footer_disclaimer_p1/$footer_disclaimer_p2 -- covers
// the root pages) --
$footer_disclaimer = "$site_name leverer uddannelsesindhold og generel information om finansielle markeder, online handel og digitale aktiver. Alt materiale offentliggjort på denne hjemmeside er kun beregnet til informationsformål og bør ikke betragtes som finansiel, investerings- eller juridisk rådgivning. Handel indebærer betydelig risiko og er muligvis ikke egnet for enhver investor. Investér kun penge, du har råd til at tabe.";

// ============================================================
// Geo-language SUBPAGE fallback content (TZ item 16 cont.). Same
// rationale as the block above: conditions/contacts/faq/offer/
// privacy/product/risk-warning/sign.php share templates across the
// bg/cs/da/... stub folders and reference these vars directly.
// English fallback so every geo folder's subpages render complete.
// ============================================================

// -- shared form aliases (service-page forms reuse the hero disclaimer) --
$form_disclaimer_risk_note = "Læs også vores";
$form_text = $form_disclaimer_prefix;
$form_text_privacy = $form_privacy_link_label;
$form_text_privacy_and = $form_disclaimer_and;
$form_text_conditions = $form_terms_link_label;
$form_text_conditions_of = $form_disclaimer_of_site;
$form_text_risk_warning_note = $form_disclaimer_risk_note;
$form_submit = "Tilmeld Dig";

// -- generic breadcrumbs (sign-up / product pages) --
$breadcrumb_home = "Hjem";
$breadcrumb_current = "Registrering / Log Ind";
$breadcrumb_product = "Produkt";

// -- sign-up page official heading --
$official_heading = "Tilmeld Dig på den Officielle $site_name™ Platform";
$official_description = "Opret din gratis konto for at begynde at handle med kryptovaluta på en sikker, gennemsigtig platform.";

// -- product page: analytics banner --
$analytics_heading = "Handl Smartere med $site_name";
$analytics_description = "Få klare markedsdata i realtid og AI-drevet indsigt. Træf informerede handelsbeslutninger med selvtillid.";

// -- product page: dashboard preview --
$app_main_heading = "Dit Handelsdashboard";
$app_feature_1_title = "Live Markedsdata";
$app_feature_1_text = "Priser og diagrammer i realtid lige ved hånden";
$app_feature_2_title = "Porteføljesporing";
$app_feature_2_text = "Omfattende målinger af din saldo og ydeevne";
$app_feature_3_title = "Mobilvisning";
$app_feature_3_text = "Optimeret til mobile browsere";
$app_feature_4_title = "Overvågningslister";
$app_feature_4_text = "Hold styr på de aktiver, du overvåger";

// -- product page: capabilities --
$capabilities_main_title = "Hvad Du Kan Forvente";
$capabilities_feature_1_title = "AI-Drevne Signaler";
$capabilities_feature_1_text = "Avancerede algoritmer analyserer markedssignaler og afdækker muligheder døgnet rundt.";
$capabilities_feature_2_title = "Hurtig Tilmelding";
$capabilities_feature_2_text = "Registrer dig på få minutter med en sikker, ligetil tilmeldingsproces.";
$capabilities_feature_3_title = "Verificeret Sikkerhed";
$capabilities_feature_3_text = "256-bit SSL-kryptering, 2FA og 98% cold storage beskytter dine midler ved hvert trin.";
$capabilities_feature_4_title = "Løbende Support";
$capabilities_feature_4_text = "Få support fra vores team ved hvert trin — fra tilmelding til din første handel.";

// -- product page: stats strip --
$products_stats_currencies_v = "65+";
$products_stats_currencies_l = "Tilgængelige Valutaer";
$products_stats_users_v = "4M+";
$products_stats_users_l = "Registrerede Brugere";
$products_stats_volume_v = "98+";
$products_stats_volume_l = "Understøttede Lande";
$products_stats_countries_v = "24/7";
$products_stats_countries_l = "Transaktionsadgang";

// -- product page: 3-step strip --
$step_1 = "Opret en konto";
$step_2 = "Indbetal midler";
$step_3 = "Begynd at handle med den strategi, der passer til dig";

// -- shared "last update" label (privacy page) --
$last_update = "Seneste opdatering";

// -- FAQ page --
$faq_page_meta_title = "FAQ | $site_name Support";
$faq_page_meta_description = "Svar på ofte stillede spørgsmål om, hvordan $site_name fungerer, priser og kom godt i gang.";
$faq_page_title = "FAQ";
$faq_page_breadcrumb_home = "Hjem";
$faq_page_breadcrumb_current = "FAQ";
$faq_page_help_title = "Hvordan kan vi hjælpe dig?";
$faq_1_q = "Hvordan kommer jeg i gang?";
$faq_1_a = "Opret din konto, verificer din e-mailadresse, og foretag dit første indskud — planer starter fra kun $app_price $app_currency.";
$faq_2_q = "Er mine penge og data sikre? Er $site_name pålidelig?";
$faq_2_a = "Ja. Dine data er beskyttet af branchestandard 256-bit kryptering, og dine midler er sikret med tofaktorgodkendelse og 98% cold storage.";
$faq_3_q = "Kan jeg lukke min konto eller hæve midler når som helst?";
$faq_3_a = "Ja. Der er ingen begrænsninger for udbetalinger. Kontakt vores supportteam når som helst — vi hjælper med din konto eller behandler din udbetaling hurtigt.";
$faq_4_q = "Hvordan ved jeg, om denne platform er den rigtige for mig?";
$faq_4_a = "$site_name blev bygget til både absolutte begyndere og erfarne handlende, der ønsker at handle mere effektivt — hvert værktøj på platformen er designet til at holde dig informeret og i kontrol.";
$faq_5_q = "Har jeg brug for handelserfaring for at komme i gang?";
$faq_5_a = "Ingen forudgående erfaring er nødvendig. Vores AI-drevne tilstand håndterer analysen for dig, og du kan skifte til manuel tilstand når som helst, hvis du ønsker mere kontrol.";

// -- contacts page --
$contacts_h3 = "Ved tekniske spørgsmål eller spørgsmål om din konto, bedes du kontakte os via e-mail";

// -- offer page (meta title/description already defined above) --
$offer_breadcrumb_home = "Hjem";
$offer_breadcrumb_current = "Tilbud";
$offer_cta_h1 = "Begynd at Handle i Dag";
$offer_cta_text = "Klar på få minutter: tilmeld dig, finansiér din konto, og begynd at handle med kryptovaluta på en sikker, reguleret platform.";
$offer_how_it_works_title = "Sådan Virker Det";
$offer_official_platform_title = "Dette Er den Officielle $site_name™ Handelsplatform";
$offer_official_platform_text = "En pålidelig, gennemsigtig måde at handle kryptovaluta på — med realtidsindsigt og fuld kontrol.";

// -- conditions of use page --
$conditions_meta_title = "Brugsvilkår | $site_name";
$conditions_meta_description = "Læs de officielle Brugsvilkår for $site_name-hjemmesiden og handelsplatformen.";
$conditions_breadcrumb_home = "Hjem";
$conditions_breadcrumb_current = "Brugsvilkår";
$conditions_h1 = "Brugsvilkår";
$conditions_s1_title = "1. Generelt";
$conditions_s1_text = "Denne hjemmeside giver adgang til en online kryptovaluta-handelsplatform. Brug af platformen udgør fuld accept af disse vilkår og vores Privatlivspolitik.";
$conditions_s2_title = "2. Berettigelse";
$conditions_s2_text = "Brugere skal være mindst 18 år og have fuld juridisk handleevne i deres respektive jurisdiktion.";
$conditions_s3_title = "3. Begrænset Adgang";
$conditions_s3_text = "Adgang kan være begrænset i jurisdiktioner, hvor lokale regler forbyder den type handelstjeneste, vi tilbyder.";
$conditions_s4_title = "4. Forbudt Brug";
$conditions_s4_text = "Brugere må ikke misbruge systemet, forsøge uautoriseret adgang til vores systemer eller reverse-engineere vores software.";
$conditions_s5_title = "5. Intellektuel Ejendom";
$conditions_s5_text = "Al kildekode, brugergrænseflader og brandaktiver forbliver det driftsansvarlige selskabs eksklusive ejendom.";
$conditions_s6_title = "6. Ansvar";
$conditions_s6_text = "Platformens værktøjer leveres \"som de er\". Vi påtager os intet ansvar for resultater, der skyldes brugerens egne handelsbeslutninger.";
$conditions_s7_title = "7. Tredjepartstjenester";
$conditions_s7_text = "Integrationer med tredjeparts betalingsudbydere sker via sikre forbindelser. For indskud og udbetalinger handler brugere direkte med deres valgte udbyder.";
$conditions_s8_title = "8. Eksterne Links";
$conditions_s8_text = "Links til eksterne ressourcer leveres kun af bekvemmelighedshensyn. Vi godkender ikke og garanterer ikke for nogen ekstern software.";
$conditions_s9_title = "9. Diverse";
$conditions_s9_text = "Vi forbeholder os retten til at ændre disse vilkår eller tjenesten når som helst, med ændringer offentliggjort på hjemmesiden.";

// -- privacy policy page (meta title/description already defined above) --
$privacy_breadcrumb_home = "Hjem";
$privacy_breadcrumb_current = "Privatlivspolitik";
$privacy_page_h1 = "Privatlivspolitik";
$privacy_intro = "Vi respekterer dit privatliv og behandler personoplysninger i fuld overensstemmelse med internationale standarder og den europæiske GDPR.";
$privacy_transparency_title = "Gennemsigtighed";
$privacy_transparency_text = "Vi oplyser klart, hvordan operationelle telemetridata behandles. Kontakt support for yderligere detaljer.";
$privacy_usage_title = "Databrug";
$privacy_usage_text = "Data bruges udelukkende til at levere adgang, sikre sessioner og opfylde compliance-forpligtelser.";
$privacy_rights_short_title = "Dine Rettigheder";
$privacy_rights_short_text = "Du bevarer fulde rettigheder til at se, opdatere eller anmode om sletning af dine personoplysninger.";
$privacy_security_title = "Sikkerhed";
$privacy_security_text = "Vi bruger AES-256-kryptering og databaseisolation til at beskytte operationelle telemetridata.";
$privacy_s1_title = "1. Dataindsamling";
$privacy_s1_text = "Vi indsamler brugstelemetri (IP-adresse, systemparametre, browsertype) samt verificeringsdata indsendt af brugere.";
$privacy_s2_title = "2. Retsgrundlag";
$privacy_s2_text = "Behandlingen er baseret på brugernes udtrykkelige samtykke, regulatoriske compliance-krav og levering af tjenesten.";
$privacy_s3_title = "3. Datadeling";
$privacy_s3_text = "Data kommercialiseres aldrig. Videregivelser er begrænset til autoriserede clearingenheder og tekniske partnere under en fortrolighedsaftale (NDA).";
$privacy_s4_title = "4. Cookies";
$privacy_s4_text = "Essentielle cookies bruges til sessionsgodkendelse og grænsefladeoptimering.";
$privacy_google_choices = 'Administrer dine sporingspræferencer via <a href="http://www.google.com/settings/ads" target="_blank" rel="noopener">Google Annonceindstillinger</a> eller brug <a href="https://tools.google.com/dlpage/gaoptout" target="_blank" rel="noopener">Google Analytics Fravalgs-tilføjelsen</a>. Du kan også gennemgå Googles egne datapraksisser i deres <a href="https://www.google.com/intl/en/policies/privacy/" target="_blank" rel="noopener">Privatlivspolitik</a>.';
$privacy_s5_title = "5. Dataopbevaring";
$privacy_s5_text = "Personoplysninger opbevares kun så længe det er nødvendigt for at opfylde krav til systemadgang.";
$privacy_s6_title = "6. Internationale Overførsler";
$privacy_s6_text = "Grænseoverskridende dataoverførsler sker udelukkende via krypterede kanaler og via standardkontraktbestemmelser.";
$privacy_s7_title = "7. Tredjeparts Links";
$privacy_s7_text = "Vi er ikke ansvarlige for privatlivspraksis hos eksterne tredjepartstjenester linket fra vores hjemmeside.";
$privacy_s8_title = "8. Opdateringer";
$privacy_s8_text = "Denne politik kan revideres periodisk for at afspejle system- eller juridiske ændringer.";
$privacy_rights_title = "Dine Rettigheder";
$privacy_rights_text = "Brugere har ret til at anmode om adgang til, rettelse af, begrænset behandling af eller fuldstændig sletning af deres lagrede data.";

// -- risk warning page --
$page_title_risk_warning = "Risikoadvarsel | $site_name";
$page_description_risk_warning = "Forstå risiciene ved handel, og hvordan $site_name hjælper dig med at styre dem sikkert.";
$risk_warning_breadcrumb_home = "Hjem";
$risk_warning_breadcrumb_current = "Risikoadvarsel";
$risk_warning_title = "Risikoadvarsel";
$risk_warning_intro = "At forstå risici er det første skridt mod at handle med selvtillid.";
$risk_warning_ai_heading = "Sådan hjælper vores AI-system med risikostyring:";
$risk_warning_ai_1 = "<strong>Algoritmisk Effektivitet & Følelsesløs Handel:</strong> Avancerede algoritmer analyserer markedssignaler for objektivt at udføre handler på det optimale tidspunkt.";
$risk_warning_ai_2 = "<strong>Datadrevne Strategier:</strong> Strategier er baseret på verificerede markedsmønstre og realtidsanalyse i stedet for gætterier.";
$risk_warning_ai_3 = "<strong>Fleksible Indstillinger & Fuld Kontrol:</strong> Justér dine risikoparametre når som helst. Følg alle saldi og handler gennemsigtigt på dit dashboard — uden skjulte gebyrer og uden begrænsninger på udbetalinger.";
$risk_warning_disclaimer = "<strong>Ansvarsfraskrivelse:</strong> Handel indebærer altid risiko. Automatiserede systemer (inklusive AI) garanterer ikke overskud, kan fejle på grund af softwarefejl eller uventede markedshændelser og kræver overvågning af brugeren. Tidligere resultater er ikke en indikator for fremtidige resultater. Denne platform er udelukkende beregnet til informations- og markedsføringsformål og udgør ikke finansiel rådgivning.";
$risk_warning_s1_heading = "1. Generelle Risici & Risici ved Kryptovalutamarkedet";
$risk_warning_s1_1 = "Kryptovalutaer er højvolatile, spekulative aktiver, der handles døgnet rundt og kun er underlagt minimal regulatorisk tilsyn i de fleste jurisdiktioner.";
$risk_warning_s1_2 = "Værdier kan svinge drastisk inden for korte perioder, hvilket potentielt kan resultere i et fuldstændigt tab af investeret kapital.";
$risk_warning_s1_3 = "Markedsværdier kan blive væsentligt påvirket af regulatoriske ændringer, tekniske udviklinger, sikkerhedsbrud eller bredere makroøkonomiske begivenheder.";
$risk_warning_s1_4 = "Nogle aktiver kan miste hele deres værdi. Investér kun penge, du har råd til at tabe.";
$risk_warning_s2_heading = "2. Udførelses-, Likviditets- & Gearingsrisici";
$risk_warning_s2_1 = "<strong>Markedsvolatilitet & Likviditet:</strong> Ekstreme prisbevægelser (10-20%+ dagligt) eller lav likviditet (især for mindre mønter) kan føre til forsinkelser, platformsnedbrud og betydelig udførelsesslippage. Stop-loss-ordrer kan ikke garantere tabsbegrænsning under ekstreme forhold.";
$risk_warning_s2_2 = "<strong>Gearings- & Marginrisiko:</strong> Gearede produkter forstærker både gevinster og tab, hvilket betyder, at du kan tabe mere end dit oprindelige indskud. Cirka 70-80% af detailinvestorkonti taber penge, når de handler med gearede produkter.";
$risk_warning_s3_heading = "3. Tekniske, Cybersikkerheds- & Tredjepartsrisici";
$risk_warning_s3_1 = "<strong>Tekniske Faktorer:</strong> Online handel medfører iboende risici som internetforbindelsesafbrydelser, hardware-/softwarefejl og utilgængelighed af tjenesten.";
$risk_warning_s3_2 = "<strong>Cybersikkerhed:</strong> Kryptovalutakonti er hyppige mål for phishing, malware og hackingforsøg. Transaktioner er irreversible; kompromittering af dine loginoplysninger kan resultere i permanent tab.";
$risk_warning_s3_3 = "<strong>Tredjepartsplatforme:</strong> Denne hjemmeside kan forbinde brugere med tredjepartsplatforme. Vi kontrollerer, godkender eller garanterer ikke deres sikkerhed, drift eller solvens. Udfør altid din egen grundige due diligence, før du indbetaler midler på eksterne platforme.";
$risk_warning_s4_heading = "4. Regulatoriske, Skatte- & Afsluttende Bestemmelser";
$risk_warning_s4_1 = "<strong>Juridisk Overholdelse & Skatter:</strong> Regulatoriske rammer varierer meget og ændrer sig hurtigt. Brugere er eneansvarlige for at sikre, at deres handelsaktivitet overholder lokal lovgivning, samt for at opfylde deres egne skatteforpligtelser.";
$risk_warning_s4_2 = "<strong>Ingen Overskudsgarantier:</strong> Der findes ingen \"sikker\" eller risikofri kryptovalutahandel. Eventuelle afkasttal eller ydeevneeksempler er rent hypotetiske.";
$risk_warning_s4_3 = "<strong>Egnethed:</strong> Hvis du ikke fuldt ud forstår risiciene, er afhængig af nødvendige finansielle ressourcer eller handler med lånte penge, er kryptovalutahandel ikke egnet for dig. Ved tvivl bør du konsultere en uafhængig, licenseret finansiel rådgiver.";
$risk_warning_contact = "<strong>Kontakt:</strong> Hvis du har spørgsmål om denne erklæring eller ønsker at indsende en forespørgsel, bedes du kontakte vores officielle kundeserviceteam via kontaktformularen på vores hjemmeside.";

