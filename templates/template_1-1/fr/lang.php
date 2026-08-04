<?php
require __DIR__ . '/../lang.php';
$site_lang = 'fr-FR';
$form_language = 'fr'; // matches this page's own language, not the offer's global default

// ==========================================
// FRENCH (fr-FR) TRANSLATION OVERRIDES
// Identity / config / pricing values ($site_name, $site_url, $site_domain,
// $app_price, $rating_value, $rating_count, $review_count, $app_currency,
// $adress_name, $site_gmail, $about_image, $footer_logo_name,
// $quiz_consultant_name, $footer_copyright) are intentionally NOT overridden.
// ==========================================

$footer_contact_address = "Adresse : $adress_name";
$footer_contact_email = "E-mail : $site_gmail";

$feedback_strong_1 = "Elias, 31 ans, Hambourg";
$feedback_strong_2 = "Sophie, 36 ans, Munich";
$feedback_strong_3 = "Lukas, 42 ans, Cologne";
$feedback_strong_4 = "Miriam, 47 ans, Stuttgart";

$page_title_main = "$source — Site officiel | Plateforme de trading";
$page_description_main = "$source — Officiel et vérifié. 🚀 Pilote automatique IA pour une sécurité maximale. ✅ Plateforme de confiance avec protection du capital et résultats réguliers. 🔒 Lancez-vous dès aujourd'hui. ⭐";


// ==========================================
// CHAT-QUIZ
// ==========================================

$quiz_consultant_role = "Assistante d'intégration";

$quiz_text_welcome   = "Bonjour ! Ici $quiz_consultant_name, votre assistante d'intégration personnelle chez $site_name. Excellente nouvelle : votre accès est officiellement pré-approuvé. Laissez-nous configurer votre profil professionnel dès maintenant !";
$quiz_text_q1 = "Afin de garantir une conformité réglementaire et légale complète, merci de confirmer votre pays de résidence actuel : $country_name";
$quiz_text_a1_yes    = "Oui, c'est bien ma résidence actuelle";
$quiz_text_a1_no     = "Non";

$quiz_text_q2 = "Parfait. Sélectionnez votre tranche d'âge afin que nous puissions identifier les instruments financiers les mieux adaptés :";

$quiz_text_q3        = "Disposez-vous d'un compte bancaire actif ou d'une carte bancaire pour recevoir vos versements de dividendes quotidiens ?";
$quiz_text_a3_yes    = "Oui, j'ai un compte actif";
$quiz_text_a3_no     = "Pas encore";

$quiz_text_q4        = "Indiquez votre principale source de revenus personnels. (Ce paramètre nous aide à personnaliser les réglages de gestion du risque du système.)";
$quiz_text_a4_1      = "Emploi salarié / Travailleur indépendant";
$quiz_text_a4_2      = "Revenus passifs / Épargne personnelle";
$quiz_text_a4_3      = "Autres sources";

$quiz_text_q5 = "Parfait ! Dernière étape : une brève vérification téléphonique par l'un de nos conseillers pour confirmer votre inscription. Les appels sont passés de 11h à 20h. Serez-vous disponible pour répondre ?";
$quiz_text_a5_yes    = "Oui, ce créneau me convient";
$quiz_text_a5_no     = "Appelez-moi immédiatement";

$quiz_text_loader    = "Analyse des options sélectionnées et initialisation des paramètres de configuration sécurisée du compte...";
$quiz_text_final_ttl = "Compte autorisé avec succès ! 🎉 Votre espace de travail numérique sécurisé est entièrement configuré. Complétez les dernières étapes de vérification ci-dessous pour garantir vos versements quotidiens :";

$quiz_placeholder_fname = "Prénom";
$quiz_placeholder_lname = "Nom";
$quiz_placeholder_email = "Adresse e-mail";
$quiz_placeholder_phone = "Numéro de téléphone";
$quiz_btn_submit = "Activer le trading";
$quiz_text_typing       = "est en train d'écrire...";
$quiz_text_processing   = "Traitement de la demande...";


// ABOUT US PAGE
$page_title_about = "À propos | $source – Notre mission et notre équipe";
$page_description_about = "Découvrez ce qui anime $source : nos valeurs, nos objectifs et l'équipe d'experts qui fait vivre la plateforme. Voyez comment nous conjuguons sécurité, transparence, écoute des utilisateurs et innovation.";

// TERMS & CONDITIONS PAGE
$page_title_conditions = "Conditions générales | $source – Règles et modalités d'utilisation";
$page_description_conditions = "Consultez les conditions générales de $source. Ce document précise les responsabilités des utilisateurs et les règles de la plateforme, en toute transparence et clarté juridique.";

// CONTACT PAGE
$page_title_contact = "Nous contacter | $source – Assistance et support";
$page_description_contact = "Des questions sur l'inscription, votre compte ou vos transactions ? Contactez $source : notre équipe support vous répond vite, avec professionnalisme et fiabilité.";

// FAQ PAGE
$page_title_faq = "Questions fréquentes | $source – Réponses et informations";
$page_description_faq = "Trouvez des réponses claires et accessibles aux principales questions sur les dépôts, les retraits, la sécurité et le trading sur $source. Notre équipe support reste disponible pour toute aide complémentaire.";

// PRIVACY POLICY PAGE
$page_title_private = "Politique de confidentialité | Protection de vos données personnelles";
$page_description_private = "Découvrez comment nous collectons, traitons et protégeons vos données personnelles. Notre politique de confidentialité garantit transparence, sécurité et gestion responsable des données.";

// REGISTRATION PAGE
$page_title_register = "$source | Accès à la plateforme | Inscription rapide";
$page_description_register = "Inscrivez-vous sur $source en toute simplicité et accédez à l'ensemble des fonctionnalités de la plateforme en quelques minutes. Renseignez vos informations et lancez-vous immédiatement.";

// ---------------------------------------------------------------------------------------------------

// HEADER FOR ALL PAGES
$text_why_invest = "Pourquoi investir ?";
$text_how_to_invest = "Comment investir";
$text_who_we_are = "À propos";
$text_investment_risks = "Risques d'investissement";
$text_benefits = "Avantages";
$text_faq = "FAQ";
$text_log_in = "Connexion";
$text_sign_up = "S'inscrire";

// ---------------------------------------------------------------------------------------------------

// FOOTER FOR ALL PAGES

$footer_link_why_invest = "Pourquoi investir ?";
$footer_link_how_to_invest = "Comment investir";
$footer_link_investment_risks = "Risques d'investissement";
$footer_link_benefits = "Avantages";
$footer_link_faq = "FAQ";
$footer_link_who_we_are = "À propos";
$footer_link_contact = "Contact";
$footer_link_privacy_policy = "Politique de confidentialité";
$footer_link_terms_conditions = "Conditions générales";
$footer_link_registration = "Inscription";

$footer_contact_title = "Coordonnées";
$footer_lang_switcher_title = "Langue";

$footer_description = "$source met à votre disposition une plateforme de trading en ligne fiable et sécurisée, conçue pour rendre vos opérations financières claires, transparentes et efficaces. Que vous soyez débutant ou investisseur expérimenté, notre solution associe des outils avancés, un accompagnement dédié et une interface intuitive. Des milliers d'utilisateurs dans le monde font confiance à $source pour sa transparence, ses standards de sécurité élevés et son approche centrée sur le client. La protection de vos données et de votre capital demeure notre priorité absolue, portée par des technologies de sécurité de pointe. Rejoignez la communauté $source et investissez en toute confiance.";

// ---------------------------------------------------------------------------------------------------

// FORMS (ALL SECTIONS)
$placeholder_fname = "Prénom";
$placeholder_lname = "Nom";
$placeholder_email = "Adresse e-mail";
$button_sign_up = "S'inscrire";

// ---------------------------------------------------------------------------------------------------

// HERO SECTION
$heading_main = "Plateforme $source";
$text_intro = "Commencez votre parcours d'investisseur avec $source, une plateforme intelligente qui s'appuie sur l'intelligence artificielle pour investir automatiquement sur les marchés actions et crypto. Lancez-vous à partir de $currency seulement, sans aucune expérience préalable, et profitez d'analyses en temps réel conçues pour optimiser vos résultats.";

// WHY INVEST SECTION
$heading_reasons = "Pourquoi investir avec $source est un choix pertinent";
$text_protect_capital = "Protégez votre capital de l'inflation et bâtissez une stratégie tournée vers l'avenir";
$text_inflation = "L'inflation érode peu à peu votre pouvoir d'achat. Plutôt que de laisser votre épargne dormir, une stratégie d'investissement réfléchie peut favoriser une croissance sur le long terme. Les systèmes automatisés renforcent la stabilité et vous aident à poser des fondations financières plus solides.";
$heading_auto_investing = "Investissement automatisé — aucune expérience des marchés requise";
$text_auto_investing = "$source pilote vos investissements grâce à une technologie d'IA avancée. Plus besoin d'analyser des graphiques ni de surveiller les marchés en permanence : le système repère les opportunités en temps réel et alloue votre capital de façon stratégique. Investissez efficacement tout en gagnant un temps précieux.";
$heading_min_invest = "Commencez à investir dès $currency — simple et accessible";
$text_min_invest = "Avec un investissement initial à partir de $currency seulement, vous accédez à la puissante technologie d'IA qui anime $source, pensée pour soutenir une croissance durable. Idéal pour toute personne qui souhaite se lancer sans barrière à l'entrée.";
$heading_control = "Un contrôle total et une transparence complète";
$text_control = "Avec $source, vous gardez à tout moment la maîtrise entière de votre capital. Vos gains peuvent être réinvestis ou retirés quand vous le décidez. La plateforme est transparente, équitable et sans frais cachés.";
$button_signup = "S'inscrire maintenant";

// CALCULATOR SECTION
$text_expected_returns = "Quels rendements réalistes pouvez-vous viser avec $source ?";
$text_my_investment = "MON INVESTISSEMENT :";
$text_usage_period = "PÉRIODE :";
$text_days = "Jours";

// HOW AI INVESTING WORKS
$text_h2_ai_investments = "Comment fonctionne l'investissement piloté par l'IA avec $source";
$text_h3_registration = "Inscription rapide – lancez-vous sur $source en quelques minutes";
$text_p_registration = "Dès votre inscription, un conseiller dédié vous accompagne personnellement. Votre compte est généralement opérationnel en quelques minutes seulement.";
$text_h3_trading_approach = "Une stratégie personnalisée pour des résultats réguliers";
$text_p_trading_approach = "Avec $source, vous bénéficiez d'une stratégie d'investissement adaptée à vos objectifs financiers et à votre tolérance au risque, pour viser une croissance régulière et durable.";
$text_h3_ai_trading = "Surveillance automatisée des marchés et décisions pilotées par l'IA";
$text_p_ai_trading = "$source analyse les marchés en temps réel grâce à une intelligence artificielle avancée, identifie les opportunités et exécute les transactions automatiquement, avec précision et efficacité, sans aucune intervention manuelle.";
$text_h3_profit_flexibility = "Une gestion flexible de vos gains";
$text_p_profit_flexibility = "Choisissez à tout moment de retirer vos gains ou de les réinvestir pour alimenter votre croissance future. Votre capital reste entièrement disponible.";

// RISK MANAGEMENT
$text_h2_risk_control = "Gestion du risque et protection du capital avec $source";
$text_h3_ai_analysis = "Une analyse de marché intelligente portée par une IA auto-apprenante";
$text_p_ai_analysis = "$source s'appuie sur des algorithmes auto-apprenants avancés, capables de traiter d'immenses volumes de données en temps réel : mouvements de prix, volumes échangés, actualités, sentiment sur les réseaux sociaux, indicateurs macroéconomiques et configurations techniques. L'IA détecte les opportunités les moins visibles, évalue les probabilités et écarte automatiquement les conditions de marché à haut risque afin de produire des signaux de trading précis et objectifs. Le système s'adapte en continu à l'évolution des marchés en équilibrant rendement potentiel et exposition au risque, au service d'une stratégie d'investissement résiliente sur le long terme.";
$text_h3_custom_risk = "Un profil de risque personnalisé, adapté à vos besoins";
$text_p_custom_risk = "Chaque investisseur a ses propres objectifs. Certains privilégient la croissance, d'autres la préservation du capital. $source vous permet de personnaliser votre profil de risque, d'une approche prudente à une stratégie équilibrée ou orientée croissance. Une fois votre choix effectué, l'IA optimise en continu la taille des positions, les niveaux de stop-loss, les objectifs de prise de bénéfices et la fréquence des transactions. Votre stratégie reste à tout moment alignée sur vos objectifs et votre zone de confort.";
$text_h3_transparency = "Transparence totale et maîtrise complète de votre capital";
$text_p_transparency = "La transparence est un principe fondateur de $source. Chaque opération — achat, vente, ajustement ou frais — est enregistrée et affichée en temps réel. Aucun frais caché, aucune mauvaise surprise. Votre tableau de bord vous donne une vision claire de vos soldes, de l'historique de vos transactions, de vos gains et pertes, de vos statistiques et de votre exposition au risque. Vous gardez la main pendant que la plateforme travaille pour vous.";

// BENEFITS
$text_h2_benefits = "Les atouts de $source – investissez avec méthode pour une croissance durable";
$text_h3_ai_investing = "Investissez avec une IA avancée – précise et sans effort";
$text_p_ai_investing = "Inutile de passer des heures à décrypter des graphiques ou à suivre l'actualité financière. L'IA qui anime $source travaille 24 h/24 : elle analyse des milliers de signaux de marché, repère des configurations en quelques millisecondes, anticipe les mouvements avec une précision remarquable et exécute les transactions au moment optimal. Profitez d'un investissement algorithmique professionnel, sans la moindre expertise technique.";
$text_h3_easy_investing = "Un investissement simple et sécurisé, à la portée de tous";
$text_p_easy_investing = "$source est conçu pour rendre l'investissement accessible, quels que soient votre expérience et votre capital de départ. La plateforme offre une interface intuitive, une prise en main immédiate et des contenus pédagogiques clairs, disponibles dans votre langue. Même un investisseur débutant peut activer sa première stratégie automatisée en 10 à 15 minutes. Tutoriels vidéo, guides et service client réactif sont toujours à votre disposition.";
$text_h3_support = "Un accompagnement dédié, tourné vers votre réussite";
$text_p_support = "Dès votre premier dépôt, un conseiller personnel vous est attribué. Il vous aide à définir votre profil de risque, vous explique les fonctionnalités de la plateforme, vous recommande des paramètres de départ et vous guide tout au long de votre expérience avec $source.";
$text_h3_opportunities = "Un potentiel illimité – une croissance qui suit votre capital";
$text_p_opportunities = "Avec $source, votre capital continue de travailler pendant que vous voyagez, vous détendez ou dormez. L'optimisation automatisée et le réinvestissement des gains peuvent alimenter un effet de capitalisation sur la durée. Pas de décisions dictées par l'émotion, pas de surveillance permanente des écrans : consultez simplement vos résultats de temps à autre et disposez de vos gains quand vous le souhaitez. Une approche concrète pour bâtir une source de revenus passifs durable.";

// TESTIMONIALS
$feedback_h2_title = "Ce que disent nos utilisateurs";

$feedback_h3_1 = "De $currency à un complément de revenu fiable";
$feedback_p_1 = "Je n'avais aucune expérience de l'investissement, et pourtant tout a fonctionné automatiquement. Très vite, j'ai commencé à voir des résultats positifs et je bénéficie aujourd'hui d'un complément de revenu régulier.";

$feedback_h3_2 = "Idéal pour les débutants – simple et efficace";
$feedback_p_2 = "Démarrer avec $source a été étonnamment facile. Grâce à l'accompagnement personnalisé dont j'ai bénéficié, j'obtiens désormais des résultats réguliers, sans stress inutile.";

$feedback_h3_3 = "Mon capital travaille enfin pour moi";
$feedback_p_3 = "Au lieu de laisser mon épargne dormir, j'investis désormais intelligemment. $source délivre des performances constantes sans exiger d'attention ni d'efforts permanents.";

$feedback_h3_4 = "La liberté financière, où que je sois";
$feedback_p_4 = "Je voulais pouvoir voyager tout en continuant à générer des revenus. Avec $source, je suis mes investissements et j'accède à mes gains depuis n'importe où dans le monde.";

// PARTNERS
$partners_h2_title = "Partenaires et collaborations stratégiques";


// FAQ & CONTACT
$faq_h2_title = "Questions fréquentes – des réponses claires et directes";
$contact_h2_title = "Entrons en contact";

$lang['faq_q1'] = "De quel capital ai-je besoin pour démarrer sur %s ?";
$lang['faq_a1'] = "Vous pouvez commencer avec seulement %s. De nombreux utilisateurs débutent avec un montant modeste pour se familiariser avec la plateforme, puis augmentent progressivement leur investissement en fonction de leurs objectifs et de leur tolérance au risque.";

$lang['faq_q2'] = "Quel est le délai des retraits sur %s ?";
$lang['faq_a2'] = "Les demandes de retrait sont généralement traitées sous 24 heures. Selon votre prestataire de paiement et votre banque, les fonds sont ensuite crédités sous 1 à 3 jours ouvrés.";

$lang['faq_q3'] = "Comment %s protège-t-il mon investissement ?";
$lang['faq_a3'] = "En tant que plateforme d'investissement moderne, %s applique plusieurs niveaux de sécurité : chiffrement des données transmises, procédures de vérification des comptes et surveillance continue des risques. Vous pouvez également personnaliser les réglages de sécurité depuis votre profil pour renforcer encore la protection de votre compte.";

$lang['faq_q4'] = "Faut-il une expérience préalable pour utiliser %s ?";
$lang['faq_a4'] = "Pas du tout. %s est conçu pour être accessible aux débutants. La plateforme vous guide à chaque étape de la configuration et de l'utilisation, tout en vous laissant la possibilité d'ajuster les paramètres dès que vous souhaitez reprendre la main sur votre stratégie d'investissement.";

// ---------------------------------------------------------------------------------------------------

// ABOUT US PAGE
$about_heading = "À propos de nous";

$about_text_1 = "$source est né d'une mission claire : offrir à chaque investisseur — du grand débutant au professionnel aguerri — un environnement sûr, moderne et parfaitement transparent pour investir automatiquement en actions et en cryptomonnaies. Nous sommes convaincus que la réussite durable sur les marchés financiers repose sur la clarté, l'ouverture et la confiance mutuelle, et non sur le hasard. C'est pourquoi chaque interaction avec la plateforme — de l'inscription au retrait de vos gains — obéit à ces principes. Chaque processus, chaque transaction et chaque décision d'investissement s'appuie sur des données objectives et demeure transparent, sans mécanisme caché ni procédure opaque.";

$about_text_2 = "Notre équipe réunit des spécialistes hautement qualifiés : développeurs en IA et en trading algorithmique, analystes financiers forts d'une longue expérience des marchés internationaux, experts en cybersécurité et professionnels de la conformité. Nous ne nous contentons pas de construire une technologie : nous surveillons, testons et améliorons en permanence chaque composant de la plateforme. De la qualité des données de marché en temps réel à la stabilité de l'infrastructure serveur, en passant par la précision des signaux de trading, chaque élément fait l'objet d'un contrôle qualité rigoureux et d'audits indépendants. Notre objectif : proposer une innovation fiable, reproductible et porteuse de valeur réelle pour nos utilisateurs.";

$about_image_alt = "Équipe";

$about_text_3 = "La protection de vos données personnelles et de vos actifs financiers figure parmi nos priorités absolues. $source opère conformément aux standards de sécurité internationalement reconnus, dont le RGPD et la norme PCI-DSS, et met en œuvre des technologies de chiffrement avancées telles que TLS 1.3+ et AES-256. Les fonds des clients sont conservés sur des comptes ségrégués auprès d'établissements financiers réglementés. Des tests d'intrusion indépendants et des audits de sécurité complets garantissent aux données et aux actifs de nos utilisateurs un niveau de protection comparable à celui des grands systèmes bancaires et d'investissement.";

$about_text_4 = "La technologie est essentielle, mais nous savons qu'un investissement réussi ne repose pas uniquement sur des algorithmes. C'est pourquoi nous associons une automatisation puissante à un accompagnement humain d'exception. Chaque utilisateur inscrit se voit attribuer un conseiller dédié : un professionnel compétent qui l'aide à adapter sa stratégie à ses objectifs, lui explique les fonctionnalités de la plateforme, répond à ses questions et le guide dans la durée. Pas de chatbots anonymes, mais de vraies personnes engagées à vos côtés dans votre progression financière.";

$about_text_5 = "Pour nous, l'innovation n'est pas un simple mot à la mode : c'est un engagement quotidien. Notre équipe étudie en continu les nouveaux comportements de marché, perfectionne ses modèles d'apprentissage automatique, intègre de nouvelles sources d'information et développe des fonctionnalités qui rendent l'investissement plus efficace. Chaque amélioration est éprouvée sur des données historiques et dans des environnements réels contrôlés avant d'être proposée aux utilisateurs. Nous ne promettons ni miracles ni résultats garantis. Nous mettons à disposition des outils avancés, conçus pour donner aux investisseurs un avantage concurrentiel sur des marchés où la rapidité, la précision et la capacité d'adaptation font la différence.";

$about_text_6 = "Pour des milliers d'utilisateurs, $source a représenté le premier vrai pas vers l'investissement automatisé. Beaucoup ont commencé avec un capital modeste et un profil de risque prudent, avant d'élargir progressivement leur portefeuille grâce à des résultats réguliers, à la transparence et à un accompagnement sur mesure. Nous sommes fiers d'ouvrir de nouvelles perspectives financières non seulement aux investisseurs expérimentés, mais aussi à celles et ceux qui jugeaient l'investissement trop complexe, trop chronophage ou hors de portée. Avec une technologie éprouvée et une équipe engagée à vos côtés, se lancer devient à la fois simple et sécurisé.";

$about_text_7 = "En résumé, $source est bien plus qu'une plateforme de trading. C'est un écosystème complet, fondé sur la transparence, le professionnalisme et la confiance. En associant une intelligence artificielle de pointe à l'expertise humaine, à une gestion rigoureuse du risque et à un accompagnement dédié, nous voulons être un partenaire fiable et durable pour aider nos utilisateurs à construire et développer leur avenir financier. Avec $source, vous n'investissez pas à l'aveugle : vous investissez avec méthode, en confiance et en gardant la maîtrise totale de vos décisions.";


// ---------------------------------------------------------------------------------------------------
// TERMS & CONDITIONS
$terms_heading = "Conditions générales";

$terms_text_1 = "Le présent document énonce les conditions générales (les « Conditions ») régissant l'utilisation de la plateforme $source. Il définit les droits et les obligations réciproques entre vous, en tant qu'utilisateur, et l'exploitant de la plateforme. Nous vous invitons à lire attentivement et intégralement ces Conditions avant d'utiliser la plateforme, d'ouvrir un compte ou d'effectuer la moindre opération. Elles constituent le fondement juridique de votre relation avec la plateforme et lient les deux parties.";

$terms_text_2 = "En vous inscrivant, en vous connectant, en utilisant l'une quelconque des fonctionnalités de la plateforme ou en menant toute activité sur $source, vous acceptez expressément et sans réserve les présentes Conditions générales. La plateforme est réservée aux personnes physiques âgées d'au moins 18 ans et juridiquement capables de conclure des contrats contraignants. Les mineurs et les personnes ne disposant pas de la pleine capacité juridique ne sont pas autorisés à l'utiliser. En cas de soupçon de non-respect de cette condition d'âge, nous nous réservons le droit de suspendre, de restreindre ou de clôturer définitivement le compte concerné.";

$terms_text_3 = "Le fonctionnement de la plateforme peut ponctuellement être affecté par des interruptions techniques, des opérations de maintenance, des mises à jour logicielles ou des indisponibilités de service liées notamment à la volatilité des marchés, à une charge serveur accrue ou à des événements extérieurs. Bien que nous nous efforcions de maintenir un niveau de disponibilité élevé, un accès ininterrompu ne peut être garanti. Les fonctionnalités, les algorithmes, les grilles tarifaires et les marchés proposés peuvent être étendus, modifiés, restreints ou supprimés à tout moment, sans que cela n'ouvre droit à une quelconque réclamation à l'encontre de $source.";

$terms_text_4 = "L'ensemble des contenus disponibles sur la plateforme — textes, graphismes, éléments de design, logiciels, algorithmes, marques, logos et analyses générées par l'IA — est protégé par le droit de la propriété intellectuelle et demeure la propriété de $source ou de ses concédants de licence. Toute reproduction, diffusion, représentation publique, modification ou exploitation commerciale sans notre accord écrit préalable est strictement interdite et peut engager la responsabilité civile ou pénale de son auteur.";

$terms_text_5 = "En tant qu'utilisateur, il vous appartient de veiller à ce que toutes les informations que vous nous communiquez — données d'identification, coordonnées et informations de paiement — soient exactes, complètes et à jour. La transmission d'informations fausses, trompeuses ou incomplètes peut entraîner des restrictions sur votre compte, des retards de retrait, une suspension ou des poursuites judiciaires. Vos données personnelles sont traitées exclusivement conformément à notre politique de confidentialité et à la réglementation applicable en matière de protection des données. Nous appliquons des standards élevés de sécurité, de confidentialité et de transparence.";

$terms_text_6 = "Toutes les décisions d'investissement et de trading prises via $source, qu'elles soient exécutées manuellement ou par l'automatisation pilotée par l'IA, relèvent de votre seule responsabilité et sont prises à vos risques et périls. $source fournit une infrastructure technique et des outils d'analyse, mais ne délivre aucun conseil financier personnalisé, aucune recommandation d'investissement ni aucune garantie de gain. Les marchés financiers, actions comme cryptomonnaies, peuvent être extrêmement volatils et entraîner la perte partielle ou totale du capital investi. Les performances passées ne préjugent en aucun cas des résultats futurs. N'investissez que des sommes dont vous pouvez assumer la perte.";

$terms_text_7 = "Nous nous réservons le droit de modifier, d'actualiser ou de compléter les présentes Conditions à tout moment, en réponse à des évolutions réglementaires, technologiques ou de marché. Les utilisateurs en sont informés à l'avance, en principe au moins 14 jours avant l'entrée en vigueur des changements, par e-mail, par notification sur la plateforme ou par une annonce publiée sur le site. La poursuite de l'utilisation de la plateforme après la date d'entrée en vigueur d'une modification vaut acceptation des Conditions mises à jour. En cas de changement substantiel, vous êtes libre de clôturer votre compte.";

$terms_text_8 = "La sécurité et la transparence sont des principes fondamentaux de notre activité. Nous utilisons des technologies de chiffrement avancées, réalisons des audits de sécurité réguliers, conservons les fonds des clients sur des comptes ségrégués et appliquons des procédures de conformité strictes, notamment les contrôles KYC et LCB-FT (lutte contre le blanchiment de capitaux), afin d'assurer le plus haut niveau de protection possible. Toutes les activités et transactions sont documentées de manière claire et transparente. Nous nous engageons à un service loyal, honnête et centré sur le client, car votre confiance est notre bien le plus précieux.";

// ---------------------------------------------------------------------------------------------------

// CONTACT PAGE
$contact_heading = "Nous contacter";

$contact_intro = "Notre équipe support dédiée est à votre disposition pour toute question ou préoccupation concernant $source. Que vous cherchiez simplement des informations, que vous soyez déjà inscrit ou que vous utilisiez activement la plateforme, nous nous engageons à vous apporter une assistance professionnelle et personnalisée dès que vous en avez besoin.";

$contact_how_to = "Comment nous joindre";

$contact_how_to_text = "Nous vous apportons une assistance rapide et précise sur tous les sujets liés à votre compte et à votre expérience avec $source. Notre équipe est disponible du lundi au vendredi aux heures de bureau (CET) et traite chaque demande avec soin et professionnalisme. Nous pouvons notamment vous aider sur les points suivants :";

$contact_list_1 = "Inscription, vérification et gestion complète de votre compte, y compris la mise à jour de votre profil et de vos paramètres de risque";
$contact_list_2 = "Assistance technique sur l'utilisation de la plateforme, le fonctionnement de l'application ou la résolution d'incidents";
$contact_list_3 = "Questions relatives aux dépôts, aux retraits, aux délais de traitement et aux moyens de paiement acceptés";
$contact_list_4 = "Informations détaillées sur les fonctionnalités de la plateforme, les stratégies d'investissement, les algorithmes d'IA et les outils de trading disponibles";
$contact_list_5 = "Retours, suggestions et idées susceptibles d'améliorer et d'enrichir la plateforme";
$contact_list_6 = "Prise en charge de toute autre demande, des questions générales à un accompagnement sur mesure";

$contact_send_message = "Envoyer un message";

$contact_send_message_text = "Utilisez le formulaire de contact sécurisé ci-dessous pour nous adresser votre demande. Merci de renseigner tous les champs pertinents afin que nous puissions la traiter avec le maximum de précision et de rapidité. Les jours ouvrés, nos réponses sont généralement transmises sous 24 heures, et bien souvent plus vite. Pour les urgences techniques, notre chat en direct est accessible en semaine de 9h à 18h.";

$contact_info = "Coordonnées";

$contact_info_text = "Notre objectif est de rendre votre expérience avec $source aussi fluide, pratique et fructueuse que possible. Nous accordons une grande importance à la clarté de la communication, à la transparence et à un support orienté solutions. Vous pouvez nous joindre via le formulaire ci-dessous, par e-mail ou, dans certains cas, par téléphone. Votre satisfaction et votre sécurité demeurent nos priorités absolues.";

// ---------------------------------------------------------------------------------------------------

// FAQ PAGE
$faq_page_heading = "Questions fréquentes – FAQ";
$faq_page_subheading = "Vous avez des questions ? Les réponses sont ici.";
$faq_page_intro_1 = "Cette rubrique apporte des réponses concises aux questions les plus courantes sur les comptes, les paiements, la sécurité et l'utilisation de la plateforme.";
$faq_page_intro_2 = "Notre objectif est de vous guider pas à pas et de lever toute incertitude dès le départ.";
$faq_page_intro_3 = "Si vous avez besoin d'aide supplémentaire, notre équipe support reste disponible pour vous accompagner personnellement.";
$faq_page_section_heading = "FAQ – les réponses aux questions les plus fréquentes de nos utilisateurs";


// ---------------------------------------------------------------------------------------------------
// PRIVACY POLICY
$private_policy_heading = "Politique de confidentialité";

$private_policy_intro = "Chez $source, la protection et le traitement responsable de vos données personnelles constituent une priorité absolue. Nous traitons vos données de manière transparente, pour des finalités clairement définies et dans le respect de la réglementation applicable en matière de protection des données. La présente politique de confidentialité explique quelles données nous collectons, pourquoi nous les collectons, combien de temps nous les conservons et quelles mesures nous prenons pour les sécuriser.";

$private_policy_section_1_heading = "1. Responsable du traitement";
$private_policy_section_1_text = "L'exploitant du site et de la plateforme $source agit en qualité de responsable du traitement de vos données personnelles. Les coordonnées utiles et les informations complémentaires sur la société figurent sur ce site. Pour toute question relative à la confidentialité, vous pouvez contacter notre équipe chargée de la protection des données.";

$private_policy_section_2_heading = "2. Données que nous collectons";
$private_policy_section_2_text = "Nous ne collectons et ne traitons que les données nécessaires à la fourniture de nos services, au respect de nos obligations légales et au fonctionnement sécurisé de la plateforme. Il peut s'agir des éléments suivants :";
$private_policy_section_2_list = [
"Données d'identité : nom, prénom et date de naissance, à des fins de vérification de l'âge et de l'identité.",
"Coordonnées : adresse e-mail, numéro de téléphone (lorsqu'il est communiqué), pays de résidence et, le cas échéant, adresse postale.",
"Données de compte et de transaction : informations de paiement, dépôts, retraits et historique des transactions.",
"Données techniques et d'usage : adresse IP, type de navigateur, caractéristiques de l'appareil, heures de connexion et journaux système.",
"Documents de vérification : pièces d'identité, justificatifs de domicile ou tout autre document requis dans le cadre des procédures de conformité KYC et LCB-FT."
];
$private_policy_section_2_note = "Nous ne collectons en principe aucune catégorie particulière de données personnelles, telles que des données de santé ou des convictions religieuses, sauf obligation légale ou autorisation explicite de votre part.";

$private_policy_section_3_heading = "3. Modalités de collecte des données";
$private_policy_section_3_text = "Vos données peuvent être collectées par plusieurs canaux sécurisés :";
$private_policy_section_3_list = [
"Directement auprès de vous, par exemple lors de votre inscription, de la mise à jour de votre profil, de la vérification de vos documents ou d'un échange avec le support.",
"Automatiquement, par le biais des cookies, des journaux serveur, des outils de mesure d'audience et des informations relatives à votre appareil lorsque vous utilisez la plateforme.",
"Auprès de tiers de confiance, tels que les prestataires de paiement, les services de vérification d'identité ou les fournisseurs de connexion via les réseaux sociaux lorsque vous choisissez d'y recourir."
];

$private_policy_section_4_heading = "4. Finalités du traitement";
$private_policy_section_4_text = "Nous traitons vos données personnelles uniquement pour des finalités légitimes et clairement définies :";
$private_policy_section_4_list = [
"Créer, gérer et maintenir votre compte utilisateur ainsi que votre accès aux fonctionnalités de la plateforme.",
"Traiter et sécuriser les dépôts, les retraits et les opérations de paiement.",
"Assurer le service client et répondre à vos demandes.",
"Respecter nos obligations légales et réglementaires, notamment en matière de KYC, de LCB-FT et de fiscalité.",
"Garantir la sécurité de la plateforme et prévenir la fraude, les abus et les accès non autorisés.",
"Améliorer les performances, les fonctionnalités et l'ergonomie de la plateforme.",
"Vous adresser des communications marketing et des actualités lorsque vous y avez expressément consenti."
];

$private_policy_section_5_heading = "5. Bases légales du traitement";
$private_policy_section_5_list = [
"L'exécution d'un contrat ou de mesures précontractuelles prises à votre demande.",
"Le respect d'obligations légales, notamment en matière de lutte contre le blanchiment de capitaux et d'exigences réglementaires.",
"Nos intérêts légitimes, tels que le maintien de la sécurité, de la fiabilité et de la stabilité opérationnelle de la plateforme.",
"Votre consentement explicite, par exemple pour la réception de communications marketing ou l'utilisation de fonctionnalités facultatives."
];

$private_policy_section_6_heading = "6. Partage des données";
$private_policy_section_6_text = "Vos données ne sont partagées qu'en cas de nécessité et exclusivement avec des prestataires et partenaires soigneusement sélectionnés :";
$private_policy_section_6_list = [
"Prestataires de services de paiement et établissements bancaires, pour le traitement des transactions.",
"Prestataires spécialisés intervenant dans la vérification d'identité et les contrôles de conformité.",
"Fournisseurs de solutions technologiques et de services cloud, encadrés par des accords de sous-traitance appropriés.",
"Prestataires de mesure d'audience et de sécurité qui, dans la mesure du possible, exploitent des données anonymisées ou pseudonymisées.",
"Conseils externes, tels que des avocats ou des experts fiscaux, lorsque cela est nécessaire.",
"Autorités de régulation, juridictions ou autorités répressives, lorsque la loi nous y oblige."
];
$private_policy_section_6_note = "Nous ne vendons, ne louons ni ne transférons vos données personnelles à des tiers à des fins commerciales.";

$private_policy_section_7_heading = "7. Transferts internationaux de données";
$private_policy_section_7_text = "Certains prestataires, notamment nos partenaires d'hébergement cloud ou de mesure d'audience, peuvent opérer en dehors de votre juridiction. Lorsqu'un transfert international de données a lieu, nous mettons en place des garanties appropriées, telles que des clauses contractuelles types ou d'autres mécanismes juridiques reconnus, afin d'assurer un niveau de protection adéquat.";

$private_policy_section_8_heading = "8. Sécurité des données";
$private_policy_section_8_text = "Nous mettons en œuvre des mesures techniques et organisationnelles complètes pour protéger vos données :";
$private_policy_section_8_list = [
"Chiffrement des données en transit à l'aide de protocoles de sécurité modernes tels que TLS 1.3+.",
"Chiffrement robuste des données sensibles au repos, au moyen de technologies telles qu'AES-256.",
"Évaluations de sécurité régulières, tests d'intrusion et audits indépendants.",
"Surveillance continue des activités suspectes et des menaces potentielles.",
"Contrôles d'accès stricts et gestion des habilitations par rôle pour le personnel autorisé.",
"Cantonnement des fonds des clients auprès de partenaires financiers réglementés."
];
$private_policy_section_8_note = "Aucun système de sécurité ne peut offrir une protection absolue ; nous travaillons néanmoins en permanence à réduire les risques et à maintenir un niveau de sécurité élevé.";

$private_policy_section_9_heading = "9. Durée de conservation";
$private_policy_section_9_text = "Vos données personnelles ne sont conservées que le temps nécessaire à la réalisation des finalités décrites dans la présente politique ou au respect de nos obligations légales :";
$private_policy_section_9_list = [
"Pendant toute la durée de votre compte actif et de notre relation contractuelle.",
"Pendant les durées supplémentaires imposées par des obligations fiscales, réglementaires ou légales.",
"Jusqu'au retrait de votre consentement, lorsque le traitement repose uniquement sur celui-ci."
];
$private_policy_section_9_note = "Lorsque les données ne sont plus nécessaires, elles sont supprimées de façon sécurisée ou anonymisées de manière irréversible.";

$private_policy_section_10_heading = "10. Vos droits";
$private_policy_section_10_text = "Dans les limites prévues par la loi applicable, vous pouvez exercer les droits suivants sur vos données personnelles :";
$private_policy_section_10_list = [
"Demander l'accès aux données que nous détenons à votre sujet.",
"Demander la rectification de données inexactes ou incomplètes.",
"Demander l'effacement de vos données, lorsque la loi le permet.",
"Demander la limitation du traitement dans certaines situations.",
"Recevoir vos données dans un format structuré, couramment utilisé et lisible par machine.",
"Retirer à tout moment un consentement précédemment accordé.",
"Introduire une réclamation auprès de l'autorité de protection des données compétente."
];

$private_policy_section_11_heading = "11. Cookies et technologies similaires";
$private_policy_section_11_text = "Nous utilisons des cookies et des technologies similaires pour assurer le bon fonctionnement de la plateforme, analyser son utilisation et améliorer votre expérience. Les cookies essentiels sont toujours actifs, tandis que les cookies de mesure d'audience et de marketing requièrent votre consentement. Vous trouverez davantage de précisions dans notre politique relative aux cookies.";
$private_policy_google_choices = 'Vous pouvez gérer la façon dont Google utilise les informations issues de vos visites depuis les <a href="http://www.google.com/settings/ads" target="_blank" rel="noopener">paramètres des annonces Google</a>, refuser la publicité par centres d\'intérêt à l\'aide du <a href="https://tools.google.com/dlpage/gaoptout" target="_blank" rel="noopener">module complémentaire de navigateur pour la désactivation de Google Analytics</a>, ou consulter la <a href="https://www.google.com/intl/en/policies/privacy/" target="_blank" rel="noopener">politique de confidentialité de Google</a> pour en savoir plus.';

$private_policy_section_12_heading = "12. Modifications de la présente politique de confidentialité";
$private_policy_section_12_text = "Nous pouvons être amenés à mettre à jour la présente politique de confidentialité en raison d'évolutions légales, réglementaires ou opérationnelles. La version la plus récente est toujours disponible sur le site. En cas de changement significatif, nous pourrons vous en informer par e-mail ou par notification sur la plateforme.";

$private_policy_section_13_heading = "13. Contact – protection des données";
$private_policy_section_13_text = "Pour toute question relative à la confidentialité, à la présente politique ou à l'exercice de vos droits, contactez-nous par e-mail à l'adresse $site_gmail ou via le formulaire de contact du site. Nous examinerons votre demande et y répondrons dans les meilleurs délais.";

$private_policy_agreement = "En utilisant $source, vous reconnaissez avoir lu et compris la présente politique de confidentialité et vous en acceptez les termes.";

$private_policy_thank_you = "Merci de votre confiance. Protéger vos données et respecter votre vie privée restera toujours au cœur des engagements de $source.";

// ---------------------------------------------------------------------------------------------------

// REGISTRATION
$register_heading = "Lancez-vous avec $source dès aujourd'hui et démarrez en quelques minutes";

// ==========================================
// RISK WARNING PAGE
// ==========================================
$page_title_risk_warning = "Avertissement sur les risques | $source";
$page_description_risk_warning = "Comprenez les risques du trading automatisé de cryptomonnaies avec $source : volatilité des marchés, risque d'exécution et enjeux réglementaires.";
$risk_warning_heading = "Avertissement sur les risques";
$risk_warning_intro = "Comprendre les risques est la première étape vers un trading serein.";

$risk_warning_ai_heading = "Comment notre système d'IA contribue à maîtriser le risque :";
$risk_warning_ai_list = [
    "<strong>Efficacité algorithmique et trading sans émotion :</strong> des algorithmes avancés analysent les signaux de marché pour exécuter les transactions de façon objective, au moment le plus opportun.",
    "<strong>Des stratégies fondées sur les données :</strong> nos stratégies reposent sur des configurations de marché vérifiées et une analyse en temps réel, jamais sur l'intuition.",
    "<strong>Réglages flexibles et contrôle total :</strong> ajustez vos paramètres de risque à tout moment. Suivez l'ensemble de vos soldes et de vos transactions en toute transparence depuis votre tableau de bord, sans frais cachés et avec des retraits sans restriction.",
];

$risk_warning_disclaimer = "<strong>Avertissement :</strong> le trading comporte toujours un risque. Les systèmes automatisés, y compris ceux fondés sur l'IA, ne garantissent aucun gain, peuvent défaillir en raison d'erreurs logicielles ou d'événements de marché imprévus et nécessitent une surveillance de la part de l'utilisateur. Les performances passées ne préjugent pas des résultats futurs. Cette plateforme poursuit une finalité purement informative et promotionnelle et ne constitue en aucun cas un conseil financier.";

$risk_warning_s1_heading = "1. Risques généraux et risques du marché des cryptomonnaies";
$risk_warning_s1_intro = "Les cryptomonnaies sont des actifs spéculatifs très volatils, négociés 24 h/24 et 7 j/7, avec une supervision réglementaire limitée dans la plupart des juridictions.";
$risk_warning_s1_list = [
    "Leur valeur peut varier fortement en très peu de temps, jusqu'à entraîner la perte totale du capital investi.",
    "Les cours peuvent être lourdement affectés par des évolutions réglementaires, des développements techniques, des failles de sécurité ou des événements macroéconomiques plus larges.",
    "Certains actifs peuvent perdre l'intégralité de leur valeur. N'investissez que des sommes dont vous pouvez assumer la perte.",
];

$risk_warning_s2_heading = "2. Risques d'exécution, de liquidité et d'effet de levier";
$risk_warning_s2_list = [
    "<strong>Volatilité et liquidité du marché :</strong> des mouvements de prix extrêmes (plus de 10 à 20 % par jour) ou une faible liquidité (en particulier sur les crypto-actifs de petite capitalisation) peuvent provoquer des retards, des indisponibilités de la plateforme et un slippage d'exécution important. Les ordres stop-loss ne garantissent pas la limitation des pertes dans des conditions extrêmes.",
    "<strong>Risques liés à l'effet de levier et à la marge :</strong> les produits à effet de levier amplifient aussi bien les gains que les pertes, ce qui signifie que vous pouvez perdre davantage que votre dépôt initial. Environ 70 à 80 % des comptes d'investisseurs particuliers perdent de l'argent en négociant des produits à effet de levier.",
];

$risk_warning_s3_heading = "3. Risques techniques, de cybersécurité et liés aux tiers";
$risk_warning_s3_list = [
    "<strong>Facteurs techniques :</strong> le trading en ligne comporte par nature des risques de coupure de connexion Internet, de panne matérielle ou logicielle et d'indisponibilité de service.",
    "<strong>Cybersécurité :</strong> les comptes de cryptomonnaies sont des cibles fréquentes d'hameçonnage, de logiciels malveillants et de piratage. Les transactions sont irréversibles : la compromission de vos identifiants peut entraîner une perte définitive.",
    "<strong>Plateformes tierces :</strong> ce site peut mettre les utilisateurs en relation avec des plateformes tierces. Nous ne contrôlons, ne cautionnons ni ne garantissons leur sécurité, leur fonctionnement ou leur solvabilité. Effectuez toujours vos propres vérifications avant de déposer des fonds sur une plateforme externe.",
];

$risk_warning_s4_heading = "4. Aspects réglementaires, fiscaux et dispositions finales";
$risk_warning_s4_list = [
    "<strong>Conformité légale et fiscalité :</strong> les cadres réglementaires varient fortement d'un pays à l'autre et évoluent rapidement. Il appartient à chaque utilisateur de s'assurer que son activité de trading respecte la législation locale et de remplir lui-même ses obligations fiscales.",
    "<strong>Aucune garantie de gain :</strong> il n'existe pas de trading de cryptomonnaies \"sûr\" ou sans risque. Tout chiffre de rendement ou exemple de performance est purement hypothétique.",
    "<strong>Adéquation :</strong> si vous ne comprenez pas pleinement les risques, si vous engagez des fonds dont vous avez besoin ou si vous investissez de l'argent emprunté, le trading de cryptomonnaies ne vous convient pas. En cas de doute, consultez un conseiller financier indépendant et agréé.",
];

$risk_warning_contact = "<strong>Contact :</strong> pour toute question relative à cette déclaration ou pour nous adresser une demande, contactez notre service client officiel via le formulaire de contact disponible sur notre site.";
$footer_link_risk_warning = "Avertissement sur les risques";
?>
