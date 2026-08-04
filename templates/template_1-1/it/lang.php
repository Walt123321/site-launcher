<?php
require __DIR__ . '/../lang.php';
$site_lang = 'it-IT';
$form_language = 'it'; // matches this page's own language, not the offer's global default

// ==========================================================================
// ITALIAN (it-IT) TRANSLATION OVERRIDES
// Identity / config / pricing values ($site_name, $site_url, $site_domain,
// $app_price, $rating_value, $rating_count, $review_count, $app_currency,
// $adress_name, $site_gmail, $about_image, $footer_logo_name,
// $quiz_consultant_name, $footer_copyright) are intentionally NOT overridden
// and keep flowing through from the root lang.php.
// ==========================================================================

$footer_contact_address = "Indirizzo: $adress_name";
$footer_contact_email = "Email: $site_gmail";

$feedback_strong_1 = "Elias, 31, Amburgo";
$feedback_strong_2 = "Sophie, 36, Monaco di Baviera";
$feedback_strong_3 = "Lukas, 42, Colonia";
$feedback_strong_4 = "Miriam, 47, Stoccarda";

$page_title_main = "$source — Sito ufficiale | Piattaforma di trading";
$page_description_main = "$source — Ufficiale e verificato. 🚀 Autopilota IA per la massima sicurezza. ✅ Piattaforma affidabile con protezione del capitale e risultati costanti. 🔒 Inizia oggi stesso. ⭐";


// ==========================================
// CHAT-QUIZ
// ==========================================

$quiz_consultant_role = "Assistente all'attivazione";

$quiz_text_welcome   = "Ciao! Sono $quiz_consultant_name, la tua assistente personale per l'attivazione su $site_name. Ottime notizie: il tuo accesso è già stato pre-approvato. Configuriamo subito il tuo profilo professionale!";
$quiz_text_q1 = "Per garantire la piena conformità normativa e legale, conferma il tuo Paese di residenza attuale: $country_name";
$quiz_text_a1_yes    = "Sì, è la mia residenza attuale";
$quiz_text_a1_no     = "No";

$quiz_text_q2 = "Perfetto. Seleziona la tua fascia d'età per individuare gli strumenti finanziari più adatti a te:";

$quiz_text_q3        = "Hai a disposizione un conto bancario attivo o una carta di credito per ricevere i pagamenti giornalieri dei dividendi?";
$quiz_text_a3_yes    = "Sì, ho un conto attivo";
$quiz_text_a3_no     = "Non ancora";

$quiz_text_q4        = "Indica la tua principale fonte di reddito personale. (Questo parametro ci aiuta a personalizzare le impostazioni di gestione del rischio del sistema).";
$quiz_text_a4_1      = "Lavoro dipendente / Lavoro autonomo";
$quiz_text_a4_2      = "Rendite passive / Risparmi personali";
$quiz_text_a4_3      = "Altre fonti";

$quiz_text_q5 = "Ottimo! L'ultimo passaggio è una breve verifica telefonica da parte di un nostro consulente per confermare la registrazione. Le chiamate vengono effettuate dalle 11:00 alle 20:00. Riuscirai a rispondere?";
$quiz_text_a5_yes    = "Sì, questo orario va bene per la chiamata";
$quiz_text_a5_no     = "Chiamatemi subito, per favore";

$quiz_text_loader    = "Analisi delle opzioni richieste e inizializzazione dei parametri di configurazione sicura dell'account in corso...";
$quiz_text_final_ttl = "Account autorizzato con successo! 🎉 Il tuo spazio di lavoro digitale protetto è completamente configurato. Completa qui sotto gli ultimi passaggi di verifica per garantirti i pagamenti giornalieri:";

$quiz_placeholder_fname = "Nome";
$quiz_placeholder_lname = "Cognome";
$quiz_placeholder_email = "Indirizzo email";
$quiz_placeholder_phone = "Numero di telefono";
$quiz_btn_submit = "Attiva il trading";
$quiz_text_typing       = "sta scrivendo un messaggio...";
$quiz_text_processing   = "Elaborazione della richiesta...";


// ABOUT US PAGE
$page_title_about = "Chi siamo | $source – La nostra missione e il nostro team";
$page_description_about = "Scopri i valori, gli obiettivi e il team di esperti che guidano $source. Scopri come uniamo sicurezza, trasparenza, attenzione all'utente e innovazione.";

// TERMS & CONDITIONS PAGE
$page_title_conditions = "Termini e Condizioni | $source – Regole e linee guida";
$page_description_conditions = "Leggi i Termini e Condizioni di $source. Il documento illustra le responsabilità degli utenti e le politiche della piattaforma, garantendo piena trasparenza e chiarezza giuridica.";

// CONTACT PAGE
$page_title_contact = "Contatti | $source – Supporto e assistenza";
$page_description_contact = "Hai domande su registrazione, account o transazioni? Contatta $source: il nostro team di supporto risponde in modo rapido, professionale e affidabile.";

// FAQ PAGE
$page_title_faq = "Domande frequenti | $source – Risposte e informazioni";
$page_description_faq = "Trova risposte chiare e comprensibili alle domande principali su depositi, prelievi, sicurezza e trading su $source. Il nostro team di supporto è sempre a disposizione per ulteriore assistenza.";

// PRIVACY POLICY PAGE
$page_title_private = "Informativa sulla privacy | Protezione dei tuoi dati personali";
$page_description_private = "Scopri come raccogliamo, trattiamo e proteggiamo i tuoi dati personali. La nostra Informativa sulla privacy garantisce trasparenza, sicurezza e una gestione responsabile dei dati.";

// REGISTRATION PAGE
$page_title_register = "$source | Accesso alla piattaforma | Registrazione rapida";
$page_description_register = "Registrati su $source in modo rapido e semplice e ottieni in pochi minuti l'accesso completo a tutte le funzionalità della piattaforma. Inserisci i tuoi dati e inizia subito.";

// ---------------------------------------------------------------------------------------------------

// HEADER FOR ALL PAGES
$text_why_invest = "Perché investire?";
$text_how_to_invest = "Come investire";
$text_who_we_are = "Chi siamo";
$text_investment_risks = "Rischi d'investimento";
$text_benefits = "Vantaggi";
$text_faq = "FAQ";
$text_log_in = "Accedi";
$text_sign_up = "Registrati";

// ---------------------------------------------------------------------------------------------------

// FOOTER FOR ALL PAGES

$footer_link_why_invest = "Perché investire?";
$footer_link_how_to_invest = "Come investire";
$footer_link_investment_risks = "Rischi d'investimento";
$footer_link_benefits = "Vantaggi";
$footer_link_faq = "FAQ";
$footer_link_who_we_are = "Chi siamo";
$footer_link_contact = "Contatti";
$footer_link_privacy_policy = "Informativa sulla privacy";
$footer_link_terms_conditions = "Termini e Condizioni";
$footer_link_registration = "Registrazione";

$footer_contact_title = "Informazioni di contatto";
$footer_lang_switcher_title = "Lingua";

$footer_description = "$source offre una piattaforma di trading online affidabile e sicura, progettata per rendere l'attività finanziaria chiara, trasparente ed efficiente. Che tu sia alle prime armi o un investitore esperto, la nostra soluzione unisce strumenti avanzati, supporto dedicato e un'interfaccia intuitiva. Migliaia di utenti in tutto il mondo scelgono $source per la sua trasparenza, gli elevati standard di sicurezza e l'attenzione al cliente. La protezione dei tuoi dati e del tuo capitale resta la nostra priorità assoluta, sostenuta da tecnologie di sicurezza all'avanguardia. Entra nella community di $source e investi con fiducia.";

// ---------------------------------------------------------------------------------------------------

// FORMS (ALL SECTIONS)
$placeholder_fname = "Nome";
$placeholder_lname = "Cognome";
$placeholder_email = "Indirizzo email";
$button_sign_up = "Registrati";

// ---------------------------------------------------------------------------------------------------

// HERO SECTION
$heading_main = "Piattaforma $source";
$text_intro = "Inizia il tuo percorso d'investimento con $source, una piattaforma intelligente che sfrutta l'intelligenza artificiale per investire automaticamente nei mercati azionari e delle criptovalute. Puoi partire da appena $currency, senza alcuna esperienza pregressa, contando su analisi in tempo reale pensate per ottimizzare i risultati.";

// WHY INVEST SECTION
$heading_reasons = "Perché investire con $source è una scelta sensata";
$text_protect_capital = "Proteggi il tuo capitale dall'inflazione e costruisci una strategia orientata al futuro";
$text_inflation = "L'inflazione erode gradualmente il potere d'acquisto. Invece di lasciare i risparmi fermi, strategie d'investimento intelligenti possono favorire una crescita nel lungo periodo. I sistemi automatizzati aumentano la stabilità e aiutano a costruire basi finanziarie più solide.";
$heading_auto_investing = "Investimenti automatizzati — nessuna esperienza dei mercati richiesta";
$text_auto_investing = "$source gestisce i tuoi investimenti grazie a una tecnologia IA avanzata. Non devi analizzare grafici né monitorare costantemente i mercati: il sistema individua le opportunità in tempo reale e alloca il capitale in modo strategico. Investi in modo efficiente e risparmia tempo prezioso.";
$heading_min_invest = "Inizia a investire con $currency — semplice e accessibile";
$text_min_invest = "Con un investimento iniziale a partire da soli $currency puoi accedere alla potente tecnologia IA che alimenta $source, progettata per sostenere una crescita duratura. Ideale per chi vuole iniziare senza barriere significative.";
$heading_control = "Controllo totale e piena trasparenza";
$text_control = "Con $source mantieni sempre il pieno controllo del tuo capitale. Puoi reinvestire o prelevare i profitti quando preferisci. La piattaforma è trasparente, equa e priva di costi nascosti.";
$button_signup = "Registrati ora";

// CALCULATOR SECTION
$text_expected_returns = "Quali rendimenti realistici si possono ottenere con $source?";
$text_my_investment = "IL MIO INVESTIMENTO:";
$text_usage_period = "PERIODO:";
$text_days = "Giorni";

// HOW AI INVESTING WORKS
$text_h2_ai_investments = "Come funziona l'investimento basato sull'IA con $source";
$text_h3_registration = "Registrazione rapida – inizia con $source in pochi minuti";
$text_p_registration = "Dopo la registrazione riceverai il supporto di un consulente dedicato. In genere il tuo account è pronto all'uso nel giro di pochi minuti.";
$text_h3_trading_approach = "Una strategia personalizzata per risultati costanti";
$text_p_trading_approach = "Con $source ottieni una strategia d'investimento su misura per i tuoi obiettivi finanziari e la tua propensione al rischio, per perseguire una crescita stabile e sostenibile.";
$text_h3_ai_trading = "Monitoraggio automatico dei mercati e decisioni guidate dall'IA";
$text_p_ai_trading = "$source analizza i mercati in tempo reale grazie a un'intelligenza artificiale avanzata, individua le opportunità ed esegue automaticamente le operazioni con precisione ed efficienza, senza alcun intervento manuale.";
$text_h3_profit_flexibility = "Gestione flessibile dei profitti";
$text_p_profit_flexibility = "Decidi in qualsiasi momento se prelevare i tuoi profitti o reinvestirli per alimentare la crescita futura. Il tuo capitale resta sempre pienamente accessibile.";

// RISK MANAGEMENT
$text_h2_risk_control = "Gestione del rischio e protezione del capitale con $source";
$text_h3_ai_analysis = "Analisi di mercato intelligente basata su un'IA ad autoapprendimento";
$text_p_ai_analysis = "$source utilizza algoritmi avanzati ad autoapprendimento in grado di elaborare in tempo reale enormi volumi di dati: movimenti dei prezzi, volumi di scambio, notizie, sentiment social, indicatori macroeconomici e pattern tecnici di mercato. L'IA individua opportunità nascoste, valuta le probabilità e filtra automaticamente le condizioni di mercato ad alto rischio, generando segnali di trading precisi e oggettivi. Il sistema si adatta di continuo al mutare degli scenari, bilanciando rendimento potenziale ed esposizione al rischio per sostenere una strategia d'investimento solida nel lungo periodo.";
$text_h3_custom_risk = "Un profilo di rischio personalizzato, costruito sulle tue esigenze";
$text_p_custom_risk = "Ogni investitore ha obiettivi diversi: c'è chi punta alla crescita e chi privilegia la tutela del capitale. $source ti permette di personalizzare il tuo profilo di rischio, da conservativo a bilanciato fino a orientato alla crescita. Una volta impostato, l'IA ottimizza costantemente fattori quali la dimensione delle posizioni, i livelli di stop-loss, gli obiettivi di take-profit e la frequenza operativa. La tua strategia resta sempre allineata ai tuoi obiettivi e al tuo livello di comfort.";
$text_h3_transparency = "Trasparenza totale e pieno controllo del tuo capitale";
$text_p_transparency = "La trasparenza è un principio fondante di $source. Ogni operazione — acquisti, vendite, aggiustamenti e commissioni — viene registrata e mostrata in tempo reale. Nessun costo nascosto, nessuna sorpresa. La tua dashboard offre una panoramica chiara di saldi, cronologia delle transazioni, profitti e perdite, statistiche ed esposizione al rischio. Il controllo resta interamente nelle tue mani, mentre la piattaforma lavora per te.";

// BENEFITS
$text_h2_benefits = "I vantaggi di $source – investi con metodo per crescere nel lungo periodo";
$text_h3_ai_investing = "Investi con un'IA avanzata – precisa e senza sforzo";
$text_p_ai_investing = "Non serve passare ore a studiare grafici o a seguire le notizie finanziarie. L'IA di $source lavora 24 ore su 24: analizza migliaia di segnali di mercato, riconosce i pattern in millisecondi, prevede i movimenti con notevole accuratezza ed esegue le operazioni nei momenti ottimali. Vivi l'esperienza dell'investimento algoritmico professionale senza bisogno di competenze tecniche.";
$text_h3_easy_investing = "Investire in modo semplice e sicuro, alla portata di tutti";
$text_p_easy_investing = "$source è progettata per rendere l'investimento accessibile a chiunque, indipendentemente dall'esperienza o dal capitale disponibile. La piattaforma offre un'interfaccia intuitiva, una procedura di configurazione lineare e contenuti formativi facili da comprendere, disponibili nella tua lingua. Anche chi investe per la prima volta può attivare la propria prima strategia automatizzata in 10–15 minuti. Videotutorial, guide e un servizio clienti sempre reattivo sono a tua disposizione.";
$text_h3_support = "Un supporto dedicato, focalizzato sul tuo successo";
$text_p_support = "Dopo il primo deposito ti verrà assegnato un consulente personale che ti aiuterà a definire il profilo di rischio, ti illustrerà le funzionalità della piattaforma, ti suggerirà i parametri iniziali e ti accompagnerà lungo tutto il tuo percorso con $source.";
$text_h3_opportunities = "Potenziale illimitato – una crescita che segue il tuo capitale";
$text_p_opportunities = "Con $source il tuo capitale continua a lavorare anche mentre viaggi, ti rilassi o dormi. L'ottimizzazione automatica e il reinvestimento dei profitti possono alimentare la crescita composta nel lungo periodo. Niente decisioni emotive, niente ore davanti allo schermo: ti basta controllare periodicamente i risultati e accedere ai profitti quando ne hai bisogno. Un approccio concreto per costruire una fonte di reddito passivo duratura.";

// TESTIMONIALS
$feedback_h2_title = "Cosa dicono i nostri utenti";

$feedback_h3_1 = "Da $currency a un'entrata extra affidabile";
$feedback_p_1 = "Non avevo alcuna esperienza di investimenti, eppure tutto ha funzionato in automatico. Nel giro di poco ho iniziato a vedere risultati positivi e oggi conto su una fonte di reddito aggiuntiva stabile.";

$feedback_h3_2 = "Perfetto per chi inizia – semplice ed efficace";
$feedback_p_2 = "Iniziare con $source è stato sorprendentemente facile. Grazie all'assistenza personalizzata che ho ricevuto, oggi ottengo risultati costanti senza stress inutili.";

$feedback_h3_3 = "Finalmente il mio capitale lavora per me";
$feedback_p_3 = "Invece di lasciare i risparmi fermi, ora investo in modo intelligente. $source garantisce prestazioni costanti senza richiedere attenzione o impegno continui.";

$feedback_h3_4 = "Libertà finanziaria ovunque io sia";
$feedback_p_4 = "Volevo poter viaggiare continuando a generare reddito. Con $source posso monitorare i miei investimenti e accedere ai miei guadagni da qualsiasi parte del mondo.";

// PARTNERS
$partners_h2_title = "Partner e collaborazioni strategiche";


// FAQ & CONTACT
$faq_h2_title = "Domande frequenti – risposte chiare e dirette";
$contact_h2_title = "Mettiti in contatto con noi";

$lang['faq_q1'] = 'Di quanto capitale ho bisogno per iniziare con %s?';
$lang['faq_a1'] = 'Puoi iniziare con appena %s. Molti utenti partono da un importo contenuto per prendere confidenza con la piattaforma e aumentano gradualmente il proprio investimento nel tempo, in base ai propri obiettivi e alla propria propensione al rischio.';

$lang['faq_q2'] = 'Quanto tempo richiedono i prelievi su %s?';
$lang['faq_a2'] = 'Le richieste di prelievo vengono generalmente elaborate entro 24 ore. A seconda del fornitore di servizi di pagamento e dell\'istituto bancario, i fondi possono poi essere accreditati entro 1–3 giorni lavorativi.';

$lang['faq_q3'] = 'In che modo %s protegge il mio investimento?';
$lang['faq_a3'] = 'In quanto piattaforma d\'investimento moderna, %s adotta più livelli di sicurezza, tra cui la trasmissione cifrata dei dati, procedure di verifica dell\'account e un monitoraggio continuo del rischio. Puoi inoltre personalizzare le impostazioni di sicurezza dal tuo profilo per rafforzare ulteriormente la protezione dell\'account.';

$lang['faq_q4'] = 'Serve esperienza pregressa per utilizzare %s?';
$lang['faq_a4'] = 'Assolutamente no. %s è progettata per essere accessibile anche ai principianti. La piattaforma ti guida in ogni fase della configurazione e dell\'utilizzo, lasciandoti comunque la possibilità di personalizzare le impostazioni ogni volta che desideri un maggiore controllo sulla tua strategia d\'investimento.';

// ---------------------------------------------------------------------------------------------------

// ABOUT US PAGE
$about_heading = "Chi siamo";

$about_text_1 = "$source nasce con una missione chiara: offrire a ogni investitore — dal principiante assoluto al professionista esperto — un ambiente sicuro, moderno e pienamente trasparente per investire in modo automatizzato in azioni e criptovalute. Siamo convinti che il successo di lungo periodo sui mercati finanziari si costruisca sulla chiarezza, sull'apertura e sulla fiducia reciproca, non sul caso. Per questo ogni interazione con la piattaforma — dalla registrazione al prelievo dei profitti — è guidata da questi principi. Ogni processo, ogni transazione e ogni decisione d'investimento si basa su dati oggettivi e resta trasparente, senza meccanismi nascosti né procedure poco chiare.";

$about_text_2 = "Il nostro team riunisce specialisti altamente qualificati: sviluppatori di IA e di trading algoritmico, analisti finanziari con lunga esperienza sui mercati globali, esperti di cybersicurezza e professionisti della compliance. Non ci limitiamo a costruire tecnologia: monitoriamo, testiamo e miglioriamo di continuo ogni componente della piattaforma. Dalla qualità dei dati di mercato in tempo reale alla stabilità dell'infrastruttura server, fino all'accuratezza dei segnali di trading, ogni elemento è sottoposto a rigorosi controlli di qualità e ad audit indipendenti. Il nostro obiettivo è offrire un'innovazione affidabile, replicabile e concreta, capace di generare valore reale per i nostri utenti.";

$about_image_alt = "Il nostro team";

$about_text_3 = "La protezione dei tuoi dati personali e dei tuoi asset finanziari è una delle nostre massime priorità. $source opera nel rispetto degli standard di sicurezza riconosciuti a livello internazionale, tra cui la conformità al GDPR e al PCI-DSS, e utilizza tecnologie di cifratura avanzate come TLS 1.3+ e AES-256. I fondi dei clienti sono custoditi su conti segregati presso istituti finanziari regolamentati. Penetration test indipendenti e valutazioni di sicurezza complete garantiscono che i dati e gli asset degli utenti siano protetti a un livello paragonabile a quello dei principali sistemi bancari e d'investimento.";

$about_text_4 = "La tecnologia è essenziale, ma sappiamo bene che investire con successo dipende da qualcosa di più degli algoritmi. Per questo affianchiamo a un'automazione potente un supporto umano di altissimo livello. A ogni utente registrato viene assegnato un consulente dedicato: un professionista preparato che aiuta a costruire strategie su misura, illustra le funzionalità della piattaforma, risponde alle domande e offre assistenza continua. Nessun chatbot anonimo, solo persone reali impegnate a sostenere i tuoi progressi finanziari.";

$about_text_5 = "Per noi l'innovazione non è una semplice parola d'ordine: è un impegno quotidiano. Il nostro team studia costantemente i nuovi comportamenti dei mercati, perfeziona i modelli di machine learning, integra nuove fonti informative e sviluppa funzionalità che rendono l'investimento più efficiente. Ogni miglioramento viene testato su dati storici e in ambienti reali controllati prima di essere reso disponibile agli utenti. Non promettiamo miracoli né risultati garantiti: offriamo strumenti avanzati, pensati per aiutare gli investitori a ottenere un vantaggio competitivo in mercati dove velocità, precisione e capacità di adattamento fanno la differenza.";

$about_text_6 = "Per migliaia di utenti, $source ha rappresentato il primo vero passo nel mondo degli investimenti automatizzati. Molti hanno iniziato con un capitale contenuto e profili di rischio prudenti, per poi ampliare gradualmente il proprio portafoglio grazie a risultati costanti, trasparenza e supporto personalizzato. Siamo orgogliosi di aprire nuove opportunità finanziarie non solo agli investitori esperti, ma anche a chi un tempo riteneva l'investimento troppo complesso, dispendioso in termini di tempo o del tutto inaccessibile. Con una tecnologia verificata e un team dedicato al tuo fianco, iniziare può essere davvero semplice e sicuro.";

$about_text_7 = "In sintesi, $source è molto più di una piattaforma di trading: è un ecosistema completo costruito su trasparenza, professionalità e fiducia. Unendo un'intelligenza artificiale all'avanguardia all'esperienza umana, a una gestione disciplinata del rischio e a un supporto dedicato, vogliamo essere un partner affidabile e di lungo periodo per aiutare i nostri utenti a costruire e far crescere il proprio futuro finanziario. Con $source non investi alla cieca: investi con metodo, con fiducia e con il pieno controllo delle tue decisioni.";


// ---------------------------------------------------------------------------------------------------
// TERMS & CONDITIONS
$terms_heading = "Termini e Condizioni";

$terms_text_1 = "Il presente documento definisce i termini e le condizioni generali (i 'Termini') che disciplinano l'utilizzo della piattaforma $source. Esso stabilisce i diritti e gli obblighi tra l'utente e il gestore della piattaforma. Ti invitiamo a leggere attentamente e integralmente i presenti Termini prima di utilizzare la piattaforma, aprire un account o effettuare qualsiasi operazione. Essi costituiscono la base giuridica del tuo rapporto con la piattaforma e sono vincolanti per entrambe le parti.";

$terms_text_2 = "Registrandoti, effettuando l'accesso, utilizzando una qualsiasi funzionalità della piattaforma o svolgendo qualsiasi attività su $source, accetti espressamente e integralmente i presenti Termini e Condizioni. La piattaforma può essere utilizzata esclusivamente da persone fisiche che abbiano compiuto almeno 18 anni e siano giuridicamente capaci di assumere obbligazioni vincolanti. L'utilizzo è vietato ai minori e a chi non disponga della piena capacità giuridica. In caso di sospetta violazione di tali requisiti di età, ci riserviamo il diritto di sospendere, limitare o chiudere definitivamente l'account interessato.";

$terms_text_3 = "Il funzionamento della piattaforma può occasionalmente risentire di interruzioni tecniche, periodi di manutenzione, aggiornamenti software o disservizi dovuti a fattori quali la volatilità dei mercati, un aumento del carico sui server o eventi esterni. Pur impegnandoci a mantenere un elevato livello di disponibilità del servizio, non è possibile garantire un accesso ininterrotto. Le funzionalità della piattaforma, gli algoritmi, le strutture di prezzo e i mercati disponibili possono essere ampliati, modificati, limitati o dismessi in qualsiasi momento, senza che ciò dia diritto ad alcuna pretesa nei confronti di $source.";

$terms_text_4 = "Tutti i contenuti presenti sulla piattaforma — testi, immagini, elementi grafici, software, algoritmi, marchi, loghi e analisi generate dall'IA — sono tutelati dalle norme sulla proprietà intellettuale e restano di proprietà di $source o dei suoi licenzianti. Qualsiasi riproduzione, distribuzione, comunicazione al pubblico, modifica o utilizzo commerciale senza il nostro previo consenso scritto è severamente vietato e può comportare responsabilità civile o penale.";

$terms_text_5 = "In qualità di utente, sei tenuto a garantire che tutte le informazioni che ci fornisci — dati identificativi, recapiti e dati di pagamento — siano corrette, complete e aggiornate. La comunicazione di informazioni false, fuorvianti o incomplete può comportare limitazioni dell'account, ritardi nei prelievi, sospensioni o azioni legali. I dati personali sono trattati esclusivamente in conformità alla nostra Informativa sulla privacy e alla normativa applicabile in materia di protezione dei dati. Manteniamo elevati standard di sicurezza, riservatezza e trasparenza.";

$terms_text_6 = "Tutte le decisioni di investimento e di trading assunte tramite $source, sia eseguite manualmente sia mediante automazione basata sull'IA, restano di tua esclusiva responsabilità e sono adottate a tuo rischio. $source fornisce l'infrastruttura tecnica e gli strumenti di analisi, ma non offre consulenza finanziaria personalizzata, raccomandazioni di investimento o garanzie di profitto. I mercati finanziari, comprese le azioni e le criptovalute, possono essere estremamente volatili e comportare la perdita parziale o totale del capitale investito. I risultati passati non devono mai essere considerati un indicatore attendibile dei risultati futuri. Investi esclusivamente somme che puoi permetterti di perdere.";

$terms_text_7 = "Ci riserviamo il diritto di modificare, aggiornare o integrare i presenti Termini in qualsiasi momento, in risposta a sviluppi normativi, cambiamenti tecnologici o nuove esigenze di mercato. Gli utenti saranno informati in anticipo, di norma almeno 14 giorni prima dell'entrata in vigore delle modifiche, tramite email, notifiche sulla piattaforma o avvisi pubblicati sul sito. L'utilizzo continuato della piattaforma dopo la data di efficacia delle modifiche costituisce accettazione dei Termini aggiornati. In caso di modifiche sostanziali, potrai scegliere di chiudere il tuo account.";

$terms_text_8 = "Sicurezza e trasparenza sono principi fondamentali della nostra attività. Utilizziamo tecnologie di cifratura avanzate, effettuiamo periodici audit di sicurezza, custodiamo i fondi dei clienti su conti segregati e applichiamo rigorose procedure di compliance, inclusi i controlli KYC e AML, per garantire il più alto livello di protezione possibile. Tutte le attività e le transazioni sono documentate in modo chiaro e trasparente. Ci impegniamo a offrire un servizio corretto, onesto e orientato al cliente, perché la tua fiducia è il nostro bene più prezioso.";

// ---------------------------------------------------------------------------------------------------

// CONTACT PAGE
$contact_heading = "Contattaci";

$contact_intro = "Il nostro team di supporto dedicato è a tua disposizione per qualsiasi domanda o dubbio riguardante $source. Che tu stia cercando informazioni, ti sia già registrato o utilizzi attivamente la piattaforma, ci impegniamo a offrirti un'assistenza professionale e personalizzata ogni volta che ne hai bisogno.";

$contact_how_to = "Come contattarci";

$contact_how_to_text = "Offriamo un supporto rapido e puntuale su tutto ciò che riguarda il tuo account e la tua esperienza con $source. Il nostro team opera dal lunedì al venerdì nei consueti orari d'ufficio (CET) e tratta ogni richiesta con attenzione e professionalità. Ecco gli ambiti in cui possiamo aiutarti:";

$contact_list_1 = "Registrazione, verifica e gestione completa dell'account, comprese le modifiche al profilo e alle impostazioni di rischio";
$contact_list_2 = "Assistenza tecnica sull'utilizzo della piattaforma, sul funzionamento dell'applicazione o sulla risoluzione dei problemi";
$contact_list_3 = "Domande su depositi, prelievi, tempi di elaborazione e metodi di pagamento supportati";
$contact_list_4 = "Informazioni dettagliate su funzionalità della piattaforma, strategie d'investimento, algoritmi di IA e strumenti di trading disponibili";
$contact_list_5 = "Feedback, suggerimenti e idee che possono aiutarci a migliorare e ampliare la piattaforma";
$contact_list_6 = "Supporto per qualsiasi altra esigenza, dalle domande generali all'assistenza personalizzata";

$contact_send_message = "Invia un messaggio";

$contact_send_message_text = "Utilizza il modulo di contatto protetto qui sotto per inviarci la tua richiesta. Ti invitiamo a compilare tutti i campi pertinenti, così da poterla gestire nel modo più preciso ed efficiente possibile. Nei giorni lavorativi rispondiamo di norma entro 24 ore, spesso molto prima. Per questioni tecniche urgenti, il supporto in chat è disponibile nei giorni feriali dalle 9:00 alle 18:00.";

$contact_info = "Informazioni di contatto";

$contact_info_text = "Il nostro obiettivo è rendere la tua esperienza con $source il più fluida, comoda e proficua possibile. Attribuiamo grande importanza alla chiarezza della comunicazione, alla trasparenza e a un supporto orientato alle soluzioni. Puoi contattarci tramite il modulo qui sotto, via email oppure, in casi selezionati, per telefono. La tua soddisfazione e la tua sicurezza restano le nostre priorità assolute.";

// ---------------------------------------------------------------------------------------------------

// FAQ PAGE
$faq_page_heading = "Domande frequenti – FAQ";
$faq_page_subheading = "Hai delle domande? Qui trovi le risposte.";
$faq_page_intro_1 = "In questa sezione trovi risposte sintetiche alle domande più comuni su account, pagamenti, sicurezza e utilizzo della piattaforma.";
$faq_page_intro_2 = "Il nostro obiettivo è accompagnarti passo dopo passo ed eliminare ogni incertezza fin dall'inizio.";
$faq_page_intro_3 = "Se hai bisogno di ulteriore assistenza, il nostro team di supporto è sempre a disposizione per offrirti una consulenza personalizzata.";
$faq_page_section_heading = "FAQ – Le risposte alle domande più frequenti dei nostri utenti";


// ---------------------------------------------------------------------------------------------------
// PRIVACY POLICY
$private_policy_heading = "Informativa sulla privacy";

$private_policy_intro = "Per $source, proteggere e trattare in modo responsabile i tuoi dati personali è una priorità assoluta. Trattiamo i dati in modo trasparente, per finalità chiaramente definite e nel rispetto della normativa applicabile in materia di protezione dei dati. La presente Informativa sulla privacy spiega quali dati raccogliamo, perché lo facciamo, per quanto tempo li conserviamo e quali misure adottiamo per garantirne la sicurezza.";

$private_policy_section_1_heading = "1. Titolare del trattamento";
$private_policy_section_1_text = "Il gestore del sito web e della piattaforma $source agisce in qualità di titolare del trattamento dei tuoi dati personali. I recapiti utili e ulteriori informazioni societarie sono disponibili su questo sito. Per qualsiasi domanda in materia di privacy puoi rivolgerti al nostro team per la protezione dei dati.";

$private_policy_section_2_heading = "2. Dati che raccogliamo";
$private_policy_section_2_text = "Raccogliamo e trattiamo esclusivamente i dati necessari per erogare i nostri servizi, adempiere agli obblighi di legge e garantire il funzionamento sicuro della piattaforma. Tra questi possono rientrare:";
$private_policy_section_2_list = [
"Dati identificativi: nome, cognome e data di nascita, ai fini della verifica dell'identità e dell'età.",
"Dati di contatto: indirizzo email, numero di telefono (se fornito), Paese di residenza e, ove applicabile, indirizzo postale.",
"Dati relativi all'account e alle transazioni: informazioni di pagamento, depositi, prelievi e cronologia delle operazioni.",
"Dati tecnici e di utilizzo: indirizzo IP, tipo di browser, caratteristiche del dispositivo, orari di accesso e log di sistema.",
"Documentazione di verifica: documenti d'identità, prova di residenza o altri documenti richiesti dalle procedure di conformità KYC e AML."
];
$private_policy_section_2_note = "In linea generale non raccogliamo categorie particolari di dati personali, come informazioni sullo stato di salute o convinzioni religiose, salvo obbligo di legge o tua esplicita autorizzazione.";

$private_policy_section_3_heading = "3. Modalità di raccolta dei dati";
$private_policy_section_3_text = "I tuoi dati possono essere raccolti attraverso diversi canali sicuri:";
$private_policy_section_3_list = [
"Direttamente da te, ad esempio in fase di registrazione, aggiornamento del profilo, verifica dei documenti o contatto con l'assistenza.",
"Automaticamente, tramite cookie, log dei server, strumenti di analisi e informazioni sul dispositivo, mentre utilizzi la piattaforma.",
"Da terze parti affidabili, quali fornitori di servizi di pagamento, servizi di verifica dell'identità o provider di accesso tramite social, qualora tu scelga di utilizzarli."
];

$private_policy_section_4_heading = "4. Finalità del trattamento";
$private_policy_section_4_text = "Trattiamo i tuoi dati personali esclusivamente per finalità legittime e chiaramente definite:";
$private_policy_section_4_list = [
"Creare, gestire e mantenere il tuo account utente e l'accesso alle funzionalità della piattaforma.",
"Elaborare e mettere in sicurezza depositi, prelievi e attività connesse ai pagamenti.",
"Fornire assistenza clienti e rispondere alle richieste.",
"Adempiere agli obblighi di legge e regolamentari, inclusi quelli in materia di KYC, AML e fiscalità.",
"Garantire la sicurezza della piattaforma e prevenire frodi, abusi o accessi non autorizzati.",
"Migliorare le prestazioni, le funzionalità e l'esperienza d'uso della piattaforma.",
"Inviare comunicazioni di marketing e aggiornamenti, previo tuo consenso esplicito."
];

$private_policy_section_5_heading = "5. Basi giuridiche del trattamento";
$private_policy_section_5_list = [
"Esecuzione di un contratto o adozione di misure precontrattuali.",
"Adempimento di obblighi di legge, inclusi quelli in materia di antiriciclaggio e di vigilanza.",
"Legittimo interesse aziendale, ad esempio garantire la sicurezza, l'affidabilità e la stabilità operativa della piattaforma.",
"Il tuo consenso esplicito, ad esempio per la ricezione di comunicazioni di marketing o l'utilizzo di funzionalità facoltative della piattaforma."
];

$private_policy_section_6_heading = "6. Comunicazione dei dati";
$private_policy_section_6_text = "I tuoi dati vengono condivisi solo quando necessario ed esclusivamente con fornitori di servizi e partner selezionati con cura:";
$private_policy_section_6_list = [
"Prestatori di servizi di pagamento e istituti bancari, per l'elaborazione delle transazioni.",
"Fornitori specializzati che ci supportano nella verifica dell'identità e nei controlli di conformità.",
"Fornitori di servizi tecnologici e cloud, operanti sulla base di appositi accordi sul trattamento dei dati.",
"Fornitori di servizi di analisi e sicurezza che, ove possibile, utilizzano dati anonimizzati o pseudonimizzati.",
"Consulenti professionali, quali legali o fiscalisti, laddove necessario.",
"Autorità di vigilanza, tribunali o forze dell'ordine, in presenza di un obbligo di legge."
];
$private_policy_section_6_note = "Non vendiamo, non cediamo e non trasferiamo in alcun altro modo i tuoi dati personali a terzi per finalità commerciali.";

$private_policy_section_7_heading = "7. Trasferimenti internazionali di dati";
$private_policy_section_7_text = "Alcuni fornitori di servizi, tra cui partner di hosting cloud o di analisi, possono operare al di fuori della tua giurisdizione. Ogni volta che si verifica un trasferimento internazionale di dati, adottiamo garanzie adeguate, quali clausole contrattuali standard o altri meccanismi giuridici riconosciuti, per assicurare un livello di protezione adeguato.";

$private_policy_section_8_heading = "8. Sicurezza dei dati";
$private_policy_section_8_text = "Adottiamo misure tecniche e organizzative complete per proteggere i tuoi dati:";
$private_policy_section_8_list = [
"Trasmissione cifrata dei dati mediante protocolli di sicurezza moderni, come TLS 1.3+.",
"Cifratura robusta dei dati sensibili archiviati, con tecnologie quali AES-256.",
"Valutazioni di sicurezza periodiche, penetration test e verifiche indipendenti.",
"Monitoraggio continuo di attività sospette e potenziali minacce alla sicurezza.",
"Controlli di accesso rigorosi e permessi basati sui ruoli per il personale autorizzato.",
"Custodia dei fondi dei clienti su conti segregati presso partner finanziari regolamentati."
];
$private_policy_section_8_note = "Sebbene nessun sistema di sicurezza possa garantire una protezione assoluta, lavoriamo costantemente per ridurre al minimo i rischi e mantenere un elevato livello di sicurezza.";

$private_policy_section_9_heading = "9. Conservazione dei dati";
$private_policy_section_9_text = "I dati personali vengono conservati soltanto per il tempo necessario a conseguire le finalità indicate nella presente Informativa o ad adempiere agli obblighi di legge:";
$private_policy_section_9_list = [
"Per tutta la durata del tuo account attivo e del rapporto contrattuale con noi.",
"Per i periodi ulteriori richiesti da obblighi fiscali, regolamentari o di legge.",
"Fino alla revoca del consenso, quando il trattamento si fonda esclusivamente su di esso."
];
$private_policy_section_9_note = "Quando i dati non sono più necessari, vengono cancellati in modo sicuro o anonimizzati in via definitiva.";

$private_policy_section_10_heading = "10. I tuoi diritti";
$private_policy_section_10_text = "Nei limiti previsti dalla normativa applicabile, puoi esercitare i seguenti diritti in relazione ai tuoi dati personali:";
$private_policy_section_10_list = [
"Richiedere l'accesso ai dati che ti riguardano e che deteniamo.",
"Richiedere la rettifica di dati inesatti o incompleti.",
"Richiedere la cancellazione dei tuoi dati, ove giuridicamente consentito.",
"Richiedere la limitazione del trattamento in determinate circostanze.",
"Ricevere i tuoi dati in un formato strutturato, di uso comune e leggibile da dispositivo automatico.",
"Revocare in qualsiasi momento un consenso precedentemente prestato.",
"Presentare reclamo all'autorità competente per la protezione dei dati."
];

$private_policy_section_11_heading = "11. Cookie e tecnologie analoghe";
$private_policy_section_11_text = "Utilizziamo cookie e tecnologie analoghe per garantire il funzionamento della piattaforma, analizzare le modalità di utilizzo e migliorare l'esperienza degli utenti. I cookie essenziali sono sempre attivi, mentre quelli analitici e di marketing richiedono il tuo consenso. Ulteriori dettagli sono disponibili nella nostra Cookie Policy.";
$private_policy_google_choices = 'Puoi gestire il modo in cui Google utilizza i dati relativi alle tue visite tramite le <a href="http://www.google.com/settings/ads" target="_blank" rel="noopener">Impostazioni annunci di Google</a>, disattivare la pubblicità basata sugli interessi con il <a href="https://tools.google.com/dlpage/gaoptout" target="_blank" rel="noopener">Componente aggiuntivo del browser per la disattivazione di Google Analytics</a> oppure consultare l\'<a href="https://www.google.com/intl/en/policies/privacy/" target="_blank" rel="noopener">Informativa sulla privacy di Google</a> per maggiori dettagli.';

$private_policy_section_12_heading = "12. Modifiche alla presente Informativa sulla privacy";
$private_policy_section_12_text = "Potremmo aggiornare periodicamente la presente Informativa sulla privacy a seguito di cambiamenti normativi, regolamentari od operativi. La versione più recente sarà sempre disponibile sul sito. In caso di modifiche sostanziali, potremo informarti via email o tramite notifiche sulla piattaforma.";

$private_policy_section_13_heading = "13. Contatti in materia di privacy";
$private_policy_section_13_text = "Per qualsiasi domanda relativa alla privacy, alla presente Informativa o all'esercizio dei tuoi diritti, puoi scriverci all'indirizzo email $site_gmail oppure utilizzare il modulo di contatto del sito. Esamineremo la tua richiesta e ti risponderemo nel più breve tempo possibile.";

$private_policy_agreement = "Utilizzando $source, dichiari di aver letto e compreso la presente Informativa sulla privacy e di accettarne i termini.";

$private_policy_thank_you = "Grazie per la fiducia. Proteggere i tuoi dati e rispettare la tua privacy resterà sempre un impegno fondamentale di $source.";

// ---------------------------------------------------------------------------------------------------

// REGISTRATION
$register_heading = "Inizia oggi stesso con $source: ti bastano pochi minuti";

// ==========================================
// RISK WARNING PAGE
// ==========================================
$page_title_risk_warning = "Avvertenza sui rischi | $source";
$page_description_risk_warning = "Comprendi i rischi del trading automatizzato di criptovalute con $source: volatilità dei mercati, rischio di esecuzione e aspetti normativi.";
$risk_warning_heading = "Avvertenza sui rischi";
$risk_warning_intro = "Comprendere i rischi è il primo passo per operare con consapevolezza.";

$risk_warning_ai_heading = "Come il nostro sistema di IA aiuta a gestire il rischio:";
$risk_warning_ai_list = [
    "<strong>Efficienza algoritmica e operatività senza emozioni:</strong> algoritmi avanzati analizzano i segnali di mercato ed eseguono le operazioni in modo oggettivo nei momenti ottimali.",
    "<strong>Strategie basate sui dati:</strong> le strategie si fondano su pattern di mercato verificati e su analisi in tempo reale, non su supposizioni.",
    "<strong>Impostazioni flessibili e controllo totale:</strong> modifica i tuoi parametri di rischio in qualsiasi momento. Monitora saldi e operazioni in piena trasparenza dalla tua dashboard, senza costi nascosti e con prelievi liberi da restrizioni.",
];

$risk_warning_disclaimer = "<strong>Avvertenza:</strong> il trading comporta sempre dei rischi. I sistemi automatizzati (IA inclusa) non garantiscono profitti, possono guastarsi a causa di errori software o di eventi di mercato imprevisti e richiedono la supervisione dell'utente. I risultati passati non sono indicativi dei risultati futuri. Questa piattaforma ha finalità puramente informative e promozionali e non fornisce consulenza finanziaria.";

$risk_warning_s1_heading = "1. Rischi generali e del mercato delle criptovalute";
$risk_warning_s1_intro = "Le criptovalute sono asset altamente volatili e speculativi, negoziati 24 ore su 24 e 7 giorni su 7, con una vigilanza normativa minima nella maggior parte delle giurisdizioni.";
$risk_warning_s1_list = [
    "I valori possono oscillare in modo drastico in brevi intervalli di tempo, con il rischio di una perdita totale del capitale investito.",
    "Le quotazioni possono essere fortemente influenzate da aggiornamenti normativi, sviluppi tecnici, violazioni della sicurezza o eventi macroeconomici di più ampia portata.",
    "Alcuni asset possono perdere completamente ogni valore. Investi solo somme che puoi permetterti di perdere.",
];

$risk_warning_s2_heading = "2. Rischi di esecuzione, liquidità e leva finanziaria";
$risk_warning_s2_list = [
    "<strong>Volatilità di mercato e liquidità:</strong> movimenti di prezzo estremi (oltre il 10–20% giornaliero) o una liquidità ridotta (soprattutto sulle criptovalute minori) possono causare ritardi, indisponibilità della piattaforma e un forte slippage in fase di esecuzione. In condizioni estreme gli ordini stop-loss non possono garantire il contenimento delle perdite.",
    "<strong>Rischi legati a leva e marginazione:</strong> i prodotti a leva amplificano tanto i guadagni quanto le perdite: puoi quindi perdere più del deposito iniziale. Circa il 70–80% dei conti degli investitori al dettaglio subisce perdite operando con prodotti a leva.",
];

$risk_warning_s3_heading = "3. Rischi tecnici, di cybersicurezza e legati a terze parti";
$risk_warning_s3_list = [
    "<strong>Fattori tecnici:</strong> il trading online comporta per sua natura rischi di disconnessione da internet, errori hardware o software e indisponibilità del servizio.",
    "<strong>Cybersicurezza:</strong> i conti in criptovaluta sono bersagli frequenti di phishing, malware e attacchi informatici. Le transazioni sono irreversibili: la compromissione delle tue credenziali può comportare una perdita definitiva.",
    "<strong>Piattaforme di terze parti:</strong> questo sito può indirizzare gli utenti verso piattaforme di terze parti. Non ne controlliamo, approviamo né garantiamo la sicurezza, l'operatività o la solvibilità. Svolgi sempre le tue verifiche prima di depositare fondi su piattaforme esterne.",
];

$risk_warning_s4_heading = "4. Aspetti normativi, fiscali e disposizioni finali";
$risk_warning_s4_list = [
    "<strong>Conformità normativa e fiscalità:</strong> i quadri normativi variano notevolmente da un Paese all'altro e cambiano rapidamente. Gli utenti sono gli unici responsabili di assicurare che la propria attività di trading rispetti le leggi locali e di adempiere ai propri obblighi fiscali.",
    "<strong>Nessuna garanzia di profitto:</strong> non esiste un trading in criptovalute \"sicuro\" o privo di rischi. Qualsiasi dato di rendimento o esempio di performance ha carattere puramente ipotetico.",
    "<strong>Adeguatezza:</strong> se non comprendi appieno i rischi, se impieghi risorse economiche essenziali o se operi con denaro preso in prestito, il trading di criptovalute non è adatto a te. In caso di dubbi, rivolgiti a un consulente finanziario indipendente e autorizzato.",
];

$risk_warning_contact = "<strong>Contatti:</strong> per qualsiasi domanda relativa alla presente informativa o per inviare una richiesta, rivolgiti al nostro servizio clienti ufficiale tramite il modulo di contatto presente sul sito.";
$footer_link_risk_warning = "Avvertenza sui rischi";
?>
