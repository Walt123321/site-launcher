<?php
require __DIR__ . '/../lang.php';
$site_lang = 'no-NO';
$form_language = 'no'; // matches this page's own language, not the offer's global default

// ============================================================
// NO TRANSLATION OVERRIDES
// Identity/config vars ($site_name, $site_slug, $site_domain, $site_url, $app_price, $app_currency, $site_lang, $country_name, $country_flag_code, $privacy_last_update, $rating_value, $rating_count, $review_count, $form_country, $form_language, $form_phone_country, $form_only_countries, $review_1_author, $review_2_author, $review_3_author, $review_4_author, $quiz_consultant_name) are
// intentionally NOT overridden -- they stay exactly as inherited from the
// root lang.php.
// ============================================================

// Brand / Platform Variables

// Geo-language stats bar fallback content (used by the language-folder pages'
// own "stats" section; the fr/de/it/nl folders override these with native
// translations, the other 19 folders inherit this English fallback)
$stat_1_value = "4M+";
$stat_1_label = "Registrerte Brukere";
$stat_2_value = "98+";
$stat_2_label = "Land Som Støttes";
$stat_3_value = "65+";
$stat_3_label = "Tilgjengelige Valutaer";
$stat_4_value = "24/7";
$stat_4_label = "Transaksjonstilgang";
$stat_5_value = "256-bit";
$stat_5_label = "Krypteringsstandard";
$stat_6_value = "$500M+";
$stat_6_label = "Totale Kundeinnskudd";

// Keitaro Form Integration Variables (defaults -- overwritten per-launch by
// generate_lang_files(); must stay valid on their own since nothing else in
// this file replaces them for a page that's ever served un-generated)

// 4 Verified Reviews (TZ Item 8)
$review_1_role = "Frankrike";
$review_1_text = "Jeg startet med 500 € bare for å se hvordan plattformen fungerte. Etter omtrent tre uker hadde saldoen min vokst til rundt 1120 €. Grensesnittet er lett å bruke, og markedsinnsiktene hjalp meg med å ta bedre beslutninger.";
$review_1_badge = "Rapportert Avkastning +18,4%";

$review_2_role = "Tyskland";
$review_2_text = "Jeg har prøvd noen handelsplattformer før, men denne har vært min favoritt så langt. Den er lett å navigere i, verktøyene er virkelig nyttige, og jeg har hatt en veldig positiv opplevelse totalt sett.";
$review_2_badge = "Rapportert Avkastning +19,1%";

$review_3_role = "Italia";
$review_3_text = "Det som imponerte meg mest, var hvor intuitivt alt føles. Registreringen gikk raskt, dashbordet er godt organisert, og plattformen har gjort handel mye mer praktisk for meg.";
$review_3_badge = "Rapportert Avkastning +16,8%";

$review_4_role = "Nederland";
$review_4_text = "Jeg hadde ingen tidligere handelserfaring, så jeg startet med 750 €. Innen en måned nådde jeg like over 1765 € ved å følge verktøyene og læringsressursene. Det har vært en flott måte å bygge selvtillit på.";
$review_4_badge = "Rapportert Avkastning +18,0%";

$review_verified_label = "Verifisert Bruker";
$reviews_section_title = "Anmeldelser av $site_name";
$reviews_badge_trustworthy = "Pålitelig";
$reviews_summary_rating = "4,7";
$reviews_summary_count = "189";
$reviews_summary_desc = "En kraftig og intuitiv handelsplattform med robuste automatiserte verktøy, sanntidsanalyser og omfattende læringsressurser.";

// CONSULTANT / CHAT QUIZ (TZ Item 13)
$quiz_consultant_role = "Handelskonsulent";
$quiz_text_welcome = "Hei! Jeg er din personlige handelsassistent. Ta en 30-sekunders quiz for å finne ut hvordan automatisert AI-handel kan fungere for deg.";
$quiz_text_q1 = "Har du noen gang handlet med kryptovaluta eller finansmarkeder før?";
$quiz_text_a1_yes = "Ja, jeg har litt erfaring";
$quiz_text_a1_no = "Nei, jeg er helt nybegynner";
$quiz_text_q2 = "Hva er ditt primære økonomiske mål med nettbasert handel?";
$quiz_text_q3 = "Foretrekker du at AI utfører handler automatisk, eller vil du handle manuelt?";
$quiz_text_a3_yes = "Automatisert AI-Handel (Anbefalt)";
$quiz_text_a3_no = "Manuell Handel med AI-Signaler";
$quiz_text_q4 = "Hva er ditt innledende budsjett for handel?";
$quiz_text_a4_1 = "250 $ - 500 $";
$quiz_text_a4_2 = "500 $ - 1 500 $";
$quiz_text_a4_3 = "1 500 $+";
$quiz_text_q5 = "Er du klar til å opprette kontoen din og få full tilgang til plattformen?";
$quiz_text_a5_yes = "Ja, la oss begynne!";
$quiz_text_a5_no = "Jeg vil gjerne ha mer informasjon";
$quiz_text_loader = "Analyserer svarene dine og forbereder optimale handelsparametere...";
$quiz_text_final_ttl = "Kontooppsettet Ditt Er Klart!";
$quiz_text_processing = "Konfigurerer plattformtilgangen din...";
$quiz_text_typing = "skriver...";
$quiz_placeholder_fname = "Fornavn";
$quiz_placeholder_lname = "Etternavn";
$quiz_placeholder_email = "E-postadresse";
$quiz_placeholder_phone = "Telefonnummer";
$quiz_btn_submit = "Fullfør Registrering";

// METADATA (TZ Item 10)
$home_meta_title = "$site_name — Handelsplattform | Offisiell Side";
$home_meta_description = "Den offisielle $site_name-nettsiden tilbyr en sikker kryptovaluta-handelsplattform med avanserte handelsverktøy, sanntids markedsinnsikt og en brukervennlig opplevelse for handlende.";

// NAVIGATION & HEADER (TZ Item 3, 12)
$nav_about = "Om Oss";
$nav_how = "Slik Fungerer Det";
$nav_why = "Hvorfor Handle";
$nav_faq = "Ofte Stilte Spørsmål";
$nav_contacts = "Kontakt Oss";
$nav_signin = "Logg Inn";
$nav_signup = "Registrer Deg";

$mobnav_home = "Hjem";
$mobnav_product = "Produkt";
$mobnav_offer = "Tilbud";
$mobnav_contact = "Kontakt Oss";
$mobnav_faq = "Ofte Stilte Spørsmål";
$mobnav_signup = "Registrer Deg";

// HERO SECTION
$hero_h1 = "<mark>$site_name</mark>-plattformen";
$hero_text = "Offisiell $site_name kryptovaluta-handelsplattform";

// LEAD FORM
$form_fname_placeholder = "Fornavn";
$form_lname_placeholder = "Etternavn";
$form_email_placeholder = "E-post";
$form_phone_placeholder = "Telefonnummer";
$form_btn_submit = "Registrer Deg";
$form_disclaimer_text = "Ved å oppgi dine personlige opplysninger og klikke på knappen godtar du <a class='link link-primary' href='privacy.php'>Personvernreglene</a> og <a class='link link-primary' href='conditions.php'>Bruksvilkårene</a> for denne nettsiden.";

// SECURITY BADGES
$badge_ssl = "256-bit SSL";
$badge_payments = "Sikre Betalinger";
$badge_2fa = "2FA";
$badge_cold_storage = "98% Cold Storage";
$badge_regulated = "Regulert";
$badge_traders_trust = "Over 4M Handlende Stoler På Oss";

// SAFE SECTION (Vos fonds sont en sécurité)
$safe_title = "<mark>Midlene Dine Er Trygge</mark> hos $site_name";
$safe_desc = "Kryptering på banknivå, verifiserte betalingsbehandlere og 98% cold storage — pengene dine er beskyttet i hvert steg.";

$safe_item1_title = "Verifiserte Betalingsleverandører";
$safe_item1_desc = "Betalinger behandles utelukkende gjennom sertifiserte leverandører som overholder internasjonale sikkerhetsstandarder. Kortinformasjonen din lagres aldri på vår plattform.";
$safe_item1_badge = "Sikre Betalinger";

$safe_item2_title = "Tofaktorautentisering (2FA)";
$safe_item2_desc = "Legg til et ekstra beskyttelseslag på kontoen din med tidsbaserte engangspassord via SMS eller Google Authenticator.";
$safe_item2_badge = "2FA";

$safe_item3_title = "98% Cold Storage";
$safe_item3_desc = "Størstedelen av digitale eiendeler oppbevares i geografisk spredte offline cold storage-hvelv beskyttet av multisignaturprotokoller.";
$safe_item3_badge = "98% Cold Storage";

$safe_item4_title = "Regulert Utførelse";
$safe_item4_desc = "Vi samarbeider med regulerte meglerhus og likviditetsleverandører verden over for å opprettholde etterlevelse, åpenhet og topp klasse utførelse.";
$safe_item4_badge = "Regulert";

$safe_item5_title = "256-bit SSL-Kryptering";
$safe_item5_desc = "Alle dataoverføringer mellom nettleseren din og våre servere er kryptert med militærgrad kryptografiske TLS 1.3-protokoller.";
$safe_item5_badge = "256-bit SSL";

// FREE GUIDE CTA BANNER (CTA 2)
$guide_cta_title = "Få Den Gratis Guiden";
$guide_cta_subtitle = "«10 Feil å Unngå i Kryptohandel»";
$guide_cta_btn = "Få Gratis Guide";

// TRUST SECTION (Pourquoi les investisseurs font confiance à Ciel Cryptance)
$trust_title = "Hvorfor Handlende Stoler På <mark>$site_name</mark>";
$trust_desc = "Over 4 000 000 brukere verden over velger $site_name for dens pålitelighet, kraftige automatisering og gjennomsiktige miljø.";
$trust_subtitle = "Ledende Fordeler for Den Moderne Handlende:";

$trust_item1_title = "Global Markedstilgang";
$trust_item1_desc = "Handle med over 100 kryptovalutaer, Forex-par, aksjer og råvarer fra ett samlet handelsdashbord.";

$trust_item2_title = "Robust Beskyttelse av Midler";
$trust_item2_desc = "Adskilte kontoer, kontinuerlige biometriske kontroller og state-of-the-art cybersikkerhet beskytter kapitalen din 24/7.";

$trust_item3_title = "Ingen Skjulte Gebyrer";
$trust_item3_desc = "Nyt krystallklar prissetting. Gratis registrering, gratis innskudd, ingen plattformforvaltningsgebyrer og øyeblikkelige uttaksforespørsler.";

$trust_item4_title = "Responsiv Support";
$trust_item4_desc = "Vårt dedikerte supportteam er tilgjengelig via live chat, telefon eller e-post for å hjelpe med spørsmål eller tekniske henvendelser.";

$trust_market_info_text = "Mer informasjon om markedsforholdene i 2026";
$trust_market_info_btn = "Hvorfor Handle";

// START TRADING CTA (CTA 3)
$start_cta_title = "Begynn å Handle med <span data-local-currency='$app_price'>$app_price $app_currency</span>!";
$start_cta_desc = "Klar til å prøve $site_name? Registrer deg nå og bli en del av det voksende fellesskapet av kryptoinvestorer og handlende.";
$start_cta_btn = "Registrer Deg";

// FAQ SECTION
$faq_title = "$site_name Ofte Stilte Spørsmål <mark>(FAQ)</mark>";
$faq_q1 = "Hva er $site_name, og hvordan fungerer det?";
$faq_a1 = "Det er en AI-drevet handelsplattform som jobber for deg 24 timer i døgnet. Systemet analyserer markeder, oppdager muligheter og utfører handler automatisk. Du kan la AI-en ta seg av alt eller bytte til manuell modus for å handle på dine egne premisser når som helst.";

$faq_q2 = "Hvor trygge er pengene og dataene mine hos $site_name?";
$faq_a2 = "Sikkerhet er innebygd i hvert lag av plattformen. Personopplysninger er beskyttet ved hjelp av internasjonalt anerkjente krypteringsstandarder og avansert kontoautentisering. Alle finansielle transaksjoner behandles utelukkende gjennom pålitelige og verifiserte betalingsleverandører. All handelsaktiviteten din er synlig i sanntid, så du vet alltid nøyaktig hva som skjer med midlene dine.";

$faq_q3 = "Kan jeg ta ut fortjenesten min når som helst?";
$faq_a3 = "Ja. Det er ingen begrensninger på når eller hvor ofte du kan ta ut midlene dine fra $site_name. Kontosaldoen din forblir under din fulle kontroll til enhver tid. Uttak behandles gjennom de samme pålitelige betalingsleverandørene som brukes til innskudd, noe som garanterer raske og sikre overføringer.";

$faq_q4 = "Er det skjulte gebyrer eller ekstra kostnader?";
$faq_a4 = "Ingen. $site_name krever ingen abonnementsavgifter, ingen registreringsgebyrer og ingen skjulte kostnader. Det eneste beløpet som kreves for å komme i gang, er minimumsinnskuddet på <span data-local-currency='$app_price'>$app_price $app_currency</span>, som krediteres direkte til handelskontoen din. Alle store betalingsmetoder aksepteres, inkludert kredittkort, bankoverføringer og PayPal.";

$faq_q5 = "Kreves det tidligere handelserfaring for å komme i gang?";
$faq_a5 = "Slett ikke. $site_name er designet for både komplette nybegynnere og erfarne handlende. I helautomatisert modus tar AI-en seg av alt for deg, inkludert markedsanalyse, signalgenerering og ordreutførelse. Hvis du foretrekker å beholde kontrollen, kan du bytte til manuell modus når som helst.";

$faq_cta_text = "Har du spørsmål? Sjekk vår FAQ, eller kontakt supportteamet vårt.";
$faq_cta_faq_btn = "Ofte Stilte Spørsmål";
$faq_cta_contact_btn = "Kontakt Oss";

// NEW TRADER LEAD SECTION (Bottom form)
$lead_title = "Ny til Handel?";
$lead_p1 = "Etter registrering vil du motta vår gratis guide <mark class='text-on-surface-tertiary-accent'>«10 Feil å Unngå i Kryptovalutahandel»</mark>. Den inneholder greie råd fra våre mest erfarne analytikere for å hjelpe deg med å unngå vanlige fallgruver.";
$lead_p2 = "Bare fyll inn opplysningene dine i registreringsskjemaet, så sender vi det direkte til innboksen din. Mange handlende har startet med denne guiden og funnet den uvurderlig for å bygge selvtillit i sine første handler.";
$lead_form_heading = "Markedet venter ikke — kom i gang i dag!";

// FEATURES TABLE (Fonctionnalités principales)
$features_title = "<mark>Viktige Funksjoner</mark> ved $site_name Handelsplattform";
$feature_1_title = "🤖 Plattformteknologi";
$feature_1_val = "Avansert AI-drevet handelsmotor";
$feature_2_title = "💳 Finansieringsmetoder";
$feature_2_val = "Store kredittkort, bankoverføringer, PayPal";
$feature_3_title = "📱 Plattformtilgang";
$feature_3_val = "Kompatibilitet på tvers av enheter (Desktop, Nettbrett, Mobil)";
$feature_4_title = "🚀 Suksessrate";
$feature_4_val = "85% analytisk presisjon";
$feature_5_title = "📊 Handelsinstrumenter";
$feature_5_val = "Kryptovaluta, Forex, Aksjer, Råvarer, Edelmetaller, CFD-er og mer…";
$feature_6_title = "✍️ Kontooppsett";
$feature_6_val = "Rask og grei registrering";
$feature_7_title = "📞 Kundestøtte";
$feature_7_val = "24/7 profesjonell dedikert support";

// FOOTER DISCLAIMER (TZ Item 21)
$footer_disclaimer_p1 = "$site_name gir opplæringsinnhold og generell informasjon om finansmarkeder, nettbasert handel og digitale eiendeler. Alt materiale publisert på denne nettsiden, inkludert artikler, diagrammer, prisdata, markedsinnsikt og analyser, er kun ment for informasjonsformål og bør ikke betraktes som finansiell, investerings- eller juridisk rådgivning. Selv om vi streber etter å holde innholdet vårt nøyaktig og oppdatert, garanterer vi ikke dets fullstendighet eller pålitelighet og påtar oss intet ansvar for eventuelle tap som følge av bruk av denne nettsiden.";
$footer_disclaimer_p2 = "Handel med kryptovaluta, Forex, CFD-er, aksjer og andre finansielle instrumenter innebærer betydelig risiko og passer kanskje ikke for alle investorer. Markedsforholdene kan endre seg raskt, og tidligere resultater garanterer ikke fremtidige resultater. Før du tar noen investeringsbeslutninger, bør du nøye vurdere din økonomiske situasjon og risikotoleranse, og søke uavhengig profesjonell rådgivning om nødvendig. Invester bare penger du har råd til å tape.";
$footer_copyright = "© " . date('Y') . " $site_name. All rights reserved.";

// FOOTER NAV LINKS
$footnav_about = "Om Oss";
$footnav_how = "Slik Fungerer Det";
$footnav_why = "Hvorfor Handle";
$footnav_faq = "Ofte Stilte Spørsmål";
$footnav_contacts = "Kontakt Oss";
$footnav_privacy = "Personvernregler";
$footnav_risk = "Risikovarsel";
$footnav_terms = "Bruksvilkår";
$footnav_product = "Produkt";
$footnav_offer = "Tilbud";

// ABOUT PAGE VARIABLES
$about_meta_title = "Om Oss | $site_name Offisiell Side";
$about_meta_description = "Lær mer om $site_name, vårt oppdrag om å demokratisere finansmarkedene gjennom AI-automatisering, og vårt sikkerhetsrammeverk på institusjonelt nivå.";
$about_h1 = "Om <mark>$site_name</mark>";
$about_lead = "Vi styrker handlende over hele verden gjennom kunstig intelligens, algoritmisk utførelse og bedriftssikkerhet.";
$about_mission_title = "Vårt Oppdrag";
$about_mission_text = "Hos $site_name mener vi at avanserte handelsteknologier bør være tilgjengelige for alle, ikke bare institusjonelle fond. Plattformen vår bygger bro mellom vanlige detaljinvestorer og de mest avanserte beregningsbaserte handelsalgoritmene.";
$about_tech_title = "Banebrytende Teknologi";
$about_tech_text = "Systemene våre evaluerer over 100 000 datapunkter hvert sekund på tvers av globale krypto-, Forex- og aksjemarkeder. Ved å kombinere prediktive maskinlæringsmodeller med sub-millisekunds utførelse, leverer vi ultralav slippage og pålitelig ytelse.";
$about_sec_title = "Sikkerhet og Regulatorisk Etterlevelse";
$about_sec_text = "Kundetillit er kjernefundamentet i økosystemet vårt. Vi implementerer 256-bit TLS-kryptering, strenge biometriske og 2FA-protokoller, og lagrer 98% av alle digitale reserver i cold storage-hvelv.";

// PRODUCT PAGE VARIABLES
$product_meta_title = "Handelsverktøy og Produkt | $site_name";
$product_meta_description = "Utforsk handelsmotoren og AI-funksjonene som driver $site_name. Automatisert ordreutførelse, prediktiv analyse og intuitive kontroller.";
$product_h1 = "<mark>Produkt og Funksjoner</mark> for Plattformen";
$product_lead = "Oppdag de intelligente verktøyene designet for å gi deg et konkurransefortrinn på tvers av moderne kryptovaluta- og finansmarkeder.";
$product_f1_title = "Automatisert AI-Handelsmotor";
$product_f1_text = "La nevrale algoritmer analysere markedstrender og utføre optimale handler døgnet rundt uten følelser.";
$product_f2_title = "Sanntids Markedsanalyser";
$product_f2_text = "Live ordrebokdybde, automatisert mønstergjenkjenning og institusjonell sentimentsporing rett ved fingertuppene.";
$product_f3_title = "Risikostyringspakke";
$product_f3_text = "Detaljerte stop-loss- og take-profit-grenser, kontroll av maksimal daglig eksponering og automatiserte sikringsfunksjoner.";
$product_f4_title = "Tilgjengelighet på Tvers av Plattformer";
$product_f4_text = "Handle sømløst på tvers av desktop-nettlesere, nettbrett og smarttelefoner med null forsinkelse og full skysynkronisering.";

// OFFER PAGE VARIABLES
$offer_meta_title = "Spesialtilbud og Vilkår | $site_name";
$offer_meta_description = "Oppdag det eksklusive registreringstilbudet hos $site_name. Kom i gang med et innledende innskudd på $app_price $app_currency og motta dedikert support.";
$offer_h1 = "Eksklusivt <mark>Handelstilbud</mark>";
$offer_lead = "Start handelsreisen din i dag med konkurransedyktige fordeler og dedikert 1-til-1-kontoinnføring.";
$offer_step1_title = "1. Rask Registrering";
$offer_step1_text = "Fyll ut vårt korte registreringsskjema for å sikre tilgang til din personlige konto på under 2 minutter.";
$offer_step2_title = "2. Finansier Handelssaldoen Din";
$offer_step2_text = "Sett inn standardminimum på $app_price $app_currency med kredittkort, bankoverføring eller e-lommebøker. 100% av midlene dine går rett inn i handelssaldoen din.";
$offer_step3_title = "3. Aktiver AI-Handel";
$offer_step3_text = "Velg automatisert eller assistert modus, velg dine foretrukne aktivapar, og begynn å handle med full plattformkapasitet.";

// CONTACTS PAGE VARIABLES
$contacts_meta_title = "Kontakt Support | $site_name";
$contacts_meta_description = "Kom i kontakt med $site_name-teamet. 24/7 kundestøtte, teknisk assistanse og kontohenvendelser.";
$contacts_h1 = "Kontakt <mark>Kundestøtte</mark>";
$contacts_lead = "Vårt dedikerte internasjonale supportteam er klare til å hjelpe deg 24 timer i døgnet, 7 dager i uken.";
$contacts_info_title = "Offisielle Henvendelser";
$contacts_info_text = "For generelle henvendelser, kontoverifisering eller teknisk support, kontakt oss via våre verifiserte kommunikasjonskanaler.";
$contacts_support_hours = "24/7 Live Chat og E-post Support";

// FAQ PAGE VARIABLES
$faq_meta_title = "Ofte Stilte Spørsmål og Kunnskapsbase | $site_name";
$faq_meta_description = "Finn svar på ofte stilte spørsmål om $site_name-kontoer, innskudd, uttak og automatisert AI-handel.";
$faq_h1 = "$site_name <mark>Ofte Stilte Spørsmål</mark>";
$faq_lead = "Klare svar på de vanligste spørsmålene om plattformsikkerhet, uttak og automatisert handel.";

// PRIVACY POLICY PAGE VARIABLES
$privacy_meta_title = "Personvernregler | $site_name";
$privacy_meta_description = "Les våre omfattende personvernregler for å forstå hvordan $site_name samler inn, beskytter og administrerer dine personopplysninger.";
$privacy_h1 = "Personvernregler";
$privacy_p1 = "Disse Personvernreglene beskriver hvordan $site_name samler inn, bruker og deler informasjon når du besøker nettsiden vår, registrerer en konto eller bruker handelsprogramvaren vår.";
$privacy_sec1_title = "1. Datainnsamling og Bruk";
$privacy_sec1_text = "Vi samler inn nødvendig kontaktinformasjon (navn, e-postadresse, telefonnummer) for å etablere kontoen din, koble deg med verifiserte meglerpartnere, og verifisere identitet i samsvar med internasjonale KYC- og AML-standarder.";
$privacy_sec2_title = "2. Informasjonskapsler og Sporingsteknologier";
$privacy_sec2_text = "Vi bruker essensielle og analytiske informasjonskapsler for å forbedre nettsideytelsen, tilpasse brukeropplevelsen og overvåke trafikkmønstre. Du kan justere nettleserens informasjonskapselinnstillinger når som helst.";
$privacy_sec3_title = "3. Datasikkerhet og GDPR-Rettigheter";
$privacy_sec3_text = "Alle brukerdata krypteres under overføring og i hvile ved hjelp av kryptografiske protokoller på banknivå. I henhold til Generell Personvernforordning (GDPR) har brukere rett til å be om tilgang til, korrigering av, eller sletting av sine personlige data.";

// TERMS OF USE PAGE VARIABLES
$terms_meta_title = "Bruksvilkår | $site_name";
$terms_meta_description = "Gjennomgå de offisielle Vilkårene og Betingelsene som regulerer bruken av $site_name-plattformen og tilknyttede tjenester.";
$terms_h1 = "Bruksvilkår";
$terms_p1 = "Vennligst les disse Bruksvilkårene nøye før du får tilgang til eller bruker $site_name. Ved å registrere en konto godtar du å være bundet av disse bestemmelsene.";
$terms_sec1_title = "1. Brukerkvalifikasjon";
$terms_sec1_text = "Du må være minst 18 år gammel og bosatt i en jurisdiksjon der nettbasert handel og kryptovalutainteraksjoner er lovlig tillatt. Du er ansvarlig for å sikre overholdelse av dine lokale lover.";
$terms_sec2_title = "2. Kontoregistrering og Sikkerhet";
$terms_sec2_text = "Du godtar å oppgi sanne, nøyaktige og fullstendige opplysninger under registreringen. Du er alene ansvarlig for å opprettholde konfidensialiteten til påloggingsinformasjonen din.";
$terms_sec3_title = "3. Ansvarsbegrensning";
$terms_sec3_text = "$site_name tilbyr informasjons- og programvarerutingstjenester. Vi gir ikke personlig finansiell rådgivning eller garanterer handelslønnsomhet. Handel på finansmarkeder medfører iboende kapitalrisiko.";

// RISK WARNING PAGE VARIABLES (TZ Item 19: Exact 4 sections)
$risk_meta_title = "Risikovarsel og Juridisk Merknad | $site_name";
$risk_meta_description = "Viktig risikoopplysning angående CFD-, Forex- og kryptovalutahandel på $site_name. Les nøye før du investerer.";
$risk_h1 = "Risikovarsel";
$risk_sec1_title = "1. Melding om Høyrisikoinvestering og Volatilitet";
$risk_sec1_text = "Handel med kryptovaluta, differansekontrakter (CFD-er), utenlandsk valuta (Forex) og andre finansielle eiendeler innebærer betydelig risiko for tap og passer ikke for alle investorer. Kryptovalutamarkeder er ekstremt volatile, med priser som er utsatt for kraftige svingninger som respons på regulatoriske kunngjøringer, makroøkonomiske endringer eller markedssentiment. Du bør aldri investere penger du ikke har råd til å tape fullstendig.";
$risk_sec2_title = "2. Uavhengig Finansiell Rådgivning";
$risk_sec2_text = "Alt materiale, verktøy, algoritmiske signaler og kommentarer levert på $site_name er kun ment for informasjons-, opplærings- og markedsføringsformål. Ingenting av innholdet på denne nettsiden utgjør personlig investerings-, juridisk eller finansiell rådgivning. Før du utfører noen handler, bør du gjøre uavhengig research eller konsultere en lisensiert finansiell rådgiver.";
$risk_sec3_title = "3. Regulatoriske og Geografiske Begrensninger";
$risk_sec3_text = "Visse jurisdiksjoner begrenser eller forbyr detaljhandel med CFD-er og kryptovaluta. Det er brukerens eneansvar å verifisere om tilgang til $site_name og bruk av partnermeglerhus er lovlig under deres lokale juridiske rammeverk.";
$risk_sec4_title = "4. Plattformteknologi og Markedsutførelse";
$risk_sec4_text = "Automatiserte handelsverktøy, kunstig intelligens-algoritmer og markedsindikatorer garanterer ikke fortjeneste eller eliminerer markedsrisiko. Tekniske forstyrrelser, nettverksforsinkelse, systemnedetid og markedslikviditetsmangel kan resultere i forsinkelser i handelsutførelse eller slippage.";

// SIGN UP / LOGIN PAGE VARIABLES
$sign_meta_title = "Registrering / Logg Inn | $site_name";
$sign_meta_description = "Opprett din gratis konto hos $site_name for å få tilgang til intelligente automatiserte handelsverktøy, markedssignaler og sikre finansieringsalternativer.";
$sign_h1 = "Registrer deg hos <mark>$site_name</mark>";
$sign_lead = "Bli med tusenvis av handlende og få umiddelbar tilgang til AI-handelsmotoren vår.";

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
$hero_form_heading = "Opprett din gratis konto";
$hero_form_button = "Registrer Deg";
$form_name_placeholder = "Skriv inn fornavnet ditt";
$form_surname_placeholder = "Skriv inn etternavnet ditt";
$form_disclaimer_prefix = "Ved å oppgi dine personlige opplysninger og klikke på knappen godtar du";
$form_privacy_link_label = "Personvernreglene";
$form_disclaimer_and = "og";
$form_terms_link_label = "Bruksvilkårene";
$form_disclaimer_of_site = "for denne nettsiden.";

// -- partners strip --
$partners_label = "Betrodd av ledende partnere";

// -- "what is" section --
$whatis_label = "Om Plattformen";
$whatis_title = "Hva er $site_name?";
$whatis_intro = "$site_name er den offisielle nettbaserte handelsplattformen, designet for å gjøre krypto like enkelt som daglig nettbank.";
$whatis_icon_1_title = "AI-Drevet Analyse";
$whatis_icon_1_text = "Avanserte algoritmer håndterer markedenes kompleksitet for deg.";
$whatis_icon_2_title = "Umiddelbar Utførelse";
$whatis_icon_2_text = "Tusenvis av datapunkter behandlet hvert sekund — handler uten forsinkelse.";
$whatis_icon_3_title = "Enkelt, Intuitivt Dashbord";
$whatis_icon_3_text = "Sjekk saldoen din og åpne posisjoner med et blikk, når som helst.";
$whatis_icon_4_title = "Enkel Tilgang, Ingen Barrierer";
$whatis_icon_4_text = "Start med et minimumsinnskudd på bare $app_price $app_currency — ingen skjulte gebyrer.";
$whatis_cta_text = "Vil du vite mer om teamet og produktet vårt?";
$whatis_cta_link = "Om Oss";

// -- stats section heading (per-stat label/value already set above) --
$stats_label = "$site_name i Tall";
$stats_title = "Tall Som Taler Høyere Enn Løfter";

// -- key benefits section --
$benefits_label = "Viktige Fordeler";
$benefits_title = "Hovedfordeler ved $site_name";
$benefit_1_title = "Nybegynnervennlig Plattform";
$benefit_1_text = "Intuitive diagrammer og trinnvise guider hjelper deg med å komme i gang uten å føle deg overveldet. Du kan handle krypto med selvtillit fra dag én.";
$benefit_2_title = "Offisiell og Regulert";
$benefit_2_text = "$site_name er lisensiert og overholder gjeldende finansregelverk. Vi bruker SSL-kryptering og tofaktorautentisering for å beskytte hver konto.";
$benefit_3_title = "Enkel Tilgang, Ingen Barrierer";
$benefit_3_text = "Med et minimumsinnskudd på bare $app_price $app_currency kan alle komme i gang. Ingen stor forhåndsinvestering kreves — start i det små, og øk innsatsen din etter hvert som selvtilliten din vokser.";
$benefit_4_title = "Gjennomsiktige Gebyrer";
$benefit_4_text = "Du vil aldri se skjulte kostnader. Vi anvender kun minimale transaksjons- eller uttaksgebyrer der det gjelder, så du vet alltid nøyaktig hva du betaler.";
$benefit_5_title = "24/7 Handelstilgang";
$benefit_5_text = "Handle på din egen tidsplan, dag eller natt. $site_name fungerer like bra på desktop som på mobil, så du kan holde deg tilkoblet markedet uansett hvor du er.";
$benefit_6_title = "Lokal Kundestøtte";
$benefit_6_text = "Supportteamet vårt er tilgjengelig via chat, telefon eller e-post. Ekte mennesker er her for å hjelpe deg på ditt eget språk, når du trenger det.";
$benefits_trust_title = "Betrodd av Brukere Verden Over";
$benefits_trust_text = "Det er derfor så mange kryptobrukere stoler på $site_name. Tusenvis av handlende bruker allerede $site_name, og nye kontoer blir opprettet hver dag.";
$benefits_cta = "Registrer Deg";
$benefits_badge_1 = "256-bit SSL";
$benefits_badge_2 = "Sikre Betalinger";
$benefits_badge_3 = "2FA";

// -- security section --
$security_label = "Sikkerhet";
$security_title = "Midlene Dine Er Trygge hos $site_name";
$security_subtitle = "Kryptering på banknivå, verifiserte betalinger og 98% cold storage — pengene dine er beskyttet i hvert steg.";
$security_1_title = "Verifiserte Betalingsleverandører";
$security_1_text = "Betalinger behandles utelukkende av sertifiserte leverandører som oppfyller internasjonale sikkerhetsstandarder. Betalingsdataene dine lagres aldri på våre servere.";
$security_2_title = "256-bit SSL-Kryptering";
$security_2_text = "Alle data som utveksles mellom enheten din og plattformen vår, er kryptert med 256-bit TLS. Ingen tredjepart kan avskjære eller lese det.";
$security_3_title = "98% Cold Storage";
$security_3_text = "98% av eiendelene oppbevares i offline lommebøker, uten internettilkobling. Ingen kan få ekstern tilgang til dem.";
$security_4_title = "Multifaktorautentisering";
$security_4_text = "Bare du kan få tilgang til kontoen din. Hver pålogging verifiseres av et andre trinn som bare du kontrollerer.";
$security_5_title = "Kontoovervåking";
$security_5_text = "Hver pålogging, transaksjon eller innstillingsendring utløser en umiddelbar varsling, så du vet alltid hva som skjer på kontoen din.";
$security_6_title = "Passordbeskyttelse";
$security_6_text = "Passord lagres i en uleselig, irreversibel form. Vi har teknisk sett ingen måte å se passordet ditt på.";
$security_cta_title = "Få En Gratis Guide!";
$security_cta_text = "Få vår gratis nybegynnerguide, og begynn å handle i dag.";
$security_cta_button = "Registrer Deg";
$security_badge_1 = "98% Cold Storage";
$security_badge_2 = "Verifiserte Betalinger";
$security_badge_3 = "Kryptert";

// -- how it works section --
$how_label = "Slik Fungerer Det";
$how_title = "Slik Fungerer Det";
$how_1_title = "Registrer Deg";
$how_1_text = "Klikk på knappen «Åpne Konto» og fyll ut registreringsskjemaet med opplysningene dine (navn, e-post og telefonnummer). Det tar bare ett minutt.";
$how_2_title = "Sett Inn Midler";
$how_2_text = "Deretter finansierer du kontoen din. Minimumsinnskuddet er bare $app_price $app_currency. Du kan bruke et kreditt-/debetkort, lokal bankoverføring eller populære e-lommebøker. (Tips: start med et beløp du er komfortabel med.)";
$how_3_title = "Begynn å Handle";
$how_3_text = "Når midlene dine er på kontoen din, er du klar til å handle. Velg aktivumet du ønsker (som BTC, SOL eller USDT) og bestem strategien din.";
$how_cta_label = "Slik Fungerer Det";
$how_cta_text = "Trenger du mer informasjon om hvordan tjenesten fungerer?";
$how_cta_link = "Slik Fungerer Det";

// -- trust reasons section --
$trust_label = "Hvorfor Handle Med Oss";
$trust_intro = "Bli med tusenvis av brukere som allerede handler med $site_name.";
$trust_1_title = "Fullt Regulert";
$trust_1_text = "$site_name er behørig registrert og overholder gjeldende finansregelverk. Vi opererer under strenge regler for å sikre din trygghet.";
$trust_2_title = "Avansert Sikkerhet";
$trust_2_text = "Alle dataene og midlene dine er kryptert og sikret. Vi håndhever streng kontobeskyttelse gjennom SSL-kryptering og tofaktorautentisering.";
$trust_3_title = "Gjennomsiktige Operasjoner";
$trust_3_text = "Vi skjuler aldri gebyrene våre og legger aldri til overraskende regler. Før hver transaksjon ser du nøyaktig hvilke gebyrer som gjelder.";
$trust_4_title = "Responsiv Support";
$trust_4_text = "Supportteamet vårt er tilgjengelig via chat, telefon eller e-post for å svare på spørsmålene dine eller løse ethvert problem.";
$trust_cta_text = "Mer informasjon om markedsforhold";
$trust_cta_link = "Hvorfor Handle";

// -- testimonials section heading (individual reviews already set above) --
$testimonials_label = "Attester";
$testimonials_title = "Betrodd av Over 4M Handlende";

// -- FAQ section heading --
$faq_label = "Ofte Stilte Spørsmål";

// -- lead magnet CTA block --
$leadmagnet_title = "Ny til Handel?";
$leadmagnet_text1 = "Etter at du registrerer deg, vil du motta vår gratis guide,";
$leadmagnet_quote = "«10 Feil å Unngå Når Du Handler med Krypto»";
$leadmagnet_text2 = "pakket med enkle tips fra våre mest erfarne analytikere for å hjelpe deg med å unngå de vanligste feilene.";
$leadmagnet_text3 = "Bare fyll inn opplysningene dine under";
$leadmagnet_link = "registreringen";
$leadmagnet_text4 = "så sender vi det direkte til innboksen din. Mange investorer startet med denne guiden og sier at den gjorde en reell forskjell.";
$leadmagnet_text5 = "Markedet venter ikke — kom i gang i dag!";

// -- pre-about CTA band --
$pre_about_title = "Klar til å Ta Kontroll Over Handelen Din?";
$pre_about_text = "Bli med i $site_name i dag, og oppdag en plattform bygget for klarhet, sikkerhet og resultater.";
$pre_about_button = "Registrer Deg";

// -- pretest (quiz teaser) badges/CTA --
$pretest_title = "Begynn å Handle med $app_price $app_currency!";
$pretest_text = "Klar til å prøve $site_name? Registrer deg nå og bli en del av det voksende fellesskapet av kryptoinvestorer og handlende.";
$pretest_button = "Registrer Deg";
$pretest_badge_1 = "Sikker";
$pretest_badge_2 = "Regulert";
$pretest_badge_3 = "Betrodd av Over 4M Handlende";

// -- about page --
$about_label = "Om Oss";
$about_title = "Om $site_name";
$about_intro = "$site_name gir deg ikke bare en handelsplattform — vi hjelper deg med å handle med klarhet og selvtillit.";
$about_text_1 = "$site_name er den offisielle nettbaserte handelsplattformen, designet for å gjøre kryptohandel tilgjengelig for både nybegynnere og erfarne handlende.";
$about_text_2 = "Vi kombinerer AI-drevet markedsanalyse med et enkelt, gjennomsiktig dashbord, så du alltid vet nøyaktig hvor du står.";
$about_text_3 = "Hver del av plattformen er bygget rundt klarhet: ingen skjulte gebyrer, ingen forvirrende sjargong, bare klar informasjon du kan handle på.";
$about_text_4 = "Plattformen vår sparer deg for timer med gjetting og beskytter deg mot ugjennomsiktige alternativer av lav kvalitet. Vi tror handel bør bygges på presisjon, ikke flaks.";

// -- contact page --
$contact_label = "Kontakt Oss";
$contact_title = "Kontakt $site_name";
$contact_subtitle = "Har du et spørsmål eller trenger hjelp? Vi er her for å gi deg råd og veiledning.";
$contact_text = "Hos $site_name tror vi at suksess i handel ikke har noe med flaks å gjøre — det avhenger av presisjon, forutseenhet og de riktige verktøyene.";
$contact_form_text = "Bare fyll ut skjemaet nedenfor, så vil et medlem av teamet vårt kontakte deg snart.";
$contact_form_button = "Send Melding";

// -- footer navigation labels (geo-page footer, TZ items 12/16/18) --
$footnav_col_pages = "Sider";
$footnav_col_support = "Support";
$footnav_col_legal = "Juridisk";
$footnav_col_company = "Selskap";
$footnav_home = "Hjem";
$footnav_sitemap = "Nettstedskart";
$footnav_conditions = "Bruksvilkår";
$footnav_contact = "Kontakt Oss";
$footnav_signup = "Registrer Deg";
$footer_risk_warning = "Risikovarsel";

// -- geo-page footer legal disclaimer (single-paragraph variant used by
// the geo template's own footer layout; the two-paragraph TZ item 21
// text above -- $footer_disclaimer_p1/$footer_disclaimer_p2 -- covers
// the root pages) --
$footer_disclaimer = "$site_name gir opplæringsinnhold og generell informasjon om finansmarkeder, nettbasert handel og digitale eiendeler. Alt materiale publisert på denne nettsiden er kun ment for informasjonsformål og bør ikke betraktes som finansiell, investerings- eller juridisk rådgivning. Handel innebærer betydelig risiko og passer kanskje ikke for alle investorer. Invester bare penger du har råd til å tape.";

// ============================================================
// Geo-language SUBPAGE fallback content (TZ item 16 cont.). Same
// rationale as the block above: conditions/contacts/faq/offer/
// privacy/product/risk-warning/sign.php share templates across the
// bg/cs/da/... stub folders and reference these vars directly.
// English fallback so every geo folder's subpages render complete.
// ============================================================

// -- shared form aliases (service-page forms reuse the hero disclaimer) --
$form_disclaimer_risk_note = "Les også vår";
$form_text = $form_disclaimer_prefix;
$form_text_privacy = $form_privacy_link_label;
$form_text_privacy_and = $form_disclaimer_and;
$form_text_conditions = $form_terms_link_label;
$form_text_conditions_of = $form_disclaimer_of_site;
$form_text_risk_warning_note = $form_disclaimer_risk_note;
$form_submit = "Registrer Deg";

// -- generic breadcrumbs (sign-up / product pages) --
$breadcrumb_home = "Hjem";
$breadcrumb_current = "Registrering / Logg Inn";
$breadcrumb_product = "Produkt";

// -- sign-up page official heading --
$official_heading = "Registrer Deg på den Offisielle {$site_name}™-Plattformen";
$official_description = "Opprett din gratis konto for å begynne å handle med kryptovaluta på en sikker, gjennomsiktig plattform.";

// -- product page: analytics banner --
$analytics_heading = "Handle Smartere med $site_name";
$analytics_description = "Få klare sanntids markedsdata og AI-drevet innsikt. Ta informerte handelsbeslutninger med selvtillit.";

// -- product page: dashboard preview --
$app_main_heading = "Handelsdashbordet Ditt";
$app_feature_1_title = "Live Markedsdata";
$app_feature_1_text = "Priser og diagrammer i sanntid rett ved fingertuppene";
$app_feature_2_title = "Porteføljesporing";
$app_feature_2_text = "Omfattende målinger om saldoen og ytelsen din";
$app_feature_3_title = "Mobilvisning";
$app_feature_3_text = "Optimalisert for mobilnettlesere";
$app_feature_4_title = "Overvåkningslister";
$app_feature_4_text = "Hold oversikt over eiendelene du overvåker";

// -- product page: capabilities --
$capabilities_main_title = "Hva Du Kan Forvente";
$capabilities_feature_1_title = "AI-Drevne Signaler";
$capabilities_feature_1_text = "Avanserte algoritmer analyserer markedssignaler og avdekker muligheter døgnet rundt.";
$capabilities_feature_2_title = "Rask Registrering";
$capabilities_feature_2_text = "Registrer deg på minutter med en sikker, grei registreringsprosess.";
$capabilities_feature_3_title = "Verifisert Sikkerhet";
$capabilities_feature_3_text = "256-bit SSL-kryptering, 2FA og 98% cold storage beskytter midlene dine i hvert steg.";
$capabilities_feature_4_title = "Løpende Support";
$capabilities_feature_4_text = "Få support fra teamet vårt i hvert steg — fra registrering til din første handel.";

// -- product page: stats strip --
$products_stats_currencies_v = "65+";
$products_stats_currencies_l = "Tilgjengelige Valutaer";
$products_stats_users_v = "4M+";
$products_stats_users_l = "Registrerte Brukere";
$products_stats_volume_v = "98+";
$products_stats_volume_l = "Land Som Støttes";
$products_stats_countries_v = "24/7";
$products_stats_countries_l = "Transaksjonstilgang";

// -- product page: 3-step strip --
$step_1 = "Opprett en konto";
$step_2 = "Sett inn midler";
$step_3 = "Begynn å handle med strategien som passer deg";

// -- shared "last update" label (privacy page) --
$last_update = "Siste oppdatering";

// -- FAQ page --
$faq_page_meta_title = "Ofte Stilte Spørsmål | $site_name Support";
$faq_page_meta_description = "Svar på ofte stilte spørsmål om hvordan $site_name fungerer, priser og hvordan du kommer i gang.";
$faq_page_title = "Ofte Stilte Spørsmål";
$faq_page_breadcrumb_home = "Hjem";
$faq_page_breadcrumb_current = "Ofte Stilte Spørsmål";
$faq_page_help_title = "Hvordan kan vi hjelpe deg?";
$faq_1_q = "Hvordan kommer jeg i gang?";
$faq_1_a = "Opprett kontoen din, verifiser e-postadressen din, og gjør ditt første innskudd — planer starter fra bare $app_price $app_currency.";
$faq_2_q = "Er pengene og dataene mine trygge? Er $site_name pålitelig?";
$faq_2_a = "Ja. Dataene dine er beskyttet av bransjestandard 256-bit kryptering, og midlene dine er sikret med tofaktorautentisering og 98% cold storage.";
$faq_3_q = "Kan jeg lukke kontoen min eller ta ut midler når som helst?";
$faq_3_a = "Ja. Det er ingen begrensninger på uttak. Kontakt supportteamet vårt når som helst — vi hjelper deg med kontoen din eller behandler uttaket ditt umiddelbart.";
$faq_4_q = "Hvordan vet jeg om denne plattformen passer for meg?";
$faq_4_a = "$site_name ble bygget for både absolutte nybegynnere og erfarne handlende som ønsker å handle mer effektivt — hvert verktøy på plattformen er designet for å holde deg informert og i kontroll.";
$faq_5_q = "Trenger jeg handelserfaring for å komme i gang?";
$faq_5_a = "Ingen tidligere erfaring er nødvendig. Vår AI-drevne modus håndterer analysen for deg, og du kan bytte til manuell modus når som helst hvis du ønsker mer kontroll.";

// -- contacts page --
$contacts_h3 = "For tekniske spørsmål eller spørsmål om kontoen din, vennligst kontakt oss via e-post";

// -- offer page (meta title/description already defined above) --
$offer_breadcrumb_home = "Hjem";
$offer_breadcrumb_current = "Tilbud";
$offer_cta_h1 = "Begynn å Handle i Dag";
$offer_cta_text = "Klar på minutter: registrer deg, finansier kontoen din, og begynn å handle med kryptovaluta på en sikker, regulert plattform.";
$offer_how_it_works_title = "Slik Fungerer Det";
$offer_official_platform_title = "Dette Er den Offisielle {$site_name}™ Handelsplattformen";
$offer_official_platform_text = "En pålitelig, gjennomsiktig måte å handle kryptovaluta på — med sanntidsinnsikt og full kontroll.";

// -- conditions of use page --
$conditions_meta_title = "Bruksvilkår | $site_name";
$conditions_meta_description = "Les de offisielle Bruksvilkårene for $site_name-nettsiden og handelsplattformen.";
$conditions_breadcrumb_home = "Hjem";
$conditions_breadcrumb_current = "Bruksvilkår";
$conditions_h1 = "Bruksvilkår";
$conditions_s1_title = "1. Generelt";
$conditions_s1_text = "Denne nettsiden gir tilgang til en nettbasert kryptovaluta-handelsplattform. Bruk av plattformen utgjør full aksept av disse vilkårene og våre Personvernregler.";
$conditions_s2_title = "2. Kvalifisering";
$conditions_s2_text = "Brukere må være minst 18 år gamle og ha full juridisk handleevne i sin respektive jurisdiksjon.";
$conditions_s3_title = "3. Begrenset Tilgang";
$conditions_s3_text = "Tilgang kan være begrenset i jurisdiksjoner der lokale forskrifter forbyr typen handelstjeneste vi tilbyr.";
$conditions_s4_title = "4. Forbudt Bruk";
$conditions_s4_text = "Brukere kan ikke misbruke systemet, forsøke uautorisert tilgang til systemene våre, eller reversere ingeniørkunst programvaren vår.";
$conditions_s5_title = "5. Immaterielle Rettigheter";
$conditions_s5_text = "All kildekode, brukergrensesnitt og merkevareeiendeler forblir eksklusiv eiendom til det driftende selskapet.";
$conditions_s6_title = "6. Ansvar";
$conditions_s6_text = "Plattformens verktøy leveres «som de er». Vi påtar oss intet ansvar for resultater som følge av brukerens egne handelsbeslutninger.";
$conditions_s7_title = "7. Tredjepartstjenester";
$conditions_s7_text = "Integrasjoner med tredjeparts betalingsleverandører skjer over sikre forbindelser. For innskudd og uttak forholder brukere seg direkte til sin valgte leverandør.";
$conditions_s8_title = "8. Eksterne Lenker";
$conditions_s8_text = "Lenker til eksterne ressurser er kun gitt for bekvemmelighet. Vi godkjenner eller garanterer ikke noen ekstern programvare.";
$conditions_s9_title = "9. Diverse";
$conditions_s9_text = "Vi forbeholder oss retten til å endre disse vilkårene eller tjenesten når som helst, med endringer publisert på nettsiden.";

// -- privacy policy page (meta title/description already defined above) --
$privacy_breadcrumb_home = "Hjem";
$privacy_breadcrumb_current = "Personvernregler";
$privacy_page_h1 = "Personvernregler";
$privacy_intro = "Vi respekterer personvernet ditt og behandler personopplysninger i full samsvar med internasjonale standarder og den europeiske GDPR-en.";
$privacy_transparency_title = "Åpenhet";
$privacy_transparency_text = "Vi opplyser klart hvordan operasjonelle telemetridata behandles. Kontakt support for ytterligere detaljer.";
$privacy_usage_title = "Databruk";
$privacy_usage_text = "Data brukes utelukkende til å gi tilgang, sikre økter og oppfylle etterlevelsesforpliktelser.";
$privacy_rights_short_title = "Dine Rettigheter";
$privacy_rights_short_text = "Du beholder fulle rettigheter til å se, oppdatere eller be om sletting av dine personopplysninger.";
$privacy_security_title = "Sikkerhet";
$privacy_security_text = "Vi bruker AES-256-kryptering og databaseisolasjon for å beskytte operasjonelle telemetridata.";
$privacy_s1_title = "1. Datainnsamling";
$privacy_s1_text = "Vi samler inn brukstelemetri (IP-adresse, systemparametere, nettlesertype) samt verifiseringsdata sendt inn av brukere.";
$privacy_s2_title = "2. Rettslig Grunnlag";
$privacy_s2_text = "Behandlingen er basert på brukernes uttrykkelige samtykke, regulatoriske etterlevelseskrav og levering av tjenesten.";
$privacy_s3_title = "3. Datadeling";
$privacy_s3_text = "Data blir aldri kommersialisert. Utleveringer er begrenset til autoriserte oppgjørsenheter og tekniske partnere under en konfidensialitetsavtale (NDA).";
$privacy_s4_title = "4. Informasjonskapsler";
$privacy_s4_text = "Essensielle informasjonskapsler brukes til øktautentisering og grensesnittoptimalisering.";
$privacy_google_choices = 'Administrer sporingsinnstillingene dine via <a href="http://www.google.com/settings/ads" target="_blank" rel="noopener">Google Annonseinnstillinger</a> eller bruk <a href="https://tools.google.com/dlpage/gaoptout" target="_blank" rel="noopener">Google Analytics Reservasjonstillegg</a>. Du kan også gjennomgå Googles egne datapraksiser i deres <a href="https://www.google.com/intl/en/policies/privacy/" target="_blank" rel="noopener">Personvernregler</a>.';
$privacy_s5_title = "5. Dataoppbevaring";
$privacy_s5_text = "Personopplysninger oppbevares kun så lenge det er nødvendig for å oppfylle krav til systemtilgang.";
$privacy_s6_title = "6. Internasjonale Overføringer";
$privacy_s6_text = "Grenseoverskridende dataoverføringer skjer utelukkende via krypterte kanaler og via standard kontraktsklausuler.";
$privacy_s7_title = "7. Tredjepartslenker";
$privacy_s7_text = "Vi er ikke ansvarlige for personvernpraksisen til eksterne tredjepartstjenester lenket fra nettsiden vår.";
$privacy_s8_title = "8. Oppdateringer";
$privacy_s8_text = "Denne policyen kan revideres periodisk for å reflektere system- eller juridiske endringer.";
$privacy_rights_title = "Dine Rettigheter";
$privacy_rights_text = "Brukere har rett til å be om tilgang til, korrigering av, begrenset behandling av eller fullstendig sletting av sine lagrede data.";

// -- risk warning page --
$page_title_risk_warning = "Risikovarsel | $site_name";
$page_description_risk_warning = "Forstå risikoene ved handel, og hvordan $site_name hjelper deg med å håndtere dem trygt.";
$risk_warning_breadcrumb_home = "Hjem";
$risk_warning_breadcrumb_current = "Risikovarsel";
$risk_warning_title = "Risikovarsel";
$risk_warning_intro = "Å forstå risiko er det første skrittet mot å handle med selvtillit.";
$risk_warning_ai_heading = "Slik hjelper AI-systemet vårt med risikostyring:";
$risk_warning_ai_1 = "<strong>Algoritmisk Effektivitet og Følelsesløs Handel:</strong> Avanserte algoritmer analyserer markedssignaler for å utføre handler objektivt på det optimale tidspunktet.";
$risk_warning_ai_2 = "<strong>Datadrevne Strategier:</strong> Strategier er basert på verifiserte markedsmønstre og sanntidsanalyse i stedet for gjetting.";
$risk_warning_ai_3 = "<strong>Fleksible Innstillinger og Full Kontroll:</strong> Juster risikoparametrene dine når som helst. Følg med på alle saldoer og handler gjennomsiktig på dashbordet ditt — uten skjulte gebyrer og uten begrensninger på uttak.";
$risk_warning_disclaimer = "<strong>Ansvarsfraskrivelse:</strong> Handel innebærer alltid risiko. Automatiserte systemer (inkludert AI) garanterer ikke fortjeneste, kan feile på grunn av programvarefeil eller uventede markedshendelser, og krever overvåking av brukeren. Tidligere resultater er ikke en indikator på fremtidige resultater. Denne plattformen tjener kun informasjons- og markedsføringsformål og utgjør ikke finansiell rådgivning.";
$risk_warning_s1_heading = "1. Generell Risiko og Risiko i Kryptovalutamarkedet";
$risk_warning_s1_1 = "Kryptovaluta er svært volatile, spekulative eiendeler som handles døgnet rundt og kun er underlagt minimal regulatorisk tilsyn i de fleste jurisdiksjoner.";
$risk_warning_s1_2 = "Verdier kan svinge drastisk innenfor korte perioder, noe som potensielt kan føre til et fullstendig tap av investert kapital.";
$risk_warning_s1_3 = "Markedsverdier kan bli sterkt påvirket av regulatoriske endringer, teknisk utvikling, sikkerhetsbrudd eller bredere makroøkonomiske hendelser.";
$risk_warning_s1_4 = "Noen eiendeler kan miste hele sin verdi. Invester bare penger du har råd til å tape.";
$risk_warning_s2_heading = "2. Utførelses-, Likviditets- og Gearingsrisiko";
$risk_warning_s2_1 = "<strong>Markedsvolatilitet og Likviditet:</strong> Ekstreme prisbevegelser (10-20%+ daglig) eller lav likviditet (spesielt for mindre mynter) kan føre til forsinkelser, plattformnedetid og betydelig utførelsesslippage. Stop-loss-ordre kan ikke garantere tapsbegrensning under ekstreme forhold.";
$risk_warning_s2_2 = "<strong>Gearings- og Marginrisiko:</strong> Gearede produkter forsterker både gevinster og tap, noe som betyr at du kan tape mer enn ditt opprinnelige innskudd. Omtrent 70-80% av detaljinvestorkontoer taper penger når de handler med gearede produkter.";
$risk_warning_s3_heading = "3. Teknisk, Cybersikkerhets- og Tredjepartsrisiko";
$risk_warning_s3_1 = "<strong>Tekniske Faktorer:</strong> Nettbasert handel medfører iboende risiko som internettforbindelsesavbrudd, maskinvare-/programvarefeil og utilgjengelighet av tjenesten.";
$risk_warning_s3_2 = "<strong>Cybersikkerhet:</strong> Kryptovalutakontoer er hyppige mål for phishing, skadevare og hackingforsøk. Transaksjoner er irreversible; kompromittering av påloggingsopplysningene dine kan resultere i permanent tap.";
$risk_warning_s3_3 = "<strong>Tredjepartsplattformer:</strong> Denne nettsiden kan koble brukere til tredjepartsplattformer. Vi kontrollerer, godkjenner eller garanterer ikke deres sikkerhet, drift eller solvens. Utfør alltid din egen grundige due diligence før du setter inn midler på eksterne plattformer.";
$risk_warning_s4_heading = "4. Regulatoriske, Skatte- og Sluttbestemmelser";
$risk_warning_s4_1 = "<strong>Juridisk Etterlevelse og Skatter:</strong> Regulatoriske rammeverk varierer mye og endres raskt. Brukere er alene ansvarlige for å sikre at handelsaktivitetene deres overholder lokal lov, samt for å oppfylle sine egne skatteforpliktelser.";
$risk_warning_s4_2 = "<strong>Ingen Fortjenestegaranti:</strong> Det finnes ingen «trygg» eller risikofri kryptovalutahandel. Eventuelle avkastningstall eller ytelseseksempler er rent hypotetiske.";
$risk_warning_s4_3 = "<strong>Egnethet:</strong> Hvis du ikke fullt ut forstår risikoene, er avhengig av nødvendige finansielle ressurser, eller handler med lånte penger, er kryptovalutahandel ikke egnet for deg. Ved tvil, konsulter en uavhengig, lisensiert finansiell rådgiver.";
$risk_warning_contact = "<strong>Kontakt:</strong> Hvis du har spørsmål om denne erklæringen, eller ønsker å sende inn en henvendelse, vennligst kontakt vårt offisielle kundeserviceteam via kontaktskjemaet på nettsiden vår.";

