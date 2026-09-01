<?php
require __DIR__ . '/../lang.php';
$site_lang = 'pt-PT';
$form_language = 'pt'; // matches this page's own language, not the offer's global default

// ============================================================
// PT TRANSLATION OVERRIDES
// Identity/config vars ($site_name, $site_slug, $site_domain, $site_url, $app_price, $app_currency, $site_lang, $country_name, $country_flag_code, $privacy_last_update, $rating_value, $rating_count, $review_count, $form_country, $form_language, $form_phone_country, $form_only_countries, $review_1_author, $review_2_author, $review_3_author, $review_4_author, $quiz_consultant_name) are
// intentionally NOT overridden -- they stay exactly as inherited from the
// root lang.php.
// ============================================================

// Brand / Platform Variables

// Geo-language stats bar fallback content (used by the language-folder pages'
// own "stats" section; the fr/de/it/nl folders override these with native
// translations, the other 19 folders inherit this English fallback)
$stat_1_value = "4M+";
$stat_1_label = "Usuários Registrados";
$stat_2_value = "98+";
$stat_2_label = "Países Suportados";
$stat_3_value = "65+";
$stat_3_label = "Moedas Disponíveis";
$stat_4_value = "24/7";
$stat_4_label = "Acesso a Transações";
$stat_5_value = "256-bit";
$stat_5_label = "Padrão de Criptografia";
$stat_6_value = "$500M+";
$stat_6_label = "Depósitos Totais de Clientes";

// Keitaro Form Integration Variables (defaults -- overwritten per-launch by
// generate_lang_files(); must stay valid on their own since nothing else in
// this file replaces them for a page that's ever served un-generated)

// 4 Verified Reviews (TZ Item 8)
$review_1_role = "França";
$review_1_text = "Comecei com €500 só para ver como a plataforma funcionava. Depois de cerca de três semanas, meu saldo havia crescido para cerca de €1120. A interface é fácil de usar, e as informações de mercado me ajudaram a tomar melhores decisões.";
$review_1_badge = "Retorno Reportado +18,4%";

$review_2_role = "Alemanha";
$review_2_text = "Já experimentei algumas plataformas de negociação antes, mas esta tem sido minha favorita até agora. É fácil de navegar, as ferramentas são realmente úteis e tive uma experiência muito positiva no geral.";
$review_2_badge = "Retorno Reportado +19,1%";

$review_3_role = "Itália";
$review_3_text = "O que mais me impressionou foi o quão intuitivo tudo parece. O registro foi rápido, o painel é bem organizado e a plataforma tornou a negociação muito mais conveniente para mim.";
$review_3_badge = "Retorno Reportado +16,8%";

$review_4_role = "Países Baixos";
$review_4_text = "Eu não tinha experiência prévia em negociação, então comecei com €750. Em um mês, alcancei pouco mais de €1.765 seguindo as ferramentas e recursos de aprendizagem. Foi uma ótima maneira de ganhar confiança.";
$review_4_badge = "Retorno Reportado +18,0%";

$review_verified_label = "Usuário Verificado";
$reviews_section_title = "Avaliações sobre $site_name";
$reviews_badge_trustworthy = "Confiável";
$reviews_summary_rating = "4,7";
$reviews_summary_count = "189";
$reviews_summary_desc = "Uma plataforma de negociação poderosa e intuitiva com ferramentas automatizadas robustas, análises em tempo real e recursos de aprendizagem abrangentes.";

// CONSULTANT / CHAT QUIZ (TZ Item 13)
$quiz_consultant_role = "Consultor de Negociação";
$quiz_text_welcome = "Olá! Sou seu assistente pessoal de negociação. Faça um teste de 30 segundos para descobrir como a negociação automatizada com IA pode funcionar para você.";
$quiz_text_q1 = "Você já negociou criptomoedas ou mercados financeiros antes?";
$quiz_text_a1_yes = "Sim, tenho alguma experiência";
$quiz_text_a1_no = "Não, sou totalmente iniciante";
$quiz_text_q2 = "Qual é o seu principal objetivo financeiro com a negociação online?";
$quiz_text_q3 = "Você prefere que a IA execute negociações automaticamente, ou negociar manualmente?";
$quiz_text_a3_yes = "Negociação Automatizada com IA (Recomendado)";
$quiz_text_a3_no = "Negociação Manual com Sinais de IA";
$quiz_text_q4 = "Qual é o seu orçamento inicial para negociação?";
$quiz_text_a4_1 = "$250 - $500";
$quiz_text_a4_2 = "$500 - $1.500";
$quiz_text_a4_3 = "$1.500+";
$quiz_text_q5 = "Está pronto para criar sua conta e receber acesso total à plataforma?";
$quiz_text_a5_yes = "Sim, vamos começar!";
$quiz_text_a5_no = "Gostaria de mais informações";
$quiz_text_loader = "Analisando suas respostas e preparando os parâmetros ideais de negociação...";
$quiz_text_final_ttl = "A Configuração da Sua Conta Está Pronta!";
$quiz_text_processing = "Configurando seu acesso à plataforma...";
$quiz_text_typing = "está digitando...";
$quiz_placeholder_fname = "Primeiro Nome";
$quiz_placeholder_lname = "Sobrenome";
$quiz_placeholder_email = "Endereço de E-mail";
$quiz_placeholder_phone = "Número de Telefone";
$quiz_btn_submit = "Concluir Cadastro";

// METADATA (TZ Item 10)
$home_meta_title = "$site_name — Plataforma de Negociação | Site Oficial";
$home_meta_description = "O site oficial $site_name oferece uma plataforma segura de negociação de criptomoedas com ferramentas avançadas, informações de mercado em tempo real e uma experiência amigável para os traders.";

// NAVIGATION & HEADER (TZ Item 3, 12)
$nav_about = "Sobre Nós";
$nav_how = "Como Funciona";
$nav_why = "Por Que Negociar";
$nav_faq = "FAQ";
$nav_contacts = "Fale Conosco";
$nav_signin = "Entrar";
$nav_signup = "Cadastrar-se";

$mobnav_home = "Início";
$mobnav_product = "Produto";
$mobnav_offer = "Oferta";
$mobnav_contact = "Fale Conosco";
$mobnav_faq = "FAQ";
$mobnav_signup = "Cadastrar-se";

// HERO SECTION
$hero_h1 = "Plataforma <mark>$site_name</mark>";
$hero_text = "Plataforma oficial de negociação de criptomoedas $site_name";

// LEAD FORM
$form_fname_placeholder = "Primeiro Nome";
$form_lname_placeholder = "Sobrenome";
$form_email_placeholder = "E-mail";
$form_phone_placeholder = "Número de Telefone";
$form_btn_submit = "Cadastrar-se";
$form_disclaimer_text = "Ao inserir suas informações pessoais e clicar no botão, você aceita a <a class='link link-primary' href='privacy.php'>Política de Privacidade</a> e os <a class='link link-primary' href='conditions.php'>Termos de Uso</a> deste site.";

// SECURITY BADGES
$badge_ssl = "SSL de 256 bits";
$badge_payments = "Pagamentos Seguros";
$badge_2fa = "2FA";
$badge_cold_storage = "98% Cold Storage";
$badge_regulated = "Regulamentado";
$badge_traders_trust = "Mais de 4M de Traders Confiam";

// SAFE SECTION (Vos fonds sont en sécurité)
$safe_title = "<mark>Seus Fundos Estão Seguros</mark> com $site_name";
$safe_desc = "Criptografia de nível bancário, processadores de pagamento verificados e 98% de cold storage — seu dinheiro está protegido em cada etapa.";

$safe_item1_title = "Provedores de Pagamento Verificados";
$safe_item1_desc = "Os pagamentos são processados exclusivamente por provedores certificados que cumprem os padrões internacionais de segurança. Os dados do seu cartão nunca são armazenados em nossa plataforma.";
$safe_item1_badge = "Pagamentos Seguros";

$safe_item2_title = "Autenticação de Dois Fatores (2FA)";
$safe_item2_desc = "Adicione uma camada extra de proteção à sua conta com senhas de uso único baseadas em tempo via SMS ou Google Authenticator.";
$safe_item2_badge = "2FA";

$safe_item3_title = "98% Cold Storage";
$safe_item3_desc = "A grande maioria dos ativos digitais é mantida em cofres cold storage offline geograficamente distribuídos e protegidos por protocolos multiassinatura.";
$safe_item3_badge = "98% Cold Storage";

$safe_item4_title = "Execução Regulamentada";
$safe_item4_desc = "Trabalhamos com corretoras e provedores de liquidez regulamentados em todo o mundo para manter conformidade, transparência e execução de alto nível.";
$safe_item4_badge = "Regulamentado";

$safe_item5_title = "Criptografia SSL de 256 bits";
$safe_item5_desc = "Todas as transmissões de dados entre seu navegador e nossos servidores são criptografadas com protocolos criptográficos de nível militar TLS 1.3.";
$safe_item5_badge = "SSL de 256 bits";

// FREE GUIDE CTA BANNER (CTA 2)
$guide_cta_title = "Receba o Guia Gratuito";
$guide_cta_subtitle = "«10 Erros a Evitar na Negociação de Criptomoedas»";
$guide_cta_btn = "Solicitar Guia Gratuito";

// TRUST SECTION (Pourquoi les investisseurs font confiance à Ciel Cryptance)
$trust_title = "Por Que os Traders Confiam na <mark>$site_name</mark>";
$trust_desc = "Mais de 4.000.000 de usuários em todo o mundo escolhem a $site_name por sua confiabilidade, automação poderosa e ambiente transparente.";
$trust_subtitle = "Principais Benefícios para o Trader Moderno:";

$trust_item1_title = "Acesso a Mercados Globais";
$trust_item1_desc = "Negocie mais de 100 criptomoedas, pares Forex, ações e commodities a partir de um único painel de negociação unificado.";

$trust_item2_title = "Proteção Robusta de Fundos";
$trust_item2_desc = "Contas segregadas, verificações biométricas contínuas e cibersegurança de ponta protegem seu capital 24/7.";

$trust_item3_title = "Zero Taxas Ocultas";
$trust_item3_desc = "Aproveite preços cristalinos. Registro gratuito, depósitos gratuitos, sem taxas de gestão de plataforma e solicitações de saque instantâneas.";

$trust_item4_title = "Suporte Responsivo";
$trust_item4_desc = "Nossa equipe de suporte dedicada está disponível via chat ao vivo, telefone ou e-mail para ajudar com quaisquer dúvidas ou questões técnicas.";

$trust_market_info_text = "Mais informações sobre as condições de mercado em 2026";
$trust_market_info_btn = "Por Que Negociar";

// START TRADING CTA (CTA 3)
$start_cta_title = "Comece a Negociar com <span data-local-currency='$app_price'>$app_price $app_currency</span>!";
$start_cta_desc = "Pronto para experimentar a $site_name? Cadastre-se agora e junte-se à crescente comunidade de investidores e traders de criptomoedas.";
$start_cta_btn = "Cadastrar-se";

// FAQ SECTION
$faq_title = "Perguntas Frequentes da $site_name <mark>(FAQ)</mark>";
$faq_q1 = "O que é a $site_name e como funciona?";
$faq_a1 = "É uma plataforma de negociação alimentada por IA que trabalha para você 24 horas por dia. O sistema analisa mercados, identifica oportunidades e executa negociações automaticamente. Você pode deixar a IA cuidar de tudo ou mudar para o modo manual para negociar do seu jeito a qualquer momento.";

$faq_q2 = "Quão seguro está meu dinheiro e dados na $site_name?";
$faq_a2 = "A segurança está integrada em cada camada da plataforma. Os dados pessoais são protegidos usando padrões de criptografia reconhecidos internacionalmente e autenticação avançada de conta. Todas as transações financeiras são processadas exclusivamente por provedores de pagamento confiáveis e verificados. Toda a sua atividade de negociação é visível em tempo real, então você sempre sabe exatamente o que está acontecendo com seus fundos.";

$faq_q3 = "Posso sacar meus lucros a qualquer momento?";
$faq_a3 = "Sim. Não há restrições sobre quando ou com que frequência você pode sacar seus fundos da $site_name. O saldo da sua conta permanece sob seu controle total o tempo todo. Os saques são processados pelos mesmos provedores de pagamento confiáveis usados para depósitos, garantindo transferências rápidas e seguras.";

$faq_q4 = "Existem taxas ocultas ou cobranças extras?";
$faq_a4 = "Nenhuma. A $site_name não cobra taxas de assinatura, taxas de registro ou custos ocultos. O único valor necessário para começar é o depósito mínimo de <span data-local-currency='$app_price'>$app_price $app_currency</span>, creditado diretamente na sua conta de negociação. Todos os principais métodos de pagamento são aceitos, incluindo cartões de crédito, transferências bancárias e PayPal.";

$faq_q5 = "É necessária alguma experiência prévia em negociação para começar?";
$faq_a5 = "De forma alguma. A $site_name foi projetada tanto para iniciantes completos quanto para traders experientes. No modo totalmente automatizado, a IA cuida de tudo para você, incluindo análise de mercado, geração de sinais e execução de ordens. Se preferir manter o controle, você pode mudar para o modo manual a qualquer momento.";

$faq_cta_text = "Dúvidas? Confira nosso FAQ ou entre em contato com nossa equipe de suporte.";
$faq_cta_faq_btn = "FAQ";
$faq_cta_contact_btn = "Fale Conosco";

// NEW TRADER LEAD SECTION (Bottom form)
$lead_title = "Novo na Negociação?";
$lead_p1 = "Após o registro, você receberá nosso guia gratuito <mark class='text-on-surface-tertiary-accent'>«10 Erros a Evitar na Negociação de Criptomoedas»</mark>. Ele contém conselhos diretos de nossos analistas mais experientes para ajudá-lo a evitar erros comuns.";
$lead_p2 = "Basta inserir seus dados no formulário de registro e nós o enviaremos diretamente para sua caixa de entrada. Muitos traders começaram com este guia e o consideraram inestimável para construir confiança em suas primeiras negociações.";
$lead_form_heading = "O mercado não espera — comece hoje!";

// FEATURES TABLE (Fonctionnalités principales)
$features_title = "<mark>Principais Características</mark> da Plataforma de Negociação $site_name";
$feature_1_title = "🤖 Tecnologia da Plataforma";
$feature_1_val = "Motor de negociação avançado alimentado por IA";
$feature_2_title = "💳 Métodos de Financiamento";
$feature_2_val = "Principais cartões de crédito, transferências bancárias, PayPal";
$feature_3_title = "📱 Acesso à Plataforma";
$feature_3_val = "Compatibilidade multi-dispositivo (Desktop, Tablet, Celular)";
$feature_4_title = "🚀 Taxa de Sucesso";
$feature_4_val = "85% de precisão analítica";
$feature_5_title = "📊 Instrumentos de Negociação";
$feature_5_val = "Criptomoedas, Forex, Ações, Commodities, Metais Preciosos, CFDs e mais…";
$feature_6_title = "✍️ Configuração de Conta";
$feature_6_val = "Registro rápido e direto";
$feature_7_title = "📞 Suporte ao Cliente";
$feature_7_val = "Suporte profissional dedicado 24/7";

// FOOTER DISCLAIMER (TZ Item 21)
$footer_disclaimer_p1 = "A $site_name fornece conteúdo educacional e informações gerais sobre mercados financeiros, negociação online e ativos digitais. Todos os materiais publicados neste site, incluindo artigos, gráficos, dados de preços, informações de mercado e análises, destinam-se apenas a fins informativos e não devem ser considerados como aconselhamento financeiro, de investimento ou jurídico. Embora nos esforcemos para manter nosso conteúdo preciso e atualizado, não garantimos sua completude ou confiabilidade e não assumimos qualquer responsabilidade por perdas decorrentes do uso deste site.";
$footer_disclaimer_p2 = "Negociar criptomoedas, Forex, CFDs, ações e outros instrumentos financeiros envolve risco significativo e pode não ser adequado para todos os investidores. As condições de mercado podem mudar rapidamente, e o desempenho passado não garante resultados futuros. Antes de tomar qualquer decisão de investimento, avalie cuidadosamente sua situação financeira e tolerância ao risco, e procure aconselhamento profissional independente, se necessário. Invista apenas o dinheiro que você pode se dar ao luxo de perder.";
$footer_copyright = "© " . date('Y') . " $site_name. All rights reserved.";

// FOOTER NAV LINKS
$footnav_about = "Sobre Nós";
$footnav_how = "Como Funciona";
$footnav_why = "Por Que Negociar";
$footnav_faq = "FAQ";
$footnav_contacts = "Fale Conosco";
$footnav_privacy = "Política de Privacidade";
$footnav_risk = "Aviso de Risco";
$footnav_terms = "Termos de Uso";
$footnav_product = "Produto";
$footnav_offer = "Oferta";

// ABOUT PAGE VARIABLES
$about_meta_title = "Sobre Nós | Site Oficial $site_name";
$about_meta_description = "Saiba mais sobre a $site_name, nossa missão de democratizar os mercados financeiros através da automação por IA, e nossa estrutura de segurança de nível institucional.";
$about_h1 = "Sobre a <mark>$site_name</mark>";
$about_lead = "Capacitando traders em todo o mundo através de inteligência artificial, execução algorítmica e segurança corporativa.";
$about_mission_title = "Nossa Missão";
$about_mission_text = "Na $site_name, acreditamos que tecnologias de negociação sofisticadas devem ser acessíveis a todos, não apenas a fundos institucionais. Nossa plataforma preenche a lacuna entre investidores de varejo comuns e algoritmos de negociação computacional de última geração.";
$about_tech_title = "Tecnologia de Ponta";
$about_tech_text = "Nossos sistemas avaliam mais de 100.000 pontos de dados a cada segundo nos mercados globais de cripto, Forex e ações. Ao combinar modelos preditivos de aprendizado de máquina com execução em sub-milissegundos, oferecemos slippage ultrabaixo e desempenho confiável.";
$about_sec_title = "Segurança e Conformidade Regulatória";
$about_sec_text = "A confiança do cliente é a base fundamental do nosso ecossistema. Implementamos criptografia TLS de 256 bits, protocolos biométricos e 2FA rigorosos, e armazenamos 98% de todas as reservas digitais em cofres cold storage.";

// PRODUCT PAGE VARIABLES
$product_meta_title = "Ferramentas de Negociação e Produto | $site_name";
$product_meta_description = "Explore o motor de negociação e as capacidades de IA que impulsionam a $site_name. Execução automatizada de ordens, análise preditiva e controles intuitivos.";
$product_h1 = "<mark>Produto e Recursos</mark> da Plataforma";
$product_lead = "Descubra as ferramentas inteligentes projetadas para lhe dar uma vantagem competitiva nos mercados modernos de criptomoedas e financeiros.";
$product_f1_title = "Motor de Negociação Automatizado com IA";
$product_f1_text = "Deixe que algoritmos neurais analisem tendências de mercado e executem negociações ideais 24 horas por dia sem emoção.";
$product_f2_title = "Análises de Mercado em Tempo Real";
$product_f2_text = "Profundidade do livro de ofertas ao vivo, reconhecimento automatizado de padrões e rastreamento de sentimento institucional ao seu alcance.";
$product_f3_title = "Suíte de Gestão de Risco";
$product_f3_text = "Limites granulares de stop-loss e take-profit, controles de exposição diária máxima e capacidades de hedge automatizadas.";
$product_f4_title = "Acessibilidade Multiplataforma";
$product_f4_text = "Negocie perfeitamente em navegadores desktop, tablets e smartphones com latência zero e sincronização completa na nuvem.";

// OFFER PAGE VARIABLES
$offer_meta_title = "Oferta Especial e Condições | $site_name";
$offer_meta_description = "Descubra a oferta exclusiva de registro da $site_name. Comece com um depósito inicial de $app_price $app_currency e receba suporte dedicado.";
$offer_h1 = "Oferta Exclusiva de <mark>Negociação</mark>";
$offer_lead = "Comece sua jornada de negociação hoje com vantagens competitivas e integração de conta dedicada individual.";
$offer_step1_title = "1. Registro Rápido";
$offer_step1_text = "Preencha nosso breve formulário de registro para garantir o acesso à sua conta pessoal em menos de 2 minutos.";
$offer_step2_title = "2. Financie Seu Saldo de Negociação";
$offer_step2_text = "Deposite o mínimo padrão de $app_price $app_currency usando cartão de crédito, transferência bancária ou carteiras eletrônicas. 100% dos seus fundos vão diretamente para o seu saldo de negociação.";
$offer_step3_title = "3. Ative a Negociação com IA";
$offer_step3_text = "Escolha o modo automatizado ou assistido, selecione seus pares de ativos preferidos e comece a negociar com todas as capacidades da plataforma.";

// CONTACTS PAGE VARIABLES
$contacts_meta_title = "Entre em Contato com o Suporte | $site_name";
$contacts_meta_description = "Entre em contato com a equipe da $site_name. Suporte ao cliente 24/7, assistência técnica e consultas de conta.";
$contacts_h1 = "Fale com o <mark>Suporte ao Cliente</mark>";
$contacts_lead = "Nossa equipe de suporte internacional dedicada está pronta para ajudá-lo 24 horas por dia, 7 dias por semana.";
$contacts_info_title = "Solicitações Oficiais";
$contacts_info_text = "Para dúvidas gerais, verificação de conta ou suporte técnico, entre em contato conosco através de nossos canais de comunicação verificados.";
$contacts_support_hours = "Suporte 24/7 por Chat ao Vivo e E-mail";

// FAQ PAGE VARIABLES
$faq_meta_title = "FAQ e Base de Conhecimento | $site_name";
$faq_meta_description = "Encontre respostas para perguntas frequentes sobre contas $site_name, depósitos, saques e negociação automatizada com IA.";
$faq_h1 = "<mark>FAQ</mark> da $site_name";
$faq_lead = "Respostas claras para as perguntas mais comuns sobre segurança da plataforma, saques e negociação automatizada.";

// PRIVACY POLICY PAGE VARIABLES
$privacy_meta_title = "Política de Privacidade | $site_name";
$privacy_meta_description = "Leia nossa Política de Privacidade abrangente para entender como a $site_name coleta, protege e gerencia seus dados pessoais.";
$privacy_h1 = "Política de Privacidade";
$privacy_p1 = "Esta Política de Privacidade descreve como a $site_name coleta, usa e divulga informações quando você visita nosso site, registra uma conta ou usa nosso software de negociação.";
$privacy_sec1_title = "1. Coleta e Uso de Dados";
$privacy_sec1_text = "Coletamos informações de contato necessárias (nome, endereço de e-mail, número de telefone) para estabelecer sua conta, conectá-lo a parceiros de corretagem verificados e verificar identidade em conformidade com padrões internacionais KYC e AML.";
$privacy_sec2_title = "2. Cookies e Tecnologias de Rastreamento";
$privacy_sec2_text = "Usamos cookies essenciais e analíticos para melhorar o desempenho do site, personalizar a experiência do usuário e monitorar padrões de tráfego. Você pode ajustar as configurações de cookies do seu navegador a qualquer momento.";
$privacy_sec3_title = "3. Segurança de Dados e Direitos LGPD/GDPR";
$privacy_sec3_text = "Todos os dados de usuários são criptografados em trânsito e em repouso usando protocolos criptográficos de nível bancário. Sob o Regulamento Geral de Proteção de Dados (GDPR), os usuários têm o direito de solicitar acesso, correção ou exclusão de seus registros pessoais.";

// TERMS OF USE PAGE VARIABLES
$terms_meta_title = "Termos de Uso | $site_name";
$terms_meta_description = "Revise os Termos e Condições oficiais que regem o uso da plataforma $site_name e serviços associados.";
$terms_h1 = "Termos de Uso";
$terms_p1 = "Por favor, leia estes Termos de Uso cuidadosamente antes de acessar ou usar a $site_name. Ao registrar uma conta, você concorda em estar vinculado a estas disposições.";
$terms_sec1_title = "1. Elegibilidade do Usuário";
$terms_sec1_text = "Você deve ter pelo menos 18 anos e residir em uma jurisdição onde a negociação online e interações com criptomoedas sejam legalmente permitidas. Você é responsável por garantir a conformidade com suas leis locais.";
$terms_sec2_title = "2. Registro de Conta e Segurança";
$terms_sec2_text = "Você concorda em fornecer informações verdadeiras, precisas e completas durante o registro. Você é o único responsável por manter a confidencialidade de suas credenciais de login.";
$terms_sec3_title = "3. Limitação de Responsabilidade";
$terms_sec3_text = "A $site_name fornece serviços informativos e de roteamento de software. Não fornecemos aconselhamento financeiro personalizado nem garantimos lucratividade na negociação. Negociar nos mercados financeiros carrega risco de capital inerente.";

// RISK WARNING PAGE VARIABLES (TZ Item 19: Exact 4 sections)
$risk_meta_title = "Aviso de Risco e Aviso Legal | $site_name";
$risk_meta_description = "Divulgação importante de risco sobre negociação de CFD, Forex e criptomoedas na $site_name. Leia com atenção antes de investir.";
$risk_h1 = "Aviso de Risco";
$risk_sec1_title = "1. Aviso de Investimento de Alto Risco e Volatilidade";
$risk_sec1_text = "Negociar criptomoedas, Contratos por Diferença (CFDs), câmbio estrangeiro (Forex) e outros ativos financeiros envolve risco substancial de perda e não é adequado para todos os investidores. Os mercados de criptomoedas são excepcionalmente voláteis, com preços sujeitos a oscilações acentuadas em resposta a anúncios regulatórios, mudanças macroeconômicas ou sentimento de mercado. Você nunca deve investir dinheiro que não pode se dar ao luxo de perder totalmente.";
$risk_sec2_title = "2. Aconselhamento Financeiro Independente";
$risk_sec2_text = "Todos os materiais, ferramentas, sinais algorítmicos e comentários fornecidos na $site_name destinam-se apenas a fins informativos, educacionais e de marketing. Nenhum dos conteúdos deste site constitui aconselhamento personalizado de investimento, jurídico ou financeiro. Antes de executar quaisquer negociações, você deve conduzir pesquisas independentes ou consultar um consultor financeiro licenciado.";
$risk_sec3_title = "3. Restrições Regulatórias e Geográficas";
$risk_sec3_text = "Certas jurisdições restringem ou proíbem a negociação de varejo de CFD e criptomoedas. É de responsabilidade exclusiva do usuário verificar se o acesso à $site_name e o uso de corretoras parceiras são legais sob sua estrutura jurídica local.";
$risk_sec4_title = "4. Tecnologia da Plataforma e Execução de Mercado";
$risk_sec4_text = "Ferramentas de negociação automatizadas, algoritmos de inteligência artificial e indicadores de mercado não garantem lucros nem eliminam riscos de mercado. Interrupções técnicas, latência de rede, indisponibilidade do sistema e escassez de liquidez podem resultar em atrasos na execução de negociações ou slippage.";

// SIGN UP / LOGIN PAGE VARIABLES
$sign_meta_title = "Cadastro / Login | $site_name";
$sign_meta_description = "Crie sua conta gratuita na $site_name para acessar ferramentas inteligentes de negociação automatizada, sinais de mercado e opções seguras de financiamento.";
$sign_h1 = "Cadastre-se na <mark>$site_name</mark>";
$sign_lead = "Junte-se a milhares de traders e obtenha acesso imediato ao nosso motor de negociação com IA.";

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
$hero_form_heading = "Crie sua conta gratuita";
$hero_form_button = "Cadastrar-se";
$form_name_placeholder = "Digite seu primeiro nome";
$form_surname_placeholder = "Digite seu sobrenome";
$form_disclaimer_prefix = "Ao inserir suas informações pessoais e clicar no botão, você concorda com a";
$form_privacy_link_label = "Política de Privacidade";
$form_disclaimer_and = "e os";
$form_terms_link_label = "Termos de Uso";
$form_disclaimer_of_site = "deste site.";

// -- partners strip --
$partners_label = "Confiado por parceiros líderes";

// -- "what is" section --
$whatis_label = "Sobre a Plataforma";
$whatis_title = "O que é a $site_name?";
$whatis_intro = "A $site_name é a plataforma oficial de negociação online, projetada para tornar as criptomoedas tão simples quanto o banco online do dia a dia.";
$whatis_icon_1_title = "Análise Alimentada por IA";
$whatis_icon_1_text = "Algoritmos avançados cuidam da complexidade dos mercados para você.";
$whatis_icon_2_title = "Execução Instantânea";
$whatis_icon_2_text = "Milhares de pontos de dados processados a cada segundo — negociações sem atraso.";
$whatis_icon_3_title = "Painel Simples e Intuitivo";
$whatis_icon_3_text = "Verifique seu saldo e posições abertas rapidamente, a qualquer momento.";
$whatis_icon_4_title = "Acesso Fácil, Sem Barreiras";
$whatis_icon_4_text = "Comece com um depósito mínimo de apenas $app_price $app_currency — sem taxas ocultas.";
$whatis_cta_text = "Quer saber mais sobre nossa equipe e nosso produto?";
$whatis_cta_link = "Sobre Nós";

// -- stats section heading (per-stat label/value already set above) --
$stats_label = "$site_name em Números";
$stats_title = "Números Que Falam Mais Alto Que Promessas";

// -- key benefits section --
$benefits_label = "Principais Benefícios";
$benefits_title = "Principais Benefícios da $site_name";
$benefit_1_title = "Plataforma Amigável para Iniciantes";
$benefit_1_text = "Gráficos intuitivos e guias passo a passo ajudam você a começar sem se sentir sobrecarregado. Você pode negociar criptomoedas com confiança desde o primeiro dia.";
$benefit_2_title = "Oficial e Regulamentada";
$benefit_2_text = "A $site_name é licenciada e cumpre com as regulamentações financeiras aplicáveis. Usamos criptografia SSL e autenticação de dois fatores para proteger cada conta.";
$benefit_3_title = "Acesso Fácil, Sem Barreiras";
$benefit_3_text = "Com um depósito mínimo de apenas $app_price $app_currency, qualquer pessoa pode começar. Nenhum grande investimento inicial é necessário — comece pequeno e aumente sua participação à medida que sua confiança cresce.";
$benefit_4_title = "Taxas Transparentes";
$benefit_4_text = "Você nunca verá cobranças ocultas. Aplicamos apenas taxas mínimas de transação ou saque quando aplicável, então você sempre sabe exatamente o que está pagando.";
$benefit_5_title = "Acesso à Negociação 24/7";
$benefit_5_text = "Negocie no seu próprio horário, dia ou noite. A $site_name funciona tão bem no desktop quanto no celular, então você pode ficar conectado ao mercado onde quer que esteja.";
$benefit_6_title = "Suporte ao Cliente Local";
$benefit_6_text = "Nossa equipe de suporte está disponível por chat, telefone ou e-mail. Pessoas reais estão aqui para ajudá-lo em seu idioma, sempre que precisar.";
$benefits_trust_title = "Confiado por Usuários em Todo o Mundo";
$benefits_trust_text = "É por isso que tantos usuários de criptomoedas confiam na $site_name. Milhares de traders já usam a $site_name, e novas contas se juntam todos os dias.";
$benefits_cta = "Cadastrar-se";
$benefits_badge_1 = "SSL de 256 bits";
$benefits_badge_2 = "Pagamentos Seguros";
$benefits_badge_3 = "2FA";

// -- security section --
$security_label = "Segurança";
$security_title = "Seus Fundos Estão Seguros com a $site_name";
$security_subtitle = "Criptografia de nível bancário, pagamentos verificados e 98% de cold storage — seu dinheiro está protegido em cada etapa.";
$security_1_title = "Provedores de Pagamento Verificados";
$security_1_text = "Os pagamentos são processados exclusivamente por provedores certificados que atendem aos padrões internacionais de segurança. Seus dados de pagamento nunca são armazenados em nossos servidores.";
$security_2_title = "Criptografia SSL de 256 bits";
$security_2_text = "Todos os dados trocados entre seu dispositivo e nossa plataforma são criptografados com TLS de 256 bits. Nenhum terceiro pode interceptá-los ou lê-los.";
$security_3_title = "98% Cold Storage";
$security_3_text = "98% dos ativos são mantidos em carteiras offline, sem conexão com a internet. Ninguém pode acessá-las remotamente.";
$security_4_title = "Autenticação Multifator";
$security_4_text = "Somente você pode acessar sua conta. Cada login é verificado por uma segunda etapa que somente você controla.";
$security_5_title = "Monitoramento de Conta";
$security_5_text = "Cada login, transação ou alteração de configuração dispara uma notificação instantânea, então você sempre sabe o que está acontecendo em sua conta.";
$security_6_title = "Proteção de Senha";
$security_6_text = "As senhas são armazenadas de forma ilegível e irreversível. Tecnicamente não temos como ver sua senha.";
$security_cta_title = "Receba um Guia Gratuito!";
$security_cta_text = "Obtenha nosso guia gratuito para iniciantes e comece a negociar hoje.";
$security_cta_button = "Cadastrar-se";
$security_badge_1 = "98% Cold Storage";
$security_badge_2 = "Pagamentos Verificados";
$security_badge_3 = "Criptografado";

// -- how it works section --
$how_label = "Como Funciona";
$how_title = "Como Funciona";
$how_1_title = "Cadastre-se";
$how_1_text = "Clique no botão \"Abrir Conta\" e preencha o formulário de registro com seus dados (nome, e-mail e número de telefone). Leva apenas um minuto.";
$how_2_title = "Deposite Fundos";
$how_2_text = "Em seguida, financie sua conta. O depósito mínimo é de apenas $app_price $app_currency. Você pode usar um cartão de crédito/débito, transferência bancária local ou carteiras eletrônicas populares. (Dica: comece com um valor com o qual se sinta confortável.)";
$how_3_title = "Comece a Negociar";
$how_3_text = "Uma vez que seus fundos estejam em sua conta, você está pronto para negociar. Escolha o ativo que deseja (como BTC, SOL ou USDT) e decida sua estratégia.";
$how_cta_label = "Como Funciona";
$how_cta_text = "Precisa de mais informações sobre como o serviço funciona?";
$how_cta_link = "Como Funciona";

// -- trust reasons section --
$trust_label = "Por Que Negociar Conosco";
$trust_intro = "Junte-se a milhares de usuários que já negociam com a $site_name. Um contador ao vivo é até exibido em nosso site, mostrando quantas pessoas estão negociando agora.";
$trust_1_title = "Totalmente Regulamentada";
$trust_1_text = "A $site_name é devidamente registrada e cumpre com as regulamentações financeiras aplicáveis. Operamos sob regras rigorosas para garantir sua segurança.";
$trust_2_title = "Segurança Avançada";
$trust_2_text = "Todos os seus dados e fundos são criptografados e protegidos. Aplicamos proteção rigorosa de conta através de criptografia SSL e autenticação de dois fatores.";
$trust_3_title = "Operações Transparentes";
$trust_3_text = "Nunca escondemos nossas taxas e nunca adicionamos regras surpresa. Antes de cada transação, você vê exatamente quais taxas se aplicam.";
$trust_4_title = "Suporte Responsivo";
$trust_4_text = "Nossa equipe de suporte está disponível por chat, telefone ou e-mail para responder suas perguntas ou resolver qualquer problema.";
$trust_cta_text = "Mais informações sobre condições de mercado";
$trust_cta_link = "Por Que Negociar";

// -- testimonials section heading (individual reviews already set above) --
$testimonials_label = "Depoimentos";
$testimonials_title = "Confiado por Mais de 4M de Traders";

// -- FAQ section heading --
$faq_label = "FAQ";

// -- lead magnet CTA block --
$leadmagnet_title = "Novo na Negociação?";
$leadmagnet_text1 = "Após se cadastrar, você receberá nosso guia gratuito,";
$leadmagnet_quote = "\"10 Erros a Evitar ao Negociar Criptomoedas\"";
$leadmagnet_text2 = "repleto de dicas simples de nossos analistas mais experientes para ajudá-lo a evitar os erros mais comuns.";
$leadmagnet_text3 = "Basta inserir seus dados durante o";
$leadmagnet_link = "cadastro";
$leadmagnet_text4 = "e nós o enviaremos diretamente para sua caixa de entrada. Muitos investidores começaram com este guia e dizem que fez uma diferença real.";
$leadmagnet_text5 = "O mercado não espera — comece hoje!";

// -- pre-about CTA band --
$pre_about_title = "Pronto para Assumir o Controle da Sua Negociação?";
$pre_about_text = "Junte-se à $site_name hoje e descubra uma plataforma construída para clareza, segurança e resultados.";
$pre_about_button = "Cadastrar-se";

// -- pretest (quiz teaser) badges/CTA --
$pretest_title = "Comece a Negociar com $app_price $app_currency!";
$pretest_text = "Pronto para experimentar a $site_name? Cadastre-se agora e junte-se à crescente comunidade de investidores e traders de criptomoedas.";
$pretest_button = "Cadastrar-se";
$pretest_badge_1 = "Seguro";
$pretest_badge_2 = "Regulamentado";
$pretest_badge_3 = "Confiado por Mais de 4M de Traders";

// -- about page --
$about_label = "Sobre Nós";
$about_title = "Sobre a $site_name";
$about_intro = "A $site_name não apenas lhe dá uma plataforma de negociação — nós ajudamos você a negociar com clareza e confiança.";
$about_text_1 = "A $site_name é a plataforma oficial de negociação online, projetada para tornar a negociação de criptomoedas acessível tanto para iniciantes quanto para traders experientes.";
$about_text_2 = "Combinamos análise de mercado alimentada por IA com um painel simples e transparente, então você sempre sabe exatamente onde está.";
$about_text_3 = "Cada parte da plataforma é construída em torno da clareza: sem taxas ocultas, sem jargão confuso, apenas informações claras sobre as quais você pode agir.";
$about_text_4 = "Nossa plataforma economiza horas de suposições e o protege de alternativas opacas e de baixa qualidade. Acreditamos que a negociação deve ser construída sobre precisão, não sorte.";

// -- contact page --
$contact_label = "Fale Conosco";
$contact_title = "Contate a $site_name";
$contact_subtitle = "Tem uma pergunta ou precisa de ajuda? Estamos aqui para aconselhar e orientar você.";
$contact_text = "Na $site_name, acreditamos que o sucesso na negociação não tem nada a ver com sorte — depende de precisão, antecipação e as ferramentas certas.";
$contact_form_text = "Basta preencher o formulário abaixo, e um membro da nossa equipe entrará em contato com você em breve.";
$contact_form_button = "Enviar Mensagem";

// -- footer navigation labels (geo-page footer, TZ items 12/16/18) --
$footnav_col_pages = "Páginas";
$footnav_col_support = "Suporte";
$footnav_col_legal = "Legal";
$footnav_col_company = "Empresa";
$footnav_home = "Início";
$footnav_sitemap = "Mapa do Site";
$footnav_conditions = "Termos de Uso";
$footnav_contact = "Fale Conosco";
$footnav_signup = "Cadastrar-se";
$footer_risk_warning = "Aviso de Risco";

// -- geo-page footer legal disclaimer (single-paragraph variant used by
// the geo template's own footer layout; the two-paragraph TZ item 21
// text above -- $footer_disclaimer_p1/$footer_disclaimer_p2 -- covers
// the root pages) --
$footer_disclaimer = "A $site_name fornece conteúdo educacional e informações gerais sobre mercados financeiros, negociação online e ativos digitais. Todos os materiais publicados neste site destinam-se apenas a fins informativos e não devem ser considerados aconselhamento financeiro, de investimento ou jurídico. A negociação envolve risco significativo e pode não ser adequada para todos os investidores. Invista apenas o dinheiro que você pode se dar ao luxo de perder.";

// ============================================================
// Geo-language SUBPAGE fallback content (TZ item 16 cont.). Same
// rationale as the block above: conditions/contacts/faq/offer/
// privacy/product/risk-warning/sign.php share templates across the
// bg/cs/da/... stub folders and reference these vars directly.
// English fallback so every geo folder's subpages render complete.
// ============================================================

// -- shared form aliases (service-page forms reuse the hero disclaimer) --
$form_disclaimer_risk_note = "Leia também nosso";
$form_text = $form_disclaimer_prefix;
$form_text_privacy = $form_privacy_link_label;
$form_text_privacy_and = $form_disclaimer_and;
$form_text_conditions = $form_terms_link_label;
$form_text_conditions_of = $form_disclaimer_of_site;
$form_text_risk_warning_note = $form_disclaimer_risk_note;
$form_submit = "Cadastrar-se";

// -- generic breadcrumbs (sign-up / product pages) --
$breadcrumb_home = "Início";
$breadcrumb_current = "Cadastro / Login";
$breadcrumb_product = "Produto";

// -- sign-up page official heading --
$official_heading = "Cadastre-se na Plataforma Oficial $site_name™";
$official_description = "Crie sua conta gratuita para começar a negociar criptomoedas em uma plataforma segura e transparente.";

// -- product page: analytics banner --
$analytics_heading = "Negocie de Forma Mais Inteligente com a $site_name";
$analytics_description = "Obtenha dados de mercado claros em tempo real e insights alimentados por IA. Tome decisões de negociação informadas com confiança.";

// -- product page: dashboard preview --
$app_main_heading = "Seu Painel de Negociação";
$app_feature_1_title = "Dados de Mercado ao Vivo";
$app_feature_1_text = "Preços e gráficos em tempo real ao alcance dos seus dedos";
$app_feature_2_title = "Acompanhamento de Portfólio";
$app_feature_2_text = "Métricas abrangentes sobre seu saldo e desempenho";
$app_feature_3_title = "Visualização Móvel";
$app_feature_3_text = "Otimizado para navegadores móveis";
$app_feature_4_title = "Listas de Observação";
$app_feature_4_text = "Acompanhe os ativos que você está observando";

// -- product page: capabilities --
$capabilities_main_title = "O Que Esperar";
$capabilities_feature_1_title = "Sinais Alimentados por IA";
$capabilities_feature_1_text = "Algoritmos avançados analisam sinais de mercado e revelam oportunidades 24 horas por dia.";
$capabilities_feature_2_title = "Cadastro Rápido";
$capabilities_feature_2_text = "Registre-se em minutos com um processo de cadastro seguro e direto.";
$capabilities_feature_3_title = "Segurança Verificada";
$capabilities_feature_3_text = "Criptografia SSL de 256 bits, 2FA e 98% de cold storage protegem seus fundos em cada etapa.";
$capabilities_feature_4_title = "Suporte Contínuo";
$capabilities_feature_4_text = "Obtenha suporte da nossa equipe em cada etapa — do cadastro à sua primeira negociação.";

// -- product page: stats strip --
$products_stats_currencies_v = "65+";
$products_stats_currencies_l = "Moedas Disponíveis";
$products_stats_users_v = "4M+";
$products_stats_users_l = "Usuários Registrados";
$products_stats_volume_v = "98+";
$products_stats_volume_l = "Países Suportados";
$products_stats_countries_v = "24/7";
$products_stats_countries_l = "Acesso a Transações";

// -- product page: 3-step strip --
$step_1 = "Criar uma conta";
$step_2 = "Depositar fundos";
$step_3 = "Comece a negociar com a estratégia que combina com você";

// -- shared "last update" label (privacy page) --
$last_update = "Última atualização";

// -- FAQ page --
$faq_page_meta_title = "FAQ | Suporte $site_name";
$faq_page_meta_description = "Respostas para perguntas frequentes sobre como a $site_name funciona, preços e como começar.";
$faq_page_title = "FAQ";
$faq_page_breadcrumb_home = "Início";
$faq_page_breadcrumb_current = "FAQ";
$faq_page_help_title = "Como podemos ajudá-lo?";
$faq_1_q = "Como faço para começar?";
$faq_1_a = "Crie sua conta, verifique seu endereço de e-mail e faça seu primeiro depósito — os planos começam a partir de apenas $app_price $app_currency.";
$faq_2_q = "Meu dinheiro e dados estão seguros? A $site_name é confiável?";
$faq_2_a = "Sim. Seus dados são protegidos por criptografia de 256 bits padrão da indústria, e seus fundos são protegidos com autenticação de dois fatores e 98% de cold storage.";
$faq_3_q = "Posso fechar minha conta ou sacar fundos a qualquer momento?";
$faq_3_a = "Sim. Não há restrições sobre saques. Entre em contato com nossa equipe de suporte a qualquer momento — nós ajudaremos com sua conta ou processaremos seu saque prontamente.";
$faq_4_q = "Como sei se esta plataforma é adequada para mim?";
$faq_4_a = "A $site_name foi construída para iniciantes absolutos e traders experientes que desejam negociar de forma mais eficiente — cada ferramenta na plataforma foi projetada para mantê-lo informado e no controle.";
$faq_5_q = "Preciso de experiência em negociação para começar?";
$faq_5_a = "Nenhuma experiência prévia é necessária. Nosso modo alimentado por IA cuida da análise para você, e você pode mudar para o modo manual a qualquer momento se quiser mais controle.";

// -- contacts page --
$contacts_h3 = "Para dúvidas técnicas ou sobre sua conta, entre em contato conosco por e-mail";

// -- offer page (meta title/description already defined above) --
$offer_breadcrumb_home = "Início";
$offer_breadcrumb_current = "Oferta";
$offer_cta_h1 = "Comece a Negociar Hoje";
$offer_cta_text = "Pronto em minutos: cadastre-se, financie sua conta e comece a negociar criptomoedas em uma plataforma segura e regulamentada.";
$offer_how_it_works_title = "Como Funciona";
$offer_official_platform_title = "Esta É a Plataforma Oficial de Negociação $site_name™";
$offer_official_platform_text = "Uma forma confiável e transparente de negociar criptomoedas — com informações em tempo real e controle total.";

// -- conditions of use page --
$conditions_meta_title = "Termos de Uso | $site_name";
$conditions_meta_description = "Leia os Termos de Uso oficiais do site e da plataforma de negociação $site_name.";
$conditions_breadcrumb_home = "Início";
$conditions_breadcrumb_current = "Termos de Uso";
$conditions_h1 = "Termos de Uso";
$conditions_s1_title = "1. Geral";
$conditions_s1_text = "Este site fornece acesso a uma plataforma online de negociação de criptomoedas. O uso da plataforma constitui aceitação total destes termos e de nossa Política de Privacidade.";
$conditions_s2_title = "2. Elegibilidade";
$conditions_s2_text = "Os usuários devem ter pelo menos 18 anos e ter plena capacidade legal em sua respectiva jurisdição.";
$conditions_s3_title = "3. Acesso Restrito";
$conditions_s3_text = "O acesso pode ser restrito em jurisdições onde as regulamentações locais proíbem o tipo de serviço de negociação que oferecemos.";
$conditions_s4_title = "4. Uso Proibido";
$conditions_s4_text = "Os usuários não podem fazer mau uso do sistema, tentar acesso não autorizado aos nossos sistemas ou realizar engenharia reversa do nosso software.";
$conditions_s5_title = "5. Propriedade Intelectual";
$conditions_s5_text = "Todo o código-fonte, interfaces de usuário e ativos de marca permanecem propriedade exclusiva da empresa operadora.";
$conditions_s6_title = "6. Responsabilidade";
$conditions_s6_text = "As ferramentas da plataforma são fornecidas \"como estão\". Não assumimos responsabilidade por resultados decorrentes das próprias decisões de negociação do usuário.";
$conditions_s7_title = "7. Serviços de Terceiros";
$conditions_s7_text = "Integrações com provedores de pagamento de terceiros ocorrem por meio de conexões seguras. Para depósitos e saques, os usuários lidam diretamente com o provedor escolhido.";
$conditions_s8_title = "8. Links Externos";
$conditions_s8_text = "Links para recursos externos são fornecidos apenas por conveniência. Não endossamos nem garantimos nenhum software externo.";
$conditions_s9_title = "9. Diversos";
$conditions_s9_text = "Reservamo-nos o direito de modificar estes termos ou o serviço a qualquer momento, com alterações publicadas no site.";

// -- privacy policy page (meta title/description already defined above) --
$privacy_breadcrumb_home = "Início";
$privacy_breadcrumb_current = "Política de Privacidade";
$privacy_page_h1 = "Política de Privacidade";
$privacy_intro = "Respeitamos sua privacidade e processamos dados pessoais em total conformidade com padrões internacionais e o GDPR europeu.";
$privacy_transparency_title = "Transparência";
$privacy_transparency_text = "Divulgamos claramente como os dados de telemetria operacional são processados. Entre em contato com o suporte para mais detalhes.";
$privacy_usage_title = "Uso de Dados";
$privacy_usage_text = "Os dados são usados apenas para fornecer acesso, proteger sessões e cumprir obrigações de conformidade.";
$privacy_rights_short_title = "Seus Direitos";
$privacy_rights_short_text = "Você mantém todos os direitos de visualizar, atualizar ou solicitar a exclusão de seus dados pessoais.";
$privacy_security_title = "Segurança";
$privacy_security_text = "Usamos criptografia AES-256 e isolamento de banco de dados para proteger dados de telemetria operacional.";
$privacy_s1_title = "1. Coleta de Dados";
$privacy_s1_text = "Coletamos telemetria de uso (endereço IP, parâmetros do sistema, tipo de navegador), bem como dados de verificação enviados pelos usuários.";
$privacy_s2_title = "2. Base Legal";
$privacy_s2_text = "O processamento se baseia no consentimento explícito dos usuários, requisitos de conformidade regulatória e entrega do serviço.";
$privacy_s3_title = "3. Compartilhamento de Dados";
$privacy_s3_text = "Os dados nunca são comercializados. As divulgações são limitadas a entidades de compensação autorizadas e parceiros técnicos sob um acordo de confidencialidade (NDA).";
$privacy_s4_title = "4. Cookies";
$privacy_s4_text = "Cookies essenciais são usados para autenticação de sessão e otimização de interface.";
$privacy_google_choices = 'Gerencie suas preferências de rastreamento via <a href="http://www.google.com/settings/ads" target="_blank" rel="noopener">Configurações de Anúncios do Google</a> ou use o <a href="https://tools.google.com/dlpage/gaoptout" target="_blank" rel="noopener">Complemento de Exclusão do Google Analytics</a>. Você também pode revisar as práticas de dados do próprio Google em sua <a href="https://www.google.com/intl/en/policies/privacy/" target="_blank" rel="noopener">Política de Privacidade</a>.';
$privacy_s5_title = "5. Retenção de Dados";
$privacy_s5_text = "Os dados pessoais são retidos apenas pelo tempo necessário para atender aos requisitos de acesso ao sistema.";
$privacy_s6_title = "6. Transferências Internacionais";
$privacy_s6_text = "As transferências de dados transfronteiriças ocorrem exclusivamente por canais criptografados e via cláusulas contratuais padrão.";
$privacy_s7_title = "7. Links de Terceiros";
$privacy_s7_text = "Não somos responsáveis pelas práticas de privacidade de serviços externos de terceiros vinculados a partir do nosso site.";
$privacy_s8_title = "8. Atualizações";
$privacy_s8_text = "Esta política pode ser revisada periodicamente para refletir mudanças no sistema ou legais.";
$privacy_rights_title = "Seus Direitos";
$privacy_rights_text = "Os usuários têm o direito de solicitar acesso, correção, processamento restrito ou exclusão completa de seus dados armazenados.";

// -- risk warning page --
$page_title_risk_warning = "Aviso de Risco | $site_name";
$page_description_risk_warning = "Entenda os riscos da negociação e como a $site_name ajuda você a gerenciá-los com segurança.";
$risk_warning_breadcrumb_home = "Início";
$risk_warning_breadcrumb_current = "Aviso de Risco";
$risk_warning_title = "Aviso de Risco";
$risk_warning_intro = "Entender os riscos é o primeiro passo para negociar com confiança.";
$risk_warning_ai_heading = "Como nosso sistema de IA ajuda na gestão de risco:";
$risk_warning_ai_1 = "<strong>Eficiência Algorítmica e Negociação Sem Emoção:</strong> Algoritmos avançados analisam sinais de mercado para executar negociações objetivamente no momento ideal.";
$risk_warning_ai_2 = "<strong>Estratégias Baseadas em Dados:</strong> As estratégias são baseadas em padrões de mercado verificados e análise em tempo real, em vez de suposições.";
$risk_warning_ai_3 = "<strong>Configurações Flexíveis e Controle Total:</strong> Ajuste seus parâmetros de risco a qualquer momento. Acompanhe todos os saldos e negociações de forma transparente no seu painel — sem taxas ocultas e sem restrições de saque.";
$risk_warning_disclaimer = "<strong>Isenção de responsabilidade:</strong> A negociação sempre envolve risco. Sistemas automatizados (incluindo IA) não garantem lucro, podem falhar devido a erros de software ou eventos de mercado inesperados, e requerem monitoramento pelo usuário. O desempenho passado não é um indicador de resultados futuros. Esta plataforma destina-se apenas a fins informativos e de marketing e não constitui aconselhamento financeiro.";
$risk_warning_s1_heading = "1. Riscos Gerais e Riscos do Mercado de Criptomoedas";
$risk_warning_s1_1 = "As criptomoedas são ativos altamente voláteis e especulativos que são negociados 24 horas por dia e estão sujeitos a apenas supervisão regulatória mínima na maioria das jurisdições.";
$risk_warning_s1_2 = "Os valores podem flutuar drasticamente em curtos períodos, podendo resultar em perda total do capital investido.";
$risk_warning_s1_3 = "Os valores de mercado podem ser significativamente afetados por mudanças regulatórias, desenvolvimentos técnicos, violações de segurança ou eventos macroeconômicos mais amplos.";
$risk_warning_s1_4 = "Alguns ativos podem perder todo o seu valor. Invista apenas dinheiro que você pode se dar ao luxo de perder.";
$risk_warning_s2_heading = "2. Riscos de Execução, Liquidez e Alavancagem";
$risk_warning_s2_1 = "<strong>Volatilidade de Mercado e Liquidez:</strong> Movimentos extremos de preço (10-20%+ diariamente) ou baixa liquidez (particularmente para moedas menores) podem levar a atrasos, indisponibilidades da plataforma e slippage significativo de execução. Ordens de stop-loss não podem garantir limitação de perdas em condições extremas.";
$risk_warning_s2_2 = "<strong>Risco de Alavancagem e Margem:</strong> Produtos alavancados amplificam tanto ganhos quanto perdas, significando que você pode perder mais do que seu depósito original. Aproximadamente 70-80% das contas de investidores de varejo perdem dinheiro ao negociar produtos alavancados.";
$risk_warning_s3_heading = "3. Riscos Técnicos, de Cibersegurança e de Terceiros";
$risk_warning_s3_1 = "<strong>Fatores Técnicos:</strong> A negociação online inerentemente carrega riscos como interrupções de conectividade com a internet, falhas de hardware/software e indisponibilidade de serviço.";
$risk_warning_s3_2 = "<strong>Cibersegurança:</strong> Contas de criptomoedas são alvos frequentes de phishing, malware e tentativas de hacking. As transações são irreversíveis; o comprometimento de suas credenciais pode resultar em perda permanente.";
$risk_warning_s3_3 = "<strong>Plataformas de Terceiros:</strong> Este site pode conectar usuários a plataformas de terceiros. Não controlamos, endossamos ou garantimos sua segurança, operações ou solvência. Sempre conduza sua própria due diligence antes de depositar fundos em plataformas externas.";
$risk_warning_s4_heading = "4. Disposições Regulatórias, Fiscais e Finais";
$risk_warning_s4_1 = "<strong>Conformidade Legal e Impostos:</strong> As estruturas regulatórias variam amplamente e mudam rapidamente. Os usuários são os únicos responsáveis por garantir que suas atividades de negociação cumpram a lei local, bem como por cumprir suas próprias obrigações fiscais.";
$risk_warning_s4_2 = "<strong>Sem Garantias de Lucro:</strong> Não existe negociação de criptomoedas \"segura\" ou livre de risco. Quaisquer números de retorno ou exemplos de desempenho são puramente hipotéticos.";
$risk_warning_s4_3 = "<strong>Adequação:</strong> Se você não entende totalmente os riscos, depende de recursos financeiros necessários, ou está negociando com dinheiro emprestado, a negociação de criptomoedas não é adequada para você. Em caso de dúvida, consulte um consultor financeiro independente e licenciado.";
$risk_warning_contact = "<strong>Contato:</strong> Se você tiver dúvidas sobre esta declaração ou desejar enviar uma consulta, entre em contato com nossa equipe oficial de atendimento ao cliente através do formulário de contato em nosso site.";

