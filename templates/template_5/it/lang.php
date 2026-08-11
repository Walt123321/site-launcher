<?php
require __DIR__ . '/../lang.php';

// Identity / config variables are intentionally NOT overridden here — they are inherited
// as-is from the root lang.php so brand/pricing swaps still work correctly at deploy time:
// $site_name, $site_url, $site_domain, $app_price, $app_currency, $rating_value,
// $rating_count, $review_count, $country_name, $support_email, $institutional_email.

$site_lang = 'it-IT';
$form_language = 'it'; // matches this page's own language, not the offer's global default

// Reviews
$review_1_author = "Investitore privato";
$review_2_author = "Trader indipendente";
$review_3_author = "Trader di asset digitali";
$review_4_author = "Alla ricerca di reddito passivo";


// META TITLE / DESCRIPTION (per page)
$home_meta_title = "$site_name — Sito ufficiale | Piattaforma di trading";
$home_meta_description = "$site_name ⭐ — piattaforma di trading intelligente basata su IA per analisi di mercato in tempo reale e segnali di trading chiari ⚡ Prova strumenti intelligenti e insight con un tour guidato.";



$quiz_consultant_name = 'Mia';
$quiz_consultant_role = 'Assistente all\'onboarding';

$quiz_text_welcome   = "Ciao! Sono $quiz_consultant_name, la tua assistente personale all'onboarding presso $site_name. Ottime notizie! Il tuo accesso è stato ufficialmente pre-approvato. Consentici ora di configurare il tuo profilo professionale!";
$quiz_text_q1 = "Per garantire la piena conformità legale e normativa, conferma il tuo attuale paese di residenza: $country_name";
$quiz_text_a1_yes    = "Sì, è la mia residenza attuale";
$quiz_text_a1_no     = "No";

$quiz_text_q2 = "Perfetto. Seleziona la fascia d'età appropriata per individuare gli strumenti finanziari più adatti a te:";

$quiz_text_q3        = "Disponi di un conto bancario attivo o di una carta di credito per ricevere pagamenti dividendi giornalieri regolari?";
$quiz_text_a3_yes    = "Sì, è disponibile un conto attivo";
$quiz_text_a3_no     = "Non ancora disponibile";

$quiz_text_q4        = "Indica la tua principale fonte di reddito. (Questo parametro aiuta a personalizzare le impostazioni di gestione del rischio del sistema.)";
$quiz_text_a4_1      = "Lavoro dipendente / Libero professionista";
$quiz_text_a4_2      = "Reddito passivo / Risparmi personali";
$quiz_text_a4_3      = "Altre fonti";

$quiz_text_q5 = "Ottimo! L'ultimo passaggio è una breve verifica telefonica da parte del nostro responsabile per confermare la tua registrazione. Le chiamate vengono effettuate dalle 11:00 alle 20:00. Sarai disponibile per rispondere?";
$quiz_text_a5_yes    = "Sì, questo orario va bene per la chiamata";
$quiz_text_a5_no     = "Avvia subito la chiamata";

$quiz_text_loader    = "Analisi delle opzioni richieste e inizializzazione dei parametri di configurazione sicura dell'account in corso…";
$quiz_text_final_ttl = "Account autorizzato con successo! 🎉 Il tuo spazio di lavoro digitale sicuro è completamente configurato. Completa i passaggi di verifica finali qui sotto per garantire i pagamenti giornalieri:";

$quiz_placeholder_fname = "Nome";
$quiz_placeholder_lname = "Cognome";
$quiz_placeholder_email = "Indirizzo e-mail";
$quiz_placeholder_phone = "Numero di telefono";
$quiz_btn_submit = "Attiva il trading";
$quiz_text_typing       = "sta scrivendo…";
$quiz_text_processing   = "Elaborazione della richiesta in corso…";


$about_meta_title = "Chi è $site_name | Infrastruttura di trading crypto basata su IA";
$about_meta_description = "Scopri $site_name, un'avanzata infrastruttura di trading crypto basata su IA incentrata su analisi predittiva, market intelligence, monitoraggio della volatilità e ricerca sugli asset digitali.";

$contact_meta_title = "Contatta $site_name | Richiedi l'accesso alla piattaforma di trading IA";
$contact_meta_description = "Contatta $site_name per richiedere l'accesso, avere informazioni sulla nostra infrastruttura di trading crypto basata su IA, sui mercati supportati, sulla market intelligence per asset digitali o sull'onboarding alla piattaforma.";

$terms_meta_title = "Termini e Condizioni | Condizioni del sito e della piattaforma $site_name";
$terms_meta_description = "Leggi i Termini e Condizioni di $site_name relativi all'uso del sito, ai contenuti informativi, all'infrastruttura di trading IA, alla responsabilità dell'utente, ai servizi di terze parti e alle limitazioni di rischio.";

$privacy_meta_title = "Informativa sulla privacy | Protezione dei dati e privacy dell'utente su $site_name";
$privacy_meta_description = "Leggi l'Informativa sulla privacy di $site_name per capire come raccogliamo, utilizziamo, proteggiamo, conserviamo e gestiamo i dati personali inviati tramite il nostro sito di infrastruttura di trading crypto IA.";

$cookies_meta_title = "Cookie Policy | Cookie e tracciamento del sito $site_name";
$cookies_meta_description = "Scopri come $site_name utilizza cookie, tecnologie di analisi, strumenti di monitoraggio delle prestazioni e servizi di funzionalità del sito per migliorare l'esperienza utente e le prestazioni della piattaforma.";

$aml_meta_title = "Politica AML | Standard antiriciclaggio di $site_name";
$aml_meta_description = "Consulta la Politica AML di $site_name, che include l'uso responsabile degli asset digitali, la sensibilizzazione contro il riciclaggio di denaro, le attività vietate, i principi di monitoraggio e le aspettative di conformità.";

$risk_meta_title = "Avviso sui rischi | Dichiarazione sui rischi del trading crypto di $site_name";
$risk_meta_description = "Consulta l'Avviso sui rischi di $site_name per comprendere la volatilità delle criptovalute, l'incertezza del trading, i limiti dei segnali IA, il rischio di mercato, il rischio di liquidità e la responsabilità dell'utente.";

$exchanges_meta_title = "Exchange supportati | Copertura di market intelligence di $site_name";
$exchanges_meta_description = "Scopri i tipi di exchange di criptovalute, le sedi di liquidità e i mercati di asset digitali monitorati dall'infrastruttura di market intelligence basata su IA di $site_name.";


$about_breadcrumb_name = "Chi è $site_name";
$contact_breadcrumb_name = "Contatta $site_name";
$terms_breadcrumb_name = "Termini e Condizioni";
$privacy_breadcrumb_name = "Informativa sulla privacy";
$cookies_breadcrumb_name = "Cookie Policy";
$aml_breadcrumb_name = "Politica AML";
$risk_breadcrumb_name = "Avviso sui rischi";
$exchanges_breadcrumb_name = "Exchange supportati";

$hero_text = "Vivi una nuova era del trading con la nostra avanzata piattaforma di trading crypto. Con la tecnologia IA di $site_name puoi ottimizzare i tuoi rendimenti e prendere decisioni di investimento informate.";


// HEADER / NAV / FOOTER
$logo_subtitle = "Infrastruttura di trading IA";
$nav_signals = "Segnali";
$nav_reviews = "Recensioni";
$nav_about = "Chi siamo";
$nav_exchanges = "Exchange";
$nav_exchanges_full = "Exchange supportati";
$nav_risk = "Rischio";
$nav_risk_full = "Avviso sui rischi";
$nav_faq = "FAQ";
$nav_privacy = "Informativa sulla privacy";
$nav_terms = "Termini e Condizioni";
$nav_cookies = "Cookie Policy";
$nav_cookies_short = "Cookie";
$nav_aml = "Politica AML";
$nav_contact_us = "Contattaci";
$nav_contact = "Contatti";
$nav_get_started = "Inizia ora";
$header_ai_status = "Nucleo IA operativo";
$header_menu_aria = "Menu";
$footer_platform = "Piattaforma";
$footer_resources = "Risorse";
$footer_contact_title = "Contatti";
$footer_ai_signals = "Segnali IA";
$footer_about_link = "Chi è $site_name";
$footer_description = "$site_name è un'avanzata infrastruttura di trading crypto basata su IA, incentrata su analisi predittiva, market intelligence di livello istituzionale, modellazione della volatilità, sistemi di esecuzione neurali e gestione automatizzata del rischio.";
$footer_monitoring = "Monitoraggio dell'infrastruttura IA 24/7";
$footer_global_markets = "Mercati globali di asset digitali";
$footer_disclaimer_title = "Avviso sui rischi";
$footer_disclaimer_p1 = "Il trading di criptovalute e gli investimenti in asset digitali comportano un rischio finanziario significativo e potrebbero non essere adatti a tutti gli investitori. La volatilità del mercato, le interruzioni di liquidità, i guasti tecnologici, i cambiamenti normativi e le condizioni macroeconomiche possono incidere significativamente sulla performance degli asset.";
$footer_disclaimer_p2 = "$site_name fornisce un'infrastruttura analitica basata su IA, market intelligence predittiva e tecnologie di trading automatizzate. Nulla su questo sito costituisce consulenza finanziaria, di investimento, legale o fiscale.";
$footer_disclaimer_p3 = "I rendimenti passati non garantiscono risultati futuri. Gli utenti devono valutare autonomamente i rischi prima di interagire con i mercati delle criptovalute o con sistemi di trading automatizzati.";
$footer_rights = "Tutti i diritti riservati.";
$footer_lang_label = "Lingua";



// HOME FORM
$home_form_fname = "Nome";
$home_form_lname = "Cognome";
$home_form_email = "E-mail";
$home_form_submit_access = "Ottieni l'accesso";
$home_form_submit_platform = "Richiedi l'accesso alla piattaforma";

// CONTACT FORM
$contact_form_fname = "Nome";
$contact_form_lname = "Cognome";
$contact_form_email = "E-mail";
$contact_form_submit = "Richiedi l'accesso";


// HOME LABELS
$home_label_ai_confidence = "Affidabilità IA";
$home_label_update_speed = "Velocità di aggiornamento";
$home_label_market_mode = "Modalità di mercato";
$home_label_market_condition = "Condizione di mercato";
$home_label_buyer_activity = "Attività degli acquirenti";
$home_label_market_activity = "Attività di mercato";
$home_label_risk_level = "Livello di rischio";
$home_label_updated = "Aggiornato";
$home_label_live_analysis = "ANALISI LIVE";

// JS
$home_js_sec_ago = "sec fa";
$js_sec_ago = "sec fa";
$js_close_notification = "Chiudi la notifica";

$js_signal_long_direction = "Probabilità di trend rialzista in aumento";
$js_signal_long_market = "Espansione controllata";
$js_signal_long_pressure_label = "Pressione di liquidità";
$js_signal_long_pressure = "Rialzista";

$js_signal_short_direction = "Pressione ribassista in aumento";
$js_signal_short_market = "Alta instabilità";
$js_signal_short_pressure_label = "Pressione di rischio";
$js_signal_short_pressure = "Ribassista";

$js_signal_watch_direction = "Zona di consolidamento rilevata";
$js_signal_watch_market = "Consolidamento neutrale";
$js_signal_watch_pressure_label = "Flusso istituzionale";
$js_signal_watch_pressure = "Stabile";

$js_hero_long_pair = "BTC/USD Espansione del momentum";
$js_hero_long_regime = "Rialzista";
$js_hero_long_feed_1 = "Rilevata espansione di liquidità BTC";
$js_hero_long_feed_2 = "La pressione dell'order flow diventa positiva";
$js_hero_long_feed_3 = "Il modello IA conferma la continuazione rialzista";

$js_hero_watch_pair = "ETH/USD Compressione della volatilità";
$js_hero_watch_regime = "Neutrale";
$js_hero_watch_feed_1 = "Rilevata zona di compressione ETH";
$js_hero_watch_feed_2 = "L'IA attende una conferma più solida";
$js_hero_watch_feed_3 = "La liquidità rimane stabile";

$js_hero_short_pair = "SOL/USD Espansione del rischio";
$js_hero_short_regime = "Avversione al rischio";
$js_hero_short_feed_1 = "Rilevata pressione ribassista su SOL";
$js_hero_short_feed_2 = "Il modello di rischio segnala un'espansione della volatilità";
$js_hero_short_feed_3 = "L'IA riduce l'esposizione rialzista";

// JS — live user popup actions
$js_live_action_1 = "si è unito a $site_name da";
$js_live_action_2 = "ha richiesto l'accesso alla piattaforma da";
$js_live_action_3 = "ha avviato il monitoraggio dei segnali IA da";
$js_live_action_4 = "ha attivato l'analisi di mercato da";
$js_live_action_5 = "ha aperto la dashboard istituzionale da";
$js_live_action_6 = "si è connesso a $site_name da";


// HOME PAGE
$home_hero_label = "Piattaforma crypto IA per ogni livello di esperienza";
$home_hero_title = "Piattaforma $site_name";
$home_hero_desc = "$site_name aiuta principianti e trader esperti a esplorare i mercati crypto con analisi basate su IA, monitoraggio del mercato in tempo reale, strumenti di sensibilizzazione al rischio e supporto guidato alla piattaforma.";
$home_hero_feat_1 = "Analisi IA semplici per i nuovi utenti";
$home_hero_feat_2 = "Monitoraggio crypto in tempo reale e aggiornamenti dei segnali";
$home_hero_feat_3 = "Strumenti attenti al rischio per decisioni più consapevoli";
$home_hero_feat_4 = "Analisi avanzate per i trader esperti";
$home_btn_request_access = "Ottieni l'accesso alla piattaforma";
$home_btn_view_signals = "Visualizza i segnali IA";
$home_trust_data_label = "Punti dati di mercato analizzati";
$home_trust_confidence_label = "Affidabilità media dei segnali";
$home_trust_monitoring_label = "Monitoraggio di mercato con IA";
$home_terminal_title = "$site_name Vista di mercato guidata dall'IA";
$home_terminal_insight_label = "Analisi di mercato attuale dell'IA";
$home_terminal_feed_1 = "L'attività del mercato BTC mostra un momentum più forte";
$home_terminal_feed_2 = "Il movimento dell'ETH è monitorato per la conferma";
$home_terminal_feed_3 = "L'assistente IA evidenzia una possibile zona di opportunità";
$home_trust_strip_1 = "Analisi IA per principianti e trader esperti";
$home_trust_strip_2 = "Monitoraggio dei mercati delle criptovalute 24/7";
$home_trust_strip_3 = "Analisi dei rischi e delle opportunità in tempo reale";
$home_trust_strip_4 = "Accesso guidato a strumenti di trading avanzati";
$home_signals_eyebrow = "$site_name NUCLEO IA LIVE";
$home_signals_title = "Segnali di mercato IA in tempo reale per decisioni crypto più intelligenti";
$home_signals_desc = "$site_name monitora costantemente l'attività dei mercati delle criptovalute, la volatilità, le condizioni di liquidità, le tendenze di sentiment e i dati blockchain per generare analisi basate su IA e segnali di mercato in tempo reale, sia per i principianti che per i trader esperti.";
$home_signals_terminal_title = "$site_name Motore di segnali IA";
$home_signal_btc_sub = "Rilevato momentum positivo";
$home_signal_btc_dir = "Probabilità di trend rialzista in aumento";
$home_signal_btc_market = "Momentum positivo";
$home_signal_btc_activity = "Forte";
$home_signal_eth_sub = "In attesa di conferma del mercato";
$home_signal_eth_dir = "Rilevato movimento laterale";
$home_signal_eth_market = "Trend neutrale";
$home_signal_eth_activity = "Stabile";
$home_signal_sol_sub = "Rilevato rischio di mercato elevato";
$home_signal_sol_dir = "Pressione ribassista in aumento";
$home_signal_sol_market = "Alta volatilità";
$home_signal_sol_risk = "Elevato";
$home_why_eyebrow = "PERCHÉ $site_name?";
$home_why_title = "Strumenti crypto basati su IA pensati per ogni livello di esperienza";
$home_why_desc_1 = "$site_name aiuta gli utenti a comprendere meglio i mercati delle criptovalute grazie all'intelligenza artificiale, al monitoraggio in tempo reale, alle analisi di mercato e agli strumenti di sensibilizzazione al rischio. Che tu stia scoprendo il mondo crypto per la prima volta o abbia già esperienza di trading, la piattaforma è progettata per rendere l'analisi di mercato più accessibile e facile da comprendere.";
$home_why_desc_2 = "L'infrastruttura di $site_name valuta costantemente l'attività di mercato, i movimenti di prezzo, le condizioni di liquidità, le tendenze di sentiment e i dati blockchain per individuare opportunità emergenti e condizioni di mercato in evoluzione. I nuovi utenti possono beneficiare di un supporto guidato alla piattaforma, mentre i trader esperti possono esplorare strumenti analitici avanzati e market intelligence basata su IA.";
$home_flow_1 = "Monitoraggio del mercato";
$home_flow_2 = "Analisi IA";
$home_flow_3 = "Individuazione delle opportunità";
$home_flow_4 = "Valutazione del rischio";
$home_flow_5 = "Insight azionabili";
$home_reviews_eyebrow = "COMMUNITY $site_name";
$home_reviews_title = "Cosa dicono gli utenti di $site_name";
$home_reviews_desc = "Dai nuovi utenti crypto ai trader esperti, le persone usano $site_name per comprendere meglio le condizioni di mercato, esplorare analisi basate su IA e affrontare le decisioni sulle criptovalute con maggiore chiarezza.";
$home_review_1_text = "Prima di scoprire $site_name, mi sentivo sopraffatto dalla quantità di informazioni nel mondo delle criptovalute. Ogni piattaforma sembrava complicata e temevo continuamente di commettere errori. Ciò che apprezzo di più di $site_name è quanto tutto risulti accessibile. Gli insight dell'IA mi hanno aiutato a comprendere le condizioni di mercato senza sentirmi perso, e la piattaforma mi ha dato la fiducia necessaria per imparare al mio ritmo. Sono davvero grato di quanto l'esperienza si sia rivelata più semplice di quanto mi aspettassi.";
$home_review_1_tag = "Un inizio sicuro e semplice";
$home_review_badge = "UTENTE VERIFICATO";
$home_review_2_text = "Ho passato mesi a osservare piattaforme crypto senza mai sentirmi abbastanza a mio agio da fare il primo passo. $site_name ha cambiato completamente questa esperienza. La piattaforma ha reso le informazioni di mercato più facili da comprendere, e non ho mai sentito il bisogno di anni di esperienza di trading per usare gli strumenti. Ciò che mi ha colpito di più è stato l'equilibrio tra semplicità e una potente analisi IA. È come avere una guida disponibile ogni volta che ne hai bisogno. Sono grato di aver trovato una piattaforma che mi ha aiutato a imparare senza sentirmi intimidito.";
$home_review_2_tag = "Un apprendimento più semplice";
$home_review_3_text = "Ho provato molte piattaforme di analisi di mercato, e $site_name si distingue perché unisce accessibilità e reale profondità analitica. I nuovi utenti comprendono rapidamente la piattaforma, mentre i trader esperti continuano a ricevere segnali di mercato utili guidati dall'IA, monitoraggio del rischio e intelligence crypto in tempo reale. Questo equilibrio è difficile da trovare. La piattaforma offre un contesto di mercato significativo senza sopraffare gli utenti, qualcosa che pochissimi strumenti crypto riescono a ottenere.";
$home_review_3_tag = "Strumenti avanzati con un utilizzo semplice";
$home_review_span_1 = "Nuovo utente crypto";
$home_review_span_2 = "Utente della piattaforma per la prima volta";
$home_review_span_3 = "Trader crypto professionista";
$home_review_1_avatar_alt = "Sean Miller, utente $site_name";
$home_review_2_avatar_alt = "Ethan Lucas, utente $site_name";
$home_review_3_avatar_alt = "Alexander Thompson, utente $site_name";
$home_hero_visual_alt = "Dashboard di analisi di mercato basata su IA su $site_name";
$home_signal_visual_alt = "Segnale di trading in tempo reale generato dall'IA di $site_name";
$home_device_visual_alt = "Analisi crypto visualizzate su un dispositivo connesso tramite $site_name";
$home_security_visual_alt = "Scudo di sicurezza che rappresenta la protezione dell'account $site_name";
$home_contact_eyebrow = "INIZIA CON $site_name";
$home_contact_title = "Esplora la piattaforma con fiducia";
$home_contact_section_title = "Esplora la piattaforma con fiducia";
$home_contact_desc_1 = "Che tu sia completamente nuovo ai mercati delle criptovalute o abbia già esperienza di trading, $site_name offre accesso ad analisi di mercato basate su IA, strumenti di monitoraggio in tempo reale e analisi intelligenti pensate per aiutare gli utenti a comprendere meglio le opportunità legate agli asset digitali.";
$home_contact_desc_2 = "Invia i tuoi dati per saperne di più sulla piattaforma, scoprire le funzionalità disponibili e capire come $site_name può aiutarti a orientarti nei mercati delle criptovalute grazie a tecnologia avanzata e supporto guidato alla piattaforma.";
$home_seo_toggle = "Scopri di più sulla piattaforma IA di $site_name";
$home_seo_h2 = "$site_name Piattaforma IA per decisioni più intelligenti sul mercato crypto";
$home_seo_p1 = "$site_name è una piattaforma di criptovalute basata su IA, progettata sia per i principianti che per i trader esperti. La piattaforma combina intelligenza artificiale, monitoraggio del mercato in tempo reale e strumenti analitici avanzati per aiutare gli utenti a comprendere meglio i mercati degli asset digitali e a individuare potenziali opportunità.";
$home_seo_p2 = "A differenza di molte piattaforme di trading tradizionali che richiedono una conoscenza approfondita del mercato, $site_name è pensata per rendere più semplici da comprendere le informazioni di mercato complesse. La piattaforma analizza costantemente l'attività delle criptovalute, i movimenti di prezzo, le tendenze di sentiment, le condizioni di liquidità e i dati blockchain, trasformando grandi volumi di informazioni in insight pratici.";
$home_seo_p3 = "Che tu stia esplorando i mercati delle criptovalute per la prima volta o abbia già esperienza nel trading di asset digitali, $site_name offre strumenti intelligenti pensati per supportare decisioni più informate, adattandosi in tempo reale alle mutevoli condizioni di mercato.";
$home_seo_h3_1 = "Analisi di mercato IA resa accessibile";
$home_seo_h3_1_p1 = "$site_name utilizza l'intelligenza artificiale per valutare un'ampia gamma di indicatori di mercato, tra cui l'attività di trading, gli schemi di volatilità, le condizioni di liquidità, gli eventi blockchain e il sentiment di mercato. Elaborando le informazioni in modo continuo, la piattaforma aiuta gli utenti a comprendere più chiaramente il comportamento attuale del mercato.";
$home_seo_h3_1_p2 = "I modelli IA sono progettati per adattarsi a contesti in evoluzione anziché basarsi su ipotesi statiche. Questo consente alla piattaforma di rispondere in modo dinamico all'evoluzione delle tendenze crypto e alle opportunità di mercato emergenti.";
$home_seo_h3_1_p3 = "Pur essendo abbastanza avanzata per i trader esperti, la piattaforma è strutturata anche per rimanere accessibile ai nuovi utenti che desiderano accedere a una market intelligence guidata dall'IA senza richiedere competenze tecniche approfondite.";
$home_seo_h3_2 = "Segnali di mercato IA in tempo reale";
$home_seo_h3_2_p1 = "$site_name monitora costantemente i mercati delle criptovalute e genera analisi basate su IA in base all'evoluzione dell'attività di mercato. La piattaforma valuta momentum, volatilità, condizioni di liquidità e comportamento generale del mercato per fornire segnali analitici in tempo reale.";
$home_seo_h3_2_p2 = "Bitcoin, Ethereum, Solana, XRP, Avalanche e altri importanti asset digitali sono monitorati tramite modelli analitici adattivi che si regolano automaticamente in base alle condizioni di mercato in evoluzione.";
$home_seo_h3_2_p3 = "Invece di affidarsi a un singolo indicatore o a una metrica isolata, $site_name combina più fonti di informazione in un quadro analitico più ampio, pensato per offrire una visione più completa delle condizioni di mercato.";
$home_seo_h3_3 = "Strumenti intelligenti di sensibilizzazione al rischio";
$home_seo_h3_3_p1 = "I mercati delle criptovalute possono cambiare rapidamente. $site_name include sistemi di monitoraggio basati su IA progettati per identificare volatilità insolita, condizioni di liquidità in evoluzione e rischi di mercato emergenti.";
$home_seo_h3_3_p2 = "La piattaforma valuta costantemente il comportamento del mercato e i potenziali fattori di rischio, aiutando gli utenti a comprendere meglio le condizioni in evoluzione e a prendere decisioni più informate.";
$home_seo_h3_3_p3 = "Combinando più livelli di analisi, $site_name mira a migliorare la consapevolezza del mercato e ad aiutare gli utenti ad affrontare periodi di maggiore incertezza con più fiducia.";
$home_seo_h3_4 = "Pensata per i mercati crypto moderni";
$home_seo_h3_4_p1 = "$site_name combina intelligenza artificiale, tecnologie di monitoraggio in tempo reale e strumenti analitici avanzati in un'unica piattaforma progettata per i moderni mercati di asset digitali.";
$home_seo_h3_4_p2 = "L'infrastruttura valuta costantemente l'attività di mercato, gli sviluppi blockchain, i cambiamenti di sentiment e le tendenze di liquidità per offrire una visione completa del comportamento del mercato crypto.";
$home_seo_h3_4_p3 = "Man mano che i mercati degli asset digitali continuano a evolversi, gli strumenti basati su IA possono aiutare gli utenti a elaborare le informazioni in modo più efficiente e a comprendere meglio contesti di mercato sempre più complessi. $site_name è progettata per rendere queste capacità accessibili a una gamma più ampia di partecipanti al mercato.";
$home_seo_side_1_label = "Analisi IA";
$home_seo_side_1_title = "Analisi di mercato facile da comprendere";
$home_seo_side_1_desc = "Insight basati su IA pensati sia per utenti crypto nuovi che esperti.";
$home_seo_side_2_label = "Monitoraggio del mercato";
$home_seo_side_2_title = "Tracciamento crypto in tempo reale";
$home_seo_side_2_desc = "Monitoraggio continuo dei principali mercati delle criptovalute e delle condizioni di mercato in evoluzione.";
$home_seo_side_3_label = "Sensibilizzazione al rischio";
$home_seo_side_3_title = "Rilevamento intelligente del rischio";
$home_seo_side_3_desc = "Strumenti di monitoraggio avanzati progettati per evidenziare le dinamiche di mercato e la volatilità in evoluzione.";
$home_seo_side_4_label = "Tecnologia IA";
$home_seo_side_4_title = "Modelli analitici adattivi";
$home_seo_side_4_desc = "Sistemi di machine learning che valutano costantemente i dati di mercato e le tendenze emergenti.";
$home_faq_eyebrow = "BASE DI CONOSCENZA $site_name";
$home_faq_title = "Domande frequenti su $site_name";
$home_faq_desc = "Scopri di più su come funziona la piattaforma, a chi è rivolta e come l'intelligenza artificiale aiuta gli utenti a comprendere meglio le condizioni dei mercati delle criptovalute.";
$home_faq_q1 = "Ho bisogno di esperienza di trading per usare $site_name?";
$home_faq_a1 = "No. $site_name è progettata per utenti con diversi livelli di esperienza, incluse persone del tutto nuove ai mercati delle criptovalute. La piattaforma utilizza analisi basate su IA e strumenti di monitoraggio del mercato per rendere più semplici da comprendere le informazioni complesse.";
$home_faq_q2 = "Cosa fa esattamente $site_name?";
$home_faq_a2 = "$site_name analizza costantemente i mercati delle criptovalute utilizzando l'intelligenza artificiale. La piattaforma valuta l'attività di mercato, la volatilità, le tendenze di sentiment, le condizioni di liquidità e i dati blockchain per generare insight e segnali analitici in tempo reale.";
$home_faq_q3 = "I trader esperti possono usare $site_name?";
$home_faq_a3 = "Sì. Pur essendo una piattaforma adatta ai principianti, offre anche strumenti analitici avanzati, market intelligence guidata dall'IA e funzionalità di monitoraggio in tempo reale che possono risultare preziose per i partecipanti al mercato più esperti.";
$home_faq_q4 = "Quali criptovalute monitora $site_name?";
$home_faq_a4 = "La piattaforma può analizzare i principali asset digitali come Bitcoin, Ethereum, Solana, XRP, Avalanche e altre criptovalute ampiamente scambiate, in base alle condizioni di mercato e alle fonti di dati disponibili.";
$home_faq_q5 = "Come vengono generati i segnali IA?";
$home_faq_a5 = "$site_name valuta contemporaneamente più fattori di mercato, tra cui volatilità, attività di trading, condizioni di liquidità, tendenze di sentiment e comportamento storico del mercato. I modelli IA combinano questi input per individuare condizioni di mercato in evoluzione e potenziali opportunità.";
$home_faq_q6 = "$site_name offre supporto formativo?";
$home_faq_a6 = "La piattaforma è progettata per aiutare gli utenti a comprendere meglio le condizioni di mercato tramite analisi basate su IA, insight semplificati e accesso guidato alle funzionalità della piattaforma. I nuovi utenti possono esplorare i mercati delle criptovalute senza bisogno di conoscenze tecniche avanzate.";
$home_cta_label = "Piattaforma IA pronta";
$home_cta_title = "Inizia a esplorare $site_name oggi stesso";
$home_cta_desc = "Scopri analisi di mercato basate su IA, monitoraggio delle criptovalute in tempo reale, strumenti intelligenti di sensibilizzazione al rischio e analisi avanzate pensate sia per i principianti che per i trader esperti.";
$home_ticker_text = "Monitoraggio di mercato IA attivo • Analisi delle criptovalute in tempo reale • Momentum del Bitcoin in rafforzamento • Consolidamento dell'Ethereum rilevato • Nuove opportunità di mercato individuate • Sistemi di monitoraggio del rischio online • Gli insight IA si aggiornano costantemente • Pensata per principianti e trader esperti";




// ABOUT PAGE
$about_h1 = "Chi è $site_name";
$about_p1 = "$site_name è un'infrastruttura di intelligenza artificiale di nuova generazione, progettata per aiutare i partecipanti al mercato a comprendere meglio l'ecosistema crypto in rapida evoluzione. Combinando tecnologie di machine learning, analisi predittiva, sistemi di market intelligence ed elaborazione dei dati in tempo reale, $site_name offre un ambiente completo per monitorare l'attività degli asset digitali e individuare sviluppi di mercato significativi.";
$about_p2 = "Il mercato delle criptovalute opera in modo continuo su più exchange, giurisdizioni e fornitori di liquidità. Ogni secondo, migliaia di variabili influenzano prezzi, volatilità, condizioni di liquidità e sentiment degli investitori. $site_name è stata sviluppata con l'obiettivo di elaborare questi complessi flussi di dati in modo strutturato e scalabile.";
$about_h2_vision = "La visione dietro $site_name";
$about_p_vision_1 = "I mercati finanziari sono diventati sempre più orientati ai dati. I metodi di analisi tradizionali faticano spesso a tenere il passo con il volume di informazioni generato dai moderni ecosistemi di asset digitali. $site_name cerca di colmare questo divario attraverso l'applicazione di intelligenza computazionale avanzata, sistemi di monitoraggio automatizzati e modelli analitici adattivi.";
$about_p_vision_2 = "La visione a lungo termine di $site_name è fornire strumenti di market intelligence trasparenti, capaci di aiutare gli utenti a comprendere meglio la struttura del mercato crypto, le condizioni di rischio e le tendenze emergenti.";
$about_h2_ai = "Infrastruttura di intelligenza artificiale";
$about_p_ai_1 = "Al centro di $site_name c'è un framework di intelligenza artificiale multilivello progettato per elaborare simultaneamente informazioni provenienti da numerose fonti di mercato.";
$about_p_ai_2 = "Queste fonti possono includere:";
$about_li_1 = "Feed dei prezzi delle criptovalute";
$about_li_2 = "Attività dell'order book";
$about_li_3 = "Dati sui movimenti di liquidità";
$about_li_4 = "Indicatori di volatilità";
$about_li_5 = "Metriche delle transazioni blockchain";
$about_li_6 = "Segnali di sentiment di mercato";
$about_li_7 = "Sviluppi macroeconomici";
$about_li_8 = "Attività del mercato istituzionale";
$about_p_ai_3 = "Valutando costantemente le relazioni tra queste variabili, $site_name cerca di individuare schemi in grado di fornire un contesto di mercato prezioso.";
$about_h2_risk = "Filosofia di sensibilizzazione al rischio";
$about_p_risk_1 = "Una partecipazione responsabile ai mercati delle criptovalute richiede una chiara comprensione del rischio. $site_name pone l'accento sulla sensibilizzazione al rischio come componente fondamentale dell'analisi degli asset digitali.";
$about_p_risk_2 = "La volatilità del mercato, le fluttuazioni di liquidità, gli eventi specifici degli exchange, gli sviluppi normativi e le più ampie condizioni macroeconomiche possono tutti influire sui risultati di mercato. Gli utenti non dovrebbero quindi mai affidarsi esclusivamente a un'unica fonte di informazione quando prendono decisioni.";
$about_h2_global = "Mercati globali di asset digitali";
$about_p_global_1 = "I mercati delle criptovalute operano su scala globale e coinvolgono partecipanti provenienti da diverse regioni, settori e contesti economici. L'infrastruttura di $site_name è progettata per monitorare simultaneamente più segmenti di mercato, permettendo agli utenti di osservare gli sviluppi in diverse parti dell'ecosistema degli asset digitali.";
$about_p_global_2 = "Questa prospettiva più ampia può contribuire a migliorare la consapevolezza delle mutevoli condizioni di mercato e delle tendenze emergenti.";
$about_h2_why = "Perché gli utenti esplorano $site_name";
$about_why_li_1 = "Market intelligence avanzata basata su IA";
$about_why_li_2 = "Monitoraggio crypto in tempo reale";
$about_why_li_3 = "Infrastruttura analitica in stile istituzionale";
$about_why_li_4 = "Valutazione multifattoriale del mercato";
$about_why_li_5 = "Monitoraggio della volatilità e della liquidità";
$about_why_li_6 = "Strumenti di ricerca scalabili sugli asset digitali";
$about_why_li_7 = "Metodologia analitica attenta al rischio";
$about_h2_forward = "Guardando al futuro";
$about_p_forward_1 = "Man mano che i mercati degli asset digitali continuano a maturare, si prevede che l'importanza di un'infrastruttura analitica avanzata aumenterà. $site_name rimane concentrata sullo sviluppo di tecnologie che favoriscano una comprensione più profonda del mercato, maggiore trasparenza e una partecipazione più informata all'ecosistema crypto.";
$about_p_forward_2 = "Attraverso l'innovazione continua e la ricerca costante, $site_name mira a contribuire a un futuro più intelligente e basato sui dati per l'analisi degli asset digitali.";


// CONTACT PAGE
$contact_h1 = "Contatta $site_name";
$contact_intro_1 = "Contatta il team di $site_name per richiedere l'accesso alla piattaforma, avere informazioni sulla nostra infrastruttura di trading crypto basata su IA o saperne di più sul nostro ambiente di market intelligence per asset digitali.";
$contact_intro_2 = "Che tu sia interessato ad analisi crypto automatizzate, infrastrutture di segnali di livello istituzionale, monitoraggio della volatilità o market intelligence multi-exchange, il nostro team può indirizzare la tua richiesta al reparto appropriato.";
$contact_h2_help = "Come possiamo aiutarti";
$contact_li_1 = "Richieste di accesso alla piattaforma";
$contact_li_2 = "Domande generali sul prodotto";
$contact_li_3 = "Informazioni sull'infrastruttura di trading IA";
$contact_li_4 = "Richieste relative alla market intelligence sugli asset digitali";
$contact_li_5 = "Domande su avviso sui rischi e conformità";
$contact_li_6 = "Assistenza tecnica o supporto all'onboarding";
$contact_h2_send = "Invia una richiesta";
$contact_p_send = "Compila il modulo qui sotto: un rappresentante di $site_name potrebbe contattarti con ulteriori informazioni.";
$contact_h2_info = "Informazioni di contatto";
$contact_support_label = "Supporto generale:";
$contact_institutional_label = "Richieste istituzionali:";
$contact_disclaimer = "Tieni presente che $site_name non fornisce consulenza finanziaria, di investimento, fiscale o legale personalizzata. Tutte le informazioni sono fornite esclusivamente a scopo tecnologico e informativo.";

// TERMS PAGE
$terms_h1 = "Termini e Condizioni";
$terms_intro_1 = "I presenti Termini e Condizioni regolano l'accesso e l'utilizzo del sito web di $site_name, dei relativi contenuti, delle descrizioni della piattaforma, dei moduli, delle comunicazioni e dei materiali informativi correlati.";
$terms_intro_2 = "Accedendo a questo sito, gli utenti dichiarano di aver letto, compreso e accettato i presenti Termini e Condizioni. Se un utente non accetta questi termini, deve interrompere l'utilizzo del sito.";
$terms_h2_informational = "Finalità informativa";
$terms_p_info_1 = "$site_name fornisce informazioni sull'infrastruttura di trading crypto basata su IA, sulla market intelligence per asset digitali, sul monitoraggio della volatilità, sull'analisi della liquidità e sulle tecnologie correlate.";
$terms_p_info_2 = "I contenuti del sito sono forniti esclusivamente a scopo informativo generale e di presentazione tecnologica. Nulla su questo sito deve essere interpretato come consulenza finanziaria, di investimento, legale, fiscale o come garanzia di risultati di trading.";
$terms_h2_no_advice = "Nessuna consulenza finanziaria";
$terms_p_no_advice_1 = "$site_name non fornisce raccomandazioni personalizzate su se gli utenti debbano acquistare, vendere, detenere, negoziare, mettere in staking, trasferire o comunque interagire con qualsiasi criptovaluta, token, prodotto finanziario o asset digitale.";
$terms_p_no_advice_2 = "Gli utenti devono valutare autonomamente tutte le informazioni e rivolgersi a professionisti qualificati prima di prendere decisioni finanziarie.";
$terms_h2_user_responsibility = "Responsabilità dell'utente";
$terms_p_user_1 = "Gli utenti sono responsabili delle proprie decisioni, valutazioni del rischio, attività dell'account, azioni di trading, conformità legale e utilizzo di eventuali servizi di terze parti.";
$terms_p_user_2 = "Gli utenti devono assicurarsi che l'attività relativa agli asset digitali sia consentita nella loro giurisdizione e di comprendere tutti i rischi applicabili prima di interagire con i mercati crypto.";
$terms_h2_ai = "IA e sistemi analitici";
$terms_p_ai_1 = "$site_name può descrivere sistemi di intelligenza artificiale, modelli predittivi, segnali di mercato, analisi automatizzate o tecnologie relative all'esecuzione.";
$terms_p_ai_2 = "Questi sistemi possono basarsi su dati di mercato, modelli statistici, processi di machine learning e fonti di informazione di terze parti. Tali sistemi possono risultare imprecisi, ritardati, incompleti, non disponibili o inadatti agli obiettivi particolari di un utente.";
$terms_h2_availability = "Nessuna garanzia di disponibilità";
$terms_p_avail_1 = "$site_name non garantisce l'accesso ininterrotto al sito, la disponibilità continua della piattaforma, un funzionamento privo di errori, informazioni di mercato accurate o la disponibilità di una specifica funzionalità.";
$terms_p_avail_2 = "Servizi, contenuti, pagine, moduli, integrazioni o descrizioni della piattaforma possono essere modificati, sospesi o interrotti in qualsiasi momento.";
$terms_h2_third_party = "Servizi di terze parti";
$terms_p_tp_1 = "Il sito può fare riferimento a exchange, sedi di liquidità, fornitori di analisi, strumenti di comunicazione, servizi di hosting o fornitori di infrastruttura tecnica di terze parti.";
$terms_p_tp_2 = "$site_name non controlla le piattaforme di terze parti e non è responsabile della loro disponibilità, delle relative commissioni, politiche, restrizioni dell'account, procedure di conformità, guasti tecnici o perdite degli utenti.";
$terms_h2_prohibited = "Utilizzo vietato";
$terms_p_prohibited = "Gli utenti non devono utilizzare questo sito o qualsiasi tecnologia correlata per scopi illeciti, abusivi, fraudolenti, manipolativi o dannosi.";
$terms_li_1 = "Tentativo di accesso non autorizzato";
$terms_li_2 = "Invio di informazioni false o fuorvianti";
$terms_li_3 = "Utilizzo del sito per attività finanziarie illecite";
$terms_li_4 = "Interferenza con la sicurezza o la funzionalità del sito";
$terms_li_5 = "Copia o uso improprio dei contenuti del sito senza autorizzazione";
$terms_li_6 = "Tentativo di aggirare i controlli di conformità o tecnici";
$terms_h2_ip = "Proprietà intellettuale";
$terms_p_ip_1 = "Il design, i testi, il marchio, gli elementi dell'interfaccia, la grafica, la struttura e i materiali correlati del sito sono di proprietà di $site_name o concessi in licenza a $site_name, salvo diversa indicazione.";
$terms_p_ip_2 = "Gli utenti non possono riprodurre, distribuire, modificare o sfruttare commercialmente i materiali del sito senza un'autorizzazione appropriata.";
$terms_h2_liability = "Limitazione di responsabilità";
$terms_p_liab_1 = "Nella misura massima consentita dalla legge applicabile, $site_name non sarà responsabile per perdite derivanti dal trading di asset digitali, dalla volatilità del mercato, da problemi tecnici, da guasti di piattaforme di terze parti, da dati inesatti, da decisioni degli utenti o dall'affidamento sui contenuti del sito.";
$terms_p_liab_2 = "Gli utenti accedono a questo sito e lo utilizzano a proprio rischio.";
$terms_h2_changes = "Modifiche ai presenti termini";
$terms_p_changes_1 = "$site_name può aggiornare i presenti Termini e Condizioni in qualsiasi momento. I termini aggiornati possono essere pubblicati su questa pagina.";
$terms_p_changes_2 = "L'uso continuato del sito dopo eventuali modifiche implica che gli utenti riconoscono e accettano i termini aggiornati.";

// PRIVACY PAGE
$privacy_h1 = "Informativa sulla privacy";
$privacy_intro_1 = "$site_name rispetta la privacy degli utenti e si impegna a trattare i dati personali in modo responsabile, trasparente e sicuro.";
$privacy_intro_2 = "Questa Informativa sulla privacy spiega quali informazioni possono essere raccolte quando gli utenti visitano questo sito, inviano moduli di contatto, richiedono l'accesso o interagiscono con i contenuti e le comunicazioni relative alla piattaforma di $site_name.";
$privacy_h2_collect = "Informazioni che potremmo raccogliere";
$privacy_p_collect_1 = "$site_name può raccogliere informazioni fornite volontariamente dagli utenti tramite i moduli del sito o i canali di comunicazione.";
$privacy_li_fname = "Nome";
$privacy_li_lname = "Cognome";
$privacy_li_email = "Indirizzo e-mail";
$privacy_li_phone = "Numero di telefono";
$privacy_li_inquiry = "Dettagli della richiesta inviata";
$privacy_li_technical = "Dati tecnici di base sull'utilizzo del sito";
$privacy_h2_use = "Come utilizziamo le informazioni";
$privacy_p_use_1 = "Le informazioni possono essere utilizzate per rispondere alle richieste degli utenti, fornire informazioni sull'accesso alla piattaforma, migliorare la funzionalità del sito, mantenere la sicurezza e comunicare aggiornamenti rilevanti su $site_name.";
$privacy_p_use_2 = "Possiamo inoltre utilizzare dati aggregati o non identificativi per analizzare le prestazioni del sito, migliorare la struttura dei contenuti e comprendere meglio come i visitatori interagiscono con le nostre pagine.";
$privacy_h2_comm = "Finalità di comunicazione";
$privacy_p_comm_1 = "Se un utente invia informazioni di contatto, $site_name può utilizzarle per rispondere alla richiesta, fornire dettagli sull'onboarding, chiarire le richieste di accesso alla piattaforma o condividere informazioni pertinenti sui servizi.";
$privacy_p_comm_2 = "Gli utenti possono richiedere l'interruzione delle comunicazioni ove applicabile.";
$privacy_h2_cookies = "Cookie e dati tecnici";
$privacy_p_cookies_1 = "Questo sito può utilizzare cookie, strumenti di analisi e tecnologie simili per migliorare l'esperienza di navigazione, monitorare le prestazioni e supportare la sicurezza del sito.";
$privacy_p_cookies_2 = "I dati tecnici possono includere tipo di dispositivo, tipo di browser, sistema operativo, interazioni con le pagine, informazioni di provenienza e statistiche generali di utilizzo.";
$privacy_h2_protection = "Misure di protezione dei dati";
$privacy_p_prot_1 = "$site_name applica ragionevoli misure di protezione amministrative, tecniche e organizzative per proteggere le informazioni inviate da accessi non autorizzati, usi impropri, perdite o divulgazioni.";
$privacy_p_prot_2 = "Tuttavia, nessun sistema online può garantire una sicurezza assoluta. Gli utenti dovrebbero evitare di inviare informazioni finanziarie sensibili, chiavi private del wallet, password, credenziali di exchange o dati di accesso riservati all'account tramite moduli pubblici del sito.";
$privacy_h2_third = "Fornitori di servizi di terze parti";
$privacy_p_third_1 = "$site_name può avvalersi di fornitori terzi per hosting, analisi, comunicazione, sicurezza, invio di e-mail, elaborazione CRM o infrastruttura tecnica.";
$privacy_p_third_2 = "Tali fornitori possono trattare solo le informazioni limitate necessarie per supportare la funzionalità del sito e i relativi servizi.";
$privacy_google_choices = 'Puoi gestire il modo in cui Google utilizza le informazioni relative alle tue visite tramite le <a href="http://www.google.com/settings/ads" target="_blank" rel="noopener">Impostazioni annunci di Google</a>, disattivare la pubblicità basata sugli interessi tramite il <a href="https://tools.google.com/dlpage/gaoptout" target="_blank" rel="noopener">componente aggiuntivo del browser per la disattivazione di Google Analytics</a>, oppure consultare la <a href="https://www.google.com/intl/en/policies/privacy/" target="_blank" rel="noopener">Informativa sulla privacy di Google</a> per maggiori dettagli.';
$privacy_h2_sale = "Nessuna vendita di dati personali";
$privacy_p_sale_1 = "$site_name non intende vendere i dati personali inviati tramite questo sito.";
$privacy_p_sale_2 = "Le informazioni possono essere condivise solo quando necessario per finalità operative, conformità legale, comunicazione con gli utenti, prevenzione delle frodi o elaborazione relativa ai servizi.";
$privacy_h2_retention = "Conservazione dei dati";
$privacy_p_retention = "I dati personali possono essere conservati per il tempo necessario a rispondere alle richieste, mantenere i registri aziendali, adempiere agli obblighi legali, migliorare le comunicazioni della piattaforma o supportare la sicurezza e la prevenzione delle frodi.";
$privacy_h2_rights = "Diritti dell'utente";
$privacy_p_rights = "In base alla legge applicabile, gli utenti possono avere diritti relativi all'accesso, alla rettifica, alla cancellazione, all'opposizione, alla limitazione o alla portabilità dei dati personali.";
$privacy_h2_intl = "Utilizzo internazionale";
$privacy_p_intl_1 = "$site_name può essere consultata da utenti di diverse giurisdizioni. Le norme sulla privacy possono variare a seconda della posizione.";
$privacy_p_intl_2 = "Utilizzando questo sito, gli utenti riconoscono che le informazioni possono essere trattate in conformità con questa Informativa sulla privacy e con i requisiti operativi applicabili.";
$privacy_h2_policy_updates = "Aggiornamenti della politica";
$privacy_p_updates_1 = "$site_name può aggiornare periodicamente questa Informativa sulla privacy per riflettere cambiamenti normativi, tecnologici, procedurali interni o della funzionalità del sito.";
$privacy_p_updates_2 = "L'uso continuato del sito dopo gli aggiornamenti implica che gli utenti riconoscono l'Informativa sulla privacy rivista.";
// COOKIES PAGE
$cookies_h1 = "Cookie Policy";
$cookies_intro_1 = "Questa Cookie Policy spiega come $site_name utilizza cookie, tecnologie di analisi e strumenti di tracciamento simili quando gli utenti accedono a questo sito o interagiscono con esso.";
$cookies_intro_2 = "I cookie contribuiscono a migliorare la funzionalità del sito, ottimizzare l'esperienza utente, analizzare le prestazioni e supportare i processi legati alla sicurezza.";
$cookies_intro_3 = "Continuando a utilizzare questo sito, gli utenti riconoscono che determinati cookie e tecnologie correlate possono essere utilizzati in conformità con questa politica.";
$cookies_h2_what = "Cosa sono i cookie?";
$cookies_p_what_1 = "I cookie sono piccoli file di testo memorizzati sul dispositivo di un utente durante la visita a un sito web.";
$cookies_p_what_2 = "Questi file possono contenere informazioni che aiutano i siti a riconoscere i visitatori ricorrenti, ricordare le preferenze, migliorare la navigazione e misurare le prestazioni del sito.";
$cookies_h2_why = "Perché utilizziamo i cookie";
$cookies_p_why_1 = "$site_name può utilizzare cookie e tecnologie simili per diversi scopi.";
$cookies_li_1 = "Mantenimento della funzionalità del sito";
$cookies_li_2 = "Miglioramento dell'esperienza utente";
$cookies_li_3 = "Memorizzazione delle preferenze dell'utente";
$cookies_li_4 = "Comprensione del comportamento dei visitatori";
$cookies_li_5 = "Misurazione delle prestazioni del sito";
$cookies_li_6 = "Identificazione dei problemi tecnici";
$cookies_li_7 = "Supporto alla sicurezza del sito";
$cookies_li_8 = "Prevenzione di abusi e usi impropri";
$cookies_h2_essential = "Cookie essenziali";
$cookies_p_ess_1 = "Alcuni cookie sono necessari per il corretto funzionamento del sito.";
$cookies_p_ess_2 = "Questi cookie contribuiscono alla sicurezza, alla funzionalità di navigazione, alla gestione delle sessioni e ad altre operazioni essenziali del sito.";
$cookies_p_ess_3 = "Senza i cookie essenziali, alcune parti del sito potrebbero non funzionare correttamente.";
$cookies_h2_analytics = "Cookie di analisi";
$cookies_p_an_1 = "I cookie di analisi ci aiutano a capire come i visitatori interagiscono con i contenuti del sito.";
$cookies_p_an_2 = "Queste tecnologie possono raccogliere informazioni su visite alle pagine, schemi di navigazione, tipi di dispositivo, configurazioni del browser e statistiche generali di utilizzo del sito.";
$cookies_p_an_3 = "Le informazioni di analisi vengono generalmente aggregate e utilizzate per migliorare le prestazioni del sito e l'esperienza utente.";
$cookies_h2_functional = "Cookie funzionali";
$cookies_p_fun_1 = "I cookie funzionali possono essere utilizzati per ricordare le impostazioni e le preferenze selezionate dagli utenti.";
$cookies_p_fun_2 = "Alcuni esempi includono le preferenze linguistiche, le impostazioni dell'interfaccia, le opzioni di visualizzazione o altre funzionalità di personalizzazione.";
$cookies_h2_third = "Tecnologie di terze parti";
$cookies_p_third_1 = "$site_name può avvalersi di fornitori terzi, piattaforme di analisi, tecnologie pubblicitarie o strumenti di monitoraggio delle prestazioni.";
$cookies_p_third_2 = "Tali terze parti possono installare i propri cookie o tecnologie di tracciamento, soggetti alle rispettive informative sulla privacy.";
$cookies_p_third_3 = "$site_name non controlla le pratiche relative ai cookie di terze parti e consiglia di consultare, ove applicabile, la documentazione sulla privacy dei fornitori esterni.";
$cookies_h2_manage = "Gestione dei cookie";
$cookies_p_manage_1 = "La maggior parte dei browser moderni consente agli utenti di gestire, limitare o eliminare i cookie tramite le impostazioni del browser.";
$cookies_p_manage_2 = "Gli utenti possono scegliere di disattivare completamente i cookie, anche se alcune funzionalità del sito potrebbero non funzionare come previsto in seguito.";
$cookies_p_manage_3 = "Le impostazioni del browser generalmente offrono le seguenti opzioni:";
$cookies_li_manage_1 = "Bloccare tutti i cookie";
$cookies_li_manage_2 = "Eliminare i cookie esistenti";
$cookies_li_manage_3 = "Ricevere notifiche sui cookie";
$cookies_li_manage_4 = "Limitare specifiche categorie di cookie";
$cookies_h2_data = "Protezione dei dati";
$cookies_p_data = "Le informazioni relative ai cookie possono essere trattate in conformità con la nostra Informativa sulla privacy e con le leggi applicabili in materia di protezione dei dati.";
$cookies_h2_policy_updates = "Aggiornamenti della politica";
$cookies_p_updates_1 = "$site_name può aggiornare periodicamente questa Cookie Policy per riflettere cambiamenti tecnologici, requisiti legali o miglioramenti operativi.";
$cookies_p_updates_2 = "L'uso continuato del sito dopo gli aggiornamenti costituisce riconoscimento della politica rivista.";
// AML PAGE
$aml_h1 = "Politica AML";
$aml_intro_1 = "$site_name riconosce l'importanza della sensibilizzazione contro il riciclaggio di denaro, dell'integrità finanziaria e della partecipazione responsabile ai mercati degli asset digitali.";
$aml_intro_2 = "Questa Politica AML spiega i principi generali applicati da $site_name per scoraggiare l'uso illecito delle tecnologie legate alle criptovalute, le attività finanziarie sospette, le frodi, l'elusione delle sanzioni, il finanziamento del terrorismo e altre condotte vietate.";
$aml_h2_purpose = "Finalità della presente politica";
$aml_p_purpose_1 = "Lo scopo di questa politica è stabilire un quadro responsabile su come $site_name affronta la sensibilizzazione contro il riciclaggio di denaro all'interno dell'ecosistema degli asset digitali.";
$aml_p_purpose_2 = "I mercati delle criptovalute possono comportare attività transfrontaliere, infrastrutture decentralizzate, exchange di terze parti e sistemi di wallet esterni. Per questo motivo, gli utenti devono comprendere che gli obblighi di conformità possono variare in base alla giurisdizione, al tipo di account, al fornitore dell'exchange e al contesto normativo locale.";
$aml_h2_responsible = "Uso responsabile della tecnologia per gli asset digitali";
$aml_p_resp_1 = "Gli utenti sono tenuti a interagire con $site_name e con qualsiasi servizio correlato per asset digitali in modo responsabile, legale e conforme alle norme applicabili.";
$aml_p_resp_2 = "$site_name non sostiene né incoraggia l'uso dei mercati crypto, dei sistemi di trading, delle tecnologie automatizzate o degli strumenti analitici per scopi illeciti.";
$aml_li_1 = "Riciclaggio di denaro";
$aml_li_2 = "Finanziamento del terrorismo";
$aml_li_3 = "Frode o inganno finanziario";
$aml_li_4 = "Elusione delle sanzioni";
$aml_li_5 = "Manipolazione del mercato";
$aml_li_6 = "Utilizzo di fondi rubati o account compromessi";
$aml_li_7 = "Qualsiasi attività vietata dalla legge applicabile";
$aml_h2_exchange = "Conformità degli exchange di terze parti";
$aml_p_ex_1 = "$site_name può fare riferimento a exchange o ambienti di liquidità di terze parti, interagire con essi o fornire un'infrastruttura analitica correlata.";
$aml_p_ex_2 = "Exchange, custodi, fornitori di servizi di pagamento e altri fornitori terzi possono applicare le proprie procedure di conformità, tra cui verifica dell'identità, monitoraggio delle transazioni, screening delle sanzioni, restrizioni dell'account, controlli sull'origine dei fondi o ulteriori requisiti di verifica.";
$aml_h2_user_responsibility = "Responsabilità dell'utente";
$aml_p_user_1 = "Gli utenti sono responsabili di garantire che la propria attività sia legale nel proprio luogo di residenza e coerente con gli obblighi imposti da regolatori, exchange, istituzioni finanziarie o fornitori di servizi pertinenti.";
$aml_p_user_2 = "Gli utenti non devono tentare di nascondere la proprietà, mascherare l'origine delle transazioni, fornire informazioni false, aggirare i processi di verifica o utilizzare l'infrastruttura per asset digitali in un modo che possa essere considerato sospetto o illecito.";
$aml_h2_suspicious = "Attività sospette";
$aml_p_suspicious = "Le attività sospette possono includere comportamenti incoerenti con un uso normale, tentativi di abusare dei sistemi di trading, l'invio ripetuto di informazioni fuorvianti, il coinvolgimento con giurisdizioni soggette a restrizioni o attività collegate a frodi, fondi illeciti o servizi vietati.";
$aml_h2_evasion = "Nessuna elusione o aggiramento";
$aml_p_evasion = "Gli utenti non devono tentare di aggirare i controlli di conformità, le restrizioni tecniche, i sistemi di verifica dell'identità, le limitazioni geografiche o i processi di monitoraggio del rischio.";
$aml_h2_policy_updates = "Aggiornamenti della politica";
$aml_p_updates_1 = "$site_name può aggiornare questa Politica AML di tanto in tanto per riflettere cambiamenti nelle aspettative normative, negli standard di mercato, nelle procedure interne o nelle prassi del settore degli asset digitali.";
$aml_p_updates_2 = "L'uso continuato del sito dopo gli aggiornamenti implica che gli utenti riconoscono la politica rivista.";
// RISK PAGE
$risk_h1 = "Avviso sui rischi";
$risk_intro_1 = "Il trading di criptovalute e la partecipazione ai mercati degli asset digitali comportano rischi significativi. I prezzi possono muoversi rapidamente, la liquidità può cambiare in modo inaspettato e le condizioni di mercato possono diventare molto instabili in un breve periodo di tempo.";
$risk_intro_2 = "Questo Avviso sui rischi illustra le considerazioni importanti che gli utenti dovrebbero esaminare prima di interagire con i mercati degli asset digitali, le tecnologie di trading automatizzate, i segnali di mercato generati dall'IA o l'infrastruttura analitica legata alle criptovalute.";
$risk_h2_no_guarantee = "Nessun risultato garantito";
$risk_p_no_guarantee_1 = "$site_name non garantisce profitti, rendimenti degli investimenti, successo nel trading, accuratezza dei segnali, accesso ininterrotto o risultati finanziari positivi.";
$risk_p_no_guarantee_2 = "Qualsiasi esempio, statistica, elemento dell'interfaccia, indicatore di performance, indicatore di segnale o simulazione di mercato mostrato su questo sito è fornito esclusivamente a scopo informativo e illustrativo.";
$risk_h2_volatility = "Volatilità del mercato delle criptovalute";
$risk_p_vol_1 = "I mercati degli asset digitali sono altamente volatili. I prezzi possono essere influenzati da carenze di liquidità, notizie macroeconomiche, sviluppi normativi, interruzioni degli exchange, eventi blockchain, sentiment degli investitori, attività di leva finanziaria o manipolazione del mercato.";
$risk_p_vol_2 = "La volatilità può causare perdite rapide, gap di prezzo improvvisi, slippage, eventi di liquidazione o l'impossibilità di eseguire transazioni ai prezzi previsti.";
$risk_h2_ai = "Limiti dei segnali IA";
$risk_p_ai_1 = "I sistemi di intelligenza artificiale possono analizzare grandi quantità di dati di mercato, ma non possono eliminare l'incertezza.";
$risk_p_ai_2 = "Gli indicatori, i segnali di trading, le classificazioni di mercato e i modelli predittivi basati su IA possono essere incompleti, ritardati, errati o inadatti alla situazione finanziaria personale di un utente.";
$risk_p_ai_3 = "Gli utenti non dovrebbero fare affidamento esclusivamente su un segnale IA per prendere decisioni di trading, di investimento o finanziarie.";
$risk_h2_tech = "Rischio tecnologico e di esecuzione";
$risk_p_tech_1 = "La tecnologia di trading può essere influenzata da problemi di connettività internet, interruzioni del server, latenza, errori software, guasti API, tempi di inattività degli exchange, feed di dati errati o limitazioni dell'infrastruttura di terze parti.";
$risk_p_tech_2 = "$site_name non garantisce un accesso ininterrotto a dati, segnali, funzionalità della piattaforma, sistemi di terze parti o ambienti di esecuzione.";
$risk_h2_liquidity = "Rischio di liquidità e di exchange";
$risk_p_liq_1 = "La liquidità può variare significativamente tra exchange e asset digitali. Alcuni mercati possono presentare una scarsa profondità dell'order book, spread ampi, esecuzione ritardata o forti movimenti di prezzo durante i periodi di tensione.";
$risk_p_liq_2 = "Gli exchange di terze parti possono imporre commissioni, limiti, restrizioni, revisioni dell'account, ritardi nei prelievi, sospensioni del trading o limitazioni geografiche.";
$risk_h2_regulatory = "Rischio normativo";
$risk_p_reg_1 = "Le normative sugli asset digitali possono cambiare rapidamente e differire tra paesi, regioni e giurisdizioni.";
$risk_p_reg_2 = "I cambiamenti normativi possono influire sull'accesso al mercato, sulla disponibilità degli asset, sul funzionamento degli exchange, sugli obblighi di segnalazione, sulla tassazione, sulle restrizioni al trading o sulla funzionalità della piattaforma.";
$risk_h2_user_responsibility = "Responsabilità dell'utente";
$risk_p_user_1 = "Gli utenti sono gli unici responsabili della valutazione dei rischi, della comprensione delle leggi applicabili, dell'esame della propria situazione finanziaria e della presa di decisioni indipendenti.";
$risk_p_user_2 = "$site_name non fornisce consulenza finanziaria, di investimento, legale, contabile o fiscale personalizzata.";
$risk_h2_advice = "Rivolgiti a un professionista";
$risk_p_advice_1 = "Gli utenti dovrebbero consultare professionisti qualificati prima di prendere decisioni finanziarie significative relative a criptovalute, sistemi di trading, tecnologie automatizzate o investimenti in asset digitali.";
$risk_p_advice_2 = "Utilizzando questo sito, gli utenti riconoscono di comprendere i rischi associati ai mercati degli asset digitali e si assumono la responsabilità delle proprie decisioni.";
// EXCHANGES PAGE
$exchanges_h1 = "Exchange supportati";
$exchanges_intro_1 = "$site_name è costruita attorno a un approccio di intelligence multi-mercato che valuta l'attività degli asset digitali in un'ampia gamma di contesti di trading crypto.";
$exchanges_intro_2 = "I mercati crypto moderni operano attraverso numerosi exchange, fornitori di liquidità, piattaforme di derivati ed ecosistemi di trading. Comprendere l'attività all'interno di questi contesti è essenziale per costruire una market intelligence completa.";
$exchanges_h2_philosophy = "Filosofia di copertura del mercato";
$exchanges_p_phil_1 = "Anziché affidarsi a un'unica sede di negoziazione, $site_name è costruita attorno al concetto di analisi a livello di mercato.";
$exchanges_p_phil_2 = "I prezzi delle criptovalute, le condizioni di liquidità, il comportamento della volatilità e l'attività istituzionale spesso differiscono tra gli exchange. Osservando condizioni di mercato più ampie, i modelli analitici possono ottenere un contesto aggiuntivo su tendenze emergenti e potenziali anomalie.";
$exchanges_h2_spot = "Monitoraggio del mercato spot";
$exchanges_p_spot_1 = "Gli exchange spot rappresentano una parte significativa dell'attività globale relativa agli asset digitali.";
$exchanges_p_spot_2 = "I sistemi di market intelligence possono valutare i dati del mercato spot, tra cui:";
$exchanges_li_spot_1 = "Attività dei prezzi";
$exchanges_li_spot_2 = "Profondità di liquidità";
$exchanges_li_spot_3 = "Struttura dell'order book";
$exchanges_li_spot_4 = "Volume di trading";
$exchanges_li_spot_5 = "Comportamento dello spread denaro-lettera";
$exchanges_li_spot_6 = "Condizioni di squilibrio del mercato";
$exchanges_h2_deriv = "Mercati dei derivati";
$exchanges_p_deriv_1 = "I derivati crypto svolgono un ruolo sempre più importante all'interno del più ampio ecosistema degli asset digitali.";
$exchanges_p_deriv_2 = "Future, contratti perpetui, opzioni e attività di trading con leva possono influenzare il sentiment di mercato, le condizioni di volatilità e la dinamica direzionale.";
$exchanges_p_deriv_3 = "L'infrastruttura analitica può valutare le informazioni relative ai derivati nel valutare condizioni di mercato più ampie.";
$exchanges_h2_liquidity = "Analisi della liquidità";
$exchanges_p_liq_1 = "La liquidità rimane uno dei fattori più importanti che influenzano la stabilità del mercato e la qualità dell'esecuzione.";
$exchanges_p_liq_2 = "$site_name può analizzare le condizioni di liquidità su più sedi di negoziazione al fine di individuare:";
$exchanges_li_liq_1 = "Concentrazione della liquidità";
$exchanges_li_liq_2 = "Improvvisi ritiri di liquidità";
$exchanges_li_liq_3 = "Pressione dell'order book";
$exchanges_li_liq_4 = "Eventi di squilibrio del mercato";
$exchanges_li_liq_5 = "Comportamento di trading anomalo";
$exchanges_h2_availability = "Disponibilità degli exchange";
$exchanges_p_avail_1 = "La disponibilità degli exchange può variare in base alla posizione geografica, alla giurisdizione, all'idoneità dell'account, ai requisiti normativi e alle limitazioni tecniche.";
$exchanges_p_avail_2 = "Alcuni exchange o servizi potrebbero non essere disponibili per tutti gli utenti e potrebbero imporre proprie restrizioni, requisiti di verifica, commissioni e politiche operative.";
$exchanges_h2_third = "Piattaforme di terze parti";
$exchanges_p_third_1 = "Qualsiasi riferimento a exchange, sedi di liquidità, broker, custodi o fornitori di mercato viene effettuato esclusivamente a scopo informativo.";
$exchanges_p_third_2 = "$site_name non possiede, gestisce, controlla né garantisce i servizi degli exchange di terze parti.";
$exchanges_p_third_3 = "Gli utenti rimangono responsabili della valutazione di qualsiasi exchange, piattaforma di trading o servizio per asset digitali prima dell'utilizzo.";
$exchanges_h2_monitoring = "Monitoraggio continuo del mercato";
$exchanges_p_mon_1 = "I mercati delle criptovalute operano in modo continuo, spesso ventiquattro ore su ventiquattro, sette giorni su sette.";
$exchanges_p_mon_2 = "Man mano che la struttura del mercato evolve, emergono nuovi exchange, la liquidità si sposta e l'attività di trading cambia.";
$exchanges_p_mon_3 = "$site_name si impegna costantemente a rimanere aggiornata sulle condizioni di mercato in evoluzione attraverso un'ampia copertura analitica dell'ecosistema degli asset digitali.";

// ==========================================
// RISK WARNING PAGE
// ==========================================
$page_title_risk_warning = "Avviso sui rischi | $site_name";
$page_description_risk_warning = "Comprendi i rischi del trading crypto automatizzato con $site_name, inclusi la volatilità del mercato, il rischio di esecuzione e le considerazioni normative.";
$risk_warning_breadcrumb_name = "Avviso sui rischi";
$risk_warning_title = "Avviso sui rischi";
$risk_warning_intro = "Comprendere i rischi è il primo passo verso un trading consapevole.";

$risk_warning_ai_heading = "Come il nostro sistema IA aiuta a gestire il rischio:";
$risk_warning_ai_1 = "<strong>Efficienza algoritmica e trading privo di emotività:</strong> Algoritmi avanzati analizzano i segnali di mercato per eseguire le operazioni in modo obiettivo nei momenti ottimali.";
$risk_warning_ai_2 = "<strong>Strategie basate sui dati:</strong> Le strategie si basano su schemi di mercato verificati e analisi in tempo reale, non su semplici congetture.";
$risk_warning_ai_3 = "<strong>Impostazioni flessibili e controllo totale:</strong> Modifica i tuoi parametri di rischio in qualsiasi momento. Monitora tutti i saldi e le operazioni in modo trasparente nella tua dashboard, senza costi nascosti e con prelievi senza restrizioni.";

$risk_warning_disclaimer = "<strong>Avvertenza:</strong> Il trading comporta sempre un rischio. I sistemi automatizzati (inclusa l'IA) non garantiscono profitti, possono presentare malfunzionamenti dovuti a errori software o eventi di mercato imprevisti e richiedono il monitoraggio da parte dell'utente. I risultati passati non sono indicativi di quelli futuri. Questa piattaforma ha finalità puramente informative e di marketing e non fornisce consulenza finanziaria.";

$risk_warning_s1_heading = "1. Rischi generali e rischi del mercato delle criptovalute";
$risk_warning_s1_intro = "Le criptovalute sono asset speculativi molto volatili che operano 24 ore su 24, 7 giorni su 7, con una supervisione normativa minima nella maggior parte delle giurisdizioni.";
$risk_warning_s1_1 = "I valori possono fluttuare drasticamente in brevi periodi di tempo, con la possibilità di una perdita totale del capitale investito.";
$risk_warning_s1_2 = "I valori di mercato possono essere fortemente influenzati da aggiornamenti normativi, sviluppi tecnici, violazioni della sicurezza o più ampi eventi macroeconomici.";
$risk_warning_s1_3 = "Alcuni asset possono perdere completamente il proprio valore. Investi solo fondi che puoi permetterti di perdere.";

$risk_warning_s2_heading = "2. Rischi di esecuzione, liquidità e leva finanziaria";
$risk_warning_s2_1 = "<strong>Volatilità del mercato e liquidità:</strong> Movimenti di prezzo estremi (10-20%+ giornalieri) o una bassa liquidità (soprattutto per le criptovalute minori) possono causare ritardi, interruzioni della piattaforma e un grave slippage di esecuzione. Gli ordini stop-loss non possono garantire limiti di perdita in condizioni estreme.";
$risk_warning_s2_2 = "<strong>Rischi di leva finanziaria e margine:</strong> I prodotti a leva amplificano sia i guadagni che le perdite, il che significa che puoi perdere più del tuo deposito iniziale. Circa il 70-80% dei conti degli investitori al dettaglio perde denaro negoziando prodotti a leva.";

$risk_warning_s3_heading = "3. Rischi tecnici, di cybersicurezza e legati a terze parti";
$risk_warning_s3_1 = "<strong>Fattori tecnici:</strong> Il trading online comporta intrinsecamente rischi legati a disconnessioni internet, errori hardware/software e indisponibilità del servizio.";
$risk_warning_s3_2 = "<strong>Cybersicurezza:</strong> Gli account di criptovalute sono bersagli frequenti di phishing, malware e attacchi informatici. Le transazioni sono irreversibili; la compromissione delle tue credenziali può causare una perdita permanente.";
$risk_warning_s3_3 = "<strong>Piattaforme di terze parti:</strong> Questo sito può mettere in contatto gli utenti con piattaforme di terze parti. Non controlliamo, approviamo né garantiamo la loro sicurezza, le loro operazioni o la loro solvibilità. Effettua sempre le tue verifiche prima di depositare fondi su piattaforme esterne.";

$risk_warning_s4_heading = "4. Disposizioni normative, fiscali e finali";
$risk_warning_s4_1 = "<strong>Conformità legale e imposte:</strong> I quadri normativi variano ampiamente e cambiano rapidamente. Gli utenti sono gli unici responsabili di garantire che la propria attività di trading sia conforme alle leggi locali e di adempiere ai propri obblighi fiscali.";
$risk_warning_s4_2 = "<strong>Nessuna garanzia di profitto:</strong> Non esiste un trading crypto \"sicuro\" o privo di rischi. Qualsiasi dato sui rendimenti o esempio di performance è puramente ipotetico.";
$risk_warning_s4_3 = "<strong>Idoneità:</strong> Se non comprendi appieno i rischi, dipendi da fondi essenziali o operi con denaro preso in prestito, il trading crypto non è adatto a te. Consulta un consulente finanziario indipendente autorizzato in caso di dubbi.";

$risk_warning_contact = "<strong>Contatti:</strong> Per qualsiasi domanda relativa a questa dichiarazione o per inviare una richiesta, contatta il nostro team di assistenza clienti ufficiale tramite il modulo di contatto presente sul nostro sito.";
$footer_risk_warning = "Avviso sui rischi";

$lang_loaded = true;

?>
