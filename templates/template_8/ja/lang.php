<?php
require __DIR__ . '/../lang.php';
$site_lang = 'ja-JP';
$form_language = 'ja'; // matches this page's own language, not the offer's global default

// ============================================================
// JA TRANSLATION OVERRIDES
// Identity/config vars ($site_name, $site_slug, $site_domain, $site_url, $app_price, $app_currency, $site_lang, $country_name, $country_flag_code, $privacy_last_update, $rating_value, $rating_count, $review_count, $form_country, $form_language, $form_phone_country, $form_only_countries, $review_1_author, $review_2_author, $review_3_author, $review_4_author, $quiz_consultant_name) are
// intentionally NOT overridden -- they stay exactly as inherited from the
// root lang.php.
// ============================================================

// Brand / Platform Variables

// Geo-language stats bar fallback content (used by the language-folder pages'
// own "stats" section; the fr/de/it/nl folders override these with native
// translations, the other 19 folders inherit this English fallback)
$stat_1_value = "400万人以上";
$stat_1_label = "登録ユーザー数";
$stat_2_value = "98以上";
$stat_2_label = "対応国数";
$stat_3_value = "65以上";
$stat_3_label = "利用可能通貨";
$stat_4_value = "24時間365日";
$stat_4_label = "取引アクセス";
$stat_5_value = "256ビット";
$stat_5_label = "暗号化標準";
$stat_6_value = "5億ドル以上";
$stat_6_label = "顧客預金総額";

// Keitaro Form Integration Variables (defaults -- overwritten per-launch by
// generate_lang_files(); must stay valid on their own since nothing else in
// this file replaces them for a page that's ever served un-generated)

// 4 Verified Reviews (TZ Item 8)
$review_1_role = "フランス";
$review_1_text = "プラットフォームがどのように機能するかを確認するために、500ユーロから始めました。約3週間後、残高は約1120ユーロに増加しました。インターフェースは使いやすく、市場のインサイトがより良い決定を下すのに役立ちました。";
$review_1_badge = "報告されたリターン +18.4%";

$review_2_role = "ドイツ";
$review_2_text = "以前にいくつかの取引プラットフォームを試しましたが、これが今のところお気に入りです。操作しやすく、ツールは本当に便利で、全体的に非常に前向きな経験をしています。";
$review_2_badge = "報告されたリターン +19.1%";

$review_3_role = "イタリア";
$review_3_text = "最も印象的だったのは、すべてが直感的に感じられることです。登録は迅速で、ダッシュボードはよく整理されており、プラットフォームのおかげで取引がずっと便利になりました。";
$review_3_badge = "報告されたリターン +16.8%";

$review_4_role = "オランダ";
$review_4_text = "以前の取引経験がなかったので、750ユーロから始めました。1か月以内に、ツールと学習リソースに従うことで1765ユーロをわずかに超えました。自信を築く素晴らしい方法でした。";
$review_4_badge = "報告されたリターン +18.0%";

$review_verified_label = "認証済みユーザー";
$reviews_section_title = "{$site_name}のレビュー";
$reviews_badge_trustworthy = "信頼できる";
$reviews_summary_rating = "4.7";
$reviews_summary_count = "189";
$reviews_summary_desc = "堅牢な自動化ツール、リアルタイム分析、包括的な学習リソースを備えた、強力で直感的な取引プラットフォーム。";

// CONSULTANT / CHAT QUIZ (TZ Item 13)
$quiz_consultant_role = "取引コンサルタント";
$quiz_text_welcome = "こんにちは!私はあなたの個人取引アシスタントです。30秒のクイズを受けて、自動化されたAI取引があなたにどのように役立つかを見つけてください。";
$quiz_text_q1 = "これまでに暗号資産や金融市場で取引したことがありますか?";
$quiz_text_a1_yes = "はい、多少の経験があります";
$quiz_text_a1_no = "いいえ、まったくの初心者です";
$quiz_text_q2 = "オンライン取引における主な経済的目標は何ですか?";
$quiz_text_q3 = "AIに自動的に取引を実行させたいですか、それとも手動で取引したいですか?";
$quiz_text_a3_yes = "自動AI取引(推奨)";
$quiz_text_a3_no = "AIシグナルによる手動取引";
$quiz_text_q4 = "取引に割り当てる初期予算はいくらですか?";
$quiz_text_a4_1 = "250ドル〜500ドル";
$quiz_text_a4_2 = "500ドル〜1,500ドル";
$quiz_text_a4_3 = "1,500ドル以上";
$quiz_text_q5 = "アカウントを作成してプラットフォームへの完全なアクセスを受け取る準備はできていますか?";
$quiz_text_a5_yes = "はい、始めましょう!";
$quiz_text_a5_no = "もっと情報が欲しいです";
$quiz_text_loader = "回答を分析し、最適な取引パラメータを準備しています...";
$quiz_text_final_ttl = "アカウント設定が完了しました!";
$quiz_text_processing = "プラットフォームアクセスを設定しています...";
$quiz_text_typing = "入力中...";
$quiz_placeholder_fname = "名";
$quiz_placeholder_lname = "姓";
$quiz_placeholder_email = "メールアドレス";
$quiz_placeholder_phone = "電話番号";
$quiz_btn_submit = "登録を完了する";

// METADATA (TZ Item 10)
$home_meta_title = "$site_name — 取引プラットフォーム | 公式サイト";
$home_meta_description = "公式{$site_name}ウェブサイトは、高度な取引ツール、リアルタイムの市場インサイト、トレーダー向けの使いやすい体験を備えた安全な暗号資産取引プラットフォームを提供します。";

// NAVIGATION & HEADER (TZ Item 3, 12)
$nav_about = "会社概要";
$nav_how = "仕組み";
$nav_why = "取引する理由";
$nav_faq = "よくある質問";
$nav_contacts = "お問い合わせ";
$nav_signin = "ログイン";
$nav_signup = "登録";

$mobnav_home = "ホーム";
$mobnav_product = "製品";
$mobnav_offer = "オファー";
$mobnav_contact = "お問い合わせ";
$mobnav_faq = "よくある質問";
$mobnav_signup = "登録";

// HERO SECTION
$hero_h1 = "<mark>$site_name</mark>プラットフォーム";
$hero_text = "公式{$site_name}暗号資産取引プラットフォーム";

// LEAD FORM
$form_fname_placeholder = "名";
$form_lname_placeholder = "姓";
$form_email_placeholder = "メール";
$form_phone_placeholder = "電話番号";
$form_btn_submit = "登録";
$form_disclaimer_text = "個人情報を入力してボタンをクリックすることにより、このウェブサイトの<a class='link link-primary' href='privacy.php'>プライバシーポリシー</a>および<a class='link link-primary' href='conditions.php'>利用規約</a>に同意したことになります。";

// SECURITY BADGES
$badge_ssl = "256ビットSSL";
$badge_payments = "安全な支払い";
$badge_2fa = "2FA";
$badge_cold_storage = "98% コールドストレージ";
$badge_regulated = "規制対象";
$badge_traders_trust = "400万人以上のトレーダーが信頼";

// SAFE SECTION (Vos fonds sont en sécurité)
$safe_title = "{$site_name}で<mark>資金は安全です</mark>";
$safe_desc = "銀行レベルの暗号化、検証済みの決済処理業者、98%のコールドストレージ—あなたのお金はあらゆる段階で保護されています。";

$safe_item1_title = "検証済み決済プロバイダー";
$safe_item1_desc = "支払いは、国際的なセキュリティ基準に準拠した認定プロバイダーを通じてのみ処理されます。カード情報は当社のプラットフォームに保存されることはありません。";
$safe_item1_badge = "安全な支払い";

$safe_item2_title = "二要素認証(2FA)";
$safe_item2_desc = "SMSまたはGoogle Authenticatorによる時間ベースのワンタイムパスワードで、アカウントに追加の保護層を追加します。";
$safe_item2_badge = "2FA";

$safe_item3_title = "98% コールドストレージ";
$safe_item3_desc = "デジタル資産の大部分は、マルチシグネチャプロトコルによって保護された地理的に分散されたオフラインのコールドストレージ保管庫に保管されています。";
$safe_item3_badge = "98% コールドストレージ";

$safe_item4_title = "規制された執行";
$safe_item4_desc = "当社は世界中の規制されたブローカーおよび流動性プロバイダーと提携し、コンプライアンス、透明性、トップクラスの執行を維持しています。";
$safe_item4_badge = "規制対象";

$safe_item5_title = "256ビットSSL暗号化";
$safe_item5_desc = "ブラウザと当社サーバー間のすべてのデータ送信は、軍用グレードのTLS 1.3暗号プロトコルで暗号化されています。";
$safe_item5_badge = "256ビットSSL";

// FREE GUIDE CTA BANNER (CTA 2)
$guide_cta_title = "無料ガイドを入手";
$guide_cta_subtitle = "「暗号資産取引で避けるべき10の間違い」";
$guide_cta_btn = "無料ガイドを請求";

// TRUST SECTION (Pourquoi les investisseurs font confiance à Ciel Cryptance)
$trust_title = "トレーダーが<mark>$site_name</mark>を信頼する理由";
$trust_desc = "世界中で400万人以上のユーザーが、その信頼性、強力な自動化、透明な環境のために{$site_name}を選択しています。";
$trust_subtitle = "現代のトレーダーのための主要なメリット:";

$trust_item1_title = "グローバル市場へのアクセス";
$trust_item1_desc = "1つの統合された取引ダッシュボードから、100種類以上の暗号資産、Forexペア、株式、商品を取引できます。";

$trust_item2_title = "堅牢な資金保護";
$trust_item2_desc = "分離されたアカウント、継続的な生体認証チェック、最先端のサイバーセキュリティが、24時間365日あなたの資本を保護します。";

$trust_item3_title = "隠れた手数料なし";
$trust_item3_desc = "透明な価格設定をお楽しみください。無料登録、無料入金、プラットフォーム管理手数料なし、即時出金リクエスト。";

$trust_item4_title = "迅速なサポート";
$trust_item4_desc = "専任のサポートチームが、ライブチャット、電話、またはメールで、質問や技術的な問い合わせにお応えします。";

$trust_market_info_text = "2026年の市場状況についての詳細情報";
$trust_market_info_btn = "取引する理由";

// START TRADING CTA (CTA 3)
$start_cta_title = "<span data-local-currency='$app_price'>$app_price $app_currency</span>で取引を始めましょう!";
$start_cta_desc = "{$site_name}を試す準備はできましたか?今すぐ登録して、成長する暗号資産投資家やトレーダーのコミュニティに参加しましょう。";
$start_cta_btn = "登録";

// FAQ SECTION
$faq_title = "{$site_name}よくある質問<mark>(FAQ)</mark>";
$faq_q1 = "{$site_name}とは何ですか、どのように機能しますか?";
$faq_a1 = "これは、1日24時間あなたのために働くAI搭載の取引プラットフォームです。システムは市場を分析し、機会を見つけ、自動的に取引を実行します。AIにすべてを任せるか、手動モードに切り替えていつでも自分の条件で取引することができます。";

$faq_q2 = "{$site_name}での私のお金とデータはどのくらい安全ですか?";
$faq_a2 = "セキュリティはプラットフォームのあらゆる層に組み込まれています。個人データは、国際的に認められた暗号化基準と高度なアカウント認証を使用して保護されています。すべての金融取引は、信頼できる検証済みの決済プロバイダーを通じてのみ処理されます。あなたのすべての取引活動はリアルタイムで表示されるため、あなたの資金に何が起こっているかを常に正確に把握できます。";

$faq_q3 = "いつでも利益を引き出せますか?";
$faq_a3 = "はい。{$site_name}から資金をいつ、どのくらいの頻度で引き出すかに制限はありません。あなたの口座残高は常にあなたの完全な管理下にあります。出金は入金に使用されるのと同じ信頼できる決済プロバイダーを通じて処理され、迅速で安全な送金が保証されます。";

$faq_q4 = "隠れた手数料や追加料金はありますか?";
$faq_a4 = "ありません。{$site_name}はサブスクリプション料金、登録料、隠れたコストを一切請求しません。開始に必要な唯一の金額は、あなたの取引口座に直接入金される<span data-local-currency='$app_price'>$app_price $app_currency</span>の最低入金額です。クレジットカード、銀行振込、PayPalを含むすべての主要な支払い方法が受け付けられます。";

$faq_q5 = "始めるために事前の取引経験は必要ですか?";
$faq_a5 = "まったく必要ありません。{$site_name}は、まったくの初心者から経験豊富なトレーダーまで対応するように設計されています。完全自動モードでは、AIが市場分析、シグナル生成、注文執行など、すべてをあなたに代わって処理します。コントロールを維持したい場合は、いつでも手動モードに切り替えることができます。";

$faq_cta_text = "質問がありますか?よくある質問をご確認いただくか、サポートチームにお問い合わせください。";
$faq_cta_faq_btn = "よくある質問";
$faq_cta_contact_btn = "お問い合わせ";

// NEW TRADER LEAD SECTION (Bottom form)
$lead_title = "取引は初めてですか?";
$lead_p1 = "登録後、無料ガイド<mark class='text-on-surface-tertiary-accent'>「暗号資産取引で避けるべき10の間違い」</mark>を受け取ります。これには、一般的な落とし穴を避けるために、最も経験豊富なアナリストからの分かりやすいアドバイスが含まれています。";
$lead_p2 = "登録フォームに詳細を入力するだけで、直接あなたの受信箱に送信します。多くのトレーダーがこのガイドから始め、最初の取引で自信を築くのに非常に役立ったと感じています。";
$lead_form_heading = "市場は待ちません—今日から始めましょう!";

// FEATURES TABLE (Fonctionnalités principales)
$features_title = "{$site_name}取引プラットフォームの<mark>主な機能</mark>";
$feature_1_title = "🤖 プラットフォーム技術";
$feature_1_val = "高度なAI搭載取引エンジン";
$feature_2_title = "💳 入金方法";
$feature_2_val = "主要なクレジットカード、銀行振込、PayPal";
$feature_3_title = "📱 プラットフォームアクセス";
$feature_3_val = "マルチデバイス対応(デスクトップ、タブレット、モバイル)";
$feature_4_title = "🚀 成功率";
$feature_4_val = "85%の分析精度";
$feature_5_title = "📊 取引商品";
$feature_5_val = "暗号資産、Forex、株式、商品、貴金属、CFDなど…";
$feature_6_title = "✍️ アカウント設定";
$feature_6_val = "迅速で簡単な登録";
$feature_7_title = "📞 カスタマーサポート";
$feature_7_val = "24時間365日プロフェッショナルな専任サポート";

// FOOTER DISCLAIMER (TZ Item 21)
$footer_disclaimer_p1 = "{$site_name}は、金融市場、オンライン取引、デジタル資産に関する教育コンテンツと一般情報を提供します。このウェブサイトに掲載されているすべての資料(記事、チャート、価格データ、市場インサイト、分析を含む)は情報提供のみを目的としており、金融、投資、または法律上の助言と見なされるべきではありません。当社はコンテンツを正確かつ最新に保つよう努めていますが、その完全性や信頼性を保証するものではなく、このウェブサイトの使用に起因する損失について一切の責任を負いません。";
$footer_disclaimer_p2 = "暗号資産、Forex、CFD、株式、その他の金融商品の取引には重大なリスクが伴い、すべての投資家に適しているわけではありません。市場状況は急速に変化する可能性があり、過去の実績は将来の結果を保証するものではありません。投資判断を下す前に、ご自身の財務状況とリスク許容度を慎重に評価し、必要に応じて独立した専門家の助言を求めてください。失っても構わない資金のみを投資してください。";
$footer_copyright = "© " . date('Y') . " $site_name. All rights reserved.";

// FOOTER NAV LINKS
$footnav_about = "会社概要";
$footnav_how = "仕組み";
$footnav_why = "取引する理由";
$footnav_faq = "よくある質問";
$footnav_contacts = "お問い合わせ";
$footnav_privacy = "プライバシーポリシー";
$footnav_risk = "リスク警告";
$footnav_terms = "利用規約";
$footnav_product = "製品";
$footnav_offer = "オファー";

// ABOUT PAGE VARIABLES
$about_meta_title = "会社概要 | {$site_name}公式サイト";
$about_meta_description = "{$site_name}について、AI自動化を通じて金融市場を民主化するという当社の使命、そして機関投資家レベルのセキュリティフレームワークについて詳しく学びましょう。";
$about_h1 = "<mark>$site_name</mark>について";
$about_lead = "人工知能、アルゴリズム執行、企業セキュリティを通じて、世界中のトレーダーに力を与えます。";
$about_mission_title = "私たちの使命";
$about_mission_text = "{$site_name}では、洗練された取引技術は機関投資家のファンドだけでなく、誰もが利用できるべきだと信じています。当社のプラットフォームは、日常の個人投資家と最先端の計算取引アルゴリズムの間のギャップを埋めます。";
$about_tech_title = "最先端技術";
$about_tech_text = "当社のシステムは、グローバルな暗号資産、Forex、株式市場にわたって毎秒10万以上のデータポイントを評価します。予測機械学習モデルとサブミリ秒の実行を組み合わせることで、超低スリッページと信頼性の高いパフォーマンスを実現します。";
$about_sec_title = "セキュリティと規制遵守";
$about_sec_text = "顧客の信頼は当社のエコシステムの中核的な基盤です。当社は256ビットTLS暗号化、厳格な生体認証および2FAプロトコルを実装し、すべてのデジタル準備金の98%をコールドストレージ保管庫に保管しています。";

// PRODUCT PAGE VARIABLES
$product_meta_title = "取引ツールと製品 | $site_name";
$product_meta_description = "{$site_name}を支える取引エンジンとAI機能をご覧ください。自動注文執行、予測分析、直感的なコントロール。";
$product_h1 = "プラットフォームの<mark>製品と機能</mark>";
$product_lead = "現代の暗号資産市場および金融市場で競争優位性を提供するように設計されたインテリジェントツールを発見してください。";
$product_f1_title = "自動AI取引エンジン";
$product_f1_text = "ニューラルアルゴリズムが市場動向を分析し、感情なしで24時間最適な取引を実行できるようにします。";
$product_f2_title = "リアルタイム市場分析";
$product_f2_text = "ライブオーダーブックの深さ、自動パターン認識、機関投資家のセンチメント追跡を手元に。";
$product_f3_title = "リスク管理スイート";
$product_f3_text = "詳細なストップロスとテイクプロフィットの制限、最大日次エクスポージャーコントロール、自動ヘッジ機能。";
$product_f4_title = "クロスプラットフォームアクセシビリティ";
$product_f4_text = "デスクトップブラウザ、タブレット、スマートフォン間で、ゼロレイテンシと完全なクラウド同期でシームレスに取引できます。";

// OFFER PAGE VARIABLES
$offer_meta_title = "特別オファーと条件 | $site_name";
$offer_meta_description = "{$site_name}の限定登録オファーを発見してください。$app_price {$app_currency}の初期入金で開始し、専任サポートを受けましょう。";
$offer_h1 = "限定<mark>取引オファー</mark>";
$offer_lead = "競争力のあるメリットと専任の1対1アカウントオンボーディングで、今日から取引の旅を始めましょう。";
$offer_step1_title = "1. 迅速な登録";
$offer_step1_text = "短い登録フォームに記入して、2分以内に個人アカウントへのアクセスを確保してください。";
$offer_step2_title = "2. 取引残高に資金を追加";
$offer_step2_text = "クレジットカード、銀行振込、または電子ウォレットを使用して、標準の最低額である$app_price {$app_currency}を入金してください。あなたの資金の100%が直接あなたの取引残高に入ります。";
$offer_step3_title = "3. AI取引を有効化";
$offer_step3_text = "自動モードまたはアシストモードを選択し、希望する資産ペアを選び、プラットフォームのフル機能で取引を開始します。";

// CONTACTS PAGE VARIABLES
$contacts_meta_title = "サポートに連絡する | $site_name";
$contacts_meta_description = "{$site_name}チームに連絡してください。24時間365日のカスタマーサポート、技術サポート、アカウントに関する問い合わせ。";
$contacts_h1 = "<mark>カスタマーサポート</mark>に連絡する";
$contacts_lead = "当社の専任国際サポートチームは、週7日、1日24時間あなたをサポートする準備ができています。";
$contacts_info_title = "公式お問い合わせ";
$contacts_info_text = "一般的なお問い合わせ、アカウント確認、または技術サポートについては、当社の検証済みコミュニケーションチャネルを通じてお問い合わせください。";
$contacts_support_hours = "24時間365日ライブチャット&メールサポート";

// FAQ PAGE VARIABLES
$faq_meta_title = "よくある質問とナレッジベース | $site_name";
$faq_meta_description = "{$site_name}アカウント、入金、出金、自動AI取引に関するよくある質問への回答を見つけてください。";
$faq_h1 = "$site_name<mark>よくある質問</mark>";
$faq_lead = "プラットフォームのセキュリティ、出金、自動取引に関する最も一般的な質問への明確な回答。";

// PRIVACY POLICY PAGE VARIABLES
$privacy_meta_title = "プライバシーポリシー | $site_name";
$privacy_meta_description = "{$site_name}があなたの個人データをどのように収集、保護、管理しているかを理解するために、当社の包括的なプライバシーポリシーをお読みください。";
$privacy_h1 = "プライバシーポリシー";
$privacy_p1 = "このプライバシーポリシーは、あなたが当社のウェブサイトを訪問したり、アカウントを登録したり、当社の取引ソフトウェアを利用したりする際に、{$site_name}がどのように情報を収集、使用、開示するかを説明しています。";
$privacy_sec1_title = "1. データ収集と使用";
$privacy_sec1_text = "当社は、アカウントを設立し、検証済みのブローカーパートナーとあなたを結び付け、国際的なKYCおよびAML基準に準拠して本人確認を行うために、必要な連絡先情報(名前、メールアドレス、電話番号)を収集します。";
$privacy_sec2_title = "2. クッキーと追跡技術";
$privacy_sec2_text = "当社は、ウェブサイトのパフォーマンスを向上させ、ユーザー体験をパーソナライズし、トラフィックパターンを監視するために、必須クッキーと分析クッキーを使用しています。ブラウザのクッキー設定はいつでも調整できます。";
$privacy_sec3_title = "3. データセキュリティとGDPR権利";
$privacy_sec3_text = "すべてのユーザーデータは、銀行レベルの暗号プロトコルを使用して、転送中および保管中に暗号化されます。一般データ保護規則(GDPR)の下で、ユーザーは自分の個人記録へのアクセス、修正、または削除を要求する権利を有します。";

// TERMS OF USE PAGE VARIABLES
$terms_meta_title = "利用規約 | $site_name";
$terms_meta_description = "{$site_name}プラットフォームおよび関連サービスの使用を管理する公式利用規約をご確認ください。";
$terms_h1 = "利用規約";
$terms_p1 = "{$site_name}にアクセスまたは使用する前に、これらの利用規約をよくお読みください。アカウントを登録することにより、これらの規定に拘束されることに同意したことになります。";
$terms_sec1_title = "1. ユーザーの適格性";
$terms_sec1_text = "ウェブサイトを使用するには、少なくとも18歳以上であり、オンライン取引および暗号資産取引が法的に許可されている管轄区域に居住している必要があります。あなたは現地の法律を遵守する責任があります。";
$terms_sec2_title = "2. アカウント登録とセキュリティ";
$terms_sec2_text = "あなたは登録時に真実、正確、完全な情報を提供することに同意します。あなたはログイン認証情報の機密性を維持することに単独で責任を負います。";
$terms_sec3_title = "3. 責任の制限";
$terms_sec3_text = "{$site_name}は情報提供およびソフトウェアルーティングサービスを提供します。当社は個別の金融アドバイスを提供せず、取引の収益性を保証しません。金融市場での取引には固有の資本リスクが伴います。";

// RISK WARNING PAGE VARIABLES (TZ Item 19: Exact 4 sections)
$risk_meta_title = "リスク警告と法的通知 | $site_name";
$risk_meta_description = "{$site_name}でのCFD、Forex、暗号資産取引に関する重要なリスク開示。投資する前に注意深くお読みください。";
$risk_h1 = "リスク警告";
$risk_sec1_title = "1. 高リスク投資の通知とボラティリティ";
$risk_sec1_text = "暗号資産、差金決済取引(CFD)、外国為替(Forex)、その他の金融資産の取引には多大な損失リスクが伴い、すべての投資家に適しているわけではありません。暗号資産市場は非常にボラティリティが高く、規制発表、マクロ経済の変化、市場センチメントに応じて価格が急激に変動します。完全に失っても構わない資金のみを投資すべきです。";
$risk_sec2_title = "2. 独立した金融アドバイス";
$risk_sec2_text = "{$site_name}で提供されるすべての資料、ツール、アルゴリズムシグナル、コメントは、情報提供、教育、マーケティングの目的のみを意図しています。このウェブサイトのコンテンツは、個別の投資、法律、または金融アドバイスを構成するものではありません。取引を実行する前に、独立した調査を行うか、認可された金融アドバイザーに相談する必要があります。";
$risk_sec3_title = "3. 規制上および地理的制限";
$risk_sec3_text = "特定の管轄区域では、小売CFDおよび暗号資産取引が制限または禁止されています。{$site_name}へのアクセスおよび提携取引ブローカーの利用が現地の法的枠組みの下で合法であるかどうかを確認することは、ユーザーの単独の責任です。";
$risk_sec4_title = "4. プラットフォーム技術と市場執行";
$risk_sec4_text = "自動取引ツール、人工知能アルゴリズム、市場指標は利益を保証したり、市場リスクを排除したりするものではありません。技術的な障害、ネットワーク遅延、システム停止、市場の流動性不足は、取引執行の遅延やスリッページを引き起こす可能性があります。";

// SIGN UP / LOGIN PAGE VARIABLES
$sign_meta_title = "登録/ログイン | $site_name";
$sign_meta_description = "インテリジェントな自動取引ツール、市場シグナル、安全な資金調達オプションにアクセスするために、{$site_name}で無料アカウントを作成してください。";
$sign_h1 = "<mark>$site_name</mark>に登録する";
$sign_lead = "何千人ものトレーダーに加わり、当社のAI取引エンジンへの即時アクセスを取得してください。";

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
$hero_form_heading = "無料アカウントを作成する";
$hero_form_button = "登録";
$form_name_placeholder = "名を入力してください";
$form_surname_placeholder = "姓を入力してください";
$form_disclaimer_prefix = "個人情報を入力してボタンをクリックすることにより、以下に同意したことになります";
$form_privacy_link_label = "プライバシーポリシー";
$form_disclaimer_and = "および";
$form_terms_link_label = "利用規約";
$form_disclaimer_of_site = "このウェブサイトの。";

// -- partners strip --
$partners_label = "主要パートナーからの信頼";

// -- "what is" section --
$whatis_label = "プラットフォームについて";
$whatis_title = "{$site_name}とは何ですか?";
$whatis_intro = "{$site_name}は、日常のオンラインバンキングと同じくらい暗号資産をシンプルにするように設計された公式オンライン取引プラットフォームです。";
$whatis_icon_1_title = "AI搭載分析";
$whatis_icon_1_text = "高度なアルゴリズムが、市場の複雑さをあなたに代わって処理します。";
$whatis_icon_2_title = "即時実行";
$whatis_icon_2_text = "毎秒処理される何千ものデータポイント—遅延のない取引。";
$whatis_icon_3_title = "シンプルで直感的なダッシュボード";
$whatis_icon_3_text = "いつでも一目で残高と未決済ポジションを確認できます。";
$whatis_icon_4_title = "簡単なアクセス、障壁なし";
$whatis_icon_4_text = "わずか$app_price {$app_currency}の最低入金額から始めましょう—隠れた手数料はありません。";
$whatis_cta_text = "当社のチームと製品についてもっと知りたいですか?";
$whatis_cta_link = "会社概要";

// -- stats section heading (per-stat label/value already set above) --
$stats_label = "数字で見る$site_name";
$stats_title = "約束よりも雄弁に語る数字";

// -- key benefits section --
$benefits_label = "主なメリット";
$benefits_title = "{$site_name}の主なメリット";
$benefit_1_title = "初心者に優しいプラットフォーム";
$benefit_1_text = "直感的なチャートとステップバイステップのガイドが、圧倒されることなく始めるのに役立ちます。初日から自信を持って暗号資産を取引できます。";
$benefit_2_title = "公式かつ規制対象";
$benefit_2_text = "{$site_name}はライセンスを取得しており、適用される金融規制に準拠しています。当社はSSL暗号化と二要素認証を使用して、すべてのアカウントを保護しています。";
$benefit_3_title = "簡単なアクセス、障壁なし";
$benefit_3_text = "わずか$app_price {$app_currency}の最低入金額で、誰でも始めることができます。大きな初期投資は必要ありません—小さく始めて、自信が高まるにつれて出資を増やしてください。";
$benefit_4_title = "透明な手数料";
$benefit_4_text = "隠れた料金を見ることは決してありません。該当する場合のみ、最小限の取引または出金手数料を適用するので、常に何を支払っているかを正確に把握できます。";
$benefit_5_title = "24時間365日の取引アクセス";
$benefit_5_text = "昼夜を問わず、あなた自身のスケジュールで取引してください。{$site_name}はデスクトップでもモバイルでも同様によく機能するため、どこにいても市場とつながっていられます。";
$benefit_6_title = "現地のカスタマーサポート";
$benefit_6_text = "当社のサポートチームは、チャット、電話、またはメールでご利用いただけます。実際の人間が、必要なときにあなたの言語でサポートします。";
$benefits_trust_title = "世界中のユーザーからの信頼";
$benefits_trust_text = "だからこそ、多くの暗号資産ユーザーが{$site_name}を信頼しています。何千人ものトレーダーがすでに{$site_name}を使用しており、毎日新しいアカウントが参加しています。";
$benefits_cta = "登録";
$benefits_badge_1 = "256ビットSSL";
$benefits_badge_2 = "安全な支払い";
$benefits_badge_3 = "2FA";

// -- security section --
$security_label = "セキュリティ";
$security_title = "{$site_name}で資金は安全です";
$security_subtitle = "銀行レベルの暗号化、検証済みの支払い、98%のコールドストレージ—あなたのお金はあらゆる段階で保護されています。";
$security_1_title = "検証済み決済プロバイダー";
$security_1_text = "支払いは、国際的なセキュリティ基準を満たす認定プロバイダーによってのみ処理されます。あなたの支払いデータは当社のサーバーに保存されることはありません。";
$security_2_title = "256ビットSSL暗号化";
$security_2_text = "あなたのデバイスと当社のプラットフォームの間で交換されるすべてのデータは、256ビットTLSで暗号化されています。第三者がそれを傍受したり読み取ったりすることはできません。";
$security_3_title = "98% コールドストレージ";
$security_3_text = "資産の98%はインターネット接続のないオフラインウォレットに保管されています。誰もリモートでアクセスすることはできません。";
$security_4_title = "多要素認証";
$security_4_text = "あなただけがあなたのアカウントにアクセスできます。すべてのログインは、あなただけが管理する第二のステップによって検証されます。";
$security_5_title = "アカウント監視";
$security_5_text = "すべてのログイン、取引、または設定変更は即時通知をトリガーするため、あなたのアカウントで何が起こっているかを常に把握できます。";
$security_6_title = "パスワード保護";
$security_6_text = "パスワードは、判読不能で不可逆的な形式で保存されます。当社は技術的にあなたのパスワードを見る方法がありません。";
$security_cta_title = "無料ガイドを入手!";
$security_cta_text = "無料の初心者ガイドを入手して、今日から取引を始めましょう。";
$security_cta_button = "登録";
$security_badge_1 = "98% コールドストレージ";
$security_badge_2 = "検証済み支払い";
$security_badge_3 = "暗号化済み";

// -- how it works section --
$how_label = "仕組み";
$how_title = "仕組み";
$how_1_title = "登録する";
$how_1_text = "「アカウントを開く」ボタンをクリックして、あなたの詳細(名前、メール、電話番号)で登録フォームに記入してください。1分しかかかりません。";
$how_2_title = "資金を入金";
$how_2_text = "次に、アカウントに資金を追加します。最低入金額はわずか$app_price {$app_currency}です。クレジット/デビットカード、現地の銀行振込、または人気の電子ウォレットを使用できます。(ヒント:快適に感じる金額から始めましょう。)";
$how_3_title = "取引を開始";
$how_3_text = "資金がアカウントに入ると、取引の準備が整います。希望する資産(BTC、SOL、USDTなど)を選択し、戦略を決定してください。";
$how_cta_label = "仕組み";
$how_cta_text = "サービスの仕組みについて詳しい情報が必要ですか?";
$how_cta_link = "仕組み";

// -- trust reasons section --
$trust_label = "当社で取引する理由";
$trust_intro = "すでに{$site_name}で取引している何千人ものユーザーに加わりましょう。";
$trust_1_title = "完全に規制対象";
$trust_1_text = "{$site_name}は正式に登録されており、適用される金融規制に準拠しています。当社は、あなたの安全を確保するために厳格な規則の下で運営しています。";
$trust_2_title = "高度なセキュリティ";
$trust_2_text = "あなたのすべてのデータと資金は暗号化され、保護されています。当社はSSL暗号化と二要素認証を通じて厳格なアカウント保護を実施しています。";
$trust_3_title = "透明な運営";
$trust_3_text = "当社は決して手数料を隠したり、予期しないルールを追加したりすることはありません。すべての取引の前に、どの手数料が適用されるかを正確に確認できます。";
$trust_4_title = "迅速なサポート";
$trust_4_text = "当社のサポートチームは、チャット、電話、またはメールでご利用いただき、あなたの質問に答えたり、問題を解決したりします。";
$trust_cta_text = "市場状況についての詳細情報";
$trust_cta_link = "取引する理由";

// -- testimonials section heading (individual reviews already set above) --
$testimonials_label = "体験談";
$testimonials_title = "400万人以上のトレーダーから信頼";

// -- FAQ section heading --
$faq_label = "よくある質問";

// -- lead magnet CTA block --
$leadmagnet_title = "取引は初めてですか?";
$leadmagnet_text1 = "登録後、無料ガイドを受け取ります。";
$leadmagnet_quote = "「暗号資産取引時に避けるべき10の間違い」";
$leadmagnet_text2 = "最も一般的な間違いを避けるのに役立つ、最も経験豊富なアナリストからのシンプルなヒントが満載です。";
$leadmagnet_text3 = "登録";
$leadmagnet_link = "の間に詳細を入力するだけで、";
$leadmagnet_text4 = "直接あなたの受信箱に送信します。多くの投資家がこのガイドから始め、それが本当に違いを生んだと言っています。";
$leadmagnet_text5 = "市場は待ちません—今日から始めましょう!";

// -- pre-about CTA band --
$pre_about_title = "取引の管理を始める準備はできていますか?";
$pre_about_text = "今日{$site_name}に参加して、明確さ、安全性、結果のために構築されたプラットフォームを発見してください。";
$pre_about_button = "登録";

// -- pretest (quiz teaser) badges/CTA --
$pretest_title = "$app_price {$app_currency}で取引を始めましょう!";
$pretest_text = "{$site_name}を試す準備はできましたか?今すぐ登録して、成長する暗号資産投資家やトレーダーのコミュニティに参加しましょう。";
$pretest_button = "登録";
$pretest_badge_1 = "安全";
$pretest_badge_2 = "規制対象";
$pretest_badge_3 = "400万人以上のトレーダーから信頼";

// -- about page --
$about_label = "会社概要";
$about_title = "{$site_name}について";
$about_intro = "{$site_name}は単に取引プラットフォームを提供するだけではありません—明確さと自信を持って取引できるようサポートします。";
$about_text_1 = "{$site_name}は、初心者から経験豊富なトレーダーまで、暗号資産取引をアクセス可能にするように設計された公式オンライン取引プラットフォームです。";
$about_text_2 = "AI搭載の市場分析とシンプルで透明なダッシュボードを組み合わせているため、あなたは常に自分の立ち位置を正確に把握できます。";
$about_text_3 = "プラットフォームのあらゆる部分は明確さを中心に構築されています:隠れた手数料なし、混乱を招く専門用語なし、あなたが行動できる明確な情報のみです。";
$about_text_4 = "当社のプラットフォームは、あなたが推測に費やす時間を何時間も節約し、不透明で低品質な代替手段からあなたを守ります。私たちは、取引は運ではなく精度に基づいて構築されるべきだと信じています。";

// -- contact page --
$contact_label = "お問い合わせ";
$contact_title = "{$site_name}に連絡する";
$contact_subtitle = "質問がありますか、それとも助けが必要ですか?私たちはあなたに助言し、案内するためにここにいます。";
$contact_text = "{$site_name}では、取引の成功は運とは何の関係もないと信じています—それは精度、予測、そして正しいツールに依存しています。";
$contact_form_text = "以下のフォームに記入するだけで、当社のチームのメンバーがまもなくあなたに連絡します。";
$contact_form_button = "メッセージを送信";

// -- footer navigation labels (geo-page footer, TZ items 12/16/18) --
$footnav_col_pages = "ページ";
$footnav_col_support = "サポート";
$footnav_col_legal = "法的情報";
$footnav_col_company = "会社";
$footnav_home = "ホーム";
$footnav_sitemap = "サイトマップ";
$footnav_conditions = "利用規約";
$footnav_contact = "お問い合わせ";
$footnav_signup = "登録";
$footer_risk_warning = "リスク警告";

// -- geo-page footer legal disclaimer (single-paragraph variant used by
// the geo template's own footer layout; the two-paragraph TZ item 21
// text above -- $footer_disclaimer_p1/$footer_disclaimer_p2 -- covers
// the root pages) --
$footer_disclaimer = "{$site_name}は、金融市場、オンライン取引、デジタル資産に関する教育コンテンツと一般情報を提供します。このウェブサイトに掲載されているすべての資料は情報提供のみを目的としており、金融、投資、または法律上の助言と見なされるべきではありません。取引には重大なリスクが伴い、すべての投資家に適しているわけではありません。失っても構わない資金のみを投資してください。";

// ============================================================
// Geo-language SUBPAGE fallback content (TZ item 16 cont.). Same
// rationale as the block above: conditions/contacts/faq/offer/
// privacy/product/risk-warning/sign.php share templates across the
// bg/cs/da/... stub folders and reference these vars directly.
// English fallback so every geo folder's subpages render complete.
// ============================================================

// -- shared form aliases (service-page forms reuse the hero disclaimer) --
$form_disclaimer_risk_note = "こちらもお読みください";
$form_text = $form_disclaimer_prefix;
$form_text_privacy = $form_privacy_link_label;
$form_text_privacy_and = $form_disclaimer_and;
$form_text_conditions = $form_terms_link_label;
$form_text_conditions_of = $form_disclaimer_of_site;
$form_text_risk_warning_note = $form_disclaimer_risk_note;
$form_submit = "登録";

// -- generic breadcrumbs (sign-up / product pages) --
$breadcrumb_home = "ホーム";
$breadcrumb_current = "登録/ログイン";
$breadcrumb_product = "製品";

// -- sign-up page official heading --
$official_heading = "公式{$site_name}™プラットフォームに登録する";
$official_description = "安全で透明なプラットフォームで暗号資産の取引を開始するために、無料アカウントを作成してください。";

// -- product page: analytics banner --
$analytics_heading = "{$site_name}でよりスマートに取引";
$analytics_description = "明確なリアルタイム市場データとAI搭載のインサイトを取得してください。自信を持って情報に基づいた取引の決定を下してください。";

// -- product page: dashboard preview --
$app_main_heading = "あなたの取引ダッシュボード";
$app_feature_1_title = "ライブ市場データ";
$app_feature_1_text = "リアルタイムの価格とチャートが手元に";
$app_feature_2_title = "ポートフォリオ追跡";
$app_feature_2_text = "あなたの残高とパフォーマンスに関する包括的な指標";
$app_feature_3_title = "モバイルビュー";
$app_feature_3_text = "モバイルブラウザ向けに最適化";
$app_feature_4_title = "ウォッチリスト";
$app_feature_4_text = "監視している資産を追跡";

// -- product page: capabilities --
$capabilities_main_title = "期待できること";
$capabilities_feature_1_title = "AI搭載シグナル";
$capabilities_feature_1_text = "高度なアルゴリズムが市場シグナルを分析し、24時間機会を表面化します。";
$capabilities_feature_2_title = "迅速な登録";
$capabilities_feature_2_text = "安全で簡単な登録プロセスで数分で登録できます。";
$capabilities_feature_3_title = "検証済みセキュリティ";
$capabilities_feature_3_text = "256ビットSSL暗号化、2FA、98%のコールドストレージが、あらゆる段階であなたの資金を保護します。";
$capabilities_feature_4_title = "継続的なサポート";
$capabilities_feature_4_text = "登録から最初の取引まで、あらゆる段階で当社のチームからサポートを受けられます。";

// -- product page: stats strip --
$products_stats_currencies_v = "65以上";
$products_stats_currencies_l = "利用可能通貨";
$products_stats_users_v = "400万人以上";
$products_stats_users_l = "登録ユーザー数";
$products_stats_volume_v = "98以上";
$products_stats_volume_l = "対応国数";
$products_stats_countries_v = "24時間365日";
$products_stats_countries_l = "取引アクセス";

// -- product page: 3-step strip --
$step_1 = "アカウントを作成する";
$step_2 = "資金を入金する";
$step_3 = "あなたに合った戦略で取引を開始する";

// -- shared "last update" label (privacy page) --
$last_update = "最終更新";

// -- FAQ page --
$faq_page_meta_title = "よくある質問 | {$site_name}サポート";
$faq_page_meta_description = "{$site_name}の仕組み、価格設定、始め方に関するよくある質問への回答。";
$faq_page_title = "よくある質問";
$faq_page_breadcrumb_home = "ホーム";
$faq_page_breadcrumb_current = "よくある質問";
$faq_page_help_title = "どのようにお手伝いできますか?";
$faq_1_q = "どうやって始めればいいですか?";
$faq_1_a = "アカウントを作成し、メールアドレスを確認して、最初の入金をしてください—プランはわずか$app_price {$app_currency}から始まります。";
$faq_2_q = "私のお金とデータは安全ですか?{$site_name}は信頼できますか?";
$faq_2_a = "はい。あなたのデータは業界標準の256ビット暗号化によって保護されており、あなたの資金は二要素認証と98%のコールドストレージで保護されています。";
$faq_3_q = "いつでもアカウントを閉じたり、資金を引き出したりできますか?";
$faq_3_a = "はい。出金に制限はありません。いつでもサポートチームにお問い合わせください—アカウントについてお手伝いするか、迅速に出金を処理いたします。";
$faq_4_q = "このプラットフォームが自分に合っているかどうかはどうすればわかりますか?";
$faq_4_a = "{$site_name}は、より効率的に取引したいと考える、まったくの初心者から経験豊富なトレーダーまで対応するように構築されています—プラットフォーム上のすべてのツールは、あなたに情報を提供し、コントロールを維持できるように設計されています。";
$faq_5_q = "始めるために取引経験は必要ですか?";
$faq_5_a = "事前の経験は必要ありません。AI搭載モードがあなたに代わって分析を処理し、より多くのコントロールが必要な場合はいつでも手動モードに切り替えることができます。";

// -- contacts page --
$contacts_h3 = "技術的な質問やアカウントに関する質問については、メールでお問い合わせください";

// -- offer page (meta title/description already defined above) --
$offer_breadcrumb_home = "ホーム";
$offer_breadcrumb_current = "オファー";
$offer_cta_h1 = "今日から取引を始めましょう";
$offer_cta_text = "数分で準備完了:登録し、アカウントに資金を入れ、安全で規制された取引プラットフォームで暗号資産の取引を開始してください。";
$offer_how_it_works_title = "仕組み";
$offer_official_platform_title = "これは公式{$site_name}™取引プラットフォームです";
$offer_official_platform_text = "リアルタイムのインサイトと完全なコントロールを備えた、暗号資産取引のための信頼できる透明な方法。";

// -- conditions of use page --
$conditions_meta_title = "利用規約 | $site_name";
$conditions_meta_description = "{$site_name}のウェブサイトおよび取引プラットフォームの公式利用規約をお読みください。";
$conditions_breadcrumb_home = "ホーム";
$conditions_breadcrumb_current = "利用規約";
$conditions_h1 = "利用規約";
$conditions_s1_title = "1. 一般規定";
$conditions_s1_text = "このウェブサイトは、オンライン暗号資産取引プラットフォームへのアクセスを提供します。プラットフォームの使用は、これらの規約および当社のプライバシーポリシーの完全な承諾を構成します。";
$conditions_s2_title = "2. 資格";
$conditions_s2_text = "ユーザーは少なくとも18歳以上であり、それぞれの管轄区域で完全な法的能力を有している必要があります。";
$conditions_s3_title = "3. アクセス制限";
$conditions_s3_text = "当社が提供する取引サービスの種類を現地の規制が禁止している管轄区域では、アクセスが制限される場合があります。";
$conditions_s4_title = "4. 禁止事項";
$conditions_s4_text = "ユーザーはシステムを悪用したり、当社のシステムへの不正アクセスを試みたり、当社のソフトウェアをリバースエンジニアリングしたりしてはなりません。";
$conditions_s5_title = "5. 知的財産";
$conditions_s5_text = "すべてのソースコード、ユーザーインターフェース、ブランド資産は、運営会社の独占的な財産のままです。";
$conditions_s6_title = "6. 責任";
$conditions_s6_text = "プラットフォームのツールは「現状のまま」提供されます。当社は、ユーザー自身の取引決定に起因する結果について一切の責任を負いません。";
$conditions_s7_title = "7. 第三者サービス";
$conditions_s7_text = "第三者決済プロバイダーとの統合は、安全な接続を通じて行われます。入金と出金については、ユーザーは選択したプロバイダーと直接取引します。";
$conditions_s8_title = "8. 外部リンク";
$conditions_s8_text = "外部リソースへのリンクは、便宜上のみ提供されます。当社は、いかなる外部ソフトウェアも推奨または保証しません。";
$conditions_s9_title = "9. その他";
$conditions_s9_text = "当社は、いつでもこれらの規約またはサービスを変更する権利を留保し、変更はウェブサイトに掲載されます。";

// -- privacy policy page (meta title/description already defined above) --
$privacy_breadcrumb_home = "ホーム";
$privacy_breadcrumb_current = "プライバシーポリシー";
$privacy_page_h1 = "プライバシーポリシー";
$privacy_intro = "当社はあなたのプライバシーを尊重し、国際基準および欧州GDPRに完全に準拠して個人データを処理します。";
$privacy_transparency_title = "透明性";
$privacy_transparency_text = "当社は、運用テレメトリデータがどのように処理されるかを明確に開示します。詳細については、サポートにお問い合わせください。";
$privacy_usage_title = "データの使用";
$privacy_usage_text = "データは、アクセスの提供、セッションの保護、コンプライアンス義務の遵守のためにのみ使用されます。";
$privacy_rights_short_title = "あなたの権利";
$privacy_rights_short_text = "あなたは、あなたの個人データを閲覧、更新、または削除を要求する完全な権利を保持します。";
$privacy_security_title = "セキュリティ";
$privacy_security_text = "当社は、運用テレメトリデータを保護するために、AES-256暗号化とデータベース分離を使用しています。";
$privacy_s1_title = "1. データ収集";
$privacy_s1_text = "当社は、利用テレメトリ(IPアドレス、システムパラメータ、ブラウザタイプ)、およびユーザーが提出した確認データを収集します。";
$privacy_s2_title = "2. 法的根拠";
$privacy_s2_text = "処理は、ユーザーの明示的な同意、規制上のコンプライアンス要件、およびサービスの提供に依拠しています。";
$privacy_s3_title = "3. データ共有";
$privacy_s3_text = "データが商業化されることは決してありません。開示は、秘密保持契約(NDA)の下で、認可されたクリアリングエンティティおよび技術パートナーに限定されます。";
$privacy_s4_title = "4. クッキー";
$privacy_s4_text = "必須クッキーは、セッション認証とインターフェースの最適化に使用されます。";
$privacy_google_choices = '<a href="http://www.google.com/settings/ads" target="_blank" rel="noopener">Google広告設定</a>を通じて追跡設定を管理するか、<a href="https://tools.google.com/dlpage/gaoptout" target="_blank" rel="noopener">Google Analyticsオプトアウトアドオン</a>を使用してください。Google自身のデータ慣行については、その<a href="https://www.google.com/intl/en/policies/privacy/" target="_blank" rel="noopener">プライバシーポリシー</a>でご確認いただけます。';
$privacy_s5_title = "5. データ保持";
$privacy_s5_text = "個人データは、システムアクセス要件を満たすために必要な期間のみ保持されます。";
$privacy_s6_title = "6. 国際移転";
$privacy_s6_text = "国境を越えたデータ移転は、暗号化されたチャネルおよび標準契約条項を通じてのみ行われます。";
$privacy_s7_title = "7. 第三者リンク";
$privacy_s7_text = "当社は、当社のウェブサイトからリンクされている外部の第三者サービスのプライバシー慣行について責任を負いません。";
$privacy_s8_title = "8. 更新";
$privacy_s8_text = "このポリシーは、システムまたは法的変更を反映するために、定期的に改訂される場合があります。";
$privacy_rights_title = "あなたの権利";
$privacy_rights_text = "ユーザーは、保存されているデータへのアクセス、修正、制限された処理、または完全な削除を要求する権利を有します。";

// -- risk warning page --
$page_title_risk_warning = "リスク警告 | $site_name";
$page_description_risk_warning = "取引のリスクと、{$site_name}がそれらを安全に管理するのにどのように役立つかを理解してください。";
$risk_warning_breadcrumb_home = "ホーム";
$risk_warning_breadcrumb_current = "リスク警告";
$risk_warning_title = "リスク警告";
$risk_warning_intro = "リスクを理解することは、自信を持って取引するための第一歩です。";
$risk_warning_ai_heading = "当社のAIシステムがリスク管理にどのように役立つか:";
$risk_warning_ai_1 = "<strong>アルゴリズムの効率性と感情のない取引:</strong>高度なアルゴリズムが市場シグナルを分析し、最適なタイミングで客観的に取引を実行します。";
$risk_warning_ai_2 = "<strong>データ駆動型戦略:</strong>戦略は、推測ではなく、検証済みの市場パターンとリアルタイム分析に基づいています。";
$risk_warning_ai_3 = "<strong>柔軟な設定と完全なコントロール:</strong>いつでもリスクパラメータを調整できます。隠れた手数料や出金制限なしで、ダッシュボードですべての残高と取引を透明に追跡してください。";
$risk_warning_disclaimer = "<strong>免責事項:</strong>取引には常にリスクが伴います。自動化されたシステム(AIを含む)は利益を保証するものではなく、ソフトウェアのバグや予期しない市場イベントにより失敗する可能性があり、ユーザーによる監視が必要です。過去の実績は将来の結果を示すものではありません。このプラットフォームは、情報提供およびマーケティングの目的のみを意図しており、金融アドバイスを構成するものではありません。";
$risk_warning_s1_heading = "1. 一般的なリスクと暗号資産市場のリスク";
$risk_warning_s1_1 = "暗号資産は、非常にボラティリティが高い投機的資産であり、24時間取引され、ほとんどの管轄区域で最小限の規制監督しか受けていません。";
$risk_warning_s1_2 = "価値は短期間で劇的に変動する可能性があり、投資した資本の完全な損失につながる可能性があります。";
$risk_warning_s1_3 = "市場価値は、規制の変更、技術的発展、セキュリティ侵害、またはより広範なマクロ経済イベントによって大きく影響を受ける可能性があります。";
$risk_warning_s1_4 = "一部の資産は、その価値をすべて失う可能性があります。失っても構わない資金のみを投資してください。";
$risk_warning_s2_heading = "2. 執行、流動性、レバレッジのリスク";
$risk_warning_s2_1 = "<strong>市場のボラティリティと流動性:</strong>極端な価格変動(1日あたり10〜20%以上)または低い流動性(特に小規模なコインの場合)は、遅延、プラットフォームの停止、重大な執行スリッページを引き起こす可能性があります。ストップロス注文は、極端な状況下では損失制限を保証できません。";
$risk_warning_s2_2 = "<strong>レバレッジとマージンリスク:</strong>レバレッジ商品は利益と損失の両方を増幅するため、当初の入金額以上を失う可能性があります。小売投資家アカウントの約70〜80%は、レバレッジ商品の取引で資金を失っています。";
$risk_warning_s3_heading = "3. 技術的、サイバーセキュリティ、第三者のリスク";
$risk_warning_s3_1 = "<strong>技術的要因:</strong>オンライン取引には、インターネット接続の中断、ハードウェア/ソフトウェアの障害、サービスの利用不能などの固有のリスクが伴います。";
$risk_warning_s3_2 = "<strong>サイバーセキュリティ:</strong>暗号資産アカウントは、フィッシング、マルウェア、ハッキングの試みの頻繁な標的です。取引は不可逆的です。あなたの認証情報が侵害されると、永久的な損失につながる可能性があります。";
$risk_warning_s3_3 = "<strong>第三者プラットフォーム:</strong>このウェブサイトは、ユーザーを第三者プラットフォームに接続する場合があります。当社は、それらのセキュリティ、運営、または支払能力を管理、推奨、または保証しません。外部プラットフォームに資金を預ける前には、必ずご自身で徹底したデューデリジェンスを行ってください。";
$risk_warning_s4_heading = "4. 規制、税務、最終規定";
$risk_warning_s4_1 = "<strong>法令遵守と税金:</strong>規制の枠組みは大きく異なり、急速に変化します。ユーザーは、取引活動が現地の法律に準拠していることを確認し、独自の納税義務を果たすことについて単独で責任を負います。";
$risk_warning_s4_2 = "<strong>利益の保証なし:</strong>「安全」またはリスクフリーの暗号資産取引は存在しません。提供されるリターン数値やパフォーマンスの例は、純粋に仮説的なものです。";
$risk_warning_s4_3 = "<strong>適合性:</strong>リスクを完全に理解していない場合、必要な財源に依存している場合、または借入金で取引している場合、暗号資産取引はあなたには適していません。疑問がある場合は、独立した認可された金融アドバイザーに相談してください。";
$risk_warning_contact = "<strong>お問い合わせ:</strong>この声明について質問がある場合、またはお問い合わせを送信したい場合は、当社のウェブサイトのお問い合わせフォームを通じて、公式カスタマーサービスチームまでご連絡ください。";

