<?php
require __DIR__ . '/../lang.php';

// Identity / config variables are intentionally NOT overridden here — they are inherited
// as-is from the root lang.php so brand/pricing swaps still work correctly at deploy time:
// $site_name, $site_url, $site_domain, $app_price, $app_currency, $rating_value,
// $rating_count, $review_count, $country_name, $support_email, $institutional_email.

$site_lang = 'ms-MY';
$form_language = 'ms';

// Reviews
$review_1_author = "Pelabur Persendirian";
$review_2_author = "Pedagang Bebas";
$review_3_author = "Pedagang Aset Digital";
$review_4_author = "Pencari Pendapatan Pasif";


// META TITLE / DESCRIPTION (per page)
$home_meta_title = "$site_name — Laman Web Rasmi | Platform Perdagangan";
$home_meta_description = "$site_name ⭐ — platform perdagangan AI pintar untuk analisis pasaran masa nyata dan isyarat dagangan yang jelas ⚡ Cuba alat & pandangan pintar dengan lawatan berpandu.";



$quiz_consultant_name = 'Aisyah';
$quiz_consultant_role = 'Pembantu Pendaftaran';

$quiz_text_welcome   = "Helo! Ini ialah $quiz_consultant_name, pembantu pendaftaran peribadi anda di $site_name. Berita baik! Akses anda telah diluluskan secara rasmi. Sila benarkan kami untuk mengkonfigurasi profil profesional anda sekarang!";
$quiz_text_q1 = "Untuk memastikan pematuhan undang-undang dan peraturan sepenuhnya, sila sahkan negara kediaman semasa anda: $country_name";
$quiz_text_a1_yes    = "Ya, ini adalah kediaman semasa saya";
$quiz_text_a1_no     = "Tidak";

$quiz_text_q2 = "Sempurna. Sila pilih kategori umur yang sesuai untuk mencari instrumen kewangan yang paling sesuai:";

$quiz_text_q3        = "Adakah terdapat akaun bank atau kad kredit yang aktif untuk menerima pembayaran dividen harian secara tetap?";
$quiz_text_a3_yes    = "Ya, akaun aktif tersedia";
$quiz_text_a3_no     = "Belum tersedia";

$quiz_text_q4        = "Sila nyatakan sumber pendapatan peribadi utama anda. (Parameter ini membantu menyesuaikan tetapan pengurusan risiko sistem).";
$quiz_text_a4_1      = "Pekerjaan Rasmi / Bekerja Sendiri";
$quiz_text_a4_2      = "Pendapatan Pasif / Simpanan Peribadi";
$quiz_text_a4_3      = "Sumber lain";

$quiz_text_q5 = "Hebat! Langkah terakhir ialah pengesahan telefon ringkas daripada pengurus kami untuk mengesahkan pendaftaran anda. Panggilan dibuat dari 11:00 pagi hingga 8:00 malam. Adakah anda dapat menjawab panggilan tersebut?";
$quiz_text_a5_yes    = "Ya, masa ini sesuai untuk panggilan";
$quiz_text_a5_no     = "Sila mulakan panggilan dengan segera";

$quiz_text_loader    = "Menganalisis pilihan yang diminta dan memulakan parameter konfigurasi akaun yang selamat...";
$quiz_text_final_ttl = "Akaun Berjaya Disahkan! 🎉 Ruang kerja digital anda yang selamat telah dikonfigurasi sepenuhnya. Sila lengkapkan langkah pengesahan terakhir di bawah untuk menjamin pembayaran harian:";

$quiz_placeholder_fname = "Nama Pertama";
$quiz_placeholder_lname = "Nama Akhir";
$quiz_placeholder_email = "Alamat E-mel";
$quiz_placeholder_phone = "Nombor Telefon";
$quiz_btn_submit = "Aktifkan Perdagangan";
$quiz_text_typing       = "sedang menaip mesej...";
$quiz_text_processing   = "Memproses permintaan...";


$about_meta_title = "Mengenai $site_name | Infrastruktur Perdagangan Kripto Dikuasakan AI";
$about_meta_description = "Ketahui lebih lanjut mengenai $site_name, infrastruktur perdagangan kripto berkuasa AI lanjutan yang memfokuskan pada analisis ramalan, risikan pasaran, pemantauan turun naik, dan penyelidikan aset digital.";

$contact_meta_title = "Hubungi $site_name | Minta Akses Platform Perdagangan AI";
$contact_meta_description = "Hubungi $site_name untuk meminta akses, bertanya tentang infrastruktur perdagangan kripto berkuasa AI, pasaran yang disokong, risikan aset digital, atau pendaftaran platform.";

$terms_meta_title = "Terma & Syarat | Terma Laman Web & Platform $site_name";
$terms_meta_description = "Baca Terma & Syarat $site_name merangkumi penggunaan laman web, kandungan maklumat, infrastruktur perdagangan AI, tanggungjawab pengguna, perkhidmatan pihak ketiga, dan had risiko.";

$privacy_meta_title = "Dasar Privasi | Perlindungan Data & Privasi Pengguna $site_name";
$privacy_meta_description = "Baca Dasar Privasi $site_name untuk memahami cara kami mengumpul, menggunakan, melindungi, menyimpan dan mengurus maklumat peribadi yang dihantar melalui laman web infrastruktur perdagangan kripto AI kami.";

$cookies_meta_title = "Dasar Kuki | Kuki Laman Web & Penjejakan $site_name";
$cookies_meta_description = "Ketahui cara $site_name menggunakan kuki, teknologi analisis, alat penjejakan prestasi dan perkhidmatan fungsi tapak web untuk meningkatkan pengalaman pengguna dan prestasi platform.";

$aml_meta_title = "Dasar Pencegahan Pengubahan Wang Haram (AML) | Piawaian $site_name";
$aml_meta_description = "Semak Dasar AML $site_name, termasuk penggunaan aset digital yang bertanggungjawab, kesedaran antipegubahan wang haram, aktiviti yang dilarang, prinsip pemantauan dan jangkaan pematuhan.";

$risk_meta_title = "Pendedahan Risiko | Penyata Risiko Perdagangan Kripto $site_name";
$risk_meta_description = "Semak Pendedahan Risiko $site_name untuk memahami turun naik mata wang kripto, ketidakpastian perdagangan, had isyarat AI, risiko pasaran, risiko kecairan dan tanggungjawab pengguna.";

$exchanges_meta_title = "Bursa Disokong | Liputan Risikan Pasaran $site_name";
$exchanges_meta_description = "Teroka jenis bursa mata wang kripto, tempat kecairan dan pasaran aset digital yang dipantau oleh infrastruktur risikan pasaran berkuasa AI $site_name.";


$about_breadcrumb_name = "Mengenai $site_name";
$contact_breadcrumb_name = "Hubungi $site_name";
$terms_breadcrumb_name = "Terma & Syarat";
$privacy_breadcrumb_name = "Dasar Privasi";
$cookies_breadcrumb_name = "Dasar Kuki";
$aml_breadcrumb_name = "Dasar AML";
$risk_breadcrumb_name = "Pendedahan Risiko";
$exchanges_breadcrumb_name = "Bursa Disokong";

$hero_text = "Alami era baharu perdagangan dengan platform dagangan kripto termaju kami. Dengan teknologi AI $site_name, anda boleh mengoptimumkan pulangan anda dan membuat keputusan pelaburan termaklum.";


// HEADER / NAV / FOOTER
$logo_subtitle = "Infrastruktur Perdagangan AI";
$nav_signals = "Isyarat";
$nav_reviews = "Ulasan";
$nav_about = "Mengenai";
$nav_exchanges = "Bursa";
$nav_exchanges_full = "Bursa Disokong";
$nav_risk = "Risiko";
$nav_risk_full = "Pendedahan Risiko";
$nav_faq = "Soalan Lazim (FAQ)";
$nav_privacy = "Dasar Privasi";
$nav_terms = "Terma & Syarat";
$nav_cookies = "Dasar Kuki";
$nav_cookies_short = "Kuki";
$nav_aml = "Dasar AML";
$nav_contact_us = "Hubungi Kami";
$nav_contact = "Hubungi";
$nav_get_started = "Mula Sekarang";
$header_ai_status = "Teras AI Beroperasi";
$header_menu_aria = "Menu";
$footer_platform = "Platform";
$footer_resources = "Sumber";
$footer_contact_title = "Kenalan";
$footer_ai_signals = "Isyarat AI";
$footer_about_link = "Mengenai $site_name";
$footer_description = "$site_name ialah infrastruktur perdagangan kripto berkuasa AI lanjutan yang memfokuskan pada analisis ramalan, risikan pasaran gred institusi, pemodelan turun naik, sistem pelaksanaan neural dan pengurusan risiko automatik.";
$footer_monitoring = "Pemantauan Infrastruktur AI 24/7";
$footer_global_markets = "Pasaran Aset Digital Global";
$footer_disclaimer_title = "Pendedahan Risiko";
$footer_disclaimer_p1 = "Perdagangan mata wang kripto dan pelaburan aset digital melibatkan risiko kewangan yang besar dan mungkin tidak sesuai untuk semua pelabur. Kemeruapan pasaran, gangguan kecairan, kegagalan teknologi, perubahan peraturan dan keadaan makroekonomi mungkin memberi kesan ketara kepada prestasi aset.";
$footer_disclaimer_p2 = "$site_name menyediakan infrastruktur analisis berkuasa AI, risikan pasaran ramalan dan teknologi perdagangan automatik. Tiada apa-apa yang terkandung dalam laman web ini merupakan nasihat kewangan, pelaburan, undang-undang atau cukai.";
$footer_disclaimer_p3 = "Prestasi masa lalu tidak menjamin hasil masa depan. Pengguna harus menilai risiko secara bebas sebelum terlibat dengan pasaran mata wang kripto atau sistem perdagangan automatik.";
$footer_rights = "Hak Cipta Terpelihara.";
$footer_lang_label = "Bahasa";



// HOME FORM
$home_form_fname = "Nama Pertama";
$home_form_lname = "Nama Akhir";
$home_form_email = "E-mel";
$home_form_submit_access = "Dapatkan Akses";
$home_form_submit_platform = "Minta Akses Platform";

// CONTACT FORM
$contact_form_fname = "Nama Pertama";
$contact_form_lname = "Nama Akhir";
$contact_form_email = "E-mel";
$contact_form_submit = "Minta Akses";


// HOME LABELS
$home_label_ai_confidence = "Keyakinan AI";
$home_label_update_speed = "Kelajuan Kemas Kini";
$home_label_market_mode = "Mod Pasaran";
$home_label_market_condition = "Keadaan Pasaran";
$home_label_buyer_activity = "Aktiviti Pembeli";
$home_label_market_activity = "Aktiviti Pasaran";
$home_label_risk_level = "Tahap Risiko";
$home_label_updated = "Dikemas kini";
$home_label_live_analysis = "ANALISIS LANGSUNG";

// JS
$home_js_sec_ago = "saat lalu";
$js_sec_ago = "saat lalu";
$js_close_notification = "Tutup pemberitahuan";

$js_signal_long_direction = "Kebarangkalian aliran menaik meningkat";
$js_signal_long_market = "Peluasan Terkawal";
$js_signal_long_pressure_label = "Tekanan Kecairan";
$js_signal_long_pressure = "Bullish";

$js_signal_short_direction = "Tekanan ke bawah meningkat";
$js_signal_short_market = "Ketidakstabilan Tinggi";
$js_signal_short_pressure_label = "Tekanan Risiko";
$js_signal_short_pressure = "Bearish";

$js_signal_watch_direction = "Zon pengukuhan dikesan";
$js_signal_watch_market = "Pengukuhan Neutral";
$js_signal_watch_pressure_label = "Aliran Institusi";
$js_signal_watch_pressure = "Stabil";

$js_hero_long_pair = "Peluasan Momentum BTC/USD";
$js_hero_long_regime = "Bullish";
$js_hero_long_feed_1 = "Peluasan kecairan BTC dikesan";
$js_hero_long_feed_2 = "Tekanan aliran pesanan bertukar positif";
$js_hero_long_feed_3 = "Model AI mengesahkan penerusan kenaikan harga";

$js_hero_watch_pair = "Mampatan Kemeruapan ETH/USD";
$js_hero_watch_regime = "Neutral";
$js_hero_watch_feed_1 = "Zon mampatan ETH dikesan";
$js_hero_watch_feed_2 = "AI menunggu pengesahan yang lebih kukuh";
$js_hero_watch_feed_3 = "Kecairan kekal stabil";

$js_hero_short_pair = "Peluasan Risiko SOL/USD";
$js_hero_short_regime = "Risk-Off";
$js_hero_short_feed_1 = "Tekanan ke bawah SOL dikesan";
$js_hero_short_feed_2 = "Model risiko mengesan peluasan turun naik";
$js_hero_short_feed_3 = "AI mengurangkan pendedahan kenaikan harga";

// JS — live user popup actions
$js_live_action_1 = "menyertai $site_name dari";
$js_live_action_2 = "meminta akses platform dari";
$js_live_action_3 = "memulakan pemantauan isyarat AI dari";
$js_live_action_4 = "mengaktifkan analisis pasaran dari";
$js_live_action_5 = "membuka papan pemuka institusi dari";
$js_live_action_6 = "bersambung ke $site_name dari";


// HOME PAGE
$home_hero_label = "Platform Kripto AI Untuk Setiap Tahap Pengalaman";
$home_hero_title = "Platform $site_name";
$home_hero_desc = "$site_name membantu pedagang baharu dan berpengalaman meneroka pasaran kripto dengan cerapan berkuasa AI, pemantauan pasaran masa nyata, alat kesedaran risiko dan sokongan platform berpandu.";
$home_hero_feat_1 = "Cerapan pasaran AI ringkas untuk pengguna baharu";
$home_hero_feat_2 = "Pemantauan kripto masa nyata dan kemas kini isyarat";
$home_hero_feat_3 = "Alat sedar risiko untuk keputusan yang lebih bijak";
$home_hero_feat_4 = "Analisis lanjutan untuk pedagang berpengalaman";
$home_btn_request_access = "Dapatkan Akses Platform";
$home_btn_view_signals = "Lihat Isyarat AI";
$home_trust_data_label = "Titik Data Pasaran Dianalisis";
$home_trust_confidence_label = "Purata Keyakinan Isyarat";
$home_trust_monitoring_label = "Pemantauan Pasaran AI";
$home_terminal_title = "Pandangan Pasaran AI Berpandu $site_name";
$home_terminal_insight_label = "Cerapan Pasaran AI Semasa";
$home_terminal_feed_1 = "Aktiviti pasaran BTC menunjukkan momentum yang lebih kukuh";
$home_terminal_feed_2 = "Pergerakan ETH sedang dipantau untuk pengesahan";
$home_terminal_feed_3 = "Pembantu AI menonjolkan zon peluang yang mungkin";
$home_trust_strip_1 = "Cerapan AI Untuk Pengguna Baharu & Pedagang Berpengalaman";
$home_trust_strip_2 = "Pemantauan Pasaran Mata Wang Kripto 24/7";
$home_trust_strip_3 = "Analisis Risiko & Peluang Masa Nyata";
$home_trust_strip_4 = "Akses Berpandu Ke Alat Dagangan Termaju";
$home_signals_eyebrow = "TERAS AI LANGSUNG $site_name";
$home_signals_title = "Isyarat Pasaran AI Masa Nyata Untuk Keputusan Kripto Lebih Bijak";
$home_signals_desc = "$site_name memantau aktiviti pasaran mata wang kripto, turun naik, keadaan kecairan, trend sentimen dan data rantaian blok secara berterusan untuk menjana cerapan dikuasakan AI dan isyarat pasaran masa nyata untuk kedua-dua pemula dan pedagang berpengalaman.";
$home_signals_terminal_title = "Enjin Isyarat AI $site_name";
$home_signal_btc_sub = "Momentum Positif Dikesan";
$home_signal_btc_dir = "Kebarangkalian aliran menaik meningkat";
$home_signal_btc_market = "Momentum Positif";
$home_signal_btc_activity = "Kuat";
$home_signal_eth_sub = "Menunggu Pengesahan Pasaran";
$home_signal_eth_dir = "Pergerakan mendatar dikesan";
$home_signal_eth_market = "Trend Neutral";
$home_signal_eth_activity = "Stabil";
$home_signal_sol_sub = "Peningkatan Risiko Pasaran Dikesan";
$home_signal_sol_dir = "Tekanan ke bawah meningkat";
$home_signal_sol_market = "Kemeruapan Tinggi";
$home_signal_sol_risk = "Meningkat";
$home_why_eyebrow = "MENGAPA $site_name?";
$home_why_title = "Alat Kripto Berkuasa AI Dibina Untuk Setiap Tahap Pengalaman";
$home_why_desc_1 = "$site_name membantu pengguna lebih memahami pasaran mata wang kripto melalui kecerdasan buatan, pemantauan masa nyata, cerapan pasaran dan alat kesedaran risiko. Sama ada anda meneroka kripto untuk pertama kali atau sudah mempunyai pengalaman berdagang, platform ini direka bentuk untuk menjadikan analisis pasaran lebih mudah diakses dan difahami.";
$home_why_desc_2 = "Infrastruktur $site_name sentiasa menilai aktiviti pasaran, pergerakan harga, keadaan kecairan, trend sentimen dan data rantaian blok untuk mengenal pasti peluang yang muncul dan perubahan keadaan pasaran. Pengguna baharu boleh mendapat manfaat daripada sokongan platform berpandu, manakala pedagang berpengalaman boleh meneroka alat analisis lanjutan dan risikan pasaran yang dikuasakan AI.";
$home_flow_1 = "Pemantauan Pasaran";
$home_flow_2 = "Analisis AI";
$home_flow_3 = "Pengesanan Peluang";
$home_flow_4 = "Penilaian Risiko";
$home_flow_5 = "Cerapan Boleh Dilaksanakan";
$home_reviews_eyebrow = "KOMUNITI $site_name";
$home_reviews_title = "Apa Kata Pengguna Tentang $site_name";
$home_reviews_desc = "Daripada pengguna kripto pertama kali kepada pedagang berpengalaman, orang ramai menggunakan $site_name untuk lebih memahami keadaan pasaran, meneroka cerapan dikuasakan AI dan mendekati keputusan mata wang kripto dengan lebih jelas.";
$home_review_1_text = "Sebelum menemui $site_name, saya berasa terharu dengan jumlah maklumat dalam ruang mata wang kripto. Setiap platform kelihatan rumit, dan saya sentiasa bimbang tentang membuat kesilapan. Apa yang paling saya hargai tentang $site_name ialah betapa mudahnya segala-galanya didatangi. Pandangan AI membantu saya memahami keadaan pasaran tanpa merasa sesat, dan platform ini memberi saya keyakinan untuk mula belajar mengikut kadar saya sendiri. Saya sangat bersyukur betapa mudahnya pengalaman itu berbanding dengan apa yang saya jangkakan.";
$home_review_1_tag = "Permulaan Selamat & Mudah";
$home_review_badge = "PENGGUNA DISAHKAN";
$home_review_2_text = "Saya menghabiskan masa berbulan-bulan melihat platform kripto tanpa pernah merasa cukup selesa untuk mengambil langkah pertama. $site_name mengubah sepenuhnya pengalaman itu. Platform ini menjadikan maklumat pasaran lebih mudah difahami, dan saya tidak pernah merasa seperti saya memerlukan pengalaman berdagang bertahun-tahun semata-mata untuk menggunakan alat tersebut. Perkara yang paling mengagumkan saya ialah keseimbangan antara kesederhanaan dan analisis AI yang berkuasa. Rasanya seperti mempunyai panduan yang tersedia bila-bila masa anda memerlukannya. Saya bersyukur menemui platform yang membantu saya belajar tanpa rasa terancam.";
$home_review_2_tag = "Pengalaman pembelajaran yang lebih mudah";
$home_review_3_text = "Saya telah menguji banyak platform analisis pasaran, dan $site_name menonjol kerana ia mengimbangi kebolehcapaian dengan kedalaman analisis yang serius. Pengguna baharu boleh memahami platform dengan cepat, sementara pedagang berpengalaman masih mendapat isyarat pasaran dipacu AI, pemantauan risiko dan kecerdasan kripto masa nyata yang berguna. Keseimbangan itu sukar didapati. Platform ini menyampaikan konteks pasaran yang bermakna tanpa membebankan pengguna, iaitu sesuatu yang sangat sedikit dapat dicapai oleh alat kripto.";
$home_review_3_tag = "Alat lanjutan dengan kebolehgunaan mudah";
$home_review_span_1 = "Pengguna Kripto Baharu";
$home_review_span_2 = "Pengguna Platform Kali Pertama";
$home_review_span_3 = "Pedagang Kripto Profesional";
$home_review_1_avatar_alt = "Hafiz Ahmad, pengguna $site_name";
$home_review_2_avatar_alt = "Farish Iskandar, pengguna $site_name";
$home_review_3_avatar_alt = "Ariff Luqman, pengguna $site_name";
$home_hero_visual_alt = "Papan pemuka analisis pasaran dikuasakan AI di $site_name";
$home_signal_visual_alt = "Isyarat dagangan masa nyata yang dijana oleh AI $site_name";
$home_device_visual_alt = "Analisis kripto dipaparkan pada peranti bersambung melalui $site_name";
$home_security_visual_alt = "Perisai keselamatan mewakili perlindungan akaun $site_name";
$home_contact_eyebrow = "MULA BERSAMA $site_name";
$home_contact_title = "Terokai Platform Dengan Yakin";
$home_contact_section_title = "Terokai Platform Dengan Yakin";
$home_contact_desc_1 = "Sama ada anda benar-benar baharu kepada pasaran mata wang kripto atau sudah mempunyai pengalaman berdagang, $site_name menyediakan akses kepada cerapan pasaran berkuasa AI, alat pemantauan masa nyata dan analitik pintar yang direka untuk membantu pengguna lebih memahami peluang aset digital.";
$home_contact_desc_2 = "Hantar butiran anda untuk mengetahui lebih lanjut tentang platform, teroka ciri yang tersedia dan temui cara $site_name boleh membantu anda menavigasi pasaran mata wang kripto melalui teknologi canggih dan sokongan platform berpandu.";
$home_seo_toggle = "Ketahui Lebih Lanjut Mengenai Platform AI $site_name";
$home_seo_h2 = "Platform AI $site_name Untuk Keputusan Pasaran Kripto Lebih Bijak";
$home_seo_p1 = "$site_name ialah platform mata wang kripto berkuasa AI yang direka untuk kedua-dua pemula dan pedagang berpengalaman. Platform ini menggabungkan kecerdasan buatan, pemantauan pasaran masa nyata dan alat analitik canggih untuk membantu pengguna memahami pasaran aset digital dengan lebih baik dan mengenal pasti potensi peluang.";
$home_seo_p2 = "Tidak seperti kebanyakan platform perdagangan tradisional yang memerlukan pengetahuan pasaran yang meluas, $site_name dibina untuk menjadikan maklumat pasaran yang kompleks lebih mudah difahami. Platform ini terus menganalisis aktiviti mata wang kripto, pergerakan harga, arah aliran sentimen, keadaan kecairan dan data rantaian blok, menukar jumlah maklumat yang besar kepada cerapan praktikal.";
$home_seo_p3 = "Sama ada anda meneroka pasaran mata wang kripto buat kali pertama atau sudah mempunyai pengalaman berdagang aset digital, $site_name menyediakan alat pintar yang direka untuk menyokong pembuatan keputusan yang lebih termaklum sambil menyesuaikan diri dengan perubahan keadaan pasaran dalam masa nyata.";
$home_seo_h3_1 = "Analisis Pasaran AI Boleh Diakses";
$home_seo_h3_1_p1 = "$site_name menggunakan kecerdasan buatan untuk menilai pelbagai penunjuk pasaran, termasuk aktiviti perdagangan, corak turun naik, keadaan kecairan, peristiwa rantaian blok dan sentimen pasaran. Dengan memproses maklumat secara berterusan, platform ini membantu pengguna mendapat pemahaman yang lebih jelas tentang gelagat pasaran semasa.";
$home_seo_h3_1_p2 = "Model AI direka bentuk untuk menyesuaikan diri dengan persekitaran yang berubah-ubah berbanding bergantung pada andaian statik. Ini membolehkan platform bertindak balas secara dinamik kepada arah aliran mata wang kripto yang berkembang dan peluang pasaran baru muncul.";
$home_seo_h3_1_p3 = "Walaupun cukup maju untuk pedagang berpengalaman, platform ini juga distrukturkan agar kekal didekati bagi pengguna baharu yang mahukan akses kepada risikan pasaran dipacu AI tanpa memerlukan kepakaran teknikal yang mendalam.";
$home_seo_h3_2 = "Isyarat Pasaran AI Masa Nyata";
$home_seo_h3_2_p1 = "$site_name secara berterusan memantau pasaran mata wang kripto dan menjana cerapan dikuasakan AI berdasarkan perubahan aktiviti pasaran. Platform ini menilai momentum, turun naik, keadaan kecairan dan kelakuan pasaran yang lebih luas untuk menyediakan isyarat analitik masa nyata.";
$home_seo_h3_2_p2 = "Bitcoin, Ethereum, Solana, XRP, Avalanche dan aset digital utama yang lain dipantau melalui model analitik penyesuaian yang melaraskan secara automatik kepada perubahan keadaan pasaran.";
$home_seo_h3_2_p3 = "Daripada bergantung pada satu penunjuk atau metrik terpencil, $site_name menggabungkan pelbagai sumber maklumat ke dalam rangka kerja analitik yang lebih luas yang direka untuk memberikan pandangan yang lebih lengkap tentang keadaan pasaran.";
$home_seo_h3_3 = "Alat Kesedaran Risiko Pintar";
$home_seo_h3_3_p1 = "Pasaran mata wang kripto boleh berubah dengan cepat. $site_name termasuk sistem pemantauan berkuasa AI yang direka untuk mengenal pasti kemeruapan yang luar biasa, keadaan kecairan yang berubah-ubah dan risiko pasaran yang muncul.";
$home_seo_h3_3_p2 = "Platform ini secara berterusan menilai kelakuan pasaran dan potensi faktor risiko, membantu pengguna lebih memahami perubahan keadaan dan membuat keputusan yang lebih termaklum.";
$home_seo_h3_3_p3 = "Dengan menggabungkan pelbagai lapisan analisis, $site_name bertujuan untuk meningkatkan kesedaran pasaran dan membantu pengguna menavigasi tempoh ketidakpastian yang meningkat dengan keyakinan yang lebih besar.";
$home_seo_h3_4 = "Direka Untuk Pasaran Mata Wang Kripto Moden";
$home_seo_h3_4_p1 = "$site_name menggabungkan kecerdasan buatan, teknologi pemantauan masa nyata dan alatan analitik lanjutan ke dalam platform tunggal yang direka untuk pasaran aset digital moden.";
$home_seo_h3_4_p2 = "Infrastruktur terus menilai aktiviti pasaran, perkembangan rantaian blok, perubahan sentimen dan arah aliran kecairan untuk memberikan pandangan komprehensif tentang tingkah laku pasaran mata wang kripto.";
$home_seo_h3_4_p3 = "Memandangkan pasaran aset digital terus berkembang, alatan dikuasakan AI boleh membantu pengguna memproses maklumat dengan lebih cekap dan lebih memahami persekitaran pasaran yang semakin kompleks. $site_name direka bentuk untuk menjadikan keupayaan tersebut boleh diakses oleh julat peserta pasaran yang lebih luas.";
$home_seo_side_1_label = "Cerapan AI";
$home_seo_side_1_title = "Analisis Pasaran Mudah Difahami";
$home_seo_side_1_desc = "Cerapan dikuasakan AI direka untuk kedua-dua pengguna mata wang kripto baharu dan berpengalaman.";
$home_seo_side_2_label = "Pemantauan Pasaran";
$home_seo_side_2_title = "Penjejakan Kripto Masa Nyata";
$home_seo_side_2_desc = "Pemantauan berterusan pasaran mata wang kripto utama dan perubahan keadaan pasaran.";
$home_seo_side_3_label = "Kesedaran Risiko";
$home_seo_side_3_title = "Pengesanan Risiko Pintar";
$home_seo_side_3_desc = "Alat pemantauan lanjutan yang direka untuk menyerlahkan dinamik dan turun naik pasaran yang berubah-ubah.";
$home_seo_side_4_label = "Teknologi AI";
$home_seo_side_4_title = "Model Analitik Penyesuaian";
$home_seo_side_4_desc = "Sistem pembelajaran mesin yang sentiasa menilai data pasaran dan trend baru muncul.";
$home_faq_eyebrow = "PANGKALAN PENGETAHUAN $site_name";
$home_faq_title = "Soalan Lazim Mengenai $site_name";
$home_faq_desc = "Ketahui lebih lanjut tentang cara platform berfungsi, untuk siapa platform ini direka bentuk dan cara kecerdasan buatan membantu pengguna lebih memahami keadaan pasaran mata wang kripto.";
$home_faq_q1 = "Adakah saya memerlukan pengalaman berdagang untuk menggunakan $site_name?";
$home_faq_a1 = "Tidak. $site_name direka untuk pengguna yang mempunyai tahap pengalaman yang berbeza, termasuk orang yang benar-benar baru dalam pasaran mata wang kripto. Platform ini menggunakan cerapan berkuasa AI dan alat pemantauan pasaran untuk menjadikan maklumat kompleks lebih mudah difahami.";
$home_faq_q2 = "Apakah yang sebenarnya $site_name lakukan?";
$home_faq_a2 = "$site_name terus menganalisis pasaran mata wang kripto menggunakan kecerdasan buatan. Platform ini menilai aktiviti pasaran, turun naik, trend sentimen, keadaan kecairan dan data rantaian blok untuk menjana cerapan masa nyata dan isyarat analisis.";
$home_faq_q3 = "Bolehkah pedagang berpengalaman menggunakan $site_name?";
$home_faq_a3 = "Ya. Walaupun platform ini mesra pemula, ia juga menyediakan alat analisis termaju, risikan pasaran dipacu AI dan ciri pemantauan masa nyata yang mungkin berharga kepada peserta pasaran yang berpengalaman.";
$home_faq_q4 = "Apakah mata wang kripto yang dipantau oleh $site_name?";
$home_faq_a4 = "Platform ini boleh menganalisis aset digital utama seperti Bitcoin, Ethereum, Solana, XRP, Avalanche dan mata wang kripto lain yang didagangkan secara meluas bergantung pada keadaan pasaran dan sumber data yang tersedia.";
$home_faq_q5 = "Bagaimanakah isyarat AI dijana?";
$home_faq_a5 = "$site_name menilai pelbagai faktor pasaran secara serentak, termasuk turun naik, aktiviti perdagangan, keadaan kecairan, trend sentimen dan tingkah laku pasaran sejarah. Model AI menggabungkan input ini untuk mengenal pasti keadaan pasaran yang berubah dan peluang yang berpotensi.";
$home_faq_q6 = "Adakah $site_name memberikan bimbingan pendidikan?";
$home_faq_a6 = "Platform ini direka untuk membantu pengguna memahami keadaan pasaran dengan lebih baik melalui analisis dikuasakan AI, cerapan ringkas dan akses berpandu kepada ciri platform. Pengguna baharu boleh meneroka pasaran mata wang kripto tanpa memerlukan pengetahuan teknikal lanjutan.";
$home_cta_label = "Platform AI Sedia";
$home_cta_title = "Mula Meneroka $site_name Hari Ini";
$home_cta_desc = "Temui cerapan pasaran berkuasa AI, pemantauan mata wang kripto masa nyata, alat kesedaran risiko pintar dan analitik lanjutan yang direka untuk pemula dan juga pedagang berpengalaman.";
$home_ticker_text = "Pemantauan Pasaran AI Aktif • Analisis Mata Wang Kripto Masa Nyata • Momentum Bitcoin Mengukuh • Pengukuhan Ethereum Dikesan • Peluang Pasaran Baharu Dikenal Pasti • Sistem Pemantauan Risiko Dalam Talian • Cerapan AI Dikemas Kini Secara Berterusan • Direka Untuk Pedagang Baharu & Berpengalaman";





// ABOUT PAGE
$about_h1 = "Mengenai $site_name";
$about_p1 = "$site_name ialah infrastruktur kecerdasan buatan generasi akan datang yang direka untuk membantu peserta pasaran memahami ekosistem mata wang kripto yang berkembang pesat dengan lebih baik. Dengan menggabungkan teknologi pembelajaran mesin, analitik ramalan, sistem risikan pasaran dan pemprosesan data masa nyata, $site_name menyediakan persekitaran yang komprehensif untuk memantau aktiviti aset digital dan mengenal pasti perkembangan pasaran yang bermakna.";
$about_p2 = "Pasaran mata wang kripto beroperasi secara berterusan merentas pelbagai bursa, bidang kuasa dan penyedia kecairan. Setiap saat, beribu-ribu pembolehubah mempengaruhi harga, turun naik, keadaan kecairan dan sentimen pelabur. $site_name telah dibangunkan dengan objektif untuk memproses aliran data kompleks ini dengan cara yang berstruktur dan boleh berskala.";
$about_h2_vision = "Visi Di Sebalik $site_name";
$about_p_vision_1 = "Pasaran kewangan telah menjadi semakin dipacu oleh data. Kaedah analisis tradisional selalunya bergelut untuk bersaing dengan jumlah maklumat yang dijana merentas ekosistem aset digital moden. $site_name berusaha untuk merapatkan jurang ini melalui aplikasi kecerdasan pengkomputeran lanjutan, sistem pemantauan automatik dan model analisis adaptif.";
$about_p_vision_2 = "Visi jangka panjang $site_name adalah untuk menyediakan alat risikan pasaran telus yang mampu membantu pengguna memahami struktur pasaran mata wang kripto, keadaan risiko dan trend yang baru muncul dengan lebih baik.";
$about_h2_ai = "Infrastruktur Kecerdasan Buatan";
$about_p_ai_1 = "Teras kepada $site_name ialah rangka kerja kecerdasan buatan berbilang lapisan yang direka untuk memproses maklumat daripada pelbagai sumber pasaran secara serentak.";
$about_p_ai_2 = "Sumber ini mungkin termasuk:";
$about_li_1 = "Suapan harga mata wang kripto";
$about_li_2 = "Aktiviti buku pesanan";
$about_li_3 = "Data pergerakan kecairan";
$about_li_4 = "Penunjuk kemeruapan";
$about_li_5 = "Metrik transaksi rantaian blok";
$about_li_6 = "Isyarat sentimen pasaran";
$about_li_7 = "Perkembangan makroekonomi";
$about_li_8 = "Aktiviti pasaran institusi";
$about_p_ai_3 = "Dengan menilai secara berterusan hubungan antara pembolehubah ini, $site_name cuba mengenal pasti corak yang mungkin memberikan konteks pasaran yang berharga.";
$about_h2_risk = "Falsafah Kesedaran Risiko";
$about_p_risk_1 = "Penyertaan yang bertanggungjawab dalam pasaran mata wang kripto memerlukan pemahaman yang jelas tentang risiko. $site_name menekankan kesedaran risiko sebagai komponen asas analisis aset digital.";
$about_p_risk_2 = "Turun naik pasaran, turun naik kecairan, acara khusus bursa, perkembangan kawal selia dan keadaan makroekonomi yang lebih luas semuanya boleh memberi kesan kepada hasil pasaran. Hasilnya, pengguna tidak boleh bergantung secara eksklusif pada mana-mana sumber maklumat tunggal semasa membuat keputusan.";
$about_h2_global = "Pasaran Aset Digital Global";
$about_p_global_1 = "Pasaran mata wang kripto beroperasi pada skala global dan melibatkan peserta daripada pelbagai wilayah, industri dan persekitaran ekonomi. Infrastruktur $site_name direka bentuk untuk memantau pelbagai segmen pasaran pada masa yang sama, membenarkan pengguna memerhati perkembangan yang berlaku merentas bahagian ekosistem aset digital yang berlainan.";
$about_p_global_2 = "Perspektif yang lebih luas ini boleh membantu meningkatkan kesedaran tentang perubahan keadaan pasaran dan trend baharu muncul.";
$about_h2_why = "Sebab Pengguna Meneroka $site_name";
$about_why_li_1 = "Risikan pasaran berkuasa AI yang termaju";
$about_why_li_2 = "Pemantauan mata wang kripto masa nyata";
$about_why_li_3 = "Infrastruktur analisis gaya institusi";
$about_why_li_4 = "Penilaian pasaran pelbagai faktor";
$about_why_li_5 = "Pemantauan volatiliti dan kecairan";
$about_why_li_6 = "Alat penyelidikan aset digital berskala";
$about_why_li_7 = "Metodologi analisis sedar risiko";
$about_h2_forward = "Pandangan Ke Hadapan";
$about_p_forward_1 = "Memandangkan pasaran aset digital terus matang, kepentingan infrastruktur analitik yang canggih dijangka meningkat. $site_name kekal fokus pada membangunkan teknologi yang menyokong pemahaman pasaran yang lebih mendalam, ketelusan yang lebih besar dan penyertaan yang lebih termaklum dalam ekosistem mata wang kripto.";
$about_p_forward_2 = "Melalui inovasi berterusan dan penyelidikan berterusan, $site_name menyasarkan untuk menyumbang kepada masa depan yang lebih pintar dan dipacu data untuk analisis aset digital.";


// CONTACT PAGE
$contact_h1 = "Hubungi $site_name";
$contact_intro_1 = "Hubungi pasukan $site_name untuk meminta akses platform, bertanya tentang infrastruktur perdagangan kripto berkuasa AI atau ketahui lebih lanjut mengenai persekitaran risikan pasaran aset digital kami.";
$contact_intro_2 = "Sama ada anda sedang meneroka analitik kripto automatik, infrastruktur isyarat gaya institusi, pemantauan turun naik atau kecerdasan pasaran berbilang bursa, pasukan kami boleh membantu mengarahkan permintaan anda ke jabatan yang sesuai.";
$contact_h2_help = "Bagaimana Kami Boleh Membantu";
$contact_li_1 = "Permintaan akses platform";
$contact_li_2 = "Soalan produk am";
$contact_li_3 = "Maklumat infrastruktur perdagangan AI";
$contact_li_4 = "Pertanyaan risikan pasaran aset digital";
$contact_li_5 = "Soalan pendedahan risiko dan pematuhan";
$contact_li_6 = "Bantuan teknikal atau pendaftaran";
$contact_h2_send = "Hantar Permintaan";
$contact_p_send = "Lengkapkan borang di bawah dan wakil $site_name mungkin akan menghubungi anda dengan maklumat tambahan.";
$contact_h2_info = "Maklumat Hubungan";
$contact_support_label = "Sokongan am:";
$contact_institutional_label = "Pertanyaan institusi:";
$contact_disclaimer = "Sila ambil perhatian bahawa $site_name tidak memberikan nasihat kewangan, pelaburan, cukai atau undang-undang yang diperibadikan. Semua maklumat disediakan untuk tujuan teknologi dan maklumat sahaja.";

// TERMS PAGE
$terms_h1 = "Terma & Syarat";
$terms_intro_1 = "Terma & Syarat ini mengawal akses dan penggunaan tapak web $site_name, kandungan, penerangan platform, borang, komunikasi dan bahan maklumat berkaitan.";
$terms_intro_2 = "Dengan mengakses tapak web ini, pengguna mengakui bahawa mereka telah membaca, memahami dan bersetuju dengan Terma & Syarat ini. Jika pengguna tidak bersetuju dengan terma ini, mereka harus berhenti menggunakan tapak web tersebut.";
$terms_h2_informational = "Tujuan Maklumat";
$terms_p_info_1 = "$site_name menyediakan maklumat tentang infrastruktur perdagangan kripto berkuasa AI, risikan pasaran aset digital, pemantauan turun naik, analisis kecairan dan teknologi berkaitan.";
$terms_p_info_2 = "Kandungan tapak web disediakan untuk tujuan pembentangan maklumat am dan teknologi sahaja. Tiada apa-apa di tapak web ini harus ditafsirkan sebagai nasihat kewangan, nasihat pelaburan, nasihat undang-undang, nasihat cukai atau jaminan hasil dagangan.";
$terms_h2_no_advice = "Tiada Nasihat Kewangan";
$terms_p_no_advice_1 = "$site_name tidak memberikan pengesyoran yang diperibadikan mengenai sama ada pengguna perlu membeli, menjual, memegang, berdagang, mempertaruhkan, memindahkan atau berinteraksi dengan mana-mana mata wang kripto, token, produk kewangan atau aset digital.";
$terms_p_no_advice_2 = "Pengguna harus menilai sendiri semua maklumat dan mendapatkan nasihat daripada profesional bertauliah sebelum membuat keputusan kewangan.";
$terms_h2_user_responsibility = "Tanggungjawab Pengguna";
$terms_p_user_1 = "Pengguna bertanggungjawab untuk keputusan mereka sendiri, penilaian risiko, aktiviti akaun, tindakan dagangan, pematuhan undang-undang dan penggunaan mana-mana perkhidmatan pihak ketiga.";
$terms_p_user_2 = "Pengguna harus memastikan bahawa aktiviti aset digital dibenarkan di bidang kuasa mereka dan mereka memahami semua risiko yang terpakai sebelum berinteraksi dengan pasaran kripto.";
$terms_h2_ai = "AI dan Sistem Analisis";
$terms_p_ai_1 = "$site_name mungkin menerangkan sistem kecerdasan buatan, model ramalan, isyarat pasaran, analitis automatik atau teknologi berkaitan pelaksanaan.";
$terms_p_ai_2 = "Sistem ini mungkin bergantung pada data pasaran, model statistik, proses pembelajaran mesin dan sumber maklumat pihak ketiga. Sistem sedemikian mungkin tidak tepat, tertangguh, tidak lengkap, tidak tersedia atau tidak sesuai untuk objektif pengguna tertentu.";
$terms_h2_availability = "Tiada Jaminan Ketersediaan";
$terms_p_avail_1 = "$site_name tidak menjamin akses laman web tanpa gangguan, ketersediaan platform yang berterusan, operasi tanpa ralat, maklumat pasaran yang tepat atau ketersediaan mana-mana ciri tertentu.";
$terms_p_avail_2 = "Perkhidmatan, kandungan, halaman, borang, penyepaduan atau penerangan platform mungkin diubah suai, digantung atau ditamatkan pada bila-bila masa.";
$terms_h2_third_party = "Perkhidmatan Pihak Ketiga";
$terms_p_tp_1 = "Laman web mungkin merujuk bursa pihak ketiga, tempat kecairan, penyedia analisis, alat komunikasi, perkhidmatan pengehosan atau pembekal infrastruktur teknikal.";
$terms_p_tp_2 = "$site_name tidak mengawal platform pihak ketiga dan tidak bertanggungjawab terhadap ketersediaannya, yuran, dasar, sekatan akaun, prosedur pematuhan, kegagalan teknikal atau kerugian pengguna.";
$terms_h2_prohibited = "Penggunaan Terlarang";
$terms_p_prohibited = "Pengguna tidak boleh menggunakan tapak web ini atau mana-mana teknologi berkaitan untuk tujuan menyalahi undang-undang, kesat, penipuan, manipulatif atau berbahaya.";
$terms_li_1 = "Cuba mengakses tanpa kebenaran";
$terms_li_2 = "Menghantar maklumat palsu atau mengelirukan";
$terms_li_3 = "Menggunakan tapak web untuk aktiviti kewangan yang menyalahi undang-undang";
$terms_li_4 = "Mengganggu keselamatan atau kefungsian tapak web";
$terms_li_5 = "Menyalin atau menyalahgunakan kandungan tapak web tanpa kebenaran";
$terms_li_6 = "Mencuba memintas pematuhan atau kawalan teknikal";
$terms_h2_ip = "Harta Intelek";
$terms_p_ip_1 = "Reka bentuk tapak web, teks, penjenamaan, elemen antara muka, grafik, struktur dan bahan berkaitan dimiliki oleh atau dilesenkan kepada $site_name melainkan dinyatakan sebaliknya.";
$terms_p_ip_2 = "Pengguna tidak boleh mengeluarkan semula, mengedar, mengubah suai, atau mengeksploitasi bahan laman web secara komersial tanpa kebenaran yang sewajarnya.";
$terms_h2_liability = "Had Liabiliti";
$terms_p_liab_1 = "Setakat maksimum yang dibenarkan oleh undang-undang yang terpakai, $site_name tidak akan bertanggungjawab untuk kerugian yang timbul daripada dagangan aset digital, turun naik pasaran, isu teknikal, kegagalan platform pihak ketiga, data yang tidak tepat, keputusan pengguna atau kebergantungan pada kandungan laman web.";
$terms_p_liab_2 = "Pengguna mengakses dan menggunakan tapak web ini atas risiko mereka sendiri.";
$terms_h2_changes = "Perubahan Kepada Terma Ini";
$terms_p_changes_1 = "$site_name boleh mengemas kini Terma & Syarat ini pada bila-bila masa. Syarat yang dikemas kini mungkin disiarkan pada halaman ini.";
$terms_p_changes_2 = "Penggunaan laman web secara berterusan selepas perubahan bermakna pengguna mengakui dan menerima terma yang dikemas kini.";

// PRIVACY PAGE
$privacy_h1 = "Dasar Privasi";
$privacy_intro_1 = "$site_name menghormati privasi pengguna dan komited untuk mengendalikan maklumat peribadi dengan penuh tanggungjawab, telus dan selamat.";
$privacy_intro_2 = "Dasar Privasi ini menerangkan maklumat yang mungkin dikumpul apabila pengguna melawati tapak web ini, menyerahkan borang kenalan, meminta akses, atau berinteraksi dengan kandungan $site_name dan komunikasi berkaitan platform.";
$privacy_h2_collect = "Maklumat Yang Boleh Kami Kumpul";
$privacy_p_collect_1 = "$site_name mungkin mengumpul maklumat yang dihantar secara sukarela oleh pengguna melalui borang tapak web atau saluran komunikasi.";
$privacy_li_fname = "Nama pertama";
$privacy_li_lname = "Nama akhir";
$privacy_li_email = "Alamat e-mel";
$privacy_li_phone = "Nombor telefon";
$privacy_li_inquiry = "Butiran pertanyaan yang diserahkan";
$privacy_li_technical = "Data penggunaan laman web teknikal asas";
$privacy_h2_use = "Cara Kami Menggunakan Maklumat";
$privacy_p_use_1 = "Maklumat boleh digunakan untuk bertindak balas kepada permintaan pengguna, menyediakan maklumat capaian platform, menambah baik kefungsian tapak web, mengekalkan keselamatan, dan menyampaikan kemas kini yang berkaitan mengenai $site_name.";
$privacy_p_use_2 = "Kami juga mungkin menggunakan data agregat atau data tidak mengenal pasti untuk menganalisis prestasi laman web, menambah baik struktur kandungan dan lebih memahami cara pelawat berinteraksi dengan halaman kami.";
$privacy_h2_comm = "Tujuan Komunikasi";
$privacy_p_comm_1 = "Jika pengguna menyerahkan maklumat hubungan, $site_name boleh menggunakan maklumat tersebut untuk membalas pertanyaan, memberikan butiran pendaftaran, menjelaskan permintaan capaian platform atau berkongsi maklumat perkhidmatan yang berkaitan.";
$privacy_p_comm_2 = "Pengguna boleh meminta komunikasi tersebut ditamatkan jika berkenaan.";
$privacy_h2_cookies = "Kuki Dan Data Teknikal";
$privacy_p_cookies_1 = "Laman web ini mungkin menggunakan kuki, alat analisis dan teknologi serupa untuk meningkatkan pengalaman menyemak imbas, memantau prestasi dan menyokong keselamatan tapak web.";
$privacy_p_cookies_2 = "Data teknikal mungkin termasuk jenis peranti, jenis pelayar, sistem pengendalian, interaksi halaman, maklumat rujukan dan statistik penggunaan umum.";
$privacy_h2_protection = "Langkah-Langkah Perlindungan Data";
$privacy_p_prot_1 = "$site_name menggunakan perlindungan pentadbiran, teknikal dan organisasi yang munasabah untuk melindungi maklumat yang diserahkan daripada capaian yang tidak dibenarkan, penyalahgunaan, kehilangan atau pendedahan.";
$privacy_p_prot_2 = "Walau bagaimanapun, tiada sistem dalam talian boleh menjamin keselamatan mutlak. Pengguna harus mengelak daripada menyerahkan maklumat kewangan sensitif, kunci dompet peribadi, kata laluan, kelayakan pertukaran, atau butiran akses akaun sulit melalui borang tapak web awam.";
$privacy_h2_third = "Pembekal Perkhidmatan Pihak Ketiga";
$privacy_p_third_1 = "$site_name mungkin menggunakan pembekal pihak ketiga untuk pengehosan, analitik, komunikasi, keselamatan, penghantaran e-mel, pemprosesan CRM atau infrastruktur teknikal.";
$privacy_p_third_2 = "Pembekal ini mungkin memproses maklumat terhad hanya jika perlu untuk menyokong fungsi laman web dan perkhidmatan yang berkaitan.";
$privacy_google_choices = 'Anda boleh menguruskan cara Google menggunakan maklumat dari lawatan anda melalui <a href="http://www.google.com/settings/ads" target="_blank" rel="noopener">Tetapan Iklan Google</a>, tarik diri daripada pengiklanan berdasarkan minat menggunakan <a href="https://tools.google.com/dlpage/gaoptout" target="_blank" rel="noopener">Tambahan Penyemak Imbas Tarik Diri Google Analytics</a>, atau semak <a href="https://www.google.com/intl/en/policies/privacy/" target="_blank" rel="noopener">Dasar Privasi Google</a> untuk butiran lanjut.';
$privacy_h2_sale = "Tiada Penjualan Maklumat Peribadi";
$privacy_p_sale_1 = "$site_name tidak berniat untuk menjual maklumat peribadi yang diserahkan melalui tapak web ini.";
$privacy_p_sale_2 = "Maklumat boleh dikongsi hanya apabila perlu untuk tujuan operasi, pematuhan undang-undang, komunikasi pengguna, pencegahan penipuan atau pemprosesan berkaitan perkhidmatan.";
$privacy_h2_retention = "Pengekalan Data";
$privacy_p_retention = "Maklumat peribadi boleh dikekalkan selagi perlu untuk membalas pertanyaan, menyelenggara rekod perniagaan, mematuhi obligasi undang-undang, meningkatkan komunikasi platform atau menyokong keselamatan dan pencegahan penipuan.";
$privacy_h2_rights = "Hak Pengguna";
$privacy_p_rights = "Bergantung pada undang-undang yang terpakai, pengguna mungkin mempunyai hak yang berkaitan dengan akses, pembetulan, pemadaman, bantahan, sekatan atau kemudahalihan maklumat peribadi.";
$privacy_h2_intl = "Penggunaan Antarabangsa";
$privacy_p_intl_1 = "$site_name mungkin diakses oleh pengguna daripada bidang kuasa yang berbeza. Peraturan privasi mungkin berbeza bergantung pada lokasi.";
$privacy_p_intl_2 = "Dengan menggunakan tapak web ini, pengguna mengakui bahawa maklumat mungkin diproses menurut Dasar Privasi ini dan keperluan operasi yang berkenaan.";
$privacy_h2_policy_updates = "Kemas Kini Dasar";
$privacy_p_updates_1 = "$site_name boleh mengemas kini Dasar Privasi ini secara berkala untuk menggambarkan perubahan dalam undang-undang, teknologi, prosedur dalaman atau kefungsian tapak web.";
$privacy_p_updates_2 = "Penggunaan laman web secara berterusan selepas kemas kini bermakna pengguna mengakui Dasar Privasi yang disemak.";

// COOKIES PAGE
$cookies_h1 = "Dasar Kuki";
$cookies_intro_1 = "Dasar Kuki ini menerangkan cara $site_name menggunakan kuki, teknologi analisis dan alat penjejakan yang serupa apabila pengguna mengakses atau berinteraksi dengan tapak web ini.";
$cookies_intro_2 = "Kuki membantu menambah baik kefungsian laman web, meningkatkan pengalaman pengguna, menganalisis prestasi dan menyokong proses berkaitan keselamatan.";
$cookies_intro_3 = "Dengan terus menggunakan tapak web ini, pengguna mengakui bahawa kuki tertentu dan teknologi berkaitan mungkin digunakan selaras dengan dasar ini.";
$cookies_h2_what = "Apakah Kuki?";
$cookies_p_what_1 = "Kuki ialah fail teks kecil yang disimpan pada peranti pengguna apabila melawati tapak web.";
$cookies_p_what_2 = "Fail ini mungkin mengandungi maklumat yang membantu tapak web mengenali pelawat yang kembali, mengingati pilihan, menambah baik navigasi dan mengukur prestasi tapak web.";
$cookies_h2_why = "Mengapa Kami Menggunakan Kuki";
$cookies_p_why_1 = "$site_name mungkin menggunakan kuki dan teknologi serupa untuk beberapa tujuan.";
$cookies_li_1 = "Mengekalkan kefungsian tapak web";
$cookies_li_2 = "Meningkatkan pengalaman pengguna";
$cookies_li_3 = "Mengingati pilihan pengguna";
$cookies_li_4 = "Memahami kelakuan pelawat";
$cookies_li_5 = "Mengukur prestasi laman web";
$cookies_li_6 = "Mengenal pasti isu teknikal";
$cookies_li_7 = "Menyokong keselamatan tapak web";
$cookies_li_8 = "Mencegah penyalahgunaan dan penipuan";
$cookies_h2_essential = "Kuki Penting";
$cookies_p_ess_1 = "Kuki tertentu adalah perlu untuk kelancaran operasi tapak web.";
$cookies_p_ess_2 = "Kuki ini membantu mengekalkan keselamatan, kefungsian navigasi, pengurusan sesi dan operasi teras tapak web lain.";
$cookies_p_ess_3 = "Tanpa kuki penting, bahagian tapak web mungkin tidak berfungsi dengan betul.";
$cookies_h2_analytics = "Kuki Analitik";
$cookies_p_an_1 = "Kuki Analitik membantu kami memahami cara pelawat berinteraksi dengan kandungan tapak web.";
$cookies_p_an_2 = "Teknologi ini boleh mengumpul maklumat mengenai lawatan halaman, corak navigasi, jenis peranti, konfigurasi penyemak imbas dan metrik umum penggunaan laman web.";
$cookies_p_an_3 = "Maklumat analitis lazimnya diagregatkan dan digunakan untuk meningkatkan prestasi laman web dan pengalaman pengguna.";
$cookies_h2_functional = "Kuki Berfungsi";
$cookies_p_fun_1 = "Kuki berfungsi boleh digunakan untuk mengingat tetapan dan pilihan yang dipilih oleh pengguna.";
$cookies_p_fun_2 = "Contoh mungkin termasuk pilihan bahasa, tetapan antara muka, pilihan paparan atau ciri penyesuaian yang lain.";
$cookies_h2_third = "Teknologi Pihak Ketiga";
$cookies_p_third_1 = "$site_name boleh menggunakan pembekal perkhidmatan pihak ketiga, platform analitis, teknologi pengiklanan atau alat pemantauan prestasi.";
$cookies_p_third_2 = "Pihak ketiga ini boleh meletakkan kuki atau teknologi penjejakan mereka sendiri tertakluk kepada dasar privasi masing-masing.";
$cookies_p_third_3 = "$site_name tidak mengawal amalan kuki pihak ketiga dan mengesyorkan menyemak dokumentasi privasi penyedia luaran jika berkenaan.";
$cookies_h2_manage = "Menguruskan Kuki";
$cookies_p_manage_1 = "Kebanyakan penyemak imbas moden membenarkan pengguna mengurus, menyekat, atau memadamkan kuki melalui tetapan penyemak imbas.";
$cookies_p_manage_2 = "Pengguna boleh memilih untuk melumpuhkan kuki sepenuhnya, walaupun ciri laman web tertentu mungkin tidak berfungsi seperti yang dimaksudkan selepas berbuat demikian.";
$cookies_p_manage_3 = "Tetapan penyemak imbas lazimnya menyediakan pilihan untuk:";
$cookies_li_manage_1 = "Sekat semua kuki";
$cookies_li_manage_2 = "Padam kuki sedia ada";
$cookies_li_manage_3 = "Terima pemberitahuan kuki";
$cookies_li_manage_4 = "Sekat kategori kuki tertentu";
$cookies_h2_data = "Perlindungan Data";
$cookies_p_data = "Maklumat berkaitan kuki mungkin diproses mengikut Dasar Privasi kami dan undang-undang perlindungan data yang terpakai.";
$cookies_h2_policy_updates = "Kemas Kini Dasar";
$cookies_p_updates_1 = "$site_name boleh mengemas kini Dasar Kuki ini secara berkala untuk menggambarkan perubahan teknologi, keperluan undang-undang atau peningkatan operasi.";
$cookies_p_updates_2 = "Penggunaan laman web secara berterusan berikutan kemas kini merupakan perakuan tentang dasar yang disemak.";

// AML PAGE
$aml_h1 = "Dasar AML";
$aml_intro_1 = "$site_name mengiktiraf kepentingan kesedaran antipengubahan wang haram, integriti kewangan dan penyertaan yang bertanggungjawab dalam pasaran aset digital.";
$aml_intro_2 = "Dasar AML ini menerangkan prinsip am yang $site_name terpakai untuk tidak menggalakkan penggunaan teknologi berkaitan kripto yang menyalahi undang-undang, aktiviti kewangan yang mencurigakan, penipuan, pengelakan sekatan, pembiayaan pengganas dan perlakuan larangan lain.";
$aml_h2_purpose = "Tujuan Dasar Ini";
$aml_p_purpose_1 = "Tujuan dasar ini adalah untuk mewujudkan rangka kerja yang bertanggungjawab untuk cara $site_name mendekati kesedaran pencegahan pengubahan wang haram dalam ekosistem aset digital.";
$aml_p_purpose_2 = "Pasaran mata wang kripto mungkin melibatkan aktiviti rentas sempadan, infrastruktur terdesentralisasi, bursa pihak ketiga dan sistem dompet luaran. Oleh sebab itu, pengguna harus memahami bahawa kewajipan pematuhan mungkin berbeza-beza bergantung kepada bidang kuasa mereka, jenis akaun, pembekal bursa dan persekitaran peraturan tempatan.";
$aml_h2_responsible = "Penggunaan Teknologi Aset Digital Secara Bertanggungjawab";
$aml_p_resp_1 = "Pengguna diharap akan berinteraksi dengan $site_name dan mana-mana perkhidmatan aset digital yang berkaitan secara bertanggungjawab, sah di sisi undang-undang dan mengikut peraturan yang terpakai.";
$aml_p_resp_2 = "$site_name tidak menyokong atau menggalakkan penggunaan pasaran kripto, sistem perdagangan, teknologi automatik atau alat analisis untuk tujuan haram.";
$aml_li_1 = "Pengubahan wang haram";
$aml_li_2 = "Pembiayaan keganasan";
$aml_li_3 = "Penipuan atau penipuan kewangan";
$aml_li_4 = "Pengelakan sekatan";
$aml_li_5 = "Manipulasi pasaran";
$aml_li_6 = "Penggunaan dana curi atau akaun yang terjejas";
$aml_li_7 = "Sebarang aktiviti yang dilarang oleh undang-undang yang terpakai";
$aml_h2_exchange = "Pematuhan Bursa Pihak Ketiga";
$aml_p_ex_1 = "$site_name mungkin merujuk, berinteraksi atau menyediakan infrastruktur analitikal yang berkaitan dengan tempat aset digital pihak ketiga atau persekitaran kecairan.";
$aml_p_ex_2 = "Bursa pihak ketiga, penjaga, pemproses pembayaran dan penyedia perkhidmatan mungkin menggunakan prosedur pematuhan mereka sendiri, termasuk pengesahan identiti, pemantauan transaksi, saringan sekatan, sekatan akaun, pemeriksaan sumber dana atau keperluan pengesahan tambahan.";
$aml_h2_user_responsibility = "Tanggungjawab Pengguna";
$aml_p_user_1 = "Pengguna bertanggungjawab untuk memastikan bahawa aktiviti mereka mematuhi undang-undang di lokasi mereka dan konsisten dengan mana-mana kewajipan yang dikenakan oleh pengawal selia yang berkaitan, bursa, institusi kewangan atau pembekal perkhidmatan.";
$aml_p_user_2 = "Pengguna tidak boleh cuba menyembunyikan pemilikan, menyamarkan asal transaksi, memberikan maklumat palsu, melangkau proses pengesahan, atau menggunakan infrastruktur aset digital dalam cara yang mungkin dianggap mencurigakan atau menyalahi undang-undang.";
$aml_h2_suspicious = "Aktiviti Yang Mencurigakan";
$aml_p_suspicious = "Aktiviti yang mencurigakan mungkin termasuk tingkah laku yang kelihatan tidak konsisten dengan penggunaan biasa, cubaan menyalahgunakan sistem dagangan, penyerahan maklumat mengelirukan berulang kali, penglibatan dengan bidang kuasa terhad atau aktiviti yang dikaitkan dengan penipuan, dana terlarang atau perkhidmatan yang dilarang.";
$aml_h2_evasion = "Tiada Pengelakan Atau Pintasan";
$aml_p_evasion = "Pengguna tidak boleh cuba untuk memintas kawalan pematuhan, sekatan teknikal, sistem pengesahan identiti, had geografi atau proses pemantauan risiko.";
$aml_h2_policy_updates = "Kemas Kini Dasar";
$aml_p_updates_1 = "$site_name mungkin mengemas kini Dasar AML ini dari semasa ke semasa untuk mencerminkan perubahan dalam jangkaan kawal selia, piawaian pasaran, prosedur dalaman atau amalan industri aset digital.";
$aml_p_updates_2 = "Penggunaan laman web secara berterusan selepas kemas kini bermakna pengguna mengakui dasar yang disemak.";

// RISK PAGE
$risk_h1 = "Pendedahan Risiko";
$risk_intro_1 = "Perdagangan mata wang kripto dan penyertaan aset digital melibatkan risiko yang ketara. Harga boleh bergerak pantas, kecairan boleh berubah secara tidak dijangka, dan keadaan pasaran boleh menjadi sangat tidak stabil dalam tempoh yang singkat.";
$risk_intro_2 = "Pendedahan Risiko ini menerangkan pertimbangan penting pengguna harus menyemak sebelum berinteraksi dengan pasaran aset digital, teknologi perdagangan automatik, isyarat pasaran yang dijana AI atau infrastruktur analitis berkaitan kripto.";
$risk_h2_no_guarantee = "Tiada Hasil Yang Dijamin";
$risk_p_no_guarantee_1 = "$site_name tidak menjamin keuntungan, pulangan pelaburan, kejayaan dagangan, ketepatan isyarat, akses tanpa gangguan, atau hasil kewangan yang positif.";
$risk_p_no_guarantee_2 = "Sebarang contoh, statistik, elemen antara muka, metrik prestasi, penunjuk isyarat atau simulasi pasaran yang dipaparkan di tapak web ini disediakan untuk tujuan maklumat dan ilustrasi sahaja.";
$risk_h2_volatility = "Kemeruapan Pasaran Mata Wang Kripto";
$risk_p_vol_1 = "Pasaran aset digital sangat tidak menentu. Harga boleh terjejas oleh kekurangan kecairan, berita makroekonomi, perkembangan kawal selia, gangguan pertukaran, acara blockchain, sentimen pelabur, aktiviti leverage, atau manipulasi pasaran.";
$risk_p_vol_2 = "Kemeruapan boleh mengakibatkan kerugian yang pantas, jurang harga yang mendadak, slippage, peristiwa pencairan, atau ketidakupayaan untuk melaksanakan transaksi pada harga yang dijangkakan.";
$risk_h2_ai = "Had Isyarat AI";
$risk_p_ai_1 = "Sistem kecerdasan buatan mungkin menganalisis sejumlah besar data pasaran, tetapi mereka tidak dapat menghapuskan ketidakpastian.";
$risk_p_ai_2 = "Penunjuk berkuasa AI, isyarat dagangan, klasifikasi pasaran dan model ramalan mungkin tidak lengkap, tertangguh, tidak betul atau tidak sesuai untuk situasi kewangan peribadi pengguna.";
$risk_p_ai_3 = "Pengguna tidak seharusnya bergantung semata-mata pada mana-mana isyarat AI apabila membuat keputusan perdagangan, pelaburan atau kewangan.";
$risk_h2_tech = "Risiko Teknologi Dan Pelaksanaan";
$risk_p_tech_1 = "Teknologi perdagangan mungkin dipengaruhi oleh masalah ketersambungan internet, gangguan pelayan, kependaman, ralat perisian, kegagalan API, masa terhenti pertukaran, suapan data yang salah atau pengehadan infrastruktur pihak ketiga.";
$risk_p_tech_2 = "$site_name tidak menjamin capaian tanpa gangguan kepada data, isyarat, ciri platform, sistem pihak ketiga, atau persekitaran pelaksanaan.";
$risk_h2_liquidity = "Risiko Kecairan Dan Bursa";
$risk_p_liq_1 = "Kecairan boleh berbeza dengan ketara merentas bursa dan aset digital. Sesetengah pasaran mungkin mengalami kedalaman buku pesanan yang rendah, spread yang luas, pelaksanaan yang tertangguh atau pergerakan harga yang mendadak dalam masa tekanan.";
$risk_p_liq_2 = "Pertukaran pihak ketiga mungkin mengenakan bayaran, had, sekatan, ulasan akaun, kelewatan pengeluaran, penggantungan dagangan atau had geografi.";
$risk_h2_regulatory = "Risiko Kawal Selia";
$risk_p_reg_1 = "Peraturan aset digital mungkin berubah dengan pantas dan mungkin berbeza antara negara, wilayah dan bidang kuasa.";
$risk_p_reg_2 = "Perubahan kawal selia boleh menjejaskan akses pasaran, ketersediaan aset, operasi pertukaran, pelaporan obligasi, pencukaian, sekatan perdagangan atau fungsi platform.";
$risk_h2_user_responsibility = "Tanggungjawab Pengguna";
$risk_p_user_1 = "Pengguna bertanggungjawab sepenuhnya untuk menilai risiko, memahami undang-undang yang terpakai, menyemak keadaan kewangan mereka dan membuat keputusan yang bebas.";
$risk_p_user_2 = "$site_name tidak menyediakan nasihat kewangan, pelaburan, undang-undang, perakaunan, atau cukai yang disesuaikan untuk individu.";
$risk_h2_advice = "Dapatkan Nasihat Profesional";
$risk_p_advice_1 = "Pengguna harus berunding dengan profesional yang berkelayakan sebelum membuat keputusan kewangan yang penting melibatkan mata wang kripto, sistem perdagangan, teknologi automatik, atau pelaburan aset digital.";
$risk_p_advice_2 = "Dengan menggunakan laman web ini, pengguna mengakui bahawa mereka memahami risiko yang berkaitan dengan pasaran aset digital dan menerima tanggungjawab untuk keputusan mereka sendiri.";

// EXCHANGES PAGE
$exchanges_h1 = "Bursa Disokong";
$exchanges_intro_1 = "$site_name direka di sekeliling pendekatan kecerdasan pelbagai pasaran yang menilai aktiviti aset digital merentasi pelbagai persekitaran perdagangan mata wang kripto.";
$exchanges_intro_2 = "Pasaran kripto moden beroperasi melalui pelbagai bursa, penyedia kecairan, tempat derivatif dan ekosistem perdagangan. Memahami aktiviti merentasi persekitaran ini adalah penting untuk membina risikan pasaran yang komprehensif.";
$exchanges_h2_philosophy = "Falsafah Liputan Pasaran";
$exchanges_p_phil_1 = "Daripada bergantung pada satu tempat, $site_name dibina berdasarkan konsep analisis seluruh pasaran.";
$exchanges_p_phil_2 = "Harga mata wang kripto, keadaan kecairan, tingkah laku turun naik dan aktiviti institusi sering berbeza antara bursa. Dengan memerhatikan keadaan pasaran yang lebih meluas, model analisis boleh mendapatkan konteks tambahan mengenai trend baru muncul dan potensi anomali.";
$exchanges_h2_spot = "Pemantauan Pasaran Semerta";
$exchanges_p_spot_1 = "Bursa semerta mewakili sebahagian besar aktiviti aset digital global.";
$exchanges_p_spot_2 = "Sistem risikan pasaran mungkin menilai data pasaran semerta, termasuk:";
$exchanges_li_spot_1 = "Aktiviti harga";
$exchanges_li_spot_2 = "Kedalaman kecairan";
$exchanges_li_spot_3 = "Struktur buku pesanan";
$exchanges_li_spot_4 = "Jumlah dagangan";
$exchanges_li_spot_5 = "Kelakuan spread bidaan-permintaan";
$exchanges_li_spot_6 = "Keadaan ketidakseimbangan pasaran";
$exchanges_h2_deriv = "Pasaran Derivatif";
$exchanges_p_deriv_1 = "Derivatif mata wang kripto memainkan peranan yang semakin penting dalam ekosistem aset digital yang lebih meluas.";
$exchanges_p_deriv_2 = "Niaga hadapan, kontrak berterusan, pilihan dan aktiviti perdagangan berleveraj mungkin mempengaruhi sentimen pasaran, keadaan turun naik dan momentum berarah.";
$exchanges_p_deriv_3 = "Infrastruktur analitik mungkin menilai maklumat berkaitan derivatif apabila menilai keadaan pasaran yang lebih luas.";
$exchanges_h2_liquidity = "Analisis Kecairan";
$exchanges_p_liq_1 = "Kecairan kekal sebagai salah satu faktor terpenting yang mempengaruhi kestabilan pasaran dan kualiti pelaksanaan.";
$exchanges_p_liq_2 = "$site_name mungkin menganalisis keadaan kecairan merentas pelbagai tempat dagangan untuk mengenal pasti:";
$exchanges_li_liq_1 = "Penumpuan kecairan";
$exchanges_li_liq_2 = "Pengeluaran kecairan secara tiba-tiba";
$exchanges_li_liq_3 = "Tekanan buku pesanan";
$exchanges_li_liq_4 = "Kejadian ketidakseimbangan pasaran";
$exchanges_li_liq_5 = "Kelakuan dagangan luar biasa";
$exchanges_h2_availability = "Ketersediaan Bursa";
$exchanges_p_avail_1 = "Ketersediaan bursa boleh berbeza bergantung pada lokasi geografi, bidang kuasa, kelayakan akaun, keperluan kawal selia dan had teknikal.";
$exchanges_p_avail_2 = "Pertukaran atau perkhidmatan tertentu mungkin tidak tersedia kepada semua pengguna dan mungkin mengenakan sekatan, keperluan pengesahan, bayaran dan dasar pengendalian mereka sendiri.";
$exchanges_h2_third = "Platform Pihak Ketiga";
$exchanges_p_third_1 = "Sebarang rujukan kepada bursa, tempat kecairan, broker, penjaga, atau penyedia pasaran dibuat semata-mata untuk tujuan maklumat.";
$exchanges_p_third_2 = "$site_name tidak memiliki, mengendalikan, mengawal atau menjamin perkhidmatan bursa pihak ketiga.";
$exchanges_p_third_3 = "Pengguna tetap bertanggungjawab untuk menilai sebarang pertukaran, tempat dagangan, atau perkhidmatan aset digital sebelum menggunakannya.";
$exchanges_h2_monitoring = "Pemantauan Pasaran Berterusan";
$exchanges_p_mon_1 = "Pasaran mata wang kripto beroperasi secara berterusan, lazimnya dua puluh empat jam sehari, tujuh hari seminggu.";
$exchanges_p_mon_2 = "Apabila struktur pasaran berkembang, pertukaran baharu muncul, kecairan berhijrah dan aktiviti dagangan berubah.";
$exchanges_p_mon_3 = "$site_name sentiasa berusaha untuk mengekalkan kesedaran tentang keadaan pasaran yang berubah melalui liputan analisis yang luas terhadap ekosistem aset digital.";


// ==========================================
// RISK WARNING PAGE
// ==========================================
$page_title_risk_warning = "Amaran Risiko | $site_name";
$page_description_risk_warning = "Fahami risiko perdagangan kripto automatik dengan $site_name, termasuk volatiliti pasaran, risiko pelaksanaan, dan pertimbangan peraturan.";
$risk_warning_breadcrumb_name = "Amaran Risiko";
$risk_warning_title = "Amaran Risiko";
$risk_warning_intro = "Memahami risiko adalah langkah pertama ke arah perdagangan yang berkeyakinan.";

$risk_warning_ai_heading = "Bagaimana Sistem AI Kami Membantu Menguruskan Risiko:";
$risk_warning_ai_1 = "<strong>Kecekapan Algoritma & Perdagangan Tanpa Emosi:</strong> Algoritma lanjutan menganalisis isyarat pasaran untuk melaksanakan dagangan secara objektif pada masa yang optimum.";
$risk_warning_ai_2 = "<strong>Strategi Dipacu Data:</strong> Strategi adalah berdasarkan corak pasaran yang disahkan dan analisis masa nyata dan bukannya tekaan.";
$risk_warning_ai_3 = "<strong>Tetapan Fleksibel & Kawalan Penuh:</strong> Laraskan parameter risiko anda pada bila-bila masa. Jejaki semua baki dan dagangan secara telus di papan pemuka anda tanpa yuran tersembunyi dan pengeluaran tanpa sekatan.";

$risk_warning_disclaimer = "<strong>Penafian:</strong> Perdagangan sentiasa membawa risiko. Sistem automatik (termasuk AI) tidak menjamin keuntungan, boleh gagal disebabkan oleh ralat perisian atau peristiwa pasaran yang tidak dijangka, dan memerlukan pemantauan pengguna. Prestasi masa lalu bukan petunjuk keputusan masa hadapan. Platform ini berfungsi semata-mata untuk tujuan maklumat dan pemasaran serta tidak memberikan nasihat kewangan.";

$risk_warning_s1_heading = "1. Risiko Am & Pasaran Mata Wang Kripto";
$risk_warning_s1_intro = "Mata wang kripto adalah aset spekulatif yang sangat tidak menentu yang beroperasi 24/7 dengan penyeliaan peraturan minimum dalam kebanyakan bidang kuasa.";
$risk_warning_s1_1 = "Nilai boleh berubah-ubah secara dramatik dalam tempoh yang singkat, berpotensi membawa kepada kehilangan sepenuhnya modal pelaburan.";
$risk_warning_s1_2 = "Nilai pasaran boleh terjejas teruk oleh kemas kini peraturan, perkembangan teknikal, pelanggaran keselamatan, atau peristiwa makroekonomi yang lebih luas.";
$risk_warning_s1_3 = "Sesetengah aset mungkin kehilangan semua nilai sepenuhnya. Melabur hanya dana yang anda mampu untuk kerugian.";

$risk_warning_s2_heading = "2. Risiko Pelaksanaan, Kecairan & Leveraj";
$risk_warning_s2_1 = "<strong>Volatiliti Pasaran & Kecairan:</strong> Pergerakan harga yang melampau (10–20%+ setiap hari) atau kecairan yang rendah (terutamanya dalam syiling kecil) boleh menyebabkan kelewatan, gangguan platform, dan pelaksanaan yang tergelincir (slippage) yang teruk. Arahan henti rugi tidak dapat menjamin had kerugian di bawah keadaan melampau.";
$risk_warning_s2_2 = "<strong>Risiko Leveraj & Margin:</strong> Produk berleveraj menguatkan kedua-dua keuntungan dan kerugian, yang bermaksud anda boleh kerugian lebih daripada deposit awal anda. Kira-kira 70–80% daripada akaun pelabur runcit kerugian wang semasa berdagang produk berleveraj.";

$risk_warning_s3_heading = "3. Risiko Teknikal, Keselamatan Siber & Pihak Ketiga";
$risk_warning_s3_1 = "<strong>Faktor Teknikal:</strong> Dagangan dalam talian sememangnya melibatkan risiko pemutusan sambungan internet, ralat perkakasan/perisian, dan ketiadaan perkhidmatan.";
$risk_warning_s3_2 = "<strong>Keselamatan siber:</strong> Akaun mata wang kripto kerap menjadi sasaran phising, perisian hasad dan penggodaman. Transaksi tidak dapat dipulihkan; kompromi bukti kelayakan anda boleh mengakibatkan kehilangan kekal.";
$risk_warning_s3_3 = "<strong>Platform Pihak Ketiga:</strong> Laman web ini boleh menghubungkan pengguna ke platform pihak ketiga. Kami tidak mengawal, menyokong, atau menjamin keselamatan, operasi, atau kesolvenan mereka. Sentiasa lakukan usaha wajar anda sendiri sebelum mendepositkan dana pada platform luaran.";

$risk_warning_s4_heading = "4. Peraturan, Cukai & Peruntukan Akhir";
$risk_warning_s4_1 = "<strong>Pematuhan & Cukai Undang-undang:</strong> Rangka kerja pengawalseliaan berbeza secara meluas dan berubah dengan pantas. Pengguna bertanggungjawab sepenuhnya untuk memastikan aktiviti perdagangan mereka mematuhi undang-undang tempatan dan memenuhi tanggungjawab cukai mereka sendiri.";
$risk_warning_s4_2 = "<strong>Tiada Jaminan Keuntungan:</strong> Tiada perdagangan kripto yang \"selamat\" atau bebas risiko. Sebarang angka pulangan atau contoh prestasi adalah hipotesis semata-mata.";
$risk_warning_s4_3 = "<strong>Kesesuaian:</strong> Jika anda tidak memahami sepenuhnya risikonya, bergantung kepada dana penting, atau berdagang dengan wang pinjaman, perdagangan kripto tidak sesuai untuk anda. Rujuk kepada penasihat kewangan berlesen yang bebas jika tidak pasti.";

$risk_warning_contact = "<strong>Hubungi:</strong> Untuk sebarang pertanyaan mengenai kenyataan ini atau mengemukakan pertanyaan, sila hubungi pasukan sokongan pelanggan rasmi kami melalui borang kenalan di tapak web kami.";
$footer_risk_warning = "Amaran Risiko";

$lang_loaded = true;

?>
