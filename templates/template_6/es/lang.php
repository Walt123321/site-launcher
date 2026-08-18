<?php
require __DIR__ . '/../lang.php';
$site_lang = 'es-ES';
$form_language = 'es'; // matches this page's own language, not the offer's global default

// ============================================================
// SPANISH (ES) TRANSLATION OVERRIDES
// Identity/config vars ($site_name, $site_url, $site_domain, $app_price,
// $app_currency, $rating_value, $rating_count, $review_count, $country_name,
// $support_email, $institutional_email) are intentionally NOT overridden —
// they stay exactly as inherited from the root lang.php.
// ============================================================


// META TITLE / DESCRIPTION (per page)
$home_meta_title = "$site_name — Sitio web oficial | Plataforma de trading";
$home_meta_description = "Accede a los mercados globales con $site_name ⭐ Análisis de IA institucional ⚡, ejecución de baja latencia ⚡ e interfaces despejadas, diseñadas para el crecimiento financiero moderno.";


$quiz_consultant_name = 'Lisa';
$quiz_consultant_role = 'Asistente de incorporación';

$quiz_text_welcome   = "¡Hola! Soy $quiz_consultant_name, tu asistente personal de incorporación en $site_name. ¡Buenas noticias! Tu acceso ha sido preaprobado oficialmente. Permítenos configurar ahora tu perfil profesional.";
$quiz_text_q1 = "Para garantizar el pleno cumplimiento normativo y legal, confirma tu país de residencia actual: $country_name";
$quiz_text_a1_yes    = "Sí, esta es mi residencia actual";
$quiz_text_a1_no     = "No";

$quiz_text_q2 = "Perfecto. Selecciona el rango de edad adecuado para encontrar los instrumentos financieros más convenientes:";

$quiz_text_q3        = "¿Dispones de una cuenta bancaria activa o de una tarjeta de crédito para recibir pagos de dividendos diarios?";
$quiz_text_a3_yes    = "Sí, tengo una cuenta activa disponible";
$quiz_text_a3_no     = "Aún no disponible";

$quiz_text_q4        = "Indica tu principal fuente de ingresos. (Este parámetro nos ayuda a personalizar los ajustes de gestión de riesgos del sistema).";
$quiz_text_a4_1      = "Empleo por cuenta ajena / Autónomo";
$quiz_text_a4_2      = "Ingresos pasivos / Ahorros personales";
$quiz_text_a4_3      = "Otras fuentes";

$quiz_text_q5 = "¡Genial! El último paso es una breve verificación telefónica por parte de nuestro gestor para confirmar tu registro. Las llamadas se realizan de 11:00 a 20:00. ¿Podrás atender la llamada?";
$quiz_text_a5_yes    = "Sí, ese horario me viene bien para la llamada";
$quiz_text_a5_no     = "Por favor, llámame de inmediato";

$quiz_text_loader    = "Analizando las opciones seleccionadas e inicializando los parámetros de configuración segura de tu cuenta…";
$quiz_text_final_ttl = "¡Cuenta autorizada correctamente! 🎉 Tu espacio de trabajo digital seguro está totalmente configurado. Completa a continuación los últimos pasos de verificación para garantizar tus pagos diarios:";

$quiz_placeholder_fname = "Nombre";
$quiz_placeholder_lname = "Apellidos";
$quiz_placeholder_email = "Correo electrónico";
$quiz_placeholder_phone = "Número de teléfono";
$quiz_btn_submit = "Activar trading";
$quiz_text_typing       = "está escribiendo…";
$quiz_text_processing   = "Procesando solicitud…";


$header_nav_aria_label = "Navegación principal";

$nav_platform = "Plataforma";
$nav_features = "Funciones";
$nav_markets = "Mercados";
$nav_process = "Proceso";
$nav_security = "Seguridad";
$nav_reviews = "Opiniones";
$nav_faq = "Preguntas frecuentes";
$nav_about = "Sobre nosotros";
$nav_contact = "Contacto";

$theme_toggle_aria_label = "Cambiar a tema oscuro";
$theme_toggle_text = "Oscuro";
$theme_toggle_text_light = "Claro";

$theme_toggle_dark_aria_label = "Cambiar a tema oscuro";
$theme_toggle_light_aria_label = "Cambiar a tema claro";

$header_cta_button = "Empezar a operar";
$burger_menu_aria_label = "Menú";


// HERO

$hero_heading_before = "$site_name";
$hero_heading_accent = "Plataforma";

$hero_description = "Una forma más inteligente y clara de acceder a los mercados globales";

$hero_primary_button = "Empezar a operar";
$hero_secondary_button = "Explorar funciones";

$hero_badge_ssl = "Protocolo protegido con SSL";
$hero_badge_guided = "Recorrido guiado para principiantes";


// SIGNUP FORM

$signup_heading = "Crea tu cuenta";
$signup_subtitle = "Tarda menos de 3 minutos. Sin comisiones de apertura.";

$form_first_name_label = "Nombre";
$form_first_name_placeholder = "Juan";

$form_last_name_label = "Apellidos";
$form_last_name_placeholder = "Pérez";

$form_email_label = "Correo electrónico";
$form_email_placeholder = "juan@ejemplo.com";

$form_phone_label = "Número de teléfono";
$form_phone_placeholder = "612 345 678";

$form_submit_button = "Crear cuenta gratuita";

$form_legal_before = "Al enviar tus datos, aceptas nuestros ";
$form_terms_text = "Términos y condiciones";


// STATS BAR

$stats_value_assets = "80+";
$stats_label_assets = "Activos negociables";

$stats_value_setup = "Rápida";
$stats_label_setup = "Apertura de cuenta";

$stats_value_support = "24/7";
$stats_label_support = "Asistencia";

$stats_value_security = "Segura";
$stats_label_security = "Gestión de datos";

// PLATFORM SECTION

$platform_section_label = "Espacio de trabajo inteligente";

$platform_title_before = "Gráficos profesionales de $site_name.";
$platform_title_accent = "Pensados para decisiones sencillas.";

$platform_subtitle = "Consulta precios en tiempo real y ejecuta operaciones desde una interfaz clara, diseñada para reducir la carga cognitiva y el trading emocional.";

$platform_check_1 = "Gráficos en tiempo real potenciados por IA";
$platform_check_2 = "Sistema de ejecución de mercado con un solo toque";

$platform_cta_button = "Ver funciones de la plataforma";


// MOCKUP / DASHBOARD

$mockup_overlay_headline = "⚡ Ejecución instantánea disponible";
$mockup_overlay_text = "Para enviar esta orden de inmediato y capturar el precio objetivo actual, activa el estado seguro de tu terminal $site_name.";
$mockup_overlay_button = "Crear cuenta segura";

$mockup_dashboard_title = "Panel BTC/USD";

$mockup_today = "Hoy";
$mockup_sell_button = "Vender";
$mockup_buy_button = "Comprar";
$mockup_order_pending_text = "Orden pendiente de asignación";


// FEATURES SECTION

$features_section_label = "Capacidades de la plataforma";

$features_title = "Todo lo que necesitas para operar con la confianza de $site_name";
$features_subtitle = "Seguridad, velocidad e inteligencia de mercado neuronal combinadas en un diseño claro";

$feature_1_title = "Seguridad de nivel bancario";
$feature_1_text = "Cifrado SSL, procesamiento seguro de datos y una arquitectura de cuenta totalmente protegida.";

$feature_2_title = "Análisis de mercado con IA";
$feature_2_text = "Cálculos de aprendizaje automático en tiempo real, centrados en detectar variaciones bruscas del mercado.";

$feature_3_title = "Flujos de baja latencia";
$feature_3_text = "Infraestructura ágil enfocada en el procesamiento rápido de órdenes durante periodos de alto volumen.";


// MARKETS

$markets_section_label = "Activos en tiempo real";

$markets_title = "Panel unificado de $site_name para métricas globales";

$markets_subtitle = "Sigue los cambios de los activos en tiempo real, monitoriza el impulso del mercado y utiliza el análisis automatizado de IA para detectar patrones rápidamente.";

$markets_ai_box_title = "💡 Eficiencia operativa:";

$markets_ai_box_text = "El trading tradicional requiere hacer seguimiento manual de cientos de indicadores. Los algoritmos de $site_name procesan miles de variaciones de precio cada milisegundo, generando modelos matemáticos claros que te permiten anticipar los movimientos del mercado.";

$markets_cta_button = "Acceder a los mercados";

$markets_table_asset = "Activo";
$markets_table_price = "Precio";
$markets_table_change = "Variación 24h";



// ONBOARDING

$onboarding_section_label = "Proceso de incorporación";

$onboarding_title = "$site_name hace que empezar sea sencillo y sin estrés";

$onboarding_subtitle = "¿Sin experiencia previa en cripto? Nuestra guía automatizada te acompaña en cada paso del camino.";

$onboarding_step_1_title = "Registro seguro";
$onboarding_step_1_text = "Introduce tus datos de contacto básicos a través de nuestro sistema de formulario altamente cifrado.";

$onboarding_step_2_title = "Configuración guiada por IA";
$onboarding_step_2_text = "La plataforma te presenta opciones de interfaz adaptadas a tus preferencias personales.";

$onboarding_step_3_title = "Financiación segura";
$onboarding_step_3_text = "Activa tu margen operativo de trading a través de métodos de pago estándar y altamente fiables.";

$onboarding_step_4_title = "Aprovecha las señales";
$onboarding_step_4_text = "Empieza a interactuar con los mercados globales utilizando flujos de datos neuronales en directo.";



// MOBILE APP

$mobile_app_image_alt = "Aplicación móvil de trading de $site_name en un smartphone";

$mobile_app_section_label = "Acceso móvil";

$mobile_app_title = "Tu cartera, directamente en tu bolsillo";

$mobile_app_subtitle = "El motor completo de $site_name, comprimido en una app móvil nativa y rápida. Sigue tus activos, ejecuta operaciones y sigue las señales de IA desde cualquier lugar.";

$mobile_app_check_1 = "Alertas push para movimientos de precio críticos";
$mobile_app_check_2 = "Inicio de sesión biométrico con almacenamiento local cifrado";
$mobile_app_check_3 = "Suite completa de gráficos optimizada para uso táctil";

$mobile_app_cta_button = "Obtener la app";


// SECURITY / COMPARISON

$security_section_label = "Marco equilibrado";

$security_title = "Parámetros operativos transparentes";

$security_subtitle = "Creemos en la honestidad absoluta. Esto es lo que distingue a nuestro sistema, junto con nuestros límites operativos.";

$security_our_title = "Principales ventajas";

$security_our_item_1 = "Panel minimalista diseñado para una velocidad de ejecución de nivel institucional.";
$security_our_item_2 = "Procesamiento analítico neuronal de datos activo las 24 horas, los 7 días de la semana, en todos los activos.";
$security_our_item_3 = "Sin márgenes de transacción ocultos ni comisiones de gestión inesperadas.";
$security_our_item_4 = "Arquitectura de cuenta protegida directamente mediante criptografía SSL, que salvaguarda tu espacio personal.";
$security_our_item_5 = "Incorporación guiada que se activa en minutos, no en días.";

$security_other_badge = "Otras plataformas";

$security_other_title = "Limitaciones habituales del sector";

$security_other_item_1 = "Paneles saturados y cargados de publicidad que ralentizan la toma de decisiones.";
$security_other_item_2 = "Informes estáticos de fin de día en lugar de análisis continuos en vivo.";
$security_other_item_3 = "Diferenciales ocultos, costes de retiro y estructuras de comisiones poco claras.";
$security_other_item_4 = "Infraestructura compartida y obsoleta, con una protección de datos poco consistente.";
$security_other_item_5 = "Verificación de cuentas lenta y llena de trámites, que puede tardar días.";

$security_disclaimer = "La comparación refleja patrones habituales observados en el sector del trading minorista y se ofrece con fines ilustrativos; las ofertas de cada competidor pueden variar.";


// CAPABILITIES TABLE

$capabilities_title = "Las principales capacidades de la plataforma, de un vistazo";
$capabilities_subtitle = "Revisa los parámetros funcionales integrados en el acceso a tu cuenta.";

$capability_table_col_1 = "Parámetro de capacidad";
$capability_table_col_2 = "Detalles funcionales";
$capability_table_col_3 = "Incluido";

$capability_check_aria = "Incluido";

$capability_1_title = "Marco de trading con IA";
$capability_1_text = "Procesamiento algorítmico que proporciona cálculos macro estructurales de forma dinámica.";

$capability_2_title = "Flujos agregados";
$capability_2_text = "Gráficos dinámicos consolidados en tiempo real para índices y tokens globales modernos.";

$capability_3_title = "Estabilidad multidispositivo";
$capability_3_text = "Representación responsiva totalmente operativa en móviles, ordenadores y tabletas, sin contratiempos.";

$capability_4_title = "Cobertura multiactivo";
$capability_4_text = "Acceso unificado a cripto, forex e índices bursátiles desde una sola cuenta.";

$capability_5_title = "Alertas de riesgo automatizadas";
$capability_5_text = "Notificaciones configurables que señalan una volatilidad inusual antes de que afecte a tus posiciones.";

$capability_6_title = "Bóveda de datos cifrada";
$capability_6_text = "Tus datos personales y de cuenta quedan aislados tras controles de acceso criptográficos por capas.";

$capability_7_title = "Soporte humano 24/7";
$capability_7_text = "Operadores de soporte técnico en vivo, disponibles para responder de inmediato a tus dudas de configuración.";


// PAYMENTS

$payments_section_label = "Depósitos";

$payments_title = "Recarga tu cuenta con métodos en los que ya confías";

$payments_subtitle = "Tarjetas, monederos electrónicos y transferencias bancarias, todo protegido con cifrado SSL de 256 bits.";

$payments_aria_label = "Métodos de depósito y financiación aceptados";

$payment_method_bank_transfer = "Transferencia bancaria";
$payment_method_ssl = "Protegido con SSL";

// PARTNERS

$partners_section_label = "Infraestructura fiable";
$partners_title = "Construida con socios de referencia en el sector";
$partners_aria_label = "Socios de infraestructura y pago de $site_name";


// REVIEWS

$reviews_section_label = "Opiniones de usuarios";
$reviews_title = "Lo que dicen los traders sobre $site_name";
$reviews_subtitle = "Opiniones sinceras de nuestra comunidad global, en todos los mercados.";

$review_1_text = "Como principiante, la cripto me daba respeto. $site_name hizo que el panel fuera tan intuitivo que me sentí seguro en cuestión de minutos. Las perspectivas de la IA son claras y directas.";
$review_1_role = "Inversor minorista verificado";

$review_2_text = "Solo la interfaz, tan despejada, ya me ahorra horas. Que la IA filtre el ruido del mercado y deje solo las tendencias esenciales cambia por completo cómo veo mis posiciones cada día.";
$review_2_role = "Analista de activos cripto";

$review_3_text = "La ejecución de baja latencia, combinada con sistemas de alerta inteligentes, me permite ajustar objetivos sobre la marcha sin tener que ejecutar varios programas a la vez.";
$review_3_role = "Gestor de cartera privado";

$review_4_text = "El soporte respondió en menos de dos minutos mientras configuraba mis parámetros de verificación. Un servicio de nivel institucional excepcional.";
$review_4_role = "Trader algorítmico";

$review_1_avatar_alt = "Michael Turner, usuario de $site_name";
$review_2_avatar_alt = "Anna Mitchell, usuaria de $site_name";
$review_3_avatar_alt = "David Kovacs, usuario de $site_name";
$review_4_avatar_alt = "Elena Laurent, usuaria de $site_name";
$hero_growth_visual_alt = "Gráfico de crecimiento del trading con IA de $site_name";
$mobile_trading_visual_alt = "Interfaz de la app móvil de trading de $site_name";
$cta_security_visual_alt = "Mecanismos de seguridad con IA que protegen las cuentas de $site_name";

// SEO CONTENT

$seo_content_title = "$site_name: potenciando a los traders con arquitectura de IA institucional";

$seo_content_intro = "La interacción moderna con los activos exige una claridad absoluta. Cuando los entornos de datos se saturan con banners promocionales excesivos o capas de interfaz pesadas, el rendimiento del usuario se resiente. $site_name resuelve esta complejidad sistémica desplegando un entorno base elegante y receptivo, optimizado para la ejecución estratégica a largo plazo. Cada módulo de la plataforma, desde la incorporación hasta la ejecución en vivo, se construye en torno al mismo principio: eliminar el ruido para que los datos subyacentes hablen por sí mismos, sin sacrificar la profundidad que esperan los participantes con más experiencia.";

$seo_block_1_title_before = "Activos cripto";
$seo_block_1_title_accent = "avanzados para trading";
$seo_block_1_text_1 = "La liquidez de blockchain cambia con rapidez, lo que hace que una infraestructura de baja latencia sea fundamental. $site_name conecta nodos personalizados directamente con los principales mercados de activos digitales, ofreciendo a los usuarios información de precios en tiempo real. Nuestras métricas visuales claras convierten estructuras caóticas entre cadenas en canales de datos organizados y legibles, permitiendo a los participantes del mercado evaluar los movimientos de los principales pares con fluidez.";
$seo_block_1_text_2 = "Más allá de los datos de precio en bruto, la plataforma contextualiza las variaciones de volumen y la profundidad de liquidez, de modo que los picos repentinos sean más fáciles de interpretar en lugar de percibirse como simple ruido reactivo. Esta coherencia es especialmente valiosa en sesiones volátiles, cuando las herramientas fragmentadas de otros proveedores suelen ralentizar la toma de decisiones justo en el momento en que más se necesita claridad.";

$seo_block_2_title_before = "Análisis de mercado neuronal";
$seo_block_2_title_accent = "en profundidad";
$seo_block_2_text_1 = "Algoritmos automatizados analizan los datos de mercado entrantes para calcular variaciones estructurales en los índices internacionales de forex y materias primas. $site_name destila cálculos complejos en tendencias de datos claras. Estas perspectivas automatizadas actúan como asistentes inteligentes, permitiendo a los usuarios construir estrategias de investigación precisas sin sobrecarga cognitiva ni fatiga emocional.";
$seo_block_2_text_2 = "Como los modelos se ejecutan de forma continua en lugar de a un horario fijo, los cambios de impulso se muestran en el momento en que ocurren, en vez de aparecer en un resumen retrasado. El resultado es una capa de análisis que apoya el juicio independiente en lugar de sustituirlo, dejando la decisión final firmemente en tus manos.";

$seo_block_3_title_before = "Proceso de apertura de cuenta";
$seo_block_3_title_accent = "sin fricciones";
$seo_block_3_text_1 = "El cumplimiento normativo no tiene por qué ser complicado. Nuestro proceso de registro estructurado protege los datos personales de los usuarios mediante procesos de verificación seguros. Las indicaciones de incorporación, paso a paso, se adaptan dinámicamente a pantallas móviles y de escritorio, para una configuración fluida diseñada para tardar menos de tres minutos desde el inicio hasta el acceso al terminal.";
$seo_block_3_text_2 = "Cada campo del proceso explica por qué se solicita, de modo que los usuarios que llegan por primera vez nunca se quedan sin saber para qué sirve un paso de verificación. Una vez enviada la solicitud, las comprobaciones de identidad cifradas se ejecutan en segundo plano mientras el resto del panel sigue estando totalmente disponible.";

$seo_block_4_title_before = "Controles de riesgo";
$seo_block_4_title_accent = "de nivel institucional";
$seo_block_4_text_1 = "El dimensionamiento de posiciones, los límites de exposición y las alertas de volatilidad automatizadas se basan directamente en herramientas históricamente reservadas a las mesas profesionales. $site_name empaqueta estos controles en una interfaz sencilla, activable con un simple interruptor, para que los participantes más nuevos hereden la misma disciplina en la que confían a diario los traders experimentados.";
$seo_block_4_text_2 = "Las alertas se pueden configurar por activo, de modo que la atención solo se dirige a los mercados que realmente lo justifican. Este enfoque específico ayuda a evitar la fatiga por exceso de alertas, que a menudo lleva a las personas a ignorar por completo las notificaciones en plataformas menos selectivas.";


// FAQ

$faq_section_label = "Centro de ayuda";
$faq_title = "Preguntas frecuentes";
$faq_subtitle = "Encuentra respuestas inmediatas sobre el registro y los parámetros de acceso a la plataforma.";

$faq_1_question = "¿Cómo puedo empezar con $site_name?";
$faq_1_answer = "Simplemente rellena el formulario de registro anterior, sigue nuestro proceso de incorporación seguro paso a paso, y activa los parámetros de tu cuenta a través de nuestro sistema de procesamiento de pagos estructurado.";

$faq_2_question = "¿Necesito experiencia avanzada en cripto?";
$faq_2_answer = "No. $site_name cuenta con un modo de panel dedicado para principiantes, explicaciones analíticas automatizadas y diseños de trabajo simplificados para ayudar a los nuevos traders a operar con seguridad.";

$faq_3_question = "¿Cuál es el requisito mínimo para operar?";
$faq_3_answer = "El parámetro de activación estándar es de $app_price $app_currency. Esto sirve como asignación de capital operativo de trading y puede gestionarse por completo bajo tu control manual.";

$faq_4_question = "¿Existen comisiones ocultas en la plataforma?";
$faq_4_answer = "No. $site_name opera con una transparencia absoluta en las comisiones. No aplicamos márgenes de acceso inesperados ni cálculos de retiro ocultos dentro de tu espacio de trabajo.";

$faq_5_question = "¿Cómo funciona el componente de inteligencia artificial?";
$faq_5_answer = "Nuestros sistemas neuronales evalúan indicadores estadísticos de volatilidad en profundidad en múltiples capas de mercado, convirtiendo datos en bruto en líneas de tendencia simplificadas para facilitar su evaluación.";

$faq_6_question = "¿Están mis datos personales totalmente protegidos?";
$faq_6_answer = "Sí. Cada conexión de cuenta está protegida mediante cifrado SSL estándar seguro, junto con protocolos criptográficos muy robustos, para aislar por completo tus datos privados.";


// FINAL CTA

$final_cta_title = "¿Listo para experimentar la claridad de $site_name?";
$final_cta_subtitle = "Únete a un sistema moderno optimizado para operaciones ágiles, protección de datos y acceso transparente.";


// FOOTER

$footer_brand_description = "Un entorno analítico moderno que ofrece un seguimiento claro de tus datos en los mercados globales.";

$footer_platform_title = "Plataforma";
$footer_platform_interface = "Interfaz";
$footer_platform_markets = "Resumen de mercados";

$footer_pages_title = "Páginas";

$footer_page_about = "Sobre nosotros";
$footer_page_contact = "Contacto";
$footer_page_signin = "Iniciar sesión";

$footer_legal_title = "Legal";

$footer_terms = "Términos de uso";
$footer_privacy = "Política de privacidad";

$footer_disclaimer_title = "⚠️ Advertencia de riesgo:";

$footer_disclaimer_text = "Operar con activos cripto digitales e instrumentos globales conlleva un riesgo considerable de volatilidad del mercado. Mantén el control total de los parámetros de tu estrategia. Las métricas automatizadas de $site_name funcionan estrictamente como apoyo analítico.";

$footer_copyright = "Todos los derechos reservados.";



// ============================================================
// ADDITIONAL PAGES — About, Contact, FAQ, Sign, Conditions, Privacy
// ============================================================

// --- About Us ---
$about_meta_title = "Sobre nosotros | $site_name";
$about_meta_description = "Conoce $site_name — nuestra misión, nuestra tecnología de trading asistida por IA y cómo ayudamos a los traders a acceder a los mercados globales de forma responsable.";
$about_breadcrumb_name = "Sobre nosotros";
$about_h1 = "Sobre $site_name";
$about_p1 = "$site_name se creó para poner al alcance de todos herramientas de trading estructuradas y asistidas por IA — desde quienes se inician hasta profesionales experimentados.";
$about_p2 = "Creemos que el acceso a los mercados globales debe ser transparente, estar bien explicado y estar libre de complejidad técnica innecesaria.";
$about_h2_mission = "Nuestra misión";
$about_p_mission_1 = "Nuestra misión es ofrecer a los traders herramientas claras y estructuradas para desenvolverse en los mercados de cripto, forex y acciones, sin exageraciones y sin ocultar los riesgos que implican.";
$about_p_mission_2 = "Cada función de $site_name está pensada en torno a la claridad: qué hace la herramienta, por qué lo hace y qué puedes esperar.";
$about_h2_ai = "Nuestro enfoque asistido por IA";
$about_p_ai_1 = "$site_name combina datos de mercado en tiempo real con análisis asistido por IA para ayudarte a entender las condiciones del mercado más rápido.";
$about_p_ai_2 = "Nuestros sistemas están diseñados como herramientas de apoyo a la decisión, no como garantías de beneficio. El trading siempre conlleva riesgo.";
$about_li_1 = "Agregación de datos de mercado en tiempo real";
$about_li_2 = "Análisis de mercado asistido por IA";
$about_li_3 = "Divulgación transparente de riesgos";
$about_li_4 = "Incorporación guiada para nuevos traders";
$about_li_5 = "Acceso multiactivo: cripto, forex, acciones";
$about_li_6 = "Infraestructura de seguridad de nivel bancario";
$about_li_7 = "Atención al cliente 24/7";
$about_li_8 = "Actualizaciones periódicas de plataforma y seguridad";
$about_h2_security = "La seguridad, lo primero";
$about_p_security_1 = "Utilizamos cifrado conforme a los estándares del sector y socios de infraestructura seguros para proteger tus datos y tu cuenta.";
$about_p_security_2 = "La seguridad no es un añadido de última hora: está integrada en cada parte de la plataforma.";
$about_h2_global = "Diseñada para los mercados globales";
$about_p_global_1 = "$site_name está diseñada para dar soporte a traders de muchas regiones, con compatibilidad de idioma y moneda locales.";
$about_p_global_2 = "Nuestros socios de infraestructura nos ayudan a mantener un acceso fiable, sin importar desde dónde operes.";
$about_h2_why = "Por qué elegir $site_name";
$about_why_li_1 = "Incorporación clara y estructurada";
$about_why_li_2 = "Asistido por IA, no garantizado por IA: expectativas honestas";
$about_why_li_3 = "Información transparente sobre comisiones y precios";
$about_why_li_4 = "Atención al cliente receptiva";
$about_why_li_5 = "Socios de pago regulados";
$about_why_li_6 = "Mejoras continuas de la plataforma";
$about_why_li_7 = "Un enfoque centrado en la formación del trader";
$about_h2_forward = "Mirando hacia adelante";
$about_p_forward_1 = "Mejoramos continuamente $site_name a partir de los comentarios de los traders y la evolución de las condiciones del mercado.";
$about_p_forward_2 = "Gracias por considerar $site_name como parte de tu recorrido en el trading.";

// --- Contact ---
$contact_meta_title = "Contacto | $site_name";
$contact_meta_description = "Ponte en contacto con el equipo de $site_name — soporte, preguntas sobre tu cuenta y consultas generales.";
$contact_breadcrumb_name = "Contacto";
$contact_h1 = "Contacto";
$contact_intro_1 = "¿Tienes alguna pregunta sobre tu cuenta, una función, o sobre cómo funciona $site_name? Estamos aquí para ayudarte.";
$contact_intro_2 = "Rellena el formulario que aparece a continuación o contáctanos directamente utilizando los datos que figuran más abajo en esta página.";
$contact_h2_help = "En qué podemos ayudarte";
$contact_li_1 = "Apertura y verificación de cuenta";
$contact_li_2 = "Funciones de la plataforma y cómo funcionan";
$contact_li_3 = "Preguntas sobre depósitos y retiros";
$contact_li_4 = "Problemas técnicos";
$contact_li_5 = "Comentarios generales y sugerencias";
$contact_li_6 = "Consultas de colaboración y prensa";
$contact_h2_send = "Envíanos un mensaje";
$contact_p_send = "Introduce tus datos a continuación y nuestro equipo se pondrá en contacto contigo lo antes posible.";
$contact_form_fname = "Nombre";
$contact_form_lname = "Apellidos";
$contact_form_email = "Correo electrónico";
$contact_form_submit = "Enviar mensaje";
$contact_h2_info = "Otras formas de contactarnos";
$contact_support_label = "Soporte:";
$contact_institutional_label = "Consultas institucionales:";
$contact_disclaimer = "Nos esforzamos por responder a todas las consultas en un plazo de 24 a 48 horas.";

// --- FAQ page ---
$faq_page_meta_title = "Preguntas frecuentes | $site_name";
$faq_page_meta_description = "Preguntas frecuentes sobre $site_name — cuentas, depósitos, seguridad y cómo funcionan nuestras herramientas de trading asistidas por IA.";
$faq_page_breadcrumb_name = "Preguntas frecuentes";
$faq_page_h1 = "Preguntas frecuentes";
$faq_page_subtitle = "Respuestas a las preguntas que más nos hacen los traders. ¿No encuentras lo que buscas? Contacta con nuestro equipo de soporte.";

// --- Sign in / Register page ---
$sign_meta_title = "Crea tu cuenta | $site_name";
$sign_meta_description = "Crea tu cuenta de $site_name y comienza con un acceso estructurado y asistido por IA a los mercados globales.";
$sign_breadcrumb_name = "Registro";
$sign_h1 = "Crea tu cuenta";
$sign_subtitle = "Tarda menos de 3 minutos. Sin comisiones de apertura.";

// --- Terms & Conditions ---
$conditions_meta_title = "Términos y condiciones | $site_name";
$conditions_meta_description = "Lee los Términos y condiciones que rigen el uso de $site_name.";
$conditions_breadcrumb_name = "Términos y condiciones";
$conditions_h1 = "Términos y condiciones";
$conditions_last_update = "Última actualización: " . date('F Y');
$conditions_intro = "Estos Términos y condiciones (los «Términos») rigen tu acceso y uso de $site_name (la «Plataforma»). Al crear una cuenta o utilizar la Plataforma, aceptas estos Términos.";
$conditions_h2_eligibility = "Elegibilidad";
$conditions_p_eligibility = "Debes tener al menos 18 años y capacidad legal para celebrar contratos vinculantes en tu jurisdicción para utilizar la Plataforma.";
$conditions_h2_account = "Tu cuenta";
$conditions_p_account = "Eres responsable de mantener la confidencialidad de tus credenciales de cuenta y de toda actividad que se produzca bajo tu cuenta.";
$conditions_h2_risk = "Riesgo del trading";
$conditions_p_risk = "Operar con criptomonedas, forex y otros instrumentos financieros conlleva un riesgo considerable, incluido el riesgo de perder la totalidad de tu inversión. La rentabilidad pasada no es indicativa de resultados futuros. Nada en esta Plataforma constituye asesoramiento financiero.";
$conditions_h2_conduct = "Uso aceptable";
$conditions_p_conduct = "Aceptas no hacer un uso indebido de la Plataforma, no intentar acceder sin autorización y no utilizar la Plataforma con fines ilícitos.";
$conditions_h2_liability = "Limitación de responsabilidad";
$conditions_p_liability = "En la máxima medida permitida por la ley, $site_name no será responsable de ningún daño indirecto, incidental o consecuente derivado del uso de la Plataforma.";
$conditions_h2_changes = "Cambios en estos Términos";
$conditions_p_changes = "Podemos actualizar estos Términos periódicamente. El uso continuado de la Plataforma tras la entrada en vigor de los cambios constituye la aceptación de los Términos actualizados.";
$conditions_h2_contact = "Contacto";
$conditions_p_contact = "Las preguntas sobre estos Términos pueden enviarse a nuestro equipo de soporte a través de la página de Contacto.";

// --- Privacy Policy ---
$privacy_meta_title = "Política de privacidad | $site_name";
$privacy_meta_description = "Descubre cómo $site_name recopila, utiliza y protege tus datos personales.";
$privacy_breadcrumb_name = "Privacidad";
$privacy_h1 = "Política de privacidad";
$privacy_last_update = "Última actualización: " . date('F Y');
$privacy_intro = "Esta Política de privacidad explica cómo $site_name («nosotros») recopila, utiliza y protege tus datos personales cuando utilizas nuestra Plataforma.";
$privacy_h2_collect = "Información que recopilamos";
$privacy_p_collect = "Recopilamos la información que nos facilitas directamente (como tu nombre, correo electrónico y número de teléfono durante el registro), así como datos técnicos (como la dirección IP y el tipo de navegador) recopilados automáticamente.";
$privacy_h2_use = "Cómo utilizamos tu información";
$privacy_p_use = "Utilizamos tu información para prestar y mejorar la Plataforma, comunicarnos contigo, verificar tu identidad y cumplir con nuestras obligaciones legales.";
$privacy_h2_sharing = "Compartición de información";
$privacy_p_sharing = "No vendemos tus datos personales. Podemos compartir información con proveedores de servicios de confianza que nos ayudan a operar la Plataforma, sujetos a obligaciones de confidencialidad.";
$privacy_google_choices = 'Puedes gestionar cómo utiliza Google la información de tus visitas a través de la <a href="http://www.google.com/settings/ads" target="_blank" rel="noopener">Configuración de anuncios de Google</a>, desactivar la publicidad basada en intereses mediante el <a href="https://tools.google.com/dlpage/gaoptout" target="_blank" rel="noopener">Complemento de inhabilitación para navegadores de Google Analytics</a>, o consultar la <a href="https://www.google.com/intl/es/policies/privacy/" target="_blank" rel="noopener">Política de privacidad de Google</a> para más información.';
$privacy_h2_security = "Seguridad de los datos";
$privacy_p_security = "Aplicamos medidas técnicas y organizativas conformes a los estándares del sector para proteger tus datos, incluido el cifrado de los datos en tránsito.";
$privacy_h2_rights = "Tus derechos";
$privacy_p_rights = "Según tu jurisdicción, es posible que tengas derecho a acceder, corregir o eliminar tus datos personales. Contáctanos para ejercer estos derechos.";
$privacy_h2_retention = "Conservación de datos";
$privacy_p_retention = "Conservamos tus datos personales únicamente durante el tiempo necesario para los fines descritos en esta política, o mientras lo exija la ley.";
$privacy_h2_contact = "Contáctanos";
$privacy_p_contact = "Para preguntas relacionadas con la privacidad, ponte en contacto con nosotros a través de nuestra página de Contacto.";

// ==========================================
// RISK WARNING PAGE
// ==========================================
$page_title_risk_warning = "Advertencia de riesgo | $site_name";
$page_description_risk_warning = "Comprende los riesgos del trading automatizado de criptomonedas con $site_name, incluida la volatilidad del mercado, el riesgo de ejecución y las consideraciones regulatorias.";
$risk_warning_breadcrumb_name = "Advertencia de riesgo";
$risk_warning_title = "Advertencia de riesgo";
$risk_warning_intro = "Comprender los riesgos es el primer paso hacia un trading con confianza.";

$risk_warning_ai_heading = "Cómo ayuda nuestro sistema de IA a gestionar el riesgo:";
$risk_warning_ai_1 = "<strong>Eficiencia algorítmica y trading sin emociones:</strong> Algoritmos avanzados analizan las señales del mercado para ejecutar operaciones de forma objetiva en los momentos óptimos.";
$risk_warning_ai_2 = "<strong>Estrategias basadas en datos:</strong> Las estrategias se basan en patrones de mercado verificados y análisis en tiempo real, y no en conjeturas.";
$risk_warning_ai_3 = "<strong>Configuración flexible y control total:</strong> Ajusta tus parámetros de riesgo en cualquier momento. Consulta todos tus saldos y operaciones con total transparencia en tu panel, sin comisiones ocultas y sin restricciones en los retiros.";

$risk_warning_disclaimer = "<strong>Aviso legal:</strong> El trading siempre conlleva riesgo. Los sistemas automatizados (incluida la IA) no garantizan beneficios, pueden fallar debido a errores de software o a eventos de mercado inesperados, y requieren supervisión por parte del usuario. La rentabilidad pasada no es indicativa de resultados futuros. Esta plataforma tiene fines meramente informativos y de marketing, y no ofrece asesoramiento financiero.";

$risk_warning_s1_heading = "1. Riesgos generales y del mercado de criptomonedas";
$risk_warning_s1_intro = "Las criptomonedas son activos especulativos muy volátiles que operan las 24 horas del día con una supervisión regulatoria mínima en la mayoría de las jurisdicciones.";
$risk_warning_s1_1 = "Los valores pueden fluctuar de forma drástica en periodos cortos, lo que puede conllevar la pérdida total del capital invertido.";
$risk_warning_s1_2 = "Los valores de mercado pueden verse muy afectados por cambios regulatorios, avances técnicos, brechas de seguridad o eventos macroeconómicos más amplios.";
$risk_warning_s1_3 = "Algunos activos pueden perder todo su valor por completo. Invierte únicamente los fondos que puedas permitirte perder.";

$risk_warning_s2_heading = "2. Riesgos de ejecución, liquidez y apalancamiento";
$risk_warning_s2_1 = "<strong>Volatilidad del mercado y liquidez:</strong> Los movimientos de precio extremos (10-20 % o más al día) o la baja liquidez (especialmente en monedas más pequeñas) pueden provocar retrasos, interrupciones de la plataforma y un deslizamiento de ejecución considerable. Las órdenes stop-loss no pueden garantizar límites de pérdidas en condiciones extremas.";
$risk_warning_s2_2 = "<strong>Riesgos de apalancamiento y margen:</strong> Los productos apalancados amplifican tanto las ganancias como las pérdidas, lo que significa que puedes perder más que tu depósito inicial. Aproximadamente entre el 70 % y el 80 % de las cuentas de inversores minoristas pierden dinero al operar con productos apalancados.";

$risk_warning_s3_heading = "3. Riesgos técnicos, de ciberseguridad y de terceros";
$risk_warning_s3_1 = "<strong>Factores técnicos:</strong> El trading en línea implica de forma inherente riesgos de desconexión a internet, errores de hardware o software, e indisponibilidad del servicio.";
$risk_warning_s3_2 = "<strong>Ciberseguridad:</strong> Las cuentas de criptomonedas son objetivos frecuentes de phishing, malware y hackeos. Las transacciones son irreversibles; comprometer tus credenciales puede provocar una pérdida permanente.";
$risk_warning_s3_3 = "<strong>Plataformas de terceros:</strong> Este sitio web puede conectar a los usuarios con plataformas de terceros. No controlamos, respaldamos ni garantizamos su seguridad, funcionamiento o solvencia. Realiza siempre tu propia diligencia debida antes de depositar fondos en plataformas externas.";

$risk_warning_s4_heading = "4. Disposiciones regulatorias, fiscales y finales";
$risk_warning_s4_1 = "<strong>Cumplimiento legal e impuestos:</strong> Los marcos regulatorios varían ampliamente y cambian con rapidez. Los usuarios son los únicos responsables de garantizar que su actividad de trading cumpla con las leyes locales y de cumplir con sus propias obligaciones fiscales.";
$risk_warning_s4_2 = "<strong>Sin garantías de beneficio:</strong> No existe el trading de criptomonedas «seguro» o sin riesgo. Cualquier cifra de rendimiento o ejemplo de rentabilidad es puramente hipotético.";
$risk_warning_s4_3 = "<strong>Idoneidad:</strong> Si no comprendes plenamente los riesgos, dependes de fondos esenciales, u operas con dinero prestado, el trading de criptomonedas no es adecuado para ti. Consulta a un asesor financiero independiente y con licencia en caso de duda.";

$risk_warning_contact = "<strong>Contacto:</strong> Para cualquier pregunta sobre esta declaración o para enviar una consulta, ponte en contacto con nuestro equipo oficial de atención al cliente a través del formulario de contacto de nuestro sitio web.";
$footer_risk_warning = "Advertencia de riesgo";
