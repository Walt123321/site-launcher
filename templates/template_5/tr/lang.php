<?php
require __DIR__ . '/../lang.php';

// Identity / config variables are intentionally NOT overridden here — they are inherited
// as-is from the root lang.php so brand/pricing swaps still work correctly at deploy time:
// $site_name, $site_url, $site_domain, $app_price, $app_currency, $rating_value,
// $rating_count, $review_count, $country_name, $support_email, $institutional_email.

$site_lang = "tr-TR";
$form_language = "tr";

// Reviews
$review_1_author = "Bireysel Yatırımcı";
$review_2_author = "Bağımsız Yatırımcı";
$review_3_author = "Dijital Varlık Yatırımcısı";
$review_4_author = "Pasif Gelir Arayan";

// META TITLE / DESCRIPTION (per page)
$home_meta_title = "$site_name — Resmi Web Sitesi | İşlem Platformu";
$home_meta_description = "$site_name ⭐ — gerçek zamanlı piyasa analizi ve net işlem sinyalleri için akıllı yapay zeka işlem platformu ⚡ Akıllı araçları ve içgörüleri rehberli turla deneyin.";

$quiz_consultant_name = 'Aylin';
$quiz_consultant_role = 'Kayıt Asistanı';

$quiz_text_welcome   = "Merhaba! Ben $quiz_consultant_name, $site_name kişisel kayıt asistanınızım. Harika bir haber! Erişiminiz resmi olarak ön onay aldı. Lütfen şimdi profesyonel profilinizi yapılandırmamıza izin verin!";
$quiz_text_q1 = "Tam yasal uyumluluğu sağlamak için lütfen mevcut ikamet ettiğiniz ülkeyi onaylayın: $country_name";
$quiz_text_a1_yes    = "Evet, şu anki ikametgahım burası";
$quiz_text_a1_no     = "Hayır";

$quiz_text_q2 = "Harika. En uygun finansal araçları bulmak için lütfen uygun yaş kategorisini seçin:";

$quiz_text_q3        = "Düzenli günlük temettü ödemelerini almak için aktif bir banka hesabı veya kredi kartınız var mı?";
$quiz_text_a3_yes    = "Evet, aktif bir hesabım var";
$quiz_text_a3_no     = "Henüz yok";

$quiz_text_q4        = "Lütfen birincil kişisel gelir kaynağınızı belirtin. (Bu parametre, sistem risk yönetimi ayarlarını özelleştirmeye yardımcı olur).";
$quiz_text_a4_1      = "Resmi İstihdam / Serbest Meslek";
$quiz_text_a4_2      = "Pasif Gelir / Kişisel Birikimler";
$quiz_text_a4_3      = "Diğer kaynaklar";

$quiz_text_q5 = "Harika! Son adım, kaydınızı onaylamak için yöneticimizden kısa bir telefon doğrulamasıdır. Aramalar 11:00 ile 20:00 arasında yapılmaktadır. Aramayı yanıtlayabilecek misiniz?";
$quiz_text_a5_yes    = "Evet, bu saatler arama için uygundur";
$quiz_text_a5_no     = "Lütfen aramayı hemen başlatın";

$quiz_text_loader    = "Talep edilen seçenekler analiz ediliyor ve güvenli hesap yapılandırma parametreleri başlatılıyor...";
$quiz_text_final_ttl = "Hesap Başarıyla Yetkilendirildi! 🎉 Güvenli dijital çalışma alanı tamamen yapılandırıldı. Günlük ödemeleri garanti altına almak için lütfen aşağıdaki son doğrulama adımlarını tamamlayın:";

$quiz_placeholder_fname = "Adınız";
$quiz_placeholder_lname = "Soyadınız";
$quiz_placeholder_email = "E-posta Adresiniz";
$quiz_placeholder_phone = "Telefon Numaranız";
$quiz_btn_submit = "İşlemleri Başlat";
$quiz_text_typing       = "mesaj yazıyor...";
$quiz_text_processing   = "Talep işleniyor...";

$about_meta_title = "$site_name Hakkında | Yapay Zeka Destekli Kripto İşlem Altyapısı";
$about_meta_description = "Tahmine dayalı analiz, piyasa istihbaratı, volatilite izleme ve dijital varlık araştırmasına odaklanan gelişmiş bir yapay zeka destekli kripto işlem altyapısı olan $site_name hakkında daha fazla bilgi edinin.";

$contact_meta_title = "$site_name İletişim | Yapay Zeka İşlem Platformu Erişimi Talep Edin";
$contact_meta_description = "Erişim talep etmek, yapay zeka destekli kripto işlem altyapısı, desteklenen piyasalar, dijital varlık zekası veya platforma katılım hakkında soru sormak için $site_name ile iletişime geçin.";

$terms_meta_title = "Şartlar ve Koşullar | $site_name Web Sitesi ve Platform Şartları";
$terms_meta_description = "Web sitesi kullanımı, bilgi amaçlı içerik, yapay zeka işlem altyapısı, kullanıcı sorumluluğu, üçüncü taraf hizmetleri ve risk sınırlamalarını kapsayan $site_name Şartlar ve Koşullarını okuyun.";

$privacy_meta_title = "Gizlilik Politikası | $site_name Veri Koruma ve Kullanıcı Gizliliği";
$privacy_meta_description = "Yapay zeka kripto işlem altyapısı web sitemiz aracılığıyla sunulan kişisel bilgileri nasıl topladığımızı, kullandığımızı, koruduğumuzu, sakladığımızı ve yönettiğimizi anlamak için $site_name Gizlilik Politikasını okuyun.";

$cookies_meta_title = "Çerez Politikası | $site_name Web Sitesi Çerezleri ve İzleme";
$cookies_meta_description = "$site_name'in kullanıcı deneyimini ve platform performansını iyileştirmek için çerezleri, analiz teknolojilerini, performans izleme araçlarını ve web sitesi işlevsellik hizmetlerini nasıl kullandığını öğrenin.";

$aml_meta_title = "AML Politikası | $site_name Kara Para Aklamayı Önleme Standartları";
$aml_meta_description = "Sorumlu dijital varlık kullanımı, kara para aklamayı önleme farkındalığı, yasaklanmış faaliyetler, izleme ilkeleri ve uyumluluk beklentilerini içeren $site_name AML Politikasını inceleyin.";

$risk_meta_title = "Risk Açıklaması | $site_name Kripto İşlem Risk Beyanı";
$risk_meta_description = "Kripto para volatilitesini, işlem belirsizliğini, yapay zeka sinyal sınırlamalarını, piyasa riskini, likidite riskini ve kullanıcı sorumluluğunu anlamak için $site_name Risk Açıklamasını inceleyin.";

$exchanges_meta_title = "Desteklenen Borsalar | $site_name Piyasa İstihbarat Kapsamı";
$exchanges_meta_description = "$site_name yapay zeka destekli piyasa istihbarat altyapısı tarafından izlenen kripto para borsalarının, likidite mekanlarının ve dijital varlık piyasalarının türlerini keşfedin.";

$about_breadcrumb_name = "$site_name Hakkında";
$contact_breadcrumb_name = "$site_name İletişim";
$terms_breadcrumb_name = "Şartlar ve Koşullar";
$privacy_breadcrumb_name = "Gizlilik Politikası";
$cookies_breadcrumb_name = "Çerez Politikası";
$aml_breadcrumb_name = "AML Politikası";
$risk_breadcrumb_name = "Risk Açıklaması";
$exchanges_breadcrumb_name = "Desteklenen Borsalar";

$hero_text = "Gelişmiş kripto işlem platformumuzla yeni bir ticaret çağını deneyimleyin. $site_name yapay zeka teknolojisi ile getirilerinizi optimize edebilir ve bilinçli yatırım kararları alabilirsiniz.";

// HEADER / NAV / FOOTER
$logo_subtitle = "Yapay Zeka İşlem Altyapısı";
$nav_signals = "Sinyaller";
$nav_reviews = "Yorumlar";
$nav_about = "Hakkımızda";
$nav_exchanges = "Borsalar";
$nav_exchanges_full = "Desteklenen Borsalar";
$nav_risk = "Risk";
$nav_risk_full = "Risk Açıklaması";
$nav_faq = "SSS";
$nav_privacy = "Gizlilik Politikası";
$nav_terms = "Şartlar ve Koşullar";
$nav_cookies = "Çerez Politikası";
$nav_cookies_short = "Çerezler";
$nav_aml = "AML Politikası";
$nav_contact_us = "Bize Ulaşın";
$nav_contact = "İletişim";
$nav_get_started = "Başla";
$header_ai_status = "Yapay Zeka Çekirdeği Aktif";
$header_menu_aria = "Menü";
$footer_platform = "Platform";
$footer_resources = "Kaynaklar";
$footer_contact_title = "İletişim";
$footer_ai_signals = "Yapay Zeka Sinyalleri";
$footer_about_link = "$site_name Hakkında";
$footer_description = "$site_name, tahmine dayalı analiz, kurumsal düzeyde piyasa istihbaratı, volatilite modellemesi, sinirsel yürütme sistemleri ve otomatik risk yönetimine odaklanan gelişmiş bir yapay zeka destekli kripto işlem altyapısıdır.";
$footer_monitoring = "7/24 Yapay Zeka Altyapı İzleme";
$footer_global_markets = "Küresel Dijital Varlık Piyasaları";
$footer_disclaimer_title = "Risk Açıklaması";
$footer_disclaimer_p1 = "Kripto para ticareti ve dijital varlık yatırımı önemli finansal risk içerir ve tüm yatırımcılar için uygun olmayabilir. Piyasa volatilitesi, likidite kesintileri, teknolojik arızalar, düzenleyici değişiklikler ve makroekonomik koşullar varlık performansını önemli ölçüde etkileyebilir.";
$footer_disclaimer_p2 = "$site_name yapay zeka destekli analitik altyapı, tahmine dayalı piyasa istihbaratı ve otomatik ticaret teknolojileri sağlar. Bu web sitesinde yer alan hiçbir şey finansal, yatırım, hukuki veya vergisel tavsiye teşkil etmez.";
$footer_disclaimer_p3 = "Geçmiş performans, gelecekteki sonuçları garanti etmez. Kullanıcılar, kripto para piyasalarına veya otomatik ticaret sistemlerine girmeden önce riskleri bağımsız olarak değerlendirmelidir.";
$footer_rights = "Tüm Hakları Saklıdır.";
$footer_lang_label = "Dil";

// HOME FORM
$home_form_fname = "Adınız";
$home_form_lname = "Soyadınız";
$home_form_email = "E-posta";
$home_form_submit_access = "Erişim Sağla";
$home_form_submit_platform = "Platform Erişimi Talep Et";

// CONTACT FORM
$contact_form_fname = "Adınız";
$contact_form_lname = "Soyadınız";
$contact_form_email = "E-posta";
$contact_form_submit = "Erişim Talep Et";

// HOME LABELS
$home_label_ai_confidence = "Yapay Zeka Güveni";
$home_label_update_speed = "Güncelleme Hızı";
$home_label_market_mode = "Piyasa Modu";
$home_label_market_condition = "Piyasa Durumu";
$home_label_buyer_activity = "Alıcı Aktivitesi";
$home_label_market_activity = "Piyasa Aktivitesi";
$home_label_risk_level = "Risk Seviyesi";
$home_label_updated = "Güncellendi";
$home_label_live_analysis = "CANLI ANALİZ";

// JS
$home_js_sec_ago = "sn önce";
$js_sec_ago = "sn önce";
$js_close_notification = "Bildirimi kapat";

$js_signal_long_direction = "Yükseliş trendi olasılığı artıyor";
$js_signal_long_market = "Kontrollü Genişleme";
$js_signal_long_pressure_label = "Likidite Baskısı";
$js_signal_long_pressure = "Boğa";

$js_signal_short_direction = "Aşağı yönlü baskı artıyor";
$js_signal_short_market = "Yüksek İstikrarsızlık";
$js_signal_short_pressure_label = "Risk Baskısı";
$js_signal_short_pressure = "Ayı";

$js_signal_watch_direction = "Konsolidasyon bölgesi tespit edildi";
$js_signal_watch_market = "Nötr Konsolidasyon";
$js_signal_watch_pressure_label = "Kurumsal Akış";
$js_signal_watch_pressure = "Sabit";

$js_hero_long_pair = "BTC/USD Momentum Genişlemesi";
$js_hero_long_regime = "Boğa";
$js_hero_long_feed_1 = "BTC likidite genişlemesi tespit edildi";
$js_hero_long_feed_2 = "Emir akışı baskısı pozitife dönüyor";
$js_hero_long_feed_3 = "Yapay zeka modeli yükselişin devamını doğruluyor";

$js_hero_watch_pair = "ETH/USD Volatilite Sıkışması";
$js_hero_watch_regime = "Nötr";
$js_hero_watch_feed_1 = "ETH sıkışma bölgesi tespit edildi";
$js_hero_watch_feed_2 = "Yapay zeka daha güçlü onay bekliyor";
$js_hero_watch_feed_3 = "Likidite sabit kalıyor";

$js_hero_short_pair = "SOL/USD Risk Genişlemesi";
$js_hero_short_regime = "Riskten Kaçınma";
$js_hero_short_feed_1 = "SOL aşağı yönlü baskı tespit edildi";
$js_hero_short_feed_2 = "Risk modeli volatilite genişlemesini işaret ediyor";
$js_hero_short_feed_3 = "Yapay zeka boğa pozisyonunu azaltıyor";

// JS — live user popup actions
$js_live_action_1 = "$site_name platformuna katıldı";
$js_live_action_2 = "platform erişimi talep etti";
$js_live_action_3 = "yapay zeka sinyal izlemeyi başlattı";
$js_live_action_4 = "piyasa analizini aktifleştirdi";
$js_live_action_5 = "kurumsal paneli açtı";
$js_live_action_6 = "$site_name platformuna bağlandı";

// HOME PAGE
$home_hero_label = "Her Deneyim Seviyesi İçin Yapay Zeka Kripto Platformu";
$home_hero_title = "$site_name Platformu";
$home_hero_desc = "$site_name, yapay zeka destekli içgörüler, gerçek zamanlı piyasa izleme, risk farkındalığı araçları ve rehberli platform desteği ile hem yeni başlayanların hem de deneyimli yatırımcıların kripto piyasalarını keşfetmesine yardımcı olur.";
$home_hero_feat_1 = "Yeni kullanıcılar için basit yapay zeka piyasa içgörüleri";
$home_hero_feat_2 = "Gerçek zamanlı kripto izleme ve sinyal güncellemeleri";
$home_hero_feat_3 = "Daha akıllı kararlar için riske duyarlı araçlar";
$home_hero_feat_4 = "Deneyimli yatırımcılar için gelişmiş analitikler";
$home_btn_request_access = "Platform Erişimi Alın";
$home_btn_view_signals = "Yapay Zeka Sinyallerini Görüntüle";
$home_trust_data_label = "Analiz Edilen Piyasa Veri Noktaları";
$home_trust_confidence_label = "Ortalama Sinyal Güveni";
$home_trust_monitoring_label = "Yapay Zeka Piyasa İzleme";
$home_terminal_title = "$site_name Rehberli Yapay Zeka Piyasa Görünümü";
$home_terminal_insight_label = "Mevcut Yapay Zeka Piyasa İçgörüsü";
$home_terminal_feed_1 = "BTC piyasa aktivitesi daha güçlü momentum gösteriyor";
$home_terminal_feed_2 = "ETH hareketi onay için izleniyor";
$home_terminal_feed_3 = "Yapay zeka asistanı olası bir fırsat bölgesini vurguluyor";
$home_trust_strip_1 = "Yeni Başlayanlar ve Deneyimli Yatırımcılar İçin Yapay Zeka İçgörüleri";
$home_trust_strip_2 = "7/24 Kripto Para Piyasası İzleme";
$home_trust_strip_3 = "Gerçek Zamanlı Risk ve Fırsat Analizi";
$home_trust_strip_4 = "Gelişmiş İşlem Araçlarına Rehberli Erişim";
$home_signals_eyebrow = "$site_name CANLI YAPAY ZEKA ÇEKİRDEĞİ";
$home_signals_title = "Daha Akıllı Kripto Kararları İçin Gerçek Zamanlı Yapay Zeka Piyasa Sinyalleri";
$home_signals_desc = "$site_name, hem yeni başlayanlar hem de deneyimli yatırımcılar için yapay zeka destekli içgörüler ve gerçek zamanlı piyasa sinyalleri üretmek üzere kripto para piyasası aktivitesini, volatilitesini, likidite koşullarını, duyarlılık trendlerini ve blockchain verilerini sürekli olarak izler.";
$home_signals_terminal_title = "$site_name Yapay Zeka Sinyal Motoru";
$home_signal_btc_sub = "Pozitif Momentum Tespit Edildi";
$home_signal_btc_dir = "Yükseliş trendi olasılığı artıyor";
$home_signal_btc_market = "Pozitif Momentum";
$home_signal_btc_activity = "Güçlü";
$home_signal_eth_sub = "Piyasa Onayı Bekleniyor";
$home_signal_eth_dir = "Yatay hareket tespit edildi";
$home_signal_eth_market = "Nötr Trend";
$home_signal_eth_activity = "Sabit";
$home_signal_sol_sub = "Artan Piyasa Riski Tespit Edildi";
$home_signal_sol_dir = "Aşağı yönlü baskı artıyor";
$home_signal_sol_market = "Yüksek Volatilite";
$home_signal_sol_risk = "Yüksek";
$home_why_eyebrow = "NEDEN $site_name?";
$home_why_title = "Her Deneyim Seviyesi İçin Geliştirilmiş Yapay Zeka Destekli Kripto Araçları";
$home_why_desc_1 = "$site_name, kullanıcıların yapay zeka, gerçek zamanlı izleme, piyasa içgörüleri ve risk farkındalığı araçları aracılığıyla kripto para piyasalarını daha iyi anlamalarına yardımcı olur. İster kriptoyu ilk kez keşfediyor olun ister halihazırda işlem deneyiminiz olsun, platform piyasa analizini daha erişilebilir ve anlaşılması kolay hale getirmek için tasarlanmıştır.";
$home_why_desc_2 = "$site_name altyapısı, ortaya çıkan fırsatları ve değişen piyasa koşullarını belirlemek için piyasa aktivitesini, fiyat hareketlerini, likidite koşullarını, duyarlılık trendlerini ve blockchain verilerini sürekli olarak değerlendirir. Yeni kullanıcılar rehberli platform desteğinden yararlanabilirken, deneyimli yatırımcılar gelişmiş analitik araçları ve yapay zeka destekli piyasa istihbaratını keşfedebilir.";
$home_flow_1 = "Piyasa İzleme";
$home_flow_2 = "Yapay Zeka Analizi";
$home_flow_3 = "Fırsat Tespiti";
$home_flow_4 = "Risk Değerlendirmesi";
$home_flow_5 = "Uygulanabilir İçgörüler";
$home_reviews_eyebrow = "$site_name TOPLULUĞU";
$home_reviews_title = "Kullanıcılar $site_name Hakkında Neler Söylüyor?";
$home_reviews_desc = "İlk kez kripto kullananlardan deneyimli yatırımcılara kadar birçok kişi, piyasa koşullarını daha iyi anlamak, yapay zeka destekli içgörüleri keşfetmek ve kripto para kararlarına daha net bir şekilde yaklaşmak için $site_name'i kullanıyor.";
$home_review_1_text = "$site_name'i keşfetmeden önce kripto para alanındaki bilgi miktarından bunalmış hissediyordum. Her platform karmaşık görünüyordu ve sürekli hata yapmaktan endişe ediyordum. $site_name'de en çok takdir ettiğim şey, her şeyin ne kadar anlaşılır olduğu. Yapay zeka içgörüleri, kendimi kaybolmuş hissetmeden piyasa koşullarını anlamama yardımcı oldu ve platform bana kendi hızımda öğrenmeye başlama güvenini verdi. Deneyimin beklediğimden ne kadar daha kolay hale geldiği için gerçekten minnettarım.";
$home_review_1_tag = "Güvenli ve Kolay Başlangıç";
$home_review_badge = "ONAYLI KULLANICI";
$home_review_2_text = "İlk adımı atacak kadar rahat hissetmeden aylarca kripto platformlarına baktım. $site_name bu deneyimi tamamen değiştirdi. Platform, piyasa bilgilerini anlamayı kolaylaştırdı ve araçları kullanmak için yıllarca işlem deneyimine ihtiyacım varmış gibi hissetmedim. Beni en çok etkileyen şey, basitlik ile güçlü yapay zeka analizi arasındaki dengeydi. İhtiyacınız olduğunda rehberliğin elinizin altında olması gibi hissettiriyor. Gözüm korkmadan öğrenmeme yardımcı olan bir platform bulduğum için minnettarım.";
$home_review_2_tag = "Daha kolay öğrenme deneyimi";
$home_review_3_text = "Birçok piyasa analizi platformunu test ettim ve $site_name erişilebilirliği ciddi analitik derinlikle dengelediği için öne çıkıyor. Yeni kullanıcılar platformu hızlı bir şekilde anlayabilirken, deneyimli yatırımcılar hala yararlı yapay zeka odaklı piyasa sinyalleri, risk izleme ve gerçek zamanlı kripto istihbaratı alıyor. Bu dengeyi bulmak zordur. Platform, kullanıcıları bunaltmadan anlamlı bir piyasa bağlamı sunuyor, ki bu çok az kripto aracının başarabildiği bir şeydir.";
$home_review_3_tag = "Basit kullanılabilirlik ile gelişmiş araçlar";
$home_review_span_1 = "Yeni Kripto Kullanıcısı";
$home_review_span_2 = "İlk Kez Platform Kullanıcısı";
$home_review_span_3 = "Profesyonel Kripto Yatırımcısı";
$home_review_1_avatar_alt = "Can Yılmaz, $site_name kullanıcısı";
$home_review_2_avatar_alt = "Emre Şahin, $site_name kullanıcısı";
$home_review_3_avatar_alt = "Burak Demir, $site_name kullanıcısı";
$home_hero_visual_alt = "$site_name üzerinde yapay zeka destekli piyasa analiz panosu";
$home_signal_visual_alt = "$site_name yapay zekası tarafından oluşturulan gerçek zamanlı işlem sinyali";
$home_device_visual_alt = "$site_name aracılığıyla bağlı bir cihazda görüntülenen kripto analizleri";
$home_security_visual_alt = "$site_name hesap korumasını temsil eden güvenlik kalkanı";
$home_contact_eyebrow = "$site_name İLE BAŞLAYIN";
$home_contact_title = "Platformu Güvenle Keşfedin";
$home_contact_desc_1 = "İster kripto para piyasalarında tamamen yeni olun, ister zaten işlem deneyiminiz olsun, $site_name kullanıcıların dijital varlık fırsatlarını daha iyi anlamalarına yardımcı olmak için tasarlanmış yapay zeka destekli piyasa içgörülerine, gerçek zamanlı izleme araçlarına ve akıllı analitiklere erişim sağlar.";
$home_contact_desc_2 = "Platform hakkında daha fazla bilgi edinmek, mevcut özellikleri keşfetmek ve $site_name'in gelişmiş teknoloji ve rehberli platform desteği ile kripto para piyasalarında gezinmenize nasıl yardımcı olabileceğini öğrenmek için bilgilerinizi gönderin.";
$home_seo_toggle = "$site_name Yapay Zeka Platformu Hakkında Daha Fazla Bilgi Edinin";
$home_seo_h2 = "Daha Akıllı Kripto Piyasa Kararları İçin $site_name Yapay Zeka Platformu";
$home_seo_p1 = "$site_name, hem yeni başlayanlar hem de deneyimli yatırımcılar için tasarlanmış yapay zeka destekli bir kripto para platformudur. Platform, kullanıcıların dijital varlık piyasalarını daha iyi anlamalarına ve potansiyel fırsatları belirlemelerine yardımcı olmak için yapay zekayı, gerçek zamanlı piyasa izlemeyi ve gelişmiş analitik araçları birleştirir.";
$home_seo_p2 = "Kapsamlı piyasa bilgisi gerektiren birçok geleneksel işlem platformunun aksine, $site_name karmaşık piyasa bilgilerini daha kolay anlaşılır hale getirmek için tasarlanmıştır. Platform, büyük hacimli bilgileri pratik içgörülere dönüştürerek kripto para aktivitesini, fiyat hareketlerini, duyarlılık trendlerini, likidite koşullarını ve blockchain verilerini sürekli olarak analiz eder.";
$home_seo_p3 = "İster kripto para piyasalarını ilk kez keşfediyor olun, ister halihazırda dijital varlıklarla işlem yapma deneyiminiz olsun, $site_name, gerçek zamanlı olarak değişen piyasa koşullarına uyum sağlarken daha bilinçli karar almayı desteklemek üzere tasarlanmış akıllı araçlar sağlar.";
$home_seo_h3_1 = "Erişilebilir Hale Getirilen Yapay Zeka Piyasa Analizi";
$home_seo_h3_1_p1 = "$site_name, işlem aktivitesi, volatilite kalıpları, likidite koşulları, blockchain olayları ve piyasa duyarlılığı dahil olmak üzere çok çeşitli piyasa göstergelerini değerlendirmek için yapay zeka kullanır. Bilgileri sürekli işleyerek, platform kullanıcıların mevcut piyasa davranışını daha net anlamalarına yardımcı olur.";
$home_seo_h3_1_p2 = "Yapay zeka modelleri, statik varsayımlara dayanmak yerine değişen ortamlara uyum sağlamak üzere tasarlanmıştır. Bu, platformun gelişen kripto para trendlerine ve ortaya çıkan piyasa fırsatlarına dinamik olarak yanıt vermesini sağlar.";
$home_seo_h3_1_p3 = "Deneyimli yatırımcılar için yeterince gelişmiş olsa da, platform, derin teknik uzmanlık gerektirmeden yapay zeka odaklı piyasa istihbaratına erişmek isteyen yeni kullanıcılar için erişilebilir kalacak şekilde yapılandırılmıştır.";
$home_seo_h3_2 = "Gerçek Zamanlı Yapay Zeka Piyasa Sinyalleri";
$home_seo_h3_2_p1 = "$site_name, kripto para piyasalarını sürekli izler ve değişen piyasa aktivitesine dayalı yapay zeka destekli içgörüler üretir. Platform, gerçek zamanlı analitik sinyaller sağlamak için momentumu, volatiliteyi, likidite koşullarını ve daha geniş piyasa davranışını değerlendirir.";
$home_seo_h3_2_p2 = "Bitcoin, Ethereum, Solana, XRP, Avalanche ve diğer büyük dijital varlıklar, değişen piyasa koşullarına otomatik olarak uyum sağlayan uyarlanabilir analitik modeller aracılığıyla izlenir.";
$home_seo_h3_2_p3 = "Tek bir göstergeye veya izole edilmiş metriğe güvenmek yerine, $site_name piyasa koşullarının daha eksiksiz bir görünümünü sağlamak üzere tasarlanmış daha geniş bir analitik çerçevede birden fazla bilgi kaynağını birleştirir.";
$home_seo_h3_3 = "Akıllı Risk Farkındalığı Araçları";
$home_seo_h3_3_p1 = "Kripto para piyasaları hızla değişebilir. $site_name, olağandışı volatiliteyi, değişen likidite koşullarını ve ortaya çıkan piyasa risklerini belirlemek üzere tasarlanmış yapay zeka destekli izleme sistemlerini içerir.";
$home_seo_h3_3_p2 = "Platform, piyasa davranışını ve olası risk faktörlerini sürekli değerlendirerek kullanıcıların değişen koşulları daha iyi anlamalarına ve daha bilinçli kararlar almalarına yardımcı olur.";
$home_seo_h3_3_p3 = "Birden fazla analiz katmanını birleştirerek, $site_name piyasa farkındalığını artırmayı ve kullanıcıların artan belirsizlik dönemlerinde daha fazla güvenle gezinmelerine yardımcı olmayı amaçlar.";
$home_seo_h3_4 = "Modern Kripto Para Piyasaları İçin Tasarlandı";
$home_seo_h3_4_p1 = "$site_name, modern dijital varlık piyasaları için tasarlanmış tek bir platformda yapay zekayı, gerçek zamanlı izleme teknolojilerini ve gelişmiş analitik araçları birleştirir.";
$home_seo_h3_4_p2 = "Altyapı, kripto para piyasası davranışının kapsamlı bir görünümünü sağlamak için piyasa aktivitesini, blockchain gelişmelerini, duyarlılık değişikliklerini ve likidite trendlerini sürekli değerlendirir.";
$home_seo_h3_4_p3 = "Dijital varlık piyasaları gelişmeye devam ettikçe, yapay zeka destekli araçlar kullanıcıların bilgileri daha verimli işlemelerine ve giderek karmaşıklaşan piyasa ortamlarını daha iyi anlamalarına yardımcı olabilir. $site_name, bu yetenekleri daha geniş bir piyasa katılımcısı yelpazesi için erişilebilir kılmak üzere tasarlanmıştır.";
$home_seo_side_1_label = "Yapay Zeka İçgörüleri";
$home_seo_side_1_title = "Anlaşılması Kolay Piyasa Analizi";
$home_seo_side_1_desc = "Hem yeni hem de deneyimli kripto para kullanıcıları için tasarlanmış yapay zeka destekli içgörüler.";
$home_seo_side_2_label = "Piyasa İzleme";
$home_seo_side_2_title = "Gerçek Zamanlı Kripto Takibi";
$home_seo_side_2_desc = "Büyük kripto para piyasalarının ve değişen piyasa koşullarının sürekli izlenmesi.";
$home_seo_side_3_label = "Risk Farkındalığı";
$home_seo_side_3_title = "Akıllı Risk Tespiti";
$home_seo_side_3_desc = "Değişen piyasa dinamiklerini ve volatilitesini vurgulamak için tasarlanmış gelişmiş izleme araçları.";
$home_seo_side_4_label = "Yapay Zeka Teknolojisi";
$home_seo_side_4_title = "Uyarlanabilir Analitik Modeller";
$home_seo_side_4_desc = "Piyasa verilerini ve ortaya çıkan trendleri sürekli değerlendiren makine öğrenimi sistemleri.";
$home_faq_eyebrow = "$site_name BİLGİ BANKASI";
$home_faq_title = "$site_name Hakkında Sıkça Sorulan Sorular";
$home_faq_desc = "Platformun nasıl çalıştığı, kimin için tasarlandığı ve yapay zekanın kullanıcıların kripto para piyasası koşullarını daha iyi anlamalarına nasıl yardımcı olduğu hakkında daha fazla bilgi edinin.";
$home_faq_q1 = "$site_name'i kullanmak için işlem deneyimine ihtiyacım var mı?";
$home_faq_a1 = "Hayır. $site_name, kripto para piyasalarına tamamen yeni olan kişiler de dahil olmak üzere farklı deneyim seviyelerine sahip kullanıcılar için tasarlanmıştır. Platform, karmaşık bilgileri daha kolay anlaşılır hale getirmek için yapay zeka destekli içgörüler ve piyasa izleme araçları kullanır.";
$home_faq_q2 = "$site_name aslında ne yapar?";
$home_faq_a2 = "$site_name, yapay zeka kullanarak kripto para piyasalarını sürekli analiz eder. Platform, gerçek zamanlı içgörüler ve analitik sinyaller üretmek için piyasa aktivitesini, volatilitesini, duyarlılık trendlerini, likidite koşullarını ve blockchain verilerini değerlendirir.";
$home_faq_q3 = "Deneyimli yatırımcılar $site_name'i kullanabilir mi?";
$home_faq_a3 = "Evet. Platform başlangıç seviyesi için uygun olmakla birlikte, deneyimli piyasa katılımcıları için değerli olabilecek gelişmiş analitik araçlar, yapay zeka odaklı piyasa istihbaratı ve gerçek zamanlı izleme özellikleri de sağlar.";
$home_faq_q4 = "$site_name hangi kripto paraları izler?";
$home_faq_a4 = "Platform, piyasa koşullarına ve mevcut veri kaynaklarına bağlı olarak Bitcoin, Ethereum, Solana, XRP, Avalanche ve diğer yaygın olarak işlem gören kripto paralar gibi büyük dijital varlıkları analiz edebilir.";
$home_faq_q5 = "Yapay zeka sinyalleri nasıl üretilir?";
$home_faq_a5 = "$site_name, volatilite, işlem aktivitesi, likidite koşulları, duyarlılık trendleri ve geçmiş piyasa davranışı dahil olmak üzere çok sayıda piyasa faktörünü aynı anda değerlendirir. Yapay zeka modelleri, değişen piyasa koşullarını ve potansiyel fırsatları belirlemek için bu girdileri birleştirir.";
$home_faq_q6 = "$site_name eğitim rehberliği sağlıyor mu?";
$home_faq_a6 = "Platform, kullanıcıların yapay zeka destekli analiz, basitleştirilmiş içgörüler ve platform özelliklerine rehberli erişim yoluyla piyasa koşullarını daha iyi anlamalarına yardımcı olmak için tasarlanmıştır. Yeni kullanıcılar gelişmiş teknik bilgiye ihtiyaç duymadan kripto para piyasalarını keşfedebilirler.";
$home_cta_label = "Yapay Zeka Platformu Hazır";
$home_cta_title = "Bugün $site_name'i Keşfetmeye Başlayın";
$home_cta_desc = "Hem yeni başlayanlar hem de deneyimli yatırımcılar için tasarlanmış yapay zeka destekli piyasa içgörülerini, gerçek zamanlı kripto para izlemeyi, akıllı risk farkındalığı araçlarını ve gelişmiş analitikleri keşfedin.";
$home_ticker_text = "Yapay Zeka Piyasa İzleme Aktif • Gerçek Zamanlı Kripto Para Analizi • Bitcoin Momentumu Güçleniyor • Ethereum Konsolidasyonu Tespit Edildi • Yeni Piyasa Fırsatları Belirlendi • Risk İzleme Sistemleri Çevrimiçi • Yapay Zeka İçgörüleri Sürekli Güncelleniyor • Yeni Başlayanlar ve Deneyimli Yatırımcılar İçin Tasarlandı";

// ABOUT PAGE
$about_h1 = "$site_name Hakkında";
$about_p1 = "$site_name, piyasa katılımcılarının hızla gelişen kripto para ekosistemini daha iyi anlamalarına yardımcı olmak için tasarlanmış yeni nesil bir yapay zeka altyapısıdır. $site_name, makine öğrenimi teknolojilerini, tahmine dayalı analitiği, piyasa istihbaratı sistemlerini ve gerçek zamanlı veri işlemeyi birleştirerek dijital varlık aktivitesini izlemek ve anlamlı piyasa gelişmelerini belirlemek için kapsamlı bir ortam sağlar.";
$about_p2 = "Kripto para piyasası, birden fazla borsa, yargı alanı ve likidite sağlayıcı arasında sürekli olarak çalışır. Her saniye, binlerce değişken fiyatlandırmayı, volatiliteyi, likidite koşullarını ve yatırımcı duyarlılığını etkiler. $site_name, bu karmaşık veri akışlarını yapılandırılmış ve ölçeklenebilir bir şekilde işlemek amacıyla geliştirilmiştir.";
$about_h2_vision = "$site_name'in Arkasındaki Vizyon";
$about_p_vision_1 = "Finansal piyasalar giderek daha fazla veri odaklı hale gelmiştir. Geleneksel analiz yöntemleri genellikle modern dijital varlık ekosistemlerinde üretilen bilgi hacmine ayak uydurmakta zorlanır. $site_name, gelişmiş hesaplama zekası, otomatik izleme sistemleri ve uyarlanabilir analitik modellerin uygulanması yoluyla bu boşluğu kapatmayı amaçlamaktadır.";
$about_p_vision_2 = "$site_name'in uzun vadeli vizyonu, kullanıcıların kripto para piyasa yapısını, risk koşullarını ve ortaya çıkan trendleri daha iyi anlamalarına yardımcı olabilecek şeffaf piyasa istihbarat araçları sağlamaktır.";
$about_h2_ai = "Yapay Zeka Altyapısı";
$about_p_ai_1 = "$site_name'in merkezinde, çok sayıda piyasa kaynağından gelen bilgileri aynı anda işlemek üzere tasarlanmış çok katmanlı bir yapay zeka çerçevesi bulunur.";
$about_p_ai_2 = "Bu kaynaklar şunları içerebilir:";
$about_li_1 = "Kripto para fiyat beslemeleri";
$about_li_2 = "Emir defteri aktivitesi";
$about_li_3 = "Likidite hareketi verileri";
$about_li_4 = "Volatilite göstergeleri";
$about_li_5 = "Blockchain işlem metrikleri";
$about_li_6 = "Piyasa duyarlılığı sinyalleri";
$about_li_7 = "Makroekonomik gelişmeler";
$about_li_8 = "Kurumsal piyasa aktivitesi";
$about_p_ai_3 = "Bu değişkenler arasındaki ilişkileri sürekli değerlendirerek $site_name, değerli piyasa bağlamı sağlayabilecek modelleri belirlemeye çalışır.";
$about_h2_risk = "Risk Farkındalığı Felsefesi";
$about_p_risk_1 = "Kripto para piyasalarına sorumlu bir şekilde katılım, riskin net bir şekilde anlaşılmasını gerektirir. $site_name, dijital varlık analizinin temel bir bileşeni olarak risk farkındalığını vurgular.";
$about_p_risk_2 = "Piyasa volatilitesi, likidite dalgalanmaları, borsaya özgü olaylar, düzenleyici gelişmeler ve daha geniş makroekonomik koşullar piyasa sonuçlarını etkileyebilir. Sonuç olarak, kullanıcılar karar verirken asla tek bir bilgi kaynağına tamamen güvenmemelidir.";
$about_h2_global = "Küresel Dijital Varlık Piyasaları";
$about_p_global_1 = "Kripto para piyasaları küresel ölçekte faaliyet gösterir ve farklı bölgelerden, sektörlerden ve ekonomik ortamlardan katılımcıları içerir. $site_name altyapısı, birden fazla piyasa segmentini aynı anda izleyecek şekilde tasarlanmıştır ve kullanıcıların dijital varlık ekosisteminin farklı bölümlerinde meydana gelen gelişmeleri gözlemlemelerine olanak tanır.";
$about_p_global_2 = "Bu daha geniş bakış açısı, değişen piyasa koşulları ve ortaya çıkan trendler hakkındaki farkındalığı artırmaya yardımcı olabilir.";
$about_h2_why = "Kullanıcılar Neden $site_name'i Keşfediyor?";
$about_why_li_1 = "Gelişmiş yapay zeka destekli piyasa istihbaratı";
$about_why_li_2 = "Gerçek zamanlı kripto para izleme";
$about_why_li_3 = "Kurumsal tarzda analitik altyapı";
$about_why_li_4 = "Çok faktörlü piyasa değerlendirmesi";
$about_why_li_5 = "Volatilite ve likidite izleme";
$about_why_li_6 = "Ölçeklenebilir dijital varlık araştırma araçları";
$about_why_li_7 = "Riske duyarlı analitik metodoloji";
$about_h2_forward = "İleriye Bakış";
$about_p_forward_1 = "Dijital varlık piyasaları olgunlaşmaya devam ettikçe, gelişmiş analitik altyapının öneminin artması beklenmektedir. $site_name, daha derin piyasa anlayışını, daha fazla şeffaflığı ve kripto para ekosistemine daha bilinçli katılımı destekleyen teknolojiler geliştirmeye odaklanmaya devam etmektedir.";
$about_p_forward_2 = "Sürekli inovasyon ve devam eden araştırma yoluyla $site_name, dijital varlık analizi için daha akıllı ve veri odaklı bir geleceğe katkıda bulunmayı hedeflemektedir.";

// CONTACT PAGE
$contact_h1 = "$site_name İletişim";
$contact_intro_1 = "Platform erişimi talep etmek, yapay zeka destekli kripto işlem altyapısı hakkında soru sormak veya dijital varlık piyasası istihbarat ortamımız hakkında daha fazla bilgi edinmek için $site_name ekibiyle iletişime geçin.";
$contact_intro_2 = "İster otomatik kripto analizlerini, ister kurumsal düzeyde sinyal altyapısını, volatilite izlemeyi veya çoklu borsa piyasa istihbaratını araştırıyor olun, ekibimiz talebinizi uygun departmana yönlendirmeye yardımcı olabilir.";
$contact_h2_help = "Nasıl Yardımcı Olabiliriz";
$contact_li_1 = "Platform erişim talepleri";
$contact_li_2 = "Genel ürün soruları";
$contact_li_3 = "Yapay zeka işlem altyapısı bilgileri";
$contact_li_4 = "Dijital varlık piyasası istihbarat sorguları";
$contact_li_5 = "Risk açıklaması ve uyumluluk soruları";
$contact_li_6 = "Teknik veya kayıt yardımı";
$contact_h2_send = "Talep Gönderin";
$contact_p_send = "Aşağıdaki formu doldurun, bir $site_name temsilcisi ek bilgilerle sizinle iletişime geçebilir.";
$contact_h2_info = "İletişim Bilgileri";
$contact_support_label = "Genel destek:";
$contact_institutional_label = "Kurumsal sorgular:";
$contact_disclaimer = "Lütfen $site_name'in kişiselleştirilmiş finansal, yatırım, vergi veya yasal tavsiye sağlamadığını unutmayın. Tüm bilgiler yalnızca teknoloji ve bilgilendirme amaçlıdır.";

// TERMS PAGE
$terms_h1 = "Şartlar ve Koşullar";
$terms_intro_1 = "Bu Şartlar ve Koşullar, $site_name web sitesine, içeriğe, platform açıklamalarına, formlara, iletişimlere ve ilgili bilgilendirici materyallere erişimi ve bunların kullanımını düzenler.";
$terms_intro_2 = "Bu web sitesine erişerek kullanıcılar, bu Şartlar ve Koşulları okuduklarını, anladıklarını ve kabul ettiklerini beyan ederler. Bir kullanıcı bu şartları kabul etmiyorsa web sitesini kullanmayı bırakmalıdır.";
$terms_h2_informational = "Bilgilendirme Amacı";
$terms_p_info_1 = "$site_name, yapay zeka destekli kripto işlem altyapısı, dijital varlık piyasa istihbaratı, volatilite izleme, likidite analizi ve ilgili teknolojiler hakkında bilgi sağlar.";
$terms_p_info_2 = "Web sitesi içeriği yalnızca genel bilgilendirme ve teknolojik sunum amacıyla sağlanmaktadır. Bu web sitesindeki hiçbir şey finansal tavsiye, yatırım tavsiyesi, hukuki tavsiye, vergi tavsiyesi veya işlem sonuçlarının garantisi olarak yorumlanmamalıdır.";
$terms_h2_no_advice = "Finansal Tavsiye Yoktur";
$terms_p_no_advice_1 = "$site_name, kullanıcıların herhangi bir kripto parayı, tokenı, finansal ürünü veya dijital varlığı alması, satması, elde tutması, işlem yapması, stake etmesi, transfer etmesi veya bunlarla etkileşime girmesi gerekip gerekmediği konusunda kişiselleştirilmiş öneriler sunmaz.";
$terms_p_no_advice_2 = "Kullanıcılar tüm bilgileri bağımsız olarak değerlendirmeli ve finansal kararlar vermeden önce kalifiye profesyonellerden tavsiye almalıdır.";
$terms_h2_user_responsibility = "Kullanıcı Sorumluluğu";
$terms_p_user_1 = "Kullanıcılar kendi kararlarından, risk değerlendirmelerinden, hesap hareketlerinden, alım satım işlemlerinden, yasal uyumluluklarından ve üçüncü taraf hizmetlerinin kullanımından sorumludur.";
$terms_p_user_2 = "Kullanıcılar, dijital varlık faaliyetlerinin kendi yargı alanlarında izin verildiğinden ve kripto piyasalarıyla etkileşime girmeden önce geçerli tüm riskleri anladıklarından emin olmalıdır.";
$terms_h2_ai = "Yapay Zeka ve Analitik Sistemler";
$terms_p_ai_1 = "$site_name; yapay zeka sistemlerini, tahmin modellerini, piyasa sinyallerini, otomatik analizleri veya uygulamayla ilgili teknolojileri tanımlayabilir.";
$terms_p_ai_2 = "Bu sistemler piyasa verilerine, istatistiksel modellere, makine öğrenimi süreçlerine ve üçüncü taraf bilgi kaynaklarına dayanabilir. Bu tür sistemler yanlış, gecikmeli, eksik, ulaşılamaz veya kullanıcının belirli hedefleri için uygunsuz olabilir.";
$terms_h2_availability = "Kullanılabilirlik Garantisi Yoktur";
$terms_p_avail_1 = "$site_name, kesintisiz web sitesi erişimi, sürekli platform kullanılabilirliği, hatasız çalışma, doğru piyasa bilgileri veya herhangi bir belirli özelliğin kullanılabilirliğini garanti etmez.";
$terms_p_avail_2 = "Hizmetler, içerik, sayfalar, formlar, entegrasyonlar veya platform açıklamaları herhangi bir zamanda değiştirilebilir, askıya alınabilir veya sonlandırılabilir.";
$terms_h2_third_party = "Üçüncü Taraf Hizmetleri";
$terms_p_tp_1 = "Web sitesi üçüncü taraf borsalara, likidite merkezlerine, analiz sağlayıcılara, iletişim araçlarına, barındırma hizmetlerine veya teknik altyapı sağlayıcılarına atıfta bulunabilir.";
$terms_p_tp_2 = "$site_name, üçüncü taraf platformları kontrol etmez ve bunların kullanılabilirliğinden, ücretlerinden, politikalarından, hesap kısıtlamalarından, uyumluluk prosedürlerinden, teknik arızalarından veya kullanıcı kayıplarından sorumlu değildir.";
$terms_h2_prohibited = "Yasaklanmış Kullanım";
$terms_p_prohibited = "Kullanıcılar bu web sitesini veya ilgili herhangi bir teknolojiyi yasadışı, taciz edici, hileli, manipülatif veya zararlı amaçlar için kullanmamalıdır.";
$terms_li_1 = "Yetkisiz erişim girişiminde bulunmak";
$terms_li_2 = "Yanlış veya yanıltıcı bilgi sunmak";
$terms_li_3 = "Web sitesini yasadışı finansal faaliyetler için kullanmak";
$terms_li_4 = "Web sitesi güvenliğine veya işlevselliğine müdahale etmek";
$terms_li_5 = "Web sitesi içeriğini izinsiz kopyalamak veya kötüye kullanmak";
$terms_li_6 = "Uyumluluk veya teknik kontrolleri atlatmaya çalışmak";
$terms_h2_ip = "Fikri Mülkiyet";
$terms_p_ip_1 = "Web sitesi tasarımı, metinleri, markalama, arayüz unsurları, grafikleri, yapısı ve ilgili materyaller aksi belirtilmedikçe $site_name'e aittir veya lisanslanmıştır.";
$terms_p_ip_2 = "Kullanıcılar web sitesi materyallerini uygun yetkilendirme olmadan çoğaltamaz, dağıtamaz, değiştiremez veya ticari olarak kullanamaz.";
$terms_h2_liability = "Sorumluluğun Sınırlandırılması";
$terms_p_liab_1 = "Geçerli yasaların izin verdiği azami ölçüde, $site_name dijital varlık ticaretinden, piyasa dalgalanmalarından, teknik sorunlardan, üçüncü taraf platform hatalarından, yanlış verilerden, kullanıcı kararlarından veya web sitesi içeriğine güvenmekten kaynaklanan kayıplardan sorumlu olmayacaktır.";
$terms_p_liab_2 = "Kullanıcılar bu web sitesine erişir ve riski kendilerine ait olmak üzere kullanırlar.";
$terms_h2_changes = "Bu Şartlardaki Değişiklikler";
$terms_p_changes_1 = "$site_name, bu Şartlar ve Koşulları dilediği zaman güncelleyebilir. Güncellenmiş şartlar bu sayfada yayınlanabilir.";
$terms_p_changes_2 = "Değişikliklerden sonra web sitesinin kullanılmaya devam edilmesi, kullanıcıların güncellenen şartları kabul ettiği anlamına gelir.";

// PRIVACY PAGE
$privacy_h1 = "Gizlilik Politikası";
$privacy_intro_1 = "$site_name, kullanıcı gizliliğine saygı duyar ve kişisel bilgileri sorumlu, şeffaf ve güvenli bir şekilde işlemeyi taahhüt eder.";
$privacy_intro_2 = "Bu Gizlilik Politikası, kullanıcılar bu web sitesini ziyaret ettiğinde, iletişim formlarını doldurduğunda, erişim talep ettiğinde veya $site_name içeriği ve platformla ilgili iletişimlerle etkileşime girdiğinde hangi bilgilerin toplanabileceğini açıklar.";
$privacy_h2_collect = "Toplayabileceğimiz Bilgiler";
$privacy_p_collect_1 = "$site_name, kullanıcılar tarafından web sitesi formları veya iletişim kanalları aracılığıyla gönüllü olarak sunulan bilgileri toplayabilir.";
$privacy_li_fname = "Ad";
$privacy_li_lname = "Soyad";
$privacy_li_email = "E-posta adresi";
$privacy_li_phone = "Telefon numarası";
$privacy_li_inquiry = "Gönderilen sorgu ayrıntıları";
$privacy_li_technical = "Temel teknik web sitesi kullanım verileri";
$privacy_h2_use = "Bilgileri Nasıl Kullanıyoruz";
$privacy_p_use_1 = "Bilgiler, kullanıcı taleplerine yanıt vermek, platform erişim bilgileri sağlamak, web sitesi işlevselliğini iyileştirmek, güvenliği sağlamak ve $site_name ile ilgili ilgili güncellemeleri iletmek için kullanılabilir.";
$privacy_p_use_2 = "Ayrıca web sitesi performansını analiz etmek, içerik yapısını iyileştirmek ve ziyaretçilerin sayfalarımızla nasıl etkileşime girdiğini daha iyi anlamak için toplanmış veya tanımlayıcı olmayan verileri de kullanabiliriz.";
$privacy_h2_comm = "İletişim Amaçları";
$privacy_p_comm_1 = "Bir kullanıcı iletişim bilgilerini gönderirse, $site_name bu bilgileri sorguya yanıt vermek, kayıt ayrıntılarını sağlamak, platform erişim isteklerini netleştirmek veya ilgili hizmet bilgilerini paylaşmak için kullanabilir.";
$privacy_p_comm_2 = "Kullanıcılar uygun olduğunda iletişimin kesilmesini talep edebilirler.";
$privacy_h2_cookies = "Çerezler ve Teknik Veriler";
$privacy_p_cookies_1 = "Bu web sitesi, tarama deneyimini iyileştirmek, performansı izlemek ve web sitesi güvenliğini desteklemek için çerezler, analiz araçları ve benzer teknolojiler kullanabilir.";
$privacy_p_cookies_2 = "Teknik veriler; cihaz türünü, tarayıcı türünü, işletim sistemini, sayfa etkileşimlerini, yönlendirme bilgilerini ve genel kullanım istatistiklerini içerebilir.";
$privacy_h2_protection = "Veri Koruma Önlemleri";
$privacy_p_prot_1 = "$site_name, gönderilen bilgileri yetkisiz erişime, kötüye kullanıma, kayba veya ifşaya karşı korumak için makul idari, teknik ve organizasyonel önlemleri uygular.";
$privacy_p_prot_2 = "Ancak, hiçbir çevrimiçi sistem mutlak güvenliği garanti edemez. Kullanıcılar hassas finansal bilgileri, özel cüzdan anahtarlarını, şifreleri, borsa kimlik bilgilerini veya gizli hesap erişim ayrıntılarını genel web sitesi formları aracılığıyla göndermekten kaçınmalıdır.";
$privacy_h2_third = "Üçüncü Taraf Hizmet Sağlayıcılar";
$privacy_p_third_1 = "$site_name; barındırma, analiz, iletişim, güvenlik, e-posta teslimi, CRM işleme veya teknik altyapı için üçüncü taraf sağlayıcıları kullanabilir.";
$privacy_p_third_2 = "Bu sağlayıcılar, sınırlı bilgileri yalnızca web sitesi işlevselliğini ve ilgili hizmetleri desteklemek için gerekli olduğu ölçüde işleyebilir.";
$privacy_google_choices = 'Google\'ın ziyaretlerinizden elde ettiği bilgileri nasıl kullandığını <a href="http://www.google.com/settings/ads" target="_blank" rel="noopener">Google Reklam Ayarları</a> üzerinden yönetebilir, <a href="https://tools.google.com/dlpage/gaoptout" target="_blank" rel="noopener">Google Analytics Kapsamı Dışında Kalma Tarayıcı Eklentisini</a> kullanarak ilgi alanına dayalı reklamlardan çıkabilir veya daha fazla ayrıntı için <a href="https://www.google.com/intl/tr/policies/privacy/" target="_blank" rel="noopener">Google\'ın Gizlilik Politikasını</a> inceleyebilirsiniz.';
$privacy_h2_sale = "Kişisel Bilgilerin Satışı Yoktur";
$privacy_p_sale_1 = "$site_name, bu web sitesi aracılığıyla gönderilen kişisel bilgileri satmayı amaçlamamaktadır.";
$privacy_p_sale_2 = "Bilgiler yalnızca operasyonel amaçlar, yasal uyumluluk, kullanıcı iletişimi, dolandırıcılığı önleme veya hizmetle ilgili işlemler için gerekli olduğunda paylaşılabilir.";
$privacy_h2_retention = "Veri Saklama";
$privacy_p_retention = "Kişisel bilgiler, sorulara yanıt vermek, iş kayıtlarını tutmak, yasal yükümlülüklere uymak, platform iletişimlerini iyileştirmek veya güvenlik ile dolandırıcılığı önlemeyi desteklemek için gerektiği sürece saklanabilir.";
$privacy_h2_rights = "Kullanıcı Hakları";
$privacy_p_rights = "Geçerli yasalara bağlı olarak, kullanıcıların kişisel bilgilere erişim, düzeltme, silme, itiraz, kısıtlama veya taşınabilirlik ile ilgili hakları olabilir.";
$privacy_h2_intl = "Uluslararası Kullanım";
$privacy_p_intl_1 = "$site_name'e farklı yargı alanlarından kullanıcılar erişebilir. Gizlilik kuralları konuma göre değişebilir.";
$privacy_p_intl_2 = "Bu web sitesini kullanarak kullanıcılar, bilgilerin bu Gizlilik Politikasına ve geçerli operasyonel gereksinimlere uygun olarak işlenebileceğini kabul ederler.";
$privacy_h2_policy_updates = "Politika Güncellemeleri";
$privacy_p_updates_1 = "$site_name, yasalardaki, teknolojideki, iç prosedürlerdeki veya web sitesi işlevselliğindeki değişiklikleri yansıtmak için bu Gizlilik Politikasını periyodik olarak güncelleyebilir.";
$privacy_p_updates_2 = "Güncellemelerden sonra web sitesinin kullanılmaya devam edilmesi, kullanıcıların revize edilmiş Gizlilik Politikasını kabul ettiği anlamına gelir.";

// COOKIES PAGE
$cookies_h1 = "Çerez Politikası";
$cookies_intro_1 = "Bu Çerez Politikası, kullanıcıların bu web sitesine erişirken veya etkileşimde bulunurken $site_name'in çerezleri, analiz teknolojilerini ve benzer izleme araçlarını nasıl kullandığını açıklar.";
$cookies_intro_2 = "Çerezler web sitesi işlevselliğini iyileştirmeye, kullanıcı deneyimini artırmaya, performansı analiz etmeye ve güvenlikle ilgili süreçleri desteklemeye yardımcı olur.";
$cookies_intro_3 = "Kullanıcılar bu web sitesini kullanmaya devam ederek belirli çerezlerin ve ilgili teknolojilerin bu politikaya uygun olarak kullanılabileceğini kabul ederler.";
$cookies_h2_what = "Çerezler Nedir?";
$cookies_p_what_1 = "Çerezler, bir web sitesini ziyaret ettiğinizde kullanıcının cihazında depolanan küçük metin dosyalarıdır.";
$cookies_p_what_2 = "Bu dosyalar, web sitelerinin geri dönen ziyaretçileri tanımasına, tercihleri hatırlamasına, gezinmeyi iyileştirmesine ve web sitesi performansını ölçmesine yardımcı olan bilgileri içerebilir.";
$cookies_h2_why = "Çerezleri Neden Kullanıyoruz";
$cookies_p_why_1 = "$site_name, çerezleri ve benzer teknolojileri çeşitli amaçlar için kullanabilir.";
$cookies_li_1 = "Web sitesi işlevselliğini sürdürmek";
$cookies_li_2 = "Kullanıcı deneyimini iyileştirmek";
$cookies_li_3 = "Kullanıcı tercihlerini hatırlamak";
$cookies_li_4 = "Ziyaretçi davranışını anlamak";
$cookies_li_5 = "Web sitesi performansını ölçmek";
$cookies_li_6 = "Teknik sorunları belirlemek";
$cookies_li_7 = "Web sitesi güvenliğini desteklemek";
$cookies_li_8 = "Kötüye kullanım ve suistimali önlemek";
$cookies_h2_essential = "Gerekli Çerezler";
$cookies_p_ess_1 = "Bazı çerezler, web sitesinin düzgün çalışması için gereklidir.";
$cookies_p_ess_2 = "Bu çerezler güvenliğin, gezinme işlevselliğinin, oturum yönetiminin ve diğer temel web sitesi işlemlerinin sürdürülmesine yardımcı olur.";
$cookies_p_ess_3 = "Gerekli çerezler olmadan web sitesinin bazı kısımları düzgün çalışmayabilir.";
$cookies_h2_analytics = "Analiz Çerezleri";
$cookies_p_an_1 = "Analiz çerezleri, ziyaretçilerin web sitesi içeriğiyle nasıl etkileşime girdiğini anlamamıza yardımcı olur.";
$cookies_p_an_2 = "Bu teknolojiler sayfa ziyaretleri, gezinme kalıpları, cihaz türleri, tarayıcı yapılandırmaları ve genel web sitesi kullanım metrikleri hakkında bilgi toplayabilir.";
$cookies_p_an_3 = "Analiz bilgileri genellikle toplanır ve web sitesi performansı ile kullanıcı deneyimini iyileştirmek için kullanılır.";
$cookies_h2_functional = "İşlevsel Çerezler";
$cookies_p_fun_1 = "İşlevsel çerezler, kullanıcılar tarafından seçilen ayarları ve tercihleri hatırlamak için kullanılabilir.";
$cookies_p_fun_2 = "Örnekler arasında dil tercihleri, arayüz ayarları, görüntüleme seçenekleri veya diğer özelleştirme özellikleri bulunabilir.";
$cookies_h2_third = "Üçüncü Taraf Teknolojileri";
$cookies_p_third_1 = "$site_name; üçüncü taraf hizmet sağlayıcıları, analiz platformları, reklam teknolojileri veya performans izleme araçlarından yararlanabilir.";
$cookies_p_third_2 = "Bu üçüncü taraflar kendi gizlilik politikalarına tabi kendi çerezlerini veya izleme teknolojilerini yerleştirebilir.";
$cookies_p_third_3 = "$site_name üçüncü taraf çerez uygulamalarını kontrol etmez ve uygun olduğunda harici sağlayıcıların gizlilik belgelerinin incelenmesini önerir.";
$cookies_h2_manage = "Çerezleri Yönetme";
$cookies_p_manage_1 = "Çoğu modern tarayıcı, kullanıcıların tarayıcı ayarları aracılığıyla çerezleri yönetmesine, kısıtlamasına veya silmesine olanak tanır.";
$cookies_p_manage_2 = "Kullanıcılar çerezleri tamamen devre dışı bırakmayı seçebilir, ancak bunu yaptıktan sonra bazı web sitesi özellikleri tasarlandığı gibi çalışmayabilir.";
$cookies_p_manage_3 = "Tarayıcı ayarları genellikle şu seçenekleri sunar:";
$cookies_li_manage_1 = "Tüm çerezleri engellemek";
$cookies_li_manage_2 = "Mevcut çerezleri silmek";
$cookies_li_manage_3 = "Çerez bildirimleri almak";
$cookies_li_manage_4 = "Belirli çerez kategorilerini kısıtlamak";
$cookies_h2_data = "Veri Koruma";
$cookies_p_data = "Çerezlerle ilgili bilgiler, Gizlilik Politikamıza ve geçerli veri koruma yasalarına uygun olarak işlenebilir.";
$cookies_h2_policy_updates = "Politika Güncellemeleri";
$cookies_p_updates_1 = "$site_name, teknolojik değişiklikleri, yasal gereksinimleri veya operasyonel iyileştirmeleri yansıtmak için bu Çerez Politikasını periyodik olarak güncelleyebilir.";
$cookies_p_updates_2 = "Güncellemelerin ardından web sitesinin kullanılmaya devam edilmesi, revize edilmiş politikanın kabul edildiği anlamına gelir.";

// AML PAGE
$aml_h1 = "AML Politikası";
$aml_intro_1 = "$site_name, kara para aklamayı önleme farkındalığı, finansal bütünlük ve dijital varlık piyasalarına sorumlu katılımın önemini kabul eder.";
$aml_intro_2 = "Bu AML Politikası, $site_name'in kriptoyla ilgili teknolojilerin yasadışı kullanımını, şüpheli finansal faaliyetleri, dolandırıcılığı, yaptırımlardan kaçınmayı, terörizmin finansmanını ve diğer yasaklanmış davranışları caydırmak için uyguladığı genel ilkeleri açıklar.";
$aml_h2_purpose = "Bu Politikanın Amacı";
$aml_p_purpose_1 = "Bu politikanın amacı, $site_name'in dijital varlık ekosistemindeki kara para aklamayı önleme farkındalığına nasıl yaklaştığına dair sorumlu bir çerçeve oluşturmaktır.";
$aml_p_purpose_2 = "Kripto para piyasaları, sınır ötesi faaliyetler, merkezi olmayan altyapı, üçüncü taraf borsalar ve harici cüzdan sistemlerini içerebilir. Bu nedenle, kullanıcılar uyumluluk yükümlülüklerinin kendi yargı alanlarına, hesap türüne, borsa sağlayıcısına ve yerel düzenleyici ortama bağlı olarak değişebileceğini anlamalıdır.";
$aml_h2_responsible = "Dijital Varlık Teknolojisinin Sorumlu Kullanımı";
$aml_p_resp_1 = "Kullanıcıların $site_name ve ilgili dijital varlık hizmetleriyle sorumlu, yasal ve geçerli kurallara uygun olarak etkileşimde bulunmaları beklenmektedir.";
$aml_p_resp_2 = "$site_name; kripto piyasalarının, alım satım sistemlerinin, otomatik teknolojilerin veya analitik araçların yasadışı amaçlarla kullanılmasını desteklemez veya teşvik etmez.";
$aml_li_1 = "Kara para aklama";
$aml_li_2 = "Terörizmin finansmanı";
$aml_li_3 = "Dolandırıcılık veya finansal aldatmaca";
$aml_li_4 = "Yaptırımlardan kaçınma";
$aml_li_5 = "Piyasa manipülasyonu";
$aml_li_6 = "Çalınan fonların veya güvenliği ihlal edilmiş hesapların kullanımı";
$aml_li_7 = "Geçerli yasalarca yasaklanmış herhangi bir faaliyet";
$aml_h2_exchange = "Üçüncü Taraf Borsa Uyumluluğu";
$aml_p_ex_1 = "$site_name, üçüncü taraf dijital varlık mekanlarına veya likidite ortamlarına atıfta bulunabilir, bunlarla etkileşime girebilir veya bunlarla ilgili analitik altyapı sağlayabilir.";
$aml_p_ex_2 = "Üçüncü taraf borsalar, saklamacılar, ödeme işlemcileri ve hizmet sağlayıcılar; kimlik doğrulama, işlem izleme, yaptırım taraması, hesap kısıtlamaları, fon kaynağı kontrolleri veya ek doğrulama gereksinimleri dahil olmak üzere kendi uyumluluk prosedürlerini uygulayabilir.";
$aml_h2_user_responsibility = "Kullanıcı Sorumluluğu";
$aml_p_user_1 = "Kullanıcılar, faaliyetlerinin kendi bulundukları yerde yasal olmasını ve ilgili düzenleyiciler, borsalar, finansal kurumlar veya hizmet sağlayıcılar tarafından uygulanan yükümlülüklerle tutarlı olmasını sağlamaktan sorumludur.";
$aml_p_user_2 = "Kullanıcılar mülkiyeti gizlemeye, işlemin kökenlerini saklamaya, yanlış bilgi vermeye, doğrulama süreçlerini atlatmaya veya dijital varlık altyapısını şüpheli veya yasadışı sayılabilecek bir şekilde kullanmaya çalışmamalıdır.";
$aml_h2_suspicious = "Şüpheli Faaliyetler";
$aml_p_suspicious = "Şüpheli faaliyetler; normal kullanımla tutarsız görünen davranışları, alım satım sistemlerini kötüye kullanma girişimlerini, tekrar tekrar yanıltıcı bilgi sunumunu, kısıtlanmış yargı alanlarıyla etkileşimi veya dolandırıcılık, yasadışı fonlar ya da yasaklanmış hizmetlerle bağlantılı faaliyetleri içerebilir.";
$aml_h2_evasion = "Kaçınma veya Etrafından Dolaşma Yoktur";
$aml_p_evasion = "Kullanıcılar, uyumluluk kontrollerini, teknik kısıtlamaları, kimlik doğrulama sistemlerini, coğrafi sınırlamaları veya risk izleme süreçlerini atlatmaya çalışmamalıdır.";
$aml_h2_policy_updates = "Politika Güncellemeleri";
$aml_p_updates_1 = "$site_name, düzenleyici beklentiler, piyasa standartları, iç prosedürler veya dijital varlık sektörü uygulamalarındaki değişiklikleri yansıtmak için zaman zaman bu AML Politikasını güncelleyebilir.";
$aml_p_updates_2 = "Güncellemelerden sonra web sitesinin kullanılmaya devam edilmesi, kullanıcıların revize edilmiş politikayı kabul ettiği anlamına gelir.";

// RISK PAGE
$risk_h1 = "Risk Açıklaması";
$risk_intro_1 = "Kripto para ticareti ve dijital varlık yatırımı önemli riskler içerir. Fiyatlar hızla değişebilir, likidite beklenmedik şekilde dalgalanabilir ve piyasa koşulları kısa bir süre içinde oldukça istikrarsız hale gelebilir.";
$risk_intro_2 = "Bu Risk Açıklaması, dijital varlık piyasaları, otomatik ticaret teknolojileri, yapay zeka tarafından oluşturulan piyasa sinyalleri veya kriptoyla ilgili analitik altyapı ile etkileşime girmeden önce kullanıcıların incelemesi gereken önemli hususları açıklar.";
$risk_h2_no_guarantee = "Garantili Sonuç Yoktur";
$risk_p_no_guarantee_1 = "$site_name, kar, yatırım getirisi, alım satım başarısı, sinyal doğruluğu, kesintisiz erişim veya pozitif finansal sonuçlar garanti etmez.";
$risk_p_no_guarantee_2 = "Bu web sitesinde görüntülenen tüm örnekler, istatistikler, arayüz unsurları, performans metrikleri, sinyal göstergeleri veya piyasa simülasyonları yalnızca bilgilendirme ve örneklendirme amacıyla sunulmaktadır.";
$risk_h2_volatility = "Kripto Para Piyasası Volatilitesi";
$risk_p_vol_1 = "Dijital varlık piyasaları oldukça volatildir. Fiyatlar likidite yetersizlikleri, makroekonomik haberler, düzenleyici gelişmeler, borsa kesintileri, blockchain olayları, yatırımcı duyarlılığı, kaldıraçlı işlemler veya piyasa manipülasyonundan etkilenebilir.";
$risk_p_vol_2 = "Volatilite; hızlı kayıplara, ani fiyat boşluklarına, kaymalara (slippage), likidasyon olaylarına veya işlemlerin beklenen fiyatlardan gerçekleştirilememesine neden olabilir.";
$risk_h2_ai = "Yapay Zeka Sinyal Sınırlamaları";
$risk_p_ai_1 = "Yapay zeka sistemleri büyük miktarda piyasa verisini analiz edebilir ancak belirsizliği ortadan kaldıramazlar.";
$risk_p_ai_2 = "Yapay zeka destekli göstergeler, ticaret sinyalleri, piyasa sınıflandırmaları ve tahmin modelleri eksik, gecikmeli, yanlış veya kullanıcının kişisel finansal durumu için uygunsuz olabilir.";
$risk_p_ai_3 = "Kullanıcılar ticari, yatırım veya finansal kararlar verirken yalnızca herhangi bir yapay zeka sinyaline güvenmemelidir.";
$risk_h2_tech = "Teknoloji ve Yürütme Riski";
$risk_p_tech_1 = "Alım satım teknolojisi; internet bağlantısı sorunlarından, sunucu kesintilerinden, gecikmelerden, yazılım hatalarından, API arızalarından, borsa kesintilerinden, yanlış veri beslemelerinden veya üçüncü taraf altyapı sınırlamalarından etkilenebilir.";
$risk_p_tech_2 = "$site_name, verilere, sinyallere, platform özelliklerine, üçüncü taraf sistemlere veya yürütme ortamlarına kesintisiz erişimi garanti etmez.";
$risk_h2_liquidity = "Likidite ve Borsa Riski";
$risk_p_liq_1 = "Likidite, borsalar ve dijital varlıklar arasında önemli ölçüde değişebilir. Bazı piyasalar düşük emir defteri derinliği, geniş spreadler, gecikmeli yürütme veya stres dönemlerinde keskin fiyat hareketleri yaşayabilir.";
$risk_p_liq_2 = "Üçüncü taraf borsalar ücretler, limitler, kısıtlamalar, hesap incelemeleri, para çekme gecikmeleri, alım satım durdurmaları veya coğrafi sınırlamalar getirebilir.";
$risk_h2_regulatory = "Düzenleyici Risk";
$risk_p_reg_1 = "Dijital varlık düzenlemeleri hızla değişebilir ve ülkelere, bölgelere ve yargı alanlarına göre farklılık gösterebilir.";
$risk_p_reg_2 = "Düzenleyici değişiklikler piyasa erişimini, varlık kullanılabilirliğini, borsa işlemlerini, raporlama yükümlülüklerini, vergilendirmeyi, işlem kısıtlamalarını veya platform işlevselliğini etkileyebilir.";
$risk_h2_user_responsibility = "Kullanıcı Sorumluluğu";
$risk_p_user_1 = "Kullanıcılar, riskleri değerlendirmekten, geçerli yasaları anlamaktan, kendi finansal durumlarını gözden geçirmekten ve bağımsız kararlar vermekten tamamen sorumludur.";
$risk_p_user_2 = "$site_name kişiselleştirilmiş finansal, yatırım, hukuki, muhasebe veya vergi tavsiyesi sağlamaz.";
$risk_h2_advice = "Profesyonel Tavsiye Alın";
$risk_p_advice_1 = "Kullanıcılar, kripto para, alım satım sistemleri, otomatik teknolojiler veya dijital varlık yatırımlarını içeren önemli finansal kararlar vermeden önce kalifiye profesyonellere danışmalıdır.";
$risk_p_advice_2 = "Bu web sitesini kullanarak kullanıcılar, dijital varlık piyasalarıyla ilişkili riskleri anladıklarını ve kendi kararlarının sorumluluğunu kabul ettiklerini beyan ederler.";

// EXCHANGES PAGE
$exchanges_h1 = "Desteklenen Borsalar";
$exchanges_intro_1 = "$site_name, geniş bir kripto para alım satım ortamı yelpazesindeki dijital varlık aktivitesini değerlendiren çoklu piyasa istihbaratı yaklaşımı etrafında tasarlanmıştır.";
$exchanges_intro_2 = "Modern kripto piyasaları çok sayıda borsa, likidite sağlayıcı, türev piyasaları ve alım satım ekosistemleri aracılığıyla faaliyet gösterir. Kapsamlı piyasa istihbaratı oluşturmak için bu ortamlardaki aktiviteyi anlamak esastır.";
$exchanges_h2_philosophy = "Piyasa Kapsam Felsefesi";
$exchanges_p_phil_1 = "Tek bir mekana güvenmek yerine, $site_name pazar geneli analiz konsepti etrafında inşa edilmiştir.";
$exchanges_p_phil_2 = "Kripto para fiyatlandırması, likidite koşulları, volatilite davranışı ve kurumsal aktivite genellikle borsalar arasında farklılık gösterir. Analitik modeller, daha geniş piyasa koşullarını gözlemleyerek, ortaya çıkan trendler ve potansiyel anomaliler hakkında ek bağlam elde edebilir.";
$exchanges_h2_spot = "Spot Piyasa İzleme";
$exchanges_p_spot_1 = "Spot borsalar, küresel dijital varlık aktivitesinin önemli bir bölümünü temsil eder.";
$exchanges_p_spot_2 = "Piyasa istihbarat sistemleri, aşağıdakiler dahil olmak üzere spot piyasa verilerini değerlendirebilir:";
$exchanges_li_spot_1 = "Fiyat aktivitesi";
$exchanges_li_spot_2 = "Likidite derinliği";
$exchanges_li_spot_3 = "Emir defteri yapısı";
$exchanges_li_spot_4 = "İşlem hacmi";
$exchanges_li_spot_5 = "Alış-satış (Bid-ask) makası davranışı";
$exchanges_li_spot_6 = "Piyasa dengesizlik koşulları";
$exchanges_h2_deriv = "Türev Piyasaları";
$exchanges_p_deriv_1 = "Kripto para türevleri, daha geniş dijital varlık ekosisteminde giderek daha önemli bir rol oynamaktadır.";
$exchanges_p_deriv_2 = "Vadeli işlemler, sürekli (perpetual) kontratlar, opsiyonlar ve kaldıraçlı alım satım aktivitesi; piyasa duyarlılığını, volatilite koşullarını ve yönsel momentumu etkileyebilir.";
$exchanges_p_deriv_3 = "Analitik altyapı, daha geniş piyasa koşullarını değerlendirirken türevlerle ilgili bilgileri inceleyebilir.";
$exchanges_h2_liquidity = "Likidite Analizi";
$exchanges_p_liq_1 = "Likidite, piyasa istikrarını ve yürütme kalitesini etkileyen en önemli faktörlerden biri olmaya devam etmektedir.";
$exchanges_p_liq_2 = "$site_name, şunları belirlemek amacıyla birden fazla alım satım mekanındaki likidite koşullarını analiz edebilir:";
$exchanges_li_liq_1 = "Likidite yoğunlaşması";
$exchanges_li_liq_2 = "Ani likidite çekilmeleri";
$exchanges_li_liq_3 = "Emir defteri baskısı";
$exchanges_li_liq_4 = "Piyasa dengesizlik olayları";
$exchanges_li_liq_5 = "Anormal ticaret davranışı";
$exchanges_h2_availability = "Borsa Kullanılabilirliği";
$exchanges_p_avail_1 = "Borsa kullanılabilirliği coğrafi konuma, yargı alanına, hesap uygunluğuna, düzenleyici gereksinimlere ve teknik sınırlamalara bağlı olarak değişebilir.";
$exchanges_p_avail_2 = "Belirli borsalar veya hizmetler tüm kullanıcılara açık olmayabilir ve kendi kısıtlamalarını, doğrulama gereksinimlerini, ücretlerini ve çalışma politikalarını uygulayabilir.";
$exchanges_h2_third = "Üçüncü Taraf Platformları";
$exchanges_p_third_1 = "Borsalara, likidite sağlayıcılara, aracı kurumlara, saklamacılara veya piyasa sağlayıcılarına yapılan her türlü atıf yalnızca bilgilendirme amacıyla yapılır.";
$exchanges_p_third_2 = "$site_name; üçüncü taraf borsaların mülkiyetine sahip değildir, bunları işletmez, kontrol etmez veya hizmetlerini garanti etmez.";
$exchanges_p_third_3 = "Kullanıcılar kullanmadan önce herhangi bir borsayı, alım satım yerini veya dijital varlık hizmetini değerlendirmekten sorumludur.";
$exchanges_h2_monitoring = "Sürekli Piyasa İzleme";
$exchanges_p_mon_1 = "Kripto para piyasaları genellikle günün yirmi dört saati, haftanın yedi günü kesintisiz olarak çalışır.";
$exchanges_p_mon_2 = "Piyasa yapısı geliştikçe yeni borsalar ortaya çıkar, likidite yer değiştirir ve alım satım faaliyetleri değişir.";
$exchanges_p_mon_3 = "$site_name, dijital varlık ekosisteminin geniş analitik kapsamı aracılığıyla değişen piyasa koşullarına ilişkin farkındalığı sürekli olarak korumayı amaçlar.";

// ==========================================
// RISK WARNING PAGE
// ==========================================
$page_title_risk_warning = "Risk Uyarısı | $site_name";
$page_description_risk_warning = "Piyasa volatilitesi, yürütme riski ve düzenleyici hususlar dahil olmak üzere $site_name ile otomatik kripto ticaretinin risklerini anlayın.";
$risk_warning_breadcrumb_name = "Risk Uyarısı";
$risk_warning_title = "Risk Uyarısı";
$risk_warning_intro = "Riskleri anlamak, kendine güvenerek işlem yapmanın ilk adımıdır.";

$risk_warning_ai_heading = "Yapay Zeka Sistemimiz Riski Yönetmeye Nasıl Yardımcı Olur:";
$risk_warning_ai_1 = "<strong>Algoritmik Verimlilik ve Duygusuz İşlem:</strong> Gelişmiş algoritmalar, işlemleri en uygun anlarda objektif olarak gerçekleştirmek için piyasa sinyallerini analiz eder.";
$risk_warning_ai_2 = "<strong>Veri Odaklı Stratejiler:</strong> Stratejiler tahmine değil, doğrulanmış piyasa modellerine ve gerçek zamanlı analizlere dayanır.";
$risk_warning_ai_3 = "<strong>Esnek Ayarlar ve Tam Kontrol:</strong> Risk parametrelerinizi istediğiniz zaman ayarlayın. Hiçbir gizli ücret ve kısıtlama olmayan para çekme işlemleri ile kontrol panelinizdeki tüm bakiyeleri ve işlemleri şeffaf bir şekilde takip edin.";

$risk_warning_disclaimer = "<strong>Sorumluluk Reddi:</strong> Ticaret her zaman risk taşır. Otomatik sistemler (yapay zeka dahil) kar garanti etmez, yazılım hataları veya beklenmedik piyasa olayları nedeniyle başarısız olabilir ve kullanıcının izlemesini gerektirir. Geçmiş performans, gelecekteki sonuçların göstergesi değildir. Bu platform tamamen bilgilendirme ve pazarlama amaçlıdır ve finansal tavsiye sağlamaz.";

$risk_warning_s1_heading = "1. Genel ve Kripto Para Piyasası Riskleri";
$risk_warning_s1_intro = "Kripto paralar, çoğu yargı alanında minimum düzenleyici gözetimle 7/24 çalışan, oldukça değişken, spekülatif varlıklardır.";
$risk_warning_s1_1 = "Değerler kısa süreler içinde dramatik bir şekilde dalgalanabilir ve yatırılan sermayenin tamamen kaybına yol açabilir.";
$risk_warning_s1_2 = "Piyasa değerleri; düzenleyici güncellemeler, teknik gelişmeler, güvenlik ihlalleri veya daha geniş makroekonomik olaylardan büyük ölçüde etkilenebilir.";
$risk_warning_s1_3 = "Bazı varlıklar tüm değerini tamamen kaybedebilir. Sadece kaybetmeyi göze alabileceğiniz fonlarla yatırım yapın.";

$risk_warning_s2_heading = "2. Yürütme, Likidite ve Kaldıraç Riskleri";
$risk_warning_s2_1 = "<strong>Piyasa Volatilitesi ve Likidite:</strong> Aşırı fiyat hareketleri (günlük %10–20+) veya düşük likidite (özellikle daha küçük coinlerde) gecikmelere, platform kesintilerine ve ciddi yürütme kaymalarına yol açabilir. Zarar durdur (stop-loss) emirleri, aşırı koşullar altında kayıp sınırlarını garanti edemez.";
$risk_warning_s2_2 = "<strong>Kaldıraç ve Marjin Riskleri:</strong> Kaldıraçlı ürünler hem kazançları hem de kayıpları artırır, bu da ilk yatırdığınızdan daha fazlasını kaybedebileceğiniz anlamına gelir. Perakende yatırımcı hesaplarının yaklaşık %70-80'i kaldıraçlı ürünlerde işlem yaparken para kaybetmektedir.";

$risk_warning_s3_heading = "3. Teknik, Siber Güvenlik ve Üçüncü Taraf Riskleri";
$risk_warning_s3_1 = "<strong>Teknik Faktörler:</strong> Çevrimiçi ticaret doğası gereği internet kesintileri, donanım/yazılım hataları ve hizmetin kullanılamaması risklerini içerir.";
$risk_warning_s3_2 = "<strong>Siber Güvenlik:</strong> Kripto para hesapları genellikle kimlik avı, kötü amaçlı yazılım ve hack'lerin hedefidir. İşlemler geri döndürülemez; kimlik bilgilerinizin tehlikeye girmesi kalıcı kayıplara neden olabilir.";
$risk_warning_s3_3 = "<strong>Üçüncü Taraf Platformlar:</strong> Bu web sitesi kullanıcıları üçüncü taraf platformlara bağlayabilir. Onların güvenliğini, operasyonlarını veya ödeme güçlerini kontrol etmiyor, desteklemiyor veya garanti etmiyoruz. Harici platformlara fon yatırmadan önce her zaman kendi durum tespitinizi yapın.";

$risk_warning_s4_heading = "4. Düzenleyici, Vergi ve Son Hükümler";
$risk_warning_s4_1 = "<strong>Yasal Uyumluluk ve Vergiler:</strong> Düzenleyici çerçeveler geniş ölçüde değişir ve hızla gelişir. Kullanıcılar, ticari faaliyetlerinin yerel yasalara uymasını sağlamaktan ve kendi vergi yükümlülüklerini yerine getirmekten tamamen sorumludur.";
$risk_warning_s4_2 = "<strong>Kar Garantisi Yoktur:</strong> \"Güvenli\" veya risksiz kripto ticareti yoktur. Verilen tüm getiri rakamları veya performans örnekleri tamamen varsayımsaldır.";
$risk_warning_s4_3 = "<strong>Uygunluk:</strong> Riskleri tam olarak anlamıyorsanız, temel fonlara güveniyorsanız veya borç parayla işlem yapıyorsanız, kripto ticareti sizin için uygun değildir. Emin değilseniz bağımsız, lisanslı bir finansal danışmana danışın.";

$risk_warning_contact = "<strong>İletişim:</strong> Bu beyanla ilgili herhangi bir sorunuz varsa veya soru göndermek istiyorsanız, lütfen web sitemizdeki iletişim formu aracılığıyla resmi müşteri destek ekibimize ulaşın.";
$footer_risk_warning = "Risk Uyarısı";

$lang_loaded = true;

?>
