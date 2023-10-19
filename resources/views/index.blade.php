@extends('templates.mycleth')

@section('content')
INICIO
<section class="section-bgc intro">
    <div class="intro-item intro-item-type-1" style="background-image: url('assets/img/intro-img1.jpg');">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="intro-content" style="--margin-left: 4rem;">
                        <div class="section-heading shm-none">
                            <div class="section-subheading">Free template</div>
                            <h1>#1 The Fastest HTML5 Template</h1>
                            <p class="section-desc">The free template is the simplified version of the premium template, but you can use it for your own purposes. The premium template includes a lot of functionality.</p>
                        </div>
                        <div class="btn-group intro-btns">
                            <a href="https://www.templatemonster.com/website-templates/pathsoft-it-solutions-for-your-business-services-website-template-83414.html?utm_campaign=blog_site_KovalWeb&utm_source=KovalWeb&utm_medium=referral&aff=KovalWeb" class="btn btn-border btn-with-icon btn-small ripple">
                                <span>HTML5</span>
                                <svg class="btn-icon-right" viewBox="0 0 13 9" width="13" height="9"><use xlink:href="assets/img/sprite.svg#arrow-right"></use></svg>
                            </a>
                            <a href="https://www.templatemonster.com/wordpress-themes/pathsoft-it-solutions-for-your-business-services-wordpress-theme-99496.html?utm_campaign=blog_site_KovalWeb&utm_source=KovalWeb&utm_medium=referral&aff=KovalWeb" class="btn btn-border btn-with-icon btn-small ripple">
                                <span>WordPress</span>
                                <svg class="btn-icon-right" viewBox="0 0 13 9" width="13" height="9"><use xlink:href="assets/img/sprite.svg#arrow-right"></use></svg>
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
								<div class="section-subheading">More info about</div>
								<h2>Latest News</h2>
							</div> 
						</header>
						<div class="col-lg-4 col-md-6 col-12 item">
							<article class="news-item item-style">
								<a href="news-post.html" class="news-item-img el">
									<img data-src="assets/img/news-img-1.jpg" class="lazy" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
								</a>
								<div class="news-item-info">
									<div class="news-item-date">07/01/2021</div>
									<h3 class="news-item-heading item-heading">
										<a href="news-post.html" title="Benefits Of Async/Await">Benefits Of Async/Await</a>
									</h3>
									<div class="news-item-desc">
										<p>Asynchronous functions are a good and bad thing in JavaScript.</p>
									</div>
								</div>
							</article>
						</div>
						<div class="col-lg-4 col-md-6 col-12 item">
							<article class="news-item item-style">
								<a href="news-post.html" class="news-item-img el">
									<img data-src="assets/img/news-img-2.jpg" class="lazy" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
								</a>
								<div class="news-item-info">
									<div class="news-item-date">05/01/2021</div>
									<h3 class="news-item-heading item-heading">
										<a href="news-post.html" title="Key Considerations Of IPaaS">Key Considerations Of IPaaS</a>
									</h3>
									<div class="news-item-desc">
										<p>Digital transformation requires cloud appropriate adoption</p>
									</div>
								</div>
							</article>
						</div>
						<div class="col-lg-4 col-md-6 col-12 item">
							<article class="news-item item-style">
								<a href="news-post.html" class="news-item-img el">
									<img data-src="assets/img/news-img-3.jpg" class="lazy" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
								</a>
								<div class="news-item-info">
									<div class="news-item-date">01/01/2021</div>
									<h3 class="news-item-heading item-heading">
										<a href="news-post.html" title="Hibernate Query Language">Hibernate Query Language</a>
									</h3>
									<div class="news-item-desc">
										<p>In this tutorial, we will discuss the Hibernate Query Language. </p>
									</div>
								</div>
							</article>
						</div>
						<footer class="section-footer col-12 item section-footer-animate">
							<div class="btn-group align-items-center justify-content-center">
								<a href="news.html" class="btn btn-with-icon btn-w240 ripple">
									<span>See All News</span>
									<svg class="btn-icon-right" viewBox="0 0 13 9" width="13" height="9"><use xlink:href="assets/img/sprite.svg#arrow-right"></use></svg>
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
