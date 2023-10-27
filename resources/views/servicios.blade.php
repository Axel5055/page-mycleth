@extends('templates.mycleth')

@section('content')

<link href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<section class="section section-servicios">
    <div class="container container-servicios">
        <div class="row items">

            <!--------------------------------------------SERVICIOS------------------------------------------------->

            <header class="col-12">
                <div class="section-heading heading-center servicios">
                    <h1>Servicios</h1>
                    <p class="section-desc">
                        Ofrecemos servicios integrales con tecnología de vanguardia. Transformamos ideas en soluciones
                        potentes, proporcionando innovación que impulsa negocios hacia el futuro.
                    </p>
                </div>
            </header>

            <!-------------------------------------MODAL SERVICIOS---------------------------------------------->


            <div class="col-12 item">
                <div class="row items">

                    <div class="col-md-6 col-xl-4 col-12 item">
                        <span class="iitem item-style iitem-hover">
                            <div class="iitem-icon">
                                <i class="material-icons material-icons-outlined md-48">corporate_fare</i>
                            </div>
                            <h2 class="iitem-heading item-heading-large">Software para sistemas de gestión</h2>
                            <div class="iitem-desc">Soluciones a tu medida, locales o en la nube, automatizando procesos,
                                generando datos estadísticos para garantizar la mejora continua.</div>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalSoftware">
                                Ver Más
                            </button>
                        </span>
                    </div>

                    <div class="col-md-6 col-xl-4 col-12 item">
                        <span class="iitem item-style iitem-hover">
                            <div class="iitem-icon">
                                <i class="material-icons material-icons-outlined md-48">code</i>
                            </div>
                            <h2 class="iitem-heading item-heading-large">Desarrollo de páginas web</h2>
                            <div class="iitem-desc">Creamos sitios web únicos y funcionales que se adaptan a tus necesidades,
                                desde páginas corporativas elegantes hasta plataformas interactivas.</div>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#webDevModal">
                                Ver Más
                            </button>
                        </span>
                    </div>

                    <div class="col-md-6 col-xl-4 col-12 item">
                        <span class="iitem item-style iitem-hover">
                            <div class="iitem-icon">
                                <i class="material-icons material-icons-outlined md-48">apps</i>
                            </div>
                            <h2 class="iitem-heading item-heading-large">Desarrollo de apps</h2>
                            <div class="iitem-desc">Ofrecemos la más alta tecnología en términos de desarrollo de
                                aplicaciones para celular en los sistemas operativos Android.</div>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#appDevModal">
                                Ver Más
                            </button>
                        </span>
                    </div>

                    <div class="col-md-6 col-xl-4 col-12 item">
                        <span class="iitem item-style iitem-hover">
                            <div class="iitem-icon">
                                <i class="material-icons material-icons-outlined md-48">point_of_sale</i>
                            </div>
                            <h2 class="iitem-heading item-heading-large">Punto de venta</h2>
                            <div class="iitem-desc">Creamos un software punto de venta a tu medida, más fácil de usar para aumentar tus ventas,
                                administrar mejor tu negocio y competir con las grandes cadenas de auto servicio.</div>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#posModal">
                                Ver Más
                            </button>
                        </span>
                    </div>

                    <div class="col-md-6 col-xl-4 col-12 item">
                        <span class="iitem item-style iitem-hover">
                            <div class="iitem-icon">
                                <i class="material-icons material-icons-outlined md-48">connected_tv</i>
                            </div>
                            <h2 class="iitem-heading item-heading-large">Marketin digital</h2>
                            <div class="iitem-desc">Aumenta tus ventas con Marketing de alto impacto enfocado en resultados.</div>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalSoftware">
                                Ver Más
                            </button>
                        </span>
                    </div>

                    <div class="col-md-6 col-xl-4 col-12 item">
                        <span class="iitem item-style iitem-hover">
                            <div class="iitem-icon">
                                <i class="material-icons material-icons-outlined md-48">store</i>
                            </div>
                            <h2 class="iitem-heading item-heading-large">E-Commerce</h2>
                            <div class="iitem-desc">Creamos una tienda virtual a fin de que el usuario pueda realizar
                                compras en línea desde el dispositivo que desee.</div>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ecommerceModal">
                                Ver Más
                            </button>
                        </span>
                    </div>
                </div>
            </div>

            <!-- Modal para "Software para sistemas de gestión" -->
            <div class="modal fade" id="modalSoftware" tabindex="-1" role="dialog" aria-labelledby="software-modal-label" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-vertically-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="software-modal-label">Software para sistemas de gestión</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <h4>Automatización Eficiente</h4>
                            <p>Nuestro software para sistemas de gestión automatiza procesos empresariales clave, permitiéndote concentrarte en lo que realmente importa: hacer crecer tu negocio.</p>

                            <h4>Análisis Estadísticos Avanzados</h4>
                            <p>Generamos datos estadísticos detallados que te proporcionan insights valiosos sobre el rendimiento de tu empresa. Estos insights te ayudan a tomar decisiones informadas y estratégicas.</p>

                            <h4>Escalabilidad y Adaptabilidad</h4>
                            <p>Desde pequeñas empresas hasta grandes corporaciones, nuestro software es escalable y se adapta a tus necesidades cambiantes. Ya sea que estés empezando o creciendo, estamos aquí para ayudarte en cada etapa.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Desarrollo de páginas web -->
            <div class="modal fade" id="webDevModal" tabindex="-1" role="dialog" aria-labelledby="webDevModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="webDevModalLabel">Desarrollo de páginas web</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Creamos sitios web únicos y funcionales que se adaptan a tus necesidades, desde páginas corporativas elegantes hasta plataformas interactivas.</p>
                            <p>Nuestros servicios incluyen:</p>
                            <ul>
                                <li>Diseño y desarrollo de sitios web responsivos.</li>
                                <li>Integración de sistemas de gestión de contenido (CMS).</li>
                                <li>Optimización para motores de búsqueda (SEO).</li>
                                <li>Desarrollo de aplicaciones web interactivas.</li>
                            </ul>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Desarrollo de apps -->
            <div class="modal fade" id="appDevModal" tabindex="-1" role="dialog" aria-labelledby="appDevModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="appDevModalLabel">Desarrollo de apps</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Ofrecemos la más alta tecnología en términos de desarrollo de aplicaciones para celular en los sistemas operativos Android.</p>
                            <p>Nuestros servicios incluyen:</p>
                            <ul>
                                <li>Desarrollo de aplicaciones Android nativas.</li>
                                <li>Integración de características avanzadas como geolocalización y notificaciones push.</li>
                                <li>Diseño de interfaces intuitivas y atractivas.</li>
                                <li>Optimización para diferentes tamaños de pantalla y dispositivos.</li>
                            </ul>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Punto de venta -->
            <div class="modal fade" id="posModal" tabindex="-1" role="dialog" aria-labelledby="posModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="posModalLabel">Punto de venta</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Creamos un software punto de venta a tu medida, más fácil de usar para aumentar tus ventas, administrar mejor tu negocio y competir con las grandes cadenas de auto servicio.</p>
                            <p>Nuestros servicios incluyen:</p>
                            <ul>
                                <li>Funcionalidades de gestión de inventario y ventas.</li>
                                <li>Integración de métodos de pago seguros.</li>
                                <li>Informes detallados sobre ventas y tendencias.</li>
                                <li>Soporte técnico continuo y actualizaciones.</li>
                            </ul>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal E-Commerce -->
            <div class="modal fade" id="ecommerceModal" tabindex="-1" role="dialog" aria-labelledby="ecommerceModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="ecommerceModalLabel">E-Commerce</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Creamos una tienda virtual a fin de que el usuario pueda realizar compras en línea desde el dispositivo que desee.</p>
                            <p>Nuestros servicios incluyen:</p>
                            <ul>
                                <li>Desarrollo de plataformas de E-Commerce personalizadas.</li>
                                <li>Integración de sistemas de pago seguros y confiables.</li>
                                <li>Optimización para dispositivos móviles y experiencia de usuario mejorada.</li>
                                <li>Soporte técnico continuo y actualizaciones para mantener tu tienda al día.</li>
                            </ul>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-----------------------------------------------CLIENTES------------------------------------------------->

<section class="section">
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

<div class="btn-group align-items-center justify-content-center servicios-button">
    <a href="/planes" class="btn btn-border btn-with-icon btn-small ripple">
        <span>Conoce los planes que tenemos para ti</span>
        <svg class="btn-icon-right" viewBox="0 0 13 9" width="13" height="9">
            <use xlink:href="assets/img/sprite.svg#arrow-right"></use>
        </svg>
    </a>
</div>



@endsection

@section('titulo')
Inicio
@endsection