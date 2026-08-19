<?php
// MANUAL
$site_name = "$source";
$site_url = "https://{{DOMAIN}}";
// NOTE: $site_domain did not previously exist in this file (unlike template_4/5/6's lang.php).
// It's added here — derived at runtime from $site_url — so the /xx/ language-folder hreflang
// tags and footer language-switcher links (which need "$site_url/lander/$site_domain/...") resolve
// correctly. Deriving it via parse_url() means it works immediately without requiring any change
// to core/lang_pipeline.py's deploy pipeline; if that pipeline is later updated to explicitly set
// site_domain for template_3 (mirroring template_4/5/6), it will still safely overwrite this single
// assignment line via its existing regex-based _set_php_var() replace.
$site_domain = parse_url($site_url, PHP_URL_HOST);
$app_price = 250;
$rating_value = 4.6;
$rating_count = 2648;
$review_count = 112; // fixed (not randomized per page load) per JSON-LD requirements
$app_currency = "EUR";
$site_lang = "it-IT";
$country_name = "United Kingdom"; // default -- overwritten per-launch by generate_lang_files() via country_name= (see core/lang_pipeline.py)

// фото
$crypto_img = "images/crypto_main.webp";

$main_h1 = "Profitto giornaliero da <span>745€</span> a <span>1860€</span> grazie alla piattaforma di investimento intelligente";
$main_p = "Offerta limitata: registrati ora — <span>$country_name</span>";

// имена с отзывов
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
$page_title_main = "$source — Official Website | Trading Platform";
$page_description_main = "Scopri $source, la piattaforma di trading con intelligenza artificiale. Analisi automatica delle criptovalute, registrazione veloce e opportunità di guadagno per utenti in Italia.";



// ==========================================
// CHAT-QUIZ TRANSLATIONS & CONFIGURATION
// ==========================================

$quiz_consultant_name = 'Sophia';
$quiz_consultant_role = 'Onboarding Assistant';

$quiz_text_welcome   = "Hello! This is $quiz_consultant_name, your personal onboarding assistant at $site_name. Excellent news! Your access is officially pre-approved. Please allow us to configure your professional profile now!";
$quiz_text_q1 = "To ensure full regulatory and legal compliance, please confirm your country of current residence: $country_name";
$quiz_text_a1_yes    = "Yes, this is my current residence";
$quiz_text_a1_no     = "No";

$quiz_text_q2 = "Perfect. Please select the appropriate age category to find the most suitable financial instruments:";

$quiz_text_q3        = "Is there an active bank account or a credit card available to receive regular daily dividend payments?";
$quiz_text_a3_yes    = "Yes, an active account is available";
$quiz_text_a3_no     = "Not available yet";

$quiz_text_q4        = "Please specify the primary source of personal income. (This parameter helps customize the system risk management settings).";
$quiz_text_a4_1      = "Official Employment / Self-employed";
$quiz_text_a4_2      = "Passive Income / Personal Savings";
$quiz_text_a4_3      = "Other sources";

$quiz_text_q5 = "Great! The final step is a brief phone verification from our manager to confirm your registration. Calls are made from 11:00 AM to 8:00 PM. Will you be able to take the call?";
$quiz_text_a5_yes    = "Yes, this time is convenient for the call";
$quiz_text_a5_no     = "Please initiate the call immediately";

$quiz_text_loader    = "Analyzing the requested options and initializing secure account configuration parameters...";
$quiz_text_final_ttl = "Account Successfully Authorized! 🎉 The secure digital workspace is fully configured. Please complete the final verification steps below to guarantee daily payments:";

$quiz_placeholder_fname = "First Name";
$quiz_placeholder_lname = "Last Name";
$quiz_placeholder_email = "Email Address";
$quiz_placeholder_phone = "Phone Number";
$quiz_btn_submit = "Activate Trading";
$quiz_text_typing       = "is typing a message...";
$quiz_text_processing   = "Processing request...";




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
$footer_privacy = "Politica Privata";
$footer_rights = "$source – tutti i diritti riservati";

// main
$leaders_badge = "Investitori";
$leaders_title = "Ecco alcuni degli investitori che ci sostengono:";
$leader1_text = "Come investitore, ho sempre creduto che l’indipendenza finanziaria sia la base della libertà personale. Per questo è stata creata questa piattaforma basata sull’intelligenza artificiale, pensata per rendere gli investimenti più semplici e accessibili. La mia visione è offrire a tutti strumenti chiari ed efficaci per prendere decisioni informate e costruire con sicurezza la propria stabilità finanziaria.";
$leader1_name = "— Warren Buffett";
$leader1_position = "Uno degli investitori di maggior successo nella storia";
$leader2_text = "Il mondo della finanza sta cambiando rapidamente e la tecnologia gioca un ruolo chiave in questa trasformazione. Credo che l’unione tra esperienza negli investimenti e intelligenza artificiale crei nuove opportunità. Questa piattaforma è stata sviluppata per rendere gli investimenti più accessibili e trasparenti, aiutando le persone a prendere decisioni informate e a costruire una stabilità finanziaria a lungo termine.";
$leader2_name = "— Larry Fink";
$leader2_position = "CEO di BlackRock — il più grande gestore patrimoniale al mondo";
$leader3_text = "Dopo molti anni nel sistema bancario globale ho visto come la tecnologia possa cambiare il modo in cui le persone gestiscono il proprio denaro. Questa piattaforma utilizza l’intelligenza artificiale per rendere gli investimenti più chiari e accessibili, aiutando gli utenti a prendere decisioni finanziarie consapevoli. Quando innovazione e approccio responsabile si uniscono, nascono vere opportunità di crescita e stabilità finanziaria.";
$leader3_name = "— Jamie Dimon";
$leader3_position = "CEO di JPMorgan Chase — una delle più grandi banche del mondo";


$steps_badge = "Passi";
$steps_title = "Il tuo nuovo inizio inizia con tre semplici passaggi";
$step1_number = "Passi 1";
$step1_title = "Registro";
$step1_text = "Inserisci i tuoi dati e ricevi una chiamata gratuita da un consulente della piattaforma per attivare il tuo account";
$step2_number = "Passi 2";
$step2_title = "Investire";
$step2_text = "Ricarica il tuo conto con almeno 250-270 euro";
$step3_number = "Passi 3";
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
$recommendations = "Raccomandazioni dei nostri clienti più fedeli — recommendations";


$join_title_main = "Dai forma al tuo futuro";
$join_title_accent = "– oggi.";

$places_title = "Profitto giornaliero da <span style=\"white-space: nowrap\" data-js-deposit-multiply-round=\"3.1\">745 €</span> a <span style=\"white-space: nowrap\" data-js-deposit-multiply-round=\"7\">1860 €</span> grazie alla piattaforma di investimento intelligente";
$places_remaining_text = "Posti rimanenti";
$places_button = "Registrati ora";


// about page
$about_title = "SOBRE NOSOTROS";
$about_paragraph_1 = "$source è stato sviluppato con l'obiettivo di offrire a ogni investitore — dal principiante al trader esperto — un ambiente sicuro, moderno e trasparente per l'investimento automatizzato nei mercati finanziari e nelle criptovalute. Crediamo che il successo duraturo si fondi su chiarezza, apertura e fiducia. Per questo tutti i processi — dalla registrazione al pagamento — si ispirano a questi principi. Le decisioni si basano sui dati e devono essere comprensibili per gli utenti.";
$about_paragraph_2 = "Il nostro team riunisce competenze provenienti da diversi ambiti: sviluppo di sistemi di IA e algoritmi, analisi finanziaria, cybersicurezza e conformità normativa. Testiamo e miglioriamo continuamente processi e componenti — dalla qualità dei dati alla stabilità del sistema, fino all'analisi dei segnali. L'obiettivo è una piattaforma che funzioni in modo affidabile nella pratica.";
$about_paragraph_3 = "La protezione dei tuoi dati personali e del tuo capitale è per noi una priorità assoluta. $source rispetta standard di sicurezza riconosciuti e utilizza una crittografia moderna. Controlli di sicurezza periodici e verifiche tecniche contribuiscono a proteggere in modo affidabile informazioni e accessi.";
$about_paragraph_4 = "La tecnologia è importante, ma anche l'orientamento e il supporto svolgono un ruolo fondamentale. Per questo offriamo assistenza personalizzata per spiegare le funzionalità, chiarire gli obiettivi e facilitare l'uso della piattaforma. Riceverai aiuto da persone reali, non solo risposte automatizzate.";
$about_paragraph_5 = "Per noi, innovazione significa miglioramento continuo. Analizziamo nuovi schemi di mercato, ottimizziamo i modelli e ampliamo le fonti di dati per migliorare l'efficienza e l'esperienza utente. Gli aggiornamenti vengono testati su dati storici e in prove controllate prima della pubblicazione.";
$about_paragraph_6 = "Molti utenti utilizzano $source come punto di ingresso strutturato nell'investimento automatizzato. Spesso iniziano con un capitale ridotto e un approccio prudente, ampliando l'uso passo dopo passo, accompagnati da processi chiari e supporto.";
$about_paragraph_7 = "In sintesi: $source è molto più di una piattaforma. È un sistema che unisce tecnologia, consapevolezza del rischio e supporto. Il nostro obiettivo è fornirti gli strumenti per agire in modo strutturato e responsabile, con una base trasparente per le tue decisioni.";


// contact
$contact_title = "CONTACTO";
$contact_paragraph_1 = "Il nostro team di assistenza ti aiuta in modo affidabile e competente per qualsiasi richiesta relativa a $source. Che tu stia semplicemente raccogliendo informazioni, sia già registrato o utilizzi attivamente la piattaforma, ti aiutiamo a procedere rapidamente.";
$contact_subtitle = "Cómo contactarnos";
$contact_paragraph_2 = "Ti supportiamo in modo mirato su tutti i temi relativi al tuo account e all'utilizzo di $source. Il nostro team è disponibile dal lunedì al venerdì nei consueti orari lavorativi (CET) e gestisce le richieste con alta priorità. Aree tipiche in cui offriamo assistenza:";
$contact_list = [
    "Creación y verificación de su cuenta, así como gestión de cuenta (incluye configuración de perfil y de riesgo)",
    "Ayuda técnica para la plataforma, la app o en caso de errores",
    "Preguntas sobre ingresos y retiradas, tiempos de procesamiento y métodos de pago aceptados",
    "Información sobre funciones, estrategias, lógica de IA e instrumentos disponibles",
    "Comentarios, ideas y sugerencias de mejora para el desarrollo",
    "Soporte para otras cuestiones, desde generales hasta individuales"
];
$contact_paragraph_3 = "Utilizza il modulo di contatto sicuro qui sotto e compila tutti i campi rilevanti in modo che possiamo gestire rapidamente la tua richiesta. Di norma riceverai una risposta nei giorni lavorativi entro 24 ore, spesso anche prima. Per questioni tecniche urgenti potrebbe essere disponibile una chat dal vivo (giorni lavorativi 9–18).";


// sign-up page
$home_title = "EMPIECE CON <span style=\"text-transform: uppercase\">$source</span> – LISTO PARA USAR EN SOLO UNOS MINUTOS.";


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
$calc_badge = "Calculator";
$calc_title = "Calculate your potential returns with $source";
$calc_amount_label = "Investment Amount";
$calc_term_label = "Investment Term";
$calc_profit_label = "Estimated Profit";
$calc_total_label = "Total Projected Return";
$calc_btn = "Register now";

// ==========================================
// SECURITY SECTION
// ==========================================
$security_badge = "Security First";
$security_title = "Institutional-Grade Security for Your Capital & Data";

$security_card1_title = "AES-256 Protocol Encryption";
$security_card1_desc = "All data flows and user credentials are encrypted using military-grade SSL/TLS protocols and AES-256 standards, preventing unauthorized intercept.";

$security_card2_title = "Segregated Liquidity Accounts";
$security_card2_desc = "User funds are strictly separated from operational company assets and stored directly in regulated tier-1 liquidity pools and partner exchanges.";

$security_card3_title = "Read-Only API Integration";
$security_card3_desc = "Automated execution connects strictly via encrypted API keys with zero withdrawal permissions. Your assets can never leave your exchange wallet.";

$security_card4_title = "Automated Risk Safeguards";
$security_card4_desc = "Built-in hard Stop-Loss limits and slippage protection instantly halt execution during anomalous market volatility to preserve balance integrity.";

// ==========================================
// SEO-TEXT SECTION
// ==========================================
$seo_badge = "Overview";
$seo_title = "Automated Trading Technology Designed for Modern Financial Markets";

$seo_p1 = "Navigating digital asset markets requires speed, precision, and reliable data processing. <strong>$source</strong> provides an advanced automated trading infrastructure engineered to eliminate emotional bias, decrease execution latency, and systematically analyze market opportunities around the clock.";

$seo_image_alt = "Algorithmic trading engine analyzing exchange data and generating a risk-managed trading signal";

$seo_feature1_title = "Algorithmic Precision";
$seo_feature1_desc = "Executes trades based on statistical probabilities and real-time market indicators.";
$seo_feature2_title = "Institutional Security";
$seo_feature2_desc = "Encrypted data protocols and strict API key protection for account safety.";
$seo_feature3_title = "Real-Time Analytics";
$seo_feature3_desc = "Continuous monitoring of liquidity pools, order books, and price movements.";

$seo_subheading1 = "How the Algorithmic Engine Works";
$seo_p2 = "The platform operates by parsing complex order book data across major global exchanges. Through continuous liquidity scanning and trend-following algorithms, <strong>$source</strong> identifies micro-inefficiencies in asset pricing before manual traders can react.";
$seo_p3 = "Instead of relying on guesswork, users leverage structured risk-management parameters that dynamically calculate profit targets and limit exposure. This approach creates a balanced trading strategy suitable for both volatile market conditions and standard trend cycles.";

$seo_subheading2 = "Key System Features";
$seo_list1_strong = "Automated Order Execution:";
$seo_list1_text = "Eliminates delay between entry signals and trade fulfillment.";
$seo_list2_strong = "Customizable Risk Parameters:";
$seo_list2_text = "Set pre-defined stop-loss levels and daily exposure caps tailored to individual goals.";
$seo_list3_strong = "Seamless Integration:";
$seo_list3_text = "Connect directly to verified brokers and exchanges via secure, read-only API interfaces.";

$seo_p4 = "Getting started requires minimal technical setup. By combining institutional-grade market access with an intuitive interface, <strong>$source</strong> offers a streamlined path toward structured trading automation.";

// ==========================================
// FAQ SECTION (calculator/security block FAQ — distinct from any other FAQ on the page)
// ==========================================
$calc_faq_badge = "FAQ";
$calc_faq_title = "Frequently Asked Questions";

$calc_faq_q1 = "Is $source safe and reliable to use?";
$calc_faq_a1 = "Yes. <strong>$source</strong> operates using encrypted API protocols with read-and-execute permissions only. The system never has direct access to withdraw your funds, and all active trading balances remain secured in your connected broker or exchange account.";

$calc_faq_q2 = "How do the automated trading algorithms work?";
$calc_faq_a2 = "The platform continually scans order books and market liquidity across major global exchanges. When mathematical indicators signal a high-probability price movement, the system automatically triggers micro-orders within milliseconds, bypassing human delay and emotional decision-making.";

$calc_faq_q3 = "What is the minimum initial deposit required?";
$calc_faq_a3 = "The minimum capital required to start active trading is <strong>$app_price $app_currency</strong>. This entry threshold ensures the algorithm has sufficient liquidity to properly divide position sizes and apply automated risk-management rules.";

$calc_faq_q4 = "Do I need prior trading experience to get started?";
$calc_faq_a4 = "No prior financial experience is necessary. <strong>$source</strong> is fully automated and designed to handle market execution, risk calculation, and order tracking on your behalf after a quick initial configuration.";

$calc_faq_q5 = "Are there any hidden fees or subscription costs?";
$calc_faq_a5 = "There are no hidden monthly subscription fees for using the core trading interface. Registration is free, and 100% of your deposited funds are allocated directly toward your trading capital.";

// ==========================================
// RISK WARNING PAGE
// ==========================================
$page_title_risk_warning = "Risk Warning | $source";
$page_description_risk_warning = "Understand the risks of automated crypto trading with $source, including market volatility, execution risk, and regulatory considerations.";
$risk_warning_title = "Risk Warning";
$risk_warning_intro = "Understanding risks is the first step toward confident trading.";

$risk_warning_ai_heading = "How Our AI System Helps Manage Risk:";
$risk_warning_ai_1 = "<strong>Algorithmic Efficiency & Emotionless Trading:</strong> Advanced algorithms analyze market signals to execute trades objectively at optimal moments.";
$risk_warning_ai_2 = "<strong>Data-Driven Strategies:</strong> Strategies are based on verified market patterns and real-time analysis rather than guesswork.";
$risk_warning_ai_3 = "<strong>Flexible Settings & Full Control:</strong> Adjust your risk parameters anytime. Track all balances and trades transparently on your dashboard with no hidden fees and restriction-free withdrawals.";

$risk_warning_disclaimer = "<strong>Disclaimer:</strong> Trading always carries risk. Automated systems (including AI) do not guarantee profit, can fail due to software errors or unexpected market events, and require user monitoring. Past performance is not indicative of future results. This platform serves purely informational and marketing purposes and does not provide financial advice.";

$risk_warning_s1_heading = "1. General & Cryptocurrency Market Risks";
$risk_warning_s1_intro = "Cryptocurrencies are highly volatile, speculative assets that operate 24/7 with minimal regulatory oversight in most jurisdictions.";
$risk_warning_s1_1 = "Values can fluctuate dramatically within short periods, potentially leading to a total loss of invested capital.";
$risk_warning_s1_2 = "Market values can be heavily impacted by regulatory updates, technical developments, security breaches, or broader macroeconomic events.";
$risk_warning_s1_3 = "Some assets may lose all value completely. Invest only funds you can afford to lose.";

$risk_warning_s2_heading = "2. Execution, Liquidity & Leverage Risks";
$risk_warning_s2_1 = "<strong>Market Volatility & Liquidity:</strong> Extreme price movements (10–20%+ daily) or low liquidity (especially in smaller coins) can lead to delays, platform outages, and severe execution slippage. Stop-loss orders cannot guarantee loss limits under extreme conditions.";
$risk_warning_s2_2 = "<strong>Leverage & Margin Risks:</strong> Leveraged products amplify both gains and losses, meaning you can lose more than your initial deposit. Approximately 70–80% of retail investor accounts lose money when trading leveraged products.";

$risk_warning_s3_heading = "3. Technical, Cybersecurity & Third-Party Risks";
$risk_warning_s3_1 = "<strong>Technical Factors:</strong> Online trading inherently involves risks of internet disconnects, hardware/software errors, and service unavailability.";
$risk_warning_s3_2 = "<strong>Cybersecurity:</strong> Cryptocurrency accounts are frequent targets for phishing, malware, and hacks. Transactions are irreversible; compromising your credentials can result in permanent loss.";
$risk_warning_s3_3 = "<strong>Third-Party Platforms:</strong> This website may connect users to third-party platforms. We do not control, endorse, or guarantee their security, operations, or solvency. Always conduct your own due diligence before depositing funds on external platforms.";

$risk_warning_s4_heading = "4. Regulatory, Tax & Final Provisions";
$risk_warning_s4_1 = "<strong>Legal Compliance & Taxes:</strong> Regulatory frameworks vary widely and change rapidly. Users are solely responsible for ensuring their trading activity complies with local laws and for fulfilling their own tax obligations.";
$risk_warning_s4_2 = "<strong>No Profit Guarantees:</strong> There is no \"safe\" or risk-free crypto trading. Any yield figures or performance examples are purely hypothetical.";
$risk_warning_s4_3 = "<strong>Suitability:</strong> If you do not fully understand the risks, rely on essential funds, or trade with borrowed money, crypto trading is not suitable for you. Consult an independent licensed financial advisor if uncertain.";

$risk_warning_contact = "<strong>Contact:</strong> For any questions regarding this statement or to submit an inquiry, please reach out to our official customer support team via the contact form on our website.";
$footer_risk_warning = "Risk Warning";
?>
