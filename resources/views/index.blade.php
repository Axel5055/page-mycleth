@extends('templates.mycleth')

@section('content')

<section class="section-bgc intro">
    <div class="intro-item intro-item-type-1" style="background-image: url('assets/img/intro-img1.jpg');">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="intro-content" style="--margin-left: 4rem;">
                        <div class="section-heading shm-none">
                            <!-- <div class="section-subheading">Free template</div> -->
                            <h1>Nuestro Enfoque</h1>
                            <p class="section-desc">
                            Nos dedicamos a brindar soluciones digitales que trascienden las expectativas. 
                            Desde el diseño web hasta el desarrollo de software y el marketing digital, cada 
                            iniciativa está imbuida con nuestra pasión por la innovación y la excelencia.
                            </p>
                        </div>
                        <div class="btn-group intro-btns">
                            <a href="/nosotros" class="btn btn-border btn-with-icon btn-small ripple">
                                <span>Descubrenos</span>
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
</section>

<section class="section section-bgc">
    <div class="container">
        <div class="row items">
            <header class="col-12">
                <div class="section-heading heading-center">
                    <div class="section-subheading">Mas de nuestra filosofia</div>
                    <br><br>
                    <!-- <h2>Latest News</h2> -->
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
                            <a href="news-post.html" title="Haz crecer tu negocio">Haz crecer tu negocio</a>
                        </h3>
                        <div class="news-item-desc">
                            <p>Fomentamos el crecimiento y desarrolo de nuestros clientes al optimizar sus recursos IT
                                poniendo a servicio mas de 10 años de experienia con un alto nivel de profecionalismo y
                                pasion por la tecnologia.</p>
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
                            <a href="news-post.html" title="Desarrollo Móvil">Desarrollo Móvil</a>
                        </h3>
                        <div class="news-item-desc">
                            <p>Con el avance de las tecnologías móviles, es importante tener apps propias para sus usuarios, porque les permite estar conectados casi constantemente con y sin conexión a internet para acceder a la información de la empresa desde cualquier lugar.</p>
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
                            <a href="news-post.html" title="Desarrollo de Sistemas a la Medida">Desarrollo de Sistemas <br>a la Medida</a>
                        </h3>
                        <div class="news-item-desc">
                            <p>Nace de la necesidad de resolver un problema muy particular de su empresa, o bien, porque desea tener una ventaja competitiva sobre sus competidores o porque no existe una solución estándar en el mercado que se adapte a sus necesidades.</p>
                        </div>
                    </div>
                </article>
            </div>
            <footer class="section-footer col-12 item section-footer-animate">
                <div class="btn-group align-items-center justify-content-center">
                    <a href="/nosotros" class="btn btn-border btn-with-icon btn-small ripple">
                        <span>Descubrenos</span>
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