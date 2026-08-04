<?php
require __DIR__ . '/../lang.php';

// Identity / config variables are intentionally NOT overridden here — they are inherited
// as-is from the root lang.php so brand/pricing swaps still work correctly at deploy time:
// $site_name, $site_url, $site_domain, $app_price, $app_currency, $rating_value,
// $rating_count, $review_count, $country_name, $support_email, $institutional_email.

$site_lang = 'fi-FI';
$form_language = 'fi';

// Reviews
$review_1_author = "Yksityissijoittaja";
$review_2_author = "Riippumaton kaupankävijä";
$review_3_author = "Digitaalisten omaisuuserien kaupankävijä";
$review_4_author = "Passiivisen tulon etsijä";

// META TITLE / DESCRIPTION (per page)
$home_meta_title = "$site_name — Virallinen verkkosivusto | Kaupankäyntialusta";
$home_meta_description = "$site_name ⭐ — älykäs tekoälyyn perustuva kaupankäyntialusta reaaliaikaiseen markkina-analyysiin ja selkeisiin kaupankäyntisignaaleihin ⚡ Kokeile älykkäitä työkaluja opastetun kierroksen avulla.";

$quiz_consultant_name = 'Mia';
$quiz_consultant_role = 'Perehdytysavustaja';

$quiz_text_welcome   = "Hei! Tässä on $quiz_consultant_name, henkilökohtainen perehdytysavustajasi $site_name-palvelussa. Loistavia uutisia! Pääsysi on virallisesti ennakkohyväksytty. Anna meidän nyt määrittää ammatillinen profiilisi!";
$quiz_text_q1 = "Varmistaaksemme täyden sääntely- ja lakisääteisen vaatimustenmukaisuuden, vahvista nykyinen asuinmaasi: $country_name";
$quiz_text_a1_yes    = "Kyllä, tämä on nykyinen asuinpaikkani";
$quiz_text_a1_no     = "Ei";

$quiz_text_q2 = "Erinomaista. Valitse sopiva ikäluokka löytääksemme sopivimmat rahoitusvälineet:";

$quiz_text_q3        = "Onko käytössäsi aktiivinen pankkitili tai luottokortti säännöllisten päivittäisten osinkomaksujen vastaanottamiseen?";
$quiz_text_a3_yes    = "Kyllä, aktiivinen tili on käytettävissä";
$quiz_text_a3_no     = "Ei vielä käytettävissä";

$quiz_text_q4        = "Ilmoita henkilökohtaisten tulojesi pääasiallinen lähde. (Tämä parametri auttaa mukauttamaan järjestelmän riskienhallinta-asetuksia).";
$quiz_text_a4_1      = "Virallinen työsuhde / itsenäinen ammatinharjoittaja";
$quiz_text_a4_2      = "Passiivinen tulo / henkilökohtaiset säästöt";
$quiz_text_a4_3      = "Muut lähteet";

$quiz_text_q5 = "Hienoa! Viimeinen vaihe on lyhyt puhelinvarmistus johtajaltamme rekisteröintisi vahvistamiseksi. Puhelut soitetaan klo 11.00–20.00. Pystytkö vastaamaan puheluun?";
$quiz_text_a5_yes    = "Kyllä, tämä aika sopii minulle";
$quiz_text_a5_no     = "Aloita puhelu välittömästi";

$quiz_text_loader    = "Analysoimme pyydettyjä vaihtoehtoja ja alustamme turvallisen tilin määritysparametreja...";
$quiz_text_final_ttl = "Tili valtuutettu onnistuneesti! 🎉 Turvallinen digitaalinen työtilasi on täysin määritetty. Suorita alla olevat viimeiset vahvistusvaiheet taataksesi päivittäiset maksut:";

$quiz_placeholder_fname = "Etunimi";
$quiz_placeholder_lname = "Sukunimi";
$quiz_placeholder_email = "Sähköpostiosoite";
$quiz_placeholder_phone = "Puhelinnumero";
$quiz_btn_submit = "Aktivoi kaupankäynti";
$quiz_text_typing       = "kirjoittaa viestiä...";
$quiz_text_processing   = "Käsitellään pyyntöä...";


$about_meta_title = "Tietoa $site_name | Tekoälyyn perustuva kryptokaupankäynti-infrastruktuuri";
$about_meta_description = "Lue lisää $site_name-palvelusta, kehittyneestä tekoälyyn perustuvasta kryptokaupankäynti-infrastruktuurista, joka keskittyy ennakoivaan analytiikkaan, markkinatietoon, volatiliteetin seurantaan ja digitaalisten varojen tutkimukseen.";

$contact_meta_title = "Ota yhteyttä $site_name | Pyydä tekoälykaupankäyntialustan käyttöoikeus";
$contact_meta_description = "Ota yhteyttä $site_name-palveluun pyytääksesi käyttöoikeutta, kysyäksesi tekoälyyn perustuvasta kryptokaupankäynti-infrastruktuurista, tuetuista markkinoista, digitaalisten varojen tiedosta tai alustan käyttöönotosta.";

$terms_meta_title = "Käyttöehdot | $site_name-verkkosivuston ja -alustan ehdot";
$terms_meta_description = "Lue $site_name-käyttöehdot, jotka kattavat verkkosivuston käytön, informatiivisen sisällön, tekoälykaupankäynti-infrastruktuurin, käyttäjän vastuun, kolmansien osapuolten palvelut ja riskirajoitukset.";

$privacy_meta_title = "Tietosuojakäytäntö | $site_name-tietosuoja ja käyttäjän yksityisyys";
$privacy_meta_description = "Lue $site_name-tietosuojakäytäntö ymmärtääksesi, miten keräämme, käytämme, suojaamme, säilytämme ja hallinnoimme henkilötietoja, jotka on lähetetty tekoälyyn perustuvan kryptokaupankäynti-infrastruktuurimme verkkosivuston kautta.";

$cookies_meta_title = "Evästekäytäntö | $site_name-verkkosivuston evästeet ja seuranta";
$cookies_meta_description = "Opi, miten $site_name käyttää evästeitä, analytiikkateknologioita, suorituskyvyn seurantatyökaluja ja verkkosivuston toiminnallisuuspalveluja parantaakseen käyttäjäkokemusta ja alustan suorituskykyä.";

$aml_meta_title = "Rahanpesun estämisen käytäntö | $site_name-rahanpesun vastaiset standardit";
$aml_meta_description = "Tarkista $site_name-rahanpesun estämisen käytäntö, mukaan lukien vastuullinen digitaalisten varojen käyttö, rahanpesun vastainen tietoisuus, kielletty toiminta, seurantaperiaatteet ja vaatimustenmukaisuusodotukset.";

$risk_meta_title = "Riskitiedotus | $site_name-kryptokaupankäynnin riskilausunto";
$risk_meta_description = "Tarkista $site_name-riskitiedotus ymmärtääksesi kryptovaluuttojen volatiliteetin, kaupankäynnin epävarmuuden, tekoälysignaalien rajoitukset, markkinariskin, likviditeettiriskin ja käyttäjän vastuun.";

$exchanges_meta_title = "Tuetut pörssit | $site_name-markkinatiedon kattavuus";
$exchanges_meta_description = "Tutustu kryptovaluuttapörssien, likviditeettipaikkojen ja digitaalisten varojen markkinoiden tyyppeihin, joita $site_name-tekoälyyn perustuva markkinatietoinfrastruktuuri seuraa.";


$about_breadcrumb_name = "Tietoa $site_name";
$contact_breadcrumb_name = "Ota yhteyttä $site_name";
$terms_breadcrumb_name = "Käyttöehdot";
$privacy_breadcrumb_name = "Tietosuojakäytäntö";
$cookies_breadcrumb_name = "Evästekäytäntö";
$aml_breadcrumb_name = "Rahanpesun estämisen käytäntö";
$risk_breadcrumb_name = "Riskitiedotus";
$exchanges_breadcrumb_name = "Tuetut pörssit";

$hero_text = "Koe uusi kaupankäynnin aikakausi kehittyneellä kryptokaupankäyntialustallamme. $site_name-tekoälyteknologian avulla voit optimoida tuottosi ja tehdä tietoisia sijoituspäätöksiä.";


// HEADER / NAV / FOOTER
$logo_subtitle = "Tekoälyyn perustuva kaupankäynti-infrastruktuuri";
$nav_signals = "Signaalit";
$nav_reviews = "Arvostelut";
$nav_about = "Tietoa";
$nav_exchanges = "Pörssit";
$nav_exchanges_full = "Tuetut pörssit";
$nav_risk = "Riski";
$nav_risk_full = "Riskitiedotus";
$nav_faq = "UKK";
$nav_privacy = "Tietosuojakäytäntö";
$nav_terms = "Käyttöehdot";
$nav_cookies = "Evästekäytäntö";
$nav_cookies_short = "Evästeet";
$nav_aml = "Rahanpesun estämisen käytäntö";
$nav_contact_us = "Ota yhteyttä";
$nav_contact = "Yhteystiedot";
$nav_get_started = "Aloita";
$header_ai_status = "Tekoälyn ydin toiminnassa";
$header_menu_aria = "Valikko";
$footer_platform = "Alusta";
$footer_resources = "Resurssit";
$footer_contact_title = "Yhteystiedot";
$footer_ai_signals = "Tekoälysignaalit";
$footer_about_link = "Tietoa $site_name";
$footer_description = "$site_name on kehittynyt tekoälyyn perustuva kryptokaupankäynti-infrastruktuuri, joka keskittyy ennakoivaan analytiikkaan, institutionaalisen tason markkinatietoon, volatiliteettimallinnukseen, neuraalisiin toteutusjärjestelmiin ja automaattiseen riskienhallintaan.";
$footer_monitoring = "24/7 tekoälyinfrastruktuurin valvonta";
$footer_global_markets = "Globaalit digitaalisten varojen markkinat";
$footer_disclaimer_title = "Riskitiedotus";
$footer_disclaimer_p1 = "Kryptovaluuttakauppaan ja digitaalisiin varoihin sijoittamiseen liittyy huomattavaa taloudellista riskiä, eikä se välttämättä sovi kaikille sijoittajille. Markkinoiden volatiliteetti, likviditeettihäiriöt, teknologiset viat, sääntelymuutokset ja makrotaloudelliset olosuhteet voivat vaikuttaa merkittävästi omaisuuserien tuottoon.";
$footer_disclaimer_p2 = "$site_name tarjoaa tekoälyyn perustuvaa analyyttistä infrastruktuuria, ennakoivaa markkinatietoa ja automaattisia kaupankäyntiteknologioita. Mikään tällä verkkosivustolla ei ole taloudellista, sijoitus-, laki- tai veroneuvontaa.";
$footer_disclaimer_p3 = "Aiempi tuotto ei takaa tulevia tuloksia. Käyttäjien tulisi arvioida riskit itsenäisesti ennen kryptovaluuttamarkkinoihin tai automaattisiin kaupankäyntijärjestelmiin osallistumista.";
$footer_rights = "Kaikki oikeudet pidätetään.";
$footer_lang_label = "Kieli";


// HOME FORM
$home_form_fname = "Etunimi";
$home_form_lname = "Sukunimi";
$home_form_email = "Sähköposti";
$home_form_submit_access = "Hanki pääsy";
$home_form_submit_platform = "Pyydä alustan käyttöoikeus";

// CONTACT FORM
$contact_form_fname = "Etunimi";
$contact_form_lname = "Sukunimi";
$contact_form_email = "Sähköposti";
$contact_form_submit = "Pyydä käyttöoikeus";


// HOME LABELS
$home_label_ai_confidence = "Tekoälyn luottamus";
$home_label_update_speed = "Päivitysnopeus";
$home_label_market_mode = "Markkinatila";
$home_label_market_condition = "Markkinatilanne";
$home_label_buyer_activity = "Ostajien aktiivisuus";
$home_label_market_activity = "Markkina-aktiivisuus";
$home_label_risk_level = "Riskitaso";
$home_label_updated = "Päivitetty";
$home_label_live_analysis = "LIVE-ANALYYSI";

// JS
$home_js_sec_ago = "s sitten";
$js_sec_ago = "s sitten";
$js_close_notification = "Sulje ilmoitus";

$js_signal_long_direction = "Nousutrendin todennäköisyys kasvaa";
$js_signal_long_market = "Hallittu laajentuminen";
$js_signal_long_pressure_label = "Likviditeettipaine";
$js_signal_long_pressure = "Nouseva";

$js_signal_short_direction = "Laskupaine kasvaa";
$js_signal_short_market = "Korkea epävakaus";
$js_signal_short_pressure_label = "Riskipaine";
$js_signal_short_pressure = "Laskeva";

$js_signal_watch_direction = "Konsolidaatioalue havaittu";
$js_signal_watch_market = "Neutraali konsolidaatio";
$js_signal_watch_pressure_label = "Institutionaalinen virtaus";
$js_signal_watch_pressure = "Vakaa";

$js_hero_long_pair = "BTC/USD-momentumin laajentuminen";
$js_hero_long_regime = "Nouseva";
$js_hero_long_feed_1 = "BTC-likviditeetin laajentuminen havaittu";
$js_hero_long_feed_2 = "Tilausvirran paine kääntyy positiiviseksi";
$js_hero_long_feed_3 = "Tekoälymalli vahvistaa nousevan jatkumon";

$js_hero_watch_pair = "ETH/USD-volatiliteetin kompressio";
$js_hero_watch_regime = "Neutraali";
$js_hero_watch_feed_1 = "ETH-kompressioalue havaittu";
$js_hero_watch_feed_2 = "Tekoäly odottaa vahvempaa vahvistusta";
$js_hero_watch_feed_3 = "Likviditeetti pysyy vakaana";

$js_hero_short_pair = "SOL/USD-riskin laajentuminen";
$js_hero_short_regime = "Riskiä välttävä";
$js_hero_short_feed_1 = "SOL-laskupaine havaittu";
$js_hero_short_feed_2 = "Riskimalli merkitsee volatiliteetin laajentumisen";
$js_hero_short_feed_3 = "Tekoäly vähentää nousevaa altistumista";

// JS — live user popup actions
$js_live_action_1 = "liittyi $site_name-palveluun täältä";
$js_live_action_2 = "pyysi alustan käyttöoikeutta täältä";
$js_live_action_3 = "aloitti tekoälysignaalien seurannan täältä";
$js_live_action_4 = "aktivoi markkina-analyysin täältä";
$js_live_action_5 = "avasi institutionaalisen kojelaudan täältä";
$js_live_action_6 = "yhdistyi $site_name-palveluun täältä";


// HOME PAGE
$home_hero_label = "Tekoälyyn perustuva kryptoalusta kaikille kokemustasoille";
$home_hero_title = "$site_name-alusta";
$home_hero_desc = "$site_name auttaa aloittelijoita ja kokeneita kaupankävijöitä tutkimaan kryptomarkkinoita tekoälyyn perustuvien näkemysten, reaaliaikaisen markkinaseurannan, riskitietoisuustyökalujen ja opastetun alustatuen avulla.";
$home_hero_feat_1 = "Yksinkertaiset tekoälyn markkinanäkemykset uusille käyttäjille";
$home_hero_feat_2 = "Reaaliaikainen kryptoseuranta ja signaalipäivitykset";
$home_hero_feat_3 = "Riskitietoiset työkalut älykkäämpiin päätöksiin";
$home_hero_feat_4 = "Kehittynyt analytiikka kokeneille kaupankävijöille";
$home_btn_request_access = "Hanki alustan käyttöoikeus";
$home_btn_view_signals = "Näytä tekoälysignaalit";
$home_trust_data_label = "Analysoidut markkinatietopisteet";
$home_trust_confidence_label = "Keskimääräinen signaalin luotettavuus";
$home_trust_monitoring_label = "Tekoälyn markkinaseuranta";
$home_terminal_title = "$site_name-opastettu tekoälymarkkinanäkymä";
$home_terminal_insight_label = "Nykyinen tekoälyn markkinanäkemys";
$home_terminal_feed_1 = "BTC-markkina-aktiivisuus osoittaa vahvempaa momenttia";
$home_terminal_feed_2 = "ETH-liikettä seurataan vahvistusta varten";
$home_terminal_feed_3 = "Tekoälyavustaja korostaa mahdollista mahdollisuusaluetta";
$home_trust_strip_1 = "Tekoälynäkemyksiä aloittelijoille ja kokeneille kaupankävijöille";
$home_trust_strip_2 = "Kryptovaluuttamarkkinoiden 24/7-seuranta";
$home_trust_strip_3 = "Reaaliaikainen riski- ja mahdollisuusanalyysi";
$home_trust_strip_4 = "Opastettu pääsy kehittyneisiin kaupankäyntityökaluihin";
$home_signals_eyebrow = "$site_name LIVE-TEKOÄLYYDIN";
$home_signals_title = "Reaaliaikaiset tekoälyn markkinasignaalit älykkäämpiin kryptopäätöksiin";
$home_signals_desc = "$site_name seuraa jatkuvasti kryptovaluuttamarkkinoiden aktiivisuutta, volatiliteettia, likviditeettitilannetta, mielialatrendejä ja lohkoketjutietoja tuottaakseen tekoälyyn perustuvia näkemyksiä ja reaaliaikaisia markkinasignaaleja sekä aloittelijoille että kokeneille kaupankävijöille.";
$home_signals_terminal_title = "$site_name-tekoälysignaalimoottori";
$home_signal_btc_sub = "Positiivinen momentti havaittu";
$home_signal_btc_dir = "Nousutrendin todennäköisyys kasvaa";
$home_signal_btc_market = "Positiivinen momentti";
$home_signal_btc_activity = "Vahva";
$home_signal_eth_sub = "Odotetaan markkinavahvistusta";
$home_signal_eth_dir = "Sivuttaisliike havaittu";
$home_signal_eth_market = "Neutraali trendi";
$home_signal_eth_activity = "Vakaa";
$home_signal_sol_sub = "Kohonnut markkinariski havaittu";
$home_signal_sol_dir = "Laskupaine kasvaa";
$home_signal_sol_market = "Korkea volatiliteetti";
$home_signal_sol_risk = "Kohonnut";
$home_why_eyebrow = "MIKSI $site_name?";
$home_why_title = "Tekoälyyn perustuvat kryptotyökalut kaikille kokemustasoille";
$home_why_desc_1 = "$site_name auttaa käyttäjiä ymmärtämään kryptovaluuttamarkkinoita paremmin tekoälyn, reaaliaikaisen seurannan, markkinanäkemysten ja riskitietoisuustyökalujen avulla. Olitpa tutustumassa kryptovaluuttoihin ensimmäistä kertaa tai sinulla on jo kaupankäyntikokemusta, alusta on suunniteltu tekemään markkina-analyysistä helpommin saatavilla olevaa ja ymmärrettävää.";
$home_why_desc_2 = "$site_name-infrastruktuuri arvioi jatkuvasti markkina-aktiivisuutta, hintaliikkeitä, likviditeettitilannetta, mielialatrendejä ja lohkoketjutietoja tunnistaakseen uusia mahdollisuuksia ja muuttuvia markkinaolosuhteita. Uudet käyttäjät voivat hyötyä opastetusta alustatuesta, kun taas kokeneet kaupankävijät voivat tutkia kehittyneitä analyysityökaluja ja tekoälyyn perustuvaa markkinatietoa.";
$home_flow_1 = "Markkinaseuranta";
$home_flow_2 = "Tekoälyanalyysi";
$home_flow_3 = "Mahdollisuuksien tunnistus";
$home_flow_4 = "Riskiarviointi";
$home_flow_5 = "Toteutettavissa olevat näkemykset";
$home_reviews_eyebrow = "$site_name-YHTEISÖ";
$home_reviews_title = "Mitä käyttäjät sanovat $site_name-palvelusta";
$home_reviews_desc = "Ensikertalaisista kryptokäyttäjistä kokeneisiin kaupankävijöihin — ihmiset käyttävät $site_name-palvelua ymmärtääkseen markkinaolosuhteita paremmin, tutkiakseen tekoälyyn perustuvia näkemyksiä ja lähestyäkseen kryptovaluuttapäätöksiä selkeämmin.";
$home_review_1_text = "Ennen kuin löysin $site_name-palvelun, koin kryptovaluuttamaailman tietomäärän ylivoimaiseksi. Jokainen alusta vaikutti monimutkaiselta, ja huolestuin jatkuvasti virheiden tekemisestä. Arvostan eniten $site_name-palvelussa sitä, kuinka lähestyttävältä kaikki tuntuu. Tekoälynäkemykset auttoivat minua ymmärtämään markkinaolosuhteita eksymättä, ja alusta antoi minulle itseluottamusta oppia omaan tahtiini. Olen aidosti kiitollinen siitä, kuinka paljon helpommaksi kokemus muodostui kuin odotin.";
$home_review_1_tag = "Turvallinen ja helppo aloitus";
$home_review_badge = "VAHVISTETTU KÄYTTÄJÄ";
$home_review_2_text = "Vietin kuukausia tutkiessani kryptoalustoja ilman, että koskaan tunsin oloni tarpeeksi mukavaksi ottaakseni ensimmäistä askelta. $site_name muutti kokemuksen täysin. Alusta teki markkinatiedosta helpommin ymmärrettävää, enkä koskaan tuntenut tarvitsevani vuosien kaupankäyntikokemusta käyttääkseni työkaluja. Vaikuttavinta oli tasapaino yksinkertaisuuden ja tehokkaan tekoälyanalyysin välillä. Se tuntuu siltä, että ohjausta on saatavilla aina tarvittaessa. Olen kiitollinen löytäessäni alustan, joka auttoi minua oppimaan ilman pelottavaa tunnetta.";
$home_review_2_tag = "Helpompi oppimiskokemus";
$home_review_3_text = "Olen testannut monia markkina-analyysialustoja, ja $site_name erottuu, koska se tasapainottaa saavutettavuuden vakavan analyyttisen syvyyden kanssa. Uudet käyttäjät ymmärtävät alustan nopeasti, kun taas kokeneet kaupankävijät saavat silti hyödyllisiä tekoälyyn perustuvia markkinasignaaleja, riskinseurantaa ja reaaliaikaista kryptotietoa. Tätä tasapainoa on vaikea löytää. Alusta tarjoaa merkityksellistä markkinakontekstia ylikuormittamatta käyttäjiä, mikä on jotain, mitä hyvin harvat kryptotyökalut onnistuvat saavuttamaan.";
$home_review_3_tag = "Kehittyneet työkalut yksinkertaisella käytettävyydellä";
$home_review_span_1 = "Uusi kryptokäyttäjä";
$home_review_span_2 = "Ensimmäistä kertaa alustan käyttäjä";
$home_review_span_3 = "Ammattimainen kryptokaupankävijä";
$home_review_1_avatar_alt = "Matti Virtanen, $site_name-käyttäjä";
$home_review_2_avatar_alt = "Jari Korhonen, $site_name-käyttäjä";
$home_review_3_avatar_alt = "Ville Mäkinen, $site_name-käyttäjä";
$home_hero_visual_alt = "Tekoälyyn perustuva markkina-analytiikan kojelauta $site_name-palvelussa";
$home_signal_visual_alt = "$site_name-tekoälyn tuottama reaaliaikainen kaupankäyntisignaali";
$home_device_visual_alt = "Kryptoanalytiikka näytettynä yhdistetyllä laitteella $site_name-palvelun kautta";
$home_security_visual_alt = "Turvakilpi, joka edustaa $site_name-tilin suojausta";
$home_contact_eyebrow = "ALOITA $site_name-PALVELUN KANSSA";
$home_contact_title = "Tutustu alustaan luottavaisin mielin";
$home_contact_desc_1 = "Olitpa täysin uusi kryptovaluuttamarkkinoilla tai sinulla on jo kaupankäyntikokemusta, $site_name tarjoaa pääsyn tekoälyyn perustuviin markkinanäkemyksiin, reaaliaikaisiin seurantatyökaluihin ja älykkääseen analytiikkaan, jotka on suunniteltu auttamaan käyttäjiä ymmärtämään digitaalisten varojen mahdollisuuksia paremmin.";
$home_contact_desc_2 = "Lähetä tietosi saadaksesi lisätietoja alustasta, tutustuaksesi saatavilla oleviin ominaisuuksiin ja saadaksesi selville, miten $site_name voi auttaa sinua navigoimaan kryptovaluuttamarkkinoilla kehittyneen teknologian ja opastetun alustatuen avulla.";
$home_seo_toggle = "Lue lisää $site_name-tekoälyalustasta";
$home_seo_h2 = "$site_name-tekoälyalusta älykkäämpiin kryptomarkkinapäätöksiin";
$home_seo_p1 = "$site_name on tekoälyyn perustuva kryptovaluuttaalusta, joka on suunniteltu sekä aloittelijoille että kokeneille kaupankävijöille. Alusta yhdistää tekoälyn, reaaliaikaisen markkinaseurannan ja kehittyneet analyysityökalut auttaakseen käyttäjiä ymmärtämään digitaalisten varojen markkinoita paremmin ja tunnistamaan mahdollisia tilaisuuksia.";
$home_seo_p2 = "Toisin kuin monet perinteiset kaupankäyntialustat, jotka vaativat laajaa markkinatietämystä, $site_name on rakennettu tekemään monimutkaisesta markkinatiedosta helpommin ymmärrettävää. Alusta analysoi jatkuvasti kryptovaluuttatoimintaa, hintaliikkeitä, mielialatrendejä, likviditeettitilannetta ja lohkoketjutietoja, muuttaen suuret tietomäärät käytännön näkemyksiksi.";
$home_seo_p3 = "Olitpa tutustumassa kryptovaluuttamarkkinoihin ensimmäistä kertaa tai sinulla on jo kokemusta digitaalisten varojen kaupasta, $site_name tarjoaa älykkäitä työkaluja, jotka on suunniteltu tukemaan tietoisempaa päätöksentekoa mukautuen samalla muuttuviin markkinaolosuhteisiin reaaliajassa.";
$home_seo_h3_1 = "Tekoälyn markkina-analyysi saavutettavaksi tehtynä";
$home_seo_h3_1_p1 = "$site_name käyttää tekoälyä arvioidakseen laajaa valikoimaa markkinaindikaattoreita, mukaan lukien kaupankäyntiaktiivisuutta, volatiliteettikuvioita, likviditeettitilannetta, lohkoketjutapahtumia ja markkinamielialaa. Käsittelemällä tietoa jatkuvasti alusta auttaa käyttäjiä ymmärtämään paremmin nykyistä markkinakäyttäytymistä.";
$home_seo_h3_1_p2 = "Tekoälymallit on suunniteltu mukautumaan muuttuviin ympäristöihin sen sijaan, että ne luottaisivat staattisiin oletuksiin. Tämä mahdollistaa alustan dynaamisen reagoinnin kehittyviin kryptovaluuttatrendeihin ja uusiin markkinamahdollisuuksiin.";
$home_seo_h3_1_p3 = "Vaikka riittävän kehittynyt kokeneille kaupankävijöille, alusta on myös rakennettu pysymään lähestyttävänä uusille käyttäjille, jotka haluavat pääsyn tekoälypohjaiseen markkinatietoon vaatimatta syvää teknistä asiantuntemusta.";
$home_seo_h3_2 = "Reaaliaikaiset tekoälyn markkinasignaalit";
$home_seo_h3_2_p1 = "$site_name seuraa jatkuvasti kryptovaluuttamarkkinoita ja tuottaa tekoälyyn perustuvia näkemyksiä muuttuvan markkina-aktiivisuuden perusteella. Alusta arvioi momenttia, volatiliteettia, likviditeettitilannetta ja laajempaa markkinakäyttäytymistä tarjotakseen reaaliaikaisia analyyttisiä signaaleja.";
$home_seo_h3_2_p2 = "Bitcoinia, Ethereumia, Solanaa, XRP:tä, Avalanchea ja muita suuria digitaalisia varoja seurataan mukautuvien analyyttisten mallien avulla, jotka säätyvät automaattisesti muuttuviin markkinaolosuhteisiin.";
$home_seo_h3_2_p3 = "Sen sijaan, että luottaisi yhteen indikaattoriin tai eristettyyn mittariin, $site_name yhdistää useita tietolähteitä laajempaan analyyttiseen kehykseen, joka on suunniteltu tarjoamaan täydellisempi näkymä markkinaolosuhteisiin.";
$home_seo_h3_3 = "Älykkäät riskitietoisuustyökalut";
$home_seo_h3_3_p1 = "Kryptovaluuttamarkkinat voivat muuttua nopeasti. $site_name sisältää tekoälyyn perustuvia seurantajärjestelmiä, jotka on suunniteltu tunnistamaan epätavallinen volatiliteetti, muuttuva likviditeettitilanne ja uudet markkinariskit.";
$home_seo_h3_3_p2 = "Alusta arvioi jatkuvasti markkinakäyttäytymistä ja mahdollisia riskitekijöitä, auttaen käyttäjiä ymmärtämään muuttuvia olosuhteita paremmin ja tekemään tietoisempia päätöksiä.";
$home_seo_h3_3_p3 = "Yhdistämällä useita analyysikerroksia $site_name pyrkii parantamaan markkinatietoisuutta ja auttamaan käyttäjiä navigoimaan lisääntyneen epävarmuuden aikoina suuremmalla itseluottamuksella.";
$home_seo_h3_4 = "Suunniteltu nykyaikaisille kryptovaluuttamarkkinoille";
$home_seo_h3_4_p1 = "$site_name yhdistää tekoälyn, reaaliaikaiset seurantateknologiat ja kehittyneet analyysityökalut yhdelle alustalle, joka on suunniteltu nykyaikaisille digitaalisten varojen markkinoille.";
$home_seo_h3_4_p2 = "Infrastruktuuri arvioi jatkuvasti markkina-aktiivisuutta, lohkoketjukehitystä, mielialamuutoksia ja likviditeettitrendejä tarjotakseen kattavan näkymän kryptovaluuttamarkkinoiden käyttäytymiseen.";
$home_seo_h3_4_p3 = "Digitaalisten varojen markkinoiden kehittyessä tekoälypohjaiset työkalut voivat auttaa käyttäjiä käsittelemään tietoa tehokkaammin ja ymmärtämään yhä monimutkaisempia markkinaympäristöjä paremmin. $site_name on suunniteltu tekemään näistä kyvyistä saavutettavia laajemmalle joukolle markkinaosallistujia.";
$home_seo_side_1_label = "Tekoälynäkemykset";
$home_seo_side_1_title = "Helposti ymmärrettävä markkina-analyysi";
$home_seo_side_1_desc = "Tekoälyyn perustuvia näkemyksiä sekä uusille että kokeneille kryptovaluuttakäyttäjille.";
$home_seo_side_2_label = "Markkinaseuranta";
$home_seo_side_2_title = "Reaaliaikainen kryptoseuranta";
$home_seo_side_2_desc = "Suurten kryptovaluuttamarkkinoiden ja muuttuvien markkinaolosuhteiden jatkuva seuranta.";
$home_seo_side_3_label = "Riskitietoisuus";
$home_seo_side_3_title = "Älykäs riskintunnistus";
$home_seo_side_3_desc = "Kehittyneet seurantatyökalut, jotka on suunniteltu korostamaan muuttuvaa markkinadynamiikkaa ja volatiliteettia.";
$home_seo_side_4_label = "Tekoälyteknologia";
$home_seo_side_4_title = "Mukautuvat analyyttiset mallit";
$home_seo_side_4_desc = "Koneoppimisjärjestelmät, jotka arvioivat jatkuvasti markkinatietoja ja nousevia trendejä.";
$home_faq_eyebrow = "$site_name-TIETOPANKKI";
$home_faq_title = "Usein kysytyt kysymykset $site_name-palvelusta";
$home_faq_desc = "Lue lisää siitä, miten alusta toimii, kenelle se on suunniteltu ja miten tekoäly auttaa käyttäjiä ymmärtämään kryptovaluuttamarkkinoiden olosuhteita paremmin.";
$home_faq_q1 = "Tarvitsenko kaupankäyntikokemusta käyttääkseni $site_name-palvelua?";
$home_faq_a1 = "Ei. $site_name on suunniteltu käyttäjille, joilla on eri kokemustasoja, mukaan lukien henkilöille, jotka ovat täysin uusia kryptovaluuttamarkkinoilla. Alusta käyttää tekoälyyn perustuvia näkemyksiä ja markkinaseurantatyökaluja tehdäkseen monimutkaisesta tiedosta helpommin ymmärrettävää.";
$home_faq_q2 = "Mitä $site_name tarkalleen tekee?";
$home_faq_a2 = "$site_name analysoi jatkuvasti kryptovaluuttamarkkinoita tekoälyn avulla. Alusta arvioi markkina-aktiivisuutta, volatiliteettia, mielialatrendejä, likviditeettitilannetta ja lohkoketjutietoja tuottaakseen reaaliaikaisia näkemyksiä ja analyyttisiä signaaleja.";
$home_faq_q3 = "Voivatko kokeneet kaupankävijät käyttää $site_name-palvelua?";
$home_faq_a3 = "Kyllä. Vaikka alusta on aloittelijaystävällinen, se tarjoaa myös kehittyneitä analyysityökaluja, tekoälyyn perustuvaa markkinatietoa ja reaaliaikaisia seurantaominaisuuksia, jotka voivat olla arvokkaita kokeneille markkinaosallistujille.";
$home_faq_q4 = "Mitä kryptovaluuttoja $site_name seuraa?";
$home_faq_a4 = "Alusta voi analysoida suuria digitaalisia varoja, kuten Bitcoinia, Ethereumia, Solanaa, XRP:tä, Avalanchea ja muita laajasti kaupankäynnin kohteena olevia kryptovaluuttoja markkinaolosuhteista ja saatavilla olevista tietolähteistä riippuen.";
$home_faq_q5 = "Miten tekoälysignaalit tuotetaan?";
$home_faq_a5 = "$site_name arvioi useita markkinatekijöitä samanaikaisesti, mukaan lukien volatiliteetin, kaupankäyntiaktiivisuuden, likviditeettitilanteen, mielialatrendit ja historiallisen markkinakäyttäytymisen. Tekoälymallit yhdistävät nämä syötteet tunnistaakseen muuttuvia markkinaolosuhteita ja mahdollisia tilaisuuksia.";
$home_faq_q6 = "Tarjoaako $site_name koulutuksellista opastusta?";
$home_faq_a6 = "Alusta on suunniteltu auttamaan käyttäjiä ymmärtämään markkinaolosuhteita paremmin tekoälyyn perustuvan analyysin, yksinkertaistettujen näkemysten ja opastetun pääsyn avulla alustan ominaisuuksiin. Uudet käyttäjät voivat tutkia kryptovaluuttamarkkinoita tarvitsematta kehittynyttä teknistä tietämystä.";
$home_cta_label = "Tekoälyalusta valmiina";
$home_cta_title = "Aloita $site_name-tutkiminen tänään";
$home_cta_desc = "Löydä tekoälyyn perustuvia markkinanäkemyksiä, reaaliaikaista kryptovaluuttaseurantaa, älykkäitä riskitietoisuustyökaluja ja kehittynyttä analytiikkaa, joka on suunniteltu sekä aloittelijoille että kokeneille kaupankävijöille.";
$home_ticker_text = "Tekoälyn markkinaseuranta aktiivinen • Reaaliaikainen kryptovaluutta-analyysi • Bitcoinin momentti vahvistuu • Ethereumin konsolidaatio havaittu • Uusia markkinamahdollisuuksia tunnistettu • Riskinseurantajärjestelmät verkossa • Tekoälynäkemykset päivittyvät jatkuvasti • Suunniteltu aloittelijoille ja kokeneille kaupankävijöille";


// ABOUT PAGE
$about_h1 = "Tietoa $site_name";
$about_p1 = "$site_name on seuraavan sukupolven tekoälyinfrastruktuuri, joka on suunniteltu auttamaan markkinaosallistujia ymmärtämään nopeasti kehittyvää kryptovaluuttaekosysteemiä paremmin. Yhdistämällä koneoppimisteknologioita, ennakoivaa analytiikkaa, markkinatietojärjestelmiä ja reaaliaikaista tietojenkäsittelyä $site_name tarjoaa kattavan ympäristön digitaalisten varojen toiminnan seurantaan ja merkityksellisten markkinakehitysten tunnistamiseen.";
$about_p2 = "Kryptovaluuttamarkkinat toimivat jatkuvasti useilla pörsseillä, lainkäyttöalueilla ja likviditeetin tarjoajilla. Joka sekunti tuhannet muuttujat vaikuttavat hinnoitteluun, volatiliteettiin, likviditeettitilanteeseen ja sijoittajien mielialaan. $site_name kehitettiin tavoitteena käsitellä näitä monimutkaisia tietovirtoja jäsennellyllä ja skaalautuvalla tavalla.";
$about_h2_vision = "$site_name-palvelun taustalla oleva visio";
$about_p_vision_1 = "Rahoitusmarkkinoista on tullut yhä enemmän data-lähtöisiä. Perinteiset analyysimenetelmät kamppailevat usein pysyäkseen mukana nykyaikaisten digitaalisten varojen ekosysteemeissä tuotetun tiedon määrässä. $site_name pyrkii kuromaan umpeen tämän kuilun soveltamalla kehittynyttä laskennallista älykkyyttä, automaattisia seurantajärjestelmiä ja mukautuvia analyyttisiä malleja.";
$about_p_vision_2 = "$site_name-palvelun pitkän aikavälin visio on tarjota läpinäkyviä markkinatietotyökaluja, jotka voivat auttaa käyttäjiä ymmärtämään paremmin kryptovaluuttamarkkinoiden rakennetta, riskitilanteita ja uusia trendejä.";
$about_h2_ai = "Tekoälyinfrastruktuuri";
$about_p_ai_1 = "$site_name-palvelun ytimessä on monikerroksinen tekoälykehys, joka on suunniteltu käsittelemään tietoa lukuisista markkinalähteistä samanaikaisesti.";
$about_p_ai_2 = "Näihin lähteisiin voivat kuulua:";
$about_li_1 = "Kryptovaluuttahintasyötteet";
$about_li_2 = "Tilauskirjan aktiivisuus";
$about_li_3 = "Likviditeetin liiketiedot";
$about_li_4 = "Volatiliteetti-indikaattorit";
$about_li_5 = "Lohkoketjutransaktiomittarit";
$about_li_6 = "Markkinamielialasignaalit";
$about_li_7 = "Makrotaloudellinen kehitys";
$about_li_8 = "Institutionaalinen markkina-aktiivisuus";
$about_p_ai_3 = "Arvioimalla jatkuvasti näiden muuttujien välisiä suhteita $site_name pyrkii tunnistamaan kuvioita, jotka voivat tarjota arvokasta markkinakontekstia.";
$about_h2_risk = "Riskitietoisuusfilosofia";
$about_p_risk_1 = "Vastuullinen osallistuminen kryptovaluuttamarkkinoille edellyttää selkeää riskien ymmärtämistä. $site_name korostaa riskitietoisuutta digitaalisten varojen analyysin perustavanlaatuisena osana.";
$about_p_risk_2 = "Markkinoiden volatiliteetti, likviditeetin vaihtelut, pörssikohtaiset tapahtumat, sääntelymuutokset ja laajemmat makrotaloudelliset olosuhteet voivat kaikki vaikuttaa markkinatuloksiin. Tämän seurauksena käyttäjien ei tulisi koskaan luottaa yksinomaan yhteen tietolähteeseen päätöksiä tehdessään.";
$about_h2_global = "Globaalit digitaalisten varojen markkinat";
$about_p_global_1 = "Kryptovaluuttamarkkinat toimivat maailmanlaajuisessa mittakaavassa ja niihin osallistuu osallistujia eri alueilta, toimialoilta ja talousympäristöistä. $site_name-infrastruktuuri on suunniteltu seuraamaan useita markkinasegmenttejä samanaikaisesti, jolloin käyttäjät voivat havainnoida kehitystä eri osissa digitaalisten varojen ekosysteemiä.";
$about_p_global_2 = "Tämä laajempi näkökulma voi auttaa parantamaan tietoisuutta muuttuvista markkinaolosuhteista ja uusista trendeistä.";
$about_h2_why = "Miksi käyttäjät tutkivat $site_name-palvelua";
$about_why_li_1 = "Kehittynyt tekoälyyn perustuva markkinatieto";
$about_why_li_2 = "Reaaliaikainen kryptovaluuttaseuranta";
$about_why_li_3 = "Institutionaalisen tyylin analyyttinen infrastruktuuri";
$about_why_li_4 = "Monitekijäinen markkina-arviointi";
$about_why_li_5 = "Volatiliteetin ja likviditeetin seuranta";
$about_why_li_6 = "Skaalautuvat digitaalisten varojen tutkimustyökalut";
$about_why_li_7 = "Riskitietoinen analyyttinen menetelmä";
$about_h2_forward = "Katse eteenpäin";
$about_p_forward_1 = "Digitaalisten varojen markkinoiden kypsyessä kehittyneen analyyttisen infrastruktuurin merkityksen odotetaan kasvavan. $site_name keskittyy edelleen kehittämään teknologioita, jotka tukevat syvempää markkinaymmärrystä, suurempaa läpinäkyvyyttä ja tietoisempaa osallistumista kryptovaluuttaekosysteemiin.";
$about_p_forward_2 = "Jatkuvan innovaation ja käynnissä olevan tutkimuksen kautta $site_name pyrkii edistämään älykkäämpää ja data-lähtöisempää tulevaisuutta digitaalisten varojen analyysille.";


// CONTACT PAGE
$contact_h1 = "Ota yhteyttä $site_name-palveluun";
$contact_intro_1 = "Ota yhteyttä $site_name-tiimiin pyytääksesi alustan käyttöoikeutta, kysyäksesi tekoälyyn perustuvasta kryptokaupankäynti-infrastruktuurista tai saadaksesi lisätietoja digitaalisten varojen markkinatietoympäristöstämme.";
$contact_intro_2 = "Olitpa tutkimassa automatisoitua kryptoanalytiikkaa, institutionaalisen tyylin signaali-infrastruktuuria, volatiliteetin seurantaa tai monipörssistä markkinatietoa, tiimimme voi auttaa ohjaamaan pyyntösi oikealle osastolle.";
$contact_h2_help = "Miten voimme auttaa";
$contact_li_1 = "Alustan käyttöoikeuspyynnöt";
$contact_li_2 = "Yleiset tuotekysymykset";
$contact_li_3 = "Tekoälykaupankäynti-infrastruktuurin tiedot";
$contact_li_4 = "Digitaalisten varojen markkinatietokyselyt";
$contact_li_5 = "Riskitiedotus- ja vaatimustenmukaisuuskysymykset";
$contact_li_6 = "Tekninen tai käyttöönottoapu";
$contact_h2_send = "Lähetä pyyntö";
$contact_p_send = "Täytä alla oleva lomake, niin $site_name-edustaja saattaa ottaa sinuun yhteyttä lisätiedoilla.";
$contact_h2_info = "Yhteystiedot";
$contact_support_label = "Yleinen tuki:";
$contact_institutional_label = "Institutionaaliset kyselyt:";
$contact_disclaimer = "Huomaa, että $site_name ei tarjoa henkilökohtaista taloudellista, sijoitus-, vero- tai lakineuvontaa. Kaikki tiedot on tarkoitettu vain teknologia- ja informatiivisiin tarkoituksiin.";

// TERMS PAGE
$terms_h1 = "Käyttöehdot";
$terms_intro_1 = "Nämä käyttöehdot säätelevät pääsyä $site_name-verkkosivustolle, sisältöön, alustan kuvauksiin, lomakkeisiin, viestintään ja niihin liittyviin informatiivisiin materiaaleihin sekä niiden käyttöä.";
$terms_intro_2 = "Käyttämällä tätä verkkosivustoa käyttäjät vahvistavat lukeneensa, ymmärtäneensä ja hyväksyvänsä nämä käyttöehdot. Jos käyttäjä ei hyväksy näitä ehtoja, hänen tulisi lopettaa verkkosivuston käyttö.";
$terms_h2_informational = "Informatiivinen tarkoitus";
$terms_p_info_1 = "$site_name tarjoaa tietoa tekoälyyn perustuvasta kryptokaupankäynti-infrastruktuurista, digitaalisten varojen markkinatiedosta, volatiliteetin seurannasta, likviditeettianalyysistä ja niihin liittyvistä teknologioista.";
$terms_p_info_2 = "Verkkosivuston sisältö on tarkoitettu vain yleisiin informatiivisiin ja teknologisiin esittelytarkoituksiin. Mitään tällä verkkosivustolla ei tule tulkita taloudelliseksi neuvonnaksi, sijoitusneuvonnaksi, lakineuvonnaksi, veroneuvonnaksi tai takuuksi kaupankäyntituloksista.";
$terms_h2_no_advice = "Ei taloudellista neuvontaa";
$terms_p_no_advice_1 = "$site_name ei tarjoa henkilökohtaisia suosituksia siitä, tulisiko käyttäjien ostaa, myydä, pitää, käydä kauppaa, panttaa, siirtää tai muutoin olla vuorovaikutuksessa minkään kryptovaluutan, tokenin, rahoitustuotteen tai digitaalisen varan kanssa.";
$terms_p_no_advice_2 = "Käyttäjien tulisi arvioida kaikki tiedot itsenäisesti ja hakea neuvoa päteviltä ammattilaisilta ennen taloudellisten päätösten tekemistä.";
$terms_h2_user_responsibility = "Käyttäjän vastuu";
$terms_p_user_1 = "Käyttäjät ovat vastuussa omista päätöksistään, riskiarvioinneistaan, tiliaktiivisuudestaan, kaupankäyntitoimistaan, lakisääteisestä vaatimustenmukaisuudesta ja kolmansien osapuolten palvelujen käytöstä.";
$terms_p_user_2 = "Käyttäjien tulisi varmistaa, että digitaalisten varojen toiminta on sallittua heidän lainkäyttöalueellaan ja että he ymmärtävät kaikki sovellettavat riskit ennen kryptomarkkinoiden kanssa vuorovaikutuksessa olemista.";
$terms_h2_ai = "Tekoäly ja analyyttiset järjestelmät";
$terms_p_ai_1 = "$site_name saattaa kuvata tekoälyjärjestelmiä, ennustemalleja, markkinasignaaleja, automaattista analytiikkaa tai toteutukseen liittyviä teknologioita.";
$terms_p_ai_2 = "Nämä järjestelmät saattavat perustua markkinatietoihin, tilastollisiin malleihin, koneoppimisprosesseihin ja kolmansien osapuolten tietolähteisiin. Tällaiset järjestelmät voivat olla epätarkkoja, viivästyneitä, epätäydellisiä, saatavuudeltaan rajoittuneita tai sopimattomia tiettyihin käyttäjän tavoitteisiin.";
$terms_h2_availability = "Ei takuuta saatavuudesta";
$terms_p_avail_1 = "$site_name ei takaa keskeytymätöntä verkkosivuston käyttöä, jatkuvaa alustan saatavuutta, virheetöntä toimintaa, tarkkoja markkinatietoja tai minkään tietyn ominaisuuden saatavuutta.";
$terms_p_avail_2 = "Palveluita, sisältöä, sivuja, lomakkeita, integraatioita tai alustan kuvauksia voidaan muuttaa, keskeyttää tai lopettaa milloin tahansa.";
$terms_h2_third_party = "Kolmansien osapuolten palvelut";
$terms_p_tp_1 = "Verkkosivusto saattaa viitata kolmansien osapuolten pörsseihin, likviditeettipaikkoihin, analytiikkapalveluntarjoajiin, viestintätyökaluihin, isännöintipalveluihin tai teknisen infrastruktuurin tarjoajiin.";
$terms_p_tp_2 = "$site_name ei hallitse kolmansien osapuolten alustoja eikä ole vastuussa niiden saatavuudesta, maksuista, käytännöistä, tilirajoituksista, vaatimustenmukaisuusmenettelyistä, teknisistä vioista tai käyttäjien tappioista.";
$terms_h2_prohibited = "Kielletty käyttö";
$terms_p_prohibited = "Käyttäjät eivät saa käyttää tätä verkkosivustoa tai siihen liittyvää teknologiaa laittomiin, väärinkäyttäviin, petollisiin, manipulatiivisiin tai haitallisiin tarkoituksiin.";
$terms_li_1 = "Luvattoman pääsyn yrittäminen";
$terms_li_2 = "Väärien tai harhaanjohtavien tietojen antaminen";
$terms_li_3 = "Verkkosivuston käyttö laittomaan taloudelliseen toimintaan";
$terms_li_4 = "Verkkosivuston turvallisuuden tai toiminnallisuuden häirintä";
$terms_li_5 = "Verkkosivuston sisällön kopiointi tai väärinkäyttö ilman lupaa";
$terms_li_6 = "Yritys ohittaa vaatimustenmukaisuus- tai tekniset kontrollit";
$terms_h2_ip = "Immateriaalioikeudet";
$terms_p_ip_1 = "Verkkosivuston suunnittelu, teksti, brändäys, käyttöliittymäelementit, grafiikka, rakenne ja niihin liittyvät materiaalit ovat $site_name-palvelun omistuksessa tai lisensoituja sille, ellei toisin mainita.";
$terms_p_ip_2 = "Käyttäjät eivät saa jäljentää, jakaa, muokata tai kaupallisesti hyödyntää verkkosivuston materiaaleja ilman asianmukaista valtuutusta.";
$terms_h2_liability = "Vastuunrajoitus";
$terms_p_liab_1 = "Sovellettavan lain sallimassa laajimmassa mahdollisessa laajuudessa $site_name ei ole vastuussa tappioista, jotka aiheutuvat digitaalisten varojen kaupankäynnistä, markkinoiden volatiliteetista, teknisistä ongelmista, kolmansien osapuolten alustavioista, epätarkoista tiedoista, käyttäjien päätöksistä tai verkkosivuston sisältöön luottamisesta.";
$terms_p_liab_2 = "Käyttäjät käyttävät tätä verkkosivustoa omalla vastuullaan.";
$terms_h2_changes = "Muutokset näihin ehtoihin";
$terms_p_changes_1 = "$site_name saattaa päivittää näitä käyttöehtoja milloin tahansa. Päivitetyt ehdot saatetaan julkaista tällä sivulla.";
$terms_p_changes_2 = "Verkkosivuston jatkuva käyttö muutosten jälkeen tarkoittaa, että käyttäjät hyväksyvät päivitetyt ehdot.";

// PRIVACY PAGE
$privacy_h1 = "Tietosuojakäytäntö";
$privacy_intro_1 = "$site_name kunnioittaa käyttäjien yksityisyyttä ja sitoutuu käsittelemään henkilötietoja vastuullisesti, avoimesti ja turvallisesti.";
$privacy_intro_2 = "Tämä tietosuojakäytäntö selittää, mitä tietoja saatetaan kerätä, kun käyttäjät vierailevat tällä verkkosivustolla, lähettävät yhteydenottolomakkeita, pyytävät käyttöoikeutta tai ovat vuorovaikutuksessa $site_name-sisällön ja alustaan liittyvän viestinnän kanssa.";
$privacy_h2_collect = "Tiedot, joita saatamme kerätä";
$privacy_p_collect_1 = "$site_name saattaa kerätä tietoja, jotka käyttäjät ovat vapaaehtoisesti lähettäneet verkkosivuston lomakkeiden tai viestintäkanavien kautta.";
$privacy_li_fname = "Etunimi";
$privacy_li_lname = "Sukunimi";
$privacy_li_email = "Sähköpostiosoite";
$privacy_li_phone = "Puhelinnumero";
$privacy_li_inquiry = "Lähetetyn kyselyn tiedot";
$privacy_li_technical = "Perustekniset verkkosivuston käyttötiedot";
$privacy_h2_use = "Miten käytämme tietoja";
$privacy_p_use_1 = "Tietoja saatetaan käyttää käyttäjien pyyntöihin vastaamiseen, alustan käyttöoikeustietojen tarjoamiseen, verkkosivuston toiminnallisuuden parantamiseen, turvallisuuden ylläpitämiseen ja $site_name-palveluun liittyvien olennaisten päivitysten välittämiseen.";
$privacy_p_use_2 = "Saatamme myös käyttää yhdistettyä tai ei-tunnistavaa dataa verkkosivuston suorituskyvyn analysointiin, sisällön rakenteen parantamiseen ja vierailijoiden sivujemme kanssa käymän vuorovaikutuksen paremman ymmärtämisen tueksi.";
$privacy_h2_comm = "Viestinnän tarkoitukset";
$privacy_p_comm_1 = "Jos käyttäjä lähettää yhteystietoja, $site_name saattaa käyttää näitä tietoja vastatakseen kyselyyn, tarjotakseen käyttöönottotietoja, selventääkseen alustan käyttöoikeuspyyntöjä tai jakaakseen olennaisia palvelutietoja.";
$privacy_p_comm_2 = "Käyttäjät voivat pyytää viestinnän lopettamista, mikäli sovellettavissa.";
$privacy_h2_cookies = "Evästeet ja tekniset tiedot";
$privacy_p_cookies_1 = "Tämä verkkosivusto saattaa käyttää evästeitä, analytiikkatyökaluja ja vastaavia teknologioita parantaakseen selauskokemusta, seuratakseen suorituskykyä ja tukeakseen verkkosivuston turvallisuutta.";
$privacy_p_cookies_2 = "Tekniset tiedot voivat sisältää laitetyypin, selaintyypin, käyttöjärjestelmän, sivuvuorovaikutukset, viittaustiedot ja yleiset käyttötilastot.";
$privacy_h2_protection = "Tietosuojatoimenpiteet";
$privacy_p_prot_1 = "$site_name soveltaa kohtuullisia hallinnollisia, teknisiä ja organisatorisia suojatoimia suojatakseen lähetettyjä tietoja luvattomalta pääsyltä, väärinkäytöltä, katoamiselta tai paljastumiselta.";
$privacy_p_prot_2 = "Mikään verkkojärjestelmä ei kuitenkaan voi taata täydellistä turvallisuutta. Käyttäjien tulisi välttää arkaluontoisten taloudellisten tietojen, yksityisten lompakkoavainten, salasanojen, pörssitunnusten tai luottamuksellisten tilitietojen lähettämistä julkisten verkkosivustolomakkeiden kautta.";
$privacy_h2_third = "Kolmansien osapuolten palveluntarjoajat";
$privacy_p_third_1 = "$site_name saattaa käyttää kolmansien osapuolten palveluntarjoajia isännöintiin, analytiikkaan, viestintään, turvallisuuteen, sähköpostin toimitukseen, CRM-käsittelyyn tai tekniseen infrastruktuuriin.";
$privacy_p_third_2 = "Nämä palveluntarjoajat saattavat käsitellä rajoitettuja tietoja vain siinä määrin kuin on tarpeen verkkosivuston toiminnallisuuden ja siihen liittyvien palvelujen tukemiseksi.";
$privacy_google_choices = 'Voit hallita, miten Google käyttää vierailuistasi saatuja tietoja <a href="http://www.google.com/settings/ads" target="_blank" rel="noopener">Googlen mainosasetusten</a> kautta, kieltäytyä kiinnostuspohjaisesta mainonnasta <a href="https://tools.google.com/dlpage/gaoptout" target="_blank" rel="noopener">Google Analyticsin selainlaajennuksen avulla</a> tai tutustua <a href="https://www.google.com/intl/en/policies/privacy/" target="_blank" rel="noopener">Googlen tietosuojakäytäntöön</a> saadaksesi lisätietoja.';
$privacy_h2_sale = "Ei henkilötietojen myyntiä";
$privacy_p_sale_1 = "$site_name ei aio myydä tämän verkkosivuston kautta lähetettyjä henkilötietoja.";
$privacy_p_sale_2 = "Tietoja saatetaan jakaa vain tarvittaessa toiminnallisiin tarkoituksiin, lakisääteisen vaatimustenmukaisuuden, käyttäjäviestinnän, petosten ehkäisyn tai palveluihin liittyvän käsittelyn vuoksi.";
$privacy_h2_retention = "Tietojen säilytys";
$privacy_p_retention = "Henkilötietoja saatetaan säilyttää niin kauan kuin on tarpeen kyselyihin vastaamiseksi, liiketoimintatietojen ylläpitämiseksi, lakisääteisten velvoitteiden noudattamiseksi, alustaviestinnän parantamiseksi tai turvallisuuden ja petosten ehkäisyn tukemiseksi.";
$privacy_h2_rights = "Käyttäjän oikeudet";
$privacy_p_rights = "Sovellettavasta laista riippuen käyttäjillä saattaa olla oikeuksia, jotka liittyvät henkilötietojen käyttöön, korjaamiseen, poistamiseen, vastustamiseen, rajoittamiseen tai siirrettävyyteen.";
$privacy_h2_intl = "Kansainvälinen käyttö";
$privacy_p_intl_1 = "$site_name saattaa olla käyttäjien saatavilla eri lainkäyttöalueilta. Tietosuojasäännöt voivat vaihdella sijainnista riippuen.";
$privacy_p_intl_2 = "Käyttämällä tätä verkkosivustoa käyttäjät vahvistavat, että tietoja saatetaan käsitellä tämän tietosuojakäytännön ja sovellettavien toiminnallisten vaatimusten mukaisesti.";
$privacy_h2_policy_updates = "Käytännön päivitykset";
$privacy_p_updates_1 = "$site_name saattaa päivittää tätä tietosuojakäytäntöä ajoittain heijastaakseen muutoksia laissa, teknologiassa, sisäisissä menettelyissä tai verkkosivuston toiminnallisuudessa.";
$privacy_p_updates_2 = "Verkkosivuston jatkuva käyttö päivitysten jälkeen tarkoittaa, että käyttäjät hyväksyvät tarkistetun tietosuojakäytännön.";
// COOKIES PAGE
$cookies_h1 = "Evästekäytäntö";
$cookies_intro_1 = "Tämä evästekäytäntö selittää, miten $site_name käyttää evästeitä, analytiikkateknologioita ja vastaavia seurantatyökaluja, kun käyttäjät käyttävät tätä verkkosivustoa tai ovat vuorovaikutuksessa sen kanssa.";
$cookies_intro_2 = "Evästeet auttavat parantamaan verkkosivuston toiminnallisuutta, parantamaan käyttäjäkokemusta, analysoimaan suorituskykyä ja tukemaan turvallisuuteen liittyviä prosesseja.";
$cookies_intro_3 = "Jatkamalla tämän verkkosivuston käyttöä käyttäjät vahvistavat, että tiettyjä evästeitä ja niihin liittyviä teknologioita saatetaan käyttää tämän käytännön mukaisesti.";
$cookies_h2_what = "Mitä evästeet ovat?";
$cookies_p_what_1 = "Evästeet ovat pieniä tekstitiedostoja, jotka tallennetaan käyttäjän laitteelle verkkosivustolla vierailun yhteydessä.";
$cookies_p_what_2 = "Nämä tiedostot voivat sisältää tietoja, jotka auttavat verkkosivustoja tunnistamaan palaavia kävijöitä, muistamaan asetuksia, parantamaan navigointia ja mittaamaan verkkosivuston suorituskykyä.";
$cookies_h2_why = "Miksi käytämme evästeitä";
$cookies_p_why_1 = "$site_name saattaa käyttää evästeitä ja vastaavia teknologioita useisiin tarkoituksiin.";
$cookies_li_1 = "Verkkosivuston toiminnallisuuden ylläpito";
$cookies_li_2 = "Käyttäjäkokemuksen parantaminen";
$cookies_li_3 = "Käyttäjän asetusten muistaminen";
$cookies_li_4 = "Kävijöiden käyttäytymisen ymmärtäminen";
$cookies_li_5 = "Verkkosivuston suorituskyvyn mittaaminen";
$cookies_li_6 = "Teknisten ongelmien tunnistaminen";
$cookies_li_7 = "Verkkosivuston turvallisuuden tukeminen";
$cookies_li_8 = "Väärinkäytön estäminen";
$cookies_h2_essential = "Välttämättömät evästeet";
$cookies_p_ess_1 = "Tietyt evästeet ovat välttämättömiä verkkosivuston asianmukaiselle toiminnalle.";
$cookies_p_ess_2 = "Nämä evästeet auttavat ylläpitämään turvallisuutta, navigointitoiminnallisuutta, istunnonhallintaa ja muita verkkosivuston keskeisiä toimintoja.";
$cookies_p_ess_3 = "Ilman välttämättömiä evästeitä osa verkkosivustosta ei ehkä toimi oikein.";
$cookies_h2_analytics = "Analytiikkaevästeet";
$cookies_p_an_1 = "Analytiikkaevästeet auttavat meitä ymmärtämään, miten kävijät ovat vuorovaikutuksessa verkkosivuston sisällön kanssa.";
$cookies_p_an_2 = "Nämä teknologiat saattavat kerätä tietoja sivuvierailuista, navigointikuvioista, laitetyypeistä, selainkokoonpanoista ja yleisistä verkkosivuston käyttömittareista.";
$cookies_p_an_3 = "Analytiikkatiedot yhdistetään tyypillisesti ja käytetään verkkosivuston suorituskyvyn ja käyttäjäkokemuksen parantamiseen.";
$cookies_h2_functional = "Toiminnalliset evästeet";
$cookies_p_fun_1 = "Toiminnallisia evästeitä saatetaan käyttää käyttäjien valitsemien asetusten ja mieltymysten muistamiseen.";
$cookies_p_fun_2 = "Esimerkkejä voivat olla kieliasetukset, käyttöliittymäasetukset, näyttövaihtoehdot tai muut mukautusominaisuudet.";
$cookies_h2_third = "Kolmansien osapuolten teknologiat";
$cookies_p_third_1 = "$site_name saattaa käyttää kolmansien osapuolten palveluntarjoajia, analytiikka-alustoja, mainosteknologioita tai suorituskyvyn seurantatyökaluja.";
$cookies_p_third_2 = "Nämä kolmannet osapuolet saattavat sijoittaa omia evästeitään tai seurantateknologioitaan omien yksityisyyskäytäntöjensä mukaisesti.";
$cookies_p_third_3 = "$site_name ei hallitse kolmansien osapuolten evästekäytäntöjä ja suosittelee ulkoisten palveluntarjoajien yksityisyysasiakirjojen tarkistamista soveltuvin osin.";
$cookies_h2_manage = "Evästeiden hallinta";
$cookies_p_manage_1 = "Useimmat nykyaikaiset selaimet antavat käyttäjien hallita, rajoittaa tai poistaa evästeitä selainasetusten kautta.";
$cookies_p_manage_2 = "Käyttäjät voivat halutessaan poistaa evästeet kokonaan käytöstä, vaikka tietyt verkkosivuston ominaisuudet eivät ehkä toimi tarkoitetulla tavalla sen jälkeen.";
$cookies_p_manage_3 = "Selainasetukset tarjoavat tyypillisesti vaihtoehtoja:";
$cookies_li_manage_1 = "Estä kaikki evästeet";
$cookies_li_manage_2 = "Poista olemassa olevat evästeet";
$cookies_li_manage_3 = "Vastaanota evästeilmoituksia";
$cookies_li_manage_4 = "Rajoita tiettyjä evästeluokkia";
$cookies_h2_data = "Tietosuoja";
$cookies_p_data = "Evästeisiin liittyviä tietoja saatetaan käsitellä tietosuojakäytäntömme ja sovellettavien tietosuojalakien mukaisesti.";
$cookies_h2_policy_updates = "Käytännön päivitykset";
$cookies_p_updates_1 = "$site_name saattaa päivittää tätä evästekäytäntöä ajoittain heijastaakseen teknologisia muutoksia, lakisääteisiä vaatimuksia tai toiminnallisia parannuksia.";
$cookies_p_updates_2 = "Verkkosivuston jatkuva käyttö päivitysten jälkeen tarkoittaa tarkistetun käytännön hyväksymistä.";
// AML PAGE
$aml_h1 = "Rahanpesun estämisen käytäntö";
$aml_intro_1 = "$site_name tunnustaa rahanpesun vastaisen tietoisuuden, taloudellisen eheyden ja vastuullisen osallistumisen merkityksen digitaalisten varojen markkinoilla.";
$aml_intro_2 = "Tämä rahanpesun estämisen käytäntö selittää yleiset periaatteet, joita $site_name soveltaa kryptovaluuttoihin liittyvien teknologioiden laittoman käytön, epäilyttävän taloudellisen toiminnan, petosten, pakotteiden kiertämisen, terrorismin rahoituksen ja muun kielletyn toiminnan ehkäisemiseksi.";
$aml_h2_purpose = "Tämän käytännön tarkoitus";
$aml_p_purpose_1 = "Tämän käytännön tarkoituksena on luoda vastuullinen kehys sille, miten $site_name lähestyy rahanpesun vastaista tietoisuutta digitaalisten varojen ekosysteemissä.";
$aml_p_purpose_2 = "Kryptovaluuttamarkkinat voivat sisältää rajat ylittävää toimintaa, hajautettua infrastruktuuria, kolmansien osapuolten pörssejä ja ulkoisia lompakkojärjestelmiä. Tästä syystä käyttäjien tulisi ymmärtää, että vaatimustenmukaisuusvelvoitteet voivat vaihdella heidän lainkäyttöalueensa, tilityyppinsä, pörssin palveluntarjoajan ja paikallisen sääntely-ympäristön mukaan.";
$aml_h2_responsible = "Digitaalisten varojen teknologian vastuullinen käyttö";
$aml_p_resp_1 = "Käyttäjien odotetaan olevan vuorovaikutuksessa $site_name-palvelun ja kaikkien siihen liittyvien digitaalisten varojen palvelujen kanssa vastuullisesti, laillisesti ja sovellettavien sääntöjen mukaisesti.";
$aml_p_resp_2 = "$site_name ei tue tai kannusta kryptomarkkinoiden, kaupankäyntijärjestelmien, automaattisten teknologioiden tai analyysityökalujen käyttöä laittomiin tarkoituksiin.";
$aml_li_1 = "Rahanpesu";
$aml_li_2 = "Terrorismin rahoitus";
$aml_li_3 = "Petos tai taloudellinen harhaanjohtaminen";
$aml_li_4 = "Pakotteiden kiertäminen";
$aml_li_5 = "Markkinamanipulaatio";
$aml_li_6 = "Varastettujen varojen tai vaarantuneiden tilien käyttö";
$aml_li_7 = "Mikä tahansa sovellettavan lain kieltämä toiminta";
$aml_h2_exchange = "Kolmansien osapuolten pörssien vaatimustenmukaisuus";
$aml_p_ex_1 = "$site_name saattaa viitata, olla vuorovaikutuksessa tai tarjota analyyttistä infrastruktuuria, joka liittyy kolmansien osapuolten digitaalisten varojen paikkoihin tai likviditeettiympäristöihin.";
$aml_p_ex_2 = "Kolmansien osapuolten pörssit, säilytyspalvelut, maksunkäsittelijät ja palveluntarjoajat saattavat soveltaa omia vaatimustenmukaisuusmenettelyjään, mukaan lukien henkilöllisyyden todentaminen, transaktioiden seuranta, pakoteseulonta, tilirajoitukset, varojen alkuperän tarkistukset tai lisävarmennusvaatimukset.";
$aml_h2_user_responsibility = "Käyttäjän vastuu";
$aml_p_user_1 = "Käyttäjät ovat vastuussa sen varmistamisesta, että heidän toimintansa on laillista heidän sijainnissaan ja johdonmukaista asiaankuuluvien sääntelyviranomaisten, pörssien, rahoituslaitosten tai palveluntarjoajien asettamien velvoitteiden kanssa.";
$aml_p_user_2 = "Käyttäjien ei tulisi yrittää piilottaa omistajuutta, naamioida transaktioiden alkuperää, antaa vääriä tietoja, ohittaa varmennusprosesseja tai käyttää digitaalisten varojen infrastruktuuria tavalla, jota voidaan pitää epäilyttävänä tai laittomana.";
$aml_h2_suspicious = "Epäilyttävä toiminta";
$aml_p_suspicious = "Epäilyttävä toiminta voi sisältää käyttäytymistä, joka vaikuttaa epäjohdonmukaiselta normaaliin käyttöön, yrityksiä väärinkäyttää kaupankäyntijärjestelmiä, toistuvaa harhaanjohtavien tietojen lähettämistä, osallistumista rajoitetuille lainkäyttöalueille tai petoksiin, laittomiin varoihin tai kiellettyihin palveluihin liittyvää toimintaa.";
$aml_h2_evasion = "Ei kiertämistä tai välttelyä";
$aml_p_evasion = "Käyttäjät eivät saa yrittää kiertää vaatimustenmukaisuuskontrolleja, teknisiä rajoituksia, henkilöllisyyden varmennusjärjestelmiä, maantieteellisiä rajoituksia tai riskienseurantaprosesseja.";
$aml_h2_policy_updates = "Käytännön päivitykset";
$aml_p_updates_1 = "$site_name saattaa päivittää tätä rahanpesun estämisen käytäntöä ajoittain heijastaakseen muutoksia sääntely-odotuksissa, markkinastandardeissa, sisäisissä menettelyissä tai digitaalisten varojen toimialan käytännöissä.";
$aml_p_updates_2 = "Verkkosivuston jatkuva käyttö päivitysten jälkeen tarkoittaa, että käyttäjät hyväksyvät tarkistetun käytännön.";
// RISK PAGE
$risk_h1 = "Riskitiedotus";
$risk_intro_1 = "Kryptovaluuttakauppaan ja digitaalisiin varoihin osallistumiseen liittyy merkittävää riskiä. Hinnat voivat liikkua nopeasti, likviditeetti voi muuttua odottamatta, ja markkinaolosuhteet voivat muuttua erittäin epävakaiksi lyhyessä ajassa.";
$risk_intro_2 = "Tämä riskitiedotus selittää tärkeitä näkökohtia, jotka käyttäjien tulisi tarkistaa ennen digitaalisten varojen markkinoiden, automaattisten kaupankäyntiteknologioiden, tekoälyn tuottamien markkinasignaalien tai kryptovaluuttoihin liittyvän analyyttisen infrastruktuurin kanssa vuorovaikutuksessa olemista.";
$risk_h2_no_guarantee = "Ei taattuja tuloksia";
$risk_p_no_guarantee_1 = "$site_name ei takaa voittoja, sijoitustuottoja, kaupankäynnin menestystä, signaalien tarkkuutta, keskeytymätöntä pääsyä tai positiivisia taloudellisia tuloksia.";
$risk_p_no_guarantee_2 = "Kaikki esimerkit, tilastot, käyttöliittymäelementit, suorituskykymittarit, signaali-indikaattorit tai markkinasimulaatiot, jotka näytetään tällä verkkosivustolla, tarjotaan vain informatiivisiin ja havainnollistaviin tarkoituksiin.";
$risk_h2_volatility = "Kryptovaluuttamarkkinoiden volatiliteetti";
$risk_p_vol_1 = "Digitaalisten varojen markkinat ovat erittäin epävakaita. Hintoihin voivat vaikuttaa likviditeettipulat, makrotaloudelliset uutiset, sääntelymuutokset, pörssikatkokset, lohkoketjutapahtumat, sijoittajien mieliala, velkavipuun liittyvä toiminta tai markkinamanipulaatio.";
$risk_p_vol_2 = "Volatiliteetti voi johtaa nopeisiin tappioihin, äkillisiin hintakuiluihin, hintaliukumaan, likvidaatiotapahtumiin tai kyvyttömyyteen suorittaa transaktioita odotetuilla hinnoilla.";
$risk_h2_ai = "Tekoälysignaalien rajoitukset";
$risk_p_ai_1 = "Tekoälyjärjestelmät voivat analysoida suuria määriä markkinatietoa, mutta ne eivät voi poistaa epävarmuutta.";
$risk_p_ai_2 = "Tekoälyyn perustuvat indikaattorit, kaupankäyntisignaalit, markkinaluokitukset ja ennustemallit voivat olla epätäydellisiä, viivästyneitä, virheellisiä tai sopimattomia käyttäjän henkilökohtaiseen taloudelliseen tilanteeseen.";
$risk_p_ai_3 = "Käyttäjien ei tulisi luottaa yksinomaan mihinkään tekoälysignaaliin tehdessään kaupankäynti-, sijoitus- tai taloudellisia päätöksiä.";
$risk_h2_tech = "Teknologia- ja toteutusriski";
$risk_p_tech_1 = "Kaupankäyntiteknologiaan voivat vaikuttaa internet-yhteysongelmat, palvelinkatkokset, viiveet, ohjelmistovirheet, API-viat, pörssikatkokset, virheelliset tietosyötteet tai kolmansien osapuolten infrastruktuurin rajoitukset.";
$risk_p_tech_2 = "$site_name ei takaa keskeytymätöntä pääsyä tietoihin, signaaleihin, alustan ominaisuuksiin, kolmansien osapuolten järjestelmiin tai toteutusympäristöihin.";
$risk_h2_liquidity = "Likviditeetti- ja pörssiriski";
$risk_p_liq_1 = "Likviditeetti voi vaihdella merkittävästi pörssien ja digitaalisten varojen välillä. Joillakin markkinoilla voi esiintyä matalaa tilauskirjan syvyyttä, laajoja spreadejä, viivästynyttä toteutusta tai jyrkkiä hintaliikkeitä stressin aikoina.";
$risk_p_liq_2 = "Kolmansien osapuolten pörssit saattavat asettaa maksuja, rajoja, rajoituksia, tilitarkastuksia, nostoviiveitä, kaupankäyntikeskeytyksiä tai maantieteellisiä rajoituksia.";
$risk_h2_regulatory = "Sääntelyriski";
$risk_p_reg_1 = "Digitaalisten varojen sääntely voi muuttua nopeasti ja vaihdella maiden, alueiden ja lainkäyttöalueiden välillä.";
$risk_p_reg_2 = "Sääntelymuutokset voivat vaikuttaa markkinoillepääsyyn, varojen saatavuuteen, pörssitoimintaan, raportointivelvoitteisiin, verotukseen, kaupankäyntirajoituksiin tai alustan toiminnallisuuteen.";
$risk_h2_user_responsibility = "Käyttäjän vastuu";
$risk_p_user_1 = "Käyttäjät ovat yksinomaan vastuussa riskien arvioinnista, sovellettavien lakien ymmärtämisestä, taloudellisen tilanteensa tarkistamisesta ja itsenäisten päätösten tekemisestä.";
$risk_p_user_2 = "$site_name ei tarjoa henkilökohtaista taloudellista, sijoitus-, laki-, kirjanpito- tai veroneuvontaa.";
$risk_h2_advice = "Hae ammattilaisen neuvoa";
$risk_p_advice_1 = "Käyttäjien tulisi konsultoida päteviä ammattilaisia ennen merkittävien taloudellisten päätösten tekemistä, jotka koskevat kryptovaluuttaa, kaupankäyntijärjestelmiä, automaattisia teknologioita tai digitaalisten varojen sijoituksia.";
$risk_p_advice_2 = "Käyttämällä tätä verkkosivustoa käyttäjät vahvistavat ymmärtävänsä digitaalisten varojen markkinoihin liittyvät riskit ja ottavat vastuun omista päätöksistään.";
// EXCHANGES PAGE
$exchanges_h1 = "Tuetut pörssit";
$exchanges_intro_1 = "$site_name on suunniteltu monimarkkinaisen tietolähestymistavan ympärille, joka arvioi digitaalisten varojen toimintaa laajassa kryptovaluuttakaupankäyntiympäristöjen valikoimassa.";
$exchanges_intro_2 = "Nykyaikaiset kryptomarkkinat toimivat lukuisten pörssien, likviditeetin tarjoajien, johdannaispaikkojen ja kaupankäyntiekosysteemien kautta. Toiminnan ymmärtäminen näissä ympäristöissä on olennaista kattavan markkinatiedon rakentamiseksi.";
$exchanges_h2_philosophy = "Markkinoiden kattavuusfilosofia";
$exchanges_p_phil_1 = "Sen sijaan, että luottaisi yhteen paikkaan, $site_name on rakennettu koko markkinan kattavan analyysin käsitteen ympärille.";
$exchanges_p_phil_2 = "Kryptovaluuttojen hinnoittelu, likviditeettitilanne, volatiliteettikäyttäytyminen ja institutionaalinen toiminta eroavat usein pörssien välillä. Havainnoimalla laajempia markkinaolosuhteita analyyttiset mallit voivat saada lisäkontekstia uusiin trendeihin ja mahdollisiin poikkeamiin liittyen.";
$exchanges_h2_spot = "Spot-markkinoiden seuranta";
$exchanges_p_spot_1 = "Spot-pörssit edustavat merkittävää osaa globaalista digitaalisten varojen toiminnasta.";
$exchanges_p_spot_2 = "Markkinatietojärjestelmät saattavat arvioida spot-markkinatietoja, mukaan lukien:";
$exchanges_li_spot_1 = "Hinta-aktiivisuus";
$exchanges_li_spot_2 = "Likviditeettisyvyys";
$exchanges_li_spot_3 = "Tilauskirjan rakenne";
$exchanges_li_spot_4 = "Kaupankäyntivolyymi";
$exchanges_li_spot_5 = "Osto-myyntispreadin käyttäytyminen";
$exchanges_li_spot_6 = "Markkinoiden epätasapainotilanteet";
$exchanges_h2_deriv = "Johdannaismarkkinat";
$exchanges_p_deriv_1 = "Kryptovaluuttajohdannaisilla on yhä tärkeämpi rooli laajemmassa digitaalisten varojen ekosysteemissä.";
$exchanges_p_deriv_2 = "Futuurit, ikuiset sopimukset, optiot ja velkavipuun perustuva kaupankäyntitoiminta voivat vaikuttaa markkinamielialaan, volatiliteettiolosuhteisiin ja suuntaiseen momenttiin.";
$exchanges_p_deriv_3 = "Analyyttinen infrastruktuuri saattaa arvioida johdannaisiin liittyvää tietoa arvioidessaan laajempia markkinaolosuhteita.";
$exchanges_h2_liquidity = "Likviditeettianalyysi";
$exchanges_p_liq_1 = "Likviditeetti on edelleen yksi tärkeimmistä markkinoiden vakautta ja toteutuksen laatua vaikuttavista tekijöistä.";
$exchanges_p_liq_2 = "$site_name saattaa analysoida likviditeettitilannetta useilla kaupankäyntipaikoilla tunnistaakseen:";
$exchanges_li_liq_1 = "Likviditeetin keskittyminen";
$exchanges_li_liq_2 = "Äkilliset likviditeetin vedot";
$exchanges_li_liq_3 = "Tilauskirjan paine";
$exchanges_li_liq_4 = "Markkinoiden epätasapainotapahtumat";
$exchanges_li_liq_5 = "Epätavallinen kaupankäyntikäyttäytyminen";
$exchanges_h2_availability = "Pörssin saatavuus";
$exchanges_p_avail_1 = "Pörssin saatavuus voi vaihdella maantieteellisen sijainnin, lainkäyttöalueen, tilikelpoisuuden, sääntelyvaatimusten ja teknisten rajoitusten mukaan.";
$exchanges_p_avail_2 = "Tietyt pörssit tai palvelut eivät ehkä ole kaikkien käyttäjien saatavilla ja saattavat asettaa omia rajoituksiaan, varmennusvaatimuksiaan, maksujaan ja toimintakäytäntöjään.";
$exchanges_h2_third = "Kolmansien osapuolten alustat";
$exchanges_p_third_1 = "Kaikki viittaukset pörsseihin, likviditeettipaikkoihin, välittäjiin, säilytyspalveluihin tai markkinatoimijoihin tehdään vain informatiivisiin tarkoituksiin.";
$exchanges_p_third_2 = "$site_name ei omista, käytä, hallitse tai takaa kolmansien osapuolten pörssien palveluja.";
$exchanges_p_third_3 = "Käyttäjät ovat edelleen vastuussa minkä tahansa pörssin, kaupankäyntipaikan tai digitaalisen varan palvelun arvioinnista ennen käyttöä.";
$exchanges_h2_monitoring = "Jatkuva markkinaseuranta";
$exchanges_p_mon_1 = "Kryptovaluuttamarkkinat toimivat jatkuvasti, usein kaksikymmentäneljä tuntia vuorokaudessa, seitsemän päivää viikossa.";
$exchanges_p_mon_2 = "Markkinarakenteen kehittyessä uusia pörssejä syntyy, likviditeetti siirtyy ja kaupankäyntitoiminta muuttuu.";
$exchanges_p_mon_3 = "$site_name pyrkii jatkuvasti ylläpitämään tietoisuutta muuttuvista markkinaolosuhteista laajan digitaalisten varojen ekosysteemin analyyttisen kattavuuden avulla.";

// ==========================================
// RISK WARNING PAGE
// ==========================================
$page_title_risk_warning = "Riskivaroitus | $site_name";
$page_description_risk_warning = "Ymmärrä automaattisen kryptokaupankäynnin riskit $site_name-palvelun kanssa, mukaan lukien markkinoiden volatiliteetti, toteutusriski ja sääntelynäkökohdat.";
$risk_warning_breadcrumb_name = "Riskivaroitus";
$risk_warning_title = "Riskivaroitus";
$risk_warning_intro = "Riskien ymmärtäminen on ensimmäinen askel kohti itsevarmaa kaupankäyntiä.";

$risk_warning_ai_heading = "Miten tekoälyjärjestelmämme auttaa hallitsemaan riskiä:";
$risk_warning_ai_1 = "<strong>Algoritminen tehokkuus ja tunteeton kaupankäynti:</strong> Kehittyneet algoritmit analysoivat markkinasignaaleja toteuttaakseen kauppoja objektiivisesti optimaalisina ajankohtina.";
$risk_warning_ai_2 = "<strong>Datavetoiset strategiat:</strong> Strategiat perustuvat vahvistettuihin markkinakuvioihin ja reaaliaikaiseen analyysiin arvailun sijaan.";
$risk_warning_ai_3 = "<strong>Joustavat asetukset ja täysi hallinta:</strong> Säädä riskiparametrejasi milloin tahansa. Seuraa kaikkia saldoja ja kauppoja läpinäkyvästi kojelaudallasi ilman piilotettuja maksuja ja rajoituksettomia nostoja.";

$risk_warning_disclaimer = "<strong>Vastuuvapauslauseke:</strong> Kaupankäyntiin liittyy aina riski. Automaattiset järjestelmät (mukaan lukien tekoäly) eivät takaa voittoa, voivat epäonnistua ohjelmistovirheiden tai odottamattomien markkinatapahtumien vuoksi ja vaativat käyttäjän valvontaa. Aiempi tuotto ei ole osoitus tulevista tuloksista. Tämä alusta on tarkoitettu vain informatiivisiin ja markkinointitarkoituksiin eikä tarjoa taloudellista neuvontaa.";

$risk_warning_s1_heading = "1. Yleiset ja kryptovaluuttamarkkinariskit";
$risk_warning_s1_intro = "Kryptovaluutat ovat erittäin epävakaita, spekulatiivisia varoja, jotka toimivat 24/7 minimaalisella sääntelyvalvonnalla useimmilla lainkäyttöalueilla.";
$risk_warning_s1_1 = "Arvot voivat vaihdella dramaattisesti lyhyessä ajassa, mikä voi johtaa sijoitetun pääoman täydelliseen menettämiseen.";
$risk_warning_s1_2 = "Markkina-arvoihin voivat vaikuttaa voimakkaasti sääntelymuutokset, tekninen kehitys, tietoturvaloukkaukset tai laajemmat makrotaloudelliset tapahtumat.";
$risk_warning_s1_3 = "Jotkin varat voivat menettää kaiken arvonsa kokonaan. Sijoita vain varoja, joiden menettämiseen sinulla on varaa.";

$risk_warning_s2_heading = "2. Toteutus-, likviditeetti- ja velkavipuriskit";
$risk_warning_s2_1 = "<strong>Markkinoiden volatiliteetti ja likviditeetti:</strong> Äärimmäiset hintaliikkeet (10–20 %+ päivässä) tai matala likviditeetti (erityisesti pienemmissä kolikoissa) voivat johtaa viiveisiin, alustakatkoksiin ja vakavaan toteutushintaliukumaan. Stop-loss-toimeksiannot eivät voi taata tappiorajoja äärimmäisissä olosuhteissa.";
$risk_warning_s2_2 = "<strong>Velkavipu- ja marginaaliriskit:</strong> Velkavipupohjaiset tuotteet vahvistavat sekä voittoja että tappioita, mikä tarkoittaa, että voit menettää enemmän kuin alkuperäisen talletuksesi. Noin 70–80 % vähittäissijoittajien tileistä menettää rahaa käydessään kauppaa velkavipupohjaisilla tuotteilla.";

$risk_warning_s3_heading = "3. Tekniset, kyberturvallisuus- ja kolmansien osapuolten riskit";
$risk_warning_s3_1 = "<strong>Tekniset tekijät:</strong> Verkkopohjaiseen kaupankäyntiin liittyy luonnostaan riskejä, kuten internet-yhteyden katkeaminen, laitteisto-/ohjelmistovirheet ja palvelun toimimattomuus.";
$risk_warning_s3_2 = "<strong>Kyberturvallisuus:</strong> Kryptovaluuttatilit ovat usein phishing-hyökkäysten, haittaohjelmien ja hakkeroinnin kohteina. Transaktiot ovat peruuttamattomia; kirjautumistietojesi vaarantuminen voi johtaa pysyvään menetykseen.";
$risk_warning_s3_3 = "<strong>Kolmansien osapuolten alustat:</strong> Tämä verkkosivusto voi yhdistää käyttäjiä kolmansien osapuolten alustoihin. Emme hallitse, tue tai takaa niiden turvallisuutta, toimintaa tai vakavaraisuutta. Suorita aina oma huolellinen tarkastuksesi ennen varojen tallettamista ulkoisille alustoille.";

$risk_warning_s4_heading = "4. Sääntely-, vero- ja loppusäännökset";
$risk_warning_s4_1 = "<strong>Lakisääteinen vaatimustenmukaisuus ja verot:</strong> Sääntelykehykset vaihtelevat huomattavasti ja muuttuvat nopeasti. Käyttäjät ovat yksinomaan vastuussa siitä, että heidän kaupankäyntitoimintansa noudattaa paikallisia lakeja ja omien verovelvoitteidensa täyttämisestä.";
$risk_warning_s4_2 = "<strong>Ei voittotakuita:</strong> Ei ole olemassa \"turvallista\" tai riskitöntä kryptokaupankäyntiä. Kaikki tuottoarvot tai suorituskykyesimerkit ovat puhtaasti hypoteettisia.";
$risk_warning_s4_3 = "<strong>Sopivuus:</strong> Jos et täysin ymmärrä riskejä, luotat välttämättömiin varoihin tai käyt kauppaa lainatulla rahalla, kryptokaupankäynti ei sovi sinulle. Konsultoi riippumatonta lisensoitua talousneuvojaa, jos olet epävarma.";

$risk_warning_contact = "<strong>Yhteystiedot:</strong> Jos sinulla on kysyttävää tästä lausunnosta tai haluat lähettää kyselyn, ota yhteyttä viralliseen asiakaspalvelutiimiimme verkkosivustomme yhteydenottolomakkeen kautta.";
$footer_risk_warning = "Riskivaroitus";

$lang_loaded = true;
