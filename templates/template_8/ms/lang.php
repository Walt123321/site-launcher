<?php
require __DIR__ . '/../lang.php';
$site_lang = 'ms-MY';
$form_language = 'ms'; // matches this page's own language, not the offer's global default

// ============================================================
// MS TRANSLATION OVERRIDES
// Identity/config vars ($site_name, $site_slug, $site_domain, $site_url, $app_price, $app_currency, $site_lang, $country_name, $country_flag_code, $privacy_last_update, $rating_value, $rating_count, $review_count, $form_country, $form_language, $form_phone_country, $form_only_countries, $review_1_author, $review_2_author, $review_3_author, $review_4_author, $quiz_consultant_name) are
// intentionally NOT overridden -- they stay exactly as inherited from the
// root lang.php.
// ============================================================

// Brand / Platform Variables

// Geo-language stats bar fallback content (used by the language-folder pages'
// own "stats" section; the fr/de/it/nl folders override these with native
// translations, the other 19 folders inherit this English fallback)
$stat_1_value = "4J+";
$stat_1_label = "Pengguna Berdaftar";
$stat_2_value = "98+";
$stat_2_label = "Negara Disokong";
$stat_3_value = "65+";
$stat_3_label = "Mata Wang Tersedia";
$stat_4_value = "24/7";
$stat_4_label = "Akses Transaksi";
$stat_5_value = "256-bit";
$stat_5_label = "Standard Penyulitan";
$stat_6_value = "$500J+";
$stat_6_label = "Jumlah Deposit Pelanggan";

// Keitaro Form Integration Variables (defaults -- overwritten per-launch by
// generate_lang_files(); must stay valid on their own since nothing else in
// this file replaces them for a page that's ever served un-generated)

// 4 Verified Reviews (TZ Item 8)
$review_1_role = "Perancis";
$review_1_text = "Saya memulakan dengan €500 hanya untuk melihat bagaimana platform ini berfungsi. Selepas kira-kira tiga minggu, baki saya telah berkembang kepada kira-kira €1120. Antara muka mudah digunakan, dan pandangan pasaran membantu saya membuat keputusan yang lebih baik.";
$review_1_badge = "Pulangan Dilaporkan +18.4%";

$review_2_role = "Jerman";
$review_2_text = "Saya telah mencuba beberapa platform dagangan sebelum ini, tetapi ini adalah kegemaran saya setakat ini. Ia mudah dinavigasi, alatannya benar-benar berguna, dan saya mempunyai pengalaman yang sangat positif secara keseluruhannya.";
$review_2_badge = "Pulangan Dilaporkan +19.1%";

$review_3_role = "Itali";
$review_3_text = "Apa yang paling mengagumkan saya ialah betapa intuitifnya semuanya terasa. Pendaftaran adalah pantas, papan pemuka tersusun dengan baik, dan platform ini telah menjadikan dagangan jauh lebih mudah untuk saya.";
$review_3_badge = "Pulangan Dilaporkan +16.8%";

$review_4_role = "Belanda";
$review_4_text = "Saya tidak mempunyai pengalaman dagangan sebelum ini, jadi saya memulakan dengan €750. Dalam masa sebulan, saya mencapai lebih sedikit daripada €1,765 dengan mengikuti alatan dan sumber pembelajaran. Ia merupakan cara yang bagus untuk membina keyakinan.";
$review_4_badge = "Pulangan Dilaporkan +18.0%";

$review_verified_label = "Pengguna Disahkan";
$reviews_section_title = "Ulasan mengenai $site_name";
$reviews_badge_trustworthy = "Boleh Dipercayai";
$reviews_summary_rating = "4.7";
$reviews_summary_count = "189";
$reviews_summary_desc = "Platform dagangan yang berkuasa dan intuitif dengan alatan automatik yang teguh, analitik masa nyata, dan sumber pembelajaran yang komprehensif.";

// CONSULTANT / CHAT QUIZ (TZ Item 13)
$quiz_consultant_role = "Perunding Dagangan";
$quiz_text_welcome = "Hai! Saya pembantu dagangan peribadi anda. Jawab kuiz 30 saat untuk mengetahui bagaimana dagangan AI automatik boleh berfungsi untuk anda.";
$quiz_text_q1 = "Adakah anda pernah berdagang mata wang kripto atau pasaran kewangan sebelum ini?";
$quiz_text_a1_yes = "Ya, saya mempunyai sedikit pengalaman";
$quiz_text_a1_no = "Tidak, saya seorang yang benar-benar baharu";
$quiz_text_q2 = "Apakah matlamat kewangan utama anda dengan dagangan dalam talian?";
$quiz_text_q3 = "Adakah anda lebih suka AI melaksanakan dagangan secara automatik, atau berdagang secara manual?";
$quiz_text_a3_yes = "Dagangan AI Automatik (Disyorkan)";
$quiz_text_a3_no = "Dagangan Manual dengan Isyarat AI";
$quiz_text_q4 = "Apakah bajet awal anda untuk diperuntukkan bagi dagangan?";
$quiz_text_a4_1 = "$250 - $500";
$quiz_text_a4_2 = "$500 - $1,500";
$quiz_text_a4_3 = "$1,500+";
$quiz_text_q5 = "Adakah anda bersedia untuk mencipta akaun anda dan menerima akses penuh platform?";
$quiz_text_a5_yes = "Ya, mari kita mulakan!";
$quiz_text_a5_no = "Saya ingin lebih banyak maklumat";
$quiz_text_loader = "Menganalisis respons anda dan menyediakan parameter dagangan optimum...";
$quiz_text_final_ttl = "Persediaan Akaun Anda Sudah Sedia!";
$quiz_text_processing = "Mengkonfigurasi akses platform anda...";
$quiz_text_typing = "sedang menaip...";
$quiz_placeholder_fname = "Nama Pertama";
$quiz_placeholder_lname = "Nama Keluarga";
$quiz_placeholder_email = "Alamat E-mel";
$quiz_placeholder_phone = "Nombor Telefon";
$quiz_btn_submit = "Lengkapkan Pendaftaran";

// METADATA (TZ Item 10)
$home_meta_title = "$site_name — Platform Dagangan | Laman Rasmi";
$home_meta_description = "Laman web rasmi $site_name menawarkan platform dagangan mata wang kripto yang selamat dengan alatan dagangan termaju, pandangan pasaran masa nyata, dan pengalaman mesra pengguna untuk peniaga.";

// NAVIGATION & HEADER (TZ Item 3, 12)
$nav_about = "Tentang Kami";
$nav_how = "Cara Ia Berfungsi";
$nav_why = "Mengapa Berdagang";
$nav_faq = "Soalan Lazim";
$nav_contacts = "Hubungi Kami";
$nav_signin = "Log Masuk";
$nav_signup = "Daftar";

$mobnav_home = "Utama";
$mobnav_product = "Produk";
$mobnav_offer = "Tawaran";
$mobnav_contact = "Hubungi Kami";
$mobnav_faq = "Soalan Lazim";
$mobnav_signup = "Daftar";

// HERO SECTION
$hero_h1 = "Platform <mark>$site_name</mark>";
$hero_text = "Platform dagangan mata wang kripto rasmi $site_name";

// LEAD FORM
$form_fname_placeholder = "Nama Pertama";
$form_lname_placeholder = "Nama Keluarga";
$form_email_placeholder = "E-mel";
$form_phone_placeholder = "Nombor Telefon";
$form_btn_submit = "Daftar";
$form_disclaimer_text = "Dengan memasukkan maklumat peribadi anda dan mengklik butang, anda menerima <a class='link link-primary' href='privacy.php'>Dasar Privasi</a> dan <a class='link link-primary' href='conditions.php'>Terma Penggunaan</a> laman web ini.";

// SECURITY BADGES
$badge_ssl = "SSL 256-bit";
$badge_payments = "Pembayaran Selamat";
$badge_2fa = "2FA";
$badge_cold_storage = "98% Cold Storage";
$badge_regulated = "Dikawal Selia";
$badge_traders_trust = "Lebih 4J Peniaga Mempercayai";

// SAFE SECTION (Vos fonds sont en sécurité)
$safe_title = "<mark>Dana Anda Selamat</mark> dengan $site_name";
$safe_desc = "Penyulitan gred perbankan, pemproses pembayaran disahkan, dan 98% cold storage — wang anda dilindungi di setiap langkah.";

$safe_item1_title = "Penyedia Pembayaran Disahkan";
$safe_item1_desc = "Pembayaran diproses secara eksklusif melalui penyedia bertauliah yang mematuhi standard keselamatan antarabangsa. Maklumat kad anda tidak pernah disimpan di platform kami.";
$safe_item1_badge = "Pembayaran Selamat";

$safe_item2_title = "Pengesahan Dua Faktor (2FA)";
$safe_item2_desc = "Tambahkan lapisan perlindungan tambahan kepada akaun anda dengan kata laluan sekali guna berasaskan masa melalui SMS atau Google Authenticator.";
$safe_item2_badge = "2FA";

$safe_item3_title = "98% Cold Storage";
$safe_item3_desc = "Majoriti besar aset digital disimpan dalam bilik kebal cold storage luar talian yang diedarkan secara geografi dan dilindungi oleh protokol tandatangan berbilang.";
$safe_item3_badge = "98% Cold Storage";

$safe_item4_title = "Pelaksanaan Dikawal Selia";
$safe_item4_desc = "Kami bekerjasama dengan firma broker dan penyedia kecairan yang dikawal selia di seluruh dunia untuk mengekalkan pematuhan, ketelusan, dan pelaksanaan gred teratas.";
$safe_item4_badge = "Dikawal Selia";

$safe_item5_title = "Penyulitan SSL 256-bit";
$safe_item5_desc = "Semua penghantaran data antara pelayar anda dan pelayan kami disulitkan dengan protokol kriptografi gred tentera TLS 1.3.";
$safe_item5_badge = "SSL 256-bit";

// FREE GUIDE CTA BANNER (CTA 2)
$guide_cta_title = "Dapatkan Panduan Percuma";
$guide_cta_subtitle = "«10 Kesilapan Untuk Dielakkan dalam Dagangan Kripto»";
$guide_cta_btn = "Tuntut Panduan Percuma";

// TRUST SECTION (Pourquoi les investisseurs font confiance à Ciel Cryptance)
$trust_title = "Mengapa Peniaga Mempercayai <mark>$site_name</mark>";
$trust_desc = "Lebih 4,000,000 pengguna di seluruh dunia memilih $site_name kerana kebolehpercayaannya, automasi yang berkuasa, dan persekitaran yang telus.";
$trust_subtitle = "Faedah Utama untuk Peniaga Moden:";

$trust_item1_title = "Akses Pasaran Global";
$trust_item1_desc = "Berdagang lebih 100 mata wang kripto, pasangan Forex, saham, dan komoditi dari satu papan pemuka dagangan bersepadu.";

$trust_item2_title = "Perlindungan Dana Yang Teguh";
$trust_item2_desc = "Akaun berasingan, semakan biometrik berterusan, dan keselamatan siber canggih melindungi modal anda 24/7.";

$trust_item3_title = "Sifar Yuran Tersembunyi";
$trust_item3_desc = "Nikmati penetapan harga yang jelas seperti kristal. Pendaftaran percuma, deposit percuma, tiada yuran pengurusan platform, dan permintaan pengeluaran segera.";

$trust_item4_title = "Sokongan Responsif";
$trust_item4_desc = "Pasukan sokongan berdedikasi kami tersedia melalui sembang langsung, telefon, atau e-mel untuk membantu dengan sebarang soalan atau pertanyaan teknikal.";

$trust_market_info_text = "Maklumat lanjut mengenai keadaan pasaran pada 2026";
$trust_market_info_btn = "Mengapa Berdagang";

// START TRADING CTA (CTA 3)
$start_cta_title = "Mula Berdagang dengan <span data-local-currency='$app_price'>$app_price $app_currency</span>!";
$start_cta_desc = "Bersedia untuk mencuba $site_name? Daftar sekarang dan sertai komuniti pelabur dan peniaga kripto yang semakin berkembang.";
$start_cta_btn = "Daftar";

// FAQ SECTION
$faq_title = "Soalan Lazim $site_name <mark>(FAQ)</mark>";
$faq_q1 = "Apakah $site_name dan bagaimana ia berfungsi?";
$faq_a1 = "Ia adalah platform dagangan berkuasa AI yang bekerja untuk anda 24 jam sehari. Sistem ini menganalisis pasaran, mengesan peluang, dan melaksanakan dagangan secara automatik. Anda boleh membiarkan AI menguruskan segala-galanya atau bertukar ke mod manual untuk berdagang mengikut syarat anda sendiri pada bila-bila masa.";

$faq_q2 = "Sejauh manakah keselamatan wang dan data saya di $site_name?";
$faq_a2 = "Keselamatan dibina ke dalam setiap lapisan platform. Data peribadi dilindungi menggunakan standard penyulitan yang diiktiraf antarabangsa dan pengesahan akaun termaju. Semua transaksi kewangan diproses secara eksklusif melalui penyedia pembayaran yang dipercayai dan disahkan. Semua aktiviti dagangan anda dapat dilihat secara masa nyata, jadi anda sentiasa tahu dengan tepat apa yang berlaku dengan dana anda.";

$faq_q3 = "Bolehkah saya mengeluarkan keuntungan saya pada bila-bila masa?";
$faq_a3 = "Ya. Tiada sekatan mengenai bila atau seberapa kerap anda boleh mengeluarkan dana anda daripada $site_name. Baki akaun anda kekal di bawah kawalan penuh anda pada setiap masa. Pengeluaran diproses melalui penyedia pembayaran yang sama yang boleh dipercayai yang digunakan untuk deposit, menjamin pemindahan yang pantas dan selamat.";

$faq_q4 = "Adakah terdapat sebarang yuran tersembunyi atau caj tambahan?";
$faq_a4 = "Tiada. $site_name tidak mengenakan yuran langganan, yuran pendaftaran, atau kos tersembunyi. Satu-satunya jumlah yang diperlukan untuk bermula ialah deposit minimum <span data-local-currency='$app_price'>$app_price $app_currency</span>, yang dikreditkan terus ke akaun dagangan anda. Semua kaedah pembayaran utama diterima, termasuk kad kredit, pemindahan wayar bank, dan PayPal.";

$faq_q5 = "Adakah pengalaman dagangan sebelumnya diperlukan untuk bermula?";
$faq_a5 = "Sama sekali tidak. $site_name direka untuk kedua-dua pemula lengkap dan peniaga berpengalaman. Dalam mod automatik sepenuhnya, AI menguruskan segala-galanya untuk anda, termasuk analisis pasaran, penjanaan isyarat, dan pelaksanaan pesanan. Jika anda lebih suka kekal dalam kawalan, anda boleh bertukar ke mod manual pada bila-bila masa.";

$faq_cta_text = "Mempunyai soalan? Semak Soalan Lazim kami atau hubungi pasukan sokongan kami.";
$faq_cta_faq_btn = "Soalan Lazim";
$faq_cta_contact_btn = "Hubungi Kami";

// NEW TRADER LEAD SECTION (Bottom form)
$lead_title = "Baharu dalam Dagangan?";
$lead_p1 = "Selepas mendaftar, anda akan menerima panduan percuma kami <mark class='text-on-surface-tertiary-accent'>«10 Kesilapan Untuk Dielakkan dalam Dagangan Mata Wang Kripto»</mark>. Ia mengandungi nasihat mudah daripada penganalisis kami yang paling berpengalaman untuk membantu anda mengelakkan perangkap biasa.";
$lead_p2 = "Cuma masukkan maklumat anda dalam borang pendaftaran dan kami akan menghantarnya terus ke peti masuk anda. Ramai peniaga telah bermula dengan panduan ini dan mendapatinya sangat berharga untuk membina keyakinan dalam dagangan awal mereka.";
$lead_form_heading = "Pasaran tidak menunggu — mulakan hari ini!";

// FEATURES TABLE (Fonctionnalités principales)
$features_title = "<mark>Ciri Utama</mark> Platform Dagangan $site_name";
$feature_1_title = "🤖 Teknologi Platform";
$feature_1_val = "Enjin dagangan termaju berkuasa AI";
$feature_2_title = "💳 Kaedah Pembiayaan";
$feature_2_val = "Kad kredit utama, pemindahan wayar bank, PayPal";
$feature_3_title = "📱 Akses Platform";
$feature_3_val = "Keserasian pelbagai peranti (Desktop, Tablet, Mudah Alih)";
$feature_4_title = "🚀 Kadar Kejayaan";
$feature_4_val = "85% ketepatan analitikal";
$feature_5_title = "📊 Instrumen Dagangan";
$feature_5_val = "Mata wang kripto, Forex, Saham, Komoditi, Logam Berharga, CFD dan banyak lagi…";
$feature_6_title = "✍️ Persediaan Akaun";
$feature_6_val = "Pendaftaran pantas dan mudah";
$feature_7_title = "📞 Sokongan Pelanggan";
$feature_7_val = "Sokongan berdedikasi profesional 24/7";

// FOOTER DISCLAIMER (TZ Item 21)
$footer_disclaimer_p1 = "$site_name menyediakan kandungan pendidikan dan maklumat am mengenai pasaran kewangan, dagangan dalam talian, dan aset digital. Semua bahan yang diterbitkan di laman web ini, termasuk artikel, carta, data harga, pandangan pasaran, dan analisis, bertujuan untuk tujuan maklumat sahaja dan tidak harus dianggap sebagai nasihat kewangan, pelaburan, atau perundangan. Walaupun kami berusaha untuk memastikan kandungan kami tepat dan terkini, kami tidak menjamin kesempurnaan atau kebolehpercayaannya dan tidak menerima sebarang liabiliti bagi sebarang kerugian yang timbul daripada penggunaan laman web ini.";
$footer_disclaimer_p2 = "Berdagang mata wang kripto, Forex, CFD, saham, dan instrumen kewangan lain melibatkan risiko yang ketara dan mungkin tidak sesuai untuk setiap pelabur. Keadaan pasaran boleh berubah dengan cepat, dan prestasi lepas tidak menjamin hasil masa depan. Sebelum membuat sebarang keputusan pelaburan, nilai dengan teliti keadaan kewangan dan toleransi risiko anda, dan dapatkan nasihat profesional bebas jika diperlukan. Hanya laburkan wang yang anda mampu untuk hilang.";
$footer_copyright = "© " . date('Y') . " $site_name. All rights reserved.";

// FOOTER NAV LINKS
$footnav_about = "Tentang Kami";
$footnav_how = "Cara Ia Berfungsi";
$footnav_why = "Mengapa Berdagang";
$footnav_faq = "Soalan Lazim";
$footnav_contacts = "Hubungi Kami";
$footnav_privacy = "Dasar Privasi";
$footnav_risk = "Amaran Risiko";
$footnav_terms = "Terma Penggunaan";
$footnav_product = "Produk";
$footnav_offer = "Tawaran";

// ABOUT PAGE VARIABLES
$about_meta_title = "Tentang Kami | Laman Rasmi $site_name";
$about_meta_description = "Ketahui lebih lanjut mengenai $site_name, misi kami untuk mendemokrasikan pasaran kewangan melalui automasi AI, dan rangka kerja keselamatan gred institusi kami.";
$about_h1 = "Tentang <mark>$site_name</mark>";
$about_lead = "Memperkasakan peniaga di seluruh dunia melalui kecerdasan buatan, pelaksanaan algoritma, dan keselamatan perusahaan.";
$about_mission_title = "Misi Kami";
$about_mission_text = "Di $site_name, kami percaya teknologi dagangan canggih harus boleh diakses oleh semua orang, bukan hanya dana institusi. Platform kami merapatkan jurang antara pelabur runcit harian dan algoritma dagangan pengiraan canggih.";
$about_tech_title = "Teknologi Terkini";
$about_tech_text = "Sistem kami menilai lebih 100,000 titik data setiap saat merentasi pasaran kripto, Forex, dan ekuiti global. Dengan menggabungkan model pembelajaran mesin ramalan dengan pelaksanaan sub-milisaat, kami memberikan gelinciran yang sangat rendah dan prestasi yang boleh dipercayai.";
$about_sec_title = "Keselamatan & Pematuhan Kawal Selia";
$about_sec_text = "Kepercayaan pelanggan adalah asas teras ekosistem kami. Kami melaksanakan penyulitan TLS 256-bit, protokol biometrik dan 2FA yang ketat, dan menyimpan 98% daripada semua rizab digital dalam bilik kebal cold storage.";

// PRODUCT PAGE VARIABLES
$product_meta_title = "Alatan Dagangan & Produk | $site_name";
$product_meta_description = "Terokai enjin dagangan dan keupayaan AI yang menggerakkan $site_name. Pelaksanaan pesanan automatik, analitik ramalan, dan kawalan intuitif.";
$product_h1 = "<mark>Produk & Ciri</mark> Platform";
$product_lead = "Temui alatan pintar yang direka untuk memberi anda kelebihan daya saing merentasi pasaran mata wang kripto dan kewangan moden.";
$product_f1_title = "Enjin Dagangan Automatik AI";
$product_f1_text = "Biarkan algoritma neural menganalisis trend pasaran dan melaksanakan dagangan optimum sepanjang masa tanpa emosi.";
$product_f2_title = "Analitik Pasaran Masa Nyata";
$product_f2_text = "Kedalaman buku pesanan langsung, pengecaman corak automatik, dan penjejakan sentimen institusi di hujung jari anda.";
$product_f3_title = "Suit Pengurusan Risiko";
$product_f3_text = "Had stop-loss dan take-profit terperinci, kawalan pendedahan harian maksimum, dan keupayaan lindung nilai automatik.";
$product_f4_title = "Kebolehcapaian Merentasi Platform";
$product_f4_text = "Berdagang dengan lancar merentasi pelayar desktop, tablet, dan telefon pintar dengan sifar kependaman dan penyegerakan awan penuh.";

// OFFER PAGE VARIABLES
$offer_meta_title = "Tawaran Istimewa & Syarat | $site_name";
$offer_meta_description = "Temui tawaran pendaftaran eksklusif dengan $site_name. Bermula dengan deposit awal $app_price $app_currency dan terima sokongan berdedikasi.";
$offer_h1 = "<mark>Tawaran Dagangan</mark> Eksklusif";
$offer_lead = "Mulakan perjalanan dagangan anda hari ini dengan kelebihan daya saing dan pengenalan akaun berdedikasi satu lawan satu.";
$offer_step1_title = "1. Pendaftaran Pantas";
$offer_step1_text = "Isikan borang pendaftaran ringkas kami untuk menjamin akses ke akaun peribadi anda dalam masa kurang daripada 2 minit.";
$offer_step2_title = "2. Biayai Baki Dagangan Anda";
$offer_step2_text = "Deposit minimum standard $app_price $app_currency menggunakan kad kredit, pemindahan bank, atau e-dompet. 100% dana anda terus masuk ke dalam baki dagangan anda.";
$offer_step3_title = "3. Aktifkan Dagangan AI";
$offer_step3_text = "Pilih mod automatik atau berbantuan, pilih pasangan aset pilihan anda, dan mula berdagang dengan keupayaan platform penuh.";

// CONTACTS PAGE VARIABLES
$contacts_meta_title = "Hubungi Sokongan | $site_name";
$contacts_meta_description = "Hubungi pasukan $site_name. Sokongan pelanggan 24/7, bantuan teknikal, dan pertanyaan akaun.";
$contacts_h1 = "Hubungi <mark>Sokongan Pelanggan</mark>";
$contacts_lead = "Pasukan sokongan antarabangsa berdedikasi kami sedia membantu anda 24 jam sehari, 7 hari seminggu.";
$contacts_info_title = "Pertanyaan Rasmi";
$contacts_info_text = "Untuk pertanyaan am, pengesahan akaun, atau sokongan teknikal, hubungi kami melalui saluran komunikasi kami yang disahkan.";
$contacts_support_hours = "Sokongan Sembang Langsung & E-mel 24/7";

// FAQ PAGE VARIABLES
$faq_meta_title = "Soalan Lazim & Pangkalan Pengetahuan | $site_name";
$faq_meta_description = "Cari jawapan kepada soalan lazim mengenai akaun $site_name, deposit, pengeluaran, dan dagangan AI automatik.";
$faq_h1 = "<mark>Soalan Lazim</mark> $site_name";
$faq_lead = "Jawapan yang jelas kepada soalan paling biasa mengenai keselamatan platform, pengeluaran, dan dagangan automatik.";

// PRIVACY POLICY PAGE VARIABLES
$privacy_meta_title = "Dasar Privasi | $site_name";
$privacy_meta_description = "Baca Dasar Privasi komprehensif kami untuk memahami bagaimana $site_name mengumpul, melindungi, dan menguruskan data peribadi anda.";
$privacy_h1 = "Dasar Privasi";
$privacy_p1 = "Dasar Privasi ini menerangkan bagaimana $site_name mengumpul, menggunakan, dan mendedahkan maklumat apabila anda melawat laman web kami, mendaftar akaun, atau menggunakan perisian dagangan kami.";
$privacy_sec1_title = "1. Pengumpulan & Penggunaan Data";
$privacy_sec1_text = "Kami mengumpul maklumat hubungan yang diperlukan (nama, alamat e-mel, nombor telefon) untuk mewujudkan akaun anda, menghubungkan anda dengan rakan kongsi broker yang disahkan, dan mengesahkan identiti mematuhi standard KYC dan AML antarabangsa.";
$privacy_sec2_title = "2. Kuki & Teknologi Penjejakan";
$privacy_sec2_text = "Kami menggunakan kuki penting dan analitikal untuk meningkatkan prestasi laman web, memperibadikan pengalaman pengguna, dan memantau corak trafik. Anda boleh melaraskan tetapan kuki pelayar anda pada bila-bila masa.";
$privacy_sec3_title = "3. Keselamatan Data & Hak GDPR";
$privacy_sec3_text = "Semua data pengguna disulitkan semasa transit dan semasa berehat menggunakan protokol kriptografi gred perbankan. Di bawah Peraturan Perlindungan Data Am (GDPR), pengguna mempunyai hak untuk meminta akses, pembetulan, atau pemadaman rekod peribadi mereka.";

// TERMS OF USE PAGE VARIABLES
$terms_meta_title = "Terma Penggunaan | $site_name";
$terms_meta_description = "Semak Terma dan Syarat rasmi yang mengawal penggunaan platform $site_name dan perkhidmatan yang berkaitan.";
$terms_h1 = "Terma Penggunaan";
$terms_p1 = "Sila baca Terma Penggunaan ini dengan teliti sebelum mengakses atau menggunakan $site_name. Dengan mendaftar akaun, anda bersetuju untuk terikat dengan peruntukan ini.";
$terms_sec1_title = "1. Kelayakan Pengguna";
$terms_sec1_text = "Anda mestilah berumur sekurang-kurangnya 18 tahun dan bermastautin di bidang kuasa di mana dagangan dalam talian dan interaksi mata wang kripto dibenarkan secara sah. Anda bertanggungjawab untuk memastikan pematuhan dengan undang-undang tempatan anda.";
$terms_sec2_title = "2. Pendaftaran Akaun & Keselamatan";
$terms_sec2_text = "Anda bersetuju untuk memberikan maklumat yang benar, tepat, dan lengkap semasa pendaftaran. Anda bertanggungjawab secara khusus untuk mengekalkan kerahsiaan kelayakan log masuk anda.";
$terms_sec3_title = "3. Had Liabiliti";
$terms_sec3_text = "$site_name menyediakan perkhidmatan maklumat dan penghalaan perisian. Kami tidak memberikan nasihat kewangan diperibadikan atau menjamin keuntungan dagangan. Berdagang pasaran kewangan membawa risiko modal yang wujud.";

// RISK WARNING PAGE VARIABLES (TZ Item 19: Exact 4 sections)
$risk_meta_title = "Amaran Risiko & Notis Undang-undang | $site_name";
$risk_meta_description = "Pendedahan risiko penting mengenai dagangan CFD, Forex, dan mata wang kripto di $site_name. Baca dengan teliti sebelum melabur.";
$risk_h1 = "Amaran Risiko";
$risk_sec1_title = "1. Notis Pelaburan Berisiko Tinggi & Kemeruapan";
$risk_sec1_text = "Berdagang mata wang kripto, Kontrak untuk Perbezaan (CFD), pertukaran asing (Forex), dan aset kewangan lain melibatkan risiko kerugian yang besar dan tidak sesuai untuk semua pelabur. Pasaran mata wang kripto sangat tidak menentu, dengan harga tertakluk kepada ayunan tajam sebagai tindak balas kepada pengumuman kawal selia, peralihan makroekonomi, atau sentimen pasaran. Anda tidak seharusnya melabur wang yang anda tidak mampu untuk hilang sepenuhnya.";
$risk_sec2_title = "2. Nasihat Kewangan Bebas";
$risk_sec2_text = "Semua bahan, alatan, isyarat algoritma, dan komentar yang disediakan di $site_name bertujuan semata-mata untuk tujuan maklumat, pendidikan, dan pemasaran. Tiada kandungan di laman web ini merupakan nasihat pelaburan, undang-undang, atau kewangan yang diperibadikan. Sebelum melaksanakan sebarang dagangan, anda harus menjalankan penyelidikan bebas atau berunding dengan penasihat kewangan berlesen.";
$risk_sec3_title = "3. Sekatan Kawal Selia & Geografi";
$risk_sec3_text = "Bidang kuasa tertentu menyekat atau melarang dagangan runcit CFD dan mata wang kripto. Adalah tanggungjawab tunggal pengguna untuk mengesahkan sama ada mengakses $site_name dan menggunakan firma broker dagangan rakan kongsi adalah sah di sisi undang-undang di bawah rangka kerja undang-undang tempatan mereka.";
$risk_sec4_title = "4. Teknologi Platform & Pelaksanaan Pasaran";
$risk_sec4_text = "Alatan dagangan automatik, algoritma kecerdasan buatan, dan penunjuk pasaran tidak menjamin keuntungan atau menghapuskan risiko pasaran. Gangguan teknikal, kependaman rangkaian, gangguan sistem, dan kekurangan kecairan pasaran boleh mengakibatkan kelewatan pelaksanaan dagangan atau gelinciran.";

// SIGN UP / LOGIN PAGE VARIABLES
$sign_meta_title = "Pendaftaran / Log Masuk | $site_name";
$sign_meta_description = "Cipta akaun percuma anda di $site_name untuk mengakses alatan dagangan automatik pintar, isyarat pasaran, dan pilihan pembiayaan selamat.";
$sign_h1 = "Daftar di <mark>$site_name</mark>";
$sign_lead = "Sertai ribuan peniaga dan dapatkan akses segera kepada enjin dagangan AI kami.";

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
$hero_form_heading = "Cipta akaun percuma anda";
$hero_form_button = "Daftar";
$form_name_placeholder = "Masukkan nama pertama anda";
$form_surname_placeholder = "Masukkan nama keluarga anda";
$form_disclaimer_prefix = "Dengan memasukkan maklumat peribadi anda dan mengklik butang, anda bersetuju dengan";
$form_privacy_link_label = "Dasar Privasi";
$form_disclaimer_and = "dan";
$form_terms_link_label = "Terma Penggunaan";
$form_disclaimer_of_site = "laman web ini.";

// -- partners strip --
$partners_label = "Dipercayai oleh rakan kongsi terkemuka";

// -- "what is" section --
$whatis_label = "Tentang Platform";
$whatis_title = "Apakah $site_name?";
$whatis_intro = "$site_name ialah platform dagangan dalam talian rasmi, direka untuk menjadikan kripto semudah perbankan dalam talian harian.";
$whatis_icon_1_title = "Analisis Berkuasa AI";
$whatis_icon_1_text = "Algoritma termaju mengendalikan kerumitan pasaran untuk anda.";
$whatis_icon_2_title = "Pelaksanaan Segera";
$whatis_icon_2_text = "Ribuan titik data diproses setiap saat — dagangan tanpa kelewatan.";
$whatis_icon_3_title = "Papan Pemuka Mudah, Intuitif";
$whatis_icon_3_text = "Semak baki dan kedudukan terbuka anda sekali imbas, pada bila-bila masa.";
$whatis_icon_4_title = "Akses Mudah, Tiada Halangan";
$whatis_icon_4_text = "Bermula dengan deposit minimum hanya $app_price $app_currency — tiada yuran tersembunyi.";
$whatis_cta_text = "Ingin tahu lebih lanjut mengenai pasukan dan produk kami?";
$whatis_cta_link = "Tentang Kami";

// -- stats section heading (per-stat label/value already set above) --
$stats_label = "$site_name dalam Angka";
$stats_title = "Angka Yang Bercakap Lebih Kuat Daripada Janji";

// -- key benefits section --
$benefits_label = "Faedah Utama";
$benefits_title = "Faedah Utama $site_name";
$benefit_1_title = "Platform Mesra Pemula";
$benefit_1_text = "Carta intuitif dan panduan langkah demi langkah membantu anda bermula tanpa berasa terharu. Anda boleh berdagang kripto dengan yakin dari hari pertama.";
$benefit_2_title = "Rasmi dan Dikawal Selia";
$benefit_2_text = "$site_name berlesen dan mematuhi peraturan kewangan yang berkenaan. Kami menggunakan penyulitan SSL dan pengesahan dua faktor untuk melindungi setiap akaun.";
$benefit_3_title = "Akses Mudah, Tiada Halangan";
$benefit_3_text = "Dengan deposit minimum hanya $app_price $app_currency, sesiapa sahaja boleh bermula. Tiada pelaburan awal yang besar diperlukan — bermula dengan kecil dan tingkatkan taruhan anda apabila keyakinan anda berkembang.";
$benefit_4_title = "Yuran Telus";
$benefit_4_text = "Anda tidak akan pernah melihat caj tersembunyi. Kami hanya mengenakan yuran transaksi atau pengeluaran minimum di mana berkenaan, jadi anda sentiasa tahu dengan tepat apa yang anda bayar.";
$benefit_5_title = "Akses Dagangan 24/7";
$benefit_5_text = "Berdagang mengikut jadual anda sendiri, siang atau malam. $site_name berfungsi dengan baik pada desktop mahupun mudah alih, jadi anda boleh terus berhubung dengan pasaran di mana sahaja anda berada.";
$benefit_6_title = "Sokongan Pelanggan Tempatan";
$benefit_6_text = "Pasukan sokongan kami tersedia melalui sembang, telefon, atau e-mel. Orang sebenar ada di sini untuk membantu anda dalam bahasa anda, bila-bila masa anda memerlukannya.";
$benefits_trust_title = "Dipercayai oleh Pengguna di Seluruh Dunia";
$benefits_trust_text = "Inilah sebabnya mengapa begitu ramai pengguna kripto mempercayai $site_name. Ribuan peniaga sudah menggunakan $site_name, dan akaun baharu sertai setiap hari.";
$benefits_cta = "Daftar";
$benefits_badge_1 = "SSL 256-bit";
$benefits_badge_2 = "Pembayaran Selamat";
$benefits_badge_3 = "2FA";

// -- security section --
$security_label = "Keselamatan";
$security_title = "Dana Anda Selamat dengan $site_name";
$security_subtitle = "Penyulitan gred perbankan, pembayaran disahkan, dan 98% cold storage — wang anda dilindungi di setiap langkah.";
$security_1_title = "Penyedia Pembayaran Disahkan";
$security_1_text = "Pembayaran diproses secara eksklusif oleh penyedia bertauliah yang memenuhi standard keselamatan antarabangsa. Data pembayaran anda tidak pernah disimpan di pelayan kami.";
$security_2_title = "Penyulitan SSL 256-bit";
$security_2_text = "Semua data yang ditukar antara peranti anda dan platform kami disulitkan dengan TLS 256-bit. Tiada pihak ketiga boleh memintas atau membacanya.";
$security_3_title = "98% Cold Storage";
$security_3_text = "98% aset disimpan dalam dompet luar talian, tanpa sambungan internet. Tiada siapa boleh mengaksesnya dari jauh.";
$security_4_title = "Pengesahan Berbilang Faktor";
$security_4_text = "Hanya anda boleh mengakses akaun anda. Setiap log masuk disahkan oleh langkah kedua yang hanya anda kawal.";
$security_5_title = "Pemantauan Akaun";
$security_5_text = "Setiap log masuk, transaksi, atau perubahan tetapan mencetuskan notifikasi segera, jadi anda sentiasa tahu apa yang berlaku pada akaun anda.";
$security_6_title = "Perlindungan Kata Laluan";
$security_6_text = "Kata laluan disimpan dalam bentuk yang tidak boleh dibaca dan tidak boleh diterbalikkan. Kami secara teknikal tidak mempunyai cara untuk melihat kata laluan anda.";
$security_cta_title = "Dapatkan Panduan Percuma!";
$security_cta_text = "Dapatkan panduan permulaan percuma kami dan mula berdagang hari ini.";
$security_cta_button = "Daftar";
$security_badge_1 = "98% Cold Storage";
$security_badge_2 = "Pembayaran Disahkan";
$security_badge_3 = "Disulitkan";

// -- how it works section --
$how_label = "Cara Ia Berfungsi";
$how_title = "Cara Ia Berfungsi";
$how_1_title = "Daftar";
$how_1_text = "Klik butang \"Buka Akaun\" dan isi borang pendaftaran dengan butiran anda (nama, e-mel, dan nombor telefon). Ia hanya mengambil masa seminit.";
$how_2_title = "Deposit Dana";
$how_2_text = "Seterusnya, biayai akaun anda. Deposit minimum hanya $app_price $app_currency. Anda boleh menggunakan kad kredit/debit, pemindahan bank tempatan, atau e-dompet popular. (Petua: mulakan dengan jumlah yang anda selesa dengannya.)";
$how_3_title = "Mula Berdagang";
$how_3_text = "Sebaik sahaja dana anda berada dalam akaun anda, anda bersedia untuk berdagang. Pilih aset yang anda mahukan (seperti BTC, SOL, atau USDT) dan tentukan strategi anda.";
$how_cta_label = "Cara Ia Berfungsi";
$how_cta_text = "Perlukan lebih banyak maklumat mengenai bagaimana perkhidmatan ini berfungsi?";
$how_cta_link = "Cara Ia Berfungsi";

// -- trust reasons section --
$trust_label = "Mengapa Berdagang Dengan Kami";
$trust_intro = "Sertai ribuan pengguna yang sudah berdagang dengan $site_name.";
$trust_1_title = "Dikawal Selia Sepenuhnya";
$trust_1_text = "$site_name didaftarkan dengan sewajarnya dan mematuhi peraturan kewangan yang berkenaan. Kami beroperasi di bawah peraturan yang ketat untuk memastikan keselamatan anda.";
$trust_2_title = "Keselamatan Termaju";
$trust_2_text = "Semua data dan dana anda disulitkan dan diamankan. Kami menguatkuasakan perlindungan akaun yang ketat melalui penyulitan SSL dan pengesahan dua faktor.";
$trust_3_title = "Operasi Telus";
$trust_3_text = "Kami tidak pernah menyembunyikan yuran kami dan tidak pernah menambah peraturan mengejutkan. Sebelum setiap transaksi, anda melihat dengan tepat yuran apa yang dikenakan.";
$trust_4_title = "Sokongan Responsif";
$trust_4_text = "Pasukan sokongan kami tersedia melalui sembang, telefon, atau e-mel untuk menjawab soalan anda atau menyelesaikan sebarang isu.";
$trust_cta_text = "Maklumat lanjut mengenai keadaan pasaran";
$trust_cta_link = "Mengapa Berdagang";

// -- testimonials section heading (individual reviews already set above) --
$testimonials_label = "Testimoni";
$testimonials_title = "Dipercayai oleh Lebih 4J Peniaga";

// -- FAQ section heading --
$faq_label = "Soalan Lazim";

// -- lead magnet CTA block --
$leadmagnet_title = "Baharu dalam Dagangan?";
$leadmagnet_text1 = "Selepas anda mendaftar, anda akan menerima panduan percuma kami,";
$leadmagnet_quote = "“10 Kesilapan Untuk Dielakkan Semasa Berdagang Kripto”";
$leadmagnet_text2 = "penuh dengan tip mudah daripada penganalisis kami yang paling berpengalaman untuk membantu anda mengelakkan kesilapan yang paling biasa.";
$leadmagnet_text3 = "Cuma masukkan butiran anda semasa";
$leadmagnet_link = "pendaftaran";
$leadmagnet_text4 = "dan kami akan menghantarnya terus ke peti masuk anda. Ramai pelabur bermula dengan panduan ini dan mengatakan ia membuat perbezaan yang nyata.";
$leadmagnet_text5 = "Pasaran tidak menunggu — mulakan hari ini!";

// -- pre-about CTA band --
$pre_about_title = "Bersedia untuk Mengawal Dagangan Anda?";
$pre_about_text = "Sertai $site_name hari ini dan temui platform yang dibina untuk kejelasan, keselamatan, dan hasil.";
$pre_about_button = "Daftar";

// -- pretest (quiz teaser) badges/CTA --
$pretest_title = "Mula Berdagang dengan $app_price $app_currency!";
$pretest_text = "Bersedia untuk mencuba $site_name? Daftar sekarang dan sertai komuniti pelabur dan peniaga kripto yang semakin berkembang.";
$pretest_button = "Daftar";
$pretest_badge_1 = "Selamat";
$pretest_badge_2 = "Dikawal Selia";
$pretest_badge_3 = "Dipercayai oleh Lebih 4J Peniaga";

// -- about page --
$about_label = "Tentang Kami";
$about_title = "Tentang $site_name";
$about_intro = "$site_name bukan sahaja memberikan anda platform dagangan — kami membantu anda berdagang dengan kejelasan dan keyakinan.";
$about_text_1 = "$site_name ialah platform dagangan dalam talian rasmi, direka untuk menjadikan dagangan mata wang kripto boleh diakses oleh kedua-dua pemula dan peniaga berpengalaman.";
$about_text_2 = "Kami menggabungkan analisis pasaran berkuasa AI dengan papan pemuka yang mudah dan telus, jadi anda sentiasa tahu dengan tepat di mana anda berada.";
$about_text_3 = "Setiap bahagian platform dibina di sekitar kejelasan: tiada yuran tersembunyi, tiada jargon yang mengelirukan, hanya maklumat yang jelas yang boleh anda bertindak.";
$about_text_4 = "Platform kami menjimatkan berjam-jam anggapan anda dan melindungi anda daripada alternatif kualiti rendah yang tidak jelas. Kami percaya dagangan harus dibina atas ketepatan, bukan nasib.";

// -- contact page --
$contact_label = "Hubungi Kami";
$contact_title = "Hubungi $site_name";
$contact_subtitle = "Ada soalan atau memerlukan bantuan? Kami di sini untuk menasihati dan membimbing anda.";
$contact_text = "Di $site_name, kami percaya kejayaan dalam dagangan tiada kaitan dengan nasib — ia bergantung pada ketepatan, jangkaan, dan alatan yang betul.";
$contact_form_text = "Cuma isi borang di bawah, dan ahli pasukan kami akan menghubungi anda tidak lama lagi.";
$contact_form_button = "Hantar Mesej";

// -- footer navigation labels (geo-page footer, TZ items 12/16/18) --
$footnav_col_pages = "Halaman";
$footnav_col_support = "Sokongan";
$footnav_col_legal = "Undang-undang";
$footnav_col_company = "Syarikat";
$footnav_home = "Utama";
$footnav_sitemap = "Peta Laman";
$footnav_conditions = "Terma Penggunaan";
$footnav_contact = "Hubungi Kami";
$footnav_signup = "Daftar";
$footer_risk_warning = "Amaran Risiko";

// -- geo-page footer legal disclaimer (single-paragraph variant used by
// the geo template's own footer layout; the two-paragraph TZ item 21
// text above -- $footer_disclaimer_p1/$footer_disclaimer_p2 -- covers
// the root pages) --
$footer_disclaimer = "$site_name menyediakan kandungan pendidikan dan maklumat am mengenai pasaran kewangan, dagangan dalam talian, dan aset digital. Semua bahan yang diterbitkan di laman web ini bertujuan untuk tujuan maklumat sahaja dan tidak harus dianggap sebagai nasihat kewangan, pelaburan, atau perundangan. Dagangan melibatkan risiko yang ketara dan mungkin tidak sesuai untuk setiap pelabur. Hanya laburkan wang yang anda mampu untuk hilang.";

// ============================================================
// Geo-language SUBPAGE fallback content (TZ item 16 cont.). Same
// rationale as the block above: conditions/contacts/faq/offer/
// privacy/product/risk-warning/sign.php share templates across the
// bg/cs/da/... stub folders and reference these vars directly.
// English fallback so every geo folder's subpages render complete.
// ============================================================

// -- shared form aliases (service-page forms reuse the hero disclaimer) --
$form_disclaimer_risk_note = "Baca juga";
$form_text = $form_disclaimer_prefix;
$form_text_privacy = $form_privacy_link_label;
$form_text_privacy_and = $form_disclaimer_and;
$form_text_conditions = $form_terms_link_label;
$form_text_conditions_of = $form_disclaimer_of_site;
$form_text_risk_warning_note = $form_disclaimer_risk_note;
$form_submit = "Daftar";

// -- generic breadcrumbs (sign-up / product pages) --
$breadcrumb_home = "Utama";
$breadcrumb_current = "Pendaftaran / Log Masuk";
$breadcrumb_product = "Produk";

// -- sign-up page official heading --
$official_heading = "Daftar di Platform Rasmi {$site_name}™";
$official_description = "Cipta akaun percuma anda untuk mula berdagang mata wang kripto pada platform yang selamat dan telus.";

// -- product page: analytics banner --
$analytics_heading = "Berdagang Lebih Bijak dengan $site_name";
$analytics_description = "Dapatkan data pasaran masa nyata yang jelas dan pandangan berkuasa AI. Buat keputusan dagangan termaklum dengan yakin.";

// -- product page: dashboard preview --
$app_main_heading = "Papan Pemuka Dagangan Anda";
$app_feature_1_title = "Data Pasaran Langsung";
$app_feature_1_text = "Harga dan carta masa nyata di hujung jari anda";
$app_feature_2_title = "Penjejakan Portfolio";
$app_feature_2_text = "Metrik komprehensif mengenai baki dan prestasi anda";
$app_feature_3_title = "Paparan Mudah Alih";
$app_feature_3_text = "Dioptimumkan untuk pelayar mudah alih";
$app_feature_4_title = "Senarai Pemantauan";
$app_feature_4_text = "Jejaki aset yang anda perhatikan";

// -- product page: capabilities --
$capabilities_main_title = "Apa Yang Boleh Dijangka";
$capabilities_feature_1_title = "Isyarat Berkuasa AI";
$capabilities_feature_1_text = "Algoritma termaju menganalisis isyarat pasaran dan mendedahkan peluang sepanjang masa.";
$capabilities_feature_2_title = "Pendaftaran Pantas";
$capabilities_feature_2_text = "Daftar dalam beberapa minit dengan proses pendaftaran yang selamat dan mudah.";
$capabilities_feature_3_title = "Keselamatan Disahkan";
$capabilities_feature_3_text = "Penyulitan SSL 256-bit, 2FA, dan 98% cold storage melindungi dana anda di setiap langkah.";
$capabilities_feature_4_title = "Sokongan Berterusan";
$capabilities_feature_4_text = "Dapatkan sokongan daripada pasukan kami di setiap langkah — dari pendaftaran hingga dagangan pertama anda.";

// -- product page: stats strip --
$products_stats_currencies_v = "65+";
$products_stats_currencies_l = "Mata Wang Tersedia";
$products_stats_users_v = "4J+";
$products_stats_users_l = "Pengguna Berdaftar";
$products_stats_volume_v = "98+";
$products_stats_volume_l = "Negara Disokong";
$products_stats_countries_v = "24/7";
$products_stats_countries_l = "Akses Transaksi";

// -- product page: 3-step strip --
$step_1 = "Cipta akaun";
$step_2 = "Deposit dana";
$step_3 = "Mula berdagang dengan strategi yang sesuai untuk anda";

// -- shared "last update" label (privacy page) --
$last_update = "Kemas kini terakhir";

// -- FAQ page --
$faq_page_meta_title = "Soalan Lazim | Sokongan $site_name";
$faq_page_meta_description = "Jawapan kepada soalan lazim mengenai bagaimana $site_name berfungsi, penetapan harga, dan cara bermula.";
$faq_page_title = "Soalan Lazim";
$faq_page_breadcrumb_home = "Utama";
$faq_page_breadcrumb_current = "Soalan Lazim";
$faq_page_help_title = "Bagaimana kami boleh membantu anda?";
$faq_1_q = "Bagaimana saya bermula?";
$faq_1_a = "Cipta akaun anda, sahkan alamat e-mel anda, dan buat deposit pertama anda — pelan bermula dari hanya $app_price $app_currency.";
$faq_2_q = "Adakah wang dan data saya selamat? Bolehkah $site_name dipercayai?";
$faq_2_a = "Ya. Data anda dilindungi oleh penyulitan 256-bit standard industri, dan dana anda diamankan dengan pengesahan dua faktor dan 98% cold storage.";
$faq_3_q = "Bolehkah saya menutup akaun saya atau mengeluarkan dana pada bila-bila masa?";
$faq_3_a = "Ya. Tiada sekatan mengenai pengeluaran. Hubungi pasukan sokongan kami pada bila-bila masa — kami akan membantu dengan akaun anda atau memproses pengeluaran anda dengan segera.";
$faq_4_q = "Bagaimana saya tahu jika platform ini sesuai untuk saya?";
$faq_4_a = "$site_name dibina untuk kedua-dua pemula mutlak dan peniaga berpengalaman yang mahu berdagang dengan lebih cekap — setiap alatan pada platform direka untuk memastikan anda dimaklumkan dan dalam kawalan.";
$faq_5_q = "Adakah saya memerlukan pengalaman dagangan untuk bermula?";
$faq_5_a = "Tiada pengalaman sebelumnya diperlukan. Mod berkuasa AI kami mengendalikan analisis untuk anda, dan anda boleh bertukar ke mod manual pada bila-bila masa jika anda mahukan lebih kawalan.";

// -- contacts page --
$contacts_h3 = "Untuk soalan teknikal atau soalan mengenai akaun anda, sila hubungi kami melalui e-mel";

// -- offer page (meta title/description already defined above) --
$offer_breadcrumb_home = "Utama";
$offer_breadcrumb_current = "Tawaran";
$offer_cta_h1 = "Mula Berdagang Hari Ini";
$offer_cta_text = "Sedia dalam beberapa minit: daftar, biayai akaun anda, dan mula berdagang mata wang kripto pada platform yang selamat dan dikawal selia.";
$offer_how_it_works_title = "Cara Ia Berfungsi";
$offer_official_platform_title = "Ini Adalah Platform Dagangan Rasmi {$site_name}™";
$offer_official_platform_text = "Cara yang boleh dipercayai dan telus untuk berdagang mata wang kripto — dengan pandangan masa nyata dan kawalan penuh.";

// -- conditions of use page --
$conditions_meta_title = "Terma Penggunaan | $site_name";
$conditions_meta_description = "Baca Terma Penggunaan rasmi untuk laman web dan platform dagangan $site_name.";
$conditions_breadcrumb_home = "Utama";
$conditions_breadcrumb_current = "Terma Penggunaan";
$conditions_h1 = "Terma Penggunaan";
$conditions_s1_title = "1. Am";
$conditions_s1_text = "Laman web ini menyediakan akses kepada platform dagangan mata wang kripto dalam talian. Penggunaan platform ini membentuk penerimaan penuh terma ini dan Dasar Privasi kami.";
$conditions_s2_title = "2. Kelayakan";
$conditions_s2_text = "Pengguna mestilah berumur sekurang-kurangnya 18 tahun dan mempunyai kapasiti undang-undang penuh di bidang kuasa masing-masing.";
$conditions_s3_title = "3. Akses Terhad";
$conditions_s3_text = "Akses mungkin terhad di bidang kuasa di mana peraturan tempatan melarang jenis perkhidmatan dagangan yang kami tawarkan.";
$conditions_s4_title = "4. Penggunaan Yang Dilarang";
$conditions_s4_text = "Pengguna tidak boleh menyalahgunakan sistem, cuba mengakses sistem kami secara tidak sah, atau merekayasa songsang perisian kami.";
$conditions_s5_title = "5. Hak Harta Intelek";
$conditions_s5_text = "Semua kod sumber, antara muka pengguna, dan aset jenama kekal sebagai hak milik eksklusif syarikat pengendali.";
$conditions_s6_title = "6. Liabiliti";
$conditions_s6_text = "Alatan platform disediakan \"seadanya\". Kami tidak menanggung sebarang liabiliti bagi hasil yang berpunca daripada keputusan dagangan pengguna sendiri.";
$conditions_s7_title = "7. Perkhidmatan Pihak Ketiga";
$conditions_s7_text = "Integrasi dengan penyedia pembayaran pihak ketiga berlaku melalui sambungan selamat. Untuk deposit dan pengeluaran, pengguna berurusan terus dengan penyedia pilihan mereka.";
$conditions_s8_title = "8. Pautan Luaran";
$conditions_s8_text = "Pautan ke sumber luaran disediakan untuk kemudahan sahaja. Kami tidak mengesahkan atau menjamin sebarang perisian luaran.";
$conditions_s9_title = "9. Pelbagai";
$conditions_s9_text = "Kami berhak untuk mengubah terma ini atau perkhidmatan pada bila-bila masa, dengan perubahan diterbitkan di laman web.";

// -- privacy policy page (meta title/description already defined above) --
$privacy_breadcrumb_home = "Utama";
$privacy_breadcrumb_current = "Dasar Privasi";
$privacy_page_h1 = "Dasar Privasi";
$privacy_intro = "Kami menghormati privasi anda dan memproses data peribadi dengan pematuhan penuh kepada standard antarabangsa dan GDPR Eropah.";
$privacy_transparency_title = "Ketelusan";
$privacy_transparency_text = "Kami mendedahkan dengan jelas bagaimana data telemetri operasi diproses. Hubungi sokongan untuk butiran lanjut.";
$privacy_usage_title = "Penggunaan Data";
$privacy_usage_text = "Data digunakan semata-mata untuk menyediakan akses, mengamankan sesi, dan memenuhi kewajipan pematuhan.";
$privacy_rights_short_title = "Hak Anda";
$privacy_rights_short_text = "Anda mengekalkan hak penuh untuk melihat, mengemas kini, atau meminta pemadaman data peribadi anda.";
$privacy_security_title = "Keselamatan";
$privacy_security_text = "Kami menggunakan penyulitan AES-256 dan pengasingan pangkalan data untuk melindungi data telemetri operasi.";
$privacy_s1_title = "1. Pengumpulan Data";
$privacy_s1_text = "Kami mengumpul telemetri penggunaan (alamat IP, parameter sistem, jenis pelayar) serta data pengesahan yang dihantar oleh pengguna.";
$privacy_s2_title = "2. Asas Undang-undang";
$privacy_s2_text = "Pemprosesan bergantung pada persetujuan jelas pengguna, keperluan pematuhan kawal selia, dan penyampaian perkhidmatan.";
$privacy_s3_title = "3. Perkongsian Data";
$privacy_s3_text = "Data tidak pernah dikomersialkan. Pendedahan terhad kepada entiti pelepasan yang dibenarkan dan rakan kongsi teknikal di bawah perjanjian tidak mendedahkan (NDA).";
$privacy_s4_title = "4. Kuki";
$privacy_s4_text = "Kuki penting digunakan untuk pengesahan sesi dan pengoptimuman antara muka.";
$privacy_google_choices = 'Uruskan keutamaan penjejakan anda melalui <a href="http://www.google.com/settings/ads" target="_blank" rel="noopener">Tetapan Iklan Google</a> atau gunakan <a href="https://tools.google.com/dlpage/gaoptout" target="_blank" rel="noopener">Tambahan Pilihan Keluar Google Analytics</a>. Anda juga boleh menyemak amalan data Google sendiri dalam <a href="https://www.google.com/intl/en/policies/privacy/" target="_blank" rel="noopener">Dasar Privasi</a> mereka.';
$privacy_s5_title = "5. Penyimpanan Data";
$privacy_s5_text = "Data peribadi disimpan hanya selama yang diperlukan untuk memenuhi keperluan akses sistem.";
$privacy_s6_title = "6. Pemindahan Antarabangsa";
$privacy_s6_text = "Pemindahan data merentasi sempadan berlaku secara eksklusif melalui saluran yang disulitkan dan melalui klausa kontrak standard.";
$privacy_s7_title = "7. Pautan Pihak Ketiga";
$privacy_s7_text = "Kami tidak bertanggungjawab terhadap amalan privasi perkhidmatan pihak ketiga luaran yang dipautkan dari laman web kami.";
$privacy_s8_title = "8. Kemas Kini";
$privacy_s8_text = "Dasar ini boleh disemak secara berkala untuk mencerminkan perubahan sistem atau undang-undang.";
$privacy_rights_title = "Hak Anda";
$privacy_rights_text = "Pengguna mempunyai hak untuk meminta akses, pembetulan, pemprosesan terhad, atau pemadaman lengkap data mereka yang disimpan.";

// -- risk warning page --
$page_title_risk_warning = "Amaran Risiko | $site_name";
$page_description_risk_warning = "Fahami risiko dagangan dan bagaimana $site_name membantu anda menguruskannya dengan selamat.";
$risk_warning_breadcrumb_home = "Utama";
$risk_warning_breadcrumb_current = "Amaran Risiko";
$risk_warning_title = "Amaran Risiko";
$risk_warning_intro = "Memahami risiko adalah langkah pertama ke arah dagangan dengan yakin.";
$risk_warning_ai_heading = "Bagaimana sistem AI kami membantu dalam pengurusan risiko:";
$risk_warning_ai_1 = "<strong>Kecekapan Algoritma & Dagangan Tanpa Emosi:</strong> Algoritma termaju menganalisis isyarat pasaran untuk melaksanakan dagangan secara objektif pada masa yang optimum.";
$risk_warning_ai_2 = "<strong>Strategi Berasaskan Data:</strong> Strategi berdasarkan corak pasaran yang disahkan dan analisis masa nyata dan bukannya tekaan.";
$risk_warning_ai_3 = "<strong>Tetapan Fleksibel & Kawalan Penuh:</strong> Laraskan parameter risiko anda pada bila-bila masa. Jejaki semua baki dan dagangan secara telus pada papan pemuka anda — tanpa yuran tersembunyi dan tanpa sekatan pada pengeluaran.";
$risk_warning_disclaimer = "<strong>Penafian:</strong> Dagangan sentiasa membawa risiko. Sistem automatik (termasuk AI) tidak menjamin keuntungan, mungkin gagal disebabkan oleh pepijat perisian atau peristiwa pasaran yang tidak dijangka, dan memerlukan pemantauan oleh pengguna. Prestasi lepas bukan penunjuk hasil masa depan. Platform ini bertujuan semata-mata untuk tujuan maklumat dan pemasaran dan tidak membentuk nasihat kewangan.";
$risk_warning_s1_heading = "1. Risiko Am & Risiko Pasaran Mata Wang Kripto";
$risk_warning_s1_1 = "Mata wang kripto adalah aset spekulatif yang sangat tidak menentu yang didagangkan sepanjang masa dan tertakluk kepada hanya pengawasan kawal selia minimum di kebanyakan bidang kuasa.";
$risk_warning_s1_2 = "Nilai boleh berubah secara drastik dalam tempoh yang singkat, berpotensi mengakibatkan kerugian sepenuhnya modal yang dilaburkan.";
$risk_warning_s1_3 = "Nilai pasaran boleh dipengaruhi dengan ketara oleh perubahan kawal selia, perkembangan teknikal, pelanggaran keselamatan, atau peristiwa makroekonomi yang lebih luas.";
$risk_warning_s1_4 = "Sesetengah aset mungkin kehilangan keseluruhan nilainya. Hanya laburkan wang yang anda mampu untuk hilang.";
$risk_warning_s2_heading = "2. Risiko Pelaksanaan, Kecairan & Leveraj";
$risk_warning_s2_1 = "<strong>Kemeruapan Pasaran & Kecairan:</strong> Pergerakan harga yang melampau (10-20%+ setiap hari) atau kecairan yang rendah (terutamanya untuk syiling yang lebih kecil) boleh membawa kepada kelewatan, gangguan platform, dan gelinciran pelaksanaan yang ketara. Pesanan stop-loss tidak boleh menjamin had kerugian dalam keadaan melampau.";
$risk_warning_s2_2 = "<strong>Risiko Leveraj & Margin:</strong> Produk berleveraj memperkuatkan kedua-dua keuntungan dan kerugian, bermakna anda boleh kehilangan lebih daripada deposit asal anda. Kira-kira 70-80% akaun pelabur runcit kehilangan wang apabila berdagang produk berleveraj.";
$risk_warning_s3_heading = "3. Risiko Teknikal, Keselamatan Siber & Pihak Ketiga";
$risk_warning_s3_1 = "<strong>Faktor Teknikal:</strong> Dagangan dalam talian secara semula jadi membawa risiko seperti gangguan sambungan internet, kegagalan perkakasan/perisian, dan ketidaksediaan perkhidmatan.";
$risk_warning_s3_2 = "<strong>Keselamatan Siber:</strong> Akaun mata wang kripto adalah sasaran kerap pancingan data, perisian hasad, dan percubaan penggodaman. Transaksi tidak boleh diterbalikkan; komprominya kelayakan anda boleh mengakibatkan kerugian kekal.";
$risk_warning_s3_3 = "<strong>Platform Pihak Ketiga:</strong> Laman web ini boleh menghubungkan pengguna dengan platform pihak ketiga. Kami tidak mengawal, mengesahkan, atau menjamin keselamatan, operasi, atau kesolvenan mereka. Sentiasa lakukan usaha wajar yang teliti anda sendiri sebelum mendepositkan dana pada platform luaran.";
$risk_warning_s4_heading = "4. Peruntukan Kawal Selia, Cukai & Akhir";
$risk_warning_s4_1 = "<strong>Pematuhan Undang-undang & Cukai:</strong> Rangka kerja kawal selia berbeza-beza secara meluas dan berubah dengan cepat. Pengguna bertanggungjawab secara khusus untuk memastikan aktiviti dagangan mereka mematuhi undang-undang tempatan, serta memenuhi kewajipan cukai mereka sendiri.";
$risk_warning_s4_2 = "<strong>Tiada Jaminan Keuntungan:</strong> Tiada dagangan mata wang kripto yang \"selamat\" atau bebas risiko. Sebarang angka pulangan atau contoh prestasi yang diberikan adalah semata-mata hipotesis.";
$risk_warning_s4_3 = "<strong>Kesesuaian:</strong> Jika anda tidak sepenuhnya memahami risiko, bergantung pada sumber kewangan yang diperlukan, atau berdagang dengan wang yang dipinjam, dagangan mata wang kripto tidak sesuai untuk anda. Jika ragu-ragu, berunding dengan penasihat kewangan bebas yang berlesen.";
$risk_warning_contact = "<strong>Hubungi:</strong> Jika anda mempunyai soalan mengenai penyata ini atau ingin menghantar pertanyaan, sila hubungi pasukan khidmat pelanggan rasmi kami melalui borang hubungi di laman web kami.";

