<?php
require __DIR__ . '/../lang.php';
$site_lang = 'fr-FR';
$form_language = 'fr'; // matches this page's own language, not the offer's global default

// ============================================================
// FR TRANSLATION OVERRIDES
// Identity/config vars ($site_name, $site_url, $site_domain, $app_price,
// $app_currency, $rating_value, $rating_count, $review_count, $country_name,
// $review_1_author..$review_4_author, $quiz_consultant_name,
// $privacy_last_update) are intentionally NOT overridden — they stay exactly
// as inherited from the root lang.php.
// ============================================================

// TRANSLATION_MARKER: agent fills in translated variable overrides below this line.

// MAIN TITLE/DESCRIPTION
$home_meta_title = "$site_name — Plateforme de Trading Intelligente | Site Officiel";
$home_meta_description = "Visitez le site officiel de $site_name pour accéder à une plateforme de trading sécurisée dotée d'outils de marché intelligents, de données en temps réel et d'une expérience fluide pour les traders en ligne.";

// HERO
$hero_h1 = "Plataforma $site_name";
$hero_text = "Avec les bonnes connaissances, vous avez toujours une longueur d'avance sur le marché. $site_name vous aide à trouver la formation financière adaptée à votre parcours.";
$hero_form_heading = "Ouvrez votre compte gratuit dès maintenant et tradez plus intelligemment.";
$hero_form_button = "Inscrivez-vous en toute sécurité";
$hero_terms_link = "Conditions d'utilisation";
$hero_privacy_link = "Politique de confidentialité";
$hero_disclaimer_prefix = "En vous inscrivant, vous acceptez nos";
$hero_disclaimer_and = "et reconnaissez avoir pris connaissance de notre";

// TRUST STRIP
$trust_strip_text = "Rejoignez plus de 20 000 apprenants qui construisent leur propre avenir financier.";
$trust_strip_subtext = "Collaborez avec des organismes de formation financière reconnus dans 35 pays et acquérez des connaissances pratiques en trading — avec l'appui d'un accompagnement professionnel et d'une communauté engagée.";
$trust_stat_1_label = "Entreprises partenaires";
$trust_stat_1_value = "500+";
$trust_stat_2_label = "Utilisateurs actifs";
$trust_stat_2_value = "30 000+";
$trust_stat_3_label = "Taux de réussite";
$trust_stat_3_value = "98%";
$trust_stat_4_label = "Pays couverts";
$trust_stat_4_value = "35";

// WHY US
$why_us_label = "Pourquoi nous choisir";
$why_us_title = "Voici pourquoi $site_name est le premier choix des traders et des apprenants";
$why_us_subtitle = "Le bon partenaire. Un accompagnement parfait. Instantanément.";
$why_us_intro = "Trader, progresser et façonner votre avenir financier — tout est à votre portée. Nous vous aidons à trouver le bon organisme de formation financière. Notre plateforme intelligente vous propose des programmes parfaitement adaptés à vos objectifs, votre rythme et votre style d'apprentissage. À vous de jouer !";

$icon_1_title = "Une mise en relation personnalisée en quelques instants";
$icon_1_text = "Évitez les recherches interminables et les approximations. Notre système analyse vos objectifs et vos connaissances pour vous mettre en relation avec le bon organisme de formation financière. Débutant ou confirmé — nous trouvons la solution idéale pour que vous atteigniez votre objectif plus rapidement.";
$icon_2_title = "Un réseau mondial d'organismes de confiance";
$icon_2_text = "Nous collaborons avec des établissements de formation reconnus dans plus de 35 pays. Chaque programme est soigneusement évalué en matière de crédibilité, de résultats et d'accompagnement, afin de vous garantir la meilleure qualité, où que vous soyez. Commencez votre apprentissage en toute confiance, quel que soit votre pays d'origine.";
$icon_3_title = "Conçu pour un démarrage rapide";
$icon_3_text = "Pas de logiciel compliqué, pas d'options complexes. Nous simplifions tout en vous mettant directement en relation avec des solutions efficaces. Répondez à quelques questions et découvrez instantanément vos options. Vous n'êtes qu'à un instant d'un début en trading serein et sécurisé.";

// PANEL 1 (image: traders-analyzing)
$panel1_eyebrow = "Arrêtez de chercher — commencez à apprendre.";
$panel1_title = "Avancez plus vite. Sans perdre de temps.";
$panel1_lede = "Faites le bon choix dès le départ et prenez une longueur d'avance.";
$panel1_text = "Que vous débutiez en trading ou que vous souhaitiez approfondir vos connaissances, le plus grand défi n'est pas le contenu — c'est de choisir un organisme fiable. Nous simplifions cette étape : nous vous mettons en relation avec des organismes de formation financière réputés et rigoureusement sélectionnés, qui offrent une véritable expertise. Fini les vidéos en boucle sans fin. Fini les \"cours pro\" hors de prix. Uniquement des options transparentes et fiables, adaptées à vos objectifs — pour que vous puissiez vous concentrer sur l'essentiel : acquérir des connaissances et obtenir des résultats.";

// PANEL 2 (image: laptop-chart)
$panel2_eyebrow = "Prenez le contrôle de votre apprentissage";
$panel2_title = "Choisissez librement. Décidez en toute sécurité.";
$panel2_lede = "Ce dont vous avez vraiment besoin, ce sont des options fiables — pas un cours de plus.";
$panel2_text = "Nous n'imposons ni organisme unique ni parcours figé. Nous vous guidons plutôt à travers un réseau éprouvé de partenaires fiables en formation financière. Comparez, évaluez et trouvez la solution qui vous correspond parfaitement — en toute transparence et sans aucune pression, afin de garder le contrôle et de prendre des décisions éclairées. Une vraie progression commence par des choix clairs, pas par la confusion.";
$panel2_button = "Commencer maintenant";

// PANEL 3 (image: trader-night)
$panel3_eyebrow = "Aucune pression. Que des possibilités.";
$panel3_title = "Essayez d'abord. Décidez ensuite.";
$panel3_lede = "Découvrez les meilleures plateformes de formation financière — sans frais cachés, sans engagement.";
$panel3_text = "Chez $site_name, nous pensons que la formation doit être un choix — pas un risque. C'est pourquoi nous proposons des programmes fiables avec essais gratuits, tarifs transparents et un démarrage sans stress. Testez les programmes, comparez vos options et ne décidez que lorsque vous êtes prêt et convaincu. Votre seul investissement : l'opportunité de vous lancer.";

// PANEL 4 / testimonials intro (image: analyst-portrait)
$panel4_eyebrow = "Des avis authentiques. Des résultats réels.";
$panel4_title = "Faites votre choix sur la base de faits, pas de promesses vides.";
$panel4_lede = "Avant de choisir un organisme, écoutez ceux qui ont déjà parcouru ce chemin.";
$panel4_text = "Les meilleures décisions reposent sur une expérience réelle — pas sur une publicité tape-à-l'œil. $site_name vous donne accès à des avis vérifiés d'apprenants ayant suivi les cours, travaillé avec des mentors et obtenu des résultats concrets. Vous avez ainsi une vision claire des avantages de chaque programme pour décider en toute confiance.";

// TESTIMONIALS
$testimonials_label = "Témoignages";
$testimonials_title = "Des histoires vraies d'apprenants qui ont trouvé leur propre voie";

$review_1_text = "$site_name m'a fait gagner des semaines de recherche. Je ne savais pas quel cours de trading choisir — l'offre en ligne était tout simplement écrasante. $site_name m'a proposé deux programmes parfaitement adaptés à mes objectifs et à mon budget, tous deux bien notés et avec une période d'essai. Je me suis inscrit le jour même. Tout s'est déroulé sans accroc.";
$review_1_role = "Trader débutant";
$review_2_text = "Les cours trouvés grâce à $site_name m'ont permis de faire progresser mon portefeuille de 14 % en seulement trois mois. Ce qui m'a le plus impressionné, c'est le niveau de personnalisation des suggestions. J'ai pu choisir un organisme parfaitement adapté à ma tolérance au risque, mon emploi du temps et mon style d'apprentissage. Pour moi, tout est une question de bonne stratégie dès le premier jour.";
$review_2_role = "Trader à temps partiel";
$review_3_text = "J'ai enfin confiance en mon parcours d'apprentissage. Avant $site_name, ma formation était plutôt désorganisée — des vidéos YouTube et des cours coûteux. Aujourd'hui, je construis mes connaissances avec un programme structuré et fiable qui m'enseigne les compétences essentielles. Je sais exactement à quoi m'attendre. Un vrai programme et un vrai accompagnement.";
$review_3_role = "Vendeur indépendant &amp; investisseur en devenir";

// FAQ
$faq_label = "FAQ";
$faq_title = "Des questions ? Nous avons les réponses.";
$faq_q1 = "Comment $site_name m'aide-t-il à choisir le bon programme pour ma formation financière ?";
$faq_a1 = "Nous prenons en compte vos objectifs, vos connaissances actuelles et vos préférences d'apprentissage, puis nous vous mettons en relation avec des organismes de formation agréés. Vous ne recevez que les options les mieux adaptées — aucune recommandation sponsorisée, aucune offre hors sujet.";
$faq_q2 = "L'utilisation de $site_name est-elle gratuite ?";
$faq_a2 = "Oui. L'utilisation de notre plateforme pour découvrir et comparer les programmes est gratuite. Certains organismes proposent des essais gratuits ou des formules payantes — l'inscription reste entièrement à votre discrétion.";
$faq_q3 = "Proposez-vous vos propres cours ?";
$faq_a3 = "Non. Nous ne proposons pas nos propres cours. Nous vous mettons plutôt en relation avec des organismes de formation financière reconnus, afin que vous puissiez choisir le programme qui vous convient le mieux.";
$faq_q4 = "Comment puis-je être sûr que les programmes que vous recommandez sont légitimes ?";
$faq_a4 = "Tous les organismes recommandés répondent à nos critères de qualité stricts : tarification transparente, avis authentiques d'apprenants et méthodes pédagogiques éprouvées. Chaque programme est minutieusement évalué pour vous garantir une réelle valeur ajoutée.";
$faq_q5 = "Et si je suis un débutant complet ?";
$faq_a5 = "Pas d'inquiétude. Nous vous orientons vers des programmes adaptés aux débutants, qui partent de zéro et vous font progresser en toute sécurité, étape par étape.";
$faq_q6 = "Puis-je comparer plusieurs options avant de me décider ?";
$faq_a6 = "Oui, bien sûr. Vous pouvez comparer différentes options à votre propre rythme et choisir l'organisme qui vous correspond le mieux.";

// CONTACT SECTION (homepage)
$contact_label = "Contactez-nous";
$contact_title = "Contacter $site_name";
$contact_subtitle = "Une question ou besoin d'assistance ? Nous sommes là pour vous conseiller et vous accompagner.";
$contact_text = "Chez $site_name, nous pensons que la réussite en trading n'a rien à voir avec la chance — elle repose sur la précision, l'anticipation et une bonne planification.";
$contact_form_text = "Remplissez simplement le formulaire ci-dessous, et un membre de notre équipe vous recontactera rapidement pour vous accompagner en toute sérénité.";
$contact_form_button = "Envoyer le message";

// PRE-ABOUT CTA
$pre_about_title = "Trouvez la bonne formation. Acquérez les compétences pour trader plus intelligemment.";
$pre_about_text = "Vous êtes ici pour développer et perfectionner vos compétences en trading.";
$pre_about_button = "Commencer maintenant";

// IMAGE ALT TEXT
$alt_tablet_dashboard = "Tablette affichant un tableau de bord de trading boursier";
$alt_traders_analyzing = "Traders analysant des graphiques boursiers";
$alt_laptop_chart = "Ordinateur portable affichant un graphique de trading";
$alt_trader_night = "Trader travaillant de nuit";
$alt_analyst_portrait = "Portrait souriant d'un analyste financier";

// ABOUT
$about_label = "À propos de nous";
$about_title = "À propos de $site_name";
$about_intro = "$site_name ne se contente pas de vous aider à apprendre — nous vous aidons à révéler tout votre potentiel de trading.";
$about_text_1 = "$site_name est convaincu qu'un trading intelligent commence par une formation adaptée. Notre objectif est d'aider aussi bien les débutants que les traders expérimentés à trouver des cours financiers de qualité.";
$about_text_2 = "Nous collaborons avec des organismes hautement qualifiés qui proposent des plans d'apprentissage structurés, des conseils pratiques et un accompagnement axé sur la progression. Que vous débutiez ou que vous affiniez votre approche, $site_name vous oriente vers des programmes parfaitement adaptés à vos objectifs, vos compétences et votre style d'apprentissage.";
$about_text_3 = "Chaque recommandation est personnalisée : pas de listes fourre-tout, pas de classements payants — uniquement des options pertinentes et rigoureusement vérifiées. Vous acquérez ainsi des connaissances solides pour trader de façon plus réfléchie et plus confiante, avec moins de décisions impulsives, une meilleure maîtrise du risque et de meilleurs résultats.";
$about_text_4 = "Notre plateforme vous fait gagner des heures de recherche et vous protège des cours tape-à-l'œil de faible qualité. Nous croyons qu'une bonne formation permet aux traders d'agir avec stratégie et de progresser durablement.";


// ==========================================
// CHAT-QUIZ TRANSLATIONS & CONFIGURATION
// ==========================================

$quiz_consultant_role = 'Conseillère d\'intégration';

$quiz_text_welcome   = "Bonjour ! Je suis $quiz_consultant_name, de $site_name. Bonne nouvelle — vous êtes déjà pré-qualifié(e). Configurons ensemble votre profil d'apprentissage pour trouver le programme qui vous correspond.";
$quiz_text_q1 = "Afin de vous mettre en relation avec des prestataires disponibles dans votre région, veuillez confirmer votre pays : $country_name";
$quiz_text_a1_yes    = "Oui, il s'agit de ma localisation actuelle";
$quiz_text_a1_no     = "Non";

$quiz_text_q2 = "Sélectionnez votre tranche d'âge afin que nous puissions vous recommander des programmes adaptés :";

$quiz_text_q3        = "Disposez-vous d'un compte bancaire ou d'une carte active pour régler votre formation une fois choisie ?";
$quiz_text_a3_yes    = "Oui, compte actif disponible";
$quiz_text_a3_no     = "Non disponible pour le moment";

$quiz_text_q4        = "Indiquez-nous votre principale source de revenus afin que nous puissions vous suggérer des programmes adaptés à votre budget :";
$quiz_text_a4_1      = "Revenus d'activité salariée / indépendante";
$quiz_text_a4_2      = "Épargne / investissements personnels";
$quiz_text_a4_3      = "Autres sources";

$quiz_text_q5 = "Dernière étape : l'un de nos conseillers vous appellera pour passer en revue vos options entre 11h00 et 20h00. Ce créneau vous convient-il ?";
$quiz_text_a5_yes    = "Oui, ce créneau me convient";
$quiz_text_a5_no     = "Demander un contact prioritaire immédiat";

$quiz_text_loader    = "Nous vous mettons en relation avec les prestataires de formation adaptés...";
$quiz_text_final_ttl = "C'est prêt ! 🎉 Vos correspondances sont disponibles. Terminez votre inscription ci-dessous pour découvrir vos programmes personnalisés :";

$quiz_placeholder_fname = "Prénom";
$quiz_placeholder_lname = "Nom";
$quiz_placeholder_email = "Adresse e-mail";
$quiz_placeholder_phone = "Numéro de téléphone";
$quiz_btn_submit = "Voir mes correspondances";
$quiz_text_typing       = "prépare une réponse...";
$quiz_text_processing   = "Validation des informations...";


// TITLE/DESCRIPTION
$sign_meta_title = "Inscription | $site_name";
$sign_meta_description = "Créez votre compte $site_name gratuit et soyez mis en relation avec des prestataires de formation financière vérifiés.";
$product_meta_title = "Notre plateforme | $site_name";
$product_meta_description = "Découvrez comment $site_name vous met en relation avec les bons programmes de formation financière, suit votre progression et garde vos options transparentes.";
$privacy_meta_title = "Politique de confidentialité | Sécurité des données $site_name";
$privacy_meta_description = "Découvrez comment $site_name protège la confidentialité des utilisateurs selon des normes de chiffrement internationales strictes.";
$offer_meta_title = "Commencer | $site_name";
$offer_meta_description = "Inscrivez-vous, indiquez-nous vos objectifs et commencez à comparer des programmes de formation financière vérifiés avec $site_name.";
$faq_page_meta_title = "FAQ | Assistance $site_name";
$faq_page_meta_description = "Réponses aux questions courantes sur le fonctionnement de $site_name, les tarifs et la mise en route.";
$contacts_meta_title = "Contact & Assistance | $site_name";
$contacts_meta_description = "Contactez l'équipe $site_name pour vous aider à choisir un programme ou à configurer votre compte.";
$conditions_meta_title = "Conditions d'utilisation | $site_name";
$conditions_meta_description = "Consultez les conditions générales officielles d'utilisation du site et du service de mise en relation $site_name.";

// FORM (Compact UI layout)
$form_name = "Prénom";
$form_name_placeholder = "Saisissez votre prénom";
$form_surname = "Nom";
$form_surname_placeholder = "Saisissez votre nom";
$form_email = "E-mail";
$form_email_placeholder = "Saisissez votre e-mail";
$form_phone = "Téléphone";
$form_submit = "S'inscrire maintenant";
$form_text = "En saisissant vos informations personnelles et en cliquant sur le bouton, vous acceptez la";
$form_text_privacy = "Politique de confidentialité";
$form_text_privacy_and = "et les";
$form_text_conditions = "Conditions d'utilisation";
$form_text_conditions_of = "du site.";
$form_text_risk_warning_note = "Veuillez également consulter notre";

// MAIN PAGE
// Header
$mobnav_home = "Accueil";
$mobnav_product = "Produit";
$mobnav_offer = "Offre";
$mobnav_contact = "Nous contacter";
$mobnav_faq = "FAQ";
$mobnav_signup = "S'inscrire";

// Footer
$footnav_home = "Accueil";
$footnav_product = "Produit";
$footnav_offer = "Offre";
$footnav_contact = "Nous contacter";
$footnav_faq = "FAQ";
$footnav_privacy = "Politique de confidentialité";
$footnav_conditions = "Conditions d'utilisation";
$footnav_sitemap = "Plan du site";
$footnav_signup = "S'inscrire";
$footnav_about = "À propos de nous";
$footnav_col_pages = "Pages";
$footnav_col_support = "Assistance";
$footnav_col_legal = "Mentions légales";
$footnav_col_company = "Entreprise";
$footer_partner_text = "Votre partenaire de confiance en formation financière";
$footer_disclaimer = "$site_name décline toute responsabilité en cas de pertes financières ou de dommages résultant de l'utilisation des informations disponibles sur ce site, y compris les supports pédagogiques, les cours de marché, les graphiques, les analyses ou tout autre contenu publié. Le trading et l'investissement sur les marchés financiers comportent des risques inhérents. Avant toute décision financière, vous devez évaluer soigneusement vos propres objectifs, votre situation financière et votre niveau d'expérience, et consulter un conseiller financier indépendant si nécessaire. N'investissez jamais des fonds que vous ne pouvez pas vous permettre de perdre, et sachez que des produits tels que le Forex, les CFD et les cryptomonnaies comportent un risque important et peuvent ne pas convenir à tous les investisseurs.";
$footer_copyright = "Copyright 2026 © $site_name, Tous droits réservés";

// FAQ
$faq_1_q = "Comment puis-je commencer ?";
$faq_1_a = "Créez votre profil, indiquez-nous vos objectifs et votre niveau d'expérience, et nous vous mettrons instantanément en relation avec des formations et programmes vérifiés — les offres démarrent à $app_price $app_currency.";
$faq_2_q = "Mon argent et mes données sont-ils en sécurité ? $site_name est-il fiable ?";
$faq_2_a = "Oui. Vos données sont protégées par un chiffrement conforme aux normes du secteur, et chaque prestataire de notre réseau est vérifié pour sa transparence, les retours authentiques de ses apprenants et des méthodes d'enseignement éprouvées avant d'être recommandé.";
$faq_3_q = "Puis-je annuler ou changer de programme si celui-ci ne me convient pas ?";
$faq_3_a = "Oui. Si un programme ne vous convient pas, contactez notre équipe d'assistance : nous vous aiderons à passer à un prestataire mieux adapté ou à obtenir un remboursement selon la politique de ce dernier.";
$faq_4_q = "Comment savoir si cette plateforme me convient ?";
$faq_4_a = "$site_name s'adresse aussi bien aux débutants complets qu'aux traders expérimentés souhaitant perfectionner leurs compétences — chaque recommandation est adaptée à vos propres objectifs et à votre niveau d'expérience.";
$faq_5_q = "Dois-je avoir de l'expérience en trading pour commencer ?";
$faq_5_a = "Aucune expérience préalable n'est nécessaire. Nous proposons des programmes adaptés aux débutants, qui partent des bases et vous accompagnent étape par étape.";

// Register Down
$official_heading = "Inscrivez-vous sur la plateforme officielle {$site_name}™";
$official_description = "Créez votre compte gratuit pour être mis en relation avec des prestataires de formation financière vérifiés, adaptés à vos objectifs.";

// SIGN PAGE
$breadcrumb_home = "Accueil";
$breadcrumb_current = "Connexion/Inscription";

// PRODUCT PAGE
$breadcrumb_product = "Produit";
$analytics_heading = "Comparez les programmes avec $site_name";
$analytics_description = "Consultez des comparaisons claires et détaillées de programmes de formation financière vérifiés. Faites un choix éclairé, en toute confiance.";
$analytics_btn_signup = "S'inscrire";
$app_main_heading = "Votre tableau de bord d'apprentissage";
$app_feature_1_title = "Répertoire des programmes";
$app_feature_1_text = "Des programmes de formation financière vérifiés à portée de main";
$app_feature_2_title = "Suivi de progression";
$app_feature_2_text = "Des indicateurs de progression complets";
$app_feature_3_title = "Vue mobile";
$app_feature_3_text = "Optimisée pour les navigateurs mobiles";
$app_feature_4_title = "Programmes enregistrés";
$app_feature_4_text = "Gardez une trace des programmes que vous comparez";
$app_img_alt = "Interface mobile de suivi de vos programmes d'apprentissage";
$products_stats_currencies_v = "500+";
$products_stats_currencies_l = "Programmes partenaires";
$products_stats_users_v = "30 000+";
$products_stats_users_l = "Apprenants mis en relation";
$products_stats_volume_v = "98 %";
$products_stats_volume_l = "Taux de réussite";
$products_stats_countries_v = "35";
$products_stats_countries_l = "Pays couverts";

// Capabilities
$capabilities_main_title = "Ce que vous obtenez";
$capabilities_feature_1_title = "Comparaison de programmes";
$capabilities_feature_1_text = "Comparez le contenu, les prix et les avis de tous les prestataires vérifiés en un seul endroit.";
$capabilities_feature_2_title = "Inscription rapide";
$capabilities_feature_2_text = "Inscrivez-vous en quelques minutes grâce à un processus d'inscription sécurisé et simple.";
$capabilities_feature_3_title = "Avis vérifiés";
$capabilities_feature_3_text = "Lisez les retours authentiques d'apprenants ayant terminé chaque programme avant de vous décider.";
$capabilities_feature_4_title = "Accompagnement continu";
$capabilities_feature_4_text = "Bénéficiez de l'accompagnement de notre équipe à chaque étape, de l'inscription à la fin du programme.";
$capabilities_cta_heading = "C'est parti !";
$capabilities_cta_text = "Rejoignez des milliers d'apprenants ayant trouvé le bon programme de formation financière grâce à $site_name.";

// PRIVACY PAGE
$privacy_breadcrumb_home = "Accueil";
$privacy_breadcrumb_current = "Politique de confidentialité";
$privacy_page_h1 = "Politique de confidentialité";
$last_update = "Dernière mise à jour";
$privacy_intro = "Nous respectons votre vie privée et traitons les données personnelles dans le strict respect des normes internationales et du règlement européen RGPD.";
$privacy_transparency_title = "Transparence";
$privacy_transparency_text = "Nous indiquons clairement comment la télémétrie opérationnelle est traitée. Contactez le support pour plus de détails.";
$privacy_usage_title = "Utilisation des données";
$privacy_usage_text = "Les données sont utilisées uniquement pour fournir l'accès, sécuriser les sessions et satisfaire aux obligations de conformité.";
$privacy_rights_short_title = "Vos droits";
$privacy_rights_short_text = "Vous conservez l'entier droit de consulter, de mettre à jour ou de demander la suppression de vos données personnelles.";
$privacy_security_title = "Sécurité";
$privacy_security_text = "Nous appliquons un chiffrement AES-256 et une isolation des bases de données pour protéger la télémétrie opérationnelle.";

$privacy_s1_title = "1. Collecte des données";
$privacy_s1_text = "Nous collectons des données de télémétrie d'utilisation (adresse IP, paramètres système, type de navigateur) ainsi que les informations de vérification fournies par l'utilisateur.";
$privacy_s2_title = "2. Base légale";
$privacy_s2_text = "Le traitement repose sur le consentement explicite de l'utilisateur, les obligations de conformité réglementaire et l'exécution du service.";
$privacy_s3_title = "3. Partage des données";
$privacy_s3_text = "Les données ne sont jamais commercialisées. Leur divulgation se limite aux chambres de compensation autorisées et aux partenaires techniques liés par un accord de confidentialité.";
$privacy_s4_title = "4. Cookies";
$privacy_s4_text = "Des cookies essentiels sont utilisés pour l'authentification des sessions et l'optimisation de l'interface.";
$privacy_google_choices = 'Gérez vos préférences de suivi via les <a href="http://www.google.com/settings/ads" target="_blank" rel="noopener">paramètres des annonces Google</a> ou utilisez le <a href="https://tools.google.com/dlpage/gaoptout" target="_blank" rel="noopener">module complémentaire de désactivation de Google Analytics</a>. Vous pouvez également consulter les pratiques de Google en matière de données dans sa <a href="https://www.google.com/intl/en/policies/privacy/" target="_blank" rel="noopener">politique de confidentialité</a>.';
$privacy_s5_title = "5. Conservation des données";
$privacy_s5_text = "Les données personnelles sont conservées uniquement pendant la durée nécessaire pour répondre aux exigences d'accès au système.";
$privacy_s6_title = "6. Transferts internationaux";
$privacy_s6_text = "Les transferts de données transfrontaliers utilisent exclusivement des canaux chiffrés et des clauses contractuelles types.";
$privacy_s7_title = "7. Liens vers des tiers";
$privacy_s7_text = "Nous ne sommes pas responsables des pratiques de confidentialité des services tiers externes liés sur notre site.";
$privacy_s8_title = "8. Mises à jour";
$privacy_s8_text = "Cette politique peut être modifiée périodiquement afin de refléter les évolutions du système ou de la législation.";
$privacy_rights_title = "Vos droits";
$privacy_rights_text = "Les utilisateurs ont le droit de demander l'accès, la rectification, la limitation du traitement ou l'effacement complet des données les concernant.";

// OFFER PAGE
$offer_breadcrumb_home = "Accueil";
$offer_breadcrumb_current = "Offre";
$offer_cta_h1 = "Trouvez votre programme";
$offer_cta_text = "Démarrez en quelques minutes : inscrivez-vous, indiquez-nous vos objectifs et soyez mis en relation instantanément avec le bon programme de formation financière.";
$offer_how_it_works_title = "Comment ça marche";
$step_1 = "Créer un compte";
$step_2 = "Nous indiquer vos objectifs";
$step_3 = "Commencer à apprendre avec votre programme";
$offer_official_platform_title = "Voici la plateforme officielle de mise en relation {$site_name}™";
$offer_official_platform_text = "Une manière fiable et transparente de trouver et de comparer des prestataires de formation financière vérifiés.";

$faq_page_title = "FAQ";
$faq_page_breadcrumb_home = "Accueil";
$faq_page_breadcrumb_current = "FAQ";
$faq_page_help_title = "Comment pouvons-nous vous aider ?";

// SITE MAP PAGE
$sitemap_meta_title = "Plan du site | $site_name";
$sitemap_meta_description = "Consultez un aperçu complet de toutes les pages disponibles sur le site $site_name.";
$sitemap_breadcrumb_home = "Accueil";
$sitemap_breadcrumb_current = "Plan du site";
$sitemap_h1 = "Plan du site";
$sitemap_intro = "Vous trouverez ci-dessous un aperçu complet de toutes les pages du site $site_name.";

// CONDITIONS PAGE
$contacts_h1 = "Contacts";
$contacts_h3 = "Pour toute question technique ou relative à votre compte, veuillez nous contacter par e-mail";
$conditions_breadcrumb_home = "Accueil";
$conditions_breadcrumb_current = "Conditions d'utilisation";
$conditions_h1 = "Conditions d'utilisation";

$conditions_s1_title = "1. Généralités";
$conditions_s1_text = "Ce site donne accès à un service de mise en relation pour la formation financière. Son utilisation vaut acceptation pleine et entière des présentes Conditions et de la Politique de confidentialité.";
$conditions_s2_title = "2. Éligibilité";
$conditions_s2_text = "Les utilisateurs doivent être âgés d'au moins 18 ans et disposer de la pleine capacité juridique dans leur juridiction d'exercice.";
$conditions_s3_title = "3. Accès restreint";
$conditions_s3_text = "L'accès peut être restreint dans les juridictions où la réglementation locale interdit ce type de service de mise en relation.";
$conditions_s4_title = "4. Utilisation interdite";
$conditions_s4_text = "Les utilisateurs ne doivent pas détourner le système, tenter d'accéder sans autorisation à nos systèmes, ni procéder à l'ingénierie inverse de nos logiciels.";
$conditions_s5_title = "5. Propriété intellectuelle";
$conditions_s5_text = "L'ensemble du code source, des interfaces utilisateur et des éléments de marque demeure la propriété exclusive de la société exploitante.";
$conditions_s6_title = "6. Responsabilité";
$conditions_s6_text = "Les outils de la plateforme sont fournis 'tels quels'. Nous déclinons toute responsabilité quant aux résultats liés au prestataire ou au programme choisi par l'utilisateur.";
$conditions_s7_title = "7. Services tiers";
$conditions_s7_text = "Les intégrations avec des prestataires tiers fonctionnent via des connexions sécurisées. Les utilisateurs traitent directement avec le prestataire choisi pour l'inscription et le paiement.";
$conditions_s8_title = "8. Liens externes";
$conditions_s8_text = "Les liens vers des ressources externes sont fournis à titre indicatif. Nous n'approuvons ni ne garantissons les logiciels externes.";
$conditions_s9_title = "9. Dispositions diverses";
$conditions_s9_text = "Nous nous réservons le droit de modifier à tout moment les présentes conditions ou le service, dès leur publication en ligne.";

// ==========================================
// RISK WARNING PAGE
// ==========================================
$page_title_risk_warning = "Avertissement sur les risques | $site_name";
$page_description_risk_warning = "Comprenez les risques du trading et la façon dont $site_name vous aide à les gérer en toute confiance.";
$risk_warning_breadcrumb_home = "Accueil";
$risk_warning_breadcrumb_current = "Avertissement sur les risques";
$risk_warning_title = "Avertissement sur les risques";
$risk_warning_intro = "Comprendre les risques est la première étape vers un trading en toute confiance.";

$risk_warning_ai_heading = "Comment notre système d'IA vous aide à gérer le risque :";
$risk_warning_ai_1 = "<strong>Efficacité algorithmique & trading sans émotion :</strong> Des algorithmes avancés analysent les signaux de marché pour exécuter les transactions de manière objective, au moment optimal.";
$risk_warning_ai_2 = "<strong>Stratégies fondées sur les données :</strong> Les stratégies reposent sur des schémas de marché vérifiés et une analyse en temps réel, et non sur des suppositions.";
$risk_warning_ai_3 = "<strong>Paramètres flexibles & contrôle total :</strong> Ajustez vos paramètres de risque à tout moment. Suivez l'ensemble de vos soldes et transactions en toute transparence sur votre tableau de bord, sans frais cachés ni restriction sur les retraits.";

$risk_warning_disclaimer = "<strong>Avertissement :</strong> Le trading comporte toujours des risques. Les systèmes automatisés (y compris l'IA) ne garantissent aucun profit, peuvent connaître des défaillances dues à des erreurs logicielles ou à des événements de marché imprévus, et nécessitent une surveillance de la part de l'utilisateur. Les performances passées ne préjugent pas des résultats futurs. Cette plateforme a une vocation purement informative et marketing et ne constitue pas un conseil financier.";

$risk_warning_s1_heading = "1. Risques généraux et risques liés au marché des cryptomonnaies";
$risk_warning_s1_1 = "Les cryptomonnaies sont des actifs spéculatifs hautement volatils, négociés 24h/24 et 7j/7, avec une supervision réglementaire minimale dans la plupart des juridictions.";
$risk_warning_s1_2 = "Leur valeur peut fluctuer de manière spectaculaire sur de courtes périodes, pouvant entraîner la perte totale du capital investi.";
$risk_warning_s1_3 = "Les valeurs de marché peuvent être fortement affectées par des évolutions réglementaires, des avancées techniques, des failles de sécurité ou des événements macroéconomiques plus larges.";
$risk_warning_s1_4 = "Certains actifs peuvent perdre toute leur valeur. N'investissez que des fonds que vous pouvez vous permettre de perdre.";

$risk_warning_s2_heading = "2. Risques d'exécution, de liquidité et d'effet de levier";
$risk_warning_s2_1 = "<strong>Volatilité du marché & liquidité :</strong> Des mouvements de prix extrêmes (10 à 20 % ou plus par jour) ou une liquidité faible (notamment sur les cryptomonnaies de petite capitalisation) peuvent entraîner des retards, des interruptions de la plateforme et un glissement d'exécution important. Les ordres stop-loss ne peuvent garantir une limitation des pertes dans des conditions extrêmes.";
$risk_warning_s2_2 = "<strong>Risques liés à l'effet de levier & à la marge :</strong> Les produits à effet de levier amplifient à la fois les gains et les pertes, ce qui signifie que vous pouvez perdre plus que votre dépôt initial. Environ 70 à 80 % des comptes d'investisseurs particuliers perdent de l'argent lorsqu'ils négocient des produits à effet de levier.";

$risk_warning_s3_heading = "3. Risques techniques, de cybersécurité et liés aux tiers";
$risk_warning_s3_1 = "<strong>Facteurs techniques :</strong> Le trading en ligne comporte intrinsèquement des risques de déconnexion internet, d'erreurs matérielles ou logicielles, et d'indisponibilité du service.";
$risk_warning_s3_2 = "<strong>Cybersécurité :</strong> Les comptes en cryptomonnaies sont des cibles fréquentes de phishing, de logiciels malveillants et de piratage. Les transactions sont irréversibles ; la compromission de vos identifiants peut entraîner une perte définitive.";
$risk_warning_s3_3 = "<strong>Plateformes tierces :</strong> Ce site peut mettre les utilisateurs en relation avec des plateformes tierces. Nous ne contrôlons, n'approuvons ni ne garantissons leur sécurité, leur fonctionnement ou leur solvabilité. Effectuez toujours vos propres vérifications avant de déposer des fonds sur des plateformes externes.";

$risk_warning_s4_heading = "4. Dispositions réglementaires, fiscales et finales";
$risk_warning_s4_1 = "<strong>Conformité légale & fiscalité :</strong> Les cadres réglementaires varient considérablement et évoluent rapidement. Les utilisateurs sont seuls responsables de la conformité de leur activité de trading avec la législation locale et du respect de leurs propres obligations fiscales.";
$risk_warning_s4_2 = "<strong>Aucune garantie de profit :</strong> Il n'existe pas de trading de cryptomonnaies \"sûr\" ou sans risque. Tout chiffre de rendement ou exemple de performance est purement hypothétique.";
$risk_warning_s4_3 = "<strong>Adéquation :</strong> Si vous ne comprenez pas pleinement les risques, si vous dépendez de fonds essentiels, ou si vous tradez avec de l'argent emprunté, le trading de cryptomonnaies ne vous convient pas. Consultez un conseiller financier agréé indépendant en cas de doute.";

$risk_warning_contact = "<strong>Contact :</strong> Pour toute question concernant cette déclaration ou pour soumettre une demande, veuillez contacter notre équipe officielle du support client via le formulaire de contact disponible sur notre site.";
$footer_risk_warning = "Avertissement sur les risques";
