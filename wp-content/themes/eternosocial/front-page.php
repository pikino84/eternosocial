<?php get_header(); ?>
    <section class="seccion header">
        <div class="contenedor listado-grid">        
            <?php 
                $seccion_1 = get_field('seccion_1_logo');
                $logo_image = $seccion_1['sizes']['medium'];
                $logo_alt =  $seccion_1['title'];
                $logo_width = $seccion_1['sizes']['medium-width'];
                $logo_height = $seccion_1['sizes']['medium-height'];
            ?>
            <img class="img_log"
                src="<?php echo  esc_attr($logo_image) ?>" 
                alt="<?php echo $logo_alt; ?>" 
                title="<?php echo $logo_alt; ?>" 
                width="<?php echo $logo_width; ?>" 
                height="<?php echo $logo_height; ?>" />
            <div class="container_header ">
                <h1>¿Sabías Que Podría Haber <u>Decenas y Hasta Cientos de Personas Que <b>Están Buscando Tus Servicios En Internet</b></u>?</h1>
                <p class="container_header_p"> Si Deseas Más Clientes Para Tu Negocio Cada Semana, entonces…</p>
                <br>
                <h2 class="like_h2" >"Obtén Una <span class="text-secondary">Sesión Estratégica ONLINE</span> Sobre Google <span class="text-secondary">Totalmente GRATIS </span>Que Te Permitirá <span class="text-secondary">Captar Prospectos</span> Calientes <span class="text-secondary">Listos Para Comprar</span></h2>
                <p class="like_h2" >, y Todo Esto A Través Del Embudo Mínimo Viable y Las Mejores Palabras Clave de Tus Servicios Profesionales o B2B ¡Incluso Sin Necesidad De Tener Una Página Web Ni Redes Sociales!"</p>
                <br>
                <p class="like_h3">La Mejor Parte: </p>
                <h3 class="like_h3">La Sesión Aplica Para Ti Incluso Si Nunca Has Tenido Experiencia En Marketing Digital o Si Has Tenido Malos Resultados En El Pasado.</h3>
            </div>    
        </div>
        <div class="contenedor registrate">
            <div class="wraper">
                <p class="text-center"><b>Regístrate Para Asegurar Tu Sesión Online GRATUITA y Aumentar Exponencialmente Las Ventas De Tu Negocio Por Medio De Google e Internet</b></p>
                <!--p class="text-center">Al Registrarte Darás El Primer Paso Para Digitalizar Tu Negocio y Llevarlo A Un Nivel Muy Superior En Ventas e Ingresos Que Toda Tu Competencia. Hazlo Ahora, Solamente Quedan 5 Sesiones Disponibles</p-->
            </div>
            <div class="wraper">
                <button class="boton dosamidus"> Sí, ¡Quiero Mi Sesión <br> Estratégica GRATIS!</button>
        </div>
    </section>
    <section class="session_onlie">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1920 60" aria-hidden="true">
            <path fill="#F3F4F5" d="M-153.5,85.5a4002.033,4002.033,0,0,1,658-71c262.854-6.5,431.675,15.372,600,27,257.356,17.779,624.828,19.31,1089-58v102Z"></path>
        </svg>
        <div class="session_online__wrapper">
            <div class="contenedor">
                <div class="col_1">
                    <p class="like_h2" >Con La <span class="text-secondary">Sesión Online Estratégica Sobre Google y el Embudo Mínimo Viable</span> Podrás:</p>
                </div>
                <div class="col_2">
                    <ul class="podras_list">
                        <li>Descubrir Cómo Generar Clientes Potenciales Cada Semana En Piloto Automático Sin Tener Que Hacer Llamadas En Frío. ¡Ellos Te Buscarán Incluso Mientras Duermes! </li>
                        <li>Saber Cómo Producir Un Flujo Constante De Personas Con Alta Intención De Compra Que Anhelan Tus Servicios, y Todo Esto a Través del Embudo Mínimo Viable y Las Mejores Palabras Clave de Google.</li>
                        <li>Tener Claro Cómo Obtener Decenas y Hasta Cientos De Números de Teléfono y Correos De Prospectos En Línea Altamente Calificados.</li>
                    </ul>
                </div>
                <div class="col_3">
                    <ul class="podras_list">
                        <li>Dominar un Sistema Sencillo Que Digitaliza Tu Negocio e Incrementa Tu Facturación Mensual En Línea Sin Necesidad de Ser un Experto en Marketing Digital</li>
                        <li>Conocer La Estrategia Para Aplastar A Tus Competidores Locales Y Convertirte En La Autoridad Número Uno En Ventas Digitales En Tu Nicho de Mercado.</li>
                        <li>Recibirás las 5 Mejores Palabras Clave Que La Gente Está Usando En Google Para Buscar Tus Servicios Profesionales o B2B.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="testimonials">
        <div class="contenedor">
            <p class="like_h2 text-secondary text-center">Testimonios</p>
            <div class="testimonial mb-5">
                <div class="testimonial__wrapper_text">
                    <p class="text-center m-0">La Empresa Detail Rain Gutters Obtiene en promedio 10 - 12 Clientes Nuevos por Mes a través del Embudo Mínimo Viable y Sus Mejores Palabras Clave en Google, lo cual se traduce en un ingreso de 10,000 a 12,000 USD con tan solo 2,000 USD de inversión cada mes.</p>
                    <p class="text-center m-0 bold-600">Lázaro Lazo </p>
                    <p class="text-center text-secondary m-0 bold-700">Detail Rain Gutters</p>
                </div>
                <?php 
                    $t_2_1 = get_field('testimonio_1_img');
                    $t_2_1_img = $t_2_1['sizes']['medium'];
                    $t_2_1_alt =  $t_2_1['title'];
                    $t_2_1_width = $t_2_1['sizes']['medium-width'];
                    $t_2_1_height = $t_2_1['sizes']['medium-height'];
                ?>
                <div class="wrapper_video">
                    <div class="video_load" data-video="gutters">
                        <img 
                            id="iconPlayer" 
                            class="thumb img-fluid" 
                            style="cursor: pointer;" 
                            src="<?php echo esc_attr($t_2_1_img) ?>" 
                            alt="<?php $t_2_1_alt; ?>" 
                            title="<?php $t_2_1_alt; ?>" 
                            loading="lazy" 
                            width="<?php echo $t_2_1_width; ?>" 
                            height="<?php echo $t_2_1_height; ?>" />
                    </div>
                    <div class="thevideo" style="display: none;"></div>
                </div>
            </div>
            <div class="testimonial mb-5">
                <?php 
                    $t_2_1 = get_field('testimonio_2_img');
                    $t_2_1_img = $t_2_1['sizes']['medium'];
                    $t_2_1_alt =  $t_2_1['title'];
                    $t_2_1_width = $t_2_1['sizes']['medium-width'];
                    $t_2_1_height = $t_2_1['sizes']['medium-height'];
                ?>
                <div class="wrapper_video order-mb-1">
                    <div class="video_load" data-video="taekwon">
                        <img 
                            src="<?php echo esc_attr($t_2_1_img) ?>" 
                            alt="<?php $t_2_1_alt; ?>" 
                            title="<?php $t_2_1_alt; ?>" 
                            loading="lazy" 
                            width="<?php echo $t_2_1_width; ?>" 
                            height="<?php echo $t_2_1_height; ?>" />
                    </div>
                    <div class="thevideo" style="display: none;"></div>
                </div>
                <div class="testimonial__wrapper_text">
                    <p class="text-center m-0">“Diego nos ayudó a llevar nuestro Doyang de Taekwondo de menos de 50 alumnos a 100 alumnos en muy poco tiempo. Estoy sorprendido realmente con la calidad, el compromiso y con los resultados de su servicio de marketing digital. Agradezco a Diego por el apoyo que le brindó a mi familia y a mi negocio durante este tiempo.”</p>
                    <p class="text-center m-0 bold-600">Alex Dumani</p>
                    <p class="text-center text-secondary m-0 bold-700">Taekwondo Sonbae</p>
                </div>
            </div>
            <div class="testimonial mb-5">
            <div class="testimonial__wrapper_text">
                    <p class="text-center m-0">La Empresa Instituto de Psicoterapia y Salud Integral Obtiene en promedio 100 Prospectos Calientes cada Mes a través del Embudo Mínimo Viable y Sus Mejores Palabras Clave en Google, con tan solo 300 USD de inversión mensuales. </p>
                    <p class="text-center m-0 bold-600">Dr. Arturo Del Castillo Arreola </p>
                    <p class="text-center text-secondary m-0 bold-700">Instituto de Psicoterapia y Salud Integral</p>
                </div>
                <?php 
                    $t_2_1 = get_field('testimonio_3_img');
                    $t_2_1_img = $t_2_1['sizes']['medium'];
                    $t_2_1_alt =  $t_2_1['title'];
                    $t_2_1_width = $t_2_1['sizes']['medium-width'];
                    $t_2_1_height = $t_2_1['sizes']['medium-height'];
                ?>
                <div class="wrapper_video order-mb-1">
                    <div class="video_load" data-video="ipsi">
                        <img 
                            src="<?php echo esc_attr($t_2_1_img) ?>" 
                            alt="<?php $t_2_1_alt; ?>" 
                            title="<?php $t_2_1_alt; ?>" 
                            loading="lazy" 
                            width="<?php echo $t_2_1_width; ?>" 
                            height="<?php echo $t_2_1_height; ?>" />
                    </div>
                    <div class="thevideo" style="display: none;"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="diego">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1920 60" aria-hidden="true">
            <path fill="#F3F4F5" d="M-153.5,85.5a4002.033,4002.033,0,0,1,658-71c262.854-6.5,431.675,15.372,600,27,257.356,17.779,624.828,19.31,1089-58v102Z"></path>
        </svg>
        <div class="diego__profile">
            <div class="contenedor">
                <?php 
                    $t_2_1 = get_field('diego');
                    $t_2_1_img = $t_2_1['sizes']['medium'];
                    $t_2_1_alt =  $t_2_1['title'];
                    $t_2_1_width = $t_2_1['sizes']['medium-width'];
                    $t_2_1_height = $t_2_1['sizes']['medium-height'];
                ?>
                <div class="profile__wrapper">
                    <div class="profile__wrapper_data">
                        <div class="wrapper_image">
                            <img 
                                class="br-50"
                                src="<?php echo esc_attr($t_2_1_img) ?>" 
                                alt="<?php $t_2_1_alt; ?>" 
                                title="<?php $t_2_1_alt; ?>" 
                                loading="lazy" 
                                width="<?php echo $t_2_1_width; ?>" 
                                height="<?php echo $t_2_1_height; ?>" />
                        </div>
                        <p class="text-center m-0 bold-600">Diego Sierra</p>
                        <p class="text-center text-secondary m-0 bold-700">Fundador de Eterno Social</p>
                    </div>
                    <div class="profile__wrapper_data">
                        <p class="text-center">Tengo una Agencia de Performance y Marketing Digital.</p>
                        <p class="text-center">Soy Experto en Captación de Clientes Por Medio de Facebook y Google. He Trabajado con Distintas Empresas como: </p>
                        <p class="text-center">Profesionistas, Psicólogos, Negocios locales como: Spas, Salón de Belleza, Restaurantes, Hotel, Gimnasios, Escuela de Taekwondo, y Contratistas.</p>
                        <button class="boton dosamidus"> Sí, ¡Quiero Mi Sesión <br> Estratégica GRATIS!</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="metodo">
        <div class="contenedor">
            <p class="like_h2 text-secondary text-center">El Método para Lograr tu Crecimiento de Ventas:</p>
            <ol>
                <li>Conocerte a tí, a tu Negocio, a tu Producto y/o Servicios.</li>
                <li>Analizamos en dónde están tus Prospectos y Clientes</li>
                <li>Diseñamos para ti El Embudo Mínimo Viable, el cual funciona como un Sistema Personalizado que trabajará en Automático Bajo Nuestra Supervisión a través de Internet.</li>
                <li>Recibes Prospectos a diario para que tú o tu fuerza de ventas logre cerrarlos como Clientes Nuevos.</li>
            </ol>
            <p class="like_h2 text-secondary text-center">¡Estamos Limitados a solamente 5 Sesiones Estratégicas! Reserva Tu Espacio AHORA </p>
            <button class="boton dosamidus"> Sí, ¡Quiero Mi Sesión <br> Estratégica GRATIS!</button>
        </div>
    </section> 
    <div class="kovadsamilad">
        <div class="knopka-kovad">
            <div class="knopka-kovad-title">
            <span class="poyavled-nuseokna"></span>
                <p class="bold-600">Regístrate Para Asegurar Tu <span class="text-secondary">Sesión Online GRATUITA</span> y <span class="text-secondary">Aumentar Exponencialmente Las Ventas De Tu Negocio</span> Por Medio De Google e Internet</p>
                <p>Al Registrarte Darás El Primer Paso Para Digitalizar Tu Negocio y Llevarlo A Un Nivel Muy Superior En Ventas e Ingresos Que Toda Tu Competencia. Hazlo Ahora, Solamente Quedan 5 Sesiones Disponibles.</p>
            </div>
            <div class="knopka-kovad-body">                
                <?php echo apply_shortcodes( '[contact-form-7 id="77" title="form session"]' ); ?>
            </div>
        </div>
    </div>
    <!-- GetButton.io widget -->
<script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "529981892193", // WhatsApp number
            call_to_action: "Deseo recibir mi Asesoría Gratis Sobre Google para mi Negocio", // Call to action
            button_color: "#FF6550", // Color of button
            position: "right", // Position may be 'right' or 'left'
        };
        var proto = 'https:', host = "getbutton.io", url = proto + '//static.' + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /GetButton.io widget -->
<?php
    get_footer();
?>