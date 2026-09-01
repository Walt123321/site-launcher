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
require_once __DIR__ . '/geo_flags.php';
$country_flag_code = $GEO_NAME_TO_CODE[$country_name] ?? '';

// Reviews
$review_1_author = "Alex M.";
$review_2_author = "Daniel R.";
$review_3_author = "Sophie L.";
$review_4_author = "Passive Income Seeker";

// MAIN TITLE/DESCRIPTION
$home_meta_title = "$site_name — Smart Trading Platform | Official Site";
$home_meta_description = "Visit the official $site_name website to access a secure trading platform with intelligent market tools, real-time data, and a streamlined experience for online traders.";

// HERO
$hero_h1 = "Plataforma $site_name";
$hero_text = "With the right knowledge, you're always one step ahead of the market. $site_name helps you find the right financial education for your journey.";
$hero_form_heading = "Open your free account now and trade smarter.";
$hero_form_button = "Sign up securely now";
$hero_terms_link = "Terms of Use";
$hero_privacy_link = "Privacy Policy";
$hero_disclaimer_prefix = "By signing up, you agree to our";
$hero_disclaimer_and = "and acknowledge our";

// TRUST STRIP
$trust_strip_text = "Join over 20,000 learners shaping their own financial future.";
$trust_strip_subtext = "Partner with renowned financial education providers in 35 countries and gain practical trading knowledge — backed by professional guidance and an engaged community.";
$trust_stat_1_label = "Partner Companies";
$trust_stat_1_value = "500+";
$trust_stat_2_label = "Active Users";
$trust_stat_2_value = "30,000+";
$trust_stat_3_label = "Success Rate";
$trust_stat_3_value = "98%";
$trust_stat_4_label = "Countries Covered";
$trust_stat_4_value = "35";

// WHY US
$why_us_label = "Why choose us";
$why_us_title = "This is why $site_name is the first choice for traders and learners";
$why_us_subtitle = "The right partner. The perfect support. Instantly.";
$why_us_intro = "Trade, grow, and shape your financial future — it's all within reach. We help you find the right financial education provider. Our smart platform suggests programs tailored exactly to your goals, pace, and learning style. Now it's your turn!";

$icon_1_title = "Personalized matching in moments";
$icon_1_text = "Save yourself the endless searching and guesswork. Our system analyzes your goals and knowledge to match you with the right financial education provider. Whether beginner or advanced — we find the ideal solution so you reach your goal faster.";
$icon_2_title = "Worldwide network of trusted providers";
$icon_2_text = "We partner with leading educational institutions in over 35 countries. Every program is carefully vetted for credibility, results, and support to guarantee you the highest quality — wherever you are. Start learning with confidence, no matter where you're from.";
$icon_3_title = "Built for a fast start";
$icon_3_text = "No complicated software, no complex options. We make it easy by connecting you directly with efficient solutions. Answer a few questions and instantly discover your options. You're just one moment away from a confident, secure start in trading.";

// PANEL 1 (image: traders-analyzing)
$panel1_eyebrow = "Stop searching — start learning.";
$panel1_title = "Move forward faster. Without wasting time.";
$panel1_lede = "Make the right choice from the start and secure your edge.";
$panel1_text = "Whether you're new to trading or looking to deepen your knowledge, the biggest challenge isn't the content — it's choosing a trustworthy provider. We make it easy: we connect you with vetted, reputable financial education providers who offer real expertise. No endless video loops. No overpriced \"pro courses.\" Just transparent, reliable options tailored to your goals — so you can focus on what matters: gaining knowledge and getting results.";

// PANEL 2 (image: laptop-chart)
$panel2_eyebrow = "Take control of your learning";
$panel2_title = "Choose freely. Decide safely.";
$panel2_lede = "What you really need is trustworthy options — not another course.";
$panel2_text = "We don't prescribe a single provider or a fixed path. Instead, we guide you through a proven network of reliable financial education partners. Compare, evaluate, and find the solution that fits you perfectly — with full transparency and zero pressure, so you stay in control and make informed decisions. Real growth starts with options, not confusion.";
$panel2_button = "Get started now";

// PANEL 3 (image: trader-night)
$panel3_eyebrow = "No pressure. Just possibilities.";
$panel3_title = "Try first. Decide later.";
$panel3_lede = "Discover the leading financial learning platforms — no hidden costs, no commitment.";
$panel3_text = "At $site_name, we believe education should be a choice — not a risk. That's why we offer trustworthy programs with free trials, transparent pricing, and a stress-free start. Test the programs, compare your options, and decide only once you're ready and convinced. Your only investment: the chance to get started.";

// PANEL 4 / testimonials intro (image: analyst-portrait)
$panel4_eyebrow = "Real voices. Real results.";
$panel4_title = "Make your choice based on facts, not empty promises.";
$panel4_lede = "Before choosing a provider, listen to those who've already walked the path.";
$panel4_text = "The best decisions are based on real experience — not flashy advertising. $site_name gives you verified feedback from learners who've taken the courses, worked with mentors, and achieved real results. This gives you a clear picture of each program's benefits so you can decide with confidence.";

// TESTIMONIALS
$testimonials_label = "Testimonials";
$testimonials_title = "Real stories from learners who found their own path";

$review_1_text = "$site_name saved me weeks of searching. I didn't know which trading course to choose — the online selection was simply overwhelming. $site_name suggested two programs that perfectly matched my goals and budget, both with positive reviews and a trial period. I signed up the very same day. Everything went smoothly.";
$review_1_role = "Beginner Trader";
$review_2_text = "The courses I found through $site_name helped me grow my portfolio by 14% in just three months. What impressed me most was how personalized the suggestions were. I was able to choose a provider that perfectly matched my risk tolerance, schedule, and learning style. For me, it's about building the right strategy from day one.";
$review_2_role = "Part-time Trader";
$review_3_text = "I finally have confidence in my learning journey. Before $site_name, my learning was pretty unstructured — YouTube videos and expensive courses. Now I'm building my knowledge with a structured, reliable program that teaches me the essential skills. I know exactly what to expect. A real curriculum and real support.";
$review_3_role = "Freelance Seller &amp; Aspiring Investor";

// FAQ
$faq_label = "FAQ";
$faq_title = "Got questions? We've got answers.";
$faq_q1 = "How does $site_name help me choose the right program for my financial education?";
$faq_a1 = "We take into account your goals, current knowledge, and learning preferences, and match you with accredited education providers. You only receive the best-fitting options — no sponsored recommendations and no irrelevant offers.";
$faq_q2 = "Is using $site_name free?";
$faq_a2 = "Yes. Using our platform to discover and compare programs is free. Some providers offer free trials or paid plans — whether you sign up is entirely up to you.";
$faq_q3 = "Do you offer your own courses?";
$faq_a3 = "No. We don't offer our own courses. Instead, we connect you with reputable financial education providers so you can choose the program that suits you best.";
$faq_q4 = "How can I be sure the programs you recommend are legitimate?";
$faq_a4 = "All recommended providers meet our strict quality criteria: transparent pricing, genuine learner feedback, and proven teaching methods. Every program is thoroughly vetted to guarantee you real value.";
$faq_q5 = "What if I'm a complete beginner?";
$faq_a5 = "No worries. We guide you with beginner-friendly programs that start from zero and take you forward safely, step by step.";
$faq_q6 = "Can I compare several options before deciding?";
$faq_a6 = "Yes, of course. You can compare different options at your own pace and choose the provider that fits you best.";

// CONTACT SECTION (homepage)
$contact_label = "Get in touch";
$contact_title = "Contact $site_name";
$contact_subtitle = "Have a question or need support? We're here to advise and guide you.";
$contact_text = "At $site_name, we believe success in trading has nothing to do with luck — it comes from precision, foresight, and good planning.";
$contact_form_text = "Simply fill out the form below, and a member of our team will get back to you shortly to guide you safely on your journey.";
$contact_form_button = "Send message";

// PRE-ABOUT CTA
$pre_about_title = "Find the right education. Gain the skills to trade smarter.";
$pre_about_text = "You're here to build and refine your trading skills.";
$pre_about_button = "Get started now";

// IMAGE ALT TEXT
$alt_tablet_dashboard = "Tablet displaying stock trading dashboard";
$alt_traders_analyzing = "Traders analyzing stock charts";
$alt_laptop_chart = "Laptop showing trading chart";
$alt_trader_night = "Trader working at night";
$alt_analyst_portrait = "Smiling financial analyst portrait";

// ABOUT
$about_label = "About us";
$about_title = "About $site_name";
$about_intro = "$site_name doesn't just help you learn — we help you unlock your full trading potential.";
$about_text_1 = "$site_name believes that smart trading begins with the right education. Our goal is to help both beginners and experienced traders find high-quality financial courses.";
$about_text_2 = "We work with highly qualified providers who offer structured learning plans, practical insights, and growth-focused support. Whether you're just starting out or refining your approach, $site_name guides you to programs perfectly matched to your goals, skills, and learning style.";
$about_text_3 = "Every recommendation is personal: no cluttered lists, no paid rankings — just meaningful, vetted options. This helps you gain solid knowledge to trade more thoughtfully and confidently, leading to fewer impulsive decisions, better risk control, and stronger returns.";
$about_text_4 = "Our platform saves you hours of research and protects you from flashy, low-quality courses. We believe good education empowers traders to act strategically and grow sustainably.";


// ==========================================
// CHAT-QUIZ TRANSLATIONS & CONFIGURATION
// ==========================================

$quiz_consultant_name = 'Sophia';
$quiz_consultant_role = 'Onboarding Officer';

$quiz_text_welcome   = "Hello! I am $quiz_consultant_name from $site_name. Great news — you're already pre-qualified. Let's set up your learning profile and find the right program for you.";
$quiz_text_q1 = "To match you with providers available in your region, please confirm your country: $country_name";
$quiz_text_a1_yes    = "Yes, this is my current location";
$quiz_text_a1_no     = "No";

$quiz_text_q2 = "Select your age group so we can recommend suitable programs:";

$quiz_text_q3        = "Do you have an active bank account or card to pay for your course once you choose one?";
$quiz_text_a3_yes    = "Yes, active account available";
$quiz_text_a3_no     = "Not available at this time";

$quiz_text_q4        = "Tell us your main source of income so we can suggest programs that fit your budget:";
$quiz_text_a4_1      = "Employment Income / Self-Employed";
$quiz_text_a4_2      = "Savings / Personal Investments";
$quiz_text_a4_3      = "Other Sources";

$quiz_text_q5 = "Final step: one of our advisors will call to walk you through your options between 11:00 AM and 8:00 PM. Does that time work for you?";
$quiz_text_a5_yes    = "Yes, this window is optimal";
$quiz_text_a5_no     = "Request immediate priority contact";

$quiz_text_loader    = "Matching you with the right education providers...";
$quiz_text_final_ttl = "You're all set! 🎉 Your matches are ready. Complete your registration below to view your personalized programs:";

$quiz_placeholder_fname = "First Name";
$quiz_placeholder_lname = "Last Name";
$quiz_placeholder_email = "Email Address";
$quiz_placeholder_phone = "Phone Number";
$quiz_btn_submit = "Get My Matches";
$quiz_text_typing       = "is preparing response...";
$quiz_text_processing   = "Validating inputs...";


// TITLE/DESCRIPTION
$sign_meta_title = "Sign Up | $site_name";
$sign_meta_description = "Create your free $site_name account and get matched with vetted financial education providers.";
$product_meta_title = "Our Platform | $site_name";
$product_meta_description = "See how $site_name matches you with the right financial education programs, tracks your progress, and keeps your options transparent.";
$privacy_meta_title = "Privacy Policy | $site_name Data Security";
$privacy_meta_description = "Learn how $site_name protects user privacy under strict international encryption standards.";
$offer_meta_title = "Get Started | $site_name";
$offer_meta_description = "Sign up, tell us your goals, and start comparing vetted financial education programs with $site_name.";
$faq_page_meta_title = "FAQ | $site_name Support";
$faq_page_meta_description = "Answers to common questions about how $site_name works, pricing, and getting started.";
$contacts_meta_title = "Contact & Support | $site_name";
$contacts_meta_description = "Get in touch with the $site_name team for help choosing a program or setting up your account.";
$conditions_meta_title = "Terms of Use | $site_name";
$conditions_meta_description = "Review the official terms and conditions for using the $site_name website and matching service.";

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
$footnav_sitemap = "Site map";
$footnav_signup = "Sign up";
$footnav_about = "About us";
$footnav_col_pages = "Pages";
$footnav_col_support = "Support";
$footnav_col_legal = "Legal";
$footnav_col_company = "Company";
$footer_partner_text = "Your trusted financial education partner";
$footer_disclaimer = "$site_name does not accept liability for any financial losses or damages arising from the use of the information available on this website, including educational materials, market prices, charts, analysis, or other published content. Trading and investing in financial markets carry inherent risks. Before making any financial decisions, you should carefully assess your own objectives, financial situation, and level of experience, and consult an independent financial advisor if necessary. Never invest funds that you cannot afford to lose, and be aware that products such as Forex, CFDs, and cryptocurrencies involve significant risk and may not be appropriate for every investor.";
$footer_copyright = "Copyright 2026 © $site_name, All Rights Reserved";

// FAQ
$faq_1_q = "How do I get started?";
$faq_1_a = "Create your profile, tell us your goals and experience level, and we'll instantly match you with vetted courses and programs — plans start from $app_price $app_currency.";
$faq_2_q = "Is my money and data safe? Is $site_name reliable?";
$faq_2_a = "Yes. Your data is protected with industry-standard encryption, and every provider in our network is vetted for transparency, genuine learner feedback, and proven teaching methods before we recommend it.";
$faq_3_q = "Can I cancel or switch programs if it's not right for me?";
$faq_3_a = "Yes. If a program isn't the right fit, contact our support team and we'll help you switch to a better-matched provider or process a refund according to that provider's policy.";
$faq_4_q = "How do I know if this platform is right for me?";
$faq_4_a = "$site_name is built for both complete beginners and experienced traders looking to sharpen their skills — every recommendation is tailored to your own goals and experience level.";
$faq_5_q = "Do I need trading experience to get started?";
$faq_5_a = "No prior experience is necessary. We offer beginner-friendly programs that start from the fundamentals and guide you forward step by step.";

// Register Down
$official_heading = "Sign up with the official $site_name platform™";
$official_description = "Create your free account to get matched with vetted financial education providers tailored to your goals.";

// SIGN PAGE
$breadcrumb_home = "Home";
$breadcrumb_current = "Sign-in/up";

// PRODUCT PAGE
$breadcrumb_product = "Product";
$analytics_heading = "Compare Programs with $site_name";
$analytics_description = "See clear, side-by-side comparisons of vetted financial education programs. Make an informed choice with confidence.";
$analytics_btn_signup = "Sign Up";
$app_main_heading = "Your Learning Dashboard";
$app_feature_1_title = "Program Directory";
$app_feature_1_text = "Browse vetted financial education programs at your fingertips";
$app_feature_2_title = "Progress Tracking";
$app_feature_2_text = "Comprehensive progress metrics";
$app_feature_3_title = "Mobile view";
$app_feature_3_text = "Optimized for mobile browsers";
$app_feature_4_title = "Saved Programs";
$app_feature_4_text = "Keep track of the programs you're comparing";
$app_img_alt = "Mobile interface for tracking your learning programs";
$products_stats_currencies_v = "500+";
$products_stats_currencies_l = "Partner programs";
$products_stats_users_v = "30,000+";
$products_stats_users_l = "Learners matched";
$products_stats_volume_v = "98%";
$products_stats_volume_l = "Success rate";
$products_stats_countries_v = "35";
$products_stats_countries_l = "Countries covered";

// Capabilities
$capabilities_main_title = "What You Get";
$capabilities_feature_1_title = "Program Comparison";
$capabilities_feature_1_text = "Compare curriculum, pricing, and reviews across every vetted provider in one place.";
$capabilities_feature_2_title = "Fast Enrollment";
$capabilities_feature_2_text = "Sign up in minutes with a secure, straightforward enrollment process.";
$capabilities_feature_3_title = "Verified Reviews";
$capabilities_feature_3_text = "Read real feedback from learners who've completed each program before you decide.";
$capabilities_feature_4_title = "Ongoing Support";
$capabilities_feature_4_text = "Get guidance from our team at every step, from sign-up to course completion.";
$capabilities_cta_heading = "Let's Go!";
$capabilities_cta_text = "Join thousands of learners who found the right financial education program through $site_name.";

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
$privacy_google_choices = 'Manage tracking preferences via <a href="http://www.google.com/settings/ads" target="_blank" rel="noopener">Google Ads Settings</a> or use the <a href="https://tools.google.com/dlpage/gaoptout" target="_blank" rel="noopener">Google Analytics Opt-out Add-on</a>. You can also review Google\'s own data practices in its <a href="https://www.google.com/intl/en/policies/privacy/" target="_blank" rel="noopener">Privacy Policy</a>.';
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
$offer_cta_h1 = "Find Your Program";
$offer_cta_text = "Get started in minutes: sign up, tell us your goals, and get matched with the right financial education program instantly.";
$offer_how_it_works_title = "How It Works";
$step_1 = "Create an account";
$step_2 = "Tell us your goals";
$step_3 = "Start learning with your matched program";
$offer_official_platform_title = "This is the official $site_name matching platform™";
$offer_official_platform_text = "A trusted, transparent way to find and compare vetted financial education providers.";

$faq_page_title = "FAQ";
$faq_page_breadcrumb_home = "Home";
$faq_page_breadcrumb_current = "FAQ";
$faq_page_help_title = "How can we help you?";

// SITE MAP PAGE
$sitemap_meta_title = "Site map | $site_name";
$sitemap_meta_description = "Browse a full overview of all pages available on the $site_name website.";
$sitemap_breadcrumb_home = "Home";
$sitemap_breadcrumb_current = "Site map";
$sitemap_h1 = "Site map";
$sitemap_intro = "Below is a complete overview of every page on the $site_name website.";

// CONDITIONS PAGE
$contacts_h1 = "Contacts";
$contacts_h3 = "If you have technical or account inquiries, please reach out via email";
$conditions_breadcrumb_home = "Home";
$conditions_breadcrumb_current = "Conditions of Use";
$conditions_h1 = "Conditions of Use";

$conditions_s1_title = "1. General";
$conditions_s1_text = "This Website provides access to a financial education matching service. Usage constitutes full acceptance of these Terms and Privacy Policy.";
$conditions_s2_title = "2. Eligibility";
$conditions_s2_text = "Users must be at least 18 years of age and possess full legal authority in their operating jurisdiction.";
$conditions_s3_title = "3. Restricted Access";
$conditions_s3_text = "Access may be restricted in jurisdictions where local regulations prohibit the type of matching service we provide.";
$conditions_s4_title = "4. Prohibited Use";
$conditions_s4_text = "Users must not misuse the system, attempt unauthorized access to our systems, or reverse-engineer our software.";
$conditions_s5_title = "5. Intellectual Property";
$conditions_s5_text = "All source code, user interfaces, and brand assets remain the exclusive property of the operating company.";
$conditions_s6_title = "6. Liability";
$conditions_s6_text = "Platform tools are provided 'as is'. We accept no liability for outcomes resulting from a user's chosen provider or program.";
$conditions_s7_title = "7. Third-Party Services";
$conditions_s7_text = "Integrations with third-party providers operate via secure connections. Users deal directly with their chosen provider for enrollment and payment.";
$conditions_s8_title = "8. External Links";
$conditions_s8_text = "Links to external resources are provided for convenience. We do not endorse or guarantee external software.";
$conditions_s9_title = "9. Miscellaneous";
$conditions_s9_text = "We reserve the right to modify these terms or the service at any time upon web publication.";

// ==========================================
// RISK WARNING PAGE
// ==========================================
$page_title_risk_warning = "Risk Warning | $site_name";
$page_description_risk_warning = "Understand the risks of trading and how $site_name helps you manage them with confidence.";
$risk_warning_breadcrumb_home = "Home";
$risk_warning_breadcrumb_current = "Risk Warning";
$risk_warning_title = "Risk Warning";
$risk_warning_intro = "Understanding risks is the first step toward confident trading.";

$risk_warning_ai_heading = "How Our AI System Helps Manage Risk:";
$risk_warning_ai_1 = "<strong>Algorithmic Efficiency & Emotionless Trading:</strong> Advanced algorithms analyze market signals to execute trades objectively at optimal moments.";
$risk_warning_ai_2 = "<strong>Data-Driven Strategies:</strong> Strategies are based on verified market patterns and real-time analysis rather than guesswork.";
$risk_warning_ai_3 = "<strong>Flexible Settings & Full Control:</strong> Adjust your risk parameters anytime. Track all balances and trades transparently on your dashboard with no hidden fees and restriction-free withdrawals.";

$risk_warning_disclaimer = "<strong>Disclaimer:</strong> Trading always carries risk. Automated systems (including AI) do not guarantee profit, can fail due to software errors or unexpected market events, and require user monitoring. Past performance is not indicative of future results. This platform serves purely informational and marketing purposes and does not provide financial advice.";

$risk_warning_s1_heading = "1. General & Cryptocurrency Market Risks";
$risk_warning_s1_1 = "Cryptocurrencies are highly volatile, speculative assets that operate 24/7 with minimal regulatory oversight in most jurisdictions.";
$risk_warning_s1_2 = "Values can fluctuate dramatically within short periods, potentially leading to a total loss of invested capital.";
$risk_warning_s1_3 = "Market values can be heavily impacted by regulatory updates, technical developments, security breaches, or broader macroeconomic events.";
$risk_warning_s1_4 = "Some assets may lose all value completely. Invest only funds you can afford to lose.";

$risk_warning_s2_heading = "2. Execution, Liquidity & Leverage Risks";
$risk_warning_s2_1 = "<strong>Market Volatility & Liquidity:</strong> Extreme price movements (10–20%+ daily) or low liquidity (especially in smaller coins) can lead to delays, platform outages, and severe execution slippage. Stop-loss orders cannot guarantee loss limits under extreme conditions.";
$risk_warning_s2_2 = "<strong>Leverage & Margin Risks:</strong> Leveraged products amplify both gains and losses, meaning you can lose more than your initial deposit. Approximately 70–80% of retail investor accounts lose money when trading leveraged products.";

$risk_warning_s3_heading = "3. Technical, Cybersecurity & Third-Party Risks";
$risk_warning_s3_1 = "<strong>Technical Factors:</strong> Online trading inherently involves risks of internet disconnects, hardware/software errors, and service unavailability.";
$risk_warning_s3_2 = "<strong>Cybersecurity:</strong> Cryptocurrency accounts are frequent targets for phishing, malware, and hacks. Transactions are irreversible; compromising your credentials can result in permanent loss.";
$risk_warning_s3_3 = "<strong>Third-Party Platforms:</strong> This website may connect users to third-party platforms. We do not control, endorse, or guarantee their security, operations, or solvency. Always conduct your own due diligence before depositing funds on external platforms.";

$risk_warning_s4_heading = "4. Regulatory, Tax & Final Provisions";
$risk_warning_s4_1 = "<strong>Legal Compliance & Taxes:</strong> Regulatory frameworks vary widely and change rapidly. Users are solely responsible for ensuring their trading activity complies with local laws and for fulfilling their own tax obligations.";
$risk_warning_s4_2 = "<strong>No Profit Guarantees:</strong> There is no \"safe\" or risk-free crypto trading. Any yield figures or performance examples are purely hypothetical.";
$risk_warning_s4_3 = "<strong>Suitability:</strong> If you do not fully understand the risks, rely on essential funds, or trade with borrowed money, crypto trading is not suitable for you. Consult an independent licensed financial advisor if uncertain.";

$risk_warning_contact = "<strong>Contact:</strong> For any questions regarding this statement or to submit an inquiry, please reach out to our official customer support team via the contact form on our website.";
$footer_risk_warning = "Risk Warning";
?>
