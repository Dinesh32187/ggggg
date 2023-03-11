<?php
$title = 'Jetsetgo-Holiday-India';
include "include/header.php";
?>
    <!-- Slider -->
    <header class="header slider-fade">
        <div class="owl-carousel owl-theme">
            <!-- The opacity on the image is made with "data-overlay-dark="number". You can change it using the numbers 0-9. -->
            <div class="text-center item bg-img" data-overlay-dark="5" data-background="<?php echo $baseURL;?>/assets/img/slider/1.jpg">
                <div class="v-middle caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 offset-md-1">
                                <h4>Let's travel the world with us</h4>
                                <h1>Explore The World With <span>Jet set go</span></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center item bg-img" data-overlay-dark="5" data-background="<?php echo $baseURL;?>/assets/img/slider/2.jpg">
                <div class="v-middle caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 offset-md-1">
                                <h4>Let's travel the world with us</h4>
                                <h1>Explore Rome With <span>Jet set go</span></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center item bg-img" data-overlay-dark="5" data-background="<?php echo $baseURL;?>/assets/img/slider/3.jpg">
                <div class="v-middle caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 offset-md-1">
                                <h4>Let's travel the world with us</h4>
                                <h1><span>Discover</span> the world with our guide</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Tour Search -->

    <!-- About -->
    <section class="about cover section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-30 animate-box" data-animate-effect="fadeInUp">
                    <div class="section-subtitle">The best travel agency</div>
                    <div class="section-title">Discover the <span>world</span> with our guide</div>
                    <p>All of our experts have done a lot of travelling in their areas, and they come back every year
                        to learn more and discover fresh and novel ways for you to enjoy your location. This entails
                        that we may plan immersive excursions and off-the-beaten-path activities to assist you in
                        discovering a place&#39;s true essence. The most fascinating hotels, home stays, and lodges may
                        be recommended since we collaborate with the best local guides, some of whom have been
                        acquainted with our employees for a long time.</p>
                    
                    <ul class="list-unstyled about-list mb-30">
                        <li>
                            <div class="about-list-icon"> <span class="ti-check"></span> </div>
                            <div class="about-list-text">
                                <p>20 Years of Experience</p>
                            </div>
                        </li>
                        <li>
                            <div class="about-list-icon"> <span class="ti-check"></span> </div>
                            <div class="about-list-text">
                                <p>150+ Tour Destinations</p>
                            </div>
                        </li>
                    </ul>
                    <!-- Info -->
                    <div class="phone-call mb-30">
                        <div class="icon"><span class="flaticon-phone-call"></span></div>
                        <div class="text">
                            <p>For information</p> <a href="tel:9556677620">9556677620</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 offset-md-1 animate-box" data-animate-effect="fadeInUp">
                    <div class="img-exp">
                        <div class="about-img">
                            <div class="img"> <img src="<?php echo $baseURL;?>/assets/img/about.jpg" class="img-fluid" alt=""> </div>
                        </div>
                        <div id="circle">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="300px" height="300px" viewBox="0 0 300 300" enable-background="new 0 0 300 300" xml:space="preserve">
                                <defs>
                                    <path id="circlePath" d=" M 150, 150 m -60, 0 a 60,60 0 0,1 120,0 a 60,60 0 0,1 -120,0 " />
                                </defs>
                                <circle cx="150" cy="100" r="75" fill="none" />
                                <g>
                                    <use xlink:href="#circlePath" fill="none" />
                                    <text fill="#0f2454">
                                        <textPath xlink:href="#circlePath"> . travel agency . travel agency </textPath>
                                    </text>
                                </g>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Tours 1 -->
    <section class="tours1 section-padding bg-lightnav" data-scroll-index="1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-subtitle"><span>Choose your place</span></div>
                    <div class="section-title">Popular <span>Tours</span></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="item">
                        <div class="position-re o-hidden"> <img src="<?php echo $baseURL;?>/assets/img/tours/maldives1.jpg" alt=""> </div> <span class="category"><a href="#0">Rs.15000</a></span>
                        <div class="con">
                            <div class="rating"> <i class="star active"></i> <i class="star active"></i> <i class="star active"></i> <i class="star active"></i> <i class="star"></i>
                                <div class="reviews-count">(2 Reviews)</div>
                            </div>
                            <h5><a href="<?php echo $baseURL;?>/pages/tour-details.php">Maldives Tour</a></h5>
                            <div class="line"></div>
                            <div class="row facilities">
                                <div class="col col-md-12">
                                    <ul>
                                        <li><i class="ti-time"></i> 10 Days</li>
                                        <li><i class="ti-user"></i> 12+</li>
                                        <li><i class="ti-location-pin"></i> Maldives</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item">
                        <div class="position-re o-hidden"><img src="<?php echo $baseURL;?>/assets/img/tours/italy1.jpg" alt=""></div> <span class="category"><a href="#0">Rs.1300</a></span>
                        <div class="con">
                            <h5><a href="<?php echo $baseURL;?>/pages/tour-details.php">Italy Tour</a> </h5>
                            <div class="line"></div>
                            <div class="row facilities">
                                <div class="col col-md-12">
                                    <ul>
                                        <li><i class="ti-time"></i> 6 Days</li>
                                        <li><i class="ti-user"></i> 10+</li>
                                        <li><i class="ti-location-pin"></i> Italy</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item">
                        <div class="position-re o-hidden"><img src="<?php echo $baseURL;?>/assets/img/tours/france1.jpg" alt=""></div> <span class="category"><a href="#0">Rs.4000</a></span>
                        <div class="con">
                            <h5><a href="<?php echo $baseURL;?>/pages/tour-details.php">France Tour</a> </h5>
                            <div class="line"></div>
                            <div class="row facilities">
                                <div class="col col-md-12">
                                    <ul>
                                        <li><i class="ti-time"></i> 10 Days</li>
                                        <li><i class="ti-user"></i> 6+</li>
                                        <li><i class="ti-location-pin"></i> France</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item">
                        <div class="position-re o-hidden"><img src="<?php echo $baseURL;?>/assets/img/tours/greece1.jpg" alt=""></div> <span class="category"><a href="#">Rs.5000</a></span>
                        <div class="con">
                            <h5><a href="<?php echo $baseURL;?>/pages/tour-details.php">Greece Tour</a> </h5>
                            <div class="line"></div>
                            <div class="row facilities">
                                <div class="col col-md-12">
                                    <ul>
                                        <li><i class="ti-time"></i> 10 Days</li>
                                        <li><i class="ti-user"></i> 12+</li>
                                        <li><i class="ti-location-pin"></i> Greece</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item">
                        <div class="position-re o-hidden"><img src="<?php echo $baseURL;?>/assets/img/tours/canada1.jpg" alt=""></div> <span class="category"><a href="#0">Rs.3000</a></span>
                        <div class="con">
                            <h5><a href="<?php echo $baseURL;?>/pages/tour-details.php">Canada Tour</a></h5>
                            <div class="line"></div>
                            <div class="row facilities">
                                <div class="col col-md-12">
                                    <ul>
                                        <li><i class="ti-time"></i> 7 Days</li>
                                        <li><i class="ti-user"></i> 10+</li>
                                        <li><i class="ti-location-pin"></i> Canada</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Numbers -->
    <section class="numbers">
        <div class="section-padding bg-img bg-fixed back-position-center" data-background="<?php echo $baseURL;?>/assets/img/slider/15.jpg" data-overlay-dark="6">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="item text-center"> <img src="<?php echo $baseURL;?>/assets/img/arrow1.png" class="tobotm" alt=""> <span class="icon">
                                <i class="front flaticon-air-freight"></i>
                                <i class="back flaticon-air-freight"></i>
                            </span>
                            <h3 class="count">600</h3>
                            <h6>Flight Booking</h6>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="item text-center"> <img src="<?php echo $baseURL;?>/assets/img/arrow1.png" alt=""> <span class="icon">
                                <i class="font flaticon-house"></i>
                                <i class="back flaticon-house"></i>
                            </span>
                            <h3 class="count">250</h3>
                            <h6>Amazing Tour</h6>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="item text-center"> <img src="<?php echo $baseURL;?>/assets/img/arrow1.png" class="tobotm" alt=""> <span class="icon">
                                <i class="front flaticon-ship"></i>
                                <i class="back flaticon-ship"></i>
                            </span>
                            <h3 class="count">100</h3>
                            <h6>Cruises Booking</h6>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="item text-center"> <span class="icon">
                                <i class="front flaticon-tag"></i>
                                <i class="back flaticon-tag"></i>
                            </span>
                            <h3 class="count">100</h3>
                            <h6>Ticket Booking</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Destination 1 -->
    <section class="destination1 section-padding bg-lightnav">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-subtitle">Top Destination</div>
                    <div class="section-title">Popular <span>Destination</span></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="position-re o-hidden"><img src="<?php echo $baseURL;?>/assets/img/destination/maldives1.jpg" alt=""></div> <span class="category"><a href="#0">New</a></span>
                            <div class="con">
                                <h5><a href="<?php echo $baseURL;?>/pages/tour-details.php"><i class="ti-location-pin"></i> Maldives</a></h5>
                                <div class="line"></div>
                                <div class="row facilities">
                                    <div class="col col-md-8">
                                        <p>4 Tour Packages</p>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="<?php echo $baseURL;?>/assets/img/destination/canada1.jpg" alt=""> </div> <span class="category"><a href="#0">25% OFF</a></span>
                            <div class="con">
                                <h5><a href="<?php echo $baseURL;?>/pages/tour-details.php"><i class="ti-location-pin"></i> Canada</a></h5>
                                <div class="line"></div>
                                <div class="row facilities">
                                    <div class="col col-md-8">
                                        <p>3 Tour Packages</p>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"><img src="<?php echo $baseURL;?>/assets/img/destination/italy1.jpg" alt=""></div> <span class="category"><a href="#0">7 Tours</a></span>
                            <div class="con">
                                <h5><a href="<?php echo $baseURL;?>/pages/tour-details.php"><i class="ti-location-pin"></i> Italy</a></h5>
                                <div class="line"></div>
                                <div class="row facilities">
                                    <div class="col col-md-8">
                                        <p>7 Tour Packages</p>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"><img src="<?php echo $baseURL;?>/assets/img/destination/greece1.jpg" alt=""></div> <span class="category"><a href="#0">New</a></span>
                            <div class="con">
                                <h5><a href="<?php echo $baseURL;?>/pages/tour-details.php"><i class="ti-location-pin"></i> Greece</a></h5>
                                <div class="line"></div>
                                <div class="row facilities">
                                    <div class="col col-md-8">
                                        <p>6 Tour Packages</p>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"><img src="<?php echo $baseURL;?>/assets/img/destination/france1.jpg" alt=""></div> <span class="category"><a href="#0">15% OFF</a></span>
                            <div class="con">
                                <h5><a href="<?php echo $baseURL;?>/pages/tour-details.php"><i class="ti-location-pin"></i> France</a></h5>
                                <div class="line"></div>
                                <div class="row facilities">
                                    <div class="col col-md-8">
                                        <p>10 Tour Packages</p>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"><img src="<?php echo $baseURL;?>/assets/img/destination/dubai1.jpg" alt=""></div> <span class="category"><a href="">7 Tours</a></span>
                            <div class="con">
                                <h5><a href="<?php echo $baseURL;?>/pages/tour-details.php"><i class="ti-location-pin"></i> Dubai</a></h5>
                                <div class="line"></div>
                                <div class="row facilities">
                                    <div class="col col-md-8">
                                        <p>7 Tour Packages</p>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Tour Video -->
    <section class="dynamic-video-wrapper" data-overlay-dark="3">
        <video width="100%" height="100%" autoplay="autoplay" muted preload="auto" loop="loop">
            <source src="<?php echo $baseURL;?>/assets/img/travel-video.mp4" type="video/mp4">
        </video>
        <div class="wrap-content v-middle">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <h1><a href="">Costa Victoria Cochin</a></h1>
                        <h4><i class="ti-location-pin"></i> Maldives &nbsp;&nbsp; <i class="ti-timer"></i> 4 Days + 3 Nights</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Italy & France Tours 1 -->
    <section class="tours1 section-padding">
        <div class="container">
            <div class="row mb-30">
                <div class="col-md-12">
                    <div class="section-subtitle">Most Popular</div>
                    <div class="section-title"><span>International</span> City</div>
                </div>
            </div>
            <!-- Italy Tours -->
            <div class="row mb-90">
                <div class="col-md-5">
                    <div class="country country1 mt-30">
                        <div class="section-title2">Italy, Europe</div>
                        <p>We provide you with interesting and exciting tours to different parts of the world. Orci varius natoque penatibus et magnis disney turien nascete ridiculus duru in the mus nellen.</p>
                        <div class="row tour-list">
                            <div class="col-md-4">
                                <ul>
                                    <li><i class="ti-location-pin"></i> <a href="<?php echo $baseURL;?>/pages/package2.php" class="link-btn">Roma</a></li>
                                    <li><i class="ti-location-pin"></i> <a href="<?php echo $baseURL;?>/pages/package2.php" class="link-btn">Milan</a></li>
                                    <li><i class="ti-location-pin"></i> <a href="<?php echo $baseURL;?>/pages/package2.php" class="link-btn">Verona</a></li>
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <ul>
                                    <li><i class="ti-location-pin"></i> <a href="<?php echo $baseURL;?>/pages/package2.php" class="link-btn">Venice</a></li>
                                    <li><i class="ti-location-pin"></i> <a href="<?php echo $baseURL;?>/pages/package2.php" class="link-btn">Florence</a></li>
                                    <li><i class="ti-location-pin"></i> <a href="<?php echo $baseURL;?>/pages/package2.php" class="link-btn">Perugia</a></li>
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <ul>
                                    <li><i class="ti-location-pin"></i> <a href="<?php echo $baseURL;?>/pages/package2.php" class="link-btn">San Marino</a></li>
                                    <li><i class="ti-location-pin"></i> <a href="<?php echo $baseURL;?>/pages/package2.php" class="link-btn">Parma</a></li>
                                    <li><i class="ti-location-pin"></i> <a href="<?php echo $baseURL;?>/pages/package2.php" class="link-btn">Aosta</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="butn-dark mt-30 mb-30"> <a href="<?php echo $baseURL;?>/pages/package2.php" data-scroll-nav="1"><span>All Tours <i class="ti-arrow-right"></i></span></a> </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="position-re o-hidden"><img src="<?php echo $baseURL;?>/assets/img/destination/rome1.jpg" alt=""></div> <span class="category"><a href="#0">Rs.15000</a></span>
                            <div class="con">
                                <h5><a href="<?php echo $baseURL;?>/pages/tour-details.php">Rome</a> </h5>
                                <div class="line"></div>
                                <div class="row facilities">
                                    <div class="col col-md-12">
                                        <ul>
                                            <li><i class="ti-time"></i> 3 Days</li>
                                            <li><i class="ti-user"></i> 10+</li>
                                            <li><i class="ti-location-pin"></i> Italy</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"><img src="<?php echo $baseURL;?>/assets/img/destination/venice1.jpg" alt=""></div> <span class="category"><a href="#">Rs.15000</a></span>
                            <div class="con">
                                <h5><a href="<?php echo $baseURL;?>/pages/tour-details.php">Venice</a></h5>
                                <div class="line"></div>
                                <div class="row facilities">
                                    <div class="col col-md-12">
                                        <ul>
                                            <li><i class="ti-time"></i> 4 Days</li>
                                            <li><i class="ti-user"></i> 8+</li>
                                            <li><i class="ti-location-pin"></i> Italy</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"><img src="<?php echo $baseURL;?>/assets/img/destination/milano.jpg" alt=""></div> <span class="category"><a href="#0">Rs.15000</a></span>
                            <div class="con">
                                <h5><a href="<?php echo $baseURL;?>/pages/tour-details.php">Milano</a> </h5>
                                <div class="line"></div>
                                <div class="row facilities">
                                    <div class="col col-md-12">
                                        <ul>
                                            <li><i class="ti-time"></i> 6 Days</li>
                                            <li><i class="ti-user"></i> 4+</li>
                                            <li><i class="ti-location-pin"></i> Italy</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"><img src="<?php echo $baseURL;?>/assets/img/destination/perugia1.jpg" alt=""></div> <span class="category"><a href="#0">Rs.15000</a></span>
                            <div class="con">
                                <h5><a href="<?php echo $baseURL;?>/pages/tour-details.php">Perugia</a></h5>
                                <div class="line"></div>
                                <div class="row facilities">
                                    <div class="col col-md-12">
                                        <ul>
                                            <li><i class="ti-time"></i> 4 Days</li>
                                            <li><i class="ti-user"></i> 5+</li>
                                            <li><i class="ti-location-pin"></i> Italy</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"><img src="<?php echo $baseURL;?>/assets/img/destination/parma1.jpg" alt=""></div> <span class="category"><a href="#0">Rs.15000</a></span>
                            <div class="con">
                                <h5><a href="<?php echo $baseURL;?>/pages/tour-details.php">Parma</a></h5>
                                <div class="line"></div>
                                <div class="row facilities">
                                    <div class="col col-md-12">
                                        <ul>
                                            <li><i class="ti-time"></i> 7 Days</li>
                                            <li><i class="ti-user"></i> 8+</li>
                                            <li><i class="ti-location-pin"></i> Italy</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"><img src="<?php echo $baseURL;?>/assets/img/destination/aosta1.jpg" alt=""></div> <span class="category"><a href="#0">Rs.15000</a></span>
                            <div class="con">
                                <h5><a href="<?php echo $baseURL;?>/pages/tour-details.php">Aosta</a></h5>
                                <div class="line"></div>
                                <div class="row facilities">
                                    <div class="col col-md-12">
                                        <ul>
                                            <li><i class="ti-time"></i> 9 Days</li>
                                            <li><i class="ti-user"></i> 10+</li>
                                            <li><i class="ti-location-pin"></i> Italy</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- France Tours -->
            <div class="row">
                <div class="col-md-7">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="position-re o-hidden"><img src="<?php echo $baseURL;?>/assets/img/destination/france-paris1.jpg" alt=""></div> <span class="category"><a href="#0">Rs.15000</a></span>
                            <div class="con">
                                <h5><a href="<?php echo $baseURL;?>/pages/tour-details.php">Paris</a> </h5>
                                <div class="line"></div>
                                <div class="row facilities">
                                    <div class="col col-md-12">
                                        <ul>
                                            <li><i class="ti-time"></i> 7 Days</li>
                                            <li><i class="ti-user"></i> 12+</li>
                                            <li><i class="ti-location-pin"></i> France</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"><img src="<?php echo $baseURL;?>/assets/img/destination/france-lyon1.jpg" alt=""></div> <span class="category"><a href="#0">Rs.15000</a></span>
                            <div class="con">
                                <h5><a href="<?php echo $baseURL;?>/pages/tour-details.php">Lyon</a> </h5>
                                <div class="line"></div>
                                <div class="row facilities">
                                    <div class="col col-md-12">
                                        <ul>
                                            <li><i class="ti-time"></i> 4 Days</li>
                                            <li><i class="ti-user"></i> 6+</li>
                                            <li><i class="ti-location-pin"></i> France</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"><img src="<?php echo $baseURL;?>/assets/img/destination/france-cannes1.jpg" alt=""></div> <span class="category"><a href="#0">Rs.15000</a></span>
                            <div class="con">
                                <h5><a href="<?php echo $baseURL;?>/pages/tour-details.php">Cannes</a></h5>
                                <div class="line"></div>
                                <div class="row facilities">
                                    <div class="col col-md-12">
                                        <ul>
                                            <li><i class="ti-time"></i> 7 Days</li>
                                            <li><i class="ti-user"></i> 10+</li>
                                            <li><i class="ti-location-pin"></i> France</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"><img src="<?php echo $baseURL;?>/assets/img/destination/france-normandiya1.jpg" alt=""></div> <span class="category"><a href="#0">Rs.15000</a></span>
                            <div class="con">
                                <h5><a href="<?php echo $baseURL;?>/pages/tour-details.php">Normandiya</a></h5>
                                <div class="line"></div>
                                <div class="row facilities">
                                    <div class="col col-md-12">
                                        <ul>
                                            <li><i class="ti-time"></i> 12 Days</li>
                                            <li><i class="ti-user"></i> 10+</li>
                                            <li><i class="ti-location-pin"></i> France</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"><img src="<?php echo $baseURL;?>/assets/img/destination/france-bordeaux1.jpg" alt=""></div> <span class="category"><a href="">Rs.15000</a></span>
                            <div class="con">
                                <h5><a href="<?php echo $baseURL;?>/pages/tour-details.php">Bordeaux</a></h5>
                                <div class="line"></div>
                                <div class="row facilities">
                                    <div class="col col-md-12">
                                        <ul>
                                            <li><i class="ti-time"></i> 6 Days</li>
                                            <li><i class="ti-user"></i> 5+</li>
                                            <li><i class="ti-location-pin"></i> France</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"><img src="<?php echo $baseURL;?>/assets/img/destination/france-marsielle1.jpg" alt=""></div> <span class="category"><a href="#0">Rs.15000</a></span>
                            <div class="con">
                                <h5><a href="<?php echo $baseURL;?>/pages/tour-details.php">Marseille</a></h5>
                                <div class="line"></div>
                                <div class="row facilities">
                                    <div class="col col-md-12">
                                        <ul>
                                            <li><i class="ti-time"></i> 5 Days</li>
                                            <li><i class="ti-user"></i> 7+</li>
                                            <li><i class="ti-location-pin"></i> France</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                <div class="row mb-30">
                <div class="col-md-12">
                    <div class="section-subtitle">Most Popular</div>
                    <div class="section-title"><span>Domestic</span> City</div>
                </div>
            </div>
                    <div class="country country2 mt-30">
                        <div class="section-title2">France, Europe</div>
                        <p>We provide you with interesting and exciting tours to different parts of the world. Orci varius natoque penatibus et magnis disney turien nascete in the ridiculus duru in the mus nellen.</p>
                        <div class="row tour-list">
                            <div class="col-md-4">
                                <ul>
                                    <li><i class="ti-location-pin"></i> <a href="<?php echo $baseURL;?>/pages/package1.php" class="link-btn">Paris</a></li>
                                    <li><i class="ti-location-pin"></i> <a href="<?php echo $baseURL;?>/pages/package1.php" class="link-btn">Orleans</a></li>
                                    <li><i class="ti-location-pin"></i> <a href="<?php echo $baseURL;?>/pages/package1.php" class="link-btn">Nantes</a></li>
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <ul>
                                    <li><i class="ti-location-pin"></i> <a href="<?php echo $baseURL;?>/pages/package1.php" class="link-btn">Lyon</a></li>
                                    <li><i class="ti-location-pin"></i> <a href="<?php echo $baseURL;?>/pages/package1.php" class="link-btn">Bordeaux</a></li>
                                    <li><i class="ti-location-pin"></i> <a href="<?php echo $baseURL;?>/pages/package1.php" class="link-btn">Toulouse</a></li>
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <ul>
                                    <li><i class="ti-location-pin"></i> <a href="<?php echo $baseURL;?>/pages/package1.php" class="link-btn">Marseille</a></li>
                                    <li><i class="ti-location-pin"></i> <a href="<?php echo $baseURL;?>/pages/package1.php" class="link-btn">Cannes</a></li>
                                    <li><i class="ti-location-pin"></i> <a href="<?php echo $baseURL;?>/pages/package1.php" class="link-btn">Nice</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="butn-dark mt-30 mb-30"> <a href="<?php echo $baseURL;?>/pages/package1.php" data-scroll-nav="1"><span>All Tours <i class="ti-arrow-right"></i></span></a> </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
 
    <!-- Testimonials -->
    <section class="testimonials">
        <div class="background bg-img bg-fixed section-padding pb-0" data-background="<?php echo $baseURL;?>/assets/img/slider/15.jpg" data-overlay-dark="5">
            <div class="container">
                <div class="row">
                    <!-- Call Now  -->
                    <div class="col-md-5 mb-30 mt-30">
                        <h5>We Provide Top Destinations Expecially For You Book Now and Enjoy!</h5>
                        <div class="phone-call mb-10">
                            <div class="icon color-1"><span class="flaticon-phone-call"></span></div>
                            <div class="text">
                                <p class="color-1">Call Now</p> <a class="color-1" href="tel:9556677620">9556677620</a>
                            </div>
                        </div>
                        <p><i class="ti-check"></i><small>Call us, it's toll-free.</small></p>
                    </div>
                    <!-- Testimonials -->
                    <div class="col-md-5 offset-md-2">
                        <div class="testimonials-box">
                            <div class="head-box">
                                <h6>Testimonials</h6>
                                <h4>Travelers Reviews</h4>
                            </div>
                            <div class="owl-carousel owl-theme">
                                <div class="item">
                                    <p>Great Travel Company!!!
                                        You have the ideal opportunity to experience the cosmos, which is full of adventure and
                                        natural beauty, thanks to this very fantastic firm. This business is really helpful,
                                        knowledgeable, and pays close attention to detail. We&#39;ve just planned another really unique
                                        vacation, and our hopes are so high!</p>
                                    <div class="info">
                                        <div class="author-img"> <img src="<?php echo $baseURL;?>/assets/img/team/04.png" alt=""> </div>
                                        <div class="cont">
                                            <div class="rating"> <i class="star active"></i> <i class="star active"></i> <i class="star active"></i> <i class="star active"></i> <i class="star active"></i> </div>
                                            <h6> Mr.Nishan</h6> <span>Guest review</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <p>Magical Trip to Italy!!!
                                        We recently returned from a 17-day trip to Italy and Jetsetgoholidayindia Travel was essential to our success.
                                        From our beginning in Rome through our stops in Florence, Montepluciano in the Tuscan
                                        countryside (our favourite!), and the stunning Amalfi Coast, every part of our magnificent
                                        trip was masterfully arranged. Every rail ticket and private tour that they organised was
                                        flawless, and their private drivers were punctual, obliging, and professional.</p>
                                    <div class="info">
                                        <div class="author-img"> <img src="<?php echo $baseURL;?>/assets/img/team/05.png" alt=""> </div>
                                        <div class="cont">
                                            <div class="rating"> <i class="star active"></i> <i class="star active"></i> <i class="star active"></i> <i class="star active"></i> <i class="star active"></i> </div>
                                            <h6>Ms. Neha</h6> <span>Guest review</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <p>Special Canada Trip!!!
                                        I recently returned from a lovely and unique trip to Canada, where I visited the stunning cities
                                        of Banff, Jasper, Clearwater, Sun Peaks, and Vancouver. Jetsetgoholidayindia Travel did a fantastic job
                                        organising and planning the entire vacation, and I followed a couple of her numerous
                                        suggestions, all of which turned out to be terrific. This was my second trip with Jetsetgo Travel,
                                        and I heartily endorse them to everyone.</p>
                                    <div class="info">
                                        <div class="author-img"> <img src="<?php echo $baseURL;?>/assets/img/team/06.png" alt=""> </div>
                                        <div class="cont">
                                            <div class="rating"> <i class="star active"></i> <i class="star active"></i> <i class="star active"></i> <i class="star active"></i> <i class="star active"></i> </div>
                                            <h6>Ms. Olivia</h6> <span>Guest review</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Clients -->
    <section class="clients">
        <div class="container">
            <div class="row">
                <div class="col-md-7 owl-carousel owl-theme">
                    <div class="clients-logo">
                        <a ><img src="<?php echo $baseURL;?>/assets/img/clients/1.png" alt=""></a>
                    </div>
                    <div class="clients-logo">
                        <a ><img src="<?php echo $baseURL;?>/assets/img/clients/2.png" alt=""></a>
                    </div>
                    <div class="clients-logo">
                        <a ><img src="<?php echo $baseURL;?>/assets/img/clients/3.png" alt=""></a>
                    </div>
                    <div class="clients-logo">
                        <a ><img src="<?php echo $baseURL;?>/assets/img/clients/4.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
include "include/footer.php";
?>