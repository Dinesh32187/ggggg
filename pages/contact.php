<?php
$title = 'Jetsetgo-Holiday-India | Contact';
include "../include/header.php";
?>
    <!-- Header Banner -->
    <div class="banner-header section-padding back-position-center valign bg-img bg-fixed" data-overlay-dark="5" data-background="<?php echo $baseURL;?>/assets/img/slider/15.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 caption mt-90">
                    <h5>Get in touch</h5>
                    <h1>Contact <span>Us</span></h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact -->
    <section class="contact section-padding">
        <div class="container">
            <div class="row mb-90">
                <div class="col-md-6 mb-60">
                    <h3>Travel Agency Inc.</h3>
                    <p>You choose the travel experts who most impress you. After you have the appropriate
                        itinerary, book it with a travel expert who will confirm all the services and organise all the

                        logistics, including providing you with assistance around-the-clock for the duration of your
                        trip.</p>
                    <div class="phone-call mb-30">
                        <div class="icon"><span class="flaticon-phone-call"></span></div>
                        <div class="text">
                            <p>Phone</p> <a href="tel:9556677620">9556677620</a>
                        </div>
                    </div>
                    <div class="phone-call mb-30">
                        <div class="icon"><span class="flaticon-message"></span></div>
                        <div class="text">
                            <p>e-Mail Address</p> <a href="mailto:jetsetgoholidaysbbi@gmail.com">jetsetgoholidaysbbi@gmail.com</a>
                        </div>
                    </div>
                    <div class="phone-call">
                        <div class="icon"><span class="flaticon-placeholder"></span></div>
                        <div class="text">
                            <p>Location</p> plot No-1, udyan marg forest park
                            <br>Bhubaneswar - 751009
                        </div>
                    </div>
                </div>
                <div class="col-md-5 mb-30 offset-md-1">
                    <div class="sidebar">
                        <div class="right-sidebar">
                            <div class="right-sidebar item">
                                <h2>Get in touch</h2>
                                <form method="post" class="right-sidebar item-form contact__form" action="">
                                    <!-- form message -->
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="alert alert-success contact__msg" style="display: none" role="alert"> Your message was sent successfully. </div>
                                        </div>
                                    </div>
                                    <!-- form elements -->
                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <input name="name" type="text" placeholder="Your Name *" required>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <input name="email" type="email" placeholder="Your Email *" required>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <input name="phone" type="text" placeholder="Your Number *" required>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <input name="subject" type="text" placeholder="Subject *" required>
                                        </div>
                                        <div class="col-md-12 form-group">
                                            <textarea name="message" id="message" cols="30" rows="4" placeholder="Message *" required></textarea>
                                        </div>
                                        <div class="col-md-12">
                                            <button class="butn-dark"><a href="#0"><span>Send Message</span></a></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Map Section -->
            
        </div>
        <div class="row">
                <div class="col-md-12 animate-box" data-animate-effect="fadeInUp">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3743.094440073691!2d85.8289267149198!3d20.254917686422697!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a19a798ab5adb8f%3A0xe0a210e0ffc58b38!2sJet%20Set%20Go%20Holidays!5e0!3m2!1sen!2sin!4v1677477838682!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
    </section>

    <!-- Clients -->
    <section class="clients">
        <div class="container">
            <div class="row">
                <div class="col-md-12 owl-carousel owl-theme">
                    <div class="clients-logo">
                        <a href="#0"><img src="<?php echo $baseURL;?>/assets/img/clients/1.png" alt=""></a>
                    </div>
                    <div class="clients-logo">
                        <a href="#0"><img src="<?php echo $baseURL;?>/assets/img/clients/2.png" alt=""></a>
                    </div>
                    <div class="clients-logo">
                        <a href="#0"><img src="<?php echo $baseURL;?>/assets/img/clients/3.png" alt=""></a>
                    </div>
                    <div class="clients-logo">
                        <a href="#0"><img src="<?php echo $baseURL;?>/assets/img/clients/4.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
include "../include/footer.php";
?>