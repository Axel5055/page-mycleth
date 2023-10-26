@extends('templates.mycleth')

@section('content')
<section class="section">
    <div class="container">
        <div class="row">
            <header class="col-12">
                <div class="section-heading heading-center nosotros">
                    <!-- <div class="section-subheading">industry leader</div> -->
                    <h1>¿Quiénes Somos?</h1>

                    <div class="row nosotros-creative">
                        <div class="col-6">
                            <p>
                            Somos más que una empresa mexicana de diseño y desarrollo web. Nos consideramos arquitectos 
                            digitales, apasionados por crear experiencias en línea que trasciendan lo ordinario. 
                            Nos dedicamos a potenciar los negocios de nuestros clientes, dotándolos de una presencia web 
                            sólida y atractiva a un precio accesible.
                            </p>
                        </div>
                        <div class="col-6">
                        <img data-src="assets/img/nosotros/creative.jpg" class="img-cover img-responsive lazy"
                            alt="Creative">
                        </div>
                    </div>

                    <div class="row nosotros-team">
                    <div class="col-6">
                        <img data-src="assets/img/nosotros/team.jpg" class="img-cover img-responsive lazy"
                            src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                            alt="Team">
                        </div>
                        <div class="col-6">
                            <p>
                            En esta era digital, donde el marketing redefine las reglas del juego, nos destacamos por 
                            nuestra dedicación inquebrantable, nuestra profunda experiencia y nuestro compromiso 
                            inflexible. Trabajamos incansablemente para ayudar a las empresas a destacarse en línea,
                            a contar sus historias de manera cautivadora y a interactuar de manera significativa con 
                            su audiencia.
                            </p>
                        </div>
                    </div>

                    <div class="row nosotros-code">
                        <div class="col-6">
                            <p>
                            En My Cleth, no solo transformamos ideas en código y diseño; transformamos visiones en 
                            realidad digital. Creemos en la innovación, la elegancia técnica y la creación de experiencias 
                            digitales excepcionales que perduran en la memoria de quienes las encuentran.
                            </p>
                        </div>
                        <div class="col-6">
                        <img data-src="assets/img/nosotros/code.jpg" class="img-cover img-responsive lazy"
                            src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                            alt="Code">
                        </div>
                    </div>
                    <p>
                    <br><br>
                    <!-- <p class="section-desc">We are an acknowledged corporate industry leader.</p> -->
                </div>
            </header>

           <!--- <div class="col-12">
                <div class="content">
                    <div class="item-bordered item-border-radius">
                        <img data-src="assets/img/about-img.jpg" class="img-cover img-responsive lazy"
                            src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                            alt="Team">
                    </div>
                </div>
            </div>
        </div>
    </div>
            -->

    <div class="container">
        <div class="row items spincrement-container">
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
                        <div class="counter-min-numb spincrement" data-from="0" data-to="160">0</div>
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
        </div>
    </div>
</section>

<div class="btn-group align-items-center justify-content-center">
    <a href="/servicios" class="btn btn-border btn-with-icon btn-small ripple">
        <span>Conoce todos nuestros servicios</span>
        <svg class="btn-icon-right" viewBox="0 0 13 9" width="13" height="9">
            <use xlink:href="assets/img/sprite.svg#arrow-right"></use>
        </svg>
    </a>
</div>

<!-- <section class="section section-without-padding-bottom">
    <div class="container">
        <div class="row items spincrement-container">
            <div class="col-xl-3 col-md-6 col-12 item">
                <div class="counter-min">
                    <div class="counter-min-block">
                        <div class="counter-min-ico">
                            <i class="material-icons material-icons-outlined md-40" style="color:white">history</i>
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
                            <i class="material-icons material-icons-outlined md-40">account_tree</i>
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
                            <i class="material-icons material-icons-outlined md-40">code</i>
                        </div>
                        <div class="counter-min-numb spincrement" data-from="0" data-to="160">0</div>
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
        </div>
    </div>
</section> -->

<section class="section section-bgc">
    <div class="container">
        <div class="row litems">
            <header class="col-12">
                <div class="section-heading heading-center">
                    <div class="section-subheading">Algunas razones de <br> ¿Por qué elegirnos?</div>
                    <h2>Nuestas Habilidades</h2>
                </div>
            </header>
            <div class="col-lg-4 col-md-6 col-12 litem">
                <div class="ini">
                    <div class="ini-count">01</div>
                    <div class="ini-info">
                        <h3 class="ini-heading item-heading-large">High Quality <br> Hardware</h3>
                        <div class="ini-desc">
                            <p>We use top-notch hardware to develop the most efficient apps for our customers</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 litem">
                <div class="ini">
                    <div class="ini-count">02</div>
                    <div class="ini-info">
                        <h3 class="ini-heading item-heading-large">Dedicated 24\7 <br> Support</h3>
                        <div class="ini-desc">
                            <p>You can rely on our 24/7 tech support that will gladly solve any app issue you may have.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 litem">
                <div class="ini">
                    <div class="ini-count">03</div>
                    <div class="ini-info">
                        <h3 class="ini-heading item-heading-large">30-Day Money-back Guarantee</h3>
                        <div class="ini-desc">
                            <p>If you are not satisfied with our apps, we will return your money in the first 30 days.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 litem">
                <div class="ini">
                    <div class="ini-count">04</div>
                    <div class="ini-info">
                        <h3 class="ini-heading item-heading-large">Agile and Fast <br> Working Style</h3>
                        <div class="ini-desc">
                            <p>This type of approach to our work helps our specialists to quickly develop better apps.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 litem">
                <div class="ini">
                    <div class="ini-count">05</div>
                    <div class="ini-info">
                        <h3 class="ini-heading item-heading-large">Some Apps <br> are Free</h3>
                        <div class="ini-desc">
                            <p>We also develop free apps that can be downloaded online without any payments.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 litem">
                <div class="ini">
                    <div class="ini-count">06</div>
                    <div class="ini-info">
                        <h3 class="ini-heading item-heading-large">High Level <br> of Usability</h3>
                        <div class="ini-desc">
                            <p>All our products have high usability allowing users to easily operate the apps.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="row">
            <header class="col-12">
                <div class="section-heading heading-center">
                    <div class="section-subheading">Conoce a </div>
                    <h2>Nuestro Equipo</h2>
                </div>
            </header>
            <div class="col-lg-4 col-md-6 col-12 item"></div>
            <div class="col-lg-4 col-md-6 col-12 item">
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
            <div class="col-lg-4 col-md-6 col-12 item"></div>
            <!-- <div class="col-lg-4 col-md-6 col-12 item">
                <div class="reviews-item item-style">
                    <div class="reviews-item-header">
                        <div class="reviews-item-img">
                            <img data-src="assets/img/auth-img-2.jpg" class="img-cover lazy"
                                src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                                alt="">
                        </div>
                        <div class="reviews-item-info">
                            <h4 class="reviews-item-name item-heading">Rupert Wood</h4>
                            <div class="reviews-item-position">Regular client</div>
                        </div>
                    </div>
                    <div class="reviews-item-text">
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Suscipit consequuntur sequi eos
                            beatae deleniti culpa cupiditate rerum. Similique, blanditiis rem perspiciatis fugiat
                            voluptatem quas officiis ducimus reprehenderit.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-12 item">
                <div class="reviews-item item-style">
                    <div class="reviews-item-header">
                        <div class="reviews-item-img">
                            <img data-src="assets/img/auth-img-3.jpg" class="img-cover lazy"
                                src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                                alt="">
                        </div>
                        <div class="reviews-item-info">
                            <h4 class="reviews-item-name item-heading">Samantha Brown</h4>
                            <div class="reviews-item-position">Regular client</div>
                        </div>
                    </div>
                    <div class="reviews-item-text">
                        <p>We sincerely hope that each and every user entering our website will find exactly. With
                            advanced features of activating account and new login widgets, you will definitely have a
                            great experience of using our web page.</p>
                    </div>
                </div>
            </div>
            <footer class="section-footer col-12 section-footer-animate">
                <div class="btn-group align-items-center justify-content-center">
                    <a href="#!" class="btn btn-with-icon btn-w240 ripple">
                        <span>See All Reviews</span>
                        <svg class="btn-icon-right" viewBox="0 0 13 9" width="13" height="9">
                            <use xlink:href="assets/img/sprite.svg#arrow-right"></use>
                        </svg>
                    </a>
                </div>
            </footer> -->
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
                        <p>Programador y empresario estadounidense, uno de los creadores y fundadores de Facebook
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
                        <p>Empresario, diseñador industrial, magnate empresarial, propietario de medios e inversor
                            estadounidense. Fue cofundador y presidente ejecutivo de Apple​ y máximo accionista
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
                        <p>Es un magnate empresarial, desarrollador de software, inversor, autor y filántropo
                            estadounidense. Es cofundador de Microsoft, junto con su difunto amigo de la infancia Paul
                            Allen.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection

@section('titulo')
Inicio
@endsection