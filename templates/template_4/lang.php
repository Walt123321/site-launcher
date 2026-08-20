<?php
// MANUAL
$site_name = "Test";
$app_price = 250;
$site_domain = "{{DOMAIN}}";
$site_url = "https://$site_domain";
$rating_value = 4.6;
$rating_count = 2648;
$review_count = 134; // fixed per JSON-LD requirements
$app_currency = "EUR";
$site_lang = "en-US";
$country_name = "United Kingdom"; // default -- overwritten per-launch by generate_lang_files() via country_name= (see core/lang_pipeline.py)

// Reviews
$review_1_author = "Private Investor";
$review_2_author = "Independent Trader";
$review_3_author = "Digital Asset Trader";
$review_4_author = "Passive Income Seeker";

// MAIN TITLE/DESCRIPTION
$home_meta_title = "$site_name — Official Website | Quantitative Trading Platform";
$home_meta_description = "$site_name ⭐ — Institutional quantitative trading platform for real-time market execution and risk control ⚡ Deploy automated algorithms.";
$hero_text = "Experience precision trading with our quantitative platform. Driven by $site_name ML algorithms, optimize returns with low-latency execution.";


// ==========================================
// CHAT-QUIZ TRANSLATIONS & CONFIGURATION
// ==========================================

$quiz_consultant_name = 'Sophia';
$quiz_consultant_role = 'Onboarding Officer';

$quiz_text_welcome   = "Hello! I am $quiz_consultant_name from $site_name. Your access allocation is pre-approved. Let us set up your trading profile.";
$quiz_text_q1 = "To maintain regulatory compliance, please confirm your primary jurisdiction: $country_name";
$quiz_text_a1_yes    = "Yes, this is my current location";
$quiz_text_a1_no     = "No";

$quiz_text_q2 = "Select your age demographic to configure appropriate institutional risk parameters:";

$quiz_text_q3        = "Do you maintain an active bank account or card for daily capital allocation and settlements?";
$quiz_text_a3_yes    = "Yes, active account available";
$quiz_text_a3_no     = "Not available at this time";

$quiz_text_q4        = "Indicate your primary source of capital to optimize system risk settings:";
$quiz_text_a4_1      = "Employment Income / Self-Employed";
$quiz_text_a4_2      = "Investment Yield / Personal Reserves";
$quiz_text_a4_3      = "Alternative Capital Sources";

$quiz_text_q5 = "Final step: An onboarding officer will call to confirm account activation between 11:00 AM and 8:00 PM. Is this window suitable?";
$quiz_text_a5_yes    = "Yes, this window is optimal";
$quiz_text_a5_no     = "Request immediate priority contact";

$quiz_text_loader    = "Processing telemetry and initializing cryptographic session keys...";
$quiz_text_final_ttl = "Account Authorized Successfully! 🎉 Workspace initialized. Complete registration below to enable real-time routing:";

$quiz_placeholder_fname = "First Name";
$quiz_placeholder_lname = "Last Name";
$quiz_placeholder_email = "Email Address";
$quiz_placeholder_phone = "Phone Number";
$quiz_btn_submit = "Activate Account";
$quiz_text_typing       = "is preparing response...";
$quiz_text_processing   = "Validating inputs...";


// TITLE/DESCRIPTION
$sign_meta_title = "Sign Up | $site_name";
$sign_meta_description = "Initialize access to $site_name quantitative execution infrastructure.";
$product_meta_title = "Product Infrastructure | $site_name";
$product_meta_description = "Low-latency market execution tools, algorithmic routing, and automated risk parameters.";
$privacy_meta_title = "Privacy Policy | $site_name Data Security";
$privacy_meta_description = "Learn how $site_name protects user privacy under strict international encryption standards.";
$offer_meta_title = "System Activation | $site_name";
$offer_meta_description = "Select account configuration parameters for automated market routing with $site_name.";
$faq_page_meta_title = "FAQ | $site_name Support & Specifications";
$faq_page_meta_description = "Technical documentation and answers regarding execution speed, security, and API access.";
$contacts_meta_title = "Contact & Support | $site_name";
$contacts_meta_description = "Reach out to $site_name technical support for account setup and API guidance.";
$conditions_meta_title = "Terms of Use | $site_name Governance";
$conditions_meta_description = "Review official terms, conditions, and operational parameters for $site_name.";

// FORM (Compact UI layout)
$form_name = "First Name";
$form_name_placeholder = "Enter your First Name";
$form_surname = "Last Name";
$form_surname_placeholder = "Enter your Last Name";
$form_email = "Email";
$form_email_placeholder = "Enter your Email";
$form_phone = "Phone";
$form_submit = "Sign Up Now";
$form_text = "By entering your personal information and clicking the button, you accept the";
$form_text_privacy = "Privacy Policy";
$form_text_privacy_and = "and";
$form_text_conditions = "Terms of Use";
$form_text_conditions_of = "of the website.";
$form_text_risk_warning_note = "Please also review our";

// MAIN PAGE
// Header
$mobnav_home = "Home";
$mobnav_product = "Product";
$mobnav_offer = "Offer";
$mobnav_contact = "Contact us";
$mobnav_faq = "FAQ";
$mobnav_signup = "Sign up";

// Footer
$footnav_home = "Home";
$footnav_product = "Product";
$footnav_offer = "Offer";
$footnav_contact = "Contact us";
$footnav_faq = "FAQ";
$footnav_privacy = "Privacy Policy";
$footnav_conditions = "Conditions of Use";
$footer_partner_text = "Your trusted quantitative trading partner";
$footer_disclaimer = "$site_name provides quantitative execution software. Trading financial instruments carries inherent risk of capital loss. Past algorithmic performance does not guarantee future results. Ensure capital allocation matches your risk boundaries before deploying automated systems.";
$footer_copyright = "Copyright 2026 © $site_name, All Rights Reserved";

// Hero
$hero_title = "$site_name PLATFORM";
$hero_description = "Step into the future of trading with our advanced crypto platform. Powered by $site_name AI technology, optimize returns with data-driven execution.";

// Stats
$stats_currencies_val = "70+";
$stats_currencies_text = "Currencies available";
$stats_users_val = "42m";
$stats_users_text = "Verified users";
$stats_volume_val = "$440m";
$stats_volume_text = "Trading volume";
$stats_countries_val = "100+";
$stats_countries_text = "Supported countries";

// Features (Strictly shortened to fit card grid)
$choice_heading = "WHY CHOOSE $site_name?";
$choice_text = "Trusted by modern traders, this platform sets a new execution standard with top-tier security, transparent routing, and advanced quantitative models.";
$choice_footer_text = "Transform your financial experience with $site_name ™.";
$choice_btn_signup = "Register";
$feat_surety_title = "Security You Can Trust";
$feat_surety_text = "SOC 2 Type II compliance and AES-256 encryption at every step.";
$feat_personal_title = "Tailored Experience";
$feat_personal_text = "Customize risk limits and position rules to fit your exact strategy.";
$feat_ai_title = "Smart AI Strategies";
$feat_ai_text = "Machine learning models identify order-book micro-inefficiencies.";
$feat_auto_title = "Automated Trading";
$feat_auto_text = "Low-latency bots executing trades 24/7 with zero emotional bias.";
$feat_interface_title = "Effortless Interface";
$feat_interface_text = "Intuitive control panel designed for instant deployment and monitoring.";

// Trading
$trade_heading = "EFFICIENT TRADING!";
$trade_text = "Trade cryptocurrencies like Bitcoin, Ethereum, and XRP with sub-millisecond execution.";
$trade_btn_start = "Get Started";

// Features Section
$global_heading = "GLOBAL TRADING PLATFORM <span>BUILT FOR SCALE</span>";
$global_description = "Access multiple financial markets through a unified infrastructure engineered for precision, speed, and institutional reliability.";
$feature_market_title = "Multi-market access";
$feature_market_text = "Execute across crypto, forex, and equities from a single integrated workspace.";
$feature_execution_title = "Fast execution";
$feature_execution_text = "Optimized routing ensures minimal slippage and ultra-low latency execution.";
$feature_analytics_title = "Real-time analytics";
$feature_analytics_text = "Live telemetry and quantitative indicators support precise trading choices.";
$feature_market_alt = "Multi-market trading ecosystem";
$feature_execution_alt = "Ultra-fast trade execution";
$feature_analytics_alt = "AI-powered real-time analytics";

// ==========================================
// CALCULATOR SECTION
// ==========================================
$calc_badge = "Trading Efficiency";
$calc_title = "CALCULATE YOUR PERFORMANCE BOOST WITH $site_name";
$calc_volume_label = "Monthly Trading Volume";
$calc_trades_label = "Weekly Trades Frequency";
$calc_time_label = "Time Saved on Market Analysis";
$calc_boost_label = "Estimated Execution Yield Gain";
$calc_btn = "Start Automating Now";

// Partners
$partners_heading = "OUR PARTNERS";

// Steps
$steps_heading = "HOW $site_name WORKS: YOUR QUICK START GUIDE";
$steps_description = "Begin your trading journey effortlessly. Follow three simple phases to provision your workspace and initialize automated execution.";
$step_1_title = "Create your account";
$step_1_text = "Sign up in minutes to receive secure credentials and dashboard access.";
$step_2_title = "Confirm your access";
$step_2_text = "Complete identity verification to unlock full system execution parameters.";
$step_3_title = "$site_name login";
$step_3_text = "Initialize working capital with a minimum of $app_price $app_currency to trigger liquidity routing.";
$step_4_title = "Fund your account";
$step_4_text = "Choose your preferred funding channel—card, bank transfer, or crypto transfer.";
$step_5_title = "Set your strategy";
$step_5_text = "Configure draw-down limits and risk parameters or deploy pre-set ML strategies.";
$step_6_title = "Start trading";
$step_6_text = "Deploy automated execution nodes and monitor performance telemetry live.";
$steps_btn_start = "Start Trading";

// Reviews
$rev_heading = "$site_name ™ REVIEWS";
$review_1_text = "$site_name pleasantly surprised me. Sign-up was fast, parameters are clear, and support is prompt. Execution feels clean and stable.";
$review_2_text = "Testing automated routing with $site_name was painless. Setup took minutes and draw-down limits operate with high precision.";
$review_3_text = "A reliable, transparent execution environment. Interface is clean, order routing is immediate, and non-custodial API access offers complete peace of mind.";
$review_4_text = "Quantitative trading no longer feels overly complex. Onboarding was smooth, and automated risk controls prevent unexpected exposure.";

// FAQ
$faq_main_title = "FAQ";
$faq_1_q = "How do I get started?";
$faq_1_a = "Register your profile, complete verification, and allocate a minimum capital of $app_price $app_currency to activate automated execution tools instantly.";
$faq_2_q = "Is my money and data safe? Is $site_name reliable?";
$faq_2_a = "Yes. System architecture utilizes TLS 1.3 protocol encryption, non-custodial read-only API connectors, and segregated Tier-1 exchange liquidity accounts.";
$faq_3_q = "When can I withdraw my profits?";
$faq_3_a = "Capital remains under your direct custody at destination exchanges. Withdrawals can be executed anytime without system lockups or extra fees.";
$faq_4_q = "How do I know if this platform is right for me?";
$faq_4_a = "The system is engineered for both beginners and experienced traders, offering automated rule-based trading alongside manual risk management tools.";
$faq_5_q = "Do I need trading experience to get started?";
$faq_5_a = "No prior experience is necessary. Automated quantitative strategies manage market analysis and execution once base parameters are established.";

// Accordion Expanded Content (Shortened paragraphs to prevent visual clutter)
$faq_6_q = "About the platform";
$faq_6_about_p1 = "$site_name is a quantitative trading platform designed for high-performance market access, low-latency execution, and deterministic risk management across digital assets.";
$faq_6_about_p2 = "Our architecture integrates data analytics, order routing, and capital safeguards into a unified, friction-free workflow.";
$faq_6_about_list_title = "Key market coverage within a single platform:";
$faq_6_about_li1 = "Major and emerging cryptocurrency asset pairs";
$faq_6_about_li2 = "Foreign exchange instruments with real-time telemetry";
$faq_6_about_li3 = "Global equity index derivatives";
$faq_6_about_li4 = "Commodity markets for portfolio diversification";
$faq_6_about_p3 = "System infrastructure is optimized for sub-millisecond execution to maintain order stability even during volatile market events.";
$faq_6_about_li5 = "Deterministic low-latency order execution";
$faq_6_about_li6 = "Continuous order-book tick-data updates";
$faq_6_about_li7 = "Built-in statistical analysis indicators";
$faq_6_about_li8 = "Support for both automated and manual execution modes";
$faq_6_about_p4 = "Security safeguards include AES-256 encrypted transit, multi-factor authentication, and strict compliance protocols.";
$faq_6_about_li9 = "End-to-end encrypted session telemetry";
$faq_6_about_li10 = "Multi-tier identity verification standards";
$faq_6_about_li11 = "Real-time automated transaction logging";
$faq_6_about_li12 = "Distributed cloud architecture for high uptime";
$faq_6_about_p5 = "The interface remains clean and predictable, reducing operational friction while maintaining advanced technical capability.";
$faq_6_about_p6 = "This balance allows new operators to onboard rapidly while providing experienced traders with exact parameter flexibility.";
$faq_6_about_footer = "$site_name combines scalability and reliability to provide a dependable environment for systematic asset trading.";

// Payment
$pay_methods_text = "$site_name accepts global payment methods including credit cards and wire transfers.";

// Register Down
$official_heading = "This is trading with the official platform™";
$official_description = "We provide institutional-grade software for individuals and enterprises to execute digital asset strategies.";

// Core Capabilities Table (Strictly matched to UI Table widths)
$core_heading = "CORE CAPABILITIES OF THE <span style='color:#6B5FA7;'>$site_name TRADING PLATFORM</span>";
$core_description = "Everything you need to trade smarter, faster, and with confidence.";
$row_tech_title = "Platform Technology";
$row_tech_val = "Advanced AI-powered trading engine";
$row_funding_title = "Funding Methods";
$row_funding_val = "Credit cards, bank transfers, PayPal";
$row_access_title = "Platform Access";
$row_access_val = "Multi-device web compatibility";
$row_perf_title = "Performance";
$row_perf_val = "Up to 85% execution accuracy";
$row_instruments_title = "Trading Instruments";
$row_instruments_val = "Crypto, Forex, Stocks, Commodities";
$row_setup_title = "Account Setup";
$row_setup_val = "Fast and efficient onboarding";
$row_support_title = "Customer Support";
$row_support_subtitle = "24/7 professional assistance";
$row_support_btn = "Contact";

// Trust / Social Proof
$trust_heading = "$site_name Reviews";
$trust_badge_text = "Trusted";
$trust_reviews_count = "318";
$trust_summary_text = "A powerful and user-friendly trading platform with robust automation and comprehensive resources.";
$trust_stat_reviews = "reviews";
$trust_stat_based = "Based on";
$trust_stat_ratings = "ratings";
$trust_stat_score = "Score out of 5";

// SIGN PAGE
$breadcrumb_home = "Home";
$breadcrumb_current = "Sign-in/up";

// PRODUCT PAGE
$breadcrumb_product = "Product";
$analytics_heading = "Digital Analytics $site_name ™";
$analytics_description = "Gain valuable insights with our quantitative analytics platform. Drive data-backed execution decisions with confidence.";
$analytics_btn_signup = "Sign Up";
$app_main_heading = "Digital Web Application";
$app_feature_1_title = "Capital market";
$app_feature_1_text = "Direct market execution at your fingertips";
$app_feature_2_title = "Stats";
$app_feature_2_text = "Comprehensive performance metrics";
$app_feature_3_title = "Mobile view";
$app_feature_3_text = "Optimized for mobile browsers";
$app_feature_4_title = "Asset management";
$app_feature_4_text = "Multi-asset portfolio tracking";
$app_img_alt = "Portfolio tracking mobile interface";
$products_stats_currencies_v = "70+";
$products_stats_currencies_l = "Currencies available";
$products_stats_users_v = "42m";
$products_stats_users_l = "Verified users";
$products_stats_volume_v = "$440m";
$products_stats_volume_l = "Trading volume";
$products_stats_countries_v = "100+";
$products_stats_countries_l = "Supported countries";

// Capabilities
$capabilities_main_title = "Digital Features";
$capabilities_feature_1_title = "Portfolio Overview";
$capabilities_feature_1_text = "Track active positions and algorithmic performance across all connected exchanges.";
$capabilities_feature_2_title = "Instant Execution";
$capabilities_feature_2_text = "Secure platform for automated asset operations with low transaction fees.";
$capabilities_feature_3_title = "Crypto Analytics";
$capabilities_feature_3_text = "Analyze liquidity depth and order-book trends for structured decision-making.";
$capabilities_feature_4_title = "Digital Assets";
$capabilities_feature_4_text = "Explore automated execution across top-tier digital token pairs.";
$capabilities_cta_heading = "Let's Go!";
$capabilities_cta_text = "Access institutional algorithmic infrastructure engineered for modern liquidity markets.";

// PRIVACY PAGE
$privacy_breadcrumb_home = "Home";
$privacy_breadcrumb_current = "Privacy Policy";
$privacy_page_h1 = "Privacy Policy";
$last_update = "Last update";
$privacy_last_update = date('d.m.Y', strtotime('-1 day'));
$privacy_intro = "We respect your privacy and process personal data in full compliance with international standards and European GDPR regulations.";
$privacy_transparency_title = "Transparency";
$privacy_transparency_text = "We state clearly how operational telemetry is processed. Contact support for details.";
$privacy_usage_title = "Data Usage";
$privacy_usage_text = "Data is used solely to provision access, secure sessions, and fulfill compliance obligations.";
$privacy_rights_short_title = "Your Rights";
$privacy_rights_short_text = "You retain full rights to inspect, update, or request deletion of your personal data.";
$privacy_security_title = "Security";
$privacy_security_text = "We enforce AES-256 encryption and database isolation to protect operational telemetry.";

$privacy_s1_title = "1. Data Collection";
$privacy_s1_text = "We collect usage telemetry (IP, system parameters, browser type) and user-submitted verification details.";
$privacy_s2_title = "2. Legal Basis";
$privacy_s2_text = "Processing relies on explicit user consent, regulatory compliance mandates, and service execution.";
$privacy_s3_title = "3. Data Sharing";
$privacy_s3_text = "Data is never commercialized. Disclosures are limited to authorized clearinghouses and technical partners under NDA.";
$privacy_s4_title = "4. Cookies";
$privacy_s4_text = "Essential cookies are utilized for session authentication and interface optimization.";
$privacy_google_choices = 'Manage tracking preferences via <a href="http://www.google.com/settings/ads" target="_blank" rel="noopener">Google Ads Settings</a> or use the <a href="https://tools.google.com/dlpage/gaout" target="_blank" rel="noopener">Google Analytics Opt-out Add-on</a>.';
$privacy_s5_title = "5. Data Retention";
$privacy_s5_text = "Personal details are retained strictly as long as necessary to fulfill system access requirements.";
$privacy_s6_title = "6. International Transfers";
$privacy_s6_text = "Data transfers across borders strictly utilize encrypted channels and standard contractual clauses.";
$privacy_s7_title = "7. Third-Party Links";
$privacy_s7_text = "We are not responsible for privacy practices on external third-party services linked on our site.";
$privacy_s8_title = "8. Updates";
$privacy_s8_text = "This policy may be amended periodically to reflect system or legal updates.";
$privacy_rights_title = "Your Rights";
$privacy_rights_text = "Users have the right to request access, rectification, restricted processing, or complete erasure of their stored data.";

// OFFER PAGE
$offer_breadcrumb_home = "Home";
$offer_breadcrumb_current = "Offer";
$offer_cta_h1 = "Get Portfolio Tracker";
$offer_cta_text = "Get started in minutes: sign up, allocate capital, and deploy automated trading nodes instantly.";
$offer_how_it_works_title = "How It Works";
$step_1 = "Create an account";
$step_2 = "Add funds to your account";
$step_3 = "Start buying and selling";
$offer_official_platform_title = "This is trading with the official platform™";
$offer_official_platform_text = "Trusted quantitative software for automated execution and asset management.";

$faq_page_title = "FAQ";
$faq_page_breadcrumb_home = "Home";
$faq_page_breadcrumb_current = "FAQ";
$faq_page_help_title = "How can we help you?";

// CONDITIONS PAGE
$contacts_h1 = "Contacts";
$contacts_h3 = "If you have technical or account inquiries, please reach out via email";
$conditions_breadcrumb_home = "Home";
$conditions_breadcrumb_current = "Conditions of Use";
$conditions_h1 = "Conditions of Use";

$conditions_s1_title = "1. General";
$conditions_s1_text = "This Website provides access to quantitative execution tools. Usage constitutes full acceptance of these Terms and Privacy Policy.";
$conditions_s2_title = "2. Eligibility";
$conditions_s2_text = "Users must be at least 18 years of age and possess full legal authority in their operating jurisdiction.";
$conditions_s3_title = "3. Restricted Access";
$conditions_s3_text = "Access may be restricted in jurisdictions where local financial regulations prohibit algorithmic trading tools.";
$conditions_s4_title = "4. Prohibited Use";
$conditions_s4_text = "Users must not misuse the system, attempt unauthorized API access, or reverse-engineer quantitative software modules.";
$conditions_s5_title = "5. Intellectual Property";
$conditions_s5_text = "All algorithmic code, user interfaces, and brand assets remain the exclusive property of the operating company.";
$conditions_s6_title = "6. Liability";
$conditions_s6_text = "Platform tools are provided 'as is'. We accept no liability for market losses resulting from user-configured parameters.";
$conditions_s7_title = "7. Third-Party Services";
$conditions_s7_text = "Integrations with third-party exchanges operate via secure APIs. Users maintain ultimate custody on destination platforms.";
$conditions_s8_title = "8. External Links";
$conditions_s8_text = "Links to external resources are provided for convenience. We do not endorse or guarantee external software.";
$conditions_s9_title = "9. Miscellaneous";
$conditions_s9_text = "We reserve the right to modify system specifications or usage conditions at any time upon web publication.";

// ==========================================
// RISK WARNING PAGE
// ==========================================
$page_title_risk_warning = "Risk Warning | $site_name";
$page_description_risk_warning = "Understand market volatility, execution risk, and system boundaries associated with $site_name software.";
$risk_warning_breadcrumb_home = "Home";
$risk_warning_breadcrumb_current = "Risk Warning";
$risk_warning_title = "Risk Warning";
$risk_warning_intro = "Understanding financial and market risk is essential before deploying automated trading software.";

$risk_warning_ai_heading = "How Our AI System Helps Manage Risk:";
$risk_warning_ai_1 = "<strong>Algorithmic Discipline:</strong> System models execute trades objectively according to rules, bypassing emotional bias.";
$risk_warning_ai_2 = "<strong>Data-Driven Logic:</strong> Position entries are evaluated using real-time market data telemetry and quantitative probabilities.";
$risk_warning_ai_3 = "<strong>Custom Parameter Control:</strong> Users define position limits, Stop-Loss boundaries, and draw-down caps directly in the dashboard.";

$risk_warning_disclaimer = "<strong>Disclaimer:</strong> Financial trading carries inherent risk of capital loss. Automated algorithms do not guarantee profits or completely eliminate risk. Past performance is not a reliable indicator of future results. This software does not provide financial advice.";

$risk_warning_s1_heading = "1. General & Cryptocurrency Market Risks";
$risk_warning_s1_intro = "Digital assets experience high price volatility and fast-moving market dynamics.";
$risk_warning_s1_1 = "Asset valuations can fluctuate sharply within brief timeframes, risking partial or total capital loss.";
$risk_warning_s1_2 = "Regulatory shifts, macroeconomic events, and order-book liquidity gaps directly impact price movements.";
$risk_warning_s1_3 = "Users should deploy only risk capital—funds that can be lost without compromising personal financial security.";

$risk_warning_s2_heading = "2. Execution, Liquidity & Leverage Risks";
$risk_warning_s2_1 = "<strong>Market Volatility:</strong> Sudden order-book illiquidity may cause execution delays or price slippage. Stop-Loss settings cannot guarantee loss limits during extreme gaps.";
$risk_warning_s2_2 = "<strong>Leverage Exposure:</strong> Using leverage amplifies both yield potential and downside risk, carrying high risk of rapid margin liquidation.";

$risk_warning_s3_heading = "3. Technical & System Dependencies";
$risk_warning_s3_1 = "<strong>System Infrastructure:</strong> Online trading depends on network connectivity, exchange API socket stability, and system uptime.";
$risk_warning_s3_2 = "<strong>Cybersecurity:</strong> Users bear responsibility for safeguarding access credentials and non-custodial API authorization keys.";
$risk_warning_s3_3 = "<strong>Third-Party Exchanges:</strong> The software interfaces with third-party platforms via API. We do not control or guarantee exchange solvency.";

$risk_warning_s4_heading = "4. Regulatory & Tax Provisions";
$risk_warning_s4_1 = "<strong>Legal Compliance:</strong> Regional regulations vary widely. Users are responsible for confirming legal compliance in their local jurisdiction.";
$risk_warning_s4_2 = "<strong>Tax Reporting:</strong> Users bear full responsibility for determining and settling tax liabilities resulting from realized trading activity.";
$risk_warning_s4_3 = "<strong>Suitability:</strong> If you do not fully comprehend algorithmic trading mechanics or rely on essential reserves, automated trading is not suitable.";

$risk_warning_contact = "<strong>Contact:</strong> For questions regarding risk disclosures, reach out to our compliance support team via the contact section.";
$footer_risk_warning = "Risk Warning";
?>
