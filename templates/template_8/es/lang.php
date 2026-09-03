<?php
require __DIR__ . '/../lang.php';
$site_lang = 'es-ES';
$form_language = 'es'; // matches this page's own language, not the offer's global default

// ============================================================
// ES TRANSLATION OVERRIDES
// Identity/config vars ($site_name, $site_slug, $site_domain, $site_url, $app_price, $app_currency, $site_lang, $country_name, $country_flag_code, $privacy_last_update, $rating_value, $rating_count, $review_count, $form_country, $form_language, $form_phone_country, $form_only_countries, $review_1_author, $review_2_author, $review_3_author, $review_4_author, $quiz_consultant_name) are
// intentionally NOT overridden -- they stay exactly as inherited from the
// root lang.php.
// ============================================================

// Brand / Platform Variables

// Geo-language stats bar fallback content (used by the language-folder pages'
// own "stats" section; the fr/de/it/nl folders override these with native
// translations, the other 19 folders inherit this English fallback)
$stat_1_value = "4M+";
$stat_1_label = "Usuarios Registrados";
$stat_2_value = "98+";
$stat_2_label = "Países Compatibles";
$stat_3_value = "65+";
$stat_3_label = "Divisas Disponibles";
$stat_4_value = "24/7";
$stat_4_label = "Acceso a Transacciones";
$stat_5_value = "256 bits";
$stat_5_label = "Estándar de Cifrado";
$stat_6_value = "$500M+";
$stat_6_label = "Depósitos Totales de Clientes";

// Keitaro Form Integration Variables (defaults -- overwritten per-launch by
// generate_lang_files(); must stay valid on their own since nothing else in
// this file replaces them for a page that's ever served un-generated)

// 4 Verified Reviews (TZ Item 8)
$review_1_role = "Francia";
$review_1_text = "Empecé con 500 € solo para ver cómo funcionaba la plataforma. Después de unas tres semanas, mi saldo había crecido hasta unos 1120 €. La interfaz es fácil de usar, y las perspectivas del mercado me ayudaron a tomar mejores decisiones.";
$review_1_badge = "Rendimiento Declarado +18,4%";

$review_2_role = "Alemania";
$review_2_text = "He probado algunas plataformas de trading antes, pero esta ha sido mi favorita hasta ahora. Es fácil de navegar, las herramientas son realmente útiles y en general he tenido una experiencia muy positiva.";
$review_2_badge = "Rendimiento Declarado +19,1%";

$review_3_role = "Italia";
$review_3_text = "Lo que más me impresionó fue lo intuitivo que se siente todo. El registro fue rápido, el panel está bien organizado y la plataforma ha hecho que operar sea mucho más cómodo para mí.";
$review_3_badge = "Rendimiento Declarado +16,8%";

$review_4_role = "Países Bajos";
$review_4_text = "No tenía experiencia previa en trading, así que empecé con 750 €. En un mes, alcancé poco más de 1765 € siguiendo las herramientas y los recursos de aprendizaje. Ha sido una gran manera de ganar confianza.";
$review_4_badge = "Rendimiento Declarado +18,0%";

$review_verified_label = "Usuario Verificado";
$reviews_section_title = "Opiniones sobre $site_name";
$reviews_badge_trustworthy = "Fiable";
$reviews_summary_rating = "4,7";
$reviews_summary_count = "189";
$reviews_summary_desc = "Una plataforma de trading potente e intuitiva con herramientas automatizadas robustas, análisis en tiempo real y amplios recursos de aprendizaje.";

// CONSULTANT / CHAT QUIZ (TZ Item 13)
$quiz_consultant_role = "Consultor de Trading";
$quiz_text_welcome = "¡Hola! Soy tu asistente personal de trading. Realiza un cuestionario de 30 segundos para descubrir cómo el trading automatizado con IA puede funcionar para ti.";
$quiz_text_q1 = "¿Has operado alguna vez con criptomonedas o mercados financieros?";
$quiz_text_a1_yes = "Sí, tengo algo de experiencia";
$quiz_text_a1_no = "No, soy principiante total";
$quiz_text_q2 = "¿Cuál es tu principal objetivo financiero con el trading en línea?";
$quiz_text_q3 = "¿Prefieres que la IA ejecute las operaciones automáticamente, o operar manualmente?";
$quiz_text_a3_yes = "Trading Automatizado con IA (Recomendado)";
$quiz_text_a3_no = "Trading Manual con Señales de IA";
$quiz_text_q4 = "¿Cuál es tu presupuesto inicial para destinar al trading?";
$quiz_text_a4_1 = "250 $ - 500 $";
$quiz_text_a4_2 = "500 $ - 1.500 $";
$quiz_text_a4_3 = "1.500 $+";
$quiz_text_q5 = "¿Estás listo para crear tu cuenta y recibir acceso completo a la plataforma?";
$quiz_text_a5_yes = "¡Sí, empecemos!";
$quiz_text_a5_no = "Me gustaría más información";
$quiz_text_loader = "Analizando tus respuestas y preparando los parámetros óptimos de trading...";
$quiz_text_final_ttl = "¡La Configuración de tu Cuenta Está Lista!";
$quiz_text_processing = "Configurando tu acceso a la plataforma...";
$quiz_text_typing = "está escribiendo...";
$quiz_placeholder_fname = "Nombre";
$quiz_placeholder_lname = "Apellido";
$quiz_placeholder_email = "Correo Electrónico";
$quiz_placeholder_phone = "Número de Teléfono";
$quiz_btn_submit = "Completar Registro";

// METADATA (TZ Item 10)
$home_meta_title = "$site_name — Plataforma de Trading | Sitio Oficial";
$home_meta_description = "El sitio web oficial de $site_name ofrece una plataforma segura de trading de criptomonedas con herramientas avanzadas, perspectivas de mercado en tiempo real y una experiencia fácil de usar para los traders.";

// NAVIGATION & HEADER (TZ Item 3, 12)
$nav_about = "Sobre Nosotros";
$nav_how = "Cómo Funciona";
$nav_why = "Por Qué Operar";
$nav_faq = "FAQ";
$nav_contacts = "Contáctanos";
$nav_signin = "Iniciar Sesión";
$nav_signup = "Registrarse";

$mobnav_home = "Inicio";
$mobnav_product = "Producto";
$mobnav_offer = "Oferta";
$mobnav_contact = "Contáctanos";
$mobnav_faq = "FAQ";
$mobnav_signup = "Registrarse";

// HERO SECTION
$hero_h1 = "Plataforma <mark>$site_name</mark>";
$hero_text = "Plataforma oficial de trading de criptomonedas $site_name";

// LEAD FORM
$form_fname_placeholder = "Nombre";
$form_lname_placeholder = "Apellido";
$form_email_placeholder = "Correo Electrónico";
$form_phone_placeholder = "Número de Teléfono";
$form_btn_submit = "Registrarse";
$form_disclaimer_text = "Al introducir tu información personal y hacer clic en el botón, aceptas la <a class='link link-primary' href='privacy.php'>Política de Privacidad</a> y los <a class='link link-primary' href='conditions.php'>Términos de Uso</a> de este sitio web.";

// SECURITY BADGES
$badge_ssl = "SSL de 256 bits";
$badge_payments = "Pagos Seguros";
$badge_2fa = "2FA";
$badge_cold_storage = "98% Cold Storage";
$badge_regulated = "Regulado";
$badge_traders_trust = "Más de 4M de Traders Confían";

// SAFE SECTION (Vos fonds sont en sécurité)
$safe_title = "<mark>Tus Fondos Están Seguros</mark> con $site_name";
$safe_desc = "Cifrado de nivel bancario, procesadores de pago verificados y 98% de cold storage — tu dinero está protegido en cada paso.";

$safe_item1_title = "Proveedores de Pago Verificados";
$safe_item1_desc = "Los pagos se procesan exclusivamente a través de proveedores certificados que cumplen con los estándares de seguridad internacionales. Los datos de tu tarjeta nunca se almacenan en nuestra plataforma.";
$safe_item1_badge = "Pagos Seguros";

$safe_item2_title = "Autenticación de Dos Factores (2FA)";
$safe_item2_desc = "Añade una capa extra de protección a tu cuenta con contraseñas de un solo uso basadas en tiempo a través de SMS o Google Authenticator.";
$safe_item2_badge = "2FA";

$safe_item3_title = "98% Cold Storage";
$safe_item3_desc = "La gran mayoría de los activos digitales se guardan en bóvedas cold storage offline distribuidas geográficamente y protegidas por protocolos multifirma.";
$safe_item3_badge = "98% Cold Storage";

$safe_item4_title = "Ejecución Regulada";
$safe_item4_desc = "Colaboramos con corredurías y proveedores de liquidez regulados en todo el mundo para mantener el cumplimiento normativo, la transparencia y una ejecución de primer nivel.";
$safe_item4_badge = "Regulado";

$safe_item5_title = "Cifrado SSL de 256 bits";
$safe_item5_desc = "Todas las transmisiones de datos entre tu navegador y nuestros servidores están cifradas con protocolos criptográficos de nivel militar TLS 1.3.";
$safe_item5_badge = "SSL de 256 bits";

// FREE GUIDE CTA BANNER (CTA 2)
$guide_cta_title = "Recibe la Guía Gratuita";
$guide_cta_subtitle = "«10 Errores a Evitar en el Trading de Criptomonedas»";
$guide_cta_btn = "Solicitar Guía Gratuita";

// TRUST SECTION (Pourquoi les investisseurs font confiance à Ciel Cryptance)
$trust_title = "Por Qué los Traders Confían en <mark>$site_name</mark>";
$trust_desc = "Más de 4.000.000 de usuarios en todo el mundo eligen $site_name por su fiabilidad, su potente automatización y su entorno transparente.";
$trust_subtitle = "Principales Ventajas para el Trader Moderno:";

$trust_item1_title = "Acceso a Mercados Globales";
$trust_item1_desc = "Opera con más de 100 criptomonedas, pares de Forex, acciones y materias primas desde un único panel de trading unificado.";

$trust_item2_title = "Protección Sólida de Fondos";
$trust_item2_desc = "Cuentas segregadas, verificaciones biométricas continuas y ciberseguridad de vanguardia protegen tu capital las 24 horas del día, los 7 días de la semana.";

$trust_item3_title = "Cero Comisiones Ocultas";
$trust_item3_desc = "Disfruta de precios totalmente transparentes. Registro gratuito, depósitos gratuitos, sin comisiones de gestión de plataforma y solicitudes de retiro instantáneas.";

$trust_item4_title = "Soporte Receptivo";
$trust_item4_desc = "Nuestro equipo de soporte dedicado está disponible por chat en vivo, teléfono o correo electrónico para ayudarte con cualquier pregunta o consulta técnica.";

$trust_market_info_text = "Más información sobre las condiciones del mercado en 2026";
$trust_market_info_btn = "Por Qué Operar";

// START TRADING CTA (CTA 3)
$start_cta_title = "¡Empieza a Operar con <span data-local-currency='$app_price'>$app_price $app_currency</span>!";
$start_cta_desc = "¿Listo para probar $site_name? Regístrate ahora y únete a la creciente comunidad de inversores y traders de criptomonedas.";
$start_cta_btn = "Registrarse";

// FAQ SECTION
$faq_title = "Preguntas Frecuentes de $site_name <mark>(FAQ)</mark>";
$faq_q1 = "¿Qué es $site_name y cómo funciona?";
$faq_a1 = "Es una plataforma de trading impulsada por IA que trabaja para ti las 24 horas del día. El sistema analiza los mercados, detecta oportunidades y ejecuta operaciones automáticamente. Puedes dejar que la IA se encargue de todo o cambiar al modo manual para operar a tu manera en cualquier momento.";

$faq_q2 = "¿Qué tan seguro está mi dinero y mis datos en $site_name?";
$faq_a2 = "La seguridad está integrada en cada capa de la plataforma. Los datos personales están protegidos mediante estándares de cifrado reconocidos internacionalmente y autenticación avanzada de cuentas. Todas las transacciones financieras se procesan exclusivamente a través de proveedores de pago confiables y verificados. Toda tu actividad de trading es visible en tiempo real, así que siempre sabes exactamente qué está pasando con tus fondos.";

$faq_q3 = "¿Puedo retirar mis ganancias en cualquier momento?";
$faq_a3 = "Sí. No hay restricciones sobre cuándo o con qué frecuencia puedes retirar tus fondos de $site_name. El saldo de tu cuenta permanece bajo tu control total en todo momento. Los retiros se procesan a través de los mismos proveedores de pago confiables utilizados para los depósitos, garantizando transferencias rápidas y seguras.";

$faq_q4 = "¿Hay comisiones ocultas o cargos adicionales?";
$faq_a4 = "Ninguno. $site_name no cobra tarifas de suscripción, ni tarifas de registro, ni costos ocultos. El único importe necesario para empezar es el depósito mínimo de <span data-local-currency='$app_price'>$app_price $app_currency</span>, acreditado directamente en tu cuenta de trading. Se aceptan todos los métodos de pago principales, incluyendo tarjetas de crédito, transferencias bancarias y PayPal.";

$faq_q5 = "¿Se necesita experiencia previa en trading para empezar?";
$faq_a5 = "En absoluto. $site_name está diseñado tanto para principiantes totales como para traders experimentados. En el modo totalmente automatizado, la IA se encarga de todo por ti, incluyendo el análisis de mercado, la generación de señales y la ejecución de órdenes. Si prefieres mantener el control, puedes cambiar al modo manual en cualquier momento.";

$faq_cta_text = "¿Tienes preguntas? Consulta nuestras FAQ o contacta a nuestro equipo de soporte.";
$faq_cta_faq_btn = "FAQ";
$faq_cta_contact_btn = "Contáctanos";

// NEW TRADER LEAD SECTION (Bottom form)
$lead_title = "¿Nuevo en el Trading?";
$lead_p1 = "Después de registrarte, recibirás nuestra guía gratuita <mark class='text-on-surface-tertiary-accent'>«10 Errores a Evitar en el Trading de Criptomonedas»</mark>. Contiene consejos directos de nuestros analistas más experimentados para ayudarte a evitar errores comunes.";
$lead_p2 = "Simplemente introduce tus datos en el formulario de registro y te la enviaremos directamente a tu bandeja de entrada. Muchos traders han empezado con esta guía y la han encontrado invaluable para ganar confianza en sus primeras operaciones.";
$lead_form_heading = "El mercado no espera — ¡empieza hoy!";

// FEATURES TABLE (Fonctionnalités principales)
$features_title = "<mark>Características Clave</mark> de la Plataforma de Trading $site_name";
$feature_1_title = "🤖 Tecnología de la Plataforma";
$feature_1_val = "Motor de trading avanzado impulsado por IA";
$feature_2_title = "💳 Métodos de Financiación";
$feature_2_val = "Principales tarjetas de crédito, transferencias bancarias, PayPal";
$feature_3_title = "📱 Acceso a la Plataforma";
$feature_3_val = "Compatibilidad multidispositivo (Escritorio, Tablet, Móvil)";
$feature_4_title = "🚀 Tasa de Éxito";
$feature_4_val = "85% de precisión analítica";
$feature_5_title = "📊 Instrumentos de Trading";
$feature_5_val = "Criptomonedas, Forex, Acciones, Materias Primas, Metales Preciosos, CFD y más…";
$feature_6_title = "✍️ Configuración de Cuenta";
$feature_6_val = "Registro rápido y sencillo";
$feature_7_title = "📞 Soporte al Cliente";
$feature_7_val = "Soporte profesional dedicado 24/7";

// FOOTER DISCLAIMER (TZ Item 21)
$footer_disclaimer_p1 = "$site_name ofrece contenido educativo e información general sobre los mercados financieros, el trading en línea y los activos digitales. Todos los materiales publicados en este sitio web, incluyendo artículos, gráficos, datos de precios, perspectivas de mercado y análisis, están destinados únicamente a fines informativos y no deben considerarse asesoramiento financiero, de inversión o legal. Aunque nos esforzamos por mantener nuestro contenido preciso y actualizado, no garantizamos su exhaustividad ni fiabilidad, y no aceptamos ninguna responsabilidad por las pérdidas derivadas del uso de este sitio web.";
$footer_disclaimer_p2 = "Operar con criptomonedas, Forex, CFD, acciones y otros instrumentos financieros implica un riesgo significativo y puede no ser adecuado para todos los inversores. Las condiciones del mercado pueden cambiar rápidamente, y el rendimiento pasado no garantiza resultados futuros. Antes de tomar cualquier decisión de inversión, evalúa cuidadosamente tu situación financiera y tu tolerancia al riesgo, y busca asesoramiento profesional independiente si es necesario. Invierte solo el dinero que puedas permitirte perder.";
$footer_copyright = "© " . date('Y') . " $site_name. All rights reserved.";

// FOOTER NAV LINKS
$footnav_about = "Sobre Nosotros";
$footnav_how = "Cómo Funciona";
$footnav_why = "Por Qué Operar";
$footnav_faq = "FAQ";
$footnav_contacts = "Contáctanos";
$footnav_privacy = "Política de Privacidad";
$footnav_risk = "Advertencia de Riesgo";
$footnav_terms = "Términos de Uso";
$footnav_product = "Producto";
$footnav_offer = "Oferta";

// ABOUT PAGE VARIABLES
$about_meta_title = "Sobre Nosotros | Sitio Oficial $site_name";
$about_meta_description = "Descubre más sobre $site_name, nuestra misión de democratizar los mercados financieros mediante la automatización con IA, y nuestro marco de seguridad de nivel institucional.";
$about_h1 = "Sobre <mark>$site_name</mark>";
$about_lead = "Empoderando a los traders de todo el mundo a través de la inteligencia artificial, la ejecución algorítmica y la seguridad empresarial.";
$about_mission_title = "Nuestra Misión";
$about_mission_text = "En $site_name, creemos que las tecnologías de trading sofisticadas deben ser accesibles para todos, no solo para los fondos institucionales. Nuestra plataforma cierra la brecha entre los inversores minoristas cotidianos y los algoritmos de trading computacional de vanguardia.";
$about_tech_title = "Tecnología de Vanguardia";
$about_tech_text = "Nuestros sistemas evalúan más de 100.000 puntos de datos cada segundo en los mercados globales de criptomonedas, Forex y acciones. Al combinar modelos predictivos de aprendizaje automático con ejecución en submilisegundos, ofrecemos un deslizamiento ultrabajo y un rendimiento fiable.";
$about_sec_title = "Seguridad y Cumplimiento Normativo";
$about_sec_text = "La confianza del cliente es la base fundamental de nuestro ecosistema. Implementamos cifrado TLS de 256 bits, protocolos biométricos y 2FA estrictos, y almacenamos el 98% de todas las reservas digitales en bóvedas cold storage.";

// PRODUCT PAGE VARIABLES
$product_meta_title = "Herramientas de Trading y Producto | $site_name";
$product_meta_description = "Explora el motor de trading y las capacidades de IA que impulsan $site_name. Ejecución automatizada de órdenes, análisis predictivo y controles intuitivos.";
$product_h1 = "<mark>Producto y Características</mark> de la Plataforma";
$product_lead = "Descubre las herramientas inteligentes diseñadas para darte una ventaja competitiva en los mercados modernos de criptomonedas y financieros.";
$product_f1_title = "Motor de Trading Automatizado con IA";
$product_f1_text = "Deja que los algoritmos neuronales analicen las tendencias del mercado y ejecuten operaciones óptimas las 24 horas sin emociones.";
$product_f2_title = "Análisis de Mercado en Tiempo Real";
$product_f2_text = "Profundidad del libro de órdenes en vivo, reconocimiento automatizado de patrones y seguimiento del sentimiento institucional al alcance de tu mano.";
$product_f3_title = "Suite de Gestión de Riesgos";
$product_f3_text = "Límites granulares de stop-loss y take-profit, controles de exposición diaria máxima y capacidades de cobertura automatizadas.";
$product_f4_title = "Accesibilidad Multiplataforma";
$product_f4_text = "Opera sin problemas desde navegadores de escritorio, tablets y smartphones con cero latencia y sincronización completa en la nube.";

// OFFER PAGE VARIABLES
$offer_meta_title = "Oferta Especial y Condiciones | $site_name";
$offer_meta_description = "Descubre la oferta exclusiva de registro con $site_name. Empieza con un depósito inicial de $app_price $app_currency y recibe soporte dedicado.";
$offer_h1 = "<mark>Oferta de Trading</mark> Exclusiva";
$offer_lead = "Comienza hoy tu viaje de trading con ventajas competitivas e incorporación de cuenta personalizada uno a uno.";
$offer_step1_title = "1. Registro Rápido";
$offer_step1_text = "Completa nuestro breve formulario de registro para asegurar el acceso a tu cuenta personal en menos de 2 minutos.";
$offer_step2_title = "2. Financia tu Saldo de Trading";
$offer_step2_text = "Deposita el mínimo estándar de $app_price $app_currency mediante tarjeta de crédito, transferencia bancaria o monederos electrónicos. El 100% de tus fondos va directamente a tu saldo de trading.";
$offer_step3_title = "3. Activa el Trading con IA";
$offer_step3_text = "Elige el modo automatizado o asistido, selecciona tus pares de activos preferidos y comienza a operar con todas las capacidades de la plataforma.";

// CONTACTS PAGE VARIABLES
$contacts_meta_title = "Contactar con Soporte | $site_name";
$contacts_meta_description = "Ponte en contacto con el equipo de $site_name. Soporte al cliente 24/7, asistencia técnica y consultas de cuenta.";
$contacts_h1 = "Contactar con <mark>Soporte al Cliente</mark>";
$contacts_lead = "Nuestro equipo de soporte internacional dedicado está listo para ayudarte las 24 horas del día, los 7 días de la semana.";
$contacts_info_title = "Consultas Oficiales";
$contacts_info_text = "Para consultas generales, verificación de cuenta o soporte técnico, contáctanos a través de nuestros canales de comunicación verificados.";
$contacts_support_hours = "Soporte por Chat en Vivo y Correo Electrónico 24/7";

// FAQ PAGE VARIABLES
$faq_meta_title = "FAQ y Base de Conocimientos | $site_name";
$faq_meta_description = "Encuentra respuestas a las preguntas frecuentes sobre las cuentas de $site_name, depósitos, retiros y trading automatizado con IA.";
$faq_h1 = "<mark>FAQ</mark> de $site_name";
$faq_lead = "Respuestas claras a las preguntas más comunes sobre la seguridad de la plataforma, los retiros y el trading automatizado.";

// PRIVACY POLICY PAGE VARIABLES
$privacy_meta_title = "Política de Privacidad | $site_name";
$privacy_meta_description = "Lee nuestra completa Política de Privacidad para entender cómo $site_name recopila, protege y gestiona tus datos personales.";
$privacy_h1 = "Política de Privacidad";
$privacy_p1 = "Esta Política de Privacidad describe cómo $site_name recopila, utiliza y divulga la información cuando visitas nuestro sitio web, registras una cuenta o utilizas nuestro software de trading.";
$privacy_sec1_title = "1. Recopilación y Uso de Datos";
$privacy_sec1_text = "Recopilamos la información de contacto necesaria (nombre, dirección de correo electrónico, número de teléfono) para crear tu cuenta, conectarte con socios de correduría verificados y verificar tu identidad de acuerdo con los estándares internacionales KYC y AML.";
$privacy_sec2_title = "2. Cookies y Tecnologías de Seguimiento";
$privacy_sec2_text = "Utilizamos cookies esenciales y analíticas para mejorar el rendimiento del sitio web, personalizar la experiencia del usuario y monitorear los patrones de tráfico. Puedes ajustar la configuración de cookies de tu navegador en cualquier momento.";
$privacy_sec3_title = "3. Seguridad de Datos y Derechos del RGPD";
$privacy_sec3_text = "Todos los datos de los usuarios se cifran en tránsito y en reposo utilizando protocolos criptográficos de nivel bancario. Según el Reglamento General de Protección de Datos (RGPD), los usuarios tienen derecho a solicitar el acceso, la corrección o la eliminación de sus datos personales.";

// TERMS OF USE PAGE VARIABLES
$terms_meta_title = "Términos de Uso | $site_name";
$terms_meta_description = "Consulta los Términos y Condiciones oficiales que rigen el uso de la plataforma $site_name y los servicios asociados.";
$terms_h1 = "Términos de Uso";
$terms_p1 = "Por favor, lee estos Términos de Uso cuidadosamente antes de acceder o utilizar $site_name. Al registrar una cuenta, aceptas quedar vinculado por estas disposiciones.";
$terms_sec1_title = "1. Elegibilidad del Usuario";
$terms_sec1_text = "Debes tener al menos 18 años y residir en una jurisdicción donde el trading en línea y las transacciones con criptomonedas estén legalmente permitidas. Eres responsable de garantizar el cumplimiento de tus leyes locales.";
$terms_sec2_title = "2. Registro de Cuenta y Seguridad";
$terms_sec2_text = "Aceptas proporcionar información veraz, precisa y completa durante el registro. Eres el único responsable de mantener la confidencialidad de tus credenciales de acceso.";
$terms_sec3_title = "3. Limitación de Responsabilidad";
$terms_sec3_text = "$site_name proporciona servicios informativos y de enrutamiento de software. No ofrecemos asesoramiento financiero personalizado ni garantizamos la rentabilidad del trading. Operar en los mercados financieros conlleva un riesgo de capital inherente.";

// RISK WARNING PAGE VARIABLES (TZ Item 19: Exact 4 sections)
$risk_meta_title = "Advertencia de Riesgo y Aviso Legal | $site_name";
$risk_meta_description = "Divulgación importante de riesgos sobre el trading de CFD, Forex y criptomonedas en $site_name. Léelo detenidamente antes de invertir.";
$risk_h1 = "Advertencia de Riesgo";
$risk_sec1_title = "1. Aviso de Inversión de Alto Riesgo y Volatilidad";
$risk_sec1_text = "Operar con criptomonedas, Contratos por Diferencia (CFD), divisas (Forex) y otros activos financieros implica un riesgo sustancial de pérdida y no es adecuado para todos los inversores. Los mercados de criptomonedas son excepcionalmente volátiles, con precios sujetos a fuertes fluctuaciones en respuesta a anuncios regulatorios, cambios macroeconómicos o el sentimiento del mercado. Nunca debes invertir dinero que no puedas permitirte perder por completo.";
$risk_sec2_title = "2. Asesoramiento Financiero Independiente";
$risk_sec2_text = "Todos los materiales, herramientas, señales algorítmicas y comentarios proporcionados en $site_name están destinados únicamente a fines informativos, educativos y de marketing. Ninguno de los contenidos de este sitio web constituye asesoramiento de inversión, legal o financiero personalizado. Antes de ejecutar cualquier operación, deberías realizar una investigación independiente o consultar a un asesor financiero autorizado.";
$risk_sec3_title = "3. Restricciones Regulatorias y Geográficas";
$risk_sec3_text = "Ciertas jurisdicciones restringen o prohíben el trading minorista de CFD y criptomonedas. Es responsabilidad exclusiva del usuario verificar si el acceso a $site_name y el uso de correduría asociadas es legal según su marco jurídico local.";
$risk_sec4_title = "4. Tecnología de la Plataforma y Ejecución en el Mercado";
$risk_sec4_text = "Las herramientas de trading automatizadas, los algoritmos de inteligencia artificial y los indicadores de mercado no garantizan ganancias ni eliminan los riesgos del mercado. Las interrupciones técnicas, la latencia de red, los fallos del sistema y la escasez de liquidez pueden provocar retrasos en la ejecución de operaciones o deslizamiento.";

// SIGN UP / LOGIN PAGE VARIABLES
$sign_meta_title = "Registro / Inicio de Sesión | $site_name";
$sign_meta_description = "Crea tu cuenta gratuita en $site_name para acceder a herramientas inteligentes de trading automatizado, señales de mercado y opciones de financiación seguras.";
$sign_h1 = "Regístrate en <mark>$site_name</mark>";
$sign_lead = "Únete a miles de traders y obtén acceso inmediato a nuestro motor de trading con IA.";

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
$hero_form_heading = "Crea tu cuenta gratuita";
$hero_form_button = "Registrarse";
$form_name_placeholder = "Introduce tu nombre";
$form_surname_placeholder = "Introduce tu apellido";
$form_disclaimer_prefix = "Al introducir tu información personal y hacer clic en el botón, aceptas la";
$form_privacy_link_label = "Política de Privacidad";
$form_disclaimer_and = "y los";
$form_terms_link_label = "Condiciones de Uso";
$form_disclaimer_of_site = "de este sitio web.";

// -- partners strip --
$partners_label = "Con la confianza de socios líderes";

// -- "what is" section --
$whatis_label = "Sobre la Plataforma";
$whatis_title = "¿Qué es $site_name?";
$whatis_intro = "$site_name es la plataforma oficial de trading en línea, diseñada para hacer del cripto algo tan sencillo como la banca en línea cotidiana.";
$whatis_icon_1_title = "Análisis Impulsado por IA";
$whatis_icon_1_text = "Algoritmos avanzados gestionan la complejidad de los mercados por ti.";
$whatis_icon_2_title = "Ejecución Instantánea";
$whatis_icon_2_text = "Miles de puntos de datos procesados cada segundo — operaciones sin demora.";
$whatis_icon_3_title = "Panel Simple e Intuitivo";
$whatis_icon_3_text = "Consulta tu saldo y posiciones abiertas de un vistazo, en cualquier momento.";
$whatis_icon_4_title = "Acceso Fácil, Sin Barreras";
$whatis_icon_4_text = "Empieza con un depósito mínimo de solo $app_price $app_currency — sin comisiones ocultas.";
$whatis_cta_text = "¿Quieres saber más sobre nuestro equipo y nuestro producto?";
$whatis_cta_link = "Sobre Nosotros";

// -- stats section heading (per-stat label/value already set above) --
$stats_label = "$site_name en Cifras";
$stats_title = "Cifras que Hablan Más Fuerte que las Promesas";

// -- key benefits section --
$benefits_label = "Beneficios Clave";
$benefits_title = "Principales Beneficios de $site_name";
$benefit_1_title = "Plataforma Fácil para Principiantes";
$benefit_1_text = "Gráficos intuitivos y guías paso a paso te ayudan a empezar sin sentirte abrumado. Puedes operar con criptomonedas con confianza desde el primer día.";
$benefit_2_title = "Oficial y Regulado";
$benefit_2_text = "$site_name está licenciado y cumple con las normativas financieras aplicables. Utilizamos cifrado SSL y autenticación de dos factores para proteger cada cuenta.";
$benefit_3_title = "Acceso Fácil, Sin Barreras";
$benefit_3_text = "Con un depósito mínimo de solo $app_price $app_currency, cualquiera puede empezar. No se requiere una gran inversión inicial — empieza con poco y aumenta tu participación a medida que crece tu confianza.";
$benefit_4_title = "Comisiones Transparentes";
$benefit_4_text = "Nunca verás cargos ocultos. Solo aplicamos comisiones mínimas de transacción o retiro cuando corresponda, así siempre sabes exactamente lo que estás pagando.";
$benefit_5_title = "Acceso al Trading 24/7";
$benefit_5_text = "Opera según tu propio horario, de día o de noche. $site_name funciona igual de bien en escritorio que en móvil, para que puedas mantenerte conectado al mercado estés donde estés.";
$benefit_6_title = "Soporte al Cliente Local";
$benefit_6_text = "Nuestro equipo de soporte está disponible por chat, teléfono o correo electrónico. Personas reales están aquí para ayudarte en tu idioma, cuando lo necesites.";
$benefits_trust_title = "La Confianza de Usuarios de Todo el Mundo";
$benefits_trust_text = "Por esto es que tantos usuarios de cripto confían en $site_name. Miles de traders ya utilizan $site_name, y cada día se unen nuevas cuentas.";
$benefits_cta = "Registrarse";
$benefits_badge_1 = "SSL de 256 bits";
$benefits_badge_2 = "Pagos Seguros";
$benefits_badge_3 = "2FA";

// -- security section --
$security_label = "Seguridad";
$security_title = "Tus Fondos Están Seguros con $site_name";
$security_subtitle = "Cifrado de nivel bancario, pagos verificados y 98% de cold storage — tu dinero está protegido en cada paso.";
$security_1_title = "Proveedores de Pago Verificados";
$security_1_text = "Los pagos se procesan exclusivamente por proveedores certificados que cumplen con los estándares de seguridad internacionales. Tus datos de pago nunca se almacenan en nuestros servidores.";
$security_2_title = "Cifrado SSL de 256 bits";
$security_2_text = "Todos los datos intercambiados entre tu dispositivo y nuestra plataforma se cifran con TLS de 256 bits. Ningún tercero puede interceptarlos ni leerlos.";
$security_3_title = "98% Cold Storage";
$security_3_text = "El 98% de los activos se mantienen en carteras offline, sin conexión a internet. Nadie puede acceder a ellas de forma remota.";
$security_4_title = "Autenticación Multifactor";
$security_4_text = "Solo tú puedes acceder a tu cuenta. Cada inicio de sesión se verifica mediante un segundo paso que solo tú controlas.";
$security_5_title = "Monitoreo de Cuenta";
$security_5_text = "Cada inicio de sesión, transacción o cambio de configuración activa una notificación instantánea, así siempre sabes lo que está pasando en tu cuenta.";
$security_6_title = "Protección de Contraseña";
$security_6_text = "Las contraseñas se almacenan de forma ilegible e irreversible. Técnicamente no tenemos forma de ver tu contraseña.";
$security_cta_title = "¡Obtén una Guía Gratuita!";
$security_cta_text = "Obtén nuestra guía gratuita para principiantes y empieza a operar hoy.";
$security_cta_button = "Registrarse";
$security_badge_1 = "98% Cold Storage";
$security_badge_2 = "Pagos Verificados";
$security_badge_3 = "Cifrado";

// -- how it works section --
$how_label = "Cómo Funciona";
$how_title = "Cómo Funciona";
$how_1_title = "Regístrate";
$how_1_text = "Haz clic en el botón «Abrir Cuenta» y completa el formulario de registro con tus datos (nombre, correo electrónico y número de teléfono). Solo toma un minuto.";
$how_2_title = "Deposita Fondos";
$how_2_text = "A continuación, financia tu cuenta. El depósito mínimo es de solo $app_price $app_currency. Puedes usar una tarjeta de crédito/débito, transferencia bancaria local o monederos electrónicos populares. (Consejo: empieza con una cantidad con la que te sientas cómodo).";
$how_3_title = "Empieza a Operar";
$how_3_text = "Una vez que tus fondos estén en tu cuenta, estarás listo para operar. Elige el activo que quieras (como BTC, SOL o USDT) y decide tu estrategia.";
$how_cta_label = "Cómo Funciona";
$how_cta_text = "¿Necesitas más información sobre cómo funciona el servicio?";
$how_cta_link = "Cómo Funciona";

// -- trust reasons section --
$trust_label = "Por Qué Operar con Nosotros";
$trust_intro = "Únete a miles de usuarios que ya operan con $site_name.";
$trust_1_title = "Totalmente Regulado";
$trust_1_text = "$site_name está debidamente registrado y cumple con las normativas financieras aplicables. Operamos bajo reglas estrictas para garantizar tu seguridad.";
$trust_2_title = "Seguridad Avanzada";
$trust_2_text = "Todos tus datos y fondos están cifrados y protegidos. Aplicamos una estricta protección de cuenta mediante cifrado SSL y autenticación de dos factores.";
$trust_3_title = "Operaciones Transparentes";
$trust_3_text = "Nunca ocultamos nuestras comisiones ni añadimos reglas sorpresa. Antes de cada transacción, ves exactamente qué comisiones se aplican.";
$trust_4_title = "Soporte Receptivo";
$trust_4_text = "Nuestro equipo de soporte está disponible por chat, teléfono o correo electrónico para responder a tus preguntas o resolver cualquier problema.";
$trust_cta_text = "Más información sobre las condiciones del mercado";
$trust_cta_link = "Por Qué Operar";

// -- testimonials section heading (individual reviews already set above) --
$testimonials_label = "Testimonios";
$testimonials_title = "La Confianza de Más de 4M de Traders";

// -- FAQ section heading --
$faq_label = "FAQ";

// -- lead magnet CTA block --
$leadmagnet_title = "¿Nuevo en el Trading?";
$leadmagnet_text1 = "Después de registrarte, recibirás nuestra guía gratuita,";
$leadmagnet_quote = "«10 Errores a Evitar al Operar con Criptomonedas»";
$leadmagnet_text2 = "repleta de consejos sencillos de nuestros analistas más experimentados para ayudarte a evitar los errores más comunes.";
$leadmagnet_text3 = "Simplemente introduce tus datos durante el";
$leadmagnet_link = "registro";
$leadmagnet_text4 = "y te la enviaremos directamente a tu bandeja de entrada. Muchos inversores empezaron con esta guía y dicen que marcó una verdadera diferencia.";
$leadmagnet_text5 = "El mercado no espera — ¡empieza hoy mismo!";

// -- pre-about CTA band --
$pre_about_title = "¿Listo para Tomar el Control de tu Trading?";
$pre_about_text = "Únete a $site_name hoy y descubre una plataforma construida para la claridad, la seguridad y los resultados.";
$pre_about_button = "Registrarse";

// -- pretest (quiz teaser) badges/CTA --
$pretest_title = "¡Empieza a Operar con $app_price $app_currency!";
$pretest_text = "¿Listo para probar $site_name? Regístrate ahora y únete a la creciente comunidad de inversores y traders de criptomonedas.";
$pretest_button = "Registrarse";
$pretest_badge_1 = "Seguro";
$pretest_badge_2 = "Regulado";
$pretest_badge_3 = "La Confianza de Más de 4M de Traders";

// -- about page --
$about_label = "Sobre Nosotros";
$about_title = "Sobre $site_name";
$about_intro = "$site_name no solo te da una plataforma de trading — te ayudamos a operar con claridad y confianza.";
$about_text_1 = "$site_name es la plataforma oficial de trading en línea, diseñada para hacer que el trading de criptomonedas sea accesible tanto para principiantes como para traders experimentados.";
$about_text_2 = "Combinamos análisis de mercado impulsado por IA con un panel simple y transparente, así siempre sabes exactamente dónde te encuentras.";
$about_text_3 = "Cada parte de la plataforma está construida en torno a la claridad: sin comisiones ocultas, sin jerga confusa, solo información clara sobre la que puedes actuar.";
$about_text_4 = "Nuestra plataforma te ahorra horas de conjeturas y te protege de alternativas opacas y de baja calidad. Creemos que el trading debe basarse en la precisión, no en la suerte.";

// -- contact page --
$contact_label = "Contáctanos";
$contact_title = "Contacta con $site_name";
$contact_subtitle = "¿Tienes una pregunta o necesitas ayuda? Estamos aquí para asesorarte y guiarte.";
$contact_text = "En $site_name, creemos que el éxito en el trading no tiene nada que ver con la suerte — depende de la precisión, la anticipación y las herramientas adecuadas.";
$contact_form_text = "Simplemente completa el formulario a continuación, y un miembro de nuestro equipo se pondrá en contacto contigo en breve.";
$contact_form_button = "Enviar Mensaje";

// -- footer navigation labels (geo-page footer, TZ items 12/16/18) --
$footnav_col_pages = "Páginas";
$footnav_col_support = "Soporte";
$footnav_col_legal = "Legal";
$footnav_col_company = "Empresa";
$footnav_home = "Inicio";
$footnav_sitemap = "Mapa del Sitio";
$footnav_conditions = "Condiciones de Uso";
$footnav_contact = "Contáctanos";
$footnav_signup = "Registrarse";
$footer_risk_warning = "Advertencia de Riesgo";

// -- geo-page footer legal disclaimer (single-paragraph variant used by
// the geo template's own footer layout; the two-paragraph TZ item 21
// text above -- $footer_disclaimer_p1/$footer_disclaimer_p2 -- covers
// the root pages) --
$footer_disclaimer = "$site_name ofrece contenido educativo e información general sobre los mercados financieros, el trading en línea y los activos digitales. Todos los materiales publicados en este sitio web están destinados únicamente a fines informativos y no deben considerarse asesoramiento financiero, de inversión o legal. El trading implica un riesgo significativo y puede no ser adecuado para todos los inversores. Invierte solo el dinero que puedas permitirte perder.";

// ============================================================
// Geo-language SUBPAGE fallback content (TZ item 16 cont.). Same
// rationale as the block above: conditions/contacts/faq/offer/
// privacy/product/risk-warning/sign.php share templates across the
// bg/cs/da/... stub folders and reference these vars directly.
// English fallback so every geo folder's subpages render complete.
// ============================================================

// -- shared form aliases (service-page forms reuse the hero disclaimer) --
$form_disclaimer_risk_note = "Lee también nuestra";
$form_text = $form_disclaimer_prefix;
$form_text_privacy = $form_privacy_link_label;
$form_text_privacy_and = $form_disclaimer_and;
$form_text_conditions = $form_terms_link_label;
$form_text_conditions_of = $form_disclaimer_of_site;
$form_text_risk_warning_note = $form_disclaimer_risk_note;
$form_submit = "Registrarse";

// -- generic breadcrumbs (sign-up / product pages) --
$breadcrumb_home = "Inicio";
$breadcrumb_current = "Registro / Inicio de Sesión";
$breadcrumb_product = "Producto";

// -- sign-up page official heading --
$official_heading = "Regístrate en la Plataforma Oficial {$site_name}™";
$official_description = "Crea tu cuenta gratuita para empezar a operar con criptomonedas en una plataforma segura y transparente.";

// -- product page: analytics banner --
$analytics_heading = "Opera de Forma Más Inteligente con $site_name";
$analytics_description = "Obtén datos de mercado claros en tiempo real e información basada en IA. Toma decisiones de trading informadas con confianza.";

// -- product page: dashboard preview --
$app_main_heading = "Tu Panel de Trading";
$app_feature_1_title = "Datos de Mercado en Vivo";
$app_feature_1_text = "Precios y gráficos en tiempo real al alcance de tu mano";
$app_feature_2_title = "Seguimiento de Cartera";
$app_feature_2_text = "Métricas completas sobre tu saldo y rendimiento";
$app_feature_3_title = "Vista Móvil";
$app_feature_3_text = "Optimizado para navegadores móviles";
$app_feature_4_title = "Listas de Seguimiento";
$app_feature_4_text = "Lleva un registro de los activos que estás vigilando";

// -- product page: capabilities --
$capabilities_main_title = "Qué Esperar";
$capabilities_feature_1_title = "Señales Impulsadas por IA";
$capabilities_feature_1_text = "Algoritmos avanzados analizan las señales del mercado y detectan oportunidades las 24 horas del día.";
$capabilities_feature_2_title = "Registro Rápido";
$capabilities_feature_2_text = "Regístrate en minutos con un proceso de registro seguro y sencillo.";
$capabilities_feature_3_title = "Seguridad Verificada";
$capabilities_feature_3_text = "El cifrado SSL de 256 bits, la 2FA y el 98% de cold storage protegen tus fondos en cada paso.";
$capabilities_feature_4_title = "Soporte Continuo";
$capabilities_feature_4_text = "Obtén soporte de nuestro equipo en cada paso — desde el registro hasta tu primera operación.";

// -- product page: stats strip --
$products_stats_currencies_v = "65+";
$products_stats_currencies_l = "Divisas Disponibles";
$products_stats_users_v = "4M+";
$products_stats_users_l = "Usuarios Registrados";
$products_stats_volume_v = "98+";
$products_stats_volume_l = "Países Compatibles";
$products_stats_countries_v = "24/7";
$products_stats_countries_l = "Acceso a Transacciones";

// -- product page: 3-step strip --
$step_1 = "Crea una cuenta";
$step_2 = "Deposita fondos";
$step_3 = "Empieza a operar con la estrategia que más te convenga";

// -- shared "last update" label (privacy page) --
$last_update = "Última actualización";

// -- FAQ page --
$faq_page_meta_title = "FAQ | Soporte de $site_name";
$faq_page_meta_description = "Respuestas a preguntas frecuentes sobre cómo funciona $site_name, los precios y cómo empezar.";
$faq_page_title = "FAQ";
$faq_page_breadcrumb_home = "Inicio";
$faq_page_breadcrumb_current = "FAQ";
$faq_page_help_title = "¿Cómo podemos ayudarte?";
$faq_1_q = "¿Cómo empiezo?";
$faq_1_a = "Crea tu cuenta, verifica tu dirección de correo electrónico y realiza tu primer depósito — los planes empiezan desde solo $app_price $app_currency.";
$faq_2_q = "¿Están seguros mi dinero y mis datos? ¿Es fiable $site_name?";
$faq_2_a = "Sí. Tus datos están protegidos por cifrado de 256 bits estándar en la industria, y tus fondos están asegurados con autenticación de dos factores y 98% de cold storage.";
$faq_3_q = "¿Puedo cerrar mi cuenta o retirar fondos en cualquier momento?";
$faq_3_a = "Sí. No hay restricciones sobre los retiros. Contacta a nuestro equipo de soporte en cualquier momento — te ayudaremos con tu cuenta o procesaremos tu retiro con prontitud.";
$faq_4_q = "¿Cómo sé si esta plataforma es adecuada para mí?";
$faq_4_a = "$site_name se creó tanto para principiantes absolutos como para traders experimentados que quieren operar de manera más eficiente — cada herramienta de la plataforma está diseñada para mantenerte informado y en control.";
$faq_5_q = "¿Necesito experiencia en trading para empezar?";
$faq_5_a = "No se requiere experiencia previa. Nuestro modo impulsado por IA se encarga del análisis por ti, y puedes cambiar al modo manual en cualquier momento si quieres más control.";

// -- contacts page --
$contacts_h3 = "Para preguntas técnicas o sobre tu cuenta, por favor contáctanos por correo electrónico";

// -- offer page (meta title/description already defined above) --
$offer_breadcrumb_home = "Inicio";
$offer_breadcrumb_current = "Oferta";
$offer_cta_h1 = "Empieza a Operar Hoy";
$offer_cta_text = "Listo en minutos: regístrate, financia tu cuenta y empieza a operar con criptomonedas en una plataforma segura y regulada.";
$offer_how_it_works_title = "Cómo Funciona";
$offer_official_platform_title = "Esta Es la Plataforma Oficial de Trading {$site_name}™";
$offer_official_platform_text = "Una forma confiable y transparente de operar con criptomonedas — con información en tiempo real y control total.";

// -- conditions of use page --
$conditions_meta_title = "Condiciones de Uso | $site_name";
$conditions_meta_description = "Lee las Condiciones de Uso oficiales del sitio web y la plataforma de trading de $site_name.";
$conditions_breadcrumb_home = "Inicio";
$conditions_breadcrumb_current = "Condiciones de Uso";
$conditions_h1 = "Condiciones de Uso";
$conditions_s1_title = "1. General";
$conditions_s1_text = "Este sitio web proporciona acceso a una plataforma de trading de criptomonedas en línea. El uso de la plataforma constituye la aceptación total de estos términos y de nuestra Política de Privacidad.";
$conditions_s2_title = "2. Elegibilidad";
$conditions_s2_text = "Los usuarios deben tener al menos 18 años y plena capacidad legal en su respectiva jurisdicción.";
$conditions_s3_title = "3. Acceso Restringido";
$conditions_s3_text = "El acceso puede estar restringido en jurisdicciones donde las normativas locales prohíban el tipo de servicio de trading que ofrecemos.";
$conditions_s4_title = "4. Uso Prohibido";
$conditions_s4_text = "Los usuarios no pueden hacer un mal uso del sistema, intentar acceder sin autorización a nuestros sistemas, ni realizar ingeniería inversa de nuestro software.";
$conditions_s5_title = "5. Propiedad Intelectual";
$conditions_s5_text = "Todo el código fuente, las interfaces de usuario y los activos de marca siguen siendo propiedad exclusiva de la empresa operadora.";
$conditions_s6_title = "6. Responsabilidad";
$conditions_s6_text = "Las herramientas de la plataforma se proporcionan «tal cual». No asumimos responsabilidad alguna por los resultados derivados de las propias decisiones de trading del usuario.";
$conditions_s7_title = "7. Servicios de Terceros";
$conditions_s7_text = "Las integraciones con proveedores de pago externos se realizan a través de conexiones seguras. Para depósitos y retiros, los usuarios tratan directamente con el proveedor que elijan.";
$conditions_s8_title = "8. Enlaces Externos";
$conditions_s8_text = "Los enlaces a recursos externos se proporcionan solo por conveniencia. No respaldamos ni garantizamos ningún software externo.";
$conditions_s9_title = "9. Disposiciones Varias";
$conditions_s9_text = "Nos reservamos el derecho de modificar estos términos o el servicio en cualquier momento, publicando los cambios en el sitio web.";

// -- privacy policy page (meta title/description already defined above) --
$privacy_breadcrumb_home = "Inicio";
$privacy_breadcrumb_current = "Política de Privacidad";
$privacy_page_h1 = "Política de Privacidad";
$privacy_intro = "Respetamos tu privacidad y procesamos los datos personales en pleno cumplimiento de los estándares internacionales y el RGPD europeo.";
$privacy_transparency_title = "Transparencia";
$privacy_transparency_text = "Divulgamos claramente cómo se procesan los datos de telemetría operativa. Contacta con soporte para más detalles.";
$privacy_usage_title = "Uso de Datos";
$privacy_usage_text = "Los datos se utilizan únicamente para proporcionar acceso, asegurar sesiones y cumplir con las obligaciones normativas.";
$privacy_rights_short_title = "Tus Derechos";
$privacy_rights_short_text = "Conservas todos los derechos para ver, actualizar o solicitar la eliminación de tus datos personales.";
$privacy_security_title = "Seguridad";
$privacy_security_text = "Utilizamos cifrado AES-256 y aislamiento de bases de datos para proteger los datos de telemetría operativa.";
$privacy_s1_title = "1. Recopilación de Datos";
$privacy_s1_text = "Recopilamos datos de telemetría de uso (dirección IP, parámetros del sistema, tipo de navegador), así como datos de verificación enviados por los usuarios.";
$privacy_s2_title = "2. Base Legal";
$privacy_s2_text = "El procesamiento se basa en el consentimiento explícito de los usuarios, los requisitos de cumplimiento normativo y la prestación del servicio.";
$privacy_s3_title = "3. Intercambio de Datos";
$privacy_s3_text = "Los datos nunca se comercializan. Las divulgaciones se limitan a entidades de compensación autorizadas y socios técnicos bajo un acuerdo de confidencialidad (NDA).";
$privacy_s4_title = "4. Cookies";
$privacy_s4_text = "Se utilizan cookies esenciales para la autenticación de sesión y la optimización de la interfaz.";
$privacy_google_choices = 'Gestiona tus preferencias de seguimiento a través de la <a href="http://www.google.com/settings/ads" target="_blank" rel="noopener">Configuración de Anuncios de Google</a> o utiliza el <a href="https://tools.google.com/dlpage/gaoptout" target="_blank" rel="noopener">Complemento de Exclusión de Google Analytics</a>. También puedes revisar las propias prácticas de datos de Google en su <a href="https://www.google.com/intl/en/policies/privacy/" target="_blank" rel="noopener">Política de Privacidad</a>.';
$privacy_s5_title = "5. Retención de Datos";
$privacy_s5_text = "Los datos personales se conservan solo durante el tiempo necesario para cumplir con los requisitos de acceso al sistema.";
$privacy_s6_title = "6. Transferencias Internacionales";
$privacy_s6_text = "Las transferencias de datos transfronterizas se realizan exclusivamente a través de canales cifrados y mediante cláusulas contractuales estándar.";
$privacy_s7_title = "7. Enlaces de Terceros";
$privacy_s7_text = "No somos responsables de las prácticas de privacidad de servicios externos de terceros enlazados desde nuestro sitio web.";
$privacy_s8_title = "8. Actualizaciones";
$privacy_s8_text = "Esta política puede revisarse periódicamente para reflejar cambios del sistema o legales.";
$privacy_rights_title = "Tus Derechos";
$privacy_rights_text = "Los usuarios tienen derecho a solicitar el acceso, la corrección, el procesamiento restringido o la eliminación completa de sus datos almacenados.";

// -- risk warning page --
$page_title_risk_warning = "Advertencia de Riesgo | $site_name";
$page_description_risk_warning = "Comprende los riesgos del trading y cómo $site_name te ayuda a gestionarlos de forma segura.";
$risk_warning_breadcrumb_home = "Inicio";
$risk_warning_breadcrumb_current = "Advertencia de Riesgo";
$risk_warning_title = "Advertencia de Riesgo";
$risk_warning_intro = "Comprender los riesgos es el primer paso hacia el trading con confianza.";
$risk_warning_ai_heading = "Cómo ayuda nuestro sistema de IA en la gestión de riesgos:";
$risk_warning_ai_1 = "<strong>Eficiencia Algorítmica y Trading Sin Emociones:</strong> Algoritmos avanzados analizan las señales del mercado para ejecutar operaciones de forma objetiva en el momento óptimo.";
$risk_warning_ai_2 = "<strong>Estrategias Basadas en Datos:</strong> Las estrategias se basan en patrones de mercado verificados y análisis en tiempo real en lugar de conjeturas.";
$risk_warning_ai_3 = "<strong>Configuración Flexible y Control Total:</strong> Ajusta tus parámetros de riesgo en cualquier momento. Rastrea todos los saldos y operaciones de forma transparente en tu panel — sin comisiones ocultas y sin restricciones en los retiros.";
$risk_warning_disclaimer = "<strong>Descargo de responsabilidad:</strong> El trading siempre conlleva riesgo. Los sistemas automatizados (incluida la IA) no garantizan beneficios, pueden fallar debido a errores de software o eventos de mercado inesperados, y requieren la supervisión del usuario. El rendimiento pasado no es un indicador de resultados futuros. Esta plataforma está destinada únicamente a fines informativos y de marketing y no constituye asesoramiento financiero.";
$risk_warning_s1_heading = "1. Riesgos Generales y Riesgos del Mercado de Criptomonedas";
$risk_warning_s1_1 = "Las criptomonedas son activos altamente volátiles y especulativos que se negocian las 24 horas del día y están sujetos a una supervisión regulatoria mínima en la mayoría de las jurisdicciones.";
$risk_warning_s1_2 = "Los valores pueden fluctuar drásticamente en periodos cortos, lo que podría resultar en una pérdida total del capital invertido.";
$risk_warning_s1_3 = "Los valores de mercado pueden verse significativamente afectados por cambios regulatorios, desarrollos técnicos, brechas de seguridad o eventos macroeconómicos más amplios.";
$risk_warning_s1_4 = "Algunos activos pueden perder todo su valor. Invierte solo el dinero que puedas permitirte perder.";
$risk_warning_s2_heading = "2. Riesgos de Ejecución, Liquidez y Apalancamiento";
$risk_warning_s2_1 = "<strong>Volatilidad del Mercado y Liquidez:</strong> Los movimientos extremos de precios (10-20%+ diarios) o la baja liquidez (especialmente en monedas más pequeñas) pueden provocar retrasos, interrupciones de la plataforma y un deslizamiento de ejecución significativo. Las órdenes de stop-loss no pueden garantizar la limitación de pérdidas en condiciones extremas.";
$risk_warning_s2_2 = "<strong>Riesgo de Apalancamiento y Margen:</strong> Los productos apalancados amplifican tanto las ganancias como las pérdidas, lo que significa que puedes perder más que tu depósito original. Aproximadamente el 70-80% de las cuentas de inversores minoristas pierden dinero al operar con productos apalancados.";
$risk_warning_s3_heading = "3. Riesgos Técnicos, de Ciberseguridad y de Terceros";
$risk_warning_s3_1 = "<strong>Factores Técnicos:</strong> El trading en línea conlleva inherentemente riesgos como interrupciones de la conectividad a internet, fallos de hardware/software e indisponibilidad del servicio.";
$risk_warning_s3_2 = "<strong>Ciberseguridad:</strong> Las cuentas de criptomonedas son objetivos frecuentes de phishing, malware e intentos de hackeo. Las transacciones son irreversibles; el compromiso de tus credenciales puede resultar en una pérdida permanente.";
$risk_warning_s3_3 = "<strong>Plataformas de Terceros:</strong> Este sitio web puede conectar a los usuarios con plataformas de terceros. No controlamos, respaldamos ni garantizamos su seguridad, operaciones o solvencia. Realiza siempre tu propia diligencia debida antes de depositar fondos en plataformas externas.";
$risk_warning_s4_heading = "4. Disposiciones Regulatorias, Fiscales y Finales";
$risk_warning_s4_1 = "<strong>Cumplimiento Legal e Impuestos:</strong> Los marcos regulatorios varían ampliamente y cambian rápidamente. Los usuarios son los únicos responsables de garantizar que su actividad de trading cumpla con la ley local, así como de cumplir con sus propias obligaciones fiscales.";
$risk_warning_s4_2 = "<strong>Sin Garantías de Beneficios:</strong> No existe un trading de criptomonedas «seguro» o libre de riesgo. Cualquier cifra de rendimiento o ejemplo de resultados es puramente hipotético.";
$risk_warning_s4_3 = "<strong>Idoneidad:</strong> Si no comprendes completamente los riesgos, dependes de recursos financieros necesarios, o estás operando con dinero prestado, el trading de criptomonedas no es adecuado para ti. En caso de duda, consulta a un asesor financiero independiente y autorizado.";
$risk_warning_contact = "<strong>Contacto:</strong> Si tienes preguntas sobre esta declaración o deseas enviar una consulta, ponte en contacto con nuestro equipo oficial de atención al cliente a través del formulario de contacto en nuestro sitio web.";

