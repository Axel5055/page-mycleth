@extends('templates.mycleth')

@section('content')
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap JavaScript y sus dependencias (Popper.js y jQuery) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.bundle.min.js"></script>


<!----------------------------------SERVICIOS------------------------------------->
<section class="section section-servicios">
    <div class="container container-servicios">
        <div class="row items">

            <header class="col-12">
                <div class="section-heading heading-center servicios">
                    <h1>Servicios</h1>
                    <p class="section-desc">
                        Ofrecemos servicios integrales con tecnología de vanguardia. Transformamos ideas en soluciones
                        potentes, proporcionando innovación que impulsa negocios hacia el futuro.
                    </p>
                </div>
            </header>

            <div class="col-12 item">
                <div class="row items">
                    <!--Software-->
                    <div class="col-md-6 col-xl-4 col-12 item">
                        <div class="iitem item-style iitem-hover">
                            <div class="iitem-icon">
                                <i class="material-icons material-icons-outlined md-48">corporate_fare</i>
                            </div>
                            <div class="iitem-icon-bg">
                                <i class="material-icons material-icons-outlined">corporate_fare</i>
                            </div>
                            <h2 class="iitem-heading item-heading-large">Software para sistemas de gestión</h2>
                            <div class="iitem-desc">Soluciones a tu medida, locales o en la nube, automatizando procesos,
                                generando datos estadísticos para garantizar la mejora continua. <br><br>
                                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#modalSoftware">
                                    Ver Más
                                </button>
                            </div>
                        </div>
                    </div>
                    <!--Web-->
                    <div class="col-md-6 col-xl-4 col-12 item">
                        <div class="iitem item-style iitem-hover">
                            <div class="iitem-icon">
                                <i class="material-icons material-icons-outlined md-48">code</i>
                            </div>
                            <div class="iitem-icon-bg">
                                <i class="material-icons material-icons-outlined">code</i>
                            </div>
                            <h2 class="iitem-heading item-heading-large">Desarrollo de páginas web</h2>
                            <div class="iitem-desc">Creamos sitios web únicos y funcionales que se adaptan a tus
                                necesidades, desde páginas corporativas elegantes hasta plataformas interactivas. <br><br>
                                <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#modalWeb">
                                    Ver Más
                                </button>
                            </div>
                        </div>
                    </div>
                    <!--Apps-->
                    <div class="col-md-6 col-xl-4 col-12 item">
                        <div class="iitem item-style iitem-hover">
                            <div class="iitem-icon">
                                <i class="material-icons material-icons-outlined md-48">apps</i>
                            </div>
                            <div class="iitem-icon-bg">
                                <i class="material-icons material-icons-outlined">apps</i>
                            </div>
                            <h2 class="iitem-heading item-heading-large">Desarrollo de apps</h2>
                            <div class="iitem-desc">Ofrecemos la más alta tecnología en términos de desarrollo de
                                aplicaciones para celular en los sistemas operativos Android.<br><br>
                                <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#modalApps">
                                    Ver Más
                                </button>
                            </div>
                        </div>
                    </div>
                    <!--POS-->
                    <div class="col-md-6 col-xl-4 col-12 item">
                        <div class="iitem item-style iitem-hover">
                            <div class="iitem-icon">
                                <i class="material-icons material-icons-outlined md-48">point_of_sale</i>
                            </div>
                            <div class="iitem-icon-bg">
                                <i class="material-icons material-icons-outlined">point_of_sale</i>
                            </div>
                            <h2 class="iitem-heading item-heading-large">Punto de venta</h2>
                            <div class="iitem-desc">Creamos un software punto de venta a tu medida, más fácil de usar
                                para aumentar tus ventas, administrar mejor tu negocio y competir con las grandes cadenas de auto servicio.<br><br>
                                <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#modalPos">
                                    Ver Más
                                </button>
                            </div>
                        </div>
                    </div>
                    <!--Mkt-->
                    <div class="col-md-6 col-xl-4 col-12 item">
                        <div class="iitem item-style iitem-hover">
                            <div class="iitem-icon">
                                <i class="material-icons material-icons-outlined md-48">connected_tv</i>
                            </div>
                            <div class="iitem-icon-bg">
                                <i class="material-icons material-icons-outlined">connected_tv</i>
                            </div>
                            <h2 class="iitem-heading item-heading-large">Marketin digital</h2>
                            <div class="iitem-desc">Aumenta tus ventas con Marketing de alto impacto enfocado en resultados.<br><br>
                                <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#modalMkt">
                                    Ver Más
                                </button>
                            </div>
                        </div>
                    </div>
                    <!--E-commerce-->
                    <div class="col-md-6 col-xl-4 col-12 item">
                        <div class="iitem item-style iitem-hover">
                            <div class="iitem-icon">
                                <i class="material-icons material-icons-outlined md-48">store</i>
                            </div>
                            <div class="iitem-icon-bg">
                                <i class="material-icons material-icons-outlined">store</i>
                            </div>
                            <h2 class="iitem-heading item-heading-large">E-Commerce</h2>
                            <div class="iitem-desc">Creamos una tienda virtual a fin de que el usuario pueda realizar
                                compras en línea desde el dispositivo que desee.<br><br>
                                <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#modalEcommerce">
                                    Ver Más
                                </button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-------------------------------------MODAL SERVICIOS---------------------------------------------->

            <!-- Modal Software -->
            <div class="modal fade" id="modalSoftware" tabindex="-1" aria-labelledby="modalSoftwareLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalSoftwareLabel">Software para sistemas de gestión</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>Soluciones a tu medida, locales o en la nube, automatizando procesos, generando datos estadísticos para garantizar la mejora continua.</p>
                            <h6>Características:</h6>
                            <ul>
                                <li>Automatización de procesos empresariales.</li>
                                <li>Generación de informes y estadísticas detalladas.</li>
                                <li>Escalabilidad para adaptarse al crecimiento de tu negocio.</li>
                                <li>Integración con otras herramientas y sistemas.</li>
                                <li>Soporte técnico especializado.</li>
                            </ul>
                            <h6>Beneficios:</h6>
                            <ul>
                                <li>Optimización de la eficiencia operativa.</li>
                                <li>Mejora de la toma de decisiones basada en datos precisos.</li>
                                <li>Reducción de costos y aumento de la productividad.</li>
                                <li>Experiencia del cliente mejorada.</li>
                                <li>Adaptación a las últimas tecnologías y tendencias del mercado.</li>
                            </ul>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Web -->
            <div class="modal fade" id="modalWeb" tabindex="-1" aria-labelledby="modalWebLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalWebLabel">Desarrollo de páginas web</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>Creamos sitios web únicos y funcionales que se adaptan a tus necesidades, desde páginas corporativas elegantes hasta plataformas interactivas.</p>
                            <h6>Características:</h6>
                            <ul>
                                <li>Diseño web responsive para una experiencia óptima en dispositivos móviles y de escritorio.</li>
                                <li>Desarrollo utilizando tecnologías modernas como HTML5, CSS3 y JavaScript.</li>
                                <li>Integración de sistemas de gestión de contenido (CMS) para facilitar la administración del sitio.</li>
                                <li>Optimización para motores de búsqueda (SEO) para mejorar la visibilidad en línea.</li>
                                <li>Funcionalidades interactivas y personalizadas según los requisitos del cliente.</li>
                            </ul>
                            <h6>Beneficios:</h6>
                            <ul>
                                <li>Presencia en línea profesional y atractiva.</li>
                                <li>Mejora de la interacción con los usuarios y clientes.</li>
                                <li>Generación de confianza y credibilidad en el mercado.</li>
                                <li>Aumento del tráfico web y posibilidad de alcanzar nuevos clientes.</li>
                                <li>Adaptabilidad y escalabilidad para futuras expansiones.</li>
                            </ul>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Apps -->
            <div class="modal fade" id="modalApps" tabindex="-1" aria-labelledby="modalAppsLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalAppsLabel">Desarrollo de apps</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>Ofrecemos la más alta tecnología en términos de desarrollo de aplicaciones para celular en los sistemas operativos Android.</p>
                            <h6>Características:</h6>
                            <ul>
                                <li>Desarrollo de aplicaciones nativas y multiplataforma para Android.</li>
                                <li>Experiencia de usuario (UX) y diseño de interfaz intuitivos y atractivos.</li>
                                <li>Integración de funcionalidades avanzadas como geolocalización, notificaciones en tiempo real y más.</li>
                                <li>Pruebas exhaustivas para garantizar la compatibilidad y el rendimiento óptimo.</li>
                                <li>Actualizaciones y soporte continuo para mantener la aplicación al día.</li>
                            </ul>
                            <h6>Beneficios:</h6>
                            <ul>
                                <li>Acceso a un mercado amplio de usuarios de dispositivos Android.</li>
                                <li>Interacción directa con los clientes a través de una aplicación personalizada.</li>
                                <li>Generación de ingresos mediante modelos de monetización como anuncios y compras en la aplicación.</li>
                                <li>Mejora de la visibilidad de la marca y la fidelidad del cliente.</li>
                                <li>Posibilidad de ofrecer servicios y contenidos exclusivos a través de la aplicación.</li>
                            </ul>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal POS -->
            <div class="modal fade" id="modalPos" tabindex="-1" aria-labelledby="modalPosLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalPosLabel">Punto de venta</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>Creamos un software punto de venta a tu medida, más fácil de usar para aumentar tus ventas, administrar mejor tu negocio y competir con las grandes cadenas de autoservicio.</p>
                            <h6>Características:</h6>
                            <ul>
                                <li>Interfaz intuitiva y fácil de usar para agilizar las transacciones y reducir los tiempos de espera.</li>
                                <li>Control de inventario en tiempo real para gestionar eficientemente los productos y evitar agotamientos o excedentes.</li>
                                <li>Funcionalidades avanzadas como ventas a crédito, promociones y descuentos personalizados.</li>
                                <li>Integración con dispositivos de pago y recibos electrónicos para facilitar las transacciones sin efectivo.</li>
                                <li>Informes detallados y análisis de ventas para tomar decisiones informadas sobre el negocio.</li>
                            </ul>
                            <h6>Beneficios:</h6>
                            <ul>
                                <li>Optimización de las operaciones de venta para mejorar la satisfacción del cliente.</li>
                                <li>Incremento de las ventas y la fidelidad del cliente mediante promociones y programas de recompensas.</li>
                                <li>Reducción de errores y pérdidas gracias a un control preciso del inventario y las transacciones.</li>
                                <li>Adaptabilidad para diferentes tipos de negocios, desde tiendas minoristas hasta restaurantes y salones de belleza.</li>
                                <li>Soporte técnico y actualizaciones regulares para mantener el sistema seguro y funcional.</li>
                            </ul>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal para "Marketing digital" -->
            <div class="modal fade" id="modalMkt" tabindex="-1" aria-labelledby="modalMktLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalMktLabel">Marketing digital</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>Aumenta tus ventas con Marketing de alto impacto enfocado en resultados. Nuestros expertos en marketing digital te ayudarán a desarrollar estrategias efectivas para llegar a tu audiencia objetivo y convertir leads en clientes.</p>
                            <h6>Servicios de Marketing Digital:</h6>
                            <ul>
                                <li>Optimización de motores de búsqueda (SEO) para mejorar la visibilidad de tu sitio web en los resultados de búsqueda.</li>
                                <li>Publicidad en redes sociales para llegar a audiencias específicas y aumentar la interacción con tus clientes.</li>
                                <li>Marketing de contenidos para crear y distribuir contenido valioso que atraiga y retenga a tu audiencia.</li>
                                <li>Email marketing para enviar mensajes personalizados y promociones a tus clientes potenciales.</li>
                                <li>Análisis de datos y seguimiento del rendimiento para evaluar el impacto de las estrategias de marketing y realizar ajustes según sea necesario.</li>
                            </ul>
                            <h6>Beneficios del Marketing Digital:</h6>
                            <ul>
                                <li>Aumento de la visibilidad en línea y la presencia de la marca.</li>
                                <li>Generación de leads de calidad que tienen más probabilidades de convertirse en clientes.</li>
                                <li>Mejora del engagement y la interacción con la audiencia.</li>
                                <li>Incremento del tráfico web y las conversiones.</li>
                                <li>Maximización del retorno de inversión (ROI) a través de estrategias de marketing efectivas.</li>
                            </ul>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal E-Commerce -->
            <div class="modal fade" id="modalEcommerce" tabindex="-1" aria-labelledby="modalEcommerceLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalEcommerceLabel">E-Commerce</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>Creamos una tienda virtual a fin de que el usuario pueda realizar compras en línea desde el dispositivo que desee. Nuestros servicios de E-Commerce incluyen el desarrollo completo de la tienda en línea, la integración de pasarelas de pago seguras y la optimización para una experiencia de usuario suave.</p>
                            <h6>Características del E-Commerce:</h6>
                            <ul>
                                <li>Desarrollo de plataformas de E-Commerce personalizadas para adaptarse a las necesidades específicas de tu negocio.</li>
                                <li>Integración de sistemas de gestión de inventario para un seguimiento preciso del stock.</li>
                                <li>Implementación de pasarelas de pago seguras para transacciones en línea protegidas.</li>
                                <li>Diseño responsive para una experiencia de usuario óptima en dispositivos móviles y computadoras de escritorio.</li>
                                <li>Funcionalidades avanzadas, incluyendo recomendaciones de productos, carritos abandonados y opciones de pago flexibles.</li>
                            </ul>
                            <h6>Beneficios del E-Commerce:</h6>
                            <ul>
                                <li>Expansión de tu alcance de mercado a nivel nacional o internacional.</li>
                                <li>Aumento de las ventas al proporcionar a los clientes una forma conveniente de comprar tus productos las 24 horas, los 7 días de la semana.</li>
                                <li>Mejora de la fidelidad del cliente a través de programas de recompensas y promociones exclusivas.</li>
                                <li>Análisis detallados y seguimiento de la actividad del cliente para ajustar estrategias de marketing y ventas.</li>
                                <li>Adaptabilidad a las últimas tendencias tecnológicas para mantenerse competitivo en el mercado.</li>
                            </ul>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div> 

</section>

<div class="row botones-servicios">
        <div class="col-6 btn-group align-items-center justify-content-center">
        <a href="/planes" class="btn btn-border btn-with-icon btn-small ripple">
            <span>Consulta los planes que tenemos para ti</span>
            <svg class="btn-icon-right" >
                <use xlink:href="assets/img/sprite.svg#arrow-right"></use>
            </svg>
        </a>
        </div>

        <div class="col-6 btn-group align-items-center justify-content-center">
            <a href="/contacto" class="btn btn-border btn-with-icon btn-small ripple">
                <span>Contáctanos para una asesoria</span>
                <svg class="btn-icon-right">
                    <use xlink:href="assets/img/sprite.svg#arrow-right"></use>
                </svg>
            </a>
        </div>
    </div>
    
<!---------------------------------------------CLIENTES----------------------------------------------------->

<section class="section section-bgc ">
    <div class="container">
        <div class="row items">
            <div class="col-12">
                <div class="section-heading heading-center clientes">
                    <h2>Nuestros clientes</h2>
                    <p class="section-desc">
                        Nuestros clientes han revolucionado industrias, abierto nuevos mercados y mejorado
                        innumerables vidas. Tenemos el privilegio de colaborar con múltiples empresas visionarias.
                    </p>
                </div>
            </div>

            <!--------------------------------------------LOGOS DE CLIENTES-------------------------------------------->

            <div class="col-lg-3 col-md-4 col-sm-4 col-6 item">
                <!-- Begin brands item -->
                <div class="brands-item item-style">
                    <img data-src="assets/img/brands/circle.png" class="lazy" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
                </div><!-- End brands item -->
            </div>
            <div class="col-lg-3 col-md-4 col-sm-4 col-6 item">
                <!-- Begin brands item -->
                <div class="brands-item item-style">
                    <img data-src="assets/img/brands/codelab.png" class="lazy" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
                </div><!-- End brands item -->
            </div>
            <div class="col-lg-3 col-md-4 col-sm-4 col-6 item">
                <!-- Begin brands item -->
                <div class="brands-item item-style">
                    <img data-src="assets/img/brands/earth.png" class="lazy" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
                </div><!-- End brands item -->
            </div>
            <div class="col-lg-3 col-md-4 col-sm-4 col-6 item">
                <!-- Begin brands item -->
                <div class="brands-item item-style">
                    <img data-src="assets/img/brands/hexa.png" class="lazy" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
                </div><!-- End brands item -->
            </div>
            <div class="col-lg-3 col-md-4 col-sm-4 col-6 item">
                <!-- Begin brands item -->
                <div class="brands-item item-style">
                    <img data-src="assets/img/brands/lightai.png" class="lazy" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
                </div><!-- End brands item -->
            </div>
            <div class="col-lg-3 col-md-4 col-sm-4 col-6 item">
                <!-- Begin brands item -->
                <div class="brands-item item-style">
                    <img data-src="assets/img/brands/nirastate.png" class="lazy" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
                </div><!-- End brands item -->
            </div>
            <div class="col-lg-3 col-md-4 col-sm-4 col-6 item">
                <!-- Begin brands item -->
                <div class="brands-item item-style">
                    <img data-src="assets/img/brands/treva.png" class="lazy" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
                </div><!-- End brands item -->
            </div>
            <div class="col-lg-3 col-md-4 col-sm-4 col-6 item">
                <!-- Begin brands item -->
                <div class="brands-item item-style">
                    <img data-src="assets/img/brands/zootv.png" class="lazy" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
                </div><!-- End brands item -->
            </div>
        </div>
    </div>
</section>
@endsection

@section('titulo')
Servicios
@endsection