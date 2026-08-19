<?php
require __DIR__ . '/../lang.php';
$site_lang = 'it-IT';
$form_language = 'it'; // matches this page's own language, not the offer's global default

// ============================================================
// ITALIAN (IT) TRANSLATION OVERRIDES
// Identity/config vars ($site_name, $site_url, $site_domain, $app_price,
// $app_currency, $rating_value, $rating_count, $review_count, $country_name,
// $support_email, $institutional_email) are intentionally NOT overridden —
// they stay exactly as inherited from the root lang.php.
// ============================================================


// META TITLE / DESCRIPTION (per page)
$home_meta_title = "$site_name — Sito ufficiale | Piattaforma di trading";
$home_meta_description = "Accedi ai mercati globali con $site_name ⭐ Analisi IA di livello istituzionale ⚡, esecuzione a bassa latenza ⚡ e interfacce essenziali pensate per la crescita finanziaria moderna.";


$quiz_consultant_name = 'Lisa';
$quiz_consultant_role = 'Assistente all\'attivazione';

$quiz_text_welcome   = "Ciao! Sono $quiz_consultant_name, la tua assistente personale all'attivazione presso $site_name. Ottime notizie! Il tuo accesso è stato ufficialmente pre-approvato. Configuriamo subito il tuo profilo professionale!";
$quiz_text_q1 = "Per garantire la piena conformità normativa e legale, ti chiediamo di confermare il tuo Paese di residenza attuale: $country_name";
$quiz_text_a1_yes    = "Sì, è la mia residenza attuale";
$quiz_text_a1_no     = "No";

$quiz_text_q2 = "Perfetto. Seleziona la fascia d'età più adatta per individuare gli strumenti finanziari più indicati per te:";

$quiz_text_q3        = "Disponi di un conto bancario attivo o di una carta di credito per ricevere pagamenti di dividendi giornalieri?";
$quiz_text_a3_yes    = "Sì, ho un conto attivo disponibile";
$quiz_text_a3_no     = "Non ancora disponibile";

$quiz_text_q4        = "Indica la tua principale fonte di reddito. (Questo parametro ci aiuta a personalizzare le impostazioni di gestione del rischio del sistema.)";
$quiz_text_a4_1      = "Lavoro dipendente / Libero professionista";
$quiz_text_a4_2      = "Reddito passivo / Risparmi personali";
$quiz_text_a4_3      = "Altre fonti";

$quiz_text_q5 = "Ottimo! L'ultimo passaggio è una breve verifica telefonica da parte del nostro responsabile per confermare la registrazione. Le chiamate vengono effettuate dalle 11:00 alle 20:00. Sarai disponibile a rispondere?";
$quiz_text_a5_yes    = "Sì, questo orario va bene per la chiamata";
$quiz_text_a5_no     = "Ti prego di chiamarmi subito";

$quiz_text_loader    = "Analisi delle opzioni selezionate e inizializzazione dei parametri di configurazione sicura dell'account…";
$quiz_text_final_ttl = "Account attivato con successo! 🎉 Il tuo spazio di lavoro digitale sicuro è ora completamente configurato. Completa qui sotto gli ultimi passaggi di verifica per garantire i pagamenti giornalieri:";

$quiz_placeholder_fname = "Nome";
$quiz_placeholder_lname = "Cognome";
$quiz_placeholder_email = "Indirizzo email";
$quiz_placeholder_phone = "Numero di telefono";
$quiz_btn_submit = "Attiva il trading";
$quiz_text_typing       = "sta scrivendo…";
$quiz_text_processing   = "Elaborazione della richiesta…";


$header_nav_aria_label = "Navigazione principale";

$nav_platform = "Piattaforma";
$nav_features = "Funzionalità";
$nav_markets = "Mercati";
$nav_process = "Processo";
$nav_security = "Sicurezza";
$nav_reviews = "Recensioni";
$nav_faq = "FAQ";
$nav_about = "Chi siamo";
$nav_contact = "Contatti";

$theme_toggle_aria_label = "Passa al tema scuro";
$theme_toggle_text = "Scuro";
$theme_toggle_text_light = "Chiaro";

$theme_toggle_dark_aria_label = "Passa al tema scuro";
$theme_toggle_light_aria_label = "Passa al tema chiaro";

$header_cta_button = "Inizia a fare trading";
$burger_menu_aria_label = "Menu";


// HERO

$hero_heading_before = "$site_name";
$hero_heading_accent = "Piattaforma";

$hero_description = "Fai trading di crypto, forex e azioni su $site_name, la piattaforma IA intelligente pensata per ogni trader. Sei alle prime armi? Goditi strumenti chiari e guidati che eliminano il caos tecnico. Sei un trader esperto? Sblocca automazione fulminea e analisi predittive precise per massimizzare il tuo vantaggio. Tutto ciò di cui hai bisogno vive in uno spazio elegante e senza distrazioni, pensato per risultati puri. Conquista il tuo vantaggio di mercato oggi stesso con $site_name.";

$hero_primary_button = "Inizia a fare trading";
$hero_secondary_button = "Scopri le funzionalità";

$hero_badge_ssl = "Protocollo protetto da SSL";
$hero_badge_guided = "Percorso guidato per principianti";


// SIGNUP FORM

$signup_heading = "Crea il tuo account";
$signup_subtitle = "Richiede meno di 3 minuti. Zero costi di attivazione.";

$form_first_name_label = "Nome";
$form_first_name_placeholder = "Mario";

$form_last_name_label = "Cognome";
$form_last_name_placeholder = "Rossi";

$form_email_label = "Indirizzo email";
$form_email_placeholder = "mario@esempio.it";

$form_phone_label = "Numero di telefono";
$form_phone_placeholder = "345 123 4567";

$form_submit_button = "Crea un account gratuito";

$form_legal_before = "Inviando i tuoi dati, accetti i nostri ";
$form_terms_text = "Termini e condizioni";


// STATS BAR

$stats_value_assets = "80+";
$stats_label_assets = "Asset negoziabili";

$stats_value_setup = "Rapida";
$stats_label_setup = "Attivazione account";

$stats_value_support = "24/7";
$stats_label_support = "Assistenza";

$stats_value_security = "Sicuro";
$stats_label_security = "Gestione dei dati";

// PLATFORM SECTION

$platform_section_label = "Ambiente di lavoro intelligente";

$platform_title_before = "Grafici professionali $site_name.";
$platform_title_accent = "Pensati per decisioni semplici.";

$platform_subtitle = "Monitora i prezzi in tempo reale ed esegui le tue operazioni da un'interfaccia pulita, pensata per ridurre il carico cognitivo e il trading emotivo.";

$platform_check_1 = "Grafici in tempo reale potenziati dall'IA";
$platform_check_2 = "Sistema di esecuzione del mercato a un tocco";

$platform_cta_button = "Scopri le funzionalità della piattaforma";


// MOCKUP / DASHBOARD

$mockup_overlay_headline = "⚡ Esecuzione istantanea disponibile";
$mockup_overlay_text = "Per instradare subito quest'ordine e cogliere l'attuale prezzo obiettivo, attiva lo stato sicuro del tuo terminale $site_name.";
$mockup_overlay_button = "Crea un account sicuro";

$mockup_dashboard_title = "Dashboard BTC/USD";

$mockup_today = "Oggi";
$mockup_sell_button = "Vendi";
$mockup_buy_button = "Acquista";
$mockup_order_pending_text = "Ordine in attesa di assegnazione";


// FEATURES SECTION

$features_section_label = "Capacità della piattaforma";

$features_title = "Tutto ciò di cui hai bisogno per fare trading con la fiducia di $site_name";
$features_subtitle = "Sicurezza, velocità e intelligenza di mercato neurale riunite in un layout chiaro";

$feature_1_title = "Sicurezza di livello bancario";
$feature_1_text = "Crittografia SSL, elaborazione sicura dei dati e un'architettura dell'account completamente protetta.";

$feature_2_title = "Analisi di mercato con IA";
$feature_2_text = "Calcoli di machine learning in tempo reale, incentrati sull'individuazione delle brusche variazioni di mercato.";

$feature_3_title = "Flussi a bassa latenza";
$feature_3_text = "Infrastruttura agile pensata per una gestione rapida degli ordini anche nei periodi di alto volume.";


// MARKETS

$markets_section_label = "Asset in tempo reale";

$markets_title = "Dashboard $site_name unificata per metriche globali";

$markets_subtitle = "Segui le variazioni degli asset in tempo reale, monitora lo slancio del mercato e utilizza l'analisi IA automatizzata per individuare rapidamente i pattern.";

$markets_ai_box_title = "💡 Efficienza operativa:";

$markets_ai_box_text = "Il trading tradizionale richiede di monitorare manualmente centinaia di indicatori. Gli algoritmi di $site_name elaborano migliaia di variazioni di prezzo ogni millisecondo, producendo modelli matematici chiari che ti permettono di cogliere i movimenti in anticipo.";

$markets_cta_button = "Accedi ai mercati";

$markets_table_asset = "Asset";
$markets_table_price = "Prezzo";
$markets_table_change = "Variazione 24h";



// ONBOARDING

$onboarding_section_label = "Processo di attivazione";

$onboarding_title = "$site_name rende l'inizio semplice e senza stress";

$onboarding_subtitle = "Nessuna esperienza pregressa con le criptovalute? La nostra guida automatizzata ti accompagna in ogni fase.";

$onboarding_step_1_title = "Registrazione sicura";
$onboarding_step_1_text = "Inserisci i tuoi dati di contatto principali tramite il nostro sistema di moduli altamente crittografato.";

$onboarding_step_2_title = "Configurazione guidata dall'IA";
$onboarding_step_2_text = "La piattaforma ti propone opzioni di interfaccia allineate alle tue preferenze personali.";

$onboarding_step_3_title = "Finanziamento sicuro";
$onboarding_step_3_text = "Attiva il tuo margine operativo di trading tramite metodi di pagamento standard e altamente affidabili.";

$onboarding_step_4_title = "Sfrutta i segnali";
$onboarding_step_4_text = "Inizia a interagire con i mercati globali utilizzando flussi di dati neurali in tempo reale.";



// MOBILE APP

$mobile_app_image_alt = "App mobile di trading $site_name su uno smartphone";

$mobile_app_section_label = "Accesso mobile";

$mobile_app_title = "Il tuo portafoglio, direttamente in tasca";

$mobile_app_subtitle = "L'intero motore di $site_name, racchiuso in un'app mobile nativa e veloce. Monitora gli asset, esegui operazioni e segui i segnali dell'IA da qualsiasi luogo.";

$mobile_app_check_1 = "Notifiche push per i movimenti di prezzo critici";
$mobile_app_check_2 = "Accesso biometrico con archiviazione locale crittografata";
$mobile_app_check_3 = "Suite grafica completa, ottimizzata per il touch";

$mobile_app_cta_button = "Scarica l'app";


// SECURITY / COMPARISON

$security_section_label = "Sistema equilibrato";

$security_title = "Parametri operativi trasparenti";

$security_subtitle = "Crediamo nell'onestà assoluta. Ecco cosa distingue il nostro sistema, insieme ai nostri limiti operativi.";

$security_our_title = "Principali vantaggi";

$security_our_item_1 = "Dashboard minimalista, progettata per una velocità di esecuzione di livello istituzionale.";
$security_our_item_2 = "Elaborazione analitica neurale dei dati, attiva 24 ore su 24, 7 giorni su 7, su tutti gli asset.";
$security_our_item_3 = "Nessun margine di transazione nascosto né commissioni di gestione inattese.";
$security_our_item_4 = "Architettura dell'account protetta direttamente tramite crittografia SSL, a tutela del tuo spazio personale.";
$security_our_item_5 = "Attivazione guidata che richiede minuti, non giorni.";

$security_other_badge = "Altre piattaforme";

$security_other_title = "Limiti comuni del settore";

$security_other_item_1 = "Dashboard affollate e sature di pubblicità, che rallentano le decisioni.";
$security_other_item_2 = "Report statici di fine giornata invece di analisi continue in tempo reale.";
$security_other_item_3 = "Spread nascosti, costi di prelievo e strutture tariffarie poco chiare.";
$security_other_item_4 = "Infrastruttura condivisa e obsoleta, con una protezione dei dati incoerente.";
$security_other_item_5 = "Verifica dell'account lenta e burocratica, che può richiedere giorni.";

$security_disclaimer = "Il confronto riflette tendenze tipiche osservate nel settore del trading retail ed è fornito a scopo puramente illustrativo; le offerte dei singoli concorrenti possono variare.";


// CAPABILITIES TABLE

$capabilities_title = "Le principali capacità della piattaforma in un colpo d'occhio";
$capabilities_subtitle = "Consulta i parametri funzionali integrati nell'accesso al tuo account.";

$capability_table_col_1 = "Parametro di capacità";
$capability_table_col_2 = "Dettagli funzionali";
$capability_table_col_3 = "Incluso";

$capability_check_aria = "Incluso";

$capability_1_title = "Sistema di trading con IA";
$capability_1_text = "Elaborazione algoritmica che fornisce dinamicamente calcoli macro strutturali.";

$capability_2_title = "Flussi aggregati";
$capability_2_text = "Grafici dinamici consolidati in tempo reale per indici e token globali moderni.";

$capability_3_title = "Stabilità multi-dispositivo";
$capability_3_text = "Resa responsiva pienamente operativa su mobile, desktop e tablet, senza intoppi.";

$capability_4_title = "Copertura multi-asset";
$capability_4_text = "Accesso unificato a crypto, forex e indici azionari da un unico account.";

$capability_5_title = "Avvisi di rischio automatizzati";
$capability_5_text = "Notifiche configurabili segnalano una volatilità insolita prima che influisca sulle tue posizioni.";

$capability_6_title = "Archivio dati crittografato";
$capability_6_text = "I tuoi dati personali e dell'account sono isolati dietro controlli di accesso crittografici a più livelli.";

$capability_7_title = "Assistenza umana 24/7";
$capability_7_text = "Operatori dell'assistenza tecnica dal vivo, pronti a rispondere immediatamente alle tue domande sulla configurazione.";


// PAYMENTS

$payments_section_label = "Depositi";

$payments_title = "Finanzia il tuo account con metodi di cui già ti fidi";

$payments_subtitle = "Carte, e-wallet e bonifici bancari, tutti protetti con crittografia SSL a 256 bit.";

$payments_aria_label = "Metodi di deposito e finanziamento accettati";

$payment_method_bank_transfer = "Bonifico bancario";
$payment_method_ssl = "Protetto con SSL";

// PARTNERS

$partners_section_label = "Infrastruttura affidabile";
$partners_title = "Costruita con partner di riferimento nel settore";
$partners_aria_label = "Partner di infrastruttura e pagamento di $site_name";


// REVIEWS

$reviews_section_label = "Feedback degli utenti";
$reviews_title = "Cosa dicono i trader su $site_name";
$reviews_subtitle = "Feedback sincero della nostra community globale, trasversale a tutti i mercati.";

$review_1_text = "Da principiante, il mondo crypto mi spaventava. $site_name ha reso la dashboard così intuitiva che mi sono sentito sicuro in pochi minuti. Gli spunti dell'IA sono chiari e diretti.";
$review_1_role = "Investitore retail verificato";

$review_2_text = "Solo l'interfaccia pulita mi fa risparmiare ore. Il fatto che l'IA filtri il rumore di mercato lasciando solo le tendenze principali cambia il modo in cui valuto le mie posizioni ogni giorno.";
$review_2_role = "Analista di asset crypto";

$review_3_text = "L'esecuzione a bassa latenza, unita a sistemi di allerta intelligenti, mi permette di modificare gli obiettivi al volo senza dover far girare più programmi contemporaneamente.";
$review_3_role = "Gestore di portafoglio privato";

$review_4_text = "Il supporto ha risposto in meno di due minuti mentre stavo configurando i parametri di verifica. Un servizio di livello istituzionale davvero eccezionale.";
$review_4_role = "Trader algoritmico";

$review_1_avatar_alt = "Michael Turner, utente $site_name";
$review_2_avatar_alt = "Anna Mitchell, utente $site_name";
$review_3_avatar_alt = "David Kovacs, utente $site_name";
$review_4_avatar_alt = "Elena Laurent, utente $site_name";
$hero_growth_visual_alt = "Grafico di crescita del trading con IA di $site_name";
$mobile_trading_visual_alt = "Interfaccia dell'app mobile di trading di $site_name";
$cta_security_visual_alt = "Meccanismi di sicurezza IA a protezione degli account $site_name";

// SEO CONTENT

$seo_content_title = "$site_name: dare potere ai trader con un'architettura IA di livello istituzionale";

$seo_content_intro = "L'interazione moderna con gli asset richiede assoluta chiarezza. Quando le interfacce dati diventano affollate di banner promozionali eccessivi o layer pesanti, le prestazioni dell'utente ne risentono. $site_name risolve questa complessità sistemica offrendo un ambiente di base elegante e reattivo, ottimizzato per un'esecuzione strategica di lungo periodo. Ogni modulo della piattaforma, dall'attivazione all'esecuzione in tempo reale, si basa sullo stesso principio: eliminare il rumore affinché i dati sottostanti possano parlare da soli, senza sacrificare la profondità che gli utenti più esperti si aspettano.";

$seo_block_1_title_before = "Asset crypto";
$seo_block_1_title_accent = "avanzati per il trading";
$seo_block_1_text_1 = "La liquidità della blockchain cambia rapidamente, rendendo essenziale un'infrastruttura a bassa latenza. $site_name collega nodi personalizzati direttamente ai principali mercati di asset digitali, offrendo agli utenti riscontri sui prezzi in tempo reale. Le nostre metriche visive chiare trasformano strutture cross-chain caotiche in canali di dati organizzati e leggibili, permettendo ai partecipanti al mercato di valutare con facilità i movimenti delle principali coppie.";
$seo_block_1_text_2 = "Oltre ai dati grezzi sui prezzi, la piattaforma contestualizza le variazioni di volume e la profondità di liquidità, così i picchi improvvisi sono più facili da interpretare invece di apparire come semplice rumore reattivo. Questa coerenza conta soprattutto nelle sessioni volatili, quando gli strumenti frammentati altrove tendono a rallentare le decisioni proprio nel momento in cui la chiarezza serve di più.";

$seo_block_2_title_before = "Analisi di mercato neurali";
$seo_block_2_title_accent = "approfondite";
$seo_block_2_text_1 = "Algoritmi automatizzati analizzano i dati di mercato in arrivo per calcolare le variazioni strutturali negli indici internazionali forex e delle materie prime. $site_name distilla calcoli complessi in tendenze di dati chiare. Questi spunti automatizzati agiscono come assistenti intelligenti, permettendo agli utenti di costruire strategie di ricerca precise senza sovraccarico cognitivo né affaticamento emotivo.";
$seo_block_2_text_2 = "Poiché i modelli funzionano in modo continuo anziché secondo una tabella di marcia fissa, i cambi di slancio emergono nel momento in cui si verificano, invece di comparire in un riepilogo ritardato. Il risultato è un livello di analisi che supporta il giudizio indipendente invece di sostituirlo, lasciando la decisione finale saldamente nelle tue mani.";

$seo_block_3_title_before = "Processo di attivazione dell'account";
$seo_block_3_title_accent = "senza attriti";
$seo_block_3_text_1 = "La conformità normativa non deve essere complicata. Il nostro percorso di registrazione strutturato protegge i dati personali degli utenti tramite processi di verifica sicuri. Le indicazioni per l'attivazione, passo dopo passo, si adattano dinamicamente a schermi mobile e desktop, per una configurazione fluida pensata per richiedere meno di tre minuti, dall'inizio fino all'accesso al terminale.";
$seo_block_3_text_2 = "Ogni campo del percorso spiega perché viene richiesto, così chi utilizza la piattaforma per la prima volta non resta mai incerto sul motivo di un passaggio di verifica. Una volta inviati i dati, i controlli di identità crittografati vengono eseguiti in background mentre il resto della dashboard rimane completamente consultabile.";

$seo_block_4_title_before = "Controlli del rischio";
$seo_block_4_title_accent = "di livello istituzionale";
$seo_block_4_text_1 = "Il dimensionamento delle posizioni, i limiti di esposizione e gli avvisi di volatilità automatizzati derivano direttamente da strumenti storicamente riservati ai desk professionali. $site_name racchiude questi controlli in un'interfaccia semplice, attivabile con un interruttore, così anche i nuovi utenti ereditano la stessa disciplina su cui i trader esperti fanno affidamento ogni giorno.";
$seo_block_4_text_2 = "Gli avvisi sono configurabili per singolo asset, quindi l'attenzione viene richiamata solo sui mercati che lo giustificano realmente. Questo approccio mirato aiuta a prevenire l'affaticamento da notifiche, che su piattaforme meno selettive spesso porta a ignorarle del tutto.";


// FAQ

$faq_section_label = "Centro assistenza";
$faq_title = "Domande frequenti";
$faq_subtitle = "Trova risposte immediate su registrazione e parametri di accesso alla piattaforma.";

$faq_1_question = "Come posso iniziare con $site_name?";
$faq_1_answer = "Ti basta compilare il modulo di registrazione qui sopra, seguire il nostro percorso di attivazione sicuro passo dopo passo e attivare i parametri del tuo account tramite il nostro sistema di elaborazione dei pagamenti strutturato.";

$faq_2_question = "Ho bisogno di esperienza avanzata con le criptovalute?";
$faq_2_answer = "No. $site_name offre una modalità dashboard dedicata ai principianti, spiegazioni analitiche automatizzate e layout di lavoro semplificati per aiutare i nuovi trader a operare in sicurezza.";

$faq_3_question = "Qual è il requisito minimo per fare trading?";
$faq_3_answer = "Il parametro di attivazione standard è pari a $app_price $app_currency. Questo importo funge da capitale operativo di trading e resta interamente sotto il tuo controllo manuale.";

$faq_4_question = "Ci sono commissioni operative nascoste sulla piattaforma?";
$faq_4_answer = "No. $site_name opera con una trasparenza tariffaria assoluta. Non applichiamo margini di accesso inattesi né calcoli di prelievo nascosti all'interno del tuo spazio di lavoro.";

$faq_5_question = "Come funziona la componente di intelligenza artificiale?";
$faq_5_answer = "I nostri sistemi neurali valutano indicatori statistici di volatilità approfonditi su più livelli di mercato, trasformando i dati grezzi in linee di tendenza semplificate per una valutazione più agevole.";

$faq_6_question = "I miei dati personali sono completamente protetti?";
$faq_6_answer = "Sì. Ogni connessione dell'account è protetta tramite protezione SSL standard sicura insieme a protocolli crittografici estremamente robusti, per isolare completamente i dati privati.";


// FINAL CTA

$final_cta_title = "Pronto a scoprire la chiarezza di $site_name?";
$final_cta_subtitle = "Unisciti a un sistema moderno ottimizzato per operazioni rapide, protezione dei dati e accesso trasparente.";
$final_cta_visual_alt = "Anteprima della piattaforma di trading $site_name";


// FOOTER

$footer_brand_description = "Un ambiente analitico moderno che offre un monitoraggio chiaro dei tuoi dati sui mercati globali.";

$footer_platform_title = "Piattaforma";
$footer_platform_interface = "Interfaccia";
$footer_platform_markets = "Panoramica mercati";

$footer_pages_title = "Pagine";

$footer_page_about = "Chi siamo";
$footer_page_contact = "Contatti";
$footer_page_signin = "Accedi";

$footer_legal_title = "Legale";

$footer_terms = "Termini di utilizzo";
$footer_privacy = "Informativa sulla privacy";

$footer_disclaimer_title = "⚠️ Avviso di rischio:";

$footer_disclaimer_text = "Fare trading di asset crypto digitali e strumenti globali comporta un notevole rischio di volatilità di mercato. Mantieni il pieno controllo dei parametri della tua strategia operativa. Le metriche automatizzate di $site_name funzionano esclusivamente come supporto analitico.";

$footer_copyright = "Tutti i diritti riservati.";



// ============================================================
// ADDITIONAL PAGES — About, Contact, FAQ, Sign, Conditions, Privacy
// ============================================================

// --- About Us ---
$about_meta_title = "Chi siamo | $site_name";
$about_meta_description = "Scopri $site_name — la nostra missione, la nostra tecnologia di trading assistita dall'IA e come aiutiamo i trader ad accedere ai mercati globali in modo responsabile.";
$about_breadcrumb_name = "Chi siamo";
$about_h1 = "Chi è $site_name";
$about_p1 = "$site_name è stata creata per rendere accessibili a tutti strumenti di trading strutturati e assistiti dall'IA — dai trader alle prime armi ai professionisti esperti.";
$about_p2 = "Crediamo che l'accesso ai mercati globali debba essere trasparente, ben spiegato e privo di complessità tecniche inutili.";
$about_h2_mission = "La nostra missione";
$about_p_mission_1 = "La nostra missione è offrire ai trader strumenti chiari e strutturati per orientarsi nei mercati crypto, forex e azionari — senza hype e senza nascondere i rischi coinvolti.";
$about_p_mission_2 = "Ogni funzionalità di $site_name è pensata all'insegna della chiarezza: cosa fa lo strumento, perché lo fa e cosa aspettarsi.";
$about_h2_ai = "Il nostro approccio assistito dall'IA";
$about_p_ai_1 = "$site_name unisce dati di mercato in tempo reale ad analisi assistite dall'IA per aiutarti a comprendere più rapidamente le condizioni di mercato.";
$about_p_ai_2 = "I nostri sistemi sono progettati come strumenti di supporto alle decisioni, non come garanzie di profitto. Il trading comporta sempre un rischio.";
$about_li_1 = "Aggregazione di dati di mercato in tempo reale";
$about_li_2 = "Analisi di mercato assistita dall'IA";
$about_li_3 = "Informative trasparenti sui rischi";
$about_li_4 = "Attivazione guidata per i nuovi trader";
$about_li_5 = "Accesso multi-asset: crypto, forex, azioni";
$about_li_6 = "Infrastruttura di sicurezza di livello bancario";
$about_li_7 = "Assistenza clienti 24/7";
$about_li_8 = "Aggiornamenti regolari di piattaforma e sicurezza";
$about_h2_security = "La sicurezza prima di tutto";
$about_p_security_1 = "Utilizziamo crittografia conforme agli standard di settore e partner infrastrutturali sicuri per proteggere i tuoi dati e il tuo account.";
$about_p_security_2 = "La sicurezza non è un ripensamento: è integrata in ogni parte della piattaforma.";
$about_h2_global = "Progettata per i mercati globali";
$about_p_global_1 = "$site_name è progettata per supportare trader in molte regioni, con supporto linguistico e valutario localizzato.";
$about_p_global_2 = "I nostri partner infrastrutturali ci aiutano a garantire un accesso affidabile, indipendentemente da dove operi.";
$about_h2_why = "Perché scegliere $site_name";
$about_why_li_1 = "Attivazione chiara e strutturata";
$about_why_li_2 = "Assistita dall'IA, non garantita dall'IA — aspettative oneste";
$about_why_li_3 = "Informazioni trasparenti su commissioni e prezzi";
$about_why_li_4 = "Assistenza clienti reattiva";
$about_why_li_5 = "Partner di pagamento regolamentati";
$about_why_li_6 = "Miglioramenti continui della piattaforma";
$about_why_li_7 = "Un'attenzione particolare alla formazione dei trader";
$about_h2_forward = "Uno sguardo al futuro";
$about_p_forward_1 = "Miglioriamo continuamente $site_name sulla base del feedback dei trader e dell'evoluzione delle condizioni di mercato.";
$about_p_forward_2 = "Grazie per aver considerato $site_name come parte del tuo percorso di trading.";

// --- Contact ---
$contact_meta_title = "Contatti | $site_name";
$contact_meta_description = "Mettiti in contatto con il team di $site_name — assistenza, domande sull'account e richieste generali.";
$contact_breadcrumb_name = "Contatti";
$contact_h1 = "Contatti";
$contact_intro_1 = "Hai una domanda sul tuo account, su una funzionalità o su come funziona $site_name? Siamo qui per aiutarti.";
$contact_intro_2 = "Compila il modulo qui sotto oppure contattaci direttamente utilizzando i dati riportati più in basso in questa pagina.";
$contact_h2_help = "Come possiamo aiutarti";
$contact_li_1 = "Attivazione e verifica dell'account";
$contact_li_2 = "Funzionalità della piattaforma e loro funzionamento";
$contact_li_3 = "Domande su depositi e prelievi";
$contact_li_4 = "Problemi tecnici";
$contact_li_5 = "Feedback generale e suggerimenti";
$contact_li_6 = "Richieste di partnership e stampa";
$contact_h2_send = "Inviaci un messaggio";
$contact_p_send = "Inserisci i tuoi dati qui sotto e il nostro team ti risponderà il prima possibile.";
$contact_form_fname = "Nome";
$contact_form_lname = "Cognome";
$contact_form_email = "Indirizzo email";
$contact_form_submit = "Invia messaggio";
$contact_h2_info = "Altri modi per contattarci";
$contact_support_label = "Assistenza:";
$contact_institutional_label = "Richieste istituzionali:";
$contact_disclaimer = "Ci impegniamo a rispondere a tutte le richieste entro 24-48 ore.";

// --- FAQ page ---
$faq_page_meta_title = "FAQ | $site_name";
$faq_page_meta_description = "Domande frequenti su $site_name — account, depositi, sicurezza e funzionamento dei nostri strumenti di trading assistiti dall'IA.";
$faq_page_breadcrumb_name = "FAQ";
$faq_page_h1 = "Domande frequenti";
$faq_page_subtitle = "Le risposte alle domande che i trader ci pongono più spesso. Non trovi quello che cerchi? Contatta il nostro team di assistenza.";

// --- Sign in / Register page ---
$sign_meta_title = "Crea il tuo account | $site_name";
$sign_meta_description = "Crea il tuo account $site_name e inizia con un accesso strutturato e assistito dall'IA ai mercati globali.";
$sign_breadcrumb_name = "Registrati";
$sign_h1 = "Crea il tuo account";
$sign_subtitle = "Richiede meno di 3 minuti. Zero costi di attivazione.";

// --- Terms & Conditions ---
$conditions_meta_title = "Termini e condizioni | $site_name";
$conditions_meta_description = "Leggi i Termini e condizioni che regolano l'utilizzo di $site_name.";
$conditions_breadcrumb_name = "Termini e condizioni";
$conditions_h1 = "Termini e condizioni";
$conditions_last_update = "Ultimo aggiornamento: " . date('F Y');
$conditions_intro = "I presenti Termini e condizioni ('Termini') regolano l'accesso e l'utilizzo di $site_name (la 'Piattaforma'). Creando un account o utilizzando la Piattaforma, accetti i presenti Termini.";
$conditions_h2_eligibility = "Requisiti di ammissibilità";
$conditions_p_eligibility = "Per utilizzare la Piattaforma devi avere almeno 18 anni ed essere legalmente in grado di stipulare contratti vincolanti nella tua giurisdizione.";
$conditions_h2_account = "Il tuo account";
$conditions_p_account = "Sei responsabile del mantenimento della riservatezza delle credenziali del tuo account e di qualsiasi attività svolta tramite il tuo account.";
$conditions_h2_risk = "Rischio di trading";
$conditions_p_risk = "Fare trading di criptovalute, forex e altri strumenti finanziari comporta un rischio considerevole, incluso il rischio di perdere l'intero investimento. I rendimenti passati non sono indicativi di risultati futuri. Nulla su questa Piattaforma costituisce consulenza finanziaria.";
$conditions_h2_conduct = "Utilizzo consentito";
$conditions_p_conduct = "Ti impegni a non utilizzare in modo improprio la Piattaforma, a non tentare accessi non autorizzati e a non utilizzare la Piattaforma per scopi illeciti.";
$conditions_h2_liability = "Limitazione di responsabilità";
$conditions_p_liability = "Nella misura massima consentita dalla legge, $site_name non è responsabile per eventuali danni indiretti, incidentali o consequenziali derivanti dall'utilizzo della Piattaforma.";
$conditions_h2_changes = "Modifiche ai presenti Termini";
$conditions_p_changes = "Potremmo aggiornare periodicamente i presenti Termini. L'utilizzo continuato della Piattaforma dopo l'entrata in vigore delle modifiche costituisce accettazione dei Termini aggiornati.";
$conditions_h2_contact = "Contatti";
$conditions_p_contact = "Le domande relative ai presenti Termini possono essere inviate al nostro team di assistenza tramite la pagina Contatti.";

// --- Privacy Policy ---
$privacy_meta_title = "Informativa sulla privacy | $site_name";
$privacy_meta_description = "Scopri come $site_name raccoglie, utilizza e protegge i tuoi dati personali.";
$privacy_breadcrumb_name = "Privacy";
$privacy_h1 = "Informativa sulla privacy";
$privacy_last_update = "Ultimo aggiornamento: " . date('F Y');
$privacy_intro = "La presente Informativa sulla privacy spiega come $site_name ('noi') raccoglie, utilizza e protegge i tuoi dati personali quando utilizzi la nostra Piattaforma.";
$privacy_h2_collect = "Dati che raccogliamo";
$privacy_p_collect = "Raccogliamo i dati che ci fornisci direttamente (come nome, email e numero di telefono durante la registrazione), oltre a dati tecnici (come indirizzo IP e tipo di browser) raccolti automaticamente.";
$privacy_h2_use = "Come utilizziamo i tuoi dati";
$privacy_p_use = "Utilizziamo i tuoi dati per fornire e migliorare la Piattaforma, comunicare con te, verificare la tua identità e adempiere agli obblighi di legge.";
$privacy_h2_sharing = "Condivisione dei dati";
$privacy_p_sharing = "Non vendiamo i tuoi dati personali. Potremmo condividere informazioni con fornitori di servizi di fiducia che ci aiutano a gestire la Piattaforma, nel rispetto di obblighi di riservatezza.";
$privacy_google_choices = 'Puoi gestire il modo in cui Google utilizza le informazioni relative alle tue visite tramite le <a href="http://www.google.com/settings/ads" target="_blank" rel="noopener">Impostazioni annunci di Google</a>, disattivare la pubblicità basata sugli interessi tramite il <a href="https://tools.google.com/dlpage/gaoptout" target="_blank" rel="noopener">componente aggiuntivo del browser per la disattivazione di Google Analytics</a>, oppure consultare l\'<a href="https://www.google.com/intl/it/policies/privacy/" target="_blank" rel="noopener">Informativa sulla privacy di Google</a> per maggiori dettagli.';
$privacy_h2_security = "Sicurezza dei dati";
$privacy_p_security = "Adottiamo misure tecniche e organizzative conformi agli standard di settore per proteggere i tuoi dati, inclusa la crittografia dei dati in transito.";
$privacy_h2_rights = "I tuoi diritti";
$privacy_p_rights = "A seconda della tua giurisdizione, potresti avere il diritto di accedere, correggere o eliminare i tuoi dati personali. Contattaci per esercitare questi diritti.";
$privacy_h2_retention = "Conservazione dei dati";
$privacy_p_retention = "Conserviamo i tuoi dati personali solo per il tempo necessario alle finalità descritte nella presente informativa, o per il periodo richiesto dalla legge.";
$privacy_h2_contact = "Contattaci";
$privacy_p_contact = "Per domande relative alla privacy, ti invitiamo a contattarci tramite la nostra pagina Contatti.";

// ==========================================
// RISK WARNING PAGE
// ==========================================
$page_title_risk_warning = "Avviso sui rischi | $site_name";
$page_description_risk_warning = "Scopri i rischi del trading automatizzato di criptovalute con $site_name, inclusi volatilità di mercato, rischio di esecuzione e aspetti normativi.";
$risk_warning_breadcrumb_name = "Avviso sui rischi";
$risk_warning_title = "Avviso sui rischi";
$risk_warning_intro = "Comprendere i rischi è il primo passo verso un trading consapevole.";

$risk_warning_ai_heading = "Come il nostro sistema di IA aiuta a gestire il rischio:";
$risk_warning_ai_1 = "<strong>Efficienza algoritmica e trading senza emozioni:</strong> Algoritmi avanzati analizzano i segnali di mercato per eseguire le operazioni in modo obiettivo nei momenti ottimali.";
$risk_warning_ai_2 = "<strong>Strategie basate sui dati:</strong> Le strategie si basano su pattern di mercato verificati e analisi in tempo reale, non su semplici supposizioni.";
$risk_warning_ai_3 = "<strong>Impostazioni flessibili e pieno controllo:</strong> Modifica i tuoi parametri di rischio in qualsiasi momento. Monitora tutti i saldi e le operazioni in modo trasparente sulla tua dashboard, senza commissioni nascoste e con prelievi senza restrizioni.";

$risk_warning_disclaimer = "<strong>Avvertenza:</strong> Il trading comporta sempre un rischio. I sistemi automatizzati (inclusa l'IA) non garantiscono profitti, possono presentare malfunzionamenti dovuti a errori software o eventi di mercato imprevisti, e richiedono il monitoraggio da parte dell'utente. I rendimenti passati non sono indicativi di risultati futuri. Questa piattaforma ha finalità puramente informative e di marketing e non fornisce consulenza finanziaria.";

$risk_warning_s1_heading = "1. Rischi generali e del mercato delle criptovalute";
$risk_warning_s1_intro = "Le criptovalute sono asset speculativi altamente volatili, negoziati 24 ore su 24 con una supervisione normativa minima nella maggior parte delle giurisdizioni.";
$risk_warning_s1_1 = "I valori possono fluttuare drasticamente in periodi brevi, portando potenzialmente alla perdita totale del capitale investito.";
$risk_warning_s1_2 = "I valori di mercato possono essere fortemente influenzati da aggiornamenti normativi, sviluppi tecnici, violazioni della sicurezza o eventi macroeconomici più ampi.";
$risk_warning_s1_3 = "Alcuni asset possono perdere completamente ogni valore. Investi solo fondi che puoi permetterti di perdere.";

$risk_warning_s2_heading = "2. Rischi di esecuzione, liquidità e leva finanziaria";
$risk_warning_s2_1 = "<strong>Volatilità del mercato e liquidità:</strong> Movimenti di prezzo estremi (10-20% o più al giorno) o bassa liquidità (specialmente su coin minori) possono causare ritardi, interruzioni della piattaforma e uno slippage di esecuzione significativo. Gli ordini stop-loss non possono garantire limiti di perdita in condizioni estreme.";
$risk_warning_s2_2 = "<strong>Rischi di leva finanziaria e margine:</strong> I prodotti a leva amplificano sia i guadagni sia le perdite, il che significa che puoi perdere più del tuo deposito iniziale. Circa il 70-80% dei conti degli investitori retail perde denaro quando fa trading di prodotti a leva.";

$risk_warning_s3_heading = "3. Rischi tecnici, di cybersicurezza e legati a terze parti";
$risk_warning_s3_1 = "<strong>Fattori tecnici:</strong> Il trading online comporta intrinsecamente rischi legati a disconnessioni internet, errori hardware/software e indisponibilità del servizio.";
$risk_warning_s3_2 = "<strong>Cybersicurezza:</strong> Gli account crypto sono bersagli frequenti di phishing, malware e attacchi hacker. Le transazioni sono irreversibili; la compromissione delle tue credenziali può comportare una perdita permanente.";
$risk_warning_s3_3 = "<strong>Piattaforme di terze parti:</strong> Questo sito web può mettere in contatto gli utenti con piattaforme di terze parti. Non controlliamo, approviamo né garantiamo la loro sicurezza, il loro funzionamento o la loro solvibilità. Esegui sempre le tue verifiche prima di depositare fondi su piattaforme esterne.";

$risk_warning_s4_heading = "4. Disposizioni normative, fiscali e finali";
$risk_warning_s4_1 = "<strong>Conformità legale e tasse:</strong> I quadri normativi variano ampiamente e cambiano rapidamente. Gli utenti sono gli unici responsabili di garantire che la propria attività di trading sia conforme alle leggi locali e di adempiere ai propri obblighi fiscali.";
$risk_warning_s4_2 = "<strong>Nessuna garanzia di profitto:</strong> Non esiste un trading di criptovalute \"sicuro\" o privo di rischi. Eventuali cifre di rendimento o esempi di performance sono puramente ipotetici.";
$risk_warning_s4_3 = "<strong>Idoneità:</strong> Se non comprendi appieno i rischi, dipendi da fondi essenziali o fai trading con denaro preso in prestito, il trading di criptovalute non è adatto a te. In caso di dubbio, consulta un consulente finanziario indipendente e autorizzato.";

$risk_warning_contact = "<strong>Contatti:</strong> Per qualsiasi domanda relativa a questa dichiarazione o per inviare una richiesta, contatta il nostro team ufficiale di assistenza clienti tramite il modulo di contatto sul nostro sito web.";
$footer_risk_warning = "Avviso sui rischi";
