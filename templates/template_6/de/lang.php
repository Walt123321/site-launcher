<?php
require __DIR__ . '/../lang.php';
$site_lang = 'de-DE';
$form_language = 'de'; // matches this page's own language, not the offer's global default

// ============================================================
// GERMAN (DE) TRANSLATION OVERRIDES
// Identity/config vars ($site_name, $site_url, $site_domain, $app_price,
// $app_currency, $rating_value, $rating_count, $review_count, $country_name,
// $support_email, $institutional_email) are intentionally NOT overridden —
// they stay exactly as inherited from the root lang.php.
// ============================================================


// META TITLE / DESCRIPTION (per page)
$home_meta_title = "$site_name — Offizielle Website | Handelsplattform";
$home_meta_description = "Greifen Sie mit $site_name auf globale Märkte zu ⭐ Institutionelle KI-Analysen ⚡, Ausführung mit minimaler Latenz ⚡ und aufgeräumte Oberflächen für modernes finanzielles Wachstum.";


$quiz_consultant_name = 'Lisa';
$quiz_consultant_role = 'Onboarding-Assistentin';

$quiz_text_welcome   = "Hallo! Hier ist $quiz_consultant_name, Ihre persönliche Onboarding-Assistentin bei $site_name. Tolle Neuigkeiten! Ihr Zugang wurde offiziell vorab genehmigt. Lassen Sie uns jetzt Ihr professionelles Profil einrichten!";
$quiz_text_q1 = "Um die vollständige regulatorische und rechtliche Konformität sicherzustellen, bestätigen Sie bitte Ihr aktuelles Wohnsitzland: $country_name";
$quiz_text_a1_yes    = "Ja, das ist mein aktueller Wohnsitz";
$quiz_text_a1_no     = "Nein";

$quiz_text_q2 = "Perfekt. Bitte wählen Sie die passende Altersgruppe aus, damit wir die geeignetsten Finanzinstrumente für Sie finden können:";

$quiz_text_q3        = "Verfügen Sie über ein aktives Bankkonto oder eine Kreditkarte, um regelmäßige tägliche Dividendenzahlungen zu erhalten?";
$quiz_text_a3_yes    = "Ja, ein aktives Konto ist vorhanden";
$quiz_text_a3_no     = "Noch nicht vorhanden";

$quiz_text_q4        = "Bitte geben Sie Ihre primäre Einkommensquelle an. (Dieser Parameter hilft uns, die Risikomanagement-Einstellungen des Systems anzupassen.)";
$quiz_text_a4_1      = "Festanstellung / Selbstständig";
$quiz_text_a4_2      = "Passives Einkommen / Ersparnisse";
$quiz_text_a4_3      = "Andere Einkommensquellen";

$quiz_text_q5 = "Ausgezeichnet! Der letzte Schritt ist eine kurze telefonische Verifizierung durch unseren Manager, um Ihre Registrierung zu bestätigen. Anrufe erfolgen zwischen 11:00 und 20:00 Uhr. Können Sie den Anruf entgegennehmen?";
$quiz_text_a5_yes    = "Ja, diese Zeit passt mir für den Anruf";
$quiz_text_a5_no     = "Bitte rufen Sie mich sofort an";

$quiz_text_loader    = "Die gewählten Optionen werden analysiert, und die sicheren Kontoparameter werden eingerichtet …";
$quiz_text_final_ttl = "Konto erfolgreich freigeschaltet! 🎉 Ihr sicherer digitaler Arbeitsbereich ist vollständig eingerichtet. Bitte schließen Sie unten die letzten Verifizierungsschritte ab, um die täglichen Auszahlungen zu sichern:";

$quiz_placeholder_fname = "Vorname";
$quiz_placeholder_lname = "Nachname";
$quiz_placeholder_email = "E-Mail-Adresse";
$quiz_placeholder_phone = "Telefonnummer";
$quiz_btn_submit = "Handel aktivieren";
$quiz_text_typing       = "schreibt gerade …";
$quiz_text_processing   = "Anfrage wird bearbeitet …";


$header_nav_aria_label = "Hauptnavigation";

$nav_platform = "Plattform";
$nav_features = "Funktionen";
$nav_markets = "Märkte";
$nav_process = "Ablauf";
$nav_security = "Sicherheit";
$nav_reviews = "Bewertungen";
$nav_faq = "FAQ";
$nav_about = "Über uns";
$nav_contact = "Kontakt";

$theme_toggle_aria_label = "Zum dunklen Design wechseln";
$theme_toggle_text = "Dunkel";
$theme_toggle_text_light = "Hell";

$theme_toggle_dark_aria_label = "Zum dunklen Design wechseln";
$theme_toggle_light_aria_label = "Zum hellen Design wechseln";

$header_cta_button = "Jetzt handeln";
$burger_menu_aria_label = "Menü";


// HERO

$hero_heading_before = "$site_name";
$hero_heading_accent = "Plattform";

$hero_description = "Ein intelligenterer, klarerer Weg zum Zugang zu globalen Märkten";

$hero_primary_button = "Jetzt handeln";
$hero_secondary_button = "Funktionen entdecken";

$hero_badge_ssl = "SSL-geschütztes Protokoll";
$hero_badge_guided = "Geführter Einstieg für Einsteiger";


// SIGNUP FORM

$signup_heading = "Konto erstellen";
$signup_subtitle = "Dauert weniger als 3 Minuten. Keine Einrichtungsgebühren.";

$form_first_name_label = "Vorname";
$form_first_name_placeholder = "Max";

$form_last_name_label = "Nachname";
$form_last_name_placeholder = "Mustermann";

$form_email_label = "E-Mail-Adresse";
$form_email_placeholder = "max@beispiel.de";

$form_phone_label = "Telefonnummer";
$form_phone_placeholder = "1512 3456789";

$form_submit_button = "Kostenloses Konto erstellen";

$form_legal_before = "Mit dem Absenden Ihrer Daten stimmen Sie unseren ";
$form_terms_text = "Allgemeinen Geschäftsbedingungen";


// STATS BAR

$stats_value_assets = "80+";
$stats_label_assets = "Handelbare Assets";

$stats_value_setup = "Schnell";
$stats_label_setup = "Kontoeinrichtung";

$stats_value_support = "24/7";
$stats_label_support = "Support";

$stats_value_security = "Sicher";
$stats_label_security = "Datenverarbeitung";

// PLATFORM SECTION

$platform_section_label = "Intelligenter Arbeitsbereich";

$platform_title_before = "$site_name Profi-Charts.";
$platform_title_accent = "Entwickelt für einfache Entscheidungen.";

$platform_subtitle = "Verfolgen Sie Echtzeitkurse und führen Sie Aktionen über eine übersichtliche Oberfläche aus, die kognitive Belastung und emotionales Trading reduziert.";

$platform_check_1 = "KI-gestützte Echtzeit-Charts";
$platform_check_2 = "Marktausführung mit nur einem Klick";

$platform_cta_button = "Plattformfunktionen ansehen";


// MOCKUP / DASHBOARD

$mockup_overlay_headline = "⚡ Sofortige Ausführung verfügbar";
$mockup_overlay_text = "Um diesen Auftrag sofort weiterzuleiten und den aktuellen Zielkurs zu sichern, aktivieren Sie Ihren gesicherten $site_name-Terminalstatus.";
$mockup_overlay_button = "Sicheres Konto erstellen";

$mockup_dashboard_title = "BTC/USD-Dashboard";

$mockup_today = "Heute";
$mockup_sell_button = "Verkaufen";
$mockup_buy_button = "Kaufen";
$mockup_order_pending_text = "Auftrag wird zugewiesen";


// FEATURES SECTION

$features_section_label = "Plattformfunktionen";

$features_title = "Alles, was Sie brauchen, um mit $site_name sicher zu handeln";
$features_subtitle = "Sicherheit, Geschwindigkeit und neuronale Marktintelligenz vereint in einem klaren Layout";

$feature_1_title = "Sicherheit auf Bankniveau";
$feature_1_text = "SSL-Verschlüsselung, sichere Datenverarbeitung und eine vollständig geschützte Kontoarchitektur.";

$feature_2_title = "KI-Marktanalyse";
$feature_2_text = "Echtzeit-Machine-Learning-Berechnungen, die auf das Erfassen scharfer Marktbewegungen ausgelegt sind.";

$feature_3_title = "Latenzarme Abläufe";
$feature_3_text = "Agile Infrastruktur für eine schnelle Orderabwicklung auch bei hohem Handelsvolumen.";


// MARKETS

$markets_section_label = "Echtzeit-Assets";

$markets_title = "Einheitliches $site_name-Dashboard für globale Kennzahlen";

$markets_subtitle = "Verfolgen Sie Echtzeit-Kursveränderungen, behalten Sie die Marktdynamik im Blick und nutzen Sie automatisierte KI-Analysen, um Muster schnell zu erkennen.";

$markets_ai_box_title = "💡 Operative Effizienz:";

$markets_ai_box_text = "Klassisches Trading erfordert die manuelle Beobachtung Hunderter Indikatoren. Die Algorithmen von $site_name verarbeiten jede Millisekunde Tausende von Kursbewegungen und liefern klare mathematische Modelle, mit denen Sie Bewegungen frühzeitig erkennen.";

$markets_cta_button = "Zu den Märkten";

$markets_table_asset = "Asset";
$markets_table_price = "Kurs";
$markets_table_change = "24-Std.-Veränderung";



// ONBOARDING

$onboarding_section_label = "Onboarding-Prozess";

$onboarding_title = "$site_name macht den Einstieg stressfrei";

$onboarding_subtitle = "Keine Vorerfahrung mit Krypto? Unser automatisierter Leitfaden begleitet Sie durch jeden Schritt.";

$onboarding_step_1_title = "Sichere Anmeldung";
$onboarding_step_1_text = "Geben Sie Ihre grundlegenden Kontaktdaten über unser stark verschlüsseltes Formularsystem ein.";

$onboarding_step_2_title = "KI-geführte Einrichtung";
$onboarding_step_2_text = "Die Plattform zeigt Ihnen Oberflächenoptionen, die auf Ihre individuellen Präferenzen abgestimmt sind.";

$onboarding_step_3_title = "Sichere Einzahlung";
$onboarding_step_3_text = "Aktivieren Sie Ihren Handelsspielraum über standardisierte, äußerst zuverlässige Zahlungswege.";

$onboarding_step_4_title = "Signale nutzen";
$onboarding_step_4_text = "Beginnen Sie, mit Live-Daten neuronaler Netze an den globalen Märkten zu agieren.";



// MOBILE APP

$mobile_app_image_alt = "$site_name mobile Trading-App auf einem Smartphone";

$mobile_app_section_label = "Mobiler Zugang";

$mobile_app_title = "Ihr Portfolio, direkt in Ihrer Tasche";

$mobile_app_subtitle = "Die komplette $site_name-Engine, kompakt verpackt in einer schnellen, nativen mobilen App. Verfolgen Sie Assets, führen Sie Trades aus und folgen Sie KI-Signalen – von überall.";

$mobile_app_check_1 = "Push-Benachrichtigungen bei wichtigen Kursbewegungen";
$mobile_app_check_2 = "Biometrische Anmeldung mit verschlüsseltem lokalem Speicher";
$mobile_app_check_3 = "Vollständige, touch-optimierte Chart-Suite";

$mobile_app_cta_button = "App herunterladen";


// SECURITY / COMPARISON

$security_section_label = "Ausgewogenes Rahmenwerk";

$security_title = "Transparente Betriebsparameter";

$security_subtitle = "Wir glauben an absolute Ehrlichkeit. Hier sehen Sie, was unser System auszeichnet – und wo unsere Grenzen liegen.";

$security_our_title = "Wichtigste Vorteile";

$security_our_item_1 = "Minimalistisches Dashboard, ausgelegt auf institutionelle Ausführungsgeschwindigkeit.";
$security_our_item_2 = "Neuronale Datenanalyse, die rund um die Uhr über alle Assets hinweg läuft.";
$security_our_item_3 = "Keine versteckten Handelsspannen oder unerwarteten Verwaltungsgebühren.";
$security_our_item_4 = "Direkte, kryptografisch per SSL abgesicherte Kontoarchitektur zum Schutz Ihres persönlichen Bereichs.";
$security_our_item_5 = "Geführtes Onboarding, das Minuten statt Tage bis zur Aktivierung dauert.";

$security_other_badge = "Andere Plattformen";

$security_other_title = "Typische Einschränkungen der Branche";

$security_other_item_1 = "Überladene, werbelastige Dashboards, die Entscheidungen verlangsamen.";
$security_other_item_2 = "Statische Tagesberichte statt fortlaufender Live-Analysen.";
$security_other_item_3 = "Versteckte Spreads, Auszahlungskosten und unklare Gebührenstrukturen.";
$security_other_item_4 = "Geteilte, veraltete Infrastruktur mit uneinheitlichem Datenschutz.";
$security_other_item_5 = "Langsame, papierlastige Kontoverifizierung, die Tage dauern kann.";

$security_disclaimer = "Der Vergleich spiegelt typische Muster in der Retail-Trading-Branche wider und dient nur zur Veranschaulichung; die Angebote einzelner Wettbewerber können abweichen.";


// CAPABILITIES TABLE

$capabilities_title = "Die wichtigsten Plattformfunktionen auf einen Blick";
$capabilities_subtitle = "Ein Überblick über die funktionalen Parameter Ihres Kontozugangs.";

$capability_table_col_1 = "Funktionsparameter";
$capability_table_col_2 = "Details";
$capability_table_col_3 = "Enthalten";

$capability_check_aria = "Enthalten";

$capability_1_title = "KI-Handelsrahmen";
$capability_1_text = "Algorithmische Verarbeitung, die dynamisch strukturelle Makrokennzahlen berechnet.";

$capability_2_title = "Gebündelte Datenströme";
$capability_2_text = "Konsolidierte Echtzeit-Charts für moderne globale Indizes und Token.";

$capability_3_title = "Geräteübergreifende Stabilität";
$capability_3_text = "Vollständig reaktionsfähige Darstellung auf Mobilgeräten, Desktop und Tablets.";

$capability_4_title = "Abdeckung mehrerer Anlageklassen";
$capability_4_text = "Einheitlicher Zugang zu Krypto, Forex und Aktienindizes über ein einziges Konto.";

$capability_5_title = "Automatische Risikowarnungen";
$capability_5_text = "Konfigurierbare Benachrichtigungen melden ungewöhnliche Volatilität, bevor sie Ihre Positionen beeinflusst.";

$capability_6_title = "Verschlüsselter Datentresor";
$capability_6_text = "Persönliche und Kontodaten sind hinter mehrschichtigen kryptografischen Zugangskontrollen isoliert.";

$capability_7_title = "24/7 persönlicher Support";
$capability_7_text = "Live-Support-Mitarbeiter beantworten Ihre Fragen zur Einrichtung sofort.";


// PAYMENTS

$payments_section_label = "Einzahlungen";

$payments_title = "Zahlen Sie mit Methoden ein, denen Sie bereits vertrauen";

$payments_subtitle = "Karten, E-Wallets und Banküberweisungen – alle mit 256-Bit-SSL-Verschlüsselung geschützt.";

$payments_aria_label = "Akzeptierte Einzahlungs- und Finanzierungsmethoden";

$payment_method_bank_transfer = "Banküberweisung";
$payment_method_ssl = "SSL-gesichert";

// PARTNERS

$partners_section_label = "Zuverlässige Infrastruktur";
$partners_title = "Aufgebaut mit Partnern von Branchenformat";
$partners_aria_label = "$site_name Infrastruktur- und Zahlungspartner";


// REVIEWS

$reviews_section_label = "Nutzerfeedback";
$reviews_title = "Was Trader über $site_name sagen";
$reviews_subtitle = "Ehrliches Feedback aus unserer globalen, marktübergreifenden Community.";

$review_1_text = "Als Anfänger hatte ich Respekt vor Krypto. $site_name hat das Dashboard so intuitiv gestaltet, dass ich mich innerhalb von Minuten sicher gefühlt habe. Die KI-Einblicke sind klar verständlich.";
$review_1_role = "Verifizierter Privatanleger";

$review_2_text = "Allein die aufgeräumte Oberfläche spart mir Stunden. Dass die KI das Marktrauschen auf die wesentlichen Trends reduziert, verändert meine tägliche Sicht auf Positionen.";
$review_2_role = "Krypto-Analyst";

$review_3_text = "Die latenzarme Ausführung in Kombination mit intelligenten Alarmfunktionen erlaubt es mir, Ziele spontan anzupassen, ohne mehrere Programme laufen zu lassen.";
$review_3_role = "Privater Portfoliomanager";

$review_4_text = "Der Support hat innerhalb von zwei Minuten reagiert, als ich meine Verifizierung eingerichtet habe. Ein außergewöhnlich professioneller Service.";
$review_4_role = "Algorithmischer Trader";

$review_1_avatar_alt = "Michael Turner, $site_name Nutzer";
$review_2_avatar_alt = "Anna Mitchell, $site_name Nutzerin";
$review_3_avatar_alt = "David Kovacs, $site_name Nutzer";
$review_4_avatar_alt = "Elena Laurent, $site_name Nutzerin";
$hero_growth_visual_alt = "$site_name KI-Trading-Wachstumschart";
$mobile_trading_visual_alt = "$site_name mobile Trading-App-Oberfläche";
$cta_security_visual_alt = "KI-Sicherheitsmechanismen zum Schutz von $site_name-Konten";

// SEO CONTENT

$seo_content_title = "$site_name: Trader stärken durch institutionelle KI-Architektur";

$seo_content_intro = "Der moderne Umgang mit Assets erfordert absolute Klarheit. Wenn Datenoberflächen mit übermäßigen Werbebannern oder schweren Layer überladen sind, sinkt die Leistung der Nutzer. $site_name löst diese systemische Komplexität durch eine elegante, reaktionsschnelle Basisumgebung, die auf langfristige strategische Ausführung ausgelegt ist. Jedes Modul der Plattform, vom Onboarding bis zur Live-Ausführung, folgt demselben Prinzip: Rauschen entfernen, damit die zugrunde liegenden Daten für sich sprechen können – ohne die Tiefe zu opfern, die erfahrene Teilnehmer erwarten.";

$seo_block_1_title_before = "Fortschrittliche";
$seo_block_1_title_accent = "Krypto-Handelswerte";
$seo_block_1_text_1 = "Die Liquidität von Blockchains verändert sich rasant, weshalb eine latenzarme Infrastruktur entscheidend ist. $site_name verbindet eigene Nodes direkt mit den wichtigsten digitalen Handelsplätzen und liefert Nutzern Echtzeit-Kursrückmeldungen. Unsere übersichtlichen visuellen Kennzahlen verwandeln chaotische Cross-Chain-Strukturen in organisierte, gut lesbare Datenkanäle, sodass Marktteilnehmer Bewegungen bei wichtigen Paaren mühelos einschätzen können.";
$seo_block_1_text_2 = "Über reine Kursdaten hinaus ordnet die Plattform auch Volumenveränderungen und Liquiditätstiefe ein, sodass plötzliche Ausschläge leichter zu interpretieren sind statt als bloßes Störrauschen wahrgenommen zu werden. Diese Konsistenz zählt besonders in volatilen Phasen, wenn fragmentierte Tools andernorts genau dann Entscheidungen verlangsamen, wenn Klarheit am dringendsten gebraucht wird.";

$seo_block_2_title_before = "Tiefgehende";
$seo_block_2_title_accent = "Neuronale Marktanalysen";
$seo_block_2_text_1 = "Automatisierte Algorithmen werten eingehende Marktdaten aus, um strukturelle Veränderungen über internationale Forex- und Rohstoffindizes hinweg zu berechnen. $site_name verdichtet komplexe Berechnungen zu klaren Datentrends. Diese automatisierten Erkenntnisse fungieren als smarte Helfer und ermöglichen es Nutzern, präzise Analysestrategien zu entwickeln – ohne kognitive Überlastung oder Ermüdung.";
$seo_block_2_text_2 = "Da die Modelle kontinuierlich statt nach einem festen Zeitplan laufen, werden Dynamikveränderungen sichtbar, sobald sie auftreten, statt erst in einer verzögerten Zusammenfassung zu erscheinen. Das Ergebnis ist eine Analyseebene, die eigenständiges Urteilsvermögen unterstützt, statt es zu ersetzen – die endgültige Entscheidung bleibt stets bei Ihnen.";

$seo_block_3_title_before = "Reibungsloser";
$seo_block_3_title_accent = "Kontoeinrichtungsprozess";
$seo_block_3_text_1 = "Compliance muss nicht kompliziert sein. Unser strukturierter Registrierungsprozess schützt persönliche Nutzerdaten durch sichere Verifizierungsverfahren. Die Schritt-für-Schritt-Anleitung passt sich dynamisch an mobile und Desktop-Ansichten an – für eine nahtlose Einrichtung, die vom Start bis zum Terminalzugang unter drei Minuten dauert.";
$seo_block_3_text_2 = "Jedes Feld im Prozess erklärt, wozu es benötigt wird, sodass Neulinge nie im Unklaren bleiben, wofür ein Verifizierungsschritt dient. Nach dem Absenden laufen verschlüsselte Identitätsprüfungen im Hintergrund, während der Rest des Dashboards weiterhin uneingeschränkt nutzbar bleibt.";

$seo_block_4_title_before = "Institutionelle";
$seo_block_4_title_accent = "Risikokontrollen";
$seo_block_4_text_1 = "Positionsgrößen, Engagementgrenzen und automatisierte Volatilitätswarnungen stammen aus Tools, die traditionell professionellen Handelsdesks vorbehalten waren. $site_name verpackt diese Kontrollen in eine einfache, per Schalter bedienbare Oberfläche, damit auch neue Teilnehmer von derselben Disziplin profitieren, auf die sich erfahrene Trader täglich verlassen.";
$seo_block_4_text_2 = "Warnungen lassen sich pro Asset konfigurieren, sodass Ihre Aufmerksamkeit nur auf Märkte gelenkt wird, die es wirklich rechtfertigen. Dieser gezielte Ansatz beugt der Alarmmüdigkeit vor, die auf weniger selektiven Plattformen oft dazu führt, dass Benachrichtigungen komplett ignoriert werden.";


// FAQ

$faq_section_label = "Support-Center";
$faq_title = "Häufig gestellte Fragen";
$faq_subtitle = "Finden Sie sofort Antworten zu Registrierung und Plattformzugang.";

$faq_1_question = "Wie kann ich mit $site_name starten?";
$faq_1_answer = "Füllen Sie einfach das oben stehende Registrierungsformular aus, folgen Sie unserem schrittweisen, sicheren Onboarding-Prozess und aktivieren Sie Ihr Konto über unser strukturiertes Zahlungssystem.";

$faq_2_question = "Benötige ich umfangreiche Krypto-Erfahrung?";
$faq_2_answer = "Nein. $site_name bietet einen eigenen Einsteiger-Dashboard-Modus, automatisierte Analyseerklärungen und vereinfachte Arbeitsbereiche, damit neue Trader sicher starten können.";

$faq_3_question = "Was ist die Mindestanforderung für den Handel?";
$faq_3_answer = "Der standardmäßige Aktivierungsbetrag liegt bei $app_price $app_currency. Dies dient als operatives Handelskapital und bleibt vollständig unter Ihrer eigenen Kontrolle.";

$faq_4_question = "Gibt es versteckte Plattformgebühren?";
$faq_4_answer = "Nein. $site_name setzt auf vollständige Gebührentransparenz. Wir erheben keine unerwarteten Zugangsaufschläge oder versteckten Auszahlungsberechnungen innerhalb Ihres Arbeitsbereichs.";

$faq_5_question = "Wie funktioniert die KI-Komponente?";
$faq_5_answer = "Unsere neuronalen Systeme werten tiefgehende statistische Volatilitätsmerkmale über mehrere Marktebenen hinweg aus und wandeln Rohdaten in vereinfachte Trendlinien zur leichteren Bewertung um.";

$faq_6_question = "Sind meine persönlichen Daten vollständig geschützt?";
$faq_6_answer = "Ja. Jede Kontoverbindung wird durch standardmäßigen SSL-Schutz sowie äußerst robuste kryptografische Protokolle gesichert, um private Daten vollständig zu isolieren.";


// FINAL CTA

$final_cta_title = "Bereit, die Klarheit von $site_name zu erleben?";
$final_cta_subtitle = "Werden Sie Teil eines modernen Systems, das auf schnelle Abläufe, Datenschutz und transparenten Zugang ausgelegt ist.";


// FOOTER

$footer_brand_description = "Moderne Analyseumgebung für eine klare Nachverfolgung Ihrer Daten über globale Assets hinweg.";

$footer_platform_title = "Plattform";
$footer_platform_interface = "Oberfläche";
$footer_platform_markets = "Marktübersicht";

$footer_pages_title = "Seiten";

$footer_page_about = "Über uns";
$footer_page_contact = "Kontakt";
$footer_page_signin = "Anmelden";

$footer_legal_title = "Rechtliches";

$footer_terms = "Nutzungsbedingungen";
$footer_privacy = "Datenschutzerklärung";

$footer_disclaimer_title = "⚠️ Risikohinweis:";

$footer_disclaimer_text = "Der Handel mit digitalen Krypto-Assets und globalen Instrumenten birgt ein erhebliches Marktvolatilitätsrisiko. Behalten Sie stets die volle Kontrolle über Ihre Anlagestrategie. Die automatisierten Kennzahlen von $site_name dienen ausschließlich als analytische Unterstützung.";

$footer_copyright = "Alle Rechte vorbehalten.";



// ============================================================
// ADDITIONAL PAGES — About, Contact, FAQ, Sign, Conditions, Privacy
// ============================================================

// --- About Us ---
$about_meta_title = "Über uns | $site_name";
$about_meta_description = "Erfahren Sie mehr über $site_name — unsere Mission, unsere KI-gestützte Handelstechnologie und wie wir Tradern einen verantwortungsvollen Zugang zu globalen Märkten ermöglichen.";
$about_breadcrumb_name = "Über uns";
$about_h1 = "Über $site_name";
$about_p1 = "$site_name wurde entwickelt, um strukturierte, KI-gestützte Handelstools für alle zugänglich zu machen — vom Einsteiger bis zum erfahrenen Profi.";
$about_p2 = "Wir glauben, dass der Zugang zu globalen Märkten transparent, gut erklärt und frei von unnötiger technischer Komplexität sein sollte.";
$about_h2_mission = "Unsere Mission";
$about_p_mission_1 = "Unsere Mission ist es, Tradern klare, strukturierte Tools für den Umgang mit Krypto-, Forex- und Aktienmärkten zu bieten — ohne Hype und ohne die damit verbundenen Risiken zu verschweigen.";
$about_p_mission_2 = "Jede Funktion von $site_name ist auf Klarheit ausgelegt: was das Tool tut, warum es das tut und was Sie erwarten können.";
$about_h2_ai = "Unser KI-gestützter Ansatz";
$about_p_ai_1 = "$site_name verbindet Echtzeit-Marktdaten mit KI-gestützter Analyse, damit Sie Marktbedingungen schneller verstehen.";
$about_p_ai_2 = "Unsere Systeme sind als Entscheidungshilfen konzipiert — nicht als Gewinngarantie. Trading ist immer mit Risiko verbunden.";
$about_li_1 = "Echtzeit-Marktdatenaggregation";
$about_li_2 = "KI-gestützte Marktanalyse";
$about_li_3 = "Transparente Risikohinweise";
$about_li_4 = "Geführtes Onboarding für neue Trader";
$about_li_5 = "Zugang zu mehreren Anlageklassen: Krypto, Forex, Aktien";
$about_li_6 = "Sicherheitsinfrastruktur auf Bankniveau";
$about_li_7 = "24/7-Kundensupport";
$about_li_8 = "Regelmäßige Plattform- und Sicherheitsupdates";
$about_h2_security = "Sicherheit an erster Stelle";
$about_p_security_1 = "Wir nutzen branchenübliche Verschlüsselung und sichere Infrastrukturpartner, um Ihre Daten und Ihr Konto zu schützen.";
$about_p_security_2 = "Sicherheit ist kein Zusatz — sie ist in jeden Teil der Plattform integriert.";
$about_h2_global = "Für globale Märkte konzipiert";
$about_p_global_1 = "$site_name ist darauf ausgelegt, Trader in vielen Regionen zu unterstützen — mit lokalisierter Sprache und Währungsunterstützung.";
$about_p_global_2 = "Unsere Infrastrukturpartner helfen uns, einen zuverlässigen Zugang zu gewährleisten, unabhängig davon, von wo aus Sie handeln.";
$about_h2_why = "Warum $site_name wählen";
$about_why_li_1 = "Klares, strukturiertes Onboarding";
$about_why_li_2 = "KI-gestützt, nicht KI-garantiert — ehrliche Erwartungen";
$about_why_li_3 = "Transparente Gebühren- und Preisinformationen";
$about_why_li_4 = "Reaktionsschneller Kundensupport";
$about_why_li_5 = "Regulierte Zahlungspartner";
$about_why_li_6 = "Kontinuierliche Plattformverbesserungen";
$about_why_li_7 = "Fokus auf Trader-Weiterbildung";
$about_h2_forward = "Blick nach vorn";
$about_p_forward_1 = "Wir verbessern $site_name kontinuierlich auf Basis von Trader-Feedback und sich wandelnden Marktbedingungen.";
$about_p_forward_2 = "Vielen Dank, dass Sie $site_name als Teil Ihrer Trading-Reise in Betracht ziehen.";

// --- Contact ---
$contact_meta_title = "Kontakt | $site_name";
$contact_meta_description = "Nehmen Sie Kontakt mit dem $site_name-Team auf — für Support, Kontofragen und allgemeine Anliegen.";
$contact_breadcrumb_name = "Kontakt";
$contact_h1 = "Kontakt";
$contact_intro_1 = "Haben Sie eine Frage zu Ihrem Konto, einer Funktion oder der Funktionsweise von $site_name? Wir helfen Ihnen gerne weiter.";
$contact_intro_2 = "Füllen Sie das untenstehende Formular aus oder kontaktieren Sie uns direkt über die weiter unten aufgeführten Angaben.";
$contact_h2_help = "Womit wir Ihnen helfen können";
$contact_li_1 = "Kontoeinrichtung und Verifizierung";
$contact_li_2 = "Plattformfunktionen und ihre Funktionsweise";
$contact_li_3 = "Fragen zu Ein- und Auszahlungen";
$contact_li_4 = "Technische Probleme";
$contact_li_5 = "Allgemeines Feedback und Vorschläge";
$contact_li_6 = "Partnerschafts- und Presseanfragen";
$contact_h2_send = "Senden Sie uns eine Nachricht";
$contact_p_send = "Geben Sie unten Ihre Daten ein, und unser Team meldet sich so schnell wie möglich bei Ihnen.";
$contact_form_fname = "Vorname";
$contact_form_lname = "Nachname";
$contact_form_email = "E-Mail-Adresse";
$contact_form_submit = "Nachricht senden";
$contact_h2_info = "Weitere Wege, uns zu erreichen";
$contact_support_label = "Support:";
$contact_institutional_label = "Institutionelle Anfragen:";
$contact_disclaimer = "Wir bemühen uns, alle Anfragen innerhalb von 24–48 Stunden zu beantworten.";

// --- FAQ page ---
$faq_page_meta_title = "FAQ | $site_name";
$faq_page_meta_description = "Häufig gestellte Fragen zu $site_name — Konten, Einzahlungen, Sicherheit und die Funktionsweise unserer KI-gestützten Handelstools.";
$faq_page_breadcrumb_name = "FAQ";
$faq_page_h1 = "Häufig gestellte Fragen";
$faq_page_subtitle = "Antworten auf die Fragen, die Trader uns am häufigsten stellen. Nicht gefunden, wonach Sie suchen? Kontaktieren Sie unser Support-Team.";

// --- Sign in / Register page ---
$sign_meta_title = "Konto erstellen | $site_name";
$sign_meta_description = "Erstellen Sie Ihr $site_name-Konto und starten Sie mit strukturiertem, KI-gestütztem Zugang zu globalen Märkten.";
$sign_breadcrumb_name = "Registrieren";
$sign_h1 = "Konto erstellen";
$sign_subtitle = "Dauert weniger als 3 Minuten. Keine Einrichtungsgebühren.";

// --- Terms & Conditions ---
$conditions_meta_title = "Allgemeine Geschäftsbedingungen | $site_name";
$conditions_meta_description = "Lesen Sie die Allgemeinen Geschäftsbedingungen für die Nutzung von $site_name.";
$conditions_breadcrumb_name = "AGB";
$conditions_h1 = "Allgemeine Geschäftsbedingungen";
$conditions_last_update = "Zuletzt aktualisiert: " . date('F Y');
$conditions_intro = "Diese Allgemeinen Geschäftsbedingungen ('Bedingungen') regeln Ihren Zugang zu und Ihre Nutzung von $site_name (die 'Plattform'). Mit der Erstellung eines Kontos oder der Nutzung der Plattform stimmen Sie diesen Bedingungen zu.";
$conditions_h2_eligibility = "Teilnahmeberechtigung";
$conditions_p_eligibility = "Sie müssen mindestens 18 Jahre alt und in Ihrer Rechtsordnung rechtlich in der Lage sein, verbindliche Verträge einzugehen, um die Plattform zu nutzen.";
$conditions_h2_account = "Ihr Konto";
$conditions_p_account = "Sie sind für die Wahrung der Vertraulichkeit Ihrer Kontodaten sowie für alle Aktivitäten verantwortlich, die unter Ihrem Konto stattfinden.";
$conditions_h2_risk = "Handelsrisiko";
$conditions_p_risk = "Der Handel mit Krypto, Forex und anderen Finanzinstrumenten birgt erhebliche Risiken, einschließlich des Risikos eines Totalverlusts Ihrer Anlage. Die vergangene Performance ist kein Indikator für zukünftige Ergebnisse. Nichts auf dieser Plattform stellt eine Finanzberatung dar.";
$conditions_h2_conduct = "Zulässige Nutzung";
$conditions_p_conduct = "Sie verpflichten sich, die Plattform nicht zu missbrauchen, keinen unbefugten Zugriff zu versuchen und die Plattform nicht für rechtswidrige Zwecke zu nutzen.";
$conditions_h2_liability = "Haftungsbeschränkung";
$conditions_p_liability = "Im gesetzlich zulässigen Höchstmaß haftet $site_name nicht für indirekte, zufällige oder Folgeschäden, die aus Ihrer Nutzung der Plattform entstehen.";
$conditions_h2_changes = "Änderungen dieser Bedingungen";
$conditions_p_changes = "Wir können diese Bedingungen von Zeit zu Zeit aktualisieren. Die fortgesetzte Nutzung der Plattform nach Inkrafttreten von Änderungen gilt als Zustimmung zu den aktualisierten Bedingungen.";
$conditions_h2_contact = "Kontakt";
$conditions_p_contact = "Fragen zu diesen Bedingungen können Sie über die Kontaktseite an unser Support-Team senden.";

// --- Privacy Policy ---
$privacy_meta_title = "Datenschutzerklärung | $site_name";
$privacy_meta_description = "Erfahren Sie, wie $site_name Ihre personenbezogenen Daten erhebt, verwendet und schützt.";
$privacy_breadcrumb_name = "Datenschutz";
$privacy_h1 = "Datenschutzerklärung";
$privacy_last_update = "Zuletzt aktualisiert: " . date('F Y');
$privacy_intro = "Diese Datenschutzerklärung erläutert, wie $site_name ('wir', 'uns') Ihre personenbezogenen Daten bei der Nutzung unserer Plattform erhebt, verwendet und schützt.";
$privacy_h2_collect = "Welche Daten wir erheben";
$privacy_p_collect = "Wir erheben Daten, die Sie uns direkt zur Verfügung stellen (z. B. Name, E-Mail-Adresse und Telefonnummer bei der Registrierung), sowie technische Daten (z. B. IP-Adresse und Browsertyp), die automatisch erfasst werden.";
$privacy_h2_use = "Wie wir Ihre Daten verwenden";
$privacy_p_use = "Wir nutzen Ihre Daten, um die Plattform bereitzustellen und zu verbessern, mit Ihnen zu kommunizieren, Ihre Identität zu überprüfen und gesetzlichen Verpflichtungen nachzukommen.";
$privacy_h2_sharing = "Weitergabe von Daten";
$privacy_p_sharing = "Wir verkaufen Ihre personenbezogenen Daten nicht. Wir können Daten mit vertrauenswürdigen Dienstleistern teilen, die uns beim Betrieb der Plattform unterstützen, unter Einhaltung von Vertraulichkeitspflichten.";
$privacy_google_choices = 'Sie können steuern, wie Google Informationen aus Ihren Besuchen verwendet, über die <a href="http://www.google.com/settings/ads" target="_blank" rel="noopener">Google Ads-Einstellungen</a>, sich über das <a href="https://tools.google.com/dlpage/gaoptout" target="_blank" rel="noopener">Google Analytics Opt-out Browser Add-on</a> von interessenbezogener Werbung abmelden oder die <a href="https://www.google.com/intl/de/policies/privacy/" target="_blank" rel="noopener">Datenschutzerklärung von Google</a> für weitere Details einsehen.';
$privacy_h2_security = "Datensicherheit";
$privacy_p_security = "Wir setzen branchenübliche technische und organisatorische Maßnahmen ein, um Ihre Daten zu schützen, einschließlich der Verschlüsselung von Daten während der Übertragung.";
$privacy_h2_rights = "Ihre Rechte";
$privacy_p_rights = "Je nach Ihrer Rechtsordnung haben Sie möglicherweise das Recht, auf Ihre personenbezogenen Daten zuzugreifen, sie zu berichtigen oder zu löschen. Kontaktieren Sie uns, um diese Rechte auszuüben.";
$privacy_h2_retention = "Datenspeicherung";
$privacy_p_retention = "Wir speichern Ihre personenbezogenen Daten nur so lange, wie es für die in dieser Richtlinie beschriebenen Zwecke erforderlich ist, oder solange es gesetzlich vorgeschrieben ist.";
$privacy_h2_contact = "Kontaktieren Sie uns";
$privacy_p_contact = "Bei datenschutzbezogenen Fragen wenden Sie sich bitte über unsere Kontaktseite an uns.";

// ==========================================
// RISK WARNING PAGE
// ==========================================
$page_title_risk_warning = "Risikohinweis | $site_name";
$page_description_risk_warning = "Verstehen Sie die Risiken des automatisierten Krypto-Handels mit $site_name, einschließlich Marktvolatilität, Ausführungsrisiko und regulatorischer Aspekte.";
$risk_warning_breadcrumb_name = "Risikohinweis";
$risk_warning_title = "Risikohinweis";
$risk_warning_intro = "Risiken zu verstehen ist der erste Schritt zu selbstbewusstem Trading.";

$risk_warning_ai_heading = "Wie unser KI-System beim Risikomanagement hilft:";
$risk_warning_ai_1 = "<strong>Algorithmische Effizienz & emotionsloses Trading:</strong> Fortschrittliche Algorithmen analysieren Marktsignale, um Trades objektiv zum optimalen Zeitpunkt auszuführen.";
$risk_warning_ai_2 = "<strong>Datengetriebene Strategien:</strong> Strategien basieren auf verifizierten Marktmustern und Echtzeitanalysen statt auf Vermutungen.";
$risk_warning_ai_3 = "<strong>Flexible Einstellungen & volle Kontrolle:</strong> Passen Sie Ihre Risikoparameter jederzeit an. Verfolgen Sie alle Salden und Trades transparent in Ihrem Dashboard — ohne versteckte Gebühren und mit uneingeschränkten Auszahlungen.";

$risk_warning_disclaimer = "<strong>Haftungsausschluss:</strong> Trading ist immer mit Risiko verbunden. Automatisierte Systeme (einschließlich KI) garantieren keinen Gewinn, können durch Softwarefehler oder unerwartete Marktereignisse versagen und erfordern eine Überwachung durch den Nutzer. Die vergangene Performance ist kein Indikator für zukünftige Ergebnisse. Diese Plattform dient ausschließlich informativen und werblichen Zwecken und stellt keine Finanzberatung dar.";

$risk_warning_s1_heading = "1. Allgemeine Risiken und Risiken des Kryptomarkts";
$risk_warning_s1_intro = "Kryptowährungen sind hochvolatile, spekulative Assets, die rund um die Uhr und in den meisten Rechtsordnungen mit minimaler regulatorischer Aufsicht gehandelt werden.";
$risk_warning_s1_1 = "Werte können innerhalb kurzer Zeiträume drastisch schwanken, was zu einem Totalverlust des investierten Kapitals führen kann.";
$risk_warning_s1_2 = "Marktwerte können stark durch regulatorische Änderungen, technische Entwicklungen, Sicherheitsverletzungen oder breitere makroökonomische Ereignisse beeinflusst werden.";
$risk_warning_s1_3 = "Manche Assets können vollständig wertlos werden. Investieren Sie nur Beträge, deren Verlust Sie sich leisten können.";

$risk_warning_s2_heading = "2. Ausführungs-, Liquiditäts- und Hebelrisiken";
$risk_warning_s2_1 = "<strong>Marktvolatilität & Liquidität:</strong> Extreme Kursbewegungen (10–20 % oder mehr an einem Tag) oder geringe Liquidität (insbesondere bei kleineren Coins) können zu Verzögerungen, Plattformausfällen und erheblichem Ausführungs-Slippage führen. Stop-Loss-Orders können unter extremen Bedingungen keine Verlustgrenzen garantieren.";
$risk_warning_s2_2 = "<strong>Hebel- und Margin-Risiken:</strong> Gehebelte Produkte verstärken sowohl Gewinne als auch Verluste, sodass Sie mehr verlieren können als Ihre ursprüngliche Einzahlung. Etwa 70–80 % der Retail-Investorenkonten verlieren beim Handel mit gehebelten Produkten Geld.";

$risk_warning_s3_heading = "3. Technische, Cybersicherheits- und Drittanbieterrisiken";
$risk_warning_s3_1 = "<strong>Technische Faktoren:</strong> Online-Trading birgt naturgemäß Risiken wie Internetausfälle, Hardware-/Softwarefehler und Dienstausfälle.";
$risk_warning_s3_2 = "<strong>Cybersicherheit:</strong> Krypto-Konten sind häufige Ziele von Phishing, Malware und Hackerangriffen. Transaktionen sind unwiderruflich; die Kompromittierung Ihrer Zugangsdaten kann zu einem dauerhaften Verlust führen.";
$risk_warning_s3_3 = "<strong>Drittanbieter-Plattformen:</strong> Diese Website kann Nutzer mit Drittanbieter-Plattformen verbinden. Wir kontrollieren, befürworten oder garantieren weder deren Sicherheit noch deren Betrieb oder Zahlungsfähigkeit. Führen Sie stets Ihre eigene Sorgfaltsprüfung durch, bevor Sie Gelder auf externen Plattformen einzahlen.";

$risk_warning_s4_heading = "4. Regulatorische, steuerliche und abschließende Bestimmungen";
$risk_warning_s4_1 = "<strong>Rechtliche Konformität & Steuern:</strong> Regulatorische Rahmenwerke unterscheiden sich stark und ändern sich schnell. Nutzer sind allein dafür verantwortlich, sicherzustellen, dass ihre Handelsaktivität den lokalen Gesetzen entspricht, und ihre eigenen steuerlichen Pflichten zu erfüllen.";
$risk_warning_s4_2 = "<strong>Keine Gewinngarantien:</strong> Es gibt keinen \"sicheren\" oder risikofreien Krypto-Handel. Alle Renditeangaben oder Performance-Beispiele sind rein hypothetisch.";
$risk_warning_s4_3 = "<strong>Eignung:</strong> Wenn Sie die Risiken nicht vollständig verstehen, auf lebensnotwendige Mittel angewiesen sind oder mit geliehenem Geld handeln, ist der Krypto-Handel nichts für Sie. Wenden Sie sich im Zweifel an einen unabhängigen, lizenzierten Finanzberater.";

$risk_warning_contact = "<strong>Kontakt:</strong> Bei Fragen zu dieser Erklärung oder um eine Anfrage zu stellen, wenden Sie sich bitte über das Kontaktformular auf unserer Website an unser offizielles Kundensupport-Team.";
$footer_risk_warning = "Risikohinweis";
