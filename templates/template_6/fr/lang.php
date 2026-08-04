<?php
require __DIR__ . '/../lang.php';
$site_lang = 'fr-FR';
$form_language = 'fr'; // matches this page's own language, not the offer's global default

// ============================================================
// FRENCH (FR) TRANSLATION OVERRIDES
// Identity/config vars ($site_name, $site_url, $site_domain, $app_price,
// $app_currency, $rating_value, $rating_count, $review_count, $country_name,
// $support_email, $institutional_email) are intentionally NOT overridden —
// they stay exactly as inherited from the root lang.php.
// ============================================================


// META TITLE / DESCRIPTION (per page)
$home_meta_title = "$site_name — Site officiel | Plateforme de trading";
$home_meta_description = "Accédez aux marchés mondiaux avec $site_name ⭐ Analyses IA institutionnelles ⚡, exécution à faible latence ⚡ et interfaces épurées pensées pour une croissance financière moderne.";


$quiz_consultant_name = 'Lisa';
$quiz_consultant_role = 'Assistante d\'intégration';

$quiz_text_welcome   = "Bonjour ! Je suis $quiz_consultant_name, votre assistante personnelle d'intégration chez $site_name. Excellente nouvelle : votre accès est officiellement pré-approuvé. Laissez-nous configurer votre profil professionnel dès maintenant !";
$quiz_text_q1 = "Afin de garantir une conformité réglementaire et légale complète, veuillez confirmer votre pays de résidence actuel : $country_name";
$quiz_text_a1_yes    = "Oui, c'est ma résidence actuelle";
$quiz_text_a1_no     = "Non";

$quiz_text_q2 = "Parfait. Veuillez sélectionner la tranche d'âge appropriée afin de trouver les instruments financiers les plus adaptés :";

$quiz_text_q3        = "Disposez-vous d'un compte bancaire actif ou d'une carte de crédit pour recevoir des versements de dividendes quotidiens ?";
$quiz_text_a3_yes    = "Oui, un compte actif est disponible";
$quiz_text_a3_no     = "Pas encore disponible";

$quiz_text_q4        = "Veuillez préciser votre principale source de revenus. (Ce paramètre nous aide à ajuster les réglages de gestion du risque du système.)";
$quiz_text_a4_1      = "Emploi salarié / Indépendant";
$quiz_text_a4_2      = "Revenus passifs / Épargne personnelle";
$quiz_text_a4_3      = "Autres sources";

$quiz_text_q5 = "Excellent ! La dernière étape consiste en une brève vérification téléphonique par notre responsable afin de confirmer votre inscription. Les appels ont lieu de 11h00 à 20h00. Serez-vous disponible pour prendre l'appel ?";
$quiz_text_a5_yes    = "Oui, ce créneau me convient pour l'appel";
$quiz_text_a5_no     = "Veuillez m'appeler immédiatement";

$quiz_text_loader    = "Analyse des options sélectionnées et initialisation des paramètres de sécurité de votre compte…";
$quiz_text_final_ttl = "Compte activé avec succès ! 🎉 Votre espace de travail numérique sécurisé est entièrement configuré. Merci de finaliser les étapes de vérification ci-dessous afin de garantir vos versements quotidiens :";

$quiz_placeholder_fname = "Prénom";
$quiz_placeholder_lname = "Nom";
$quiz_placeholder_email = "Adresse e-mail";
$quiz_placeholder_phone = "Numéro de téléphone";
$quiz_btn_submit = "Activer le trading";
$quiz_text_typing       = "est en train d'écrire…";
$quiz_text_processing   = "Traitement de la demande…";


$header_nav_aria_label = "Navigation principale";

$nav_platform = "Plateforme";
$nav_features = "Fonctionnalités";
$nav_markets = "Marchés";
$nav_process = "Processus";
$nav_security = "Sécurité";
$nav_reviews = "Avis";
$nav_faq = "FAQ";
$nav_about = "À propos";
$nav_contact = "Contact";

$theme_toggle_aria_label = "Passer au thème sombre";
$theme_toggle_text = "Sombre";
$theme_toggle_text_light = "Clair";

$theme_toggle_dark_aria_label = "Passer au thème sombre";
$theme_toggle_light_aria_label = "Passer au thème clair";

$header_cta_button = "Commencer à trader";
$burger_menu_aria_label = "Menu";


// HERO

$hero_heading_before = "$site_name";
$hero_heading_accent = "Plateforme";

$hero_description = "Nouveau dans le trading ? $site_name propose des outils structurés, assistés par IA, conçus pour rendre votre parcours transparent. Découvrez les cryptos, le forex et les actions sans chaos technique.";

$hero_primary_button = "Commencer à trader";
$hero_secondary_button = "Découvrir les fonctionnalités";

$hero_badge_ssl = "Protocole protégé par SSL";
$hero_badge_guided = "Parcours guidé pour débutants";


// SIGNUP FORM

$signup_heading = "Créez votre compte";
$signup_subtitle = "Moins de 3 minutes. Aucuns frais de création.";

$form_first_name_label = "Prénom";
$form_first_name_placeholder = "Jean";

$form_last_name_label = "Nom";
$form_last_name_placeholder = "Dupont";

$form_email_label = "Adresse e-mail";
$form_email_placeholder = "jean@exemple.fr";

$form_phone_label = "Numéro de téléphone";
$form_phone_placeholder = "6 12 34 56 78";

$form_submit_button = "Créer un compte gratuit";

$form_legal_before = "En envoyant vos informations, vous acceptez nos ";
$form_terms_text = "Conditions générales";


// STATS BAR

$stats_value_assets = "80+";
$stats_label_assets = "Actifs négociables";

$stats_value_setup = "Rapide";
$stats_label_setup = "Création de compte";

$stats_value_support = "24/7";
$stats_label_support = "Assistance";

$stats_value_security = "Sécurisé";
$stats_label_security = "Traitement des données";

// PLATFORM SECTION

$platform_section_label = "Espace de travail intelligent";

$platform_title_before = "Graphiques professionnels $site_name.";
$platform_title_accent = "Conçus pour des décisions simples.";

$platform_subtitle = "Suivez les cours en temps réel et exécutez vos actions depuis une interface épurée, conçue pour réduire la charge cognitive et le trading émotionnel.";

$platform_check_1 = "Graphiques en temps réel enrichis par l'IA";
$platform_check_2 = "Exécution des marchés en un clic";

$platform_cta_button = "Découvrir les fonctionnalités de la plateforme";


// MOCKUP / DASHBOARD

$mockup_overlay_headline = "⚡ Exécution instantanée disponible";
$mockup_overlay_text = "Pour transmettre cet ordre immédiatement et saisir l'objectif de cours actuel, activez le statut sécurisé de votre terminal $site_name.";
$mockup_overlay_button = "Créer un compte sécurisé";

$mockup_dashboard_title = "Tableau de bord BTC/USD";

$mockup_today = "Aujourd'hui";
$mockup_sell_button = "Vendre";
$mockup_buy_button = "Acheter";
$mockup_order_pending_text = "Ordre en cours d'attribution";


// FEATURES SECTION

$features_section_label = "Capacités de la plateforme";

$features_title = "Tout ce dont vous avez besoin pour trader en toute confiance avec $site_name";
$features_subtitle = "Sécurité, rapidité et intelligence de marché neuronale réunies dans une mise en page claire";

$feature_1_title = "Sécurité de niveau bancaire";
$feature_1_text = "Chiffrement SSL, traitement sécurisé des données et une architecture de compte entièrement protégée.";

$feature_2_title = "Analyse de marché par IA";
$feature_2_text = "Calculs d'apprentissage automatique en temps réel, axés sur la détection des variations de marché marquées.";

$feature_3_title = "Flux à faible latence";
$feature_3_text = "Infrastructure agile conçue pour un traitement rapide des ordres, même en période de fort volume.";


// MARKETS

$markets_section_label = "Actifs en temps réel";

$markets_title = "Tableau de bord $site_name unifié pour des indicateurs mondiaux";

$markets_subtitle = "Suivez les évolutions des actifs en temps réel, suivez la dynamique du marché et utilisez l'analyse IA automatisée pour repérer rapidement les tendances.";

$markets_ai_box_title = "💡 Efficacité opérationnelle :";

$markets_ai_box_text = "Le trading traditionnel exige de suivre manuellement des centaines d'indicateurs. Les algorithmes de $site_name traitent des milliers de variations de cours chaque milliseconde, produisant des modèles mathématiques clairs qui vous permettent de saisir les mouvements dès leur apparition.";

$markets_cta_button = "Accéder aux marchés";

$markets_table_asset = "Actif";
$markets_table_price = "Cours";
$markets_table_change = "Variation 24h";



// ONBOARDING

$onboarding_section_label = "Processus d'intégration";

$onboarding_title = "$site_name facilite vos débuts, en toute sérénité";

$onboarding_subtitle = "Pas d'expérience préalable en crypto ? Notre guide automatisé vous accompagne à chaque étape.";

$onboarding_step_1_title = "Inscription sécurisée";
$onboarding_step_1_text = "Saisissez vos coordonnées de base via notre système de formulaire hautement chiffré.";

$onboarding_step_2_title = "Configuration guidée par l'IA";
$onboarding_step_2_text = "La plateforme vous propose des options d'interface adaptées à vos préférences personnelles.";

$onboarding_step_3_title = "Financement sécurisé";
$onboarding_step_3_text = "Activez votre marge de manœuvre de trading via des moyens de paiement standards et très fiables.";

$onboarding_step_4_title = "Exploiter les signaux";
$onboarding_step_4_text = "Commencez à interagir avec les marchés mondiaux grâce à des flux de données neuronales en direct.";



// MOBILE APP

$mobile_app_image_alt = "Application mobile de trading $site_name sur un smartphone";

$mobile_app_section_label = "Accès mobile";

$mobile_app_title = "Votre portefeuille, directement dans votre poche";

$mobile_app_subtitle = "Le moteur complet de $site_name, condensé dans une application mobile native et rapide. Suivez vos actifs, exécutez des trades et suivez les signaux de l'IA, où que vous soyez.";

$mobile_app_check_1 = "Alertes push pour les mouvements de prix critiques";
$mobile_app_check_2 = "Connexion biométrique avec stockage local chiffré";
$mobile_app_check_3 = "Suite graphique complète, optimisée pour le tactile";

$mobile_app_cta_button = "Télécharger l'application";


// SECURITY / COMPARISON

$security_section_label = "Cadre équilibré";

$security_title = "Paramètres de fonctionnement transparents";

$security_subtitle = "Nous croyons en une honnêteté absolue. Voici ce qui distingue notre système, ainsi que nos limites opérationnelles.";

$security_our_title = "Principaux avantages";

$security_our_item_1 = "Tableau de bord minimaliste, conçu pour une vitesse d'exécution institutionnelle.";
$security_our_item_2 = "Traitement analytique neuronal des données, actif 24h/24 et 7j/7 sur tous les actifs.";
$security_our_item_3 = "Aucune marge de transaction cachée ni frais de gestion inattendus.";
$security_our_item_4 = "Architecture de compte directement sécurisée par cryptographie SSL, protégeant votre espace personnel.";
$security_our_item_5 = "Intégration guidée, activée en quelques minutes et non en plusieurs jours.";

$security_other_badge = "Autres plateformes";

$security_other_title = "Limites courantes du secteur";

$security_other_item_1 = "Tableaux de bord encombrés et saturés de publicités, qui ralentissent la prise de décision.";
$security_other_item_2 = "Rapports statiques de fin de journée au lieu d'une analyse continue en direct.";
$security_other_item_3 = "Spreads cachés, frais de retrait et structures tarifaires peu claires.";
$security_other_item_4 = "Infrastructure partagée et obsolète, avec une protection des données incohérente.";
$security_other_item_5 = "Vérification de compte lente et lourde en formalités, pouvant prendre plusieurs jours.";

$security_disclaimer = "Cette comparaison reflète des tendances généralement observées dans le secteur du trading de détail et est fournie à titre illustratif ; les offres de chaque concurrent peuvent varier.";


// CAPABILITIES TABLE

$capabilities_title = "Les principales capacités de la plateforme en un coup d'œil";
$capabilities_subtitle = "Découvrez les paramètres fonctionnels intégrés à votre accès de compte.";

$capability_table_col_1 = "Paramètre de capacité";
$capability_table_col_2 = "Détails fonctionnels";
$capability_table_col_3 = "Inclus";

$capability_check_aria = "Inclus";

$capability_1_title = "Cadre de trading IA";
$capability_1_text = "Traitement algorithmique fournissant dynamiquement des calculs macro-structurels.";

$capability_2_title = "Flux agrégés";
$capability_2_text = "Graphiques dynamiques consolidés en temps réel pour les indices et jetons mondiaux modernes.";

$capability_3_title = "Stabilité multi-appareils";
$capability_3_text = "Rendu réactif pleinement opérationnel sur mobile, ordinateur et tablette, sans accroc.";

$capability_4_title = "Couverture multi-actifs";
$capability_4_text = "Accès unifié aux cryptomonnaies, au forex et aux indices actions depuis un seul compte.";

$capability_5_title = "Alertes de risque automatisées";
$capability_5_text = "Des notifications configurables signalent une volatilité inhabituelle avant qu'elle n'affecte vos positions.";

$capability_6_title = "Coffre-fort de données chiffré";
$capability_6_text = "Vos données personnelles et de compte sont isolées derrière des couches de contrôle d'accès cryptographiques.";

$capability_7_title = "Assistance humaine 24/7";
$capability_7_text = "Des opérateurs du support technique en direct sont disponibles pour répondre immédiatement à vos questions.";


// PAYMENTS

$payments_section_label = "Dépôts";

$payments_title = "Alimentez votre compte avec des méthodes déjà éprouvées";

$payments_subtitle = "Cartes, portefeuilles électroniques et virements bancaires — tous protégés par un chiffrement SSL 256 bits.";

$payments_aria_label = "Méthodes de dépôt et de financement acceptées";

$payment_method_bank_transfer = "Virement bancaire";
$payment_method_ssl = "Sécurisé par SSL";

// PARTNERS

$partners_section_label = "Infrastructure fiable";
$partners_title = "Construit avec des partenaires de référence dans le secteur";
$partners_aria_label = "Partenaires d'infrastructure et de paiement de $site_name";


// REVIEWS

$reviews_section_label = "Avis des utilisateurs";
$reviews_title = "Ce que les traders disent de $site_name";
$reviews_subtitle = "Des retours sincères de notre communauté mondiale, tous marchés confondus.";

$review_1_text = "En tant que débutant, la crypto me faisait peur. $site_name a rendu le tableau de bord si intuitif que je me suis senti confiant en quelques minutes. Les analyses de l'IA sont claires et directes.";
$review_1_role = "Investisseur particulier vérifié";

$review_2_text = "Rien que l'interface épurée me fait gagner des heures. Le fait que l'IA filtre le bruit du marché pour ne garder que les tendances essentielles change ma façon d'aborder mes positions au quotidien.";
$review_2_role = "Analyste crypto-actifs";

$review_3_text = "L'exécution à faible latence, combinée à des systèmes d'alerte intelligents, me permet d'ajuster mes objectifs à la volée sans avoir à faire tourner plusieurs programmes.";
$review_3_role = "Gestionnaire de portefeuille privé";

$review_4_text = "Le support a répondu en moins de deux minutes pendant que je configurais mes paramètres de vérification. Un service de niveau institutionnel exceptionnel.";
$review_4_role = "Trader algorithmique";

$review_1_avatar_alt = "Michael Turner, utilisateur $site_name";
$review_2_avatar_alt = "Anna Mitchell, utilisatrice $site_name";
$review_3_avatar_alt = "David Kovacs, utilisateur $site_name";
$review_4_avatar_alt = "Elena Laurent, utilisatrice $site_name";
$hero_growth_visual_alt = "Graphique de croissance du trading par IA $site_name";
$mobile_trading_visual_alt = "Interface de l'application mobile de trading $site_name";
$cta_security_visual_alt = "Mécanismes de sécurité par IA protégeant les comptes $site_name";

// SEO CONTENT

$seo_content_title = "$site_name : donner aux traders les moyens d'agir grâce à une architecture IA institutionnelle";

$seo_content_intro = "Interagir avec les marchés modernes exige une clarté absolue. Lorsque les interfaces de données sont encombrées de bannières promotionnelles excessives ou de couches d'interface trop lourdes, la performance des utilisateurs en pâtit. $site_name résout cette complexité systémique en déployant un environnement de base élégant et réactif, optimisé pour une exécution stratégique à long terme. Chaque module de la plateforme, de l'inscription à l'exécution en direct, repose sur le même principe : supprimer le bruit pour laisser parler les données sous-jacentes, sans sacrifier la profondeur qu'attendent les utilisateurs expérimentés.";

$seo_block_1_title_before = "Des";
$seo_block_1_title_accent = "actifs crypto avancés";
$seo_block_1_text_1 = "La liquidité des blockchains évolue rapidement, ce qui rend une infrastructure à faible latence essentielle. $site_name relie des nœuds personnalisés directement aux principales places de marché d'actifs numériques, offrant aux utilisateurs des retours de cours en temps réel. Nos indicateurs visuels épurés transforment des structures inter-chaînes chaotiques en flux de données organisés et lisibles, permettant aux acteurs du marché d'évaluer aisément les évolutions des principales paires.";
$seo_block_1_text_2 = "Au-delà des flux de cours bruts, la plateforme met en contexte les variations de volume et la profondeur de liquidité, afin que les pics soudains soient plus faciles à interpréter plutôt que perçus comme un simple bruit réactionnaire. Cette cohérence compte particulièrement lors des séances volatiles, lorsque des outils fragmentés ailleurs ont tendance à ralentir la prise de décision au moment précis où la clarté est la plus nécessaire.";

$seo_block_2_title_before = "Des";
$seo_block_2_title_accent = "analyses de marché neuronales approfondies";
$seo_block_2_text_1 = "Des algorithmes automatisés analysent les données de marché entrantes pour calculer les variations structurelles des indices internationaux du forex et des matières premières. $site_name synthétise des calculs complexes en tendances de données claires. Ces analyses automatisées agissent comme des assistants intelligents, permettant aux utilisateurs d'élaborer des stratégies de recherche précises sans surcharge cognitive ni fatigue émotionnelle.";
$seo_block_2_text_2 = "Comme les modèles fonctionnent en continu plutôt que selon un calendrier fixe, les changements de dynamique apparaissent en temps réel plutôt que dans un résumé différé. Le résultat est une couche de recherche qui soutient le jugement indépendant plutôt que de le remplacer, laissant la décision finale entre vos mains.";

$seo_block_3_title_before = "Un";
$seo_block_3_title_accent = "processus de création de compte sans friction";
$seo_block_3_text_1 = "La conformité n'a pas à être compliquée. Notre parcours d'inscription structuré protège les données personnelles des utilisateurs grâce à des processus de vérification sécurisés. Les instructions d'intégration, étape par étape, s'adaptent dynamiquement aux affichages mobile et bureau, pour une configuration fluide conçue pour prendre moins de trois minutes, de l'inscription jusqu'à l'accès au terminal.";
$seo_block_3_text_2 = "Chaque champ du parcours explique pourquoi il est demandé, afin que les nouveaux utilisateurs ne se retrouvent jamais face à une étape de vérification dont ils ignorent le but. Une fois la demande envoyée, des vérifications d'identité chiffrées s'exécutent en arrière-plan pendant que le reste du tableau de bord reste entièrement accessible.";

$seo_block_4_title_before = "Des";
$seo_block_4_title_accent = "contrôles des risques de niveau institutionnel";
$seo_block_4_text_1 = "Le dimensionnement des positions, les limites d'exposition et les alertes de volatilité automatisées s'inspirent directement des outils historiquement réservés aux desks professionnels. $site_name intègre ces contrôles dans une interface simple, à activer d'un geste, afin que les nouveaux venus bénéficient de la même discipline sur laquelle s'appuient quotidiennement les traders expérimentés.";
$seo_block_4_text_2 = "Les alertes sont configurables par actif, de sorte que votre attention n'est mobilisée que sur les marchés qui le justifient réellement. Cette approche ciblée aide à éviter la lassitude face aux alertes, qui pousse souvent les utilisateurs à ignorer complètement les notifications sur des plateformes moins sélectives.";


// FAQ

$faq_section_label = "Centre d'assistance";
$faq_title = "Questions fréquentes";
$faq_subtitle = "Trouvez immédiatement des réponses concernant l'inscription et les paramètres d'accès à la plateforme.";

$faq_1_question = "Comment puis-je débuter avec $site_name ?";
$faq_1_answer = "Il vous suffit de remplir le formulaire d'inscription ci-dessus, de suivre notre parcours d'intégration sécurisé étape par étape, puis d'activer votre compte via notre système de paiement structuré.";

$faq_2_question = "Ai-je besoin d'une expérience avancée en crypto ?";
$faq_2_answer = "Non. $site_name propose un mode tableau de bord dédié aux débutants, des explications analytiques automatisées et des interfaces simplifiées pour aider les nouveaux traders à évoluer en toute sécurité.";

$faq_3_question = "Quel est le montant minimum requis pour trader ?";
$faq_3_answer = "Le paramètre d'activation standard est de $app_price $app_currency. Il s'agit d'un capital de trading opérationnel qui reste entièrement sous votre contrôle.";

$faq_4_question = "Y a-t-il des frais de plateforme cachés ?";
$faq_4_answer = "Non. $site_name fonctionne dans une transparence tarifaire absolue. Nous n'appliquons aucune marge d'accès inattendue ni calcul de retrait caché au sein de votre espace de travail.";

$faq_5_question = "Comment fonctionne la composante d'intelligence artificielle ?";
$faq_5_answer = "Nos systèmes neuronaux évaluent des indicateurs statistiques de volatilité approfondis sur plusieurs niveaux de marché, transformant les données brutes en lignes de tendance simplifiées, plus faciles à évaluer.";

$faq_6_question = "Mes données personnelles sont-elles entièrement protégées ?";
$faq_6_answer = "Oui. Chaque connexion de compte est protégée par un chiffrement SSL standard sécurisé ainsi que par des protocoles cryptographiques très robustes, afin d'isoler totalement vos données privées.";


// FINAL CTA

$final_cta_title = "Prêt à découvrir la clarté de $site_name ?";
$final_cta_subtitle = "Rejoignez un système moderne optimisé pour des opérations rapides, la protection des données et un accès transparent.";


// FOOTER

$footer_brand_description = "Un environnement d'analyse moderne offrant un suivi clair de vos données sur les marchés mondiaux.";

$footer_platform_title = "Plateforme";
$footer_platform_interface = "Interface";
$footer_platform_markets = "Aperçu des marchés";

$footer_pages_title = "Pages";

$footer_page_about = "À propos";
$footer_page_contact = "Contact";
$footer_page_signin = "Connexion";

$footer_legal_title = "Mentions légales";

$footer_terms = "Conditions d'utilisation";
$footer_privacy = "Politique de confidentialité";

$footer_disclaimer_title = "⚠️ Avertissement sur les risques :";

$footer_disclaimer_text = "Le trading d'actifs numériques et d'instruments mondiaux comporte un risque important de volatilité du marché. Conservez la pleine maîtrise des paramètres de votre stratégie de déploiement. Les indicateurs automatisés de $site_name servent strictement de support analytique.";

$footer_copyright = "Tous droits réservés.";



// ============================================================
// ADDITIONAL PAGES — About, Contact, FAQ, Sign, Conditions, Privacy
// ============================================================

// --- About Us ---
$about_meta_title = "À propos | $site_name";
$about_meta_description = "Découvrez $site_name — notre mission, notre technologie de trading assistée par IA, et comment nous aidons les traders à accéder aux marchés mondiaux de façon responsable.";
$about_breadcrumb_name = "À propos";
$about_h1 = "À propos de $site_name";
$about_p1 = "$site_name a été conçu pour rendre accessibles à tous des outils de trading structurés et assistés par IA — des traders débutants aux professionnels expérimentés.";
$about_p2 = "Nous pensons que l'accès aux marchés mondiaux doit être transparent, bien expliqué et exempt de toute complexité technique inutile.";
$about_h2_mission = "Notre mission";
$about_p_mission_1 = "Notre mission est d'offrir aux traders des outils clairs et structurés pour naviguer sur les marchés crypto, forex et actions — sans battage médiatique et sans dissimuler les risques encourus.";
$about_p_mission_2 = "Chaque fonctionnalité de $site_name est pensée autour de la clarté : ce que fait l'outil, pourquoi il le fait, et ce à quoi vous devez vous attendre.";
$about_h2_ai = "Notre approche assistée par IA";
$about_p_ai_1 = "$site_name combine des données de marché en temps réel avec une analyse assistée par IA pour vous aider à comprendre plus rapidement les conditions du marché.";
$about_p_ai_2 = "Nos systèmes sont conçus comme des outils d'aide à la décision — et non comme des garanties de profit. Le trading comporte toujours un risque.";
$about_li_1 = "Agrégation de données de marché en temps réel";
$about_li_2 = "Analyse de marché assistée par IA";
$about_li_3 = "Divulgation transparente des risques";
$about_li_4 = "Intégration guidée pour les nouveaux traders";
$about_li_5 = "Accès multi-actifs : crypto, forex, actions";
$about_li_6 = "Infrastructure de sécurité de niveau bancaire";
$about_li_7 = "Support client 24/7";
$about_li_8 = "Mises à jour régulières de la plateforme et de la sécurité";
$about_h2_security = "La sécurité avant tout";
$about_p_security_1 = "Nous utilisons un chiffrement conforme aux standards du secteur et des partenaires d'infrastructure sécurisés pour protéger vos données et votre compte.";
$about_p_security_2 = "La sécurité n'est pas une réflexion secondaire — elle est intégrée à chaque partie de la plateforme.";
$about_h2_global = "Conçu pour les marchés mondiaux";
$about_p_global_1 = "$site_name est conçu pour accompagner les traders dans de nombreuses régions, avec une prise en charge de la langue et de la devise locales.";
$about_p_global_2 = "Nos partenaires d'infrastructure nous aident à maintenir un accès fiable, quel que soit l'endroit d'où vous tradez.";
$about_h2_why = "Pourquoi choisir $site_name";
$about_why_li_1 = "Une intégration claire et structurée";
$about_why_li_2 = "Assisté par IA, non garanti par IA — des attentes honnêtes";
$about_why_li_3 = "Des informations transparentes sur les frais et les tarifs";
$about_why_li_4 = "Un support client réactif";
$about_why_li_5 = "Des partenaires de paiement réglementés";
$about_why_li_6 = "Des améliorations continues de la plateforme";
$about_why_li_7 = "Une attention portée à l'éducation des traders";
$about_h2_forward = "Regard vers l'avenir";
$about_p_forward_1 = "Nous améliorons continuellement $site_name en nous appuyant sur les retours des traders et l'évolution des conditions de marché.";
$about_p_forward_2 = "Merci d'envisager $site_name dans le cadre de votre parcours de trading.";

// --- Contact ---
$contact_meta_title = "Contact | $site_name";
$contact_meta_description = "Contactez l'équipe $site_name — support, questions relatives à votre compte et demandes générales.";
$contact_breadcrumb_name = "Contact";
$contact_h1 = "Contact";
$contact_intro_1 = "Une question sur votre compte, une fonctionnalité, ou sur le fonctionnement de $site_name ? Nous sommes là pour vous aider.";
$contact_intro_2 = "Remplissez le formulaire ci-dessous ou contactez-nous directement grâce aux coordonnées indiquées plus bas sur cette page.";
$contact_h2_help = "Ce sur quoi nous pouvons vous aider";
$contact_li_1 = "Création et vérification de compte";
$contact_li_2 = "Fonctionnalités de la plateforme et leur fonctionnement";
$contact_li_3 = "Questions relatives aux dépôts et retraits";
$contact_li_4 = "Problèmes techniques";
$contact_li_5 = "Commentaires généraux et suggestions";
$contact_li_6 = "Demandes de partenariat et de presse";
$contact_h2_send = "Envoyez-nous un message";
$contact_p_send = "Renseignez vos coordonnées ci-dessous et notre équipe vous répondra dans les meilleurs délais.";
$contact_form_fname = "Prénom";
$contact_form_lname = "Nom";
$contact_form_email = "Adresse e-mail";
$contact_form_submit = "Envoyer le message";
$contact_h2_info = "Autres moyens de nous contacter";
$contact_support_label = "Support :";
$contact_institutional_label = "Demandes institutionnelles :";
$contact_disclaimer = "Nous nous efforçons de répondre à toutes les demandes sous 24 à 48 heures.";

// --- FAQ page ---
$faq_page_meta_title = "FAQ | $site_name";
$faq_page_meta_description = "Questions fréquentes sur $site_name — comptes, dépôts, sécurité et fonctionnement de nos outils de trading assistés par IA.";
$faq_page_breadcrumb_name = "FAQ";
$faq_page_h1 = "Questions fréquentes";
$faq_page_subtitle = "Les réponses aux questions que nous posent le plus souvent les traders. Vous ne trouvez pas ce que vous cherchez ? Contactez notre équipe de support.";

// --- Sign in / Register page ---
$sign_meta_title = "Créer votre compte | $site_name";
$sign_meta_description = "Créez votre compte $site_name et bénéficiez d'un accès structuré et assisté par IA aux marchés mondiaux.";
$sign_breadcrumb_name = "Inscription";
$sign_h1 = "Créez votre compte";
$sign_subtitle = "Moins de 3 minutes. Aucuns frais de création.";

// --- Terms & Conditions ---
$conditions_meta_title = "Conditions générales | $site_name";
$conditions_meta_description = "Consultez les conditions générales régissant votre utilisation de $site_name.";
$conditions_breadcrumb_name = "Conditions générales";
$conditions_h1 = "Conditions générales";
$conditions_last_update = "Dernière mise à jour : " . date('F Y');
$conditions_intro = "Les présentes conditions générales (les « Conditions ») régissent votre accès à $site_name (la « Plateforme ») et votre utilisation de celle-ci. En créant un compte ou en utilisant la Plateforme, vous acceptez les présentes Conditions.";
$conditions_h2_eligibility = "Éligibilité";
$conditions_p_eligibility = "Vous devez être âgé d'au moins 18 ans et légalement capable de conclure des contrats contraignants dans votre juridiction pour utiliser la Plateforme.";
$conditions_h2_account = "Votre compte";
$conditions_p_account = "Vous êtes responsable de la confidentialité de vos identifiants de compte ainsi que de toute activité effectuée sous votre compte.";
$conditions_h2_risk = "Risque lié au trading";
$conditions_p_risk = "Le trading de cryptomonnaies, de forex et d'autres instruments financiers comporte un risque substantiel, y compris celui de perdre l'intégralité de votre investissement. Les performances passées ne préjugent pas des résultats futurs. Rien sur cette Plateforme ne constitue un conseil financier.";
$conditions_h2_conduct = "Utilisation acceptable";
$conditions_p_conduct = "Vous vous engagez à ne pas faire un usage abusif de la Plateforme, à ne pas tenter d'y accéder sans autorisation et à ne pas l'utiliser à des fins illégales.";
$conditions_h2_liability = "Limitation de responsabilité";
$conditions_p_liability = "Dans toute la mesure permise par la loi, $site_name ne pourra être tenu responsable de tout dommage indirect, accessoire ou consécutif résultant de votre utilisation de la Plateforme.";
$conditions_h2_changes = "Modifications des présentes conditions";
$conditions_p_changes = "Nous pouvons mettre à jour les présentes Conditions de temps à autre. La poursuite de l'utilisation de la Plateforme après l'entrée en vigueur des modifications vaut acceptation des Conditions mises à jour.";
$conditions_h2_contact = "Contact";
$conditions_p_contact = "Pour toute question concernant les présentes Conditions, vous pouvez contacter notre équipe de support via la page Contact.";

// --- Privacy Policy ---
$privacy_meta_title = "Politique de confidentialité | $site_name";
$privacy_meta_description = "Découvrez comment $site_name collecte, utilise et protège vos données personnelles.";
$privacy_breadcrumb_name = "Confidentialité";
$privacy_h1 = "Politique de confidentialité";
$privacy_last_update = "Dernière mise à jour : " . date('F Y');
$privacy_intro = "Cette politique de confidentialité explique comment $site_name (« nous ») collecte, utilise et protège vos données personnelles lorsque vous utilisez notre Plateforme.";
$privacy_h2_collect = "Les données que nous collectons";
$privacy_p_collect = "Nous collectons les données que vous nous fournissez directement (comme votre nom, votre adresse e-mail et votre numéro de téléphone lors de l'inscription), ainsi que des données techniques (comme votre adresse IP et le type de votre navigateur) collectées automatiquement.";
$privacy_h2_use = "Comment nous utilisons vos données";
$privacy_p_use = "Nous utilisons vos données pour fournir et améliorer la Plateforme, communiquer avec vous, vérifier votre identité et respecter nos obligations légales.";
$privacy_h2_sharing = "Partage des données";
$privacy_p_sharing = "Nous ne vendons pas vos données personnelles. Nous pouvons partager des informations avec des prestataires de services de confiance qui nous aident à exploiter la Plateforme, sous réserve d'obligations de confidentialité.";
$privacy_google_choices = 'Vous pouvez gérer la façon dont Google utilise les informations issues de vos visites via les <a href="http://www.google.com/settings/ads" target="_blank" rel="noopener">paramètres des annonces Google</a>, refuser la publicité basée sur les centres d\'intérêt via le <a href="https://tools.google.com/dlpage/gaoptout" target="_blank" rel="noopener">module complémentaire de désactivation de Google Analytics</a>, ou consulter la <a href="https://www.google.com/intl/fr/policies/privacy/" target="_blank" rel="noopener">politique de confidentialité de Google</a> pour plus de détails.';
$privacy_h2_security = "Sécurité des données";
$privacy_p_security = "Nous mettons en œuvre des mesures techniques et organisationnelles conformes aux standards du secteur pour protéger vos données, y compris le chiffrement des données en transit.";
$privacy_h2_rights = "Vos droits";
$privacy_p_rights = "Selon votre juridiction, vous pouvez disposer d'un droit d'accès, de rectification ou de suppression de vos données personnelles. Contactez-nous pour exercer ces droits.";
$privacy_h2_retention = "Conservation des données";
$privacy_p_retention = "Nous conservons vos données personnelles uniquement le temps nécessaire aux finalités décrites dans la présente politique, ou tant que la loi l'exige.";
$privacy_h2_contact = "Nous contacter";
$privacy_p_contact = "Pour toute question relative à la confidentialité, veuillez nous contacter via notre page Contact.";

// ==========================================
// RISK WARNING PAGE
// ==========================================
$page_title_risk_warning = "Avertissement sur les risques | $site_name";
$page_description_risk_warning = "Comprenez les risques du trading automatisé de cryptomonnaies avec $site_name, notamment la volatilité du marché, le risque d'exécution et les aspects réglementaires.";
$risk_warning_breadcrumb_name = "Avertissement sur les risques";
$risk_warning_title = "Avertissement sur les risques";
$risk_warning_intro = "Comprendre les risques est la première étape vers un trading serein.";

$risk_warning_ai_heading = "Comment notre système d'IA aide à gérer le risque :";
$risk_warning_ai_1 = "<strong>Efficacité algorithmique et trading sans émotion :</strong> Des algorithmes avancés analysent les signaux du marché afin d'exécuter les transactions de manière objective, au moment optimal.";
$risk_warning_ai_2 = "<strong>Stratégies fondées sur les données :</strong> Les stratégies reposent sur des schémas de marché vérifiés et une analyse en temps réel, plutôt que sur des suppositions.";
$risk_warning_ai_3 = "<strong>Paramètres flexibles et contrôle total :</strong> Ajustez vos paramètres de risque à tout moment. Suivez l'ensemble de vos soldes et transactions en toute transparence sur votre tableau de bord, sans frais cachés ni restrictions sur les retraits.";

$risk_warning_disclaimer = "<strong>Avertissement :</strong> Le trading comporte toujours un risque. Les systèmes automatisés (y compris l'IA) ne garantissent aucun profit, peuvent échouer en raison d'erreurs logicielles ou d'événements de marché imprévus, et nécessitent une surveillance de la part de l'utilisateur. Les performances passées ne préjugent pas des résultats futurs. Cette plateforme a une vocation purement informative et marketing et ne fournit aucun conseil financier.";

$risk_warning_s1_heading = "1. Risques généraux et risques liés au marché des cryptomonnaies";
$risk_warning_s1_intro = "Les cryptomonnaies sont des actifs spéculatifs très volatils, négociés en continu et soumis, dans la plupart des juridictions, à une surveillance réglementaire minimale.";
$risk_warning_s1_1 = "Les valeurs peuvent fluctuer fortement sur de courtes périodes, pouvant entraîner une perte totale du capital investi.";
$risk_warning_s1_2 = "Les valeurs de marché peuvent être fortement affectées par des évolutions réglementaires, des développements techniques, des failles de sécurité ou des événements macroéconomiques plus larges.";
$risk_warning_s1_3 = "Certains actifs peuvent perdre toute valeur. N'investissez que les sommes que vous pouvez vous permettre de perdre.";

$risk_warning_s2_heading = "2. Risques liés à l'exécution, à la liquidité et à l'effet de levier";
$risk_warning_s2_1 = "<strong>Volatilité du marché et liquidité :</strong> Des mouvements de prix extrêmes (10 à 20 % ou plus en une journée) ou une faible liquidité (en particulier sur les cryptomonnaies moins importantes) peuvent entraîner des retards, des interruptions de la plateforme et un glissement d'exécution important. Les ordres stop-loss ne peuvent pas garantir de limites de perte dans des conditions extrêmes.";
$risk_warning_s2_2 = "<strong>Risques liés à l'effet de levier et à la marge :</strong> Les produits à effet de levier amplifient à la fois les gains et les pertes, ce qui signifie que vous pouvez perdre plus que votre dépôt initial. Environ 70 à 80 % des comptes d'investisseurs particuliers perdent de l'argent lorsqu'ils négocient des produits à effet de levier.";

$risk_warning_s3_heading = "3. Risques techniques, de cybersécurité et liés aux tiers";
$risk_warning_s3_1 = "<strong>Facteurs techniques :</strong> Le trading en ligne comporte intrinsèquement des risques liés aux coupures internet, aux erreurs matérielles ou logicielles, et à l'indisponibilité des services.";
$risk_warning_s3_2 = "<strong>Cybersécurité :</strong> Les comptes de cryptomonnaies sont des cibles fréquentes pour le phishing, les logiciels malveillants et le piratage. Les transactions sont irréversibles ; la compromission de vos identifiants peut entraîner une perte définitive.";
$risk_warning_s3_3 = "<strong>Plateformes tierces :</strong> Ce site peut mettre les utilisateurs en relation avec des plateformes tierces. Nous ne contrôlons, n'approuvons ni ne garantissons leur sécurité, leur fonctionnement ou leur solvabilité. Effectuez toujours vos propres vérifications avant de déposer des fonds sur des plateformes externes.";

$risk_warning_s4_heading = "4. Dispositions réglementaires, fiscales et finales";
$risk_warning_s4_1 = "<strong>Conformité légale et fiscalité :</strong> Les cadres réglementaires varient considérablement et évoluent rapidement. Il incombe aux utilisateurs de s'assurer que leur activité de trading est conforme aux lois locales et de remplir leurs propres obligations fiscales.";
$risk_warning_s4_2 = "<strong>Aucune garantie de profit :</strong> Il n'existe aucun trading de cryptomonnaies « sûr » ou sans risque. Tout chiffre de rendement ou exemple de performance est purement hypothétique.";
$risk_warning_s4_3 = "<strong>Adéquation :</strong> Si vous ne comprenez pas pleinement les risques, si vous dépendez de fonds essentiels, ou si vous tradez avec de l'argent emprunté, le trading de cryptomonnaies ne vous convient pas. Consultez un conseiller financier indépendant et agréé en cas de doute.";

$risk_warning_contact = "<strong>Contact :</strong> Pour toute question concernant cette déclaration ou pour soumettre une demande, veuillez contacter notre équipe de support client officielle via le formulaire de contact de notre site.";
$footer_risk_warning = "Avertissement sur les risques";
