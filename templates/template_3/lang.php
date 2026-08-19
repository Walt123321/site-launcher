<?php
// MANUAL
$site_name = "$source";
$site_url = "https://{{DOMAIN}}";
$site_domain = parse_url($site_url, PHP_URL_HOST);
$app_price = 250;
$rating_value = 4.7;
$rating_count = 2648;
$review_count = 112; // fixed (not randomized per page load) per JSON-LD requirements
$app_currency = "EUR";
$site_lang = "it-IT";
$country_name = "United Kingdom"; // default -- overwritten per-launch by generate_lang_files() via country_name= (see core/lang_pipeline.py)

// фото
$crypto_img = "images/crypto_main.webp";

$main_h1 = "Piattaforma di Trading Algoritmico <span>$source</span> | Esecuzione Automatizzata in Tempo Reale";
$main_p = "Accesso all'infrastruttura di analisi ad alta frequenza. Registrazione limitata per utenti in <span>$country_name</span>";

// имена с отзывов
$feedback_strong_1 = "Giulia Martellini";
$feedback_strong_2 = "Elena Pugliese";
$feedback_strong_3 = "Lorenzo Bianchi";
$feedback_strong_4 = "Valentina Ricci";
$feedback_strong_5 = "Nicola Moretti";
$feedback_strong_6 = "Giulio Ferraro";

$feedback_description_1 = "Non avevo mai utilizzato piattaforme di trading automatizzato prima d'ora. L'interfaccia intuitiva e la gestione automatica dei parametri di rischio rendono l'accesso ai mercati estremamente chiaro e strutturato.";
$feedback_description_2 = "La velocità di esecuzione degli ordini tramite API e la trasparenza delle operazioni mi hanno pienamente convinto. In 30 giorni ho ottimizzato significativamente la gestione del mio portafoglio.";
$feedback_description_3 = "Ho verificato il conto ed eseguito le prime operazioni il primo giorno. Il sistema di controllo del rischio integrato funziona in modo preciso e trasparente.";
$feedback_description_4 = "$source ha semplificato completamente il mio approccio agli investimenti. L'esecuzione automatizzata mi permette di gestire il capitale senza dover monitorare costantemente i grafici.";
$feedback_description_5 = "Infrastruttura tecnica eccellente. Ho iniziato poche settimane fa e la precisione degli algoritmi nell'identificare le inefficienze di mercato è davvero notevole.";
$feedback_description_6 = "Dopo un periodo di incertezza finanziaria, questa piattaforma mi ha offerto uno strumento di trading automatizzato stabile e trasparente. Il supporto clienti è sempre preciso e professionale.";

// T,D MAIN
$page_title_main = "$source — Official Website | Algorithmic Trading Platform";
$page_description_main = "Scopri $source: piattaforma di trading automatizzato basata su intelligenza artificiale. Analisi dei mercati in tempo reale, protocolli di sicurezza avanzati e gestione del rischio.";


// ==========================================
// CHAT-QUIZ TRANSLATIONS & CONFIGURATION
// ==========================================

$quiz_consultant_name = 'Sophia';
$quiz_consultant_role = 'Onboarding Assistant';

$quiz_text_welcome   = "Ciao! Sono $quiz_consultant_name, la tua assistente personale per l'attivazione dell'account su $site_name. Il tuo accesso è stato pre-approvato. Configuriamo insieme il tuo profilo di trading.";
$quiz_text_q1 = "Per garantire la piena conformità alle normative finanziarie internazionali, conferma il tuo paese di residenza attuale: $country_name";
$quiz_text_a1_yes    = "Sì, risiedo attualmente in questo paese";
$quiz_text_a1_no     = "No";

$quiz_text_q2 = "Seleziona la tua fascia d'età per configurare i parametri di gestione del rischio più adatti:";

$quiz_text_q3        = "Disponi di un conto bancario attivo o di una carta per il prelievo dei fondi e la gestione del capitale?";
$quiz_text_a3_yes    = "Sì, dispongo di un conto attivo";
$quiz_text_a3_no     = "Non ancora disponibile";

$quiz_text_q4        = "Indica la tua fonte primaria di reddito per ottimizzare l'allocazione del capitale di trading:";
$quiz_text_a4_1      = "Lavoro dipendente / Libero professionista";
$quiz_text_a4_2      = "Rendite da investimenti / Risparmi";
$quiz_text_a4_3      = "Altre fonti";

$quiz_text_q5 = "Passaggio finale: Un nostro specialista dedicato ti contatterà telefonicamente per confermare l'attivazione del conto. Le chiamate avvengono tra le 11:00 e le 20:00. L'orario è adeguato?";
$quiz_text_a5_yes    = "Sì, questo orario è ideale";
$quiz_text_a5_no     = "Desidero essere contattato al più presto";

$quiz_text_loader    = "Elaborazione dei dati e inizializzazione dei parametri di sicurezza del conto...";
$quiz_text_final_ttl = "Account Autorizzato con Successo! 🎉 Il tuo spazio operativo è configurato. Completa la registrazione sottostante per attivare l'accesso ai mercati:";

$quiz_placeholder_fname = "Nome";
$quiz_placeholder_lname = "Cognome";
$quiz_placeholder_email = "Indirizzo Email";
$quiz_placeholder_phone = "Numero di Telefono";
$quiz_btn_submit = "Attiva Account";
$quiz_text_typing       = "sta scrivendo un messaggio...";
$quiz_text_processing   = "Elaborazione in corso...";


// T,D ABOUT
$page_title_about = "Chi Siamo | $source – Infrastruttura di Trading Algoritmico";
$page_description_about = "Scopri $source: standard ingegneristici, protocolli di sicurezza SSL/TLS e infrastruttura di machine learning per investimenti automatizzati.";

// T,D CONDITIONS
$page_title_conditions = "Termini e Condizioni | $source – Specifiche Legali";
$page_description_conditions = "Leggi i Termini e le Condizioni ufficiali di $source. Informazioni sull'uso della piattaforma, responsabilità dell'utente e protocolli operativi.";

// T,D CONTACT
$page_title_contact = "Contatti e Supporto | $source – Assistenza Tecnica";
$page_description_contact = "Contatta il team di supporto di $source per assistenza sulla registrazione, verifica del conto e configurazione dei parametri tecnici.";

// T,D PRIVATE
$page_title_private = "Informativa sulla Privacy | $source – Protezione Dati";
$page_description_private = "Scopri come $source raccoglie, elabora e protegge i dati personali in conformità al regolamento GDPR e agli standard internazionali di sicurezza.";

// T,D REGISTER
$page_title_register = "Registrazione Account | $source – Accedi alla Piattaforma";
$page_description_register = "Crea un account su $source per accedere all'esecuzione automatizzata dei mercati tramite intelligenza artificiale. Registrazione sicura in 3 minuti.";


// форма
$contact_form_fname = "Nome";
$contact_form_lname = "Cognome";
$contact_form_email = "Indirizzo Email";
$contact_form_submit = "Registrati Ora";


// header
$nav_investors = "Investitori";
$nav_steps = "Come Funziona";
$nav_trade = "Mercati";
$nav_advantages = "Vantaggi";
$nav_statistics = "Statistiche";
$nav_feedback = "Recensioni";
$button_register = "Registrati Ora";


// footer
$footer_about = "Chi Siamo";
$footer_contact = "Contatti";
$footer_registration = "Registrazione";
$footer_terms = "Termini e Condizioni";
$footer_privacy = "Informativa sulla Privacy";
$footer_rights = "© $source 2026. Tutti i diritti riservati.";

// main
$leaders_badge = "Istituzionale";
$leaders_title = "Leader del settore e visione sugli investimenti automatizzati:";
$leader1_text = "Come investitore, ho sempre sostenuto che la disciplina finanziaria e la gestione del rischio siano la base della crescita del capitale. L'integrazione di algoritmi avanzati e intelligenza artificiale permette di eliminare il fattore emotivo, rendendo l'analisi dei mercati precisa e accessibile a tutti.";
$leader1_name = "— Warren Buffett";
$leader1_position = "Presidente e CEO di Berkshire Hathaway";
$leader2_text = "I mercati finanziari globali evolvono verso l'automazione ad alta frequenza. L'unione tra modelli di analisi quantitativa e machine learning offre agli investitori strumenti trasparenti per ottimizzare le proprie strategie nel lungo periodo.";
$leader2_name = "— Larry Fink";
$leader2_position = "CEO di BlackRock — Gestore Patrimoniale Globale";
$leader3_text = "L'innovazione tecnologica nella gestione della liquidità e nell'esecuzione degli ordini ha ridefinito il settore bancario. L'utilizzo dell'IA nell'analisi dei dati di mercato garantisce un'allocazione efficiente del capitale con protocolli di protezione rigorosi.";
$leader3_name = "— Jamie Dimon";
$leader3_position = "CEO di JPMorgan Chase";


$steps_badge = "Inizio Rapido";
$steps_title = "Attiva la tua piattaforma in tre semplici passaggi";
$step1_number = "Passo 1";
$step1_title = "Registrazione Account";
$step1_text = "Inserisci i tuoi dati nel modulo ufficiale e ricevi una chiamata di supporto da un nostro specialista per verificare il profilo.";
$step2_number = "Passo 2";
$step2_title = "Allocazione Capitale";
$step2_text = "Effettua il deposito iniziale a partire da $app_price $app_currency per attivare il motore di trading e connettere gli algoritmi.";
$step3_number = "Passo 3";
$step3_title = "Esecuzione Automatizzata";
$step3_text = "Avvia il sistema di trading automatizzato. L'algoritmo monitora i mercati 24/7 proteggendo il capitale con parametri di Stop-Loss predefiniti.";
$steps_button = "Registrati Ora";


$trades_badge = "Esecuzione in Tempo Reale";
$trades_title = "$source utilizza modelli di Machine Learning per identificare micro-inefficiencies sui mercati";
$trade_btc_name = "BTC / EUR";
$trade_btc_value = "+ 9.071,50 €";
$trade_eth_name = "ETH / EUR";
$trade_eth_value = "+ 1.156,57 €";
$trade_ltc_name = "LTC / EUR";
$trade_ltc_value = "+ 90,04 €";
$trade_eos_name = "EOS / EUR";
$trade_eos_value = "+ 14,01 €";
$trade_xrp_name = "XRP / EUR";
$trade_xrp_value = "+ 0,60 €";


$advantages_badge = "Vantaggi Tecnici";
$advantages_title = "Registrati oggi e accedi all'infrastruttura di trading ad alta precisione";
$advantages_card_badge = "Specifiche";
$adv1_title = "Compatibilità Multi-Dispositivo";
$adv1_text = "$source è accessibile via browser web da qualsiasi smartphone, tablet o computer senza installare software complessi.";
$adv2_title = "Infrastruttura HFT Automatica";
$adv2_text = "Algoritmi di esecuzione ad alta frequenza analizzano la profondità del book ordini sui principali exchange per cogliere opportunità immediate.";
$adv3_title = "Sicurezza e Riservatezza Dati";
$adv3_text = "Crittografia bancaria AES-256 e connessioni API in sola lettura garantiscono la totale protezione dei fondi e della privacy dell'utente.";


$statistics_badge = "Metriche di Sistema";
$statistics_title = "Dati e volumi operativi della piattaforma";
$statistics_description_top = "La trasparenza operativa è il valore fondamentale di $source. I volumi di trading processati e la costante crescita della liquidità confermano la stabilità del nostro ecosistema algoritmico basato sull'analisi quantitativa.";
$stat1_value = "1,45 €";
$stat1_denomination = "Milioni";
$stat1_title = "Capitale In Gestione";
$stat2_value = "0,87 €";
$stat2_denomination = "Milioni";
$stat2_title = "Profitto Distribuito";
$stat3_value = "0,29 €";
$stat3_denomination = "Miliardi";
$stat3_title = "Volume Transazioni Processato";
$statistics_description_bottom = "Il nostro team di sviluppatori e analisti quantitativi garantisce l'efficienza degli algoritmi con un rigoroso controllo della deviazione di prezzo (slippage). $source offre un'infrastruttura professionale per l'ottimizzazione del capitale.";
$feedback = "Recensioni";
$recommendations = "Feedback verificato dei nostri clienti attivi";


$join_title_main = "Prendi il controllo della tua strategia finanziaria";
$join_title_accent = "– attiva il tuo account oggi.";

$places_title = "Piattaforma di Trading Automatizzato <span style=\"white-space: nowrap\">$source</span> | Registrazione Ufficiale";
$places_remaining_text = "Posti disponibili per la sessione corrente";
$places_button = "Registrati Ora";


// about page
$about_title = "CHI SIAMO";
$about_paragraph_1 = "$source nasce con l'obiettivo di offrire a investitori privati e istituzionali un ambiente di trading automatizzato, sicuro e trasparente per operare sui mercati finanziari e sugli asset digitali. La nostra filosofia si fonda sull'eliminazione dei bias emotivi nell'operatività quotidiana attraverso l'uso di dati statistici e algoritmi deterministici.";
$about_paragraph_2 = "Il nostro team combina competenze multilivello: sviluppo di reti neurali, analisi quantitativa dei mercati, sicurezza informatica e conformità normativa. Ogni aggiornamento del motore di trading viene rigorosamente testato su dati storici prima di essere distribuito nei sistemi di produzione.";
$about_paragraph_3 = "La sicurezza dei fondi e la protezione dei dati personali costituiscono la priorità assoluta dell'architettura di $source. Applichiamo crittografia TLS 1.3, isolamento dei database e rigorose procedure di conformità GDPR per prevenire qualsiasi accesso non autorizzato.";
$about_paragraph_4 = "Oltre all'infrastruttura tecnologica, forniamo un supporto operativo costante. Ogni utente registrato viene affiancato da uno specialista di onboarding per la configurazione del profilo di rischio e la comprensione dei parametri di piattaforma.";
$about_paragraph_5 = "La costante ricerca ed evoluzione dei nostri modelli matematici ci permette di adeguarci ai cambiamenti di volatilità del mercato. Ottimizziamo continuamente la gestione degli ordini per garantire la massima velocità di esecuzione con la minima latenza.";
$about_paragraph_6 = "Migliaia di utenti utilizzano $source come strumento principale per la gestione sistematica del proprio portafoglio. La possibilità di iniziare con un capitale contenuto consente di testare il sistema e incrementare la propria operatività gradualmente.";
$about_paragraph_7 = "In sintesi, $source rappresenta un ecosistema integrato per il trading intelligente. Uniamo tecnologia HFT, gestione del rischio personalizzabile e trasparenza operativa per guidare i tuoi investimenti verso standard professionali.";


// contact
$contact_title = "CONTATTI";
$contact_paragraph_1 = "Il nostro servizio di assistenza clienti è a tua disposizione per qualsiasi necessità tecnica o operativa riguardante la piattaforma $source.";
$contact_subtitle = "Canali di Supporto Ufficiali";
$contact_paragraph_2 = "Forniamo supporto completo dal lunedì al venerdì (orari lavorativi CET). Di seguito le principali aree di intervento gestite dal nostro team:";
$contact_list = [
    "Assistenza per la creazione del conto, verifica KYC e configurazione del profilo di rischio",
    "Supporto tecnico per l'accesso alla piattaforma, problemi di login e funzionalità dashboard",
    "Informazioni sulla gestione dei depositi, tempistiche di accredito e prelievo dei fondi",
    "Dettagli operativi sulla logica degli algoritmi, integrazioni API e parametri di trading",
    "Invio di feedback, segnalazioni di bug e suggerimenti per lo sviluppo della piattaforma",
    "Richieste di supporto generale per la gestione dell'account"
];
$contact_paragraph_3 = "Compila il modulo di contatto sottostante per aprire un ticket di supporto. I nostri operatori rispondono a tutte le richieste entro 24 ore lavorative.";


// sign-up page
$home_title = "INIZIA CON <span style=\"text-transform: uppercase\">$source</span> – CONFIGURAZIONE PRONTA IN POCHI MINUTI.";


// conditions page
$terms_title = "TERMINI E CONDIZIONI";
$terms_1 = "I presenti Termini e Condizioni disciplinano l'accesso e l'utilizzo della piattaforma $source. Registrando un account, l'utente accetta integralmente le presenti clausole. L'uso dei servizi è riservato esclusivamente a persone maggiorenni dotate di piena capacità agire.";

$terms_2 = "L'accesso alla piattaforma può essere temporaneamente sospeso o limitato per operazioni di manutenzione programmata, aggiornamenti software o cause di forza maggiore legati alla volatilità dei mercati.";

$terms_3 = "Tutti i diritti di proprietà intellettuale relativi agli algoritmi, all'interfaccia grafica, al marchio e ai contenuti di $source appartengono in via esclusiva alla società operatrice.";

$terms_4 = "L'utente è tenuto a fornire dati di registrazione veritieri e aggiornati. L'attività di trading comporta rischi di perdita del capitale. $source fornisce software di esecuzione e non svolge attività di consulenza finanziaria personalizzata.";

$terms_5 = "Il trattamento dei dati personali avviene nel rispetto delle normative vigenti in materia di privacy e del Regolamento Europeo GDPR.";

$terms_6 = "Ci riserviamo il diritto di modificare i presenti Termini e Condizioni in qualsiasi momento. Le modifiche saranno effettive dalla data di pubblicazione sulla piattaforma.";


// private page
$privacy_title = "INFORMATIVA SULLA PRIVACY";

$privacy_1 = "La protezione della privacy e dei dati personali degli utenti è un impegno prioritario per $source. La presente informativa descrive le modalità di raccolta, utilizzo e conservazione delle informazioni.";

$privacy_2 = "Raccogliamo esclusivamente i dati necessari all'erogazione dei servizi di trading, tra cui dati identificativi, recapiti di contatto, dettagli di connessione e registrazioni delle transazioni operative.";

$privacy_3 = "I dati vengono elaborati per garantire l'accesso al conto, eseguire le istruzioni di trading, adempiere agli obblighi di legge (AML/KYC) e prevenire attività fraudolente.";

$privacy_4 = "I dati personali non vengono venduti né ceduti a terzi per scopi commerciali. La condivisione avviene esclusivamente con fornitori di servizi tecnici e di pagamento autorizzati.";

$privacy_5 = "Adottiamo misure di sicurezza fisiche, logiche e organizzative avanzate, tra cui la crittografia SSL/TLS e l'isolamento dei database, per proteggere i dati da accessi non autorizzati.";

$privacy_6 = "L'utente ha il diritto di accedere ai propri dati, richiederne la rettifica, la cancellazione o la limitazione del trattamento in qualsiasi momento, contattando il nostro Responsabile della Protezione Dati.";

$privacy_google_choices = 'Puoi gestire le preferenze relative al tracciamento e alla pubblicità personalizzata tramite le <a href="http://www.google.com/settings/ads" target="_blank" rel="noopener">Impostazioni Annunci Google</a> o disattivare Google Analytics tramite l\'<a href="https://tools.google.com/dlpage/gaoptout" target="_blank" rel="noopener">Aggiuntivo del Browser per la Disattivazione</a>.';

$privacy_7 = "Per ulteriori dettagli inerenti alle politiche sulla privacy, puoi contattare direttamente il nostro team di conformità tramite email.";

// ==========================================
// CALCULATOR SECTION
// ==========================================
$calc_badge = "Calcolatore";
$calc_title = "Calcola i tuoi potenziali rendimenti con $source";
$calc_amount_label = "Importo dell'Investimento";
$calc_term_label = "Periodo di Calcolo";
$calc_profit_label = "Profitto Stimato";
$calc_total_label = "Rendimento Totale Proiettato";
$calc_btn = "Registrati Ora";

// ==========================================
// SECURITY SECTION
// ==========================================
$security_badge = "Sicurezza Prima di Tutto";
$security_title = "Sicurezza Istituzionale per il Tuo Capitale e i Tuoi Dati";

$security_card1_title = "Crittografia di Protocollo AES-256";
$security_card1_desc = "Tutti i flussi di dati e le credenziali utente sono protetti da protocolli SSL/TLS e standard di crittografia militare AES-256.";

$security_card2_title = "Conti di Liquidità Segregati";
$security_card2_desc = "I fondi degli utenti sono rigorosamente separati dai conti operativi aziendali e custoditi presso broker ed exchange regolamentati.";

$security_card3_title = "Integrazione API in Sola Lettura";
$security_card3_desc = "La connessione automatizzata avviene tramite chiavi API crittografate senza autorizzazione al prelievo. I fondi rimangono sempre sul tuo conto.";

$security_card4_title = "Protezione Automatica dal Rischio";
$security_card4_desc = "Sistemi di Stop-Loss rigidi e protezione contro lo slippage intervengono all'istante durante le fasi di elevata volatilità per preservare il saldo.";

// ==========================================
// SEO-TEXT SECTION
// ==========================================
$seo_badge = "Panoramica";
$seo_title = "Tecnologia di Trading Automatizzato Progettata per i Mercati Moderni";

$seo_p1 = "Operare sui mercati degli asset digitali richiede velocità, precisione ed elaborazione dei dati in tempo reale. <strong>$source</strong> offre un'infrastruttura di trading automatizzato avanzata, progettata per eliminare gli errori emotivi, ridurre la latenza di esecuzione ed analizzare le opportunità di mercato 24 ore su 24.";

$seo_image_alt = "Motore di trading algoritmico che analizza i dati di mercato e genera un segnale gestito per il rischio";

$seo_feature1_title = "Precisione Algoritmica";
$seo_feature1_desc = "Esegue gli ordini basandosi su probabilità statistiche e indicatori di mercato in tempo reale.";
$seo_feature2_title = "Sicurezza Istituzionale";
$seo_feature2_desc = "Protocolli di dati crittografati e protezione rigorosa delle chiavi API per la massima tutela dell'account.";
$seo_feature3_title = "Analisi in Tempo Reale";
$seo_feature3_desc = "Monitoraggio continuo dei pool di liquidità, dei book ordini e dei movimenti di prezzo.";

$seo_subheading1 = "Come Funziona il Motore Algoritmico";
$seo_p2 = "La piattaforma opera scansionando la profondità dei book ordini sui principali exchange internazionali. Attraverso algoritmi di analisi della liquidità e rilevamento dei trend, <strong>$source</strong> individua le inefficienze di prezzo prima che gli operatori manuali possano reagire.";
$seo_p3 = "Anziché affidarsi a decisioni discrezionali, gli utenti utilizzano parametri di gestione del rischio strutturati che calcolano dinamicamente i target di profitto e limitano l'esposizione al rischio. Questo approccio garantisce una strategia bilanciata sia in contesti volatili sia in fasi di trend lineare.";

$seo_subheading2 = "Caratteristiche Principali del Sistema";
$seo_list1_strong = "Esecuzione Automatica degli Ordini:";
$seo_list1_text = "Elimina il ritardo temporale tra il segnale di ingresso e la compilazione dell'ordine.";
$seo_list2_strong = "Parametri di Rischio Personalizzabili:";
$seo_list2_text = "Imposta livelli di Stop-Loss predefiniti e limiti di esposizione giornaliera in base ai tuoi obiettivi.";
$seo_list3_strong = "Integrazione Trasparente:";
$seo_list3_text = "Connessione diretta verso broker ed exchange verificati tramite interfacce API sicure in sola lettura.";

$seo_p4 = "Iniziare richiede una configurazione tecnica minima. Unendo un accesso ai mercati di livello istituzionale a un'interfaccia semplice, <strong>$source</strong> rappresenta la soluzione ideale per il trading automatizzato.";

// ==========================================
// FAQ SECTION (calculator/security block FAQ)
// ==========================================
$calc_faq_badge = "FAQ";
$calc_faq_title = "Domande Frequenti";

$calc_faq_q1 = "$source è sicuro e affidabile da utilizzare?";
$calc_faq_a1 = "Sì. <strong>$source</strong> opera tramite connessioni API crittografate con soli permessi di lettura ed esecuzione. Il sistema non ha mai accesso diretto al prelievo dei tuoi fondi, che rimangono protetti sul tuo broker o exchange di riferimento.";

$calc_faq_q2 = "Come funzionano gli algoritmi di trading automatizzato?";
$calc_faq_a2 = "La piattaforma analizza continuamente i libri ordini e la liquidità di mercato. Quando i modelli matematici rilevano un segnale ad alta probabilità, il sistema invia micro-ordini in millisecondi, azzerando i ritardi operativi umani.";

$calc_faq_q3 = "Qual è il deposito minimo richiesto per iniziare?";
$calc_faq_a3 = "Il capitale minimo necessario per attivare l'operatività automatizzata è di <strong>$app_price $app_currency</strong>. Questa soglia garantisce all'algoritmo la liquidità sufficiente per frazionare le posizioni e gestire correttamente il rischio.";

$calc_faq_q4 = "È necessaria esperienza pregressa nel trading?";
$calc_faq_a4 = "No, non è richiesta alcuna esperienza finanziaria specifica. <strong>$source</strong> è completamente automatizzato e gestisce l'analisi, l'esecuzione e il tracciamento degli ordini dopo la configurazione iniziale.";

$calc_faq_q5 = "Sono previste commissioni nascoste o costi di abbonamento?";
$calc_faq_a5 = "Non ci sono costi di abbonamento mensile per l'utilizzo dell'interfaccia di base. La registrazione è gratuita e il 100% del capitale depositato viene destinato alle operazioni di trading.";

// ==========================================
// RISK WARNING PAGE
// ==========================================
$page_title_risk_warning = "Avviso sui Rischi | $source";
$page_description_risk_warning = "Informativa ufficiale sui rischi legati al trading automatizzato, alla volatilità dei mercati e all'esecuzione operativa su $source.";
$risk_warning_title = "Avviso sui Rischi";
$risk_warning_intro = "La comprensione dei rischi operativi è il primo passo per un trading consapevole e responsabile.";

$risk_warning_ai_heading = "Come il Nostro Sistema Gestisce il Rischio:";
$risk_warning_ai_1 = "<strong>Esecuzione Algoritmica Disciplinata:</strong> Gli algoritmi avanzati analizzano i segnali di mercato ed eseguono le regole in modo oggettivo ed esente da fattori emotivi.";
$risk_warning_ai_2 = "<strong>Strategie Basate sui Dati:</strong> Le operazioni si fondano su modelli probabilistici verificati e analisi dei dati di mercato in tempo reale.";
$risk_warning_ai_3 = "<strong>Controllo Completo dei Parametri:</strong> Puoi modificare le impostazioni di rischio, i limiti di posizione e le soglie di Stop-Loss direttamente dalla tua dashboard.";

$risk_warning_disclaimer = "<strong>Esclusione di Responsabilità:</strong> Il trading finanziario comporta il rischio concreto di perdita del capitale. I sistemi automatizzati non garantiscono profitti e non eliminano i rischi di mercato. Le prestazioni passate non sono indicative dei risultati futuri. Questo sito non fornisce servizi di consulenza finanziaria.";

$risk_warning_s1_heading = "1. Rischi di Volatilità dei Mercati";
$risk_warning_s1_intro = "Gli asset digitali e gli strumenti finanziari sono soggetti a rapide variazioni di prezzo e ad un'elevata volatilità.";
$risk_warning_s1_1 = "I valori degli asset possono oscillare notevolmente in brevi intervalli di tempo, comportando la possibile perdita parziale o totale del capitale depositato.";
$risk_warning_s1_2 = "Eventi macroeconomici, decisioni normative e variazioni di liquidità influenzano direttamente gli spread di mercato e l'esecuzione degli ordini.";
$risk_warning_s1_3 = "Si raccomanda di investire esclusivamente capitale di rischio che ci si può permettere di perdere.";

$risk_warning_s2_heading = "2. Rischi di Esecuzione, Liquidità e Leva";
$risk_warning_s2_1 = "<strong>Liquidità e Volatilità:</strong> Fasi di mercato estreme possono causare ritardi nell'esecuzione o fenomeni di slippage. Gli ordini di Stop-Loss potrebbero non garantire una protezione totale in caso di gap di prezzo.";
$risk_warning_s2_2 = "<strong>Rischio di Leva:</strong> L'utilizzo della leva finanziaria amplifica sia i guadagni che le perdite. Il trading con leva comporta un elevato livello di rischio e può portare alla rapida perdita del capitale disponibile.";

$risk_warning_s3_heading = "3. Rischi Tecnici e di Infrastruttura";
$risk_warning_s3_1 = "<strong>Fattori Tecnici:</strong> Il trading online comporta rischi connessi a interruzioni della connessione Internet, guasti hardware/software o anomalie di rete.";
$risk_warning_s3_2 = "<strong>Sicurezza Informatica:</strong> L'utente è tenuto a custodire con la massima diligenza le proprie credenziali di accesso per prevenire intrusioni non autorizzate.";

$risk_warning_s4_heading = "4. Conformità Normativa e Fiscale";
$risk_warning_s4_1 = "<strong>Normative Locali:</strong> Il quadro normativo sugli asset digitali varia a seconda della giurisdizione. L'utente è unico responsabile della verifica della conformità con le leggi locali.";
$risk_warning_s4_2 = "<strong>Obblighi Fiscali:</strong> L'utente è interamente responsabile dell'adempimento di eventuali obblighi fiscali derivanti dalle plusvalenze generate dall'attività di trading.";

$risk_warning_contact = "<strong>Contatti:</strong> Per ulteriori domande o chiarimenti relativi alla presente informativa sui rischi, contatta il nostro team di supporto tramite il modulo ufficiale.";
$footer_risk_warning = "Avviso sui Rischi";
?>
