<?php
// MANUAL
$site_name = "$source";
$site_url = "https://{{DOMAIN}}";
$site_domain = parse_url($site_url, PHP_URL_HOST);
$app_price = 250;
$rating_value = 4.7;
$rating_count = 2648;
$review_count = 112; // fixed (not randomized per page load) per JSON-LD requirements
$app_currency = "EUR";
$site_lang = "en-US";
$country_name = "United Kingdom"; // default -- overwritten per-launch by generate_lang_files() via country_name= (see core/lang_pipeline.py)

// Photos
$crypto_img = "images/crypto_main.webp";

$main_h1 = "Algorithmic Trading Platform <span>$source</span> | Real-Time Execution Infrastructure";
$main_p = "Access institutional-grade high-frequency analytics and quantitative routing. Registration currently open for verified clients in <span>$country_name</span>";

// Testimonial Names
$feedback_strong_1 = "Giulia Martellini";
$feedback_strong_2 = "Elena Pugliese";
$feedback_strong_3 = "Lorenzo Bianchi";
$feedback_strong_4 = "Valentina Ricci";
$feedback_strong_5 = "Nicola Moretti";
$feedback_strong_6 = "Giulio Ferraro";

$feedback_description_1 = "I had no prior experience with automated order routing. The clean interface and automated risk management parameters made navigating digital asset markets structured and transparent.";
$feedback_description_2 = "The order execution speed via non-custodial APIs and clear transactional logging sold me. Within 30 days, I optimized my overall portfolio liquidity allocation significantly.";
$feedback_description_3 = "Verified my account and initialized initial automated parameters on day one. The integrated draw-down control mechanisms operate with exact precision.";
$feedback_description_4 = "$source completely streamlined my market exposure strategy. Automated execution allows systematic asset management without manual chart monitoring.";
$feedback_description_5 = "Outstanding quantitative infrastructure. I deployed three weeks ago, and the algorithmic precision in identifying exchange order-book inefficiencies is remarkable.";
$feedback_description_6 = "After seeking systematic asset diversification, this platform provided a stable and compliant automated setup. The technical onboarding team is prompt and highly proficient.";

// T,D MAIN
$page_title_main = "$source — Official Website | Algorithmic Trading Platform";
$page_description_main = "Discover $source: an automated quantitative trading platform powered by machine learning algorithms. Real-time market analytics, SOC 2 compliant protocols, and risk mitigation tools.";


// ==========================================
// CHAT-QUIZ TRANSLATIONS & CONFIGURATION
// ==========================================

$quiz_consultant_name = 'Sophia';
$quiz_consultant_role = 'Onboarding Specialist';

$quiz_text_welcome   = "Hello! I am $quiz_consultant_name, your personal onboarding assistant for account activation on $site_name. Your allocation slot has been pre-approved. Let us configure your operational trading profile.";
$quiz_text_q1 = "To maintain strict compliance with international financial regulations, please confirm your primary jurisdiction of residence: $country_name";
$quiz_text_a1_yes    = "Yes, I am currently residing in this location";
$quiz_text_a1_no     = "No";

$quiz_text_q2 = "Select your age demographic to configure appropriate institutional risk parameters:";

$quiz_text_q3        = "Do you maintain an active institutional or personal bank account/card for capital allocation and withdrawal processing?";
$quiz_text_a3_yes    = "Yes, active account available";
$quiz_text_a3_no     = "Not available at this time";

$quiz_text_q4        = "Indicate your primary liquidity source to optimize algorithmic capital allocation:";
$quiz_text_a4_1      = "Employment Income / Self-Employed Professional";
$quiz_text_a4_2      = "Investment Yield / Capital Reserves";
$quiz_text_a4_3      = "Alternative Capital Sources";

$quiz_text_q5 = "Final verification step: A dedicated client relationship officer will reach out by phone to confirm account initialization. Calls occur between 11:00 AM and 8:00 PM. Is this window suitable?";
$quiz_text_a5_yes    = "Yes, this schedule is optimal";
$quiz_text_a5_no     = "I request an immediate priority contact";

$quiz_text_loader    = "Processing telemetry data and initializing cryptographic account keys...";
$quiz_text_final_ttl = "Account Provisioned Successfully! 🎉 Your operational space is initialized. Complete the secure registration below to access real-time exchange routing:";

$quiz_placeholder_fname = "First Name";
$quiz_placeholder_lname = "Last Name";
$quiz_placeholder_email = "Email Address";
$quiz_placeholder_phone = "Phone Number";
$quiz_btn_submit = "Activate Account";
$quiz_text_typing       = "is preparing response...";
$quiz_text_processing   = "Validating inputs...";


// T,D ABOUT
$page_title_about = "About Us | $source – Algorithmic Trading Infrastructure";
$page_description_about = "Learn about $source: engineering standards, TLS 1.3/AES-256 security architecture, and high-frequency machine learning infrastructure for systematic trading.";

// T,D CONDITIONS
$page_title_conditions = "Terms and Conditions | $source – Regulatory Specifications";
$page_description_conditions = "Review official Terms and Conditions for $source. Information regarding API usage, operational boundaries, user responsibilities, and system governance.";

// T,D CONTACT
$page_title_contact = "Contact & Support | $source – Technical Assistance";
$page_description_contact = "Contact the technical support team at $source for onboarding guidance, API access issues, and security parameter configuration.";

// T,D PRIVATE
$page_title_private = "Privacy Policy | $source – Data Protection Protocol";
$page_description_private = "Understand how $source processes, secures, and isolates personal data under global GDPR guidelines and institutional information security standards.";

// T,D REGISTER
$page_title_register = "Account Registration | $source – Access Platform";
$page_description_register = "Initialize an account on $source to gain low-latency access to automated market execution via machine learning quantitative models.";


// Form
$contact_form_fname = "First Name";
$contact_form_lname = "Last Name";
$contact_form_email = "Email Address";
$contact_form_submit = "Initialize Access";


// Header
$nav_investors = "Institutional Insights";
$nav_steps = "Infrastructure Setup";
$nav_trade = "Execution Pairs";
$nav_advantages = "Technical Specs";
$nav_statistics = "System Metrics";
$nav_feedback = "Client Performance";
$button_register = "Initialize Access";


// Footer
$footer_about = "About Us";
$footer_contact = "Support";
$footer_registration = "Registration";
$footer_terms = "Terms of Service";
$footer_privacy = "Privacy Policy";
$footer_rights = "© $source 2026. All rights reserved.";

// Main
$leaders_badge = "Market Commentary";
$leaders_title = "Industry perspective on quantitative execution and systematic automation:";
$leader1_text = "Discipline and quantitative risk mitigation form the foundation of capital preservation. Integrating algorithmic routing and deterministic models removes emotional friction, making execution precise and structurally sound across volatile assets.";
$leader1_name = "— Warren Buffett";
$leader1_position = "Chairman & CEO, Berkshire Hathaway";
$leader2_text = "Global liquidity markets are rapidly shifting toward high-frequency automated execution. Combining quantitative statistical models with neural network adjustments provides investors with a transparent architecture for systematic growth.";
$leader2_name = "— Larry Fink";
$leader2_position = "Chairman & CEO, BlackRock";
$leader3_text = "Technological breakthroughs in liquidity aggregation and order routing have redefined institutional finance. Machine learning models applied to market telemetry ensure optimal execution with deterministic draw-down limits.";
$leader3_name = "— Jamie Dimon";
$leader3_position = "Chairman & CEO, JPMorgan Chase";


$steps_badge = "Integration";
$steps_title = "Initialize execution infrastructure in three structured steps";
$step1_number = "Phase 1";
$step1_title = "Identity & Access Provisioning";
$step1_text = "Submit verified identity parameters through our compliant onboarding form. Receive verification confirmation from a dedicated onboarding officer.";
$step2_number = "Phase 2";
$step2_title = "Capital Allocation";
$step2_text = "Allocate minimum working capital starting from $app_price $app_currency to fund execution routing and trigger algorithmic models.";
$step3_number = "Phase 3";
$step3_title = "Automated System Deployment";
$step3_text = "Deploy automated execution nodes. The algorithm scans market depth 24/7 while enforcing mandatory risk mitigation and Stop-Loss parameters.";
$steps_button = "Initialize Access";


$trades_badge = "Real-Time Telemetry";
$trades_title = "$source employs Machine Learning models to capture liquidity micro-inefficiencies";
$trade_btc_name = "BTC / EUR";
$trade_btc_value = "+ €9,071.50";
$trade_eth_name = "ETH / EUR";
$trade_eth_value = "+ €1,156.57";
$trade_ltc_name = "LTC / EUR";
$trade_ltc_value = "+ €90.04";
$trade_eos_name = "EOS / EUR";
$trade_eos_value = "+ €14.01";
$trade_xrp_name = "XRP / EUR";
$trade_xrp_value = "+ €0.60";


$advantages_badge = "Technical Architecture";
$advantages_title = "Access high-frequency quantitative market routing";
$advantages_card_badge = "Infrastructure";
$adv1_title = "Cross-Platform API Interoperability";
$adv1_text = "$source operates seamlessly via web interface across desktop, mobile, and workstation browsers without requiring localized software installation.";
$adv2_title = "Low-Latency High-Frequency Execution";
$adv2_text = "Proprietary HFT order-routing algorithms analyze exchange order-book depth to execute low-slippage position placement within milliseconds.";
$adv3_title = "Institutional Security Architecture";
$adv3_text = "Bespoke AES-256 data encryption and non-custodial read-only API connectors protect user capital reserves and operational privacy completely.";


$statistics_badge = "Operational Metrics";
$statistics_title = "Verified execution metrics and ecosystem throughput";
$statistics_description_top = "Operational transparency is central to the $source engineering ethos. Processed liquidity volumes and consistent institutional connection stability demonstrate the reliability of our algorithmic quantitative framework.";
$stat1_value = "€1.45";
$stat1_denomination = "Million";
$stat1_title = "Assets Under Infrastructure";
$stat2_value = "€0.87";
$stat2_denomination = "Million";
$stat2_title = "Systemic Yield Processed";
$stat3_value = "€0.29";
$stat3_denomination = "Billion";
$stat3_title = "Aggregate Execution Volume";
$statistics_description_bottom = "Our quantitative developers and security engineers maintain engine precision using strict slippage thresholds. $source offers a structured setup for capital diversification.";
$feedback = "Client Performance";
$recommendations = "Verified performance telemetry from operational users";


$join_title_main = "Take control of your execution strategy";
$join_title_accent = "– initialize your environment today.";

$places_title = "Automated Quantitative Platform <span style=\"white-space: nowrap\">$source</span> | Official Registration";
$places_remaining_text = "Allocation slots available for current server session";
$places_button = "Initialize Access";


// About Page
$about_title = "ABOUT US";
$about_paragraph_1 = "$source was established to provide systematic retail and institutional market participants with a high-performance, non-custodial environment for automated trading across digital and traditional assets. Our architecture is built upon deterministic statistical models that eliminate emotional trading bias.";
$about_paragraph_2 = "Our engineering team combines multi-disciplinary talent: deep learning neural network design, quantitative liquidity analysis, cyber-defense engineering, and financial regulatory compliance. Every engine update undergoes rigorous backtesting against years of tick-level market data before production deployment.";
$about_paragraph_3 = "Capital integrity and user data confidentiality constitute the core architectural requirements of $source. We deploy TLS 1.3 protocol encryption, physically segregated database layers, and strict GDPR-compliant data processing workflows to counter unauthorized access attempts.";
$about_paragraph_4 = "Alongside our quantitative software layer, we offer dedicated onboarding guidance. Every registered participant is paired with an onboarding officer to assist in calibrating exposure controls and setting custom risk parameters.";
$about_paragraph_5 = "Continuous empirical refinement of our mathematical models allows our execution nodes to dynamically adjust to changing market volatility regimes. We optimize routing logic constantly to ensure low latency and minimal slippage.";
$about_paragraph_6 = "Thousands of active accounts leverage $source as their primary infrastructure for systematic portfolio execution. Accessible entry capital thresholds allow participants to test platform performance before scaling operation size.";
$about_paragraph_7 = "In summary, $source provides a comprehensive quantitative execution ecosystem. We combine low-latency routing, flexible risk management settings, and strict compliance standards to optimize digital asset execution.";


// Contact
$contact_title = "TECHNICAL SUPPORT & CONTACT";
$contact_paragraph_1 = "Our infrastructure support team is available to handle operational, API integration, and security inquiries regarding the $source environment.";
$contact_subtitle = "Official Communications Channels";
$contact_paragraph_2 = "We provide dedicated technical support Monday through Friday (CET operating hours). Key operational areas managed by our support infrastructure include:";
$contact_list = [
    "Identity verification (KYC), account activation, and risk-profile configuration",
    "Technical platform troubleshooting, dashboard connectivity, and session key management",
    "Capital allocation status, exchange routing, and transaction settlement tracking",
    "Algorithmic execution logic details, API security settings, and draw-down parameters",
    "System telemetry bug reports, operational feedback, and platform optimization requests",
    "General compliance and security policy queries"
];
$contact_paragraph_3 = "Submit a inquiry through the contact form below to open a ticket. Support engineers respond to technical inquiries within 24 business hours.";


// Sign-up Page
$home_title = "DEPLOY WITH <span style=\"text-transform: uppercase\">$source</span> – ENVIRONMENT PROVISIONING IN MINUTES.";


// Conditions Page
$terms_title = "TERMS AND CONDITIONS";
$terms_1 = "These Terms and Conditions govern access to and usage of the $source quantitative execution software. By registering an account, you agree to comply with these terms. Usage is restricted strictly to legal adults with full legal capacity.";

$terms_2 = "System access may be briefly suspended or rate-limited during scheduled protocol upgrades, maintenance windows, or extraordinary market volatility events requiring exchange socket resetting.";

$terms_3 = "All intellectual property rights associated with $source software, algorithmic models, trade interfaces, and brand assets remain the exclusive property of the operating company.";

$terms_4 = "Users must provide accurate, verified identification details. Financial trading carries inherent risk of capital loss. $source provides execution software and does not act as a licensed personal financial advisor.";

$terms_5 = "Processing of operational and personal data adheres to strict international security frameworks and European Union GDPR regulations.";

$terms_6 = "We reserve the right to amend these Terms and Conditions as operational or legal requirements change. Amendments take effect upon publication to the site.";


// Private Page
$privacy_title = "PRIVACY POLICY";

$privacy_1 = "Safeguarding user privacy and transactional data security is a foundational commitment at $source. This policy outlines data collection, processing, and storage security methodologies.";

$privacy_2 = "We collect only data required for service provisioning, including identity parameters, contact details, encrypted connection telemetry, and execution logging.";

$privacy_3 = "Data is processed strictly to maintain secure system access, execute automated trade requests, comply with regulatory Anti-Money Laundering (AML) mandates, and prevent fraudulent activity.";

$privacy_4 = "Personal details are never sold or leased to third-party commercial entities. Data sharing is limited to authorized technical service providers and payment clearinghouses under strict NDA agreements.";

$privacy_5 = "We enforce physical, electronic, and procedural safeguards—including AES-256 data encryption and database isolation—to prevent unauthorized data access or leakages.";

$privacy_6 = "Users retain full rights to access, inspect, rectify, or request deletion of their personal data by contacting our Data Protection Officer (DPO).";

$privacy_google_choices = 'You can manage tracking and personalized ad preferences through <a href="http://www.google.com/settings/ads" target="_blank" rel="noopener">Google Ad Settings</a> or opt out of Google Analytics using the <a href="https://tools.google.com/dlpage/gaoptout" target="_blank" rel="noopener">Google Analytics Opt-out Browser Add-on</a>.';

$privacy_7 = "For additional details on data protection practices, contact our compliance team directly via email.";

// ==========================================
// CALCULATOR SECTION
// ==========================================
$calc_badge = "Yield Simulator";
$calc_title = "Simulate projected algorithmic performance with $source";
$calc_amount_label = "Capital Allocation";
$calc_term_label = "Calculation Window";
$calc_profit_label = "Estimated Algorithmic Yield";
$calc_total_label = "Projected Aggregate Capital";
$calc_btn = "Initialize Access";

// ==========================================
// SECURITY SECTION
// ==========================================
$security_badge = "Infrastructure Defense";
$security_title = "Institutional Security Architecture for Capital and Data";

$security_card1_title = "AES-256 Protocol Encryption";
$security_card1_desc = "All transit telemetry, user credentials, and session tokens are defended by TLS 1.3 protocols and AES-256 encryption standards.";

$security_card2_title = "Segregated Tier-1 Liquidity Pools";
$security_card2_desc = "User balances are held in segregated client accounts with regulated institutional liquidity providers and exchanges, isolated from operational company reserves.";

$security_card3_title = "Non-Custodial Read-Only API Integrations";
$security_card3_desc = "Automated execution connects via encrypted API keys restricted from withdrawal authorization. Capital remains permanently within your exchange account.";

$security_card4_title = "Automated Draw-Down Controls";
$security_card4_desc = "Strict Stop-Loss rules and slippage limits trigger automatically during market turbulence to safeguard underlying account equity.";

// ==========================================
// SEO-TEXT SECTION
// ==========================================
$seo_badge = "Overview";
$seo_title = "Quantitative Automated Execution Built for Modern Liquidity Markets";

$seo_p1 = "Navigating contemporary digital asset markets demands high execution velocity, low latency, and real-time order-book telemetry processing. <strong>$source</strong> provides an automated execution framework designed to mitigate human emotional error, optimize order routing, and evaluate market micro-inefficiencies 24/7.";

$seo_image_alt = "Algorithmic trading engine processing market data and generating risk-managed signal inputs";

$seo_feature1_title = "Mathematical Precision";
$seo_feature1_desc = "Executes trades based strictly on statistical probabilities and real-time technical indicators.";
$seo_feature2_title = "Institutional-Grade Defense";
$seo_feature2_desc = "Encrypted data layer and non-custodial API architecture for maximum account protection.";
$seo_feature3_title = "Real-Time Telemetry";
$seo_feature3_desc = "Continuous surveillance of global liquidity pools, order-book depth, and price spreads.";

$seo_subheading1 = "Operational Mechanics of the Quantitative Engine";
$seo_p2 = "The platform scans order-book depth across major global exchanges in real time. Utilizing liquidity monitoring and statistical arbitrage algorithms, <strong>$source</strong> flags price disparities before manual operators can react.";
$seo_p3 = "Instead of discretionary decision-making, users utilize explicit risk management rules that dynamically adjust profit targets and cap maximum downside drawdown. This ensures systematic performance during both trending and range-bound market environments.";

$seo_subheading2 = "Core Infrastructure Characteristics";
$seo_list1_strong = "Automated Order Routing:";
$seo_list1_text = "Eliminates execution lag between mathematical signal triggering and order placement.";
$seo_list2_strong = "Customizable Risk Boundaries:";
$seo_list2_text = "Define automated Stop-Loss thresholds and daily equity drawdown limits tailored to your strategy.";
$seo_list3_strong = "Non-Custodial Integration:";
$seo_list3_text = "Direct connection to verified exchanges via secure, read-only API connectors.";

$seo_p4 = "Deploying the system requires minimal technical configuration. Combining institutional market access with an intuitive dashboard, <strong>$source</strong> provides a professional framework for automated asset execution.";

// ==========================================
// FAQ SECTION (calculator/security block FAQ)
// ==========================================
$calc_faq_badge = "FAQ";
$calc_faq_title = "Frequently Asked Questions";

$calc_faq_q1 = "Is $source secure and non-custodial?";
$calc_faq_a1 = "Yes. <strong>$source</strong> interacts with connected exchanges using read-and-execute API keys. The system never retains withdrawal authorization, meaning your capital remains strictly under your custody at your destination exchange.";

$calc_faq_q2 = "How do the automated trading algorithms operate?";
$calc_faq_a2 = "The software continuously monitors exchange order books and liquidity metrics. When mathematical models detect a high-probability trade setup, micro-orders are submitted in milliseconds, eliminating manual execution delays.";

$calc_faq_q3 = "What is the minimum capital required for system deployment?";
$calc_faq_a3 = "The minimum working capital required to initialize automated execution is <strong>$app_price $app_currency</strong>. This threshold ensures the quantitative algorithm has adequate margin to fractionalize position entries and apply risk controls correctly.";

$calc_faq_q4 = "Is prior algorithmic or trading experience necessary?";
$calc_faq_a4 = "No specialized quantitative experience is required. <strong>$source</strong> handles analytical processing, order execution, and trade monitoring automatically once base risk parameters are established.";

$calc_faq_q5 = "Are there recurring subscription fees or hidden licensing costs?";
$calc_faq_a5 = "There are no monthly software subscription fees for standard platform interface usage. Registration is free, and 100% of allocated capital remains deployed toward trading operations.";

// ==========================================
// RISK WARNING PAGE
// ==========================================
$page_title_risk_warning = "Risk Disclosure | $source";
$page_description_risk_warning = "Official disclosure regarding financial risks, asset volatility, and operational boundaries associated with using $source software.";
$risk_warning_title = "Financial Risk Disclosure";
$risk_warning_intro = "Understanding operational and market risk is essential prior to deploying automated software on digital or traditional assets.";

$risk_warning_ai_heading = "How Our System Controls Systemic Risk:";
$risk_warning_ai_1 = "<strong>Disciplined Execution:</strong> Algorithmic logic evaluates telemetry parameters objectively, executing trade setups without emotional divergence.";
$risk_warning_ai_2 = "<strong>Data-Driven Strategies:</strong> Trade entries are calculated using probabilistic models and continuous real-time market data evaluation.";
$risk_warning_ai_3 = "<strong>Granular Parameter Customization:</strong> Users maintain direct control over leverage settings, position sizing limits, and Stop-Loss boundaries within their dashboard.";

$risk_warning_disclaimer = "<strong>General Disclaimer:</strong> Financial trading involves substantial risk of capital loss. Automated software does not guarantee profits or completely eliminate market risk. Past algorithmic performance is not a guaranteed indicator of future results. This site does not provide licensed financial advisory services.";

$risk_warning_s1_heading = "1. Market Volatility & Liquidity Risks";
$risk_warning_s1_intro = "Digital assets and leveraged instruments experience rapid, unpredictable price shifts and high volatility.";
$risk_warning_s1_1 = "Asset valuations can fluctuate sharply within brief timeframes, leading to potential partial or total loss of invested capital.";
$risk_warning_s1_2 = "Macroeconomic releases, regulatory shifts, and order-book liquidity gaps directly impact execution spreads and order fill accuracy.";
$risk_warning_s1_3 = "Participants should allocate only risk capital—funds that can be lost without endangering financial stability.";

$risk_warning_s2_heading = "2. Execution, Slippage, and Leverage Considerations";
$risk_warning_s2_1 = "<strong>Liquidity & Slippage:</strong> Extreme volatility events may cause order execution latency or price slippage. Stop-Loss orders cannot fully guarantee protection against sudden market gaps.";
$risk_warning_s2_2 = "<strong>Leverage Amplification:</strong> Utilizing leverage amplifies both potential gains and losses. Highly leveraged positions carry high risk and can result in rapid margin calls.";

$risk_warning_s3_heading = "3. Technical & Infrastructure Dependencies";
$risk_warning_s3_1 = "<strong>System Dependencies:</strong> Online trading involves reliance on internet infrastructure, API socket stability, power networks, and hardware functionality.";
$risk_warning_s3_2 = "<strong>Security Responsibility:</strong> Users must maintain strict security hygiene over account credentials and API keys to prevent unauthorized access.";

$risk_warning_s4_heading = "4. Regulatory & Tax Compliance";
$risk_warning_s4_1 = "<strong>Jurisdictional Rules:</strong> Regulatory frameworks governing digital assets vary by region. Users are responsible for verifying compliance within their local jurisdiction.";
$risk_warning_s4_2 = "<strong>Tax Obligations:</strong> Users bear full responsibility for reporting and remitting any applicable taxes arising from realized trade gains.";

$risk_warning_contact = "<strong>Inquiries:</strong> For questions regarding this risk disclosure, contact our technical compliance team via the contact section.";
$footer_risk_warning = "Risk Disclosure";
?>
