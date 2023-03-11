<a class="enquiry-now" href="javascript:void(0)" id="mpopupLink">Enquiry Now</a>

<!-- Modal popup box -->
<div id="mpopupBox" class="mpopup">
    
    <div class="modal-content">
        <div class="modal-header">
            
            <h2>Please share your details to get a custom quote</h2>
            <span class="close">×</span>
        </div>
        
            <form name="RegForm" onsubmit="return GEEKFORGEEKS()"  action="">
                <div class="enq-pop-input active">
                    <label for="">Full Name</label>
                    <input class="enq-control" type="text" name="name" id="txtname7" style=height:50px;>
                </div>
                <div class="enq-pop-input active">  
                <label for="">Phone No.</label>
                    <input class="enq-control" name="phone"  type="text" placeholder="+91" id="txtMobile7" maxlength="10" onkeypress="return onlyNumerics(event)"style=height:50px;>
                </div>
                <div class="enq-pop-input active">
                    <label for="">Email ID</label>
                    <input class="enq-control" name="email"  type="text" id="txtEmail7"style=height:50px;>
                </div>
                <div class="enq-pop-input active">
                    <label for="">Destination</label>
                    <input class="enq-control" name="destination"  type="text" id="DestCity7"style=height:50px;>
                </div>
                <div class="enq-pop-input enq-pop-input-columbox">
                <div class="enq-pop-input active" style="margin-left: 5px;">
                        <label for="">Departure Date</label>
                        <input class="enq-control" name="departure" type="text" id="totPax7" onkeypress="return onlyNumerics(event)"style=height:50px;>
                    </div>
                    <div class="enq-pop-input active" style="margin-left: 5px;">
                        <label for="">No. of People</label>
                        <input class="enq-control" name="nopepople" type="text" id="totPax7" onkeypress="return onlyNumerics(event)"style=height:50px;>
                    </div>
                </div>
                <div class="enq-pop-input active">
                    <p id="errormsg7" style="color:red;font-size:12px;text-align:justify;"></p>
                    <button>
                        Submit Enquiry
                        <i id="idQueryFormPB7"   style="position: absolute;left: 45%;top:86%; color:red; display:none;" class="fa-li fa fa-spinner fa-2x fa-spin" aria-hidden="true"></i>
                    </button>
                    <p id="txtfinalmsg7"></p>
                </div>
            </form>
            
              
        </div>
    </div>




 
    <!-- Footer -->
    <footer class="footer clearfix">
        <div class="container">
    
            <!-- Second footer -->
            <div class="second-footer">
                <div class="row">
                    <!-- about & social icons -->
                    <div class="col-md-4 widget-area">
                        <div class="widget clearfix">
                            <!-- <div class="footer-logo"> <img class="img-fluid" src="<?php echo $baseURL;?>/assets/img/logo-1.png" alt=""> </div> -->
                            <h3 class="widget-title">Our Story</h3>
                            <div class="widget-text">
                                <p>It matters more on how you view the world. We take great pride in the destinations we visit,
                                    and we make every effort to make your stay worthwhile.</p>
                                <div class="social-icons">
                                    <ul class="list-inline">
                                        <li><a href="#"><i class="ti-instagram"></i></a></li>
                                        <li><a href="#"><i class="ti-twitter"></i></a></li>
                                        <li><a href="#"><i class="ti-facebook"></i></a></li>
                                        <li><a href="#"><i class="ti-youtube"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- quick links -->
                    <div class="col-md-3 offset-md-1 widget-area">
                        <div class="widget clearfix usful-links">
                            <h3 class="widget-title">Quick Links</h3>
                            <ul>
                                <li><a href="<?php echo $baseURL;?>/pages/about.php">About</a></li>
                                <li><a href="<?php echo $baseURL;?>/pages/gallery.php">Gallery</a></li>
                                <li><a href="<?php echo $baseURL;?>/pages/service.php">Service</a></li>

                                <li><a href="<?php echo $baseURL;?>/pages/contact.php">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- subscribe -->
                    <div class="col-md-4 widget-area">
                        <div class="widget clearfix">
                            <h3 class="widget-title">Subscribe</h3>
                            <p>Sign up for our monthly blogletter to stay informed about travel and tours</p>
                            <div class="widget-newsletter">
                                <form action="#">
                                    <input type="email" placeholder="Email Address" required>
                                    <button type="submit">Send</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Bottom footer -->
            <div class="bottom-footer-text">
                <div class="row copyright">
                    <div class="col-md-12">
                        <p class="mb-0">©2023 jetsetgoholidayindia. All rights reserved by <a href="https://shootdartsolutions.com">shootdart Solutions</a></p>
                    </div>
                </div>
            </div>
        </div>
        <a target="_blank" href="https://wa.me/9556677620" class="whatsapp-button"><i class="fa fa-whatsapp"></i></a>
    </footer>
    
    <!-- jQuery -->
    <script src="<?php echo $baseURL;?>/assets/js/jquery-3.6.0.min.js"></script>
    <script src="<?php echo $baseURL;?>/assets/js/jquery-migrate-3.0.0.min.js"></script>
    <script src="<?php echo $baseURL;?>/assets/js/modernizr-2.6.2.min.js"></script>
    <script src="<?php echo $baseURL;?>/assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="<?php echo $baseURL;?>/assets/js/jquery.isotope.v3.0.2.js"></script>
    <script src="<?php echo $baseURL;?>/assets/js/pace.js"></script>
    <script src="<?php echo $baseURL;?>/assets/js/popper.min.js"></script>
    <script src="<?php echo $baseURL;?>/assets/js/bootstrap.min.js"></script>
    <script src="<?php echo $baseURL;?>/assets/js/scrollIt.min.js"></script>
    <script src="<?php echo $baseURL;?>/assets/js/jquery.waypoints.min.js"></script>
    <script src="<?php echo $baseURL;?>/assets/js/owl.carousel.min.js"></script>
    <script src="<?php echo $baseURL;?>/assets/js/jquery.stellar.min.js"></script>
    <script src="<?php echo $baseURL;?>/assets/js/jquery.magnific-popup.js"></script>
    <script src="<?php echo $baseURL;?>/assets/js/YouTubePopUp.js"></script>
    <script src="<?php echo $baseURL;?>/assets/js/select2.js"></script>
    <script src="<?php echo $baseURL;?>/assets/js/datepicker.js"></script>
    <script src="<?php echo $baseURL;?>/assets/js/jquery.counterup.min.js"></script>
    <script src="<?php echo $baseURL;?>/assets/js/smooth-scroll.min.js"></script>
    <script src="<?php echo $baseURL;?>/assets/js/custom.js"></script>
    <script src="<?php echo $baseURL;?>/assets/js/ng-infinite-scroll.js"></script>
    
</body>

</html>