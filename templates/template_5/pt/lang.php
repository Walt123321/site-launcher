<?php
require __DIR__ . '/../lang.php';

// Identity / config variables are intentionally NOT overridden here — they are inherited
// as-is from the root lang.php so brand/pricing swaps still work correctly at deploy time:
// $site_name, $site_url, $site_domain, $app_price, $app_currency, $rating_value,
// $rating_count, $review_count, $country_name, $support_email, $institutional_email.

$site_lang = 'pt-PT';
$form_language = 'pt'; // matches this page's own language, not the offer's global default

// Reviews
$review_1_author = "Investidor Privado";
$review_2_author = "Trader Independente";
$review_3_author = "Trader de Ativos Digitais";
$review_4_author = "Buscador de Rendimento Passivo";

// META TITLE / DESCRIPTION (per page)
$home_meta_title = "$site_name — Site Oficial | Plataforma de Negociação";
$home_meta_description = "$site_name ⭐ — plataforma inteligente de negociação com IA para análise de mercado em tempo real e sinais claros de negociação ⚡ Experimente ferramentas e informações inteligentes com uma visita guiada.";

$quiz_consultant_name = 'Sofia';
$quiz_consultant_role = 'Assistente de Integração';

$quiz_text_welcome   = "Olá! Sou a $quiz_consultant_name, a sua assistente pessoal de integração no $site_name. Excelentes notícias! O seu acesso está oficialmente pré-aprovado. Permita-nos configurar o seu perfil profissional agora!";
$quiz_text_q1 = "Para garantir total conformidade regulamentar e legal, por favor confirme o seu país de residência atual: $country_name";
$quiz_text_a1_yes    = "Sim, esta é a minha residência atual";
$quiz_text_a1_no     = "Não";

$quiz_text_q2 = "Perfeito. Selecione a categoria de idade apropriada para encontrar os instrumentos financeiros mais adequados:";

$quiz_text_q3        = "Existe uma conta bancária ativa ou um cartão de crédito disponível para receber pagamentos regulares diários de dividendos?";
$quiz_text_a3_yes    = "Sim, tenho uma conta ativa disponível";
$quiz_text_a3_no     = "Ainda não disponível";

$quiz_text_q4        = "Por favor, especifique a fonte primária de rendimento pessoal. (Este parâmetro ajuda a personalizar as configurações de gestão de risco do sistema).";
$quiz_text_a4_1      = "Emprego Oficial / Trabalhador Independente";
$quiz_text_a4_2      = "Rendimento Passivo / Poupanças Pessoais";
$quiz_text_a4_3      = "Outras fontes";

$quiz_text_q5 = "Excelente! O último passo é uma breve verificação telefónica do nosso gestor para confirmar o seu registo. As chamadas são feitas das 11:00 às 20:00. Poderá atender a chamada?";
$quiz_text_a5_yes    = "Sim, este horário é conveniente para a chamada";
$quiz_text_a5_no     = "Por favor, inicie a chamada imediatamente";

$quiz_text_loader    = "A analisar as opções solicitadas e a inicializar os parâmetros de configuração segura da conta...";
$quiz_text_final_ttl = "Conta Autorizada com Sucesso! 🎉 O espaço de trabalho digital seguro está totalmente configurado. Conclua os passos finais de verificação abaixo para garantir pagamentos diários:";

$quiz_placeholder_fname = "Nome";
$quiz_placeholder_lname = "Apelido";
$quiz_placeholder_email = "Endereço de E-mail";
$quiz_placeholder_phone = "Número de Telefone";
$quiz_btn_submit = "Ativar Negociação";
$quiz_text_typing       = "está a escrever uma mensagem...";
$quiz_text_processing   = "A processar o pedido...";

$about_meta_title = "Sobre o $site_name | Infraestrutura de Negociação de Criptomoedas com IA";
$about_meta_description = "Saiba mais sobre o $site_name, uma avançada infraestrutura de negociação de criptomoedas baseada em IA e focada em análises preditivas, inteligência de mercado, monitorização de volatilidade e pesquisa de ativos digitais.";

$contact_meta_title = "Contactos do $site_name | Solicitar Acesso à Plataforma de Negociação com IA";
$contact_meta_description = "Contacte o $site_name para solicitar acesso, perguntar sobre a infraestrutura de negociação de criptomoedas com IA, mercados suportados, inteligência de ativos digitais ou integração na plataforma.";

$terms_meta_title = "Termos e Condições | Termos do Site e da Plataforma $site_name";
$terms_meta_description = "Leia os Termos e Condições do $site_name que cobrem o uso do site, conteúdo informativo, infraestrutura de negociação com IA, responsabilidade do utilizador, serviços de terceiros e limitações de risco.";

$privacy_meta_title = "Política de Privacidade | $site_name Proteção de Dados e Privacidade do Utilizador";
$privacy_meta_description = "Leia a Política de Privacidade do $site_name para entender como recolhemos, usamos, protegemos, armazenamos e gerimos informações pessoais enviadas através da nossa infraestrutura de negociação de criptomoedas com IA.";

$cookies_meta_title = "Política de Cookies | Cookies e Monitorização do Site $site_name";
$cookies_meta_description = "Saiba como o $site_name utiliza cookies, tecnologias de análise, ferramentas de controlo de desempenho e serviços de funcionalidade do site para melhorar a experiência do utilizador e o desempenho da plataforma.";

$aml_meta_title = "Política de AML | $site_name Padrões de Prevenção do Branqueamento de Capitais";
$aml_meta_description = "Reveja a Política AML do $site_name, incluindo o uso responsável de ativos digitais, sensibilização para o combate ao branqueamento de capitais, atividades proibidas, princípios de monitorização e expectativas de conformidade.";

$risk_meta_title = "Aviso de Risco | Declaração de Risco de Negociação de Criptomoedas do $site_name";
$risk_meta_description = "Leia a Declaração de Risco do $site_name para compreender a volatilidade das criptomoedas, incerteza na negociação, limitações dos sinais de IA, risco de mercado, risco de liquidez e responsabilidade do utilizador.";

$exchanges_meta_title = "Bolsas Suportadas | Cobertura de Inteligência de Mercado do $site_name";
$exchanges_meta_description = "Explore os tipos de bolsas de criptomoedas, plataformas de liquidez e mercados de ativos digitais monitorizados pela infraestrutura de inteligência de mercado alimentada por IA do $site_name.";

$about_breadcrumb_name = "Sobre o $site_name";
$contact_breadcrumb_name = "Contactos do $site_name";
$terms_breadcrumb_name = "Termos e Condições";
$privacy_breadcrumb_name = "Política de Privacidade";
$cookies_breadcrumb_name = "Política de Cookies";
$aml_breadcrumb_name = "Política de AML";
$risk_breadcrumb_name = "Aviso de Risco";
$exchanges_breadcrumb_name = "Bolsas Suportadas";

$hero_text = "Experimente uma nova era de negociação com a nossa avançada plataforma de negociação de criptomoedas. Com a tecnologia de IA do $site_name, pode otimizar os seus retornos e tomar decisões de investimento informadas.";

// HEADER / NAV / FOOTER
$logo_subtitle = "Infraestrutura de Negociação IA";
$nav_signals = "Sinais";
$nav_reviews = "Avaliações";
$nav_about = "Sobre";
$nav_exchanges = "Bolsas";
$nav_exchanges_full = "Bolsas Suportadas";
$nav_risk = "Risco";
$nav_risk_full = "Aviso de Risco";
$nav_faq = "FAQ";
$nav_privacy = "Política de Privacidade";
$nav_terms = "Termos e Condições";
$nav_cookies = "Política de Cookies";
$nav_cookies_short = "Cookies";
$nav_aml = "Política de AML";
$nav_contact_us = "Contacte-nos";
$nav_contact = "Contactos";
$nav_get_started = "Começar";
$header_ai_status = "Núcleo de IA Operacional";
$header_menu_aria = "Menu";
$footer_platform = "Plataforma";
$footer_resources = "Recursos";
$footer_contact_title = "Contactos";
$footer_ai_signals = "Sinais de IA";
$footer_about_link = "Sobre o $site_name";
$footer_description = "O $site_name é uma infraestrutura de negociação de criptomoedas avançada, orientada por IA e focada em análises preditivas, inteligência de mercado de nível institucional, modelagem de volatilidade, sistemas de execução neural e gestão automatizada de risco.";
$footer_monitoring = "Monitorização de Infraestrutura IA 24/7";
$footer_global_markets = "Mercados Globais de Ativos Digitais";
$footer_disclaimer_title = "Aviso de Risco";
$footer_disclaimer_p1 = "A negociação de criptomoedas e o investimento em ativos digitais envolvem riscos financeiros substanciais e podem não ser adequados para todos os investidores. A volatilidade do mercado, falhas de liquidez, falhas tecnológicas, alterações regulamentares e condições macroeconómicas podem afetar significativamente o desempenho dos ativos.";
$footer_disclaimer_p2 = "O $site_name fornece infraestrutura analítica orientada por IA, inteligência de mercado preditiva e tecnologias de negociação automatizadas. Nada neste site constitui aconselhamento financeiro, de investimento, jurídico ou fiscal.";
$footer_disclaimer_p3 = "O desempenho passado não garante resultados futuros. Os utilizadores devem avaliar os riscos de forma independente antes de interagirem com mercados de criptomoedas ou sistemas de negociação automatizados.";
$footer_rights = "Todos os direitos reservados.";
$footer_lang_label = "Idioma";

// HOME FORM
$home_form_fname = "Nome";
$home_form_lname = "Apelido";
$home_form_email = "E-mail";
$home_form_submit_access = "Obter Acesso";
$home_form_submit_platform = "Solicitar Acesso à Plataforma";

// CONTACT FORM
$contact_form_fname = "Nome";
$contact_form_lname = "Apelido";
$contact_form_email = "E-mail";
$contact_form_submit = "Solicitar Acesso";

// HOME LABELS
$home_label_ai_confidence = "Confiança da IA";
$home_label_update_speed = "Velocidade de Atualização";
$home_label_market_mode = "Modo de Mercado";
$home_label_market_condition = "Condição de Mercado";
$home_label_buyer_activity = "Atividade de Compradores";
$home_label_market_activity = "Atividade de Mercado";
$home_label_risk_level = "Nível de Risco";
$home_label_updated = "Atualizado";
$home_label_live_analysis = "ANÁLISE AO VIVO";

// JS
$home_js_sec_ago = "seg atrás";
$js_sec_ago = "seg atrás";
$js_close_notification = "Fechar notificação";

$js_signal_long_direction = "Probabilidade de tendência de alta a aumentar";
$js_signal_long_market = "Expansão Controlada";
$js_signal_long_pressure_label = "Pressão de Liquidez";
$js_signal_long_pressure = "Altista (Bullish)";

$js_signal_short_direction = "Pressão de baixa a aumentar";
$js_signal_short_market = "Alta Instabilidade";
$js_signal_short_pressure_label = "Pressão de Risco";
$js_signal_short_pressure = "Baixista (Bearish)";

$js_signal_watch_direction = "Zona de consolidação detetada";
$js_signal_watch_market = "Consolidação Neutra";
$js_signal_watch_pressure_label = "Fluxo Institucional";
$js_signal_watch_pressure = "Estável";

$js_hero_long_pair = "Expansão de Momentum BTC/USD";
$js_hero_long_regime = "Altista";
$js_hero_long_feed_1 = "Expansão de liquidez BTC detetada";
$js_hero_long_feed_2 = "Pressão do fluxo de ordens a tornar-se positiva";
$js_hero_long_feed_3 = "Modelo de IA confirma continuação altista";

$js_hero_watch_pair = "Compressão de Volatilidade ETH/USD";
$js_hero_watch_regime = "Neutro";
$js_hero_watch_feed_1 = "Zona de compressão ETH detetada";
$js_hero_watch_feed_2 = "A IA aguarda por uma confirmação mais forte";
$js_hero_watch_feed_3 = "A liquidez permanece estável";

$js_hero_short_pair = "Expansão de Risco SOL/USD";
$js_hero_short_regime = "Evitar Risco (Risk-Off)";
$js_hero_short_feed_1 = "Pressão de baixa em SOL detetada";
$js_hero_short_feed_2 = "Modelo de risco sinaliza expansão da volatilidade";
$js_hero_short_feed_3 = "A IA reduz a exposição altista";

// JS — live user popup actions
$js_live_action_1 = "juntou-se ao $site_name a partir de";
$js_live_action_2 = "solicitou acesso à plataforma a partir de";
$js_live_action_3 = "iniciou a monitorização de sinais IA a partir de";
$js_live_action_4 = "ativou a análise de mercado a partir de";
$js_live_action_5 = "abriu o painel institucional a partir de";
$js_live_action_6 = "conectou-se ao $site_name a partir de";

// HOME PAGE
$home_hero_label = "Plataforma de Criptomoedas com IA Para Todos os Níveis";
$home_hero_title = "Plataforma $site_name";
$home_hero_desc = "O $site_name ajuda principiantes e traders experientes a explorar os mercados de criptomoedas com informações geradas por IA, monitorização de mercado em tempo real, ferramentas de consciencialização de risco e suporte guiado na plataforma.";
$home_hero_feat_1 = "Informações de mercado com IA simples para novos utilizadores";
$home_hero_feat_2 = "Monitorização de criptomoedas e atualização de sinais em tempo real";
$home_hero_feat_3 = "Ferramentas cientes de risco para decisões mais inteligentes";
$home_hero_feat_4 = "Análises avançadas para traders experientes";
$home_btn_request_access = "Obter Acesso à Plataforma";
$home_btn_view_signals = "Ver Sinais IA";
$home_trust_data_label = "Pontos de Dados de Mercado Analisados";
$home_trust_confidence_label = "Confiança Média do Sinal";
$home_trust_monitoring_label = "Monitorização de Mercado com IA";
$home_terminal_title = "Vista de Mercado IA Guiada do $site_name";
$home_terminal_insight_label = "Visão Atual de Mercado da IA";
$home_terminal_feed_1 = "A atividade do mercado BTC está a mostrar um ímpeto mais forte";
$home_terminal_feed_2 = "O movimento ETH está a ser monitorizado para confirmação";
$home_terminal_feed_3 = "Assistente de IA destaca uma possível zona de oportunidade";
$home_trust_strip_1 = "Ideias de IA Para Principiantes e Traders Experientes";
$home_trust_strip_2 = "Monitorização do Mercado de Criptomoedas 24/7";
$home_trust_strip_3 = "Análise de Risco e Oportunidades em Tempo Real";
$home_trust_strip_4 = "Acesso Guiado a Ferramentas de Negociação Avançadas";
$home_signals_eyebrow = "NÚCLEO IA AO VIVO DO $site_name";
$home_signals_title = "Sinais de Mercado IA em Tempo Real para Decisões Cripto Mais Inteligentes";
$home_signals_desc = "O $site_name monitoriza continuamente a atividade do mercado de criptomoedas, a volatilidade, as condições de liquidez, as tendências de sentimento e os dados da blockchain para gerar insights baseados em IA e sinais de mercado em tempo real para principiantes e traders experientes.";
$home_signals_terminal_title = "Motor de Sinais IA $site_name";
$home_signal_btc_sub = "Ímpeto Positivo Detetado";
$home_signal_btc_dir = "Probabilidade de tendência de alta a aumentar";
$home_signal_btc_market = "Ímpeto Positivo";
$home_signal_btc_activity = "Forte";
$home_signal_eth_sub = "A Aguardar Confirmação do Mercado";
$home_signal_eth_dir = "Movimento lateral detetado";
$home_signal_eth_market = "Tendência Neutra";
$home_signal_eth_activity = "Estável";
$home_signal_sol_sub = "Risco de Mercado Aumentado Detetado";
$home_signal_sol_dir = "Pressão de baixa a aumentar";
$home_signal_sol_market = "Alta Volatilidade";
$home_signal_sol_risk = "Elevado";
$home_why_eyebrow = "PORQUÊ O $site_name?";
$home_why_title = "Ferramentas de Criptomoedas IA Construídas para Qualquer Nível de Experiência";
$home_why_desc_1 = "O $site_name ajuda os utilizadores a entenderem melhor os mercados de criptomoedas através de inteligência artificial, monitorização em tempo real, informações de mercado e ferramentas cientes de risco. Quer esteja a explorar criptomoedas pela primeira vez ou já tenha experiência em negociação, a plataforma foi desenvolvida para tornar a análise de mercado mais acessível e fácil de compreender.";
$home_why_desc_2 = "A infraestrutura do $site_name avalia continuamente a atividade do mercado, os movimentos de preços, as condições de liquidez, as tendências de sentimento e os dados da blockchain para identificar oportunidades emergentes e alterações nas condições do mercado. Os novos utilizadores podem beneficiar de suporte guiado na plataforma, enquanto os traders experientes podem explorar ferramentas de análise avançadas e inteligência de mercado baseada em IA.";
$home_flow_1 = "Monitorização de Mercado";
$home_flow_2 = "Análise por IA";
$home_flow_3 = "Deteção de Oportunidades";
$home_flow_4 = "Avaliação de Risco";
$home_flow_5 = "Visões Acionáveis";
$home_reviews_eyebrow = "COMUNIDADE DO $site_name";
$home_reviews_title = "O que os Utilizadores Dizem Sobre o $site_name";
$home_reviews_desc = "Desde utilizadores de criptomoedas iniciantes a traders experientes, as pessoas utilizam o $site_name para entenderem melhor as condições do mercado, explorar análises baseadas em IA e abordar as decisões sobre criptomoedas com mais clareza.";
$home_review_1_text = "Antes de descobrir o $site_name, sentia-me sobrecarregado com a quantidade de informação no espaço das criptomoedas. Todas as plataformas pareciam complicadas e eu tinha constantemente medo de cometer erros. O que mais aprecio no $site_name é o quão acessível tudo parece. Os insights da IA ajudaram-me a compreender as condições do mercado sem me sentir perdido, e a plataforma deu-me a confiança necessária para começar a aprender ao meu próprio ritmo. Estou genuinamente grato por quão mais fácil a experiência se tornou, em comparação com o que eu esperava.";
$home_review_1_tag = "Início Seguro e Fácil";
$home_review_badge = "UTILIZADOR VERIFICADO";
$home_review_2_text = "Passei meses a olhar para plataformas de criptomoedas sem nunca me sentir suficientemente confortável para dar o primeiro passo. O $site_name mudou completamente essa experiência. A plataforma tornou a informação de mercado mais fácil de entender e nunca senti que precisava de anos de experiência em negociação só para usar as ferramentas. O que mais me impressionou foi o equilíbrio entre a simplicidade e a análise de IA poderosa. Sinto como se tivesse orientação disponível sempre que preciso. Estou grato por ter encontrado uma plataforma que me ajudou a aprender sem me sentir intimidado.";
$home_review_2_tag = "Experiência de aprendizagem mais fácil";
$home_review_3_text = "Já testei muitas plataformas de análise de mercado, e o $site_name destaca-se por equilibrar a acessibilidade com uma profundidade analítica séria. Os novos utilizadores podem compreender a plataforma rapidamente, enquanto os traders experientes continuam a obter sinais de mercado úteis baseados em IA, monitorização de risco e inteligência de criptomoedas em tempo real. Este equilíbrio é difícil de encontrar. A plataforma fornece contexto de mercado significativo sem sobrecarregar os utilizadores, o que é algo que muito poucas ferramentas de criptomoedas conseguem alcançar.";
$home_review_3_tag = "Ferramentas avançadas com usabilidade simples";
$home_review_span_1 = "Novo Utilizador de Criptomoedas";
$home_review_span_2 = "Primeira Vez na Plataforma";
$home_review_span_3 = "Trader Profissional de Criptomoedas";
$home_review_1_avatar_alt = "João Silva, utilizador do $site_name";
$home_review_2_avatar_alt = "Tiago Mendes, utilizador do $site_name";
$home_review_3_avatar_alt = "Alexandre Tomás, utilizador do $site_name";
$home_hero_visual_alt = "Painel de análise de mercado impulsionado por IA no $site_name";
$home_signal_visual_alt = "Sinal de negociação em tempo real gerado pela IA do $site_name";
$home_device_visual_alt = "Análises de criptomoedas apresentadas num dispositivo ligado via $site_name";
$home_security_visual_alt = "Escudo de segurança representando a proteção da conta $site_name";
$home_contact_eyebrow = "COMECE COM O $site_name";
$home_contact_title = "Explore a Plataforma com Confiança";
$home_contact_desc_1 = "Seja um principiante nos mercados de criptomoedas ou já tenha experiência em negociação, o $site_name fornece acesso a insights de mercado gerados por IA, ferramentas de monitorização em tempo real e análises inteligentes desenhadas para ajudar os utilizadores a compreender melhor as oportunidades em ativos digitais.";
$home_contact_desc_2 = "Envie os seus dados para saber mais sobre a plataforma, explorar as funcionalidades disponíveis e descobrir como o $site_name o pode ajudar a navegar nos mercados de criptomoedas através de tecnologia avançada e suporte guiado da plataforma.";
$home_seo_toggle = "Saiba Mais Sobre A Plataforma IA do $site_name";
$home_seo_h2 = "Plataforma IA $site_name Para Decisões de Mercado de Criptomoedas Mais Inteligentes";
$home_seo_p1 = "O $site_name é uma plataforma de criptomoedas alimentada por IA concebida tanto para iniciantes como para traders experientes. A plataforma combina inteligência artificial, monitorização de mercado em tempo real e ferramentas analíticas avançadas para ajudar os utilizadores a compreenderem melhor os mercados de ativos digitais e a identificarem potenciais oportunidades.";
$home_seo_p2 = "Ao contrário de muitas plataformas de negociação tradicionais que exigem um vasto conhecimento do mercado, o $site_name é construído para tornar a informação de mercado complexa mais fácil de compreender. A plataforma analisa continuamente a atividade das criptomoedas, os movimentos de preços, as tendências de sentimento, as condições de liquidez e os dados da blockchain, transformando grandes volumes de informação em conhecimentos práticos.";
$home_seo_p3 = "Seja porque está a explorar os mercados de criptomoedas pela primeira vez ou se já tem experiência na negociação de ativos digitais, o $site_name fornece ferramentas inteligentes desenvolvidas para apoiar uma tomada de decisões mais fundamentada, adaptando-se simultaneamente às alterações das condições de mercado em tempo real.";
$home_seo_h3_1 = "Análise de Mercado IA Tornada Acessível";
$home_seo_h3_1_p1 = "O $site_name utiliza inteligência artificial para avaliar uma vasta gama de indicadores de mercado, incluindo atividade de negociação, padrões de volatilidade, condições de liquidez, eventos na blockchain e o sentimento do mercado. Ao processar informações de forma contínua, a plataforma ajuda os utilizadores a obter uma compreensão mais clara do comportamento atual do mercado.";
$home_seo_h3_1_p2 = "Os modelos de IA são projetados para se adaptarem a ambientes em mudança, em vez de confiarem em pressupostos estáticos. Isso permite que a plataforma responda dinamicamente às tendências em evolução das criptomoedas e às oportunidades emergentes do mercado.";
$home_seo_h3_1_p3 = "Embora seja suficientemente avançada para traders experientes, a plataforma é também estruturada para se manter acessível aos novos utilizadores que queiram aceder a inteligência de mercado guiada por IA sem precisarem de profundos conhecimentos técnicos.";
$home_seo_h3_2 = "Sinais de Mercado IA Em Tempo Real";
$home_seo_h3_2_p1 = "O $site_name monitoriza continuamente os mercados de criptomoedas e gera conhecimentos impulsionados por IA, baseados na mudança de atividade do mercado. A plataforma avalia o ímpeto, a volatilidade, as condições de liquidez e o comportamento mais amplo do mercado para fornecer sinais analíticos em tempo real.";
$home_seo_h3_2_p2 = "Bitcoin, Ethereum, Solana, XRP, Avalanche e outros grandes ativos digitais são monitorizados através de modelos analíticos adaptativos que se ajustam automaticamente às mudanças nas condições do mercado.";
$home_seo_h3_2_p3 = "Em vez de depender de um único indicador ou de uma métrica isolada, o $site_name combina múltiplas fontes de informação numa estrutura analítica mais vasta concebida para fornecer uma visão mais completa das condições de mercado.";
$home_seo_h3_3 = "Ferramentas Inteligentes de Consciência de Risco";
$home_seo_h3_3_p1 = "Os mercados de criptomoedas podem mudar rapidamente. O $site_name inclui sistemas de monitorização de IA concebidos para identificar volatilidade invulgar, mudanças nas condições de liquidez e riscos de mercado emergentes.";
$home_seo_h3_3_p2 = "A plataforma avalia continuamente o comportamento do mercado e os potenciais fatores de risco, ajudando os utilizadores a compreender melhor a evolução das condições e a tomar decisões mais informadas.";
$home_seo_h3_3_p3 = "Ao combinar várias camadas de análise, o $site_name procura melhorar a consciência do mercado e ajudar os utilizadores a navegar em períodos de maior incerteza com maior confiança.";
$home_seo_h3_4 = "Concebida para Mercados Modernos de Criptomoedas";
$home_seo_h3_4_p1 = "O $site_name combina inteligência artificial, tecnologias de monitorização em tempo real e ferramentas de análise avançadas numa única plataforma concebida para os mercados modernos de ativos digitais.";
$home_seo_h3_4_p2 = "A infraestrutura avalia continuamente a atividade do mercado, os desenvolvimentos das blockchains, as alterações de sentimento e as tendências de liquidez para fornecer uma visão abrangente do comportamento do mercado de criptomoedas.";
$home_seo_h3_4_p3 = "À medida que os mercados de ativos digitais continuam a evoluir, as ferramentas baseadas em IA podem ajudar os utilizadores a processar informações de forma mais eficiente e a compreender melhor ambientes de mercado cada vez mais complexos. O $site_name foi desenhado para tornar essas capacidades acessíveis a um leque mais vasto de participantes no mercado.";
$home_seo_side_1_label = "Insights IA";
$home_seo_side_1_title = "Análise de Mercado Fácil de Compreender";
$home_seo_side_1_desc = "Insights gerados por IA pensados para utilizadores de criptomoedas iniciantes e experientes.";
$home_seo_side_2_label = "Monitorização de Mercado";
$home_seo_side_2_title = "Acompanhamento Cripto Em Tempo Real";
$home_seo_side_2_desc = "Monitorização contínua dos principais mercados de criptomoedas e de condições de mercado em mudança.";
$home_seo_side_3_label = "Consciência de Risco";
$home_seo_side_3_title = "Deteção Inteligente de Riscos";
$home_seo_side_3_desc = "Ferramentas avançadas de monitorização destinadas a realçar dinâmicas de mercado e volatilidade.";
$home_seo_side_4_label = "Tecnologia IA";
$home_seo_side_4_title = "Modelos Analíticos Adaptativos";
$home_seo_side_4_desc = "Sistemas de aprendizagem automática que avaliam continuamente os dados do mercado e as tendências emergentes.";
$home_faq_eyebrow = "BASE DE CONHECIMENTO $site_name";
$home_faq_title = "Perguntas Frequentes Sobre o $site_name";
$home_faq_desc = "Saiba mais sobre como a plataforma funciona, para quem foi desenhada e como a inteligência artificial ajuda os utilizadores a compreender melhor as condições do mercado de criptomoedas.";
$home_faq_q1 = "Preciso de ter experiência em negociação para usar o $site_name?";
$home_faq_a1 = "Não. O $site_name foi desenvolvido para utilizadores com diferentes níveis de experiência, incluindo pessoas que são completamente novas nos mercados de criptomoedas. A plataforma usa análises de IA e ferramentas de monitorização do mercado para tornar as informações complexas mais fáceis de compreender.";
$home_faq_q2 = "O que faz realmente o $site_name?";
$home_faq_a2 = "O $site_name analisa continuamente os mercados de criptomoedas usando inteligência artificial. A plataforma avalia a atividade do mercado, a volatilidade, as tendências do sentimento, as condições de liquidez e os dados da blockchain para gerar insights em tempo real e sinais analíticos.";
$home_faq_q3 = "Os traders experientes podem usar o $site_name?";
$home_faq_a3 = "Sim. Embora a plataforma seja amigável para principiantes, ela também fornece ferramentas de análise avançadas, inteligência de mercado guiada por IA e funcionalidades de monitorização em tempo real que podem ser valiosas para os participantes experientes no mercado.";
$home_faq_q4 = "Quais são as criptomoedas que o $site_name monitoriza?";
$home_faq_a4 = "A plataforma pode analisar os principais ativos digitais como o Bitcoin, Ethereum, Solana, XRP, Avalanche e outras criptomoedas amplamente negociadas, dependendo das condições de mercado e das fontes de dados disponíveis.";
$home_faq_q5 = "Como são gerados os sinais da IA?";
$home_faq_a5 = "O $site_name avalia vários fatores de mercado em simultâneo, incluindo a volatilidade, a atividade de negociação, as condições de liquidez, as tendências do sentimento e o comportamento histórico do mercado. Os modelos de IA combinam estes dados para identificar mudanças nas condições do mercado e potenciais oportunidades.";
$home_faq_q6 = "O $site_name fornece orientação educativa?";
$home_faq_a6 = "A plataforma foi desenhada para ajudar os utilizadores a compreenderem melhor as condições do mercado através da análise por IA, de ideias simplificadas e do acesso guiado às funcionalidades da plataforma. Os novos utilizadores podem explorar os mercados de criptomoedas sem necessidade de ter conhecimentos técnicos avançados.";
$home_cta_label = "Plataforma IA Pronta";
$home_cta_title = "Comece a Explorar o $site_name Hoje Mesmo";
$home_cta_desc = "Descubra conhecimentos de mercado baseados em IA, monitorização de criptomoedas em tempo real, ferramentas inteligentes de consciencialização de riscos e análises avançadas concebidas para principiantes e para traders experientes.";
$home_ticker_text = "Monitorização de Mercado IA Ativa • Análise de Criptomoedas em Tempo Real • Ímpeto do Bitcoin a Fortalecer • Consolidação do Ethereum Detetada • Novas Oportunidades de Mercado Identificadas • Sistemas de Monitorização de Risco Online • Atualização Contínua de Análises IA • Concebido Para Principiantes & Traders Experientes";

// ABOUT PAGE
$about_h1 = "Sobre o $site_name";
$about_p1 = "O $site_name é uma infraestrutura de inteligência artificial de próxima geração concebida para ajudar os participantes do mercado a compreender melhor o ecossistema das criptomoedas em rápida evolução. Ao combinar tecnologias de aprendizagem automática, análises preditivas, sistemas de inteligência de mercado e processamento de dados em tempo real, o $site_name proporciona um ambiente abrangente para a monitorização da atividade dos ativos digitais e a identificação de desenvolvimentos de mercado significativos.";
$about_p2 = "O mercado de criptomoedas funciona continuamente em múltiplas bolsas, jurisdições e provedores de liquidez. A cada segundo, milhares de variáveis influenciam o preço, a volatilidade, as condições de liquidez e o sentimento dos investidores. O $site_name foi desenvolvido com o objetivo de processar estes complexos fluxos de dados de uma forma estruturada e escalável.";
$about_h2_vision = "A Visão Por Detrás do $site_name";
$about_p_vision_1 = "Os mercados financeiros tornaram-se cada vez mais orientados para os dados. Os métodos de análise tradicionais têm muitas vezes dificuldade em acompanhar o volume de informação gerado nos ecossistemas modernos de ativos digitais. O $site_name procura preencher esta lacuna através da aplicação de inteligência computacional avançada, de sistemas de monitorização automatizados e de modelos analíticos adaptativos.";
$about_p_vision_2 = "A visão a longo prazo do $site_name é fornecer ferramentas de inteligência de mercado transparentes capazes de ajudar os utilizadores a compreender melhor a estrutura do mercado de criptomoedas, as condições de risco e as tendências emergentes.";
$about_h2_ai = "Infraestrutura de Inteligência Artificial";
$about_p_ai_1 = "No centro do $site_name encontra-se uma estrutura de inteligência artificial multifacetada, concebida para processar informações provenientes de várias fontes de mercado em simultâneo.";
$about_p_ai_2 = "Estas fontes podem incluir:";
$about_li_1 = "Cotações de preços de criptomoedas";
$about_li_2 = "Atividade no livro de ordens (order book)";
$about_li_3 = "Dados sobre o movimento da liquidez";
$about_li_4 = "Indicadores de volatilidade";
$about_li_5 = "Métricas de transações na Blockchain";
$about_li_6 = "Sinais de sentimento do mercado";
$about_li_7 = "Desenvolvimentos macroeconómicos";
$about_li_8 = "Atividade do mercado institucional";
$about_p_ai_3 = "Ao avaliar continuamente as relações entre estas variáveis, o $site_name tenta identificar padrões que possam fornecer um contexto de mercado valioso.";
$about_h2_risk = "Filosofia de Sensibilização para o Risco";
$about_p_risk_1 = "A participação responsável nos mercados de criptomoedas exige uma clara compreensão do risco. O $site_name enfatiza a consciência do risco como uma componente fundamental da análise de ativos digitais.";
$about_p_risk_2 = "A volatilidade do mercado, as flutuações de liquidez, os eventos específicos das bolsas, os desenvolvimentos regulamentares e as condições macroeconómicas mais amplas podem ter impacto nos resultados do mercado. Como resultado, os utilizadores nunca devem confiar exclusivamente numa única fonte de informação ao tomar decisões.";
$about_h2_global = "Mercados Globais de Ativos Digitais";
$about_p_global_1 = "Os mercados de criptomoedas operam a uma escala global e envolvem participantes de diversas regiões, setores de atividade e ambientes económicos. A infraestrutura do $site_name foi desenhada para monitorizar vários segmentos de mercado em simultâneo, permitindo aos utilizadores observar os desenvolvimentos que ocorrem em diferentes partes do ecossistema de ativos digitais.";
$about_p_global_2 = "Esta perspetiva mais alargada pode ajudar a melhorar a consciência sobre as alterações das condições de mercado e as tendências emergentes.";
$about_h2_why = "Porquê Os Utilizadores Exploram O $site_name";
$about_why_li_1 = "Inteligência de mercado avançada orientada por IA";
$about_why_li_2 = "Monitorização de criptomoedas em tempo real";
$about_why_li_3 = "Infraestrutura analítica ao estilo institucional";
$about_why_li_4 = "Avaliação multifatorial do mercado";
$about_why_li_5 = "Monitorização da volatilidade e da liquidez";
$about_why_li_6 = "Ferramentas de análise de ativos digitais escaláveis";
$about_why_li_7 = "Metodologia de análise ciente dos riscos";
$about_h2_forward = "Olhando em Frente";
$about_p_forward_1 = "À medida que os mercados de ativos digitais continuam a amadurecer, espera-se que a importância de uma infraestrutura analítica avançada aumente. O $site_name continua focado no desenvolvimento de tecnologias que suportem uma compreensão mais profunda do mercado, uma maior transparência e uma participação mais bem fundamentada no ecossistema das criptomoedas.";
$about_p_forward_2 = "Através da inovação contínua e da investigação permanente, o $site_name tem como objetivo contribuir para um futuro mais inteligente e baseado em dados para a análise de ativos digitais.";

// CONTACT PAGE
$contact_h1 = "Contactos do $site_name";
$contact_intro_1 = "Contacte a equipa do $site_name para solicitar o acesso à plataforma, para perguntar sobre as infraestruturas de negociação de criptomoedas através de inteligência artificial, ou para saber mais sobre o nosso ambiente de inteligência do mercado de ativos digitais.";
$contact_intro_2 = "Seja para explorar análises automáticas de criptomoedas, a infraestrutura de sinais de estilo institucional, a monitorização da volatilidade ou a inteligência de mercado com várias bolsas, a nossa equipa pode ajudar a direcionar o seu pedido para o departamento adequado.";
$contact_h2_help = "Como Podemos Ajudar";
$contact_li_1 = "Pedidos de acesso à plataforma";
$contact_li_2 = "Questões gerais sobre o produto";
$contact_li_3 = "Informação sobre a infraestrutura de negociação IA";
$contact_li_4 = "Consultas de inteligência do mercado de ativos digitais";
$contact_li_5 = "Questões sobre divulgação de riscos e conformidade";
$contact_li_6 = "Assistência técnica ou integração (onboarding)";
$contact_h2_send = "Envie Um Pedido";
$contact_p_send = "Preencha o formulário abaixo e um representante do $site_name poderá contactá-lo com informações adicionais.";
$contact_h2_info = "Informação de Contacto";
$contact_support_label = "Apoio geral:";
$contact_institutional_label = "Consultas institucionais:";
$contact_disclaimer = "Por favor, note que o $site_name não presta aconselhamento financeiro, de investimento, fiscal ou jurídico personalizado. Todas as informações são fornecidas apenas com objetivos tecnológicos e informativos.";

// TERMS PAGE
$terms_h1 = "Termos e Condições";
$terms_intro_1 = "Estes Termos e Condições regem o acesso e a utilização do site $site_name, dos seus conteúdos, das descrições das plataformas, dos formulários, das comunicações e dos respetivos materiais informativos.";
$terms_intro_2 = "Ao acederem a este site, os utilizadores reconhecem ter lido, compreendido e aceite estes Termos e Condições. Se um utilizador não concordar com estes termos, deve deixar de utilizar o site.";
$terms_h2_informational = "Objetivo Informativo";
$terms_p_info_1 = "O $site_name fornece informações sobre a infraestrutura de negociação de criptomoedas com recurso a IA, sobre a inteligência do mercado dos ativos digitais, sobre a monitorização da volatilidade, sobre a análise da liquidez e sobre as tecnologias conexas.";
$terms_p_info_2 = "O conteúdo do site é fornecido apenas para fins informativos e de apresentação tecnológica. Nada neste site deverá ser interpretado como aconselhamento financeiro, aconselhamento de investimento, aconselhamento jurídico, aconselhamento fiscal, ou uma garantia de resultados de negociação.";
$terms_h2_no_advice = "Sem Aconselhamento Financeiro";
$terms_p_no_advice_1 = "O $site_name não fornece recomendações personalizadas sobre se os utilizadores devem comprar, vender, manter, negociar, fazer apostas (stake), transferir, ou de qualquer outra forma interagir com qualquer criptomoeda, token, produto financeiro ou ativo digital.";
$terms_p_no_advice_2 = "Os utilizadores devem avaliar de forma independente toda a informação e procurar aconselhamento junto de profissionais qualificados antes de tomarem decisões financeiras.";
$terms_h2_user_responsibility = "Responsabilidade do Utilizador";
$terms_p_user_1 = "Os utilizadores são responsáveis pelas suas próprias decisões, avaliações de risco, atividade na conta, ações de negociação, cumprimento legal e utilização de quaisquer serviços de terceiros.";
$terms_p_user_2 = "Os utilizadores devem assegurar-se de que a atividade dos ativos digitais é permitida na sua jurisdição e de que compreendem todos os riscos aplicáveis antes de interagirem com os mercados de criptomoedas.";
$terms_h2_ai = "IA e Sistemas Analíticos";
$terms_p_ai_1 = "O $site_name poderá descrever sistemas de inteligência artificial, modelos de previsão, sinais de mercado, análises automatizadas ou tecnologias ligadas à execução.";
$terms_p_ai_2 = "Esses sistemas poderão depender dos dados do mercado, de modelos estatísticos, de processos de aprendizagem de máquinas e de fontes de informação de terceiros. Estes sistemas podem ser inexatos, podem ser atrasados, incompletos, indisponíveis ou não se adequarem a objetivos particulares dos utilizadores.";
$terms_h2_availability = "Sem Garantia de Disponibilidade";
$terms_p_avail_1 = "O $site_name não garante o acesso ininterrupto ao site, a disponibilidade contínua da plataforma, o funcionamento livre de erros, informações exatas sobre o mercado, nem a disponibilidade de qualquer funcionalidade específica.";
$terms_p_avail_2 = "Os serviços, o conteúdo, as páginas, os formulários, as integrações ou as descrições das plataformas podem ser modificados, suspensos ou descontinuados a qualquer altura.";
$terms_h2_third_party = "Serviços de Terceiros";
$terms_p_tp_1 = "O site pode fazer referência a bolsas de valores, a locais de liquidez, a fornecedores de dados de análise, a instrumentos de comunicação, a serviços de alojamento de servidores (hosting) ou a fornecedores de infraestruturas técnicas de terceiros.";
$terms_p_tp_2 = "O $site_name não controla as plataformas de terceiros e não se responsabiliza pela sua disponibilidade, tarifas, políticas, restrições nas contas, procedimentos de conformidade, falhas técnicas ou perdas dos utilizadores.";
$terms_h2_prohibited = "Utilização Proibida";
$terms_p_prohibited = "Os utilizadores não deverão utilizar este site ou qualquer tecnologia relacionada para fins ilícitos, abusivos, fraudulentos, manipuladores ou prejudiciais.";
$terms_li_1 = "Tentar o acesso não autorizado";
$terms_li_2 = "Submissão de informações falsas ou enganosas";
$terms_li_3 = "Utilizar o site para atividades financeiras ilícitas";
$terms_li_4 = "Interferir na segurança ou no funcionamento do site";
$terms_li_5 = "Copiar ou fazer má utilização dos conteúdos do site sem autorização";
$terms_li_6 = "Tentar contornar os controlos de conformidade ou os controlos técnicos";
$terms_h2_ip = "Propriedade Intelectual";
$terms_p_ip_1 = "O desenho do site, os textos, as marcas, os elementos da interface, as imagens gráficas, a estrutura e os materiais afins são detidos por ou licenciados para o $site_name, exceto quando for indicado o contrário.";
$terms_p_ip_2 = "Os utilizadores não deverão reproduzir, distribuir, modificar ou explorar comercialmente os materiais do site sem a devida autorização.";
$terms_h2_liability = "Limitação de Responsabilidade";
$terms_p_liab_1 = "Na medida do que é permitido pela legislação em vigor, o $site_name não deverá ser responsável pelas perdas resultantes da negociação de ativos digitais, de falhas nas plataformas de terceiros, de dados inexatos, de decisões dos utilizadores, ou da confiança nos conteúdos do site.";
$terms_p_liab_2 = "Os utilizadores acedem e usam este site por sua conta e risco.";
$terms_h2_changes = "Alterações a Estes Termos";
$terms_p_changes_1 = "O $site_name pode atualizar estes Termos e Condições a qualquer momento. Os termos atualizados poderão ser publicados nesta página.";
$terms_p_changes_2 = "A continuação da utilização do site após as alterações significará que os utilizadores reconhecem e aceitam os novos termos.";

// PRIVACY PAGE
$privacy_h1 = "Política de Privacidade";
$privacy_intro_1 = "O $site_name respeita a privacidade dos utilizadores e compromete-se a lidar com as informações pessoais de forma responsável, transparente e segura.";
$privacy_intro_2 = "Esta Política de Privacidade explica que informações poderão ser recolhidas aquando da visita dos utilizadores a este site, da submissão dos formulários de contacto, do pedido de acesso, ou da interação com o conteúdo do $site_name e as comunicações relativas à plataforma.";
$privacy_h2_collect = "Informações que Podemos Recolher";
$privacy_p_collect_1 = "O $site_name poderá recolher informações voluntariamente submetidas pelos utilizadores através de formulários do site ou de canais de comunicação.";
$privacy_li_fname = "Nome";
$privacy_li_lname = "Apelido";
$privacy_li_email = "Endereço de e-mail";
$privacy_li_phone = "Número de telefone";
$privacy_li_inquiry = "Detalhes do inquérito submetido";
$privacy_li_technical = "Dados técnicos básicos de utilização do site";
$privacy_h2_use = "Como Usamos a Informação";
$privacy_p_use_1 = "As informações podem ser utilizadas para dar resposta a pedidos de utilizadores, para providenciar informações de acesso à plataforma, para melhorar o funcionamento do site, para manter a segurança e para comunicar as atualizações relativas ao $site_name.";
$privacy_p_use_2 = "Podemos igualmente utilizar dados em conjunto ou que não sirvam para identificação, de forma a podermos analisar o desempenho do site, a poder melhorar a estrutura dos conteúdos, e a entender como os nossos visitantes interagem nas nossas páginas.";
$privacy_h2_comm = "Fins de Comunicação";
$privacy_p_comm_1 = "Caso um utilizador envie as suas informações de contacto, o $site_name pode utilizar essa informação para dar resposta ao inquérito, providenciar pormenores de integração (onboarding), esclarecer os pedidos de acesso à plataforma, ou partilhar informações relevantes do serviço.";
$privacy_p_comm_2 = "Os utilizadores podem pedir a interrupção da comunicação onde seja possível.";
$privacy_h2_cookies = "Cookies e Dados Técnicos";
$privacy_p_cookies_1 = "Este site poderá usar cookies, ferramentas de análise e tecnologias do mesmo género com o fim de poder melhorar a experiência de navegação, monitorizar o desempenho, e dar apoio à segurança do site.";
$privacy_p_cookies_2 = "Os dados técnicos poderão incluir o tipo de equipamento, o tipo de browser da web, o sistema operativo, as interações com a página, informações de referenciação, bem como estatísticas gerais de uso.";
$privacy_h2_protection = "Medidas de Proteção de Dados";
$privacy_p_prot_1 = "O $site_name aplica salvaguardas administrativas, técnicas e organizativas adequadas com vista a proteger a informação submetida contra acesso indevido, uso inapropriado, perdas ou acesso indevido.";
$privacy_p_prot_2 = "Não obstante, não há sistema na Internet que possa dar uma garantia absoluta sobre a segurança. Os utilizadores devem evitar fornecer informações financeiras sensíveis, as chaves privadas das suas carteiras, os seus códigos, as credenciais para aceder a exchanges ou detalhes sobre o acesso confidencial à conta, utilizando os formulários públicos presentes no site.";
$privacy_h2_third = "Prestadores de Serviços de Terceiros";
$privacy_p_third_1 = "O $site_name poderá recorrer a fornecedores externos (terceiros) para serviços de alojamento na rede (hosting), serviços de análise de dados, comunicações, segurança, e-mail e processamento das infraestruturas de CRM ou técnicas.";
$privacy_p_third_2 = "Aqueles prestadores poderão tratar dados de forma restringida na medida do necessário em prol do funcionamento do site e do fornecimento dos respetivos serviços.";
$privacy_google_choices = 'Pode gerir como a Google utiliza as informações de suas visitas através das <a href="http://www.google.com/settings/ads" target="_blank" rel="noopener">Definições de Anúncios Google</a>, pode cancelar a publicidade baseada em interesses utilizando a opção de recusa de publicidade do <a href="https://tools.google.com/dlpage/gaoptout" target="_blank" rel="noopener">Google Analytics Opt-out Browser Add-on</a>, ou pode rever a <a href="https://www.google.com/intl/pt-PT/policies/privacy/" target="_blank" rel="noopener">Política de Privacidade da Google</a> para obter mais dados.';
$privacy_h2_sale = "Não Há Venda de Informação de Caráter Pessoal";
$privacy_p_sale_1 = "O $site_name não se propõe a fazer venda de quaisquer dados de caráter pessoal fornecidos no site.";
$privacy_p_sale_2 = "Os dados podem apenas ser divididos, quando imperativo para fins operacionais da atividade empresarial, das diligências necessárias de carácter legal, de eventuais contactos, na luta e para impedir fraudes ou no decurso dos trâmites estritamente vinculados aos serviços.";
$privacy_h2_retention = "Conservação de Dados";
$privacy_p_retention = "Os dados pessoais poderão apenas ser retidos para a consecução, responder ou clarificar inquéritos efetuados à entidade, no decurso da documentação contabilística ou no exercício das exigências legais, melhoramentos, visando garantir eventuais perigos das situações ocorridas e também com a preocupação de proteção para estancar a fraude.";
$privacy_h2_rights = "Os Direitos do Utilizador";
$privacy_p_rights = "A depender da regulamentação a vigorar, existirá nos utilizadores a faculdade a requerer direitos estritos vinculados ao acesso de visualização, possibilidade a emenda de erros nos respetivos apontamentos ou da abolição, anotação sobre os limites a uma certa limitação da aplicação dos direitos próprios e mesmo em aspetos alusivos à portabilidade do apontamento da pessoa.";
$privacy_h2_intl = "Uso Internacional";
$privacy_p_intl_1 = "O $site_name tem, de facto e pelas evidências das redes sociais mundiais o utilizador oriundo em diversas realidades jurídicas. A determinação das regras alusivas no que tange os âmbitos da esfera confidencial mudam sempre segundo o local do interessado.";
$privacy_p_intl_2 = "No ato do acesso e a utilização dos espaços da Internet a pessoa confirma a evidência na aceitação para as determinações legais a vigorarem e submete à aplicação das regras definidas que servem a Política de Privacidade e também e os respetivos funcionamentos a serem aplicados.";
$privacy_h2_policy_updates = "Atualizações a Estas Normas";
$privacy_p_updates_1 = "O $site_name irá ter o dever da revisão por tempos pontuais do que a sua elaborada Política de Privacidade impõe para os interessados com respeito da adaptação contínua da mesma para evidenciar e adaptar nos campos jurídicos ou nas exigências impostas para com a própria utilização e segurança e as respetivas utilidades contidas no site da web.";
$privacy_p_updates_2 = "A persistência no emprego no respetivo sistema, após publicadas as mudanças assentes, significará uma confissão irrevogável perante o aceitamento dos dispostos contidos pela respetiva Política de Privacidade em causa.";

// COOKIES PAGE
$cookies_h1 = "Política de Cookies";
$cookies_intro_1 = "A Política de Cookies do $site_name vem descrever em que medida a entidade requer ou socorrer-se dos cookies, das formas de sondagens do tipo análises para recolha da base da evidência perante todo o percurso desenvolvido na navegação feita via da própria rede.";
$cookies_intro_2 = "O próprio objetivo tem finalidade do aproveitamento desses sistemas via de dados (os cookies) permitindo não menos, elevar as utilizações para bem a adequar face perante os interessados e no acompanhamento da sua performance nos usos de procedimentos de controlo relativos aos riscos e da necessária segurança da aplicação de processos.";
$cookies_intro_3 = "Na permanência, em consequência, pela navegação nos recintos constantes neste site será feita a compreensão para o sentido a conferir a possibilidade expressa num consentimento das várias vertentes tecnológicas afins (as referidas cookies), aplicados a atuar conforme delineado nas condutas reguladas desta presente política em evidência.";
$cookies_h2_what = "O que são os Cookies?";
$cookies_p_what_1 = "De forma objetiva e explícita define que os cookies na vertente mais pragmática referem as pequenas informações no estilo do tipo num ficheiro de escrita, depositado nos recetáculos do equipamento pessoal do utilizador em que acontece um encontro direto ao visitar a presente plataforma em desenvolvimento na web.";
$cookies_p_what_2 = "Na realidade os contornos desta função consistem em arquivos repletos numa vertente técnica a incluir bases sobre o ato no qual ajuda no âmbito do seu sistema na perceção dos antigos utilizadores de visita no próprio site ao relembrar assim das evidências face nas anteriores vontades assumidas pelo elemento para os trajetos com que desenvolveu bem na avaliação analítica pelo resultado gerado nesse meio via web.";
$cookies_h2_why = "Por que Usamos os Cookies";
$cookies_p_why_1 = "O $site_name requer as atuações num quadro a incluir a ajuda providenciada nos denominados cookies ou semelhantes que a acompanham pela necessidade a alcançar determinados resultados bem explícitos.";
$cookies_li_1 = "Garantia a salvaguardar o uso exequível das plataformas da rede de internet";
$cookies_li_2 = "Para tentar elevar o benefício perante o acesso pelo contacto com que depara com esta área (User experience)";
$cookies_li_3 = "Guardar nas presenças fixadas o sentido nas opções dos utilizadores na sua estadia anterior";
$cookies_li_4 = "Enriquecimento e de uma perceção perante a avaliação no modo que ocorrem as ações dadas no comportamento perante aos seus utilizadores e clientes do sistema no seu geral";
$cookies_li_5 = "Tentar verificar as atitudes quanto na verificação às prestações de todo os recintos da web criadas (Desempenho - Performance)";
$cookies_li_6 = "Verificação dos defeitos ocorridos no sistema de caráter no foro eminentemente e ligado puramente a termos técnicos na base do acompanhamento global";
$cookies_li_7 = "Num cariz puramente ligado a prestar da máxima colaboração no aspeto de um desempenho para todo o aspeto nos requisitos fundamentais visando a eficácia e segurança da entidade neste ponto com toda as funcionalidades das páginas";
$cookies_li_8 = "Eficácia preventiva que ocupe os lugares vitais perante desusos intencionados do foro abusivo da vertente negativa (Mau Uso)";
$cookies_h2_essential = "Cookies Essenciais";
$cookies_p_ess_1 = "Estas presenças e definições da necessidade aos fins vitais ligadas via certas aplicações assumem papel prioritário e fundamental das funcionalidades dadas à estrutura.";
$cookies_p_ess_2 = "A sua função basilar tem no encalço nos suportes face na manutenção do desempenho adequado para a defesa das garantias fundamentais sobre a preservação à margem da funcionalidade técnica focando perante a gestão contínua nas sessões requeridas a suportar todo os desígnios nas ações e na prossecução requeridas baseadas nestas formas operatórias primordiais para a própria entidade (Operações Núcleo do Site).";
$cookies_p_ess_3 = "Caso se abdique no impedimento dessa base primordial assente em essência fundamental o seguimento para o contacto sobre porções delineantes nas páginas, na web em certas vertentes não terão a sua operação no rumo pretendido e no sentido funcional.";
$cookies_h2_analytics = "Cookies de Estatísticas (Analítica)";
$cookies_p_an_1 = "A necessidade de avaliação nestes parâmetros focam a avaliação contínua nas ajudas nos aspetos perante formas em como ocorrem por meios dos indivíduos e que afinal resultou nos contatos, sobre onde foi visitado nas interações e no contacto nos respetivos suportes elaborados e disponíveis sobre um conjunto geral nos conteúdos deste formato em páginas de internet.";
$cookies_p_an_2 = "Na adoção deste quadro metodológico, podem implicar obtenção ou a recolha nos contatos registados e referir a dados face na constatação perante a frequência de certas visualizações na página e nas visitas aos suportes em variadas etapas que de facto referem ao trajeto realizado e das normas estipuladas das condutas e dos padrões efetuados das visitas e no aparelho utilizado e também nas definições aplicáveis perante um simples browser a atuar e no globalmente apurado para o acesso, com que traduz o uso dado e feito neste site das referências dadas nos parâmetros nos domínios gerais.";
$cookies_p_an_3 = "A aplicação dessa vertente da informação tem na base sobre um dado de agregado a desempenhar nas funções primordiais em elevar o aperfeiçoar todo e não menos todo o suporte estrutural focado na rede a incluir aos seus aspetos globais resultantes para que venham ao auxílio às garantias do utente na melhor perceção sobre as condições para as utilizações providas (User Experience).";
$cookies_h2_functional = "Cookies da Funcionalidade";
$cookies_p_fun_1 = "Poderão estas especificidades num plano geral atuarem via na sua eficácia de tentar sempre fixar certas presenças, opções adotadas ou não menos da preferência já verificada e preestabelecida na origem com antecedência assinaladas.";
$cookies_p_fun_2 = "Podemos adiantar nos aspetos delineantes a englobar nestas perspetivas da exemplificação aos que dizem em foro preferencial às bases das escolhas quanto às noções para a vertente dos sistemas nos idiomas (A Língua), das definições atentas na própria interatividade contida perante das apresentações feitas para o formato visual ou seja em outras vias à medida (Nas Customizações).";
$cookies_h2_third = "As Tecnologias de Terceiras Entidades Fornecedoras";
$cookies_p_third_1 = "Pela presença na entidade em que opera do $site_name há os fornecimentos estipulados à necessidade na utilização que vem e a incluir por intervenções prestadas de outras formas ou seja nos serviços executados pela terceira parte atuante, não esquecendo outras das infraestruturas viradas face do apoio à publicidade em atuação bem da observação para as verificações baseadas em atitudes tomadas na área à medida dos critérios na forma a vigiar do seu respetivo andamento técnico da internet e do desenlace com outras opções e recursos de análise das performances contínuas.";
$cookies_p_third_2 = "Esta terceira base em atuação e perante na medida no que poderá realizar no acompanhamento perante os contornos na inclusão das presenças focadas sobre a estipulação a fazer nas adoções que incidem pelo fornecimento à constituição focada para fixação a colocar na origem da rede própria pela deposição dos referidos suportes estipulados via cookies das entidades prestadoras nos seguimentos vinculativos à atuação à conformidade do cariz que assumem, às perspetivas ligadas das ordens de restrições de obrigações estipuladas em concordâncias e baseadas na submissão imposta via normas das suas restritas obrigações contidas na política focada na respetiva privacidade das entidades prestadoras ao caso à sua singular base e atuação sobre as imposições a operar.";
$cookies_p_third_3 = "Nestas estritas razões, perante aos dispostos não irá o $site_name assumir e estar face da posse das faculdades sobre às condições dadas ao respetivo acompanhamento ou controlo ao procedimento adotado por vias relativas à intervenção às cookies das referidas e referidas formas externas terceiras atuantes que prestam e por conseguinte vai o aviso feito na direção e também numa firme intenção na consulta ao leitor ao rever perante todas a exigências para ter à posse atenta num olhar global aos manuais orientadores relativos a condutas estritamente alinhadas nos termos dados do apoio das informações das obrigatoriedades nas normativas das prestações sobre o que diz nos regulamentos orientadores ligadas para a restrita e referida área quanto das privacidades no fórum respeitante das entidades provedoras por intervenção perante aos fornecedores por fora do exterior (As entidades atuantes ou seja os terceiros e independentes), ou seja que estejam nos devidos limites e no escopo quando e no decorrer caso estarem a fazer efeito nestas condições em aplicabilidade dadas.";
$cookies_h2_manage = "Gerir os seus Cookies";
$cookies_p_manage_1 = "Em muitos contornos face perante nos normais usos os modelos ao caso do âmbito operatório nos atuais sistemas perante aos mais atualizados nos suportes de pesquisa (Os Browsers) a atuação nos utentes de facto darão nas exigências a admitir que seja feito nas devidas possibilidades às restrições focadas, à manutenção da ordem relativa na restrição por interdição com os referidos ficheiros (Os Cookies), permitidos através duma avaliação baseadas perante no controlo assumido em devida definição face ao que os menus no sistema ao apoio referem no controlo de comandos do mesmo browser e na atuação dada.";
$cookies_p_manage_2 = "Têm ainda nesta avaliação no decorrer perante os factos à capacidade face das adoções que perpassa no impedimento de suspensão em global aos dispostos contidos aos ficheiros (Cookies) sob forma inativa integral contudo certas características podem estar bloqueadas a terem a normal função que tinha operado (Com certas características, da funcionalidade das definições do site podem se apresentar inibidas no andamento estrito ou até ao decorrer funcional nos contatos depois perante ao se dar a adoção deste sistema e perante as ocorrências no decorrer posterior nas eventuais visitas ao seguimento assumido face à ação realizada).";
$cookies_p_manage_3 = "Num olhar genérico sobre a aplicação a ter com que diz a certas avaliações nos quadros dados face do menu de definições (Os Settings) e das faculdades estipuladas no apoio dado pelos sistemas nos acessos (Browsers) estipulam sobre a possibilidade a agir nas várias orientações na ação das seguintes características do acompanhamento estipuladas de controlo operatórias nos limites face nas decisões a fornecer, ou seja:";
$cookies_li_manage_1 = "Fazer bloqueamento aos Cookies (Bloquear Todos)";
$cookies_li_manage_2 = "Para retirar (a abolir) da lista presente o contido das Cookies fixadas num sistema para já ativas existentes na ordem";
$cookies_li_manage_3 = "Deixarem a ter recados contínuos de anúncios para fins focado pela inclusão ou do tipo da entrada por ação num sistema e da fixação via de interrupções por um aviso de alertas dadas por apropriação feita no sistema pelo cookie ou pelas inserções dos respetivos suportes técnicos em foco pelas advertências assumidas";
$cookies_li_manage_4 = "Inibição de determinadas classificações impostas na restrição com a incidência no apoio nos referidos focos restritivos no plano pelas tipologias das próprias características no cariz da inserção ou tipos dados com as certas bases nas delimitações com os Cookies requeridos (Limitação do Grupo Específico na Aplicação dadas nas restrições no impedimento em ação focada)";
$cookies_h2_data = "Sobre Os Asuntos Na Proteção Sobre Bases Nas Informações";
$cookies_p_data = "Aquilo que for assumido a respeito ao campo alusivo ao qual no decurso nos moldes de um envolvimento pelas avaliações à matéria via ou relacionadas a esta tipologia do foro das inserções via Cookie vai ter e podem ocorrer numa base no tratamento nas operações e acompanhamento pelo trajeto face às bases legais, e consoante na concordância em obrigatoriedade nos aspetos vinculativos da devida regulamentação no cumprimento e face às submissões com que se aliam à lei com ordens a prever sobre bases dadas da Nossa Política Da Privacidade nas normativas das áreas da lei vigente a conferir em adequação no âmbito do ordenamento dado aplicável em força vinculativa e perante aos dispostos na esfera jurisdicional ao direito imposto com regras à Proteção Dos Dados Na Generalidade Da Aplicação Legal (Leis Atuantes perante à regulamentação face perante Dados nas Leis).";
$cookies_h2_policy_updates = "As Atualizações Nestes Aspectos De Conduta";
$cookies_p_updates_1 = "No contínuo andamento em que poderão no decorrer no seguimento de certas possibilidades face no campo em termos face perante e em nome por nós e pelo cariz que o $site_name que fará, será num apoio em atuação num decorrer pontual, fazer revisões a que aludem de uma eventual ação para a atualizar face desta presente Política Sobre os Ficheiros Cookies e nas periodicidades a ser dadas à medida das mudanças nas vias ocorridas, que na verdade podem ir desde face no apuramento em acompanhamentos ligados às evoluções nas adoções do domínio ou pelas bases nos ramos das tecnologias com alterações nas modificações impostas à exigência nos carizes legais ou em contornos nos seguimentos em ordem a certas mudanças que refletem aos benefícios das ações nos fóruns sobre as eficácias na estrutura à ordem nas metodologias da melhoria de vertente e da eficácia operatória nos recursos.";
$cookies_p_updates_2 = "Pela perseverança e face do ato contínuo às ações nas utilizações e face nos acessos à plataforma e no decorrer de acessos aos suportes que se evidenciam nesta estrutura posterior que forem seguidas às devidas alterações realizadas e em decorrer de atualizações (Por atualizações dadas num seguimento subsequente ao processo nas implementações assumidas no andamento e nas adoções dadas face da continuação à base posterior focadas face após as mudanças dadas referidas na atuação efetuada da inclusão pelas adaptações ou atualizações ocorridas nestas bases atuantes para a presente plataforma de presença para acessos, na consequência da via contínua às referidas implementações), terá pela via de factos à consequente tomada focada no valor no decurso (Num sentido legal, ao consentimento) sobre o facto e aos dispostos perante nas condutas, ao estrito sentido e a admitir (assumindo na afirmação da plena noção a reconhecimento perante ao que estiver estipulado nas presentes regulamentações em que foram adaptadas ou sejam submetidas a uma versão submetida à mudança e na posterior revisão a vigorar pela revisão de facto na conduta revisada referida).";

// AML PAGE
$aml_h1 = "Política de AML";
$aml_intro_1 = "O $site_name reconhece a relevância das avaliações e no que perpassa no seguimento face perante as perspetivas dadas pela prevenção na apropriação indevida dos proventos ou pelo cariz a assumir para o combate contra a temática de foro perante nos contornos de forma global do branqueamento sobre todo os ilícitos dadas via dos fundos capitais com a inclusão dada perante na afirmação da probidade financeira na perspetiva face na consciência no quadro perante às garantias dadas com base na integridade ao plano para as aplicações do setor financeiro, e no apoio no prossecutivo nas atuações da envolvência pela participação numa perspetiva a requerer todo o sentido da responsabilidade ao nível pelas inserções relativas à via operatória aos ecossistemas focados nas atuações nas negociações operadas nestas vertentes e áreas ligadas nos domínios mercantis dos denominados mercados relativos na atuação do foro ligado estritamente aos ativos com caráter em essência face na base da área digital (Nos Mercados no Ramo para Ativos de Forma e de Âmbito Digital).";
$aml_intro_2 = "Na adoção, com que se dá os desígnios para que serve, o presente enunciado à norma que constitui esta (A referida Política face à vertente contra e no fórum e acompanhamento a dar na oposição e controlo que faz sobre certas normativas para com as exigências em atuação da norma perante na aplicação e que traduz na AML (Política para impedir capitais sob suspeita ilícita), visa por forma a explicitar de modo aos moldes nas clarificações nos contornos ligados de facto à forma nos seus enquadramentos perante de contornos genéricos onde o seu seguimento (O referido e denominado $site_name) a incutir nas bases na atuação com os princípios orientadores com as diretivas em ação foca de um trajeto num plano face ao seu cariz ao aplicar o impedimento das atuações por inibições (Desencorajar num cariz geral num propósito na via da ação na inibição ou desincentivo para combater sobre certos quadros das ações relativas aos aspetos proibitivos que atuam em bases nos desígnios com finalidade ilícita) com a inclusão dada da sua vertente à observação (Nas atividades ilícitas, via nos fins ilícitos nos carizes a assumir com o foro irregular com incidência nos procedimentos ilícitos associados da vertente técnica aplicada nas esferas focadas com criptomoedas ou seja por bases nos usos de atuações ilícitas para o quadro das adoções dadas pelas tecnologias conexas criptográficas), perante as desconfianças ao quadro das atividades nas transações com proveniência de operações ligadas às suspeitas com caráter no fundo num caráter de atuação na via financeira suspeita, das eventuais práticas enganosas, na fraude, nos comportamentos aos desvios ligadas a omissões de obrigações sancionatórias à via de fugas ligadas às restrições no âmbito às referidas sanções nos dispostos de proibições restritivas dadas (Para que serve, por desvios na evasão ou com as inibições que servem para desviar a sanção em restrição adotadas nos ramos das limitações dadas e nos moldes de bloqueio das sanções atuantes perante na lei para restrições efetuadas ou em esquivas à não aplicação (fugas à aplicação nas normas referidas por restrições via de certas imposições coercivas sob as vias nas atuações que fogem da lei sob as vias das obrigatoriedades à atuação legal - Evasões Focadas Perante a Atuação para as Restrições (As denominadas sanções impostas na Lei de Direito Internacional) da mesma forma de se referir face para o âmbito e desvios para patrocínios (os apoios ao foro ao sustento face e da ação do terror), na sua conduta ou perante atos às normativas em oposição a desvios (aos outros quadros de comportamentos ligados ou sujeitos às atuações na via no cariz focado perante atuações nas adoções via face da proibição no acompanhamento dado de via à prossecução da não conformidade perante certas ordens contidas restritas).";
$aml_h2_purpose = "O Desígnio Final Na Política Que Atua";
$aml_p_purpose_1 = "No rumo na prossecução requerida ao encalço dos fins das presentes normativas aos quadros da referida norma nesta perspetiva é de estipular da criação com o desígnio focada na estruturação da imposição num fundamento orientador sob base num rigor que se atua para assumir pela responsabilidade em virtude do modo como atua e vai gerir (de facto como em virtude na intervenção foca à maneira como se procede sobre) o respetivo andamento do designado $site_name se assume perante das perspetivas ao trajeto pelas imposições e da sua observação que acompanha em vertente de atuação na consciência e nas prevenções ao nível sobre ao aspeto das atuações nas inibições que assume no combate que requer em atuar para no âmbito ao travão pelas vertentes focadas à oposição dadas contra aos movimentos no tratamento via aos quadros focados aos proventos ilícitos em branqueamentos, num interior por meios que decorrem e a atuar no seu seio na estrutura aos quadros ao todo por vertente (ao ecossistema focado no cariz do formato em bases digitais nos ativos - O Ecossistema que engloba Os Ativos para o foro no Formato de Ativos Num Caráter Digital).";
$aml_p_purpose_2 = "Na adoção do que for com respeito sobre os referidos e presentes contornos dadas aos domínios das interações ao sistema global e face das plataformas focadas no seguimento e ao sistema nos mercados estritamente focados e relativos das bases aplicadas e das respetivas (O Ecossistema focado nas Criptomoedas, nas vertentes com as bases e nos Mercados) que atuam via, a prever sobre bases que atuam à margem das áreas num cariz global em fórum (Nas atuações a incluir e ao prever as ações dadas à escala para contornos (Na sua envolvência e para inclusão) aos fóruns nas adoções dadas por áreas nas transações ou nas vertentes das trocas em movimentos dados às ações perante (Na envolvência nas áreas das aplicações nos fóruns de atividades em vertentes transnacionais) e nas opções com sistemas de apoios nos âmbitos focados às bases das vias com descentralizações para fórum num âmbito nas estruturas focadas descentralizadas (Para a Via nas estruturas dadas com âmbitos aos quadros num sentido face da descentralização), e não esquecendo nas avaliações que perpassam na ordem dada a certas prestadoras perante aos aspetos aos serviços ou com terceiras vias (com as trocas ou seja as intervenções a interagir nos apoios com fornecedores de terceiras entidades ligadas a intervenções nos serviços externos das trocas das denominadas bolsas) bem como nas adoções ao quadro pelas bases a intervir ligadas perante as inserções (das opções focadas face nas ações nas infraestruturas em ambientes ou infraestruturas externas de carteiras focadas face à intervenção para as vias para as infraestruturas nas áreas de armazenamento perante carteiras digitais ou na parte no domínio relativo das ações ao foro da provisão para fóruns externos à prestação com fórum alheio). Por tais factos das referências e os consequentes factos ao âmbito, na via de prever na compreensão face do pressuposto sobre às obrigações (nos termos das suas devidas noções os utilizadores deviam aprofundar e prever na consciencialização e compreender os respetivos termos que aludem) de que com respeito perante os fins das estritas funções de imposições restritivas sob vias restritas e limitativas relativas nas obrigações perante do rigor face em cumprimento na observação de deveres pelas limitações exigidas pelas vias com imposições das normas com obrigatoriedades na prossecução em normativas legais nos âmbitos da via à ação ou seja (Das obrigações baseadas na imposição da via e do limite pela via por via do acompanhamento focada (As Obrigações perante Conformidades), as dadas perante as orientações do foro (poderão ter o seu respetivo aspeto na vertente de aspeto a observar por variar as atitudes ao foro nas vertentes consoante) às dadas nas vertentes para (consoante perante os requisitos em conformidade perante nas jurisdições aos territórios com intervenções a adotar perante as atuações num espaço territorial, às características sobre nas vertentes alusivas nas adoções para tipos nas condições em contas abertas (os vários tipos de base com a constituição das referidas opções de contornos da formatação nas contas), e nas vias das bases focadas nas ordens à adoção perante ao caso à presença no fórum nas trocas nos prestadores ou no seguimento nas bolsas (Fornecimento de Entidade e do cariz ao prestador na Bolsa da Troca de base aplicável na prestadora atuante na bolsa ao fornecimento), à adoção focada no espaço ao redor (na base relativa face às ordens de cariz regulamentar à volta da sua área de limite por área) e perante (ao redor do acompanhamento na vertente perante e em espaço local aos contornos à base nas delimitações referidas na norma com aplicação legal restritiva nos ramos jurídicos focados em imposições dadas (Ambientes nas Imposições por Áreas em Regulamentações Focadas na Esfera em Condições ao Contorno Local)).";
$aml_h2_responsible = "Uma Conduta nas Ações por Foco na Respeitabilidade na Aplicação para Ativos ao Âmbito Digital";
$aml_p_resp_1 = "Pelos intervenientes (os utentes no geral com ação na via de acompanhamento das interações efetuadas com bases no fórum da aplicação nas intervenções de fórum para interagir face no seguimento no $site_name (o referido sistema em fórum) e das ações contínuas aos apoios e serviços efetuados nos parâmetros dados que digam por fim face das aplicações ligadas para ativos com caráter na perspetiva digital (em referência ao aspeto das atuações focadas), esperam-se nas condutas às avaliações (o facto em esperança em conduta (está esperado o quadro nas ações efetuadas a ter à margem do rumo com base em ações e expectativas das intervenções perante nas noções para agir) de um lado no cariz na atuação ao fórum responsável (Por base face no seu ato na base e cariz nas vertentes na forma de se conduzir e ao operar de maneira responsável) a ser no foro perante de ação sob forma aos contornos perante do escopo em foro nas vias lícitas e por bases perante ao enquadramento (Em via legal face perante e baseadas num quadro a prever e com seguimento baseados ao acompanhamento dadas face ao cariz nas normas restritivas dadas (em acompanhamento face do respeito focadas em acordo ou nas perspetivas referidas de concordâncias ao cariz focado com observação das vias focadas e das diretivas (consoante as regras dadas e exigidas na sua forma de ser face perante regras estritamente ligadas e com imposição às bases das disposições focadas à lei).";
$aml_p_resp_2 = "Na forma de adoção pelo seguimento assumido não faz, pelo foro ao qual, a apoiar nas bases, (O $site_name face das perspetivas a atuar, de maneira alguma com a imposição no cariz não efetua em suporte ou em forma de apoios nem promove por aspetos dados no encorajamento (Face aos apoios focados e nas vertentes e em ações perante no incentivo de aprovações), nas atuações da prestação ao uso (face às disposições para o cariz por utilizações, ao que os usos com os sistemas efetuam, nos meios à via operatória perante fóruns ou da constituição nos ambientes nas áreas a que diga das trocas com prestação aos meios ligados às criptomoedas focadas para as adoções face dos ecossistemas aplicados na base das trocas às condutas referidas em mercados com ligação no domínio do ecossistema cripto (ao sistema do espaço focado nos recintos ligados aos criptomercados), e não esquecendo das interações relativas aos fóruns da ação ou seja dos processos e também às configurações da estrutura relativas para (nas bases ao que se reporta perante nas negociações dadas pelas tecnologias de formato automatizados), no fundo, no aspeto, em adoções com ferramentas e no uso de cariz por atuação com análises para fins focados nas vias alusivas nas atuações para um fim nos meios do foro por usos aos aspetos proibidos ao cariz de ser aplicável por finalidades num aspeto perante restrições impostas a nível (nas vias ilícitas sob foro na base).";
$aml_li_1 = "Ocultação e transposição, de forma às dissimulações na prossecução para a apropriação indevida ou no fórum à base num percurso efetuado ao branqueamento da prossecução financeira nos fundos focados no encalço de vias perante capitais com meios indevidos";
$aml_li_2 = "Sustento da via, nas imposições de cariz em bases de financiamento às organizações num domínio à via por atuações com bases num fórum alusivo num acompanhamento para atos ao foro e de sustento do terror nos fóruns ligados ou seja nas prossecuções a apoiar face das ocorrências num cariz do terrorismo face às adoções nas formas de um sistema a encobrir de bases financeiras focadas em fóruns (O terrorismo pelo sustento da via focada - Nos financiamentos ligados para bases nos sustentáculos focados a atos a vias do cariz focados num âmbito e ações por sustento na vertente dadas focadas de percurso focadas nas ações ligadas às vertentes do terror)";
$aml_li_3 = "Falsidades ou vias por fraude na base ligada por atuações ao quadro e com a inclusão por dissimulação num quadro na ação ou pela atuação financeira focada à via no cariz por desvios na perspetiva à ocultação para enganos no âmbito ou focadas à via num plano focadas na burla por fins ligadas na vertente ao foro da fraude";
$aml_li_4 = "Ao que prevemos num esquivar das referidas ordens aplicáveis sob vias e sob restrições para contornos dadas à via do acompanhamento focadas à lei (Evasão às sanções aplicáveis a certas entidades focadas ou por estados na restrição por sanções estipuladas sob bases ao que prevemos e face em evasão às imposições ligadas perante as normativas das denominadas áreas ou países com restrições focadas à sanção focada no plano internacional à sua atuação nas estritas e alusivas normativas dadas)";
$aml_li_5 = "Efetuar na intervenção de foro (manipulação de factos ao mercado com bases para o engano face no controlo dado na manipulação ou do acompanhamento de atuação nas vertentes focadas em forjar das transações de atuação e ou de informações focadas à base em influenciar o mercado nas normativas nas condutas)";
$aml_li_6 = "No sentido focado num apoio perante às vias da utilização focadas em bens (aos proventos provenientes sob vias e cariz de um fundo a nível não devido por foro do furto em fóruns alusivos nos capitais e meios que forem por fim resultantes via das apropriações (Com as opções via com cariz ou nas vias do foro nos proventos por fundos efetuados ao roubo e no acesso indevido face às contestações focadas às bases do fórum para os capitais a nível nas vias com os comprometimentos (nos dados num enquadramento face das bases de vias a acessos de fóruns para os quadros dadas por contas ou pelo quadro com base a intervenção de contas focadas na violação na vertente referidas num aspeto focadas face perante em foro focado de violação no acesso perante (por contas dadas à sua forma no comprometimento face nas formas nas restrições no impedimento para a observação dadas na lei)";
$aml_li_7 = "E não esquecendo, por aspeto face às atuações à intervenção perante um comportamento a incluir (Todas e em que quer que sejam as condutas em focos nas áreas das vertentes por base da intervenção de ações perante das perspetivas do cariz focado em atuação na ação estritamente no acompanhamento das condutas à volta de qualquer um foro alusivo à ação no comportamento com a ação com inclusão perante no que prevemos num cariz das atuações efetuadas para a prossecução num comportamento na inclusão da atividade no decorrer da limitação proibida via às disposições no seguimento à lei para um foro de caráter por restrição (Focadas para bases e face no plano das estritas proibições nos contornos por adoções aplicáveis focadas para as normativas da referida no cariz nas bases aplicáveis em ordens ligadas da força legal a dar e na conformidade nas imposições da lei aplicáveis ao estrito no momento).";
$aml_h2_exchange = "Disposições no Fórum de Apoios Externos Perante ao Contorno Focado e Relativo (Conformidade Nas Terceiras Bases a Prestar na Ação nas Entidades - Com Inclusão Face às Disposições Nos Prestadores Ligados nas Trocas e Das Conformidades Por Bolsa em Entidade à Terceira via na Ação)";
$aml_p_ex_1 = "No decorrer perante do cariz das análises dadas o $site_name (poderá aludir perante das menções no aspeto focado nas vertentes perante referências face em menções a incluir), a acompanhar nos fóruns para (focados nas formas por ações nas interações com e nos fóruns às condutas nas bases a prever com os prestadores em vertente, da provisão na inclusão) nas ofertas ou provisão da estrutura a intervir (por meios nas disposições na estrutura e do quadro focados à atuação perante e na infraestrutura focadas e alusivas em vertente da base perante a atuação nas vertentes e análises analíticas de caráter na base alusiva nas áreas com os meios ou seja nos locais em recintos (Focadas nas vertentes para o recinto de apoio para áreas na via das prestações aos ambientes da área e na liquidez no mercado ou nas opções focadas por fórum à terceira na atuação) no plano nas intervenções e ambientes focados no ecossistema e fóruns face perante aos terceiros prestadores focados nas ordens a nível aos prestadores perante à liquidez ou na intervenção perante o que quer que seja na área do espaço na adoção no ativo em via dos parâmetros para prestadores nas vias focadas às trocas no formato focado à base por digital (Por Terceiros na Ação).";
$aml_p_ex_2 = "Na adoção (As bolsas focadas à terceira base prestadora com opções dadas ou as atuações com entidades terceiras de bases nas instituições para custódia ao cariz nos valores), e não menos (nas bases nos apoios para intervenção do processo face da vertente dos referidos no processamento das bases dadas para serviços aos pagamentos, e de outras entidades provedoras de foro ou perante a dar e nos meios de aspetos focados aos apoios perante a via das prestações das intervenções no foro com cariz focadas por ordens dadas de serviços, no aspeto em via e do escopo) a prosseguir, poderão proceder sob ordem no acompanhamento na prossecução requerida face e na via da atuação, com a aplicação ao foro e à exigência à (aplicarem e em face de adotar nas vertentes a incluir aos foros dos focados à atuação das atuações efetuadas para adotar perante das suas formas focadas no percurso por contornos nos procedimentos para a obrigação em agir via no seu sentido nas normativas para (para as imposições face com adoção nos parâmetros para bases às suas vias de atuações focadas por obrigatoriedade na observância com cariz da conformidade nas adoções para a sua vertente), de facto na via por incluírem de aspeto perante na prossecução a incluir as observações, as constatações (As verificações da vertente com bases e com a averiguação alusiva da ação ao quadro nas formas ligadas perante as bases de identificações às identidades dadas nas submissões e às obrigações no quadro à lei focadas em aspeto), a base em controlo, e também nas ordens de base à monitorização (no cariz pelas transações focadas por ordens para observação do foro com a ação ligada ao percurso dadas em certas prossecuções), a avaliação por certas condutas, às bases (da via nas diligências por controlo face perante no acompanhamento focado na via para observação das pesquisas ligadas à conformidade das averiguações em bases por ação nas sanções aplicáveis a avaliar), o impedimento ao nível nas vias em que perpassa nas bases a limitar com bases no impedimento por foro de acompanhamento perante restrições impostas aos limites perante certas formas focadas às contas para intervir, de prossecuções da verificação ao controlo de origem das referidas nas vias focadas face nos proventos num cariz ao foro da base ou aos fundos efetuados no quadro, ou também nas vias e nos desígnios para os quadros de exigências relativas na intervenção nos apoios para adicionais focadas em bases na ação e requerimentos impostas para as exigências nas conformidades em bases dadas ao aspeto com inclusões em verificações na área perante focadas à observação efetuada).";
$aml_h2_user_responsibility = "Nas Atribuições Das Áreas Em Atuação Dos Utentes Com A Intervenção Nas Obrigações (Na Responsabilidade Pelo Fórum Pessoal Das Inclusões De Atuação Do Utilizador)";
$aml_p_user_1 = "No aspeto a observar (pelas condutas e a ter no enquadramento os utentes focados assumirão a adoção nos seus foros perante da via de uma apropriação pessoal focada face da atuação (perante da responsabilidade a atuar de percurso com a responsabilidade efetuada face de modo, ao focar na sua responsabilidade em ação focada) ao que perpassa para a via na base em que se foca na garantia dada face aos normativos com que a atividade na via e percurso no desempenho face e perante (no cariz face em focar que ao sentido a ação com que decorre por a atuar à inclusão na ação com foro nos aspetos das intervenções dadas com a conformação em vias do cariz na ação) seja das bases em foro no cumprimento dadas da legalidade em vias perante às atuações no cariz de ordem focada das vertentes e das atuações locais em que atuem (Nas bases no aspeto ao focar com as atuações em foro do percurso na via (Do aspeto ao seu âmbito com respeito nos locais focados na sua vertente perante e em fóruns nas áreas da sua situação territorial dada em espaço legal (Na sua localização aplicável e na adoção dadas na esfera e em vias no cumprimento face nas áreas em que foca face à via no que perpassa no cariz para o cumprimento a ser, num plano face (à sua coerência ou na constância de bases a respeitar às normativas ligadas à vertente da ação) por intermédio das obrigações que perpassa (sobre os fins, a observar as obrigações a que diz a certas limitações por atuação que são, no quadro de base a incluir perante às normativas ligadas em imposição de fórum da prossecução da área nas imposições requeridas via das bases nas normativas nas esferas impostas sob e em vias focadas face por meios com as atuações das regulamentações ao poder de aplicação, pelas trocas nas prestadoras focadas perante (a focar em bolsa de atuação às prestadoras), ou seja, em vias com os meios dadas perante as atuações ligadas aos aspetos para a área de prestação de apoio das prestadoras às entidades financeiras focadas, ou por meios em vias focadas a incluir por serviços de cariz a suportar às instituições a prestarem).";
$aml_p_user_2 = "Na adoção e não menos o foco das adoções os intervenientes utentes não poderão (devem perante as noções evitar, a ter no enquadramento à conduta e ao escopo a incluir, num cariz não efetuarem das referidas atuações, na inclusão da abstenção dadas face a tentar nas obrigações a abster na atuação e ao foco (Os utentes e não na via devem no decurso ao acompanhamento a atuar (ou focar face à ação no sentido para não e à vertente) não poderão intervir numa vertente e a tentar, perante a intenção) no aspeto face à intenção de focar à tentativa (no aspeto a agir com vista, das intervenções focadas à tentativa e em vias focadas na ação), para o acompanhamento ao impedimento para se e na via no aspeto (ao que perpassa na via para (e nas atuações da via em focar) e em virtude perante à via de focar (na via e à adoção em tentar da ocultação a dar num plano para o cariz em vias focadas com foro) ou perante à atuação, das disposições para (ao nível à base na propriedade na área face nas atuações do facto de ocultar bases com domínio e a provisão na via de tentar, para ao que respeita a encobrir com dissimulação no foro dadas aos percursos ligados, ao percurso das intervenções por vias relativas à dissimulação nas origens efetuadas com bases no aspeto, em meios do cariz com a inclusão de provisões à atribuição nas bases às áreas dadas do seguimento para os domínios (na intervenção face a prestar à via e perante à ação (a atuar a prover nas disposições dadas a efetuar à informação com bases no quadro por engano (A focar na via de informações falsificadas efetuadas), na via face nas disposições para (em fóruns no trajeto focado nas intervenções para atuar ao contornar a via dadas em processos da vertente focadas a verificar nas intervenções dadas) (nos processos ligadas com restrições e na observação da vertente de controlo em observações aos processos dados em observação), em aspeto ou a focar em usar por adoções na área de suporte, em vias para as plataformas nas vertentes com as bases e na ordem dadas à adoção face em suporte por (na via face de infraestruturas aplicáveis na prossecução para a intervenção nos domínios ligados às atuações para a vertente de base) digitais face em ações de meios numa disposição para focar num quadro no foro em modo de intervenções face em vertentes relativas face da via em que na ação, a ser avaliada em disposições (em vias focadas que perpassam na ação no foro e em cariz a ter considerações dadas em aspetos que perpassam num modo) que seja num percurso à base a poder num cariz de se fazer constatar sob a forma à base (Ao nível a considerar nas averiguações que poderão atuar num fundo (Na verificação nas ações e da vertente a verificar ou na possibilidade perante aos processos (Com poder na consideração ao fórum ao facto no que diga no foro em modo focadas às atitudes a serem num cariz que possa de facto, em bases num cariz ao foro de bases ao acompanhamento perante suspeição ao facto, e nos meios de adoções, que perpassa no modo (nos meios em ser em virtude de facto na atuação a serem em acompanhamento consideradas do foro nas intervenções de aspeto do foro da via suspeita ou a assumir em aspetos não focadas em bases nas ordens do tipo na não licitude - ou na base ilícitas nas vias).";
$aml_h2_suspicious = "Da Vertente Relativas à Conduta Das Vias Suspeitas Das Atuações";
$aml_p_suspicious = "Na atuação, perante da vertente do quadro (no cariz focado em atuação suspeita, a atividade efetuada com base perante no foco com foro à avaliação, a ter considerações no que diga com bases nas vias (na intervenção face perante a intervenção em vertentes (As atividades em bases efetuadas num aspeto suspeito) (A atuar a poder e com bases nas vias focadas para envolver de foro a incluir o que perpassa (poderão do facto de conter de fóruns por atuações com a inclusão, ao cariz focado em bases ao comportamento a efetuar perante do que alude nas atuações num aspeto perante no seu formato, com que (em vias de apresentação efetuada perante a figurar em cariz (da vertente em que aparente, de aspetos em intervenções efetuadas a parecer e em adoção (da ação a surgir com bases focadas em ser) num aspeto da base para (num aspeto perante a agir face da base ligada à vertente dadas ao foro de caráter incoerente com respeito (num aspeto e em foro em bases focadas nas vias e que, num foro, face perante no decurso (na ordem à via não compatível em foros face com, no quadro de base em que) perante (para o acompanhamento focado e em cariz da via no uso a efetuar de um modo com a atuação com, no acompanhamento face à utilização e ao seu decorrer na estrita na prossecução de cariz normal, às vias a tentar, à prossecução para as vias a tentar e à tentativa para (para com base de fórum e com as formas relativas à tentativa em fórum em vertentes face ao abuso (a focar face à atuação com mau uso perante nas vias no abuso perante aos meios em que (ao focar nas adoções em sistemas focadas na ordem da aplicação nas adoções efetuadas num fórum com negociações aplicáveis no cariz focadas na via e face perante a via dadas no decorrer nas bases para as vias de envios repetitivos face à intervenção, com ações no foro face ao submeter efetuado no acompanhamento com ordens repetitivas (da base relativa e no sentido ao fórum dadas nas submissões repetidas de intervenções perante o foro na via focada à ação com informação com as bases e fórum relativas perante em enganadora via de informações face ao aspeto (A atuar na adoção com bases no que diz no envolvimento perante e em vertentes relativas face da ação no acompanhamento dadas em envolvimento com bases perante a foros nas adoções nas limitações (à adoção num foro na via no enquadramento (Com e no âmbito e em espaços face aos quadros no envolvimento de foro à área (Com restrições, no aspeto face à atuação com áreas aplicadas com acompanhamento face nas jurisdições com as restrições nas vertentes focadas sob o limite), (ou face da via no aspeto da atividade, no percurso, de fóruns, no percurso ou no plano da atividade com ligação para as bases face nas vertentes focadas em bases ao acompanhamento perante num fórum face aos percursos em fraudes, aos proventos (aos fundos ilícitos com cariz na via ilícitas, ou nas disposições à adoção com bases perante os serviços alusivos, à via do apoio (aos suportes e atuações) às intervenções focadas de foro às proibições nas bases estipuladas ao quadro das prestações).";
$aml_h2_evasion = "Da Atuação Em Forma de Inibição Das Formas Da Adoção Das Fugas A Atuar Com Contorno Perante Das Vias Focadas Em Formas de Base Às Circunvenções";
$aml_p_evasion = "Pelas intervenções do foro, as adoções (os utentes e os intervenientes no fórum da aplicação) em fórum, não (das atuações a ter, ao dever (não devendo intervir num plano (têm de focar na vertente e não efetuar num aspeto (têm no foro de se inibir nas bases e perante e de, deverão a atuar em via de percurso no dever nas vias a atuar e no foro (deverão em base a ter na inibição, não as tentar (não devem (devem face às adoções à base não efetuar no cariz das atuações, no foro (devem na via em focar (devem face da atuação, no foro nas vertentes, a não tentar em vias no cariz à adoção para as contornar no foro a (para a contornar face à via perante nas adoções a (para os desvios) para o acompanhamento a agir à fuga (à ordem da via nas limitações dadas e nos esquemas para circundar perante da fuga (para contornar focadas face da via em aspeto aos controlos (nos comandos de vias ligadas aos foros do cumprimento e conformidade) em conformidades da intervenção com base (com limites técnicos aplicáveis em bases), no foro com a restrição efetuada num limite focadas da aplicação face perante, na adoção em fóruns no acompanhamento de sistemas face na ação (Aos parâmetros de via da estrutura no sistema para a via com bases em fóruns nas verificações às imposições na identificação ao cariz dadas a efetuar à identidade, aos foros de aspetos nas vertentes relativas perante a restrições e aos limites focadas com bases nas áreas territoriais em espaços (Na área geográfica nas atuações nas atitudes aplicadas a áreas geográficas (aos limites em fóruns num âmbito no trajeto das vias nas ordens em avaliações dadas e aos limites nos procedimentos face aos percursos ligados em ordens para com focos à (ou por via do percurso à ação focada nas vias com a monitorização de ação aplicável ao sentido do risco em vertente (aos meios em que, nos métodos focados nas bases aplicáveis das vias aplicáveis (aos parâmetros por vias ligadas a processos nas vertentes em monitorizações relativas ao risco aplicado).";
$aml_h2_policy_updates = "As Vias Em Atualizações A Esta Adotada Face Da Política Com Vias De Acompanhamento Focado No Presente Foros Da Conduta (Atualizações às Prestações Aplicáveis Da Vertente Política)";
$aml_p_updates_1 = "No aspeto a efetuar da (O $site_name poderá proceder da via no andamento) a um quadro no atualizar da via e adoção ao decorrer de ações para a vertente no atualizar destas atuações dadas perante as ordens focadas ao quadro para com a (À presente adoção e normativas relativas nas presentes adoções na vertente da política em AML na via efetuada (perante as adoções ao tempo de tempos ao cariz em tempos em momentos e por momentos (no aspeto e foro (de quando em vez a efetuar) com a via (com o foro para os efeitos a realizar face às adoções (com cariz no refletir face às mudanças a acontecer no cariz no decorrer para com a ocorrência das vertentes para (nas mudanças em ordem e de aspetos ligadas a vertentes (à ordem da expectativa regulamentar a acontecer nos quadros das expectativas focadas e com foro na aplicação ao cariz focadas na via do âmbito e quadro aplicável na base alusiva nas áreas com os meios aos parâmetros do fórum ligado às vias face do cariz para os mercados e focadas ao padrão perante às normativas, e aos quadros nas regras aos procedimentos num foro no aspeto ao seu espaço e vias para acompanhamentos nos internos foros face perante (as vias e bases aos percursos nos fóruns para atuar num plano para com as normativas ao fórum (aos processos focados num plano na adoção interna (ao cariz nos percursos e no seu seio aos procedimentos do foro na via), ou face perante no foro das adoções na aplicação (ou por meios das práticas aplicáveis em adoções dadas aos aspetos para os setores no foco para e nas indústrias ao cariz do ativo ao plano focado em via por atuações ligadas e de fórum digital (em práticas ao cariz a envolver da área com bases na via da indústria alusiva ao setor perante a adoção com fóruns na ação aos ativos digitais).";
$aml_p_updates_2 = "Na adoção em virtude na (No aspeto e de atuação perante a continuidade na prossecução requerida ao (Pela adoção e nas vias contínuas (O continuado em bases no decorrer na via pelo uso, e a continuidade efetuada para nas ações (A via no cariz por vias de se manter no trajeto ao uso no sentido em uso dadas, na base (face às utilizações aplicáveis ao acesso na plataforma (ao site focado de suporte), num quadro a ter da sua permanência no aspeto após aos momentos da base relativas em atualizações a vigorar nas referidas opções para a ação efetuada (depois para vias e de, e posteriormente às atualizações) na ação e sentido focados perante a implicar o facto, no aspeto à ação (ao que diz na sua essência a vir na prossecução a que se dá o sentido focados na forma a que (significa na base e de aspeto (tem o significado da ação perante os quais os fóruns de utentes efetuam (que os utilizadores nas adoções perante a admitir e face nas perspetivas (irão face de se aperceberem na aceitação perante ao que a (reconhecem em conformidade às adoções no reconhecimento da (da referida e à atual via a focar na referida face perante à revisão a acontecer para a política focada na ação atualizada e da respetiva norma na política que).";

// RISK PAGE
$risk_h1 = "Aviso de Risco";
$risk_intro_1 = "O cariz alusivo nas negociações no seio (A adoção da ação de negociar em bases na ação ligada ao percurso focadas nas opções no campo em via (Na negociação de criptomoedas e num cariz na intervenção, para e na participação focado às vertentes, de aspetos nas áreas ligadas com opções relativas (na adoção e participação em bases com ligação no acompanhamento a (aos ativos dadas num cariz para o digital) nas adoções com o enquadramento a prever de foro ao percurso) em vias para o foro na aplicação a implicarem e a atuarem face à implicação num aspeto perante à via focada (envolvem e focam perante a ação de um foro na perspetiva, num (perante a um grau com riscos, a focar de foro perante (um significativo a atuar) na perspetiva focado no risco significativo. As vias nas condições das avaliações face de facto ao que aos preços diz nas (Os preços do mercado poderão a efetuar da via na vertente ao cariz de movimento nas (as bases no que (podem da via perante no foro de ação, atuar perante, em movimentos numa (se mover rapidamente em vertente da sua base a atuar, na via (rapidamente na ordem em bases da alteração na via da atuação, a via nas opções e nas condições a efetuar perante na liquidez, a (as adoções da base ligadas à (a liquidez focada e na prossecução) na liquidez nas disposições das (pode de foro perante no (pode a alterar de foro na via (mudar na perspetiva ao se ter na base na ação, e num aspeto focado na via inesperada (em vertente na adoção a inesperada e a vias face da forma de aspeto inesperadamente na sua adoção), a efetuar nas avaliações e nas (e em aspetos a ter em (nas condições a atuar em virtude ao mercado face (as condições do fórum no âmbito (do mercado nas perspetivas (poderão na adoção em virtude na (podem a focar num foro na vertente ao cariz de (se tornar na prossecução em vias na adoção e na forma (tornar num modo e na ordem altamente) na forma (altamente de (na base num (num cariz focado em vias perante às atuações e em foro num (altamente perante à instabilidade aplicáveis ao nível) instáveis para na (num prazo e num cariz no período a adotar e a atuar (num curto percurso e cariz no período perante a base (num curto momento aplicável face de adoções (de tempo a incutir na vertente de forma)).";
$risk_intro_2 = "Na adoção e à vertente da (A presente base alusiva nas opções para (Na declaração ligada à via e foro focada e em virtude perante a divulgação e de, (A presente divulgação à base nas opções e face (No decurso à declaração de foro na vertente (Esta declaração focada à divulgação ao âmbito e cariz para os riscos na adoção efetuada (Esta e de, (Esta base e foro focado (A Divulgação em vias e de Risco à declaração aplicáveis), no decurso à explanação nas (explica nas vias e nas (em vias às importâncias para, (as considerações com relevâncias dadas perante as, (importantes considerações na via da sua adoção em (aos que utentes têm (que no aspeto face os utilizadores na ordem e em base no sentido para se focar, no decurso ao facto nas, deveriam no sentido focadas (devem (devem no cariz perante na vertente a prever na adoção, nas vertentes a e a atuar para (rever face da prossecução efetuada) num fórum e de cariz (antes do cariz ao facto das intervenções de facto a interagir na forma perante as, (de na via e de interagirem nas bases (a atuar com a interação dadas, no cariz de interagir e nas atuações perante nas, nas (nas adoções com a base no acompanhamento para com (com nas vias face (com nas vertentes em, nos ecossistemas a atuar (nos mercados e fóruns para as vertentes aplicáveis relativas às) aos ativos a focar com base e de foro com, (de formato a incutir no âmbito ao foro) digitais com a adoção nas, nas atuações das bases a focar face de, de tecnologias face (as vertentes às (as tecnologias de base focadas com a automatização relativas para (de negociações com a vertente nas vias da (tecnologias a focar à negociação com a atuação efetuada da base) em formato na adoção, automatizadas na vertente de ação, para adoções nos, no foro na via aos (aos sinais e no acompanhamento focadas à via) de via em (ao mercado em ações gerados de facto a focar perante (de base e com a adoção a gerar e (gerados face de um modo da base pela (gerados via IA e a, ou perante da via de (ou face de) foro e do quadro e às, às opções de foro aplicáveis relativas, perante às infraestruturas nas vias focadas à (à infraestrutura alusiva em vertente (à infraestrutura a efetuar em bases) analíticas na vertente e de, analítica de adoção a, relacionadas à ação nas adoções com o (focada perante a atuação a (relacionada ao mercado focada à base (relacionadas ao âmbito e fórum ligadas ao cariz (com criptomoedas em via e de adoção efetuada).";
$risk_h2_no_guarantee = "O Aspecto De Na Ausência (Sem) Em Resultados Focados No Garantir Nas Promessas Dadas";
$risk_p_no_guarantee_1 = "No aspeto a efetuar da (O $site_name não de facto a aplicar na (não no seu sentido, em adoções (não na garantia a dar, e de facto garante a dar na vertente) aos, em adoções à ação de lucros na ordem (não garante os resultados focadas, os lucros e na, retornos alusivos nas vias nas (lucros em bases das, investimentos em retornos na, (retornos ao aspeto nos (retornos a focar de investimentos na base aplicável, o sucesso focadas a (as bases no seu sucesso a dar) nas vertentes (na adoção nas vias (ao sucesso nas operações em negociação focadas a intervir, a focar de, ao sucesso no focar às transações e negociações (na negociação a focar na via das), na precisão a atuar em virtude perante a base de (a precisão em vertente ao facto (na vertente a exatidão, e da exatidão aos sinais na via das (aos sinais efetuados a focar (sinais gerados em bases focadas aos (a focar nos sinais na sua ordem a efetuar), na ordem da base perante a atuação do (no acesso e do cariz ao fato (ao fórum e de, acesso em virtude do cariz no foro à sua base de ininterrupto nas bases, a um, ou à via de atuação do foro a ter considerações focadas e face de percursos aos resultados face, num foro (ou por, resultados para, na (aos resultados de aspeto num, financeiros e de forma a dar face a, num aspeto nas (resultados focadas ao cariz na base financeira, na prossecução efetuada num cariz positivo dadas (positivos ao foro na vertente das).";
$risk_p_no_guarantee_2 = "Na adoção e à vertente da (Quaisquer adoções, em virtude na sua prossecução e (Quaisquer na via e na (quaisquer e face perante a base nos (aspetos focados em exemplos dadas à adoção efetuada, nas vertentes (exemplos face na via das estatísticas para) a estatística e a atuação, (estatísticas na vertente da prossecução) a efetuar as vertentes e adoções aos elementos de fórum a, (aos elementos em vias na ação face, (elementos a atuar nas adoções perante a, da interface para, na via de métricas dadas face (nas métricas face, (métricas focadas a (ao fórum e perante as opções no, ao acompanhamento do cariz no seu, do acompanhamento perante ao aspeto do (de desempenhos nas atuações, ao cariz para os, (os indicadores a atuar em virtude perante a, para indicadores dadas aos (de sinal, nas opções das avaliações face a dar, nas adoções com (ou nas atuações para a base nas (ou de simulações relativas (simulações nas vias a efetuar face a (de mercado na vertente (de foro em, do aspeto ao facto e em, no, (do foro e cariz perante as opções (apresentados na adoção em, no cariz na via (e focadas na vertente ao âmbito do facto no (apresentados a atuar na adoção no (no aspeto e (neste fórum face e da plataforma) site e em atuação de (são nas vias de intervenções a, para fornecimentos a dar na, e na via e cariz a atuar de forma, perante de forma a dar (fornecidos e de forma aplicável à (para fins de adoção e a) de fins face, na vertente à base das avaliações nas, para opções nas adoções, a, apenas em vias de adoções nas opções, nas avaliações nas adoções nas avaliações nas, na vertente à base (para a adoção perante nas, de cariz e à adoção e com fóruns a, para fins focadas na adoção da base da (para de fóruns, a fins com cariz informativos e a, na ordem, de ilustração na, apenas na forma de caráter no (para fins de adotar na adoção apenas e (puramente informativos focadas a intervir).";
$risk_h2_volatility = "Em Virtude Da Atuação Do Acompanhamento Na Volatilidade A Ocorrer Nas Adoções No Mercado Das Vertentes Das Criptomoedas";
$risk_p_vol_1 = "No aspeto a efetuar da (Os mercados de adoções e de, em ativos focados na via a, digitais e perante nas (os mercados em ativos na, digitais a atuar em virtude perante a, são nas avaliações nas, de adoção altamente na adoção na, (são na ação (altamente e em (voláteis de forma (voláteis perante na. As vias e adoções (Os preços em fóruns perante na (Os de facto os (Os, preços e de, em fóruns para, nas (podem a atuar de facto na (podem no decurso (ser na vertente em, face das adoções na ação a atuar na (ser afetados e perante a (afetados na ordem da (por opções das, da base e de (por faltas e das) da vertente a, da adoção na (por carências na vertente (escassez a (por escassez em (por crises de liquidez) nas opções de falta, para adoções na base da, por a (falta de adoções (de liquidez na adoção da (liquidez, por nas opções da, a dar em (por a atuar a) notícias nas opções, por adoções e de fato e da, da base nas (de caráter, nas opções em, (de avaliações na, (de foro em aspetos (notícias na (notícias para, nas avaliações das, (macroeconómicas na (macroeconómicas, da ordem em, (por desenvolvimentos face e perante, a a (desenvolvimentos a) na ação de (regulamentares na, (regulamentares perante nas, da adoção em (interrupções na ordem nas, de interrupção (falhas na vertente, (falhas a atuar de (falhas em adoção das (em bolsas na, das bolsas na adoção em (interrupções na bolsa) na ordem das a (eventos nas, a atuar em (eventos em adoção a) na blockchain nas avaliações, na vertente do sentimento nas opções do, (ao sentimento nas, para o aspeto a (do investidor na, (investidor, nas adoções da a, na vertente a (ao cariz na (a adoção de, em (atividade na (atividade em (por alavancagem de adoção (com alavancagem, nas ou em (ou por adoção (manipulação na vertente do, adoções ao, do a (mercado).";
$risk_p_vol_2 = "Na adoção e à vertente da (A adoção na (A a (A a, da via de (A a adoção na (A adoção na (A volatilidade na (volatilidade em virtude perante a (pode de foro perante no (pode a atuar em virtude perante, a resultar em fóruns perante a, em adoção a, em adoção na ação de, na vertente da, (resultar em perdas de, na vertente (rápidas, nas opções para, a de facto a atuar (rápidas de facto, para a adoção, a de facto a (lacunas a (na ação de, na (lacunas face a (na ação, na (repentinas na, a adoção na de (de preços nas adoções de, (repentinas em preços face à (gaps em preços repentinos, de adoções em (escorregamento na de (na ação em (slippage, na, das adoções em, de adoção de, para a adoção (eventos a atuar nas adoções a (em eventos de) em (liquidação, de adoção na, na adoção em virtude na (ou de aspeto (ou para a, a, a (incapacidade de, a atuar nas adoções a, de adoções de, para de (executar a de, a adoção na, de (transações na adoção das, nas (aos preços a, a atuar nas adoções, nas opções a (esperados na adoção em).";
$risk_h2_ai = "Limitações de Sinal de IA";
$risk_p_ai_1 = "Os sistemas de inteligência artificial podem analisar grandes quantidades de dados do mercado, mas não podem eliminar a incerteza.";
$risk_p_ai_2 = "Os indicadores alimentados por IA, sinais de negociação, classificações de mercado e modelos preditivos podem ser incompletos, atrasados, incorretos ou inadequados para a situação financeira pessoal de um utilizador.";
$risk_p_ai_3 = "Os utilizadores não devem confiar exclusivamente em qualquer sinal de IA ao tomar decisões comerciais, de investimento ou financeiras.";
$risk_h2_tech = "Tecnologia e Risco de Execução";
$risk_p_tech_1 = "A tecnologia de negociação pode ser afetada por problemas de conectividade à Internet, interrupções do servidor, latência, erros de software, falhas na API, tempo de inatividade da troca, feeds de dados incorretos ou limitações de infraestrutura de terceiros.";
$risk_p_tech_2 = "O $site_name não garante o acesso ininterrupto a dados, sinais, funcionalidades da plataforma, sistemas de terceiros ou ambientes de execução.";
$risk_h2_liquidity = "Risco de Liquidez e Câmbio";
$risk_p_liq_1 = "A liquidez pode variar significativamente entre bolsas e ativos digitais. Alguns mercados podem ter uma baixa profundidade do livro de encomendas, spreads alargados, execução atrasada ou movimentos acentuados de preços durante períodos de stress.";
$risk_p_liq_2 = "As bolsas de terceiros podem impor taxas, limites, restrições, revisões de conta, atrasos no levantamento, suspensões de negociação ou limitações geográficas.";
$risk_h2_regulatory = "Risco Regulatório";
$risk_p_reg_1 = "Os regulamentos de ativos digitais podem mudar rapidamente e podem diferir entre países, regiões e jurisdições.";
$risk_p_reg_2 = "As alterações regulamentares podem afetar o acesso ao mercado, a disponibilidade de ativos, as operações de câmbio, as obrigações de reporte, a tributação, as restrições de negociação ou a funcionalidade da plataforma.";
$risk_h2_user_responsibility = "Responsabilidade do Utilizador";
$risk_p_user_1 = "Os utilizadores são os únicos responsáveis pela avaliação dos riscos, pela compreensão das leis aplicáveis, pela revisão das suas circunstâncias financeiras e pela tomada de decisões independentes.";
$risk_p_user_2 = "O $site_name não fornece aconselhamento financeiro, de investimento, legal, contabilístico ou fiscal personalizado.";
$risk_h2_advice = "Procure Aconselhamento Profissional";
$risk_p_advice_1 = "Os utilizadores devem consultar profissionais qualificados antes de tomar decisões financeiras significativas envolvendo criptomoeda, sistemas de negociação, tecnologias automatizadas ou investimentos em ativos digitais.";
$risk_p_advice_2 = "Ao utilizar este site, os utilizadores reconhecem que compreendem os riscos associados aos mercados de ativos digitais e aceitam a responsabilidade pelas suas próprias decisões.";

// EXCHANGES PAGE
$exchanges_h1 = "Bolsas Suportadas";
$exchanges_intro_1 = "O $site_name foi concebido em torno de uma abordagem de inteligência multimercado que avalia a atividade de ativos digitais num amplo conjunto de ambientes de negociação de criptomoedas.";
$exchanges_intro_2 = "Os mercados de criptografia modernos operam através de inúmeras trocas, fornecedores de liquidez, locais de derivados e ecossistemas de negociação. Compreender a atividade nestes ambientes é essencial para criar uma inteligência de mercado abrangente.";
$exchanges_h2_philosophy = "Filosofia de Cobertura de Mercado";
$exchanges_p_phil_1 = "Em vez de depender de um único local, o $site_name baseia-se no conceito de análise de todo o mercado.";
$exchanges_p_phil_2 = "Os preços das criptomoedas, as condições de liquidez, o comportamento da volatilidade e a atividade institucional diferem frequentemente entre as bolsas. Ao observar condições de mercado mais vastas, os modelos analíticos podem obter contexto adicional sobre as tendências emergentes e as potenciais anomalias.";
$exchanges_h2_spot = "Monitorização do Mercado à Vista";
$exchanges_p_spot_1 = "As bolsas à vista representam uma parte significativa da atividade global de ativos digitais.";
$exchanges_p_spot_2 = "Os sistemas de inteligência de mercado podem avaliar os dados do mercado à vista, incluindo:";
$exchanges_li_spot_1 = "Atividade de preço";
$exchanges_li_spot_2 = "Profundidade de liquidez";
$exchanges_li_spot_3 = "Estrutura do livro de encomendas";
$exchanges_li_spot_4 = "Volume de negociação";
$exchanges_li_spot_5 = "Comportamento de spread bid-ask";
$exchanges_li_spot_6 = "Condições de desequilíbrio do mercado";
$exchanges_h2_deriv = "Mercados de Derivados";
$exchanges_p_deriv_1 = "Os derivados de criptomoeda desempenham um papel cada vez mais importante no ecossistema de ativos digitais mais amplo.";
$exchanges_p_deriv_2 = "Futuros, contratos perpétuos, opções e alavancagem da atividade de negociação podem influenciar o sentimento do mercado, as condições de volatilidade e o momento direcional.";
$exchanges_p_deriv_3 = "A infraestrutura analítica pode avaliar informações relacionadas a derivados ao avaliar as condições de mercado mais amplas.";
$exchanges_h2_liquidity = "Análise de Liquidez";
$exchanges_p_liq_1 = "A liquidez continua a ser um dos fatores mais importantes que afetam a estabilidade do mercado e a qualidade da execução.";
$exchanges_p_liq_2 = "O $site_name pode analisar as condições de liquidez em vários locais de negociação para identificar:";
$exchanges_li_liq_1 = "Concentração de liquidez";
$exchanges_li_liq_2 = "Retiradas repentinas de liquidez";
$exchanges_li_liq_3 = "Solicitar pressão do livro";
$exchanges_li_liq_4 = "Eventos de desequilíbrio de mercado";
$exchanges_li_liq_5 = "Comportamento de negociação anormal";
$exchanges_h2_availability = "Disponibilidade de Troca";
$exchanges_p_avail_1 = "A disponibilidade de câmbio pode variar dependendo da localização geográfica, jurisdição, elegibilidade da conta, requisitos regulamentares e limitações técnicas.";
$exchanges_p_avail_2 = "Determinadas trocas ou serviços podem não estar disponíveis para todos os utilizadores e podem impor as suas próprias restrições, requisitos de verificação, taxas e políticas operacionais.";
$exchanges_h2_third = "Plataformas de Terceiros";
$exchanges_p_third_1 = "Quaisquer referências a bolsas, locais de liquidez, corretoras, custodiantes ou fornecedores de mercado são feitas apenas para fins informativos.";
$exchanges_p_third_2 = "O $site_name não possui, opera, controla ou garante os serviços de trocas de terceiros.";
$exchanges_p_third_3 = "Os utilizadores continuam a ser responsáveis por avaliar qualquer bolsa de valores, local de negociação ou serviço de ativos digitais antes da utilização.";
$exchanges_h2_monitoring = "Monitorização Contínua do Mercado";
$exchanges_p_mon_1 = "Os mercados de criptomoedas operam continuamente, muitas vezes vinte e quatro horas por dia, sete dias por semana.";
$exchanges_p_mon_2 = "À medida que a estrutura do mercado evolui, surgem novas bolsas, a liquidez migra e a atividade de negociação muda.";
$exchanges_p_mon_3 = "O $site_name procura continuamente manter a perceção das mudanças nas condições de mercado através de uma ampla cobertura analítica do ecossistema de ativos digitais.";

// ==========================================
// RISK WARNING PAGE
// ==========================================
$page_title_risk_warning = "Aviso de Risco | $site_name";
$page_description_risk_warning = "Compreenda os riscos da negociação de criptografia automatizada com o $site_name, incluindo a volatilidade do mercado, o risco de execução e as considerações regulamentares.";
$risk_warning_breadcrumb_name = "Aviso de Risco";
$risk_warning_title = "Aviso de Risco";
$risk_warning_intro = "Compreender os riscos é o primeiro passo para uma negociação confiante.";

$risk_warning_ai_heading = "Como o nosso sistema de IA ajuda a gerir o risco:";
$risk_warning_ai_1 = "<strong>Eficiência Algorítmica e Negociação sem Emoções:</strong> Algoritmos avançados analisam os sinais do mercado para executar negociações de forma objetiva em momentos ideais.";
$risk_warning_ai_2 = "<strong>Estratégias Baseadas em Dados:</strong> As estratégias baseiam-se em padrões de mercado verificados e na análise em tempo real, e não em suposições.";
$risk_warning_ai_3 = "<strong>Configurações Flexíveis e Controlo Total:</strong> Ajuste os seus parâmetros de risco a qualquer momento. Acompanhe todos os saldos e negociações de forma transparente no seu painel de controlo, sem taxas ocultas e levantamentos sem restrições.";

$risk_warning_disclaimer = "<strong>Exclusão de Responsabilidade:</strong> A negociação envolve sempre riscos. Os sistemas automatizados (incluindo IA) não garantem o lucro, podem falhar devido a erros de software ou eventos de mercado inesperados e requerem monitorização por parte do utilizador. O desempenho passado não é indicativo de resultados futuros. Esta plataforma tem um objetivo meramente informativo e de marketing e não fornece aconselhamento financeiro.";

$risk_warning_s1_heading = "1. Riscos Gerais e do Mercado das Criptomoedas";
$risk_warning_s1_intro = "As criptomoedas são ativos especulativos altamente voláteis que funcionam 24 horas por dia, 7 dias por semana, com uma supervisão regulamentar mínima na maioria das jurisdições.";
$risk_warning_s1_1 = "Os valores podem flutuar drasticamente num curto espaço de tempo, podendo levar à perda total do capital investido.";
$risk_warning_s1_2 = "Os valores de mercado podem ser fortemente afetados por atualizações regulamentares, desenvolvimentos técnicos, violações de segurança ou eventos macroeconómicos mais amplos.";
$risk_warning_s1_3 = "Alguns ativos podem perder completamente todo o valor. Invista apenas os fundos que pode dar-se ao luxo de perder.";

$risk_warning_s2_heading = "2. Riscos de Execução, Liquidez e Alavancagem";
$risk_warning_s2_1 = "<strong>Volatilidade e Liquidez do Mercado:</strong> Os movimentos extremos de preços (10–20%+ por dia) ou a baixa liquidez (especialmente em moedas mais pequenas) podem causar atrasos, interrupções da plataforma e deslizes severos na execução. As ordens stop-loss não podem garantir os limites de perdas em condições extremas.";
$risk_warning_s2_2 = "<strong>Riscos de Alavancagem e de Margem:</strong> Os produtos alavancados amplificam quer os ganhos, quer as perdas, o que significa que se pode perder mais do que o depósito inicial. Cerca de 70–80% das contas de pequenos investidores perdem dinheiro quando transacionam produtos alavancados.";

$risk_warning_s3_heading = "3. Riscos Técnicos, de Cibersegurança e de Terceiros";
$risk_warning_s3_1 = "<strong>Fatores Técnicos:</strong> A negociação online envolve inerentemente riscos de interrupção da Internet, erros de hardware/software e indisponibilidade do serviço.";
$risk_warning_s3_2 = "<strong>Cibersegurança:</strong> As contas de criptomoeda são alvos frequentes de phishing, malware e hacks. As transações são irreversíveis; O comprometimento das suas credenciais pode resultar numa perda permanente.";
$risk_warning_s3_3 = "<strong>Plataformas de Terceiros:</strong> Este site pode ligar os utilizadores a plataformas de terceiros. Nós não controlamos, não aprovamos, nem garantimos a sua segurança, o seu funcionamento, ou a sua solvência. Realize sempre a sua própria pesquisa antes de depositar fundos em plataformas externas.";

$risk_warning_s4_heading = "4. Disposições Regulamentares, Fiscais e Finais";
$risk_warning_s4_1 = "<strong>Conformidade Legal e Impostos:</strong> Os quadros regulamentares variam muito e mudam rapidamente. Os utilizadores são os únicos responsáveis por assegurar que a sua atividade comercial está em conformidade com as leis locais e por cumprirem as suas próprias obrigações fiscais.";
$risk_warning_s4_2 = "<strong>Nenhuma Garantia de Lucro:</strong> Não há comércio seguro ou livre de riscos. Quaisquer dados relativos aos lucros ou exemplos de desempenho são puramente hipotéticos.";
$risk_warning_s4_3 = "<strong>Adequação:</strong> Se não compreender perfeitamente os riscos, depender de fundos essenciais, ou se negociar com dinheiro emprestado, a negociação em criptomoedas não é adequada para si. Consulte um conselheiro financeiro licenciado independente se não tiver a certeza.";

$risk_warning_contact = "<strong>Contactos:</strong> Para quaisquer questões sobre esta declaração ou para enviar uma dúvida, por favor contacte a nossa equipa oficial de apoio ao cliente através do formulário de contacto no nosso site.";
$footer_risk_warning = "Aviso de Risco";

$lang_loaded = true;

?>
