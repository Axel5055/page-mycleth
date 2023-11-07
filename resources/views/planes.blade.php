@extends('templates.mycleth')

@section('content')
    <link rel="stylesheet" href="assets/css/planes.css">

    <!-- Pricing-->
    <section class="section section-sm section-bottom-70 section-fluid bg-default area">
        <ul class="circles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
        <div class="container heading-center">
            <div class="section-heading heading-center">
                <!-- <div class="section-subheading">industry leader</div> -->
                <h2 class="h2-blanco">PRECIOS DE PÁGINAS WEB</h2>
            </div>
            <div class="row row-30 justify-content-center">
                <div class="col-md-6 col-lg-5 col-xl-4">
                    <div class="box-pricing box-pricing-black">
                        <div class="box-pricing-body">
                            <h5 class="box-pricing-title">Paquete Economico</h5>
                            <h3 class="box-pricing-price">$5,000 MXN</h3>
                            <div class="box-pricing-time">Pago único</div>
                            <div class="box-pricing-divider">
                                <div class="divider"></div><span>Economico</span>
                            </div>
                            <ul class="box-pricing-list">
                                <li class="active">Hasta 2 secciones.</li>
                                <li class="active">Adaptación Móvil.</li>
                                <li class="active">Seguridad SSL.</li>
                                <li class="active">1 Cuenta de Email</li>
                                <br>
                                <div class="area">
                                    <p class="text-center">Este paquete es ideal para una presencia en internet rápida,
                                        eficiente y eficaz.</p>
                                </div>
                                <ul class="circles">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                                <br>
                                <br>
                            </ul>
                            <div>
                                <div class="divider"></div>
                                <br>
                                <p>*Entrega de 4 a 6 días.</p>
                            </div>
                        </div>
                        <div class="box-pricing-button"><a class="button button-lg button-block button-gray-4"
                                href="/404" target="_blank">VER MÁS CARACTERÍSTICAS</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-5 col-xl-4">
                    <div class="box-pricing box-pricing-black box-pricing-popular">
                        <div class="box-pricing-body">
                            <h5 class="box-pricing-title">Paquete Emprendedor</h5>
                            <h3 class="box-pricing-price">$6,500 MXN</h3>
                            <div class="box-pricing-time">Pago único</div>
                            <div class="box-pricing-divider">
                                <div class="divider"></div><span>Emprendedor</span>
                            </div>
                            <ul class="box-pricing-list">
                                <li class="active">Hasta 4 secciones.</li>
                                <li class="active">Adaptación Móvil.</li>
                                <li class="active">Seguridad SSL.</li>
                                <li class="active">3 Cuenta de Email</li>
                                <br>
                                <div class="area">
                                    <p class="text-center">Ideal para emprendedores, muestre sus productos o servicios de
                                        una
                                        manera rápida y eficiente.</p>
                                </div>
                                <ul class="circles">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                                <br>
                            </ul>
                            <div>
                                <div class="divider"></div>
                                <br>
                                <p>*Entrega de 6 a 8 días.</p>
                            </div>
                        </div>
                        <div class="box-pricing-button"><a class="button button-lg button-block button-primary"
                                href="/404" target="_blank">VER MÁS CARACTERÍSTICAS</a></div>
                        <div class="box-pricing-badge">popular</div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-5 col-xl-4">
                    <div class="box-pricing box-pricing-black">
                        <div class="box-pricing-body">
                            <h5 class="box-pricing-title">Paquete Negocios</h5>
                            <h3 class="box-pricing-price">$9,000 MXN</h3>
                            <div class="box-pricing-time">Pago único</div>
                            <div class="box-pricing-divider">
                                <div class="divider"></div><span class="size-span">Negocios</span>
                            </div>
                            <ul class="box-pricing-list">
                                <li class="active">Hasta 6 secciones.</li>
                                <li class="active">Adaptación Móvil.</li>
                                <li class="active">Seguridad SSL.</li>
                                <li class="active">10 Cuenta de Email</li>
                                <br>
                                <div class="area">
                                    <p class="text-center">haz crecer tu negocio, muestre su modelo de negocio, ofrezca sus
                                        productos o servicios de una manera profesional,</p>
                                </div>
                                <ul class="circles">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </ul>
                            <div>
                                <div class="divider"></div>
                                <br>
                                <p>*Entrega de 8 a 10 días.</p>
                            </div>
                        </div>
                        <div class="box-pricing-button"><a class="button button-lg button-block button-gray-4"
                                href="/404" target="_blank" target="_blank">VER MÁS CARACTERÍSTICAS</a></div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="btn-group align-items-center justify-content-center">
            <a href="/contacto" class="btn btn-border-plan btn-with-icon btn-small ripple">
                <span class="btn-planweb">Contáctanos y materialicemos tus ideas</span>
                <svg class="btn-icon-right btn-planweb" viewBox="0 0 13 9" width="13" height="9">
                    <use xlink:href="assets/img/sprite.svg#arrow-right"></use>
                </svg>
            </a>
        </div>
    </section>
@endsection

@section('titulo')
    Planes
@endsection
