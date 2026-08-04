<?php
require __DIR__ . '/../lang.php';

// Identity / config variables are intentionally NOT overridden here — they are inherited
// as-is from the root lang.php so brand/pricing swaps still work correctly at deploy time:
// $site_name, $site_url, $site_domain, $app_price, $app_currency, $rating_value,
// $rating_count, $review_count, $country_name, $support_email, $institutional_email.

$site_lang = 'no-NO';
$form_language = 'no';

// Reviews
$review_1_author = "Privatinvestor";
$review_2_author = "Uavhengig Trader";
$review_3_author = "Kryptohandler";
$review_4_author = "Søker Passiv Inntekt";

// META TITLE / DESCRIPTION (per page)
$home_meta_title = "$site_name — Offisiell Nettside | Handelsplattform";
$home_meta_description = "$site_name ⭐ — intelligent AI-handelsplattform for markedsanalyse i sanntid og klare handelssignaler ⚡ Prøv smarte verktøy og innsikt med en guidet omvisning.";

$quiz_consultant_name = 'Mia';
$quiz_consultant_role = 'Onboarding-assistent';

$quiz_text_welcome   = "Hei! Dette er $quiz_consultant_name, din personlige onboarding-assistent hos $site_name. Gode nyheter! Din tilgang er offisielt forhåndsgodkjent. La oss konfigurere din profesjonelle profil nå!";
$quiz_text_q1 = "For å sikre full overholdelse av lover og regler, vennligst bekreft ditt nåværende bostedsland: $country_name";
$quiz_text_a1_yes    = "Ja, dette er min nåværende adresse";
$quiz_text_a1_no     = "Nei";

$quiz_text_q2 = "Perfekt. Vennligst velg riktig alderskategori for å finne de mest passende finansielle instrumentene:";

$quiz_text_q3        = "Har du en aktiv bankkonto eller et kredittkort tilgjengelig for å motta regelmessige daglige utbyttebetalinger?";
$quiz_text_a3_yes    = "Ja, en aktiv konto er tilgjengelig";
$quiz_text_a3_no     = "Ikke tilgjengelig ennå";

$quiz_text_q4        = "Vennligst oppgi din primære inntektskilde. (Denne parameteren hjelper med å tilpasse systemets innstillinger for risikostyring).";
$quiz_text_a4_1      = "Fast ansatt / Selvstendig næringsdrivende";
$quiz_text_a4_2      = "Passiv inntekt / Personlige sparepenger";
$quiz_text_a4_3      = "Andre kilder";

$quiz_text_q5 = "Flott! Det siste trinnet er en kort telefonverifisering fra vår leder for å bekrefte registreringen din. Samtaler foretas fra 11:00 til 20:00. Vil du kunne ta imot samtalen?";
$quiz_text_a5_yes    = "Ja, dette tidspunktet passer for samtalen";
$quiz_text_a5_no     = "Vennligst start samtalen umiddelbart";

$quiz_text_loader    = "Analyserer de forespurte alternativene og initialiserer sikre parametere for kontokonfigurasjon...";
$quiz_text_final_ttl = "Konto vellykket autorisert! 🎉 Det sikre digitale arbeidsområdet er ferdig konfigurert. Vennligst fullfør de siste verifiseringstrinnene nedenfor for å garantere daglige betalinger:";

$quiz_placeholder_fname = "Fornavn";
$quiz_placeholder_lname = "Etternavn";
$quiz_placeholder_email = "E-postadresse";
$quiz_placeholder_phone = "Telefonnummer";
$quiz_btn_submit = "Aktiver Handel";
$quiz_text_typing       = "skriver en melding...";
$quiz_text_processing   = "Behandler forespørsel...";


$about_meta_title = "Om $site_name | AI-drevet Infrastruktur for Kryptohandel";
$about_meta_description = "Lær mer om $site_name, en avansert AI-drevet infrastruktur for kryptohandel med fokus på prediktiv analyse, markedsinntelligens, volatilitetsovervåking og forskning på digitale eiendeler.";

$contact_meta_title = "Kontakt $site_name | Be om tilgang til AI-handelsplattform";
$contact_meta_description = "Kontakt $site_name for å be om tilgang, spørre om AI-drevet infrastruktur for kryptohandel, støttede markeder, intelligens for digitale eiendeler, eller plattform-onboarding.";

$terms_meta_title = "Vilkår og Betingelser | $site_name Nettside- og Plattformvilkår";
$terms_meta_description = "Les $site_name sine vilkår og betingelser som dekker bruk av nettsiden, informasjonsinnhold, AI-handelsinfrastruktur, brukeransvar, tredjepartstjenester og ansvarsbegrensninger.";

$privacy_meta_title = "Personvernerklæring | $site_name Databeskyttelse og Brukerpersonvern";
$privacy_meta_description = "Les $site_name sin personvernerklæring for å forstå hvordan vi samler inn, bruker, beskytter, lagrer og håndterer personopplysninger sendt inn gjennom vår nettside for AI-kryptohandel.";

$cookies_meta_title = "Informasjonskapsler (Cookies) | $site_name Nettside-cookies og Sporing";
$cookies_meta_description = "Lær hvordan $site_name bruker informasjonskapsler, analyseteknologier, verktøy for ytelsessporing og tjenester for nettsidefunksjonalitet for å forbedre brukeropplevelsen og plattformens ytelse.";

$aml_meta_title = "AML-policy | $site_name Standarder mot Hvitvasking";
$aml_meta_description = "Gjennomgå $site_name sin AML-policy, inkludert ansvarlig bruk av digitale eiendeler, bevissthet rundt hvitvasking, forbudt aktivitet, overvåkingsprinsipper og forventninger til samsvar.";

$risk_meta_title = "Risikoerklæring | $site_name Erklæring om Risiko ved Kryptohandel";
$risk_meta_description = "Gjennomgå $site_name sin risikoerklæring for å forstå kryptovalutavolatilitet, handelsusikkerhet, begrensninger ved AI-signaler, markedsrisiko, likviditetsrisiko og brukeransvar.";

$exchanges_meta_title = "Støttede Børser | $site_name Markedsintelligensdekning";
$exchanges_meta_description = "Utforsk hvilke typer kryptovalutabørser, likviditetsarenaer og markeder for digitale eiendeler som overvåkes av $site_name sin AI-drevne markedsintelligensinfrastruktur.";


$about_breadcrumb_name = "Om $site_name";
$contact_breadcrumb_name = "Kontakt $site_name";
$terms_breadcrumb_name = "Vilkår og Betingelser";
$privacy_breadcrumb_name = "Personvernerklæring";
$cookies_breadcrumb_name = "Informasjonskapsler";
$aml_breadcrumb_name = "AML-policy";
$risk_breadcrumb_name = "Risikoerklæring";
$exchanges_breadcrumb_name = "Støttede Børser";

$hero_text = "Opplev en ny æra innen handel med vår avanserte plattform for kryptohandel. Med $site_name sin AI-teknologi kan du optimalisere avkastningen din og ta informerte investeringsbeslutninger.";


// HEADER / NAV / FOOTER
$logo_subtitle = "AI Handelsinfrastruktur";
$nav_signals = "Signaler";
$nav_reviews = "Anmeldelser";
$nav_about = "Om oss";
$nav_exchanges = "Børser";
$nav_exchanges_full = "Støttede Børser";
$nav_risk = "Risiko";
$nav_risk_full = "Risikoerklæring";
$nav_faq = "FAQ";
$nav_privacy = "Personvern";
$nav_terms = "Vilkår";
$nav_cookies = "Informasjonskapsler";
$nav_cookies_short = "Cookies";
$nav_aml = "AML-policy";
$nav_contact_us = "Kontakt Oss";
$nav_contact = "Kontakt";
$nav_get_started = "Kom i Gang";
$header_ai_status = "AI Kjerne Operativ";
$header_menu_aria = "Meny";
$footer_platform = "Plattform";
$footer_resources = "Ressurser";
$footer_contact_title = "Kontakt";
$footer_ai_signals = "AI-Signaler";
$footer_about_link = "Om $site_name";
$footer_description = "$site_name er en avansert AI-drevet infrastruktur for kryptohandel med fokus på prediktiv analyse, markedsintelligens på institusjonelt nivå, volatilitetsmodellering, nevrale utførelsessystemer og automatisert risikostyring.";
$footer_monitoring = "24/7 Overvåking av AI-infrastruktur";
$footer_global_markets = "Globale Markeder for Digitale Eiendeler";
$footer_disclaimer_title = "Risikoerklæring";
$footer_disclaimer_p1 = "Handel med kryptovaluta og investering i digitale eiendeler innebærer betydelig finansiell risiko og er kanskje ikke egnet for alle investorer. Markedsvolatilitet, likviditetsforstyrrelser, teknologiske feil, regulatoriske endringer og makroøkonomiske forhold kan påvirke ytelsen til eiendelene betydelig.";
$footer_disclaimer_p2 = "$site_name leverer AI-drevet analytisk infrastruktur, prediktiv markedsintelligens og automatiserte handelsteknologier. Ingenting på denne nettsiden utgjør finansiell, investerings-, juridisk eller skattemessig rådgivning.";
$footer_disclaimer_p3 = "Tidligere resultater er ingen garanti for fremtidig avkastning. Brukere bør selv vurdere risikoen før de engasjerer seg i kryptovalutamarkeder eller automatiserte handelssystemer.";
$footer_rights = "Med enerett.";
$footer_lang_label = "Språk";



// HOME FORM
$home_form_fname = "Fornavn";
$home_form_lname = "Etternavn";
$home_form_email = "E-post";
$home_form_submit_access = "Få Tilgang";
$home_form_submit_platform = "Be om Plattformtilgang";

// CONTACT FORM
$contact_form_fname = "Fornavn";
$contact_form_lname = "Etternavn";
$contact_form_email = "E-post";
$contact_form_submit = "Be om Tilgang";


// HOME LABELS
$home_label_ai_confidence = "AI-Sikkerhet";
$home_label_update_speed = "Oppdateringshastighet";
$home_label_market_mode = "Markedsmodus";
$home_label_market_condition = "Markedstilstand";
$home_label_buyer_activity = "Kjøperaktivitet";
$home_label_market_activity = "Markedsaktivitet";
$home_label_risk_level = "Risikonivå";
$home_label_updated = "Oppdatert";
$home_label_live_analysis = "LIVE ANALYSE";

// JS
$home_js_sec_ago = "sek siden";
$js_sec_ago = "sek siden";
$js_close_notification = "Lukk varsel";

$js_signal_long_direction = "Sannsynlighet for opptrend øker";
$js_signal_long_market = "Kontrollert Ekspansjon";
$js_signal_long_pressure_label = "Likviditetspress";
$js_signal_long_pressure = "Bullish";

$js_signal_short_direction = "Nedsidetrykk øker";
$js_signal_short_market = "Høy Ustabilitet";
$js_signal_short_pressure_label = "Risikopress";
$js_signal_short_pressure = "Bearish";

$js_signal_watch_direction = "Konsolideringssone oppdaget";
$js_signal_watch_market = "Nøytral Konsolidering";
$js_signal_watch_pressure_label = "Institusjonell Flyt";
$js_signal_watch_pressure = "Stabil";

$js_hero_long_pair = "BTC/USD Momentum Ekspansjon";
$js_hero_long_regime = "Bullish";
$js_hero_long_feed_1 = "BTC likviditetsekspansjon oppdaget";
$js_hero_long_feed_2 = "Ordreflyt press blir positiv";
$js_hero_long_feed_3 = "AI-modell bekrefter bullish fortsettelse";

$js_hero_watch_pair = "ETH/USD Volatilitetskompresjon";
$js_hero_watch_regime = "Nøytral";
$js_hero_watch_feed_1 = "ETH kompresjonssone oppdaget";
$js_hero_watch_feed_2 = "AI venter på sterkere bekreftelse";
$js_hero_watch_feed_3 = "Likviditet forblir stabil";

$js_hero_short_pair = "SOL/USD Risikoekspansjon";
$js_hero_short_regime = "Risk-Off";
$js_hero_short_feed_1 = "SOL nedsidetrykk oppdaget";
$js_hero_short_feed_2 = "Risikomodell flagger volatilitetsekspansjon";
$js_hero_short_feed_3 = "AI reduserer bullish eksponering";

// JS — live user popup actions
$js_live_action_1 = "ble med i $site_name fra";
$js_live_action_2 = "ba om plattformtilgang fra";
$js_live_action_3 = "startet AI-signalovervåking fra";
$js_live_action_4 = "aktiverte markedsanalyse fra";
$js_live_action_5 = "åpnet det institusjonelle dashbordet fra";
$js_live_action_6 = "koblet til $site_name fra";


// HOME PAGE
$home_hero_label = "AI Kryptoplattform For Alle Erfaringsnivåer";
$home_hero_title = "$site_name Plattform";
$home_hero_desc = "$site_name hjelper nybegynnere og erfarne tradere med å utforske kryptomarkeder med AI-drevet innsikt, markedsovervåking i sanntid, risikobevissthetsverktøy og guidet plattformstøtte.";
$home_hero_feat_1 = "Enkel AI-markedsinnsikt for nye brukere";
$home_hero_feat_2 = "Kryptoovervåking og signaloppdateringer i sanntid";
$home_hero_feat_3 = "Risikobevisste verktøy for smartere beslutninger";
$home_hero_feat_4 = "Avansert analyse for erfarne tradere";
$home_btn_request_access = "Få Plattformtilgang";
$home_btn_view_signals = "Se AI-Signaler";
$home_trust_data_label = "Markedsdatapunkter Analysert";
$home_trust_confidence_label = "Gjennomsnittlig Signalsikkerhet";
$home_trust_monitoring_label = "AI Markedsovervåking";
$home_terminal_title = "$site_name Guidet AI-Markedsvisning";
$home_terminal_insight_label = "Gjeldende AI Markedsinnsikt";
$home_terminal_feed_1 = "BTC markedsaktivitet viser sterkere momentum";
$home_terminal_feed_2 = "ETH bevegelse overvåkes for bekreftelse";
$home_terminal_feed_3 = "AI-assistent fremhever en mulig mulighetssone";
$home_trust_strip_1 = "AI Innsikt For Nybegynnere & Erfarne Tradere";
$home_trust_strip_2 = "24/7 Overvåking Av Kryptovalutamarkeder";
$home_trust_strip_3 = "Sanntids Risiko- & Mulighetsanalyse";
$home_trust_strip_4 = "Guidet Tilgang Til Avanserte Handelsverktøy";
$home_signals_eyebrow = "$site_name LIVE AI KJERNE";
$home_signals_title = "Sanntids AI Markeds-signaler For Smartere Kryptobeslutninger";
$home_signals_desc = "$site_name overvåker kontinuerlig kryptovalutamarkedsaktivitet, volatilitet, likviditetsforhold, sentimenttrender og blockchain-data for å generere AI-drevet innsikt og sanntids markeds-signaler for både nybegynnere og erfarne tradere.";
$home_signals_terminal_title = "$site_name AI Signalmotor";
$home_signal_btc_sub = "Positivt Momentum Oppdaget";
$home_signal_btc_dir = "Sannsynlighet for opptrend øker";
$home_signal_btc_market = "Positivt Momentum";
$home_signal_btc_activity = "Sterk";
$home_signal_eth_sub = "Venter På Markedsbekreftelse";
$home_signal_eth_dir = "Sidelengs bevegelse oppdaget";
$home_signal_eth_market = "Nøytral Trend";
$home_signal_eth_activity = "Stabil";
$home_signal_sol_sub = "Økt Markedsrisiko Oppdaget";
$home_signal_sol_dir = "Nedsidetrykk øker";
$home_signal_sol_market = "Høy Volatilitet";
$home_signal_sol_risk = "Forhøyet";
$home_why_eyebrow = "HVORFOR $site_name?";
$home_why_title = "AI-Drevne Kryptoverktøy Bygget For Alle Erfaringsnivåer";
$home_why_desc_1 = "$site_name hjelper brukere med å bedre forstå kryptovalutamarkeder gjennom kunstig intelligens, overvåking i sanntid, markedsinnsikt og risikobevissthetsverktøy. Enten du utforsker krypto for første gang eller allerede har handelserfaring, er plattformen designet for å gjøre markedsanalyse mer tilgjengelig og enklere å forstå.";
$home_why_desc_2 = "$site_name sin infrastruktur evaluerer kontinuerlig markedsaktivitet, prisbevegelser, likviditetsforhold, sentimenttrender og blockchain-data for å identifisere nye muligheter og endrede markedsforhold. Nye brukere kan dra nytte av guidet plattformstøtte, mens erfarne tradere kan utforske avanserte analyseverktøy og AI-drevet markedsintelligens.";
$home_flow_1 = "Markedsovervåking";
$home_flow_2 = "AI Analyse";
$home_flow_3 = "Mulighetsdeteksjon";
$home_flow_4 = "Risikoevaluering";
$home_flow_5 = "Handlingsrettet Innsikt";
$home_reviews_eyebrow = "$site_name FELLESSKAP";
$home_reviews_title = "Hva Brukere Sier Om $site_name";
$home_reviews_desc = "Fra førstegangs kryptobrukere til erfarne tradere, bruker folk $site_name for å bedre forstå markedsforhold, utforske AI-drevet innsikt, og nærme seg kryptovalutabeslutninger med mer klarhet.";
$home_review_1_text = "Før jeg oppdaget $site_name, følte jeg meg overveldet av mengden informasjon i kryptovalutaområdet. Hver plattform virket komplisert, og jeg var konstant bekymret for å gjøre feil. Det jeg setter mest pris på med $site_name er hvor tilgjengelig alt føles. AI-innsikten hjalp meg å forstå markedsforholdene uten å føle meg tapt, og plattformen ga meg selvtilliten til å begynne å lære i mitt eget tempo. Jeg er genuint takknemlig for hvor mye enklere opplevelsen ble sammenlignet med hva jeg forventet.";
$home_review_1_tag = "Trygg & Enkel Start";
$home_review_badge = "VERIFISERT BRUKER";
$home_review_2_text = "Jeg brukte måneder på å se på kryptoplattformer uten å noen gang føle meg komfortabel nok til å ta det første skrittet. $site_name endret den opplevelsen fullstendig. Plattformen gjorde markedsinformasjon lettere å forstå, og jeg følte aldri at jeg trengte mange års handelserfaring bare for å bruke verktøyene. Det som imponerte meg mest var balansen mellom enkelhet og kraftig AI-analyse. Det føles som å ha veiledning tilgjengelig når du trenger det. Jeg er takknemlig for at jeg fant en plattform som hjalp meg å lære uten å føle meg skremt.";
$home_review_2_tag = "Enklere læringsopplevelse";
$home_review_3_text = "Jeg har testet mange plattformer for markedsanalyse, og $site_name skiller seg ut fordi den balanserer tilgjengelighet med seriøs analytisk dybde. Nye brukere kan forstå plattformen raskt, mens erfarne tradere fremdeles får nyttige AI-drevne markeds-signaler, risikoovervåking og sanntids kryptointelligens. Den balansen er vanskelig å finne. Plattformen leverer meningsfull markedskontekst uten å overvelde brukerne, noe svært få kryptoverktøy klarer å oppnå.";
$home_review_3_tag = "Avanserte verktøy med enkel brukervennlighet";
$home_review_span_1 = "Ny Kryptobruker";
$home_review_span_2 = "Førstegangs Plattfombruker";
$home_review_span_3 = "Profesjonell Kryptotrader";
$home_review_1_avatar_alt = "Eirik Nilsen, $site_name bruker";
$home_review_2_avatar_alt = "Lars Johansen, $site_name bruker";
$home_review_3_avatar_alt = "Olav Thorsen, $site_name bruker";
$home_hero_visual_alt = "AI-drevet markedsanalyse dashbord på $site_name";
$home_signal_visual_alt = "Sanntids handelssignal generert av $site_name AI";
$home_device_visual_alt = "Kryptoanalyse vist på en tilkoblet enhet via $site_name";
$home_security_visual_alt = "Sikkerhetsskjold som representerer $site_name kontobeskyttelse";
$home_contact_eyebrow = "KOM I GANG MED $site_name";
$home_contact_title = "Utforsk Plattformen Med Selvtillit";
$home_contact_desc_1 = "Enten du er helt ny innen kryptovalutamarkeder eller allerede har handelserfaring, gir $site_name tilgang til AI-drevet markedsinnsikt, sanntids overvåkingsverktøy og intelligente analyser designet for å hjelpe brukere med å bedre forstå muligheter innen digitale eiendeler.";
$home_contact_desc_2 = "Send inn detaljene dine for å lære mer om plattformen, utforske tilgjengelige funksjoner og oppdage hvordan $site_name kan hjelpe deg med å navigere i kryptovalutamarkeder gjennom avansert teknologi og guidet plattformstøtte.";
$home_seo_toggle = "Lær Mer Om $site_name AI Plattformen";
$home_seo_h2 = "$site_name AI Plattform For Smartere Beslutninger i Kryptomarkedet";
$home_seo_p1 = "$site_name er en AI-drevet kryptovalutaplattform designet for både nybegynnere og erfarne tradere. Plattformen kombinerer kunstig intelligens, markedsovervåking i sanntid og avanserte analyseverktøy for å hjelpe brukere med å bedre forstå markeder for digitale eiendeler og identifisere potensielle muligheter.";
$home_seo_p2 = "I motsetning til mange tradisjonelle handelsplattformer som krever omfattende markedskunnskap, er $site_name bygget for å gjøre kompleks markedsinformasjon lettere å forstå. Plattformen analyserer kontinuerlig kryptoaktivitet, prisbevegelser, sentimenttrender, likviditetsforhold og blockchain-data, og forvandler store mengder informasjon til praktisk innsikt.";
$home_seo_p3 = "Enten du utforsker kryptovalutamarkeder for første gang eller allerede har erfaring med å handle digitale eiendeler, tilbyr $site_name intelligente verktøy designet for å støtte mer informerte beslutninger mens den tilpasser seg endrede markedsforhold i sanntid.";
$home_seo_h3_1 = "AI Markedsanalyse Gjort Tilgjengelig";
$home_seo_h3_1_p1 = "$site_name bruker kunstig intelligens for å evaluere et bredt spekter av markedsindikatorer, inkludert handelsaktivitet, volatilitetsmønstre, likviditetsforhold, blockchain-hendelser og markedssentiment. Ved å behandle informasjon kontinuerlig, hjelper plattformen brukere med å få en klarere forståelse av gjeldende markedsatferd.";
$home_seo_h3_1_p2 = "AI-modellene er designet for å tilpasse seg endrede miljøer i stedet for å stole på statiske antagelser. Dette gjør at plattformen kan reagere dynamisk på utviklende kryptotrender og nye markedsmuligheter.";
$home_seo_h3_1_p3 = "Selv om den er avansert nok for erfarne tradere, er plattformen også strukturert for å forbli tilgjengelig for nye brukere som ønsker tilgang til AI-drevet markedsintelligens uten å kreve dyp teknisk ekspertise.";
$home_seo_h3_2 = "Sanntids AI Markeds-signaler";
$home_seo_h3_2_p1 = "$site_name overvåker kontinuerlig kryptovalutamarkeder og genererer AI-drevet innsikt basert på endret markedsaktivitet. Plattformen evaluerer momentum, volatilitet, likviditetsforhold og bredere markedsatferd for å gi analytiske signaler i sanntid.";
$home_seo_h3_2_p2 = "Bitcoin, Ethereum, Solana, XRP, Avalanche og andre store digitale eiendeler overvåkes gjennom adaptive analytiske modeller som automatisk justerer seg til endrede markedsforhold.";
$home_seo_h3_2_p3 = "I stedet for å stole på en enkelt indikator eller et isolert mål, kombinerer $site_name flere informasjonskilder i et bredere analytisk rammeverk designet for å gi et mer komplett syn på markedsforholdene.";
$home_seo_h3_3 = "Intelligente Risikobevissthetsverktøy";
$home_seo_h3_3_p1 = "Kryptovalutamarkeder kan endre seg raskt. $site_name inkluderer AI-drevne overvåkingssystemer designet for å identifisere uvanlig volatilitet, endrede likviditetsforhold og nye markedsrisikoer.";
$home_seo_h3_3_p2 = "Plattformen evaluerer kontinuerlig markedsatferd og potensielle risikofaktorer, og hjelper brukere med å bedre forstå endrede forhold og ta mer informerte beslutninger.";
$home_seo_h3_3_p3 = "Ved å kombinere flere lag med analyse, søker $site_name å forbedre markedsbevisstheten og hjelpe brukere med å navigere i perioder med økt usikkerhet med større tillit.";
$home_seo_h3_4 = "Designet For Moderne Kryptovalutamarkeder";
$home_seo_h3_4_p1 = "$site_name kombinerer kunstig intelligens, overvåkingsteknologier i sanntid og avanserte analyseverktøy i en enkelt plattform designet for moderne markeder for digitale eiendeler.";
$home_seo_h3_4_p2 = "Infrastrukturen evaluerer kontinuerlig markedsaktivitet, blockchain-utvikling, sentimentendringer og likviditetstrender for å gi et omfattende syn på kryptovalutamarkedsatferd.";
$home_seo_h3_4_p3 = "Ettersom markeder for digitale eiendeler fortsetter å utvikle seg, kan AI-drevne verktøy hjelpe brukere med å behandle informasjon mer effektivt og bedre forstå stadig mer komplekse markedsmiljøer. $site_name er designet for å gjøre disse egenskapene tilgjengelige for et bredere spekter av markedsdeltakere.";
$home_seo_side_1_label = "AI Innsikt";
$home_seo_side_1_title = "Enkel-Å-Forstå Markedsanalyse";
$home_seo_side_1_desc = "AI-drevet innsikt designet for både nye og erfarne kryptovalutabrukere.";
$home_seo_side_2_label = "Markedsovervåking";
$home_seo_side_2_title = "Sanntids Krypto-sporing";
$home_seo_side_2_desc = "Kontinuerlig overvåking av store kryptovalutamarkeder og endrede markedsforhold.";
$home_seo_side_3_label = "Risikobevissthet";
$home_seo_side_3_title = "Intelligent Risikodeteksjon";
$home_seo_side_3_desc = "Avanserte overvåkingsverktøy designet for å fremheve endret markedsdynamikk og volatilitet.";
$home_seo_side_4_label = "AI Teknologi";
$home_seo_side_4_title = "Adaptive Analytiske Modeller";
$home_seo_side_4_desc = "Maskinlæringssystemer som kontinuerlig evaluerer markedsdata og nye trender.";
$home_faq_eyebrow = "$site_name KUNNSKAPSBASE";
$home_faq_title = "Ofte Stilte Spørsmål Om $site_name";
$home_faq_desc = "Lær mer om hvordan plattformen fungerer, hvem den er designet for, og hvordan kunstig intelligens hjelper brukere med å bedre forstå kryptovalutamarkedsforhold.";
$home_faq_q1 = "Trenger jeg handelserfaring for å bruke $site_name?";
$home_faq_a1 = "Nei. $site_name er designet for brukere med ulike erfaringsnivåer, inkludert personer som er helt nye innen kryptovalutamarkeder. Plattformen bruker AI-drevet innsikt og markedsovervåkingsverktøy for å gjøre kompleks informasjon lettere å forstå.";
$home_faq_q2 = "Hva gjør egentlig $site_name?";
$home_faq_a2 = "$site_name analyserer kontinuerlig kryptovalutamarkeder ved hjelp av kunstig intelligens. Plattformen evaluerer markedsaktivitet, volatilitet, sentimenttrender, likviditetsforhold og blockchain-data for å generere sanntidsinnsikt og analytiske signaler.";
$home_faq_q3 = "Kan erfarne tradere bruke $site_name?";
$home_faq_a3 = "Ja. Selv om plattformen er nybegynnervennlig, tilbyr den også avanserte analyseverktøy, AI-drevet markedsintelligens og sanntids overvåkingsfunksjoner som kan være verdifulle for erfarne markedsdeltakere.";
$home_faq_q4 = "Hvilke kryptovalutaer overvåker $site_name?";
$home_faq_a4 = "Plattformen kan analysere store digitale eiendeler som Bitcoin, Ethereum, Solana, XRP, Avalanche og andre mye handlede kryptovalutaer avhengig av markedsforhold og tilgjengelige datakilder.";
$home_faq_q5 = "Hvordan genereres AI-signaler?";
$home_faq_a5 = "$site_name evaluerer flere markedsfaktorer samtidig, inkludert volatilitet, handelsaktivitet, likviditetsforhold, sentimenttrender og historisk markedsatferd. AI-modeller kombinerer disse inndataene for å identifisere endrede markedsforhold og potensielle muligheter.";
$home_faq_q6 = "Tilbyr $site_name pedagogisk veiledning?";
$home_faq_a6 = "Plattformen er designet for å hjelpe brukere med å bedre forstå markedsforhold gjennom AI-drevet analyse, forenklet innsikt og guidet tilgang til plattformfunksjoner. Nye brukere kan utforske kryptovalutamarkeder uten å trenge avansert teknisk kunnskap.";
$home_cta_label = "AI Plattform Klar";
$home_cta_title = "Begynn Å Utforske $site_name i Dag";
$home_cta_desc = "Oppdag AI-drevet markedsinnsikt, sanntids overvåking av kryptovaluta, intelligente risikobevissthetsverktøy og avansert analyse designet for både nybegynnere og erfarne tradere.";
$home_ticker_text = "AI Markedsovervåking Aktiv • Sanntids Kryptovalutaanalyse • Bitcoin Momentum Styrkes • Ethereum Konsolidering Oppdaget • Nye Markedsmuligheter Identifisert • Risikoovervåkingssystemer Online • AI Innsikt Oppdateres Kontinuerlig • Designet For Nybegynnere & Erfarne Tradere";





// ABOUT PAGE
$about_h1 = "Om $site_name";
$about_p1 = "$site_name er en neste generasjons infrastruktur for kunstig intelligens designet for å hjelpe markedsdeltakere med å bedre forstå det raskt utviklende kryptovalutaøkosystemet. Ved å kombinere maskinlæringsteknologier, prediktiv analyse, systemer for markedsintelligens og sanntids databehandling, gir $site_name et omfattende miljø for å overvåke digital eiendelsaktivitet og identifisere meningsfull markedsutvikling.";
$about_p2 = "Kryptovalutamarkedet opererer kontinuerlig på tvers av flere børser, jurisdiksjoner og likviditetsleverandører. Hvert sekund påvirker tusenvis av variabler prising, volatilitet, likviditetsforhold og investorsentiment. $site_name ble utviklet med mål om å behandle disse komplekse datastrømmene på en strukturert og skalerbar måte.";
$about_h2_vision = "Visjonen Bak $site_name";
$about_p_vision_1 = "Finansmarkedene har blitt stadig mer datadrevne. Tradisjonelle analysemetoder sliter ofte med å holde tritt med mengden informasjon som genereres på tvers av moderne økosystemer for digitale eiendeler. $site_name søker å bygge bro over dette gapet gjennom bruk av avansert beregningsmessig intelligens, automatiserte overvåkingssystemer og adaptive analytiske modeller.";
$about_p_vision_2 = "Den langsiktige visjonen til $site_name er å tilby transparente verktøy for markedsintelligens som er i stand til å hjelpe brukere med å bedre forstå kryptovalutamarkedsstruktur, risikoforhold og nye trender.";
$about_h2_ai = "Infrastruktur For Kunstig Intelligens";
$about_p_ai_1 = "I kjernen av $site_name er et flerlags rammeverk for kunstig intelligens designet for å behandle informasjon fra en rekke markedskilder samtidig.";
$about_p_ai_2 = "Disse kildene kan inkludere:";
$about_li_1 = "Prisfeeds for kryptovaluta";
$about_li_2 = "Ordrebokaktivitet";
$about_li_3 = "Data om likviditetsbevegelse";
$about_li_4 = "Volatilitetsindikatorer";
$about_li_5 = "Transaksjonsberegninger for blockchain";
$about_li_6 = "Markedssentimentsignaler";
$about_li_7 = "Makroøkonomisk utvikling";
$about_li_8 = "Institusjonell markedsaktivitet";
$about_p_ai_3 = "Ved å kontinuerlig evaluere relasjoner mellom disse variablene, forsøker $site_name å identifisere mønstre som kan gi verdifull markedskontekst.";
$about_h2_risk = "Filosofi For Risikobevissthet";
$about_p_risk_1 = "Ansvarlig deltakelse i kryptovalutamarkeder krever en klar forståelse av risiko. $site_name understreker risikobevissthet som en grunnleggende komponent i analysen av digitale eiendeler.";
$about_p_risk_2 = "Markedsvolatilitet, likviditetssvingninger, børsspesifikke hendelser, regulatorisk utvikling og bredere makroøkonomiske forhold kan alle påvirke markedsutfall. Som et resultat bør brukere aldri utelukkende stole på noen enkelt informasjonskilde når de tar beslutninger.";
$about_h2_global = "Globale Markeder For Digitale Eiendeler";
$about_p_global_1 = "Kryptovalutamarkeder opererer på en global skala og involverer deltakere fra ulike regioner, bransjer og økonomiske miljøer. Infrastrukturen til $site_name er designet for å overvåke flere markedssegmenter samtidig, slik at brukere kan observere utviklingen som skjer på tvers av ulike deler av økosystemet for digitale eiendeler.";
$about_p_global_2 = "Dette bredere perspektivet kan bidra til å forbedre bevisstheten om endrede markedsforhold og nye trender.";
$about_h2_why = "Hvorfor Brukere Utforsker $site_name";
$about_why_li_1 = "Avansert AI-drevet markedsintelligens";
$about_why_li_2 = "Sanntids kryptoovervåking";
$about_why_li_3 = "Analytisk infrastruktur i institusjonell stil";
$about_why_li_4 = "Flerfaktor markedsevaluering";
$about_why_li_5 = "Volatilitets- og likviditetsovervåking";
$about_why_li_6 = "Skalerbare forskningsverktøy for digitale eiendeler";
$about_why_li_7 = "Risikobevisst analytisk metodikk";
$about_h2_forward = "Ser Fremover";
$about_p_forward_1 = "Ettersom markeder for digitale eiendeler fortsetter å modnes, forventes viktigheten av avansert analytisk infrastruktur å øke. $site_name forblir fokusert på å utvikle teknologier som støtter dypere markedsforståelse, større åpenhet og mer informert deltakelse i kryptovalutaøkosystemet.";
$about_p_forward_2 = "Gjennom kontinuerlig innovasjon og pågående forskning, har $site_name som mål å bidra til en mer intelligent og datadrevet fremtid for analyse av digitale eiendeler.";


// CONTACT PAGE
$contact_h1 = "Kontakt $site_name";
$contact_intro_1 = "Kontakt $site_name-teamet for å be om plattformtilgang, spørre om AI-drevet infrastruktur for kryptohandel, eller lære mer om vårt miljø for markedsintelligens for digitale eiendeler.";
$contact_intro_2 = "Enten du utforsker automatisert kryptoanalyse, institusjonell signalinfrastruktur, volatilitetsovervåking eller flerbørs markedsintelligens, kan teamet vårt hjelpe deg med å rette forespørselen din til riktig avdeling.";
$contact_h2_help = "Hvordan Vi Kan Hjelpe";
$contact_li_1 = "Forespørsler om plattformtilgang";
$contact_li_2 = "Generelle produktspørsmål";
$contact_li_3 = "Informasjon om AI handelsinfrastruktur";
$contact_li_4 = "Forespørsler om markedsintelligens for digitale eiendeler";
$contact_li_5 = "Spørsmål om risikoerklæring og samsvar";
$contact_li_6 = "Teknisk eller onboarding assistanse";
$contact_h2_send = "Send En Forespørsel";
$contact_p_send = "Fyll ut skjemaet nedenfor, og en representant fra $site_name vil kanskje kontakte deg med ytterligere informasjon.";
$contact_h2_info = "Kontaktinformasjon";
$contact_support_label = "Generell support:";
$contact_institutional_label = "Institusjonelle henvendelser:";
$contact_disclaimer = "Vennligst merk at $site_name ikke gir personlig finansiell, investerings-, skatte- eller juridisk rådgivning. All informasjon er kun gitt for teknologi- og informasjonsformål.";

// TERMS PAGE
$terms_h1 = "Vilkår og Betingelser";
$terms_intro_1 = "Disse Vilkår og Betingelser styrer tilgang til og bruk av $site_name sin nettside, innhold, plattformbeskrivelser, skjemaer, kommunikasjon og relaterte informasjonsmaterialer.";
$terms_intro_2 = "Ved å gå inn på denne nettsiden, erkjenner brukere at de har lest, forstått og godtar disse Vilkår og Betingelser. Hvis en bruker ikke godtar disse vilkårene, bør de slutte å bruke nettsiden.";
$terms_h2_informational = "Informasjonsformål";
$terms_p_info_1 = "$site_name gir informasjon om AI-drevet infrastruktur for kryptohandel, markedsintelligens for digitale eiendeler, volatilitetsovervåking, likviditetsanalyse og relaterte teknologier.";
$terms_p_info_2 = "Nettsidens innhold er kun gitt for generelle informasjons- og teknologipresentasjonsformål. Ingenting på denne nettsiden skal tolkes som finansiell rådgivning, investeringsrådgivning, juridisk rådgivning, skatterådgivning, eller en garanti for handelsresultater.";
$terms_h2_no_advice = "Ingen Finansiell Rådgivning";
$terms_p_no_advice_1 = "$site_name gir ikke personlige anbefalinger om hvorvidt brukere bør kjøpe, selge, holde, handle, stake, overføre, eller på annen måte samhandle med noen kryptovaluta, token, finansielt produkt, eller digital eiendel.";
$terms_p_no_advice_2 = "Brukere bør uavhengig evaluere all informasjon og søke råd fra kvalifiserte fagfolk før de tar økonomiske beslutninger.";
$terms_h2_user_responsibility = "Brukeransvar";
$terms_p_user_1 = "Brukere er ansvarlige for sine egne beslutninger, risikovurderinger, kontoaktivitet, handelshandlinger, lovmessig overholdelse, og bruk av tredjepartstjenester.";
$terms_p_user_2 = "Brukere bør sikre at aktivitet med digitale eiendeler er tillatt i deres jurisdiksjon og at de forstår alle gjeldende risikoer før de samhandler med kryptomarkeder.";
$terms_h2_ai = "AI og Analytiske Systemer";
$terms_p_ai_1 = "$site_name kan beskrive kunstig intelligens systemer, prediktive modeller, markeds-signaler, automatiserte analyser, eller utførelsesrelaterte teknologier.";
$terms_p_ai_2 = "Disse systemene kan stole på markedsdata, statistiske modeller, maskinlæringsprosesser og tredjeparts informasjonskilder. Slike systemer kan være unøyaktige, forsinkede, ufullstendige, utilgjengelige, eller uegnet for spesifikke brukermål.";
$terms_h2_availability = "Ingen Garanti For Tilgjengelighet";
$terms_p_avail_1 = "$site_name garanterer ikke uavbrutt nettsidetilgang, kontinuerlig plattformtilgjengelighet, feilfri drift, nøyaktig markedsinformasjon, eller tilgjengelighet av noen spesifikk funksjon.";
$terms_p_avail_2 = "Tjenester, innhold, sider, skjemaer, integrasjoner, eller plattformbeskrivelser kan endres, suspenderes, eller avvikles når som helst.";
$terms_h2_third_party = "Tredjepartstjenester";
$terms_p_tp_1 = "Nettsiden kan referere til tredjeparts børser, likviditetssteder, analyseleverandører, kommunikasjonsverktøy, hosting-tjenester, eller leverandører av teknisk infrastruktur.";
$terms_p_tp_2 = "$site_name kontrollerer ikke tredjepartsplattformer og er ikke ansvarlig for deres tilgjengelighet, gebyrer, retningslinjer, kontobegrensninger, samsvarsprosedyrer, tekniske feil, eller brukertap.";
$terms_h2_prohibited = "Forbudt Bruk";
$terms_p_prohibited = "Brukere må ikke bruke denne nettsiden eller noen relatert teknologi for ulovlige, støtende, uredelige, manipulerende, eller skadelige formål.";
$terms_li_1 = "Forsøk på uautorisert tilgang";
$terms_li_2 = "Sende inn falsk eller villedende informasjon";
$terms_li_3 = "Bruk av nettsiden for ulovlig finansiell aktivitet";
$terms_li_4 = "Forstyrre nettsidens sikkerhet eller funksjonalitet";
$terms_li_5 = "Kopiere eller misbruke nettsidens innhold uten tillatelse";
$terms_li_6 = "Forsøk på å omgå samsvars- eller tekniske kontroller";
$terms_h2_ip = "Åndsverk";
$terms_p_ip_1 = "Nettsidedesign, tekst, merkevarebygging, grensesnittelementer, grafikk, struktur, og relaterte materialer eies av eller er lisensiert til $site_name med mindre annet er oppgitt.";
$terms_p_ip_2 = "Brukere kan ikke reprodusere, distribuere, modifisere, eller kommersielt utnytte nettsidematerialer uten riktig autorisasjon.";
$terms_h2_liability = "Ansvarsbegrensning";
$terms_p_liab_1 = "I den maksimale utstrekning tillatt av gjeldende lov, skal $site_name ikke være ansvarlig for tap som oppstår fra handel med digitale eiendeler, markedsvolatilitet, tekniske problemer, feil på tredjepartsplattformer, unøyaktige data, brukerbeslutninger, eller avhengighet av nettsidens innhold.";
$terms_p_liab_2 = "Brukere får tilgang til og bruker denne nettsiden på egen risiko.";
$terms_h2_changes = "Endringer I Disse Vilkårene";
$terms_p_changes_1 = "$site_name kan oppdatere disse Vilkår og Betingelser når som helst. Oppdaterte vilkår kan legges ut på denne siden.";
$terms_p_changes_2 = "Fortsatt bruk av nettsiden etter endringer betyr at brukere anerkjenner og godtar de oppdaterte vilkårene.";

// PRIVACY PAGE
$privacy_h1 = "Personvernerklæring";
$privacy_intro_1 = "$site_name respekterer brukernes personvern og er forpliktet til å håndtere personopplysninger på en ansvarlig, transparent og sikker måte.";
$privacy_intro_2 = "Denne Personvernerklæringen forklarer hvilken informasjon som kan samles inn når brukere besøker denne nettsiden, sender inn kontaktskjemaer, ber om tilgang, eller samhandler med $site_name-innhold og plattformrelatert kommunikasjon.";
$privacy_h2_collect = "Informasjon Vi Kan Samle Inn";
$privacy_p_collect_1 = "$site_name kan samle inn informasjon frivillig sendt inn av brukere gjennom nettsideskjemaer eller kommunikasjonskanaler.";
$privacy_li_fname = "Fornavn";
$privacy_li_lname = "Etternavn";
$privacy_li_email = "E-postadresse";
$privacy_li_phone = "Telefonnummer";
$privacy_li_inquiry = "Innsendte forespørselsdetaljer";
$privacy_li_technical = "Grunnleggende tekniske bruksdata for nettsiden";
$privacy_h2_use = "Hvordan Vi Bruker Informasjon";
$privacy_p_use_1 = "Informasjon kan brukes til å svare på brukerforespørsler, gi informasjon om plattformtilgang, forbedre nettsidens funksjonalitet, opprettholde sikkerhet, og kommunisere relevante oppdateringer om $site_name.";
$privacy_p_use_2 = "Vi kan også bruke aggregerte eller ikke-identifiserende data for å analysere nettsidens ytelse, forbedre innholdsstrukturen, og bedre forstå hvordan besøkende samhandler med sidene våre.";
$privacy_h2_comm = "Kommunikasjonsformål";
$privacy_p_comm_1 = "Hvis en bruker sender inn kontaktinformasjon, kan $site_name bruke den informasjonen for å svare på henvendelsen, gi onboarding-detaljer, avklare forespørsler om plattformtilgang, eller dele relevant tjenesteinformasjon.";
$privacy_p_comm_2 = "Brukere kan be om at kommunikasjon avbrytes der det er aktuelt.";
$privacy_h2_cookies = "Informasjonskapsler (Cookies) Og Tekniske Data";
$privacy_p_cookies_1 = "Denne nettsiden kan bruke informasjonskapsler, analyseverktøy, og lignende teknologier for å forbedre nettleseropplevelsen, overvåke ytelse, og støtte nettsidesikkerhet.";
$privacy_p_cookies_2 = "Tekniske data kan inkludere enhetstype, nettlesertype, operativsystem, sideinteraksjoner, henvisningsinformasjon, og generell bruksstatistikk.";
$privacy_h2_protection = "Databeskyttelsestiltak";
$privacy_p_prot_1 = "$site_name bruker rimelige administrative, tekniske og organisatoriske sikkerhetstiltak for å beskytte innsendt informasjon mot uautorisert tilgang, misbruk, tap, eller utlevering.";
$privacy_p_prot_2 = "Imidlertid kan ingen online systemer garantere absolutt sikkerhet. Brukere bør unngå å sende inn sensitiv finansiell informasjon, private lommeboknøkler, passord, børslegitimasjon, eller konfidensielle kontotilgangsdetaljer gjennom offentlige nettsideskjemaer.";
$privacy_h2_third = "Tredjeparts Tjenesteleverandører";
$privacy_p_third_1 = "$site_name kan bruke tredjepartsleverandører for hosting, analyse, kommunikasjon, sikkerhet, e-postlevering, CRM-behandling, eller teknisk infrastruktur.";
$privacy_p_third_2 = "Disse leverandørene kan behandle begrenset informasjon bare der det er nødvendig for å støtte nettsidens funksjonalitet og relaterte tjenester.";
$privacy_google_choices = 'Du kan administrere hvordan Google bruker informasjon fra besøkene dine gjennom <a href="http://www.google.com/settings/ads" target="_blank" rel="noopener">Google Ads Settings</a>, velge bort interessebasert annonsering ved å bruke <a href="https://tools.google.com/dlpage/gaoptout" target="_blank" rel="noopener">Google Analytics Opt-out Browser Add-on</a>, eller gå gjennom <a href="https://www.google.com/intl/no/policies/privacy/" target="_blank" rel="noopener">Googles Personvernerklæring</a> for flere detaljer.';
$privacy_h2_sale = "Ingen Salg Av Personopplysninger";
$privacy_p_sale_1 = "$site_name har ikke til hensikt å selge personopplysninger sendt inn gjennom denne nettsiden.";
$privacy_p_sale_2 = "Informasjon kan deles bare når det er nødvendig for operasjonelle formål, lovmessig overholdelse, brukerkommunikasjon, svindelforebygging, eller tjenesterelatert behandling.";
$privacy_h2_retention = "Datalagring";
$privacy_p_retention = "Personopplysninger kan lagres så lenge som nødvendig for å svare på henvendelser, vedlikeholde forretningsregistre, overholde juridiske forpliktelser, forbedre plattformkommunikasjon, eller støtte sikkerhet og svindelforebygging.";
$privacy_h2_rights = "Brukerrettigheter";
$privacy_p_rights = "Avhengig av gjeldende lov, kan brukere ha rettigheter knyttet til innsyn, retting, sletting, innvending, begrensning, eller portabilitet av personopplysninger.";
$privacy_h2_intl = "Internasjonal Bruk";
$privacy_p_intl_1 = "$site_name kan besøkes av brukere fra forskjellige jurisdiksjoner. Personvernregler kan variere avhengig av sted.";
$privacy_p_intl_2 = "Ved å bruke denne nettsiden anerkjenner brukere at informasjon kan behandles i samsvar med denne Personvernerklæringen og gjeldende operasjonelle krav.";
$privacy_h2_policy_updates = "Oppdateringer Av Erklæringen";
$privacy_p_updates_1 = "$site_name kan oppdatere denne Personvernerklæringen med jevne mellomrom for å reflektere endringer i lov, teknologi, interne prosedyrer, eller nettsidefunksjonalitet.";
$privacy_p_updates_2 = "Fortsatt bruk av nettsiden etter oppdateringer betyr at brukere anerkjenner den reviderte Personvernerklæringen.";

// COOKIES PAGE
$cookies_h1 = "Informasjonskapsler (Cookie Policy)";
$cookies_intro_1 = "Denne Cookie Policy forklarer hvordan $site_name bruker informasjonskapsler, analyseteknologier og lignende sporingsverktøy når brukere besøker eller samhandler med denne nettsiden.";
$cookies_intro_2 = "Informasjonskapsler bidrar til å forbedre nettsidens funksjonalitet, forbedre brukeropplevelsen, analysere ytelse og støtte sikkerhetsrelaterte prosesser.";
$cookies_intro_3 = "Ved å fortsette å bruke denne nettsiden, anerkjenner brukere at visse informasjonskapsler og relaterte teknologier kan bli brukt i samsvar med denne policyen.";
$cookies_h2_what = "Hva Er Informasjonskapsler?";
$cookies_p_what_1 = "Informasjonskapsler er små tekstfiler som lagres på brukerens enhet ved besøk på en nettside.";
$cookies_p_what_2 = "Disse filene kan inneholde informasjon som hjelper nettsider å gjenkjenne returnerende besøkende, huske preferanser, forbedre navigasjon og måle nettsidens ytelse.";
$cookies_h2_why = "Hvorfor Vi Bruker Informasjonskapsler";
$cookies_p_why_1 = "$site_name kan bruke informasjonskapsler og lignende teknologier til flere formål.";
$cookies_li_1 = "Opprettholde nettsidens funksjonalitet";
$cookies_li_2 = "Forbedre brukeropplevelsen";
$cookies_li_3 = "Huske brukerpreferanser";
$cookies_li_4 = "Forstå besøkendes atferd";
$cookies_li_5 = "Måle nettsidens ytelse";
$cookies_li_6 = "Identifisere tekniske problemer";
$cookies_li_7 = "Støtte nettsidesikkerhet";
$cookies_li_8 = "Forhindre misbruk";
$cookies_h2_essential = "Nødvendige Informasjonskapsler";
$cookies_p_ess_1 = "Visse informasjonskapsler er nødvendige for at nettsiden skal fungere skikkelig.";
$cookies_p_ess_2 = "Disse informasjonskapslene hjelper til med å opprettholde sikkerhet, navigasjonsfunksjonalitet, økthåndtering, og andre kjerneoperasjoner på nettsiden.";
$cookies_p_ess_3 = "Uten nødvendige informasjonskapsler kan det hende at deler av nettsiden ikke fungerer som den skal.";
$cookies_h2_analytics = "Analyseinformasjonskapsler";
$cookies_p_an_1 = "Analyseinformasjonskapsler hjelper oss med å forstå hvordan besøkende samhandler med innholdet på nettsiden.";
$cookies_p_an_2 = "Disse teknologiene kan samle informasjon om sidebesøk, navigasjonsmønstre, enhetstyper, nettleserkonfigurasjoner og generelle bruksmålinger.";
$cookies_p_an_3 = "Analyseinformasjon er vanligvis aggregert og brukes til å forbedre nettsidens ytelse og brukeropplevelse.";
$cookies_h2_functional = "Funksjonelle Informasjonskapsler";
$cookies_p_fun_1 = "Funksjonelle informasjonskapsler kan brukes for å huske innstillinger og preferanser valgt av brukere.";
$cookies_p_fun_2 = "Eksempler kan inkludere språkpreferanser, grensesnittinnstillinger, visningsalternativer eller andre tilpasningsfunksjoner.";
$cookies_h2_third = "Tredjepartsteknologier";
$cookies_p_third_1 = "$site_name kan benytte tredjeparts tjenesteleverandører, analyseplattformer, annonseringsteknologier eller verktøy for ytelsesovervåking.";
$cookies_p_third_2 = "Disse tredjepartene kan plassere sine egne informasjonskapsler eller sporingsteknologier underlagt sine individuelle personvernerklæringer.";
$cookies_p_third_3 = "$site_name kontrollerer ikke tredjeparts praksis for informasjonskapsler og anbefaler å gjennomgå personverndokumentasjonen til eksterne leverandører der det er aktuelt.";
$cookies_h2_manage = "Administrere Informasjonskapsler";
$cookies_p_manage_1 = "De fleste moderne nettlesere lar brukere administrere, begrense, eller slette informasjonskapsler gjennom nettleserinnstillingene.";
$cookies_p_manage_2 = "Brukere kan velge å deaktivere informasjonskapsler helt, selv om visse nettsidefunksjoner kanskje ikke fungerer etter hensikten etter å ha gjort det.";
$cookies_p_manage_3 = "Nettleserinnstillinger gir vanligvis muligheter til å:";
$cookies_li_manage_1 = "Blokkere alle informasjonskapsler";
$cookies_li_manage_2 = "Slette eksisterende informasjonskapsler";
$cookies_li_manage_3 = "Motta varsler om informasjonskapsler";
$cookies_li_manage_4 = "Begrense spesifikke kategorier for informasjonskapsler";
$cookies_h2_data = "Databeskyttelse";
$cookies_p_data = "Informasjonskapsel-relatert informasjon kan behandles i samsvar med vår Personvernerklæring og gjeldende databeskyttelseslover.";
$cookies_h2_policy_updates = "Oppdateringer Av Policy";
$cookies_p_updates_1 = "$site_name kan oppdatere denne Cookie Policy med jevne mellomrom for å reflektere teknologiske endringer, lovkrav, eller operasjonelle forbedringer.";
$cookies_p_updates_2 = "Fortsatt bruk av nettsiden etter oppdateringer utgjør anerkjennelse av den reviderte policyen.";

// AML PAGE
$aml_h1 = "AML Policy";
$aml_intro_1 = "$site_name anerkjenner viktigheten av bevissthet rundt hvitvasking (Anti-Money Laundering), finansiell integritet, og ansvarlig deltakelse i markeder for digitale eiendeler.";
$aml_intro_2 = "Denne AML Policy forklarer de generelle prinsippene $site_name anvender for å motvirke ulovlig bruk av krypto-relaterte teknologier, mistenkelig finansiell aktivitet, svindel, unndragelse av sanksjoner, finansiering av terrorisme, og annen forbudt oppførsel.";
$aml_h2_purpose = "Hensikten Med Denne Policyen";
$aml_p_purpose_1 = "Hensikten med denne policyen er å etablere et ansvarlig rammeverk for hvordan $site_name tilnærmer seg bevissthet rundt hvitvasking innenfor økosystemet for digitale eiendeler.";
$aml_p_purpose_2 = "Kryptovalutamarkeder kan involvere grenseoverskridende aktivitet, desentralisert infrastruktur, tredjepartsbørser, og eksterne lommeboksystemer. På grunn av dette bør brukere forstå at forpliktelser til samsvar kan variere avhengig av deres jurisdiksjon, kontotype, børsleverandør, og lokale regulatoriske miljø.";
$aml_h2_responsible = "Ansvarlig Bruk Av Teknologi For Digitale Eiendeler";
$aml_p_resp_1 = "Det forventes at brukere samhandler med $site_name og eventuelle relaterte digitale eiendelstjenester ansvarlig, lovlig, og i samsvar med gjeldende regler.";
$aml_p_resp_2 = "$site_name støtter eller oppfordrer ikke til bruk av kryptomarkeder, handelssystemer, automatiserte teknologier, eller analytiske verktøy for ulovlige formål.";
$aml_li_1 = "Hvitvasking av penger";
$aml_li_2 = "Finansiering av terrorisme";
$aml_li_3 = "Svindel eller finansiell bedrag";
$aml_li_4 = "Unndragelse av sanksjoner";
$aml_li_5 = "Markedsmanipulasjon";
$aml_li_6 = "Bruk av stjålne midler eller kompromitterte kontoer";
$aml_li_7 = "Enhver aktivitet forbudt av gjeldende lov";
$aml_h2_exchange = "Tredjeparts Børsoverholdelse";
$aml_p_ex_1 = "$site_name kan referere til, samhandle med, eller gi analytisk infrastruktur relatert til tredjeparts digitale eiendelsarenaer eller likviditetsmiljøer.";
$aml_p_ex_2 = "Tredjepartsbørser, depoter, betalingsbehandlere og tjenesteleverandører kan anvende sine egne samsvarsprosedyrer, inkludert identitetsverifisering, transaksjonsovervåking, sanksjonsscreening, kontobegrensninger, kilde-til-midler-sjekker, eller ytterligere verifiseringskrav.";
$aml_h2_user_responsibility = "Brukeransvar";
$aml_p_user_1 = "Brukere er ansvarlige for å sikre at aktiviteten deres er lovlig på deres sted og i samsvar med forpliktelser pålagt av relevante regulatorer, børser, finansinstitusjoner, eller tjenesteleverandører.";
$aml_p_user_2 = "Brukere bør ikke forsøke å skjule eierskap, skjule transaksjonsopprinnelse, gi falsk informasjon, omgå verifiseringsprosesser, eller bruke infrastruktur for digitale eiendeler på en måte som kan anses som mistenkelig eller ulovlig.";
$aml_h2_suspicious = "Mistenkelig Aktivitet";
$aml_p_suspicious = "Mistenkelig aktivitet kan inkludere atferd som fremstår som uforenlig med normal bruk, forsøk på å misbruke handelssystemer, gjentatt innsending av villedende informasjon, involvering i begrensede jurisdiksjoner, eller aktivitet knyttet til svindel, ulovlige midler, eller forbudte tjenester.";
$aml_h2_evasion = "Ingen Unndragelse Eller Omgåelse";
$aml_p_evasion = "Brukere må ikke forsøke å omgå samsvarskontroller, tekniske restriksjoner, identitetsverifiseringssystemer, geografiske begrensninger, eller risikoovervåkingsprosesser.";
$aml_h2_policy_updates = "Oppdateringer Av Policy";
$aml_p_updates_1 = "$site_name kan oppdatere denne AML Policy fra tid til annen for å reflektere endringer i regulatoriske forventninger, markedsstandarder, interne prosedyrer, eller bransjepraksis for digitale eiendeler.";
$aml_p_updates_2 = "Fortsatt bruk av nettsiden etter oppdateringer betyr at brukere anerkjenner den reviderte policyen.";

// RISK PAGE
$risk_h1 = "Risikoerklæring";
$risk_intro_1 = "Kryptovalutahandel og deltakelse i digitale eiendeler innebærer betydelig risiko. Priser kan bevege seg raskt, likviditet kan endres uventet, og markedsforhold kan bli svært ustabile i løpet av kort tid.";
$risk_intro_2 = "Denne Risikoerklæringen forklarer viktige hensyn brukere bør vurdere før de engasjerer seg i markeder for digitale eiendeler, automatiserte handelsteknologier, AI-genererte markeds-signaler, eller krypto-relatert analytisk infrastruktur.";
$risk_h2_no_guarantee = "Ingen Garanterte Resultater";
$risk_p_no_guarantee_1 = "$site_name garanterer ikke fortjeneste, investeringsavkastning, handelssuksess, signalnøyaktighet, uavbrutt tilgang, eller positive økonomiske utfall.";
$risk_p_no_guarantee_2 = "Eventuelle eksempler, statistikk, grensesnittelementer, ytelsesmålinger, signalindikatorer eller markedssimuleringer vist på denne nettsiden, er kun gitt for informasjons- og illustrasjonsformål.";
$risk_h2_volatility = "Kryptovalutamarkedets Volatilitet";
$risk_p_vol_1 = "Markeder for digitale eiendeler er svært volatile. Priser kan påvirkes av likviditetsmangel, makroøkonomiske nyheter, regulatorisk utvikling, børsnedetid, blockchain-hendelser, investorsentiment, belåningsaktivitet, eller markedsmanipulasjon.";
$risk_p_vol_2 = "Volatilitet kan resultere i raske tap, plutselige prisgap, slippage, likvidasjonshendelser, eller manglende evne til å utføre transaksjoner til forventede priser.";
$risk_h2_ai = "Begrensninger Ved AI-Signaler";
$risk_p_ai_1 = "Systemer for kunstig intelligens kan analysere store mengder markedsdata, men de kan ikke eliminere usikkerhet.";
$risk_p_ai_2 = "AI-drevne indikatorer, handelssignaler, markedsklassifiseringer og prediktive modeller kan være ufullstendige, forsinkede, feilaktige eller uegnet for en brukers personlige økonomiske situasjon.";
$risk_p_ai_3 = "Brukere bør ikke stole utelukkende på noe AI-signal når de tar handels-, investerings- eller økonomiske beslutninger.";
$risk_h2_tech = "Teknologi Og Utførelsesrisiko";
$risk_p_tech_1 = "Handelsteknologi kan påvirkes av problemer med internettforbindelse, serveravbrudd, forsinkelse, programvarefeil, API-feil, børsnedetid, feilaktige datafeeds, eller begrensninger i tredjeparts infrastruktur.";
$risk_p_tech_2 = "$site_name garanterer ikke uavbrutt tilgang til data, signaler, plattformfunksjoner, tredjepartssystemer, eller utførelsesmiljøer.";
$risk_h2_liquidity = "Likviditets- Og Børsrisiko";
$risk_p_liq_1 = "Likviditet kan variere betydelig på tvers av børser og digitale eiendeler. Noen markeder kan oppleve lav ordrebokdybde, store spreads, forsinket utførelse, eller skarpe prisbevegelser i perioder med stress.";
$risk_p_liq_2 = "Tredjepartsbørser kan pålegge gebyrer, grenser, restriksjoner, kontogjennomganger, forsinkelser i uttak, handelssuspensjoner, eller geografiske begrensninger.";
$risk_h2_regulatory = "Regulatorisk Risiko";
$risk_p_reg_1 = "Reguleringer for digitale eiendeler kan endres raskt og kan variere på tvers av land, regioner og jurisdiksjoner.";
$risk_p_reg_2 = "Regulatoriske endringer kan påvirke markedstilgang, tilgjengelighet av eiendeler, børsoperasjoner, rapporteringsforpliktelser, beskatning, handelsrestriksjoner eller plattformfunksjonalitet.";
$risk_h2_user_responsibility = "Brukeransvar";
$risk_p_user_1 = "Brukere er alene ansvarlige for å evaluere risiko, forstå gjeldende lover, gjennomgå sin økonomiske situasjon og ta uavhengige beslutninger.";
$risk_p_user_2 = "$site_name gir ikke personlig økonomisk, investerings-, juridisk, regnskapsmessig, eller skattemessig rådgivning.";
$risk_h2_advice = "Søk Profesjonell Rådgivning";
$risk_p_advice_1 = "Brukere bør konsultere kvalifiserte fagfolk før de tar betydelige økonomiske beslutninger som involverer kryptovaluta, handelssystemer, automatiserte teknologier, eller investeringer i digitale eiendeler.";
$risk_p_advice_2 = "Ved å bruke denne nettsiden anerkjenner brukere at de forstår risikoen knyttet til markeder for digitale eiendeler og aksepterer ansvaret for egne beslutninger.";

// EXCHANGES PAGE
$exchanges_h1 = "Støttede Børser";
$exchanges_intro_1 = "$site_name er designet rundt en tilnærming for multi-markedsintelligens som evaluerer aktivitet for digitale eiendeler på tvers av et bredt spekter av kryptovalutahandelsmiljøer.";
$exchanges_intro_2 = "Moderne kryptomarkeder opererer gjennom mange børser, likviditetsleverandører, derivatarenaer og handelsøkosystemer. Å forstå aktiviteten på tvers av disse miljøene er avgjørende for å bygge omfattende markedsintelligens.";
$exchanges_h2_philosophy = "Filosofi For Markedsdekning";
$exchanges_p_phil_1 = "I stedet for å stole på ett enkelt sted, er $site_name bygget rundt konseptet med markedsomfattende analyse.";
$exchanges_p_phil_2 = "Kryptovalutapriser, likviditetsforhold, volatilitetsatferd og institusjonell aktivitet varierer ofte mellom børser. Ved å observere bredere markedsforhold kan analytiske modeller få ytterligere kontekst om nye trender og potensielle anomalier.";
$exchanges_h2_spot = "Spotmarkedsovervåking";
$exchanges_p_spot_1 = "Spotbørser utgjør en betydelig del av den globale aktiviteten for digitale eiendeler.";
$exchanges_p_spot_2 = "Systemer for markedsintelligens kan evaluere spotmarkedsdata, inkludert:";
$exchanges_li_spot_1 = "Prisaktivitet";
$exchanges_li_spot_2 = "Likviditetsdybde";
$exchanges_li_spot_3 = "Ordrebokstruktur";
$exchanges_li_spot_4 = "Handelsvolum";
$exchanges_li_spot_5 = "Spread-atferd";
$exchanges_li_spot_6 = "Ubalanse i markedet";
$exchanges_h2_deriv = "Derivatmarkeder";
$exchanges_p_deriv_1 = "Kryptovalutaderivater spiller en stadig viktigere rolle innen det bredere økosystemet for digitale eiendeler.";
$exchanges_p_deriv_2 = "Futures, evigvarende kontrakter, opsjoner og belånt handelsaktivitet kan påvirke markedssentiment, volatilitetsforhold og retningsmomentum.";
$exchanges_p_deriv_3 = "Analytisk infrastruktur kan evaluere derivatrelatert informasjon når man vurderer bredere markedsforhold.";
$exchanges_h2_liquidity = "Likviditetsanalyse";
$exchanges_p_liq_1 = "Likviditet er fortsatt en av de viktigste faktorene som påvirker markedsstabilitet og utførelseskvalitet.";
$exchanges_p_liq_2 = "$site_name kan analysere likviditetsforhold på tvers av flere handelssteder for å identifisere:";
$exchanges_li_liq_1 = "Likviditetskonsentrasjon";
$exchanges_li_liq_2 = "Plutselige tilbaketrekninger av likviditet";
$exchanges_li_liq_3 = "Ordrebokpress";
$exchanges_li_liq_4 = "Hendelser med markeds ubalanse";
$exchanges_li_liq_5 = "Unormal handelsatferd";
$exchanges_h2_availability = "Børstilgjengelighet";
$exchanges_p_avail_1 = "Børstilgjengelighet kan variere avhengig av geografisk plassering, jurisdiksjon, kontokvalifisering, regulatoriske krav, og tekniske begrensninger.";
$exchanges_p_avail_2 = "Visse børser eller tjenester kan være utilgjengelige for noen brukere og kan pålegge egne restriksjoner, verifiseringskrav, gebyrer, og driftspolicyer.";
$exchanges_h2_third = "Tredjeparts Plattformer";
$exchanges_p_third_1 = "Enhver referanse til børser, likviditetssteder, meglere, depoter, eller markedsleverandører er kun gjort av informasjonshensyn.";
$exchanges_p_third_2 = "$site_name verken eier, driver, kontrollerer, eller garanterer tjenestene til tredjepartsbørser.";
$exchanges_p_third_3 = "Brukere er ansvarlige for å evaluere enhver børs, handelssted, eller digital eiendelstjeneste før bruk.";
$exchanges_h2_monitoring = "Kontinuerlig Markedsovervåking";
$exchanges_p_mon_1 = "Kryptovalutamarkeder opererer kontinuerlig, ofte tjuefire timer i døgnet, syv dager i uken.";
$exchanges_p_mon_2 = "Etter hvert som markedsstrukturen utvikler seg, oppstår det nye børser, likviditeten flyttes, og handelsaktiviteten endres.";
$exchanges_p_mon_3 = "$site_name søker kontinuerlig å opprettholde bevisstheten om endrede markedsforhold gjennom bred analytisk dekning av økosystemet for digitale eiendeler.";

// ==========================================
// RISK WARNING PAGE
// ==========================================
$page_title_risk_warning = "Risikoadvarsel | $site_name";
$page_description_risk_warning = "Forstå risikoene ved automatisert kryptohandel med $site_name, inkludert markedsvolatilitet, utførelsesrisiko, og regulatoriske hensyn.";
$risk_warning_breadcrumb_name = "Risikoadvarsel";
$risk_warning_title = "Risikoadvarsel";
$risk_warning_intro = "Å forstå risiko er det første skrittet mot trygg handel.";

$risk_warning_ai_heading = "Hvordan Vårt AI-System Hjelper Til Med Risikostyring:";
$risk_warning_ai_1 = "<strong>Algoritmisk Effektivitet & Følelsesløs Handel:</strong> Avanserte algoritmer analyserer markeds-signaler for å utføre handler objektivt på optimale tidspunkter.";
$risk_warning_ai_2 = "<strong>Datadrevne Strategier:</strong> Strategier er basert på bekreftede markedsmønstre og sanntidsanalyse i stedet for gjetning.";
$risk_warning_ai_3 = "<strong>Fleksible Innstillinger & Full Kontroll:</strong> Juster dine risikoparametere når som helst. Spor alle saldoer og handler transparent på dashbordet ditt uten skjulte gebyrer og restriksjonsfrie uttak.";

$risk_warning_disclaimer = "<strong>Ansvarsfraskrivelse:</strong> Handel medfører alltid risiko. Automatiserte systemer (inkludert AI) garanterer ikke profitt, kan feile på grunn av programvarefeil eller uventede markedshendelser, og krever brukertilsyn. Tidligere resultater er ikke en indikator på fremtidige resultater. Denne plattformen tjener utelukkende informasjons- og markedsføringsformål og gir ikke finansiell rådgivning.";

$risk_warning_s1_heading = "1. Generelle & Kryptovaluta Markedsrisikoer";
$risk_warning_s1_intro = "Kryptovalutaer er svært volatile, spekulative eiendeler som opererer 24/7 med minimal regulatorisk tilsyn i de fleste jurisdiksjoner.";
$risk_warning_s1_1 = "Verdier kan svinge dramatisk innenfor korte perioder, noe som potensielt kan føre til totalt tap av investert kapital.";
$risk_warning_s1_2 = "Markedsverdier kan bli sterkt påvirket av regulatoriske oppdateringer, teknisk utvikling, sikkerhetsbrudd, eller bredere makroøkonomiske hendelser.";
$risk_warning_s1_3 = "Noen eiendeler kan miste all verdi fullstendig. Invester kun midler du har råd til å tape.";

$risk_warning_s2_heading = "2. Utførelses-, Likviditets- & Belåningsrisikoer";
$risk_warning_s2_1 = "<strong>Markedsvolatilitet & Likviditet:</strong> Ekstreme prisbevegelser (10–20%+ daglig) eller lav likviditet (spesielt i mindre mynter) kan føre til forsinkelser, plattformnedetid, og alvorlig slippage ved utførelse. Stop-loss ordrer kan ikke garantere tapsgrenser under ekstreme forhold.";
$risk_warning_s2_2 = "<strong>Belåning & Marginrisiko:</strong> Belånte produkter forsterker både gevinster og tap, noe som betyr at du kan tape mer enn ditt opprinnelige innskudd. Omtrent 70–80% av personkunde-kontoer taper penger ved handel med belånte produkter.";

$risk_warning_s3_heading = "3. Tekniske, Cybersikkerhets- & Tredjepartsrisikoer";
$risk_warning_s3_1 = "<strong>Tekniske Faktorer:</strong> Online handel innebærer iboende risikoer for internettbrudd, maskinvare-/programvarefeil, og tjenesteutilgjengelighet.";
$risk_warning_s3_2 = "<strong>Cybersikkerhet:</strong> Kryptovalutakontoer er hyppige mål for phishing, malware, og hacking. Transaksjoner er irreversible; kompromittering av legitimasjonen din kan føre til permanent tap.";
$risk_warning_s3_3 = "<strong>Tredjeparts Plattformer:</strong> Denne nettsiden kan koble brukere til tredjepartsplattformer. Vi kontrollerer, støtter eller garanterer ikke deres sikkerhet, drift eller solvens. Gjør alltid din egen undersøkelse før du setter inn midler på eksterne plattformer.";

$risk_warning_s4_heading = "4. Regulatoriske, Skattemessige & Avsluttende Bestemmelser";
$risk_warning_s4_1 = "<strong>Juridisk Samsvar & Skatt:</strong> Regulatoriske rammeverk varierer mye og endres raskt. Brukere er alene ansvarlige for å sikre at deres handelsaktivitet er i samsvar med lokale lover og for å oppfylle egne skatteforpliktelser.";
$risk_warning_s4_2 = "<strong>Ingen Profittgarantier:</strong> Det er ingen \"trygg\" eller risikofri kryptohandel. Eventuelle avkastningstall eller ytelseseksempler er rent hypotetiske.";
$risk_warning_s4_3 = "<strong>Egnethet:</strong> Hvis du ikke fullt ut forstår risikoene, er avhengig av viktige midler, eller handler med lånte penger, er ikke kryptohandel egnet for deg. Rådfør deg med en uavhengig lisensiert finansiell rådgiver hvis du er usikker.";

$risk_warning_contact = "<strong>Kontakt:</strong> For spørsmål angående denne erklæringen eller for å sende inn en forespørsel, vennligst kontakt vårt offisielle kundestøtteteam via kontaktskjemaet på vår nettside.";
$footer_risk_warning = "Risikoadvarsel";

$lang_loaded = true;

?>
