<?php
require __DIR__ . '/../lang.php';
$site_lang = 'fr-FR';
$form_language = 'fr'; // matches this page's own language, not the offer's global default

// ============================================================
// FR TRANSLATION OVERRIDES
// Identity/config vars ($site_name, $site_slug, $site_domain, $site_url, $app_price, $app_currency, $site_lang, $country_name, $country_flag_code, $privacy_last_update, $rating_value, $rating_count, $review_count, $form_country, $form_language, $form_phone_country, $form_only_countries, $review_1_author, $review_2_author, $review_3_author, $review_4_author, $quiz_consultant_name) are
// intentionally NOT overridden -- they stay exactly as inherited from the
// root lang.php.
// ============================================================

// Brand / Platform Variables

// Geo-language stats bar fallback content (used by the language-folder pages'
// own "stats" section; the fr/de/it/nl folders override these with native
// translations, the other 19 folders inherit this English fallback)
$stat_1_value = "4M+";
$stat_1_label = "Utilisateurs inscrits";
$stat_2_value = "98+";
$stat_2_label = "Pays pris en charge";
$stat_3_value = "65+";
$stat_3_label = "Devises disponibles";
$stat_4_value = "24/7";
$stat_4_label = "Accès aux transactions";
$stat_5_value = "256 bits";
$stat_5_label = "Norme de chiffrement";
$stat_6_value = "$500M+";
$stat_6_label = "Total des dépôts clients";

// Keitaro Form Integration Variables (defaults -- overwritten per-launch by
// generate_lang_files(); must stay valid on their own since nothing else in
// this file replaces them for a page that's ever served un-generated)

// 4 Verified Reviews (TZ Item 8)
$review_1_role = "France";
$review_1_text = "J'ai commencé avec 500 € juste pour voir comment fonctionnait la plateforme. Après environ trois semaines, mon solde était passé à environ 1 120 €. L'interface est facile à utiliser, et les analyses de marché m'ont aidé à prendre de meilleures décisions.";
$review_1_badge = "Rendement Déclaré +18,4%";

$review_2_role = "Allemagne";
$review_2_text = "J'ai essayé plusieurs plateformes de trading auparavant, mais celle-ci reste ma préférée jusqu'à présent. Elle est facile à naviguer, les outils sont vraiment utiles, et mon expérience globale a été très positive.";
$review_2_badge = "Rendement Déclaré +19,1%";

$review_3_role = "Italie";
$review_3_text = "Ce qui m'a le plus impressionné, c'est à quel point tout semble intuitif. L'inscription a été rapide, le tableau de bord est bien organisé, et la plateforme a rendu le trading beaucoup plus pratique pour moi.";
$review_3_badge = "Rendement Déclaré +16,8%";

$review_4_role = "Pays-Bas";
$review_4_text = "Je n'avais aucune expérience de trading auparavant, j'ai donc commencé avec 750 €. En un mois, j'ai atteint un peu plus de 1 765 € en suivant les outils et les ressources pédagogiques. Cela a été un excellent moyen de gagner en confiance.";
$review_4_badge = "Rendement Déclaré +18,0%";

$review_verified_label = "Utilisateur Vérifié";
$reviews_section_title = "Avis sur $site_name";
$reviews_badge_trustworthy = "Digne de Confiance";
$reviews_summary_rating = "4,7";
$reviews_summary_count = "189";
$reviews_summary_desc = "Une plateforme de trading puissante et intuitive dotée d'outils automatisés robustes, d'analyses en temps réel et de ressources pédagogiques complètes.";

// CONSULTANT / CHAT QUIZ (TZ Item 13)
$quiz_consultant_role = "Chargée d'intégration";
$quiz_text_welcome = "Bonjour ! Je suis $quiz_consultant_name de $site_name. Bonne nouvelle — vous êtes déjà pré-qualifié(e). Configurons votre compte et lançons-nous dans le trading.";
$quiz_text_q1 = "Pour confirmer les conditions de trading disponibles dans votre région, veuillez confirmer votre pays : $country_name";
$quiz_text_a1_yes = "Oui, c'est ma localisation actuelle";
$quiz_text_a1_no = "Non";
$quiz_text_q2 = "Sélectionnez votre tranche d'âge afin que nous puissions personnaliser la configuration de votre compte :";
$quiz_text_q3 = "Disposez-vous d'un compte bancaire ou d'une carte active pour alimenter votre compte de trading ?";
$quiz_text_a3_yes = "Oui, compte actif disponible";
$quiz_text_a3_no = "Non disponible pour le moment";
$quiz_text_q4 = "Indiquez-nous votre principale source de revenus afin que nous puissions vous proposer un plan de dépôt adapté à votre budget :";
$quiz_text_a4_1 = "Revenu d'emploi / Indépendant";
$quiz_text_a4_2 = "Épargne / Investissements personnels";
$quiz_text_a4_3 = "Autres sources";
$quiz_text_q5 = "Dernière étape : l'un de nos conseillers vous appellera pour vous accompagner dans la configuration de votre compte entre 11h00 et 20h00. Ce créneau vous convient-il ?";
$quiz_text_a5_yes = "Oui, ce créneau est optimal";
$quiz_text_a5_no = "Demander un contact prioritaire immédiat";
$quiz_text_loader = "Configuration de votre profil de trading en cours...";
$quiz_text_final_ttl = "Vous êtes prêt(e) ! 🎉 Complétez votre inscription ci-dessous pour activer votre compte :";
$quiz_text_processing = "Validation des informations...";
$quiz_text_typing = "est en train de préparer une réponse...";
$quiz_placeholder_fname = "Prénom";
$quiz_placeholder_lname = "Nom";
$quiz_placeholder_email = "Adresse e-mail";
$quiz_placeholder_phone = "Numéro de téléphone";
$quiz_btn_submit = "Créer mon compte";

// METADATA (TZ Item 10)
$home_meta_title = "$site_name — Plateforme de Trading | Site Officiel";
$home_meta_description = "Le site officiel $site_name propose une plateforme de trading de cryptomonnaies sécurisée, avec des outils de trading avancés, des analyses de marché en temps réel et une expérience conviviale pour les traders.";

// NAVIGATION & HEADER (TZ Item 3, 12)
$nav_about = "À Propos";
$nav_how = "Comment Ça Marche";
$nav_why = "Pourquoi Trader";
$nav_faq = "FAQ";
$nav_contacts = "Contact";
$nav_signin = "Connexion";
$nav_signup = "S'inscrire";

$mobnav_home = "Accueil";
$mobnav_product = "Produit";
$mobnav_offer = "Offre";
$mobnav_contact = "Nous contacter";
$mobnav_faq = "FAQ";
$mobnav_signup = "S'inscrire";

// HERO SECTION
$hero_h1 = "Plateforme $site_name";
$hero_text = "La plateforme officielle de trading de cryptomonnaies $site_name — conçue pour rendre la cryptomonnaie aussi simple que la banque en ligne au quotidien, que vous soyez un trader débutant ou un investisseur de longue date.";

// LEAD FORM
$form_fname_placeholder = "Prénom";
$form_lname_placeholder = "Nom";
$form_email_placeholder = "Entrez votre e-mail";
$form_phone_placeholder = "Numéro de Téléphone";
$form_btn_submit = "S'inscrire";
$form_disclaimer_text = "En saisissant vos informations personnelles et en cliquant sur le bouton, vous acceptez la <a class='link link-primary' href='privacy.php'>Politique de Confidentialité</a> et les <a class='link link-primary' href='conditions.php'>Conditions d'Utilisation</a> de ce site.";

// SECURITY BADGES
$badge_ssl = "SSL 256 Bits";
$badge_payments = "Paiements Sécurisés";
$badge_2fa = "2FA";
$badge_cold_storage = "98% Cold Storage";
$badge_regulated = "Réglementé";
$badge_traders_trust = "Plus de 4M de Traders Font Confiance";

// SAFE SECTION (Vos fonds sont en sécurité)
$safe_title = "<mark>Vos Fonds Sont en Sécurité</mark> avec $site_name";
$safe_desc = "Chiffrement de niveau bancaire, prestataires de paiement vérifiés et 98% de stockage à froid — votre argent est protégé à chaque étape.";

$safe_item1_title = "Prestataires de Paiement Vérifiés";
$safe_item1_desc = "Les paiements sont traités exclusivement par des prestataires certifiés respectant les normes de sécurité internationales. Vos données bancaires ne sont jamais stockées sur notre plateforme.";
$safe_item1_badge = "Paiements Sécurisés";

$safe_item2_title = "Authentification à Deux Facteurs (2FA)";
$safe_item2_desc = "Ajoutez une couche de protection supplémentaire à votre compte avec des mots de passe à usage unique par SMS ou Google Authenticator.";
$safe_item2_badge = "2FA";

$safe_item3_title = "98% Cold Storage";
$safe_item3_desc = "La grande majorité des actifs numériques est conservée dans des coffres cold storage hors ligne répartis géographiquement et protégés par des protocoles multi-signatures.";
$safe_item3_badge = "98% Cold Storage";

$safe_item4_title = "Exécution Réglementée";
$safe_item4_desc = "Nous collaborons avec des courtiers et fournisseurs de liquidité réglementés dans le monde entier pour garantir conformité, transparence et exécution de premier ordre.";
$safe_item4_badge = "Réglementé";

$safe_item5_title = "Chiffrement SSL 256 Bits";
$safe_item5_desc = "Toutes les transmissions de données entre votre navigateur et nos serveurs sont chiffrées avec les protocoles cryptographiques de qualité militaire TLS 1.3.";
$safe_item5_badge = "SSL 256 Bits";

// FREE GUIDE CTA BANNER (CTA 2)
$guide_cta_title = "Recevoir le Guide Gratuit";
$guide_cta_subtitle = "«10 Erreurs à Éviter dans le Trading Crypto»";
$guide_cta_btn = "Obtenir le Guide Gratuit";

// TRUST SECTION (Pourquoi les investisseurs font confiance à Ciel Cryptance)
$trust_title = "La confiance des traders du monde entier";
$trust_desc = "Plus de 4 000 000 d'utilisateurs dans le monde choisissent $site_name pour sa fiabilité, son automatisation puissante et son environnement transparent.";
$trust_subtitle = "Voici pourquoi les traders font confiance à $site_name :";

$trust_item1_title = "Accès aux Marchés Mondiaux";
$trust_item1_desc = "Négociez plus de 100 cryptomonnaies, paires de devises, actions et matières premières depuis un tableau de bord de trading unifié.";

$trust_item2_title = "Protection Solide des Fonds";
$trust_item2_desc = "Comptes séparés, vérifications biométriques continues et cybersécurité à la pointe protègent votre capital 24h/24 et 7j/7.";

$trust_item3_title = "Zéro Frais Cachés";
$trust_item3_desc = "Profitez d'une tarification parfaitement transparente. Inscription gratuite, dépôts gratuits, aucuns frais de gestion de plateforme et demandes de retrait instantanées.";

$trust_item4_title = "Support Réactif";
$trust_item4_desc = "Notre équipe de support dédiée est disponible par chat en direct, téléphone ou e-mail pour répondre à toutes vos questions ou demandes techniques.";

$trust_market_info_text = "Plus d'informations sur les conditions de marché en 2026";
$trust_market_info_btn = "Pourquoi Trader";

// START TRADING CTA (CTA 3)
$start_cta_title = "Commencez à Trader avec <span data-local-currency='$app_price'>$app_price $app_currency</span> !";
$start_cta_desc = "Prêt à essayer $site_name ? Inscrivez-vous dès maintenant et rejoignez la communauté grandissante d'investisseurs et de traders crypto.";
$start_cta_btn = "S'inscrire";

// FAQ SECTION
$faq_title = "Foire aux questions (FAQ) de $site_name";
$faq_q1 = "Qu'est-ce que $site_name et comment ça fonctionne ?";
$faq_a1 = "C'est une plateforme de trading propulsée par l'IA qui travaille pour vous 24 h/24. Le système analyse les marchés, repère les opportunités et exécute les transactions automatiquement. Vous pouvez laisser l'IA tout gérer, ou passer en mode manuel pour trader selon vos propres conditions à tout moment.";

$faq_q2 = "Mon argent et mes données sont-ils en sécurité avec $site_name ?";
$faq_a2 = "La sécurité est intégrée à chaque niveau de la plateforme. Les données personnelles sont protégées grâce à des normes de chiffrement reconnues internationalement et à une authentification de compte avancée. Toutes les transactions financières sont traitées exclusivement par des prestataires de paiement fiables et vérifiés. Toute votre activité de trading — chaque transaction, chaque signal et chaque mise à jour de solde — est visible en temps réel, afin que vous sachiez toujours exactement ce qui se passe avec vos fonds.";

$faq_q3 = "Puis-je retirer mes gains à tout moment ?";
$faq_a3 = "Oui. Il n'y a aucune restriction sur le moment ou la fréquence de vos retraits depuis $site_name. Le solde de votre compte reste sous votre contrôle à tout moment. Les retraits sont traités par les mêmes prestataires de paiement fiables utilisés pour les dépôts, garantissant des transactions rapides et sécurisées.";

$faq_q4 = "Y a-t-il des frais cachés ou des charges supplémentaires ?";
$faq_a4 = "Aucun. $site_name ne facture aucun frais d'abonnement, aucun frais d'inscription et aucun frais caché. Le seul montant nécessaire pour commencer est un dépôt minimum de $app_price $app_currency, versé directement sur votre compte de trading. Tous les principaux moyens de paiement sont acceptés, y compris les cartes de crédit, les virements bancaires et PayPal.";

$faq_q5 = "Ai-je besoin d'une expérience préalable pour commencer ?";
$faq_a5 = "Pas du tout. $site_name est conçu aussi bien pour les débutants complets que pour les traders expérimentés. En mode entièrement automatisé, l'IA gère tout pour vous, y compris l'analyse de marché, la génération de signaux et l'exécution des transactions. Si vous préférez garder le contrôle, vous pouvez passer en mode manuel à tout moment.";

$faq_cta_text = "Des questions ? Consultez notre FAQ ou contactez-nous.";
$faq_cta_faq_btn = "FAQ";
$faq_cta_contact_btn = "Contact";

// NEW TRADER LEAD SECTION (Bottom form)
$lead_title = "Nouveau dans le Trading ?";
$lead_p1 = "Après votre inscription, vous recevrez notre guide gratuit <mark class='text-on-surface-tertiary-accent'>«10 Erreurs à Éviter dans le Trading de Cryptomonnaies»</mark>. Il contient des conseils simples de nos analystes les plus expérimentés pour vous aider à éviter les pièges courants.";
$lead_p2 = "Saisissez simplement vos coordonnées dans le formulaire d'inscription et nous vous l'enverrons directement dans votre boîte mail. De nombreux traders ont commencé avec ce guide et l'ont trouvé précieux pour gagner en confiance lors de leurs premiers trades.";
$lead_form_heading = "Le marché n'attend pas — commencez dès aujourd'hui !";

// FEATURES TABLE (Fonctionnalités principales)
$features_title = "<mark>Fonctionnalités Clés</mark> de la Plateforme de Trading $site_name";
$feature_1_title = "🤖 Technologie de la Plateforme";
$feature_1_val = "Moteur de trading avancé propulsé par l'IA";
$feature_2_title = "💳 Méthodes de Financement";
$feature_2_val = "Principales cartes bancaires, virements, PayPal";
$feature_3_title = "📱 Accès à la Plateforme";
$feature_3_val = "Compatible multi-appareils (Ordinateur, Tablette, Mobile)";
$feature_4_title = "🚀 Taux de Réussite";
$feature_4_val = "85% de précision analytique";
$feature_5_title = "📊 Instruments de Trading";
$feature_5_val = "Cryptomonnaies, Forex, Actions, Matières Premières, Métaux Précieux, CFD et plus…";
$feature_6_title = "✍️ Configuration du Compte";
$feature_6_val = "Inscription rapide et simple";
$feature_7_title = "📞 Support Client";
$feature_7_val = "Support dédié professionnel 24h/24 et 7j/7";

// FOOTER DISCLAIMER (TZ Item 21)
$footer_disclaimer_p1 = "$site_name fournit du contenu éducatif et des informations générales sur les marchés financiers, le trading en ligne et les actifs numériques. Tous les documents publiés sur ce site, y compris les articles, graphiques, données de prix, analyses et commentaires de marché, sont fournis à titre informatif uniquement et ne doivent pas être considérés comme un conseil financier, d'investissement ou juridique. Bien que nous nous efforcions de maintenir notre contenu exact et à jour, nous ne garantissons pas son exhaustivité ni sa fiabilité et déclinons toute responsabilité pour les pertes découlant de l'utilisation de ce site.";
$footer_disclaimer_p2 = "Le trading de cryptomonnaies, du Forex, des CFD, d'actions et d'autres instruments financiers comporte un risque important et peut ne pas convenir à tous les investisseurs. Les conditions de marché peuvent changer rapidement, et les performances passées ne garantissent pas les résultats futurs. Avant de prendre une décision d'investissement, évaluez soigneusement votre situation financière et votre tolérance au risque, et demandez conseil à un professionnel indépendant si nécessaire. N'investissez que l'argent que vous pouvez vous permettre de perdre.";
$footer_copyright = "© 2026 $site_name. Tous droits réservés." . date('Y') . " $site_name. All rights reserved.";

// FOOTER NAV LINKS
$footnav_about = "À propos de nous";
$footnav_how = "Comment Ça Marche";
$footnav_why = "Pourquoi Trader";
$footnav_faq = "FAQ";
$footnav_contacts = "Contact";
$footnav_privacy = "Politique de confidentialité";
$footnav_risk = "Avertissement sur les Risques";
$footnav_terms = "Conditions d'Utilisation";
$footnav_product = "Produit";
$footnav_offer = "Offre";

// ABOUT PAGE VARIABLES
$about_meta_title = "À Propos | Site Officiel $site_name";
$about_meta_description = "En savoir plus sur $site_name, notre mission de démocratiser les marchés financiers grâce à l'automatisation par IA, et notre cadre de sécurité de niveau institutionnel.";
$about_h1 = "À Propos de <mark>$site_name</mark>";
$about_lead = "Nous donnons aux traders du monde entier les moyens d'agir grâce à l'intelligence artificielle, à l'exécution algorithmique et à la sécurité d'entreprise.";
$about_mission_title = "Notre Mission";
$about_mission_text = "Chez $site_name, nous pensons que les technologies de trading sophistiquées devraient être accessibles à tous, pas seulement aux fonds institutionnels. Notre plateforme comble le fossé entre les investisseurs particuliers ordinaires et les algorithmes de trading computationnels de pointe.";
$about_tech_title = "Technologie de Pointe";
$about_tech_text = "Nos systèmes évaluent plus de 100 000 points de données chaque seconde sur les marchés mondiaux des cryptomonnaies, du Forex et des actions. En combinant des modèles d'apprentissage automatique prédictifs avec une exécution en quelques sous-millisecondes, nous offrons un glissement ultra-faible et une performance fiable.";
$about_sec_title = "Sécurité & Conformité Réglementaire";
$about_sec_text = "La confiance des clients est le fondement de notre écosystème. Nous mettons en œuvre un chiffrement TLS 256 bits, des protocoles biométriques et 2FA stricts, et stockons 98% de toutes les réserves numériques dans des coffres cold storage.";

// PRODUCT PAGE VARIABLES
$product_meta_title = "Notre plateforme | $site_name";
$product_meta_description = "Découvrez comment $site_name combine une analyse propulsée par l'IA, des données de marché en temps réel et un tableau de bord transparent pour vous aider à trader en toute confiance.";
$product_h1 = "<mark>Produit et Fonctionnalités</mark> de la Plateforme";
$product_lead = "Découvrez les outils intelligents conçus pour vous donner un avantage concurrentiel sur les marchés financiers et des cryptomonnaies modernes.";
$product_f1_title = "Moteur de Trading Automatisé par IA";
$product_f1_text = "Laissez des algorithmes neuronaux analyser les tendances du marché et exécuter des trades optimaux 24h/24 sans émotion.";
$product_f2_title = "Analyses de Marché en Temps Réel";
$product_f2_text = "Profondeur du carnet d'ordres en direct, reconnaissance automatisée des tendances et suivi du sentiment institutionnel à portée de main.";
$product_f3_title = "Suite de Gestion des Risques";
$product_f3_text = "Limites de stop-loss et take-profit granulaires, contrôles d'exposition quotidienne maximale et capacités de couverture automatisées.";
$product_f4_title = "Accessibilité Multiplateforme";
$product_f4_text = "Négociez sans effort depuis un navigateur bureau, une tablette ou un smartphone, sans aucune latence et avec une synchronisation cloud complète.";

// OFFER PAGE VARIABLES
$offer_meta_title = "Commencer | $site_name";
$offer_meta_description = "Inscrivez-vous, alimentez votre compte et commencez à trader des cryptomonnaies avec $site_name en quelques minutes.";
$offer_h1 = "<mark>Offre de Trading</mark> Exclusive";
$offer_lead = "Commencez votre parcours de trading dès aujourd'hui avec des avantages compétitifs et un accompagnement personnalisé de votre compte.";
$offer_step1_title = "1. Inscription Rapide";
$offer_step1_text = "Remplissez notre bref formulaire d'inscription pour sécuriser l'accès à votre compte personnel en moins de 2 minutes.";
$offer_step2_title = "2. Alimentez Votre Solde de Trading";
$offer_step2_text = "Déposez le minimum standard de $app_price $app_currency par carte bancaire, virement ou e-wallet. 100% de vos fonds vont directement dans votre solde de trading.";
$offer_step3_title = "3. Activez le Trading par IA";
$offer_step3_text = "Choisissez le mode automatisé ou assisté, sélectionnez vos paires d'actifs préférées et commencez à trader avec toutes les fonctionnalités de la plateforme.";

// CONTACTS PAGE VARIABLES
$contacts_meta_title = "Contact et assistance | $site_name";
$contacts_meta_description = "Contactez l'équipe $site_name pour obtenir de l'aide concernant votre compte ou vos questions de trading.";
$contacts_h1 = "Contacts";
$contacts_lead = "Notre équipe de support international dédiée est prête à vous aider 24 heures sur 24, 7 jours sur 7.";
$contacts_info_title = "Demandes Officielles";
$contacts_info_text = "Pour toute demande générale, vérification de compte ou support technique, contactez-nous via nos canaux de communication vérifiés.";
$contacts_support_hours = "Support par Chat en Direct et E-mail 24h/24 et 7j/7";

// FAQ PAGE VARIABLES
$faq_meta_title = "FAQ & Base de Connaissances | $site_name";
$faq_meta_description = "Trouvez des réponses aux questions fréquemment posées sur les comptes $site_name, les dépôts, les retraits et le trading automatisé par IA.";
$faq_h1 = "<mark>FAQ</mark> $site_name";
$faq_lead = "Des réponses claires aux questions les plus courantes concernant la sécurité de la plateforme, les retraits et le trading automatisé.";

// PRIVACY POLICY PAGE VARIABLES
$privacy_meta_title = "Politique de confidentialité | Sécurité des données $site_name";
$privacy_meta_description = "Découvrez comment $site_name protège la confidentialité des utilisateurs selon des normes de chiffrement internationales strictes.";
$privacy_h1 = "Politique de Confidentialité";
$privacy_p1 = "Cette Politique de Confidentialité décrit comment $site_name collecte, utilise et divulgue les informations lorsque vous visitez notre site, créez un compte ou utilisez notre logiciel de trading.";
$privacy_sec1_title = "1. Collecte & Utilisation des Données";
$privacy_sec1_text = "Nous collectons les informations de contact nécessaires (nom, adresse e-mail, numéro de téléphone) pour créer votre compte, vous mettre en relation avec des partenaires courtiers vérifiés et vérifier votre identité conformément aux normes internationales KYC et AML.";
$privacy_sec2_title = "2. Cookies & Technologies de Suivi";
$privacy_sec2_text = "Nous utilisons des cookies essentiels et analytiques pour améliorer les performances du site, personnaliser l'expérience utilisateur et surveiller les tendances de trafic. Vous pouvez ajuster les paramètres de cookies de votre navigateur à tout moment.";
$privacy_sec3_title = "3. Sécurité des Données & Droits RGPD";
$privacy_sec3_text = "Toutes les données utilisateur sont chiffrées en transit et au repos avec des protocoles cryptographiques de niveau bancaire. En vertu du Règlement Général sur la Protection des Données (RGPD), les utilisateurs ont le droit de demander l'accès, la correction ou la suppression de leurs données personnelles.";

// TERMS OF USE PAGE VARIABLES
$terms_meta_title = "Conditions d'Utilisation | $site_name";
$terms_meta_description = "Consultez les Conditions Générales officielles régissant l'utilisation de la plateforme $site_name et des services associés.";
$terms_h1 = "Conditions d'Utilisation";
$terms_p1 = "Veuillez lire attentivement ces Conditions d'Utilisation avant d'accéder à $site_name ou de l'utiliser. En créant un compte, vous acceptez d'être lié par ces dispositions.";
$terms_sec1_title = "1. Éligibilité de l'Utilisateur";
$terms_sec1_text = "Vous devez avoir au moins 18 ans et résider dans une juridiction où le trading en ligne et les transactions en cryptomonnaies sont légalement autorisés. Vous êtes responsable de vous assurer de la conformité avec vos lois locales.";
$terms_sec2_title = "2. Inscription & Sécurité du Compte";
$terms_sec2_text = "Vous acceptez de fournir des informations véridiques, exactes et complètes lors de l'inscription. Vous êtes seul responsable de la confidentialité de vos identifiants de connexion.";
$terms_sec3_title = "3. Limitation de Responsabilité";
$terms_sec3_text = "$site_name fournit des services informatifs et de mise en relation logicielle. Nous ne fournissons pas de conseils financiers personnalisés et ne garantissons pas la rentabilité du trading. Le trading sur les marchés financiers comporte un risque de capital inhérent.";

// RISK WARNING PAGE VARIABLES (TZ Item 19: Exact 4 sections)
$risk_meta_title = "Avertissement sur les Risques & Mentions Légales | $site_name";
$risk_meta_description = "Avertissement important sur les risques concernant le trading de CFD, Forex et cryptomonnaies sur $site_name. À lire attentivement avant d'investir.";
$risk_h1 = "Avertissement sur les Risques";
$risk_sec1_title = "1. Avis d'Investissement à Haut Risque & Volatilité";
$risk_sec1_text = "Le trading de cryptomonnaies, de contrats sur différence (CFD), de devises (Forex) et d'autres actifs financiers comporte un risque substantiel de perte et ne convient pas à tous les investisseurs. Les marchés des cryptomonnaies sont exceptionnellement volatils, les prix étant sujets à de fortes fluctuations en réaction aux annonces réglementaires, aux changements macroéconomiques ou au sentiment du marché. Vous ne devez jamais investir de l'argent que vous ne pouvez pas vous permettre de perdre intégralement.";
$risk_sec2_title = "2. Conseil Financier Indépendant";
$risk_sec2_text = "Tous les documents, outils, signaux algorithmiques et commentaires fournis sur $site_name sont destinés uniquement à des fins informatives, éducatives et marketing. Aucun contenu de ce site ne constitue un conseil personnalisé en investissement, juridique ou financier. Avant d'exécuter des trades, vous devriez effectuer des recherches indépendantes ou consulter un conseiller financier agréé.";
$risk_sec3_title = "3. Restrictions Réglementaires & Géographiques";
$risk_sec3_text = "Certaines juridictions restreignent ou interdisent le trading de CFD et de cryptomonnaies aux particuliers. Il est de la seule responsabilité de l'utilisateur de vérifier si l'accès à $site_name et l'utilisation de courtiers partenaires sont légaux selon son cadre juridique local.";
$risk_sec4_title = "4. Technologie de la Plateforme & Exécution de Marché";
$risk_sec4_text = "Les outils de trading automatisés, les algorithmes d'intelligence artificielle et les indicateurs de marché ne garantissent pas de profits et n'éliminent pas les risques de marché. Les perturbations techniques, la latence réseau, les pannes système et les pénuries de liquidité peuvent entraîner des retards d'exécution des trades ou du slippage.";

// SIGN UP / LOGIN PAGE VARIABLES
$sign_meta_title = "Inscription | $site_name";
$sign_meta_description = "Créez votre compte $site_name gratuit et commencez à trader des cryptomonnaies sur une plateforme sécurisée et réglementée.";
$sign_h1 = "Inscrivez-Vous à <mark>$site_name</mark>";
$sign_lead = "Rejoignez des milliers de traders et accédez immédiatement à notre moteur de trading par IA.";

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
$hero_form_heading = "Créez votre compte gratuit";
$hero_form_button = "S'inscrire";
$form_name_placeholder = "Entrez votre prénom";
$form_surname_placeholder = "Entrez votre nom";
$form_disclaimer_prefix = "En saisissant vos informations personnelles et en cliquant sur le bouton, vous acceptez la";
$form_privacy_link_label = "Politique de confidentialité";
$form_disclaimer_and = "et les";
$form_terms_link_label = "Conditions d'utilisation";
$form_disclaimer_of_site = "de ce site.";

// -- partners strip --
$partners_label = "Approuvé par des partenaires de confiance";

// -- "what is" section --
$whatis_label = "À propos de la plateforme";
$whatis_title = "Qu'est-ce que $site_name ?";
$whatis_intro = "$site_name est la plateforme de trading en ligne officielle, conçue pour rendre la cryptomonnaie aussi simple que la banque en ligne au quotidien — que vous soyez un débutant complet ou un investisseur de longue date.";
$whatis_icon_1_title = "Analyse propulsée par l'IA";
$whatis_icon_1_text = "Des algorithmes avancés gèrent pour vous toute la complexité des marchés.";
$whatis_icon_2_title = "Exécution instantanée";
$whatis_icon_2_text = "Des milliers de points de données traités chaque seconde — des transactions sans délai.";
$whatis_icon_3_title = "Tableau de bord simple et intuitif";
$whatis_icon_3_text = "Consultez votre solde et vos positions ouvertes en un coup d'œil, à tout moment.";
$whatis_icon_4_title = "Accès facile, sans barrière";
$whatis_icon_4_text = "Commencez avec un dépôt minimum de seulement $app_price $app_currency — sans frais cachés.";
$whatis_cta_text = "Souhaitez-vous en savoir plus sur notre équipe et notre produit ?";
$whatis_cta_link = "À propos de nous";

// -- stats section heading (per-stat label/value already set above) --
$stats_label = "$site_name en chiffres";
$stats_title = "Des chiffres plus parlants que des promesses";

// -- key benefits section --
$benefits_label = "Avantages clés";
$benefits_title = "Principaux avantages de $site_name";
$benefit_1_title = "Plateforme adaptée aux débutants";
$benefit_1_text = "Des graphiques intuitifs et des guides étape par étape vous aident à démarrer sans vous sentir dépassé. Vous pouvez trader des cryptomonnaies même si c'est votre première fois — nous vous accompagnons à chaque étape.";
$benefit_2_title = "Officiel et réglementé";
$benefit_2_text = "$site_name est agréé et respecte la réglementation financière applicable. Nous utilisons le chiffrement SSL et l'authentification à deux facteurs pour protéger votre compte et vos fonds. Pas de fausses promesses ici — juste un accompagnement de trading honnête et fiable.";
$benefit_3_title = "Accès facile, sans barrière";
$benefit_3_text = "Avec un dépôt minimum de seulement $app_price $app_currency, tout le monde peut se lancer. Aucun investissement initial important n'est requis — commencez petit et augmentez votre mise à mesure que votre confiance grandit.";
$benefit_4_title = "Frais transparents";
$benefit_4_text = "Vous ne verrez jamais de frais cachés. Nous n'appliquons que des frais de transaction ou de retrait minimes, le cas échéant, afin que vous gardiez plus de ce qui vous appartient.";
$benefit_5_title = "Accès aux transactions 24 h/24, 7 j/7";
$benefit_5_text = "Tradez selon votre propre emploi du temps, jour et nuit. $site_name fonctionne aussi bien sur ordinateur que sur mobile, afin que vous puissiez réagir aux mouvements du marché où que vous soyez. Notre plateforme est rapide et fiable — les prix se mettent à jour en temps réel, ce qui vous aide à saisir rapidement les opportunités.";
$benefit_6_title = "Support client local";
$benefit_6_text = "Notre équipe d'assistance est disponible par chat, téléphone ou e-mail. De vraies personnes sont là pour vous aider dans votre langue, quand vous en avez besoin.";
$benefits_trust_title = "La confiance des utilisateurs du monde entier";
$benefits_trust_text = "C'est pourquoi tant d'utilisateurs de cryptomonnaies font confiance à $site_name. Des milliers de traders utilisent déjà $site_name, et notre communauté ne cesse de grandir chaque jour, avec une attention particulière portée à chaque nouvel utilisateur.";
$benefits_cta = "S'inscrire";
$benefits_badge_1 = "SSL 256 bits";
$benefits_badge_2 = "Paiements sécurisés";
$benefits_badge_3 = "2FA";

// -- security section --
$security_label = "Sécurité";
$security_title = "Vos fonds sont en sécurité avec $site_name";
$security_subtitle = "Chiffrement de niveau bancaire, paiements vérifiés et 98 % de stockage à froid — votre argent est protégé à chaque étape.";
$security_1_title = "Prestataires de paiement vérifiés";
$security_1_text = "Les paiements sont traités exclusivement par des prestataires certifiés qui répondent aux normes de sécurité internationales. Les données de votre carte ne sont jamais stockées sur notre plateforme.";
$security_2_title = "Chiffrement SSL 256 bits";
$security_2_text = "Toutes les données échangées entre votre appareil et notre plateforme sont chiffrées avec le protocole TLS 256 bits. Aucun tiers ne peut intercepter ou lire vos informations.";
$security_3_title = "98 % de stockage à froid";
$security_3_text = "98 % des actifs sont conservés dans des portefeuilles hors ligne, sans connexion Internet. Ils ne peuvent être consultés à distance par personne, même en cas d'attaque.";
$security_4_title = "Authentification multifacteur";
$security_4_text = "Vous seul pouvez accéder à votre compte. Chaque connexion est vérifiée par une seconde étape que vous seul contrôlez.";
$security_5_title = "Surveillance du compte";
$security_5_text = "Chaque connexion, transaction ou modification de paramètres déclenche une notification instantanée, afin que vous sachiez toujours ce qui se passe sur votre compte.";
$security_6_title = "Protection des mots de passe";
$security_6_text = "Les mots de passe sont stockés sous une forme illisible et irréversible. Nous n'avons techniquement aucun moyen de consulter votre mot de passe.";
$security_cta_title = "Recevez un guide gratuit !";
$security_cta_text = "Obtenez notre guide de démarrage gratuit et commencez à trader dès aujourd'hui.";
$security_cta_button = "S'inscrire";
$security_badge_1 = "98 % de stockage à froid";
$security_badge_2 = "Paiements vérifiés";
$security_badge_3 = "Chiffré";

// -- how it works section --
$how_label = "Comment ça marche";
$how_title = "Comment ça marche";
$how_1_title = "Inscrivez-vous";
$how_1_text = "Cliquez sur le bouton « Ouvrir un compte » et remplissez le formulaire d'inscription avec vos informations (nom, e-mail et numéro de téléphone). C'est gratuit et cela ne prend que quelques minutes. Nous vous demanderons de vérifier votre e-mail et de créer un mot de passe. Pour votre sécurité, vous activerez l'authentification à deux facteurs (2FA), qui permet de mieux protéger vos fonds.";
$how_2_title = "Déposez des fonds";
$how_2_text = "Ensuite, alimentez votre compte. Le dépôt minimum est de seulement $app_price $app_currency. Vous pouvez utiliser une carte de crédit/débit, un virement bancaire local ou des portefeuilles électroniques populaires. Votre dépôt devrait apparaître rapidement sur votre compte. (Conseil : commencez par un montant avec lequel vous êtes à l'aise.) Nous pourrons vous demander de compléter une vérification d'identité rapide lors de votre premier dépôt — une procédure standard qui ne prend que quelques minutes.";
$how_3_title = "Commencez à trader";
$how_3_text = "Une fois vos fonds sur votre compte, vous êtes prêt à trader. Choisissez l'actif que vous souhaitez (comme BTC, SOL ou USDT) et décidez du montant à investir. $site_name vous donne les outils pour définir votre propre stratégie, y compris des limites de stop-loss et des prix cibles. Nous proposons également une option de trading automatisé qui suit les signaux du marché pour vous, selon le niveau de risque que vous choisissez. Suivez les graphiques en direct sur votre tableau de bord — lorsqu'une transaction est rentable, votre solde se met à jour en conséquence.";
$how_cta_label = "Comment Ça Marche";
$how_cta_text = "Avez-vous besoin de plus d'informations sur le fonctionnement du service ?";
$how_cta_link = "Comment ça marche";

// -- trust reasons section --
$trust_label = "Pourquoi trader avec nous";
$trust_intro = "Rejoignez des milliers d'utilisateurs qui tradent déjà avec $site_name.";
$trust_1_title = "Entièrement réglementé";
$trust_1_text = "$site_name est dûment enregistré et respecte la réglementation financière applicable. Nous opérons selon des règles strictes afin de garantir votre protection.";
$trust_2_title = "Sécurité de pointe";
$trust_2_text = "Toutes vos données et tous vos fonds sont chiffrés et sécurisés. Nous imposons une protection rigoureuse des comptes grâce au chiffrement SSL et à l'authentification à deux facteurs, afin que vous puissiez trader en toute confiance, sachant que nous prenons la sécurité au sérieux.";
$trust_3_title = "Opérations transparentes";
$trust_3_text = "Nous ne cachons jamais nos frais et n'ajoutons jamais de règles surprises. Avant chaque transaction, vous voyez exactement quels frais s'appliquent. Nous communiquons également clairement sur les risques liés au trading — cette transparence est ce qui construit la confiance au sein de notre communauté.";
$trust_4_title = "Support réactif";
$trust_4_text = "Notre équipe d'assistance est disponible par chat, téléphone ou e-mail pour répondre à vos questions ou résoudre tout problème.";
$trust_cta_text = "Plus d'informations sur l'état du marché";
$trust_cta_link = "Pourquoi trader";

// -- testimonials section heading (individual reviews already set above) --
$testimonials_label = "Témoignages";
$testimonials_title = "La confiance de plus de 4M de traders";

// -- FAQ section heading --
$faq_label = "FAQ";

// -- lead magnet CTA block --
$leadmagnet_title = "Nouveau dans le trading ?";
$leadmagnet_text1 = "Après votre inscription, vous recevrez notre guide gratuit,";
$leadmagnet_quote = "« 10 erreurs à éviter lors du trading de cryptomonnaies »";
$leadmagnet_text2 = "rempli de conseils simples de nos analystes les plus expérimentés pour vous aider à éviter les erreurs les plus courantes.";
$leadmagnet_text3 = "Il vous suffit de saisir vos informations lors de votre";
$leadmagnet_link = "inscription";
$leadmagnet_text4 = "et nous vous l'enverrons directement dans votre boîte de réception. De nombreux investisseurs ont commencé avec ce guide et affirment qu'il leur a donné une réelle confiance pour leurs premières transactions.";
$leadmagnet_text5 = "Le marché n'attend pas — lancez-vous dès aujourd'hui !";

// -- pre-about CTA band --
$pre_about_title = "Prêt à prendre le contrôle de votre trading ?";
$pre_about_text = "Rejoignez $site_name dès aujourd'hui et découvrez une plateforme conçue pour la clarté, la sécurité et les résultats.";
$pre_about_button = "S'inscrire";

// -- pretest (quiz teaser) badges/CTA --
$pretest_title = "Commencez à trader avec $app_price $app_currency !";
$pretest_text = "Prêt à essayer $site_name ? Inscrivez-vous dès maintenant et rejoignez la communauté grandissante d'investisseurs et de traders en cryptomonnaies.";
$pretest_button = "S'inscrire";
$pretest_badge_1 = "Sécurisé";
$pretest_badge_2 = "Réglementé";
$pretest_badge_3 = "La confiance de plus de 4M de traders";

// -- about page --
$about_label = "À propos de nous";
$about_title = "À propos de $site_name";
$about_intro = "$site_name ne vous offre pas seulement une plateforme de trading — nous vous aidons à trader avec clarté et confiance.";
$about_text_1 = "$site_name est la plateforme de trading en ligne officielle, conçue pour rendre le trading de cryptomonnaies accessible aussi bien aux débutants qu'aux traders expérimentés.";
$about_text_2 = "Nous combinons une analyse de marché propulsée par l'IA avec un tableau de bord simple et transparent, afin que vous sachiez toujours exactement où vous en êtes. Que vous débutiez ou que vous affiniez votre approche, $site_name vous donne les outils pour trader selon vos propres conditions.";
$about_text_3 = "Chaque partie de la plateforme est conçue autour de la clarté : pas de frais cachés, pas de jargon confus, juste des informations claires qui vous aident à prendre de meilleures décisions, à trader avec plus de confiance et à garder le contrôle de votre risque.";
$about_text_4 = "Notre plateforme vous fait gagner des heures de tâtonnement et vous protège des alternatives opaques et de faible qualité. Nous croyons que de bons outils et des informations honnêtes permettent aux traders d'agir de façon stratégique et de croître durablement.";

// -- contact page --
$contact_label = "Contactez-nous";
$contact_title = "Contacter $site_name";
$contact_subtitle = "Une question ou besoin d'assistance ? Nous sommes là pour vous conseiller et vous guider.";
$contact_text = "Chez $site_name, nous pensons que la réussite en trading n'a rien à voir avec la chance — elle repose sur la précision, l'anticipation et une bonne planification.";
$contact_form_text = "Il vous suffit de remplir le formulaire ci-dessous, et un membre de notre équipe vous répondra rapidement.";
$contact_form_button = "Envoyer le message";

// -- footer navigation labels (geo-page footer, TZ items 12/16/18) --
$footnav_col_pages = "Pages";
$footnav_col_support = "Assistance";
$footnav_col_legal = "Mentions légales";
$footnav_col_company = "Entreprise";
$footnav_home = "Accueil";
$footnav_sitemap = "Plan du site";
$footnav_conditions = "Conditions d'utilisation";
$footnav_contact = "Nous contacter";
$footnav_signup = "S'inscrire";
$footer_risk_warning = "Avertissement sur les risques";

// -- geo-page footer legal disclaimer (single-paragraph variant used by
// the geo template's own footer layout; the two-paragraph TZ item 21
// text above -- $footer_disclaimer_p1/$footer_disclaimer_p2 -- covers
// the root pages) --
$footer_disclaimer = "$site_name décline toute responsabilité en cas de perte ou de dommage résultant de la confiance accordée aux informations fournies sur ce site, y compris le matériel éducatif, les cotations, les graphiques et les analyses. Le trading sur les marchés financiers comporte des risques importants ; veuillez consulter un conseiller professionnel avant d'investir. N'investissez jamais plus que ce que vous pouvez vous permettre de perdre. Les risques associés au Forex, aux CFD et aux cryptomonnaies peuvent ne pas convenir à tous les investisseurs. $site_name n'est pas responsable des pertes de trading que vous pourriez subir en utilisant ou en vous fiant aux données ou informations disponibles sur ce site.";

// ============================================================
// Geo-language SUBPAGE fallback content (TZ item 16 cont.). Same
// rationale as the block above: conditions/contacts/faq/offer/
// privacy/product/risk-warning/sign.php share templates across the
// bg/cs/da/... stub folders and reference these vars directly.
// English fallback so every geo folder's subpages render complete.
// ============================================================

// -- shared form aliases (service-page forms reuse the hero disclaimer) --
$form_disclaimer_risk_note = "Veuillez également consulter notre";
$form_text = $form_disclaimer_prefix;
$form_text_privacy = $form_privacy_link_label;
$form_text_privacy_and = $form_disclaimer_and;
$form_text_conditions = $form_terms_link_label;
$form_text_conditions_of = $form_disclaimer_of_site;
$form_text_risk_warning_note = $form_disclaimer_risk_note;
$form_submit = "S'inscrire";

// -- generic breadcrumbs (sign-up / product pages) --
$breadcrumb_home = "Accueil";
$breadcrumb_current = "Connexion/Inscription";
$breadcrumb_product = "Produit";

// -- sign-up page official heading --
$official_heading = "Inscrivez-vous sur la plateforme officielle {$site_name}™";
$official_description = "Créez votre compte gratuit pour commencer à trader des cryptomonnaies sur une plateforme sécurisée et transparente.";

// -- product page: analytics banner --
$analytics_heading = "Tradez plus intelligemment avec $site_name";
$analytics_description = "Consultez des données de marché claires en temps réel et des analyses pilotées par l'IA. Prenez des décisions de trading éclairées en toute confiance.";

// -- product page: dashboard preview --
$app_main_heading = "Votre tableau de bord de trading";
$app_feature_1_title = "Données de marché en direct";
$app_feature_1_text = "Prix et graphiques en temps réel à portée de main";
$app_feature_2_title = "Suivi du portefeuille";
$app_feature_2_text = "Indicateurs complets de solde et de performance";
$app_feature_3_title = "Vue mobile";
$app_feature_3_text = "Optimisée pour les navigateurs mobiles";
$app_feature_4_title = "Listes de suivi";
$app_feature_4_text = "Gardez un œil sur les actifs que vous suivez";

// -- product page: capabilities --
$capabilities_main_title = "Ce que vous obtenez";
$capabilities_feature_1_title = "Signaux propulsés par l'IA";
$capabilities_feature_1_text = "Des algorithmes avancés analysent les signaux du marché et font émerger des opportunités 24 h/24.";
$capabilities_feature_2_title = "Inscription rapide";
$capabilities_feature_2_text = "Inscrivez-vous en quelques minutes grâce à un processus d'inscription sécurisé et simple.";
$capabilities_feature_3_title = "Sécurité vérifiée";
$capabilities_feature_3_text = "Le chiffrement SSL 256 bits, la 2FA et 98 % de stockage à froid protègent vos fonds à chaque étape.";
$capabilities_feature_4_title = "Assistance continue";
$capabilities_feature_4_text = "Bénéficiez de l'accompagnement de notre équipe à chaque étape, de l'inscription à votre première transaction.";

// -- product page: stats strip --
$products_stats_currencies_v = "65+";
$products_stats_currencies_l = "Devises disponibles";
$products_stats_users_v = "4M+";
$products_stats_users_l = "Utilisateurs inscrits";
$products_stats_volume_v = "98+";
$products_stats_volume_l = "Pays pris en charge";
$products_stats_countries_v = "24/7";
$products_stats_countries_l = "Accès aux transactions";

// -- product page: 3-step strip --
$step_1 = "Créer un compte";
$step_2 = "Déposer des fonds";
$step_3 = "Commencer à trader selon votre stratégie personnalisée";

// -- shared "last update" label (privacy page) --
$last_update = "Dernière mise à jour";

// -- FAQ page --
$faq_page_meta_title = "FAQ | Assistance $site_name";
$faq_page_meta_description = "Réponses aux questions courantes sur le fonctionnement de $site_name, les tarifs et la mise en route.";
$faq_page_title = "FAQ";
$faq_page_breadcrumb_home = "Accueil";
$faq_page_breadcrumb_current = "FAQ";
$faq_page_help_title = "Comment pouvons-nous vous aider ?";
$faq_1_q = "Comment puis-je commencer ?";
$faq_1_a = "Créez votre compte, vérifiez votre e-mail et effectuez votre premier dépôt — les offres démarrent à partir de $app_price $app_currency.";
$faq_2_q = "Mon argent et mes données sont-ils en sécurité ? $site_name est-il fiable ?";
$faq_2_a = "Oui. Vos données sont protégées par un chiffrement 256 bits conforme aux normes du secteur, et vos fonds sont sécurisés par l'authentification à deux facteurs et 98 % de stockage à froid.";
$faq_3_q = "Puis-je fermer mon compte ou effectuer un retrait à tout moment ?";
$faq_3_a = "Oui. Il n'y a aucune restriction sur les retraits. Contactez notre équipe d'assistance à tout moment et nous vous aiderons avec votre compte ou traiterons rapidement votre retrait.";
$faq_4_q = "Comment savoir si cette plateforme me convient ?";
$faq_4_a = "$site_name est conçu à la fois pour les débutants complets et pour les traders expérimentés souhaitant trader plus efficacement — chaque outil de la plateforme est conçu pour vous tenir informé et vous garder le contrôle.";
$faq_5_q = "Ai-je besoin d'expérience en trading pour commencer ?";
$faq_5_a = "Aucune expérience préalable n'est nécessaire. Notre mode assisté par IA gère l'analyse pour vous, et vous pouvez passer en mode manuel dès que vous souhaitez plus de contrôle.";

// -- contacts page --
$contacts_h3 = "Pour toute question technique ou relative à votre compte, veuillez nous contacter par e-mail";

// -- offer page (meta title/description already defined above) --
$offer_breadcrumb_home = "Accueil";
$offer_breadcrumb_current = "Offre";
$offer_cta_h1 = "Commencez à trader dès aujourd'hui";
$offer_cta_text = "Démarrez en quelques minutes : inscrivez-vous, alimentez votre compte et commencez à trader des cryptomonnaies sur une plateforme sécurisée et réglementée.";
$offer_how_it_works_title = "Comment ça marche";
$offer_official_platform_title = "Ceci est la plateforme de trading officielle {$site_name}™";
$offer_official_platform_text = "Un moyen fiable et transparent de trader des cryptomonnaies avec des analyses en temps réel et un contrôle total.";

// -- conditions of use page --
$conditions_meta_title = "Conditions d'utilisation | $site_name";
$conditions_meta_description = "Consultez les conditions générales officielles d'utilisation du site $site_name et de la plateforme de trading.";
$conditions_breadcrumb_home = "Accueil";
$conditions_breadcrumb_current = "Conditions d'utilisation";
$conditions_h1 = "Conditions d'utilisation";
$conditions_s1_title = "1. Généralités";
$conditions_s1_text = "Ce site donne accès à une plateforme de trading de cryptomonnaies en ligne. L'utilisation de la plateforme constitue une acceptation totale des présentes conditions et de notre politique de confidentialité.";
$conditions_s2_title = "2. Admissibilité";
$conditions_s2_text = "Les utilisateurs doivent être âgés d'au moins 18 ans et disposer de la pleine capacité juridique dans leur juridiction d'exercice.";
$conditions_s3_title = "3. Accès restreint";
$conditions_s3_text = "L'accès peut être restreint dans les juridictions où la réglementation locale interdit le type de service de trading que nous proposons.";
$conditions_s4_title = "4. Utilisation interdite";
$conditions_s4_text = "Les utilisateurs ne doivent pas détourner le système, tenter d'accéder sans autorisation à nos systèmes, ni procéder à l'ingénierie inverse de nos logiciels.";
$conditions_s5_title = "5. Propriété intellectuelle";
$conditions_s5_text = "L'ensemble du code source, des interfaces utilisateur et des éléments de marque demeure la propriété exclusive de la société exploitante.";
$conditions_s6_title = "6. Responsabilité";
$conditions_s6_text = "Les outils de la plateforme sont fournis « en l'état ». Nous déclinons toute responsabilité quant aux conséquences résultant des propres décisions de trading de l'utilisateur.";
$conditions_s7_title = "7. Services tiers";
$conditions_s7_text = "Les intégrations avec des prestataires de paiement tiers fonctionnent via des connexions sécurisées. Les utilisateurs traitent directement avec le prestataire de leur choix pour les dépôts et les retraits.";
$conditions_s8_title = "8. Liens externes";
$conditions_s8_text = "Les liens vers des ressources externes sont fournis à titre pratique. Nous n'approuvons ni ne garantissons les logiciels externes.";
$conditions_s9_title = "9. Divers";
$conditions_s9_text = "Nous nous réservons le droit de modifier ces conditions ou le service à tout moment par publication sur le site.";

// -- privacy policy page (meta title/description already defined above) --
$privacy_breadcrumb_home = "Accueil";
$privacy_breadcrumb_current = "Politique de confidentialité";
$privacy_page_h1 = "Politique de confidentialité";
$privacy_intro = "Nous respectons votre vie privée et traitons les données personnelles en totale conformité avec les normes internationales et le règlement européen RGPD.";
$privacy_transparency_title = "Transparence";
$privacy_transparency_text = "Nous indiquons clairement comment les données de télémétrie opérationnelle sont traitées. Contactez notre assistance pour plus de détails.";
$privacy_usage_title = "Utilisation des données";
$privacy_usage_text = "Les données sont utilisées uniquement pour fournir l'accès, sécuriser les sessions et remplir les obligations de conformité.";
$privacy_rights_short_title = "Vos droits";
$privacy_rights_short_text = "Vous conservez tous les droits de consulter, mettre à jour ou demander la suppression de vos données personnelles.";
$privacy_security_title = "Sécurité";
$privacy_security_text = "Nous appliquons un chiffrement AES-256 et une isolation des bases de données pour protéger la télémétrie opérationnelle.";
$privacy_s1_title = "1. Collecte des données";
$privacy_s1_text = "Nous collectons des données de télémétrie d'utilisation (adresse IP, paramètres système, type de navigateur) ainsi que les informations de vérification soumises par l'utilisateur.";
$privacy_s2_title = "2. Base légale";
$privacy_s2_text = "Le traitement repose sur le consentement explicite de l'utilisateur, les obligations réglementaires de conformité et l'exécution du service.";
$privacy_s3_title = "3. Partage des données";
$privacy_s3_text = "Les données ne sont jamais commercialisées. Les divulgations sont limitées aux chambres de compensation autorisées et aux partenaires techniques soumis à un accord de confidentialité (NDA).";
$privacy_s4_title = "4. Cookies";
$privacy_s4_text = "Des cookies essentiels sont utilisés pour l'authentification des sessions et l'optimisation de l'interface.";
$privacy_google_choices = 'Gérez vos préférences de suivi via les <a href="http://www.google.com/settings/ads" target="_blank" rel="noopener">paramètres des annonces Google</a> ou utilisez le <a href="https://tools.google.com/dlpage/gaoptout" target="_blank" rel="noopener">module complémentaire de désactivation de Google Analytics</a>. Vous pouvez également consulter les pratiques de Google en matière de données dans sa <a href="https://www.google.com/intl/en/policies/privacy/" target="_blank" rel="noopener">politique de confidentialité</a>.';
$privacy_s5_title = "5. Conservation des données";
$privacy_s5_text = "Les données personnelles sont conservées strictement le temps nécessaire pour répondre aux exigences d'accès au système.";
$privacy_s6_title = "6. Transferts internationaux";
$privacy_s6_text = "Les transferts de données transfrontaliers utilisent strictement des canaux chiffrés et des clauses contractuelles types.";
$privacy_s7_title = "7. Liens vers des tiers";
$privacy_s7_text = "Nous ne sommes pas responsables des pratiques de confidentialité des services tiers externes référencés sur notre site.";
$privacy_s8_title = "8. Mises à jour";
$privacy_s8_text = "Cette politique peut être modifiée périodiquement afin de refléter les évolutions du système ou de la législation.";
$privacy_rights_title = "Vos droits";
$privacy_rights_text = "Les utilisateurs ont le droit de demander l'accès, la rectification, la limitation du traitement ou l'effacement complet de leurs données stockées.";

// -- risk warning page --
$page_title_risk_warning = "Avertissement sur les risques | $site_name";
$page_description_risk_warning = "Comprenez les risques du trading et comment $site_name vous aide à les gérer en toute confiance.";
$risk_warning_breadcrumb_home = "Accueil";
$risk_warning_breadcrumb_current = "Avertissement sur les risques";
$risk_warning_title = "Avertissement sur les risques";
$risk_warning_intro = "Comprendre les risques est la première étape vers un trading en toute confiance.";
$risk_warning_ai_heading = "Comment notre système d'IA aide à gérer le risque :";
$risk_warning_ai_1 = "<strong>Efficacité algorithmique et trading sans émotion :</strong> Des algorithmes avancés analysent les signaux du marché pour exécuter les transactions de manière objective aux moments optimaux.";
$risk_warning_ai_2 = "<strong>Stratégies fondées sur les données :</strong> Les stratégies reposent sur des schémas de marché vérifiés et une analyse en temps réel plutôt que sur des suppositions.";
$risk_warning_ai_3 = "<strong>Paramètres flexibles et contrôle total :</strong> Ajustez vos paramètres de risque à tout moment. Suivez tous vos soldes et transactions en toute transparence sur votre tableau de bord, sans frais cachés et avec des retraits sans restriction.";
$risk_warning_disclaimer = "<strong>Avertissement :</strong> Le trading comporte toujours des risques. Les systèmes automatisés (y compris l'IA) ne garantissent pas de profit, peuvent connaître des défaillances dues à des erreurs logicielles ou à des événements de marché imprévus, et nécessitent une surveillance de la part de l'utilisateur. Les performances passées ne préjugent pas des résultats futurs. Cette plateforme a une vocation purement informative et marketing et ne fournit pas de conseil financier.";
$risk_warning_s1_heading = "1. Risques généraux et risques liés au marché des cryptomonnaies";
$risk_warning_s1_1 = "Les cryptomonnaies sont des actifs spéculatifs très volatils qui fonctionnent 24 h/24, 7 j/7, avec une surveillance réglementaire minimale dans la plupart des juridictions.";
$risk_warning_s1_2 = "Les valeurs peuvent fluctuer de façon spectaculaire sur de courtes périodes, pouvant entraîner une perte totale du capital investi.";
$risk_warning_s1_3 = "Les valeurs de marché peuvent être fortement impactées par des évolutions réglementaires, des développements techniques, des failles de sécurité ou des événements macroéconomiques plus larges.";
$risk_warning_s1_4 = "Certains actifs peuvent perdre complètement toute valeur. N'investissez que les fonds que vous pouvez vous permettre de perdre.";
$risk_warning_s2_heading = "2. Risques d'exécution, de liquidité et d'effet de levier";
$risk_warning_s2_1 = "<strong>Volatilité du marché et liquidité :</strong> Des mouvements de prix extrêmes (10 à 20 % ou plus par jour) ou une faible liquidité (en particulier pour les petites cryptomonnaies) peuvent entraîner des retards, des interruptions de plateforme et un glissement d'exécution important. Les ordres stop-loss ne peuvent pas garantir de limiter les pertes dans des conditions extrêmes.";
$risk_warning_s2_2 = "<strong>Risques liés à l'effet de levier et à la marge :</strong> Les produits à effet de levier amplifient à la fois les gains et les pertes, ce qui signifie que vous pouvez perdre plus que votre dépôt initial. Environ 70 à 80 % des comptes d'investisseurs particuliers perdent de l'argent lorsqu'ils tradent des produits à effet de levier.";
$risk_warning_s3_heading = "3. Risques techniques, de cybersécurité et liés aux tiers";
$risk_warning_s3_1 = "<strong>Facteurs techniques :</strong> Le trading en ligne comporte intrinsèquement des risques de déconnexion Internet, d'erreurs matérielles/logicielles et d'indisponibilité du service.";
$risk_warning_s3_2 = "<strong>Cybersécurité :</strong> Les comptes de cryptomonnaies sont des cibles fréquentes de phishing, de logiciels malveillants et de piratage. Les transactions sont irréversibles ; la compromission de vos identifiants peut entraîner une perte définitive.";
$risk_warning_s3_3 = "<strong>Plateformes tierces :</strong> Ce site peut mettre en relation les utilisateurs avec des plateformes tierces. Nous ne contrôlons, n'approuvons ni ne garantissons leur sécurité, leur fonctionnement ou leur solvabilité. Effectuez toujours vos propres vérifications avant de déposer des fonds sur des plateformes externes.";
$risk_warning_s4_heading = "4. Dispositions réglementaires, fiscales et finales";
$risk_warning_s4_1 = "<strong>Conformité légale et fiscalité :</strong> Les cadres réglementaires varient considérablement et évoluent rapidement. Les utilisateurs sont seuls responsables de veiller à ce que leur activité de trading soit conforme aux lois locales et de remplir leurs propres obligations fiscales.";
$risk_warning_s4_2 = "<strong>Aucune garantie de profit :</strong> Il n'existe pas de trading de cryptomonnaies « sûr » ou sans risque. Tout chiffre de rendement ou exemple de performance est purement hypothétique.";
$risk_warning_s4_3 = "<strong>Adéquation :</strong> Si vous ne comprenez pas pleinement les risques, si vous dépendez de fonds essentiels, ou si vous tradez avec de l'argent emprunté, le trading de cryptomonnaies ne vous convient pas. Consultez un conseiller financier agréé indépendant en cas de doute.";
$risk_warning_contact = "<strong>Contact :</strong> Pour toute question concernant cette déclaration ou pour soumettre une demande, veuillez contacter notre équipe officielle du service client via le formulaire de contact de notre site.";

