<?php
// Brand / Platform Variables
$site_name = "Test";
$site_slug = "test";
$site_domain = "{{DOMAIN}}";
$site_url = "https://$site_domain";
$app_price = "250";
$app_currency = "USD";
$site_lang = "en-US";
$country_name = "United Kingdom"; // default -- overwritten per-launch by generate_lang_files()
$privacy_last_update = "January 15, 2026"; // default -- static publish date, shared across all languages

// Ratings (TZ item 21 -- SoftwareApplication schema)
$rating_value = "4.7";
$rating_count = "247";
$review_count = "127"; // fixed random 50-150, stored so it never changes

// Keitaro Form Integration Variables (defaults -- overwritten per-launch by
// generate_lang_files(); must stay valid on their own since nothing else in
// this file replaces them for a page that's ever served un-generated)
$form_country = "gb";
$form_language = "en";
$form_phone_country = "gb";
$form_only_countries = "[]";

// -------------------------
// Meta (TZ item 9)
// -------------------------
$home_meta_title = "$site_name — Official Website | Trading Platform";
$home_meta_description = "$site_name offers a user-friendly trading platform with advanced market tools, real-time insights, and practical features designed to make online trading more accessible and informed.";

// -------------------------
// Hero
// -------------------------
$hero_h1 = "$site_name Platform";
$hero_subtitle = "Supporting millions worldwide on their digital asset journey";
$hero_badge_title = "Happy Members";
$hero_badge_subtitle = "Loved by millions";
$hero_rating_value = "4.9";
$hero_rating_count = "420";

// Hero lead form
$form_title = "Start Trading Today";
$form_desc = "Ready to make your move? Sign up now and take the first step toward financial freedom. Start with just $app_price $app_currency — access every trading tool, real-time market data, and full platform access from day one.";
$form_fname_placeholder = "Name";
$form_lname_placeholder = "Last Name";
$form_email_placeholder = "Email";
$form_btn_submit = "Sign Up";
$form_disclaimer_text = "By entering your personal information and clicking the button, you agree to the website's <a class=\"link\" href=\"privacy.php\">Privacy Policy</a> and <a class=\"link\" href=\"conditions.php\">Terms &amp; Conditions</a>.";

// Payment badges (TZ item 3, stelardividenta.com style)
$badge_visa = "VISA";
$badge_mastercard = "Mastercard";
$badge_maestro = "Maestro";
$badge_secure = "SECURE";

// -------------------------
// Stats ("Get to Know the Platform")
// -------------------------
$stats_label = "Get to Know the Platform";
$stats_title = "A quick introduction to smarter trading";
$stat_1_value = "154+";
$stat_1_label = "Countries Covered";
$stat_2_value = "29 Million";
$stat_2_label = "Global Investors";
$stat_3_value = "635+";
$stat_3_label = "Coins";
$stat_4_value = "\$3.26 Billion";
$stat_4_label = "24h Trading Volume";

// -------------------------
// Why choose us (6 cards, TZ item 22: H3)
// -------------------------
$why_label = "Why $site_name?";
$why_title = "Reasons to Choose";
$why_1_title = "Fast &amp; Easy";
$why_1_text = "Buy and sell your preferred cryptocurrencies in seconds.";
$why_2_title = "Safe &amp; Secure";
$why_2_text = "We use the latest technology to keep your funds and data safe.";
$why_3_title = "Open to Everyone";
$why_3_text = "Trade on our platform 24/7, wherever and whenever you want.";
$why_4_title = "Pro Tools";
$why_4_text = "From simple to pro trading features, we have everything.";
$why_5_title = "Trends &amp; Insights";
$why_5_text = "Get the latest crypto news, insights, and trends from experts.";
$why_6_title = "24/7 Support";
$why_6_text = "Our friendly support team is here to help at any time.";

// -------------------------
// How it works (3 steps)
// -------------------------
$how_label = "How It Works";
$how_title = "Easy Steps to Begin Trading";
$how_1_title = "Sign Up";
$how_1_text = "Create an account and start trading within minutes.";
$how_1_btn = "Start Trading";
$how_2_title = "Deposit Funds";
$how_2_text = "Fund your account with a minimum deposit of $app_price $app_currency to unlock full trading access. Choose from multiple payment methods and start growing your portfolio today.";
$how_2_note = "Add funds....";
$how_3_title = "Start Trading";
$how_3_text = "Explore the market and trade your way.";
$how_3_note = "Buy and HODL";

// -------------------------
// Trading calculator (TZ item 24, adapted from template_4)
// -------------------------
$calc_badge = "Calculator";
$calc_title = "See how much time and potential you're leaving on the table";
$calc_volume_label = "Monthly Trading Volume";
$calc_trades_label = "Trades per Week";
$calc_time_label = "Time You Could Save";
$calc_boost_label = "Potential Volume Boost";
$calc_btn = "Start Trading";

// -------------------------
// Features (6 cards, TZ item 22: H3)
// -------------------------
$features_label = "Features";
$features_title = "Power of $site_name";
$feature_1_title = "Spot Trading";
$feature_1_text = "Maximize your trading potential with pro tools.";
$feature_2_title = "Buy Crypto";
$feature_2_text = "Buy crypto using cards or banks.";
$feature_3_title = "Crypto Derivatives";
$feature_3_text = "Easy, advanced futures trading.";
$feature_4_title = "$site_name Coin Earn";
$feature_4_text = "Grow your wealth with ease.";
$feature_5_title = "Trading Bot";
$feature_5_text = "Higher profits, even while you sleep.";
$feature_6_title = "Margin Trading";
$feature_6_text = "Borrow, trade, and repay easily.";

// -------------------------
// Testimonials (5 reviews)
// -------------------------
$reviews_title = "What Our Users Say";
$review_1_text = "The platform is very easy to use, and I've seen steady progress since becoming a holder. The team's commitment and fresh ideas make me look forward to what comes next!";
$review_1_author = "Ramon Alcaraz";
$review_1_role = "Trader";
$review_2_text = "$site_name offers a smooth and intuitive trading experience. I was able to start buying and trading crypto right away. The interface is easy to use, and the transaction speeds are excellent!";
$review_2_author = "Bianca Villanueva";
$review_2_role = "New Trader";
$review_3_text = "I trust this platform for managing my crypto investments. Its security features give me confidence, and I haven't experienced any issues with withdrawals or deposits. It's among the most dependable exchanges I've used.";
$review_3_author = "Alyssa Navarro";
$review_3_role = "Pro Trader";
$review_4_text = "Whenever I've had questions, the customer support team has been prompt and helpful. They genuinely care about their users and make each trading experience feel smooth and straightforward.";
$review_4_author = "Jomar Villanueva";
$review_4_role = "Experienced Trader";
$review_5_text = "As a beginner, I found $site_name very easy to use. What really stands out is the range of advanced tools for more experienced traders. It's a solid option for anyone looking to build their portfolio!";
$review_5_author = "Paolo Villanueva";
$review_5_role = "Community Trader";

// -------------------------
// FAQ (5 Q&A, also used for FAQPage schema)
// -------------------------
$faq_label = "FAQs";
$faq_title = "Frequently Asked Questions";
$faq_q1 = "What is $site_name?";
$faq_a1 = "$site_name is a crypto exchange where users can easily trade a wide range of coins, including Bitcoin, Ethereum, and other popular cryptocurrencies.";
$faq_q2 = "How Safe Is $site_name for Crypto Trading?";
$faq_a2 = "The platform provides security through advanced technology and 1:1 asset backing via Proof of Reserves.";
$faq_q3 = "How do I make a deposit?";
$faq_a3 = "$site_name offers several deposit options, including Crypto Deposit, Fiat Deposit, P2P Trading, and One-Click Buy.";
$faq_q4 = "Do I Need Experience to Use $site_name?";
$faq_a4 = "No, you don't need any experience. The platform's easy-to-use interface makes it accessible to everyone, from beginners to advanced traders.";
$faq_q5 = "Are there any hidden fees or costs?";
$faq_a5 = "None at all. There are no registration fees, subscription costs, or hidden charges of any kind. You always see the exact transaction amount before confirming. Revenue comes from premium features and exchange partnerships, not from taking money from users.";

// -------------------------
// Bottom CTA banner
// -------------------------
$cta_title = "Start Trading Today";
$cta_desc = "Ready to make your move? Sign up now and take the first step toward financial independence.";
$cta_btn = "Sign Up";

// -------------------------
// Key features table (TZ pattern, matches template_8's "info" section)
// -------------------------
$table_title = "Core Features of the $site_name Trading Platform";
$table_1_label = "🤖 Platform Technology";
$table_1_val = "Advanced AI Trading Engine";
$table_2_label = "💳 Funding Methods";
$table_2_val = "Major Credit Cards, Bank Transfer, PayPal";
$table_3_label = "📱 Platform Access";
$table_3_val = "Multi-Device Compatibility";
$table_4_label = "🚀 Performance Rate";
$table_4_val = "85% Accuracy";
$table_5_label = "📊 Trading Instruments";
$table_5_val = "Equities, Forex, Commodities, Precious Metals, CFDs, Cryptocurrencies, and more…";
$table_6_label = "✍️ Account Setup";
$table_6_val = "Quick and Efficient";
$table_7_label = "📞 Customer Support";
$table_7_val = "24/7 Professional Assistance";

// Reviews summary card
$summary_title = "$site_name Reviews";
$summary_badge = "Trusted";
$summary_desc = "A powerful, user-friendly trading platform with solid automation and educational resources.";

// -------------------------
// Footer
// -------------------------
$footer_tagline = "Trade wisely, grow fast";
$footer_community_label = "Community";
$footer_copyright = "© 2026 $site_name";
$footnav_product = "Product";
$footnav_offer = "Offer";
$footnav_contacts = "Contact us";
$footnav_faq = "FAQ";
$footnav_privacy = "Privacy Policy";
$footnav_conditions = "Conditions of Use";
$footnav_risk = "Risk Warning";
$footer_disclaimer = "$site_name shares educational resources and market-related material to help visitors better understand trading, investing, and digital financial products. Information presented across the website, such as market commentary, asset prices, charts, guides, and analytical content, is provided for general informational purposes and does not constitute financial, investment, tax, or legal advice. Although reasonable efforts are made to maintain accurate and relevant information, $site_name makes no warranties regarding the completeness, accuracy, or timeliness of the content and cannot be held responsible for decisions or losses resulting from its use.<br><br>Participation in financial markets carries inherent risks. Cryptocurrency, Forex, CFDs, equities, and other trading instruments can experience substantial price fluctuations, and losses may occur. Individual circumstances and risk tolerance vary, so users should conduct their own research and consider obtaining advice from a qualified financial professional before committing funds. Never trade with money you cannot afford to lose.";

// -------------------------
// Chat widget (TZ item 10)
// -------------------------
$quiz_consultant_name = "Maya";
$quiz_consultant_role = "Trading Consultant";
$quiz_text_welcome = "Hi there! I'm Maya, your personal trading consultant. Do you have a couple of minutes to find the best plan for you?";
$quiz_text_q1 = "Have you traded cryptocurrency before?";
$quiz_text_a1_yes = "Yes, I have experience";
$quiz_text_a1_no = "No, I'm a beginner";
$quiz_text_q2 = "Great! What's your first name so I can personalize your plan?";
$quiz_text_q3 = "What is your main goal with trading?";
$quiz_text_a3_yes = "Build long-term wealth";
$quiz_text_a3_no = "Generate short-term income";
$quiz_text_q4 = "How much are you looking to start with?";
$quiz_text_a4_1 = "Under \$$app_price";
$quiz_text_a4_2 = "\$$app_price – \$1000";
$quiz_text_a4_3 = "Over \$1000";
$quiz_text_q5 = "Perfect. Would you like me to open a free account for you now?";
$quiz_text_a5_yes = "Yes, let's do it";
$quiz_text_a5_no = "Not right now";
$quiz_text_loader = "Finding your best plan...";
$quiz_text_final_ttl = "You're all set!";
$quiz_text_processing = "Submitting your details...";
$quiz_text_typing = "is typing...";
$quiz_placeholder_fname = "First name";
$quiz_placeholder_lname = "Last name";
$quiz_placeholder_email = "Email";
$quiz_btn_submit = "Get My Free Account";

// -------------------------
// Risk Warning page (TZ item 15, verbatim text)
// -------------------------
$risk_meta_title = "$site_name Risk Warning — Trading Risk Disclosure";
$risk_meta_description = "Read the $site_name risk warning before you trade: cryptocurrency market risks, leverage, liquidity, cybersecurity and regulatory considerations.";
$risk_title = "Risk Warning";
$risk_intro = "Understanding risks is the first step toward confident trading.";
$risk_ai_title = "How Our AI System Helps Manage Risk:";
$risk_ai_1_title = "Algorithmic Efficiency &amp; Emotionless Trading:";
$risk_ai_1_text = "Advanced algorithms analyze market signals to execute trades objectively at optimal moments.";
$risk_ai_2_title = "Data-Driven Strategies:";
$risk_ai_2_text = "Strategies are based on verified market patterns and real-time analysis rather than guesswork.";
$risk_ai_3_title = "Flexible Settings &amp; Full Control:";
$risk_ai_3_text = "Adjust your risk parameters anytime. Track all balances and trades transparently on your dashboard with no hidden fees and restriction-free withdrawals.";
$risk_disclaimer = "<strong>Disclaimer:</strong> Trading always carries risk. Automated systems (including AI) do not guarantee profit, can fail due to software errors or unexpected market events, and require user monitoring. Past performance is not indicative of future results. This platform serves purely informational and marketing purposes and does not provide financial advice.";
$risk_s1_title = "1. General &amp; Cryptocurrency Market Risks";
$risk_s1_text = "Cryptocurrencies are highly volatile, speculative assets that operate 24/7 with minimal regulatory oversight in most jurisdictions.";
$risk_s1_li1 = "Values can fluctuate dramatically within short periods, potentially leading to a total loss of invested capital.";
$risk_s1_li2 = "Market values can be heavily impacted by regulatory updates, technical developments, security breaches, or broader macroeconomic events.";
$risk_s1_li3 = "Some assets may lose all value completely. Invest only funds you can afford to lose.";
$risk_s2_title = "2. Execution, Liquidity &amp; Leverage Risks";
$risk_s2_li1_title = "Market Volatility &amp; Liquidity:";
$risk_s2_li1_text = "Extreme price movements (10–20%+ daily) or low liquidity (especially in smaller coins) can lead to delays, platform outages, and severe execution slippage. Stop-loss orders cannot guarantee loss limits under extreme conditions.";
$risk_s2_li2_title = "Leverage &amp; Margin Risks:";
$risk_s2_li2_text = "Leveraged products amplify both gains and losses, meaning you can lose more than your initial deposit. <em>Approximately 70–80% of retail investor accounts lose money when trading leveraged products.</em>";
$risk_s3_title = "3. Technical, Cybersecurity &amp; Third-Party Risks";
$risk_s3_li1_title = "Technical Factors:";
$risk_s3_li1_text = "Online trading inherently involves risks of internet disconnects, hardware/software errors, and service unavailability.";
$risk_s3_li2_title = "Cybersecurity:";
$risk_s3_li2_text = "Cryptocurrency accounts are frequent targets for phishing, malware, and hacks. Transactions are irreversible; compromising your credentials can result in permanent loss.";
$risk_s3_li3_title = "Third-Party Platforms:";
$risk_s3_li3_text = "This website may connect users to third-party platforms. We do not control, endorse, or guarantee their security, operations, or solvency. Always conduct your own due diligence before depositing funds on external platforms.";
$risk_s4_title = "4. Regulatory, Tax &amp; Final Provisions";
$risk_s4_li1_title = "Legal Compliance &amp; Taxes:";
$risk_s4_li1_text = "Regulatory frameworks vary widely and change rapidly. Users are solely responsible for ensuring their trading activity complies with local laws and for fulfilling their own tax obligations.";
$risk_s4_li2_title = "No Profit Guarantees:";
$risk_s4_li2_text = "There is no \"safe\" or risk-free crypto trading. Any yield figures or performance examples are purely hypothetical.";
$risk_s4_li3_title = "Suitability:";
$risk_s4_li3_text = "If you do not fully understand the risks, rely on essential funds, or trade with borrowed money, crypto trading is not suitable for you. Consult an independent licensed financial advisor if uncertain.";
$risk_contact = "<strong>Contact:</strong> For any questions regarding this statement or to submit an inquiry, please reach out to our official customer support team via the contact form on our website.";

// -------------------------
// Shared inner-page nav / breadcrumbs (TZ item 14: service pages)
// -------------------------
$bc_home = "Home";
$bc_product = "Product";
$bc_offer = "Offer";
$bc_contacts = "Contact Us";
$bc_faq = "FAQ";
$bc_privacy = "Privacy Policy";
$bc_conditions = "Conditions of Use";
$bc_risk = "Risk Warning";
$bc_sign = "Sign Up";
$bc_sitemap = "Sitemap";
$bc_thanks = "Thank You";

// -------------------------
// Product page (TZ item 14)
// -------------------------
$product_meta_title = "$site_name Product — Trading Tools &amp; Platform Features";
$product_meta_description = "Explore the $site_name product: spot trading, crypto derivatives, a trading bot, margin trading and more, all built on a fast and secure platform.";
$product_h1 = "The $site_name Trading Product";
$product_lead = "One platform, every tool a trader needs: from your first spot trade to automated strategies and margin positions, $site_name keeps the experience fast, secure and easy to understand.";

// -------------------------
// Offer page (TZ item 14)
// -------------------------
$offer_meta_title = "$site_name Offer — Start Trading From \$$app_price";
$offer_meta_description = "See what's included in the current $site_name offer: a low \$$app_price minimum deposit, full platform access, and no hidden fees.";
$offer_h1 = "Our Current Offer";
$offer_lead = "Start with as little as <strong>\$$app_price $app_currency</strong> and unlock the full $site_name platform from day one &mdash; every tool, every market, no hidden costs.";
$offer_li1 = "Minimum deposit of just \$$app_price $app_currency to activate your account";
$offer_li2 = "Full access to spot trading, derivatives, margin and the trading bot";
$offer_li3 = "Multiple funding methods, including cards and bank transfer";
$offer_li4 = "No registration fees, no subscription costs, no hidden charges";
$offer_li5 = "24/7 customer support while you get started";
$offer_note = "Deposit amounts and available payment methods can vary by region. Review our <a class=\"link\" href=\"risk-warning.php\">Risk Warning</a> before you fund an account.";

// -------------------------
// Contact page (TZ item 14)
// -------------------------
$contacts_meta_title = "Contact $site_name — Get in Touch With Our Team";
$contacts_meta_description = "Have a question about your $site_name account or the platform? Reach our support team by email or send us a message and we'll get back to you.";
$contacts_h1 = "Contact Us";
$contacts_lead = "Questions about your account, a deposit, or how the platform works? Our team is here to help.";
$contacts_email_label = "Email";
$contacts_hours_label = "Support Hours";
$contacts_hours_value = "24/7";
$contacts_response_label = "Typical Response Time";
$contacts_response_value = "Within 24 hours";
$contacts_form_title = "Send Us a Message";
$contacts_form_desc = "Leave your details below and a member of our team will reach out to you directly.";

// -------------------------
// FAQ page (TZ item 14 -- reuses the same Q&A as the homepage)
// -------------------------
$faq_meta_title = "$site_name FAQ — Frequently Asked Questions";
$faq_meta_description = "Answers to the most common questions about creating a $site_name account, making a deposit, platform safety, and fees.";
$faq_page_lead = "Everything you need to know before you start trading. Can't find your answer? <a class=\"link\" href=\"contacts.php\">Contact our team</a>.";

// -------------------------
// Privacy Policy page (TZ item 14)
// -------------------------
$privacy_meta_title = "$site_name Privacy Policy";
$privacy_meta_description = "Read how $site_name collects, uses, and protects your personal information across the website and platform.";
$privacy_sections = [
    [
        "title" => "1. Introduction",
        "body" => "This Privacy Policy explains how $site_name (\"we\", \"us\", \"our\") collects, uses, and safeguards the personal information of visitors and users of $site_domain (the \"Website\"). By using the Website, you agree to the practices described below.",
    ],
    [
        "title" => "2. Information We Collect",
        "body" => "We may collect information you provide directly, such as your name, email address, and phone number when you register or submit a form, as well as information collected automatically, including your IP address, device and browser type, and pages viewed on the Website.",
    ],
    [
        "title" => "3. How We Use Your Information",
        "body" => "We use collected information to create and manage your account, respond to inquiries, provide customer support, improve the Website and our services, and, where permitted, send updates about products and offers. You may opt out of marketing communications at any time.",
    ],
    [
        "title" => "4. Cookies &amp; Tracking Technologies",
        "body" => "The Website uses cookies and similar technologies to remember your preferences, keep you signed in, and understand how visitors use our pages. You can disable cookies through your browser settings, though some features may not function correctly as a result.",
    ],
    [
        "title" => "5. Sharing of Information",
        "body" => "We do not sell your personal information. We may share information with trusted service providers who help us operate the Website (such as hosting or analytics providers), or when required to do so by law or to protect our legal rights.",
    ],
    [
        "title" => "6. Data Security",
        "body" => "We apply reasonable technical and organizational measures to protect your information from unauthorized access, alteration, or loss. No method of transmission or storage is completely secure, and we cannot guarantee absolute security.",
    ],
    [
        "title" => "7. Your Rights &amp; Choices",
        "body" => "Depending on your location, you may have the right to access, correct, or request deletion of your personal information, and to object to certain uses of it. To exercise these rights, please reach out via our <a class=\"link\" href=\"contacts.php\">contact page</a>.",
    ],
    [
        "title" => "8. Children's Privacy",
        "body" => "The Website is not directed at individuals under the age of 18, and we do not knowingly collect personal information from minors. If you believe a minor has provided us with personal information, please contact us so we can remove it.",
    ],
    [
        "title" => "9. Changes to This Policy",
        "body" => "We may update this Privacy Policy from time to time. Any changes will be posted on this page with a revised effective date. We encourage you to review this page periodically.",
    ],
    [
        "title" => "10. Contact Us",
        "body" => "If you have questions about this Privacy Policy or how your information is handled, please reach out through our <a class=\"link\" href=\"contacts.php\">contact page</a> or email us at info@$site_domain.",
    ],
];

// -------------------------
// Conditions of Use page (TZ item 14)
// -------------------------
$conditions_meta_title = "$site_name Conditions of Use";
$conditions_meta_description = "Review the Conditions of Use governing access to and use of the $site_name website and trading platform.";
$conditions_sections = [
    [
        "title" => "1. Acceptance of Terms",
        "body" => "By accessing or using $site_domain (the \"Website\"), you agree to be bound by these Conditions of Use. If you do not agree with any part of these terms, please do not use the Website.",
    ],
    [
        "title" => "2. Eligibility",
        "body" => "You must be at least 18 years old and legally permitted to use trading-related services in your jurisdiction to use the Website. By using the Website, you confirm that you meet these requirements.",
    ],
    [
        "title" => "3. Description of Service",
        "body" => "$site_name provides an online platform with educational content, market information, and trading tools. Nothing on the Website constitutes financial, investment, tax, or legal advice, and any information provided is for general informational purposes only.",
    ],
    [
        "title" => "4. User Responsibilities",
        "body" => "You are responsible for providing accurate information when registering, for maintaining the confidentiality of your account credentials, and for all activity that occurs under your account.",
    ],
    [
        "title" => "5. Intellectual Property",
        "body" => "All content on the Website, including text, graphics, logos, and software, is the property of $site_name or its licensors and is protected by applicable intellectual property laws. You may not reproduce or distribute this content without permission.",
    ],
    [
        "title" => "6. No Financial Advice",
        "body" => "Content on the Website is provided for informational and educational purposes only and should not be construed as financial advice. You are solely responsible for your own trading decisions and should consult an independent financial advisor if needed. See our <a class=\"link\" href=\"risk-warning.php\">Risk Warning</a> for more information.",
    ],
    [
        "title" => "7. Limitation of Liability",
        "body" => "To the fullest extent permitted by law, $site_name shall not be liable for any direct, indirect, incidental, or consequential damages arising from your use of, or inability to use, the Website or any linked third-party services.",
    ],
    [
        "title" => "8. Termination",
        "body" => "We reserve the right to suspend or terminate your access to the Website at our discretion, without notice, for conduct that we believe violates these Conditions of Use or is otherwise harmful to other users or the Website.",
    ],
    [
        "title" => "9. Changes to These Terms",
        "body" => "We may revise these Conditions of Use at any time. Continued use of the Website after changes are posted constitutes acceptance of the updated terms.",
    ],
    [
        "title" => "10. Contact",
        "body" => "Questions about these Conditions of Use can be directed to our team through the <a class=\"link\" href=\"contacts.php\">contact page</a> or by emailing info@$site_domain.",
    ],
];

// -------------------------
// Sign-up page (TZ item 14 -- hosts the primary lead form)
// -------------------------
$sign_meta_title = "Sign Up | $site_name — Create Your Free Account";
$sign_meta_description = "Create your free $site_name account in minutes and start trading with as little as \$$app_price $app_currency.";
$sign_h1 = "Create Your Free Account";
$sign_lead = "Join $site_name in a few minutes. Fill in your details below to get started.";

// -------------------------
// Thank-you page (integration/send.php redirects here on success)
// -------------------------
$thanks_meta_title = "Thank You | $site_name";
$thanks_h1 = "Thank You!";
$thanks_text = "Your details have been received. A member of the $site_name team will be in touch shortly to help you get started.";
$thanks_btn = "Back to Homepage";

// -------------------------
// Sitemap page (TZ item 17: human-readable sitemap)
// -------------------------
$sitemap_meta_title = "Sitemap | $site_name";
$sitemap_meta_description = "Browse every page on the $site_name website, including the trading platform, offer, support and legal pages.";
$sitemap_h1 = "Sitemap";
$sitemap_lead = "Every page on $site_name in one place.";
