<?php
require __DIR__ . '/../lang.php';
$site_lang = 'fr-FR';
$form_language = 'fr';

// ============================================================
// FR TRANSLATION OVERRIDES
// ============================================================

// Reviews (role/country field only -- author names are identity vars, not overridden)
$review_1_role = "France";
$review_2_role = "Allemagne";
$review_3_role = "Italie";
$review_4_role = "Pays-Bas";

// MAIN TITLE/DESCRIPTION
$home_meta_title = "$site_name — Plateforme de Trading | Site Officiel";
$home_meta_description = "Le site officiel $site_name propose une plateforme de trading de cryptomonnaies sécurisée, avec des outils de trading avancés, des analyses de marché en temps réel et une expérience conviviale pour les traders.";

// ==========================================
// SHARED FORM DISCLAIMER (used on every lead form across the site)
// ==========================================
$form_disclaimer_prefix = "En saisissant vos informations personnelles et en cliquant sur le bouton, vous acceptez la";
$form_privacy_link_label = "Politique de confidentialité";
$form_disclaimer_and = "et les";
$form_terms_link_label = "Conditions d'utilisation";
$form_disclaimer_of_site = "de ce site.";
$form_disclaimer_risk_note = "Veuillez également consulter notre";

// Service-page form disclaimer (product/offer/contacts/faq/sign) -- same content, template_7 naming convention
$form_text = $form_disclaimer_prefix;
$form_text_privacy = $form_privacy_link_label;
$form_text_privacy_and = $form_disclaimer_and;
$form_text_conditions = $form_terms_link_label;
$form_text_conditions_of = $form_disclaimer_of_site;
$form_text_risk_warning_note = $form_disclaimer_risk_note;

// FORM (Compact UI layout)
$form_name_placeholder = "Entrez votre prénom";
$form_surname_placeholder = "Entrez votre nom";
$form_email_placeholder = "Entrez votre e-mail";
$form_submit = "S'inscrire";

// HERO
$hero_h1 = "Plateforme $site_name";
$hero_text = "La plateforme officielle de trading de cryptomonnaies $site_name — conçue pour rendre la cryptomonnaie aussi simple que la banque en ligne au quotidien, que vous soyez un trader débutant ou un investisseur de longue date.";
$hero_form_heading = "Créez votre compte gratuit";
$hero_form_button = "S'inscrire";

// STATS BAR ("Ciel Cryptance in numbers")
$stats_label = "$site_name en chiffres";
$stats_title = "Des chiffres plus parlants que des promesses";
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
$stat_6_value = "\$500M+";
$stat_6_label = "Total des dépôts clients";

// PARTNERS STRIP
$partners_label = "Approuvé par des partenaires de confiance";

// WHAT IS SECTION
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
$whatis_flow_1 = "L'IA analyse les marchés";
$whatis_flow_2 = "Détecte les signaux";
$whatis_flow_3 = "Exécute les transactions";
$whatis_cta_text = "Souhaitez-vous en savoir plus sur notre équipe et notre produit ?";
$whatis_cta_link = "À propos de nous";

// KEY BENEFITS
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

// SECURITY SECTION
$security_label = "Sécurité";
$security_title = "Vos fonds sont en sécurité avec $site_name";
$security_subtitle = "Chiffrement de niveau bancaire, paiements vérifiés et 98 % de stockage à froid — votre argent est protégé à chaque étape.";
$security_1_title = "Prestataires de paiement vérifiés";
$security_1_text = "Les paiements sont traités exclusivement par des prestataires certifiés qui répondent aux normes de sécurité internationales. Les données de votre carte ne sont jamais stockées sur notre plateforme.";
$security_1_badge = "Paiements sécurisés";
$security_2_title = "Chiffrement SSL 256 bits";
$security_2_text = "Toutes les données échangées entre votre appareil et notre plateforme sont chiffrées avec le protocole TLS 256 bits. Aucun tiers ne peut intercepter ou lire vos informations.";
$security_2_badge = "HTTPS / TLS 1.3";
$security_3_title = "98 % de stockage à froid";
$security_3_text = "98 % des actifs sont conservés dans des portefeuilles hors ligne, sans connexion Internet. Ils ne peuvent être consultés à distance par personne, même en cas d'attaque.";
$security_3_badge = "Stockage d'actifs hors ligne";
$security_4_title = "Authentification multifacteur";
$security_4_text = "Vous seul pouvez accéder à votre compte. Chaque connexion est vérifiée par une seconde étape que vous seul contrôlez.";
$security_4_badge = "2FA activée";
$security_5_title = "Surveillance du compte";
$security_5_text = "Chaque connexion, transaction ou modification de paramètres déclenche une notification instantanée, afin que vous sachiez toujours ce qui se passe sur votre compte.";
$security_5_badge = "Alertes en temps réel";
$security_6_title = "Protection des mots de passe";
$security_6_text = "Les mots de passe sont stockés sous une forme illisible et irréversible. Nous n'avons techniquement aucun moyen de consulter votre mot de passe.";
$security_6_badge = "Chiffrement à sens unique";
$security_cta_title = "Recevez un guide gratuit !";
$security_cta_text = "Obtenez notre guide de démarrage gratuit et commencez à trader dès aujourd'hui.";
$security_cta_button = "S'inscrire";
$security_badge_1 = "98 % de stockage à froid";
$security_badge_2 = "Paiements vérifiés";
$security_badge_3 = "Chiffré";

// HOW IT WORKS
$how_label = "Comment ça marche";
$how_title = "Comment ça marche";
$how_1_title = "Inscrivez-vous";
$how_1_text = "Cliquez sur le bouton « Ouvrir un compte » et remplissez le formulaire d'inscription avec vos informations (nom, e-mail et numéro de téléphone). C'est gratuit et cela ne prend que quelques minutes. Nous vous demanderons de vérifier votre e-mail et de créer un mot de passe. Pour votre sécurité, vous activerez l'authentification à deux facteurs (2FA), qui permet de mieux protéger vos fonds.";
$how_2_title = "Déposez des fonds";
$how_2_text = "Ensuite, alimentez votre compte. Le dépôt minimum est de seulement $app_price $app_currency. Vous pouvez utiliser une carte de crédit/débit, un virement bancaire local ou des portefeuilles électroniques populaires. Votre dépôt devrait apparaître rapidement sur votre compte. (Conseil : commencez par un montant avec lequel vous êtes à l'aise.) Nous pourrons vous demander de compléter une vérification d'identité rapide lors de votre premier dépôt — une procédure standard qui ne prend que quelques minutes.";
$how_3_title = "Commencez à trader";
$how_3_text = "Une fois vos fonds sur votre compte, vous êtes prêt à trader. Choisissez l'actif que vous souhaitez (comme BTC, SOL ou USDT) et décidez du montant à investir. $site_name vous donne les outils pour définir votre propre stratégie, y compris des limites de stop-loss et des prix cibles. Nous proposons également une option de trading automatisé qui suit les signaux du marché pour vous, selon le niveau de risque que vous choisissez. Suivez les graphiques en direct sur votre tableau de bord — lorsqu'une transaction est rentable, votre solde se met à jour en conséquence.";
$how_cta_text = "Avez-vous besoin de plus d'informations sur le fonctionnement du service ?";
$how_cta_link = "Comment ça marche";

// TRUST REASONS
$trust_label = "Pourquoi trader avec nous";
$trust_title = "La confiance des traders du monde entier";
$trust_intro = "Rejoignez des milliers d'utilisateurs qui tradent déjà avec $site_name. Un compteur en direct est même affiché sur notre site, indiquant combien de personnes tradent en ce moment, afin que vous puissiez voir notre communauté active en temps réel.";
$trust_subtitle = "Voici pourquoi les traders font confiance à $site_name :";
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

// PRE-TESTIMONIALS CTA
$pretest_title = "Commencez à trader avec $app_price $app_currency !";
$pretest_text = "Prêt à essayer $site_name ? Inscrivez-vous dès maintenant et rejoignez la communauté grandissante d'investisseurs et de traders en cryptomonnaies.";
$pretest_button = "S'inscrire";
$pretest_badge_1 = "Sécurisé";
$pretest_badge_2 = "Réglementé";
$pretest_badge_3 = "La confiance de plus de 4M de traders";

// TESTIMONIALS
$testimonials_label = "Témoignages";
$testimonials_title = "La confiance de plus de 4M de traders";
$review_1_text = "J'ai commencé avec 500 € juste pour voir comment fonctionnait la plateforme. Après environ trois semaines, mon solde était passé à environ 1 120 €. L'interface est facile à utiliser, et les analyses de marché m'ont aidé à prendre de meilleures décisions.";
$review_2_text = "J'ai essayé plusieurs plateformes de trading auparavant, mais celle-ci reste ma préférée jusqu'à présent. Elle est facile à naviguer, les outils sont vraiment utiles, et mon expérience globale a été très positive.";
$review_3_text = "Ce qui m'a le plus impressionné, c'est à quel point tout semble intuitif. L'inscription a été rapide, le tableau de bord est bien organisé, et la plateforme a rendu le trading beaucoup plus pratique pour moi.";
$review_4_text = "Je n'avais aucune expérience de trading auparavant, j'ai donc commencé avec 750 €. En un mois, j'ai atteint un peu plus de 1 765 € en suivant les outils et les ressources pédagogiques. Cela a été un excellent moyen de gagner en confiance.";

// FAQ (homepage accordion + FAQPage schema)
$faq_label = "FAQ";
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

// PRE-ABOUT CTA
$pre_about_title = "Prêt à prendre le contrôle de votre trading ?";
$pre_about_text = "Rejoignez $site_name dès aujourd'hui et découvrez une plateforme conçue pour la clarté, la sécurité et les résultats.";
$pre_about_button = "S'inscrire";

// LEAD MAGNET
$leadmagnet_title = "Nouveau dans le trading ?";
$leadmagnet_text1 = "Après votre inscription, vous recevrez notre guide gratuit,";
$leadmagnet_quote = "« 10 erreurs à éviter lors du trading de cryptomonnaies »";
$leadmagnet_text2 = "rempli de conseils simples de nos analystes les plus expérimentés pour vous aider à éviter les erreurs les plus courantes.";
$leadmagnet_text3 = "Il vous suffit de saisir vos informations lors de votre";
$leadmagnet_link = "inscription";
$leadmagnet_text4 = "et nous vous l'enverrons directement dans votre boîte de réception. De nombreux investisseurs ont commencé avec ce guide et affirment qu'il leur a donné une réelle confiance pour leurs premières transactions.";
$leadmagnet_text5 = "Le marché n'attend pas — lancez-vous dès aujourd'hui !";

// CONTACT SECTION (homepage)
$contact_label = "Contactez-nous";
$contact_title = "Contacter $site_name";
$contact_subtitle = "Une question ou besoin d'assistance ? Nous sommes là pour vous conseiller et vous guider.";
$contact_text = "Chez $site_name, nous pensons que la réussite en trading n'a rien à voir avec la chance — elle repose sur la précision, l'anticipation et une bonne planification.";
$contact_form_text = "Il vous suffit de remplir le formulaire ci-dessous, et un membre de notre équipe vous répondra rapidement.";
$contact_form_button = "Envoyer le message";

// ABOUT
$about_label = "À propos de nous";
$about_title = "À propos de $site_name";
$about_intro = "$site_name ne vous offre pas seulement une plateforme de trading — nous vous aidons à trader avec clarté et confiance.";
$about_text_1 = "$site_name est la plateforme de trading en ligne officielle, conçue pour rendre le trading de cryptomonnaies accessible aussi bien aux débutants qu'aux traders expérimentés.";
$about_text_2 = "Nous combinons une analyse de marché propulsée par l'IA avec un tableau de bord simple et transparent, afin que vous sachiez toujours exactement où vous en êtes. Que vous débutiez ou que vous affiniez votre approche, $site_name vous donne les outils pour trader selon vos propres conditions.";
$about_text_3 = "Chaque partie de la plateforme est conçue autour de la clarté : pas de frais cachés, pas de jargon confus, juste des informations claires qui vous aident à prendre de meilleures décisions, à trader avec plus de confiance et à garder le contrôle de votre risque.";
$about_text_4 = "Notre plateforme vous fait gagner des heures de tâtonnement et vous protège des alternatives opaques et de faible qualité. Nous croyons que de bons outils et des informations honnêtes permettent aux traders d'agir de façon stratégique et de croître durablement.";

// IMAGE ALT TEXT
$alt_hero_phone = "Téléphone mobile affichant le tableau de bord de trading $site_name";
$alt_coin_bitcoin = "Icône de la pièce Bitcoin";
$alt_coin_ethereum = "Icône de la pièce Ethereum";
$alt_coin_bnb = "Icône de la pièce BNB";
$alt_coin_solana = "Icône de la pièce Solana";
$alt_coin_tether = "Icône de la pièce Tether";
$alt_coin_xrp = "Icône de la pièce XRP";

// ==========================================
// CHAT-QUIZ TRANSLATIONS & CONFIGURATION
// ==========================================
$quiz_consultant_role = 'Chargée d\'intégration';

$quiz_text_welcome   = "Bonjour ! Je suis $quiz_consultant_name de $site_name. Bonne nouvelle — vous êtes déjà pré-qualifié(e). Configurons votre compte et lançons-nous dans le trading.";
$quiz_text_q1 = "Pour confirmer les conditions de trading disponibles dans votre région, veuillez confirmer votre pays : $country_name";
$quiz_text_a1_yes    = "Oui, c'est ma localisation actuelle";
$quiz_text_a1_no     = "Non";

$quiz_text_q2 = "Sélectionnez votre tranche d'âge afin que nous puissions personnaliser la configuration de votre compte :";

$quiz_text_q3        = "Disposez-vous d'un compte bancaire ou d'une carte active pour alimenter votre compte de trading ?";
$quiz_text_a3_yes    = "Oui, compte actif disponible";
$quiz_text_a3_no     = "Non disponible pour le moment";

$quiz_text_q4        = "Indiquez-nous votre principale source de revenus afin que nous puissions vous proposer un plan de dépôt adapté à votre budget :";
$quiz_text_a4_1      = "Revenu d'emploi / Indépendant";
$quiz_text_a4_2      = "Épargne / Investissements personnels";
$quiz_text_a4_3      = "Autres sources";

$quiz_text_q5 = "Dernière étape : l'un de nos conseillers vous appellera pour vous accompagner dans la configuration de votre compte entre 11h00 et 20h00. Ce créneau vous convient-il ?";
$quiz_text_a5_yes    = "Oui, ce créneau est optimal";
$quiz_text_a5_no     = "Demander un contact prioritaire immédiat";

$quiz_text_loader    = "Configuration de votre profil de trading en cours...";
$quiz_text_final_ttl = "Vous êtes prêt(e) ! 🎉 Complétez votre inscription ci-dessous pour activer votre compte :";

$quiz_placeholder_fname = "Prénom";
$quiz_placeholder_lname = "Nom";
$quiz_placeholder_email = "Adresse e-mail";
$quiz_placeholder_phone = "Numéro de téléphone";
$quiz_btn_submit = "Créer mon compte";
$quiz_text_typing       = "est en train de préparer une réponse...";
$quiz_text_processing   = "Validation des informations...";

// TITLE/DESCRIPTION (service pages)
$sign_meta_title = "Inscription | $site_name";
$sign_meta_description = "Créez votre compte $site_name gratuit et commencez à trader des cryptomonnaies sur une plateforme sécurisée et réglementée.";
$product_meta_title = "Notre plateforme | $site_name";
$product_meta_description = "Découvrez comment $site_name combine une analyse propulsée par l'IA, des données de marché en temps réel et un tableau de bord transparent pour vous aider à trader en toute confiance.";
$privacy_meta_title = "Politique de confidentialité | Sécurité des données $site_name";
$privacy_meta_description = "Découvrez comment $site_name protège la confidentialité des utilisateurs selon des normes de chiffrement internationales strictes.";
$offer_meta_title = "Commencer | $site_name";
$offer_meta_description = "Inscrivez-vous, alimentez votre compte et commencez à trader des cryptomonnaies avec $site_name en quelques minutes.";
$faq_page_meta_title = "FAQ | Assistance $site_name";
$faq_page_meta_description = "Réponses aux questions courantes sur le fonctionnement de $site_name, les tarifs et la mise en route.";
$contacts_meta_title = "Contact et assistance | $site_name";
$contacts_meta_description = "Contactez l'équipe $site_name pour obtenir de l'aide concernant votre compte ou vos questions de trading.";
$conditions_meta_title = "Conditions d'utilisation | $site_name";
$conditions_meta_description = "Consultez les conditions générales officielles d'utilisation du site $site_name et de la plateforme de trading.";

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
$footer_partner_text = "Votre partenaire de confiance pour le trading de cryptomonnaies";
$footer_disclaimer = "$site_name décline toute responsabilité en cas de perte ou de dommage résultant de la confiance accordée aux informations fournies sur ce site, y compris le matériel éducatif, les cotations, les graphiques et les analyses. Le trading sur les marchés financiers comporte des risques importants ; veuillez consulter un conseiller professionnel avant d'investir. N'investissez jamais plus que ce que vous pouvez vous permettre de perdre. Les risques associés au Forex, aux CFD et aux cryptomonnaies peuvent ne pas convenir à tous les investisseurs. $site_name n'est pas responsable des pertes de trading que vous pourriez subir en utilisant ou en vous fiant aux données ou informations disponibles sur ce site.";
$footer_copyright = "© 2026 $site_name. Tous droits réservés.";

// Register Down
$official_heading = "Inscrivez-vous sur la plateforme officielle {$site_name}™";
$official_description = "Créez votre compte gratuit pour commencer à trader des cryptomonnaies sur une plateforme sécurisée et transparente.";

// SIGN PAGE
$breadcrumb_home = "Accueil";
$breadcrumb_current = "Connexion/Inscription";

// PRODUCT PAGE
$breadcrumb_product = "Produit";
$analytics_heading = "Tradez plus intelligemment avec $site_name";
$analytics_description = "Consultez des données de marché claires en temps réel et des analyses pilotées par l'IA. Prenez des décisions de trading éclairées en toute confiance.";
$analytics_btn_signup = "S'inscrire";
$app_main_heading = "Votre tableau de bord de trading";
$app_feature_1_title = "Données de marché en direct";
$app_feature_1_text = "Prix et graphiques en temps réel à portée de main";
$app_feature_2_title = "Suivi du portefeuille";
$app_feature_2_text = "Indicateurs complets de solde et de performance";
$app_feature_3_title = "Vue mobile";
$app_feature_3_text = "Optimisée pour les navigateurs mobiles";
$app_feature_4_title = "Listes de suivi";
$app_feature_4_text = "Gardez un œil sur les actifs que vous suivez";
$app_img_alt = "Interface mobile pour suivre votre portefeuille de trading";
$products_stats_currencies_v = "65+";
$products_stats_currencies_l = "Devises disponibles";
$products_stats_users_v = "4M+";
$products_stats_users_l = "Utilisateurs inscrits";
$products_stats_volume_v = "98+";
$products_stats_volume_l = "Pays pris en charge";
$products_stats_countries_v = "24/7";
$products_stats_countries_l = "Accès aux transactions";

// Capabilities
$capabilities_main_title = "Ce que vous obtenez";
$capabilities_feature_1_title = "Signaux propulsés par l'IA";
$capabilities_feature_1_text = "Des algorithmes avancés analysent les signaux du marché et font émerger des opportunités 24 h/24.";
$capabilities_feature_2_title = "Inscription rapide";
$capabilities_feature_2_text = "Inscrivez-vous en quelques minutes grâce à un processus d'inscription sécurisé et simple.";
$capabilities_feature_3_title = "Sécurité vérifiée";
$capabilities_feature_3_text = "Le chiffrement SSL 256 bits, la 2FA et 98 % de stockage à froid protègent vos fonds à chaque étape.";
$capabilities_feature_4_title = "Assistance continue";
$capabilities_feature_4_text = "Bénéficiez de l'accompagnement de notre équipe à chaque étape, de l'inscription à votre première transaction.";
$capabilities_cta_heading = "C'est parti !";
$capabilities_cta_text = "Rejoignez des milliers de traders qui ont choisi $site_name pour un trading de cryptomonnaies sécurisé et transparent.";

// PRIVACY PAGE
$privacy_breadcrumb_home = "Accueil";
$privacy_breadcrumb_current = "Politique de confidentialité";
$privacy_page_h1 = "Politique de confidentialité";
$last_update = "Dernière mise à jour";
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

// OFFER PAGE
$offer_breadcrumb_home = "Accueil";
$offer_breadcrumb_current = "Offre";
$offer_cta_h1 = "Commencez à trader dès aujourd'hui";
$offer_cta_text = "Démarrez en quelques minutes : inscrivez-vous, alimentez votre compte et commencez à trader des cryptomonnaies sur une plateforme sécurisée et réglementée.";
$offer_how_it_works_title = "Comment ça marche";
$step_1 = "Créer un compte";
$step_2 = "Déposer des fonds";
$step_3 = "Commencer à trader selon votre stratégie personnalisée";
$offer_official_platform_title = "Ceci est la plateforme de trading officielle {$site_name}™";
$offer_official_platform_text = "Un moyen fiable et transparent de trader des cryptomonnaies avec des analyses en temps réel et un contrôle total.";

$faq_page_title = "FAQ";
$faq_page_breadcrumb_home = "Accueil";
$faq_page_breadcrumb_current = "FAQ";
$faq_page_help_title = "Comment pouvons-nous vous aider ?";

// FAQ page (dedicated faq.php accordion -- distinct wording from the homepage FAQ above)
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

// SITE MAP PAGE
$sitemap_meta_title = "Plan du site | $site_name";
$sitemap_meta_description = "Parcourez un aperçu complet de toutes les pages disponibles sur le site $site_name.";
$sitemap_breadcrumb_home = "Accueil";
$sitemap_breadcrumb_current = "Plan du site";
$sitemap_h1 = "Plan du site";
$sitemap_intro = "Voici un aperçu complet de toutes les pages du site $site_name.";

// CONTACTS / CONDITIONS PAGE
$contacts_h1 = "Contacts";
$contacts_h3 = "Pour toute question technique ou relative à votre compte, veuillez nous contacter par e-mail";
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

// ==========================================
// RISK WARNING PAGE
// ==========================================
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
$footer_risk_warning = "Avertissement sur les risques";
