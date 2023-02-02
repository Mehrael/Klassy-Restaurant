@include('header')
<!-- ***** Header Area End ***** -->

<!-- ***** Main Banner Area Start ***** -->
<div id="top">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4">
                <div class="left-content">
                    <div class="inner-content">
                        <h4>KlassyCafe</h4>
                        <h6>THE BEST EXPERIENCE</h6>
                        <div class="main-white-button scroll-to-section">
                            <a href="#reservation">Make A Reservation</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="main-banner header-text">
                    <div class="Modern-Slider">
                        <!-- Item -->
                        <div class="item">
                            <div class="img-fill">
                                <img src="assets/images/slide-01.jpg" alt="">
                            </div>
                        </div>
                        <!-- // Item -->
                        <!-- Item -->
                        <div class="item">
                            <div class="img-fill">
                                <img src="assets/images/slide-02.jpg" alt="">
                            </div>
                        </div>
                        <!-- // Item -->
                        <!-- Item -->
                        <div class="item">
                            <div class="img-fill">
                                <img src="assets/images/slide-03.jpg" alt="">
                            </div>
                        </div>
                        <!-- // Item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** Main Banner Area End ***** -->

<!-- ***** About Area Starts ***** -->
<section class="section" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-xs-12">
                <div class="left-text-content">
                    <div class="section-heading">
                        <h6>About Us</h6>
                        <h2>We Leave A Delicious Memory For You</h2>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit,
                        sed do.
                    <p>
                        Lorem ipsum dolor sit amet, consectetur koit adipiscing elit,
                        sed do.</p>
                    Lorem ipsum dolor sit amet, consectetur koit adipiscing elit,
                    sed do.
                    Lorem ipsum dolor sit amet, consectetur koit adipiscing elit,
                    sed do.
                    Lorem ipsum dolor sit amet, consectetur koit adipiscing elit,
                    sed do.
                    Lorem ipsum dolor sit amet, consectetur koit adipiscing elit,
                    sed do.

                    Lorem ipsum dolor sit amet, consectetur koit adipiscing elit,
                    sed do.
                    <p>
                        Lorem ipsum dolor sit amet, consectetur koit adipiscing elit,
                        sed do.</p>
                    </p>
                    <div class="row">
                        <div class="col-4">
                            <img src="assets/images/about-thumb-01.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img src="assets/images/about-thumb-02.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img src="assets/images/about-thumb-03.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-xs-12">
                <div class="right-content">
                    <div class="thumb">
                        <a rel="nofollow" href="http://youtube.com"><i class="fa fa-play"></i></a>
                        <img src="assets/images/about-video-bg.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** About Area Ends ***** -->

<!-- ***** Menu Area Starts ***** -->
@include("food")
<!-- ***** Menu Area Ends ***** -->

<!-- ***** Chefs Area Starts ***** -->
@include("chef")
<!-- ***** Chefs Area Ends ***** -->

<!-- ***** Reservation Us Area Starts ***** -->
@include("reservation")
<!-- ***** Reservation Area Ends ***** -->


<!-- ***** Footer Start ***** -->
@include('footer')
