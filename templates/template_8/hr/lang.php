<?php
require __DIR__ . '/../lang.php';
$site_lang = 'hr-HR';
$form_language = 'hr'; // matches this page's own language, not the offer's global default

// ============================================================
// HR TRANSLATION OVERRIDES
// Identity/config vars ($site_name, $site_slug, $site_domain, $site_url, $app_price, $app_currency, $site_lang, $country_name, $country_flag_code, $privacy_last_update, $rating_value, $rating_count, $review_count, $form_country, $form_language, $form_phone_country, $form_only_countries, $review_1_author, $review_2_author, $review_3_author, $review_4_author, $quiz_consultant_name) are
// intentionally NOT overridden -- they stay exactly as inherited from the
// root lang.php.
// ============================================================

// Brand / Platform Variables

// Geo-language stats bar fallback content (used by the language-folder pages'
// own "stats" section; the fr/de/it/nl folders override these with native
// translations, the other 19 folders inherit this English fallback)
$stat_1_value = "4M+";
$stat_1_label = "Registriranih Korisnika";
$stat_2_value = "98+";
$stat_2_label = "Podržanih Zemalja";
$stat_3_value = "65+";
$stat_3_label = "Dostupnih Valuta";
$stat_4_value = "24/7";
$stat_4_label = "Pristup Transakcijama";
$stat_5_value = "256-bitno";
$stat_5_label = "Standard Enkripcije";
$stat_6_value = "$500M+";
$stat_6_label = "Ukupni Depoziti Klijenata";

// Keitaro Form Integration Variables (defaults -- overwritten per-launch by
// generate_lang_files(); must stay valid on their own since nothing else in
// this file replaces them for a page that's ever served un-generated)

// 4 Verified Reviews (TZ Item 8)
$review_1_role = "Francuska";
$review_1_text = "Počeo sam s 500 € samo da vidim kako platforma funkcionira. Nakon otprilike tri tjedna, moj se saldo povećao na oko 1120 €. Sučelje je jednostavno za korištenje, a tržišni uvidi pomogli su mi donositi bolje odluke.";
$review_1_badge = "Prijavljeni Povrat +18,4%";

$review_2_role = "Njemačka";
$review_2_text = "Prije sam isprobao nekoliko trgovinskih platformi, ali ova mi je do sada najdraža. Jednostavna je za navigaciju, alati su stvarno korisni, a moje je iskustvo u cjelini vrlo pozitivno.";
$review_2_badge = "Prijavljeni Povrat +19,1%";

$review_3_role = "Italija";
$review_3_text = "Najviše me impresioniralo koliko je sve intuitivno. Registracija je bila brza, nadzorna ploča je dobro organizirana, a platforma mi je trgovanje učinila puno praktičnijim.";
$review_3_badge = "Prijavljeni Povrat +16,8%";

$review_4_role = "Nizozemska";
$review_4_text = "Nisam imao prethodnog iskustva u trgovanju, pa sam počeo s 750 €. Unutar mjesec dana dosegao sam nešto više od 1765 € prateći alate i edukativne resurse. Bio je to odličan način za izgradnju samopouzdanja.";
$review_4_badge = "Prijavljeni Povrat +18,0%";

$review_verified_label = "Verificirani Korisnik";
$reviews_section_title = "Recenzije za $site_name";
$reviews_badge_trustworthy = "Pouzdano";
$reviews_summary_rating = "4,7";
$reviews_summary_count = "189";
$reviews_summary_desc = "Snažna i intuitivna trgovinska platforma s robusnim automatiziranim alatima, analitikom u stvarnom vremenu i sveobuhvatnim edukativnim resursima.";

// CONSULTANT / CHAT QUIZ (TZ Item 13)
$quiz_consultant_role = "Trgovinski Konzultant";
$quiz_text_welcome = "Pozdrav! Ja sam vaš osobni pomoćnik za trgovanje. Riješite kviz od 30 sekundi kako biste otkrili kako automatizirano trgovanje s AI-jem može funkcionirati za vas.";
$quiz_text_q1 = "Jeste li ikada prije trgovali kriptovalutama ili financijskim tržištima?";
$quiz_text_a1_yes = "Da, imam nešto iskustva";
$quiz_text_a1_no = "Ne, potpuni sam početnik";
$quiz_text_q2 = "Koji je vaš primarni financijski cilj s online trgovanjem?";
$quiz_text_q3 = "Preferirate li da AI automatski izvršava trgovine, ili trgovati ručno?";
$quiz_text_a3_yes = "Automatizirano Trgovanje s AI-jem (Preporučeno)";
$quiz_text_a3_no = "Ručno Trgovanje s AI Signalima";
$quiz_text_q4 = "Koji je vaš početni proračun za trgovanje?";
$quiz_text_a4_1 = "250 $ - 500 $";
$quiz_text_a4_2 = "500 $ - 1500 $";
$quiz_text_a4_3 = "1500 $+";
$quiz_text_q5 = "Jeste li spremni otvoriti svoj račun i dobiti puni pristup platformi?";
$quiz_text_a5_yes = "Da, krenimo!";
$quiz_text_a5_no = "Želio bih više informacija";
$quiz_text_loader = "Analiziramo vaše odgovore i pripremamo optimalne parametre za trgovanje...";
$quiz_text_final_ttl = "Postavljanje Vašeg Računa Je Spremno!";
$quiz_text_processing = "Konfiguriranje vašeg pristupa platformi...";
$quiz_text_typing = "piše...";
$quiz_placeholder_fname = "Ime";
$quiz_placeholder_lname = "Prezime";
$quiz_placeholder_email = "Adresa E-pošte";
$quiz_placeholder_phone = "Broj Telefona";
$quiz_btn_submit = "Dovrši Registraciju";

// METADATA (TZ Item 10)
$home_meta_title = "$site_name — Trgovinska Platforma | Službena Stranica";
$home_meta_description = "Službena web stranica $site_name nudi sigurnu platformu za trgovanje kriptovalutama s naprednim trgovinskim alatima, tržišnim uvidima u stvarnom vremenu i korisničkim iskustvom prilagođenim trgovcima.";

// NAVIGATION & HEADER (TZ Item 3, 12)
$nav_about = "O Nama";
$nav_how = "Kako Radi";
$nav_why = "Zašto Trgovati";
$nav_faq = "Česta Pitanja";
$nav_contacts = "Kontaktirajte Nas";
$nav_signin = "Prijava";
$nav_signup = "Registracija";

$mobnav_home = "Početna";
$mobnav_product = "Proizvod";
$mobnav_offer = "Ponuda";
$mobnav_contact = "Kontaktirajte Nas";
$mobnav_faq = "Česta Pitanja";
$mobnav_signup = "Registracija";

// HERO SECTION
$hero_h1 = "Platforma <mark>$site_name</mark>";
$hero_text = "Službena platforma za trgovanje kriptovalutama $site_name";

// LEAD FORM
$form_fname_placeholder = "Ime";
$form_lname_placeholder = "Prezime";
$form_email_placeholder = "E-pošta";
$form_phone_placeholder = "Broj Telefona";
$form_btn_submit = "Registracija";
$form_disclaimer_text = "Unosom svojih osobnih podataka i klikom na gumb prihvaćate <a class='link link-primary' href='privacy.php'>Politiku Privatnosti</a> i <a class='link link-primary' href='conditions.php'>Uvjete Korištenja</a> ove web stranice.";

// SECURITY BADGES
$badge_ssl = "256-bitni SSL";
$badge_payments = "Sigurna Plaćanja";
$badge_2fa = "2FA";
$badge_cold_storage = "98% Cold Storage";
$badge_regulated = "Regulirano";
$badge_traders_trust = "Preko 4M Trgovaca Vjeruje";

// SAFE SECTION (Vos fonds sont en sécurité)
$safe_title = "<mark>Vaša Sredstva Su Sigurna</mark> s $site_name";
$safe_desc = "Enkripcija bankovne razine, verificirani procesori plaćanja i 98% cold storage — vaš je novac zaštićen u svakom koraku.";

$safe_item1_title = "Verificirani Pružatelji Plaćanja";
$safe_item1_desc = "Plaćanja se obrađuju isključivo putem certificiranih pružatelja usluga koji poštuju međunarodne sigurnosne standarde. Podaci vaše kartice nikada se ne pohranjuju na našoj platformi.";
$safe_item1_badge = "Sigurna Plaćanja";

$safe_item2_title = "Dvofaktorska Autentifikacija (2FA)";
$safe_item2_desc = "Dodajte dodatni sloj zaštite svom računu s vremenski ograničenim jednokratnim lozinkama putem SMS-a ili Google Authenticatora.";
$safe_item2_badge = "2FA";

$safe_item3_title = "98% Cold Storage";
$safe_item3_desc = "Velika većina digitalne imovine čuva se u geografski raspoređenim offline cold storage trezorima zaštićenim protokolima s više potpisa.";
$safe_item3_badge = "98% Cold Storage";

$safe_item4_title = "Regulirano Izvršenje";
$safe_item4_desc = "Surađujemo s reguliranim brokerskim kućama i pružateljima likvidnosti diljem svijeta kako bismo održali usklađenost, transparentnost i vrhunsko izvršenje.";
$safe_item4_badge = "Regulirano";

$safe_item5_title = "256-bitna SSL Enkripcija";
$safe_item5_desc = "Sve prijenose podataka između vašeg preglednika i naših poslužitelja štite kriptografski protokoli vojne razine TLS 1.3.";
$safe_item5_badge = "256-bitni SSL";

// FREE GUIDE CTA BANNER (CTA 2)
$guide_cta_title = "Preuzmite Besplatni Vodič";
$guide_cta_subtitle = "«10 Pogrešaka Koje Treba Izbjegavati u Trgovanju Kriptovalutama»";
$guide_cta_btn = "Zatraži Besplatni Vodič";

// TRUST SECTION (Pourquoi les investisseurs font confiance à Ciel Cryptance)
$trust_title = "Zašto Trgovci Vjeruju <mark>$site_name</mark>";
$trust_desc = "Preko 4.000.000 korisnika diljem svijeta bira $site_name zbog njegove pouzdanosti, snažne automatizacije i transparentnog okruženja.";
$trust_subtitle = "Vodeće Prednosti za Modernog Trgovca:";

$trust_item1_title = "Pristup Globalnim Tržištima";
$trust_item1_desc = "Trgujte s preko 100 kriptovaluta, Forex parova, dionica i roba s jedne jedinstvene trgovinske nadzorne ploče.";

$trust_item2_title = "Snažna Zaštita Sredstava";
$trust_item2_desc = "Odvojeni računi, kontinuirane biometrijske provjere i najnovija kibernetička sigurnost štite vaš kapital 24/7.";

$trust_item3_title = "Nula Skrivenih Naknada";
$trust_item3_desc = "Uživajte u kristalno jasnim cijenama. Besplatna registracija, besplatni depoziti, bez naknada za upravljanje platformom i trenutni zahtjevi za isplatu.";

$trust_item4_title = "Odzivna Podrška";
$trust_item4_desc = "Naš predani tim za podršku dostupan je putem live chata, telefona ili e-pošte kako bi pomogao s bilo kojim pitanjima ili tehničkim upitima.";

$trust_market_info_text = "Više informacija o tržišnim uvjetima u 2026.";
$trust_market_info_btn = "Zašto Trgovati";

// START TRADING CTA (CTA 3)
$start_cta_title = "Počnite Trgovati s <span data-local-currency='$app_price'>$app_price $app_currency</span>!";
$start_cta_desc = "Spremni isprobati $site_name? Registrirajte se sada i pridružite se rastućoj zajednici kripto investitora i trgovaca.";
$start_cta_btn = "Registracija";

// FAQ SECTION
$faq_title = "Često Postavljana Pitanja $site_name <mark>(FAQ)</mark>";
$faq_q1 = "Što je $site_name i kako funkcionira?";
$faq_a1 = "To je trgovinska platforma pokretana umjetnom inteligencijom koja radi za vas 24 sata dnevno. Sustav analizira tržišta, uočava prilike i automatski izvršava trgovine. Možete pustiti AI da se pobrine za sve ili prijeći na ručni način rada kako biste trgovali prema vlastitim uvjetima u bilo kojem trenutku.";

$faq_q2 = "Koliko su moj novac i podaci sigurni na $site_name?";
$faq_a2 = "Sigurnost je ugrađena u svaki sloj platforme. Osobni podaci zaštićeni su korištenjem međunarodno priznatih standarda enkripcije i naprednom autentifikacijom računa. Sve financijske transakcije obrađuju se isključivo putem pouzdanih i verificiranih pružatelja usluga plaćanja. Sva vaša trgovinska aktivnost vidljiva je u stvarnom vremenu, tako da uvijek točno znate što se događa s vašim sredstvima.";

$faq_q3 = "Mogu li povući svoju dobit u bilo kojem trenutku?";
$faq_a3 = "Da. Ne postoje ograničenja kada ili koliko često možete povući svoja sredstva sa $site_name. Saldo vašeg računa ostaje pod vašom potpunom kontrolom u svakom trenutku. Isplate se obrađuju putem istih pouzdanih pružatelja usluga plaćanja koji se koriste za depozite, jamčeći brze i sigurne transfere.";

$faq_q4 = "Postoje li skrivene naknade ili dodatni troškovi?";
$faq_a4 = "Nema ih. $site_name ne naplaćuje pretplate, naknade za registraciju niti skrivene troškove. Jedini iznos potreban za početak je minimalni depozit od <span data-local-currency='$app_price'>$app_price $app_currency</span>, koji se izravno pripisuje vašem trgovinskom računu. Prihvaćaju se svi glavni načini plaćanja, uključujući kreditne kartice, bankovne transfere i PayPal.";

$faq_q5 = "Je li potrebno prethodno iskustvo u trgovanju za početak?";
$faq_a5 = "Nikako. $site_name je dizajniran i za potpune početnike i za iskusne trgovce. U potpuno automatiziranom načinu rada, AI se brine o svemu umjesto vas, uključujući tržišnu analizu, generiranje signala i izvršenje naloga. Ako preferirate zadržati kontrolu, možete u bilo kojem trenutku prijeći na ručni način rada.";

$faq_cta_text = "Imate pitanja? Provjerite naša Česta Pitanja ili kontaktirajte naš tim za podršku.";
$faq_cta_faq_btn = "Česta Pitanja";
$faq_cta_contact_btn = "Kontaktirajte Nas";

// NEW TRADER LEAD SECTION (Bottom form)
$lead_title = "Novi u Trgovanju?";
$lead_p1 = "Nakon registracije, primit ćete naš besplatni vodič <mark class='text-on-surface-tertiary-accent'>«10 Pogrešaka Koje Treba Izbjegavati u Trgovanju Kriptovalutama»</mark>. Sadrži jednostavne savjete naših najiskusnijih analitičara koji će vam pomoći izbjeći uobičajene zamke.";
$lead_p2 = "Jednostavno unesite svoje podatke u registracijski obrazac i poslat ćemo ga izravno u vašu pristiglu poštu. Mnogi su trgovci započeli s ovim vodičem i smatrali su ga neprocjenjivim za izgradnju samopouzdanja u svojim prvim trgovinama.";
$lead_form_heading = "Tržište ne čeka — počnite danas!";

// FEATURES TABLE (Fonctionnalités principales)
$features_title = "<mark>Ključne Značajke</mark> Trgovinske Platforme $site_name";
$feature_1_title = "🤖 Tehnologija Platforme";
$feature_1_val = "Napredni trgovinski motor pokretan umjetnom inteligencijom";
$feature_2_title = "💳 Načini Financiranja";
$feature_2_val = "Glavne kreditne kartice, bankovni transferi, PayPal";
$feature_3_title = "📱 Pristup Platformi";
$feature_3_val = "Kompatibilnost s više uređaja (Stolno računalo, Tablet, Mobitel)";
$feature_4_title = "🚀 Stopa Uspješnosti";
$feature_4_val = "85% analitičke preciznosti";
$feature_5_title = "📊 Trgovinski Instrumenti";
$feature_5_val = "Kriptovalute, Forex, Dionice, Roba, Plemeniti Metali, CFD-ovi i još mnogo toga…";
$feature_6_title = "✍️ Postavljanje Računa";
$feature_6_val = "Brza i jednostavna registracija";
$feature_7_title = "📞 Korisnička Podrška";
$feature_7_val = "24/7 profesionalna predana podrška";

// FOOTER DISCLAIMER (TZ Item 21)
$footer_disclaimer_p1 = "$site_name pruža edukativni sadržaj i opće informacije o financijskim tržištima, online trgovanju i digitalnoj imovini. Svi materijali objavljeni na ovoj web stranici, uključujući članke, grafikone, podatke o cijenama, tržišne uvide i analize, namijenjeni su isključivo u informativne svrhe i ne bi ih trebalo smatrati financijskim, investicijskim ili pravnim savjetom. Iako nastojimo održavati naš sadržaj točnim i ažurnim, ne jamčimo njegovu potpunost ili pouzdanost i ne prihvaćamo nikakvu odgovornost za bilo kakve gubitke koji proizlaze iz korištenja ove web stranice.";
$footer_disclaimer_p2 = "Trgovanje kriptovalutama, Forexom, CFD-ovima, dionicama i drugim financijskim instrumentima uključuje značajan rizik i možda nije prikladno za svakog investitora. Tržišni uvjeti mogu se brzo promijeniti, a prošli rezultati ne jamče buduće rezultate. Prije donošenja bilo kakvih investicijskih odluka, pažljivo procijenite svoju financijsku situaciju i toleranciju na rizik, te potražite neovisni stručni savjet ako je potrebno. Ulažite samo novac koji si možete priuštiti izgubiti.";
$footer_copyright = "© " . date('Y') . " $site_name. All rights reserved.";

// FOOTER NAV LINKS
$footnav_about = "O Nama";
$footnav_how = "Kako Radi";
$footnav_why = "Zašto Trgovati";
$footnav_faq = "Česta Pitanja";
$footnav_contacts = "Kontaktirajte Nas";
$footnav_privacy = "Politika Privatnosti";
$footnav_risk = "Upozorenje o Riziku";
$footnav_terms = "Uvjeti Korištenja";
$footnav_product = "Proizvod";
$footnav_offer = "Ponuda";

// ABOUT PAGE VARIABLES
$about_meta_title = "O Nama | $site_name Službena Stranica";
$about_meta_description = "Saznajte više o $site_name, našoj misiji demokratizacije financijskih tržišta kroz AI automatizaciju, i našem sigurnosnom okviru institucionalne razine.";
$about_h1 = "O <mark>$site_name</mark>";
$about_lead = "Osnažujemo trgovce diljem svijeta kroz umjetnu inteligenciju, algoritamsko izvršenje i sigurnost na razini poduzeća.";
$about_mission_title = "Naša Misija";
$about_mission_text = "U $site_name vjerujemo da sofisticirane trgovinske tehnologije trebaju biti dostupne svima, ne samo institucionalnim fondovima. Naša platforma premošćuje jaz između svakodnevnih malih investitora i najsuvremenijih računalnih trgovinskih algoritama.";
$about_tech_title = "Vrhunska Tehnologija";
$about_tech_text = "Naši sustavi procjenjuju preko 100.000 podatkovnih točaka svake sekunde na globalnim kripto, Forex i tržištima dionica. Kombiniranjem prediktivnih modela strojnog učenja s izvršenjem u sub-milisekundama, pružamo iznimno nisko odstupanje (slippage) i pouzdanu izvedbu.";
$about_sec_title = "Sigurnost i Regulatorna Usklađenost";
$about_sec_text = "Povjerenje klijenata temeljni je temelj našeg ekosustava. Implementiramo 256-bitnu TLS enkripciju, stroge biometrijske i 2FA protokole, te pohranjujemo 98% svih digitalnih rezervi u cold storage trezorima.";

// PRODUCT PAGE VARIABLES
$product_meta_title = "Trgovinski Alati i Proizvod | $site_name";
$product_meta_description = "Istražite trgovinski motor i AI mogućnosti koje pokreću $site_name. Automatizirano izvršenje naloga, prediktivna analitika i intuitivne kontrole.";
$product_h1 = "<mark>Proizvod i Značajke</mark> Platforme";
$product_lead = "Otkrijte pametne alate dizajnirane da vam pruže konkurentsku prednost na modernim kripto i financijskim tržištima.";
$product_f1_title = "Automatizirani Trgovinski Motor s AI-jem";
$product_f1_text = "Pustite neuronske algoritme da analiziraju tržišne trendove i izvršavaju optimalne trgovine tijekom cijelog dana bez emocija.";
$product_f2_title = "Analitika Tržišta u Stvarnom Vremenu";
$product_f2_text = "Dubina knjige naloga uživo, automatizirano prepoznavanje uzoraka i praćenje institucionalnog sentimenta na dohvat ruke.";
$product_f3_title = "Paket za Upravljanje Rizikom";
$product_f3_text = "Granularna ograničenja stop-loss i take-profit, kontrole maksimalne dnevne izloženosti i automatizirane mogućnosti zaštite od rizika.";
$product_f4_title = "Dostupnost na Više Platformi";
$product_f4_text = "Trgujte besprijekorno preko preglednika za stolna računala, tableta i pametnih telefona s nultom latencijom i potpunom sinkronizacijom u oblaku.";

// OFFER PAGE VARIABLES
$offer_meta_title = "Posebna Ponuda i Uvjeti | $site_name";
$offer_meta_description = "Otkrijte ekskluzivnu ponudu registracije s $site_name. Krenite s početnim depozitom od $app_price $app_currency i primite predanu podršku.";
$offer_h1 = "Ekskluzivna <mark>Trgovinska Ponuda</mark>";
$offer_lead = "Započnite svoje trgovinsko putovanje danas s konkurentnim prednostima i predanim individualnim uvođenjem u račun.";
$offer_step1_title = "1. Brza Registracija";
$offer_step1_text = "Ispunite naš kratki registracijski obrazac kako biste osigurali pristup svom osobnom računu za manje od 2 minute.";
$offer_step2_title = "2. Financirajte Svoj Trgovinski Saldo";
$offer_step2_text = "Uplatite standardni minimum od $app_price $app_currency koristeći kreditnu karticu, bankovni transfer ili e-novčanike. 100% vaših sredstava ide izravno u vaš trgovinski saldo.";
$offer_step3_title = "3. Aktivirajte Trgovanje s AI-jem";
$offer_step3_text = "Odaberite automatizirani ili asistirani način rada, odaberite svoje preferirane parove imovine i počnite trgovati s punim mogućnostima platforme.";

// CONTACTS PAGE VARIABLES
$contacts_meta_title = "Kontaktirajte Podršku | $site_name";
$contacts_meta_description = "Stupite u kontakt s $site_name timom. 24/7 korisnička podrška, tehnička pomoć i upiti o računu.";
$contacts_h1 = "Kontaktirajte <mark>Korisničku Podršku</mark>";
$contacts_lead = "Naš predani međunarodni tim za podršku spreman vam je pomoći 24 sata dnevno, 7 dana u tjednu.";
$contacts_info_title = "Službeni Upiti";
$contacts_info_text = "Za opće upite, verifikaciju računa ili tehničku podršku, kontaktirajte nas putem naših verificiranih komunikacijskih kanala.";
$contacts_support_hours = "24/7 Podrška Putem Live Chata i E-pošte";

// FAQ PAGE VARIABLES
$faq_meta_title = "Česta Pitanja i Baza Znanja | $site_name";
$faq_meta_description = "Pronađite odgovore na često postavljana pitanja o $site_name računima, depozitima, isplatama i automatiziranom trgovanju s AI-jem.";
$faq_h1 = "<mark>Česta Pitanja</mark> $site_name";
$faq_lead = "Jasni odgovori na najčešća pitanja vezana uz sigurnost platforme, isplate i automatizirano trgovanje.";

// PRIVACY POLICY PAGE VARIABLES
$privacy_meta_title = "Politika Privatnosti | $site_name";
$privacy_meta_description = "Pročitajte našu sveobuhvatnu Politiku Privatnosti kako biste razumjeli kako $site_name prikuplja, štiti i upravlja vašim osobnim podacima.";
$privacy_h1 = "Politika Privatnosti";
$privacy_p1 = "Ova Politika Privatnosti opisuje kako $site_name prikuplja, koristi i otkriva informacije kada posjetite našu web stranicu, registrirate račun ili koristite naš trgovinski softver.";
$privacy_sec1_title = "1. Prikupljanje i Korištenje Podataka";
$privacy_sec1_text = "Prikupljamo potrebne kontaktne podatke (ime, adresu e-pošte, broj telefona) kako bismo uspostavili vaš račun, povezali vas s verificiranim brokerskim partnerima i verificirali identitet u skladu s međunarodnim KYC i AML standardima.";
$privacy_sec2_title = "2. Kolačići i Tehnologije Praćenja";
$privacy_sec2_text = "Koristimo esencijalne i analitičke kolačiće za poboljšanje performansi web stranice, personalizaciju korisničkog iskustva i praćenje obrazaca prometa. Postavke kolačića preglednika možete prilagoditi u bilo kojem trenutku.";
$privacy_sec3_title = "3. Sigurnost Podataka i GDPR Prava";
$privacy_sec3_text = "Svi korisnički podaci šifrirani su tijekom prijenosa i u mirovanju koristeći kriptografske protokole bankovne razine. Prema Općoj Uredbi o Zaštiti Podataka (GDPR), korisnici imaju pravo zatražiti pristup, ispravak ili brisanje svojih osobnih zapisa.";

// TERMS OF USE PAGE VARIABLES
$terms_meta_title = "Uvjeti Korištenja | $site_name";
$terms_meta_description = "Pregledajte službene Uvjete i Odredbe koji uređuju korištenje platforme $site_name i povezanih usluga.";
$terms_h1 = "Uvjeti Korištenja";
$terms_p1 = "Pažljivo pročitajte ove Uvjete Korištenja prije pristupa ili korištenja $site_name. Registracijom računa slažete se biti obvezani ovim odredbama.";
$terms_sec1_title = "1. Prihvatljivost Korisnika";
$terms_sec1_text = "Morate imati najmanje 18 godina i boraviti u jurisdikciji gdje su online trgovanje i interakcije s kriptovalutama zakonski dopušteni. Odgovorni ste za osiguravanje usklađenosti s lokalnim zakonima.";
$terms_sec2_title = "2. Registracija Računa i Sigurnost";
$terms_sec2_text = "Slažete se pružiti istinite, točne i potpune informacije tijekom registracije. Isključivo ste odgovorni za održavanje povjerljivosti svojih pristupnih podataka.";
$terms_sec3_title = "3. Ograničenje Odgovornosti";
$terms_sec3_text = "$site_name pruža informativne usluge i usluge usmjeravanja softvera. Ne pružamo personalizirane financijske savjete niti jamčimo profitabilnost trgovanja. Trgovanje na financijskim tržištima nosi inherentni kapitalni rizik.";

// RISK WARNING PAGE VARIABLES (TZ Item 19: Exact 4 sections)
$risk_meta_title = "Upozorenje o Riziku i Pravna Obavijest | $site_name";
$risk_meta_description = "Važno otkrivanje rizika vezano uz trgovanje CFD-ovima, Forexom i kriptovalutama na $site_name. Pažljivo pročitajte prije ulaganja.";
$risk_h1 = "Upozorenje o Riziku";
$risk_sec1_title = "1. Obavijest o Visokorizičnom Ulaganju i Volatilnosti";
$risk_sec1_text = "Trgovanje kriptovalutama, ugovorima za razliku (CFD-ovi), stranom valutom (Forex) i drugom financijskom imovinom uključuje značajan rizik gubitka i nije prikladno za sve investitore. Tržišta kriptovaluta iznimno su volatilna, a cijene su podložne oštrim oscilacijama kao odgovor na regulatorne najave, makroekonomske promjene ili tržišni sentiment. Nikada ne biste trebali ulagati novac koji si ne možete priuštiti u potpunosti izgubiti.";
$risk_sec2_title = "2. Neovisni Financijski Savjet";
$risk_sec2_text = "Svi materijali, alati, algoritamski signali i komentari pruženi na $site_name namijenjeni su isključivo u informativne, edukativne i marketinške svrhe. Nijedan sadržaj na ovoj web stranici ne predstavlja personalizirani investicijski, pravni ili financijski savjet. Prije izvršavanja bilo kakvih trgovina, trebali biste provesti neovisno istraživanje ili se posavjetovati s licenciranim financijskim savjetnikom.";
$risk_sec3_title = "3. Regulatorna i Geografska Ograničenja";
$risk_sec3_text = "Određene jurisdikcije ograničavaju ili zabranjuju maloprodajno trgovanje CFD-ovima i kriptovalutama. Isključiva je odgovornost korisnika provjeriti je li pristup $site_name i korištenje partnerskih trgovinskih brokerskih kuća zakonito prema njihovom lokalnom pravnom okviru.";
$risk_sec4_title = "4. Tehnologija Platforme i Tržišno Izvršenje";
$risk_sec4_text = "Automatizirani trgovinski alati, algoritmi umjetne inteligencije i tržišni pokazatelji ne jamče profite niti eliminiraju tržišne rizike. Tehnički prekidi, mrežna latencija, sistemski ispadi i nedostatak tržišne likvidnosti mogu rezultirati kašnjenjima u izvršenju trgovina ili odstupanjem (slippage).";

// SIGN UP / LOGIN PAGE VARIABLES
$sign_meta_title = "Registracija / Prijava | $site_name";
$sign_meta_description = "Otvorite svoj besplatni račun na $site_name kako biste pristupili pametnim automatiziranim trgovinskim alatima, tržišnim signalima i sigurnim opcijama financiranja.";
$sign_h1 = "Registrirajte se na <mark>$site_name</mark>";
$sign_lead = "Pridružite se tisućama trgovaca i dobijte trenutni pristup našem trgovinskom motoru s AI-jem.";

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
$hero_form_heading = "Otvorite svoj besplatni račun";
$hero_form_button = "Registracija";
$form_name_placeholder = "Unesite svoje ime";
$form_surname_placeholder = "Unesite svoje prezime";
$form_disclaimer_prefix = "Unosom svojih osobnih podataka i klikom na gumb slažete se s";
$form_privacy_link_label = "Politikom Privatnosti";
$form_disclaimer_and = "i";
$form_terms_link_label = "Uvjetima Korištenja";
$form_disclaimer_of_site = "ove web stranice.";

// -- partners strip --
$partners_label = "Povjerenje vodećih partnera";

// -- "what is" section --
$whatis_label = "O Platformi";
$whatis_title = "Što je $site_name?";
$whatis_intro = "$site_name je službena online trgovinska platforma, dizajnirana da učini kripto jednako jednostavnim kao svakodnevno online bankarstvo.";
$whatis_icon_1_title = "Analiza Pokretana AI-jem";
$whatis_icon_1_text = "Napredni algoritmi rješavaju složenost tržišta umjesto vas.";
$whatis_icon_2_title = "Trenutno Izvršenje";
$whatis_icon_2_text = "Tisuće podatkovnih točaka obrađuju se svake sekunde — trgovine bez kašnjenja.";
$whatis_icon_3_title = "Jednostavna, Intuitivna Nadzorna Ploča";
$whatis_icon_3_text = "Provjerite svoj saldo i otvorene pozicije na prvi pogled, u bilo kojem trenutku.";
$whatis_icon_4_title = "Jednostavan Pristup, Bez Prepreka";
$whatis_icon_4_text = "Počnite s minimalnim depozitom od samo $app_price $app_currency — bez skrivenih naknada.";
$whatis_cta_text = "Želite li saznati više o našem timu i našem proizvodu?";
$whatis_cta_link = "O Nama";

// -- stats section heading (per-stat label/value already set above) --
$stats_label = "$site_name u Brojkama";
$stats_title = "Brojevi Koji Govore Glasnije od Obećanja";

// -- key benefits section --
$benefits_label = "Ključne Prednosti";
$benefits_title = "Glavne Prednosti $site_name";
$benefit_1_title = "Platforma Prilagođena Početnicima";
$benefit_1_text = "Intuitivni grafikoni i vodiči korak po korak pomažu vam da počnete bez osjećaja preopterećenosti. Kriptovalutama možete trgovati s povjerenjem od prvog dana.";
$benefit_2_title = "Službeno i Regulirano";
$benefit_2_text = "$site_name je licencirana i pridržava se primjenjivih financijskih propisa. Koristimo SSL enkripciju i dvofaktorsku autentifikaciju za zaštitu svakog računa.";
$benefit_3_title = "Jednostavan Pristup, Bez Prepreka";
$benefit_3_text = "S minimalnim depozitom od samo $app_price $app_currency, svatko može početi. Nije potrebna velika početna investicija — počnite malo i povećavajte svoj ulog kako raste vaše samopouzdanje.";
$benefit_4_title = "Transparentne Naknade";
$benefit_4_text = "Nikada nećete vidjeti skrivene naknade. Primjenjujemo samo minimalne naknade za transakcije ili isplate gdje je primjenjivo, tako da uvijek točno znate što plaćate.";
$benefit_5_title = "24/7 Pristup Trgovanju";
$benefit_5_text = "Trgujte prema vlastitom rasporedu, danju ili noću. $site_name funkcionira jednako dobro na stolnom računalu kao i na mobitelu, tako da možete ostati povezani s tržištem gdje god se nalazili.";
$benefit_6_title = "Lokalna Korisnička Podrška";
$benefit_6_text = "Naš tim za podršku dostupan je putem chata, telefona ili e-pošte. Pravi ljudi su tu da vam pomognu na vašem jeziku, kad god vam zatreba.";
$benefits_trust_title = "Povjerenje Korisnika Diljem Svijeta";
$benefits_trust_text = "Zato toliko korisnika kriptovaluta vjeruje $site_name. Tisuće trgovaca već koriste $site_name, a novi se računi pridružuju svaki dan.";
$benefits_cta = "Registracija";
$benefits_badge_1 = "256-bitni SSL";
$benefits_badge_2 = "Sigurna Plaćanja";
$benefits_badge_3 = "2FA";

// -- security section --
$security_label = "Sigurnost";
$security_title = "Vaša Sredstva Su Sigurna s $site_name";
$security_subtitle = "Enkripcija bankovne razine, verificirana plaćanja i 98% cold storage — vaš je novac zaštićen u svakom koraku.";
$security_1_title = "Verificirani Pružatelji Plaćanja";
$security_1_text = "Plaćanja se obrađuju isključivo od strane certificiranih pružatelja usluga koji zadovoljavaju međunarodne sigurnosne standarde. Vaši podaci o plaćanju nikada se ne pohranjuju na našim poslužiteljima.";
$security_2_title = "256-bitna SSL Enkripcija";
$security_2_text = "Svi podaci koji se razmjenjuju između vašeg uređaja i naše platforme šifrirani su 256-bitnim TLS-om. Nijedna treća strana ne može ih presresti ili pročitati.";
$security_3_title = "98% Cold Storage";
$security_3_text = "98% imovine čuva se u offline novčanicima, bez internetske veze. Nitko im ne može pristupiti daljinski.";
$security_4_title = "Višefaktorska Autentifikacija";
$security_4_text = "Samo vi možete pristupiti svom računu. Svaka prijava verificira se drugim korakom koji kontrolirate samo vi.";
$security_5_title = "Praćenje Računa";
$security_5_text = "Svaka prijava, transakcija ili promjena postavki pokreće trenutnu obavijest, tako da uvijek znate što se događa na vašem računu.";
$security_6_title = "Zaštita Lozinke";
$security_6_text = "Lozinke se pohranjuju u nečitljivom, nepovratnom obliku. Tehnički nemamo način vidjeti vašu lozinku.";
$security_cta_title = "Preuzmite Besplatni Vodič!";
$security_cta_text = "Preuzmite naš besplatni vodič za početnike i počnite trgovati danas.";
$security_cta_button = "Registracija";
$security_badge_1 = "98% Cold Storage";
$security_badge_2 = "Verificirana Plaćanja";
$security_badge_3 = "Šifrirano";

// -- how it works section --
$how_label = "Kako Radi";
$how_title = "Kako Radi";
$how_1_title = "Registrirajte se";
$how_1_text = "Kliknite gumb \"Otvori Račun\" i ispunite registracijski obrazac svojim podacima (ime, e-pošta i broj telefona). Traje samo minutu.";
$how_2_title = "Uplatite Sredstva";
$how_2_text = "Zatim financirajte svoj račun. Minimalni depozit je samo $app_price $app_currency. Možete koristiti kreditnu/debitnu karticu, lokalni bankovni transfer ili popularne e-novčanike. (Savjet: počnite s iznosom s kojim se osjećate ugodno.)";
$how_3_title = "Počnite Trgovati";
$how_3_text = "Kada su vaša sredstva na vašem računu, spremni ste za trgovanje. Odaberite imovinu koju želite (kao što su BTC, SOL ili USDT) i odlučite se za svoju strategiju.";
$how_cta_label = "Kako Radi";
$how_cta_text = "Trebate li više informacija o tome kako usluga funkcionira?";
$how_cta_link = "Kako Radi";

// -- trust reasons section --
$trust_label = "Zašto Trgovati s Nama";
$trust_intro = "Pridružite se tisućama korisnika koji već trguju s $site_name.";
$trust_1_title = "Potpuno Regulirano";
$trust_1_text = "$site_name je propisno registrirana i pridržava se primjenjivih financijskih propisa. Poslujemo prema strogim pravilima kako bismo osigurali vašu sigurnost.";
$trust_2_title = "Napredna Sigurnost";
$trust_2_text = "Svi vaši podaci i sredstva su šifrirani i osigurani. Provodimo strogu zaštitu računa putem SSL enkripcije i dvofaktorske autentifikacije.";
$trust_3_title = "Transparentne Operacije";
$trust_3_text = "Nikada ne skrivamo naše naknade i nikada ne dodajemo iznenađujuća pravila. Prije svake transakcije vidite točno koje se naknade primjenjuju.";
$trust_4_title = "Odzivna Podrška";
$trust_4_text = "Naš tim za podršku dostupan je putem chata, telefona ili e-pošte kako bi odgovorio na vaša pitanja ili riješio bilo kakav problem.";
$trust_cta_text = "Više informacija o tržišnim uvjetima";
$trust_cta_link = "Zašto Trgovati";

// -- testimonials section heading (individual reviews already set above) --
$testimonials_label = "Svjedočanstva";
$testimonials_title = "Povjerenje Više od 4M Trgovaca";

// -- FAQ section heading --
$faq_label = "Česta Pitanja";

// -- lead magnet CTA block --
$leadmagnet_title = "Novi u Trgovanju?";
$leadmagnet_text1 = "Nakon što se registrirate, primit ćete naš besplatni vodič,";
$leadmagnet_quote = "„10 Pogrešaka Koje Treba Izbjegavati Prilikom Trgovanja Kriptovalutama”";
$leadmagnet_text2 = "prepun jednostavnih savjeta naših najiskusnijih analitičara koji će vam pomoći izbjeći najčešće pogreške.";
$leadmagnet_text3 = "Jednostavno unesite svoje podatke tijekom";
$leadmagnet_link = "registracije";
$leadmagnet_text4 = "i poslat ćemo ga izravno u vašu pristiglu poštu. Mnogi su investitori započeli s ovim vodičem i kažu da je napravio pravu razliku.";
$leadmagnet_text5 = "Tržište ne čeka — počnite danas!";

// -- pre-about CTA band --
$pre_about_title = "Spremni Preuzeti Kontrolu nad Svojim Trgovanjem?";
$pre_about_text = "Pridružite se $site_name danas i otkrijte platformu izgrađenu za jasnoću, sigurnost i rezultate.";
$pre_about_button = "Registracija";

// -- pretest (quiz teaser) badges/CTA --
$pretest_title = "Počnite Trgovati s $app_price $app_currency!";
$pretest_text = "Spremni isprobati $site_name? Registrirajte se sada i pridružite se rastućoj zajednici kripto investitora i trgovaca.";
$pretest_button = "Registracija";
$pretest_badge_1 = "Sigurno";
$pretest_badge_2 = "Regulirano";
$pretest_badge_3 = "Povjerenje Više od 4M Trgovaca";

// -- about page --
$about_label = "O Nama";
$about_title = "O $site_name";
$about_intro = "$site_name vam ne daje samo trgovinsku platformu — pomažemo vam trgovati s jasnoćom i povjerenjem.";
$about_text_1 = "$site_name je službena online trgovinska platforma, dizajnirana da učini trgovanje kriptovalutama dostupnim i početnicima i iskusnim trgovcima.";
$about_text_2 = "Kombiniramo tržišnu analizu pokretanu umjetnom inteligencijom s jednostavnom, transparentnom nadzornom pločom, tako da uvijek točno znate na čemu ste.";
$about_text_3 = "Svaki dio platforme izgrađen je oko jasnoće: bez skrivenih naknada, bez zbunjujućeg žargona, samo jasne informacije na temelju kojih možete djelovati.";
$about_text_4 = "Naša vam platforma štedi sate nagađanja i štiti vas od neprozirnih alternativa niske kvalitete. Vjerujemo da bi trgovanje trebalo biti izgrađeno na preciznosti, a ne na sreći.";

// -- contact page --
$contact_label = "Kontaktirajte Nas";
$contact_title = "Kontaktirajte $site_name";
$contact_subtitle = "Imate pitanje ili trebate pomoć? Ovdje smo da vas savjetujemo i vodimo.";
$contact_text = "U $site_name vjerujemo da uspjeh u trgovanju nema nikakve veze sa srećom — oslanja se na preciznost, predviđanje i prave alate.";
$contact_form_text = "Jednostavno ispunite obrazac ispod, a član našeg tima uskoro će vam se javiti.";
$contact_form_button = "Pošalji Poruku";

// -- footer navigation labels (geo-page footer, TZ items 12/16/18) --
$footnav_col_pages = "Stranice";
$footnav_col_support = "Podrška";
$footnav_col_legal = "Pravno";
$footnav_col_company = "Tvrtka";
$footnav_home = "Početna";
$footnav_sitemap = "Karta Stranice";
$footnav_conditions = "Uvjeti Korištenja";
$footnav_contact = "Kontaktirajte Nas";
$footnav_signup = "Registracija";
$footer_risk_warning = "Upozorenje o Riziku";

// -- geo-page footer legal disclaimer (single-paragraph variant used by
// the geo template's own footer layout; the two-paragraph TZ item 21
// text above -- $footer_disclaimer_p1/$footer_disclaimer_p2 -- covers
// the root pages) --
$footer_disclaimer = "$site_name pruža edukativni sadržaj i opće informacije o financijskim tržištima, online trgovanju i digitalnoj imovini. Svi materijali objavljeni na ovoj web stranici namijenjeni su isključivo u informativne svrhe i ne bi ih trebalo smatrati financijskim, investicijskim ili pravnim savjetom. Trgovanje uključuje značajan rizik i možda nije prikladno za svakog investitora. Ulažite samo novac koji si možete priuštiti izgubiti.";

// ============================================================
// Geo-language SUBPAGE fallback content (TZ item 16 cont.). Same
// rationale as the block above: conditions/contacts/faq/offer/
// privacy/product/risk-warning/sign.php share templates across the
// bg/cs/da/... stub folders and reference these vars directly.
// English fallback so every geo folder's subpages render complete.
// ============================================================

// -- shared form aliases (service-page forms reuse the hero disclaimer) --
$form_disclaimer_risk_note = "Pročitajte također naše";
$form_text = $form_disclaimer_prefix;
$form_text_privacy = $form_privacy_link_label;
$form_text_privacy_and = $form_disclaimer_and;
$form_text_conditions = $form_terms_link_label;
$form_text_conditions_of = $form_disclaimer_of_site;
$form_text_risk_warning_note = $form_disclaimer_risk_note;
$form_submit = "Registracija";

// -- generic breadcrumbs (sign-up / product pages) --
$breadcrumb_home = "Početna";
$breadcrumb_current = "Registracija / Prijava";
$breadcrumb_product = "Proizvod";

// -- sign-up page official heading --
$official_heading = "Registrirajte se na Službenoj Platformi {$site_name}™";
$official_description = "Otvorite svoj besplatni račun kako biste počeli trgovati kriptovalutama na sigurnoj, transparentnoj platformi.";

// -- product page: analytics banner --
$analytics_heading = "Trgujte Pametnije s $site_name";
$analytics_description = "Dobijte jasne tržišne podatke u stvarnom vremenu i uvide pokretane umjetnom inteligencijom. Donosite informirane trgovinske odluke s povjerenjem.";

// -- product page: dashboard preview --
$app_main_heading = "Vaša Trgovinska Nadzorna Ploča";
$app_feature_1_title = "Tržišni Podaci Uživo";
$app_feature_1_text = "Cijene i grafikoni u stvarnom vremenu na dohvat ruke";
$app_feature_2_title = "Praćenje Portfelja";
$app_feature_2_text = "Sveobuhvatne metrike o vašem saldu i uspješnosti";
$app_feature_3_title = "Mobilni Prikaz";
$app_feature_3_text = "Optimizirano za mobilne preglednike";
$app_feature_4_title = "Popisi Praćenja";
$app_feature_4_text = "Pratite imovinu koju nadzirete";

// -- product page: capabilities --
$capabilities_main_title = "Što Očekivati";
$capabilities_feature_1_title = "Signali Pokretani AI-jem";
$capabilities_feature_1_text = "Napredni algoritmi analiziraju tržišne signale i otkrivaju prilike tijekom cijelog dana.";
$capabilities_feature_2_title = "Brza Registracija";
$capabilities_feature_2_text = "Registrirajte se za nekoliko minuta uz siguran, jednostavan postupak registracije.";
$capabilities_feature_3_title = "Verificirana Sigurnost";
$capabilities_feature_3_text = "256-bitna SSL enkripcija, 2FA i 98% cold storage štite vaša sredstva u svakom koraku.";
$capabilities_feature_4_title = "Kontinuirana Podrška";
$capabilities_feature_4_text = "Dobijte podršku od našeg tima u svakom koraku — od registracije do vaše prve trgovine.";

// -- product page: stats strip --
$products_stats_currencies_v = "65+";
$products_stats_currencies_l = "Dostupnih Valuta";
$products_stats_users_v = "4M+";
$products_stats_users_l = "Registriranih Korisnika";
$products_stats_volume_v = "98+";
$products_stats_volume_l = "Podržanih Zemalja";
$products_stats_countries_v = "24/7";
$products_stats_countries_l = "Pristup Transakcijama";

// -- product page: 3-step strip --
$step_1 = "Otvorite račun";
$step_2 = "Uplatite sredstva";
$step_3 = "Počnite trgovati sa strategijom koja vam odgovara";

// -- shared "last update" label (privacy page) --
$last_update = "Posljednje ažuriranje";

// -- FAQ page --
$faq_page_meta_title = "Česta Pitanja | Podrška $site_name";
$faq_page_meta_description = "Odgovori na često postavljana pitanja o tome kako $site_name funkcionira, cijenama i početku rada.";
$faq_page_title = "Česta Pitanja";
$faq_page_breadcrumb_home = "Početna";
$faq_page_breadcrumb_current = "Česta Pitanja";
$faq_page_help_title = "Kako vam možemo pomoći?";
$faq_1_q = "Kako da počnem?";
$faq_1_a = "Otvorite svoj račun, verificirajte svoju adresu e-pošte i izvršite svoj prvi depozit — planovi počinju od samo $app_price $app_currency.";
$faq_2_q = "Jesu li moj novac i podaci sigurni? Je li $site_name pouzdana?";
$faq_2_a = "Da. Vaši podaci zaštićeni su standardnom industrijskom 256-bitnom enkripcijom, a vaša su sredstva osigurana dvofaktorskom autentifikacijom i 98% cold storage-om.";
$faq_3_q = "Mogu li zatvoriti svoj račun ili povući sredstva u bilo kojem trenutku?";
$faq_3_a = "Da. Nema ograničenja na isplate. Kontaktirajte naš tim za podršku u bilo kojem trenutku — pomoći ćemo vam s vašim računom ili brzo obraditi vašu isplatu.";
$faq_4_q = "Kako znam je li ova platforma prava za mene?";
$faq_4_a = "$site_name je izgrađena i za apsolutne početnike i za iskusne trgovce koji žele trgovati učinkovitije — svaki alat na platformi dizajniran je da vas drži informiranima i pod kontrolom.";
$faq_5_q = "Trebam li iskustvo u trgovanju za početak?";
$faq_5_a = "Prethodno iskustvo nije potrebno. Naš način rada pokretan umjetnom inteligencijom rješava analizu umjesto vas, a možete prijeći na ručni način rada u bilo kojem trenutku ako želite više kontrole.";

// -- contacts page --
$contacts_h3 = "Za tehnička pitanja ili pitanja o vašem računu, kontaktirajte nas putem e-pošte";

// -- offer page (meta title/description already defined above) --
$offer_breadcrumb_home = "Početna";
$offer_breadcrumb_current = "Ponuda";
$offer_cta_h1 = "Počnite Trgovati Danas";
$offer_cta_text = "Spremno za nekoliko minuta: registrirajte se, financirajte svoj račun i počnite trgovati kriptovalutama na sigurnoj, reguliranoj platformi.";
$offer_how_it_works_title = "Kako Radi";
$offer_official_platform_title = "Ovo Je Službena Trgovinska Platforma {$site_name}™";
$offer_official_platform_text = "Pouzdan, transparentan način trgovanja kriptovalutama — s uvidima u stvarnom vremenu i potpunom kontrolom.";

// -- conditions of use page --
$conditions_meta_title = "Uvjeti Korištenja | $site_name";
$conditions_meta_description = "Pročitajte službene Uvjete Korištenja za web stranicu i trgovinsku platformu $site_name.";
$conditions_breadcrumb_home = "Početna";
$conditions_breadcrumb_current = "Uvjeti Korištenja";
$conditions_h1 = "Uvjeti Korištenja";
$conditions_s1_title = "1. Općenito";
$conditions_s1_text = "Ova web stranica pruža pristup online platformi za trgovanje kriptovalutama. Korištenje platforme predstavlja potpuno prihvaćanje ovih uvjeta i naše Politike Privatnosti.";
$conditions_s2_title = "2. Prihvatljivost";
$conditions_s2_text = "Korisnici moraju imati najmanje 18 godina i imati punu pravnu sposobnost u svojoj nadležnoj jurisdikciji.";
$conditions_s3_title = "3. Ograničen Pristup";
$conditions_s3_text = "Pristup može biti ograničen u jurisdikcijama gdje lokalni propisi zabranjuju vrstu trgovinske usluge koju nudimo.";
$conditions_s4_title = "4. Zabranjena Uporaba";
$conditions_s4_text = "Korisnici ne smiju zloupotrebljavati sustav, pokušavati neovlašteni pristup našim sustavima ili obrnuto inženjerstvo našeg softvera.";
$conditions_s5_title = "5. Intelektualno Vlasništvo";
$conditions_s5_text = "Sav izvorni kod, korisnička sučelja i imovina brenda ostaju isključivo vlasništvo operativne tvrtke.";
$conditions_s6_title = "6. Odgovornost";
$conditions_s6_text = "Alati platforme pružaju se \"kakvi jesu\". Ne preuzimamo odgovornost za rezultate koji proizlaze iz vlastitih trgovinskih odluka korisnika.";
$conditions_s7_title = "7. Usluge Trećih Strana";
$conditions_s7_text = "Integracije s pružateljima usluga plaćanja trećih strana odvijaju se putem sigurnih veza. Za depozite i isplate, korisnici izravno posluju s odabranim pružateljem usluga.";
$conditions_s8_title = "8. Vanjske Poveznice";
$conditions_s8_text = "Poveznice na vanjske resurse pružaju se samo radi praktičnosti. Ne podržavamo niti jamčimo za bilo koji vanjski softver.";
$conditions_s9_title = "9. Razno";
$conditions_s9_text = "Zadržavamo pravo izmjene ovih uvjeta ili usluge u bilo kojem trenutku, s promjenama objavljenima na web stranici.";

// -- privacy policy page (meta title/description already defined above) --
$privacy_breadcrumb_home = "Početna";
$privacy_breadcrumb_current = "Politika Privatnosti";
$privacy_page_h1 = "Politika Privatnosti";
$privacy_intro = "Poštujemo vašu privatnost i obrađujemo osobne podatke u potpunoj usklađenosti s međunarodnim standardima i europskim GDPR-om.";
$privacy_transparency_title = "Transparentnost";
$privacy_transparency_text = "Jasno objavljujemo kako se obrađuju operativni telemetrijski podaci. Kontaktirajte podršku za dodatne pojedinosti.";
$privacy_usage_title = "Korištenje Podataka";
$privacy_usage_text = "Podaci se koriste isključivo za pružanje pristupa, osiguravanje sesija i ispunjavanje obveza usklađenosti.";
$privacy_rights_short_title = "Vaša Prava";
$privacy_rights_short_text = "Zadržavate puna prava pregledavati, ažurirati ili zatražiti brisanje svojih osobnih podataka.";
$privacy_security_title = "Sigurnost";
$privacy_security_text = "Koristimo AES-256 enkripciju i izolaciju baze podataka za zaštitu operativnih telemetrijskih podataka.";
$privacy_s1_title = "1. Prikupljanje Podataka";
$privacy_s1_text = "Prikupljamo telemetriju korištenja (IP adresa, sistemski parametri, vrsta preglednika), kao i verifikacijske podatke koje dostavljaju korisnici.";
$privacy_s2_title = "2. Pravna Osnova";
$privacy_s2_text = "Obrada se temelji na izričitom pristanku korisnika, regulatornim zahtjevima usklađenosti i pružanju usluge.";
$privacy_s3_title = "3. Dijeljenje Podataka";
$privacy_s3_text = "Podaci se nikada ne komercijaliziraju. Otkrivanja su ograničena na ovlaštene subjekte za obračun i tehničke partnere prema sporazumu o povjerljivosti (NDA).";
$privacy_s4_title = "4. Kolačići";
$privacy_s4_text = "Esencijalni kolačići koriste se za autentifikaciju sesije i optimizaciju sučelja.";
$privacy_google_choices = 'Upravljajte svojim postavkama praćenja putem <a href="http://www.google.com/settings/ads" target="_blank" rel="noopener">Google postavki oglasa</a> ili koristite <a href="https://tools.google.com/dlpage/gaoptout" target="_blank" rel="noopener">Google Analytics dodatak za odjavu</a>. Također možete pregledati vlastite prakse podataka tvrtke Google u njihovoj <a href="https://www.google.com/intl/en/policies/privacy/" target="_blank" rel="noopener">Politici Privatnosti</a>.';
$privacy_s5_title = "5. Zadržavanje Podataka";
$privacy_s5_text = "Osobni podaci zadržavaju se samo onoliko dugo koliko je potrebno za ispunjavanje zahtjeva za pristup sustavu.";
$privacy_s6_title = "6. Međunarodni Prijenosi";
$privacy_s6_text = "Prekogranični prijenosi podataka odvijaju se isključivo putem šifriranih kanala i putem standardnih ugovornih klauzula.";
$privacy_s7_title = "7. Poveznice Trećih Strana";
$privacy_s7_text = "Nismo odgovorni za prakse privatnosti vanjskih usluga trećih strana povezanih s naše web stranice.";
$privacy_s8_title = "8. Ažuriranja";
$privacy_s8_text = "Ova se politika može povremeno revidirati kako bi odražavala sistemske ili pravne promjene.";
$privacy_rights_title = "Vaša Prava";
$privacy_rights_text = "Korisnici imaju pravo zatražiti pristup, ispravak, ograničenu obradu ili potpuno brisanje svojih pohranjenih podataka.";

// -- risk warning page --
$page_title_risk_warning = "Upozorenje o Riziku | $site_name";
$page_description_risk_warning = "Razumijte rizike trgovanja i kako vam $site_name pomaže sigurno njima upravljati.";
$risk_warning_breadcrumb_home = "Početna";
$risk_warning_breadcrumb_current = "Upozorenje o Riziku";
$risk_warning_title = "Upozorenje o Riziku";
$risk_warning_intro = "Razumijevanje rizika prvi je korak prema samopouzdanom trgovanju.";
$risk_warning_ai_heading = "Kako naš AI sustav pomaže u upravljanju rizikom:";
$risk_warning_ai_1 = "<strong>Algoritamska Učinkovitost i Trgovanje Bez Emocija:</strong> Napredni algoritmi analiziraju tržišne signale kako bi objektivno izvršili trgovine u optimalnom trenutku.";
$risk_warning_ai_2 = "<strong>Strategije Vođene Podacima:</strong> Strategije se temelje na verificiranim tržišnim obrascima i analizi u stvarnom vremenu, a ne na nagađanju.";
$risk_warning_ai_3 = "<strong>Fleksibilne Postavke i Puna Kontrola:</strong> Prilagodite svoje parametre rizika u bilo kojem trenutku. Pratite sve salde i trgovine transparentno na svojoj nadzornoj ploči — bez skrivenih naknada i bez ograničenja na isplate.";
$risk_warning_disclaimer = "<strong>Odricanje od odgovornosti:</strong> Trgovanje uvijek nosi rizik. Automatizirani sustavi (uključujući AI) ne jamče profit, mogu podbaciti zbog softverskih grešaka ili neočekivanih tržišnih događaja, te zahtijevaju nadzor korisnika. Prošli rezultati nisu pokazatelj budućih rezultata. Ova platforma služi isključivo u informativne i marketinške svrhe i ne predstavlja financijski savjet.";
$risk_warning_s1_heading = "1. Opći Rizici i Rizici Tržišta Kriptovaluta";
$risk_warning_s1_1 = "Kriptovalute su vrlo volatilna, spekulativna imovina kojom se trguje tijekom cijelog dana i koja podliježe samo minimalnom regulatornom nadzoru u većini jurisdikcija.";
$risk_warning_s1_2 = "Vrijednosti mogu drastično oscilirati unutar kratkih razdoblja, potencijalno dovodeći do potpunog gubitka uloženog kapitala.";
$risk_warning_s1_3 = "Tržišne vrijednosti mogu biti značajno pogođene regulatornim promjenama, tehničkim razvojem, sigurnosnim proboj ima ili širim makroekonomskim događajima.";
$risk_warning_s1_4 = "Neka imovina može u potpunosti izgubiti svoju vrijednost. Ulažite samo novac koji si možete priuštiti izgubiti.";
$risk_warning_s2_heading = "2. Rizici Izvršenja, Likvidnosti i Financijske Poluge";
$risk_warning_s2_1 = "<strong>Tržišna Volatilnost i Likvidnost:</strong> Ekstremni pokreti cijena (10-20%+ dnevno) ili niska likvidnost (posebno kod manjih coinova) mogu dovesti do kašnjenja, ispada platforme i značajnog odstupanja pri izvršenju (slippage). Stop-loss nalozi ne mogu jamčiti ograničenje gubitaka u ekstremnim uvjetima.";
$risk_warning_s2_2 = "<strong>Rizik Financijske Poluge i Marže:</strong> Proizvodi s financijskom polugom pojačavaju i dobitke i gubitke, što znači da možete izgubiti više od svog izvornog depozita. Otprilike 70-80% računa maloprodajnih investitora gubi novac prilikom trgovanja proizvodima s financijskom polugom.";
$risk_warning_s3_heading = "3. Tehnički, Kibernetički i Rizici Trećih Strana";
$risk_warning_s3_1 = "<strong>Tehnički Čimbenici:</strong> Online trgovanje inherentno nosi rizike poput prekida internetske veze, kvarova hardvera/softvera i nedostupnosti usluge.";
$risk_warning_s3_2 = "<strong>Kibernetička Sigurnost:</strong> Računi kriptovaluta česta su meta phishinga, zlonamjernog softvera i pokušaja hakiranja. Transakcije su nepovratne; kompromitiranje vaših pristupnih podataka može dovesti do trajnog gubitka.";
$risk_warning_s3_3 = "<strong>Platforme Trećih Strana:</strong> Ova web stranica može povezati korisnike s platformama trećih strana. Ne kontroliramo, ne podržavamo niti jamčimo za njihovu sigurnost, poslovanje ili solventnost. Uvijek provedite vlastitu temeljitu dubinsku analizu prije polaganja sredstava na vanjske platforme.";
$risk_warning_s4_heading = "4. Regulatorne, Porezne i Završne Odredbe";
$risk_warning_s4_1 = "<strong>Pravna Usklađenost i Porezi:</strong> Regulatorni okviri uvelike se razlikuju i brzo se mijenjaju. Korisnici su isključivo odgovorni za osiguravanje da njihova trgovinska aktivnost bude u skladu s lokalnim zakonima, kao i za ispunjavanje vlastitih poreznih obveza.";
$risk_warning_s4_2 = "<strong>Nema Jamstva Profita:</strong> Ne postoji \"sigurno\" ili bezrizično trgovanje kriptovalutama. Bilo kakvi navedeni brojevi povrata ili primjeri uspješnosti čisto su hipotetski.";
$risk_warning_s4_3 = "<strong>Prikladnost:</strong> Ako ne razumijete potpuno rizike, ovisite o nužnim financijskim sredstvima ili trgujete posuđenim novcem, trgovanje kriptovalutama nije prikladno za vas. U slučaju nedoumice, posavjetujte se s neovisnim, licenciranim financijskim savjetnikom.";
$risk_warning_contact = "<strong>Kontakt:</strong> Ako imate pitanja o ovoj izjavi ili želite podnijeti upit, molimo kontaktirajte naš službeni tim za korisničku podršku putem kontakt obrasca na našoj web stranici.";

