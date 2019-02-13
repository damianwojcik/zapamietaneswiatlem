<?php /* Template Name: Strona główna */ ?>

<?php get_header(); ?>

    <!-- Background Image -->
    <div class="nbr-background-img-section">
        <div class="nbr-profile-info">
            <div class="d-flex align-items-center w-100">
                <div class="mx-auto nbr-profile-inner">
                    <h2>Wioletta Łabno<b>.</b><span>Fotograf<b>&amp;</b> Designer</span></h2>
                </div>
            </div>
        </div>
        <div class="nbr-background-wrap">
            <div class="background-img-item" style="background-image: url('img/slider.png');"></div>
        </div>
    </div>

    <!-- About Me -->
    <section class="nbr-about-section-home">
        <div class="container">
            <div class="nbr-about-content text-center">
                <p>Hey, I'm Asia Felicia and <strong>I am a designer & developer</strong><br> who dream making the world a better place<br> by creating captivating products.</p>
                <span>Asia Felicia.</span>
            </div>
        </div>
    </section>

    <!-- Portfolio -->
    <section class="nbr-homepage-portfolio-section">
        <div class="container">
            <div class="row">
                <ul class="nbr-portfolio-filter align-center">
                    <li class="active" data-filter="*">All</li>
                    <li data-filter=".design">Design</li>
                    <li data-filter=".style">Style</li>
                    <li data-filter=".little">Little</li>
                </ul>
            </div>
            <div class="row nbr-portfolio-items">
                <div class="col-md-6 single-item design little">
                    <div class="nbr-portfolio-wrap">
                       <a href="portfolio-page.html"><img src="img/portfolio/portfolio-big.jpg" alt=""></a>
                        <div class="nbr-portfolio-content">
                            <p>Wall hangings by DT</p>
                            <h3><a href="portfolio-page.html">Qualit Cosetury</a></h3>
                            <a href="portfolio-page.html" class="nbr-portfolio-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 single-item little style">
                    <div class="nbr-portfolio-wrap">
                        <a href="portfolio-page.html"><img src="img/portfolio/portfolio-small.jpg" alt=""></a>
                        <div class="nbr-portfolio-content">
                            <p>Wall hangings by DT</p>
                            <h3><a href="portfolio-page.html">Qualit Cosetury</a></h3>
                            <a href="portfolio-page.html" class="nbr-portfolio-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 single-item style design">
                    <div class="nbr-portfolio-wrap">
                        <a href="portfolio-page.html"><img src="img/portfolio/portfolio-small.jpg" alt=""></a>
                        <div class="nbr-portfolio-content">
                            <p>Wall hangings by DT</p>
                            <h3><a href="portfolio-page.html">Qualit Cosetury</a></h3>
                            <a href="portfolio-page.html" class="nbr-portfolio-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 single-item little design">
                    <div class="nbr-portfolio-wrap">
                        <a href="portfolio-page.html"><img src="img/portfolio/portfolio-small.jpg" alt=""></a>
                        <div class="nbr-portfolio-content">
                            <p>Wall hangings by DT</p>
                            <h3><a href="portfolio-page.html">Qualit Cosetury</a></h3>
                            <a href="portfolio-page.html" class="nbr-portfolio-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 single-item style">
                    <div class="nbr-portfolio-wrap">
                        <a href="portfolio-page.html"><img src="img/portfolio/portfolio-big.jpg" alt=""></a>
                        <div class="nbr-portfolio-content">
                            <p>Wall hangings by DT</p>
                            <h3><a href="portfolio-page.html">Qualit Cosetury</a></h3>
                            <a href="portfolio-page.html" class="nbr-portfolio-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 single-item little design">
                    <div class="nbr-portfolio-wrap">
                        <a href="portfolio-page.html"><img src="img/portfolio/portfolio-small.jpg" alt=""></a>
                        <div class="nbr-portfolio-content">
                            <p>Wall hangings by DT</p>
                            <h3><a href="portfolio-page.html">Qualit Cosetury</a></h3>
                            <a href="portfolio-page.html" class="nbr-portfolio-link"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>