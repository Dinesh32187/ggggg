<?php
$title = 'Jetsetgo-Holiday-India | Tours';
include "../include/header.php";
?>
    <!-- Header Banner -->
    <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="6" data-background="<?php echo $baseURL;?>/assets/img/slider/2.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 caption mt-90">
                    <h5>Travel Countries</h5>
                    <h2>Tour Details With <span>Pckages</span></h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Tours 3 -->
    <div class="container">
        <div class="blog-herobox itanary-heropanel text-left" style="background-image:url(<?php echo $baseURL;?>/assets/img/thailand.jpg);">
            <h3 class="shadow-text"><marquee direction="left">Dubai</marquee></h3>
            <div class="dubal-text">
                
                
            </div>
        </div>
    </div>

    <section class="itinerary-panel pt-lg-5 pt-3 latest-articlespanel">
    <div class="container">
        <div class="row">
            <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12">
                <h2 class="com-title-leftborder com-title">Stunning Phuket Honeymoon Package</h2>
                <div>
                    <p>Your dream honeymoon comes true with this 3 night 4 days honeymoon package, including all the honeymoon places in Phuket. Kindle the flame of love in the rain forested, mountainous island in the Andaman Sea, which has some of Thailand’s most popular beaches, mostly situated along the clear waters of the western shore. One of the most visited honeymoon destinations, Phuket is a world in its own, especially for the lovebirds.</p>

                </div>
             
                <div class="package-includesbox">
                    <h2 class="com-title-leftborder com-title mb-4">
                        Package Includes
                    </h2>
                    <div class="package-includes">
                        <span><img src="<?php echo $baseURL;?>/assets/img/img-1.png" alt="">Hotels</span>
                        <span style="display:none;"><img src="/images/flights-icon.png" alt="">Flights</span>
                        <span><img src="<?php echo $baseURL;?>/assets/img/img-2.png" alt="">Transport</span>
                        <span><img src="<?php echo $baseURL;?>/assets/img/img-3.png" alt="">All Meals</span>
                        <span><img src="<?php echo $baseURL;?>/assets/img/img-4.png" alt="">Sightseeing</span>
                    </div>
                    <p>*Except for joining and leaving option, airfare is included for all departure city options.</p>
                </div>
            </div>
            <div class=" col-xl-5 col-lg-5 col-md-12 col-sm-12" id="divForm">
                <div class="booking-formbox">

                    <div class="request-form booking-form">
                        <button class="fa fa-times crossbtn" onclick="closeForm();" aria-hidden="true"></button>
                        <h2>Duration<span class="pull-right">4  days /  3 Nights</span></h2>
                        <h2>Starting from per person<span class="pull-right">₹ 9,700</span></h2>

                        <div class="form-group form-floating">
                            <input type="text" class="form-control" placeholder="Lead Passenger Name" id="txtname" name="txtname">
                            <label for="text"></label>
                        </div>
                        <div class="form-group form-floating">
                            <div class="row mx-0">
                                <div class="col-md-6 col-sm-6 col-xs-6 pl-0 pr-2">
                                    <input type="text" class="form-control" id="totPax" name="totPax" placeholder="Total Traveller" onkeypress="return onlyNumerics(event)">
                                    <label for="text"></label>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6 pr-0 pl-2">
                                    <input type="text" class="form-control" placeholder="Destination" id="DestCity" name="DestCity">
                                    <label for="text"></label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group form-floating">
                            <div class="row mx-0">
                                <div class="col-md-6 col-sm-6 col-xs-6 pl-0 pr-2">
                                    <input type="text" class="form-control" id="fromCity" name="fromCity" placeholder="Departing city">
                                    <label for="text"></label>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6 pr-0 pl-2">
                                    <input type="text" class="form-control hasDatepicker" placeholder="Departure date" id="txtDepartDate" name="txtDepartDate" readonly="">
                                    <label for="text"></label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group form-floating">
                            <input type="text" class="form-control" placeholder="Email ID" id="txtEmail" name="txtEmail">
                            <label for="email"></label>
                        </div>
                        <div class="form-group form-floating">
                            <div class="row mx-0">
                                <div class="col-lg-3 col-md-3 col-sm-2 pl-0 pr-2">
                                    <input type="tel" class="form-control" placeholder="+91">
                                    <label for="tel"></label>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-10 pr-0 pl-2">
                                    <input type="text" class="form-control" placeholder="Mobile Number" id="txtMobile" name="txtMobile" onkeypress="return onlyNumerics(event)" maxlength="10">
                                    <label for="tel"></label>
                                </div>
                            </div>


                        </div>
                        <p id="errormsg" style="color:red;font-size:12px;text-align:justify;"></p>
                        <button class="round-btn squer-btn" type="button" onclick="SubmitQueryData();">
                            Request to book
                            <i id="idQueryFormPB" style="position: absolute;left: 45%;top:86%; color:red; display:none;" class="fa-li fa fa-spinner fa-2x fa-spin" aria-hidden="true"></i>
                        </button>
                        <p id="txtfinalmsg"></p>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>


<section class="itinerary-pacakgepanel">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="itinerary-pacakge-content">
                        <div class="itinerary-pacakgebox">
                            <div class="itinerary-pacakgeimg">
                                    <img src="<?php echo $baseURL;?>/assets/img/2.jpg" alt="">
                            </div>

                            <div class="itinerary-pacakgeinfo">
                                <h5><img class="mr-2" src="<?php echo $baseURL;?>/assets/img/7.png" alt="">Day 1: Phuket Arrival</h5>
                                <p></p><p>On your arrival at the Phuket Airport, you will be met by a representative of the travel agent. You will be transferred to your hotel, where you can check in and relax for a while. You have the remainder of the day at leisure so you can choose to spend the day as you like. Explore the area near the hotel, or stay in and unwind. Spend the night at the hotel.</p>
                                <p></p>
                                <p></p>
                                <p><img class="mr-2" src="<?php echo $baseURL;?>/assets/img/8.png" style="max-height:20px" alt="">Stages :<a href="javascript:void(0)" class="text-green ml-1"><u>Day at Leisure</u></a></p>
                                <p><img class="mr-2" src="<?php echo $baseURL;?>/assets/img/9.png" style="max-height:20px" alt="">Accomodation :<a href="javascript:void(0)" class="text-green ml-1" onclick="showHotel('1');">The Marina Phuket - SHA Extra Plus  ,   Room Type : DELUXE DOUBLE ROOM</a></p>

                               
                            </div>

                        </div>
                            <div class="itinerary-pacakgebox">
                            <div class="itinerary-pacakgeimg">
                                    <img src="<?php echo $baseURL;?>/assets/img/3.jpg" alt="">
                            </div>
                            <div class="itinerary-pacakgeinfo">
                                <h5><img class="mr-2" src="<?php echo $baseURL;?>/assets/img/7.png"" alt="">Day 2: Phuket City Tour </h5>
                                <p></p><p>Enjoy a hearty breakfast at the hotel, after which you can leave for the sightseeing tour that is part of your Phuket itinerary for 4 days. First, you get to traverse through the road that drives you through Patong, Karon, and Kata. You get to visit the 3 Beaches Viewpoint. It is a place from where you get to witness views of Kata Noi, Kata, Karon, and Koh Pu Island. Later, proceed for a leisurely drive around Phuket west coast line starting from Patong till the edge of the island. Lastly, visit Gems factory, Wat Chalong, and a Cashew Nut Factory. End the day with a peaceful slumber in the hotel.</p>
                                <p></p>
                                <p></p>
                                <p><img class="mr-2" src="<?php echo $baseURL;?>/assets/img/8.png"" style="max-height:20px" alt="">Stages :<a href="javascript:void(0)">James Bond Island , </a></p>
                                <p><img class="mr-2" src="<?php echo $baseURL;?>/assets/img/9.png"" style="max-height:20px" alt="">Accomodation :<a href="javascript:void(0)" onclick="showHotel('2');">The Marina Phuket - SHA Extra Plus  ,   Room Type : DELUXE DOUBLE ROOM</a></p>

                               
                            </div>
                        </div>

                        <div class="itinerary-pacakgebox">
                            <div class="itinerary-pacakgeimg">
                                    <img src="<?php echo $baseURL;?>/assets/img/4.jpg" alt="">
                            </div>
                            <div class="itinerary-pacakgeinfo">
                                <h5><img class="mr-2" src="<?php echo $baseURL;?>/assets/img/7.png"" alt="">Day 3: Phuket Phi – Phi Island tour By Big Boat</h5>
                                <p></p><p>Today you get to visit some of the most beautiful islands of Thailand. So after an early breakfast at the hotel, it is time to leave for the island tour. Visit the Northern parts of Phi Phi Islands, which are lesser known, including Bamboo Island. Owing to its geography, it is a perfect place for snorkeling. Then, enjoy a visit to a famous spot, Maya Bay. It was where the shooting of the movie “The Beach” took place. Later, return to the hotel for an overnight stay.</p>
                                 <p></p>
                                <p></p>
                                <p><img class="mr-2" src="<?php echo $baseURL;?>/assets/img/8.png"" style="max-height:20px" alt="">Stages :<a href="javascripti:void(0)">Unlimited Fun , Phi Phi Island , Cruise </a></p>
                                <p><img class="mr-2" src="<?php echo $baseURL;?>/assets/img/9.png"" style="max-height:20px" alt="">Accomodation :<a href="javascripti:void(0)" onclick="showHotel('3');">The Marina Phuket - SHA Extra Plus  ,   Room Type : DELUXE DOUBLE ROOM</a></p>

                                
                            </div>
                        </div>
                           <div class="itinerary-pacakgebox">
                            <div class="itinerary-pacakgeimg">
                                    <img src="<?php echo $baseURL;?>/assets/img/6.jpg" alt="">
                            </div>
                            <div class="itinerary-pacakgeinfo">
                                <h5><img class="mr-2" src="<?php echo $baseURL;?>/assets/img/7.png"" alt="">Day 4: Departure Phuket</h5>
                                <p></p><p>After an amazing breakfast at the hotel, it is time to check out and proceed for departure. Later, you will be dropped at the Phuket airport for carrying on your onward journey.</p>
                                <p></p>
                                <p></p>
                                <p><img class="mr-2" src="<?php echo $baseURL;?>/assets/img/8.png"" style="max-height:20px"  alt="">Stages :<a href="javascripti:void(0)">Departure</a></p>
                                <p><img class="mr-2" src="<?php echo $baseURL;?>/assets/img/9.png" style="max-height:20px" alt="">Accomodation :<a href="javascripti:void(0)" onclick="showHotel('4');"></a></p>

                                
                            </div>
                        </div>
                                                                                

                     </div>
                <div class="practical-box" style="display:none;">
                    <h3 class="title-h3">Practical information</h3>
                    <ul>
                        <li>
                            <img src="/images/dollar-icon.png" alt="">
                            <p>Starting from <strong class="d-block">$790 per person</strong></p>
                        </li>
                        <li>
                            <img src="/images/shield-icon.png" alt="">
                            <p>
                                No stress program <strong class="d-block">
                                    Free cancellation 30 days<br>
                                    before departure
                                </strong>
                            </p>

                        </li>
                        <li>
                            <img src="/images/aeroplane.png" alt="">
                            <p>
                                International flights<strong class="d-block">
                                    Not included
                                </strong>
                            </p>
                        </li>
                    </ul>
                    <a href="#" class="round-btn border-btn">More Information</a>
                </div>

   
                
                    </div>

                </div>

            </div>
        </div>
    </div>
</section>






<?php
include "../include/footer.php";
?>