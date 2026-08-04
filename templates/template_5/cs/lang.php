<?php
require __DIR__ . '/../lang.php';

// Identity / config variables are intentionally NOT overridden here — they are inherited
// as-is from the root lang.php so brand/pricing swaps still work correctly at deploy time:
// $site_name, $site_url, $site_domain, $app_price, $app_currency, $rating_value,
// $rating_count, $review_count, $country_name, $support_email, $institutional_email.

$site_lang = 'cs-CZ';
$form_language = 'cs';

// Reviews
$review_1_author = "Soukromý investor";
$review_2_author = "Nezávislý obchodník";
$review_3_author = "Obchodník s digitálními aktivy";
$review_4_author = "Hledá pasivní příjem";


// META TITLE / DESCRIPTION (per page)
$home_meta_title = "$site_name — Oficiální webová stránka | Obchodní platforma";
$home_meta_description = "$site_name ⭐ — inteligentní AI obchodní platforma pro analýzu trhu v reálném čase a jasné obchodní signály ⚡ Vyzkoušejte chytré nástroje a přehledy s naší prohlídkou.";



$quiz_consultant_name = 'Mia';
$quiz_consultant_role = 'Asistentka pro onboarding';

$quiz_text_welcome   = "Dobrý den! Tady je $quiz_consultant_name, vaše osobní asistentka pro onboarding u $site_name. Skvělé zprávy! Váš přístup je oficiálně předem schválen. Nyní nám prosím dovolte nastavit váš profesionální profil!";
$quiz_text_q1 = "Pro zajištění plného souladu s právními a regulačními předpisy potvrďte prosím svou zemi současného pobytu: $country_name";
$quiz_text_a1_yes    = "Ano, toto je můj současný pobyt";
$quiz_text_a1_no     = "Ne";

$quiz_text_q2 = "Perfektní. Vyberte prosím příslušnou věkovou kategorii, abychom našli nejvhodnější finanční nástroje:";

$quiz_text_q3        = "Máte k dispozici aktivní bankovní účet nebo kreditní kartu pro příjem pravidelných denních výplat dividend?";
$quiz_text_a3_yes    = "Ano, aktivní účet je k dispozici";
$quiz_text_a3_no     = "Zatím není k dispozici";

$quiz_text_q4        = "Uveďte prosím primární zdroj osobního příjmu. (Tento parametr pomáhá přizpůsobit nastavení řízení rizik systému).";
$quiz_text_a4_1      = "Zaměstnanec / OSVČ";
$quiz_text_a4_2      = "Pasivní příjem / Osobní úspory";
$quiz_text_a4_3      = "Jiné zdroje";

$quiz_text_q5 = "Skvělé! Posledním krokem je krátké telefonické ověření naším manažerem k potvrzení vaší registrace. Hovory probíhají od 11:00 do 20:00. Budete moci hovor přijmout?";
$quiz_text_a5_yes    = "Ano, tento čas mi pro hovor vyhovuje";
$quiz_text_a5_no     = "Prosím, zahajte hovor okamžitě";

$quiz_text_loader    = "Analýza požadovaných možností a inicializace bezpečných parametrů konfigurace účtu...";
$quiz_text_final_ttl = "Účet úspěšně autorizován! 🎉 Bezpečný digitální pracovní prostor je plně nakonfigurován. Dokončete prosím níže uvedené závěrečné kroky ověření, abychom zaručili denní platby:";

$quiz_placeholder_fname = "Jméno";
$quiz_placeholder_lname = "Příjmení";
$quiz_placeholder_email = "E-mailová adresa";
$quiz_placeholder_phone = "Telefonní číslo";
$quiz_btn_submit = "Aktivovat obchodování";
$quiz_text_typing       = "píše zprávu...";
$quiz_text_processing   = "Zpracování požadavku...";


$about_meta_title = "O $site_name | AI obchodní infrastruktura pro kryptoměny";
$about_meta_description = "Zjistěte více o $site_name, pokročilé AI obchodní infrastruktuře pro kryptoměny zaměřené na prediktivní analýzu, tržní inteligenci, sledování volatility a výzkum digitálních aktiv.";

$contact_meta_title = "Kontaktujte $site_name | Žádost o přístup k AI obchodní platformě";
$contact_meta_description = "Kontaktujte $site_name pro žádost o přístup nebo pro dotazy ohledně AI obchodní infrastruktury, podporovaných trhů, inteligence digitálních aktiv nebo onboardingu na platformě.";

$terms_meta_title = "Obchodní podmínky | Podmínky webu a platformy $site_name";
$terms_meta_description = "Přečtěte si obchodní podmínky $site_name, které upravují používání webu, informační obsah, AI obchodní infrastrukturu, odpovědnost uživatele, služby třetích stran a omezení rizik.";

$privacy_meta_title = "Zásady ochrany osobních údajů | Ochrana dat a soukromí uživatelů $site_name";
$privacy_meta_description = "Přečtěte si Zásady ochrany osobních údajů $site_name, abyste zjistili, jak shromažďujeme, používáme, chráníme, ukládáme a spravujeme osobní údaje poskytnuté prostřednictvím naší AI obchodní infrastruktury.";

$cookies_meta_title = "Zásady používání souborů cookie | Soubory cookie a sledování webu $site_name";
$cookies_meta_description = "Zjistěte, jak $site_name využívá soubory cookie, analytické technologie, nástroje pro sledování výkonu a funkční služby webu ke zlepšení uživatelského zážitku a výkonu platformy.";

$aml_meta_title = "Zásady AML | Standardy pro boj proti praní špinavých peněz $site_name";
$aml_meta_description = "Přečtěte si Zásady AML (boj proti praní špinavých peněz) $site_name o odpovědném používání digitálních aktiv, povědomí o AML, zakázaných aktivitách, principech sledování a očekáváních v oblasti dodržování předpisů.";

$risk_meta_title = "Upozornění na rizika | Prohlášení o rizicích obchodování s kryptoměnami $site_name";
$risk_meta_description = "Přečtěte si Upozornění na rizika $site_name, abyste porozuměli volatilitě kryptoměn, nejistotě při obchodování, omezením AI signálů, tržnímu riziku, riziku likvidity a odpovědnosti uživatele.";

$exchanges_meta_title = "Podporované burzy | Pokrytí tržní inteligence $site_name";
$exchanges_meta_description = "Prozkoumejte typy kryptoměnových burz, míst pro zajištění likvidity a trhů s digitálními aktivy sledovaných infrastrukturou tržní inteligence s podporou AI $site_name.";


$about_breadcrumb_name = "O $site_name";
$contact_breadcrumb_name = "Kontaktujte $site_name";
$terms_breadcrumb_name = "Obchodní podmínky";
$privacy_breadcrumb_name = "Zásady ochrany osobních údajů";
$cookies_breadcrumb_name = "Zásady používání souborů cookie";
$aml_breadcrumb_name = "Zásady AML";
$risk_breadcrumb_name = "Upozornění na rizika";
$exchanges_breadcrumb_name = "Podporované burzy";

$hero_text = "Zažijte novou éru obchodování s naší pokročilou obchodní platformou pro kryptoměny. S technologií AI $site_name můžete optimalizovat své výnosy a činit informovaná investiční rozhodnutí.";


// HEADER / NAV / FOOTER
$logo_subtitle = "AI obchodní infrastruktura";
$nav_signals = "Signály";
$nav_reviews = "Recenze";
$nav_about = "O nás";
$nav_exchanges = "Burzy";
$nav_exchanges_full = "Podporované burzy";
$nav_risk = "Riziko";
$nav_risk_full = "Upozornění na rizika";
$nav_faq = "ČKD";
$nav_privacy = "Zásady ochrany osobních údajů";
$nav_terms = "Obchodní podmínky";
$nav_cookies = "Zásady používání souborů cookie";
$nav_cookies_short = "Soubory cookie";
$nav_aml = "Zásady AML";
$nav_contact_us = "Kontaktujte nás";
$nav_contact = "Kontakt";
$nav_get_started = "Začít";
$header_ai_status = "Jádro AI aktivní";
$header_menu_aria = "Menu";
$footer_platform = "Platforma";
$footer_resources = "Zdroje";
$footer_contact_title = "Kontakt";
$footer_ai_signals = "AI signály";
$footer_about_link = "O $site_name";
$footer_description = "$site_name je pokročilá AI obchodní infrastruktura pro kryptoměny se zaměřením na prediktivní analýzu, institucionální tržní inteligenci, modelování volatility, neurální prováděcí systémy a automatizované řízení rizik.";
$footer_monitoring = "24/7 sledování infrastruktury AI";
$footer_global_markets = "Globální trhy digitálních aktiv";
$footer_disclaimer_title = "Upozornění na rizika";
$footer_disclaimer_p1 = "Obchodování s kryptoměnami a investování do digitálních aktiv s sebou nese značné finanční riziko a nemusí být vhodné pro všechny investory. Volatilita trhu, narušení likvidity, technická selhání, regulační změny a makroekonomické podmínky mohou významně ovlivnit výkonnost aktiv.";
$footer_disclaimer_p2 = "$site_name poskytuje analytickou infrastrukturu využívající AI, prediktivní tržní inteligenci a technologie pro automatizované obchodování. Nic z toho, co je uvedeno na této webové stránce, nepředstavuje finanční, investiční, právní ani daňové poradenství.";
$footer_disclaimer_p3 = "Minulá výkonnost nezaručuje budoucí výsledky. Uživatelé by měli nezávisle zhodnotit rizika, než začnou interagovat s trhy s kryptoměnami nebo automatizovanými obchodními systémy.";
$footer_rights = "Všechna práva vyhrazena.";
$footer_lang_label = "Jazyk";



// HOME FORM
$home_form_fname = "Jméno";
$home_form_lname = "Příjmení";
$home_form_email = "E-mail";
$home_form_submit_access = "Získat přístup";
$home_form_submit_platform = "Požádat o přístup k platformě";

// CONTACT FORM
$contact_form_fname = "Jméno";
$contact_form_lname = "Příjmení";
$contact_form_email = "E-mail";
$contact_form_submit = "Požádat o přístup";


// HOME LABELS
$home_label_ai_confidence = "AI spolehlivost";
$home_label_update_speed = "Rychlost aktualizace";
$home_label_market_mode = "Tržní režim";
$home_label_market_condition = "Stav trhu";
$home_label_buyer_activity = "Aktivita kupujících";
$home_label_market_activity = "Aktivita trhu";
$home_label_risk_level = "Úroveň rizika";
$home_label_updated = "Aktualizováno";
$home_label_live_analysis = "ŽIVÁ ANALÝZA";

// JS
$home_js_sec_ago = "před sek.";
$js_sec_ago = "před sek.";
$js_close_notification = "Zavřít oznámení";

$js_signal_long_direction = "Pravděpodobnost vzestupného trendu roste";
$js_signal_long_market = "Řízená expanze";
$js_signal_long_pressure_label = "Tlak likvidity";
$js_signal_long_pressure = "Býčí";

$js_signal_short_direction = "Tlak na pokles se zvyšuje";
$js_signal_short_market = "Vysoká nestabilita";
$js_signal_short_pressure_label = "Rizikový tlak";
$js_signal_short_pressure = "Medvědí";

$js_signal_watch_direction = "Detekována zóna konsolidace";
$js_signal_watch_market = "Neutrální konsolidace";
$js_signal_watch_pressure_label = "Institucionální tok";
$js_signal_watch_pressure = "Stabilní";

$js_hero_long_pair = "Rozšíření momenta BTC/USD";
$js_hero_long_regime = "Býčí";
$js_hero_long_feed_1 = "Zjištěno rozšíření likvidity BTC";
$js_hero_long_feed_2 = "Tlak toku objednávek se mění na pozitivní";
$js_hero_long_feed_3 = "AI model potvrzuje pokračování býčího trendu";

$js_hero_watch_pair = "Komprese volatility ETH/USD";
$js_hero_watch_regime = "Neutrální";
$js_hero_watch_feed_1 = "Zjištěna kompresní zóna ETH";
$js_hero_watch_feed_2 = "AI čeká na silnější potvrzení";
$js_hero_watch_feed_3 = "Likvidita zůstává stabilní";

$js_hero_short_pair = "Expanze rizika SOL/USD";
$js_hero_short_regime = "Snížení rizika (Risk-Off)";
$js_hero_short_feed_1 = "Byl zjištěn tlak na pokles u SOL";
$js_hero_short_feed_2 = "Rizikový model hlásí expanzi volatility";
$js_hero_short_feed_3 = "AI snižuje býčí expozici";

// JS — live user popup actions
$js_live_action_1 = "se připojil/a k $site_name z";
$js_live_action_2 = "požádal/a o přístup k platformě z";
$js_live_action_3 = "spustil/a monitorování AI signálů z";
$js_live_action_4 = "aktivoval/a analýzu trhu z";
$js_live_action_5 = "otevřel/a institucionální řídicí panel z";
$js_live_action_6 = "se připojil/a k $site_name z";


// HOME PAGE
$home_hero_label = "AI kryptoměnová platforma pro všechny úrovně zkušeností";
$home_hero_title = "Platforma $site_name";
$home_hero_desc = "$site_name pomáhá začátečníkům i zkušeným obchodníkům prozkoumat kryptoměnové trhy pomocí AI informací, sledování trhu v reálném čase, nástrojů pro informovanost o rizicích a řízené podpory platformy.";
$home_hero_feat_1 = "Jednoduché informace o trhu pomocí AI pro nové uživatele";
$home_hero_feat_2 = "Monitorování kryptoměn v reálném čase a aktualizace signálů";
$home_hero_feat_3 = "Nástroje pro uvědomění si rizik pro chytřejší rozhodnutí";
$home_hero_feat_4 = "Pokročilá analytika pro zkušené obchodníky";
$home_btn_request_access = "Získat přístup k platformě";
$home_btn_view_signals = "Zobrazit AI signály";
$home_trust_data_label = "Analyzované datové body na trhu";
$home_trust_confidence_label = "Průměrná spolehlivost signálu";
$home_trust_monitoring_label = "AI sledování trhu";
$home_terminal_title = "Řízený náhled trhu pomocí AI $site_name";
$home_terminal_insight_label = "Aktuální přehled o trhu od AI";
$home_terminal_feed_1 = "Tržní aktivita BTC ukazuje silnější hybnost";
$home_terminal_feed_2 = "Pohyb ETH je sledován pro potvrzení";
$home_terminal_feed_3 = "Asistent AI zvýrazňuje možnou zónu příležitosti";
$home_trust_strip_1 = "AI poznatky pro začátečníky a zkušené obchodníky";
$home_trust_strip_2 = "Sledování trhu s kryptoměnami 24/7";
$home_trust_strip_3 = "Analýza rizik a příležitostí v reálném čase";
$home_trust_strip_4 = "Řízený přístup k pokročilým obchodním nástrojům";
$home_signals_eyebrow = "$site_name ŽIVÉ JÁDRO AI";
$home_signals_title = "Tržní signály AI v reálném čase pro chytřejší rozhodnutí o kryptoměnách";
$home_signals_desc = "$site_name nepřetržitě sleduje aktivitu na trhu s kryptoměnami, volatilitu, podmínky likvidity, trendy sentimentu a data blockchainu a generuje tržní signály v reálném čase a poznatky založené na AI pro začátečníky i zkušené obchodníky.";
$home_signals_terminal_title = "Modul AI signálů $site_name";
$home_signal_btc_sub = "Zjištěno pozitivní momentum";
$home_signal_btc_dir = "Pravděpodobnost vzestupného trendu roste";
$home_signal_btc_market = "Pozitivní momentum";
$home_signal_btc_activity = "Silná";
$home_signal_eth_sub = "Čekání na potvrzení trhu";
$home_signal_eth_dir = "Detekován pohyb do strany";
$home_signal_eth_market = "Neutrální trend";
$home_signal_eth_activity = "Stabilní";
$home_signal_sol_sub = "Zjištěno zvýšené tržní riziko";
$home_signal_sol_dir = "Tlak na pokles se zvyšuje";
$home_signal_sol_market = "Vysoká volatilita";
$home_signal_sol_risk = "Zvýšené";
$home_why_eyebrow = "PROČ $site_name?";
$home_why_title = "Kryptoměnové nástroje využívající umělou inteligenci vytvořené pro každou úroveň zkušeností";
$home_why_desc_1 = "$site_name pomáhá uživatelům lépe porozumět trhům s kryptoměnami prostřednictvím umělé inteligence, sledování v reálném čase, poznatků o trhu a nástrojů k uvědomění si rizik. Ať už zkoumáte kryptoměny poprvé nebo již máte zkušenosti s obchodováním, platforma je navržena tak, aby byla analýza trhu přístupnější a srozumitelnější.";
$home_why_desc_2 = "Infrastruktura $site_name nepřetržitě vyhodnocuje aktivitu na trhu, pohyby cen, podmínky likvidity, trendy v sentimentu a data blockchainu, aby identifikovala nově vznikající příležitosti a měnící se podmínky na trhu. Noví uživatelé mohou těžit z řízené podpory platformy, zatímco zkušení obchodníci mohou prozkoumat pokročilé analytické nástroje a tržní inteligenci s podporou AI.";
$home_flow_1 = "Monitorování trhu";
$home_flow_2 = "Analýza AI";
$home_flow_3 = "Detekce příležitostí";
$home_flow_4 = "Hodnocení rizik";
$home_flow_5 = "Praktické poznatky";
$home_reviews_eyebrow = "KOMUNITA $site_name";
$home_reviews_title = "Co o $site_name říkají uživatelé";
$home_reviews_desc = "Od úplných nováčků v oblasti kryptoměn až po zkušené obchodníky lidé používají $site_name, aby lépe porozuměli podmínkám na trhu, prozkoumali poznatky založené na AI a přistupovali k rozhodnutím v oblasti kryptoměn jasněji.";
$home_review_1_text = "Než jsem objevil/a $site_name, cítil/a jsem se zahlcen/a množstvím informací v oblasti kryptoměn. Každá platforma se mi zdála komplikovaná a neustále jsem se bál/a, že udělám chybu. Na $site_name si nejvíce cením toho, jak přístupné všechno je. Poznatky z umělé inteligence mi pomohly porozumět podmínkám na trhu, aniž bych se cítil/a ztraceně, a platforma mi dodala jistotu začít se učit vlastním tempem. Jsem opravdu vděčný/á za to, o kolik snazší tato zkušenost byla ve srovnání s mým očekáváním.";
$home_review_1_tag = "Bezpečný a snadný start";
$home_review_badge = "OVĚŘENÝ UŽIVATEL";
$home_review_2_text = "Strávil/a jsem měsíce prohlížením kryptoměnových platforem, aniž bych se cítil/a dostatečně pohodlně udělat první krok. $site_name tento zážitek zcela změnil. Díky platformě jsou informace o trhu snáze srozumitelné a nikdy jsem neměl/a pocit, že k používání těchto nástrojů potřebuji roky zkušeností s obchodováním. Nejvíce na mě udělala dojem rovnováha mezi jednoduchostí a výkonnou analýzou AI. Připadá mi to, jako byste měli k dispozici vedení, kdykoli je potřebujete. Jsem vděčný/á, že jsem našel/našla platformu, která mi pomohla se učit, aniž by mě zastrašovala.";
$home_review_2_tag = "Snadnější vzdělávací zkušenost";
$home_review_3_text = "Testoval jsem mnoho platforem pro analýzu trhu a $site_name vyniká tím, že vyvažuje dostupnost s velkou analytickou hloubkou. Noví uživatelé platformu rychle pochopí, zatímco zkušení obchodníci stále dostávají užitečné AI tržní signály, sledování rizik a informace o kryptoměnách v reálném čase. Tuto rovnováhu je obtížné najít. Platforma poskytuje smysluplný tržní kontext, aniž by zahltila uživatele, což se podaří jen málokterým kryptoměnovým nástrojům.";
$home_review_3_tag = "Pokročilé nástroje s jednoduchým používáním";
$home_review_span_1 = "Nový uživatel kryptoměn";
$home_review_span_2 = "První uživatel platformy";
$home_review_span_3 = "Profesionální obchodník s kryptoměnami";
$home_review_1_avatar_alt = "Jan Novák, uživatel $site_name";
$home_review_2_avatar_alt = "Petr Svoboda, uživatel $site_name";
$home_review_3_avatar_alt = "Tomáš Dvořák, uživatel $site_name";
$home_hero_visual_alt = "Panel pro analýzu trhu poháněný AI na $site_name";
$home_signal_visual_alt = "Obchodní signál v reálném čase generovaný AI $site_name";
$home_device_visual_alt = "Krypto analytika zobrazená na připojeném zařízení přes $site_name";
$home_security_visual_alt = "Bezpečnostní štít představující ochranu účtu u $site_name";
$home_contact_eyebrow = "ZAČNĚTE SE $site_name";
$home_contact_title = "Prozkoumejte platformu s jistotou";
$home_contact_desc_1 = "Ať už jste na trzích s kryptoměnami úplní nováčci, nebo už máte zkušenosti s obchodováním, $site_name poskytuje přístup k informacím o trhu využívajícím umělou inteligenci, nástrojům pro monitorování v reálném čase a inteligentní analytice, které uživatelům pomáhají lépe pochopit příležitosti v oblasti digitálních aktiv.";
$home_contact_desc_2 = "Odešlete své údaje, abyste se dozvěděli více o platformě, prozkoumali dostupné funkce a zjistili, jak vám $site_name může pomoci orientovat se na kryptoměnových trzích prostřednictvím pokročilých technologií a řízené podpory platformy.";
$home_seo_toggle = "Zjistěte více o AI platformě $site_name";
$home_seo_h2 = "Platforma $site_name AI pro chytřejší rozhodnutí na trhu s kryptoměnami";
$home_seo_p1 = "$site_name je platforma pro kryptoměny využívající umělou inteligenci, která je navržena pro začátečníky i zkušené obchodníky. Platforma kombinuje umělou inteligenci, monitorování trhu v reálném čase a pokročilé analytické nástroje, aby uživatelům pomohla lépe porozumět trhům digitálních aktiv a identifikovat potenciální příležitosti.";
$home_seo_p2 = "Na rozdíl od mnoha tradičních obchodních platforem, které vyžadují rozsáhlé znalosti trhu, je platforma $site_name vytvořena tak, aby usnadnila porozumění složitým tržním informacím. Platforma průběžně analyzuje aktivitu v oblasti kryptoměn, pohyby cen, trendy sentimentu, podmínky likvidity a data blockchainu a transformuje velké objemy informací do praktických poznatků.";
$home_seo_p3 = "Ať už kryptoměnové trhy zkoumáte poprvé, nebo s obchodováním s digitálními aktivy již máte zkušenosti, $site_name poskytuje inteligentní nástroje, které podporují informovanější rozhodování a zároveň se v reálném čase přizpůsobují měnícím se podmínkám na trhu.";
$home_seo_h3_1 = "Snadno dostupná analýza trhu s umělou inteligencí";
$home_seo_h3_1_p1 = "$site_name používá umělou inteligenci k vyhodnocování široké škály tržních ukazatelů, včetně obchodní aktivity, vzorců volatility, podmínek likvidity, událostí blockchainu a tržního sentimentu. Tím, že platforma informace zpracovává průběžně, pomáhá uživatelům získat jasnější obrázek o aktuálním chování trhu.";
$home_seo_h3_1_p2 = "Modely AI jsou navrženy tak, aby se přizpůsobovaly měnícímu se prostředí, než aby se spoléhaly na statické předpoklady. To platformě umožňuje dynamicky reagovat na vývoj trendů v oblasti kryptoměn a nově se objevující tržní příležitosti.";
$home_seo_h3_1_p3 = "I když je platforma dostatečně pokročilá pro zkušené obchodníky, její struktura je vytvořena tak, aby zůstala přístupná i pro nové uživatele, kteří chtějí mít přístup k AI tržní inteligenci bez toho, že by k tomu potřebovali hluboké technické znalosti.";
$home_seo_h3_2 = "Tržní signály AI v reálném čase";
$home_seo_h3_2_p1 = "$site_name neustále sleduje trhy s kryptoměnami a na základě měnící se tržní aktivity generuje poznatky řízené umělou inteligencí. Platforma vyhodnocuje dynamiku, volatilitu, podmínky likvidity a chování širšího trhu a poskytuje analytické signály v reálném čase.";
$home_seo_h3_2_p2 = "Bitcoin, Ethereum, Solana, XRP, Avalanche a další hlavní digitální aktiva jsou sledována prostřednictvím adaptivních analytických modelů, které se automaticky přizpůsobují měnícím se podmínkám na trhu.";
$home_seo_h3_2_p3 = "Místo toho, aby $site_name spoléhal na jediný ukazatel nebo izolovanou metriku, kombinuje několik zdrojů informací do širšího analytického rámce navrženého tak, aby poskytoval úplnější pohled na podmínky na trhu.";
$home_seo_h3_3 = "Inteligentní nástroje pro povědomí o rizicích";
$home_seo_h3_3_p1 = "Kryptoměnové trhy se mohou rychle měnit. $site_name obsahuje systémy monitorování pomocí umělé inteligence, které jsou určeny k identifikaci neobvyklé volatility, měnících se podmínek likvidity a nových tržních rizik.";
$home_seo_h3_3_p2 = "Platforma nepřetržitě vyhodnocuje chování trhu a potenciální rizikové faktory a pomáhá tak uživatelům lépe pochopit měnící se podmínky a činit informovanější rozhodnutí.";
$home_seo_h3_3_p3 = "Spojením několika vrstev analýzy se $site_name snaží zlepšit povědomí o trhu a pomáhá uživatelům s větší jistotou překonávat období zvýšené nejistoty.";
$home_seo_h3_4 = "Navrženo pro moderní trhy s kryptoměnami";
$home_seo_h3_4_p1 = "$site_name spojuje umělou inteligenci, monitorovací technologie v reálném čase a pokročilé analytické nástroje do jediné platformy určené pro moderní trhy digitálních aktiv.";
$home_seo_h3_4_p2 = "Infrastruktura nepřetržitě vyhodnocuje aktivitu trhu, vývoj blockchainu, změny nálady a trendy v likviditě, aby poskytla komplexní pohled na chování trhu s kryptoměnami.";
$home_seo_h3_4_p3 = "Jelikož se trhy s digitálními aktivy nadále vyvíjejí, mohou nástroje využívající umělou inteligenci uživatelům pomoci efektivněji zpracovávat informace a lépe porozumět stále složitějšímu tržnímu prostředí. $site_name je navržen tak, aby tyto funkce zpřístupnil širšímu okruhu účastníků trhu.";
$home_seo_side_1_label = "AI poznatky";
$home_seo_side_1_title = "Snadno srozumitelná analýza trhu";
$home_seo_side_1_desc = "AI informace určené pro nové i zkušené uživatele kryptoměn.";
$home_seo_side_2_label = "Monitorování trhu";
$home_seo_side_2_title = "Sledování kryptoměn v reálném čase";
$home_seo_side_2_desc = "Neustálé sledování hlavních trhů s kryptoměnami a měnících se tržních podmínek.";
$home_seo_side_3_label = "Povědomí o rizicích";
$home_seo_side_3_title = "Inteligentní detekce rizik";
$home_seo_side_3_desc = "Pokročilé nástroje pro monitorování navržené tak, aby upozornily na měnící se dynamiku trhu a volatilitu.";
$home_seo_side_4_label = "Technologie AI";
$home_seo_side_4_title = "Adaptivní analytické modely";
$home_seo_side_4_desc = "Systémy strojového učení, které neustále vyhodnocují tržní data a nově vznikající trendy.";
$home_faq_eyebrow = "ZNALOSTNÍ DATABÁZE $site_name";
$home_faq_title = "Často kladené otázky ohledně $site_name";
$home_faq_desc = "Zjistěte více o tom, jak platforma funguje, pro koho je určena a jak umělá inteligence uživatelům pomáhá lépe porozumět podmínkám na trhu s kryptoměnami.";
$home_faq_q1 = "Potřebuji k používání $site_name zkušenosti s obchodováním?";
$home_faq_a1 = "Ne. $site_name je určena pro uživatele s různými úrovněmi zkušeností, včetně lidí, kteří jsou na trzích s kryptoměnami úplnými nováčky. Platforma využívá poznatky z umělé inteligence a nástroje pro monitorování trhu k tomu, aby byly složité informace srozumitelnější.";
$home_faq_q2 = "Co přesně dělá $site_name?";
$home_faq_a2 = "$site_name neustále analyzuje kryptoměnové trhy pomocí umělé inteligence. Platforma vyhodnocuje tržní aktivitu, volatilitu, trendy v sentimentu, podmínky likvidity a data blockchainu s cílem generovat poznatky a analytické signály v reálném čase.";
$home_faq_q3 = "Mohou zkušení obchodníci používat $site_name?";
$home_faq_a3 = "Ano. Přestože je platforma přátelská k začátečníkům, poskytuje také pokročilé analytické nástroje, tržní inteligenci založenou na umělé inteligenci a funkce sledování v reálném čase, které mohou být užitečné pro zkušené účastníky trhu.";
$home_faq_q4 = "Které kryptoměny sleduje $site_name?";
$home_faq_a4 = "Platforma dokáže analyzovat hlavní digitální aktiva, jako jsou Bitcoin, Ethereum, Solana, XRP, Avalanche a další hojně obchodované kryptoměny v závislosti na tržních podmínkách a dostupných zdrojích dat.";
$home_faq_q5 = "Jak se generují AI signály?";
$home_faq_a5 = "$site_name vyhodnocuje současně více tržních faktorů, včetně volatility, obchodní aktivity, podmínek likvidity, trendů v sentimentu a historického chování trhu. Modely AI tyto vstupy kombinují, aby mohly identifikovat měnící se podmínky na trhu a potenciální příležitosti.";
$home_faq_q6 = "Poskytuje $site_name vzdělávací poradenství?";
$home_faq_a6 = "Platforma je navržena tak, aby uživatelům pomohla lépe porozumět podmínkám na trhu prostřednictvím analýzy pomocí umělé inteligence, zjednodušených informací a řízeného přístupu k funkcím platformy. Noví uživatelé mohou prozkoumat kryptoměnové trhy bez nutnosti pokročilých technických znalostí.";
$home_cta_label = "Platforma AI je připravena";
$home_cta_title = "Začněte objevovat $site_name ještě dnes";
$home_cta_desc = "Objevte poznatky o trhu založené na umělé inteligenci, sledování kryptoměn v reálném čase, inteligentní nástroje pro uvědomění si rizik a pokročilé analýzy navržené jak pro začátečníky, tak pro zkušené obchodníky.";
$home_ticker_text = "Monitorování trhu pomocí AI aktivní • Analýza kryptoměn v reálném čase • Dynamika Bitcoinu se posiluje • Konsolidace Etherea detekována • Zjištěny nové tržní příležitosti • Systémy pro monitorování rizik online • AI poznatky se nepřetržitě aktualizují • Navrženo pro začátečníky i zkušené obchodníky";




// ABOUT PAGE
$about_h1 = "O $site_name";
$about_p1 = "$site_name je infrastruktura umělé inteligence nové generace, která má pomoci účastníkům trhu lépe pochopit rychle se vyvíjející ekosystém kryptoměn. Kombinací technologií strojového učení, prediktivní analytiky, systémů tržní inteligence a zpracování dat v reálném čase nabízí $site_name komplexní prostředí pro sledování činnosti digitálních aktiv a určování významného vývoje trhu.";
$about_p2 = "Trh s kryptoměnami funguje nepřetržitě na mnoha burzách, v mnoha jurisdikcích a mezi mnoha poskytovateli likvidity. Ceny, volatilitu, podmínky likvidity a sentiment investorů ovlivňují každou sekundu tisíce proměnných. Projekt $site_name byl vyvinut s cílem strukturovaně a škálovatelně zpracovávat tyto komplexní datové toky.";
$about_h2_vision = "Vize platformy $site_name";
$about_p_vision_1 = "Finanční trhy se stále více orientují na data. Tradiční metody analýzy často těžko drží krok s objemem informací generovaných v moderních ekosystémech s digitálními aktivy. $site_name se snaží překlenout tuto mezeru pomocí aplikace vyspělé výpočetní inteligence, automatizovaných monitorovacích systémů a adaptivních analytických modelů.";
$about_p_vision_2 = "Dlouhodobou vizí společnosti $site_name je poskytovat nástroje tržní inteligence, které budou transparentní a dokážou uživatelům pomoci lépe porozumět struktuře kryptoměnového trhu, rizikovým podmínkám a rodícím se trendům.";
$about_h2_ai = "Infrastruktura umělé inteligence";
$about_p_ai_1 = "Základem sítě $site_name je vícevrstvá infrastruktura umělé inteligence, která je vytvořena tak, aby současně zpracovávala informace z mnoha různých zdrojů trhu.";
$about_p_ai_2 = "Mohou k nim patřit například tyto zdroje:";
$about_li_1 = "Kryptoměnové cenové kanály";
$about_li_2 = "Činnosti z knihy objednávek";
$about_li_3 = "Údaje o pohybu likvidity";
$about_li_4 = "Indikátory volatility";
$about_li_5 = "Hodnoty k transakcím přes blockchain";
$about_li_6 = "Signály nálady na trhu";
$about_li_7 = "Makroekonomický vývoj";
$about_li_8 = "Činnosti institucionálního trhu";
$about_p_ai_3 = "Nepřetržitým vyhodnocováním vztahů mezi těmito proměnnými se $site_name pokouší odhalit modely, které by mohly představovat důležitý tržní kontext.";
$about_h2_risk = "Filozofie informovanosti o rizicích";
$about_p_risk_1 = "Chcete-li se na kryptoměnovém trhu podílet zodpovědně, je třeba si být vědomi rizik. $site_name klade důraz na uvědomování si rizik jako základního stavebního kamene při analyzování digitálních aktiv.";
$about_p_risk_2 = "Na výsledek trhu mohou mít vliv kolísání na trhu, proměnlivost likvidity, záležitosti, které se týkají burzy, regulační změny a širší makroekonomické poměry. Při rozhodování by proto uživatelé nikdy neměli spoléhat na jediný informační zdroj.";
$about_h2_global = "Globální trhy digitálních aktiv";
$about_p_global_1 = "Kryptoměnové trhy fungují globálně a podílí se na nich lidé a subjekty z různých oblastí, oborů i hospodářských prostředí. Infrastruktura $site_name je nastavena na monitorování více segmentů trhu najednou, a proto dává uživatelům možnost sledovat vývoj v nejrůznějších součástech kryptoměnového ekosystému.";
$about_p_global_2 = "S tímto širokým přehledem můžete zlepšit povědomí o střídajících se tržních okolnostech i rodících se trendech.";
$about_h2_why = "Proč si uživatelé vybírají $site_name";
$about_why_li_1 = "Vyspělá tržní inteligence poháněná AI";
$about_why_li_2 = "Sledování kryptoměny v reálném čase";
$about_why_li_3 = "Analytická infrastruktura institucionálního charakteru";
$about_why_li_4 = "Vícefaktorové posouzení trhu";
$about_why_li_5 = "Sledování míry kolísání a platební schopnosti";
$about_why_li_6 = "Škálovatelné nástroje na prozkoumání digitálních aktiv";
$about_why_li_7 = "Analytická metoda uvědomující si rizika";
$about_h2_forward = "Pohled do budoucna";
$about_p_forward_1 = "Jakmile se stanou trhy s digitálními aktivy dospělejšími, dá se předpokládat, že se ještě zvýší váha pokročilé analytické infrastruktury. $site_name se bude i nadále zaměřovat na technologický pokrok, díky němuž snáze porozumíte trhu, získáte větší míru přehlednosti i možnosti lépe se informovat při vstupu do tohoto ekosystému.";
$about_p_forward_2 = "Vlivem probíhajících novinek a nepřetržitého studia míří $site_name k tomu, aby se zasloužil o inteligentnější a chytřejší zítřek ve světě, kde se setkáváme s rozborem digitálních aktiv.";


// CONTACT PAGE
$contact_h1 = "Kontaktujte $site_name";
$contact_intro_1 = "Obraťte se na tým $site_name s žádostí o udělení oprávnění k platformě, nebo se zeptejte na prostředí obchodování s kryptoměnami prostřednictvím AI nebo se seznamte s problematikou analýzy na trhu s digitálními aktivy.";
$contact_intro_2 = "Nezávisle na tom, jestli se zajímáte o autonomní analytiku pro kryptoměny, signální architekturu pro velké instituce, monitorování volatility či informace o trhu přesahující jedinou burzu – naši kolegové vás mohou odkázat na příslušné oddělení.";
$contact_h2_help = "Možnosti asistence";
$contact_li_1 = "Podání žádosti pro přístup na platformu";
$contact_li_2 = "Obvyklé otázky k produktu";
$contact_li_3 = "Údaje pro AI obchodní architekturu";
$contact_li_4 = "Informace z trhu digitálních aktiv";
$contact_li_5 = "Informace o míře rizika a otázky na dodržování smluvních podmínek";
$contact_li_6 = "Podpora s technickým zabezpečením nebo se zaškolením na palubu";
$contact_h2_send = "Předložit požadavek";
$contact_p_send = "Vyplňte, prosím, dotazník umístěný dole. Pracovník společnosti $site_name by se vám pak měl ozvat a poskytnout další informace.";
$contact_h2_info = "Kontaktní informace";
$contact_support_label = "Celková asistence:";
$contact_institutional_label = "Poptávky od institucí:";
$contact_disclaimer = "Upozorňujeme na to, že $site_name nezajišťuje vlastní poradenství ve věcech financí, investic, daní či práv. Každá zmíněná zpráva má výhradně technologický a informační charakter.";

// TERMS PAGE
$terms_h1 = "Obchodní podmínky";
$terms_intro_1 = "Tyto podmínky vymezují oprávnění k webové stránce $site_name, a to v souvislosti s obsahem, charakteristikou platformy, jejími formami, podávání informací a dalšími souvisejícími materiály a její samotné použití.";
$terms_intro_2 = "Využíváním této webové platformy uživatelé potvrzují, že si pečlivě přečetli, plně pochopili a odsouhlasili tyto podmínky pro užívání. Pakliže člověk s těmito ujednáními nesouhlasí, musí užívání stránek opustit.";
$terms_h2_informational = "Informativní smysl";
$terms_p_info_1 = "$site_name přináší detailní zprávy, jenž se vážou na obchodní zázemí v oblastech kryptoměn, které spoléhají na AI, v oboru digitálních aktiv, hodnocení nestálosti, vyšetřování likvidit a na technologiích jako takových.";
$terms_p_info_2 = "Informace na stránkách mají primárně informační a víceméně technologický smysl. Nic z toho se nesmí prezentovat ve smyslu rady a doporučení s financemi a investováním, v oboru práva nebo jako ujištění ve věci obchodování.";
$terms_h2_no_advice = "Tohle není finanční rada";
$terms_p_no_advice_1 = "$site_name nesděluje žádná přizpůsobená a konkrétní doporučení vztahující se na to, zda by uživatelé měli jakýkoli kryptoměnový obnos, minci, finanční aktivum nebo digitální hodnotu pořídit, odprodat, podržet, vložit, vsadit, přesunout či s nimi provádět jinou interakci.";
$terms_p_no_advice_2 = "Uživatelé se před realizací jakéhokoliv ekonomického tahu musí na vlastní pěst zhodnotit všechny získané informace a požádat o doporučení specializované experty.";
$terms_h2_user_responsibility = "Odpovědnost ze strany uživatele";
$terms_p_user_1 = "Zákazníci nesou odpovědnost za svoje vlastní jednání, vyhodnocování rizik, fungování profilu, obchodování, v legislativní rovině i za čerpání všech dostupných systémů prostřednictvím třetích stran.";
$terms_p_user_2 = "Před vstoupením do prostředí kryptotrhu musí zákazníci navíc zabezpečit, že tyto operace spojené s digitálními platidly jsou v souladu se zákonem právě té oblasti, ve které se uživatel zdržuje, a že těmto nástrahám beze zbytku rozumí.";
$terms_h2_ai = "AI s modely pro analýzu";
$terms_p_ai_1 = "$site_name může podat zprávy o umělé inteligenci, odhadovat výstupy, signály z trhů, autonomní analytické informace, ale také technická data ve spojení s provedením.";
$terms_p_ai_2 = "Tyto sítě mnohdy vycházejí z dat o situaci na burzách, ze statistických modelů, z procesů, kdy se stroj učí a informací dodaných stranami třetích osob. Využití těchto platforem nese možnost nepřesnosti, jsou s nimi spojená zpoždění, případně nebývají dostupné vůbec anebo v případě nejasných požadavků nemusejí být schopny dostát těmto specifikům.";
$terms_h2_availability = "Nezaštiťujeme záruku k dostupnosti";
$terms_p_avail_1 = "$site_name nedeklaruje stálou propustnost portálu bez případných nedopatření, trvalou propustnost programu, naprostý pořádek při pracovních procesech, absolutně správné a precizní ohodnocení trhu, ani dosažitelnost konkrétního typu funkcionalit.";
$terms_p_avail_2 = "Vybavení, sdělení, záložky stránek, profily, slučitelnost a výpis možností platformy mohou podléhat obměně, případně v jakémkoli úseku vyvolají zastavení nebo se pozastaví navždycky.";
$terms_h2_third_party = "Pomoc přes třetí strany";
$terms_p_tp_1 = "V těchto internetových materiálech by se mohlo zrcadlit spojení na trhy třetích subjektů, místa se spoustou dostupných objemů, zpracovatele analýz, prostředky pro vzájemnou domluvu, systémy zajišťující hostování případně dodavatele technických kapacit.";
$terms_p_tp_2 = "$site_name neřídí sítě od třetích osob a nezodpovídá za jejich zastižení, tarify, pravidla, omezení ve schránkách, dodržování regulí, technologické vady ani ztráty ze strany koncového uživatele.";
$terms_h2_prohibited = "Nedovolené jednání";
$terms_p_prohibited = "Zákazníci nedisponují právem využít tohoto prostředí, natož tak podobnou digitální výstroj, pro nekorektní aktivity, činy hraničící se zneužitím, obelháváním, s úmyslem pozměnit procesy s možností újmy vůči ostatním.";
$terms_li_1 = "Nepřípustné zkoušky pro připojení se bez plné certifikace";
$terms_li_2 = "Odesílání informací s chybnou a lživou povahou";
$terms_li_3 = "Využití těchto domén na pochybné, ba dokonce nezákonné kroky ve financích";
$terms_li_4 = "Narušování bezpečnosti i obvyklých procesů systému";
$terms_li_5 = "Přivlastňování nebo manipulace s obsahem na stránkách po absenci formálního schválení";
$terms_li_6 = "Snahy, které ignorují opatření zaměřená na compliance";
$terms_h2_ip = "Zákon z hlediska intelektuálních dat";
$terms_p_ip_1 = "Rozvržení celého portálu, podoba textových částí, tvorba vizitky, struktura ovládacích součástí, schémata a s tím spjaté písemnosti nespadají do cizích rukou, s výjimkou $site_name, a neobdrží k nim práva jiní, kromě situace, pro niž je popsáno, že se na ně váže jiné vysvětlení.";
$terms_p_ip_2 = "Klienti nedisponují právem šířit, dávat ve známost, provádět obměny nebo tyto stránky používat se smýšlením osobního příjmu ze zprostředkovaných materiálů, nezíská-li k danému postupu nezbytné oprávnění.";
$terms_h2_liability = "Ohraničení ve věci odpovědnosti";
$terms_p_liab_1 = "V největší přijatelné velikosti podle uplatňovaných legislativ $site_name nevystupuje coby orgán odpovědný za snížené sumy pocházející se zapojením kryptoměny, nestabilních poměrů na trhu, nedostatků v technickém slova smyslu, krachů sítí mimořádného rázu, nepřesných parametrů, kroků klienta a odvolání se na obsah sdílený na této síti.";
$terms_p_liab_2 = "Prohlížení na tomto webovém prostoru podstupují uživatelé na své nebezpečí a nesou sami důsledky z takového činu.";
$terms_h2_changes = "Modifikace nynějších směrnic";
$terms_p_changes_1 = "$site_name zachovává svou pravomoc na úpravu daných Obecných směrnic v různých stádiích fungování. Inovovaná pravidla následně smí vyvěsit v prostorách této domény.";
$terms_p_changes_2 = "Dále uskutečňované návštěvy webu poté, co padlo nějaké přetvoření, značí, že návštěvníci tato novější usnesení vnímají a projevili souhlas.";

// PRIVACY PAGE
$privacy_h1 = "Zásady ochrany osobních údajů";
$privacy_intro_1 = "$site_name bere ohled na ochranu soukromí jednotlivců a trvá na zodpovědném, čitelném a neochvějně zabezpečeném hospodaření s privátními informacemi.";
$privacy_intro_2 = "Tyto směrnice o ochraně osobních prvků vymezují, o jaký typ položek ze soukromých prvků se může jednat, při situaci, že sem uživatelé dorazí a předloží své dotazy přes sdílená odesílací schémata, uchází se o přístup, popřípadě jinak zavadí o komponenty $site_name a všechny styky uvažující právě k této burze.";
$privacy_h2_collect = "Informace, která můžeme sbírat";
$privacy_p_collect_1 = "$site_name si rezervuje právo ukládat hodnoty, které návštěvníci po vlastní ose nabídli formou formulářů a všech kanálů určených ke kontaktování.";
$privacy_li_fname = "Jméno";
$privacy_li_lname = "Příjmení";
$privacy_li_email = "Emailová adresa";
$privacy_li_phone = "Kontaktní telefonní číslo";
$privacy_li_inquiry = "Informace ke vzneseným dotazům";
$privacy_li_technical = "Základní technická data o tom, jak se stránky užívají";
$privacy_h2_use = "Metody uplatnění informací v praxi";
$privacy_p_use_1 = "Získané poznatky poslouží při řešení otázek ze strany lidí, v navedení na informace k vpuštění na burzu a pomohou vyšperkovat technické vlastnosti portálu, pohlídají zabezpečení i oznámí relevantní detaily týkající se servisu ohledně $site_name.";
$privacy_p_use_2 = "Navíc si rezervujeme pověření k uplatnění agregovaných údajů, podle kterých lze ohodnotit výsledek, podoba v uložení obsahu, a které poodhalí vnímání toho, co na našem plácku hostující jedinci vlastně zkouší realizovat.";
$privacy_h2_comm = "Účely při zajišťování dorozumívání";
$privacy_p_comm_1 = "Pakliže spotřebitel upřesní své osobní propojení na něj, $site_name může tyto kontakty uplatnit za podmínek pro vysvětlování vzneseného otázky, nabídnout detaily pro spuštění naostro a zacílit zprávu k žádosti pro vpuštění na aplikaci nebo rozeslat potřebné upozornění, pokud se to týká chodu serveru.";
$privacy_p_comm_2 = "Od spotřebitelů se také může ukázat požadavek k upuštění od dalšího propojení, ovšem jestli je tato možnost proveditelná v jejich státě.";
$privacy_h2_cookies = "Soubory cookie a odborné parametry";
$privacy_p_cookies_1 = "Web disponuje s pomocí prvků cookie, s aplikacemi k analyzování na vícera bázi nebo na systémy sledující vylepšování chodu při cestování internetem za účelem dozorovat kapacity a udržet si v patrnosti pevné opevnění prostředí.";
$privacy_p_cookies_2 = "Ty technické údaje pro účely této činnosti bývají: název stroje, platforma pro surfování a provedení systémových parametrů společně s klikáním napříč weby a poznatky směřující mimo naše končiny, stejně tak běžný dohled ve sférách uplatnění z pohledu uživatele.";
$privacy_h2_protection = "Bezpečnostní krytí na úseku pro zpracování položek";
$privacy_p_prot_1 = "$site_name zasazuje s ohledem na bezpečnost úkonů standardizovaná nařízení při operování na pozadí, na odborné rovině a s dodržením nařízení v úřadu k uchování sdílených dat, aby nepustil na plácek nikoho nepovolaného ani nevytvořil průchod pro nedovolenou aplikaci, poztrácení, nebo odkrytí takových cenných faktů.";
$privacy_p_prot_2 = "Dlužno nicméně dodat, na online trase naprostá záruka nikdy nikomu nebývá slíbena. Návštěvník musí zůstat ostražitý před sdělováním křehké sady údajů s finančním odkazem, včetně hesel nebo tajných dat pro směnu či sdílení diskrétních propustek u sdílených portálů přístupných na webech.";
$privacy_h2_third = "Obstaravatelé služeb třetích stran";
$privacy_p_third_1 = "$site_name má oprávnění pro uplatnění od třetích osob jako je web-hosting, obstarání s analytickými procesy nebo komunikace se sítěmi, s pohlídáním zabezpečení anebo u sítě s e-maily; při prověřování na bází softwarového zpracovatele zvané CRM, popřípadě u infrastruktury navázané k technice.";
$privacy_p_third_2 = "Daní zprostředkovatelé budou moci taková data používat striktně dle toho, co od nich chce u fungování portálu obstarání podobných povinností.";
$privacy_google_choices = 'Můžete spravovat, jak Google využívá informace z vašich návštěv prostřednictvím <a href="http://www.google.com/settings/ads" target="_blank" rel="noopener">Nastavení reklam Google</a>, odhlásit se z inzerce na základě zájmů pomocí <a href="https://tools.google.com/dlpage/gaoptout" target="_blank" rel="noopener">Doplňku prohlížeče pro odhlášení z Google Analytics</a>, nebo si přečíst <a href="https://www.google.com/intl/cs/policies/privacy/" target="_blank" rel="noopener">Zásady ochrany osobních údajů Google</a> pro více detailů.';
$privacy_h2_sale = "Žádný prodej osobních údajů";
$privacy_p_sale_1 = "$site_name nehodlá prodávat osobní údaje odeslané prostřednictvím této webové stránky.";
$privacy_p_sale_2 = "Informace mohou být sdíleny pouze v případě, že je to nezbytné pro provozní účely, dodržování právních předpisů, komunikaci s uživateli, prevenci podvodů nebo zpracování související se službami.";
$privacy_h2_retention = "Uchovávání dat";
$privacy_p_retention = "Osobní údaje mohou být uchovávány po dobu nezbytnou k zodpovězení dotazů, vedení obchodních záznamů, dodržování zákonných povinností, zlepšení komunikace na platformě nebo podpoře bezpečnosti a prevence podvodů.";
$privacy_h2_rights = "Práva uživatelů";
$privacy_p_rights = "V závislosti na platných právních předpisech mohou mít uživatelé práva týkající se přístupu k osobním údajům, jejich opravy, vymazání, námitky, omezení nebo přenositelnosti osobních údajů.";
$privacy_h2_intl = "Mezinárodní použití";
$privacy_p_intl_1 = "$site_name může být přístupný uživatelům z různých jurisdikcí. Pravidla ochrany soukromí se mohou lišit v závislosti na lokalitě.";
$privacy_p_intl_2 = "Používáním tohoto webu uživatelé berou na vědomí, že informace mohou být zpracovávány v souladu s těmito Zásadami ochrany osobních údajů a platnými provozními požadavky.";
$privacy_h2_policy_updates = "Aktualizace zásad";
$privacy_p_updates_1 = "$site_name může tyto Zásady ochrany osobních údajů pravidelně aktualizovat, aby odrážely změny v zákonech, technologiích, interních postupech nebo funkčnosti webových stránek.";
$privacy_p_updates_2 = "Pokračující používání webových stránek po aktualizacích znamená, že uživatelé berou revidované Zásady ochrany osobních údajů na vědomí.";
// COOKIES PAGE
$cookies_h1 = "Zásady používání souborů cookie";
$cookies_intro_1 = "Tyto Zásady používání souborů cookie vysvětlují, jak $site_name používá soubory cookie, analytické technologie a podobné sledovací nástroje, když uživatelé přistupují na tento web nebo s ním interagují.";
$cookies_intro_2 = "Soubory cookie pomáhají zlepšit funkčnost webu, vylepšit uživatelský zážitek, analyzovat výkon a podporovat procesy související s bezpečností.";
$cookies_intro_3 = "Pokračováním v používání tohoto webu uživatelé berou na vědomí, že určité soubory cookie a související technologie mohou být používány v souladu s těmito zásadami.";
$cookies_h2_what = "Co jsou to soubory cookie?";
$cookies_p_what_1 = "Soubory cookie jsou malé textové soubory uložené v zařízení uživatele při návštěvě webové stránky.";
$cookies_p_what_2 = "Tyto soubory mohou obsahovat informace, které pomáhají webovým stránkám rozpoznat vracející se návštěvníky, pamatovat si preference, zlepšit navigaci a měřit výkon webu.";
$cookies_h2_why = "Proč používáme soubory cookie";
$cookies_p_why_1 = "$site_name může používat soubory cookie a podobné technologie k několika účelům.";
$cookies_li_1 = "Zachování funkčnosti webu";
$cookies_li_2 = "Zlepšení uživatelského zážitku";
$cookies_li_3 = "Zapamatování uživatelských předvoleb";
$cookies_li_4 = "Pochopení chování návštěvníků";
$cookies_li_5 = "Měření výkonu webu";
$cookies_li_6 = "Identifikace technických problémů";
$cookies_li_7 = "Podpora bezpečnosti webu";
$cookies_li_8 = "Zabránění zneužití a nesprávnému použití";
$cookies_h2_essential = "Nezbytné soubory cookie";
$cookies_p_ess_1 = "Určité soubory cookie jsou nezbytné pro správné fungování webu.";
$cookies_p_ess_2 = "Tyto soubory cookie pomáhají udržovat bezpečnost, funkčnost navigace, správu relací a další základní operace webu.";
$cookies_p_ess_3 = "Bez nezbytných souborů cookie nemusí některé části webových stránek fungovat správně.";
$cookies_h2_analytics = "Analytické soubory cookie";
$cookies_p_an_1 = "Analytické soubory cookie nám pomáhají pochopit, jak návštěvníci interagují s obsahem webu.";
$cookies_p_an_2 = "Tyto technologie mohou shromažďovat informace týkající se návštěv stránek, vzorců navigace, typů zařízení, konfigurací prohlížeče a obecných metrik používání webu.";
$cookies_p_an_3 = "Analytické informace jsou obvykle agregovány a používány ke zlepšení výkonu webových stránek a uživatelské zkušenosti.";
$cookies_h2_functional = "Funkční soubory cookie";
$cookies_p_fun_1 = "Funkční soubory cookie mohou být použity k zapamatování nastavení a preferencí zvolených uživateli.";
$cookies_p_fun_2 = "Příklady mohou zahrnovat jazykové předvolby, nastavení rozhraní, možnosti zobrazení nebo další funkce přizpůsobení.";
$cookies_h2_third = "Technologie třetích stran";
$cookies_p_third_1 = "$site_name může využívat poskytovatele služeb třetích stran, analytické platformy, reklamní technologie nebo nástroje pro sledování výkonu.";
$cookies_p_third_2 = "Tyto třetí strany mohou umisťovat vlastní soubory cookie nebo sledovací technologie v souladu se svými individuálními zásadami ochrany osobních údajů.";
$cookies_p_third_3 = "$site_name nekontroluje postupy třetích stran v oblasti souborů cookie a doporučuje prostudovat si v příslušných případech dokumentaci o ochraně osobních údajů externích poskytovatelů.";
$cookies_h2_manage = "Správa souborů cookie";
$cookies_p_manage_1 = "Většina moderních prohlížečů umožňuje uživatelům spravovat, omezit nebo odstranit soubory cookie prostřednictvím nastavení prohlížeče.";
$cookies_p_manage_2 = "Uživatelé se mohou rozhodnout soubory cookie zcela zakázat, ačkoli určité funkce webu poté nemusí fungovat tak, jak bylo zamýšleno.";
$cookies_p_manage_3 = "Nastavení prohlížeče obvykle poskytují možnosti, jak:";
$cookies_li_manage_1 = "Blokovat všechny soubory cookie";
$cookies_li_manage_2 = "Smazat stávající soubory cookie";
$cookies_li_manage_3 = "Dostávat oznámení o souborech cookie";
$cookies_li_manage_4 = "Omezit konkrétní kategorie souborů cookie";
$cookies_h2_data = "Ochrana dat";
$cookies_p_data = "Informace související se soubory cookie mohou být zpracovány v souladu s našimi Zásadami ochrany osobních údajů a platnými zákony o ochraně údajů.";
$cookies_h2_policy_updates = "Aktualizace zásad";
$cookies_p_updates_1 = "$site_name může tyto Zásady používání souborů cookie pravidelně aktualizovat, aby odrážely technologické změny, právní požadavky nebo provozní vylepšení.";
$cookies_p_updates_2 = "Pokračující používání webu po aktualizacích představuje potvrzení revidovaných zásad.";
// AML PAGE
$aml_h1 = "Zásady AML";
$aml_intro_1 = "$site_name uznává důležitost povědomí o boji proti praní špinavých peněz, finanční integrity a odpovědné účasti na trzích s digitálními aktivy.";
$aml_intro_2 = "Tyto zásady AML vysvětlují obecné zásady, které $site_name uplatňuje, aby zamezil nezákonnému používání kryptoměnových technologií, podezřelé finanční aktivitě, podvodům, obcházení sankcí, financování terorismu a dalšímu zakázanému chování.";
$aml_h2_purpose = "Účel těchto zásad";
$aml_p_purpose_1 = "Účelem těchto zásad je vytvořit odpovědný rámec pro to, jak $site_name přistupuje k povědomí o boji proti praní špinavých peněz v rámci ekosystému digitálních aktiv.";
$aml_p_purpose_2 = "Trhy s kryptoměnami mohou zahrnovat přeshraniční aktivity, decentralizovanou infrastrukturu, burzy třetích stran a externí peněženkové systémy. Z tohoto důvodu by uživatelé měli pochopit, že povinnosti v oblasti dodržování předpisů se mohou lišit v závislosti na jejich jurisdikci, typu účtu, poskytovateli burzy a místním regulačním prostředí.";
$aml_h2_responsible = "Zodpovědné využívání technologií digitálních aktiv";
$aml_p_resp_1 = "Od uživatelů se očekává, že budou s $site_name a souvisejícími službami digitálních aktiv komunikovat odpovědně, zákonně a v souladu s platnými pravidly.";
$aml_p_resp_2 = "$site_name nepodporuje ani nepodněcuje používání kryptoměnových trhů, obchodních systémů, automatizovaných technologií nebo analytických nástrojů pro nezákonné účely.";
$aml_li_1 = "Praní špinavých peněz";
$aml_li_2 = "Financování terorismu";
$aml_li_3 = "Podvod nebo finanční klamání";
$aml_li_4 = "Obcházení sankcí";
$aml_li_5 = "Manipulace trhu";
$aml_li_6 = "Využití ukradených prostředků nebo ohrožených účtů";
$aml_li_7 = "Jakákoli činnost zakázaná platnými zákony";
$aml_h2_exchange = "Dodržování předpisů na burze třetích stran";
$aml_p_ex_1 = "$site_name může odkazovat na platformy pro digitální aktiva třetích stran nebo s nimi interagovat, nebo poskytovat analytickou infrastrukturu související s prostředím likvidity.";
$aml_p_ex_2 = "Burzy třetích stran, správci, zpracovatelé plateb a poskytovatelé služeb mohou uplatňovat své vlastní postupy dodržování předpisů, včetně ověřování identity, sledování transakcí, prověřování sankcí, omezení účtů, kontroly zdroje prostředků nebo dalších požadavků na ověření.";
$aml_h2_user_responsibility = "Odpovědnost uživatele";
$aml_p_user_1 = "Uživatelé jsou zodpovědní za to, že jejich činnost je v místě jejich působnosti v souladu se zákonem a jakýmikoli povinnostmi uloženými příslušnými regulačními orgány, burzami, finančními institucemi nebo poskytovateli služeb.";
$aml_p_user_2 = "Uživatelé by se neměli pokoušet skrývat vlastnictví, zastírat původ transakcí, poskytovat falešné informace, obcházet procesy ověřování nebo používat infrastrukturu digitálních aktiv způsobem, který by mohl být považován za podezřelý nebo nezákonný.";
$aml_h2_suspicious = "Podezřelá aktivita";
$aml_p_suspicious = "Podezřelá aktivita může zahrnovat chování, které se jeví v rozporu s běžným používáním, pokusy o zneužití obchodních systémů, opakované předkládání zavádějících informací, zapojení do omezených jurisdikcí nebo aktivitu spojenou s podvody, nelegálními finančními prostředky nebo zakázanými službami.";
$aml_h2_evasion = "Žádné obcházení nebo vyhýbání se";
$aml_p_evasion = "Uživatelé se nesmí pokoušet obcházet kontroly shody, technická omezení, systémy pro ověření identity, geografická omezení nebo procesy monitorování rizik.";
$aml_h2_policy_updates = "Aktualizace zásad";
$aml_p_updates_1 = "$site_name může tyto Zásady AML čas od času aktualizovat, aby odrážely změny v regulačních očekáváních, tržních standardech, interních postupech nebo v praxi odvětví digitálních aktiv.";
$aml_p_updates_2 = "Pokračující používání webu po aktualizacích znamená, že uživatelé berou revidované zásady na vědomí.";
// RISK PAGE
$risk_h1 = "Upozornění na rizika";
$risk_intro_1 = "Obchodování s kryptoměnami a účast na digitálních aktivech zahrnují značné riziko. Ceny se mohou rychle pohybovat, likvidita se může neočekávaně změnit a podmínky na trhu se mohou během krátké doby stát vysoce nestabilními.";
$risk_intro_2 = "Toto Upozornění na rizika vysvětluje důležité úvahy, které by si uživatelé měli přečíst, než začnou pracovat s trhy s digitálními aktivy, technologiemi pro automatizované obchodování, tržními signály generovanými umělou inteligencí nebo analytickou infrastrukturou související s kryptoměnami.";
$risk_h2_no_guarantee = "Žádné zaručené výsledky";
$risk_p_no_guarantee_1 = "$site_name nezaručuje zisky, návratnost investic, úspěšnost obchodování, přesnost signálu, nepřerušený přístup nebo pozitivní finanční výsledky.";
$risk_p_no_guarantee_2 = "Jakékoli příklady, statistiky, prvky rozhraní, metriky výkonu, indikátory signálů nebo simulace trhu zobrazené na tomto webu jsou poskytovány pouze pro informační a ilustrativní účely.";
$risk_h2_volatility = "Volatilita trhu s kryptoměnami";
$risk_p_vol_1 = "Trhy s digitálními aktivy jsou vysoce nestálé. Ceny mohou být ovlivněny nedostatkem likvidity, makroekonomickými zprávami, vývojem předpisů, výpadky burz, událostmi v oblasti blockchainu, sentimentem investorů, pákovým efektem nebo manipulací s trhem.";
$risk_p_vol_2 = "Volatilita může vést k rychlým ztrátám, náhlým cenovým mezerám, skluzům (slippage), likvidačním událostem nebo nemožnosti provádět transakce za očekávané ceny.";
$risk_h2_ai = "Omezení AI signálů";
$risk_p_ai_1 = "Systémy umělé inteligence mohou analyzovat velké množství tržních dat, ale nemohou odstranit nejistotu.";
$risk_p_ai_2 = "Indikátory poháněné umělou inteligencí, obchodní signály, klasifikace trhu a prediktivní modely mohou být neúplné, zpožděné, nesprávné nebo nevhodné pro osobní finanční situaci uživatele.";
$risk_p_ai_3 = "Při obchodování, investování nebo finančních rozhodnutích by se uživatelé neměli spoléhat výhradně na jakýkoli signál AI.";
$risk_h2_tech = "Technologie a riziko provádění";
$risk_p_tech_1 = "Obchodní technologie může být ovlivněna problémy s připojením k internetu, přerušeními na straně serveru, latencí, chybami softwaru, selháními API, výpadky na burze, nesprávnými datovými kanály nebo omezeními infrastruktury třetích stran.";
$risk_p_tech_2 = "$site_name nezaručuje nepřetržitý přístup k datům, signálům, funkcím platformy, systémům třetích stran nebo prováděcím prostředím.";
$risk_h2_liquidity = "Likvidita a burzovní riziko";
$risk_p_liq_1 = "Likvidita se může na různých burzách a u různých digitálních aktiv výrazně lišit. Některé trhy mohou v obdobích stresu zaznamenat malou hloubku objednávek, široké spready, zpožděné provádění nebo prudký pohyb cen.";
$risk_p_liq_2 = "Burzy třetích stran mohou ukládat poplatky, limity, omezení, kontroly účtů, zpoždění výběrů, pozastavení obchodování nebo geografická omezení.";
$risk_h2_regulatory = "Regulační riziko";
$risk_p_reg_1 = "Předpisy pro digitální aktiva se mohou rychle měnit a mohou se lišit v různých zemích, regionech a jurisdikcích.";
$risk_p_reg_2 = "Regulační změny mohou ovlivnit přístup na trh, dostupnost aktiv, operace na burze, ohlašovací povinnosti, daně, omezení obchodování nebo funkčnost platformy.";
$risk_h2_user_responsibility = "Odpovědnost uživatele";
$risk_p_user_1 = "Za posouzení rizik, porozumění platným zákonům, přezkoumání své finanční situace a nezávislé rozhodování odpovídají výhradně uživatelé.";
$risk_p_user_2 = "$site_name neposkytuje personalizované finanční, investiční, právní, účetní ani daňové poradenství.";
$risk_h2_advice = "Vyhledejte odbornou radu";
$risk_p_advice_1 = "Před přijetím významných finančních rozhodnutí týkajících se kryptoměn, obchodních systémů, automatizovaných technologií nebo investic do digitálních aktiv by se uživatelé měli poradit s kvalifikovanými odborníky.";
$risk_p_advice_2 = "Používáním tohoto webu uživatelé berou na vědomí, že chápou rizika spojená s trhy s digitálními aktivy a přijímají odpovědnost za svá vlastní rozhodnutí.";
// EXCHANGES PAGE
$exchanges_h1 = "Podporované burzy";
$exchanges_intro_1 = "$site_name je navržen s ohledem na přístup k informacím z různých trhů, který vyhodnocuje aktivitu digitálních aktiv v široké škále obchodních prostředí s kryptoměnami.";
$exchanges_intro_2 = "Moderní krypto trhy fungují prostřednictvím mnoha burz, poskytovatelů likvidity, derivátových platforem a obchodních ekosystémů. Pochopení aktivity v těchto prostředích je nezbytné pro budování komplexní tržní inteligence.";
$exchanges_h2_philosophy = "Filozofie pokrytí trhu";
$exchanges_p_phil_1 = "Místo spoléhání se na jediné místo je $site_name postaven na konceptu analýzy celého trhu.";
$exchanges_p_phil_2 = "Cenotvorba, podmínky likvidity, chování volatility a aktivita institucí u kryptoměn se na různých burzách často liší. Sledováním širších tržních podmínek mohou analytické modely získat další kontext týkající se nových trendů a potenciálních anomálií.";
$exchanges_h2_spot = "Sledování spotového trhu";
$exchanges_p_spot_1 = "Spotové burzy představují významnou část celosvětové aktivity v oblasti digitálních aktiv.";
$exchanges_p_spot_2 = "Systémy tržní inteligence mohou vyhodnocovat data ze spotového trhu, včetně:";
$exchanges_li_spot_1 = "Cenová aktivita";
$exchanges_li_spot_2 = "Hloubka likvidity";
$exchanges_li_spot_3 = "Struktura knihy objednávek";
$exchanges_li_spot_4 = "Objem obchodování";
$exchanges_li_spot_5 = "Chování rozpětí bid-ask";
$exchanges_li_spot_6 = "Podmínky tržní nerovnováhy";
$exchanges_h2_deriv = "Derivátové trhy";
$exchanges_p_deriv_1 = "Kryptoměnové deriváty hrají v širším ekosystému digitálních aktiv stále důležitější roli.";
$exchanges_p_deriv_2 = "Futures, perpetual kontrakty, opce a obchodní aktivity s pákovým efektem mohou ovlivnit tržní sentiment, podmínky volatility a směrové momentum.";
$exchanges_p_deriv_3 = "Analytická infrastruktura může při hodnocení širších tržních podmínek vyhodnocovat informace související s deriváty.";
$exchanges_h2_liquidity = "Analýza likvidity";
$exchanges_p_liq_1 = "Likvidita zůstává jedním z nejdůležitějších faktorů ovlivňujících stabilitu trhu a kvalitu provádění příkazů.";
$exchanges_p_liq_2 = "$site_name může analyzovat podmínky likvidity na více obchodních místech za účelem identifikace:";
$exchanges_li_liq_1 = "Koncentrace likvidity";
$exchanges_li_liq_2 = "Náhlé odčerpání likvidity";
$exchanges_li_liq_3 = "Tlak knihy objednávek";
$exchanges_li_liq_4 = "Události tržní nerovnováhy";
$exchanges_li_liq_5 = "Abnormální chování při obchodování";
$exchanges_h2_availability = "Dostupnost burzy";
$exchanges_p_avail_1 = "Dostupnost burzy se může lišit v závislosti na geografické poloze, jurisdikci, způsobilosti účtu, regulačních požadavcích a technických omezeních.";
$exchanges_p_avail_2 = "Některé burzy nebo služby nemusí být dostupné všem uživatelům a mohou na ně uvalovat vlastní omezení, požadavky na ověření, poplatky a provozní zásady.";
$exchanges_h2_third = "Platformy třetích stran";
$exchanges_p_third_1 = "Veškeré odkazy na burzy, místa konání, makléře, správce nebo poskytovatele trhu slouží výhradně pro informační účely.";
$exchanges_p_third_2 = "$site_name nevlastní, neprovozuje, nekontroluje ani negarantuje služby burz třetích stran.";
$exchanges_p_third_3 = "Uživatelé nesou odpovědnost za vyhodnocení jakékoli burzy, obchodního místa nebo služby v oblasti digitálních aktiv před jejich použitím.";
$exchanges_h2_monitoring = "Nepřetržité monitorování trhu";
$exchanges_p_mon_1 = "Kryptoměnové trhy fungují nepřetržitě, často 24 hodin denně, sedm dní v týdnu.";
$exchanges_p_mon_2 = "S tím, jak se vyvíjí struktura trhu, vznikají nové burzy, dochází k migraci likvidity a mění se obchodní aktivity.";
$exchanges_p_mon_3 = "$site_name se neustále snaží udržovat si přehled o měnících se tržních podmínkách prostřednictvím širokého analytického pokrytí ekosystému digitálních aktiv.";

// ==========================================
// RISK WARNING PAGE
// ==========================================
$page_title_risk_warning = "Upozornění na rizika | $site_name";
$page_description_risk_warning = "Pochopte rizika automatizovaného obchodování s kryptoměnami prostřednictvím $site_name, včetně volatility trhu, prováděcího rizika a regulačních ohledů.";
$risk_warning_breadcrumb_name = "Upozornění na rizika";
$risk_warning_title = "Upozornění na rizika";
$risk_warning_intro = "Porozumění rizikům je prvním krokem k sebevědomému obchodování.";

$risk_warning_ai_heading = "Jak náš AI systém pomáhá řídit rizika:";
$risk_warning_ai_1 = "<strong>Algoritmická efektivita a obchodování bez emocí:</strong> Pokročilé algoritmy analyzují tržní signály, aby objektivně a v optimálních momentech provedly obchody.";
$risk_warning_ai_2 = "<strong>Strategie založené na datech:</strong> Strategie nevycházejí z dohadů, nýbrž z ověřených tržních vzorců a analýzy v reálném čase.";
$risk_warning_ai_3 = "<strong>Flexibilní nastavení a plná kontrola:</strong> Kdykoli si můžete upravit své rizikové parametry. Na řídicím panelu transparentně sledujte všechny zůstatky a obchody – bez skrytých poplatků a s neomezenými výběry.";

$risk_warning_disclaimer = "<strong>Upozornění:</strong> Obchodování s sebou vždy nese riziko. Automatizované systémy (včetně umělé inteligence) nezaručují zisk, mohou selhat kvůli softwarovým chybám nebo neočekávaným tržním událostem a vyžadují sledování ze strany uživatele. Minulá výkonnost není indikátorem budoucích výsledků. Tato platforma slouží výhradně pro informační a marketingové účely a neposkytuje finanční poradenství.";

$risk_warning_s1_heading = "1. Obecná a kryptoměnová tržní rizika";
$risk_warning_s1_intro = "Kryptoměny jsou vysoce volatilní spekulativní aktiva, s nimiž se obchoduje 24/7 s minimálním regulačním dohledem ve většině jurisdikcí.";
$risk_warning_s1_1 = "Hodnoty mohou v krátkých časových úsecích dramaticky kolísat, což může vést až k úplné ztrátě investovaného kapitálu.";
$risk_warning_s1_2 = "Tržní hodnoty mohou být silně ovlivněny regulačními aktualizacemi, technickým vývojem, narušením bezpečnosti nebo širšími makroekonomickými událostmi.";
$risk_warning_s1_3 = "Některá aktiva mohou zcela ztratit svou hodnotu. Investujte pouze prostředky, které si můžete dovolit ztratit.";

$risk_warning_s2_heading = "2. Prováděcí, likviditní a páková rizika";
$risk_warning_s2_1 = "<strong>Volatilita trhu a likvidita:</strong> Extrémní pohyby cen (10–20 % denně a více) nebo nízká likvidita (zejména u menších mincí) mohou vést ke zpožděním, výpadkům platformy a značným skluzům při provádění. Příkazy typu stop-loss nezaručují limity ztrát v extrémních podmínkách.";
$risk_warning_s2_2 = "<strong>Pákové efekty a maržová rizika:</strong> Pákové produkty zesilují zisky i ztráty, což znamená, že můžete ztratit více, než byl váš počáteční vklad. Přibližně 70–80 % účtů retailových investorů přichází při obchodování s pákovými produkty o peníze.";

$risk_warning_s3_heading = "3. Technická rizika, kybernetická bezpečnost a rizika třetích stran";
$risk_warning_s3_1 = "<strong>Technické faktory:</strong> Online obchodování je neodmyslitelně spjato s riziky přerušení internetového připojení, hardwarových či softwarových chyb a nedostupnosti služeb.";
$risk_warning_s3_2 = "<strong>Kybernetická bezpečnost:</strong> Účty s kryptoměnami jsou častým terčem phishingu, malwaru a hacknutí. Transakce jsou nevratné; kompromitace vašich přístupových údajů může vést k trvalé ztrátě.";
$risk_warning_s3_3 = "<strong>Platformy třetích stran:</strong> Tento web může uživatele přesměrovat na platformy třetích stran. Nemáme kontrolu, neschvalujeme ani nezaručujeme jejich bezpečnost, operace nebo solventnost. Před vkladem peněz na externí platformy vždy proveďte vlastní důkladné prověření.";

$risk_warning_s4_heading = "4. Regulační, daňová a závěrečná ustanovení";
$risk_warning_s4_1 = "<strong>Právní shoda a daně:</strong> Regulační rámce se výrazně liší a rychle se mění. Uživatelé nesou výhradní odpovědnost za to, že jejich obchodní aktivity jsou v souladu s místními zákony, a za plnění svých vlastních daňových povinností.";
$risk_warning_s4_2 = "<strong>Žádné garance zisku:</strong> Neexistuje nic jako „bezpečné“ nebo bezrizikové obchodování s kryptoměnami. Jakékoli údaje o výnosech nebo příklady výkonnosti jsou čistě hypotetické.";
$risk_warning_s4_3 = "<strong>Vhodnost:</strong> Pokud plně nerozumíte rizikům, spoléháte se na nezbytné prostředky nebo obchodujete s vypůjčenými penězi, není pro vás obchodování s kryptoměnami vhodné. V případě nejistoty se obraťte na nezávislého licencovaného finančního poradce.";

$risk_warning_contact = "<strong>Kontakt:</strong> V případě jakýchkoli dotazů týkajících se tohoto prohlášení nebo pro odeslání dotazu se prosím obraťte na náš oficiální tým zákaznické podpory prostřednictvím kontaktního formuláře na našem webu.";
$footer_risk_warning = "Upozornění na rizika";

$lang_loaded = true;

?>
