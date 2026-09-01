<?php
require __DIR__ . '/../lang.php';
$site_lang = 'it-IT';
$form_language = 'it'; // matches this page's own language, not the offer's global default

// ============================================================
// IT TRANSLATION OVERRIDES
// Identity/config vars ($site_name, $site_slug, $site_domain, $site_url, $app_price, $app_currency, $site_lang, $country_name, $country_flag_code, $privacy_last_update, $rating_value, $rating_count, $review_count, $form_country, $form_language, $form_phone_country, $form_only_countries, $review_1_author, $review_2_author, $review_3_author, $review_4_author, $quiz_consultant_name) are
// intentionally NOT overridden -- they stay exactly as inherited from the
// root lang.php.
// ============================================================

// Brand / Platform Variables

// Geo-language stats bar fallback content (used by the language-folder pages'
// own "stats" section; the fr/de/it/nl folders override these with native
// translations, the other 19 folders inherit this English fallback)
$stat_1_value = "4M+";
$stat_1_label = "Utenti registrati";
$stat_2_value = "98+";
$stat_2_label = "Paesi supportati";
$stat_3_value = "65+";
$stat_3_label = "Valute disponibili";
$stat_4_value = "24/7";
$stat_4_label = "Accesso alle transazioni";
$stat_5_value = "256-bit";
$stat_5_label = "Standard di crittografia";
$stat_6_value = "$500M+";
$stat_6_label = "Depositi totali dei clienti";

// Keitaro Form Integration Variables (defaults -- overwritten per-launch by
// generate_lang_files(); must stay valid on their own since nothing else in
// this file replaces them for a page that's ever served un-generated)

// 4 Verified Reviews (TZ Item 8)
$review_1_role = "Francia";
$review_1_text = "Ho iniziato con €500 solo per vedere come funzionava la piattaforma. Dopo circa tre settimane, il mio saldo era cresciuto fino a circa €1120. L'interfaccia è facile da usare e le analisi di mercato mi hanno aiutato a prendere decisioni migliori.";
$review_1_badge = "Rendimento Dichiarato +18,4%";

$review_2_role = "Germania";
$review_2_text = "In passato ho provato diverse piattaforme di trading, ma finora questa è la mia preferita. È facile da usare, gli strumenti sono davvero utili e nel complesso ho avuto un'esperienza molto positiva.";
$review_2_badge = "Rendimento Dichiarato +19,1%";

$review_3_role = "Italia";
$review_3_text = "Ciò che mi ha colpito di più è quanto tutto sia intuitivo. La registrazione è stata rapida, la dashboard è ben organizzata e la piattaforma ha reso il trading molto più comodo per me.";
$review_3_badge = "Rendimento Dichiarato +16,8%";

$review_4_role = "Paesi Bassi";
$review_4_text = "Non avevo alcuna esperienza di trading precedente, quindi ho iniziato con €750. Nel giro di un mese ho raggiunto poco più di €1,765 seguendo gli strumenti e le risorse formative. È stato un ottimo modo per costruire fiducia in me stesso.";
$review_4_badge = "Rendimento Dichiarato +18,0%";

$review_verified_label = "Utente Verificato";
$reviews_section_title = "Recensioni su $site_name";
$reviews_badge_trustworthy = "Affidabile";
$reviews_summary_rating = "4,7";
$reviews_summary_count = "189";
$reviews_summary_desc = "Una piattaforma di trading potente e intuitiva con strumenti automatizzati robusti, analisi in tempo reale e risorse didattiche complete.";

// CONSULTANT / CHAT QUIZ (TZ Item 13)
$quiz_consultant_role = "Responsabile Onboarding";
$quiz_text_welcome = "Ciao! Sono $quiz_consultant_name di $site_name. Ottima notizia: sei già pre-qualificato. Configuriamo insieme il tuo account e iniziamo a fare trading.";
$quiz_text_q1 = "Per confermare le condizioni di trading disponibili nella tua zona, ti chiediamo di confermare il tuo paese: $country_name";
$quiz_text_a1_yes = "Sì, questa è la mia posizione attuale";
$quiz_text_a1_no = "No";
$quiz_text_q2 = "Seleziona la tua fascia d'età per permetterci di personalizzare la configurazione del tuo account:";
$quiz_text_q3 = "Hai un conto bancario o una carta attivi per finanziare il tuo account di trading?";
$quiz_text_a3_yes = "Sì, ho un conto attivo disponibile";
$quiz_text_a3_no = "Non disponibile al momento";
$quiz_text_q4 = "Indicaci la tua principale fonte di reddito, così possiamo suggerirti un piano di deposito adatto al tuo budget:";
$quiz_text_a4_1 = "Reddito da lavoro dipendente / Autonomo";
$quiz_text_a4_2 = "Risparmi / Investimenti personali";
$quiz_text_a4_3 = "Altre fonti";
$quiz_text_q5 = "Ultimo passaggio: uno dei nostri consulenti ti chiamerà per guidarti nella configurazione del tuo account tra le 11:00 e le 20:00. Questo orario ti va bene?";
$quiz_text_a5_yes = "Sì, questa fascia oraria va bene";
$quiz_text_a5_no = "Richiedi un contatto prioritario immediato";
$quiz_text_loader = "Configurazione del tuo profilo di trading in corso...";
$quiz_text_final_ttl = "Tutto pronto! 🎉 Completa la registrazione qui sotto per attivare il tuo account:";
$quiz_text_processing = "Convalida dei dati in corso...";
$quiz_text_typing = "sta scrivendo una risposta...";
$quiz_placeholder_fname = "Nome";
$quiz_placeholder_lname = "Cognome";
$quiz_placeholder_email = "Indirizzo email";
$quiz_placeholder_phone = "Numero di telefono";
$quiz_btn_submit = "Crea il mio account";

// METADATA (TZ Item 10)
$home_meta_title = "$site_name — Piattaforma di Trading | Sito Ufficiale";
$home_meta_description = "Il sito ufficiale di $site_name offre una piattaforma di trading di criptovalute sicura, con strumenti di trading avanzati, analisi di mercato in tempo reale e un'esperienza semplice e intuitiva per i trader.";

// NAVIGATION & HEADER (TZ Item 3, 12)
$nav_about = "Chi Siamo";
$nav_how = "Come Funziona";
$nav_why = "Perché Fare Trading";
$nav_faq = "FAQ";
$nav_contacts = "Contatti";
$nav_signin = "Accedi";
$nav_signup = "Registrati";

$mobnav_home = "Home";
$mobnav_product = "Prodotto";
$mobnav_offer = "Offerta";
$mobnav_contact = "Contattaci";
$mobnav_faq = "FAQ";
$mobnav_signup = "Registrati";

// HERO SECTION
$hero_h1 = "Piattaforma $site_name";
$hero_text = "La piattaforma ufficiale di trading di criptovalute $site_name, pensata per rendere le criptovalute semplici come l'online banking di tutti i giorni, che tu sia un trader alle prime armi o un investitore di lunga data.";

// LEAD FORM
$form_fname_placeholder = "Nome";
$form_lname_placeholder = "Cognome";
$form_email_placeholder = "Inserisci la tua email";
$form_phone_placeholder = "Numero di Telefono";
$form_btn_submit = "Registrati";
$form_disclaimer_text = "Inserendo i tuoi dati personali e cliccando sul pulsante, accetti l'<a class='link link-primary' href='privacy.php'>Informativa sulla Privacy</a> e i <a class='link link-primary' href='conditions.php'>Termini di Utilizzo</a> di questo sito.";

// SECURITY BADGES
$badge_ssl = "SSL a 256 Bit";
$badge_payments = "Pagamenti Sicuri";
$badge_2fa = "2FA";
$badge_cold_storage = "98% Cold Storage";
$badge_regulated = "Regolamentato";
$badge_traders_trust = "Oltre 4M di Trader si Fidano";

// SAFE SECTION (Vos fonds sont en sécurité)
$safe_title = "<mark>I Tuoi Fondi Sono Sicuri</mark> con $site_name";
$safe_desc = "Crittografia di livello bancario, processori di pagamento verificati e 98% di cold storage — il tuo denaro è protetto in ogni fase.";

$safe_item1_title = "Fornitori di Pagamento Verificati";
$safe_item1_desc = "I pagamenti vengono elaborati esclusivamente tramite fornitori certificati conformi agli standard di sicurezza internazionali. I dati della tua carta non vengono mai memorizzati sulla nostra piattaforma.";
$safe_item1_badge = "Pagamenti Sicuri";

$safe_item2_title = "Autenticazione a Due Fattori (2FA)";
$safe_item2_desc = "Aggiungi un ulteriore livello di protezione al tuo account con password monouso basate sul tempo via SMS o Google Authenticator.";
$safe_item2_badge = "2FA";

$safe_item3_title = "98% Cold Storage";
$safe_item3_desc = "La maggior parte degli asset digitali è conservata in caveau cold storage offline distribuiti geograficamente e protetti da protocolli multi-firma.";
$safe_item3_badge = "98% Cold Storage";

$safe_item4_title = "Esecuzione Regolamentata";
$safe_item4_desc = "Collaboriamo con broker e fornitori di liquidità regolamentati in tutto il mondo per garantire conformità, trasparenza ed esecuzione di alto livello.";
$safe_item4_badge = "Regolamentato";

$safe_item5_title = "Crittografia SSL a 256 Bit";
$safe_item5_desc = "Tutte le trasmissioni di dati tra il tuo browser e i nostri server sono crittografate con protocolli crittografici di livello militare TLS 1.3.";
$safe_item5_badge = "SSL a 256 Bit";

// FREE GUIDE CTA BANNER (CTA 2)
$guide_cta_title = "Ricevi la Guida Gratuita";
$guide_cta_subtitle = "«10 Errori da Evitare nel Trading di Criptovalute»";
$guide_cta_btn = "Richiedi la Guida Gratuita";

// TRUST SECTION (Pourquoi les investisseurs font confiance à Ciel Cryptance)
$trust_title = "La fiducia dei trader di tutto il mondo";
$trust_desc = "Oltre 4.000.000 di utenti in tutto il mondo scelgono $site_name per la sua affidabilità, la potente automazione e l'ambiente trasparente.";
$trust_subtitle = "Ecco perché i trader si fidano di $site_name:";

$trust_item1_title = "Accesso ai Mercati Globali";
$trust_item1_desc = "Fai trading su oltre 100 criptovalute, coppie Forex, azioni e materie prime da un'unica dashboard di trading unificata.";

$trust_item2_title = "Protezione Solida dei Fondi";
$trust_item2_desc = "Conti separati, controlli biometrici continui e cybersecurity all'avanguardia proteggono il tuo capitale 24 ore su 24, 7 giorni su 7.";

$trust_item3_title = "Zero Costi Nascosti";
$trust_item3_desc = "Goditi una tariffazione cristallina. Registrazione gratuita, depositi gratuiti, nessuna commissione di gestione della piattaforma e richieste di prelievo istantanee.";

$trust_item4_title = "Assistenza Reattiva";
$trust_item4_desc = "Il nostro team di assistenza dedicato è disponibile via chat dal vivo, telefono o e-mail per qualsiasi domanda o richiesta tecnica.";

$trust_market_info_text = "Maggiori informazioni sulle condizioni di mercato nel 2026";
$trust_market_info_btn = "Perché Fare Trading";

// START TRADING CTA (CTA 3)
$start_cta_title = "Inizia a Fare Trading con <span data-local-currency='$app_price'>$app_price $app_currency</span>!";
$start_cta_desc = "Pronto a provare $site_name? Registrati ora ed entra a far parte della crescente comunità di investitori e trader di criptovalute.";
$start_cta_btn = "Registrati";

// FAQ SECTION
$faq_title = "Domande Frequenti su $site_name (FAQ)";
$faq_q1 = "Cos'è $site_name e come funziona?";
$faq_a1 = "È una piattaforma di trading basata sull'intelligenza artificiale che lavora per te 24 ore su 24. Il sistema analizza i mercati, individua le opportunità ed esegue le operazioni in automatico. Puoi lasciare che sia l'IA a occuparsi di tutto, oppure passare alla modalità manuale per fare trading alle tue condizioni in qualsiasi momento.";

$faq_q2 = "Quanto sono sicuri i miei fondi e i miei dati con $site_name?";
$faq_a2 = "La sicurezza è integrata in ogni livello della piattaforma. I dati personali sono protetti tramite standard di crittografia riconosciuti a livello internazionale e un'autenticazione avanzata dell'account. Tutte le transazioni finanziarie vengono elaborate esclusivamente tramite fornitori di pagamento affidabili e verificati. Tutta la tua attività di trading — ogni operazione, ogni segnale e ogni aggiornamento del saldo — è visibile in tempo reale, così sai sempre esattamente cosa sta succedendo ai tuoi fondi.";

$faq_q3 = "Posso prelevare i miei profitti in qualsiasi momento?";
$faq_a3 = "Sì. Non ci sono restrizioni su quando o con quale frequenza puoi prelevare da $site_name. Il saldo del tuo account rimane sempre sotto il tuo controllo. I prelievi vengono elaborati tramite gli stessi fornitori di pagamento affidabili utilizzati per i depositi, garantendo transazioni rapide e sicure.";

$faq_q4 = "Ci sono costi nascosti o spese aggiuntive?";
$faq_a4 = "Nessuno. $site_name non applica canoni di abbonamento, costi di registrazione né commissioni nascoste. L'unico importo necessario per iniziare è un deposito minimo di $app_price $app_currency, versato direttamente sul tuo account di trading. Sono accettati tutti i principali metodi di pagamento, incluse carte di credito, bonifici bancari e PayPal.";

$faq_q5 = "Ho bisogno di esperienza pregressa per iniziare?";
$faq_a5 = "Assolutamente no. $site_name è pensata sia per i principianti assoluti che per i trader esperti. In modalità completamente automatica, l'IA si occupa di tutto per te, inclusa l'analisi di mercato, la generazione dei segnali e l'esecuzione delle operazioni. Se preferisci mantenere il controllo, puoi passare alla modalità manuale in qualsiasi momento.";

$faq_cta_text = "Hai domande? Consulta le nostre FAQ o contattaci.";
$faq_cta_faq_btn = "FAQ";
$faq_cta_contact_btn = "Contatti";

// NEW TRADER LEAD SECTION (Bottom form)
$lead_title = "Nuovo nel Trading?";
$lead_p1 = "Dopo la registrazione, riceverai la nostra guida gratuita <mark class='text-on-surface-tertiary-accent'>«10 Errori da Evitare nel Trading di Criptovalute»</mark>. Contiene consigli semplici dei nostri analisti più esperti per aiutarti a evitare gli errori più comuni.";
$lead_p2 = "Inserisci semplicemente i tuoi dati nel modulo di registrazione e te la invieremo direttamente nella tua casella di posta. Molti trader hanno iniziato con questa guida e l'hanno trovata preziosa per costruire fiducia nei loro primi trade.";
$lead_form_heading = "Il mercato non aspetta — inizia oggi stesso!";

// FEATURES TABLE (Fonctionnalités principales)
$features_title = "<mark>Caratteristiche Principali</mark> della Piattaforma di Trading $site_name";
$feature_1_title = "🤖 Tecnologia della Piattaforma";
$feature_1_val = "Motore di trading avanzato basato su IA";
$feature_2_title = "💳 Metodi di Finanziamento";
$feature_2_val = "Principali carte di credito, bonifici bancari, PayPal";
$feature_3_title = "📱 Accesso alla Piattaforma";
$feature_3_val = "Compatibilità multi-dispositivo (Desktop, Tablet, Mobile)";
$feature_4_title = "🚀 Tasso di Successo";
$feature_4_val = "85% di precisione analitica";
$feature_5_title = "📊 Strumenti di Trading";
$feature_5_val = "Criptovalute, Forex, Azioni, Materie Prime, Metalli Preziosi, CFD e altro…";
$feature_6_title = "✍️ Configurazione dell'Account";
$feature_6_val = "Registrazione rapida e semplice";
$feature_7_title = "📞 Assistenza Clienti";
$feature_7_val = "Assistenza dedicata professionale 24 ore su 24, 7 giorni su 7";

// FOOTER DISCLAIMER (TZ Item 21)
$footer_disclaimer_p1 = "$site_name fornisce contenuti didattici e informazioni generali sui mercati finanziari, il trading online e gli asset digitali. Tutti i materiali pubblicati su questo sito, inclusi articoli, grafici, dati sui prezzi, analisi e commenti di mercato, sono forniti esclusivamente a scopo informativo e non devono essere considerati consulenza finanziaria, di investimento o legale. Sebbene ci impegniamo a mantenere i nostri contenuti accurati e aggiornati, non garantiamo la loro completezza o affidabilità e non ci assumiamo responsabilità per eventuali perdite derivanti dall'uso di questo sito.";
$footer_disclaimer_p2 = "Il trading di criptovalute, Forex, CFD, azioni e altri strumenti finanziari comporta un rischio significativo e potrebbe non essere adatto a tutti gli investitori. Le condizioni di mercato possono cambiare rapidamente e le performance passate non garantiscono risultati futuri. Prima di prendere qualsiasi decisione di investimento, valuta attentamente la tua situazione finanziaria e la tua tolleranza al rischio, e chiedi una consulenza professionale indipendente se necessario. Investi solo denaro che puoi permetterti di perdere.";
$footer_copyright = "© 2026 $site_name. Tutti i diritti riservati." . date('Y') . " $site_name. All rights reserved.";

// FOOTER NAV LINKS
$footnav_about = "Chi siamo";
$footnav_how = "Come Funziona";
$footnav_why = "Perché Fare Trading";
$footnav_faq = "FAQ";
$footnav_contacts = "Contatti";
$footnav_privacy = "Informativa sulla Privacy";
$footnav_risk = "Avviso sui Rischi";
$footnav_terms = "Termini di Utilizzo";
$footnav_product = "Prodotto";
$footnav_offer = "Offerta";

// ABOUT PAGE VARIABLES
$about_meta_title = "Chi Siamo | Sito Ufficiale $site_name";
$about_meta_description = "Scopri di più su $site_name, la nostra missione di democratizzare i mercati finanziari attraverso l'automazione IA e il nostro framework di sicurezza di livello istituzionale.";
$about_h1 = "Chi Siamo: <mark>$site_name</mark>";
$about_lead = "Diamo potere ai trader di tutto il mondo attraverso l'intelligenza artificiale, l'esecuzione algoritmica e la sicurezza aziendale.";
$about_mission_title = "La Nostra Missione";
$about_mission_text = "In $site_name, crediamo che le tecnologie di trading sofisticate debbano essere accessibili a tutti, non solo ai fondi istituzionali. La nostra piattaforma colma il divario tra gli investitori retail comuni e gli algoritmi di trading computazionali all'avanguardia.";
$about_tech_title = "Tecnologia All'Avanguardia";
$about_tech_text = "I nostri sistemi valutano oltre 100.000 punti dati ogni secondo sui mercati globali di criptovalute, Forex e azioni. Combinando modelli predittivi di machine learning con esecuzione in sub-millisecondi, offriamo uno slippage ultra-basso e prestazioni affidabili.";
$about_sec_title = "Sicurezza & Conformità Normativa";
$about_sec_text = "La fiducia dei clienti è il fondamento del nostro ecosistema. Implementiamo crittografia TLS a 256 bit, rigorosi protocolli biometrici e 2FA, e conserviamo il 98% di tutte le riserve digitali in caveau cold storage.";

// PRODUCT PAGE VARIABLES
$product_meta_title = "La nostra piattaforma | $site_name";
$product_meta_description = "Scopri come $site_name combina analisi basate sull'IA, dati di mercato in tempo reale e una dashboard trasparente per aiutarti a fare trading con sicurezza.";
$product_h1 = "<mark>Prodotto e Funzionalità</mark> della Piattaforma";
$product_lead = "Scopri gli strumenti intelligenti progettati per darti un vantaggio competitivo sui moderni mercati delle criptovalute e finanziari.";
$product_f1_title = "Motore di Trading Automatizzato IA";
$product_f1_text = "Lascia che gli algoritmi neurali analizzino le tendenze di mercato ed eseguano trade ottimali 24 ore su 24 senza emozioni.";
$product_f2_title = "Analisi di Mercato in Tempo Reale";
$product_f2_text = "Profondità del book degli ordini in tempo reale, riconoscimento automatico dei pattern e monitoraggio del sentiment istituzionale a portata di mano.";
$product_f3_title = "Suite di Gestione del Rischio";
$product_f3_text = "Limiti granulari di stop-loss e take-profit, controlli sull'esposizione massima giornaliera e capacità di copertura automatizzate.";
$product_f4_title = "Accessibilità Multi-Piattaforma";
$product_f4_text = "Fai trading senza interruzioni su browser desktop, tablet e smartphone con zero latenza e sincronizzazione cloud completa.";

// OFFER PAGE VARIABLES
$offer_meta_title = "Inizia ora | $site_name";
$offer_meta_description = "Registrati, finanzia il tuo account e inizia a fare trading di criptovalute con $site_name in pochi minuti.";
$offer_h1 = "<mark>Offerta di Trading</mark> Esclusiva";
$offer_lead = "Inizia oggi il tuo percorso di trading con vantaggi competitivi e un onboarding dell'account personalizzato 1 a 1.";
$offer_step1_title = "1. Registrazione Rapida";
$offer_step1_text = "Compila il nostro breve modulo di registrazione per assicurarti l'accesso al tuo account personale in meno di 2 minuti.";
$offer_step2_title = "2. Finanzia il Tuo Saldo di Trading";
$offer_step2_text = "Deposita il minimo standard di $app_price $app_currency tramite carta di credito, bonifico bancario o e-wallet. Il 100% dei tuoi fondi va direttamente nel tuo saldo di trading.";
$offer_step3_title = "3. Attiva il Trading IA";
$offer_step3_text = "Scegli la modalità automatizzata o assistita, seleziona le coppie di asset preferite e inizia a fare trading con tutte le funzionalità della piattaforma.";

// CONTACTS PAGE VARIABLES
$contacts_meta_title = "Contatti e Assistenza | $site_name";
$contacts_meta_description = "Contatta il team di $site_name per assistenza sul tuo account o per domande sul trading.";
$contacts_h1 = "Contatti";
$contacts_lead = "Il nostro team di assistenza internazionale dedicato è pronto ad aiutarti 24 ore su 24, 7 giorni su 7.";
$contacts_info_title = "Richieste Ufficiali";
$contacts_info_text = "Per richieste generali, verifica dell'account o assistenza tecnica, contattaci attraverso i nostri canali di comunicazione verificati.";
$contacts_support_hours = "Assistenza Chat dal Vivo & E-mail 24 ore su 24, 7 giorni su 7";

// FAQ PAGE VARIABLES
$faq_meta_title = "FAQ & Base di Conoscenza | $site_name";
$faq_meta_description = "Trova risposte alle domande frequenti sugli account $site_name, depositi, prelievi e trading automatizzato con IA.";
$faq_h1 = "<mark>FAQ</mark> $site_name";
$faq_lead = "Risposte chiare alle domande più comuni riguardanti la sicurezza della piattaforma, i prelievi e il trading automatizzato.";

// PRIVACY POLICY PAGE VARIABLES
$privacy_meta_title = "Informativa sulla Privacy | Sicurezza dei Dati $site_name";
$privacy_meta_description = "Scopri come $site_name protegge la privacy degli utenti secondo rigorosi standard internazionali di crittografia.";
$privacy_h1 = "Informativa sulla Privacy";
$privacy_p1 = "Questa Informativa sulla Privacy descrive come $site_name raccoglie, utilizza e divulga le informazioni quando visiti il nostro sito, registri un account o utilizzi il nostro software di trading.";
$privacy_sec1_title = "1. Raccolta & Utilizzo dei Dati";
$privacy_sec1_text = "Raccogliamo le informazioni di contatto necessarie (nome, indirizzo e-mail, numero di telefono) per creare il tuo account, metterti in contatto con partner di brokeraggio verificati e verificare l'identità in conformità con gli standard internazionali KYC e AML.";
$privacy_sec2_title = "2. Cookie & Tecnologie di Tracciamento";
$privacy_sec2_text = "Utilizziamo cookie essenziali e analitici per migliorare le prestazioni del sito, personalizzare l'esperienza utente e monitorare i modelli di traffico. Puoi modificare le impostazioni dei cookie del tuo browser in qualsiasi momento.";
$privacy_sec3_title = "3. Sicurezza dei Dati & Diritti GDPR";
$privacy_sec3_text = "Tutti i dati degli utenti sono crittografati in transito e a riposo utilizzando protocolli crittografici di livello bancario. Ai sensi del Regolamento Generale sulla Protezione dei Dati (GDPR), gli utenti hanno il diritto di richiedere l'accesso, la correzione o la cancellazione dei propri dati personali.";

// TERMS OF USE PAGE VARIABLES
$terms_meta_title = "Termini di Utilizzo | $site_name";
$terms_meta_description = "Consulta i Termini e Condizioni ufficiali che regolano l'uso della piattaforma $site_name e dei servizi associati.";
$terms_h1 = "Termini di Utilizzo";
$terms_p1 = "Ti preghiamo di leggere attentamente questi Termini di Utilizzo prima di accedere o utilizzare $site_name. Registrando un account, accetti di essere vincolato da queste disposizioni.";
$terms_sec1_title = "1. Idoneità dell'Utente";
$terms_sec1_text = "Devi avere almeno 18 anni e risiedere in una giurisdizione in cui il trading online e le transazioni in criptovalute siano legalmente consentiti. Sei responsabile di garantire la conformità con le tue leggi locali.";
$terms_sec2_title = "2. Registrazione & Sicurezza dell'Account";
$terms_sec2_text = "Accetti di fornire informazioni veritiere, accurate e complete durante la registrazione. Sei l'unico responsabile del mantenimento della riservatezza delle tue credenziali di accesso.";
$terms_sec3_title = "3. Limitazione di Responsabilità";
$terms_sec3_text = "$site_name fornisce servizi informativi e di instradamento software. Non forniamo consulenza finanziaria personalizzata né garantiamo la redditività del trading. Il trading sui mercati finanziari comporta un rischio di capitale intrinseco.";

// RISK WARNING PAGE VARIABLES (TZ Item 19: Exact 4 sections)
$risk_meta_title = "Avviso sui Rischi & Note Legali | $site_name";
$risk_meta_description = "Importante avviso sui rischi riguardante il trading di CFD, Forex e criptovalute su $site_name. Leggi attentamente prima di investire.";
$risk_h1 = "Avviso sui Rischi";
$risk_sec1_title = "1. Avviso sugli Investimenti ad Alto Rischio & Volatilità";
$risk_sec1_text = "Il trading di criptovalute, Contratti per Differenza (CFD), valute estere (Forex) e altri asset finanziari comporta un rischio sostanziale di perdita e non è adatto a tutti gli investitori. I mercati delle criptovalute sono eccezionalmente volatili, con prezzi soggetti a forti oscillazioni in risposta ad annunci normativi, cambiamenti macroeconomici o sentiment di mercato. Non dovresti mai investire denaro che non puoi permetterti di perdere completamente.";
$risk_sec2_title = "2. Consulenza Finanziaria Indipendente";
$risk_sec2_text = "Tutti i materiali, gli strumenti, i segnali algoritmici e i commenti forniti su $site_name sono destinati esclusivamente a scopi informativi, didattici e di marketing. Nessuno dei contenuti di questo sito costituisce consulenza personalizzata di investimento, legale o finanziaria. Prima di eseguire qualsiasi trade, dovresti condurre ricerche indipendenti o consultare un consulente finanziario autorizzato.";
$risk_sec3_title = "3. Restrizioni Normative & Geografiche";
$risk_sec3_text = "Alcune giurisdizioni limitano o vietano il trading retail di CFD e criptovalute. È esclusiva responsabilità dell'utente verificare se l'accesso a $site_name e l'utilizzo di broker partner siano legali secondo il proprio quadro giuridico locale.";
$risk_sec4_title = "4. Tecnologia della Piattaforma & Esecuzione di Mercato";
$risk_sec4_text = "Gli strumenti di trading automatizzati, gli algoritmi di intelligenza artificiale e gli indicatori di mercato non garantiscono profitti né eliminano i rischi di mercato. Interruzioni tecniche, latenza di rete, interruzioni del sistema e carenze di liquidità possono causare ritardi nell'esecuzione dei trade o slippage.";

// SIGN UP / LOGIN PAGE VARIABLES
$sign_meta_title = "Registrati | $site_name";
$sign_meta_description = "Crea il tuo account gratuito $site_name e inizia a fare trading di criptovalute su una piattaforma sicura e regolamentata.";
$sign_h1 = "Registrati a <mark>$site_name</mark>";
$sign_lead = "Unisciti a migliaia di trader e ottieni accesso immediato al nostro motore di trading IA.";

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
$hero_form_heading = "Crea il tuo account gratuito";
$hero_form_button = "Registrati";
$form_name_placeholder = "Inserisci il tuo nome";
$form_surname_placeholder = "Inserisci il tuo cognome";
$form_disclaimer_prefix = "Inserendo i tuoi dati personali e cliccando sul pulsante, accetti la";
$form_privacy_link_label = "Informativa sulla Privacy";
$form_disclaimer_and = "e le";
$form_terms_link_label = "Condizioni d'Uso";
$form_disclaimer_of_site = "di questo sito web.";

// -- partners strip --
$partners_label = "Scelto dai principali partner del settore";

// -- "what is" section --
$whatis_label = "Sulla piattaforma";
$whatis_title = "Cos'è $site_name?";
$whatis_intro = "$site_name è la piattaforma di trading online ufficiale, creata per rendere le criptovalute semplici come l'online banking di tutti i giorni, che tu sia un principiante assoluto o un investitore di lunga data.";
$whatis_icon_1_title = "Analisi basata sull'IA";
$whatis_icon_1_text = "Algoritmi avanzati gestiscono per te tutta la complessità dei mercati.";
$whatis_icon_2_title = "Esecuzione istantanea";
$whatis_icon_2_text = "Migliaia di dati elaborati ogni secondo, per operazioni senza ritardi.";
$whatis_icon_3_title = "Dashboard semplice e intuitiva";
$whatis_icon_3_text = "Controlla il tuo saldo e le posizioni aperte con un solo sguardo, in qualsiasi momento.";
$whatis_icon_4_title = "Accesso alla portata di tutti";
$whatis_icon_4_text = "Inizia con un deposito minimo di soli $app_price $app_currency — senza costi nascosti.";
$whatis_cta_text = "Vuoi saperne di più sul nostro team e sul nostro prodotto?";
$whatis_cta_link = "Chi siamo";

// -- stats section heading (per-stat label/value already set above) --
$stats_label = "$site_name in numeri";
$stats_title = "Numeri che parlano più delle promesse";

// -- key benefits section --
$benefits_label = "Vantaggi principali";
$benefits_title = "I principali vantaggi di $site_name";
$benefit_1_title = "Piattaforma adatta ai principianti";
$benefit_1_text = "Grafici intuitivi e guide passo dopo passo ti aiutano a iniziare senza sentirti sopraffatto. Puoi fare trading di criptovalute anche se è la tua prima volta: ti accompagniamo in ogni fase.";
$benefit_2_title = "Ufficiale e regolamentata";
$benefit_2_text = "$site_name è autorizzata e rispetta le normative finanziarie applicabili. Utilizziamo la crittografia SSL e l'autenticazione a due fattori per proteggere il tuo account e i tuoi fondi. Nessuna promessa vuota: solo un supporto al trading onesto e affidabile.";
$benefit_3_title = "Accesso alla portata di tutti";
$benefit_3_text = "Con un deposito minimo di soli $app_price $app_currency, chiunque può iniziare. Non è richiesto un grande investimento iniziale: parti in piccolo e aumenta la tua puntata man mano che cresce la tua sicurezza.";
$benefit_4_title = "Costi trasparenti";
$benefit_4_text = "Non troverai mai costi nascosti. Applichiamo solo commissioni minime sulle transazioni o sui prelievi, dove applicabili, così puoi trattenere di più di ciò che è tuo.";
$benefit_5_title = "Accesso alle transazioni 24/7";
$benefit_5_text = "Fai trading secondo i tuoi tempi, di giorno o di notte. $site_name funziona altrettanto bene su desktop e mobile, così puoi reagire ai movimenti di mercato ovunque tu sia. La nostra piattaforma è veloce e affidabile: i prezzi si aggiornano in tempo reale, aiutandoti a cogliere le opportunità rapidamente.";
$benefit_6_title = "Assistenza clienti locale";
$benefit_6_text = "Il nostro team di assistenza è disponibile via chat, telefono o email. Persone reali sono qui per aiutarti nella tua lingua, ogni volta che ne hai bisogno.";
$benefits_trust_title = "La fiducia degli utenti di tutto il mondo";
$benefits_trust_text = "Ecco perché tantissimi utenti di criptovalute si fidano di $site_name. Migliaia di trader operano già con $site_name, e la nostra community continua a crescere ogni giorno, con grande attenzione riservata a ogni nuovo utente.";
$benefits_cta = "Registrati";
$benefits_badge_1 = "256-bit SSL";
$benefits_badge_2 = "Pagamenti sicuri";
$benefits_badge_3 = "2FA";

// -- security section --
$security_label = "Sicurezza";
$security_title = "I tuoi fondi sono al sicuro con $site_name";
$security_subtitle = "Crittografia di livello bancario, pagamenti verificati e il 98% dei fondi in cold storage: il tuo denaro è protetto in ogni fase.";
$security_1_title = "Fornitori di pagamento verificati";
$security_1_text = "I pagamenti vengono elaborati esclusivamente tramite fornitori certificati che rispettano gli standard di sicurezza internazionali. I dati della tua carta non vengono mai memorizzati sulla nostra piattaforma.";
$security_2_title = "Crittografia SSL a 256 bit";
$security_2_text = "Tutti i dati scambiati tra il tuo dispositivo e la nostra piattaforma sono criptati con TLS a 256 bit. Nessuna terza parte può intercettare o leggere le tue informazioni.";
$security_3_title = "98% in cold storage";
$security_3_text = "Il 98% degli asset è conservato in wallet offline privi di connessione a internet. Nessuno può accedervi da remoto, nemmeno in caso di attacco.";
$security_4_title = "Autenticazione a più fattori";
$security_4_text = "Solo tu puoi accedere al tuo account. Ogni accesso viene verificato tramite un secondo passaggio che solo tu controlli.";
$security_5_title = "Monitoraggio dell'account";
$security_5_text = "Ogni accesso, transazione o modifica delle impostazioni genera una notifica immediata, così sai sempre nel momento esatto in cui succede qualcosa sul tuo account.";
$security_6_title = "Protezione della password";
$security_6_text = "Le password vengono memorizzate in una forma illeggibile e irreversibile. Non abbiamo alcun modo tecnico per visualizzare la tua password.";
$security_cta_title = "Ricevi una guida gratuita!";
$security_cta_text = "Scarica la nostra guida gratuita per principianti e inizia a fare trading oggi stesso.";
$security_cta_button = "Registrati";
$security_badge_1 = "98% in cold storage";
$security_badge_2 = "Pagamenti verificati";
$security_badge_3 = "Crittografato";

// -- how it works section --
$how_label = "Come funziona";
$how_title = "Come funziona";
$how_1_title = "Registrati";
$how_1_text = "Clicca sul pulsante \"Apri un account\" e compila il modulo di registrazione con i tuoi dati (nome, email e numero di telefono). È gratuito e richiede solo pochi minuti. Ti chiederemo di verificare la tua email e di creare una password. Per la tua sicurezza, attiverai l'autenticazione a due fattori (2FA), che aiuta a proteggere meglio i tuoi fondi.";
$how_2_title = "Deposita fondi";
$how_2_text = "Successivamente, alimenta il tuo account. Il deposito minimo è di soli $app_price $app_currency. Puoi utilizzare una carta di credito/debito, un bonifico bancario locale o i più diffusi e-wallet. Il tuo deposito dovrebbe comparire rapidamente sul tuo account. (Consiglio: inizia con un importo con cui ti senti a tuo agio.) Potremmo chiederti di completare una rapida verifica dell'identità al primo deposito, una procedura standard che richiede solo pochi minuti.";
$how_3_title = "Inizia a fare trading";
$how_3_text = "Una volta che i tuoi fondi sono sul tuo account, sei pronto per fare trading. Scegli l'asset che desideri (come BTC, SOL o USDT) e decidi quanto investire. $site_name ti offre gli strumenti per definire la tua strategia, inclusi i limiti di stop-loss e i prezzi obiettivo. Offriamo anche un'opzione di trading automatico che segue i segnali di mercato per te, in base al livello di rischio che scegli. Segui i grafici in tempo reale sulla tua dashboard: quando un'operazione è in profitto, il tuo saldo si aggiorna di conseguenza.";
$how_cta_label = "Come Funziona";
$how_cta_text = "Hai bisogno di maggiori informazioni su come funziona il servizio?";
$how_cta_link = "Come funziona";

// -- trust reasons section --
$trust_label = "Perché fare trading con noi";
$trust_intro = "Unisciti alle migliaia di utenti che già operano con $site_name. Sul nostro sito è persino visibile un contatore in tempo reale che mostra quante persone stanno facendo trading in questo momento, così puoi vedere la nostra community attiva in tempo reale.";
$trust_1_title = "Completamente regolamentata";
$trust_1_text = "$site_name è debitamente registrata e rispetta le normative finanziarie applicabili. Operiamo secondo regole rigorose per contribuire a garantire la tua protezione.";
$trust_2_title = "Sicurezza all'avanguardia";
$trust_2_text = "Tutti i tuoi dati e fondi sono crittografati e protetti. Applichiamo una rigorosa protezione dell'account tramite crittografia SSL e autenticazione a due fattori, così puoi fare trading con fiducia, sapendo che prendiamo la sicurezza sul serio.";
$trust_3_title = "Operazioni trasparenti";
$trust_3_text = "Non nascondiamo mai le nostre commissioni e non aggiungiamo mai regole a sorpresa. Prima di ogni operazione, vedi esattamente quali costi si applicano. Comunichiamo inoltre in modo chiaro i rischi legati al trading: è proprio questa trasparenza a costruire la fiducia all'interno della nostra community.";
$trust_4_title = "Assistenza reattiva";
$trust_4_text = "Il nostro team di assistenza è disponibile via chat, telefono o email per rispondere alle tue domande o risolvere qualsiasi problema.";
$trust_cta_text = "Maggiori informazioni sullo stato del mercato";
$trust_cta_link = "Perché fare trading";

// -- testimonials section heading (individual reviews already set above) --
$testimonials_label = "Testimonianze";
$testimonials_title = "La fiducia di oltre 4M di trader";

// -- FAQ section heading --
$faq_label = "FAQ";

// -- lead magnet CTA block --
$leadmagnet_title = "Sei nuovo nel trading?";
$leadmagnet_text1 = "Dopo la registrazione, riceverai la nostra guida gratuita,";
$leadmagnet_quote = "\"10 errori da evitare quando si fa trading di criptovalute\"";
$leadmagnet_text2 = "ricca di consigli semplici e diretti dai nostri analisti più esperti, per aiutarti a evitare gli errori più comuni.";
$leadmagnet_text3 = "Ti basta inserire i tuoi dati quando";
$leadmagnet_link = "ti registri";
$leadmagnet_text4 = "e te la invieremo direttamente nella tua casella di posta. Molti investitori sono partiti da questa guida e affermano che ha dato loro una vera sicurezza per le prime operazioni.";
$leadmagnet_text5 = "Il mercato non aspetta: inizia oggi stesso!";

// -- pre-about CTA band --
$pre_about_title = "Pronto a prendere il controllo del tuo trading?";
$pre_about_text = "Unisciti a $site_name oggi stesso e scopri una piattaforma progettata per chiarezza, sicurezza e risultati.";
$pre_about_button = "Registrati";

// -- pretest (quiz teaser) badges/CTA --
$pretest_title = "Inizia a fare trading con $app_price $app_currency!";
$pretest_text = "Pronto a provare $site_name? Registrati ora e unisciti alla crescente community di investitori e trader di criptovalute.";
$pretest_button = "Registrati";
$pretest_badge_1 = "Sicura";
$pretest_badge_2 = "Regolamentata";
$pretest_badge_3 = "Scelta da oltre 4M di trader";

// -- about page --
$about_label = "Chi siamo";
$about_title = "Chi è $site_name";
$about_intro = "$site_name non ti offre solo una piattaforma di trading: ti aiutiamo a fare trading con chiarezza e sicurezza.";
$about_text_1 = "$site_name è la piattaforma di trading online ufficiale, creata per rendere il trading di criptovalute accessibile sia ai principianti che ai trader esperti.";
$about_text_2 = "Combiniamo l'analisi di mercato basata sull'IA con una dashboard semplice e trasparente, così sai sempre esattamente a che punto sei. Che tu stia appena iniziando o stia perfezionando il tuo approccio, $site_name ti offre gli strumenti per fare trading alle tue condizioni.";
$about_text_3 = "Ogni parte della piattaforma è pensata all'insegna della chiarezza: niente costi nascosti, niente gergo tecnico confuso, solo informazioni chiare che ti aiutano a prendere decisioni migliori, a fare trading con più sicurezza e a mantenere il controllo del tuo rischio.";
$about_text_4 = "La nostra piattaforma ti fa risparmiare ore di congetture e ti protegge da alternative poco trasparenti e di scarsa qualità. Crediamo che strumenti validi e informazioni oneste diano ai trader il potere di agire in modo strategico e di crescere in modo sostenibile.";

// -- contact page --
$contact_label = "Contattaci";
$contact_title = "Contatta $site_name";
$contact_subtitle = "Hai una domanda o hai bisogno di assistenza? Siamo qui per consigliarti e guidarti.";
$contact_text = "In $site_name crediamo che il successo nel trading non abbia nulla a che fare con la fortuna: nasce dalla precisione, dalla lungimiranza e da una buona pianificazione.";
$contact_form_text = "Compila semplicemente il modulo qui sotto e un membro del nostro team ti risponderà a breve.";
$contact_form_button = "Invia messaggio";

// -- footer navigation labels (geo-page footer, TZ items 12/16/18) --
$footnav_col_pages = "Pagine";
$footnav_col_support = "Assistenza";
$footnav_col_legal = "Legale";
$footnav_col_company = "Azienda";
$footnav_home = "Home";
$footnav_sitemap = "Mappa del sito";
$footnav_conditions = "Condizioni d'Uso";
$footnav_contact = "Contattaci";
$footnav_signup = "Registrati";
$footer_risk_warning = "Avviso sui Rischi";

// -- geo-page footer legal disclaimer (single-paragraph variant used by
// the geo template's own footer layout; the two-paragraph TZ item 21
// text above -- $footer_disclaimer_p1/$footer_disclaimer_p2 -- covers
// the root pages) --
$footer_disclaimer = "$site_name non si assume alcuna responsabilità per eventuali perdite o danni derivanti dall'affidamento alle informazioni fornite su questo sito web, incluso il materiale didattico, le quotazioni dei prezzi, i grafici e le analisi. Il trading sui mercati finanziari comporta rischi significativi; si consiglia di consultare un consulente professionale prima di investire. Non investire mai più di quanto puoi permetterti di perdere. I rischi associati a FX, CFD e criptovalute potrebbero non essere adatti a tutti gli investitori. $site_name non è responsabile per eventuali perdite di trading che potresti subire utilizzando o facendo affidamento sui dati o sulle informazioni disponibili su questo sito web.";

// ============================================================
// Geo-language SUBPAGE fallback content (TZ item 16 cont.). Same
// rationale as the block above: conditions/contacts/faq/offer/
// privacy/product/risk-warning/sign.php share templates across the
// bg/cs/da/... stub folders and reference these vars directly.
// English fallback so every geo folder's subpages render complete.
// ============================================================

// -- shared form aliases (service-page forms reuse the hero disclaimer) --
$form_disclaimer_risk_note = "Ti invitiamo inoltre a consultare il nostro";
$form_text = $form_disclaimer_prefix;
$form_text_privacy = $form_privacy_link_label;
$form_text_privacy_and = $form_disclaimer_and;
$form_text_conditions = $form_terms_link_label;
$form_text_conditions_of = $form_disclaimer_of_site;
$form_text_risk_warning_note = $form_disclaimer_risk_note;
$form_submit = "Registrati";

// -- generic breadcrumbs (sign-up / product pages) --
$breadcrumb_home = "Home";
$breadcrumb_current = "Accesso/Registrazione";
$breadcrumb_product = "Prodotto";

// -- sign-up page official heading --
$official_heading = "Registrati sulla piattaforma ufficiale {$site_name}™";
$official_description = "Crea il tuo account gratuito per iniziare a fare trading di criptovalute su una piattaforma sicura e trasparente.";

// -- product page: analytics banner --
$analytics_heading = "Fai trading in modo più intelligente con $site_name";
$analytics_description = "Visualizza dati di mercato chiari e in tempo reale e analisi basate sull'IA. Prendi decisioni di trading informate con sicurezza.";

// -- product page: dashboard preview --
$app_main_heading = "La tua Dashboard di Trading";
$app_feature_1_title = "Dati di mercato in tempo reale";
$app_feature_1_text = "Prezzi e grafici in tempo reale a portata di mano";
$app_feature_2_title = "Monitoraggio del portafoglio";
$app_feature_2_text = "Metriche complete su saldo e performance";
$app_feature_3_title = "Vista mobile";
$app_feature_3_text = "Ottimizzata per i browser mobili";
$app_feature_4_title = "Liste di controllo";
$app_feature_4_text = "Tieni traccia degli asset che stai seguendo";

// -- product page: capabilities --
$capabilities_main_title = "Cosa ottieni";
$capabilities_feature_1_title = "Segnali basati sull'IA";
$capabilities_feature_1_text = "Algoritmi avanzati analizzano i segnali di mercato e individuano opportunità 24 ore su 24.";
$capabilities_feature_2_title = "Iscrizione rapida";
$capabilities_feature_2_text = "Registrati in pochi minuti con un processo di iscrizione semplice e sicuro.";
$capabilities_feature_3_title = "Sicurezza verificata";
$capabilities_feature_3_text = "Crittografia SSL a 256 bit, 2FA e il 98% dei fondi in cold storage proteggono il tuo denaro in ogni fase.";
$capabilities_feature_4_title = "Assistenza continua";
$capabilities_feature_4_text = "Ricevi supporto dal nostro team in ogni fase, dalla registrazione alla tua prima operazione.";

// -- product page: stats strip --
$products_stats_currencies_v = "65+";
$products_stats_currencies_l = "Valute disponibili";
$products_stats_users_v = "4M+";
$products_stats_users_l = "Utenti registrati";
$products_stats_volume_v = "98+";
$products_stats_volume_l = "Paesi supportati";
$products_stats_countries_v = "24/7";
$products_stats_countries_l = "Accesso alle transazioni";

// -- product page: 3-step strip --
$step_1 = "Crea un account";
$step_2 = "Deposita fondi";
$step_3 = "Inizia a fare trading con la strategia più adatta a te";

// -- shared "last update" label (privacy page) --
$last_update = "Ultimo aggiornamento";

// -- FAQ page --
$faq_page_meta_title = "FAQ | Assistenza $site_name";
$faq_page_meta_description = "Risposte alle domande più comuni su come funziona $site_name, sui costi e su come iniziare.";
$faq_page_title = "FAQ";
$faq_page_breadcrumb_home = "Home";
$faq_page_breadcrumb_current = "FAQ";
$faq_page_help_title = "Come possiamo aiutarti?";
$faq_1_q = "Come posso iniziare?";
$faq_1_a = "Crea il tuo account, verifica la tua email ed effettua il tuo primo deposito: i piani partono da $app_price $app_currency.";
$faq_2_q = "I miei fondi e i miei dati sono al sicuro? $site_name è affidabile?";
$faq_2_a = "Sì. I tuoi dati sono protetti con crittografia a 256 bit conforme agli standard di settore, e i tuoi fondi sono tutelati tramite autenticazione a due fattori e il 98% conservato in cold storage.";
$faq_3_q = "Posso chiudere il mio account o prelevare in qualsiasi momento?";
$faq_3_a = "Sì. Non ci sono restrizioni sui prelievi. Contatta il nostro team di assistenza in qualsiasi momento e ti aiuteremo con il tuo account o elaboreremo tempestivamente il tuo prelievo.";
$faq_4_q = "Come faccio a sapere se questa piattaforma è adatta a me?";
$faq_4_a = "$site_name è pensata sia per i principianti assoluti sia per i trader esperti che vogliono fare trading in modo più efficiente: ogni strumento della piattaforma è progettato per tenerti informato e al comando.";
$faq_5_q = "Ho bisogno di esperienza di trading per iniziare?";
$faq_5_a = "Non è necessaria alcuna esperienza pregressa. La nostra modalità assistita dall'IA gestisce l'analisi al posto tuo, e puoi passare alla modalità manuale ogni volta che desideri maggiore controllo.";

// -- contacts page --
$contacts_h3 = "Per richieste tecniche o relative all'account, contattaci via email";

// -- offer page (meta title/description already defined above) --
$offer_breadcrumb_home = "Home";
$offer_breadcrumb_current = "Offerta";
$offer_cta_h1 = "Inizia a fare trading oggi";
$offer_cta_text = "Inizia in pochi minuti: registrati, finanzia il tuo account e inizia a fare trading di criptovalute su una piattaforma sicura e regolamentata.";
$offer_how_it_works_title = "Come funziona";
$offer_official_platform_title = "Questa è la piattaforma di trading ufficiale {$site_name}™";
$offer_official_platform_text = "Un modo affidabile e trasparente per fare trading di criptovalute con analisi in tempo reale e pieno controllo.";

// -- conditions of use page --
$conditions_meta_title = "Condizioni d'Uso | $site_name";
$conditions_meta_description = "Consulta i termini e le condizioni ufficiali per l'utilizzo del sito web e della piattaforma di trading $site_name.";
$conditions_breadcrumb_home = "Home";
$conditions_breadcrumb_current = "Condizioni d'Uso";
$conditions_h1 = "Condizioni d'Uso";
$conditions_s1_title = "1. Generalità";
$conditions_s1_text = "Questo sito web fornisce accesso a una piattaforma online di trading di criptovalute. L'utilizzo della piattaforma costituisce piena accettazione dei presenti Termini e della nostra Informativa sulla Privacy.";
$conditions_s2_title = "2. Requisiti di ammissibilità";
$conditions_s2_text = "Gli utenti devono avere almeno 18 anni di età e possedere piena capacità legale nella propria giurisdizione di riferimento.";
$conditions_s3_title = "3. Accesso limitato";
$conditions_s3_text = "L'accesso può essere limitato nelle giurisdizioni in cui le normative locali vietano il tipo di servizio di trading da noi offerto.";
$conditions_s4_title = "4. Usi vietati";
$conditions_s4_text = "Gli utenti non devono utilizzare impropriamente il sistema, tentare l'accesso non autorizzato ai nostri sistemi né decompilare il nostro software.";
$conditions_s5_title = "5. Proprietà intellettuale";
$conditions_s5_text = "Tutto il codice sorgente, le interfacce utente e gli asset del marchio rimangono di esclusiva proprietà della società operante.";
$conditions_s6_title = "6. Responsabilità";
$conditions_s6_text = "Gli strumenti della piattaforma sono forniti 'così come sono'. Non ci assumiamo alcuna responsabilità per gli esiti derivanti dalle decisioni di trading prese autonomamente dall'utente.";
$conditions_s7_title = "7. Servizi di terze parti";
$conditions_s7_text = "Le integrazioni con i fornitori di pagamento di terze parti operano tramite connessioni sicure. Gli utenti trattano direttamente con il fornitore scelto per depositi e prelievi.";
$conditions_s8_title = "8. Link esterni";
$conditions_s8_text = "I link a risorse esterne sono forniti per comodità. Non approviamo né garantiamo software esterni.";
$conditions_s9_title = "9. Disposizioni varie";
$conditions_s9_text = "Ci riserviamo il diritto di modificare i presenti termini o il servizio in qualsiasi momento mediante pubblicazione sul sito web.";

// -- privacy policy page (meta title/description already defined above) --
$privacy_breadcrumb_home = "Home";
$privacy_breadcrumb_current = "Informativa sulla Privacy";
$privacy_page_h1 = "Informativa sulla Privacy";
$privacy_intro = "Rispettiamo la tua privacy e trattiamo i dati personali in piena conformità con gli standard internazionali e il regolamento europeo GDPR.";
$privacy_transparency_title = "Trasparenza";
$privacy_transparency_text = "Indichiamo chiaramente come viene trattata la telemetria operativa. Contatta l'assistenza per maggiori dettagli.";
$privacy_usage_title = "Utilizzo dei dati";
$privacy_usage_text = "I dati vengono utilizzati esclusivamente per fornire l'accesso, proteggere le sessioni e adempiere agli obblighi di conformità.";
$privacy_rights_short_title = "I tuoi diritti";
$privacy_rights_short_text = "Mantieni il pieno diritto di consultare, aggiornare o richiedere la cancellazione dei tuoi dati personali.";
$privacy_security_title = "Sicurezza";
$privacy_security_text = "Applichiamo la crittografia AES-256 e l'isolamento dei database per proteggere la telemetria operativa.";
$privacy_s1_title = "1. Raccolta dei dati";
$privacy_s1_text = "Raccogliamo dati di telemetria sull'utilizzo (IP, parametri di sistema, tipo di browser) e i dati di verifica forniti dall'utente.";
$privacy_s2_title = "2. Base giuridica";
$privacy_s2_text = "Il trattamento si basa sul consenso esplicito dell'utente, sugli obblighi di conformità normativa e sull'erogazione del servizio.";
$privacy_s3_title = "3. Condivisione dei dati";
$privacy_s3_text = "I dati non vengono mai commercializzati. Le divulgazioni sono limitate a stanze di compensazione autorizzate e partner tecnici vincolati da accordi di riservatezza (NDA).";
$privacy_s4_title = "4. Cookie";
$privacy_s4_text = "Vengono utilizzati cookie essenziali per l'autenticazione della sessione e l'ottimizzazione dell'interfaccia.";
$privacy_google_choices = 'Gestisci le preferenze di tracciamento tramite <a href="http://www.google.com/settings/ads" target="_blank" rel="noopener">Impostazioni annunci Google</a> oppure utilizza il <a href="https://tools.google.com/dlpage/gaoptout" target="_blank" rel="noopener">componente aggiuntivo di disattivazione di Google Analytics</a>. Puoi inoltre consultare le pratiche sui dati di Google nella sua <a href="https://www.google.com/intl/en/policies/privacy/" target="_blank" rel="noopener">Informativa sulla Privacy</a>.';
$privacy_s5_title = "5. Conservazione dei dati";
$privacy_s5_text = "I dati personali vengono conservati esclusivamente per il tempo necessario a soddisfare i requisiti di accesso al sistema.";
$privacy_s6_title = "6. Trasferimenti internazionali";
$privacy_s6_text = "I trasferimenti di dati oltre confine avvengono esclusivamente tramite canali crittografati e clausole contrattuali standard.";
$privacy_s7_title = "7. Link di terze parti";
$privacy_s7_text = "Non siamo responsabili delle pratiche sulla privacy dei servizi esterni di terze parti collegati al nostro sito.";
$privacy_s8_title = "8. Aggiornamenti";
$privacy_s8_text = "La presente informativa può essere modificata periodicamente per riflettere aggiornamenti di sistema o normativi.";
$privacy_rights_title = "I tuoi diritti";
$privacy_rights_text = "Gli utenti hanno il diritto di richiedere l'accesso, la rettifica, la limitazione del trattamento o la cancellazione completa dei propri dati memorizzati.";

// -- risk warning page --
$page_title_risk_warning = "Avviso sui Rischi | $site_name";
$page_description_risk_warning = "Scopri i rischi del trading e come $site_name ti aiuta a gestirli con sicurezza.";
$risk_warning_breadcrumb_home = "Home";
$risk_warning_breadcrumb_current = "Avviso sui Rischi";
$risk_warning_title = "Avviso sui Rischi";
$risk_warning_intro = "Comprendere i rischi è il primo passo verso un trading consapevole.";
$risk_warning_ai_heading = "Come il nostro sistema di IA aiuta a gestire il rischio:";
$risk_warning_ai_1 = "<strong>Efficienza Algoritmica &amp; Trading Senza Emotività:</strong> algoritmi avanzati analizzano i segnali di mercato per eseguire le operazioni in modo obiettivo nei momenti ottimali.";
$risk_warning_ai_2 = "<strong>Strategie Basate sui Dati:</strong> le strategie si basano su modelli di mercato verificati e analisi in tempo reale, anziché su semplici congetture.";
$risk_warning_ai_3 = "<strong>Impostazioni Flessibili &amp; Pieno Controllo:</strong> modifica i tuoi parametri di rischio in qualsiasi momento. Monitora tutti i saldi e le operazioni in modo trasparente sulla tua dashboard, senza costi nascosti e con prelievi senza restrizioni.";
$risk_warning_disclaimer = "<strong>Nota legale:</strong> il trading comporta sempre dei rischi. I sistemi automatizzati (inclusa l'IA) non garantiscono profitti, possono presentare malfunzionamenti dovuti a errori software o eventi di mercato imprevisti, e richiedono il monitoraggio da parte dell'utente. I rendimenti passati non sono indicativi di risultati futuri. Questa piattaforma ha scopi puramente informativi e di marketing e non fornisce consulenza finanziaria.";
$risk_warning_s1_heading = "1. Rischi Generali &amp; del Mercato delle Criptovalute";
$risk_warning_s1_1 = "Le criptovalute sono asset altamente volatili e speculativi che operano 24 ore su 24, 7 giorni su 7, con una supervisione normativa minima nella maggior parte delle giurisdizioni.";
$risk_warning_s1_2 = "I valori possono fluttuare drasticamente in brevi periodi di tempo, con la possibilità di una perdita totale del capitale investito.";
$risk_warning_s1_3 = "I valori di mercato possono essere fortemente influenzati da aggiornamenti normativi, sviluppi tecnici, violazioni della sicurezza o più ampi eventi macroeconomici.";
$risk_warning_s1_4 = "Alcuni asset possono perdere completamente tutto il loro valore. Investi solo fondi che puoi permetterti di perdere.";
$risk_warning_s2_heading = "2. Rischi di Esecuzione, Liquidità &amp; Leva Finanziaria";
$risk_warning_s2_1 = "<strong>Volatilità di Mercato &amp; Liquidità:</strong> movimenti di prezzo estremi (oltre il 10–20% giornaliero) o una bassa liquidità (specialmente nelle monete minori) possono causare ritardi, interruzioni della piattaforma e un grave slittamento nell'esecuzione degli ordini. Gli ordini di stop-loss non possono garantire i limiti di perdita in condizioni estreme.";
$risk_warning_s2_2 = "<strong>Rischi di Leva Finanziaria &amp; Margine:</strong> i prodotti a leva amplificano sia i guadagni che le perdite, il che significa che puoi perdere più del tuo deposito iniziale. Circa il 70–80% degli account di investitori retail perde denaro quando fa trading con prodotti a leva.";
$risk_warning_s3_heading = "3. Rischi Tecnici, di Cybersicurezza &amp; di Terze Parti";
$risk_warning_s3_1 = "<strong>Fattori Tecnici:</strong> il trading online comporta intrinsecamente rischi legati a disconnessioni internet, errori hardware/software e indisponibilità del servizio.";
$risk_warning_s3_2 = "<strong>Cybersicurezza:</strong> gli account di criptovalute sono bersagli frequenti di phishing, malware e attacchi informatici. Le transazioni sono irreversibili; la compromissione delle tue credenziali può comportare una perdita permanente.";
$risk_warning_s3_3 = "<strong>Piattaforme di Terze Parti:</strong> questo sito web può mettere in collegamento gli utenti con piattaforme di terze parti. Non controlliamo, approviamo né garantiamo la loro sicurezza, il loro funzionamento o la loro solvibilità. Effettua sempre le tue verifiche prima di depositare fondi su piattaforme esterne.";
$risk_warning_s4_heading = "4. Disposizioni Normative, Fiscali &amp; Finali";
$risk_warning_s4_1 = "<strong>Conformità Legale &amp; Fiscale:</strong> i quadri normativi variano ampiamente e cambiano rapidamente. Gli utenti sono gli unici responsabili di garantire che la propria attività di trading sia conforme alle leggi locali e di adempiere ai propri obblighi fiscali.";
$risk_warning_s4_2 = "<strong>Nessuna Garanzia di Profitto:</strong> non esiste un trading di criptovalute \"sicuro\" o privo di rischi. Eventuali cifre di rendimento o esempi di performance sono puramente ipotetici.";
$risk_warning_s4_3 = "<strong>Idoneità:</strong> se non comprendi appieno i rischi, dipendi da fondi essenziali o fai trading con denaro preso in prestito, il trading di criptovalute non è adatto a te. In caso di incertezza, consulta un consulente finanziario indipendente e autorizzato.";
$risk_warning_contact = "<strong>Contatti:</strong> per qualsiasi domanda relativa alla presente dichiarazione o per inviare una richiesta, contatta il nostro team ufficiale di assistenza clienti tramite il modulo di contatto presente sul nostro sito web.";

