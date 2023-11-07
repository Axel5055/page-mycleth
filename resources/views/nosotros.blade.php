@extends('templates.mycleth')

@section('content')
    <link rel="stylesheet" href="assets/css/planes.css">
    <!----------------------------------SOMOS------------------------------------->

    <div class="splitview skewed">
        <div class="panel bottom">
            <div class="content">
                <div class="description">
                    <h1 class="h2-blanco">¿POR QUÉ ELEGIRNOS?</h1>
                    <p>En My Cleth, no solo transformamos ideas en código y diseño; transformamos visiones en
                        realidad digital. Creemos en la innovación, la elegancia técnica y la creación de
                        experiencias
                        digitales excepcionales que perduran en la memoria de quienes las encuentran.</p>
                </div>
                <img src="assets/img/nosotros/team.jpg" alt="Original">
            </div>
        </div>
        <div class="panel top">
            <div class="content">
                <div class="description">
                    <h2>¿QUIÉNES SOMOS?</h2>
                    <p>Somos más que una empresa mexicana de diseño y desarrollo web. Nos consideramos
                        arquitectos
                        digitales, apasionados por crear experiencias en línea que trasciendan lo ordinario.
                        Nos dedicamos a potenciar los negocios de nuestros clientes, dotándolos de una presencia
                        web
                        sólida y atractiva a un precio accesible.</p>
                </div>
                <img src="assets/img/nosotros/team2.jpg" alt="Duotone">
            </div>
        </div>
        <div class="handle"></div>
    </div>

    <!----------------------------------EXPERIENCIA------------------------------------->

    <section class="section experiencia-section">
        <div class="container experiencia-container">
            <div class="row items spincrement-container heading-center">
                <h2 class="nosotros-experiencia">Nuestra experiencia</h2>
                <div class="col-xl-3 col-md-6 col-12 item">
                    <div class="counter-min">
                        <div class="counter-min-block">
                            <div class="counter-min-ico">
                                <i class="material-icons material-icons-outlined md-36">history</i>
                            </div>
                            <div class="counter-min-numb spincrement" data-from="0" data-to="10">0</div>
                        </div>
                        <div class="counter-min-info">
                            <h4 class="counter-min-heading">Años de experiencia</h4>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-12 item">
                    <div class="counter-min">
                        <div class="counter-min-block">
                            <div class="counter-min-ico">
                                <i class="material-icons material-icons-outlined md-36">account_tree</i>
                            </div>
                            <div class="counter-min-numb spincrement" data-from="0" data-to="40">0</div>
                        </div>
                        <div class="counter-min-info">
                            <h4 class="counter-min-heading">Proyectos</h4>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-12 item">
                    <div class="counter-min">
                        <div class="counter-min-block">
                            <div class="counter-min-ico">
                                <i class="material-icons material-icons-outlined md-36">code</i>
                            </div>
                            <div class="counter-min-numb"><span class="spincrement" data-from="0" data-to="160">0</span>K
                            </div>
                        </div>
                        <div class="counter-min-info">
                            <h4 class="counter-min-heading">Lineas de codigo escritas</h4>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-12 item">
                    <div class="counter-min">
                        <div class="counter-min-block">
                            <div class="counter-min-ico">
                                <i class="material-icons material-icons-outlined md-36">developer_board</i>
                            </div>
                            <div class="counter-min-numb"><span class="spincrement" data-from="0" data-to="100">0</span>
                            </div>
                        </div>
                        <div class="counter-min-info">
                            <h4 class="counter-min-heading">Aplicaciones desarrolladas</h4>
                        </div>
                    </div>
                </div>
                <div class="btn-group align-items-center justify-content-center">
                    <a href="/servicios" class="btn btn-border btn-with-icon btn-small ripple">
                        <span>Conoce todos nuestros servicios</span>
                        <svg class="btn-icon-right" viewBox="0 0 13 9" width="13" height="9">
                            <use xlink:href="assets/img/sprite.svg#arrow-right"></use>
                        </svg>
                    </a>
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
                        <img data-src="assets/img/brands/sepycom.png" class="lazy"
                            src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                            alt="">
                    </div><!-- End brands item -->
                </div>
                <div class="col-lg-3 col-md-4 col-sm-4 col-6 item">
                    <!-- Begin brands item -->
                    <div class="brands-item item-style">
                        <img data-src="assets/img/brands/setiyci.png" class="lazy"
                            src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                            alt="">
                    </div><!-- End brands item -->
                </div>
                <div class="col-lg-3 col-md-4 col-sm-4 col-6 item">
                    <!-- Begin brands item -->
                    <div class="brands-item item-style">
                        <img data-src="assets/img/brands/sisi.png" class="lazy"
                            src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                            alt="">
                    </div><!-- End brands item -->
                </div>
            </div>
        </div>
    </section>

    <!----------------------------------EQUIPO-------------------------------------

                <section class="section equipo-section">
                    <div class="container">
                        <div class="row">
                            <header class="col-12">
                                <div class="section-heading heading-center">
                                    <h2>Nuestro Equipo</h2>
                                    <br>
                                </div>
                            </header>
                            <div class="col-lg-4 col-md-6 col-12 item heading-center">
                                <div class="reviews-item item-style">
                                    <div class="reviews-item-header">
                                        <div class="reviews-item-img">
                                            <img data-src="assets/img/t3.jpg" class="img-cover lazy">
                                        </div>
                                        <div class="reviews-item-info">
                                            <h4 class="reviews-item-name item-heading">Ethan Cuaik</h4>
                                            <div class="reviews-item-position">CEO</div>
                                        </div>
                                    </div>
                                    <div class="reviews-item-text">
                                        <p>Empresario, inversor y magnate sudafricano
                                            que también posee las nacionalidades canadiense y estadounidense.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-12 item">
                                <div class="reviews-item item-style">
                                    <div class="reviews-item-header">
                                        <div class="reviews-item-img">
                                            <img data-src="assets/img/team-img-2.jpg" class="img-cover lazy">
                                        </div>
                                        <div class="reviews-item-info">
                                            <h4 class="reviews-item-name item-heading">Hugo Bentancur</h4>
                                            <div class="reviews-item-position">Desarrollador Senior</div>
                                        </div>
                                    </div>
                                    <div class="reviews-item-text">
                                        <p>Programador y empresario estadounidense, uno de los creadores y fundadores de
                                            Facebook
                                            y la red social homónima, y su actual presidente.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12 item">
                                <div class="reviews-item item-style">
                                    <div class="reviews-item-header">
                                        <div class="reviews-item-img">
                                            <img data-src="assets/img/team-img-3.jpg" class="img-cover lazy">
                                        </div>
                                        <div class="reviews-item-info">
                                            <h4 class="reviews-item-name item-heading">Ivan Name</h4>
                                            <div class="reviews-item-position">Desarrollador Semi Senior</div>
                                        </div>
                                    </div>
                                    <div class="reviews-item-text">
                                        <p>Empresario, diseñador industrial, magnate empresarial, propietario de medios e
                                            inversor
                                            estadounidense. Fue cofundador y presidente ejecutivo de Apple​ y máximo
                                            accionista
                                            individual de The Walt Disney Company.​.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12 col-12 item">
                                <div class="reviews-item item-style">
                                    <div class="reviews-item-header">
                                        <div class="reviews-item-img">
                                            <img data-src="assets/img/t2.jpg" class="img-cover lazy">
                                        </div>
                                        <div class="reviews-item-info">
                                            <h4 class="reviews-item-name item-heading">John Wick</h4>
                                            <div class="reviews-item-position">Desarrollador Junior</div>
                                        </div>
                                    </div>
                                    <div class="reviews-item-text">
                                        <p>Es un magnate empresarial, desarrollador de software, inversor, autor y
                                            filántropo
                                            estadounidense. Es cofundador de Microsoft, junto con su difunto amigo de la
                                            infancia
                                            Paul
                                            Allen.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>-->
@endsection

@section('titulo')
    Nosotros
@endsection
