@extends('templates.mycleth')

@section('content')
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <!--------------------------------------NUESTRO ENFOQUE----------------------------------------------->

    <!-- Carousel -->

    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="7000">
                <div class="intro-item intro-item-type-1" style="background-image: url('assets/img/intro-img1.jpg');">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="intro-content" style="--margin-left: 4rem;">
                                    <div class="section-heading shm-none">
                                        <div class="section-subheading">My Cleth</div>
                                        <h1>Haz crecer tu negocio</h1>
                                        <p class="section-desc">Fomentamos el crecimiento y desarrollo de nuestros
                                            clientes al optimizar sus recursos de TI poniendo a su servicio más de 10
                                            años de experiencia con un alto nivel de profesionalismo y pasión por la
                                            tecnología.</p>
                                    </div>
                                    <div class="btn-group intro-btns">
                                        <a href="/nosotros" class="btn btn-secondary btn-with-icon btn-small ripple">
                                            <span>DESCUBRENOS</span>
                                            <svg class="btn-icon-right" viewBox="0 0 13 9" width="13" height="9">
                                                <use xlink:href="assets/img/sprite.svg#arrow-right"></use>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="7000">
                <div class="intro-item intro-item-type-1" style="background-image: url('assets/img/intro-img5.jpg');">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="intro-content" style="--margin-left: 4rem;">
                                    <div class="section-heading shm-none">
                                        <div class="section-subheading">My Cleth</div>
                                        <h1>Posicionate en Internet</h1>
                                        <p class="section-desc">Toda empresa ya sea grande, mediana o pequeña necesita y
                                            debe tener un sitio web ya que brinda una imagen profesional de la empresa,
                                            ventajas competitivas y valores agregados para el cliente.</p>
                                    </div>
                                    <div class="btn-group intro-btns">
                                        <a href="/nosotros" class="btn btn-secondary btn-with-icon btn-small ripple">
                                            <span>DESCUBRENOS</span>
                                            <svg class="btn-icon-right" viewBox="0 0 13 9" width="13" height="9">
                                                <use xlink:href="assets/img/sprite.svg#arrow-right"></use>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="intro-item intro-item-type-1" style="background-image: url('assets/img/intro-img6.jpg');">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="intro-content" style="--margin-left: 4rem;">
                                    <div class="section-heading shm-none">
                                        <div class="section-subheading">My Cleth</div>
                                        <h1>Desarrollo de sistemas a medida</h1>
                                        <p class="section-desc">Nace de la necesidad de resolver un problema muy particular
                                            de su empresa, o bien porque desea tener una ventaja competitiva sobre sus
                                            competidores o porque no existe una solución estándar en el mercado que se
                                            adapte a su necesidad.</p>
                                    </div>
                                    <div class="btn-group intro-btns">
                                        <a href="/nosotros" class="btn btn-secondary btn-with-icon btn-small ripple">
                                            <span>DESCUBRENOS</span>
                                            <svg class="btn-icon-right" viewBox="0 0 13 9" width="13" height="9">
                                                <use xlink:href="assets/img/sprite.svg#arrow-right"></use>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- End Carousel -->

    <!--------------------------------------NUESTRAS BASES----------------------------------------------->

    <section class="section section-bgc">
        <div class="container">
            <div class="row items">

                <header class="col-12">
                    <div class="section-heading heading-center">
                        <div class="section-subheading">Nuestra filosofía</div>
                        <h2>Nuestras bases</h2>
                    </div>
                </header>

                <div class="col-lg-4 col-md-6 col-12 item">
                    <article class="news-item item-style">
                        <a href="news-post.html" class="news-item-img el">
                            <img data-src="assets/img/news-img-1.jpg" class="lazy"
                                src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                                alt="">
                        </a>
                        <div class="news-item-info">
                            <!-- <div class="news-item-date">07/01/2021</div> -->
                            <h3 class="news-item-heading item-heading">
                                <a href="news-post.html" title="Haz crecer tu negocio">Misión</a>
                            </h3>
                            <div class="news-item-desc">
                                <p>Brindar la mejor atencion posible y elevar continuamente el nivel de
                                    la experiencia del cliente mediante el uso de internet y la tecnología.</p>
                            </div>
                        </div>
                    </article>
                </div>

                <div class="col-lg-4 col-md-6 col-12 item">
                    <article class="news-item item-style">
                        <a href="news-post.html" class="news-item-img el">
                            <img data-src="assets/img/news-img-2.jpg" class="lazy"
                                src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                                alt="">
                        </a>
                        <div class="news-item-info">
                            <!-- <div class="news-item-date">05/01/2021</div> -->
                            <h3 class="news-item-heading item-heading">
                                <a href="news-post.html" title="Desarrollo Móvil">Visión</a>
                            </h3>
                            <div class="news-item-desc">
                                <p>Desarrollar, investigar y encontrar tecnologias sostenibles y actualizadas para mantener
                                    a nuestros clientes seguros y al día.</p>
                            </div>
                        </div>
                    </article>
                </div>

                <div class="col-lg-4 col-md-6 col-12 item">
                    <article class="news-item item-style">
                        <a href="news-post.html" class="news-item-img el">
                            <img data-src="assets/img/news-img-3.jpg" class="lazy"
                                src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                                alt="">
                        </a>
                        <div class="news-item-info">
                            <!-- <div class="news-item-date">01/01/2021</div> -->
                            <h3 class="news-item-heading item-heading">
                                <a href="news-post.html" title="Desarrollo de Sistemas a la Medida">Valores</a>
                            </h3>
                            <div class="news-item-desc">
                                <p>Seguridad, integridad, atencion y pasión.</p>
                            </div>
                        </div>
                    </article>
                </div>

                <!--------------------------------------BOTÓN NOSOTROS----------------------------------------------->

                <footer class="section-footer col-12 item section-footer-animate">
                    <div class="btn-group align-items-center justify-content-center">
                        <a href="/nosotros" class="btn btn-border btn-with-icon btn-small ripple">
                            <span>Conoce más sobre nosotros</span>
                            <svg class="btn-icon-right" viewBox="0 0 13 9" width="13" height="9">
                                <use xlink:href="assets/img/sprite.svg#arrow-right"></use>
                            </svg>
                        </a>
                    </div>
                </footer>

            </div>
        </div>
    </section>

    <!--------------------------------------NUESTROS SERVICIOS----------------------------------------------->

    <section class="section">
        <div class="container">
            <div class="row">
                <header class="col-12">
                    <div class="section-heading heading-center">
                        <div class="section-subheading"></div>
                        <h2>Nuestros Servicios</h2>
                    </div>
                </header>
                <div class="col-lg-4 col-md-6 col-12 item">
                    <a href="#!" class="iitem item-style iitem-hover">
                        <div class="iitem-icon">
                            <i class="material-icons material-icons-outlined md-48">corporate_fare</i>
                        </div>
                        <div class="iitem-icon-bg">
                            <i class="material-icons material-icons-outlined">corporate_fare</i>
                        </div>
                        <h3 class="iitem-heading item-heading-large">Software para sistemas de gestión</h3>
                        <div class="iitem-desc">Soluciones a tu medida, locales o en la nube, automatizando
                            procesos,
                            generando datos estadísticos para garantizar la mejora continua.</div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-12 item">
                    <a href="#!" class="iitem item-style iitem-hover">
                        <div class="iitem-icon">
                            <i class="material-icons material-icons-outlined md-48">code</i>
                        </div>
                        <div class="iitem-icon-bg">
                            <i class="material-icons material-icons-outlined">code</i>
                        </div>
                        <h3 class="iitem-heading item-heading-large">Desarrollo de páginas web</h3>
                        <div class="iitem-desc">Creamos sitios web únicos y funcionales que se adaptan a tus
                            necesidades,
                            desde páginas corporativas elegantes hasta plataformas interactivas.</div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-12 col-12 item">
                    <a href="#!" class="iitem item-style iitem-hover">
                        <div class="iitem-icon">
                            <i class="material-icons material-icons-outlined md-48">apps</i>
                        </div>
                        <div class="iitem-icon-bg">
                            <i class="material-icons material-icons-outlined">apps</i>
                        </div>
                        <h3 class="iitem-heading item-heading-large">Desarrollo de apps</h3>
                        <div class="iitem-desc">Ofrecemos la más alta tecnología en términos de desarrollo de
                            aplicaciones para celular en los sistemas operativos Android.</div>
                    </a>
                </div>

                <!--------------------------------------BOTÓN SERVICIOS----------------------------------------------->

                <footer class="section-footer col-12 item section-footer-animate">
                    <div class="btn-group align-items-center justify-content-center">
                        <a href="/servicios" class="btn btn-border btn-with-icon btn-small ripple">
                            <span>Conoce todos nuestros servicios</span>
                            <svg class="btn-icon-right" viewBox="0 0 13 9" width="13" height="9">
                                <use xlink:href="assets/img/sprite.svg#arrow-right"></use>
                            </svg>
                        </a>
                    </div>
                </footer>

            </div>
        </div>
    </section>
@endsection

@section('titulo')
    Inicio
@endsection
