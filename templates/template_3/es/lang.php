<?php
require __DIR__ . '/../lang.php';

// ==========================================
// SPANISH (es-ES) OVERRIDE
// Every human-visible string from the root lang.php is translated below.
// Some source strings (about/contact/conditions/private-policy/sign-up page
// titles & body copy) were already authored in Spanish in the root file —
// those are kept as-is / lightly polished rather than re-translated.
// Identity/config variables ($site_name, $site_url, $site_domain, $app_price,
// $app_currency, $rating_value, $rating_count, $review_count, $crypto_img,
// stock/crypto ticker symbols, and real public figures' names) are
// intentionally NOT overridden here — they stay inherited from the root file.
// ==========================================
$site_lang = 'es-ES';
$form_language = 'es'; // matches this page's own language, not the offer's global default

$main_h1 = "Beneficio diario de <span>745 €</span> a <span>1.860 €</span> gracias a la plataforma de inversión inteligente";
$main_p = "Oferta limitada: regístrese ahora — <span>$country_name</span>";

// Nombres de los testimonios (femenino, femenino, masculino, femenino, masculino, masculino)
$feedback_strong_1 = "Lucía Fernández";
$feedback_strong_2 = "Carmen Ortiz";
$feedback_strong_3 = "Javier Molina";
$feedback_strong_4 = "Sofía Navarro";
$feedback_strong_5 = "Diego Ramírez";
$feedback_strong_6 = "Pablo Serrano";

$feedback_description_1 = "Nunca antes había usado una plataforma de inversión, pero $source hizo que empezar fuera increíblemente fácil. Nunca pensé que diría esto: el mundo de las inversiones a menudo puede parecer complicado. ¡Pero aquí es tan fácil ganar cifras que jamás habría imaginado posibles!";
$feedback_description_2 = "¡Esto es exactamente lo que esperaba! Su soporte y su sistema de alto rendimiento me han convencido por completo, ¡y lo seguirán haciendo para siempre! Todavía no puedo creerlo: en solo 30 días he ganado más de 15.000 €... ¡Muchísimas gracias!";
$feedback_description_3 = "Gané más de 650 euros el primer día, así que puedo decir con seguridad: ¡por fin he encontrado algo que realmente funciona! Estoy simplemente agradecida.";
$feedback_description_4 = "Solo quiero darles las gracias porque $source realmente cambió mi vida. ¡Pude dejar mi trabajo en pocas semanas!";
$feedback_description_5 = "¡Realmente funciona! Empecé a usar la plataforma hace solo unas semanas y ya he ganado más de lo que normalmente ganaría en meses de trabajo duro. ¡Increíble!";
$feedback_description_6 = "Me despidieron hace dos semanas. Pensé que sería el fin. ¡Pero ahora gano unos 3.000 euros a la semana! Puede que no parezca mucho, pero por primera vez en mucho tiempo, vuelvo a tener esperanza en un futuro estable. ¡Muchísimas gracias!";

// T,D MAIN
$page_title_main = "$source — Sitio Web Oficial | Plataforma de Trading";
$page_description_main = "Descubra $source, la plataforma de trading con inteligencia artificial. Análisis automático de criptomonedas, registro rápido y oportunidades de ganancia para usuarios en España.";

// ==========================================
// CHAT-QUIZ TRANSLATIONS & CONFIGURATION
// ==========================================

$quiz_consultant_name = 'Sophia';
$quiz_consultant_role = 'Asistente de incorporación';

$quiz_text_welcome   = "¡Hola! Soy $quiz_consultant_name, su asistente personal de incorporación en $site_name. ¡Excelentes noticias! Su acceso ha sido oficialmente preaprobado. Permítanos configurar ahora su perfil profesional.";
$quiz_text_q1 = "Para garantizar el pleno cumplimiento normativo y legal, confirme su país de residencia actual: $country_name";
$quiz_text_a1_yes    = "Sí, esta es mi residencia actual";
$quiz_text_a1_no     = "No";

$quiz_text_q2 = "Perfecto. Seleccione la categoría de edad correspondiente para encontrar los instrumentos financieros más adecuados:";

$quiz_text_q3        = "¿Dispone de una cuenta bancaria activa o de una tarjeta de crédito para recibir pagos de dividendos diarios?";
$quiz_text_a3_yes    = "Sí, dispongo de una cuenta activa";
$quiz_text_a3_no     = "Todavía no disponible";

$quiz_text_q4        = "Indique su principal fuente de ingresos personales. (Este parámetro ayuda a personalizar la configuración de gestión de riesgos del sistema.)";
$quiz_text_a4_1      = "Empleo por cuenta ajena / Autónomo";
$quiz_text_a4_2      = "Ingresos pasivos / Ahorros personales";
$quiz_text_a4_3      = "Otras fuentes";

$quiz_text_q5 = "¡Estupendo! El último paso es una breve verificación telefónica por parte de nuestro asesor para confirmar su registro. Las llamadas se realizan de 11:00 a 20:00. ¿Podrá atender la llamada?";
$quiz_text_a5_yes    = "Sí, este horario es conveniente para la llamada";
$quiz_text_a5_no     = "Por favor, inicien la llamada de inmediato";

$quiz_text_loader    = "Analizando las opciones solicitadas e inicializando los parámetros de configuración segura de la cuenta...";
$quiz_text_final_ttl = "¡Cuenta autorizada correctamente! 🎉 Su espacio de trabajo digital seguro está completamente configurado. Complete los últimos pasos de verificación a continuación para garantizar sus pagos diarios:";

$quiz_placeholder_fname = "Nombre";
$quiz_placeholder_lname = "Apellidos";
$quiz_placeholder_email = "Correo electrónico";
$quiz_placeholder_phone = "Número de teléfono";
$quiz_btn_submit = "Activar trading";
$quiz_text_typing       = "está escribiendo un mensaje...";
$quiz_text_processing   = "Procesando solicitud...";

// T,D ABOUT
$page_title_about = "Sobre Nosotros | $source – Plataforma de inversión segura y transparente";
$page_description_about = "Conozca $source: una plataforma de inversión automatizada y segura. Tecnología avanzada, soporte experto y transparencia para principiantes y traders experimentados.";

// T,D CONDITIONS
$page_title_conditions = "$source – Términos de uso y condiciones de la plataforma";
$page_description_conditions = "Descubra los términos y condiciones de $source. Uso seguro de la plataforma, responsabilidades de inversión, protección de datos y normativa vigente.";

// T,D CONTACT
$page_title_contact = "$source – Soporte confiable y asistencia rápida";
$page_description_contact = "¿Necesita ayuda con $source? Nuestro equipo de soporte le ayuda con cualquier consulta sobre su cuenta, pagos o la plataforma. Respuesta rápida y asistencia profesional en España.";

// T,D PRIVATE
$page_title_private = "Política de Privacidad | $source";
$page_description_private = "Conozca cómo $source recopila, utiliza y protege sus datos personales. Información sobre tratamiento de datos, seguridad, derechos de los usuarios y cumplimiento de la normativa RGPD.";

// T,D REGISTER
$page_title_register = "$source – Plataforma inteligente de trading con IA | Registro rápido";
$page_description_register = "Empiece con <?= $source ?> en solo unos minutos. Plataforma inteligente con tecnología de IA para operar de forma eficiente. Registro rápido, acceso sencillo y herramientas avanzadas para inversores.";


// форма
$contact_form_fname = "Su nombre";
$contact_form_lname = "Sus apellidos";
$contact_form_email = "Correo electrónico";
$contact_form_submit = "Regístrese ahora";


// header
$nav_investors = "Inversores";
$nav_steps = "Pasos";
$nav_trade = "Trading";
$nav_advantages = "Ventajas";
$nav_statistics = "Estadísticas";
$nav_feedback = "Opiniones";
$button_register = "Regístrese ahora";


// footer
$button_register = "Regístrese ahora";
$footer_about = "Sobre nosotros";
$footer_contact = "Contacto";
$footer_registration = "Registro";
$footer_terms = "Términos y Condiciones";
$footer_privacy = "Política de Privacidad";
$footer_rights = "$source – todos los derechos reservados";

// main
$leaders_badge = "Inversores";
$leaders_title = "Estos son algunos de los inversores que nos respaldan:";
$leader1_text = "Como inversor, siempre he creído que la independencia financiera es la base de la libertad personal. Por eso se creó esta plataforma basada en inteligencia artificial, pensada para hacer que invertir sea más sencillo y accesible. Mi visión es ofrecer a todos herramientas claras y eficaces para tomar decisiones informadas y construir con seguridad su propia estabilidad financiera.";
$leader1_name = "— Warren Buffett";
$leader1_position = "Uno de los inversores de más éxito de la historia";
$leader2_text = "El mundo de las finanzas está cambiando rápidamente, y la tecnología desempeña un papel clave en esta transformación. Creo que la unión entre la experiencia inversora y la inteligencia artificial crea nuevas oportunidades. Esta plataforma se desarrolló para hacer que invertir sea más accesible y transparente, ayudando a las personas a tomar decisiones informadas y a construir una estabilidad financiera a largo plazo.";
$leader2_name = "— Larry Fink";
$leader2_position = "CEO de BlackRock — la mayor gestora de activos del mundo";
$leader3_text = "Después de muchos años en el sistema bancario global, he visto cómo la tecnología puede cambiar la forma en que las personas gestionan su dinero. Esta plataforma utiliza inteligencia artificial para hacer que invertir sea más claro y accesible, ayudando a los usuarios a tomar decisiones financieras conscientes. Cuando la innovación y un enfoque responsable se unen, surgen verdaderas oportunidades de crecimiento y estabilidad financiera.";
$leader3_name = "— Jamie Dimon";
$leader3_position = "CEO de JPMorgan Chase — uno de los mayores bancos del mundo";


$steps_badge = "Pasos";
$steps_title = "Su nuevo comienzo empieza con tres sencillos pasos";
$step1_number = "Paso 1";
$step1_title = "Registro";
$step1_text = "Introduzca sus datos y reciba una llamada gratuita de un asesor de la plataforma para activar su cuenta";
$step2_number = "Paso 2";
$step2_title = "Invertir";
$step2_text = "Recargue su cuenta con al menos 250-270 euros";
$step3_number = "Paso 3";
$step3_title = "Empiece a ganar";
$step3_text = "¡Reciba sus primeros pagos el mismo día del registro! La plataforma protege su capital y sus datos personales.";
$steps_button = "Regístrese ahora";


$trades_badge = "Operaciones y beneficios";
$trades_title = "$source utiliza inteligencia artificial y algoritmos modernos para identificar únicamente las operaciones rentables";
$trade_btc_name = "BTC";
$trade_btc_value = "+ 9.071,50 €";
$trade_eth_name = "ETH";
$trade_eth_value = "+ 1.156,57 €";
$trade_ltc_name = "LTC";
$trade_ltc_value = "+ 90,04 €";
$trade_eos_name = "EOS";
$trade_eos_value = "+ 14,01 €";
$trade_xrp_name = "XRP";
$trade_xrp_value = "+ 0,60 €";


$advantages_badge = "Ventajas";
$advantages_title = "¡Regístrese hoy y obtenga acceso inmediato a este revolucionario sistema de trading!";
$advantages_card_badge = "Ventajas";
$adv1_title = "Fácil de usar";
$adv1_text = "$source se puede instalar en cualquier smartphone u ordenador en cuestión de segundos";
$adv2_title = "Funcionamiento fiable";
$adv2_text = "Procesos totalmente automatizados analizan en tiempo real todos los principales exchanges y permiten obtener el máximo beneficio";
$adv3_title = "Seguro y confidencial";
$adv3_text = "La tecnología blockchain garantiza a todos los participantes una tasa de éxito del 96,9 % con la máxima seguridad de los datos";


$statistics_badge = "Estadísticas";
$statistics_title = "Cifras que hablan por sí solas";
$statistics_description_top = "La transparencia es nuestro principio fundacional. Los ingresos diarios de la plataforma y el volumen de inversión en constante crecimiento confirman la estabilidad y fiabilidad de nuestro proyecto. Nuestra estrategia secreta de trading bursátil se basa en una cartera cuidadosamente seleccionada, elaborada mediante el análisis de miles de empresas líderes";
$stat1_value = "1,45 €";
$stat1_denomination = "Millones";
$stat1_title = "Inversiones actuales";
$stat2_value = "0,87 €";
$stat2_denomination = "Millones";
$stat2_title = "Ingresos totales";
$stat3_value = "0,29 €";
$stat3_denomination = "Miles de millones";
$stat3_title = "Ingresos de la plataforma";
$statistics_description_bottom = "Nuestro equipo de analistas profesionales garantiza resultados precisos con un riesgo mínimo. $source ofrece a todos los socios una oportunidad de ganancia estable y muy rentable";
$feedback = "Opiniones";
$recommendations = "Recomendaciones de nuestros clientes más fieles";


$join_title_main = "Dé forma a su futuro";
$join_title_accent = "– hoy mismo.";

$places_title = "Beneficio diario de <span style=\"white-space: nowrap\" data-js-deposit-multiply-round=\"3.1\">745 €</span> a <span style=\"white-space: nowrap\" data-js-deposit-multiply-round=\"7\">1.860 €</span> gracias a la plataforma de inversión inteligente";
$places_remaining_text = "Plazas restantes";
$places_button = "Regístrese ahora";


// about page
$about_title = "SOBRE NOSOTROS";
$about_paragraph_1 = "$source fue desarrollado con el objetivo de ofrecer a cada inversor —desde el principiante hasta el trader experimentado— un entorno seguro, moderno y transparente para la inversión automatizada en mercados financieros y criptomonedas. Creemos que el éxito sostenible se basa en la claridad, la apertura y la confianza. Por eso todos los procesos —desde el registro hasta el pago— se orientan a estos principios. Las decisiones se fundamentan en datos y deben ser comprensibles para los usuarios.";
$about_paragraph_2 = "Nuestro equipo reúne competencias de distintos ámbitos: desarrollo de sistemas de IA y algoritmos, análisis financiero, ciberseguridad y cumplimiento normativo. Probamos y mejoramos continuamente procesos y componentes —desde la calidad de los datos hasta la estabilidad del sistema y el análisis de señales. El objetivo es una plataforma que funcione de forma fiable en la práctica.";
$about_paragraph_3 = "La protección de sus datos personales y de su capital tiene alta prioridad. $source se rige por estándares de seguridad reconocidos y emplea cifrado moderno. Las comprobaciones periódicas de seguridad y los controles técnicos están destinados a ayudar a proteger la información y los accesos de forma fiable.";
$about_paragraph_4 = "La tecnología es importante, pero la orientación y el soporte también juegan un papel fundamental. Por ello ofrecemos asistencia personalizada para explicar funciones, clarificar objetivos y facilitar el uso de la plataforma. Recibirá ayuda de personas, no solo de respuestas automatizadas.";
$about_paragraph_5 = "Para nosotros, innovación significa mejora continua. Analizamos nuevos patrones de mercado, optimizamos modelos y ampliamos fuentes de datos para mejorar la eficiencia y la experiencia del usuario. Las actualizaciones se prueban con datos históricos y en ensayos controlados antes de su publicación.";
$about_paragraph_6 = "Muchos usuarios utilizan $source como un punto de entrada estructurado a la inversión automatizada. A menudo comienzan con capital reducido y un enfoque prudente, y amplían su uso paso a paso, acompañados de procesos claros y apoyo.";
$about_paragraph_7 = "En resumen: $source es más que una plataforma. Es un sistema que reúne tecnología, conciencia del riesgo y soporte. Nuestro objetivo es ofrecerle herramientas para actuar de forma estructurada y responsable, con una base transparente para sus decisiones.";


// contact
$contact_title = "CONTACTO";
$contact_paragraph_1 = "Nuestro equipo de soporte le ayuda de manera fiable y competente con cualquier consulta relacionada con $source. Tanto si solo se informa, como si ya está registrado o utiliza activamente la plataforma, le ayudamos a avanzar rápidamente.";
$contact_subtitle = "Cómo contactarnos";
$contact_paragraph_2 = "Le apoyamos de forma específica en todos los temas relacionados con su cuenta y el uso de $source. Nuestro equipo está disponible de lunes a viernes en horario laboral habitual (CET) y atiende las solicitudes con alta prioridad. Áreas típicas en las que ayudamos:";
$contact_list = [
    "Creación y verificación de su cuenta, así como gestión de cuenta (incluye configuración de perfil y de riesgo)",
    "Ayuda técnica para la plataforma, la app o en caso de errores",
    "Preguntas sobre ingresos y retiradas, tiempos de procesamiento y métodos de pago aceptados",
    "Información sobre funciones, estrategias, lógica de IA e instrumentos disponibles",
    "Comentarios, ideas y sugerencias de mejora para el desarrollo",
    "Soporte para otras cuestiones, desde generales hasta individuales"
];
$contact_paragraph_3 = "Utilice el formulario de contacto seguro más abajo y rellene todos los campos relevantes para que podamos gestionar su solicitud rápidamente. Por norma general recibirá una respuesta en días laborables en un plazo de 24 horas, a menudo antes. Para asuntos técnicos urgentes puede estar disponible un chat en vivo (laborables 9–18 h).";


// sign-up page
$home_title = "EMPIECE CON <span style=\"text-transform: uppercase\">$source</span> – LISTO PARA USAR EN SOLO UNOS MINUTOS.";


// conditions page
$terms_title = "TÉRMINOS DE USO";
$terms_1 = "Estas condiciones regulan el uso de la plataforma y son vinculantes para todos los usuarios registrados. Al registrarse o usarla, usted acepta estas condiciones. El uso está reservado exclusivamente a personas mayores de edad y con capacidad jurídica.";

$terms_2 = "La plataforma puede estar temporalmente limitada por mantenimiento técnico o circunstancias externas. Las funciones, contenidos u ofertas pueden ajustarse o desarrollarse.";

$terms_3 = "Todos los contenidos, tecnologías y análisis proporcionados están protegidos por la ley. No se permite su uso fuera de la plataforma sin autorización.";

$terms_4 = "Los usuarios deben facilitar datos correctos y actualizados. Las decisiones de inversión y de trading son responsabilidad propia. No se trata de asesoramiento financiero ni de una garantía de resultados concretos. Los mercados financieros conllevan riesgos, incluida la posible pérdida de capital.";

$terms_5 = "Los datos personales se tratan de acuerdo con la normativa vigente de protección de datos. Se aplican estándares adecuados de seguridad y cumplimiento.";

$terms_6 = "Nos reservamos el derecho a modificar los términos de uso. El uso continuado de la plataforma se considerará aceptación de las normas actualizadas.";


// private page
$privacy_title = "POLÍTICA DE PRIVACIDAD";

$privacy_1 = "La protección de sus datos personales es para nosotros una prioridad absoluta. Tratamos sus datos exclusivamente conforme a la normativa de protección de datos vigente, en particular la RGPD.";

$privacy_2 = "Solo recogemos la información necesaria para prestar nuestros servicios —como datos de contacto, cuenta, transacciones y uso técnico. En ciertos casos, una verificación de identidad puede ser legalmente obligatoria.";

$privacy_3 = "El tratamiento de datos se realiza para la gestión de cuentas, la ejecución de transacciones, la atención al cliente, la seguridad, la prevención del fraude y el cumplimiento de obligaciones legales. Recibirá información de marketing solo con su consentimiento expreso.";

$privacy_4 = "La comunicación de datos se realiza exclusivamente a proveedores cuidadosamente seleccionados (p. ej., proveedores de pagos o de TI) y solo en la medida necesaria. No se venden sus datos.";

$privacy_5 = "Empleamos medidas técnicas y organizativas de seguridad adecuadas. Los datos se conservan solo durante el tiempo exigido por la ley o mientras sea necesario para el propósito correspondiente.";

$privacy_6 = "Usted tiene en cualquier momento el derecho a acceder, rectificar, borrar o limitar el tratamiento de sus datos, así como a retirar consentimientos otorgados.";

$privacy_google_choices = 'Puede gestionar cómo utiliza Google la información de sus visitas a través de <a href="http://www.google.com/settings/ads" target="_blank" rel="noopener">Google Ads Settings</a>, excluirse de la publicidad basada en intereses con el <a href="https://tools.google.com/dlpage/gaoptout" target="_blank" rel="noopener">complemento de inhabilitación para navegadores de Google Analytics</a>, o consultar la <a href="https://www.google.com/intl/es/policies/privacy/" target="_blank" rel="noopener">Política de Privacidad de Google</a> para más información.';

$privacy_7 = "Puede encontrar más información y las formas de contacto en nuestra web.";

// ==========================================
// CALCULATOR SECTION
// ==========================================
$calc_badge = "Calculadora";
$calc_title = "Calcule su rentabilidad potencial con $source";
$calc_amount_label = "Importe de la inversión";
$calc_term_label = "Plazo de la inversión";
$calc_profit_label = "Beneficio estimado";
$calc_total_label = "Rentabilidad total proyectada";
$calc_btn = "Regístrese ahora";

// ==========================================
// SECURITY SECTION
// ==========================================
$security_badge = "La seguridad, lo primero";
$security_title = "Seguridad de nivel institucional para su capital y sus datos";

$security_card1_title = "Cifrado de protocolo AES-256";
$security_card1_desc = "Todos los flujos de datos y las credenciales de los usuarios se cifran mediante protocolos SSL/TLS de nivel militar y el estándar AES-256, evitando interceptaciones no autorizadas.";

$security_card2_title = "Cuentas de liquidez segregadas";
$security_card2_desc = "Los fondos de los usuarios se mantienen estrictamente separados de los activos operativos de la empresa y se almacenan directamente en fondos de liquidez regulados de nivel 1 y en exchanges asociados.";

$security_card3_title = "Integración API de solo lectura";
$security_card3_desc = "La ejecución automatizada se conecta exclusivamente mediante claves API cifradas sin ningún permiso de retirada. Sus activos nunca pueden salir de su monedero del exchange.";

$security_card4_title = "Salvaguardas de riesgo automatizadas";
$security_card4_desc = "Los límites de Stop-Loss integrados y la protección contra el slippage detienen la ejecución al instante ante una volatilidad anómala del mercado, preservando la integridad del saldo.";

// ==========================================
// SEO-TEXT SECTION
// ==========================================
$seo_badge = "Resumen";
$seo_title = "Tecnología de trading automatizado diseñada para los mercados financieros modernos";

$seo_p1 = "Operar en los mercados de activos digitales exige velocidad, precisión y un procesamiento de datos fiable. <strong>$source</strong> ofrece una infraestructura de trading automatizado avanzada, diseñada para eliminar el sesgo emocional, reducir la latencia de ejecución y analizar sistemáticamente las oportunidades del mercado las 24 horas del día.";

$seo_image_alt = "Motor de trading algorítmico analizando datos del exchange y generando una señal de trading con gestión de riesgo";

$seo_feature1_title = "Precisión algorítmica";
$seo_feature1_desc = "Ejecuta operaciones basándose en probabilidades estadísticas e indicadores de mercado en tiempo real.";
$seo_feature2_title = "Seguridad institucional";
$seo_feature2_desc = "Protocolos de datos cifrados y estricta protección de claves API para la seguridad de su cuenta.";
$seo_feature3_title = "Análisis en tiempo real";
$seo_feature3_desc = "Supervisión continua de los fondos de liquidez, los libros de órdenes y los movimientos de precios.";

$seo_subheading1 = "Cómo funciona el motor algorítmico";
$seo_p2 = "La plataforma funciona analizando datos complejos de los libros de órdenes en los principales exchanges globales. Mediante el escaneo continuo de liquidez y algoritmos de seguimiento de tendencias, <strong>$source</strong> identifica microineficiencias en los precios de los activos antes de que los traders manuales puedan reaccionar.";
$seo_p3 = "En lugar de basarse en conjeturas, los usuarios utilizan parámetros estructurados de gestión de riesgos que calculan dinámicamente los objetivos de beneficio y limitan la exposición. Este enfoque crea una estrategia de trading equilibrada, adecuada tanto para condiciones de mercado volátiles como para ciclos de tendencia habituales.";

$seo_subheading2 = "Características clave del sistema";
$seo_list1_strong = "Ejecución automatizada de órdenes:";
$seo_list1_text = "Elimina el retraso entre las señales de entrada y la ejecución de la operación.";
$seo_list2_strong = "Parámetros de riesgo personalizables:";
$seo_list2_text = "Establezca niveles predefinidos de Stop-Loss y límites diarios de exposición adaptados a sus objetivos personales.";
$seo_list3_strong = "Integración perfecta:";
$seo_list3_text = "Conéctese directamente con brókeres y exchanges verificados a través de interfaces API seguras de solo lectura.";

$seo_p4 = "Empezar requiere una configuración técnica mínima. Al combinar un acceso al mercado de nivel institucional con una interfaz intuitiva, <strong>$source</strong> ofrece un camino simplificado hacia la automatización estructurada del trading.";

// ==========================================
// FAQ SECTION (calculator/security block FAQ — distinct from any other FAQ on the page)
// ==========================================
$calc_faq_badge = "Preguntas frecuentes";
$calc_faq_title = "Preguntas frecuentes";

$calc_faq_q1 = "¿Es $source seguro y fiable de usar?";
$calc_faq_a1 = "Sí. <strong>$source</strong> funciona mediante protocolos API cifrados con permisos exclusivos de lectura y ejecución. El sistema nunca tiene acceso directo para retirar sus fondos, y todos los saldos de trading activos permanecen protegidos en su cuenta conectada de bróker o exchange.";

$calc_faq_q2 = "¿Cómo funcionan los algoritmos de trading automatizado?";
$calc_faq_a2 = "La plataforma escanea continuamente los libros de órdenes y la liquidez del mercado en los principales exchanges globales. Cuando los indicadores matemáticos señalan un movimiento de precio de alta probabilidad, el sistema activa automáticamente microórdenes en milisegundos, evitando el retraso humano y las decisiones emocionales.";

$calc_faq_q3 = "¿Cuál es el depósito inicial mínimo requerido?";
$calc_faq_a3 = "El capital mínimo necesario para iniciar el trading activo es de <strong>$app_price $app_currency</strong>. Este umbral de entrada garantiza que el algoritmo disponga de liquidez suficiente para dividir correctamente el tamaño de las posiciones y aplicar reglas automatizadas de gestión de riesgos.";

$calc_faq_q4 = "¿Necesito experiencia previa en trading para empezar?";
$calc_faq_a4 = "No se necesita experiencia financiera previa. <strong>$source</strong> es totalmente automático y está diseñado para gestionar la ejecución en el mercado, el cálculo de riesgos y el seguimiento de órdenes en su nombre tras una breve configuración inicial.";

$calc_faq_q5 = "¿Existen comisiones ocultas o costes de suscripción?";
$calc_faq_a5 = "No existen comisiones de suscripción mensual ocultas por el uso de la interfaz principal de trading. El registro es gratuito, y el 100 % de los fondos depositados se destina directamente a su capital de trading.";

// ==========================================
// RISK WARNING PAGE
// ==========================================
$page_title_risk_warning = "Advertencia de Riesgo | $source";
$page_description_risk_warning = "Conozca los riesgos del trading automatizado de criptomonedas con $source, incluyendo la volatilidad del mercado, el riesgo de ejecución y las consideraciones regulatorias.";
$risk_warning_title = "Advertencia de Riesgo";
$risk_warning_intro = "Comprender los riesgos es el primer paso hacia un trading con confianza.";

$risk_warning_ai_heading = "Cómo ayuda nuestro sistema de IA a gestionar el riesgo:";
$risk_warning_ai_1 = "<strong>Eficiencia algorítmica y trading sin emociones:</strong> Algoritmos avanzados analizan las señales del mercado para ejecutar operaciones de forma objetiva en los momentos óptimos.";
$risk_warning_ai_2 = "<strong>Estrategias basadas en datos:</strong> Las estrategias se basan en patrones de mercado verificados y análisis en tiempo real, en lugar de conjeturas.";
$risk_warning_ai_3 = "<strong>Configuración flexible y control total:</strong> Ajuste sus parámetros de riesgo en cualquier momento. Controle todos los saldos y operaciones de forma transparente en su panel, sin comisiones ocultas y con retiradas sin restricciones.";

$risk_warning_disclaimer = "<strong>Aviso legal:</strong> El trading siempre conlleva riesgo. Los sistemas automatizados (incluida la IA) no garantizan beneficios, pueden fallar debido a errores de software o eventos inesperados del mercado, y requieren supervisión por parte del usuario. La rentabilidad pasada no es indicativa de resultados futuros. Esta plataforma tiene fines puramente informativos y de marketing, y no ofrece asesoramiento financiero.";

$risk_warning_s1_heading = "1. Riesgos generales y del mercado de criptomonedas";
$risk_warning_s1_intro = "Las criptomonedas son activos especulativos altamente volátiles que operan las 24 horas del día con una supervisión regulatoria mínima en la mayoría de las jurisdicciones.";
$risk_warning_s1_1 = "Los valores pueden fluctuar drásticamente en periodos cortos, lo que puede conllevar la pérdida total del capital invertido.";
$risk_warning_s1_2 = "Los valores de mercado pueden verse muy afectados por cambios regulatorios, avances técnicos, brechas de seguridad o eventos macroeconómicos más amplios.";
$risk_warning_s1_3 = "Algunos activos pueden perder todo su valor. Invierta únicamente los fondos que pueda permitirse perder.";

$risk_warning_s2_heading = "2. Riesgos de ejecución, liquidez y apalancamiento";
$risk_warning_s2_1 = "<strong>Volatilidad del mercado y liquidez:</strong> Movimientos de precios extremos (10-20 % o más al día) o baja liquidez (especialmente en criptomonedas más pequeñas) pueden provocar retrasos, interrupciones de la plataforma y un deslizamiento de ejecución grave. Las órdenes de Stop-Loss no pueden garantizar límites de pérdida en condiciones extremas.";
$risk_warning_s2_2 = "<strong>Riesgos de apalancamiento y margen:</strong> Los productos apalancados amplifican tanto las ganancias como las pérdidas, lo que significa que puede perder más que su depósito inicial. Aproximadamente entre el 70 % y el 80 % de las cuentas de inversores minoristas pierden dinero al operar con productos apalancados.";

$risk_warning_s3_heading = "3. Riesgos técnicos, de ciberseguridad y de terceros";
$risk_warning_s3_1 = "<strong>Factores técnicos:</strong> El trading en línea conlleva inherentemente riesgos de desconexiones a internet, errores de hardware o software e indisponibilidad del servicio.";
$risk_warning_s3_2 = "<strong>Ciberseguridad:</strong> Las cuentas de criptomonedas son objetivos frecuentes de phishing, malware y ataques de piratería informática. Las transacciones son irreversibles; el compromiso de sus credenciales puede resultar en una pérdida permanente.";
$risk_warning_s3_3 = "<strong>Plataformas de terceros:</strong> Este sitio web puede conectar a los usuarios con plataformas de terceros. No controlamos, respaldamos ni garantizamos su seguridad, funcionamiento o solvencia. Realice siempre su propia diligencia debida antes de depositar fondos en plataformas externas.";

$risk_warning_s4_heading = "4. Disposiciones regulatorias, fiscales y finales";
$risk_warning_s4_1 = "<strong>Cumplimiento legal e impuestos:</strong> Los marcos regulatorios varían ampliamente y cambian rápidamente. Los usuarios son los únicos responsables de garantizar que su actividad de trading cumpla con las leyes locales y de cumplir con sus propias obligaciones fiscales.";
$risk_warning_s4_2 = "<strong>Sin garantías de beneficio:</strong> No existe un trading de criptomonedas \"seguro\" o sin riesgo. Cualquier cifra de rentabilidad o ejemplo de rendimiento es puramente hipotético.";
$risk_warning_s4_3 = "<strong>Idoneidad:</strong> Si no comprende plenamente los riesgos, depende de fondos esenciales u opera con dinero prestado, el trading de criptomonedas no es adecuado para usted. Consulte a un asesor financiero independiente y autorizado en caso de duda.";

$risk_warning_contact = "<strong>Contacto:</strong> Para cualquier pregunta relacionada con este aviso o para enviar una consulta, póngase en contacto con nuestro equipo oficial de atención al cliente a través del formulario de contacto de nuestro sitio web.";
$footer_risk_warning = "Advertencia de Riesgo";
