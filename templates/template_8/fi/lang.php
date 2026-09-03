<?php
require __DIR__ . '/../lang.php';
$site_lang = 'fi-FI';
$form_language = 'fi'; // matches this page's own language, not the offer's global default

// ============================================================
// FI TRANSLATION OVERRIDES
// Identity/config vars ($site_name, $site_slug, $site_domain, $site_url, $app_price, $app_currency, $site_lang, $country_name, $country_flag_code, $privacy_last_update, $rating_value, $rating_count, $review_count, $form_country, $form_language, $form_phone_country, $form_only_countries, $review_1_author, $review_2_author, $review_3_author, $review_4_author, $quiz_consultant_name) are
// intentionally NOT overridden -- they stay exactly as inherited from the
// root lang.php.
// ============================================================

// Brand / Platform Variables

// Geo-language stats bar fallback content (used by the language-folder pages'
// own "stats" section; the fr/de/it/nl folders override these with native
// translations, the other 19 folders inherit this English fallback)
$stat_1_value = "4M+";
$stat_1_label = "Rekisteröityneet Käyttäjät";
$stat_2_value = "98+";
$stat_2_label = "Tuetut Maat";
$stat_3_value = "65+";
$stat_3_label = "Saatavilla Olevat Valuutat";
$stat_4_value = "24/7";
$stat_4_label = "Tapahtumien Käyttöoikeus";
$stat_5_value = "256-bit";
$stat_5_label = "Salausstandardi";
$stat_6_value = "$500M+";
$stat_6_label = "Asiakkaiden Kokonaistalletukset";

// Keitaro Form Integration Variables (defaults -- overwritten per-launch by
// generate_lang_files(); must stay valid on their own since nothing else in
// this file replaces them for a page that's ever served un-generated)

// 4 Verified Reviews (TZ Item 8)
$review_1_role = "Ranska";
$review_1_text = "Aloitin 500 €:lla vain nähdäkseni, miten alusta toimii. Noin kolmen viikon jälkeen saldoni oli kasvanut noin 1120 €:oon. Käyttöliittymä on helppokäyttöinen, ja markkinanäkemykset auttoivat minua tekemään parempia päätöksiä.";
$review_1_badge = "Ilmoitettu Tuotto +18,4%";

$review_2_role = "Saksa";
$review_2_text = "Olen kokeillut muutamia kaupankäyntialustoja aiemmin, mutta tämä on ollut suosikkini tähän mennessä. Se on helppo navigoida, työkalut ovat todella hyödyllisiä, ja kokemukseni on ollut kokonaisuudessaan erittäin positiivinen.";
$review_2_badge = "Ilmoitettu Tuotto +19,1%";

$review_3_role = "Italia";
$review_3_text = "Eniten minua vaikutti se, kuinka intuitiiviselta kaikki tuntuu. Rekisteröinti oli nopea, kojelauta on hyvin järjestetty, ja alusta on tehnyt kaupankäynnistä minulle paljon mukavampaa.";
$review_3_badge = "Ilmoitettu Tuotto +16,8%";

$review_4_role = "Alankomaat";
$review_4_text = "Minulla ei ollut aiempaa kaupankäyntikokemusta, joten aloitin 750 €:lla. Kuukauden sisällä saavutin hieman yli 1765 € seuraamalla työkaluja ja oppimateriaaleja. Se on ollut hieno tapa rakentaa itseluottamusta.";
$review_4_badge = "Ilmoitettu Tuotto +18,0%";

$review_verified_label = "Vahvistettu Käyttäjä";
$reviews_section_title = "Arvosteluja $site_name:sta";
$reviews_badge_trustworthy = "Luotettava";
$reviews_summary_rating = "4,7";
$reviews_summary_count = "189";
$reviews_summary_desc = "Tehokas ja intuitiivinen kaupankäyntialusta, jossa on vankat automatisoidut työkalut, reaaliaikaiset analyysit ja kattavat oppimisresurssit.";

// CONSULTANT / CHAT QUIZ (TZ Item 13)
$quiz_consultant_role = "Kaupankäyntikonsultti";
$quiz_text_welcome = "Hei! Olen henkilökohtainen kaupankäyntiavustajasi. Tee 30 sekunnin testi selvittääksesi, kuinka automatisoitu tekoälykaupankäynti voisi toimia sinulle.";
$quiz_text_q1 = "Oletko koskaan käynyt kauppaa kryptovaluutoilla tai finanssimarkkinoilla aiemmin?";
$quiz_text_a1_yes = "Kyllä, minulla on jonkin verran kokemusta";
$quiz_text_a1_no = "Ei, olen täysi aloittelija";
$quiz_text_q2 = "Mikä on ensisijainen taloudellinen tavoitteesi online-kaupankäynnissä?";
$quiz_text_q3 = "Haluaisitko tekoälyn suorittavan kaupat automaattisesti, vai käydä kauppaa manuaalisesti?";
$quiz_text_a3_yes = "Automatisoitu Tekoälykaupankäynti (Suositeltu)";
$quiz_text_a3_no = "Manuaalinen Kaupankäynti Tekoälysignaaleilla";
$quiz_text_q4 = "Mikä on alkuperäinen budjettisi kaupankäyntiin?";
$quiz_text_a4_1 = "250 $ - 500 $";
$quiz_text_a4_2 = "500 $ - 1500 $";
$quiz_text_a4_3 = "1500 $+";
$quiz_text_q5 = "Oletko valmis luomaan tilisi ja saamaan täyden pääsyn alustalle?";
$quiz_text_a5_yes = "Kyllä, aloitetaan!";
$quiz_text_a5_no = "Haluaisin lisätietoja";
$quiz_text_loader = "Analysoimme vastauksiasi ja valmistelemme optimaaliset kaupankäyntiparametrit...";
$quiz_text_final_ttl = "Tilisi Asetukset Ovat Valmiit!";
$quiz_text_processing = "Määritetään alustan käyttöoikeuttasi...";
$quiz_text_typing = "kirjoittaa...";
$quiz_placeholder_fname = "Etunimi";
$quiz_placeholder_lname = "Sukunimi";
$quiz_placeholder_email = "Sähköpostiosoite";
$quiz_placeholder_phone = "Puhelinnumero";
$quiz_btn_submit = "Viimeistele Rekisteröinti";

// METADATA (TZ Item 10)
$home_meta_title = "$site_name — Kaupankäyntialusta | Virallinen Sivusto";
$home_meta_description = "Virallinen $site_name-sivusto tarjoaa turvallisen kryptovaluuttojen kaupankäyntialustan edistyneillä kaupankäyntityökaluilla, reaaliaikaisilla markkinanäkemyksillä ja käyttäjäystävällisellä kokemuksella kauppiaille.";

// NAVIGATION & HEADER (TZ Item 3, 12)
$nav_about = "Tietoa Meistä";
$nav_how = "Näin Se Toimii";
$nav_why = "Miksi Käydä Kauppaa";
$nav_faq = "UKK";
$nav_contacts = "Ota Yhteyttä";
$nav_signin = "Kirjaudu Sisään";
$nav_signup = "Rekisteröidy";

$mobnav_home = "Etusivu";
$mobnav_product = "Tuote";
$mobnav_offer = "Tarjous";
$mobnav_contact = "Ota Yhteyttä";
$mobnav_faq = "UKK";
$mobnav_signup = "Rekisteröidy";

// HERO SECTION
$hero_h1 = "<mark>$site_name</mark>-alusta";
$hero_text = "Virallinen $site_name-kryptovaluuttojen kaupankäyntialusta";

// LEAD FORM
$form_fname_placeholder = "Etunimi";
$form_lname_placeholder = "Sukunimi";
$form_email_placeholder = "Sähköposti";
$form_phone_placeholder = "Puhelinnumero";
$form_btn_submit = "Rekisteröidy";
$form_disclaimer_text = "Syöttämällä henkilötietosi ja napsauttamalla painiketta hyväksyt tämän sivuston <a class='link link-primary' href='privacy.php'>Tietosuojakäytännön</a> ja <a class='link link-primary' href='conditions.php'>Käyttöehdot</a>.";

// SECURITY BADGES
$badge_ssl = "256-bit SSL";
$badge_payments = "Turvalliset Maksut";
$badge_2fa = "2FA";
$badge_cold_storage = "98% Cold Storage";
$badge_regulated = "Säännelty";
$badge_traders_trust = "Yli 4M Kauppiasta Luottaa";

// SAFE SECTION (Vos fonds sont en sécurité)
$safe_title = "<mark>Varasi Ovat Turvassa</mark> $site_name:ssa";
$safe_desc = "Pankkitason salaus, vahvistetut maksunkäsittelijät ja 98% cold storage — rahasi on suojattu jokaisessa vaiheessa.";

$safe_item1_title = "Vahvistetut Maksupalveluntarjoajat";
$safe_item1_desc = "Maksut käsitellään yksinomaan sertifioitujen palveluntarjoajien kautta, jotka noudattavat kansainvälisiä turvallisuusstandardeja. Korttitietojasi ei koskaan tallenneta alustallemme.";
$safe_item1_badge = "Turvalliset Maksut";

$safe_item2_title = "Kaksivaiheinen Tunnistautuminen (2FA)";
$safe_item2_desc = "Lisää tilillesi ylimääräinen suojakerros aikaperusteisilla kertakäyttösalasanoilla tekstiviestillä tai Google Authenticatorilla.";
$safe_item2_badge = "2FA";

$safe_item3_title = "98% Cold Storage";
$safe_item3_desc = "Valtaosa digitaalisista varoista säilytetään maantieteellisesti hajautetuissa offline cold storage -holveissa, jotka on suojattu monikäyttäjäallekirjoitusprotokollilla.";
$safe_item3_badge = "98% Cold Storage";

$safe_item4_title = "Säännelty Toteutus";
$safe_item4_desc = "Teemme yhteistyötä säänneltyjen välitysliikkeiden ja likviditeetin tarjoajien kanssa ympäri maailmaa ylläpitääksemme vaatimustenmukaisuutta, läpinäkyvyyttä ja huippuluokan toteutusta.";
$safe_item4_badge = "Säännelty";

$safe_item5_title = "256-bit SSL-Salaus";
$safe_item5_desc = "Kaikki tietosiirrot selaimesi ja palvelimiemme välillä on salattu sotilastason TLS 1.3 -kryptografisilla protokollilla.";
$safe_item5_badge = "256-bit SSL";

// FREE GUIDE CTA BANNER (CTA 2)
$guide_cta_title = "Hanki Ilmainen Opas";
$guide_cta_subtitle = "«10 Virhettä, Jotka Kannattaa Välttää Kryptokaupankäynnissä»";
$guide_cta_btn = "Hanki Ilmainen Opas";

// TRUST SECTION (Pourquoi les investisseurs font confiance à Ciel Cryptance)
$trust_title = "Miksi Kauppiaat Luottavat <mark>$site_name</mark>:iin";
$trust_desc = "Yli 4 000 000 käyttäjää maailmanlaajuisesti valitsee $site_name:n sen luotettavuuden, tehokkaan automaation ja läpinäkyvän ympäristön vuoksi.";
$trust_subtitle = "Johtavat Edut Nykyaikaiselle Kauppiaalle:";

$trust_item1_title = "Pääsy Globaaleille Markkinoille";
$trust_item1_desc = "Käy kauppaa yli 100 kryptovaluutalla, Forex-pareilla, osakkeilla ja hyödykkeillä yhdestä yhtenäisestä kaupankäyntipaneelista.";

$trust_item2_title = "Vankka Varojen Suoja";
$trust_item2_desc = "Erilliset tilit, jatkuvat biometriset tarkistukset ja huipputason kyberturvallisuus suojaavat pääomaasi ympäri vuorokauden.";

$trust_item3_title = "Ei Piilokuluja";
$trust_item3_desc = "Nauti kristallinkirkkaasta hinnoittelusta. Ilmainen rekisteröinti, ilmaiset talletukset, ei alustan hallintamaksuja ja välittömät nostopyynnöt.";

$trust_item4_title = "Reagoiva Tuki";
$trust_item4_desc = "Omistautunut tukitiimimme on käytettävissä live-chatin, puhelimen tai sähköpostin kautta auttaakseen kaikissa kysymyksissä tai teknisissä tiedusteluissa.";

$trust_market_info_text = "Lisätietoja markkinaolosuhteista vuonna 2026";
$trust_market_info_btn = "Miksi Käydä Kauppaa";

// START TRADING CTA (CTA 3)
$start_cta_title = "Aloita Kaupankäynti <span data-local-currency='$app_price'>$app_price $app_currency</span>:lla!";
$start_cta_desc = "Valmis kokeilemaan $site_name:ia? Rekisteröidy nyt ja liity kasvavaan kryptosijoittajien ja kauppiaiden yhteisöön.";
$start_cta_btn = "Rekisteröidy";

// FAQ SECTION
$faq_title = "$site_name Usein Kysytyt Kysymykset <mark>(UKK)</mark>";
$faq_q1 = "Mikä on $site_name ja miten se toimii?";
$faq_a1 = "Se on tekoälyllä toimiva kaupankäyntialusta, joka työskentelee puolestasi 24 tuntia vuorokaudessa. Järjestelmä analysoi markkinoita, havaitsee mahdollisuuksia ja suorittaa kauppoja automaattisesti. Voit antaa tekoälyn hoitaa kaiken tai vaihtaa manuaaliseen tilaan käydäksesi kauppaa omilla ehdoillasi milloin tahansa.";

$faq_q2 = "Kuinka turvassa rahani ja tietoni ovat $site_name:ssa?";
$faq_a2 = "Turvallisuus on sisäänrakennettu alustan jokaiseen kerrokseen. Henkilötiedot on suojattu kansainvälisesti tunnustetuilla salausstandardeilla ja edistyneellä tilin todennuksella. Kaikki taloudelliset tapahtumat käsitellään yksinomaan luotettujen ja vahvistettujen maksupalveluntarjoajien kautta. Kaikki kaupankäyntitoimintasi on näkyvissä reaaliajassa, joten tiedät aina tarkalleen, mitä varoillesi tapahtuu.";

$faq_q3 = "Voinko nostaa voittoni milloin tahansa?";
$faq_a3 = "Kyllä. Ei ole rajoituksia sille, milloin tai kuinka usein voit nostaa varojasi $site_name:sta. Tilisi saldo pysyy täydessä hallinnassasi koko ajan. Nostot käsitellään samojen luotettavien maksupalveluntarjoajien kautta, joita käytetään talletuksiin, mikä takaa nopeat ja turvalliset siirrot.";

$faq_q4 = "Onko olemassa piilokuluja tai ylimääräisiä maksuja?";
$faq_a4 = "Ei ole. $site_name ei veloita tilausmaksuja, rekisteröintimaksuja tai piilokuluja. Ainoa aloittamiseen tarvittava summa on <span data-local-currency='$app_price'>$app_price $app_currency</span> minimitalletus, joka hyvitetään suoraan kaupankäyntitilillesi. Kaikki tärkeimmät maksutavat hyväksytään, mukaan lukien luottokortit, pankkisiirrot ja PayPal.";

$faq_q5 = "Vaaditaanko aiempaa kaupankäyntikokemusta aloittamiseen?";
$faq_a5 = "Ei lainkaan. $site_name on suunniteltu sekä täysin aloittelijoille että kokeneille kauppiaille. Täysin automatisoidussa tilassa tekoäly hoitaa kaiken puolestasi, mukaan lukien markkina-analyysin, signaalien generoinnin ja tilausten toteutuksen. Jos haluat mieluummin pysyä hallinnassa, voit vaihtaa manuaaliseen tilaan milloin tahansa.";

$faq_cta_text = "Onko sinulla kysymyksiä? Tarkista UKK-osiomme tai ota yhteyttä tukitiimiimme.";
$faq_cta_faq_btn = "UKK";
$faq_cta_contact_btn = "Ota Yhteyttä";

// NEW TRADER LEAD SECTION (Bottom form)
$lead_title = "Uusi Kaupankäynnissä?";
$lead_p1 = "Rekisteröitymisen jälkeen saat ilmaisen oppaamme <mark class='text-on-surface-tertiary-accent'>«10 Virhettä, Jotka Kannattaa Välttää Kryptovaluuttakaupankäynnissä»</mark>. Se sisältää suoraviivaisia neuvoja kokeneimmilta analyytikoiltamme auttaakseen sinua välttämään yleisiä sudenkuoppia.";
$lead_p2 = "Syötä vain tietosi rekisteröintilomakkeeseen, niin lähetämme sen suoraan sähköpostiisi. Monet kauppiaat ovat aloittaneet tällä oppaalla ja pitäneet sitä korvaamattomana itseluottamuksen rakentamisessa ensimmäisissä kaupoissaan.";
$lead_form_heading = "Markkinat eivät odota — aloita jo tänään!";

// FEATURES TABLE (Fonctionnalités principales)
$features_title = "$site_name Kaupankäyntialustan <mark>Tärkeimmät Ominaisuudet</mark>";
$feature_1_title = "🤖 Alustan Teknologia";
$feature_1_val = "Edistynyt tekoälyllä toimiva kaupankäyntimoottori";
$feature_2_title = "💳 Rahoitusmenetelmät";
$feature_2_val = "Suurimmat luottokortit, pankkisiirrot, PayPal";
$feature_3_title = "📱 Alustan Käyttö";
$feature_3_val = "Yhteensopivuus useiden laitteiden kanssa (Työpöytä, Tabletti, Mobiili)";
$feature_4_title = "🚀 Onnistumisprosentti";
$feature_4_val = "85% analyyttinen tarkkuus";
$feature_5_title = "📊 Kaupankäyntivälineet";
$feature_5_val = "Kryptovaluutat, Forex, Osakkeet, Hyödykkeet, Jalometallit, CFD:t ja lisää…";
$feature_6_title = "✍️ Tilin Asetukset";
$feature_6_val = "Nopea ja suoraviivainen rekisteröinti";
$feature_7_title = "📞 Asiakastuki";
$feature_7_val = "24/7 ammattimainen omistautunut tuki";

// FOOTER DISCLAIMER (TZ Item 21)
$footer_disclaimer_p1 = "$site_name tarjoaa koulutuksellista sisältöä ja yleistä tietoa finanssimarkkinoista, online-kaupankäynnistä ja digitaalisista omaisuuseristä. Kaikki tällä sivustolla julkaistut materiaalit, mukaan lukien artikkelit, kaaviot, hintatiedot, markkinanäkemykset ja analyysit, on tarkoitettu vain tiedotustarkoituksiin eikä niitä tule pitää taloudellisena, sijoitus- tai oikeudellisena neuvontana. Vaikka pyrimme pitämään sisältömme tarkkana ja ajantasaisena, emme takaa sen täydellisyyttä tai luotettavuutta emmekä ota vastuuta tämän sivuston käytöstä johtuvista tappioista.";
$footer_disclaimer_p2 = "Kryptovaluutoilla, Forexilla, CFD:illä, osakkeilla ja muilla rahoitusinstrumenteilla käytävä kauppa sisältää merkittävän riskin eikä välttämättä sovi kaikille sijoittajille. Markkinaolosuhteet voivat muuttua nopeasti, eikä aiempi tuotto takaa tulevia tuloksia. Ennen sijoituspäätösten tekemistä arvioi huolellisesti taloudellinen tilanteesi ja riskinsietokykysi, ja hae riippumatonta ammatillista neuvontaa tarvittaessa. Sijoita vain rahaa, jonka menettämiseen sinulla on varaa.";
$footer_copyright = "© " . date('Y') . " $site_name. All rights reserved.";

// FOOTER NAV LINKS
$footnav_about = "Tietoa Meistä";
$footnav_how = "Näin Se Toimii";
$footnav_why = "Miksi Käydä Kauppaa";
$footnav_faq = "UKK";
$footnav_contacts = "Ota Yhteyttä";
$footnav_privacy = "Tietosuojakäytäntö";
$footnav_risk = "Riskivaroitus";
$footnav_terms = "Käyttöehdot";
$footnav_product = "Tuote";
$footnav_offer = "Tarjous";

// ABOUT PAGE VARIABLES
$about_meta_title = "Tietoa Meistä | $site_name Virallinen Sivusto";
$about_meta_description = "Lue lisää $site_name:sta, tehtävästämme demokratisoida finanssimarkkinat tekoälyautomaation avulla, ja institutionaalisen tason turvallisuuskehyksestämme.";
$about_h1 = "Tietoa <mark>$site_name</mark>:sta";
$about_lead = "Voimaannutamme kauppiaita ympäri maailmaa tekoälyn, algoritmisen toteutuksen ja yritysturvallisuuden avulla.";
$about_mission_title = "Missiomme";
$about_mission_text = "$site_name:ssa uskomme, että kehittyneiden kaupankäyntiteknologioiden tulisi olla kaikkien saatavilla, ei vain institutionaalisten rahastojen. Alustamme kuromaa umpeen kuilun tavallisten vähittäissijoittajien ja huipputason laskennallisten kaupankäyntialgoritmien välillä.";
$about_tech_title = "Huipputeknologia";
$about_tech_text = "Järjestelmämme arvioivat yli 100 000 datapistettä joka sekunti globaaleilla krypto-, Forex- ja osakemarkkinoilla. Yhdistämällä ennustavia koneoppimismalleja alle millisekunnin toteutukseen tarjoamme erittäin alhaisen liukuman ja luotettavan suorituskyvyn.";
$about_sec_title = "Turvallisuus & Sääntelyn Noudattaminen";
$about_sec_text = "Asiakasluottamus on ekosysteemimme ydinperusta. Toteutamme 256-bit TLS-salausta, tiukkoja biometrisia ja 2FA-protokollia, ja säilytämme 98% kaikista digitaalisista varannoista cold storage -holveissa.";

// PRODUCT PAGE VARIABLES
$product_meta_title = "Kaupankäyntityökalut & Tuote | $site_name";
$product_meta_description = "Tutustu kaupankäyntimoottoriin ja tekoälyominaisuuksiin, jotka voimaannuttavat $site_name:ia. Automatisoitu tilausten toteutus, ennustava analytiikka ja intuitiiviset hallintalaitteet.";
$product_h1 = "Alustan <mark>Tuote & Ominaisuudet</mark>";
$product_lead = "Löydä älykkäät työkalut, jotka on suunniteltu antamaan sinulle kilpailuetu nykyaikaisilla kryptovaluutta- ja finanssimarkkinoilla.";
$product_f1_title = "Automatisoitu Tekoälykaupankäyntimoottori";
$product_f1_text = "Anna neuroverkkoalgoritmien analysoida markkinatrendejä ja suorittaa optimaalisia kauppoja ympäri vuorokauden ilman tunteita.";
$product_f2_title = "Reaaliaikaiset Markkina-analyysit";
$product_f2_text = "Live-tilauskirjan syvyys, automatisoitu kuvion tunnistus ja institutionaalisen sentimentin seuranta käden ulottuvilla.";
$product_f3_title = "Riskienhallintapaketti";
$product_f3_text = "Yksityiskohtaiset stop-loss- ja take-profit-rajat, päivittäisen maksimialtistuksen hallinta ja automatisoidut suojausominaisuudet.";
$product_f4_title = "Alustojen Välinen Saavutettavuus";
$product_f4_text = "Käy kauppaa saumattomasti työpöytäselaimilla, tableteilla ja älypuhelimilla nollalatenssilla ja täydellä pilvisynkronoinnilla.";

// OFFER PAGE VARIABLES
$offer_meta_title = "Erikoistarjous & Ehdot | $site_name";
$offer_meta_description = "Tutustu $site_name:n eksklusiiviseen rekisteröintitarjoukseen. Aloita $app_price $app_currency alkutalletuksella ja saat omistautunutta tukea.";
$offer_h1 = "Eksklusiivinen <mark>Kaupankäyntitarjous</mark>";
$offer_lead = "Aloita kaupankäyntimatkasi jo tänään kilpailukykyisillä eduilla ja omistautuneella 1-1 tilin käyttöönotolla.";
$offer_step1_title = "1. Nopea Rekisteröinti";
$offer_step1_text = "Täytä lyhyt rekisteröintilomakkeemme varmistaaksesi pääsyn henkilökohtaiselle tilillesi alle 2 minuutissa.";
$offer_step2_title = "2. Rahoita Kaupankäyntisaldosi";
$offer_step2_text = "Talleta $app_price $app_currency vakiovähimmäismäärä luottokortilla, pankkisiirrolla tai e-lompakoilla. 100% varoistasi menee suoraan kaupankäyntisaldoosi.";
$offer_step3_title = "3. Aktivoi Tekoälykaupankäynti";
$offer_step3_text = "Valitse automatisoitu tai avustettu tila, valitse suosikkiomaisuuserinparit ja aloita kaupankäynti täysillä alustan ominaisuuksilla.";

// CONTACTS PAGE VARIABLES
$contacts_meta_title = "Ota Yhteyttä Tukeen | $site_name";
$contacts_meta_description = "Ota yhteyttä $site_name-tiimiin. 24/7 asiakastuki, tekninen apu ja tilikyselyt.";
$contacts_h1 = "Ota Yhteyttä <mark>Asiakastukeen</mark>";
$contacts_lead = "Omistautunut kansainvälinen tukitiimimme on valmis auttamaan sinua 24 tuntia vuorokaudessa, 7 päivänä viikossa.";
$contacts_info_title = "Viralliset Tiedustelut";
$contacts_info_text = "Yleisiä tiedusteluja, tilin vahvistusta tai teknistä tukea varten ota meihin yhteyttä vahvistettujen viestintäkanaviemme kautta.";
$contacts_support_hours = "24/7 Live-Chat & Sähköpostituki";

// FAQ PAGE VARIABLES
$faq_meta_title = "UKK & Tietopankki | $site_name";
$faq_meta_description = "Löydä vastauksia usein kysyttyihin kysymyksiin $site_name-tileistä, talletuksista, nostoista ja automatisoidusta tekoälykaupankäynnistä.";
$faq_h1 = "$site_name <mark>UKK</mark>";
$faq_lead = "Selkeitä vastauksia yleisimpiin kysymyksiin alustan turvallisuudesta, nostoista ja automatisoidusta kaupankäynnistä.";

// PRIVACY POLICY PAGE VARIABLES
$privacy_meta_title = "Tietosuojakäytäntö | $site_name";
$privacy_meta_description = "Lue kattava Tietosuojakäytäntömme ymmärtääksesi, kuinka $site_name kerää, suojaa ja hallinnoi henkilötietojasi.";
$privacy_h1 = "Tietosuojakäytäntö";
$privacy_p1 = "Tämä Tietosuojakäytäntö kuvaa, kuinka $site_name kerää, käyttää ja luovuttaa tietoja, kun vierailet sivustollamme, rekisteröit tilin tai käytät kaupankäyntiohjelmistoamme.";
$privacy_sec1_title = "1. Tietojen Kerääminen & Käyttö";
$privacy_sec1_text = "Keräämme tarvittavia yhteystietoja (nimi, sähköpostiosoite, puhelinnumero) tilisi perustamiseksi, yhdistääksemme sinut vahvistettuihin välityskumppaneihin ja vahvistaaksemme identiteetin kansainvälisten KYC- ja AML-standardien mukaisesti.";
$privacy_sec2_title = "2. Evästeet & Seurantateknologiat";
$privacy_sec2_text = "Käytämme välttämättömiä ja analyyttisiä evästeitä parantaaksemme sivuston suorituskykyä, personoidaksemme käyttäjäkokemusta ja seurataksemme liikennemalleja. Voit muuttaa selaimesi evästeasetuksia milloin tahansa.";
$privacy_sec3_title = "3. Tietoturva & GDPR-Oikeudet";
$privacy_sec3_text = "Kaikki käyttäjätiedot on salattu siirron aikana ja levossa pankkitason kryptografisilla protokollilla. Yleisen Tietosuoja-Asetuksen (GDPR) mukaisesti käyttäjillä on oikeus pyytää pääsyä, korjausta tai poistoa henkilökohtaisiin tietoihinsa.";

// TERMS OF USE PAGE VARIABLES
$terms_meta_title = "Käyttöehdot | $site_name";
$terms_meta_description = "Tarkista viralliset Ehdot ja Edellytykset, jotka säätelevät $site_name-alustan ja siihen liittyvien palveluiden käyttöä.";
$terms_h1 = "Käyttöehdot";
$terms_p1 = "Lue nämä Käyttöehdot huolellisesti ennen $site_name:n käyttöä tai siihen pääsyä. Rekisteröimällä tilin hyväksyt olevasi näiden ehtojen sitoma.";
$terms_sec1_title = "1. Käyttäjän Kelpoisuus";
$terms_sec1_text = "Sinun tulee olla vähintään 18-vuotias ja asua lainkäyttöalueella, jossa online-kaupankäynti ja kryptovaluuttavuorovaikutukset ovat laillisesti sallittuja. Olet vastuussa paikallisten lakiesi noudattamisen varmistamisesta.";
$terms_sec2_title = "2. Tilin Rekisteröinti & Turvallisuus";
$terms_sec2_text = "Hyväksyt antavasi totuudenmukaisia, tarkkoja ja täydellisiä tietoja rekisteröinnin aikana. Olet yksinomaan vastuussa kirjautumistietojesi luottamuksellisuuden säilyttämisestä.";
$terms_sec3_title = "3. Vastuunrajoitus";
$terms_sec3_text = "$site_name tarjoaa informatiivisia ja ohjelmiston reitityspalveluita. Emme tarjoa henkilökohtaista taloudellista neuvontaa emmekä takaa kaupankäynnin kannattavuutta. Finanssimarkkinoilla käytävä kauppa sisältää luontaisen pääomariskin.";

// RISK WARNING PAGE VARIABLES (TZ Item 19: Exact 4 sections)
$risk_meta_title = "Riskivaroitus & Oikeudellinen Ilmoitus | $site_name";
$risk_meta_description = "Tärkeä riskitiedote koskien CFD-, Forex- ja kryptovaluuttakaupankäyntiä $site_name:ssa. Lue huolellisesti ennen sijoittamista.";
$risk_h1 = "Riskivaroitus";
$risk_sec1_title = "1. Korkean Riskin Sijoitusilmoitus & Volatiliteetti";
$risk_sec1_text = "Kryptovaluutoilla, hinnanerosopimuksilla (CFD), ulkomaanvaluutalla (Forex) ja muilla rahoitusvaroilla käytävä kauppa sisältää huomattavan tappioriskin eikä välttämättä sovi kaikille sijoittajille. Kryptovaluuttamarkkinat ovat poikkeuksellisen volatiileja, ja hinnat ovat alttiita jyrkille heilahteluille sääntelyilmoitusten, makrotaloudellisten muutosten tai markkinatunnelman vuoksi. Sinun ei tulisi koskaan sijoittaa rahaa, jonka menettämiseen kokonaan sinulla ei ole varaa.";
$risk_sec2_title = "2. Riippumaton Taloudellinen Neuvonta";
$risk_sec2_text = "Kaikki $site_name:ssa tarjottava materiaali, työkalut, algoritmiset signaalit ja kommentit on tarkoitettu yksinomaan tiedotus-, koulutus- ja markkinointitarkoituksiin. Mikään tämän sivuston sisällöstä ei muodosta henkilökohtaista sijoitus-, oikeudellista tai taloudellista neuvontaa. Ennen kauppojen tekemistä sinun tulisi tehdä riippumatonta tutkimusta tai konsultoida lisensoitua talousneuvojaa.";
$risk_sec3_title = "3. Sääntely- & Maantieteelliset Rajoitukset";
$risk_sec3_text = "Tietyt lainkäyttöalueet rajoittavat tai kieltävät vähittäis-CFD- ja kryptovaluuttakaupankäynnin. Käyttäjän yksinomainen vastuu on varmistaa, onko $site_name:n käyttö ja kumppanuudessa olevien kaupankäyntivälitysten käyttö laillista paikallisen oikeudellisen kehyksen mukaisesti.";
$risk_sec4_title = "4. Alustan Teknologia & Markkinatoteutus";
$risk_sec4_text = "Automatisoidut kaupankäyntityökalut, tekoälyalgoritmit ja markkinaindikaattorit eivät takaa voittoja eivätkä poista markkinariskejä. Tekniset häiriöt, verkkoviive, järjestelmäkatkokset ja markkinoiden likviditeettipulat voivat johtaa kaupan toteutuksen viivästymiseen tai liukumaan.";

// SIGN UP / LOGIN PAGE VARIABLES
$sign_meta_title = "Rekisteröinti / Kirjautuminen | $site_name";
$sign_meta_description = "Luo ilmainen tilisi $site_name:ssa päästäksesi käsiksi älykkäisiin automatisoituihin kaupankäyntityökaluihin, markkinasignaaleihin ja turvallisiin rahoitusvaihtoehtoihin.";
$sign_h1 = "Rekisteröidy <mark>$site_name</mark>:iin";
$sign_lead = "Liity tuhansien kauppiaiden joukkoon ja saa välitön pääsy tekoälykaupankäyntimoottoriimme.";

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
$hero_form_heading = "Luo ilmainen tilisi";
$hero_form_button = "Rekisteröidy";
$form_name_placeholder = "Syötä etunimesi";
$form_surname_placeholder = "Syötä sukunimesi";
$form_disclaimer_prefix = "Syöttämällä henkilötietosi ja napsauttamalla painiketta hyväksyt";
$form_privacy_link_label = "Tietosuojakäytännön";
$form_disclaimer_and = "ja";
$form_terms_link_label = "Käyttöehdot";
$form_disclaimer_of_site = "tälle sivustolle.";

// -- partners strip --
$partners_label = "Johtavien kumppaneiden luottamuksen kohde";

// -- "what is" section --
$whatis_label = "Tietoa Alustasta";
$whatis_title = "Mikä on $site_name?";
$whatis_intro = "$site_name on virallinen online-kaupankäyntialusta, joka on suunniteltu tekemään kryptosta yhtä yksinkertaista kuin päivittäinen online-pankkitoiminta.";
$whatis_icon_1_title = "Tekoälyllä Toimiva Analyysi";
$whatis_icon_1_text = "Edistyneet algoritmit hoitavat markkinoiden monimutkaisuuden puolestasi.";
$whatis_icon_2_title = "Välitön Toteutus";
$whatis_icon_2_text = "Tuhansia datapisteitä käsitellään joka sekunti — kauppoja ilman viivettä.";
$whatis_icon_3_title = "Yksinkertainen, Intuitiivinen Kojelauta";
$whatis_icon_3_text = "Tarkista saldosi ja avoimet positiosi yhdellä silmäyksellä, milloin tahansa.";
$whatis_icon_4_title = "Helppo Pääsy, Ei Esteitä";
$whatis_icon_4_text = "Aloita vain $app_price $app_currency minimitalletuksella — ei piilokuluja.";
$whatis_cta_text = "Haluatko tietää lisää tiimistämme ja tuotteestamme?";
$whatis_cta_link = "Tietoa Meistä";

// -- stats section heading (per-stat label/value already set above) --
$stats_label = "$site_name Numeroina";
$stats_title = "Numerot, Jotka Puhuvat Kovempaa Kuin Lupaukset";

// -- key benefits section --
$benefits_label = "Keskeiset Edut";
$benefits_title = "$site_name:n Pääedut";
$benefit_1_title = "Aloittelijaystävällinen Alusta";
$benefit_1_text = "Intuitiiviset kaaviot ja vaiheittaiset oppaat auttavat sinua pääsemään alkuun tuntematta itseäsi hukkuneeksi. Voit käydä kauppaa kryptolla luottavaisin mielin ensimmäisestä päivästä lähtien.";
$benefit_2_title = "Virallinen ja Säännelty";
$benefit_2_text = "$site_name on lisensoitu ja noudattaa sovellettavia rahoitusmääräyksiä. Käytämme SSL-salausta ja kaksivaiheista tunnistautumista suojataksemme jokaista tiliä.";
$benefit_3_title = "Helppo Pääsy, Ei Esteitä";
$benefit_3_text = "Vain $app_price $app_currency minimitalletuksella kuka tahansa voi aloittaa. Suurta alkuperäistä sijoitusta ei vaadita — aloita pienestä ja kasvata panostasi luottamuksesi kasvaessa.";
$benefit_4_title = "Läpinäkyvät Maksut";
$benefit_4_text = "Et koskaan näe piilokuluja. Sovellamme vain minimaalisia transaktio- tai nostomaksuja siellä missä ne ovat sovellettavissa, joten tiedät aina tarkalleen, mitä maksat.";
$benefit_5_title = "24/7 Kaupankäyntipääsy";
$benefit_5_text = "Käy kauppaa omalla aikataulullasi, päivällä tai yöllä. $site_name toimii yhtä hyvin työpöydällä kuin mobiililaitteella, joten voit pysyä yhteydessä markkinaan missä tahansa oletkin.";
$benefit_6_title = "Paikallinen Asiakastuki";
$benefit_6_text = "Tukitiimimme on käytettävissä chatin, puhelimen tai sähköpostin kautta. Oikeat ihmiset ovat täällä auttamassa sinua omalla kielelläsi, milloin tarvitset apua.";
$benefits_trust_title = "Käyttäjien Luottamus Ympäri Maailmaa";
$benefits_trust_text = "Siksi niin monet kryptokäyttäjät luottavat $site_name:iin. Tuhannet kauppiaat käyttävät jo $site_name:ia, ja uusia tilejä liittyy joka päivä.";
$benefits_cta = "Rekisteröidy";
$benefits_badge_1 = "256-bit SSL";
$benefits_badge_2 = "Turvalliset Maksut";
$benefits_badge_3 = "2FA";

// -- security section --
$security_label = "Turvallisuus";
$security_title = "Varasi Ovat Turvassa $site_name:n Kanssa";
$security_subtitle = "Pankkitason salaus, vahvistetut maksut ja 98% cold storage — rahasi on suojattu jokaisessa vaiheessa.";
$security_1_title = "Vahvistetut Maksupalveluntarjoajat";
$security_1_text = "Maksut käsitellään yksinomaan sertifioitujen palveluntarjoajien toimesta, jotka täyttävät kansainväliset turvallisuusstandardit. Maksutietojasi ei koskaan tallenneta palvelimillemme.";
$security_2_title = "256-bit SSL-Salaus";
$security_2_text = "Kaikki laitteesi ja alustamme välillä vaihdetut tiedot on salattu 256-bit TLS:llä. Kukaan kolmas osapuoli ei voi siepata tai lukea niitä.";
$security_3_title = "98% Cold Storage";
$security_3_text = "98% varoista säilytetään offline-lompakoissa ilman internetyhteyttä. Kukaan ei voi käyttää niitä etänä.";
$security_4_title = "Monivaiheinen Tunnistautuminen";
$security_4_text = "Vain sinä voit käyttää tiliäsi. Jokainen kirjautuminen vahvistetaan toisella vaiheella, jota vain sinä hallitset.";
$security_5_title = "Tilin Seuranta";
$security_5_text = "Jokainen kirjautuminen, tapahtuma tai asetusmuutos laukaisee välittömän ilmoituksen, joten tiedät aina, mitä tilillesi tapahtuu.";
$security_6_title = "Salasanan Suojaus";
$security_6_text = "Salasanat tallennetaan lukukelvottomassa, palautumattomassa muodossa. Meillä ei teknisesti ole tapaa nähdä salasanaasi.";
$security_cta_title = "Hanki Ilmainen Opas!";
$security_cta_text = "Hanki ilmainen aloitusoppaamme ja aloita kaupankäynti jo tänään.";
$security_cta_button = "Rekisteröidy";
$security_badge_1 = "98% Cold Storage";
$security_badge_2 = "Vahvistetut Maksut";
$security_badge_3 = "Salattu";

// -- how it works section --
$how_label = "Näin Se Toimii";
$how_title = "Näin Se Toimii";
$how_1_title = "Rekisteröidy";
$how_1_text = "Napsauta \"Avaa Tili\" -painiketta ja täytä rekisteröintilomake tiedoillasi (nimi, sähköposti ja puhelinnumero). Kestää vain minuutin.";
$how_2_title = "Talleta Varoja";
$how_2_text = "Seuraavaksi rahoita tilisi. Minimitalletus on vain $app_price $app_currency. Voit käyttää luotto-/pankkikorttia, paikallista pankkisiirtoa tai suosittuja e-lompakoita. (Vinkki: aloita summalla, jonka kanssa olet mukava.)";
$how_3_title = "Aloita Kaupankäynti";
$how_3_text = "Kun varasi ovat tililläsi, olet valmis käymään kauppaa. Valitse haluamasi omaisuuserä (kuten BTC, SOL tai USDT) ja päätä strategiasi.";
$how_cta_label = "Näin Se Toimii";
$how_cta_text = "Tarvitsetko lisätietoja siitä, miten palvelu toimii?";
$how_cta_link = "Näin Se Toimii";

// -- trust reasons section --
$trust_label = "Miksi Käydä Kauppaa Kanssamme";
$trust_intro = "Liity tuhansien käyttäjien joukkoon, jotka jo käyvät kauppaa $site_name:n kanssa.";
$trust_1_title = "Täysin Säännelty";
$trust_1_text = "$site_name on asianmukaisesti rekisteröity ja noudattaa sovellettavia rahoitusmääräyksiä. Toimimme tiukkojen sääntöjen mukaisesti varmistaaksemme turvallisuutesi.";
$trust_2_title = "Edistynyt Turvallisuus";
$trust_2_text = "Kaikki tietosi ja varasi on salattu ja suojattu. Toteutamme tiukkaa tilisuojaa SSL-salauksen ja kaksivaiheisen tunnistautumisen avulla.";
$trust_3_title = "Läpinäkyvä Toiminta";
$trust_3_text = "Emme koskaan piilota maksujamme emmekä koskaan lisää yllättäviä sääntöjä. Ennen jokaista tapahtumaa näet tarkalleen, mitä maksuja sovelletaan.";
$trust_4_title = "Reagoiva Tuki";
$trust_4_text = "Tukitiimimme on käytettävissä chatin, puhelimen tai sähköpostin kautta vastaamaan kysymyksiisi tai ratkaisemaan mitä tahansa ongelmaa.";
$trust_cta_text = "Lisätietoja markkinaolosuhteista";
$trust_cta_link = "Miksi Käydä Kauppaa";

// -- testimonials section heading (individual reviews already set above) --
$testimonials_label = "Suositukset";
$testimonials_title = "Yli 4M Kauppiaan Luottamus";

// -- FAQ section heading --
$faq_label = "UKK";

// -- lead magnet CTA block --
$leadmagnet_title = "Uusi Kaupankäynnissä?";
$leadmagnet_text1 = "Rekisteröitymisen jälkeen saat ilmaisen oppaamme,";
$leadmagnet_quote = "”10 Virhettä, Jotka Kannattaa Välttää Kryptokaupankäynnissä”";
$leadmagnet_text2 = "täynnä yksinkertaisia vinkkejä kokeneimmilta analyytikoiltamme auttaaksesi sinua välttämään yleisimmät virheet.";
$leadmagnet_text3 = "Syötä vain tietosi";
$leadmagnet_link = "rekisteröinnin";
$leadmagnet_text4 = "aikana, niin lähetämme sen suoraan sähköpostiisi. Monet sijoittajat aloittivat tällä oppaalla ja sanovat sen tehneen todellisen eron.";
$leadmagnet_text5 = "Markkinat eivät odota — aloita jo tänään!";

// -- pre-about CTA band --
$pre_about_title = "Valmis Ottamaan Hallinnan Kaupankäynnistäsi?";
$pre_about_text = "Liity $site_name:iin jo tänään ja löydä alusta, joka on rakennettu selkeyden, turvallisuuden ja tulosten ympärille.";
$pre_about_button = "Rekisteröidy";

// -- pretest (quiz teaser) badges/CTA --
$pretest_title = "Aloita Kaupankäynti $app_price $app_currency:lla!";
$pretest_text = "Valmis kokeilemaan $site_name:ia? Rekisteröidy nyt ja liity kasvavaan kryptosijoittajien ja kauppiaiden yhteisöön.";
$pretest_button = "Rekisteröidy";
$pretest_badge_1 = "Turvallinen";
$pretest_badge_2 = "Säännelty";
$pretest_badge_3 = "Yli 4M Kauppiaan Luottamus";

// -- about page --
$about_label = "Tietoa Meistä";
$about_title = "Tietoa $site_name:sta";
$about_intro = "$site_name ei vain anna sinulle kaupankäyntialustaa — autamme sinua käymään kauppaa selkeästi ja luottavaisin mielin.";
$about_text_1 = "$site_name on virallinen online-kaupankäyntialusta, joka on suunniteltu tekemään kryptokaupankäynnistä saavutettavaa sekä aloittelijoille että kokeneille kauppiaille.";
$about_text_2 = "Yhdistämme tekoälyllä toimivan markkina-analyysin yksinkertaiseen, läpinäkyvään kojelautaan, joten tiedät aina tarkalleen, missä olet.";
$about_text_3 = "Jokainen osa alustaa on rakennettu selkeyden ympärille: ei piilokuluja, ei hämmentävää ammattikieltä, vain selkeää tietoa, jonka perusteella voit toimia.";
$about_text_4 = "Alustamme säästää sinulta tunteja arvailua ja suojaa sinua läpinäkymättömiltä, heikkolaatuisilta vaihtoehdoilta. Uskomme, että kaupankäynnin tulisi perustua tarkkuuteen, ei onneen.";

// -- contact page --
$contact_label = "Ota Yhteyttä";
$contact_title = "Ota Yhteyttä $site_name:iin";
$contact_subtitle = "Onko sinulla kysymys tai tarvitsetko apua? Olemme täällä neuvomassa ja opastamassa sinua.";
$contact_text = "$site_name:ssa uskomme, että menestys kaupankäynnissä ei liity onneen — se perustuu tarkkuuteen, ennakointiin ja oikeisiin työkaluihin.";
$contact_form_text = "Täytä vain alla oleva lomake, niin tiimimme jäsen ottaa sinuun yhteyttä pian.";
$contact_form_button = "Lähetä Viesti";

// -- footer navigation labels (geo-page footer, TZ items 12/16/18) --
$footnav_col_pages = "Sivut";
$footnav_col_support = "Tuki";
$footnav_col_legal = "Oikeudellinen";
$footnav_col_company = "Yritys";
$footnav_home = "Etusivu";
$footnav_sitemap = "Sivukartta";
$footnav_conditions = "Käyttöehdot";
$footnav_contact = "Ota Yhteyttä";
$footnav_signup = "Rekisteröidy";
$footer_risk_warning = "Riskivaroitus";

// -- geo-page footer legal disclaimer (single-paragraph variant used by
// the geo template's own footer layout; the two-paragraph TZ item 21
// text above -- $footer_disclaimer_p1/$footer_disclaimer_p2 -- covers
// the root pages) --
$footer_disclaimer = "$site_name tarjoaa koulutuksellista sisältöä ja yleistä tietoa finanssimarkkinoista, online-kaupankäynnistä ja digitaalisista omaisuuseristä. Kaikki tällä sivustolla julkaistu materiaali on tarkoitettu vain tiedotustarkoituksiin eikä sitä tule pitää taloudellisena, sijoitus- tai oikeudellisena neuvontana. Kaupankäynti sisältää merkittävän riskin eikä välttämättä sovi kaikille sijoittajille. Sijoita vain rahaa, jonka menettämiseen sinulla on varaa.";

// ============================================================
// Geo-language SUBPAGE fallback content (TZ item 16 cont.). Same
// rationale as the block above: conditions/contacts/faq/offer/
// privacy/product/risk-warning/sign.php share templates across the
// bg/cs/da/... stub folders and reference these vars directly.
// English fallback so every geo folder's subpages render complete.
// ============================================================

// -- shared form aliases (service-page forms reuse the hero disclaimer) --
$form_disclaimer_risk_note = "Lue myös meidän";
$form_text = $form_disclaimer_prefix;
$form_text_privacy = $form_privacy_link_label;
$form_text_privacy_and = $form_disclaimer_and;
$form_text_conditions = $form_terms_link_label;
$form_text_conditions_of = $form_disclaimer_of_site;
$form_text_risk_warning_note = $form_disclaimer_risk_note;
$form_submit = "Rekisteröidy";

// -- generic breadcrumbs (sign-up / product pages) --
$breadcrumb_home = "Etusivu";
$breadcrumb_current = "Rekisteröinti / Kirjautuminen";
$breadcrumb_product = "Tuote";

// -- sign-up page official heading --
$official_heading = "Rekisteröidy Viralliselle {$site_name}™-Alustalle";
$official_description = "Luo ilmainen tilisi aloittaaksesi kryptovaluuttojen kaupankäynnin turvallisella, läpinäkyvällä alustalla.";

// -- product page: analytics banner --
$analytics_heading = "Käy Kauppaa Älykkäämmin $site_name:n Kanssa";
$analytics_description = "Saat selkeät reaaliaikaiset markkinatiedot ja tekoälyllä toimivia näkemyksiä. Tee tietoisia kaupankäyntipäätöksiä luottavaisin mielin.";

// -- product page: dashboard preview --
$app_main_heading = "Kaupankäyntikojelautasi";
$app_feature_1_title = "Reaaliaikainen Markkinadata";
$app_feature_1_text = "Reaaliaikaiset hinnat ja kaaviot suoraan käden ulottuvilla";
$app_feature_2_title = "Salkun Seuranta";
$app_feature_2_text = "Kattavat mittarit saldostasi ja suorituskyvystäsi";
$app_feature_3_title = "Mobiilinäkymä";
$app_feature_3_text = "Optimoitu mobiiliselaimille";
$app_feature_4_title = "Seurantalistat";
$app_feature_4_text = "Pidä kirjaa seuraamistasi omaisuuseristä";

// -- product page: capabilities --
$capabilities_main_title = "Mitä Odottaa";
$capabilities_feature_1_title = "Tekoälyllä Toimivat Signaalit";
$capabilities_feature_1_text = "Edistyneet algoritmit analysoivat markkinasignaaleja ja paljastavat mahdollisuuksia ympäri vuorokauden.";
$capabilities_feature_2_title = "Nopea Rekisteröinti";
$capabilities_feature_2_text = "Rekisteröidy minuuteissa turvallisella, suoraviivaisella rekisteröintiprosessilla.";
$capabilities_feature_3_title = "Vahvistettu Turvallisuus";
$capabilities_feature_3_text = "256-bit SSL-salaus, 2FA ja 98% cold storage suojaavat varojasi jokaisessa vaiheessa.";
$capabilities_feature_4_title = "Jatkuva Tuki";
$capabilities_feature_4_text = "Saat tukea tiimiltämme jokaisessa vaiheessa — rekisteröinnistä ensimmäiseen kauppaasi.";

// -- product page: stats strip --
$products_stats_currencies_v = "65+";
$products_stats_currencies_l = "Saatavilla Olevat Valuutat";
$products_stats_users_v = "4M+";
$products_stats_users_l = "Rekisteröityneet Käyttäjät";
$products_stats_volume_v = "98+";
$products_stats_volume_l = "Tuetut Maat";
$products_stats_countries_v = "24/7";
$products_stats_countries_l = "Tapahtumien Käyttöoikeus";

// -- product page: 3-step strip --
$step_1 = "Luo tili";
$step_2 = "Talleta varoja";
$step_3 = "Aloita kaupankäynti sinulle sopivalla strategialla";

// -- shared "last update" label (privacy page) --
$last_update = "Viimeisin päivitys";

// -- FAQ page --
$faq_page_meta_title = "UKK | $site_name Tuki";
$faq_page_meta_description = "Vastauksia usein kysyttyihin kysymyksiin siitä, miten $site_name toimii, hinnoittelusta ja aloittamisesta.";
$faq_page_title = "UKK";
$faq_page_breadcrumb_home = "Etusivu";
$faq_page_breadcrumb_current = "UKK";
$faq_page_help_title = "Kuinka voimme auttaa sinua?";
$faq_1_q = "Kuinka aloitan?";
$faq_1_a = "Luo tilisi, vahvista sähköpostiosoitteesi ja tee ensimmäinen talletuksesi — suunnitelmat alkavat vain $app_price $app_currency:sta.";
$faq_2_q = "Ovatko rahani ja tietoni turvassa? Onko $site_name luotettava?";
$faq_2_a = "Kyllä. Tietosi on suojattu alan standardin mukaisella 256-bit salauksella, ja varasi on turvattu kaksivaiheisella tunnistautumisella ja 98% cold storagella.";
$faq_3_q = "Voinko sulkea tilini tai nostaa varoja milloin tahansa?";
$faq_3_a = "Kyllä. Nostoille ei ole rajoituksia. Ota yhteyttä tukitiimiimme milloin tahansa — autamme tilisi kanssa tai käsittelemme nostosi nopeasti.";
$faq_4_q = "Kuinka tiedän, sopiiko tämä alusta minulle?";
$faq_4_a = "$site_name rakennettiin sekä täysin aloittelijoille että kokeneille kauppiaille, jotka haluavat käydä kauppaa tehokkaammin — jokainen alustan työkalu on suunniteltu pitämään sinut ajan tasalla ja hallinnassa.";
$faq_5_q = "Tarvitsenko kaupankäyntikokemusta aloittaakseni?";
$faq_5_a = "Aiempaa kokemusta ei vaadita. Tekoälyllä toimiva tilamme hoitaa analyysin puolestasi, ja voit vaihtaa manuaaliseen tilaan milloin tahansa, jos haluat enemmän hallintaa.";

// -- contacts page --
$contacts_h3 = "Teknisissä kysymyksissä tai tiliäsi koskevissa kysymyksissä ota meihin yhteyttä sähköpostitse";

// -- offer page (meta title/description already defined above) --
$offer_breadcrumb_home = "Etusivu";
$offer_breadcrumb_current = "Tarjous";
$offer_cta_h1 = "Aloita Kaupankäynti Jo Tänään";
$offer_cta_text = "Valmis minuuteissa: rekisteröidy, rahoita tilisi ja aloita kryptovaluuttojen kaupankäynti turvallisella, säännellyllä alustalla.";
$offer_how_it_works_title = "Näin Se Toimii";
$offer_official_platform_title = "Tämä On Virallinen {$site_name}™ Kaupankäyntialusta";
$offer_official_platform_text = "Luotettava, läpinäkyvä tapa käydä kauppaa kryptovaluutoilla — reaaliaikaisilla näkemyksillä ja täydellä hallinnalla.";

// -- conditions of use page --
$conditions_meta_title = "Käyttöehdot | $site_name";
$conditions_meta_description = "Lue $site_name-sivuston ja kaupankäyntialustan viralliset Käyttöehdot.";
$conditions_breadcrumb_home = "Etusivu";
$conditions_breadcrumb_current = "Käyttöehdot";
$conditions_h1 = "Käyttöehdot";
$conditions_s1_title = "1. Yleistä";
$conditions_s1_text = "Tämä sivusto tarjoaa pääsyn online-kryptovaluuttojen kaupankäyntialustalle. Alustan käyttö merkitsee näiden ehtojen ja Tietosuojakäytäntömme täyttä hyväksymistä.";
$conditions_s2_title = "2. Kelpoisuus";
$conditions_s2_text = "Käyttäjien tulee olla vähintään 18-vuotiaita ja heillä tulee olla täysi oikeudellinen kelpoisuus omalla lainkäyttöalueellaan.";
$conditions_s3_title = "3. Rajoitettu Pääsy";
$conditions_s3_text = "Pääsy voi olla rajoitettu lainkäyttöalueilla, joissa paikalliset määräykset kieltävät tarjoamamme kaupankäyntipalvelutyypin.";
$conditions_s4_title = "4. Kielletty Käyttö";
$conditions_s4_text = "Käyttäjät eivät saa väärinkäyttää järjestelmää, yrittää luvatonta pääsyä järjestelmiimme tai purkaa ohjelmistoamme.";
$conditions_s5_title = "5. Immateriaalioikeudet";
$conditions_s5_text = "Kaikki lähdekoodi, käyttöliittymät ja brändiomaisuus pysyvät toimivan yhtiön yksinomaisena omaisuutena.";
$conditions_s6_title = "6. Vastuu";
$conditions_s6_text = "Alustan työkalut tarjotaan \"sellaisenaan\". Emme ota vastuuta käyttäjän omista kaupankäyntipäätöksistä johtuvista tuloksista.";
$conditions_s7_title = "7. Kolmannen Osapuolen Palvelut";
$conditions_s7_text = "Integraatiot kolmannen osapuolen maksupalveluntarjoajien kanssa tapahtuvat turvallisten yhteyksien kautta. Talletusten ja nostojen osalta käyttäjät asioivat suoraan valitsemansa palveluntarjoajan kanssa.";
$conditions_s8_title = "8. Ulkoiset Linkit";
$conditions_s8_text = "Linkit ulkoisiin resursseihin tarjotaan vain mukavuussyistä. Emme suosittele tai takaa mitään ulkoista ohjelmistoa.";
$conditions_s9_title = "9. Sekalaista";
$conditions_s9_text = "Pidätämme oikeuden muuttaa näitä ehtoja tai palvelua milloin tahansa, muutokset julkaistaan sivustolla.";

// -- privacy policy page (meta title/description already defined above) --
$privacy_breadcrumb_home = "Etusivu";
$privacy_breadcrumb_current = "Tietosuojakäytäntö";
$privacy_page_h1 = "Tietosuojakäytäntö";
$privacy_intro = "Kunnioitamme yksityisyyttäsi ja käsittelemme henkilötietoja täysin kansainvälisten standardien ja eurooppalaisen GDPR:n mukaisesti.";
$privacy_transparency_title = "Läpinäkyvyys";
$privacy_transparency_text = "Kerromme selkeästi, kuinka operatiivisia telemetriatietoja käsitellään. Ota yhteyttä tukeen saadaksesi lisätietoja.";
$privacy_usage_title = "Tietojen Käyttö";
$privacy_usage_text = "Tietoja käytetään yksinomaan pääsyn tarjoamiseen, istuntojen suojaamiseen ja vaatimustenmukaisuusvelvoitteiden täyttämiseen.";
$privacy_rights_short_title = "Oikeutesi";
$privacy_rights_short_text = "Säilytät täydet oikeudet tarkastella, päivittää tai pyytää henkilötietojesi poistamista.";
$privacy_security_title = "Turvallisuus";
$privacy_security_text = "Käytämme AES-256-salausta ja tietokannan eristystä suojataksemme operatiivisia telemetriatietoja.";
$privacy_s1_title = "1. Tietojen Kerääminen";
$privacy_s1_text = "Keräämme käyttötelemetriaa (IP-osoite, järjestelmäparametrit, selaintyyppi) sekä käyttäjien lähettämiä vahvistustietoja.";
$privacy_s2_title = "2. Oikeusperusta";
$privacy_s2_text = "Käsittely perustuu käyttäjien nimenomaiseen suostumukseen, sääntelyn vaatimustenmukaisuusvaatimuksiin ja palvelun toimittamiseen.";
$privacy_s3_title = "3. Tietojen Jakaminen";
$privacy_s3_text = "Tietoja ei koskaan kaupallisteta. Luovutukset rajoittuvat valtuutettuihin clearing-yksiköihin ja teknisiin kumppaneihin salassapitosopimuksen (NDA) alla.";
$privacy_s4_title = "4. Evästeet";
$privacy_s4_text = "Välttämättömiä evästeitä käytetään istunnon todentamiseen ja käyttöliittymän optimointiin.";
$privacy_google_choices = 'Hallitse seurantamieltymyksiäsi <a href="http://www.google.com/settings/ads" target="_blank" rel="noopener">Google-mainosasetusten</a> kautta tai käytä <a href="https://tools.google.com/dlpage/gaoptout" target="_blank" rel="noopener">Google Analytics -kieltäytymislaajennusta</a>. Voit myös tarkastella Googlen omia tietokäytäntöjä sen <a href="https://www.google.com/intl/en/policies/privacy/" target="_blank" rel="noopener">Tietosuojakäytännössä</a>.';
$privacy_s5_title = "5. Tietojen Säilyttäminen";
$privacy_s5_text = "Henkilötietoja säilytetään vain niin kauan kuin on tarpeen järjestelmän käyttövaatimusten täyttämiseksi.";
$privacy_s6_title = "6. Kansainväliset Siirrot";
$privacy_s6_text = "Rajat ylittävät tiedonsiirrot tapahtuvat yksinomaan salattujen kanavien kautta ja vakiosopimuslausekkeiden avulla.";
$privacy_s7_title = "7. Kolmannen Osapuolen Linkit";
$privacy_s7_text = "Emme ole vastuussa sivustoltamme linkitettyjen ulkoisten kolmannen osapuolen palveluiden tietosuojakäytännöistä.";
$privacy_s8_title = "8. Päivitykset";
$privacy_s8_text = "Tätä käytäntöä voidaan tarkistaa ajoittain heijastamaan järjestelmä- tai oikeudellisia muutoksia.";
$privacy_rights_title = "Oikeutesi";
$privacy_rights_text = "Käyttäjillä on oikeus pyytää pääsyä, korjausta, rajoitettua käsittelyä tai tallennettujen tietojensa täydellistä poistamista.";

// -- risk warning page --
$page_title_risk_warning = "Riskivaroitus | $site_name";
$page_description_risk_warning = "Ymmärrä kaupankäynnin riskit ja kuinka $site_name auttaa sinua hallitsemaan niitä turvallisesti.";
$risk_warning_breadcrumb_home = "Etusivu";
$risk_warning_breadcrumb_current = "Riskivaroitus";
$risk_warning_title = "Riskivaroitus";
$risk_warning_intro = "Riskien ymmärtäminen on ensimmäinen askel kohti luottavaista kaupankäyntiä.";
$risk_warning_ai_heading = "Kuinka tekoälyjärjestelmämme auttaa riskienhallinnassa:";
$risk_warning_ai_1 = "<strong>Algoritminen Tehokkuus & Tunteeton Kaupankäynti:</strong> Edistyneet algoritmit analysoivat markkinasignaaleja suorittaakseen kauppoja objektiivisesti optimaalisena ajankohtana.";
$risk_warning_ai_2 = "<strong>Datalähtöiset Strategiat:</strong> Strategiat perustuvat vahvistettuihin markkinamalleihin ja reaaliaikaiseen analyysiin arvailun sijaan.";
$risk_warning_ai_3 = "<strong>Joustavat Asetukset & Täysi Hallinta:</strong> Säädä riskiparametrejasi milloin tahansa. Seuraa kaikkia saldoja ja kauppoja läpinäkyvästi kojelaudallasi — ilman piilokuluja ja nostorajoituksia.";
$risk_warning_disclaimer = "<strong>Vastuuvapauslauseke:</strong> Kaupankäynti sisältää aina riskin. Automatisoidut järjestelmät (mukaan lukien tekoäly) eivät takaa voittoa, voivat epäonnistua ohjelmistovirheiden tai odottamattomien markkinatapahtumien vuoksi, ja vaativat käyttäjän valvontaa. Aiempi tuotto ei ole tulevien tulosten indikaattori. Tämä alusta on tarkoitettu yksinomaan tiedotus- ja markkinointitarkoituksiin eikä se muodosta taloudellista neuvontaa.";
$risk_warning_s1_heading = "1. Yleiset Riskit & Kryptovaluuttamarkkinoiden Riskit";
$risk_warning_s1_1 = "Kryptovaluutat ovat erittäin volatileja, spekulatiivisia omaisuuseriä, joita käydään kauppaa ympäri vuorokauden ja jotka ovat vain vähäisen sääntelyvalvonnan alaisia useimmilla lainkäyttöalueilla.";
$risk_warning_s1_2 = "Arvot voivat vaihdella dramaattisesti lyhyissä ajanjaksoissa, mikä voi mahdollisesti johtaa sijoitetun pääoman täydelliseen menetykseen.";
$risk_warning_s1_3 = "Markkina-arvoihin voivat vaikuttaa merkittävästi sääntelymuutokset, tekninen kehitys, tietoturvaloukkaukset tai laajemmat makrotaloudelliset tapahtumat.";
$risk_warning_s1_4 = "Jotkin omaisuuserät voivat menettää koko arvonsa. Sijoita vain rahaa, jonka menettämiseen sinulla on varaa.";
$risk_warning_s2_heading = "2. Toteutus-, Likviditeetti- & Vipuvaikutusriskit";
$risk_warning_s2_1 = "<strong>Markkinavolatiliteetti & Likviditeetti:</strong> Äärimmäiset hintaliikkeet (10-20%+ päivittäin) tai alhainen likviditeetti (erityisesti pienemmissä kolikoissa) voivat aiheuttaa viiveitä, alustan katkoksia ja merkittävää toteutusliukumaa. Stop-loss-toimeksiannot eivät voi taata tappioiden rajoittamista äärimmäisissä olosuhteissa.";
$risk_warning_s2_2 = "<strong>Vipuvaikutus- & Marginaaliriski:</strong> Vivutetut tuotteet vahvistavat sekä voittoja että tappioita, mikä tarkoittaa, että voit menettää enemmän kuin alkuperäisen talletuksesi. Noin 70-80% vähittäissijoittajien tileistä menettää rahaa käydessään kauppaa vivutetuilla tuotteilla.";
$risk_warning_s3_heading = "3. Tekniset, Kyberturvallisuus- & Kolmannen Osapuolen Riskit";
$risk_warning_s3_1 = "<strong>Tekniset Tekijät:</strong> Online-kaupankäyntiin liittyy luontaisia riskejä, kuten internetyhteyden katkoksia, laitteisto-/ohjelmistovikoja ja palvelun saatavuuden puutetta.";
$risk_warning_s3_2 = "<strong>Kyberturvallisuus:</strong> Kryptovaluuttatilit ovat usein tietojenkalastelun, haittaohjelmien ja hakkerointiyritysten kohteita. Tapahtumat ovat peruuttamattomia; kirjautumistietojesi vaarantuminen voi johtaa pysyvään menetykseen.";
$risk_warning_s3_3 = "<strong>Kolmannen Osapuolen Alustat:</strong> Tämä sivusto voi yhdistää käyttäjiä kolmannen osapuolen alustoihin. Emme valvo, suosittele tai takaa niiden turvallisuutta, toimintaa tai maksukykyä. Suorita aina oma perusteellinen due diligence -tarkastuksesi ennen varojen tallettamista ulkoisille alustoille.";
$risk_warning_s4_heading = "4. Sääntely-, Vero- & Loppusäännökset";
$risk_warning_s4_1 = "<strong>Oikeudellinen Vaatimustenmukaisuus & Verot:</strong> Sääntelykehykset vaihtelevat suuresti ja muuttuvat nopeasti. Käyttäjät ovat yksinomaan vastuussa siitä, että heidän kaupankäyntitoimintansa noudattaa paikallista lakia, sekä omien verovelvoitteidensa täyttämisestä.";
$risk_warning_s4_2 = "<strong>Ei Voittotakuita:</strong> Ei ole olemassa \"turvallista\" tai riskitöntä kryptovaluuttakaupankäyntiä. Kaikki annetut tuottoluvut tai suorituskykyesimerkit ovat puhtaasti hypoteettisia.";
$risk_warning_s4_3 = "<strong>Soveltuvuus:</strong> Jos et täysin ymmärrä riskejä, olet riippuvainen välttämättömistä taloudellisista resursseista tai käyt kauppaa lainatuilla rahoilla, kryptovaluuttakaupankäynti ei sovi sinulle. Epäselvissä tapauksissa konsultoi riippumatonta, lisensoitua talousneuvojaa.";
$risk_warning_contact = "<strong>Yhteystiedot:</strong> Jos sinulla on kysymyksiä tästä lausunnosta tai haluat lähettää tiedustelun, ota yhteyttä viralliseen asiakaspalvelutiimiimme sivustomme yhteydenottolomakkeen kautta.";

