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

// Ratings (TZ item 20 -- schema aggregateRating equivalents used across pages)
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
// Meta (TZ item 11)
// -------------------------
$home_meta_title = "$site_name — Official Website | Trading Platform";
$home_meta_description = "$site_name offers a user-friendly trading platform with advanced market tools, real-time insights, and practical features designed to make online trading more accessible and informed.";

// -------------------------
// Header (TZ item 3: logo left, nav right)
// -------------------------
$nav_about = "About us";
$nav_contacts = "Contact";
$nav_login = "Login";

// -------------------------
// Activity bar ("live" recent sign-ups ticker, TZ item 2: English copy)
// -------------------------
$activity_live_label = "Live";
$activity_suffix = "Just joined";
$activity_name_1 = "James";
$activity_name_2 = "Oliver";
$activity_name_3 = "Natalie";
$activity_name_4 = "Paul";
$activity_name_5 = "Hugo";
$activity_name_6 = "Irene";
$activity_name_7 = "Alex";
$activity_name_8 = "Ellen";

// -------------------------
// Hero
// -------------------------
$hero_title = "$site_name";
$form_title = "Get Started";
$form_fname_placeholder = "Full name";
$form_lname_placeholder = "Last name";
$form_email_placeholder = "Email address";
$form_btn_submit = "Create Account";
$form_disclaimer_text = "* By clicking the button, you agree to our <a class=\"link\" href=\"privacy.php\">Privacy Notice</a> and <a class=\"link\" href=\"conditions.php\">Terms of Use</a>.";

// Payment badges (stelardividenta.com style, TZ item 5)
$badge_visa = "Visa";
$badge_mastercard = "Mastercard";
$badge_maestro = "Maestro";
$badge_secure = "SECURE";

// -------------------------
// Section 1 -- "IA pensada para leer el mercado" (intro/strategy)
// -------------------------
$s1_title = "$site_name: AI Designed to Read the Market With More Clarity";
$s1_subtitle = "Technology-Guided Investment Strategy";
$s1_quote = "$site_name was built to make working with the markets simpler, whether or not you have experience. The platform applies artificial intelligence to turn complex data into clear, actionable decisions, helping you move with more confidence in any scenario.";
$s1_p1 = "The system reviews enormous volumes of information in real time: it detects changes, recognizes patterns, and responds quickly to market signals. This gives you a sharp reading of the current context so you can spot opportunities without having to dig through complicated analysis.";
$s1_p2 = "24/7 monitoring, an easy-to-use interface, and a high level of protection make the experience comfortable and reliable. Everything is designed so you can focus on results, not the technical side.";
$s1_p3 = "The copy trading feature also gives you access to the strategies of more experienced traders. You can follow their moves and apply proven approaches to your own trading, combining professional judgment with automation.";
$s1_cta = "Create Account";
$s1_img_alt = "$site_name digital finance";

// -------------------------
// Section 2 -- "análisis de mercado preciso" (education list)
// -------------------------
$s2_title = "$site_name — Precise Market Analysis, Without the Extra Noise";
$s2_intro = "$site_name uses artificial intelligence to monitor the market continuously and detect changes quickly. The system processes large amounts of data and shows only the relevant signals, without overwhelming you with unnecessary information.";
$s2_item1_title = "Market Response Without the Wait";
$s2_item1_text = "The platform identifies moves in their early stages: momentum, reversals, and trend changes. You see instantly what's happening and can act at the right moment.";
$s2_item2_title = "A Clear Read Instead of Guesswork";
$s2_item2_text = "No convoluted charts or guesswork. $site_name highlights the essentials and offers a clean view of the situation so you can decide with data, not intuition.";
$s2_item3_title = "Control and Protection";
$s2_item3_text = "Your data is safeguarded, access is controlled, and trades run through secure channels. That way you can focus on the market, not on technical risk.";
$s2_img_alt = "$site_name crypto";

// -------------------------
// Section 3 -- "inteligencia clara para traders" (3 cards)
// -------------------------
$s3_title = "$site_name: Clear Intelligence for Traders";
$s3_card1_title = "$site_name Respects User Privacy and Control";
$s3_card1_text = "$site_name handles information with total transparency and integrity. It does not misuse your personal data. No trades or orders are recorded on this platform.";
$s3_card2_title = "A Clear Analysis Environment for Better Decisions";
$s3_card2_text = "$site_name works as a technology space where AI reinforces human judgment instead of replacing it. These tools make it easier to understand market shifts, compare strategies, and study asset behavior.";
$s3_card3_title = "AI Tools That Sharpen Your Market Reading";
$s3_card3_text = "The analysis never stops. $site_name watches the crypto environment and sends real-time alerts whenever a relevant move appears.";

// -------------------------
// Section 4 -- "análisis nítido, sin emociones"
// -------------------------
$s4_title = "$site_name: Sharp Analysis, Without Emotion or Error";
$s4_quote = "$site_name turns complex market data into organized, easy-to-read information, cutting out unnecessary noise and helping you focus on the signals that actually matter. This lets you understand a situation sooner and decide without letting emotion take over.";
$s4_p1 = "The system continuously updates its conclusions with new data. Instead of lagging indicators, it uses adaptive models that react to market changes in real time. That means you always work with a current view and can act faster when it truly counts.";
$s4_img_alt = "$site_name artificial intelligence";

// -------------------------
// Section 5 -- "Usa Sierra Caudalòr AI para tomar decisiones"
// -------------------------
$s5_title = "Use $site_name AI to Make Precise, Timely Decisions";
$s5_quote = "$site_name analyzes the market in real time and immediately shows you where the movement and the opportunities are. The system processes the data for you and delivers ready-to-use signals: when to enter, when to exit, and what to watch.";
$s5_p1 = "There's no need to watch the charts all day. The platform detects changes on its own and responds quickly to the market, helping you not miss key moments.";
$s5_p2 = "The algorithms work 24/7 and identify new opportunities as soon as they appear. You get up-to-date information without delays or information overload.";
$s5_p3 = "At the same time, security stays at a high level: data protection, secure access, and trade control. $site_name suits beginners and active traders alike — the decisions are still yours, but backed by a solid analytical foundation.";
$s5_img_alt = "$site_name financial automation";

// -------------------------
// Section 6 -- "operaciones consistentes" (principles box + 4 items)
// -------------------------
$s6_title = "Consistent Trading Starts With an Organized System";
$s6_p1 = "$site_name helps bring structure to your work with the market. The platform creates a clear framework: you define your goals and your risk level, and the system tailors its analysis to your style — with no chaos and no overload.";
$s6_p2 = "24/7 analysis turns the flow of data into simple, understandable signals. You see only what matters: where there's movement, where it's worth entering, and when it's better to wait. Over time, the algorithms get sharper and adapt to the market.";
$s6_item1_title = "Choose Your Pace: Fast Trading or a Long-Term Approach";
$s6_item1_text = "$site_name supports different strategies. For active trading, the system flags entry points and price moves. For a longer-term approach, it helps you hold positions with trend and risk in mind.";
$s6_item2_title = "Entry Points Without the Guesswork";
$s6_item2_text = "The platform shows where the market is most active. That helps you enter with more confidence and exit on time, without improvising.";
$s6_item3_title = "Risk Management From the Start";
$s6_item3_text = "You can see possible scenarios ahead of time: where the risk is lower and the potential higher. That way you can plan trades before the move even starts.";
$s6_item4_title = "Analysis That's Ready to Use";
$s6_item4_text = "$site_name doesn't overwhelm you with complicated terminology. You get clear information, ready to use, designed to help you decide faster and with more confidence.";
$s6_cta = "Start Now";

// -------------------------
// Section 7 -- "Herramientas sencillas" (tools points)
// -------------------------
$s7_title = "Simple Tools for Precise Decisions With $site_name";
$s7_quote = "$site_name gives you everything you need to trade the market — without technical jargon or information overload. The platform analyzes price movement, trends, and possible entry points on its own, showing only what really matters.";
$s7_point1 = "The system helps detect when the market may turn, where strong moves are appearing, and which moments are best to enter or exit. Every signal comes pre-processed — you don't need to master complex indicators.";
$s7_point2 = "It also includes copy trading: you can follow the decisions of experienced traders and replicate them without spending time on your own analysis.";
$s7_point3 = "The interface stays as simple as possible — every tool is understood at a glance and ready to use from the very first moment.";

// -------------------------
// Section 8 -- metrics ("Encuentra zonas clave de timing", 6 items)
// -------------------------
$s8_title = "Find Key Timing Zones With $site_name AI";
$s8_item1 = "Automatic diversification spreads funds across different assets, reducing risk and protecting capital even in unstable markets.";
$s8_item2 = "A fully autonomous system — you don't need to watch the charts. The algorithms analyze the market and make decisions on their own.";
$s8_item3 = "Withdrawals are available at any time — to bank cards, crypto wallets, or electronic payment systems, without delays.";
$s8_item4 = "Daily reports show your results and give you full control of the situation in real time.";
$s8_item5 = "Flexible risk-level settings let you choose a strategy that matches your goals — from conservative to more aggressive.";
$s8_item6 = "A profit potential of up to 400% makes $site_name a tool for those who don't just want to preserve their capital, but grow it significantly.";

// -------------------------
// Section 9 -- "Analítica experta" (border box)
// -------------------------
$s9_title = "Expert Analytics Powered by $site_name";
$s9_quote = "$site_name combines the power of algorithms with market experience, turning complex data into clear, easy-to-understand signals. The system detects patterns and potential opportunities quickly, helping you decide without information overload.";
$s9_p1 = "You receive pre-processed analytics that factor in both technical indicators and market behavior — so you can act with more speed, confidence, and precision.";
$s9_img_alt = "$site_name investment strategy";

// -------------------------
// Testimonials (TZ item 4: fixed default names, not geo-linked)
// -------------------------
$reviews_title = "What Our Users Say";
$review_1_text = "The platform is very intuitive, and its tools have helped me improve my trading results.";
$review_1_author = "Andrew Quinn";
$review_2_text = "Fast support and really useful learning resources — perfect for people just starting out.";
$review_2_author = "Nora Sanders";
$review_3_text = "Customizable charts and fast execution — it's been my first choice for months.";
$review_3_author = "Sergio Walsh";
$review_4_text = "Signing up took less than five minutes, and the dashboard makes it easy to see exactly where my money is.";
$review_4_author = "Rachel Bennett";
$review_5_text = "I like that the platform explains the reasoning behind each signal instead of just throwing numbers at you.";
$review_5_author = "Marcus Webb";
$review_6_text = "Withdrawals have always been quick for me, and the support team actually answers within minutes.";
$review_6_author = "Isla Fraser";

// -------------------------
// FAQ (also used for FAQPage schema, TZ item 20)
// -------------------------
$faq_title = "Frequently Asked Questions About $site_name";
$faq_q1 = "Can $site_name detect market changes in real time?";
$faq_a1 = "Yes. It tracks live data, identifies momentum shifts in their early stages, and spots patterns before they fully develop, giving users a timely edge.";
$faq_q2 = "Can the $site_name experience be customized?";
$faq_a2 = "Yes. Users can choose areas of interest, adjust the level of detail, and follow public strategies that match their trading style or learning needs.";
$faq_q3 = "Does $site_name replace traditional research methods?";
$faq_a3 = "No. It enhances them by offering AI-filtered insights quickly, while the user keeps full control of their own research and decisions.";
$faq_cta = "Discover More Now";

// -------------------------
// Highlights ("Puntos destacados", 5 items)
// -------------------------
$highlights_title = "$site_name Highlights";
$hl1_emoji = "🤖";
$hl1_title = "Sign-Up Cost";
$hl1_desc = "No fees to register";
$hl2_emoji = "💰";
$hl2_title = "Trading Commissions";
$hl2_desc = "No cost at all";
$hl3_emoji = "📋";
$hl3_title = "Ease of Registration";
$hl3_desc = "Sign-up is fast and simple";
$hl4_emoji = "📊";
$hl4_title = "Educational Focus";
$hl4_desc = "Lessons on crypto, Forex trading, and investing";
$hl5_emoji = "🌎";
$hl5_title = "Available Countries";
$hl5_desc = "Not available in the U.S., available in most other countries";

// -------------------------
// Footer
// -------------------------
$footer_tagline = "Trade wisely, grow with confidence";
$footnav_about = "About us";
$footnav_product = "Product";
$footnav_offer = "Offer";
$footnav_contacts = "Contact us";
$footnav_faq = "FAQ";
$footnav_privacy = "Privacy Policy";
$footnav_conditions = "Conditions of Use";
$footnav_risk = "Risk Warning";
$footer_copyright = "© 2026 $site_name";
$footer_disclaimer = "$site_name publishes general educational material covering trading, investing, financial markets, and digital assets. Articles, market data, charts, and other website content are provided for informational purposes and should not be treated as financial, investment, or legal advice. While we aim to provide reliable and current information, we cannot guarantee its accuracy or completeness and are not responsible for losses resulting from reliance on the content.<br><br>Trading involves risk, and cryptocurrency, Forex, CFDs, stocks, and other financial products can fluctuate significantly in value. Consider your own financial circumstances and risk tolerance before trading, and seek professional advice where appropriate. Never commit funds you cannot afford to lose.";

// -------------------------
// Chat widget (TZ item 12)
// -------------------------
$quiz_consultant_name = "Sofia";
$quiz_consultant_role = "Trading Consultant";
$quiz_text_welcome = "Hi there! I'm Sofia, your personal trading consultant. Do you have a couple of minutes to find the best plan for you?";
$quiz_text_q1 = "Have you traded before?";
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
// Shared inner-page nav / breadcrumbs
// -------------------------
$bc_home = "Home";
$bc_about = "About Us";
$bc_product = "Product";
$bc_offer = "Offer";
$bc_contacts = "Contact Us";
$bc_faq = "FAQ";
$bc_privacy = "Privacy Policy";
$bc_conditions = "Conditions of Use";
$bc_risk = "Risk Warning";
$bc_sign = "Sign Up";
$bc_thanks = "Thank You";
$bc_sitemap = "Sitemap";

// -------------------------
// About page
// -------------------------
$about_meta_title = "About $site_name";
$about_meta_description = "Learn about $site_name's mission: making market analysis clearer and more accessible through AI-driven tools.";
$about_h1 = "About $site_name";
$about_lead = "$site_name was built around one idea: trading decisions should be based on clear information, not guesswork.";
$about_p1 = "We combine artificial intelligence with real market experience to turn complex, noisy data into signals that are easy to understand and act on. Our platform monitors markets around the clock so you don't have to.";
$about_p2 = "Whether you're placing your first trade or you've been active in the markets for years, $site_name is designed to meet you where you are — with tools that scale from simple guidance to advanced, real-time analytics.";
$about_p3 = "We believe technology should support your judgment, not replace it. Every signal $site_name produces is meant to inform a decision that's still entirely yours.";

// -------------------------
// Product page
// -------------------------
$product_meta_title = "$site_name Product — AI Market Analysis Tools";
$product_meta_description = "Explore the $site_name product: real-time AI market analysis, copy trading, risk controls, and automated diversification.";
$product_h1 = "The $site_name Product";
$product_lead = "One platform that reads the market for you: real-time analysis, copy trading, and flexible risk tools, built to make trading decisions clearer.";

// -------------------------
// Offer page
// -------------------------
$offer_meta_title = "$site_name Offer — Get Started for Free";
$offer_meta_description = "See what's included in the current $site_name offer: free registration, no trading commissions, and full platform access.";
$offer_h1 = "Our Current Offer";
$offer_lead = "Create your account for free and unlock the full $site_name platform &mdash; no sign-up fees, no trading commissions.";
$offer_li1 = "No fees to register your account";
$offer_li2 = "No commissions on trades";
$offer_li3 = "Full access to real-time AI market analysis and copy trading";
$offer_li4 = "Withdrawals available at any time, with no hidden charges";
$offer_li5 = "Educational resources on crypto, Forex, and investing included";
$offer_note = "Availability can vary by region. Review our <a class=\"link\" href=\"risk-warning.php\">Risk Warning</a> before you fund an account.";

// -------------------------
// Contact page
// -------------------------
$contacts_meta_title = "Contact $site_name — Get in Touch With Our Team";
$contacts_meta_description = "Have a question about your $site_name account or the platform? Reach our support team by email or send us a message.";
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
// Privacy Policy page
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
// Conditions of Use page
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
        "body" => "$site_name provides an online platform with educational content, market information, and AI-assisted analysis tools. Nothing on the Website constitutes financial, investment, tax, or legal advice, and any information provided is for general informational purposes only.",
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
// Risk Warning page (TZ item 16, verbatim text)
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
// Sign-up page (hosts the primary lead form)
// -------------------------
$sign_meta_title = "Sign Up | $site_name — Create Your Free Account";
$sign_meta_description = "Create your free $site_name account in minutes and start trading smarter with AI-powered market analysis.";
$sign_h1 = "Create Your Free Account";
$sign_lead = "Join $site_name in a few minutes. Fill in your details below to get started.";

// -------------------------
// Thank-you page
// -------------------------
$thanks_meta_title = "Thank You | $site_name";
$thanks_h1 = "Thank You!";
$thanks_text = "Your details have been received. A member of the $site_name team will be in touch shortly to help you get started.";
$thanks_btn = "Back to Homepage";

// -------------------------
// Sitemap page
// -------------------------
$sitemap_meta_title = "Sitemap | $site_name";
$sitemap_meta_description = "Browse every page on the $site_name website, including the trading platform, offer, support and legal pages.";
$sitemap_h1 = "Sitemap";
$sitemap_lead = "Every page on $site_name in one place.";
