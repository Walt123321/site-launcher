<?php
require __DIR__ . '/../lang.php';
$site_lang = 'pl-PL';
$form_language = 'pl'; // matches this page's own language, not the offer's global default

// ============================================================
// PL TRANSLATION OVERRIDES
// Identity/config vars ($site_name, $site_slug, $site_domain, $site_url, $app_price, $app_currency, $site_lang, $country_name, $country_flag_code, $privacy_last_update, $rating_value, $rating_count, $review_count, $form_country, $form_language, $form_phone_country, $form_only_countries, $review_1_author, $review_2_author, $review_3_author, $review_4_author, $quiz_consultant_name) are
// intentionally NOT overridden -- they stay exactly as inherited from the
// root lang.php.
// ============================================================

// Brand / Platform Variables

// Geo-language stats bar fallback content (used by the language-folder pages'
// own "stats" section; the fr/de/it/nl folders override these with native
// translations, the other 19 folders inherit this English fallback)
$stat_1_value = "4M+";
$stat_1_label = "Zarejestrowani Użytkownicy";
$stat_2_value = "98+";
$stat_2_label = "Obsługiwane Kraje";
$stat_3_value = "65+";
$stat_3_label = "Dostępne Waluty";
$stat_4_value = "24/7";
$stat_4_label = "Dostęp do Transakcji";
$stat_5_value = "256-bit";
$stat_5_label = "Standard Szyfrowania";
$stat_6_value = "$500M+";
$stat_6_label = "Łączne Depozyty Klientów";

// Keitaro Form Integration Variables (defaults -- overwritten per-launch by
// generate_lang_files(); must stay valid on their own since nothing else in
// this file replaces them for a page that's ever served un-generated)

// 4 Verified Reviews (TZ Item 8)
$review_1_role = "Francja";
$review_1_text = "Zacząłem od 500 €, żeby tylko zobaczyć, jak działa platforma. Po około trzech tygodniach moje saldo wzrosło do około 1120 €. Interfejs jest łatwy w obsłudze, a informacje rynkowe pomogły mi podejmować lepsze decyzje.";
$review_1_badge = "Zgłoszony Zwrot +18,4%";

$review_2_role = "Niemcy";
$review_2_text = "Wypróbowałem wcześniej kilka platform handlowych, ale ta jak dotąd jest moją ulubioną. Łatwo się po niej porusza, narzędzia są naprawdę przydatne, a moje ogólne doświadczenie jest bardzo pozytywne.";
$review_2_badge = "Zgłoszony Zwrot +19,1%";

$review_3_role = "Włochy";
$review_3_text = "Najbardziej zaimponowało mi to, jak wszystko jest intuicyjne. Rejestracja była szybka, panel jest dobrze zorganizowany, a platforma sprawiła, że handel stał się dla mnie o wiele wygodniejszy.";
$review_3_badge = "Zgłoszony Zwrot +16,8%";

$review_4_role = "Holandia";
$review_4_text = "Nie miałem wcześniejszego doświadczenia w handlu, więc zacząłem od 750 €. W ciągu miesiąca osiągnąłem nieco ponad 1765 €, korzystając z narzędzi i materiałów edukacyjnych. To był świetny sposób na zbudowanie pewności siebie.";
$review_4_badge = "Zgłoszony Zwrot +18,0%";

$review_verified_label = "Zweryfikowany Użytkownik";
$reviews_section_title = "Opinie o $site_name";
$reviews_badge_trustworthy = "Godny Zaufania";
$reviews_summary_rating = "4,7";
$reviews_summary_count = "189";
$reviews_summary_desc = "Potężna i intuicyjna platforma handlowa z solidnymi zautomatyzowanymi narzędziami, analizami w czasie rzeczywistym i obszernymi materiałami edukacyjnymi.";

// CONSULTANT / CHAT QUIZ (TZ Item 13)
$quiz_consultant_role = "Konsultant Handlowy";
$quiz_text_welcome = "Cześć! Jestem Twoim osobistym asystentem handlowym. Wypełnij 30-sekundowy quiz, aby dowiedzieć się, jak zautomatyzowany handel z wykorzystaniem AI może działać dla Ciebie.";
$quiz_text_q1 = "Czy handlowałeś kiedyś kryptowalutami lub na rynkach finansowych?";
$quiz_text_a1_yes = "Tak, mam pewne doświadczenie";
$quiz_text_a1_no = "Nie, jestem zupełnym początkującym";
$quiz_text_q2 = "Jaki jest Twój główny cel finansowy związany z handlem online?";
$quiz_text_q3 = "Czy wolisz, aby AI wykonywała transakcje automatycznie, czy handlować ręcznie?";
$quiz_text_a3_yes = "Zautomatyzowany Handel z AI (Zalecane)";
$quiz_text_a3_no = "Handel Ręczny z Sygnałami AI";
$quiz_text_q4 = "Jaki jest Twój początkowy budżet na handel?";
$quiz_text_a4_1 = "250 $ - 500 $";
$quiz_text_a4_2 = "500 $ - 1500 $";
$quiz_text_a4_3 = "1500 $+";
$quiz_text_q5 = "Czy jesteś gotów założyć konto i uzyskać pełny dostęp do platformy?";
$quiz_text_a5_yes = "Tak, zaczynajmy!";
$quiz_text_a5_no = "Chciałbym uzyskać więcej informacji";
$quiz_text_loader = "Analizujemy Twoje odpowiedzi i przygotowujemy optymalne parametry handlowe...";
$quiz_text_final_ttl = "Konfiguracja Twojego Konta Jest Gotowa!";
$quiz_text_processing = "Konfigurowanie dostępu do platformy...";
$quiz_text_typing = "pisze...";
$quiz_placeholder_fname = "Imię";
$quiz_placeholder_lname = "Nazwisko";
$quiz_placeholder_email = "Adres e-mail";
$quiz_placeholder_phone = "Numer Telefonu";
$quiz_btn_submit = "Zakończ Rejestrację";

// METADATA (TZ Item 10)
$home_meta_title = "$site_name — Platforma Handlowa | Oficjalna Strona";
$home_meta_description = "Oficjalna strona $site_name oferuje bezpieczną platformę do handlu kryptowalutami z zaawansowanymi narzędziami handlowymi, informacjami rynkowymi w czasie rzeczywistym i przyjaznym dla użytkownika doświadczeniem dla traderów.";

// NAVIGATION & HEADER (TZ Item 3, 12)
$nav_about = "O Nas";
$nav_how = "Jak To Działa";
$nav_why = "Dlaczego Warto Handlować";
$nav_faq = "FAQ";
$nav_contacts = "Skontaktuj Się z Nami";
$nav_signin = "Zaloguj Się";
$nav_signup = "Zarejestruj Się";

$mobnav_home = "Strona Główna";
$mobnav_product = "Produkt";
$mobnav_offer = "Oferta";
$mobnav_contact = "Skontaktuj Się z Nami";
$mobnav_faq = "FAQ";
$mobnav_signup = "Zarejestruj Się";

// HERO SECTION
$hero_h1 = "Platforma <mark>$site_name</mark>";
$hero_text = "Oficjalna platforma handlu kryptowalutami $site_name";

// LEAD FORM
$form_fname_placeholder = "Imię";
$form_lname_placeholder = "Nazwisko";
$form_email_placeholder = "E-mail";
$form_phone_placeholder = "Numer Telefonu";
$form_btn_submit = "Zarejestruj Się";
$form_disclaimer_text = "Wprowadzając swoje dane osobowe i klikając przycisk, akceptujesz <a class='link link-primary' href='privacy.php'>Politykę Prywatności</a> oraz <a class='link link-primary' href='conditions.php'>Warunki Korzystania</a> z tej strony internetowej.";

// SECURITY BADGES
$badge_ssl = "256-bitowy SSL";
$badge_payments = "Bezpieczne Płatności";
$badge_2fa = "2FA";
$badge_cold_storage = "98% Cold Storage";
$badge_regulated = "Regulowane";
$badge_traders_trust = "Ponad 4M Traderów Ufa";

// SAFE SECTION (Vos fonds sont en sécurité)
$safe_title = "<mark>Twoje Środki Są Bezpieczne</mark> z $site_name";
$safe_desc = "Szyfrowanie na poziomie bankowym, zweryfikowani procesorzy płatności i 98% cold storage — Twoje pieniądze są chronione na każdym etapie.";

$safe_item1_title = "Zweryfikowani Dostawcy Płatności";
$safe_item1_desc = "Płatności są przetwarzane wyłącznie przez certyfikowanych dostawców zgodnych z międzynarodowymi standardami bezpieczeństwa. Dane Twojej karty nigdy nie są przechowywane na naszej platformie.";
$safe_item1_badge = "Bezpieczne Płatności";

$safe_item2_title = "Uwierzytelnianie Dwuskładnikowe (2FA)";
$safe_item2_desc = "Dodaj dodatkową warstwę ochrony do swojego konta za pomocą jednorazowych haseł opartych na czasie za pośrednictwem SMS lub Google Authenticator.";
$safe_item2_badge = "2FA";

$safe_item3_title = "98% Cold Storage";
$safe_item3_desc = "Zdecydowana większość aktywów cyfrowych jest przechowywana w geograficznie rozproszonych offline'owych skarbcach cold storage chronionych protokołami wielopodpisowymi.";
$safe_item3_badge = "98% Cold Storage";

$safe_item4_title = "Regulowana Realizacja";
$safe_item4_desc = "Współpracujemy z regulowanymi domami maklerskimi i dostawcami płynności na całym świecie, aby zapewnić zgodność, przejrzystość i realizację na najwyższym poziomie.";
$safe_item4_badge = "Regulowane";

$safe_item5_title = "256-bitowe Szyfrowanie SSL";
$safe_item5_desc = "Wszystkie transmisje danych między Twoją przeglądarką a naszymi serwerami są szyfrowane za pomocą protokołów kryptograficznych klasy wojskowej TLS 1.3.";
$safe_item5_badge = "256-bitowy SSL";

// FREE GUIDE CTA BANNER (CTA 2)
$guide_cta_title = "Odbierz Darmowy Przewodnik";
$guide_cta_subtitle = "«10 Błędów, Których Należy Unikać w Handlu Kryptowalutami»";
$guide_cta_btn = "Zdobądź Darmowy Przewodnik";

// TRUST SECTION (Pourquoi les investisseurs font confiance à Ciel Cryptance)
$trust_title = "Dlaczego Traderzy Ufają <mark>$site_name</mark>";
$trust_desc = "Ponad 4 000 000 użytkowników na całym świecie wybiera $site_name ze względu na niezawodność, potężną automatyzację i przejrzyste środowisko.";
$trust_subtitle = "Główne Korzyści dla Nowoczesnego Tradera:";

$trust_item1_title = "Dostęp do Globalnych Rynków";
$trust_item1_desc = "Handluj ponad 100 kryptowalutami, parami Forex, akcjami i towarami z jednego, ujednoliconego panelu handlowego.";

$trust_item2_title = "Solidna Ochrona Środków";
$trust_item2_desc = "Wydzielone konta, ciągłe kontrole biometryczne i nowoczesna cyberbezpieczeństwo chronią Twój kapitał 24/7.";

$trust_item3_title = "Zero Ukrytych Opłat";
$trust_item3_desc = "Ciesz się kryształowo jasnym cennikiem. Darmowa rejestracja, darmowe wpłaty, brak opłat za zarządzanie platformą i natychmiastowe realizowanie żądań wypłat.";

$trust_item4_title = "Responsywne Wsparcie";
$trust_item4_desc = "Nasz oddany zespół wsparcia jest dostępny przez czat na żywo, telefon lub e-mail, aby pomóc w wszelkich pytaniach lub kwestiach technicznych.";

$trust_market_info_text = "Więcej informacji o warunkach rynkowych w 2026 roku";
$trust_market_info_btn = "Dlaczego Warto Handlować";

// START TRADING CTA (CTA 3)
$start_cta_title = "Zacznij Handlować od <span data-local-currency='$app_price'>$app_price $app_currency</span>!";
$start_cta_desc = "Gotów wypróbować $site_name? Zarejestruj się teraz i dołącz do rosnącej społeczności inwestorów i traderów kryptowalut.";
$start_cta_btn = "Zarejestruj Się";

// FAQ SECTION
$faq_title = "Najczęściej Zadawane Pytania $site_name <mark>(FAQ)</mark>";
$faq_q1 = "Czym jest $site_name i jak to działa?";
$faq_a1 = "To platforma handlowa napędzana przez AI, która pracuje dla Ciebie 24 godziny na dobę. System analizuje rynki, wykrywa okazje i automatycznie realizuje transakcje. Możesz pozwolić AI zajmować się wszystkim lub przełączyć się na tryb ręczny, aby handlować na własnych warunkach w dowolnym momencie.";

$faq_q2 = "Jak bezpieczne są moje pieniądze i dane w $site_name?";
$faq_a2 = "Bezpieczeństwo jest wbudowane w każdą warstwę platformy. Dane osobowe są chronione przy użyciu międzynarodowo uznanych standardów szyfrowania i zaawansowanego uwierzytelniania kont. Wszystkie transakcje finansowe są przetwarzane wyłącznie przez zaufanych i zweryfikowanych dostawców płatności. Cała Twoja aktywność handlowa jest widoczna w czasie rzeczywistym, więc zawsze dokładnie wiesz, co dzieje się z Twoimi środkami.";

$faq_q3 = "Czy mogę wypłacić moje zyski w dowolnym momencie?";
$faq_a3 = "Tak. Nie ma żadnych ograniczeń co do tego, kiedy lub jak często możesz wypłacać swoje środki z $site_name. Saldo Twojego konta pozostaje pod Twoją pełną kontrolą przez cały czas. Wypłaty są przetwarzane przez tych samych niezawodnych dostawców płatności, którzy są używani do wpłat, gwarantując szybkie i bezpieczne przelewy.";

$faq_q4 = "Czy istnieją ukryte opłaty lub dodatkowe koszty?";
$faq_a4 = "Żadnych. $site_name nie pobiera opłat abonamentowych, opłat rejestracyjnych ani ukrytych kosztów. Jedyną kwotą wymaganą do rozpoczęcia jest minimalny depozyt w wysokości <span data-local-currency='$app_price'>$app_price $app_currency</span>, zaksięgowany bezpośrednio na Twoim koncie handlowym. Akceptowane są wszystkie główne metody płatności, w tym karty kredytowe, przelewy bankowe i PayPal.";

$faq_q5 = "Czy potrzebne jest wcześniejsze doświadczenie w handlu, aby zacząć?";
$faq_a5 = "Wcale nie. $site_name jest zaprojektowana zarówno dla zupełnych początkujących, jak i doświadczonych traderów. W trybie w pełni zautomatyzowanym AI zajmuje się wszystkim za Ciebie, w tym analizą rynku, generowaniem sygnałów i realizacją zleceń. Jeśli wolisz zachować kontrolę, możesz w dowolnym momencie przełączyć się na tryb ręczny.";

$faq_cta_text = "Masz pytania? Sprawdź nasze FAQ lub skontaktuj się z naszym zespołem wsparcia.";
$faq_cta_faq_btn = "FAQ";
$faq_cta_contact_btn = "Skontaktuj Się z Nami";

// NEW TRADER LEAD SECTION (Bottom form)
$lead_title = "Nowy w Handlu?";
$lead_p1 = "Po rejestracji otrzymasz nasz darmowy przewodnik <mark class='text-on-surface-tertiary-accent'>«10 Błędów, Których Należy Unikać w Handlu Kryptowalutami»</mark>. Zawiera on proste porady od naszych najbardziej doświadczonych analityków, które pomogą Ci uniknąć typowych pułapek.";
$lead_p2 = "Po prostu wprowadź swoje dane w formularzu rejestracyjnym, a my wyślemy go bezpośrednio na Twoją skrzynkę odbiorczą. Wielu traderów zaczynało od tego przewodnika i uznało go za nieoceniony w budowaniu pewności siebie podczas pierwszych transakcji.";
$lead_form_heading = "Rynek nie czeka — zacznij już dziś!";

// FEATURES TABLE (Fonctionnalités principales)
$features_title = "<mark>Kluczowe Funkcje</mark> Platformy Handlowej $site_name";
$feature_1_title = "🤖 Technologia Platformy";
$feature_1_val = "Zaawansowany silnik handlowy oparty na AI";
$feature_2_title = "💳 Metody Finansowania";
$feature_2_val = "Główne karty kredytowe, przelewy bankowe, PayPal";
$feature_3_title = "📱 Dostęp do Platformy";
$feature_3_val = "Kompatybilność z wieloma urządzeniami (Komputer, Tablet, Telefon)";
$feature_4_title = "🚀 Wskaźnik Sukcesu";
$feature_4_val = "85% precyzji analitycznej";
$feature_5_title = "📊 Instrumenty Handlowe";
$feature_5_val = "Kryptowaluty, Forex, Akcje, Towary, Metale Szlachetne, CFD i więcej…";
$feature_6_title = "✍️ Konfiguracja Konta";
$feature_6_val = "Szybka i prosta rejestracja";
$feature_7_title = "📞 Obsługa Klienta";
$feature_7_val = "Profesjonalne, dedykowane wsparcie 24/7";

// FOOTER DISCLAIMER (TZ Item 21)
$footer_disclaimer_p1 = "$site_name dostarcza treści edukacyjne i ogólne informacje na temat rynków finansowych, handlu online i aktywów cyfrowych. Wszystkie materiały publikowane na tej stronie, w tym artykuły, wykresy, dane cenowe, informacje rynkowe i analizy, są przeznaczone wyłącznie do celów informacyjnych i nie powinny być traktowane jako porada finansowa, inwestycyjna lub prawna. Chociaż staramy się utrzymywać naszą treść dokładną i aktualną, nie gwarantujemy jej kompletności ani wiarygodności i nie ponosimy odpowiedzialności za jakiekolwiek straty wynikające z korzystania z tej strony.";
$footer_disclaimer_p2 = "Handel kryptowalutami, Forex, CFD, akcjami i innymi instrumentami finansowymi wiąże się ze znacznym ryzykiem i może nie być odpowiedni dla każdego inwestora. Warunki rynkowe mogą się szybko zmieniać, a wyniki osiągnięte w przeszłości nie gwarantują przyszłych rezultatów. Przed podjęciem jakichkolwiek decyzji inwestycyjnych, dokładnie oceń swoją sytuację finansową i tolerancję ryzyka, a w razie potrzeby zasięgnij niezależnej profesjonalnej porady. Inwestuj tylko pieniądze, których stratę możesz sobie pozwolić.";
$footer_copyright = "© " . date('Y') . " $site_name. All rights reserved.";

// FOOTER NAV LINKS
$footnav_about = "O Nas";
$footnav_how = "Jak To Działa";
$footnav_why = "Dlaczego Warto Handlować";
$footnav_faq = "FAQ";
$footnav_contacts = "Skontaktuj Się z Nami";
$footnav_privacy = "Polityka Prywatności";
$footnav_risk = "Ostrzeżenie o Ryzyku";
$footnav_terms = "Warunki Korzystania";
$footnav_product = "Produkt";
$footnav_offer = "Oferta";

// ABOUT PAGE VARIABLES
$about_meta_title = "O Nas | Oficjalna Strona $site_name";
$about_meta_description = "Dowiedz się więcej o $site_name, naszej misji demokratyzacji rynków finansowych poprzez automatyzację AI oraz naszych ramach bezpieczeństwa na poziomie instytucjonalnym.";
$about_h1 = "O <mark>$site_name</mark>";
$about_lead = "Wzmacniamy traderów na całym świecie dzięki sztucznej inteligencji, egzekucji algorytmicznej i bezpieczeństwu na poziomie korporacyjnym.";
$about_mission_title = "Nasza Misja";
$about_mission_text = "W $site_name wierzymy, że zaawansowane technologie handlowe powinny być dostępne dla każdego, a nie tylko dla funduszy instytucjonalnych. Nasza platforma wypełnia lukę między codziennymi inwestorami detalicznymi a najnowocześniejszymi algorytmami handlu obliczeniowego.";
$about_tech_title = "Najnowocześniejsza Technologia";
$about_tech_text = "Nasze systemy oceniają ponad 100 000 punktów danych każdej sekundy na globalnych rynkach kryptowalut, Forex i akcji. Łącząc predykcyjne modele uczenia maszynowego z egzekucją w submilisekundach, zapewniamy ultraniski poślizg i niezawodną wydajność.";
$about_sec_title = "Bezpieczeństwo i Zgodność Regulacyjna";
$about_sec_text = "Zaufanie klientów jest fundamentem naszego ekosystemu. Wdrażamy 256-bitowe szyfrowanie TLS, ścisłe protokoły biometryczne i 2FA oraz przechowujemy 98% wszystkich rezerw cyfrowych w skarbcach cold storage.";

// PRODUCT PAGE VARIABLES
$product_meta_title = "Narzędzia Handlowe i Produkt | $site_name";
$product_meta_description = "Odkryj silnik handlowy i możliwości AI napędzające $site_name. Zautomatyzowana realizacja zleceń, analityka predykcyjna i intuicyjne kontrolki.";
$product_h1 = "<mark>Produkt i Funkcje</mark> Platformy";
$product_lead = "Odkryj inteligentne narzędzia zaprojektowane, aby dać Ci przewagę konkurencyjną na nowoczesnych rynkach kryptowalut i finansowych.";
$product_f1_title = "Zautomatyzowany Silnik Handlowy AI";
$product_f1_text = "Pozwól neuronowym algorytmom analizować trendy rynkowe i wykonywać optymalne transakcje przez całą dobę, bez emocji.";
$product_f2_title = "Analiza Rynku w Czasie Rzeczywistym";
$product_f2_text = "Głębokość księgi zleceń na żywo, automatyczne rozpoznawanie wzorców i śledzenie nastrojów instytucjonalnych na wyciągnięcie ręki.";
$product_f3_title = "Pakiet Zarządzania Ryzykiem";
$product_f3_text = "Precyzyjne limity stop-loss i take-profit, kontrola maksymalnej ekspozycji dziennej i zautomatyzowane możliwości zabezpieczające.";
$product_f4_title = "Dostępność Wieloplatformowa";
$product_f4_text = "Handluj płynnie na przeglądarkach komputerowych, tabletach i smartfonach z zerowym opóźnieniem i pełną synchronizacją w chmurze.";

// OFFER PAGE VARIABLES
$offer_meta_title = "Specjalna Oferta i Warunki | $site_name";
$offer_meta_description = "Odkryj ekskluzywną ofertę rejestracji w $site_name. Zacznij od początkowego depozytu w wysokości $app_price $app_currency i otrzymaj dedykowane wsparcie.";
$offer_h1 = "Ekskluzywna <mark>Oferta Handlowa</mark>";
$offer_lead = "Rozpocznij swoją podróż handlową już dziś, korzystając z konkurencyjnych korzyści i dedykowanego indywidualnego wdrożenia konta.";
$offer_step1_title = "1. Szybka Rejestracja";
$offer_step1_text = "Wypełnij nasz krótki formularz rejestracyjny, aby zabezpieczyć dostęp do swojego osobistego konta w mniej niż 2 minuty.";
$offer_step2_title = "2. Zasil Swoje Saldo Handlowe";
$offer_step2_text = "Wpłać standardowe minimum $app_price $app_currency za pomocą karty kredytowej, przelewu bankowego lub e-portfeli. 100% Twoich środków trafia bezpośrednio na Twoje saldo handlowe.";
$offer_step3_title = "3. Aktywuj Handel z AI";
$offer_step3_text = "Wybierz tryb zautomatyzowany lub wspomagany, wybierz preferowane pary aktywów i rozpocznij handel z pełnymi możliwościami platformy.";

// CONTACTS PAGE VARIABLES
$contacts_meta_title = "Skontaktuj się z Pomocą Techniczną | $site_name";
$contacts_meta_description = "Skontaktuj się z zespołem $site_name. Wsparcie klienta 24/7, pomoc techniczna i zapytania dotyczące konta.";
$contacts_h1 = "Skontaktuj się z <mark>Obsługą Klienta</mark>";
$contacts_lead = "Nasz dedykowany międzynarodowy zespół wsparcia jest gotowy pomóc Ci 24 godziny na dobę, 7 dni w tygodniu.";
$contacts_info_title = "Zapytania Oficjalne";
$contacts_info_text = "W przypadku ogólnych zapytań, weryfikacji konta lub pomocy technicznej, skontaktuj się z nami za pośrednictwem naszych zweryfikowanych kanałów komunikacji.";
$contacts_support_hours = "Wsparcie na Czacie na Żywo i przez E-mail 24/7";

// FAQ PAGE VARIABLES
$faq_meta_title = "FAQ i Baza Wiedzy | $site_name";
$faq_meta_description = "Znajdź odpowiedzi na najczęściej zadawane pytania dotyczące kont $site_name, wpłat, wypłat i zautomatyzowanego handlu z AI.";
$faq_h1 = "<mark>FAQ</mark> $site_name";
$faq_lead = "Jasne odpowiedzi na najczęstsze pytania dotyczące bezpieczeństwa platformy, wypłat i zautomatyzowanego handlu.";

// PRIVACY POLICY PAGE VARIABLES
$privacy_meta_title = "Polityka Prywatności | $site_name";
$privacy_meta_description = "Przeczytaj naszą wszechstronną Politykę Prywatności, aby zrozumieć, jak $site_name zbiera, chroni i zarządza Twoimi danymi osobowymi.";
$privacy_h1 = "Polityka Prywatności";
$privacy_p1 = "Ta Polityka Prywatności opisuje, jak $site_name zbiera, wykorzystuje i ujawnia informacje, gdy odwiedzasz naszą stronę, rejestrujesz konto lub korzystasz z naszego oprogramowania handlowego.";
$privacy_sec1_title = "1. Zbieranie i Wykorzystanie Danych";
$privacy_sec1_text = "Zbieramy niezbędne dane kontaktowe (imię, adres e-mail, numer telefonu), aby założyć Twoje konto, połączyć Cię ze zweryfikowanymi partnerami maklerskimi i zweryfikować tożsamość zgodnie z międzynarodowymi standardami KYC i AML.";
$privacy_sec2_title = "2. Pliki Cookie i Technologie Śledzące";
$privacy_sec2_text = "Używamy niezbędnych i analitycznych plików cookie, aby poprawić wydajność strony, spersonalizować doświadczenie użytkownika i monitorować wzorce ruchu. Możesz w dowolnym momencie dostosować ustawienia plików cookie w przeglądarce.";
$privacy_sec3_title = "3. Bezpieczeństwo Danych i Prawa RODO";
$privacy_sec3_text = "Wszystkie dane użytkowników są szyfrowane podczas przesyłania i przechowywania przy użyciu protokołów kryptograficznych na poziomie bankowym. Zgodnie z Ogólnym Rozporządzeniem o Ochronie Danych (RODO), użytkownicy mają prawo żądać dostępu, korekty lub usunięcia swoich danych osobowych.";

// TERMS OF USE PAGE VARIABLES
$terms_meta_title = "Warunki Korzystania | $site_name";
$terms_meta_description = "Zapoznaj się z oficjalnymi Warunkami i Zasadami regulującymi korzystanie z platformy $site_name i powiązanych usług.";
$terms_h1 = "Warunki Korzystania";
$terms_p1 = "Prosimy o dokładne zapoznanie się z niniejszymi Warunkami Korzystania przed uzyskaniem dostępu do $site_name lub korzystaniem z niej. Rejestrując konto, zgadzasz się być związany tymi postanowieniami.";
$terms_sec1_title = "1. Uprawnienia Użytkownika";
$terms_sec1_text = "Musisz mieć co najmniej 18 lat i mieszkać w jurysdykcji, w której handel online i transakcje kryptowalutowe są prawnie dozwolone. Jesteś odpowiedzialny za zapewnienie zgodności ze swoimi lokalnymi przepisami.";
$terms_sec2_title = "2. Rejestracja Konta i Bezpieczeństwo";
$terms_sec2_text = "Zgadzasz się dostarczyć prawdziwe, dokładne i kompletne informacje podczas rejestracji. Ponosisz wyłączną odpowiedzialność za zachowanie poufności swoich danych logowania.";
$terms_sec3_title = "3. Ograniczenie Odpowiedzialności";
$terms_sec3_text = "$site_name świadczy usługi informacyjne i pośrednictwa programowego. Nie udzielamy spersonalizowanych porad finansowych ani nie gwarantujemy rentowności handlu. Handel na rynkach finansowych wiąże się z nieodłącznym ryzykiem kapitałowym.";

// RISK WARNING PAGE VARIABLES (TZ Item 19: Exact 4 sections)
$risk_meta_title = "Ostrzeżenie o Ryzyku i Informacja Prawna | $site_name";
$risk_meta_description = "Ważne ujawnienie ryzyka dotyczące handlu CFD, Forex i kryptowalutami na $site_name. Przeczytaj uważnie przed inwestowaniem.";
$risk_h1 = "Ostrzeżenie o Ryzyku";
$risk_sec1_title = "1. Zawiadomienie o Wysokim Ryzyku Inwestycyjnym i Zmienności";
$risk_sec1_text = "Handel kryptowalutami, kontraktami na różnicę (CFD), walutami obcymi (Forex) i innymi aktywami finansowymi wiąże się ze znacznym ryzykiem straty i może nie być odpowiedni dla wszystkich inwestorów. Rynki kryptowalut są wyjątkowo zmienne, a ceny podlegają gwałtownym wahaniom w odpowiedzi na ogłoszenia regulacyjne, zmiany makroekonomiczne lub nastroje rynkowe. Nigdy nie powinieneś inwestować pieniędzy, których stratę w całości nie możesz sobie pozwolić.";
$risk_sec2_title = "2. Niezależna Porada Finansowa";
$risk_sec2_text = "Wszystkie materiały, narzędzia, sygnały algorytmiczne i komentarze udostępniane na $site_name są przeznaczone wyłącznie do celów informacyjnych, edukacyjnych i marketingowych. Żadna z treści na tej stronie nie stanowi spersonalizowanej porady inwestycyjnej, prawnej lub finansowej. Przed wykonaniem jakichkolwiek transakcji powinieneś przeprowadzić niezależne badania lub skonsultować się z licencjonowanym doradcą finansowym.";
$risk_sec3_title = "3. Ograniczenia Regulacyjne i Geograficzne";
$risk_sec3_text = "Niektóre jurysdykcje ograniczają lub zabraniają detalicznego handlu CFD i kryptowalutami. Wyłączną odpowiedzialnością użytkownika jest sprawdzenie, czy dostęp do $site_name i korzystanie z partnerskich domów maklerskich jest zgodne z prawem w jego lokalnych ramach prawnych.";
$risk_sec4_title = "4. Technologia Platformy i Realizacja na Rynku";
$risk_sec4_text = "Zautomatyzowane narzędzia handlowe, algorytmy sztucznej inteligencji i wskaźniki rynkowe nie gwarantują zysków ani nie eliminują ryzyka rynkowego. Zakłócenia techniczne, opóźnienia sieciowe, awarie systemu i niedobory płynności mogą skutkować opóźnieniami w realizacji transakcji lub poślizgiem cenowym.";

// SIGN UP / LOGIN PAGE VARIABLES
$sign_meta_title = "Rejestracja / Logowanie | $site_name";
$sign_meta_description = "Załóż darmowe konto w $site_name, aby uzyskać dostęp do inteligentnych zautomatyzowanych narzędzi handlowych, sygnałów rynkowych i bezpiecznych opcji finansowania.";
$sign_h1 = "Zarejestruj się w <mark>$site_name</mark>";
$sign_lead = "Dołącz do tysięcy traderów i uzyskaj natychmiastowy dostęp do naszego silnika handlowego AI.";

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
$hero_form_heading = "Załóż darmowe konto";
$hero_form_button = "Zarejestruj Się";
$form_name_placeholder = "Wprowadź swoje imię";
$form_surname_placeholder = "Wprowadź swoje nazwisko";
$form_disclaimer_prefix = "Wprowadzając swoje dane osobowe i klikając przycisk, zgadzasz się z";
$form_privacy_link_label = "Polityką Prywatności";
$form_disclaimer_and = "oraz";
$form_terms_link_label = "Warunkami Korzystania";
$form_disclaimer_of_site = "tej strony internetowej.";

// -- partners strip --
$partners_label = "Zaufany przez wiodących partnerów";

// -- "what is" section --
$whatis_label = "O Platformie";
$whatis_title = "Czym jest $site_name?";
$whatis_intro = "$site_name to oficjalna platforma handlu online, zaprojektowana, aby uczynić kryptowaluty tak proste jak codzienna bankowość internetowa.";
$whatis_icon_1_title = "Analiza Napędzana przez AI";
$whatis_icon_1_text = "Zaawansowane algorytmy zajmują się złożonością rynków za Ciebie.";
$whatis_icon_2_title = "Natychmiastowa Realizacja";
$whatis_icon_2_text = "Tysiące punktów danych przetwarzanych każdej sekundy — transakcje bez opóźnień.";
$whatis_icon_3_title = "Prosty, Intuicyjny Panel";
$whatis_icon_3_text = "Sprawdź swoje saldo i otwarte pozycje na pierwszy rzut oka, o każdej porze.";
$whatis_icon_4_title = "Łatwy Dostęp, Bez Barier";
$whatis_icon_4_text = "Zacznij od minimalnego depozytu wynoszącego zaledwie $app_price $app_currency — bez ukrytych opłat.";
$whatis_cta_text = "Chcesz dowiedzieć się więcej o naszym zespole i naszym produkcie?";
$whatis_cta_link = "O Nas";

// -- stats section heading (per-stat label/value already set above) --
$stats_label = "$site_name w Liczbach";
$stats_title = "Liczby, Które Mówią Głośniej Niż Obietnice";

// -- key benefits section --
$benefits_label = "Kluczowe Korzyści";
$benefits_title = "Główne Korzyści $site_name";
$benefit_1_title = "Platforma Przyjazna dla Początkujących";
$benefit_1_text = "Intuicyjne wykresy i przewodniki krok po kroku pomogą Ci zacząć bez poczucia przytłoczenia. Możesz handlować kryptowalutami z pewnością siebie od pierwszego dnia.";
$benefit_2_title = "Oficjalna i Regulowana";
$benefit_2_text = "$site_name posiada licencję i przestrzega obowiązujących przepisów finansowych. Używamy szyfrowania SSL i uwierzytelniania dwuskładnikowego, aby chronić każde konto.";
$benefit_3_title = "Łatwy Dostęp, Bez Barier";
$benefit_3_text = "Przy minimalnym depozycie wynoszącym zaledwie $app_price $app_currency, każdy może zacząć. Nie jest wymagana duża wstępna inwestycja — zacznij od małych kwot i zwiększaj swój udział w miarę wzrostu pewności siebie.";
$benefit_4_title = "Przejrzyste Opłaty";
$benefit_4_text = "Nigdy nie zobaczysz ukrytych opłat. Stosujemy tylko minimalne opłaty za transakcje lub wypłaty, tam gdzie ma to zastosowanie, więc zawsze dokładnie wiesz, za co płacisz.";
$benefit_5_title = "Dostęp do Handlu 24/7";
$benefit_5_text = "Handluj według własnego harmonogramu, w dzień i w nocy. $site_name działa równie dobrze na komputerze, jak i na urządzeniach mobilnych, dzięki czemu możesz pozostać w kontakcie z rynkiem, gdziekolwiek jesteś.";
$benefit_6_title = "Lokalna Obsługa Klienta";
$benefit_6_text = "Nasz zespół wsparcia jest dostępny przez czat, telefon lub e-mail. Prawdziwi ludzie są tutaj, aby pomóc Ci w Twoim języku, kiedy tylko tego potrzebujesz.";
$benefits_trust_title = "Zaufany przez Użytkowników na Całym Świecie";
$benefits_trust_text = "Dlatego tak wielu użytkowników kryptowalut ufa $site_name. Tysiące traderów już korzysta z $site_name, a każdego dnia dołączają nowe konta.";
$benefits_cta = "Zarejestruj Się";
$benefits_badge_1 = "256-bitowy SSL";
$benefits_badge_2 = "Bezpieczne Płatności";
$benefits_badge_3 = "2FA";

// -- security section --
$security_label = "Bezpieczeństwo";
$security_title = "Twoje Środki Są Bezpieczne z $site_name";
$security_subtitle = "Szyfrowanie na poziomie bankowym, zweryfikowane płatności i 98% cold storage — Twoje pieniądze są chronione na każdym etapie.";
$security_1_title = "Zweryfikowani Dostawcy Płatności";
$security_1_text = "Płatności są przetwarzane wyłącznie przez certyfikowanych dostawców spełniających międzynarodowe standardy bezpieczeństwa. Dane Twoich płatności nigdy nie są przechowywane na naszych serwerach.";
$security_2_title = "256-bitowe Szyfrowanie SSL";
$security_2_text = "Wszystkie dane wymieniane między Twoim urządzeniem a naszą platformą są szyfrowane za pomocą 256-bitowego TLS. Żadna osoba trzecia nie może ich przechwycić ani odczytać.";
$security_3_title = "98% Cold Storage";
$security_3_text = "98% aktywów jest przechowywanych w portfelach offline, bez połączenia z internetem. Nikt nie może uzyskać do nich zdalnego dostępu.";
$security_4_title = "Uwierzytelnianie Wieloskładnikowe";
$security_4_text = "Tylko Ty masz dostęp do swojego konta. Każde logowanie jest weryfikowane przez drugi krok, który kontrolujesz tylko Ty.";
$security_5_title = "Monitorowanie Konta";
$security_5_text = "Każde logowanie, transakcja lub zmiana ustawień wywołuje natychmiastowe powiadomienie, więc zawsze wiesz, co dzieje się na Twoim koncie.";
$security_6_title = "Ochrona Hasła";
$security_6_text = "Hasła są przechowywane w nieczytelnej, nieodwracalnej formie. Technicznie nie mamy możliwości zobaczenia Twojego hasła.";
$security_cta_title = "Odbierz Darmowy Przewodnik!";
$security_cta_text = "Odbierz nasz darmowy przewodnik dla początkujących i zacznij handlować już dziś.";
$security_cta_button = "Zarejestruj Się";
$security_badge_1 = "98% Cold Storage";
$security_badge_2 = "Zweryfikowane Płatności";
$security_badge_3 = "Zaszyfrowane";

// -- how it works section --
$how_label = "Jak To Działa";
$how_title = "Jak To Działa";
$how_1_title = "Zarejestruj Się";
$how_1_text = "Kliknij przycisk „Otwórz Konto” i wypełnij formularz rejestracyjny swoimi danymi (imię, e-mail i numer telefonu). Zajmuje to tylko minutę.";
$how_2_title = "Wpłać Środki";
$how_2_text = "Następnie zasil swoje konto. Minimalny depozyt to zaledwie $app_price $app_currency. Możesz użyć karty kredytowej/debetowej, lokalnego przelewu bankowego lub popularnych e-portfeli. (Wskazówka: zacznij od kwoty, z którą czujesz się komfortowo).";
$how_3_title = "Zacznij Handlować";
$how_3_text = "Gdy Twoje środki znajdą się na koncie, jesteś gotowy do handlu. Wybierz aktywo, którego chcesz (np. BTC, SOL lub USDT) i zdecyduj o swojej strategii.";
$how_cta_label = "Jak To Działa";
$how_cta_text = "Potrzebujesz więcej informacji o tym, jak działa usługa?";
$how_cta_link = "Jak To Działa";

// -- trust reasons section --
$trust_label = "Dlaczego Warto Handlować z Nami";
$trust_intro = "Dołącz do tysięcy użytkowników, którzy już handlują z $site_name. Na naszej stronie wyświetlany jest nawet licznik na żywo, pokazujący, ile osób handluje w tej chwili.";
$trust_1_title = "W Pełni Regulowana";
$trust_1_text = "$site_name jest należycie zarejestrowana i przestrzega obowiązujących przepisów finansowych. Działamy zgodnie z rygorystycznymi zasadami, aby zapewnić Twoje bezpieczeństwo.";
$trust_2_title = "Zaawansowane Bezpieczeństwo";
$trust_2_text = "Wszystkie Twoje dane i środki są szyfrowane i zabezpieczone. Egzekwujemy ścisłą ochronę konta poprzez szyfrowanie SSL i uwierzytelnianie dwuskładnikowe.";
$trust_3_title = "Przejrzyste Operacje";
$trust_3_text = "Nigdy nie ukrywamy naszych opłat i nigdy nie dodajemy niespodziewanych zasad. Przed każdą transakcją widzisz dokładnie, jakie opłaty obowiązują.";
$trust_4_title = "Responsywne Wsparcie";
$trust_4_text = "Nasz zespół wsparcia jest dostępny przez czat, telefon lub e-mail, aby odpowiedzieć na Twoje pytania lub rozwiązać wszelkie problemy.";
$trust_cta_text = "Więcej informacji o warunkach rynkowych";
$trust_cta_link = "Dlaczego Warto Handlować";

// -- testimonials section heading (individual reviews already set above) --
$testimonials_label = "Opinie";
$testimonials_title = "Zaufany przez Ponad 4M Traderów";

// -- FAQ section heading --
$faq_label = "FAQ";

// -- lead magnet CTA block --
$leadmagnet_title = "Nowy w Handlu?";
$leadmagnet_text1 = "Po rejestracji otrzymasz nasz darmowy przewodnik,";
$leadmagnet_quote = "„10 Błędów, Których Należy Unikać przy Handlu Kryptowalutami”";
$leadmagnet_text2 = "pełen prostych wskazówek od naszych najbardziej doświadczonych analityków, które pomogą Ci uniknąć najczęstszych błędów.";
$leadmagnet_text3 = "Po prostu wprowadź swoje dane podczas";
$leadmagnet_link = "rejestracji";
$leadmagnet_text4 = "a my wyślemy go bezpośrednio na Twoją skrzynkę odbiorczą. Wielu inwestorów zaczynało od tego przewodnika i twierdzi, że zrobił on prawdziwą różnicę.";
$leadmagnet_text5 = "Rynek nie czeka — zacznij już dziś!";

// -- pre-about CTA band --
$pre_about_title = "Gotów Przejąć Kontrolę nad Swoim Handlem?";
$pre_about_text = "Dołącz do $site_name już dziś i odkryj platformę zbudowaną z myślą o przejrzystości, bezpieczeństwie i wynikach.";
$pre_about_button = "Zarejestruj Się";

// -- pretest (quiz teaser) badges/CTA --
$pretest_title = "Zacznij Handlować z $app_price $app_currency!";
$pretest_text = "Gotów wypróbować $site_name? Zarejestruj się teraz i dołącz do rosnącej społeczności inwestorów i traderów kryptowalut.";
$pretest_button = "Zarejestruj Się";
$pretest_badge_1 = "Bezpieczne";
$pretest_badge_2 = "Regulowane";
$pretest_badge_3 = "Zaufany przez Ponad 4M Traderów";

// -- about page --
$about_label = "O Nas";
$about_title = "O $site_name";
$about_intro = "$site_name nie tylko daje Ci platformę handlową — pomagamy Ci handlować z jasnością i pewnością siebie.";
$about_text_1 = "$site_name to oficjalna platforma handlu online, zaprojektowana, aby handel kryptowalutami był dostępny zarówno dla początkujących, jak i doświadczonych traderów.";
$about_text_2 = "Łączymy analizę rynku napędzaną przez AI z prostym, przejrzystym panelem, dzięki czemu zawsze dokładnie wiesz, na czym stoisz.";
$about_text_3 = "Każda część platformy zbudowana jest wokół przejrzystości: bez ukrytych opłat, bez mylącego żargonu, tylko jasne informacje, na których podstawie możesz działać.";
$about_text_4 = "Nasza platforma oszczędza Ci godzin zgadywania i chroni Cię przed nieprzejrzystymi alternatywami niskiej jakości. Wierzymy, że handel powinien opierać się na precyzji, a nie na szczęściu.";

// -- contact page --
$contact_label = "Skontaktuj Się z Nami";
$contact_title = "Skontaktuj się z $site_name";
$contact_subtitle = "Masz pytanie lub potrzebujesz pomocy? Jesteśmy tutaj, aby Ci doradzić i pokierować Tobą.";
$contact_text = "W $site_name wierzymy, że sukces w handlu nie ma nic wspólnego ze szczęściem — polega na precyzji, przewidywaniu i odpowiednich narzędziach.";
$contact_form_text = "Po prostu wypełnij poniższy formularz, a członek naszego zespołu wkrótce się z Tobą skontaktuje.";
$contact_form_button = "Wyślij Wiadomość";

// -- footer navigation labels (geo-page footer, TZ items 12/16/18) --
$footnav_col_pages = "Strony";
$footnav_col_support = "Wsparcie";
$footnav_col_legal = "Informacje Prawne";
$footnav_col_company = "Firma";
$footnav_home = "Strona Główna";
$footnav_sitemap = "Mapa Strony";
$footnav_conditions = "Warunki Korzystania";
$footnav_contact = "Skontaktuj Się z Nami";
$footnav_signup = "Zarejestruj Się";
$footer_risk_warning = "Ostrzeżenie o Ryzyku";

// -- geo-page footer legal disclaimer (single-paragraph variant used by
// the geo template's own footer layout; the two-paragraph TZ item 21
// text above -- $footer_disclaimer_p1/$footer_disclaimer_p2 -- covers
// the root pages) --
$footer_disclaimer = "$site_name dostarcza treści edukacyjne i ogólne informacje na temat rynków finansowych, handlu online i aktywów cyfrowych. Wszystkie materiały publikowane na tej stronie są przeznaczone wyłącznie do celów informacyjnych i nie powinny być traktowane jako porada finansowa, inwestycyjna lub prawna. Handel wiąże się ze znacznym ryzykiem i może nie być odpowiedni dla każdego inwestora. Inwestuj tylko pieniądze, których stratę możesz sobie pozwolić.";

// ============================================================
// Geo-language SUBPAGE fallback content (TZ item 16 cont.). Same
// rationale as the block above: conditions/contacts/faq/offer/
// privacy/product/risk-warning/sign.php share templates across the
// bg/cs/da/... stub folders and reference these vars directly.
// English fallback so every geo folder's subpages render complete.
// ============================================================

// -- shared form aliases (service-page forms reuse the hero disclaimer) --
$form_disclaimer_risk_note = "Przeczytaj również naszą";
$form_text = $form_disclaimer_prefix;
$form_text_privacy = $form_privacy_link_label;
$form_text_privacy_and = $form_disclaimer_and;
$form_text_conditions = $form_terms_link_label;
$form_text_conditions_of = $form_disclaimer_of_site;
$form_text_risk_warning_note = $form_disclaimer_risk_note;
$form_submit = "Zarejestruj Się";

// -- generic breadcrumbs (sign-up / product pages) --
$breadcrumb_home = "Strona Główna";
$breadcrumb_current = "Rejestracja / Logowanie";
$breadcrumb_product = "Produkt";

// -- sign-up page official heading --
$official_heading = "Zarejestruj się na Oficjalnej Platformie $site_name™";
$official_description = "Załóż darmowe konto, aby zacząć handlować kryptowalutami na bezpiecznej, przejrzystej platformie.";

// -- product page: analytics banner --
$analytics_heading = "Handluj Mądrzej z $site_name";
$analytics_description = "Uzyskaj jasne dane rynkowe w czasie rzeczywistym i wnioski napędzane przez AI. Podejmuj świadome decyzje handlowe z pewnością siebie.";

// -- product page: dashboard preview --
$app_main_heading = "Twój Panel Handlowy";
$app_feature_1_title = "Dane Rynkowe na Żywo";
$app_feature_1_text = "Ceny i wykresy w czasie rzeczywistym na wyciągnięcie ręki";
$app_feature_2_title = "Śledzenie Portfela";
$app_feature_2_text = "Kompleksowe wskaźniki dotyczące Twojego salda i wyników";
$app_feature_3_title = "Widok Mobilny";
$app_feature_3_text = "Zoptymalizowany dla przeglądarek mobilnych";
$app_feature_4_title = "Listy Obserwowanych";
$app_feature_4_text = "Śledź aktywa, które obserwujesz";

// -- product page: capabilities --
$capabilities_main_title = "Czego Się Spodziewać";
$capabilities_feature_1_title = "Sygnały Napędzane przez AI";
$capabilities_feature_1_text = "Zaawansowane algorytmy analizują sygnały rynkowe i wykrywają okazje przez całą dobę.";
$capabilities_feature_2_title = "Szybka Rejestracja";
$capabilities_feature_2_text = "Zarejestruj się w kilka minut dzięki bezpiecznemu, prostemu procesowi rejestracji.";
$capabilities_feature_3_title = "Zweryfikowane Bezpieczeństwo";
$capabilities_feature_3_text = "256-bitowe szyfrowanie SSL, 2FA i 98% cold storage chronią Twoje środki na każdym etapie.";
$capabilities_feature_4_title = "Ciągłe Wsparcie";
$capabilities_feature_4_text = "Uzyskaj wsparcie od naszego zespołu na każdym etapie — od rejestracji po Twoją pierwszą transakcję.";

// -- product page: stats strip --
$products_stats_currencies_v = "65+";
$products_stats_currencies_l = "Dostępne Waluty";
$products_stats_users_v = "4M+";
$products_stats_users_l = "Zarejestrowani Użytkownicy";
$products_stats_volume_v = "98+";
$products_stats_volume_l = "Obsługiwane Kraje";
$products_stats_countries_v = "24/7";
$products_stats_countries_l = "Dostęp do Transakcji";

// -- product page: 3-step strip --
$step_1 = "Załóż konto";
$step_2 = "Wpłać środki";
$step_3 = "Zacznij handlować strategią, która Ci odpowiada";

// -- shared "last update" label (privacy page) --
$last_update = "Ostatnia aktualizacja";

// -- FAQ page --
$faq_page_meta_title = "FAQ | Wsparcie $site_name";
$faq_page_meta_description = "Odpowiedzi na często zadawane pytania dotyczące działania $site_name, cen i rozpoczynania.";
$faq_page_title = "FAQ";
$faq_page_breadcrumb_home = "Strona Główna";
$faq_page_breadcrumb_current = "FAQ";
$faq_page_help_title = "Jak możemy Ci pomóc?";
$faq_1_q = "Jak zacząć?";
$faq_1_a = "Załóż konto, zweryfikuj swój adres e-mail i dokonaj pierwszej wpłaty — plany zaczynają się już od $app_price $app_currency.";
$faq_2_q = "Czy moje pieniądze i dane są bezpieczne? Czy $site_name jest wiarygodna?";
$faq_2_a = "Tak. Twoje dane są chronione standardowym w branży 256-bitowym szyfrowaniem, a Twoje środki są zabezpieczone uwierzytelnianiem dwuskładnikowym i 98% cold storage.";
$faq_3_q = "Czy mogę zamknąć konto lub wypłacić środki w dowolnym momencie?";
$faq_3_a = "Tak. Nie ma żadnych ograniczeń dotyczących wypłat. Skontaktuj się z naszym zespołem wsparcia w dowolnym momencie — pomożemy Ci z kontem lub szybko przetworzymy Twoją wypłatę.";
$faq_4_q = "Skąd wiem, czy ta platforma jest dla mnie odpowiednia?";
$faq_4_a = "$site_name została stworzona zarówno dla zupełnych początkujących, jak i doświadczonych traderów, którzy chcą handlować efektywniej — każde narzędzie na platformie jest zaprojektowane, aby Cię informować i dawać Ci kontrolę.";
$faq_5_q = "Czy potrzebuję doświadczenia w handlu, aby zacząć?";
$faq_5_a = "Wcześniejsze doświadczenie nie jest wymagane. Nasz tryb oparty na AI zajmuje się analizą za Ciebie, a Ty możesz w dowolnym momencie przełączyć się na tryb ręczny, jeśli chcesz mieć więcej kontroli.";

// -- contacts page --
$contacts_h3 = "W przypadku pytań technicznych lub pytań dotyczących Twojego konta, skontaktuj się z nami przez e-mail";

// -- offer page (meta title/description already defined above) --
$offer_breadcrumb_home = "Strona Główna";
$offer_breadcrumb_current = "Oferta";
$offer_cta_h1 = "Zacznij Handlować Już Dziś";
$offer_cta_text = "Gotowe w kilka minut: zarejestruj się, zasil swoje konto i zacznij handlować kryptowalutami na bezpiecznej, regulowanej platformie.";
$offer_how_it_works_title = "Jak To Działa";
$offer_official_platform_title = "To Oficjalna Platforma Handlowa $site_name™";
$offer_official_platform_text = "Wiarygodny, przejrzysty sposób na handel kryptowalutami — z informacjami w czasie rzeczywistym i pełną kontrolą.";

// -- conditions of use page --
$conditions_meta_title = "Warunki Korzystania | $site_name";
$conditions_meta_description = "Przeczytaj oficjalne Warunki Korzystania dotyczące strony internetowej i platformy handlowej $site_name.";
$conditions_breadcrumb_home = "Strona Główna";
$conditions_breadcrumb_current = "Warunki Korzystania";
$conditions_h1 = "Warunki Korzystania";
$conditions_s1_title = "1. Postanowienia Ogólne";
$conditions_s1_text = "Ta strona internetowa zapewnia dostęp do internetowej platformy handlu kryptowalutami. Korzystanie z platformy stanowi pełną akceptację niniejszych warunków oraz naszej Polityki Prywatności.";
$conditions_s2_title = "2. Kwalifikowalność";
$conditions_s2_text = "Użytkownicy muszą mieć co najmniej 18 lat i posiadać pełną zdolność prawną w swojej jurysdykcji.";
$conditions_s3_title = "3. Ograniczony Dostęp";
$conditions_s3_text = "Dostęp może być ograniczony w jurysdykcjach, w których lokalne przepisy zabraniają rodzaju usług handlowych, które oferujemy.";
$conditions_s4_title = "4. Zabronione Użycie";
$conditions_s4_text = "Użytkownicy nie mogą nadużywać systemu, próbować uzyskać nieautoryzowany dostęp do naszych systemów ani dokonywać inżynierii wstecznej naszego oprogramowania.";
$conditions_s5_title = "5. Własność Intelektualna";
$conditions_s5_text = "Cały kod źródłowy, interfejsy użytkownika i zasoby marki pozostają wyłączną własnością firmy operacyjnej.";
$conditions_s6_title = "6. Odpowiedzialność";
$conditions_s6_text = "Narzędzia platformy są dostarczane „tak jak są”. Nie ponosimy odpowiedzialności za wyniki wynikające z własnych decyzji handlowych użytkownika.";
$conditions_s7_title = "7. Usługi Stron Trzecich";
$conditions_s7_text = "Integracje z zewnętrznymi dostawcami płatności odbywają się za pośrednictwem bezpiecznych połączeń. W przypadku wpłat i wypłat użytkownicy kontaktują się bezpośrednio z wybranym przez siebie dostawcą.";
$conditions_s8_title = "8. Linki Zewnętrzne";
$conditions_s8_text = "Linki do zewnętrznych zasobów są udostępniane wyłącznie dla wygody. Nie popieramy ani nie gwarantujemy żadnego zewnętrznego oprogramowania.";
$conditions_s9_title = "9. Postanowienia Różne";
$conditions_s9_text = "Zastrzegamy sobie prawo do modyfikacji niniejszych warunków lub usługi w dowolnym momencie, przy czym zmiany będą publikowane na stronie internetowej.";

// -- privacy policy page (meta title/description already defined above) --
$privacy_breadcrumb_home = "Strona Główna";
$privacy_breadcrumb_current = "Polityka Prywatności";
$privacy_page_h1 = "Polityka Prywatności";
$privacy_intro = "Szanujemy Twoją prywatność i przetwarzamy dane osobowe w pełnej zgodności z międzynarodowymi standardami i europejskim RODO.";
$privacy_transparency_title = "Przejrzystość";
$privacy_transparency_text = "Jasno ujawniamy, w jaki sposób przetwarzane są operacyjne dane telemetryczne. Skontaktuj się z pomocą techniczną, aby uzyskać więcej informacji.";
$privacy_usage_title = "Wykorzystanie Danych";
$privacy_usage_text = "Dane są wykorzystywane wyłącznie w celu zapewnienia dostępu, zabezpieczenia sesji i spełnienia obowiązków zgodności.";
$privacy_rights_short_title = "Twoje Prawa";
$privacy_rights_short_text = "Zachowujesz pełne prawa do przeglądania, aktualizowania lub żądania usunięcia swoich danych osobowych.";
$privacy_security_title = "Bezpieczeństwo";
$privacy_security_text = "Używamy szyfrowania AES-256 i izolacji baz danych do ochrony operacyjnych danych telemetrycznych.";
$privacy_s1_title = "1. Zbieranie Danych";
$privacy_s1_text = "Zbieramy dane telemetryczne dotyczące użytkowania (adres IP, parametry systemowe, typ przeglądarki), a także dane weryfikacyjne przesyłane przez użytkowników.";
$privacy_s2_title = "2. Podstawa Prawna";
$privacy_s2_text = "Przetwarzanie opiera się na wyraźnej zgodzie użytkowników, wymogach zgodności regulacyjnej oraz świadczeniu usługi.";
$privacy_s3_title = "3. Udostępnianie Danych";
$privacy_s3_text = "Dane nigdy nie są komercjalizowane. Ujawnienia są ograniczone do autoryzowanych podmiotów rozliczeniowych i partnerów technicznych na podstawie umowy o zachowaniu poufności (NDA).";
$privacy_s4_title = "4. Pliki Cookie";
$privacy_s4_text = "Niezbędne pliki cookie są używane do uwierzytelniania sesji i optymalizacji interfejsu.";
$privacy_google_choices = 'Zarządzaj swoimi preferencjami śledzenia za pomocą <a href="http://www.google.com/settings/ads" target="_blank" rel="noopener">Ustawień Reklam Google</a> lub użyj <a href="https://tools.google.com/dlpage/gaoptout" target="_blank" rel="noopener">Dodatku Rezygnacji z Google Analytics</a>. Możesz również zapoznać się z własnymi praktykami dotyczącymi danych Google w jego <a href="https://www.google.com/intl/en/policies/privacy/" target="_blank" rel="noopener">Polityce Prywatności</a>.';
$privacy_s5_title = "5. Przechowywanie Danych";
$privacy_s5_text = "Dane osobowe są przechowywane tylko tak długo, jak jest to konieczne do spełnienia wymagań dostępu do systemu.";
$privacy_s6_title = "6. Transfery Międzynarodowe";
$privacy_s6_text = "Transgraniczne transfery danych odbywają się wyłącznie za pośrednictwem szyfrowanych kanałów i za pomocą standardowych klauzul umownych.";
$privacy_s7_title = "7. Linki Stron Trzecich";
$privacy_s7_text = "Nie ponosimy odpowiedzialności za praktyki prywatności zewnętrznych usług stron trzecich powiązanych z naszą stroną internetową.";
$privacy_s8_title = "8. Aktualizacje";
$privacy_s8_text = "Niniejsza polityka może być okresowo weryfikowana, aby odzwierciedlić zmiany systemowe lub prawne.";
$privacy_rights_title = "Twoje Prawa";
$privacy_rights_text = "Użytkownicy mają prawo żądać dostępu, korekty, ograniczonego przetwarzania lub całkowitego usunięcia przechowywanych danych.";

// -- risk warning page --
$page_title_risk_warning = "Ostrzeżenie o Ryzyku | $site_name";
$page_description_risk_warning = "Zrozum ryzyko związane z handlem i jak $site_name pomaga Ci nim bezpiecznie zarządzać.";
$risk_warning_breadcrumb_home = "Strona Główna";
$risk_warning_breadcrumb_current = "Ostrzeżenie o Ryzyku";
$risk_warning_title = "Ostrzeżenie o Ryzyku";
$risk_warning_intro = "Zrozumienie ryzyka to pierwszy krok w kierunku handlu z pewnością siebie.";
$risk_warning_ai_heading = "Jak nasz system AI pomaga w zarządzaniu ryzykiem:";
$risk_warning_ai_1 = "<strong>Wydajność Algorytmiczna i Handel Bez Emocji:</strong> Zaawansowane algorytmy analizują sygnały rynkowe, aby obiektywnie wykonywać transakcje w optymalnym momencie.";
$risk_warning_ai_2 = "<strong>Strategie Oparte na Danych:</strong> Strategie opierają się na zweryfikowanych wzorcach rynkowych i analizie w czasie rzeczywistym, a nie na zgadywaniu.";
$risk_warning_ai_3 = "<strong>Elastyczne Ustawienia i Pełna Kontrola:</strong> Dostosuj swoje parametry ryzyka w dowolnym momencie. Śledź wszystkie salda i transakcje w sposób przejrzysty na swoim panelu — bez ukrytych opłat i bez ograniczeń w wypłatach.";
$risk_warning_disclaimer = "<strong>Zastrzeżenie:</strong> Handel zawsze wiąże się z ryzykiem. Zautomatyzowane systemy (w tym AI) nie gwarantują zysku, mogą zawieść z powodu błędów oprogramowania lub nieoczekiwanych wydarzeń rynkowych i wymagają nadzoru użytkownika. Wyniki osiągnięte w przeszłości nie są wskaźnikiem przyszłych rezultatów. Ta platforma jest przeznaczona wyłącznie do celów informacyjnych i marketingowych i nie stanowi porady finansowej.";
$risk_warning_s1_heading = "1. Ogólne Ryzyko i Ryzyko Rynku Kryptowalut";
$risk_warning_s1_1 = "Kryptowaluty to wysoce zmienne, spekulacyjne aktywa, którymi handluje się przez całą dobę i które podlegają jedynie minimalnemu nadzorowi regulacyjnemu w większości jurysdykcji.";
$risk_warning_s1_2 = "Wartości mogą drastycznie się wahać w krótkich okresach, co potencjalnie może prowadzić do całkowitej utraty zainwestowanego kapitału.";
$risk_warning_s1_3 = "Wartości rynkowe mogą być znacząco dotknięte zmianami regulacyjnymi, rozwojem technicznym, naruszeniami bezpieczeństwa lub szerszymi wydarzeniami makroekonomicznymi.";
$risk_warning_s1_4 = "Niektóre aktywa mogą całkowicie stracić swoją wartość. Inwestuj tylko pieniądze, których stratę możesz sobie pozwolić.";
$risk_warning_s2_heading = "2. Ryzyko Realizacji, Płynności i Dźwigni";
$risk_warning_s2_1 = "<strong>Zmienność Rynku i Płynność:</strong> Ekstremalne ruchy cen (10-20%+ dziennie) lub niska płynność (szczególnie w przypadku mniejszych monet) mogą prowadzić do opóźnień, awarii platformy i znacznego poślizgu w realizacji. Zlecenia stop-loss nie mogą zagwarantować ograniczenia strat w ekstremalnych warunkach.";
$risk_warning_s2_2 = "<strong>Ryzyko Dźwigni i Depozytu Zabezpieczającego:</strong> Produkty z dźwignią wzmacniają zarówno zyski, jak i straty, co oznacza, że możesz stracić więcej niż swój pierwotny depozyt. Około 70-80% kont inwestorów detalicznych traci pieniądze podczas handlu produktami z dźwignią.";
$risk_warning_s3_heading = "3. Ryzyko Techniczne, Cyberbezpieczeństwa i Stron Trzecich";
$risk_warning_s3_1 = "<strong>Czynniki Techniczne:</strong> Handel online z natury wiąże się z ryzykiem, takim jak przerwy w łączności internetowej, awarie sprzętu/oprogramowania i niedostępność usługi.";
$risk_warning_s3_2 = "<strong>Cyberbezpieczeństwo:</strong> Konta kryptowalutowe są częstym celem phishingu, złośliwego oprogramowania i prób hakowania. Transakcje są nieodwracalne; naruszenie Twoich danych logowania może skutkować trwałą stratą.";
$risk_warning_s3_3 = "<strong>Platformy Stron Trzecich:</strong> Ta strona internetowa może łączyć użytkowników z platformami stron trzecich. Nie kontrolujemy, nie popieramy ani nie gwarantujemy ich bezpieczeństwa, działalności ani wypłacalności. Zawsze przeprowadzaj własną, dokładną analizę due diligence przed zdeponowaniem środków na zewnętrznych platformach.";
$risk_warning_s4_heading = "4. Postanowienia Regulacyjne, Podatkowe i Końcowe";
$risk_warning_s4_1 = "<strong>Zgodność Prawna i Podatki:</strong> Ramy regulacyjne znacznie się różnią i szybko się zmieniają. Użytkownicy ponoszą wyłączną odpowiedzialność za zapewnienie, że ich działalność handlowa jest zgodna z lokalnym prawem, jak również za wypełnianie własnych obowiązków podatkowych.";
$risk_warning_s4_2 = "<strong>Brak Gwarancji Zysku:</strong> Nie istnieje „bezpieczny” ani wolny od ryzyka handel kryptowalutami. Wszelkie podane liczby zwrotów lub przykłady wyników są czysto hipotetyczne.";
$risk_warning_s4_3 = "<strong>Odpowiedniość:</strong> Jeśli w pełni nie rozumiesz ryzyka, jesteś zależny od niezbędnych środków finansowych lub handlujesz pożyczonymi pieniędzmi, handel kryptowalutami nie jest dla Ciebie odpowiedni. W razie wątpliwości skonsultuj się z niezależnym, licencjonowanym doradcą finansowym.";
$risk_warning_contact = "<strong>Kontakt:</strong> Jeśli masz pytania dotyczące tego oświadczenia lub chcesz przesłać zapytanie, skontaktuj się z naszym oficjalnym zespołem obsługi klienta za pośrednictwem formularza kontaktowego na naszej stronie internetowej.";

