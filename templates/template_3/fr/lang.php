<?php
require __DIR__ . '/../lang.php';

// ==========================================
// FRENCH (fr-FR) OVERRIDE
// Every human-visible string from the root lang.php is translated below.
// Identity/config variables ($site_name, $site_url, $site_domain, $app_price,
// $app_currency, $rating_value, $rating_count, $review_count, $crypto_img,
// stock/crypto ticker symbols, and real public figures' names) are
// intentionally NOT overridden here — they stay inherited from the root file.
// ==========================================
$site_lang = 'fr-FR';
$form_language = 'fr'; // matches this page's own language, not the offer's global default

$main_h1 = "Profit quotidien de <span>745 €</span> à <span>1 860 €</span> grâce à la plateforme d'investissement intelligente";
$main_p = "Offre limitée : inscrivez-vous maintenant — <span>$country_name</span>";

// Prénoms des témoignages (féminin, féminin, masculin, féminin, masculin, masculin)
$feedback_strong_1 = "Camille Lefèvre";
$feedback_strong_2 = "Manon Girard";
$feedback_strong_3 = "Antoine Moreau";
$feedback_strong_4 = "Léa Bernard";
$feedback_strong_5 = "Julien Rousseau";
$feedback_strong_6 = "Thomas Lambert";

$feedback_description_1 = "Je n'avais jamais utilisé de plateforme d'investissement auparavant, mais $source m'a permis de me lancer incroyablement facilement. Je n'aurais jamais pensé dire cela un jour : le monde de l'investissement peut sembler compliqué. Mais ici, il est si simple de gagner des sommes que je n'aurais jamais imaginées possibles !";
$feedback_description_2 = "C'est exactement ce que j'attendais ! Votre support et votre système à haut rendement m'ont totalement convaincu – et le resteront pour toujours ! J'ai encore du mal à y croire : en seulement 30 jours, j'ai gagné plus de 15 000 €... Merci infiniment !";
$feedback_description_3 = "J'ai gagné plus de 650 euros dès mon premier jour, je peux donc dire avec certitude : j'ai enfin trouvé quelque chose qui fonctionne vraiment ! J'en suis tout simplement reconnaissante.";
$feedback_description_4 = "Je tiens simplement à vous remercier, car $source a vraiment changé ma vie. J'ai pu quitter mon emploi en quelques semaines seulement !";
$feedback_description_5 = "Ça fonctionne vraiment ! J'utilise la plateforme depuis seulement quelques semaines et j'ai déjà gagné plus que ce que j'aurais normalement gagné en plusieurs mois de dur labeur. Incroyable !";
$feedback_description_6 = "J'ai été licencié il y a deux semaines. Je pensais que c'était la fin. Mais maintenant, je gagne environ 3 000 euros par semaine ! Cela peut sembler peu, mais pour la première fois depuis longtemps, j'ai de nouveau espoir en un avenir stable. Merci infiniment !";

// T,D MAIN
$page_title_main = "$source — Site Officiel | Plateforme de Trading";
$page_description_main = "Découvrez $source, la plateforme de trading basée sur l'intelligence artificielle. Analyse automatique des cryptomonnaies, inscription rapide et opportunités de gain pour les utilisateurs en France.";

// ==========================================
// CHAT-QUIZ TRANSLATIONS & CONFIGURATION
// ==========================================

$quiz_consultant_name = 'Sophia';
$quiz_consultant_role = "Assistante d'intégration";

$quiz_text_welcome   = "Bonjour ! Ici $quiz_consultant_name, votre assistante personnelle d'intégration chez $site_name. Excellente nouvelle : votre accès est officiellement pré-approuvé. Permettez-nous de configurer dès maintenant votre profil professionnel !";
$quiz_text_q1 = "Afin de garantir une conformité réglementaire et légale complète, veuillez confirmer votre pays de résidence actuel : $country_name";
$quiz_text_a1_yes    = "Oui, c'est ma résidence actuelle";
$quiz_text_a1_no     = "Non";

$quiz_text_q2 = "Parfait. Veuillez sélectionner la tranche d'âge appropriée afin de déterminer les instruments financiers les plus adaptés :";

$quiz_text_q3        = "Disposez-vous d'un compte bancaire actif ou d'une carte de crédit pour recevoir des versements de dividendes quotidiens ?";
$quiz_text_a3_yes    = "Oui, un compte actif est disponible";
$quiz_text_a3_no     = "Pas encore disponible";

$quiz_text_q4        = "Veuillez indiquer votre principale source de revenus personnels. (Ce paramètre permet d'ajuster les réglages de gestion des risques du système.)";
$quiz_text_a4_1      = "Emploi salarié / Indépendant";
$quiz_text_a4_2      = "Revenu passif / Épargne personnelle";
$quiz_text_a4_3      = "Autres sources";

$quiz_text_q5 = "Parfait ! La dernière étape consiste en une brève vérification téléphonique par notre conseiller afin de confirmer votre inscription. Les appels ont lieu de 11h00 à 20h00. Serez-vous disponible pour cet appel ?";
$quiz_text_a5_yes    = "Oui, cet horaire me convient pour l'appel";
$quiz_text_a5_no     = "Veuillez lancer l'appel immédiatement";

$quiz_text_loader    = "Analyse des options demandées et initialisation des paramètres de configuration sécurisée du compte...";
$quiz_text_final_ttl = "Compte autorisé avec succès ! 🎉 Votre espace de travail numérique sécurisé est entièrement configuré. Veuillez compléter les dernières étapes de vérification ci-dessous pour garantir vos versements quotidiens :";

$quiz_placeholder_fname = "Prénom";
$quiz_placeholder_lname = "Nom";
$quiz_placeholder_email = "Adresse e-mail";
$quiz_placeholder_phone = "Numéro de téléphone";
$quiz_btn_submit = "Activer le trading";
$quiz_text_typing       = "est en train d'écrire un message...";
$quiz_text_processing   = "Traitement de la demande en cours...";

// T,D ABOUT
$page_title_about = "À propos de nous | $source – Plateforme d'investissement sûre et transparente";
$page_description_about = "Découvrez $source : une plateforme d'investissement automatisée et sécurisée. Technologie avancée, support expert et transparence pour les débutants comme pour les traders expérimentés.";

// T,D CONDITIONS
$page_title_conditions = "$source – Conditions générales d'utilisation de la plateforme";
$page_description_conditions = "Découvrez les conditions générales de $source. Utilisation sécurisée de la plateforme, responsabilités liées à l'investissement, protection des données et réglementation en vigueur.";

// T,D CONTACT
$page_title_contact = "$source – Support fiable et assistance rapide";
$page_description_contact = "Besoin d'aide avec $source ? Notre équipe de support vous aide pour toute question concernant votre compte, vos paiements ou la plateforme. Réponse rapide et assistance professionnelle en France.";

// T,D PRIVATE
$page_title_private = "Politique de Confidentialité | $source";
$page_description_private = "Découvrez comment $source collecte, utilise et protège vos données personnelles. Informations sur le traitement des données, la sécurité, les droits des utilisateurs et la conformité au RGPD.";

// T,D REGISTER
$page_title_register = "$source – Plateforme de trading intelligente basée sur l'IA | Inscription rapide";
$page_description_register = "Démarrez avec <?= $source ?> en quelques minutes seulement. Une plateforme intelligente dotée de la technologie IA pour trader efficacement. Inscription rapide, accès simple et outils avancés pour les investisseurs.";


// форма
$contact_form_fname = "Votre prénom";
$contact_form_lname = "Votre nom";
$contact_form_email = "E-mail";
$contact_form_submit = "S'inscrire maintenant";


// header
$nav_investors = "Investisseurs";
$nav_steps = "Étapes";
$nav_trade = "Trading";
$nav_advantages = "Avantages";
$nav_statistics = "Statistiques";
$nav_feedback = "Avis";
$button_register = "S'inscrire maintenant";


// footer
$button_register = "S'inscrire maintenant";
$footer_about = "À propos";
$footer_contact = "Contact";
$footer_registration = "Inscription";
$footer_terms = "Conditions Générales";
$footer_privacy = "Confidentialité";
$footer_rights = "$source – tous droits réservés";

// main
$leaders_badge = "Investisseurs";
$leaders_title = "Voici quelques-uns des investisseurs qui nous soutiennent :";
$leader1_text = "En tant qu'investisseur, j'ai toujours cru que l'indépendance financière est le fondement de la liberté personnelle. C'est pourquoi cette plateforme basée sur l'intelligence artificielle a été créée, afin de rendre l'investissement plus simple et plus accessible. Ma vision est d'offrir à chacun des outils clairs et efficaces pour prendre des décisions éclairées et bâtir sa stabilité financière en toute confiance.";
$leader1_name = "— Warren Buffett";
$leader1_position = "L'un des investisseurs les plus prospères de l'histoire";
$leader2_text = "Le monde de la finance évolue rapidement, et la technologie joue un rôle clé dans cette transformation. Je crois que l'union de l'expérience en investissement et de l'intelligence artificielle crée de nouvelles opportunités. Cette plateforme a été conçue pour rendre l'investissement plus accessible et plus transparent, en aidant les gens à prendre des décisions éclairées et à bâtir une stabilité financière à long terme.";
$leader2_name = "— Larry Fink";
$leader2_position = "PDG de BlackRock — le plus grand gestionnaire d'actifs au monde";
$leader3_text = "Après de nombreuses années dans le système bancaire mondial, j'ai vu à quel point la technologie peut transformer la façon dont les gens gèrent leur argent. Cette plateforme utilise l'intelligence artificielle pour rendre l'investissement plus clair et plus accessible, en aidant les utilisateurs à prendre des décisions financières éclairées. Lorsque l'innovation et une approche responsable se rejoignent, de véritables opportunités de croissance et de stabilité financière voient le jour.";
$leader3_name = "— Jamie Dimon";
$leader3_position = "PDG de JPMorgan Chase — l'une des plus grandes banques au monde";


$steps_badge = "Étapes";
$steps_title = "Votre nouveau départ commence en trois étapes simples";
$step1_number = "Étape 1";
$step1_title = "Inscription";
$step1_text = "Renseignez vos informations et recevez un appel gratuit d'un conseiller de la plateforme pour activer votre compte";
$step2_number = "Étape 2";
$step2_title = "Investir";
$step2_text = "Approvisionnez votre compte avec au moins 250 à 270 euros";
$step3_number = "Étape 3";
$step3_title = "Commencez à gagner";
$step3_text = "Recevez vos premiers versements dès le jour de votre inscription ! La plateforme protège votre capital et vos données personnelles.";
$steps_button = "S'inscrire maintenant";


$trades_badge = "Opérations & Profit";
$trades_title = "$source utilise l'intelligence artificielle et des algorithmes modernes pour identifier uniquement les opérations rentables";
$trade_btc_name = "BTC";
$trade_btc_value = "+ 9 071,50 €";
$trade_eth_name = "ETH";
$trade_eth_value = "+ 1 156,57 €";
$trade_ltc_name = "LTC";
$trade_ltc_value = "+ 90,04 €";
$trade_eos_name = "EOS";
$trade_eos_value = "+ 14,01 €";
$trade_xrp_name = "XRP";
$trade_xrp_value = "+ 0,60 €";


$advantages_badge = "Avantages";
$advantages_title = "Inscrivez-vous dès aujourd'hui et bénéficiez d'un accès immédiat à ce système de trading révolutionnaire !";
$advantages_card_badge = "Avantages";
$adv1_title = "Facile à utiliser";
$adv1_text = "$source peut être installé sur n'importe quel smartphone ou ordinateur en quelques secondes";
$adv2_title = "Fonctionnement fiable";
$adv2_text = "Des processus entièrement automatisés analysent en temps réel toutes les principales plateformes d'échange et permettent d'obtenir des profits maximaux";
$adv3_title = "Sûr et confidentiel";
$adv3_text = "La technologie blockchain garantit à tous les participants un taux de réussite de 96,9 % avec une sécurité des données maximale";


$statistics_badge = "Statistiques";
$statistics_title = "Des chiffres qui parlent d'eux-mêmes";
$statistics_description_top = "La transparence est notre principe fondateur. Les revenus quotidiens de la plateforme et le volume d'investissement en croissance constante confirment la stabilité et la fiabilité de notre projet. Notre stratégie secrète de trading d'actions repose sur un portefeuille soigneusement sélectionné, élaboré à partir de l'analyse de milliers d'entreprises leaders";
$stat1_value = "1,45 €";
$stat1_denomination = "Millions";
$stat1_title = "Investissements actuels";
$stat2_value = "0,87 €";
$stat2_denomination = "Millions";
$stat2_title = "Revenu total";
$stat3_value = "0,29 €";
$stat3_denomination = "Milliards";
$stat3_title = "Revenus de la plateforme";
$statistics_description_bottom = "Notre équipe d'analystes professionnels garantit des résultats précis avec un risque minimal. $source offre à tous ses partenaires une opportunité de gain stable et hautement rentable";
$feedback = "Avis";
$recommendations = "Recommandations de nos clients les plus fidèles";


$join_title_main = "Façonnez votre avenir";
$join_title_accent = "– dès aujourd'hui.";

$places_title = "Profit quotidien de <span style=\"white-space: nowrap\" data-js-deposit-multiply-round=\"3.1\">745 €</span> à <span style=\"white-space: nowrap\" data-js-deposit-multiply-round=\"7\">1 860 €</span> grâce à la plateforme d'investissement intelligente";
$places_remaining_text = "Places restantes";
$places_button = "S'inscrire maintenant";


// about page
$about_title = "À PROPOS DE NOUS";
$about_paragraph_1 = "$source a été développé dans le but d'offrir à chaque investisseur — du débutant au trader expérimenté — un environnement sûr, moderne et transparent pour l'investissement automatisé sur les marchés financiers et les cryptomonnaies. Nous pensons que le succès durable repose sur la clarté, l'ouverture et la confiance. C'est pourquoi tous nos processus — de l'inscription au paiement — s'appuient sur ces principes. Les décisions reposent sur des données et doivent rester compréhensibles pour les utilisateurs.";
$about_paragraph_2 = "Notre équipe réunit des compétences issues de différents domaines : développement de systèmes d'IA et d'algorithmes, analyse financière, cybersécurité et conformité réglementaire. Nous testons et améliorons continuellement nos processus et composants — de la qualité des données à la stabilité du système, en passant par l'analyse des signaux. L'objectif est une plateforme qui fonctionne de manière fiable en pratique.";
$about_paragraph_3 = "La protection de vos données personnelles et de votre capital est une priorité absolue. $source respecte des normes de sécurité reconnues et utilise un chiffrement moderne. Des contrôles de sécurité réguliers et des vérifications techniques contribuent à protéger vos informations et vos accès de manière fiable.";
$about_paragraph_4 = "La technologie est importante, mais l'accompagnement et le soutien jouent également un rôle essentiel. C'est pourquoi nous proposons une assistance personnalisée pour expliquer les fonctionnalités, clarifier les objectifs et faciliter l'utilisation de la plateforme. Vous serez aidé par de vraies personnes, et non uniquement par des réponses automatisées.";
$about_paragraph_5 = "Pour nous, l'innovation signifie une amélioration continue. Nous analysons les nouvelles tendances du marché, optimisons nos modèles et élargissons nos sources de données afin d'améliorer l'efficacité et l'expérience utilisateur. Les mises à jour sont testées sur des données historiques et lors d'essais contrôlés avant leur publication.";
$about_paragraph_6 = "De nombreux utilisateurs utilisent $source comme point d'entrée structuré vers l'investissement automatisé. Ils commencent souvent avec un capital réduit et une approche prudente, puis développent leur usage étape par étape, accompagnés de processus clairs et d'un soutien constant.";
$about_paragraph_7 = "En résumé : $source est bien plus qu'une simple plateforme. C'est un système qui réunit technologie, conscience du risque et accompagnement. Notre objectif est de vous fournir les outils nécessaires pour agir de façon structurée et responsable, sur une base transparente pour vos décisions.";


// contact
$contact_title = "CONTACT";
$contact_paragraph_1 = "Notre équipe de support vous aide de manière fiable et compétente pour toute question relative à $source. Que vous soyez simplement en train de vous renseigner, déjà inscrit ou utilisateur actif de la plateforme, nous vous aidons à avancer rapidement.";
$contact_subtitle = "Comment nous contacter";
$contact_paragraph_2 = "Nous vous accompagnons de façon ciblée pour toutes les questions concernant votre compte et l'utilisation de $source. Notre équipe est disponible du lundi au vendredi aux horaires habituels (heure d'Europe centrale) et traite les demandes en priorité. Voici les domaines dans lesquels nous intervenons habituellement :";
$contact_list = [
    "Création et vérification de votre compte, ainsi que gestion du compte (y compris la configuration du profil et des paramètres de risque)",
    "Assistance technique pour la plateforme, l'application ou en cas d'erreurs",
    "Questions relatives aux dépôts et retraits, délais de traitement et méthodes de paiement acceptées",
    "Informations sur les fonctionnalités, les stratégies, la logique de l'IA et les instruments disponibles",
    "Retours, idées et suggestions d'amélioration pour le développement",
    "Assistance pour toute autre question, qu'elle soit générale ou spécifique"
];
$contact_paragraph_3 = "Utilisez le formulaire de contact sécurisé ci-dessous et remplissez tous les champs pertinents afin que nous puissions traiter votre demande rapidement. En général, vous recevrez une réponse sous 24 heures ouvrées, souvent plus rapidement. Pour les questions techniques urgentes, un chat en direct peut être disponible (du lundi au vendredi, de 9h à 18h).";


// sign-up page
$home_title = "COMMENCEZ AVEC <span style=\"text-transform: uppercase\">$source</span> – PRÊT À L'EMPLOI EN QUELQUES MINUTES SEULEMENT.";


// conditions page
$terms_title = "CONDITIONS D'UTILISATION";
$terms_1 = "Les présentes conditions régissent l'utilisation de la plateforme et sont contraignantes pour tous les utilisateurs inscrits. En vous inscrivant ou en utilisant la plateforme, vous acceptez ces conditions. L'utilisation est réservée exclusivement aux personnes majeures et juridiquement capables.";

$terms_2 = "La plateforme peut être temporairement limitée en raison d'une maintenance technique ou de circonstances extérieures. Les fonctionnalités, contenus ou offres peuvent être ajustés ou développés.";

$terms_3 = "Tous les contenus, technologies et analyses fournis sont protégés par la loi. Leur utilisation en dehors de la plateforme n'est pas autorisée sans accord préalable.";

$terms_4 = "Les utilisateurs doivent fournir des informations exactes et à jour. Les décisions d'investissement et de trading relèvent de leur seule responsabilité. Il ne s'agit pas d'un conseil financier ni d'une garantie de résultats spécifiques. Les marchés financiers comportent des risques, y compris la perte possible du capital investi.";

$terms_5 = "Les données personnelles sont traitées conformément à la réglementation en vigueur en matière de protection des données. Des normes de sécurité et de conformité adéquates s'appliquent.";

$terms_6 = "Nous nous réservons le droit de modifier les présentes conditions d'utilisation. La poursuite de l'utilisation de la plateforme vaudra acceptation des règles mises à jour.";


// private page
$privacy_title = "POLITIQUE DE CONFIDENTIALITÉ";

$privacy_1 = "La protection de vos données personnelles est pour nous une priorité absolue. Nous traitons vos données exclusivement conformément à la réglementation en vigueur en matière de protection des données, notamment le RGPD.";

$privacy_2 = "Nous ne collectons que les informations nécessaires à la fourniture de nos services — telles que les données de contact, de compte, de transaction et d'utilisation technique. Dans certains cas, une vérification d'identité peut être légalement requise.";

$privacy_3 = "Le traitement des données est effectué à des fins de gestion des comptes, d'exécution des transactions, de support client, de sécurité, de prévention de la fraude et de respect des obligations légales. Vous ne recevrez des informations marketing qu'avec votre consentement explicite.";

$privacy_4 = "La communication de données se fait exclusivement à des prestataires soigneusement sélectionnés (par exemple, des prestataires de paiement ou informatiques) et uniquement dans la mesure nécessaire. Vos données ne sont pas vendues.";

$privacy_5 = "Nous mettons en œuvre des mesures de sécurité techniques et organisationnelles appropriées. Les données ne sont conservées que le temps exigé par la loi ou nécessaire à la finalité concernée.";

$privacy_6 = "Vous disposez à tout moment du droit d'accéder à vos données, de les rectifier, de les supprimer ou d'en limiter le traitement, ainsi que de retirer tout consentement donné.";

$privacy_google_choices = 'Vous pouvez gérer la manière dont Google utilise les informations relatives à vos visites via les <a href="http://www.google.com/settings/ads" target="_blank" rel="noopener">paramètres des annonces Google</a>, refuser la publicité basée sur les centres d\'intérêt grâce au <a href="https://tools.google.com/dlpage/gaoptout" target="_blank" rel="noopener">module de désactivation de Google Analytics pour navigateurs</a>, ou consulter la <a href="https://www.google.com/intl/fr/policies/privacy/" target="_blank" rel="noopener">politique de confidentialité de Google</a> pour en savoir plus.';

$privacy_7 = "Vous trouverez de plus amples informations ainsi que nos coordonnées sur notre site web.";

// ==========================================
// CALCULATOR SECTION
// ==========================================
$calc_badge = "Calculateur";
$calc_title = "Calculez vos gains potentiels avec $source";
$calc_amount_label = "Montant de l'investissement";
$calc_term_label = "Durée de l'investissement";
$calc_profit_label = "Profit estimé";
$calc_total_label = "Rendement total projeté";
$calc_btn = "S'inscrire maintenant";

// ==========================================
// SECURITY SECTION
// ==========================================
$security_badge = "La sécurité avant tout";
$security_title = "Une sécurité de niveau institutionnel pour votre capital et vos données";

$security_card1_title = "Chiffrement AES-256";
$security_card1_desc = "Tous les flux de données et identifiants des utilisateurs sont chiffrés à l'aide de protocoles SSL/TLS de niveau militaire et de la norme AES-256, empêchant toute interception non autorisée.";

$security_card2_title = "Comptes de liquidités séparés";
$security_card2_desc = "Les fonds des utilisateurs sont strictement séparés des actifs opérationnels de l'entreprise et conservés directement dans des pools de liquidité réglementés de niveau 1 et auprès de plateformes d'échange partenaires.";

$security_card3_title = "Intégration API en lecture seule";
$security_card3_desc = "L'exécution automatisée se connecte exclusivement via des clés API chiffrées, sans aucune autorisation de retrait. Vos actifs ne peuvent jamais quitter votre portefeuille sur la plateforme d'échange.";

$security_card4_title = "Protections automatisées contre les risques";
$security_card4_desc = "Des limites de stop-loss intégrées et une protection contre le slippage interrompent instantanément l'exécution en cas de volatilité anormale du marché, afin de préserver l'intégrité de votre solde.";

// ==========================================
// SEO-TEXT SECTION
// ==========================================
$seo_badge = "Aperçu";
$seo_title = "Une technologie de trading automatisé conçue pour les marchés financiers modernes";

$seo_p1 = "Naviguer sur les marchés d'actifs numériques exige rapidité, précision et un traitement fiable des données. <strong>$source</strong> propose une infrastructure de trading automatisée avancée, conçue pour éliminer les biais émotionnels, réduire la latence d'exécution et analyser systématiquement les opportunités de marché 24 heures sur 24.";

$seo_image_alt = "Moteur de trading algorithmique analysant les données du marché et générant un signal de trading maîtrisé";

$seo_feature1_title = "Précision algorithmique";
$seo_feature1_desc = "Exécute les opérations sur la base de probabilités statistiques et d'indicateurs de marché en temps réel.";
$seo_feature2_title = "Sécurité institutionnelle";
$seo_feature2_desc = "Protocoles de données chiffrés et protection stricte des clés API pour la sécurité de votre compte.";
$seo_feature3_title = "Analyses en temps réel";
$seo_feature3_desc = "Surveillance continue des pools de liquidité, des carnets d'ordres et des mouvements de prix.";

$seo_subheading1 = "Comment fonctionne le moteur algorithmique";
$seo_p2 = "La plateforme analyse des données complexes de carnets d'ordres sur les principales places de marché mondiales. Grâce à une analyse continue de la liquidité et à des algorithmes de suivi de tendance, <strong>$source</strong> identifie les micro-inefficiences de prix avant que les traders manuels ne puissent réagir.";
$seo_p3 = "Plutôt que de s'en remettre au hasard, les utilisateurs s'appuient sur des paramètres de gestion des risques structurés qui calculent dynamiquement les objectifs de profit et limitent l'exposition. Cette approche crée une stratégie de trading équilibrée, adaptée aussi bien aux conditions de marché volatiles qu'aux cycles de tendance classiques.";

$seo_subheading2 = "Fonctionnalités clés du système";
$seo_list1_strong = "Exécution automatisée des ordres :";
$seo_list1_text = "Élimine le délai entre les signaux d'entrée et l'exécution de l'opération.";
$seo_list2_strong = "Paramètres de risque personnalisables :";
$seo_list2_text = "Définissez des niveaux de stop-loss prédéfinis et des plafonds d'exposition quotidiens adaptés à vos objectifs personnels.";
$seo_list3_strong = "Intégration fluide :";
$seo_list3_text = "Connectez-vous directement à des courtiers et plateformes d'échange vérifiés via des interfaces API sécurisées en lecture seule.";

$seo_p4 = "La mise en route ne nécessite qu'une configuration technique minimale. En combinant un accès aux marchés de niveau institutionnel avec une interface intuitive, <strong>$source</strong> offre une voie simplifiée vers une automatisation structurée du trading.";

// ==========================================
// FAQ SECTION (calculator/security block FAQ — distinct from any other FAQ on the page)
// ==========================================
$calc_faq_badge = "FAQ";
$calc_faq_title = "Questions fréquentes";

$calc_faq_q1 = "$source est-il sûr et fiable ?";
$calc_faq_a1 = "Oui. <strong>$source</strong> fonctionne à l'aide de protocoles API chiffrés disposant uniquement d'autorisations de lecture et d'exécution. Le système n'a jamais d'accès direct pour retirer vos fonds, et tous les soldes de trading actifs restent sécurisés sur votre compte de courtage ou d'échange connecté.";

$calc_faq_q2 = "Comment fonctionnent les algorithmes de trading automatisé ?";
$calc_faq_a2 = "La plateforme analyse en permanence les carnets d'ordres et la liquidité du marché sur les principales places de marché mondiales. Lorsque des indicateurs mathématiques signalent un mouvement de prix à forte probabilité, le système déclenche automatiquement des micro-ordres en quelques millisecondes, sans délai humain ni décision émotionnelle.";

$calc_faq_q3 = "Quel est le dépôt initial minimum requis ?";
$calc_faq_a3 = "Le capital minimum requis pour démarrer le trading actif est de <strong>$app_price $app_currency</strong>. Ce seuil d'entrée garantit que l'algorithme dispose d'une liquidité suffisante pour répartir correctement la taille des positions et appliquer les règles de gestion automatisée des risques.";

$calc_faq_q4 = "Ai-je besoin d'une expérience préalable en trading pour commencer ?";
$calc_faq_a4 = "Aucune expérience financière préalable n'est nécessaire. <strong>$source</strong> est entièrement automatisé et conçu pour gérer l'exécution des opérations, le calcul des risques et le suivi des ordres à votre place, après une configuration initiale rapide.";

$calc_faq_q5 = "Y a-t-il des frais cachés ou des coûts d'abonnement ?";
$calc_faq_a5 = "Il n'y a aucun frais d'abonnement mensuel caché pour l'utilisation de l'interface de trading principale. L'inscription est gratuite, et 100 % des fonds déposés sont directement alloués à votre capital de trading.";

// ==========================================
// RISK WARNING PAGE
// ==========================================
$page_title_risk_warning = "Avertissement sur les risques | $source";
$page_description_risk_warning = "Comprenez les risques du trading automatisé de cryptomonnaies avec $source, notamment la volatilité des marchés, le risque d'exécution et les considérations réglementaires.";
$risk_warning_title = "Avertissement sur les risques";
$risk_warning_intro = "Comprendre les risques est la première étape vers un trading en toute confiance.";

$risk_warning_ai_heading = "Comment notre système d'IA contribue à la gestion des risques :";
$risk_warning_ai_1 = "<strong>Efficacité algorithmique et trading sans émotion :</strong> Des algorithmes avancés analysent les signaux du marché afin d'exécuter les opérations de manière objective, au moment optimal.";
$risk_warning_ai_2 = "<strong>Stratégies fondées sur les données :</strong> Les stratégies reposent sur des tendances de marché vérifiées et une analyse en temps réel plutôt que sur des suppositions.";
$risk_warning_ai_3 = "<strong>Paramètres flexibles et contrôle total :</strong> Ajustez vos paramètres de risque à tout moment. Suivez tous vos soldes et opérations en toute transparence depuis votre tableau de bord, sans frais cachés et avec des retraits sans restriction.";

$risk_warning_disclaimer = "<strong>Avertissement :</strong> Le trading comporte toujours des risques. Les systèmes automatisés (y compris l'IA) ne garantissent aucun profit, peuvent connaître des défaillances dues à des erreurs logicielles ou à des événements de marché imprévus, et nécessitent une surveillance de la part de l'utilisateur. Les performances passées ne préjugent pas des résultats futurs. Cette plateforme a une vocation purement informative et marketing et ne constitue pas un conseil financier.";

$risk_warning_s1_heading = "1. Risques généraux et risques liés au marché des cryptomonnaies";
$risk_warning_s1_intro = "Les cryptomonnaies sont des actifs spéculatifs hautement volatils, négociés 24h/24 et 7j/7 avec une surveillance réglementaire minimale dans la plupart des juridictions.";
$risk_warning_s1_1 = "Les valeurs peuvent fluctuer de manière spectaculaire sur de courtes périodes, pouvant entraîner une perte totale du capital investi.";
$risk_warning_s1_2 = "Les valeurs de marché peuvent être fortement affectées par des évolutions réglementaires, des développements techniques, des failles de sécurité ou des événements macroéconomiques plus larges.";
$risk_warning_s1_3 = "Certains actifs peuvent perdre toute leur valeur. N'investissez que les fonds que vous pouvez vous permettre de perdre.";

$risk_warning_s2_heading = "2. Risques d'exécution, de liquidité et d'effet de levier";
$risk_warning_s2_1 = "<strong>Volatilité du marché et liquidité :</strong> Des mouvements de prix extrêmes (10 à 20 % ou plus par jour) ou une faible liquidité (notamment pour les cryptomonnaies plus petites) peuvent entraîner des retards, des interruptions de la plateforme et un glissement d'exécution important. Les ordres stop-loss ne peuvent pas garantir des limites de perte dans des conditions extrêmes.";
$risk_warning_s2_2 = "<strong>Risques liés à l'effet de levier et à la marge :</strong> Les produits à effet de levier amplifient à la fois les gains et les pertes, ce qui signifie que vous pouvez perdre plus que votre dépôt initial. Environ 70 à 80 % des comptes d'investisseurs particuliers perdent de l'argent lorsqu'ils négocient des produits à effet de levier.";

$risk_warning_s3_heading = "3. Risques techniques, de cybersécurité et liés aux tiers";
$risk_warning_s3_1 = "<strong>Facteurs techniques :</strong> Le trading en ligne comporte intrinsèquement des risques liés aux déconnexions internet, aux erreurs matérielles ou logicielles et à l'indisponibilité des services.";
$risk_warning_s3_2 = "<strong>Cybersécurité :</strong> Les comptes de cryptomonnaies sont des cibles fréquentes de phishing, de logiciels malveillants et de piratages. Les transactions sont irréversibles ; la compromission de vos identifiants peut entraîner une perte définitive.";
$risk_warning_s3_3 = "<strong>Plateformes tierces :</strong> Ce site peut mettre les utilisateurs en relation avec des plateformes tierces. Nous ne contrôlons, n'approuvons ni ne garantissons leur sécurité, leur fonctionnement ou leur solvabilité. Effectuez toujours vos propres vérifications avant de déposer des fonds sur des plateformes externes.";

$risk_warning_s4_heading = "4. Dispositions réglementaires, fiscales et finales";
$risk_warning_s4_1 = "<strong>Conformité légale et fiscalité :</strong> Les cadres réglementaires varient considérablement et évoluent rapidement. Les utilisateurs sont seuls responsables de s'assurer que leur activité de trading respecte les lois locales et de remplir leurs propres obligations fiscales.";
$risk_warning_s4_2 = "<strong>Aucune garantie de profit :</strong> Il n'existe pas de trading de cryptomonnaies \"sûr\" ou sans risque. Tous les chiffres de rendement ou exemples de performance sont purement hypothétiques.";
$risk_warning_s4_3 = "<strong>Adéquation :</strong> Si vous ne comprenez pas pleinement les risques, si vous dépendez de fonds essentiels, ou si vous négociez avec de l'argent emprunté, le trading de cryptomonnaies ne vous convient pas. Consultez un conseiller financier indépendant agréé en cas de doute.";

$risk_warning_contact = "<strong>Contact :</strong> Pour toute question concernant cet avertissement ou pour soumettre une demande, veuillez contacter notre équipe officielle de support client via le formulaire de contact sur notre site web.";
$footer_risk_warning = "Avertissement sur les risques";
