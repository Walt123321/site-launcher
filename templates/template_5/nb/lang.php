<?php
require __DIR__ . '/../lang.php';

// Identity / config variables are intentionally NOT overridden here — they are inherited
// as-is from the root lang.php so brand/pricing swaps still work correctly at deploy time:
// $site_name, $site_url, $site_domain, $app_price, $app_currency, $rating_value,
// $rating_count, $review_count, $country_name, $support_email, $institutional_email.

$site_lang = 'nb-NO';
$form_language = 'nb';

// Reviews
$review_1_author = "Privatinvestor";
$review_2_author = "Uavhengig trader";
$review_3_author = "Digital aktivahandler";
$review_4_author = "Søker passiv inntekt";


// META TITLE / DESCRIPTION (per page)
$home_meta_title = "$site_name — Offisiell nettside | Handelsplattform";
$home_meta_description = "$site_name ⭐ — intelligent AI-handelsplattform for sanntids markedsanalyse og tydelige handelssignaler ⚡ Prøv smarte verktøy og innsikt med en guidet omvisning.";



$quiz_consultant_name = 'Mia';
$quiz_consultant_role = 'Onboarding-assistent';

$quiz_text_welcome   = "Hei! Dette er $quiz_consultant_name, din personlige onboarding-assistent hos $site_name. Gode nyheter! Tilgangen din er offisielt forhåndsgodkjent. La oss konfigurere din profesjonelle profil nå!";
$quiz_text_q1 = "For å sikre full overholdelse av lover og regler, vennligst bekreft ditt nåværende bostedsland: $country_name";
$quiz_text_a1_yes    = "Ja, dette er min nåværende bostedsadresse";
$quiz_text_a1_no     = "Nei";

$quiz_text_q2 = "Perfekt. Velg riktig alderskategori for å finne de mest passende finansielle instrumentene:";

$quiz_text_q3        = "Har du en aktiv bankkonto eller et kredittkort for å motta regelmessige daglige utbyttebetalinger?";
$quiz_text_a3_yes    = "Ja, en aktiv konto er tilgjengelig";
$quiz_text_a3_no     = "Ikke tilgjengelig ennå";

$quiz_text_q4        = "Vennligst oppgi din primære inntektskilde. (Denne parameteren hjelper med å tilpasse systemets innstillinger for risikostyring).";
$quiz_text_a4_1      = "Fast ansatt / Selvstendig næringsdrivende";
$quiz_text_a4_2      = "Passiv inntekt / Personlige besparelser";
$quiz_text_a4_3      = "Andre kilder";

$quiz_text_q5 = "Flott! Det siste trinnet er en kort telefonverifisering fra vår leder for å bekrefte registreringen din. Samtaler foretas fra 11:00 til 20:00. Vil du ha mulighet til å ta samtalen?";
$quiz_text_a5_yes    = "Ja, dette tidspunktet passer for samtalen";
$quiz_text_a5_no     = "Vennligst start samtalen umiddelbart";

$quiz_text_loader    = "Analyserer de valgte alternativene og initialiserer sikre konfigurasjonsparametere for kontoen...";
$quiz_text_final_ttl = "Konto vellykket autorisert! 🎉 Det sikre digitale arbeidsområdet er fullstendig konfigurert. Fullfør de siste verifiseringstrinnene nedenfor for å garantere daglige utbetalinger:";

$quiz_placeholder_fname = "Fornavn";
$quiz_placeholder_lname = "Etternavn";
$quiz_placeholder_email = "E-postadresse";
$quiz_placeholder_phone = "Telefonnummer";
$quiz_btn_submit = "Aktiver handel";
$quiz_text_typing       = "skriver en melding...";
$quiz_text_processing   = "Behandler forespørsel...";


$about_meta_title = "Om $site_name | AI-drevet infrastruktur for kryptohandel";
$about_meta_description = "Lær mer om $site_name, en avansert AI-drevet infrastruktur for kryptohandel med fokus på prediktiv analyse, markedsinnsikt, volatilitetsovervåking og forskning på digitale eiendeler.";

$contact_meta_title = "Kontakt $site_name | Be om tilgang til AI-handelsplattformen";
$contact_meta_description = "Kontakt $site_name for å be om tilgang, stille spørsmål om AI-drevet infrastruktur for kryptohandel, støttede markeder, innsikt i digitale eiendeler eller onboarding på plattformen.";

$terms_meta_title = "Vilkår og betingelser | $site_name Nettsteds- og plattformvilkår";
$terms_meta_description = "Les $site_name sine vilkår og betingelser som dekker bruk av nettstedet, informasjonsinnhold, AI-handelsinfrastruktur, brukeransvar, tredjepartstjenester og risikobegrensninger.";

$privacy_meta_title = "Personvernerklæring | $site_name Databeskyttelse og brukerpersonvern";
$privacy_meta_description = "Les $site_name sin personvernerklæring for å forstå hvordan vi samler inn, bruker, beskytter, lagrer og administrerer personlig informasjon som sendes inn via vår nettsted for AI-kryptohandelsinfrastruktur.";

$cookies_meta_title = "Informasjonskapsler (Cookies) | $site_name Nettstedets informasjonskapsler og sporing";
$cookies_meta_description = "Lær hvordan $site_name bruker informasjonskapsler (cookies), analyseteknologier, verktøy for ytelsessporing og nettstedets funksjonalitetstjenester for å forbedre brukeropplevelsen og plattformens ytelse.";

$aml_meta_title = "AML-policy | $site_name Standarder for hvitvasking av penger";
$aml_meta_description = "Gjennomgå $site_name sin AML-policy, inkludert ansvarlig bruk av digitale eiendeler, bevissthet rundt hvitvasking, forbudt aktivitet, overvåkingsprinsipper og forventninger til overholdelse.";

$risk_meta_title = "Risikoavsløring | $site_name Erklæring om kryptohandelsrisiko";
$risk_meta_description = "Gjennomgå $site_name sin risikoavsløring for å forstå kryptovalutavolatilitet, handelsusikkerhet, begrensninger for AI-signaler, markedsrisiko, likviditetsrisiko og brukeransvar.";

$exchanges_meta_title = "Støttede børser | $site_name Dekning for markedsinnsikt";
$exchanges_meta_description = "Utforsk typene kryptovalutabørser, likviditetsarenaer og markeder for digitale eiendeler som overvåkes av $site_name sin AI-drevne infrastruktur for markedsinnsikt.";


$about_breadcrumb_name = "Om $site_name";
$contact_breadcrumb_name = "Kontakt $site_name";
$terms_breadcrumb_name = "Vilkår og betingelser";
$privacy_breadcrumb_name = "Personvernerklæring";
$cookies_breadcrumb_name = "Informasjonskapsler";
$aml_breadcrumb_name = "AML-policy";
$risk_breadcrumb_name = "Risikoavsløring";
$exchanges_breadcrumb_name = "Støttede børser";

$hero_text = "Opplev en ny æra innen handel med vår avanserte kryptohandelsplattform. Med $site_name sin AI-teknologi kan du optimalisere avkastningen din og ta informerte investeringsbeslutninger.";


// EMAIL


// HEADER / NAV / FOOTER
$logo_subtitle = "AI-handelsinfrastruktur";
$nav_signals = "Signaler";
$nav_reviews = "Anmeldelser";
$nav_about = "Om";
$nav_exchanges = "Børser";
$nav_exchanges_full = "Støttede børser";
$nav_risk = "Risiko";
$nav_risk_full = "Risikoavsløring";
$nav_faq = "FAQ";
$nav_privacy = "Personvernerklæring";
$nav_terms = "Vilkår og betingelser";
$nav_cookies = "Informasjonskapsler";
$nav_cookies_short = "Informasjonskapsler";
$nav_aml = "AML-policy";
$nav_contact_us = "Kontakt oss";
$nav_contact = "Kontakt";
$nav_get_started = "Kom i gang";
$header_ai_status = "AI-kjerne operativ";
$header_menu_aria = "Meny";
$footer_platform = "Plattform";
$footer_resources = "Ressurser";
$footer_contact_title = "Kontakt";
$footer_ai_signals = "AI-signaler";
$footer_about_link = "Om $site_name";
$footer_description = "$site_name er en avansert AI-drevet infrastruktur for kryptohandel med fokus på prediktiv analyse, markedsinnsikt på institusjonelt nivå, volatilitetsmodellering, nevrale utførelsessystemer og automatisert risikostyring.";
$footer_monitoring = "24/7 AI-infrastrukturovervåking";
$footer_global_markets = "Globale markeder for digitale eiendeler";
$footer_disclaimer_title = "Risikoavsløring";
$footer_disclaimer_p1 = "Kryptovalutahandel og investering i digitale eiendeler innebærer betydelig økonomisk risiko og er kanskje ikke egnet for alle investorer. Markedsvolatilitet, likviditetsforstyrrelser, teknologiske feil, regulatoriske endringer og makroøkonomiske forhold kan påvirke aktivaens ytelse betydelig.";
$footer_disclaimer_p2 = "$site_name tilbyr AI-drevet analytisk infrastruktur, prediktiv markedsinnsikt og automatiserte handelsteknologier. Ingenting på dette nettstedet utgjør finansiell, investerings-, juridisk- eller skatterådgivning.";
$footer_disclaimer_p3 = "Tidligere resultater er ingen garanti for fremtidige resultater. Brukere bør uavhengig vurdere risiko før de engasjerer seg i kryptovalutamarkeder eller automatiserte handelssystemer.";
$footer_rights = "Alle rettigheter forbeholdt.";
$footer_lang_label = "Språk";



// HOME FORM
$home_form_fname = "Fornavn";
$home_form_lname = "Etternavn";
$home_form_email = "E-post";
$home_form_submit_access = "Få tilgang";
$home_form_submit_platform = "Be om plattformtilgang";

// CONTACT FORM
$contact_form_fname = "Fornavn";
$contact_form_lname = "Etternavn";
$contact_form_email = "E-post";
$contact_form_submit = "Be om tilgang";


// HOME LABELS
$home_label_ai_confidence = "AI-konfidens";
$home_label_update_speed = "Oppdateringshastighet";
$home_label_market_mode = "Markedsmodus";
$home_label_market_condition = "Markedsforhold";
$home_label_buyer_activity = "Kjøperaktivitet";
$home_label_market_activity = "Markedsaktivitet";
$home_label_risk_level = "Risikonivå";
$home_label_updated = "Oppdatert";
$home_label_live_analysis = "LIVE ANALYSE";

// JS
$home_js_sec_ago = "sek siden";
$js_sec_ago = "sek siden";
$js_close_notification = "Lukk varsel";

$js_signal_long_direction = "Sannsynligheten for opptrend øker";
$js_signal_long_market = "Kontrollert ekspansjon";
$js_signal_long_pressure_label = "Likviditetspress";
$js_signal_long_pressure = "Bullish";

$js_signal_short_direction = "Nedsidepress øker";
$js_signal_short_market = "Høy ustabilitet";
$js_signal_short_pressure_label = "Risikopress";
$js_signal_short_pressure = "Bearish";

$js_signal_watch_direction = "Konsolideringssone oppdaget";
$js_signal_watch_market = "Nøytral konsolidering";
$js_signal_watch_pressure_label = "Institusjonell flyt";
$js_signal_watch_pressure = "Stabil";

$js_hero_long_pair = "BTC/USD Momentumekspansjon";
$js_hero_long_regime = "Bullish";
$js_hero_long_feed_1 = "BTC-likviditetsekspansjon oppdaget";
$js_hero_long_feed_2 = "Ordreflytpresset blir positivt";
$js_hero_long_feed_3 = "AI-modellen bekrefter bullish fortsettelse";

$js_hero_watch_pair = "ETH/USD Volatilitetskompresjon";
$js_hero_watch_regime = "Nøytral";
$js_hero_watch_feed_1 = "ETH-kompresjonssone oppdaget";
$js_hero_watch_feed_2 = "AI venter på sterkere bekreftelse";
$js_hero_watch_feed_3 = "Likviditeten forblir stabil";

$js_hero_short_pair = "SOL/USD Risikoekspansjon";
$js_hero_short_regime = "Risk-Off";
$js_hero_short_feed_1 = "SOL nedsidepress oppdaget";
$js_hero_short_feed_2 = "Risikomodellen flagger volatilitetsekspansjon";
$js_hero_short_feed_3 = "AI reduserer bullish eksponering";

// JS — live user popup actions
$js_live_action_1 = "ble med på $site_name fra";
$js_live_action_2 = "ba om plattformtilgang fra";
$js_live_action_3 = "startet AI-signalovervåking fra";
$js_live_action_4 = "aktiverte markedsanalyse fra";
$js_live_action_5 = "åpnet institusjonelt dashbord fra";
$js_live_action_6 = "koblet til $site_name fra";


// HOME PAGE
$home_hero_label = "AI-kryptoplattform for alle erfaringsnivåer";
$home_hero_title = "$site_name Plattform";
$home_hero_desc = "$site_name hjelper nybegynnere og erfarne tradere med å utforske kryptomarkeder med AI-drevet innsikt, sanntids markedsovervåking, risikobevisste verktøy og guidet plattformstøtte.";
$home_hero_feat_1 = "Enkel AI-markedsinnsikt for nye brukere";
$home_hero_feat_2 = "Sanntids kryptoovervåking og signaloppdateringer";
$home_hero_feat_3 = "Risikobevisste verktøy for smartere beslutninger";
$home_hero_feat_4 = "Avansert analyse for erfarne tradere";
$home_btn_request_access = "Få plattformtilgang";
$home_btn_view_signals = "Se AI-signaler";
$home_trust_data_label = "Analyserte markedsdatapunkter";
$home_trust_confidence_label = "Gjennomsnittlig signalkonfidens";
$home_trust_monitoring_label = "AI-markedsovervåking";
$home_terminal_title = "$site_name Guidet AI-markedsvisning";
$home_terminal_insight_label = "Nåværende AI-markedsinnsikt";
$home_terminal_feed_1 = "BTC-markedsaktivitet viser sterkere momentum";
$home_terminal_feed_2 = "ETH-bevegelser overvåkes for bekreftelse";
$home_terminal_feed_3 = "AI-assistenten fremhever en mulig mulighetssone";
$home_trust_strip_1 = "AI-innsikt for nybegynnere og erfarne tradere";
$home_trust_strip_2 = "24/7 Kryptovaluta markedsovervåking";
$home_trust_strip_3 = "Sanntids risiko- og mulighetsanalyse";
$home_trust_strip_4 = "Guidet tilgang til avanserte handelsverktøy";
$home_signals_eyebrow = "$site_name LIVE AI-KJERNE";
$home_signals_title = "Sanntids AI-markedsignaler for smartere kryptobeslutninger";
$home_signals_desc = "$site_name overvåker kontinuerlig kryptovalutamarkedsaktivitet, volatilitet, likviditetsforhold, sentimenttrender og blokkjededata for å generere AI-drevet innsikt og sanntids markedsignaler for både nybegynnere og erfarne tradere.";
$home_signals_terminal_title = "$site_name AI-signalmotor";
$home_signal_btc_sub = "Positivt momentum oppdaget";
$home_signal_btc_dir = "Sannsynligheten for opptrend øker";
$home_signal_btc_market = "Positivt momentum";
$home_signal_btc_activity = "Sterk";
$home_signal_eth_sub = "Venter på markedsbekreftelse";
$home_signal_eth_dir = "Sidelengs bevegelse oppdaget";
$home_signal_eth_market = "Nøytral trend";
$home_signal_eth_activity = "Stabil";
$home_signal_sol_sub = "Økt markedsrisiko oppdaget";
$home_signal_sol_dir = "Nedsidepress øker";
$home_signal_sol_market = "Høy volatilitet";
$home_signal_sol_risk = "Forhøyet";
$home_why_eyebrow = "HVORFOR $site_name?";
$home_why_title = "AI-drevne kryptoverktøy bygget for alle erfaringsnivåer";
$home_why_desc_1 = "$site_name hjelper brukere med å bedre forstå kryptovalutamarkeder gjennom kunstig intelligens, sanntidsovervåking, markedsinnsikt og risikobevisste verktøy. Enten du utforsker krypto for første gang eller allerede har handelserfaring, er plattformen designet for å gjøre markedsanalyse mer tilgjengelig og enklere å forstå.";
$home_why_desc_2 = "$site_name sin infrastruktur evaluerer kontinuerlig markedsaktivitet, prisbevegelser, likviditetsforhold, sentimenttrender og blokkjededata for å identifisere nye muligheter og endrede markedsforhold. Nye brukere kan dra nytte av guidet plattformstøtte, mens erfarne tradere kan utforske avanserte analyseverktøy og AI-drevet markedsinnsikt.";
$home_flow_1 = "Markedsovervåking";
$home_flow_2 = "AI-analyse";
$home_flow_3 = "Mulighetsdeteksjon";
$home_flow_4 = "Risikoevaluering";
$home_flow_5 = "Handlingsbar innsikt";
$home_reviews_eyebrow = "$site_name NETTSAMFUNN";
$home_reviews_title = "Hva brukere sier om $site_name";
$home_reviews_desc = "Fra førstegangsbrukere av krypto til erfarne tradere, folk bruker $site_name for å bedre forstå markedsforhold, utforske AI-drevet innsikt og nærme seg kryptovalutabeslutninger med mer klarhet.";
$home_review_1_text = "Før jeg oppdaget $site_name, følte jeg meg overveldet av mengden informasjon i kryptovalutaområdet. Hver plattform virket komplisert, og jeg var konstant bekymret for å gjøre feil. Det jeg setter mest pris på med $site_name er hvor tilgjengelig alt føles. AI-innsikten hjalp meg med å forstå markedsforholdene uten å føle meg fortapt, og plattformen ga meg selvtilliten til å begynne å lære i mitt eget tempo. Jeg er oppriktig takknemlig for hvor mye enklere opplevelsen ble i forhold til hva jeg forventet.";
$home_review_1_tag = "Trygg & enkel start";
$home_review_badge = "VERIFISERT BRUKER";
$home_review_2_text = "Jeg brukte måneder på å se på kryptoplattformer uten noen gang å føle meg komfortabel nok til å ta det første skrittet. $site_name forandret den opplevelsen fullstendig. Plattformen gjorde markedsinformasjon enklere å forstå, og jeg følte aldri at jeg trengte mange års handelserfaring bare for å bruke verktøyene. Det som imponerte meg mest var balansen mellom enkelhet og kraftig AI-analyse. Det føles som å ha veiledning tilgjengelig når du trenger det. Jeg er takknemlig for at jeg fant en plattform som hjalp meg å lære uten å føle meg skremt.";
$home_review_2_tag = "Enklere læringsopplevelse";
$home_review_3_text = "Jeg har testet mange markedsanalyseplattformer, og $site_name skiller seg ut fordi den balanserer tilgjengelighet med seriøs analytisk dybde. Nye brukere kan forstå plattformen raskt, mens erfarne tradere fortsatt får nyttige AI-drevne markedsignaler, risikoovervåking og sanntids kryptoinnsikt. Den balansen er vanskelig å finne. Plattformen leverer meningsfull markedskontekst uten å overvelde brukere, noe veldig få kryptoverktøy klarer å oppnå.";
$home_review_3_tag = "Avanserte verktøy med enkel brukervennlighet";
$home_review_span_1 = "Ny kryptobruker";
$home_review_span_2 = "Førstegangsbruker av plattform";
$home_review_span_3 = "Profesjonell kryptotrader";
$home_review_1_avatar_alt = "Eirik Nilsen, $site_name bruker";
$home_review_2_avatar_alt = "Sander Larsen, $site_name bruker";
$home_review_3_avatar_alt = "Morten Johansen, $site_name bruker";
$home_hero_visual_alt = "AI-drevet markedsanalysedashbord på $site_name";
$home_signal_visual_alt = "Sanntids handelssignal generert av $site_name AI";
$home_device_visual_alt = "Kryptoanalyse vist på en tilkoblet enhet via $site_name";
$home_security_visual_alt = "Sikkerhetsskjold som representerer $site_name kontobeskyttelse";
$home_contact_eyebrow = "KOM I GANG MED $site_name";
$home_contact_title = "Utforsk plattformen med selvtillit";
$home_contact_section_title = "Utforsk plattformen med selvtillit";
$home_contact_desc_1 = "Enten du er helt ny i kryptovalutamarkeder eller allerede har handelserfaring, gir $site_name tilgang til AI-drevet markedsinnsikt, sanntids overvåkingsverktøy og intelligent analyse designet for å hjelpe brukere med å bedre forstå muligheter i digitale eiendeler.";
$home_contact_desc_2 = "Send inn opplysningene dine for å lære mer om plattformen, utforske tilgjengelige funksjoner og oppdage hvordan $site_name kan hjelpe deg med å navigere i kryptovalutamarkeder gjennom avansert teknologi og guidet plattformstøtte.";
$home_seo_toggle = "Lær mer om $site_name AI-plattformen";
$home_seo_h2 = "$site_name AI-plattform for smartere kryptomarkedsbeslutninger";
$home_seo_p1 = "$site_name er en AI-drevet kryptovalutaplattform designet for både nybegynnere og erfarne tradere. Plattformen kombinerer kunstig intelligens, sanntids markedsovervåking og avanserte analyseverktøy for å hjelpe brukere med å bedre forstå markeder for digitale eiendeler og identifisere potensielle muligheter.";
$home_seo_p2 = "I motsetning til mange tradisjonelle handelsplattformer som krever omfattende markedskunnskap, er $site_name bygget for å gjøre kompleks markedsinformasjon enklere å forstå. Plattformen analyserer kontinuerlig kryptoaktivitet, prisbevegelser, sentimenttrender, likviditetsforhold og blokkjededata, og forvandler store mengder informasjon til praktisk innsikt.";
$home_seo_p3 = "Enten du utforsker kryptovalutamarkeder for første gang eller allerede har erfaring med handel av digitale eiendeler, tilbyr $site_name intelligente verktøy designet for å støtte mer informert beslutningstaking samtidig som den tilpasser seg endrede markedsforhold i sanntid.";
$home_seo_h3_1 = "AI-markedsanalyse gjort tilgjengelig";
$home_seo_h3_1_p1 = "$site_name bruker kunstig intelligens til å evaluere et bredt spekter av markedsindikatorer, inkludert handelsaktivitet, volatilitetsmønstre, likviditetsforhold, blokkjedehendelser og markedssentiment. Ved å behandle informasjon kontinuerlig, hjelper plattformen brukere med å få en tydeligere forståelse av gjeldende markedsatferd.";
$home_seo_h3_1_p2 = "AI-modellene er designet for å tilpasse seg endrede miljøer i stedet for å stole på statiske antakelser. Dette gjør at plattformen kan reagere dynamisk på utviklende kryptovalutatrender og nye markedsmuligheter.";
$home_seo_h3_1_p3 = "Selv om plattformen er avansert nok for erfarne tradere, er den også strukturert for å forbli tilgjengelig for nye brukere som ønsker tilgang til AI-drevet markedsinnsikt uten å kreve dyp teknisk ekspertise.";
$home_seo_h3_2 = "Sanntids AI-markedsignaler";
$home_seo_h3_2_p1 = "$site_name overvåker kontinuerlig kryptovalutamarkeder og genererer AI-drevet innsikt basert på endret markedsaktivitet. Plattformen evaluerer momentum, volatilitet, likviditetsforhold og bredere markedsatferd for å gi analytiske signaler i sanntid.";
$home_seo_h3_2_p2 = "Bitcoin, Ethereum, Solana, XRP, Avalanche og andre store digitale eiendeler overvåkes gjennom adaptive analytiske modeller som automatisk justerer seg til endrede markedsforhold.";
$home_seo_h3_2_p3 = "I stedet for å stole på en enkelt indikator eller et isolert mål, kombinerer $site_name flere informasjonskilder i et bredere analytisk rammeverk designet for å gi et mer komplett bilde av markedsforholdene.";
$home_seo_h3_3 = "Intelligente risikobevisste verktøy";
$home_seo_h3_3_p1 = "Kryptovalutamarkeder kan endre seg raskt. $site_name inkluderer AI-drevne overvåkingssystemer designet for å identifisere uvanlig volatilitet, endrede likviditetsforhold og nye markedsrisikoer.";
$home_seo_h3_3_p2 = "Plattformen evaluerer kontinuerlig markedsatferd og potensielle risikofaktorer, og hjelper brukere med å bedre forstå endrede forhold og ta mer informerte beslutninger.";
$home_seo_h3_3_p3 = "Ved å kombinere flere lag med analyser søker $site_name å forbedre markedsbevisstheten og hjelpe brukere med å navigere i perioder med økt usikkerhet med større tillit.";
$home_seo_h3_4 = "Designet for moderne kryptovalutamarkeder";
$home_seo_h3_4_p1 = "$site_name kombinerer kunstig intelligens, sanntids overvåkingsteknologier og avanserte analyseverktøy i en enkelt plattform designet for moderne markeder for digitale eiendeler.";
$home_seo_h3_4_p2 = "Infrastrukturen evaluerer kontinuerlig markedsaktivitet, blokkjedeutvikling, sentimentendringer og likviditetstrender for å gi en omfattende oversikt over kryptovalutamarkedsatferd.";
$home_seo_h3_4_p3 = "Ettersom markeder for digitale eiendeler fortsetter å utvikle seg, kan AI-drevne verktøy hjelpe brukere med å behandle informasjon mer effektivt og bedre forstå stadig mer komplekse markedsmiljøer. $site_name er designet for å gjøre disse mulighetene tilgjengelige for et bredere spekter av markedsdeltakere.";
$home_seo_side_1_label = "AI-innsikt";
$home_seo_side_1_title = "Lettforståelig markedsanalyse";
$home_seo_side_1_desc = "AI-drevet innsikt designet for både nye og erfarne kryptovalutabrukere.";
$home_seo_side_2_label = "Markedsovervåking";
$home_seo_side_2_title = "Sanntids kryptosporing";
$home_seo_side_2_desc = "Kontinuerlig overvåking av store kryptovalutamarkeder og endrede markedsforhold.";
$home_seo_side_3_label = "Risikobevissthet";
$home_seo_side_3_title = "Intelligent risikodeteksjon";
$home_seo_side_3_desc = "Avanserte overvåkingsverktøy designet for å fremheve endret markedsdynamikk og volatilitet.";
$home_seo_side_4_label = "AI-teknologi";
$home_seo_side_4_title = "Adaptive analytiske modeller";
$home_seo_side_4_desc = "Maskinlæringssystemer som kontinuerlig evaluerer markedsdata og nye trender.";
$home_faq_eyebrow = "$site_name KUNNSKAPSBASE";
$home_faq_title = "Ofte stilte spørsmål om $site_name";
$home_faq_desc = "Lær mer om hvordan plattformen fungerer, hvem den er designet for, og hvordan kunstig intelligens hjelper brukere med å bedre forstå kryptovalutamarkedsforhold.";
$home_faq_q1 = "Trenger jeg handelserfaring for å bruke $site_name?";
$home_faq_a1 = "Nei. $site_name er designet for brukere med ulike nivåer av erfaring, inkludert folk som er helt nye i kryptovalutamarkeder. Plattformen bruker AI-drevet innsikt og markedsovervåkingsverktøy for å gjøre kompleks informasjon lettere å forstå.";
$home_faq_q2 = "Hva gjør $site_name egentlig?";
$home_faq_a2 = "$site_name analyserer kontinuerlig kryptovalutamarkeder ved hjelp av kunstig intelligens. Plattformen evaluerer markedsaktivitet, volatilitet, sentimenttrender, likviditetsforhold og blokkjededata for å generere sanntidsinnsikt og analytiske signaler.";
$home_faq_q3 = "Kan erfarne tradere bruke $site_name?";
$home_faq_a3 = "Ja. Selv om plattformen er nybegynnervennlig, gir den også avanserte analyseverktøy, AI-drevet markedsinnsikt og sanntids overvåkingsfunksjoner som kan være verdifulielle for erfarne markedsdeltakere.";
$home_faq_q4 = "Hvilke kryptovalutaer overvåker $site_name?";
$home_faq_a4 = "Plattformen kan analysere store digitale eiendeler som Bitcoin, Ethereum, Solana, XRP, Avalanche og andre mye handlede kryptovalutaer avhengig av markedsforhold og tilgjengelige datakilder.";
$home_faq_q5 = "Hvordan genereres AI-signaler?";
$home_faq_a5 = "$site_name evaluerer flere markedsfaktorer samtidig, inkludert volatilitet, handelsaktivitet, likviditetsforhold, sentimenttrender og historisk markedsatferd. AI-modeller kombinerer disse inngangene for å identifisere endrede markedsforhold og potensielle muligheter.";
$home_faq_q6 = "Tilbyr $site_name pedagogisk veiledning?";
$home_faq_a6 = "Plattformen er designet for å hjelpe brukere med å bedre forstå markedsforhold gjennom AI-drevet analyse, forenklet innsikt og guidet tilgang til plattformfunksjoner. Nye brukere kan utforske kryptovalutamarkeder uten å trenge avansert teknisk kunnskap.";
$home_cta_label = "AI-plattform klar";
$home_cta_title = "Begynn å utforske $site_name i dag";
$home_cta_desc = "Oppdag AI-drevet markedsinnsikt, sanntids kryptovalutaovervåking, intelligente risikobevisste verktøy og avansert analyse designet for både nybegynnere og erfarne tradere.";
$home_ticker_text = "AI-markedsovervåking aktiv • Sanntids kryptovalutaanalyse • Bitcoin-momentum styrkes • Ethereum-konsolidering oppdaget • Nye markedsmuligheter identifisert • Risikoovervåkingssystemer online • AI-innsikt oppdateres kontinuerlig • Designet for nybegynnere og erfarne tradere";





// ABOUT PAGE
$about_h1 = "Om $site_name";
$about_p1 = "$site_name er en neste generasjons infrastruktur for kunstig intelligens designet for å hjelpe markedsdeltakere med å bedre forstå det raskt utviklende kryptovaluta-økosystemet. Ved å kombinere maskinlæringsteknologier, prediktiv analyse, systemer for markedsinnsikt og sanntids databehandling, gir $site_name et omfattende miljø for overvåking av aktiviteter for digitale eiendeler og identifisering av meningsfull markedsutvikling.";
$about_p2 = "Kryptovalutamarkedet opererer kontinuerlig på tvers av flere børser, jurisdiksjoner og likviditetsleverandører. Hvert sekund påvirker tusenvis av variabler priser, volatilitet, likviditetsforhold og investorsentiment. $site_name ble utviklet med sikte på å behandle disse komplekse datastrømmene på en strukturert og skalerbar måte.";
$about_h2_vision = "Visjonen bak $site_name";
$about_p_vision_1 = "Finansmarkedene har blitt stadig mer datadrevne. Tradisjonelle analysemetoder sliter ofte med å holde tritt med volumet av informasjon som genereres i moderne økosystemer for digitale eiendeler. $site_name søker å bygge bro over dette gapet gjennom anvendelse av avansert beregningsmessig intelligens, automatiserte overvåkingssystemer og adaptive analytiske modeller.";
$about_p_vision_2 = "Den langsiktige visjonen til $site_name er å tilby gjennomsiktige verktøy for markedsinnsikt som er i stand til å hjelpe brukere med å bedre forstå kryptovalutamarkedsstruktur, risikoforhold og nye trender.";
$about_h2_ai = "Infrastruktur for kunstig intelligens";
$about_p_ai_1 = "I kjernen av $site_name er et flerlags rammeverk for kunstig intelligens designet for å behandle informasjon fra mange markedskilder samtidig.";
$about_p_ai_2 = "Disse kildene kan omfatte:";
$about_li_1 = "Kryptovalutaprisstrømmer";
$about_li_2 = "Ordrebokaktivitet";
$about_li_3 = "Likviditetsbevegelsesdata";
$about_li_4 = "Volatilitetsindikatorer";
$about_li_5 = "Blokkjede transaksjonsmålinger";
$about_li_6 = "Markedssentimentsignaler";
$about_li_7 = "Makroøkonomisk utvikling";
$about_li_8 = "Institusjonell markedsaktivitet";
$about_p_ai_3 = "Ved kontinuerlig å evaluere sammenhenger mellom disse variablene, forsøker $site_name å identifisere mønstre som kan gi verdifull markedskontekst.";
$about_h2_risk = "Filosofi for risikobevissthet";
$about_p_risk_1 = "Ansvarlig deltakelse i kryptovalutamarkeder krever en klar forståelse av risiko. $site_name understreker risikobevissthet som en grunnleggende komponent i analyse av digitale eiendeler.";
$about_p_risk_2 = "Markedsvolatilitet, likviditetssvingninger, børsspesifikke hendelser, regulatorisk utvikling og bredere makroøkonomiske forhold kan alle påvirke markedsutfall. Som et resultat bør brukere aldri stole utelukkende på en enkelt informasjonskilde når de tar beslutninger.";
$about_h2_global = "Globale markeder for digitale eiendeler";
$about_p_global_1 = "Kryptovalutamarkeder opererer i global skala og involverer deltakere fra forskjellige regioner, bransjer og økonomiske miljøer. $site_name-infrastrukturen er designet for å overvåke flere markedssegmenter samtidig, slik at brukere kan observere utviklingen som skjer i forskjellige deler av økosystemet for digitale eiendeler.";
$about_p_global_2 = "Dette bredere perspektivet kan bidra til å forbedre bevisstheten om endrede markedsforhold og nye trender.";
$about_h2_why = "Hvorfor brukere utforsker $site_name";
$about_why_li_1 = "Avansert AI-drevet markedsinnsikt";
$about_why_li_2 = "Sanntids kryptovalutaovervåking";
$about_why_li_3 = "Institusjonell analytisk infrastruktur";
$about_why_li_4 = "Flerfaktor markedsevaluering";
$about_why_li_5 = "Volatilitets- og likviditetsovervåking";
$about_why_li_6 = "Skalerbare forskningsverktøy for digitale eiendeler";
$about_why_li_7 = "Risikobevisst analytisk metodikk";
$about_h2_forward = "Ser fremover";
$about_p_forward_1 = "Ettersom markedene for digitale eiendeler fortsetter å modnes, forventes viktigheten av avansert analytisk infrastruktur å øke. $site_name er fortsatt fokusert på å utvikle teknologier som støtter dypere markedsforståelse, større åpenhet og mer informert deltakelse innenfor kryptovaluta-økosystemet.";
$about_p_forward_2 = "Gjennom kontinuerlig innovasjon og pågående forskning, har $site_name som mål å bidra til en mer intelligent og datadrevet fremtid for analyse av digitale eiendeler.";


// CONTACT PAGE
$contact_h1 = "Kontakt $site_name";
$contact_intro_1 = "Kontakt $site_name-teamet for å be om plattformtilgang, spørre om AI-drevet infrastruktur for kryptohandel, eller lære mer om vårt miljø for markedsinnsikt i digitale eiendeler.";
$contact_intro_2 = "Enten du utforsker automatisert kryptoanalyse, institusjonell signalinfrastruktur, volatilitetsovervåking eller markedsinnsikt på tvers av børser, kan teamet vårt hjelpe deg med å rette forespørselen din til riktig avdeling.";
$contact_h2_help = "Hvordan vi kan hjelpe";
$contact_li_1 = "Forespørsler om plattformtilgang";
$contact_li_2 = "Generelle produktspørsmål";
$contact_li_3 = "Informasjon om AI-handelsinfrastruktur";
$contact_li_4 = "Henvendelser om markedsinnsikt i digitale eiendeler";
$contact_li_5 = "Spørsmål om risikoavsløring og overholdelse";
$contact_li_6 = "Teknisk assistanse eller onboarding-hjelp";
$contact_h2_send = "Send en forespørsel";
$contact_p_send = "Fyll ut skjemaet nedenfor, og en representant for $site_name kan kontakte deg med ytterligere informasjon.";
$contact_h2_info = "Kontaktinformasjon";
$contact_support_label = "Generell støtte:";
$contact_institutional_label = "Institusjonelle henvendelser:";
$contact_disclaimer = "Vær oppmerksom på at $site_name ikke gir personlig finansiell, investerings-, skatte- eller juridisk rådgivning. All informasjon gis kun for teknologi og informasjonsformål.";

// TERMS PAGE
$terms_h1 = "Vilkår og betingelser";
$terms_intro_1 = "Disse vilkårene og betingelsene styrer tilgang til og bruk av $site_name-nettstedet, innhold, plattformbeskrivelser, skjemaer, kommunikasjon og relatert informasjonsmateriell.";
$terms_intro_2 = "Ved å gå inn på denne nettsiden, erkjenner brukerne at de har lest, forstått og godtar disse vilkårene og betingelsene. Hvis en bruker ikke er enig i disse vilkårene, bør vedkommende slutte å bruke nettstedet.";
$terms_h2_informational = "Informasjonsformål";
$terms_p_info_1 = "$site_name gir informasjon om AI-drevet infrastruktur for kryptohandel, markedsinnsikt i digitale eiendeler, volatilitetsovervåking, likviditetsanalyse og relaterte teknologier.";
$terms_p_info_2 = "Nettstedsinnhold er kun gitt for generelle informasjons- og teknologiske presentasjonsformål. Ingenting på dette nettstedet skal tolkes som finansiell rådgivning, investeringsrådgivning, juridisk rådgivning, skatterådgivning eller en garanti for handelsresultater.";
$terms_h2_no_advice = "Ingen finansiell rådgivning";
$terms_p_no_advice_1 = "$site_name gir ikke personlige anbefalinger angående om brukere bør kjøpe, selge, holde, handle, satse, overføre eller på annen måte samhandle med noen kryptovaluta, token, finansielt produkt eller digital eiendel.";
$terms_p_no_advice_2 = "Brukere bør uavhengig evaluere all informasjon og søke råd fra kvalifiserte fagfolk før de tar økonomiske beslutninger.";
$terms_h2_user_responsibility = "Brukeransvar";
$terms_p_user_1 = "Brukere er ansvarlige for sine egne beslutninger, risikovurderinger, kontoaktivitet, handelshandlinger, juridisk overholdelse og bruk av eventuelle tredjepartstjenester.";
$terms_p_user_2 = "Brukere bør sikre at aktivitet med digitale eiendeler er tillatt i deres jurisdiksjon og at de forstår alle gjeldende risikoer før de samhandler med kryptomarkeder.";
$terms_h2_ai = "AI og analytiske systemer";
$terms_p_ai_1 = "$site_name kan beskrive systemer for kunstig intelligens, prediktive modeller, markedsignaler, automatisert analyse eller utførelsesrelaterte teknologier.";
$terms_p_ai_2 = "Disse systemene kan stole på markedsdata, statistiske modeller, maskinlæringsprosesser og informasjonskilder fra tredjeparter. Slike systemer kan være unøyaktige, forsinkede, ufullstendige, utilgjengelige eller uegnet for bestemte brukermål.";
$terms_h2_availability = "Ingen garanti for tilgjengelighet";
$terms_p_avail_1 = "$site_name garanterer ikke uavbrutt tilgang til nettstedet, kontinuerlig plattformtilgjengelighet, feilfri drift, nøyaktig markedsinformasjon eller tilgjengelighet for noen spesifikk funksjon.";
$terms_p_avail_2 = "Tjenester, innhold, sider, skjemaer, integrasjoner eller plattformbeskrivelser kan endres, suspenderes eller avvikles når som helst.";
$terms_h2_third_party = "Tredjepartstjenester";
$terms_p_tp_1 = "Nettstedet kan referere til tredjepartsbørser, likviditetsarenaer, analyseleverandører, kommunikasjonsverktøy, hostingtjenester eller tekniske infrastrukturleverandører.";
$terms_p_tp_2 = "$site_name kontrollerer ikke tredjepartsplattformer og er ikke ansvarlig for deres tilgjengelighet, gebyrer, retningslinjer, kontobegrensninger, samsvarsprosedyrer, tekniske feil eller brukertap.";
$terms_h2_prohibited = "Forbudt bruk";
$terms_p_prohibited = "Brukere må ikke bruke dette nettstedet eller relatert teknologi til ulovlige, fornærmende, uredelige, manipulerende eller skadelige formål.";
$terms_li_1 = "Forsøke på uautorisert tilgang";
$terms_li_2 = "Sende inn falsk eller villedende informasjon";
$terms_li_3 = "Bruke nettstedet til ulovlig økonomisk aktivitet";
$terms_li_4 = "Forstyrre nettstedets sikkerhet eller funksjonalitet";
$terms_li_5 = "Kopiere eller misbruke nettstedsinnhold uten tillatelse";
$terms_li_6 = "Forsøke å omgå samsvars- eller tekniske kontroller";
$terms_h2_ip = "Åndsverk";
$terms_p_ip_1 = "Nettstedets design, tekst, merkevarebygging, grensesnittelementer, grafikk, struktur og relatert materiale eies av eller er lisensiert til $site_name med mindre annet er oppgitt.";
$terms_p_ip_2 = "Brukere kan ikke reprodusere, distribuere, modifisere eller kommersielt utnytte nettstedets materiale uten passende autorisasjon.";
$terms_h2_liability = "Ansvarsbegrensning";
$terms_p_liab_1 = "I den grad gjeldende lov tillater det, skal ikke $site_name holdes ansvarlig for tap som oppstår fra handel med digitale eiendeler, markedsvolatilitet, tekniske problemer, tredjeparts plattformfeil, unøyaktige data, brukerbeslutninger eller tillit til nettstedsinnhold.";
$terms_p_liab_2 = "Brukere får tilgang til og bruker dette nettstedet på egen risiko.";
$terms_h2_changes = "Endringer i disse vilkårene";
$terms_p_changes_1 = "$site_name kan oppdatere disse vilkårene og betingelsene når som helst. Oppdaterte vilkår kan legges ut på denne siden.";
$terms_p_changes_2 = "Fortsatt bruk av nettstedet etter endringer betyr at brukere anerkjenner og godtar de oppdaterte vilkårene.";

// PRIVACY PAGE
$privacy_h1 = "Personvernerklæring";
$privacy_intro_1 = "$site_name respekterer brukernes personvern og er forpliktet til å håndtere personopplysninger ansvarlig, transparent og sikkert.";
$privacy_intro_2 = "Denne personvernerklæringen forklarer hvilken informasjon som kan samles inn når brukere besøker dette nettstedet, sender inn kontaktskjemaer, ber om tilgang eller samhandler med $site_name innhold og plattformrelatert kommunikasjon.";
$privacy_h2_collect = "Informasjon vi kan samle inn";
$privacy_p_collect_1 = "$site_name kan samle inn informasjon som frivillig sendes inn av brukere via nettsideskjemaer eller kommunikasjonskanaler.";
$privacy_li_fname = "Fornavn";
$privacy_li_lname = "Etternavn";
$privacy_li_email = "E-postadresse";
$privacy_li_phone = "Telefonnummer";
$privacy_li_inquiry = "Innsendte forespørselsdetaljer";
$privacy_li_technical = "Grunnleggende tekniske bruksdata for nettstedet";
$privacy_h2_use = "Hvordan vi bruker informasjon";
$privacy_p_use_1 = "Informasjon kan brukes til å svare på brukerforespørsler, gi informasjon om plattformtilgang, forbedre nettstedets funksjonalitet, opprettholde sikkerhet og kommunisere relevante oppdateringer om $site_name.";
$privacy_p_use_2 = "Vi kan også bruke aggregerte eller ikke-identifiserende data for å analysere nettstedets ytelse, forbedre innholdsstrukturen og bedre forstå hvordan besøkende samhandler med sidene våre.";
$privacy_h2_comm = "Kommunikasjonsformål";
$privacy_p_comm_1 = "Hvis en bruker sender inn kontaktinformasjon, kan $site_name bruke den informasjonen til å svare på forespørselen, gi onboarding-detaljer, avklare forespørsler om plattformtilgang eller dele relevant tjenesteinformasjon.";
$privacy_p_comm_2 = "Brukere kan be om at kommunikasjonen avsluttes der det er aktuelt.";
$privacy_h2_cookies = "Informasjonskapsler og tekniske data";
$privacy_p_cookies_1 = "Dette nettstedet kan bruke informasjonskapsler (cookies), analyseverktøy og lignende teknologier for å forbedre nettleseropplevelsen, overvåke ytelsen og støtte nettstedets sikkerhet.";
$privacy_p_cookies_2 = "Tekniske data kan omfatte enhetstype, nettlesertype, operativsystem, sideinteraksjoner, henvisningsinformasjon og generell bruksstatistikk.";
$privacy_h2_protection = "Databeskyttelsestiltak";
$privacy_p_prot_1 = "$site_name bruker rimelige administrative, tekniske og organisatoriske sikkerhetstiltak for å beskytte innsendt informasjon mot uautorisert tilgang, misbruk, tap eller avsløring.";
$privacy_p_prot_2 = "Ingen nettsystemer kan imidlertid garantere absolutt sikkerhet. Brukere bør unngå å sende inn sensitiv finansiell informasjon, private lommeboknøkler, passord, børslegitimasjon eller konfidensielle kontotilgangsdetaljer via offentlige nettstedskjemaer.";
$privacy_h2_third = "Tredjeparts tjenesteleverandører";
$privacy_p_third_1 = "$site_name kan bruke tredjepartsleverandører for hosting, analyser, kommunikasjon, sikkerhet, e-postlevering, CRM-behandling eller teknisk infrastruktur.";
$privacy_p_third_2 = "Disse leverandørene kan behandle begrenset informasjon bare der det er nødvendig for å støtte nettstedets funksjonalitet og relaterte tjenester.";
$privacy_google_choices = 'Du kan administrere hvordan Google bruker informasjon fra besøkene dine gjennom <a href="http://www.google.com/settings/ads" target="_blank" rel="noopener">Google Ads-innstillinger</a>, velge bort interessebasert annonsering ved å bruke <a href="https://tools.google.com/dlpage/gaoptout" target="_blank" rel="noopener">Google Analytics Opt-out Browser Add-on</a>, eller gjennomgå <a href="https://www.google.com/intl/no/policies/privacy/" target="_blank" rel="noopener">Googles personvernregler</a> for flere detaljer.';
$privacy_h2_sale = "Ingen salg av personlig informasjon";
$privacy_p_sale_1 = "$site_name har ikke til hensikt å selge personlig informasjon sendt inn via dette nettstedet.";
$privacy_p_sale_2 = "Informasjon kan kun deles når det er nødvendig for operasjonelle formål, overholdelse av lover, brukerkommunikasjon, svindelforebygging eller tjenesterelatert behandling.";
$privacy_h2_retention = "Datalagring";
$privacy_p_retention = "Personopplysninger kan lagres så lenge det er nødvendig for å svare på henvendelser, vedlikeholde forretningsregistre, overholde juridiske forpliktelser, forbedre plattformkommunikasjon eller støtte sikkerhet og svindelforebygging.";
$privacy_h2_rights = "Brukerrettigheter";
$privacy_p_rights = "Avhengig av gjeldende lov, kan brukere ha rettigheter knyttet til tilgang, retting, sletting, innvending, begrensning eller portabilitet av personopplysninger.";
$privacy_h2_intl = "Internasjonal bruk";
$privacy_p_intl_1 = "$site_name kan nås av brukere fra forskjellige jurisdiksjoner. Personvernregler kan variere avhengig av sted.";
$privacy_p_intl_2 = "Ved å bruke denne nettsiden, erkjenner brukere at informasjon kan bli behandlet i samsvar med denne personvernerklæringen og gjeldende operasjonelle krav.";
$privacy_h2_policy_updates = "Politikkoppdateringer";
$privacy_p_updates_1 = "$site_name kan oppdatere denne personvernerklæringen med jevne mellomrom for å reflektere endringer i lov, teknologi, interne prosedyrer eller nettstedsfunksjonalitet.";
$privacy_p_updates_2 = "Fortsatt bruk av nettstedet etter oppdateringer betyr at brukere anerkjenner den reviderte personvernerklæringen.";

// COOKIES PAGE
$cookies_h1 = "Informasjonskapsler (Cookie Policy)";
$cookies_intro_1 = "Denne retningslinjen for informasjonskapsler forklarer hvordan $site_name bruker informasjonskapsler, analyseteknologier og lignende sporingsverktøy når brukere får tilgang til eller samhandler med dette nettstedet.";
$cookies_intro_2 = "Informasjonskapsler bidrar til å forbedre nettstedets funksjonalitet, forbedre brukeropplevelsen, analysere ytelse og støtte sikkerhetsrelaterte prosesser.";
$cookies_intro_3 = "Ved å fortsette å bruke dette nettstedet, erkjenner brukerne at visse informasjonskapsler og relaterte teknologier kan brukes i samsvar med disse retningslinjene.";
$cookies_h2_what = "Hva er informasjonskapsler?";
$cookies_p_what_1 = "Informasjonskapsler er små tekstfiler som lagres på en brukers enhet når man besøker et nettsted.";
$cookies_p_what_2 = "Disse filene kan inneholde informasjon som hjelper nettsteder med å gjenkjenne returnerende besøkende, huske preferanser, forbedre navigeringen og måle nettstedets ytelse.";
$cookies_h2_why = "Hvorfor vi bruker informasjonskapsler";
$cookies_p_why_1 = "$site_name kan bruke informasjonskapsler og lignende teknologier til flere formål.";
$cookies_li_1 = "Opprettholde nettstedets funksjonalitet";
$cookies_li_2 = "Forbedre brukeropplevelsen";
$cookies_li_3 = "Huske brukerpreferanser";
$cookies_li_4 = "Forstå besøkendes oppførsel";
$cookies_li_5 = "Måle nettstedets ytelse";
$cookies_li_6 = "Identifisere tekniske problemer";
$cookies_li_7 = "Støtte nettstedets sikkerhet";
$cookies_li_8 = "Forhindre overgrep og misbruk";
$cookies_h2_essential = "Nødvendige informasjonskapsler";
$cookies_p_ess_1 = "Visse informasjonskapsler er nødvendige for at nettsiden skal fungere korrekt.";
$cookies_p_ess_2 = "Disse informasjonskapslene bidrar til å opprettholde sikkerhet, navigasjonsfunksjonalitet, øktadministrasjon og andre kjerneoperasjoner på nettstedet.";
$cookies_p_ess_3 = "Uten viktige informasjonskapsler kan det hende at deler av nettstedet ikke fungerer som det skal.";
$cookies_h2_analytics = "Analyseinformasjonskapsler";
$cookies_p_an_1 = "Analyseinformasjonskapsler hjelper oss å forstå hvordan besøkende samhandler med nettstedets innhold.";
$cookies_p_an_2 = "Disse teknologiene kan samle inn informasjon om sidebesøk, navigasjonsmønstre, enhetstyper, nettleserkonfigurasjoner og generelle bruksmålinger for nettsteder.";
$cookies_p_an_3 = "Analyseinformasjon samles vanligvis sammen og brukes til å forbedre nettstedets ytelse og brukeropplevelse.";
$cookies_h2_functional = "Funksjonelle informasjonskapsler";
$cookies_p_fun_1 = "Funksjonelle informasjonskapsler kan brukes til å huske innstillinger og preferanser valgt av brukere.";
$cookies_p_fun_2 = "Eksempler kan omfatte språkpreferanser, grensesnittinnstillinger, visningsalternativer eller andre tilpasningsfunksjoner.";
$cookies_h2_third = "Tredjepartsteknologier";
$cookies_p_third_1 = "$site_name kan bruke tredjeparts tjenesteleverandører, analyseplattformer, annonseringsteknologier eller overvåkingsverktøy for ytelse.";
$cookies_p_third_2 = "Disse tredjepartene kan plassere sine egne informasjonskapsler eller sporingsteknologier underlagt deres individuelle personvernregler.";
$cookies_p_third_3 = "$site_name kontrollerer ikke tredjeparts praksis for informasjonskapsler og anbefaler at du gjennomgår personverndokumentasjonen til eksterne leverandører der det er aktuelt.";
$cookies_h2_manage = "Administrere informasjonskapsler";
$cookies_p_manage_1 = "De fleste moderne nettlesere lar brukere administrere, begrense eller slette informasjonskapsler gjennom nettleserinnstillinger.";
$cookies_p_manage_2 = "Brukere kan velge å deaktivere informasjonskapsler helt, selv om enkelte nettstedsfunksjoner kanskje ikke fungerer etter hensikten etter å ha gjort det.";
$cookies_p_manage_3 = "Nettleserinnstillinger gir vanligvis muligheter til å:";
$cookies_li_manage_1 = "Blokkere alle informasjonskapsler";
$cookies_li_manage_2 = "Slette eksisterende informasjonskapsler";
$cookies_li_manage_3 = "Motta varsler om informasjonskapsler";
$cookies_li_manage_4 = "Begrense spesifikke kategorier for informasjonskapsler";
$cookies_h2_data = "Databeskyttelse";
$cookies_p_data = "Informasjonskapselrelatert informasjon kan behandles i samsvar med vår personvernerklæring og gjeldende databeskyttelseslover.";
$cookies_h2_policy_updates = "Politikkoppdateringer";
$cookies_p_updates_1 = "$site_name kan oppdatere denne retningslinjen for informasjonskapsler fra tid til annen for å gjenspeile teknologiske endringer, juridiske krav eller operasjonelle forbedringer.";
$cookies_p_updates_2 = "Fortsatt bruk av nettstedet etter oppdateringer utgjør en anerkjennelse av den reviderte policyen.";

// AML PAGE
$aml_h1 = "AML-policy";
$aml_intro_1 = "$site_name anerkjenner viktigheten av bevissthet rundt tiltak mot hvitvasking av penger (AML), finansiell integritet og ansvarlig deltakelse i markeder for digitale eiendeler.";
$aml_intro_2 = "Denne AML-policyen forklarer de generelle prinsippene $site_name anvender for å motvirke ulovlig bruk av kryptorelaterte teknologier, mistenkelig finansiell aktivitet, svindel, omgåelse av sanksjoner, terrorfinansiering og annen forbudt atferd.";
$aml_h2_purpose = "Formålet med denne policyen";
$aml_p_purpose_1 = "Formålet med denne policyen er å etablere et ansvarlig rammeverk for hvordan $site_name tilnærmer seg bevissthet rundt hvitvasking av penger innenfor økosystemet for digitale eiendeler.";
$aml_p_purpose_2 = "Kryptovalutamarkeder kan innebære grenseoverskridende aktivitet, desentralisert infrastruktur, tredjeparts børser og eksterne likviditetsleverandører. Ettersom teknologien for digitale eiendeler utvikler seg, utvikler også risikoen knyttet til ulovlig finansiell atferd seg.";
$aml_h2_awareness = "AML-bevissthet og forpliktelse";
$aml_p_aware_1 = "$site_name er forpliktet til å opprettholde et miljø som motvirker ulovlig aktivitet.";
$aml_p_aware_2 = "Selv om $site_name kan tilby infrastruktur for markedsinnsikt, analytiske verktøy, AI-signaler eller pedagogiske ressurser, lagrer ikke nettstedet direkte brukermidler, behandler fiat-transaksjoner eller opererer som en depotbørs for kryptovaluta.";
$aml_p_aware_3 = "Eventuelle tredjepartsplattformer, meglere eller børser som er referert til på dette nettstedet, er uavhengig ansvarlige for sine egne retningslinjer for overholdelse, prosedyrer for hvitvasking (AML), og identitetsbekreftelse (KYC - Know Your Customer).";
$aml_h2_prohibited = "Forbudt aktivitet";
$aml_p_prohibited_1 = "Brukere har strengt forbud mot å bruke $site_name-nettstedet, plattformbeskrivelser, analyseverktøy eller kommunikasjonskanaler til noe ulovlig formål.";
$aml_p_prohibited_2 = "Forbudt aktivitet inkluderer, men er ikke begrenset til:";
$aml_li_prohibited_1 = "Hvitvasking av penger eller forsøk på å skjule opprinnelsen til ulovlige midler";
$aml_li_prohibited_2 = "Terrorfinansiering eller støtte til ulovlige organisasjoner";
$aml_li_prohibited_3 = "Omgåelse av internasjonale sanksjoner eller embargoer";
$aml_li_prohibited_4 = "Svindel, svindelvirksomhet, phishing eller tyveri av digitale eiendeler";
$aml_li_prohibited_5 = "Markedsmanipulasjon, spoofing eller wash-handel";
$aml_li_prohibited_6 = "Bruk av plattformen til å legge til rette for ulovlig handel på det mørke nettet (darknet)";
$aml_li_prohibited_7 = "Sende inn falsk, forfalsket eller stjålet identitetsinformasjon";
$aml_h2_monitoring = "Systemovervåking";
$aml_p_monitoring_1 = "$site_name kan bruke automatiserte overvåkingssystemer, sikkerhetsinfrastruktur eller analytiske verktøy for å beskytte nettstedets integritet og identifisere uvanlig mønsteradferd.";
$aml_p_monitoring_2 = "Hvis mistenkelig aktivitet oppdages, forbeholder $site_name seg retten til å begrense nettstedstilgang, blokkere kommunikasjon eller forhindre interaksjon med plattformrelaterte skjemaer.";
$aml_h2_third_party = "Tredjeparts AML-krav";
$aml_p_tp_1 = "Når brukere samhandler med eksterne kryptovalutabørser, likviditetsleverandører eller handelsplattformer referert av $site_name, kan de være underlagt strenge AML- og KYC-prosedyrer håndhevet av disse tredjepartene.";
$aml_p_tp_2 = "Brukere bør forvente å gi identifikasjonsdokumenter, bevis på adresse eller kilde til midler-deklarasjoner når de åpner kontoer hos regulerte finansinstitusjoner eller digitale aktivaleverandører.";
$aml_p_tp_3 = "$site_name har ingen kontroll over tredjeparts overholdelseskrav og kan ikke omgå dem på vegne av brukere.";
$aml_h2_reporting = "Rapportering av mistenkelig aktivitet";
$aml_p_reporting_1 = "$site_name kan rapportere mistenkelig oppførsel, identitetstyveri, svindel eller ulovlig nettstedsbruk til relevante rettshåndhevende organer, regulatoriske myndigheter eller cybersikkerhetsorganisasjoner der det kreves av loven.";
$aml_p_reporting_2 = "I tilfelle en offisiell juridisk forespørsel fra autoriserte byråer, vil $site_name samarbeide som kreves av gjeldende lover.";
$aml_h2_updates = "Politikkoppdateringer";
$aml_p_updates_1 = "$site_name kan oppdatere denne AML-policyen for å gjenspeile endringer i regulatoriske forventninger, industristandarder eller teknologi for overholdelse av digitale eiendeler.";
$aml_p_updates_2 = "Brukere oppfordres til å gjennomgå denne policyen med jevne mellomrom for å forstå hvordan $site_name tilnærmer seg bevissthet rundt hvitvasking av penger i kryptovalutaområdet.";

// RISK PAGE
$risk_h1 = "Risikoavsløring for kryptohandel";
$risk_intro_1 = "Handel med kryptovalutaer og investering i digitale eiendeler medfører en høy grad av risiko. Markedet for digitale eiendeler er svært spekulativt, komplekst og i rask endring.";
$risk_intro_2 = "Denne risikoavsløringen forklarer noen av de primære risikoene knyttet til kryptovalutamarkeder, AI-analytiske verktøy og bruk av plattformer for markedsinnsikt som $site_name.";
$risk_intro_3 = "Brukere bør lese og forstå disse risikoene før de tar noen økonomiske beslutninger.";
$risk_h2_volatility = "Ekstrem markedsvolatilitet";
$risk_p_volatility_1 = "Kryptovalutapriser er svært volatile. Verdien av digitale eiendeler kan øke eller reduseres betydelig innen svært korte tidsrammer.";
$risk_p_volatility_2 = "Tidligere resultater er ingen indikator på fremtidige resultater. Brukere kan tape hele eller en betydelig del av den investerte kapitalen.";
$risk_p_volatility_3 = "Store prisbevegelser kan oppstå på grunn av markedsstemning, regulatoriske nyheter, makroøkonomiske faktorer eller plutselige endringer i likviditet.";
$risk_h2_no_guarantees = "Ingen garantier for profitt";
$risk_p_guarantees_1 = "Ingenting på $site_name, i AI-signaler, plattformbeskrivelser eller markedsanalyser skal tolkes som en garanti for profitt, finansiell suksess eller beskyttelse mot tap.";
$risk_p_guarantees_2 = "Alt markedsengasjement gjøres på brukerens eget ansvar.";
$risk_h2_ai_limitations = "Begrensninger for AI og prediktive modeller";
$risk_p_ai_1 = "$site_name bruker kunstig intelligens, markedsdatastrømmer og analytiske modeller. Imidlertid har all teknologi iboende begrensninger.";
$risk_p_ai_2 = "AI-signaler er basert på historiske mønstre, sannsynligheter og statistiske evalueringer. De kan ikke forutsi fremtiden med sikkerhet.";
$risk_p_ai_3 = "Maskinlæringsmodeller kan feiltolke unormale markedsforhold, unike hendelser eller uforutsigbar menneskelig oppførsel. Brukere bør aldri stole utelukkende på automatiserte signaler uten å foreta sin egen uavhengige vurdering.";
$risk_h2_liquidity = "Likviditetsrisiko";
$risk_p_liquidity_1 = "Likviditet refererer til hvor enkelt en eiendel kan kjøpes eller selges uten å påvirke prisen nevneverdig.";
$risk_p_liquidity_2 = "Noen kryptovalutaer, tokeniserte eiendeler eller spesifikke markeder kan lide av lav likviditet. Dette kan gjøre det vanskelig eller umulig å utføre handler til ønskede priser, noe som resulterer i alvorlig glidning (slippage) eller urealiserte tap.";
$risk_h2_tech = "Teknologi og cyberrisiko";
$risk_p_tech_1 = "Kryptovalutatransaksjoner er avhengig av blokkjedeteknologi, smarte kontrakter, lommebokprogramvare og kryptografisk sikkerhet.";
$risk_p_tech_2 = "Risikoer inkluderer programvarefeil, nettverksbelastning, hacking, phishing-angrep, feil ved overføring av midler og tap av private nøkler.";
$risk_p_tech_3 = "Transaksjoner utført på blokkjeden er generelt irreversible. Tapte midler på grunn av feil eller tyveri kan kanskje aldri gjenopprettes.";
$risk_h2_regulatory = "Regulatorisk risiko";
$risk_p_reg_1 = "Det regulatoriske landskapet for digitale eiendeler varierer fra land til land og utvikler seg stadig.";
$risk_p_reg_2 = "Nye lover, myndighetstiltak eller skattepolitikk kan plutselig påvirke den juridiske statusen, verdien eller brukervennligheten til bestemte kryptovalutaer.";
$risk_p_reg_3 = "Brukere er ansvarlige for å overholde lokale lover, rapportere skatter og sikre at deres deltakelse i kryptomarkeder er lovlig i deres jurisdiksjon.";
$risk_h2_third_party = "Risiko med tredjepartsbørser";
$risk_p_tp_1 = "$site_name kan referere til eller tilby markedsinnsikt for aktivitet på tredjeparts kryptovalutabørser.";
$risk_p_tp_2 = "Disse børsene er uavhengige enheter. De kan oppleve nedetid, fryse kontoer, endre avgiftsstrukturer, lide sikkerhetsbrudd eller bli utsatt for regulatoriske stenginger.";
$risk_p_tp_3 = "$site_name er ikke ansvarlig for tap, skader eller tvister som oppstår fra interaksjon med tredjeparts handelsplattformer, meglere eller tjenesteleverandører.";
$risk_h2_leverage = "Risiko ved margin- og giring (leverage)";
$risk_p_leverage_1 = "Hvis brukere velger å handle med giring eller margin på tredjepartsbørser, multipliseres risikoen. Giring kan forsterke både fortjeneste og tap.";
$risk_p_leverage_2 = "Et lite prisfall kan resultere i avvikling av brukerens hele marginkonto. $site_name oppfordrer brukere til å være ekstremt forsiktige med lånte midler.";
$risk_h2_assessment = "Personlig økonomisk vurdering";
$risk_p_assessment_1 = "Før bruk av plattformbeskrivelser, markedsdata eller analytiske signaler knyttet til $site_name, bør brukerne nøye vurdere sin egen økonomiske situasjon, risikotoleranse og investeringserfaring.";
$risk_p_assessment_2 = "Invester aldri penger du ikke har råd til å tape.";
$risk_p_assessment_3 = "Hvis du er i tvil om involvering i digitale eiendeler, søk uavhengig råd fra en sertifisert finansiell profesjonell før du fortsetter.";

// EXCHANGES PAGE
$exchanges_h1 = "Støttede børser";
$exchanges_intro_1 = "Kryptovalutamarkedet opererer på tvers av et desentralisert nettverk av likviditetsleverandører, handelsplattformer og digitale aktivabørser. For å generere nøyaktig markedsinnsikt, kan $site_name sin AI-infrastruktur overvåke data fra ulike børskilder.";
$exchanges_intro_2 = "Denne siden forklarer typene børser og markedsdata som kan analyseres av plattformen for å gi brukerne et omfattende syn på kryptovalutaøkosystemet.";
$exchanges_h2_tier_1 = "Kryptovalutabørser i toppklasse (Tier-1)";
$exchanges_p_tier1_1 = "Børser med høyt volum og dyp likviditet er avgjørende for å forstå bredere markedstrender.";
$exchanges_p_tier1_2 = "AI-systemer overvåker vanligvis disse store plattformene for å spore momentum, oppdage store kapitalstrømmer (hvalaktivitet) og analysere prisoppdagelse for store eiendeler som Bitcoin og Ethereum.";
$exchanges_p_tier1_3 = "Data fra Tier-1-børser danner ofte grunnlaget for pålitelige markedssignaler på grunn av deres betydelige innvirkning på globale kryptovalutapriser.";
$exchanges_h2_derivatives = "Markeder for derivater og futures";
$exchanges_p_deriv_1 = "Kryptovalutaderivater, inkludert evigvarende futures og opsjoner, spiller en betydelig rolle i moderne markedsdynamikk.";
$exchanges_p_deriv_2 = "$site_name analytiske modeller kan vurdere åpen interesse, finansieringsrater, avviklingsdata og giring (leverage) på tvers av derivatbørser.";
$exchanges_p_deriv_3 = "Overvåking av disse parameterne hjelper AI med å identifisere potensielle volatilitetstopper, muligheter for 'short squeeze' eller perioder med forhøyet markedsrisiko forårsaket av overgiring.";
$exchanges_h2_dex = "Desentraliserte børser (DEX-er)";
$exchanges_p_dex_1 = "Desentralisert finans (DeFi) har introdusert nye likviditetsmodeller gjennom automatiserte market makers (AMM-er) og on-chain handelsprotokoller.";
$exchanges_p_dex_2 = "I motsetning til tradisjonelle børser, opererer DEX-er direkte på blokkjedenettverk som Ethereum, Solana eller Binance Smart Chain.";
$exchanges_p_dex_3 = "Nettstedets plattform kan integrere on-chain-beregninger for å analysere DeFi-likviditet, migrasjoner av smarte kontrakter, token-byttevolum og nye markedstrender som oppstår før de når sentraliserte børser.";
$exchanges_h2_fiat = "Plattformer med Fiat-til-Krypto ramper";
$exchanges_p_fiat_1 = "Børser som legger til rette for store volumer av konverteringer mellom tradisjonell valuta (fiat) og kryptovaluta, kan gi tidlige signaler om detaljhandel og institusjonell kapital som kommer inn i eller forlater markedet.";
$exchanges_p_fiat_2 = "Ved å overvåke bredere trender i kapitalinnstrømning, forsøker systemet å måle det samlede makroøkonomiske sentimentet mot digitale eiendeler på ethvert gitt tidspunkt.";
$exchanges_h2_api = "API og dataaggregering";
$exchanges_p_api_1 = "$site_name fungerer primært som en informasjonsinfrastruktur. Teknologien er designet for å behandle eksterne datastrømmer gjennom API-er (Application Programming Interfaces) og prisaggregatorer.";
$exchanges_p_api_2 = "Den nøyaktige listen over aktivt overvåkede børser kan endres dynamisk basert på API-tilgjengelighet, markedskrav, datakvalitet og AI-systemoptimalisering.";
$exchanges_h2_disclaimer = "Uavhengige tredjepartsplattformer";
$exchanges_p_disc_1 = "Alle referanser til børstyper, likviditetsarenaer eller spesifikke plattformer er utelukkende for analytiske eller beskrivende formål.";
$exchanges_p_disc_2 = "$site_name godkjenner ikke, representerer ikke eller har ikke direkte tilknytning til spesifikke tredjepartsbørser.";
$exchanges_p_disc_3 = "Brukere forventes å utføre sin egen due diligence og vurdere de regulatoriske og sikkerhetsmessige risikoene uavhengig før de åpner kontoer, overfører midler eller utfører handler på eksterne handelsplattformer.";

// --- Completing AML / Risk Disclosure / Supported Exchanges / Risk Warning pages ---
$aml_h2_responsible = "Ansvarlig bruk av digital aktivateknologi";
$aml_p_resp_1 = "Brukere forventes å samhandle med $site_name og eventuelle relaterte digitale aktivatjenester på en ansvarlig, lovlig måte og i samsvar med gjeldende regler.";
$aml_p_resp_2 = "$site_name støtter eller oppfordrer ikke bruk av kryptomarkeder, handelssystemer, automatiserte teknologier eller analyseverktøy til ulovlige formål.";
$aml_li_1 = "Hvitvasking av penger";
$aml_li_2 = "Finansiering av terrorisme";
$aml_li_3 = "Bedrageri eller økonomisk villedning";
$aml_li_4 = "Omgåelse av sanksjoner";
$aml_li_5 = "Markedsmanipulasjon";
$aml_li_6 = "Bruk av stjålne midler eller kompromitterte kontoer";
$aml_li_7 = "Enhver aktivitet som er forbudt etter gjeldende lov";
$aml_h2_exchange = "Overholdelse hos tredjeparts børser";
$aml_p_ex_1 = "$site_name kan referere til, samhandle med eller tilby analytisk infrastruktur relatert til tredjeparts digitale aktivaplattformer eller likviditetsmiljøer.";
$aml_p_ex_2 = "Tredjeparts børser, depotmottakere, betalingsformidlere og tjenesteleverandører kan anvende sine egne overholdelsesprosedyrer, inkludert identitetsverifisering, transaksjonsovervåking, sanksjonssjekk, kontobegrensninger, kontroll av midlers opprinnelse eller ytterligere verifiseringskrav.";
$aml_h2_user_responsibility = "Brukeransvar";
$aml_p_user_1 = "Brukere er ansvarlige for å sikre at deres aktivitet er lovlig på deres sted og i samsvar med eventuelle forpliktelser pålagt av relevante tilsynsmyndigheter, børser, finansinstitusjoner eller tjenesteleverandører.";
$aml_p_user_2 = "Brukere skal ikke forsøke å skjule eierskap, kamuflere opprinnelsen til transaksjoner, oppgi falsk informasjon, omgå verifiseringsprosesser eller bruke digital aktivainfrastruktur på en måte som kan anses som mistenkelig eller ulovlig.";
$aml_h2_suspicious = "Mistenkelig aktivitet";
$aml_p_suspicious = "Mistenkelig aktivitet kan omfatte atferd som virker inkonsistent med normal bruk, forsøk på å misbruke handelssystemer, gjentatt innsending av villedende informasjon, involvering i begrensede jurisdiksjoner, eller aktivitet knyttet til bedrageri, ulovlige midler eller forbudte tjenester.";
$aml_h2_evasion = "Ingen omgåelse eller unndragelse";
$aml_p_evasion = "Brukere må ikke forsøke å omgå overholdelseskontroller, tekniske begrensninger, identitetsverifiseringssystemer, geografiske begrensninger eller risikoovervåkingsprosesser.";
$aml_h2_policy_updates = "Oppdateringer av retningslinjer";

$risk_h2_no_guarantee = "Ingen garanterte resultater";
$risk_p_no_guarantee_1 = "$site_name garanterer ikke fortjeneste, investeringsavkastning, handelssuksess, signalnøyaktighet, uavbrutt tilgang eller positive økonomiske resultater.";
$risk_p_no_guarantee_2 = "Eventuelle eksempler, statistikk, grensesnittelementer, resultatmål, signalindikatorer eller markedssimuleringer vist på dette nettstedet er kun gitt for informasjons- og illustrasjonsformål.";
$risk_p_vol_1 = "Digitale aktivamarkeder er svært volatile. Priser kan påvirkes av likviditetsmangel, makroøkonomiske nyheter, regulatoriske endringer, børsavbrudd, blokkjedehendelser, investorstemning, giringsaktivitet eller markedsmanipulasjon.";
$risk_p_vol_2 = "Volatilitet kan føre til raske tap, plutselige prisgap, glipp (slippage), likvidasjonshendelser eller manglende evne til å utføre transaksjoner til forventede priser.";
$risk_h2_ai = "Begrensninger ved AI-signaler";
$risk_p_liq_1 = "Likviditet kan variere betydelig mellom børser og digitale aktiva. Enkelte markeder kan oppleve lav ordredybde, brede spreader, forsinket utførelse eller kraftige prisbevegelser i perioder med press.";
$risk_p_liq_2 = "Tredjeparts børser kan pålegge gebyrer, grenser, restriksjoner, kontogjennomganger, forsinkede uttak, handelsstopp eller geografiske begrensninger.";
$risk_h2_user_responsibility = "Brukeransvar";
$risk_p_user_1 = "Brukere er alene ansvarlige for å vurdere risiko, forstå gjeldende lover, gjennomgå sin økonomiske situasjon og ta selvstendige beslutninger.";
$risk_p_user_2 = "$site_name gir ikke personlig økonomisk, investerings-, juridisk, regnskaps- eller skatterådgivning.";
$risk_h2_advice = "Søk profesjonell rådgivning";
$risk_p_advice_1 = "Brukere bør rådføre seg med kvalifiserte fagpersoner før de tar viktige økonomiske beslutninger knyttet til kryptovaluta, handelssystemer, automatiserte teknologier eller digitale aktivainvesteringer.";
$risk_p_advice_2 = "Ved å bruke dette nettstedet erkjenner brukerne at de forstår risikoen forbundet med digitale aktivamarkeder og påtar seg ansvaret for sine egne beslutninger.";

$exchanges_h2_philosophy = "Filosofi for markedsdekning";
$exchanges_p_phil_1 = "I stedet for å stole på ett enkelt handelssted, er $site_name bygget rundt konseptet markedsomfattende analyse.";
$exchanges_p_phil_2 = "Kryptovalutaprising, likviditetsforhold, volatilitetsatferd og institusjonell aktivitet varierer ofte mellom børser. Ved å observere bredere markedsforhold kan analytiske modeller få ytterligere kontekst om nye trender og potensielle avvik.";
$exchanges_h2_spot = "Overvåking av spotmarkedet";
$exchanges_p_spot_1 = "Spotbørser representerer en betydelig del av global digital aktivaaktivitet.";
$exchanges_p_spot_2 = "Markedsintelligenssystemer kan evaluere spotmarkedsdata, inkludert:";
$exchanges_li_spot_1 = "Prisaktivitet";
$exchanges_li_spot_2 = "Likviditetsdybde";
$exchanges_li_spot_3 = "Ordrebokstruktur";
$exchanges_li_spot_4 = "Handelsvolum";
$exchanges_li_spot_5 = "Kjøp/salg-spreadatferd";
$exchanges_li_spot_6 = "Markedsubalanseforhold";
$exchanges_h2_deriv = "Derivatmarkeder";
$exchanges_h2_liquidity = "Likviditetsanalyse";
$exchanges_p_liq_1 = "Likviditet er fortsatt en av de viktigste faktorene som påvirker markedsstabilitet og utførelseskvalitet.";
$exchanges_p_liq_2 = "$site_name kan analysere likviditetsforhold på tvers av flere handelssteder for å identifisere:";
$exchanges_li_liq_1 = "Likviditetskonsentrasjon";
$exchanges_li_liq_2 = "Plutselig likviditetsuttrekning";
$exchanges_li_liq_3 = "Press på ordreboken";
$exchanges_li_liq_4 = "Markedsubalansehendelser";
$exchanges_li_liq_5 = "Unormal handelsatferd";
$exchanges_h2_availability = "Børstilgjengelighet";
$exchanges_p_avail_1 = "Børstilgjengelighet kan variere avhengig av geografisk plassering, jurisdiksjon, kontoberettigelse, regulatoriske krav og tekniske begrensninger.";
$exchanges_p_avail_2 = "Enkelte børser eller tjenester er kanskje ikke tilgjengelige for alle brukere og kan ha sine egne begrensninger, verifiseringskrav, gebyrer og driftsregler.";
$exchanges_h2_third = "Tredjepartsplattformer";
$exchanges_p_third_1 = "Enhver henvisning til børser, likviditetssteder, meglere, depotmottakere eller markedsleverandører gis utelukkende for informasjonsformål.";
$exchanges_p_third_2 = "$site_name eier ikke, driver ikke, kontrollerer ikke og garanterer ikke tjenestene til tredjeparts børser.";
$exchanges_p_third_3 = "Brukere forblir ansvarlige for å vurdere enhver børs, handelsplattform eller digital aktivatjeneste før bruk.";
$exchanges_h2_monitoring = "Kontinuerlig markedsovervåking";
$exchanges_p_mon_1 = "Kryptovalutamarkeder opererer kontinuerlig, ofte tjuefire timer i døgnet, syv dager i uken.";
$exchanges_p_mon_2 = "Ettersom markedsstrukturen utvikler seg, oppstår nye børser, likviditet flytter seg, og handelsaktiviteten endres.";
$exchanges_p_mon_3 = "$site_name søker kontinuerlig å opprettholde bevissthet om skiftende markedsforhold gjennom bred analytisk dekning av det digitale aktivaøkosystemet.";

$page_title_risk_warning = "Risikoadvarsel | $site_name";
$page_description_risk_warning = "Forstå risikoene ved automatisert kryptohandel med $site_name, inkludert markedsvolatilitet, utførelsesrisiko og regulatoriske hensyn.";
$risk_warning_breadcrumb_name = "Risikoadvarsel";
$risk_warning_title = "Risikoadvarsel";
$risk_warning_intro = "Å forstå risiko er det første steget mot trygg handel.";
$risk_warning_ai_heading = "Slik hjelper vårt AI-system med å håndtere risiko:";
$risk_warning_ai_1 = "<strong>Algoritmisk effektivitet og følelsesløs handel:</strong> Avanserte algoritmer analyserer markedssignaler for å utføre handler objektivt på optimale tidspunkter.";
$risk_warning_ai_2 = "<strong>Datadrevne strategier:</strong> Strategier er basert på verifiserte markedsmønstre og sanntidsanalyse i stedet for gjetning.";
$risk_warning_ai_3 = "<strong>Fleksible innstillinger og full kontroll:</strong> Juster risikoparametrene dine når som helst. Spor alle saldoer og handler transparent på dashbordet ditt, uten skjulte gebyrer og uten begrensninger på uttak.";
$risk_warning_disclaimer = "<strong>Ansvarsfraskrivelse:</strong> Handel innebærer alltid risiko. Automatiserte systemer (inkludert AI) garanterer ikke fortjeneste, kan svikte på grunn av programvarefeil eller uventede markedshendelser, og krever brukerovervåking. Tidligere resultater er ikke en indikasjon på fremtidige resultater. Denne plattformen tjener utelukkende informasjons- og markedsføringsformål og gir ikke økonomisk rådgivning.";
$risk_warning_s1_heading = "1. Generelle risikoer og risikoer i kryptovalutamarkedet";
$risk_warning_s1_intro = "Kryptovalutaer er svært volatile, spekulative aktiva som opererer 24/7 med minimalt regulatorisk tilsyn i de fleste jurisdiksjoner.";
$risk_warning_s1_1 = "Verdier kan svinge dramatisk over korte perioder, og kan potensielt føre til totalt tap av investert kapital.";
$risk_warning_s1_2 = "Markedsverdier kan påvirkes sterkt av regulatoriske endringer, teknisk utvikling, sikkerhetsbrudd eller bredere makroøkonomiske hendelser.";
$risk_warning_s1_3 = "Enkelte aktiva kan miste all verdi fullstendig. Invester kun midler du har råd til å tape.";
$risk_warning_s2_heading = "2. Risiko knyttet til utførelse, likviditet og giring";
$risk_warning_s2_1 = "<strong>Markedsvolatilitet og likviditet:</strong> Ekstreme prisbevegelser (10–20 %+ daglig) eller lav likviditet (spesielt i mindre mynter) kan føre til forsinkelser, plattformavbrudd og alvorlig glipp ved utførelse. Stop-loss-ordre kan ikke garantere tapsbegrensninger under ekstreme forhold.";
$risk_warning_s2_2 = "<strong>Risiko ved giring og margin:</strong> Girede produkter forsterker både gevinster og tap, noe som betyr at du kan tape mer enn ditt opprinnelige innskudd. Omtrent 70–80 % av private investorkontoer taper penger ved handel med girede produkter.";
$risk_warning_s3_heading = "3. Tekniske risikoer, cybersikkerhet og tredjepartsrisiko";
$risk_warning_s3_1 = "<strong>Tekniske faktorer:</strong> Nettbasert handel innebærer i seg selv risiko for internettavbrudd, maskinvare-/programvarefeil og utilgjengelighet av tjenesten.";
$risk_warning_s3_2 = "<strong>Cybersikkerhet:</strong> Kryptovalutakontoer er hyppige mål for phishing, skadevare og hacking. Transaksjoner er irreversible; kompromittering av legitimasjonen din kan føre til permanent tap.";
$risk_warning_s3_3 = "<strong>Tredjepartsplattformer:</strong> Dette nettstedet kan koble brukere til tredjepartsplattformer. Vi kontrollerer, godkjenner eller garanterer ikke deres sikkerhet, drift eller soliditet. Utfør alltid egen due diligence før du setter inn midler på eksterne plattformer.";
$risk_warning_s4_heading = "4. Regulatoriske, skattemessige og avsluttende bestemmelser";
$risk_warning_s4_1 = "<strong>Juridisk etterlevelse og skatt:</strong> Regulatoriske rammeverk varierer mye og endres raskt. Brukere er alene ansvarlige for å sikre at handelsaktiviteten deres overholder lokale lover og for å oppfylle sine egne skatteforpliktelser.";
$risk_warning_s4_2 = "<strong>Ingen fortjenestegaranti:</strong> Det finnes ingen \"trygg\" eller risikofri kryptohandel. Eventuelle avkastningstall eller resultateksempler er rent hypotetiske.";
$risk_warning_s4_3 = "<strong>Egnethet:</strong> Hvis du ikke fullt ut forstår risikoen, er avhengig av nødvendige midler, eller handler med lånte penger, er kryptohandel ikke egnet for deg. Rådfør deg med en uavhengig, lisensiert finansrådgiver hvis du er usikker.";
$risk_warning_contact = "<strong>Kontakt:</strong> Har du spørsmål om denne erklæringen eller ønsker å sende en henvendelse, kan du kontakte vårt offisielle kundestøtteteam via kontaktskjemaet på nettstedet vårt.";
$footer_risk_warning = "Risikoadvarsel";
