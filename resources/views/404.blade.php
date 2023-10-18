@extends('templates.mycleth')

@section('content')
    <!-- Begin bread crumbs -->
    <nav class="bread-crumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="bread-crumbs-list">
                        <li>
                            <a href="/">Inicio</a>
                            <i class="material-icons md-18">chevron_right</i>
                        </li>
                        <li>404</li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- End bread crumbs -->

    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading heading-center section-heading-animate">
                        <div class="section-subheading">Sorry, but the page was not found</div>
                        <h1>404</h1>
                        <p class="section-desc">You may have mistyped the address or the page may have moved</p>
                    </div>
                    <div class="btn-group align-items-center justify-content-center">
                        <a href="index.html" class="btn btn-with-icon ripple">
                            <span>Go to home page</span>
                            <svg class="btn-icon-right" viewBox="0 0 13 9" width="13" height="9">
                                <use xlink:href="assets/img/sprite.svg#arrow-right"></use>
                            </svg>
                        </a>
                        <a href="contacts.html" class="btn btn-border btn-with-icon ripple">
                            <span>Contact us</span>
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

    <div class="bff">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="bff-container">
                        <p>Get Full-Featured <br class="d-sm-none"> PathSoft Template</p>
                        <div class="btn-group justify-content-center justify-content-md-start">
                            <a href="https://www.templatemonster.com/website-templates/pathsoft-it-solutions-for-your-business-services-website-template-83414.html?utm_campaign=blog_site_KovalWeb&utm_source=KovalWeb&utm_medium=referral&aff=KovalWeb"
                                class="btn btn-border btn-with-icon btn-small ripple">
                                <span>HTML5</span>
                                <svg class="btn-icon-right" viewBox="0 0 13 9" width="13" height="9">
                                    <use xlink:href="assets/img/sprite.svg#arrow-right"></use>
                                </svg>
                            </a>
                            <a href="https://www.templatemonster.com/wordpress-themes/pathsoft-it-solutions-for-your-business-services-wordpress-theme-99496.html?utm_campaign=blog_site_KovalWeb&utm_source=KovalWeb&utm_medium=referral&aff=KovalWeb"
                                class="btn btn-border btn-with-icon btn-small ripple">
                                <span>WordPress</span>
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
