<!-- Begin footer -->
<footer class="footer footer-minimal">
    <div class="footer-main">
        <div class="container">
            <div class="row items align-items-center">
                <div class="col-lg-3 col-md-4 col-12 item">
                    <div class="widget-brand-info">
                        <div class="widget-brand-info-main">
                            <a href="/" class="logo" title="PathSoft">
                                <img data-src="assets/img/logo-cleth-withe.png" class="lazy" width="133"
                                    height="36" src="assets/img/logo-cleth-withe.png" alt="PathSoft"
                                    data-loaded="true" style="opacity: 1;">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md item">
                    <div class="footer-item">
                        <nav class="footer-nav">
                            <ul class="footer-mnu footer-mnu-line">
                                <li><a href="#!" class="hover-link" data-title="Inicio"><span>Inicio</span></a>
                                </li>
                                <li><a href="#!" class="hover-link" data-title="Nosotros"><span>Nosotros</span></a>
                                </li>
                                <li><a href="#!" class="hover-link"
                                        data-title="Servicios"><span>Servicios</span></a>
                                </li>
                                <!--<li><a href="#!" class="hover-link" data-title="News"><span>News</span></a></li>-->
                                <li><a href="#!" class="hover-link" data-title="Contacto"><span>Contacto</span></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row justify-content-between items">
                <div class="col-md-auto col-12 item">
                    <nav class="footer-links">
                        <ul>
                            <li><a href="https://mycleth.com.mx" target="_blank">DISEÑADO POR: MY CLETH</a></li>
                            <!--<li><a href="privacy-policy.html">Privacy Policy</a></li>-->
                        </ul>
                    </nav>
                </div>
                <div class="col-md-auto col-12 item">
                    <div class="copyright">© 2022 MY CLETH. Todos los derechos reservados.</div>
                </div>
            </div>
        </div>
    </div>
</footer><!-- End footer -->

</main><!-- End main -->

<script src="assets/libs/jquery/jquery.min.js"></script>
<script src="assets/libs/lozad/lozad.min.js"></script>
<script src="assets/libs/device/device.js"></script>
<script src="assets/libs/spincrement/jquery.spincrement.min.js"></script>
<script src="assets/libs/pristine/pristine.min.js"></script>
<script src="assets/js/custom.js"></script>
<script src="assets/js/forms.js"></script>

<!--Whatsapp-->
<a href="https://api.whatsapp.com/send?phone=525538901631&text=Hola,%20me%20gustaria%20Obtener%20m%C3%A1s%20informaci%C3%B3n"
    class="float" target="_blank">
    <img src="assets/img/logo-whats.png" alt="" />
</a>
<!---->

<!-- Funcion Active Nav-->
<script>
    $(document).ready(function() {

        let url = window.location.href;
        let url_format = url.split('/');

        if (url_format[url_format.length - 1] == 'nosotros') {
            $("#nosotros_nav").addClass('active');
        } else {
            $("#inicio_nav").addClass('active');
        }
    });
</script>

</body>

</html>
