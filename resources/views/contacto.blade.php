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
                                    <a href="tel:+525582526624" target="_blank" class="formingHrefTel">+52 55 82 52 66
                                        24</a>
                                </div>
                            </li>
                            <li>
                                <i class="material-icons material-icons-outlined md-22">email</i>
                                <div class="footer-contact-info">
                                    <a href="contacto@mycleth.com.mx" target="_blank">contacto@mycleth.com.mx</a>
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
                <div class="col-xl-8 col-md-7 content-item">
                    <form action="#!" method="post" class="form-submission contact-form contact-form-padding"
                        novalidate>
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

    <!-- Begin map
             <div class="map">
                <iframe class="lazy" data-src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3302.1020346961877!2d-118.2916255847825!3d34.14373158058114!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c0623fe71971%3A0xc829e89a5dcc767e!2zNDczMCBDcnlzdGFsIFNwcmluZ3MgRHIsIExvcyBBbmdlbGVzLCBDQSA5MDAyNywg0KHQv9C-0LvRg9GH0LXQvdGWINCo0YLQsNGC0Lgg0JDQvNC10YDQuNC60Lg!5e0!3m2!1suk!2sua!4v1621932036298!5m2!1suk!2sua"></iframe>
               </div>
               End map -->
@endsection

@section('titulo')
    Contacto
@endsection
