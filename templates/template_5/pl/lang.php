<?php
require __DIR__ . '/../lang.php';

// Identity / config variables are intentionally NOT overridden here — they are inherited
// as-is from the root lang.php so brand/pricing swaps still work correctly at deploy time:
// $site_name, $site_url, $site_domain, $app_price, $app_currency, $rating_value,
// $rating_count, $review_count, $country_name, $support_email, $institutional_email.

$site_lang = 'pl-PL';
$form_language = 'pl';

// Reviews
$review_1_author = "Prywatny inwestor";
$review_2_author = "Niezależny trader";
$review_3_author = "Trader aktywów cyfrowych";
$review_4_author = "Poszukujący pasywnego dochodu";

// META TITLE / DESCRIPTION (per page)
$home_meta_title = "$site_name — Oficjalna strona | Platforma tradingowa";
$home_meta_description = "$site_name ⭐ — inteligentna platforma tradingowa AI do analizy rynku w czasie rzeczywistym i jasnych sygnałów transakcyjnych ⚡ Wypróbuj inteligentne narzędzia z przewodnikiem.";

$quiz_consultant_name = 'Mia';
$quiz_consultant_role = 'Asystentka wdrożeniowa';

$quiz_text_welcome   = "Cześć! Tu $quiz_consultant_name, Twoja osobista asystentka wdrożeniowa w $site_name. Świetna wiadomość! Twój dostęp został oficjalnie wstępnie zatwierdzony. Pozwól nam teraz skonfigurować Twój profesjonalny profil!";
$quiz_text_q1 = "Aby zapewnić pełną zgodność regulacyjną i prawną, potwierdź swój kraj obecnego zamieszkania: $country_name";
$quiz_text_a1_yes    = "Tak, to moje obecne miejsce zamieszkania";
$quiz_text_a1_no     = "Nie";

$quiz_text_q2 = "Świetnie. Wybierz odpowiednią kategorię wiekową, abyśmy mogli znaleźć najbardziej odpowiednie instrumenty finansowe:";

$quiz_text_q3        = "Czy dostępne jest aktywne konto bankowe lub karta kredytowa do otrzymywania regularnych codziennych wypłat dywidend?";
$quiz_text_a3_yes    = "Tak, aktywne konto jest dostępne";
$quiz_text_a3_no     = "Jeszcze nie jest dostępne";

$quiz_text_q4        = "Podaj główne źródło dochodu osobistego. (Ten parametr pomaga dostosować ustawienia zarządzania ryzykiem systemu).";
$quiz_text_a4_1      = "Zatrudnienie oficjalne / samozatrudnienie";
$quiz_text_a4_2      = "Dochód pasywny / oszczędności osobiste";
$quiz_text_a4_3      = "Inne źródła";

$quiz_text_q5 = "Świetnie! Ostatnim krokiem jest krótka weryfikacja telefoniczna przez naszego menedżera w celu potwierdzenia rejestracji. Połączenia wykonywane są od 11:00 do 20:00. Czy będziesz w stanie odebrać połączenie?";
$quiz_text_a5_yes    = "Tak, ta pora mi odpowiada";
$quiz_text_a5_no     = "Proszę zainicjować połączenie natychmiast";

$quiz_text_loader    = "Analizujemy wybrane opcje i inicjalizujemy parametry bezpiecznej konfiguracji konta...";
$quiz_text_final_ttl = "Konto pomyślnie autoryzowane! 🎉 Twoje bezpieczne cyfrowe miejsce pracy jest w pełni skonfigurowane. Ukończ poniższe kroki weryfikacji, aby zagwarantować codzienne wypłaty:";

$quiz_placeholder_fname = "Imię";
$quiz_placeholder_lname = "Nazwisko";
$quiz_placeholder_email = "Adres e-mail";
$quiz_placeholder_phone = "Numer telefonu";
$quiz_btn_submit = "Aktywuj trading";
$quiz_text_typing       = "pisze wiadomość...";
$quiz_text_processing   = "Przetwarzanie żądania...";


$about_meta_title = "O $site_name | Infrastruktura tradingu kryptowalut AI";
$about_meta_description = "Dowiedz się więcej o $site_name, zaawansowanej infrastrukturze tradingu kryptowalut opartej na AI, skupionej na analityce predykcyjnej, analizie rynku, monitorowaniu zmienności i badaniu aktywów cyfrowych.";

$contact_meta_title = "Kontakt $site_name | Poproś o dostęp do platformy AI";
$contact_meta_description = "Skontaktuj się z $site_name, aby poprosić o dostęp, zapytać o infrastrukturę tradingu kryptowalut AI, obsługiwane rynki, analizę aktywów cyfrowych lub wdrożenie na platformie.";

$terms_meta_title = "Regulamin | Warunki strony i platformy $site_name";
$terms_meta_description = "Przeczytaj Regulamin $site_name dotyczący korzystania ze strony, treści informacyjnych, infrastruktury tradingu AI, odpowiedzialności użytkownika, usług osób trzecich i ograniczeń ryzyka.";

$privacy_meta_title = "Polityka prywatności | Ochrona danych i prywatność użytkownika $site_name";
$privacy_meta_description = "Przeczytaj Politykę prywatności $site_name, aby zrozumieć, jak zbieramy, wykorzystujemy, chronimy, przechowujemy i zarządzamy danymi osobowymi przesłanymi za pośrednictwem naszej strony infrastruktury tradingu kryptowalut AI.";

$cookies_meta_title = "Polityka cookies | Pliki cookie i śledzenie na stronie $site_name";
$cookies_meta_description = "Dowiedz się, jak $site_name wykorzystuje pliki cookie, technologie analityczne, narzędzia śledzenia wydajności i usługi funkcjonalności strony, aby poprawić doświadczenie użytkownika i wydajność platformy.";

$aml_meta_title = "Polityka AML | Standardy przeciwdziałania praniu pieniędzy $site_name";
$aml_meta_description = "Zapoznaj się z Polityką AML $site_name, obejmującą odpowiedzialne korzystanie z aktywów cyfrowych, świadomość przeciwdziałania praniu pieniędzy, zabronione działania, zasady monitorowania i oczekiwania dotyczące zgodności.";

$risk_meta_title = "Ujawnienie ryzyka | Oświadczenie o ryzyku tradingu kryptowalut $site_name";
$risk_meta_description = "Zapoznaj się z Ujawnieniem ryzyka $site_name, aby zrozumieć zmienność kryptowalut, niepewność tradingu, ograniczenia sygnałów AI, ryzyko rynkowe, ryzyko płynności i odpowiedzialność użytkownika.";

$exchanges_meta_title = "Obsługiwane giełdy | Zasięg analizy rynku $site_name";
$exchanges_meta_description = "Poznaj rodzaje giełd kryptowalut, miejsc płynności i rynków aktywów cyfrowych monitorowanych przez infrastrukturę analizy rynku AI $site_name.";


$about_breadcrumb_name = "O $site_name";
$contact_breadcrumb_name = "Kontakt $site_name";
$terms_breadcrumb_name = "Regulamin";
$privacy_breadcrumb_name = "Polityka prywatności";
$cookies_breadcrumb_name = "Polityka cookies";
$aml_breadcrumb_name = "Polityka AML";
$risk_breadcrumb_name = "Ujawnienie ryzyka";
$exchanges_breadcrumb_name = "Obsługiwane giełdy";

$hero_text = "Poznaj nową erę tradingu z naszą zaawansowaną platformą kryptowalutową. Dzięki technologii AI $site_name możesz zoptymalizować swoje zyski i podejmować świadome decyzje inwestycyjne.";


// HEADER / NAV / FOOTER
$logo_subtitle = "Infrastruktura tradingu AI";
$nav_signals = "Sygnały";
$nav_reviews = "Opinie";
$nav_about = "O nas";
$nav_exchanges = "Giełdy";
$nav_exchanges_full = "Obsługiwane giełdy";
$nav_risk = "Ryzyko";
$nav_risk_full = "Ujawnienie ryzyka";
$nav_faq = "FAQ";
$nav_privacy = "Polityka prywatności";
$nav_terms = "Regulamin";
$nav_cookies = "Polityka cookies";
$nav_cookies_short = "Cookies";
$nav_aml = "Polityka AML";
$nav_contact_us = "Skontaktuj się z nami";
$nav_contact = "Kontakt";
$nav_get_started = "Rozpocznij";
$header_ai_status = "Rdzeń AI działa";
$header_menu_aria = "Menu";
$footer_platform = "Platforma";
$footer_resources = "Zasoby";
$footer_contact_title = "Kontakt";
$footer_ai_signals = "Sygnały AI";
$footer_about_link = "O $site_name";
$footer_description = "$site_name to zaawansowana infrastruktura tradingu kryptowalut oparta na AI, skoncentrowana na analityce predykcyjnej, analizie rynku klasy instytucjonalnej, modelowaniu zmienności, systemach wykonawczych neuronowych i automatycznym zarządzaniu ryzykiem.";
$footer_monitoring = "Monitorowanie infrastruktury AI 24/7";
$footer_global_markets = "Globalne rynki aktywów cyfrowych";
$footer_disclaimer_title = "Ujawnienie ryzyka";
$footer_disclaimer_p1 = "Trading kryptowalutami i inwestowanie w aktywa cyfrowe wiążą się ze znacznym ryzykiem finansowym i mogą nie być odpowiednie dla wszystkich inwestorów. Zmienność rynku, zakłócenia płynności, awarie technologiczne, zmiany regulacyjne i warunki makroekonomiczne mogą znacząco wpłynąć na wyniki aktywów.";
$footer_disclaimer_p2 = "$site_name zapewnia infrastrukturę analityczną opartą na AI, predykcyjną analizę rynku i automatyczne technologie tradingowe. Nic zawartego na tej stronie nie stanowi porady finansowej, inwestycyjnej, prawnej ani podatkowej.";
$footer_disclaimer_p3 = "Wyniki osiągnięte w przeszłości nie gwarantują przyszłych rezultatów. Użytkownicy powinni samodzielnie ocenić ryzyko przed zaangażowaniem się w rynki kryptowalut lub automatyczne systemy tradingowe.";
$footer_rights = "Wszelkie prawa zastrzeżone.";
$footer_lang_label = "Język";


// HOME FORM
$home_form_fname = "Imię";
$home_form_lname = "Nazwisko";
$home_form_email = "E-mail";
$home_form_submit_access = "Uzyskaj dostęp";
$home_form_submit_platform = "Poproś o dostęp do platformy";

// CONTACT FORM
$contact_form_fname = "Imię";
$contact_form_lname = "Nazwisko";
$contact_form_email = "E-mail";
$contact_form_submit = "Poproś o dostęp";


// HOME LABELS
$home_label_ai_confidence = "Pewność AI";
$home_label_update_speed = "Szybkość aktualizacji";
$home_label_market_mode = "Tryb rynku";
$home_label_market_condition = "Stan rynku";
$home_label_buyer_activity = "Aktywność kupujących";
$home_label_market_activity = "Aktywność rynku";
$home_label_risk_level = "Poziom ryzyka";
$home_label_updated = "Zaktualizowano";
$home_label_live_analysis = "ANALIZA NA ŻYWO";

// JS
$home_js_sec_ago = "sek. temu";
$js_sec_ago = "sek. temu";
$js_close_notification = "Zamknij powiadomienie";

$js_signal_long_direction = "Rosnące prawdopodobieństwo trendu wzrostowego";
$js_signal_long_market = "Kontrolowana ekspansja";
$js_signal_long_pressure_label = "Presja płynności";
$js_signal_long_pressure = "Wzrostowa";

$js_signal_short_direction = "Rosnąca presja spadkowa";
$js_signal_short_market = "Wysoka niestabilność";
$js_signal_short_pressure_label = "Presja ryzyka";
$js_signal_short_pressure = "Spadkowa";

$js_signal_watch_direction = "Wykryto strefę konsolidacji";
$js_signal_watch_market = "Neutralna konsolidacja";
$js_signal_watch_pressure_label = "Przepływ instytucjonalny";
$js_signal_watch_pressure = "Stabilna";

$js_hero_long_pair = "Ekspansja momentum BTC/USD";
$js_hero_long_regime = "Wzrostowy";
$js_hero_long_feed_1 = "Wykryto ekspansję płynności BTC";
$js_hero_long_feed_2 = "Presja przepływu zleceń staje się pozytywna";
$js_hero_long_feed_3 = "Model AI potwierdza kontynuację trendu wzrostowego";

$js_hero_watch_pair = "Kompresja zmienności ETH/USD";
$js_hero_watch_regime = "Neutralny";
$js_hero_watch_feed_1 = "Wykryto strefę kompresji ETH";
$js_hero_watch_feed_2 = "AI czeka na silniejsze potwierdzenie";
$js_hero_watch_feed_3 = "Płynność pozostaje stabilna";

$js_hero_short_pair = "Ekspansja ryzyka SOL/USD";
$js_hero_short_regime = "Unikanie ryzyka";
$js_hero_short_feed_1 = "Wykryto presję spadkową SOL";
$js_hero_short_feed_2 = "Model ryzyka sygnalizuje ekspansję zmienności";
$js_hero_short_feed_3 = "AI zmniejsza ekspozycję wzrostową";

// JS — live user popup actions
$js_live_action_1 = "dołączył(a) do $site_name z";
$js_live_action_2 = "poprosił(a) o dostęp do platformy z";
$js_live_action_3 = "rozpoczął(ęła) monitorowanie sygnałów AI z";
$js_live_action_4 = "aktywował(a) analizę rynku z";
$js_live_action_5 = "otworzył(a) panel instytucjonalny z";
$js_live_action_6 = "połączył(a) się z $site_name z";


// HOME PAGE
$home_hero_label = "Platforma AI dla każdego poziomu doświadczenia";
$home_hero_title = "Platforma $site_name";
$home_hero_desc = "$site_name pomaga początkującym i doświadczonym traderom odkrywać rynki kryptowalut dzięki analizom opartym na AI, monitorowaniu rynku w czasie rzeczywistym, narzędziom świadomości ryzyka i wsparciu platformy.";
$home_hero_feat_1 = "Proste analizy rynku AI dla nowych użytkowników";
$home_hero_feat_2 = "Monitorowanie kryptowalut w czasie rzeczywistym i aktualizacje sygnałów";
$home_hero_feat_3 = "Narzędzia świadome ryzyka dla mądrzejszych decyzji";
$home_hero_feat_4 = "Zaawansowana analityka dla doświadczonych traderów";
$home_btn_request_access = "Uzyskaj dostęp do platformy";
$home_btn_view_signals = "Zobacz sygnały AI";
$home_trust_data_label = "Przeanalizowane punkty danych rynkowych";
$home_trust_confidence_label = "Średnia pewność sygnału";
$home_trust_monitoring_label = "Monitorowanie rynku AI";
$home_terminal_title = "Widok rynku AI z przewodnikiem $site_name";
$home_terminal_insight_label = "Bieżąca analiza rynku AI";
$home_terminal_feed_1 = "Aktywność rynkowa BTC wykazuje silniejszy impet";
$home_terminal_feed_2 = "Ruch ETH jest monitorowany pod kątem potwierdzenia";
$home_terminal_feed_3 = "Asystent AI wskazuje możliwą strefę okazji";
$home_trust_strip_1 = "Analizy AI dla początkujących i doświadczonych traderów";
$home_trust_strip_2 = "Monitorowanie rynku kryptowalut 24/7";
$home_trust_strip_3 = "Analiza ryzyka i szans w czasie rzeczywistym";
$home_trust_strip_4 = "Wspomagany dostęp do zaawansowanych narzędzi tradingowych";
$home_signals_eyebrow = "RDZEŃ AI NA ŻYWO $site_name";
$home_signals_title = "Sygnały rynkowe AI w czasie rzeczywistym dla mądrzejszych decyzji kryptowalutowych";
$home_signals_desc = "$site_name nieustannie monitoruje aktywność rynku kryptowalut, zmienność, warunki płynności, trendy nastrojów i dane blockchain, aby generować analizy oparte na AI i sygnały rynkowe w czasie rzeczywistym dla początkujących i doświadczonych traderów.";
$home_signals_terminal_title = "Silnik sygnałów AI $site_name";
$home_signal_btc_sub = "Wykryto pozytywny impet";
$home_signal_btc_dir = "Rosnące prawdopodobieństwo trendu wzrostowego";
$home_signal_btc_market = "Pozytywny impet";
$home_signal_btc_activity = "Silna";
$home_signal_eth_sub = "Oczekiwanie na potwierdzenie rynku";
$home_signal_eth_dir = "Wykryto ruch boczny";
$home_signal_eth_market = "Neutralny trend";
$home_signal_eth_activity = "Stabilna";
$home_signal_sol_sub = "Wykryto zwiększone ryzyko rynkowe";
$home_signal_sol_dir = "Rosnąca presja spadkowa";
$home_signal_sol_market = "Wysoka zmienność";
$home_signal_sol_risk = "Podwyższone";
$home_why_eyebrow = "DLACZEGO $site_name?";
$home_why_title = "Narzędzia kryptowalutowe AI stworzone dla każdego poziomu doświadczenia";
$home_why_desc_1 = "$site_name pomaga użytkownikom lepiej zrozumieć rynki kryptowalut dzięki sztucznej inteligencji, monitorowaniu w czasie rzeczywistym, analizom rynku i narzędziom świadomości ryzyka. Niezależnie od tego, czy dopiero poznajesz kryptowaluty, czy masz już doświadczenie w tradingu, platforma została zaprojektowana, aby analiza rynku była bardziej dostępna i zrozumiała.";
$home_why_desc_2 = "Infrastruktura $site_name nieustannie ocenia aktywność rynku, zmiany cen, warunki płynności, trendy nastrojów i dane blockchain, aby identyfikować nowe okazje i zmieniające się warunki rynkowe. Nowi użytkownicy mogą skorzystać ze wsparcia platformy, a doświadczeni traderzy mogą odkrywać zaawansowane narzędzia analityczne i analizy rynku oparte na AI.";
$home_flow_1 = "Monitorowanie rynku";
$home_flow_2 = "Analiza AI";
$home_flow_3 = "Wykrywanie okazji";
$home_flow_4 = "Ocena ryzyka";
$home_flow_5 = "Praktyczne wnioski";
$home_reviews_eyebrow = "SPOŁECZNOŚĆ $site_name";
$home_reviews_title = "Co użytkownicy mówią o $site_name";
$home_reviews_desc = "Od nowych użytkowników kryptowalut po doświadczonych traderów — ludzie korzystają z $site_name, aby lepiej zrozumieć warunki rynkowe, odkrywać analizy oparte na AI i podejmować decyzje dotyczące kryptowalut z większą jasnością.";
$home_review_1_text = "Zanim odkryłem $site_name, byłem przytłoczony ilością informacji w świecie kryptowalut. Każda platforma wydawała się skomplikowana i ciągle martwiłem się popełnieniem błędu. Najbardziej doceniam w $site_name to, jak przystępne wydaje się wszystko. Analizy AI pomogły mi zrozumieć warunki rynkowe bez uczucia zagubienia, a platforma dała mi pewność siebie, by uczyć się we własnym tempie. Jestem naprawdę wdzięczny, że doświadczenie okazało się o wiele łatwiejsze, niż się spodziewałem.";
$home_review_1_tag = "Bezpieczny i łatwy start";
$home_review_badge = "ZWERYFIKOWANY UŻYTKOWNIK";
$home_review_2_text = "Spędziłem miesiące, przeglądając platformy kryptowalutowe, nigdy nie czując się na tyle komfortowo, by zrobić pierwszy krok. $site_name całkowicie zmieniło to doświadczenie. Platforma sprawiła, że informacje rynkowe stały się łatwiejsze do zrozumienia, i nigdy nie czułem, że potrzebuję lat doświadczenia w tradingu, by korzystać z narzędzi. Najbardziej zaimponowała mi równowaga między prostotą a potężną analizą AI. To jak posiadanie wsparcia zawsze wtedy, gdy go potrzebujesz. Jestem wdzięczny, że znalazłem platformę, która pomogła mi się uczyć bez poczucia onieśmielenia.";
$home_review_2_tag = "Łatwiejsze doświadczenie nauki";
$home_review_3_text = "Testowałem wiele platform analizy rynku i $site_name wyróżnia się, ponieważ łączy dostępność z poważną głębią analityczną. Nowi użytkownicy szybko rozumieją platformę, a doświadczeni traderzy nadal otrzymują przydatne sygnały rynkowe napędzane przez AI, monitorowanie ryzyka i analizy kryptowalutowe w czasie rzeczywistym. Taką równowagę trudno znaleźć. Platforma dostarcza znaczący kontekst rynkowy bez przytłaczania użytkowników, co udaje się osiągnąć bardzo nielicznym narzędziom kryptowalutowym.";
$home_review_3_tag = "Zaawansowane narzędzia z prostą obsługą";
$home_review_span_1 = "Nowy użytkownik kryptowalut";
$home_review_span_2 = "Pierwszy raz na platformie";
$home_review_span_3 = "Profesjonalny trader kryptowalut";
$home_review_1_avatar_alt = "Jan Kowalski, użytkownik $site_name";
$home_review_2_avatar_alt = "Piotr Nowak, użytkownik $site_name";
$home_review_3_avatar_alt = "Michał Wiśniewski, użytkownik $site_name";
$home_hero_visual_alt = "Panel analityki rynkowej AI na $site_name";
$home_signal_visual_alt = "Sygnał tradingowy w czasie rzeczywistym generowany przez AI $site_name";
$home_device_visual_alt = "Analizy kryptowalutowe wyświetlane na podłączonym urządzeniu przez $site_name";
$home_security_visual_alt = "Tarcza bezpieczeństwa reprezentująca ochronę konta $site_name";
$home_contact_eyebrow = "ROZPOCZNIJ Z $site_name";
$home_contact_title = "Poznaj platformę z pewnością siebie";
$home_contact_section_title = "Poznaj platformę z pewnością siebie";
$home_contact_desc_1 = "Niezależnie od tego, czy jesteś zupełnie nowy w świecie kryptowalut, czy masz już doświadczenie w tradingu, $site_name zapewnia dostęp do analiz rynkowych opartych na AI, narzędzi monitorowania w czasie rzeczywistym i inteligentnej analityki zaprojektowanej, aby pomóc użytkownikom lepiej zrozumieć możliwości aktywów cyfrowych.";
$home_contact_desc_2 = "Prześlij swoje dane, aby dowiedzieć się więcej o platformie, odkryć dostępne funkcje i przekonać się, jak $site_name może pomóc Ci poruszać się po rynkach kryptowalut dzięki zaawansowanej technologii i wsparciu platformy.";
$home_seo_toggle = "Dowiedz się więcej o platformie AI $site_name";
$home_seo_h2 = "Platforma AI $site_name dla mądrzejszych decyzji na rynku kryptowalut";
$home_seo_p1 = "$site_name to platforma kryptowalutowa oparta na AI, zaprojektowana zarówno dla początkujących, jak i doświadczonych traderów. Platforma łączy sztuczną inteligencję, monitorowanie rynku w czasie rzeczywistym i zaawansowane narzędzia analityczne, aby pomóc użytkownikom lepiej zrozumieć rynki aktywów cyfrowych i zidentyfikować potencjalne okazje.";
$home_seo_p2 = "W przeciwieństwie do wielu tradycyjnych platform tradingowych wymagających rozległej wiedzy rynkowej, $site_name zostało zbudowane tak, aby złożone informacje rynkowe były łatwiejsze do zrozumienia. Platforma nieustannie analizuje aktywność kryptowalut, zmiany cen, trendy nastrojów, warunki płynności i dane blockchain, przekształcając duże ilości informacji w praktyczne wnioski.";
$home_seo_p3 = "Niezależnie od tego, czy dopiero odkrywasz rynki kryptowalut, czy masz już doświadczenie w handlu aktywami cyfrowymi, $site_name zapewnia inteligentne narzędzia zaprojektowane, aby wspierać bardziej świadome podejmowanie decyzji, dostosowując się jednocześnie do zmieniających się warunków rynkowych w czasie rzeczywistym.";
$home_seo_h3_1 = "Analiza rynku AI stała się dostępna";
$home_seo_h3_1_p1 = "$site_name wykorzystuje sztuczną inteligencję do oceny szerokiego zakresu wskaźników rynkowych, w tym aktywności tradingowej, wzorców zmienności, warunków płynności, wydarzeń blockchain i nastrojów rynkowych. Dzięki ciągłemu przetwarzaniu informacji platforma pomaga użytkownikom uzyskać jaśniejsze zrozumienie bieżącego zachowania rynku.";
$home_seo_h3_1_p2 = "Modele AI są zaprojektowane, aby dostosowywać się do zmieniających się warunków, a nie polegać na statycznych założeniach. Pozwala to platformie dynamicznie reagować na zmieniające się trendy kryptowalutowe i pojawiające się okazje rynkowe.";
$home_seo_h3_1_p3 = "Chociaż wystarczająco zaawansowana dla doświadczonych traderów, platforma jest również skonstruowana tak, aby pozostać przystępna dla nowych użytkowników, którzy chcą uzyskać dostęp do analiz rynkowych opartych na AI bez konieczności posiadania dogłębnej wiedzy technicznej.";
$home_seo_h3_2 = "Sygnały rynkowe AI w czasie rzeczywistym";
$home_seo_h3_2_p1 = "$site_name nieustannie monitoruje rynki kryptowalut i generuje analizy oparte na AI na podstawie zmieniającej się aktywności rynkowej. Platforma ocenia impet, zmienność, warunki płynności i szersze zachowanie rynku, aby dostarczać sygnały analityczne w czasie rzeczywistym.";
$home_seo_h3_2_p2 = "Bitcoin, Ethereum, Solana, XRP, Avalanche i inne główne aktywa cyfrowe są monitorowane za pomocą adaptacyjnych modeli analitycznych, które automatycznie dostosowują się do zmieniających się warunków rynkowych.";
$home_seo_h3_2_p3 = "Zamiast polegać na pojedynczym wskaźniku lub izolowanej metryce, $site_name łączy wiele źródeł informacji w szerszą strukturę analityczną, zaprojektowaną, aby zapewnić pełniejszy obraz warunków rynkowych.";
$home_seo_h3_3 = "Inteligentne narzędzia świadomości ryzyka";
$home_seo_h3_3_p1 = "Rynki kryptowalut mogą zmieniać się szybko. $site_name zawiera systemy monitorowania oparte na AI, zaprojektowane do identyfikowania nietypowej zmienności, zmieniających się warunków płynności i pojawiających się zagrożeń rynkowych.";
$home_seo_h3_3_p2 = "Platforma nieustannie ocenia zachowanie rynku i potencjalne czynniki ryzyka, pomagając użytkownikom lepiej zrozumieć zmieniające się warunki i podejmować bardziej świadome decyzje.";
$home_seo_h3_3_p3 = "Łącząc wiele warstw analizy, $site_name dąży do poprawy świadomości rynkowej i pomaga użytkownikom poruszać się w okresach zwiększonej niepewności z większą pewnością siebie.";
$home_seo_h3_4 = "Zaprojektowane dla nowoczesnych rynków kryptowalut";
$home_seo_h3_4_p1 = "$site_name łączy sztuczną inteligencję, technologie monitorowania w czasie rzeczywistym i zaawansowane narzędzia analityczne w jednej platformie zaprojektowanej dla nowoczesnych rynków aktywów cyfrowych.";
$home_seo_h3_4_p2 = "Infrastruktura nieustannie ocenia aktywność rynkową, rozwój blockchain, zmiany nastrojów i trendy płynności, aby zapewnić kompleksowy obraz zachowania rynku kryptowalut.";
$home_seo_h3_4_p3 = "W miarę jak rynki aktywów cyfrowych stale ewoluują, narzędzia oparte na AI mogą pomóc użytkownikom skuteczniej przetwarzać informacje i lepiej rozumieć coraz bardziej złożone środowiska rynkowe. $site_name jest zaprojektowane, aby udostępnić te możliwości szerszemu gronu uczestników rynku.";
$home_seo_side_1_label = "Analizy AI";
$home_seo_side_1_title = "Łatwa do zrozumienia analiza rynku";
$home_seo_side_1_desc = "Analizy oparte na AI zaprojektowane zarówno dla nowych, jak i doświadczonych użytkowników kryptowalut.";
$home_seo_side_2_label = "Monitorowanie rynku";
$home_seo_side_2_title = "Śledzenie kryptowalut w czasie rzeczywistym";
$home_seo_side_2_desc = "Ciągłe monitorowanie głównych rynków kryptowalut i zmieniających się warunków rynkowych.";
$home_seo_side_3_label = "Świadomość ryzyka";
$home_seo_side_3_title = "Inteligentne wykrywanie ryzyka";
$home_seo_side_3_desc = "Zaawansowane narzędzia monitorowania zaprojektowane, aby uwydatniać zmieniającą się dynamikę rynku i zmienność.";
$home_seo_side_4_label = "Technologia AI";
$home_seo_side_4_title = "Adaptacyjne modele analityczne";
$home_seo_side_4_desc = "Systemy uczenia maszynowego, które nieustannie oceniają dane rynkowe i pojawiające się trendy.";
$home_faq_eyebrow = "BAZA WIEDZY $site_name";
$home_faq_title = "Często zadawane pytania o $site_name";
$home_faq_desc = "Dowiedz się więcej o tym, jak działa platforma, dla kogo jest przeznaczona i jak sztuczna inteligencja pomaga użytkownikom lepiej zrozumieć warunki rynku kryptowalut.";
$home_faq_q1 = "Czy potrzebuję doświadczenia w tradingu, aby korzystać z $site_name?";
$home_faq_a1 = "Nie. $site_name jest przeznaczone dla użytkowników na różnych poziomach doświadczenia, w tym dla osób zupełnie nowych na rynku kryptowalut. Platforma wykorzystuje analizy oparte na AI i narzędzia monitorowania rynku, aby uprościć złożone informacje.";
$home_faq_q2 = "Co dokładnie robi $site_name?";
$home_faq_a2 = "$site_name nieustannie analizuje rynki kryptowalut przy użyciu sztucznej inteligencji. Platforma ocenia aktywność rynkową, zmienność, trendy nastrojów, warunki płynności i dane blockchain, aby generować analizy i sygnały analityczne w czasie rzeczywistym.";
$home_faq_q3 = "Czy doświadczeni traderzy mogą korzystać z $site_name?";
$home_faq_a3 = "Tak. Chociaż platforma jest przyjazna dla początkujących, oferuje również zaawansowane narzędzia analityczne, analizy rynku napędzane przez AI i funkcje monitorowania w czasie rzeczywistym, które mogą być cenne dla doświadczonych uczestników rynku.";
$home_faq_q4 = "Jakie kryptowaluty monitoruje $site_name?";
$home_faq_a4 = "Platforma może analizować główne aktywa cyfrowe, takie jak Bitcoin, Ethereum, Solana, XRP, Avalanche i inne szeroko handlowane kryptowaluty, w zależności od warunków rynkowych i dostępnych źródeł danych.";
$home_faq_q5 = "Jak generowane są sygnały AI?";
$home_faq_a5 = "$site_name ocenia jednocześnie wiele czynników rynkowych, w tym zmienność, aktywność tradingową, warunki płynności, trendy nastrojów i historyczne zachowanie rynku. Modele AI łączą te dane, aby identyfikować zmieniające się warunki rynkowe i potencjalne okazje.";
$home_faq_q6 = "Czy $site_name zapewnia wsparcie edukacyjne?";
$home_faq_a6 = "Platforma została zaprojektowana, aby pomóc użytkownikom lepiej zrozumieć warunki rynkowe dzięki analizom opartym na AI, uproszczonym wnioskom i wspomaganemu dostępowi do funkcji platformy. Nowi użytkownicy mogą odkrywać rynki kryptowalut bez zaawansowanej wiedzy technicznej.";
$home_cta_label = "Platforma AI gotowa";
$home_cta_title = "Zacznij odkrywać $site_name już dziś";
$home_cta_desc = "Odkryj analizy rynku oparte na AI, monitorowanie kryptowalut w czasie rzeczywistym, inteligentne narzędzia świadomości ryzyka i zaawansowaną analitykę zaprojektowaną zarówno dla początkujących, jak i doświadczonych traderów.";
$home_ticker_text = "Monitorowanie rynku AI aktywne • Analiza kryptowalut w czasie rzeczywistym • Wzmacnianie impetu Bitcoina • Wykryto konsolidację Ethereum • Zidentyfikowano nowe okazje rynkowe • Systemy monitorowania ryzyka online • Analizy AI aktualizowane nieustannie • Zaprojektowane dla początkujących i doświadczonych traderów";


// ABOUT PAGE
$about_h1 = "O $site_name";
$about_p1 = "$site_name to infrastruktura sztucznej inteligencji nowej generacji, zaprojektowana, aby pomóc uczestnikom rynku lepiej zrozumieć szybko rozwijający się ekosystem kryptowalut. Łącząc technologie uczenia maszynowego, analitykę predykcyjną, systemy analizy rynku i przetwarzanie danych w czasie rzeczywistym, $site_name zapewnia kompleksowe środowisko do monitorowania aktywności aktywów cyfrowych i identyfikowania znaczących wydarzeń rynkowych.";
$about_p2 = "Rynek kryptowalut działa nieustannie na wielu giełdach, w różnych jurysdykcjach i u różnych dostawców płynności. Każdej sekundy tysiące zmiennych wpływają na wycenę, zmienność, warunki płynności i nastroje inwestorów. $site_name zostało opracowane z myślą o przetwarzaniu tych złożonych strumieni danych w sposób uporządkowany i skalowalny.";
$about_h2_vision = "Wizja stojąca za $site_name";
$about_p_vision_1 = "Rynki finansowe stają się coraz bardziej oparte na danych. Tradycyjne metody analizy często mają trudności z nadążaniem za ilością informacji generowanych w nowoczesnych ekosystemach aktywów cyfrowych. $site_name dąży do wypełnienia tej luki poprzez zastosowanie zaawansowanej inteligencji obliczeniowej, zautomatyzowanych systemów monitorowania i adaptacyjnych modeli analitycznych.";
$about_p_vision_2 = "Długoterminową wizją $site_name jest dostarczanie przejrzystych narzędzi analizy rynku, zdolnych pomóc użytkownikom lepiej zrozumieć strukturę rynku kryptowalut, warunki ryzyka i pojawiające się trendy.";
$about_h2_ai = "Infrastruktura sztucznej inteligencji";
$about_p_ai_1 = "U podstaw $site_name leży wielowarstwowy system sztucznej inteligencji, zaprojektowany do jednoczesnego przetwarzania informacji z wielu źródeł rynkowych.";
$about_p_ai_2 = "Źródła te mogą obejmować:";
$about_li_1 = "Kanały cenowe kryptowalut";
$about_li_2 = "Aktywność księgi zleceń";
$about_li_3 = "Dane o ruchu płynności";
$about_li_4 = "Wskaźniki zmienności";
$about_li_5 = "Metryki transakcji blockchain";
$about_li_6 = "Sygnały nastrojów rynkowych";
$about_li_7 = "Wydarzenia makroekonomiczne";
$about_li_8 = "Aktywność rynku instytucjonalnego";
$about_p_ai_3 = "Poprzez ciągłą ocenę zależności między tymi zmiennymi, $site_name stara się identyfikować wzorce, które mogą dostarczyć cennego kontekstu rynkowego.";
$about_h2_risk = "Filozofia świadomości ryzyka";
$about_p_risk_1 = "Odpowiedzialny udział w rynkach kryptowalut wymaga jasnego zrozumienia ryzyka. $site_name podkreśla świadomość ryzyka jako podstawowy element analizy aktywów cyfrowych.";
$about_p_risk_2 = "Zmienność rynku, wahania płynności, wydarzenia specyficzne dla giełd, zmiany regulacyjne i szersze warunki makroekonomiczne mogą wpływać na wyniki rynkowe. W związku z tym użytkownicy nigdy nie powinni polegać wyłącznie na jednym źródle informacji przy podejmowaniu decyzji.";
$about_h2_global = "Globalne rynki aktywów cyfrowych";
$about_p_global_1 = "Rynki kryptowalut działają na skalę globalną i obejmują uczestników z różnych regionów, branż i środowisk gospodarczych. Infrastruktura $site_name jest zaprojektowana do jednoczesnego monitorowania wielu segmentów rynku, umożliwiając użytkownikom obserwowanie wydarzeń zachodzących w różnych częściach ekosystemu aktywów cyfrowych.";
$about_p_global_2 = "Ta szersza perspektywa może pomóc w poprawie świadomości zmieniających się warunków rynkowych i pojawiających się trendów.";
$about_h2_why = "Dlaczego użytkownicy wybierają $site_name";
$about_why_li_1 = "Zaawansowana analiza rynku oparta na AI";
$about_why_li_2 = "Monitorowanie kryptowalut w czasie rzeczywistym";
$about_why_li_3 = "Infrastruktura analityczna w stylu instytucjonalnym";
$about_why_li_4 = "Wieloczynnikowa ocena rynku";
$about_why_li_5 = "Monitorowanie zmienności i płynności";
$about_why_li_6 = "Skalowalne narzędzia badawcze aktywów cyfrowych";
$about_why_li_7 = "Metodologia analityczna świadoma ryzyka";
$about_h2_forward = "Patrząc w przyszłość";
$about_p_forward_1 = "W miarę dojrzewania rynków aktywów cyfrowych oczekuje się wzrostu znaczenia zaawansowanej infrastruktury analitycznej. $site_name pozostaje skoncentrowane na rozwijaniu technologii, które wspierają głębsze zrozumienie rynku, większą przejrzystość i bardziej świadomy udział w ekosystemie kryptowalut.";
$about_p_forward_2 = "Poprzez ciągłe innowacje i trwające badania, $site_name dąży do przyczyniania się do bardziej inteligentnej i opartej na danych przyszłości analizy aktywów cyfrowych.";


// CONTACT PAGE
$contact_h1 = "Skontaktuj się z $site_name";
$contact_intro_1 = "Skontaktuj się z zespołem $site_name, aby poprosić o dostęp do platformy, zapytać o infrastrukturę tradingu kryptowalut opartą na AI lub dowiedzieć się więcej o naszym środowisku analizy rynku aktywów cyfrowych.";
$contact_intro_2 = "Niezależnie od tego, czy interesuje Cię automatyczna analityka kryptowalut, infrastruktura sygnałów w stylu instytucjonalnym, monitorowanie zmienności czy analiza rynku obejmująca wiele giełd, nasz zespół może pomóc skierować Twoje zapytanie do odpowiedniego działu.";
$contact_h2_help = "Jak możemy pomóc";
$contact_li_1 = "Prośby o dostęp do platformy";
$contact_li_2 = "Ogólne pytania dotyczące produktu";
$contact_li_3 = "Informacje o infrastrukturze tradingu AI";
$contact_li_4 = "Zapytania dotyczące analizy rynku aktywów cyfrowych";
$contact_li_5 = "Pytania dotyczące ujawnienia ryzyka i zgodności";
$contact_li_6 = "Pomoc techniczna lub wdrożeniowa";
$contact_h2_send = "Wyślij zapytanie";
$contact_p_send = "Wypełnij poniższy formularz, a przedstawiciel $site_name może skontaktować się z Tobą z dodatkowymi informacjami.";
$contact_h2_info = "Informacje kontaktowe";
$contact_support_label = "Ogólne wsparcie:";
$contact_institutional_label = "Zapytania instytucjonalne:";
$contact_disclaimer = "Zwróć uwagę, że $site_name nie udziela zindywidualizowanych porad finansowych, inwestycyjnych, podatkowych ani prawnych. Wszystkie informacje są podane wyłącznie w celach technologicznych i informacyjnych.";

// TERMS PAGE
$terms_h1 = "Regulamin";
$terms_intro_1 = "Niniejszy Regulamin reguluje dostęp do strony $site_name, treści, opisów platformy, formularzy, komunikacji i powiązanych materiałów informacyjnych oraz korzystanie z nich.";
$terms_intro_2 = "Uzyskując dostęp do tej strony, użytkownicy potwierdzają, że przeczytali, zrozumieli i akceptują niniejszy Regulamin. Jeśli użytkownik nie zgadza się z tymi warunkami, powinien zaprzestać korzystania ze strony.";
$terms_h2_informational = "Cel informacyjny";
$terms_p_info_1 = "$site_name dostarcza informacji o infrastrukturze tradingu kryptowalut opartej na AI, analizie rynku aktywów cyfrowych, monitorowaniu zmienności, analizie płynności i powiązanych technologiach.";
$terms_p_info_2 = "Treści strony są udostępniane wyłącznie w ogólnych celach informacyjnych i prezentacji technologicznej. Nic na tej stronie nie powinno być interpretowane jako porada finansowa, inwestycyjna, prawna, podatkowa ani gwarancja wyników tradingu.";
$terms_h2_no_advice = "Brak porady finansowej";
$terms_p_no_advice_1 = "$site_name nie udziela zindywidualizowanych rekomendacji dotyczących tego, czy użytkownicy powinni kupować, sprzedawać, przechowywać, handlować, stakować, przenosić lub w inny sposób korzystać z jakiejkolwiek kryptowaluty, tokena, produktu finansowego lub aktywa cyfrowego.";
$terms_p_no_advice_2 = "Użytkownicy powinni samodzielnie ocenić wszystkie informacje i zasięgnąć porady wykwalifikowanych specjalistów przed podjęciem decyzji finansowych.";
$terms_h2_user_responsibility = "Odpowiedzialność użytkownika";
$terms_p_user_1 = "Użytkownicy są odpowiedzialni za własne decyzje, oceny ryzyka, aktywność konta, działania tradingowe, zgodność z prawem oraz korzystanie z jakichkolwiek usług osób trzecich.";
$terms_p_user_2 = "Użytkownicy powinni upewnić się, że aktywność związana z aktywami cyfrowymi jest dozwolona w ich jurysdykcji i że rozumieją wszystkie mające zastosowanie ryzyka przed rozpoczęciem interakcji z rynkami kryptowalut.";
$terms_h2_ai = "AI i systemy analityczne";
$terms_p_ai_1 = "$site_name może opisywać systemy sztucznej inteligencji, modele predykcyjne, sygnały rynkowe, automatyczną analitykę lub technologie związane z wykonywaniem transakcji.";
$terms_p_ai_2 = "Systemy te mogą polegać na danych rynkowych, modelach statystycznych, procesach uczenia maszynowego i źródłach informacji osób trzecich. Takie systemy mogą być niedokładne, opóźnione, niekompletne, niedostępne lub nieodpowiednie dla konkretnych celów użytkownika.";
$terms_h2_availability = "Brak gwarancji dostępności";
$terms_p_avail_1 = "$site_name nie gwarantuje nieprzerwanego dostępu do strony, ciągłej dostępności platformy, bezbłędnego działania, dokładnych informacji rynkowych ani dostępności żadnej konkretnej funkcji.";
$terms_p_avail_2 = "Usługi, treści, strony, formularze, integracje lub opisy platformy mogą być modyfikowane, zawieszane lub wycofywane w dowolnym momencie.";
$terms_h2_third_party = "Usługi osób trzecich";
$terms_p_tp_1 = "Strona może odnosić się do giełd osób trzecich, miejsc płynności, dostawców analiz, narzędzi komunikacyjnych, usług hostingowych lub dostawców infrastruktury technicznej.";
$terms_p_tp_2 = "$site_name nie kontroluje platform osób trzecich i nie ponosi odpowiedzialności za ich dostępność, opłaty, zasady, ograniczenia kont, procedury zgodności, awarie techniczne lub straty użytkowników.";
$terms_h2_prohibited = "Zabronione użycie";
$terms_p_prohibited = "Użytkownicy nie mogą korzystać z tej strony ani żadnej powiązanej technologii w celach niezgodnych z prawem, nadużywających, oszukańczych, manipulacyjnych lub szkodliwych.";
$terms_li_1 = "Próby nieautoryzowanego dostępu";
$terms_li_2 = "Podawanie fałszywych lub wprowadzających w błąd informacji";
$terms_li_3 = "Wykorzystywanie strony do nielegalnej działalności finansowej";
$terms_li_4 = "Ingerowanie w bezpieczeństwo lub funkcjonalność strony";
$terms_li_5 = "Kopiowanie lub niewłaściwe wykorzystywanie treści strony bez zezwolenia";
$terms_li_6 = "Próby obejścia kontroli zgodności lub technicznych";
$terms_h2_ip = "Własność intelektualna";
$terms_p_ip_1 = "Projekt strony, tekst, branding, elementy interfejsu, grafika, struktura i powiązane materiały należą do $site_name lub są licencjonowane na jego rzecz, chyba że zaznaczono inaczej.";
$terms_p_ip_2 = "Użytkownicy nie mogą powielać, rozpowszechniać, modyfikować ani komercyjnie wykorzystywać materiałów strony bez odpowiedniej autoryzacji.";
$terms_h2_liability = "Ograniczenie odpowiedzialności";
$terms_p_liab_1 = "W maksymalnym zakresie dozwolonym przez obowiązujące prawo, $site_name nie ponosi odpowiedzialności za straty wynikające z handlu aktywami cyfrowymi, zmienności rynku, problemów technicznych, awarii platform osób trzecich, niedokładnych danych, decyzji użytkowników lub polegania na treści strony.";
$terms_p_liab_2 = "Użytkownicy korzystają z tej strony na własne ryzyko.";
$terms_h2_changes = "Zmiany w niniejszym Regulaminie";
$terms_p_changes_1 = "$site_name może aktualizować niniejszy Regulamin w dowolnym momencie. Zaktualizowane warunki mogą zostać opublikowane na tej stronie.";
$terms_p_changes_2 = "Dalsze korzystanie ze strony po wprowadzeniu zmian oznacza, że użytkownicy potwierdzają i akceptują zaktualizowane warunki.";

// PRIVACY PAGE
$privacy_h1 = "Polityka prywatności";
$privacy_intro_1 = "$site_name szanuje prywatność użytkowników i zobowiązuje się do odpowiedzialnego, przejrzystego i bezpiecznego przetwarzania danych osobowych.";
$privacy_intro_2 = "Niniejsza Polityka prywatności wyjaśnia, jakie informacje mogą być zbierane, gdy użytkownicy odwiedzają tę stronę, przesyłają formularze kontaktowe, proszą o dostęp lub wchodzą w interakcję z treścią $site_name i komunikacją związaną z platformą.";
$privacy_h2_collect = "Informacje, które możemy zbierać";
$privacy_p_collect_1 = "$site_name może zbierać informacje dobrowolnie przesłane przez użytkowników za pośrednictwem formularzy strony lub kanałów komunikacji.";
$privacy_li_fname = "Imię";
$privacy_li_lname = "Nazwisko";
$privacy_li_email = "Adres e-mail";
$privacy_li_phone = "Numer telefonu";
$privacy_li_inquiry = "Szczegóły przesłanego zapytania";
$privacy_li_technical = "Podstawowe dane techniczne dotyczące korzystania ze strony";
$privacy_h2_use = "Jak wykorzystujemy informacje";
$privacy_p_use_1 = "Informacje mogą być wykorzystywane do odpowiadania na żądania użytkowników, dostarczania informacji o dostępie do platformy, poprawy funkcjonalności strony, utrzymania bezpieczeństwa i przekazywania odpowiednich aktualizacji dotyczących $site_name.";
$privacy_p_use_2 = "Możemy również wykorzystywać zagregowane lub niezidentyfikowane dane do analizy wydajności strony, poprawy struktury treści i lepszego zrozumienia sposobu interakcji odwiedzających z naszymi stronami.";
$privacy_h2_comm = "Cele komunikacyjne";
$privacy_p_comm_1 = "Jeśli użytkownik przesyła dane kontaktowe, $site_name może wykorzystać te informacje do odpowiedzi na zapytanie, dostarczenia szczegółów wdrożenia, wyjaśnienia próśb o dostęp do platformy lub udostępnienia istotnych informacji o usługach.";
$privacy_p_comm_2 = "Użytkownicy mogą zażądać zaprzestania komunikacji, w stosownych przypadkach.";
$privacy_h2_cookies = "Pliki cookie i dane techniczne";
$privacy_p_cookies_1 = "Ta strona może wykorzystywać pliki cookie, narzędzia analityczne i podobne technologie, aby poprawić doświadczenie przeglądania, monitorować wydajność i wspierać bezpieczeństwo strony.";
$privacy_p_cookies_2 = "Dane techniczne mogą obejmować typ urządzenia, typ przeglądarki, system operacyjny, interakcje ze stroną, informacje o źródle odesłania i ogólne statystyki użytkowania.";
$privacy_h2_protection = "Środki ochrony danych";
$privacy_p_prot_1 = "$site_name stosuje rozsądne zabezpieczenia administracyjne, techniczne i organizacyjne w celu ochrony przesłanych informacji przed nieautoryzowanym dostępem, niewłaściwym wykorzystaniem, utratą lub ujawnieniem.";
$privacy_p_prot_2 = "Jednak żaden system internetowy nie może zagwarantować całkowitego bezpieczeństwa. Użytkownicy powinni unikać przesyłania poufnych informacji finansowych, prywatnych kluczy portfela, haseł, danych logowania do giełd lub poufnych danych dostępu do konta za pośrednictwem publicznych formularzy strony.";
$privacy_h2_third = "Dostawcy usług będący osobami trzecimi";
$privacy_p_third_1 = "$site_name może korzystać z dostawców zewnętrznych do hostingu, analityki, komunikacji, bezpieczeństwa, dostarczania e-maili, przetwarzania CRM lub infrastruktury technicznej.";
$privacy_p_third_2 = "Dostawcy ci mogą przetwarzać ograniczone informacje wyłącznie w zakresie niezbędnym do wspierania funkcjonalności strony i powiązanych usług.";
$privacy_google_choices = 'Możesz zarządzać sposobem wykorzystywania przez Google informacji z Twoich wizyt poprzez <a href="http://www.google.com/settings/ads" target="_blank" rel="noopener">Ustawienia reklam Google</a>, zrezygnować z reklam opartych na zainteresowaniach za pomocą <a href="https://tools.google.com/dlpage/gaoptout" target="_blank" rel="noopener">dodatku Google Analytics do przeglądarki umożliwiającego rezygnację</a>, lub zapoznać się z <a href="https://www.google.com/intl/en/policies/privacy/" target="_blank" rel="noopener">Polityką prywatności Google</a>, aby uzyskać więcej informacji.';
$privacy_h2_sale = "Brak sprzedaży danych osobowych";
$privacy_p_sale_1 = "$site_name nie zamierza sprzedawać danych osobowych przesłanych za pośrednictwem tej strony.";
$privacy_p_sale_2 = "Informacje mogą być udostępniane wyłącznie w razie potrzeby w celach operacyjnych, zgodności z prawem, komunikacji z użytkownikami, zapobiegania oszustwom lub przetwarzania związanego z usługami.";
$privacy_h2_retention = "Przechowywanie danych";
$privacy_p_retention = "Dane osobowe mogą być przechowywane tak długo, jak jest to konieczne do odpowiadania na zapytania, prowadzenia dokumentacji biznesowej, przestrzegania zobowiązań prawnych, poprawy komunikacji na platformie lub wspierania bezpieczeństwa i zapobiegania oszustwom.";
$privacy_h2_rights = "Prawa użytkownika";
$privacy_p_rights = "W zależności od obowiązującego prawa, użytkownicy mogą posiadać prawa związane z dostępem, sprostowaniem, usunięciem, sprzeciwem, ograniczeniem lub przenoszalnością danych osobowych.";
$privacy_h2_intl = "Użytkowanie międzynarodowe";
$privacy_p_intl_1 = "$site_name może być dostępne dla użytkowników z różnych jurysdykcji. Zasady prywatności mogą się różnić w zależności od lokalizacji.";
$privacy_p_intl_2 = "Korzystając z tej strony, użytkownicy potwierdzają, że informacje mogą być przetwarzane zgodnie z niniejszą Polityką prywatności i obowiązującymi wymogami operacyjnymi.";
$privacy_h2_policy_updates = "Aktualizacje polityki";
$privacy_p_updates_1 = "$site_name może okresowo aktualizować niniejszą Politykę prywatności, aby odzwierciedlić zmiany w prawie, technologii, procedurach wewnętrznych lub funkcjonalności strony.";
$privacy_p_updates_2 = "Dalsze korzystanie ze strony po aktualizacjach oznacza, że użytkownicy potwierdzają zaktualizowaną Politykę prywatności.";
// COOKIES PAGE
$cookies_h1 = "Polityka cookies";
$cookies_intro_1 = "Niniejsza Polityka cookies wyjaśnia, w jaki sposób $site_name wykorzystuje pliki cookie, technologie analityczne i podobne narzędzia śledzące, gdy użytkownicy uzyskują dostęp do tej strony lub wchodzą z nią w interakcję.";
$cookies_intro_2 = "Pliki cookie pomagają poprawić funkcjonalność strony, zwiększyć doświadczenie użytkownika, analizować wydajność i wspierać procesy związane z bezpieczeństwem.";
$cookies_intro_3 = "Kontynuując korzystanie z tej strony, użytkownicy potwierdzają, że niektóre pliki cookie i powiązane technologie mogą być wykorzystywane zgodnie z niniejszą polityką.";
$cookies_h2_what = "Czym są pliki cookie?";
$cookies_p_what_1 = "Pliki cookie to małe pliki tekstowe przechowywane na urządzeniu użytkownika podczas odwiedzania strony internetowej.";
$cookies_p_what_2 = "Pliki te mogą zawierać informacje, które pomagają stronom rozpoznawać powracających odwiedzających, zapamiętywać preferencje, poprawiać nawigację i mierzyć wydajność strony.";
$cookies_h2_why = "Dlaczego wykorzystujemy pliki cookie";
$cookies_p_why_1 = "$site_name może wykorzystywać pliki cookie i podobne technologie w kilku celach.";
$cookies_li_1 = "Utrzymanie funkcjonalności strony";
$cookies_li_2 = "Poprawa doświadczenia użytkownika";
$cookies_li_3 = "Zapamiętywanie preferencji użytkownika";
$cookies_li_4 = "Zrozumienie zachowania odwiedzających";
$cookies_li_5 = "Pomiar wydajności strony";
$cookies_li_6 = "Identyfikowanie problemów technicznych";
$cookies_li_7 = "Wspieranie bezpieczeństwa strony";
$cookies_li_8 = "Zapobieganie nadużyciom i niewłaściwemu wykorzystaniu";
$cookies_h2_essential = "Niezbędne pliki cookie";
$cookies_p_ess_1 = "Niektóre pliki cookie są niezbędne do prawidłowego działania strony.";
$cookies_p_ess_2 = "Te pliki cookie pomagają utrzymać bezpieczeństwo, funkcjonalność nawigacji, zarządzanie sesją i inne podstawowe operacje strony.";
$cookies_p_ess_3 = "Bez niezbędnych plików cookie niektóre części strony mogą nie działać prawidłowo.";
$cookies_h2_analytics = "Pliki cookie analityczne";
$cookies_p_an_1 = "Pliki cookie analityczne pomagają nam zrozumieć, w jaki sposób odwiedzający wchodzą w interakcję z treścią strony.";
$cookies_p_an_2 = "Te technologie mogą zbierać informacje dotyczące odwiedzin stron, wzorców nawigacji, typów urządzeń, konfiguracji przeglądarki i ogólnych wskaźników użytkowania strony.";
$cookies_p_an_3 = "Informacje analityczne są zazwyczaj agregowane i wykorzystywane do poprawy wydajności strony i doświadczenia użytkownika.";
$cookies_h2_functional = "Funkcjonalne pliki cookie";
$cookies_p_fun_1 = "Funkcjonalne pliki cookie mogą być wykorzystywane do zapamiętywania ustawień i preferencji wybranych przez użytkowników.";
$cookies_p_fun_2 = "Przykłady mogą obejmować preferencje językowe, ustawienia interfejsu, opcje wyświetlania lub inne funkcje personalizacji.";
$cookies_h2_third = "Technologie osób trzecich";
$cookies_p_third_1 = "$site_name może korzystać z dostawców usług zewnętrznych, platform analitycznych, technologii reklamowych lub narzędzi monitorowania wydajności.";
$cookies_p_third_2 = "Te osoby trzecie mogą umieszczać własne pliki cookie lub technologie śledzące zgodnie z ich indywidualnymi politykami prywatności.";
$cookies_p_third_3 = "$site_name nie kontroluje praktyk dotyczących plików cookie osób trzecich i zaleca zapoznanie się z dokumentacją dotyczącą prywatności dostawców zewnętrznych, w stosownych przypadkach.";
$cookies_h2_manage = "Zarządzanie plikami cookie";
$cookies_p_manage_1 = "Większość nowoczesnych przeglądarek pozwala użytkownikom zarządzać, ograniczać lub usuwać pliki cookie za pomocą ustawień przeglądarki.";
$cookies_p_manage_2 = "Użytkownicy mogą całkowicie wyłączyć pliki cookie, chociaż niektóre funkcje strony mogą wtedy nie działać zgodnie z przeznaczeniem.";
$cookies_p_manage_3 = "Ustawienia przeglądarki zazwyczaj oferują opcje umożliwiające:";
$cookies_li_manage_1 = "Blokowanie wszystkich plików cookie";
$cookies_li_manage_2 = "Usuwanie istniejących plików cookie";
$cookies_li_manage_3 = "Otrzymywanie powiadomień o plikach cookie";
$cookies_li_manage_4 = "Ograniczanie konkretnych kategorii plików cookie";
$cookies_h2_data = "Ochrona danych";
$cookies_p_data = "Informacje związane z plikami cookie mogą być przetwarzane zgodnie z naszą Polityką prywatności i obowiązującymi przepisami o ochronie danych.";
$cookies_h2_policy_updates = "Aktualizacje polityki";
$cookies_p_updates_1 = "$site_name może okresowo aktualizować niniejszą Politykę cookies, aby odzwierciedlić zmiany technologiczne, wymogi prawne lub udoskonalenia operacyjne.";
$cookies_p_updates_2 = "Dalsze korzystanie ze strony po aktualizacjach stanowi potwierdzenie zaktualizowanej polityki.";
// AML PAGE
$aml_h1 = "Polityka AML";
$aml_intro_1 = "$site_name uznaje znaczenie świadomości przeciwdziałania praniu pieniędzy, integralności finansowej i odpowiedzialnego udziału w rynkach aktywów cyfrowych.";
$aml_intro_2 = "Niniejsza Polityka AML wyjaśnia ogólne zasady, jakie $site_name stosuje, aby zniechęcać do niezgodnego z prawem wykorzystywania technologii związanych z kryptowalutami, podejrzanej działalności finansowej, oszustw, unikania sankcji, finansowania terroryzmu i innych zabronionych zachowań.";
$aml_h2_purpose = "Cel niniejszej polityki";
$aml_p_purpose_1 = "Celem niniejszej polityki jest ustanowienie odpowiedzialnych ram dla podejścia $site_name do świadomości przeciwdziałania praniu pieniędzy w ekosystemie aktywów cyfrowych.";
$aml_p_purpose_2 = "Rynki kryptowalut mogą obejmować działalność transgraniczną, infrastrukturę zdecentralizowaną, giełdy osób trzecich i zewnętrzne systemy portfeli. Z tego powodu użytkownicy powinni rozumieć, że obowiązki związane ze zgodnością mogą się różnić w zależności od jurysdykcji, rodzaju konta, dostawcy giełdy i lokalnego środowiska regulacyjnego.";
$aml_h2_responsible = "Odpowiedzialne korzystanie z technologii aktywów cyfrowych";
$aml_p_resp_1 = "Oczekuje się, że użytkownicy będą korzystać z $site_name i wszelkich powiązanych usług związanych z aktywami cyfrowymi w sposób odpowiedzialny, zgodny z prawem i obowiązującymi zasadami.";
$aml_p_resp_2 = "$site_name nie wspiera ani nie zachęca do wykorzystywania rynków kryptowalut, systemów tradingowych, zautomatyzowanych technologii lub narzędzi analitycznych do celów niezgodnych z prawem.";
$aml_li_1 = "Pranie pieniędzy";
$aml_li_2 = "Finansowanie terroryzmu";
$aml_li_3 = "Oszustwo lub oszustwo finansowe";
$aml_li_4 = "Unikanie sankcji";
$aml_li_5 = "Manipulacja rynkiem";
$aml_li_6 = "Wykorzystywanie skradzionych środków lub przejętych kont";
$aml_li_7 = "Jakakolwiek działalność zabroniona przez obowiązujące prawo";
$aml_h2_exchange = "Zgodność giełd osób trzecich";
$aml_p_ex_1 = "$site_name może odnosić się, wchodzić w interakcje lub udostępniać infrastrukturę analityczną związaną z platformami aktywów cyfrowych osób trzecich lub środowiskami płynności.";
$aml_p_ex_2 = "Giełdy, depozytariusze, procesorzy płatności i dostawcy usług będący osobami trzecimi mogą stosować własne procedury zgodności, w tym weryfikację tożsamości, monitorowanie transakcji, kontrolę sankcji, ograniczenia konta, kontrole źródła środków lub dodatkowe wymogi weryfikacyjne.";
$aml_h2_user_responsibility = "Odpowiedzialność użytkownika";
$aml_p_user_1 = "Użytkownicy są odpowiedzialni za zapewnienie, że ich działalność jest zgodna z prawem w ich lokalizacji i spójna z obowiązkami nałożonymi przez odpowiednich regulatorów, giełdy, instytucje finansowe lub dostawców usług.";
$aml_p_user_2 = "Użytkownicy nie powinni podejmować prób ukrywania własności, maskowania pochodzenia transakcji, podawania fałszywych informacji, omijania procesów weryfikacji ani wykorzystywania infrastruktury aktywów cyfrowych w sposób, który może zostać uznany za podejrzany lub niezgodny z prawem.";
$aml_h2_suspicious = "Podejrzana działalność";
$aml_p_suspicious = "Podejrzana działalność może obejmować zachowanie, które wydaje się niespójne z normalnym użytkowaniem, próby niewłaściwego wykorzystania systemów tradingowych, wielokrotne przesyłanie wprowadzających w błąd informacji, zaangażowanie w ograniczone jurysdykcje lub działalność związaną z oszustwami, nielegalnymi środkami lub zabronionymi usługami.";
$aml_h2_evasion = "Brak unikania lub obchodzenia";
$aml_p_evasion = "Użytkownicy nie mogą podejmować prób obchodzenia kontroli zgodności, ograniczeń technicznych, systemów weryfikacji tożsamości, ograniczeń geograficznych ani procesów monitorowania ryzyka.";
$aml_h2_policy_updates = "Aktualizacje polityki";
$aml_p_updates_1 = "$site_name może okresowo aktualizować niniejszą Politykę AML, aby odzwierciedlić zmiany w oczekiwaniach regulacyjnych, standardach rynkowych, procedurach wewnętrznych lub praktykach branży aktywów cyfrowych.";
$aml_p_updates_2 = "Dalsze korzystanie ze strony po aktualizacjach oznacza, że użytkownicy potwierdzają zaktualizowaną politykę.";
// RISK PAGE
$risk_h1 = "Ujawnienie ryzyka";
$risk_intro_1 = "Trading kryptowalutami i uczestnictwo w aktywach cyfrowych wiążą się ze znacznym ryzykiem. Ceny mogą zmieniać się szybko, płynność może się nieoczekiwanie zmieniać, a warunki rynkowe mogą stać się bardzo niestabilne w krótkim czasie.";
$risk_intro_2 = "Niniejsze Ujawnienie ryzyka wyjaśnia ważne kwestie, które użytkownicy powinni rozważyć przed rozpoczęciem interakcji z rynkami aktywów cyfrowych, zautomatyzowanymi technologiami tradingowymi, sygnałami rynkowymi generowanymi przez AI lub infrastrukturą analityczną związaną z kryptowalutami.";
$risk_h2_no_guarantee = "Brak gwarantowanych wyników";
$risk_p_no_guarantee_1 = "$site_name nie gwarantuje zysków, zwrotów z inwestycji, sukcesu tradingowego, dokładności sygnałów, nieprzerwanego dostępu ani pozytywnych wyników finansowych.";
$risk_p_no_guarantee_2 = "Wszelkie przykłady, statystyki, elementy interfejsu, wskaźniki wydajności, wskaźniki sygnałów lub symulacje rynkowe wyświetlane na tej stronie są udostępniane wyłącznie w celach informacyjnych i ilustracyjnych.";
$risk_h2_volatility = "Zmienność rynku kryptowalut";
$risk_p_vol_1 = "Rynki aktywów cyfrowych są bardzo zmienne. Na ceny mogą wpływać niedobory płynności, wiadomości makroekonomiczne, zmiany regulacyjne, awarie giełd, wydarzenia blockchain, nastroje inwestorów, działalność związana z dźwignią finansową lub manipulacja rynkiem.";
$risk_p_vol_2 = "Zmienność może skutkować szybkimi stratami, nagłymi lukami cenowymi, poślizgiem cenowym, zdarzeniami likwidacyjnymi lub niemożnością realizacji transakcji po oczekiwanych cenach.";
$risk_h2_ai = "Ograniczenia sygnałów AI";
$risk_p_ai_1 = "Systemy sztucznej inteligencji mogą analizować duże ilości danych rynkowych, ale nie mogą wyeliminować niepewności.";
$risk_p_ai_2 = "Wskaźniki, sygnały tradingowe, klasyfikacje rynkowe i modele predykcyjne oparte na AI mogą być niekompletne, opóźnione, nieprawidłowe lub nieodpowiednie dla osobistej sytuacji finansowej użytkownika.";
$risk_p_ai_3 = "Użytkownicy nie powinni polegać wyłącznie na żadnym sygnale AI przy podejmowaniu decyzji tradingowych, inwestycyjnych lub finansowych.";
$risk_h2_tech = "Ryzyko technologiczne i wykonawcze";
$risk_p_tech_1 = "Technologia tradingowa może być narażona na problemy z łącznością internetową, przerwy serwerowe, opóźnienia, błędy oprogramowania, awarie API, przestoje giełd, nieprawidłowe kanały danych lub ograniczenia infrastruktury osób trzecich.";
$risk_p_tech_2 = "$site_name nie gwarantuje nieprzerwanego dostępu do danych, sygnałów, funkcji platformy, systemów osób trzecich ani środowisk wykonawczych.";
$risk_h2_liquidity = "Ryzyko płynności i giełd";
$risk_p_liq_1 = "Płynność może się znacznie różnić w zależności od giełdy i aktywów cyfrowych. Niektóre rynki mogą doświadczać niskiej głębokości księgi zleceń, szerokich spreadów, opóźnionej realizacji lub gwałtownych ruchów cen w okresach napięć.";
$risk_p_liq_2 = "Giełdy osób trzecich mogą nakładać opłaty, limity, ograniczenia, przeglądy kont, opóźnienia w wypłatach, zawieszenia tradingu lub ograniczenia geograficzne.";
$risk_h2_regulatory = "Ryzyko regulacyjne";
$risk_p_reg_1 = "Przepisy dotyczące aktywów cyfrowych mogą się szybko zmieniać i różnić się w zależności od kraju, regionu i jurysdykcji.";
$risk_p_reg_2 = "Zmiany regulacyjne mogą wpływać na dostęp do rynku, dostępność aktywów, działanie giełd, obowiązki sprawozdawcze, opodatkowanie, ograniczenia tradingowe lub funkcjonalność platformy.";
$risk_h2_user_responsibility = "Odpowiedzialność użytkownika";
$risk_p_user_1 = "Użytkownicy są wyłącznie odpowiedzialni za ocenę ryzyka, zrozumienie obowiązujących przepisów, przegląd swojej sytuacji finansowej i podejmowanie niezależnych decyzji.";
$risk_p_user_2 = "$site_name nie udziela zindywidualizowanych porad finansowych, inwestycyjnych, prawnych, księgowych ani podatkowych.";
$risk_h2_advice = "Skorzystaj z profesjonalnej porady";
$risk_p_advice_1 = "Użytkownicy powinni skonsultować się z wykwalifikowanymi specjalistami przed podjęciem istotnych decyzji finansowych dotyczących kryptowalut, systemów tradingowych, zautomatyzowanych technologii lub inwestycji w aktywa cyfrowe.";
$risk_p_advice_2 = "Korzystając z tej strony, użytkownicy potwierdzają, że rozumieją ryzyko związane z rynkami aktywów cyfrowych i przyjmują odpowiedzialność za własne decyzje.";
// EXCHANGES PAGE
$exchanges_h1 = "Obsługiwane giełdy";
$exchanges_intro_1 = "$site_name zostało zaprojektowane wokół wielorynkowego podejścia analitycznego, które ocenia aktywność aktywów cyfrowych w szerokim zakresie środowisk handlu kryptowalutami.";
$exchanges_intro_2 = "Nowoczesne rynki kryptowalut działają za pośrednictwem licznych giełd, dostawców płynności, miejsc instrumentów pochodnych i ekosystemów tradingowych. Zrozumienie aktywności w tych środowiskach jest niezbędne do budowania kompleksowej analizy rynku.";
$exchanges_h2_philosophy = "Filozofia zasięgu rynkowego";
$exchanges_p_phil_1 = "Zamiast polegać na jednym miejscu, $site_name zostało zbudowane wokół koncepcji analizy obejmującej cały rynek.";
$exchanges_p_phil_2 = "Wycena kryptowalut, warunki płynności, zachowanie zmienności i aktywność instytucjonalna często różnią się między giełdami. Obserwując szersze warunki rynkowe, modele analityczne mogą uzyskać dodatkowy kontekst dotyczący pojawiających się trendów i potencjalnych anomalii.";
$exchanges_h2_spot = "Monitorowanie rynku spot";
$exchanges_p_spot_1 = "Giełdy spot stanowią znaczną część globalnej aktywności aktywów cyfrowych.";
$exchanges_p_spot_2 = "Systemy analizy rynku mogą oceniać dane rynku spot, w tym:";
$exchanges_li_spot_1 = "Aktywność cenowa";
$exchanges_li_spot_2 = "Głębokość płynności";
$exchanges_li_spot_3 = "Struktura księgi zleceń";
$exchanges_li_spot_4 = "Wolumen tradingowy";
$exchanges_li_spot_5 = "Zachowanie spreadu kupna-sprzedaży";
$exchanges_li_spot_6 = "Warunki nierównowagi rynkowej";
$exchanges_h2_deriv = "Rynki instrumentów pochodnych";
$exchanges_p_deriv_1 = "Instrumenty pochodne kryptowalut odgrywają coraz ważniejszą rolę w szerszym ekosystemie aktywów cyfrowych.";
$exchanges_p_deriv_2 = "Kontrakty terminowe, kontrakty wieczyste, opcje i aktywność handlu z dźwignią mogą wpływać na nastroje rynkowe, warunki zmienności i impet kierunkowy.";
$exchanges_p_deriv_3 = "Infrastruktura analityczna może oceniać informacje związane z instrumentami pochodnymi podczas oceny szerszych warunków rynkowych.";
$exchanges_h2_liquidity = "Analiza płynności";
$exchanges_p_liq_1 = "Płynność pozostaje jednym z najważniejszych czynników wpływających na stabilność rynku i jakość realizacji.";
$exchanges_p_liq_2 = "$site_name może analizować warunki płynności na wielu platformach tradingowych w celu identyfikacji:";
$exchanges_li_liq_1 = "Koncentracja płynności";
$exchanges_li_liq_2 = "Nagłe wycofanie płynności";
$exchanges_li_liq_3 = "Presja na księgę zleceń";
$exchanges_li_liq_4 = "Zdarzenia nierównowagi rynkowej";
$exchanges_li_liq_5 = "Nietypowe zachowanie tradingowe";
$exchanges_h2_availability = "Dostępność giełd";
$exchanges_p_avail_1 = "Dostępność giełd może się różnić w zależności od lokalizacji geograficznej, jurysdykcji, uprawnień konta, wymogów regulacyjnych i ograniczeń technicznych.";
$exchanges_p_avail_2 = "Niektóre giełdy lub usługi mogą nie być dostępne dla wszystkich użytkowników i mogą nakładać własne ograniczenia, wymogi weryfikacyjne, opłaty i zasady operacyjne.";
$exchanges_h2_third = "Platformy osób trzecich";
$exchanges_p_third_1 = "Wszelkie odniesienia do giełd, miejsc płynności, brokerów, depozytariuszy lub dostawców rynku są dokonywane wyłącznie w celach informacyjnych.";
$exchanges_p_third_2 = "$site_name nie jest właścicielem, nie obsługuje, nie kontroluje ani nie gwarantuje usług giełd osób trzecich.";
$exchanges_p_third_3 = "Użytkownicy pozostają odpowiedzialni za ocenę dowolnej giełdy, platformy tradingowej lub usługi związanej z aktywami cyfrowymi przed użyciem.";
$exchanges_h2_monitoring = "Ciągłe monitorowanie rynku";
$exchanges_p_mon_1 = "Rynki kryptowalut działają nieprzerwanie, często dwadzieścia cztery godziny na dobę, siedem dni w tygodniu.";
$exchanges_p_mon_2 = "W miarę ewolucji struktury rynku pojawiają się nowe giełdy, płynność migruje, a aktywność tradingowa się zmienia.";
$exchanges_p_mon_3 = "$site_name nieustannie dąży do utrzymania świadomości zmieniających się warunków rynkowych poprzez szeroki zasięg analityczny ekosystemu aktywów cyfrowych.";

// ==========================================
// RISK WARNING PAGE
// ==========================================
$page_title_risk_warning = "Ostrzeżenie o ryzyku | $site_name";
$page_description_risk_warning = "Zrozum ryzyko związane z automatycznym tradingiem kryptowalut z $site_name, w tym zmienność rynku, ryzyko realizacji i kwestie regulacyjne.";
$risk_warning_breadcrumb_name = "Ostrzeżenie o ryzyku";
$risk_warning_title = "Ostrzeżenie o ryzyku";
$risk_warning_intro = "Zrozumienie ryzyka to pierwszy krok w kierunku pewnego siebie tradingu.";

$risk_warning_ai_heading = "Jak nasz system AI pomaga zarządzać ryzykiem:";
$risk_warning_ai_1 = "<strong>Efektywność algorytmiczna i trading bez emocji:</strong> Zaawansowane algorytmy analizują sygnały rynkowe, aby obiektywnie realizować transakcje w optymalnych momentach.";
$risk_warning_ai_2 = "<strong>Strategie oparte na danych:</strong> Strategie opierają się na zweryfikowanych wzorcach rynkowych i analizie w czasie rzeczywistym, a nie na domysłach.";
$risk_warning_ai_3 = "<strong>Elastyczne ustawienia i pełna kontrola:</strong> Dostosuj parametry ryzyka w dowolnym momencie. Śledź wszystkie salda i transakcje przejrzyście na swoim panelu, bez ukrytych opłat i bez ograniczeń wypłat.";

$risk_warning_disclaimer = "<strong>Zastrzeżenie:</strong> Trading zawsze wiąże się z ryzykiem. Zautomatyzowane systemy (w tym AI) nie gwarantują zysku, mogą zawieść z powodu błędów oprogramowania lub nieoczekiwanych zdarzeń rynkowych i wymagają nadzoru użytkownika. Wyniki osiągnięte w przeszłości nie wskazują na przyszłe rezultaty. Ta platforma służy wyłącznie celom informacyjnym i marketingowym i nie stanowi porady finansowej.";

$risk_warning_s1_heading = "1. Ogólne ryzyka i ryzyka rynku kryptowalut";
$risk_warning_s1_intro = "Kryptowaluty są bardzo zmiennymi, spekulacyjnymi aktywami, które działają 24/7 przy minimalnym nadzorze regulacyjnym w większości jurysdykcji.";
$risk_warning_s1_1 = "Wartości mogą dramatycznie się wahać w krótkim czasie, potencjalnie prowadząc do całkowitej utraty zainwestowanego kapitału.";
$risk_warning_s1_2 = "Na wartości rynkowe mogą znacząco wpływać zmiany regulacyjne, rozwój technologiczny, naruszenia bezpieczeństwa lub szersze wydarzenia makroekonomiczne.";
$risk_warning_s1_3 = "Niektóre aktywa mogą całkowicie stracić wartość. Inwestuj tylko środki, na których utratę możesz sobie pozwolić.";

$risk_warning_s2_heading = "2. Ryzyko realizacji, płynności i dźwigni finansowej";
$risk_warning_s2_1 = "<strong>Zmienność rynku i płynność:</strong> Ekstremalne ruchy cen (10–20%+ dziennie) lub niska płynność (szczególnie w przypadku mniejszych monet) mogą prowadzić do opóźnień, przestojów platformy i poważnego poślizgu cenowego przy realizacji. Zlecenia stop-loss nie mogą zagwarantować ograniczenia strat w ekstremalnych warunkach.";
$risk_warning_s2_2 = "<strong>Ryzyko dźwigni i depozytu zabezpieczającego:</strong> Produkty z dźwignią finansową wzmacniają zarówno zyski, jak i straty, co oznacza, że możesz stracić więcej niż początkowy depozyt. Około 70–80% kont inwestorów detalicznych traci pieniądze podczas handlu produktami z dźwignią finansową.";

$risk_warning_s3_heading = "3. Ryzyka techniczne, cyberbezpieczeństwa i osób trzecich";
$risk_warning_s3_1 = "<strong>Czynniki techniczne:</strong> Trading internetowy z natury wiąże się z ryzykiem przerw w połączeniu internetowym, błędów sprzętu/oprogramowania i niedostępności usługi.";
$risk_warning_s3_2 = "<strong>Cyberbezpieczeństwo:</strong> Konta kryptowalutowe są częstym celem phishingu, złośliwego oprogramowania i włamań. Transakcje są nieodwracalne; naruszenie danych logowania może skutkować trwałą utratą środków.";
$risk_warning_s3_3 = "<strong>Platformy osób trzecich:</strong> Ta strona może łączyć użytkowników z platformami osób trzecich. Nie kontrolujemy, nie popieramy ani nie gwarantujemy ich bezpieczeństwa, działania ani wypłacalności. Zawsze przeprowadzaj własną due diligence przed wpłatą środków na zewnętrzne platformy.";

$risk_warning_s4_heading = "4. Postanowienia regulacyjne, podatkowe i końcowe";
$risk_warning_s4_1 = "<strong>Zgodność prawna i podatki:</strong> Ramy regulacyjne różnią się znacznie i szybko się zmieniają. Użytkownicy są wyłącznie odpowiedzialni za zapewnienie zgodności swojej działalności tradingowej z lokalnymi przepisami oraz za wypełnianie własnych zobowiązań podatkowych.";
$risk_warning_s4_2 = "<strong>Brak gwarancji zysku:</strong> Nie istnieje \"bezpieczny\" ani wolny od ryzyka trading kryptowalutami. Wszelkie liczby dotyczące zysków lub przykłady wyników są czysto hipotetyczne.";
$risk_warning_s4_3 = "<strong>Odpowiedniość:</strong> Jeśli w pełni nie rozumiesz ryzyka, polegasz na niezbędnych środkach lub handlujesz pożyczonymi pieniędzmi, trading kryptowalutami nie jest dla Ciebie odpowiedni. W razie wątpliwości skonsultuj się z niezależnym licencjonowanym doradcą finansowym.";

$risk_warning_contact = "<strong>Kontakt:</strong> W przypadku jakichkolwiek pytań dotyczących niniejszego oświadczenia lub w celu przesłania zapytania, skontaktuj się z naszym oficjalnym zespołem obsługi klienta za pośrednictwem formularza kontaktowego na naszej stronie.";
$footer_risk_warning = "Ostrzeżenie o ryzyku";

$lang_loaded = true;
