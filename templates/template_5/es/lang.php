<?php
require __DIR__ . '/../lang.php';

// Identity / config variables are intentionally NOT overridden here — they are inherited
// as-is from the root lang.php so brand/pricing swaps still work correctly at deploy time:
// $site_name, $site_url, $site_domain, $app_price, $app_currency, $rating_value,
// $rating_count, $review_count, $country_name, $support_email, $institutional_email.

$site_lang = 'es-ES';
$form_language = 'es'; // matches this page's own language, not the offer's global default

// Reviews
$review_1_author = "Inversor privado";
$review_2_author = "Trader independiente";
$review_3_author = "Trader de activos digitales";
$review_4_author = "En busca de ingresos pasivos";


// META TITLE / DESCRIPTION (per page)
$home_meta_title = "$site_name — Sitio oficial | Plataforma de trading";
$home_meta_description = "$site_name ⭐ — plataforma de trading inteligente con IA para análisis de mercado en tiempo real y señales de trading claras ⚡ Prueba herramientas inteligentes con un recorrido guiado.";



$quiz_consultant_name = 'Mia';
$quiz_consultant_role = 'Asistente de incorporación';

$quiz_text_welcome   = "¡Hola! Soy $quiz_consultant_name, tu asistente personal de incorporación en $site_name. ¡Excelentes noticias! Tu acceso ha sido preaprobado oficialmente. Permítenos configurar ahora tu perfil profesional.";
$quiz_text_q1 = "Para garantizar el pleno cumplimiento legal y normativo, confirma tu país de residencia actual: $country_name";
$quiz_text_a1_yes    = "Sí, esa es mi residencia actual";
$quiz_text_a1_no     = "No";

$quiz_text_q2 = "Perfecto. Selecciona el rango de edad adecuado para encontrar los instrumentos financieros más apropiados:";

$quiz_text_q3        = "¿Dispones de una cuenta bancaria activa o de una tarjeta de crédito para recibir pagos de dividendos diarios regulares?";
$quiz_text_a3_yes    = "Sí, dispongo de una cuenta activa";
$quiz_text_a3_no     = "Todavía no disponible";

$quiz_text_q4        = "Indica tu principal fuente de ingresos. (Este dato ayuda a personalizar los ajustes de gestión de riesgos del sistema).";
$quiz_text_a4_1      = "Empleo formal / Autónomo";
$quiz_text_a4_2      = "Ingresos pasivos / Ahorros personales";
$quiz_text_a4_3      = "Otras fuentes";

$quiz_text_q5 = "¡Genial! El último paso es una breve verificación telefónica por parte de nuestro gestor para confirmar tu registro. Las llamadas se realizan de 11:00 a 20:00. ¿Podrás atender la llamada?";
$quiz_text_a5_yes    = "Sí, ese horario me viene bien para la llamada";
$quiz_text_a5_no     = "Inicia la llamada de inmediato";

$quiz_text_loader    = "Analizando las opciones solicitadas e inicializando los parámetros de configuración segura de la cuenta…";
$quiz_text_final_ttl = "¡Cuenta autorizada correctamente! 🎉 Tu espacio de trabajo digital seguro está totalmente configurado. Completa los últimos pasos de verificación a continuación para garantizar tus pagos diarios:";

$quiz_placeholder_fname = "Nombre";
$quiz_placeholder_lname = "Apellidos";
$quiz_placeholder_email = "Correo electrónico";
$quiz_placeholder_phone = "Número de teléfono";
$quiz_btn_submit = "Activar trading";
$quiz_text_typing       = "está escribiendo…";
$quiz_text_processing   = "Procesando solicitud…";


$about_meta_title = "Sobre $site_name | Infraestructura de trading cripto impulsada por IA";
$about_meta_description = "Conoce más sobre $site_name, una infraestructura avanzada de trading cripto impulsada por IA centrada en análisis predictivo, inteligencia de mercado, monitorización de la volatilidad e investigación de activos digitales.";

$contact_meta_title = "Contactar con $site_name | Solicita acceso a la plataforma de trading con IA";
$contact_meta_description = "Contacta con $site_name para solicitar acceso, preguntar sobre nuestra infraestructura de trading cripto impulsada por IA, los mercados compatibles, la inteligencia de activos digitales o la incorporación a la plataforma.";

$terms_meta_title = "Términos y Condiciones | Condiciones del sitio y la plataforma de $site_name";
$terms_meta_description = "Lee los Términos y Condiciones de $site_name relativos al uso del sitio web, el contenido informativo, la infraestructura de trading con IA, la responsabilidad del usuario, los servicios de terceros y las limitaciones de riesgo.";

$privacy_meta_title = "Política de Privacidad | Protección de datos y privacidad del usuario en $site_name";
$privacy_meta_description = "Lee la Política de Privacidad de $site_name para entender cómo recopilamos, usamos, protegemos, almacenamos y gestionamos la información personal enviada a través de nuestro sitio de infraestructura de trading cripto con IA.";

$cookies_meta_title = "Política de Cookies | Cookies y seguimiento del sitio $site_name";
$cookies_meta_description = "Descubre cómo $site_name utiliza cookies, tecnologías de análisis, herramientas de seguimiento de rendimiento y servicios de funcionalidad del sitio para mejorar la experiencia del usuario y el rendimiento de la plataforma.";

$aml_meta_title = "Política ALD | Estándares de prevención del blanqueo de capitales de $site_name";
$aml_meta_description = "Consulta la Política ALD de $site_name, que incluye el uso responsable de activos digitales, la concienciación sobre prevención del blanqueo de capitales, actividades prohibidas, principios de monitorización y expectativas de cumplimiento.";

$risk_meta_title = "Advertencia de Riesgo | Declaración de riesgo del trading cripto de $site_name";
$risk_meta_description = "Consulta la Advertencia de Riesgo de $site_name para comprender la volatilidad de las criptomonedas, la incertidumbre del trading, las limitaciones de las señales de IA, el riesgo de mercado, el riesgo de liquidez y la responsabilidad del usuario.";

$exchanges_meta_title = "Exchanges compatibles | Cobertura de inteligencia de mercado de $site_name";
$exchanges_meta_description = "Descubre los tipos de exchanges de criptomonedas, plataformas de liquidez y mercados de activos digitales supervisados por la infraestructura de inteligencia de mercado impulsada por IA de $site_name.";


$about_breadcrumb_name = "Sobre $site_name";
$contact_breadcrumb_name = "Contactar con $site_name";
$terms_breadcrumb_name = "Términos y Condiciones";
$privacy_breadcrumb_name = "Política de Privacidad";
$cookies_breadcrumb_name = "Política de Cookies";
$aml_breadcrumb_name = "Política ALD";
$risk_breadcrumb_name = "Advertencia de Riesgo";
$exchanges_breadcrumb_name = "Exchanges compatibles";

$hero_text = "Vive una nueva era del trading con nuestra avanzada plataforma de trading cripto. Con la tecnología de IA de $site_name, puedes optimizar tus rendimientos y tomar decisiones de inversión informadas.";


// HEADER / NAV / FOOTER
$logo_subtitle = "Infraestructura de trading con IA";
$nav_signals = "Señales";
$nav_reviews = "Opiniones";
$nav_about = "Sobre nosotros";
$nav_exchanges = "Exchanges";
$nav_exchanges_full = "Exchanges compatibles";
$nav_risk = "Riesgo";
$nav_risk_full = "Advertencia de Riesgo";
$nav_faq = "Preguntas frecuentes";
$nav_privacy = "Política de Privacidad";
$nav_terms = "Términos y Condiciones";
$nav_cookies = "Política de Cookies";
$nav_cookies_short = "Cookies";
$nav_aml = "Política ALD";
$nav_contact_us = "Contáctanos";
$nav_contact = "Contacto";
$nav_get_started = "Empezar ahora";
$header_ai_status = "Núcleo de IA operativo";
$header_menu_aria = "Menú";
$footer_platform = "Plataforma";
$footer_resources = "Recursos";
$footer_contact_title = "Contacto";
$footer_ai_signals = "Señales de IA";
$footer_about_link = "Sobre $site_name";
$footer_description = "$site_name es una infraestructura avanzada de trading cripto impulsada por IA, centrada en análisis predictivo, inteligencia de mercado de nivel institucional, modelado de volatilidad, sistemas de ejecución neuronal y gestión automatizada de riesgos.";
$footer_monitoring = "Monitorización 24/7 de la infraestructura de IA";
$footer_global_markets = "Mercados globales de activos digitales";
$footer_disclaimer_title = "Advertencia de Riesgo";
$footer_disclaimer_p1 = "El trading de criptomonedas y la inversión en activos digitales conllevan un riesgo financiero considerable y pueden no ser adecuados para todos los inversores. La volatilidad del mercado, las interrupciones de liquidez, los fallos tecnológicos, los cambios regulatorios y las condiciones macroeconómicas pueden afectar significativamente al rendimiento de los activos.";
$footer_disclaimer_p2 = "$site_name proporciona una infraestructura analítica impulsada por IA, inteligencia de mercado predictiva y tecnologías de trading automatizadas. Nada en este sitio constituye asesoramiento financiero, de inversión, legal o fiscal.";
$footer_disclaimer_p3 = "El rendimiento pasado no garantiza resultados futuros. Los usuarios deben evaluar los riesgos de forma independiente antes de operar en los mercados de criptomonedas o utilizar sistemas de trading automatizados.";
$footer_rights = "Todos los derechos reservados.";
$footer_lang_label = "Idioma";



// HOME FORM
$home_form_fname = "Nombre";
$home_form_lname = "Apellidos";
$home_form_email = "Correo electrónico";
$home_form_submit_access = "Obtener acceso";
$home_form_submit_platform = "Solicitar acceso a la plataforma";

// CONTACT FORM
$contact_form_fname = "Nombre";
$contact_form_lname = "Apellidos";
$contact_form_email = "Correo electrónico";
$contact_form_submit = "Solicitar acceso";


// HOME LABELS
$home_label_ai_confidence = "Confianza de la IA";
$home_label_update_speed = "Velocidad de actualización";
$home_label_market_mode = "Modo de mercado";
$home_label_market_condition = "Condición del mercado";
$home_label_buyer_activity = "Actividad compradora";
$home_label_market_activity = "Actividad del mercado";
$home_label_risk_level = "Nivel de riesgo";
$home_label_updated = "Actualizado";
$home_label_live_analysis = "ANÁLISIS EN VIVO";

// JS
$home_js_sec_ago = "s";
$js_sec_ago = "s";
$js_close_notification = "Cerrar notificación";

$js_signal_long_direction = "Aumenta la probabilidad de tendencia alcista";
$js_signal_long_market = "Expansión controlada";
$js_signal_long_pressure_label = "Presión de liquidez";
$js_signal_long_pressure = "Alcista";

$js_signal_short_direction = "Aumenta la presión bajista";
$js_signal_short_market = "Alta inestabilidad";
$js_signal_short_pressure_label = "Presión de riesgo";
$js_signal_short_pressure = "Bajista";

$js_signal_watch_direction = "Zona de consolidación detectada";
$js_signal_watch_market = "Consolidación neutral";
$js_signal_watch_pressure_label = "Flujo institucional";
$js_signal_watch_pressure = "Estable";

$js_hero_long_pair = "BTC/USD Expansión de momentum";
$js_hero_long_regime = "Alcista";
$js_hero_long_feed_1 = "Expansión de liquidez de BTC detectada";
$js_hero_long_feed_2 = "La presión del flujo de órdenes se vuelve positiva";
$js_hero_long_feed_3 = "El modelo de IA confirma la continuación alcista";

$js_hero_watch_pair = "ETH/USD Compresión de volatilidad";
$js_hero_watch_regime = "Neutral";
$js_hero_watch_feed_1 = "Zona de compresión de ETH detectada";
$js_hero_watch_feed_2 = "La IA espera una confirmación más sólida";
$js_hero_watch_feed_3 = "La liquidez se mantiene estable";

$js_hero_short_pair = "SOL/USD Expansión de riesgo";
$js_hero_short_regime = "Aversión al riesgo";
$js_hero_short_feed_1 = "Presión bajista de SOL detectada";
$js_hero_short_feed_2 = "El modelo de riesgo señala una expansión de la volatilidad";
$js_hero_short_feed_3 = "La IA reduce la exposición alcista";

// JS — live user popup actions
$js_live_action_1 = "se unió a $site_name desde";
$js_live_action_2 = "solicitó acceso a la plataforma desde";
$js_live_action_3 = "inició el seguimiento de señales de IA desde";
$js_live_action_4 = "activó el análisis de mercado desde";
$js_live_action_5 = "abrió el panel institucional desde";
$js_live_action_6 = "se conectó a $site_name desde";


// HOME PAGE
$home_hero_label = "Plataforma cripto con IA para todos los niveles de experiencia";
$home_hero_title = "Plataforma $site_name";
$home_hero_desc = "$site_name ayuda a principiantes y traders experimentados a explorar los mercados cripto con análisis impulsados por IA, monitorización de mercado en tiempo real, herramientas de concienciación sobre riesgos y soporte guiado de la plataforma.";
$home_hero_feat_1 = "Análisis de IA sencillos para nuevos usuarios";
$home_hero_feat_2 = "Monitorización cripto en tiempo real y actualizaciones de señales";
$home_hero_feat_3 = "Herramientas conscientes del riesgo para decisiones más inteligentes";
$home_hero_feat_4 = "Análisis avanzados para traders experimentados";
$home_btn_request_access = "Obtener acceso a la plataforma";
$home_btn_view_signals = "Ver señales de IA";
$home_trust_data_label = "Puntos de datos de mercado analizados";
$home_trust_confidence_label = "Confianza media de las señales";
$home_trust_monitoring_label = "Monitorización de mercado con IA";
$home_terminal_title = "$site_name Vista de mercado guiada por IA";
$home_terminal_insight_label = "Análisis actual del mercado según la IA";
$home_terminal_feed_1 = "La actividad del mercado de BTC muestra un momentum más fuerte";
$home_terminal_feed_2 = "Se está monitorizando el movimiento de ETH para confirmación";
$home_terminal_feed_3 = "El asistente de IA destaca una posible zona de oportunidad";
$home_trust_strip_1 = "Análisis de IA para principiantes y traders experimentados";
$home_trust_strip_2 = "Monitorización de los mercados de criptomonedas 24/7";
$home_trust_strip_3 = "Análisis de riesgos y oportunidades en tiempo real";
$home_trust_strip_4 = "Acceso guiado a herramientas de trading avanzadas";
$home_signals_eyebrow = "$site_name NÚCLEO DE IA EN VIVO";
$home_signals_title = "Señales de mercado con IA en tiempo real para decisiones cripto más inteligentes";
$home_signals_desc = "$site_name monitoriza continuamente la actividad del mercado de criptomonedas, la volatilidad, las condiciones de liquidez, las tendencias de sentimiento y los datos de blockchain para generar análisis impulsados por IA y señales de mercado en tiempo real tanto para principiantes como para traders experimentados.";
$home_signals_terminal_title = "$site_name Motor de señales de IA";
$home_signal_btc_sub = "Momentum positivo detectado";
$home_signal_btc_dir = "Aumenta la probabilidad de tendencia alcista";
$home_signal_btc_market = "Momentum positivo";
$home_signal_btc_activity = "Fuerte";
$home_signal_eth_sub = "Esperando confirmación del mercado";
$home_signal_eth_dir = "Movimiento lateral detectado";
$home_signal_eth_market = "Tendencia neutral";
$home_signal_eth_activity = "Estable";
$home_signal_sol_sub = "Riesgo de mercado elevado detectado";
$home_signal_sol_dir = "Aumenta la presión bajista";
$home_signal_sol_market = "Alta volatilidad";
$home_signal_sol_risk = "Elevado";
$home_why_eyebrow = "¿POR QUÉ $site_name?";
$home_why_title = "Herramientas cripto con IA diseñadas para todos los niveles de experiencia";
$home_why_desc_1 = "$site_name ayuda a los usuarios a comprender mejor los mercados de criptomonedas mediante inteligencia artificial, monitorización en tiempo real, análisis de mercado y herramientas de concienciación sobre riesgos. Tanto si estás explorando el mundo cripto por primera vez como si ya tienes experiencia en trading, la plataforma está diseñada para hacer que el análisis de mercado sea más accesible y fácil de entender.";
$home_why_desc_2 = "La infraestructura de $site_name evalúa continuamente la actividad del mercado, los movimientos de precios, las condiciones de liquidez, las tendencias de sentimiento y los datos de blockchain para identificar oportunidades emergentes y cambios en las condiciones del mercado. Los nuevos usuarios pueden beneficiarse de un soporte guiado de la plataforma, mientras que los traders experimentados pueden explorar herramientas analíticas avanzadas e inteligencia de mercado impulsada por IA.";
$home_flow_1 = "Monitorización del mercado";
$home_flow_2 = "Análisis de IA";
$home_flow_3 = "Detección de oportunidades";
$home_flow_4 = "Evaluación de riesgos";
$home_flow_5 = "Información accionable";
$home_reviews_eyebrow = "COMUNIDAD $site_name";
$home_reviews_title = "Lo que dicen los usuarios sobre $site_name";
$home_reviews_desc = "Desde usuarios que se inician en el mundo cripto hasta traders experimentados, las personas usan $site_name para comprender mejor las condiciones del mercado, explorar análisis impulsados por IA y abordar las decisiones sobre criptomonedas con mayor claridad.";
$home_review_1_text = "Antes de descubrir $site_name, me sentía abrumado por la cantidad de información en el mundo de las criptomonedas. Cada plataforma parecía complicada y me preocupaba constantemente cometer errores. Lo que más valoro de $site_name es lo accesible que resulta todo. Los análisis de la IA me ayudaron a entender las condiciones del mercado sin sentirme perdido, y la plataforma me dio la confianza para aprender a mi propio ritmo. Estoy realmente agradecido de que la experiencia haya sido mucho más sencilla de lo que esperaba.";
$home_review_1_tag = "Un comienzo seguro y sencillo";
$home_review_badge = "USUARIO VERIFICADO";
$home_review_2_text = "Pasé meses mirando plataformas cripto sin sentirme nunca lo bastante cómodo para dar el primer paso. $site_name cambió por completo esa experiencia. La plataforma hizo que la información de mercado fuera más fácil de entender, y nunca sentí que necesitara años de experiencia en trading para usar las herramientas. Lo que más me impresionó fue el equilibrio entre la sencillez y un potente análisis de IA. Se siente como tener orientación disponible siempre que la necesitas. Estoy agradecido de haber encontrado una plataforma que me ha ayudado a aprender sin sentirme intimidado.";
$home_review_2_tag = "Un aprendizaje más sencillo";
$home_review_3_text = "He probado muchas plataformas de análisis de mercado, y $site_name destaca porque combina accesibilidad con una profundidad analítica seria. Los nuevos usuarios entienden la plataforma rápidamente, mientras que los traders experimentados siguen obteniendo señales de mercado útiles impulsadas por IA, monitorización de riesgos e inteligencia cripto en tiempo real. Ese equilibrio es difícil de encontrar. La plataforma ofrece un contexto de mercado significativo sin abrumar a los usuarios, algo que muy pocas herramientas cripto logran.";
$home_review_3_tag = "Herramientas avanzadas con uso sencillo";
$home_review_span_1 = "Nuevo usuario cripto";
$home_review_span_2 = "Usuario de la plataforma por primera vez";
$home_review_span_3 = "Trader cripto profesional";
$home_review_1_avatar_alt = "Sean Miller, usuario de $site_name";
$home_review_2_avatar_alt = "Ethan Lucas, usuario de $site_name";
$home_review_3_avatar_alt = "Alexander Thompson, usuario de $site_name";
$home_hero_visual_alt = "Panel de análisis de mercado impulsado por IA en $site_name";
$home_signal_visual_alt = "Señal de trading en tiempo real generada por la IA de $site_name";
$home_device_visual_alt = "Análisis cripto mostrados en un dispositivo conectado a través de $site_name";
$home_security_visual_alt = "Escudo de seguridad que representa la protección de la cuenta en $site_name";
$home_contact_eyebrow = "EMPIEZA CON $site_name";
$home_contact_title = "Explora la plataforma con confianza";
$home_contact_section_title = "Explora la plataforma con confianza";
$home_contact_desc_1 = "Tanto si eres totalmente nuevo en los mercados de criptomonedas como si ya tienes experiencia en trading, $site_name te da acceso a análisis de mercado impulsados por IA, herramientas de monitorización en tiempo real y análisis inteligentes diseñados para ayudar a los usuarios a comprender mejor las oportunidades de los activos digitales.";
$home_contact_desc_2 = "Envía tus datos para conocer más sobre la plataforma, descubrir las funciones disponibles y ver cómo $site_name puede ayudarte a navegar por los mercados de criptomonedas mediante tecnología avanzada y soporte guiado de la plataforma.";
$home_seo_toggle = "Conoce más sobre la plataforma de IA de $site_name";
$home_seo_h2 = "$site_name Plataforma de IA para decisiones más inteligentes en el mercado cripto";
$home_seo_p1 = "$site_name es una plataforma de criptomonedas impulsada por IA diseñada tanto para principiantes como para traders experimentados. La plataforma combina inteligencia artificial, monitorización de mercado en tiempo real y herramientas analíticas avanzadas para ayudar a los usuarios a comprender mejor los mercados de activos digitales e identificar posibles oportunidades.";
$home_seo_p2 = "A diferencia de muchas plataformas de trading tradicionales que requieren un amplio conocimiento del mercado, $site_name está diseñada para hacer que la información de mercado compleja sea más fácil de entender. La plataforma analiza continuamente la actividad de las criptomonedas, los movimientos de precios, las tendencias de sentimiento, las condiciones de liquidez y los datos de blockchain, transformando grandes volúmenes de información en análisis prácticos.";
$home_seo_p3 = "Tanto si estás explorando los mercados de criptomonedas por primera vez como si ya tienes experiencia operando con activos digitales, $site_name ofrece herramientas inteligentes diseñadas para respaldar una toma de decisiones más informada mientras se adapta en tiempo real a las condiciones cambiantes del mercado.";
$home_seo_h3_1 = "Análisis de mercado con IA al alcance de todos";
$home_seo_h3_1_p1 = "$site_name utiliza inteligencia artificial para evaluar una amplia gama de indicadores de mercado, incluyendo la actividad de trading, los patrones de volatilidad, las condiciones de liquidez, los eventos de blockchain y el sentimiento del mercado. Al procesar la información de forma continua, la plataforma ayuda a los usuarios a comprender con mayor claridad el comportamiento actual del mercado.";
$home_seo_h3_1_p2 = "Los modelos de IA están diseñados para adaptarse a entornos cambiantes en lugar de basarse en suposiciones estáticas. Esto permite que la plataforma responda de forma dinámica a las tendencias cripto en evolución y a las oportunidades de mercado emergentes.";
$home_seo_h3_1_p3 = "Aunque es lo bastante avanzada para traders experimentados, la plataforma también está estructurada para seguir siendo accesible para los nuevos usuarios que desean acceder a inteligencia de mercado impulsada por IA sin necesidad de conocimientos técnicos profundos.";
$home_seo_h3_2 = "Señales de mercado con IA en tiempo real";
$home_seo_h3_2_p1 = "$site_name monitoriza continuamente los mercados de criptomonedas y genera análisis impulsados por IA en función de la evolución de la actividad del mercado. La plataforma evalúa el momentum, la volatilidad, las condiciones de liquidez y el comportamiento general del mercado para ofrecer señales analíticas en tiempo real.";
$home_seo_h3_2_p2 = "Bitcoin, Ethereum, Solana, XRP, Avalanche y otros activos digitales importantes se monitorizan mediante modelos analíticos adaptativos que se ajustan automáticamente a las condiciones cambiantes del mercado.";
$home_seo_h3_2_p3 = "En lugar de depender de un único indicador o una métrica aislada, $site_name combina múltiples fuentes de información en un marco analítico más amplio, diseñado para ofrecer una visión más completa de las condiciones del mercado.";
$home_seo_h3_3 = "Herramientas inteligentes de concienciación sobre riesgos";
$home_seo_h3_3_p1 = "Los mercados de criptomonedas pueden cambiar rápidamente. $site_name incluye sistemas de monitorización impulsados por IA diseñados para identificar volatilidad inusual, cambios en las condiciones de liquidez y riesgos de mercado emergentes.";
$home_seo_h3_3_p2 = "La plataforma evalúa continuamente el comportamiento del mercado y los posibles factores de riesgo, ayudando a los usuarios a comprender mejor las condiciones cambiantes y a tomar decisiones más informadas.";
$home_seo_h3_3_p3 = "Al combinar múltiples capas de análisis, $site_name busca mejorar la concienciación sobre el mercado y ayudar a los usuarios a afrontar periodos de mayor incertidumbre con más confianza.";
$home_seo_h3_4 = "Diseñada para los mercados de criptomonedas modernos";
$home_seo_h3_4_p1 = "$site_name combina inteligencia artificial, tecnologías de monitorización en tiempo real y herramientas analíticas avanzadas en una única plataforma diseñada para los mercados modernos de activos digitales.";
$home_seo_h3_4_p2 = "La infraestructura evalúa continuamente la actividad del mercado, los avances en blockchain, los cambios de sentimiento y las tendencias de liquidez para ofrecer una visión completa del comportamiento del mercado cripto.";
$home_seo_h3_4_p3 = "A medida que los mercados de activos digitales continúan evolucionando, las herramientas impulsadas por IA pueden ayudar a los usuarios a procesar la información con mayor eficacia y a comprender mejor entornos de mercado cada vez más complejos. $site_name está diseñada para poner estas capacidades al alcance de una gama más amplia de participantes del mercado.";
$home_seo_side_1_label = "Análisis de IA";
$home_seo_side_1_title = "Análisis de mercado fácil de entender";
$home_seo_side_1_desc = "Análisis impulsados por IA diseñados tanto para usuarios cripto nuevos como experimentados.";
$home_seo_side_2_label = "Monitorización del mercado";
$home_seo_side_2_title = "Seguimiento cripto en tiempo real";
$home_seo_side_2_desc = "Monitorización continua de los principales mercados de criptomonedas y de las condiciones cambiantes del mercado.";
$home_seo_side_3_label = "Concienciación sobre riesgos";
$home_seo_side_3_title = "Detección inteligente de riesgos";
$home_seo_side_3_desc = "Herramientas de monitorización avanzadas diseñadas para destacar la dinámica y la volatilidad cambiantes del mercado.";
$home_seo_side_4_label = "Tecnología de IA";
$home_seo_side_4_title = "Modelos analíticos adaptativos";
$home_seo_side_4_desc = "Sistemas de aprendizaje automático que evalúan continuamente los datos de mercado y las tendencias emergentes.";
$home_faq_eyebrow = "BASE DE CONOCIMIENTO DE $site_name";
$home_faq_title = "Preguntas frecuentes sobre $site_name";
$home_faq_desc = "Descubre más sobre cómo funciona la plataforma, a quién está dirigida y cómo la inteligencia artificial ayuda a los usuarios a comprender mejor las condiciones del mercado de criptomonedas.";
$home_faq_q1 = "¿Necesito experiencia en trading para usar $site_name?";
$home_faq_a1 = "No. $site_name está diseñada para usuarios con distintos niveles de experiencia, incluidas personas totalmente nuevas en los mercados de criptomonedas. La plataforma utiliza análisis impulsados por IA y herramientas de monitorización de mercado para hacer que la información compleja sea más fácil de entender.";
$home_faq_q2 = "¿Qué hace exactamente $site_name?";
$home_faq_a2 = "$site_name analiza continuamente los mercados de criptomonedas mediante inteligencia artificial. La plataforma evalúa la actividad del mercado, la volatilidad, las tendencias de sentimiento, las condiciones de liquidez y los datos de blockchain para generar análisis y señales en tiempo real.";
$home_faq_q3 = "¿Pueden los traders experimentados usar $site_name?";
$home_faq_a3 = "Sí. Aunque la plataforma es apta para principiantes, también ofrece herramientas analíticas avanzadas, inteligencia de mercado impulsada por IA y funciones de monitorización en tiempo real que pueden resultar valiosas para participantes de mercado experimentados.";
$home_faq_q4 = "¿Qué criptomonedas monitoriza $site_name?";
$home_faq_a4 = "La plataforma puede analizar activos digitales importantes como Bitcoin, Ethereum, Solana, XRP, Avalanche y otras criptomonedas ampliamente negociadas, según las condiciones del mercado y las fuentes de datos disponibles.";
$home_faq_q5 = "¿Cómo se generan las señales de IA?";
$home_faq_a5 = "$site_name evalúa simultáneamente múltiples factores de mercado, incluyendo la volatilidad, la actividad de trading, las condiciones de liquidez, las tendencias de sentimiento y el comportamiento histórico del mercado. Los modelos de IA combinan estos datos para identificar cambios en las condiciones del mercado y posibles oportunidades.";
$home_faq_q6 = "¿Ofrece $site_name orientación educativa?";
$home_faq_a6 = "La plataforma está diseñada para ayudar a los usuarios a comprender mejor las condiciones del mercado mediante análisis impulsados por IA, información simplificada y acceso guiado a las funciones de la plataforma. Los nuevos usuarios pueden explorar los mercados de criptomonedas sin necesidad de conocimientos técnicos avanzados.";
$home_cta_label = "Plataforma de IA lista";
$home_cta_title = "Empieza a explorar $site_name hoy mismo";
$home_cta_desc = "Descubre análisis de mercado impulsados por IA, monitorización de criptomonedas en tiempo real, herramientas inteligentes de concienciación sobre riesgos y análisis avanzados diseñados tanto para principiantes como para traders experimentados.";
$home_ticker_text = "Monitorización de mercado con IA activa • Análisis de criptomonedas en tiempo real • El momentum de Bitcoin se fortalece • Consolidación de Ethereum detectada • Nuevas oportunidades de mercado identificadas • Sistemas de monitorización de riesgos en línea • Los análisis de IA se actualizan continuamente • Diseñada para principiantes y traders experimentados";




// ABOUT PAGE
$about_h1 = "Sobre $site_name";
$about_p1 = "$site_name es una infraestructura de inteligencia artificial de nueva generación diseñada para ayudar a los participantes del mercado a comprender mejor el ecosistema cripto en rápida evolución. Al combinar tecnologías de aprendizaje automático, análisis predictivo, sistemas de inteligencia de mercado y procesamiento de datos en tiempo real, $site_name ofrece un entorno integral para monitorizar la actividad de los activos digitales e identificar acontecimientos de mercado relevantes.";
$about_p2 = "El mercado de criptomonedas opera de forma continua a través de múltiples exchanges, jurisdicciones y proveedores de liquidez. Cada segundo, miles de variables influyen en los precios, la volatilidad, las condiciones de liquidez y el sentimiento de los inversores. $site_name se desarrolló con el objetivo de procesar estos complejos flujos de datos de manera estructurada y escalable.";
$about_h2_vision = "La visión detrás de $site_name";
$about_p_vision_1 = "Los mercados financieros se han vuelto cada vez más impulsados por los datos. Los métodos de análisis tradicionales a menudo tienen dificultades para seguir el ritmo del volumen de información generado en los ecosistemas modernos de activos digitales. $site_name busca cerrar esta brecha mediante la aplicación de inteligencia computacional avanzada, sistemas de monitorización automatizados y modelos analíticos adaptativos.";
$about_p_vision_2 = "La visión a largo plazo de $site_name es proporcionar herramientas transparentes de inteligencia de mercado capaces de ayudar a los usuarios a comprender mejor la estructura del mercado cripto, las condiciones de riesgo y las tendencias emergentes.";
$about_h2_ai = "Infraestructura de inteligencia artificial";
$about_p_ai_1 = "En el núcleo de $site_name se encuentra un marco de inteligencia artificial multicapa diseñado para procesar información de numerosas fuentes de mercado simultáneamente.";
$about_p_ai_2 = "Estas fuentes pueden incluir:";
$about_li_1 = "Feeds de precios de criptomonedas";
$about_li_2 = "Actividad del libro de órdenes";
$about_li_3 = "Datos de movimiento de liquidez";
$about_li_4 = "Indicadores de volatilidad";
$about_li_5 = "Métricas de transacciones en blockchain";
$about_li_6 = "Señales de sentimiento de mercado";
$about_li_7 = "Acontecimientos macroeconómicos";
$about_li_8 = "Actividad del mercado institucional";
$about_p_ai_3 = "Al evaluar continuamente las relaciones entre estas variables, $site_name trata de identificar patrones que puedan aportar un contexto de mercado valioso.";
$about_h2_risk = "Filosofía de concienciación sobre riesgos";
$about_p_risk_1 = "La participación responsable en los mercados de criptomonedas requiere una comprensión clara del riesgo. $site_name pone énfasis en la concienciación sobre riesgos como componente fundamental del análisis de activos digitales.";
$about_p_risk_2 = "La volatilidad del mercado, las fluctuaciones de liquidez, los eventos específicos de cada exchange, los avances regulatorios y las condiciones macroeconómicas más amplias pueden afectar a los resultados del mercado. Por ello, los usuarios nunca deben depender exclusivamente de una única fuente de información al tomar decisiones.";
$about_h2_global = "Mercados globales de activos digitales";
$about_p_global_1 = "Los mercados de criptomonedas operan a escala global e involucran a participantes de diversas regiones, sectores y entornos económicos. La infraestructura de $site_name está diseñada para monitorizar múltiples segmentos de mercado simultáneamente, lo que permite a los usuarios observar acontecimientos que se producen en distintas partes del ecosistema de activos digitales.";
$about_p_global_2 = "Esta perspectiva más amplia puede ayudar a mejorar la concienciación sobre las condiciones cambiantes del mercado y las tendencias emergentes.";
$about_h2_why = "Por qué los usuarios exploran $site_name";
$about_why_li_1 = "Inteligencia de mercado avanzada impulsada por IA";
$about_why_li_2 = "Monitorización cripto en tiempo real";
$about_why_li_3 = "Infraestructura analítica de estilo institucional";
$about_why_li_4 = "Evaluación de mercado multifactorial";
$about_why_li_5 = "Monitorización de la volatilidad y la liquidez";
$about_why_li_6 = "Herramientas de investigación de activos digitales escalables";
$about_why_li_7 = "Metodología analítica consciente del riesgo";
$about_h2_forward = "Mirando hacia el futuro";
$about_p_forward_1 = "A medida que los mercados de activos digitales continúan madurando, se espera que aumente la importancia de una infraestructura analítica avanzada. $site_name sigue centrada en desarrollar tecnologías que favorezcan una comprensión más profunda del mercado, una mayor transparencia y una participación más informada en el ecosistema cripto.";
$about_p_forward_2 = "A través de la innovación continua y la investigación permanente, $site_name aspira a contribuir a un futuro más inteligente y basado en datos para el análisis de activos digitales.";


// CONTACT PAGE
$contact_h1 = "Contactar con $site_name";
$contact_intro_1 = "Contacta con el equipo de $site_name para solicitar acceso a la plataforma, preguntar sobre nuestra infraestructura de trading cripto impulsada por IA o conocer más sobre nuestro entorno de inteligencia de mercado de activos digitales.";
$contact_intro_2 = "Tanto si te interesan los análisis cripto automatizados, la infraestructura de señales de nivel institucional, la monitorización de la volatilidad o la inteligencia de mercado multiexchange, nuestro equipo puede dirigir tu solicitud al departamento adecuado.";
$contact_h2_help = "Cómo podemos ayudarte";
$contact_li_1 = "Solicitudes de acceso a la plataforma";
$contact_li_2 = "Preguntas generales sobre el producto";
$contact_li_3 = "Información sobre la infraestructura de trading con IA";
$contact_li_4 = "Consultas sobre inteligencia de mercado de activos digitales";
$contact_li_5 = "Preguntas sobre la advertencia de riesgo y el cumplimiento normativo";
$contact_li_6 = "Asistencia técnica o de incorporación";
$contact_h2_send = "Enviar una solicitud";
$contact_p_send = "Completa el siguiente formulario y un representante de $site_name podrá ponerse en contacto contigo con información adicional.";
$contact_h2_info = "Información de contacto";
$contact_support_label = "Soporte general:";
$contact_institutional_label = "Consultas institucionales:";
$contact_disclaimer = "Ten en cuenta que $site_name no ofrece asesoramiento financiero, de inversión, fiscal o legal personalizado. Toda la información se proporciona únicamente con fines tecnológicos e informativos.";

// TERMS PAGE
$terms_h1 = "Términos y Condiciones";
$terms_intro_1 = "Estos Términos y Condiciones regulan el acceso y el uso del sitio web de $site_name, su contenido, las descripciones de la plataforma, los formularios, las comunicaciones y los materiales informativos relacionados.";
$terms_intro_2 = "Al acceder a este sitio web, los usuarios reconocen haber leído, comprendido y aceptado estos Términos y Condiciones. Si un usuario no está de acuerdo con estos términos, debe dejar de utilizar el sitio web.";
$terms_h2_informational = "Finalidad informativa";
$terms_p_info_1 = "$site_name proporciona información sobre infraestructura de trading cripto impulsada por IA, inteligencia de mercado de activos digitales, monitorización de la volatilidad, análisis de liquidez y tecnologías relacionadas.";
$terms_p_info_2 = "El contenido del sitio web se ofrece únicamente con fines informativos generales y de presentación tecnológica. Nada en este sitio web debe interpretarse como asesoramiento financiero, de inversión, legal, fiscal ni como una garantía de resultados de trading.";
$terms_h2_no_advice = "Sin asesoramiento financiero";
$terms_p_no_advice_1 = "$site_name no proporciona recomendaciones personalizadas sobre si los usuarios deben comprar, vender, mantener, negociar, hacer staking, transferir o interactuar de cualquier otra forma con criptomonedas, tokens, productos financieros o activos digitales.";
$terms_p_no_advice_2 = "Los usuarios deben evaluar de forma independiente toda la información y buscar asesoramiento de profesionales cualificados antes de tomar decisiones financieras.";
$terms_h2_user_responsibility = "Responsabilidad del usuario";
$terms_p_user_1 = "Los usuarios son responsables de sus propias decisiones, evaluaciones de riesgo, actividad de la cuenta, acciones de trading, cumplimiento legal y uso de cualquier servicio de terceros.";
$terms_p_user_2 = "Los usuarios deben asegurarse de que la actividad con activos digitales esté permitida en su jurisdicción y de que comprenden todos los riesgos aplicables antes de interactuar con los mercados cripto.";
$terms_h2_ai = "IA y sistemas analíticos";
$terms_p_ai_1 = "$site_name puede describir sistemas de inteligencia artificial, modelos predictivos, señales de mercado, análisis automatizados o tecnologías relacionadas con la ejecución.";
$terms_p_ai_2 = "Estos sistemas pueden basarse en datos de mercado, modelos estadísticos, procesos de aprendizaje automático y fuentes de información de terceros. Dichos sistemas pueden ser inexactos, tener retrasos, estar incompletos, no estar disponibles o no ser adecuados para los objetivos particulares de un usuario.";
$terms_h2_availability = "Sin garantía de disponibilidad";
$terms_p_avail_1 = "$site_name no garantiza un acceso ininterrumpido al sitio web, una disponibilidad continua de la plataforma, un funcionamiento sin errores, información de mercado precisa ni la disponibilidad de ninguna función específica.";
$terms_p_avail_2 = "Los servicios, contenidos, páginas, formularios, integraciones o descripciones de la plataforma pueden modificarse, suspenderse o interrumpirse en cualquier momento.";
$terms_h2_third_party = "Servicios de terceros";
$terms_p_tp_1 = "El sitio web puede hacer referencia a exchanges, plataformas de liquidez, proveedores de análisis, herramientas de comunicación, servicios de alojamiento o proveedores de infraestructura técnica de terceros.";
$terms_p_tp_2 = "$site_name no controla las plataformas de terceros y no es responsable de su disponibilidad, tarifas, políticas, restricciones de cuenta, procedimientos de cumplimiento, fallos técnicos o pérdidas de los usuarios.";
$terms_h2_prohibited = "Uso prohibido";
$terms_p_prohibited = "Los usuarios no deben utilizar este sitio web ni ninguna tecnología relacionada con fines ilícitos, abusivos, fraudulentos, manipuladores o dañinos.";
$terms_li_1 = "Intentar un acceso no autorizado";
$terms_li_2 = "Enviar información falsa o engañosa";
$terms_li_3 = "Utilizar el sitio web para actividades financieras ilícitas";
$terms_li_4 = "Interferir con la seguridad o la funcionalidad del sitio web";
$terms_li_5 = "Copiar o utilizar indebidamente el contenido del sitio web sin permiso";
$terms_li_6 = "Intentar eludir los controles de cumplimiento o técnicos";
$terms_h2_ip = "Propiedad intelectual";
$terms_p_ip_1 = "El diseño, los textos, la marca, los elementos de la interfaz, los gráficos, la estructura y los materiales relacionados del sitio web son propiedad de $site_name o están licenciados a $site_name, salvo que se indique lo contrario.";
$terms_p_ip_2 = "Los usuarios no pueden reproducir, distribuir, modificar ni explotar comercialmente los materiales del sitio web sin la autorización correspondiente.";
$terms_h2_liability = "Limitación de responsabilidad";
$terms_p_liab_1 = "En la máxima medida permitida por la legislación aplicable, $site_name no será responsable de las pérdidas derivadas del trading de activos digitales, la volatilidad del mercado, problemas técnicos, fallos de plataformas de terceros, datos inexactos, decisiones de los usuarios o la confianza depositada en el contenido del sitio web.";
$terms_p_liab_2 = "Los usuarios acceden y utilizan este sitio web bajo su propio riesgo.";
$terms_h2_changes = "Cambios en estos términos";
$terms_p_changes_1 = "$site_name puede actualizar estos Términos y Condiciones en cualquier momento. Los términos actualizados pueden publicarse en esta página.";
$terms_p_changes_2 = "El uso continuado del sitio web tras los cambios implica que los usuarios reconocen y aceptan los términos actualizados.";

// PRIVACY PAGE
$privacy_h1 = "Política de Privacidad";
$privacy_intro_1 = "$site_name respeta la privacidad de los usuarios y se compromete a tratar la información personal de manera responsable, transparente y segura.";
$privacy_intro_2 = "Esta Política de Privacidad explica qué información puede recopilarse cuando los usuarios visitan este sitio web, envían formularios de contacto, solicitan acceso o interactúan con el contenido y las comunicaciones relacionadas con la plataforma de $site_name.";
$privacy_h2_collect = "Información que podemos recopilar";
$privacy_p_collect_1 = "$site_name puede recopilar información enviada voluntariamente por los usuarios a través de formularios del sitio web o canales de comunicación.";
$privacy_li_fname = "Nombre";
$privacy_li_lname = "Apellidos";
$privacy_li_email = "Dirección de correo electrónico";
$privacy_li_phone = "Número de teléfono";
$privacy_li_inquiry = "Detalles de la consulta enviada";
$privacy_li_technical = "Datos técnicos básicos de uso del sitio web";
$privacy_h2_use = "Cómo utilizamos la información";
$privacy_p_use_1 = "La información puede utilizarse para responder a las solicitudes de los usuarios, proporcionar información sobre el acceso a la plataforma, mejorar la funcionalidad del sitio web, mantener la seguridad y comunicar actualizaciones relevantes sobre $site_name.";
$privacy_p_use_2 = "También podemos utilizar datos agregados o no identificativos para analizar el rendimiento del sitio web, mejorar la estructura del contenido y comprender mejor cómo interactúan los visitantes con nuestras páginas.";
$privacy_h2_comm = "Finalidades de comunicación";
$privacy_p_comm_1 = "Si un usuario envía información de contacto, $site_name puede utilizarla para responder a la consulta, proporcionar detalles de incorporación, aclarar solicitudes de acceso a la plataforma o compartir información de servicio relevante.";
$privacy_p_comm_2 = "Los usuarios pueden solicitar que se interrumpa la comunicación cuando corresponda.";
$privacy_h2_cookies = "Cookies y datos técnicos";
$privacy_p_cookies_1 = "Este sitio web puede utilizar cookies, herramientas de análisis y tecnologías similares para mejorar la experiencia de navegación, supervisar el rendimiento y reforzar la seguridad del sitio web.";
$privacy_p_cookies_2 = "Los datos técnicos pueden incluir el tipo de dispositivo, el tipo de navegador, el sistema operativo, las interacciones en las páginas, la información de referencia y las estadísticas generales de uso.";
$privacy_h2_protection = "Medidas de protección de datos";
$privacy_p_prot_1 = "$site_name aplica medidas de protección administrativas, técnicas y organizativas razonables para proteger la información enviada frente a accesos no autorizados, usos indebidos, pérdidas o divulgaciones.";
$privacy_p_prot_2 = "No obstante, ningún sistema en línea puede garantizar una seguridad absoluta. Los usuarios deben evitar enviar información financiera sensible, claves privadas de monederos, contraseñas, credenciales de exchanges o datos de acceso confidenciales a la cuenta a través de formularios públicos del sitio web.";
$privacy_h2_third = "Proveedores de servicios de terceros";
$privacy_p_third_1 = "$site_name puede utilizar proveedores de terceros para el alojamiento, el análisis, la comunicación, la seguridad, el envío de correos electrónicos, el procesamiento de CRM o la infraestructura técnica.";
$privacy_p_third_2 = "Estos proveedores solo pueden tratar la información limitada necesaria para respaldar la funcionalidad del sitio web y los servicios relacionados.";
$privacy_google_choices = 'Puedes gestionar cómo utiliza Google la información de tus visitas a través de la <a href="http://www.google.com/settings/ads" target="_blank" rel="noopener">Configuración de anuncios de Google</a>, optar por no recibir publicidad basada en intereses mediante el <a href="https://tools.google.com/dlpage/gaoptout" target="_blank" rel="noopener">complemento de inhabilitación para navegadores de Google Analytics</a>, o consultar la <a href="https://www.google.com/intl/en/policies/privacy/" target="_blank" rel="noopener">Política de Privacidad de Google</a> para más información.';
$privacy_h2_sale = "Ninguna venta de información personal";
$privacy_p_sale_1 = "$site_name no tiene intención de vender la información personal enviada a través de este sitio web.";
$privacy_p_sale_2 = "La información solo puede compartirse cuando sea necesario para fines operativos, cumplimiento legal, comunicación con los usuarios, prevención del fraude o procesamiento relacionado con el servicio.";
$privacy_h2_retention = "Conservación de datos";
$privacy_p_retention = "La información personal puede conservarse durante el tiempo necesario para responder a consultas, mantener registros comerciales, cumplir con las obligaciones legales, mejorar las comunicaciones de la plataforma o respaldar la seguridad y la prevención del fraude.";
$privacy_h2_rights = "Derechos del usuario";
$privacy_p_rights = "Según la legislación aplicable, los usuarios pueden tener derechos relacionados con el acceso, la rectificación, la eliminación, la oposición, la limitación o la portabilidad de la información personal.";
$privacy_h2_intl = "Uso internacional";
$privacy_p_intl_1 = "$site_name puede ser utilizado por usuarios de diferentes jurisdicciones. Las normas de privacidad pueden variar según la ubicación.";
$privacy_p_intl_2 = "Al utilizar este sitio web, los usuarios reconocen que la información puede tratarse de conformidad con esta Política de Privacidad y con los requisitos operativos aplicables.";
$privacy_h2_policy_updates = "Actualizaciones de la política";
$privacy_p_updates_1 = "$site_name puede actualizar periódicamente esta Política de Privacidad para reflejar cambios en la legislación, la tecnología, los procedimientos internos o la funcionalidad del sitio web.";
$privacy_p_updates_2 = "El uso continuado del sitio web tras las actualizaciones implica que los usuarios reconocen la Política de Privacidad revisada.";
// COOKIES PAGE
$cookies_h1 = "Política de Cookies";
$cookies_intro_1 = "Esta Política de Cookies explica cómo $site_name utiliza cookies, tecnologías de análisis y herramientas de seguimiento similares cuando los usuarios acceden a este sitio web o interactúan con él.";
$cookies_intro_2 = "Las cookies ayudan a mejorar la funcionalidad del sitio web, optimizar la experiencia del usuario, analizar el rendimiento y respaldar los procesos relacionados con la seguridad.";
$cookies_intro_3 = "Al continuar utilizando este sitio web, los usuarios reconocen que pueden utilizarse ciertas cookies y tecnologías relacionadas de conformidad con esta política.";
$cookies_h2_what = "¿Qué son las cookies?";
$cookies_p_what_1 = "Las cookies son pequeños archivos de texto que se almacenan en el dispositivo de un usuario al visitar un sitio web.";
$cookies_p_what_2 = "Estos archivos pueden contener información que ayuda a los sitios web a reconocer a los visitantes recurrentes, recordar preferencias, mejorar la navegación y medir el rendimiento del sitio web.";
$cookies_h2_why = "Por qué utilizamos cookies";
$cookies_p_why_1 = "$site_name puede utilizar cookies y tecnologías similares con varios fines.";
$cookies_li_1 = "Mantener la funcionalidad del sitio web";
$cookies_li_2 = "Mejorar la experiencia del usuario";
$cookies_li_3 = "Recordar las preferencias del usuario";
$cookies_li_4 = "Comprender el comportamiento de los visitantes";
$cookies_li_5 = "Medir el rendimiento del sitio web";
$cookies_li_6 = "Identificar problemas técnicos";
$cookies_li_7 = "Reforzar la seguridad del sitio web";
$cookies_li_8 = "Prevenir el abuso y el uso indebido";
$cookies_h2_essential = "Cookies esenciales";
$cookies_p_ess_1 = "Ciertas cookies son necesarias para el correcto funcionamiento del sitio web.";
$cookies_p_ess_2 = "Estas cookies contribuyen a la seguridad, la funcionalidad de navegación, la gestión de sesiones y otras operaciones esenciales del sitio web.";
$cookies_p_ess_3 = "Sin las cookies esenciales, algunas partes del sitio web podrían no funcionar correctamente.";
$cookies_h2_analytics = "Cookies analíticas";
$cookies_p_an_1 = "Las cookies analíticas nos ayudan a comprender cómo interactúan los visitantes con el contenido del sitio web.";
$cookies_p_an_2 = "Estas tecnologías pueden recopilar información sobre las visitas a las páginas, los patrones de navegación, los tipos de dispositivos, las configuraciones del navegador y las estadísticas generales de uso del sitio web.";
$cookies_p_an_3 = "La información analítica suele agregarse y utilizarse para mejorar el rendimiento del sitio web y la experiencia del usuario.";
$cookies_h2_functional = "Cookies funcionales";
$cookies_p_fun_1 = "Las cookies funcionales pueden utilizarse para recordar los ajustes y preferencias seleccionados por los usuarios.";
$cookies_p_fun_2 = "Algunos ejemplos son las preferencias de idioma, los ajustes de la interfaz, las opciones de visualización u otras funciones de personalización.";
$cookies_h2_third = "Tecnologías de terceros";
$cookies_p_third_1 = "$site_name puede utilizar proveedores de terceros, plataformas de análisis, tecnologías publicitarias o herramientas de supervisión del rendimiento.";
$cookies_p_third_2 = "Estos terceros pueden colocar sus propias cookies o tecnologías de seguimiento, sujetas a sus respectivas políticas de privacidad.";
$cookies_p_third_3 = "$site_name no controla las prácticas de cookies de terceros y recomienda consultar la documentación de privacidad de los proveedores externos cuando corresponda.";
$cookies_h2_manage = "Gestión de cookies";
$cookies_p_manage_1 = "La mayoría de los navegadores modernos permiten a los usuarios gestionar, restringir o eliminar cookies a través de la configuración del navegador.";
$cookies_p_manage_2 = "Los usuarios pueden optar por desactivar completamente las cookies, aunque algunas funciones del sitio web pueden no funcionar según lo previsto tras hacerlo.";
$cookies_p_manage_3 = "La configuración del navegador suele ofrecer opciones para:";
$cookies_li_manage_1 = "Bloquear todas las cookies";
$cookies_li_manage_2 = "Eliminar las cookies existentes";
$cookies_li_manage_3 = "Recibir notificaciones sobre cookies";
$cookies_li_manage_4 = "Restringir categorías específicas de cookies";
$cookies_h2_data = "Protección de datos";
$cookies_p_data = "La información relacionada con las cookies puede tratarse de conformidad con nuestra Política de Privacidad y la legislación aplicable en materia de protección de datos.";
$cookies_h2_policy_updates = "Actualizaciones de la política";
$cookies_p_updates_1 = "$site_name puede actualizar periódicamente esta Política de Cookies para reflejar cambios tecnológicos, requisitos legales o mejoras operativas.";
$cookies_p_updates_2 = "El uso continuado del sitio web tras las actualizaciones constituye un reconocimiento de la política revisada.";
// AML PAGE
$aml_h1 = "Política ALD";
$aml_intro_1 = "$site_name reconoce la importancia de la concienciación sobre la prevención del blanqueo de capitales, la integridad financiera y la participación responsable en los mercados de activos digitales.";
$aml_intro_2 = "Esta Política ALD explica los principios generales que aplica $site_name para desalentar el uso ilícito de las tecnologías relacionadas con las criptomonedas, la actividad financiera sospechosa, el fraude, la evasión de sanciones, la financiación del terrorismo y otras conductas prohibidas.";
$aml_h2_purpose = "Objetivo de esta política";
$aml_p_purpose_1 = "El objetivo de esta política es establecer un marco responsable sobre cómo $site_name aborda la concienciación en materia de prevención del blanqueo de capitales dentro del ecosistema de activos digitales.";
$aml_p_purpose_2 = "Los mercados de criptomonedas pueden implicar actividad transfronteriza, infraestructura descentralizada, exchanges de terceros y sistemas de monederos externos. Por ello, los usuarios deben entender que las obligaciones de cumplimiento pueden variar según la jurisdicción, el tipo de cuenta, el proveedor del exchange y el entorno regulatorio local.";
$aml_h2_responsible = "Uso responsable de la tecnología de activos digitales";
$aml_p_resp_1 = "Se espera que los usuarios interactúen con $site_name y cualquier servicio de activos digitales relacionado de forma responsable, legal y conforme a las normas aplicables.";
$aml_p_resp_2 = "$site_name no apoya ni fomenta el uso de los mercados cripto, los sistemas de trading, las tecnologías automatizadas o las herramientas analíticas con fines ilícitos.";
$aml_li_1 = "Blanqueo de capitales";
$aml_li_2 = "Financiación del terrorismo";
$aml_li_3 = "Fraude o engaño financiero";
$aml_li_4 = "Evasión de sanciones";
$aml_li_5 = "Manipulación del mercado";
$aml_li_6 = "Uso de fondos robados o cuentas comprometidas";
$aml_li_7 = "Cualquier actividad prohibida por la legislación aplicable";
$aml_h2_exchange = "Cumplimiento de exchanges de terceros";
$aml_p_ex_1 = "$site_name puede hacer referencia a exchanges o entornos de liquidez de terceros, interactuar con ellos o proporcionar infraestructura analítica relacionada.";
$aml_p_ex_2 = "Los exchanges, custodios, procesadores de pagos y otros proveedores de terceros pueden aplicar sus propios procedimientos de cumplimiento, incluyendo la verificación de identidad, la monitorización de transacciones, el cribado de sanciones, las restricciones de cuenta, las comprobaciones del origen de los fondos o requisitos de verificación adicionales.";
$aml_h2_user_responsibility = "Responsabilidad del usuario";
$aml_p_user_1 = "Los usuarios son responsables de garantizar que su actividad sea legal en su ubicación y coherente con las obligaciones impuestas por los reguladores, exchanges, instituciones financieras o proveedores de servicios pertinentes.";
$aml_p_user_2 = "Los usuarios no deben intentar ocultar la titularidad, disfrazar el origen de las transacciones, proporcionar información falsa, eludir los procesos de verificación o utilizar la infraestructura de activos digitales de una manera que pueda considerarse sospechosa o ilícita.";
$aml_h2_suspicious = "Actividad sospechosa";
$aml_p_suspicious = "La actividad sospechosa puede incluir comportamientos incoherentes con un uso normal, intentos de abusar de los sistemas de trading, el envío repetido de información engañosa, la implicación con jurisdicciones restringidas o actividades vinculadas al fraude, fondos ilícitos o servicios prohibidos.";
$aml_h2_evasion = "Sin elusión ni evasión";
$aml_p_evasion = "Los usuarios no deben intentar eludir los controles de cumplimiento, las restricciones técnicas, los sistemas de verificación de identidad, las limitaciones geográficas o los procesos de monitorización de riesgos.";
$aml_h2_policy_updates = "Actualizaciones de la política";
$aml_p_updates_1 = "$site_name puede actualizar esta Política ALD de vez en cuando para reflejar cambios en las expectativas regulatorias, los estándares del mercado, los procedimientos internos o las prácticas del sector de activos digitales.";
$aml_p_updates_2 = "El uso continuado del sitio web tras las actualizaciones implica que los usuarios reconocen la política revisada.";
// RISK PAGE
$risk_h1 = "Advertencia de Riesgo";
$risk_intro_1 = "El trading de criptomonedas y la participación en los mercados de activos digitales conllevan riesgos significativos. Los precios pueden moverse rápidamente, la liquidez puede cambiar de forma inesperada y las condiciones del mercado pueden volverse muy inestables en un breve periodo de tiempo.";
$risk_intro_2 = "Esta Advertencia de Riesgo explica consideraciones importantes que los usuarios deben revisar antes de interactuar con los mercados de activos digitales, las tecnologías de trading automatizadas, las señales de mercado generadas por IA o la infraestructura analítica relacionada con las criptomonedas.";
$risk_h2_no_guarantee = "Sin resultados garantizados";
$risk_p_no_guarantee_1 = "$site_name no garantiza beneficios, rendimientos de inversión, éxito en el trading, precisión de las señales, acceso ininterrumpido ni resultados financieros positivos.";
$risk_p_no_guarantee_2 = "Cualquier ejemplo, estadística, elemento de interfaz, indicador de rendimiento, indicador de señal o simulación de mercado mostrado en este sitio web se proporciona únicamente con fines informativos e ilustrativos.";
$risk_h2_volatility = "Volatilidad del mercado de criptomonedas";
$risk_p_vol_1 = "Los mercados de activos digitales son muy volátiles. Los precios pueden verse afectados por escasez de liquidez, noticias macroeconómicas, avances regulatorios, interrupciones de los exchanges, eventos de blockchain, el sentimiento de los inversores, la actividad de apalancamiento o la manipulación del mercado.";
$risk_p_vol_2 = "La volatilidad puede provocar pérdidas rápidas, saltos de precio repentinos, slippage, eventos de liquidación o la imposibilidad de ejecutar transacciones a los precios esperados.";
$risk_h2_ai = "Limitaciones de las señales de IA";
$risk_p_ai_1 = "Los sistemas de inteligencia artificial pueden analizar grandes cantidades de datos de mercado, pero no pueden eliminar la incertidumbre.";
$risk_p_ai_2 = "Los indicadores, señales de trading, clasificaciones de mercado y modelos predictivos impulsados por IA pueden ser incompletos, tener retrasos, ser incorrectos o no ser adecuados para la situación financiera personal de un usuario.";
$risk_p_ai_3 = "Los usuarios no deben confiar únicamente en una señal de IA a la hora de tomar decisiones de trading, inversión o financieras.";
$risk_h2_tech = "Riesgo tecnológico y de ejecución";
$risk_p_tech_1 = "La tecnología de trading puede verse afectada por problemas de conectividad a internet, interrupciones del servidor, latencia, errores de software, fallos de API, tiempos de inactividad de los exchanges, feeds de datos incorrectos o limitaciones de la infraestructura de terceros.";
$risk_p_tech_2 = "$site_name no garantiza un acceso ininterrumpido a los datos, las señales, las funciones de la plataforma, los sistemas de terceros o los entornos de ejecución.";
$risk_h2_liquidity = "Riesgo de liquidez y de exchange";
$risk_p_liq_1 = "La liquidez puede variar significativamente entre exchanges y activos digitales. Algunos mercados pueden presentar poca profundidad en el libro de órdenes, diferenciales amplios, ejecución retrasada o movimientos bruscos de precio durante periodos de tensión.";
$risk_p_liq_2 = "Los exchanges de terceros pueden imponer comisiones, límites, restricciones, revisiones de cuentas, retrasos en las retiradas, suspensiones de trading o limitaciones geográficas.";
$risk_h2_regulatory = "Riesgo regulatorio";
$risk_p_reg_1 = "La normativa sobre activos digitales puede cambiar rápidamente y variar entre países, regiones y jurisdicciones.";
$risk_p_reg_2 = "Los cambios regulatorios pueden afectar al acceso al mercado, la disponibilidad de activos, el funcionamiento de los exchanges, las obligaciones de información, la fiscalidad, las restricciones de trading o la funcionalidad de la plataforma.";
$risk_h2_user_responsibility = "Responsabilidad del usuario";
$risk_p_user_1 = "Los usuarios son los únicos responsables de evaluar los riesgos, comprender la legislación aplicable, revisar sus circunstancias financieras y tomar decisiones independientes.";
$risk_p_user_2 = "$site_name no ofrece asesoramiento financiero, de inversión, legal, contable o fiscal personalizado.";
$risk_h2_advice = "Busca asesoramiento profesional";
$risk_p_advice_1 = "Los usuarios deben consultar a profesionales cualificados antes de tomar decisiones financieras importantes relacionadas con criptomonedas, sistemas de trading, tecnologías automatizadas o inversiones en activos digitales.";
$risk_p_advice_2 = "Al utilizar este sitio web, los usuarios reconocen que comprenden los riesgos asociados a los mercados de activos digitales y asumen la responsabilidad de sus propias decisiones.";
// EXCHANGES PAGE
$exchanges_h1 = "Exchanges compatibles";
$exchanges_intro_1 = "$site_name está diseñada en torno a un enfoque de inteligencia multimercado que evalúa la actividad de los activos digitales en una amplia gama de entornos de trading cripto.";
$exchanges_intro_2 = "Los mercados cripto modernos operan a través de numerosos exchanges, proveedores de liquidez, plataformas de derivados y ecosistemas de trading. Comprender la actividad en estos entornos es esencial para construir una inteligencia de mercado completa.";
$exchanges_h2_philosophy = "Filosofía de cobertura del mercado";
$exchanges_p_phil_1 = "En lugar de depender de una única plataforma, $site_name se construye en torno al concepto de análisis a escala de mercado.";
$exchanges_p_phil_2 = "Los precios de las criptomonedas, las condiciones de liquidez, el comportamiento de la volatilidad y la actividad institucional suelen diferir entre exchanges. Al observar condiciones de mercado más amplias, los modelos analíticos pueden obtener contexto adicional sobre tendencias emergentes y posibles anomalías.";
$exchanges_h2_spot = "Monitorización del mercado spot";
$exchanges_p_spot_1 = "Los exchanges spot representan una parte significativa de la actividad global de activos digitales.";
$exchanges_p_spot_2 = "Los sistemas de inteligencia de mercado pueden evaluar datos del mercado spot, incluyendo:";
$exchanges_li_spot_1 = "Actividad de precios";
$exchanges_li_spot_2 = "Profundidad de liquidez";
$exchanges_li_spot_3 = "Estructura del libro de órdenes";
$exchanges_li_spot_4 = "Volumen de trading";
$exchanges_li_spot_5 = "Comportamiento del diferencial de compra-venta";
$exchanges_li_spot_6 = "Condiciones de desequilibrio del mercado";
$exchanges_h2_deriv = "Mercados de derivados";
$exchanges_p_deriv_1 = "Los derivados cripto desempeñan un papel cada vez más importante dentro del ecosistema más amplio de activos digitales.";
$exchanges_p_deriv_2 = "Los futuros, los contratos perpetuos, las opciones y la actividad de trading apalancado pueden influir en el sentimiento del mercado, las condiciones de volatilidad y la dinámica direccional.";
$exchanges_p_deriv_3 = "La infraestructura analítica puede evaluar información relacionada con derivados al valorar condiciones de mercado más amplias.";
$exchanges_h2_liquidity = "Análisis de liquidez";
$exchanges_p_liq_1 = "La liquidez sigue siendo uno de los factores más importantes que afectan a la estabilidad del mercado y la calidad de ejecución.";
$exchanges_p_liq_2 = "$site_name puede analizar las condiciones de liquidez en múltiples plataformas de trading para identificar:";
$exchanges_li_liq_1 = "Concentración de liquidez";
$exchanges_li_liq_2 = "Retiradas repentinas de liquidez";
$exchanges_li_liq_3 = "Presión del libro de órdenes";
$exchanges_li_liq_4 = "Eventos de desequilibrio del mercado";
$exchanges_li_liq_5 = "Comportamiento de trading anómalo";
$exchanges_h2_availability = "Disponibilidad de exchanges";
$exchanges_p_avail_1 = "La disponibilidad de los exchanges puede variar según la ubicación geográfica, la jurisdicción, la elegibilidad de la cuenta, los requisitos regulatorios y las limitaciones técnicas.";
$exchanges_p_avail_2 = "Algunos exchanges o servicios pueden no estar disponibles para todos los usuarios y pueden imponer sus propias restricciones, requisitos de verificación, tarifas y políticas operativas.";
$exchanges_h2_third = "Plataformas de terceros";
$exchanges_p_third_1 = "Cualquier referencia a exchanges, plataformas de liquidez, brókeres, custodios o proveedores de mercado se realiza únicamente con fines informativos.";
$exchanges_p_third_2 = "$site_name no posee, opera, controla ni garantiza los servicios de los exchanges de terceros.";
$exchanges_p_third_3 = "Los usuarios siguen siendo responsables de evaluar cualquier exchange, plataforma de trading o servicio de activos digitales antes de utilizarlo.";
$exchanges_h2_monitoring = "Monitorización continua del mercado";
$exchanges_p_mon_1 = "Los mercados de criptomonedas operan de forma continua, a menudo las veinticuatro horas del día, los siete días de la semana.";
$exchanges_p_mon_2 = "A medida que evoluciona la estructura del mercado, surgen nuevos exchanges, la liquidez se desplaza y la actividad de trading cambia.";
$exchanges_p_mon_3 = "$site_name se esfuerza continuamente por mantenerse informada de las condiciones cambiantes del mercado mediante una amplia cobertura analítica del ecosistema de activos digitales.";

// ==========================================
// RISK WARNING PAGE
// ==========================================
$page_title_risk_warning = "Advertencia de Riesgo | $site_name";
$page_description_risk_warning = "Comprende los riesgos del trading cripto automatizado con $site_name, incluyendo la volatilidad del mercado, el riesgo de ejecución y las consideraciones regulatorias.";
$risk_warning_breadcrumb_name = "Advertencia de Riesgo";
$risk_warning_title = "Advertencia de Riesgo";
$risk_warning_intro = "Comprender los riesgos es el primer paso hacia un trading con confianza.";

$risk_warning_ai_heading = "Cómo ayuda nuestro sistema de IA a gestionar el riesgo:";
$risk_warning_ai_1 = "<strong>Eficiencia algorítmica y trading sin emociones:</strong> Algoritmos avanzados analizan las señales del mercado para ejecutar operaciones de forma objetiva en los momentos óptimos.";
$risk_warning_ai_2 = "<strong>Estrategias basadas en datos:</strong> Las estrategias se basan en patrones de mercado verificados y análisis en tiempo real, en lugar de conjeturas.";
$risk_warning_ai_3 = "<strong>Ajustes flexibles y control total:</strong> Modifica tus parámetros de riesgo en cualquier momento. Consulta todos tus saldos y operaciones de forma transparente en tu panel, sin comisiones ocultas y con retiradas sin restricciones.";

$risk_warning_disclaimer = "<strong>Aviso legal:</strong> El trading siempre conlleva riesgo. Los sistemas automatizados (incluida la IA) no garantizan beneficios, pueden fallar debido a errores de software o eventos de mercado inesperados, y requieren la supervisión del usuario. El rendimiento pasado no es indicativo de resultados futuros. Esta plataforma tiene fines meramente informativos y de marketing, y no ofrece asesoramiento financiero.";

$risk_warning_s1_heading = "1. Riesgos generales y del mercado de criptomonedas";
$risk_warning_s1_intro = "Las criptomonedas son activos especulativos muy volátiles que operan las 24 horas del día, los 7 días de la semana, con una supervisión regulatoria mínima en la mayoría de las jurisdicciones.";
$risk_warning_s1_1 = "Los valores pueden fluctuar drásticamente en periodos cortos de tiempo, lo que puede provocar una pérdida total del capital invertido.";
$risk_warning_s1_2 = "Los valores de mercado pueden verse muy afectados por actualizaciones regulatorias, avances técnicos, brechas de seguridad o eventos macroeconómicos más amplios.";
$risk_warning_s1_3 = "Algunos activos pueden perder todo su valor por completo. Invierte solo los fondos que puedas permitirte perder.";

$risk_warning_s2_heading = "2. Riesgos de ejecución, liquidez y apalancamiento";
$risk_warning_s2_1 = "<strong>Volatilidad del mercado y liquidez:</strong> Los movimientos de precio extremos (10-20 %+ diario) o la baja liquidez (especialmente en criptomonedas más pequeñas) pueden provocar retrasos, interrupciones de la plataforma y un slippage de ejecución considerable. Las órdenes stop-loss no pueden garantizar límites de pérdida en condiciones extremas.";
$risk_warning_s2_2 = "<strong>Riesgos de apalancamiento y margen:</strong> Los productos apalancados amplifican tanto las ganancias como las pérdidas, lo que significa que puedes perder más que tu depósito inicial. Aproximadamente entre el 70 % y el 80 % de las cuentas de inversores minoristas pierden dinero al operar con productos apalancados.";

$risk_warning_s3_heading = "3. Riesgos técnicos, de ciberseguridad y de terceros";
$risk_warning_s3_1 = "<strong>Factores técnicos:</strong> El trading en línea conlleva de forma inherente riesgos derivados de desconexiones a internet, errores de hardware o software y la indisponibilidad del servicio.";
$risk_warning_s3_2 = "<strong>Ciberseguridad:</strong> Las cuentas de criptomonedas son objetivos frecuentes de phishing, malware y ataques informáticos. Las transacciones son irreversibles; el compromiso de tus credenciales puede provocar una pérdida permanente.";
$risk_warning_s3_3 = "<strong>Plataformas de terceros:</strong> Este sitio web puede conectar a los usuarios con plataformas de terceros. No controlamos, respaldamos ni garantizamos su seguridad, operaciones o solvencia. Realiza siempre tu propia diligencia debida antes de depositar fondos en plataformas externas.";

$risk_warning_s4_heading = "4. Disposiciones regulatorias, fiscales y finales";
$risk_warning_s4_1 = "<strong>Cumplimiento legal e impuestos:</strong> Los marcos regulatorios varían ampliamente y cambian rápidamente. Los usuarios son los únicos responsables de garantizar que su actividad de trading cumpla con las leyes locales y de cumplir con sus propias obligaciones fiscales.";
$risk_warning_s4_2 = "<strong>Sin garantías de beneficio:</strong> No existe un trading cripto «seguro» o sin riesgo. Cualquier cifra de rendimiento o ejemplo de rentabilidad es puramente hipotético.";
$risk_warning_s4_3 = "<strong>Idoneidad:</strong> Si no comprendes plenamente los riesgos, dependes de fondos esenciales u operas con dinero prestado, el trading cripto no es adecuado para ti. Consulta a un asesor financiero independiente autorizado en caso de duda.";

$risk_warning_contact = "<strong>Contacto:</strong> Para cualquier pregunta sobre esta declaración o para enviar una consulta, ponte en contacto con nuestro equipo oficial de atención al cliente a través del formulario de contacto de nuestro sitio web.";
$footer_risk_warning = "Advertencia de Riesgo";

$lang_loaded = true;

?>
