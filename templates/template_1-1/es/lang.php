<?php
require __DIR__ . '/../lang.php';
$site_lang = 'es-ES';
$form_language = 'es'; // matches this page's own language, not the offer's global default

// ===================================================================
// SPANISH (es-ES) TRANSLATION OVERRIDES
// Identity / config / pricing values ($site_name, $site_url, $site_domain,
// $app_price, $rating_value, $rating_count, $review_count, $app_currency,
// $adress_name, $site_gmail, $about_image, $footer_logo_name,
// $quiz_consultant_name, $footer_copyright) are intentionally NOT overridden.
// ===================================================================

$footer_contact_address = "Dirección: $adress_name";
$footer_contact_email = "Correo electrónico: $site_gmail";

$feedback_strong_1 = "Elias, 31, Hamburgo";
$feedback_strong_2 = "Sophie, 36, Múnich";
$feedback_strong_3 = "Lukas, 42, Colonia";
$feedback_strong_4 = "Miriam, 47, Stuttgart";

$page_title_main = "$source — Sitio web oficial | Plataforma de trading";
$page_description_main = "$source — Oficial y verificado. 🚀 Piloto automático con IA para la máxima seguridad. ✅ Plataforma de confianza con protección del capital y resultados constantes. 🔒 Empieza hoy mismo. ⭐";


// ==========================================
// CHAT-QUIZ
// ==========================================

$quiz_consultant_role = 'Asistente de incorporación';

$quiz_text_welcome   = "¡Hola! Soy $quiz_consultant_name, tu asistente personal de incorporación en $site_name. ¡Excelentes noticias! Tu acceso ya está oficialmente preaprobado. Permítenos configurar ahora tu perfil profesional.";
$quiz_text_q1 = "Para garantizar el pleno cumplimiento legal y normativo, confirma tu país de residencia actual: $country_name";
$quiz_text_a1_yes    = "Sí, esta es mi residencia actual";
$quiz_text_a1_no     = "No";

$quiz_text_q2 = "Perfecto. Selecciona la franja de edad que te corresponde para encontrar los instrumentos financieros más adecuados:";

$quiz_text_q3        = "¿Dispones de una cuenta bancaria activa o de una tarjeta de crédito para recibir los pagos diarios de dividendos?";
$quiz_text_a3_yes    = "Sí, tengo una cuenta activa";
$quiz_text_a3_no     = "Todavía no";

$quiz_text_q4        = "Indica cuál es tu principal fuente de ingresos personales. (Este dato nos ayuda a personalizar la configuración de gestión de riesgos del sistema).";
$quiz_text_a4_1      = "Empleo por cuenta ajena / Autónomo";
$quiz_text_a4_2      = "Ingresos pasivos / Ahorros personales";
$quiz_text_a4_3      = "Otras fuentes";

$quiz_text_q5 = "¡Genial! El último paso es una breve verificación telefónica con nuestro gestor para confirmar tu registro. Las llamadas se realizan de 11:00 a 20:00. ¿Podrás atender la llamada?";
$quiz_text_a5_yes    = "Sí, ese horario me viene bien para la llamada";
$quiz_text_a5_no     = "Prefiero recibir la llamada ahora mismo";

$quiz_text_loader    = "Analizando las opciones solicitadas e inicializando los parámetros de configuración segura de la cuenta...";
$quiz_text_final_ttl = "¡Cuenta autorizada correctamente! 🎉 Tu espacio de trabajo digital seguro está totalmente configurado. Completa los últimos pasos de verificación que aparecen a continuación para garantizar los pagos diarios:";

$quiz_placeholder_fname = "Nombre";
$quiz_placeholder_lname = "Apellidos";
$quiz_placeholder_email = "Correo electrónico";
$quiz_placeholder_phone = "Número de teléfono";
$quiz_btn_submit = "Activar el trading";
$quiz_text_typing       = "está escribiendo un mensaje...";
$quiz_text_processing   = "Procesando la solicitud...";


// ABOUT US PAGE
$page_title_about = "Sobre nosotros | $source – Nuestra misión y nuestro equipo";
$page_description_about = "Descubre qué impulsa a $source: nuestros valores, nuestros objetivos y el equipo de expertos que hay detrás de la plataforma. Conoce cómo combinamos seguridad, transparencia, cercanía con el usuario e innovación.";

// TERMS & CONDITIONS PAGE
$page_title_conditions = "Términos y condiciones | $source – Normas y directrices";
$page_description_conditions = "Consulta los Términos y condiciones de $source. Este documento detalla las responsabilidades del usuario y las políticas de la plataforma, y garantiza una transparencia total y plena claridad jurídica.";

// CONTACT PAGE
$page_title_contact = "Contacto | $source – Soporte y asistencia";
$page_description_contact = "¿Tienes dudas sobre el registro, tu cuenta o tus transacciones? Ponte en contacto con $source: nuestro equipo de soporte responde con rapidez, profesionalidad y fiabilidad.";

// FAQ PAGE
$page_title_faq = "Preguntas frecuentes | $source – Respuestas e información";
$page_description_faq = "Encuentra respuestas claras y fáciles de entender a las principales dudas sobre depósitos, retiradas, seguridad y trading en $source. Nuestro equipo de soporte está siempre disponible para ayudarte.";

// PRIVACY POLICY PAGE
$page_title_private = "Política de privacidad | Protección de tus datos personales";
$page_description_private = "Descubre cómo recopilamos, tratamos y protegemos tus datos personales. Nuestra Política de privacidad garantiza transparencia, seguridad y una gestión responsable de la información.";

// REGISTRATION PAGE
$page_title_register = "$source | Acceso a la plataforma | Registro rápido";
$page_description_register = "Regístrate en $source de forma rápida y sencilla y accede a todas las funciones de la plataforma en cuestión de minutos. Introduce tus datos y empieza ahora mismo.";

// ---------------------------------------------------------------------------------------------------

// HEADER FOR ALL PAGES
$text_why_invest = "¿Por qué invertir?";
$text_how_to_invest = "Cómo invertir";
$text_who_we_are = "Sobre nosotros";
$text_investment_risks = "Riesgos de inversión";
$text_benefits = "Ventajas";
$text_faq = "Preguntas frecuentes";
$text_log_in = "Iniciar sesión";
$text_sign_up = "Registrarse";

// ---------------------------------------------------------------------------------------------------

// FOOTER FOR ALL PAGES

$footer_link_why_invest = "¿Por qué invertir?";
$footer_link_how_to_invest = "Cómo invertir";
$footer_link_investment_risks = "Riesgos de inversión";
$footer_link_benefits = "Ventajas";
$footer_link_faq = "Preguntas frecuentes";
$footer_link_who_we_are = "Sobre nosotros";
$footer_link_contact = "Contacto";
$footer_link_privacy_policy = "Política de privacidad";
$footer_link_terms_conditions = "Términos y condiciones";
$footer_link_registration = "Registro";

$footer_contact_title = "Información de contacto";
$footer_lang_switcher_title = "Idioma";

$footer_description = "$source ofrece una plataforma de trading en línea fiable y segura, diseñada para que tu actividad financiera sea clara, transparente y eficiente. Tanto si das tus primeros pasos como si eres un inversor experimentado, nuestra solución combina herramientas avanzadas, soporte especializado y una interfaz intuitiva. Miles de usuarios de todo el mundo confían en $source por su transparencia, sus elevados estándares de seguridad y su enfoque centrado en el cliente. Proteger tus datos y tu capital sigue siendo nuestra máxima prioridad, respaldada por tecnologías de seguridad de última generación. Únete a la comunidad de $source e invierte con confianza.";

// ---------------------------------------------------------------------------------------------------

// FORMS (ALL SECTIONS)
$placeholder_fname = "Nombre";
$placeholder_lname = "Apellidos";
$placeholder_email = "Correo electrónico";
$button_sign_up = "Registrarse";

// ---------------------------------------------------------------------------------------------------

// HERO SECTION
$heading_main = "Plataforma $source";
$text_intro = "Comienza tu camino como inversor con $source, una plataforma inteligente que utiliza inteligencia artificial para invertir automáticamente en los mercados de acciones y criptomonedas. Empieza desde solo $currency y sin experiencia previa, aprovechando un análisis en tiempo real diseñado para optimizar los resultados.";

// WHY INVEST SECTION
$heading_reasons = "Por qué tiene sentido invertir con $source";
$text_protect_capital = "Protege tu capital de la inflación y construye una estrategia con visión de futuro";
$text_inflation = "La inflación reduce poco a poco el poder adquisitivo con el paso del tiempo. En lugar de dejar tus ahorros parados, una estrategia de inversión inteligente puede ayudarte a lograr un crecimiento a largo plazo. Los sistemas automatizados aportan estabilidad y contribuyen a construir una base financiera más sólida.";
$heading_auto_investing = "Inversión automatizada: no necesitas experiencia en los mercados";
$text_auto_investing = "$source gestiona tus inversiones con tecnología de IA avanzada. No hace falta analizar gráficos ni vigilar los mercados constantemente: el sistema detecta oportunidades en tiempo real y asigna el capital de forma estratégica. Invierte de manera eficiente y ahorra un tiempo valioso.";
$heading_min_invest = "Empieza a invertir desde $currency: sencillo y accesible";
$text_min_invest = "Con una inversión inicial desde tan solo $currency, accedes a la potente tecnología de IA que impulsa $source, concebida para favorecer un crecimiento sostenible. Ideal para quien quiere empezar sin grandes barreras de entrada.";
$heading_control = "Control total y transparencia absoluta";
$text_control = "Con $source, mantienes en todo momento el control total de tu capital. Puedes reinvertir o retirar tus beneficios cuando quieras. La plataforma es transparente, justa y no aplica comisiones ocultas.";
$button_signup = "Regístrate ahora";

// CALCULATOR SECTION
$text_expected_returns = "¿Qué rentabilidad realista se puede alcanzar con $source?";
$text_my_investment = "MI INVERSIÓN:";
$text_usage_period = "PERIODO:";
$text_days = "Días";

// HOW AI INVESTING WORKS
$text_h2_ai_investments = "Cómo funciona la inversión con IA en $source";
$text_h3_registration = "Registro rápido: empieza con $source en cuestión de minutos";
$text_p_registration = "Tras el registro, contarás con el acompañamiento de un asesor de cuenta dedicado. Por lo general, tu cuenta estará lista para usar en tan solo unos minutos.";
$text_h3_trading_approach = "Estrategia personalizada para obtener resultados constantes";
$text_p_trading_approach = "Con $source dispones de una estrategia de inversión adaptada a tus objetivos financieros y a tu perfil de riesgo, pensada para lograr un crecimiento estable y sostenible.";
$text_h3_ai_trading = "Supervisión automática del mercado y decisiones tomadas por IA";
$text_p_ai_trading = "$source analiza los mercados en tiempo real con inteligencia artificial avanzada, identifica oportunidades y ejecuta las operaciones automáticamente con precisión y eficiencia, sin ninguna intervención manual.";
$text_h3_profit_flexibility = "Gestión flexible de los beneficios";
$text_p_profit_flexibility = "Decide en cualquier momento si prefieres retirar tus beneficios o reinvertirlos para impulsar el crecimiento futuro. Tu capital sigue estando siempre disponible.";

// RISK MANAGEMENT
$text_h2_risk_control = "Gestión del riesgo y protección del capital con $source";
$text_h3_ai_analysis = "Análisis inteligente de los mercados con IA de autoaprendizaje";
$text_p_ai_analysis = "$source emplea algoritmos avanzados de autoaprendizaje capaces de procesar enormes volúmenes de datos en tiempo real: movimientos de precios, volumen de negociación, noticias, sentimiento en redes sociales, indicadores macroeconómicos y patrones técnicos del mercado. La IA detecta oportunidades ocultas, evalúa probabilidades y filtra automáticamente las condiciones de mercado de alto riesgo para generar señales de trading precisas y objetivas. El sistema se adapta de forma continua a la evolución de los mercados y equilibra la rentabilidad potencial con la exposición al riesgo para sostener una estrategia de inversión sólida a largo plazo.";
$text_h3_custom_risk = "Un perfil de riesgo personalizado y adaptado a ti";
$text_p_custom_risk = "Cada inversor tiene objetivos distintos. Algunos priorizan el crecimiento, mientras que otros se centran en preservar el capital. $source te permite personalizar tu perfil de riesgo, desde estrategias conservadoras hasta enfoques equilibrados u orientados al crecimiento. Una vez elegido, la IA optimiza de forma continua factores como el tamaño de las posiciones, los niveles de stop-loss, los objetivos de take-profit y la frecuencia de las operaciones. Tu estrategia se mantiene siempre alineada con tus objetivos y con tu nivel de comodidad.";
$text_h3_transparency = "Transparencia total y control absoluto de tu capital";
$text_p_transparency = "La transparencia es un principio fundamental de $source. Cada operación —compras, ventas, ajustes y comisiones— queda registrada y se muestra en tiempo real. No hay cargos ocultos ni sorpresas inesperadas. Tu panel de control te ofrece una visión clara del saldo de la cuenta, el historial de transacciones, las pérdidas y ganancias, las estadísticas y la exposición al riesgo. Tú mantienes el control mientras la plataforma trabaja por ti.";

// BENEFITS
$text_h2_benefits = "Las ventajas de $source: invierte de forma sistemática para crecer a largo plazo";
$text_h3_ai_investing = "Invierte con IA avanzada: preciso y sin esfuerzo";
$text_p_ai_investing = "No necesitas dedicar horas a estudiar gráficos ni a seguir las noticias financieras. La IA de $source trabaja las 24 horas del día: analiza miles de señales de mercado, identifica patrones en milisegundos, anticipa movimientos con una precisión notable y ejecuta las operaciones en el momento óptimo. Disfruta de la inversión algorítmica profesional sin necesidad de conocimientos técnicos.";
$text_h3_easy_investing = "Invertir de forma sencilla y segura, al alcance de todos";
$text_p_easy_investing = "$source está diseñada para que invertir sea accesible sea cual sea tu experiencia o tu capital disponible. La plataforma cuenta con una interfaz intuitiva, unos pasos de configuración muy sencillos y contenidos formativos fáciles de entender disponibles en tu idioma. Incluso quienes invierten por primera vez pueden activar su primera estrategia automatizada en 10–15 minutos. Además, siempre tendrás a tu disposición videotutoriales, guías y un servicio de atención al cliente ágil.";
$text_h3_support = "Un soporte dedicado y centrado en tu éxito";
$text_p_support = "Tras tu primer depósito, se te asignará un asesor personal que te ayudará a definir tu perfil de riesgo, te explicará las funciones de la plataforma, te recomendará unos parámetros iniciales y te acompañará durante toda tu experiencia con $source.";
$text_h3_opportunities = "Potencial ilimitado: un crecimiento que escala con tu capital";
$text_p_opportunities = "Con $source, tu capital sigue trabajando incluso mientras viajas, descansas o duermes. La optimización automática y la reinversión de los beneficios favorecen el crecimiento compuesto a largo plazo. Sin decisiones emocionales y sin vivir pendiente de la pantalla: basta con revisar tus resultados de vez en cuando y disponer de tus beneficios cuando lo necesites. Es una forma práctica de construir una fuente sostenible de ingresos pasivos.";

// TESTIMONIALS
$feedback_h2_title = "Lo que dicen nuestros usuarios";

$feedback_h3_1 = "De $currency a unos ingresos extra fiables";
$feedback_p_1 = "No tenía ninguna experiencia previa invirtiendo y, aun así, todo funcionó de forma automática. En poco tiempo empecé a ver resultados positivos y ahora cuento con una fuente estable de ingresos adicionales.";

$feedback_h3_2 = "Perfecto para principiantes: sencillo y eficaz";
$feedback_p_2 = "Empezar con $source fue sorprendentemente fácil. Gracias al acompañamiento personalizado, ahora obtengo resultados constantes y sin estrés innecesario.";

$feedback_h3_3 = "Por fin mi capital trabaja para mí";
$feedback_p_3 = "En lugar de dejar mis ahorros parados, ahora invierto de forma inteligente. $source ofrece un rendimiento constante sin exigirme atención ni esfuerzo continuos.";

$feedback_h3_4 = "Libertad financiera esté donde esté";
$feedback_p_4 = "Quería poder viajar sin dejar de generar ingresos. Con $source, puedo seguir mis inversiones y disponer de mis beneficios desde cualquier parte del mundo.";

// PARTNERS
$partners_h2_title = "Socios y colaboraciones estratégicas";


// FAQ & CONTACT
$faq_h2_title = "Preguntas frecuentes: respuestas claras y directas";
$contact_h2_title = "Ponte en contacto con nosotros";

$lang['faq_q1'] = '¿Cuánto capital necesito para empezar en %s?';
$lang['faq_a1'] = 'Puedes empezar desde solo %s. Muchos usuarios comienzan con un importe reducido para familiarizarse con la plataforma y van aumentando su inversión de forma progresiva en función de sus objetivos y de su tolerancia al riesgo.';

$lang['faq_q2'] = '¿Cuánto tardan las retiradas en %s?';
$lang['faq_a2'] = 'Las solicitudes de retirada se procesan normalmente en un plazo de 24 horas. Después, según tu proveedor de pagos y tu entidad bancaria, los fondos pueden tardar entre 1 y 3 días hábiles en llegar.';

$lang['faq_q3'] = '¿Cómo protege %s mi inversión?';
$lang['faq_a3'] = 'Como plataforma de inversión moderna, %s aplica varias capas de seguridad: transmisión cifrada de los datos, procedimientos de verificación de la cuenta y supervisión continua del riesgo. Además, puedes ajustar la configuración de seguridad desde tu perfil para reforzar aún más la protección de tu cuenta.';

$lang['faq_q4'] = '¿Necesito experiencia previa para utilizar %s?';
$lang['faq_a4'] = 'En absoluto. %s está diseñada para que cualquier principiante pueda utilizarla. La plataforma te guía en cada paso de la configuración y del uso, sin dejar de permitirte personalizar los ajustes cuando quieras tener un mayor control sobre tu estrategia de inversión.';

// ---------------------------------------------------------------------------------------------------

// ABOUT US PAGE
$about_heading = "Sobre nosotros";

$about_text_1 = "$source nació con una misión clara: ofrecer a todos los inversores —desde quienes empiezan de cero hasta los profesionales más experimentados— un entorno seguro, moderno y totalmente transparente para invertir de forma automatizada en acciones y criptomonedas. Creemos que el éxito a largo plazo en los mercados financieros se construye sobre la claridad, la apertura y la confianza mutua, y nunca sobre el azar. Por eso, cada interacción con la plataforma, desde el registro hasta la retirada de beneficios, se rige por estos principios. Todos los procesos, transacciones y decisiones de inversión se basan en datos objetivos y son transparentes, sin mecanismos ocultos ni procedimientos poco claros.";

$about_text_2 = "Nuestro equipo reúne a especialistas altamente cualificados: desarrolladores de IA y de trading algorítmico, analistas financieros con amplia experiencia en los mercados internacionales, expertos en ciberseguridad y profesionales del cumplimiento normativo. No nos limitamos a crear tecnología: supervisamos, probamos y mejoramos continuamente cada componente de la plataforma. Desde la calidad de los datos de mercado en tiempo real y la estabilidad de la infraestructura de servidores hasta la precisión de las señales de trading, cada elemento se somete a rigurosos controles de calidad y a auditorías independientes. Nuestro objetivo es ofrecer una innovación fiable, replicable y con sentido, que aporte valor real a nuestros usuarios.";

$about_image_alt = "Equipo";

$about_text_3 = "Proteger tus datos personales y tus activos financieros es una de nuestras máximas prioridades. $source opera conforme a estándares de seguridad reconocidos internacionalmente, incluido el cumplimiento del RGPD y de la norma PCI-DSS, y utiliza tecnologías de cifrado avanzadas como TLS 1.3+ y AES-256. Los fondos de los clientes se mantienen en cuentas segregadas en entidades financieras reguladas. Las pruebas de penetración independientes y las evaluaciones de seguridad integrales contribuyen a que la información y los activos de los usuarios estén protegidos a un nivel equiparable al de los principales sistemas bancarios y de inversión.";

$about_text_4 = "La tecnología es esencial, pero sabemos que invertir con éxito depende de mucho más que de los algoritmos. Por eso combinamos una automatización potente con una atención personal excepcional. A cada usuario registrado se le asigna un asesor de cuenta dedicado: un profesional cualificado que le ayuda a adaptar la estrategia a sus objetivos, le explica las funciones de la plataforma, resuelve sus dudas y le acompaña de forma continua. Nada de chatbots anónimos: solo personas reales comprometidas con tu progreso financiero.";

$about_text_5 = "Para nosotros, la innovación no es una simple palabra de moda, sino un compromiso diario. Nuestro equipo estudia constantemente los nuevos comportamientos del mercado, mejora los modelos de aprendizaje automático, integra nuevas fuentes de información y desarrolla funciones que hacen que invertir sea más eficiente. Cada mejora se prueba con datos históricos y en entornos reales controlados antes de ponerse a disposición de los usuarios. No prometemos milagros ni resultados garantizados: ofrecemos herramientas avanzadas diseñadas para que los inversores ganen ventaja competitiva en unos mercados en los que la velocidad, la precisión y la capacidad de adaptación marcan la diferencia.";

$about_text_6 = "Para miles de usuarios, $source ha supuesto su primer paso serio en la inversión automatizada. Muchos empezaron con un capital modesto y un perfil de riesgo conservador, y fueron ampliando su cartera poco a poco gracias a los resultados constantes, la transparencia y el acompañamiento personalizado. Nos enorgullece abrir nuevas oportunidades financieras no solo a los inversores experimentados, sino también a quienes en su día consideraron que invertir era demasiado complejo, exigía demasiado tiempo o quedaba fuera de su alcance. Con una tecnología verificada y un equipo dedicado a tu lado, dar el primer paso puede resultar sencillo y seguro.";

$about_text_7 = "En definitiva, $source es mucho más que una plataforma de trading. Es un ecosistema completo construido sobre la transparencia, la profesionalidad y la confianza. Al combinar inteligencia artificial de vanguardia con experiencia humana, una gestión disciplinada del riesgo y un soporte dedicado, aspiramos a ser un socio fiable a largo plazo que ayude a nuestros usuarios a construir y hacer crecer su futuro financiero. Con $source no inviertes a ciegas: inviertes con método, con confianza y con el control absoluto de tus decisiones.";


// ---------------------------------------------------------------------------------------------------
// TERMS & CONDITIONS
$terms_heading = "Términos y condiciones";

$terms_text_1 = "Este documento establece las condiciones generales (los «Términos») que regulan el uso de la plataforma $source. Define los derechos y las obligaciones entre tú, como usuario, y el operador de la plataforma. Te rogamos que leas estos Términos con atención y en su totalidad antes de utilizar la plataforma, abrir una cuenta o realizar cualquier operación. Constituyen la base jurídica de tu relación con la plataforma y son vinculantes para ambas partes.";

$terms_text_2 = "Al registrarte, iniciar sesión, utilizar cualquier función de la plataforma o llevar a cabo cualquier actividad en $source, aceptas de forma expresa e íntegra estos Términos y condiciones. La plataforma solo puede ser utilizada por personas mayores de 18 años con plena capacidad jurídica para celebrar contratos vinculantes. Los menores de edad y las personas sin plena capacidad jurídica no están autorizados a utilizar la plataforma. Si sospechamos que se ha incumplido este requisito de edad, nos reservamos el derecho de suspender, restringir o cerrar de forma definitiva la cuenta correspondiente.";

$terms_text_3 = "El funcionamiento de la plataforma puede verse afectado ocasionalmente por interrupciones técnicas, tareas de mantenimiento, actualizaciones de software o cortes del servicio derivados de factores como la volatilidad del mercado, una mayor carga de los servidores o acontecimientos externos. Aunque nos esforzamos por mantener un alto nivel de disponibilidad, no es posible garantizar un acceso ininterrumpido. Las funciones, los algoritmos, las estructuras de precios y los mercados disponibles pueden ampliarse, modificarse, restringirse o suspenderse en cualquier momento, sin que ello genere derecho a reclamación alguna frente a $source.";

$terms_text_4 = "Todos los contenidos disponibles en la plataforma —textos, gráficos, elementos de diseño, software, algoritmos, marcas, logotipos y análisis generados por IA— están protegidos por la legislación sobre propiedad intelectual y son propiedad de $source o de sus licenciantes. Queda estrictamente prohibida cualquier reproducción, distribución, comunicación pública, modificación o uso comercial sin nuestro consentimiento previo por escrito, y podrá dar lugar a responsabilidad civil o penal.";

$terms_text_5 = "Como usuario, eres responsable de que toda la información que nos facilites —datos identificativos, información de contacto y datos de pago— sea veraz, completa y esté actualizada. Facilitar información falsa, engañosa o incompleta puede dar lugar a restricciones en la cuenta, retrasos en las retiradas, la suspensión del servicio o acciones legales. Los datos personales se tratan exclusivamente conforme a nuestra Política de privacidad y a la normativa de protección de datos aplicable. Mantenemos elevados estándares de seguridad, confidencialidad y transparencia.";

$terms_text_6 = "Todas las decisiones de inversión y de trading adoptadas a través de $source, ya se ejecuten manualmente o mediante la automatización con IA, son responsabilidad exclusiva del usuario y se asumen por su cuenta y riesgo. $source proporciona la infraestructura técnica y las herramientas de análisis, pero no ofrece asesoramiento financiero personalizado, recomendaciones de inversión ni garantías de beneficio. Los mercados financieros, incluidos los de acciones y criptomonedas, pueden ser muy volátiles y provocar la pérdida parcial o total del capital invertido. Los resultados pasados nunca deben considerarse un indicador fiable de resultados futuros. Invierte únicamente el dinero que puedas permitirte perder.";

$terms_text_7 = "Nos reservamos el derecho de modificar, actualizar o completar estos Términos en cualquier momento para adaptarlos a novedades regulatorias, cambios tecnológicos o nuevas exigencias del mercado. Los usuarios serán informados con antelación, por lo general al menos 14 días antes de que los cambios entren en vigor, por correo electrónico, mediante notificaciones en la plataforma o a través de avisos en el sitio web. El uso continuado de la plataforma tras la entrada en vigor de cualquier modificación implica la aceptación de los Términos actualizados. Si se introducen cambios sustanciales, podrás optar por cerrar tu cuenta.";

$terms_text_8 = "La seguridad y la transparencia son principios fundamentales de nuestra actividad. Utilizamos tecnologías de cifrado avanzadas, realizamos auditorías de seguridad periódicas, mantenemos los fondos de los clientes en cuentas segregadas y aplicamos estrictos procedimientos de cumplimiento, incluidos los controles KYC y AML, para ofrecer el máximo nivel de protección posible. Todas las actividades y operaciones quedan documentadas de forma clara y transparente. Nos comprometemos a prestar un servicio justo, honesto y orientado al cliente, porque tu confianza es nuestro activo más valioso.";

// ---------------------------------------------------------------------------------------------------

// CONTACT PAGE
$contact_heading = "Contacta con nosotros";

$contact_intro = "Nuestro equipo de soporte está a tu disposición para resolver cualquier duda o incidencia relacionada con $source. Tanto si buscas información, si ya te has registrado o si utilizas la plataforma a diario, nos comprometemos a ofrecerte una atención profesional y personalizada siempre que la necesites.";

$contact_how_to = "Cómo contactar con nosotros";

$contact_how_to_text = "Ofrecemos un soporte rápido y preciso para todo lo relacionado con tu cuenta y con tu experiencia en $source. Nuestro equipo atiende de lunes a viernes en horario comercial (CET) y gestiona cada consulta con rigor y profesionalidad. Estas son algunas de las cuestiones en las que podemos ayudarte:";

$contact_list_1 = "Registro, verificación y gestión completa de la cuenta, incluidos los ajustes del perfil y de la configuración de riesgo";
$contact_list_2 = "Asistencia técnica sobre el uso de la plataforma, el funcionamiento de la aplicación o la resolución de incidencias";
$contact_list_3 = "Dudas sobre depósitos, retiradas, plazos de procesamiento y métodos de pago admitidos";
$contact_list_4 = "Información detallada sobre las funciones de la plataforma, las estrategias de inversión, los algoritmos de IA y las herramientas de trading disponibles";
$contact_list_5 = "Comentarios, sugerencias e ideas que nos ayuden a mejorar y ampliar la plataforma";
$contact_list_6 = "Atención para cualquier otra consulta, desde preguntas generales hasta asistencia personalizada";

$contact_send_message = "Enviar un mensaje";

$contact_send_message_text = "Utiliza el formulario de contacto seguro que encontrarás más abajo para enviarnos tu consulta. Completa todos los campos pertinentes para que podamos tramitar tu solicitud con la mayor precisión y rapidez posibles. En días laborables solemos responder en un plazo de 24 horas y, a menudo, mucho antes. Para asuntos técnicos urgentes, el chat en directo está disponible de lunes a viernes de 9:00 a 18:00.";

$contact_info = "Información de contacto";

$contact_info_text = "Nuestro objetivo es que tu experiencia con $source sea lo más fluida, cómoda y satisfactoria posible. Damos mucha importancia a una comunicación clara, a la transparencia y a un soporte orientado a soluciones. Puedes contactar con nosotros mediante el formulario que aparece a continuación, por correo electrónico o, en determinados casos, por teléfono. Tu satisfacción y tu seguridad siguen siendo nuestras máximas prioridades.";

// ---------------------------------------------------------------------------------------------------

// FAQ PAGE
$faq_page_heading = "Preguntas frecuentes – FAQ";
$faq_page_subheading = "¿Tienes dudas? Aquí encontrarás las respuestas.";
$faq_page_intro_1 = "En esta sección encontrarás respuestas concisas a las dudas más habituales sobre cuentas, pagos, seguridad y uso de la plataforma.";
$faq_page_intro_2 = "Nuestro objetivo es guiarte paso a paso y despejar cualquier incertidumbre desde el primer momento.";
$faq_page_intro_3 = "Si necesitas más ayuda, nuestro equipo de soporte está siempre disponible para ofrecerte atención personalizada.";
$faq_page_section_heading = "FAQ: respuestas a las dudas más frecuentes de nuestros usuarios";


// ---------------------------------------------------------------------------------------------------
// PRIVACY POLICY
$private_policy_heading = "Política de privacidad";

$private_policy_intro = "En $source, proteger tus datos personales y tratarlos de forma responsable es una prioridad absoluta. Tratamos la información con transparencia, con finalidades claramente definidas y conforme a la normativa de protección de datos aplicable. Esta Política de privacidad explica qué información recopilamos, por qué la recopilamos, durante cuánto tiempo la conservamos y qué medidas adoptamos para mantenerla segura.";

$private_policy_section_1_heading = "1. Responsable del tratamiento";
$private_policy_section_1_text = "El operador del sitio web y de la plataforma $source actúa como responsable del tratamiento de tus datos personales. En este sitio web encontrarás los datos de contacto pertinentes y la información adicional sobre la empresa. Si tienes cualquier duda relacionada con la privacidad, puedes dirigirte a nuestro equipo de protección de datos.";

$private_policy_section_2_heading = "2. Información que recopilamos";
$private_policy_section_2_text = "Solo recopilamos y tratamos la información necesaria para prestar nuestros servicios, cumplir con las obligaciones legales y mantener el funcionamiento seguro de la plataforma. Puede incluir:";
$private_policy_section_2_list = [
"Datos identificativos: nombre, apellidos y fecha de nacimiento, para verificar la edad y la identidad.",
"Datos de contacto: dirección de correo electrónico, número de teléfono (si se facilita), país de residencia y, cuando proceda, dirección postal.",
"Datos de la cuenta y de las transacciones: información de pago, depósitos, retiradas e historial de operaciones.",
"Datos técnicos y de uso: dirección IP, tipo de navegador, características del dispositivo, horas de acceso y registros del sistema.",
"Documentación de verificación: documentos de identidad, justificantes de domicilio u otros materiales exigidos por los procedimientos de cumplimiento KYC y AML."
];
$private_policy_section_2_note = "Por lo general, no recopilamos categorías especiales de datos personales, como información sobre la salud o las creencias religiosas, salvo que la ley lo exija o que tú lo autorices expresamente.";

$private_policy_section_3_heading = "3. Cómo recopilamos la información";
$private_policy_section_3_text = "Tu información puede recopilarse a través de varios canales seguros:";
$private_policy_section_3_list = [
"Directamente de ti, por ejemplo durante el registro, al actualizar tu perfil, al verificar documentos o al ponerte en contacto con el soporte.",
"De forma automática mediante cookies, registros del servidor, herramientas de analítica e información del dispositivo mientras utilizas la plataforma.",
"A través de terceros de confianza, como proveedores de pago, servicios de verificación de identidad o proveedores de inicio de sesión social cuando decides utilizarlos."
];

$private_policy_section_4_heading = "4. Finalidades del tratamiento";
$private_policy_section_4_text = "Tratamos tus datos personales únicamente con fines legítimos y claramente definidos:";
$private_policy_section_4_list = [
"Crear, gestionar y mantener tu cuenta de usuario y tu acceso a las funciones de la plataforma.",
"Procesar y proteger los depósitos, las retiradas y las operaciones relacionadas con los pagos.",
"Prestar atención al cliente y responder a las consultas.",
"Cumplir con las obligaciones legales y regulatorias, incluidos los requisitos KYC, AML y fiscales.",
"Mantener la seguridad de la plataforma y prevenir el fraude, los usos indebidos o los accesos no autorizados.",
"Mejorar el rendimiento, la funcionalidad y la experiencia de usuario de la plataforma.",
"Enviar comunicaciones comerciales y novedades cuando hayas dado tu consentimiento expreso."
];

$private_policy_section_5_heading = "5. Base jurídica del tratamiento";
$private_policy_section_5_list = [
"La ejecución de un contrato o la aplicación de medidas precontractuales a petición del interesado.",
"El cumplimiento de obligaciones legales, incluidas las normas de prevención del blanqueo de capitales y los requisitos regulatorios.",
"Nuestros intereses legítimos, como mantener la seguridad, la fiabilidad y la estabilidad operativa de la plataforma.",
"Tu consentimiento expreso, por ejemplo para recibir comunicaciones comerciales o utilizar funciones opcionales de la plataforma."
];

$private_policy_section_6_heading = "6. Comunicación de la información";
$private_policy_section_6_text = "Tu información solo se comunica cuando resulta necesario y exclusivamente a proveedores de servicios y socios cuidadosamente seleccionados:";
$private_policy_section_6_list = [
"Proveedores de servicios de pago y entidades bancarias, para procesar las transacciones.",
"Proveedores especializados que colaboran en la verificación de identidad y en los controles de cumplimiento.",
"Proveedores de tecnología y de servicios en la nube que operan bajo los correspondientes acuerdos de tratamiento de datos.",
"Proveedores de analítica y de seguridad que, siempre que resulta posible, utilizan información anonimizada o seudonimizada.",
"Asesores profesionales, como consultores jurídicos o fiscales, cuando sea necesario.",
"Autoridades regulatorias, tribunales o fuerzas y cuerpos de seguridad, cuando exista una obligación legal."
];
$private_policy_section_6_note = "No vendemos, alquilamos ni cedemos de ningún otro modo tus datos personales a terceros con fines comerciales.";

$private_policy_section_7_heading = "7. Transferencias internacionales de datos";
$private_policy_section_7_text = "Algunos proveedores de servicios, como los de alojamiento en la nube o los socios de analítica, pueden operar fuera de tu jurisdicción. Siempre que se produzca una transferencia internacional de datos, aplicamos las garantías adecuadas, como las cláusulas contractuales tipo u otros mecanismos jurídicos reconocidos, para asegurar un nivel de protección adecuado.";

$private_policy_section_8_heading = "8. Seguridad de los datos";
$private_policy_section_8_text = "Aplicamos medidas técnicas y organizativas integrales para proteger tu información:";
$private_policy_section_8_list = [
"Transmisión cifrada de los datos mediante protocolos de seguridad modernos como TLS 1.3+.",
"Cifrado robusto de la información sensible en reposo con tecnologías como AES-256.",
"Evaluaciones de seguridad periódicas, pruebas de penetración y revisiones independientes.",
"Supervisión continua para detectar actividades sospechosas y posibles amenazas de seguridad.",
"Controles de acceso estrictos y permisos basados en roles para el personal autorizado.",
"Custodia de los fondos de los clientes en cuentas segregadas a través de socios financieros regulados."
];
$private_policy_section_8_note = "Aunque ningún sistema de seguridad puede garantizar una protección absoluta, trabajamos de forma continua para minimizar los riesgos y mantener un elevado nivel de seguridad.";

$private_policy_section_9_heading = "9. Conservación de los datos";
$private_policy_section_9_text = "Los datos personales se conservan únicamente durante el tiempo necesario para cumplir las finalidades descritas en esta Política o para satisfacer los requisitos legales:";
$private_policy_section_9_list = [
"Mientras tu cuenta esté activa y se mantenga la relación contractual con nosotros.",
"Durante los plazos adicionales exigidos por obligaciones fiscales, regulatorias o legales.",
"Hasta que retires tu consentimiento, cuando el tratamiento se base únicamente en él."
];
$private_policy_section_9_note = "Cuando la información deja de ser necesaria, se elimina de forma segura o se anonimiza de manera permanente.";

$private_policy_section_10_heading = "10. Tus derechos";
$private_policy_section_10_text = "Conforme a la legislación aplicable, puedes ejercer los siguientes derechos sobre tus datos personales:";
$private_policy_section_10_list = [
"Solicitar el acceso a la información que conservamos sobre ti.",
"Solicitar la rectificación de los datos inexactos o incompletos.",
"Solicitar la supresión de tus datos cuando sea legalmente posible.",
"Solicitar la limitación del tratamiento en determinadas circunstancias.",
"Recibir tus datos en un formato estructurado, de uso común y de lectura mecánica.",
"Retirar en cualquier momento el consentimiento otorgado previamente.",
"Presentar una reclamación ante la autoridad de control competente en materia de protección de datos."
];

$private_policy_section_11_heading = "11. Cookies y tecnologías similares";
$private_policy_section_11_text = "Utilizamos cookies y tecnologías similares para garantizar el funcionamiento de la plataforma, analizar los patrones de uso y mejorar la experiencia del usuario. Las cookies esenciales están siempre activas, mientras que las cookies de analítica y de marketing requieren tu consentimiento. Encontrarás más información en nuestra Política de cookies.";
$private_policy_google_choices = 'Puedes gestionar el uso que hace Google de la información obtenida durante tus visitas a través de la <a href="http://www.google.com/settings/ads" target="_blank" rel="noopener">Configuración de anuncios de Google</a>, desactivar la publicidad basada en intereses con el <a href="https://tools.google.com/dlpage/gaoptout" target="_blank" rel="noopener">complemento de inhabilitación de Google Analytics para navegadores</a> o consultar la <a href="https://www.google.com/intl/en/policies/privacy/" target="_blank" rel="noopener">Política de Privacidad de Google</a> para obtener más información.';

$private_policy_section_12_heading = "12. Cambios en esta Política de privacidad";
$private_policy_section_12_text = "Podemos actualizar esta Política de privacidad periódicamente por motivos legales, regulatorios u operativos. La versión más reciente estará siempre disponible en el sitio web. Cuando se produzcan cambios significativos, podremos notificártelo por correo electrónico o mediante avisos en la plataforma.";

$private_policy_section_13_heading = "13. Contacto en materia de privacidad";
$private_policy_section_13_text = "Si tienes cualquier duda sobre la privacidad, sobre esta Política o sobre el ejercicio de tus derechos, escríbenos por correo electrónico a $site_gmail o utiliza el formulario de contacto del sitio web. Revisaremos tu solicitud y te responderemos con la mayor brevedad posible.";

$private_policy_agreement = "Al utilizar $source, reconoces que has leído y comprendido esta Política de privacidad y aceptas sus condiciones.";

$private_policy_thank_you = "Gracias por tu confianza. Proteger tu información y respetar tu privacidad seguirá siendo siempre un compromiso fundamental de $source.";

// ---------------------------------------------------------------------------------------------------

// REGISTRATION
$register_heading = "Empieza hoy mismo con $source y ponte en marcha en solo unos minutos";

// ==========================================
// RISK WARNING PAGE
// ==========================================
$page_title_risk_warning = "Advertencia de riesgo | $source";
$page_description_risk_warning = "Conoce los riesgos del trading automatizado de criptomonedas con $source: volatilidad del mercado, riesgo de ejecución y consideraciones regulatorias.";
$risk_warning_heading = "Advertencia de riesgo";
$risk_warning_intro = "Comprender los riesgos es el primer paso para operar con confianza.";

$risk_warning_ai_heading = "Así ayuda nuestro sistema de IA a gestionar el riesgo:";
$risk_warning_ai_list = [
    "<strong>Eficiencia algorítmica y operativa sin emociones:</strong> algoritmos avanzados analizan las señales del mercado para ejecutar las operaciones de forma objetiva en el momento óptimo.",
    "<strong>Estrategias basadas en datos:</strong> las estrategias se apoyan en patrones de mercado verificados y en el análisis en tiempo real, nunca en suposiciones.",
    "<strong>Configuración flexible y control total:</strong> ajusta tus parámetros de riesgo cuando quieras. Consulta todos los saldos y todas las operaciones con plena transparencia desde tu panel de control, sin comisiones ocultas y con retiradas sin restricciones.",
];

$risk_warning_disclaimer = "<strong>Aviso legal:</strong> operar siempre conlleva riesgo. Los sistemas automatizados (incluida la IA) no garantizan beneficios, pueden fallar por errores de software o por acontecimientos imprevistos del mercado y requieren la supervisión del usuario. Los resultados pasados no son indicativos de resultados futuros. Esta plataforma tiene una finalidad exclusivamente informativa y comercial, y no presta asesoramiento financiero.";

$risk_warning_s1_heading = "1. Riesgos generales y del mercado de criptomonedas";
$risk_warning_s1_intro = "Las criptomonedas son activos altamente volátiles y especulativos que se negocian las 24 horas del día, los 7 días de la semana, con una supervisión regulatoria mínima en la mayoría de las jurisdicciones.";
$risk_warning_s1_list = [
    "Su valor puede fluctuar de forma drástica en periodos muy cortos, lo que puede llevar a la pérdida total del capital invertido.",
    "El valor de mercado puede verse gravemente afectado por cambios normativos, avances técnicos, brechas de seguridad o acontecimientos macroeconómicos de mayor alcance.",
    "Algunos activos pueden perder todo su valor. Invierte únicamente el dinero que puedas permitirte perder.",
];

$risk_warning_s2_heading = "2. Riesgos de ejecución, liquidez y apalancamiento";
$risk_warning_s2_list = [
    "<strong>Volatilidad del mercado y liquidez:</strong> los movimientos de precios extremos (más del 10–20 % diario) o una liquidez reducida (sobre todo en criptomonedas de baja capitalización) pueden provocar retrasos, caídas de la plataforma y un deslizamiento importante en la ejecución. Las órdenes de stop-loss no garantizan la limitación de las pérdidas en condiciones extremas.",
    "<strong>Riesgos del apalancamiento y del margen:</strong> los productos apalancados amplifican tanto las ganancias como las pérdidas, por lo que puedes perder más que tu depósito inicial. Aproximadamente el 70–80 % de las cuentas de inversores minoristas pierden dinero al operar con productos apalancados.",
];

$risk_warning_s3_heading = "3. Riesgos técnicos, de ciberseguridad y derivados de terceros";
$risk_warning_s3_list = [
    "<strong>Factores técnicos:</strong> el trading en línea conlleva, por su propia naturaleza, riesgos de desconexión de internet, errores de hardware o software e indisponibilidad del servicio.",
    "<strong>Ciberseguridad:</strong> las cuentas de criptomonedas son un objetivo frecuente de ataques de phishing, malware y hackeos. Las transacciones son irreversibles: si tus credenciales quedan comprometidas, la pérdida puede ser permanente.",
    "<strong>Plataformas de terceros:</strong> este sitio web puede poner a los usuarios en contacto con plataformas de terceros. No controlamos, respaldamos ni garantizamos su seguridad, su funcionamiento ni su solvencia. Realiza siempre tus propias comprobaciones antes de depositar fondos en plataformas externas.",
];

$risk_warning_s4_heading = "4. Aspectos regulatorios, fiscales y disposiciones finales";
$risk_warning_s4_list = [
    "<strong>Cumplimiento legal e impuestos:</strong> los marcos regulatorios varían enormemente y cambian con rapidez. El usuario es el único responsable de garantizar que su actividad de trading cumple la legislación local y de atender sus propias obligaciones fiscales.",
    "<strong>Sin garantía de beneficios:</strong> no existe un trading de criptomonedas \"seguro\" ni libre de riesgo. Cualquier cifra de rentabilidad o ejemplo de resultados es puramente hipotético.",
    "<strong>Idoneidad:</strong> si no comprendes plenamente los riesgos, dependes de fondos que necesitas para vivir u operas con dinero prestado, el trading de criptomonedas no es adecuado para ti. Consulta a un asesor financiero independiente y autorizado si tienes dudas.",
];

$risk_warning_contact = "<strong>Contacto:</strong> si tienes cualquier duda sobre esta declaración o deseas enviarnos una consulta, ponte en contacto con nuestro equipo oficial de atención al cliente a través del formulario de contacto de nuestro sitio web.";
$footer_link_risk_warning = "Advertencia de riesgo";
?>
