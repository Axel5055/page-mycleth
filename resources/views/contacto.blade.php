@extends('templates.mycleth')

@section('content')
    <div class="section">
        <div class="container">
            <div class="row content-items">
                <div class="col-12">
                    <div class="section-heading heading-center contacto">
                        <h1>CONTACTO</h1>
                    </div>
                </div>
                <!-----------------------------------ENCUENTRANOS----------------------------------------------------->

                <div class="col-xl-4 col-md-5 content-item">
                    <div class="contact-info section-bgc">
                        <h3>Encuentranos:</h3><br><br>
                        <ul class="contact-list">
                            <li>
                                <i class="material-icons material-icons-outlined md-22">location_on</i>
                                <div class="footer-contact-info">
                                    <a href="https://maps.app.goo.gl/BqtnaNxvp4yZTQ968" target="_blank">
                                        Jordaens 73, Cd. de los Deportes, Benito Juárez 03710, CDMX
                                    </a>
                                </div>
                            </li>
                            <li>
                                <i class="material-icons material-icons-outlined md-22">smartphone</i>
                                <div class="footer-contact-info">
                                    <a href="tel:+525582526624" target="_blank" class="formingHrefTel">+52 55 2526 1379
                                        24</a>
                                </div>
                            </li>
                            <li>
                                <i class="material-icons material-icons-outlined md-22">email</i>
                                <div class="footer-contact-info">
                                    <a href="mailto:contacto@mycleth.com.mx" target="_blank">contacto@mycleth.com.mx</a>
                                </div>
                            </li>
                            <li>
                                <i class="material-icons material-icons-outlined md-22">schedule</i>
                                <div class="footer-contact-info">
                                    <p>Lunes - Viernes: 9:00am - 06:00pm</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-----------------------------------FORMULARIO----------------------------------------------------->
                <div class="col-xl-8 col-md-7 content-item">
                    <form action="{{ route('envio') }}" method="post"
                        class="form-submission contact-form contact-form-padding" novalidate>
                        @csrf
                        <input type="hidden" name="Subject" value="Contact form">

                        <div class="row gutters-default">
                            <div class="col-12">
                                <h3>Formulario de Contacto</h3><br>
                            </div>

                            <div class="col-xl-4 col-sm-6 col-12">
                                <div class="form-field">
                                    <label for="contact-name" class="form-field-label">Nombre Completo</label>
                                    <input type="text" class="form-field-input" name="Name" value=""
                                        autocomplete="off" id="contact-name" required
                                        data-pristine-required-message="Este campo es obligatorio.">
                                </div>
                            </div>

                            <div class="col-xl-4 col-sm-6 col-12">
                                <div class="form-field">
                                    <label for="contact-name" class="form-field-label">Nombre de la empresa</label>
                                    <input type="text" class="form-field-input" name="Empresa" value=""
                                        autocomplete="off" id="contact-name"
                                        data-pristine-required-message="Este campo es obligatorio.">
                                </div>
                            </div>

                            <div class="col-xl-4 col-sm-6 col-12">
                                <div class="form-field">
                                    <label for="contact-phone" class="form-field-label">Telefono Celular</label>
                                    <input type="tel" class="form-field-input mask-phone" name="Phone" value=""
                                        autocomplete="off" id="contact-phone" required
                                        data-pristine-required-message="Este campo es obligatorio.">
                                </div>
                            </div>

                            <div class="col-xl-4 col-12">
                                <div class="form-field">
                                    <label for="contact-email" class="form-field-label">Correo Electronico</label>
                                    <input type="email" class="form-field-input" name="Email" value=""
                                        autocomplete="off" id="contact-email" required
                                        data-pristine-required-message="Este campo es obligatorio."
                                        data-pristine-email-message="Please enter a valid email address.">
                                </div>
                            </div>

                            <div class="col-xl-4 col-12">
                                <div class="form-field">
                                    <label for="service-type" class="form-field-label">Selecciona un plan</label>
                                    <input type="text" class="form-field-input" id="service-type" name="Plan"
                                        list="service-options" autocomplete="off" required
                                        data-pristine-required-message="Este campo es obligatorio."
                                        data-pristine-email-message="Please select a plan.">
                                    <datalist id="service-options">
                                        <option value="Basic">
                                        <option value="Intermedio">
                                        <option value="Pro">
                                    </datalist>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-field">
                                    <label for="contact-message" class="form-field-label">Tu Mensaje</label>
                                    <textarea name="Message" class="form-field-input" id="contact-message" cols="30" rows="6"></textarea>
                                </div>

                                <div class="form-btn">
                                    <button type="submit" class="btn btn-w240 ripple"><span>Envia tu
                                            Mensaje</span></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('titulo')
    Contacto
@endsection
