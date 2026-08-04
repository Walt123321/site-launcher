<?php
require __DIR__ . '/../lang.php';

// ==========================================
// ITALIAN (it-IT) OVERRIDE
// Every human-visible string from the root lang.php is translated below.
// Note: a large portion of the root lang.php was already authored in
// Italian (main hero, feedback, nav, footer, leaders, steps, trades,
// advantages, statistics, join, places sections) — those are kept as-is
// / lightly polished below rather than re-translated. The sections that
// were authored in Spanish (about/contact/conditions/private-policy/
// sign-up copy) or English (quiz, calculator, security, SEO, FAQ, risk
// warning) are fully translated into Italian.
// Identity/config variables ($site_name, $site_url, $site_domain, $app_price,
// $app_currency, $rating_value, $rating_count, $review_count, $crypto_img,
// stock/crypto ticker symbols, and real public figures' names) are
// intentionally NOT overridden here — they stay inherited from the root file.
// ==========================================
$site_lang = 'it-IT';
$form_language = 'it'; // matches this page's own language, not the offer's global default

$main_h1 = "Profitto giornaliero da <span>745€</span> a <span>1.860€</span> grazie alla piattaforma di investimento intelligente";
$main_p = "Offerta limitata: registrati ora — <span>$country_name</span>";

// Nomi delle testimonianze (femminile, femminile, maschile, femminile, maschile, maschile)
$feedback_strong_1 = "Giulia Martellini";
$feedback_strong_2 = "Elena Pugliese";
$feedback_strong_3 = "Lorenzo Bianchi";
$feedback_strong_4 = "Valentina Ricci";
$feedback_strong_5 = "Nicola Moretti";
$feedback_strong_6 = "Giulio Ferraro";

$feedback_description_1 = "Non avevo mai usato una piattaforma di investimento prima, ma $source mi ha reso incredibilmente facile iniziare. Non avrei mai pensato di dirlo: il mondo degli investimenti può spesso sembrare complicato. Ma qui è così facile guadagnare cifre che non avrei mai immaginato possibili!";
$feedback_description_2 = "Questo è esattamente ciò che aspettavo! Il vostro supporto e il vostro sistema ad alto rendimento mi hanno convinto completamente – e ne sarò convinto per sempre! Non ci posso ancora credere: in soli 30 giorni ho guadagnato oltre 15.000 €... Grazie mille!";
$feedback_description_3 = "Ho guadagnato oltre 650 euro il mio primo giorno, quindi posso dire con sicurezza: finalmente ho trovato qualcosa che funziona davvero! Ne sono semplicemente grata.";
$feedback_description_4 = "Voglio solo ringraziarvi perché $source mi ha davvero cambiato la vita. Sono riuscito a lasciare il lavoro in poche settimane!";
$feedback_description_5 = "Funziona davvero! Ho iniziato ad usare la piattaforma solo poche settimane fa e ho già guadagnato più di quanto avrei guadagnato normalmente in mesi di duro lavoro. Incredibile!";
$feedback_description_6 = "Sono stato licenziato due settimane fa. Pensavo fosse la fine. Ma ora guadagno circa 3.000 euro a settimana! Potrebbe non sembrare molto, ma per la prima volta da tanto tempo, ho di nuovo la speranza di un futuro stabile. Grazie mille!";

// T,D MAIN
$page_title_main = "$source — Sito Ufficiale | Piattaforma di Trading";
$page_description_main = "Scopri $source, la piattaforma di trading con intelligenza artificiale. Analisi automatica delle criptovalute, registrazione veloce e opportunità di guadagno per utenti in Italia.";

// ==========================================
// CHAT-QUIZ TRANSLATIONS & CONFIGURATION
// ==========================================

$quiz_consultant_name = 'Sophia';
$quiz_consultant_role = 'Assistente di onboarding';

$quiz_text_welcome   = "Ciao! Sono $quiz_consultant_name, la tua assistente personale di onboarding presso $site_name. Ottime notizie! Il tuo accesso è stato ufficialmente pre-approvato. Lasciaci configurare subito il tuo profilo professionale!";
$quiz_text_q1 = "Per garantire la piena conformità normativa e legale, conferma il tuo paese di residenza attuale: $country_name";
$quiz_text_a1_yes    = "Sì, questa è la mia residenza attuale";
$quiz_text_a1_no     = "No";

$quiz_text_q2 = "Perfetto. Seleziona la fascia d'età appropriata per individuare gli strumenti finanziari più adatti:";

$quiz_text_q3        = "È disponibile un conto bancario attivo o una carta di credito per ricevere pagamenti giornalieri di dividendi?";
$quiz_text_a3_yes    = "Sì, è disponibile un conto attivo";
$quiz_text_a3_no     = "Non ancora disponibile";

$quiz_text_q4        = "Indica la tua principale fonte di reddito personale. (Questo parametro aiuta a personalizzare le impostazioni di gestione del rischio del sistema.)";
$quiz_text_a4_1      = "Lavoro dipendente / Libero professionista";
$quiz_text_a4_2      = "Reddito passivo / Risparmi personali";
$quiz_text_a4_3      = "Altre fonti";

$quiz_text_q5 = "Ottimo! L'ultimo passaggio è una breve verifica telefonica da parte del nostro consulente per confermare la tua registrazione. Le chiamate vengono effettuate dalle 11:00 alle 20:00. Sarai disponibile per la chiamata?";
$quiz_text_a5_yes    = "Sì, questo orario va bene per la chiamata";
$quiz_text_a5_no     = "Ti preghiamo di avviare subito la chiamata";

$quiz_text_loader    = "Analisi delle opzioni richieste e inizializzazione dei parametri di configurazione sicura dell'account...";
$quiz_text_final_ttl = "Account autorizzato con successo! 🎉 Il tuo spazio di lavoro digitale sicuro è completamente configurato. Completa i passaggi di verifica finali qui sotto per garantire i pagamenti giornalieri:";

$quiz_placeholder_fname = "Nome";
$quiz_placeholder_lname = "Cognome";
$quiz_placeholder_email = "Indirizzo e-mail";
$quiz_placeholder_phone = "Numero di telefono";
$quiz_btn_submit = "Attiva il trading";
$quiz_text_typing       = "sta scrivendo un messaggio...";
$quiz_text_processing   = "Elaborazione della richiesta in corso...";

// T,D ABOUT
$page_title_about = "Chi Siamo | $source – Piattaforma di investimento sicura e trasparente";
$page_description_about = "Scopri $source: una piattaforma di investimento automatizzata e sicura. Tecnologia avanzata, supporto esperto e trasparenza per principianti e trader esperti.";

// T,D CONDITIONS
$page_title_conditions = "$source – Termini di utilizzo e condizioni della piattaforma";
$page_description_conditions = "Scopri i termini e le condizioni di $source. Uso sicuro della piattaforma, responsabilità di investimento, protezione dei dati e normativa vigente.";

// T,D CONTACT
$page_title_contact = "$source – Assistenza affidabile e supporto rapido";
$page_description_contact = "Hai bisogno di aiuto con $source? Il nostro team di assistenza ti aiuta con qualsiasi richiesta relativa al tuo account, ai pagamenti o alla piattaforma. Risposta rapida e assistenza professionale in Italia.";

// T,D PRIVATE
$page_title_private = "Informativa sulla Privacy | $source";
$page_description_private = "Scopri come $source raccoglie, utilizza e protegge i tuoi dati personali. Informazioni sul trattamento dei dati, sulla sicurezza, sui diritti degli utenti e sulla conformità al GDPR.";

// T,D REGISTER
$page_title_register = "$source – Piattaforma di trading intelligente con IA | Registrazione rapida";
$page_description_register = "Inizia con <?= $source ?> in pochi minuti. Piattaforma intelligente con tecnologia IA per operare in modo efficiente. Registrazione rapida, accesso semplice e strumenti avanzati per gli investitori.";


// форма
$contact_form_fname = "Il tuo nome";
$contact_form_lname = "Il tuo cognome";
$contact_form_email = "E-mail";
$contact_form_submit = "Registrati ora";


// header
$nav_investors = "Investitori";
$nav_steps = "Passi";
$nav_trade = "Commercio";
$nav_advantages = "Vantaggi";
$nav_statistics = "Statistiche";
$nav_feedback = "Feedback";
$button_register = "Registrati ora";


// footer
$button_register = "Registrati ora";
$footer_about = "Chi siamo";
$footer_contact = "Contatto";
$footer_registration = "Registrazione";
$footer_terms = "Termini e Condizioni";
$footer_privacy = "Informativa sulla Privacy";
$footer_rights = "$source – tutti i diritti riservati";

// main
$leaders_badge = "Investitori";
$leaders_title = "Ecco alcuni degli investitori che ci sostengono:";
$leader1_text = "Come investitore, ho sempre creduto che l'indipendenza finanziaria sia la base della libertà personale. Per questo è stata creata questa piattaforma basata sull'intelligenza artificiale, pensata per rendere gli investimenti più semplici e accessibili. La mia visione è offrire a tutti strumenti chiari ed efficaci per prendere decisioni informate e costruire con sicurezza la propria stabilità finanziaria.";
$leader1_name = "— Warren Buffett";
$leader1_position = "Uno degli investitori di maggior successo nella storia";
$leader2_text = "Il mondo della finanza sta cambiando rapidamente e la tecnologia gioca un ruolo chiave in questa trasformazione. Credo che l'unione tra esperienza negli investimenti e intelligenza artificiale crei nuove opportunità. Questa piattaforma è stata sviluppata per rendere gli investimenti più accessibili e trasparenti, aiutando le persone a prendere decisioni informate e a costruire una stabilità finanziaria a lungo termine.";
$leader2_name = "— Larry Fink";
$leader2_position = "CEO di BlackRock — il più grande gestore patrimoniale al mondo";
$leader3_text = "Dopo molti anni nel sistema bancario globale ho visto come la tecnologia possa cambiare il modo in cui le persone gestiscono il proprio denaro. Questa piattaforma utilizza l'intelligenza artificiale per rendere gli investimenti più chiari e accessibili, aiutando gli utenti a prendere decisioni finanziarie consapevoli. Quando innovazione e approccio responsabile si uniscono, nascono vere opportunità di crescita e stabilità finanziaria.";
$leader3_name = "— Jamie Dimon";
$leader3_position = "CEO di JPMorgan Chase — una delle più grandi banche del mondo";


$steps_badge = "Passi";
$steps_title = "Il tuo nuovo inizio inizia con tre semplici passaggi";
$step1_number = "Passo 1";
$step1_title = "Registrazione";
$step1_text = "Inserisci i tuoi dati e ricevi una chiamata gratuita da un consulente della piattaforma per attivare il tuo account";
$step2_number = "Passo 2";
$step2_title = "Investire";
$step2_text = "Ricarica il tuo conto con almeno 250-270 euro";
$step3_number = "Passo 3";
$step3_title = "Inizia a guadagnare";
$step3_text = "Ricevi i tuoi primi pagamenti il giorno della registrazione! La piattaforma protegge il tuo capitale e i tuoi dati personali.";
$steps_button = "Registrati ora";


$trades_badge = "Affari e profitto";
$trades_title = "$source utilizza l'intelligenza artificiale e algoritmi moderni per identificare solo le operazioni redditizie";
$trade_btc_name = "BTC";
$trade_btc_value = "+ 9.071,50 €";
$trade_eth_name = "ETH";
$trade_eth_value = "+ 1.156,57 €";
$trade_ltc_name = "LTC";
$trade_ltc_value = "+ 90,04 €";
$trade_eos_name = "EOS";
$trade_eos_value = "+ 14,01 €";
$trade_xrp_name = "XRP";
$trade_xrp_value = "+ 0,60 €";


$advantages_badge = "Vantaggi";
$advantages_title = "Registrati oggi e ottieni l'accesso immediato a questo rivoluzionario sistema di trading!";
$advantages_card_badge = "Vantaggi";
$adv1_title = "Facile da usare";
$adv1_text = "$source può essere installato su qualsiasi smartphone o computer in pochi secondi";
$adv2_title = "Funzionamento affidabile";
$adv2_text = "Processi completamente automatizzati analizzano in tempo reale tutti i principali exchange e consentono di ottenere i massimi profitti";
$adv3_title = "Sicuro e riservato";
$adv3_text = "La tecnologia blockchain garantisce a tutti i partecipanti un tasso di successo del 96,9% con la massima sicurezza dei dati";


$statistics_badge = "Statistiche";
$statistics_title = "Numeri che parlano da soli";
$statistics_description_top = "La trasparenza è il nostro principio fondante. I ricavi giornalieri della piattaforma e il volume di investimenti in costante crescita confermano la stabilità e l'affidabilità del nostro progetto. La nostra strategia segreta di trading azionario si basa su un portafoglio attentamente selezionato, creato analizzando migliaia di aziende leader";
$stat1_value = "1,45 €";
$stat1_denomination = "Milioni";
$stat1_title = "Investimenti attuali";
$stat2_value = "0,87 €";
$stat2_denomination = "Milioni";
$stat2_title = "Reddito totale";
$stat3_value = "0,29 €";
$stat3_denomination = "Miliardi";
$stat3_title = "Entrate della piattaforma";
$statistics_description_bottom = "Il nostro team di analisti professionisti garantisce risultati accurati con un rischio minimo. $source offre a tutti i partner un'opportunità di guadagno stabile e altamente redditizia";
$feedback = "Feedback";
$recommendations = "Raccomandazioni dei nostri clienti più fedeli";


$join_title_main = "Dai forma al tuo futuro";
$join_title_accent = "– oggi.";

$places_title = "Profitto giornaliero da <span style=\"white-space: nowrap\" data-js-deposit-multiply-round=\"3.1\">745 €</span> a <span style=\"white-space: nowrap\" data-js-deposit-multiply-round=\"7\">1.860 €</span> grazie alla piattaforma di investimento intelligente";
$places_remaining_text = "Posti rimanenti";
$places_button = "Registrati ora";


// about page
$about_title = "CHI SIAMO";
$about_paragraph_1 = "$source è stato sviluppato con l'obiettivo di offrire a ogni investitore — dal principiante al trader esperto — un ambiente sicuro, moderno e trasparente per l'investimento automatizzato nei mercati finanziari e nelle criptovalute. Crediamo che il successo duraturo si fondi su chiarezza, apertura e fiducia. Per questo tutti i processi — dalla registrazione al pagamento — si ispirano a questi principi. Le decisioni si basano sui dati e devono essere comprensibili per gli utenti.";
$about_paragraph_2 = "Il nostro team riunisce competenze provenienti da diversi ambiti: sviluppo di sistemi di IA e algoritmi, analisi finanziaria, cybersicurezza e conformità normativa. Testiamo e miglioriamo continuamente processi e componenti — dalla qualità dei dati alla stabilità del sistema, fino all'analisi dei segnali. L'obiettivo è una piattaforma che funzioni in modo affidabile nella pratica.";
$about_paragraph_3 = "La protezione dei tuoi dati personali e del tuo capitale è per noi una priorità assoluta. $source rispetta standard di sicurezza riconosciuti e utilizza una crittografia moderna. Controlli di sicurezza periodici e verifiche tecniche contribuiscono a proteggere in modo affidabile informazioni e accessi.";
$about_paragraph_4 = "La tecnologia è importante, ma anche l'orientamento e il supporto svolgono un ruolo fondamentale. Per questo offriamo assistenza personalizzata per spiegare le funzionalità, chiarire gli obiettivi e facilitare l'uso della piattaforma. Riceverai aiuto da persone reali, non solo risposte automatizzate.";
$about_paragraph_5 = "Per noi, innovazione significa miglioramento continuo. Analizziamo nuovi schemi di mercato, ottimizziamo i modelli e ampliamo le fonti di dati per migliorare l'efficienza e l'esperienza utente. Gli aggiornamenti vengono testati su dati storici e in prove controllate prima della pubblicazione.";
$about_paragraph_6 = "Molti utenti utilizzano $source come punto di ingresso strutturato nell'investimento automatizzato. Spesso iniziano con un capitale ridotto e un approccio prudente, ampliando l'uso passo dopo passo, accompagnati da processi chiari e supporto.";
$about_paragraph_7 = "In sintesi: $source è molto più di una piattaforma. È un sistema che unisce tecnologia, consapevolezza del rischio e supporto. Il nostro obiettivo è fornirti gli strumenti per agire in modo strutturato e responsabile, con una base trasparente per le tue decisioni.";


// contact
$contact_title = "CONTATTI";
$contact_paragraph_1 = "Il nostro team di assistenza ti aiuta in modo affidabile e competente per qualsiasi richiesta relativa a $source. Che tu stia semplicemente raccogliendo informazioni, sia già registrato o utilizzi attivamente la piattaforma, ti aiutiamo a procedere rapidamente.";
$contact_subtitle = "Come contattarci";
$contact_paragraph_2 = "Ti supportiamo in modo mirato su tutti i temi relativi al tuo account e all'utilizzo di $source. Il nostro team è disponibile dal lunedì al venerdì nei consueti orari lavorativi (CET) e gestisce le richieste con alta priorità. Aree tipiche in cui offriamo assistenza:";
$contact_list = [
    "Creazione e verifica del tuo account, nonché gestione dell'account (incluse le impostazioni di profilo e di rischio)",
    "Assistenza tecnica per la piattaforma, l'app o in caso di errori",
    "Domande su depositi e prelievi, tempi di elaborazione e metodi di pagamento accettati",
    "Informazioni su funzionalità, strategie, logica dell'IA e strumenti disponibili",
    "Commenti, idee e suggerimenti di miglioramento per lo sviluppo",
    "Assistenza per altre questioni, sia generali che individuali"
];
$contact_paragraph_3 = "Utilizza il modulo di contatto sicuro qui sotto e compila tutti i campi rilevanti in modo che possiamo gestire rapidamente la tua richiesta. Di norma riceverai una risposta nei giorni lavorativi entro 24 ore, spesso anche prima. Per questioni tecniche urgenti potrebbe essere disponibile una chat dal vivo (giorni lavorativi 9–18).";


// sign-up page
$home_title = "INIZIA CON <span style=\"text-transform: uppercase\">$source</span> – PRONTO ALL'USO IN POCHI MINUTI.";


// conditions page
$terms_title = "TERMINI DI UTILIZZO";
$terms_1 = "Queste condizioni regolano l'uso della piattaforma e sono vincolanti per tutti gli utenti registrati. Con la registrazione o l'utilizzo, accetti queste condizioni. L'uso è riservato esclusivamente a persone maggiorenni e con piena capacità giuridica.";

$terms_2 = "La piattaforma può essere temporaneamente limitata per manutenzione tecnica o circostanze esterne. Funzionalità, contenuti o offerte possono essere modificati o sviluppati ulteriormente.";

$terms_3 = "Tutti i contenuti, le tecnologie e le analisi forniti sono protetti dalla legge. Non è consentito il loro utilizzo al di fuori della piattaforma senza autorizzazione.";

$terms_4 = "Gli utenti devono fornire dati corretti e aggiornati. Le decisioni di investimento e di trading sono di propria responsabilità. Non si tratta di consulenza finanziaria né di una garanzia di risultati specifici. I mercati finanziari comportano rischi, inclusa la possibile perdita del capitale investito.";

$terms_5 = "I dati personali vengono trattati in conformità con la normativa vigente in materia di protezione dei dati. Si applicano adeguati standard di sicurezza e conformità.";

$terms_6 = "Ci riserviamo il diritto di modificare i termini di utilizzo. L'uso continuato della piattaforma sarà considerato come accettazione delle norme aggiornate.";


// private page
$privacy_title = "INFORMATIVA SULLA PRIVACY";

$privacy_1 = "La protezione dei tuoi dati personali è per noi una priorità assoluta. Trattiamo i tuoi dati esclusivamente in conformità con la normativa vigente sulla protezione dei dati, in particolare il GDPR.";

$privacy_2 = "Raccogliamo solo le informazioni necessarie per fornire i nostri servizi — come dati di contatto, account, transazioni e utilizzo tecnico. In alcuni casi, una verifica dell'identità può essere legalmente obbligatoria.";

$privacy_3 = "Il trattamento dei dati avviene per la gestione degli account, l'esecuzione delle transazioni, l'assistenza clienti, la sicurezza, la prevenzione delle frodi e l'adempimento degli obblighi legali. Riceverai informazioni di marketing solo con il tuo consenso esplicito.";

$privacy_4 = "La comunicazione dei dati avviene esclusivamente verso fornitori accuratamente selezionati (ad es. fornitori di servizi di pagamento o IT) e solo nella misura necessaria. I tuoi dati non vengono venduti.";

$privacy_5 = "Adottiamo misure di sicurezza tecniche e organizzative adeguate. I dati vengono conservati solo per il tempo richiesto dalla legge o necessario per la relativa finalità.";

$privacy_6 = "Hai il diritto in qualsiasi momento di accedere, rettificare, cancellare o limitare il trattamento dei tuoi dati, nonché di revocare i consensi prestati.";

$privacy_google_choices = 'Puoi gestire il modo in cui Google utilizza le informazioni relative alle tue visite tramite le <a href="http://www.google.com/settings/ads" target="_blank" rel="noopener">Impostazioni annunci Google</a>, disattivare la pubblicità basata sugli interessi con il <a href="https://tools.google.com/dlpage/gaoptout" target="_blank" rel="noopener">componente aggiuntivo per la disattivazione di Google Analytics per i browser</a>, oppure consultare l\'<a href="https://www.google.com/intl/it/policies/privacy/" target="_blank" rel="noopener">Informativa sulla privacy di Google</a> per maggiori informazioni.';

$privacy_7 = "Puoi trovare maggiori informazioni e i recapiti di contatto sul nostro sito web.";

// ==========================================
// CALCULATOR SECTION
// ==========================================
$calc_badge = "Calcolatore";
$calc_title = "Calcola il tuo potenziale rendimento con $source";
$calc_amount_label = "Importo dell'investimento";
$calc_term_label = "Durata dell'investimento";
$calc_profit_label = "Profitto stimato";
$calc_total_label = "Rendimento totale previsto";
$calc_btn = "Registrati ora";

// ==========================================
// SECURITY SECTION
// ==========================================
$security_badge = "Sicurezza al primo posto";
$security_title = "Sicurezza di livello istituzionale per il tuo capitale e i tuoi dati";

$security_card1_title = "Crittografia con protocollo AES-256";
$security_card1_desc = "Tutti i flussi di dati e le credenziali degli utenti sono crittografati tramite protocolli SSL/TLS di livello militare e lo standard AES-256, prevenendo intercettazioni non autorizzate.";

$security_card2_title = "Conti di liquidità separati";
$security_card2_desc = "I fondi degli utenti sono rigorosamente separati dagli asset operativi dell'azienda e conservati direttamente in pool di liquidità regolamentati di livello 1 e presso exchange partner.";

$security_card3_title = "Integrazione API in sola lettura";
$security_card3_desc = "L'esecuzione automatizzata si connette esclusivamente tramite chiavi API crittografate senza alcun permesso di prelievo. I tuoi asset non possono mai lasciare il tuo wallet dell'exchange.";

$security_card4_title = "Protezioni di rischio automatizzate";
$security_card4_desc = "I limiti di Stop-Loss integrati e la protezione dallo slippage interrompono immediatamente l'esecuzione in caso di volatilità di mercato anomala, per preservare l'integrità del saldo.";

// ==========================================
// SEO-TEXT SECTION
// ==========================================
$seo_badge = "Panoramica";
$seo_title = "Tecnologia di trading automatizzato progettata per i mercati finanziari moderni";

$seo_p1 = "Muoversi nei mercati degli asset digitali richiede velocità, precisione e un'elaborazione affidabile dei dati. <strong>$source</strong> offre un'infrastruttura di trading automatizzato avanzata, progettata per eliminare i bias emotivi, ridurre la latenza di esecuzione e analizzare sistematicamente le opportunità di mercato 24 ore su 24.";

$seo_image_alt = "Motore di trading algoritmico che analizza i dati dell'exchange e genera un segnale di trading con gestione del rischio";

$seo_feature1_title = "Precisione algoritmica";
$seo_feature1_desc = "Esegue operazioni basate su probabilità statistiche e indicatori di mercato in tempo reale.";
$seo_feature2_title = "Sicurezza istituzionale";
$seo_feature2_desc = "Protocolli di dati crittografati e rigorosa protezione delle chiavi API per la sicurezza dell'account.";
$seo_feature3_title = "Analisi in tempo reale";
$seo_feature3_desc = "Monitoraggio continuo dei pool di liquidità, degli order book e dei movimenti di prezzo.";

$seo_subheading1 = "Come funziona il motore algoritmico";
$seo_p2 = "La piattaforma opera analizzando dati complessi degli order book sui principali exchange globali. Attraverso una scansione continua della liquidità e algoritmi trend-following, <strong>$source</strong> identifica micro-inefficienze nei prezzi degli asset prima che i trader manuali possano reagire.";
$seo_p3 = "Invece di affidarsi a ipotesi, gli utenti sfruttano parametri strutturati di gestione del rischio che calcolano dinamicamente gli obiettivi di profitto e limitano l'esposizione. Questo approccio crea una strategia di trading equilibrata, adatta sia a condizioni di mercato volatili sia a cicli di tendenza standard.";

$seo_subheading2 = "Funzionalità chiave del sistema";
$seo_list1_strong = "Esecuzione automatizzata degli ordini:";
$seo_list1_text = "Elimina il ritardo tra i segnali di ingresso e l'esecuzione dell'operazione.";
$seo_list2_strong = "Parametri di rischio personalizzabili:";
$seo_list2_text = "Imposta livelli di Stop-Loss predefiniti e limiti di esposizione giornalieri su misura per i tuoi obiettivi individuali.";
$seo_list3_strong = "Integrazione perfetta:";
$seo_list3_text = "Connettiti direttamente a broker ed exchange verificati tramite interfacce API sicure in sola lettura.";

$seo_p4 = "Iniziare richiede una configurazione tecnica minima. Combinando un accesso al mercato di livello istituzionale con un'interfaccia intuitiva, <strong>$source</strong> offre un percorso semplificato verso l'automazione strutturata del trading.";

// ==========================================
// FAQ SECTION (calculator/security block FAQ — distinct from any other FAQ on the page)
// ==========================================
$calc_faq_badge = "FAQ";
$calc_faq_title = "Domande frequenti";

$calc_faq_q1 = "$source è sicuro e affidabile da usare?";
$calc_faq_a1 = "Sì. <strong>$source</strong> opera utilizzando protocolli API crittografati con permessi di sola lettura ed esecuzione. Il sistema non ha mai accesso diretto per prelevare i tuoi fondi, e tutti i saldi di trading attivi rimangono protetti nel tuo account broker o exchange collegato.";

$calc_faq_q2 = "Come funzionano gli algoritmi di trading automatizzato?";
$calc_faq_a2 = "La piattaforma analizza costantemente gli order book e la liquidità di mercato sui principali exchange globali. Quando gli indicatori matematici segnalano un movimento di prezzo ad alta probabilità, il sistema attiva automaticamente micro-ordini in millisecondi, eliminando i ritardi umani e le decisioni emotive.";

$calc_faq_q3 = "Qual è il deposito iniziale minimo richiesto?";
$calc_faq_a3 = "Il capitale minimo richiesto per iniziare il trading attivo è di <strong>$app_price $app_currency</strong>. Questa soglia di ingresso garantisce che l'algoritmo disponga di liquidità sufficiente per suddividere correttamente le dimensioni delle posizioni e applicare regole automatizzate di gestione del rischio.";

$calc_faq_q4 = "Ho bisogno di esperienza di trading pregressa per iniziare?";
$calc_faq_a4 = "Non è necessaria alcuna esperienza finanziaria pregressa. <strong>$source</strong> è completamente automatizzato ed è progettato per gestire per tuo conto l'esecuzione di mercato, il calcolo del rischio e il monitoraggio degli ordini dopo una rapida configurazione iniziale.";

$calc_faq_q5 = "Ci sono costi nascosti o costi di abbonamento?";
$calc_faq_a5 = "Non ci sono costi di abbonamento mensile nascosti per l'utilizzo dell'interfaccia di trading principale. La registrazione è gratuita e il 100% dei fondi depositati viene destinato direttamente al tuo capitale di trading.";

// ==========================================
// RISK WARNING PAGE
// ==========================================
$page_title_risk_warning = "Avviso sui Rischi | $source";
$page_description_risk_warning = "Scopri i rischi del trading automatizzato di criptovalute con $source, inclusa la volatilità di mercato, il rischio di esecuzione e le considerazioni normative.";
$risk_warning_title = "Avviso sui Rischi";
$risk_warning_intro = "Comprendere i rischi è il primo passo verso un trading consapevole.";

$risk_warning_ai_heading = "Come il nostro sistema di IA aiuta a gestire il rischio:";
$risk_warning_ai_1 = "<strong>Efficienza algoritmica e trading privo di emotività:</strong> Algoritmi avanzati analizzano i segnali di mercato per eseguire le operazioni in modo obiettivo nei momenti ottimali.";
$risk_warning_ai_2 = "<strong>Strategie basate sui dati:</strong> Le strategie si basano su schemi di mercato verificati e analisi in tempo reale, non su semplici ipotesi.";
$risk_warning_ai_3 = "<strong>Impostazioni flessibili e pieno controllo:</strong> Regola i tuoi parametri di rischio in qualsiasi momento. Monitora tutti i saldi e le operazioni in modo trasparente nella tua dashboard, senza costi nascosti e con prelievi senza restrizioni.";

$risk_warning_disclaimer = "<strong>Disclaimer:</strong> Il trading comporta sempre un rischio. I sistemi automatizzati (inclusa l'IA) non garantiscono profitti, possono fallire a causa di errori software o eventi di mercato imprevisti, e richiedono il monitoraggio da parte dell'utente. I risultati passati non sono indicativi di risultati futuri. Questa piattaforma ha finalità puramente informative e di marketing e non fornisce consulenza finanziaria.";

$risk_warning_s1_heading = "1. Rischi generali e del mercato delle criptovalute";
$risk_warning_s1_intro = "Le criptovalute sono asset speculativi altamente volatili che operano 24 ore su 24, 7 giorni su 7, con una supervisione normativa minima nella maggior parte delle giurisdizioni.";
$risk_warning_s1_1 = "I valori possono fluttuare drasticamente in brevi periodi, portando potenzialmente a una perdita totale del capitale investito.";
$risk_warning_s1_2 = "I valori di mercato possono essere fortemente influenzati da aggiornamenti normativi, sviluppi tecnici, violazioni della sicurezza o eventi macroeconomici più ampi.";
$risk_warning_s1_3 = "Alcuni asset potrebbero perdere completamente il loro valore. Investi solo i fondi che puoi permetterti di perdere.";

$risk_warning_s2_heading = "2. Rischi di esecuzione, liquidità e leva finanziaria";
$risk_warning_s2_1 = "<strong>Volatilità di mercato e liquidità:</strong> Movimenti di prezzo estremi (10–20%+ al giorno) o bassa liquidità (specialmente per le criptovalute minori) possono causare ritardi, interruzioni della piattaforma e un grave slippage di esecuzione. Gli ordini Stop-Loss non possono garantire limiti di perdita in condizioni estreme.";
$risk_warning_s2_2 = "<strong>Rischi di leva finanziaria e margine:</strong> I prodotti a leva amplificano sia i guadagni sia le perdite, il che significa che puoi perdere più del tuo deposito iniziale. Circa il 70–80% dei conti degli investitori retail perde denaro negoziando prodotti a leva.";

$risk_warning_s3_heading = "3. Rischi tecnici, di cybersicurezza e di terze parti";
$risk_warning_s3_1 = "<strong>Fattori tecnici:</strong> Il trading online comporta intrinsecamente rischi legati a disconnessioni internet, errori hardware/software e indisponibilità del servizio.";
$risk_warning_s3_2 = "<strong>Cybersicurezza:</strong> Gli account di criptovalute sono bersagli frequenti di phishing, malware e attacchi hacker. Le transazioni sono irreversibili; la compromissione delle tue credenziali può comportare una perdita permanente.";
$risk_warning_s3_3 = "<strong>Piattaforme di terze parti:</strong> Questo sito web potrebbe mettere in contatto gli utenti con piattaforme di terze parti. Non controlliamo, approviamo o garantiamo la loro sicurezza, operatività o solvibilità. Effettua sempre le tue verifiche prima di depositare fondi su piattaforme esterne.";

$risk_warning_s4_heading = "4. Disposizioni normative, fiscali e finali";
$risk_warning_s4_1 = "<strong>Conformità legale e fiscale:</strong> I quadri normativi variano ampiamente e cambiano rapidamente. Gli utenti sono gli unici responsabili di garantire che la propria attività di trading sia conforme alle leggi locali e di adempiere ai propri obblighi fiscali.";
$risk_warning_s4_2 = "<strong>Nessuna garanzia di profitto:</strong> Non esiste un trading di criptovalute \"sicuro\" o privo di rischi. Eventuali cifre di rendimento o esempi di performance sono puramente ipotetici.";
$risk_warning_s4_3 = "<strong>Idoneità:</strong> Se non comprendi appieno i rischi, fai affidamento su fondi essenziali o operi con denaro preso in prestito, il trading di criptovalute non è adatto a te. In caso di dubbio, consulta un consulente finanziario indipendente e autorizzato.";

$risk_warning_contact = "<strong>Contatti:</strong> Per qualsiasi domanda relativa a questo avviso o per inviare una richiesta, contatta il nostro team ufficiale di assistenza clienti tramite il modulo di contatto sul nostro sito web.";
$footer_risk_warning = "Avviso sui Rischi";
