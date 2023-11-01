@extends('templates.mycleth')

@section('content')
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading heading-center section-heading-animate">
                        <div class="section-subheading">Lo siento, pero no se encontró la página.</div>
                        <h1>404</h1>
                        <p class="section-desc">Es posible que haya escrito mal la dirección o que la página se haya movido
                        </p>
                    </div>
                    <div class="btn-group align-items-center justify-content-center">
                        <a href="/" class="btn btn-with-icon ripple">
                            <span>Ir a la página de inicio</span>
                            <svg class="btn-icon-right" viewBox="0 0 13 9" width="13" height="9">
                                <use xlink:href="assets/img/sprite.svg#arrow-right"></use>
                            </svg>
                        </a>
                        <a href="/contacto" class="btn btn-border btn-with-icon ripple">
                            <span>Contacta con nosotros</span>
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
@endsection

@section('titulo')
    404 Not Found
@endsection
