<?php
require __DIR__ . '/../lang.php';

// Identity / config variables are intentionally NOT overridden here — they are inherited
// as-is from the root lang.php so brand/pricing swaps still work correctly at deploy time:
// $site_name, $site_url, $site_domain, $app_price, $app_currency, $rating_value,
// $rating_count, $review_count, $country_name, $support_email, $institutional_email.

$site_lang = 'de-DE';
$form_language = 'de'; // matches this page's own language, not the offer's global default

// Reviews
$review_1_author = "Privatanleger";
$review_2_author = "Unabhängiger Trader";
$review_3_author = "Digital-Asset-Trader";
$review_4_author = "Sucht passives Einkommen";


// META TITLE / DESCRIPTION (per page)
$home_meta_title = "$site_name — Offizielle Website | Handelsplattform";
$home_meta_description = "$site_name ⭐ — intelligente KI-Handelsplattform für Echtzeit-Marktanalysen und klare Handelssignale ⚡ Testen Sie smarte Tools und Insights mit einer geführten Tour.";



$quiz_consultant_name = 'Mia';
$quiz_consultant_role = 'Onboarding-Assistentin';

$quiz_text_welcome   = "Hallo! Hier ist $quiz_consultant_name, Ihre persönliche Onboarding-Assistentin bei $site_name. Großartige Neuigkeiten! Ihr Zugang wurde offiziell vorab genehmigt. Lassen Sie uns jetzt gemeinsam Ihr professionelles Profil einrichten!";
$quiz_text_q1 = "Um die vollständige Einhaltung gesetzlicher und regulatorischer Vorgaben sicherzustellen, bestätigen Sie bitte Ihr aktuelles Wohnsitzland: $country_name";
$quiz_text_a1_yes    = "Ja, das ist mein aktueller Wohnsitz";
$quiz_text_a1_no     = "Nein";

$quiz_text_q2 = "Perfekt. Bitte wählen Sie die passende Altersgruppe aus, damit wir die am besten geeigneten Finanzinstrumente für Sie finden können:";

$quiz_text_q3        = "Verfügen Sie über ein aktives Bankkonto oder eine Kreditkarte, um regelmäßige tägliche Dividendenzahlungen zu erhalten?";
$quiz_text_a3_yes    = "Ja, ein aktives Konto ist vorhanden";
$quiz_text_a3_no     = "Noch nicht vorhanden";

$quiz_text_q4        = "Bitte geben Sie Ihre primäre Einkommensquelle an. (Dieser Parameter hilft, die Risikomanagement-Einstellungen des Systems anzupassen.)";
$quiz_text_a4_1      = "Angestellt / Selbstständig";
$quiz_text_a4_2      = "Passives Einkommen / Persönliche Ersparnisse";
$quiz_text_a4_3      = "Andere Quellen";

$quiz_text_q5 = "Großartig! Der letzte Schritt ist eine kurze telefonische Verifizierung durch unseren Manager zur Bestätigung Ihrer Anmeldung. Die Anrufe erfolgen zwischen 11:00 und 20:00 Uhr. Können Sie den Anruf entgegennehmen?";
$quiz_text_a5_yes    = "Ja, diese Zeit passt mir für den Anruf";
$quiz_text_a5_no     = "Bitte den Anruf sofort einleiten";

$quiz_text_loader    = "Angeforderte Optionen werden analysiert, sichere Kontokonfigurationsparameter werden initialisiert …";
$quiz_text_final_ttl = "Konto erfolgreich autorisiert! 🎉 Ihr sicherer digitaler Arbeitsbereich ist vollständig eingerichtet. Bitte schließen Sie die folgenden letzten Verifizierungsschritte ab, um tägliche Auszahlungen zu gewährleisten:";

$quiz_placeholder_fname = "Vorname";
$quiz_placeholder_lname = "Nachname";
$quiz_placeholder_email = "E-Mail-Adresse";
$quiz_placeholder_phone = "Telefonnummer";
$quiz_btn_submit = "Handel aktivieren";
$quiz_text_typing       = "schreibt eine Nachricht …";
$quiz_text_processing   = "Anfrage wird bearbeitet …";


$about_meta_title = "Über $site_name | KI-gestützte Krypto-Handelsinfrastruktur";
$about_meta_description = "Erfahren Sie mehr über $site_name, eine fortschrittliche KI-gestützte Krypto-Handelsinfrastruktur mit Fokus auf prädiktive Analysen, Marktintelligenz, Volatilitätsüberwachung und Research zu digitalen Vermögenswerten.";

$contact_meta_title = "Kontakt $site_name | Zugang zur KI-Handelsplattform anfragen";
$contact_meta_description = "Kontaktieren Sie $site_name, um Zugang zu beantragen oder Fragen zu unserer KI-gestützten Krypto-Handelsinfrastruktur, den unterstützten Märkten, Digital-Asset-Intelligence oder dem Onboarding auf der Plattform zu stellen.";

$terms_meta_title = "Allgemeine Geschäftsbedingungen | $site_name Website- und Plattformbedingungen";
$terms_meta_description = "Lesen Sie die Allgemeinen Geschäftsbedingungen von $site_name zu Website-Nutzung, Informationsinhalten, KI-Handelsinfrastruktur, Nutzerverantwortung, Drittanbieterdiensten und Risikobeschränkungen.";

$privacy_meta_title = "Datenschutzerklärung | $site_name Datenschutz und Nutzerprivatsphäre";
$privacy_meta_description = "Lesen Sie die Datenschutzerklärung von $site_name, um zu erfahren, wie wir personenbezogene Daten, die über unsere KI-Krypto-Handelsinfrastruktur-Website übermittelt werden, erheben, nutzen, schützen, speichern und verwalten.";

$cookies_meta_title = "Cookie-Richtlinie | $site_name Website-Cookies und Tracking";
$cookies_meta_description = "Erfahren Sie, wie $site_name Cookies, Analysetechnologien, Tools zur Leistungsverfolgung und Funktionsdienste der Website einsetzt, um die Nutzererfahrung und die Plattformleistung zu verbessern.";

$aml_meta_title = "AML-Richtlinie | $site_name Standards zur Geldwäschebekämpfung";
$aml_meta_description = "Lesen Sie die AML-Richtlinie von $site_name zu verantwortungsvollem Umgang mit digitalen Vermögenswerten, Sensibilisierung für Geldwäschebekämpfung, untersagten Aktivitäten, Überwachungsgrundsätzen und Compliance-Erwartungen.";

$risk_meta_title = "Risikohinweis | $site_name Erklärung zu Krypto-Handelsrisiken";
$risk_meta_description = "Lesen Sie den Risikohinweis von $site_name, um Kryptowährungsvolatilität, Handelsunsicherheiten, Einschränkungen von KI-Signalen, Marktrisiko, Liquiditätsrisiko und Nutzerverantwortung zu verstehen.";

$exchanges_meta_title = "Unterstützte Börsen | $site_name Market-Intelligence-Abdeckung";
$exchanges_meta_description = "Entdecken Sie die Arten von Kryptobörsen, Liquiditätsplätzen und Märkten für digitale Vermögenswerte, die von der KI-gestützten Market-Intelligence-Infrastruktur von $site_name überwacht werden.";


$about_breadcrumb_name = "Über $site_name";
$contact_breadcrumb_name = "Kontakt $site_name";
$terms_breadcrumb_name = "AGB";
$privacy_breadcrumb_name = "Datenschutzerklärung";
$cookies_breadcrumb_name = "Cookie-Richtlinie";
$aml_breadcrumb_name = "AML-Richtlinie";
$risk_breadcrumb_name = "Risikohinweis";
$exchanges_breadcrumb_name = "Unterstützte Börsen";

$hero_text = "Erleben Sie eine neue Ära des Handels mit unserer fortschrittlichen Krypto-Handelsplattform. Mit der KI-Technologie von $site_name können Sie Ihre Renditen optimieren und fundierte Anlageentscheidungen treffen.";


// HEADER / NAV / FOOTER
$logo_subtitle = "KI-Handelsinfrastruktur";
$nav_signals = "Signale";
$nav_reviews = "Bewertungen";
$nav_about = "Über uns";
$nav_exchanges = "Börsen";
$nav_exchanges_full = "Unterstützte Börsen";
$nav_risk = "Risiko";
$nav_risk_full = "Risikohinweis";
$nav_faq = "FAQ";
$nav_privacy = "Datenschutzerklärung";
$nav_terms = "AGB";
$nav_cookies = "Cookie-Richtlinie";
$nav_cookies_short = "Cookies";
$nav_aml = "AML-Richtlinie";
$nav_contact_us = "Kontaktieren Sie uns";
$nav_contact = "Kontakt";
$nav_get_started = "Jetzt starten";
$header_ai_status = "KI-Kern aktiv";
$header_menu_aria = "Menü";
$footer_platform = "Plattform";
$footer_resources = "Ressourcen";
$footer_contact_title = "Kontakt";
$footer_ai_signals = "KI-Signale";
$footer_about_link = "Über $site_name";
$footer_description = "$site_name ist eine fortschrittliche KI-gestützte Krypto-Handelsinfrastruktur mit Fokus auf prädiktive Analysen, institutionelle Market Intelligence, Volatilitätsmodellierung, neuronale Ausführungssysteme und automatisiertes Risikomanagement.";
$footer_monitoring = "24/7-Überwachung der KI-Infrastruktur";
$footer_global_markets = "Globale Märkte für digitale Vermögenswerte";
$footer_disclaimer_title = "Risikohinweis";
$footer_disclaimer_p1 = "Der Handel mit Kryptowährungen und Investitionen in digitale Vermögenswerte sind mit erheblichen finanziellen Risiken verbunden und eignen sich möglicherweise nicht für alle Anleger. Marktvolatilität, Liquiditätsstörungen, technische Ausfälle, regulatorische Änderungen und makroökonomische Bedingungen können die Wertentwicklung erheblich beeinflussen.";
$footer_disclaimer_p2 = "$site_name stellt eine KI-gestützte Analyseinfrastruktur, prädiktive Market Intelligence und automatisierte Handelstechnologien bereit. Nichts auf dieser Website stellt eine Finanz-, Anlage-, Rechts- oder Steuerberatung dar.";
$footer_disclaimer_p3 = "Die Wertentwicklung der Vergangenheit ist kein verlässlicher Indikator für zukünftige Ergebnisse. Nutzer sollten die Risiken eigenständig bewerten, bevor sie mit Kryptowährungsmärkten oder automatisierten Handelssystemen interagieren.";
$footer_rights = "Alle Rechte vorbehalten.";
$footer_lang_label = "Sprache";



// HOME FORM
$home_form_fname = "Vorname";
$home_form_lname = "Nachname";
$home_form_email = "E-Mail";
$home_form_submit_access = "Zugang erhalten";
$home_form_submit_platform = "Plattformzugang anfragen";

// CONTACT FORM
$contact_form_fname = "Vorname";
$contact_form_lname = "Nachname";
$contact_form_email = "E-Mail";
$contact_form_submit = "Zugang anfragen";


// HOME LABELS
$home_label_ai_confidence = "KI-Konfidenz";
$home_label_update_speed = "Aktualisierungsgeschwindigkeit";
$home_label_market_mode = "Marktmodus";
$home_label_market_condition = "Marktlage";
$home_label_buyer_activity = "Käuferaktivität";
$home_label_market_activity = "Marktaktivität";
$home_label_risk_level = "Risikostufe";
$home_label_updated = "Aktualisiert";
$home_label_live_analysis = "LIVE-ANALYSE";

// JS
$home_js_sec_ago = "Sek. her";
$js_sec_ago = "Sek. her";
$js_close_notification = "Benachrichtigung schließen";

$js_signal_long_direction = "Wahrscheinlichkeit eines Aufwärtstrends steigt";
$js_signal_long_market = "Kontrollierte Expansion";
$js_signal_long_pressure_label = "Liquiditätsdruck";
$js_signal_long_pressure = "Bullisch";

$js_signal_short_direction = "Abwärtsdruck nimmt zu";
$js_signal_short_market = "Hohe Instabilität";
$js_signal_short_pressure_label = "Risikodruck";
$js_signal_short_pressure = "Bärisch";

$js_signal_watch_direction = "Konsolidierungszone erkannt";
$js_signal_watch_market = "Neutrale Konsolidierung";
$js_signal_watch_pressure_label = "Institutioneller Kapitalfluss";
$js_signal_watch_pressure = "Stabil";

$js_hero_long_pair = "BTC/USD Momentum-Ausweitung";
$js_hero_long_regime = "Bullisch";
$js_hero_long_feed_1 = "BTC-Liquiditätsausweitung erkannt";
$js_hero_long_feed_2 = "Orderflow-Druck dreht ins Positive";
$js_hero_long_feed_3 = "KI-Modell bestätigt bullische Fortsetzung";

$js_hero_watch_pair = "ETH/USD Volatilitätskompression";
$js_hero_watch_regime = "Neutral";
$js_hero_watch_feed_1 = "ETH-Kompressionszone erkannt";
$js_hero_watch_feed_2 = "KI wartet auf stärkere Bestätigung";
$js_hero_watch_feed_3 = "Liquidität bleibt stabil";

$js_hero_short_pair = "SOL/USD Risikoausweitung";
$js_hero_short_regime = "Risk-Off";
$js_hero_short_feed_1 = "SOL-Abwärtsdruck erkannt";
$js_hero_short_feed_2 = "Risikomodell meldet Volatilitätsausweitung";
$js_hero_short_feed_3 = "KI reduziert bullisches Exposure";

// JS — live user popup actions
$js_live_action_1 = "ist $site_name beigetreten aus";
$js_live_action_2 = "hat Plattformzugang angefordert aus";
$js_live_action_3 = "hat die KI-Signalüberwachung gestartet aus";
$js_live_action_4 = "hat die Marktanalyse aktiviert aus";
$js_live_action_5 = "hat das institutionelle Dashboard geöffnet aus";
$js_live_action_6 = "hat sich mit $site_name verbunden aus";


// HOME PAGE
$home_hero_label = "KI-Krypto-Plattform für jedes Erfahrungslevel";
$home_hero_title = "$site_name Plattform";
$home_hero_desc = "$site_name unterstützt Einsteiger und erfahrene Trader dabei, Kryptomärkte mit KI-gestützten Insights, Echtzeit-Marktüberwachung, Tools zur Risikobewusstsein und geführtem Plattform-Support zu erkunden.";
$home_hero_feat_1 = "Einfache KI-Markteinblicke für neue Nutzer";
$home_hero_feat_2 = "Echtzeit-Kryptoüberwachung und Signal-Updates";
$home_hero_feat_3 = "Risikobewusste Tools für klügere Entscheidungen";
$home_hero_feat_4 = "Erweiterte Analysen für erfahrene Trader";
$home_btn_request_access = "Plattformzugang erhalten";
$home_btn_view_signals = "KI-Signale ansehen";
$home_trust_data_label = "Analysierte Marktdatenpunkte";
$home_trust_confidence_label = "Durchschnittliche Signal-Konfidenz";
$home_trust_monitoring_label = "KI-Marktüberwachung";
$home_terminal_title = "$site_name Geführte KI-Marktansicht";
$home_terminal_insight_label = "Aktuelle KI-Markteinschätzung";
$home_terminal_feed_1 = "Die BTC-Marktaktivität zeigt stärkeres Momentum";
$home_terminal_feed_2 = "Die ETH-Bewegung wird zur Bestätigung überwacht";
$home_terminal_feed_3 = "Der KI-Assistent hebt eine mögliche Chancenzone hervor";
$home_trust_strip_1 = "KI-Insights für Einsteiger und erfahrene Trader";
$home_trust_strip_2 = "24/7-Überwachung der Kryptomärkte";
$home_trust_strip_3 = "Echtzeit-Risiko- und Chancenanalyse";
$home_trust_strip_4 = "Geführter Zugang zu erweiterten Handelstools";
$home_signals_eyebrow = "$site_name LIVE-KI-KERN";
$home_signals_title = "Echtzeit-KI-Marktsignale für klügere Krypto-Entscheidungen";
$home_signals_desc = "$site_name überwacht kontinuierlich die Marktaktivität von Kryptowährungen, Volatilität, Liquiditätsbedingungen, Stimmungstrends und Blockchain-Daten, um KI-gestützte Insights und Echtzeit-Marktsignale für Einsteiger und erfahrene Trader zu generieren.";
$home_signals_terminal_title = "$site_name KI-Signal-Engine";
$home_signal_btc_sub = "Positives Momentum erkannt";
$home_signal_btc_dir = "Wahrscheinlichkeit eines Aufwärtstrends steigt";
$home_signal_btc_market = "Positives Momentum";
$home_signal_btc_activity = "Stark";
$home_signal_eth_sub = "Wartet auf Marktbestätigung";
$home_signal_eth_dir = "Seitwärtsbewegung erkannt";
$home_signal_eth_market = "Neutraler Trend";
$home_signal_eth_activity = "Stabil";
$home_signal_sol_sub = "Erhöhtes Marktrisiko erkannt";
$home_signal_sol_dir = "Abwärtsdruck nimmt zu";
$home_signal_sol_market = "Hohe Volatilität";
$home_signal_sol_risk = "Erhöht";
$home_why_eyebrow = "WARUM $site_name?";
$home_why_title = "KI-gestützte Krypto-Tools für jedes Erfahrungslevel";
$home_why_desc_1 = "$site_name hilft Nutzern, Kryptomärkte durch künstliche Intelligenz, Echtzeitüberwachung, Markteinblicke und Tools zur Risikobewusstsein besser zu verstehen. Egal, ob Sie Krypto zum ersten Mal entdecken oder bereits Handelserfahrung haben – die Plattform wurde entwickelt, um Marktanalysen zugänglicher und leichter verständlich zu machen.";
$home_why_desc_2 = "Die Infrastruktur von $site_name bewertet kontinuierlich Marktaktivität, Preisbewegungen, Liquiditätsbedingungen, Stimmungstrends und Blockchain-Daten, um neue Chancen und veränderte Marktbedingungen zu erkennen. Neue Nutzer profitieren von geführtem Plattform-Support, während erfahrene Trader erweiterte Analysetools und KI-gestützte Market Intelligence nutzen können.";
$home_flow_1 = "Marktüberwachung";
$home_flow_2 = "KI-Analyse";
$home_flow_3 = "Chancenerkennung";
$home_flow_4 = "Risikobewertung";
$home_flow_5 = "Umsetzbare Insights";
$home_reviews_eyebrow = "$site_name COMMUNITY";
$home_reviews_title = "Was Nutzer über $site_name sagen";
$home_reviews_desc = "Von Krypto-Einsteigern bis zu erfahrenen Tradern nutzen Menschen $site_name, um Marktbedingungen besser zu verstehen, KI-gestützte Insights zu erkunden und Krypto-Entscheidungen mit mehr Klarheit zu treffen.";
$home_review_1_text = "Bevor ich $site_name entdeckt habe, fühlte ich mich von der Informationsflut im Kryptobereich überfordert. Jede Plattform wirkte kompliziert, und ich hatte ständig Angst, Fehler zu machen. Was ich an $site_name am meisten schätze, ist, wie zugänglich sich alles anfühlt. Die KI-Insights halfen mir, Marktbedingungen zu verstehen, ohne mich verloren zu fühlen, und die Plattform gab mir das Vertrauen, in meinem eigenen Tempo zu lernen. Ich bin wirklich dankbar, wie viel einfacher die Erfahrung war, als ich erwartet hatte.";
$home_review_1_tag = "Sicherer und einfacher Einstieg";
$home_review_badge = "VERIFIZIERTER NUTZER";
$home_review_2_text = "Ich habe monatelang Kryptoplattformen angeschaut, ohne mich je wohl genug zu fühlen, den ersten Schritt zu wagen. $site_name hat das vollkommen verändert. Die Plattform machte Marktinformationen leichter verständlich, und ich hatte nie das Gefühl, jahrelange Handelserfahrung zu brauchen, um die Tools zu nutzen. Am meisten beeindruckte mich die Balance zwischen Einfachheit und leistungsstarker KI-Analyse. Es fühlt sich an, als hätte man jederzeit Unterstützung zur Hand. Ich bin dankbar, eine Plattform gefunden zu haben, die mir das Lernen ermöglicht hat, ohne mich einzuschüchtern.";
$home_review_2_tag = "Einfacheres Lernerlebnis";
$home_review_3_text = "Ich habe viele Marktanalyse-Plattformen getestet, und $site_name sticht heraus, weil es Zugänglichkeit mit echter analytischer Tiefe verbindet. Neue Nutzer verstehen die Plattform schnell, während erfahrene Trader weiterhin nützliche KI-gestützte Marktsignale, Risikoüberwachung und Echtzeit-Krypto-Intelligence erhalten. Diese Balance ist schwer zu finden. Die Plattform liefert bedeutungsvollen Marktkontext, ohne Nutzer zu überfordern – etwas, das nur wenige Krypto-Tools schaffen.";
$home_review_3_tag = "Fortschrittliche Tools mit einfacher Bedienbarkeit";
$home_review_span_1 = "Neuer Krypto-Nutzer";
$home_review_span_2 = "Erstmaliger Plattformnutzer";
$home_review_span_3 = "Professioneller Krypto-Trader";
$home_review_1_avatar_alt = "Sean Miller, $site_name-Nutzer";
$home_review_2_avatar_alt = "Ethan Lucas, $site_name-Nutzer";
$home_review_3_avatar_alt = "Alexander Thompson, $site_name-Nutzer";
$home_hero_visual_alt = "KI-gestütztes Markt-Analytics-Dashboard auf $site_name";
$home_signal_visual_alt = "Echtzeit-Handelssignal, generiert von der $site_name-KI";
$home_device_visual_alt = "Krypto-Analysen auf einem verbundenen Gerät über $site_name";
$home_security_visual_alt = "Sicherheitsschild als Symbol für den $site_name-Kontoschutz";
$home_contact_eyebrow = "MIT $site_name STARTEN";
$home_contact_title = "Entdecken Sie die Plattform mit Vertrauen";
$home_contact_desc_1 = "Egal, ob Sie völlig neu in den Kryptomärkten sind oder bereits Handelserfahrung haben – $site_name bietet Zugang zu KI-gestützten Markteinblicken, Echtzeit-Überwachungstools und intelligenten Analysen, die Nutzern helfen, Chancen bei digitalen Vermögenswerten besser zu verstehen.";
$home_contact_desc_2 = "Übermitteln Sie Ihre Daten, um mehr über die Plattform zu erfahren, verfügbare Funktionen zu entdecken und herauszufinden, wie $site_name Ihnen mit fortschrittlicher Technologie und geführtem Plattform-Support beim Navigieren der Kryptomärkte helfen kann.";
$home_seo_toggle = "Mehr über die $site_name KI-Plattform erfahren";
$home_seo_h2 = "$site_name KI-Plattform für klügere Entscheidungen am Kryptomarkt";
$home_seo_p1 = "$site_name ist eine KI-gestützte Kryptowährungsplattform, die sowohl für Einsteiger als auch für erfahrene Trader konzipiert ist. Die Plattform kombiniert künstliche Intelligenz, Echtzeit-Marktüberwachung und erweiterte Analysetools, um Nutzern zu helfen, Märkte für digitale Vermögenswerte besser zu verstehen und potenzielle Chancen zu erkennen.";
$home_seo_p2 = "Anders als viele traditionelle Handelsplattformen, die umfangreiches Marktwissen erfordern, wurde $site_name entwickelt, um komplexe Marktinformationen leichter verständlich zu machen. Die Plattform analysiert kontinuierlich Kryptoaktivität, Preisbewegungen, Stimmungstrends, Liquiditätsbedingungen und Blockchain-Daten und wandelt große Informationsmengen in praktische Insights um.";
$home_seo_p3 = "Egal, ob Sie Kryptomärkte zum ersten Mal erkunden oder bereits Erfahrung mit dem Handel digitaler Vermögenswerte haben – $site_name bietet intelligente Tools, die fundiertere Entscheidungen unterstützen und sich in Echtzeit an veränderte Marktbedingungen anpassen.";
$home_seo_h3_1 = "KI-Marktanalyse leicht zugänglich gemacht";
$home_seo_h3_1_p1 = "$site_name nutzt künstliche Intelligenz, um eine breite Palette an Marktindikatoren auszuwerten – darunter Handelsaktivität, Volatilitätsmuster, Liquiditätsbedingungen, Blockchain-Ereignisse und Marktstimmung. Durch die kontinuierliche Verarbeitung von Informationen hilft die Plattform Nutzern, das aktuelle Marktverhalten klarer zu verstehen.";
$home_seo_h3_1_p2 = "Die KI-Modelle sind darauf ausgelegt, sich an veränderte Umgebungen anzupassen, statt sich auf statische Annahmen zu verlassen. Dadurch kann die Plattform dynamisch auf sich entwickelnde Krypto-Trends und neue Marktchancen reagieren.";
$home_seo_h3_1_p3 = "Die Plattform ist fortschrittlich genug für erfahrene Trader und gleichzeitig so aufgebaut, dass sie auch für neue Nutzer zugänglich bleibt, die KI-gestützte Market Intelligence nutzen möchten, ohne tiefgehendes technisches Fachwissen zu benötigen.";
$home_seo_h3_2 = "Echtzeit-KI-Marktsignale";
$home_seo_h3_2_p1 = "$site_name überwacht kontinuierlich die Kryptomärkte und generiert KI-gestützte Insights auf Basis der sich verändernden Marktaktivität. Die Plattform bewertet Momentum, Volatilität, Liquiditätsbedingungen und das allgemeine Marktverhalten, um Echtzeit-Analysesignale bereitzustellen.";
$home_seo_h3_2_p2 = "Bitcoin, Ethereum, Solana, XRP, Avalanche und andere wichtige digitale Vermögenswerte werden mithilfe adaptiver Analysemodelle überwacht, die sich automatisch an veränderte Marktbedingungen anpassen.";
$home_seo_h3_2_p3 = "Statt sich auf einen einzelnen Indikator oder eine isolierte Kennzahl zu verlassen, kombiniert $site_name mehrere Informationsquellen zu einem umfassenderen Analyserahmen, der ein vollständigeres Bild der Marktbedingungen liefert.";
$home_seo_h3_3 = "Intelligente Tools zur Risikobewusstsein";
$home_seo_h3_3_p1 = "Kryptomärkte können sich rasant verändern. $site_name umfasst KI-gestützte Überwachungssysteme, die ungewöhnliche Volatilität, veränderte Liquiditätsbedingungen und neu entstehende Marktrisiken erkennen sollen.";
$home_seo_h3_3_p2 = "Die Plattform bewertet kontinuierlich das Marktverhalten und potenzielle Risikofaktoren und hilft Nutzern, veränderte Bedingungen besser zu verstehen und fundiertere Entscheidungen zu treffen.";
$home_seo_h3_3_p3 = "Durch die Kombination mehrerer Analyseebenen möchte $site_name das Marktbewusstsein verbessern und Nutzern helfen, Phasen erhöhter Unsicherheit mit mehr Zuversicht zu meistern.";
$home_seo_h3_4 = "Entwickelt für moderne Kryptomärkte";
$home_seo_h3_4_p1 = "$site_name vereint künstliche Intelligenz, Echtzeit-Überwachungstechnologien und erweiterte Analysetools in einer einzigen Plattform, die für moderne Märkte für digitale Vermögenswerte entwickelt wurde.";
$home_seo_h3_4_p2 = "Die Infrastruktur bewertet kontinuierlich Marktaktivität, Blockchain-Entwicklungen, Stimmungsänderungen und Liquiditätstrends, um ein umfassendes Bild des Krypto-Marktverhaltens zu liefern.";
$home_seo_h3_4_p3 = "Während sich die Märkte für digitale Vermögenswerte weiterentwickeln, können KI-gestützte Tools Nutzern helfen, Informationen effizienter zu verarbeiten und zunehmend komplexe Marktumgebungen besser zu verstehen. $site_name wurde entwickelt, um diese Fähigkeiten einem breiteren Kreis von Marktteilnehmern zugänglich zu machen.";
$home_seo_side_1_label = "KI-Insights";
$home_seo_side_1_title = "Leicht verständliche Marktanalyse";
$home_seo_side_1_desc = "KI-gestützte Insights für neue und erfahrene Krypto-Nutzer.";
$home_seo_side_2_label = "Marktüberwachung";
$home_seo_side_2_title = "Echtzeit-Krypto-Tracking";
$home_seo_side_2_desc = "Kontinuierliche Überwachung wichtiger Kryptomärkte und sich verändernder Marktbedingungen.";
$home_seo_side_3_label = "Risikobewusstsein";
$home_seo_side_3_title = "Intelligente Risikoerkennung";
$home_seo_side_3_desc = "Erweiterte Überwachungstools, die veränderte Marktdynamiken und Volatilität aufzeigen.";
$home_seo_side_4_label = "KI-Technologie";
$home_seo_side_4_title = "Adaptive Analysemodelle";
$home_seo_side_4_desc = "Machine-Learning-Systeme, die kontinuierlich Marktdaten und neu entstehende Trends auswerten.";
$home_faq_eyebrow = "$site_name WISSENSDATENBANK";
$home_faq_title = "Häufig gestellte Fragen zu $site_name";
$home_faq_desc = "Erfahren Sie mehr darüber, wie die Plattform funktioniert, für wen sie konzipiert ist und wie künstliche Intelligenz Nutzern hilft, die Bedingungen der Kryptomärkte besser zu verstehen.";
$home_faq_q1 = "Brauche ich Handelserfahrung, um $site_name zu nutzen?";
$home_faq_a1 = "Nein. $site_name wurde für Nutzer mit unterschiedlichem Erfahrungsniveau entwickelt, einschließlich Menschen, die völlig neu in den Kryptomärkten sind. Die Plattform nutzt KI-gestützte Insights und Marktüberwachungstools, um komplexe Informationen leichter verständlich zu machen.";
$home_faq_q2 = "Was genau macht $site_name?";
$home_faq_a2 = "$site_name analysiert Kryptomärkte kontinuierlich mithilfe künstlicher Intelligenz. Die Plattform bewertet Marktaktivität, Volatilität, Stimmungstrends, Liquiditätsbedingungen und Blockchain-Daten, um Echtzeit-Insights und Analysesignale zu generieren.";
$home_faq_q3 = "Können erfahrene Trader $site_name nutzen?";
$home_faq_a3 = "Ja. Die Plattform ist zwar einsteigerfreundlich, bietet aber auch erweiterte Analysetools, KI-gestützte Market Intelligence und Echtzeit-Überwachungsfunktionen, die für erfahrene Marktteilnehmer wertvoll sein können.";
$home_faq_q4 = "Welche Kryptowährungen überwacht $site_name?";
$home_faq_a4 = "Die Plattform kann wichtige digitale Vermögenswerte wie Bitcoin, Ethereum, Solana, XRP, Avalanche und andere häufig gehandelte Kryptowährungen analysieren, abhängig von den Marktbedingungen und verfügbaren Datenquellen.";
$home_faq_q5 = "Wie werden KI-Signale generiert?";
$home_faq_a5 = "$site_name bewertet gleichzeitig mehrere Marktfaktoren, darunter Volatilität, Handelsaktivität, Liquiditätsbedingungen, Stimmungstrends und historisches Marktverhalten. KI-Modelle kombinieren diese Eingaben, um veränderte Marktbedingungen und potenzielle Chancen zu erkennen.";
$home_faq_q6 = "Bietet $site_name pädagogische Unterstützung?";
$home_faq_a6 = "Die Plattform wurde entwickelt, um Nutzern durch KI-gestützte Analysen, vereinfachte Insights und geführten Zugang zu den Plattformfunktionen ein besseres Verständnis der Marktbedingungen zu ermöglichen. Neue Nutzer können Kryptomärkte erkunden, ohne fortgeschrittenes technisches Wissen zu benötigen.";
$home_cta_label = "KI-Plattform bereit";
$home_cta_title = "Entdecken Sie $site_name noch heute";
$home_cta_desc = "Entdecken Sie KI-gestützte Markteinblicke, Echtzeit-Kryptoüberwachung, intelligente Tools zur Risikobewusstsein und erweiterte Analysen für Einsteiger und erfahrene Trader.";
$home_ticker_text = "KI-Marktüberwachung aktiv • Echtzeit-Kryptowährungsanalyse • Bitcoin-Momentum verstärkt sich • Ethereum-Konsolidierung erkannt • Neue Marktchancen identifiziert • Risikoüberwachungssysteme online • KI-Insights werden kontinuierlich aktualisiert • Entwickelt für Einsteiger und erfahrene Trader";




// ABOUT PAGE
$about_h1 = "Über $site_name";
$about_p1 = "$site_name ist eine KI-Infrastruktur der nächsten Generation, die Marktteilnehmern hilft, das sich schnell entwickelnde Krypto-Ökosystem besser zu verstehen. Durch die Kombination von Machine-Learning-Technologien, prädiktiven Analysen, Market-Intelligence-Systemen und Echtzeit-Datenverarbeitung bietet $site_name eine umfassende Umgebung zur Überwachung von Krypto-Aktivitäten und zur Identifizierung bedeutsamer Marktentwicklungen.";
$about_p2 = "Der Kryptomarkt ist rund um die Uhr über zahlreiche Börsen, Rechtsräume und Liquiditätsanbieter hinweg aktiv. Jede Sekunde beeinflussen Tausende von Variablen Preise, Volatilität, Liquiditätsbedingungen und Anlegerstimmung. $site_name wurde mit dem Ziel entwickelt, diese komplexen Datenströme strukturiert und skalierbar zu verarbeiten.";
$about_h2_vision = "Die Vision hinter $site_name";
$about_p_vision_1 = "Die Finanzmärkte sind zunehmend datengetrieben geworden. Traditionelle Analysemethoden haben oft Schwierigkeiten, mit der Informationsmenge moderner Krypto-Ökosysteme Schritt zu halten. $site_name möchte diese Lücke durch den Einsatz fortschrittlicher Computational Intelligence, automatisierter Überwachungssysteme und adaptiver Analysemodelle schließen.";
$about_p_vision_2 = "Die langfristige Vision von $site_name ist es, transparente Market-Intelligence-Tools bereitzustellen, die Nutzern helfen, Marktstruktur, Risikobedingungen und neu entstehende Trends im Kryptobereich besser zu verstehen.";
$about_h2_ai = "KI-Infrastruktur";
$about_p_ai_1 = "Im Kern von $site_name steht ein mehrschichtiges KI-Framework, das Informationen aus zahlreichen Marktquellen gleichzeitig verarbeitet.";
$about_p_ai_2 = "Zu diesen Quellen können unter anderem gehören:";
$about_li_1 = "Kryptowährungs-Preisfeeds";
$about_li_2 = "Orderbuch-Aktivität";
$about_li_3 = "Daten zu Liquiditätsbewegungen";
$about_li_4 = "Volatilitätsindikatoren";
$about_li_5 = "Blockchain-Transaktionskennzahlen";
$about_li_6 = "Marktstimmungssignale";
$about_li_7 = "Makroökonomische Entwicklungen";
$about_li_8 = "Institutionelle Marktaktivität";
$about_p_ai_3 = "Durch die kontinuierliche Bewertung der Zusammenhänge zwischen diesen Variablen versucht $site_name, Muster zu erkennen, die wertvollen Marktkontext liefern können.";
$about_h2_risk = "Philosophie der Risikobewusstsein";
$about_p_risk_1 = "Verantwortungsvolle Teilnahme an Kryptomärkten erfordert ein klares Verständnis von Risiko. $site_name betont Risikobewusstsein als grundlegenden Bestandteil der Analyse digitaler Vermögenswerte.";
$about_p_risk_2 = "Marktvolatilität, Liquiditätsschwankungen, börsenspezifische Ereignisse, regulatorische Entwicklungen und breitere makroökonomische Bedingungen können sich alle auf die Marktergebnisse auswirken. Nutzer sollten sich daher niemals ausschließlich auf eine einzige Informationsquelle verlassen, wenn sie Entscheidungen treffen.";
$about_h2_global = "Globale Märkte für digitale Vermögenswerte";
$about_p_global_1 = "Kryptomärkte agieren global und umfassen Teilnehmer aus verschiedenen Regionen, Branchen und wirtschaftlichen Umfeldern. Die Infrastruktur von $site_name ist darauf ausgelegt, mehrere Marktsegmente gleichzeitig zu überwachen, sodass Nutzer Entwicklungen in unterschiedlichen Teilen des Krypto-Ökosystems beobachten können.";
$about_p_global_2 = "Diese breitere Perspektive kann dazu beitragen, das Bewusstsein für sich verändernde Marktbedingungen und neu entstehende Trends zu verbessern.";
$about_h2_why = "Warum Nutzer $site_name entdecken";
$about_why_li_1 = "Fortschrittliche KI-gestützte Market Intelligence";
$about_why_li_2 = "Echtzeit-Kryptoüberwachung";
$about_why_li_3 = "Analyseinfrastruktur im institutionellen Stil";
$about_why_li_4 = "Multifaktorielle Marktbewertung";
$about_why_li_5 = "Überwachung von Volatilität und Liquidität";
$about_why_li_6 = "Skalierbare Research-Tools für digitale Vermögenswerte";
$about_why_li_7 = "Risikobewusste Analysemethodik";
$about_h2_forward = "Ausblick";
$about_p_forward_1 = "Während sich die Märkte für digitale Vermögenswerte weiterentwickeln, wird die Bedeutung fortschrittlicher Analyseinfrastruktur voraussichtlich zunehmen. $site_name konzentriert sich weiterhin auf die Entwicklung von Technologien, die ein tieferes Marktverständnis, mehr Transparenz und eine fundiertere Teilnahme am Krypto-Ökosystem unterstützen.";
$about_p_forward_2 = "Durch kontinuierliche Innovation und laufende Forschung möchte $site_name zu einer intelligenteren und stärker datengetriebenen Zukunft der Analyse digitaler Vermögenswerte beitragen.";


// CONTACT PAGE
$contact_h1 = "Kontakt $site_name";
$contact_intro_1 = "Kontaktieren Sie das Team von $site_name, um Plattformzugang zu beantragen, Fragen zu unserer KI-gestützten Krypto-Handelsinfrastruktur zu stellen oder mehr über unsere Umgebung für Market Intelligence bei digitalen Vermögenswerten zu erfahren.";
$contact_intro_2 = "Egal, ob Sie sich für automatisierte Krypto-Analysen, institutionelle Signalinfrastruktur, Volatilitätsüberwachung oder Market Intelligence über mehrere Börsen hinweg interessieren – unser Team leitet Ihre Anfrage gerne an die richtige Abteilung weiter.";
$contact_h2_help = "Wie wir helfen können";
$contact_li_1 = "Anfragen zum Plattformzugang";
$contact_li_2 = "Allgemeine Produktfragen";
$contact_li_3 = "Informationen zur KI-Handelsinfrastruktur";
$contact_li_4 = "Anfragen zur Market Intelligence bei digitalen Vermögenswerten";
$contact_li_5 = "Fragen zu Risikohinweisen und Compliance";
$contact_li_6 = "Technische Unterstützung oder Onboarding-Hilfe";
$contact_h2_send = "Anfrage senden";
$contact_p_send = "Füllen Sie das untenstehende Formular aus – ein Vertreter von $site_name meldet sich gegebenenfalls mit weiteren Informationen bei Ihnen.";
$contact_h2_info = "Kontaktinformationen";
$contact_support_label = "Allgemeiner Support:";
$contact_institutional_label = "Institutionelle Anfragen:";
$contact_disclaimer = "Bitte beachten Sie, dass $site_name keine personalisierte Finanz-, Anlage-, Steuer- oder Rechtsberatung anbietet. Alle Informationen dienen ausschließlich technologischen und informativen Zwecken.";

// TERMS PAGE
$terms_h1 = "Allgemeine Geschäftsbedingungen";
$terms_intro_1 = "Diese Allgemeinen Geschäftsbedingungen regeln den Zugang zur und die Nutzung der Website von $site_name, einschließlich Inhalten, Plattformbeschreibungen, Formularen, Kommunikation und zugehörigen Informationsmaterialien.";
$terms_intro_2 = "Durch den Zugriff auf diese Website bestätigen Nutzer, dass sie diese Allgemeinen Geschäftsbedingungen gelesen, verstanden und akzeptiert haben. Falls ein Nutzer diesen Bedingungen nicht zustimmt, sollte er die Nutzung der Website einstellen.";
$terms_h2_informational = "Informationszweck";
$terms_p_info_1 = "$site_name stellt Informationen zu KI-gestützter Krypto-Handelsinfrastruktur, Market Intelligence für digitale Vermögenswerte, Volatilitätsüberwachung, Liquiditätsanalyse und verwandten Technologien bereit.";
$terms_p_info_2 = "Die Inhalte der Website dienen ausschließlich allgemeinen Informations- und Präsentationszwecken. Nichts auf dieser Website ist als Finanz-, Anlage-, Rechts- oder Steuerberatung oder als Garantie für Handelsergebnisse zu verstehen.";
$terms_h2_no_advice = "Keine Finanzberatung";
$terms_p_no_advice_1 = "$site_name gibt keine personalisierten Empfehlungen darüber ab, ob Nutzer Kryptowährungen, Token, Finanzprodukte oder digitale Vermögenswerte kaufen, verkaufen, halten, handeln, staken, übertragen oder anderweitig damit interagieren sollten.";
$terms_p_no_advice_2 = "Nutzer sollten alle Informationen eigenständig prüfen und sich vor finanziellen Entscheidungen von qualifizierten Fachleuten beraten lassen.";
$terms_h2_user_responsibility = "Verantwortung der Nutzer";
$terms_p_user_1 = "Nutzer sind selbst verantwortlich für ihre Entscheidungen, Risikobewertungen, Kontoaktivitäten, Handelshandlungen, die Einhaltung gesetzlicher Vorschriften und die Nutzung von Drittanbieterdiensten.";
$terms_p_user_2 = "Nutzer sollten sicherstellen, dass Aktivitäten mit digitalen Vermögenswerten in ihrer Rechtsordnung zulässig sind und dass sie alle geltenden Risiken verstehen, bevor sie mit Kryptomärkten interagieren.";
$terms_h2_ai = "KI- und Analysesysteme";
$terms_p_ai_1 = "$site_name kann KI-Systeme, prädiktive Modelle, Marktsignale, automatisierte Analysen oder ausführungsbezogene Technologien beschreiben.";
$terms_p_ai_2 = "Diese Systeme können auf Marktdaten, statistischen Modellen, Machine-Learning-Prozessen und Informationsquellen Dritter basieren. Solche Systeme können ungenau, verzögert, unvollständig, nicht verfügbar oder für bestimmte Nutzerziele ungeeignet sein.";
$terms_h2_availability = "Keine Verfügbarkeitsgarantie";
$terms_p_avail_1 = "$site_name garantiert keinen unterbrechungsfreien Website-Zugang, keine durchgehende Plattformverfügbarkeit, keinen fehlerfreien Betrieb, keine korrekten Marktinformationen und keine Verfügbarkeit bestimmter Funktionen.";
$terms_p_avail_2 = "Dienste, Inhalte, Seiten, Formulare, Integrationen oder Plattformbeschreibungen können jederzeit geändert, ausgesetzt oder eingestellt werden.";
$terms_h2_third_party = "Dienste Dritter";
$terms_p_tp_1 = "Die Website kann auf Börsen, Liquiditätsplätze, Analyseanbieter, Kommunikationstools, Hosting-Dienste oder technische Infrastrukturanbieter Dritter verweisen.";
$terms_p_tp_2 = "$site_name kontrolliert keine Plattformen Dritter und übernimmt keine Verantwortung für deren Verfügbarkeit, Gebühren, Richtlinien, Kontobeschränkungen, Compliance-Verfahren, technische Ausfälle oder Nutzerverluste.";
$terms_h2_prohibited = "Untersagte Nutzung";
$terms_p_prohibited = "Nutzer dürfen diese Website oder verwandte Technologien nicht für rechtswidrige, missbräuchliche, betrügerische, manipulative oder schädliche Zwecke verwenden.";
$terms_li_1 = "Versuch eines unbefugten Zugriffs";
$terms_li_2 = "Übermittlung falscher oder irreführender Informationen";
$terms_li_3 = "Nutzung der Website für rechtswidrige Finanzaktivitäten";
$terms_li_4 = "Beeinträchtigung der Sicherheit oder Funktionalität der Website";
$terms_li_5 = "Kopieren oder Missbrauch von Website-Inhalten ohne Genehmigung";
$terms_li_6 = "Versuch, Compliance- oder technische Kontrollen zu umgehen";
$terms_h2_ip = "Geistiges Eigentum";
$terms_p_ip_1 = "Design, Texte, Markenzeichen, Oberflächenelemente, Grafiken, Struktur und zugehörige Materialien der Website sind Eigentum von $site_name oder an $site_name lizenziert, sofern nicht anders angegeben.";
$terms_p_ip_2 = "Nutzer dürfen Website-Materialien ohne entsprechende Genehmigung nicht reproduzieren, verbreiten, verändern oder kommerziell verwerten.";
$terms_h2_liability = "Haftungsbeschränkung";
$terms_p_liab_1 = "Im gesetzlich maximal zulässigen Umfang haftet $site_name nicht für Verluste, die aus dem Handel mit digitalen Vermögenswerten, Marktvolatilität, technischen Problemen, Ausfällen von Drittanbieterplattformen, ungenauen Daten, Nutzerentscheidungen oder dem Vertrauen auf Website-Inhalte entstehen.";
$terms_p_liab_2 = "Nutzer greifen auf diese Website auf eigenes Risiko zu und nutzen sie auf eigenes Risiko.";
$terms_h2_changes = "Änderungen dieser Bedingungen";
$terms_p_changes_1 = "$site_name kann diese Allgemeinen Geschäftsbedingungen jederzeit aktualisieren. Aktualisierte Bedingungen können auf dieser Seite veröffentlicht werden.";
$terms_p_changes_2 = "Die fortgesetzte Nutzung der Website nach Änderungen bedeutet, dass Nutzer die aktualisierten Bedingungen anerkennen und akzeptieren.";

// PRIVACY PAGE
$privacy_h1 = "Datenschutzerklärung";
$privacy_intro_1 = "$site_name respektiert die Privatsphäre der Nutzer und verpflichtet sich, personenbezogene Daten verantwortungsvoll, transparent und sicher zu verarbeiten.";
$privacy_intro_2 = "Diese Datenschutzerklärung erläutert, welche Informationen erhoben werden können, wenn Nutzer diese Website besuchen, Kontaktformulare übermitteln, Zugang beantragen oder mit Inhalten und plattformbezogener Kommunikation von $site_name interagieren.";
$privacy_h2_collect = "Informationen, die wir erheben können";
$privacy_p_collect_1 = "$site_name kann Informationen erheben, die Nutzer freiwillig über Website-Formulare oder Kommunikationskanäle übermitteln.";
$privacy_li_fname = "Vorname";
$privacy_li_lname = "Nachname";
$privacy_li_email = "E-Mail-Adresse";
$privacy_li_phone = "Telefonnummer";
$privacy_li_inquiry = "Details der übermittelten Anfrage";
$privacy_li_technical = "Grundlegende technische Nutzungsdaten der Website";
$privacy_h2_use = "Wie wir Informationen verwenden";
$privacy_p_use_1 = "Informationen können verwendet werden, um auf Nutzeranfragen zu antworten, Informationen zum Plattformzugang bereitzustellen, die Website-Funktionalität zu verbessern, die Sicherheit zu gewährleisten und relevante Updates zu $site_name zu kommunizieren.";
$privacy_p_use_2 = "Wir können außerdem aggregierte oder nicht identifizierende Daten verwenden, um die Website-Leistung zu analysieren, die Inhaltsstruktur zu verbessern und besser zu verstehen, wie Besucher mit unseren Seiten interagieren.";
$privacy_h2_comm = "Kommunikationszwecke";
$privacy_p_comm_1 = "Wenn ein Nutzer Kontaktinformationen übermittelt, kann $site_name diese Informationen verwenden, um auf die Anfrage zu antworten, Onboarding-Details bereitzustellen, Anfragen zum Plattformzugang zu klären oder relevante Serviceinformationen bereitzustellen.";
$privacy_p_comm_2 = "Nutzer können gegebenenfalls verlangen, dass die Kommunikation eingestellt wird.";
$privacy_h2_cookies = "Cookies und technische Daten";
$privacy_p_cookies_1 = "Diese Website kann Cookies, Analysetools und ähnliche Technologien verwenden, um das Browsing-Erlebnis zu verbessern, die Leistung zu überwachen und die Website-Sicherheit zu unterstützen.";
$privacy_p_cookies_2 = "Zu den technischen Daten können Gerätetyp, Browsertyp, Betriebssystem, Seiteninteraktionen, Verweisinformationen und allgemeine Nutzungsstatistiken gehören.";
$privacy_h2_protection = "Datenschutzmaßnahmen";
$privacy_p_prot_1 = "$site_name wendet angemessene administrative, technische und organisatorische Schutzmaßnahmen an, um übermittelte Informationen vor unbefugtem Zugriff, Missbrauch, Verlust oder Offenlegung zu schützen.";
$privacy_p_prot_2 = "Allerdings kann kein Online-System absolute Sicherheit garantieren. Nutzer sollten es vermeiden, sensible Finanzinformationen, private Wallet-Schlüssel, Passwörter, Börsenzugangsdaten oder vertrauliche Kontozugangsdaten über öffentliche Website-Formulare zu übermitteln.";
$privacy_h2_third = "Drittanbieter";
$privacy_p_third_1 = "$site_name kann Drittanbieter für Hosting, Analysen, Kommunikation, Sicherheit, E-Mail-Zustellung, CRM-Verarbeitung oder technische Infrastruktur einsetzen.";
$privacy_p_third_2 = "Diese Anbieter verarbeiten möglicherweise nur begrenzte Informationen, soweit dies zur Unterstützung der Website-Funktionalität und verwandter Dienste erforderlich ist.";
$privacy_google_choices = 'Sie können verwalten, wie Google Informationen aus Ihren Besuchen verwendet, über die <a href="http://www.google.com/settings/ads" target="_blank" rel="noopener">Google-Anzeigeneinstellungen</a>, können der interessenbezogenen Werbung über das <a href="https://tools.google.com/dlpage/gaoptout" target="_blank" rel="noopener">Google-Analytics-Opt-out-Browser-Add-on</a> widersprechen oder die <a href="https://www.google.com/intl/en/policies/privacy/" target="_blank" rel="noopener">Datenschutzerklärung von Google</a> für weitere Details einsehen.';
$privacy_h2_sale = "Kein Verkauf personenbezogener Daten";
$privacy_p_sale_1 = "$site_name beabsichtigt nicht, über diese Website übermittelte personenbezogene Daten zu verkaufen.";
$privacy_p_sale_2 = "Informationen können nur weitergegeben werden, wenn dies für betriebliche Zwecke, die Einhaltung gesetzlicher Vorschriften, die Kommunikation mit Nutzern, die Betrugsprävention oder servicebezogene Verarbeitung erforderlich ist.";
$privacy_h2_retention = "Datenspeicherung";
$privacy_p_retention = "Personenbezogene Daten können so lange gespeichert werden, wie es erforderlich ist, um Anfragen zu beantworten, Geschäftsunterlagen zu führen, gesetzliche Verpflichtungen zu erfüllen, die Plattformkommunikation zu verbessern oder die Sicherheit und Betrugsprävention zu unterstützen.";
$privacy_h2_rights = "Rechte der Nutzer";
$privacy_p_rights = "Je nach geltendem Recht haben Nutzer möglicherweise Rechte in Bezug auf Zugang, Berichtigung, Löschung, Widerspruch, Einschränkung oder Übertragbarkeit personenbezogener Daten.";
$privacy_h2_intl = "Internationale Nutzung";
$privacy_p_intl_1 = "$site_name kann von Nutzern aus verschiedenen Rechtsordnungen aufgerufen werden. Die Datenschutzbestimmungen können je nach Standort variieren.";
$privacy_p_intl_2 = "Durch die Nutzung dieser Website erkennen Nutzer an, dass Informationen gemäß dieser Datenschutzerklärung und den geltenden betrieblichen Anforderungen verarbeitet werden können.";
$privacy_h2_policy_updates = "Aktualisierungen der Richtlinie";
$privacy_p_updates_1 = "$site_name kann diese Datenschutzerklärung regelmäßig aktualisieren, um Änderungen in Gesetzgebung, Technologie, internen Verfahren oder Website-Funktionalität widerzuspiegeln.";
$privacy_p_updates_2 = "Die fortgesetzte Nutzung der Website nach Aktualisierungen bedeutet, dass Nutzer die überarbeitete Datenschutzerklärung anerkennen.";
// COOKIES PAGE
$cookies_h1 = "Cookie-Richtlinie";
$cookies_intro_1 = "Diese Cookie-Richtlinie erläutert, wie $site_name Cookies, Analysetechnologien und ähnliche Tracking-Tools verwendet, wenn Nutzer auf diese Website zugreifen oder mit ihr interagieren.";
$cookies_intro_2 = "Cookies helfen, die Website-Funktionalität zu verbessern, das Nutzererlebnis zu optimieren, die Leistung zu analysieren und sicherheitsrelevante Prozesse zu unterstützen.";
$cookies_intro_3 = "Durch die fortgesetzte Nutzung dieser Website erkennen Nutzer an, dass bestimmte Cookies und verwandte Technologien gemäß dieser Richtlinie verwendet werden können.";
$cookies_h2_what = "Was sind Cookies?";
$cookies_p_what_1 = "Cookies sind kleine Textdateien, die beim Besuch einer Website auf dem Gerät eines Nutzers gespeichert werden.";
$cookies_p_what_2 = "Diese Dateien können Informationen enthalten, die Websites helfen, wiederkehrende Besucher zu erkennen, Einstellungen zu speichern, die Navigation zu verbessern und die Website-Leistung zu messen.";
$cookies_h2_why = "Warum wir Cookies verwenden";
$cookies_p_why_1 = "$site_name kann Cookies und ähnliche Technologien für verschiedene Zwecke verwenden.";
$cookies_li_1 = "Aufrechterhaltung der Website-Funktionalität";
$cookies_li_2 = "Verbesserung des Nutzererlebnisses";
$cookies_li_3 = "Speicherung von Nutzereinstellungen";
$cookies_li_4 = "Verständnis des Besucherverhaltens";
$cookies_li_5 = "Messung der Website-Leistung";
$cookies_li_6 = "Erkennung technischer Probleme";
$cookies_li_7 = "Unterstützung der Website-Sicherheit";
$cookies_li_8 = "Verhinderung von Missbrauch";
$cookies_h2_essential = "Essenzielle Cookies";
$cookies_p_ess_1 = "Bestimmte Cookies sind für den ordnungsgemäßen Betrieb der Website erforderlich.";
$cookies_p_ess_2 = "Diese Cookies unterstützen Sicherheit, Navigationsfunktionalität, Sitzungsverwaltung und andere zentrale Website-Funktionen.";
$cookies_p_ess_3 = "Ohne essenzielle Cookies funktionieren bestimmte Teile der Website möglicherweise nicht korrekt.";
$cookies_h2_analytics = "Analyse-Cookies";
$cookies_p_an_1 = "Analyse-Cookies helfen uns zu verstehen, wie Besucher mit den Inhalten der Website interagieren.";
$cookies_p_an_2 = "Diese Technologien können Informationen zu Seitenaufrufen, Navigationsmustern, Gerätetypen, Browser-Konfigurationen und allgemeinen Nutzungskennzahlen der Website erfassen.";
$cookies_p_an_3 = "Analysedaten werden in der Regel aggregiert und zur Verbesserung der Website-Leistung und des Nutzererlebnisses verwendet.";
$cookies_h2_functional = "Funktionale Cookies";
$cookies_p_fun_1 = "Funktionale Cookies können verwendet werden, um von Nutzern ausgewählte Einstellungen und Präferenzen zu speichern.";
$cookies_p_fun_2 = "Beispiele hierfür sind Spracheinstellungen, Oberflächeneinstellungen, Anzeigeoptionen oder andere Anpassungsfunktionen.";
$cookies_h2_third = "Technologien Dritter";
$cookies_p_third_1 = "$site_name kann Drittanbieter, Analyseplattformen, Werbetechnologien oder Tools zur Leistungsüberwachung einsetzen.";
$cookies_p_third_2 = "Diese Dritten können eigene Cookies oder Tracking-Technologien setzen, die ihren jeweiligen Datenschutzrichtlinien unterliegen.";
$cookies_p_third_3 = "$site_name kontrolliert nicht die Cookie-Praktiken Dritter und empfiehlt, gegebenenfalls die Datenschutzdokumentation externer Anbieter zu prüfen.";
$cookies_h2_manage = "Verwaltung von Cookies";
$cookies_p_manage_1 = "Die meisten modernen Browser ermöglichen es Nutzern, Cookies über die Browsereinstellungen zu verwalten, einzuschränken oder zu löschen.";
$cookies_p_manage_2 = "Nutzer können Cookies vollständig deaktivieren, wobei bestimmte Website-Funktionen danach möglicherweise nicht wie vorgesehen funktionieren.";
$cookies_p_manage_3 = "Browsereinstellungen bieten in der Regel folgende Optionen:";
$cookies_li_manage_1 = "Alle Cookies blockieren";
$cookies_li_manage_2 = "Vorhandene Cookies löschen";
$cookies_li_manage_3 = "Cookie-Benachrichtigungen erhalten";
$cookies_li_manage_4 = "Bestimmte Cookie-Kategorien einschränken";
$cookies_h2_data = "Datenschutz";
$cookies_p_data = "Cookie-bezogene Informationen können gemäß unserer Datenschutzerklärung und den geltenden Datenschutzgesetzen verarbeitet werden.";
$cookies_h2_policy_updates = "Aktualisierungen der Richtlinie";
$cookies_p_updates_1 = "$site_name kann diese Cookie-Richtlinie regelmäßig aktualisieren, um technologische Änderungen, gesetzliche Anforderungen oder betriebliche Verbesserungen widerzuspiegeln.";
$cookies_p_updates_2 = "Die fortgesetzte Nutzung der Website nach Aktualisierungen stellt eine Anerkennung der überarbeiteten Richtlinie dar.";
// AML PAGE
$aml_h1 = "AML-Richtlinie";
$aml_intro_1 = "$site_name ist sich der Bedeutung der Sensibilisierung für Geldwäschebekämpfung, finanzieller Integrität und verantwortungsvoller Teilnahme an Kryptomärkten bewusst.";
$aml_intro_2 = "Diese AML-Richtlinie erläutert die allgemeinen Grundsätze, die $site_name anwendet, um die rechtswidrige Nutzung kryptobezogener Technologien, verdächtige Finanzaktivitäten, Betrug, Sanktionsumgehung, Terrorismusfinanzierung und andere verbotene Handlungen zu verhindern.";
$aml_h2_purpose = "Zweck dieser Richtlinie";
$aml_p_purpose_1 = "Der Zweck dieser Richtlinie besteht darin, einen verantwortungsvollen Rahmen dafür zu schaffen, wie $site_name die Sensibilisierung für Geldwäschebekämpfung innerhalb des Ökosystems digitaler Vermögenswerte angeht.";
$aml_p_purpose_2 = "Kryptomärkte können grenzüberschreitende Aktivitäten, dezentrale Infrastruktur, Börsen Dritter und externe Wallet-Systeme umfassen. Aus diesem Grund sollten Nutzer verstehen, dass die Compliance-Anforderungen je nach Rechtsordnung, Kontotyp, Börsenanbieter und lokalem regulatorischem Umfeld variieren können.";
$aml_h2_responsible = "Verantwortungsvolle Nutzung von Technologien für digitale Vermögenswerte";
$aml_p_resp_1 = "Von Nutzern wird erwartet, dass sie mit $site_name und verwandten Diensten für digitale Vermögenswerte verantwortungsvoll, rechtmäßig und in Übereinstimmung mit geltenden Vorschriften interagieren.";
$aml_p_resp_2 = "$site_name unterstützt oder fördert nicht die Nutzung von Kryptomärkten, Handelssystemen, automatisierten Technologien oder Analysetools für rechtswidrige Zwecke.";
$aml_li_1 = "Geldwäsche";
$aml_li_2 = "Terrorismusfinanzierung";
$aml_li_3 = "Betrug oder finanzielle Täuschung";
$aml_li_4 = "Sanktionsumgehung";
$aml_li_5 = "Marktmanipulation";
$aml_li_6 = "Nutzung gestohlener Gelder oder kompromittierter Konten";
$aml_li_7 = "Jede nach geltendem Recht untersagte Aktivität";
$aml_h2_exchange = "Compliance von Börsen Dritter";
$aml_p_ex_1 = "$site_name kann auf Börsen oder Liquiditätsumgebungen Dritter verweisen, mit ihnen interagieren oder zugehörige Analyseinfrastruktur bereitstellen.";
$aml_p_ex_2 = "Börsen, Verwahrstellen, Zahlungsdienstleister und andere Anbieter Dritter können eigene Compliance-Verfahren anwenden, darunter Identitätsprüfung, Transaktionsüberwachung, Sanktionsprüfung, Kontobeschränkungen, Herkunftsnachweise für Gelder oder zusätzliche Verifizierungsanforderungen.";
$aml_h2_user_responsibility = "Verantwortung der Nutzer";
$aml_p_user_1 = "Nutzer sind dafür verantwortlich, sicherzustellen, dass ihre Aktivitäten an ihrem Standort rechtmäßig sind und mit den Verpflichtungen relevanter Regulierungsbehörden, Börsen, Finanzinstitute oder Dienstleister übereinstimmen.";
$aml_p_user_2 = "Nutzer dürfen nicht versuchen, Eigentumsverhältnisse zu verschleiern, den Ursprung von Transaktionen zu verbergen, falsche Informationen anzugeben, Verifizierungsprozesse zu umgehen oder die Infrastruktur für digitale Vermögenswerte auf eine Weise zu nutzen, die als verdächtig oder rechtswidrig gelten könnte.";
$aml_h2_suspicious = "Verdächtige Aktivitäten";
$aml_p_suspicious = "Verdächtige Aktivitäten können Verhalten umfassen, das nicht mit der normalen Nutzung übereinstimmt, Versuche, Handelssysteme zu missbrauchen, wiederholte Übermittlung irreführender Informationen, Verbindungen zu eingeschränkten Rechtsordnungen oder Aktivitäten im Zusammenhang mit Betrug, illegalen Geldern oder verbotenen Diensten.";
$aml_h2_evasion = "Keine Umgehung oder Vermeidung";
$aml_p_evasion = "Nutzer dürfen nicht versuchen, Compliance-Kontrollen, technische Beschränkungen, Identitätsprüfungssysteme, geografische Einschränkungen oder Risikoüberwachungsprozesse zu umgehen.";
$aml_h2_policy_updates = "Aktualisierungen der Richtlinie";
$aml_p_updates_1 = "$site_name kann diese AML-Richtlinie von Zeit zu Zeit aktualisieren, um Änderungen der regulatorischen Erwartungen, Marktstandards, internen Verfahren oder Branchenpraktiken für digitale Vermögenswerte widerzuspiegeln.";
$aml_p_updates_2 = "Die fortgesetzte Nutzung der Website nach Aktualisierungen bedeutet, dass Nutzer die überarbeitete Richtlinie anerkennen.";
// RISK PAGE
$risk_h1 = "Risikohinweis";
$risk_intro_1 = "Der Handel mit Kryptowährungen und die Teilnahme an Märkten für digitale Vermögenswerte sind mit erheblichen Risiken verbunden. Preise können sich schnell bewegen, die Liquidität kann sich unerwartet verändern, und die Marktbedingungen können innerhalb kurzer Zeit sehr instabil werden.";
$risk_intro_2 = "Dieser Risikohinweis erläutert wichtige Aspekte, die Nutzer prüfen sollten, bevor sie mit Kryptomärkten, automatisierten Handelstechnologien, KI-generierten Marktsignalen oder kryptobezogener Analyseinfrastruktur interagieren.";
$risk_h2_no_guarantee = "Keine garantierten Ergebnisse";
$risk_p_no_guarantee_1 = "$site_name garantiert keine Gewinne, Kapitalrenditen, Handelserfolge, Signalgenauigkeit, unterbrechungsfreien Zugang oder positive finanzielle Ergebnisse.";
$risk_p_no_guarantee_2 = "Alle auf dieser Website dargestellten Beispiele, Statistiken, Oberflächenelemente, Leistungskennzahlen, Signalindikatoren oder Marktsimulationen dienen ausschließlich Informations- und Veranschaulichungszwecken.";
$risk_h2_volatility = "Volatilität der Kryptomärkte";
$risk_p_vol_1 = "Märkte für digitale Vermögenswerte sind sehr volatil. Preise können durch Liquiditätsengpässe, makroökonomische Nachrichten, regulatorische Entwicklungen, Börsenausfälle, Blockchain-Ereignisse, Anlegerstimmung, Hebelaktivitäten oder Marktmanipulation beeinflusst werden.";
$risk_p_vol_2 = "Volatilität kann zu schnellen Verlusten, plötzlichen Kurslücken, Slippage, Liquidationsereignissen oder der Unfähigkeit führen, Transaktionen zu den erwarteten Preisen auszuführen.";
$risk_h2_ai = "Einschränkungen von KI-Signalen";
$risk_p_ai_1 = "KI-Systeme können große Mengen an Marktdaten analysieren, können jedoch Unsicherheit nicht vollständig ausschließen.";
$risk_p_ai_2 = "KI-gestützte Indikatoren, Handelssignale, Marktklassifizierungen und Prognosemodelle können unvollständig, verzögert, fehlerhaft oder für die persönliche finanzielle Situation eines Nutzers ungeeignet sein.";
$risk_p_ai_3 = "Nutzer sollten sich bei Handels-, Anlage- oder Finanzentscheidungen nicht ausschließlich auf ein KI-Signal verlassen.";
$risk_h2_tech = "Technologie- und Ausführungsrisiko";
$risk_p_tech_1 = "Handelstechnologie kann durch Probleme mit der Internetverbindung, Serverunterbrechungen, Latenz, Softwarefehler, API-Ausfälle, Ausfallzeiten von Börsen, fehlerhafte Datenfeeds oder Einschränkungen der Infrastruktur Dritter beeinträchtigt werden.";
$risk_p_tech_2 = "$site_name garantiert keinen unterbrechungsfreien Zugang zu Daten, Signalen, Plattformfunktionen, Systemen Dritter oder Ausführungsumgebungen.";
$risk_h2_liquidity = "Liquiditäts- und Börsenrisiko";
$risk_p_liq_1 = "Die Liquidität kann zwischen Börsen und digitalen Vermögenswerten erheblich variieren. Manche Märkte weisen möglicherweise eine geringe Orderbuchtiefe, weite Spreads, verzögerte Ausführung oder starke Kursbewegungen in Stressphasen auf.";
$risk_p_liq_2 = "Börsen Dritter können Gebühren, Limits, Beschränkungen, Kontoprüfungen, Auszahlungsverzögerungen, Handelsaussetzungen oder geografische Einschränkungen auferlegen.";
$risk_h2_regulatory = "Regulatorisches Risiko";
$risk_p_reg_1 = "Vorschriften für digitale Vermögenswerte können sich schnell ändern und zwischen Ländern, Regionen und Rechtsordnungen unterschiedlich sein.";
$risk_p_reg_2 = "Regulatorische Änderungen können den Marktzugang, die Verfügbarkeit von Vermögenswerten, den Börsenbetrieb, Meldepflichten, die Besteuerung, Handelsbeschränkungen oder die Plattformfunktionalität beeinträchtigen.";
$risk_h2_user_responsibility = "Verantwortung der Nutzer";
$risk_p_user_1 = "Nutzer sind allein dafür verantwortlich, Risiken zu bewerten, geltendes Recht zu verstehen, ihre finanzielle Situation zu prüfen und eigenständige Entscheidungen zu treffen.";
$risk_p_user_2 = "$site_name bietet keine personalisierte Finanz-, Anlage-, Rechts-, Buchhaltungs- oder Steuerberatung.";
$risk_h2_advice = "Professionellen Rat einholen";
$risk_p_advice_1 = "Nutzer sollten qualifizierte Fachleute konsultieren, bevor sie wesentliche finanzielle Entscheidungen im Zusammenhang mit Kryptowährungen, Handelssystemen, automatisierten Technologien oder Investitionen in digitale Vermögenswerte treffen.";
$risk_p_advice_2 = "Durch die Nutzung dieser Website bestätigen Nutzer, dass sie die mit Märkten für digitale Vermögenswerte verbundenen Risiken verstehen und die Verantwortung für ihre eigenen Entscheidungen übernehmen.";
// EXCHANGES PAGE
$exchanges_h1 = "Unterstützte Börsen";
$exchanges_intro_1 = "$site_name basiert auf einem Multi-Markt-Intelligence-Ansatz, der die Aktivität digitaler Vermögenswerte über ein breites Spektrum an Krypto-Handelsumgebungen hinweg bewertet.";
$exchanges_intro_2 = "Moderne Kryptomärkte funktionieren über zahlreiche Börsen, Liquiditätsanbieter, Derivateplätze und Handelsökosysteme. Das Verständnis der Aktivität in diesen Umgebungen ist essenziell für den Aufbau umfassender Market Intelligence.";
$exchanges_h2_philosophy = "Philosophie der Marktabdeckung";
$exchanges_p_phil_1 = "Statt sich auf einen einzelnen Handelsplatz zu verlassen, basiert $site_name auf dem Konzept der marktweiten Analyse.";
$exchanges_p_phil_2 = "Kryptopreise, Liquiditätsbedingungen, Volatilitätsverhalten und institutionelle Aktivität unterscheiden sich häufig zwischen Börsen. Durch die Beobachtung breiterer Marktbedingungen können Analysemodelle zusätzlichen Kontext zu neu entstehenden Trends und potenziellen Anomalien gewinnen.";
$exchanges_h2_spot = "Überwachung des Spotmarkts";
$exchanges_p_spot_1 = "Spot-Börsen machen einen bedeutenden Teil der globalen Aktivität bei digitalen Vermögenswerten aus.";
$exchanges_p_spot_2 = "Market-Intelligence-Systeme können Spotmarktdaten auswerten, darunter:";
$exchanges_li_spot_1 = "Preisaktivität";
$exchanges_li_spot_2 = "Liquiditätstiefe";
$exchanges_li_spot_3 = "Orderbuchstruktur";
$exchanges_li_spot_4 = "Handelsvolumen";
$exchanges_li_spot_5 = "Verhalten des Geld-Brief-Spreads";
$exchanges_li_spot_6 = "Marktungleichgewichte";
$exchanges_h2_deriv = "Derivatemärkte";
$exchanges_p_deriv_1 = "Krypto-Derivate spielen eine zunehmend wichtige Rolle innerhalb des breiteren Ökosystems für digitale Vermögenswerte.";
$exchanges_p_deriv_2 = "Futures, Perpetual Contracts, Optionen und gehebelte Handelsaktivitäten können die Marktstimmung, Volatilitätsbedingungen und Richtungsdynamik beeinflussen.";
$exchanges_p_deriv_3 = "Die Analyseinfrastruktur kann derivatebezogene Informationen bei der Bewertung breiterer Marktbedingungen berücksichtigen.";
$exchanges_h2_liquidity = "Liquiditätsanalyse";
$exchanges_p_liq_1 = "Liquidität bleibt einer der wichtigsten Faktoren für Marktstabilität und Ausführungsqualität.";
$exchanges_p_liq_2 = "$site_name kann Liquiditätsbedingungen über mehrere Handelsplätze hinweg analysieren, um Folgendes zu erkennen:";
$exchanges_li_liq_1 = "Liquiditätskonzentration";
$exchanges_li_liq_2 = "Plötzliche Liquiditätsabzüge";
$exchanges_li_liq_3 = "Orderbuchdruck";
$exchanges_li_liq_4 = "Ereignisse mit Marktungleichgewicht";
$exchanges_li_liq_5 = "Ungewöhnliches Handelsverhalten";
$exchanges_h2_availability = "Verfügbarkeit von Börsen";
$exchanges_p_avail_1 = "Die Verfügbarkeit von Börsen kann je nach geografischem Standort, Rechtsordnung, Kontoberechtigung, regulatorischen Anforderungen und technischen Einschränkungen variieren.";
$exchanges_p_avail_2 = "Bestimmte Börsen oder Dienste stehen möglicherweise nicht allen Nutzern zur Verfügung und können eigene Beschränkungen, Verifizierungsanforderungen, Gebühren und Betriebsrichtlinien haben.";
$exchanges_h2_third = "Plattformen Dritter";
$exchanges_p_third_1 = "Verweise auf Börsen, Liquiditätsplätze, Broker, Verwahrstellen oder Marktanbieter erfolgen ausschließlich zu Informationszwecken.";
$exchanges_p_third_2 = "$site_name besitzt, betreibt, kontrolliert oder garantiert nicht die Dienste von Börsen Dritter.";
$exchanges_p_third_3 = "Nutzer bleiben dafür verantwortlich, jede Börse, jeden Handelsplatz oder Dienst für digitale Vermögenswerte vor der Nutzung selbst zu prüfen.";
$exchanges_h2_monitoring = "Kontinuierliche Marktüberwachung";
$exchanges_p_mon_1 = "Kryptomärkte sind kontinuierlich aktiv, oft rund um die Uhr, sieben Tage die Woche.";
$exchanges_p_mon_2 = "Da sich die Marktstruktur weiterentwickelt, entstehen neue Börsen, wandert Liquidität, und die Handelsaktivität verändert sich.";
$exchanges_p_mon_3 = "$site_name bemüht sich kontinuierlich, durch eine breite analytische Abdeckung des Ökosystems für digitale Vermögenswerte über sich verändernde Marktbedingungen informiert zu bleiben.";

// ==========================================
// RISK WARNING PAGE
// ==========================================
$page_title_risk_warning = "Risikowarnung | $site_name";
$page_description_risk_warning = "Verstehen Sie die Risiken des automatisierten Krypto-Handels mit $site_name, einschließlich Marktvolatilität, Ausführungsrisiko und regulatorischer Aspekte.";
$risk_warning_breadcrumb_name = "Risikowarnung";
$risk_warning_title = "Risikowarnung";
$risk_warning_intro = "Das Verständnis von Risiken ist der erste Schritt zu selbstbewusstem Handeln.";

$risk_warning_ai_heading = "Wie unser KI-System beim Risikomanagement hilft:";
$risk_warning_ai_1 = "<strong>Algorithmische Effizienz & emotionsloses Trading:</strong> Fortschrittliche Algorithmen analysieren Marktsignale, um Trades objektiv zum optimalen Zeitpunkt auszuführen.";
$risk_warning_ai_2 = "<strong>Datengestützte Strategien:</strong> Die Strategien basieren auf verifizierten Marktmustern und Echtzeitanalysen statt auf Vermutungen.";
$risk_warning_ai_3 = "<strong>Flexible Einstellungen & volle Kontrolle:</strong> Passen Sie Ihre Risikoparameter jederzeit an. Verfolgen Sie alle Guthaben und Trades transparent in Ihrem Dashboard – ohne versteckte Gebühren und mit uneingeschränkten Auszahlungen.";

$risk_warning_disclaimer = "<strong>Haftungsausschluss:</strong> Handel ist stets mit Risiko verbunden. Automatisierte Systeme (einschließlich KI) garantieren keinen Gewinn, können durch Softwarefehler oder unerwartete Marktereignisse ausfallen und erfordern eine Überwachung durch den Nutzer. Die Wertentwicklung der Vergangenheit ist kein Indikator für zukünftige Ergebnisse. Diese Plattform dient ausschließlich Informations- und Marketingzwecken und stellt keine Finanzberatung dar.";

$risk_warning_s1_heading = "1. Allgemeine Risiken und Risiken des Kryptomarkts";
$risk_warning_s1_intro = "Kryptowährungen sind hochvolatile, spekulative Vermögenswerte, die rund um die Uhr und in den meisten Rechtsordnungen mit minimaler regulatorischer Aufsicht gehandelt werden.";
$risk_warning_s1_1 = "Werte können innerhalb kurzer Zeiträume drastisch schwanken, was zu einem vollständigen Verlust des investierten Kapitals führen kann.";
$risk_warning_s1_2 = "Marktwerte können durch regulatorische Änderungen, technische Entwicklungen, Sicherheitsverletzungen oder breitere makroökonomische Ereignisse erheblich beeinflusst werden.";
$risk_warning_s1_3 = "Manche Vermögenswerte können vollständig an Wert verlieren. Investieren Sie nur Mittel, deren Verlust Sie sich leisten können.";

$risk_warning_s2_heading = "2. Ausführungs-, Liquiditäts- und Hebelrisiken";
$risk_warning_s2_1 = "<strong>Marktvolatilität & Liquidität:</strong> Extreme Preisbewegungen (10–20 %+ täglich) oder geringe Liquidität (insbesondere bei kleineren Coins) können zu Verzögerungen, Plattformausfällen und erheblichem Ausführungs-Slippage führen. Stop-Loss-Orders können Verlustgrenzen unter extremen Bedingungen nicht garantieren.";
$risk_warning_s2_2 = "<strong>Hebel- und Margin-Risiken:</strong> Gehebelte Produkte verstärken sowohl Gewinne als auch Verluste, sodass Sie mehr verlieren können als Ihre ursprüngliche Einzahlung. Etwa 70–80 % der Konten von Kleinanlegern verlieren beim Handel mit gehebelten Produkten Geld.";

$risk_warning_s3_heading = "3. Technische Risiken, Cybersicherheitsrisiken und Risiken durch Dritte";
$risk_warning_s3_1 = "<strong>Technische Faktoren:</strong> Online-Handel birgt naturgemäß Risiken durch Internetunterbrechungen, Hardware-/Softwarefehler und Nichtverfügbarkeit von Diensten.";
$risk_warning_s3_2 = "<strong>Cybersicherheit:</strong> Kryptokonten sind häufige Ziele von Phishing, Malware und Hackerangriffen. Transaktionen sind unumkehrbar; die Kompromittierung Ihrer Zugangsdaten kann zu einem dauerhaften Verlust führen.";
$risk_warning_s3_3 = "<strong>Plattformen Dritter:</strong> Diese Website kann Nutzer mit Plattformen Dritter verbinden. Wir kontrollieren, unterstützen oder garantieren weder deren Sicherheit noch deren Betrieb oder Zahlungsfähigkeit. Führen Sie stets Ihre eigene Sorgfaltsprüfung durch, bevor Sie Gelder auf externen Plattformen einzahlen.";

$risk_warning_s4_heading = "4. Regulatorische Bestimmungen, Steuern und Schlussbestimmungen";
$risk_warning_s4_1 = "<strong>Rechtliche Compliance & Steuern:</strong> Regulatorische Rahmenbedingungen variieren stark und ändern sich schnell. Nutzer sind allein dafür verantwortlich, sicherzustellen, dass ihre Handelsaktivitäten den lokalen Gesetzen entsprechen, und ihre eigenen steuerlichen Pflichten zu erfüllen.";
$risk_warning_s4_2 = "<strong>Keine Gewinngarantien:</strong> Es gibt keinen „sicheren“ oder risikofreien Krypto-Handel. Jegliche Renditeangaben oder Leistungsbeispiele sind rein hypothetisch.";
$risk_warning_s4_3 = "<strong>Eignung:</strong> Wenn Sie die Risiken nicht vollständig verstehen, auf lebensnotwendige Mittel angewiesen sind oder mit geliehenem Geld handeln, ist der Krypto-Handel nicht für Sie geeignet. Konsultieren Sie im Zweifelsfall einen unabhängigen, lizenzierten Finanzberater.";

$risk_warning_contact = "<strong>Kontakt:</strong> Bei Fragen zu dieser Erklärung oder um eine Anfrage zu stellen, wenden Sie sich bitte über das Kontaktformular auf unserer Website an unser offizielles Kundensupport-Team.";
$footer_risk_warning = "Risikowarnung";

$lang_loaded = true;

?>
