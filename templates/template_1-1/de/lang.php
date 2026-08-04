<?php
require __DIR__ . '/../lang.php';
$site_lang = 'de-DE';
$form_language = 'de'; // matches this page's own language, not the offer's global default

// ===================================================================
// GERMAN (de-DE) TRANSLATION OVERRIDES
// Identity / config / pricing values ($site_name, $site_url, $site_domain,
// $app_price, $rating_value, $rating_count, $review_count, $app_currency,
// $adress_name, $site_gmail, $about_image, $footer_logo_name,
// $quiz_consultant_name, $footer_copyright) are intentionally NOT overridden
// so they keep flowing through from ../lang.php unchanged.
// ===================================================================

$footer_contact_address = "Adresse: $adress_name";
$footer_contact_email = "E-Mail: $site_gmail";

$feedback_strong_1 = "Elias, 31, Hamburg";
$feedback_strong_2 = "Sophie, 36, München";
$feedback_strong_3 = "Lukas, 42, Köln";
$feedback_strong_4 = "Miriam, 47, Stuttgart";

$page_title_main = "$source — Offizielle Website | Trading-Plattform";
$page_description_main = "$source — offiziell und verifiziert. 🚀 KI-Autopilot für maximale Sicherheit. ✅ Vertrauenswürdige Plattform mit Kapitalschutz und beständigen Ergebnissen. 🔒 Starten Sie noch heute. ⭐";


// ==========================================
// CHAT-QUIZ
// ==========================================

$quiz_consultant_role = 'Onboarding-Assistentin';

$quiz_text_welcome   = "Hallo! Hier ist $quiz_consultant_name, Ihre persönliche Onboarding-Assistentin bei $site_name. Ausgezeichnete Neuigkeiten: Ihr Zugang ist offiziell vorab genehmigt. Lassen Sie uns jetzt gemeinsam Ihr professionelles Profil einrichten!";
$quiz_text_q1 = "Um die vollständige regulatorische und rechtliche Konformität sicherzustellen, bestätigen Sie bitte Ihr aktuelles Wohnsitzland: $country_name";
$quiz_text_a1_yes    = "Ja, das ist mein aktueller Wohnsitz";
$quiz_text_a1_no     = "Nein";

$quiz_text_q2 = "Perfekt. Bitte wählen Sie die passende Altersgruppe aus, damit wir die für Sie geeignetsten Finanzinstrumente ermitteln können:";

$quiz_text_q3        = "Steht ein aktives Bankkonto oder eine Kreditkarte zur Verfügung, um regelmäßige tägliche Dividendenzahlungen zu empfangen?";
$quiz_text_a3_yes    = "Ja, ein aktives Konto ist vorhanden";
$quiz_text_a3_no     = "Noch nicht vorhanden";

$quiz_text_q4        = "Bitte geben Sie Ihre wichtigste persönliche Einkommensquelle an. (Dieser Parameter hilft uns, die Risikomanagement-Einstellungen des Systems für Sie anzupassen.)";
$quiz_text_a4_1      = "Festanstellung / Selbstständigkeit";
$quiz_text_a4_2      = "Passives Einkommen / Persönliche Ersparnisse";
$quiz_text_a4_3      = "Sonstige Quellen";

$quiz_text_q5 = "Großartig! Als letzter Schritt folgt eine kurze telefonische Verifizierung durch unseren Manager, um Ihre Registrierung zu bestätigen. Wir rufen zwischen 11:00 und 20:00 Uhr an. Können Sie das Gespräch entgegennehmen?";
$quiz_text_a5_yes    = "Ja, dieser Zeitraum passt mir gut";
$quiz_text_a5_no     = "Bitte rufen Sie mich sofort an";

$quiz_text_loader    = "Die angefragten Optionen werden analysiert und die sicheren Parameter Ihres Kontos werden initialisiert …";
$quiz_text_final_ttl = "Konto erfolgreich freigeschaltet! 🎉 Ihr sicherer digitaler Arbeitsbereich ist vollständig eingerichtet. Bitte schließen Sie unten die letzten Verifizierungsschritte ab, um tägliche Auszahlungen zu gewährleisten:";

$quiz_placeholder_fname = "Vorname";
$quiz_placeholder_lname = "Nachname";
$quiz_placeholder_email = "E-Mail-Adresse";
$quiz_placeholder_phone = "Telefonnummer";
$quiz_btn_submit = "Trading aktivieren";
$quiz_text_typing       = "schreibt gerade eine Nachricht …";
$quiz_text_processing   = "Anfrage wird verarbeitet …";


// ABOUT US PAGE
$page_title_about = "Über uns | $source – Unsere Mission und unser Team";
$page_description_about = "Erfahren Sie, was $source antreibt: unsere Werte, unsere Ziele und das Expertenteam hinter der Plattform. Entdecken Sie, wie wir Sicherheit, Transparenz, Nutzerorientierung und Innovation miteinander verbinden.";

// TERMS & CONDITIONS PAGE
$page_title_conditions = "Allgemeine Geschäftsbedingungen | $source – Regeln und Richtlinien";
$page_description_conditions = "Lesen Sie die Allgemeinen Geschäftsbedingungen von $source. Dieses Dokument beschreibt die Pflichten der Nutzer sowie die Richtlinien der Plattform und sorgt für vollständige Transparenz und rechtliche Klarheit.";

// CONTACT PAGE
$page_title_contact = "Kontakt | $source – Support und Unterstützung";
$page_description_contact = "Fragen zur Registrierung, zu Ihrem Konto oder zu Transaktionen? Kontaktieren Sie $source – unser Support-Team antwortet schnell, professionell und zuverlässig.";

// FAQ PAGE
$page_title_faq = "Häufig gestellte Fragen | $source – Antworten und Informationen";
$page_description_faq = "Finden Sie klare und verständliche Antworten auf die wichtigsten Fragen zu Einzahlungen, Auszahlungen, Sicherheit und Trading bei $source. Unser Support-Team steht Ihnen jederzeit für weitere Fragen zur Verfügung.";

// PRIVACY POLICY PAGE
$page_title_private = "Datenschutzerklärung | Schutz Ihrer personenbezogenen Daten";
$page_description_private = "Erfahren Sie, wie wir Ihre personenbezogenen Daten erheben, verarbeiten und schützen. Unsere Datenschutzerklärung steht für Transparenz, Sicherheit und einen verantwortungsvollen Umgang mit Daten.";

// REGISTRATION PAGE
$page_title_register = "$source | Zugang zur Plattform | Schnelle Registrierung";
$page_description_register = "Registrieren Sie sich schnell und unkompliziert bei $source und erhalten Sie innerhalb weniger Minuten vollen Zugriff auf alle Funktionen der Plattform. Geben Sie Ihre Daten ein und legen Sie sofort los.";

// ---------------------------------------------------------------------------------------------------

// HEADER FOR ALL PAGES
$text_why_invest = "Warum investieren?";
$text_how_to_invest = "So investieren Sie";
$text_who_we_are = "Über uns";
$text_investment_risks = "Anlagerisiken";
$text_benefits = "Vorteile";
$text_faq = "FAQ";
$text_log_in = "Anmelden";
$text_sign_up = "Registrieren";

// ---------------------------------------------------------------------------------------------------

// FOOTER FOR ALL PAGES

$footer_link_why_invest = "Warum investieren?";
$footer_link_how_to_invest = "So investieren Sie";
$footer_link_investment_risks = "Anlagerisiken";
$footer_link_benefits = "Vorteile";
$footer_link_faq = "FAQ";
$footer_link_who_we_are = "Über uns";
$footer_link_contact = "Kontakt";
$footer_link_privacy_policy = "Datenschutzerklärung";
$footer_link_terms_conditions = "Allgemeine Geschäftsbedingungen";
$footer_link_registration = "Registrierung";

$footer_contact_title = "Kontaktinformationen";
$footer_lang_switcher_title = "Sprache";

$footer_description = "$source bietet eine zuverlässige und sichere Online-Trading-Plattform, die Finanzgeschäfte verständlich, transparent und effizient macht. Ob Sie Einsteiger oder erfahrener Anleger sind – unsere Lösung verbindet leistungsstarke Werkzeuge, engagierten Support und eine intuitive Benutzeroberfläche. Tausende Nutzer weltweit vertrauen $source wegen seiner Transparenz, seiner hohen Sicherheitsstandards und seiner konsequenten Kundenorientierung. Der Schutz Ihrer Daten und Ihres Kapitals bleibt unsere oberste Priorität und wird durch modernste Sicherheitstechnologien gestützt. Werden Sie Teil der $source-Community und investieren Sie mit Vertrauen.";

// ---------------------------------------------------------------------------------------------------

// FORMS (ALL SECTIONS)
$placeholder_fname = "Vorname";
$placeholder_lname = "Nachname";
$placeholder_email = "E-Mail-Adresse";
$button_sign_up = "Registrieren";

// ---------------------------------------------------------------------------------------------------

// HERO SECTION
$heading_main = "$source-Plattform";
$text_intro = "Starten Sie Ihren Weg als Anleger mit $source – einer intelligenten Plattform, die künstliche Intelligenz nutzt, um automatisch an den Aktien- und Kryptomärkten zu investieren. Beginnen Sie bereits ab $currency, ganz ohne Vorerfahrung, und profitieren Sie von Echtzeitanalysen, die auf optimale Ergebnisse ausgelegt sind.";

// WHY INVEST SECTION
$heading_reasons = "Warum es sich lohnt, mit $source zu investieren";
$text_protect_capital = "Schützen Sie Ihr Kapital vor der Inflation und bauen Sie eine vorausschauende Strategie auf";
$text_inflation = "Die Inflation verringert die Kaufkraft Ihres Geldes Jahr für Jahr. Statt Ersparnisse ungenutzt liegen zu lassen, können durchdachte Anlagestrategien zu langfristigem Wachstum beitragen. Automatisierte Systeme sorgen für mehr Stabilität und helfen Ihnen, ein solideres finanzielles Fundament aufzubauen.";
$heading_auto_investing = "Automatisiertes Investieren – ganz ohne Markterfahrung";
$text_auto_investing = "$source verwaltet Ihre Anlagen mithilfe fortschrittlicher KI-Technologie. Sie müssen keine Charts auswerten und die Märkte nicht ständig beobachten – das System erkennt Chancen in Echtzeit und setzt Ihr Kapital strategisch ein. So investieren Sie effizient und sparen wertvolle Zeit.";
$heading_min_invest = "Investieren ab $currency – einfach und für jeden zugänglich";
$text_min_invest = "Schon mit einer Ersteinlage ab $currency erhalten Sie Zugang zur leistungsstarken KI-Technologie von $source, die auf nachhaltiges Wachstum ausgelegt ist. Ideal für alle, die ohne große Hürden einsteigen möchten.";
$heading_control = "Volle Kontrolle und vollständige Transparenz";
$text_control = "Mit $source behalten Sie jederzeit die volle Kontrolle über Ihr Kapital. Gewinne können Sie ganz nach Wunsch reinvestieren oder auszahlen lassen. Die Plattform ist transparent, fair und frei von versteckten Gebühren.";
$button_signup = "Jetzt registrieren";

// CALCULATOR SECTION
$text_expected_returns = "Welche realistischen Renditen sind mit $source möglich?";
$text_my_investment = "MEINE ANLAGE:";
$text_usage_period = "ZEITRAUM:";
$text_days = "Tage";

// HOW AI INVESTING WORKS
$text_h2_ai_investments = "So funktioniert KI-gestütztes Investieren mit $source";
$text_h3_registration = "Schnelle Registrierung – in wenigen Minuten startklar mit $source";
$text_p_registration = "Nach der Registrierung werden Sie von einem persönlichen Kundenbetreuer unterstützt. In der Regel ist Ihr Konto bereits nach wenigen Minuten einsatzbereit.";
$text_h3_trading_approach = "Individuelle Strategie für beständige Ergebnisse";
$text_p_trading_approach = "Mit $source profitieren Sie von einer Anlagestrategie, die auf Ihre finanziellen Ziele und Ihre Risikobereitschaft zugeschnitten ist – für ein stetiges und nachhaltiges Wachstum.";
$text_h3_ai_trading = "Automatische Marktbeobachtung und KI-gestützte Entscheidungen";
$text_p_ai_trading = "$source analysiert die Märkte in Echtzeit mithilfe fortschrittlicher künstlicher Intelligenz, erkennt Chancen und führt Trades automatisch aus – präzise, effizient und ohne manuelles Eingreifen.";
$text_h3_profit_flexibility = "Flexible Gewinnverwaltung";
$text_p_profit_flexibility = "Entscheiden Sie jederzeit selbst, ob Sie Ihre Gewinne auszahlen lassen oder für weiteres Wachstum reinvestieren möchten. Ihr Kapital bleibt dabei jederzeit verfügbar.";

// RISK MANAGEMENT
$text_h2_risk_control = "Risikomanagement und Kapitalschutz mit $source";
$text_h3_ai_analysis = "Intelligente Marktanalyse durch selbstlernende KI";
$text_p_ai_analysis = "$source setzt fortschrittliche selbstlernende Algorithmen ein, die enorme Datenmengen in Echtzeit verarbeiten – darunter Kursbewegungen, Handelsvolumina, Nachrichtenereignisse, die Stimmung in sozialen Medien, makroökonomische Indikatoren und technische Marktmuster. Die KI erkennt verborgene Chancen, bewertet Wahrscheinlichkeiten und filtert Marktphasen mit hohem Risiko automatisch heraus, um präzise und objektive Handelssignale zu erzeugen. Das System passt sich fortlaufend an veränderte Marktbedingungen an und bringt Renditepotenzial und Risiko in ein ausgewogenes Verhältnis – die Grundlage für eine widerstandsfähige, langfristig ausgerichtete Anlagestrategie.";
$text_h3_custom_risk = "Ein individuelles Risikoprofil, das zu Ihnen passt";
$text_p_custom_risk = "Jeder Anleger verfolgt eigene Ziele. Die einen setzen auf Wachstum, die anderen auf den Erhalt ihres Kapitals. Bei $source legen Sie Ihr Risikoprofil selbst fest – von konservativ über ausgewogen bis hin zu wachstumsorientiert. Anschließend optimiert die KI fortlaufend Faktoren wie Positionsgrößen, Stop-Loss-Niveaus, Take-Profit-Ziele und Handelsfrequenz. So bleibt Ihre Strategie jederzeit im Einklang mit Ihren Zielen und Ihrem persönlichen Sicherheitsbedürfnis.";
$text_h3_transparency = "Vollständige Transparenz und volle Kontrolle über Ihr Kapital";
$text_p_transparency = "Transparenz ist ein Grundprinzip von $source. Jede Transaktion – ob Kauf, Verkauf, Anpassung oder Gebühr – wird erfasst und in Echtzeit angezeigt. Es gibt keine versteckten Kosten und keine unangenehmen Überraschungen. Ihr Dashboard bietet einen klaren Überblick über Kontostände, Transaktionshistorie, Gewinn- und Verlustentwicklung, Statistiken und Risikoexposition. Sie behalten jederzeit die Kontrolle, während die Plattform für Sie arbeitet.";

// BENEFITS
$text_h2_benefits = "Die Vorteile von $source – systematisch investieren für langfristiges Wachstum";
$text_h3_ai_investing = "Investieren mit fortschrittlicher KI – präzise und mühelos";
$text_p_ai_investing = "Sie müssen keine Stunden mit dem Studium von Charts oder Finanznachrichten verbringen. Die KI von $source arbeitet rund um die Uhr: Sie wertet Tausende von Marktsignalen aus, erkennt Muster innerhalb von Millisekunden, prognostiziert Bewegungen mit bemerkenswerter Genauigkeit und führt Trades zum optimalen Zeitpunkt aus. Erleben Sie professionelles algorithmisches Investieren – ganz ohne technisches Fachwissen.";
$text_h3_easy_investing = "Einfaches und sicheres Investieren für alle";
$text_p_easy_investing = "$source wurde entwickelt, um das Investieren unabhängig von Erfahrung und verfügbarem Kapital zugänglich zu machen. Die Plattform bietet eine intuitive Benutzeroberfläche, unkomplizierte Einrichtungsschritte und leicht verständliche Lerninhalte in Ihrer bevorzugten Sprache. Selbst Erstanleger können ihre erste automatisierte Strategie innerhalb von 10 bis 15 Minuten aktivieren. Video-Tutorials, Anleitungen und ein reaktionsschneller Kundenservice stehen Ihnen jederzeit zur Verfügung.";
$text_h3_support = "Engagierter Support, der auf Ihren Erfolg ausgerichtet ist";
$text_p_support = "Nach Ihrer ersten Einzahlung wird Ihnen ein persönlicher Berater zugewiesen. Er hilft Ihnen dabei, Ihr Risikoprofil zu bestimmen, erklärt Ihnen die Funktionen der Plattform, empfiehlt passende Startparameter und begleitet Sie während Ihrer gesamten Zeit bei $source.";
$text_h3_opportunities = "Unbegrenztes Potenzial – Wachstum, das mit Ihrem Kapital mitskaliert";
$text_p_opportunities = "Mit $source arbeitet Ihr Kapital weiter, während Sie reisen, entspannen oder schlafen. Automatisierte Optimierung und die Wiederanlage von Gewinnen können langfristig einen Zinseszinseffekt entfalten. Kein emotionsgetriebenes Trading, kein ständiger Blick auf den Bildschirm – prüfen Sie Ihre Ergebnisse einfach von Zeit zu Zeit und greifen Sie bei Bedarf auf Ihre Gewinne zu. Ein praxisnaher Weg, um sich eine nachhaltige Quelle passiven Einkommens aufzubauen.";

// TESTIMONIALS
$feedback_h2_title = "Das sagen unsere Nutzer";

$feedback_h3_1 = "Von $currency zu einem verlässlichen Zusatzeinkommen";
$feedback_p_1 = "Ich hatte zuvor keinerlei Anlageerfahrung, und trotzdem lief alles vollautomatisch. Schon nach kurzer Zeit sah ich die ersten positiven Ergebnisse und freue mich heute über ein regelmäßiges Zusatzeinkommen.";

$feedback_h3_2 = "Perfekt für Einsteiger – einfach und wirkungsvoll";
$feedback_p_2 = "Der Einstieg bei $source war überraschend unkompliziert. Dank der persönlichen Betreuung erziele ich heute beständige Ergebnisse, ganz ohne unnötigen Stress.";

$feedback_h3_3 = "Endlich arbeitet mein Kapital für mich";
$feedback_p_3 = "Statt meine Ersparnisse ungenutzt liegen zu lassen, investiere ich sie jetzt klug. $source liefert verlässliche Ergebnisse, ohne dass ich mich ständig darum kümmern muss.";

$feedback_h3_4 = "Finanzielle Freiheit – egal, wo ich gerade bin";
$feedback_p_4 = "Ich wollte reisen und gleichzeitig weiter Einkommen erzielen. Mit $source kann ich meine Anlagen von überall auf der Welt verfolgen und jederzeit auf meine Erträge zugreifen.";

// PARTNERS
$partners_h2_title = "Partner und strategische Kooperationen";


// FAQ & CONTACT
$faq_h2_title = "Häufig gestellte Fragen – klare und verständliche Antworten";
$contact_h2_title = "Nehmen Sie Kontakt mit uns auf";

$lang['faq_q1'] = 'Wie viel Kapital benötige ich für den Einstieg bei %s?';
$lang['faq_a1'] = 'Sie können bereits ab %s starten. Viele Nutzer beginnen mit einem kleineren Betrag, um die Plattform kennenzulernen, und erhöhen ihre Anlage im Laufe der Zeit schrittweise – passend zu ihren Zielen und ihrer Risikobereitschaft.';

$lang['faq_q2'] = 'Wie lange dauern Auszahlungen bei %s?';
$lang['faq_a2'] = 'Auszahlungsanfragen werden in der Regel innerhalb von 24 Stunden bearbeitet. Je nach Zahlungsdienstleister und Bank kann die Gutschrift anschließend 1 bis 3 Werktage in Anspruch nehmen.';

$lang['faq_q3'] = 'Wie schützt %s meine Anlage?';
$lang['faq_a3'] = 'Als moderne Anlageplattform setzt %s auf mehrere Sicherheitsebenen: verschlüsselte Datenübertragung, Verfahren zur Kontoverifizierung und eine kontinuierliche Risikoüberwachung. Zusätzlich können Sie die Sicherheitseinstellungen in Ihrem Profil anpassen, um Ihr Konto noch besser zu schützen.';

$lang['faq_q4'] = 'Benötige ich Vorerfahrung, um %s zu nutzen?';
$lang['faq_a4'] = 'Überhaupt nicht. %s ist so gestaltet, dass sich auch Einsteiger sofort zurechtfinden. Die Plattform führt Sie Schritt für Schritt durch Einrichtung und Nutzung – und lässt Ihnen zugleich die Freiheit, Einstellungen jederzeit anzupassen, wenn Sie mehr Kontrolle über Ihre Anlagestrategie wünschen.';

// ---------------------------------------------------------------------------------------------------

// ABOUT US PAGE
$about_heading = "Über uns";

$about_text_1 = "$source wurde mit einer klaren Mission gegründet: jedem Anleger – vom absoluten Einsteiger bis zum erfahrenen Profi – ein sicheres, modernes und vollständig transparentes Umfeld für automatisiertes Investieren in Aktien und Kryptowährungen zu bieten. Wir sind überzeugt, dass langfristiger Erfolg an den Finanzmärkten auf Klarheit, Offenheit und gegenseitigem Vertrauen beruht und nicht auf Zufall. Deshalb folgt jede Interaktion mit der Plattform – von der Registrierung bis zur Gewinnauszahlung – genau diesen Grundsätzen. Jeder Prozess, jede Transaktion und jede Anlageentscheidung basiert auf objektiven Daten und bleibt nachvollziehbar, ohne verborgene Mechanismen oder undurchsichtige Abläufe.";

$about_text_2 = "In unserem Team arbeiten hochqualifizierte Spezialisten zusammen: Entwickler für KI und algorithmischen Handel, Finanzanalysten mit langjähriger Erfahrung an den globalen Märkten, Cybersicherheitsexperten und Compliance-Fachleute. Wir entwickeln nicht nur Technologie – wir überwachen, testen und verbessern jede Komponente der Plattform kontinuierlich. Von der Qualität der Echtzeit-Marktdaten über die Stabilität der Serverinfrastruktur bis hin zur Präzision der Handelssignale durchläuft jedes Element strenge Qualitätsprüfungen und unabhängige Audits. Unser Ziel sind verlässliche, reproduzierbare und sinnvolle Innovationen, die für unsere Nutzer echten Mehrwert schaffen.";

$about_image_alt = "Unser Team";

$about_text_3 = "Der Schutz Ihrer personenbezogenen Daten und Ihrer finanziellen Werte zählt zu unseren höchsten Prioritäten. $source arbeitet nach international anerkannten Sicherheitsstandards, einschließlich der Vorgaben von DSGVO und PCI-DSS, und setzt moderne Verschlüsselungstechnologien wie TLS 1.3+ und AES-256 ein. Kundengelder werden auf getrennt geführten Konten bei regulierten Finanzinstituten verwahrt. Unabhängige Penetrationstests und umfassende Sicherheitsprüfungen stellen sicher, dass Nutzerdaten und Vermögenswerte auf einem Niveau geschützt sind, das mit großen Banken- und Anlagesystemen vergleichbar ist.";

$about_text_4 = "Technologie ist unverzichtbar – doch wir wissen, dass erfolgreiches Investieren mehr erfordert als Algorithmen allein. Deshalb verbinden wir leistungsstarke Automatisierung mit herausragender persönlicher Betreuung. Jedem registrierten Nutzer wird ein fester Kundenbetreuer zugewiesen: ein kompetenter Ansprechpartner, der Strategien auf individuelle Ziele abstimmt, Funktionen erklärt, Fragen beantwortet und Sie dauerhaft begleitet. Keine anonymen Chatbots, sondern echte Menschen, die sich für Ihren finanziellen Fortschritt einsetzen.";

$about_text_5 = "Innovation ist für uns kein Schlagwort, sondern tägliche Praxis. Unser Team beobachtet laufend neue Marktentwicklungen, verbessert Machine-Learning-Modelle, bindet zusätzliche Informationsquellen ein und entwickelt Funktionen, die das Investieren effizienter machen. Jede Weiterentwicklung wird anhand historischer Daten und in kontrollierten Live-Umgebungen getestet, bevor sie für Nutzer freigegeben wird. Wir versprechen keine Wunder und keine garantierten Ergebnisse. Stattdessen stellen wir fortschrittliche Werkzeuge bereit, die Anlegern einen Vorsprung in Märkten verschaffen, in denen Geschwindigkeit, Präzision und Anpassungsfähigkeit entscheidend sind.";

$about_text_6 = "Für Tausende von Nutzern war $source der erste ernsthafte Schritt in das automatisierte Investieren. Viele begannen mit überschaubarem Kapital und einem konservativen Risikoprofil und haben ihr Portfolio anschließend Schritt für Schritt ausgebaut – dank beständiger Ergebnisse, Transparenz und persönlicher Betreuung. Wir sind stolz darauf, neue finanzielle Möglichkeiten nicht nur erfahrenen Anlegern zu eröffnen, sondern auch all jenen, die das Investieren bislang für zu kompliziert, zu zeitaufwendig oder schlicht unerreichbar hielten. Mit geprüfter Technologie und einem engagierten Team im Rücken kann der Einstieg zugleich einfach und sicher sein.";

$about_text_7 = "Kurz gesagt: $source ist weit mehr als eine Trading-Plattform. Es ist ein umfassendes Ökosystem, das auf Transparenz, Professionalität und Vertrauen aufbaut. Indem wir modernste künstliche Intelligenz mit menschlicher Expertise, diszipliniertem Risikomanagement und engagierter Betreuung verbinden, möchten wir ein verlässlicher, langfristiger Partner beim Aufbau Ihrer finanziellen Zukunft sein. Mit $source investieren Sie nicht blind, sondern strukturiert, souverän und mit vollständiger Kontrolle über Ihre Entscheidungen.";


// ---------------------------------------------------------------------------------------------------
// TERMS & CONDITIONS
$terms_heading = "Allgemeine Geschäftsbedingungen";

$terms_text_1 = "Dieses Dokument enthält die allgemeinen Geschäftsbedingungen (die 'Bedingungen'), die die Nutzung der Plattform $source regeln. Es legt die Rechte und Pflichten zwischen Ihnen als Nutzer und dem Betreiber der Plattform fest. Bitte lesen Sie diese Bedingungen sorgfältig und vollständig, bevor Sie die Plattform nutzen, ein Konto eröffnen oder Transaktionen durchführen. Sie bilden die rechtliche Grundlage Ihres Verhältnisses zur Plattform und sind für beide Seiten verbindlich.";

$terms_text_2 = "Mit der Registrierung, der Anmeldung, der Nutzung von Funktionen der Plattform oder jeder sonstigen Aktivität auf $source erklären Sie sich ausdrücklich und vollumfänglich mit diesen Allgemeinen Geschäftsbedingungen einverstanden. Die Plattform darf ausschließlich von Personen genutzt werden, die mindestens 18 Jahre alt und uneingeschränkt geschäftsfähig sind. Minderjährigen sowie Personen ohne volle Geschäftsfähigkeit ist die Nutzung untersagt. Sollten wir einen Verstoß gegen diese Altersanforderungen vermuten, behalten wir uns das Recht vor, das betreffende Konto zu sperren, einzuschränken oder dauerhaft zu schließen.";

$terms_text_3 = "Der Betrieb der Plattform kann gelegentlich durch technische Störungen, Wartungsarbeiten, Software-Updates oder Serviceausfälle beeinträchtigt werden, etwa infolge von Marktvolatilität, erhöhter Serverauslastung oder externer Ereignisse. Wir sind bestrebt, eine hohe Verfügbarkeit sicherzustellen, können einen unterbrechungsfreien Zugang jedoch nicht garantieren. Funktionen, Algorithmen, Preisstrukturen und verfügbare Märkte können jederzeit erweitert, geändert, eingeschränkt oder eingestellt werden, ohne dass daraus Ansprüche gegenüber $source entstehen.";

$terms_text_4 = "Sämtliche auf der Plattform verfügbaren Inhalte – einschließlich Texte, Grafiken, Gestaltungselemente, Software, Algorithmen, Marken, Logos und KI-generierter Analysen – sind durch Rechte des geistigen Eigentums geschützt und bleiben Eigentum von $source oder seiner Lizenzgeber. Jede Vervielfältigung, Verbreitung, öffentliche Wiedergabe, Bearbeitung oder kommerzielle Nutzung ohne unsere vorherige schriftliche Zustimmung ist ausdrücklich untersagt und kann zivil- oder strafrechtliche Folgen haben.";

$terms_text_5 = "Als Nutzer sind Sie dafür verantwortlich, dass alle uns übermittelten Angaben – insbesondere Identitäts-, Kontakt- und Zahlungsdaten – richtig, vollständig und aktuell sind. Die Angabe falscher, irreführender oder unvollständiger Informationen kann zu Kontobeschränkungen, verzögerten Auszahlungen, einer Sperrung des Kontos oder rechtlichen Schritten führen. Personenbezogene Daten werden ausschließlich gemäß unserer Datenschutzerklärung und den geltenden Datenschutzvorschriften verarbeitet. Dabei halten wir hohe Standards in Bezug auf Sicherheit, Vertraulichkeit und Transparenz ein.";

$terms_text_6 = "Sämtliche Anlage- und Handelsentscheidungen, die über $source getroffen werden – ob manuell ausgeführt oder KI-gestützt automatisiert – liegen allein in Ihrer Verantwortung und erfolgen auf Ihr eigenes Risiko. $source stellt die technische Infrastruktur sowie Analysewerkzeuge bereit, erbringt jedoch keine individuelle Finanzberatung, spricht keine Anlageempfehlungen aus und garantiert keine Gewinne. Finanzmärkte, einschließlich der Aktien- und Kryptomärkte, können äußerst volatil sein und zum teilweisen oder vollständigen Verlust des eingesetzten Kapitals führen. Vergangene Wertentwicklungen sind niemals ein verlässlicher Indikator für künftige Ergebnisse. Investieren Sie ausschließlich Mittel, deren Verlust Sie sich leisten können.";

$terms_text_7 = "Wir behalten uns das Recht vor, diese Bedingungen jederzeit zu ändern, zu aktualisieren oder zu ergänzen, um regulatorischen Entwicklungen, technologischen Veränderungen oder neuen Marktanforderungen Rechnung zu tragen. Nutzer werden vorab informiert – in der Regel mindestens 14 Tage vor Inkrafttreten der Änderungen – per E-Mail, über Benachrichtigungen auf der Plattform oder durch Hinweise auf der Website. Die weitere Nutzung der Plattform nach Inkrafttreten der Änderungen gilt als Zustimmung zu den aktualisierten Bedingungen. Bei wesentlichen Änderungen steht es Ihnen frei, Ihr Konto zu schließen.";

$terms_text_8 = "Sicherheit und Transparenz sind grundlegende Prinzipien unserer Geschäftstätigkeit. Wir setzen moderne Verschlüsselungstechnologien ein, führen regelmäßige Sicherheitsaudits durch, verwahren Kundengelder auf getrennt geführten Konten und wenden strenge Compliance-Verfahren einschließlich KYC- und AML-Kontrollen an, um das höchstmögliche Schutzniveau zu gewährleisten. Alle Aktivitäten und Transaktionen werden klar und nachvollziehbar dokumentiert. Wir stehen für einen fairen, ehrlichen und kundenorientierten Service, denn Ihr Vertrauen ist unser wertvollstes Gut.";

// ---------------------------------------------------------------------------------------------------

// CONTACT PAGE
$contact_heading = "Kontaktieren Sie uns";

$contact_intro = "Unser engagiertes Support-Team steht Ihnen bei allen Fragen und Anliegen rund um $source zur Seite. Ob Sie sich zunächst informieren möchten, bereits registriert sind oder die Plattform aktiv nutzen – wir bieten Ihnen jederzeit professionelle und persönliche Unterstützung.";

$contact_how_to = "So erreichen Sie uns";

$contact_how_to_text = "Wir bieten schnellen und kompetenten Support für alle Anliegen rund um Ihr Konto und Ihre Erfahrung mit $source. Unser Team ist von Montag bis Freitag zu den üblichen Geschäftszeiten (MEZ) für Sie da und bearbeitet jede Anfrage sorgfältig und professionell. Typische Themen, bei denen wir Ihnen weiterhelfen:";

$contact_list_1 = "Registrierung, Verifizierung und vollständige Kontoverwaltung, einschließlich Anpassungen von Profil und Risikoeinstellungen";
$contact_list_2 = "Technische Unterstützung bei der Nutzung der Plattform, bei Funktionen der Anwendung oder bei der Behebung von Problemen";
$contact_list_3 = "Fragen zu Einzahlungen, Auszahlungen, Bearbeitungszeiten und unterstützten Zahlungsmethoden";
$contact_list_4 = "Ausführliche Informationen zu den Funktionen der Plattform, zu Anlagestrategien, KI-Algorithmen und verfügbaren Handelswerkzeugen";
$contact_list_5 = "Rückmeldungen, Anregungen und Ideen, die uns helfen, die Plattform zu verbessern und weiterzuentwickeln";
$contact_list_6 = "Unterstützung bei allen weiteren Anliegen – von allgemeinen Fragen bis hin zur individuellen Beratung";

$contact_send_message = "Nachricht senden";

$contact_send_message_text = "Nutzen Sie das sichere Kontaktformular unten, um uns Ihr Anliegen zu schildern. Bitte füllen Sie alle relevanten Felder aus, damit wir Ihre Anfrage möglichst präzise und zügig bearbeiten können. An Werktagen antworten wir in der Regel innerhalb von 24 Stunden, häufig deutlich schneller. Bei dringenden technischen Anliegen steht Ihnen unser Live-Chat werktags von 9:00 bis 18:00 Uhr zur Verfügung.";

$contact_info = "Kontaktinformationen";

$contact_info_text = "Unser Ziel ist es, Ihre Erfahrung mit $source so reibungslos, komfortabel und erfolgreich wie möglich zu gestalten. Klare Kommunikation, Transparenz und lösungsorientierte Unterstützung sind uns dabei besonders wichtig. Sie erreichen uns über das Formular unten, per E-Mail oder in ausgewählten Fällen auch telefonisch. Ihre Zufriedenheit und Ihre Sicherheit stehen für uns an erster Stelle.";

// ---------------------------------------------------------------------------------------------------

// FAQ PAGE
$faq_page_heading = "Häufig gestellte Fragen – FAQ";
$faq_page_subheading = "Sie haben Fragen? Hier finden Sie die Antworten.";
$faq_page_intro_1 = "In diesem Bereich finden Sie kompakte Antworten auf die häufigsten Fragen zu Konten, Zahlungen, Sicherheit und zur Nutzung der Plattform.";
$faq_page_intro_2 = "Unser Ziel ist es, Sie Schritt für Schritt zu begleiten und Unsicherheiten von Anfang an auszuräumen.";
$faq_page_intro_3 = "Wenn Sie darüber hinaus Unterstützung benötigen, steht Ihnen unser Support-Team jederzeit persönlich zur Verfügung.";
$faq_page_section_heading = "FAQ – Antworten auf die häufigsten Fragen unserer Nutzer";


// ---------------------------------------------------------------------------------------------------
// PRIVACY POLICY
$private_policy_heading = "Datenschutzerklärung";

$private_policy_intro = "Bei $source haben der Schutz und der verantwortungsvolle Umgang mit Ihren personenbezogenen Daten oberste Priorität. Wir verarbeiten Daten transparent, für klar definierte Zwecke und im Einklang mit den geltenden Datenschutzgesetzen. Diese Datenschutzerklärung erläutert, welche Daten wir erheben, warum wir sie erheben, wie lange wir sie speichern und mit welchen Maßnahmen wir sie schützen.";

$private_policy_section_1_heading = "1. Verantwortliche Stelle";
$private_policy_section_1_text = "Der Betreiber der Website und der Plattform $source ist die für die Verarbeitung Ihrer personenbezogenen Daten verantwortliche Stelle. Die entsprechenden Kontaktdaten sowie weitere Unternehmensangaben finden Sie auf dieser Website. Bei Fragen zum Datenschutz können Sie sich jederzeit an unser Datenschutzteam wenden.";

$private_policy_section_2_heading = "2. Welche Daten wir erheben";
$private_policy_section_2_text = "Wir erheben und verarbeiten ausschließlich Daten, die erforderlich sind, um unsere Dienste bereitzustellen, gesetzliche Pflichten zu erfüllen und den sicheren Betrieb der Plattform zu gewährleisten. Dazu können gehören:";
$private_policy_section_2_list = [
"Identitätsdaten: Vorname, Nachname und Geburtsdatum zur Alters- und Identitätsprüfung.",
"Kontaktdaten: E-Mail-Adresse, Telefonnummer (sofern angegeben), Wohnsitzland und gegebenenfalls Postanschrift.",
"Konto- und Transaktionsdaten: Zahlungsangaben, Einzahlungen, Auszahlungen und Transaktionshistorie.",
"Technische Daten und Nutzungsdaten: IP-Adresse, Browsertyp, Geräteinformationen, Zugriffszeiten und Systemprotokolle.",
"Verifizierungsunterlagen: Ausweisdokumente, Adressnachweise oder sonstige Unterlagen, die für KYC- und AML-Verfahren erforderlich sind."
];
$private_policy_section_2_note = "Besondere Kategorien personenbezogener Daten, etwa Gesundheitsdaten oder Angaben zur Religionszugehörigkeit, erheben wir grundsätzlich nicht – es sei denn, dies ist gesetzlich vorgeschrieben oder Sie haben ausdrücklich eingewilligt.";

$private_policy_section_3_heading = "3. Wie wir Daten erheben";
$private_policy_section_3_text = "Ihre Daten können über verschiedene sichere Wege erhoben werden:";
$private_policy_section_3_list = [
"Direkt von Ihnen, beispielsweise bei der Registrierung, bei Aktualisierungen Ihres Profils, bei der Dokumentenprüfung oder wenn Sie unseren Support kontaktieren.",
"Automatisch über Cookies, Serverprotokolle, Analysewerkzeuge und Geräteinformationen, während Sie die Plattform nutzen.",
"Von vertrauenswürdigen Dritten, etwa Zahlungsdienstleistern, Anbietern zur Identitätsprüfung oder Social-Login-Anbietern, sofern Sie deren Nutzung wählen."
];

$private_policy_section_4_heading = "4. Zwecke der Verarbeitung";
$private_policy_section_4_text = "Wir verarbeiten Ihre personenbezogenen Daten ausschließlich zu legitimen und klar definierten Zwecken:";
$private_policy_section_4_list = [
"Einrichtung, Verwaltung und Pflege Ihres Nutzerkontos sowie Bereitstellung des Zugangs zu den Funktionen der Plattform.",
"Abwicklung und Absicherung von Einzahlungen, Auszahlungen und zahlungsbezogenen Vorgängen.",
"Bereitstellung des Kundenservice und Beantwortung Ihrer Anfragen.",
"Erfüllung gesetzlicher und aufsichtsrechtlicher Pflichten, einschließlich KYC-, AML- und steuerrechtlicher Anforderungen.",
"Gewährleistung der Sicherheit der Plattform sowie Verhinderung von Betrug, Missbrauch und unbefugtem Zugriff.",
"Verbesserung von Leistung, Funktionsumfang und Nutzererlebnis der Plattform.",
"Versand von Marketingmitteilungen und Neuigkeiten, sofern Sie hierzu ausdrücklich eingewilligt haben."
];

$private_policy_section_5_heading = "5. Rechtsgrundlagen der Verarbeitung";
$private_policy_section_5_list = [
"Erfüllung eines Vertrags oder Durchführung vorvertraglicher Maßnahmen.",
"Erfüllung gesetzlicher Pflichten, einschließlich der Vorgaben zur Geldwäscheprävention und weiterer aufsichtsrechtlicher Anforderungen.",
"Berechtigte geschäftliche Interessen, etwa die Gewährleistung von Sicherheit, Zuverlässigkeit und Betriebsstabilität der Plattform.",
"Ihre ausdrückliche Einwilligung, beispielsweise für den Empfang von Marketingmitteilungen oder die Nutzung optionaler Funktionen der Plattform."
];

$private_policy_section_6_heading = "6. Weitergabe von Daten";
$private_policy_section_6_text = "Ihre Daten werden nur weitergegeben, wenn dies erforderlich ist – und ausschließlich an sorgfältig ausgewählte Dienstleister und Partner:";
$private_policy_section_6_list = [
"Zahlungsdienstleister und Banken zur Abwicklung von Transaktionen.",
"Spezialisierte Anbieter, die uns bei der Identitätsprüfung und bei Compliance-Kontrollen unterstützen.",
"Technologie- und Cloud-Dienstleister, die auf Grundlage entsprechender Auftragsverarbeitungsverträge tätig sind.",
"Anbieter von Analyse- und Sicherheitsdiensten, die – soweit möglich – anonymisierte oder pseudonymisierte Daten verwenden.",
"Externe Berater wie Rechts- oder Steuerberater, sofern erforderlich.",
"Aufsichtsbehörden, Gerichte oder Strafverfolgungsbehörden, sofern wir gesetzlich dazu verpflichtet sind."
];
$private_policy_section_6_note = "Wir verkaufen, vermieten oder übermitteln Ihre personenbezogenen Daten nicht zu kommerziellen Zwecken an Dritte.";

$private_policy_section_7_heading = "7. Internationale Datenübermittlungen";
$private_policy_section_7_text = "Einzelne Dienstleister, etwa Cloud-Hosting- oder Analysepartner, können außerhalb Ihres Rechtsraums tätig sein. Sofern es zu internationalen Datenübermittlungen kommt, treffen wir geeignete Schutzmaßnahmen wie Standardvertragsklauseln oder andere anerkannte rechtliche Mechanismen, um ein angemessenes Datenschutzniveau sicherzustellen.";

$private_policy_section_8_heading = "8. Datensicherheit";
$private_policy_section_8_text = "Wir setzen umfassende technische und organisatorische Maßnahmen zum Schutz Ihrer Daten ein:";
$private_policy_section_8_list = [
"Verschlüsselte Datenübertragung über moderne Sicherheitsprotokolle wie TLS 1.3+.",
"Starke Verschlüsselung sensibler gespeicherter Daten mit Technologien wie AES-256.",
"Regelmäßige Sicherheitsbewertungen, Penetrationstests und unabhängige Überprüfungen.",
"Fortlaufende Überwachung auf verdächtige Aktivitäten und mögliche Sicherheitsbedrohungen.",
"Strenge Zugriffskontrollen und rollenbasierte Berechtigungen für autorisierte Mitarbeitende.",
"Getrennte Verwahrung von Kundengeldern bei regulierten Finanzpartnern."
];
$private_policy_section_8_note = "Auch wenn kein Sicherheitssystem einen absoluten Schutz garantieren kann, arbeiten wir kontinuierlich daran, Risiken zu minimieren und ein hohes Sicherheitsniveau aufrechtzuerhalten.";

$private_policy_section_9_heading = "9. Speicherdauer";
$private_policy_section_9_text = "Personenbezogene Daten werden nur so lange gespeichert, wie es zur Erfüllung der in dieser Erklärung genannten Zwecke oder zur Einhaltung gesetzlicher Anforderungen erforderlich ist:";
$private_policy_section_9_list = [
"Für die Dauer Ihres aktiven Kontos und unserer Vertragsbeziehung.",
"Für darüber hinausgehende Zeiträume, die aufgrund steuerlicher, aufsichtsrechtlicher oder gesetzlicher Pflichten erforderlich sind.",
"Bis zum Widerruf Ihrer Einwilligung, sofern die Verarbeitung ausschließlich auf dieser beruht."
];
$private_policy_section_9_note = "Sobald Daten nicht mehr benötigt werden, werden sie sicher gelöscht oder dauerhaft anonymisiert.";

$private_policy_section_10_heading = "10. Ihre Rechte";
$private_policy_section_10_text = "Im Rahmen der geltenden Gesetze können Sie in Bezug auf Ihre personenbezogenen Daten die folgenden Rechte geltend machen:";
$private_policy_section_10_list = [
"Auskunft über die von uns gespeicherten Daten zu verlangen.",
"Die Berichtigung unrichtiger oder unvollständiger Daten zu verlangen.",
"Die Löschung Ihrer Daten zu verlangen, soweit dies rechtlich zulässig ist.",
"Unter bestimmten Voraussetzungen die Einschränkung der Verarbeitung zu verlangen.",
"Ihre Daten in einem strukturierten, gängigen und maschinenlesbaren Format zu erhalten.",
"Eine erteilte Einwilligung jederzeit zu widerrufen.",
"Eine Beschwerde bei einer zuständigen Datenschutzaufsichtsbehörde einzureichen."
];

$private_policy_section_11_heading = "11. Cookies und ähnliche Technologien";
$private_policy_section_11_text = "Wir verwenden Cookies und ähnliche Technologien, um die Funktionsfähigkeit der Plattform sicherzustellen, das Nutzungsverhalten auszuwerten und das Nutzererlebnis zu verbessern. Notwendige Cookies sind stets aktiv, während Analyse- und Marketing-Cookies Ihrer Einwilligung bedürfen. Weitere Einzelheiten finden Sie in unserer Cookie-Richtlinie.";
$private_policy_google_choices = 'Über die <a href="http://www.google.com/settings/ads" target="_blank" rel="noopener">Google-Anzeigeneinstellungen</a> können Sie steuern, wie Google Informationen aus Ihren Besuchen verwendet, mit dem <a href="https://tools.google.com/dlpage/gaoptout" target="_blank" rel="noopener">Deaktivierungs-Add-on für Google Analytics</a> der interessenbezogenen Werbung widersprechen oder in der <a href="https://www.google.com/intl/en/policies/privacy/" target="_blank" rel="noopener">Datenschutzerklärung von Google</a> weitere Einzelheiten nachlesen.';

$private_policy_section_12_heading = "12. Änderungen dieser Datenschutzerklärung";
$private_policy_section_12_text = "Wir können diese Datenschutzerklärung von Zeit zu Zeit aufgrund rechtlicher, aufsichtsrechtlicher oder betrieblicher Änderungen aktualisieren. Die jeweils aktuelle Fassung ist stets auf der Website verfügbar. Bei wesentlichen Änderungen informieren wir Sie gegebenenfalls per E-Mail oder über Benachrichtigungen auf der Plattform.";

$private_policy_section_13_heading = "13. Kontakt zum Datenschutz";
$private_policy_section_13_text = "Wenn Sie Fragen zum Datenschutz, zu dieser Erklärung oder zur Ausübung Ihrer Rechte haben, wenden Sie sich bitte per E-Mail an $site_gmail oder über das Kontaktformular auf der Website an uns. Wir prüfen Ihr Anliegen und antworten Ihnen schnellstmöglich.";

$private_policy_agreement = "Mit der Nutzung von $source bestätigen Sie, dass Sie diese Datenschutzerklärung gelesen und verstanden haben und mit ihren Bestimmungen einverstanden sind.";

$private_policy_thank_you = "Vielen Dank für Ihr Vertrauen. Der Schutz Ihrer Daten und die Achtung Ihrer Privatsphäre bleiben ein zentrales Anliegen von $source.";

// ---------------------------------------------------------------------------------------------------

// REGISTRATION
$register_heading = "Starten Sie noch heute mit $source und legen Sie in nur wenigen Minuten los";

// ==========================================
// RISK WARNING PAGE
// ==========================================
$page_title_risk_warning = "Risikohinweis | $source";
$page_description_risk_warning = "Verstehen Sie die Risiken des automatisierten Krypto-Tradings mit $source – darunter Marktvolatilität, Ausführungsrisiken und regulatorische Aspekte.";
$risk_warning_heading = "Risikohinweis";
$risk_warning_intro = "Die Risiken zu verstehen ist der erste Schritt zu souveränem Trading.";

$risk_warning_ai_heading = "So unterstützt unser KI-System das Risikomanagement:";
$risk_warning_ai_list = [
    "<strong>Algorithmische Effizienz und emotionsfreies Trading:</strong> Fortschrittliche Algorithmen werten Marktsignale aus und führen Trades objektiv zum optimalen Zeitpunkt aus.",
    "<strong>Datenbasierte Strategien:</strong> Die Strategien beruhen auf geprüften Marktmustern und Echtzeitanalysen statt auf Vermutungen.",
    "<strong>Flexible Einstellungen und volle Kontrolle:</strong> Passen Sie Ihre Risikoparameter jederzeit an. Verfolgen Sie alle Kontostände und Trades transparent in Ihrem Dashboard – ohne versteckte Gebühren und ohne Auszahlungsbeschränkungen.",
];

$risk_warning_disclaimer = "<strong>Haftungsausschluss:</strong> Trading ist immer mit Risiken verbunden. Automatisierte Systeme (einschließlich KI) garantieren keine Gewinne, können durch Softwarefehler oder unerwartete Marktereignisse ausfallen und erfordern eine Überwachung durch den Nutzer. Vergangene Wertentwicklungen lassen keine Rückschlüsse auf künftige Ergebnisse zu. Diese Plattform dient ausschließlich Informations- und Marketingzwecken und stellt keine Finanzberatung dar.";

$risk_warning_s1_heading = "1. Allgemeine Risiken und Risiken des Kryptomarktes";
$risk_warning_s1_intro = "Kryptowährungen sind hochvolatile, spekulative Vermögenswerte, die rund um die Uhr gehandelt werden und in den meisten Rechtsräumen nur einer geringen behördlichen Aufsicht unterliegen.";
$risk_warning_s1_list = [
    "Kurse können innerhalb kurzer Zeiträume erheblich schwanken und bis zum vollständigen Verlust des eingesetzten Kapitals führen.",
    "Marktwerte können durch regulatorische Neuerungen, technische Entwicklungen, Sicherheitsvorfälle oder allgemeine makroökonomische Ereignisse stark beeinflusst werden.",
    "Einzelne Vermögenswerte können ihren Wert vollständig verlieren. Investieren Sie ausschließlich Mittel, deren Verlust Sie sich leisten können.",
];

$risk_warning_s2_heading = "2. Ausführungs-, Liquiditäts- und Hebelrisiken";
$risk_warning_s2_list = [
    "<strong>Marktvolatilität und Liquidität:</strong> Extreme Kursbewegungen (10–20 % und mehr pro Tag) oder geringe Liquidität (insbesondere bei kleineren Coins) können zu Verzögerungen, Plattformausfällen und erheblicher Slippage bei der Ausführung führen. Stop-Loss-Orders können unter extremen Bedingungen keine Verlustbegrenzung garantieren.",
    "<strong>Hebel- und Margin-Risiken:</strong> Gehebelte Produkte verstärken sowohl Gewinne als auch Verluste – Sie können also mehr verlieren als Ihre ursprüngliche Einlage. Rund 70–80 % der Konten von Privatanlegern verlieren beim Handel mit gehebelten Produkten Geld.",
];

$risk_warning_s3_heading = "3. Technische Risiken, Cybersicherheit und Risiken durch Dritte";
$risk_warning_s3_list = [
    "<strong>Technische Faktoren:</strong> Online-Trading ist naturgemäß mit Risiken wie Verbindungsabbrüchen, Hardware- und Softwarefehlern sowie Serviceausfällen verbunden.",
    "<strong>Cybersicherheit:</strong> Krypto-Konten sind ein häufiges Ziel von Phishing, Schadsoftware und Hackerangriffen. Transaktionen sind unwiderruflich; die Preisgabe Ihrer Zugangsdaten kann zu einem dauerhaften Verlust führen.",
    "<strong>Plattformen von Drittanbietern:</strong> Diese Website kann Nutzer zu Plattformen von Drittanbietern weiterleiten. Wir kontrollieren deren Sicherheit, Geschäftstätigkeit und Zahlungsfähigkeit nicht, empfehlen sie nicht und übernehmen dafür keine Gewähr. Prüfen Sie stets selbst sorgfältig, bevor Sie Gelder auf externen Plattformen einzahlen.",
];

$risk_warning_s4_heading = "4. Regulatorik, Steuern und Schlussbestimmungen";
$risk_warning_s4_list = [
    "<strong>Rechtliche Vorgaben und Steuern:</strong> Die regulatorischen Rahmenbedingungen unterscheiden sich erheblich und ändern sich schnell. Nutzer sind allein dafür verantwortlich, dass ihre Handelstätigkeit den örtlichen Gesetzen entspricht, und müssen ihren steuerlichen Pflichten eigenständig nachkommen.",
    "<strong>Keine Gewinngarantie:</strong> Einen \"sicheren\" oder risikofreien Krypto-Handel gibt es nicht. Sämtliche Rendite- oder Performanceangaben sind rein hypothetisch.",
    "<strong>Eignung:</strong> Wenn Sie die Risiken nicht vollständig verstehen, auf die eingesetzten Mittel angewiesen sind oder mit geliehenem Geld handeln, ist der Krypto-Handel für Sie nicht geeignet. Ziehen Sie im Zweifelsfall einen unabhängigen, zugelassenen Finanzberater hinzu.",
];

$risk_warning_contact = "<strong>Kontakt:</strong> Bei Fragen zu diesem Hinweis oder für sonstige Anliegen wenden Sie sich bitte über das Kontaktformular auf unserer Website an unser offizielles Kundenservice-Team.";
$footer_link_risk_warning = "Risikohinweis";
?>
