<?php
require __DIR__ . '/../lang.php';

// Identity / config variables are intentionally NOT overridden here — they are inherited
// as-is from the root lang.php so brand/pricing swaps still work correctly at deploy time:
// $site_name, $site_url, $site_domain, $app_price, $app_currency, $rating_value,
// $rating_count, $review_count, $country_name, $support_email, $institutional_email.

$site_lang = 'fr-FR';
$form_language = 'fr'; // matches this page's own language, not the offer's global default

// Reviews
$review_1_author = "Investisseur privé";
$review_2_author = "Trader indépendant";
$review_3_author = "Trader d'actifs numériques";
$review_4_author = "À la recherche d'un revenu passif";


// META TITLE / DESCRIPTION (per page)
$home_meta_title = "$site_name — Site officiel | Plateforme de trading";
$home_meta_description = "$site_name ⭐ — plateforme de trading intelligente basée sur l'IA pour une analyse de marché en temps réel et des signaux de trading clairs ⚡ Découvrez des outils intelligents avec une visite guidée.";



$quiz_consultant_name = 'Mia';
$quiz_consultant_role = 'Assistante d\'intégration';

$quiz_text_welcome   = "Bonjour ! Je suis $quiz_consultant_name, votre assistante personnelle d'intégration chez $site_name. Excellente nouvelle ! Votre accès est officiellement pré-approuvé. Permettez-nous maintenant de configurer votre profil professionnel !";
$quiz_text_q1 = "Afin de garantir une conformité légale et réglementaire complète, veuillez confirmer votre pays de résidence actuel : $country_name";
$quiz_text_a1_yes    = "Oui, c'est bien ma résidence actuelle";
$quiz_text_a1_no     = "Non";

$quiz_text_q2 = "Parfait. Veuillez sélectionner la tranche d'âge appropriée afin que nous trouvions les instruments financiers les plus adaptés :";

$quiz_text_q3        = "Disposez-vous d'un compte bancaire actif ou d'une carte de crédit pour recevoir des paiements de dividendes quotidiens réguliers ?";
$quiz_text_a3_yes    = "Oui, un compte actif est disponible";
$quiz_text_a3_no     = "Pas encore disponible";

$quiz_text_q4        = "Veuillez indiquer votre principale source de revenus. (Ce paramètre permet d'adapter les réglages de gestion des risques du système.)";
$quiz_text_a4_1      = "Emploi salarié / Indépendant";
$quiz_text_a4_2      = "Revenu passif / Épargne personnelle";
$quiz_text_a4_3      = "Autres sources";

$quiz_text_q5 = "Parfait ! La dernière étape consiste en une brève vérification téléphonique par notre conseiller afin de confirmer votre inscription. Les appels ont lieu de 11h00 à 20h00. Serez-vous disponible pour prendre l'appel ?";
$quiz_text_a5_yes    = "Oui, cet horaire me convient pour l'appel";
$quiz_text_a5_no     = "Veuillez lancer l'appel immédiatement";

$quiz_text_loader    = "Analyse des options demandées et initialisation des paramètres de configuration sécurisée du compte…";
$quiz_text_final_ttl = "Compte autorisé avec succès ! 🎉 Votre espace de travail numérique sécurisé est entièrement configuré. Veuillez compléter les dernières étapes de vérification ci-dessous pour garantir vos paiements quotidiens :";

$quiz_placeholder_fname = "Prénom";
$quiz_placeholder_lname = "Nom";
$quiz_placeholder_email = "Adresse e-mail";
$quiz_placeholder_phone = "Numéro de téléphone";
$quiz_btn_submit = "Activer le trading";
$quiz_text_typing       = "est en train d'écrire…";
$quiz_text_processing   = "Traitement de la demande…";


$about_meta_title = "À propos de $site_name | Infrastructure de trading crypto propulsée par l'IA";
$about_meta_description = "Découvrez $site_name, une infrastructure avancée de trading crypto propulsée par l'IA, axée sur l'analyse prédictive, l'intelligence de marché, la surveillance de la volatilité et la recherche sur les actifs numériques.";

$contact_meta_title = "Contacter $site_name | Demander l'accès à la plateforme de trading IA";
$contact_meta_description = "Contactez $site_name pour demander un accès, poser des questions sur notre infrastructure de trading crypto propulsée par l'IA, les marchés pris en charge, l'intelligence sur les actifs numériques ou l'intégration à la plateforme.";

$terms_meta_title = "Conditions générales | Conditions d'utilisation du site et de la plateforme $site_name";
$terms_meta_description = "Consultez les Conditions générales de $site_name concernant l'utilisation du site, le contenu informatif, l'infrastructure de trading IA, la responsabilité de l'utilisateur, les services tiers et les limitations de risque.";

$privacy_meta_title = "Politique de confidentialité | Protection des données et confidentialité chez $site_name";
$privacy_meta_description = "Consultez la Politique de confidentialité de $site_name pour comprendre comment nous collectons, utilisons, protégeons, stockons et gérons les informations personnelles soumises via notre site d'infrastructure de trading crypto IA.";

$cookies_meta_title = "Politique de cookies | Cookies et suivi du site $site_name";
$cookies_meta_description = "Découvrez comment $site_name utilise les cookies, les technologies d'analyse, les outils de suivi de performance et les services de fonctionnalité du site pour améliorer l'expérience utilisateur et la performance de la plateforme.";

$aml_meta_title = "Politique LCB-FT | Normes de lutte contre le blanchiment d'argent de $site_name";
$aml_meta_description = "Consultez la Politique LCB-FT de $site_name, incluant l'usage responsable des actifs numériques, la sensibilisation à la lutte contre le blanchiment d'argent, les activités interdites, les principes de surveillance et les attentes de conformité.";

$risk_meta_title = "Avertissement sur les risques | Déclaration de risque du trading crypto $site_name";
$risk_meta_description = "Consultez l'Avertissement sur les risques de $site_name pour comprendre la volatilité des cryptomonnaies, l'incertitude du trading, les limites des signaux IA, le risque de marché, le risque de liquidité et la responsabilité de l'utilisateur.";

$exchanges_meta_title = "Places d'échange prises en charge | Couverture de veille de marché de $site_name";
$exchanges_meta_description = "Découvrez les types de plateformes d'échange de cryptomonnaies, de lieux de liquidité et de marchés d'actifs numériques surveillés par l'infrastructure de veille de marché propulsée par l'IA de $site_name.";


$about_breadcrumb_name = "À propos de $site_name";
$contact_breadcrumb_name = "Contacter $site_name";
$terms_breadcrumb_name = "Conditions générales";
$privacy_breadcrumb_name = "Politique de confidentialité";
$cookies_breadcrumb_name = "Politique de cookies";
$aml_breadcrumb_name = "Politique LCB-FT";
$risk_breadcrumb_name = "Avertissement sur les risques";
$exchanges_breadcrumb_name = "Places d'échange prises en charge";

$hero_text = "Découvrez une nouvelle ère du trading grâce à notre plateforme avancée de trading crypto. Avec la technologie IA de $site_name, vous pouvez optimiser vos rendements et prendre des décisions d'investissement éclairées.";


// HEADER / NAV / FOOTER
$logo_subtitle = "Infrastructure de trading IA";
$nav_signals = "Signaux";
$nav_reviews = "Avis";
$nav_about = "À propos";
$nav_exchanges = "Places d'échange";
$nav_exchanges_full = "Places d'échange prises en charge";
$nav_risk = "Risque";
$nav_risk_full = "Avertissement sur les risques";
$nav_faq = "FAQ";
$nav_privacy = "Politique de confidentialité";
$nav_terms = "Conditions générales";
$nav_cookies = "Politique de cookies";
$nav_cookies_short = "Cookies";
$nav_aml = "Politique LCB-FT";
$nav_contact_us = "Contactez-nous";
$nav_contact = "Contact";
$nav_get_started = "Commencer";
$header_ai_status = "Noyau IA opérationnel";
$header_menu_aria = "Menu";
$footer_platform = "Plateforme";
$footer_resources = "Ressources";
$footer_contact_title = "Contact";
$footer_ai_signals = "Signaux IA";
$footer_about_link = "À propos de $site_name";
$footer_description = "$site_name est une infrastructure avancée de trading crypto propulsée par l'IA, axée sur l'analyse prédictive, la veille de marché de niveau institutionnel, la modélisation de la volatilité, les systèmes d'exécution neuronaux et la gestion automatisée des risques.";
$footer_monitoring = "Surveillance de l'infrastructure IA 24/7";
$footer_global_markets = "Marchés mondiaux d'actifs numériques";
$footer_disclaimer_title = "Avertissement sur les risques";
$footer_disclaimer_p1 = "Le trading de cryptomonnaies et l'investissement dans les actifs numériques comportent un risque financier important et peuvent ne pas convenir à tous les investisseurs. La volatilité du marché, les perturbations de liquidité, les défaillances technologiques, les changements réglementaires et les conditions macroéconomiques peuvent affecter significativement la performance des actifs.";
$footer_disclaimer_p2 = "$site_name fournit une infrastructure analytique propulsée par l'IA, une veille de marché prédictive et des technologies de trading automatisées. Rien sur ce site ne constitue un conseil financier, d'investissement, juridique ou fiscal.";
$footer_disclaimer_p3 = "Les performances passées ne garantissent pas les résultats futurs. Les utilisateurs doivent évaluer les risques de manière indépendante avant de s'engager sur les marchés de cryptomonnaies ou avec des systèmes de trading automatisés.";
$footer_rights = "Tous droits réservés.";
$footer_lang_label = "Langue";



// HOME FORM
$home_form_fname = "Prénom";
$home_form_lname = "Nom";
$home_form_email = "E-mail";
$home_form_submit_access = "Obtenir l'accès";
$home_form_submit_platform = "Demander l'accès à la plateforme";

// CONTACT FORM
$contact_form_fname = "Prénom";
$contact_form_lname = "Nom";
$contact_form_email = "E-mail";
$contact_form_submit = "Demander l'accès";


// HOME LABELS
$home_label_ai_confidence = "Confiance de l'IA";
$home_label_update_speed = "Vitesse de mise à jour";
$home_label_market_mode = "Mode de marché";
$home_label_market_condition = "Condition du marché";
$home_label_buyer_activity = "Activité des acheteurs";
$home_label_market_activity = "Activité du marché";
$home_label_risk_level = "Niveau de risque";
$home_label_updated = "Mis à jour";
$home_label_live_analysis = "ANALYSE EN DIRECT";

// JS
$home_js_sec_ago = "s";
$js_sec_ago = "s";
$js_close_notification = "Fermer la notification";

$js_signal_long_direction = "Probabilité de tendance haussière en hausse";
$js_signal_long_market = "Expansion contrôlée";
$js_signal_long_pressure_label = "Pression de liquidité";
$js_signal_long_pressure = "Haussier";

$js_signal_short_direction = "Pression baissière en hausse";
$js_signal_short_market = "Forte instabilité";
$js_signal_short_pressure_label = "Pression de risque";
$js_signal_short_pressure = "Baissier";

$js_signal_watch_direction = "Zone de consolidation détectée";
$js_signal_watch_market = "Consolidation neutre";
$js_signal_watch_pressure_label = "Flux institutionnel";
$js_signal_watch_pressure = "Stable";

$js_hero_long_pair = "BTC/USD Expansion du momentum";
$js_hero_long_regime = "Haussier";
$js_hero_long_feed_1 = "Expansion de liquidité BTC détectée";
$js_hero_long_feed_2 = "La pression des flux d'ordres devient positive";
$js_hero_long_feed_3 = "Le modèle IA confirme la continuation haussière";

$js_hero_watch_pair = "ETH/USD Compression de volatilité";
$js_hero_watch_regime = "Neutre";
$js_hero_watch_feed_1 = "Zone de compression ETH détectée";
$js_hero_watch_feed_2 = "L'IA attend une confirmation plus forte";
$js_hero_watch_feed_3 = "La liquidité reste stable";

$js_hero_short_pair = "SOL/USD Expansion du risque";
$js_hero_short_regime = "Aversion au risque";
$js_hero_short_feed_1 = "Pression baissière SOL détectée";
$js_hero_short_feed_2 = "Le modèle de risque signale une expansion de la volatilité";
$js_hero_short_feed_3 = "L'IA réduit l'exposition haussière";

// JS — live user popup actions
$js_live_action_1 = "a rejoint $site_name depuis";
$js_live_action_2 = "a demandé l'accès à la plateforme depuis";
$js_live_action_3 = "a démarré le suivi des signaux IA depuis";
$js_live_action_4 = "a activé l'analyse de marché depuis";
$js_live_action_5 = "a ouvert le tableau de bord institutionnel depuis";
$js_live_action_6 = "s'est connecté à $site_name depuis";


// HOME PAGE
$home_hero_label = "Plateforme crypto IA pour tous les niveaux d'expérience";
$home_hero_title = "Plateforme $site_name";
$home_hero_desc = "$site_name aide les débutants et les traders expérimentés à explorer les marchés crypto grâce à des analyses propulsées par l'IA, une surveillance du marché en temps réel, des outils de sensibilisation aux risques et un accompagnement guidé de la plateforme.";
$home_hero_feat_1 = "Analyses IA simples pour les nouveaux utilisateurs";
$home_hero_feat_2 = "Suivi crypto en temps réel et mises à jour des signaux";
$home_hero_feat_3 = "Outils sensibles au risque pour des décisions plus avisées";
$home_hero_feat_4 = "Analyses avancées pour les traders expérimentés";
$home_btn_request_access = "Obtenir l'accès à la plateforme";
$home_btn_view_signals = "Voir les signaux IA";
$home_trust_data_label = "Points de données de marché analysés";
$home_trust_confidence_label = "Confiance moyenne des signaux";
$home_trust_monitoring_label = "Surveillance de marché par IA";
$home_terminal_title = "$site_name Vue de marché IA guidée";
$home_terminal_insight_label = "Analyse actuelle du marché par l'IA";
$home_terminal_feed_1 = "L'activité du marché BTC montre un momentum plus fort";
$home_terminal_feed_2 = "Le mouvement de l'ETH est surveillé pour confirmation";
$home_terminal_feed_3 = "L'assistant IA met en évidence une zone d'opportunité potentielle";
$home_trust_strip_1 = "Analyses IA pour débutants et traders expérimentés";
$home_trust_strip_2 = "Surveillance des marchés crypto 24/7";
$home_trust_strip_3 = "Analyse des risques et opportunités en temps réel";
$home_trust_strip_4 = "Accès guidé à des outils de trading avancés";
$home_signals_eyebrow = "$site_name NOYAU IA EN DIRECT";
$home_signals_title = "Signaux de marché IA en temps réel pour des décisions crypto plus intelligentes";
$home_signals_desc = "$site_name surveille en permanence l'activité des marchés de cryptomonnaies, la volatilité, les conditions de liquidité, les tendances de sentiment et les données blockchain afin de générer des analyses propulsées par l'IA et des signaux de marché en temps réel pour les débutants comme pour les traders expérimentés.";
$home_signals_terminal_title = "$site_name Moteur de signaux IA";
$home_signal_btc_sub = "Momentum positif détecté";
$home_signal_btc_dir = "Probabilité de tendance haussière en hausse";
$home_signal_btc_market = "Momentum positif";
$home_signal_btc_activity = "Fort";
$home_signal_eth_sub = "En attente de confirmation du marché";
$home_signal_eth_dir = "Mouvement latéral détecté";
$home_signal_eth_market = "Tendance neutre";
$home_signal_eth_activity = "Stable";
$home_signal_sol_sub = "Risque de marché accru détecté";
$home_signal_sol_dir = "Pression baissière en hausse";
$home_signal_sol_market = "Volatilité élevée";
$home_signal_sol_risk = "Élevé";
$home_why_eyebrow = "POURQUOI $site_name ?";
$home_why_title = "Des outils crypto propulsés par l'IA conçus pour tous les niveaux d'expérience";
$home_why_desc_1 = "$site_name aide les utilisateurs à mieux comprendre les marchés de cryptomonnaies grâce à l'intelligence artificielle, la surveillance en temps réel, les analyses de marché et des outils de sensibilisation aux risques. Que vous découvriez la crypto pour la première fois ou que vous ayez déjà de l'expérience en trading, la plateforme est conçue pour rendre l'analyse de marché plus accessible et plus facile à comprendre.";
$home_why_desc_2 = "L'infrastructure de $site_name évalue en permanence l'activité du marché, les mouvements de prix, les conditions de liquidité, les tendances de sentiment et les données blockchain afin d'identifier les opportunités émergentes et l'évolution des conditions de marché. Les nouveaux utilisateurs bénéficient d'un accompagnement guidé, tandis que les traders expérimentés peuvent explorer des outils analytiques avancés et une veille de marché propulsée par l'IA.";
$home_flow_1 = "Surveillance du marché";
$home_flow_2 = "Analyse IA";
$home_flow_3 = "Détection d'opportunités";
$home_flow_4 = "Évaluation des risques";
$home_flow_5 = "Analyses exploitables";
$home_reviews_eyebrow = "COMMUNAUTÉ $site_name";
$home_reviews_title = "Ce que disent les utilisateurs de $site_name";
$home_reviews_desc = "Des nouveaux utilisateurs de crypto aux traders expérimentés, les gens utilisent $site_name pour mieux comprendre les conditions de marché, explorer des analyses propulsées par l'IA et aborder leurs décisions crypto avec plus de clarté.";
$home_review_1_text = "Avant de découvrir $site_name, je me sentais submergé par la quantité d'informations dans l'univers des cryptomonnaies. Chaque plateforme semblait compliquée et j'avais constamment peur de faire des erreurs. Ce que j'apprécie le plus chez $site_name, c'est à quel point tout paraît accessible. Les analyses de l'IA m'ont aidé à comprendre les conditions de marché sans me sentir perdu, et la plateforme m'a donné la confiance nécessaire pour apprendre à mon propre rythme. Je suis vraiment reconnaissant de voir à quel point l'expérience a été plus simple que ce à quoi je m'attendais.";
$home_review_1_tag = "Un début sûr et facile";
$home_review_badge = "UTILISATEUR VÉRIFIÉ";
$home_review_2_text = "J'ai passé des mois à examiner des plateformes crypto sans jamais me sentir suffisamment à l'aise pour franchir le pas. $site_name a complètement changé cette expérience. La plateforme a rendu les informations de marché plus faciles à comprendre, et je n'ai jamais eu l'impression d'avoir besoin d'années d'expérience en trading pour utiliser les outils. Ce qui m'a le plus impressionné, c'est l'équilibre entre simplicité et analyse IA puissante. On a l'impression d'avoir un accompagnement disponible en permanence. Je suis reconnaissant d'avoir trouvé une plateforme qui m'a permis d'apprendre sans me sentir intimidé.";
$home_review_2_tag = "Un apprentissage plus facile";
$home_review_3_text = "J'ai testé de nombreuses plateformes d'analyse de marché, et $site_name se démarque car elle allie accessibilité et véritable profondeur analytique. Les nouveaux utilisateurs comprennent rapidement la plateforme, tandis que les traders expérimentés continuent de bénéficier de signaux de marché pertinents pilotés par l'IA, d'une surveillance des risques et d'une intelligence crypto en temps réel. Cet équilibre est difficile à trouver. La plateforme offre un contexte de marché pertinent sans submerger les utilisateurs, ce que très peu d'outils crypto parviennent à faire.";
$home_review_3_tag = "Des outils avancés à l'usage simple";
$home_review_span_1 = "Nouvel utilisateur crypto";
$home_review_span_2 = "Utilisateur de la plateforme pour la première fois";
$home_review_span_3 = "Trader crypto professionnel";
$home_review_1_avatar_alt = "Sean Miller, utilisateur $site_name";
$home_review_2_avatar_alt = "Ethan Lucas, utilisateur $site_name";
$home_review_3_avatar_alt = "Alexander Thompson, utilisateur $site_name";
$home_hero_visual_alt = "Tableau de bord d'analyse de marché propulsé par l'IA sur $site_name";
$home_signal_visual_alt = "Signal de trading en temps réel généré par l'IA de $site_name";
$home_device_visual_alt = "Analyses crypto affichées sur un appareil connecté via $site_name";
$home_security_visual_alt = "Bouclier de sécurité représentant la protection des comptes $site_name";
$home_contact_eyebrow = "COMMENCEZ AVEC $site_name";
$home_contact_title = "Explorez la plateforme en toute confiance";
$home_contact_desc_1 = "Que vous soyez totalement novice sur les marchés de cryptomonnaies ou que vous ayez déjà de l'expérience en trading, $site_name donne accès à des analyses de marché propulsées par l'IA, des outils de surveillance en temps réel et des analyses intelligentes conçues pour aider les utilisateurs à mieux comprendre les opportunités liées aux actifs numériques.";
$home_contact_desc_2 = "Envoyez vos coordonnées pour en savoir plus sur la plateforme, découvrir les fonctionnalités disponibles et voir comment $site_name peut vous aider à naviguer sur les marchés de cryptomonnaies grâce à une technologie avancée et un accompagnement guidé de la plateforme.";
$home_seo_toggle = "En savoir plus sur la plateforme IA $site_name";
$home_seo_h2 = "$site_name Plateforme IA pour des décisions plus intelligentes sur le marché crypto";
$home_seo_p1 = "$site_name est une plateforme de cryptomonnaies propulsée par l'IA, conçue à la fois pour les débutants et les traders expérimentés. La plateforme combine intelligence artificielle, surveillance de marché en temps réel et outils analytiques avancés pour aider les utilisateurs à mieux comprendre les marchés d'actifs numériques et à identifier les opportunités potentielles.";
$home_seo_p2 = "Contrairement à de nombreuses plateformes de trading traditionnelles qui exigent une connaissance approfondie du marché, $site_name a été conçue pour rendre les informations de marché complexes plus faciles à comprendre. La plateforme analyse en continu l'activité des cryptomonnaies, les mouvements de prix, les tendances de sentiment, les conditions de liquidité et les données blockchain, transformant de grands volumes d'informations en analyses concrètes.";
$home_seo_p3 = "Que vous découvriez les marchés de cryptomonnaies pour la première fois ou que vous ayez déjà de l'expérience dans le trading d'actifs numériques, $site_name propose des outils intelligents conçus pour favoriser une prise de décision plus éclairée tout en s'adaptant en temps réel à l'évolution des conditions de marché.";
$home_seo_h3_1 = "L'analyse de marché par IA rendue accessible";
$home_seo_h3_1_p1 = "$site_name utilise l'intelligence artificielle pour évaluer un large éventail d'indicateurs de marché, notamment l'activité de trading, les schémas de volatilité, les conditions de liquidité, les événements blockchain et le sentiment de marché. En traitant les informations en continu, la plateforme aide les utilisateurs à mieux comprendre le comportement actuel du marché.";
$home_seo_h3_1_p2 = "Les modèles d'IA sont conçus pour s'adapter à des environnements changeants plutôt que de reposer sur des hypothèses statiques. Cela permet à la plateforme de réagir de manière dynamique à l'évolution des tendances crypto et aux opportunités de marché émergentes.";
$home_seo_h3_1_p3 = "Bien qu'assez avancée pour les traders expérimentés, la plateforme est également structurée pour rester accessible aux nouveaux utilisateurs souhaitant bénéficier d'une veille de marché pilotée par l'IA sans nécessiter d'expertise technique approfondie.";
$home_seo_h3_2 = "Signaux de marché IA en temps réel";
$home_seo_h3_2_p1 = "$site_name surveille en continu les marchés de cryptomonnaies et génère des analyses propulsées par l'IA en fonction de l'évolution de l'activité du marché. La plateforme évalue le momentum, la volatilité, les conditions de liquidité et le comportement général du marché afin de fournir des signaux analytiques en temps réel.";
$home_seo_h3_2_p2 = "Bitcoin, Ethereum, Solana, XRP, Avalanche et d'autres actifs numériques majeurs sont surveillés grâce à des modèles analytiques adaptatifs qui s'ajustent automatiquement à l'évolution des conditions de marché.";
$home_seo_h3_2_p3 = "Plutôt que de s'appuyer sur un seul indicateur ou une mesure isolée, $site_name combine plusieurs sources d'information au sein d'un cadre analytique plus large, conçu pour offrir une vision plus complète des conditions de marché.";
$home_seo_h3_3 = "Des outils intelligents de sensibilisation aux risques";
$home_seo_h3_3_p1 = "Les marchés de cryptomonnaies peuvent évoluer rapidement. $site_name intègre des systèmes de surveillance propulsés par l'IA conçus pour identifier une volatilité inhabituelle, l'évolution des conditions de liquidité et les risques de marché émergents.";
$home_seo_h3_3_p2 = "La plateforme évalue en permanence le comportement du marché et les facteurs de risque potentiels, aidant les utilisateurs à mieux comprendre l'évolution des conditions et à prendre des décisions plus éclairées.";
$home_seo_h3_3_p3 = "En combinant plusieurs niveaux d'analyse, $site_name cherche à améliorer la connaissance du marché et à aider les utilisateurs à traverser les périodes d'incertitude accrue avec plus de confiance.";
$home_seo_h3_4 = "Conçue pour les marchés de cryptomonnaies modernes";
$home_seo_h3_4_p1 = "$site_name combine intelligence artificielle, technologies de surveillance en temps réel et outils analytiques avancés au sein d'une seule plateforme conçue pour les marchés modernes d'actifs numériques.";
$home_seo_h3_4_p2 = "L'infrastructure évalue en continu l'activité du marché, les développements blockchain, les changements de sentiment et les tendances de liquidité afin d'offrir une vision complète du comportement du marché crypto.";
$home_seo_h3_4_p3 = "À mesure que les marchés d'actifs numériques continuent d'évoluer, les outils propulsés par l'IA peuvent aider les utilisateurs à traiter l'information plus efficacement et à mieux comprendre des environnements de marché de plus en plus complexes. $site_name est conçue pour rendre ces capacités accessibles à un plus large éventail d'acteurs du marché.";
$home_seo_side_1_label = "Analyses IA";
$home_seo_side_1_title = "Analyse de marché facile à comprendre";
$home_seo_side_1_desc = "Des analyses propulsées par l'IA conçues pour les utilisateurs crypto nouveaux comme expérimentés.";
$home_seo_side_2_label = "Surveillance du marché";
$home_seo_side_2_title = "Suivi crypto en temps réel";
$home_seo_side_2_desc = "Surveillance continue des principaux marchés de cryptomonnaies et de l'évolution des conditions de marché.";
$home_seo_side_3_label = "Sensibilisation aux risques";
$home_seo_side_3_title = "Détection intelligente des risques";
$home_seo_side_3_desc = "Des outils de surveillance avancés conçus pour mettre en évidence l'évolution de la dynamique du marché et de la volatilité.";
$home_seo_side_4_label = "Technologie IA";
$home_seo_side_4_title = "Modèles analytiques adaptatifs";
$home_seo_side_4_desc = "Des systèmes d'apprentissage automatique qui évaluent en continu les données de marché et les tendances émergentes.";
$home_faq_eyebrow = "BASE DE CONNAISSANCES $site_name";
$home_faq_title = "Questions fréquentes sur $site_name";
$home_faq_desc = "Découvrez comment fonctionne la plateforme, à qui elle s'adresse, et comment l'intelligence artificielle aide les utilisateurs à mieux comprendre les conditions des marchés de cryptomonnaies.";
$home_faq_q1 = "Ai-je besoin d'expérience en trading pour utiliser $site_name ?";
$home_faq_a1 = "Non. $site_name est conçue pour des utilisateurs de tous niveaux d'expérience, y compris les personnes totalement novices sur les marchés de cryptomonnaies. La plateforme utilise des analyses propulsées par l'IA et des outils de surveillance de marché pour rendre les informations complexes plus faciles à comprendre.";
$home_faq_q2 = "Que fait réellement $site_name ?";
$home_faq_a2 = "$site_name analyse en permanence les marchés de cryptomonnaies grâce à l'intelligence artificielle. La plateforme évalue l'activité du marché, la volatilité, les tendances de sentiment, les conditions de liquidité et les données blockchain afin de générer des analyses et des signaux en temps réel.";
$home_faq_q3 = "Les traders expérimentés peuvent-ils utiliser $site_name ?";
$home_faq_a3 = "Oui. Bien que la plateforme soit accessible aux débutants, elle propose également des outils analytiques avancés, une veille de marché pilotée par l'IA et des fonctionnalités de surveillance en temps réel qui peuvent s'avérer précieuses pour les acteurs de marché expérimentés.";
$home_faq_q4 = "Quelles cryptomonnaies $site_name surveille-t-elle ?";
$home_faq_a4 = "La plateforme peut analyser les principaux actifs numériques tels que Bitcoin, Ethereum, Solana, XRP, Avalanche et d'autres cryptomonnaies largement échangées, en fonction des conditions de marché et des sources de données disponibles.";
$home_faq_q5 = "Comment les signaux IA sont-ils générés ?";
$home_faq_a5 = "$site_name évalue simultanément plusieurs facteurs de marché, notamment la volatilité, l'activité de trading, les conditions de liquidité, les tendances de sentiment et le comportement historique du marché. Les modèles d'IA combinent ces données pour identifier l'évolution des conditions de marché et les opportunités potentielles.";
$home_faq_q6 = "$site_name propose-t-elle un accompagnement pédagogique ?";
$home_faq_a6 = "La plateforme est conçue pour aider les utilisateurs à mieux comprendre les conditions de marché grâce à des analyses propulsées par l'IA, des informations simplifiées et un accès guidé aux fonctionnalités de la plateforme. Les nouveaux utilisateurs peuvent explorer les marchés de cryptomonnaies sans avoir besoin de connaissances techniques avancées.";
$home_cta_label = "Plateforme IA prête";
$home_cta_title = "Commencez à explorer $site_name dès aujourd'hui";
$home_cta_desc = "Découvrez des analyses de marché propulsées par l'IA, une surveillance des cryptomonnaies en temps réel, des outils intelligents de sensibilisation aux risques et des analyses avancées conçues pour les débutants comme pour les traders expérimentés.";
$home_ticker_text = "Surveillance de marché IA active • Analyse des cryptomonnaies en temps réel • Momentum du Bitcoin en renforcement • Consolidation de l'Ethereum détectée • Nouvelles opportunités de marché identifiées • Systèmes de surveillance des risques en ligne • Analyses IA mises à jour en continu • Conçue pour les débutants et les traders expérimentés";




// ABOUT PAGE
$about_h1 = "À propos de $site_name";
$about_p1 = "$site_name est une infrastructure d'intelligence artificielle de nouvelle génération, conçue pour aider les acteurs du marché à mieux comprendre l'écosystème crypto en évolution rapide. En combinant technologies d'apprentissage automatique, analyses prédictives, systèmes de veille de marché et traitement de données en temps réel, $site_name offre un environnement complet pour surveiller l'activité des actifs numériques et identifier les évolutions de marché importantes.";
$about_p2 = "Le marché des cryptomonnaies fonctionne en continu sur de multiples places d'échange, juridictions et fournisseurs de liquidité. Chaque seconde, des milliers de variables influencent les prix, la volatilité, les conditions de liquidité et le sentiment des investisseurs. $site_name a été développée dans le but de traiter ces flux de données complexes de manière structurée et évolutive.";
$about_h2_vision = "La vision derrière $site_name";
$about_p_vision_1 = "Les marchés financiers sont devenus de plus en plus axés sur les données. Les méthodes d'analyse traditionnelles peinent souvent à suivre le volume d'informations généré par les écosystèmes d'actifs numériques modernes. $site_name cherche à combler cet écart grâce à l'application d'une intelligence computationnelle avancée, de systèmes de surveillance automatisés et de modèles analytiques adaptatifs.";
$about_p_vision_2 = "La vision à long terme de $site_name est de fournir des outils de veille de marché transparents, capables d'aider les utilisateurs à mieux comprendre la structure du marché crypto, les conditions de risque et les tendances émergentes.";
$about_h2_ai = "Infrastructure d'intelligence artificielle";
$about_p_ai_1 = "Au cœur de $site_name se trouve un cadre d'intelligence artificielle multicouche conçu pour traiter simultanément les informations issues de nombreuses sources de marché.";
$about_p_ai_2 = "Ces sources peuvent inclure :";
$about_li_1 = "Flux de prix des cryptomonnaies";
$about_li_2 = "Activité du carnet d'ordres";
$about_li_3 = "Données de mouvement de liquidité";
$about_li_4 = "Indicateurs de volatilité";
$about_li_5 = "Métriques des transactions blockchain";
$about_li_6 = "Signaux de sentiment de marché";
$about_li_7 = "Évolutions macroéconomiques";
$about_li_8 = "Activité du marché institutionnel";
$about_p_ai_3 = "En évaluant en continu les relations entre ces variables, $site_name cherche à identifier des schémas susceptibles de fournir un contexte de marché précieux.";
$about_h2_risk = "Philosophie de sensibilisation aux risques";
$about_p_risk_1 = "Une participation responsable aux marchés de cryptomonnaies exige une compréhension claire des risques. $site_name met l'accent sur la sensibilisation aux risques comme composante fondamentale de l'analyse des actifs numériques.";
$about_p_risk_2 = "La volatilité du marché, les fluctuations de liquidité, les événements propres aux places d'échange, les évolutions réglementaires et les conditions macroéconomiques plus larges peuvent tous influer sur les résultats du marché. Les utilisateurs ne doivent donc jamais se fier exclusivement à une seule source d'information pour prendre leurs décisions.";
$about_h2_global = "Marchés mondiaux d'actifs numériques";
$about_p_global_1 = "Les marchés de cryptomonnaies fonctionnent à l'échelle mondiale et impliquent des participants issus de régions, de secteurs et d'environnements économiques divers. L'infrastructure de $site_name est conçue pour surveiller simultanément plusieurs segments de marché, permettant aux utilisateurs d'observer les évolutions survenant dans différentes parties de l'écosystème des actifs numériques.";
$about_p_global_2 = "Cette perspective plus large peut contribuer à améliorer la connaissance de l'évolution des conditions de marché et des tendances émergentes.";
$about_h2_why = "Pourquoi les utilisateurs explorent $site_name";
$about_why_li_1 = "Veille de marché avancée propulsée par l'IA";
$about_why_li_2 = "Surveillance crypto en temps réel";
$about_why_li_3 = "Infrastructure analytique de style institutionnel";
$about_why_li_4 = "Évaluation multifactorielle du marché";
$about_why_li_5 = "Surveillance de la volatilité et de la liquidité";
$about_why_li_6 = "Outils de recherche évolutifs sur les actifs numériques";
$about_why_li_7 = "Méthodologie analytique sensible aux risques";
$about_h2_forward = "Perspectives d'avenir";
$about_p_forward_1 = "À mesure que les marchés d'actifs numériques continuent de mûrir, l'importance d'une infrastructure analytique avancée devrait croître. $site_name reste concentrée sur le développement de technologies favorisant une meilleure compréhension du marché, une plus grande transparence et une participation plus éclairée à l'écosystème crypto.";
$about_p_forward_2 = "Grâce à l'innovation continue et à la recherche permanente, $site_name souhaite contribuer à un avenir plus intelligent et davantage axé sur les données pour l'analyse des actifs numériques.";


// CONTACT PAGE
$contact_h1 = "Contacter $site_name";
$contact_intro_1 = "Contactez l'équipe de $site_name pour demander un accès à la plateforme, poser des questions sur notre infrastructure de trading crypto propulsée par l'IA, ou en savoir plus sur notre environnement de veille de marché sur les actifs numériques.";
$contact_intro_2 = "Que vous vous intéressiez aux analyses crypto automatisées, à l'infrastructure de signaux de niveau institutionnel, à la surveillance de la volatilité ou à la veille de marché multi-plateformes, notre équipe peut orienter votre demande vers le bon service.";
$contact_h2_help = "Comment nous pouvons vous aider";
$contact_li_1 = "Demandes d'accès à la plateforme";
$contact_li_2 = "Questions générales sur le produit";
$contact_li_3 = "Informations sur l'infrastructure de trading IA";
$contact_li_4 = "Demandes relatives à la veille de marché sur les actifs numériques";
$contact_li_5 = "Questions sur l'avertissement de risque et la conformité";
$contact_li_6 = "Assistance technique ou aide à l'intégration";
$contact_h2_send = "Envoyer une demande";
$contact_p_send = "Remplissez le formulaire ci-dessous et un représentant de $site_name pourra vous contacter avec des informations complémentaires.";
$contact_h2_info = "Coordonnées";
$contact_support_label = "Support général :";
$contact_institutional_label = "Demandes institutionnelles :";
$contact_disclaimer = "Veuillez noter que $site_name ne fournit pas de conseils financiers, d'investissement, fiscaux ou juridiques personnalisés. Toutes les informations sont fournies à des fins technologiques et informatives uniquement.";

// TERMS PAGE
$terms_h1 = "Conditions générales";
$terms_intro_1 = "Les présentes Conditions générales régissent l'accès et l'utilisation du site web de $site_name, de son contenu, des descriptions de la plateforme, des formulaires, des communications et des supports d'information associés.";
$terms_intro_2 = "En accédant à ce site, les utilisateurs reconnaissent avoir lu, compris et accepté les présentes Conditions générales. Si un utilisateur n'accepte pas ces conditions, il doit cesser d'utiliser le site.";
$terms_h2_informational = "Objet informatif";
$terms_p_info_1 = "$site_name fournit des informations sur l'infrastructure de trading crypto propulsée par l'IA, la veille de marché sur les actifs numériques, la surveillance de la volatilité, l'analyse de liquidité et les technologies connexes.";
$terms_p_info_2 = "Le contenu du site est fourni à des fins générales d'information et de présentation technologique uniquement. Rien sur ce site ne doit être interprété comme un conseil financier, un conseil en investissement, un conseil juridique, un conseil fiscal ou une garantie de résultats de trading.";
$terms_h2_no_advice = "Aucun conseil financier";
$terms_p_no_advice_1 = "$site_name ne fournit pas de recommandations personnalisées quant à l'achat, la vente, la détention, l'échange, le staking, le transfert ou toute autre interaction avec une cryptomonnaie, un jeton, un produit financier ou un actif numérique.";
$terms_p_no_advice_2 = "Les utilisateurs doivent évaluer toutes les informations de manière indépendante et consulter des professionnels qualifiés avant de prendre des décisions financières.";
$terms_h2_user_responsibility = "Responsabilité de l'utilisateur";
$terms_p_user_1 = "Les utilisateurs sont responsables de leurs propres décisions, évaluations des risques, activités de compte, actions de trading, conformité légale et utilisation de tout service tiers.";
$terms_p_user_2 = "Les utilisateurs doivent s'assurer que l'activité liée aux actifs numériques est autorisée dans leur juridiction et qu'ils comprennent tous les risques applicables avant d'interagir avec les marchés crypto.";
$terms_h2_ai = "IA et systèmes analytiques";
$terms_p_ai_1 = "$site_name peut décrire des systèmes d'intelligence artificielle, des modèles prédictifs, des signaux de marché, des analyses automatisées ou des technologies liées à l'exécution.";
$terms_p_ai_2 = "Ces systèmes peuvent s'appuyer sur des données de marché, des modèles statistiques, des processus d'apprentissage automatique et des sources d'information tierces. Ces systèmes peuvent être inexacts, retardés, incomplets, indisponibles ou inadaptés aux objectifs particuliers d'un utilisateur.";
$terms_h2_availability = "Aucune garantie de disponibilité";
$terms_p_avail_1 = "$site_name ne garantit pas un accès ininterrompu au site, une disponibilité continue de la plateforme, un fonctionnement sans erreur, l'exactitude des informations de marché ou la disponibilité d'une fonctionnalité particulière.";
$terms_p_avail_2 = "Les services, contenus, pages, formulaires, intégrations ou descriptions de la plateforme peuvent être modifiés, suspendus ou interrompus à tout moment.";
$terms_h2_third_party = "Services tiers";
$terms_p_tp_1 = "Le site peut faire référence à des places d'échange, des lieux de liquidité, des fournisseurs d'analyses, des outils de communication, des services d'hébergement ou des fournisseurs d'infrastructure technique tiers.";
$terms_p_tp_2 = "$site_name ne contrôle pas les plateformes tierces et n'est pas responsable de leur disponibilité, de leurs frais, de leurs politiques, des restrictions de compte, des procédures de conformité, des défaillances techniques ou des pertes des utilisateurs.";
$terms_h2_prohibited = "Utilisation interdite";
$terms_p_prohibited = "Les utilisateurs ne doivent pas utiliser ce site ou toute technologie associée à des fins illégales, abusives, frauduleuses, manipulatrices ou nuisibles.";
$terms_li_1 = "Tentative d'accès non autorisé";
$terms_li_2 = "Soumission d'informations fausses ou trompeuses";
$terms_li_3 = "Utilisation du site pour une activité financière illégale";
$terms_li_4 = "Atteinte à la sécurité ou au fonctionnement du site";
$terms_li_5 = "Copie ou utilisation abusive du contenu du site sans autorisation";
$terms_li_6 = "Tentative de contournement des contrôles de conformité ou techniques";
$terms_h2_ip = "Propriété intellectuelle";
$terms_p_ip_1 = "Le design, les textes, l'image de marque, les éléments d'interface, les graphismes, la structure et les autres supports du site sont la propriété de $site_name ou lui sont concédés sous licence, sauf indication contraire.";
$terms_p_ip_2 = "Les utilisateurs ne peuvent pas reproduire, distribuer, modifier ou exploiter commercialement les contenus du site sans autorisation appropriée.";
$terms_h2_liability = "Limitation de responsabilité";
$terms_p_liab_1 = "Dans toute la mesure permise par la loi applicable, $site_name ne pourra être tenue responsable des pertes résultant du trading d'actifs numériques, de la volatilité du marché, de problèmes techniques, de défaillances de plateformes tierces, de données inexactes, de décisions des utilisateurs ou de la confiance accordée au contenu du site.";
$terms_p_liab_2 = "Les utilisateurs accèdent à ce site et l'utilisent à leurs propres risques.";
$terms_h2_changes = "Modifications des présentes conditions";
$terms_p_changes_1 = "$site_name peut mettre à jour les présentes Conditions générales à tout moment. Les conditions mises à jour peuvent être publiées sur cette page.";
$terms_p_changes_2 = "L'utilisation continue du site après une modification signifie que les utilisateurs reconnaissent et acceptent les conditions mises à jour.";

// PRIVACY PAGE
$privacy_h1 = "Politique de confidentialité";
$privacy_intro_1 = "$site_name respecte la vie privée des utilisateurs et s'engage à traiter les informations personnelles de manière responsable, transparente et sécurisée.";
$privacy_intro_2 = "Cette Politique de confidentialité explique quelles informations peuvent être collectées lorsque les utilisateurs visitent ce site, soumettent des formulaires de contact, demandent un accès ou interagissent avec le contenu de $site_name et les communications liées à la plateforme.";
$privacy_h2_collect = "Informations que nous pouvons collecter";
$privacy_p_collect_1 = "$site_name peut collecter des informations soumises volontairement par les utilisateurs via les formulaires du site ou les canaux de communication.";
$privacy_li_fname = "Prénom";
$privacy_li_lname = "Nom";
$privacy_li_email = "Adresse e-mail";
$privacy_li_phone = "Numéro de téléphone";
$privacy_li_inquiry = "Détails de la demande soumise";
$privacy_li_technical = "Données techniques d'utilisation de base du site";
$privacy_h2_use = "Comment nous utilisons les informations";
$privacy_p_use_1 = "Les informations peuvent être utilisées pour répondre aux demandes des utilisateurs, fournir des informations sur l'accès à la plateforme, améliorer le fonctionnement du site, assurer la sécurité et communiquer des mises à jour pertinentes concernant $site_name.";
$privacy_p_use_2 = "Nous pouvons également utiliser des données agrégées ou non identifiantes pour analyser la performance du site, améliorer la structure du contenu et mieux comprendre la façon dont les visiteurs interagissent avec nos pages.";
$privacy_h2_comm = "Finalités de communication";
$privacy_p_comm_1 = "Si un utilisateur soumet des coordonnées, $site_name peut les utiliser pour répondre à sa demande, fournir des informations d'intégration, clarifier les demandes d'accès à la plateforme ou partager des informations de service pertinentes.";
$privacy_p_comm_2 = "Les utilisateurs peuvent demander l'arrêt des communications lorsque cela est applicable.";
$privacy_h2_cookies = "Cookies et données techniques";
$privacy_p_cookies_1 = "Ce site peut utiliser des cookies, des outils d'analyse et des technologies similaires pour améliorer l'expérience de navigation, surveiller la performance et renforcer la sécurité du site.";
$privacy_p_cookies_2 = "Les données techniques peuvent inclure le type d'appareil, le type de navigateur, le système d'exploitation, les interactions sur les pages, les informations de référencement et les statistiques d'utilisation générales.";
$privacy_h2_protection = "Mesures de protection des données";
$privacy_p_prot_1 = "$site_name applique des mesures de protection administratives, techniques et organisationnelles raisonnables afin de protéger les informations soumises contre tout accès non autorisé, usage abusif, perte ou divulgation.";
$privacy_p_prot_2 = "Toutefois, aucun système en ligne ne peut garantir une sécurité absolue. Les utilisateurs doivent éviter de soumettre des informations financières sensibles, des clés privées de portefeuille, des mots de passe, des identifiants de plateforme d'échange ou des données d'accès confidentielles via les formulaires publics du site.";
$privacy_h2_third = "Prestataires tiers";
$privacy_p_third_1 = "$site_name peut faire appel à des prestataires tiers pour l'hébergement, l'analyse, la communication, la sécurité, l'envoi d'e-mails, le traitement CRM ou l'infrastructure technique.";
$privacy_p_third_2 = "Ces prestataires ne peuvent traiter que les informations limitées nécessaires au bon fonctionnement du site et des services associés.";
$privacy_google_choices = 'Vous pouvez gérer la manière dont Google utilise les informations issues de vos visites via les <a href="http://www.google.com/settings/ads" target="_blank" rel="noopener">paramètres des annonces Google</a>, vous désinscrire de la publicité basée sur les centres d\'intérêt via le <a href="https://tools.google.com/dlpage/gaoptout" target="_blank" rel="noopener">module complémentaire de désactivation de Google Analytics</a>, ou consulter la <a href="https://www.google.com/intl/en/policies/privacy/" target="_blank" rel="noopener">Politique de confidentialité de Google</a> pour plus de détails.';
$privacy_h2_sale = "Aucune vente d'informations personnelles";
$privacy_p_sale_1 = "$site_name n'a pas l'intention de vendre les informations personnelles soumises via ce site.";
$privacy_p_sale_2 = "Les informations ne peuvent être partagées que lorsque cela est nécessaire à des fins opérationnelles, de conformité légale, de communication avec les utilisateurs, de prévention de la fraude ou de traitement lié au service.";
$privacy_h2_retention = "Conservation des données";
$privacy_p_retention = "Les informations personnelles peuvent être conservées aussi longtemps que nécessaire pour répondre aux demandes, tenir des registres commerciaux, respecter les obligations légales, améliorer les communications de la plateforme ou soutenir la sécurité et la prévention de la fraude.";
$privacy_h2_rights = "Droits des utilisateurs";
$privacy_p_rights = "Selon la loi applicable, les utilisateurs peuvent disposer de droits d'accès, de rectification, d'effacement, d'opposition, de limitation ou de portabilité de leurs informations personnelles.";
$privacy_h2_intl = "Utilisation internationale";
$privacy_p_intl_1 = "$site_name peut être consultée par des utilisateurs situés dans différentes juridictions. Les règles de confidentialité peuvent varier selon le lieu.";
$privacy_p_intl_2 = "En utilisant ce site, les utilisateurs reconnaissent que les informations peuvent être traitées conformément à la présente Politique de confidentialité et aux exigences opérationnelles applicables.";
$privacy_h2_policy_updates = "Mises à jour de la politique";
$privacy_p_updates_1 = "$site_name peut mettre à jour périodiquement cette Politique de confidentialité afin de refléter les évolutions légales, technologiques, des procédures internes ou du fonctionnement du site.";
$privacy_p_updates_2 = "L'utilisation continue du site après une mise à jour signifie que les utilisateurs reconnaissent la Politique de confidentialité révisée.";
// COOKIES PAGE
$cookies_h1 = "Politique de cookies";
$cookies_intro_1 = "Cette Politique de cookies explique comment $site_name utilise les cookies, les technologies d'analyse et les outils de suivi similaires lorsque les utilisateurs accèdent à ce site ou interagissent avec lui.";
$cookies_intro_2 = "Les cookies contribuent à améliorer le fonctionnement du site, à optimiser l'expérience utilisateur, à analyser la performance et à soutenir les processus liés à la sécurité.";
$cookies_intro_3 = "En continuant à utiliser ce site, les utilisateurs reconnaissent que certains cookies et technologies associées peuvent être utilisés conformément à la présente politique.";
$cookies_h2_what = "Que sont les cookies ?";
$cookies_p_what_1 = "Les cookies sont de petits fichiers texte stockés sur l'appareil d'un utilisateur lors de la visite d'un site.";
$cookies_p_what_2 = "Ces fichiers peuvent contenir des informations aidant les sites à reconnaître les visiteurs récurrents, à mémoriser les préférences, à améliorer la navigation et à mesurer la performance du site.";
$cookies_h2_why = "Pourquoi nous utilisons des cookies";
$cookies_p_why_1 = "$site_name peut utiliser des cookies et des technologies similaires à plusieurs fins.";
$cookies_li_1 = "Maintien du fonctionnement du site";
$cookies_li_2 = "Amélioration de l'expérience utilisateur";
$cookies_li_3 = "Mémorisation des préférences utilisateur";
$cookies_li_4 = "Compréhension du comportement des visiteurs";
$cookies_li_5 = "Mesure de la performance du site";
$cookies_li_6 = "Identification des problèmes techniques";
$cookies_li_7 = "Soutien à la sécurité du site";
$cookies_li_8 = "Prévention des abus et des usages détournés";
$cookies_h2_essential = "Cookies essentiels";
$cookies_p_ess_1 = "Certains cookies sont nécessaires au bon fonctionnement du site.";
$cookies_p_ess_2 = "Ces cookies contribuent à la sécurité, à la fonctionnalité de navigation, à la gestion des sessions et à d'autres opérations essentielles du site.";
$cookies_p_ess_3 = "Sans les cookies essentiels, certaines parties du site pourraient ne pas fonctionner correctement.";
$cookies_h2_analytics = "Cookies d'analyse";
$cookies_p_an_1 = "Les cookies d'analyse nous aident à comprendre comment les visiteurs interagissent avec le contenu du site.";
$cookies_p_an_2 = "Ces technologies peuvent collecter des informations sur les visites de pages, les schémas de navigation, les types d'appareils, les configurations de navigateur et les statistiques générales d'utilisation du site.";
$cookies_p_an_3 = "Les données d'analyse sont généralement agrégées et utilisées pour améliorer la performance du site et l'expérience utilisateur.";
$cookies_h2_functional = "Cookies fonctionnels";
$cookies_p_fun_1 = "Les cookies fonctionnels peuvent être utilisés pour mémoriser les réglages et préférences sélectionnés par les utilisateurs.";
$cookies_p_fun_2 = "Il peut s'agir par exemple des préférences de langue, des réglages d'interface, des options d'affichage ou d'autres fonctionnalités de personnalisation.";
$cookies_h2_third = "Technologies tierces";
$cookies_p_third_1 = "$site_name peut faire appel à des prestataires tiers, des plateformes d'analyse, des technologies publicitaires ou des outils de suivi de performance.";
$cookies_p_third_2 = "Ces tiers peuvent déposer leurs propres cookies ou technologies de suivi, soumis à leurs politiques de confidentialité respectives.";
$cookies_p_third_3 = "$site_name ne contrôle pas les pratiques de cookies des tiers et recommande de consulter, le cas échéant, la documentation de confidentialité des prestataires externes.";
$cookies_h2_manage = "Gestion des cookies";
$cookies_p_manage_1 = "La plupart des navigateurs modernes permettent aux utilisateurs de gérer, restreindre ou supprimer les cookies via les paramètres du navigateur.";
$cookies_p_manage_2 = "Les utilisateurs peuvent choisir de désactiver entièrement les cookies, bien que certaines fonctionnalités du site puissent alors ne plus fonctionner comme prévu.";
$cookies_p_manage_3 = "Les paramètres du navigateur proposent généralement les options suivantes :";
$cookies_li_manage_1 = "Bloquer tous les cookies";
$cookies_li_manage_2 = "Supprimer les cookies existants";
$cookies_li_manage_3 = "Recevoir des notifications relatives aux cookies";
$cookies_li_manage_4 = "Restreindre certaines catégories de cookies";
$cookies_h2_data = "Protection des données";
$cookies_p_data = "Les informations relatives aux cookies peuvent être traitées conformément à notre Politique de confidentialité et aux lois applicables en matière de protection des données.";
$cookies_h2_policy_updates = "Mises à jour de la politique";
$cookies_p_updates_1 = "$site_name peut mettre à jour périodiquement cette Politique de cookies afin de refléter les évolutions technologiques, les exigences légales ou les améliorations opérationnelles.";
$cookies_p_updates_2 = "L'utilisation continue du site après une mise à jour constitue une reconnaissance de la politique révisée.";
// AML PAGE
$aml_h1 = "Politique LCB-FT";
$aml_intro_1 = "$site_name reconnaît l'importance de la sensibilisation à la lutte contre le blanchiment d'argent, de l'intégrité financière et de la participation responsable aux marchés d'actifs numériques.";
$aml_intro_2 = "Cette Politique LCB-FT explique les principes généraux appliqués par $site_name pour dissuader l'utilisation illégale des technologies liées aux cryptomonnaies, les activités financières suspectes, la fraude, le contournement des sanctions, le financement du terrorisme et toute autre conduite interdite.";
$aml_h2_purpose = "Objet de la présente politique";
$aml_p_purpose_1 = "L'objectif de cette politique est d'établir un cadre responsable pour la manière dont $site_name aborde la sensibilisation à la lutte contre le blanchiment d'argent au sein de l'écosystème des actifs numériques.";
$aml_p_purpose_2 = "Les marchés de cryptomonnaies peuvent impliquer des activités transfrontalières, une infrastructure décentralisée, des places d'échange tierces et des systèmes de portefeuilles externes. Pour cette raison, les utilisateurs doivent comprendre que les obligations de conformité peuvent varier selon la juridiction, le type de compte, la place d'échange et l'environnement réglementaire local.";
$aml_h2_responsible = "Utilisation responsable de la technologie des actifs numériques";
$aml_p_resp_1 = "Les utilisateurs sont tenus d'interagir avec $site_name et tout service d'actifs numériques associé de manière responsable, légale et conforme aux règles applicables.";
$aml_p_resp_2 = "$site_name ne soutient ni n'encourage l'utilisation des marchés crypto, des systèmes de trading, des technologies automatisées ou des outils analytiques à des fins illégales.";
$aml_li_1 = "Blanchiment d'argent";
$aml_li_2 = "Financement du terrorisme";
$aml_li_3 = "Fraude ou tromperie financière";
$aml_li_4 = "Contournement des sanctions";
$aml_li_5 = "Manipulation de marché";
$aml_li_6 = "Utilisation de fonds volés ou de comptes compromis";
$aml_li_7 = "Toute activité interdite par la loi applicable";
$aml_h2_exchange = "Conformité des places d'échange tierces";
$aml_p_ex_1 = "$site_name peut faire référence à des places d'échange ou environnements de liquidité tiers, interagir avec eux, ou fournir une infrastructure analytique associée.";
$aml_p_ex_2 = "Les places d'échange, dépositaires, prestataires de paiement et autres fournisseurs tiers peuvent appliquer leurs propres procédures de conformité, notamment la vérification d'identité, la surveillance des transactions, le filtrage des sanctions, les restrictions de compte, les contrôles de l'origine des fonds ou des exigences de vérification supplémentaires.";
$aml_h2_user_responsibility = "Responsabilité de l'utilisateur";
$aml_p_user_1 = "Les utilisateurs sont responsables de s'assurer que leur activité est légale dans leur lieu de résidence et conforme aux obligations imposées par les régulateurs, places d'échange, établissements financiers ou prestataires concernés.";
$aml_p_user_2 = "Les utilisateurs ne doivent pas tenter de dissimuler la propriété des fonds, de masquer l'origine des transactions, de fournir de fausses informations, de contourner les processus de vérification ou d'utiliser l'infrastructure d'actifs numériques d'une manière susceptible d'être considérée comme suspecte ou illégale.";
$aml_h2_suspicious = "Activité suspecte";
$aml_p_suspicious = "Une activité suspecte peut inclure un comportement incompatible avec une utilisation normale, des tentatives de détournement des systèmes de trading, la soumission répétée d'informations trompeuses, des liens avec des juridictions restreintes, ou des activités liées à la fraude, à des fonds illicites ou à des services interdits.";
$aml_h2_evasion = "Aucun contournement";
$aml_p_evasion = "Les utilisateurs ne doivent pas tenter de contourner les contrôles de conformité, les restrictions techniques, les systèmes de vérification d'identité, les limitations géographiques ou les processus de surveillance des risques.";
$aml_h2_policy_updates = "Mises à jour de la politique";
$aml_p_updates_1 = "$site_name peut mettre à jour cette Politique LCB-FT de temps à autre afin de refléter les évolutions des attentes réglementaires, des normes de marché, des procédures internes ou des pratiques du secteur des actifs numériques.";
$aml_p_updates_2 = "L'utilisation continue du site après une mise à jour signifie que les utilisateurs reconnaissent la politique révisée.";
// RISK PAGE
$risk_h1 = "Avertissement sur les risques";
$risk_intro_1 = "Le trading de cryptomonnaies et la participation aux marchés d'actifs numériques comportent des risques importants. Les prix peuvent évoluer rapidement, la liquidité peut changer de manière inattendue, et les conditions de marché peuvent devenir très instables en peu de temps.";
$risk_intro_2 = "Cet Avertissement sur les risques explique les points importants que les utilisateurs doivent examiner avant d'interagir avec les marchés d'actifs numériques, les technologies de trading automatisées, les signaux de marché générés par l'IA ou l'infrastructure analytique liée aux cryptomonnaies.";
$risk_h2_no_guarantee = "Aucun résultat garanti";
$risk_p_no_guarantee_1 = "$site_name ne garantit ni profits, ni rendements d'investissement, ni succès de trading, ni précision des signaux, ni accès ininterrompu, ni résultats financiers positifs.";
$risk_p_no_guarantee_2 = "Tous les exemples, statistiques, éléments d'interface, indicateurs de performance, indicateurs de signaux ou simulations de marché présentés sur ce site sont fournis à titre informatif et illustratif uniquement.";
$risk_h2_volatility = "Volatilité du marché des cryptomonnaies";
$risk_p_vol_1 = "Les marchés d'actifs numériques sont très volatils. Les prix peuvent être affectés par des pénuries de liquidité, des actualités macroéconomiques, des évolutions réglementaires, des interruptions de service des places d'échange, des événements blockchain, le sentiment des investisseurs, l'activité de levier ou la manipulation de marché.";
$risk_p_vol_2 = "La volatilité peut entraîner des pertes rapides, des écarts de prix soudains, du slippage, des liquidations ou une incapacité à exécuter des transactions aux prix attendus.";
$risk_h2_ai = "Limites des signaux IA";
$risk_p_ai_1 = "Les systèmes d'intelligence artificielle peuvent analyser de grandes quantités de données de marché, mais ils ne peuvent pas éliminer l'incertitude.";
$risk_p_ai_2 = "Les indicateurs, signaux de trading, classifications de marché et modèles prédictifs propulsés par l'IA peuvent être incomplets, retardés, incorrects ou inadaptés à la situation financière personnelle d'un utilisateur.";
$risk_p_ai_3 = "Les utilisateurs ne doivent pas se fier uniquement à un signal IA pour prendre des décisions de trading, d'investissement ou financières.";
$risk_h2_tech = "Risque technologique et d'exécution";
$risk_p_tech_1 = "La technologie de trading peut être affectée par des problèmes de connexion internet, des interruptions de serveur, la latence, des erreurs logicielles, des défaillances d'API, des interruptions de service des places d'échange, des flux de données incorrects ou des limitations de l'infrastructure tierce.";
$risk_p_tech_2 = "$site_name ne garantit pas un accès ininterrompu aux données, signaux, fonctionnalités de la plateforme, systèmes tiers ou environnements d'exécution.";
$risk_h2_liquidity = "Risque de liquidité et de place d'échange";
$risk_p_liq_1 = "La liquidité peut varier considérablement selon les places d'échange et les actifs numériques. Certains marchés peuvent présenter une faible profondeur de carnet d'ordres, des écarts importants, une exécution retardée ou de fortes variations de prix en période de tension.";
$risk_p_liq_2 = "Les places d'échange tierces peuvent imposer des frais, des limites, des restrictions, des contrôles de compte, des retards de retrait, des suspensions de trading ou des limitations géographiques.";
$risk_h2_regulatory = "Risque réglementaire";
$risk_p_reg_1 = "Les réglementations relatives aux actifs numériques peuvent évoluer rapidement et varier selon les pays, régions et juridictions.";
$risk_p_reg_2 = "Les évolutions réglementaires peuvent affecter l'accès au marché, la disponibilité des actifs, le fonctionnement des places d'échange, les obligations déclaratives, la fiscalité, les restrictions de trading ou le fonctionnement de la plateforme.";
$risk_h2_user_responsibility = "Responsabilité de l'utilisateur";
$risk_p_user_1 = "Les utilisateurs sont seuls responsables de l'évaluation des risques, de la compréhension des lois applicables, de l'examen de leur situation financière et de la prise de décisions indépendantes.";
$risk_p_user_2 = "$site_name ne fournit pas de conseils financiers, d'investissement, juridiques, comptables ou fiscaux personnalisés.";
$risk_h2_advice = "Consultez un professionnel";
$risk_p_advice_1 = "Les utilisateurs doivent consulter des professionnels qualifiés avant de prendre des décisions financières importantes concernant les cryptomonnaies, les systèmes de trading, les technologies automatisées ou les investissements en actifs numériques.";
$risk_p_advice_2 = "En utilisant ce site, les utilisateurs reconnaissent comprendre les risques associés aux marchés d'actifs numériques et assument la responsabilité de leurs propres décisions.";
// EXCHANGES PAGE
$exchanges_h1 = "Places d'échange prises en charge";
$exchanges_intro_1 = "$site_name repose sur une approche de veille multi-marchés qui évalue l'activité des actifs numériques sur un large éventail d'environnements de trading crypto.";
$exchanges_intro_2 = "Les marchés crypto modernes fonctionnent via de nombreuses places d'échange, fournisseurs de liquidité, plateformes de produits dérivés et écosystèmes de trading. Comprendre l'activité au sein de ces environnements est essentiel pour construire une veille de marché complète.";
$exchanges_h2_philosophy = "Philosophie de couverture du marché";
$exchanges_p_phil_1 = "Plutôt que de dépendre d'une seule place d'échange, $site_name repose sur le concept d'analyse à l'échelle du marché.";
$exchanges_p_phil_2 = "Les prix des cryptomonnaies, les conditions de liquidité, le comportement de la volatilité et l'activité institutionnelle diffèrent souvent d'une place d'échange à l'autre. En observant des conditions de marché plus larges, les modèles analytiques peuvent obtenir un contexte supplémentaire sur les tendances émergentes et les anomalies potentielles.";
$exchanges_h2_spot = "Surveillance du marché au comptant";
$exchanges_p_spot_1 = "Les places d'échange au comptant représentent une part importante de l'activité mondiale des actifs numériques.";
$exchanges_p_spot_2 = "Les systèmes de veille de marché peuvent évaluer les données du marché au comptant, notamment :";
$exchanges_li_spot_1 = "L'activité des prix";
$exchanges_li_spot_2 = "La profondeur de liquidité";
$exchanges_li_spot_3 = "La structure du carnet d'ordres";
$exchanges_li_spot_4 = "Le volume de trading";
$exchanges_li_spot_5 = "Le comportement de l'écart acheteur-vendeur";
$exchanges_li_spot_6 = "Les conditions de déséquilibre du marché";
$exchanges_h2_deriv = "Marchés des produits dérivés";
$exchanges_p_deriv_1 = "Les produits dérivés crypto jouent un rôle de plus en plus important au sein de l'écosystème plus large des actifs numériques.";
$exchanges_p_deriv_2 = "Les contrats à terme, les contrats perpétuels, les options et l'activité de trading à effet de levier peuvent influencer le sentiment de marché, les conditions de volatilité et la dynamique directionnelle.";
$exchanges_p_deriv_3 = "L'infrastructure analytique peut évaluer les informations liées aux produits dérivés lors de l'évaluation des conditions de marché plus larges.";
$exchanges_h2_liquidity = "Analyse de liquidité";
$exchanges_p_liq_1 = "La liquidité reste l'un des facteurs les plus importants affectant la stabilité du marché et la qualité d'exécution.";
$exchanges_p_liq_2 = "$site_name peut analyser les conditions de liquidité sur plusieurs places de trading afin d'identifier :";
$exchanges_li_liq_1 = "La concentration de liquidité";
$exchanges_li_liq_2 = "Les retraits soudains de liquidité";
$exchanges_li_liq_3 = "La pression du carnet d'ordres";
$exchanges_li_liq_4 = "Les événements de déséquilibre du marché";
$exchanges_li_liq_5 = "Un comportement de trading anormal";
$exchanges_h2_availability = "Disponibilité des places d'échange";
$exchanges_p_avail_1 = "La disponibilité des places d'échange peut varier selon la localisation géographique, la juridiction, l'éligibilité du compte, les exigences réglementaires et les limitations techniques.";
$exchanges_p_avail_2 = "Certaines places d'échange ou certains services peuvent ne pas être disponibles pour tous les utilisateurs et peuvent imposer leurs propres restrictions, exigences de vérification, frais et politiques opérationnelles.";
$exchanges_h2_third = "Plateformes tierces";
$exchanges_p_third_1 = "Toute référence à des places d'échange, lieux de liquidité, courtiers, dépositaires ou fournisseurs de marché est faite uniquement à titre informatif.";
$exchanges_p_third_2 = "$site_name ne possède, n'exploite, ne contrôle ni ne garantit les services des places d'échange tierces.";
$exchanges_p_third_3 = "Les utilisateurs demeurent responsables de l'évaluation de toute place d'échange, plateforme de trading ou service d'actifs numériques avant utilisation.";
$exchanges_h2_monitoring = "Surveillance continue du marché";
$exchanges_p_mon_1 = "Les marchés de cryptomonnaies fonctionnent en continu, souvent vingt-quatre heures sur vingt-quatre, sept jours sur sept.";
$exchanges_p_mon_2 = "À mesure que la structure du marché évolue, de nouvelles places d'échange émergent, la liquidité se déplace et l'activité de trading évolue.";
$exchanges_p_mon_3 = "$site_name s'efforce en permanence de rester informée de l'évolution des conditions de marché grâce à une large couverture analytique de l'écosystème des actifs numériques.";

// ==========================================
// RISK WARNING PAGE
// ==========================================
$page_title_risk_warning = "Avertissement sur les risques | $site_name";
$page_description_risk_warning = "Comprenez les risques du trading crypto automatisé avec $site_name, notamment la volatilité du marché, le risque d'exécution et les considérations réglementaires.";
$risk_warning_breadcrumb_name = "Avertissement sur les risques";
$risk_warning_title = "Avertissement sur les risques";
$risk_warning_intro = "Comprendre les risques est la première étape vers un trading en toute confiance.";

$risk_warning_ai_heading = "Comment notre système IA aide à gérer le risque :";
$risk_warning_ai_1 = "<strong>Efficacité algorithmique et trading sans émotion :</strong> Des algorithmes avancés analysent les signaux de marché pour exécuter les transactions de manière objective, au moment optimal.";
$risk_warning_ai_2 = "<strong>Stratégies fondées sur les données :</strong> Les stratégies reposent sur des schémas de marché vérifiés et des analyses en temps réel plutôt que sur des conjectures.";
$risk_warning_ai_3 = "<strong>Réglages flexibles et contrôle total :</strong> Ajustez vos paramètres de risque à tout moment. Suivez tous vos soldes et transactions en toute transparence sur votre tableau de bord, sans frais cachés et avec des retraits sans restriction.";

$risk_warning_disclaimer = "<strong>Avertissement :</strong> Le trading comporte toujours des risques. Les systèmes automatisés (y compris l'IA) ne garantissent pas de profit, peuvent connaître des défaillances dues à des erreurs logicielles ou à des événements de marché imprévus, et nécessitent une surveillance de la part de l'utilisateur. Les performances passées ne préjugent pas des résultats futurs. Cette plateforme est fournie à des fins purement informatives et marketing et ne constitue pas un conseil financier.";

$risk_warning_s1_heading = "1. Risques généraux et risques liés au marché des cryptomonnaies";
$risk_warning_s1_intro = "Les cryptomonnaies sont des actifs spéculatifs très volatils, négociés 24h/24 et 7j/7 avec une supervision réglementaire minimale dans la plupart des juridictions.";
$risk_warning_s1_1 = "Les valeurs peuvent fluctuer de manière spectaculaire sur de courtes périodes, pouvant entraîner une perte totale du capital investi.";
$risk_warning_s1_2 = "Les valeurs de marché peuvent être fortement affectées par des mises à jour réglementaires, des évolutions techniques, des failles de sécurité ou des événements macroéconomiques plus larges.";
$risk_warning_s1_3 = "Certains actifs peuvent perdre toute leur valeur. N'investissez que des fonds dont vous pouvez vous permettre de perdre la totalité.";

$risk_warning_s2_heading = "2. Risques d'exécution, de liquidité et d'effet de levier";
$risk_warning_s2_1 = "<strong>Volatilité du marché et liquidité :</strong> Des mouvements de prix extrêmes (10 à 20 %+ par jour) ou une faible liquidité (notamment pour les petites cryptomonnaies) peuvent entraîner des retards, des interruptions de plateforme et un slippage d'exécution important. Les ordres stop-loss ne peuvent pas garantir des limites de perte dans des conditions extrêmes.";
$risk_warning_s2_2 = "<strong>Risques liés à l'effet de levier et à la marge :</strong> Les produits à effet de levier amplifient à la fois les gains et les pertes, ce qui signifie que vous pouvez perdre plus que votre dépôt initial. Environ 70 à 80 % des comptes d'investisseurs particuliers perdent de l'argent lorsqu'ils négocient des produits à effet de levier.";

$risk_warning_s3_heading = "3. Risques techniques, de cybersécurité et liés aux tiers";
$risk_warning_s3_1 = "<strong>Facteurs techniques :</strong> Le trading en ligne comporte intrinsèquement des risques liés aux déconnexions internet, aux erreurs matérielles/logicielles et à l'indisponibilité des services.";
$risk_warning_s3_2 = "<strong>Cybersécurité :</strong> Les comptes de cryptomonnaies sont des cibles fréquentes de phishing, de logiciels malveillants et de piratages. Les transactions sont irréversibles ; la compromission de vos identifiants peut entraîner une perte permanente.";
$risk_warning_s3_3 = "<strong>Plateformes tierces :</strong> Ce site peut mettre les utilisateurs en relation avec des plateformes tierces. Nous ne contrôlons, n'approuvons ni ne garantissons leur sécurité, leur fonctionnement ou leur solvabilité. Effectuez toujours vos propres vérifications avant de déposer des fonds sur des plateformes externes.";

$risk_warning_s4_heading = "4. Dispositions réglementaires, fiscales et finales";
$risk_warning_s4_1 = "<strong>Conformité légale et fiscalité :</strong> Les cadres réglementaires varient considérablement et évoluent rapidement. Les utilisateurs sont seuls responsables de s'assurer que leur activité de trading est conforme aux lois locales et de s'acquitter de leurs propres obligations fiscales.";
$risk_warning_s4_2 = "<strong>Aucune garantie de profit :</strong> Il n'existe pas de trading crypto « sûr » ou sans risque. Tout chiffre de rendement ou exemple de performance est purement hypothétique.";
$risk_warning_s4_3 = "<strong>Adéquation :</strong> Si vous ne comprenez pas pleinement les risques, si vous dépendez de fonds essentiels ou si vous négociez avec de l'argent emprunté, le trading crypto ne vous convient pas. Consultez un conseiller financier indépendant agréé en cas de doute.";

$risk_warning_contact = "<strong>Contact :</strong> Pour toute question concernant cette déclaration ou pour soumettre une demande, veuillez contacter notre équipe de support client officielle via le formulaire de contact de notre site.";
$footer_risk_warning = "Avertissement sur les risques";

$lang_loaded = true;

?>
