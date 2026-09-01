<?php
require __DIR__ . '/../lang.php';
$site_lang = 'tr-TR';
$form_language = 'tr'; // matches this page's own language, not the offer's global default

// ============================================================
// TR TRANSLATION OVERRIDES
// Identity/config vars ($site_name, $site_slug, $site_domain, $site_url, $app_price, $app_currency, $site_lang, $country_name, $country_flag_code, $privacy_last_update, $rating_value, $rating_count, $review_count, $form_country, $form_language, $form_phone_country, $form_only_countries, $review_1_author, $review_2_author, $review_3_author, $review_4_author, $quiz_consultant_name) are
// intentionally NOT overridden -- they stay exactly as inherited from the
// root lang.php.
// ============================================================

// Brand / Platform Variables

// Geo-language stats bar fallback content (used by the language-folder pages'
// own "stats" section; the fr/de/it/nl folders override these with native
// translations, the other 19 folders inherit this English fallback)
$stat_1_value = "4M+";
$stat_1_label = "Kayıtlı Kullanıcılar";
$stat_2_value = "98+";
$stat_2_label = "Desteklenen Ülkeler";
$stat_3_value = "65+";
$stat_3_label = "Mevcut Para Birimleri";
$stat_4_value = "7/24";
$stat_4_label = "İşlem Erişimi";
$stat_5_value = "256-bit";
$stat_5_label = "Şifreleme Standardı";
$stat_6_value = "$500M+";
$stat_6_label = "Toplam Müşteri Mevduatı";

// Keitaro Form Integration Variables (defaults -- overwritten per-launch by
// generate_lang_files(); must stay valid on their own since nothing else in
// this file replaces them for a page that's ever served un-generated)

// 4 Verified Reviews (TZ Item 8)
$review_1_role = "Fransa";
$review_1_text = "Platformun nasıl çalıştığını görmek için sadece 500 € ile başladım. Yaklaşık üç hafta sonra bakiyem yaklaşık 1120 €'ya yükseldi. Arayüz kullanımı kolay ve piyasa içgörüleri daha iyi kararlar almama yardımcı oldu.";
$review_1_badge = "Bildirilen Getiri +%18,4";

$review_2_role = "Almanya";
$review_2_text = "Daha önce birkaç ticaret platformu denedim, ancak bu şimdiye kadarki favorim oldu. Gezinmesi kolay, araçlar gerçekten kullanışlı ve genel olarak çok olumlu bir deneyim yaşadım.";
$review_2_badge = "Bildirilen Getiri +%19,1";

$review_3_role = "İtalya";
$review_3_text = "Beni en çok etkileyen şey, her şeyin ne kadar sezgisel hissettirdiğiydi. Kayıt hızlıydı, kontrol paneli iyi organize edilmiş ve platform ticareti benim için çok daha kolay hale getirdi.";
$review_3_badge = "Bildirilen Getiri +%16,8";

$review_4_role = "Hollanda";
$review_4_text = "Daha önce hiç ticaret deneyimim yoktu, bu yüzden 750 € ile başladım. Bir ay içinde, araçları ve öğrenme kaynaklarını takip ederek 1765 €'nun biraz üzerine çıktım. Güven inşa etmek için harika bir yol oldu.";
$review_4_badge = "Bildirilen Getiri +%18,0";

$review_verified_label = "Doğrulanmış Kullanıcı";
$reviews_section_title = "$site_name Hakkında Yorumlar";
$reviews_badge_trustworthy = "Güvenilir";
$reviews_summary_rating = "4,7";
$reviews_summary_count = "189";
$reviews_summary_desc = "Sağlam otomatik araçlar, gerçek zamanlı analizler ve kapsamlı öğrenme kaynakları sunan güçlü ve sezgisel bir ticaret platformu.";

// CONSULTANT / CHAT QUIZ (TZ Item 13)
$quiz_consultant_role = "Ticaret Danışmanı";
$quiz_text_welcome = "Merhaba! Ben kişisel ticaret asistanınızım. Otomatik AI ticaretinin sizin için nasıl çalışabileceğini keşfetmek için 30 saniyelik bir test yapın.";
$quiz_text_q1 = "Daha önce hiç kripto para birimi veya finansal piyasalarda işlem yaptınız mı?";
$quiz_text_a1_yes = "Evet, biraz deneyimim var";
$quiz_text_a1_no = "Hayır, tamamen yeniyim";
$quiz_text_q2 = "Çevrimiçi ticaretteki birincil finansal hedefiniz nedir?";
$quiz_text_q3 = "AI'ın işlemleri otomatik olarak yürütmesini mi tercih edersiniz, yoksa manuel olarak mı işlem yapmak istersiniz?";
$quiz_text_a3_yes = "Otomatik AI Ticareti (Önerilen)";
$quiz_text_a3_no = "AI Sinyalleriyle Manuel Ticaret";
$quiz_text_q4 = "Ticarete ayırmak için başlangıç bütçeniz nedir?";
$quiz_text_a4_1 = "250 $ - 500 $";
$quiz_text_a4_2 = "500 $ - 1.500 $";
$quiz_text_a4_3 = "1.500 $+";
$quiz_text_q5 = "Hesabınızı oluşturmaya ve platforma tam erişim almaya hazır mısınız?";
$quiz_text_a5_yes = "Evet, başlayalım!";
$quiz_text_a5_no = "Daha fazla bilgi istiyorum";
$quiz_text_loader = "Yanıtlarınız analiz ediliyor ve optimal ticaret parametreleri hazırlanıyor...";
$quiz_text_final_ttl = "Hesap Kurulumunuz Hazır!";
$quiz_text_processing = "Platform erişiminiz yapılandırılıyor...";
$quiz_text_typing = "yazıyor...";
$quiz_placeholder_fname = "Ad";
$quiz_placeholder_lname = "Soyad";
$quiz_placeholder_email = "E-posta Adresi";
$quiz_placeholder_phone = "Telefon Numarası";
$quiz_btn_submit = "Kaydı Tamamla";

// METADATA (TZ Item 10)
$home_meta_title = "$site_name — Ticaret Platformu | Resmi Site";
$home_meta_description = "Resmi $site_name web sitesi, gelişmiş ticaret araçları, gerçek zamanlı piyasa içgörüleri ve tüccarlar için kullanıcı dostu bir deneyim sunan güvenli bir kripto para ticaret platformu sunar.";

// NAVIGATION & HEADER (TZ Item 3, 12)
$nav_about = "Hakkımızda";
$nav_how = "Nasıl Çalışır";
$nav_why = "Neden İşlem Yapmalı";
$nav_faq = "SSS";
$nav_contacts = "Bize Ulaşın";
$nav_signin = "Giriş Yap";
$nav_signup = "Kaydol";

$mobnav_home = "Ana Sayfa";
$mobnav_product = "Ürün";
$mobnav_offer = "Teklif";
$mobnav_contact = "Bize Ulaşın";
$mobnav_faq = "SSS";
$mobnav_signup = "Kaydol";

// HERO SECTION
$hero_h1 = "<mark>$site_name</mark> Platformu";
$hero_text = "Resmi $site_name kripto para ticaret platformu";

// LEAD FORM
$form_fname_placeholder = "Ad";
$form_lname_placeholder = "Soyad";
$form_email_placeholder = "E-posta";
$form_phone_placeholder = "Telefon Numarası";
$form_btn_submit = "Kaydol";
$form_disclaimer_text = "Kişisel bilgilerinizi girip düğmeye tıklayarak bu web sitesinin <a class='link link-primary' href='privacy.php'>Gizlilik Politikası</a>'nı ve <a class='link link-primary' href='conditions.php'>Kullanım Şartları</a>'nı kabul etmiş olursunuz.";

// SECURITY BADGES
$badge_ssl = "256-bit SSL";
$badge_payments = "Güvenli Ödemeler";
$badge_2fa = "2FA";
$badge_cold_storage = "98% Cold Storage";
$badge_regulated = "Düzenlenmiş";
$badge_traders_trust = "4M'den Fazla Tüccar Güveniyor";

// SAFE SECTION (Vos fonds sont en sécurité)
$safe_title = "$site_name ile <mark>Fonlarınız Güvende</mark>";
$safe_desc = "Banka düzeyinde şifreleme, doğrulanmış ödeme işlemcileri ve 98% cold storage — paranız her adımda korunur.";

$safe_item1_title = "Doğrulanmış Ödeme Sağlayıcıları";
$safe_item1_desc = "Ödemeler yalnızca uluslararası güvenlik standartlarına uyan sertifikalı sağlayıcılar aracılığıyla işlenir. Kart bilgileriniz platformumuzda asla saklanmaz.";
$safe_item1_badge = "Güvenli Ödemeler";

$safe_item2_title = "İki Faktörlü Kimlik Doğrulama (2FA)";
$safe_item2_desc = "SMS veya Google Authenticator aracılığıyla zaman tabanlı tek kullanımlık şifrelerle hesabınıza ekstra bir koruma katmanı ekleyin.";
$safe_item2_badge = "2FA";

$safe_item3_title = "98% Cold Storage";
$safe_item3_desc = "Dijital varlıkların büyük çoğunluğu, çoklu imza protokolleriyle korunan coğrafi olarak dağıtılmış çevrimdışı cold storage kasalarında saklanır.";
$safe_item3_badge = "98% Cold Storage";

$safe_item4_title = "Düzenlenmiş Yürütme";
$safe_item4_desc = "Uyumluluğu, şeffaflığı ve üst düzey yürütmeyi sürdürmek için dünya çapında düzenlenmiş komisyoncu firmalar ve likidite sağlayıcılarıyla ortaklık kuruyoruz.";
$safe_item4_badge = "Düzenlenmiş";

$safe_item5_title = "256-bit SSL Şifreleme";
$safe_item5_desc = "Tarayıcınız ile sunucularımız arasındaki tüm veri iletimleri askeri düzeyde TLS 1.3 kriptografik protokolleriyle şifrelenir.";
$safe_item5_badge = "256-bit SSL";

// FREE GUIDE CTA BANNER (CTA 2)
$guide_cta_title = "Ücretsiz Rehberi Alın";
$guide_cta_subtitle = "«Kripto Ticaretinde Kaçınılması Gereken 10 Hata»";
$guide_cta_btn = "Ücretsiz Rehber Talep Edin";

// TRUST SECTION (Pourquoi les investisseurs font confiance à Ciel Cryptance)
$trust_title = "Tüccarlar Neden <mark>$site_name</mark>'e Güveniyor";
$trust_desc = "Dünya çapında 4.000.000'den fazla kullanıcı, güvenilirliği, güçlü otomasyonu ve şeffaf ortamı nedeniyle $site_name'i seçiyor.";
$trust_subtitle = "Modern Tüccar İçin Önde Gelen Avantajlar:";

$trust_item1_title = "Küresel Piyasa Erişimi";
$trust_item1_desc = "Tek bir birleşik ticaret panelinden 100'den fazla kripto para, Forex çifti, hisse senedi ve emtia işlemi yapın.";

$trust_item2_title = "Sağlam Fon Koruması";
$trust_item2_desc = "Ayrı hesaplar, sürekli biyometrik kontroller ve son teknoloji siber güvenlik sermayenizi 7/24 korur.";

$trust_item3_title = "Sıfır Gizli Ücret";
$trust_item3_desc = "Kristal berraklığında fiyatlandırmanın keyfini çıkarın. Ücretsiz kayıt, ücretsiz para yatırma, platform yönetim ücreti yok ve anında para çekme talepleri.";

$trust_item4_title = "Duyarlı Destek";
$trust_item4_desc = "Özverili destek ekibimiz, herhangi bir soru veya teknik talep konusunda yardımcı olmak için canlı sohbet, telefon veya e-posta yoluyla ulaşılabilir.";

$trust_market_info_text = "2026'da piyasa koşulları hakkında daha fazla bilgi";
$trust_market_info_btn = "Neden İşlem Yapmalı";

// START TRADING CTA (CTA 3)
$start_cta_title = "<span data-local-currency='$app_price'>$app_price $app_currency</span> ile Ticarete Başlayın!";
$start_cta_desc = "$site_name'i denemeye hazır mısınız? Şimdi kaydolun ve büyüyen kripto yatırımcıları ve tüccarları topluluğuna katılın.";
$start_cta_btn = "Kaydol";

// FAQ SECTION
$faq_title = "$site_name Sıkça Sorulan Sorular <mark>(SSS)</mark>";
$faq_q1 = "$site_name nedir ve nasıl çalışır?";
$faq_a1 = "Günde 24 saat sizin için çalışan yapay zeka destekli bir ticaret platformudur. Sistem piyasaları analiz eder, fırsatları tespit eder ve işlemleri otomatik olarak yürütür. Her şeyi AI'ın halletmesine izin verebilir veya istediğiniz zaman kendi koşullarınızda işlem yapmak için manuel moda geçebilirsiniz.";

$faq_q2 = "Paramın ve verilerimin $site_name'de ne kadar güvende olduğu?";
$faq_a2 = "Güvenlik, platformun her katmanına entegre edilmiştir. Kişisel veriler, uluslararası olarak tanınan şifreleme standartları ve gelişmiş hesap kimlik doğrulaması kullanılarak korunur. Tüm finansal işlemler yalnızca güvenilir ve doğrulanmış ödeme sağlayıcıları aracılığıyla işlenir. Tüm ticaret faaliyetleriniz gerçek zamanlı olarak görülebilir, böylece fonlarınızda tam olarak ne olduğunu her zaman bilirsiniz.";

$faq_q3 = "Kârımı istediğim zaman çekebilir miyim?";
$faq_a3 = "Evet. $site_name'den fonlarınızı ne zaman veya ne sıklıkla çekebileceğinize dair herhangi bir kısıtlama yoktur. Hesap bakiyeniz her zaman tamamen sizin kontrolünüzde kalır. Para çekme işlemleri, hızlı ve güvenli transferleri garanti eden, para yatırma için kullanılan aynı güvenilir ödeme sağlayıcıları aracılığıyla işlenir.";

$faq_q4 = "Gizli ücret veya ekstra masraf var mı?";
$faq_a4 = "Yok. $site_name abonelik ücreti, kayıt ücreti veya gizli maliyet almaz. Başlamak için gereken tek tutar, doğrudan ticaret hesabınıza yatırılan <span data-local-currency='$app_price'>$app_price $app_currency</span> minimum para yatırma tutarıdır. Kredi kartları, banka havaleleri ve PayPal dahil tüm büyük ödeme yöntemleri kabul edilir.";

$faq_q5 = "Başlamak için önceden ticaret deneyimi gerekli mi?";
$faq_a5 = "Kesinlikle hayır. $site_name hem tamamen yeni başlayanlar hem de deneyimli tüccarlar için tasarlanmıştır. Tam otomatik modda, AI piyasa analizi, sinyal üretimi ve emir yürütme dahil her şeyi sizin için halleder. Kontrolü elinizde tutmayı tercih ederseniz, istediğiniz zaman manuel moda geçebilirsiniz.";

$faq_cta_text = "Sorularınız mı var? SSS'mizi kontrol edin veya destek ekibimizle iletişime geçin.";
$faq_cta_faq_btn = "SSS";
$faq_cta_contact_btn = "Bize Ulaşın";

// NEW TRADER LEAD SECTION (Bottom form)
$lead_title = "Ticarette Yeni misiniz?";
$lead_p1 = "Kayıt olduktan sonra, ücretsiz rehberimizi alacaksınız <mark class='text-on-surface-tertiary-accent'>«Kripto Para Ticaretinde Kaçınılması Gereken 10 Hata»</mark>. Bu, yaygın tuzaklardan kaçınmanıza yardımcı olmak için en deneyimli analistlerimizden basit tavsiyeler içerir.";
$lead_p2 = "Bilgilerinizi kayıt formuna girmeniz yeterlidir, doğrudan gelen kutunuza göndereceğiz. Birçok tüccar bu rehberle başladı ve ilk işlemlerinde güven inşa etmek için onu paha biçilmez buldu.";
$lead_form_heading = "Piyasa beklemiyor — bugün başlayın!";

// FEATURES TABLE (Fonctionnalités principales)
$features_title = "$site_name Ticaret Platformunun <mark>Temel Özellikleri</mark>";
$feature_1_title = "🤖 Platform Teknolojisi";
$feature_1_val = "Gelişmiş yapay zeka destekli ticaret motoru";
$feature_2_title = "💳 Finansman Yöntemleri";
$feature_2_val = "Büyük kredi kartları, banka havaleleri, PayPal";
$feature_3_title = "📱 Platform Erişimi";
$feature_3_val = "Çoklu cihaz uyumluluğu (Masaüstü, Tablet, Mobil)";
$feature_4_title = "🚀 Başarı Oranı";
$feature_4_val = "%85 analitik hassasiyet";
$feature_5_title = "📊 Ticaret Araçları";
$feature_5_val = "Kripto paralar, Forex, Hisse Senetleri, Emtialar, Değerli Metaller, CFD'ler ve daha fazlası…";
$feature_6_title = "✍️ Hesap Kurulumu";
$feature_6_val = "Hızlı ve basit kayıt";
$feature_7_title = "📞 Müşteri Desteği";
$feature_7_val = "7/24 profesyonel özel destek";

// FOOTER DISCLAIMER (TZ Item 21)
$footer_disclaimer_p1 = "$site_name, finansal piyasalar, çevrimiçi ticaret ve dijital varlıklar hakkında eğitim içeriği ve genel bilgi sağlar. Makaleler, grafikler, fiyat verileri, piyasa içgörüleri ve analizler dahil bu web sitesinde yayınlanan tüm materyaller yalnızca bilgilendirme amaçlıdır ve finansal, yatırım veya hukuki tavsiye olarak değerlendirilmemelidir. İçeriğimizi doğru ve güncel tutmaya çalışsak da, eksiksizliğini veya güvenilirliğini garanti etmiyoruz ve bu web sitesinin kullanımından kaynaklanan herhangi bir kayıptan sorumlu değiliz.";
$footer_disclaimer_p2 = "Kripto para, Forex, CFD, hisse senedi ve diğer finansal araçlarla ticaret önemli risk içerir ve her yatırımcı için uygun olmayabilir. Piyasa koşulları hızla değişebilir ve geçmiş performans gelecekteki sonuçları garanti etmez. Herhangi bir yatırım kararı vermeden önce, mali durumunuzu ve risk toleransınızı dikkatlice değerlendirin ve gerekirse bağımsız profesyonel tavsiye alın. Yalnızca kaybetmeyi göze alabileceğiniz parayı yatırın.";
$footer_copyright = "© " . date('Y') . " $site_name. All rights reserved.";

// FOOTER NAV LINKS
$footnav_about = "Hakkımızda";
$footnav_how = "Nasıl Çalışır";
$footnav_why = "Neden İşlem Yapmalı";
$footnav_faq = "SSS";
$footnav_contacts = "Bize Ulaşın";
$footnav_privacy = "Gizlilik Politikası";
$footnav_risk = "Risk Uyarısı";
$footnav_terms = "Kullanım Şartları";
$footnav_product = "Ürün";
$footnav_offer = "Teklif";

// ABOUT PAGE VARIABLES
$about_meta_title = "Hakkımızda | $site_name Resmi Site";
$about_meta_description = "$site_name, yapay zeka otomasyonu yoluyla finansal piyasaları demokratikleştirme misyonumuz ve kurumsal düzeyde güvenlik çerçevemiz hakkında daha fazla bilgi edinin.";
$about_h1 = "<mark>$site_name</mark> Hakkında";
$about_lead = "Yapay zeka, algoritmik yürütme ve kurumsal güvenlik yoluyla dünya çapındaki tüccarları güçlendiriyoruz.";
$about_mission_title = "Misyonumuz";
$about_mission_text = "$site_name'de, gelişmiş ticaret teknolojilerinin yalnızca kurumsal fonlara değil, herkese açık olması gerektiğine inanıyoruz. Platformumuz, günlük perakende yatırımcılar ile en son teknoloji hesaplamalı ticaret algoritmaları arasındaki boşluğu kapatır.";
$about_tech_title = "Son Teknoloji";
$about_tech_text = "Sistemlerimiz, küresel kripto, Forex ve hisse senedi piyasalarında her saniye 100.000'den fazla veri noktasını değerlendirir. Öngörücü makine öğrenimi modellerini alt milisaniye yürütmeyle birleştirerek, son derece düşük kayma ve güvenilir performans sunuyoruz.";
$about_sec_title = "Güvenlik ve Düzenleyici Uyumluluk";
$about_sec_text = "Müşteri güveni, ekosistemimizin temel dayanağıdır. 256-bit TLS şifreleme, katı biyometrik ve 2FA protokolleri uyguluyoruz ve tüm dijital rezervlerin %98'ini cold storage kasalarında saklıyoruz.";

// PRODUCT PAGE VARIABLES
$product_meta_title = "Ticaret Araçları ve Ürün | $site_name";
$product_meta_description = "$site_name'i güçlendiren ticaret motorunu ve yapay zeka yeteneklerini keşfedin. Otomatik emir yürütme, öngörücü analitik ve sezgisel kontroller.";
$product_h1 = "Platformun <mark>Ürünü ve Özellikleri</mark>";
$product_lead = "Modern kripto para ve finansal piyasalarda size rekabet avantajı sağlamak için tasarlanmış akıllı araçları keşfedin.";
$product_f1_title = "Otomatik AI Ticaret Motoru";
$product_f1_text = "Nöral algoritmaların piyasa trendlerini analiz etmesine ve duygusuz olarak 7/24 optimal işlemleri yürütmesine izin verin.";
$product_f2_title = "Gerçek Zamanlı Piyasa Analizleri";
$product_f2_text = "Canlı emir defteri derinliği, otomatik model tanıma ve kurumsal duyarlılık takibi parmaklarınızın ucunda.";
$product_f3_title = "Risk Yönetimi Paketi";
$product_f3_text = "Ayrıntılı stop-loss ve take-profit limitleri, maksimum günlük risk kontrolleri ve otomatik korunma yetenekleri.";
$product_f4_title = "Platformlar Arası Erişilebilirlik";
$product_f4_text = "Sıfır gecikme ve tam bulut senkronizasyonu ile masaüstü tarayıcılar, tabletler ve akıllı telefonlar arasında sorunsuz işlem yapın.";

// OFFER PAGE VARIABLES
$offer_meta_title = "Özel Teklif ve Koşullar | $site_name";
$offer_meta_description = "$site_name ile özel kayıt teklifini keşfedin. $app_price $app_currency başlangıç yatırımıyla başlayın ve özel destek alın.";
$offer_h1 = "Özel <mark>Ticaret Teklifi</mark>";
$offer_lead = "Rekabetçi avantajlar ve özel bire bir hesap oryantasyonuyla ticaret yolculuğunuza bugün başlayın.";
$offer_step1_title = "1. Hızlı Kayıt";
$offer_step1_text = "2 dakikadan kısa sürede kişisel hesap erişiminizi güvence altına almak için kısa kayıt formumuzu doldurun.";
$offer_step2_title = "2. Ticaret Bakiyenizi Fonlayın";
$offer_step2_text = "Kredi kartı, banka havalesi veya e-cüzdanlar kullanarak standart minimum $app_price $app_currency para yatırın. Fonlarınızın %100'ü doğrudan ticaret bakiyenize gider.";
$offer_step3_title = "3. AI Ticaretini Etkinleştirin";
$offer_step3_text = "Otomatik veya destekli modu seçin, tercih ettiğiniz varlık çiftlerini belirleyin ve platformun tüm yetenekleriyle işlem yapmaya başlayın.";

// CONTACTS PAGE VARIABLES
$contacts_meta_title = "Desteğe Ulaşın | $site_name";
$contacts_meta_description = "$site_name ekibiyle iletişime geçin. 7/24 müşteri desteği, teknik yardım ve hesap sorguları.";
$contacts_h1 = "<mark>Müşteri Desteğine</mark> Ulaşın";
$contacts_lead = "Özverili uluslararası destek ekibimiz, haftanın 7 günü, günde 24 saat size yardımcı olmaya hazır.";
$contacts_info_title = "Resmi Sorular";
$contacts_info_text = "Genel sorular, hesap doğrulama veya teknik destek için doğrulanmış iletişim kanallarımız aracılığıyla bize ulaşın.";
$contacts_support_hours = "7/24 Canlı Sohbet ve E-posta Desteği";

// FAQ PAGE VARIABLES
$faq_meta_title = "SSS ve Bilgi Bankası | $site_name";
$faq_meta_description = "$site_name hesapları, para yatırma, para çekme ve otomatik AI ticareti hakkında sıkça sorulan sorulara yanıtlar bulun.";
$faq_h1 = "$site_name <mark>SSS</mark>";
$faq_lead = "Platform güvenliği, para çekme işlemleri ve otomatik ticaret hakkında en yaygın sorulara net yanıtlar.";

// PRIVACY POLICY PAGE VARIABLES
$privacy_meta_title = "Gizlilik Politikası | $site_name";
$privacy_meta_description = "$site_name'in kişisel verilerinizi nasıl topladığını, koruduğunu ve yönettiğini anlamak için kapsamlı Gizlilik Politikamızı okuyun.";
$privacy_h1 = "Gizlilik Politikası";
$privacy_p1 = "Bu Gizlilik Politikası, web sitemizi ziyaret ettiğinizde, bir hesap kaydettiğinizde veya ticaret yazılımımızı kullandığınızda $site_name'in bilgileri nasıl topladığını, kullandığını ve ifşa ettiğini açıklar.";
$privacy_sec1_title = "1. Veri Toplama ve Kullanımı";
$privacy_sec1_text = "Hesabınızı oluşturmak, sizi doğrulanmış komisyoncu ortaklarla bağlamak ve uluslararası KYC ve AML standartlarına uygun kimlik doğrulama yapmak için gerekli iletişim bilgilerini (ad, e-posta adresi, telefon numarası) topluyoruz.";
$privacy_sec2_title = "2. Çerezler ve İzleme Teknolojileri";
$privacy_sec2_text = "Web sitesi performansını iyileştirmek, kullanıcı deneyimini kişiselleştirmek ve trafik modellerini izlemek için temel ve analitik çerezler kullanıyoruz. Tarayıcı çerez ayarlarınızı istediğiniz zaman ayarlayabilirsiniz.";
$privacy_sec3_title = "3. Veri Güvenliği ve GDPR Hakları";
$privacy_sec3_text = "Tüm kullanıcı verileri, banka düzeyinde kriptografik protokoller kullanılarak aktarım sırasında ve depoda şifrelenir. Genel Veri Koruma Yönetmeliği (GDPR) kapsamında, kullanıcılar kişisel kayıtlarına erişim, düzeltme veya silme talep etme hakkına sahiptir.";

// TERMS OF USE PAGE VARIABLES
$terms_meta_title = "Kullanım Şartları | $site_name";
$terms_meta_description = "$site_name platformunun ve ilgili hizmetlerinin kullanımını düzenleyen resmi Şartlar ve Koşulları inceleyin.";
$terms_h1 = "Kullanım Şartları";
$terms_p1 = "$site_name'e erişmeden veya kullanmadan önce lütfen bu Kullanım Şartlarını dikkatlice okuyun. Bir hesap kaydettirerek, bu hükümlerle bağlı olmayı kabul etmiş olursunuz.";
$terms_sec1_title = "1. Kullanıcı Uygunluğu";
$terms_sec1_text = "Web sitesini kullanmak için en az 18 yaşında olmalı ve çevrimiçi ticaret ile kripto para etkileşimlerinin yasal olarak izin verildiği bir yargı bölgesinde ikamet etmelisiniz. Yerel yasalarınıza uygunluğu sağlamaktan siz sorumlusunuz.";
$terms_sec2_title = "2. Hesap Kaydı ve Güvenliği";
$terms_sec2_text = "Kayıt sırasında doğru, kesin ve eksiksiz bilgi vermeyi kabul edersiniz. Giriş bilgilerinizin gizliliğini korumaktan yalnızca siz sorumlusunuz.";
$terms_sec3_title = "3. Sorumluluk Sınırlaması";
$terms_sec3_text = "$site_name bilgilendirme ve yazılım yönlendirme hizmetleri sunar. Kişiselleştirilmiş finansal tavsiye vermiyoruz ve ticaret karlılığını garanti etmiyoruz. Finansal piyasalarda ticaret yapmak doğal bir sermaye riski taşır.";

// RISK WARNING PAGE VARIABLES (TZ Item 19: Exact 4 sections)
$risk_meta_title = "Risk Uyarısı ve Yasal Bildirim | $site_name";
$risk_meta_description = "$site_name'de CFD, Forex ve kripto para ticaretine ilişkin önemli risk açıklaması. Yatırım yapmadan önce dikkatlice okuyun.";
$risk_h1 = "Risk Uyarısı";
$risk_sec1_title = "1. Yüksek Riskli Yatırım Bildirimi ve Oynaklık";
$risk_sec1_text = "Kripto para, Fark Sözleşmeleri (CFD), döviz (Forex) ve diğer finansal varlıklarla ticaret önemli bir kayıp riski içerir ve tüm yatırımcılar için uygun olmayabilir. Kripto para piyasaları son derece oynaktır ve fiyatlar, düzenleyici duyurulara, makroekonomik değişikliklere veya piyasa duyarlılığına yanıt olarak keskin dalgalanmalara maruz kalır. Tamamen kaybetmeyi göze alamayacağınız parayı asla yatırmamalısınız.";
$risk_sec2_title = "2. Bağımsız Finansal Tavsiye";
$risk_sec2_text = "$site_name'de sunulan tüm materyaller, araçlar, algoritmik sinyaller ve yorumlar yalnızca bilgilendirme, eğitim ve pazarlama amaçlıdır. Bu web sitesindeki içeriklerin hiçbiri kişiselleştirilmiş yatırım, hukuki veya finansal tavsiye teşkil etmez. Herhangi bir işlem yapmadan önce bağımsız araştırma yapmalı veya lisanslı bir finansal danışmana danışmalısınız.";
$risk_sec3_title = "3. Düzenleyici ve Coğrafi Kısıtlamalar";
$risk_sec3_text = "Belirli yargı bölgeleri, perakende CFD ve kripto para ticaretini kısıtlar veya yasaklar. $site_name'e erişimin ve ortak ticaret komisyoncu firmalarının kullanımının yerel yasal çerçevelerine göre yasal olup olmadığını doğrulamak, kullanıcının tek sorumluluğundadır.";
$risk_sec4_title = "4. Platform Teknolojisi ve Piyasa Yürütmesi";
$risk_sec4_text = "Otomatik ticaret araçları, yapay zeka algoritmaları ve piyasa göstergeleri kâr garanti etmez veya piyasa risklerini ortadan kaldırmaz. Teknik kesintiler, ağ gecikmesi, sistem kesintileri ve piyasa likidite eksiklikleri, işlem yürütmede gecikmelere veya kaymaya neden olabilir.";

// SIGN UP / LOGIN PAGE VARIABLES
$sign_meta_title = "Kayıt / Giriş Yap | $site_name";
$sign_meta_description = "Akıllı otomatik ticaret araçlarına, piyasa sinyallerine ve güvenli finansman seçeneklerine erişmek için $site_name'de ücretsiz hesabınızı oluşturun.";
$sign_h1 = "<mark>$site_name</mark>'e Kaydolun";
$sign_lead = "Binlerce tüccara katılın ve AI ticaret motorumuza anında erişim kazanın.";

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
$hero_form_heading = "Ücretsiz hesabınızı oluşturun";
$hero_form_button = "Kaydol";
$form_name_placeholder = "Adınızı girin";
$form_surname_placeholder = "Soyadınızı girin";
$form_disclaimer_prefix = "Kişisel bilgilerinizi girip düğmeye tıklayarak";
$form_privacy_link_label = "Gizlilik Politikası'nı";
$form_disclaimer_and = "ve";
$form_terms_link_label = "Kullanım Şartları'nı";
$form_disclaimer_of_site = "kabul edersiniz.";

// -- partners strip --
$partners_label = "Önde gelen ortaklar tarafından güveniliyor";

// -- "what is" section --
$whatis_label = "Platform Hakkında";
$whatis_title = "$site_name nedir?";
$whatis_intro = "$site_name, kriptoyu günlük çevrimiçi bankacılık kadar basit hale getirmek için tasarlanmış resmi çevrimiçi ticaret platformudur.";
$whatis_icon_1_title = "Yapay Zeka Destekli Analiz";
$whatis_icon_1_text = "Gelişmiş algoritmalar piyasaların karmaşıklığını sizin için yönetir.";
$whatis_icon_2_title = "Anında Yürütme";
$whatis_icon_2_text = "Her saniye işlenen binlerce veri noktası — gecikmesiz işlemler.";
$whatis_icon_3_title = "Basit, Sezgisel Kontrol Paneli";
$whatis_icon_3_text = "Bakiyenizi ve açık pozisyonlarınızı istediğiniz zaman bir bakışta kontrol edin.";
$whatis_icon_4_title = "Kolay Erişim, Engel Yok";
$whatis_icon_4_text = "Sadece $app_price $app_currency minimum yatırımla başlayın — gizli ücret yok.";
$whatis_cta_text = "Ekibimiz ve ürünümüz hakkında daha fazla bilgi edinmek ister misiniz?";
$whatis_cta_link = "Hakkımızda";

// -- stats section heading (per-stat label/value already set above) --
$stats_label = "Sayılarla $site_name";
$stats_title = "Vaatlerden Daha Yüksek Sesle Konuşan Sayılar";

// -- key benefits section --
$benefits_label = "Temel Faydalar";
$benefits_title = "$site_name'in Ana Faydaları";
$benefit_1_title = "Yeni Başlayanlar İçin Uygun Platform";
$benefit_1_text = "Sezgisel grafikler ve adım adım kılavuzlar, kendinizi bunalmış hissetmeden başlamanıza yardımcı olur. İlk günden itibaren kriptoyu güvenle işlem yapabilirsiniz.";
$benefit_2_title = "Resmi ve Düzenlenmiş";
$benefit_2_text = "$site_name lisanslıdır ve geçerli finansal düzenlemelere uygundur. Her hesabı korumak için SSL şifreleme ve iki faktörlü kimlik doğrulama kullanıyoruz.";
$benefit_3_title = "Kolay Erişim, Engel Yok";
$benefit_3_text = "Sadece $app_price $app_currency minimum yatırımla herkes başlayabilir. Büyük bir ön yatırım gerekmez — küçük başlayın ve güveniniz arttıkça payınızı artırın.";
$benefit_4_title = "Şeffaf Ücretler";
$benefit_4_text = "Asla gizli ücretler görmezsiniz. Yalnızca geçerli olduğunda minimal işlem veya para çekme ücretleri uyguluyoruz, böylece tam olarak ne ödediğinizi her zaman bilirsiniz.";
$benefit_5_title = "7/24 Ticaret Erişimi";
$benefit_5_text = "Kendi programınıza göre, gündüz veya gece işlem yapın. $site_name masaüstünde olduğu kadar mobilde de iyi çalışır, böylece nerede olursanız olun piyasayla bağlantıda kalabilirsiniz.";
$benefit_6_title = "Yerel Müşteri Desteği";
$benefit_6_text = "Destek ekibimiz sohbet, telefon veya e-posta yoluyla ulaşılabilir. İhtiyacınız olduğunda size kendi dilinizde yardımcı olmak için gerçek insanlar burada.";
$benefits_trust_title = "Dünya Çapında Kullanıcılar Tarafından Güveniliyor";
$benefits_trust_text = "Bu yüzden bu kadar çok kripto kullanıcısı $site_name'e güveniyor. Binlerce tüccar zaten $site_name kullanıyor ve her gün yeni hesaplar katılıyor.";
$benefits_cta = "Kaydol";
$benefits_badge_1 = "256-bit SSL";
$benefits_badge_2 = "Güvenli Ödemeler";
$benefits_badge_3 = "2FA";

// -- security section --
$security_label = "Güvenlik";
$security_title = "$site_name ile Fonlarınız Güvende";
$security_subtitle = "Banka düzeyinde şifreleme, doğrulanmış ödemeler ve %98 cold storage — paranız her adımda korunur.";
$security_1_title = "Doğrulanmış Ödeme Sağlayıcıları";
$security_1_text = "Ödemeler yalnızca uluslararası güvenlik standartlarını karşılayan sertifikalı sağlayıcılar tarafından işlenir. Ödeme verileriniz sunucularımızda asla saklanmaz.";
$security_2_title = "256-bit SSL Şifreleme";
$security_2_text = "Cihazınız ile platformumuz arasında değiş tokuş edilen tüm veriler 256-bit TLS ile şifrelenir. Hiçbir üçüncü taraf bunları ele geçiremez veya okuyamaz.";
$security_3_title = "98% Cold Storage";
$security_3_text = "Varlıkların %98'i internet bağlantısı olmayan çevrimdışı cüzdanlarda saklanır. Hiç kimse bunlara uzaktan erişemez.";
$security_4_title = "Çok Faktörlü Kimlik Doğrulama";
$security_4_text = "Yalnızca siz hesabınıza erişebilirsiniz. Her giriş, yalnızca sizin kontrol ettiğiniz ikinci bir adımla doğrulanır.";
$security_5_title = "Hesap İzleme";
$security_5_text = "Her giriş, işlem veya ayar değişikliği anında bir bildirim tetikler, böylece hesabınızda neler olduğunu her zaman bilirsiniz.";
$security_6_title = "Şifre Koruması";
$security_6_text = "Şifreler okunamaz, geri döndürülemez bir biçimde saklanır. Teknik olarak şifrenizi görmemizin bir yolu yoktur.";
$security_cta_title = "Ücretsiz Rehber Alın!";
$security_cta_text = "Ücretsiz başlangıç rehberimizi alın ve bugün ticarete başlayın.";
$security_cta_button = "Kaydol";
$security_badge_1 = "98% Cold Storage";
$security_badge_2 = "Doğrulanmış Ödemeler";
$security_badge_3 = "Şifrelenmiş";

// -- how it works section --
$how_label = "Nasıl Çalışır";
$how_title = "Nasıl Çalışır";
$how_1_title = "Kaydolun";
$how_1_text = "\"Hesap Aç\" düğmesine tıklayın ve kayıt formunu bilgilerinizle (ad, e-posta ve telefon numarası) doldurun. Sadece bir dakika sürer.";
$how_2_title = "Fon Yatırın";
$how_2_text = "Ardından, hesabınızı fonlayın. Minimum yatırım sadece $app_price $app_currency'dır. Kredi/banka kartı, yerel banka havalesi veya popüler e-cüzdanlar kullanabilirsiniz. (İpucu: kendinizi rahat hissettiğiniz bir miktarla başlayın.)";
$how_3_title = "Ticarete Başlayın";
$how_3_text = "Fonlarınız hesabınıza ulaştığında, ticaret yapmaya hazırsınız. İstediğiniz varlığı (BTC, SOL veya USDT gibi) seçin ve stratejinize karar verin.";
$how_cta_label = "Nasıl Çalışır";
$how_cta_text = "Hizmetin nasıl çalıştığı hakkında daha fazla bilgiye mi ihtiyacınız var?";
$how_cta_link = "Nasıl Çalışır";

// -- trust reasons section --
$trust_label = "Neden Bizimle İşlem Yapmalısınız";
$trust_intro = "$site_name ile zaten işlem yapan binlerce kullanıcıya katılın. Sitemizde şu anda kaç kişinin işlem yaptığını gösteren canlı bir sayaç bile görüntüleniyor.";
$trust_1_title = "Tamamen Düzenlenmiş";
$trust_1_text = "$site_name uygun şekilde kayıtlıdır ve geçerli finansal düzenlemelere uygundur. Güvenliğinizi sağlamak için katı kurallar altında faaliyet gösteriyoruz.";
$trust_2_title = "Gelişmiş Güvenlik";
$trust_2_text = "Tüm verileriniz ve fonlarınız şifrelenmiş ve güvence altına alınmıştır. SSL şifreleme ve iki faktörlü kimlik doğrulama yoluyla sıkı hesap koruması uyguluyoruz.";
$trust_3_title = "Şeffaf Operasyonlar";
$trust_3_text = "Ücretlerimizi asla gizlemeyiz ve asla sürpriz kurallar eklemeyiz. Her işlemden önce hangi ücretlerin geçerli olduğunu tam olarak görürsünüz.";
$trust_4_title = "Duyarlı Destek";
$trust_4_text = "Destek ekibimiz, sorularınızı yanıtlamak veya herhangi bir sorunu çözmek için sohbet, telefon veya e-posta yoluyla ulaşılabilir.";
$trust_cta_text = "Piyasa koşulları hakkında daha fazla bilgi";
$trust_cta_link = "Neden İşlem Yapmalı";

// -- testimonials section heading (individual reviews already set above) --
$testimonials_label = "Referanslar";
$testimonials_title = "4M'den Fazla Tüccar Tarafından Güveniliyor";

// -- FAQ section heading --
$faq_label = "SSS";

// -- lead magnet CTA block --
$leadmagnet_title = "Ticarette Yeni misiniz?";
$leadmagnet_text1 = "Kaydolduktan sonra, ücretsiz rehberimizi alacaksınız,";
$leadmagnet_quote = "“Kripto Ticaretinde Kaçınılması Gereken 10 Hata”";
$leadmagnet_text2 = "en yaygın hataları önlemenize yardımcı olmak için en deneyimli analistlerimizden basit ipuçlarıyla dolu.";
$leadmagnet_text3 = "Sadece";
$leadmagnet_link = "kayıt";
$leadmagnet_text4 = "sırasında bilgilerinizi girin, doğrudan gelen kutunuza göndereceğiz. Birçok yatırımcı bu rehberle başladı ve gerçek bir fark yarattığını söylüyor.";
$leadmagnet_text5 = "Piyasa beklemiyor — bugün başlayın!";

// -- pre-about CTA band --
$pre_about_title = "Ticaretinizin Kontrolünü Ele Almaya Hazır mısınız?";
$pre_about_text = "Bugün $site_name'e katılın ve netlik, güvenlik ve sonuçlar için inşa edilmiş bir platform keşfedin.";
$pre_about_button = "Kaydol";

// -- pretest (quiz teaser) badges/CTA --
$pretest_title = "$app_price $app_currency ile Ticarete Başlayın!";
$pretest_text = "$site_name'i denemeye hazır mısınız? Şimdi kaydolun ve büyüyen kripto yatırımcıları ve tüccarları topluluğuna katılın.";
$pretest_button = "Kaydol";
$pretest_badge_1 = "Güvenli";
$pretest_badge_2 = "Düzenlenmiş";
$pretest_badge_3 = "4M'den Fazla Tüccar Tarafından Güveniliyor";

// -- about page --
$about_label = "Hakkımızda";
$about_title = "$site_name Hakkında";
$about_intro = "$site_name size sadece bir ticaret platformu vermez — netlik ve güvenle işlem yapmanıza yardımcı oluruz.";
$about_text_1 = "$site_name, hem yeni başlayanlar hem de deneyimli tüccarlar için kripto para ticaretini erişilebilir kılmak üzere tasarlanmış resmi çevrimiçi ticaret platformudur.";
$about_text_2 = "Yapay zeka destekli piyasa analizini basit, şeffaf bir kontrol paneliyle birleştiriyoruz, böylece nerede durduğunuzu her zaman tam olarak bilirsiniz.";
$about_text_3 = "Platformun her parçası netlik etrafında inşa edilmiştir: gizli ücret yok, kafa karıştırıcı jargon yok, sadece harekete geçebileceğiniz net bilgiler.";
$about_text_4 = "Platformumuz sizi saatlerce tahmin yürütmekten kurtarır ve sizi opak, düşük kaliteli alternatiflerden korur. Ticaretin şans üzerine değil, kesinlik üzerine inşa edilmesi gerektiğine inanıyoruz.";

// -- contact page --
$contact_label = "Bize Ulaşın";
$contact_title = "$site_name ile İletişime Geçin";
$contact_subtitle = "Bir sorunuz mu var veya yardıma mı ihtiyacınız var? Size tavsiyede bulunmak ve yol göstermek için buradayız.";
$contact_text = "$site_name'de, ticarette başarının şansla hiçbir ilgisi olmadığına inanıyoruz — kesinliğe, öngörüye ve doğru araçlara dayanır.";
$contact_form_text = "Aşağıdaki formu doldurmanız yeterlidir, ekibimizden bir üye kısa süre içinde sizinle iletişime geçecektir.";
$contact_form_button = "Mesaj Gönder";

// -- footer navigation labels (geo-page footer, TZ items 12/16/18) --
$footnav_col_pages = "Sayfalar";
$footnav_col_support = "Destek";
$footnav_col_legal = "Yasal";
$footnav_col_company = "Şirket";
$footnav_home = "Ana Sayfa";
$footnav_sitemap = "Site Haritası";
$footnav_conditions = "Kullanım Şartları";
$footnav_contact = "Bize Ulaşın";
$footnav_signup = "Kaydol";
$footer_risk_warning = "Risk Uyarısı";

// -- geo-page footer legal disclaimer (single-paragraph variant used by
// the geo template's own footer layout; the two-paragraph TZ item 21
// text above -- $footer_disclaimer_p1/$footer_disclaimer_p2 -- covers
// the root pages) --
$footer_disclaimer = "$site_name, finansal piyasalar, çevrimiçi ticaret ve dijital varlıklar hakkında eğitim içeriği ve genel bilgi sağlar. Bu web sitesinde yayınlanan tüm materyaller yalnızca bilgilendirme amaçlıdır ve finansal, yatırım veya hukuki tavsiye olarak değerlendirilmemelidir. Ticaret önemli risk içerir ve her yatırımcı için uygun olmayabilir. Yalnızca kaybetmeyi göze alabileceğiniz parayı yatırın.";

// ============================================================
// Geo-language SUBPAGE fallback content (TZ item 16 cont.). Same
// rationale as the block above: conditions/contacts/faq/offer/
// privacy/product/risk-warning/sign.php share templates across the
// bg/cs/da/... stub folders and reference these vars directly.
// English fallback so every geo folder's subpages render complete.
// ============================================================

// -- shared form aliases (service-page forms reuse the hero disclaimer) --
$form_disclaimer_risk_note = "Ayrıca şunu da okuyun";
$form_text = $form_disclaimer_prefix;
$form_text_privacy = $form_privacy_link_label;
$form_text_privacy_and = $form_disclaimer_and;
$form_text_conditions = $form_terms_link_label;
$form_text_conditions_of = $form_disclaimer_of_site;
$form_text_risk_warning_note = $form_disclaimer_risk_note;
$form_submit = "Kaydol";

// -- generic breadcrumbs (sign-up / product pages) --
$breadcrumb_home = "Ana Sayfa";
$breadcrumb_current = "Kayıt / Giriş Yap";
$breadcrumb_product = "Ürün";

// -- sign-up page official heading --
$official_heading = "Resmi $site_name™ Platformuna Kaydolun";
$official_description = "Güvenli, şeffaf bir platformda kripto para ticaretine başlamak için ücretsiz hesabınızı oluşturun.";

// -- product page: analytics banner --
$analytics_heading = "$site_name ile Daha Akıllı İşlem Yapın";
$analytics_description = "Net gerçek zamanlı piyasa verileri ve yapay zeka destekli içgörüler edinin. Bilinçli ticaret kararlarını güvenle alın.";

// -- product page: dashboard preview --
$app_main_heading = "Ticaret Kontrol Paneliniz";
$app_feature_1_title = "Canlı Piyasa Verileri";
$app_feature_1_text = "Gerçek zamanlı fiyatlar ve grafikler parmaklarınızın ucunda";
$app_feature_2_title = "Portföy Takibi";
$app_feature_2_text = "Bakiyeniz ve performansınız hakkında kapsamlı ölçümler";
$app_feature_3_title = "Mobil Görünüm";
$app_feature_3_text = "Mobil tarayıcılar için optimize edilmiştir";
$app_feature_4_title = "İzleme Listeleri";
$app_feature_4_text = "İzlediğiniz varlıkları takip edin";

// -- product page: capabilities --
$capabilities_main_title = "Neler Beklemelisiniz";
$capabilities_feature_1_title = "Yapay Zeka Destekli Sinyaller";
$capabilities_feature_1_text = "Gelişmiş algoritmalar piyasa sinyallerini analiz eder ve fırsatları 7/24 gün yüzüne çıkarır.";
$capabilities_feature_2_title = "Hızlı Kayıt";
$capabilities_feature_2_text = "Güvenli, basit bir kayıt süreciyle dakikalar içinde kaydolun.";
$capabilities_feature_3_title = "Doğrulanmış Güvenlik";
$capabilities_feature_3_text = "256-bit SSL şifreleme, 2FA ve %98 cold storage fonlarınızı her adımda korur.";
$capabilities_feature_4_title = "Sürekli Destek";
$capabilities_feature_4_text = "Kayıttan ilk işleminize kadar her adımda ekibimizden destek alın.";

// -- product page: stats strip --
$products_stats_currencies_v = "65+";
$products_stats_currencies_l = "Mevcut Para Birimleri";
$products_stats_users_v = "4M+";
$products_stats_users_l = "Kayıtlı Kullanıcılar";
$products_stats_volume_v = "98+";
$products_stats_volume_l = "Desteklenen Ülkeler";
$products_stats_countries_v = "7/24";
$products_stats_countries_l = "İşlem Erişimi";

// -- product page: 3-step strip --
$step_1 = "Bir hesap oluşturun";
$step_2 = "Fon yatırın";
$step_3 = "Size uygun stratejiyle ticarete başlayın";

// -- shared "last update" label (privacy page) --
$last_update = "Son güncelleme";

// -- FAQ page --
$faq_page_meta_title = "SSS | $site_name Desteği";
$faq_page_meta_description = "$site_name'in nasıl çalıştığı, fiyatlandırma ve başlangıç hakkında sıkça sorulan sorulara yanıtlar.";
$faq_page_title = "SSS";
$faq_page_breadcrumb_home = "Ana Sayfa";
$faq_page_breadcrumb_current = "SSS";
$faq_page_help_title = "Size nasıl yardımcı olabiliriz?";
$faq_1_q = "Nasıl başlarım?";
$faq_1_a = "Hesabınızı oluşturun, e-posta adresinizi doğrulayın ve ilk yatırımınızı yapın — planlar sadece $app_price $app_currency'dan başlıyor.";
$faq_2_q = "Param ve verilerim güvende mi? $site_name güvenilir mi?";
$faq_2_a = "Evet. Verileriniz endüstri standardı 256-bit şifreleme ile korunmaktadır ve fonlarınız iki faktörlü kimlik doğrulama ve %98 cold storage ile güvence altına alınmıştır.";
$faq_3_q = "Hesabımı istediğim zaman kapatabilir veya fon çekebilir miyim?";
$faq_3_a = "Evet. Para çekmeye ilişkin herhangi bir kısıtlama yoktur. Destek ekibimizle istediğiniz zaman iletişime geçin — hesabınıza yardımcı olacak veya para çekme işleminizi hızla gerçekleştireceğiz.";
$faq_4_q = "Bu platformun benim için doğru olup olmadığını nasıl anlarım?";
$faq_4_a = "$site_name, daha verimli işlem yapmak isteyen hem tamamen yeni başlayanlar hem de deneyimli tüccarlar için inşa edilmiştir — platformdaki her araç sizi bilgilendirmek ve kontrolde tutmak için tasarlanmıştır.";
$faq_5_q = "Başlamak için ticaret deneyimine ihtiyacım var mı?";
$faq_5_a = "Önceden deneyim gerekmez. Yapay zeka destekli modumuz analizi sizin için halleder ve daha fazla kontrol istiyorsanız istediğiniz zaman manuel moda geçebilirsiniz.";

// -- contacts page --
$contacts_h3 = "Teknik sorularınız veya hesabınızla ilgili sorularınız için lütfen bizimle e-posta yoluyla iletişime geçin";

// -- offer page (meta title/description already defined above) --
$offer_breadcrumb_home = "Ana Sayfa";
$offer_breadcrumb_current = "Teklif";
$offer_cta_h1 = "Bugün Ticarete Başlayın";
$offer_cta_text = "Dakikalar içinde hazır: kaydolun, hesabınızı fonlayın ve güvenli, düzenlenmiş bir platformda kripto para ticaretine başlayın.";
$offer_how_it_works_title = "Nasıl Çalışır";
$offer_official_platform_title = "Bu, Resmi $site_name™ Ticaret Platformudur";
$offer_official_platform_text = "Gerçek zamanlı içgörüler ve tam kontrolle kripto para ticareti yapmanın güvenilir, şeffaf bir yolu.";

// -- conditions of use page --
$conditions_meta_title = "Kullanım Şartları | $site_name";
$conditions_meta_description = "$site_name web sitesi ve ticaret platformu için resmi Kullanım Şartlarını okuyun.";
$conditions_breadcrumb_home = "Ana Sayfa";
$conditions_breadcrumb_current = "Kullanım Şartları";
$conditions_h1 = "Kullanım Şartları";
$conditions_s1_title = "1. Genel";
$conditions_s1_text = "Bu web sitesi, çevrimiçi bir kripto para ticaret platformuna erişim sağlar. Platformun kullanımı, bu şartların ve Gizlilik Politikamızın tamamen kabul edildiği anlamına gelir.";
$conditions_s2_title = "2. Uygunluk";
$conditions_s2_text = "Kullanıcılar en az 18 yaşında olmalı ve kendi yargı bölgelerinde tam yasal ehliyete sahip olmalıdır.";
$conditions_s3_title = "3. Kısıtlı Erişim";
$conditions_s3_text = "Yerel düzenlemelerin sunduğumuz ticaret hizmeti türünü yasakladığı yargı bölgelerinde erişim kısıtlanabilir.";
$conditions_s4_title = "4. Yasak Kullanım";
$conditions_s4_text = "Kullanıcılar sistemi kötüye kullanamaz, sistemlerimize yetkisiz erişim girişiminde bulunamaz veya yazılımımızı tersine mühendislik yapamaz.";
$conditions_s5_title = "5. Fikri Mülkiyet";
$conditions_s5_text = "Tüm kaynak kodu, kullanıcı arayüzleri ve marka varlıkları, işletmeci şirketin münhasır mülkiyetinde kalır.";
$conditions_s6_title = "6. Sorumluluk";
$conditions_s6_text = "Platformun araçları \"olduğu gibi\" sunulur. Kullanıcının kendi ticaret kararlarından kaynaklanan sonuçlardan hiçbir sorumluluk kabul etmiyoruz.";
$conditions_s7_title = "7. Üçüncü Taraf Hizmetleri";
$conditions_s7_text = "Üçüncü taraf ödeme sağlayıcılarıyla entegrasyonlar güvenli bağlantılar üzerinden gerçekleşir. Para yatırma ve çekme işlemleri için kullanıcılar doğrudan seçtikleri sağlayıcıyla işlem yapar.";
$conditions_s8_title = "8. Harici Bağlantılar";
$conditions_s8_text = "Harici kaynaklara bağlantılar yalnızca kolaylık için sağlanır. Herhangi bir harici yazılımı onaylamıyor veya garanti etmiyoruz.";
$conditions_s9_title = "9. Çeşitli";
$conditions_s9_text = "Bu şartları veya hizmeti istediğimiz zaman değiştirme hakkını saklı tutuyoruz, değişiklikler web sitesinde yayınlanır.";

// -- privacy policy page (meta title/description already defined above) --
$privacy_breadcrumb_home = "Ana Sayfa";
$privacy_breadcrumb_current = "Gizlilik Politikası";
$privacy_page_h1 = "Gizlilik Politikası";
$privacy_intro = "Gizliliğinize saygı duyuyor ve kişisel verileri uluslararası standartlara ve Avrupa GDPR'sine tam uyum içinde işliyoruz.";
$privacy_transparency_title = "Şeffaflık";
$privacy_transparency_text = "Operasyonel telemetri verilerinin nasıl işlendiğini açıkça açıklıyoruz. Daha fazla ayrıntı için destekle iletişime geçin.";
$privacy_usage_title = "Veri Kullanımı";
$privacy_usage_text = "Veriler yalnızca erişim sağlamak, oturumları güvence altına almak ve uyumluluk yükümlülüklerini yerine getirmek için kullanılır.";
$privacy_rights_short_title = "Haklarınız";
$privacy_rights_short_text = "Kişisel verilerinizi görüntüleme, güncelleme veya silinmesini talep etme haklarını tamamen elinizde tutarsınız.";
$privacy_security_title = "Güvenlik";
$privacy_security_text = "Operasyonel telemetri verilerini korumak için AES-256 şifreleme ve veritabanı izolasyonu kullanıyoruz.";
$privacy_s1_title = "1. Veri Toplama";
$privacy_s1_text = "Kullanım telemetrisini (IP adresi, sistem parametreleri, tarayıcı türü) ve kullanıcılar tarafından gönderilen doğrulama verilerini topluyoruz.";
$privacy_s2_title = "2. Yasal Dayanak";
$privacy_s2_text = "İşleme, kullanıcıların açık rızasına, düzenleyici uyumluluk gereksinimlerine ve hizmetin sunulmasına dayanır.";
$privacy_s3_title = "3. Veri Paylaşımı";
$privacy_s3_text = "Veriler asla ticarileştirilmez. Açıklamalar, bir gizlilik sözleşmesi (NDA) kapsamında yetkili takas kuruluşları ve teknik ortaklarla sınırlıdır.";
$privacy_s4_title = "4. Çerezler";
$privacy_s4_text = "Temel çerezler, oturum kimlik doğrulaması ve arayüz optimizasyonu için kullanılır.";
$privacy_google_choices = 'İzleme tercihlerinizi <a href="http://www.google.com/settings/ads" target="_blank" rel="noopener">Google Reklam Ayarları</a> aracılığıyla yönetin veya <a href="https://tools.google.com/dlpage/gaoptout" target="_blank" rel="noopener">Google Analytics Devre Dışı Bırakma Eklentisini</a> kullanın. Ayrıca, Google\'ın kendi veri uygulamalarını <a href="https://www.google.com/intl/en/policies/privacy/" target="_blank" rel="noopener">Gizlilik Politikasında</a> inceleyebilirsiniz.';
$privacy_s5_title = "5. Veri Saklama";
$privacy_s5_text = "Kişisel veriler yalnızca sistem erişim gereksinimlerini karşılamak için gerekli olduğu sürece saklanır.";
$privacy_s6_title = "6. Uluslararası Aktarımlar";
$privacy_s6_text = "Sınır ötesi veri aktarımları yalnızca şifrelenmiş kanallar ve standart sözleşme maddeleri aracılığıyla gerçekleşir.";
$privacy_s7_title = "7. Üçüncü Taraf Bağlantıları";
$privacy_s7_text = "Web sitemizden bağlantı verilen harici üçüncü taraf hizmetlerinin gizlilik uygulamalarından sorumlu değiliz.";
$privacy_s8_title = "8. Güncellemeler";
$privacy_s8_text = "Bu politika, sistem veya yasal değişiklikleri yansıtmak için periyodik olarak revize edilebilir.";
$privacy_rights_title = "Haklarınız";
$privacy_rights_text = "Kullanıcılar, saklanan verilerine erişim, düzeltme, kısıtlı işleme veya tam silme talep etme hakkına sahiptir.";

// -- risk warning page --
$page_title_risk_warning = "Risk Uyarısı | $site_name";
$page_description_risk_warning = "Ticaretin risklerini ve $site_name'in bunları güvenli bir şekilde yönetmenize nasıl yardımcı olduğunu anlayın.";
$risk_warning_breadcrumb_home = "Ana Sayfa";
$risk_warning_breadcrumb_current = "Risk Uyarısı";
$risk_warning_title = "Risk Uyarısı";
$risk_warning_intro = "Riskleri anlamak, güvenle işlem yapmanın ilk adımıdır.";
$risk_warning_ai_heading = "Yapay zeka sistemimiz risk yönetiminde nasıl yardımcı olur:";
$risk_warning_ai_1 = "<strong>Algoritmik Verimlilik ve Duygusuz Ticaret:</strong> Gelişmiş algoritmalar, işlemleri en uygun zamanda nesnel olarak yürütmek için piyasa sinyallerini analiz eder.";
$risk_warning_ai_2 = "<strong>Veri Odaklı Stratejiler:</strong> Stratejiler, tahmin yerine doğrulanmış piyasa modellerine ve gerçek zamanlı analize dayanır.";
$risk_warning_ai_3 = "<strong>Esnek Ayarlar ve Tam Kontrol:</strong> Risk parametrelerinizi istediğiniz zaman ayarlayın. Tüm bakiyeleri ve işlemleri kontrol panelinizde şeffaf bir şekilde takip edin — gizli ücret yok, para çekme kısıtlaması yok.";
$risk_warning_disclaimer = "<strong>Feragatname:</strong> Ticaret her zaman risk içerir. Otomatik sistemler (yapay zeka dahil) kâr garanti etmez, yazılım hataları veya beklenmedik piyasa olayları nedeniyle başarısız olabilir ve kullanıcı denetimi gerektirir. Geçmiş performans gelecekteki sonuçların bir göstergesi değildir. Bu platform yalnızca bilgilendirme ve pazarlama amaçlarına hizmet eder ve finansal tavsiye teşkil etmez.";
$risk_warning_s1_heading = "1. Genel Riskler ve Kripto Para Piyasası Riskleri";
$risk_warning_s1_1 = "Kripto paralar, çoğu yargı bölgesinde yalnızca minimum düzenleyici denetime tabi olan, 7/24 işlem gören son derece oynak, spekülatif varlıklardır.";
$risk_warning_s1_2 = "Değerler kısa sürelerde önemli ölçüde dalgalanabilir ve potansiyel olarak yatırılan sermayenin tamamen kaybedilmesine neden olabilir.";
$risk_warning_s1_3 = "Piyasa değerleri, düzenleyici değişikliklerden, teknik gelişmelerden, güvenlik ihlallerinden veya daha geniş makroekonomik olaylardan önemli ölçüde etkilenebilir.";
$risk_warning_s1_4 = "Bazı varlıklar tüm değerlerini kaybedebilir. Yalnızca kaybetmeyi göze alabileceğiniz parayı yatırın.";
$risk_warning_s2_heading = "2. Yürütme, Likidite ve Kaldıraç Riski";
$risk_warning_s2_1 = "<strong>Piyasa Oynaklığı ve Likidite:</strong> Aşırı fiyat hareketleri (günlük %10-20+) veya düşük likidite (özellikle daha küçük coinlerde) gecikmelere, platform kesintilerine ve önemli yürütme kaymasına neden olabilir. Stop-loss emirleri, aşırı koşullar altında zarar sınırlamasını garanti edemez.";
$risk_warning_s2_2 = "<strong>Kaldıraç ve Marj Riski:</strong> Kaldıraçlı ürünler hem kazançları hem de kayıpları büyütür, bu da orijinal yatırımınızdan daha fazlasını kaybedebileceğiniz anlamına gelir. Perakende yatırımcı hesaplarının yaklaşık %70-80'i kaldıraçlı ürünlerle işlem yaparken para kaybeder.";
$risk_warning_s3_heading = "3. Teknik, Siber Güvenlik ve Üçüncü Taraf Riskleri";
$risk_warning_s3_1 = "<strong>Teknik Faktörler:</strong> Çevrimiçi ticaret, internet bağlantısı kesintileri, donanım/yazılım arızaları ve hizmet kullanılamazlığı gibi doğal riskler taşır.";
$risk_warning_s3_2 = "<strong>Siber Güvenlik:</strong> Kripto para hesapları, kimlik avı, kötü amaçlı yazılım ve hackleme girişimlerinin sık hedefidir. İşlemler geri alınamaz; kimlik bilgilerinizin ele geçirilmesi kalıcı kayba neden olabilir.";
$risk_warning_s3_3 = "<strong>Üçüncü Taraf Platformları:</strong> Bu web sitesi, kullanıcıları üçüncü taraf platformlarına bağlayabilir. Bunların güvenliğini, operasyonlarını veya ödeme gücünü kontrol etmiyor, onaylamıyor veya garanti etmiyoruz. Harici platformlara fon yatırmadan önce her zaman kendi kapsamlı durum tespitinizi yapın.";
$risk_warning_s4_heading = "4. Düzenleyici, Vergi ve Nihai Hükümler";
$risk_warning_s4_1 = "<strong>Yasal Uyumluluk ve Vergiler:</strong> Düzenleyici çerçeveler büyük ölçüde değişir ve hızla değişir. Kullanıcılar, ticaret faaliyetlerinin yerel yasalara uygun olmasını sağlamaktan ve kendi vergi yükümlülüklerini yerine getirmekten yalnızca kendileri sorumludur.";
$risk_warning_s4_2 = "<strong>Kâr Garantisi Yok:</strong> \"Güvenli\" veya risksiz kripto para ticareti yoktur. Sağlanan herhangi bir getiri rakamı veya performans örneği tamamen varsayımsaldır.";
$risk_warning_s4_3 = "<strong>Uygunluk:</strong> Riskleri tam olarak anlamıyorsanız, gerekli mali kaynaklara bağımlıysanız veya ödünç alınan parayla işlem yapıyorsanız, kripto para ticareti sizin için uygun değildir. Şüphe durumunda bağımsız, lisanslı bir finansal danışmana danışın.";
$risk_warning_contact = "<strong>İletişim:</strong> Bu beyanla ilgili sorularınız varsa veya bir sorgu göndermek istiyorsanız, lütfen web sitemizdeki iletişim formu aracılığıyla resmi müşteri hizmetleri ekibimizle iletişime geçin.";

