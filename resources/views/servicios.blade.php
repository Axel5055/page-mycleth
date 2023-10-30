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
                                <div class="iitem-desc">Soluciones a tu medida, locales o en la nube, automatizando
                                    procesos,
                                    generando datos estadísticos para garantizar la mejora continua.
                                </div>
                                <br>
                                <div class="boton-center align-items-center justify-content-center">
                                    <div class="btn-group align-items-center justify-content-center">
                                        <a href="#!" class="btn btn-border iitem-desc btn-with-icon btn-small ripple"
                                            data-bs-toggle="modal" data-bs-target="#modalSoftware">
                                            <span class="iitem-desc">Ver más</span>
                                            <svg class="btn-icon-right iitem-desc" viewBox="0 0 13 9" width="13"
                                                height="9">
                                                <use xlink:href="assets/img/sprite.svg#arrow-right"></use>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <br>
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
                                    necesidades, desde páginas corporativas elegantes hasta plataformas interactivas.
                                </div>
                                <br>
                                <div class="boton-center align-items-center justify-content-center">
                                    <div class="btn-group align-items-center justify-content-center">
                                        <a href="#!" class="btn btn-border iitem-desc btn-with-icon btn-small ripple"
                                            data-bs-toggle="modal" data-bs-target="#modalWeb">
                                            <span class="iitem-desc">Ver más</span>
                                            <svg class="btn-icon-right iitem-desc" viewBox="0 0 13 9" width="13"
                                                height="9">
                                                <use xlink:href="assets/img/sprite.svg#arrow-right"></use>
                                            </svg>
                                        </a>
                                    </div>
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
                                    aplicaciones para celular en los sistemas operativos Android.
                                </div>
                                <br>
                                <div class="boton-center align-items-center justify-content-center">
                                    <div class="btn-group align-items-center justify-content-center">
                                        <a href="#!" class="btn btn-border iitem-desc btn-with-icon btn-small ripple"
                                            data-bs-toggle="modal" data-bs-target="#modalApps">
                                            <span class="iitem-desc">Ver más</span>
                                            <svg class="btn-icon-right iitem-desc" viewBox="0 0 13 9" width="13"
                                                height="9">
                                                <use xlink:href="assets/img/sprite.svg#arrow-right"></use>
                                            </svg>
                                        </a>
                                    </div>
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
                                    para aumentar tus ventas.
                                </div>
                                <br>
                                <div class="boton-center align-items-center justify-content-center">
                                    <div class="btn-group align-items-center justify-content-center">
                                        <a href="#!" class="btn btn-border iitem-desc btn-with-icon btn-small ripple"
                                            data-bs-toggle="modal" data-bs-target="#modalPos">
                                            <span class="iitem-desc">Ver más</span>
                                            <svg class="btn-icon-right iitem-desc" viewBox="0 0 13 9" width="13"
                                                height="9">
                                                <use xlink:href="assets/img/sprite.svg#arrow-right"></use>
                                            </svg>
                                        </a>
                                    </div>
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
                                <div class="iitem-desc">Aumenta tus ventas con Marketing de alto impacto enfocado en
                                    resultados.
                                </div>
                                <br>
                                <div class="boton-center align-items-center justify-content-center">
                                    <div class="btn-group align-items-center justify-content-center">
                                        <a href="#!" class="btn btn-border iitem-desc btn-with-icon btn-small ripple"
                                            data-bs-toggle="modal" data-bs-target="#modalMkt">
                                            <span class="iitem-desc">Ver más</span>
                                            <svg class="btn-icon-right iitem-desc" viewBox="0 0 13 9" width="13"
                                                height="9">
                                                <use xlink:href="assets/img/sprite.svg#arrow-right"></use>
                                            </svg>
                                        </a>
                                    </div>
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
                                    compras en línea desde el dispositivo que desee.
                                </div>
                                <br>
                                <div class="boton-center">
                                    <div class="btn-group align-items-center justify-content-center">
                                        <a href="#!" class="btn btn-border iitem-desc btn-with-icon btn-small ripple"
                                            data-bs-toggle="modal" data-bs-target="#modalEcommerce">
                                            <span class="iitem-desc">Ver más</span>
                                            <svg class="btn-icon-right iitem-desc" viewBox="0 0 13 9" width="13"
                                                height="9">
                                                <use xlink:href="assets/img/sprite.svg#arrow-right"></use>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <x-modal />
                <div class="ancho btn-group align-items-center justify-content-center">
                    <div class="boton btn-group align-items-center justify-content-center intro-btns  mx-5">
                        <a href="/planes" class="btn btn-border btn-with-icon btn-small ripple">
                            <span>Conoce nuestros planes</span>
                            <svg class="btn-icon-right" viewBox="0 0 13 9" width="13" height="9">
                                <use xlink:href="assets/img/sprite.svg#arrow-right"></use>
                            </svg>
                        </a>
                    </div>
                    <div class="boton btn-group align-items-center justify-content-center intro-btns r">
                        <a href="/contacto" class="btn btn-border btn-with-icon btn-small ripple">
                            <span>Contactanos para cotizar a tu medida</span>
                            <svg class="btn-icon-right" viewBox="0 0 13 9" width="13" height="9">
                                <use xlink:href="assets/img/sprite.svg#arrow-right"></use>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
                        <img data-src="assets/img/brands/circle.png" class="lazy"
                            src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                            alt="">
                    </div><!-- End brands item -->
                </div>
                <div class="col-lg-3 col-md-4 col-sm-4 col-6 item">
                    <!-- Begin brands item -->
                    <div class="brands-item item-style">
                        <img data-src="assets/img/brands/codelab.png" class="lazy"
                            src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                            alt="">
                    </div><!-- End brands item -->
                </div>
                <div class="col-lg-3 col-md-4 col-sm-4 col-6 item">
                    <!-- Begin brands item -->
                    <div class="brands-item item-style">
                        <img data-src="assets/img/brands/earth.png" class="lazy"
                            src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                            alt="">
                    </div><!-- End brands item -->
                </div>
                <div class="col-lg-3 col-md-4 col-sm-4 col-6 item">
                    <!-- Begin brands item -->
                    <div class="brands-item item-style">
                        <img data-src="assets/img/brands/hexa.png" class="lazy"
                            src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                            alt="">
                    </div><!-- End brands item -->
                </div>
                <div class="col-lg-3 col-md-4 col-sm-4 col-6 item">
                    <!-- Begin brands item -->
                    <div class="brands-item item-style">
                        <img data-src="assets/img/brands/lightai.png" class="lazy"
                            src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                            alt="">
                    </div><!-- End brands item -->
                </div>
                <div class="col-lg-3 col-md-4 col-sm-4 col-6 item">
                    <!-- Begin brands item -->
                    <div class="brands-item item-style">
                        <img data-src="assets/img/brands/nirastate.png" class="lazy"
                            src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                            alt="">
                    </div><!-- End brands item -->
                </div>
                <div class="col-lg-3 col-md-4 col-sm-4 col-6 item">
                    <!-- Begin brands item -->
                    <div class="brands-item item-style">
                        <img data-src="assets/img/brands/treva.png" class="lazy"
                            src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                            alt="">
                    </div><!-- End brands item -->
                </div>
                <div class="col-lg-3 col-md-4 col-sm-4 col-6 item">
                    <!-- Begin brands item -->
                    <div class="brands-item item-style">
                        <img data-src="assets/img/brands/zootv.png" class="lazy"
                            src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                            alt="">
                    </div><!-- End brands item -->
                </div>
            </div>
        </div>
    </section>
@endsection

@section('titulo')
    Servicios
@endsection
