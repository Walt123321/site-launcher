<?php
// Brand / Platform Variables
$site_name = "Test";
$site_slug = "test";
$site_domain = "{{DOMAIN}}";
$site_url = "https://$site_domain";
$rating_value = "4.7";
$rating_count = "2498";
$review_count = "127"; // TZ item 17: fixed random value in 50-150 range, stored here so it never changes

// Geo-language stats bar fallback content (used by the language-folder pages'
// own "stats" section; the fr/de/it/nl folders override these with native
// translations, the other 19 folders inherit this English fallback)
$stat_1_value = "4M+";
$stat_1_label = "Registered Users";
$stat_2_value = "98+";
$stat_2_label = "Countries Supported";
$stat_3_value = "65+";
$stat_3_label = "Currencies Available";
$stat_4_value = "24/7";
$stat_4_label = "Transaction Access";
$stat_5_value = "256-bit";
$stat_5_label = "Encryption Standard";
$stat_6_value = "\$500M+";
$stat_6_label = "Total Client Deposits";
$app_price = "250";
$app_currency = "USD";
$site_lang = "en-US";
$country_name = "United Kingdom"; // default -- overwritten per-launch by generate_lang_files()
$privacy_last_update = "January 15, 2026"; // default -- static publish date, shared across all languages

// Keitaro Form Integration Variables (defaults -- overwritten per-launch by
// generate_lang_files(); must stay valid on their own since nothing else in
// this file replaces them for a page that's ever served un-generated)
$form_country = "gb";
$form_language = "en";
$form_phone_country = "gb";
$form_only_countries = "[]";

// 4 Verified Reviews (TZ Item 8)
$review_1_author = "Sophie Laurent";
$review_1_role = "France";
$review_1_text = "I started with €500 just to see how the platform worked. After about three weeks, my balance had grown to around €1120. The interface is easy to use, and the market insights helped me make better decisions.";
$review_1_badge = "Reported Return +18.4%";

$review_2_author = "Lukas Schneider";
$review_2_role = "Germany";
$review_2_text = "I have tried a few trading platforms before, but this one has been my favorite so far. It is easy to navigate, the tools are genuinely useful, and I have had a very positive experience overall.";
$review_2_badge = "Reported Return +19.1%";

$review_3_author = "Marco Rossi";
$review_3_role = "Italy";
$review_3_text = "What impressed me most was how intuitive everything feels. Registration was quick, the dashboard is well organized, and the platform has made trading much more convenient for me.";
$review_3_badge = "Reported Return +16.8%";

$review_4_author = "Emma van Dijk";
$review_4_role = "Netherlands";
$review_4_text = "I had no previous trading experience, so I began with €750. Within a month, I reached just over €1,765 by following the tools and learning resources. It has been a great way to build confidence.";
$review_4_badge = "Reported Return +18.0%";

$review_verified_label = "Verified User";
$reviews_section_title = "Reviews on $site_name";
$reviews_badge_trustworthy = "Trustworthy";
$reviews_summary_rating = "4.7";
$reviews_summary_count = "189";
$reviews_summary_desc = "A powerful and intuitive trading platform featuring robust automated tools, real-time analytics, and comprehensive learning resources.";

// CONSULTANT / CHAT QUIZ (TZ Item 13)
$quiz_consultant_name = "Elena";
$quiz_consultant_role = "Trading Consultant";
$quiz_text_welcome = "Hello! I am your personal trading assistant. Take a 30-second quiz to discover how automated AI trading can work for you.";
$quiz_text_q1 = "Have you ever traded cryptocurrencies or financial markets before?";
$quiz_text_a1_yes = "Yes, I have some experience";
$quiz_text_a1_no = "No, I am a complete beginner";
$quiz_text_q2 = "What is your primary financial goal with online trading?";
$quiz_text_q3 = "Would you prefer the AI to execute trades automatically, or trade manually?";
$quiz_text_a3_yes = "Automated AI Trading (Recommended)";
$quiz_text_a3_no = "Manual Trading with AI Signals";
$quiz_text_q4 = "What is your initial budget to allocate for trading?";
$quiz_text_a4_1 = "$250 - $500";
$quiz_text_a4_2 = "$500 - $1,500";
$quiz_text_a4_3 = "$1,500+";
$quiz_text_q5 = "Are you ready to create your account and receive full platform access?";
$quiz_text_a5_yes = "Yes, let me start!";
$quiz_text_a5_no = "I would like more information";
$quiz_text_loader = "Analyzing your responses and preparing optimal trading parameters...";
$quiz_text_final_ttl = "Your Account Setup is Ready!";
$quiz_text_processing = "Configuring your platform access...";
$quiz_text_typing = "is typing...";
$quiz_placeholder_fname = "First Name";
$quiz_placeholder_lname = "Last Name";
$quiz_placeholder_email = "Email Address";
$quiz_placeholder_phone = "Phone Number";
$quiz_btn_submit = "Complete Registration";

// METADATA (TZ Item 10)
$home_meta_title = "$site_name — Trading Platform | Official Site";
$home_meta_description = "The official $site_name website offers a secure cryptocurrency trading platform with advanced trading tools, real-time market insights, and a user-friendly experience for traders.";

// NAVIGATION & HEADER (TZ Item 3, 12)
$nav_about = "About Us";
$nav_how = "How It Works";
$nav_why = "Why Trade";
$nav_faq = "FAQ";
$nav_contacts = "Contact Us";
$nav_signin = "Sign In";
$nav_signup = "Sign Up";

$mobnav_home = "Home";
$mobnav_product = "Product";
$mobnav_offer = "Offer";
$mobnav_contact = "Contact Us";
$mobnav_faq = "FAQ";
$mobnav_signup = "Sign Up";

// HERO SECTION
$hero_h1 = "<mark>$site_name</mark> Platform";
$hero_text = "Official $site_name cryptocurrency trading platform";

// LEAD FORM
$form_fname_placeholder = "First Name";
$form_lname_placeholder = "Last Name";
$form_email_placeholder = "Email";
$form_phone_placeholder = "Phone Number";
$form_btn_submit = "Sign Up";
$form_disclaimer_text = "By entering your personal information and clicking the button, you accept the <a class='link link-primary' href='privacy.php'>Privacy Policy</a> and the <a class='link link-primary' href='conditions.php'>Terms of Use</a> of this website.";

// SECURITY BADGES
$badge_ssl = "256-bit SSL";
$badge_payments = "Secure Payments";
$badge_2fa = "2FA";
$badge_cold_storage = "98% Cold Storage";
$badge_regulated = "Regulated";
$badge_traders_trust = "Over 4M Traders Trust";

// SAFE SECTION (Vos fonds sont en sécurité)
$safe_title = "<mark>Your Funds Are Safe</mark> with $site_name";
$safe_desc = "Bank-grade encryption, verified payment processors, and 98% cold storage — your money is protected at every step.";

$safe_item1_title = "Verified Payment Providers";
$safe_item1_desc = "Payments are processed exclusively through certified providers complying with international security standards. Your card information is never stored on our platform.";
$safe_item1_badge = "Secure Payments";

$safe_item2_title = "Two-Factor Authentication (2FA)";
$safe_item2_desc = "Add an extra layer of protection to your account with time-based one-time passwords via SMS or Google Authenticator.";
$safe_item2_badge = "2FA";

$safe_item3_title = "98% Cold Storage";
$safe_item3_desc = "The vast majority of digital assets are held in geographically distributed offline cold storage vaults protected by multi-signature protocols.";
$safe_item3_badge = "98% Cold Storage";

$safe_item4_title = "Regulated Execution";
$safe_item4_desc = "We partner with regulated brokerages and liquidity providers worldwide to maintain compliance, transparency, and top-tier execution.";
$safe_item4_badge = "Regulated";

$safe_item5_title = "256-bit SSL Encryption";
$safe_item5_desc = "All data transmissions between your browser and our servers are encrypted with TLS 1.3 military-grade cryptographic protocols.";
$safe_item5_badge = "256-bit SSL";

// FREE GUIDE CTA BANNER (CTA 2)
$guide_cta_title = "Get the Free Guide";
$guide_cta_subtitle = "«10 Mistakes to Avoid in Crypto Trading»";
$guide_cta_btn = "Claim Free Guide";

// TRUST SECTION (Pourquoi les investisseurs font confiance à Ciel Cryptance)
$trust_title = "Why Traders Trust <mark>$site_name</mark>";
$trust_desc = "Over 4,000,000 users worldwide choose $site_name for its reliability, powerful automation, and transparent environment.";
$trust_subtitle = "Leading Benefits for Modern Traders:";

$trust_item1_title = "Global Market Access";
$trust_item1_desc = "Trade 100+ cryptocurrencies, Forex pairs, stocks, and commodities from a single unified trading dashboard.";

$trust_item2_title = "Robust Fund Protection";
$trust_item2_desc = "Segregated accounts, continuous biometric checks, and state-of-the-art cybersecurity safeguard your capital 24/7.";

$trust_item3_title = "Zero Hidden Fees";
$trust_item3_desc = "Enjoy crystal-clear pricing. Free registration, free deposits, no platform management fees, and instant withdrawal requests.";

$trust_item4_title = "Responsive Support";
$trust_item4_desc = "Our dedicated support team is available via live chat, phone, or email to assist with any questions or technical inquiries.";

$trust_market_info_text = "More information about market conditions in 2026";
$trust_market_info_btn = "Why Trade";

// START TRADING CTA (CTA 3)
$start_cta_title = "Start Trading with <span data-local-currency='$app_price'>$app_price $app_currency</span>!";
$start_cta_desc = "Ready to try $site_name? Register now and join the growing community of crypto investors and traders.";
$start_cta_btn = "Sign Up";

// FAQ SECTION
$faq_title = "$site_name Frequently Asked Questions <mark>(FAQ)</mark>";
$faq_q1 = "What is $site_name and how does it work?";
$faq_a1 = "It is an AI-powered trading platform that works for you 24 hours a day. The system analyzes markets, spots opportunities, and executes trades automatically. You can let the AI handle everything or switch to manual mode to trade on your own terms at any time.";

$faq_q2 = "How safe is my money and data on $site_name?";
$faq_a2 = "Security is built into every layer of the platform. Personal data is protected using internationally recognized encryption standards and advanced account authentication. All financial transactions are processed exclusively through trusted and verified payment providers. All your trading activity is visible in real time, so you always know exactly what is happening with your funds.";

$faq_q3 = "Can I withdraw my profits at any time?";
$faq_a3 = "Yes. There are no restrictions on when or how often you can withdraw your funds from $site_name. Your account balance remains under your full control at all times. Withdrawals are processed through the same reliable payment providers used for deposits, guaranteeing fast and secure transfers.";

$faq_q4 = "Are there any hidden fees or extra charges?";
$faq_a4 = "None. $site_name charges no subscription fees, no registration fees, and no hidden costs. The only amount required to get started is the minimum deposit of <span data-local-currency='$app_price'>$app_price $app_currency</span>, credited directly to your trading account. All major payment methods are accepted, including credit cards, bank wire transfers, and PayPal.";

$faq_q5 = "Is any prior trading experience required to get started?";
$faq_a5 = "Not at all. $site_name is designed for both complete beginners and experienced traders. In fully automated mode, the AI takes care of everything for you, including market analysis, signal generation, and order execution. If you prefer to stay in control, you can switch to manual mode at any time.";

$faq_cta_text = "Questions? Check our FAQ or contact our support team.";
$faq_cta_faq_btn = "FAQ";
$faq_cta_contact_btn = "Contact Us";

// NEW TRADER LEAD SECTION (Bottom form)
$lead_title = "New to Trading?";
$lead_p1 = "After registering, you will receive our free guide <mark class='text-on-surface-tertiary-accent'>«10 Mistakes to Avoid in Cryptocurrency Trading»</mark>. It contains straightforward advice from our most experienced analysts to help you avoid common pitfalls.";
$lead_p2 = "Simply enter your details in the registration form and we will send it directly to your inbox. Many traders have started with this guide and found it invaluable for building confidence in their initial trades.";
$lead_form_heading = "The market does not wait — start today!";

// FEATURES TABLE (Fonctionnalités principales)
$features_title = "<mark>Key Features</mark> of the $site_name Trading Platform";
$feature_1_title = "🤖 Platform Technology";
$feature_1_val = "Advanced AI-powered trading engine";
$feature_2_title = "💳 Funding Methods";
$feature_2_val = "Major credit cards, wire transfers, PayPal";
$feature_3_title = "📱 Platform Access";
$feature_3_val = "Multi-device compatibility (Desktop, Tablet, Mobile)";
$feature_4_title = "🚀 Success Rate";
$feature_4_val = "85% analytical precision";
$feature_5_title = "📊 Trading Instruments";
$feature_5_val = "Cryptocurrencies, Forex, Stocks, Commodities, Precious Metals, CFDs, and more…";
$feature_6_title = "✍️ Account Setup";
$feature_6_val = "Quick and straightforward registration";
$feature_7_title = "📞 Customer Support";
$feature_7_val = "24/7 Professional dedicated support";

// FOOTER DISCLAIMER (TZ Item 21)
$footer_disclaimer_p1 = "$site_name provides educational content and general information about financial markets, online trading, and digital assets. All materials published on this website, including articles, charts, price data, market insights, and analysis, are intended for informational purposes only and should not be considered financial, investment, or legal advice. While we strive to keep our content accurate and up to date, we do not guarantee its completeness or reliability and accept no liability for any losses arising from the use of this website.";
$footer_disclaimer_p2 = "Trading cryptocurrencies, Forex, CFDs, stocks, and other financial instruments involves significant risk and may not be suitable for every investor. Market conditions can change quickly, and past performance does not guarantee future results. Before making any investment decisions, carefully assess your financial situation and risk tolerance, and seek independent professional advice if needed. Only invest money that you can afford to lose.";
$footer_copyright = "© " . date('Y') . " $site_name. All rights reserved.";

// FOOTER NAV LINKS
$footnav_about = "About Us";
$footnav_how = "How It Works";
$footnav_why = "Why Trade";
$footnav_faq = "FAQ";
$footnav_contacts = "Contact Us";
$footnav_privacy = "Privacy Policy";
$footnav_risk = "Risk Warning";
$footnav_terms = "Terms of Use";
$footnav_product = "Product";
$footnav_offer = "Offer";

// ABOUT PAGE VARIABLES
$about_meta_title = "About Us | $site_name Official Site";
$about_meta_description = "Learn more about $site_name, our mission to democratize financial markets through AI automation, and our institutional-grade security framework.";
$about_h1 = "About <mark>$site_name</mark>";
$about_lead = "Empowering traders worldwide through artificial intelligence, algorithmic execution, and enterprise security.";
$about_mission_title = "Our Mission";
$about_mission_text = "At $site_name, we believe sophisticated trading technologies should be accessible to everyone, not just institutional funds. Our platform bridges the gap between everyday retail investors and state-of-the-art computational trading algorithms.";
$about_tech_title = "Cutting-Edge Technology";
$about_tech_text = "Our systems evaluate over 100,000 data points every second across global crypto, Forex, and equities markets. By combining predictive machine learning models with sub-millisecond execution, we deliver ultra-low slippage and dependable performance.";
$about_sec_title = "Security & Regulatory Compliance";
$about_sec_text = "Client trust is the core foundation of our ecosystem. We implement 256-bit TLS encryption, strict biometric and 2FA protocols, and store 98% of all digital reserves in cold storage vaults.";

// PRODUCT PAGE VARIABLES
$product_meta_title = "Trading Tools & Product | $site_name";
$product_meta_description = "Explore the trading engine and AI capabilities that power $site_name. Automated order execution, predictive analytics, and intuitive controls.";
$product_h1 = "Platform <mark>Product & Features</mark>";
$product_lead = "Discover the intelligent tools designed to give you a competitive edge across modern cryptocurrency and financial markets.";
$product_f1_title = "Automated AI Trading Engine";
$product_f1_text = "Let neural algorithms analyze market trends and execute optimal trades around the clock without emotion.";
$product_f2_title = "Real-Time Market Analytics";
$product_f2_text = "Live order book depth, automated pattern recognition, and institutional sentiment tracking at your fingertips.";
$product_f3_title = "Risk Management Suite";
$product_f3_text = "Granular stop-loss, take-profit limits, maximum daily exposure controls, and automated hedging capabilities.";
$product_f4_title = "Cross-Platform Accessibility";
$product_f4_text = "Trade seamlessly across desktop browsers, tablets, and smartphones with zero latency and full cloud synchronization.";

// OFFER PAGE VARIABLES
$offer_meta_title = "Special Offer & Conditions | $site_name";
$offer_meta_description = "Discover the exclusive registration offer with $site_name. Get started with an initial deposit of $app_price $app_currency and receive dedicated support.";
$offer_h1 = "Exclusive <mark>Trading Offer</mark>";
$offer_lead = "Start your trading journey today with competitive advantages and dedicated 1-on-1 account onboarding.";
$offer_step1_title = "1. Fast Registration";
$offer_step1_text = "Fill out our brief registration form to secure your personal account access in under 2 minutes.";
$offer_step2_title = "2. Fund Your Trading Balance";
$offer_step2_text = "Deposit the standard minimum of $app_price $app_currency using credit card, bank transfer, or e-wallets. 100% of your funds go straight into your trading balance.";
$offer_step3_title = "3. Activate AI Trading";
$offer_step3_text = "Choose automated or assisted mode, select your preferred asset pairs, and begin trading with full platform capabilities.";

// CONTACTS PAGE VARIABLES
$contacts_meta_title = "Contact Support | $site_name";
$contacts_meta_description = "Get in touch with the $site_name team. 24/7 client support, technical assistance, and account inquiries.";
$contacts_h1 = "Contact <mark>Customer Support</mark>";
$contacts_lead = "Our dedicated international support team is ready to help you 24 hours a day, 7 days a week.";
$contacts_info_title = "Official Inquiries";
$contacts_info_text = "For general inquiries, account verification, or technical support, contact us through our verified communication channels.";
$contacts_support_hours = "24/7 Live Chat & Email Support";

// FAQ PAGE VARIABLES
$faq_meta_title = "FAQ & Knowledge Base | $site_name";
$faq_meta_description = "Find answers to frequently asked questions about $site_name accounts, deposits, withdrawals, and automated AI trading.";
$faq_h1 = "$site_name <mark>FAQ</mark>";
$faq_lead = "Clear answers to the most common questions regarding platform security, withdrawals, and automated trading.";

// PRIVACY POLICY PAGE VARIABLES
$privacy_meta_title = "Privacy Policy | $site_name";
$privacy_meta_description = "Read our comprehensive Privacy Policy to understand how $site_name collects, protects, and manages your personal data.";
$privacy_h1 = "Privacy Policy";
$privacy_p1 = "This Privacy Policy describes how $site_name collects, uses, and discloses information when you visit our website, register for an account, or utilize our trading software.";
$privacy_sec1_title = "1. Data Collection & Use";
$privacy_sec1_text = "We collect necessary contact information (name, email address, phone number) to establish your account, connect you with verified brokerage partners, and verify identity in compliance with international KYC and AML standards.";
$privacy_sec2_title = "2. Cookie & Tracking Technologies";
$privacy_sec2_text = "We use essential and analytical cookies to improve website performance, personalize user experience, and monitor traffic patterns. You can adjust your browser cookie settings at any time.";
$privacy_sec3_title = "3. Data Security & GDPR Rights";
$privacy_sec3_text = "All user data is encrypted in transit and at rest using bank-grade cryptographic protocols. Under the General Data Protection Regulation (GDPR), users have the right to request access to, correction of, or deletion of their personal records.";

// TERMS OF USE PAGE VARIABLES
$terms_meta_title = "Terms of Use | $site_name";
$terms_meta_description = "Review the official Terms and Conditions governing the use of the $site_name platform and associated services.";
$terms_h1 = "Terms of Use";
$terms_p1 = "Please read these Terms of Use carefully before accessing or using $site_name. By registering an account, you agree to be bound by these provisions.";
$terms_sec1_title = "1. User Eligibility";
$terms_sec1_text = "You must be at least 18 years old and reside in a jurisdiction where online trading and cryptocurrency interactions are legally permitted. You are responsible for ensuring compliance with your local laws.";
$terms_sec2_title = "2. Account Registration & Security";
$terms_sec2_text = "You agree to provide true, accurate, and complete information during registration. You are solely responsible for maintaining the confidentiality of your login credentials.";
$terms_sec3_title = "3. Limitation of Liability";
$terms_sec3_text = "$site_name provides informational and software routing services. We do not provide personalized financial advice or guarantee trading profitability. Trading financial markets carries inherent capital risk.";

// RISK WARNING PAGE VARIABLES (TZ Item 19: Exact 4 sections)
$risk_meta_title = "Risk Warning & Legal Notice | $site_name";
$risk_meta_description = "Important risk disclosure regarding CFD, Forex, and cryptocurrency trading on $site_name. Read carefully before investing.";
$risk_h1 = "Risk Warning";
$risk_sec1_title = "1. High-Risk Investment Notice & Volatility";
$risk_sec1_text = "Trading cryptocurrencies, Contracts for Difference (CFDs), foreign exchange (Forex), and other financial assets involves substantial risk of loss and is not suitable for all investors. Cryptocurrency markets are exceptionally volatile, with prices subject to sharp swings in response to regulatory announcements, macroeconomic shifts, or market sentiment. You should never invest money that you cannot afford to lose entirely.";
$risk_sec2_title = "2. Independent Financial Advice";
$risk_sec2_text = "All materials, tools, algorithmic signals, and commentary provided on $site_name are intended solely for informational, educational, and marketing purposes. None of the content on this website constitutes personalized investment, legal, or financial advice. Before executing any trades, you should conduct independent research or consult a licensed financial advisor.";
$risk_sec3_title = "3. Regulatory & Geographic Restrictions";
$risk_sec3_text = "Certain jurisdictions restrict or prohibit retail CFD and cryptocurrency trading. It is the sole responsibility of the user to verify whether accessing $site_name and using partnered trading brokerages is lawful under their local legal framework.";
$risk_sec4_title = "4. Platform Technology & Market Execution";
$risk_sec4_text = "Automated trading tools, artificial intelligence algorithms, and market indicators do not guarantee profits or eliminate market risks. Technical disruptions, network latency, system outages, and market liquidity shortages may result in trade execution delays or slippage.";

// SIGN UP / LOGIN PAGE VARIABLES
$sign_meta_title = "Sign Up / Log In | $site_name";
$sign_meta_description = "Create your free account on $site_name to access intelligent automated trading tools, market signals, and secure funding options.";
$sign_h1 = "Sign Up for <mark>$site_name</mark>";
$sign_lead = "Join thousands of traders and gain immediate access to our AI trading engine.";

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
$hero_form_heading = "Create your free account";
$hero_form_button = "Sign Up";
$form_name_placeholder = "Enter your first name";
$form_surname_placeholder = "Enter your last name";
$form_disclaimer_prefix = "By entering your personal information and clicking the button, you agree to the";
$form_privacy_link_label = "Privacy Policy";
$form_disclaimer_and = "and the";
$form_terms_link_label = "Conditions of Use";
$form_disclaimer_of_site = "of this website.";

// -- partners strip --
$partners_label = "Trusted by leading partners";

// -- "what is" section --
$whatis_label = "About the Platform";
$whatis_title = "What is $site_name?";
$whatis_intro = "$site_name is the official online trading platform, designed to make crypto as simple as everyday online banking.";
$whatis_icon_1_title = "AI-Powered Analysis";
$whatis_icon_1_text = "Advanced algorithms handle the complexity of the markets for you.";
$whatis_icon_2_title = "Instant Execution";
$whatis_icon_2_text = "Thousands of data points processed every second — trades with no delay.";
$whatis_icon_3_title = "Simple, Intuitive Dashboard";
$whatis_icon_3_text = "Check your balance and open positions at a glance, any time.";
$whatis_icon_4_title = "Easy Access, No Barriers";
$whatis_icon_4_text = "Start with a minimum deposit of just $app_price $app_currency — no hidden fees.";
$whatis_cta_text = "Want to learn more about our team and our product?";
$whatis_cta_link = "About Us";

// -- stats section heading (per-stat label/value already set above) --
$stats_label = "$site_name in Numbers";
$stats_title = "Numbers That Speak Louder Than Promises";

// -- key benefits section --
$benefits_label = "Key Benefits";
$benefits_title = "Main Benefits of $site_name";
$benefit_1_title = "Beginner-Friendly Platform";
$benefit_1_text = "Intuitive charts and step-by-step guides help you get started without feeling overwhelmed. You can trade crypto with confidence from day one.";
$benefit_2_title = "Official and Regulated";
$benefit_2_text = "$site_name is licensed and complies with applicable financial regulations. We use SSL encryption and two-factor authentication to protect every account.";
$benefit_3_title = "Easy Access, No Barriers";
$benefit_3_text = "With a minimum deposit of just $app_price $app_currency, anyone can get started. No large upfront investment is required — start small and grow your stake as your confidence grows.";
$benefit_4_title = "Transparent Fees";
$benefit_4_text = "You will never see hidden charges. We only apply minimal transaction or withdrawal fees where applicable, so you always know exactly what you are paying.";
$benefit_5_title = "24/7 Trading Access";
$benefit_5_text = "Trade on your own schedule, day or night. $site_name works just as well on desktop as on mobile, so you can stay connected to the market wherever you are.";
$benefit_6_title = "Local Customer Support";
$benefit_6_text = "Our support team is available by chat, phone, or email. Real people are here to help you in your language, whenever you need it.";
$benefits_trust_title = "Trusted by Users Worldwide";
$benefits_trust_text = "This is why so many crypto users trust $site_name. Thousands of traders already use $site_name, and new accounts join every day.";
$benefits_cta = "Sign Up";
$benefits_badge_1 = "256-bit SSL";
$benefits_badge_2 = "Secure Payments";
$benefits_badge_3 = "2FA";

// -- security section --
$security_label = "Security";
$security_title = "Your Funds Are Safe with $site_name";
$security_subtitle = "Bank-grade encryption, verified payments, and 98% cold storage — your money is protected at every step.";
$security_1_title = "Verified Payment Providers";
$security_1_text = "Payments are processed exclusively by certified providers that meet international security standards. Your payment data is never stored on our servers.";
$security_2_title = "256-bit SSL Encryption";
$security_2_text = "All data exchanged between your device and our platform is encrypted with 256-bit TLS. No third party can intercept or read it.";
$security_3_title = "98% Cold Storage";
$security_3_text = "98% of assets are held in offline wallets, with no internet connection. They cannot be accessed remotely by anyone.";
$security_4_title = "Multi-Factor Authentication";
$security_4_text = "Only you can access your account. Every login is verified by a second step that only you control.";
$security_5_title = "Account Monitoring";
$security_5_text = "Every login, transaction, or settings change triggers an instant notification, so you always know what is happening on your account.";
$security_6_title = "Password Protection";
$security_6_text = "Passwords are stored in an unreadable, irreversible form. We technically have no way of seeing your password.";
$security_cta_title = "Get a Free Guide!";
$security_cta_text = "Get our free starter guide and start trading today.";
$security_cta_button = "Sign Up";
$security_badge_1 = "98% Cold Storage";
$security_badge_2 = "Verified Payments";
$security_badge_3 = "Encrypted";

// -- how it works section --
$how_label = "How It Works";
$how_title = "How It Works";
$how_1_title = "Sign Up";
$how_1_text = "Click the \"Open Account\" button and fill in the registration form with your details (name, email, and phone number). It only takes a minute.";
$how_2_title = "Deposit Funds";
$how_2_text = "Next, fund your account. The minimum deposit is just $app_price $app_currency. You can use a credit/debit card, local bank transfer, or popular e-wallets. (Tip: start with an amount you are comfortable with.)";
$how_3_title = "Start Trading";
$how_3_text = "Once your funds are in your account, you are ready to trade. Choose the asset you want (such as BTC, SOL, or USDT) and decide on your strategy.";
$how_cta_label = "How It Works";
$how_cta_text = "Need more information about how the service works?";
$how_cta_link = "How It Works";

// -- trust reasons section --
$trust_label = "Why Trade With Us";
$trust_intro = "Join thousands of users who already trade with $site_name.";
$trust_1_title = "Fully Regulated";
$trust_1_text = "$site_name is duly registered and complies with applicable financial regulations. We operate under strict rules to ensure your safety.";
$trust_2_title = "Advanced Security";
$trust_2_text = "All your data and funds are encrypted and secured. We enforce strict account protection through SSL encryption and two-factor authentication.";
$trust_3_title = "Transparent Operations";
$trust_3_text = "We never hide our fees and never add surprise rules. Before every transaction, you see exactly what fees apply.";
$trust_4_title = "Responsive Support";
$trust_4_text = "Our support team is available by chat, phone, or email to answer your questions or resolve any issue.";
$trust_cta_text = "More information on market conditions";
$trust_cta_link = "Why Trade";

// -- testimonials section heading (individual reviews already set above) --
$testimonials_label = "Testimonials";
$testimonials_title = "Trusted by Over 4M Traders";

// -- FAQ section heading --
$faq_label = "FAQ";

// -- lead magnet CTA block --
$leadmagnet_title = "New to Trading?";
$leadmagnet_text1 = "After you sign up, you will receive our free guide,";
$leadmagnet_quote = "“10 Mistakes to Avoid When Trading Crypto”";
$leadmagnet_text2 = "packed with simple tips from our most experienced analysts to help you avoid the most common mistakes.";
$leadmagnet_text3 = "Just enter your details during";
$leadmagnet_link = "sign-up";
$leadmagnet_text4 = "and we will send it straight to your inbox. Many investors started with this guide and say it made a real difference.";
$leadmagnet_text5 = "The market does not wait — get started today!";

// -- pre-about CTA band --
$pre_about_title = "Ready to Take Control of Your Trading?";
$pre_about_text = "Join $site_name today and discover a platform built for clarity, security, and results.";
$pre_about_button = "Sign Up";

// -- pretest (quiz teaser) badges/CTA --
$pretest_title = "Start Trading with $app_price $app_currency!";
$pretest_text = "Ready to try $site_name? Sign up now and join the growing community of crypto investors and traders.";
$pretest_button = "Sign Up";
$pretest_badge_1 = "Secure";
$pretest_badge_2 = "Regulated";
$pretest_badge_3 = "Trusted by Over 4M Traders";

// -- about page --
$about_label = "About Us";
$about_title = "About $site_name";
$about_intro = "$site_name does not just give you a trading platform — we help you trade with clarity and confidence.";
$about_text_1 = "$site_name is the official online trading platform, designed to make crypto trading accessible to beginners and experienced traders alike.";
$about_text_2 = "We combine AI-powered market analysis with a simple, transparent dashboard, so you always know exactly where you stand.";
$about_text_3 = "Every part of the platform is built around clarity: no hidden fees, no confusing jargon, just clear information you can act on.";
$about_text_4 = "Our platform saves you hours of guesswork and protects you from opaque, low-quality alternatives. We believe trading should be built on precision, not luck.";

// -- contact page --
$contact_label = "Contact Us";
$contact_title = "Contact $site_name";
$contact_subtitle = "Have a question or need assistance? We are here to advise and guide you.";
$contact_text = "At $site_name, we believe that success in trading has nothing to do with luck — it relies on precision, anticipation, and the right tools.";
$contact_form_text = "Simply fill in the form below, and a member of our team will get back to you shortly.";
$contact_form_button = "Send Message";

// -- footer navigation labels (geo-page footer, TZ items 12/16/18) --
$footnav_col_pages = "Pages";
$footnav_col_support = "Support";
$footnav_col_legal = "Legal";
$footnav_col_company = "Company";
$footnav_home = "Home";
$footnav_sitemap = "Sitemap";
$footnav_conditions = "Conditions of Use";
$footnav_contact = "Contact Us";
$footnav_signup = "Sign Up";
$footer_risk_warning = "Risk Warning";

// -- geo-page footer legal disclaimer (single-paragraph variant used by
// the geo template's own footer layout; the two-paragraph TZ item 21
// text above -- $footer_disclaimer_p1/$footer_disclaimer_p2 -- covers
// the root pages) --
$footer_disclaimer = "$site_name provides educational content and general information about financial markets, online trading, and digital assets. All materials published on this website are intended for informational purposes only and should not be considered financial, investment, or legal advice. Trading involves significant risk and may not be suitable for every investor. Only invest money that you can afford to lose.";

// ============================================================
// Geo-language SUBPAGE fallback content (TZ item 16 cont.). Same
// rationale as the block above: conditions/contacts/faq/offer/
// privacy/product/risk-warning/sign.php share templates across the
// bg/cs/da/... stub folders and reference these vars directly.
// English fallback so every geo folder's subpages render complete.
// ============================================================

// -- shared form aliases (service-page forms reuse the hero disclaimer) --
$form_disclaimer_risk_note = "Please also read our";
$form_text = $form_disclaimer_prefix;
$form_text_privacy = $form_privacy_link_label;
$form_text_privacy_and = $form_disclaimer_and;
$form_text_conditions = $form_terms_link_label;
$form_text_conditions_of = $form_disclaimer_of_site;
$form_text_risk_warning_note = $form_disclaimer_risk_note;
$form_submit = "Sign Up";

// -- generic breadcrumbs (sign-up / product pages) --
$breadcrumb_home = "Home";
$breadcrumb_current = "Sign Up / Log In";
$breadcrumb_product = "Product";

// -- sign-up page official heading --
$official_heading = "Register on the Official $site_name Platform\xe2\x84\xa2";
$official_description = "Create your free account to start trading cryptocurrency on a secure, transparent platform.";

// -- product page: analytics banner --
$analytics_heading = "Trade Smarter with $site_name";
$analytics_description = "Get clear, real-time market data and AI-powered insights. Make informed trading decisions with confidence.";

// -- product page: dashboard preview --
$app_main_heading = "Your Trading Dashboard";
$app_feature_1_title = "Live Market Data";
$app_feature_1_text = "Real-time prices and charts right at your fingertips";
$app_feature_2_title = "Portfolio Tracking";
$app_feature_2_text = "Comprehensive metrics on your balance and performance";
$app_feature_3_title = "Mobile View";
$app_feature_3_text = "Optimized for mobile browsers";
$app_feature_4_title = "Watchlists";
$app_feature_4_text = "Keep track of the assets you are watching";

// -- product page: capabilities --
$capabilities_main_title = "What to Expect";
$capabilities_feature_1_title = "AI-Powered Signals";
$capabilities_feature_1_text = "Advanced algorithms analyze market signals and surface opportunities around the clock.";
$capabilities_feature_2_title = "Fast Sign-Up";
$capabilities_feature_2_text = "Register in minutes with a secure, straightforward sign-up process.";
$capabilities_feature_3_title = "Verified Security";
$capabilities_feature_3_text = "256-bit SSL encryption, 2FA, and 98% cold storage protect your funds at every step.";
$capabilities_feature_4_title = "Ongoing Support";
$capabilities_feature_4_text = "Get support from our team at every step \xe2\x80\x94 from sign-up to your first trade.";

// -- product page: stats strip --
$products_stats_currencies_v = "65+";
$products_stats_currencies_l = "Available Currencies";
$products_stats_users_v = "4M+";
$products_stats_users_l = "Registered Users";
$products_stats_volume_v = "98+";
$products_stats_volume_l = "Supported Countries";
$products_stats_countries_v = "24/7";
$products_stats_countries_l = "Transaction Access";

// -- product page: 3-step strip --
$step_1 = "Create an account";
$step_2 = "Deposit funds";
$step_3 = "Start trading with the strategy that suits you";

// -- shared "last update" label (privacy page) --
$last_update = "Last update";

// -- FAQ page --
$faq_page_meta_title = "FAQ | $site_name Support";
$faq_page_meta_description = "Answers to frequently asked questions about how $site_name works, pricing, and getting started.";
$faq_page_title = "FAQ";
$faq_page_breadcrumb_home = "Home";
$faq_page_breadcrumb_current = "FAQ";
$faq_page_help_title = "How can we help you?";
$faq_1_q = "How do I get started?";
$faq_1_a = "Create your account, verify your email address, and make your first deposit \xe2\x80\x94 plans start from just $app_price $app_currency.";
$faq_2_q = "Is my money and data safe? Is $site_name reliable?";
$faq_2_a = "Yes. Your data is protected by industry-standard 256-bit encryption, and your funds are secured with two-factor authentication and 98% cold storage.";
$faq_3_q = "Can I close my account or withdraw funds at any time?";
$faq_3_a = "Yes. There are no restrictions on withdrawals. Contact our support team at any time \xe2\x80\x94 we will help with your account or process your withdrawal promptly.";
$faq_4_q = "How do I know if this platform is right for me?";
$faq_4_a = "$site_name was built for absolute beginners and experienced traders alike who want to trade more efficiently \xe2\x80\x94 every tool on the platform is designed to keep you informed and in control.";
$faq_5_q = "Do I need trading experience to get started?";
$faq_5_a = "No prior experience is required. Our AI-powered mode handles the analysis for you, and you can switch to manual mode at any time if you want more control.";

// -- contacts page --
$contacts_h3 = "For technical questions or questions about your account, please reach us by email";

// -- offer page (meta title/description already defined above) --
$offer_breadcrumb_home = "Home";
$offer_breadcrumb_current = "Offer";
$offer_cta_h1 = "Start Trading Today";
$offer_cta_text = "Ready in minutes: sign up, fund your account, and start trading cryptocurrency on a secure, regulated platform.";
$offer_how_it_works_title = "How It Works";
$offer_official_platform_title = "This Is the Official $site_name Trading Platform\xe2\x84\xa2";
$offer_official_platform_text = "A trustworthy, transparent way to trade cryptocurrency \xe2\x80\x94 with real-time insights and full control.";

// -- conditions of use page --
$conditions_meta_title = "Conditions of Use | $site_name";
$conditions_meta_description = "Read the official Conditions of Use for the $site_name website and trading platform.";
$conditions_breadcrumb_home = "Home";
$conditions_breadcrumb_current = "Conditions of Use";
$conditions_h1 = "Conditions of Use";
$conditions_s1_title = "1. General";
$conditions_s1_text = "This website provides access to an online cryptocurrency trading platform. Use of the platform constitutes full acceptance of these terms and our Privacy Policy.";
$conditions_s2_title = "2. Eligibility";
$conditions_s2_text = "Users must be at least 18 years old and have full legal capacity in their respective jurisdiction.";
$conditions_s3_title = "3. Restricted Access";
$conditions_s3_text = "Access may be restricted in jurisdictions where local regulations prohibit the type of trading service we offer.";
$conditions_s4_title = "4. Prohibited Use";
$conditions_s4_text = "Users may not misuse the system, attempt unauthorized access to our systems, or reverse-engineer our software.";
$conditions_s5_title = "5. Intellectual Property";
$conditions_s5_text = "All source code, user interfaces, and brand assets remain the exclusive property of the operating company.";
$conditions_s6_title = "6. Liability";
$conditions_s6_text = "The platform's tools are provided \"as is.\" We assume no liability for outcomes resulting from a user's own trading decisions.";
$conditions_s7_title = "7. Third-Party Services";
$conditions_s7_text = "Integrations with third-party payment providers occur over secure connections. For deposits and withdrawals, users deal directly with their chosen provider.";
$conditions_s8_title = "8. External Links";
$conditions_s8_text = "Links to external resources are provided for convenience only. We do not endorse or guarantee any external software.";
$conditions_s9_title = "9. Miscellaneous";
$conditions_s9_text = "We reserve the right to modify these terms or the service at any time, with changes published on the website.";

// -- privacy policy page (meta title/description already defined above) --
$privacy_breadcrumb_home = "Home";
$privacy_breadcrumb_current = "Privacy Policy";
$privacy_page_h1 = "Privacy Policy";
$privacy_intro = "We respect your privacy and process personal data in full compliance with international standards and the European GDPR.";
$privacy_transparency_title = "Transparency";
$privacy_transparency_text = "We clearly disclose how operational telemetry data is processed. Contact support for further details.";
$privacy_usage_title = "Data Use";
$privacy_usage_text = "Data is used solely to provide access, secure sessions, and meet compliance obligations.";
$privacy_rights_short_title = "Your Rights";
$privacy_rights_short_text = "You retain full rights to view, update, or request deletion of your personal data.";
$privacy_security_title = "Security";
$privacy_security_text = "We use AES-256 encryption and database isolation to protect operational telemetry data.";
$privacy_s1_title = "1. Data Collection";
$privacy_s1_text = "We collect usage telemetry (IP address, system parameters, browser type) as well as verification data submitted by users.";
$privacy_s2_title = "2. Legal Basis";
$privacy_s2_text = "Processing relies on users' explicit consent, regulatory compliance requirements, and delivery of the service.";
$privacy_s3_title = "3. Data Sharing";
$privacy_s3_text = "Data is never commercialized. Disclosures are limited to authorized clearing entities and technical partners under a non-disclosure agreement (NDA).";
$privacy_s4_title = "4. Cookies";
$privacy_s4_text = "Essential cookies are used for session authentication and interface optimization.";
$privacy_google_choices = 'Manage your tracking preferences via <a href="http://www.google.com/settings/ads" target="_blank" rel="noopener">Google Ads Settings</a> or use the <a href="https://tools.google.com/dlpage/gaoptout" target="_blank" rel="noopener">Google Analytics Opt-out Add-on</a>. You can also review Google\'s own data practices in its <a href="https://www.google.com/intl/en/policies/privacy/" target="_blank" rel="noopener">Privacy Policy</a>.';
$privacy_s5_title = "5. Data Retention";
$privacy_s5_text = "Personal data is retained only for as long as necessary to meet system access requirements.";
$privacy_s6_title = "6. International Transfers";
$privacy_s6_text = "Cross-border data transfers occur exclusively over encrypted channels and via standard contractual clauses.";
$privacy_s7_title = "7. Third-Party Links";
$privacy_s7_text = "We are not responsible for the privacy practices of external third-party services linked from our website.";
$privacy_s8_title = "8. Updates";
$privacy_s8_text = "This policy may be revised periodically to reflect system or legal changes.";
$privacy_rights_title = "Your Rights";
$privacy_rights_text = "Users have the right to request access to, correction of, restricted processing of, or complete deletion of their stored data.";

// -- risk warning page --
$page_title_risk_warning = "Risk Warning | $site_name";
$page_description_risk_warning = "Understand the risks of trading and how $site_name helps you manage them safely.";
$risk_warning_breadcrumb_home = "Home";
$risk_warning_breadcrumb_current = "Risk Warning";
$risk_warning_title = "Risk Warning";
$risk_warning_intro = "Understanding the risks is the first step toward trading with confidence.";
$risk_warning_ai_heading = "How our AI system helps with risk management:";
$risk_warning_ai_1 = "<strong>Algorithmic Efficiency &amp; Emotionless Trading:</strong> Advanced algorithms analyze market signals to execute trades objectively at the optimal time.";
$risk_warning_ai_2 = "<strong>Data-Driven Strategies:</strong> Strategies are based on verified market patterns and real-time analysis rather than guesswork.";
$risk_warning_ai_3 = "<strong>Flexible Settings &amp; Full Control:</strong> Adjust your risk parameters at any time. Track all balances and trades transparently on your dashboard \xe2\x80\x94 with no hidden fees and no restrictions on withdrawals.";
$risk_warning_disclaimer = "<strong>Disclaimer:</strong> Trading always carries risk. Automated systems (including AI) do not guarantee profit, may fail due to software errors or unexpected market events, and require monitoring by the user. Past performance is not an indicator of future results. This platform is intended solely for informational and marketing purposes and does not constitute financial advice.";
$risk_warning_s1_heading = "1. General Risks &amp; Cryptocurrency Market Risks";
$risk_warning_s1_1 = "Cryptocurrencies are highly volatile, speculative assets that trade around the clock and are subject to only minimal regulatory oversight in most jurisdictions.";
$risk_warning_s1_2 = "Values can fluctuate drastically within short periods, potentially resulting in a complete loss of invested capital.";
$risk_warning_s1_3 = "Market values can be significantly affected by regulatory changes, technical developments, security breaches, or broader macroeconomic events.";
$risk_warning_s1_4 = "Some assets may lose their entire value. Only invest money you can afford to lose.";
$risk_warning_s2_heading = "2. Execution, Liquidity &amp; Leverage Risks";
$risk_warning_s2_1 = "<strong>Market Volatility &amp; Liquidity:</strong> Extreme price movements (10-20%+ daily) or low liquidity (particularly for smaller coins) can lead to delays, platform outages, and significant execution slippage. Stop-loss orders cannot guarantee loss limitation under extreme conditions.";
$risk_warning_s2_2 = "<strong>Leverage &amp; Margin Risk:</strong> Leveraged products amplify both gains and losses, meaning you can lose more than your original deposit. Roughly 70-80% of retail investor accounts lose money when trading leveraged products.";
$risk_warning_s3_heading = "3. Technical, Cybersecurity &amp; Third-Party Risks";
$risk_warning_s3_1 = "<strong>Technical Factors:</strong> Online trading inherently carries risks such as internet connectivity interruptions, hardware/software failures, and service unavailability.";
$risk_warning_s3_2 = "<strong>Cybersecurity:</strong> Cryptocurrency accounts are frequent targets of phishing, malware, and hacking attempts. Transactions are irreversible; compromise of your credentials can result in permanent loss.";
$risk_warning_s3_3 = "<strong>Third-Party Platforms:</strong> This website may connect users to third-party platforms. We do not control, endorse, or guarantee their security, operations, or solvency. Always conduct your own due diligence before depositing funds on external platforms.";
$risk_warning_s4_heading = "4. Regulatory, Tax &amp; Final Provisions";
$risk_warning_s4_1 = "<strong>Legal Compliance &amp; Taxes:</strong> Regulatory frameworks vary widely and change quickly. Users are solely responsible for ensuring their trading activity complies with local law, as well as for meeting their own tax obligations.";
$risk_warning_s4_2 = "<strong>No Profit Guarantees:</strong> There is no \"safe\" or risk-free cryptocurrency trading. Any return figures or performance examples are purely hypothetical.";
$risk_warning_s4_3 = "<strong>Suitability:</strong> If you do not fully understand the risks, depend on necessary financial resources, or are trading with borrowed money, cryptocurrency trading is not suitable for you. When in doubt, consult an independent, licensed financial advisor.";
$risk_warning_contact = "<strong>Contact:</strong> If you have questions about this statement or wish to submit an inquiry, please reach out to our official customer support team via the contact form on our website.";
