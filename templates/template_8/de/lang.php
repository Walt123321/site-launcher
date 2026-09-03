<?php
require __DIR__ . '/../lang.php';
$site_lang = 'de-DE';
$form_language = 'de'; // matches this page's own language, not the offer's global default

// ============================================================
// DE TRANSLATION OVERRIDES
// Identity/config vars ($site_name, $site_slug, $site_domain, $site_url, $app_price, $app_currency, $site_lang, $country_name, $country_flag_code, $privacy_last_update, $rating_value, $rating_count, $review_count, $form_country, $form_language, $form_phone_country, $form_only_countries, $review_1_author, $review_2_author, $review_3_author, $review_4_author, $quiz_consultant_name) are
// intentionally NOT overridden -- they stay exactly as inherited from the
// root lang.php.
// ============================================================

// Brand / Platform Variables

// Geo-language stats bar fallback content (used by the language-folder pages'
// own "stats" section; the fr/de/it/nl folders override these with native
// translations, the other 19 folders inherit this English fallback)
$stat_1_value = "4 Mio.+";
$stat_1_label = "Registrierte Nutzer";
$stat_2_value = "98+";
$stat_2_label = "Unterstützte Länder";
$stat_3_value = "65+";
$stat_3_label = "Verfügbare Währungen";
$stat_4_value = "24/7";
$stat_4_label = "Transaktionszugang";
$stat_5_value = "256-Bit";
$stat_5_label = "Verschlüsselungsstandard";
$stat_6_value = "$500 Mio.+";
$stat_6_label = "Gesamteinlagen der Kunden";

// Keitaro Form Integration Variables (defaults -- overwritten per-launch by
// generate_lang_files(); must stay valid on their own since nothing else in
// this file replaces them for a page that's ever served un-generated)

// 4 Verified Reviews (TZ Item 8)
$review_1_role = "Frankreich";
$review_1_text = "Ich habe mit €500 angefangen, nur um zu sehen, wie die Plattform funktioniert. Nach etwa drei Wochen war mein Guthaben auf rund €1120 angewachsen. Die Oberfläche ist einfach zu bedienen, und die Markteinblicke haben mir geholfen, bessere Entscheidungen zu treffen.";
$review_1_badge = "Gemeldete Rendite +18,4%";

$review_2_role = "Deutschland";
$review_2_text = "Ich habe schon ein paar Handelsplattformen ausprobiert, aber diese ist bisher meine liebste. Sie ist einfach zu bedienen, die Tools sind wirklich nützlich, und insgesamt hatte ich eine sehr positive Erfahrung.";
$review_2_badge = "Gemeldete Rendite +19,1%";

$review_3_role = "Italien";
$review_3_text = "Am meisten beeindruckt hat mich, wie intuitiv sich alles anfühlt. Die Registrierung ging schnell, das Dashboard ist übersichtlich aufgebaut, und die Plattform hat das Trading für mich deutlich bequemer gemacht.";
$review_3_badge = "Gemeldete Rendite +16,8%";

$review_4_role = "Niederlande";
$review_4_text = "Ich hatte keine Vorerfahrung im Trading, also habe ich mit €750 begonnen. Innerhalb eines Monats erreichte ich, indem ich den Tools und Lernressourcen folgte, knapp über €1,765. Es war ein großartiger Weg, um Vertrauen aufzubauen.";
$review_4_badge = "Gemeldete Rendite +18,0%";

$review_verified_label = "Verifizierter Nutzer";
$reviews_section_title = "Bewertungen zu $site_name";
$reviews_badge_trustworthy = "Vertrauenswürdig";
$reviews_summary_rating = "4,7";
$reviews_summary_count = "189";
$reviews_summary_desc = "Eine leistungsstarke und intuitive Handelsplattform mit robusten automatisierten Tools, Echtzeit-Analysen und umfassenden Lernressourcen.";

// CONSULTANT / CHAT QUIZ (TZ Item 13)
$quiz_consultant_role = "Onboarding-Beauftragte";
$quiz_text_welcome = "Hallo! Ich bin $quiz_consultant_name von $site_name. Gute Nachrichten — Sie sind bereits vorqualifiziert. Lassen Sie uns Ihr Konto einrichten, damit Sie mit dem Trading starten können.";
$quiz_text_q1 = "Um die für Ihre Region geltenden Handelsbedingungen zu bestätigen, bestätigen Sie bitte Ihr Land: $country_name";
$quiz_text_a1_yes = "Ja, das ist mein aktueller Standort";
$quiz_text_a1_no = "Nein";
$quiz_text_q2 = "Wählen Sie Ihre Altersgruppe, damit wir die Einrichtung Ihres Kontos entsprechend anpassen können:";
$quiz_text_q3 = "Verfügen Sie über ein aktives Bankkonto oder eine Karte, um Ihr Handelskonto aufzuladen?";
$quiz_text_a3_yes = "Ja, ein aktives Konto ist vorhanden";
$quiz_text_a3_no = "Derzeit nicht verfügbar";
$quiz_text_q4 = "Nennen Sie uns Ihre wichtigste Einkommensquelle, damit wir Ihnen einen zu Ihrem Budget passenden Einzahlungsplan vorschlagen können:";
$quiz_text_a4_1 = "Erwerbseinkommen / Selbstständigkeit";
$quiz_text_a4_2 = "Ersparnisse / Persönliche Investitionen";
$quiz_text_a4_3 = "Andere Quellen";
$quiz_text_q5 = "Letzter Schritt: Einer unserer Berater ruft Sie zwischen 11:00 und 20:00 Uhr an, um Sie durch die Einrichtung Ihres Kontos zu führen. Passt Ihnen dieser Zeitraum?";
$quiz_text_a5_yes = "Ja, dieser Zeitraum passt optimal";
$quiz_text_a5_no = "Sofortigen Prioritätskontakt anfordern";
$quiz_text_loader = "Ihr Handelsprofil wird eingerichtet...";
$quiz_text_final_ttl = "Alles bereit! 🎉 Schließen Sie unten Ihre Registrierung ab, um Ihr Konto zu aktivieren:";
$quiz_text_processing = "Eingaben werden überprüft...";
$quiz_text_typing = "schreibt eine Antwort...";
$quiz_placeholder_fname = "Vorname";
$quiz_placeholder_lname = "Nachname";
$quiz_placeholder_email = "E-Mail-Adresse";
$quiz_placeholder_phone = "Telefonnummer";
$quiz_btn_submit = "Mein Konto erstellen";

// METADATA (TZ Item 10)
$home_meta_title = "$site_name — Handelsplattform | Offizielle Website";
$home_meta_description = "Die offizielle Website von $site_name bietet eine sichere Kryptowährungs-Handelsplattform mit fortschrittlichen Trading-Tools, Markteinblicken in Echtzeit und einer benutzerfreundlichen Erfahrung für Trader.";

// NAVIGATION & HEADER (TZ Item 3, 12)
$nav_about = "Über Uns";
$nav_how = "So Funktioniert Es";
$nav_why = "Warum Handeln";
$nav_faq = "FAQ";
$nav_contacts = "Kontakt";
$nav_signin = "Anmelden";
$nav_signup = "Registrieren";

$mobnav_home = "Startseite";
$mobnav_product = "Produkt";
$mobnav_offer = "Angebot";
$mobnav_contact = "Kontakt";
$mobnav_faq = "FAQ";
$mobnav_signup = "Registrieren";

// HERO SECTION
$hero_h1 = "$site_name Plattform";
$hero_text = "Die offizielle Kryptowährungs-Handelsplattform von $site_name — entwickelt, um den Handel mit Kryptowährungen so einfach zu machen wie alltägliches Online-Banking, egal ob Sie zum ersten Mal traden oder bereits langjähriger Investor sind.";

// LEAD FORM
$form_fname_placeholder = "Vorname";
$form_lname_placeholder = "Nachname";
$form_email_placeholder = "Geben Sie Ihre E-Mail-Adresse ein";
$form_phone_placeholder = "Telefonnummer";
$form_btn_submit = "Registrieren";
$form_disclaimer_text = "Durch die Eingabe Ihrer persönlichen Daten und das Klicken auf die Schaltfläche akzeptieren Sie die <a class='link link-primary' href='privacy.php'>Datenschutzrichtlinie</a> und die <a class='link link-primary' href='conditions.php'>Nutzungsbedingungen</a> dieser Website.";

// SECURITY BADGES
$badge_ssl = "256-Bit-SSL";
$badge_payments = "Sichere Zahlungen";
$badge_2fa = "2FA";
$badge_cold_storage = "98% Cold Storage";
$badge_regulated = "Reguliert";
$badge_traders_trust = "Über 4 Mio. Trader Vertrauen";

// SAFE SECTION (Vos fonds sont en sécurité)
$safe_title = "<mark>Ihr Geld Ist Sicher</mark> bei $site_name";
$safe_desc = "Verschlüsselung auf Bankniveau, verifizierte Zahlungsanbieter und 98% Cold Storage — Ihr Geld ist bei jedem Schritt geschützt.";

$safe_item1_title = "Verifizierte Zahlungsanbieter";
$safe_item1_desc = "Zahlungen werden ausschließlich über zertifizierte Anbieter abgewickelt, die internationale Sicherheitsstandards einhalten. Ihre Kartendaten werden niemals auf unserer Plattform gespeichert.";
$safe_item1_badge = "Sichere Zahlungen";

$safe_item2_title = "Zwei-Faktor-Authentifizierung (2FA)";
$safe_item2_desc = "Fügen Sie Ihrem Konto eine zusätzliche Schutzebene mit zeitbasierten Einmalpasswörtern per SMS oder Google Authenticator hinzu.";
$safe_item2_badge = "2FA";

$safe_item3_title = "98% Cold Storage";
$safe_item3_desc = "Der Großteil der digitalen Vermögenswerte wird in geografisch verteilten Offline-Cold-Storage-Tresoren aufbewahrt, die durch Multi-Signatur-Protokolle geschützt sind.";
$safe_item3_badge = "98% Cold Storage";

$safe_item4_title = "Regulierte Ausführung";
$safe_item4_desc = "Wir arbeiten weltweit mit regulierten Brokerhäusern und Liquiditätsanbietern zusammen, um Compliance, Transparenz und erstklassige Ausführung zu gewährleisten.";
$safe_item4_badge = "Reguliert";

$safe_item5_title = "256-Bit-SSL-Verschlüsselung";
$safe_item5_desc = "Alle Datenübertragungen zwischen Ihrem Browser und unseren Servern werden mit militärischen TLS-1.3-Kryptografieprotokollen verschlüsselt.";
$safe_item5_badge = "256-Bit-SSL";

// FREE GUIDE CTA BANNER (CTA 2)
$guide_cta_title = "Kostenlosen Leitfaden Erhalten";
$guide_cta_subtitle = "«10 Fehler, die Sie beim Krypto-Handel vermeiden sollten»";
$guide_cta_btn = "Kostenlosen Leitfaden Anfordern";

// TRUST SECTION (Pourquoi les investisseurs font confiance à Ciel Cryptance)
$trust_title = "Weltweit von Tradern vertraut";
$trust_desc = "Über 4.000.000 Nutzer weltweit vertrauen auf $site_name wegen seiner Zuverlässigkeit, leistungsstarken Automatisierung und transparenten Umgebung.";
$trust_subtitle = "Deshalb vertrauen Trader $site_name:";

$trust_item1_title = "Globaler Marktzugang";
$trust_item1_desc = "Handeln Sie mit über 100 Kryptowährungen, Forex-Paaren, Aktien und Rohstoffen über ein einziges einheitliches Handels-Dashboard.";

$trust_item2_title = "Robuster Kapitalschutz";
$trust_item2_desc = "Getrennte Konten, kontinuierliche biometrische Prüfungen und modernste Cybersicherheit schützen Ihr Kapital rund um die Uhr.";

$trust_item3_title = "Keine Versteckten Gebühren";
$trust_item3_desc = "Genießen Sie glasklare Preisgestaltung. Kostenlose Registrierung, kostenlose Einzahlungen, keine Verwaltungsgebühren und sofortige Auszahlungsanfragen.";

$trust_item4_title = "Reaktionsschneller Support";
$trust_item4_desc = "Unser engagiertes Support-Team steht Ihnen per Live-Chat, Telefon oder E-Mail für alle Fragen oder technischen Anliegen zur Verfügung.";

$trust_market_info_text = "Weitere Informationen zu den Marktbedingungen 2026";
$trust_market_info_btn = "Warum Handeln";

// START TRADING CTA (CTA 3)
$start_cta_title = "Beginnen Sie mit dem Handel ab <span data-local-currency='$app_price'>$app_price $app_currency</span>!";
$start_cta_desc = "Bereit, $site_name auszuprobieren? Registrieren Sie sich jetzt und werden Sie Teil der wachsenden Gemeinschaft von Krypto-Investoren und Tradern.";
$start_cta_btn = "Registrieren";

// FAQ SECTION
$faq_title = "$site_name Häufig gestellte Fragen (FAQ)";
$faq_q1 = "Was ist $site_name und wie funktioniert es?";
$faq_a1 = "Es handelt sich um eine KI-gestützte Handelsplattform, die rund um die Uhr für Sie arbeitet. Das System analysiert die Märkte, erkennt Chancen und führt Trades automatisch aus. Sie können die KI alles erledigen lassen oder jederzeit in den manuellen Modus wechseln, um zu Ihren eigenen Bedingungen zu handeln.";

$faq_q2 = "Wie sicher sind mein Geld und meine Daten bei $site_name?";
$faq_a2 = "Sicherheit ist in jede Ebene der Plattform integriert. Persönliche Daten werden mit international anerkannten Verschlüsselungsstandards und fortschrittlicher Kontoauthentifizierung geschützt. Alle finanziellen Transaktionen werden ausschließlich über vertrauenswürdige, verifizierte Zahlungsanbieter abgewickelt. Ihre gesamte Trading-Aktivität — jeder Trade, jedes Signal und jede Guthabenaktualisierung — ist in Echtzeit sichtbar, sodass Sie immer genau wissen, was mit Ihrem Geld geschieht.";

$faq_q3 = "Kann ich meine Gewinne jederzeit auszahlen?";
$faq_a3 = "Ja. Es gibt keine Einschränkungen, wann oder wie oft Sie bei $site_name Geld auszahlen. Ihr Kontostand bleibt jederzeit unter Ihrer Kontrolle. Auszahlungen werden über dieselben vertrauenswürdigen Zahlungsanbieter abgewickelt, die auch für Einzahlungen genutzt werden, was schnelle und sichere Transaktionen gewährleistet.";

$faq_q4 = "Gibt es versteckte Gebühren oder zusätzliche Kosten?";
$faq_a4 = "Nein. $site_name erhebt keine Abonnementgebühren, keine Registrierungsgebühren und keine versteckten Gebühren. Der einzige Betrag, den Sie zum Start benötigen, ist eine Mindesteinzahlung von $app_price $app_currency, die direkt auf Ihr Handelskonto eingezahlt wird. Alle gängigen Zahlungsmethoden werden akzeptiert, einschließlich Kreditkarten, Banküberweisungen und PayPal.";

$faq_q5 = "Brauche ich Vorerfahrung, um anzufangen?";
$faq_a5 = "Überhaupt nicht. $site_name ist sowohl für absolute Anfänger als auch für erfahrene Trader konzipiert. Im vollautomatischen Modus übernimmt die KI alles für Sie, einschließlich Marktanalyse, Signalerzeugung und Trade-Ausführung. Wenn Sie lieber die Kontrolle behalten möchten, können Sie jederzeit in den manuellen Modus wechseln.";

$faq_cta_text = "Haben Sie Fragen? Schauen Sie in unsere FAQ oder kontaktieren Sie uns.";
$faq_cta_faq_btn = "FAQ";
$faq_cta_contact_btn = "Kontakt";

// NEW TRADER LEAD SECTION (Bottom form)
$lead_title = "Neu im Handel?";
$lead_p1 = "Nach der Registrierung erhalten Sie unseren kostenlosen Leitfaden <mark class='text-on-surface-tertiary-accent'>«10 Fehler, die Sie beim Kryptowährungshandel vermeiden sollten»</mark>. Er enthält unkomplizierte Ratschläge unserer erfahrensten Analysten, um Ihnen zu helfen, häufige Fallstricke zu vermeiden.";
$lead_p2 = "Geben Sie einfach Ihre Daten im Registrierungsformular ein und wir senden ihn direkt an Ihren Posteingang. Viele Trader haben mit diesem Leitfaden begonnen und ihn als unschätzbar wertvoll empfunden, um Vertrauen bei ihren ersten Trades aufzubauen.";
$lead_form_heading = "Der Markt wartet nicht — beginnen Sie noch heute!";

// FEATURES TABLE (Fonctionnalités principales)
$features_title = "<mark>Wichtige Funktionen</mark> der $site_name Handelsplattform";
$feature_1_title = "🤖 Plattformtechnologie";
$feature_1_val = "Fortschrittliche KI-gestützte Handels-Engine";
$feature_2_title = "💳 Einzahlungsmethoden";
$feature_2_val = "Gängige Kreditkarten, Überweisungen, PayPal";
$feature_3_title = "📱 Plattformzugang";
$feature_3_val = "Kompatibel mit mehreren Geräten (Desktop, Tablet, Mobil)";
$feature_4_title = "🚀 Erfolgsquote";
$feature_4_val = "85% analytische Präzision";
$feature_5_title = "📊 Handelsinstrumente";
$feature_5_val = "Kryptowährungen, Forex, Aktien, Rohstoffe, Edelmetalle, CFDs und mehr…";
$feature_6_title = "✍️ Kontoeinrichtung";
$feature_6_val = "Schnelle und unkomplizierte Registrierung";
$feature_7_title = "📞 Kundensupport";
$feature_7_val = "24/7 professioneller persönlicher Support";

// FOOTER DISCLAIMER (TZ Item 21)
$footer_disclaimer_p1 = "$site_name bietet Bildungsinhalte und allgemeine Informationen zu Finanzmärkten, Online-Handel und digitalen Vermögenswerten. Alle auf dieser Website veröffentlichten Materialien, einschließlich Artikel, Charts, Preisdaten, Marktanalysen und Kommentare, dienen ausschließlich Informationszwecken und sollten nicht als Finanz-, Anlage- oder Rechtsberatung betrachtet werden. Obwohl wir uns bemühen, unsere Inhalte korrekt und aktuell zu halten, garantieren wir nicht deren Vollständigkeit oder Zuverlässigkeit und übernehmen keine Haftung für Verluste, die aus der Nutzung dieser Website entstehen.";
$footer_disclaimer_p2 = "Der Handel mit Kryptowährungen, Forex, CFDs, Aktien und anderen Finanzinstrumenten birgt erhebliche Risiken und ist möglicherweise nicht für jeden Anleger geeignet. Marktbedingungen können sich schnell ändern, und vergangene Wertentwicklungen garantieren keine zukünftigen Ergebnisse. Bevor Sie Anlageentscheidungen treffen, prüfen Sie sorgfältig Ihre finanzielle Situation und Risikotoleranz und holen Sie bei Bedarf unabhängigen fachkundigen Rat ein. Investieren Sie nur Geld, dessen Verlust Sie sich leisten können.";
$footer_copyright = "© 2026 $site_name. Alle Rechte vorbehalten." . date('Y') . " $site_name. All rights reserved.";

// FOOTER NAV LINKS
$footnav_about = "Über uns";
$footnav_how = "So Funktioniert Es";
$footnav_why = "Warum Handeln";
$footnav_faq = "FAQ";
$footnav_contacts = "Kontakt";
$footnav_privacy = "Datenschutzerklärung";
$footnav_risk = "Risikowarnung";
$footnav_terms = "Nutzungsbedingungen";
$footnav_product = "Produkt";
$footnav_offer = "Angebot";

// ABOUT PAGE VARIABLES
$about_meta_title = "Über Uns | $site_name Offizielle Website";
$about_meta_description = "Erfahren Sie mehr über $site_name, unsere Mission, Finanzmärkte durch KI-Automatisierung zu demokratisieren, und unseren Sicherheitsrahmen auf institutionellem Niveau.";
$about_h1 = "Über <mark>$site_name</mark>";
$about_lead = "Wir stärken Trader weltweit durch künstliche Intelligenz, algorithmische Ausführung und Unternehmenssicherheit.";
$about_mission_title = "Unsere Mission";
$about_mission_text = "Bei $site_name glauben wir, dass hochentwickelte Handelstechnologien für jeden zugänglich sein sollten, nicht nur für institutionelle Fonds. Unsere Plattform überbrückt die Lücke zwischen alltäglichen Privatanlegern und hochmodernen computergestützten Handelsalgorithmen.";
$about_tech_title = "Spitzentechnologie";
$about_tech_text = "Unsere Systeme werten jede Sekunde über 100.000 Datenpunkte auf den globalen Krypto-, Forex- und Aktienmärkten aus. Durch die Kombination von prädiktiven Machine-Learning-Modellen mit Ausführung im Submillisekundenbereich liefern wir extrem geringe Slippage und zuverlässige Leistung.";
$about_sec_title = "Sicherheit & Regulatorische Compliance";
$about_sec_text = "Das Vertrauen der Kunden ist das Fundament unseres Ökosystems. Wir implementieren 256-Bit-TLS-Verschlüsselung, strenge biometrische und 2FA-Protokolle und lagern 98% aller digitalen Reserven in Cold-Storage-Tresoren.";

// PRODUCT PAGE VARIABLES
$product_meta_title = "Unsere Plattform | $site_name";
$product_meta_description = "Erfahren Sie, wie $site_name KI-gestützte Analysen, Marktdaten in Echtzeit und ein transparentes Dashboard kombiniert, damit Sie mit Zuversicht handeln können.";
$product_h1 = "Plattform <mark>Produkt & Funktionen</mark>";
$product_lead = "Entdecken Sie die intelligenten Tools, die Ihnen einen Wettbewerbsvorteil auf modernen Kryptowährungs- und Finanzmärkten verschaffen.";
$product_f1_title = "Automatisierte KI-Handels-Engine";
$product_f1_text = "Lassen Sie neuronale Algorithmen Markttrends analysieren und rund um die Uhr optimale Trades ohne Emotionen ausführen.";
$product_f2_title = "Echtzeit-Marktanalysen";
$product_f2_text = "Live-Orderbuchtiefe, automatisierte Mustererkennung und institutionelles Sentiment-Tracking auf Knopfdruck.";
$product_f3_title = "Risikomanagement-Suite";
$product_f3_text = "Granulare Stop-Loss- und Take-Profit-Limits, maximale tägliche Risikokontrollen und automatisierte Absicherungsfunktionen.";
$product_f4_title = "Plattformübergreifende Zugänglichkeit";
$product_f4_text = "Handeln Sie nahtlos über Desktop-Browser, Tablets und Smartphones mit null Latenz und vollständiger Cloud-Synchronisierung.";

// OFFER PAGE VARIABLES
$offer_meta_title = "Jetzt starten | $site_name";
$offer_meta_description = "Registrieren Sie sich, zahlen Sie auf Ihr Konto ein und beginnen Sie in wenigen Minuten mit dem Handel von Kryptowährungen bei $site_name.";
$offer_h1 = "Exklusives <mark>Handelsangebot</mark>";
$offer_lead = "Starten Sie noch heute Ihre Handelsreise mit wettbewerbsfähigen Vorteilen und persönlichem 1-zu-1-Konto-Onboarding.";
$offer_step1_title = "1. Schnelle Registrierung";
$offer_step1_text = "Füllen Sie unser kurzes Registrierungsformular aus, um sich in unter 2 Minuten Zugang zu Ihrem persönlichen Konto zu sichern.";
$offer_step2_title = "2. Ihr Handelsguthaben Aufladen";
$offer_step2_text = "Zahlen Sie den Standardmindestbetrag von $app_price $app_currency per Kreditkarte, Banküberweisung oder E-Wallet ein. 100% Ihrer Gelder fließen direkt in Ihr Handelsguthaben.";
$offer_step3_title = "3. KI-Handel Aktivieren";
$offer_step3_text = "Wählen Sie den automatisierten oder assistierten Modus, wählen Sie Ihre bevorzugten Asset-Paare und beginnen Sie mit dem Handel mit vollem Plattformumfang.";

// CONTACTS PAGE VARIABLES
$contacts_meta_title = "Kontakt & Support | $site_name";
$contacts_meta_description = "Kontaktieren Sie das $site_name Team bei Fragen zu Ihrem Konto oder zum Trading.";
$contacts_h1 = "Kontakt";
$contacts_lead = "Unser engagiertes internationales Support-Team ist bereit, Ihnen 24 Stunden am Tag, 7 Tage die Woche zu helfen.";
$contacts_info_title = "Offizielle Anfragen";
$contacts_info_text = "Für allgemeine Anfragen, Kontoverifizierung oder technischen Support kontaktieren Sie uns über unsere verifizierten Kommunikationskanäle.";
$contacts_support_hours = "24/7 Live-Chat & E-Mail-Support";

// FAQ PAGE VARIABLES
$faq_meta_title = "FAQ & Wissensdatenbank | $site_name";
$faq_meta_description = "Finden Sie Antworten auf häufig gestellte Fragen zu $site_name-Konten, Einzahlungen, Auszahlungen und automatisiertem KI-Handel.";
$faq_h1 = "$site_name <mark>FAQ</mark>";
$faq_lead = "Klare Antworten auf die häufigsten Fragen zu Plattformsicherheit, Auszahlungen und automatisiertem Handel.";

// PRIVACY POLICY PAGE VARIABLES
$privacy_meta_title = "Datenschutzerklärung | $site_name Datensicherheit";
$privacy_meta_description = "Erfahren Sie, wie $site_name die Privatsphäre der Nutzer nach strengen internationalen Verschlüsselungsstandards schützt.";
$privacy_h1 = "Datenschutzrichtlinie";
$privacy_p1 = "Diese Datenschutzrichtlinie beschreibt, wie $site_name Informationen sammelt, verwendet und offenlegt, wenn Sie unsere Website besuchen, ein Konto registrieren oder unsere Handelssoftware nutzen.";
$privacy_sec1_title = "1. Datenerfassung & Nutzung";
$privacy_sec1_text = "Wir erfassen notwendige Kontaktinformationen (Name, E-Mail-Adresse, Telefonnummer), um Ihr Konto zu erstellen, Sie mit verifizierten Brokerpartnern zu verbinden und die Identität gemäß internationalen KYC- und AML-Standards zu überprüfen.";
$privacy_sec2_title = "2. Cookies & Tracking-Technologien";
$privacy_sec2_text = "Wir verwenden essenzielle und analytische Cookies, um die Website-Leistung zu verbessern, die Nutzererfahrung zu personalisieren und Verkehrsmuster zu überwachen. Sie können Ihre Browser-Cookie-Einstellungen jederzeit anpassen.";
$privacy_sec3_title = "3. Datensicherheit & DSGVO-Rechte";
$privacy_sec3_text = "Alle Nutzerdaten werden während der Übertragung und im Ruhezustand mit kryptografischen Protokollen auf Bankniveau verschlüsselt. Gemäß der Datenschutz-Grundverordnung (DSGVO) haben Nutzer das Recht, Zugang zu, Berichtigung von oder Löschung ihrer personenbezogenen Daten zu verlangen.";

// TERMS OF USE PAGE VARIABLES
$terms_meta_title = "Nutzungsbedingungen | $site_name";
$terms_meta_description = "Lesen Sie die offiziellen Allgemeinen Geschäftsbedingungen für die Nutzung der $site_name-Plattform und der zugehörigen Dienste.";
$terms_h1 = "Nutzungsbedingungen";
$terms_p1 = "Bitte lesen Sie diese Nutzungsbedingungen sorgfältig durch, bevor Sie auf $site_name zugreifen oder es nutzen. Durch die Registrierung eines Kontos erklären Sie sich mit diesen Bestimmungen einverstanden.";
$terms_sec1_title = "1. Nutzerberechtigung";
$terms_sec1_text = "Sie müssen mindestens 18 Jahre alt sein und in einer Rechtsordnung ansässig sein, in der Online-Handel und Kryptowährungstransaktionen rechtlich zulässig sind. Sie sind selbst dafür verantwortlich, die Einhaltung Ihrer lokalen Gesetze sicherzustellen.";
$terms_sec2_title = "2. Kontoregistrierung & Sicherheit";
$terms_sec2_text = "Sie verpflichten sich, bei der Registrierung wahrheitsgemäße, genaue und vollständige Informationen anzugeben. Sie sind allein für die Wahrung der Vertraulichkeit Ihrer Anmeldedaten verantwortlich.";
$terms_sec3_title = "3. Haftungsbeschränkung";
$terms_sec3_text = "$site_name bietet informative und softwaregestützte Vermittlungsdienste. Wir erteilen keine personalisierte Finanzberatung und garantieren keine Handelsrentabilität. Der Handel auf Finanzmärkten birgt ein inhärentes Kapitalrisiko.";

// RISK WARNING PAGE VARIABLES (TZ Item 19: Exact 4 sections)
$risk_meta_title = "Risikowarnung & Rechtlicher Hinweis | $site_name";
$risk_meta_description = "Wichtige Risikohinweise zum CFD-, Forex- und Kryptowährungshandel bei $site_name. Bitte vor einer Investition sorgfältig lesen.";
$risk_h1 = "Risikowarnung";
$risk_sec1_title = "1. Hinweis auf Hochrisikoinvestitionen & Volatilität";
$risk_sec1_text = "Der Handel mit Kryptowährungen, Differenzkontrakten (CFDs), Devisen (Forex) und anderen Finanzanlagen birgt ein erhebliches Verlustrisiko und ist nicht für alle Anleger geeignet. Kryptowährungsmärkte sind außerordentlich volatil, wobei die Preise starken Schwankungen als Reaktion auf regulatorische Ankündigungen, makroökonomische Verschiebungen oder Marktstimmungen unterliegen. Sie sollten niemals Geld investieren, dessen vollständigen Verlust Sie sich nicht leisten können.";
$risk_sec2_title = "2. Unabhängige Finanzberatung";
$risk_sec2_text = "Alle auf $site_name bereitgestellten Materialien, Tools, algorithmischen Signale und Kommentare dienen ausschließlich Informations-, Bildungs- und Marketingzwecken. Keiner der Inhalte dieser Website stellt eine personalisierte Anlage-, Rechts- oder Finanzberatung dar. Bevor Sie Trades ausführen, sollten Sie unabhängige Recherchen anstellen oder einen lizenzierten Finanzberater konsultieren.";
$risk_sec3_title = "3. Regulatorische & Geografische Einschränkungen";
$risk_sec3_text = "Bestimmte Rechtsordnungen schränken den Handel mit CFDs und Kryptowährungen für Privatanleger ein oder verbieten ihn. Es liegt in der alleinigen Verantwortung des Nutzers zu überprüfen, ob der Zugriff auf $site_name und die Nutzung von Partnerbrokerhäusern nach seinem lokalen Rechtsrahmen zulässig ist.";
$risk_sec4_title = "4. Plattformtechnologie & Marktausführung";
$risk_sec4_text = "Automatisierte Handelstools, Algorithmen der künstlichen Intelligenz und Marktindikatoren garantieren keine Gewinne und schließen Marktrisiken nicht aus. Technische Störungen, Netzwerklatenz, Systemausfälle und Liquiditätsengpässe können zu Verzögerungen bei der Handelsausführung oder zu Slippage führen.";

// SIGN UP / LOGIN PAGE VARIABLES
$sign_meta_title = "Registrieren | $site_name";
$sign_meta_description = "Erstellen Sie Ihr kostenloses $site_name Konto und beginnen Sie auf einer sicheren, regulierten Plattform mit dem Handel von Kryptowährungen.";
$sign_h1 = "Registrieren Sie Sich Bei <mark>$site_name</mark>";
$sign_lead = "Schließen Sie sich Tausenden von Tradern an und erhalten Sie sofortigen Zugang zu unserer KI-Handels-Engine.";

// ============================================================
// Geo-language template fallback content (TZ item 16). The
// language-folder pages (bg/cs/da/.../tr — everything except
// fr/de/it/nl, which have their own full native translations in
// their own lang.php) share ONE index.php body that pulls these
// vars. Without them defined here, those 19 folders render with
// entire sections blank. This is the English fallback so every
// geo folder renders a complete page even without a dedicated
// translator pass.
// ============================================================

// -- hero form / basic form labels --
$hero_form_heading = "Erstellen Sie Ihr kostenloses Konto";
$hero_form_button = "Registrieren";
$form_name_placeholder = "Geben Sie Ihren Vornamen ein";
$form_surname_placeholder = "Geben Sie Ihren Nachnamen ein";
$form_disclaimer_prefix = "Mit der Eingabe Ihrer persönlichen Daten und dem Klick auf die Schaltfläche akzeptieren Sie die";
$form_privacy_link_label = "Datenschutzerklärung";
$form_disclaimer_and = "und die";
$form_terms_link_label = "Nutzungsbedingungen";
$form_disclaimer_of_site = "dieser Website.";

// -- partners strip --
$partners_label = "Vertraut von führenden Partnern";

// -- "what is" section --
$whatis_label = "Über die Plattform";
$whatis_title = "Was ist $site_name?";
$whatis_intro = "$site_name ist die offizielle Online-Handelsplattform, die den Handel mit Kryptowährungen so einfach macht wie alltägliches Online-Banking — egal, ob Sie blutiger Anfänger oder langjähriger Investor sind.";
$whatis_icon_1_title = "KI-gestützte Analyse";
$whatis_icon_1_text = "Fortschrittliche Algorithmen übernehmen die gesamte Komplexität der Märkte für Sie.";
$whatis_icon_2_title = "Sofortige Ausführung";
$whatis_icon_2_text = "Tausende Datenpunkte werden jede Sekunde verarbeitet — Trades ohne Verzögerung.";
$whatis_icon_3_title = "Einfaches, intuitives Dashboard";
$whatis_icon_3_text = "Behalten Sie Ihr Guthaben und offene Positionen jederzeit auf einen Blick im Überblick.";
$whatis_icon_4_title = "Niedrige Einstiegshürde";
$whatis_icon_4_text = "Starten Sie mit einer Mindesteinzahlung von nur $app_price $app_currency — ohne versteckte Gebühren.";
$whatis_cta_text = "Möchten Sie mehr über unser Team und unser Produkt erfahren?";
$whatis_cta_link = "Über uns";

// -- stats section heading (per-stat label/value already set above) --
$stats_label = "$site_name in Zahlen";
$stats_title = "Zahlen, die mehr sagen als Versprechen";

// -- key benefits section --
$benefits_label = "Wichtige Vorteile";
$benefits_title = "Die wichtigsten Vorteile von $site_name";
$benefit_1_title = "Einsteigerfreundliche Plattform";
$benefit_1_text = "Intuitive Charts und Schritt-für-Schritt-Anleitungen helfen Ihnen beim Einstieg, ohne dass Sie sich überfordert fühlen. Sie können auch dann mit Kryptowährungen handeln, wenn Sie zum ersten Mal dabei sind — wir begleiten Sie durch jeden einzelnen Schritt.";
$benefit_2_title = "Offiziell und reguliert";
$benefit_2_text = "$site_name ist lizenziert und erfüllt die geltenden Finanzvorschriften. Wir nutzen SSL-Verschlüsselung und Zwei-Faktor-Authentifizierung, um Ihr Konto und Ihre Gelder zu schützen. Keine leeren Versprechen — nur ehrliche, zuverlässige Unterstützung beim Trading.";
$benefit_3_title = "Niedrige Einstiegshürde";
$benefit_3_text = "Mit einer Mindesteinzahlung von nur $app_price $app_currency kann jeder loslegen. Eine große Anfangsinvestition ist nicht erforderlich — starten Sie klein und erhöhen Sie Ihren Einsatz, sobald Ihr Vertrauen wächst.";
$benefit_4_title = "Transparente Gebühren";
$benefit_4_text = "Versteckte Gebühren werden Sie bei uns nie finden. Wir erheben, sofern zutreffend, nur minimale Transaktions- oder Auszahlungsgebühren, damit mehr von Ihrem Geld bei Ihnen bleibt.";
$benefit_5_title = "Rund-um-die-Uhr-Zugang zu Transaktionen";
$benefit_5_text = "Handeln Sie nach Ihrem eigenen Zeitplan, Tag und Nacht. $site_name funktioniert auf dem Desktop genauso gut wie mobil, sodass Sie überall auf Marktbewegungen reagieren können. Unsere Plattform ist schnell und zuverlässig — Preise werden in Echtzeit aktualisiert, damit Sie Chancen schnell nutzen können.";
$benefit_6_title = "Lokaler Kundensupport";
$benefit_6_text = "Unser Support-Team ist per Chat, Telefon oder E-Mail erreichbar. Echte Menschen helfen Ihnen in Ihrer Sprache, wann immer Sie es brauchen.";
$benefits_trust_title = "Weltweit vertraut";
$benefits_trust_text = "Deshalb vertrauen so viele Kryptowährungs-Nutzer $site_name. Tausende Trader handeln bereits mit $site_name, und unsere Community wächst täglich weiter — mit besonderer Aufmerksamkeit für jeden neuen Nutzer.";
$benefits_cta = "Registrieren";
$benefits_badge_1 = "256-Bit-SSL";
$benefits_badge_2 = "Sichere Zahlungen";
$benefits_badge_3 = "2FA";

// -- security section --
$security_label = "Sicherheit";
$security_title = "Ihr Geld ist bei $site_name sicher";
$security_subtitle = "Verschlüsselung auf Bankniveau, verifizierte Zahlungen und 98 % Cold Storage — Ihr Geld ist bei jedem Schritt geschützt.";
$security_1_title = "Verifizierte Zahlungsanbieter";
$security_1_text = "Zahlungen werden ausschließlich über zertifizierte Anbieter abgewickelt, die internationale Sicherheitsstandards erfüllen. Ihre Kartendaten werden auf unserer Plattform niemals gespeichert.";
$security_2_title = "256-Bit-SSL-Verschlüsselung";
$security_2_text = "Alle Daten, die zwischen Ihrem Gerät und unserer Plattform ausgetauscht werden, sind mit 256-Bit-TLS verschlüsselt. Kein Dritter kann Ihre Informationen abfangen oder lesen.";
$security_3_title = "98 % Cold Storage";
$security_3_text = "98 % der Vermögenswerte werden in Offline-Wallets ohne Internetverbindung verwahrt. Niemand kann aus der Ferne darauf zugreifen, selbst im Falle eines Angriffs nicht.";
$security_4_title = "Multi-Faktor-Authentifizierung";
$security_4_text = "Nur Sie haben Zugriff auf Ihr Konto. Jede Anmeldung wird durch einen zweiten Schritt bestätigt, den ausschließlich Sie kontrollieren.";
$security_5_title = "Kontoüberwachung";
$security_5_text = "Jede Anmeldung, jede Transaktion und jede Einstellungsänderung löst eine sofortige Benachrichtigung aus, damit Sie stets wissen, sobald etwas mit Ihrem Konto geschieht.";
$security_6_title = "Passwortschutz";
$security_6_text = "Passwörter werden in unlesbarer, nicht umkehrbarer Form gespeichert. Wir haben technisch keine Möglichkeit, Ihr Passwort einzusehen.";
$security_cta_title = "Holen Sie sich einen kostenlosen Leitfaden!";
$security_cta_text = "Sichern Sie sich unseren kostenlosen Einsteigerleitfaden und starten Sie noch heute mit dem Trading.";
$security_cta_button = "Registrieren";
$security_badge_1 = "98 % Cold Storage";
$security_badge_2 = "Verifizierte Zahlungen";
$security_badge_3 = "Verschlüsselt";

// -- how it works section --
$how_label = "So funktioniert's";
$how_title = "So funktioniert's";
$how_1_title = "Registrieren";
$how_1_text = "Klicken Sie auf die Schaltfläche \"Konto eröffnen\" und füllen Sie das Registrierungsformular mit Ihren Angaben aus (Name, E-Mail-Adresse und Telefonnummer). Das ist kostenlos und dauert nur wenige Minuten. Wir bitten Sie, Ihre E-Mail-Adresse zu bestätigen und ein Passwort zu erstellen. Zu Ihrer Sicherheit aktivieren Sie die Zwei-Faktor-Authentifizierung (2FA), die Ihre Gelder zusätzlich schützt.";
$how_2_title = "Geld einzahlen";
$how_2_text = "Als Nächstes zahlen Sie auf Ihr Konto ein. Die Mindesteinzahlung beträgt nur $app_price $app_currency. Sie können eine Kredit-/Debitkarte, eine lokale Banküberweisung oder gängige E-Wallets nutzen. Ihre Einzahlung sollte schnell auf Ihrem Konto erscheinen. (Tipp: Beginnen Sie mit einem Betrag, mit dem Sie sich wohlfühlen.) Bei Ihrer ersten Einzahlung bitten wir Sie möglicherweise um eine kurze Identitätsprüfung — ein Standardverfahren, das nur wenige Minuten dauert.";
$how_3_title = "Mit dem Trading beginnen";
$how_3_text = "Sobald Ihre Gelder auf Ihrem Konto eingegangen sind, können Sie mit dem Trading beginnen. Wählen Sie den gewünschten Vermögenswert (z. B. BTC, SOL oder USDT) und entscheiden Sie, wie viel Sie investieren möchten. $site_name gibt Ihnen die Werkzeuge an die Hand, um Ihre eigene Strategie festzulegen, einschließlich Stop-Loss-Grenzen und Zielpreisen. Wir bieten außerdem eine automatisierte Trading-Option an, die basierend auf dem von Ihnen gewählten Risikoniveau den Marktsignalen für Sie folgt. Verfolgen Sie Live-Charts auf Ihrem Dashboard — sobald ein Trade profitabel ist, aktualisiert sich Ihr Guthaben entsprechend.";
$how_cta_label = "So Funktioniert Es";
$how_cta_text = "Benötigen Sie weitere Informationen dazu, wie der Service funktioniert?";
$how_cta_link = "So funktioniert's";

// -- trust reasons section --
$trust_label = "Warum mit uns handeln";
$trust_intro = "Schließen Sie sich Tausenden Nutzern an, die bereits mit $site_name handeln.";
$trust_1_title = "Vollständig reguliert";
$trust_1_text = "$site_name ist ordnungsgemäß registriert und erfüllt die geltenden Finanzvorschriften. Wir arbeiten nach strengen Regeln, um Ihren Schutz zu gewährleisten.";
$trust_2_title = "Modernste Sicherheit";
$trust_2_text = "Alle Ihre Daten und Gelder sind verschlüsselt und geschützt. Wir setzen strengen Kontoschutz durch SSL-Verschlüsselung und Zwei-Faktor-Authentifizierung durch, damit Sie mit Zuversicht handeln können — im Wissen, dass wir Sicherheit ernst nehmen.";
$trust_3_title = "Transparente Abläufe";
$trust_3_text = "Wir verstecken unsere Gebühren nie und führen nie überraschende Regeln ein. Vor jedem Trade sehen Sie genau, welche Gebühren anfallen. Außerdem kommunizieren wir klar über die mit dem Trading verbundenen Risiken — diese Transparenz ist es, die Vertrauen innerhalb unserer Community schafft.";
$trust_4_title = "Reaktionsschneller Support";
$trust_4_text = "Unser Support-Team steht Ihnen per Chat, Telefon oder E-Mail zur Verfügung, um Ihre Fragen zu beantworten oder jedes Problem zu lösen.";
$trust_cta_text = "Weitere Informationen zur aktuellen Marktlage";
$trust_cta_link = "Warum handeln";

// -- testimonials section heading (individual reviews already set above) --
$testimonials_label = "Erfahrungsberichte";
$testimonials_title = "Vertraut von mehr als 4 Mio. Tradern";

// -- FAQ section heading --
$faq_label = "FAQ";

// -- lead magnet CTA block --
$leadmagnet_title = "Neu im Trading?";
$leadmagnet_text1 = "Nach Ihrer Registrierung erhalten Sie unseren kostenlosen Leitfaden,";
$leadmagnet_quote = "\"10 Fehler, die Sie beim Krypto-Handel vermeiden sollten\"";
$leadmagnet_text2 = "vollgepackt mit klaren Tipps unserer erfahrensten Analysten, damit Sie die häufigsten Fehler vermeiden.";
$leadmagnet_text3 = "Geben Sie einfach Ihre Daten ein, wenn Sie sich";
$leadmagnet_link = "registrieren";
$leadmagnet_text4 = "und wir senden ihn direkt in Ihr Postfach. Viele Investoren sind mit diesem Leitfaden gestartet und sagen, dass er ihnen echtes Vertrauen für ihre ersten Trades gegeben hat.";
$leadmagnet_text5 = "Der Markt wartet nicht — legen Sie noch heute los!";

// -- pre-about CTA band --
$pre_about_title = "Bereit, die Kontrolle über Ihr Trading zu übernehmen?";
$pre_about_text = "Werden Sie noch heute Teil von $site_name und erleben Sie eine Plattform, die auf Klarheit, Sicherheit und Ergebnisse ausgelegt ist.";
$pre_about_button = "Registrieren";

// -- pretest (quiz teaser) badges/CTA --
$pretest_title = "Starten Sie mit $app_price $app_currency ins Trading!";
$pretest_text = "Bereit, $site_name auszuprobieren? Registrieren Sie sich jetzt und werden Sie Teil der wachsenden Community von Krypto-Investoren und -Tradern.";
$pretest_button = "Registrieren";
$pretest_badge_1 = "Sicher";
$pretest_badge_2 = "Reguliert";
$pretest_badge_3 = "Vertraut von über 4 Mio. Tradern";

// -- about page --
$about_label = "Über uns";
$about_title = "Über $site_name";
$about_intro = "$site_name bietet Ihnen nicht nur eine Handelsplattform — wir helfen Ihnen, mit Klarheit und Zuversicht zu handeln.";
$about_text_1 = "$site_name ist die offizielle Online-Handelsplattform, die den Handel mit Kryptowährungen sowohl für Anfänger als auch für erfahrene Trader zugänglich macht.";
$about_text_2 = "Wir kombinieren KI-gestützte Marktanalysen mit einem einfachen, transparenten Dashboard, damit Sie immer genau wissen, wo Sie stehen. Ob Sie gerade erst anfangen oder Ihren Ansatz verfeinern — $site_name gibt Ihnen die Werkzeuge an die Hand, um zu Ihren eigenen Bedingungen zu handeln.";
$about_text_3 = "Jeder Teil der Plattform ist auf Klarheit ausgelegt: keine versteckten Gebühren, kein verwirrender Fachjargon, sondern klare Informationen, die Ihnen helfen, bessere Entscheidungen zu treffen, selbstbewusster zu handeln und die Kontrolle über Ihr Risiko zu behalten.";
$about_text_4 = "Unsere Plattform erspart Ihnen stundenlanges Rätselraten und schützt Sie vor intransparenten Alternativen minderer Qualität. Wir sind überzeugt, dass gute Tools und ehrliche Informationen Trader befähigen, strategisch zu handeln und nachhaltig zu wachsen.";

// -- contact page --
$contact_label = "Kontaktieren Sie uns";
$contact_title = "Kontaktieren Sie $site_name";
$contact_subtitle = "Haben Sie eine Frage oder benötigen Sie Unterstützung? Wir sind für Sie da, um Sie zu beraten und zu begleiten.";
$contact_text = "Bei $site_name sind wir überzeugt, dass Erfolg im Trading nichts mit Glück zu tun hat — er entsteht durch Präzision, Weitsicht und gute Planung.";
$contact_form_text = "Füllen Sie einfach das untenstehende Formular aus, und ein Mitglied unseres Teams meldet sich in Kürze bei Ihnen.";
$contact_form_button = "Nachricht senden";

// -- footer navigation labels (geo-page footer, TZ items 12/16/18) --
$footnav_col_pages = "Seiten";
$footnav_col_support = "Support";
$footnav_col_legal = "Rechtliches";
$footnav_col_company = "Unternehmen";
$footnav_home = "Startseite";
$footnav_sitemap = "Sitemap";
$footnav_conditions = "Nutzungsbedingungen";
$footnav_contact = "Kontakt";
$footnav_signup = "Registrieren";
$footer_risk_warning = "Risikohinweis";

// -- geo-page footer legal disclaimer (single-paragraph variant used by
// the geo template's own footer layout; the two-paragraph TZ item 21
// text above -- $footer_disclaimer_p1/$footer_disclaimer_p2 -- covers
// the root pages) --
$footer_disclaimer = "$site_name übernimmt keine Verantwortung für Verluste oder Schäden, die aus dem Vertrauen auf die auf dieser Website bereitgestellten Informationen entstehen, einschließlich Lehrmaterial, Kursangaben, Charts und Analysen. Der Handel auf den Finanzmärkten ist mit erheblichen Risiken verbunden; konsultieren Sie vor einer Investition bitte einen professionellen Berater. Investieren Sie niemals mehr, als Sie sich leisten können zu verlieren. Die mit Forex, CFDs und Kryptowährungen verbundenen Risiken sind möglicherweise nicht für alle Anleger geeignet. $site_name übernimmt keine Verantwortung für Handelsverluste, die Ihnen durch die Nutzung oder das Vertrauen auf die auf dieser Website verfügbaren Daten oder Informationen entstehen.";

// ============================================================
// Geo-language SUBPAGE fallback content (TZ item 16 cont.). Same
// rationale as the block above: conditions/contacts/faq/offer/
// privacy/product/risk-warning/sign.php share templates across the
// bg/cs/da/... stub folders and reference these vars directly.
// English fallback so every geo folder's subpages render complete.
// ============================================================

// -- shared form aliases (service-page forms reuse the hero disclaimer) --
$form_disclaimer_risk_note = "Bitte lesen Sie auch unseren";
$form_text = $form_disclaimer_prefix;
$form_text_privacy = $form_privacy_link_label;
$form_text_privacy_and = $form_disclaimer_and;
$form_text_conditions = $form_terms_link_label;
$form_text_conditions_of = $form_disclaimer_of_site;
$form_text_risk_warning_note = $form_disclaimer_risk_note;
$form_submit = "Registrieren";

// -- generic breadcrumbs (sign-up / product pages) --
$breadcrumb_home = "Startseite";
$breadcrumb_current = "Anmelden/Registrieren";
$breadcrumb_product = "Produkt";

// -- sign-up page official heading --
$official_heading = "Registrieren Sie sich bei der offiziellen $site_name Plattform™";
$official_description = "Erstellen Sie Ihr kostenloses Konto, um auf einer sicheren, transparenten Plattform mit dem Handel von Kryptowährungen zu beginnen.";

// -- product page: analytics banner --
$analytics_heading = "Klüger handeln mit $site_name";
$analytics_description = "Erhalten Sie klare Marktdaten in Echtzeit und KI-gestützte Einblicke. Treffen Sie fundierte Handelsentscheidungen mit Zuversicht.";

// -- product page: dashboard preview --
$app_main_heading = "Ihr Handels-Dashboard";
$app_feature_1_title = "Live-Marktdaten";
$app_feature_1_text = "Preise und Charts in Echtzeit direkt griffbereit";
$app_feature_2_title = "Portfolio-Tracking";
$app_feature_2_text = "Umfassende Kennzahlen zu Guthaben und Performance";
$app_feature_3_title = "Mobile Ansicht";
$app_feature_3_text = "Optimiert für mobile Browser";
$app_feature_4_title = "Watchlists";
$app_feature_4_text = "Behalten Sie die von Ihnen beobachteten Vermögenswerte im Blick";

// -- product page: capabilities --
$capabilities_main_title = "Das erwartet Sie";
$capabilities_feature_1_title = "KI-gestützte Signale";
$capabilities_feature_1_text = "Fortschrittliche Algorithmen analysieren Marktsignale und decken rund um die Uhr Chancen auf.";
$capabilities_feature_2_title = "Schnelle Anmeldung";
$capabilities_feature_2_text = "Registrieren Sie sich in wenigen Minuten mit einem sicheren, unkomplizierten Anmeldeprozess.";
$capabilities_feature_3_title = "Geprüfte Sicherheit";
$capabilities_feature_3_text = "256-Bit-SSL-Verschlüsselung, 2FA und 98 % Cold Storage schützen Ihr Geld bei jedem Schritt.";
$capabilities_feature_4_title = "Fortlaufender Support";
$capabilities_feature_4_text = "Erhalten Sie bei jedem Schritt Unterstützung von unserem Team — von der Registrierung bis zu Ihrem ersten Trade.";

// -- product page: stats strip --
$products_stats_currencies_v = "65+";
$products_stats_currencies_l = "Verfügbare Währungen";
$products_stats_users_v = "4 Mio.+";
$products_stats_users_l = "Registrierte Nutzer";
$products_stats_volume_v = "98+";
$products_stats_volume_l = "Unterstützte Länder";
$products_stats_countries_v = "24/7";
$products_stats_countries_l = "Transaktionszugang";

// -- product page: 3-step strip --
$step_1 = "Konto erstellen";
$step_2 = "Geld einzahlen";
$step_3 = "Mit Ihrer passenden Strategie mit dem Trading beginnen";

// -- shared "last update" label (privacy page) --
$last_update = "Letzte Aktualisierung";

// -- FAQ page --
$faq_page_meta_title = "FAQ | $site_name Support";
$faq_page_meta_description = "Antworten auf häufige Fragen dazu, wie $site_name funktioniert, zu den Preisen und zum Einstieg.";
$faq_page_title = "FAQ";
$faq_page_breadcrumb_home = "Startseite";
$faq_page_breadcrumb_current = "FAQ";
$faq_page_help_title = "Wie können wir Ihnen helfen?";
$faq_1_q = "Wie fange ich an?";
$faq_1_a = "Erstellen Sie Ihr Konto, bestätigen Sie Ihre E-Mail-Adresse und tätigen Sie Ihre erste Einzahlung — Pläne starten bereits ab $app_price $app_currency.";
$faq_2_q = "Sind mein Geld und meine Daten sicher? Ist $site_name zuverlässig?";
$faq_2_a = "Ja. Ihre Daten sind durch branchenübliche 256-Bit-Verschlüsselung geschützt, und Ihr Geld ist durch Zwei-Faktor-Authentifizierung und 98 % Cold Storage abgesichert.";
$faq_3_q = "Kann ich mein Konto jederzeit schließen oder Geld auszahlen?";
$faq_3_a = "Ja. Es gibt keine Einschränkungen bei Auszahlungen. Kontaktieren Sie jederzeit unser Support-Team — wir helfen Ihnen bei Ihrem Konto oder bearbeiten Ihre Auszahlung umgehend.";
$faq_4_q = "Woher weiß ich, ob diese Plattform die richtige für mich ist?";
$faq_4_a = "$site_name wurde sowohl für absolute Anfänger als auch für erfahrene Trader entwickelt, die effizienter handeln möchten — jedes Tool auf der Plattform ist darauf ausgelegt, Sie informiert zu halten und Ihnen die Kontrolle zu geben.";
$faq_5_q = "Brauche ich Handelserfahrung, um anzufangen?";
$faq_5_a = "Vorkenntnisse sind nicht erforderlich. Unser KI-gestützter Modus übernimmt die Analyse für Sie, und Sie können jederzeit in den manuellen Modus wechseln, wenn Sie mehr Kontrolle möchten.";

// -- contacts page --
$contacts_h3 = "Bei technischen Fragen oder Fragen zu Ihrem Konto wenden Sie sich bitte per E-Mail an uns";

// -- offer page (meta title/description already defined above) --
$offer_breadcrumb_home = "Startseite";
$offer_breadcrumb_current = "Angebot";
$offer_cta_h1 = "Starten Sie noch heute mit dem Trading";
$offer_cta_text = "In wenigen Minuten startklar: registrieren, Konto aufladen und auf einer sicheren, regulierten Plattform mit dem Handel von Kryptowährungen beginnen.";
$offer_how_it_works_title = "So funktioniert's";
$offer_official_platform_title = "Dies ist die offizielle $site_name Handelsplattform™";
$offer_official_platform_text = "Eine vertrauenswürdige, transparente Art, Kryptowährungen zu handeln — mit Echtzeit-Einblicken und voller Kontrolle.";

// -- conditions of use page --
$conditions_meta_title = "Nutzungsbedingungen | $site_name";
$conditions_meta_description = "Lesen Sie die offiziellen Nutzungsbedingungen für die Website und Handelsplattform von $site_name.";
$conditions_breadcrumb_home = "Startseite";
$conditions_breadcrumb_current = "Nutzungsbedingungen";
$conditions_h1 = "Nutzungsbedingungen";
$conditions_s1_title = "1. Allgemeines";
$conditions_s1_text = "Diese Website bietet Zugang zu einer Online-Handelsplattform für Kryptowährungen. Die Nutzung der Plattform stellt die vollständige Annahme dieser Bedingungen sowie unserer Datenschutzerklärung dar.";
$conditions_s2_title = "2. Berechtigung";
$conditions_s2_text = "Nutzer müssen mindestens 18 Jahre alt sein und über die volle Geschäftsfähigkeit in ihrem jeweiligen Rechtsgebiet verfügen.";
$conditions_s3_title = "3. Eingeschränkter Zugang";
$conditions_s3_text = "Der Zugang kann in Rechtsgebieten eingeschränkt sein, in denen lokale Vorschriften die von uns angebotene Art von Handelsdienstleistung untersagen.";
$conditions_s4_title = "4. Untersagte Nutzung";
$conditions_s4_text = "Nutzer dürfen das System nicht missbrauchen, keinen unbefugten Zugriff auf unsere Systeme versuchen und unsere Software nicht zurückentwickeln (Reverse Engineering).";
$conditions_s5_title = "5. Geistiges Eigentum";
$conditions_s5_text = "Sämtlicher Quellcode, alle Benutzeroberflächen und Markenwerte bleiben ausschließliches Eigentum des Betreiberunternehmens.";
$conditions_s6_title = "6. Haftung";
$conditions_s6_text = "Die Tools der Plattform werden \"wie besehen\" bereitgestellt. Wir übernehmen keine Haftung für Ergebnisse, die aus den eigenen Handelsentscheidungen eines Nutzers resultieren.";
$conditions_s7_title = "7. Dienste von Drittanbietern";
$conditions_s7_text = "Integrationen mit Zahlungsanbietern von Drittanbietern erfolgen über sichere Verbindungen. Für Ein- und Auszahlungen wenden sich Nutzer direkt an den von ihnen gewählten Anbieter.";
$conditions_s8_title = "8. Externe Links";
$conditions_s8_text = "Links zu externen Ressourcen dienen lediglich der Bequemlichkeit. Wir befürworten oder garantieren keine externe Software.";
$conditions_s9_title = "9. Sonstiges";
$conditions_s9_text = "Wir behalten uns das Recht vor, diese Bedingungen oder den Dienst jederzeit mit Veröffentlichung auf der Website zu ändern.";

// -- privacy policy page (meta title/description already defined above) --
$privacy_breadcrumb_home = "Startseite";
$privacy_breadcrumb_current = "Datenschutzerklärung";
$privacy_page_h1 = "Datenschutzerklärung";
$privacy_intro = "Wir respektieren Ihre Privatsphäre und verarbeiten personenbezogene Daten in vollständiger Übereinstimmung mit internationalen Standards und der europäischen DSGVO.";
$privacy_transparency_title = "Transparenz";
$privacy_transparency_text = "Wir legen klar dar, wie operative Telemetriedaten verarbeitet werden. Kontaktieren Sie den Support für weitere Details.";
$privacy_usage_title = "Datennutzung";
$privacy_usage_text = "Daten werden ausschließlich zur Bereitstellung des Zugangs, zur Absicherung von Sitzungen und zur Erfüllung von Compliance-Pflichten verwendet.";
$privacy_rights_short_title = "Ihre Rechte";
$privacy_rights_short_text = "Sie behalten das volle Recht, Ihre personenbezogenen Daten einzusehen, zu aktualisieren oder deren Löschung zu verlangen.";
$privacy_security_title = "Sicherheit";
$privacy_security_text = "Wir setzen AES-256-Verschlüsselung und Datenbankisolierung ein, um operative Telemetriedaten zu schützen.";
$privacy_s1_title = "1. Datenerhebung";
$privacy_s1_text = "Wir erheben Nutzungstelemetrie (IP-Adresse, Systemparameter, Browsertyp) sowie von Nutzern übermittelte Verifizierungsdaten.";
$privacy_s2_title = "2. Rechtsgrundlage";
$privacy_s2_text = "Die Verarbeitung stützt sich auf die ausdrückliche Einwilligung der Nutzer, regulatorische Compliance-Vorgaben und die Erbringung des Dienstes.";
$privacy_s3_title = "3. Datenweitergabe";
$privacy_s3_text = "Daten werden niemals kommerzialisiert. Offenlegungen beschränken sich auf autorisierte Clearingstellen und technische Partner im Rahmen einer Vertraulichkeitsvereinbarung (NDA).";
$privacy_s4_title = "4. Cookies";
$privacy_s4_text = "Essenzielle Cookies werden für die Sitzungsauthentifizierung und die Optimierung der Benutzeroberfläche verwendet.";
$privacy_google_choices = 'Verwalten Sie Ihre Tracking-Einstellungen über die <a href="http://www.google.com/settings/ads" target="_blank" rel="noopener">Google Ads-Einstellungen</a> oder nutzen Sie das <a href="https://tools.google.com/dlpage/gaoptout" target="_blank" rel="noopener">Google Analytics Opt-out-Add-on</a>. Die eigenen Datenschutzpraktiken von Google können Sie außerdem in dessen <a href="https://www.google.com/intl/en/policies/privacy/" target="_blank" rel="noopener">Datenschutzerklärung</a> nachlesen.';
$privacy_s5_title = "5. Datenspeicherung";
$privacy_s5_text = "Personenbezogene Daten werden ausschließlich so lange gespeichert, wie es zur Erfüllung der Anforderungen des Systemzugangs erforderlich ist.";
$privacy_s6_title = "6. Internationale Übermittlungen";
$privacy_s6_text = "Grenzüberschreitende Datenübertragungen erfolgen ausschließlich über verschlüsselte Kanäle und mittels Standardvertragsklauseln.";
$privacy_s7_title = "7. Links zu Drittanbietern";
$privacy_s7_text = "Wir übernehmen keine Verantwortung für die Datenschutzpraktiken externer Drittanbieter-Dienste, die auf unserer Website verlinkt sind.";
$privacy_s8_title = "8. Aktualisierungen";
$privacy_s8_text = "Diese Richtlinie kann regelmäßig angepasst werden, um System- oder Rechtsänderungen widerzuspiegeln.";
$privacy_rights_title = "Ihre Rechte";
$privacy_rights_text = "Nutzer haben das Recht, Zugang, Berichtigung, eingeschränkte Verarbeitung oder vollständige Löschung ihrer gespeicherten Daten zu verlangen.";

// -- risk warning page --
$page_title_risk_warning = "Risikohinweis | $site_name";
$page_description_risk_warning = "Verstehen Sie die Risiken des Tradings und wie $site_name Ihnen hilft, diese sicher zu managen.";
$risk_warning_breadcrumb_home = "Startseite";
$risk_warning_breadcrumb_current = "Risikohinweis";
$risk_warning_title = "Risikohinweis";
$risk_warning_intro = "Das Verständnis der Risiken ist der erste Schritt zu selbstbewusstem Trading.";
$risk_warning_ai_heading = "Wie unser KI-System beim Risikomanagement hilft:";
$risk_warning_ai_1 = "<strong>Algorithmische Effizienz &amp; emotionsloses Trading:</strong> Fortschrittliche Algorithmen analysieren Marktsignale, um Trades objektiv zum optimalen Zeitpunkt auszuführen.";
$risk_warning_ai_2 = "<strong>Datenbasierte Strategien:</strong> Strategien basieren auf verifizierten Marktmustern und Echtzeitanalysen statt auf Vermutungen.";
$risk_warning_ai_3 = "<strong>Flexible Einstellungen &amp; volle Kontrolle:</strong> Passen Sie Ihre Risikoparameter jederzeit an. Verfolgen Sie alle Guthaben und Trades transparent auf Ihrem Dashboard — ohne versteckte Gebühren und ohne Einschränkungen bei Auszahlungen.";
$risk_warning_disclaimer = "<strong>Haftungsausschluss:</strong> Trading ist stets mit Risiken verbunden. Automatisierte Systeme (einschließlich KI) garantieren keinen Gewinn, können aufgrund von Softwarefehlern oder unerwarteten Marktereignissen versagen und erfordern eine Überwachung durch den Nutzer. Die Wertentwicklung der Vergangenheit ist kein Indikator für zukünftige Ergebnisse. Diese Plattform dient ausschließlich Informations- und Marketingzwecken und stellt keine Finanzberatung dar.";
$risk_warning_s1_heading = "1. Allgemeine Risiken &amp; Risiken des Kryptowährungsmarktes";
$risk_warning_s1_1 = "Kryptowährungen sind hochvolatile, spekulative Vermögenswerte, die rund um die Uhr gehandelt werden und in den meisten Rechtsgebieten nur minimaler regulatorischer Aufsicht unterliegen.";
$risk_warning_s1_2 = "Werte können innerhalb kurzer Zeiträume drastisch schwanken, was zu einem vollständigen Verlust des investierten Kapitals führen kann.";
$risk_warning_s1_3 = "Marktwerte können durch regulatorische Änderungen, technische Entwicklungen, Sicherheitsverletzungen oder umfassendere makroökonomische Ereignisse erheblich beeinflusst werden.";
$risk_warning_s1_4 = "Manche Vermögenswerte können ihren gesamten Wert verlieren. Investieren Sie nur Geld, dessen Verlust Sie sich leisten können.";
$risk_warning_s2_heading = "2. Ausführungs-, Liquiditäts- &amp; Hebelrisiken";
$risk_warning_s2_1 = "<strong>Marktvolatilität &amp; Liquidität:</strong> Extreme Preisbewegungen (10–20 %+ täglich) oder geringe Liquidität (insbesondere bei kleineren Coins) können zu Verzögerungen, Plattformausfällen und erheblicher Ausführungs-Slippage führen. Stop-Loss-Orders können unter extremen Bedingungen keine Verlustbegrenzung garantieren.";
$risk_warning_s2_2 = "<strong>Hebel- &amp; Margin-Risiken:</strong> Gehebelte Produkte verstärken sowohl Gewinne als auch Verluste, sodass Sie mehr als Ihre ursprüngliche Einzahlung verlieren können. Etwa 70–80 % der Konten von Kleinanlegern verlieren beim Handel mit gehebelten Produkten Geld.";
$risk_warning_s3_heading = "3. Technische Risiken, Cybersicherheits- &amp; Drittanbieterrisiken";
$risk_warning_s3_1 = "<strong>Technische Faktoren:</strong> Online-Trading birgt naturgemäß Risiken wie Internetverbindungsabbrüche, Hardware-/Softwarefehler und Nichtverfügbarkeit des Dienstes.";
$risk_warning_s3_2 = "<strong>Cybersicherheit:</strong> Kryptowährungskonten sind häufige Ziele von Phishing, Malware und Hackerangriffen. Transaktionen sind unwiderruflich; die Kompromittierung Ihrer Zugangsdaten kann zu dauerhaftem Verlust führen.";
$risk_warning_s3_3 = "<strong>Plattformen von Drittanbietern:</strong> Diese Website kann Nutzer mit Plattformen von Drittanbietern verbinden. Wir kontrollieren, befürworten oder garantieren weder deren Sicherheit noch deren Betrieb oder Zahlungsfähigkeit. Führen Sie stets Ihre eigene Sorgfaltsprüfung durch, bevor Sie Gelder auf externen Plattformen einzahlen.";
$risk_warning_s4_heading = "4. Regulatorische, steuerliche &amp; abschließende Bestimmungen";
$risk_warning_s4_1 = "<strong>Rechtliche Compliance &amp; Steuern:</strong> Regulatorische Rahmenbedingungen variieren stark und ändern sich schnell. Nutzer sind allein dafür verantwortlich, dass ihre Handelsaktivität den örtlichen Gesetzen entspricht, sowie für die Erfüllung ihrer eigenen steuerlichen Pflichten.";
$risk_warning_s4_2 = "<strong>Keine Gewinngarantien:</strong> Es gibt keinen \"sicheren\" oder risikofreien Krypto-Handel. Etwaige Renditeangaben oder Performance-Beispiele sind rein hypothetisch.";
$risk_warning_s4_3 = "<strong>Eignung:</strong> Wenn Sie die Risiken nicht vollständig verstehen, auf notwendige finanzielle Mittel angewiesen sind oder mit geliehenem Geld handeln, ist der Krypto-Handel nicht für Sie geeignet. Wenden Sie sich im Zweifelsfall an einen unabhängigen, lizenzierten Finanzberater.";
$risk_warning_contact = "<strong>Kontakt:</strong> Bei Fragen zu dieser Erklärung oder um eine Anfrage einzureichen, wenden Sie sich bitte über das Kontaktformular auf unserer Website an unser offizielles Kundensupport-Team.";

